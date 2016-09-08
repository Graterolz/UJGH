<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_laboral_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	// Reglas
	public $usuario_laboral_rules = array(
		'empresa' => array(
			'field' => 'empresa',
			'label' => 'Empresa',
			'rules' => 'trim|required'
		),
		'direccion' => array(
			'field' => 'direccion',
			'label' => 'Direccion',
			'rules' => 'trim|required'
		),
		'telefono' => array(
			'field' => 'telefono',
			'label' => 'Telefono',
			'rules' => 'trim|required'			
		),
		'cargo' => array(
			'field' => 'cargo',
			'label' => 'Cargo',
			'rules' => 'trim|required'
		),
		'labores' => array(
			'field' => 'labores',
			'label' => 'Labores',
			'rules' => 'trim|required'
		),
		'mesInicio' => array(
			'field' => 'mesInicio',
			'label' => 'Mes Inicio',
			'rules' => 'trim|required'
		),
		'anioInicio' => array(
			'field' => 'anioInicio',
			'label' => 'Año de Inicio',
			'rules' => 'trim|required'
		),
		'mesFin' => array(
			'field' => 'mesFin',
			'label' => 'Mes Fin',
			'rules' => 'trim|required'
		),
		'anioFin' => array(
			'field' => 'anioFin',
			'label' => 'Año de Fin',
			'rules' => 'trim|required'
		),
		'beneficios' => array(
			'field' => 'beneficios',
			'label' => 'Beneficios',
			'rules' => 'trim|required'
		),
		'salario' => array(
			'field' => 'salario',
			'label' => 'Salario',
			'rules' => 'trim|required'
		),
		'motivoRetiro' => array(
			'field' => 'motivoRetiro',
			'label' => 'Motivo de Retiro',
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


	// Retorna informacion laboral
	function get($idlab){
		$this->db->where('idlab',$idlab);
		$query = $this->db->get('usuario_laboral');
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Agrega informacion laboral
	function add($data){
		$data = array(
			'idlab' => NULL,
			'idusu' => $data['idusu'],
			'empresa' => $data['empresa'],
			'direccion' => $data['direccion'],
			'telefono' => $data['telefono'],
			'cargo' => $data['cargo'],
			'labores' => $data['labores'],
			'mesInicio' => $data['mesInicio'],
			'anioInicio' => $data['anioInicio'],
			'mesFin' => $data['mesFin'],
			'anioFin' => $data['anioFin'],
			'beneficios' => $data['beneficios'],
			'salario' => $data['salario'],
			'motivoRetiro' => $data['motivoRetiro']
		);

		$this->db->insert('usuario_laboral',$data);
	}

	// Edita informacion laboral
	function edit($idlab,$data){
		$data = array(
			'empresa' => $data['empresa'],
			'direccion' => $data['direccion'],
			'telefono' => $data['telefono'],
			'cargo' => $data['cargo'],
			'labores' => $data['labores'],
			'mesInicio' => $data['mesInicio'],
			'anioInicio' => $data['anioInicio'],
			'mesFin' => $data['mesFin'],
			'anioFin' => $data['anioFin'],
			'beneficios' => $data['beneficios'],
			'salario' => $data['salario'],
			'motivoRetiro' => $data['motivoRetiro']
		);

		$this->db->where('idlab',$idlab);
		$this->db->update('usuario_laboral',$data);
	}

	// Borra informacion laboral
	function del($idlab){
		$this->db->where('idlab', $idlab);
		$this->db->delete('usuario_laboral');
	}

	//
	//
	//Retorna informacion laboral de usuario
	function getUsuario($idusu){
		$this->db->where('idusu',$idusu);
		$query = $this->db->get('usuario_laboral');
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}
}