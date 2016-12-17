-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 07:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bpt`
--

-- --------------------------------------------------------

--
-- Table structure for table `bp_article`
--

CREATE TABLE `bp_article` (
  `id_article` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title_article` varchar(100) NOT NULL,
  `date_article` datetime NOT NULL,
  `content_article` varchar(100) NOT NULL,
  `image_article` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bp_article`
--

INSERT INTO `bp_article` (`id_article`, `id_category`, `id_user`, `title_article`, `date_article`, `content_article`, `image_article`, `caption`) VALUES
(1, 2, 1, 'PILGUB', '2016-12-03 04:14:54', 'PLIGUB MAKIN SERU BANGET', 'asset/images/pligub.jpg', ''),
(2, 1, 1, 'test', '2016-12-07 05:46:30', 'asd', 'asset/images/cherry-jpg-inspirations-website.jpg', 'event ');

-- --------------------------------------------------------

--
-- Table structure for table `bp_bod`
--

CREATE TABLE `bp_bod` (
  `id_bod` int(11) NOT NULL,
  `title_bod` varchar(100) NOT NULL,
  `name_bod` varchar(100) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `content_bod` varchar(100) NOT NULL,
  `image_bod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bp_category`
--

CREATE TABLE `bp_category` (
  `id_category` int(11) NOT NULL,
  `nama_category` varchar(100) NOT NULL,
  `description_category` longtext NOT NULL,
  `image_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bp_category`
--

INSERT INTO `bp_category` (`id_category`, `nama_category`, `description_category`, `image_category`) VALUES
(1, 'event', 'motorola', 'asset/images/moto.jpg'),
(2, 'News', 'PILGUB', 'asset/images/pligub.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bp_page`
--

CREATE TABLE `bp_page` (
  `id_page` int(11) NOT NULL,
  `title_page` varchar(200) NOT NULL,
  `content_page` longtext NOT NULL,
  `image_page` varchar(200) NOT NULL,
  `date_page` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bp_setting`
--

CREATE TABLE `bp_setting` (
  `id_setting` int(11) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bp_testimonial`
--

CREATE TABLE `bp_testimonial` (
  `id_testimonial` int(11) NOT NULL,
  `testimonial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bp_user`
--

CREATE TABLE `bp_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `permission` tinyint(2) NOT NULL COMMENT '1.admin , 2.user',
  `date_regis` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bp_user`
--

INSERT INTO `bp_user` (`id_user`, `username`, `password`, `fullname`, `email`, `permission`, `date_regis`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@gmail.com', 1, '0000-00-00 00:00:00'),
(2, 'zuhdi yak', '7815696ecbf1c96e6894b779456d330e', 'zuhdi rabbani', 'zuhdi@dzilla.com', 2, '2016-12-01 11:59:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bp_article`
--
ALTER TABLE `bp_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `bp_bod`
--
ALTER TABLE `bp_bod`
  ADD PRIMARY KEY (`id_bod`);

--
-- Indexes for table `bp_category`
--
ALTER TABLE `bp_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `bp_page`
--
ALTER TABLE `bp_page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `bp_setting`
--
ALTER TABLE `bp_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `bp_testimonial`
--
ALTER TABLE `bp_testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- Indexes for table `bp_user`
--
ALTER TABLE `bp_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bp_article`
--
ALTER TABLE `bp_article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bp_bod`
--
ALTER TABLE `bp_bod`
  MODIFY `id_bod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_category`
--
ALTER TABLE `bp_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bp_page`
--
ALTER TABLE `bp_page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_setting`
--
ALTER TABLE `bp_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_testimonial`
--
ALTER TABLE `bp_testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_user`
--
ALTER TABLE `bp_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
