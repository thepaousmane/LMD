
-- --------------------------------------------------------

--
-- Structure de la table `responsable_pedagogique`
--

DROP TABLE IF EXISTS `responsable_pedagogique`;
CREATE TABLE IF NOT EXISTS `responsable_pedagogique` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `classe` text NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `responsable_pedagogique`
--

INSERT INTO `responsable_pedagogique` (`id`, `nom`, `prenom`, `classe`, `email`) VALUES
(3, 'Sembene', 'Madame', 'licence 1 sage femme', ''),
(4, 'Sembene', 'Madame', 'licence 1 sage femme', 'Sembenefatima56@gmail.com2'),
(5, 'Sembene', 'Madame', 'licence 1 sage femme', 'Sembenefatima56@gmail.com2'),
(6, 'Sembene', 'Madame', 'licence 1 sage femme', 'Sembenefatima56@gmail.com2'),
(7, 'Sembene', 'Madame', 'licence 1 sage femme', 'Sembenefatima56@gmail.com2');
