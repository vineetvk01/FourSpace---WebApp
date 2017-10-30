-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 03:07 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fourspace_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(200) NOT NULL,
  `color` varchar(50) NOT NULL,
  `promotions` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `last_edited` datetime NOT NULL,
  `last_published` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `state` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `recommended` enum('0','1') NOT NULL,
  `verified` enum('0','1') NOT NULL,
  `popular` enum('0','1') NOT NULL,
  `area` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `range_type` enum('premium','budget','luxury') NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  `cover_img` text NOT NULL COMMENT 'url',
  `created` datetime NOT NULL,
  `last_edited` datetime NOT NULL,
  `last_published` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `recommended`, `verified`, `popular`, `area`, `location`, `range_type`, `opening_time`, `closing_time`, `cover_img`, `created`, `last_edited`, `last_published`) VALUES
(1, 'NDC', '1', '0', '1', 'Whitefield', 'Bangalore', 'premium', '09:00:00', '20:00:00', 'some url.png', '2017-10-06 16:28:30', '2017-10-06 10:30:26', '2017-10-06 08:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `partner_details`
--

CREATE TABLE `partner_details` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `state` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `website` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner_details`
--

INSERT INTO `partner_details` (`id`, `about`, `address`, `city`, `pincode`, `state`, `email`, `contact`, `website`) VALUES
(1, 'they sell sofas and beds', 'somewhere in whitefiled', 'bangalore', '560048', 'Karnatka', 'someemail@email.com', '9999999999', 'www.ndc.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_image` text NOT NULL,
  `created` datetime NOT NULL,
  `last_edited` datetime NOT NULL,
  `cat_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `banner` text NOT NULL,
  `cities` int(11) NOT NULL,
  `promotion_image` text NOT NULL,
  `active` enum('0','1') NOT NULL,
  `created` datetime NOT NULL,
  `last_edited` datetime NOT NULL,
  `last_published` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_amenities`
--

CREATE TABLE `p_amenities` (
  `id` int(11) NOT NULL,
  `p_key` int(11) NOT NULL,
  `amenities` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_amenities`
--

INSERT INTO `p_amenities` (`id`, `p_key`, `amenities`) VALUES
(1, 1, 'parking'),
(2, 1, 'washroom');

-- --------------------------------------------------------

--
-- Table structure for table `p_catalog`
--

CREATE TABLE `p_catalog` (
  `id` int(11) NOT NULL,
  `p_key` int(11) NOT NULL,
  `items` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_catalog`
--

INSERT INTO `p_catalog` (`id`, `p_key`, `items`) VALUES
(1, 1, 'Sofas'),
(2, 1, 'Beds');

-- --------------------------------------------------------

--
-- Table structure for table `p_categories`
--

CREATE TABLE `p_categories` (
  `id` int(11) NOT NULL,
  `p_key` int(11) NOT NULL,
  `cat_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_categories`
--

INSERT INTO `p_categories` (`id`, `p_key`, `cat_key`) VALUES
(1, 1, 22),
(2, 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `p_cities`
--

CREATE TABLE `p_cities` (
  `id` int(11) NOT NULL,
  `p_key` int(11) NOT NULL,
  `city_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_cities`
--

INSERT INTO `p_cities` (`id`, `p_key`, `city_key`) VALUES
(1, 1, 22),
(2, 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `p_language`
--

CREATE TABLE `p_language` (
  `id` int(11) NOT NULL,
  `p_key` int(11) NOT NULL,
  `language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_language`
--

INSERT INTO `p_language` (`id`, `p_key`, `language`) VALUES
(1, 1, 'English'),
(2, 1, 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `p_payment`
--

CREATE TABLE `p_payment` (
  `id` int(11) NOT NULL,
  `p_key` int(11) NOT NULL,
  `cash` enum('0','1') NOT NULL,
  `card` enum('0','1') NOT NULL,
  `online_transfer` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_payment`
--

INSERT INTO `p_payment` (`id`, `p_key`, `cash`, `card`, `online_transfer`) VALUES
(1, 1, '1', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `p_product`
--

CREATE TABLE `p_product` (
  `id` int(11) NOT NULL,
  `p_key` int(11) NOT NULL,
  `product_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_product`
--

INSERT INTO `p_product` (`id`, `p_key`, `product_key`) VALUES
(1, 1, 12),
(2, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `p_rating`
--

CREATE TABLE `p_rating` (
  `id` int(11) NOT NULL,
  `p_key` int(11) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_rating`
--

INSERT INTO `p_rating` (`id`, `p_key`, `rating`) VALUES
(1, 1, 4),
(2, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `id` int(11) NOT NULL,
  `p_key` int(11) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`id`, `p_key`, `img_url`) VALUES
(1, 1, 'url1.png'),
(2, 1, 'url2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_details`
--
ALTER TABLE `partner_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_amenities`
--
ALTER TABLE `p_amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_catalog`
--
ALTER TABLE `p_catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_categories`
--
ALTER TABLE `p_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_cities`
--
ALTER TABLE `p_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_language`
--
ALTER TABLE `p_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_payment`
--
ALTER TABLE `p_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_product`
--
ALTER TABLE `p_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_rating`
--
ALTER TABLE `p_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner_details`
--
ALTER TABLE `partner_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_amenities`
--
ALTER TABLE `p_amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_catalog`
--
ALTER TABLE `p_catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_categories`
--
ALTER TABLE `p_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_cities`
--
ALTER TABLE `p_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_language`
--
ALTER TABLE `p_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_payment`
--
ALTER TABLE `p_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_product`
--
ALTER TABLE `p_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_rating`
--
ALTER TABLE `p_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
