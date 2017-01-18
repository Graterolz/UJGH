<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postulacion_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// Obtener informacion de postulacion
	function get($idpos){
		if($idpos!=NULL){
			$this->db->where(IDPOS,$idpos);
		}
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->get(TABLA_POSTULACION);

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Insertar informacion de postulacion
	function add($data){
		$data=array(
			IDPOS => NULL,
			IDVAC => $data[IDVAC],
			IDUSU => $data[IDUSU],
			ESTADO => 'Enviado',
			FECHA_REGISTRO => date(FORMATO_FECHA),
			FECHA_EDICION => date(FORMATO_FECHA),
			ESTADO_REGISTRO => ESTADO_REGISTRO_ACTIVO
		);

		$query=$this->db->insert(TABLA_POSTULACION,$data);
		return $query;
	}

	// Editar informacion de postulacion
	function edit($idpos,$data){
		$data=array(
			ESTADO => $data[ESTADO],
			FECHA_EDICION => date(FORMATO_FECHA)
		);

		$this->db->where(IDPOS,$idpos);
		$query=$this->db->update(TABLA_POSTULACION,$data);
		return $query;
	}

	// Eliminar informacion de postulacion
	function del($idpos){
		$data=array(
			ESTADO_REGISTRO => ESTADO_REGISTRO_ELIMINADO
		);

		$this->db->where(IDPOS,$idpos);
		$query=$this->db->update(TABLA_POSTULACION,$data);
		return $query;
	}

	// Obtener informacion de postulacion por usuario
	function getPostulacionByUsuario($idusu){
		$this->db->where(IDUSU,$idusu);
		$this->db->select('
			postulacion.idpos, vacante.titulo, vacante.descripcion, vacante.beneficios, 
			vacante.tipo, postulacion.estado, postulacion.fecha_registro
		');
		$this->db->from(TABLA_VACANTE);
		$this->db->join(TABLA_POSTULACION, 'vacante.idvac = postulacion.idvac','LEFT');
		$this->db->where('vacante.'.ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$this->db->order_by('1','DESC');

		$query=$this->db->get();
		//echo $this->db->last_query();

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Obtener informacion de postulacion por vacante y usuario
	function getPostulacionByVacanteUsuario($idvac,$idusu){
		$this->db->where(IDVAC,$idvac);
		$this->db->where(IDUSU,$idusu);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->get(TABLA_POSTULACION);

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	//
	public $postulacion_rules = array(
		IDPOS => array(
			'label' => 'ID'
		),
		ESTADO => array(
			'label' => 'Estado del Registro'
		)
	);

}