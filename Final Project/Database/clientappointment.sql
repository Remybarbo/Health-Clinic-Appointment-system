-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le : mar. 26 mars 2024 à 00:35
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `appointment_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `clientappointment`
--

CREATE TABLE `clientappointment` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `HealthCardNumber` varchar(128) NOT NULL,
  `dates` date NOT NULL,
  `times` time NOT NULL,
  `services` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clientappointment`
--

INSERT INTO `clientappointment` (`ID`, `firstName`, `lastName`, `email`, `HealthCardNumber`, `dates`, `times`, `services`) VALUES
(1, 'remy', 'barbosa', 'rdbarbos@lakeheadu.ca', '5423565473', '2024-02-01', '08:45:00', 'Walk-In'),
(2, 'mason', 'young', 'mbyoung@lakeheadu.ca', '2345624624', '2024-02-02', '09:00:00', 'Virtual Care'),
(3, 'Adeniji', 'Wright', 'arwrigh1@lakeheadu.ca', '2342526263', '2024-01-31', '12:00:00', 'Virtual Care'),
(4, 'Aravind', 'Thiagarajan', 'athiagar@lakeheadu.ca', '0875676577', '2024-02-02', '19:45:00', 'Virtual Care'),
(43, 'remy', 'barbosa', 'remybarbosa@hotmail.com', '1243325432', '2024-02-17', '17:05:00', 'Virtual Care'),
(46, 'remy', 'barbosa', 'remybarbosa@hotmail.com', '4353453534', '2024-03-14', '09:30:00', 'Virtual Care'),
(47, 'remy', 'barbosa', 'remybarbosa@hotmail.com', '3243242342', '2024-03-08', '09:00:00', 'Virtual Care'),
(48, 'remy', 'barbosa', 'remybarbosa@hotmail.com', '3243242342', '2024-03-08', '09:00:00', 'Walk-In'),
(49, 'remy', 'barbosa', 'remybarbosa@hotmail.com', '4245254244', '2024-03-07', '09:15:00', 'Virtual Care'),
(50, 'remy', 'barbosa', 'remybarbosa@hotmail.com', '2342242342', '2024-03-07', '09:00:00', 'Virtual Care'),
(51, 'remy', 'barbosa', 'remybarbosa@hotmail.com', '2345345352', '2024-03-07', '09:00:00', 'Virtual Care'),
(52, 'remy', 'barbosa', 'remybarbosa@hotmail.com', '2345234524', '2024-03-06', '09:00:00', 'Walk-In'),
(53, 'remy', 'barbosa', 'remybarbosa@hotmail.com', '2424234244', '2024-03-07', '09:15:00', 'Virtual Care'),
(54, 'remy', 'barbosa', 'remybarbosa@hotmail.com', '2342342424', '2024-03-06', '09:15:00', 'Virtual Care'),
(55, 'mason', 'Young', 'remybarbosa@hotmail.com', '5165616156', '2024-03-16', '08:30:00', 'Walk-In'),
(56, 'remy', 'barbosa', 'Remybarbosa@hotmail.com', '2345234243', '2024-03-16', '08:15:00', 'Walk-In');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clientappointment`
--
ALTER TABLE `clientappointment`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clientappointment`
--
ALTER TABLE `clientappointment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
