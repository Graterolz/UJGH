<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(VACANTE_MODEL);
		$this->load->model(POSTULACION_MODEL);
	}

	//
	function index(){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}

		$this->load->view(HEADER);
		$this->load->view(MENU);
		
		$data['vacante_rules'] = $this->Vacante_model->vacante_rules;
		$data['vacante'] = $this->Vacante_model->get(NULL);

		if ($this->session->userdata(IDROL_SESSION) == USR){
			$this->load->view(LIST_VACANTE_USR,$data);
		}else{
			$this->load->view(LIST_VACANTE_ADM,$data);
		}

		$this->load->view(FOOTER);
	}

	// Obtener informacion de vacante
	function get($idvac = NULL){
		redirect(VACANTE_CONTROLLER, 'refresh');
	}

	// Agregar informacion de vacante
	function add(){
		redirect(VACANTE_CONTROLLER, 'refresh');
	}

	// Editar informacion de vacante
	function edit($idvac = NULL){
		redirect(VACANTE_CONTROLLER, 'refresh');
	}



	/*// Modulo para obtener informacion de vacante
	function get($idvac = '*'){
		// Validaciones
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if(!$this->Vacante_model->get($idvac)){
			redirect('usuario', 'refresh');
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		$data['vacante'] = $this->Vacante_model->get($idvac);
		$data['postulacion_vacante'] = $this->Vacante_model->getPostulados($idvac);

		//Reglas
		$data['rules_vacante'] =$this->Vacante_model->vacante_rules;

		$this->load->view('template/header');		
		$this->load->view('template/menu',$datasession);
		
		if ($datasession['idrol']=='USR'){
			$this->load->view('vacante/get_vacante_usr',$data);
		}else{
			$this->load->view('vacante/get_vacante_adm',$data);
		}
		
		$this->load->view('template/footer');		
	}

	// Modulo para agregar vacante
	function add(){
		// Validaciones
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='ADM'){
			redirect('usuario', 'refresh');	
		}

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		//Reglas
		$data['rules_vacante'] = $this->Vacante_model->vacante_rules;
		$this->form_validation->set_rules($data['rules_vacante']);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'titulo' => $this->input->post('titulo'),
				'descripcion' => $this->input->post('descripcion'),
				'beneficios' => $this->input->post('beneficios'),
				'requisitos' => $this->input->post('requisitos'),
				'salario' => $this->input->post('salario'),
				'fechaPublicacion' => date("Y/m/d"),
				'tipo' => $this->input->post('tipo')
			);
			$this->Vacante_model->add($data);
			redirect('usuario', 'refresh');
		}

		//
		$this->load->view('template/header');		
		$this->load->view('template/menu',$datasession);
		$this->load->view('vacante/add_vacante',$data);
		$this->load->view('template/footer');
	}

	// Modulo para editar vacante
	function edit($idvac = '*'){
		// Validaciones
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='ADM'){
			redirect('usuario', 'refresh');	
		}
		if(!$this->Vacante_model->get($idvac)){
			redirect('usuario', 'refresh');
		}		
		
		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		//Reglas
		$data['rules_vacante'] = $this->Vacante_model->vacante_rules;
		$this->form_validation->set_rules($data['rules_vacante']);

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'titulo' => $this->input->post('titulo'),
				'descripcion' => $this->input->post('descripcion'),
				'beneficios' => $this->input->post('beneficios'),
				'requisitos' => $this->input->post('requisitos'),
				'salario' => $this->input->post('salario'),
				'fechaPublicacion' => date("Y/m/d"),
				'tipo' => $this->input->post('tipo')
			);
			$this->Vacante_model->edit($idvac,$data);
			redirect('usuario', 'refresh');
		}		

		$data['vacante'] = $this->Vacante_model->get($idvac);
		//
		$this->load->view('template/header');		
		$this->load->view('template/menu',$datasession);
		$this->load->view('vacante/edit_vacante',$data);
		$this->load->view('template/footer');
	}

	// Modulo para eliminar vacante
	function del($idvac = '*'){
		//Validaciones
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='ADM'){
			redirect('usuario', 'refresh');	
		}
		if(!$this->Vacante_model->get($idvac)){
			redirect('usuario', 'refresh');
		}		

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');

		//Reglas
		$data['rules_vacante'] = $this->Vacante_model->vacante_rules;
		$this->form_validation->set_rules('idvac','idvac','trim|required|integer');
		
		if ($this->form_validation->run() == TRUE) {
			//
			$this->Vacante_model->del($idvac);
			$this->Postulacion_model->del($idvac);

			redirect('usuario', 'refresh');
		}
		
		$data['vacante'] = $this->Vacante_model->get($idvac);
		//
		$this->load->view('template/header');		
		$this->load->view('template/menu',$datasession);
		$this->load->view('vacante/del_vacante',$data);
		$this->load->view('template/footer');
	}*/
}