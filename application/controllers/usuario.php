<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('usuario/usuario');
		$this->load->view('template/footer');
	}
}
