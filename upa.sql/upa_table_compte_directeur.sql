
-- --------------------------------------------------------

--
-- Structure de la table `compte_directeur`
--

DROP TABLE IF EXISTS `compte_directeur`;
CREATE TABLE IF NOT EXISTS `compte_directeur` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) NOT NULL DEFAULT 'thiam',
  `prenom` varchar(300) NOT NULL DEFAULT 'momath',
  `email` varchar(300) NOT NULL DEFAULT 'momathiam@gmail.com',
  `mot de passe` varchar(300) NOT NULL DEFAULT 'momathiam123',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
