-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2024 at 01:32 AM
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
-- Database: `pwl_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_11_021907_create_m_level_table', 1),
(6, '2024_09_11_023623_create_m_kategori_table', 2),
(7, '2024_09_11_023859_create_m_supplier_table', 2),
(8, '2024_09_11_024301_create_m_user_table', 3),
(9, '2024_09_11_030117_create_t_penjualan_table', 4),
(10, '2024_09_11_030143_create_t_penjualan_detail_table', 4),
(11, '2024_09_11_030222_create_t_stok_table', 4),
(12, '2024_09_11_030542_create_m_barang_table', 4),
(13, '2024_09_11_033533_create_m_barang_table', 5),
(14, '2024_09_11_033846_create_t_penjualan_table', 6),
(15, '2024_09_11_034120_create_t_penjualan_detail_table', 7),
(16, '2024_09_11_034153_create_t_stok_table', 7),
(17, '2024_09_13_164137_create_m_supplier_table', 8),
(18, '2024_09_13_164148_create_t_stok_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `m_barang`
--

CREATE TABLE `m_barang` (
  `barang_id` bigint UNSIGNED NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `barang_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` int NOT NULL,
  `harga_jual` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_barang`
--

INSERT INTO `m_barang` (`barang_id`, `kategori_id`, `barang_kode`, `barang_nama`, `harga_beli`, `harga_jual`, `created_at`, `updated_at`) VALUES
(1, 1, 'BRG001', 'TV 42 inch', 3000000, 3500000, NULL, NULL),
(2, 1, 'BRG002', 'Kulkas 2 Pintu', 2500000, 2800000, NULL, NULL),
(3, 2, 'BRG003', 'Sofa Minimalis', 1500000, 1750000, NULL, NULL),
(4, 2, 'BRG004', 'Meja Kerja', 1000000, 1200000, NULL, NULL),
(5, 3, 'BRG005', 'Kemeja Pria', 200000, 250000, NULL, NULL),
(6, 1, 'BRG006', 'AC 1 PK', 3200000, 3500000, NULL, NULL),
(7, 1, 'BRG007', 'Laptop 14 inch', 7000000, 7500000, NULL, NULL),
(8, 2, 'BRG008', 'Kursi Kantor', 500000, 600000, NULL, NULL),
(9, 4, 'BRG009', 'Keripik Kentang', 15000, 20000, NULL, NULL),
(10, 4, 'BRG010', 'Biskuit Coklat', 10000, 15000, NULL, NULL),
(11, 3, 'BRG011', 'Celana Jeans', 300000, 350000, NULL, NULL),
(12, 5, 'BRG012', 'Pulpen Gel', 3000, 5000, NULL, NULL),
(13, 5, 'BRG013', 'Buku Tulis', 5000, 8000, NULL, NULL),
(14, 2, 'BRG014', 'Rak Buku', 200000, 250000, NULL, NULL),
(15, 5, 'BRG015', 'Spidol Hitam', 2500, 4000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori`
--

CREATE TABLE `m_kategori` (
  `kategori_id` bigint UNSIGNED NOT NULL,
  `kategori_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_kategori`
--

INSERT INTO `m_kategori` (`kategori_id`, `kategori_kode`, `kategori_nama`, `created_at`, `updated_at`) VALUES
(1, 'ELEC', 'Elektronik', NULL, NULL),
(2, 'FURN', 'Furniture', NULL, NULL),
(3, 'CLOT', 'Pakaian', NULL, NULL),
(4, 'FOOD', 'Makanan', NULL, NULL),
(5, 'STAT', 'Alat Tulis', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_level`
--

CREATE TABLE `m_level` (
  `level_id` bigint UNSIGNED NOT NULL,
  `level_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_level`
--

INSERT INTO `m_level` (`level_id`, `level_kode`, `level_nama`, `created_at`, `updated_at`) VALUES
(1, 'ADM', 'Administrator', NULL, NULL),
(2, 'MNG', 'Manager', NULL, NULL),
(3, 'STF', 'Staff/Kasir', NULL, NULL),
(4, 'CUS', 'Pelanggan', '2024-09-14 04:54:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_supplier`
--

CREATE TABLE `m_supplier` (
  `supplier_id` bigint UNSIGNED NOT NULL,
  `supplier_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_supplier`
--

INSERT INTO `m_supplier` (`supplier_id`, `supplier_kode`, `supplier_nama`, `supplier_alamat`, `created_at`, `updated_at`) VALUES
(1, 'SUP001', 'Supplier A', 'Jl. Mawar No. 1', NULL, NULL),
(2, 'SUP002', 'Supplier B', 'Jl. Melati No. 2', NULL, NULL),
(3, 'SUP003', 'Supplier C', 'Jl. Kamboja No. 3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `level_id` bigint UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`user_id`, `level_id`, `username`, `nama`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'Administrator', '$2y$12$LI1EX6Q.yGWuosfsssSBk.5zU5vsqsSJjoTp/wNbw0hZbZ/Y309Jm', NULL, NULL),
(2, 2, 'manager', 'Manager', '$2y$12$wsVojqYNz5iKWMN9wVPYmuYGGuQNzxLMebJIrLYnQjdPRQpb4lnKa', NULL, NULL),
(3, 3, 'staff', 'Staff/Kasir', '$2y$12$HCkTgw5rBxvnjmO64CtDMevimJU/iqkVgi0/ebN1ooLzg5BTJLOBa', NULL, NULL),
(5, 4, 'customer-1', 'Pelanggan Pertama', '$2y$12$NnvHa34eDtLYdTvVbImtc.F.dJDBcollnz7UNuDUQsmMk918PiTSC', NULL, '2024-09-14 05:50:38'),
(6, 2, 'manager_2', 'Manager 2', '$2y$12$F6uUDiz8eSevO9pQZuWS7e.zzAd3NzM5CCf4brukGYxNEfIKs5Ava', '2024-09-17 17:49:34', '2024-09-17 17:49:34'),
(8, 2, 'manager22', 'Manager Dua Dua', '$2y$12$wDtiVMMIWYF8h2AqdMU82ul5ZhkgFi0Iv0u1N6bKGW8xKjPvqeUsm', '2024-09-17 20:18:41', '2024-09-17 20:18:41'),
(9, 2, 'manager33', 'Manager Tiga Tiga', '$2y$12$ElXCq9WJSNEYqQykntBryuBlzdZlsFxAxd6aI3RP7cMJ47e8HLn9C', '2024-09-17 20:22:57', '2024-09-17 20:22:57'),
(10, 2, 'manager56', 'Manager55', '$2y$12$NRJxIaeQPE9pVs4DPH9rYup7ni0LpQdfhvA28ck5g4ov3Y9qsb4t2', '2024-09-18 04:21:32', '2024-09-18 04:21:32'),
(11, 2, 'manager12', 'Manager11', '$2y$12$w2PtfcTqUIdtYW7HZB552ODy7ZNWABHxen1WkmWtjbqtGAopTJ.Fy', '2024-09-18 04:38:25', '2024-09-18 04:38:25'),
(12, 4, 'customer-2', 'Pelanggan kedua', '$2y$12$yWKwlwg6q5WJtt9HPQzl0.YcwitLOhRWpFVb1TwtzvEo0GpAOUkgy', '2024-09-19 20:52:38', '2024-09-19 20:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_penjualan`
--

CREATE TABLE `t_penjualan` (
  `penjualan_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `pembeli` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjualan_kode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjualan_tanggal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_penjualan`
--

INSERT INTO `t_penjualan` (`penjualan_id`, `user_id`, `pembeli`, `penjualan_kode`, `penjualan_tanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 'Budi', 'TRX001', '2024-09-13 16:44:38', NULL, NULL),
(2, 1, 'Andi', 'TRX002', '2024-09-13 16:44:38', NULL, NULL),
(3, 2, 'Siti', 'TRX003', '2024-09-13 16:44:38', NULL, NULL),
(4, 2, 'Rina', 'TRX004', '2024-09-13 16:44:38', NULL, NULL),
(5, 3, 'Joko', 'TRX005', '2024-09-13 16:44:38', NULL, NULL),
(6, 3, 'Dewi', 'TRX006', '2024-09-13 16:44:38', NULL, NULL),
(7, 1, 'Tono', 'TRX007', '2024-09-13 16:44:38', NULL, NULL),
(8, 1, 'Eka', 'TRX008', '2024-09-13 16:44:38', NULL, NULL),
(9, 2, 'Lina', 'TRX009', '2024-09-13 16:44:38', NULL, NULL),
(10, 2, 'Rudi', 'TRX010', '2024-09-13 16:44:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_penjualan_detail`
--

CREATE TABLE `t_penjualan_detail` (
  `detail_id` bigint UNSIGNED NOT NULL,
  `penjualan_id` bigint UNSIGNED NOT NULL,
  `barang_id` bigint UNSIGNED NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_penjualan_detail`
--

INSERT INTO `t_penjualan_detail` (`detail_id`, `penjualan_id`, `barang_id`, `harga`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3500000, 1, NULL, NULL),
(2, 1, 2, 2800000, 1, NULL, NULL),
(3, 1, 3, 1750000, 1, NULL, NULL),
(4, 2, 4, 1200000, 2, NULL, NULL),
(5, 2, 5, 250000, 3, NULL, NULL),
(6, 2, 6, 3500000, 1, NULL, NULL),
(7, 3, 7, 7500000, 1, NULL, NULL),
(8, 3, 8, 600000, 2, NULL, NULL),
(9, 3, 9, 20000, 5, NULL, NULL),
(10, 4, 10, 15000, 10, NULL, NULL),
(11, 4, 11, 350000, 2, NULL, NULL),
(12, 4, 12, 5000, 3, NULL, NULL),
(13, 5, 13, 8000, 4, NULL, NULL),
(14, 5, 14, 250000, 1, NULL, NULL),
(15, 5, 15, 4000, 6, NULL, NULL),
(16, 6, 6, 3500000, 2, NULL, NULL),
(17, 6, 7, 7500000, 1, NULL, NULL),
(18, 6, 8, 600000, 3, NULL, NULL),
(19, 7, 9, 20000, 5, NULL, NULL),
(20, 7, 10, 15000, 10, NULL, NULL),
(21, 7, 11, 350000, 1, NULL, NULL),
(22, 8, 12, 5000, 5, NULL, NULL),
(23, 8, 13, 8000, 4, NULL, NULL),
(24, 8, 14, 250000, 2, NULL, NULL),
(25, 9, 15, 4000, 10, NULL, NULL),
(26, 9, 6, 3500000, 1, NULL, NULL),
(27, 9, 7, 7500000, 1, NULL, NULL),
(28, 10, 8, 600000, 2, NULL, NULL),
(29, 10, 9, 20000, 7, NULL, NULL),
(30, 10, 10, 15000, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_stok`
--

CREATE TABLE `t_stok` (
  `stok_id` bigint UNSIGNED NOT NULL,
  `barang_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `supplier_id` bigint UNSIGNED NOT NULL,
  `stok_tanggal` datetime NOT NULL,
  `stok_jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_stok`
--

INSERT INTO `t_stok` (`stok_id`, `barang_id`, `user_id`, `supplier_id`, `stok_tanggal`, `stok_jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2024-09-13 16:45:02', 10, NULL, NULL),
(2, 2, 1, 1, '2024-09-13 16:45:02', 5, NULL, NULL),
(3, 3, 1, 1, '2024-09-13 16:45:02', 7, NULL, NULL),
(4, 4, 1, 1, '2024-09-13 16:45:02', 8, NULL, NULL),
(5, 5, 1, 1, '2024-09-13 16:45:02', 20, NULL, NULL),
(6, 6, 2, 2, '2024-09-13 16:45:02', 4, NULL, NULL),
(7, 7, 2, 2, '2024-09-13 16:45:02', 3, NULL, NULL),
(8, 8, 2, 2, '2024-09-13 16:45:02', 12, NULL, NULL),
(9, 9, 2, 2, '2024-09-13 16:45:02', 30, NULL, NULL),
(10, 10, 2, 2, '2024-09-13 16:45:02', 50, NULL, NULL),
(11, 11, 3, 3, '2024-09-13 16:45:02', 15, NULL, NULL),
(12, 12, 3, 3, '2024-09-13 16:45:02', 100, NULL, NULL),
(13, 13, 3, 3, '2024-09-13 16:45:02', 75, NULL, NULL),
(14, 14, 3, 3, '2024-09-13 16:45:02', 9, NULL, NULL),
(15, 15, 3, 3, '2024-09-13 16:45:02', 200, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD UNIQUE KEY `m_barang_barang_kode_unique` (`barang_kode`),
  ADD KEY `m_barang_kategori_id_index` (`kategori_id`);

--
-- Indexes for table `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `m_level`
--
ALTER TABLE `m_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `m_supplier`
--
ALTER TABLE `m_supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `m_supplier_supplier_kode_unique` (`supplier_kode`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `m_user_username_unique` (`username`),
  ADD KEY `m_user_level_id_index` (`level_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  ADD PRIMARY KEY (`penjualan_id`),
  ADD UNIQUE KEY `t_penjualan_pembeli_unique` (`pembeli`),
  ADD KEY `t_penjualan_user_id_index` (`user_id`);

--
-- Indexes for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `t_penjualan_detail_penjualan_id_index` (`penjualan_id`),
  ADD KEY `t_penjualan_detail_barang_id_index` (`barang_id`);

--
-- Indexes for table `t_stok`
--
ALTER TABLE `t_stok`
  ADD PRIMARY KEY (`stok_id`),
  ADD KEY `t_stok_barang_id_index` (`barang_id`),
  ADD KEY `t_stok_user_id_index` (`user_id`),
  ADD KEY `t_stok_supplier_id_index` (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `m_barang`
--
ALTER TABLE `m_barang`
  MODIFY `barang_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `kategori_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_level`
--
ALTER TABLE `m_level`
  MODIFY `level_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_supplier`
--
ALTER TABLE `m_supplier`
  MODIFY `supplier_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `user_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  MODIFY `penjualan_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  MODIFY `detail_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `t_stok`
--
ALTER TABLE `t_stok`
  MODIFY `stok_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD CONSTRAINT `m_barang_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `m_kategori` (`kategori_id`);

--
-- Constraints for table `m_user`
--
ALTER TABLE `m_user`
  ADD CONSTRAINT `m_user_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `m_level` (`level_id`);

--
-- Constraints for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  ADD CONSTRAINT `t_penjualan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);

--
-- Constraints for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  ADD CONSTRAINT `t_penjualan_detail_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `m_barang` (`barang_id`),
  ADD CONSTRAINT `t_penjualan_detail_penjualan_id_foreign` FOREIGN KEY (`penjualan_id`) REFERENCES `t_penjualan` (`penjualan_id`);

--
-- Constraints for table `t_stok`
--
ALTER TABLE `t_stok`
  ADD CONSTRAINT `t_stok_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `m_barang` (`barang_id`),
  ADD CONSTRAINT `t_stok_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `m_supplier` (`supplier_id`),
  ADD CONSTRAINT `t_stok_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
