<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Usuario_model');
		$this->load->model('Vacante_model');
	}

	function index(){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['usuario_info'] = $this->Usuario_model->getUsuarioInfo($datasession['idusu']);
		$data['usuario_academico'] = $this->Usuario_model->getUsuarioAcademico($datasession['idusu']);
		$data['usuario_laboral'] = $this->Usuario_model->getUsuarioLaboral($datasession['idusu']);

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);

		if ($datasession['idrol']=='USR'){
			$this->load->view('usuario/usuario',$data);	
		}else{
			$data['vacante'] = $this->Vacante_model->getVacantesADM();
			$this->load->view('vacante/list_vacante_adm',$data);	
		}
		
		$this->load->view('template/footer');
	}

	function registro(){
		if($this->session->userdata('idusu')){
			redirect('usuario', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario/register_usuario');
		$this->load->view('template/footer');
	}

	function viewCV($idusu){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['usuario_info'] = $this->Usuario_model->getUsuarioInfo($idusu);
		$data['usuario_academico'] = $this->Usuario_model->getUsuarioAcademico($idusu);
		$data['usuario_laboral'] = $this->Usuario_model->getUsuarioLaboral($idusu);

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario/usuario',$data);
		$this->load->view('template/footer');
	}

	function editUsuarioInfo($idusu){

	}

	function editUsuarioAcademico($idaca){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$rules = $this->Usuario_model->rules_academico;
		$this->form_validation->set_rules($rules);	

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'titulo' => $this->input->post('titulo'),
				'nivelEstudio' => $this->input->post('nivelEstudio'),
				'institucion' => $this->input->post('institucion'),
				'mesInicio' => $this->input->post('mesInicio'),
				'anioInicio' => $this->input->post('anioInicio'),
				'mesFin' => $this->input->post('mesFin'),
				'anioFin' => $this->input->post('anioFin')	
				/*'titulo' => $this->input->post('titulo'),
				'descripcion' => $this->input->post('descripcion'),
				'beneficios' => $this->input->post('beneficios'),
				'requisitos' => $this->input->post('requisitos'),
				'salario' => $this->input->post('salario'),
				'fechaPublicacion' => date("Y/m/d"),//date("d-m-y"),//$this->input->post('fechaPublicacion'),
				'tipo' => $this->input->post('tipo')*/
			);
			//var_dump($data);
			$this->Usuario_model->editUsuarioAcademico($idaca,$data);
			//
			redirect('Usuario', 'refresh');			
		}			

		$data['usuario_academico'] = $this->Usuario_model->getUsuarioAcademicoV2($datasession['idusu'],$idaca);

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario/edit_usuario_academico',$data);
		$this->load->view('template/footer');
	}

	function editUsuarioLaboral($idlab){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		//$data['usuario_laboral'] = $this->Usuario_model->getUsuarioLaboral($datasession['idusu']);

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario/edit_usuario_laboral',$data);
		$this->load->view('template/footer');
	}
}