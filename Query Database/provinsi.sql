/*
 Navicat Premium Data Transfer

 Source Server         : LocalDB
 Source Server Type    : MySQL
 Source Server Version : 100424 (10.4.24-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : starbucks_test

 Target Server Type    : MySQL
 Target Server Version : 100424 (10.4.24-MariaDB)
 File Encoding         : 65001

 Date: 05/12/2022 16:20:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for provinsi
-- ----------------------------
DROP TABLE IF EXISTS `provinsi`;
CREATE TABLE `provinsi`  (
  `id_provinsi` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_provinsi`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of provinsi
-- ----------------------------
INSERT INTO `provinsi` VALUES ('1', 'Nanggroe Aceh Darussalam');
INSERT INTO `provinsi` VALUES ('10', 'Bangka Belitung');
INSERT INTO `provinsi` VALUES ('11', 'Kalimantan Timur');
INSERT INTO `provinsi` VALUES ('12', 'Kalimantan Barat');
INSERT INTO `provinsi` VALUES ('13', 'Kalimantan Tengah');
INSERT INTO `provinsi` VALUES ('14', 'Kalimantan Selatan');
INSERT INTO `provinsi` VALUES ('15', 'Kalimantan Utara');
INSERT INTO `provinsi` VALUES ('16', 'DKI Jakarta');
INSERT INTO `provinsi` VALUES ('17', 'Banten');
INSERT INTO `provinsi` VALUES ('18', 'Jawa Barat');
INSERT INTO `provinsi` VALUES ('19', 'Jawa Tengah');
INSERT INTO `provinsi` VALUES ('2', 'Sumatra Utara');
INSERT INTO `provinsi` VALUES ('20', 'DI Yogyakarta');
INSERT INTO `provinsi` VALUES ('21', 'Jawa Timur');
INSERT INTO `provinsi` VALUES ('22', 'Bali');
INSERT INTO `provinsi` VALUES ('23', 'Nusa Tenggara Barat');
INSERT INTO `provinsi` VALUES ('24', 'Nusa Tenggara Timur');
INSERT INTO `provinsi` VALUES ('25', 'Sulawesi Utara');
INSERT INTO `provinsi` VALUES ('26', 'Sulawesi Barat');
INSERT INTO `provinsi` VALUES ('27', 'Sulawesi Tengah');
INSERT INTO `provinsi` VALUES ('28', 'Gorontalo');
INSERT INTO `provinsi` VALUES ('29', 'Sulawesi Tenggara');
INSERT INTO `provinsi` VALUES ('3', 'Sumatra Selatan');
INSERT INTO `provinsi` VALUES ('30', 'Sulawesi Selatan');
INSERT INTO `provinsi` VALUES ('31', 'Maluku Utara');
INSERT INTO `provinsi` VALUES ('32', 'Maluku');
INSERT INTO `provinsi` VALUES ('33', 'Papua Barat');
INSERT INTO `provinsi` VALUES ('34', 'Papua');
INSERT INTO `provinsi` VALUES ('4', 'Sumatra Barat');
INSERT INTO `provinsi` VALUES ('5', 'Bengkulu');
INSERT INTO `provinsi` VALUES ('6', 'Riau');
INSERT INTO `provinsi` VALUES ('7', 'Kepulauan Riau');
INSERT INTO `provinsi` VALUES ('8', 'Jambi');
INSERT INTO `provinsi` VALUES ('9', 'Lampung');

SET FOREIGN_KEY_CHECKS = 1;
