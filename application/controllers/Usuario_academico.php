<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_academico extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Usuario_academico_model');
	}

	function index(){
		redirect('usuario', 'refresh');
	}

	//
	function get($idaca){
		$this->index();
	}	

	//
	function add(){
		// Validaciones
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='USR'){
			redirect('usuario', 'refresh');	
		}		

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');	

		//Reglas
		$data['rules_usuario_academico'] = $this->Usuario_academico_model->usuario_academico_rules;
		$data['meses'] = $this->Usuario_academico_model->meses;
		$data['anios'] = $this->Usuario_academico_model->anios;

		$this->form_validation->set_rules($data['rules_usuario_academico']);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'idusu' => $datasession['idusu'],
				'titulo' => $this->input->post('titulo'),
				'nivelEstudio' => $this->input->post('nivelEstudio'),
				'institucion' => $this->input->post('institucion'),
				'mesInicio' => $this->input->post('mesInicio'),
				'anioInicio' => $this->input->post('anioInicio'),
				'mesFin' => $this->input->post('mesFin'),
				'anioFin' => $this->input->post('anioFin')
			);
			$this->Usuario_academico_model->add($data);
			redirect('usuario', 'refresh');
		}

		//
		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario_academico/add_usuario_academico',$data);
		$this->load->view('template/footer');
	}

	//
	function edit($idaca = NULL){
		// Validaciones
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='USR'){
			redirect('usuario', 'refresh');	
		}
		if(!$this->Usuario_academico_model->get($idaca)){
			redirect('usuario', 'refresh');
		}		

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');	

		//Reglas
		$data['rules_usuario_academico'] = $this->Usuario_academico_model->usuario_academico_rules;
		$data['meses'] = $this->Usuario_academico_model->meses;
		$data['anios'] = $this->Usuario_academico_model->anios;

		$this->form_validation->set_rules($data['rules_usuario_academico']);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'idusu' => $datasession['idusu'],
				'titulo' => $this->input->post('titulo'),
				'nivelEstudio' => $this->input->post('nivelEstudio'),
				'institucion' => $this->input->post('institucion'),
				'mesInicio' => $this->input->post('mesInicio'),
				'anioInicio' => $this->input->post('anioInicio'),
				'mesFin' => $this->input->post('mesFin'),
				'anioFin' => $this->input->post('anioFin')
			);
			$this->Usuario_academico_model->edit($idaca,$data);
			redirect('usuario', 'refresh');
		}		

		$data['usuario_academico'] = $this->Usuario_academico_model->get($idaca);
		//
		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario_academico/edit_usuario_academico',$data);
		$this->load->view('template/footer');
	}

	//
	function del($idaca = NULL){
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='USR'){
			redirect('usuario', 'refresh');
		}
		if(!$this->Usuario_academico_model->get($idaca)){
			redirect('usuario', 'refresh');
		}		

		$this->Usuario_academico_model->del($idaca);
		redirect('usuario', 'refresh');
	}

}