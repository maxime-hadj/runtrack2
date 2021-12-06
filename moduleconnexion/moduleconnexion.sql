-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2021 at 03:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(8, 'yo', 'yo', 'yo', '$2y$10$xW4braYo4rOtGGAetTiRv.FApAcJsyhEwO6xIrk5KvluyZzn..sMq'),
(9, 'Jon', 'Jon', 'Bon Jovi', '$2y$10$1qy5fYlz9C15F0O.uxH/0.THYNROLau0hRU/ItqJmlmMJXwPbtIDm'),
(10, 'Jimi', 'Jimi', 'Hendrix', '$2y$10$bgAqTYTyheZ0wHEuUvedjOM13egyIPVJ3yTE8p18ZPE.gDduHqhsm'),
(11, 'Jean', 'Jean', 'Valjean', '$2y$10$uUPUrkw/jGp5Is/5k0Aw5.S4KAo.DvirUq1gO1ie4ercvEgcYfjPy'),
(13, 'admin', 'admin', 'admin', '$2y$10$/iL8QQbkkl3eCSoBJrc8UesZufbhGgZ94KJTtvidf6ravOQNNNlWW'),
(14, 'Matt', 'Matthew', 'Bellamy', '$2y$10$HR0aa6bMJGgCjj306GMIwO4xWL6ZNAzVBP2eGILVuSN5W7ssqfFKW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
