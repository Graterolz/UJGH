<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postulacion extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Postulacion_model');
		$this->load->model('Vacante_model');
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

	function viewPostulacionVacante($var){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}
				
		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['vacante'] = $this->Vacante_model->getVacantes($var,NULL);
		$data['postulacion_vacante'] = $this->Postulacion_model->getPostulacionVacante($var);
		
		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('postulacion/list_postulacion_vacante',$data);
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