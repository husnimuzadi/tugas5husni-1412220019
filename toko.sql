-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2024 at 01:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_Barang` int NOT NULL,
  `Kode_Barang` varchar(10) DEFAULT NULL,
  `Nama_Barang` varchar(100) DEFAULT NULL,
  `Kategori_Barang` varchar(50) DEFAULT NULL,
  `Deskripsi_Barang` text,
  `Harga_Jual` decimal(10,2) DEFAULT NULL,
  `Stok_Barang` int DEFAULT NULL,
  `Supplier_Barang` varchar(100) DEFAULT NULL,
  `Tanggal_Masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_Barang`, `Kode_Barang`, `Nama_Barang`, `Kategori_Barang`, `Deskripsi_Barang`, `Harga_Jual`, `Stok_Barang`, `Supplier_Barang`, `Tanggal_Masuk`) VALUES
(36, 'ATK001', 'Pulpen Pilot F1', 'ATK', 'Pulpen tinta hitam dengan ketebalan 0.5mm.', '2.50', 300, 'PT Alat Tulis', '2024-05-25'),
(37, 'ATK002', 'Pensil Mekanik', 'ATK', 'Pensil mekanik dengan isi 0.7mm.', '1.20', 250, 'PT Alat Tulis', '2024-05-26'),
(38, 'ATK003', 'Penghapus Karet', 'ATK', 'Penghapus karet putih yang lembut.', '0.75', 400, 'PT Alat Tulis', '2024-05-27'),
(39, 'ATK004', 'Stapler Kangaro', 'ATK', 'Stapler ukuran standar.', '3.50', 150, 'PT Alat Tulis', '2024-05-28'),
(40, 'ATK005', 'Steples Isi', 'ATK', 'Isi stapler ukuran No. 10.', '0.50', 500, 'PT Alat Tulis', '2024-05-29'),
(42, 'BANG001', 'Catex Exterior', 'kebutuhan toko bangunan', 'Cat eksterior tahan cuaca dengan formula khusus.', '210.00', 90, 'PT Warna Berkah', '2024-06-01'),
(43, 'BANG002', 'Kayumix Interior', 'kebutuhan toko bangunan', 'Campuran kayu interior untuk finishing halus.', '175.00', 110, 'PT Warna Sejahtera', '2024-06-02'),
(44, 'BANG003', 'Roofguard', 'kebutuhan toko bangunan', 'Pelapis atap anti-bocor dengan lapisan tambahan UV.', '230.00', 80, 'PT Warna Jaya', '2024-06-03'),
(45, 'BANG004', 'Wallbright White', 'kebutuhan toko bangunan', 'Cat dinding putih dengan daya tutup tinggi.', '160.00', 130, 'PT Warna Maju', '2024-06-04'),
(46, 'BANG005', 'Interior Perfect', 'kebutuhan toko bangunan', 'Cat interior dengan kilap sempurna dan tahan lama.', '195.00', 70, 'PT Warna Indah', '2024-06-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `ID_Barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
