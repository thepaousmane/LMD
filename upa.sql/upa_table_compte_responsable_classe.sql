
-- --------------------------------------------------------

--
-- Structure de la table `compte_responsable_classe`
--

DROP TABLE IF EXISTS `compte_responsable_classe`;
CREATE TABLE IF NOT EXISTS `compte_responsable_classe` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
