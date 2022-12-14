-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.23 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para curarte
CREATE DATABASE IF NOT EXISTS `curarte` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `curarte`;

-- Volcando estructura para tabla curarte.cuestionarios
CREATE TABLE IF NOT EXISTS `cuestionarios` (
  `id_cuestionario` int NOT NULL AUTO_INCREMENT,
  `no_preguntas` tinyint NOT NULL DEFAULT '0',
  `nombre_cuestionario` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_cuestionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla curarte.cuestionario_respuestas
CREATE TABLE IF NOT EXISTS `cuestionario_respuestas` (
  `id_cuestionario` int NOT NULL,
  `id_pregunta` int NOT NULL,
  `tipo_pregunta` tinyint NOT NULL DEFAULT '0',
  KEY `FK_cuestionario_respuestas_cuestionarios` (`id_cuestionario`),
  KEY `FK_cuestionario_respuestas_pregunta` (`id_pregunta`),
  CONSTRAINT `FK_cuestionario_respuestas_cuestionarios` FOREIGN KEY (`id_cuestionario`) REFERENCES `cuestionarios` (`id_cuestionario`) ON UPDATE CASCADE,
  CONSTRAINT `FK_cuestionario_respuestas_pregunta` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id_pregunta`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla curarte.pregunta
CREATE TABLE IF NOT EXISTS `pregunta` (
  `id_pregunta` int NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla curarte.resultados_cuestionarios
CREATE TABLE IF NOT EXISTS `resultados_cuestionarios` (
  `email` varchar(100) NOT NULL,
  `id_cuestionario` int NOT NULL DEFAULT '0',
  `resultados` varchar(100) NOT NULL,
  KEY `FK_resultados_cuestionarios_usuario` (`email`),
  KEY `FK_resultados_cuestionarios_cuestionarios` (`id_cuestionario`),
  CONSTRAINT `FK_resultados_cuestionarios_cuestionarios` FOREIGN KEY (`id_cuestionario`) REFERENCES `cuestionarios` (`id_cuestionario`) ON UPDATE CASCADE,
  CONSTRAINT `FK_resultados_cuestionarios_usuario` FOREIGN KEY (`email`) REFERENCES `usuario` (`email`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla curarte.tecnicas
CREATE TABLE IF NOT EXISTS `tecnicas` (
  `id_tecnica` int NOT NULL AUTO_INCREMENT,
  `nombre_tecnica` varchar(50) NOT NULL DEFAULT '0',
  `info` text NOT NULL,
  `url_video` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_tecnica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla curarte.tecnicas_usuario
CREATE TABLE IF NOT EXISTS `tecnicas_usuario` (
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_tecnica` int NOT NULL,
  `estado` bit(1) NOT NULL,
  KEY `FK_tecnicas_usuario_usuario` (`email`),
  KEY `FK_tecnicas_usuario_tecnicas` (`id_tecnica`),
  CONSTRAINT `FK_tecnicas_usuario_tecnicas` FOREIGN KEY (`id_tecnica`) REFERENCES `tecnicas` (`id_tecnica`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tecnicas_usuario_usuario` FOREIGN KEY (`email`) REFERENCES `usuario` (`email`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla curarte.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `email` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
