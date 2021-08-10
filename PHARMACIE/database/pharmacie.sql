-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 22 jan. 2021 à 20:01
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pharmacie`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

CREATE TABLE `appartient` (
  `numcathegorie_CATEGORIE` int(10) NOT NULL,
  `idproduit_PRODUIT` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartient`
--

INSERT INTO `appartient` (`numcathegorie_CATEGORIE`, `idproduit_PRODUIT`) VALUES
(1, 5),
(3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `numcathegorie_CATEGORIE` int(10) NOT NULL,
  `nom_CATEGORIE` varchar(12) DEFAULT NULL,
  `description_CATEGORIE` varchar(40) DEFAULT NULL,
  `id_UTILISATEUR` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`numcathegorie_CATEGORIE`, `nom_CATEGORIE`, `description_CATEGORIE`, `id_UTILISATEUR`) VALUES
(1, 'bebe', 'produitBebe', 12),
(3, 'equipement', 'equipeent_medicalises', 14),
(4, 'nutri', 'produit nutritionnel', 5),
(5, 'Londjo', 'sdsfsfs', 5),
(6, 'Baba', 'sdsfsfs', 5),
(7, 'bubu', 'sdsfsfs', 5),
(8, 'bobo', 'sdsfsfs', 5),
(9, 'lolo', 'sdsfsfs', 5),
(10, 'django', 'sdsfsfsjjj', 5),
(11, 'didi', 'sdsfsfsjjj', 5),
(12, 'kiki', 'sdsfsfs', 5),
(13, 'koko', 'sdsfsfs', 5),
(14, 'toto', 'sdsfsfs', 5),
(15, 'epi', 'sdsfsfs', 5),
(16, 'remede', 'nutriharapie', 5),
(17, 'Londjo', 'qqe2e', 5),
(18, 'sdg', 'sdggfg', 5);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_UTILISATEUR` int(15) NOT NULL,
  `idproduit_PRODUIT` int(15) NOT NULL,
  `date_commander` date DEFAULT NULL,
  `adresse_commander` varchar(20) DEFAULT NULL,
  `Telephone_commander` varchar(12) DEFAULT NULL,
  `etat_COMMANDE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idproduit_PRODUIT` int(10) NOT NULL,
  `nom_PRODUIT` varchar(20) DEFAULT NULL,
  `quantité_PRODUIT` int(20) DEFAULT NULL,
  `dateModification_PRODUIT` date DEFAULT NULL,
  `heureModification_PRODUIT` varchar(10) DEFAULT NULL,
  `id_UTILISATEUR` varchar(10) DEFAULT NULL,
  `prix` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idproduit_PRODUIT`, `nom_PRODUIT`, `quantité_PRODUIT`, `dateModification_PRODUIT`, `heureModification_PRODUIT`, `id_UTILISATEUR`, `prix`) VALUES
(5, 'paracetamol', 34, '2021-01-13', '12h30', '1', 300),
(7, 'effervescent', 45, '2021-01-20', '21h45', '1', 600);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_UTILISATEUR` int(15) NOT NULL,
  `username_UTILISATEUR` varchar(20) DEFAULT NULL,
  `name_UTILISATEUR` varchar(20) DEFAULT NULL,
  `surname_UTILISATEUR` varchar(20) DEFAULT NULL,
  `type_UTILISATEUR` tinyint(1) NOT NULL,
  `password_UTILISATEUR` varchar(20) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `adresse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_UTILISATEUR`, `username_UTILISATEUR`, `name_UTILISATEUR`, `surname_UTILISATEUR`, `type_UTILISATEUR`, `password_UTILISATEUR`, `ville`, `adresse`) VALUES
(1, 'dani', 'londjo', 'viviane', 1, 'telodane', '', ''),
(11, 'bavon', 'Nzorijana', 'bavon', 1, '1234', 'villeneuve dascq', 'rue des genets'),
(62, 'abdu', 'shahid', 'abdurrhamann', 1, '77777', 'Lille', 'rue jean sans peur'),
(63, 'Lolo', 'ingabire', 'Laurene', 1, '0000', 'Bondues', 'rue du bosquiel');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `idVideo_VIDEO` int(10) NOT NULL,
  `thème_VIDEO` varchar(20) DEFAULT NULL,
  `dateInsertion_VIDEO` date DEFAULT NULL,
  `password_UTILISATEUR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD PRIMARY KEY (`numcathegorie_CATEGORIE`,`idproduit_PRODUIT`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`numcathegorie_CATEGORIE`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_UTILISATEUR`,`idproduit_PRODUIT`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idproduit_PRODUIT`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_UTILISATEUR`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`idVideo_VIDEO`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appartient`
--
ALTER TABLE `appartient`
  MODIFY `numcathegorie_CATEGORIE` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `numcathegorie_CATEGORIE` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_UTILISATEUR` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idproduit_PRODUIT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_UTILISATEUR` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `idVideo_VIDEO` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
