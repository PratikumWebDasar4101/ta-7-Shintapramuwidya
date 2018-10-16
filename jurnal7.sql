-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Okt 2018 pada 05.44
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `Nama` text NOT NULL,
  `NIM` int(10) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `programStudi` text NOT NULL,
  `Fakultas` text NOT NULL,
  `Asal` text NOT NULL,
  `MotoHidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`Nama`, `NIM`, `jenis_kelamin`, `programStudi`, `Fakultas`, `Asal`, `MotoHidup`) VALUES
('dia', 125, 'Laki-Laki', 'TK', 'FIK', 'semarang', 'happy'),
('Rama', 8907, 'Laki-Laki', 'IF', 'FKB', 'samaa', 'lala'),
('Shinta Pramuwidya', 2147483647, 'Perempuan', 'SI', 'FIT', 'semarang', 'happy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
