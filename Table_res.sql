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
  -- Total No of tickets available.
  `AC_I` int(6) NOT NULL,
  -- No of tickets booked.
  `book` int(6) NOT NULL,
  --bal of tickes after every reservation.
  `bal` int(6) NOT NULL,
  --Fare of this coach.
  `FIRST_AC` int(6) NOT NULL,
  -- Total No of tickets available.
  `AC_II` int(6) NOT NULL,
  -- No of tickets booked.
  `book1` int(6) NOT NULL,
  --bal of tickes after every reservation.
  `bal1` int(6) NOT NULL,
  --Fare of this coach.
  `SEC_AC` int(6) NOT NULL,
  --Total no. of tickets available.
  `AC_III` int(6) NOT NULL,
   --No. of tickets booked.
  `book2` int(6) NOT NULL,
  --balance tickes after booking.
  `bal2` int(6) NOT NULL,
  --Fare of this coach.
  `THIRD_AC` int(6) NOT NULL,
  -- Total no. of tickets available.
  `SL` int(6) NOT NULL,
  --No. of tickets booked.
  `book3` int(6) NOT NULL,
  --balance tickes after booking.
  `bal3` int(6) NOT NULL,
      --Fare of this coach.
  `SL_CLASS` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `TRAIN_NUMBER` (`TRAIN_NUMBER`,`Tr_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;
