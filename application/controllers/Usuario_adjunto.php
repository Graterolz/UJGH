<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_adjunto extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Usuario_adjunto_model');
	}

	function index(){
		redirect('usuario', 'refresh');
	}

	//
	function get($idadj){
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
		$data['rules_usuario_adjunto'] = $this->Usuario_adjunto_model->usuario_adjunto_rules;
		$this->form_validation->set_rules($data['rules_usuario_adjunto']);

		if ($this->form_validation->run() == TRUE) {
			/*$data = array(
				'titulo' => $datasession['titulo'],
				'url' => $datasession['url']
			);
			$this->Usuario_adjunto_model->add($data);*/
			redirect('usuario', 'refresh');
		}

		//
		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario_adjunto/add_usuario_adjunto',$data);
		$this->load->view('template/footer');
	}

	//
	function edit($idadj){
		$this->index();
	}

	//
	function del($idadj){
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='USR'){
			redirect('usuario', 'refresh');
		}
		if(!$this->Usuario_adjunto_model->get($idadj)){
			redirect('usuario', 'refresh');
		}		

		$this->Usuario_adjunto_model->del($idadj);
		redirect('usuario', 'refresh');
	}
}