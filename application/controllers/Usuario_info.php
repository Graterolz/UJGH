<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_info extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Usuario_info_model');
	}

	function index(){

	}

	//
	function get($idusu){
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');	

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('template/footer');
	}	

	//
	function add(){
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');	

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('template/footer');
	}

	//
	function edit($idusu = NULL){
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');	

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('template/footer');
	}

	//
	function del($idusu = NULL){
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');	

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('template/footer');
	}
}