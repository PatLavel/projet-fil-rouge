-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 mai 2021 à 14:07
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nemelade`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `image` mediumblob DEFAULT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `combattant1` varchar(50) NOT NULL,
  `combattant2` varchar(50) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `libelle`, `dateDebut`, `dateFin`, `combattant1`, `combattant2`, `img`) VALUES
(1, 'STARATEGOS AFFRONTE WEREWOLF', '2021-07-02', '2021-07-02', 'STARATEGOS', 'WEREWOLF', NULL),
(2, 'GORILLA AFFRONTE DEATHBRINGER', '2021-07-10', '2021-07-10', 'GORILLA', 'DEATHBRINGER', NULL),
(3, 'GORILLA AFFRONTE DEATHBRINGER', '2021-07-10', '2021-07-10', 'GORILLA', 'DEATHBRINGER', NULL),
(4, 'DEMON\'S KATANA AFFRONTE REVOLVER', '2021-07-17', '2021-07-17', 'DEMON\'S KATANA', 'REVOLVER', 'vs1.png');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(11) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `dateAjout` datetime NOT NULL,
  `jaime` int(11) DEFAULT NULL,
  `jaimepas` int(11) DEFAULT NULL,
  `id_topic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id`, `message`, `dateAjout`, `jaime`, `jaimepas`, `id_topic`) VALUES
(1, 'Ma premiere reponse a un sujet', '2021-05-20 23:57:43', NULL, NULL, 6),
(2, 'Ma deuxieme reponse a un sujet', '2021-05-20 23:59:02', NULL, NULL, 6),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.\r\nUt velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna.\r\n\r\nAliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus, felis magna fermentum augue, et ultricies lacus lorem varius purus. Curabitur eu amet.', '2021-05-20 23:59:38', NULL, NULL, 5),
(4, 'nouveau message', '2021-05-21 13:36:33', NULL, NULL, 4),
(5, 'encore un message', '2021-05-21 13:41:34', NULL, NULL, 3),
(6, 'message pr le sujet 3', '2021-05-21 13:45:10', NULL, NULL, 3),
(7, 'dernier message pour essayer le fonctionnement des réponses (lié au 2eme topic)', '2021-05-21 13:55:25', NULL, NULL, 2),
(8, 'message nombre de rep', '2021-05-26 14:12:46', NULL, NULL, 2),
(9, '.....', '2021-05-26 14:13:35', NULL, NULL, 2),
(10, 'knlkncùsdcsd', '2021-05-27 15:47:28', NULL, NULL, 7),
(11, 'test', '2021-05-27 21:56:50', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `nombrePlace` int(11) NOT NULL,
  `emplacementPlace` varchar(20) NOT NULL,
  `counterPlace` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_evenement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sous_reponse`
--

CREATE TABLE `sous_reponse` (
  `id` int(11) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `dateAjout` datetime NOT NULL,
  `jaime` int(11) DEFAULT NULL,
  `jaimepas` int(11) DEFAULT NULL,
  `id_reponse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sous_reponse`
--

INSERT INTO `sous_reponse` (`id`, `message`, `dateAjout`, `jaime`, `jaimepas`, `id_reponse`) VALUES
(1, 'test 1ere reponse', '2021-05-27 22:00:14', NULL, NULL, 4),
(2, '2eme test sous reponse', '2021-05-27 22:01:49', NULL, NULL, 6),
(3, '3eme test sous rep', '2021-05-27 22:03:15', NULL, NULL, 6),
(4, 'encore un test', '2021-05-27 22:14:13', NULL, NULL, 5),
(5, 'voici une sous réponse', '2021-05-27 22:32:19', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `dateAjout` datetime NOT NULL,
  `jaime` int(11) DEFAULT NULL,
  `jaimepas` int(11) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `topic`
--

INSERT INTO `topic` (`id`, `titre`, `message`, `dateAjout`, `jaime`, `jaimepas`, `id_utilisateur`) VALUES
(1, '1er Topic', 'Ceci est le message du tout premier topic du forum nemelade :O', '2021-05-19 14:07:57', NULL, NULL, NULL),
(2, '2eme Topic', 'salut 2 message', '2021-05-19 14:09:10', NULL, NULL, NULL),
(3, '3eme Topic', 'a', '2021-05-19 14:38:57', NULL, NULL, NULL),
(4, '4eme Topic', 'message test', '2021-05-19 14:40:05', NULL, NULL, NULL),
(5, 'Titre pour fonctionnalité d\'affichage', 'Blablabla Blablabla Blablabla Blablabla BlablablaBlablablaBlablabla Blablabla BlablablaBlablablaBlablabla Blablabla Blablabla BlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablavBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlablablaBlab', '2021-05-20 17:36:14', NULL, NULL, NULL),
(6, 'D\'où vient-il?', 'Contrairement à une opinion répandue, le Lorem Ipsum n\'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s\'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d\'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum', '2021-05-20 18:01:27', NULL, NULL, NULL),
(7, 'azerty', 'azertyuiop', '2021-05-27 15:46:44', NULL, NULL, NULL),
(8, 'Un nouveau sujet', 'un nouveau message', '2021-05-27 22:35:25', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `photoProfil` blob NOT NULL,
  `classe` varchar(50) NOT NULL,
  `argent` decimal(15,3) NOT NULL,
  `profil` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `numPari` int(11) DEFAULT NULL,
  `sommePari` decimal(15,3) DEFAULT NULL,
  `id_evenement` int(11) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `photoProfil`, `classe`, `argent`, `profil`, `login`, `password`, `numPari`, `sommePari`, `id_evenement`, `hash`) VALUES
(1, 'DEBU', 'REMI', 'gl@gmail.com', '', '', '100.000', '', 'rezrez', 'motdepasse', NULL, NULL, NULL, '$2y$10$uHw22GfW37/2DRdVUZYUBOb0ADrHh3zCyu33oC7Xm7BRZosQn2dgC');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actualite_utilisateur_FK` (`id_utilisateur`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reponse_topic_FK` (`id_topic`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_utilisateur_FK` (`id_utilisateur`),
  ADD KEY `reservation_evenement0_FK` (`id_evenement`);

--
-- Index pour la table `sous_reponse`
--
ALTER TABLE `sous_reponse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sous_reponse_reponse_FK` (`id_reponse`);

--
-- Index pour la table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_utilisateur_FK` (`id_utilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_evenement_FK` (`id_evenement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sous_reponse`
--
ALTER TABLE `sous_reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD CONSTRAINT `actualite_utilisateur_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_topic_FK` FOREIGN KEY (`id_topic`) REFERENCES `topic` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_evenement0_FK` FOREIGN KEY (`id_evenement`) REFERENCES `evenement` (`id`),
  ADD CONSTRAINT `reservation_utilisateur_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_utilisateur_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_evenement_FK` FOREIGN KEY (`id_evenement`) REFERENCES `evenement` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
