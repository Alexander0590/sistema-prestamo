/*
 Navicat Premium Data Transfer

 Source Server         : cnn
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : bdprestamos

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 18/12/2024 20:24:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes`  (
  `dni` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apellidos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nombres` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `referencia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`dni`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('60705434', 'ABAD JIMENEZ', 'FRANKLIN ABRAHAN', 'LAS CUQUISs', 'al costado de plaza vea');
INSERT INTO `clientes` VALUES ('765310', 'AQUINO FERNANDEZ', 'VIOLETA SOLAINNS', 'COMASS', 'asdsad');
INSERT INTO `clientes` VALUES ('76531080', 'YOVERA SIMBALA', 'JOSE ALEXANDER', 'Puente piedra', 'POR LA PLAZAa');

-- ----------------------------
-- Table structure for detalle_prestamos
-- ----------------------------
DROP TABLE IF EXISTS `detalle_prestamos`;
CREATE TABLE `detalle_prestamos`  (
  `codigo_p` int NOT NULL AUTO_INCREMENT,
  `codigo` int NULL DEFAULT NULL,
  `numero_cuota` float NULL DEFAULT NULL,
  `fecha` date NULL DEFAULT NULL,
  `cuota` float NULL DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`codigo_p`) USING BTREE,
  INDEX `detalle_prestamo`(`codigo` ASC) USING BTREE,
  CONSTRAINT `detalle_prestamo` FOREIGN KEY (`codigo`) REFERENCES `prestamos` (`codigo`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of detalle_prestamos
-- ----------------------------
INSERT INTO `detalle_prestamos` VALUES (5, 1, 1, '2024-12-19', 183, 'Pagado');
INSERT INTO `detalle_prestamos` VALUES (6, 1, 3, '2024-12-19', 183, 'Pendiente');
INSERT INTO `detalle_prestamos` VALUES (7, 2, 1, '2024-12-19', 110, 'Pagado');
INSERT INTO `detalle_prestamos` VALUES (8, 2, 2, '2024-12-19', 110, 'Pendiente');
INSERT INTO `detalle_prestamos` VALUES (9, 2, 2, '2024-12-19', 50, 'Pendiente');
INSERT INTO `detalle_prestamos` VALUES (10, 2, 2, '2024-12-19', 110, 'Pendiente');
INSERT INTO `detalle_prestamos` VALUES (11, 2, 2, '2024-12-19', 110, 'Pendiente');
INSERT INTO `detalle_prestamos` VALUES (12, 2, 2, '2024-12-19', 110, 'Pendiente');
INSERT INTO `detalle_prestamos` VALUES (13, 2, 2, '2024-12-19', 110, 'Pendiente');
INSERT INTO `detalle_prestamos` VALUES (14, 2, 2, '2024-12-19', 110, 'Pagado');

-- ----------------------------
-- Table structure for prestamos
-- ----------------------------
DROP TABLE IF EXISTS `prestamos`;
CREATE TABLE `prestamos`  (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `dni` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cantidad_prestar` float NULL DEFAULT NULL,
  `interes` int NULL DEFAULT NULL,
  `cuotas` float NULL DEFAULT NULL,
  `pago_mensual` float NULL DEFAULT NULL,
  `color` int NULL DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha_registro` date NULL DEFAULT NULL,
  PRIMARY KEY (`codigo`) USING BTREE,
  INDEX `prestamos_clientees`(`dni` ASC) USING BTREE,
  CONSTRAINT `prestamos_clientees` FOREIGN KEY (`dni`) REFERENCES `clientes` (`dni`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1111112 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of prestamos
-- ----------------------------
INSERT INTO `prestamos` VALUES (1, '60705434', 'semanal', 2000, 10, 12, 183.333, 2, 'En Curso', '2024-12-18');
INSERT INTO `prestamos` VALUES (2, '76531080', 'semanal', 1200, 10, 12, 110, 3, 'En Curso', '2024-12-18');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `Datos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `clave` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `rol` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Jose alexander yovera simbala', 'admin', 'admin', 1);

SET FOREIGN_KEY_CHECKS = 1;
