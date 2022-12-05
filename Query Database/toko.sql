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

 Date: 05/12/2022 16:20:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for toko
-- ----------------------------
DROP TABLE IF EXISTS `toko`;
CREATE TABLE `toko`  (
  `id_toko` int NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_provinsi_fk` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_telepon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_toko`) USING BTREE,
  INDEX `id_provinsi_fk`(`id_provinsi_fk` ASC) USING BTREE,
  CONSTRAINT `toko_ibfk_1` FOREIGN KEY (`id_provinsi_fk`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of toko
-- ----------------------------
INSERT INTO `toko` VALUES (1, 'Ap #897-1593 Cras Ave', '2', '6152', '058286685212');
INSERT INTO `toko` VALUES (2, '9512 Torquent St.', '2', '78811', '086463536153');
INSERT INTO `toko` VALUES (3, 'P.O. Box 108, 8643 Euismod Av.', '2', '74951', '036783988469');
INSERT INTO `toko` VALUES (4, 'Ap #112-9294 Risus. Rd.', '3', '42439', '035434158485');
INSERT INTO `toko` VALUES (5, 'Ap #124-6701 Ante, Avenue', '3', '636306', '014526624273');
INSERT INTO `toko` VALUES (6, 'Ap #538-1195 Eu Avenue', '3', '20886', '066563576258');
INSERT INTO `toko` VALUES (7, 'Ap #867-6323 Ac Rd.', '4', '83026', '079758857311');
INSERT INTO `toko` VALUES (8, 'Ap #821-4298 Facilisis Avenue', '4', '5336', '035430560452');
INSERT INTO `toko` VALUES (9, 'Ap #515-9899 Rutrum Road', '4', '658486', '030790531811');
INSERT INTO `toko` VALUES (10, '227-9633 Vitae Ave', '5', '4336-5586', '097623126085');
INSERT INTO `toko` VALUES (11, 'Ap #448-8685 Mattis Street', '5', 'M93 4JC', '075084212741');
INSERT INTO `toko` VALUES (12, '364-8802 Nibh Ave', '5', '45732-2851', '030611786379');
INSERT INTO `toko` VALUES (13, 'P.O. Box 418, 2576 Sem Av.', '6', '654177', '007888601910');
INSERT INTO `toko` VALUES (14, 'Ap #120-6688 Ut Rd.', '6', '813343', '048802125637');
INSERT INTO `toko` VALUES (15, '8991 Dapibus Street', '6', '844774', '048047613723');
INSERT INTO `toko` VALUES (16, 'Ap #763-3535 Sed St.', '7', '18322', '017177878487');
INSERT INTO `toko` VALUES (17, 'Ap #141-3248 Augue Road', '7', '21855-1387', '014838844923');
INSERT INTO `toko` VALUES (18, '512-1952 Vitae Rd.', '7', '5565', '068674373178');
INSERT INTO `toko` VALUES (19, '6246 Fermentum St.', '8', '294254', '077281153531');
INSERT INTO `toko` VALUES (20, 'P.O. Box 570, 5720 Elementum Avenue', '8', '36294', '079287116828');
INSERT INTO `toko` VALUES (21, '180-6027 Ridiculus Rd.', '8', '6237-2144', '002277717380');
INSERT INTO `toko` VALUES (22, 'Ap #711-2792 Nec, Avenue', '9', '63248', '059050564469');
INSERT INTO `toko` VALUES (23, '160-5038 Dui, St.', '9', '645627', '071815075689');
INSERT INTO `toko` VALUES (24, 'P.O. Box 379, 5699 Egestas. Street', '9', '64C 6B1', '078768116189');
INSERT INTO `toko` VALUES (25, 'P.O. Box 249, 9778 Aliquet Rd.', '10', '6856', '083822215224');
INSERT INTO `toko` VALUES (26, '872-9680 Aliquet Ave', '10', '473411', '071767504275');
INSERT INTO `toko` VALUES (27, 'Ap #821-9299 Consequat Rd.', '10', '38541', '059579994111');
INSERT INTO `toko` VALUES (28, 'Ap #164-3398 Luctus St.', '11', '85-71', '087275462661');
INSERT INTO `toko` VALUES (29, 'Ap #391-9093 Elementum St.', '11', '6662', '026930378653');
INSERT INTO `toko` VALUES (30, '6550 At Av.', '11', '975666', '081714278885');
INSERT INTO `toko` VALUES (31, '6232 Odio. Rd.', '12', '96923', '084261287954');
INSERT INTO `toko` VALUES (32, 'Ap #351-7490 Non, Road', '12', '688417', '084016052657');
INSERT INTO `toko` VALUES (33, '1646 Consectetuer Road', '12', '64378', '051113134874');
INSERT INTO `toko` VALUES (34, '3853 Parturient Rd.', '13', '155931', '073282484894');
INSERT INTO `toko` VALUES (35, '4366 Ac Av.', '13', '9182 OD', '077521843887');
INSERT INTO `toko` VALUES (36, '113-7948 Vivamus Rd.', '13', '2394', '017225735298');
INSERT INTO `toko` VALUES (37, '6751 Ultrices Av.', '14', '45-988', '090320417641');
INSERT INTO `toko` VALUES (38, '7808 Felis, Road', '14', '838244', '086012751316');
INSERT INTO `toko` VALUES (39, 'Ap #772-3245 Varius Rd.', '14', '66773', '037898085221');
INSERT INTO `toko` VALUES (40, 'P.O. Box 475, 7532 Non Rd.', '15', '54903-2375', '085113119671');
INSERT INTO `toko` VALUES (41, 'P.O. Box 351, 6083 Felis. Rd.', '15', '17892', '066105365887');
INSERT INTO `toko` VALUES (42, '240-7177 Porttitor Ave', '15', '43-62', '024819764298');
INSERT INTO `toko` VALUES (43, '3576 Quisque Avenue', '16', '1273-4776', '044795677750');
INSERT INTO `toko` VALUES (44, '862-4790 Ultrices St.', '16', '8949-3201', '077536138018');
INSERT INTO `toko` VALUES (45, 'Ap #637-3811 Elit, Street', '16', '391434', '087761335811');
INSERT INTO `toko` VALUES (46, '3475 Quis, Rd.', '17', '354845', '046957786633');
INSERT INTO `toko` VALUES (47, 'Ap #488-6394 Bibendum St.', '17', '543149', '098462321875');
INSERT INTO `toko` VALUES (48, 'Ap #833-3234 Id Rd.', '17', '45426-8533', '066262730586');
INSERT INTO `toko` VALUES (49, '6858 Posuere, St.', '18', '68762', '095777622085');
INSERT INTO `toko` VALUES (50, '895-1471 Sit Rd.', '18', 'I3G 6V8', '074814259688');
INSERT INTO `toko` VALUES (51, 'Ap #593-5634 Facilisis Road', '18', '7425', '052518726278');
INSERT INTO `toko` VALUES (52, 'Ap #681-7044 Praesent Avenue', '19', '424865', '078118765143');
INSERT INTO `toko` VALUES (53, 'Ap #147-997 Molestie. Av.', '19', '8032', '053280938817');
INSERT INTO `toko` VALUES (54, 'Ap #395-6367 Dui. Rd.', '19', '196161', '038948241496');
INSERT INTO `toko` VALUES (55, '330-1034 Rhoncus. St.', '20', '3352', '018611322550');
INSERT INTO `toko` VALUES (56, '173-9287 Molestie Ave', '20', '820028', '067486042284');
INSERT INTO `toko` VALUES (57, '380-6327 Pede Rd.', '20', '733645', '073783621544');
INSERT INTO `toko` VALUES (58, 'Ap #443-8289 Odio St.', '21', '85727', '026442644819');
INSERT INTO `toko` VALUES (59, 'Ap #593-226 Ac Road', '21', '3247-9516', '046124942343');
INSERT INTO `toko` VALUES (60, '727-1801 Sit Av.', '21', '245065', '033101782945');
INSERT INTO `toko` VALUES (61, '323 Lorem Ave', '22', 'ET5J 4EH', '073325736646');
INSERT INTO `toko` VALUES (62, '6902 At, Rd.', '22', '715836', '003633486392');
INSERT INTO `toko` VALUES (63, 'P.O. Box 647, 3814 Eu St.', '22', '32686-7118', '001829056171');
INSERT INTO `toko` VALUES (64, 'Ap #533-532 Nibh. Ave', '23', '798871', '012995737735');
INSERT INTO `toko` VALUES (65, '8117 Vestibulum St.', '23', '30805', '064014249523');
INSERT INTO `toko` VALUES (66, '2894 Nec, Rd.', '23', '660868', '058043489103');
INSERT INTO `toko` VALUES (67, 'Ap #587-6302 Commodo St.', '24', '88357', '015756431266');
INSERT INTO `toko` VALUES (68, '201-2573 Nec Avenue', '24', '340437', '037018681711');
INSERT INTO `toko` VALUES (69, '822-847 Libero Rd.', '24', '13122', '052138599541');
INSERT INTO `toko` VALUES (70, 'Ap #494-8326 Nulla. Ave', '25', '187171', '062631619757');
INSERT INTO `toko` VALUES (71, 'P.O. Box 299, 9239 Sed St.', '25', '85677', '065189217565');
INSERT INTO `toko` VALUES (72, 'Ap #353-1391 Risus. Street', '25', '20611', '004593934405');
INSERT INTO `toko` VALUES (73, '3827 Sed Road', '26', '431111', '096457265467');
INSERT INTO `toko` VALUES (74, 'Ap #655-1445 Montes, Rd.', '26', '2845', '018369655562');
INSERT INTO `toko` VALUES (75, 'Ap #350-5953 Netus Road', '26', '21705', '030445105817');
INSERT INTO `toko` VALUES (76, 'P.O. Box 680, 2446 Morbi Street', '27', '568511', '064764756323');
INSERT INTO `toko` VALUES (77, '3114 Enim, Rd.', '27', '855283', '044505757986');
INSERT INTO `toko` VALUES (78, '3412 Aptent Road', '27', '2775', '091374832153');
INSERT INTO `toko` VALUES (79, 'P.O. Box 604, 3270 Dictum. Avenue', '28', '97600', '034218518622');
INSERT INTO `toko` VALUES (80, '191-5485 Dapibus Ave', '28', '622771', '032641591708');
INSERT INTO `toko` VALUES (81, '6247 Montes, Ave', '28', '71435', '011621271635');
INSERT INTO `toko` VALUES (82, '174-7686 Egestas St.', '29', '41595', '053216814066');
INSERT INTO `toko` VALUES (83, 'Ap #729-1762 Eu, Street', '29', '3016', '067688236460');
INSERT INTO `toko` VALUES (84, 'P.O. Box 639, 6377 Lorem, Street', '29', '716773', '055962182843');
INSERT INTO `toko` VALUES (85, 'Ap #824-2869 Nisi St.', '30', '738748', '038869566766');
INSERT INTO `toko` VALUES (86, '178-8517 Risus. Rd.', '30', '436513', '066334411945');
INSERT INTO `toko` VALUES (87, 'P.O. Box 761, 5997 Bibendum Avenue', '30', '540496', '087482369510');
INSERT INTO `toko` VALUES (88, '204-2616 Tempor Road', '31', '5608', '036031398417');
INSERT INTO `toko` VALUES (89, 'P.O. Box 663, 6038 Nunc St.', '31', '97088', '081698412575');
INSERT INTO `toko` VALUES (90, '385-3429 Malesuada Road', '31', '49668', '094871412155');
INSERT INTO `toko` VALUES (91, '911-8044 Magna. St.', '32', '2876', '072996842858');
INSERT INTO `toko` VALUES (92, 'P.O. Box 206, 6618 Non Road', '32', '3110', '036840423184');
INSERT INTO `toko` VALUES (93, '792-9151 Mauris Avenue', '32', '62480', '083472318582');
INSERT INTO `toko` VALUES (94, '7238 Per Ave', '33', '1468', '080589668809');
INSERT INTO `toko` VALUES (95, 'Ap #135-6990 Nostra, Road', '33', '67582-8845', '032761458780');
INSERT INTO `toko` VALUES (96, '949-4123 Velit Rd.', '33', '37653', '071563665340');
INSERT INTO `toko` VALUES (97, 'P.O. Box 554, 1854 Ac Road', '34', '6528-5280', '043504849446');
INSERT INTO `toko` VALUES (98, '4625 Risus. St.', '34', '685224', '093280451674');
INSERT INTO `toko` VALUES (99, 'Ap #812-165 Velit. Street', '34', '2580', '081827084408');
INSERT INTO `toko` VALUES (100, 'P.O. Box 767, 6735 Sagittis Ave', '1', '5975', '082198449301');
INSERT INTO `toko` VALUES (101, '808-249 Sed Street', '1', '771924', '087423742111');
INSERT INTO `toko` VALUES (102, '1691 Aliquam, Street', '1', '98425', '022238628775');

SET FOREIGN_KEY_CHECKS = 1;
