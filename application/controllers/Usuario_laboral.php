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
				/*IDUSU => $this->session->userdata(IDUSU_SESSION),
				TITULO => $this->input->post(TITULO),
				NIVEL_ESTUDIO => $this->input->post(NIVEL_ESTUDIO),
				INSTITUCION => $this->input->post(INSTITUCION),
				MES_INICIO => $this->input->post(MES_INICIO),
				ANIO_INICIO => $this->input->post(ANIO_INICIO),
				MES_FIN => $this->input->post(MES_FIN),
				ANIO_FIN => $this->input->post(ANIO_FIN)*/
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
		$data['form_attributes'] = $this->Sys_model->form_attributes;
		$data['meses'] = $this->Sys_model->meses;
		$data['anios'] = $this->Sys_model->anios;
		
		$this->load->view(HEADER);
		$this->load->view(MENU);
		$this->load->view(EDIT_USUARIO_LABORAL,$data);
		$this->load->view(FOOTER);
	}

	function del($idlab = NULL){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if($this->session->userdata(IDROL_SESSION)!=USR){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		if(!$this->Usuario_laboral_model->get($idlab)){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}		

		//$this->Usuario_laboral_model->del($idaca);
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
	}

	/*//
	function get($idlab){
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
		$data['rules_usuario_laboral'] = $this->Usuario_laboral_model->usuario_laboral_rules;
		$data['meses'] = $this->Usuario_laboral_model->meses;
		$data['anios'] = $this->Usuario_laboral_model->anios;

		$this->form_validation->set_rules($data['rules_usuario_laboral']);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'idusu' => $datasession['idusu'], 
				'empresa' => $this->input->post('empresa'),
				'direccion' => $this->input->post('direccion'),
				'telefono' => $this->input->post('telefono'),
				'cargo' => $this->input->post('cargo'),
				'labores' => $this->input->post('labores'),
				'mesInicio' => $this->input->post('mesInicio'),
				'anioInicio' => $this->input->post('anioInicio'),
				'mesFin' => $this->input->post('mesFin'),
				'anioFin' => $this->input->post('anioFin'),
				'beneficios' => $this->input->post('beneficios'),
				'salario' => $this->input->post('salario'),
				'motivoRetiro' => $this->input->post('motivoRetiro')
			);
			$this->Usuario_laboral_model->add($data);
			redirect('usuario', 'refresh');
		}

		//
		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario_laboral/add_usuario_laboral',$data);
		$this->load->view('template/footer');
	}

	//
	function edit($idlab = NULL){
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='USR'){
			redirect('usuario', 'refresh');
		}
		if(!$this->Usuario_laboral_model->get($idlab)){
			redirect('usuario', 'refresh');
		}


		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		//Reglas
		$data['rules_usuario_laboral'] = $this->Usuario_laboral_model->usuario_laboral_rules;
		$data['meses'] = $this->Usuario_laboral_model->meses;
		$data['anios'] = $this->Usuario_laboral_model->anios;

		$this->form_validation->set_rules($data['rules_usuario_laboral']);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'idusu' => $datasession['idusu'], 
				'empresa' => $this->input->post('empresa'),
				'direccion' => $this->input->post('direccion'),
				'telefono' => $this->input->post('telefono'),
				'cargo' => $this->input->post('cargo'),
				'labores' => $this->input->post('labores'),
				'mesInicio' => $this->input->post('mesInicio'),
				'anioInicio' => $this->input->post('anioInicio'),
				'mesFin' => $this->input->post('mesFin'),
				'anioFin' => $this->input->post('anioFin'),
				'beneficios' => $this->input->post('beneficios'),
				'salario' => $this->input->post('salario'),
				'motivoRetiro' => $this->input->post('motivoRetiro')
			);
			$this->Usuario_laboral_model->edit($idlab,$data);
			redirect('usuario', 'refresh');
		}
		
		$data['usuario_laboral'] = $this->Usuario_laboral_model->get($idlab);
		//
		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario_laboral/edit_usuario_laboral',$data);
		$this->load->view('template/footer');
	}

	//
	function del($idlab = NULL){
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='USR'){
			redirect('usuario', 'refresh');
		}
		if(!$this->Usuario_laboral_model->get($idlab)){
			redirect('usuario', 'refresh');
		}		

		$this->Usuario_laboral_model->del($idlab);
		redirect('usuario', 'refresh');
	}*/	
}