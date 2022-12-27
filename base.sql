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

-- Volcando estructura para tabla curarte.adiciones
CREATE TABLE IF NOT EXISTS `adiciones` (
  `id_adicion` int NOT NULL AUTO_INCREMENT,
  `adicion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_adicion`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla curarte.adiciones: ~25 rows (aproximadamente)
DELETE FROM `adiciones`;
/*!40000 ALTER TABLE `adiciones` DISABLE KEYS */;
INSERT INTO `adiciones` (`id_adicion`, `adicion`, `tipo`) VALUES
	(1, 'Tabaco', 'sustancia'),
	(2, 'Bebidas alcohólicas', 'sustancia'),
	(3, 'Cannabis', 'sustancia'),
	(4, 'Cocaína', 'sustancia'),
	(5, 'Anfetaminas u otro tipo de estimulantes', 'sustancia'),
	(6, 'Inhalantes', 'sustancia'),
	(7, 'Tranquilizantes o pastillas para dormir', 'sustancia'),
	(8, 'Alucinógenos', 'sustancia'),
	(9, 'Opiáceos', 'sustancia'),
	(10, 'Otros-especifique', 'sustancia'),
	(11, 'Sí', 'bool'),
	(12, 'No', 'bool'),
	(13, 'Casi siempre', 'frecuencia'),
	(14, 'Con frecuencia', 'frecuencia'),
	(15, 'Algunas veces', 'frecuencia'),
	(16, 'Casi nunca o nunca', 'frecuencia'),
	(17, 'Mucho', 'potencia'),
	(18, 'Regular', 'potencia'),
	(19, 'Poco', 'potencia'),
	(20, 'Nada', 'potencia'),
	(21, 'Nunca', 'frecuencia'),
	(22, '1 o 2 veces', 'frecuencia'),
	(23, 'Cada mes', 'frecuencia'),
	(24, 'Cada semana', 'frecuencia'),
	(25, 'A diario o casi diario', 'frecuencia');
/*!40000 ALTER TABLE `adiciones` ENABLE KEYS */;

-- Volcando estructura para tabla curarte.cr_adicion
CREATE TABLE IF NOT EXISTS `cr_adicion` (
  `id_cra` int NOT NULL AUTO_INCREMENT,
  `id_adicion` int NOT NULL,
  `id_cr` int NOT NULL,
  PRIMARY KEY (`id_cra`),
  KEY `FK_cr_adicion_cuestionario_respuestas` (`id_cr`),
  KEY `FK_cr_adicion_adiciones` (`id_adicion`),
  CONSTRAINT `FK_cr_adicion_adiciones` FOREIGN KEY (`id_adicion`) REFERENCES `adiciones` (`id_adicion`) ON UPDATE CASCADE,
  CONSTRAINT `FK_cr_adicion_cuestionario_respuestas` FOREIGN KEY (`id_cr`) REFERENCES `cuestionario_pregunta` (`id_cp`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla curarte.cr_adicion: ~55 rows (aproximadamente)
DELETE FROM `cr_adicion`;
/*!40000 ALTER TABLE `cr_adicion` DISABLE KEYS */;
INSERT INTO `cr_adicion` (`id_cra`, `id_adicion`, `id_cr`) VALUES
	(1, 21, 7),
	(2, 22, 7),
	(3, 23, 7),
	(4, 24, 7),
	(5, 25, 7),
	(6, 21, 8),
	(7, 22, 8),
	(8, 23, 8),
	(9, 24, 8),
	(10, 25, 8),
	(11, 21, 9),
	(12, 22, 9),
	(13, 23, 9),
	(14, 24, 9),
	(15, 25, 9),
	(16, 1, 7),
	(17, 2, 7),
	(18, 3, 7),
	(19, 4, 7),
	(20, 5, 7),
	(21, 6, 7),
	(22, 7, 7),
	(23, 8, 7),
	(24, 9, 7),
	(25, 10, 7),
	(26, 1, 8),
	(27, 2, 8),
	(28, 3, 8),
	(29, 4, 8),
	(30, 5, 8),
	(31, 6, 8),
	(32, 7, 8),
	(33, 8, 8),
	(34, 9, 8),
	(35, 10, 8),
	(36, 1, 9),
	(37, 2, 9),
	(38, 3, 9),
	(39, 4, 9),
	(40, 5, 9),
	(41, 6, 9),
	(42, 7, 9),
	(43, 8, 9),
	(44, 9, 9),
	(45, 10, 9),
	(46, 1, 6),
	(47, 2, 6),
	(48, 3, 6),
	(49, 4, 6),
	(50, 5, 6),
	(51, 6, 6),
	(52, 7, 6),
	(53, 8, 6),
	(54, 9, 6),
	(55, 10, 6),
	(56, 11, 6),
	(57, 12, 6);
/*!40000 ALTER TABLE `cr_adicion` ENABLE KEYS */;

-- Volcando estructura para tabla curarte.cuestionarios
CREATE TABLE IF NOT EXISTS `cuestionarios` (
  `id_cuestionario` int NOT NULL AUTO_INCREMENT,
  `no_preguntas` tinyint NOT NULL DEFAULT '0',
  `nombre_cuestionario` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_cuestionario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla curarte.cuestionarios: ~2 rows (aproximadamente)
DELETE FROM `cuestionarios`;
/*!40000 ALTER TABLE `cuestionarios` DISABLE KEYS */;
INSERT INTO `cuestionarios` (`id_cuestionario`, `no_preguntas`, `nombre_cuestionario`) VALUES
	(1, 5, 'Atención a la familia'),
	(2, 4, 'Addición a las sustancias');
/*!40000 ALTER TABLE `cuestionarios` ENABLE KEYS */;

-- Volcando estructura para tabla curarte.cuestionario_pregunta
CREATE TABLE IF NOT EXISTS `cuestionario_pregunta` (
  `id_cuestionario` int NOT NULL,
  `id_pregunta` int NOT NULL,
  `tipo_pregunta` tinyint NOT NULL DEFAULT '0',
  `id_cp` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_cp`) USING BTREE,
  KEY `FK_cuestionario_respuestas_cuestionarios` (`id_cuestionario`),
  KEY `FK_cuestionario_respuestas_pregunta` (`id_pregunta`),
  CONSTRAINT `FK_cuestionario_respuestas_cuestionarios` FOREIGN KEY (`id_cuestionario`) REFERENCES `cuestionarios` (`id_cuestionario`) ON UPDATE CASCADE,
  CONSTRAINT `FK_cuestionario_respuestas_pregunta` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id_pregunta`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla curarte.cuestionario_pregunta: ~9 rows (aproximadamente)
DELETE FROM `cuestionario_pregunta`;
/*!40000 ALTER TABLE `cuestionario_pregunta` DISABLE KEYS */;
INSERT INTO `cuestionario_pregunta` (`id_cuestionario`, `id_pregunta`, `tipo_pregunta`, `id_cp`) VALUES
	(1, 1, 1, 1),
	(1, 2, 1, 2),
	(1, 3, 1, 3),
	(1, 4, 1, 4),
	(1, 5, 1, 5),
	(2, 24, 2, 6),
	(2, 25, 3, 7),
	(2, 26, 3, 8),
	(2, 27, 3, 9);
/*!40000 ALTER TABLE `cuestionario_pregunta` ENABLE KEYS */;

-- Volcando estructura para tabla curarte.instituciones
CREATE TABLE IF NOT EXISTS `instituciones` (
  `id_institucion` int NOT NULL AUTO_INCREMENT,
  `nombre_institucion` varchar(100) NOT NULL DEFAULT '',
  `direccion` varchar(100) NOT NULL DEFAULT '',
  `contacto` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `CP_Edo` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_institucion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla curarte.instituciones: ~3 rows (aproximadamente)
DELETE FROM `instituciones`;
/*!40000 ALTER TABLE `instituciones` DISABLE KEYS */;
INSERT INTO `instituciones` (`id_institucion`, `nombre_institucion`, `direccion`, `contacto`, `CP_Edo`) VALUES
	(1, 'CEMEPI Terapias Psicológicas Sede Reforma', 'Av. Paseo de la Reforma 300, Juárez, Cuauhtémoc, 06600 Ciudad de México, CDMX', '+525529028389', '06600CDMX'),
	(2, 'Neurowave | Psiquiatra', 'Calle Montes Urales 749 Interior 5 Col, Lomas de Chapultepec, 11000 Ciudad de México, CDMX', '+525590011976', '11000CDMX'),
	(3, 'Psychomex Servicios Psicológicos y Nutrición', 'Guanajuato 78-int 203, Roma Nte., Cuauhtémoc, 06700 Ciudad de México, CDMX', '+525563867083', '06700CDMX');
/*!40000 ALTER TABLE `instituciones` ENABLE KEYS */;

-- Volcando estructura para tabla curarte.pregunta
CREATE TABLE IF NOT EXISTS `pregunta` (
  `id_pregunta` int NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla curarte.pregunta: ~21 rows (aproximadamente)
DELETE FROM `pregunta`;
/*!40000 ALTER TABLE `pregunta` DISABLE KEYS */;
INSERT INTO `pregunta` (`id_pregunta`, `pregunta`) VALUES
	(1, 'Me satisface la ayuda que recibo de mi familia cuando tengo algún problema y/o necesidad'),
	(2, 'Me satisface la participación que mi familia brinda y permite'),
	(3, 'Me satisface como mi familia acpeta y apoya mis deseos de emrpender nuevas actividades'),
	(4, 'Me satisface como mi familia expresa afectos y responde a mis emociones como rabia, tristeza, amor'),
	(5, 'Me satisface como compartimos en familia: \\na)El tiempo para estar juntos\\nb)Los espacios en casa\\nc)El dinero'),
	(6, 'Fumas'),
	(7, 'Te enojas, te peleas'),
	(8, 'Te conformas, no haces nada'),
	(9, 'Bebes alcohol en exceso'),
	(10, 'No haces caso a los demás, los ignoras'),
	(11, 'Duermes mucho'),
	(12, 'Te adaptas, tratas de comprender la situación'),
	(13, 'Te haces a un lado, trastas de evitar la situación'),
	(14, 'Reflexionas y tratas de encontrar una solución'),
	(15, 'Le gritas a los demás, expresas tu coraje'),
	(16, 'Te sientes triste'),
	(17, 'Lloras'),
	(18, 'Te aislas'),
	(19, 'Tratas de convencer a la persona con quien discutes, platicas'),
	(20, 'Comes en exceso'),
	(21, 'Te conectas a internet para distraerte'),
	(22, 'Le pides ayuda a alguien'),
	(23, 'Usas las redes sociales para expresar tu malestar'),
	(24, 'A lo largo de su vida, ¿cual de las siguientes sustancias ha consumido alguna vez? (SOLO PARA USOS NO-MÉDICOS)'),
	(25, '¿Con qué frecuencia ha consumido las sutancias que ha mencionado en los últimos tres meses (PRIMERA DROGA, SEGUNDA DROGA, ETC)?'),
	(26, 'En los últimos tres meses, ¿con qué frecuencia ha tenido desesos fuertes o ansías de consumir (PRIMERA DROGA, SEGUNDA DROGA, ETC)?'),
	(27, 'En los últimos meses, con qué frecuencia le ha llevado su consumo de (PRIMERA DROGA, SEGUNDA DROGA, ETC) a problemas de salud, sociales, legales o económicos?');
/*!40000 ALTER TABLE `pregunta` ENABLE KEYS */;

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

-- Volcando datos para la tabla curarte.resultados_cuestionarios: ~0 rows (aproximadamente)
DELETE FROM `resultados_cuestionarios`;
/*!40000 ALTER TABLE `resultados_cuestionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `resultados_cuestionarios` ENABLE KEYS */;

-- Volcando estructura para tabla curarte.tecnicas
CREATE TABLE IF NOT EXISTS `tecnicas` (
  `id_tecnica` int NOT NULL AUTO_INCREMENT,
  `id_tema` int NOT NULL DEFAULT '0',
  `nombre_tecnica` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `url_video` varchar(250) NOT NULL DEFAULT '',
  `tipo_evaluacion` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id_tecnica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla curarte.tecnicas: ~0 rows (aproximadamente)
DELETE FROM `tecnicas`;
/*!40000 ALTER TABLE `tecnicas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tecnicas` ENABLE KEYS */;

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

-- Volcando datos para la tabla curarte.tecnicas_usuario: ~0 rows (aproximadamente)
DELETE FROM `tecnicas_usuario`;
/*!40000 ALTER TABLE `tecnicas_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tecnicas_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla curarte.temas
CREATE TABLE IF NOT EXISTS `temas` (
  `id_tema` int NOT NULL AUTO_INCREMENT,
  `tema` varchar(50) NOT NULL DEFAULT '0',
  `urlvideo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `urlarticulo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_tema`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla curarte.temas: ~9 rows (aproximadamente)
DELETE FROM `temas`;
/*!40000 ALTER TABLE `temas` DISABLE KEYS */;
INSERT INTO `temas` (`id_tema`, `tema`, `urlvideo`, `urlarticulo`) VALUES
	(1, 'Depresión', 'https://www.youtube.com/watch?v=gVv1dFUaBQs', 'http://www.rethinkdepression.es/wp-content/uploads/2018/05/03.C0673-Back_to_Daily_life-2_CC03G01.pdf'),
	(2, 'Ansiedad', 'https://www.youtube.com/watch?v=LOhBQvH53pE', 'https://www.nimh.nih.gov/sites/default/files/documents/health/publications/espanol/trastorno-de-ansiedad-generalizada-cuando-no-se-pueden-controlar-las-preocupaciones-new/trastorno_de_ansiedad_generalizada.pdf'),
	(3, 'Autoestima', 'https://www.youtube.com/watch?v=7qpxrs9rIuQ', 'https://www.lantegibatuak.eus/wp-content/uploads/2020/05/Cuaderno-de-ejercicios-para-aumentar-la-autoestima.pdf'),
	(4, 'Afrontamiento', 'https://www.youtube.com/watch?v=IePU_Og0Qnk', 'https://www.mdmpsicologiaclinica.com/2020/06/02/estrategias-de-afrontamiento/'),
	(5, 'Sueño en la salud mental', 'https://www.youtube.com/watch?v=QAeTs61PWVY', NULL),
	(6, 'Estrés', '', NULL),
	(8, 'Nutrición', 'https://www.youtube.com/watch?v=iNYIUqP3438', NULL),
	(9, 'Interacción social', 'https://www.youtube.com/watch?v=IV503ic', NULL);
/*!40000 ALTER TABLE `temas` ENABLE KEYS */;

-- Volcando estructura para tabla curarte.temas_imagenes
CREATE TABLE IF NOT EXISTS `temas_imagenes` (
  `id_tema` int DEFAULT NULL,
  `ruta_imagen` varchar(100) DEFAULT NULL,
  KEY `FK__temas` (`id_tema`),
  CONSTRAINT `FK__temas` FOREIGN KEY (`id_tema`) REFERENCES `temas` (`id_tema`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla curarte.temas_imagenes: ~0 rows (aproximadamente)
DELETE FROM `temas_imagenes`;
/*!40000 ALTER TABLE `temas_imagenes` DISABLE KEYS */;
INSERT INTO `temas_imagenes` (`id_tema`, `ruta_imagen`) VALUES
	(1, 'views/imgs/depresion01.jpg'),
	(1, 'views/imgs/depresion02.jpg'),
	(1, 'views/imgs/depresion01.jpg'),
	(2, 'views/imgs/Ansiedad01.png'),
	(3, 'views/imgs/autoestima01.webp'),
	(3, 'views/imgs/autoestima02.webp'),
	(4, 'views/imgs/afrontamiento01.png'),
	(4, 'views/imgs/afrontamiento02.png'),
	(4, 'views/imgs/afrontamiento03.jpg'),
	(5, 'views/imgs/sleep01.png'),
	(5, 'views/imgs/sleep02.jpg'),
	(5, 'views/imgs/sleep03.jpg'),
	(5, 'views/imgs/sleep04.png'),
	(6, 'views/imgs/estres01.jpg'),
	(8, 'views/imgs/alimentacion01.jpg'),
	(8, 'views/imgs/alimentacion02.webp'),
	(8, 'views/imgs/alimentacion03.png'),
	(9, 'views/imgs/apoyo01.jpg'),
	(9, 'views/imgs/apoyo02.jpg'),
	(9, 'views/imgs/apoyo01.jpg');
/*!40000 ALTER TABLE `temas_imagenes` ENABLE KEYS */;

-- Volcando estructura para tabla curarte.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `email` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla curarte.usuario: ~1 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`email`, `nombre`, `password`, `fecha_nacimiento`) VALUES
	('twistedfoca@gmail.com', 'Oscar', '202020202020202', '2000-02-19');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
