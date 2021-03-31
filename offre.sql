-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 mars 2021 à 17:49
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.14

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
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id_offre` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`id_offre`, `email`, `type`) VALUES
(1, 'louaymohamed29@gmail.com', 'offre cours garatuis 2 Mois'),
(3, 'louaymohamed29@gmail.com', 'offre cours garatuis 15 jours'),
(5, 'louayohamed29@gmail.com', 'offre cours garatuis 1 Mois'),
(6, 'louaymohamed29@gmail.com', 'offre cours garatuis 1 Mois'),
(7, 'louaymohamed29@gmail.com', 'offre cours garatuis 15 jours'),
(8, 'louaymohamed29@gmail.com', 'offre cours garatuis 1 Mois'),
(9, 'louaymohamed29@gmail.com', 'offre cours garatuis 15 jours'),
(10, 'louaymohamed29@gmail.com', 'offre cours garatuis 1 Mois'),
(11, 'louaymohamed29@gmail.com', 'offre cours garatuis 15 jours'),
(12, 'louaymohamed29@gmail.com', 'offre cours garatuis 1 Mois'),
(14, 'louaymohamed29@gmail.com', 'offre cours garatuis 1 Mois'),
(15, 'louaymohamed29@gmail.com', 'offre cours garatuis 1 Mois'),
(16, 'louaymohamed29@gmail.com', 'offre cours garatuis 15 jours'),
(17, 'louaymohamed29@gmail.com', 'offre cours garatuis 15 jours');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id_offre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id_offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
