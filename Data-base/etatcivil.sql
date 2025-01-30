-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 29 jan. 2025 à 22:38
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `etatcivil`
--

-- --------------------------------------------------------

--
-- Structure de la table `cin`
--

CREATE TABLE `cin` (
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `date_naissance` varchar(250) NOT NULL,
  `lieu_naissance` varchar(250) NOT NULL,
  `pere` varchar(250) NOT NULL,
  `proffession1` varchar(250) NOT NULL,
  `mere` varchar(250) NOT NULL,
  `proffesion2` varchar(250) NOT NULL,
  `lieu_delivrance_cin` varchar(250) NOT NULL,
  `num_cin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fonctionnaire`
--

CREATE TABLE `fonctionnaire` (
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `fonction` varchar(250) NOT NULL,
  `mot_de_passe` varchar(250) NOT NULL,
  `code_clé` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `idPersonne` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `date_naissance` varchar(250) NOT NULL,
  `lieu_naissance` varchar(250) NOT NULL,
  `pere` varchar(250) NOT NULL,
  `mere` varchar(250) NOT NULL,
  `proffession` varchar(250) NOT NULL,
  `nomFokontany` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cin`
--
ALTER TABLE `cin`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `fonctionnaire`
--
ALTER TABLE `fonctionnaire`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`idPersonne`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `idPersonne` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
