
-- --------------------------------------------------------

--
-- Structure de la table `emploi_temps_licence1_sf`
--

DROP TABLE IF EXISTS `emploi_temps_licence1_sf`;
CREATE TABLE IF NOT EXISTS `emploi_temps_licence1_sf` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `8h_10h` text,
  `10h_12h` text,
  `13h_14h30` text,
  `14h30_16h` text,
  `16h_18h` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emploi_temps_licence1_sf`
--

INSERT INTO `emploi_temps_licence1_sf` (`id`, `8h_10h`, `10h_12h`, `13h_14h30`, `14h30_16h`, `16h_18h`) VALUES
(1, 'legislation du travail', 'Rédaction administrative', '', 'Anatomie et physiologie générale', ''),
(2, ' 	physiologie', 'Rédaction administrative', 'sociologie', '', ''),
(3, '', 'physiologie', ' 	physiologie', 'Puericulture', 'Microbiologie'),
(4, '', 'legislation du travail', 'Anatomie et physiologie générale', '', ''),
(5, 'Nutrition/Diététique', '', 'sociologie', '', 'physiologie'),
(6, 'Microbiologie', 'Puericulture', '', NULL, NULL);
