-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 05 Février 2018 à 12:30
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

--
-- Contenu de la table `piece`
--

INSERT INTO `piece` (`prix`, `dimensions`, `img_present`, `img_slide`, `ref`, `id`, `label`, `brand`, `stock`, `services`, `id_piece_type`, `id_piece_style`) VALUES
(1, '{\'Largeur\' : 188, \'Hauteur\' : 166}', 'element_1.jpg', 'furniture-2603068_1920.jpg;living-room-2155376_1920.jpg;living-room-2583032_1920', '55GQ', 0, 'Table Gauthier 55GQ', 'Gauthier', 16, '{\'livraison\'  : false}', NULL, NULL);

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

--
-- Contenu de la table `piece_style`
--

INSERT INTO `piece_style` (`id`, `label`, `img_presents`, `color_overlay`) VALUES
(0, 'Asiatique', 'style_asiatique.jpg', 7015180);

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
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `img_present`, `img_banner`, `date_registration`, `adresse`, `user_name`, `user_firstname`, `user_mail`, `user_password`, `delivery_history_id`, `id_cart`) VALUES
(1, 'sfbdg,h;jk', 'fbdg,h;jk', '2018-01-10', 'sfdgbdfnh,j', 'dfvergbnth,yjk;', 'vfegbr,tjhyu', 'dcfvgbrhnty,juk;', 'd fghjkl', NULL, NULL),
(2, 'sfbdg,h;jk', 'fbdg,h;jk', '2018-01-10', 'sfdgbdfnh,j', 'dfvergbnth,yjk;', 'vfegbr,tjhyu', 'dcfvgbrhnty,juk;', 'd fghjkl', NULL, NULL),
(3, 'sfbdg,h;jk', 'fbdg,h;jk', '2018-01-10', 'sfdgbdfnh,j', 'dfvergbnth,yjk;', 'vfegbr,tjhyu', 'dcfvgbrhnty,juk;', 'd fghjkl', NULL, NULL),
(4, 'Bonsoireu', 'Hello', '2018-01-10', 'cucu', 'dfvergbnth,yjk;ve', 'vfegbr,tjhyuve', 'dcfvgbrhnty,juk;rev', 'd fghjklre', NULL, NULL),
(5, 'sfbdg,h;jk', 'fbdg,h;jk', '2018-01-10', 'sfdgbdfnh,j', 'dfvergbnth,yjk;', 'vfegbr,tjhyu', 'dcfvgbrhnty,juk;', 'd fghjkl', NULL, NULL),
(6, 'sfbdg,h;jk', 'fbdg,h;jk', '2018-01-10', 'sfdgbdfnh,j', 'dfvergbnth,yjk;', 'vfegbr,tjhyu', 'dcfvgbrhnty,juk;', 'd fghjkl', NULL, NULL),
(7, 'sfbdg,h;jk', 'fbdg,h;jk', '2018-01-10', 'sfdgbdfnh,j', 'dfvergbnth,yjk;', 'vfegbr,tjhyu', 'dcfvgbrhnty,juk;', 'd fghjkl', NULL, NULL),
(8, 'sfbdg,h;jk', 'fbdg,h;jk', '2018-01-10', 'sfdgbdfnh,j', 'dfvergbnth,yjk;', 'vfegbr,tjhyu', 'dcfvgbrhnty,juk;', 'd fghjkl', NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cart_id_user` (`id_user`);
  
ALTER TABLE `cart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Index pour la table `cart_relation`
--
ALTER TABLE `cart_relation`
  ADD PRIMARY KEY (`id`,`id_cart`),
  ADD KEY `FK_cart_relation_id_cart` (`id_cart`);

ALTER TABLE `cart_relation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_comments_id_piece` (`id_piece`),
  ADD KEY `FK_comments_id_user` (`id_user`);

ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_piece_id_piece_type` (`id_piece_type`),
  ADD KEY `FK_piece_id_piece_style` (`id_piece_style`);
  
  
  ALTER TABLE `piece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Index pour la table `piece_style`
--
ALTER TABLE `piece_style`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `piece_style`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Index pour la table `piece_type`
--
ALTER TABLE `piece_type`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `piece_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user_id_cart` (`id_cart`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
  
  
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
