-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 06:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starbucks`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode_produk` int(11) NOT NULL,
  `nama_produk` varchar(64) NOT NULL,
  `id_tipe_produk_fk` int(11) NOT NULL,
  `stok_tersedia` int(10) UNSIGNED DEFAULT NULL,
  `harga` decimal(10,3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`, `id_tipe_produk_fk`, `stok_tersedia`, `harga`) VALUES
(1, '7 Seeds Cookie', 1, 3, '39000.000'),
(2, 'Almond Croissant', 1, 20, '36000.000'),
(3, 'Bagel Bites', 1, 20, '37000.000'),
(4, 'Beef Sausages  &  Cheese Croissant', 1, 0, '36000.000'),
(5, 'Cheese Bagles', 1, 20, '32000.000'),
(6, 'Chocolate Croissant', 1, 20, '36000.000'),
(7, 'Cinamon Roll', 1, 20, '33000.000'),
(8, 'Cinnamon Chocolate Marble Cake', 1, 20, '40000.000'),
(9, 'Espresso Brownie', 1, 20, '29000.000'),
(10, 'Nutella Bombolone', 1, 20, '39000.000'),
(11, 'Old Fashioned Blueberry Muffin', 1, 20, '30000.000'),
(12, 'Peanut Butter Cornflakes Cookie', 1, 20, '20000.000'),
(13, 'Pillow Glazed Doughnut', 1, 20, '39000.000'),
(14, 'Raisin Oatmeal Scones', 1, 20, '41000.000'),
(15, 'Spicy Tuna Bread', 1, 20, '29000.000'),
(16, 'Srikaya Swirl Danish', 1, 20, '40000.000'),
(17, 'Sumatra Chocolate Eclair', 1, 20, '41000.000'),
(18, 'Triple Chocolate Muffin', 1, 20, '39000.000'),
(19, 'Tuna Puff', 1, 3, '28000.000'),
(20, 'Avocado Medley Cake', 11, 0, '36000.000'),
(21, 'Classic Dark Chocolate Cake', 11, 20, '39000.000'),
(23, 'New York Cheesecake', 11, 20, '38000.000'),
(24, 'Oreo Cheesecake', 11, 20, '17000.000'),
(25, 'Scarlet Velvet Cake', 11, 20, '39000.000'),
(26, 'Starbucks Pandan Gula Aren Cake', 11, 20, '29000.000'),
(27, 'Starbucks Vanilla Keju Cake', 11, 20, '30000.000'),
(28, 'Via Red Velvet Roll Cake', 11, 20, '29000.000'),
(29, 'Banana Cake', 6, 20, '21000.000'),
(30, 'Caramel Stroopwafel', 6, 20, '15000.000'),
(31, 'Chocolate Chip Cookies', 6, 20, '19000.000'),
(32, 'Chocolate Stroopwafel', 6, 20, '15000.000'),
(33, 'Juices', 6, 20, '21000.000'),
(34, 'Raisin Oatmeal Cookies', 6, 20, '20000.000'),
(35, 'Beef Filone', 8, 20, '55000.000'),
(36, 'Classic Tuna Toastie', 8, 20, '29000.000'),
(37, 'Grilled Smooked Beef & Cheese Decker', 8, 20, '36000.000'),
(38, 'Peanut Butter Panini', 8, 20, '41000.000'),
(39, 'Smoked Beef Mushroom & Cheese Panini', 8, 20, '49000.000'),
(40, 'Trio Mixed Roll', 8, 20, '44000.000'),
(41, 'Tuna Cheese Whole Wheat Panini', 8, 20, '48000.000'),
(43, 'All Day Bfast Bun', 8, 20, '55000.000'),
(44, 'Cheese Quiche', 9, 20, '37000.000'),
(45, 'Smoked Beef Quiche', 9, 20, '35000.000'),
(46, 'Asian Dolce Frappucino', 2, 20, '52000.000'),
(47, 'Caramel Coffee Jelly Frappucino', 2, 0, '57000.000'),
(48, 'Caramel Java Chip Frappucino', 2, 30, '57000.000'),
(49, 'Coffee Frappucino', 2, 0, '44000.000'),
(50, 'Dark Mocha Frappucino', 2, 30, '57000.000'),
(51, 'Espresso Frappucino', 2, 0, '48000.000'),
(52, 'Hazelnut Frappucino', 2, 30, '50000.000'),
(53, 'Java Chip Frappucino', 2, 0, '57000.000'),
(54, 'Mocha Frappucino', 3, 30, '53000.000'),
(55, 'Mocha Jelly Frappucino', 2, 0, '55000.000'),
(56, 'Caramel Cream Frappucino', 2, 0, '57000.000'),
(57, 'Double Chocolate Cream Frappucino', 2, 30, '55000.000'),
(58, 'Green Tea Cream Frappucino', 2, 0, '55000.000'),
(59, 'Vanilla Cream Frappucino', 2, 0, '55000.000'),
(60, 'Mango Passion Frappucino', 2, 10, '47000.000'),
(61, 'Rapsberry Currant Frappucino', 2, 0, '47000.000'),
(62, 'Cold Brew', 3, 30, '41000.000'),
(63, 'reshly Brewed Coffee', 3, 0, '23000.000'),
(64, 'Misto', 3, 20, '23000.000'),
(65, 'Vanilla Sweet Cream Cold Brew', 3, 0, '46000.000'),
(66, 'Caffe Americano', 5, 20, '34000.000'),
(67, 'Caffe Latte', 5, 0, '44000.000'),
(68, 'Caffe Mocha', 5, 0, '53000.000'),
(69, 'Cappucino', 5, 0, '44000.000'),
(70, 'Caramel Macchiato', 5, 0, '57000.000'),
(71, 'Cocoa Cappucino', 5, 0, '53000.000'),
(72, 'Cold Foam', 5, 30, '41000.000'),
(73, 'Double Shot Iced Shaken Espresso', 5, 0, '48000.000'),
(74, 'Espresso Con Panna', 5, 0, '45000.000'),
(75, 'Espresso Macchiato', 5, 30, '53000.000'),
(76, 'lat White', 5, 0, '44000.000'),
(77, 'Iced Espresso and Matcha Fusion', 5, 0, '53000.000'),
(78, 'Ristretto Bianco', 5, 0, '53000.000'),
(79, 'Signature Chocolate', 7, 0, '50000.000'),
(80, 'Iced Shaken Lemonade Tea', 12, 0, '22000.000'),
(81, 'TEAVANA Chai Hot Tea', 12, 0, '22000.000'),
(82, 'TEAVANA Chamomile Hot Tea', 12, 0, '22000.000'),
(83, 'TEAVANA Citrus Mint Hot Tea', 12, 0, '22000.000'),
(84, 'TEAVANA Earl Grey Hot Tea', 12, 0, '22000.000'),
(85, 'TEAVANA English Breakfast Hot Tea', 12, 0, '22000.000'),
(86, 'TEAVANA Mint Blend Hot Tea', 12, 0, '22000.000'),
(87, 'Black Tea Latte', 12, 0, '22000.000'),
(88, 'Chai Tea Latte', 12, 0, '22000.000'),
(89, 'Earl Grey Tea Latte', 12, 0, '22000.000'),
(90, 'Green Tea Latte', 12, 0, '22000.000'),
(91, 'Cold Cup Translucent Mint', 4, 75, '250000.000'),
(92, 'Cold Cup Cooper', 4, 79, '425000.000'),
(93, 'Tumbler Wordmark Cooper', 4, 75, '450000.000'),
(94, 'Tumbler Siren Art Cooper', 4, 75, '450000.000'),
(95, 'Tumbler Matter Green', 4, 75, '450000.000'),
(96, 'Waterbottle Green', 4, 75, '395000.000'),
(97, 'Waterbottle Mint', 4, 75, '395000.000'),
(98, 'Waterbottle Siren Art Mint', 4, 75, '485000.000'),
(99, 'Waterbottle Siren Mint', 4, 75, '500000.000'),
(100, 'Waterbottle Touple Siren Art', 4, 75, '550000.000'),
(101, 'Waterbottle Wordmark Green', 4, 75, '425000.000'),
(102, 'Straw Mint', 4, 75, '150000.000'),
(103, 'To Go Food Box Green Round', 4, 75, '250000.000'),
(104, 'Cold Cup Coffe Chery Siren', 4, 75, '250000.000'),
(105, 'Waterbottle Mint Lid Siren', 4, 75, '280000.000'),
(106, 'Waterbottle Green Siren with Sleeve', 4, 75, '275000.000'),
(107, 'Waterbottle Green Lid', 4, 75, '235000.000'),
(108, 'Waterbottle Mint Coffe Leaf with Sleeve', 4, 75, '250000.000'),
(109, 'Reuse Cold Cup Green', 4, 75, '99000.000'),
(110, 'Waterbottle Mint Siren', 4, 75, '550000.000'),
(111, 'Cold Cup Siren with Stopper', 4, 75, '435000.000'),
(112, 'Tumbler Green Siren', 4, 75, '535000.000'),
(113, 'Waterbottle Green Cherry Leaf', 4, 75, '365000.000'),
(114, 'Mug Green Desktop', 4, 75, '375000.000'),
(115, 'Waterbottle Mint Coffe Leaf', 4, 75, '430000.000'),
(116, 'Waterbottle Mint', 4, 75, '400000.000'),
(117, 'Tumbler Black with Black Siren', 4, 75, '450000.000'),
(118, 'Starbucks Tumbler 16ss Classic Bunny S11135756 Aut22 (Cold cup P', 10, 50, '600000.000'),
(119, 'Starbucks Tumbler 16 Bunnies On Yarn Balls S11135759 Aut22 (Tumb', 10, 50, '355000.000'),
(120, 'Starbucks Waterbottle 14oz Bunnies In Sweaters S11135767 Aut22 (', 10, 50, '325000.000'),
(121, 'Starbucks Waterbottle 12ss Classic Bunny S11135764 Aut22 (Waterb', 10, 50, '550000.000'),
(122, 'Starbucks Cold Cup 18ss Bunnies Knit The Mn S11135761 Aut22 (Col', 10, 50, '555000.000'),
(123, 'Starbucks Cold Cup 16oz Knitting Bunnies S11135763 Aut22 (Coldcu', 10, 50, '385000.000'),
(124, 'Starbucks Waterbottle 20ss Gradient Coral S11135742 Aut22 (Water', 10, 50, '565000.000'),
(125, 'Starbucks Cold Cup 24oz Jewel Mint Blue S11135741 Aut22 (Cold cu', 10, 50, '425000.000'),
(126, 'Starbucks Cold Cup 24oz Jewel Mint Blue S11135741 Aut22 (Cold cu', 10, 50, '425000.000'),
(127, 'Starbucks Tumbler 16oz Dreamy Coral S11135736 Aut22 (Tumbler Pla', 10, 50, '285000.000'),
(128, 'Starbucks Waterbottle 18oz Siren In Coral Sea S11135744 Aut22 (W', 10, 50, '300000.000'),
(129, 'Starbucks Tumbler 16ss Siren In Coral Sea S11135732 Aut22 (Tumbl', 10, 50, '550000.000'),
(130, 'Starbucks Tumbler 16ss Faceted Gradint Blue S11135735 Aut22 (Tum', 10, 50, '565000.000'),
(131, 'Starbucks Tumbler 16ss Anniversary Blnd 22 S11135536 Aut22 (Cold', 10, 50, '675000.000'),
(132, 'Starbucks Tumbler 16oz Siren In Coral Sea S11135737 Aut22 (Tumbl', 10, 50, '385000.000'),
(133, 'Starbucks Tumbler 16ss Siren On Coral Reef S11135730 Aut22 (Tumb', 10, 50, '675000.000'),
(134, 'Starbucks Tumbler 16Oz People Of Indonesia Indigenous Animal And', 10, 50, '455000.000'),
(135, 'Starbucks Tumbler 16Oz Landmark Of Indonesia S0606223 (Beauty Of', 10, 50, '455000.000'),
(136, 'Starbucks Tumbler 16Oz People Of Indonesia S0606220 Beauty Of In', 10, 50, '455000.000'),
(137, 'Starbucks Tumbler 16Oz Culture Of Indonesia S0606222 (Beauty Of ', 10, 50, '455000.000'),
(138, 'Starbucks Plastic Reusable Water Bottle 1 Liter Dreamy Day Desig', 10, 50, '109000.000'),
(139, 'Starbucks Plastic Reusable Water Bottle 1 Liter Design Coffee Ti', 10, 50, '109000.000'),
(140, 'Starbucks Plastic Reusable Water Bottle 1 Liter Design Under Wat', 10, 50, '109000.000'),
(141, 'Almond Whirl Choco Chips Danish', 1, 20, '36000.000'),
(142, 'Butter Croissant', 1, 20, '36000.000'),
(143, 'Canele', 1, 20, '36000.000'),
(144, 'Choco Chips Pistachio Pocket', 1, 20, '36000.000'),
(145, 'Choco Chunk Praline Muffin', 1, 20, '36000.000'),
(146, 'Cinnamon Rolls', 1, 20, '36000.000'),
(147, 'Gluten Free Almond Financier', 1, 20, '36000.000'),
(148, 'Madeleine', 1, 20, '36000.000'),
(149, 'Smoked Beef Emmental Croissant', 1, 20, '36000.000'),
(150, 'Wild Berry Muffin', 1, 20, '36000.000'),
(151, 'Apple and Cinnamon Crumble', 11, 20, '36000.000'),
(152, 'Banana Maltine Eclairs', 11, 20, '36000.000'),
(153, 'Carrot Walnut Cake', 11, 20, '36000.000'),
(154, 'Chocolate Ganache Raspberry Cake', 11, 20, '36000.000'),
(155, 'Espresso Brownies', 11, 20, '36000.000'),
(156, 'Avocado Medley Cake', 11, 20, '36000.000'),
(157, 'French Cherry Tart', 11, 20, '36000.000'),
(158, 'Green Tea and Ogura Swiss Roll', 11, 20, '36000.000'),
(159, 'Bahn Mie Chicken Baguette', 8, 20, '55000.000'),
(160, 'Honey Mustard Roast Beef Focaccia', 8, 20, '55000.000'),
(161, 'Mediterranean Chicken Sandwich', 8, 20, '55000.000'),
(162, 'Smoked Beef Mushroom and Cheese Panini', 8, 20, '55000.000'),
(163, 'Spicy Roast Beef Dark Ciabatta', 8, 20, '55000.000'),
(164, 'Tuna Black Pepper Sour Dough Bread', 8, 20, '55000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`) USING BTREE,
  ADD KEY `id_tipe_produk_fk` (`id_tipe_produk_fk`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_tipe_produk_fk`) REFERENCES `tipe_produk` (`id_tipe_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
