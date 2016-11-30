-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Nov 2016 pada 07.28
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
-- Struktur dari tabel `bp_awards`
--

CREATE TABLE IF NOT EXISTS `bp_awards` (
  `id_awards` int(11) NOT NULL,
  `content_awards` varchar(100) NOT NULL,
  `image_awards` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_bod`
--

CREATE TABLE IF NOT EXISTS `bp_bod` (
  `id_bod` int(11) NOT NULL,
  `content_bod` varchar(100) NOT NULL,
  `image_bod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_bpt`
--

CREATE TABLE IF NOT EXISTS `bp_bpt` (
  `id_bpt` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_certification`
--

CREATE TABLE IF NOT EXISTS `bp_certification` (
  `id_certification` int(11) NOT NULL,
  `certification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_cloud`
--

CREATE TABLE IF NOT EXISTS `bp_cloud` (
  `id_cloud` int(11) NOT NULL,
  `content_cloud` varchar(100) NOT NULL,
  `image_cloud` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_event`
--

CREATE TABLE IF NOT EXISTS `bp_event` (
  `id_event` int(11) NOT NULL,
  `content_event` varchar(100) NOT NULL,
  `image_event` varchar(100) NOT NULL,
  `date_event` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_industry`
--

CREATE TABLE IF NOT EXISTS `bp_industry` (
  `id_industry` int(11) NOT NULL,
  `content_industry` varchar(100) NOT NULL,
  `image_industry` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_infrastructure`
--

CREATE TABLE IF NOT EXISTS `bp_infrastructure` (
  `id_infrastructure` int(11) NOT NULL,
  `content_inf` varchar(100) NOT NULL,
  `image_inf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_network`
--

CREATE TABLE IF NOT EXISTS `bp_network` (
  `id_network` int(11) NOT NULL,
  `content_network` varchar(100) NOT NULL,
  `image_network` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_news`
--

CREATE TABLE IF NOT EXISTS `bp_news` (
  `id_news` int(11) NOT NULL,
  `content_news` varchar(100) NOT NULL,
  `image_news` varchar(100) NOT NULL
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
-- Struktur dari tabel `bp_software`
--

CREATE TABLE IF NOT EXISTS `bp_software` (
  `id_software` int(11) NOT NULL,
  `content_software` varchar(100) NOT NULL,
  `image_software` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_support`
--

CREATE TABLE IF NOT EXISTS `bp_support` (
  `id_support` int(11) NOT NULL,
  `content_support` varchar(100) NOT NULL,
  `image_support` varchar(100) NOT NULL
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
  `permission` tinyint(2) NOT NULL COMMENT '1.admin , 2.user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bp_values`
--

CREATE TABLE IF NOT EXISTS `bp_values` (
  `id_values` int(11) NOT NULL,
  `content_values` varchar(100) NOT NULL,
  `image_values` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bp_awards`
--
ALTER TABLE `bp_awards`
  ADD PRIMARY KEY (`id_awards`);

--
-- Indexes for table `bp_bod`
--
ALTER TABLE `bp_bod`
  ADD PRIMARY KEY (`id_bod`);

--
-- Indexes for table `bp_bpt`
--
ALTER TABLE `bp_bpt`
  ADD PRIMARY KEY (`id_bpt`);

--
-- Indexes for table `bp_cloud`
--
ALTER TABLE `bp_cloud`
  ADD PRIMARY KEY (`id_cloud`);

--
-- Indexes for table `bp_event`
--
ALTER TABLE `bp_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `bp_industry`
--
ALTER TABLE `bp_industry`
  ADD PRIMARY KEY (`id_industry`);

--
-- Indexes for table `bp_infrastructure`
--
ALTER TABLE `bp_infrastructure`
  ADD PRIMARY KEY (`id_infrastructure`);

--
-- Indexes for table `bp_network`
--
ALTER TABLE `bp_network`
  ADD PRIMARY KEY (`id_network`);

--
-- Indexes for table `bp_news`
--
ALTER TABLE `bp_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `bp_setting`
--
ALTER TABLE `bp_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `bp_software`
--
ALTER TABLE `bp_software`
  ADD PRIMARY KEY (`id_software`);

--
-- Indexes for table `bp_support`
--
ALTER TABLE `bp_support`
  ADD PRIMARY KEY (`id_support`);

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
-- Indexes for table `bp_values`
--
ALTER TABLE `bp_values`
  ADD PRIMARY KEY (`id_values`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bp_awards`
--
ALTER TABLE `bp_awards`
  MODIFY `id_awards` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_bod`
--
ALTER TABLE `bp_bod`
  MODIFY `id_bod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_bpt`
--
ALTER TABLE `bp_bpt`
  MODIFY `id_bpt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_cloud`
--
ALTER TABLE `bp_cloud`
  MODIFY `id_cloud` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_event`
--
ALTER TABLE `bp_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_industry`
--
ALTER TABLE `bp_industry`
  MODIFY `id_industry` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_infrastructure`
--
ALTER TABLE `bp_infrastructure`
  MODIFY `id_infrastructure` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_network`
--
ALTER TABLE `bp_network`
  MODIFY `id_network` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_news`
--
ALTER TABLE `bp_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_setting`
--
ALTER TABLE `bp_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_software`
--
ALTER TABLE `bp_software`
  MODIFY `id_software` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_testimonial`
--
ALTER TABLE `bp_testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_user`
--
ALTER TABLE `bp_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bp_values`
--
ALTER TABLE `bp_values`
  MODIFY `id_values` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
