-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 05:47 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `home_type` enum('Estate','Apartment') NOT NULL,
  `size` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `specifications` tinytext NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `home_type`, `size`, `image`, `specifications`, `description`) VALUES
(1, 'Wooden Cottage', 'Estate', 1500, 'wooden-cottage.jpg', '<li>Living Room</li>\r\n<li>Kitchen</li>\r\n<li>Two Bedrooms</li>\r\n<li>Office</li>\r\n<li>Bathroom</li>', '<p>We designed this wooden cottage for the purpose of living a quite family-life in a town filled with beautiful scenery. The wooden interior/exterior immerses you in this type of environment.</p>'),
(2, 'Attached Flat', 'Apartment', 1200, 'apartment-complex.jpg', '<li>Living Room</li>\r\n<li>Open Kitchen</li>\r\n<li>Bathroom</li>\r\n<li>Bedroom</li>\r\n', '<p>Even though the housing accommodation is ideal for couples or single tenants. It makes the most of its small space by offering an all-in-one living room, meaning your kitchen, workspace, and living room is in the same area.</p>\r\n'),
(3, 'Luxury Villa', 'Estate', 2400, 'backyard-villa.jpg', '<li>3 Bedrooms</li>\r\n<li>1 Office</li>\r\n<li>Living Room</li>\r\n<li>Pool and Outdoor Area</li>\r\n<li>Two Car Garage</li>\r\n', 'This large estate is ideal for a large family or a high-income one. If you want a home where you can combine everyday life at home with recreational activities, this home is sufficient enough for this purpose. The glass entrances allow you to interact with the outside environment from your own home.'),
(4, 'Slant Home', 'Estate', 2000, 'contemporary-home.jpg', '<li>Living Room and Open Kitchen</li>\r\n<li>Two Bedrooms</li>\r\n<li>One Bathroom</li>\r\n<li>Two Garages</li>\r\n<li>Basement</li>', '<p>Beautiful on the inside and beautiful on the outside. This modern home''s interior renovations give life to your home and offer all your amenities for everyday life at home. It also features a multi-car garage with a driveway.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
