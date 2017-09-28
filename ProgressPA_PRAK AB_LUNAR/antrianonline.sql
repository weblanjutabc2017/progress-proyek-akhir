-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 04:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrianonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(10) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `bidang`, `no_telp`, `alamat`) VALUES
('D300', 'Dr.Adventus', 'penyakit dalam', 897654354, 'kota baru, yogyakarta'),
('D301', 'dr.andriyana', 'umum', 867543265, 'sleman, yogyakarta'),
('D302', 'Prof.Dr.Ahmad Zaka', 'bedah jatung', 897006574, 'jl.hayam wuruk, yogyakarta'),
('D303', 'Dr.Indah Purnamasari', 'kulit', 876543554, 'jl.kartini no 10, terban, yogyakarta'),
('D304', 'dr.Bagus Eko', 'anak', 897654320, 'sagan, terban, yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(10) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `pekerjaan`, `alamat`, `no_telp`) VALUES
('P200', 'lalisa', 'mahasiswa', 'pogung, sleman, yogyakarta', 807643217),
('P201', 'rose', 'pegawai bank', 'poncobudoyo, pulisen, boyolali', 867543214),
('P202', 'mino', 'dosen', 'jl.hayam wuruk, yogyakarta', 896547655),
('P203', 'daniel', 'penyanyi', 'jl.kates no.7, pogung, yogyakarta', 89765421),
('P204', 'heny', 'PNS', 'sagan, yogyakarta', 876096653);

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `nama_pengunjung` varchar(30) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`nama_pengunjung`, `no_telp`, `alamat`, `pekerjaan`) VALUES
('bambang prihantoro', 876548901, 'jl.mawar no 9, yogyakarta', 'pedagang'),
('bams soeharsono', 871132546, 'ngaglik, yogyakarta', 'guru'),
('bella hadid', 875432711, 'sagan, sleman, yogyakarta', 'model'),
('gabriel nandalena', 876548900, 'jl.boncis, pulisen, boyolali', 'guru'),
('tria indah', 897654328, 'jl.melati,sleman, yogyakarta', 'PNS');

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `id_staff` varchar(10) NOT NULL,
  `nama_staff` varchar(30) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`id_staff`, `nama_staff`, `no_telp`, `alamat`) VALUES
('S100', 'ayu', 896541320, 'jakal km 7, yogyakarta'),
('S101', 'tata', 867526789, 'janti, no 5, yogyakarta'),
('S102', 'dina', 896543267, 'terban, yogyakarta'),
('S103', 'astri welas', 867543208, 'jl.herman yohanes, yogyakarta'),
('S104', 'ambarwati', 876543210, 'jl.kartini no 2, sagan, yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`nama_pengunjung`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id_staff`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
