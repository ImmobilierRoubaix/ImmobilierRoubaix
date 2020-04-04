-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 04 Avril 2020 à 06:12
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `jardin` varchar(10) NOT NULL,
  `piece` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `localisation` varchar(50) NOT NULL,
  `Information` varchar(300) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `agence`
--

INSERT INTO `agence` (`id`, `type`, `jardin`, `piece`, `surface`, `prix`, `localisation`, `Information`, `image`) VALUES
(3, 'Maison', 'oui', 7, 250, 1250, '1 rue de la paix', '', ''),
(4, 'Maison', 'oui', 7, 250, 1250, '1 rue de la paix', '', ''),
(5, 'Locaux Commerciaux', 'non', 5, 1200, 3200, '5242 rue dfhgdg ', 'jhqdfhnjqhfuhepm i gheuigh ur hgpzm orjngzop j gi irgj mzp ri jzpm io jr jz ^z  rjeoigi ', 'htht.png'),
(6, 'Locaux Commerciaux', 'non', 5, 1200, 3200, '5242 rue dfhgdg ', 'jhqdfhnjqhfuhepm i gheuigh ur hgpzm orjngzop j gi irgj mzp ri jzpm io jr jz ^z  rjeoigi ', 'htht.png'),
(7, 'Appartement', 'non', 1, 1, 1, '1', '1', '1');

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

CREATE TABLE `inscrit` (
  `id` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `inscrit`
--

INSERT INTO `inscrit` (`id`, `mdp`) VALUES
('ahmed', 'bourkeb'),
('nadir', 'touba');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscrit`
--
ALTER TABLE `inscrit`
  ADD PRIMARY KEY (`id`,`mdp`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
