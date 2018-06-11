--
-- Database: `abcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE IF NOT EXISTS `res` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TRAIN_NUMBER` int(30) NOT NULL,
  `Tr_name` varchar(100) NOT NULL,
  `src` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `AC_I` int(6) NOT NULL,
  `book` int(6) NOT NULL,
  `bal` int(6) NOT NULL,
  `FIRST_AC` int(6) NOT NULL,
  `AC_II` int(6) NOT NULL,
  `book1` int(6) NOT NULL,
  `bal1` int(6) NOT NULL,
  `SEC_AC` int(6) NOT NULL,
  `AC_III` int(6) NOT NULL,
  `book2` int(6) NOT NULL,
  `bal2` int(6) NOT NULL,
  `THIRD_AC` int(6) NOT NULL,
  `SL` int(6) NOT NULL,
  `book3` int(6) NOT NULL,
  `bal3` int(6) NOT NULL,
  `SL_CLASS` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `TRAIN_NUMBER` (`TRAIN_NUMBER`,`Tr_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;