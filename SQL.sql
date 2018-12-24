-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 24 déc. 2018 à 00:46
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `wcc`
--

-- --------------------------------------------------------

--
-- Structure de la table `dislike`
--

CREATE TABLE `dislike` (
  `ID` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `shop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dislike`
--

INSERT INTO `dislike` (`ID`, `user`, `shop`) VALUES
(8, 1, 2),
(9, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `likee`
--

CREATE TABLE `likee` (
  `ID` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `shop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `likee`
--

INSERT INTO `likee` (`ID`, `user`, `shop`) VALUES
(8, 1, 6),
(9, 1, 14);

-- --------------------------------------------------------

--
-- Structure de la table `shop`
--

CREATE TABLE `shop` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `distance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `shop`
--

INSERT INTO `shop` (`ID`, `name`, `image`, `distance`) VALUES
(1, 'Shopname1', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 20),
(2, 'Shopname2', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 10),
(3, 'Shopname3', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 1),
(4, 'Shopname4', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 2),
(5, 'Shopname5', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 1),
(6, 'Shopname6', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 100),
(7, 'Shopname7', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 1),
(8, 'Shopname7', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 1),
(9, 'Shopname8', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 30),
(10, 'Shopname8', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 30),
(11, 'Shopname1', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 2),
(12, 'Shopname2', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 2),
(13, 'Shopname1', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 20),
(14, 'Shopname10', 'http://blogs-savoir.fr/images/com_hikashop/upload/01_295695905.png', 20);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `user`, `password`, `email`) VALUES
(1, 'Salim', 'd5f5e68fb40e8b65d3738949722f7065', 'salim-imrane@live.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dislike`
--
ALTER TABLE `dislike`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user` (`user`),
  ADD KEY `shop` (`shop`);

--
-- Index pour la table `likee`
--
ALTER TABLE `likee`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `shop` (`shop`),
  ADD KEY `user` (`user`);

--
-- Index pour la table `shop`
--
ALTER TABLE `shop`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dislike`
--
ALTER TABLE `dislike`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `likee`
--
ALTER TABLE `likee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `shop`
--
ALTER TABLE `shop`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `dislike`
--
ALTER TABLE `dislike`
  ADD CONSTRAINT `dislike_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `dislike_ibfk_2` FOREIGN KEY (`shop`) REFERENCES `shop` (`ID`);

--
-- Contraintes pour la table `likee`
--
ALTER TABLE `likee`
  ADD CONSTRAINT `likee_ibfk_1` FOREIGN KEY (`shop`) REFERENCES `shop` (`ID`),
  ADD CONSTRAINT `likee_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`ID`);
