<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postulacion extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Postulacion_model');
	}

	public function index(){
		$var = 22;

		$data['usuario_postula'] = $this->Postulacion_model->getPostulacion($var);

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('postulacion/postulacion',$data);
		$this->load->view('template/footer');				
	}
}