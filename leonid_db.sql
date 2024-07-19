-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 30, 2024 at 11:49 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leonid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `img` text NOT NULL,
  `pice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `content`, `img`, `pice`) VALUES
(8, 'Mora', 'Main currency unit used to purchase various items and upgrades', 'https://i.pinimg.com/474x/64/7d/8f/647d8f133b2e5dc3f50b586a62c2119f.jpg', 100),
(9, 'Primogem', 'Primogems are the premium currency in Genshin Impact.', 'https://ih1.redbubble.net/image.1716594910.7371/st,small,507x507-pad,600x600,f8f8f8.webp', 500),
(10, ' Material', ' Materials that are used for Character Level-Up', 'https://i.redd.it/15mmazrpt4cb1.jpg', 200),
(11, 'Blessing of the Welkin Moon', 'The Blessing of the Welkin Moon is a 30 day subscription offer in Genshin Impact. ', 'https://image.api.playstation.com/vulcan/img/rnd/202009/2511/MNEps3zCwgQKEdCFZgMZZex1.png', 2000),
(12, 'Genesis Crystal', 'Genesis Crystals are the paid currency in Genshin Impact.', 'https://staticg.sportskeeda.com/editor/2021/11/e8c52-16366749020446-1920.jpg?w=840', 1000),
(13, 'Anemoculus', 'The Anemoculus is an Adventure Item that can be found scattered across Mondstadt', 'https://skycoach.gg/storage/uploads/products/anemoculus-collecting1695892573_picture_og.jpg', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
