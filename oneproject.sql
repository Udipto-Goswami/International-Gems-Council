-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 09:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `shape_cut` varchar(255) NOT NULL,
  `carat_weight` varchar(255) NOT NULL,
  `color_grade` varchar(255) NOT NULL,
  `calarity_grade` varchar(255) NOT NULL,
  `cut_grade` varchar(255) NOT NULL,
  `polish` varchar(255) NOT NULL,
  `symmetry_cut` varchar(255) NOT NULL,
  `measurements` varchar(255) NOT NULL,
  `table_size` varchar(255) NOT NULL,
  `crown_height` varchar(255) NOT NULL,
  `pavilion_depth` varchar(255) NOT NULL,
  `girdle_thickness` varchar(255) NOT NULL,
  `culet` varchar(255) NOT NULL,
  `total_depth` varchar(255) NOT NULL,
  `fluorescence` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `number`, `description`, `shape_cut`, `carat_weight`, `color_grade`, `calarity_grade`, `cut_grade`, `polish`, `symmetry_cut`, `measurements`, `table_size`, `crown_height`, `pavilion_depth`, `girdle_thickness`, `culet`, `total_depth`, `fluorescence`, `comments`) VALUES
(111111, 'DC', 'NATURAL DIAMOND', 'ROUND BRILLIANT', '3.33', 'H', 'VS 2', 'EXCELLENT', 'EXCELLENT', 'EXCELLENT', '9.49 - 9.55 * 5.49', '58.5', '15.5% - 34.4%', '44.4% - 41.1', 'Medium To Slightly Thick', 'Pointed', '62.3', 'NONE', '');

-- --------------------------------------------------------

--
-- Table structure for table `jproducts`
--

CREATE TABLE `jproducts` (
  `id` int(20) NOT NULL,
  `ctype` varchar(2) NOT NULL DEFAULT 'JC',
  `product_no` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `clarity` varchar(30) NOT NULL,
  `gross_weight` varchar(30) NOT NULL,
  `diamond_weight` varchar(30) NOT NULL,
  `color_stwt` varchar(30) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jproducts`
--

INSERT INTO `jproducts` (`id`, `ctype`, `product_no`, `description`, `weight`, `clarity`, `gross_weight`, `diamond_weight`, `color_stwt`, `product_image`, `date_created`) VALUES
(64, 'JC', '14112', 'The finest of turquoise reaches a maximum Mohs hardness of just under 6, or slightly more than window glass. Characteristically a cryptocrystalline mineral, turquoise almost never forms single crystals, and all of its properties are highly variable. Its crystal system is proven to be triclinic via X-ray diffraction testing. With lower hardness comes lower specific gravity (2.60–2.90) and greater porosity: These properties are dependent on grain size. The lustre of turquoise is typically waxy to subvitreous, and transparency is usually opaque, but may be semitranslucent in thin sections. Colour is as variable as the mineral\'s other properties, ranging from white to a powder blue to a sky blue, and from a blue-green to a yellowish green. The blue is attributed to idiochromatic copper while the green may be the result of either iron impurities (replacing aluminium) or dehydration.', '23.33', 'VS', '22', '11', '55.5', 'turquoise.png', '2017-09-16 02:55:46'),
(66, 'JC', 'IGC-2331', 'RFC-GE internationally valid and, described  in market', '23', 'VS', '1', '11', '232', 'iolite.jpg', '2017-09-16 03:03:08'),
(67, 'JC', '23110', 'POI-720', ' 23', 'VS', ' 121', ' 11', ' 54.3', 'sapphire.png', '2017-09-16 03:03:43'),
(68, 'JC', '1211', 'PO-122', '1231', 'VS', '12', '21', '43.3', 'sunstone.png', '2017-09-16 03:04:13'),
(70, 'JC', 'IGC-17713', 'A ruby is a pink to blood-red colored gemstone, a variety of the mineral corundum (aluminium oxide). Other varieties of gem-quality corundum are called sapphires. Ruby is one of the traditional cardinal gems, together with amethyst, sapphire, emerald, and diamond.The word ruby comes from ruber, Latin for red. The color of a ruby is due to the element chromium. The quality of a ruby is determined by its color, cut, and clarity, which, along with carat weight, affect its value. The brightest and most valuable shade of red called blood-red or pigeon blood, commands a large premium over other rubies of similar quality. After color follows clarity: similar to diamonds, a clear stone will command a premium, but a ruby without any needle-like rutile inclusions may indicate that the stone has been treated. Ruby is the traditional birthstone for July and is usually more pink than garnet, although some rhodolite garnets have a similar pinkish hue to most rubies.', '1.2', 'VS', '2.2', '1.11', '55.5', '240px-Ruby_gem.JPG', '2017-09-30 01:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'admin', 'bff0cc42103de1b4721370e84dc24f635a7afeca41198c9b3e03946a1b6b7191d14356408a5e57ce6daf77e6e800c66fac7ab0482d57d48d23e6808e4b562daa', 'admin', '2017-08-01 00:00:00', NULL),
(15, 'dave', 'd7d2f602e155ba700ed76c48d9a48009b9383e8d17435bfb0fe8ad7c664d4002f16cc7a65c6fb066963714a794f96441ef7f9b9c1b1456acfb9225cbad474fb0', 'admin', '2017-10-08 22:55:58', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jproducts`
--
ALTER TABLE `jproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jproducts`
--
ALTER TABLE `jproducts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
