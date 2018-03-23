-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mar 2018 pada 06.21
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweblanjut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`nip`, `nama`, `pass`) VALUES
('A001', 'Admin1', '2e33a9b0b06aa0a01ede70995674ee23'),
('M2', '1', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `NIM` varchar(9) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Kota` varchar(20) NOT NULL,
  `JK` varchar(12) NOT NULL,
  `WN` varchar(20) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`NIM`, `Nama`, `Password`, `Kota`, `JK`, `WN`, `Keterangan`, `Status`) VALUES
('M3116053', 'Prima Ammaray B', 'f0733c4852449aaa9b57', 'Sukoharjo', 'Laki-laki', 'WNI', 'Saya lahir di bandar lampung', 'Aktif'),
('M3116059', 'Sastri Jendra Ayunin', 'ca791d3cabd47da38495', 'Surakarta', 'Perempuan', 'WNI', 'Saya Adalah Sastri Jendra Ayuningat', 'Aktif'),
('M3116060', 'Surya Mahendra', 'aff8fbcbf1363cd7edc8', 'Karanganyar', 'Laki-laki', 'WNI', 'Surya', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`NIM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
