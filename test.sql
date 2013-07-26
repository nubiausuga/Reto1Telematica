-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-07-2013 a las 05:10:52
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `ruta` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`ruta`, `descripcion`, `id`) VALUES
('imagenes/534Bear.bmp', 'Animales', 1),
('imagenes/d68Rose.bmp', 'Paisajes', 2),
('imagenes/abdLeaf.bmp', 'Paisajes', 3),
('imagenes/512David.bmp', 'Personas', 4),
('imagenes/e93Owl.bmp', 'Abstractos', 5),
('imagenes/e29Biologia-Animal-el-ojo-de-los-gatos.jpg', 'Animales', 6),
('imagenes/4a0images.jpg', 'Abstractos', 7),
('imagenes/37dSun.bmp', 'cosas', 8),
('imagenes/6adMoon.bmp', 'Casas', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `login` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `email`, `login`, `password`) VALUES
(1, 'Mario', 'mari0@gmail.com', 0, 'mario'),
(2, '', '', 0, ''),
(3, '', '', 0, ''),
(4, '', '', 0, ''),
(5, 'Nubia', 'nubiausuga@gmail.com', 0, 'nubia'),
(6, 'Jesus', 'jesus', 123, '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
