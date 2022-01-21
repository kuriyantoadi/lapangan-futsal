-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2022 at 07:22 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanan-futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(11, 'mint', '8b823f49ba31caa5cd88e520c2f82bdc', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `isi_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `isi_fasilitas`) VALUES
(1, '<ol><li>Musolla&nbsp;</li><li>Kamar Mandi</li><li>Kantin</li><li>Tempat duduk</li><li>Tempat Parkir Luas</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ketentuan`
--

CREATE TABLE `tb_ketentuan` (
  `id_ketentuan` int(11) NOT NULL,
  `isi_ketentuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ketentuan`
--

INSERT INTO `tb_ketentuan` (`id_ketentuan`, `isi_ketentuan`) VALUES
(3, '<p>Pemain tidak merusak fasilitas Futsal Blafut</p><p>Jika melakukan pembayaran dengan DP, diharapkan untuk melakukan pelunasan ditempat</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lama_sewa`
--

CREATE TABLE `tb_lama_sewa` (
  `id_lama_sewa` int(11) NOT NULL,
  `lama_sewa` varchar(20) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_lama_sewa`
--

INSERT INTO `tb_lama_sewa` (`id_lama_sewa`, `lama_sewa`, `nominal`) VALUES
(3, '3 Jam', 750000),
(4, '2 Jam ', 500000),
(5, '1 Jam ', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lapangan`
--

CREATE TABLE `tb_lapangan` (
  `id_lapangan` int(11) NOT NULL,
  `nama_lapangan` varchar(100) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `photo_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lapangan`
--

INSERT INTO `tb_lapangan` (`id_lapangan`, `nama_lapangan`, `kondisi`, `photo_file`) VALUES
(4, 'Lapangan 1', 'Baik', '7f9048e86e0c060e8031100100ccf381.jpeg'),
(9, 'Lapangan 3', 'Baik', 'a6366787fca91be01c75e805544e0761.jpeg'),
(10, 'Lapangan 2', 'Baik', '892ada95db3b0d2989288ec855c5bc44.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL,
  `nama_club` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `username`, `password`, `nama_lengkap`, `status`, `no_hp`, `email`, `alamat`, `nama_club`) VALUES
(2, 'pelanggan', 'c4ca4238a0b923820dcc509a6f75849b', 'saya adalah pelanggan', 'aktif', '089', 'pelanggan@gmail.com', 'serang', 'Pelanggan FB'),
(3, 'agus', 'c4ca4238a0b923820dcc509a6f75849b', 'Agus Setiwan', 'aktif', '085123456789', 'agus@gmail.com', 'Serang', 'Cikande Bersatu FC'),
(4, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', 'aktif', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sewa_lapangan`
--

CREATE TABLE `tb_sewa_lapangan` (
  `id_sewa` int(11) NOT NULL,
  `id_pelanggan` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nama_club` varchar(100) NOT NULL,
  `tgl_pesan` varchar(20) NOT NULL,
  `jam_main` varchar(20) NOT NULL,
  `tgl_main` varchar(20) NOT NULL,
  `lama_main` varchar(20) NOT NULL,
  `harga_sewa` varchar(20) NOT NULL,
  `nominal_pembayaran` varchar(100) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `nama_lapangan` varchar(50) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL,
  `status_sewa` varchar(20) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sewa_lapangan`
--

INSERT INTO `tb_sewa_lapangan` (`id_sewa`, `id_pelanggan`, `nama_lengkap`, `no_hp`, `nama_club`, `tgl_pesan`, `jam_main`, `tgl_main`, `lama_main`, `harga_sewa`, `nominal_pembayaran`, `bukti_pembayaran`, `nama_lapangan`, `status_pembayaran`, `status_sewa`, `catatan`) VALUES
(22, '3', 'Agus Setiwan', '085123456789', 'Cikande Bersatu FC', '21-01-2022 23:21:48', '10:00', '2022-01-21', '2 Jam', '500000', '500000', 'd5b127be8a2c8267fc060fa1668f84c0.png', 'Lapangan 1', '0', 'Menunggu', ''),
(23, '3', 'Agus Setiwan', '085123456789', 'Cikande Bersatu FC', '21-01-2022 23:50:28', '08:00', '2022-01-05', '1 Jam', '250000', '50000', 'bde0a963b7dbd0a304024b77be020678.png', 'Lapangan 1', '-200000', 'Menunggu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_ketentuan`
--
ALTER TABLE `tb_ketentuan`
  ADD PRIMARY KEY (`id_ketentuan`);

--
-- Indexes for table `tb_lama_sewa`
--
ALTER TABLE `tb_lama_sewa`
  ADD PRIMARY KEY (`id_lama_sewa`);

--
-- Indexes for table `tb_lapangan`
--
ALTER TABLE `tb_lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_sewa_lapangan`
--
ALTER TABLE `tb_sewa_lapangan`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_ketentuan`
--
ALTER TABLE `tb_ketentuan`
  MODIFY `id_ketentuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_lama_sewa`
--
ALTER TABLE `tb_lama_sewa`
  MODIFY `id_lama_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_lapangan`
--
ALTER TABLE `tb_lapangan`
  MODIFY `id_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_sewa_lapangan`
--
ALTER TABLE `tb_sewa_lapangan`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
