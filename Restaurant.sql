-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 26 fév. 2025 à 23:43
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `id_ticket` varchar(4) NOT NULL,
  `id_prestation` int(11) NOT NULL,
  `nb_prestation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`id_ticket`, `id_prestation`, `nb_prestation`) VALUES
('T01', 1, 1),
('T01', 7, 2),
('T02', 1, 1),
('T02', 4, 2),
('T02', 9, 3),
('T03', 6, 1),
('T03', 8, 1),
('T04', 1, 1),
('T04', 4, 2),
('T04', 7, 1),
('T05', 6, 3),
('T06', 3, 1),
('T07', 2, 3),
('T08', 1, 2),
('T08', 7, 3),
('T09', 1, 1),
('T09', 5, 2),
('T09', 8, 3),
('T10', 1, 1),
('T10', 9, 4),
('T11', 3, 1),
('T11', 7, 2),
('T12', 1, 2),
('T12', 4, 3),
('T13', 9, 4),
('T14', 6, 4),
('T15', 2, 1),
('T15', 7, 3),
('T15', 8, 2),
('T16', 2, 1),
('T16', 9, 2),
('T17', 6, 2),
('T18', 6, 1),
('T19', 1, 2),
('T19', 9, 4),
('T20', 6, 2),
('T21', 1, 3),
('T21', 8, 3),
('T22', 2, 1),
('T22', 7, 1),
('T23', 6, 2),
('T24', 1, 3),
('T25', 3, 2),
('T25', 9, 2),
('T26', 6, 1),
('T27', 2, 1),
('T27', 7, 2),
('T28', 6, 4),
('T29', 3, 3),
('T29', 9, 3),
('T30', 1, 1),
('T30', 7, 1),
('T30', 9, 1),
('T31', 6, 1),
('T32', 2, 1),
('T33', 3, 2),
('T34', 6, 1),
('T34', 7, 1),
('T35', 3, 1),
('T35', 7, 2),
('T36', 6, 1),
('T37', 3, 1),
('T37', 8, 2),
('T38', 2, 1),
('T38', 7, 1),
('T39', 1, 1),
('T39', 5, 2),
('T40', 1, 3),
('T40', 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `libelle_categorie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `libelle_categorie`) VALUES
(1, 'Petits revenus'),
(2, 'Revenus moyens'),
(3, 'Gros revenus'),
(4, 'Visiteurs');

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

CREATE TABLE `depot` (
  `id_carte` varchar(4) NOT NULL,
  `date_depot` date NOT NULL,
  `montant` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `depot`
--

INSERT INTO `depot` (`id_carte`, `date_depot`, `montant`) VALUES
('C1', '2022-09-01', 5.00),
('C1', '2022-10-13', 30.00),
('C10', '2022-08-18', 5.00),
('C10', '2022-09-01', 25.00),
('C10', '2022-09-14', 30.00),
('C10', '2022-10-14', 25.00),
('C12', '2022-09-14', 80.00),
('C12', '2022-09-16', 30.00),
('C13', '2022-09-23', 40.00),
('C13', '2022-10-01', 20.00),
('C14', '2022-08-17', 20.00),
('C14', '2022-09-14', 30.00),
('C15', '2022-08-18', 30.00),
('C15', '2022-09-23', 30.00),
('C15', '2022-12-01', 45.00),
('C2', '2022-09-05', 20.00),
('C2', '2022-09-07', 30.00),
('C2', '2022-11-03', 15.00),
('C3', '2022-09-10', 40.00),
('C4', '2022-09-12', 20.00),
('C4', '2022-10-03', 30.00),
('C6', '2022-09-23', 60.00),
('C7', '2022-09-14', 5.00),
('C7', '2022-10-05', 20.00),
('C7', '2022-11-14', 30.00),
('C8', '2022-09-22', 20.00),
('C8', '2022-09-30', 30.00),
('C9', '2022-08-20', 5.00),
('C9', '2022-09-02', 20.00);

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE `prestation` (
  `id_prestation` int(11) NOT NULL,
  `type_prestation` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `prestation`
--

INSERT INTO `prestation` (`id_prestation`, `type_prestation`) VALUES
(1, 'Plat principal'),
(2, 'Plat + Dessert'),
(3, 'Entrée + Plat'),
(4, 'Supplément Entrée'),
(5, 'Supplément dessert'),
(6, 'Menu Complet'),
(7, 'Petit Déjeuner'),
(8, 'Boisson Simple'),
(9, 'Boisson Alcoolisée');

-- --------------------------------------------------------

--
-- Structure de la table `recette_supplement`
--

CREATE TABLE `recette_supplement` (
  `recette` decimal(42,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `id_prestation` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `prix` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `tarif`
--

INSERT INTO `tarif` (`id_prestation`, `id_categorie`, `prix`) VALUES
(1, 2, 2.70),
(1, 3, 3.10),
(1, 4, 5.00),
(2, 1, 3.10),
(2, 2, 3.40),
(2, 3, 3.70),
(2, 4, 6.00),
(3, 1, 1.80),
(3, 2, 2.00),
(3, 3, 2.50),
(3, 4, 4.00),
(4, 1, 4.50),
(4, 2, 4.80),
(4, 3, 5.20),
(4, 4, 7.00),
(5, 1, 3.90),
(5, 2, 4.10),
(5, 3, 4.50),
(5, 4, 6.50),
(6, 1, 2.20),
(6, 2, 2.40),
(6, 3, 2.80),
(6, 4, 4.20),
(7, 1, 5.00),
(7, 2, 5.40),
(7, 3, 5.80),
(7, 4, 8.00),
(8, 1, 3.50),
(8, 2, 3.80),
(8, 3, 4.10),
(8, 4, 6.30),
(9, 1, 2.70),
(9, 2, 3.00),
(9, 3, 3.30),
(9, 4, 5.50);

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` varchar(4) NOT NULL,
  `id_carte` varchar(4) DEFAULT NULL,
  `date_achat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `id_carte`, `date_achat`) VALUES
('T02', 'C1', '2022-10-05'),
('T03', 'C1', '2022-10-10'),
('T04', 'C1', '2022-10-11'),
('T05', 'C1', '2022-11-02'),
('T06', 'C2', '2022-10-11'),
('T07', 'C2', '2022-10-13'),
('T08', 'C2', '2022-11-02'),
('T09', 'C2', '2022-11-10'),
('T10', 'C2', '2022-11-14'),
('T11', 'C3', '2022-10-11'),
('T12', 'C3', '2022-10-20'),
('T13', 'C3', '2022-10-24'),
('T14', 'C4', '2022-11-02'),
('T15', 'C4', '2022-11-15'),
('T16', 'C4', '2022-11-24'),
('T17', 'C4', '2022-12-12'),
('T18', 'C6', '2022-12-27'),
('T19', 'C6', '2022-11-14'),
('T20', 'C7', '2022-12-19'),
('T21', 'C7', '2022-11-22'),
('T22', 'C7', '2022-11-10'),
('T23', 'C7', '2022-11-08'),
('T24', 'C7', '2022-10-12'),
('T25', 'C8', '2022-11-22'),
('T26', 'C8', '2022-10-18'),
('T27', 'C9', '2022-12-19'),
('T28', 'C9', '2022-11-22'),
('T29', 'C10', '2022-10-20'),
('T30', 'C10', '2022-10-17'),
('T31', 'C10', '2022-10-14'),
('T32', 'C12', '2022-12-08'),
('T33', 'C12', '2022-11-23'),
('T34', 'C12', '2022-11-21'),
('T35', 'C12', '2022-10-19'),
('T36', 'C13', '2022-11-23'),
('T37', 'C13', '2022-11-15'),
('T38', 'C14', '2022-10-12'),
('T39', 'C14', '2022-09-21'),
('T40', 'C15', '2022-09-01');

-- --------------------------------------------------------

--
-- Structure de la table `usager`
--

CREATE TABLE `usager` (
  `id_carte` varchar(4) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `montant_caution` decimal(10,2) DEFAULT NULL,
  `date_carte` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `usager`
--

INSERT INTO `usager` (`id_carte`, `nom`, `id_categorie`, `montant_caution`, `date_carte`) VALUES
('C1', 'Nina Mcdowell', 3, 6.00, '2022-08-27'),
('C10', 'Francesca Briggs', 2, 9.00, '2022-08-16'),
('C11', 'Abdul Weiss', 2, 9.00, '2022-09-19'),
('C12', 'Rinah Reilly', 1, 8.00, '2022-09-11'),
('C13', 'Kimberley Bryan', 1, 9.00, '2022-09-17'),
('C14', 'Lara Rowland', 2, 5.00, '2022-08-24'),
('C15', 'Avye Dodson', 2, 6.00, '2022-08-20'),
('C2', 'Lewis Reyes', 1, 7.00, '2022-08-28'),
('C3', 'Anjuli Santiago', 2, 5.00, '2022-08-29'),
('C4', 'Lydia Luna', 3, 6.00, '2022-08-25'),
('C5', 'Skylar Bryant', 3, 8.00, '2022-09-15'),
('C6', 'Micah Carroll', 1, 9.00, '2022-08-23'),
('C7', 'Nyssa Schultz', 2, 7.00, '2022-09-20'),
('C8', 'Logan Bowen', 3, 8.00, '2022-09-21'),
('C9', 'Uriah Randall', 1, 7.00, '2022-09-22');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `ident` varchar(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id`, `ident`, `name`, `username`, `password`, `mail`) VALUES
(1, '811887a5e48', 'Konaki', 'caca', '$2y$10$Ss0DqO8WVTYDTMFkTFK92ehVK774C9/qX9AFn201xeEzsfliNRdKu', 'gaetan.muller@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`id_ticket`,`id_prestation`),
  ADD KEY `num_prest` (`id_prestation`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `depot`
--
ALTER TABLE `depot`
  ADD PRIMARY KEY (`id_carte`,`date_depot`);

--
-- Index pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD PRIMARY KEY (`id_prestation`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_prestation`,`id_categorie`),
  ADD KEY `num_categ` (`id_categorie`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `num_carte` (`id_carte`);

--
-- Index pour la table `usager`
--
ALTER TABLE `usager`
  ADD PRIMARY KEY (`id_carte`) USING BTREE;

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
