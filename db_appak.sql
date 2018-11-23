-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 03:22 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_appak`
--

-- --------------------------------------------------------

--
-- Table structure for table `akuns`
--

CREATE TABLE `akuns` (
  `akun_id` int(10) UNSIGNED NOT NULL,
  `subgol_id` int(10) UNSIGNED NOT NULL,
  `akun_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akun_js` enum('debit','kredit') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akun_ap` enum('ya','tidak') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akuns`
--

INSERT INTO `akuns` (`akun_id`, `subgol_id`, `akun_nama`, `akun_js`, `akun_ap`, `created_at`, `updated_at`) VALUES
(1, 3, 'tes', 'debit', 'ya', '2018-11-08 00:52:12', '2018-11-08 00:52:12'),
(2, 2, 'tesa', NULL, 'ya', '2018-11-08 00:53:17', '2018-11-08 00:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `barang_kode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_jenis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_hbeli` int(11) NOT NULL,
  `barang_hjual` int(11) NOT NULL,
  `barang_stok` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`barang_kode`, `barang_nama`, `barang_jenis`, `barang_hbeli`, `barang_hjual`, `barang_stok`, `created_at`, `updated_at`) VALUES
('BRG10181125230', 'Barang 1', 'PCS', 50000, 55000, NULL, '2018-11-10 01:59:06', '2018-11-10 01:59:06'),
('BRG16181115326', 'Barang 12', 'PCS', 50000, 55000, NULL, '2018-11-16 15:49:30', '2018-11-16 15:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nigeria', '2017-06-01 19:18:05', '2017-06-15 21:18:10'),
(2, 'America', '2017-06-04 21:41:25', '2017-05-12 05:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_tel` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_nama`, `customer_tel`, `customer_email`, `customer_alamat`, `created_at`, `updated_at`) VALUES
(1, 'Adityads1', '08888', 'adityads@ymail.com', 'aa', '2018-11-07 19:21:41', '2018-11-07 19:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `gols`
--

CREATE TABLE `gols` (
  `gol_id` int(10) UNSIGNED NOT NULL,
  `kelompok_id` int(10) UNSIGNED NOT NULL,
  `gol_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gols`
--

INSERT INTO `gols` (`gol_id`, `kelompok_id`, `gol_nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'es', '2018-11-07 20:43:29', '2018-11-07 20:43:29'),
(2, 1, 'Nama1', '2018-11-07 17:00:00', '2018-11-07 17:00:00'),
(3, 2, 'Bnama1', '2018-11-07 17:00:00', '2018-11-07 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kelompoks`
--

CREATE TABLE `kelompoks` (
  `kelompok_id` int(10) UNSIGNED NOT NULL,
  `kelompok_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelompoks`
--

INSERT INTO `kelompoks` (`kelompok_id`, `kelompok_nama`, `created_at`, `updated_at`) VALUES
(1, 'Aset', '2018-11-07 20:43:29', '2018-11-07 20:43:29'),
(2, 'Bunga', '2018-11-07 17:00:00', '2018-11-07 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2018_11_06_200737_create_products_table', 2),
(15, '2018_11_06_194331_table_customer', 5),
(16, '2018_11_08_011832_table_supplier', 5),
(17, '2018_11_08_024646_table_kelompok', 6),
(18, '2018_11_08_024624_table_gol', 7),
(19, '2018_11_08_024602_table_subgol', 8),
(20, '2018_11_08_024423_table_akun', 9),
(21, '2018_11_09_065423_tesmig', 10),
(22, '2018_11_10_040633_table_barang', 11),
(23, '2018_11_10_084058_pembelian_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('adityads@ymail.com', '$2y$10$hqu6jeznuKpmIFxjEJqbaujYDWUR8fs7Y1SyrpVjZEaunWxfOgVCO', '2018-11-07 14:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `pembelians`
--

CREATE TABLE `pembelians` (
  `pembelian_kode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `barang_kode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembelian_qty` int(11) NOT NULL,
  `pembelian_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelians`
--

INSERT INTO `pembelians` (`pembelian_kode`, `supplier_id`, `barang_kode`, `pembelian_qty`, `pembelian_total`, `created_at`, `updated_at`) VALUES
('RD1', 1, 'BRG10181125230', 1, 10000, '2018-11-22 17:00:00', '2018-11-23 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lagos', '2017-04-10 00:16:44', '2017-09-19 05:18:28'),
(2, 1, 'Delta', '2017-06-14 00:14:27', '2017-06-06 23:40:12'),
(3, 2, 'Texas', '2017-06-08 04:35:34', '2017-06-19 23:15:26'),
(4, 2, 'Carlifonia', '2017-06-07 01:14:35', '2017-06-06 23:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `subgols`
--

CREATE TABLE `subgols` (
  `subgol_id` int(10) UNSIGNED NOT NULL,
  `gol_id` int(10) UNSIGNED NOT NULL,
  `subgol_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subgol_js` enum('debit','kredit') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subgol_ap` enum('ya','tidak') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subgols`
--

INSERT INTO `subgols` (`subgol_id`, `gol_id`, `subgol_nama`, `subgol_js`, `subgol_ap`, `created_at`, `updated_at`) VALUES
(2, 1, 'res', 'kredit', 'tidak', '2018-11-08 00:21:07', '2018-11-08 00:21:07'),
(3, 3, 'ssa', NULL, NULL, '2018-11-08 00:22:17', '2018-11-08 00:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `supplier_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_toko` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_tel` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_nama`, `supplier_toko`, `supplier_tel`, `supplier_email`, `supplier_alamat`, `created_at`, `updated_at`) VALUES
(1, 'Harno', 'CV. Bina', '08828', 'cb@aa.com', 'jl,,1a', '2018-11-07 19:13:50', '2018-11-07 19:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$YgouNyyf5ZdEp/4H2VMUDetosB8oHgWTRMgdgB.CgDT4.wLq3i9UK', 1, 'ILhxi0kQJJeULip6ja4o9AGlomUwoNk76tjRd8ojRGMxLaOi4Pej1p8AUQT7', '2018-11-07 13:59:29', '2018-11-07 13:59:29'),
(2, 'pimpinan', 'pimpinan@pimpinan.com', '$2y$10$uwra6nFT61dNP1qsLJI4FOXUI8kA3lFjwLHGeq3rqf5uIVwsU6Jy6', 0, 'bMQv2GmnqrkuXPHCPFkDeXIKIklS2NiHRogGjAuYnZfhKF4yI5nIxQ6UDbL7', '2018-11-07 14:28:32', '2018-11-07 14:28:32'),
(3, 'tes', 'tes@aaa.com', '$2y$10$cIP.n3fUXdgDvHFWik4Yne4yTI1de4jNCteaDPXAV51g2tLD07ayO', 0, 'jUsOq18NL5X8A11TZ82PUcDxWazIzfjGA9GtZ1yM9TO91c3pQmVCWL1iVeVg', '2018-11-07 14:29:46', '2018-11-07 14:29:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akuns`
--
ALTER TABLE `akuns`
  ADD PRIMARY KEY (`akun_id`),
  ADD KEY `akuns_subgol_id_foreign` (`subgol_id`);

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`barang_kode`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `gols`
--
ALTER TABLE `gols`
  ADD PRIMARY KEY (`gol_id`),
  ADD KEY `gols_kelompok_id_foreign` (`kelompok_id`);

--
-- Indexes for table `kelompoks`
--
ALTER TABLE `kelompoks`
  ADD PRIMARY KEY (`kelompok_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`pembelian_kode`),
  ADD KEY `barang_kode` (`barang_kode`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_ibfk_1` (`country_id`);

--
-- Indexes for table `subgols`
--
ALTER TABLE `subgols`
  ADD PRIMARY KEY (`subgol_id`),
  ADD KEY `subgols_gol_id_foreign` (`gol_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akuns`
--
ALTER TABLE `akuns`
  MODIFY `akun_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gols`
--
ALTER TABLE `gols`
  MODIFY `gol_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelompoks`
--
ALTER TABLE `kelompoks`
  MODIFY `kelompok_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subgols`
--
ALTER TABLE `subgols`
  MODIFY `subgol_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akuns`
--
ALTER TABLE `akuns`
  ADD CONSTRAINT `akuns_subgol_id_foreign` FOREIGN KEY (`subgol_id`) REFERENCES `subgols` (`subgol_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gols`
--
ALTER TABLE `gols`
  ADD CONSTRAINT `gols_kelompok_id_foreign` FOREIGN KEY (`kelompok_id`) REFERENCES `kelompoks` (`kelompok_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelians`
--
ALTER TABLE `pembelians`
  ADD CONSTRAINT `pembelians_ibfk_1` FOREIGN KEY (`barang_kode`) REFERENCES `barangs` (`barang_kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelians_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subgols`
--
ALTER TABLE `subgols`
  ADD CONSTRAINT `subgols_gol_id_foreign` FOREIGN KEY (`gol_id`) REFERENCES `gols` (`gol_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
