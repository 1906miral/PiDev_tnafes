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
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `contenu_comment` varchar(30) NOT NULL,
  `idclient_comment` int(11) DEFAULT NULL,
  `nom_client` varchar(20) NOT NULL,
  `prenom_client` varchar(20) NOT NULL,
  `idpub` int(11) DEFAULT NULL,
  `datecomment` date NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `fk_idusercomment` (`idclient_comment`),
  KEY `fk_idpub` (`idpub`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_comment`, `contenu_comment`, `idclient_comment`, `nom_client`, `prenom_client`, `idpub`, `datecomment`) VALUES
(4, 'aaaaaaaa', 23, 'Barhoumi', 'Miral', 43, '2021-03-28'),
(5, 'oooo', 22, 'Barhoumi', 'Miral', 43, '2021-03-28'),
(6, 'eeeeeeeeeeee', 23, 'Barhoumi', 'Miral', 43, '2021-03-28'),
(7, 'ttttttttt', 23, 'Barhoumi', 'Miral', 43, '2021-03-28'),
(8, 'aaaaaaaaaaaaaa', 23, 'Barhoumi', 'Miral', 43, '2021-03-28'),
(15, '****', 23, 'Barhoumi', 'Miral', 43, '2021-03-28'),
(16, '****', 23, 'Barhoumi', 'Miral', 43, '2021-03-28'),
(19, '******', 23, 'Barhoumi', 'Miral', 43, '2021-03-28'),
(20, 'oooooooo', 23, 'Barhoumi', 'Miral', 44, '2021-03-28'),
(21, '****', 23, 'Barhoumi', 'Miral', 43, '2021-03-28'),
(22, '**** you', 23, 'Barhoumi', 'Miral', 44, '2021-03-28'),
(23, '**** you', 23, 'Barhoumi', 'Miral', 43, '2021-03-29'),
(24, 'aaaaaa', 23, 'Barhoumi', 'Miral', 43, '2021-03-29'),
(25, '**** you', 23, 'Barhoumi', 'Miral', 43, '2021-03-29'),
(26, '**** you', 23, 'Barhoumi', 'Miral', 43, '2021-03-29'),
(27, '**** you', 23, 'Barhoumi', 'Miral', 43, '2021-03-29');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_idpub` FOREIGN KEY (`idpub`) REFERENCES `publication` (`id_pub`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idusercomment` FOREIGN KEY (`idclient_comment`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
