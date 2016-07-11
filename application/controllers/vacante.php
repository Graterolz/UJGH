<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Vacante_model');
	}

	function index(){
		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['vacante'] = $this->Vacante_model->getVacantes(NULL,$datasession['idusu']);

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('vacante/list_vacante',$data);
		$this->load->view('template/footer');
	}

	function view($var){		
		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['vacante'] = $this->Vacante_model->getVacantes($var,$datasession['idusu']);

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('vacante/view_vacante',$data);
		$this->load->view('template/footer');
	}
}