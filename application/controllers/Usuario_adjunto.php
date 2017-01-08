<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_adjunto extends CI_Controller {

	function __construct() {		
		parent::__construct();
		$this->load->model(SYS_MODEL);
		$this->load->model(USUARIO_ADJUNTO_MODEL);
		$this->load->helper(SYS_HELPER);
	}

	// Index
	function index(){
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
	}	

	// Agregar informacion adjunta de usuario
	function add(){
		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if($this->session->userdata(IDROL_SESSION)!=USR){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}

		$rules = $this->Usuario_adjunto_model->usuario_adjunto_rules;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE){
			$data = array(
				IDUSU => $this->session->userdata(IDUSU_SESSION),
				TITULO => $this->input->post(TITULO)
			);

			$imagen = do_upload('userfile');

			if ($imagen != NULL) {
				$data['url'] = $imagen['upload_data']['file_name'];
			}else{
				redirect(USUARIO_INFO_CONTROLLER, 'refresh');
			}
			//var_dump($imagen);//var_dump($data);

			$this->Usuario_adjunto_model->add($data);
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}

		$data['usuario_adjunto_rules'] = $this->Usuario_adjunto_model->usuario_adjunto_rules;
		$data['form_attributes'] = $this->Sys_model->form_attributes;

		$this->load->view(HEADER);
		$this->load->view(MENU);
		$this->load->view(ADD_USUARIO_ADJUNTO,$data);
		$this->load->view(FOOTER);
	}


	// Editar informacion adjunta de usuario
	function edit($idadj = NULL){
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
	}

	// Eliminar informacion adjunta de usuario
	function del($idadj = NULL){
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');

		if(!$this->session->userdata(IDUSU_SESSION)){
			redirect(USUARIO_LOGIN, 'refresh');
		}
		if($this->session->userdata(IDROL_SESSION)!=USR){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}
		if(!$this->Usuario_adjunto_model->get($idadj)){
			redirect(USUARIO_INFO_CONTROLLER, 'refresh');
		}else{
			$data = $this->Usuario_adjunto_model->get($idadj)->row();
		}

		// Borrado de directorio
		$path = "./uploads/".$data->url;
		unlink($path);

		// Borrado de BD
		$this->Usuario_adjunto_model->del($idadj);
		redirect(USUARIO_INFO_CONTROLLER, 'refresh');
	}
}