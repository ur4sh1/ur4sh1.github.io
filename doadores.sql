-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 08:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doadores`
--

-- --------------------------------------------------------

--
-- Table structure for table `doadores`
--

CREATE TABLE `doadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(25) NOT NULL,
  `tipos` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doadores`
--

INSERT INTO `doadores` (`id`, `nome`, `email`, `cpf`, `tipos`) VALUES
(1, 'Gabriel', 'gabriel@gmail.com', '948005880', 'O+'),
(3, 'Edgar', 'edgar@gmail.com', '123', 'BA'),
(4, 'Arthur', 'arthur@gmail.com', '123456789', 'O-'),
(5, 'Maria', 'maria@gmail.com', '12355', 'O+'),
(6, 'Gentil', 'gentil@gmail.com', '12345', 'A+'),
(8, 'Alan', 'alan@gmail.com', '12345', 'AB+'),
(9, 'José', 'jose@gmail.com', '12345', 'O-'),
(10, 'Mario', 'contaot@gkas.com', '12391239', 'B+'),
(14, 'Ricardo', 'email@dominio.com.br', '544987', 'AB-'),
(18, 'Vanderson', 'email@dominio.com.br', '651.654.651-65', 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `senha`) VALUES
(1, 'admin', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doadores`
--
ALTER TABLE `doadores`
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
-- AUTO_INCREMENT for table `doadores`
--
ALTER TABLE `doadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
