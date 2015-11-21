-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2015 a las 14:07:02
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `roomb_users`
--
CREATE DATABASE IF NOT EXISTS `roomb_users` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `roomb_users`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amigo`
--

CREATE TABLE IF NOT EXISTS `amigo` (
  `id_user_1` int(11) DEFAULT NULL,
  `id_user_2` int(11) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  KEY `id_user_1` (`id_user_1`,`id_user_2`,`id_tipo`),
  KEY `id_tipo` (`id_tipo`),
  KEY `id_user_2` (`id_user_2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuarto`
--

CREATE TABLE IF NOT EXISTS `cuarto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `fondo` varchar(40) NOT NULL,
  `valoracion_visitas` int(11) NOT NULL,
  `alto` int(11) NOT NULL,
  `largo` int(11) NOT NULL,
  `ancho` int(11) NOT NULL,
  `luces` int(1) NOT NULL,
  `color_luces` int(2) NOT NULL,
  `color` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cuarto`
--

INSERT INTO `cuarto` (`id`, `id_user`, `fondo`, `valoracion_visitas`, `alto`, `largo`, `ancho`, `luces`, `color_luces`, `color`) VALUES
(1, 1, '', 0, 20, 20, 20, 20, 20, '20'),
(2, 2, '', 2112, 1212, 2121, 212121, 21, 12, '12'),
(3, 30, '', 123, 123, 123, 123, 123, 123, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia_objetos`
--

CREATE TABLE IF NOT EXISTS `familia_objetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `familia_objetos`
--

INSERT INTO `familia_objetos` (`id`, `nombre`) VALUES
(1, 'camas'),
(2, 'armarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `foto_perfil` varchar(100) NOT NULL,
  `miniatura_perfil` varchar(100) NOT NULL,
  `directorio` varchar(100) NOT NULL,
  `imagen_cuarto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto`
--

CREATE TABLE IF NOT EXISTS `objeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cuarto` int(11) DEFAULT NULL,
  `id_tipo_objeto` int(11) DEFAULT NULL,
  `ruta` varchar(100) NOT NULL,
  `z-index` int(10) NOT NULL,
  `alto` varchar(6) DEFAULT NULL,
  `ancho` varchar(6) DEFAULT NULL,
  `left` int(5) DEFAULT NULL,
  `top` int(5) DEFAULT NULL,
  `new` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo_objeto` (`id_tipo_objeto`),
  KEY `id_cuarto` (`id_cuarto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `objeto`
--

INSERT INTO `objeto` (`id`, `id_cuarto`, `id_tipo_objeto`, `ruta`, `z-index`, `alto`, `ancho`, `left`, `top`, `new`) VALUES
(22, 3, 2, 'objetos/muebles/armario.png', 1, '281px', '166px', 675, 147, 0),
(23, 3, 2, 'objetos/muebles/cama-1.png', 0, '206px', '436px', 238, 244, 0),
(24, 3, 2, 'objetos/electronica/televisores/radio_sony.png', 0, '170px', '90px', 883, 293, 0),
(25, 3, 2, 'objetos/electronica/televisores/tele_sony1.png', 0, '156px', '211px', 19, 109, 0),
(34, 1, 2, 'objetos/muebles/armario_full.png', 0, '245px', '407px', 322, 150, 0),
(36, 1, 2, 'objetos/electronica/televisores/tele_sony1.png', 0, '164px', '217px', 28, 119, 0),
(38, 1, 2, 'objetos/muebles/cama-2.png', 0, '203px', '283px', 626, 250, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_amigo`
--

CREATE TABLE IF NOT EXISTS `tipo_amigo` (
  `id` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(15) DEFAULT NULL,
  `perimso` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_objeto`
--

CREATE TABLE IF NOT EXISTS `tipo_objeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_familia` int(11) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_familia` (`id_familia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_objeto`
--

INSERT INTO `tipo_objeto` (`id`, `id_familia`, `nombre`, `marca`, `modelo`) VALUES
(1, 1, 'primera cama', 'Rosen', 'vaquita'),
(2, 2, 'armario', 'ikea', 'fiorenci');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `contrasena` varchar(30) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `sexo` tinyint(1) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `dinero` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`ID`, `nombre`, `apellidos`, `contrasena`, `mail`, `sexo`, `fecha_nac`, `fecha_registro`, `dinero`) VALUES
(1, 'Nicolás', 'Palma Silva', '123456', 'nico', 1, '1987-05-25', '2015-09-16', 99999),
(2, 'Luis', 'Guajardo', '123456', 'luchiani@gmail.com', 0, '1991-03-08', '2015-08-24', 9999999),
(29, 'lucho', 'guajardo figueroa', '123546', 'luchiani@hotmail.com', 1, '2010-05-05', '2015-09-23', 99999),
(30, 'mememe', 'rmmrmr', '123456798', 'popoo@popo.cl', 1, '2013-03-03', '2015-11-17', 99999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `pass` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `fotoB` varchar(250) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `fecha_nac` varchar(255) NOT NULL,
  `ocup` varchar(255) NOT NULL,
  `ocup_s` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `nivel` int(4) NOT NULL,
  `fecha_registro` varchar(255) NOT NULL,
  `hora_registro` varchar(255) NOT NULL,
  `IP` tinytext NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `pass`, `user`, `foto`, `fotoB`, `nombre`, `apellidos`, `fecha_nac`, `ocup`, `ocup_s`, `pais`, `region`, `sexo`, `zipcode`, `nivel`, `fecha_registro`, `hora_registro`, `IP`) VALUES
(1, '1234', 'nico', 'nicolas/new2.png', 'nicolas/new.png', 'nico', 'palma', '', '', '', '', '', 'm', '', 1, '', '', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `amigo`
--
ALTER TABLE `amigo`
  ADD CONSTRAINT `amigo_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_amigo` (`id`),
  ADD CONSTRAINT `amigo_ibfk_2` FOREIGN KEY (`id_user_1`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `amigo_ibfk_3` FOREIGN KEY (`id_user_2`) REFERENCES `user` (`ID`);

--
-- Filtros para la tabla `cuarto`
--
ALTER TABLE `cuarto`
  ADD CONSTRAINT `cuarto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`ID`);

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`ID`);

--
-- Filtros para la tabla `objeto`
--
ALTER TABLE `objeto`
  ADD CONSTRAINT `objeto_ibfk_1` FOREIGN KEY (`id_tipo_objeto`) REFERENCES `tipo_objeto` (`id`);

--
-- Filtros para la tabla `tipo_objeto`
--
ALTER TABLE `tipo_objeto`
  ADD CONSTRAINT `tipo_objeto_ibfk_1` FOREIGN KEY (`id_familia`) REFERENCES `familia_objetos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
