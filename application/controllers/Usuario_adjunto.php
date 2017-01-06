<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_adjunto extends CI_Controller {

	function __construct() {
		parent::__construct();
		//$this->load->model('Usuario_adjunto_model');
		//$this->load->helper('ujgh_helper');
	}

	//
	function add(){
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
	}

	function edit(){
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');	
	}

	//
	function del(){
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
	}	

	/*
	//
	function add(){
		// Validaciones
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='USR'){
			redirect('usuario', 'refresh');	
		}		

		$datasession['idusu'] = $this->session->userdata('idusu');
		$datasession['idrol'] = $this->session->userdata('idrol');	

		//Reglas
		$data['rules_usuario_adjunto'] = $this->Usuario_adjunto_model->usuario_adjunto_rules;
		$this->form_validation->set_rules($data['rules_usuario_adjunto']);

		if ($this->form_validation->run()==TRUE){
			$data_adj = array(
				'idusu' => $datasession['idusu'],
				'titulo' => $this->input->post('titulo')
			);

			$valor = do_upload();
			//var_dump($valor);

			if ($valor!=NULL){
				$data_adj['url'] = $valor['upload_data']['file_name'];
            }else{
            	redirect('usuario', 'refresh');
            }

            $this->Usuario_adjunto_model->add($data_adj);
            redirect('usuario', 'refresh');
		}

		//
		$this->load->view('template/header');
		$this->load->view('template/menu',$datasession);
		$this->load->view('usuario_adjunto/add_usuario_adjunto',$data);
		$this->load->view('template/footer');
	}

	//
	function edit($idadj = NULL){
		$this->index();
	}

	//
	function del($idadj = NULL){
		if(!$this->session->userdata('idusu')){
			redirect('usuario/login', 'refresh');
		}
		if($this->session->userdata('idrol')!='USR'){
			redirect('usuario', 'refresh');
		}
		if(!$this->Usuario_adjunto_model->get($idadj)){
			redirect('usuario', 'refresh');
		}

		$data['usuario_adjunto'] = $this->Usuario_adjunto_model->get($idadj)->row();
		//var_dump($data['usuario_adjunto']);

		// Borrado de directorio
		$path = "./uploads/".$data['usuario_adjunto']->url;
		unlink($path);

		// Borrado de BD
		$this->Usuario_adjunto_model->del($idadj);
		redirect('usuario', 'refresh');
	}*/
}