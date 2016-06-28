<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		//$this->load->model('Login_model');
	}


	public function index(){
		//echo base_url();
		//echo base_url(DS);
		//echo base_url(PATH_BACK);
		//echo base_url(PATH_MENU);

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('login/login');
		$this->load->view('template/footer');
	}
}