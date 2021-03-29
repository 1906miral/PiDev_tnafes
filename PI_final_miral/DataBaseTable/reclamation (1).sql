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
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_reclamation` int(11) NOT NULL AUTO_INCREMENT,
  `idclient_rec` int(11) NOT NULL,
  `nom_user` varchar(20) NOT NULL,
  `prenom_user` varchar(20) NOT NULL,
  `numtel` varchar(20) NOT NULL,
  `email` varchar(75) NOT NULL,
  `description` varchar(75) NOT NULL,
  `objet` varchar(20) NOT NULL,
  `etat` varchar(20) DEFAULT 'En attente',
  `date` date DEFAULT NULL,
  `date_traitement` date DEFAULT NULL,
  PRIMARY KEY (`id_reclamation`),
  KEY `fk_idclientreclam` (`idclient_rec`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id_reclamation`, `idclient_rec`, `nom_user`, `prenom_user`, `numtel`, `email`, `description`, `objet`, `etat`, `date`, `date_traitement`) VALUES
(154, 23, 'Barhoumi', 'Miral', '+21627354995', 'barhoumimiral88@gmail.com', 'aaaaaaaaa', 'aaaaaaaaa', 'En attente', '2021-03-10', NULL),
(155, 21, 'Barhoumi', 'Miral', '+21627354995', 'barhoumimiral88@gmail.com', 'aaaaaaaaaa', 'aaaaaaaaaaaa', 'En attente', '2021-02-10', NULL),
(156, 21, 'Barhoumi', 'Miral', '+21627354995', 'barhoumimiral88@gmail.com', 'aaaaaaaaaa', 'aaaaaaaaaaaa', 'En attente', '2021-02-10', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `fk_idclientreclam` FOREIGN KEY (`idclient_rec`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
