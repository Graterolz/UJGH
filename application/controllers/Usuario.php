<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Usuario_model');
		$this->load->model('Vacante_model');
	}

	function index(){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['usuario_info'] = $this->Usuario_model->getUsuarioInfo($datasession['idusu']);
		$data['usuario_academico'] = $this->Usuario_model->getUsuarioAcademico($datasession['idusu']);
		$data['usuario_laboral'] = $this->Usuario_model->getUsuarioLaboral($datasession['idusu']);

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);

		if ($datasession['idrol']=='USR'){
			$this->load->view('usuario/usuario',$data);	
		}else{
			$data['vacante'] = $this->Vacante_model->getVacantesADM();
			$this->load->view('vacante/list_vacante_adm',$data);	
		}
		
		$this->load->view('template/footer');
	}

	function viewCV($idusu){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['usuario_info'] = $this->Usuario_model->getUsuarioInfo($idusu);
		$data['usuario_academico'] = $this->Usuario_model->getUsuarioAcademico($idusu);
		$data['usuario_laboral'] = $this->Usuario_model->getUsuarioLaboral($idusu);

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario/usuario',$data);
		$this->load->view('template/footer');
	}
}