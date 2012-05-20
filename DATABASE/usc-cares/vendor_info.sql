-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.20-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-05-20 12:24:11
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table usc-cares.vendor_info
DROP TABLE IF EXISTS `vendor_info`;
CREATE TABLE IF NOT EXISTS `vendor_info` (
  `vend_id` int(10) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(50) NOT NULL,
  PRIMARY KEY (`vend_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
