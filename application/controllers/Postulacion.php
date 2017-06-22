<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postulacion extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(SYS_MODEL);
		$this->load->model(POSTULACION_MODEL);
		$this->load->model(VACANTE_MODEL);
	}

	// Index
	function index(){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}

		$this->load->view(HEADER);
		$this->load->view(MENU);
		
		$idusu = $this->session->userdata(IDUSU_SESSION);
		$data['vacante_rules'] = $this->Vacante_model->vacante_rules;
		$data['postulacion_rules'] = $this->Postulacion_model->postulacion_rules;
		$data['postulacion'] = $this->Sys_model->getPostulacionByUsuario($idusu);

		if ($this->session->userdata(IDROL_SESSION) == USR){
			$this->load->view(LIST_POSTULACION_USR,$data);
		}else{
			$this->load->view(LIST_POSTULACION_ADM,$data);
		}

		$this->load->view(FOOTER);
	}

	// Envia informacion de postulacion
	function add($idvac = NULL){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if(!$this->Vacante_model->get($idvac)){
			redirect(VACANTE_CONTROLLER, 'refresh');
		}

		$idusu = $this->session->userdata(IDUSU_SESSION);

		if($this->Sys_model->getPostulacionByVacanteUsuario($idvac,$idusu)){
			redirect(VACANTE_CONTROLLER, 'refresh');
		}

		$data = array(
			IDVAC => $idvac,
			IDUSU => $idusu
		);

		$this->Postulacion_model->add($data);
		redirect(POSTULACION_CONTROLLER, 'refresh');
	}
}