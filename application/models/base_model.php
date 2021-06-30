<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Base_Model extends CI_Model  
{
		
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function checkLogin($email, $password){
		$query = $this->db->query("SELECT `login_id`, `username`, `usertype`, `mobile`, `email` FROM `login_info` WHERE `email`='".$email."' AND `password`='".$password."' AND is_status=1");
		$row['total_record'] = $query->row();
		if(isset($row['total_record']->login_id)){
			$data = array(
				'user_id' => $row['total_record']->login_id,
				'username' => $row['total_record']->username,
				'mobile'=>$row['total_record']->mobile,
				'usertype'=>$row['total_record']->usertype,
				'email'=>$row['total_record']->email
				);
			$row['result'] = $this->session->set_userdata($data);
			return true;
		}else{
			return false;
		}
	
	}
	
	function create_thumbnail($sourceimage,$newpath, $width, $height)
	{
		$this->load->library('image_lib');
		$this->image_lib->clear();
		
		$config['image_library'] = 'gd2';
		$config['source_image'] = $sourceimage;
		$config['create_thumb'] = TRUE;
		$config['new_image'] = $newpath;
		$config['dynamic_output'] = FALSE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = $width;
		$config['height'] = $height;
	    $config['thumb_marker'] = '';
		
		$this->image_lib->initialize($config); 
		return $this->image_lib->resize();
	}
	
	function validate_upload_image($fieldmessage,$fieldname,$filepath,$thumbnailpath='',$width='',$height='')
	{
		$config['upload_path'] = $filepath;
		$config['allowed_types'] = 'gif|jpeg|jpg|png';
		//$config['max_size']	= '500';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
		$config['remove_spaces'] = TRUE;
		$config['overwrite'] = FALSE;
		//print_r($config);
		//die();
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload($fieldname))
		{
			$this->form_validation->set_message($fieldmessage,$this->upload->display_errors());
			return $this->upload->display_errors();
			//return FALSE;
		}
		else
		{
			$filedata = $this->upload->data();
			
			//$this->session->set_userdata('uploadedphotoname',$filedata['file_name']);
			$this->uploadedimagename = $filedata['file_name'];
			if(!empty($thumbnailpath))
			{
				 $this->create_thumbnail($filedata['full_path'],$thumbnailpath,$width,$height);
			}
			return TRUE;
		}
	}
	
	//General database operations
	function run_query( $query )
	{
		return($this->db->query( $query )->result());  
	}
	
	function getMaxId($TableName,$ColName)
	{
		$query = $this->db->query("select max(".$ColName.") as Id from ".$this->db->dbprefix($TableName))->result();
		return $query[0]->Id;
		
	}
	
	function insert_operation( $inputdata, $table )
	{
		if($this->db->insert($this->db->dbprefix($table),$inputdata))
		return 1;
		else 
		return 0;
	}
	
	function insert_operation_id( $inputdata, $table )
	{
		$result = $this->db->insert($this->db->dbprefix($table),$inputdata);
		return $this->db->insert_id();
	}
	
	function update_operation( $inputdata, $table, $where )
	{
		$result  = $this->db->update($this->db->dbprefix($table),$inputdata, $where);
		//echo $this->db->last_query();
		return $result;
	}
	
	function insert_or_update($inputdata,$table,$where='',$id='')
	{
		
	}
	
	function fetch_records_from( $table, $condition = '',$select = '*', $order_by = '' )
	{
		$this->db->select($select, FALSE);
		$this->db->from( $this->db->dbprefix( $table ) );
		if( !empty( $condition ) )
			$this->db->where( $condition );
		//$this->db->where( array( 'is_deleted' => 'no' ) );
		if( !empty( $order_by ) )
			$this->db->order_by( $order_by );
		$result = $this->db->get();
		return $result->result();
	}
	
	function fetch_single_column_value($table, $column, $where)
	{
		$this->db->select($column,FALSE);
		$this->db->from( $this->db->dbprefix( $table ) );
		
		if( !empty( $where ) )
			$this->db->where( $where );
		$result_rs = $this->db->get();
		$result = $result_rs->result();
		if( count( $result ) > 0 )
			$ret = $result[0]->$column;
		else
			$ret = '-';
		return $ret;
	}
	
	
	
	function changestatus( $table, $inputdata, $where  )
	{
		$result = $this->db->update($this->db->dbprefix($table),$inputdata, $where);
		return $result;
	}
	
	function delete_record($table, $where)
	{	
		$result = $this->db->delete( $table, $where );
		return $result;
	}
	
	// fetching the products from database
	
	function fetch_products( $condition = '', $andcondition = '', $featurecondition = '', $offset = '', $perpage = '' )
	{}
	function get($data)
{}
		
	function get_combo_items($Id)
	{}
	function getAreas($TableName='',$Val='',$Name='')
	{
		return($this->db->query("Select ".$Val.",".$Name." from ".$TableName."")->result());
	}
	function check_duplicate($table_name,$col_name='*',$cond,$cond_val)
	{
		
		$this->db->where(array($cond=>$cond_val));
		$this->db->from($this->db->dbprefix($table_name));
		$query = $this->db->get();
		$rows = $query->num_rows();
		if( $rows > 0 )
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	function get_all_products()
	{
		$this->db->select('*');
		$this->db->from($this->db->dbprefix('products'));
		$result = $this->db->get(); 
		return $result->result();
	}
	function get_members( $condition = '' )
	{
		if( !(empty($condition)) )
		
		$this->db->where( $condition );
		//$this->db->where('password !=','0');
		$this->db->select('*');
		$this->db->from($this->db->dbprefix('users'));
		$result = $this->db->get(); 
		return $result->result();
	}
	
	function fetch_users( $condition = '', $andcondition = '', $featurecondition = '', $offset = '', $perpage = '' )
	{
		$this->db->start_cache();
		$this->db->select("*",FALSE);

		$this->db->from( 'users'  );
		//$this->db->order_by( 'date_created', 'desc' );

		if( !empty( $condition ) )
		$this->db->where( $condition );
		if( !empty( $andcondition ) )
		$this->db->where( $andcondition, 'date(now())',FALSE );
		if( !empty( $featurecondition ) )
		$this->db->where( $featurecondition );
		$this->db->stop_cache();

		$this->numrows = $this->db->count_all_results();

		//$this->db->limit($perpage,$offset);
		$result = $this->db->get();
		$this->db->flush_cache();
		//echo $this->db->last_query(); die();
		return $result->result();
		
	}
	
	function check_duplicate_wheres($table_name, $where)
	{
		$this->db->where($where);
		$this->db->from($this->db->dbprefix($table_name));
		$query = $this->db->get();
		$rows = $query->num_rows();
		if( $rows > 0 )
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	public function custom($sql){
		$output = $this->db->query($sql);
		log_message('info', $this->db->last_query());//this line write log for query
		return $output->result();
	}
	
	public function custom_delete($sql){
		$this->db->query($sql);
	}
}
?>