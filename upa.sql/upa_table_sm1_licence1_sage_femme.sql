
-- --------------------------------------------------------

--
-- Structure de la table `sm1_licence1_sage_femme`
--

DROP TABLE IF EXISTS `sm1_licence1_sage_femme`;
CREATE TABLE IF NOT EXISTS `sm1_licence1_sage_femme` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `UE` text NOT NULL,
  `matiere` text NOT NULL,
  `est_programmer` varchar(100) DEFAULT NULL,
  `quantum_horraire` int(30) NOT NULL,
  `quantum_horraire_cours` int(100) NOT NULL DEFAULT '0',
  `professeur` text NOT NULL,
  `semestre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sm1_licence1_sage_femme`
--

INSERT INTO `sm1_licence1_sage_femme` (`id`, `UE`, `matiere`, `est_programmer`, `quantum_horraire`, `quantum_horraire_cours`, `professeur`, `semestre`) VALUES
(1, 'Professions Infirmieres et sages Femmes', 'profession infirmiere/sage-femme', NULL, 15, 0, 'Monsieur Ibrahima Senghor', 'Semestre 1'),
(2, 'Professions Infirmieres et sages Femmes', 'Ethique, code de déontologie de l\'IDE et de la SFE, charte du client', NULL, 13, 0, 'monsieur mamadou marrone', 'Semestre 1'),
(3, 'Professions Infirmieres et sages Femmes', 'Système National de santé', NULL, 16, 0, 'monsieur mamadou marrone', 'Semestre 1'),
(4, 'Professions Infirmieres et sages Femmes', 'legislation du travail', 'VRAI', 12, 9, 'Monsieur agbovon Kodio', 'Semestre 1'),
(5, 'Professions Infirmieres et sages Femmes', 'Théorie et concepts des soins infirmiers/obstétricaux, Démarche de soins', NULL, 12, 0, 'Monsieur Niyonipira', 'Semestre 1'),
(6, 'Professions Infirmieres et sages Femmes', 'Méthodologie de travail', NULL, 12, 0, 'Monsieur mamadou Marrone', 'Semestre 1'),
(7, 'Professions Infirmieres et sages Femmes', 'Rédaction administrative', 'VRAI', 16, 2, 'Monsieur agbovon Kodio', 'Semestre 1'),
(8, 'l\'être humain et son alimentation(SIO112)', 'Anatomie et physiologie générale', 'VRAI', 0, 0, 'Monsieur Daouda cisse', 'Semestre 1'),
(9, 'l\'être humain et son alimentation(SIO112)', 'Anatomie et physiologie obstréticale', NULL, 0, 0, 'Monsieur Daouda Cisse', 'Semestre 1'),
(10, 'l\'être humain et son alimentation(SIO112)', 'physiologie', 'VRAI', 10, 7, 'Monsieur Daouda cisse', 'Semestre 1'),
(11, 'l\'être humain et son alimentation(SIO112)', 'sociologie', 'VRAI', 12, 7, 'Monsieur Ibrahima Senghor', 'Semestre 1'),
(12, 'l\'être humain et son alimentation(SIO112)', 'psycho-sociologie/Anthropologie', NULL, 0, 0, 'Monsieur Alassane Fall', 'Semestre 1'),
(13, 'l\'être humain et son alimentation(SIO112)', 'Puericulture', 'VRAI', 0, 0, 'madame ndiaye Nancy', 'Semestre 1'),
(14, 'l\'être humain et son alimentation(SIO112)', 'Nutrition/Diététique', 'VRAI', 0, 0, 'Monsieur souleymane dieng', 'Semestre 1'),
(15, 'l\'être humain et son alimentation(SIO112)', 'Biologie humaine', NULL, 0, 0, 'Monsieur agbovon Kodio', 'Semestre 1'),
(16, 'Notions de bases sur les situations cliniques se référant aux pathologies\r\n(SIO113)', 'Microbiologie', 'VRAI', 14, 7, 'Monsieur Ibrahima Senghor', 'Semestre 1'),
(17, 'Notions de bases sur les situations cliniques se référant aux pathologies\r\n(SIO113)', 'Parasitologie', NULL, 0, 0, 'Madame Sembene', 'Semestre 1'),
(18, 'Notions de bases sur les situations cliniques se référant aux pathologies\r\n(SIO113)', 'Biochimie', NULL, 0, 0, 'Madame sembene', 'Semestre 1'),
(19, 'Notions de bases sur les situations cliniques se référant aux pathologies\r\n(SIO113)', 'Techniques de laboratoire', NULL, 0, 0, 'madame Nancy Ndiaye', 'Semestre 1'),
(20, 'Notions de bases sur les situations cliniques se référant aux pathologies\r\n(SIO113)', 'Sémiologie des différents appareils', NULL, 0, 0, 'madame Nancy Ndiaye', 'Semestre 1'),
(21, 'Notions de bases sur les situations cliniques se référant aux pathologies\r\n(SIO113)', 'Pharmacologie générale', NULL, 0, 0, 'Monsieur Ibrahima Senghor', 'Semestre 1'),
(22, 'Santé communautaire', 'Généralités sur la santé communautaire', NULL, 0, 0, 'Madame Sembene', 'Semestre 1'),
(23, 'Santé communautaire', 'Approches de santé communautaire', NULL, 0, 0, 'Monsieur XYZ', 'Semestre 1'),
(24, 'Santé communautaire', 'IEC/CCC ; communication fonctionnelle', NULL, 0, 0, 'madame Nancy Ndiaye', 'Semestre 1'),
(25, 'Méthodes et techniques de base en Soins Infirmiers et obstétricaux', 'Evaluation de l’état de santé du client', NULL, 0, 0, 'Monsieur XYZ', 'Semestre 1'),
(26, 'Méthodes et techniques de base en Soins Infirmiers et obstétricaux', 'Relation d’aide\r\n', NULL, 0, 0, '', 'Semestre 1'),
(27, 'Méthodes et techniques de base en Soins Infirmiers et obstétricaux', 'Prévention des infections\r\n', NULL, 0, 0, '', 'Semestre 1'),
(28, 'Méthodes et techniques de base en Soins Infirmiers et obstétricaux', 'Technique de soins de base en médecine et chirurgie', NULL, 0, 0, '', 'Semestre 1'),
(29, 'Outils de recherche\r\n(SIO116)', 'Anglais professionnel\r\n\r\n', NULL, 0, 0, '', 'Semestre 1'),
(30, 'Outils de recherche\r\n(SIO116)', 'Statistiques', NULL, 0, 0, '', 'Semestre 1');
