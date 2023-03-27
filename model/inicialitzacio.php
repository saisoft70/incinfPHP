<?php
require ("connexio.php");
$statement = $connexio->prepare("
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accions`
--

CREATE TABLE IF NOT EXISTS `accions` (
  `accioID` int(11) NOT NULL AUTO_INCREMENT,
  `codiIncidencia` int(11) NOT NULL,
  `accio` varchar(65) NOT NULL,
  PRIMARY KEY (`accioID`),
  KEY `accio1aN` (`codiIncidencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencies`
--

CREATE TABLE IF NOT EXISTS `incidencies` (
  `codiIncidencia` int(11) NOT NULL AUTO_INCREMENT,
  `estatIncidencia` tinyint(1) DEFAULT NULL,
  `detallsProblemaIncidencia` varchar(500) NOT NULL,
  `codiRecursIncidencia` int(11) NOT NULL,
  `codiTecnicIncidencia` int(11) NOT NULL,
  `codiUsuariIncidencia` int(11) NOT NULL,
  `codiTipusIncidencies` int(11) NOT NULL,
  PRIMARY KEY (`codiIncidencia`),
  KEY `codiRecursIncidencia` (`codiRecursIncidencia`),
  KEY `codiTecnicIncidencia` (`codiTecnicIncidencia`),
  KEY `codiUsuariIncidencia` (`codiUsuariIncidencia`),
  KEY `incidencies_ibfk_4` (`codiTipusIncidencies`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `incidencies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursinformatic`
--

DROP TABLE IF EXISTS `recursinformatic`;
CREATE TABLE IF NOT EXISTS `recursinformatic` (
  `codiRecurs` int(11) NOT NULL AUTO_INCREMENT,
  `recursCodiTipusRecurs` int(11) NOT NULL,
  `nomRecurs` varchar(100) NOT NULL,
  PRIMARY KEY (`codiRecurs`),
  KEY `recursCodiTipusRecurs` (`recursCodiTipusRecurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `recursinformatic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipusincidenciesinfromatiques`
--

CREATE TABLE IF NOT EXISTS `tipusincidenciesinfromatiques` (
  `codiTipusIncidencies` int(11) NOT NULL AUTO_INCREMENT,
  `descripcioIncidencia` varchar(500) NOT NULL,
  PRIMARY KEY (`codiTipusIncidencies`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `tipusincidenciesinfromatiques`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipusrecursinformatic`
--

CREATE TABLE IF NOT EXISTS `tipusrecursinformatic` (
  `codiTipusRecurs` int(11) NOT NULL AUTO_INCREMENT,
  `nomTipusRecurs` varchar(50) NOT NULL,
  PRIMARY KEY (`codiTipusRecurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `tipusrecursinformatic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE IF NOT EXISTS `usuaris` (
  `codiUsuari` int(11) NOT NULL AUTO_INCREMENT,
  `nomUsuari` varchar(50) DEFAULT NULL,
  `contrassenyaUsuari` varchar(100) NOT NULL,
  `nomLlargUsuari` varchar(100) NOT NULL,
  `cognomsUsuari` varchar(100) NOT NULL,
  `mailUsuari` varchar(100) NOT NULL,
  `telefonUsuari` varchar(15) NOT NULL,
  `tipusPrivilegis` int(11) NOT NULL,
  PRIMARY KEY (`codiUsuari`),
  UNIQUE KEY `nomUsuari` (`nomUsuari`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`codiUsuari`, `nomUsuari`, `contrassenyaUsuari`, `nomLlargUsuari`, `cognomsUsuari`, `mailUsuari`, `telefonUsuari`, `tipusPrivilegis`) VALUES
(1, 'admin', 'admin', 'Administrador Alex ', 'Blàzquez Ruiz', 'administrador@incinf.com', '6626216345', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accions`
--
ALTER TABLE `accions`
  ADD CONSTRAINT `accio1aN` FOREIGN KEY (`codiIncidencia`) REFERENCES `incidencies` (`codiIncidencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `incidencies`
--
ALTER TABLE `incidencies`
  ADD CONSTRAINT `incidencies_ibfk_1` FOREIGN KEY (`codiRecursIncidencia`) REFERENCES `recursinformatic` (`codiRecurs`),
  ADD CONSTRAINT `incidencies_ibfk_2` FOREIGN KEY (`codiTecnicIncidencia`) REFERENCES `usuaris` (`codiUsuari`),
  ADD CONSTRAINT `incidencies_ibfk_3` FOREIGN KEY (`codiUsuariIncidencia`) REFERENCES `usuaris` (`codiUsuari`),
  ADD CONSTRAINT `incidencies_ibfk_4` FOREIGN KEY (`codiTipusIncidencies`) REFERENCES `tipusincidenciesinfromatiques` (`codiTipusIncidencies`);

--
-- Filtros para la tabla `recursinformatic`
--
ALTER TABLE `recursinformatic`
  ADD CONSTRAINT `recursinformatic_ibfk_1` FOREIGN KEY (`recursCodiTipusRecurs`) REFERENCES `tipusrecursinformatic` (`codiTipusRecurs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
");
$statement -> execute();
echo "Executat!";

?>