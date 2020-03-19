-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-03-2020 a las 21:00:14
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

DROP TABLE IF EXISTS `datos`;
CREATE TABLE IF NOT EXISTS `datos` (
  `Nombre` varchar(50) NOT NULL,
  `Fecha` varchar(30) NOT NULL,
  `Carrera` varchar(30) NOT NULL,
  `Matricula` varchar(30) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`Nombre`, `Fecha`, `Carrera`, `Matricula`, `Correo`, `id`) VALUES
('jesus alejandro zarazua infante', '15 de mayo del 2001', 'ITI', '1930444', 'jesus-alejandr@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos2`
--

DROP TABLE IF EXISTS `datos2`;
CREATE TABLE IF NOT EXISTS `datos2` (
  `Nombre` varchar(30) NOT NULL,
  `Materia` varchar(20) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Turno` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos2`
--

INSERT INTO `datos2` (`Nombre`, `Materia`, `Correo`, `Turno`, `id`, `Fecha`) VALUES
('jesus alejandro', 'TI', 'Jesus_ha@hotmail.com', 'Matutino', 1, '17/03/2020');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
