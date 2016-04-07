-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Avril 2016 à 14:01
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=254 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `title_id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `artiste` text NOT NULL,
  `lien` text NOT NULL,
  PRIMARY KEY (`title_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `playlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `genre` text NOT NULL,
  `tempo` text NOT NULL,
  PRIMARY KEY (`playlist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `login`, `mdp`, `mail`) VALUES
(3, 'test', '098f6bcd4621d373cade4e832627b4f6', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
