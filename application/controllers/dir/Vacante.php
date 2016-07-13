<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Vacante_model');
	}

	function index(){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);

		if ($datasession['idrol']=='USR'){
			$data['vacante'] = $this->Vacante_model->getVacantes(NULL,$datasession['idusu']);
			$this->load->view('vacante/list_vacante_usr',$data);	
		}else{
			$data['vacante'] = $this->Vacante_model->getVacantesADM();
			$this->load->view('vacante/list_vacante_adm',$data);	
		}

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

	function edit($var){
		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['vacante'] = $this->Vacante_model->getVacantes($var,NULL);
						
		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('vacante/edit_vacante',$data);
		$this->load->view('template/footer');		
	}
}