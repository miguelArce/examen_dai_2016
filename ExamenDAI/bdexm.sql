-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2016 at 10:33 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdexm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ejecutivo`
--

CREATE TABLE IF NOT EXISTS `ejecutivo` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidoPaterno` varchar(15) NOT NULL,
  `apellidoMaterno` varchar(15) NOT NULL,
  `contraseña` varchar(10) NOT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postulante`
--

CREATE TABLE IF NOT EXISTS `postulante` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidoPaterno` varchar(15) NOT NULL,
  `apellidoMaterno` varchar(15) NOT NULL,
  `contraseña` varchar(10) NOT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `solicitud`
--

CREATE TABLE IF NOT EXISTS `solicitud` (
  `idSolicitud` int(11) NOT NULL,
  `rutPostulante` varchar(10) NOT NULL,
  `modalidad` varchar(15) NOT NULL,
  `curso` varchar(15) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `Estado` varchar(10) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `comuna` varchar(15) NOT NULL,
  `educacion` varchar(30) NOT NULL,
  `experiencia` varchar(30) NOT NULL,
  PRIMARY KEY (`idSolicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


/*CONSTRAINTS FOREIGN KEY 
ALTER TABLE ADD CONSTRAINT FK_Historial_ejecutivo FOREIGN KEY (rutEjecutivo) REFERENCES  ejecutivo(rut);
*/