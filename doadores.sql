-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 06:10 PM
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
  `tipo` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doadores`
--

INSERT INTO `doadores` (`id`, `nome`, `email`, `cpf`, `tipo`) VALUES
(3, 'Edgar', 'edgar@gmail.com', '234.299.999-99', 'A-'),
(4, 'Arthur', 'arthur@gmail.com', '234.234.555-55', 'O-'),
(8, 'Alan', 'alan@gmail.com', '234.234.234-23', 'O-'),
(9, 'Jose', 'jose@gmail.com', '234.222.222-22', 'B-'),
(18, 'Vanderson', 'email@dominio.com.br', '651.654.651-65', 'AB+'),
(20, 'Wandalerne', 'wanda@hotmail.com', '516.546.465-46', 'O-'),
(21, 'Gabriel', 'omena@hot.com', '334.344.343-44', 'A-'),
(22, 'Tony', 'tony@gmail.com', '212.312.312-31', 'AB-'),
(23, 'Gentil', 'genos@hotmail.com', '545.654.898-78', 'AB+'),
(25, 'Lucas', 'lucas.edgerly@gmail.com', '898.498.498-49', 'O-'),
(26, 'Emanuel', 'email@dominio.com.br', '666.666.666-66', 'AB-'),
(27, 'Ritas', 'Rita@gmail.com', '654.897.987-98', 'B-'),
(28, 'Rosana', 'rosa@gmail.com', '515.987.545-48', 'A+'),
(29, 'Alburquerque', 'albu@hot.com.br', '354.687.748-22', 'B+'),
(32, 'Andreza', 'andrezassbezerra@gmail.com', '165.465.468-78', 'B-'),
(33, 'Vanusa', 'email@dominio.com.br', '499.498.498-49', 'O+'),
(34, 'Michely', 'micha@hotmail.com', '888.777.888-77', 'O+');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
