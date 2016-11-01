-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 01 Novembre 2016 à 23:30
-- Version du serveur: 5.5.52-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bac_blanc`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_categorie`),
  UNIQUE KEY `id` (`id_categorie`),
  KEY `nom` (`nom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
(1, 'mouton');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mot_de_passe` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `prenom`, `nom`, `email`, `mot_de_passe`) VALUES
(1, 'Fabien', '', '', ''),
(2, 'Fabien', 'Mehlinger', 'fabien-57100@hotmail.fr', 'girafe12'),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lien` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mot_de_passe` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `Titre_2` (`Titre`),
  UNIQUE KEY `Titre_4` (`Titre`),
  UNIQUE KEY `id_4` (`id`),
  KEY `id_2` (`id`),
  KEY `Titre` (`Titre`),
  KEY `Titre_3` (`Titre`),
  KEY `id_3` (`id`),
  KEY `Titre_5` (`Titre`),
  KEY `lien` (`lien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id`, `Titre`, `lien`, `mot_de_passe`) VALUES
(13, 'Asmr', 'https://www.youtube.com/embed/mSBcKFy_vHQ', ''),
(14, 'Les gros mots 2 ', 'https://www.youtube.com/embed/AmJSp7fRFaE', ''),
(15, 'Clés etranger', 'https://www.youtube.com/embed/a-r2-TyCO3g', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
