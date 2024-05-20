-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 09:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpom`
--

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE `sheet1` (
  `nama` varchar(39) DEFAULT NULL,
  `nip` varchar(21) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `pangkat_gol` varchar(55) DEFAULT NULL,
  `substansi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`nama`, `nip`, `jabatan`, `pangkat_gol`, `substansi`) VALUES
('Suliyanto., SH., MH', '19661207 198603 1 003', 'Pembina, IV/b', 'Kepala BPOM di Mamuju', NULL),
('Candra Agung FN., S.Kom.', '-', '-', 'Tenaga Administrasi Subbag Tata Usaha', NULL),
('Dra. Netty Nurmuliawaty, Apt., M.Kes.', '19630104 198903 2 001', 'Pembina Tk. I / IVb', 'Koordinator Kelompok Substansi Informasi dan Komunikasi', NULL),
('Fitri, S.Si., Apt., M.Si.', '19780525 200501 2 001', 'IV/a', 'PFM Ahli Muda', NULL),
('Dian Muthiah Mutmainna, S.Si., Apt.', '19960808 201903 2 007', 'Penata Muda Tk. I / IIIb', 'PFM Ahli Pertama', NULL),
('Sri Rahmawati, S.Farm., Apt.', '19671228 198803 2 001', 'Penata Tk 1, III/d', 'PFM Ahli Muda', NULL),
('Besse Tenri Wawo, SE.', '19781120 199903 2 001', 'Penata, III/c', 'Kepala Sub Bagian Tata Usaha', NULL),
('A. Mirza Fauzan Gazali, S.Farm., Apt.', '19930519 201801 1 001', 'Penata, III/c', 'PFM Ahli Muda', NULL),
('Nurul Mukhlisah S., S.KM.', '19950825 202203 2 001', 'Penata Muda / IIIa', 'PFM Keahlian', NULL),
('Sri Rahayu, S.Si., Apt.', '19940809 201903 2 008', 'Penata Muda Tk. I / IIIb', 'PFM Ahli Pertama', NULL),
('Syarfina Safirahidzni, S.Si., Apt.', '19950426 201903 2 006', 'Penata Muda Tk. I / IIIb', 'PFM Ahli Pertama', NULL),
('Ni Putu Rusmitha Cintya Dewi, SE.', '19940429 201903 2 007', 'Penata Muda / IIIa', 'Perencana Ahli Pertama', NULL),
('Muhammad Fuad, ST.', '-', '-', 'Tenaga Administrasi Substansi Infokom', NULL),
('Bahria., S.Si', '19660710 199903 2 001', 'Pembina,\nIV/', 'PFM Ahli Madya', NULL),
('Lintang Purba Jaya, S.Farm, Apt, M.Si', '19841121 200812 1 001', 'IV/a', 'Kepala BPOM di Mamuju', NULL),
('Dwi Kasmono, SE.', '-', '-', 'Tenaga Administrasi Subbag Tata Usaha', NULL),
('Daniel Baan, SE', '199609152020121002', 'Penata Muda / IIIa', 'Analis Anggaran', NULL),
('Muh. Ardin', '-', '-', 'Driver', NULL),
('Lintang Purba Jaya, S.Farm., Apt., M.Si', '19841121 200812 1 001', 'IV/a', 'Kepala BPOM di Mamuju', NULL),
('Asbar', '-', '-', 'Driver', NULL),
('A.R Nuryadin S.TP', '198503102009121008', 'III.d', 'Analis Obat Dan Makanan', NULL),
('Muhammad Ahsan, S.Si, Apt', '199204142019031004', 'Penata Muda\nTk. I / III/b', 'Pengawas Farmasi\ndan Makanan Ahli Makanan', NULL),
('Adrianto Agus., S.Farm., Apt', '19900305 201903 1 007', 'Penata Muda, tk 1 / IIIb', 'Analis Kepegawaian', NULL),
('Safruddin Azis, S.Kom', '19840308 201801 1 003', 'Penata Muda, III/a', 'Pranata Kompute Ahli Pertama', NULL),
('Bagus Wijanarko, S.Kom', '-', '-', 'Tenaga Administrasi Subbag Tata Usaha', NULL),
('Dra. Hj. Andi Ruskati Ali Baal', '-', '-', 'Anggota Komisi IX DPR RI', NULL),
('Fadiah Azis', '-', '-', 'TA. Anggota Komisi IX DPR RI', NULL),
('Asbar', '-', '-', 'Driver', NULL),
('A.R Nuryadin S.TP', '198503102009121008', 'III.d', 'Analis Obat Dan Makanan', NULL),
('Muhammad Ahsan, S.Si, Apt', '199204142019031004', 'Penata Muda\nTk. I / III/b', 'Pengawas Farmasi\ndan Makanan Ahli Makanan', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
