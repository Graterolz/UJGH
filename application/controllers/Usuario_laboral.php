<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_laboral extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model(SYS_MODEL);
		$this->load->model(USUARIO_LABORAL_MODEL);
	}

	// Index
	function index(){
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
	}

	// Agregar informacion laboral de usuario
	function add(){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if($this->session->userdata(IDROL_SESSION)!=USR){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}		

		$rules = $this->Usuario_laboral_model->usuario_laboral_rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				IDUSU => $this->session->userdata(IDUSU_SESSION),
				EMPRESA => $this->input->post(EMPRESA),
				DIRECCION => $this->input->post(DIRECCION),
				TELEFONO1 => $this->input->post(TELEFONO1),
				CARGO => $this->input->post(CARGO),
				LABORES => $this->input->post(LABORES),
				MES_INICIO => $this->input->post(MES_INICIO),
				ANIO_INICIO => $this->input->post(ANIO_INICIO),
				MES_FIN => $this->input->post(MES_FIN),
				ANIO_FIN => $this->input->post(ANIO_FIN),
				BENEFICIOS => $this->input->post(BENEFICIOS),
				SALARIO => $this->input->post(SALARIO),
				MOTIVO_RETIRO => $this->input->post(MOTIVO_RETIRO)
			);

			$this->Usuario_laboral_model->add($data);
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}		

		$data['usuario_laboral_rules'] = $this->Usuario_laboral_model->usuario_laboral_rules;		
		$data['form_attributes'] = $this->Sys_model->form_attributes;
		$data['meses'] = $this->Sys_model->meses;
		$data['anios'] = $this->Sys_model->anios;

		$this->load->view(HEADER);
		$this->load->view(MENU);
		$this->load->view(ADD_USUARIO_LABORAL,$data);
		$this->load->view(FOOTER);
	}

	// Editar informacion laboral de usuario
	function edit($idlab = NULL){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if($this->session->userdata(IDROL_SESSION)!=USR){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		if(!$this->Usuario_laboral_model->get($idlab)){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}

		$rules = $this->Usuario_laboral_model->usuario_laboral_rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				IDUSU => $this->session->userdata(IDUSU_SESSION),
				EMPRESA => $this->input->post(EMPRESA),
				DIRECCION => $this->input->post(DIRECCION),
				TELEFONO1 => $this->input->post(TELEFONO1),
				CARGO => $this->input->post(CARGO),
				LABORES => $this->input->post(LABORES),
				MES_INICIO => $this->input->post(MES_INICIO),
				ANIO_INICIO => $this->input->post(ANIO_INICIO),
				MES_FIN => $this->input->post(MES_FIN),
				ANIO_FIN => $this->input->post(ANIO_FIN),
				BENEFICIOS => $this->input->post(BENEFICIOS),
				SALARIO => $this->input->post(SALARIO),
				MOTIVO_RETIRO => $this->input->post(MOTIVO_RETIRO)			
			);

			$this->Usuario_laboral_model->edit($idlab,$data);
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}

		$data['usuario_laboral'] = $this->Usuario_laboral_model->get($idlab);
		$data['usuario_laboral_rules'] = $this->Usuario_laboral_model->usuario_laboral_rules;		
		$data['form_attributes'] = $this->Sys_model->form_attributes;
		$data['meses'] = $this->Sys_model->meses;
		$data['anios'] = $this->Sys_model->anios;
		
		$this->load->view(HEADER);
		$this->load->view(MENU);
		$this->load->view(EDIT_USUARIO_LABORAL,$data);
		$this->load->view(FOOTER);
	}

	// Eliminar informacion laboral de usuario
	function del($idlab = NULL){
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if($this->session->userdata(IDROL_SESSION)!=USR){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		if(!$this->Usuario_laboral_model->get($idlab)){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}		

		$this->Usuario_laboral_model->del($idlab);
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
	}
}