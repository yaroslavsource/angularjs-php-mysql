--
-- Database :  `sias3a`
--

-- --------------------------------------------------------

--
-- Table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `idetudiant` int(11) NOT NULL AUTO_INCREMENT,
  `matriculeetudiant` varchar(255) DEFAULT NULL,
  `nometudiant` varchar(255) DEFAULT NULL,
  `prenometudiant` varchar(510) DEFAULT NULL,
  `emailetudiant` varchar(255) DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idetudiant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;