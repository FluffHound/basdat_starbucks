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

 Date: 07/12/2022 23:32:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for toko
-- ----------------------------
DROP TABLE IF EXISTS `toko`;
CREATE TABLE `toko`  (
  `id_toko` int NOT NULL,
  `nama_toko` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_provinsi_fk` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_telepon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_toko`) USING BTREE,
  INDEX `id_provinsi_fk`(`id_provinsi_fk` ASC) USING BTREE,
  CONSTRAINT `toko_ibfk_1` FOREIGN KEY (`id_provinsi_fk`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of toko
-- ----------------------------
INSERT INTO `toko` VALUES (1, 'cabang_1', '473-8272 Aliquam Av.', '1', '71747', '0846330584835');
INSERT INTO `toko` VALUES (2, 'cabang_2', '9556 Leo. Rd.', '1', '35593', '084707156672');
INSERT INTO `toko` VALUES (3, 'cabang_3', 'P.O. Box 451, 2385 Erat Ave', '1', '78643', '08781017743');
INSERT INTO `toko` VALUES (4, 'cabang_4', '540-8909 Blandit Rd.', '2', '67325', '08751183843');
INSERT INTO `toko` VALUES (5, 'cabang_5', 'P.O. Box 988, 4088 Rutrum. St.', '2', '82923', '085317254335');
INSERT INTO `toko` VALUES (6, 'cabang_6', 'Ap #984-9635 Mauris. St.', '2', '84728', '08298478972');
INSERT INTO `toko` VALUES (7, 'cabang_7', 'Ap #265-1891 Tempus, Avenue', '3', '26317', '08071228411');
INSERT INTO `toko` VALUES (8, 'cabang_8', 'P.O. Box 948, 5286 Et Avenue', '3', '28514', '08668132417');
INSERT INTO `toko` VALUES (9, 'cabang_9', '799-5787 Molestie Street', '3', '37834', '0820234697211');
INSERT INTO `toko` VALUES (10, 'cabang_10', '800-6863 Dolor Road', '4', '98131', '082304951134');
INSERT INTO `toko` VALUES (11, 'cabang_11', 'Ap #570-7330 Dui. Road', '4', '72218', '082527622655');
INSERT INTO `toko` VALUES (12, 'cabang_12', '158-2223 Id St.', '4', '24446', '083154320724');
INSERT INTO `toko` VALUES (13, 'cabang_13', 'Ap #741-7952 Sed Street', '5', '83398', '082515271738');
INSERT INTO `toko` VALUES (14, 'cabang_14', 'Ap #915-8592 Metus Road', '5', '36420', '089669132853');
INSERT INTO `toko` VALUES (15, 'cabang_15', 'Ap #877-1603 Metus Street', '5', '58234', '0870332140844');
INSERT INTO `toko` VALUES (16, 'cabang_16', '5297 Libero St.', '6', '25689', '08021196732');
INSERT INTO `toko` VALUES (17, 'cabang_17', '208-1991 Ligula Rd.', '6', '35674', '088986591148');
INSERT INTO `toko` VALUES (18, 'cabang_18', 'Ap #822-6561 Rutrum St.', '6', '87535', '0823538807684');
INSERT INTO `toko` VALUES (19, 'cabang_19', 'P.O. Box 729, 1708 Urna St.', '7', '91327', '08359187152');
INSERT INTO `toko` VALUES (20, 'cabang_20', '832-5662 Montes, Road', '7', '35315', '0817378163451');
INSERT INTO `toko` VALUES (21, 'cabang_21', 'P.O. Box 673, 3774 Placerat. Rd.', '7', '47313', '085407853132');
INSERT INTO `toko` VALUES (22, 'cabang_22', '7070 Eget St.', '8', '85722', '0836406113230');
INSERT INTO `toko` VALUES (23, 'cabang_23', '205-1008 Luctus St.', '8', '22518', '0854129839727');
INSERT INTO `toko` VALUES (24, 'cabang_24', 'Ap #605-5034 Id, Av.', '8', '40681', '08093435380');
INSERT INTO `toko` VALUES (25, 'cabang_25', '778-9629 Non Ave', '9', '78872', '083725278007');
INSERT INTO `toko` VALUES (26, 'cabang_26', 'Ap #950-3029 Mattis. Ave', '9', '78348', '08861616457');
INSERT INTO `toko` VALUES (27, 'cabang_27', 'P.O. Box 947, 8354 Semper. St.', '9', '78564', '084303471453');
INSERT INTO `toko` VALUES (28, 'cabang_28', 'Ap #793-4235 Tempor St.', '10', '33410', '081724184119');
INSERT INTO `toko` VALUES (29, 'cabang_29', '1134 Consectetuer St.', '10', '46586', '08971639973');
INSERT INTO `toko` VALUES (30, 'cabang_30', '851-3839 In, Rd.', '10', '42578', '086878535972');
INSERT INTO `toko` VALUES (31, 'cabang_31', '569-858 Dui Av.', '11', '37272', '0853807971756');
INSERT INTO `toko` VALUES (32, 'cabang_32', 'P.O. Box 558, 251 Arcu Road', '11', '23056', '0814168424131');
INSERT INTO `toko` VALUES (33, 'cabang_33', '987-3997 Duis St.', '11', '11108', '08312070657');
INSERT INTO `toko` VALUES (34, 'cabang_34', '554-7836 Commodo Ave', '12', '36831', '0850274472122');
INSERT INTO `toko` VALUES (35, 'cabang_35', '5444 Purus Rd.', '12', '74168', '08248656973');
INSERT INTO `toko` VALUES (36, 'cabang_36', 'P.O. Box 396, 2559 Pharetra Rd.', '12', '86789', '0873585512612');
INSERT INTO `toko` VALUES (37, 'cabang_37', 'Ap #932-6395 Pede. Rd.', '13', '82530', '08212567585');
INSERT INTO `toko` VALUES (38, 'cabang_38', '474-2717 Ut St.', '13', '24640', '086382448466');
INSERT INTO `toko` VALUES (39, 'cabang_39', 'P.O. Box 368, 1077 Cubilia Road', '13', '53545', '08763575284');
INSERT INTO `toko` VALUES (40, 'cabang_40', 'Ap #487-5551 Suspendisse Road', '14', '54357', '0875275745735');
INSERT INTO `toko` VALUES (41, 'cabang_41', '5765 Amet Ave', '14', '51582', '0876373876191');
INSERT INTO `toko` VALUES (42, 'cabang_42', '430-5312 Elit. St.', '14', '67322', '084184357596');
INSERT INTO `toko` VALUES (43, 'cabang_43', '456-4215 In St.', '15', '95444', '08285766828');
INSERT INTO `toko` VALUES (44, 'cabang_44', '6726 Id Rd.', '15', '36237', '08620149211');
INSERT INTO `toko` VALUES (45, 'cabang_45', '961-5502 Facilisis, Rd.', '15', '66683', '081838336856');
INSERT INTO `toko` VALUES (46, 'cabang_46', '268-283 Mi Rd.', '16', '71346', '083648532454');
INSERT INTO `toko` VALUES (47, 'cabang_47', 'Ap #182-3336 Non, Avenue', '16', '22775', '08147185708');
INSERT INTO `toko` VALUES (48, 'cabang_48', '866-5060 Nisi. St.', '16', '45515', '08567501942');
INSERT INTO `toko` VALUES (49, 'cabang_49', '3395 Lobortis Ave', '17', '23611', '08407208812');
INSERT INTO `toko` VALUES (50, 'cabang_50', 'Ap #413-3593 Dolor St.', '17', '18184', '0860175937752');
INSERT INTO `toko` VALUES (51, 'cabang_51', 'P.O. Box 837, 5426 Tortor. Street', '17', '23492', '0861925264666');
INSERT INTO `toko` VALUES (52, 'cabang_52', 'Ap #488-9845 Libero St.', '18', '40683', '08179676525');
INSERT INTO `toko` VALUES (53, 'cabang_53', '444-3045 Nisl Avenue', '18', '47392', '081381596416');
INSERT INTO `toko` VALUES (54, 'cabang_54', 'P.O. Box 337, 5989 Morbi Av.', '18', '72154', '086463221162');
INSERT INTO `toko` VALUES (55, 'cabang_55', 'Ap #603-1068 Nec Street', '19', '94482', '086845742941');
INSERT INTO `toko` VALUES (56, 'cabang_56', 'P.O. Box 850, 8774 Sociis Rd.', '19', '23957', '0828541444699');
INSERT INTO `toko` VALUES (57, 'cabang_57', 'P.O. Box 110, 2989 Quam, Ave', '19', '15600', '0828838134314');
INSERT INTO `toko` VALUES (58, 'cabang_58', 'Ap #690-4741 Egestas. Ave', '20', '47376', '08315199973');
INSERT INTO `toko` VALUES (59, 'cabang_59', '587-3622 Cras Rd.', '20', '33522', '0822687102373');
INSERT INTO `toko` VALUES (60, 'cabang_60', '1959 Suspendisse Rd.', '20', '55880', '08363150217');
INSERT INTO `toko` VALUES (61, 'cabang_61', 'Ap #266-7117 Morbi Rd.', '21', '22585', '088761364121');
INSERT INTO `toko` VALUES (62, 'cabang_62', '706-4954 Sollicitudin Road', '21', '67564', '080152163634');
INSERT INTO `toko` VALUES (63, 'cabang_63', '423-7091 Euismod Avenue', '21', '44780', '0826656521335');
INSERT INTO `toko` VALUES (64, 'cabang_64', '963-4422 Consectetuer St.', '22', '60476', '085530827748');
INSERT INTO `toko` VALUES (65, 'cabang_65', 'Ap #875-4754 Sagittis. Road', '22', '76264', '08486822286');
INSERT INTO `toko` VALUES (66, 'cabang_66', 'Ap #758-158 Odio. Street', '22', '98276', '086145533768');
INSERT INTO `toko` VALUES (67, 'cabang_67', '131-9783 Elit, Rd.', '23', '50152', '0875648813061');
INSERT INTO `toko` VALUES (68, 'cabang_68', '617-9978 Magna Rd.', '23', '13058', '0895474983415');
INSERT INTO `toko` VALUES (69, 'cabang_69', 'Ap #881-7510 Vulputate St.', '23', '41633', '089121655554');
INSERT INTO `toko` VALUES (70, 'cabang_70', '9628 Sed St.', '24', '42171', '0884458443858');
INSERT INTO `toko` VALUES (71, 'cabang_71', '490-7476 Sit Road', '24', '61861', '082618831436');
INSERT INTO `toko` VALUES (72, 'cabang_72', 'P.O. Box 423, 8473 Rutrum Rd.', '24', '71918', '08820018536');
INSERT INTO `toko` VALUES (73, 'cabang_73', 'P.O. Box 278, 1821 Gravida Av.', '25', '41831', '08453942274');
INSERT INTO `toko` VALUES (74, 'cabang_74', 'Ap #537-8416 Magna Rd.', '25', '81531', '08668576272');
INSERT INTO `toko` VALUES (75, 'cabang_75', 'Ap #184-8438 Nec St.', '25', '35376', '0896573872527');
INSERT INTO `toko` VALUES (76, 'cabang_76', '500-1899 Mauris, Avenue', '26', '80364', '084515555488');
INSERT INTO `toko` VALUES (77, 'cabang_77', 'P.O. Box 738, 1750 Non, Street', '26', '77268', '0876127747262');
INSERT INTO `toko` VALUES (78, 'cabang_78', 'Ap #479-5450 Commodo Rd.', '26', '93523', '0832698522928');
INSERT INTO `toko` VALUES (79, 'cabang_79', '479-7367 Arcu. Rd.', '27', '20363', '081027330351');
INSERT INTO `toko` VALUES (80, 'cabang_80', 'Ap #445-3371 Quis, Ave', '27', '86631', '0850975796523');
INSERT INTO `toko` VALUES (81, 'cabang_81', '373-1149 Ullamcorper Road', '27', '37668', '081966538507');
INSERT INTO `toko` VALUES (82, 'cabang_82', 'Ap #982-5834 Adipiscing Av.', '28', '29486', '0821867214838');
INSERT INTO `toko` VALUES (83, 'cabang_83', 'P.O. Box 296, 5235 Lobortis, Rd.', '28', '82126', '0828632916139');
INSERT INTO `toko` VALUES (84, 'cabang_84', '7418 Quisque St.', '28', '57252', '08425080735');
INSERT INTO `toko` VALUES (85, 'cabang_85', 'P.O. Box 219, 1214 Euismod Ave', '29', '60223', '0884768965236');
INSERT INTO `toko` VALUES (86, 'cabang_86', 'P.O. Box 840, 1040 Magna. St.', '29', '50313', '08354742754');
INSERT INTO `toko` VALUES (87, 'cabang_87', '344-5629 Mauris Street', '29', '34967', '086267142323');
INSERT INTO `toko` VALUES (88, 'cabang_88', 'Ap #165-8003 Faucibus Av.', '30', '85490', '0844362435189');
INSERT INTO `toko` VALUES (89, 'cabang_89', '3676 Mauris St.', '30', '76881', '086326461853');
INSERT INTO `toko` VALUES (90, 'cabang_90', '5001 Mauris St.', '30', '29750', '080239475768');
INSERT INTO `toko` VALUES (91, 'cabang_91', 'Ap #356-5708 Consectetuer Street', '31', '99863', '083023532483');
INSERT INTO `toko` VALUES (92, 'cabang_92', 'Ap #731-3902 Felis St.', '31', '36432', '0828659815279');
INSERT INTO `toko` VALUES (93, 'cabang_93', '283-9457 Non, St.', '31', '27587', '08753227288');
INSERT INTO `toko` VALUES (94, 'cabang_94', '828-5004 Auctor Street', '32', '64192', '0831546578439');
INSERT INTO `toko` VALUES (95, 'cabang_95', '376-1457 Et, Rd.', '32', '39620', '084047400928');
INSERT INTO `toko` VALUES (96, 'cabang_96', 'P.O. Box 943, 7479 Molestie Rd.', '32', '94847', '0854428186846');
INSERT INTO `toko` VALUES (97, 'cabang_97', '2395 Augue Street', '33', '77389', '081352427860');
INSERT INTO `toko` VALUES (98, 'cabang_98', 'P.O. Box 498, 1624 Nunc Rd.', '33', '95757', '082785869732');
INSERT INTO `toko` VALUES (99, 'cabang_99', '871-1527 At Av.', '33', '34693', '0898924276087');
INSERT INTO `toko` VALUES (100, 'cabang_100', '304-1115 Mauris Road', '34', '68372', '0883141470142');
INSERT INTO `toko` VALUES (101, 'cabang_101', 'Ap #731-2635 Cras Ave', '34', '58472', '085321206152');
INSERT INTO `toko` VALUES (102, 'cabang_102', 'Ap #963-9079 In Rd.', '34', '34584', '088227654498');

SET FOREIGN_KEY_CHECKS = 1;
