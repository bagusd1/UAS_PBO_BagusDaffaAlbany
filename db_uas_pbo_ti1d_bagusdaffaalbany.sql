-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2026 at 08:04 AM
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
-- Database: `db_uas_pbo_ti1d_bagusdaffaalbany`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `semester` int NOT NULL,
  `tarif_ukt_nominal` decimal(12,2) NOT NULL,
  `jenis_pembiayaan` enum('mandiri','bidikmisi','prestasi') NOT NULL,
  `golongan_ukt` varchar(10) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nomor_kip_kuliah` varchar(30) DEFAULT NULL,
  `dana_saku_subsidi` decimal(12,2) DEFAULT NULL,
  `nama_instansi_beasiswa` varchar(100) DEFAULT NULL,
  `minimal_ipk_syarat` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `semester`, `tarif_ukt_nominal`, `jenis_pembiayaan`, `golongan_ukt`, `nama_wali`, `nomor_kip_kuliah`, `dana_saku_subsidi`, `nama_instansi_beasiswa`, `minimal_ipk_syarat`) VALUES
(1, 'Rian Hidayat', '202601004', 2, '6500000.00', 'mandiri', 'Golongan 5', 'Agus Hidayat', NULL, NULL, NULL, NULL),
(2, 'Dewi Lestari', '202601005', 4, '4500000.00', 'mandiri', 'Golongan 3', 'Bambang Sulistyo', NULL, NULL, NULL, NULL),
(3, 'Fajar Nugroho', '202601006', 6, '7500000.00', 'mandiri', 'Golongan 6', 'Hendro Nugroho', NULL, NULL, NULL, NULL),
(4, 'Citra Kirana', '202601007', 2, '5000000.00', 'mandiri', 'Golongan 4', 'Suripto', NULL, NULL, NULL, NULL),
(5, 'Aditya Pratama', '202601008', 8, '4500000.00', 'mandiri', 'Golongan 3', 'Rudi Pratama', NULL, NULL, NULL, NULL),
(6, 'Gita Gutawa', '202601009', 4, '6500000.00', 'mandiri', 'Golongan 5', 'Erwin Gutawa', NULL, NULL, NULL, NULL),
(7, 'Hendra Wijaya', '202601010', 6, '9000000.00', 'mandiri', 'Golongan 7', 'Gunawan Wijaya', NULL, NULL, NULL, NULL),
(8, 'Indah Permata', '202601011', 2, '0.00', 'bidikmisi', NULL, NULL, 'KIP-K-2026-0011', '800000.00', NULL, NULL),
(9, 'Joko Widodo', '202601012', 4, '0.00', 'bidikmisi', NULL, NULL, 'KIP-K-2024-0012', '750000.00', NULL, NULL),
(10, 'Kurniawan Dwi', '202601013', 6, '0.00', 'bidikmisi', NULL, NULL, 'KIP-K-2023-0013', '700000.00', NULL, NULL),
(11, 'Lesti Kejora', '202601014', 2, '0.00', 'bidikmisi', NULL, NULL, 'KIP-K-2026-0014', '850000.00', NULL, NULL),
(12, 'Muhammad Rizky', '202601015', 4, '0.00', 'bidikmisi', NULL, NULL, 'KIP-K-2024-0015', '750000.00', NULL, NULL),
(13, 'Nadia Vega', '202601016', 6, '0.00', 'bidikmisi', NULL, NULL, 'KIP-K-2023-0016', '700000.00', NULL, NULL),
(14, 'Oki Setiana', '202601017', 2, '0.00', 'bidikmisi', NULL, NULL, 'KIP-K-2026-0017', '800000.00', NULL, NULL),
(15, 'Putri Marino', '202601018', 4, '2000000.00', 'prestasi', NULL, NULL, NULL, NULL, 'Beasiswa Bank Indonesia', '3.25'),
(16, 'Qori Sandioriva', '202601019', 6, '1000000.00', 'prestasi', NULL, NULL, NULL, NULL, 'Kemenpora RI', '3.40'),
(17, 'Riza Shahab', '202601020', 2, '0.00', 'prestasi', NULL, NULL, NULL, NULL, 'Yayasan Toyota Astra', '3.50'),
(18, 'Sultan Sahbana', '202601021', 4, '1500000.00', 'prestasi', NULL, NULL, NULL, NULL, 'Beasiswa Unggulan Kemendikbud', '3.75'),
(19, 'Taufik Hidayat', '202601022', 8, '2000000.00', 'prestasi', NULL, NULL, NULL, NULL, 'BCA Finance', '3.30'),
(20, 'Utari Putri', '202601023', 2, '0.00', 'prestasi', NULL, NULL, NULL, NULL, 'Beasiswa Tanoto Foundation', '3.60'),
(21, 'Vino G. Bastian', '202601024', 6, '1200000.00', 'prestasi', NULL, NULL, NULL, NULL, 'PT. Pertamina (Persero)', '3.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id_mahasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
