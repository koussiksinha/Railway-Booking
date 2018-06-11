Database: `abcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `rest`
--

CREATE TABLE IF NOT EXISTS `rest` (
  `PNR` int(11) NOT NULL AUTO_INCREMENT,
  `Tr_Num` int(10) NOT NULL,
  `Train_Name` varchar(150) NOT NULL,
  `na` varchar(150) NOT NULL,
  `age` int(3) NOT NULL,
  `DOJ` date NOT NULL,
  `seat` varchar(90) NOT NULL,
  `src` varchar(150) NOT NULL,
  `des` varchar(150) NOT NULL,
  `class` varchar(30) NOT NULL,
  PRIMARY KEY (`PNR`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
