/*
 Navicat Premium Data Transfer

 Source Server         : LocalDB
 Source Server Type    : MySQL
 Source Server Version : 100424 (10.4.24-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : starbucks

 Target Server Type    : MySQL
 Target Server Version : 100424 (10.4.24-MariaDB)
 File Encoding         : 65001

 Date: 07/12/2022 23:32:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for golongan
-- ----------------------------
DROP TABLE IF EXISTS `golongan`;
CREATE TABLE `golongan`  (
  `id_golongan` int NOT NULL,
  `nama_golongan` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gaji_pokok` decimal(10, 0) UNSIGNED NOT NULL,
  `tunjangan_transport` decimal(10, 0) UNSIGNED NOT NULL,
  `tunjangan_makan` decimal(10, 0) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_golongan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of golongan
-- ----------------------------
INSERT INTO `golongan` VALUES (1, 'Golongan 1', 15200000, 100000, 800000);
INSERT INTO `golongan` VALUES (2, 'Golongan 2', 7200000, 100000, 1800000);
INSERT INTO `golongan` VALUES (3, 'Golongan 3', 6200000, 100000, 1550000);
INSERT INTO `golongan` VALUES (4, 'Golongan 4', 5200000, 100000, 1300000);
INSERT INTO `golongan` VALUES (5, 'Golongan 5', 4800000, 100000, 1200000);
INSERT INTO `golongan` VALUES (6, 'Golongan 6', 4700000, 100000, 1175000);
INSERT INTO `golongan` VALUES (7, 'Golongan 7', 4400000, 100000, 1100000);
INSERT INTO `golongan` VALUES (8, 'Golongan 8', 4200000, 100000, 1050000);
INSERT INTO `golongan` VALUES (9, 'Golongan 9', 3800000, 100000, 950000);
INSERT INTO `golongan` VALUES (10, 'Golongan 10', 3700000, 100000, 925000);
INSERT INTO `golongan` VALUES (11, 'Golongan 11', 3500000, 100000, 875000);
INSERT INTO `golongan` VALUES (12, 'Golongan 12', 3400000, 100000, 850000);
INSERT INTO `golongan` VALUES (13, 'Golongan 13', 3300000, 100000, 825000);
INSERT INTO `golongan` VALUES (14, 'Golongan 14', 3200000, 100000, 800000);
INSERT INTO `golongan` VALUES (15, 'Golongan 15', 3050000, 100000, 762500);
INSERT INTO `golongan` VALUES (16, 'Golongan 16', 3000000, 100000, 750000);
INSERT INTO `golongan` VALUES (17, 'Golongan 17', 2800000, 100000, 700000);
INSERT INTO `golongan` VALUES (18, 'Golongan 18', 2700000, 100000, 675000);
INSERT INTO `golongan` VALUES (19, 'Golongan 19', 2500000, 100000, 625000);
INSERT INTO `golongan` VALUES (20, 'Golongan 20', 2400000, 100000, 600000);

SET FOREIGN_KEY_CHECKS = 1;
