-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 19 Juin 2019 à 11:39
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `patriote`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `usernamedb` varchar(32) COLLATE utf8_bin NOT NULL,
  `passworddb` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `connexion`
--

INSERT INTO `connexion` (`usernamedb`, `passworddb`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure de la table `entraineur`
--

CREATE TABLE `entraineur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(32) COLLATE utf8_bin NOT NULL,
  `diplome` varchar(255) COLLATE utf8_bin NOT NULL,
  `groupe` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `entraineur`
--

INSERT INTO `entraineur` (`id`, `prenom`, `diplome`, `groupe`) VALUES
(13, 'Lolita XAVIER', 'Licence STAPS <br>\r\nAnimateur des ActivitÃ©s Physiques Cardio-vasculaires<br>\r\nAnimateur FÃ©dÃ©ral Baby Gym<br>\r\nMoniteur FÃ©dÃ©ral GAF', 'Poussines DÃ©tections<br>\r\nDFDC 1 - DFDC 2<br>\r\nDivisions RÃ©gionales Mercredi - vendredi<br>\r\nDivisions Inter RÃ©gionales'),
(14, 'AngÃ©lique MARGOT', 'Animateur des ActivitÃ©s gymniques de Loisirs <br>\r\nAnimateur FÃ©dÃ©ral Baby Gym<br>\r\nMoniteur FÃ©dÃ©ral GAM<br>\r\nJuge niveau 3 GAF<br>\r\nJuge niveau 2 GAM', 'Baby Gym 1 15-24 mois Samedi<br>Baby Gym 2-3-4-5 Samedi<br>Baby Gym 4-5 Mercredi<br>Ã‰cole de gym 1-2 - Loisirs Ados mercredi<br>Ã‰cole de gym GAM mercredi<br>Division Inter RÃ©gionale Libre Zone<br>Toutes catÃ©gories GAM<br>Gym Loisir Adultes aux agrÃ¨s');

-- --------------------------------------------------------

--
-- Structure de la table `entraineur_benevole_compet`
--

CREATE TABLE `entraineur_benevole_compet` (
  `id` int(11) NOT NULL,
  `prenom` varchar(32) COLLATE utf8_bin NOT NULL,
  `diplome` varchar(255) COLLATE utf8_bin NOT NULL,
  `groupe` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `entraineur_benevole_compet`
--

INSERT INTO `entraineur_benevole_compet` (`id`, `prenom`, `diplome`, `groupe`) VALUES
(1, 'Kassandra', 'Animateur', 'Mini Pouss'),
(3, 'AmÃ©lie', 'Initiateur GAF', 'Poussines'),
(4, 'Juliette', 'Initiateur GAF', 'Poussines dÃ©tections'),
(5, 'Alexia', 'Initiateur GAF <br>\r\nAnimateur FÃ©dÃ©ral Petite Enfance', 'Responsable du Groupe DR Mardi-Jeudi'),
(6, 'OcÃ©ane', 'Ã‰ducateur Sportif', 'Groupe DR Mercredi Vendredi'),
(7, 'Fanny', 'En formation au sein du Club', 'DR Mercredi'),
(8, 'Suzanne', 'EntraÃ®neur GAM', 'DR GAM');

-- --------------------------------------------------------

--
-- Structure de la table `entraineur_benevole_loisir`
--

CREATE TABLE `entraineur_benevole_loisir` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `diplome` varchar(255) COLLATE utf8_bin NOT NULL,
  `groupe` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `entraineur_benevole_loisir`
--

INSERT INTO `entraineur_benevole_loisir` (`id`, `prenom`, `diplome`, `groupe`) VALUES
(2, 'Martine', 'Ã‰ducateur Sportif', 'EG1 & EG2 du mercredi <br>\r\nBaby 4-5 du mercredi'),
(3, 'Manon', 'En Formation au Sein du Club', 'Ã‰veils du mercredi'),
(4, 'ThÃ©o', 'Aide animateur', 'EG GAM Benjamins<br>\r\nMinimes du mercredi'),
(5, 'Isabelle', 'Animateur fÃ©dÃ©ral Baby Gym', 'Responsable des Groupes baby 3-4-5 du vendredi'),
(6, 'ClÃ©ment', 'Aide Animateur', 'Baby 4-5 Samedi'),
(7, 'Morgane', 'En Formation au Sein du Club', 'EG GAM Poussins du Jeudi'),
(8, 'SalomÃ©', 'Animateur FÃ©dÃ©ral des ActivitÃ©s Gymniques Petite Enfance', 'Baby 4-5 vendredi'),
(9, 'Sylvie', 'Aide Animateur', 'Baby 4-5 Samedi'),
(10, 'AmÃ©line', 'En Formation au Sein du Club', 'Baby 4-5 Samedi'),
(11, 'Lalie', 'Animateur FÃ©dÃ©ral des ActivitÃ©s Gymniques Petite Enfance', 'Baby 4-5 Samedi'),
(13, 'Nathalie', 'Animateur FÃ©dÃ©ral Petite Enfance<br>\r\nInitiateur GAF<br>\r\nAnimateur FÃ©dÃ©ral des activitÃ©s Gymniques d\'entretien', 'Responsable EG1 Mardi<br>\r\nResponsable Gym d\'entretien du Mardi soir'),
(14, 'Georges', 'Animateur FÃ©dÃ©ral des ActivitÃ©s Gymniques Petite Enfance<br>\r\nInitiateur GAM', 'Responsable EG GAM Jeudi'),
(15, 'CÃ©rine', 'Animateur GAM', 'Poussins GAM');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `chemin` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`id`, `chemin`, `nom`) VALUES
(1, 'img/acceuil.png', 'acceuil'),
(2, 'img/coop.jpg', 'coop'),
(3, 'img/SC20140416-205217.png', 'SC20140416-205217.png'),
(8, 'img/10175992_295800223910638_1648686741093368741_n.jpg', 'prout'),
(7, 'img/10175992_295800223910638_1648686741093368741_n.jpg', 'prout'),
(9, 'img/SC20140416-205217.png', 'zizi'),
(10, 'img/SC20140416-205217.png', 'zizi'),
(11, 'img/acceuil.png', ''),
(12, 'img/http___www.celebpot.com_wp-content_uploads_2018_08_demi-rose-mawb-bikini-outfit-in-Ibiza-beach-12.jpg', 'uytf'),
(61, 'img/acceuil.png', 'akeil'),
(60, 'img/acceuil.png', 'akeil'),
(59, 'img/fond.jpg', ''),
(58, 'img/fond.jpg', ''),
(57, 'img/Count.png', ''),
(56, 'img/Count.png', ''),
(55, 'img/Counter-strike  Global Offensive Screenshot 2019.04.29 - 17.22.58.34.png', ''),
(54, 'img/Counter-strike  Global Offensive Screenshot 2019.04.29 - 17.22.58.34.png', ''),
(53, 'img/Counter-strike  Global Offensive Screenshot 2019.04.29 - 17.22.58.34.png', ''),
(52, 'img/acceuil.png', ''),
(51, 'img/acceuil.png', ''),
(50, 'img/30uw29.jpg', ''),
(49, 'img/30uw29.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `photod`
--

CREATE TABLE `photod` (
  `idd` int(11) NOT NULL,
  `chemind` varchar(255) COLLATE utf8_bin NOT NULL,
  `nomd` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `photod`
--

INSERT INTO `photod` (`idd`, `chemind`, `nomd`) VALUES
(3, 'img/acceuil.png', 'q'),
(2, 'img/10175992_295800223910638_1648686741093368741_n.jpg', 'd'),
(4, 'img/acceuil.png', 'q'),
(5, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(6, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(7, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(8, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(9, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(10, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(11, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(12, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(13, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(14, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(15, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(16, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(17, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(18, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(19, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(20, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(21, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(22, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(23, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(24, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(25, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(26, 'img/https___s-media-cache-ak0.pinimg.com_originals_f4_22_7a_f4227aebc6fa36e117d6cc10d500c6bd.jpg', 'yf'),
(27, 'img/30uw29.jpg', 'yujyhkj'),
(28, 'img/30uw29.jpg', 'yujyhkj'),
(29, 'img/30uw29.jpg', ''),
(30, 'img/30uw29.jpg', ''),
(31, 'img/30uw29.jpg', ''),
(32, 'img/30uw29.jpg', ''),
(33, 'img/30uw29.jpg', ''),
(34, 'img/30uw29.jpg', ''),
(35, 'img/30uw29.jpg', ''),
(36, 'img/30uw29.jpg', ''),
(37, 'img/30uw29.jpg', ''),
(38, 'img/30uw29.jpg', ''),
(39, 'img/30uw29.jpg', ''),
(40, 'img/30uw29.jpg', ''),
(41, 'img/30uw29.jpg', ''),
(42, 'img/30uw29.jpg', ''),
(43, 'img/30uw29.jpg', ''),
(44, 'img/30uw29.jpg', ''),
(45, 'img/30uw29.jpg', ''),
(46, 'img/30uw29.jpg', ''),
(47, 'img/30uw29.jpg', ''),
(48, 'img/30uw29.jpg', ''),
(49, 'img/30uw29.jpg', ''),
(50, 'img/30uw29.jpg', ''),
(51, 'img/30uw29.jpg', ''),
(52, 'img/30uw29.jpg', ''),
(53, 'img/30uw29.jpg', ''),
(54, 'img/30uw29.jpg', ''),
(55, 'img/30uw29.jpg', ''),
(56, 'img/30uw29.jpg', ''),
(57, 'img/acceuil.png', 'zqueuile'),
(58, 'img/acceuil.png', 'zqueuile');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`usernamedb`);

--
-- Index pour la table `entraineur`
--
ALTER TABLE `entraineur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entraineur_benevole_compet`
--
ALTER TABLE `entraineur_benevole_compet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entraineur_benevole_loisir`
--
ALTER TABLE `entraineur_benevole_loisir`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photod`
--
ALTER TABLE `photod`
  ADD PRIMARY KEY (`idd`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `entraineur`
--
ALTER TABLE `entraineur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `entraineur_benevole_compet`
--
ALTER TABLE `entraineur_benevole_compet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `entraineur_benevole_loisir`
--
ALTER TABLE `entraineur_benevole_loisir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT pour la table `photod`
--
ALTER TABLE `photod`
  MODIFY `idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
