-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 30 jan. 2025 à 11:14
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `etat_civil`
--

-- --------------------------------------------------------

--
-- Structure de la table `cin`
--

CREATE TABLE `cin` (
  `id_cin` int(11) NOT NULL,
  `num_cin` int(11) NOT NULL,
  `date_cin` date NOT NULL,
  `fokotany` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `fonction` varchar(250) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  `code_cle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`nom`, `prenom`, `fonction`, `mdp`, `code_cle`) VALUES
('', '', '', '', 0),
('AICHA', 'kp', 'jonathanmamba@gmail.com', 'test', 1),
('ce', 'kp', 'jonathanmamba@gmail.com', 'test', 0),
('jo', 'kp', 'french', 'frecnh', 1),
('lpmj', 'kp', 'jonathanmamba@gmail.com', 'test', 1),
('MAMBA', 'ce', '', '', 0),
('mp', 'kp', 'jonathanmamba@gmail.com', 'test', 1),
('nh', 'kp', 'jonathanmamba@gmail.com', 'test', 1),
('popo', 'mp', 'lm', 'lp', 0);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_personne` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(250) NOT NULL,
  `pere` varchar(250) NOT NULL,
  `mere` varchar(250) NOT NULL,
  `nomFokontany` varchar(250) NOT NULL,
  `id_cin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `nom`, `prenom`, `date_naissance`, `lieu_naissance`, `pere`, `mere`, `nomFokontany`, `id_cin`) VALUES
(1, 'jo', 'jo', '0444-03-12', 'koloko', 'pip', 'mip', 'pott', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cin`
--
ALTER TABLE `cin`
  ADD PRIMARY KEY (`id_cin`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_personne`),
  ADD KEY `id_cin` (`id_cin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cin`
--
ALTER TABLE `cin`
  MODIFY `id_cin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`id_cin`) REFERENCES `cin` (`id_cin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
