-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 mars 2021 à 17:48
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
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `id_abonnement` int(11) NOT NULL,
  `date_debut` varchar(50) NOT NULL,
  `date_fin` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`id_abonnement`, `date_debut`, `date_fin`, `type`) VALUES
(132, '10/20/2000', '10/30/2001', 'Abonnement mensuel'),
(133, '10/20/1254', '14/81/8958', 'Abonnement annuel'),
(135, '10/20/1230', '10/20/1234', 'Abonnement annuel'),
(136, '10/20/1230', '10/20/1234', 'Abonnement annuel'),
(137, '10/20/1000', '10/20/2001', 'Abonnement annuel'),
(144, '10/20/1234', '10/30/1230', 'Abonnement annuel'),
(145, '10/20/1234', '10/30/1230', 'Abonnement annuel'),
(146, '10/20/3020', '10/20/3040', 'Abonnement mensuel'),
(147, '10/30/6321', '10/20/3322', 'Abonnement annuel'),
(148, '10/30/1000', '10/40/2000', 'Abonnement mensuel'),
(149, '10/12/2000', '10/10/2012', 'Abonnement annuel'),
(150, '10/10/1000', '20/20/2000', 'Abonnement mensuel'),
(151, '10/20/1999', '20/30/2000', 'Abonnement annuel'),
(152, '10/10/1998', '10/12/1990', 'Abonnement annuel'),
(153, '10/09/1998', '10/09/1999', 'Abonnement annuel'),
(154, '10/03/2010', '09/02/1998', 'Abonnement annuel');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id_abonnement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id_abonnement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
