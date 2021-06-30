<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Base_model');

	}

	public function index()
	{
		redirect('index.php/signup/login','refresh');
			$data['header']='header.php';
			$data['sidebar']='aside-menu.php';
			$data['footer']='footer.php';
			$this->load->view('login',$data);
	}

	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Your Email','required');
		$this->form_validation->set_rules('password','Your Password','required');
		if ($this->form_validation->run() === FALSE)
		{
			// die('hithere');
			$data['header']='header.php';
			$data['sidebar']='aside-menu.php';
			$data['footer']='footer.php';
			$this->load->view('login',$data);
		}else{
			$email = $this->input->post('email');
			// die('hi there');
			$password = $this->input->post('password');
			if(!empty($email)){
				$res = $this->Base_model->checkLogin($email,$password);
			}else{
				$this->session->set_flashdata("message", "<div role='alert' class='alert alert-danger alert-dismissible'>
					<button aria-label='Close' data-dismiss='alert' class='close' type='button'>
					<span aria-hidden='true'>×</span>
					</button>
					FAILED : Invalid User Id/Password
					</div>"); 
			}
			// log_message('error',$res);
			if(!empty($res)){
				redirect('index.php/users/staffgrid', 'refresh');
			}else{
				$this->session->set_flashdata("message", "<div role='alert' class='alert alert-danger alert-dismissible'>
					<button aria-label='Close' data-dismiss='alert' class='close' type='button'>
					<span aria-hidden='true'>×</span>
					</button>
					FAILED : Invalid User Id/Password
					</div>"); 
				$data['header']='header.php';
				$data['sidebar']='aside-menu.php';
				$data['footer']='footer.php';
				$this->load->view('login',$data);
			}
		}
	}
	
	public function Profile()
	{
		$user_id = $this->session->userdata('user_id');
		$utype = $this->session->userdata('usertype');
		switch($utype)
		{
			case 'customer':
				$table = 'customer_info';
				break;
			case 'staff':
				$sql="select li.username, li.email, li.usertype, li.mobile, si.profile_image, si.name, si.phone from login_info li JOIN staff_info si ON li.login_id=si.login_id where li.login_id='".$user_id."'";
				break;
			case 'organisation':
				$table = 'company_info';
				break;
			default:
				$sql="select li.username, li.email, li.usertype, li.mobile from login_info li where li.login_id='".$user_id."'";
				break;
		}
		$data['detail'] = $this->Base_model->custom($sql);
		log_message('error',$this->db->last_query());
		$data['header']='header.php';
		$data['sidebar']='aside-menu.php';
		$data['footer']='footer.php';
		$data['content']='profile.php';
		$this->load->view('main',$data);
	}
	
	public function Logout()
	{
		$this->session->sess_destroy();
		$data['title'] = ucfirst('login');
		$this->load->helper('language');
		redirect('index.php/signup/login', 'refresh');
	}
	
	public function error404()
	{
		$data['content']='errors/html/error_404.php';
		$this->load->view('main',$data);
	}
	
	public function DriverLogin($email, $password)
	{
		$sql = "SELECT id, company_info_id, license_number, year_of_experiance, profile_picture, schedule_start_time, schedule_end_time, shift_time_end, shift_time_start, mobile, gender, email, firstname, lastname, dob, license_expiring, is_status, 'driver' as usertype FROM driver_info WHERE is_status=1 AND license_number='".$email."' AND password='".$password."'";
		$result = $this->Base_model->custom($sql);
		$sess_data = array(
		'user_id'=>$result[0]->id,
		'usertype'=>'driver',
		'username'=>$result[0]->firstname,
		'mobile'=>$result[0]->mobile,
		'email'=>$result[0]->email
		);
		$row['result'] = $this->session->set_userdata($sess_data);
		if(!empty($result)){
			redirect('index.php/driver/profile', 'refresh');
		}else{
			$this->session->set_flashdata("message", "<div role='alert' class='alert alert-danger alert-dismissible'>
				<button aria-label='Close' data-dismiss='alert' class='close' type='button'>
				<span aria-hidden='true'>×</span>
				</button>
				FAILED : Invalid User Id/Password
				</div>");
			$this->load->view('signup.php');
		}
	}
}
