<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_academico_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	// Reglas
	public $usuario_academico_rules = array(
		'titulo' => array(
			'field' => 'titulo',
			'label' => 'Titulo',
			'rules' => 'trim|required'
		),
		'nivelEstudio' => array(
			'field' => 'nivelEstudio',
			'label' => 'Nivel de Estudio',
			'rules' => 'trim|required'
		),
        'institucion' => array(
        	'field' => 'institucion',
        	'label' => 'Institucion',
        	'rules' => 'trim|required'
        ),
        'mesInicio' => array(
        	'field' => 'mesInicio',
        	'label' => 'Mes Inicio',
        	'rules' => 'trim|required'
        ),
        'anioInicio' => array(
        	'field' => 'anioInicio',
        	'label' => 'Año Inicio',
        	'rules' => 'trim|required'
        ),
        'mesFin' => array(
        	'field' => 'mesFin',
        	'label' => 'Mes Fin',
        	'rules' => 'trim|required'
        ),
        'anioFin' => array(
        	'field' => 'anioFin',
        	'label' => 'Año Fin',
        	'rules' => 'trim|required'
        )
	);

	public $meses = array(
        '' => '(None)',
        'Enero'     => 'Enero',
        'Febrero'   => 'Febrero',
        'Marzo'     => 'Marzo',
        'Abril'    => 'Abril',
        'Mayo'    => 'Mayo',
        'Junio'    => 'Junio',
        'Julio'    => 'Julio',
        'Agosto'    => 'Agosto',
        'Septiembre'    => 'Septiembre',
        'Octubre'    => 'Octubre',
        'Noviembre'    => 'Noviembre',
        'Diciembre'    => 'Diciembre'
    );

    public $anios = array(
        '' => '(None)',
        '2000' => '2000',
        '2001' => '2001',
        '2002' => '2002',
        '2003' => '2003',
        '2004' => '2004',
        '2005' => '2005',
        '2006' => '2006',
        '2007' => '2007',
        '2008' => '2008',
        '2009' => '2009',
        '2010' => '2010',
        '2011' => '2011',
        '2012' => '2012',
        '2013' => '2013',
        '2014' => '2014',
        '2015' => '2015',
        '2016' => '2016'
    );

	// Retorna informacion academica
	function get($idaca){
		$this->db->where('idaca',$idaca);
		$query = $this->db->get('usuario_academico');
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Agrega informacion academica
	function add($data){
		$data = array(
			'idaca' => NULL,
			'idusu' => $data['idusu'],
			'titulo' => $data['titulo'],
			'nivelEstudio' => $data['nivelEstudio'],
			'institucion' => $data['institucion'],
			'mesInicio' => $data['mesInicio'],
			'anioInicio' => $data['anioInicio'],
			'mesFin' => $data['mesFin'],
			'anioFin' => $data['anioFin']
		);
		$this->db->insert('usuario_academico',$data);
	}

	// Edita informacion academica
	function edit($idaca,$data){
		$data = array(
			'titulo' => $data['titulo'],
			'nivelEstudio' => $data['nivelEstudio'],
			'institucion' => $data['institucion'],
			'mesInicio' => $data['mesInicio'],
			'anioInicio' => $data['anioInicio'],
			'mesFin' => $data['mesFin'],
			'anioFin' => $data['anioFin']
		);

		$this->db->where('idaca',$idaca);
		$this->db->update('usuario_academico',$data);
	}

	// Borra informacion academica
	function del($idaca){
		$this->db->where('idaca', $idaca);
		$this->db->delete('usuario_academico');
	}

	//
	//
	// Retorna informacion academica de usuario
	function getUsuario($idusu){
		$this->db->where('idusu',$idusu);
		$query = $this->db->get('usuario_academico');
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}
}