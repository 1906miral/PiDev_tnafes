-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 31 mars 2021 à 19:07
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tnafes`
--

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `id_consultation` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_coach` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`id_consultation`),
  KEY `fk_idclient_consultation` (`id_client`),
  KEY `fk_idcoach_consultation` (`id_coach`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `consultation`
--

INSERT INTO `consultation` (`id_consultation`, `id_client`, `id_coach`, `date`, `heure`) VALUES
(35, 0, 0, '2021-03-30', '15:03:00'),
(36, 0, 0, '2021-03-30', '15:03:00'),
(37, 0, 0, '2021-03-30', '15:03:00'),
(38, 0, 0, '2021-03-30', '15:03:00'),
(40, 0, 0, '2021-03-30', '15:03:00'),
(41, 0, 9, '2021-03-16', '00:07:00'),
(42, 0, 22, '2021-03-31', '06:13:00'),
(43, 0, 22, '2021-03-04', '00:17:00'),
(44, 23, 9, '2029-03-16', '01:22:00'),
(46, 23, 9, '2021-03-24', '17:50:00'),
(47, 24, 9, '2021-03-04', '01:15:00'),
(49, 24, 22, '2021-03-05', '02:27:00'),
(50, 23, 17, '2021-03-12', '13:56:00'),
(51, 23, 9, '2021-03-20', '13:57:00'),
(52, 23, 9, '2021-03-31', '12:59:00');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_coach` int(11) NOT NULL,
  `heure` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `contenu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `fk_idclient_message` (`id_client`),
  KEY `fk_idcoach_message` (`id_coach`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `id_client`, `id_coach`, `heure`, `contenu`) VALUES
(1, 0, 0, '2021-03-09 23:56:01', 'bonjour ca va ?'),
(2, 0, 0, '2021-03-09 23:56:26', 'BONJOUR'),
(3, 0, 0, '2021-03-10 00:34:54', 'bonjour'),
(4, 0, 0, '2021-03-11 09:11:00', 'bonjour\n'),
(5, 0, 0, '2021-03-29 15:12:03', 'ABC'),
(6, 0, 0, '2021-03-29 15:13:57', 'uuuuu'),
(7, 0, 0, '2021-03-29 15:15:00', 'aaaa'),
(8, 0, 0, '2021-03-29 15:19:03', 'aaaa'),
(9, 0, 0, '2021-03-29 23:56:08', '3asléma'),
(10, 23, 9, '2021-03-30 00:18:45', 'saleeeeeem'),
(11, 23, 22, '2021-03-30 00:19:02', '3aslmtiiin'),
(12, 23, 9, '2021-03-31 01:35:30', 'aaaaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
