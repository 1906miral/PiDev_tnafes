-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 mars 2021 à 18:16
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tnafes`
--

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `id_pub` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` varchar(50) NOT NULL,
  `date_publication` date NOT NULL,
  `iduser` int(11) NOT NULL,
  `urlimage` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_pub`),
  KEY `fk_iduserpub` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id_pub`, `contenu`, `date_publication`, `iduser`, `urlimage`) VALUES
(43, 'aaaaaaaa', '2021-03-28', 19, 'C:\\Users\\miral\\OneDrive\\Bureau\\vv.PNG'),
(44, 'aaaaaaaaaaaaaa', '2021-03-28', 19, 'C:\\Users\\miral\\OneDrive\\Bureau\\logo.PNG'),
(45, 'aaaaaaaaaaa', '2021-03-29', 19, 'C:\\Users\\miral\\OneDrive\\Bureau\\logo.PNG'),
(46, 'aaaaaaaa', '2021-03-29', 19, 'C:\\Users\\miral\\OneDrive\\Bureau\\logo.PNG'),
(47, 'aaaaaaaa', '2021-03-29', 19, 'C:\\Users\\miral\\OneDrive\\Bureau\\d.PNG'),
(48, 'yyyyyy', '2021-03-29', 19, 'C:\\Users\\miral\\OneDrive\\Bureau\\cc.PNG'),
(49, 'aaaaaaaa', '2021-03-29', 19, 'C:\\Users\\miral\\OneDrive\\Bureau\\Capture.PNG');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `fk_iduserpub` FOREIGN KEY (`iduser`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
