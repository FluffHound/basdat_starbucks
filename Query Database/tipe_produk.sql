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

 Date: 05/12/2022 16:20:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tipe_produk
-- ----------------------------
DROP TABLE IF EXISTS `tipe_produk`;
CREATE TABLE `tipe_produk`  (
  `tipe_produk` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`tipe_produk`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tipe_produk
-- ----------------------------
INSERT INTO `tipe_produk` VALUES ('bakery', 'food', 'choose from baked goods that are thoughtfully crafted with high-quality ingredients and the oh-so-good taste you are craving');
INSERT INTO `tipe_produk` VALUES ('blended beverage', 'drink', '');
INSERT INTO `tipe_produk` VALUES ('brewed coffee', 'drink', 'artfully roasted and brewed fresh all day long, every day!');
INSERT INTO `tipe_produk` VALUES ('bulk', 'merchandise', 'anda bisa mendapatkan informasid an melakukan pemesanan merchandise official Starbucks dalam jumlah banyak untuk keperluan bisni');
INSERT INTO `tipe_produk` VALUES ('espresso beverages', 'drink', 'handcrated lattes, cappuccinos, macchiatos and more');
INSERT INTO `tipe_produk` VALUES ('grab & go', 'food', 'why not pick up something small to accompany your coffe?');
INSERT INTO `tipe_produk` VALUES ('milk and chocolate', 'drink', 'Chocolate and dairy milk, steamed together to create a hot chocolate fit for a chocaholic! Topped with whipped cream and dusted ');
INSERT INTO `tipe_produk` VALUES ('sandwiches', 'food', 'level-up lunch with fresh ingredients and irresistible combinations');
INSERT INTO `tipe_produk` VALUES ('savory pies', 'food', 'treat your palette with these appetizing savory pies');
INSERT INTO `tipe_produk` VALUES ('seasonal', 'merchandise', '');
INSERT INTO `tipe_produk` VALUES ('sweet & cakes', 'food', 'get your sweet tooth cravings filled here');
INSERT INTO `tipe_produk` VALUES ('tea', 'drink', 'As bold and Tea.jpg invigorating as the dawn of a bright new day. As smooth and sweet as your finest moments therein. Drink up a');

SET FOREIGN_KEY_CHECKS = 1;
