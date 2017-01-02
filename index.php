<?php
// URLs
define ('PATH_MENU' , 'index.php');
define ('PATH_RESOURCES' , 'resources/startbootstrap-sb-admin-2');
define ('PATH_RESOURCES2' , 'resources/imgs');

// Modelos
define ('SYS_MODEL','Sys_model');
define ('USUARIO_INFO_MODEL','Usuario_info_model');
define ('USUARIO_ADJUNTO_MODEL','Usuario_adjunto_model');
define ('USUARIO_ACADEMICO_MODEL','Usuario_academico_model');
define ('USUARIO_LABORAL_MODEL','Usuario_laboral_model');
define ('VACANTE_MODEL','Vacante_model');
define ('POSTULACION_MODEL','Postulacion_model');

// Controlador USUARIO_INFO
define ('USUARIO_INFO_CONTROLLER','usuario_info');
define ('USUARIO_LOGIN','usuario_info/login');
define ('USUARIO_LOGOUT','usuario_info/logout');
define ('USUARIO_INFO_EDIT','usuario_info/edit');

// Controlador USUARIO_ACADEMICO
define ('USUARIO_ACADEMICO_CONTROLLER','usuario_academico');
define ('USUARIO_ACADEMICO_ADD','usuario_academico/add');
define ('USUARIO_ACADEMICO_EDIT','usuario_academico/edit');
define ('USUARIO_ACADEMICO_DEL','usuario_academico/del');

// Controlador USUARIO_LABORAL
define ('USUARIO_LABORAL_CONTROLLER','usuario_laboral');
define ('USUARIO_LABORAL_ADD','usuario_laboral/add');
define ('USUARIO_LABORAL_EDIT','usuario_laboral/edit');
define ('USUARIO_LABORAL_DEL','usuario_laboral/del');

// Controlador USUARIO_ADJUNTO
define ('USUARIO_ADJUNTO_CONTROLLER','usuario_adjunto');
define ('USUARIO_ADJUNTO_ADD','usuario_adjunto/add');

//
define ('VACANTE_CONTROLLER','vacante');
define ('POSTULACION_CONTROLLER','postulacion');

// Variable de SESSION
define ('IDUSU_SESSION','idusu_ujghempleo');
define ('IDROL_SESSION','idrol_ujghempleo');

// Vistas MENU
define ('HEADER','templates/header');
define ('MENU','templates/menu');
define ('FOOTER','templates/footer');
define ('TITULO_MENU','Empleo UJGH');
define ('MENU_USUARIO_INFO','Usuario');
define ('MENU_USUARIO_ACADEMICO','Academico');
define ('TITULO_VACANTE','Vacantes');
define ('TITULO_POSTULACION','Postulaciones');
define ('TITULO_LOGOUT','Logout');

// Vistas
define ('GET_LOGIN','usuario/get_login');
define ('GET_USUARIO_USR','usuario/get_usuario_usr');
define ('GET_USUARIO_ADM','usuario/get_usuario_adm');
define ('EDIT_USUARIO_INFO','usuario_info/edit_usuario_info');
define ('ADD_USUARIO_ACADEMICO','usuario_academico/add_usuario_academico');
define ('EDIT_USUARIO_ACADEMICO','usuario_academico/edit_usuario_academico');
define ('LIST_VACANTE_USR','vacante/list_vacante_usr');
define ('LIST_VACANTE_ADM','vacante/list_vacante_adm');
define ('LIST_POSTULACION_USR','postulacion/list_postulacion_usr');
define ('LIST_POSTULACION_ADM','postulacion/list_postulacion_adm');

// Tablas
define ('TABLA_USUARIO_INFO','usuario_info');
define ('TABLA_USUARIO_ADJUNTO','usuario_adjunto');
define ('TABLA_USUARIO_ACADEMICO','usuario_academico');
define ('TABLA_USUARIO_LABORAL','usuario_laboral');
define ('TABLA_VACANTE','vacante');
define ('TABLA_POSTULACION','postulacion');

// Campos - TABLA_USUARIO_INFO
define ('IDUSU','idusu');
define ('IDROL','idrol');
define ('CEDULA','cedula');
define ('NOMBRE','nombre');
define ('APELLIDO','apellido');
define ('GENERO','genero');
define ('FECHA_NACIMIENTO','fecha_nacimiento');
define ('NACIONALIDAD','nacionalidad');
define ('ESTADO_CIVIL','estado_civil');
define ('DIRECCION','direccion');
define ('TELEFONO1','telefono1');
define ('TELEFONO2','telefono2');
define ('EMAIL','email');
define ('USER','user');
define ('PASS','pass');
define ('FECHA_REGISTRO','fecha_registro');
define ('FECHA_EDICION','fecha_edicion');
define ('ESTADO_REGISTRO','estado_registro');

// Campos - TABLA_USUARIO_ADJUNTO
define ('IDADJ','idadj');
define ('TITULO','titulo');
define ('URL','url');

// Campos - TABLA_USUARIO_ACADEMICO
define ('IDACA','idaca');
define ('NIVEL_ESTUDIO','nivel_estudio');
define ('INSTITUCION','institucion');
define ('MES_INICIO','mes_inicio');
define ('ANIO_INICIO','anio_inicio');
define ('MES_FIN','mes_fin');
define ('ANIO_FIN','anio_fin');

// Campos - TABLA_USUARIO_LABORAL
define ('IDLAB','idlab');
define ('EMPRESA','empresa');
define ('CARGO','cargo');
define ('LABORES','labores');
define ('BENEFICIOS','beneficios');
define ('SALARIO','salario');
define ('MOTIVO_RETIRO','motivo_retiro');

// Campos - TABLA_VACANTE
define ('IDVAC','idvac');
define ('DESCRIPCION','descripcion');
define ('REQUISITOS','requisitos');
define ('TIPO','tipo');

// Campos - TABLA_POSTULACION
define ('IDPOS','idpos');
define ('ESTADO','estado');

// Estado de Registros
define ('ESTADO_REGISTRO_ELIMINADO','0');
define ('ESTADO_REGISTRO_ACTIVO','1');

// Roles de Usuario
define ('USR','USR');
define ('ADM','ADM');

// Formato fecha
define ('FORMATO_FECHA','Y-m-d H:i:s');

// Titulos Paneles
define ('TITULO_USUARIO_INFO','Informacion Personal');
define ('TITULO_USUARIO_ADJUNTO','Informacion Adjunta');
define ('TITULO_USUARIO_ACADEMICO','Informacion Academica');
define ('TITULO_USUARIO_LABORAL','Informacion Laboral');

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 */
	define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
switch (ENVIRONMENT)
{
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
	break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		if (version_compare(PHP_VERSION, '5.3', '>='))
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		}
		else
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}

/*
 *---------------------------------------------------------------
 * SYSTEM DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" directory.
 * Set the path if it is not in the same directory as this file.
 */
	$system_path = 'system';

/*
 *---------------------------------------------------------------
 * APPLICATION DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * directory than the default one you can set its name here. The directory
 * can also be renamed or relocated anywhere on your server. If you do,
 * use an absolute (full) server path.
 * For more info please see the user guide:
 *
 * https://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 */
	$application_folder = 'application';

/*
 *---------------------------------------------------------------
 * VIEW DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want to move the view directory out of the application
 * directory, set the path to it here. The directory can be renamed
 * and relocated anywhere on your server. If blank, it will default
 * to the standard location inside your application directory.
 * If you do move this, use an absolute (full) server path.
 *
 * NO TRAILING SLASH!
 */
	$view_folder = '';


/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default controller in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here. For most applications, you
 * WILL NOT set your routing here, but it's an option for those
 * special instances where you might want to override the standard
 * routing in a specific front controller that shares a common CI installation.
 *
 * IMPORTANT: If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller. Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 */
	// The directory name, relative to the "controllers" directory.  Leave blank
	// if your controller is not in a sub-directory within the "controllers" one
	// $routing['directory'] = '';

	// The controller class file name.  Example:  mycontroller
	// $routing['controller'] = '';

	// The controller function you wish to be called.
	// $routing['function']	= '';


/*
 * -------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * -------------------------------------------------------------------
 *
 * The $assign_to_config array below will be passed dynamically to the
 * config class when initialized. This allows you to set custom config
 * items or override any default config values found in the config.php file.
 * This can be handy as it permits you to share one application between
 * multiple front controller files, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 */
	// $assign_to_config['name_of_config_item'] = 'value of config item';



// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	// Set the current directory correctly for CLI requests
	if (defined('STDIN'))
	{
		chdir(dirname(__FILE__));
	}

	if (($_temp = realpath($system_path)) !== FALSE)
	{
		$system_path = $_temp.DIRECTORY_SEPARATOR;
	}
	else
	{
		// Ensure there's a trailing slash
		$system_path = strtr(
			rtrim($system_path, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		).DIRECTORY_SEPARATOR;
	}

	// Is the system path correct?
	if ( ! is_dir($system_path))
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME);
		exit(3); // EXIT_CONFIG
	}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// Path to the system directory
	define('BASEPATH', $system_path);

	// Path to the front controller (this file) directory
	define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

	// Name of the "system" directory
	define('SYSDIR', basename(BASEPATH));

	// The path to the "application" directory
	if (is_dir($application_folder))
	{
		if (($_temp = realpath($application_folder)) !== FALSE)
		{
			$application_folder = $_temp;
		}
		else
		{
			$application_folder = strtr(
				rtrim($application_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(BASEPATH.$application_folder.DIRECTORY_SEPARATOR))
	{
		$application_folder = BASEPATH.strtr(
			trim($application_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);

	// The path to the "views" directory
	if ( ! isset($view_folder[0]) && is_dir(APPPATH.'views'.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.'views';
	}
	elseif (is_dir($view_folder))
	{
		if (($_temp = realpath($view_folder)) !== FALSE)
		{
			$view_folder = $_temp;
		}
		else
		{
			$view_folder = strtr(
				rtrim($view_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(APPPATH.$view_folder.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.strtr(
			trim($view_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('VIEWPATH', $view_folder.DIRECTORY_SEPARATOR);

/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 */
require_once BASEPATH.'core/CodeIgniter.php';
