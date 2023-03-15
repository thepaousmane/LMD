
-- --------------------------------------------------------

--
-- Structure de la table `list_resp_ped_depart_info`
--

DROP TABLE IF EXISTS `list_resp_ped_depart_info`;
CREATE TABLE IF NOT EXISTS `list_resp_ped_depart_info` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `classe` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
