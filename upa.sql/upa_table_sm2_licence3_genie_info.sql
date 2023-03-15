
-- --------------------------------------------------------

--
-- Structure de la table `sm2_licence3_genie_info`
--

DROP TABLE IF EXISTS `sm2_licence3_genie_info`;
CREATE TABLE IF NOT EXISTS `sm2_licence3_genie_info` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `UE` text NOT NULL,
  `matiere` text NOT NULL,
  `professeur` text NOT NULL,
  `semestre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sm2_licence3_genie_info`
--

INSERT INTO `sm2_licence3_genie_info` (`id`, `UE`, `matiere`, `professeur`, `semestre`) VALUES
(1, 'Construction logicielle 2 COL1500 ', 'Introduction aux systèmes d’exploitation ', 'Monsieur lansana diop', 'Semestre 1'),
(2, 'Construction logicielle 2 COL1500 ', 'Introduction à l’architecture multiprocesseur', 'Monsieur amadou sarr', 'Semestre 1'),
(3, 'Technologies Web TEW1501 ', 'Développement web', 'Monsieur birima gueye', 'Semestre 1'),
(4, 'Technologies Web TEW1501 ', 'Technologie client-serveur ', 'Madame Ouleymata diene', 'Semestre 1'),
(5, 'Bases du génie logiciel BGL1502 ', 'Ingénierie du code (ou logicielle)', 'Madame Oumar diallo fall', 'Semestre 1'),
(6, 'Bases du génie logiciel BGL1502 ', 'Interface Homme-Machine', 'Madame thierno thiam', 'Semestre 1'),
(7, 'Base de données BAD1503 ', 'Introduction aux bases de données', 'Monsieur souleymane traoré', 'Semestre 1'),
(8, 'Base de données BAD1503 ', 'Administration des bases de données ', 'Monsieur babacar kane', 'Semestre 1'),
(9, 'Communication et Droit CMD1504 \r\n', 'Droit des TICs', 'Monsieur ibrahima sonko', 'Semestre 1'),
(10, 'Communication et Droit CMD1504 ', 'Communication professionnelle ', 'Madame fatoumata sarr', 'Semestre 1');
