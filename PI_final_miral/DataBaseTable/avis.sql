-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 mars 2021 à 18:17
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
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id_avis` int(11) NOT NULL AUTO_INCREMENT,
  `id_clientavis` int(11) NOT NULL,
  `idpub_rate` int(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `rating` int(11) NOT NULL,
  `date_avis` date NOT NULL,
  PRIMARY KEY (`id_avis`),
  KEY `fk_idclientavis` (`id_clientavis`),
  KEY `fkidpubrate` (`idpub_rate`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id_avis`, `id_clientavis`, `idpub_rate`, `email`, `rating`, `date_avis`) VALUES
(35, 23, 43, 'barhoumimiral88@gmail.com', 3, '2021-03-28'),
(36, 23, 43, 'barhoumimiral88@gmail.com', 0, '2021-03-28'),
(37, 23, 43, 'barhoumimiral88@gmail.com', 0, '2021-03-28'),
(38, 23, 43, 'barhoumimiral88@gmail.com', 0, '2021-03-28'),
(39, 23, 43, 'barhoumimiral88@gmail.com', 0, '2021-03-28'),
(40, 23, 43, 'barhoumimiral88@gmail.com', 0, '2021-03-28'),
(41, 23, 43, 'barhoumimiral88@gmail.com', 0, '2021-03-28'),
(42, 23, 43, 'barhoumimiral88@gmail.com', 0, '2021-03-28'),
(43, 23, 43, 'barhoumimiral88@gmail.com', 0, '2021-03-28'),
(44, 23, 43, 'barhoumimiral88@gmail.com', 5, '2021-03-28'),
(45, 23, 43, 'barhoumimiral88@gmail.com', 5, '2021-03-28'),
(46, 23, 43, 'barhoumimiral88@gmail.com', 5, '2021-03-28'),
(47, 23, 44, 'barhoumimiral88@gmail.com', 5, '2021-03-28'),
(48, 23, 43, 'barhoumimiral88@gmail.com', 3, '2021-03-28'),
(49, 23, 44, 'barhoumimiral88@gmail.com', 5, '2021-03-28'),
(50, 23, 43, 'barhoumimiral88@gmail.com', 3, '2021-03-29'),
(51, 23, 43, 'barhoumimiral88@gmail.com', 5, '2021-03-29'),
(52, 23, 43, 'barhoumimiral88@gmail.com', 5, '2021-03-29'),
(53, 23, 43, 'barhoumimiral88@gmail.com', 5, '2021-03-29');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `fk_idclientavis` FOREIGN KEY (`id_clientavis`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkidpubrate` FOREIGN KEY (`idpub_rate`) REFERENCES `publication` (`id_pub`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
