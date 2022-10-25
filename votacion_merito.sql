/*
 Navicat Premium Data Transfer

 Source Server         : votacion_PE
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : votacion_merito

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 24/10/2022 10:25:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cat_asociacion
-- ----------------------------
DROP TABLE IF EXISTS `cat_asociacion`;
CREATE TABLE `cat_asociacion`  (
  `pk_asociacion` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estatus` tinyint(1) NULL DEFAULT 0,
  PRIMARY KEY (`pk_asociacion`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cat_asociacion
-- ----------------------------
INSERT INTO `cat_asociacion` VALUES (1, 'AJEDREZ', 0);
INSERT INTO `cat_asociacion` VALUES (2, 'ATLETISMO', 1);
INSERT INTO `cat_asociacion` VALUES (3, 'BASQUETBOL', 0);
INSERT INTO `cat_asociacion` VALUES (4, 'BEISBOL', 1);
INSERT INTO `cat_asociacion` VALUES (5, 'BOLICHE', 1);
INSERT INTO `cat_asociacion` VALUES (6, 'BOXEO', 1);
INSERT INTO `cat_asociacion` VALUES (7, 'CANOTAJE', 1);
INSERT INTO `cat_asociacion` VALUES (8, 'CICLISMO', 1);
INSERT INTO `cat_asociacion` VALUES (9, 'CIEGOS Y DÉBILES VISUALES', 1);
INSERT INTO `cat_asociacion` VALUES (10, 'DEPORTE SOBRE SILLA DE RUEDAS', 1);
INSERT INTO `cat_asociacion` VALUES (11, 'DISCAPACIDAD AUDITIVA', 1);
INSERT INTO `cat_asociacion` VALUES (12, 'DEPORTISTAS CON DISCAPACIDAD INTELECTUAL', 1);
INSERT INTO `cat_asociacion` VALUES (13, 'PARALISIS CEREBRAL', 1);
INSERT INTO `cat_asociacion` VALUES (14, 'DISCO VOLADOR ', 1);
INSERT INTO `cat_asociacion` VALUES (15, 'ESGRIMA', 1);
INSERT INTO `cat_asociacion` VALUES (16, 'FISICOCONSTRUCTIVISMO', 1);
INSERT INTO `cat_asociacion` VALUES (17, 'FUTBOL', 1);
INSERT INTO `cat_asociacion` VALUES (18, 'FUTBOL AMERICANO', 1);
INSERT INTO `cat_asociacion` VALUES (19, 'GIMNASIA', 1);
INSERT INTO `cat_asociacion` VALUES (20, 'HANDBALL', 1);
INSERT INTO `cat_asociacion` VALUES (21, 'HOCKEY', 1);
INSERT INTO `cat_asociacion` VALUES (22, 'JUDO', 1);
INSERT INTO `cat_asociacion` VALUES (23, 'JUEGOS Y DEPORTES AUTOCTONOS', 1);
INSERT INTO `cat_asociacion` VALUES (24, 'KARATE DO', 1);
INSERT INTO `cat_asociacion` VALUES (25, 'LEVANTAMIENTO DE PESAS', 1);
INSERT INTO `cat_asociacion` VALUES (26, 'LUCHAS ASOCIADAS', 1);
INSERT INTO `cat_asociacion` VALUES (27, 'NATACIÓN', 1);
INSERT INTO `cat_asociacion` VALUES (28, 'PATINES SOBRE RUEDAS', 1);
INSERT INTO `cat_asociacion` VALUES (29, 'PENTATLÓN', 1);
INSERT INTO `cat_asociacion` VALUES (30, 'REMO', 1);
INSERT INTO `cat_asociacion` VALUES (31, 'SOFTBOL', 1);
INSERT INTO `cat_asociacion` VALUES (32, 'TAE KWON DO', 1);
INSERT INTO `cat_asociacion` VALUES (33, 'TENIS', 0);
INSERT INTO `cat_asociacion` VALUES (34, 'TENIS DE MESA', 1);
INSERT INTO `cat_asociacion` VALUES (35, 'TIRO CON ARCO', 1);
INSERT INTO `cat_asociacion` VALUES (36, 'TIRO DEPORTIVO', 1);
INSERT INTO `cat_asociacion` VALUES (37, 'TRIATLON', 0);

-- ----------------------------
-- Table structure for cat_estatus
-- ----------------------------
DROP TABLE IF EXISTS `cat_estatus`;
CREATE TABLE `cat_estatus`  (
  `pk_estatus` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pk_estatus`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cat_estatus
-- ----------------------------
INSERT INTO `cat_estatus` VALUES (1, 'Activo');
INSERT INTO `cat_estatus` VALUES (2, 'Inactivo');

-- ----------------------------
-- Table structure for cat_modalidad
-- ----------------------------
DROP TABLE IF EXISTS `cat_modalidad`;
CREATE TABLE `cat_modalidad`  (
  `pk_modalidad` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`pk_modalidad`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cat_modalidad
-- ----------------------------
INSERT INTO `cat_modalidad` VALUES (1, 'DEPORTISTA DE DEPORTES INDIVIDUALES', 1);
INSERT INTO `cat_modalidad` VALUES (2, 'EQUIPO DE DEPORTES INDIVIDUALES', 1);
INSERT INTO `cat_modalidad` VALUES (3, 'DEPORTISTA DE DEPORTES DE CONJUNTO', 1);
INSERT INTO `cat_modalidad` VALUES (4, 'EQUIPO DE DEPORTES DE CONJUNTO', 1);
INSERT INTO `cat_modalidad` VALUES (5, 'DEPORTISTA PARALÍMPICO', 1);
INSERT INTO `cat_modalidad` VALUES (6, 'EQUIPO PARALÍMPICO', 1);
INSERT INTO `cat_modalidad` VALUES (7, 'MUNICIPAL', 1);

-- ----------------------------
-- Table structure for cat_perfil
-- ----------------------------
DROP TABLE IF EXISTS `cat_perfil`;
CREATE TABLE `cat_perfil`  (
  `pk_perfil` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `comentarios` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pk_perfil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cat_perfil
-- ----------------------------
INSERT INTO `cat_perfil` VALUES (1, 'ADMINISTRADOR', 'ADMINISTRADOR DEL SISTEMA');
INSERT INTO `cat_perfil` VALUES (2, 'CAPTURISTA', 'CAPTURISTA DEL SISTEMA');
INSERT INTO `cat_perfil` VALUES (5, 'VOTANTE', 'ACCESO SOLO A VOTACIONES');

-- ----------------------------
-- Table structure for nominado
-- ----------------------------
DROP TABLE IF EXISTS `nominado`;
CREATE TABLE `nominado`  (
  `pk_nominado` int NOT NULL AUTO_INCREMENT,
  `nombre_nominado` varchar(130) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fk_asociacion` int NULL DEFAULT NULL,
  `fk_modalidad` int NULL DEFAULT NULL,
  `fk_usuario` int NULL DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT 1,
  `fecha_creacion` date NULL DEFAULT NULL,
  `fecha_modificacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pk_nominado`) USING BTREE,
  INDEX `fk_asociacion`(`fk_asociacion` ASC) USING BTREE,
  INDEX `fk_modalidad`(`fk_modalidad` ASC) USING BTREE,
  INDEX `fk_usuario`(`fk_usuario` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nominado
-- ----------------------------
INSERT INTO `nominado` VALUES (1, 'Rafael Gerardo Ramón Rojas Solís		', 15, 1, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (2, 'Santiago Alberto Delgado Fuentes		', 15, 1, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (3, 'Leandro Daniel Sauri May		', 15, 1, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (4, 'José de Jésus Flores Peniche		', 9, 1, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (5, 'Ana Luisa Abraham Habib		', 19, 1, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (6, 'Jaydi Camila Novelo Evia		', 19, 2, 1, 1, '2022-10-17', '2022-10-21 14:16:07');
INSERT INTO `nominado` VALUES (7, 'Patricia Cristina Núñez Pavón		', 19, 2, 1, 1, '2022-10-17', '2022-10-21 14:16:47');
INSERT INTO `nominado` VALUES (8, 'Dalia de Jesús Alcocer Piña		', 19, 2, 1, 1, '2022-10-17', '2022-10-21 14:17:15');
INSERT INTO `nominado` VALUES (9, 'Adirem Tejeda Amaro		', 19, 2, 1, 1, '2022-10-17', '2022-10-21 14:16:57');
INSERT INTO `nominado` VALUES (10, 'Diana Esther Chay Dzul		', 25, 2, 1, 1, '2022-10-17', '2022-10-21 14:17:30');
INSERT INTO `nominado` VALUES (11, 'Diego Hernández Abundez		', 30, 3, 1, 1, '2022-10-17', '2022-10-21 14:17:40');
INSERT INTO `nominado` VALUES (12, 'Katherine Hernández Abundez		', 30, 3, 1, 1, '2022-10-17', '2022-10-21 14:19:37');
INSERT INTO `nominado` VALUES (13, 'Lúcero Valeria Arjona Pérez		', 30, 3, 1, 1, '2022-10-17', '2022-10-21 14:18:12');
INSERT INTO `nominado` VALUES (14, 'Richer Enrique Cantón Castillo		', 30, 3, 1, 1, '2022-10-17', '2022-10-21 14:18:42');
INSERT INTO `nominado` VALUES (15, 'Guido Habib Cuevas Aguilar		', 22, 3, 1, 1, '2022-10-17', '2022-10-21 14:19:05');
INSERT INTO `nominado` VALUES (16, 'Valeria Johana Espinosa Godoy		', 22, 4, 1, 1, '2022-10-17', '2022-10-21 14:19:54');
INSERT INTO `nominado` VALUES (17, 'Jose Jassiel Espinosa Godoy		', 22, 4, 1, 1, '2022-10-17', '2022-10-21 14:20:00');
INSERT INTO `nominado` VALUES (18, 'José Miguel Reytor Molina		', 27, 4, 1, 1, '2022-10-17', '2022-10-21 14:20:06');
INSERT INTO `nominado` VALUES (19, 'Regina Alférez Licea		', 27, 1, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (20, 'Leonel Arturo Mendoza Cutz		', 11, 4, 1, 1, '2022-10-17', '2022-10-21 14:20:16');
INSERT INTO `nominado` VALUES (21, 'Enzo Alejandro Jean  Cravero		', 2, 5, 1, 1, '2022-10-17', '2022-10-21 14:20:26');
INSERT INTO `nominado` VALUES (22, 'Santiago Moreno Torres		', 5, 5, 1, 1, '2022-10-17', '2022-10-21 14:20:47');
INSERT INTO `nominado` VALUES (23, 'Karla Ivette Esquivel Chac		', 9, 5, 1, 1, '2022-10-17', '2022-10-21 14:20:31');
INSERT INTO `nominado` VALUES (24, 'Vanesa Yaresvi Maza Campos		', 16, 5, 1, 1, '2022-10-17', '2022-10-21 14:21:06');
INSERT INTO `nominado` VALUES (25, 'Jessica Berenice García Quijano		', 32, 5, 1, 1, '2022-10-17', '2022-10-21 14:20:55');
INSERT INTO `nominado` VALUES (26, 'Angel Gregorio Díaz Farfán		', 15, 6, 1, 1, '2022-10-17', '2022-10-21 14:21:15');
INSERT INTO `nominado` VALUES (27, 'María Eugenia Fiegueroa Chan		', 19, 6, 1, 1, '2022-10-17', '2022-10-21 14:21:23');
INSERT INTO `nominado` VALUES (28, 'Valia Jímenez Ortíz		', 19, 6, 1, 1, '2022-10-17', '2022-10-21 14:21:32');
INSERT INTO `nominado` VALUES (29, 'Miguel Reytor Heredia 		', 27, 6, 1, 1, '2022-10-17', '2022-10-21 14:21:39');
INSERT INTO `nominado` VALUES (30, 'Julio Andrés González Llano		', 16, 2, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (31, 'Reydel Alonso Rodríguez		', 22, 2, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (32, 'Miguél Ángel Aguilar Cárdenas		', 9, 2, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (33, 'Lennin Cuauhtemoc López  Canul		', 20, 2, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (34, 'María Astrid Novelo Rosas		', 37, 3, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (35, 'Freddy Ángel Llanes Novelo		', 22, 3, 1, 1, '2022-10-17', NULL);
INSERT INTO `nominado` VALUES (36, 'Eneida Lora Agüero		', 22, 7, 1, 1, '2022-10-17', '2022-10-21 14:22:13');
INSERT INTO `nominado` VALUES (37, 'Mario Isaac Méndez Realpozo		', 3, 7, 1, 1, '2022-10-17', '2022-10-21 14:22:03');
INSERT INTO `nominado` VALUES (38, 'Cecilia Anahi Dzul Cervantes 		', 13, 7, 1, 1, '2022-10-17', '2022-10-21 14:21:56');
INSERT INTO `nominado` VALUES (39, 'Javier Omar Carrillo López		', 9, 7, 1, 1, '2022-10-17', '2022-10-21 14:21:52');
INSERT INTO `nominado` VALUES (40, 'Irene Suarez Hernández		', 9, 7, 1, 1, '2022-10-17', '2022-10-21 14:21:47');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `pk_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'Usuario para logueo',
  `contrasena_usuario` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'Contraseña',
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'Nombre completo',
  `apellido1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellido2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `telefono_usuario` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Telefono oficina',
  `correo_usuario` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Correo electrónico',
  `fk_estatus` int NULL DEFAULT 1 COMMENT '1 -> Activo\r\n 2 -> Inactivo',
  `fecha_creacion` date NULL DEFAULT NULL,
  `fk_perfil` int NULL DEFAULT NULL COMMENT 'Para identificar con tbl_sistema_perfiles',
  `fecha_modificacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `fechaUltimoAcceso` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`pk_usuario`) USING BTREE,
  INDEX `fk_perfil`(`fk_perfil` ASC) USING BTREE,
  INDEX `fk_estatus`(`fk_estatus` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'Catalogo con la realación de usuarios que acceden a la plataforma' ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (1, 'alfredo.carmona', '7c222fb2927d828af22f592134e8932480637c0d', 'Alfredo Gualfre', 'Carmona', 'Irigoyen', '9994119483', 'acarmona@gmail.com', 1, '2022-07-13', 1, '2022-10-19 00:06:44', '2022-10-19 08:06:09');
INSERT INTO `usuario` VALUES (2, 'alan.gutierrez', '7c222fb2927d828af22f592134e8932480637c0d', 'Lic. Alan Omar', 'Gutierrez', 'Chan', '', '', 1, '2022-10-17', 5, '2022-10-19 00:06:51', '2022-10-19 08:06:20');
INSERT INTO `usuario` VALUES (3, 'manuel.martin', '7c222fb2927d828af22f592134e8932480637c0d', 'C.P. Manuel Enrique de Jesús', 'Martín', 'Medina', '', '', 1, '2022-10-17', 5, '2022-10-19 00:07:00', '2022-10-19 08:06:22');
INSERT INTO `usuario` VALUES (4, 'karem.achach', '7c222fb2927d828af22f592134e8932480637c0d', 'Karem Faride', 'Achach', 'Ramírez', '', '', 1, '2022-10-17', 5, '2022-10-19 00:07:08', '2022-10-19 08:06:24');
INSERT INTO `usuario` VALUES (5, 'jose.nuñez', '7c222fb2927d828af22f592134e8932480637c0d', 'Dr. José Luis', 'Núñez', 'García', '', '', 1, '2022-10-17', 5, '2022-10-19 00:07:23', '2022-10-19 08:06:26');
INSERT INTO `usuario` VALUES (6, 'rodrigo.cuevas', '7c222fb2927d828af22f592134e8932480637c0d', 'Psic. Rodrigo ', 'Cuevas G', 'Cantón', '', '', 1, '2022-10-18', 5, '2022-10-19 00:07:31', '2022-10-19 08:07:26');
INSERT INTO `usuario` VALUES (7, 'julio.magaña', '7c222fb2927d828af22f592134e8932480637c0d', 'M.A. Julio C', 'Magaña', 'Miranda', '', '', 1, '2022-10-18', 5, '2022-10-19 00:07:40', '2022-10-19 08:07:33');
INSERT INTO `usuario` VALUES (8, 'manuel.lara', '7c222fb2927d828af22f592134e8932480637c0d', 'Lic. Manuel', 'Lara', 'Can', '', '', 1, '2022-10-18', 5, '2022-10-19 00:13:03', '2022-10-19 00:13:03');
INSERT INTO `usuario` VALUES (9, 'felix.zapata', '7c222fb2927d828af22f592134e8932480637c0d', 'Lic. Felix', 'Zapata', 'Azamar', '', '', 1, '2022-10-18', 5, '2022-10-19 00:08:02', '2022-10-19 08:07:49');
INSERT INTO `usuario` VALUES (10, 'marco.moreno', '7c222fb2927d828af22f592134e8932480637c0d', 'Lic. Marco', 'Moreno', 'Moreno', '', '', 1, '2022-10-18', 5, '2022-10-19 00:08:10', '2022-10-19 08:08:04');
INSERT INTO `usuario` VALUES (11, 'antonio.lizama', '7c222fb2927d828af22f592134e8932480637c0d', 'Lic Antonio', 'Lizama', 'Canto', '', '', 1, '2022-10-18', 5, '2022-10-19 00:08:56', '2022-10-19 08:08:11');
INSERT INTO `usuario` VALUES (12, 'rodrigo.puc', '7c222fb2927d828af22f592134e8932480637c0d', 'Rodrigo', 'Puc', 'Tzab', '', '', 1, '2022-10-18', 1, '2022-10-19 00:05:59', NULL);
INSERT INTO `usuario` VALUES (13, 'yenny.catzin', '7c222fb2927d828af22f592134e8932480637c0d', 'Yenny', 'Catzin', 'Puc', '', '', 1, '2022-10-18', 1, '2022-10-24 08:07:39', '2022-10-24 08:07:39');

-- ----------------------------
-- Table structure for voto
-- ----------------------------
DROP TABLE IF EXISTS `voto`;
CREATE TABLE `voto`  (
  `pk_voto` int NOT NULL AUTO_INCREMENT,
  `fk_usuario` int NULL DEFAULT NULL,
  `fk_nominado` int NULL DEFAULT NULL,
  `fk_modalidad` int NULL DEFAULT NULL,
  `fecha_creacion` date NULL DEFAULT NULL,
  `punto` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pk_voto`) USING BTREE,
  INDEX `fk_usuario`(`fk_usuario` ASC) USING BTREE,
  INDEX `fk_nominado`(`fk_nominado` ASC) USING BTREE,
  INDEX `fk_modalidad`(`fk_modalidad` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of voto
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
