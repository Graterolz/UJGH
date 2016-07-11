-- usuario_info
DROP TABLE `usuario_info`;

CREATE TABLE `usuario_info` (
	`idusu` int(10) AUTO_INCREMENT,
	`idrol` varchar(3) NOT NULL,
	`email` varchar(50) NOT NULL,
	`contrasena` varchar(50) NOT NULL,
	`cedula` int(15) NOT NULL,
	`nombre` varchar(50) NOT NULL,
	`apellido` varchar(50) NOT NULL,  
	`fechaNacimiento` date NOT NULL,
	`nacionalidad` varchar(50) NOT NULL,
	`estado` varchar(50) NOT NULL,
	`ciudad` varchar(50) NOT NULL,
	`direccion` varchar(50) NOT NULL,
	`telefonoCelular` varchar(50) NOT NULL,
	`telefonoFijo` varchar(50) NOT NULL,
	`estadoCivil` varchar(50) NOT NULL,
	`sexo` varchar(50) NOT NULL,
	PRIMARY KEY (`idusu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario_info`
(`idusu`, `idrol`, `email`, `contrasena`, `cedula`, `nombre`, `apellido`, `fechaNacimiento`, `nacionalidad`, `estado`, `ciudad`, `direccion`, `telefonoCelular`, `telefonoFijo`, `estadoCivil`, `sexo`) VALUES 
(NULL, 'AMD', 'admin', 'admin', '123456', 'Administrador', 'Sistema', '2016-01-01', 'Venezolano', 'Zulia', 'Maracaibo', 'Maracaibo', '0261-123456', '0414-123456', 'Soltero', 'Masculino'),
(NULL, 'USR', 'demo', 'demo', '123456', 'Jose', 'Hernandez', '2016-01-01', 'Venezolano', 'Zulia', 'Maracaibo', 'Bella vista', '0261-123456', '0414-123456', 'Soltero', 'Masculino');

-- usuario_academico
DROP TABLE `usuario_academico`;

CREATE TABLE `usuario_academico` (
	`idaca` int(10) NOT NULL AUTO_INCREMENT,
	`idusu` int(10) NOT NULL,
	`titulo` varchar(100) NOT NULL,
	`nivelEstudio` varchar(100) NOT NULL,
	`institucion` varchar(100) NOT NULL,
	`mesInicio` varchar(15) NOT NULL,
	`anioInicio` varchar(15) NOT NULL,
	`mesFin` varchar(15) NOT NULL,
	`anioFin` varchar(15) NOT NULL,
	PRIMARY KEY  (`idaca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario_academico` 
(`idaca`, `idusu`, `titulo`, `nivelEstudio`, `institucion`, `mesInicio`, `anioInicio`, `mesFin`, `anioFin`) VALUES 
(NULL, '2', 'Tecnico Medio Informatica', 'Secundario Graduado', 'ETCR. Romulos Gallegos', 'Enero', '2005', 'Septiembre', '2010'),
(NULL, '2', 'Ingeniero en Sistemas', 'Universitario Graduado', 'Univ. Dr. Jose Gregorio Hernandez', 'Enero', '2011', 'Diciembre', '2015');

-- usuario_laboral
DROP TABLE `usuario_laboral`;

CREATE TABLE `usuario_laboral` (
	`idlab` int(10) NOT NULL AUTO_INCREMENT,
	`idusu` int(10) NOT NULL,
	`empresa` varchar(100) NOT NULL,
	`direccion` varchar(100) NOT NULL,
	`telefono` varchar(50) NOT NULL,
	`cargo` varchar(50) NOT NULL,
	`labores` varchar(1000) NOT NULL,		
	`mesInicio` varchar(15) NOT NULL,
	`anioInicio` varchar(15) NOT NULL,
	`mesFin` varchar(15) NOT NULL,
	`anioFin` varchar(15) NOT NULL,	
	`beneficios` varchar(1000) NOT NULL,
	`salario` float NOT NULL,
	`motivoRetiro` varchar(1000) NOT NULL,
	PRIMARY KEY  (`idlab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario_laboral`
(`idlab`, `idusu`, `empresa`, `direccion`, `telefono`, `cargo`, `labores`, `mesInicio`, `anioInicio`, `mesFin`, `anioFin`, `beneficios`, `salario`, `motivoRetiro`) VALUES 
(NULL, '2', 'Empresa 1', 'Direccion 1', '0261-123456', 'Programador web', 'Labores 1', 'Enero', '2005', 'Septiembre', '2010', 'Beneficio 1', '9999', 'Motivo 1'),
(NULL, '2', 'Empresa 2', 'Direccion 2', '0261-123456', 'Administrador de bases de datos', 'Labores 2', 'Enero', '2011', 'Diciembre', '2015', 'Beneficio 2', '9999', 'Motivo 2');

-- app_vacante
DROP TABLE `app_vacante`;

CREATE TABLE `app_vacante` (
	`idvac` int(10) NOT NULL AUTO_INCREMENT,
	`titulo` varchar(100) NOT NULL,
	`descripcion` varchar(100) NOT NULL,
	`beneficios` varchar(200) NOT NULL,
	`requisitos` varchar(100) NOT NULL,
	`salario` float NOT NULL,
	`fechaPublicacion` date NOT NULL,
	`tipo` varchar(100) NOT NULL, 
	PRIMARY KEY (`idvac`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `app_vacante` 
(`idvac`, `titulo`, `descripcion`, `beneficios`, `requisitos`, `salario`, `fechaPublicacion`, `tipo`) VALUES 
(NULL, 'Profesor de Matematicas', 'Se solicita Profesor de Matematicas', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Requisitos 1', '9999', '2016-01-01', 'Docente'),
(NULL, 'Analista de Soporte tecnico', 'Se solicita Analista de Soporte tecnico', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Requisitos 2', '9999', '2016-01-01', 'Administrativo'),
(NULL, 'Programador WEB', 'Se solicita Programador WEB', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Requisitos 3', '9999', '2016-01-01', 'Administrativo'),
(NULL, 'Analista RRHH', 'Se solicita Analista RRHH', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Requisitos 4', '9999', '2016-01-01', 'Administrativo'),
(NULL, 'Profesor de Logica', 'Se solicita Profesor de Logica', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Requisitos 5', '9999', '2016-01-01', 'Docente'),
(NULL, 'Profesor de Programacion', 'Se solicita Profesor de Programacion', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Requisitos 6', '9999', '2016-01-01', 'Docente');

-- app_postulacion
DROP TABLE `app_postulacion`;

CREATE TABLE `app_postulacion` (
	`idpos` int(10) NOT NULL AUTO_INCREMENT,
	`idvac` int(10) NOT NULL,
	`idusu` int(10) NOT NULL,
	`fechaPostulacion` date NOT NULL,	
	PRIMARY KEY (`idpos`)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `app_postulacion` (`idpos`, `idvac`, `idusu`, `fechaPostulacion`) VALUES 
(NULL, '1', '2', '2016-01-01'),
(NULL, '2', '2', '2016-01-01');