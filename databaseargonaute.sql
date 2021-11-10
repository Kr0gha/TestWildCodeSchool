-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 nov. 2021 à 11:42
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `databaseargonaute`
--

-- --------------------------------------------------------

--
-- Structure de la table `menbers`
--

DROP TABLE IF EXISTS `menbers`;
CREATE TABLE IF NOT EXISTS `menbers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(64) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=424 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `menbers`
--

INSERT INTO `menbers` (`user_id`, `Name`) VALUES
(423, 'z'),
(422, 'z'),
(421, 'z'),
(420, 'z'),
(419, 'z'),
(418, 'z'),
(417, 'z'),
(416, 'z'),
(409, 'azer'),
(410, 'z'),
(411, 'z'),
(412, 'z'),
(413, 'z'),
(414, 'z'),
(415, 'z');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
