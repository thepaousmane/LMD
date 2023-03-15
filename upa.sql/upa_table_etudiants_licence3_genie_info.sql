
-- --------------------------------------------------------

--
-- Structure de la table `etudiants_licence3_genie_info`
--

DROP TABLE IF EXISTS `etudiants_licence3_genie_info`;
CREATE TABLE IF NOT EXISTS `etudiants_licence3_genie_info` (
  `id` int(100) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `date_lieu_naissance` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
