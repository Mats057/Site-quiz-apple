-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2023 at 07:26 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apple`
--

-- --------------------------------------------------------

--
-- Table structure for table `resultados`
--

CREATE TABLE `resultados` (
  `id` int NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `nota` int NOT NULL,
  `data` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `resultados`
--

INSERT INTO `resultados` (`id`, `usuario`, `nota`, `data`) VALUES
(44, 'Luriclinto', 2, '25/03/2023 11:52:06'),
(45, 'Mats', 7, '29/03/2023 15:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'Matheus Queiroz', 'zumbi@gmail.com', 'Mats', '$2y$10$/zIRaRYqnb8QHZBHB0oe.e7fiDPCxGC10Rs6NwX1264i7dsDxNxJK'),
(7, 'belto', 'lurel@hdjslk.com', 'laris', '$2y$10$2VVesdj9/9hI2SSoxSSP2OQ4soqyHlJtw3NTiOuszPqa30Co9cA5O'),
(8, 'claudio', 'rtyhg@gma.com', 'Luriclinto', '$2y$10$4gl5TsbBi2BpZgu52rP/zOf.DUXm/8M.GwWHyXmdF4KGJhAQ0.h9G'),
(9, 'lares', 'fsdggdnm@gmail.com', 'lilas', '$2y$10$s4allx/uNRtkJZ0GtcmLUuKSOnxaSlksNHMV66wlQ3CEnJX1LT.pi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `usuario_nota` (`usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usuario` (`usuario`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `usuario_nota` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
