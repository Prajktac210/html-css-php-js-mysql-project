-- Table structure for table `admin`
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table structure for table `customer`
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(5) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `height` int(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `profilecreatedby` varchar(20) NOT NULL,
  `education` text NOT NULL,
  `education_sub` text NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `body_type` varchar(20) NOT NULL,
  `physical_status` varchar(20) NOT NULL,
  `drink` varchar(8) NOT NULL,
  `mothertounge` varchar(20) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `weight` int(5) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `diet` varchar(8) NOT NULL,
  `smoke` varchar(8) NOT NULL,
  `dateofbirth` date NOT NULL,
  `occupation` text NOT NULL,
  `occupation_descr` text NOT NULL,
  `annual_income` varchar(20) NOT NULL,
  `fathers_occupation` varchar(20) NOT NULL,
  `mothers_occupation` varchar(20) NOT NULL,
  `no_bro` int(5) NOT NULL,
  `no_sis` int(5) NOT NULL,
  `aboutme` text NOT NULL,
  `profilecreationdate` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

-- Table structure for table `partnerprefs`
CREATE TABLE IF NOT EXISTS `partnerprefs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `custId` int(10) NOT NULL,
  `agemin` varchar(3) NOT NULL,
  `agemax` int(3) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `complexion` varchar(10) NOT NULL,
  `height` int(3) NOT NULL,
  `diet` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `mothertounge` varchar(20) NOT NULL,
  `education` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `descr` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `custId` (`custId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Table structure for table `users`
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `profilestat` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `userlevel` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Table structure for table `contact_form_data`
CREATE TABLE IF NOT EXISTS `contact_form_data` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `message` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
