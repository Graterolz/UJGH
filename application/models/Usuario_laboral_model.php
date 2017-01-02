<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_laboral_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// Obtener informacion laboral
	function get($idlab){
		if($idlab!=NULL){
			$this->db->where(IDLAB,$idlab);
		}
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->get(TABLA_USUARIO_LABORAL);
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Insertar informacion laboral
	function add($data){
		$data=array(
			IDLAB => NULL,
			IDUSU => $data[IDUSU],
			EMPRESA => $data[EMPRESA],
			DIRECCION => $data[DIRECCION],
			TELEFONO1 => $data[TELEFONO1],
			CARGO => $data[CARGO],
			LABORES => $data[LABORES],
			MES_INICIO => $data[MES_INICIO],
			ANIO_INICIO => $data[ANIO_INICIO],
			MES_FIN => $data[MES_FIN],
			ANIO_FIN => $data[ANIO_FIN],
			BENEFICIOS => $data[BENEFICIOS],
			SALARIO => $data[SALARIO],
			MOTIVO_RETIRO => $data[MOTIVO_RETIRO],
			FECHA_REGISTRO => $data[FECHA_REGISTRO],
			FECHA_EDICION => $data[FECHA_EDICION],
			ESTADO_REGISTRO => $data[ESTADO_REGISTRO]
		);

		$query=$this->db->insert(TABLA_USUARIO_LABORAL,$data);
		return $query;
	}

	// Editar informacion laboral
	function edit($idlab,$data){
		$data=array(
			EMPRESA => $data[EMPRESA],
			DIRECCION => $data[DIRECCION],
			TELEFONO1 => $data[TELEFONO1],
			CARGO => $data[CARGO],
			LABORES => $data[LABORES],
			MES_INICIO => $data[MES_INICIO],
			ANIO_INICIO => $data[ANIO_INICIO],
			MES_FIN => $data[MES_FIN],
			ANIO_FIN => $data[ANIO_FIN],
			BENEFICIOS => $data[BENEFICIOS],
			SALARIO => $data[SALARIO],
			MOTIVO_RETIRO => $data[MOTIVO_RETIRO],
			FECHA_EDICION => date(FORMATO_FECHA)
		);

		$this->db->where(IDLAB,$idlab);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->update(TABLA_USUARIO_LABORAL,$data);
		return $query;
	}

	// Eliminar informacion laboral
	function del($idlab){
		$data=array(
			ESTADO_REGISTRO => ESTADO_REGISTRO_ELIMINADO
		);

		$this->db->where(IDLAB,$idlab);
		$query=$this->db->update(TABLA_USUARIO_LABORAL,$data);
		return $query;
	}

	//Obtener informacion laboral por usuario
	function getLaboralByUsuario($idusu){
		$this->db->where(IDUSU,$idusu);
		$query=$this->db->get(TABLA_USUARIO_LABORAL);
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Reglas para formularios
	public $usuario_laboral_rules = array(
		EMPRESA => array(
			'field' => EMPRESA,
			'for' => EMPRESA,
			'label' => 'Empresa',
			'rules' => 'trim|required'
		),
		DIRECCION => array(
			'field' => DIRECCION,
			'for' => DIRECCION,
			'label' => 'Direccion',
			'rules' => 'trim|required'
		),
		TELEFONO1 => array(
			'field' => TELEFONO1,
			'for' => TELEFONO1,
			'label' => 'Telefono 1',
			'rules' => 'trim|required'
		),
		CARGO => array(
			'field' => CARGO,
			'for' => CARGO,
			'label' => 'Cargo',
			'rules' => 'trim|required'
		),
		LABORES => array(
			'field' => LABORES,
			'for' => LABORES,
			'label' => 'Labores',
			'rules' => 'trim|required'
		),
		MES_INICIO => array(
			'field' => MES_INICIO,
			'for' => MES_INICIO,
			'label' => 'Mes Inicio',
			'rules' => 'trim|required'
		),
		ANIO_INICIO => array(
			'field' => ANIO_INICIO,
			'for' => ANIO_INICIO,
			'label' => 'Año Inicio',
			'rules' => 'trim|required'
		),
		MES_FIN => array(
			'field' => MES_FIN,
			'for' => MES_FIN,
			'label' => 'Mes Fin',
			'rules' => 'trim|required'
		),
		ANIO_FIN => array(
			'field' => ANIO_FIN,
			'for' => ANIO_FIN,
			'label' => 'Año Fin',
			'rules' => 'trim|required'
		),
		BENEFICIOS => array(
			'field' => BENEFICIOS,
			'for' => BENEFICIOS,
			'label' => 'Beneficios',
			'rules' => 'trim|required'
		),
		SALARIO => array(
			'field' => SALARIO,
			'for' => SALARIO,
			'label' => 'Salario',
			'rules' => 'trim|required'
		),
		MOTIVO_RETIRO => array(
			'field' => MOTIVO_RETIRO,
			'for' => MOTIVO_RETIRO,
			'label' => 'Motivo del retiro',
			'rules' => 'trim|required'
		)
	);
}