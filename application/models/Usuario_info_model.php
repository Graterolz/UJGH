<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_info_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// Obtener informacion de usuario
	function get($idusu){
		if($idusu!=NULL){
			$this->db->where(IDUSU,$idusu);
		}
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->get(TABLA_USUARIO_INFO);

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}
	
	// Insertar informacion de usuario
	function add($data){
		$data=array(
			IDUSU => NULL,
			IDROL => $data[IDROL],
			CEDULA => $data[CEDULA],
			NOMBRE => $data[NOMBRE],
			APELLIDO => $data[APELLIDO],
			GENERO => $data[GENERO],
			FECHA_NACIMIENTO => $data[FECHA_NACIMIENTO],
			NACIONALIDAD => $data[NACIONALIDAD],
			ESTADO_CIVIL => $data[ESTADO_CIVIL],
			DIRECCION => $data[DIRECCION],
			TELEFONO1 => $data[TELEFONO1],
			TELEFONO2 => $data[TELEFONO2],
			EMAIL => $data[EMAIL],
			USER => $data[USER],
			PASS => $data[PASS],
			FECHA_REGISTRO => date(FORMATO_FECHA),
			FECHA_EDICION => date(FORMATO_FECHA),
			ESTADO_REGISTRO => ESTADO_REGISTRO_ACTIVO
		);
		
		$query=$this->db->insert(TABLA_USUARIO_INFO,$data);
		return $query;
	}

	// Editar informacion de usuario
	function edit($idusu,$data){
		$data=array(
			CEDULA => $data[CEDULA],
			NOMBRE => $data[NOMBRE],
			APELLIDO => $data[APELLIDO],
			GENERO => $data[GENERO],
			FECHA_NACIMIENTO => $data[FECHA_NACIMIENTO],
			NACIONALIDAD => $data[NACIONALIDAD],
			ESTADO_CIVIL => $data[ESTADO_CIVIL],
			DIRECCION => $data[DIRECCION],
			TELEFONO1 => $data[TELEFONO1],
			TELEFONO2 => $data[TELEFONO2],
			EMAIL => $data[EMAIL],
			FECHA_EDICION => date(FORMATO_FECHA)
		);

		$this->db->where(IDUSU,$idusu);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->update(TABLA_USUARIO_INFO,$data);
		return $query;
	}

	// Eliminar informacion de usuario
	function del($idusu){
		$data=array(
			ESTADO_REGISTRO => ESTADO_REGISTRO_ELIMINADO
		);

		$this->db->where(IDUSU,$idusu);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->update(TABLA_USUARIO_INFO,$data);
		return $query;
	}

	// Obtener informacion de usuario por vacante
	function getUsuariosByVacante($idvac){
		$sql = 	'SELECT * FROM '.TABLA_USUARIO_INFO.
				' WHERE '.ESTADO_REGISTRO.' = '.ESTADO_REGISTRO_ACTIVO.
				' AND '.IDUSU.' IN (SELECT '.IDUSU.' FROM '.TABLA_POSTULACION.' WHERE '.IDVAC.' = ?)';

		$query=$this->db->query($sql,$idvac);

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Login de usuario
	function login($data){
		$this->db->where(USER,$data[USER]);
		$this->db->where(PASS,$data[PASS]);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$this->db->limit(1);
		$query=$this->db->get(TABLA_USUARIO_INFO);

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}		
	}

	// Reglas para formularios
	public $usuario_info_rules = array(
		IDUSU => array(
			'label' => 'ID'
		),
		CEDULA => array(
			'field' => CEDULA,
			'for' => CEDULA,
			'label' => 'Cedula',
			'rules' => 'trim|required'
		),
		NOMBRE => array(
			'field' => NOMBRE,
			'for' => NOMBRE,
			'label' => 'Nombre',
			'rules' => 'trim|required'
		),
		APELLIDO => array(
			'field' => APELLIDO,
			'for' => APELLIDO,
			'label' => 'Apellido',
			'rules' => 'trim|required'
		),
		GENERO => array(
			'field' => GENERO,
			'for' => GENERO,
			'label' => 'Genero',
			'rules' => 'trim|required'
		),
		FECHA_NACIMIENTO => array(
			'field' => FECHA_NACIMIENTO,
			'for' => FECHA_NACIMIENTO,
			'label' => 'Fecha de Nacimiento',
			'rules' => 'trim|required'
		),
		NACIONALIDAD => array(
			'field' => NACIONALIDAD,
			'for' => NACIONALIDAD,
			'label' => 'Nacionalidad',
			'rules' => 'trim|required'
		),
		ESTADO_CIVIL => array(
			'field' => ESTADO_CIVIL,
			'for' => ESTADO_CIVIL,
			'label' => 'Estado Civil',
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
			'label' => 'Telefono Principal',
			'rules' => 'trim|required'
		),
		TELEFONO2 => array(
			'field' => TELEFONO2,
			'for' => TELEFONO2,
			'label' => 'Telefono Alternativo',
			'rules' => 'trim|required'
		),
		EMAIL => array(
			'field' => EMAIL,
			'for' => EMAIL,
			'label' => 'Correo Electronico',
			'rules' => 'trim|required'
		),
		USER => array(
			'field' => USER,
			'for' => USER,
			'label' => 'Usuario',
			'rules' => 'trim|required'
		)
	);

}