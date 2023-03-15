
-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `matiere_enseigner` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id`, `nom`, `prenom`, `email`, `password`, `matiere_enseigner`) VALUES
(1, 'nancy', 'ndiaye', 'nancyndiaye6@gmail.com56', 'PROFupa@2022', ''),
(2, 'Sembene', 'Madame', 'Sembenefatima56@gmail.com2', 'PROFupa@2022', ''),
(3, 'cisse', 'Daouda', 'cisseMomar25@gmail.com', 'PROFupa@2022', ''),
(4, 'Senghor', 'Ibrahima', 'nancyndiaye6@gmail.com', 'PROFupa@2022', ''),
(5, 'Kodio', 'agbovon', 'agbovonkodio68@gmail.com', 'PROFupa@2022', ''),
(6, 'marrone', 'Mamadou', 'babatoure25@gmail.com', 'PROFupa@2022', ''),
(7, 'dieng', 'souleymane', 'diengsouley254@gmailcom', 'PROFupa@2022', ''),
(8, 'toure', 'sadio', 'sadiotoure65@gmail.com', 'PROFupa@2022', ''),
(9, 'danfa', 'birima', 'birimadanfa69@gmail.com', 'PROFupa@2022', ''),
(10, 'fall', 'karim', 'karimfall98@gmail.com', 'PROFupa@2022', ''),
(11, 'ba', 'thierno', 'thiernoba68@gmail.com', 'PROFupa@2022', ''),
(12, 'olela', 'victor', 'olvictor78@gmail.com', 'PROFupa@2022', '');
