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

 Date: 07/12/2022 23:32:23
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for posisi
-- ----------------------------
DROP TABLE IF EXISTS `posisi`;
CREATE TABLE `posisi`  (
  `id_posisi` int NOT NULL,
  `id_golongan_fk` int NOT NULL,
  `nama_posisi` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_posisi`) USING BTREE,
  INDEX `unq_posisi_id_golongan_fk`(`id_golongan_fk` ASC) USING BTREE,
  CONSTRAINT `fk_posisi_golongan` FOREIGN KEY (`id_golongan_fk`) REFERENCES `golongan` (`id_golongan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of posisi
-- ----------------------------
INSERT INTO `posisi` VALUES (1, 12, 'Admin Gudang');
INSERT INTO `posisi` VALUES (2, 6, 'Application Support');
INSERT INTO `posisi` VALUES (3, 8, 'Auditor');
INSERT INTO `posisi` VALUES (4, 16, 'Barista');
INSERT INTO `posisi` VALUES (5, 19, 'Cook Helper');
INSERT INTO `posisi` VALUES (6, 18, 'Customer Service');
INSERT INTO `posisi` VALUES (7, 20, 'Crew');
INSERT INTO `posisi` VALUES (8, 18, 'CS Delivery Officer');
INSERT INTO `posisi` VALUES (9, 18, 'Driver');
INSERT INTO `posisi` VALUES (10, 9, 'Financial Controller');
INSERT INTO `posisi` VALUES (11, 7, 'Graphic Designer');
INSERT INTO `posisi` VALUES (12, 8, 'Hardware Specialist');
INSERT INTO `posisi` VALUES (13, 11, 'HR Insurance');
INSERT INTO `posisi` VALUES (14, 11, 'HR Officer');
INSERT INTO `posisi` VALUES (15, 9, 'Inventory Controller');
INSERT INTO `posisi` VALUES (16, 5, 'IT Support Officer');
INSERT INTO `posisi` VALUES (17, 16, 'Kasir');
INSERT INTO `posisi` VALUES (18, 3, 'Kepala Cabang');
INSERT INTO `posisi` VALUES (19, 4, 'Kepala Toko');
INSERT INTO `posisi` VALUES (20, 2, 'Legal Supervisor');
INSERT INTO `posisi` VALUES (21, 10, 'Management Trainee');
INSERT INTO `posisi` VALUES (22, 1, 'Manajer Area');
INSERT INTO `posisi` VALUES (23, 16, 'Pelaksana Gudang');
INSERT INTO `posisi` VALUES (24, 18, 'Pramuniaga (Penjaga Toko)');
INSERT INTO `posisi` VALUES (25, 11, 'Project Coordinator');
INSERT INTO `posisi` VALUES (26, 12, 'Project Maintenance');
INSERT INTO `posisi` VALUES (27, 10, 'Recruitment Selection Officer');
INSERT INTO `posisi` VALUES (28, 14, 'Sales');
INSERT INTO `posisi` VALUES (29, 18, 'Security');
INSERT INTO `posisi` VALUES (30, 19, 'SPG');
INSERT INTO `posisi` VALUES (31, 10, 'Staf Accounting');
INSERT INTO `posisi` VALUES (32, 14, 'Staf Admin');
INSERT INTO `posisi` VALUES (33, 13, 'Staf Advertising');
INSERT INTO `posisi` VALUES (34, 14, 'Staf Controlling');
INSERT INTO `posisi` VALUES (35, 12, 'Staf Finance');
INSERT INTO `posisi` VALUES (36, 12, 'Staf Front Desk');
INSERT INTO `posisi` VALUES (37, 12, 'Staf Marketing');
INSERT INTO `posisi` VALUES (38, 15, 'Staf Officer');
INSERT INTO `posisi` VALUES (39, 16, 'Staf Produksi');
INSERT INTO `posisi` VALUES (40, 17, 'Staf Writer');
INSERT INTO `posisi` VALUES (41, 14, 'Tax Officer');
INSERT INTO `posisi` VALUES (42, 14, 'Teknisi Coldroom');
INSERT INTO `posisi` VALUES (43, 19, 'Waitress');

SET FOREIGN_KEY_CHECKS = 1;
