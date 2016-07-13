<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Usuario_model');
	}

	function index(){		
		if($this->session->userdata('idusu')){
			redirect('usuario', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('login/login');
		$this->load->view('template/footer');
	}

	function login(){
		if ($this->input->post('user') and $this->input->post('pass')){

			$data = array(
				'user' => $this->input->post('user'),
				'pass' => $this->input->post('pass')
			);
			//var_dump($data);
			if($this->Usuario_model->getLoginUsuario($data)){
				$data['info'] = $this->Usuario_model->getLoginUsuario($data);

				$datasession  = array(
					'idusu' => $data['info']->result()[0]->idusu,
					'idrol' => $data['info']->result()[0]->idrol
				);

				$this->session->set_userdata($datasession);
				redirect('usuario', 'refresh');
			}else{
				redirect('login', 'refresh');
			}
		}else{
			redirect('login', 'refresh');
		}		
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('login', 'refresh');
	}
}