<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class id extends CI_Controller
{
	private $perPage = 6;
	function __construct()
	{
		parent::__construct();
          //session_start();
        $this->load->helper('cookie');
        $this->load->model('back/m_dash');
		$this->load->model('back/m_controllroom');
	}
	function index(){
		$this->load->view('front/index');
	}
	function admin(){
		$this->load->view('account/login');
	}
}
?>