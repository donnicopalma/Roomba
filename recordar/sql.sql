-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `ID` int(9) unsigned NOT NULL auto_increment,
  `username` varchar(180) default NULL,
  `password` varchar(180) default NULL,
  `email` varchar(180) default NULL,
  `id_extreme` varchar(180) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 'marcofbb', 'pass', 'marco.fbb@gmail.com', 'nada');