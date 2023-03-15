
-- --------------------------------------------------------

--
-- Structure de la table `list_prof_depart_info`
--

DROP TABLE IF EXISTS `list_prof_depart_info`;
CREATE TABLE IF NOT EXISTS `list_prof_depart_info` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `matiere_enseigner` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
