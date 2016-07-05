<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Usuario_model');
	}

	public function index(){
		$var = 2;

		$data['usuario_info'] = $this->Usuario_model->getUsuarioInfo($var);
		$data['usuario_academico'] = $this->Usuario_model->getUsuarioAcademico($var);
		$data['usuario_laboral'] = $this->Usuario_model->getUsuarioLaboral($var);


		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('usuario/usuario',$data);
		$this->load->view('template/footer');
	}
}
