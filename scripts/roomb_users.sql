-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-10-2015 a las 00:20:06
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `roomb_users`
--

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
  `contador_visitas` int(11) NOT NULL,
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

INSERT INTO `cuarto` (`id`, `id_user`, `contador_visitas`, `alto`, `largo`, `ancho`, `luces`, `color_luces`, `color`) VALUES
(1, 1, 0, 20, 20, 20, 20, 20, '20'),
(2, 2, 2112, 1212, 2121, 212121, 21, 12, '12');

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
  `alto` int(4) DEFAULT NULL,
  `ancho` int(4) NOT NULL,
  `left` int(5) DEFAULT NULL,
  `top` int(5) DEFAULT NULL,
  `new` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo_objeto` (`id_tipo_objeto`),
  KEY `id_cuarto` (`id_cuarto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Volcado de datos para la tabla `objeto`
--

INSERT INTO `objeto` (`id`, `id_cuarto`, `id_tipo_objeto`, `ruta`, `z-index`, `alto`, `ancho`, `left`, `top`, `new`) VALUES
(115, 1, 2, 'objetos/armario.png', 0, 0, 0, -247, 195, 0),
(116, 1, 2, 'objetos/armario.png', 0, 0, 0, 316, 82, 0),
(117, 1, 2, 'objetos/cama-1.png', 0, 0, 0, -15, 13, 0),
(118, 1, 2, 'objetos/armario.png', 0, 0, 0, 5, -351, 0),
(119, 2, 2, 'objetos/armario.png', 0, 0, 0, -386, 331, 0),
(120, 2, 2, 'objetos/cama-1.png', 0, 0, 0, -165, 154, 0),
(121, 2, 2, 'objetos/armario.png', 0, 0, 0, 34, -49, 0),
(122, 2, 2, 'objetos/cama-1.png', 0, 0, 0, 239, -118, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`ID`, `nombre`, `apellidos`, `contrasena`, `mail`, `sexo`, `fecha_nac`, `fecha_registro`, `dinero`) VALUES
(1, 'Nicolás', 'Palma Silva', '123456', 'nico', 1, '1987-05-25', '2015-09-16', 99999),
(2, 'Luis', 'Guajardo', '123456', 'luis', 0, '1991-03-08', '2015-08-24', 9999999),
(29, 'lucho', 'guajardo figueroa', '123546', 'luchiani@hotmail.com', 1, '2010-05-05', '2015-09-23', 99999);

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
