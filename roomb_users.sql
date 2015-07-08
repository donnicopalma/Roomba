-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2015 at 08:04 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `roomb_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `familia_objetos`
--

CREATE TABLE IF NOT EXISTS `familia_objetos` (
`id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
`id_user` int(11) NOT NULL,
  `foto_perfil` varchar(100) NOT NULL,
  `miniatura_perfil` varchar(100) NOT NULL,
  `directorio` varchar(100) NOT NULL,
  `imagen_cuarto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `objeto`
--

CREATE TABLE IF NOT EXISTS `objeto` (
`id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_tipo_objeto` int(11) DEFAULT NULL,
  `tamano` int(4) DEFAULT NULL,
  `posicion_z` int(5) DEFAULT NULL,
  `posicion_x` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_objeto`
--

CREATE TABLE IF NOT EXISTS `tipo_objeto` (
`id` int(11) NOT NULL,
  `id_familia` int(11) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `modelo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`ID` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `contrasena` varchar(30) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `sexo` tinyint(1) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `dinero` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `nombre`, `apellidos`, `contrasena`, `mail`, `sexo`, `fecha_nac`, `fecha_registro`, `dinero`) VALUES
(1, 'Nicolás', 'Palma Silva', '1234', 'nico.palma@gmail.com', 0, '1987-05-25', '2015-07-07', 99999);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(4) NOT NULL,
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
  `IP` tinytext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `pass`, `user`, `foto`, `fotoB`, `nombre`, `apellidos`, `fecha_nac`, `ocup`, `ocup_s`, `pais`, `region`, `sexo`, `zipcode`, `nivel`, `fecha_registro`, `hora_registro`, `IP`) VALUES
(1, '1234', 'nico', 'nicolas/new2.png', 'nicolas/new.png', 'nico', 'palma', '', '', '', '', '', 'm', '', 1, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `familia_objetos`
--
ALTER TABLE `familia_objetos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagenes`
--
ALTER TABLE `imagenes`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `objeto`
--
ALTER TABLE `objeto`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_tipo_objeto` (`id_tipo_objeto`), ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `tipo_objeto`
--
ALTER TABLE `tipo_objeto`
 ADD PRIMARY KEY (`id`), ADD KEY `id_familia` (`id_familia`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `familia_objetos`
--
ALTER TABLE `familia_objetos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imagenes`
--
ALTER TABLE `imagenes`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `objeto`
--
ALTER TABLE `objeto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_objeto`
--
ALTER TABLE `tipo_objeto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `imagenes`
--
ALTER TABLE `imagenes`
ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`ID`);

--
-- Constraints for table `objeto`
--
ALTER TABLE `objeto`
ADD CONSTRAINT `objeto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`ID`),
ADD CONSTRAINT `objeto_ibfk_2` FOREIGN KEY (`id_tipo_objeto`) REFERENCES `tipo_objeto` (`id`);

--
-- Constraints for table `tipo_objeto`
--
ALTER TABLE `tipo_objeto`
ADD CONSTRAINT `tipo_objeto_ibfk_1` FOREIGN KEY (`id_familia`) REFERENCES `familia_objetos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
