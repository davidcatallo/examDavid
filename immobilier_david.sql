-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 22 jan. 2019 à 17:06
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
-- Base de données :  `immobilier_david`
--
CREATE DATABASE IF NOT EXISTS `immobilier_david` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `immobilier_david`;

-- --------------------------------------------------------

--
-- Structure de la table `logement_david`
--

DROP TABLE IF EXISTS `logement_david`;
CREATE TABLE IF NOT EXISTS `logement_david` (
  `id_logement` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `surface` varchar(10) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `type` enum('location','vente') NOT NULL,
  `description` text,
  PRIMARY KEY (`id_logement`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logement_david`
--

INSERT INTO `logement_david` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(1, 'test', 'zaeazea', 'aeaeazazeaez', '12254', 'eazeaze', '122222255000', NULL, 'vente', 'aezazeaEZGE'),
(34, 'ezaaze', 'azeazzaeaz', 'azeaze', '14414', '54242', '24244', 'photo_34.jpg', 'location', 'azeazazazazazazazazazazazazazazazazazazazazaz'),
(33, 'ezaaze', 'azeazzaeaz', 'azeaze', '14414', '54242', '24244', NULL, 'location', 'azeazazazazazazazazazazazazazazazazazazazazaz'),
(32, 'ezaaze', 'azeazzaeaz', 'azeaze', '14414', '54242', '24244', NULL, 'location', 'azeazazazazazazazazazazazazazazazazazazazazaz'),
(31, 'ezaaze', 'azeazzaeaz', 'azeaze', '14414', '54242', '24244', NULL, 'location', 'azeazazazazazazazazazazazazazazazazazazazazaz'),
(30, 'ezaaze', 'azeazzaeaz', 'azeaze', '14414', '54242', '24244', NULL, 'location', 'azeazazazazazazazazazazazazazazazazazazazazaz'),
(10, 'test2 ', 'eazeaz', 'ezazeaazeeza', '12345', '123654', '41541651', NULL, 'location', 'zaeaezaeazaze'),
(11, 'test 3 ', 'zeaazeaz', 'ezeazaz', '12586', '5161', '165161616165165161651', NULL, 'vente', NULL),
(12, 'test description', 'azzazae', 'ezaaezaez', '16511', '1541', '01161651', NULL, 'vente', 'azzazkngjbnojzevpaezknlmazfknpfazn'),
(13, 'test descr vide', 'rgqr', 'yjdr', '38838', '383838', '6388', NULL, 'location', NULL),
(14, 'test tout les champs trop long azeeazezazea', 'rgqrazazazeezaeazazeazeazeazeeaz', 'yjdrzaeazeeazzeaezaezaaezaze', '38838', '383838', '6388', NULL, 'location', 'zaeazezaezaazazazazeaezaezaezazeeza'),
(15, 'test photo', 'arzazraz', 'zzeazeeza', '15165', '27', '27782', 'loge_5c473195a19d9.jpg', 'location', 'zaazezeaaakjbagjôvbôzveqbezvfo^n'),
(16, 'test photo', 'arzazraz', 'zzeazeeza', '15165', '27', '27782', 'loge_5c4731a816b15.jpg', 'location', 'zaazezeaaakjbagjôvbôzveqbezvfo^n'),
(25, 'test', 'zeazaz', 'aezaezazeaze', '51654', '1251951951', '527', NULL, 'location', NULL),
(26, 'test images', 'zazaeza', 'ezaeaez', '12345', '19519', '9214', NULL, 'location', 'zeaaaeaza'),
(27, 'test images', 'zazaeza', 'ezaeaez', '12345', '19519', '9214', NULL, 'location', 'zeaaaeaza'),
(28, 'test images', 'zazaeza', 'ezaeaez', '12345', '19519', '9214', NULL, 'location', 'zeaaaeaza'),
(29, 'zaeazaezaz', 'ezaeazaeze', 'aezazeaz', '51951', '51951', '9849841', NULL, 'location', NULL),
(35, 'ezaaze', 'azeazzaeaz', 'azeaze', '14414', '54242', '24244', 'photo_35.jpg', 'location', 'azeazazazazazazazazazazazazazazazazazazazazaz'),
(36, 'zazaeeaz', 'aezezaaez', 'trhet', '14414', '14425', '4147441', 'photo_36.jpg', 'location', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
