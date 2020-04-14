-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 10:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukmkasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli_pembelian`
--

CREATE TABLE `beli_pembelian` (
  `id` int(11) NOT NULL,
  `jml` varchar(128) NOT NULL,
  `item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `data_kemasan_eceran`
--

CREATE TABLE `data_kemasan_eceran` (
  `id` int(11) NOT NULL,
  `id_kemasan_eceran` varchar(128) NOT NULL,
  `kemasan_eceran` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_kemasan_eceran`
--

INSERT INTO `data_kemasan_eceran` (`id`, `id_kemasan_eceran`, `kemasan_eceran`) VALUES
(0, 'pak', 'Pak'),
(0, 'sct', 'Sachet'),
(0, 'btl', 'Botol'),
(0, 'klg', 'Kaleng'),
(0, 'bks', 'Bungkus'),
(0, 'gln', 'Galon');

-- --------------------------------------------------------

--
-- Table structure for table `data_kemasan_grosir`
--

CREATE TABLE `data_kemasan_grosir` (
  `id` int(11) NOT NULL,
  `id_kemasan_grosir` varchar(128) NOT NULL,
  `kemasan_grosir` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_kemasan_grosir`
--

INSERT INTO `data_kemasan_grosir` (`id`, `id_kemasan_grosir`, `kemasan_grosir`) VALUES
(1, 'sak', 'Sak'),
(2, 'box', 'Box'),
(3, 'slp', 'Slop'),
(4, 'krt', 'Karton'),
(5, 'bal', 'Bal');

-- --------------------------------------------------------

--
-- Table structure for table `data_kemasan_satuan`
--

CREATE TABLE `data_kemasan_satuan` (
  `id` int(11) NOT NULL,
  `id_kemasan_satuan` varchar(3) NOT NULL,
  `kemasan_satuan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_kemasan_satuan`
--

INSERT INTO `data_kemasan_satuan` (`id`, `id_kemasan_satuan`, `kemasan_satuan`) VALUES
(1, 'Kg', 'Kilogram'),
(2, 'Lt', 'Liter'),
(3, 'Mt', 'Meter'),
(4, 'Ls', 'Luas');

-- --------------------------------------------------------

--
-- Table structure for table `data_kode_cetak`
--

CREATE TABLE `data_kode_cetak` (
  `id` int(11) NOT NULL,
  `id_cetak` varchar(2) NOT NULL,
  `cetak` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_kode_cetak`
--

INSERT INTO `data_kode_cetak` (`id`, `id_cetak`, `cetak`) VALUES
(1, 'CT', 'Cetak'),
(2, 'JL', 'Kasir'),
(3, 'BL', 'Pembelian'),
(4, 'BJ', 'Pengeluaran'),
(5, 'BR', 'Barang Rusak');

-- --------------------------------------------------------

--
-- Table structure for table `jual_harga_jual`
--

CREATE TABLE `jual_harga_jual` (
  `id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `barcode` varchar(128) NOT NULL,
  `item` varchar(128) NOT NULL,
  `isi_grosir` varchar(128) NOT NULL,
  `harga_grosir` varchar(128) NOT NULL,
  `isi_eceran` varchar(128) NOT NULL,
  `harga_eceran` varchar(128) NOT NULL,
  `isi_satuan` varchar(128) NOT NULL,
  `harga_satuan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jual_harga_jual`
--

INSERT INTO `jual_harga_jual` (`id`, `image`, `barcode`, `item`, `isi_grosir`, `harga_grosir`, `isi_eceran`, `harga_eceran`, `isi_satuan`, `harga_satuan`) VALUES
(1, '', '', 'Aqua galon', '5', '14500', '1', '15000', '', ''),
(2, '', '', 'Aqua 1500', '12', '78000', '1', '9000', '', ''),
(3, '', '', 'Aqua 300', '24', '78000', '1', '4000', '', ''),
(4, '', '', 'Aqua Gelas', '48', '52000', '1', '1500', '', ''),
(5, '', '', 'Indomie Kare Ayam', '40', '35000', '1', '1250', '', ''),
(6, '', '', 'Indomie Ayang Pedas', '40', '36000', '1', '1300', '', ''),
(7, '', '', 'Indomie rasa soto', '40', '34000', '1', '1250', '', ''),
(8, '', '', 'supermie', '40', '35000', '1', '1250', '', ''),
(9, '', '', 'supermie Hot Pedas', '40', '38000', '1', '1500', '', ''),
(10, '', '', 'Supermie Rasa Bawang', '40', '35000', '1', '1300', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jual_pelanggan`
--

CREATE TABLE `jual_pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jual_pelanggan`
--

INSERT INTO `jual_pelanggan` (`id`, `nama`, `alamat`, `kelurahan`, `kota`, `phone`) VALUES
(1, 'Atik Sembiring', 'duku 15', 'Kejengkol', 'Surabaya', '08165487666'),
(2, 'Anton Tonaya', 'jagung 67', 'Hantu Tengah', 'Godam', '08165485555'),
(3, 'Anisa Suwing', 'Rambuta Panjang 45', 'Buahan', 'Gunukan', '08165487666'),
(4, 'Katijah Fatijah', 'Semangka 7', 'Lantungan', 'Surabaya', '08165487666'),
(5, 'Firnanda Siaman', 'Appel 1', 'Pontang', 'Surabaya', '08165485555'),
(6, 'Adinda Siapa', 'Pisang 2', 'Jati Lawas', 'Surabaya', '08165485555'),
(7, 'Nona Gombel', 'Gombel 9', 'Dantrasan', 'Surabaya', '08165487666');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `tgl_masuk` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `foto`, `nama`, `alamat`, `kota`, `phone`, `username`, `password`, `tgl_masuk`, `level_id`, `aktif`) VALUES
(2, 'avatar.jpg', 'Bagos', 'Durian', 'Jakarta', '08256943245', 'Kasir', '$2y$10$UPuyaJmDVxIDTNylqK.eGu7EgOOy2MAv/RPa7xXHQtpM.1MyKqV9a', 1584098793, 2, 1),
(3, 'avatar.jpg', 'Selamet', 'Surabaya', '', '', 'Manager', '$2y$10$ZLkJfgiakApES3dN3T5NS.J6zhArc3a1M6yiOyodfbrEcFh.9Jrki', 1584105618, 4, 1),
(21, 'helloween.jpg', 'Dimas Andika', 'Semangka', 'Surabaya', '08145689555', 'Dimas', '$2y$10$x9j2l6cK0Qj3LbvI.1KWWOxEFPSo1Vy4k/klJmiiONzPIhsVho4/m', 1586276213, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_id`, `role`) VALUES
(1, 1, 'Pegawai'),
(2, 2, 'Kasir'),
(3, 3, 'Kabag'),
(4, 4, 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `role_akses`
--

CREATE TABLE `role_akses` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_id` int(11) NOT NULL,
  `info` text NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_akses`
--

INSERT INTO `role_akses` (`id`, `role_id`, `menu_id`, `submenu_id`, `info`, `aktif`) VALUES
(1, 1, 1, 1, '', 1),
(2, 1, 1, 2, '', 1),
(3, 1, 1, 3, '', 1),
(4, 1, 2, 1, '', 1),
(5, 1, 2, 2, '', 1),
(6, 1, 2, 3, '', 1),
(7, 1, 3, 1, '', 1),
(8, 1, 3, 2, '', 1),
(9, 1, 3, 3, '', 1),
(10, 1, 4, 1, '', 1),
(11, 1, 4, 2, '', 1),
(12, 1, 4, 3, '', 1),
(13, 1, 5, 1, '', 1),
(14, 1, 5, 2, '', 1),
(15, 1, 5, 3, '', 1),
(16, 2, 1, 1, '', 1),
(17, 2, 1, 2, '', 1),
(18, 2, 1, 3, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role_menu`
--

CREATE TABLE `role_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_menu`
--

INSERT INTO `role_menu` (`id`, `menu_id`, `menu`) VALUES
(1, 1, 'PENJUALAN'),
(2, 2, 'PEMBELIAN'),
(3, 3, 'STOK'),
(4, 4, 'PEGAWAI'),
(5, 5, 'PEMBUKUAN'),
(6, 6, 'SETTING');

-- --------------------------------------------------------

--
-- Table structure for table `role_submenu`
--

CREATE TABLE `role_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_submenu`
--

INSERT INTO `role_submenu` (`id`, `menu_id`, `submenu`, `url`, `icon`) VALUES
(1, 1, 'Kasir', 'jual_kasir', 'far fa-circle'),
(2, 1, 'Harga Jual', '', ''),
(3, 1, 'Pelanggan', '', ''),
(4, 2, 'Pembelian', '', ''),
(5, 2, 'Pengeluaran', '', ''),
(6, 2, 'Pemasok', '', ''),
(7, 3, 'Stok', '', ''),
(8, 3, 'Kategori', '', ''),
(9, 3, 'Kemasan', '', ''),
(10, 4, 'Data Pegawai', '', ''),
(11, 5, 'Daftar', '', ''),
(12, 6, 'Kode Cetak', '', ''),
(13, 6, 'Role', '', ''),
(14, 6, 'Role Akses', '', ''),
(15, 6, 'Menu', '', ''),
(16, 6, 'Submenu', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `item` varchar(128) NOT NULL,
  `stok` char(20) NOT NULL,
  `sjual` char(20) NOT NULL,
  `sbeli` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stok_kategori`
--

CREATE TABLE `stok_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stok_kategori`
--

INSERT INTO `stok_kategori` (`id`, `kategori`, `slug`) VALUES
(1, 'Minuman', 'minuman'),
(2, 'Makanan Ringan', 'makanan-ringan'),
(3, 'Makanan Kaleng', 'makanan-kaleng'),
(4, 'Bumbu Masak', 'bumbu-masak'),
(5, 'Permen', 'permen'),
(6, 'Minuman Kotak', 'minuman-kotak'),
(7, 'Minuman Kaleng', 'minuman-kaleng'),
(8, 'Mie Instan', 'mie-instan');

-- --------------------------------------------------------

--
-- Table structure for table `stok_kemasan`
--

CREATE TABLE `stok_kemasan` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `kemasan_grosir` varchar(128) NOT NULL,
  `kemasan_eceran` varchar(128) NOT NULL,
  `kemasan_satuan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli_pembelian`
--
ALTER TABLE `beli_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kemasan_grosir`
--
ALTER TABLE `data_kemasan_grosir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kemasan_satuan`
--
ALTER TABLE `data_kemasan_satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kode_cetak`
--
ALTER TABLE `data_kode_cetak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jual_harga_jual`
--
ALTER TABLE `jual_harga_jual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jual_pelanggan`
--
ALTER TABLE `jual_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_akses`
--
ALTER TABLE `role_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_menu`
--
ALTER TABLE `role_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_submenu`
--
ALTER TABLE `role_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_kategori`
--
ALTER TABLE `stok_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_kemasan`
--
ALTER TABLE `stok_kemasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli_pembelian`
--
ALTER TABLE `beli_pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_kemasan_grosir`
--
ALTER TABLE `data_kemasan_grosir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_kemasan_satuan`
--
ALTER TABLE `data_kemasan_satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_kode_cetak`
--
ALTER TABLE `data_kode_cetak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jual_harga_jual`
--
ALTER TABLE `jual_harga_jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jual_pelanggan`
--
ALTER TABLE `jual_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_akses`
--
ALTER TABLE `role_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `role_menu`
--
ALTER TABLE `role_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_submenu`
--
ALTER TABLE `role_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stok_kategori`
--
ALTER TABLE `stok_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stok_kemasan`
--
ALTER TABLE `stok_kemasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
