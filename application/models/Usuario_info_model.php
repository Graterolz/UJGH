<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_info_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	// Reglas
	public $usuario_info_rules = array(		
		'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required'
		),
		'cedula' => array(
			'field' => 'cedula',
			'label' => 'Cedula',
			'rules' => 'trim|required'
		),
		'nombre' => array(
			'field' => 'nombre',
			'label' => 'Nombre',
			'rules' => 'trim|required'
		),
		'apellido' => array(
			'field' => 'apellido',
			'label' => 'Apellido',
			'rules' => 'trim|required'
		),
		'fechaNacimiento' => array(
			'field' => 'fechaNacimiento',
			'label' => 'Fecha de Nacimiento',
			'rules' => 'trim|required'
		),
		'nacionalidad' => array(
			'field' => 'nacionalidad',
			'label' => 'Nacionalidad',
			'rules' => 'trim|required'
		),
		'direccion' => array(
            'field' => 'direccion',
            'label' => 'Direccion',
            'rules' => 'trim|required'
        ),
        'telefonoCelular' => array(
        	'field' => 'telefonoCelular',
        	'label' => 'Telefono Celular',
        	'rules' => 'trim|required'
        ),
        'telefonoFijo' => array(
        	'field' => 'telefonoFijo',
        	'label' => 'Telefono Fijo',
        	'rules' => 'trim|required'
        ),
		'estadoCivil' => array(
			'field' => 'estadoCivil',
			'label' => 'Estado Civil',
			'rules' => 'trim|required'
		),
		'sexo' => array(
			'field' => 'sexo',
			'label' => 'Sexo',
			'rules' => 'trim|required'
		)
	);

	// Retorna informacion de usuario
	function get($idusu){
		$this->db->where('idusu',$idusu);
		$query=$this->db->get('usuario_info');

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Agrega informacion de usuario
	function add($data){
		$data = array(
			'idusu' => NULL,
			'idrol' => 'USR',
			'email' => $data['email'],
			'contrasena' => $data['contrasena'],
			'cedula' => $data['cedula'],
			'nombre' => $data['nombre'],
			'apellido' => $data['apellido'],
			'fechaNacimiento' => $data['fechaNacimiento'],
			'nacionalidad' => $data['nacionalidad'],
			'direccion' => $data['direccion'],
			'telefonoCelular' => $data['telefonoCelular'],
			'telefonoFijo' => $data['telefonoFijo'],
			'estadoCivil' => $data['estadoCivil'],
			'sexo' => $data['sexo']
		);
		
		$this->db->insert('usuario_info',$data);
	}

	// Edita informacion de usuario
	function edit($idusu,$data){
		$data = array(
			'idrol' => 'USR',
			'email' => $data['email'],
			'contrasena' => $data['contrasena'],
			'cedula' => $data['cedula'],
			'nombre' => $data['nombre'],
			'apellido' => $data['apellido'],
			'fechaNacimiento' => $data['fechaNacimiento'],
			'nacionalidad' => $data['nacionalidad'],
			'direccion' => $data['direccion'],
			'telefonoCelular' => $data['telefonoCelular'],
			'telefonoFijo' => $data['telefonoFijo'],
			'estadoCivil' => $data['estadoCivil'],
			'sexo' => $data['sexo']
		);

		$this->db->where('idusu',$idusu);
		$this->db->update('usuario_info',$data);
	}

	// Borra informacion de usuario
	function del($idusu){
		$this->db->where('idusu', $idusu);
		$this->db->delete('usuario_info');
	}

	//
	//
	// Retorna login de usuario
	function login($data){
		$this->db->select('idusu,idrol');
		$this->db->where('email',$data['user']);
		$this->db->where('contrasena',$data['pass']);
		$this->db->limit(1);

		$query = $this->db->get('usuario_info');

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}		
	}
}