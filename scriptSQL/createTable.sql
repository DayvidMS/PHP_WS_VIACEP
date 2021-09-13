-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Sep 13, 2021 at 11:55 AM
-- Server version: 10.5.8-MariaDB-1:10.5.8+maria~focal
-- PHP Version: 7.4.20

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceps`
--
CREATE DATABASE
IF NOT EXISTS `ceps` DEFAULT CHARACTER
SET utf8mb4
COLLATE utf8mb4_general_ci;
USE `ceps`;

-- --------------------------------------------------------

--
-- Table structure for table `cep`
--

CREATE TABLE `cep`
(
  `id` int
(11) NOT NULL,
  `cep` varchar
(8) NOT NULL,
  `logradouro` varchar
(100) NOT NULL,
  `complemento` varchar
(100) NOT NULL,
  `bairro` varchar
(100) NOT NULL,
  `localidade` varchar
(100) NOT NULL,
  `uf` varchar
(2) NOT NULL,
  `ibge` varchar
(10) NOT NULL,
  `gia` int
(11) NOT NULL,
  `ddd` int
(11) NOT NULL,
  `siafi` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cep`
--
ALTER TABLE `cep`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cep`
--
ALTER TABLE `cep`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
