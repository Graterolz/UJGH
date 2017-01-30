-- usuario_info
DROP TABLE IF EXISTS `usuario_info`;

CREATE TABLE IF NOT EXISTS `usuario_info` (
	`idusu` int(10) AUTO_INCREMENT,
	`idrol` varchar(3) NOT NULL,
	`cedula` int(10) NOT NULL,
	`nombre` varchar(50) NOT NULL,
	`apellido` varchar(50) NOT NULL,
	`genero` varchar(50) NOT NULL,
	`fecha_nacimiento` date NOT NULL,
	`nacionalidad` varchar(20) NOT NULL,
	`estado_civil` varchar(15) NOT NULL,
	`direccion` varchar(50) NOT NULL,
	`telefono1` varchar(15) NOT NULL,
	`telefono2` varchar(15) NOT NULL,
	`email` varchar(50) NOT NULL,
	`user` varchar(15) NOT NULL,
	`pass` varchar(15) NOT NULL,
	`fecha_registro` date NOT NULL,
	`fecha_edicion` date NOT NULL,
	`estado_registro` int(1) NOT NULL,
	PRIMARY KEY (`idusu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario_info` (`idusu`, `idrol`, `cedula`, `nombre`, `apellido`, `genero`, `fecha_nacimiento`, `nacionalidad`, `estado_civil`, `direccion`, `telefono1`, `telefono2`, `email`, `user`, `pass`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES 
(NULL, 'ADM', '9999999', 'Admin', 'SYS', 'Masculino', NOW(), 'Venezolano/a', 'Soltero/a', 'Maracaibo', '0261-9999999', '0414-9999999', 'admin@ujghempleo.com.ve', 'admin', 'admin', NOW(), NOW(), '1'),
(NULL, 'USR', '9999999', 'Demo', 'SYS', 'Masculino', NOW(), 'Venezolano/a', 'Soltero/a', 'Maracaibo', '0261-9999999', '0414-9999999', 'demo@ujghempleo.com.ve', 'demo', 'demo', NOW(), NOW(), '1'),
(NULL, 'USR', '9999999', 'Maria', 'Perez', 'Femenino', NOW(), 'Venezolano/a', 'Soltero/a', 'San Francisco', '0261-9999999', '0414-9999999', 'maria@ujghempleo.com.ve', 'maria', 'maria', NOW(), NOW(), '1'),
(NULL, 'USR', '9999999', 'Jose', 'Hernandez', 'Masculino', NOW(), 'Venezolano/a', 'Soltero/a', 'San Francisco', '0261-9999999', '0414-9999999', 'jose@ujghempleo.com.ve', 'jose', 'jose', NOW(), NOW(), '1'),
(NULL, 'USR', '9999999', 'Pedro', 'Ortega', 'Masculino', NOW(), 'Venezolano/a', 'Soltero/a', 'San Francisco', '0261-9999999', '0414-9999999', 'pedro@ujghempleo.com.ve', 'pedro', 'pedro', NOW(), NOW(), '1');

-- usuario_academico
DROP TABLE IF EXISTS `usuario_academico`;

CREATE TABLE IF NOT EXISTS `usuario_academico` (
	`idaca` int(10) NOT NULL AUTO_INCREMENT,
	`idusu` int(10) NOT NULL,
	`titulo` varchar(50) NOT NULL,
	`nivel_estudio` varchar(50) NOT NULL,
	`institucion` varchar(50) NOT NULL,	
	`mes_inicio` varchar(15) NOT NULL,
	`anio_inicio` varchar(5) NOT NULL,
	`mes_fin` varchar(15) NOT NULL,
	`anio_fin` varchar(5) NOT NULL,
	`fecha_registro` date NOT NULL,
	`fecha_edicion` date NOT NULL,
	`estado_registro` int(1) NOT NULL,	
	PRIMARY KEY  (`idaca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario_academico` (`idaca`, `idusu`, `titulo`, `nivel_estudio`, `institucion`, `mes_inicio`, `anio_inicio`, `mes_fin`, `anio_fin`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES 
(NULL, '2', 'Bachiller en Ciencias', 'Secundario Graduado', 'Instituto de Maracaibo', 'Enero', '2005', 'Enero', '2010', NOW(), NOW(), '1'),
(NULL, '2', 'Ingeniero en Sistemas', 'Universitario Graduado', 'Instituto de Maracaibo', 'Enero', '2010', 'Enero', '2015', NOW(), NOW(), '1'),
(NULL, '3', 'Licenciada en Contaduria', 'Universitario Graduado', 'Instituto de Maracaibo', 'Enero', '2010', 'Enero', '2015', NOW(), NOW(), '1'),
(NULL, '4', 'Ingeniero Civil', 'Universitario Graduado', 'Instituto de Maracaibo', 'Enero', '2010', 'Enero', '2015', NOW(), NOW(), '1'),
(NULL, '5', 'Ingeniero en Electronica', 'Universitario Graduado', 'Instituto de Maracaibo', 'Enero', '2010', 'Enero', '2015', NOW(), NOW(), '1');

-- usuario_laboral
DROP TABLE IF EXISTS `usuario_laboral`;

CREATE TABLE IF NOT EXISTS `usuario_laboral` (
	`idlab` int(10) NOT NULL AUTO_INCREMENT,
	`idusu` int(10) NOT NULL,
	`empresa` varchar(50) NOT NULL,
	`direccion` varchar(50) NOT NULL,
	`telefono1` varchar(15) NOT NULL,
	`cargo` varchar(50) NOT NULL,
	`labores`  varchar(100) NOT NULL,
	`mes_inicio`  varchar(15) NOT NULL,
	`anio_inicio`  varchar(5) NOT NULL,
	`mes_fin` varchar(15) NOT NULL,
	`anio_fin` varchar(5) NOT NULL,
	`beneficios` varchar(100) NOT NULL,
	`salario` varchar(15) NOT NULL,
	`motivo_retiro` varchar(100) NOT NULL,
	`fecha_registro` date NOT NULL,
	`fecha_edicion` date NOT NULL,
	`estado_registro` int(1) NOT NULL,
	PRIMARY KEY  (`idlab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario_laboral` (`idlab`, `idusu`, `empresa`, `direccion`, `telefono1`, `cargo`, `labores`, `mes_inicio`, `anio_inicio`, `mes_fin`, `anio_fin`, `beneficios`, `salario`, `motivo_retiro`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES 
(NULL, '2', 'Empresa 1', 'Direccion 1', '0261-9999999', 'Cargo 1', 'Labores 1', 'Enero', '2010', 'Enero', '2015', 'Beneficio 1', '9999999', 'Motivo de retiro 1', NOW(), NOW(), '1'),
(NULL, '2', 'Empresa 2', 'Direccion 2', '0261-9999999', 'Cargo 2', 'Labores 2', 'Enero', '2010', 'Enero', '2015', 'Beneficio 2', '9999999', 'Motivo de retiro 2', NOW(), NOW(), '1'),
(NULL, '3', 'Empresa 3', 'Direccion 3', '0261-9999999', 'Cargo 3', 'Labores 3', 'Enero', '2010', 'Enero', '2015', 'Beneficio 3', '9999999', 'Motivo de retiro 3', NOW(), NOW(), '1'),
(NULL, '4', 'Empresa 4', 'Direccion 4', '0261-9999999', 'Cargo 4', 'Labores 4', 'Enero', '2010', 'Enero', '2015', 'Beneficio 4', '9999999', 'Motivo de retiro 4', NOW(), NOW(), '1'),
(NULL, '5', 'Empresa 5', 'Direccion 5', '0261-9999999', 'Cargo 5', 'Labores 5', 'Enero', '2010', 'Enero', '2015', 'Beneficio 5', '9999999', 'Motivo de retiro 5', NOW(), NOW(), '1');

-- usuario_adjunto
DROP TABLE IF EXISTS `usuario_adjunto`;

CREATE TABLE IF NOT EXISTS `usuario_adjunto` (
	`idadj` int(10) NOT NULL AUTO_INCREMENT,
	`idusu` int(10) NOT NULL,
	`titulo` varchar(50) NOT NULL,
	`url` varchar(200) NOT NULL,
	`fecha_registro` date NOT NULL,
	`fecha_edicion` date NOT NULL,
	`estado_registro` int(1) NOT NULL,	
	PRIMARY KEY (`idadj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario_adjunto` (`idadj`, `idusu`, `titulo`, `url`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES 
(NULL, '2', 'Titulo 1', 'images.jpg', NOW(), NOW(), '1'),
(NULL, '2', 'Titulo 2', 'images2.jpg', NOW(), NOW(), '1');

-- vacante
DROP TABLE IF EXISTS `vacante`;

CREATE TABLE IF NOT EXISTS `vacante` (
	`idvac` int(10) NOT NULL AUTO_INCREMENT,
	`titulo` varchar(50) NOT NULL,
	`descripcion` varchar(200) NOT NULL,
	`beneficios` varchar(200) NOT NULL,
	`requisitos` varchar(200) NOT NULL,
	`salario` varchar(15) NOT NULL,
	`tipo` varchar(15) NOT NULL,
	`fecha_registro` date NOT NULL,
	`fecha_edicion` date NOT NULL,
	`estado_registro` int(1) NOT NULL,
	PRIMARY KEY (`idvac`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `vacante` (`idvac`, `titulo`, `descripcion`, `beneficios`, `requisitos`, `salario`, `tipo`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES 
(NULL, 'Profesor de Matematicas', 'Se solicita Profesor de Matematicas', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Docente', NOW(), NOW(), '1'),
(NULL, 'Analista de Soporte tecnico', 'Se solicita Analista de Soporte tecnico', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Administrativo', NOW(), NOW(), '1'),
(NULL, 'Programador WEB', 'Se solicita Programador WEB', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Administrativo', NOW(), NOW(), '1'),
(NULL, 'Analista RRHH', 'Se solicita Analista RRHH', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Administrativo', NOW(), NOW(), '1'),
(NULL, 'Profesor de Logica', 'Se solicita Profesor de Logica', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Docente', NOW(), NOW(), '1'),
(NULL, 'Profesor de Programacion', 'Se solicita Profesor de Programacion', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Docente', NOW(), NOW(), '1');

-- postulacion
DROP TABLE IF EXISTS `postulacion`;

CREATE TABLE IF NOT EXISTS `postulacion` (
	`idpos` int(10) NOT NULL AUTO_INCREMENT,
	`idvac` int(10) NOT NULL,
	`idusu` int(10) NOT NULL,
	`estado` varchar(15) NOT NULL,
	`fecha_registro` date NOT NULL,
	`fecha_edicion` date NOT NULL,
	`estado_registro` int(1) NOT NULL,	
	PRIMARY KEY (`idpos`)	
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `postulacion` (`idpos`, `idvac`, `idusu`, `estado`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES 
(NULL, '1', '2', 'Enviado', NOW(), NOW(), '1'),
(NULL, '2', '2', 'Enviado', NOW(), NOW(), '1'),
(NULL, '2', '4', 'Enviado', NOW(), NOW(), '1'),
(NULL, '3', '3', 'Enviado', NOW(), NOW(), '1'),
(NULL, '4', '3', 'Enviado', NOW(), NOW(), '1'),
(NULL, '1', '5', 'Enviado', NOW(), NOW(), '1'),
(NULL, '2', '3', 'Enviado', NOW(), NOW(), '1');