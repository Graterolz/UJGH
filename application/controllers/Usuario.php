<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Usuario_model');
		$this->load->model('Vacante_model');
		$this->load->helper('MyHelper_helper');
		
		/*if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}*/		
	}

	function index(){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['usuario_info'] = $this->Usuario_model->getUsuarioInfo($datasession['idusu']);
		$data['usuario_adjunto'] = $this->Usuario_model->getUsuarioAdjunto($datasession['idusu']);		
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
		/*if($this->session->userdata('idusu')){
			redirect('usuario', 'refresh');
		}*/

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');


		$rules = $this->Usuario_model->rules_registro;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			if($this->input->post('contrasena')==$this->input->post('contrasena2')){
				$data = array(
					'nombre' => $this->input->post('nombre'),
					'apellido' => $this->input->post('apellido'),
					'cedula' => $this->input->post('cedula'),
					'email' => $this->input->post('email'),
					'fechaNacimiento' => date("Y/m/d"), //$this->input->post('fechaNacimiento'),
					'nacionalidad' => $this->input->post('nacionalidad'),
					'direccion' => $this->input->post('direccion'),
					'telefonoCelular' => $this->input->post('telefonoCelular'),
					'telefonoFijo' => $this->input->post('telefonoFijo'),
					'estadoCivil' => $this->input->post('estadoCivil'),
					'sexo' => $this->input->post('sexo'),
					'contrasena' => $this->input->post('contrasena')
				);
				$this->Usuario_model->addUsuarioInfo($data);
				//var_dump($data);
				
				$data2 = array(
					'user' => $this->input->post('email'),
					'pass' => $this->input->post('contrasena')
				);
				
			if($this->Usuario_model->getLoginUsuario($data2)){
				$data['info'] = $this->Usuario_model->getLoginUsuario($data2);

				$datasession  = array(
					'idusu' => $data['info']->result()[0]->idusu,
					'idrol' => $data['info']->result()[0]->idrol
				);

				$this->session->set_userdata($datasession);
				redirect('usuario', 'refresh');
			}else{
				redirect('login', 'refresh');
			}				
				
				
				
				//redirect('Usuario', 'refresh');
			}
		}


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
		$this->load->view('usuario/usuario_adm',$data);
		$this->load->view('template/footer');
	}

	function addUsuarioAdjunto(){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$rules = $this->Usuario_model->rules_adjunto;
		$this->form_validation->set_rules($rules);
		
				
		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario/add_usuario_adjunto', array('error' => ' ' ));
		//$this->load->view('upload_form', array('error' => ' ' ));
		$this->load->view('template/footer');		
	}

	function addUsuarioAcademico(){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');				

		$rules = $this->Usuario_model->rules_academico;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'idusu' => $datasession['idusu'],
				'titulo' => $this->input->post('titulo'),
				'nivelEstudio' => $this->input->post('nivelEstudio'),
				'institucion' => $this->input->post('institucion'),
				'mesInicio' => $this->input->post('mesInicio'),
				'anioInicio' => $this->input->post('anioInicio'),
				'mesFin' => $this->input->post('mesFin'),
				'anioFin' => $this->input->post('anioFin')
			);
			$this->Usuario_model->addUsuarioAcademico($data);
			//
			redirect('Usuario', 'refresh');			
		}

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario/add_usuario_academico');
		$this->load->view('template/footer');
	}

	function addUsuarioLaboral(){
		if(!$this->session->userdata('idusu')){
			redirect('login', 'refresh');
		}		

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$rules = $this->Usuario_model->rules_laboral;
		$this->form_validation->set_rules($rules);	

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'idusu' => $datasession['idusu'], 
				'empresa' => $this->input->post('empresa'),
				'direccion' => $this->input->post('direccion'),
				'telefono' => $this->input->post('telefono'),
				'cargo' => $this->input->post('cargo'),
				'labores' => $this->input->post('labores'),
				'mesInicio' => $this->input->post('mesInicio'),
				'anioInicio' => $this->input->post('anioInicio'),
				'mesFin' => $this->input->post('mesFin'),
				'anioFin' => $this->input->post('anioFin'),
				'beneficios' => $this->input->post('beneficios'),
				'salario' => $this->input->post('salario'),
				'motivoRetiro' => $this->input->post('motivoRetiro')
			);

			$this->Usuario_model->addUsuarioLaboral($data);
			//
			redirect('Usuario', 'refresh');			
		}	

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario/add_usuario_laboral');
		$this->load->view('template/footer');
	}

	function editUsuarioInfo($idusu){
		return NULL;
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

		$rules = $this->Usuario_model->rules_laboral;
		$this->form_validation->set_rules($rules);	

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'empresa' => $this->input->post('empresa'),
				'direccion' => $this->input->post('direccion'),
				'telefono' => $this->input->post('telefono'),
				'cargo' => $this->input->post('cargo'),
				'labores' => $this->input->post('labores'),
				'mesInicio' => $this->input->post('mesInicio'),
				'anioInicio' => $this->input->post('anioInicio'),
				'mesFin' => $this->input->post('mesFin'),
				'anioFin' => $this->input->post('anioFin'),
				'beneficios' => $this->input->post('beneficios'),
				'salario' => $this->input->post('salario'),
				'motivoRetiro' => $this->input->post('motivoRetiro')
			);

			$this->Usuario_model->editUsuarioLaboral($idlab,$data);
			//
			redirect('Usuario', 'refresh');			
		}

		$data['usuario_laboral'] = $this->Usuario_model->getUsuarioLaboralV2($datasession['idusu'],$idlab);

		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario/edit_usuario_laboral',$data);
		$this->load->view('template/footer');
	}


	/**/

	/**/
}