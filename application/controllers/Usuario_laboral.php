<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_laboral extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Usuario_laboral_model');
	}

	function index(){
		redirect('usuario', 'refresh');
	}

	//
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
	function edit($idlab){
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
	function del($idlab){
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
	}	
}