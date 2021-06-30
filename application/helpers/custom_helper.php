<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('is_access'))
{
    function is_access($module, $usertype, $action=null)
    {
		$CI =& get_instance();
        $CI->load->model('Base_Model');
		if($action!=null){
			$permission = $CI->Base_Model->run_query("select count(*) num from ".$CI->db->dbprefix('role_permission_ctrl_tbl')." WHERE is_status=1 AND module='".$module."' AND $action=1 AND usertype = '".$usertype."'");
		}else{
			$permission = $CI->Base_Model->run_query("select count(*) num from ".$CI->db->dbprefix('role_permission_ctrl_tbl')." WHERE is_status=1 AND usertype = '".$usertype."' AND module='".$module."'");
		}
		// log_message('error',$CI->db->last_query());
		if($permission[0]->num > 0)
			return TRUE;
		else
			return FALSE;
	}
}
