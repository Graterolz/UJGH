<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sys_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
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
}