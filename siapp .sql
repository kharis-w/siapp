-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 11:50 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulanan`
--

CREATE TABLE `bulanan` (
  `id_bulanan` int(8) NOT NULL,
  `id_pgw` varchar(255) NOT NULL,
  `id_tahunan` varchar(255) NOT NULL,
  `uraian` text NOT NULL,
  `volume` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `minimal` varchar(255) NOT NULL,
  `maksimal` varchar(255) NOT NULL,
  `rata` varchar(255) NOT NULL,
  `jmlh_jam` varchar(255) NOT NULL,
  `tenaga_jfu` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulanan`
--

INSERT INTO `bulanan` (`id_bulanan`, `id_pgw`, `id_tahunan`, `uraian`, `volume`, `satuan`, `minimal`, `maksimal`, `rata`, `jmlh_jam`, `tenaga_jfu`, `ket`, `tahun`) VALUES
(1, '1', '1', 'Menerima, mengambil atau meminta surat atau data ', '493', 'Surat', '5', '10', '7.5', '61.63', '', '', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `harian`
--

CREATE TABLE `harian` (
  `id_harian` int(8) NOT NULL,
  `id_pgw` varchar(255) NOT NULL,
  `id_bulanan` varchar(255) NOT NULL,
  `id_tahunan` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `jmlh_jam` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_pgw`
--

CREATE TABLE `m_pgw` (
  `id_pgw` int(11) NOT NULL,
  `nama_pgw` varchar(255) NOT NULL,
  `nip_pgw` varchar(255) NOT NULL,
  `pangkat_pgw` varchar(255) NOT NULL,
  `jabatan_pgw` varchar(255) NOT NULL,
  `unit_kerja_pgw` varchar(255) NOT NULL,
  `no_telpn_pgw` varchar(255) NOT NULL,
  `alamat_pgw` varchar(255) NOT NULL,
  `category_pgw` varchar(255) NOT NULL,
  `img_pgw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pgw`
--

INSERT INTO `m_pgw` (`id_pgw`, `nama_pgw`, `nip_pgw`, `pangkat_pgw`, `jabatan_pgw`, `unit_kerja_pgw`, `no_telpn_pgw`, `alamat_pgw`, `category_pgw`, `img_pgw`) VALUES
(1, 'Muhammad Abdan Nafik', '198301022014111002', 'Pengatur Muda /II/a', 'Pengadministrasi', 'Madrasah Aliyah Negeri Insan Cendekia Pasuruan', '085365315486', 'Alamat', 'Pegawai', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` int(11) NOT NULL,
  `id_pgw` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id_user`, `id_pgw`, `nama_user`, `username`, `password`, `category`) VALUES
(1, '', 'Muhammad Abdan Nafik', 'admin', 'WVdSdGFXND0=', 'Admin'),
(2, '1', 'Muhammad Abdan Nafik', 'pgw', 'Y0dkMw==', 'Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tahunan`
--

CREATE TABLE `tahunan` (
  `id_tktj` int(8) NOT NULL,
  `id_pgw` varchar(255) NOT NULL,
  `ktj` varchar(255) NOT NULL,
  `ak` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `output` varchar(255) NOT NULL,
  `mutu` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `biaya` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahunan`
--

INSERT INTO `tahunan` (`id_tktj`, `id_pgw`, `ktj`, `ak`, `quantity`, `output`, `mutu`, `waktu`, `biaya`, `tahun`) VALUES
(1, '', 'Menerima, Membuat, dan Mengertry/Memasukkan surat atau data, sesuai dengan prosedur dan ketentuan yang berlaku, agar memudahkan pencarian.', '0', '100', 'dokumen', '4000', '12', '0', '2020'),
(2, '', 'Memberi lembar pengantar pada surat, sesuai dengan prosedur dan ketentuan yang berlaku, agar memudahkan pengendalian.', '0', '100', 'dokumen', '700', '12', '0', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulanan`
--
ALTER TABLE `bulanan`
  ADD PRIMARY KEY (`id_bulanan`);

--
-- Indexes for table `harian`
--
ALTER TABLE `harian`
  ADD PRIMARY KEY (`id_harian`);

--
-- Indexes for table `m_pgw`
--
ALTER TABLE `m_pgw`
  ADD PRIMARY KEY (`id_pgw`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tahunan`
--
ALTER TABLE `tahunan`
  ADD PRIMARY KEY (`id_tktj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulanan`
--
ALTER TABLE `bulanan`
  MODIFY `id_bulanan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `harian`
--
ALTER TABLE `harian`
  MODIFY `id_harian` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_pgw`
--
ALTER TABLE `m_pgw`
  MODIFY `id_pgw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahunan`
--
ALTER TABLE `tahunan`
  MODIFY `id_tktj` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
