-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 27 Avril 2020 à 13:03
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `livequestion`
--
CREATE DATABASE IF NOT EXISTS `livequestion` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `livequestion`;

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE `appartenir` (
  `id_question` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `lbl_categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE `date` (
  `id_date` int(11) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `date`
--

INSERT INTO `date` (`id_date`, `creation_date`) VALUES
(1, '2014-01-08'),
(2, '2016-05-26'),
(3, '2018-02-13'),
(4, '2017-07-09'),
(5, '2011-02-19'),
(6, '2008-11-03'),
(7, '2010-05-17'),
(8, '2014-01-17'),
(9, '2015-08-31'),
(10, '2013-09-29'),
(11, '2019-05-13');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `titre_question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_date` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `nombre_like` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id_question`, `titre_question`, `id_date`, `id_utilisateur`, `nombre_like`) VALUES
(1, 'Can I upgrade later on ?', 8, 1, 55),
(2, 'Can I port my data from another provider ?', 4, 1, 3),
(3, 'Are my food photos stored forever in the cloud ?', 5, 1, 88),
(4, 'Who foots the bills for that ?', 8, 1, 23),
(5, 'What\'s the real cost ?', 8, 1, 97),
(6, 'Can my company request a custom plan ?', 3, 1, 48);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id_reponse` int(11) NOT NULL,
  `contenu_reponse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_date` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Contenu de la table `reponse`
--

INSERT INTO `reponse` (`id_reponse`, `contenu_reponse`, `id_date`, `id_utilisateur`, `id_question`) VALUES
(1, 'Yes, you can.', 3, 1, 1),
(2, 'Yes, We only need the name of the provider to transfer your data.', 3, 9, 2),
(3, 'Yes, you are the only one who can delete them.', 4, 4, 3),
(4, 'The firm are the one who pays the bills', 9, 6, 4),
(5, 'About 420 dollars the year or 35 dollars the month.', 9, 6, 5),
(6, 'Of course, we can have negociations.', 11, 4, 6);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo_utilisateur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mdp_utilisateur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail_utilisateur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre_utilisateur` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `img_utilisateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Default.jpg',
  `id_date` int(11) NOT NULL,
  `role_utilisateur` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `pseudo_utilisateur`, `mdp_utilisateur`, `mail_utilisateur`, `genre_utilisateur`, `img_utilisateur`, `id_date`, `role_utilisateur`) VALUES
(1, 'obobo56', 'nilnimomin', 'caiqlan@gmail.com', '1', 'Default.jpg', 6, 1),
(4, 'sacqnm', 'caqonom', 'aaovqd.ndzao@gmail.com', '2', 'Default1.jpg', 10, 1),
(5, 'libliblib', 'lbhibilbi', 'iblmnm.bim@onom.com', '1', 'Default2.jpg', 4, 1),
(6, 'ihovctdx', 'bikyftdrs', 'zecaca.cnqds@dxz.fr', '1', 'DefaultX.jpg', 2, 2),
(7, 'dDkoopc', 'caoaca', 'coacsa.ccaq@gmail.com', '2', 'DefaultB.jpg', 6, 2),
(9, 'çucoqscsqac', 'acnlkivfj', 'cniiaq.cidqb@ccdsx.com', '2', 'Defaultvv.jpg', 7, 2),
(10, 'nniovyoiblbb', 'hoonolbub', 'hhbibnib.naupco@byc.com', '1', 'DefaultH.jpg', 1, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`id_question`,`id_categorie`),
  ADD KEY `APPFK2` (`id_categorie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id_date`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `QUEFK1` (`id_date`),
  ADD KEY `QUEFK2` (`id_utilisateur`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id_reponse`),
  ADD KEY `REPFK1` (`id_date`),
  ADD KEY `REPFK2` (`id_utilisateur`),
  ADD KEY `REPFK3` (`id_question`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `pseudo_utilisateur` (`pseudo_utilisateur`),
  ADD UNIQUE KEY `img_utilisateur` (`img_utilisateur`),
  ADD KEY `UTIFK` (`id_date`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `date`
--
ALTER TABLE `date`
  MODIFY `id_date` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id_reponse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `APPFK1` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`) ON UPDATE CASCADE,
  ADD CONSTRAINT `APPFK2` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `QUEFK1` FOREIGN KEY (`id_date`) REFERENCES `date` (`id_date`) ON UPDATE CASCADE,
  ADD CONSTRAINT `QUEFK2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `REPFK1` FOREIGN KEY (`id_date`) REFERENCES `date` (`id_date`) ON UPDATE CASCADE,
  ADD CONSTRAINT `REPFK2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON UPDATE CASCADE,
  ADD CONSTRAINT `REPFK3` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `UTIFK` FOREIGN KEY (`id_date`) REFERENCES `date` (`id_date`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
