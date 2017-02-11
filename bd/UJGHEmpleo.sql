-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2017 a las 19:54:38
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ujghempleo`
--
CREATE DATABASE IF NOT EXISTS `ujghempleo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ujghempleo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacion`
--

CREATE TABLE `postulacion` (
  `idpos` int(10) NOT NULL,
  `idvac` int(10) NOT NULL,
  `idusu` int(10) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_edicion` date NOT NULL,
  `estado_registro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postulacion`
--

INSERT INTO `postulacion` (`idpos`, `idvac`, `idusu`, `estado`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES
(1, 1, 2, 'Enviado', '2017-01-30', '2017-01-30', 1),
(2, 2, 2, 'Enviado', '2017-01-30', '2017-01-30', 1),
(3, 2, 4, 'Enviado', '2017-01-30', '2017-01-30', 1),
(4, 3, 3, 'Enviado', '2017-01-30', '2017-01-30', 1),
(5, 4, 3, 'Enviado', '2017-01-30', '2017-01-30', 1),
(6, 1, 5, 'Enviado', '2017-01-30', '2017-01-30', 1),
(7, 2, 3, 'Enviado', '2017-01-30', '2017-01-30', 1),
(8, 3, 2, 'Enviado', '2017-01-31', '2017-01-31', 1),
(9, 4, 2, 'Enviado', '2017-01-31', '2017-01-31', 1),
(10, 5, 2, 'Enviado', '2017-01-31', '2017-01-31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_academico`
--

CREATE TABLE `usuario_academico` (
  `idaca` int(10) NOT NULL,
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
  `estado_registro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_academico`
--

INSERT INTO `usuario_academico` (`idaca`, `idusu`, `titulo`, `nivel_estudio`, `institucion`, `mes_inicio`, `anio_inicio`, `mes_fin`, `anio_fin`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES
(1, 2, 'Bachiller en Ciencias', 'Secundario Graduado', 'Instituto de Maracaibo', 'Enero', '2005', 'Enero', '2010', '2017-01-30', '2017-01-30', 1),
(2, 2, 'Ingeniero en Sistemas', 'Universitario Graduado', 'Instituto de Maracaibo', 'Enero', '2010', 'Enero', '2015', '2017-01-30', '2017-01-30', 1),
(3, 3, 'Licenciada en Contaduria', 'Universitario Graduado', 'Instituto de Maracaibo', 'Enero', '2010', 'Enero', '2015', '2017-01-30', '2017-01-30', 1),
(4, 4, 'Ingeniero Civil', 'Universitario Graduado', 'Instituto de Maracaibo', 'Enero', '2010', 'Enero', '2015', '2017-01-30', '2017-01-30', 1),
(5, 5, 'Ingeniero en Electronica', 'Universitario Graduado', 'Instituto de Maracaibo', 'Enero', '2010', 'Enero', '2015', '2017-01-30', '2017-01-30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_adjunto`
--

CREATE TABLE `usuario_adjunto` (
  `idadj` int(10) NOT NULL,
  `idusu` int(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `url` varchar(200) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_edicion` date NOT NULL,
  `estado_registro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_adjunto`
--

INSERT INTO `usuario_adjunto` (`idadj`, `idusu`, `titulo`, `url`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES
(1, 2, 'Titulo 1', 'images.jpg', '2017-01-30', '2017-01-30', 1),
(2, 2, 'Titulo 2', 'images2.jpg', '2017-01-30', '2017-01-30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_info`
--

CREATE TABLE `usuario_info` (
  `idusu` int(10) NOT NULL,
  `idrol` varchar(3) NOT NULL,
  `cedula` int(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `genero` varchar(15) NOT NULL,
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
  `estado_registro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_info`
--

INSERT INTO `usuario_info` (`idusu`, `idrol`, `cedula`, `nombre`, `apellido`, `genero`, `fecha_nacimiento`, `nacionalidad`, `estado_civil`, `direccion`, `telefono1`, `telefono2`, `email`, `user`, `pass`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES
(1, 'ADM', 9999999, 'Admin', 'SYS', 'Masculino', '2017-01-30', 'Venezolano/a', 'Soltero/a', 'Maracaibo', '0261-9999999', '0414-9999999', 'admin@ujghempleo.com.ve', 'admin', 'admin', '2017-01-30', '2017-01-30', 1),
(2, 'USR', 9999999, 'Demo', 'SYS', 'Masculino', '2017-01-30', 'Venezolano/a', 'Soltero/a', 'Maracaibo', '0261-9999999', '0414-9999999', 'demo@ujghempleo.com.ve', 'demo', 'demo', '2017-01-30', '2017-01-30', 1),
(3, 'USR', 9999999, 'Maria', 'Perez', 'Femenino', '2017-01-30', 'Venezolano/a', 'Soltero/a', 'San Francisco', '0261-9999999', '0414-9999999', 'maria@ujghempleo.com.ve', 'maria', 'maria', '2017-01-30', '2017-01-30', 1),
(4, 'USR', 9999999, 'Jose', 'Hernandez', 'Masculino', '2017-01-30', 'Venezolano/a', 'Soltero/a', 'San Francisco', '0261-9999999', '0414-9999999', 'jose@ujghempleo.com.ve', 'jose', 'jose', '2017-01-30', '2017-01-30', 1),
(5, 'USR', 9999999, 'Pedro', 'Ortega', 'Masculino', '2017-01-30', 'Venezolano/a', 'Soltero/a', 'San Francisco', '0261-9999999', '0414-9999999', 'pedro@ujghempleo.com.ve', 'pedro', 'pedro', '2017-01-30', '2017-01-30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_laboral`
--

CREATE TABLE `usuario_laboral` (
  `idlab` int(10) NOT NULL,
  `idusu` int(10) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono1` varchar(15) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `labores` varchar(100) NOT NULL,
  `mes_inicio` varchar(15) NOT NULL,
  `anio_inicio` varchar(5) NOT NULL,
  `mes_fin` varchar(15) NOT NULL,
  `anio_fin` varchar(5) NOT NULL,
  `beneficios` varchar(100) NOT NULL,
  `salario` varchar(15) NOT NULL,
  `motivo_retiro` varchar(100) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_edicion` date NOT NULL,
  `estado_registro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_laboral`
--

INSERT INTO `usuario_laboral` (`idlab`, `idusu`, `empresa`, `direccion`, `telefono1`, `cargo`, `labores`, `mes_inicio`, `anio_inicio`, `mes_fin`, `anio_fin`, `beneficios`, `salario`, `motivo_retiro`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES
(1, 2, 'Empresa 1', 'Direccion 1', '0261-9999999', 'Cargo 1', 'Labores 1', 'Enero', '2010', 'Enero', '2015', 'Beneficio 1', '9999999', 'Motivo de retiro 1', '2017-01-30', '2017-01-30', 1),
(2, 2, 'Empresa 2', 'Direccion 2', '0261-9999999', 'Cargo 2', 'Labores 2', 'Enero', '2010', 'Enero', '2015', 'Beneficio 2', '9999999', 'Motivo de retiro 2', '2017-01-30', '2017-01-30', 1),
(3, 3, 'Empresa 3', 'Direccion 3', '0261-9999999', 'Cargo 3', 'Labores 3', 'Enero', '2010', 'Enero', '2015', 'Beneficio 3', '9999999', 'Motivo de retiro 3', '2017-01-30', '2017-01-30', 1),
(4, 4, 'Empresa 4', 'Direccion 4', '0261-9999999', 'Cargo 4', 'Labores 4', 'Enero', '2010', 'Enero', '2015', 'Beneficio 4', '9999999', 'Motivo de retiro 4', '2017-01-30', '2017-01-30', 1),
(5, 5, 'Empresa 5', 'Direccion 5', '0261-9999999', 'Cargo 5', 'Labores 5', 'Enero', '2010', 'Enero', '2015', 'Beneficio 5', '9999999', 'Motivo de retiro 5', '2017-01-30', '2017-01-30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `idvac` int(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `beneficios` varchar(200) NOT NULL,
  `requisitos` varchar(200) NOT NULL,
  `salario` varchar(15) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_edicion` date NOT NULL,
  `estado_registro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vacante`
--

INSERT INTO `vacante` (`idvac`, `titulo`, `descripcion`, `beneficios`, `requisitos`, `salario`, `tipo`, `fecha_registro`, `fecha_edicion`, `estado_registro`) VALUES
(1, 'Profesor de Matematicas', 'Se solicita Profesor de Matematicas', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Docente', '2017-01-30', '2017-01-31', 1),
(2, 'Analista de Soporte tecnico', 'Se solicita Analista de Soporte tecnico', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Administrativo', '2017-01-30', '2017-01-30', 1),
(3, 'Programador WEB', 'Se solicita Programador WEB', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Administrativo', '2017-01-30', '2017-01-30', 1),
(4, 'Analista RRHH', 'Se solicita Analista RRHH', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Administrativo', '2017-01-30', '2017-01-30', 1),
(5, 'Profesor de Logica', 'Se solicita Profesor de Logica', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Docente', '2017-01-30', '2017-01-30', 1),
(6, 'Profesor de Programacion', 'Se solicita Profesor de Programacion', 'Dentro de los beneficios que ofrecemos estan: Seguro H.C.M, L.P.H;Fideicomiso, Utilidades 1 Mes, Aumento Salarial 2/Año, Vacac. Colectivas, Bono Vac. al Año y Cesta Ticket BONUS.', 'Educación Mínima: Universidad, Años de experiencia: 1, Disponibilidad de Viajar: No, Disponibilidad de Cambio de Residencia: No.', '9999999', 'Docente', '2017-01-30', '2017-01-30', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  ADD PRIMARY KEY (`idpos`);

--
-- Indices de la tabla `usuario_academico`
--
ALTER TABLE `usuario_academico`
  ADD PRIMARY KEY (`idaca`);

--
-- Indices de la tabla `usuario_adjunto`
--
ALTER TABLE `usuario_adjunto`
  ADD PRIMARY KEY (`idadj`);

--
-- Indices de la tabla `usuario_info`
--
ALTER TABLE `usuario_info`
  ADD PRIMARY KEY (`idusu`);

--
-- Indices de la tabla `usuario_laboral`
--
ALTER TABLE `usuario_laboral`
  ADD PRIMARY KEY (`idlab`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`idvac`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  MODIFY `idpos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario_academico`
--
ALTER TABLE `usuario_academico`
  MODIFY `idaca` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario_adjunto`
--
ALTER TABLE `usuario_adjunto`
  MODIFY `idadj` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario_info`
--
ALTER TABLE `usuario_info`
  MODIFY `idusu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario_laboral`
--
ALTER TABLE `usuario_laboral`
  MODIFY `idlab` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `vacante`
--
ALTER TABLE `vacante`
  MODIFY `idvac` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
