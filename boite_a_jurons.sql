-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 fév. 2023 à 10:05
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boite_a_jurons`
--

-- --------------------------------------------------------

--
-- Structure de la table `balance`
--

CREATE TABLE `balance` (
  `id_jurons` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jurons`
--

CREATE TABLE `jurons` (
  `id_jurons` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `jurons`
--

INSERT INTO `jurons` (`id_jurons`, `categorie`, `prix`) VALUES
(1, 'petite', 0.1),
(2, 'grande', 0.3),
(3, 'roter', 0.5),
(4, 'geste', 0.7);

-- --------------------------------------------------------

--
-- Structure de la table `peut_etre`
--

CREATE TABLE `peut_etre` (
  `id_retard` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `retard`
--

CREATE TABLE `retard` (
  `id_retard` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `retard`
--

INSERT INTO `retard` (`id_retard`, `prix`) VALUES
(1, 0.1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--
INSERT INTO `role` (`id_role`, `type`) VALUES
(1, 'Admin'),
(2, 'Normal');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_de_Naissance` varchar(50) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id_jurons`,`login`),
  ADD KEY `Balance_utilisateur0_FK` (`login`);

--
-- Index pour la table `jurons`
--
ALTER TABLE `jurons`
  ADD PRIMARY KEY (`id_jurons`);

--
-- Index pour la table `peut_etre`
--
ALTER TABLE `peut_etre`
  ADD PRIMARY KEY (`id_retard`,`login`),
  ADD KEY `Peut_etre_utilisateur0_FK` (`login`);

--
-- Index pour la table `retard`
--
ALTER TABLE `retard`
  ADD PRIMARY KEY (`id_retard`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`login`),
  ADD KEY `utilisateur_role_FK` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jurons`
--
ALTER TABLE `jurons`
  MODIFY `id_jurons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `retard`
--
ALTER TABLE `retard`
  MODIFY `id_retard` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `balance`
--
ALTER TABLE `balance`
  ADD CONSTRAINT `Balance_Jurons_FK` FOREIGN KEY (`id_jurons`) REFERENCES `jurons` (`id_jurons`),
  ADD CONSTRAINT `Balance_utilisateur0_FK` FOREIGN KEY (`login`) REFERENCES `utilisateur` (`login`);

--
-- Contraintes pour la table `peut_etre`
--
ALTER TABLE `peut_etre`
  ADD CONSTRAINT `Peut_etre_Retard_FK` FOREIGN KEY (`id_retard`) REFERENCES `retard` (`id_retard`),
  ADD CONSTRAINT `Peut_etre_utilisateur0_FK` FOREIGN KEY (`login`) REFERENCES `utilisateur` (`login`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_role_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
