-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 31 Janvier 2018 à 03:54
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bd_cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

CREATE TABLE IF NOT EXISTS `centre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `centre_i` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_codeuse` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `centre`
--

INSERT INTO `centre` (`id`, `centre_i`, `description`, `id_codeuse`) VALUES
(1, 'hh', 'hjhjh', 0),
(2, 'hh', 'hjhjh', 0),
(3, 'Nager', 'j''aime aller à la piscine', 15),
(4, 'Nager', 'j''aime aller à la piscine', 15);

-- --------------------------------------------------------

--
-- Structure de la table `codeuses`
--

CREATE TABLE IF NOT EXISTS `codeuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dateNaiss` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `resume` varchar(255) CHARACTER SET utf8 NOT NULL,
  `domaine` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `codeuses`
--

INSERT INTO `codeuses` (`id`, `nom`, `prenom`, `dateNaiss`, `photo`, `email`, `telephone`, `password`, `resume`, `domaine`) VALUES
(1, 'hjklmghh', 'hgfd', 'f', '240_F_91618179_eR79OdR87jR9fp9S3aaiJGz4aGqkkwuE.jpg', 'gc', 'd', '3590cb8af0bbb9e78c343b52b93773c9', 'f', ''),
(2, 'hjklmghh', 'hgfd', 'f', '240_F_91618179_eR79OdR87jR9fp9S3aaiJGz4aGqkkwuE.jpg', 'gc', 'd', '3590cb8af0bbb9e78c343b52b93773c9', 'f', ''),
(3, 'jji', 'ljl', '', '240_F_91618179_eR79OdR87jR9fp9S3aaiJGz4aGqkkwuE.jpg', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(4, 'jji', 'ljl', '', '240_F_91618179_eR79OdR87jR9fp9S3aaiJGz4aGqkkwuE.jpg', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(5, 'gf', 'ff', '', '240_F_91618179_eR79OdR87jR9fp9S3aaiJGz4aGqkkwuE.jpg', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(6, 'gf', 'ff', '', '240_F_91618179_eR79OdR87jR9fp9S3aaiJGz4aGqkkwuE.jpg', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(7, 'Soumahoro', 'Aminata', '15/018/1998', '2016-09-21-07-15-57-861.jpg', 'aminatasoumahoro2@gmail.com', '57849612', '4635a45114e30a5d99f21e7584faee96', 'dieu', ''),
(8, 'Soumahoro', 'Aminata', '15/018/1998', '2016-09-21-07-15-57-861.jpg', 'aminatasoumahoro2@gmail.com', '57849612', '4635a45114e30a5d99f21e7584faee96', 'dieu', ''),
(9, 'Soumahoro', 'Aminata', '15/018/1998', '2016-09-21-07-15-57-861.jpg', 'aminatasoumahoro2@gmail.com', '57849612', '4635a45114e30a5d99f21e7584faee96', 'dieu', ''),
(10, 'Soumahoro', 'Aminata', '15/018/1998', '2016-09-21-07-15-57-861.jpg', 'aminatasoumahoro2@gmail.com', '57849612', '4635a45114e30a5d99f21e7584faee96', 'dieu', ''),
(11, 'Soumahoro', 'Aminata', '15/018/1998', '2016-09-21-07-15-57-861.jpg', 'aminatasoumahoro2@gmail.com', '57849612', '4635a45114e30a5d99f21e7584faee96', 'dieu', ''),
(12, 'soro', 'eunisse', '15/01/1992', '2016-10-05-12-50-54-043_1.jpg', 'eunisse@gmail.com', '58694712', '9589154a18f34a27ac070a9505b7167e', 'belle', ''),
(13, 'Soumahoro', 'Alima', '23/04/1988', '2016-09-21-07-15-57-861.jpg', 'alima@gmail.com', '49172207', '17d75309e2222f70ede8fd24bf1a9632', 'gentil', 'dévéloppeuse'),
(14, 'marie', 'danielle', '16/12/01', '4e5cf7d4ccb9c59b6620a9c71944d51e--emoticons-text-smileys.jpg', 'marie', '45879632', 'marie', 'requete', 'maçon'),
(15, 'KAhe', 'fabien', '15/15/15', '2016-09-21-07-16-54-686.jpg', 'fabien@gmail.com', '54879632', 'fabien', 'prof', 'digital');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) CHARACTER SET utf8 NOT NULL,
  `twitter` varchar(255) CHARACTER SET utf8 NOT NULL,
  `google` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_codeuse` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `cv`
--

INSERT INTO `cv` (`id`, `facebook`, `twitter`, `google`, `id_codeuse`) VALUES
(1, 'https://www.facebook.com/aminata.soumahoro.505', 'https://www.facebook.com/aminata.soumahoro.505', 'https://www.facebook.com/aminata.soumahoro.505', 15),
(2, 'https://www.facebook.com/aminata.soumahoro.505', 'https://www.facebook.com/aminata.soumahoro.505', 'https://www.facebook.com/aminata.soumahoro.505', 15),
(3, 'https://www.facebook.com/aminata.soumahoro.505', 'https://www.facebook.com/aminata.soumahoro.505', 'https://www.facebook.com/aminata.soumahoro.505', 15),
(4, 'https://www.facebook.com/aminata.soumahoro.505', 'https://www.facebook.com/aminata.soumahoro.505', 'https://www.facebook.com/aminata.soumahoro.505', 15),
(5, 'https://www.facebook.com/aminata.soumahoro.505', 'https://www.facebook.com/aminata.soumahoro.505', 'https://www.facebook.com/aminata.soumahoro.505', 15);

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

CREATE TABLE IF NOT EXISTS `diplome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etablissement` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_codeuse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nom_diplome` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `diplome`
--

INSERT INTO `diplome` (`id`, `etablissement`, `date`, `id_codeuse`, `nom_diplome`) VALUES
(9, 'cfiat', '03/02/2010', '14', 'bts'),
(10, 'groupe loko', '07/02/2013', '14', 'licence');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organisation` varchar(255) CHARACTER SET utf8 NOT NULL,
  `poste` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dateDebut` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dateFin` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_codeuse` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `experience`
--

INSERT INTO `experience` (`id`, `organisation`, `poste`, `description`, `dateDebut`, `dateFin`, `id_codeuse`) VALUES
(1, 'gghg', 'gh', 'fhf', 'drh', 'zed', 0),
(2, 'gghg', 'gh', 'fhf', 'drh', 'zed', 0),
(3, 'sheisthecode', 'stagiaire', 'stagiaire digital managment', '15/02/2017', '15/09/2017', 0),
(4, 'pullman', 'serveuses', 'chargée de servir tous les nouveaux client', '11/02/2013', '11/02/2016', 14),
(5, 'unicef', 'general manager', 'getion de tous', '12/04/2011', '12/04/2015', 14),
(6, 'unicef', 'general manager', 'getion de tous', '12/04/2011', '12/04/2015', 14);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
