-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 22 jan. 2019 à 22:38
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `domus`
--

-- --------------------------------------------------------

--
-- Structure de la table `assistance`
--

DROP TABLE IF EXISTS `assistance`;
CREATE TABLE IF NOT EXISTS `assistance` (
  `idMessage` int(11) NOT NULL AUTO_INCREMENT,
  `emailUsers` tinytext NOT NULL,
  `message` longtext NOT NULL,
  `isRead` tinytext NOT NULL,
  PRIMARY KEY (`idMessage`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `idQuestion` int(11) NOT NULL AUTO_INCREMENT,
  `question` text COLLATE latin1_general_ci NOT NULL,
  `reponse` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idQuestion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `forum_categories`
--

DROP TABLE IF EXISTS `forum_categories`;
CREATE TABLE IF NOT EXISTS `forum_categories` (
  `idCategories` int(11) NOT NULL AUTO_INCREMENT,
  `nameCategories` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `descCategories` text COLLATE utf32_spanish_ci NOT NULL,
  `orderCategories` int(11) NOT NULL,
  PRIMARY KEY (`idCategories`),
  UNIQUE KEY `cat_ordre` (`orderCategories`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `forum_posts`
--

DROP TABLE IF EXISTS `forum_posts`;
CREATE TABLE IF NOT EXISTS `forum_posts` (
  `idPosts` int(11) NOT NULL AUTO_INCREMENT,
  `idTopicPosts` int(11) NOT NULL,
  `idCreatorPosts` int(11) NOT NULL,
  `textPosts` longtext CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `datePosts` datetime NOT NULL,
  PRIMARY KEY (`idPosts`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `forum_topics`
--

DROP TABLE IF EXISTS `forum_topics`;
CREATE TABLE IF NOT EXISTS `forum_topics` (
  `idTopics` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoryTopics` int(11) NOT NULL,
  `titleTopics` tinytext CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `idCreatorTopics` int(11) NOT NULL,
  `lastDateTopics` datetime NOT NULL,
  PRIMARY KEY (`idTopics`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `houses`
--

DROP TABLE IF EXISTS `houses`;
CREATE TABLE IF NOT EXISTS `houses` (
  `idHouses` int(11) NOT NULL AUTO_INCREMENT,
  `idUsers` int(11) NOT NULL,
  `nameHouses` tinytext COLLATE latin1_general_ci NOT NULL,
  `adressHouses` text COLLATE latin1_general_ci NOT NULL,
  `areaHouses` int(11) NOT NULL,
  `roomTotalNbHouses` int(11) NOT NULL,
  `personNbHouses` int(11) NOT NULL,
  PRIMARY KEY (`idHouses`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `idOffer` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `texte` longtext NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`idOffer`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `idRoom` int(11) NOT NULL AUTO_INCREMENT,
  `idHouse` int(11) NOT NULL,
  `type` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `sensorNb` int(11) NOT NULL,
  PRIMARY KEY (`idRoom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sensor`
--

DROP TABLE IF EXISTS `sensor`;
CREATE TABLE IF NOT EXISTS `sensor` (
  `idSensor` int(11) NOT NULL AUTO_INCREMENT,
  `idRoom` int(11) NOT NULL,
  `type` tinytext NOT NULL,
  `donnee` int(11) NOT NULL,
  PRIMARY KEY (`idSensor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `idService` int(11) NOT NULL AUTO_INCREMENT,
  `title1` tinytext NOT NULL,
  `title2` tinytext NOT NULL,
  `texte` longtext NOT NULL,
  PRIMARY KEY (`idService`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `uidUsers` tinytext COLLATE latin1_general_ci NOT NULL,
  `emailUsers` tinytext COLLATE latin1_general_ci NOT NULL,
  `pwdUsers` longtext COLLATE latin1_general_ci NOT NULL,
  `phoneNbUsers` tinytext COLLATE latin1_general_ci NOT NULL,
  `adressUsers` text COLLATE latin1_general_ci NOT NULL,
  `firstNameUsers` tinytext COLLATE latin1_general_ci NOT NULL,
  `lastNameUsers` tinytext COLLATE latin1_general_ci NOT NULL,
  `offersUsers` int(11) NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
