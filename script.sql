-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 06 Mars 2017 à 00:52
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `phppoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `Classe`
--

CREATE TABLE `Classe` (
  `idclasse` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Classe`
--

INSERT INTO `Classe` (`idclasse`, `nom`) VALUES
(2, 'paladin'),
(3, 'barbare'),
(4, 'magicien'),
(5, 'magicien noir'),
(6, 'gobelin'),
(7, 'dragon');

-- --------------------------------------------------------

--
-- Structure de la table `Coffre`
--

CREATE TABLE `Coffre` (
  `idCoffre` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `or` int(11) DEFAULT NULL,
  `objet` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Coffre`
--

INSERT INTO `Coffre` (`idCoffre`, `numero`, `or`, `objet`) VALUES
(2, 1, 200, 'cle'),
(3, 2, 100, 'cle'),
(4, 3, 200, ''),
(5, 4, 100, NULL),
(6, 5, 500, 'cle'),
(7, 6, 50, NULL),
(8, 7, 395, 'cle'),
(9, 8, 200, NULL),
(10, 9, 1000, NULL),
(11, 10, 600, 'cle');

-- --------------------------------------------------------

--
-- Structure de la table `Joueur`
--

CREATE TABLE `Joueur` (
  `idJoueur` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `descriptif` varchar(45) DEFAULT NULL,
  `mdp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Joueur`
--

INSERT INTO `Joueur` (`idJoueur`, `nom`, `prenom`, `pseudo`, `email`, `descriptif`, `mdp`) VALUES
(42, 'leroy', 'corentin', 'killu', 'leroy.corentin@outlook.fr', 'sdfsdf', 'alundiellundiel'),
(43, 'gros', 'enzo', 'enzolepabo', 'enzo@enzo', 'enzolepabo', 'enzo');

-- --------------------------------------------------------

--
-- Structure de la table `Niveau`
--

CREATE TABLE `Niveau` (
  `idNiveau` int(11) NOT NULL,
  `numeroSalle` int(11) DEFAULT NULL,
  `porte` int(11) DEFAULT NULL,
  `id_coffre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Niveau`
--

INSERT INTO `Niveau` (`idNiveau`, `numeroSalle`, `porte`, `id_coffre`) VALUES
(22, 0, 1, 2),
(23, 1, 1, 3),
(24, 2, 0, 4),
(25, 2, 0, 5),
(26, 2, 1, 6),
(27, 3, 0, 7),
(28, 3, 1, 8),
(29, 4, 0, 9),
(30, 4, 0, 10),
(31, 4, 1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `Partie`
--

CREATE TABLE `Partie` (
  `idPartie` int(11) NOT NULL,
  `id_personnage` int(11) DEFAULT NULL,
  `id_niveau` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Personnage`
--

CREATE TABLE `Personnage` (
  `idPersonnage` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `pdd` int(11) DEFAULT NULL,
  `pdv` int(11) DEFAULT NULL,
  `pdm` int(11) DEFAULT NULL,
  `pda` int(11) DEFAULT NULL,
  `pdvit` int(11) DEFAULT NULL,
  `argent` int(11) DEFAULT NULL,
  `id_joueur` int(11) DEFAULT NULL,
  `id_classe` int(11) DEFAULT NULL,
  `id_niveau` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Personnage`
--

INSERT INTO `Personnage` (`idPersonnage`, `nom`, `pdd`, `pdv`, `pdm`, `pda`, `pdvit`, `argent`, `id_joueur`, `id_classe`, `id_niveau`) VALUES
(50, 'Gobelin des mines', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 23),
(51, 'Gobelin des mines', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 24),
(52, 'Gobelin des mines', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 26),
(54, 'Magicien noir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 28),
(56, 'Magicien noir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 30),
(57, 'Dragon des Caverne enragé', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 31),
(62, 'corentin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
(71, 'moi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 22),
(72, 'corentin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 22),
(73, 'corentin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 22),
(74, 'Emeric', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 22),
(75, 'Emeric', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 22),
(76, 'Emeric', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 22),
(82, 'Emeric', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 22),
(83, 'Emeric', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 22),
(85, 'sdfsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 22);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Classe`
--
ALTER TABLE `Classe`
  ADD PRIMARY KEY (`idclasse`);

--
-- Index pour la table `Coffre`
--
ALTER TABLE `Coffre`
  ADD PRIMARY KEY (`idCoffre`);

--
-- Index pour la table `Joueur`
--
ALTER TABLE `Joueur`
  ADD PRIMARY KEY (`idJoueur`);

--
-- Index pour la table `Niveau`
--
ALTER TABLE `Niveau`
  ADD PRIMARY KEY (`idNiveau`),
  ADD KEY `id_coffre_idx` (`id_coffre`);

--
-- Index pour la table `Partie`
--
ALTER TABLE `Partie`
  ADD PRIMARY KEY (`idPartie`),
  ADD KEY `id_fpersonnage` (`id_personnage`),
  ADD KEY `id_niveaux` (`id_niveau`);

--
-- Index pour la table `Personnage`
--
ALTER TABLE `Personnage`
  ADD PRIMARY KEY (`idPersonnage`),
  ADD KEY `id_joueur_idx` (`id_joueur`),
  ADD KEY `id_classe_idx` (`id_classe`),
  ADD KEY `id_niveau_idx` (`id_niveau`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Classe`
--
ALTER TABLE `Classe`
  MODIFY `idclasse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `Coffre`
--
ALTER TABLE `Coffre`
  MODIFY `idCoffre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `Joueur`
--
ALTER TABLE `Joueur`
  MODIFY `idJoueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `Niveau`
--
ALTER TABLE `Niveau`
  MODIFY `idNiveau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `Partie`
--
ALTER TABLE `Partie`
  MODIFY `idPartie` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Personnage`
--
ALTER TABLE `Personnage`
  MODIFY `idPersonnage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Niveau`
--
ALTER TABLE `Niveau`
  ADD CONSTRAINT `id_coffre` FOREIGN KEY (`id_coffre`) REFERENCES `Coffre` (`idCoffre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `Partie`
--
ALTER TABLE `Partie`
  ADD CONSTRAINT `id_fpersonnage` FOREIGN KEY (`id_personnage`) REFERENCES `Personnage` (`idPersonnage`),
  ADD CONSTRAINT `id_niveaux` FOREIGN KEY (`id_niveau`) REFERENCES `Niveau` (`idNiveau`);

--
-- Contraintes pour la table `Personnage`
--
ALTER TABLE `Personnage`
  ADD CONSTRAINT `id_classe` FOREIGN KEY (`id_classe`) REFERENCES `Classe` (`idclasse`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_joueur` FOREIGN KEY (`id_joueur`) REFERENCES `Joueur` (`idJoueur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_niveau` FOREIGN KEY (`id_niveau`) REFERENCES `Niveau` (`idNiveau`) ON DELETE NO ACTION ON UPDATE NO ACTION;
