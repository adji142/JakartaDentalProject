<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class m_controllroom extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		function storestaff($input,$table)
		{
			$this->db->insert($table,$input);
		}
		function GetStaff()
		{
			return $this->db->get('app_staff');
		}
		function storeabout($input,$table)
		{
			$this->db->insert($table,$input);
		}
		function Getabout()
		{
			return $this->db->get('app_about');
		}
		function deleteabout($id)
		{
			$sql = 'delete from app_about where id = '.$id.'';
			return $this->db->query($sql);
		}
		function setdefault($id)
		{
			$sql = 'update app_about set inuse = 1 where id = '.$id;
			return $this->db->query($sql);	
		}
		function Rollback($id)
		{
			$sql = 'update app_about set inuse = 0 where id != '.$id;
			return $this->db->query($sql);	
		}
		function Getabout_detaiil()
		{
			$this->db->where('inuse',1);
			$this->db->limit(1);
			return $this->db->get('app_about');
		}
		function ImgSliderdata()
		{
			return $this->db->get('staging_image');
		}
		function DeleteStaging()
		{
			$sql = 'delete from staging_image';
			return $this->db->query($sql);
		}
		function deletestaff($id)
		{
			$sql = 'delete from app_staff where id = '.$id.'';
			return $this->db->query($sql);
		}
		function GetStaff_Detail()
		{
			return $this->db->get('app_staff');
		}
	}
?>