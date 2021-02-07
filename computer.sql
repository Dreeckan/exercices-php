-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 07 fév. 2021 à 12:12
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
-- Base de données : `computer_exercice`
--

-- --------------------------------------------------------

--
-- Structure de la table `component`
--

DROP TABLE IF EXISTS `component`;
CREATE TABLE IF NOT EXISTS `component` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `brand` varchar(128) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `brand` (`brand`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `computer`
--

DROP TABLE IF EXISTS `computer`;
CREATE TABLE IF NOT EXISTS `computer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `computer`
--

INSERT INTO `computer` (`id`, `name`, `type`) VALUES
(1, 'PC Gamer', 'Computer\\Desktop'),
(2, 'PC de bureau', 'Computer\\Desktop'),
(3, 'Ordinateur portable', 'Computer\\Laptop'),
(4, 'Tablette', 'Computer\\Tablet');

-- --------------------------------------------------------

--
-- Structure de la table `computer_has_component`
--

DROP TABLE IF EXISTS `computer_has_component`;
CREATE TABLE IF NOT EXISTS `computer_has_component` (
  `id_computer` int(11) NOT NULL,
  `id_component` int(11) NOT NULL,
  PRIMARY KEY (`id_computer`,`id_component`),
  KEY `id_component` (`id_component`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `computer_has_device`
--

DROP TABLE IF EXISTS `computer_has_device`;
CREATE TABLE IF NOT EXISTS `computer_has_device` (
  `id_computer` int(11) NOT NULL,
  `id_device` int(11) NOT NULL,
  PRIMARY KEY (`id_computer`,`id_device`),
  KEY `id_device` (`id_device`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cpu`
--

DROP TABLE IF EXISTS `cpu`;
CREATE TABLE IF NOT EXISTS `cpu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frequency` FLOAT NOT NULL,
  `id_component` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_component` (`id_component`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `device`
--

DROP TABLE IF EXISTS `device`;
CREATE TABLE IF NOT EXISTS `device` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `brand` varchar(128) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `brand` (`brand`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `graphiccard`
--

DROP TABLE IF EXISTS `graphiccard`;
CREATE TABLE IF NOT EXISTS `graphiccard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rtx` tinyint(4) NOT NULL,
  `id_component` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_component` (`id_component`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `keyboard`
--

DROP TABLE IF EXISTS `keyboard`;
CREATE TABLE IF NOT EXISTS `keyboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `format` varchar(50) DEFAULT NULL,
  `id_device` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_device` (`id_device`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `motherboard`
--

DROP TABLE IF EXISTS `motherboard`;
CREATE TABLE IF NOT EXISTS `motherboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chipset` varchar(50) NOT NULL,
  `id_component` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_component` (`id_component`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mouse`
--

DROP TABLE IF EXISTS `mouse`;
CREATE TABLE IF NOT EXISTS `mouse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leftHanded` tinyint(4) NOT NULL,
  `id_device` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_device` (`id_device`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ram`
--

DROP TABLE IF EXISTS `ram`;
CREATE TABLE IF NOT EXISTS `ram` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` int(11) NOT NULL,
  `id_component` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_component` (`id_component`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `speaker`
--

DROP TABLE IF EXISTS `speaker`;
CREATE TABLE IF NOT EXISTS `speaker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `countSpeakers` FLOAT NOT NULL,
  `id_device` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_device` (`id_device`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `computer_has_component`
--
ALTER TABLE `computer_has_component`
  ADD CONSTRAINT `computer_has_component_ibfk_1` FOREIGN KEY (`id_computer`) REFERENCES `computer` (`id`),
  ADD CONSTRAINT `computer_has_component_ibfk_2` FOREIGN KEY (`id_component`) REFERENCES `component` (`id`);

--
-- Contraintes pour la table `computer_has_device`
--
ALTER TABLE `computer_has_device`
  ADD CONSTRAINT `computer_has_device_ibfk_1` FOREIGN KEY (`id_computer`) REFERENCES `computer` (`id`),
  ADD CONSTRAINT `computer_has_device_ibfk_2` FOREIGN KEY (`id_device`) REFERENCES `device` (`id`);

--
-- Contraintes pour la table `cpu`
--
ALTER TABLE `cpu`
  ADD CONSTRAINT `cpu_ibfk_1` FOREIGN KEY (`id_component`) REFERENCES `component` (`id`);

--
-- Contraintes pour la table `graphiccard`
--
ALTER TABLE `graphiccard`
  ADD CONSTRAINT `graphiccard_ibfk_1` FOREIGN KEY (`id_component`) REFERENCES `component` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `keyboard`
--
ALTER TABLE `keyboard`
  ADD CONSTRAINT `keyboard_ibfk_1` FOREIGN KEY (`id_device`) REFERENCES `device` (`id`);

--
-- Contraintes pour la table `motherboard`
--
ALTER TABLE `motherboard`
  ADD CONSTRAINT `motherboard_ibfk_1` FOREIGN KEY (`id_component`) REFERENCES `component` (`id`);

--
-- Contraintes pour la table `mouse`
--
ALTER TABLE `mouse`
  ADD CONSTRAINT `mouse_ibfk_1` FOREIGN KEY (`id_device`) REFERENCES `device` (`id`);

--
-- Contraintes pour la table `ram`
--
ALTER TABLE `ram`
  ADD CONSTRAINT `ram_ibfk_1` FOREIGN KEY (`id_component`) REFERENCES `component` (`id`);

--
-- Contraintes pour la table `speaker`
--
ALTER TABLE `speaker`
  ADD CONSTRAINT `speaker_ibfk_1` FOREIGN KEY (`id_device`) REFERENCES `device` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
