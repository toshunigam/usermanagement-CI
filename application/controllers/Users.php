<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Base_Model');
		$uid=$this->session->userdata('user_id');
		if(empty($uid))
			redirect('index.php/signup/login','refresh');
	}
	
	public function staffgrid()
	{
		$sql="select * from login_info where is_deleted=1";
		$res = $this->Base_Model->custom($sql);
		$data['detail'] = $res;
		
		$data['header']='header.php';
		$data['sidebar']='aside-menu.php';
		$data['footer']='footer.php';
		$data['content']='staff/userslist.php';
		$this->load->view('main',$data);

	}
	
	public function addUser()
	{
		
		$this->load->helper('form','url');
		$this->load->library('form_validation'); 
		$this->form_validation->set_error_delimiters('<div class="txt-warning">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('confirm-password', 'Confirm Password', 'trim|matches[password]');
		$this->form_validation->set_rules('usertype', 'Usertype', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['header']='header.php';
			$data['sidebar']='aside-menu.php';
			$data['footer']='footer.php';
			$data['content']='staff/adduser.php';
			$this->load->view('main',$data);

		}else{
			$uname = $this->security->xss_clean($this->input->post('username'));
			$pwd = $this->security->xss_clean($this->input->post('password'));
			$email = $this->security->xss_clean($this->input->post('email'));
			$utype = $this->security->xss_clean($this->input->post('usertype'));
			$records = array(
				'username'=> $uname,
				'password'=>$pwd,
				'email'=>$email,
				'usertype'=>$utype
			);
			$last_id = $this->Base_Model->insert_operation_id($records,'login_info');
			if($utype=='staff'){
				$inputdata['name']=$uname;
				$inputdata['login_id']=$last_id;
				$inputdata['created_date']=date('Y-m-d');
				$inputdata['created_by']=$this->session->userdata('user_id');
				$this->Base_Model->insert_operation($inputdata,'staff_info');
			}elseif($utype=='organisation'){
				$inputdata['name']=$uname;
				$inputdata['login_id']=$last_id;
				$this->Base_Model->insert_operation($inputdata,'company_info');
			}elseif($utype=='customer'){
				$inputdata['login_id']=$last_id;
				$this->Base_Model->insert_operation($inputdata,'customer_info');
			}
			redirect('index.php/users/staffgrid','refresh');
		}
	}
	
	public function editUser()
	{
		$key = $this->uri->segment(3);
		$this->load->helper('form','url');
		$this->load->library('form_validation'); 
		$this->form_validation->set_error_delimiters('<div class="txt-warning">', '</div>');
		$this->form_validation->set_rules('usertype', 'Usertype', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			// $this->addStaff();
			if($key){
				$sql="select * from login_info where login_id=$key";
				$res=$this->Base_Model->custom($sql);
				
			}else{
				$res='no detail found';
			}
			$data['detail']=$res;
			$data['header']='header.php';
			$data['sidebar']='aside-menu.php';
			$data['footer']='footer.php';
			$data['content']='staff/edituser.php';
			$this->load->view('main',$data);
		}else{
			$pwd = $this->security->xss_clean($this->input->post('password'));
			$utype = $this->security->xss_clean($this->input->post('usertype'));
			$username = $this->security->xss_clean($this->input->post('username'));
			$records = array(
				'usertype'=>$utype,
				'username'=>$username
			);
			$this->Base_Model->update_operation($records,'login_info',array('login_id'=>$key));
			redirect('index.php/users/staffgrid','refresh');
		}
	}
	
	public function deleteUser()
	{
		$key = $this->uri->segment(3);
		if($key){
			$sql="select count(*) num from login_info where login_id=$key";
			$res=$this->Base_Model->custom($sql);
			if($res[0]->num>0){
				$this->Base_Model->update_operation(array('is_deleted'=>0),'login_info',array('login_id'=>$key));
				redirect('index.php/users/staffgrid','refresh');
			}else{
				
			}
		}
		redirect('index.php/users/staffgrid','refresh');
	}
	
	public function activate()
	{
		$key = $this->uri->segment(3);
		if($key)
		{
			$this->Base_Model->update_operation(array('is_status'=>1),'login_info',array('login_id'=>$key));
			redirect('index.php/users/staffgrid','refresh');
		}
	}
	
	public function block()
	{
		$key = $this->uri->segment(3);
		if($key)
		{
			$this->Base_Model->update_operation(array('is_status'=>0),'login_info',array('login_id'=>$key));
			redirect('index.php/users/staffgrid','refresh');
		}
	}
	
}
