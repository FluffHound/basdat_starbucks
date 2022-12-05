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

 Date: 05/12/2022 16:19:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cuti
-- ----------------------------
DROP TABLE IF EXISTS `cuti`;
CREATE TABLE `cuti`  (
  `cuti` int NOT NULL,
  `id_karyawan_fk` int NOT NULL,
  `mulai_cuti` date NOT NULL,
  `akhir_cuti` date NOT NULL,
  PRIMARY KEY (`cuti`) USING BTREE,
  UNIQUE INDEX `unq_cuti_id_karyawan_fk`(`id_karyawan_fk` ASC) USING BTREE,
  CONSTRAINT `fk_cuti_data_karyawan` FOREIGN KEY (`id_karyawan_fk`) REFERENCES `data_karyawan` (`id_karyawan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cuti
-- ----------------------------
INSERT INTO `cuti` VALUES (1, 1, '2022-02-26', '2022-02-27');
INSERT INTO `cuti` VALUES (2, 2, '2022-02-26', '2022-02-27');
INSERT INTO `cuti` VALUES (3, 3, '2022-03-02', '2022-03-05');
INSERT INTO `cuti` VALUES (4, 4, '2022-03-08', '2022-03-10');

SET FOREIGN_KEY_CHECKS = 1;
