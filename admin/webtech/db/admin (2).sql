-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 08:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `first name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `username` varchar(16) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` int(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`first name`, `last_name`, `username`, `gender`, `email`, `phone`, `password`) VALUES
('Md Hridoy', 'Sheikh', 'admin', 'male', 'mdhidoyhassan@gmail.com', 1735300454, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `block_list`
--

CREATE TABLE `block_list` (
  `id` int(11) NOT NULL,
  `first_name` varchar(16) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `username` varchar(12) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `type` varchar(10) NOT NULL,
  `img` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block_list`
--

INSERT INTO `block_list` (`id`, `first_name`, `last_name`, `username`, `DOB`, `gender`, `email`, `phone_number`, `password`, `type`, `img`) VALUES
(22, 'jakiya', 'jannat', 'jakiya43', '2022-03-28', 'female', 'jakiya56@gmail.com', '017444444555', '123', 'Seller', '../img/wp4517170-call-of-duty-modern-warfare-2019-wallpapers.jpg'),
(24, 'Hridoy', 'Sheikh', 'admin', '2022-03-28', 'male', 'mdhidoyhassan@gmail.com', '12233123', '123', 'Seller', '../img/239027_wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `date` varchar(12) NOT NULL,
  `sender` varchar(32) NOT NULL,
  `receiver` varchar(32) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `notice` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `date`, `notice`) VALUES
(5, '2022-03-10', 'hi everyone...'),
(10, '2022-03-23', 'How are you? Welcome to our GameKeysBD Family. '),
(12, '2022-04-17', 'hello everyone this is your admin.'),
(14, '2022-03-25', 'Happy Friday....');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `game_name` varchar(32) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `platfrom` varchar(32) NOT NULL,
  `region` varchar(32) NOT NULL,
  `gametype` varchar(64) NOT NULL,
  `device` varchar(16) NOT NULL,
  `date` date NOT NULL,
  `seller_name` varchar(32) NOT NULL,
  `img` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `buyer` varchar(32) NOT NULL,
  `seller` varchar(32) NOT NULL,
  `game_name` varchar(32) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `pay_method` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `username` varchar(12) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `type` varchar(10) NOT NULL,
  `img` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `DOB`, `gender`, `email`, `phone_number`, `password`, `type`, `img`) VALUES
(1, 'Hridoy', 'Sheikh', 'admin', '1998-03-17', 'male', 'mdhidoyhassan@gmail.com', '+8801715424207', 'admin', 'Admin', '../img/IMG_20170731_143523_069.jpg'),
(17, 'Hridoy', 'Sheikh', 'Mansib1', '2022-02-27', 'male', 'mdhidoyhassan@gmail.com', '+8801715424207', '123', 'Seller', '../img/wp4517182-call-of-duty-modern-warfare-2019-wallpapers.jpg'),
(19, 'qwe', 'QWE', 'qsc', '2022-03-18', 'other', 'qwe@gmail.com', '01735300454', '123', 'Seller', '../img/wp4517216-call-of-duty-modern-warfare-2019-wallpapers.png'),
(25, 'Hridoy', 'Sheikh', 'HSAGENT47', '2022-03-23', 'male', 'mdhidoyhassan@gmail.com', '+8801715424207', '123', 'Buyer', '../img/wp4517172-call-of-duty-modern-warfare-2019-wallpapers.jpg'),
(28, 'ali', 'mansib', 'ali76', '2022-03-28', 'male', 'ali765@gmail.com', '178222222222222', '123', 'Seller', '../img/wp4517174-call-of-duty-modern-warfare-2019-wallpapers.jpg'),
(29, 'jaman', 'ahamad', 'jaman123', '1998-02-05', 'female', 'jaman54@gmail.com', '018777777777', '123', 'Buyer', '../img/239071_wallpaper.jpg'),
(30, 'md', 'jawad', 'jawad123', '1998-12-31', 'male', 'jawad12@gmail.com', '0175555555', '123', 'Buyer', '../img/wp4517179-call-of-duty-modern-warfare-2019-wallpapers.jpg'),
(32, 'Hridoy', 'Sheikh', 'hs48', '2022-03-28', 'male', 'mdhidoyhassan@gmail.com', '01883278632', '1234', 'Buyer', '../img/239062_wallpaper.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block_list`
--
ALTER TABLE `block_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block_list`
--
ALTER TABLE `block_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
