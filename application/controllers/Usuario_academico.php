<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_academico extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model(SYS_MODEL);
		$this->load->model(USUARIO_ACADEMICO_MODEL);
	}
	// Index
	function index(){
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
	}
	// Agregar informacion academica de usuario
	function add(){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if($this->session->userdata(IDROL_SESSION)!=USR){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		$rules = $this->Usuario_academico_model->usuario_academico_rules;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				IDUSU => $this->session->userdata(IDUSU_SESSION),
				TITULO => $this->input->post(TITULO),
				NIVEL_ESTUDIO => $this->input->post(NIVEL_ESTUDIO),
				INSTITUCION => $this->input->post(INSTITUCION),
				MES_INICIO => $this->input->post(MES_INICIO),
				ANIO_INICIO => $this->input->post(ANIO_INICIO),
				MES_FIN => $this->input->post(MES_FIN),
				ANIO_FIN => $this->input->post(ANIO_FIN)
			);
			$this->Usuario_academico_model->add($data);
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		$data['usuario_academico_rules'] = $rules;
		$data['form_attributes'] = $this->Sys_model->form_attributes;
		$data['meses'] = $this->Sys_model->meses;
		$data['anios'] = $this->Sys_model->anios;
		$this->load->view(HEADER);
		$this->load->view(MENU);
		$this->load->view(ADD_USUARIO_ACADEMICO,$data);
		$this->load->view(FOOTER);
	}
	// Editar informacion academica de usuario
	function edit($idaca = NULL){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if($this->session->userdata(IDROL_SESSION)!=USR){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		if(!$this->Usuario_academico_model->get($idaca)){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		$rules = $this->Usuario_academico_model->usuario_academico_rules;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				TITULO => $this->input->post(TITULO),
				NIVEL_ESTUDIO => $this->input->post(NIVEL_ESTUDIO),
				INSTITUCION => $this->input->post(INSTITUCION),
				MES_INICIO => $this->input->post(MES_INICIO),
				ANIO_INICIO => $this->input->post(ANIO_INICIO),
				MES_FIN => $this->input->post(MES_FIN),
				ANIO_FIN => $this->input->post(ANIO_FIN)
			);
			$this->Usuario_academico_model->edit($idaca,$data);
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		$data['usuario_academico'] = $this->Usuario_academico_model->get($idaca);
		$data['usuario_academico_rules'] = $rules;
		$data['form_attributes'] = $this->Sys_model->form_attributes;
		$data['meses'] = $this->Sys_model->meses;
		$data['anios'] = $this->Sys_model->anios;
		$this->load->view(HEADER);
		$this->load->view(MENU);
		$this->load->view(EDIT_USUARIO_ACADEMICO,$data);
		$this->load->view(FOOTER);
	}
	// Eliminar informacion academica de usuario
	function del($idaca = NULL){
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if($this->session->userdata(IDROL_SESSION)!=USR){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		if(!$this->Usuario_academico_model->get($idaca)){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		$this->Usuario_academico_model->del($idaca);
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
	}
}