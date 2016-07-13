<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postulacion extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Postulacion_model');
	}

	function index(){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}
				
		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['usuario_postula'] = $this->Postulacion_model->getPostulacion($datasession['idusu']);

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('postulacion/postulacion',$data);
		$this->load->view('template/footer');
	}

	function enviaPostulacion($var){
		$data = array(
			'idvac' => $var,
			'idusu' => $this->session->userdata('idusu'),
			'fechaPostulacion' => date("Y-m-d H:i:s")
		);

		$this->Postulacion_model->addPostulacion($data);
		redirect('postulacion', 'refresh');
	}
}