<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Usuario_model');
	}

	function index(){
		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['usuario_info'] = $this->Usuario_model->getUsuarioInfo($datasession['idusu']);
		$data['usuario_academico'] = $this->Usuario_model->getUsuarioAcademico($datasession['idusu']);
		$data['usuario_laboral'] = $this->Usuario_model->getUsuarioLaboral($datasession['idusu']);

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario/usuario',$data);
		$this->load->view('template/footer');
	}
}