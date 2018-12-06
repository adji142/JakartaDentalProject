<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Id extends CI_Controller
{
	private $perPage = 6;
	function __construct()
	{
		parent::__construct();
          //session_start();
        $this->load->helper('cookie');
        $this->load->model('M_dash');
		$this->load->model('M_controllroom');
	}
	function index(){
		$this->load->view('front/index');
	}
	function admin(){
		$this->load->view('account/login');
	}
}
?>