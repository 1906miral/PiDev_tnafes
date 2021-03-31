-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 mars 2021 à 01:54
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
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `id_abonnement` int(11) NOT NULL AUTO_INCREMENT,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`id_abonnement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `id_activite` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) DEFAULT NULL,
  `id_coachact` int(11) DEFAULT NULL,
  `titre` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `nomcat` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_activite`),
  KEY `fk_idcat` (`id_categorie`),
  KEY `fk_idcoach_act` (`id_coachact`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `id_categorie`, `id_coachact`, `titre`, `description`, `nomcat`, `date`) VALUES
(1, NULL, NULL, 'aaaaa', 'aaaaaaaa', 'yoga', '2021-03-31'),
(2, NULL, NULL, 'aa', 'aaa', 'aa', '2021-03-31'),
(3, NULL, NULL, 'aa', 'aaa', 'aa', '2021-03-31'),
(4, NULL, NULL, 'aa', 'aaa', 'aa', '2021-03-31');

-- --------------------------------------------------------

--
-- Structure de la table `adminstrateur`
--

DROP TABLE IF EXISTS `adminstrateur`;
CREATE TABLE IF NOT EXISTS `adminstrateur` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(75) NOT NULL,
  `numtel` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adminstrateur`
--

INSERT INTO `adminstrateur` (`id_admin`, `nom`, `prenom`, `email`, `numtel`) VALUES
(19, 'Barhoumi', 'Miral', 'tnafes.tnafes@gmail.com', 27354995);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `description`, `date`, `image`) VALUES
(2, 'ss', 'ss', '2021-03-31', 'C:\\Users\\miral\\OneDrive\\Bureau\\images used\\med.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

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
(53, 23, 43, 'barhoumimiral88@gmail.com', 5, '2021-03-29'),
(54, 23, 49, 'barhoumimiral88@gmail.com', 2, '2021-03-30'),
(55, 23, 49, 'barhoumimiral88@gmail.com', 2, '2021-03-30'),
(56, 23, 43, 'barhoumimiral88@gmail.com', 3, '2021-03-30'),
(57, 23, 43, 'barhoumimiral88@gmail.com', 5, '2021-03-30'),
(58, 23, 44, 'barhoumimiral88@gmail.com', 5, '2021-03-30'),
(59, 23, 47, 'barhoumimiral88@gmail.com', 5, '2021-03-30');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(20) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(2, 'aa'),
(4, 'yoga');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_event`
--

DROP TABLE IF EXISTS `categorie_event`;
CREATE TABLE IF NOT EXISTS `categorie_event` (
  `id_categ_event` int(11) NOT NULL AUTO_INCREMENT,
  `thematique` varchar(20) NOT NULL,
  PRIMARY KEY (`id_categ_event`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie_event`
--

INSERT INTO `categorie_event` (`id_categ_event`, `thematique`) VALUES
(24, 'pique-nique'),
(29, 'efr'),
(30, 'rondonne'),
(31, 'aya'),
(34, 'uck'),
(38, 'errr'),
(39, 'hhok'),
(40, 'eee'),
(41, 'ttt'),
(42, 'jhgkhil'),
(43, 'aaa');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(75) NOT NULL,
  `numtel` int(11) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `email`, `numtel`) VALUES
(19, 'Barhoumi', 'Miral', 'miral.barhoumi@esprit.tn', 27354995),
(22, 'Barhoumi', 'Miral', 'miral.barhoumi@esprit.tn', 27354995),
(23, 'Barhoumi', 'Miral', 'barhoumimiral88@gmail.com', 27354995);

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

DROP TABLE IF EXISTS `coach`;
CREATE TABLE IF NOT EXISTS `coach` (
  `id_coach` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(75) NOT NULL,
  `numtel` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `salaire` int(11) NOT NULL,
  PRIMARY KEY (`id_coach`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

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
(27, '**** you', 23, 'Barhoumi', 'Miral', 43, '2021-03-29'),
(28, '**** you', 23, 'Barhoumi', 'Miral', 49, '2021-03-30'),
(29, 'aaa', 23, 'Barhoumi', 'Miral', 49, '2021-03-30'),
(30, 'aaaaa', 23, 'Barhoumi', 'Miral', 43, '2021-03-30'),
(31, 'a', 23, 'Barhoumi', 'Miral', 43, '2021-03-30'),
(32, '****', 23, 'Barhoumi', 'Miral', 44, '2021-03-30'),
(33, 'aaaaaaaaaaaaa', 23, 'Barhoumi', 'Miral', 47, '2021-03-30');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id_compte` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_compte`),
  KEY `fk_compte` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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
  `heure` timestamp NOT NULL,
  PRIMARY KEY (`id_consultation`),
  KEY `fk_idclient_consultation` (`id_client`),
  KEY `fk_idcoach_consultation` (`id_coach`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `id_coach` int(11) DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `nb_place` int(11) DEFAULT NULL,
  `date_event` date DEFAULT NULL,
  `Categorie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_event`),
  KEY `Categorie` (`Categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id_event`, `id_coach`, `lieu`, `nb_place`, `date_event`, `Categorie`) VALUES
(34, 0, 'Sousse', 20, '2010-03-03', 'camping'),
(35, 0, 'Bizerte', 4, '2021-03-05', 'efr'),
(36, 0, 'Bizerte', 5, '2021-03-20', 'rondonne'),
(38, 0, 'Hammamet', 7, '2021-03-31', 'aya'),
(39, 0, 'Mrezga', 21, '2021-03-31', 'pique-nique');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_coach` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` timestamp NOT NULL,
  `contenu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `	fk_idclient_message` (`id_client`),
  KEY `fk_idcoach_message` (`id_coach`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `id_offre` int(11) NOT NULL AUTO_INCREMENT,
  `id_abonnement` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id_offre`),
  KEY `	fk_idabonnement_offre` (`id_abonnement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

DROP TABLE IF EXISTS `participation`;
CREATE TABLE IF NOT EXISTS `participation` (
  `id_participation` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `e_mail` varchar(255) DEFAULT NULL,
  `nb_participant` int(11) DEFAULT NULL,
  `Date_part` date NOT NULL,
  `id_evenement` int(11) DEFAULT NULL,
  `date_evenement` date NOT NULL,
  PRIMARY KEY (`id_participation`),
  KEY `fk_participation` (`id_client`),
  KEY `fk_event` (`id_evenement`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participation`
--

INSERT INTO `participation` (`id_participation`, `id_client`, `nom`, `prenom`, `e_mail`, `nb_participant`, `Date_part`, `id_evenement`, `date_evenement`) VALUES
(11, NULL, 'salim', 'iuhj', 'jklm', 0, '2021-03-18', NULL, '2018-03-02'),
(14, NULL, 'mm', 'pp', 'ol', 0, '2021-03-18', NULL, '2018-03-02'),
(19, NULL, 'miral', 'barhoumi', 'miral.barhoumi@esprit.tn', 0, '2021-03-18', NULL, '2018-03-02'),
(20, NULL, 'ben mohemed', 'louay', 'louay@esprit.tn', 0, '2021-03-23', NULL, '2020-04-03'),
(21, NULL, 'youssef', 'bennour', 'bennour@gmail.com', 0, '2021-03-23', NULL, '2021-07-01'),
(22, NULL, 'salim', 'hasni', 'hasni@esprit.tn', 0, '2021-03-27', NULL, '2021-03-18'),
(23, NULL, 'miral', 'barhoumi', 'barhoumi@', 0, '2021-03-27', NULL, '2012-03-03'),
(24, NULL, 'miha', 'taboubi', 'taboubi@', 0, '2021-03-27', NULL, '2020-03-09'),
(25, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-29', NULL, '2021-03-20'),
(26, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-29', NULL, '2021-03-20'),
(27, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-29', NULL, '2021-03-20'),
(28, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-29', NULL, '2021-03-05'),
(29, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-29', NULL, '2021-03-20'),
(30, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-29', NULL, '2021-03-20'),
(31, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-29', NULL, '2021-03-05'),
(32, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-29', NULL, '2021-03-31'),
(33, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-29', NULL, '2021-03-05'),
(34, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-30', NULL, '2021-03-05'),
(35, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-30', NULL, '2021-03-20'),
(36, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-30', NULL, '2021-03-20'),
(37, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-30', NULL, '2021-03-05'),
(39, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-30', NULL, '2021-03-31'),
(40, NULL, 'aed', 'ezd', 'cl', 0, '2021-03-30', NULL, '2010-03-03'),
(41, NULL, 'Barhoumi', 'Miral', 'barhoumimiral88@gmail.com', 0, '2021-03-30', NULL, '2010-03-03');

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
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id_reclamation`, `idclient_rec`, `nom_user`, `prenom_user`, `numtel`, `email`, `description`, `objet`, `etat`, `date`, `date_traitement`) VALUES
(154, 23, 'Barhoumi', 'Miral', '+21627354995', 'barhoumimiral88@gmail.com', 'aaaaaaaaa', 'aaaaaaaaa', 'En attente', '2021-03-10', NULL),
(155, 21, 'Barhoumi', 'Miral', '+21627354995', 'barhoumimiral88@gmail.com', 'aaaaaaaaaa', 'aaaaaaaaaaaa', 'En attente', '2021-02-10', NULL),
(156, 21, 'Barhoumi', 'Miral', '+21627354995', 'barhoumimiral88@gmail.com', 'aaaaaaaaaa', 'aaaaaaaaaaaa', 'En attente', '2021-02-10', NULL),
(157, 23, 'Barhoumi', 'Miral', '+21627354995', 'barhoumimiral88@gmail.com', 'aaaaaaa', 'aaaaaaaaa', 'En attente', '2021-03-30', NULL),
(158, 23, 'Barhoumi', 'Miral', '+21627354995', 'barhoumimiral88@gmail.com', 'aaaaaaaaa', 'aaaaaaaa', 'En attente', '2021-03-31', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(75) NOT NULL,
  `numtel` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date_block` date DEFAULT NULL,
  `perma_ban` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `numtel`, `password`, `date_block`, `perma_ban`) VALUES
(19, 'Barhoumi', 'Miral', 'tnafes.tnafes@gmail.com', 27354995, '16643044ac5a188cd37360a710b5e4722c042ceb643bade5435df13530b340e77ffa5d185b393a6a9ecac572a5c4edf0bab30c115e68192021de2dec6c24890e', NULL, b'0'),
(21, 'Barhoumi', 'Miral', 'miral.barhoumi@esprit.tn', 27354995, '123', NULL, b'0'),
(22, 'Barhoumi', 'Miral', 'miral.barhoumi@esprit.tn', 27354995, '99adc231b045331e514a516b4b7680f588e3823213abe901738bc3ad67b2f6fcb3c64efb93d18002588d3ccc1a49efbae1ce20cb43df36b38651f11fa75678e8', NULL, b'0'),
(23, 'Barhoumi', 'Miral', 'barhoumimiral88@gmail.com', 27354995, '99adc231b045331e514a516b4b7680f588e3823213abe901738bc3ad67b2f6fcb3c64efb93d18002588d3ccc1a49efbae1ce20cb43df36b38651f11fa75678e8', NULL, b'0');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `fk_idcat` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idcoach_act` FOREIGN KEY (`id_coachact`) REFERENCES `coach` (`id_coach`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `adminstrateur`
--
ALTER TABLE `adminstrateur`
  ADD CONSTRAINT `fk_idadmin` FOREIGN KEY (`id_admin`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `fk_idclientavis` FOREIGN KEY (`id_clientavis`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkidpubrate` FOREIGN KEY (`idpub_rate`) REFERENCES `publication` (`id_pub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_idclient` FOREIGN KEY (`id_client`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `fk_idcoach` FOREIGN KEY (`id_coach`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_idpub` FOREIGN KEY (`idpub`) REFERENCES `publication` (`id_pub`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idusercomment` FOREIGN KEY (`idclient_comment`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `fk_compte` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `fk_idclient_consultation` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idcoach_consultation` FOREIGN KEY (`id_coach`) REFERENCES `coach` (`id_coach`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `	fk_idclient_message` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idcoach_message` FOREIGN KEY (`id_coach`) REFERENCES `coach` (`id_coach`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `	fk_idabonnement_offre` FOREIGN KEY (`id_abonnement`) REFERENCES `abonnement` (`id_abonnement`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `fk_event` FOREIGN KEY (`id_evenement`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_participation` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `fk_iduserpub` FOREIGN KEY (`iduser`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `fk_idclientreclam` FOREIGN KEY (`idclient_rec`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
