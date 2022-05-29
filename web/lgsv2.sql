-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 05 jan. 2021 à 09:30
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lgsv2`
--

-- --------------------------------------------------------

--
-- Structure de la table `activations`
--

DROP TABLE IF EXISTS `activations`;
CREATE TABLE IF NOT EXISTS `activations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_id` int(11) DEFAULT NULL,
  `photo_id` int(11) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `dateactive` datetime DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wilaya` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D57343F47E9E4C8C` (`photo_id`),
  KEY `IDX_D57343F4537A1329` (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `apropos`
--

DROP TABLE IF EXISTS `apropos`;
CREATE TABLE IF NOT EXISTS `apropos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `titre2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text2` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `apropos`
--

INSERT INTO `apropos` (`id`, `titre1`, `text1`, `titre2`, `text2`) VALUES
(1, 'Qui sommes nous ?', 'Global Luxury Services est spécialisé dans les transactions immobilières et automobiles de prestige à Oran, à Alger et à l’international. Notre équipe sait pertinemment que le Prestige nécessite une approche différente, parfois confidentielle, plus personnalisée, et qu’aucune agence, quelle qu’elle soit, ne peut se vanter de connaître tous les acquéreurs potentiels, nous avons mis au point une formule qui permet de vous offrir le professionnalisme le plus complet que vous êtes en droits d’attendre, tout en diffusant le plus largement possible votre bien.\r\nQue ce soit pour acheter, vendre ou louer en Algérie ou à l’international, nous élargissons votre horizon avec des propriétés uniques et un savoir-faire reconnu.', 'Pourquoi nous choisir?', 'Les biens sélectionnés par notre cabinet répondent à des critères haut de gamme bien précise : luxe, confort, raffinement, emplacement… Ces caractéristiques les distinguent et font d’eux des biens d’exception. Notre réputation se base sur la qualité de notre service et notre discrétion, qui sont les pierres angulaires sur lesquelles notre compagnie fut bâtie. Pour nous, chaque client, chaque projet, est unique.');

-- --------------------------------------------------------

--
-- Structure de la table `aproposblock`
--

DROP TABLE IF EXISTS `aproposblock`;
CREATE TABLE IF NOT EXISTS `aproposblock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `aproposblock`
--

INSERT INTO `aproposblock` (`id`, `titre`, `text`) VALUES
(1, 'Un immobilier sur-mesure', 'Acheter ou encore louer un bien prestigieux, c’est autant de projets dans l\'immobilier de Luxe qui vous sont offerts . GLS Immobilier vous propose de découvrir des annonces de biens haut de gamme qui vous permettront de trouver votre bien d’exception.\r\nQuel que soit l\'objet de votre recherche immobilière, nous sommes parfaitement conscients que l\'achat ou la location d\'un bien immobilier ne se résume pas à une simple transaction. Notre objectif vise à ce que votre transaction ait lieu sans la moindre complication, en vous guidant étape par étape tout au long du processus.');

-- --------------------------------------------------------

--
-- Structure de la table `bannieres`
--

DROP TABLE IF EXISTS `bannieres`;
CREATE TABLE IF NOT EXISTS `bannieres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `updated_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texte` longtext COLLATE utf8_unicode_ci,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bannieres`
--

INSERT INTO `bannieres` (`id`, `updated_at`, `name`, `titre`, `texte`, `path`) VALUES
(4, '2018-03-25 20:00:50', NULL, 'appart', NULL, 'c4daa9981af4ff0bba8ba465f929b545dbe5d7e3.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `inter` tinyint(1) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3AF34668989D9B62` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories_media`
--

DROP TABLE IF EXISTS `categories_media`;
CREATE TABLE IF NOT EXISTS `categories_media` (
  `categories_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`categories_id`,`media_id`),
  KEY `IDX_6E2FB441A21214B7` (`categories_id`),
  KEY `IDX_6E2FB441EA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `estimations`
--

DROP TABLE IF EXISTS `estimations`;
CREATE TABLE IF NOT EXISTS `estimations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `np` int(11) DEFAULT NULL,
  `surfaceh` int(11) DEFAULT NULL,
  `surfacet` int(11) DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpostal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mr` tinyint(1) DEFAULT NULL,
  `mme` tinyint(1) DEFAULT NULL,
  `melle` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `estimations`
--

INSERT INTO `estimations` (`id`, `en`, `type`, `np`, `surfaceh`, `surfacet`, `ville`, `codepostal`, `message`, `nom`, `prenom`, `adresse`, `cpostal`, `ville2`, `tel`, `email`, `mr`, `mme`, `melle`) VALUES
(1, 'Vente', 'Appartement', 2, 2, 2, 'Algerie, Oran', '31000', NULL, 'Boumediene', 'hdpe', 'Rue Medecin Belhocine, Oran', '31000', 'Algerie, Oran', '+213553048276', 'elm3hdi@gmail.com', 1, 0, 0),
(2, 'Vente', 'Appartement', 3, 3, 2, 'Algerie, Oran', '31000', NULL, 'Boumediene', 'creativ', 'Rue Medecin Belhocine, Oran', '31000', 'Algerie, Oran', '+213553048276', 'elm3hdi@gmail.com', 1, 0, 0),
(3, 'Vente', 'Appartement', 4, 3, 3, 'Oran', '31000', '1111', 'Boumediene', 'Mehdi', '12 Rue Medecin Belhocine', '31000', '1221', '+213553048276', 'mehdi@creativ-dz.com', 1, 0, 0),
(4, 'Vente', 'Appartement', 2, 2, 2, '55', '55', NULL, 'Boumediene', 'Mehdi', 'Rue Medecin Belhocine, Oran', '31000', 'Algerie, Oran', '+213553048276', 'elm3hdi@gmail.com', 1, 0, 0),
(5, 'Vente', 'Appartement', 3, 3, 3, 'Algerie, Oran', '31000', NULL, 'Boumediene', 'cccccczz', 'Rue Medecin Belhocine, Oran', '1111', '111', '+213553048276', 'elm3hdi@gmail.com', 1, 0, 0),
(6, 'Vente', 'Appartement', 3, 3, 3, 'Algerie, Oran', '31000', NULL, 'Boumediene', 'cccccczz', 'Rue Medecin Belhocine, Oran', '1111', '111', '+213553048276', 'elm3hdi@gmail.com', 1, 0, 0),
(7, 'Vente', 'Appartement', 2, 2, 2, 'Algerie, Oran', '31000', NULL, 'Boumediene', 'xxx', '54 s', '31000', 'Algerie, Oran', '+213553048276', 'elm3hdi@gmail.com', 1, 0, 0),
(8, 'Vente', 'Appartement', 2, 2, 3, 'Algerie, Oran', '31000', NULL, 'Boumediene', 'prod', 'Rue Medecin Belhocine, Oran', '31000', 'Algerie, Oran', '+213553048276', 'elm3hdi@gmail.com', 1, 0, 0),
(9, 'Vente', 'Appartement', 2, 3, 3, 'Algerie, Oran', '31000', NULL, 'Boumediene', 'produit', '54 s', '31000', 'Algerie, Oran', '+213553048276', 'elm3hdi@gmail.com', 1, 0, 0),
(10, 'Vente', 'Appartement', 2, 3, 3, 'Algerie, Oran', '31000', NULL, 'Boumediene', 'sdfsdfsdfsdf2121sdf1212cc', 'Rue Medecin Belhocine, Oran', '31000', 'Algerie, Oran', '+213553048276', 'mehdi@creativ-dz.com', 1, 0, 0),
(11, 'Vente', 'Appartement', 2, 3, 3, 'Algerie, Oran', '31000', NULL, 'Boumediene', 'sdfsdfsdfsdf2121sdf1212cc', 'Rue Medecin Belhocine, Oran', '31000', 'Algerie, Oran', '+213553048276', 'mehdi@creativ-dz.com', 1, 0, 0),
(12, 'Vente', 'Appartement', 2, 3, 3, 'Algerie, Oran', '31000', NULL, 'Boumediene', 'sdfsdfsdfsdf2121sdf1212cc', 'Rue Medecin Belhocine, Oran', '31000', 'Algerie, Oran', '+213553048276', 'mehdi@creativ-dz.com', 1, 0, 0),
(13, 'Vente', 'Appartement', 45, 45, 45, 'Oran', '31000', 'C\'est un teste pour voir', 'SID', 'Manel', '139 cours Tolstoï', '69100', 'Villeurbanne', '0753699061', 'sidlakhdar9693.manel@gmail.com', 1, 0, 0),
(14, 'Vente', 'Appartement', 2, 52, NULL, 'Oran', '31000', 'F2 dans un petit immeuble tranquille avec 1 voisin', 'Chaibdraa', 'Sofiane', '11 boulevard charlemagne', '31000', 'Oran', '0553060465', 'emploiplus@hotmail.fr', 1, 0, 0),
(15, 'Vente', 'Appartement', 2, 52, 0, 'oran', '31000', 'tres bel f2 open space  dans un tres bel immeuble ,cartier calme plein centre ville , un seul voisin', 'chaibdraa', 'sofiane', '11 boulevard charlemagne', '31000', 'oran', '0553060465', 'emploiplus@hotmail.fr', 1, 0, 0),
(16, 'Vente', 'Appartement', 3, 79, 79, 'Oran', '31000', 'Appartement situé à AADL pépinière (cité propre et sécurisée) au 3 éme étage d’un R+9 avec ascenseur , refait et n’ayant pas de vis à vie (vue sur forêt de l’université  de l’USTO)', 'BIulenouar', 'Manel', '1377 logts block 12 Aadl usto', '31000', 'Oran', '0552609216', 'manelgabou@gmail.com', 1, 1, 0),
(17, 'Vente', 'Villa', 4, 200, 250, 'Ain el Turck', '13000', 'Villa en première ligne avec accès direct privé à la plage Saint Germain', 'Bensidhoum', 'Abd el Kader', '26 bd du général de Gaulle', '92120', 'Montrouge', '+33 6 07 53 04 31', 'bensidhoum@orange.fr', 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `googlemaps`
--

DROP TABLE IF EXISTS `googlemaps`;
CREATE TABLE IF NOT EXISTS `googlemaps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `logos`
--

DROP TABLE IF EXISTS `logos`;
CREATE TABLE IF NOT EXISTS `logos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `updated_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `logos`
--

INSERT INTO `logos` (`id`, `updated_at`, `name`, `path`) VALUES
(1, '2018-04-22 10:13:30', 'Groupe Mr', '668a4c2010ad5bdbda512f13b9b35791507b71e4.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `updated_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=505 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `updated_at`, `name`, `path`) VALUES
(1, '2018-03-30 10:07:04', NULL, '951c0610e7e676c727fa3b25b72731376c66914f.jpeg'),
(2, '2018-03-14 15:29:37', NULL, '9767d9edebc5b948d9df88c688d8919384982013.jpeg'),
(3, '2018-05-01 15:54:04', NULL, 'f81bf09b30ee304735843b43f68a6cb2acb42ec8.jpeg'),
(4, '2018-05-01 15:49:45', NULL, '42ae1ba7cbeddc2753ebde7a00ca7e369bdf9c0e.jpeg'),
(5, '2018-04-15 19:22:35', NULL, 'ec15aebb018b3e7afcc1db36750986bd9a8fceac.jpeg'),
(10, '2018-04-01 09:36:07', NULL, 'aca9f924fde61962244c4ac8cfc030e47366947c.jpeg'),
(12, '2018-04-24 03:03:32', NULL, 'fba07fc039466ff9b8054bfa6838d1e5f562790c.jpeg'),
(13, '2018-04-08 20:04:58', NULL, '20c8c6bc84c6206cfe09bda7d5b77e891fed8113.jpeg'),
(14, '2018-04-20 18:46:00', NULL, '66379f00cd322217ff8ec2756f027fb5f6a98dd4.jpeg'),
(17, '2018-04-16 14:20:13', NULL, 'f6c69c81b0be5ae22c7e71b6c231329ac2cca651.jpeg'),
(18, '2018-04-16 14:20:13', NULL, '4281ea0751c936bb2f6036fc3e50b715f8d6184c.jpeg'),
(19, '2018-04-16 14:20:13', NULL, '0795646a1813665ce1197f6b12689ac5f0484557.jpeg'),
(20, '2018-04-16 14:20:13', NULL, '6e6a210e9fd8f3199547248c3428a4faf6aeda2d.jpeg'),
(21, '2018-04-16 14:20:13', NULL, 'bd10a3d57755e0cbc05a1c86bb1e8b1d00bef315.jpeg'),
(22, '2018-05-05 19:20:18', NULL, '373516c3029bc908d142eefd8823299860c4d51d.jpeg'),
(23, '2018-05-05 19:20:18', NULL, 'fe1adb37bfe7ae0e79618095189b5a3fe1fae508.jpeg'),
(24, '2018-05-05 19:20:18', NULL, '548637d028cdb8501712afb9558dbb529d18fdc8.jpeg'),
(25, '2018-05-05 19:20:18', NULL, 'b15b23a11f2e14e032db73fd2c6102da8a1616c9.jpeg'),
(26, '2018-05-05 19:20:18', NULL, '03561e7ee371f626fca3d2b6d31b22a9fe5487e1.jpeg'),
(27, '2018-05-05 19:20:18', NULL, '202341f2eb4448d5c19aa11263bf421ef584d186.jpeg'),
(28, '2018-05-05 19:20:18', NULL, '1d63f7b5c670a5b2e48e2f5d5a25f90d37eef854.jpeg'),
(29, '2018-05-05 19:20:18', NULL, 'bee83d0701814faf04ba3915c9425e548c384329.jpeg'),
(30, '2018-03-18 16:18:22', NULL, 'cd7eb36bc9255b6c7bb37104cc5dc7b851be71a7.jpeg'),
(31, '2018-03-18 16:18:22', NULL, 'a06fbad48e456739b59661aa18d827a390c35be6.jpeg'),
(32, '2018-03-18 16:18:22', NULL, '833c92fbe07c614b374a3399de1dfa21fb7e983c.jpeg'),
(33, '2018-03-18 16:18:22', NULL, '65870cb790809b017f835cf9de1d0aec5bbec130.jpeg'),
(34, '2018-03-18 16:18:22', NULL, '7305630b40f4fe2a2af72a6093e320387c14a922.jpeg'),
(35, '2018-03-18 16:18:22', NULL, 'dd09298c6bb8b88c1197c164ac5435e780d7d575.jpeg'),
(45, '2018-05-05 23:03:52', NULL, '070f1e87c663ff54c3098aca8885e2ffc4c2fee2.jpeg'),
(46, '2018-05-05 23:03:52', NULL, '23d1ce4f2762a4d6e2e47933d21bba1125e5754b.jpeg'),
(47, '2018-05-05 23:03:52', NULL, '1bb77c6d973d2ffff9c5adae8f3b2ca96362e255.jpeg'),
(48, '2018-05-05 23:03:52', NULL, 'af541fb94448db4d71ac07dc166e25a7626afe97.jpeg'),
(49, '2018-05-05 23:03:52', NULL, '95c8a3b3cc5486751a8d5e8c816cc8271cf7a390.jpeg'),
(50, '2018-05-05 23:03:52', NULL, 'fb45c459cd204f6092dc4daaecb0ffea53d08451.jpeg'),
(51, '2018-04-24 03:03:32', NULL, 'b1b61c7339085a79dfeb37c54254cc4c38b5c793.jpeg'),
(53, '2018-05-05 23:03:41', NULL, 'f2b320ec708cef889792b68c908d3fc4ed21651c.jpeg'),
(54, '2018-05-05 23:03:41', NULL, '6dc07631e854fed6aa8299efd8de180428293382.jpeg'),
(55, '2018-05-05 23:03:41', NULL, '972b1da991290ceed6204de8acaf143afae8006f.jpeg'),
(56, '2018-05-05 23:03:41', NULL, '0a020f4274aee38380bb35096b6f6210f8ac6341.jpeg'),
(57, '2018-05-05 23:03:41', NULL, '280f5e3054ff48e9929ef9fd5052acee3ee4a439.jpeg'),
(58, '2018-05-05 23:03:41', NULL, '4dee425efc79f7e246e7c7e4ebe40940169b9a07.jpeg'),
(59, '2018-05-05 23:03:41', NULL, '84a2177fa391f34ea233704ba2a09f1b586b2a37.jpeg'),
(60, '2018-05-05 23:03:32', NULL, '72e416f69b8274c77adba6f509323bc6a23273ff.jpeg'),
(61, '2018-05-05 23:03:32', NULL, '8870917747991f197850af588d81e59a66d95502.jpeg'),
(62, '2018-05-05 23:03:32', NULL, '957154063ff4db43d9a431e850b931f58f0c6b32.jpeg'),
(63, '2018-05-05 23:03:32', NULL, '18d8c80f4788c9d70b4a42ffe7b047751a78b0f6.jpeg'),
(64, '2018-05-05 23:03:32', NULL, '054fddf1bdd66e58c38948bce699440f59a9768e.jpeg'),
(65, '2018-05-05 23:03:32', NULL, '9a6fa5928953153032c81169074b754c00d4b943.jpeg'),
(66, '2018-05-05 23:03:32', NULL, 'fefd090152c6bac0f4ce867c8471f9b27897ae23.jpeg'),
(67, '2018-05-05 23:03:32', NULL, 'c6d06268d839ee7c498d502f30054f1a6da3faab.jpeg'),
(68, '2018-05-05 23:03:32', NULL, '873938453fb961608097c3d7b8cc774f076cc696.jpeg'),
(69, '2018-05-05 23:03:32', NULL, 'f18d7a1c83ca9241e94bdea3f8eebbb27718b396.jpeg'),
(70, '2018-05-05 23:03:32', NULL, 'cd681d542ee750eb79f386913ee6dcb9b77174e3.jpeg'),
(71, '2018-05-05 23:03:32', NULL, '1d2d0e2e9198f20c37696ef8acbc81f0e93eafc4.jpeg'),
(72, '2018-05-05 23:03:32', NULL, '80ec058a631f2f75aa7dbf9f7bc16e2ed79f71fb.jpeg'),
(73, '2018-05-05 23:02:11', NULL, '9b72916ee19452220076cb77dc524f6973901cc9.jpeg'),
(74, '2018-05-05 23:02:11', NULL, 'f7bcb62c480be82a910376e4ca47d9bf4bb08f7e.jpeg'),
(75, '2018-05-05 23:02:11', NULL, '9518022da48eb8a41f7d9451fd1ef6b1f4c80675.jpeg'),
(76, '2018-05-05 23:02:11', NULL, 'f2ddc1d1fadc51cf4e60ebc5a58dfebdd514e4b1.jpeg'),
(77, '2018-05-05 23:02:11', NULL, 'a64a1a4db4d60acead1bf662feefbd92fd1a1372.jpeg'),
(78, '2018-05-05 23:02:11', NULL, '1e46b17b00483fd3420a0df65b192a9b4f1172b8.jpeg'),
(79, '2018-05-05 23:02:11', NULL, '3ca283611d027bc5cbdde8c1af3dc7cebd25d4a8.jpeg'),
(80, '2018-05-05 23:02:11', NULL, '244806bb64a1d2ed9101c6d30285cfdb25e71b2f.jpeg'),
(81, '2018-05-05 23:02:11', NULL, 'd28535ba1aa632e43281b49274e76346f60ff591.jpeg'),
(82, '2018-05-05 23:02:11', NULL, '34ee2708baa51c3a33c04315b76b0244734417fc.jpeg'),
(83, '2018-05-05 23:02:11', NULL, '7d881fa2dc99bf6e164e90f23d17e207406b7271.jpeg'),
(84, '2018-05-05 23:02:11', NULL, '8b5eb7eaa25cd71f58c3aaf8ecd6c4be2570ffae.jpeg'),
(85, '2018-05-05 23:02:11', NULL, '3a2e2453f6dec51e3f3202e3b2e80e8c822cc146.jpeg'),
(87, '2018-03-25 17:53:03', NULL, '857f60b4400104359c4d8c3b950c801d92747cc1.jpeg'),
(90, '2018-05-05 23:02:33', NULL, '3602405dfeb24b33fc625b9f868738534cadb862.jpeg'),
(91, '2018-05-05 23:02:33', NULL, '809fcdb89460d8fb2855f31b8b4a9ab785040966.jpeg'),
(92, '2018-05-05 23:02:33', NULL, 'f3f569fedba878088fde9a3e25fb276819b69bb4.jpeg'),
(93, '2018-05-05 23:02:33', NULL, '28989e6b536b625057fc8ae13fae7b5067365655.jpeg'),
(94, '2018-05-05 23:02:33', NULL, 'e8e09cc8af82f54117464dc7790e6528d93d12f7.jpeg'),
(95, '2018-05-05 23:02:33', NULL, 'c14ac984b959fd7672a4fc67f17e6bfeb59cc77c.jpeg'),
(96, '2018-05-05 23:02:33', NULL, '84106194ec0a7465585780db47750edc5cc4d4c7.jpeg'),
(97, '2018-05-05 23:02:33', NULL, '97df924a23653fd6d6bb7b19924bbc1440334f36.jpeg'),
(98, '2018-05-05 23:02:33', NULL, '232176f30c354ce13ad5547503ea2203b752253f.jpeg'),
(99, '2018-05-05 23:02:33', NULL, '1b5a637cd5279b4ef1ef81ef986ee4ba1cc1383b.jpeg'),
(100, '2018-05-05 23:02:33', NULL, 'c983bde2f9226866f69105f6363520f97a6f2291.jpeg'),
(101, '2018-05-05 23:02:33', NULL, '0999ae6674de9c9545752f4d74af9a71dadbbf3e.jpeg'),
(102, '2018-05-05 23:02:33', NULL, '7b2299f981c436e965d8c80680a862fa2821a689.jpeg'),
(103, '2018-05-05 23:02:33', NULL, '15c81d9776a32e0cc5eba6c3d299518323995950.jpeg'),
(104, '2018-05-05 23:02:33', NULL, '0009605a74993367d14b9dc9f937898211b1f4d2.jpeg'),
(105, '2018-05-05 23:02:33', NULL, 'a104259ac946bb4656b99ae49bc555154fbf400f.jpeg'),
(106, '2018-05-05 23:02:50', NULL, '4dff5cceae82bd7cec508b78df84549353abec63.jpeg'),
(107, '2018-05-05 23:02:50', NULL, 'a7c4ef46ac9c3cde9702484093f5177f9daaa399.jpeg'),
(108, '2018-05-05 23:02:50', NULL, '93246379ef2d7cf5aed60322f85182a3bf02c8d1.jpeg'),
(109, '2018-05-05 23:02:50', NULL, '003d93a72f125de376f4b54f6ce9d301723128e8.jpeg'),
(110, '2018-05-05 23:02:50', NULL, 'bd84ef67dfaa80b46b64cea79567e9b09db3a598.jpeg'),
(111, '2018-05-05 23:02:50', NULL, 'd1aaab92767be9b9a2557be6da3295b894185339.jpeg'),
(129, '2018-04-15 19:22:35', NULL, '2d6b3f44927ae7f13eeb58f0e1a6c91c9905bb2e.jpeg'),
(130, '2018-04-15 19:22:35', NULL, '015ca92c51f1821f1176b8527eb4052283f3f810.jpeg'),
(131, '2018-04-15 19:22:35', NULL, '65fd588c97a6fdf9be12ea513931e246d4b2565d.jpeg'),
(132, '2018-05-01 15:13:50', NULL, 'bf4af19730ad5a6ddf40cb4fe62d0c5dc5e1f5d1.jpeg'),
(134, '2018-05-01 15:15:01', NULL, 'afc61c6c7fe7639ab644595128ca1655f560c19c.jpeg'),
(135, '2018-05-01 15:14:38', NULL, '23008c5188428b3feb72c38587c651ad5cb9409a.jpeg'),
(136, '2018-05-01 15:15:58', NULL, 'c06c02a70749a55ae77cb610f5ba217b5b39f027.jpeg'),
(137, '2018-05-01 15:17:19', NULL, '63ee8c2595f761d37f0903cc6ec4c1c3545b0882.jpeg'),
(138, '2018-05-05 22:08:30', NULL, '4912d6aa6cf030361a5b76925cc088af5a30d223.jpeg'),
(139, '2018-05-05 22:08:30', NULL, 'cbfca4a6ad2fa9e5825d1baa01f82b871196e1ac.jpeg'),
(140, '2018-05-05 22:08:30', NULL, '42c58c5f41517beabc0cd8f47066b77a127ac396.jpeg'),
(141, '2018-05-05 22:08:30', NULL, 'b715cd408d1578498e251a0ec80772202f4a328a.jpeg'),
(142, '2018-05-05 22:08:30', NULL, '9963563f743d132ca47273f6abce6a85953ab95e.jpeg'),
(143, '2018-05-05 22:08:30', NULL, '0cb0874eee4f940ae3ae49745b2cbf3ffc1a5ecf.jpeg'),
(144, '2018-05-05 20:42:36', NULL, '66ff4b0bc04d5054a2d868a3d9b33315fa46cf8b.jpeg'),
(145, '2018-05-05 20:42:36', NULL, '4b51974f664ac58e2dcb52b7d37c746d98aeb16d.jpeg'),
(146, '2018-05-05 20:42:36', NULL, '49c3d74a9a70677394b72cd68e588ea609d1fc68.jpeg'),
(147, '2018-05-05 20:42:36', NULL, 'c883dd9f17cc3619eabf69d62a328c85c2c7166f.jpeg'),
(148, '2018-05-05 20:42:36', NULL, '2ba62e627044ee5234bac80e2a1bd5dc5c357a49.jpeg'),
(149, '2018-05-05 20:42:36', NULL, '9f66ccc265f6d4bf98df65feee9e966b994689a2.jpeg'),
(150, '2018-05-05 20:42:36', NULL, '8150a4d6a0780cfbdb0ab12af6f38d6182700bec.jpeg'),
(151, '2018-05-05 20:42:36', NULL, '4becd8468cd40b27f75de6d7f2392d254a471288.jpeg'),
(152, '2018-05-05 20:42:36', NULL, '38f0632bfc802fdbf957e9d32c887f496e0d160e.jpeg'),
(153, '2018-05-05 20:42:36', NULL, 'bb72cdf456a89ef7cbff25b92c833880ec6abfa7.jpeg'),
(154, '2018-05-05 20:42:36', NULL, '796cee1d4447cece8f44117322ea92c080fc9042.jpeg'),
(155, '2018-05-05 20:42:36', NULL, '914a8708f478377cb31ed84441e4789bff690fe6.jpeg'),
(156, '2018-05-05 20:42:36', NULL, '287e1e266ecac5bbb994fa95243e3f54f21af062.jpeg'),
(157, '2018-05-05 20:42:36', NULL, 'eea14e0059cd610b343ce8ce6cd03843f96815f6.jpeg'),
(158, '2018-05-05 23:04:50', NULL, '20c038f9c23538bf87e671c88efadb0321df7b1a.jpeg'),
(159, '2018-05-05 23:04:50', NULL, '40e82a550496d8b5c9adf8bc74f49d81f4f4ef7d.jpeg'),
(160, '2018-05-05 23:04:50', NULL, 'db909756574862fc9a47ba8923651590524543bd.jpeg'),
(161, '2018-05-05 23:04:50', NULL, 'b1a3665533911f4d3edb71babba2e1e2d1e43ae2.jpeg'),
(162, '2018-05-05 23:04:50', NULL, '107077481d54bbb512021c2bb2077a123392c0dd.jpeg'),
(163, '2018-05-05 23:04:50', NULL, '82195f91deb93b614a0e125c0d26b86c4b829636.jpeg'),
(164, '2018-05-05 23:04:50', NULL, 'ebe56c2eb38ceafb423f7aa9f03f703abafa66bd.jpeg'),
(165, '2018-05-05 23:04:50', NULL, 'a48517856cd786deec5b9c1417cd322012aadceb.jpeg'),
(166, '2018-05-05 23:04:50', NULL, '9cf293d2e4f465fc902424b35b339b613b7b81fc.jpeg'),
(167, '2018-05-05 23:04:50', NULL, '5180df57bf19b5daacfd9b256a3c41ec60fc760b.jpeg'),
(168, '2018-05-05 23:04:50', NULL, '2b00e87060a890bfac070856fb2d40d5e9eccc2b.jpeg'),
(169, '2018-05-05 23:04:50', NULL, '4e82db5113c1068507119c2209fbc61535273412.jpeg'),
(170, '2018-05-05 23:05:03', NULL, 'f1e9ceb898786ee0757c49cf782eabf5e1789ddb.png'),
(171, '2018-05-05 23:05:03', NULL, '0e5efe592f10deba7bc912b55a7720a9e8c57087.jpeg'),
(172, '2018-05-05 23:05:03', NULL, '8af375166e8cbf865636e507a42112a2bb653fd3.jpeg'),
(173, '2018-05-05 23:05:03', NULL, '8e9c8b427fc8e3c0ddfcc9447174c9c42432566d.jpeg'),
(174, '2018-05-05 23:05:03', NULL, '8a3d14fffba38502c22eef5147747f86d62eeeb4.jpeg'),
(175, '2018-05-05 23:05:03', NULL, '83e5eaa529c57d01c8c47b858c22b01206debf73.png'),
(176, '2018-05-05 23:05:03', NULL, '4ff8dcd2995b8db379381f43d4281bf6c9cec236.png'),
(177, '2018-05-05 23:05:03', NULL, '2ba3c3133076dc499392560da52e947a177430db.png'),
(178, '2018-05-05 23:05:03', NULL, 'f8a64c250ab96f5194493bc8b9d0b55d54add5bd.png'),
(179, '2018-04-08 20:05:16', NULL, '857ba04fb13ba9e11f4c56fad7d19bc5aee88cc8.jpeg'),
(180, '2018-04-08 20:06:17', NULL, '83af3f8770826dc255d28ec9fc68f59a93dad226.jpeg'),
(181, '2018-05-01 15:49:45', NULL, '235ec18bc45cd39ba65c30daa20e597455d53cf4.jpeg'),
(182, '2018-05-01 15:49:45', NULL, '866daad798f2ccebd7604f6c6fdd26fa18af6b22.png'),
(183, '2018-05-01 15:49:45', NULL, 'f80a6d4d027e761670c44fd980b9407afa9fc589.jpeg'),
(184, '2018-05-01 15:49:45', NULL, '52603cf72c00073361f27b7b760bcb6d10a18bae.jpeg'),
(185, '2018-05-01 15:54:04', NULL, '736896516388ce3a871e43730a6c826ff904a666.jpeg'),
(186, '2018-05-01 15:54:04', NULL, 'eeafd34478f3c1f867decffcf7cda1c757d2d777.jpeg'),
(187, '2018-05-01 15:54:04', NULL, '87da3f4444ab8163d0d90d97beaf3b31b132eeeb.jpeg'),
(188, '2018-05-01 15:54:04', NULL, '1749bcc46859d76486437b367b8d3756864a0533.jpeg'),
(194, '2018-05-01 15:17:36', NULL, '34c14797acc43ab4f92193b4477ab6698b8ab4d3.jpeg'),
(195, '2018-05-01 15:17:36', NULL, '9ad5b02b4472f39c468cc646a867b6ae9baaeb2c.jpeg'),
(196, '2018-05-01 15:17:36', NULL, '974fa5df41728f43eb05c2b66c286ce4a2193a9b.jpeg'),
(197, '2018-05-01 15:17:37', NULL, 'a757c8734e1721ae48b6bcd105bb3f6c62fd26df.jpeg'),
(198, '2018-05-01 15:17:37', NULL, 'd1feb6fc6cc1e11999a83fac05598c9ed8bdc863.jpeg'),
(199, '2018-05-01 15:17:19', NULL, 'b7c23c779ff9c0263e04f5c93552b5026811e4ca.jpeg'),
(200, '2018-05-01 15:17:19', NULL, 'dcd626a04fafb062b59da43fdf93845149661c9c.jpeg'),
(201, '2018-05-01 15:17:19', NULL, 'b5d4b75ec7d567130f330244cb025dcd6d03917a.jpeg'),
(202, '2018-05-01 15:17:19', NULL, 'eebf330b78f76b3043056fb1725468f2ec0e0cc0.jpeg'),
(203, '2018-05-01 15:14:38', NULL, 'f8f19122057f68f184e4f03ae979f8a6d4084077.jpeg'),
(204, '2018-05-01 15:14:38', NULL, '53e9afb625e5bbe2645c1b670eb0a79ea2a1fa37.jpeg'),
(205, '2018-05-01 15:14:38', NULL, '218490709aeae410ab1980273345a96e1f62fe07.jpeg'),
(206, '2018-05-01 15:14:38', NULL, '27da6c4af3bc26325a3fec445f20d63eee7da95d.jpeg'),
(207, '2018-05-01 15:15:58', NULL, 'cea9580f23bdd34dd3b77e9af74d547ee75f122b.jpeg'),
(208, '2018-05-01 15:15:58', NULL, '6196262af2266449a52679a9a523b9bfea5525fd.jpeg'),
(209, '2018-05-01 15:15:58', NULL, '6fac4b9607e286d5b0b063368cb7cea18818d585.jpeg'),
(210, '2018-05-01 15:15:58', NULL, '8cd0fdf7c70a5ef81634af79e65450c550990b3a.jpeg'),
(211, '2018-05-01 15:15:01', NULL, '3331f5537dfd46c31196c06474c892b9a0085b0c.jpeg'),
(212, '2018-05-01 15:15:01', NULL, '94ef825f1232bdc0ab7a495574af24c92cbd6173.jpeg'),
(213, '2018-05-01 15:15:01', NULL, '01838b38061fe348b29650ba0c87aedeedc38225.jpeg'),
(214, '2018-05-01 15:15:01', NULL, '7dcf7a7ab5fc6cf760caee7fc68c5326ab6b7e1b.jpeg'),
(215, '2018-05-01 15:13:50', NULL, 'ab711d951f21fd0078f8db01bfd344c9b6cac145.jpeg'),
(216, '2018-05-01 15:13:50', NULL, '589ba195c3683d5660de6dd912bb2d0009222be0.jpeg'),
(217, '2018-05-01 15:13:50', NULL, '0809820e0d04522360ec559cee0186499d39518a.jpeg'),
(218, '2018-05-01 15:13:50', NULL, '4df5d1922e2ba494098e56bbe735d65475504182.jpeg'),
(219, '2018-05-01 15:17:37', NULL, '70f7ca040f62beee672291a5cf37addbf0447f36.jpeg'),
(220, '2018-05-01 15:17:37', NULL, 'eaa230bb7b4a6b79c4a43515d85c564b9de866be.jpeg'),
(221, '2018-05-01 15:17:37', NULL, '6468ffdd3720b1bad8ece012928613cabdd1b91d.jpeg'),
(222, '2018-05-01 15:17:37', NULL, '71cd4a40eb4f444079d814007c81c6699e71b68d.jpeg'),
(223, '2018-05-01 15:15:01', NULL, 'bdd42f370e6b493290c96bf623b605a94b1dbf40.jpeg'),
(224, '2018-05-01 15:15:01', NULL, '38179cb22cef91d1eb0533a8a0c88086291f8885.jpeg'),
(225, '2018-05-01 15:15:01', NULL, 'c20e038f9001233b66c6d196af83ff7fe28823f9.jpeg'),
(226, '2018-05-01 15:15:01', NULL, 'a4241e23eabad6244bd246e7b9ff9a7605725f5d.jpeg'),
(227, '2018-05-01 15:13:50', NULL, '4835eba7f16510077103bfb1f0d9f7006c25a2e0.jpeg'),
(228, '2018-05-01 15:13:50', NULL, '5cd65448fc8b8b84c1f42e7388efb45d5b17935a.jpeg'),
(229, '2018-05-01 15:13:50', NULL, '0b4a37560f6a6302f100236f3194fba6727d4c66.jpeg'),
(230, '2018-05-01 15:13:50', NULL, '7856adea293a7a3900e4c30a80251ecf922883c2.jpeg'),
(231, '2018-05-05 21:08:15', NULL, '0a789f545481f9bae453f11a1a1e97dbf78a7bd0.jpeg'),
(232, '2018-05-05 21:07:52', NULL, 'e58f1ff1e924152b22e0e6e35d79187c0df4f5e4.jpeg'),
(235, '2018-05-01 15:15:58', NULL, '90acc049c666e33191026d9767eca1ce578b1adc.jpeg'),
(236, '2018-05-01 15:15:58', NULL, 'dcaddcb1af9bedf21983372cfe023d8bfa8ad5e3.jpeg'),
(237, '2018-05-01 15:15:58', NULL, 'b368b406925b0260f79a72666de06cf2b9b44111.png'),
(238, '2018-05-01 15:15:58', NULL, '298ce94f713bea4b7e4a6f9588e0c4c0ebd1ef55.jpeg'),
(239, '2018-05-01 15:17:19', NULL, '8499247e2793ea933ddff05c9928d1491c3c912a.jpeg'),
(240, '2018-05-01 15:17:19', NULL, '309846af90d83f153925596fcde1bee95d325140.jpeg'),
(241, '2018-05-01 15:17:19', NULL, 'c8a71fde09acd28579387e4f7787e1533e3e4914.jpeg'),
(242, '2018-05-01 15:17:19', NULL, '926f0a71db80583b6a37bc729b87758f0af2d528.jpeg'),
(243, '2018-05-01 15:14:38', NULL, '44c6b8aea6f062fb6a68edffba83520dc26dff41.jpeg'),
(244, '2018-05-01 15:14:38', NULL, '0f80b18d25b8c7b4e29d6c20228f52983b45c3db.jpeg'),
(245, '2018-05-01 15:14:38', NULL, '77bd83b496ed9bbf38a459bae0d191969127784d.jpeg'),
(246, '2018-05-01 15:14:38', NULL, '119fbc4ed5d2d7f501716f1a657c5675a874d1d0.jpeg'),
(250, '2018-05-05 21:51:23', NULL, '4d1638bd58fbe124ab0fcf72fa3a20ea83b99876.jpeg'),
(251, '2018-05-05 21:51:23', NULL, 'd573bad9d20eb66c9a9fc628a7693505e0e3dd7c.jpeg'),
(252, '2018-05-05 21:51:23', NULL, '232ac2d3965a6ffe5bfae72747017f444b54fa52.jpeg'),
(253, '2018-05-05 21:51:23', NULL, '34f9cbd216e4f4936e81b082ab4f4b01719ed55b.jpeg'),
(254, '2018-05-05 21:51:23', NULL, '3757a130b3ca74f8510d9f2038f298f01b19fe8b.jpeg'),
(255, '2018-05-05 21:51:23', NULL, '9e2e5123edee05fb32923bec9b4297e974b7e4b1.jpeg'),
(256, '2018-05-05 21:51:23', NULL, '15ea471b0b28bec88fd5724144ce3ca7e6224cd7.jpeg'),
(257, '2018-05-05 21:51:23', NULL, '9c63646e9be880c5b41c9e35436d35e2f3d526dc.jpeg'),
(258, '2018-05-05 21:51:23', NULL, '79d4f549bcecf079bfc4538ba62af96d6e4ad23b.jpeg'),
(259, '2018-05-05 21:51:23', NULL, 'b2256d64221b264b5111e0a711f7b9d58b401a5e.jpeg'),
(260, '2018-05-05 21:51:23', NULL, '055609fc0c517262009a796e405069fc45607b7d.jpeg'),
(261, '2018-05-05 21:51:23', NULL, '0b8e88abd3531966b7a43f06831b70ebbb3b4674.jpeg'),
(262, '2018-05-05 21:51:23', NULL, '90b7b0635557fa3acbf4c051aa9ad2456c8bd093.jpeg'),
(263, '2018-05-05 21:51:23', NULL, '9007ce30854231314ecaa011d6b0508a3c62ef8d.jpeg'),
(264, '2018-05-05 22:05:06', NULL, '9d6e7623accbc997a224162b995df4c26bcd77d6.jpeg'),
(265, '2018-05-05 22:05:06', NULL, '0f7a8f34e912a2d175eb0656cf0b0f955bea092d.jpeg'),
(266, '2018-05-05 22:05:06', NULL, '73bc3adfc604ca5d204894228527c55c88311bfb.jpeg'),
(267, '2018-05-05 22:05:06', NULL, 'ba87670151a82a71ec6475c444174309bfea8d1f.jpeg'),
(268, '2018-05-05 22:05:06', NULL, '3563fa964b299b202eb2f74e9f89d5393429af64.jpeg'),
(269, '2018-05-05 22:05:06', NULL, '3b1e2835922ab7e7e415f20493f8f65790e086c1.jpeg'),
(270, '2018-05-05 22:05:06', NULL, '91ea14e2cf28276c0d3ee4d294163e288d059a68.jpeg'),
(271, '2018-05-05 22:05:06', NULL, '96d0fff4086f811e8534791f0a23de67bdb64ec4.jpeg'),
(272, '2018-05-05 22:05:06', NULL, 'b5da8393fce12e5db046b93e8d4414cdd03f3d33.jpeg'),
(273, '2018-05-05 22:05:06', NULL, '2eaa4c5409dd7cd439b0a0ec91647892a7826a33.jpeg'),
(274, '2018-05-05 22:05:06', NULL, '65a9285a88aa61df3beaea4bf797614e5b0d3ea6.jpeg'),
(275, '2018-05-05 22:05:06', NULL, 'd27a6c4be167c8c0c517f7c2fa7b0f4fbd0d9143.jpeg'),
(283, '2018-04-16 14:20:13', NULL, '0ae78cc597a49a8b3e143b2e8b0fac8b8e7aaaed.jpeg'),
(284, '2018-04-16 14:20:13', NULL, 'd12988844c1bd377a5116113c45d45213fdad5e5.jpeg'),
(285, '2018-04-16 14:20:13', NULL, 'caa02eaad3d79f9b8880e9a1db93f02dc2b7e899.jpeg'),
(286, '2018-04-16 14:20:13', NULL, 'b2b7ee1a3e566cccd3806d35e258a28ccfd41cca.jpeg'),
(287, '2018-04-16 14:20:13', NULL, 'f9aa8e6321f61c3a82af668383c8fd5efe785928.jpeg'),
(288, '2018-04-16 14:20:13', NULL, 'f3bd9bdffe19bf3f800979e9ad168387dcb4d21e.jpeg'),
(289, '2018-04-16 14:20:13', NULL, 'b18517139d0c0776dec488c535b608221a96de7d.jpeg'),
(290, '2018-04-16 14:20:13', NULL, '9924c1dae66e567f6db33215e65c2fa7c7480be0.jpeg'),
(291, '2018-04-16 14:20:13', NULL, 'b89181499adf37972dc3728c730d62a17c09cc43.jpeg'),
(292, '2018-04-16 14:20:13', NULL, '57c5cfc0dc4f210d01aed12b8914716ba02f1615.jpeg'),
(293, '2018-04-16 14:20:13', NULL, '427f6b375c2519dca73bbe2b96377bdab67a3bda.jpeg'),
(294, '2018-04-16 14:20:13', NULL, 'd8275fd5c1401ac94736b1d503de1fcb42e39dbb.jpeg'),
(295, '2018-04-16 14:20:13', NULL, '0ea0fc1fa4de9251eddc68366b9df97e4b40f192.jpeg'),
(296, '2018-05-05 22:11:05', NULL, '052d1ae584d5c098dc60ec47ff1a1a66252941f2.jpeg'),
(297, '2018-05-05 22:11:05', NULL, 'e93d97595313f736bcbcbc5cf96b339a8f128ec2.jpeg'),
(298, '2018-05-05 22:11:05', NULL, '3b3d6caba32161236b9e359ab57d4a611260d6df.jpeg'),
(299, '2018-05-05 22:11:05', NULL, '19cbd95b803f409f7d0de5b611a7c94e51f1ad06.jpeg'),
(300, '2018-05-05 22:11:05', NULL, '77abe3a2b1ed5b051d9308126a2ca929c3e1bd74.jpeg'),
(301, '2018-05-05 22:11:05', NULL, '57f542f0d8d1f1f3434c2e3acc14850a452c8539.jpeg'),
(302, '2018-05-05 22:11:05', NULL, '4d124281639ffeee4d374aeeda33606c10850747.jpeg'),
(303, '2018-05-05 22:11:05', NULL, NULL),
(304, '2018-05-05 22:13:49', NULL, 'e84b477aa7b3293b8d70c5dbbd18775227df7ce7.jpeg'),
(305, '2018-05-05 22:13:49', NULL, '866da9bcaaf9d17d49f2786844ef9afcbe1541e6.jpeg'),
(306, '2018-05-05 22:13:49', NULL, '8e59fe7802afe5c8b2557eb3037c1cbf68ebce4d.jpeg'),
(307, '2018-05-05 22:13:49', NULL, '73007a21475b13d5746b899cedaa66740cc62c05.jpeg'),
(308, '2018-05-05 22:13:49', NULL, 'b13f4a1e7a0fe55f3721568633bf463ec9b4b92e.jpeg'),
(309, '2018-05-05 22:13:49', NULL, '4733ead63beb25bb5acaeea2d7631e601275780b.jpeg'),
(310, '2018-05-05 22:13:49', NULL, 'f7cbc5f040d0488c41745f33e2248e8e75e616dc.jpeg'),
(311, '2018-05-05 22:38:09', NULL, '636eec26090fab0023bd740b49594a0be11663d4.jpeg'),
(312, '2018-05-05 22:38:09', NULL, '7232fa4ed55c9972719a4f27b251ee080e5de870.jpeg'),
(313, '2018-05-05 22:38:09', NULL, '38a6d122cdce00bf3dd61407325b23dee335c471.jpeg'),
(314, '2018-05-05 22:38:09', NULL, '0fe829b64954c27a30861bd6fd7f91a56857a83e.jpeg'),
(315, '2018-05-05 22:38:09', NULL, '5c72330543150cd5a6ef2f0635bc62bde46c8c68.jpeg'),
(316, '2018-05-05 22:38:09', NULL, '4854e225fc69facf2aadc4025eebc3ab97e8eff5.jpeg'),
(317, '2018-05-05 22:38:09', NULL, '304e9e10c77ca5d11b0323a3e4d5923d3eac47d1.jpeg'),
(318, '2018-05-05 22:38:09', NULL, '06a041ee67fed683284d7173d25a8fcec3a66505.jpeg'),
(319, '2018-04-14 15:21:40', NULL, '29e200eae0fec4c9f79ad6c83238f76d156a97b9.jpeg'),
(321, '2018-05-05 22:24:31', NULL, 'f1f5c8e9d621892610b4297175a664d70aa48d46.jpeg'),
(322, '2018-05-05 22:24:31', NULL, '61188e747e00f75c87790254463d3eac3e284eb7.jpeg'),
(323, '2018-05-05 22:24:31', NULL, '73d9f6b805766fb78e5a62e1ee4d40f7b24b698d.jpeg'),
(324, '2018-05-05 22:24:31', NULL, '30afb2fa759d7c2dd9230e01d9549d62528e1265.jpeg'),
(325, '2018-05-03 17:13:04', NULL, '7bddd7eef7c9ba9676fe28898bc11cf14373f41c.png'),
(326, '2018-05-03 17:13:04', NULL, '269859c902b674aee106ae12290ee915cf88cf9d.png'),
(327, '2018-05-03 17:13:04', NULL, '1f774e99c989b288735ea3e111175733e6f3a959.png'),
(328, '2018-05-03 17:13:04', NULL, 'a5eea68e6b21e3d70fb39fe93c4eafe2a5779378.png'),
(329, '2018-05-03 17:13:04', NULL, '39911761f811547f02c24c841e60e4cf2af7a3f5.png'),
(330, '2018-05-03 17:13:04', NULL, '6e230ef242eb1cd492225ffd56c814fb08c1cb8a.png'),
(331, '2018-05-03 17:13:04', NULL, '96a1e137028024ca7450e3606c8ebc685810047c.png'),
(332, '2018-05-03 17:11:34', NULL, 'ab64f295762ce1c8069f4a6136589912ccb72860.png'),
(333, '2018-05-03 17:11:34', NULL, 'de071df3c473c059e652788d9aaca368e7d0dd58.png'),
(334, '2018-05-03 17:11:34', NULL, '56c6b526be74054f7357927a7e8a69063b582faa.png'),
(335, '2018-05-03 17:11:34', NULL, '75a50900bad6325a4dc7880f1a429317ab76230c.png'),
(336, '2018-05-03 17:11:34', NULL, '89f63b9ef65f76e541677cc915d02785f19cac61.png'),
(337, '2018-05-03 17:11:34', NULL, '16d9659d2361d1f2757f4fa804352c9766b2571f.png'),
(338, '2018-05-03 17:11:41', NULL, 'ee7c7516165b355a56292363fe5f04308540cffa.png'),
(339, '2018-05-03 17:11:41', NULL, '7d7004a529f679c4ce32ab611dbb455c31d3f8f0.png'),
(340, '2018-05-03 17:11:41', NULL, '061b42f2189314e44c135d32a86daacc1ae52148.png'),
(341, '2018-05-03 17:11:41', NULL, '24a3c3916b52c0113222a160fae0e074515885ec.png'),
(342, '2018-05-03 17:11:41', NULL, '3ec94010b816c3ea52feb9805cd4225817f7adff.png'),
(343, '2018-05-03 17:11:41', NULL, '31f72e53624306583478857ffa1760a924cda56d.png'),
(344, '2018-05-03 17:11:47', NULL, '2ed6c916ea3f2152993c3578be051f43cfd997a5.png'),
(345, '2018-05-03 17:11:47', NULL, '464447c5bc67589da84378dbe36afbebd6b08dc8.png'),
(346, '2018-05-03 17:11:47', NULL, '34ee32329f06e1ad24bfd6de9fcfe2a9eb264003.png'),
(347, '2018-05-03 17:11:47', NULL, '265e0e29065b2ca3e53eb3990f0d69f5344cc5fb.png'),
(348, '2018-05-03 17:11:47', NULL, '7fef373d691c3e3482bad0fded7f41d79aa1a5e6.png'),
(349, '2018-05-03 17:11:47', NULL, '8f981b2be31d0c04cb6dbfd722b2dda7e78e1864.png'),
(350, '2018-05-03 17:11:05', NULL, 'cf70bfbea3f0aa2fbe30685fe58fb4c33ac7e397.jpeg'),
(351, '2018-05-03 17:11:05', NULL, 'b456061e671fc948fff7830f1804868b2552079e.jpeg'),
(352, '2018-05-03 17:11:05', NULL, '808b7a3987e1bf49ae3faf9a75fc7d76c58e14a1.jpeg'),
(353, '2018-05-03 17:11:05', NULL, 'fb4bee35b659b3bad842941d05d5af3bd41ed735.jpeg'),
(354, '2018-05-03 17:11:05', NULL, '259634572a21338454cd0dd254a24756d456b482.jpeg'),
(355, '2018-05-03 17:11:05', NULL, '90abb199621c5b8b2ae67bd2b12d9133b7faa6b7.jpeg'),
(356, '2018-05-04 18:30:15', NULL, 'a4ca7b490b3c398045b5e7dc8bcdb9bcb6cb12cd.jpeg'),
(357, '2018-05-04 18:30:15', NULL, '25467bd4e387115cad83d9854892ca7b5b02ee5a.jpeg'),
(358, '2018-05-04 18:30:15', NULL, '43a73a8077e838526bf3e6e7c091573059134303.jpeg'),
(359, '2018-05-04 18:30:15', NULL, '37489aa4530f512c2be60e39b83db146611cb87f.jpeg'),
(360, '2018-05-04 18:30:15', NULL, 'fb5124132f00cf1282835806058841d540f0c0c7.jpeg'),
(361, '2018-05-04 18:30:15', NULL, '744aa772cf3ccd518d2bce0c953effbac3a44ef8.jpeg'),
(362, '2018-05-04 18:30:15', NULL, 'd6c9f9b8f18935506fc2990a5ff3cd9ae4164056.jpeg'),
(363, '2018-05-04 18:30:15', NULL, 'df77d57e19036cb6488b9322d759a381ed27f56f.jpeg'),
(364, '2018-05-01 15:54:04', NULL, '60f66f45c9bcd6deec4c722f927c1d06daf24622.jpeg'),
(365, '2018-05-01 15:54:04', NULL, '1d3c04be874caa9c5d4be9a5dbd9c1be50dde8c9.jpeg'),
(366, '2018-05-01 15:54:04', NULL, '5d426e06055c861987d9015b1d70b548811b1cee.jpeg'),
(367, '2018-05-01 15:54:04', NULL, '5f50dad5fbe2a5b50921006567c0fe0d245a856e.jpeg'),
(368, '2018-05-01 15:54:04', NULL, '2a1d9e86b93d95c118f5acf953a4e2ca34ca342a.jpeg'),
(369, '2018-04-23 17:47:58', NULL, 'b17a4b79aa9d0460c63626f2cf5cb8754685367a.jpeg'),
(370, '2018-04-23 17:47:58', NULL, '76219a29e107b10016e5a34083b473c6d8feef27.jpeg'),
(371, '2018-04-23 17:47:58', NULL, '57f65edc9804bcc0d406df1e48b88d94309da038.jpeg'),
(372, '2018-04-23 17:47:58', NULL, 'fb901d1b2aa45da7088c4d6eb8b39901f9b1f926.jpeg'),
(373, '2018-04-23 17:47:58', NULL, 'ab6f5daccdb2010f66b75e085c02fa58106e4ff6.jpeg'),
(374, '2018-04-23 17:47:58', NULL, 'fde3dd68518d013ec7dfc01bd2623748e00f2bce.jpeg'),
(375, '2018-04-23 17:47:58', NULL, NULL),
(376, '2018-05-03 17:10:43', NULL, '363a068eb0c457ce7bf365355ca5377341edb58d.jpeg'),
(377, '2018-05-03 17:10:43', NULL, '6d1c8b905570e5a5942c9fe0cbc9ab8765e6834b.jpeg'),
(378, '2018-05-03 17:10:43', NULL, 'c1db5a2d5d9b145d5ef9c20000d871d604072348.jpeg'),
(379, '2018-05-03 17:10:43', NULL, '376634762093518f4bd486ac99c50f835fe7783e.jpeg'),
(380, '2018-05-03 17:10:43', NULL, 'be32fbd6ba28ae8fc963c9d9f3f09e8cd87b3db2.jpeg'),
(381, '2018-05-03 17:10:43', NULL, '7ac8a79651d8e5e7b93cfa378e985882b8de9858.jpeg'),
(382, '2018-05-03 17:10:43', NULL, 'e48f37d86b40c742205439330e85276e5c530658.jpeg'),
(383, '2018-05-03 17:10:33', NULL, 'a6bc86750527203fece9e952da89ed3f21660bac.jpeg'),
(384, '2018-05-03 17:10:33', NULL, '30cd68b6a44cf0d19e5b26d6b5dd9b424fbf3a19.jpeg'),
(385, '2018-05-03 17:10:33', NULL, '4e7f3cda9dd71c033654ca0d7b6cbaff31ed3758.jpeg'),
(386, '2018-05-03 17:10:33', NULL, 'c03961eb2b171b3af2d5b4782a9f787fd95a9a5c.jpeg'),
(387, '2018-05-03 17:10:33', NULL, 'f1c945ac4b1053a924085461ea1e526c92c0d96a.jpeg'),
(388, '2018-05-03 17:10:33', NULL, '080abfe3cc383c2a8bc4f9cd2b707891a9070ce3.jpeg'),
(389, '2018-05-03 17:10:33', NULL, '4fe5c1dd5edda0fc2200cc5cc893702ee2d7cf35.jpeg'),
(390, '2018-05-03 17:10:33', NULL, '0d4dea5a8c57649932863d741fe1e9e705101377.jpeg'),
(391, '2018-05-03 17:10:33', NULL, '8345bc009e0ca04bbd643b3a1f2d3c5e2da47dc2.jpeg'),
(392, '2018-05-03 17:10:33', NULL, '88848f21c10d62c8b24af65c8f36996416434db7.jpeg'),
(393, '2018-05-03 17:10:33', NULL, '0b5b67a9da7a80065624708fad20a8f3bdbcf10e.jpeg'),
(394, '2018-05-03 17:10:11', NULL, '34b74ce83100a9358dcfb4cc564139ce350ce856.jpeg'),
(395, '2018-05-03 17:10:11', NULL, 'cc126dc1db7806c3a4b030cc20943ce7e6308d18.jpeg'),
(396, '2018-05-03 17:10:11', NULL, 'ffbd8447255b8e419893eeb46af2c79c72879944.jpeg'),
(397, '2018-05-03 17:10:11', NULL, '5e89befd0a5d78af0b7857ea833e883bb6fffade.jpeg'),
(398, '2018-05-03 17:09:57', NULL, '98b9ea3cade26935bb96e92adef71c3fbb75cf31.jpeg'),
(399, '2018-05-03 17:09:57', NULL, '5c516e9262198bb1d7b140be1acf7a6df821e287.jpeg'),
(400, '2018-05-03 17:09:57', NULL, 'e005ed8b566fe30fbe12ce4d4cf09f0f30f2c8ee.jpeg'),
(401, '2018-05-03 17:09:57', NULL, '0f1d3478789856ebfdd23fa1afea2dd3d49a623e.jpeg'),
(402, '2018-05-03 17:09:57', NULL, '9e7d0259b5e61c2450bcb53b0fae491677c1cbed.jpeg'),
(403, '2018-05-03 17:09:57', NULL, '5aee082dec61b4538fcf2b3ba7973a723a2b1ade.jpeg'),
(404, '2018-05-03 17:09:48', NULL, 'e13e71254b931893c30a4edb6a5353465e873cf8.jpeg'),
(405, '2018-05-03 17:09:48', NULL, 'a8543446b8302c4d6b8be6c5e7db651c5ed4bf32.jpeg'),
(406, '2018-05-03 17:09:48', NULL, '8228a3b16d83f0189b0e3ce7ae7c83835e61652d.jpeg'),
(407, '2018-05-03 17:09:48', NULL, 'e1d14147e5e147219b29e0a25b868b666f486a4b.jpeg'),
(408, '2018-05-03 17:09:48', NULL, '78f03980aec3c91023c0f4d807e7cd90226d6638.jpeg'),
(409, '2018-05-03 17:09:48', NULL, '6c0a0340eea2bfff0c4419a1702c296a9081f9a2.jpeg'),
(410, '2018-05-03 17:09:48', NULL, '4fb07ff7e0772475ec7f9376364256cbfcee4e75.jpeg'),
(411, '2018-05-03 17:09:48', NULL, '9034c7f5ad7201901d4d5c7bdd610a29c9e66b13.jpeg'),
(412, '2018-05-03 17:09:48', NULL, '8273c0265d872109ef773f2280494e76e09d4b4a.jpeg'),
(413, '2018-05-03 17:09:48', NULL, '43be478d228dfa7e7500c82a0d9662dc9008ae1d.jpeg'),
(414, '2018-05-03 17:09:48', NULL, '97d5a413bc4075c23e31960a47c50e486a8a0bdf.jpeg'),
(415, '2018-05-03 17:08:58', NULL, 'cbcfae65ed3d63d4f3b061c7460c0a7840c7c145.jpeg'),
(416, '2018-05-03 17:08:58', NULL, '8966666e0099d2314920a77023a84d3f53ab25e2.jpeg'),
(417, '2018-05-03 17:08:58', NULL, 'e6b2ebc207b2cb17bb622791340d5cfa198c809a.jpeg'),
(418, '2018-05-03 17:08:58', NULL, '2a55d74506cd0686b2f604686b244f4101446fc2.jpeg'),
(419, '2018-05-03 17:08:58', NULL, '1f9da835a0be824b21625d9446127acf1095254d.jpeg'),
(420, '2018-05-03 17:08:58', NULL, 'ef1615bd0211a76d204e0e8b741f94a45bf9857a.jpeg'),
(421, '2018-05-03 17:08:58', NULL, '9c2cefc1026e42246c545452d209f6f052cae667.jpeg'),
(422, '2018-05-03 17:08:50', NULL, '67ccc697e4b1633fd23899098270522f22136385.jpeg'),
(423, '2018-05-03 17:08:50', NULL, 'b8e87d055e428ff1c0f05c46b2d48c1f6c605fcb.jpeg'),
(424, '2018-05-03 17:08:50', NULL, 'd03a09263186f6c0574526ef44d3a64920a3895a.jpeg'),
(425, '2018-05-03 17:08:50', NULL, 'b4d43225c8fa4b0233638714345aa3178c882c93.jpeg'),
(426, '2018-05-03 17:08:50', NULL, 'a7f0f02491ba532ce8c510cf0c32a718deea87ca.jpeg'),
(427, '2018-05-03 17:08:50', NULL, '4c050f0bbec27f3459dd4ee1610b3986d8ad5d81.jpeg'),
(428, '2018-05-01 15:49:45', NULL, '8f7673a58d157d28ab7cc4f48c4c8b96f23b4cc6.jpeg'),
(429, '2018-05-01 15:49:45', NULL, '341a7acac89e9937317ceafe8c9eb6a8358c5292.jpeg'),
(430, '2018-05-01 15:49:45', NULL, '2b66bae27cf8577f1c2a3b9a3df49b535ff75b57.jpeg'),
(431, '2018-05-01 15:49:45', NULL, '439b7d779c490c85cb8914cee9dd2b6ecaa7b33b.jpeg'),
(432, '2018-05-03 17:24:02', NULL, '252da59f9190ea2aeeba8cda2e5a7ed85fa191fd.jpeg'),
(433, '2018-05-03 17:24:02', NULL, '935112b09eae7b0f297011f801d30904dd1b9f61.jpeg'),
(434, '2018-05-03 17:24:02', NULL, '845c83a883fb67f3a6c8aa746acbc4b46b56de70.jpeg'),
(435, '2018-05-03 17:24:02', NULL, '388ad4a1cfa0aed75ac6910736b82348172cfc2b.jpeg'),
(436, '2018-05-03 17:24:02', NULL, '0a6a044bf4d051494d96ad983d6d358e625c7f90.jpeg'),
(437, '2018-05-03 17:24:02', NULL, 'b10e10d0ac00067c51faa5205ade11967faa3d36.jpeg'),
(438, '2018-05-03 17:24:02', NULL, 'a8dda58c16d6a2bf5250622b9d967f2e77f0fc59.jpeg'),
(439, '2018-05-03 17:24:02', NULL, 'e84f017c64ab45bf39f9e87edff786225c4f56aa.jpeg'),
(440, '2018-05-03 17:08:19', NULL, '5b29a89005fa78eafaf0105fa057ce8053211a36.jpeg'),
(441, '2018-05-03 17:08:19', NULL, '18ae2efdc661f217efd943e460a1f8ebaf2d7a2a.jpeg'),
(442, '2018-05-03 17:08:19', NULL, '545a1b451b79aeb6edeebbc7f4f7d50e7c76c864.jpeg'),
(443, '2018-05-03 17:08:19', NULL, '67b07f7d71c74198ef9ea91dec3f0c5bd739fc2f.jpeg'),
(444, '2018-05-03 17:08:19', NULL, '4de84348676bc5fb4cae7fb798234bde0b1864d5.jpeg'),
(445, '2018-05-03 17:08:19', NULL, '90cb1fc6117a9938a68ae04ce37099266c396e6a.jpeg'),
(446, '2018-05-03 17:08:19', NULL, 'ab6c7cc7ebcc51a44ff8497c8be674392aaaa637.jpeg'),
(447, '2018-05-03 17:08:19', NULL, '1225757c6a1f9735ee6dae39debd922843a93740.jpeg'),
(448, '2018-05-03 17:08:19', NULL, 'e6f2f6cff8ee3853f264a94e13352eec44eb39e3.jpeg'),
(449, '2018-05-03 17:08:19', NULL, '4abc3915f1c3ed300e4b4f98555e1952adf2b99b.jpeg'),
(450, '2018-05-03 17:08:19', NULL, NULL),
(451, '2018-05-04 19:49:07', NULL, '914510fb14e8b34af28baf4cb96a0e964f6160a8.jpeg'),
(452, '2018-05-04 19:49:07', NULL, '0f95d65b0aae321c450ef5c6134eb94205a1bf8e.jpeg'),
(453, '2018-05-04 19:49:07', NULL, '6c1d258065aeff126e0545a2e2d6fb25a3cde481.jpeg'),
(454, '2018-05-04 19:49:07', NULL, '05e5f0ab6d12b535f74415fb933e93db3b892502.jpeg'),
(455, '2018-05-04 19:49:07', NULL, '17365f6bdd120c0eab49aac1c0a0f356041d8e7d.jpeg'),
(456, '2018-05-04 19:49:07', NULL, 'f10ce53fa10039859575c632c0fadee9a06569b6.jpeg'),
(457, '2018-05-04 19:49:07', NULL, '00053d8604bdf36317c79898f39bb83e570fbfb7.jpeg'),
(458, '2018-05-04 19:49:07', NULL, '15ee7f2636cd6253055ec23b297ec6aa6c488969.jpeg'),
(459, '2018-05-04 19:49:07', NULL, '166842c9b4d56a1b16359fdffa6a78ea8f304763.jpeg'),
(460, '2018-05-04 19:49:07', NULL, 'f06a371ca107e8b580d02a5a40d3246b0b16bb4c.jpeg'),
(461, '2018-05-04 19:49:07', NULL, '29dbd5785c8d7a048cf19a2c7f7b8cbe05e38341.jpeg'),
(462, '2018-05-04 19:49:07', NULL, 'd9fb7d6eaaa996c3833107f8ce5b568610bb5ba2.jpeg'),
(463, '2018-05-04 19:49:07', NULL, '6e912989254171287617b94e5faffeb4b3d0ed88.jpeg'),
(464, '2018-05-04 19:49:07', NULL, 'bf625c9f8ce8fe993a1369d06ae9c325c23c4a94.jpeg'),
(465, '2018-05-04 19:49:07', NULL, 'd2433f5f3f3fe07b5fc6a6ea9d5b3e2959845316.jpeg'),
(466, '2018-05-04 19:49:07', NULL, 'deb7a8e9843e421e4c9b57799310d4b35c93deaa.jpeg'),
(467, '2018-05-04 19:49:07', NULL, 'f113bcd062b458fc90a624f8ab7d4980d105ca3a.jpeg'),
(468, '2018-05-03 17:08:05', NULL, '6ebf0044f1ffb805a4c6ecc8dfce44bf86a14b63.jpeg'),
(469, '2018-05-03 17:08:05', NULL, '28c7b06caf7e6f95e11154ef6d9c55c5606f6866.jpeg'),
(470, '2018-05-03 17:08:05', NULL, '429b12dc8f417e34338d53a9e7e7877da86a5fc5.jpeg'),
(471, '2018-05-03 17:08:05', NULL, '44379ab6fff768f6a0f46c3e5d0df8fda2adc564.jpeg'),
(472, '2018-05-03 17:08:05', NULL, '029b7e3ddcff6632b3a6ea3be8e38717403c7497.jpeg'),
(473, '2018-05-03 17:08:05', NULL, '9a76c9ae97fd67b6c4a519f75f06ff7c892f7ed6.jpeg'),
(474, '2018-05-03 17:08:05', NULL, '3a4c3c4b2f38ed61d4a884c778db837c1637cd1b.jpeg'),
(475, '2018-05-03 17:08:05', NULL, '8c0883dba062e73418221111636d5c5cb5bad73a.jpeg'),
(476, '2018-05-03 17:08:05', NULL, '4e8db68a4627faad1e0bac82133ac85f37a973ab.jpeg'),
(477, '2018-05-03 17:08:05', NULL, 'b22dc3a8feb3ae7a9a68a9301d9b279c4ef7b1dc.jpeg'),
(478, '2018-05-03 17:08:05', NULL, 'd7ff44aa9b6f22a6c3040b0cad2ec12e04599c80.jpeg'),
(479, '2018-05-03 17:08:05', NULL, 'd0e7d9bc2e4283a61f73f9630e75a49dcfa403b2.jpeg'),
(480, '2018-05-03 17:08:05', NULL, '302bdc5cddad6708a6d192e19901e70e07c8e929.jpeg'),
(481, '2018-05-03 17:08:05', NULL, 'bfe2e2c46fb46de59ac2898b19adfd136e1f73fa.jpeg'),
(482, '2018-05-03 17:08:05', NULL, '7b21e2101cd36e75e8422bd751d74bdb1fe06352.jpeg'),
(483, '2018-05-05 22:24:31', NULL, '3984b34794c65f53b16bc0051063bc2e23fbaa41.jpeg'),
(484, '2018-05-05 22:24:31', NULL, '0b54143af3299137ee16e14d4e0e12a4c1ee55d3.jpeg'),
(485, '2018-05-04 18:30:15', NULL, '1e7a7f75add9712738ec0455c4d0d21074ad205d.jpeg'),
(486, '2018-05-04 18:30:15', NULL, '04c6a532ec53c33a052558181aaee1f61267bec5.jpeg'),
(487, '2018-05-04 18:30:15', NULL, 'fd0deb300bc18f9da83aeb2c61b7c528b2b651af.jpeg'),
(488, '2018-05-04 20:38:30', NULL, '2cf1c611ab375adf1643f7d7554fe1aefc84f963.jpeg'),
(489, '2018-05-04 20:38:30', NULL, '55c6a07a9ec84d2190b9689d3806d0a1b56ecdd4.jpeg'),
(490, '2018-05-04 20:38:30', NULL, '89f16245e8a12aea0a5647e76a11b3556db2046c.jpeg'),
(491, '2018-05-04 20:38:30', NULL, '2a81cd327a15b255481eaade66ad6f885c165136.jpeg'),
(492, '2018-05-04 20:38:30', NULL, 'a083a95455c6f73de06c9006fab817108ab23e79.jpeg'),
(493, '2018-05-04 20:38:30', NULL, '7fb3d0c8d5ec31e97753ec4e1c9ae850b6069cdb.jpeg'),
(494, '2018-05-04 20:38:30', NULL, '67902b8c39c41365b1152582726d985830de456a.jpeg'),
(495, '2018-05-05 12:54:35', NULL, 'b2040198609c26e6ccb79d0fb242ffd4ca51fb22.jpeg'),
(496, '2018-05-05 12:54:35', NULL, 'ea9ac8aa2383314912e167935d5d339533f8f29c.jpeg'),
(497, '2018-05-05 12:54:35', NULL, '6d9a22675943d6305b9b2f30ff00e58083b86692.jpeg'),
(498, '2018-05-05 12:54:35', NULL, '3f1c66ae0a11195b29e56da1585b049b1a4fb06f.jpeg'),
(499, '2018-05-05 12:54:35', NULL, 'f614519b6a04ca1a417a3cf1d99680e19ea8d56e.jpeg'),
(500, '2018-05-05 12:54:35', NULL, '60bdf924c1ced6aa3d2048a4912880d154ddc8f5.jpeg'),
(501, '2018-05-05 12:54:35', NULL, '15546a17d0c7b91bebeba27dc431e6e766981f1f.jpeg'),
(502, '2018-05-05 12:54:35', NULL, '9f79d645e84b93b211a96a49cb0a2cbb3066c2fc.jpeg'),
(503, '2018-05-05 12:54:35', NULL, 'bd8faf46f396e0500b843706f4b35b347cfb1c02.jpeg'),
(504, '2018-05-05 22:24:31', NULL, 'a3ca36403f404461f3531f2dcbbd84a517edf96e.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `message2` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `neufs`
--

DROP TABLE IF EXISTS `neufs`;
CREATE TABLE IF NOT EXISTS `neufs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banniere1_id` int(11) DEFAULT NULL,
  `parents_id` int(11) DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `types_id` int(11) DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soustitre` tinytext COLLATE utf8_unicode_ci,
  `exclusive` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `typebien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ref` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text1` longtext COLLATE utf8_unicode_ci,
  `text2` longtext COLLATE utf8_unicode_ci,
  `prix` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surface` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pieces` int(11) DEFAULT NULL,
  `chambres` int(11) DEFAULT NULL,
  `ascenseur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gardien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interphone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chauffage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `construction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stationnement` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `annee` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surfacet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saledebain` int(11) DEFAULT NULL,
  `terrasse` int(11) DEFAULT NULL,
  `disponible` date DEFAULT NULL,
  `garages` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `standing` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anneeconst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `consommation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wc` int(11) DEFAULT NULL,
  `cuisine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `piscine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_44497F1C989D9B62` (`slug`),
  UNIQUE KEY `UNIQ_44497F1CA5EC1C36` (`banniere1_id`),
  KEY `IDX_44497F1CB706B6D3` (`parents_id`),
  KEY `IDX_44497F1CA21214B7` (`categories_id`),
  KEY `IDX_44497F1C8EB23357` (`types_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `neufs_media`
--

DROP TABLE IF EXISTS `neufs_media`;
CREATE TABLE IF NOT EXISTS `neufs_media` (
  `neufs_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`neufs_id`,`media_id`),
  KEY `IDX_7E0DCAC5D4DA036D` (`neufs_id`),
  KEY `IDX_7E0DCAC5EA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `neufs_slideneufs`
--

DROP TABLE IF EXISTS `neufs_slideneufs`;
CREATE TABLE IF NOT EXISTS `neufs_slideneufs` (
  `neufs_id` int(11) NOT NULL,
  `slideneufs_id` int(11) NOT NULL,
  PRIMARY KEY (`neufs_id`,`slideneufs_id`),
  KEY `IDX_31AFE0F9D4DA036D` (`neufs_id`),
  KEY `IDX_31AFE0F9718B6319` (`slideneufs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parents`
--

DROP TABLE IF EXISTS `parents`;
CREATE TABLE IF NOT EXISTS `parents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `parents`
--

INSERT INTO `parents` (`id`, `nom`) VALUES
(1, 'Luxury immobilier'),
(2, 'Luxury automobile');

-- --------------------------------------------------------

--
-- Structure de la table `parents_categories`
--

DROP TABLE IF EXISTS `parents_categories`;
CREATE TABLE IF NOT EXISTS `parents_categories` (
  `parents_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  PRIMARY KEY (`parents_id`,`categories_id`),
  KEY `IDX_2FAF3219B706B6D3` (`parents_id`),
  KEY `IDX_2FAF3219A21214B7` (`categories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parents_media`
--

DROP TABLE IF EXISTS `parents_media`;
CREATE TABLE IF NOT EXISTS `parents_media` (
  `parents_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`parents_id`,`media_id`),
  KEY `IDX_A71ADDBEB706B6D3` (`parents_id`),
  KEY `IDX_A71ADDBEEA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `parents_media`
--

INSERT INTO `parents_media` (`parents_id`, `media_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `photosusers`
--

DROP TABLE IF EXISTS `photosusers`;
CREATE TABLE IF NOT EXISTS `photosusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `updated_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `photosusers`
--

INSERT INTO `photosusers` (`id`, `updated_at`, `name`, `email`, `path`) VALUES
(1, '2018-04-24 22:14:07', NULL, NULL, '50f8d9b439ec3bf3dc9e5b344c2feb27.jpeg'),
(2, '2018-04-24 22:14:21', NULL, NULL, 'b6bfc1437a592df8bfb76ebc5c24797c.jpeg'),
(3, '2018-04-24 22:20:42', NULL, NULL, '0944312948984ac8784dc686c68a9150.jpeg'),
(4, '2018-04-24 22:20:47', NULL, NULL, '44520cadd9eeaa9b3f271e0bb10a91f2.jpeg'),
(5, '2018-04-24 22:23:52', NULL, '2', 'dce815046ba2ed52b95bcb823dd7eeea.jpeg'),
(6, '2018-04-24 22:24:02', NULL, '2', 'cdb9474d31fa35b2846b1309b49c931d.jpeg'),
(7, '2018-04-24 22:33:21', NULL, '3', '9a83e0ecd590b1cbe08266d4614380df.jpeg'),
(8, '2018-04-24 22:38:08', NULL, '4', 'c61a9e8b0617e6fd3dfcd69dd0a4b32c.jpeg'),
(9, '2018-04-24 22:38:10', NULL, '4', '51b687cd64f9a209ead75c63b53b6266.jpeg'),
(10, '2018-04-24 22:46:15', NULL, '5', 'e1be6cae0149fe1aec6dc23be36b0eed.jpeg'),
(11, '2018-04-24 22:46:18', NULL, '5', 'cff02a4c97904158edf20a65e99883d5.jpeg'),
(12, '2018-04-24 22:50:47', NULL, '7', 'ca168b92367dedaea0b2b31f6808706d.jpeg'),
(13, '2018-04-24 22:50:48', NULL, '7', 'e582ba8bbd4d865bf3dee2de452a5612.jpeg'),
(14, '2018-04-24 22:55:05', NULL, '8', '52352163174ef502d6b8bd5f5bb021e2.jpeg'),
(15, '2018-04-24 23:01:37', NULL, '9', '51025eae2d7de13d71b780b163f9cd98.jpeg'),
(16, '2018-04-24 23:01:44', NULL, '9', 'c57827d24882e091930c67d96cca351f.jpeg'),
(17, '2018-04-24 23:02:25', NULL, '9', 'ee1d4f021ad775d4151f40477acd1264.jpeg'),
(18, '2018-04-24 23:02:33', NULL, '9', 'dddc5400387988ed6ab3a7c04fd31b2f.jpeg'),
(19, '2018-04-24 23:02:46', NULL, '9', '44495b1bfd8000b3b59883c37a0f1bba.jpeg'),
(20, '2018-04-24 23:02:55', NULL, '9', '876421441d64066aca021757613d0930.jpeg'),
(21, '2018-04-24 23:03:03', NULL, '9', 'f62538a4758be74c558646d395946fef.jpeg'),
(23, '2018-04-24 23:08:43', NULL, '10', 'cecba957a2cb3dcb80014368bd4eb785.jpeg'),
(24, '2018-04-24 23:08:54', NULL, '10', '43ff7a0668f18cd6ff8ca32e9d5429e3.jpeg'),
(25, '2018-04-24 23:08:59', NULL, '10', 'bd7f72438939a12cb829c915fdd308c8.jpeg'),
(26, '2018-04-24 23:09:06', NULL, '10', '7dd74bec13260e3cacff173402b44de0.jpeg'),
(27, '2018-04-24 23:09:06', NULL, '10', 'e7045c2b2d53a0ced38f86dffa2ac0c4.jpeg'),
(28, '2018-04-24 23:09:08', NULL, '10', '1a82df1354c2a588ea92f454c2b92246.jpeg'),
(29, '2018-04-24 23:09:32', NULL, '10', 'c6752c447fe1e14cef51f7e7aa846690.jpeg'),
(31, '2018-04-24 23:11:41', NULL, '11', 'bcd47011405eb39e3dcb395536d7ac8e.jpeg'),
(32, '2018-04-24 23:11:51', NULL, '11', '30c0bf0626f384f83fafba4b85b4f0ca.jpeg'),
(33, '2018-04-24 23:11:54', NULL, '11', '9dd85f472c842b0dca9d9c2b039fed12.jpeg'),
(34, '2018-04-24 23:12:21', NULL, '11', 'b8f4a50a62d8c2ee21db37c04e5c32a9.jpeg'),
(35, '2018-04-24 23:12:32', NULL, '11', 'd837487cd117be53195dd9363db5f996.jpeg'),
(36, '2018-04-24 23:15:19', NULL, '12', 'a523789d0c254b9d2b8602c152b14777.jpeg'),
(37, '2018-04-24 23:15:25', NULL, '12', '36f53685e0fe5cb309b5eb7ca8c93459.jpeg'),
(38, '2018-04-24 23:16:13', NULL, '12', 'ad1621a2bba1d4fcfa938e61cca63e42.jpeg'),
(39, '2018-04-24 23:16:25', NULL, '12', '86387a48fa18dab0026a626785c09da7.jpeg'),
(40, '2018-04-24 23:16:29', NULL, '12', 'b0a119a3016efb8a1dbfb62814f988ac.jpeg'),
(41, '2018-04-24 23:16:36', NULL, '12', 'f91b2609fda3fcd8193bf09bccc5d266.jpeg'),
(43, '2018-04-24 23:16:53', NULL, '12', '196b5657aba456b0b93a781f4306fbf5.jpeg'),
(44, '2018-04-24 23:17:11', NULL, '12', 'c3753947bdf092a250d2845762324b66.jpeg'),
(45, '2018-04-24 23:17:13', NULL, '12', '8d894f84aafd4b529b6827628398e2bb.jpeg'),
(46, '2018-04-25 21:49:24', NULL, '13', '6c5327b9a0fe05553c8c4a61ac72724c.png'),
(47, '2018-04-25 21:49:27', NULL, '13', '8ba46b1e9f61dbca398cf1c8bb08bbe6.jpeg'),
(48, '2018-04-25 21:49:32', NULL, '13', 'a33af62a072ed8bc422b0c41625a9226.jpeg'),
(49, '2018-04-25 21:49:59', NULL, '13', '64afe1af32ec6a59b080850b0616b614.jpeg'),
(50, '2018-04-25 21:50:08', NULL, '13', '04a23b2a3b8bd31c3f9c3c68345a3b8a.jpeg'),
(52, '2018-05-01 19:21:28', NULL, '15', 'aa46768b0dd2ae6156ca32e7d05e0d1d.jpeg'),
(53, '2018-05-01 19:21:28', NULL, '15', 'e5b1c3d9d5cc9078724018127a456380.jpeg'),
(54, '2018-05-01 19:22:10', NULL, '15', 'ec939cb656074461243dbef91911da06.jpeg'),
(55, '2018-05-01 19:22:10', NULL, '15', '793c7ffae3efcddc8fc3aa5bbdd9273c.jpeg'),
(56, '2018-05-01 19:22:44', NULL, '15', '893367a87e433d9bc71fa16cadc37bc4.jpeg'),
(57, '2018-05-01 19:22:44', NULL, '15', '51da17ba7443475e700c0741074bf1ee.jpeg'),
(58, '2018-05-02 18:30:58', NULL, '16', '8be11e1fd4f1fce421d4df94501f9300.jpeg'),
(59, '2018-05-02 18:31:18', NULL, '16', '1de20dfd31db12e7b26f379177201b34.jpeg'),
(61, '2018-05-02 18:32:03', NULL, '16', '3d5cbbe0390d353e0642e4b8b231559b.jpeg'),
(62, '2018-05-02 18:32:03', NULL, '16', 'b913e903cb4a6aff26f79d9f55fb96a5.jpeg'),
(63, '2018-05-02 18:32:06', NULL, '16', '1cdc81b2d6e9d8760763b55dd47438bb.jpeg'),
(64, '2018-05-02 18:32:07', NULL, '16', '15dbcf3d602f31cd1761bc1c72d6fb56.jpeg'),
(67, '2018-05-02 18:44:49', NULL, '16', 'bd09edb9482add62a2bba150f26d5173.jpeg'),
(68, '2018-05-02 18:44:50', NULL, '16', '082d6bfd7f5cfa733dbb104437aa0715.jpeg'),
(69, '2018-05-02 18:44:51', NULL, '16', '59db618b231d8c6a16fe29dd4d271fae.jpeg'),
(70, '2018-05-02 18:44:52', NULL, '16', '9b34c85f95242c7037a2d7ca47235da1.jpeg'),
(71, '2018-05-02 18:44:53', NULL, '16', '51ecd92f90528b32bdbc8f2e4a221b22.jpeg'),
(72, '2018-05-02 18:44:54', NULL, '16', '0fe4c8b2cbc954069f1237ce6fe84026.jpeg'),
(74, '2018-05-04 23:12:53', NULL, '18', '9582fc1ca8dfdbcc02f1587760bd5223.jpeg'),
(75, '2018-05-04 23:13:17', NULL, '18', '0e4c2ee4e7a4ca09bd173411d2b379b7.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parents_id` int(11) DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `types_id` int(11) DEFAULT NULL,
  `count_views` int(11) NOT NULL,
  `duree` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exclusive` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `typebien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ref` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text1` longtext COLLATE utf8_unicode_ci,
  `text2` longtext COLLATE utf8_unicode_ci,
  `reglementation` longtext COLLATE utf8_unicode_ci,
  `climatisation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `internet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordinateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `machinealaver` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prix` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surface` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pieces` int(11) DEFAULT NULL,
  `chambres` int(11) DEFAULT NULL,
  `ascenseur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gardien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interphone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chauffage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `construction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mecanisme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stationnement` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `annee` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surfacet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saledebain` int(11) DEFAULT NULL,
  `terrasse` int(11) DEFAULT NULL,
  `disponible` date DEFAULT NULL,
  `garages` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `standing` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anneeconst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `consommation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wc` int(11) DEFAULT NULL,
  `cuisine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `piscine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mandat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rcs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alaune` tinyint(1) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BE2DDF8C989D9B62` (`slug`),
  KEY `IDX_BE2DDF8CB706B6D3` (`parents_id`),
  KEY `IDX_BE2DDF8CA21214B7` (`categories_id`),
  KEY `IDX_BE2DDF8C8EB23357` (`types_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits_media`
--

DROP TABLE IF EXISTS `produits_media`;
CREATE TABLE IF NOT EXISTS `produits_media` (
  `produits_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`produits_id`,`media_id`),
  KEY `IDX_1F5BD542CD11A2CF` (`produits_id`),
  KEY `IDX_1F5BD542EA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `scans`
--

DROP TABLE IF EXISTS `scans`;
CREATE TABLE IF NOT EXISTS `scans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `updated_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `serials`
--

DROP TABLE IF EXISTS `serials`;
CREATE TABLE IF NOT EXISTS `serials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `debut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serial` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `dateajout` datetime NOT NULL,
  `clientdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texte` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7332E1693DA5256D` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `slideneufs`
--

DROP TABLE IF EXISTS `slideneufs`;
CREATE TABLE IF NOT EXISTS `slideneufs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `updated_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_59308930989D9B62` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `types_media`
--

DROP TABLE IF EXISTS `types_media`;
CREATE TABLE IF NOT EXISTS `types_media` (
  `types_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`types_id`,`media_id`),
  KEY `IDX_CBDE75408EB23357` (`types_id`),
  KEY `IDX_CBDE7540EA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activations`
--
ALTER TABLE `activations`
  ADD CONSTRAINT `FK_D57343F4537A1329` FOREIGN KEY (`message_id`) REFERENCES `messagerie` (`id`),
  ADD CONSTRAINT `FK_D57343F47E9E4C8C` FOREIGN KEY (`photo_id`) REFERENCES `scans` (`id`);

--
-- Contraintes pour la table `categories_media`
--
ALTER TABLE `categories_media`
  ADD CONSTRAINT `FK_6E2FB441A21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6E2FB441EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `neufs`
--
ALTER TABLE `neufs`
  ADD CONSTRAINT `FK_44497F1C8EB23357` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `FK_44497F1CA21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_44497F1CA5EC1C36` FOREIGN KEY (`banniere1_id`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `FK_44497F1CB706B6D3` FOREIGN KEY (`parents_id`) REFERENCES `parents` (`id`);

--
-- Contraintes pour la table `neufs_media`
--
ALTER TABLE `neufs_media`
  ADD CONSTRAINT `FK_7E0DCAC5D4DA036D` FOREIGN KEY (`neufs_id`) REFERENCES `neufs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_7E0DCAC5EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `neufs_slideneufs`
--
ALTER TABLE `neufs_slideneufs`
  ADD CONSTRAINT `FK_31AFE0F9718B6319` FOREIGN KEY (`slideneufs_id`) REFERENCES `slideneufs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_31AFE0F9D4DA036D` FOREIGN KEY (`neufs_id`) REFERENCES `neufs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `parents_categories`
--
ALTER TABLE `parents_categories`
  ADD CONSTRAINT `FK_2FAF3219A21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2FAF3219B706B6D3` FOREIGN KEY (`parents_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `parents_media`
--
ALTER TABLE `parents_media`
  ADD CONSTRAINT `FK_A71ADDBEB706B6D3` FOREIGN KEY (`parents_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A71ADDBEEA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `FK_BE2DDF8C8EB23357` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `FK_BE2DDF8CA21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_BE2DDF8CB706B6D3` FOREIGN KEY (`parents_id`) REFERENCES `parents` (`id`);

--
-- Contraintes pour la table `produits_media`
--
ALTER TABLE `produits_media`
  ADD CONSTRAINT `FK_1F5BD542CD11A2CF` FOREIGN KEY (`produits_id`) REFERENCES `produits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1F5BD542EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `FK_7332E1693DA5256D` FOREIGN KEY (`image_id`) REFERENCES `media` (`id`);

--
-- Contraintes pour la table `types_media`
--
ALTER TABLE `types_media`
  ADD CONSTRAINT `FK_CBDE75408EB23357` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CBDE7540EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
