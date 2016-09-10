<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_adjunto_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	// Reglas
	public $usuario_adjunto_rules = array(
		'titulo' => array(
			'field' => 'titulo',
			'label' => 'Titulo',
			'rules' => 'trim|required'
		),
		'url' => array(
			'field' => 'url',
			'label' => 'Ruta',
			'rules' => 'trim'
		)
	);	

	// Retorna informacion adjunta
	function get($idadj){
		$this->db->where('idadj',$idadj);
		$query = $this->db->get('usuario_adjunto');
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Agrega informacion adjunta
	function add($data){
		$data = array(
			'idadj' => NULL,
			'idusu' => $data['idusu'],
			'titulo' => $data['titulo'],
			'url' => $data['url']
		);
		
		$this->db->insert('usuario_adjunto',$data);
	}

	// Edita informacion adjunta
	function edit($idadj,$data){
		$data = array(
			'idusu' => $data['idusu'],
			'titulo' => $data['titulo'],
			'url' => $data['url']
		);
		
		$this->db->where('idadj', $idadj);
		$this->db->update('usuario_adjunto',$data);
	}

	// Borra informacion adjunta
	function del($idadj){
		$this->db->where('idadj', $idadj);
		$this->db->delete('usuario_adjunto');
	}

	//
	//
	// Retorna informacion adjunta de usuario
	function getUsuario($idusu){
		$this->db->where('idusu',$idusu);
		$query = $this->db->get('usuario_adjunto');
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}
}