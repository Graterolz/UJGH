<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public $rules_registro = array(
		'nombre' => array(
            'field' => 'nombre',
            'label' => 'nombre',
            'rules' => 'trim|required',
            ),
		'apellido' => array(
            'field' => 'apellido',
            'label' => 'apellido',
            'rules' => 'trim|required',
            ),
		'cedula' => array(
            'field' => 'cedula',
            'label' => 'cedula',
            'rules' => 'trim|required',
            ),
		'email' => array(
            'field' => 'email',
            'label' => 'email',
            'rules' => 'trim|required',
            ),
        /*'fechaNacimiento' => array(
        	),*/
		'nacionalidad' => array(
            'field' => 'nacionalidad',
            'label' => 'nacionalidad',
            'rules' => 'trim|required',
            ),
		'direccion' => array(
            'field' => 'direccion',
            'label' => 'direccion',
            'rules' => 'trim|required',
            ),
		'telefonoCelular' => array(
            'field' => 'telefonoCelular',
            'label' => 'telefonoCelular',
            'rules' => 'trim|required',
            ),
		'telefonoFijo' => array(
            'field' => 'telefonoFijo',
            'label' => 'telefonoFijo',
            'rules' => 'trim|required',
            ),
		'estadoCivil' => array(
            'field' => 'estadoCivil',
            'label' => 'estadoCivil',
            'rules' => 'trim|required',
            ),
		'sexo' => array(
            'field' => 'sexo',
            'label' => 'sexo',
            'rules' => 'trim|required',
            ),
		'contrasena' => array(
            'field' => 'contrasena',
            'label' => 'contrasena',
            'rules' => 'trim|required',
            ),
		'contrasena2' => array(
            'field' => 'contrasena2',
            'label' => 'contrasena2',
            'rules' => 'trim|required',
            )
	);

	public $rules_academico = array(
		'titulo' => array(
            'field' => 'titulo',
            'label' => 'titulo',
            'rules' => 'trim|required',
            ),
        'nivelEstudio' => array(
            'field' => 'nivelEstudio',
            'label' => 'nivelEstudio',
            'rules' => 'trim|required',
            ),
        'institucion' => array(
            'field' => 'institucion',
            'label' => 'institucion',
            'rules' => 'trim|required',
            ),
        'mesInicio' => array(
            'field' => 'mesInicio',
            'label' => 'mesInicio',
            'rules' => 'trim|required',        	
        	),
        'anioInicio' => array(
            'field' => 'anioInicio',
            'label' => 'anioInicio',
            'rules' => 'trim|required',
        	),
        'mesFin' => array(
            'field' => 'mesFin',
            'label' => 'mesFin',
            'rules' => 'trim|required',
        	),
        'anioFin' => array(
            'field' => 'anioFin',
            'label' => 'anioFin',
            'rules' => 'trim|required',
        	),        	        	        
	);

	public $rules_laboral = array(
		'empresa' => array(
            'field' => 'empresa',
            'label' => 'empresa',
            'rules' => 'trim|required',			
			),
		'direccion' => array(
            'field' => 'direccion',
            'label' => 'direccion',
            'rules' => 'trim|required',			
			),
		'telefono' => array(
            'field' => 'telefono',
            'label' => 'telefono',
            'rules' => 'trim|required',			
			),
		'cargo' => array(
            'field' => 'cargo',
            'label' => 'cargo',
            'rules' => 'trim|required',			
			),
		'labores' => array(
            'field' => 'labores',
            'label' => 'labores',
            'rules' => 'trim|required',			
			),
		'mesInicio' => array(
            'field' => 'mesInicio',
            'label' => 'mesInicio',
            'rules' => 'trim|required',			
			),
		'anioInicio' => array(
            'field' => 'anioInicio',
            'label' => 'anioInicio',
            'rules' => 'trim|required',			
			),
		'mesFin' => array(
            'field' => 'mesFin',
            'label' => 'mesFin',
            'rules' => 'trim|required',			
			),
		'anioFin' => array(
            'field' => 'anioFin',
            'label' => 'anioFin',
            'rules' => 'trim|required',			
			),
		'beneficios' => array(
            'field' => 'beneficios',
            'label' => 'beneficios',
            'rules' => 'trim|required',			
			),
		'salario' => array(
            'field' => 'salario',
            'label' => 'salario',
            'rules' => 'trim|required',			
			),
		'motivoRetiro' => array(
            'field' => 'motivoRetiro',
            'label' => 'motivoRetiro',
            'rules' => 'trim|required',			
			),
	);
	
	function getUsuarioInfo($idusu){
		$this->db->where('idusu',$idusu);
		$query = $this->db->get('usuario_info');		
		
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	function getUsuarioAcademico($idusu){
		/*$this->db->where('idusu',$idusu);
		$query = $this->db->get('usuario_academico');

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}*/

		return $this->getUsuarioAcademicoV2($idusu,NULL);
	}

	function getUsuarioAcademicoV2($idusu,$idaca){

		if ($idusu!=NULL){
			$this->db->where('idusu',$idusu);
		}

		if ($idaca!=NULL){
			$this->db->where('idaca',$idaca);	
		}

		$query = $this->db->get('usuario_academico');

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	function getUsuarioLaboralV2($idusu,$idlab){

		if ($idusu!=NULL){
			$this->db->where('idusu',$idusu);
		}

		if ($idlab!=NULL){
			$this->db->where('idlab',$idlab);	
		}

		$query = $this->db->get('usuario_laboral');

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}	

	function getUsuarioLaboral($idusu){
		$this->db->where('idusu',$idusu);
		$query = $this->db->get('usuario_laboral');
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}		
	}

	function getLoginUsuario($data){
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
	
	function addUsuarioInfo($data){
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

	function addUsuarioAcademico($data){
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

	function editUsuarioAcademico($idaca,$data){
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

	function addUsuarioLaboral($data){
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

	function editUsuarioLaboral($idlab,$data){
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
}