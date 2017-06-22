<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sys_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public $form_attributes = array(
		'role' => 'form',
		'autocomplete' => 'off'
	);

	public $tipo_vacante = array(
		'' => '(None)',
		'Administrativo' => 'Administrativo',
		'Docente' => 'Docente'
	);

	public $generos = array(
		'' => '(None)',
		'Masculino' => 'Masculino',
		'Femenino' => 'Femenino'
	);

	public $estado_civil = array(
		'' => '(None)',
		'Soltero/a' => 'Soltero/a',
		'Casado/a' => 'Casado/a',
		'Viudo/a' => 'Viudo/a',
		'Otros' => 'Otros'
	);

	public $nacionalidad = array(
		'' => '(None)',
		'Venezolano/a' => 'Venezolano/a',
		'Extranjero/a' => 'Extranjero/a'
	);

	public $meses = array(
		'' => '(None)',
		'Enero' => 'Enero',
		'Febrero' => 'Febrero',
		'Marzo' => 'Marzo',
		'Abril' => 'Abril',
		'Mayo' => 'Mayo',
		'Junio' => 'Junio',
		'Julio' => 'Julio',
		'Agosto' => 'Agosto',
		'Septiembre' => 'Septiembre',
		'Octubre' => 'Octubre',
		'Noviembre' => 'Noviembre',
		'Diciembre' => 'Diciembre'
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
		'2016' => '2016',
		'2017' => '2017'
	);

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

	// Obtener informacion academica por usuario
	function getAcademicoByUsuario($idusu){
		$this->db->where(IDUSU,$idusu);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->get(TABLA_USUARIO_ACADEMICO);
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	//Obtener informacion laboral por usuario
	function getLaboralByUsuario($idusu){
		$this->db->where(IDUSU,$idusu);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);		
		$query=$this->db->get(TABLA_USUARIO_LABORAL);		
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
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
}