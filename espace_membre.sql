-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 20 mai 2023 à 01:51
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espace_membre`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `mail`, `motdepasse`, `role`) VALUES
(1, 'dada7', 'dada@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin'),
(4, 'darryl', 'darryl@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', ''),
(7, 'dada', 'dad@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idreservation` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idvehicule` int(11) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `prixtotal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `idvehicule` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantitedispo` int(11) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `datedispo` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`idvehicule`, `nom`, `description`, `quantitedispo`, `prix`, `datedispo`, `image`) VALUES
(1, 'Mercedes CLA AMG Line', 'La Mercedes CLA AMG Line est une berline compacte sportive au design élégant et agressif. Elle combine l\'esthétique raffinée de la CLA avec des éléments sportifs distinctifs tels que des jantes AMG, des pare-chocs avant et arrière spécifiques, et un intér', 2, '120', '2023-05-12', ' La Mercedes CLA AMG Line offre des performances améliorées grâce à un châssis sport, une suspension adaptative, une direction précise et un moteur puissant. Elle est équipée d\'une technologie avancée telle qu\'un système d\'infodivertissement avec écran tactile, des fonctionnalités de sécurité avancées et une connectivité étendue.'),
(2, 'Lamborghini Urus', ' Le Lamborghini Urus est un SUV de luxe et sportif qui incarne le mélange parfait entre performances extrêmes et fonctionnalités pratiques. Il présente un design audacieux et agressif, avec des lignes musclées et des détails distinctifs qui sont caractéri', 1, '230', '2023-05-12', 'Le Lamborghini Urus est équipé d\'un moteur V8 biturbo puissant qui lui confère des performances de supercar. Il dispose d\'un système de transmission intégrale et de suspensions adaptatives pour une conduite dynamique et confortable. L\'Urus offre également un intérieur luxueux et spacieux, ainsi que des fonctionnalités de connectivité et de sécurité de pointe.'),
(3, 'BMW M5', 'La BMW M5 est une berline de luxe ultra-performante qui allie élégance et puissance. Elle présente un design sophistiqué avec des lignes fluides et des accents sportifs, qui mettent en évidence sa sportivité discrète.', 3, '160', '2023-05-12', 'La BMW M5 est propulsée par un moteur V8 biturbo puissant, offrant une accélération rapide et des performances exceptionnelles. Elle est équipée d\'une transmission automatique à double embrayage et dispose de technologies avancées telles que la suspension adaptative, la direction assistée électrique et un système d\'infodivertissement haut de gamme. L\'intérieur offre un mélange de luxe et de sportivité, avec des matériaux de qualité et des fonctionnalités haut de gamme.'),
(4, 'Tesla Model 3 Long Range', 'La Tesla Model 3 Long Range est une voiture électrique compacte qui combine une autonomie étendue avec des performances électriques rapides. Son design épuré et minimaliste est caractéristique des voitures Tesla.', 3, '110', '2023-05-12', ' La Tesla Model 3 Long Range est équipée d\'une batterie de grande capacité qui offre une autonomie étendue. Elle dispose d\'un moteur électrique puissant, offrant une accélération instantanée et une conduite fluide. La Model 3 Long Range intègre un système d\'infodivertissement avancé avec un grand écran tactile, ainsi que des fonctionnalités de conduite semi-autonome.'),
(5, 'Audi RS7', 'L\'Audi RS7 est une berline sportive haut de gamme qui associe un design élégant et athlétique à des performances remarquables. Elle se distingue par son allure dynamique et ses détails raffinés.', 2, '180', '2023-05-12', 'L\'Audi RS7 est équipée de fonctionnalités avancées pour offrir des performances exceptionnelles. Elle est propulsée par un moteur V8 bi-turbo puissant, offrant une accélération rapide et des performances sportives. La voiture est équipée d\'une transmission automatique à sept rapports, d\'un système de suspension sport et d\'un système de freinage haute performance.'),
(6, 'BMW X3 MSport\r\n', 'Le BMW X3 M Sport est un SUV compact sportif au design dynamique et athlétique. Il présente des lignes musclées, une calandre caractéristique et des détails M Sport distinctifs tels que des jantes spécifiques et un kit carrosserie sport. ', 3, '134', '2023-05-12', 'Le BMW X3 M Sport offre une expérience de conduite sportive et polyvalente. Il est équipé d\'un moteur performant, d\'une transmission automatique à huit rapports et d\'une suspension sport pour une conduite réactive. L\'intérieur comprend des sièges sport en cuir, un système d\'infodivertissement avec écran tactile, la connectivité Bluetooth et une gamme de fonctionnalités pratiques telles que le hayon électrique et les capteurs de stationnement. '),
(7, 'Mercedes AMG GT R', ' La Mercedes AMG GT R est une voiture de sport haut de gamme au design spectaculaire et agressif. Elle présente des lignes musclées, une calandre emblématique avec l\'étoile \nde Mercedes et des détails aérodynamiques distinctifs tels que des prises d\'air.', 2, '200', '2023-05-12', 'La Mercedes AMG GT R est équipée de fonctionnalités haut de gamme pour offrir des performances de classe mondiale. Elle est propulsée par un moteur V8 biturbo de haute performance, offrant une accélération fulgurante et une vitesse de pointe impressionnante. La voiture dispose d\'une suspension réglable, d\'un système de freinage hautes performances et d\'une transmission automatique à double embrayage pour une expérience de conduite optimale.'),
(8, 'BMW série 1 MSport', 'La BMW Série 1 M Sport est une berline compacte sportive au design dynamique et athlétique. Elle présente des lignes agressives, une calandre distincte et des détails M Sport tels que des jantes spécifiques et un kit carrosserie sport.', 4, '100', '2023-05-12', 'La BMW Série 1 M Sport est dotée de fonctionnalités avancées pour une conduite dynamique. Elle est équipée d\'un moteur puissant, d\'une transmission automatique à huit rapports et d\'une suspension sport pour des performances optimales. L\'intérieur offre des sièges sport en cuir, un système d\'infodivertissement avec écran tactile, la connectivité Bluetooth et des fonctionnalités pratiques comme le régulateur de vitesse adaptatif et les capteurs de stationnement.'),
(9, 'Audi S8', ' L\'Audi S8 est une berline de luxe haute performance au design élégant et dynamique. Elle se distingue par des lignes fluides, une calandre Singleframe distinctive et des accents en chrome. Avec sa présence imposante, l\'Audi S8 allie sophistication et spo', 2, '200', '2023-05-12', 'L\'Audi S8 offre une gamme de fonctionnalités haut de gamme pour une expérience de conduite luxueuse et performante. Elle est propulsée par un moteur V8 bi-turbo puissant, offrant des performances rapides et une accélération impressionnante. La voiture est équipée d\'une transmission automatique à huit rapports, d\'une suspension pneumatique adaptative et d\'un système de traction intégrale pour une tenue de route exceptionnelle.'),
(10, 'bentley continental GT', 'La Bentley Continental GT est un coupé de grand tourisme de luxe au design élégant et intemporel. Elle présente des lignes fluides, une calandre emblématique avec les fameux phares ronds de Bentley et une allure puissante. La Continental GT incarne le mar', 1, '250', '2023-05-12', 'La Bentley Continental GT offre une gamme complète de fonctionnalités de luxe et de performance. Elle est propulsée par un moteur W12 puissant ou un V8 biturbo, offrant une puissance et une accélération impressionnantes. La voiture est équipée d\'une transmission automatique à huit rapports.'),
(11, 'BMW X6', 'Le BMW X6 est un SUV coupé de luxe au design audacieux et athlétique. Il présente des lignes fluides et dynamiques, une calandre distinctive et des phares LED effilés. Le X6 se distingue par son allure sportive et sa silhouette coupé, qui combine l\'élégan', 3, '150', '2023-05-12', 'Le BMW X6 offre une combinaison de fonctionnalités haut de gamme et de performances dynamiques. Il est équipé de moteurs puissants, offrant une accélération rapide et une conduite réactive. La voiture dispose d\'une transmission automatique à huit rapports, d\'un système de suspension adaptative et d\'une traction intégrale pour une tenue de route optimale'),
(12, 'Audi RS3 ', 'L\'Audi RS3 Gris Nardo est une voiture compacte sportive de haute performance au design agressif et élégant. La teinte de carrosserie Gris Nardo ajoute une touche de sophistication et met en valeur les lignes dynamiques de la RS3.', 2, '150', '2023-05-12', 'L\'Audi RS3 Gris Nardo offre une expérience de conduite sportive et performante. Sous le capot, on trouve un moteur puissant qui délivre une accélération rapide et des performances dynamiques. La transmission quattro à traction intégrale assure une adhérence optimale et une tenue de route précise, quelles que soient les conditions de conduite. L\'intérieur de la RS3 Gris Nardo est équipé de sièges sport en cuir, d\'un volant sport multifonction.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idreservation`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`idvehicule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idreservation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `idvehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
