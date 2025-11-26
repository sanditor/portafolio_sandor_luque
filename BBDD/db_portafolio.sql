-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------
-- Volcando estructura de base de datos para db_portafolio
#DROP DATABASE IF EXISTS `u378219037_db_portafolio`;
#CREATE DATABASE IF NOT EXISTS `u378219037_db_portafolio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
SET SESSION sql_mode = DEFAULT;

#DROP DATABASE IF EXISTS `if0_40498449_db_portafolio`;
CREATE DATABASE IF NOT EXISTS `if0_40498449_db_portafolio`;
USE `if0_40498449_db_portafolio`;

-- Volcando estructura para tabla db_portafolio.contacto
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `tema` varchar(200) COLLATE utf8mb4_swedish_ci NOT NULL,
  `mensaje` text CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `ip` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `dispositivo` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `useragent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- Volcando datos para la tabla db_portafolio.contacto: ~0 rows (aproximadamente)
DELETE FROM `contacto`;

-- Volcando estructura para tabla db_portafolio.modulo
CREATE TABLE IF NOT EXISTS `modulo` (
  `idmodulo` bigint(20) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`idmodulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- Volcando datos para la tabla db_portafolio.modulo: ~3 rows (aproximadamente)
DELETE FROM `modulo`;
INSERT INTO `modulo` (`idmodulo`, `titulo`, `descripcion`, `status`) VALUES
	(1, 'Dashboard', 'Dashboard', 1),
	(2, 'Usuarios', 'Usuarios del sistema', 1),
	(3, 'Contactos', 'Mensajes del formulario contacto', 1);

  -- Volcando estructura para tabla db_portafolio.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `idrol` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombrerol` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- Volcando datos para la tabla db_portafolio.rol: ~2 rows (aproximadamente)
DELETE FROM `rol`;
INSERT INTO `rol` (`idrol`, `nombrerol`, `descripcion`, `status`) VALUES
	(1, 'Administrador', 'Acceso a todo el sistema 	', 1),
	(2, 'Pruebas', 'Tester de la aplicacion', 1);

-- Volcando estructura para tabla db_portafolio.permisos
CREATE TABLE IF NOT EXISTS `permisos` (
  `idpermiso` bigint(20) NOT NULL AUTO_INCREMENT,
  `rolid` bigint(20) NOT NULL,
  `moduloid` bigint(20) NOT NULL,
  `r` int NOT NULL DEFAULT '0',
  `w` int NOT NULL DEFAULT '0',
  `u` int NOT NULL DEFAULT '0',
  `d` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`idpermiso`),
  KEY `rolid` (`rolid`),
  KEY `moduloid` (`moduloid`),
  CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`moduloid`) REFERENCES `modulo` (`idmodulo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- Volcando datos para la tabla db_portafolio.permisos: ~6 rows (aproximadamente)
DELETE FROM `permisos`;
INSERT INTO `permisos` (`idpermiso`, `rolid`, `moduloid`, `r`, `w`, `u`, `d`) VALUES
	(1, 1, 1, 1, 1, 1, 1),
	(2, 1, 2, 1, 1, 1, 1),
	(7, 1, 3, 1, 1, 1, 1),
	(11, 2, 1, 1, 1, 1, 1),
	(12, 2, 2, 0, 0, 0, 0),
	(13, 2, 3, 1, 0, 0, 0);

-- Volcando estructura para tabla db_portafolio.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `idpersona` bigint(20) NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombres` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellidos` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono` bigint NOT NULL,
  `email_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `nit` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `nombrefiscal` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `direccionfiscal` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `rolid` bigint(20) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`idpersona`),
  KEY `rolid` (`rolid`),
  CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- Volcando datos para la tabla db_portafolio.persona: ~1 rows (aproximadamente)
DELETE FROM `persona`;
INSERT INTO `persona` (`idpersona`, `identificacion`, `nombres`, `apellidos`, `telefono`, `email_user`, `password`, `nit`, `nombrefiscal`, `direccionfiscal`, `token`, `rolid`, `datecreated`, `status`) VALUES
	(1, '79988969', 'Sandor', 'Luque', 3124769266, 'admin@admin.com', 'MkJ1bHZXYmJRYTdXeGxWZHNodm1pdz09', 'CF', 'Sanditor', 'Bogota', '', 1, '2023-05-27 02:28:53', 1);