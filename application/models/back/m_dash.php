<?php
/**
* 
*/
class m_dash extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function sidebar_mn($level){
		return $this->db->query("select * from app_menu where level ='$level' and active = 1 order by id");
	}
	function user_info($id_reg){
		$this->db->where('id',$id_reg);
		return $this->db->get('secure_users');
	}
	function upload($update,$where,$table){
		$this->db->where($where);
		return $this->db->update($table,$update);
	}
	function go_update_post($date_now){
		return $this->db->query("update app_post set status='expired' where end_period <= '$date_now'");
	}
}
?>