-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 19 Février 2019 à 16:21
-- Version du serveur :  5.7.25-0ubuntu0.16.04.2
-- Version de PHP :  7.0.33-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `Author`
--

CREATE TABLE `Author` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(10) NOT NULL,
  `LastName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Author`
--

INSERT INTO `Author` (`Id`, `FirstName`, `LastName`) VALUES
(2, 'Denis', 'Brogniart'),
(3, 'GEGE', 'FAB');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`Id`, `Name`) VALUES
(1, 'film'),
(2, 'livre');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `Pseudo` varchar(10) NOT NULL,
  `Contents` text NOT NULL,
  `CreationDate` datetime NOT NULL,
  `Post-Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Post`
--

CREATE TABLE `Post` (
  `Id` int(11) NOT NULL,
  `Title` varchar(60) NOT NULL,
  `Contents` text NOT NULL,
  `CreationDate` datetime NOT NULL,
  `Author_ID` int(10) NOT NULL,
  `Category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Post`
--

INSERT INTO `Post` (`Id`, `Title`, `Contents`, `CreationDate`, `Author_ID`, `Category`) VALUES
(11, 'LATOILE', 'rt', '2019-01-15 10:15:57', 3, 1),
(12, 'LATOILE', 'rtft', '2019-01-15 11:13:34', 2, 1),
(13, 'b2O vs K2A', 'ljjj', '2019-01-15 11:17:55', 3, 1),
(14, 'b2O vs K2A', 'h', '2019-01-15 11:51:07', 2, 1),
(15, 'v', 'v', '2019-01-16 09:50:36', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `LastName` varchar(10) NOT NULL,
  `FirstName` varchar(10) NOT NULL,
  `Pseudo` varchar(10) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `Mail`, `Password`, `LastName`, `FirstName`, `Pseudo`, `Role`) VALUES
(12, 'deje@frfr', '$2y$11$e4884b0ceb86e1bb067c4udBGZRiZcTu.s.q8lD7oB6gQw4mdLc02', 'eaaz', 'azaz', 'ddezez', 'users'),
(13, 'ezzz.@gmaui.fr', '$2y$11$bd05c3f1db9dc55f68c0bueiZnqOk56OBtp1kGvswCq/rtkho43T.', 'ee', 'aazaz', 'lool', 'users'),
(14, 'rootre', '$2y$11$dbe202cb590439398d34eu0x3stDa/q4aBOO0W6kScMDO2t0ZWDBa', 'Jacob', 'SANGAH', 'reree', 'users'),
(15, 'dizie78@hotmail.ju', '$2y$11$af905f34c1c57b3dee3c7el.PkmtR6uocJ/7B.8/oov0J3Ervi5lS', 'Jaco', 'SANGAHaz', 'aqsqsq', 'users');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Post`
--
ALTER TABLE `Post`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Author`
--
ALTER TABLE `Author`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Post`
--
ALTER TABLE `Post`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
