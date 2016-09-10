<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Usuario_info_model');
		$this->load->model('Usuario_adjunto_model');
		$this->load->model('Usuario_academico_model');
		$this->load->model('Usuario_laboral_model');
		//
		$this->load->model('Vacante_model');
	}

	// Inicio de usuario
	function index(){
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');	

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);

		if ($datasession['idrol']=='USR'){
			//$datasession['idusu'] = NULL;

			$data['usuario_info'] = $this->Usuario_info_model->get($datasession['idusu']);
			$data['usuario_adjunto'] = $this->Usuario_adjunto_model->getUsuario($datasession['idusu']);
			$data['usuario_academico'] = $this->Usuario_academico_model->getUsuario($datasession['idusu']);
			$data['usuario_laboral'] = $this->Usuario_laboral_model->getUsuario($datasession['idusu']);

			//Reglas
			$data['rules_usuario_info'] = $this->Usuario_info_model->usuario_info_rules;
			$data['rules_usuario_academico'] = $this->Usuario_academico_model->usuario_academico_rules;
			$data['rules_usuario_adjunto'] = $this->Usuario_adjunto_model->usuario_adjunto_rules;
			$data['rules_usuario_laboral'] = $this->Usuario_laboral_model->usuario_laboral_rules;


			$this->load->view('usuario_info/get_usuario_usr',$data);
		}else{
			$data['vacante'] = $this->Vacante_model->get(NULL);
			$this->load->view('vacante/list_vacante_adm',$data);
		}

		$this->load->view('template/footer');
	}

	// Obtiene perfil usuario
	function get($idusu){
		// Validaciones
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='ADM'){
			redirect('usuario', 'refresh');
		}
		if(!$this->Usuario_info_model->get($idusu)){
			redirect('usuario', 'refresh');
		}		

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');	

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);

		$datasession['idusu'] = $idusu;

		$data['usuario_info'] = $this->Usuario_info_model->get($datasession['idusu']);
		$data['usuario_adjunto'] = $this->Usuario_adjunto_model->getUsuario($datasession['idusu']);
		$data['usuario_academico'] = $this->Usuario_academico_model->getUsuario($datasession['idusu']);
		$data['usuario_laboral'] = $this->Usuario_laboral_model->getUsuario($datasession['idusu']);

		//Reglas
		$data['rules_usuario_info'] = $this->Usuario_info_model->usuario_info_rules;
		$data['rules_usuario_academico'] = $this->Usuario_academico_model->usuario_academico_rules;
		$data['rules_usuario_adjunto'] = $this->Usuario_adjunto_model->usuario_adjunto_rules;
		$data['rules_usuario_laboral'] = $this->Usuario_laboral_model->usuario_laboral_rules;

		$this->load->view('usuario_info/get_usuario_adm',$data);

		$this->load->view('template/footer');
	}

	//
	//
	//
	function login(){
		if ($this->input->post('user') && $this->input->post('pass')){
			$data = array(
				'user' => $this->input->post('user'),
				'pass' => $this->input->post('pass')
			);
			//var_dump($data);
			
			if($this->Usuario_info_model->login($data)){
				$data['info'] = $this->Usuario_info_model->login($data);

				$datasession  = array(
					'idusu' => $data['info']->result()[0]->idusu,
					'idrol' => $data['info']->result()[0]->idrol
				);

				$this->session->set_userdata($datasession);			
			}
		}

		if($this->session->userdata('idusu')){
			redirect('usuario', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario_info/get_login');
		$this->load->view('template/footer');		
	}
	
	//
	//
	//
	function logout(){
		$this->session->sess_destroy();
		redirect('usuario', 'refresh');
	}
}