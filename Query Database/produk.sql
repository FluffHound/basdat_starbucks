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

 Date: 05/12/2022 16:20:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk`  (
  `kode_produk` int NOT NULL,
  `nama_produk` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tipe_produk_fk` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stok_tersedia` int UNSIGNED NULL DEFAULT NULL,
  `harga` decimal(10, 3) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`kode_produk`) USING BTREE,
  INDEX `fk_produk_tipe_produk`(`tipe_produk_fk` ASC) USING BTREE,
  CONSTRAINT `fk_produk_tipe_produk` FOREIGN KEY (`tipe_produk_fk`) REFERENCES `tipe_produk` (`tipe_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES (1, '7 Seeds Cookie', 'bakery', 3, 39000.000);
INSERT INTO `produk` VALUES (2, 'Almond Croissant', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (3, 'Bagel Bites', 'bakery', 20, 37000.000);
INSERT INTO `produk` VALUES (4, 'Beef Sausages  &  Cheese Croissant', 'bakery', 0, 36000.000);
INSERT INTO `produk` VALUES (5, 'Cheese Bagles', 'bakery', 20, 32000.000);
INSERT INTO `produk` VALUES (6, 'Chocolate Croissant', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (7, 'Cinamon Roll', 'bakery', 20, 33000.000);
INSERT INTO `produk` VALUES (8, 'Cinnamon Chocolate Marble Cake', 'bakery', 20, 40000.000);
INSERT INTO `produk` VALUES (9, 'Espresso Brownie', 'bakery', 20, 29000.000);
INSERT INTO `produk` VALUES (10, 'Nutella Bombolone', 'bakery', 20, 39000.000);
INSERT INTO `produk` VALUES (11, 'Old Fashioned Blueberry Muffin', 'bakery', 20, 30000.000);
INSERT INTO `produk` VALUES (12, 'Peanut Butter Cornflakes Cookie', 'bakery', 20, 20000.000);
INSERT INTO `produk` VALUES (13, 'Pillow Glazed Doughnut', 'bakery', 20, 39000.000);
INSERT INTO `produk` VALUES (14, 'Raisin Oatmeal Scones', 'bakery', 20, 41000.000);
INSERT INTO `produk` VALUES (15, 'Spicy Tuna Bread', 'bakery', 20, 29000.000);
INSERT INTO `produk` VALUES (16, 'Srikaya Swirl Danish', 'bakery', 20, 40000.000);
INSERT INTO `produk` VALUES (17, 'Sumatra Chocolate Eclair', 'bakery', 20, 41000.000);
INSERT INTO `produk` VALUES (18, 'Triple Chocolate Muffin', 'bakery', 20, 39000.000);
INSERT INTO `produk` VALUES (19, 'Tuna Puff', 'bakery', 3, 28000.000);
INSERT INTO `produk` VALUES (20, 'Avocado Medley Cake', 'sweet & cakes', 0, 36000.000);
INSERT INTO `produk` VALUES (21, 'Classic Dark Chocolate Cake', 'sweet & cakes', 20, 39000.000);
INSERT INTO `produk` VALUES (23, 'New York Cheesecake', 'sweet & cakes', 20, 38000.000);
INSERT INTO `produk` VALUES (24, 'Oreo Cheesecake', 'sweet & cakes', 20, 17000.000);
INSERT INTO `produk` VALUES (25, 'Scarlet Velvet Cake', 'sweet & cakes', 20, 39000.000);
INSERT INTO `produk` VALUES (26, 'Starbucks Pandan Gula Aren Cake', 'sweet & cakes', 20, 29000.000);
INSERT INTO `produk` VALUES (27, 'Starbucks Vanilla Keju Cake', 'sweet & cakes', 20, 30000.000);
INSERT INTO `produk` VALUES (28, 'Via Red Velvet Roll Cake', 'sweet & cakes', 20, 29000.000);
INSERT INTO `produk` VALUES (29, 'Banana Cake', 'grab & go', 20, 21000.000);
INSERT INTO `produk` VALUES (30, 'Caramel Stroopwafel', 'grab & go', 20, 15000.000);
INSERT INTO `produk` VALUES (31, 'Chocolate Chip Cookies', 'grab & go', 20, 19000.000);
INSERT INTO `produk` VALUES (32, 'Chocolate Stroopwafel', 'grab & go', 20, 15000.000);
INSERT INTO `produk` VALUES (33, 'Juices', 'grab & go', 20, 21000.000);
INSERT INTO `produk` VALUES (34, 'Raisin Oatmeal Cookies', 'grab & go', 20, 20000.000);
INSERT INTO `produk` VALUES (35, 'Beef Filone', 'sandwiches', 20, 55000.000);
INSERT INTO `produk` VALUES (36, 'Classic Tuna Toastie', 'sandwiches', 20, 29000.000);
INSERT INTO `produk` VALUES (37, 'Grilled Smooked Beef & Cheese Decker', 'sandwiches', 20, 36000.000);
INSERT INTO `produk` VALUES (38, 'Peanut Butter Panini', 'sandwiches', 20, 41000.000);
INSERT INTO `produk` VALUES (39, 'Smoked Beef Mushroom & Cheese Panini', 'sandwiches', 20, 49000.000);
INSERT INTO `produk` VALUES (40, 'Trio Mixed Roll', 'sandwiches', 20, 44000.000);
INSERT INTO `produk` VALUES (41, 'Tuna Cheese Whole Wheat Panini', 'sandwiches', 20, 48000.000);
INSERT INTO `produk` VALUES (43, 'All Day Bfast Bun', 'sandwiches', 20, 55000.000);
INSERT INTO `produk` VALUES (44, 'Cheese Quiche', 'savory pies', 20, 37000.000);
INSERT INTO `produk` VALUES (45, 'Smoked Beef Quiche', 'savory pies', 20, 35000.000);
INSERT INTO `produk` VALUES (46, 'Asian Dolce Frappucino', 'blended beverage', 20, 52000.000);
INSERT INTO `produk` VALUES (47, 'Caramel Coffee Jelly Frappucino', 'blended beverage', 0, 57000.000);
INSERT INTO `produk` VALUES (48, 'Caramel Java Chip Frappucino', 'blended beverage', 30, 57000.000);
INSERT INTO `produk` VALUES (49, 'Coffee Frappucino', 'blended beverage', 0, 44000.000);
INSERT INTO `produk` VALUES (50, 'Dark Mocha Frappucino', 'blended beverage', 30, 57000.000);
INSERT INTO `produk` VALUES (51, 'Espresso Frappucino', 'blended beverage', 0, 48000.000);
INSERT INTO `produk` VALUES (52, 'Hazelnut Frappucino', 'blended beverage', 30, 50000.000);
INSERT INTO `produk` VALUES (53, 'Java Chip Frappucino', 'blended beverage', 0, 57000.000);
INSERT INTO `produk` VALUES (54, 'Mocha Frappucino', 'blended beverage', 30, 53000.000);
INSERT INTO `produk` VALUES (55, 'Mocha Jelly Frappucino', 'blended beverage', 0, 55000.000);
INSERT INTO `produk` VALUES (56, 'Caramel Cream Frappucino', 'blended beverage', 0, 57000.000);
INSERT INTO `produk` VALUES (57, 'Double Chocolate Cream Frappucino', 'blended beverage', 30, 55000.000);
INSERT INTO `produk` VALUES (58, 'Green Tea Cream Frappucino', 'blended beverage', 0, 55000.000);
INSERT INTO `produk` VALUES (59, 'Vanilla Cream Frappucino', 'blended beverage', 0, 55000.000);
INSERT INTO `produk` VALUES (60, 'Mango Passion Frappucino', 'blended beverage', 10, 47000.000);
INSERT INTO `produk` VALUES (61, 'Rapsberry Currant Frappucino', 'blended beverage', 0, 47000.000);
INSERT INTO `produk` VALUES (62, 'Cold Brew', 'brewed coffee', 30, 41000.000);
INSERT INTO `produk` VALUES (63, 'reshly Brewed Coffee', 'brewed coffee', 0, 23000.000);
INSERT INTO `produk` VALUES (64, 'Misto', 'brewed coffee', 20, 23000.000);
INSERT INTO `produk` VALUES (65, 'Vanilla Sweet Cream Cold Brew', 'brewed coffee', 0, 46000.000);
INSERT INTO `produk` VALUES (66, 'Caffe Americano', 'espresso beverages', 20, 34000.000);
INSERT INTO `produk` VALUES (67, 'Caffe Latte', 'espresso beverages', 0, 44000.000);
INSERT INTO `produk` VALUES (68, 'Caffe Mocha', 'espresso beverages', 0, 53000.000);
INSERT INTO `produk` VALUES (69, 'Cappucino', 'espresso beverages', 0, 44000.000);
INSERT INTO `produk` VALUES (70, 'Caramel Macchiato', 'espresso beverages', 0, 57000.000);
INSERT INTO `produk` VALUES (71, 'Cocoa Cappucino', 'espresso beverages', 0, 53000.000);
INSERT INTO `produk` VALUES (72, 'Cold Foam', 'espresso beverages', 30, 41000.000);
INSERT INTO `produk` VALUES (73, 'Double Shot Iced Shaken Espresso', 'espresso beverages', 0, 48000.000);
INSERT INTO `produk` VALUES (74, 'Espresso Con Panna', 'espresso beverages', 0, 45000.000);
INSERT INTO `produk` VALUES (75, 'Espresso Macchiato', 'espresso beverages', 30, 53000.000);
INSERT INTO `produk` VALUES (76, 'lat White', 'espresso beverages', 0, 44000.000);
INSERT INTO `produk` VALUES (77, 'Iced Espresso and Matcha Fusion', 'espresso beverages', 0, 53000.000);
INSERT INTO `produk` VALUES (78, 'Ristretto Bianco', 'espresso beverages', 0, 53000.000);
INSERT INTO `produk` VALUES (79, 'Signature Chocolate', 'milk and chocolate', 0, 50000.000);
INSERT INTO `produk` VALUES (80, 'Iced Shaken Lemonade Tea', 'tea', 0, 22000.000);
INSERT INTO `produk` VALUES (81, 'TEAVANA Chai Hot Tea', 'tea', 0, 22000.000);
INSERT INTO `produk` VALUES (82, 'TEAVANA Chamomile Hot Tea', 'tea', 0, 22000.000);
INSERT INTO `produk` VALUES (83, 'TEAVANA Citrus Mint Hot Tea', 'tea', 0, 22000.000);
INSERT INTO `produk` VALUES (84, 'TEAVANA Earl Grey Hot Tea', 'tea', 0, 22000.000);
INSERT INTO `produk` VALUES (85, 'TEAVANA English Breakfast Hot Tea', 'tea', 0, 22000.000);
INSERT INTO `produk` VALUES (86, 'TEAVANA Mint Blend Hot Tea', 'tea', 0, 22000.000);
INSERT INTO `produk` VALUES (87, 'Black Tea Latte', 'tea', 0, 22000.000);
INSERT INTO `produk` VALUES (88, 'Chai Tea Latte', 'tea', 0, 22000.000);
INSERT INTO `produk` VALUES (89, 'Earl Grey Tea Latte', 'tea', 0, 22000.000);
INSERT INTO `produk` VALUES (90, 'Green Tea Latte', 'tea', 0, 22000.000);
INSERT INTO `produk` VALUES (91, 'Cold Cup Translucent Mint', 'bulk', 75, 250000.000);
INSERT INTO `produk` VALUES (92, 'Cold Cup Cooper', 'bulk', 79, 425000.000);
INSERT INTO `produk` VALUES (93, 'Tumbler Wordmark Cooper', 'bulk', 75, 450000.000);
INSERT INTO `produk` VALUES (94, 'Tumbler Siren Art Cooper', 'bulk', 75, 450000.000);
INSERT INTO `produk` VALUES (95, 'Tumbler Matter Green', 'bulk', 75, 450000.000);
INSERT INTO `produk` VALUES (96, 'Waterbottle Green', 'bulk', 75, 395000.000);
INSERT INTO `produk` VALUES (97, 'Waterbottle Mint', 'bulk', 75, 395000.000);
INSERT INTO `produk` VALUES (98, 'Waterbottle Siren Art Mint', 'bulk', 75, 485000.000);
INSERT INTO `produk` VALUES (99, 'Waterbottle Siren Mint', 'bulk', 75, 500000.000);
INSERT INTO `produk` VALUES (100, 'Waterbottle Touple Siren Art', 'bulk', 75, 550000.000);
INSERT INTO `produk` VALUES (101, 'Waterbottle Wordmark Green', 'bulk', 75, 425000.000);
INSERT INTO `produk` VALUES (102, 'Straw Mint', 'bulk', 75, 150000.000);
INSERT INTO `produk` VALUES (103, 'To Go Food Box Green Round', 'bulk', 75, 250000.000);
INSERT INTO `produk` VALUES (104, 'Cold Cup Coffe Chery Siren', 'bulk', 75, 250000.000);
INSERT INTO `produk` VALUES (105, 'Waterbottle Mint Lid Siren', 'bulk', 75, 280000.000);
INSERT INTO `produk` VALUES (106, 'Waterbottle Green Siren with Sleeve', 'bulk', 75, 275000.000);
INSERT INTO `produk` VALUES (107, 'Waterbottle Green Lid', 'bulk', 75, 235000.000);
INSERT INTO `produk` VALUES (108, 'Waterbottle Mint Coffe Leaf with Sleeve', 'bulk', 75, 250000.000);
INSERT INTO `produk` VALUES (109, 'Reuse Cold Cup Green', 'bulk', 75, 99000.000);
INSERT INTO `produk` VALUES (110, 'Waterbottle Mint Siren', 'bulk', 75, 550000.000);
INSERT INTO `produk` VALUES (111, 'Cold Cup Siren with Stopper', 'bulk', 75, 435000.000);
INSERT INTO `produk` VALUES (112, 'Tumbler Green Siren', 'bulk', 75, 535000.000);
INSERT INTO `produk` VALUES (113, 'Waterbottle Green Cherry Leaf', 'bulk', 75, 365000.000);
INSERT INTO `produk` VALUES (114, 'Mug Green Desktop', 'bulk', 75, 375000.000);
INSERT INTO `produk` VALUES (115, 'Waterbottle Mint Coffe Leaf', 'bulk', 75, 430000.000);
INSERT INTO `produk` VALUES (116, 'Waterbottle Mint', 'bulk', 75, 400000.000);
INSERT INTO `produk` VALUES (117, 'Tumbler Black with Black Siren', 'bulk', 75, 450000.000);
INSERT INTO `produk` VALUES (118, 'Starbucks Tumbler 16ss Classic Bunny S11135756 Aut22 (Cold cup P', 'seasonal', 50, 600000.000);
INSERT INTO `produk` VALUES (119, 'Starbucks Tumbler 16 Bunnies On Yarn Balls S11135759 Aut22 (Tumb', 'seasonal', 50, 355000.000);
INSERT INTO `produk` VALUES (120, 'Starbucks Waterbottle 14oz Bunnies In Sweaters S11135767 Aut22 (', 'seasonal', 50, 325000.000);
INSERT INTO `produk` VALUES (121, 'Starbucks Waterbottle 12ss Classic Bunny S11135764 Aut22 (Waterb', 'seasonal', 50, 550000.000);
INSERT INTO `produk` VALUES (122, 'Starbucks Cold Cup 18ss Bunnies Knit The Mn S11135761 Aut22 (Col', 'seasonal', 50, 555000.000);
INSERT INTO `produk` VALUES (123, 'Starbucks Cold Cup 16oz Knitting Bunnies S11135763 Aut22 (Coldcu', 'seasonal', 50, 385000.000);
INSERT INTO `produk` VALUES (124, 'Starbucks Waterbottle 20ss Gradient Coral S11135742 Aut22 (Water', 'seasonal', 50, 565000.000);
INSERT INTO `produk` VALUES (125, 'Starbucks Cold Cup 24oz Jewel Mint Blue S11135741 Aut22 (Cold cu', 'seasonal', 50, 425000.000);
INSERT INTO `produk` VALUES (126, 'Starbucks Cold Cup 24oz Jewel Mint Blue S11135741 Aut22 (Cold cu', 'seasonal', 50, 425000.000);
INSERT INTO `produk` VALUES (127, 'Starbucks Tumbler 16oz Dreamy Coral S11135736 Aut22 (Tumbler Pla', 'seasonal', 50, 285000.000);
INSERT INTO `produk` VALUES (128, 'Starbucks Waterbottle 18oz Siren In Coral Sea S11135744 Aut22 (W', 'seasonal', 50, 300000.000);
INSERT INTO `produk` VALUES (129, 'Starbucks Tumbler 16ss Siren In Coral Sea S11135732 Aut22 (Tumbl', 'seasonal', 50, 550000.000);
INSERT INTO `produk` VALUES (130, 'Starbucks Tumbler 16ss Faceted Gradint Blue S11135735 Aut22 (Tum', 'seasonal', 50, 565000.000);
INSERT INTO `produk` VALUES (131, 'Starbucks Tumbler 16ss Anniversary Blnd 22 S11135536 Aut22 (Cold', 'seasonal', 50, 675000.000);
INSERT INTO `produk` VALUES (132, 'Starbucks Tumbler 16oz Siren In Coral Sea S11135737 Aut22 (Tumbl', 'seasonal', 50, 385000.000);
INSERT INTO `produk` VALUES (133, 'Starbucks Tumbler 16ss Siren On Coral Reef S11135730 Aut22 (Tumb', 'seasonal', 50, 675000.000);
INSERT INTO `produk` VALUES (134, 'Starbucks Tumbler 16Oz People Of Indonesia Indigenous Animal And', 'seasonal', 50, 455000.000);
INSERT INTO `produk` VALUES (135, 'Starbucks Tumbler 16Oz Landmark Of Indonesia S0606223 (Beauty Of', 'seasonal', 50, 455000.000);
INSERT INTO `produk` VALUES (136, 'Starbucks Tumbler 16Oz People Of Indonesia S0606220 Beauty Of In', 'seasonal', 50, 455000.000);
INSERT INTO `produk` VALUES (137, 'Starbucks Tumbler 16Oz Culture Of Indonesia S0606222 (Beauty Of ', 'seasonal', 50, 455000.000);
INSERT INTO `produk` VALUES (138, 'Starbucks Plastic Reusable Water Bottle 1 Liter Dreamy Day Desig', 'seasonal', 50, 109000.000);
INSERT INTO `produk` VALUES (139, 'Starbucks Plastic Reusable Water Bottle 1 Liter Design Coffee Ti', 'seasonal', 50, 109000.000);
INSERT INTO `produk` VALUES (140, 'Starbucks Plastic Reusable Water Bottle 1 Liter Design Under Wat', 'seasonal', 50, 109000.000);
INSERT INTO `produk` VALUES (141, 'Almond Whirl Choco Chips Danish', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (142, 'Butter Croissant', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (143, 'Canele', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (144, 'Choco Chips Pistachio Pocket', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (145, 'Choco Chunk Praline Muffin', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (146, 'Cinnamon Rolls', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (147, 'Gluten Free Almond Financier', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (148, 'Madeleine', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (149, 'Smoked Beef Emmental Croissant', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (150, 'Wild Berry Muffin', 'bakery', 20, 36000.000);
INSERT INTO `produk` VALUES (151, 'Apple and Cinnamon Crumble', 'sweet & cakes', 20, 36000.000);
INSERT INTO `produk` VALUES (152, 'Banana Maltine Eclairs', 'sweet & cakes', 20, 36000.000);
INSERT INTO `produk` VALUES (153, 'Carrot Walnut Cake', 'sweet & cakes', 20, 36000.000);
INSERT INTO `produk` VALUES (154, 'Chocolate Ganache Raspberry Cake', 'sweet & cakes', 20, 36000.000);
INSERT INTO `produk` VALUES (155, 'Espresso Brownies', 'sweet & cakes', 20, 36000.000);
INSERT INTO `produk` VALUES (156, 'Avocado Medley Cake', 'sweet & cakes', 20, 36000.000);
INSERT INTO `produk` VALUES (157, 'French Cherry Tart', 'sweet & cakes', 20, 36000.000);
INSERT INTO `produk` VALUES (158, 'Green Tea and Ogura Swiss Roll', 'sweet & cakes', 20, 36000.000);
INSERT INTO `produk` VALUES (159, 'Bahn Mie Chicken Baguette', 'sandwiches', 20, 55000.000);
INSERT INTO `produk` VALUES (160, 'Honey Mustard Roast Beef Focaccia', 'sandwiches', 20, 55000.000);
INSERT INTO `produk` VALUES (161, 'Mediterranean Chicken Sandwich', 'sandwiches', 20, 55000.000);
INSERT INTO `produk` VALUES (162, 'Smoked Beef Mushroom and Cheese Panini', 'sandwiches', 20, 55000.000);
INSERT INTO `produk` VALUES (163, 'Spicy Roast Beef Dark Ciabatta', 'sandwiches', 20, 55000.000);
INSERT INTO `produk` VALUES (164, 'Tuna Black Pepper Sour Dough Bread', 'sandwiches', 20, 55000.000);

SET FOREIGN_KEY_CHECKS = 1;
