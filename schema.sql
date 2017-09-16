-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-09-2017 a las 11:32:49
-- Versión del servidor: 5.5.54-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `asistencia`
--
CREATE DATABASE IF NOT EXISTS `asistencia` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `asistencia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`cedula`, `nombre`, `apellido`, `foto`) VALUES
(19115211, 'Petra', 'Larez', '910246.jpg'),
(19115217, 'Santiago', 'Urdaneta', '478324.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcados`
--

DROP TABLE IF EXISTS `marcados`;
CREATE TABLE IF NOT EXISTS `marcados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(11) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=73 ;

--
-- Volcado de datos para la tabla `marcados`
--

INSERT INTO `marcados` (`id`, `cedula`, `fecha_hora`, `tipo`, `fecha`) VALUES
(49, 19115217, '2017-06-18 12:35:23', 'Entrada', '2017-06-18'),
(50, 19115211, '2017-06-18 12:48:45', 'Entrada', '2017-06-18'),
(51, 19115217, '2017-06-18 12:48:58', 'Salida', '2017-06-18'),
(52, 19115211, '2017-06-18 14:39:57', 'Salida', '2017-06-18'),
(53, 19115217, '2017-06-18 15:15:24', 'Entrada', '2017-06-18'),
(54, 19115217, '2017-06-18 15:19:12', 'Salida', '2017-06-18'),
(55, 19115217, '2017-06-18 15:19:39', 'Entrada', '2017-06-18'),
(56, 19115211, '2017-06-18 15:19:45', 'Entrada', '2017-06-18'),
(57, 19115211, '2017-06-18 15:24:25', 'Salida', '2017-06-18'),
(58, 19115217, '2017-06-18 15:25:31', 'Salida', '2017-06-18'),
(59, 19115211, '2017-06-18 15:27:13', 'Entrada', '2017-06-18'),
(60, 19115217, '2017-06-18 15:27:27', 'Entrada', '2017-06-18'),
(61, 19115211, '2017-06-18 15:27:57', 'Salida', '2017-06-18'),
(62, 19115217, '2017-06-18 15:28:01', 'Salida', '2017-06-18'),
(63, 19115217, '2017-06-18 15:29:17', 'Entrada', '2017-06-18'),
(64, 19115211, '2017-06-18 15:29:21', 'Entrada', '2017-06-18'),
(65, 19115217, '2017-06-18 15:34:08', 'Salida', '2017-06-18'),
(66, 19115211, '2017-06-18 15:34:12', 'Salida', '2017-06-18'),
(67, 19115217, '2017-06-18 15:35:50', 'Entrada', '2017-06-18'),
(68, 19115211, '2017-06-18 15:35:54', 'Entrada', '2017-06-18'),
(69, 19115211, '2017-06-18 15:36:02', 'Salida', '2017-06-18'),
(70, 19115217, '2017-09-16 14:57:37', 'Salida', '2017-09-16'),
(71, 19115217, '2017-09-16 14:57:44', 'Entrada', '2017-09-16'),
(72, 19115217, '2017-09-16 15:02:56', 'Salida', '2017-09-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_usuario`, `clave`) VALUES
(2, 'admin', '6e505bb95242de2e375c1c49bafdb1cf938d7028');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
