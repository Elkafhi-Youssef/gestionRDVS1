-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 07 avr. 2022 à 13:59
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `api`
--

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `id` int(11) NOT NULL,
  `horaire` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `typeCons` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`id`, `horaire`, `date`, `typeCons`, `reference`) VALUES
(35, '14:00-14-30', '2022-04-15', 'CHefor taxi', 'x1232136674984285'),
(36, '', '0000-00-00', '', ''),
(37, '11:00-11-30', '2022-04-09', 'CHefor taxi', 'AZE5583884735'),
(38, '', '0000-00-00', '', ''),
(39, '15:00-15-30', '2022-04-22', 'CHefor taxi', 'AZE5583884735'),
(34, '', '0000-00-00', '', ''),
(31, '14:00-14-30', '2022-04-09', 'CHefor taxi', 'X4353535559458668'),
(33, '15:00-15-30', '2022-04-15', 'CHefor taxi', 'HH324547272859346');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `reference` varchar(55) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `Cin` varchar(20) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`reference`, `firstname`, `Cin`, `age`) VALUES
('xgk3453773088654', 'aa', 'xgk345', 65),
('adjnda3441856806', 'abenouahi5@gmail.com', 'adjnda', 23),
('5749853985', '', '', 0),
('AZE5583884735', 'bnouahihamid1@gmail.', 'AZE', 213),
('HH324547272859346', 'Youssef', 'HH32454', 23),
('x1232136674984285', 'ayoub', 'x123213', 21),
('X4353535559458668', 'bnouahihamid1@gmail.', 'X435353', 32);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`reference`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
