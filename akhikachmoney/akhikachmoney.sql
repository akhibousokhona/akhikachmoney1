


-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 19 Mars 2016 à 11:34
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `akhikachmoney`
--

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_exp` varchar(50) NOT NULL,
  `prenom_exp` varchar(50) NOT NULL,
  `phone_exp` varchar(50) NOT NULL,
  `nom_benef` varchar(50) NOT NULL,
  `prenom_benef` varchar(50) NOT NULL,
  `phone_benef` varchar(50) NOT NULL,
  `montant` varchar(50) NOT NULL,
  `commission` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `code` varchar(6) NOT NULL,
  `status` varchar(10) NOT NULL,
  `typePiece` varchar(30) DEFAULT NULL,
  `numeroPiece` varchar(50) DEFAULT NULL,
  `date_transaction` datetime NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `transaction`
--

INSERT INTO `transaction` (`id`, `nom_exp`, `prenom_exp`, `phone_exp`, `nom_benef`, `prenom_benef`, `phone_benef`, `montant`, `commission`, `total`, `code`, `status`, `typePiece`, `numeroPiece`, `date_transaction`, `userid`) VALUES
(1, 'Kachallah', 'Abagana', '781667678', 'Akhibou', 'Sokhona', '771474754', '5000', '400', '5400', '384381', 'paye', NULL, '', '2016-02-18 07:43:20', 2),
(2, 'james', 'gaglo', '67543', 'Moussa', 'sokhona', '97654', '10000', '700', '10700', '986706', 'paye', '', '', '2016-03-10 17:13:02', 3),
(3, 'idy', 'ndoye', '6753225', 'Kamara', 'issakha', '68098', '6500', '700', '7200', '775219', 'paye', '', '', '2016-03-11 10:02:00', 2),
(7, 'moussa', 'ali', '67890', 'jean', 'Diokh', '46764', '20000', '600', '20600', '863687', 'paye', NULL, '', '2016-03-14 17:13:02', 2),
(8, 'dani', 'dani', '7977', 'sidi', 'sidi', '986', '8000', '600', '8600', '542089', 'encours', NULL, NULL, '2016-03-16 22:45:37', 2),
(22, 'james', 'gaglo', '67543', 'Moussa', 'sokhona', '97654', '10000', '700', '10700', '986706', 'paye', 'passport', 'RO123', '2016-03-18 22:09:00', 2),
(23, 'user1', 'user1', '8765', 'user2', 'user2', '456', '6000', '400', '6400', '904391', 'encours', NULL, NULL, '2016-03-18 22:23:49', 3),
(25, 'Kachallah', 'Abagana', '781667678', 'Akhibou', 'Sokhona', '771474754', '5000', '400', '5400', '384381', 'paye', 'passport', 'GT6678', '2016-03-18 22:41:03', 3),
(26, 'x', 'x', '777', 'y', 'y', '7800', '14500', '500', '15000', '870745', 'paye', NULL, NULL, '2016-03-18 22:52:09', 3),
(27, 'idy', 'ndoye', '6753225', 'Kamara', 'issakha', '68098', '6500', '700', '7200', '775219', 'paye', 'passport', 'R233453', '2016-03-18 23:03:55', 2),
(28, 'moussa', 'ali', '67890', 'jean', 'Diokh', '46764', '20000', '600', '20600', '863687', 'paye', 'CNI', 'R231677', '2016-03-18 23:07:11', 3),
(29, 'x', 'x', '777', 'y', 'y', '7800', '14500', '500', '15000', '870745', 'paye', 'CNI', 'CN6743', '2016-03-18 23:12:01', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `cni` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `nom`, `prenom`, `telephone`, `cni`, `email`) VALUES
(1, 'admin', 'e7247759c1633c0f9f1485f3690294a9', 'admin', 'admin', '987', 'R014', 'admin@akhikachmoney.sn'),
(2, 'akhibou', 'e7247759c1633c0f9f1485f3690294a9', 'akhibou', 'akhibou', '988', 'R015', 'akhibou@akhikachmoney.sn'),
(3, 'kachou', 'e7247759c1633c0f9f1485f3690294a9', 'kachallah', 'Abagana Mahamat', '676654', 'R016', 'kachallah@icloud.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
