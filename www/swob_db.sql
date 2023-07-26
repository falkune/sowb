-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jul 25, 2023 at 09:59 PM
-- Server version: 8.0.33
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swob_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `creneaux`
--

CREATE TABLE `creneaux` (
  `id_creneau` int NOT NULL,
  `creneau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `creneaux`
--

INSERT INTO `creneaux` (`id_creneau`, `creneau`) VALUES
(1, '8H00 - 08H45'),
(2, '08H45 - 09H30'),
(3, '09H30 - 10H15'),
(4, '10H15 - 11H00'),
(5, '11H00 - 11H45'),
(6, '11H45 - 12H30'),
(7, '12H30 - 13H15'),
(8, '14H00 - 14H45'),
(9, '14H45 - 15H30'),
(10, '15H30 - 16H15'),
(11, '16H15 - 17H00'),
(12, '17H00 - 17H45'),
(13, '17H45 - 18H00'),
(14, '18H00 - 18H45'),
(15, '18H45 - 19H30'),
(16, '19H30 - 20H15'),
(17, '20H15 - 21H00');

-- --------------------------------------------------------

--
-- Table structure for table `marques`
--

CREATE TABLE `marques` (
  `id_marque` int NOT NULL,
  `nom_marque` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `marques`
--

INSERT INTO `marques` (`id_marque`, `nom_marque`) VALUES
(1, 'Samsung'),
(2, 'Tishiba'),
(3, 'Archos'),
(4, 'DELL'),
(5, 'HP'),
(6, 'ASUS');

-- --------------------------------------------------------

--
-- Table structure for table `materiels`
--

CREATE TABLE `materiels` (
  `id_mat` int NOT NULL,
  `nom_mat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `materiels`
--

INSERT INTO `materiels` (`id_mat`, `nom_mat`) VALUES
(1, 'Télephone'),
(2, 'Tablette'),
(3, 'Ordinateur');

-- --------------------------------------------------------

--
-- Table structure for table `modeles`
--

CREATE TABLE `modeles` (
  `id_modele` int NOT NULL,
  `nom_modele` varchar(100) NOT NULL,
  `id_marque` int NOT NULL,
  `materiel` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `modeles`
--

INSERT INTO `modeles` (`id_modele`, `nom_modele`, `id_marque`, `materiel`) VALUES
(1, 'Galaxy S', 1, 1),
(2, 'Galaxy S II', 1, 1),
(3, 'Galaxy S III', 1, 1),
(4, 'Galaxy S4', 1, 1),
(5, 'Galaxy S5', 1, 1),
(6, 'Galaxy S6', 1, 1),
(7, 'Galaxy S7', 1, 1),
(8, 'Galaxy S8', 1, 1),
(9, 'Galaxy S9', 1, 1),
(10, 'Galaxy S10', 1, 1),
(11, 'Galaxy S20', 1, 1),
(12, 'Galaxy S21', 1, 1),
(13, 'Galaxy S22', 1, 1),
(14, 'Galaxy S23', 1, 1),
(15, 'Galaxy Z Flip4', 1, 1),
(16, 'Galaxy A54 5G', 1, 1),
(17, 'Galaxy A34 5G', 1, 1),
(18, 'Galaxy A14', 1, 1),
(19, 'Galaxy A04s', 1, 1),
(20, 'Galaxy A23 5G', 1, 1),
(21, 'Satelite Pro C40-K', 2, 3),
(22, 'Protégé X30L', 2, 3),
(23, 'Protégé X30W', 2, 3),
(24, 'Protégé X40L', 2, 3),
(25, 'Protégé X40', 2, 3),
(26, 'Access 70 wifi', 3, 2),
(27, 'T70 wifi', 3, 2),
(28, 'T101', 3, 2),
(29, 'Oxygen 101 S 4G', 3, 2),
(30, 'XPS', 4, 3),
(31, 'LATIDUDE', 4, 3),
(32, 'INSPIRON', 4, 3),
(33, 'VOSTRO', 4, 3),
(34, 'ALIENWARE', 4, 3),
(35, 'G-SERIES', 4, 3),
(36, 'PRECISION', 4, 3),
(37, 'Zenfone 9', 6, 1),
(38, 'Zenfone 8', 6, 1),
(39, 'ROG Phone 7', 6, 1),
(40, 'ROG Phone 6', 6, 1),
(41, 'ROG Phone 5s', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id_rv` int NOT NULL,
  `client` int NOT NULL,
  `technicien` int NOT NULL,
  `type` int NOT NULL,
  `piece` varchar(200) NOT NULL,
  `date_rv` date NOT NULL,
  `creneau` int NOT NULL,
  `materiel` int NOT NULL,
  `assurance` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id_type` int NOT NULL,
  `nom_type` varchar(200) NOT NULL,
  `modele` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id_type`, `nom_type`, `modele`) VALUES
(1, 'Galaxy S6 edge', 6),
(2, 'Galaxy S7 edge', 7),
(3, 'Galaxy S20+', 11),
(4, 'Galaxy S20 Ultra', 11),
(5, 'Galaxy S20 FE', 11),
(6, 'Galaxy S21+', 12),
(7, 'Galaxy S21 Ultra', 12),
(8, 'Galaxy S21 FE', 11),
(9, 'Galaxy S22+', 13),
(10, 'Galaxy S22 Ultra', 13),
(11, 'Galaxy S23+', 14),
(12, 'Galaxy S23 Ultra', 14),
(13, 'Galaxy Z Fold4+', 15),
(14, 'Galaxy A14 5G', 18),
(15, 'T101 HD - Wifi', 28),
(16, 'T101 HD Plus - Wifi', 28),
(17, 'T101 HD3 - Wifi', 28),
(18, 'T101 HD 4G', 28),
(19, 'T101X  4G', 28),
(20, 'Zenfone 8 Flip', 38),
(21, 'ROG Phone 7 Ultimate', 39),
(22, 'ROG Phone 6 Pro', 40),
(23, 'ROG Phone 6D Ultimate', 40),
(24, 'ROG Phone 6D', 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `prenom_user` varchar(100) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creneaux`
--
ALTER TABLE `creneaux`
  ADD PRIMARY KEY (`id_creneau`);

--
-- Indexes for table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`id_marque`);

--
-- Indexes for table `materiels`
--
ALTER TABLE `materiels`
  ADD PRIMARY KEY (`id_mat`);

--
-- Indexes for table `modeles`
--
ALTER TABLE `modeles`
  ADD PRIMARY KEY (`id_modele`),
  ADD KEY `id_marque` (`id_marque`),
  ADD KEY `materiel` (`materiel`);

--
-- Indexes for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id_rv`),
  ADD KEY `client` (`client`),
  ADD KEY `technicien` (`technicien`),
  ADD KEY `creneau` (`creneau`),
  ADD KEY `materiel` (`materiel`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id_type`),
  ADD KEY `modele` (`modele`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `tel` (`tel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creneaux`
--
ALTER TABLE `creneaux`
  MODIFY `id_creneau` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `marques`
--
ALTER TABLE `marques`
  MODIFY `id_marque` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `materiels`
--
ALTER TABLE `materiels`
  MODIFY `id_mat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `modeles`
--
ALTER TABLE `modeles`
  MODIFY `id_modele` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id_rv` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `modeles`
--
ALTER TABLE `modeles`
  ADD CONSTRAINT `modeles_ibfk_1` FOREIGN KEY (`id_marque`) REFERENCES `modeles` (`id_modele`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `modeles_ibfk_2` FOREIGN KEY (`materiel`) REFERENCES `materiels` (`id_mat`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `rendez_vous_ibfk_1` FOREIGN KEY (`client`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rendez_vous_ibfk_2` FOREIGN KEY (`technicien`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rendez_vous_ibfk_3` FOREIGN KEY (`creneau`) REFERENCES `creneaux` (`id_creneau`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rendez_vous_ibfk_4` FOREIGN KEY (`materiel`) REFERENCES `materiels` (`id_mat`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rendez_vous_ibfk_5` FOREIGN KEY (`type`) REFERENCES `types` (`id_type`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `types`
--
ALTER TABLE `types`
  ADD CONSTRAINT `types_ibfk_1` FOREIGN KEY (`modele`) REFERENCES `modeles` (`id_modele`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
