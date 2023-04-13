-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 06:28 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novita`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_klien`
--

CREATE TABLE `data_klien` (
  `id_klien` int(11) NOT NULL,
  `Klasifikasi_perkara` text NOT NULL,
  `pengadilan` text NOT NULL,
  `misili_pengadilan` text NOT NULL,
  `no_perkara` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `agenda` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_klien`
--

INSERT INTO `data_klien` (`id_klien`, `Klasifikasi_perkara`, `pengadilan`, `misili_pengadilan`, `no_perkara`, `tanggal`, `agenda`, `link`) VALUES
(170123, 'Permohonan Cerai Talak', 'Pengadilan Agama', 'Jakarta Selatan', 692, '2023-03-27', 'Putus', 'Detail');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
