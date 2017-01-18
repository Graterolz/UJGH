<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// Obtener informacion de vacante con postulaciones
	function get($idvac){
		if($idvac!=NULL){
			$this->db->where('vacante.idvac',$idvac);
		}

		$this->db->select('
			vacante.idvac, vacante.titulo, vacante.descripcion, vacante.beneficios, vacante.requisitos,
			vacante.salario, vacante.fecha_registro, vacante.tipo, COUNT(postulacion.idvac) postulaciones'
		);
		$this->db->from(TABLA_VACANTE);
		$this->db->join(TABLA_POSTULACION, 'vacante.idvac = postulacion.idvac','LEFT');
		$this->db->group_by('
			vacante.idvac, vacante.titulo, vacante.descripcion, vacante.beneficios, vacante.requisitos,
			vacante.salario, vacante.fecha_registro, vacante.tipo'
		);
		$this->db->where('vacante.'.ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		//$this->db->order_by('9','DESC');
		$this->db->order_by('1','DESC');

		$query=$this->db->get();
		//echo $this->db->last_query();

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Insertar informacion de vacante
	function add($data){
		$data=array(
			IDVAC => NULL,
			TITULO => $data[TITULO],
			DESCRIPCION => $data[DESCRIPCION],
			BENEFICIOS => $data[BENEFICIOS],
			REQUISITOS => $data[REQUISITOS],
			SALARIO => $data[SALARIO],
			TIPO => $data[TIPO],
			FECHA_REGISTRO => date(FORMATO_FECHA),
			FECHA_EDICION => date(FORMATO_FECHA),
			ESTADO_REGISTRO => ESTADO_REGISTRO_ACTIVO
		);
		
		$query=$this->db->insert(TABLA_VACANTE,$data);
		return $query;
	}

	// Editar informacion de vacante
	function edit($idvac,$data){
		$data=array(
			//IDVAC => NULL,
			TITULO => $data[TITULO],
			DESCRIPCION => $data[DESCRIPCION],
			BENEFICIOS => $data[BENEFICIOS],
			REQUISITOS => $data[REQUISITOS],
			SALARIO => $data[SALARIO],
			TIPO => $data[TIPO],
			FECHA_EDICION => date(FORMATO_FECHA)
		);

		$this->db->where(IDVAC,$idvac);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->update(TABLA_VACANTE,$data);
		return $query;
	}

	// Eliminar informacion de vacante
	function del($idvac){
		$data=array(
			ESTADO_REGISTRO => ESTADO_REGISTRO_ELIMINADO
		);

		$this->db->where(IDVAC,$idvac);
		$query=$this->db->update(TABLA_VACANTE,$data);
		return $query;
	}

	//
	public $vacante_rules = array(
		IDVAC => array(
			'label' => 'ID'
		),
		TITULO => array(
			'field' => TITULO,
			'for' => TITULO,
			'label' => 'Titulo',
			'rules' => 'trim|required'
		),
		DESCRIPCION => array(
			'field' => DESCRIPCION,
			'for' => DESCRIPCION,
			'label' => 'Descripcion',
			'rules' => 'trim|required'
		),
		BENEFICIOS => array(
			'field' => BENEFICIOS,
			'for' => BENEFICIOS,
			'label' => 'Beneficios',
			'rules' => 'trim|required'
		),
		REQUISITOS => array(
			'field' => REQUISITOS,
			'for' => REQUISITOS,
			'label' => 'Requisitos',
			'rules' => 'trim|required'
		),
		SALARIO => array(
			'field' => SALARIO,
			'for' => SALARIO,
			'label' => 'Salario',
			'rules' => 'trim|required'
		),
		TIPO => array(
			'field' => TIPO,
			'for' => TIPO,
			'label' => 'Tipo de Vacante',
			'rules' => 'trim|required'
		),
		FECHA_REGISTRO => array(
			'field' => FECHA_REGISTRO,
			'for' => FECHA_REGISTRO,
			'label' => 'Fecha de Registro'
		)
	);
}