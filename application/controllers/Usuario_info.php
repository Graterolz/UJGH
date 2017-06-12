<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_info extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(SYS_MODEL);
		$this->load->model(USUARIO_INFO_MODEL);
		$this->load->model(USUARIO_ADJUNTO_MODEL);
		$this->load->model(USUARIO_ACADEMICO_MODEL);
		$this->load->model(USUARIO_LABORAL_MODEL);
		$this->load->model(VACANTE_MODEL);
		$this->load->model(POSTULACION_MODEL);
	}

	// Index
	function index(){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}

		if ($this->session->userdata(IDROL_SESSION) == USR){
			$idusu = $this->session->userdata(IDUSU_SESSION);
			$this->get($idusu);
		}else{
			redirect(VACANTE_CONTROLLER, 'refresh');
		}
	}

	// Obtener informacion de usuario
	function get($idusu){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if(!$this->Usuario_info_model->get($idusu)){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}		

		$this->load->view(HEADER);
		$this->load->view(MENU);

		$data['usuario_info'] = $this->Usuario_info_model->get($idusu);
		$data['usuario_academico'] = $this->Usuario_academico_model->getAcademicoByUsuario($idusu);
		$data['usuario_laboral'] = $this->Usuario_laboral_model->getLaboralByUsuario($idusu);
		$data['usuario_adjunto'] = $this->Usuario_adjunto_model->getAdjutosByUsuario($idusu);
		$data['usuario_info_rules'] = $this->Usuario_info_model->usuario_info_rules;
		$data['usuario_academico_rules'] = $this->Usuario_academico_model->usuario_academico_rules;
		$data['usuario_laboral_rules'] = $this->Usuario_laboral_model->usuario_laboral_rules;
		$data['usuario_adjunto_rules'] = $this->Usuario_adjunto_model->usuario_adjunto_rules;
		$data['generos'] = $this->Sys_model->generos;
		$data['estado_civil'] = $this->Sys_model->estado_civil;
		$data['nacionalidad'] = $this->Sys_model->nacionalidad;

		if ($this->session->userdata(IDROL_SESSION) == USR){
			$this->load->view(GET_USUARIO_USR,$data);
		}else{
			$this->load->view(GET_USUARIO_ADM,$data);
		}
		
		$this->load->view(FOOTER);
	}

	// Editar informacion de usuario
	function edit($idusu){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if(!$this->Usuario_info_model->get($idusu)){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}

		$rules = $this->Usuario_info_model->usuario_info_rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				CEDULA => $this->input->post(CEDULA),
				NOMBRE => $this->input->post(NOMBRE),
				APELLIDO => $this->input->post(APELLIDO),
				GENERO => $this->input->post(GENERO),
				FECHA_NACIMIENTO => $this->input->post(FECHA_NACIMIENTO),
				NACIONALIDAD => $this->input->post(NACIONALIDAD),
				ESTADO_CIVIL => $this->input->post(ESTADO_CIVIL),
				DIRECCION => $this->input->post(DIRECCION),
				TELEFONO1 => $this->input->post(TELEFONO1),
				TELEFONO2 => $this->input->post(TELEFONO2),
				EMAIL => $this->input->post(EMAIL)
			);

			$this->Usuario_info_model->edit($idusu,$data);
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}	

		$data['usuario_info'] = $this->Usuario_info_model->get($idusu);
		$data['usuario_info_rules'] = $rules;
		$data['form_attributes'] = $this->Sys_model->form_attributes;
		$data['generos'] = $this->Sys_model->generos;
		$data['estado_civil'] = $this->Sys_model->estado_civil;
		$data['nacionalidad'] = $this->Sys_model->nacionalidad;

		$this->load->view(HEADER);
		$this->load->view(MENU);
		$this->load->view(EDIT_USUARIO_INFO,$data);
		$this->load->view(FOOTER);
	}

	// Login
	function login(){
		if($this->input->post(USER) && $this->input->post(PASS)){
			$data = array(
				USER => $this->input->post(USER),
				PASS => $this->input->post(PASS)
			);
			
			if($this->Usuario_info_model->login($data)){
				$data['info'] = $this->Usuario_info_model->login($data);

				$datasession  = array(
					IDUSU_SESSION => $data['info']->result()[0]->idusu,
					IDROL_SESSION => $data['info']->result()[0]->idrol
				);

				$this->session->set_userdata($datasession);
			}
		}

		if($this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}

		$this->load->view(HEADER);
		$this->load->view(GET_LOGIN);
		$this->load->view(FOOTER);
	}

	// Logout
	function logout(){
		$this->session->sess_destroy();
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
	} 
}