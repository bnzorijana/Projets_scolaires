-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 16 mars 2021 à 11:53
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `disques`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE `artiste` (
  `nom` varchar(50) NOT NULL,
  `nb_membres` int(11) DEFAULT NULL,
  `date_debut` int(11) DEFAULT NULL,
  `date_fin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`nom`, `nb_membres`, `date_debut`, `date_fin`) VALUES
('AC/DC', 5, 1973, NULL),
('Apocalyptica', 4, 1993, NULL),
('Bernard Lavilliers', 1, 1965, NULL),
('Bob Dylan', 1, 1959, NULL),
('Bob Marley', 1, 1962, 1981),
('Carnaby Group', NULL, NULL, NULL),
('Creedance Clearwater Revival', NULL, NULL, NULL),
('David Bowie', 1, 1962, 2016),
('Deep Purple', 5, 1968, 1976),
('Dire Straits', 4, 1977, 1995),
('Dire Straits and Mark Knopfler', 6, 2002, NULL),
('Eric Serra', 1, 1970, NULL),
('Genesis', 3, 1967, 2020),
('Iron Maiden', 6, 1975, NULL),
('J.S. Bach', 1, 1703, 1750),
('Jean-Michel Jarre', 1, 1968, NULL),
('Jimi Hendrix', 1, 1965, 1970),
('Led Zeppelin', 4, 1968, 1980),
('Louis Armstrong', 1, 1919, 1971),
('Ludwig Von Beethoven', 1, 1778, 1826),
('Madness', 7, 1976, 1986),
('Metallica', 4, 1981, NULL),
('The Alan Parson Project', 7, 1975, 1990),
('The Beatles', 4, 1960, 1970);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `pseudo` varchar(60) NOT NULL,
  `mdp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`pseudo`, `mdp`) VALUES
('abdu', 'legarsducss'),
('bavon', 'legarsduphp'),
('gandalf', 'melon'),
('thibault.lietard', 'thisisaneasteregg');

-- --------------------------------------------------------

--
-- Structure de la table `vinyles`
--

CREATE TABLE `vinyles` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `artiste` varchar(50) DEFAULT 'unknown',
  `annee_sortie` int(11) DEFAULT NULL,
  `annee_edition` int(11) DEFAULT NULL,
  `nb_disques` int(11) DEFAULT 1,
  `commentaire` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vinyles`
--

INSERT INTO `vinyles` (`id`, `titre`, `artiste`, `annee_sortie`, `annee_edition`, `nb_disques`, `commentaire`) VALUES
(1, 'High Voltage', 'AC/DC', 1973, 1976, 1, 'Pochette trouee'),
(2, 'Let There Be Rock', 'AC/DC', 1977, 1977, 1, ''),
(3, 'Power Age', 'AC/DC', 1978, 1978, 1, ''),
(4, 'Highway To Hell', 'AC/DC', 1979, 1979, 1, ''),
(5, 'Back In Black', 'AC/DC', 1980, 1980, 1, ''),
(6, 'For Those About To Rock', 'AC/DC', 1981, 1981, 1, ''),
(7, 'Black Ice', 'AC/DC', 2008, 2008, 2, ''),
(8, 'Live At River Plate', 'AC/DC', 2011, 2012, 3, 'Disques rouges translucides'),
(9, 'Shadowmaker', 'Apocalyptica', 2015, 2015, 2, 'version CD fournie'),
(10, 'The Turn Of A Friendly Card', 'The Alan Parson Project', 1980, 1980, 1, ''),
(11, 'Eye In The Sky', 'The Alan Parson Project', 1982, 1982, 1, ''),
(12, 'Integral Cover Version Of Beatles', 'Carnaby Group', 1976, 1976, 1, ''),
(13, 'Abbey Road', 'The Beatles', 1969, 1969, 1, ''),
(14, '1962-1966', 'The Beatles', 1973, 1973, 2, ''),
(15, '1967-1970', 'The Beatles', 1973, 1973, 2, ''),
(16, 'O Gringo', 'Bernard Lavilliers', 1980, 1980, 2, ''),
(17, 'Nuit d\'\'Amour', 'Bernard Lavilliers', 1981, 1981, 2, ''),
(18, 'etat d\'\'Urgence', 'Bernard Lavilliers', 1983, 1983, 1, ''),
(19, 'Voleur de Feu', 'Bernard Lavilliers', 1986, 1986, 2, ''),
(20, 'Street Legal', 'Bob Dylan', 1978, 1978, 1, ''),
(21, 'Exodus', 'Bob Marley', 1977, 1977, 1, ''),
(22, 'Pendulum', 'Creedance Clearwater Revival', 1970, NULL, 1, ''),
(23, 'Willy And The Poorboys', 'Creedance Clearwater Revival', 1969, NULL, 1, ''),
(24, 'Lets Dance', 'David Bowie', 1983, 1983, 1, ''),
(25, 'Fireball', 'Deep Purple', 1971, 1971, 1, ''),
(26, 'In Rock', 'Deep Purple', 1970, 1978, 1, ''),
(27, 'Machine Head', 'Deep Purple', 1972, 1972, 1, ''),
(28, 'Communique', 'Dire Straits', 1979, 1979, 1, ''),
(29, 'Love Over Gold', 'Dire Straits', 1982, 1982, 1, ''),
(30, 'Money For Nothing', 'Dire Straits', 1988, 1988, 1, ''),
(31, 'Private Investigations', 'Dire Straits and Mark Knopfler', 2005, 2005, 2, ''),
(32, 'The Divine Conspirancy', 'Epica', 2007, 2017, 2, 'edition speciale anniversaire limitee 300exps - disques verts'),
(33, 'The Quantum Enigma', 'Epica', 2014, 2014, 2, 'achete sur la tournee - disques argentes'),
(34, 'The Holographic Principle', 'Epica', 2016, 2016, 2, ''),
(35, 'The Solace System', 'Epica', 2017, 2017, 2, 'edition limitee 300exps - disques transparents'),
(36, 'Subway', 'Eric Serra', 1985, 1985, 1, ''),
(37, 'Duke', 'Genesis', 1980, 1980, 1, ''),
(38, 'Iron Maiden', 'Iron Maiden', 1980, 1980, 1, ''),
(39, 'Oxygene', 'Jean-Michel Jarre', 1976, 1976, 1, ''),
(40, 'Equinoxe', 'Jean-Michel Jarre', 1978, 1978, 1, ''),
(41, 'Les Chants Magnetiques', 'Jean-Michel Jarre', 1981, 1981, 1, ''),
(42, 'Les Concerts En Chine', 'Jean-Michel Jarre', 1982, 1982, 2, ''),
(43, 'En Concert Houston Lyon', 'Jean-Michel Jarre', 1987, 1987, 1, ''),
(44, 'Concerto Pour Violons et Orchestre', 'J.S. Bach', 1735, NULL, 1, ''),
(45, 'Integrale de l\'\'oeuvre d\'\'orgue  vol2', 'J.S. Bach', NULL, NULL, 6, ''),
(46, 'Axis Bold As Love', 'Jimi Hendrix', 1967, 1967, 1, ''),
(47, 'II', 'Led Zeppelin', 1969, 1970, 1, 'Serie de luxe - disque beige'),
(48, 'IV', 'Led Zeppelin', 1971, 1971, 1, ''),
(49, 'In Through The Out Door', 'Led Zeppelin', 1979, 1979, 1, 'Seulement la jaquette - coloration à l\'\'eau'),
(50, 'Louis Armstrong', 'Louis Armstrong', NULL, NULL, 1, ''),
(51, 'Integrale des 9 symphonies', 'Ludwig Von Beethoven', NULL, NULL, 6, ''),
(52, 'One Step Beyond', 'Madness', 1979, 1979, 1, ''),
(53, 'Kill \'\'em All', 'Metallica', 1983, 1983, 1, ''),
(54, 'Ride The Lightning', 'Metallica', 1984, 1984, 1, ''),
(55, 'Master Of Puppets', 'Metallica', 1986, 1986, 1, ''),
(56, 'Metallica', 'Metallica', 1991, 1991, 2, 'edition collector - diques verts'),
(57, 'Hardwired To Self Destruct', 'Metallica', 2016, 2016, 2, 'disques rouges'),
(58, 'Crises', 'Mike Oldfield', 1983, 1983, 1, ''),
(59, 'Thriller', 'Michael Jackson', 1982, 1982, 1, ''),
(60, 'Diesel And Dust', 'Midnigh Oil', 1987, 1987, 1, ''),
(61, 'Wishmaster', 'Nightwish', 2000, 2000, 1, ''),
(62, 'Century Child', 'Nightwish', 2002, 2015, 2, ''),
(63, 'Once', 'Nightwish', 2004, 2011, 2, 'Disques marbres - poster inclu'),
(64, 'Dark Passion Play', 'Nightwish', 2007, 2013, 2, 'Poster inclu'),
(65, 'Imaginaerum', 'Nightwish', 2011, 2011, 2, 'Disques transparents'),
(66, 'Endless Forms Most Beautiful', 'Nightwish', 2015, 2015, 2, 'edition limitee numerotee 51/200 jaune'),
(67, 'In The Heat Of The Night', 'Pat Benetar', 1979, 1979, 1, ''),
(68, 'Face Value', 'Phil Collins', 1981, 1981, 1, ''),
(69, 'Meddle', 'Pink Floyd', 1971, 1971, 1, ''),
(70, 'The Dark Side Of The Moon', 'Pink Floyd', 1973, 1973, 1, ''),
(71, 'The Division Bell', 'Pink Floyd', 1994, 2014, 2, 'edition Anniversaire'),
(72, 'The Wall', 'Pink Floyd', 1979, 1979, 2, ''),
(73, 'Whish You Were Here', 'Pink Floyd', 1975, 1975, 1, ''),
(74, 'Outlandos d\'\'Amour', 'The Police', 1978, 1978, 1, ''),
(75, 'Regatta De Blanc', 'The Police', 1979, 1979, 1, ''),
(76, 'Zenyatta Mondatta', 'The Police', 1980, 1980, 1, ''),
(77, 'Ghost In The Machine', 'The Police', 1981, 1981, 1, ''),
(78, 'Synchronicity', 'The Police', 1983, 1983, 1, ''),
(79, 'Live Magic', 'Queen', 1986, 1986, 1, ''),
(80, 'News Of The World', 'Queen', 1977, 1977, 1, ''),
(81, 'Goats Head Soup', 'The Rolling Stones', 1973, 1973, 1, ''),
(82, 'Some Girls', 'The Rolling Stones', 1978, 1978, 1, ''),
(83, 'Undercover', 'The Rolling Stones', 1983, 1983, 1, ''),
(84, 'Strong Arm Of The Law', 'Saxon', 1980, 1980, 1, ''),
(85, 'Crazy World', 'Scorpions', 1990, 1990, 1, ''),
(86, 'Lonesome Crow', 'Scorpions', 1972, 1982, 1, ''),
(87, 'Gold Ballads', 'Scorpions', 1984, 1984, 1, ''),
(88, 'Greatest Hits', 'Simon And Garfunkel', 1972, 1972, 1, ''),
(89, 'The Concert In Central Park', 'Simon And Garfunkel', 1982, 1982, 2, ''),
(90, 'Quo', 'Status Quo', 1974, 1974, 1, ''),
(91, 'Whatever You Want', 'Status Quo', 1979, 1979, 1, ''),
(92, 'The Dream Of The Blue Turtles', 'Sting', 1985, 1985, 1, ''),
(93, 'Crime Of The Century', 'Supertramp', 1974, 1974, 1, ''),
(94, 'Even In The Quietest Moments...', 'Supertramp', 1977, 1977, 1, ''),
(95, 'Breakfast In America', 'Supertramp', 1979, 1979, 1, ''),
(96, 'Songs From The Big Chair', 'Tears For Fears', 1985, 1985, 1, ''),
(97, 'Crache Ton Venin', 'Telephone', 1979, 1979, 1, NULL),
(98, 'Au Coeur De La Nuit', 'Telephone', 1980, 1980, 1, ''),
(99, 'Dure Limite', 'Telephone', 1982, 1982, 1, ''),
(100, 'Un Autre Monde', 'Telephone', 1984, 1984, 1, ''),
(101, 'Repression', 'Trust', 1980, 1980, 1, ''),
(102, 'Marche Ou Crève', 'Trust', 1981, 1981, 1, ''),
(103, 'The Unforgettable Fire', 'U2', 1984, 1984, 1, ''),
(104, 'Under A Blood Red Sky', 'U2', 1983, 1983, 1, ''),
(105, 'Van Hallen', 'Van Hallen', 1978, 1978, 1, 'Disque uniquement'),
(106, 'London Town', 'Wings', 1978, 1978, 1, ''),
(107, 'Best Of Who', 'The Who', 1970, 1970, 1, ''),
(108, 'Who\'\'s Next', 'The Who', 1971, 1971, 1, ''),
(109, 'Eliminator', 'ZZ Top', 1983, 1983, 1, ''),
(118, 'salut', 'la t', 1995, 1995, 7, 'super cool'),
(119, 'salut', 'la t', 1, 1995, 7, 'super cool'),
(120, 'salut', 'la t', 1, 1995, 7, 'super cool');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`pseudo`);

--
-- Index pour la table `vinyles`
--
ALTER TABLE `vinyles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `vinyles`
--
ALTER TABLE `vinyles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
