<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_adjunto_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// Obtener informacion adjunta
	function get($idadj){
		if($idadj!=NULL){
			$this->db->where(IDADJ,$idadj);
		}
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->get(TABLA_USUARIO_ADJUNTO);
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Insertar informacion adjunta
	function add($data){
		$data=array(
			IDADJ => NULL,
			IDUSU => $data[IDUSU],
			TITULO => $data[TITULO],
			URL => $data[URL],
			FECHA_REGISTRO => date(FORMATO_FECHA),
			FECHA_EDICION => date(FORMATO_FECHA),
			ESTADO_REGISTRO => ESTADO_REGISTRO_ACTIVO
		);
		
		$query=$this->db->insert(TABLA_USUARIO_ADJUNTO,$data);
		return $query;
	}

	// Editar informacion adjunta
	function edit($idadj,$data){
		$data=array(
			TITULO => $data[TITULO],
			FECHA_EDICION => date(FORMATO_FECHA)
		);
		
		$this->db->where(IDADJ,$idadj);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->update(TABLA_USUARIO_ADJUNTO,$data);
		return $query;
	}	

	// Eliminar informacion adjunta
	function del($idadj){
		$data=array(
			ESTADO_REGISTRO => ESTADO_REGISTRO_ELIMINADO
		);

		$this->db->where(IDADJ,$idadj);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->update(TABLA_USUARIO_ADJUNTO,$data);
		return $query;
	}	

	// Obtener informacion adjunta por usuario
	function getAdjutosByUsuario($idusu){
		$this->db->where(IDUSU,$idusu);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->get(TABLA_USUARIO_ADJUNTO);
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	//
	public $usuario_adjunto_rules = array(
	
	);
}