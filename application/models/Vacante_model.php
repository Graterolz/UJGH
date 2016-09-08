<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	// Reglas
	public $vacante_rules = array(
		'titulo' => array(
			'field' => 'titulo',
			'label' => 'Titulo',
			'rules' => 'trim|required'
		),
		'descripcion' => array(
			'field' => 'descripcion',
			'label' => 'Descripcion',
			'rules' => 'trim|required'
		),
		'beneficios' => array(
			'field' => 'beneficios',
			'label' => 'Beneficios',
			'rules' => 'trim|required'
		),
		'requisitos' => array(
        	'field' => 'requisitos',
        	'label' => 'Requisitos',
        	'rules' => 'trim|required'
        ),
        'salario' => array(
        	'field' => 'salario',
        	'label' => 'Salario',
        	'rules' => 'trim|required'
        ),
        'tipo' => array(
        	'field' => 'tipo',
        	'label' => 'Tipo de Vacante',
        	'rules' => 'trim|required'
        )
	);

	// Retorna vacante con postulaciones
	function get($idvac){
		if($idvac!=NULL){
			$this->db->where('vacante.idvac',$idvac);
		}

		$this->db->select('
			vacante.idvac, vacante.titulo, vacante.descripcion, vacante.beneficios, vacante.requisitos,
			vacante.salario, vacante.fechaPublicacion, vacante.tipo, COUNT(postulacion.idvac) postulaciones
		');
		$this->db->from('vacante');
		$this->db->join('postulacion', 'vacante.idvac = postulacion.idvac','LEFT');
		$this->db->group_by('
			vacante.idvac, vacante.titulo, vacante.descripcion, vacante.beneficios, vacante.requisitos,
			vacante.salario, vacante.fechaPublicacion, vacante.tipo
		');
		$this->db->order_by('9','DESC');
		$this->db->order_by('1');

		$query = $this->db->get();
		//echo $this->db->last_query();

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Retorna postulados de vacante
	function getPostulados($idvac){
		if($idvac!=NULL){
			$this->db->where('postulacion.idvac',$idvac);
		}
		$this->db->select('*');
		$this->db->from('usuario_info');
		$this->db->join('postulacion', 'usuario_info.idusu = postulacion.idusu','LEFT');
		$this->db->order_by('1');

		$query = $this->db->get();
		//echo $this->db->last_query();

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}		
	}

	// Agrega vacante
	function add($data){
		$data = array(
			'idvac' => NULL,
			'titulo' => $data['titulo'],
			'descripcion' => $data['descripcion'],
			'beneficios' => $data['beneficios'],
			'requisitos' => $data['requisitos'],
			'salario' => $data['salario'],
			'fechaPublicacion' => $data['fechaPublicacion'],
			'tipo' => $data['tipo']
		);
		
		$this->db->insert('vacante',$data);
	}

	// Edita vacante
	function edit($idvac,$data){
		$data = array(
			'titulo' => $data['titulo'],
			'descripcion' => $data['descripcion'],
			'beneficios' => $data['beneficios'],
			'requisitos' => $data['requisitos'],
			'salario' => $data['salario'],
			'fechaPublicacion' => $data['fechaPublicacion'],
			'tipo' => $data['tipo']
		);

		$this->db->where('idvac',$idvac);
		$this->db->update('vacante',$data);
	}

	// Borra vacante
	function del($idvac){
		$this->db->where('idvac', $idvac);
		$this->db->delete('vacante');
	}
}