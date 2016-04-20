-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Avril 2016 à 12:43
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `kiwimoods`
--

-- --------------------------------------------------------

--
-- Structure de la table `currentmood`
--

CREATE TABLE IF NOT EXISTS `currentmood` (
  `user_id` int(11) NOT NULL,
  `mood_name` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emotion`
--

CREATE TABLE IF NOT EXISTS `emotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emotion_name` text CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL,
  `music_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=321 ;

--
-- Contenu de la table `emotion`
--

INSERT INTO `emotion` (`id`, `emotion_name`, `user_id`, `music_id`) VALUES
(17, 'colère', 9, 0),
(18, 'colère', 9, 0),
(19, 'colère', 9, 0),
(20, 'colère', 9, 0),
(21, 'colère', 9, 0),
(22, 'colère', 9, 0),
(23, 'colère', 9, 0),
(24, 'colère', 9, 0),
(25, 'colère', 9, 0),
(26, 'colère', 9, 0),
(27, 'colère', 9, 0),
(28, 'colère', 9, 0),
(29, 'fatigue', 10, 0),
(30, 'fatigue', 10, 0),
(31, 'joie', 10, 0),
(32, 'joie', 10, 0),
(33, 'fatigue', 10, 0),
(34, 'tristesse', 10, 0),
(35, 'indifference', 10, 0),
(36, 'indifference', 10, 0),
(37, 'indifference', 10, 0),
(38, 'indifference', 10, 0),
(39, 'indifference', 10, 0),
(40, 'indifference', 10, 0),
(41, 'joie', 10, 0),
(42, 'joie', 10, 0),
(43, 'fatigue', 10, 0),
(44, 'fatigue', 10, 0),
(45, 'ennui', 10, 0),
(46, 'fatigue', 10, 0),
(47, 'fatigue', 10, 0),
(48, 'fatigue', 10, 0),
(49, 'fatigue', 10, 0),
(50, 'fatigue', 10, 0),
(51, 'fatigue', 10, 0),
(52, 'fatigue', 10, 0),
(53, 'fatigue', 10, 0),
(54, 'fatigue', 10, 0),
(55, 'fatigue', 10, 0),
(56, 'colère', 10, 0),
(57, 'fatigue', 10, 0),
(58, 'fatigue', 10, 0),
(59, 'fatigue', 10, 0),
(60, 'fatigue', 10, 0),
(61, 'fatigue', 10, 0),
(62, 'indifference', 10, 0),
(63, 'indifference', 10, 0),
(64, 'indifference', 10, 0),
(65, 'indifference', 10, 0),
(66, 'indifference', 10, 0),
(67, 'indifference', 10, 0),
(68, 'indifference', 10, 0),
(69, 'indifference', 10, 0),
(70, 'indifference', 10, 0),
(71, 'indifference', 10, 0),
(72, 'indifference', 10, 0),
(73, 'indifference', 10, 0),
(74, 'colère', 3, 0),
(75, 'indifference', 3, 0),
(76, 'indifference', 3, 0),
(77, 'indifference', 3, 0),
(78, 'indifference', 3, 0),
(79, 'indifference', 3, 0),
(80, 'indifference', 3, 0),
(81, 'indifference', 3, 0),
(82, 'indifference', 3, 0),
(83, 'indifference', 3, 0),
(84, 'indifference', 3, 0),
(85, 'indifference', 3, 0),
(86, 'indifference', 3, 0),
(87, 'indifference', 3, 0),
(88, 'indifference', 3, 0),
(89, 'indifference', 3, 0),
(90, 'indifference', 3, 0),
(91, 'indifference', 3, 0),
(92, 'indifference', 3, 0),
(93, 'indifference', 3, 0),
(94, 'indifference', 3, 0),
(95, 'indifference', 3, 0),
(96, 'indifference', 3, 0),
(97, 'indifference', 3, 0),
(98, 'indifference', 3, 0),
(99, 'indifference', 3, 0),
(100, 'indifference', 3, 0),
(101, 'indifference', 3, 0),
(102, 'indifference', 3, 0),
(103, 'indifference', 3, 0),
(104, 'indifference', 3, 0),
(105, 'indifference', 3, 0),
(106, 'indifference', 3, 0),
(107, 'indifference', 3, 0),
(108, 'indifference', 3, 0),
(109, 'indifference', 3, 0),
(110, 'colère', 3, 0),
(111, 'joie', 3, 0),
(112, 'tristesse', 3, 0),
(113, 'tristesse', 3, 0),
(114, 'tristesse', 3, 0),
(115, 'indifference', 3, 0),
(116, 'colère', 3, 0),
(117, 'colère', 3, 0),
(118, 'colère', 3, 0),
(119, 'colère', 3, 0),
(120, 'colère', 3, 0),
(121, 'colère', 3, 0),
(122, 'colère', 3, 0),
(123, 'colère', 3, 0),
(124, 'colère', 3, 0),
(125, 'colère', 3, 0),
(126, 'colère', 3, 0),
(127, 'colère', 3, 0),
(128, 'colère', 3, 0),
(129, 'colère', 3, 0),
(130, 'colère', 3, 0),
(131, 'colère', 3, 0),
(132, 'colère', 3, 0),
(133, 'colère', 3, 0),
(134, 'colère', 3, 0),
(135, 'colère', 3, 0),
(136, 'colère', 3, 0),
(137, 'colère', 3, 0),
(138, 'colère', 3, 0),
(139, 'colère', 3, 0),
(140, 'colère', 3, 0),
(141, 'colère', 3, 0),
(142, 'colère', 3, 0),
(143, 'colère', 3, 0),
(144, 'colère', 3, 0),
(145, 'colère', 3, 0),
(146, 'colère', 3, 0),
(147, 'colère', 3, 0),
(148, 'colère', 3, 0),
(149, 'colère', 3, 0),
(150, 'colère', 3, 0),
(151, 'colère', 3, 0),
(152, 'colère', 3, 0),
(153, 'colère', 3, 0),
(154, 'colère', 3, 0),
(155, 'colère', 3, 0),
(156, 'colère', 3, 0),
(157, 'colère', 3, 0),
(158, 'colère', 3, 0),
(159, 'colère', 3, 0),
(160, 'colère', 3, 0),
(161, 'colère', 3, 0),
(162, 'colère', 3, 0),
(163, 'colère', 3, 0),
(164, 'colère', 3, 0),
(165, 'colère', 3, 0),
(166, 'colère', 3, 0),
(167, 'colère', 3, 0),
(168, 'colère', 3, 0),
(169, 'colère', 3, 0),
(170, 'colère', 3, 0),
(171, 'colère', 3, 0),
(172, 'colère', 3, 0),
(173, 'colère', 3, 0),
(174, 'colère', 3, 0),
(175, 'colère', 3, 0),
(176, 'colère', 3, 0),
(177, 'colère', 3, 0),
(178, 'colère', 3, 0),
(179, 'colère', 3, 0),
(180, 'colère', 3, 0),
(181, 'colère', 3, 0),
(182, 'colère', 3, 0),
(183, 'colère', 3, 0),
(184, 'colère', 3, 0),
(185, 'colère', 3, 0),
(186, 'colère', 3, 0),
(187, 'colère', 3, 0),
(188, 'colère', 3, 0),
(189, 'colère', 3, 0),
(190, 'colère', 3, 0),
(191, 'colère', 3, 0),
(192, 'colère', 3, 0),
(193, 'colère', 3, 0),
(194, 'colère', 3, 0),
(195, 'colère', 3, 0),
(196, 'colère', 3, 0),
(197, 'colère', 3, 0),
(198, 'colère', 3, 0),
(199, 'colère', 3, 0),
(200, 'colère', 3, 0),
(201, 'colère', 3, 0),
(202, 'colère', 3, 0),
(203, 'colère', 3, 0),
(204, 'colère', 3, 0),
(205, 'colère', 3, 0),
(206, 'colère', 3, 0),
(207, 'colère', 3, 0),
(208, 'colère', 3, 0),
(209, 'colère', 3, 0),
(210, 'colère', 3, 0),
(211, 'colère', 3, 0),
(212, 'colère', 3, 0),
(213, 'colère', 3, 0),
(214, 'colère', 3, 0),
(215, 'colère', 3, 0),
(216, 'colère', 3, 0),
(217, 'colère', 3, 0),
(218, 'colère', 3, 0),
(219, 'colère', 3, 0),
(220, 'colère', 3, 0),
(221, 'colère', 3, 0),
(222, 'colère', 3, 0),
(223, 'colère', 3, 0),
(224, 'colère', 3, 0),
(225, 'colère', 3, 0),
(226, 'colère', 3, 0),
(227, 'colère', 3, 0),
(228, 'colère', 3, 0),
(229, 'colère', 3, 0),
(230, 'colère', 3, 0),
(231, 'colère', 3, 0),
(232, 'colère', 3, 0),
(233, 'colère', 3, 0),
(234, 'colère', 3, 0),
(235, 'colère', 3, 0),
(236, 'colère', 3, 0),
(237, 'colère', 3, 0),
(238, 'colère', 3, 0),
(239, 'colère', 3, 0),
(240, 'colère', 3, 0),
(241, 'colère', 0, 0),
(242, 'colère', 0, 0),
(243, 'colère', 0, 0),
(244, 'colère', 0, 0),
(245, 'colère', 0, 0),
(246, 'colère', 0, 0),
(247, 'colère', 0, 0),
(248, 'colère', 0, 0),
(249, 'colère', 0, 0),
(250, 'colère', 0, 0),
(251, 'colère', 0, 0),
(252, 'colère', 0, 0),
(253, 'colère', 0, 0),
(254, 'colère', 0, 0),
(255, 'colère', 0, 0),
(256, 'colère', 0, 0),
(257, 'colère', 0, 0),
(258, 'colère', 0, 0),
(259, 'colère', 0, 0),
(260, 'colère', 0, 0),
(261, 'colère', 0, 0),
(262, 'colère', 0, 0),
(263, 'colère', 0, 0),
(264, 'colère', 0, 0),
(265, 'colère', 0, 0),
(266, 'colère', 0, 0),
(267, 'colère', 0, 0),
(268, 'colère', 0, 0),
(269, 'colère', 0, 0),
(270, 'colère', 0, 0),
(271, 'colère', 0, 0),
(272, 'colère', 0, 0),
(273, 'colère', 0, 0),
(274, 'colère', 0, 0),
(275, 'colère', 0, 0),
(276, 'colère', 0, 0),
(277, 'colère', 0, 0),
(278, 'colère', 0, 0),
(279, 'colère', 0, 0),
(280, 'colère', 0, 0),
(281, 'colère', 0, 0),
(282, 'colère', 0, 0),
(283, 'colère', 0, 0),
(284, 'colère', 0, 0),
(285, 'colère', 0, 0),
(286, 'colère', 0, 0),
(287, 'colère', 0, 0),
(288, 'colère', 0, 0),
(289, 'colère', 0, 0),
(290, 'excitation', 0, 0),
(291, 'colère', 0, 0),
(292, 'colère', 0, 0),
(293, 'colère', 0, 0),
(294, 'colère', 0, 0),
(295, 'colère', 0, 0),
(296, 'colère', 0, 0),
(297, 'colère', 0, 0),
(298, 'colère', 0, 0),
(299, 'colère', 0, 0),
(300, 'colère', 0, 0),
(301, 'colère', 0, 0),
(302, 'colère', 0, 0),
(303, 'colère', 0, 0),
(304, 'colère', 0, 0),
(305, 'colère', 0, 0),
(306, 'colère', 0, 0),
(307, 'colère', 0, 0),
(308, 'colère', 0, 0),
(309, 'colère', 0, 0),
(310, 'colère', 0, 0),
(311, 'colère', 0, 0),
(312, 'colère', 0, 0),
(313, 'colère', 0, 0),
(314, 'colère', 0, 0),
(315, 'colère', 0, 0),
(316, 'colère', 0, 0),
(317, 'colère', 0, 0),
(318, 'colère', 0, 0),
(319, 'colère', 0, 0),
(320, 'colère', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `knowartist`
--

CREATE TABLE IF NOT EXISTS `knowartist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `knowartist` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `music_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `knowartist`
--

INSERT INTO `knowartist` (`id`, `knowartist`, `user_id`, `music_id`) VALUES
(1, 'oui', 9, 0),
(2, 'oui', 9, 0),
(3, 'oui', 9, 0),
(4, 'oui', 9, 0),
(5, 'oui', 9, 0),
(6, 'oui', 9, 0),
(7, 'oui', 9, 0),
(8, 'oui', 9, 0),
(9, 'oui', 9, 0),
(10, 'oui', 9, 0),
(11, 'oui', 9, 0),
(12, 'oui', 9, 0),
(13, 'oui', 0, 0),
(14, 'oui', 0, 0),
(15, 'oui', 0, 0),
(16, 'oui', 0, 0),
(17, 'oui', 0, 0),
(18, 'oui', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `knowtitle`
--

CREATE TABLE IF NOT EXISTS `knowtitle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `knowtitle` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `music_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `knowtitle`
--

INSERT INTO `knowtitle` (`id`, `knowtitle`, `user_id`, `music_id`) VALUES
(1, 'oui', 9, 0),
(2, 'oui', 9, 0),
(3, 'oui', 9, 0),
(4, 'oui', 9, 0),
(5, 'oui', 9, 0),
(6, 'oui', 9, 0),
(7, 'oui', 9, 0),
(8, 'oui', 9, 0),
(9, 'oui', 9, 0),
(10, 'oui', 9, 0),
(11, 'oui', 9, 0),
(12, 'oui', 0, 0),
(13, 'oui', 0, 0),
(14, 'oui', 0, 0),
(15, 'oui', 0, 0),
(16, 'oui', 0, 0),
(17, 'oui', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `likemusic`
--

CREATE TABLE IF NOT EXISTS `likemusic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `likesong` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `music_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `likemusic`
--

INSERT INTO `likemusic` (`id`, `likesong`, `user_id`, `music_id`) VALUES
(8, 'oui', 9, 0),
(9, 'oui', 9, 0),
(10, 'oui', 9, 0),
(11, 'oui', 9, 0),
(12, 'oui', 9, 0),
(13, 'oui', 9, 0),
(14, 'oui', 9, 0),
(15, 'oui', 9, 0),
(16, 'oui', 9, 0),
(17, 'oui', 9, 0),
(18, 'oui', 9, 0),
(19, 'oui', 9, 0),
(20, 'oui', 0, 0),
(21, 'oui', 0, 0),
(22, 'oui', 0, 0),
(23, 'oui', 0, 0),
(24, 'oui', 0, 0),
(25, 'oui', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `likeplaylist`
--

CREATE TABLE IF NOT EXISTS `likeplaylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mood_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `likeplaylist`
--

INSERT INTO `likeplaylist` (`id`, `mood_name`, `user_id`, `playlist_id`) VALUES
(1, '', 9, 0),
(2, '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `listencontext`
--

CREATE TABLE IF NOT EXISTS `listencontext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `context_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `music_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=290 ;

--
-- Contenu de la table `listencontext`
--

INSERT INTO `listencontext` (`id`, `context_name`, `user_id`, `music_id`) VALUES
(254, 'transport', 9, 0),
(255, 'transport', 9, 0),
(256, 'transport', 9, 0),
(257, 'transport', 9, 0),
(258, 'transport', 9, 0),
(259, 'transport', 9, 0),
(260, 'transport', 9, 0),
(261, 'transport', 9, 0),
(262, 'transport', 9, 0),
(263, 'transport', 9, 0),
(264, 'transport', 9, 0),
(265, 'transport', 9, 0),
(266, 'famille', 10, 0),
(267, 'famille', 10, 0),
(268, 'famille', 10, 0),
(269, 'famille', 10, 0),
(270, 'famille', 10, 0),
(271, 'famille', 10, 0),
(272, 'transport', 0, 0),
(273, 'transport', 0, 0),
(274, 'transport', 0, 0),
(275, 'transport', 0, 0),
(276, 'transport', 0, 0),
(277, 'transport', 0, 0),
(278, 'transport', 0, 0),
(279, 'transport', 0, 0),
(280, 'transport', 0, 0),
(281, 'transport', 0, 0),
(282, 'transport', 0, 0),
(283, 'transport', 0, 0),
(284, 'transport', 0, 0),
(285, 'transport', 0, 0),
(286, 'transport', 0, 0),
(287, 'transport', 0, 0),
(288, 'transport', 0, 0),
(289, 'transport', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `moodplaylist`
--

CREATE TABLE IF NOT EXISTS `moodplaylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mood_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `moodplaylist`
--

INSERT INTO `moodplaylist` (`id`, `mood_name`, `user_id`, `playlist_id`) VALUES
(1, '', 9, 0),
(2, 'autre : rien', 9, 0),
(3, '', 0, 0),
(4, 'colère', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `title_id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `artiste` text NOT NULL,
  `lien` text NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`title_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `music`
--

INSERT INTO `music` (`title_id`, `titre`, `artiste`, `lien`, `playlist_id`) VALUES
(1, 'Sultan of Swing', 'Dire Straits', 'http://www.aht.li/2876475/Dire_Straits-Sultans_Of_SwingHQ_Audio.mp3', 1),
(2, 'Sultan of Swing', 'Dire Straits', 'http://www.aht.li/2876476/Dire_Straits-Sultans_Of_SwingHQ_Audio_-_remix.mp3', 2),
(3, 'La Grange', 'ZZTop', 'http://www.aht.li/2876483/ZZ_Top-_La_grange_HQ.mp3', 1),
(4, 'La Grange', 'ZZTop', 'http://www.aht.li/2876484/ZZ_Top-_La_grange_HQ_-_remix.mp3', 2),
(5, 'Ace of Spades', 'Motorhead', 'http://www.aht.li/2876477/Motorhead_-_Ace_Of_Spades_HQ.mp3', 1),
(6, 'Ace of Spades', 'Motorhead', 'http://www.aht.li/2876478/Motorhead_-_Ace_Of_Spades_HQ_-_remix.mp3', 2),
(7, 'Princes of the Universe', 'Queen', 'http://www.aht.li/2876479/Queen_-_Princes_Of_The_Universe_HQ.mp3', 1),
(8, 'Princes of the Universe', 'Queen', 'http://www.aht.li/2876480/Queen_-_Princes_Of_The_Universe_HQ_-_remix.mp3', 2),
(9, 'Simple Man', 'Lynyrd Skynyrd', 'http://www.aht.li/2876481/Simple_Man_-_Lynyrd_Skynyrd_HQ.mp3', 1),
(10, 'Simple Man', 'Lynyrd Skynyrd', 'http://www.aht.li/2876482/Simple_Man_-_Lynyrd_Skynyrd_HQ-_remix.mp3', 2),
(11, 'Dream On', 'Aerosmith', 'http://www.aht.li/2876474/Aerosmith_-_Dream_On_HQ.mp3', 1),
(12, 'Dream On', 'Aerosmith', 'http://www.aht.li/2876432/Aerosmith_-_Dream_On_HQ_-_remix.mp3', 2),
(13, 'Summer Sixteen', 'Drake', 'http://www.aht.li/2876466/Drake_-_Summer_Sixteen_-HQ-_Explicit_Freestyle.mp3', 3),
(14, 'Summer Sixteen', 'Drake', 'http://www.aht.li/2876467/Drake_-_Summer_Sixteen_-HQ-_Explicit_Freestyle_-_remix.mp3', 4),
(15, 'Too Rich for the Bitch', '50 Cent', 'http://www.aht.li/2876460/50_Cent_-_Too_Rich_Lyrics_HQ.mp3', 3),
(16, 'Too Rich for the Bitch', '50 Cent', 'http://www.aht.li/2876461/50_Cent_-_Too_Rich_Lyrics_HQ_-_remix.mp3', 4),
(17, 'JDC', 'Booba', 'http://www.aht.li/2876462/Booba_-_JDC.mp3', 3),
(18, 'JDC', 'Booba', 'http://www.aht.li/2876463/Booba_-_JDC_-_remix.mp3', 4),
(19, 'Rock yo hips', 'Crim Moh', 'http://www.aht.li/2876464/Crime_Mob_-_Rock_yo_hips.mp3', 3),
(20, 'Rock yo hips', 'Crim Mob', 'http://www.aht.li/2876465/Crime_Mob_-_Rock_yo_hips_-_remix.mp3', 4),
(21, 'Go Head', 'Gucci Mane', 'http://www.aht.li/2876468/Gucci_Mane-_Go_Head_lyrics.mp3', 3),
(22, 'Go Head', 'Gucci Mane', 'http://www.aht.li/2876470/Gucci_Mane-_Go_Head_lyrics_-_remix.mp3', 4),
(23, 'Liquid Swords', 'GZA', 'http://www.aht.li/2876471/GZA_-_Liquid_Swords_RZA_Production_1995_HQ.mp3', 3),
(24, 'Liquid Swords', 'GZA', 'http://www.aht.li/2876472/GZA_-_Liquid_Swords_RZA_Production_1995_HQ_-_remix.mp3', 4),
(25, 'Summer', 'Marshmello', 'http://www.aht.li/2876455/marshmello_-_Summer.mp3', 5),
(26, 'Summer', 'Marshmello', 'http://www.aht.li/2876456/marshmello_-_Summer_-_remix.mp3', 6),
(27, 'Slumber Party', 'Hellberg', 'http://www.aht.li/2876449/Hellberg_-_Slumber_Party_-_HQ.mp3', 5),
(28, 'Slumber Party', 'Hellberg', 'http://www.aht.li/2876450/Hellberg_-_Slumber_Party_-_HQ_-_remix.mp3', 6),
(29, 'Echo', 'Cut Snake', 'http://www.aht.li/2876445/Cut_Snake_-_Echo_Official_Audio.mp3', 5),
(30, 'Echo', 'Cut Snake', 'http://www.aht.li/2876446/Cut_Snake_-_Echo_Official_Audio_-_remix.mp3', 6),
(31, 'Fog', 'Jabberwocky', 'http://www.aht.li/2876452/Jabberwocky__Fog_feat_Ana_Zimmer.mp3', 5),
(32, 'Fog', 'Jabberwocky', 'http://www.aht.li/2876486/Jabberwocky__Fog_feat_Ana_Zimmer_-_remix.mp3', 6),
(33, 'We own the sky', 'M83', 'http://www.aht.li/2876453/M83_-_We_own_the_sky_-lyrics-.mp3', 5),
(34, 'We own the sky', 'M83', 'http://www.aht.li/2876454/M83_-_We_own_the_sky_-lyrics-_-_remix.mp3', 6),
(35, 'Brulee', 'Ratatat', 'http://www.aht.li/2876458/RATATAT_-_BRULEE_HD.mp3', 5),
(36, 'Brulee', 'Ratatat', 'http://www.aht.li/2876459/RATATAT_-_BRULEE_HD_-_remix.mp3', 6);

-- --------------------------------------------------------

--
-- Structure de la table `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `playlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `genre` text NOT NULL,
  `tempo` text NOT NULL,
  PRIMARY KEY (`playlist_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `playlist`
--

INSERT INTO `playlist` (`playlist_id`, `genre`, `tempo`) VALUES
(1, 'rock', 'rapide'),
(2, 'rock', 'lent'),
(3, 'rap', 'rapide'),
(4, 'rap', 'lent'),
(5, 'electro', 'rapide'),
(6, 'electro', 'lent');

-- --------------------------------------------------------

--
-- Structure de la table `possiblecontext`
--

CREATE TABLE IF NOT EXISTS `possiblecontext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `context_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `music_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `possiblecontext`
--

INSERT INTO `possiblecontext` (`id`, `context_name`, `user_id`, `music_id`) VALUES
(1, 'jamais', 9, 0),
(2, 'jamais', 9, 0),
(3, 'jamais', 9, 0),
(4, 'jamais', 9, 0),
(5, 'jamais', 9, 0),
(6, 'jamais', 9, 0),
(7, 'jamais', 9, 0),
(8, 'jamais', 9, 0),
(9, 'jamais', 9, 0),
(10, 'jamais', 9, 0),
(11, 'jamais', 9, 0),
(12, 'jamais', 9, 0),
(13, 'jamais', 0, 0),
(14, 'jamais', 0, 0),
(15, 'jamais', 0, 0),
(16, 'jamais', 0, 0),
(17, 'jamais', 0, 0),
(18, 'jamais', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `possiblecontextplaylist`
--

CREATE TABLE IF NOT EXISTS `possiblecontextplaylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `context_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `possiblecontextplaylist`
--

INSERT INTO `possiblecontextplaylist` (`id`, `context_name`, `user_id`, `playlist_id`) VALUES
(1, 'jamais', 9, 0);

-- --------------------------------------------------------

--
-- Structure de la table `suggestion`
--

CREATE TABLE IF NOT EXISTS `suggestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suggestion_message` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `mdp` text NOT NULL,
  `mail` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `login`, `mdp`, `mail`) VALUES
(3, 'test', '098f6bcd4621d373cade4e832627b4f6', ''),
(9, 'somnir', 'a77866237f3414a639c746071055e5fe', 'nitoryu@hotmail.fr'),
(10, 'test1', '5a105e8b9d40e1329780d62ea2265d8a', 'test1@hotmail.fr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
