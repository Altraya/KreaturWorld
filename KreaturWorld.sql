-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 06 Avril 2015 à 21:19
-- Version du serveur :  5.5.40-0+wheezy1
-- Version de PHP :  5.4.39-0+deb7u2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `KreaturWorld`
--

-- --------------------------------------------------------

--
-- Structure de la table `kreatur`
--

CREATE TABLE IF NOT EXISTS `kreatur` (
  `id` int(11) NOT NULL COMMENT 'Kreaturs'' id',
  `name` varchar(45) NOT NULL COMMENT 'Kreaturs'' name',
  `species` varchar(45) NOT NULL COMMENT 'Kreaturs'' species',
  `color` varchar(45) NOT NULL COMMENT 'Kreaturs'' color',
  `age` int(45) NOT NULL COMMENT 'Kreaturs'' age',
  `idOwner` int(11) NOT NULL COMMENT 'id of his owner',
  `sex` varchar(20) NOT NULL COMMENT 'sex : "Féminin" / "Masculin"'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `kreatur`
--

INSERT INTO `kreatur` (`id`, `name`, `species`, `color`, `age`, `idOwner`, `sex`) VALUES
(1, 'Madame', 'Dragon', 'Rouge', 250, 6, 'Femelle'),
(2, 'Monsieur', 'Dragon', 'Rouge', 250, 6, 'Male'),
(3, 'Femelle', 'Dragon', 'Rouge', 250, 6, 'Femelle'),
(4, 'Leviathan male', 'Leviathan', 'Bleu', 250, 6, 'Male'),
(5, 'Wall-e', 'Dragon', 'Rouge', 0, 6, 'Femelle'),
(6, 'Wall-e', 'Dragon', 'Rouge', 0, 6, 'Male'),
(7, 'Wall-e', 'Dragon', 'Rouge', 0, 6, 'Femelle'),
(8, 'Wall-e', 'Dragon', 'Rouge', 0, 6, 'Male'),
(9, 'Wall-e', 'Dragon', 'Rouge', 0, 6, 'Male');

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` int(11) NOT NULL COMMENT 'player''s id',
  `pseudo` varchar(45) NOT NULL COMMENT 'player pseudo ',
  `pwd` varchar(75) NOT NULL COMMENT 'password (crypt)',
  `mail` varchar(75) NOT NULL COMMENT 'mail of the player',
  `birthdate` varchar(10) NOT NULL COMMENT 'player''s birthdate',
  `sex` varchar(10) NOT NULL COMMENT 'player''s sex',
  `avatarUrl` varchar(75) DEFAULT NULL COMMENT 'url of the player''s avatar',
  `inscriptionDate` varchar(10) NOT NULL COMMENT 'the date of the player''s inscription'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='Information about player = user';

--
-- Contenu de la table `player`
--

INSERT INTO `player` (`id`, `pseudo`, `pwd`, `mail`, `birthdate`, `sex`, `avatarUrl`, `inscriptionDate`) VALUES
(5, 'Karakayn', '6fcf9e5e6d3a0decbf08aa251a0181025477118d', 'ponettecoca@hotmail.fr', '01/09/1994', 'féminin', NULL, '27/02/2015'),
(6, 'fifi', 'a0d3e0799432fe1898df11e5f9dbd086635306f5', 'sdfghjkl@machin.fr', '03/02/2015', 'féminin', NULL, '27/02/2015'),
(25, 'kara', '8e690c185c1bcdb96603af3860ea537621b2b52f', 'sdfghjkl@machin.fr', '01/09/1994', 'féminin', NULL, '09/03/2015');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `kreatur`
--
ALTER TABLE `kreatur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `kreatur`
--
ALTER TABLE `kreatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Kreaturs'' id',AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'player''s id',AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
