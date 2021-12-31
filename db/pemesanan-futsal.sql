-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2021 at 02:48 
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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

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
-- Table structure for table `tb_lapangan`
--

CREATE TABLE `tb_lapangan` (
  `id_lapangan` int(11) NOT NULL,
  `nama_lapangan` varchar(100) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `harga_sewa` varchar(15) NOT NULL,
  `photo_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lapangan`
--

INSERT INTO `tb_lapangan` (`id_lapangan`, `nama_lapangan`, `kondisi`, `harga_sewa`, `photo_file`) VALUES
(4, 'Lapangan 1', 'Baik', '300000', '7f9048e86e0c060e8031100100ccf381.jpeg'),
(9, 'lapangan 3', 'Baik', '200000', 'a6366787fca91be01c75e805544e0761.jpeg'),
(10, 'lapangan 2', 'Baik', '150000', '892ada95db3b0d2989288ec855c5bc44.jpeg');

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
(3, 'agus', 'ee11cbb19052e40b07aac0ca060c23ee', 'Agus Setiwan', 'aktif', '085123456789', 'agus@gmail.com', 'Serang', 'Cikande Bersatu FC');

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
  `nama_lapangan` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL,
  `nominal_pembayaran` varchar(100) NOT NULL,
  `status_sewa` varchar(20) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sewa_lapangan`
--

INSERT INTO `tb_sewa_lapangan` (`id_sewa`, `id_pelanggan`, `nama_lengkap`, `no_hp`, `nama_club`, `tgl_pesan`, `jam_main`, `tgl_main`, `lama_main`, `nama_lapangan`, `bukti_pembayaran`, `status_pembayaran`, `nominal_pembayaran`, `status_sewa`, `catatan`) VALUES
(4, '3', 'user', '1', '1', '24-12-2021 08:29:26', '22:00', '2021-12-22', '3', 'Lapangan 1', 'fefcbbfcd925940359425d8d724df1c1.png', 'lunas', '', 'Selesai', 'maaf lapangan sedang ada perbaikan'),
(5, '3', 'user', '112121', '21212', '24-12-2021 10:14:59', '19:00', '2021-12-02', '1', 'Lapangan 1', '0107301c4552fd2bc43d6a3563499275.png', 'lunas', '', 'Diterima', ''),
(6, '3', 'user', '1', '1', '24-12-2021 10:54:13', '17:00', '2021-12-03', '1', 'Lapangan 1', '5e1fa8ecc74e60651cdf9a2aa72331c9.png', 'DP', '1000', 'Menunggu', '');

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `tb_lapangan`
--
ALTER TABLE `tb_lapangan`
  MODIFY `id_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_sewa_lapangan`
--
ALTER TABLE `tb_sewa_lapangan`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
