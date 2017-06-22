<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(SYS_MODEL);
		$this->load->model(USUARIO_INFO_MODEL);
		$this->load->model(VACANTE_MODEL);
		$this->load->model(POSTULACION_MODEL);
	}

	// Index
	function index(){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}

		$this->load->view(HEADER);
		$this->load->view(MENU);
		
		$data['vacante_rules'] = $this->Vacante_model->vacante_rules;
		$data['vacante'] = $this->Vacante_model->get(NULL);

		if ($this->session->userdata(IDROL_SESSION) == USR){
			$this->load->view(LIST_VACANTE_USR,$data);
		}else{
			$this->load->view(LIST_VACANTE_ADM,$data);
		}

		$this->load->view(FOOTER);
	}

	// Obtener informacion de vacante
	function get($idvac = NULL){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if(!$this->Vacante_model->get($idvac)){
			redirect(VACANTE_CONTROLLER, 'refresh');
		}

		$data['vacante'] = $this->Vacante_model->get($idvac);
		$data['vacante_rules'] = $this->Vacante_model->vacante_rules;
		$data['form_attributes'] = $this->sys_model->form_attributes;
		$data['tipo_vacante'] = $this->sys_model->tipo_vacante;

		$this->load->view(HEADER);
		$this->load->view(MENU);

		if ($this->session->userdata(IDROL_SESSION) == USR){
			$this->load->view(GET_VACANTE_USR,$data);
		}else{
			$data['usuario_info_rules'] = $this->Usuario_info_model->usuario_info_rules;
			$data['usuario_info'] = $this->sys_model->getUsuariosByVacante($idvac);
			$this->load->view(GET_VACANTE_ADM,$data);
		}

		$this->load->view(FOOTER);
	}

	// Agregar informacion de vacante
	function add(){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if($this->session->userdata(IDROL_SESSION)!=ADM){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}

		$rules = $this->Vacante_model->vacante_rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				TITULO => $this->input->post(TITULO),
				DESCRIPCION => $this->input->post(DESCRIPCION),
				BENEFICIOS => $this->input->post(BENEFICIOS),
				REQUISITOS => $this->input->post(REQUISITOS),
				SALARIO => $this->input->post(SALARIO),
				TIPO => $this->input->post(TIPO)
			);

			$this->Vacante_model->add($data);
			redirect(VACANTE_CONTROLLER, 'refresh');
		}

		$data['vacante_rules'] = $rules;
		$data['form_attributes'] = $this->sys_model->form_attributes;
		$data['tipo_vacante'] = $this->sys_model->tipo_vacante;

		$this->load->view(HEADER);
		$this->load->view(MENU);
		$this->load->view(ADD_VACANTE,$data);
		$this->load->view(FOOTER);
	}

	// Editar informacion de vacante
	function edit($idvac = NULL){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}		
		if($this->session->userdata(IDROL_SESSION)!=ADM){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		if(!$this->Vacante_model->get($idvac)){
			redirect(VACANTE_CONTROLLER, 'refresh');
		}		

		$rules = $this->Vacante_model->vacante_rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				TITULO => $this->input->post(TITULO),
				DESCRIPCION => $this->input->post(DESCRIPCION),
				BENEFICIOS => $this->input->post(BENEFICIOS),
				REQUISITOS => $this->input->post(REQUISITOS),
				SALARIO => $this->input->post(SALARIO),
				TIPO => $this->input->post(TIPO)
			);

			$this->Vacante_model->edit($idvac,$data);
			redirect(VACANTE_CONTROLLER, 'refresh');
		}

		$data['vacante'] = $this->Vacante_model->get($idvac);
		$data['vacante_rules'] = $rules;
		$data['form_attributes'] = $this->sys_model->form_attributes;
		$data['tipo_vacante'] = $this->sys_model->tipo_vacante;

		$this->load->view(HEADER);
		$this->load->view(MENU);
		$this->load->view(EDIT_VACANTE,$data);
		$this->load->view(FOOTER);
	}

	// Eliminar informacion de vacante
	function del($idvac = NULL){
		redirect(VACANTE_CONTROLLER, 'refresh');

		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if($this->session->userdata(IDROL_SESSION)!=ADM){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		if(!$this->Vacante_model->get($idvac)){
			redirect(VACANTE_CONTROLLER, 'refresh');
		}

		$this->Vacante_model->del($idvac);
		$this->Postulacion_model->del($idvac);
		redirect(VACANTE_CONTROLLER, 'refresh');
	}
}