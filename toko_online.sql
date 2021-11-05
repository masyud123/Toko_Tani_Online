-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 09:35 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_brg`
--

CREATE TABLE `tb_brg` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_brg`
--

INSERT INTO `tb_brg` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(34, 'Rondhup', 'Obat untuk rumput liar', 'obat gulma', 20000, 7, '1617060848-picsay1.png'),
(35, 'Green Tonic', 'Obat penyubur tanaman', 'pupuk', 50000, 8, 'green_tonic.png'),
(36, 'Metafuron', 'Obat untuk rumput liar', 'obat gulma', 13000, 15, 'metafuron.png'),
(37, 'Nasa', 'Obat penyubur tanaman', 'pupuk', 50000, 20, 'nasa.png'),
(38, 'Saturn', 'Obat untuk rumput liar', 'obat gulma', 30000, 16, 'saturn.png'),
(39, 'Sot', 'Obat penyubur tanaman', 'pupuk', 100000, 10, 'sot-picsay.png'),
(41, 'Cangkul/Pacul', 'Alat bantu petani', 'alat pertanian', 60000, 8, 'cangkul.png'),
(42, 'Mesin Pompa Air', 'Membantu menyedot air dari dalam tanah', 'alat pertanian', 3800000, 2, 'disel.png'),
(43, 'Mesin Dos', 'Mesin perontok padi', 'alat pertanian', 5000000, 10, 'dos.png'),
(44, 'Garbu', 'Alat bantu petani', 'alat pertanian', 30000, 4, 'Garbu.png'),
(45, 'Metrok', 'Alat bantu petani', 'alat pertanian', 15000, 10, 'metrok.png'),
(46, 'Penyaringan/Foot Klep', 'Onderdil mesin pompa air', 'alat pertanian', 35000, 10, 'saringan.png'),
(47, 'Selang', 'membantu menyalurkan air', 'alat pertanian', 110000, 4, 'selang.png'),
(48, 'Sorok', 'Alat bantu petani', 'alat pertanian', 17000, 6, 'sorok.png'),
(49, 'Spiral', 'Alat bantu menyedot air', 'alat pertanian', 40000, 5, 'spiral.png'),
(50, 'Sprayer Elektrik', 'Alat bantu petani', 'alat pertanian', 650000, 2, 'sprayer_elektrik.png'),
(51, 'Sprayer Manual', 'Alat bantu petani', 'alat pertanian', 450000, 4, 'sprayer_manual.png'),
(52, 'Terpal', 'Alat bantu petani', 'alat pertanian', 80000, 2, 'terpal.png'),
(53, 'Sabit/Aret', 'Alat bantu petani', 'alat pertanian', 35000, 22, 'arit.png'),
(54, 'Curacron', 'Obat pembasmi hama ', 'obat hama', 20000, 7, 'curacron.png'),
(55, 'Matador', 'Obat pembasmi hama ', 'obat hama', 25000, 22, 'matador.png'),
(56, 'Naga', 'Obat pembasmi hama ', 'obat hama', 30000, 25, 'naga.png'),
(57, 'Narahypo', 'Obat pembasmi hama ', 'obat hama', 35000, 4, 'narahypo.png'),
(58, 'Nopatek', 'Obat pembasmi hama ', 'obat hama', 30000, 6, 'nopatek.png'),
(59, 'Pestona', 'Obat pembasmi hama ', 'obat hama', 29500, 13, 'pestona.png'),
(60, 'Petrogenol', 'Obat pembasmi hama ', 'obat hama', 10500, 14, 'petrogenol.png'),
(61, 'Sidamethrin', 'Obat pembasmi hama ', 'obat hama', 33000, 12, 'sidamethrin.png'),
(62, 'Virtako', 'Obat pembasmi hama ', 'obat hama', 18000, 8, 'virtako.png'),
(63, 'Phonska', 'Pupuk penyubur tanaman', 'pupuk', 110000, 25, 'phonska2.png'),
(64, 'SP-36', 'Pupuk penyubur tanaman', 'pupuk', 90000, 25, 'sp2.png'),
(65, 'Urea', 'Pupuk penyubur tanaman', 'pupuk', 120000, 22, 'urea1.png'),
(66, 'ZA', 'Pupuk penyubur tanaman', 'pupuk', 90000, 23, 'za1.png'),
(67, 'ZK', 'Pupuk penyubur tanaman', 'pupuk', 115000, 10, 'zk1.png'),
(70, 'SP-36', 'Pupuk penyubur tanaman', 'pupuk', 110000, 25, 'Screenshot_2021-08-13-09-22-11-90.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chating`
--

CREATE TABLE `tb_chating` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `jasa` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`, `tlp`, `jasa`, `bank`) VALUES
(19, 'Mamad', 'Nglanduk', '2021-04-19 15:45:08', '2021-04-20 15:45:08', '081553572412', 'Pos Indonesia', 'Mandiri - xxxxxx'),
(20, 'sugeng', 'Nglanduk', '2021-04-21 21:55:10', '2021-04-22 21:55:10', '089636810579', 'JNE', 'BCA - xxxxxx'),
(21, 'alif', 'ngawi', '2021-04-22 21:30:18', '2021-04-23 21:30:18', '081553572412', 'JNE', 'BNI - xxxxxx'),
(22, 'Mamad', 'Nglanduk', '2021-05-11 12:10:41', '2021-05-12 12:10:41', '081553572412', 'JNE', 'BCA - xxxxxx'),
(23, 'nana', 'ds ngujung', '2021-06-07 08:29:17', '2021-06-08 08:29:17', '', 'JNE', 'BCA - xxxxxx'),
(25, 'Erfany', 'Ds. Kradinan', '2021-08-25 16:58:07', '2021-08-26 16:58:07', '089836810579', 'JNT', 'Mandiri - xxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_gb` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_gb`, `nama`, `gambar`) VALUES
(9, 'Mamad', 'ktp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(26, 19, 54, 'Curacron', 1, 20000, ''),
(27, 19, 50, 'Sprayer Elektrik', 2, 650000, ''),
(28, 20, 33, 'Gramoxone', 1, 40000, ''),
(29, 20, 44, 'Garbu', 1, 30000, ''),
(30, 20, 42, 'Mesin Pompa Air', 1, 3800000, ''),
(31, 21, 33, 'Gramoxone', 1, 40000, ''),
(32, 21, 35, 'Green Tonic', 1, 50000, ''),
(33, 22, 51, 'Sprayer Manual', 1, 450000, ''),
(34, 22, 54, 'Curacron', 1, 20000, ''),
(35, 22, 35, 'Green Tonic', 1, 50000, ''),
(36, 22, 36, 'Metafuron', 1, 13000, ''),
(37, 22, 40, 'Tandur', 1, 230000, ''),
(38, 23, 33, 'Gramoxone', 1, 40000, ''),
(39, 23, 34, 'Rondhup', 1, 20000, ''),
(40, 24, 35, 'Green Tonic', 1, 50000, ''),
(41, 24, 34, 'Rondhup', 1, 20000, ''),
(42, 25, 35, 'Green Tonic', 1, 50000, ''),
(43, 25, 36, 'Metafuron', 1, 13000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_brg SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'password', 1),
(5, 'Mamad ', 'Mamad', 'mamad', 2),
(11, 'Erfany', 'Erfany', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_brg`
--
ALTER TABLE `tb_brg`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_chating`
--
ALTER TABLE `tb_chating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_gb`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_brg`
--
ALTER TABLE `tb_brg`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tb_chating`
--
ALTER TABLE `tb_chating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_gb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
