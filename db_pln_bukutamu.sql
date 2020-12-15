-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.0.0.5460
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_pln_bukutamu.tbl_admin
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_pln_bukutamu.tbl_admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_admin` DISABLE KEYS */;
REPLACE INTO `tbl_admin` (`id_admin`, `nama`, `username`, `email`, `password`) VALUES
	(1, 'administrator', 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500');
/*!40000 ALTER TABLE `tbl_admin` ENABLE KEYS */;

-- Dumping structure for table db_pln_bukutamu.tbl_bukutamu
CREATE TABLE IF NOT EXISTS `tbl_bukutamu` (
  `id_bukutamu` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `tanggal` date NOT NULL,
  `keperluan` text NOT NULL,
  PRIMARY KEY (`id_bukutamu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_pln_bukutamu.tbl_bukutamu: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_bukutamu` DISABLE KEYS */;
REPLACE INTO `tbl_bukutamu` (`id_bukutamu`, `nama`, `email`, `telp`, `alamat`, `jenis_kelamin`, `jam_masuk`, `jam_keluar`, `tanggal`, `keperluan`) VALUES
	(1, 'Yoga', 'triyoga.ginanjar.p@gmail.com', '089653400432', 'Cibinong', 1, '08:00:00', '23:58:00', '2019-09-27', 'Ijin masuk');
/*!40000 ALTER TABLE `tbl_bukutamu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
