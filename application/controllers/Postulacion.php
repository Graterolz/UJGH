<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postulacion extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Postulacion_model');
		$this->load->model('Vacante_model');	
	}

	//
	function index(){
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		//$data['vacante'] = $this->Vacante_model->get(NULL);

		$this->load->view('template/header');		
		$this->load->view('template/menu',$datasession);
		
		/*if ($datasession['idrol']=='USR'){
			$this->load->view('vacante/list_vacante_usr',$data);
		}else{
			$this->load->view('vacante/list_vacante_adm',$data);
		}*/				
		
		$this->load->view('template/footer');
	}

	//
	function get(){

	}

	//
	function add($idvac = NULL){
		// Validaciones
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if(!$this->Vacante_model->get($idvac)){
			redirect('usuario', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data = array(
			'idvac' => $idvac,
			'idusu' => $datasession['idusu'],
			'estado' => 'Enviado',
			'fechaPostulacion' => date("Y/m/d")
		);

		if(!$this->Postulacion_model->getUsuario($data['idusu'],$data['idvac'])){
			$this->Postulacion_model->add($data);
		}

		redirect('vacante', 'refresh');
	}

	//
	function edit(){

	}

	//
	function del(){

	}
}