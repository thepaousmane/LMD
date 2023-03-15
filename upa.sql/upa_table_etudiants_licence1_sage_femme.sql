
-- --------------------------------------------------------

--
-- Structure de la table `etudiants_licence1_sage_femme`
--

DROP TABLE IF EXISTS `etudiants_licence1_sage_femme`;
CREATE TABLE IF NOT EXISTS `etudiants_licence1_sage_femme` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `date_lieu_naissance` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
