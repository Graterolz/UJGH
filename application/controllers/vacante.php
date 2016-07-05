<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Vacante_model');
	}

	public function index(){
		$data['vac'] = $this->Vacante_model->getVacantes();

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('vacante/vacante',$data);
		$this->load->view('template/footer');
	}
}