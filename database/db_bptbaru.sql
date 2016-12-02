-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Des 2016 pada 17.09
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

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
-- Struktur dari tabel `bp_bod`
--

CREATE TABLE IF NOT EXISTS `bp_bod` (
  `id_bod` int(11) NOT NULL,
  `title_bod` varchar(100) NOT NULL,
  `name_bod` varchar(100) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `content_bod` varchar(100) NOT NULL,
  `image_bod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_category`
--

CREATE TABLE IF NOT EXISTS `bp_category` (
  `id_category` int(11) NOT NULL,
  `nama_category` varchar(100) NOT NULL,
  `description_category` longtext NOT NULL,
  `image_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_news`
--

CREATE TABLE IF NOT EXISTS `bp_news` (
  `id_news` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title_news` varchar(100) NOT NULL,
  `date_news` datetime NOT NULL,
  `content_news` varchar(100) NOT NULL,
  `image_news` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_page`
--

CREATE TABLE IF NOT EXISTS `bp_page` (
  `id_page` int(11) NOT NULL,
  `title_page` varchar(200) NOT NULL,
  `content_page` longtext NOT NULL,
  `image_page` varchar(200) NOT NULL,
  `date_page` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_setting`
--

CREATE TABLE IF NOT EXISTS `bp_setting` (
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
-- Struktur dari tabel `bp_testimonial`
--

CREATE TABLE IF NOT EXISTS `bp_testimonial` (
  `id_testimonial` int(11) NOT NULL,
  `testimonial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_user`
--

CREATE TABLE IF NOT EXISTS `bp_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `permission` tinyint(2) NOT NULL COMMENT '1.admin , 2.user',
  `date_regis` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bp_user`
--

INSERT INTO `bp_user` (`id_user`, `username`, `password`, `fullname`, `email`, `permission`, `date_regis`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@gmail.com', 1, '0000-00-00 00:00:00'),
(2, 'zuhdi yak', '7815696ecbf1c96e6894b779456d330e', 'zuhdi rabbani', 'zuhdi@dzilla.com', 2, '2016-12-01 11:59:24');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `bp_news`
--
ALTER TABLE `bp_news`
  ADD PRIMARY KEY (`id_news`);

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
-- AUTO_INCREMENT for table `bp_bod`
--
ALTER TABLE `bp_bod`
  MODIFY `id_bod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_category`
--
ALTER TABLE `bp_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_news`
--
ALTER TABLE `bp_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
