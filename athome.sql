-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 18 Janvier 2018 à 14:19
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `athome`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cart_relation`
--

CREATE TABLE `cart_relation` (
  `quantitee` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_date` date DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `post_text` text,
  `id_user` int(11) DEFAULT NULL,
  `id_piece` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `prix` int(11) DEFAULT NULL,
  `dimensions` text,
  `img_present` text,
  `img_slide` text,
  `ref` text,
  `id` int(11) NOT NULL,
  `label` text,
  `brand` text,
  `stock` int(11) DEFAULT NULL,
  `services` text,
  `id_piece_type` int(11) DEFAULT NULL,
  `id_piece_style` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `piece_style`
--

CREATE TABLE `piece_style` (
  `id` int(11) NOT NULL,
  `label` text,
  `img_presents` text,
  `color_overlay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `piece_type`
--

CREATE TABLE `piece_type` (
  `id` int(11) NOT NULL,
  `label` text,
  `img_presents` text,
  `color_overlay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `img_present` text,
  `img_banner` text,
  `date_registration` date DEFAULT NULL,
  `adresse` text,
  `user_name` text,
  `user_firstname` text,
  `user_mail` text,
  `user_password` text,
  `delivery_history_id` int(11) DEFAULT NULL,
  `id_cart` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cart_id_user` (`id_user`);

--
-- Index pour la table `cart_relation`
--
ALTER TABLE `cart_relation`
  ADD PRIMARY KEY (`id`,`id_cart`),
  ADD KEY `FK_cart_relation_id_cart` (`id_cart`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_comments_id_user` (`id_user`),
  ADD KEY `FK_comments_id_piece` (`id_piece`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_piece_id_piece_type` (`id_piece_type`),
  ADD KEY `FK_piece_id_piece_style` (`id_piece_style`);

--
-- Index pour la table `piece_style`
--
ALTER TABLE `piece_style`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `piece_type`
--
ALTER TABLE `piece_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user_id_cart` (`id_cart`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_cart_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `cart_relation`
--
ALTER TABLE `cart_relation`
  ADD CONSTRAINT `FK_cart_relation_id` FOREIGN KEY (`id`) REFERENCES `piece` (`id`),
  ADD CONSTRAINT `FK_cart_relation_id_cart` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_comments_id_piece` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id`),
  ADD CONSTRAINT `FK_comments_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `FK_piece_id_piece_style` FOREIGN KEY (`id_piece_style`) REFERENCES `piece_style` (`id`),
  ADD CONSTRAINT `FK_piece_id_piece_type` FOREIGN KEY (`id_piece_type`) REFERENCES `piece_type` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_user_id_cart` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
