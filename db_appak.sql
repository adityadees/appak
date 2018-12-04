-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 11:03 PM
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
(2, 2, 'Kas', 'debit', 'ya', '2018-11-08 00:53:17', '2018-12-02 03:40:36'),
(3, 6, 'Piutang Usaha', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(4, 6, 'Piutang Lain Lain', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(5, 8, 'Persediaan Bahan Baku', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(6, 8, 'Persediaan Barang dalam Proses', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(7, 8, 'Persediaan Barang Jadi', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(8, 10, 'Pajak PPN Masukan', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(9, 10, 'Pajak Dibayar Dimuka PPh 21', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(10, 10, 'Pajak Dibayar Dimuka PPh 22', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(11, 10, 'Pajak Dibayar Dimuka PPh 23', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(12, 10, 'Pajak Dibayar Dimuka PPh 24', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(13, 10, 'Pajak Dibayar Dimuka PPh 25', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(14, 10, 'Pajak Lebih Bayar', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(15, 11, 'Biaya Dibayar Dimuka', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(16, 11, 'Uang Muka/Pinjaman Kepada Karyawan', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(17, 11, 'Uang Muka Pembelian', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(18, 12, 'Cadangan Piutang Tak Tertagih', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(19, 13, 'Tanah', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(20, 13, 'Bangunan', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(21, 13, 'Kendaraan', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(22, 13, 'Mesin', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(23, 13, 'Peralatan Kantor', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(24, 13, 'Peralatan Pabrik', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(25, 13, 'Akumulasi Penyusutan Bangunan', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(26, 13, 'Akumulasi Penyusutan Kendaraan', 'debit', 'tidak', '2018-12-01 23:31:30', '2018-12-01 23:31:30'),
(28, 13, 'Akumulasi Penyusutan Mesin', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(29, 13, 'Akumulasi Penyusutan Peralatan Kantor', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(30, 13, 'Akumulasi Penyusutan Peralatan Pabrik', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(31, 15, 'Biaya Pra Operasi', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(32, 15, 'Akumulasi Amortisasi Biaya Pra Operasi', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(33, 16, 'Utang Usaha', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(34, 17, 'Utang PPN Keluaran', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(35, 17, 'Utang PPh 21', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(36, 17, 'Utang PPh 22', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(37, 17, 'Utang PPh 23', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(38, 17, 'Utang PPh 24', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(39, 17, 'Utang PPh 25', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(40, 17, 'Utang PPh 4 (2)', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(41, 17, 'Pajak Kurang Bayar', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(42, 18, 'Utang Gaji/Upah', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(43, 18, 'Utang BPJS Ketenagakerjaan', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(44, 18, 'Utang BPJS Kesehatan', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(45, 18, 'Utang Listrik, Gas, Air, Telepon, Internet', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(46, 18, 'Biaya Masih Harus Dibayar', 'debit', 'tidak', '2018-12-01 22:11:20', '2018-12-01 22:11:20'),
(47, 19, 'Utang Direksi/Pemegang Saham', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(48, 19, 'Utang Dividen', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(49, 19, 'Utang Bank Jangka-Pendek', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(50, 19, 'Pendapatan Diterima Dimuka', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(51, 19, 'Utang Lainnya', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(52, 20, 'Utang Bank Jangka-Panjang', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(53, 20, 'Utang Jangka Panjang Lainnya', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(54, 21, 'Modal Disetor', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(55, 22, 'Saldo Laba Ditahan', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(56, 22, 'Saldo Laba Tahun Berjalan', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(57, 23, 'Dividen / Prive', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(58, 24, 'Penjualan', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(59, 24, 'Potongan Penjualan', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(60, 24, 'Retur Penjualan', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(61, 25, 'Harga Pokok Penjualan', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(62, 26, 'Pembelian', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(63, 26, 'Diskon Pembelian', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(64, 26, 'Retur Pembelian', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(65, 26, 'Biaya Angkut Pembelian', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(66, 27, 'Upah Pekerja', 'debit', 'tidak', '2018-12-02 02:21:26', '2018-12-02 02:21:26'),
(67, 27, 'Biaya Pajak PPh 21 Pekerja', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(68, 27, 'Biaya BPJS Ketenagakerjaan Pekerja', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(69, 27, 'Biaya BPJS Kesehatan Pekerja', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(70, 27, 'Biaya THR Pekerja', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(71, 27, 'Biaya Insentif dan Bonus Pekerja', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(72, 27, 'Biaya Tunjangan Pekerja Lainnya', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(73, 28, 'Biaya Pekerja Tidak Langsung', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(74, 28, 'Bahan Pembantu', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(75, 28, 'Biaya Listrik, Gas, Air, Telepon & Internet Pabrik', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(76, 28, 'Biaya Perlengkapan Pabrik', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(77, 28, 'Biaya Servis dan Perawatan Pabrik', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(78, 28, 'Biaya BBM/Pelumas Mesin', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(79, 28, 'Biaya Asuransi Pabrik', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(80, 28, 'Biaya Sewa Pabrik', 'kredit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(81, 28, 'Biaya Pabrik Lainnya', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(82, 28, 'Biaya Penyusutan Bangunan Pabrik', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(83, 28, 'Biaya Penyusutan Mesin Pabrik', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(84, 28, 'Biaya Penyusutan Peralatan Pabrik', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(85, 29, 'Biaya Gaji', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(86, 29, 'Biaya PPh 21', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(87, 29, 'Biaya BPJS Ketenagakerjaan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(88, 29, 'Biaya BPJS Kesehatan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(89, 29, 'Biaya THR', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(90, 29, 'Biaya Insentif dan Bonus', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(91, 29, 'Biaya Tunjangan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(92, 29, 'Biaya Makan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(93, 29, 'Biaya Medis', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(94, 29, 'Biaya Perjalanan Dinas', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(95, 29, 'Biaya Transportasi, BBM, Toll & Parkir', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(96, 29, 'Biaya Listrik', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(97, 29, 'Biaya Gas', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(98, 29, 'Biaya Air', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(99, 29, 'Biaya Telepon, Fax & Internet', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(100, 29, 'Biaya Keamanan dan Kebersihan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(101, 29, 'Biaya Meterai', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(102, 29, 'Biaya ATK & Fotocopy', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(103, 29, 'Biaya Perlengkapan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(104, 29, 'Biaya Pengiriman', 'debit', NULL, '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(105, 29, 'Biaya Pos, Paket, Kurir', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(106, 29, 'Biaya Servis dan Pemeliharaan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(107, 29, 'Biaya Sewa Kendaraan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(108, 29, 'Biaya Entertainment dan Representasi', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(109, 29, 'Biaya Rekrutmen dan Pelatihan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(110, 29, 'Biaya Promosi & Iklan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(111, 29, 'Biaya Asuransi Kendaraan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(112, 29, 'Biaya Sewa Kantor', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(113, 29, 'Biaya Lisensi/Izin', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(114, 29, 'Biaya Legal', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(115, 29, 'Biaya Donasi', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(116, 29, 'Biaya Piutang Tak Tertagih', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(117, 29, 'Biaya Operasional Lainnya', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(118, 29, 'Biaya Penyusutan Bangunan Kantor', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(119, 29, 'Biaya Penyusutan Kendaraan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(120, 29, 'Biaya Penyusutan Peralatan Kantor', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(121, 29, 'Biaya Amortisasi dari Biaya Pra Operasi', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(122, 30, 'Pendapatan Jasa Giro/Bunga', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(123, 30, 'Laba Atas Selisih Kurs', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(124, 30, 'Laba Atas Pelepasan Aset', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(125, 30, 'Pendapatan Diluar Usaha Lainnya', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(126, 31, 'Biaya Provisi/Adm Bank', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(127, 31, 'Biaya Bunga Bank', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(128, 31, 'Rugi Atas Selisih Kurs', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(129, 31, 'Biaya Denda Pajak', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(130, 31, 'Biaya Pajak Penghasilan Perusahaan', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(131, 31, 'Rugi Atas Pelepasan Aset', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00'),
(132, 31, 'Biaya Diluar Usaha Lainnya', 'debit', 'tidak', '2018-12-01 17:00:00', '2018-12-01 17:00:00');

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
('BRG10181125230', 'Barang 1', 'PCS', 50000, 55000, 10, '2018-11-10 01:59:06', '2018-11-10 01:59:06'),
('BRG16181115326', 'Barang 12', 'PCS', 50000, 55000, 10, '2018-11-16 15:49:30', '2018-11-16 15:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(10) UNSIGNED NOT NULL,
  `barang_kode` varchar(20) NOT NULL,
  `cart_qty` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `barang_kode`, `cart_qty`, `created_at`, `updated_at`) VALUES
(33, 'BRG10181125230', 20, '2018-12-02 14:51:01', '2018-12-02 14:51:01');

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
(1, 1, 'Aset Lancar', '2018-11-07 20:43:29', '2018-12-02 03:36:23'),
(5, 1, 'Aset Tidak Lancar', '2018-12-02 03:44:00', '2018-12-02 03:44:00'),
(6, 4, 'Kewajiban Lancar', '2018-12-02 03:44:30', '2018-12-02 03:44:30'),
(7, 4, 'Kewajiban Tidak Lancar', '2018-12-02 03:44:45', '2018-12-02 03:44:45'),
(8, 5, 'Ekuitas', '2018-12-02 03:45:13', '2018-12-02 03:45:13'),
(9, 6, 'Pendapatan Usaha', '2018-12-02 03:45:31', '2018-12-02 03:45:31'),
(10, 7, 'Harga Pokok Penjualan', '2018-12-02 03:45:42', '2018-12-02 03:45:42'),
(11, 7, 'Harga Pokok Barang Produksi', '2018-12-02 03:46:03', '2018-12-02 03:46:03'),
(12, 8, 'Biaya Usaha', '2018-12-02 03:46:25', '2018-12-02 03:46:25'),
(13, 9, 'Pendapatan di Luar Usaha', '2018-12-02 03:46:43', '2018-12-02 03:46:43'),
(14, 10, 'Biaya di Luar Usaha', '2018-12-02 03:46:56', '2018-12-02 03:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `jurnals`
--

CREATE TABLE `jurnals` (
  `jurnals_kode` varchar(20) NOT NULL,
  `jurnals_ket` text NOT NULL,
  `jurnals_ref` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnals`
--

INSERT INTO `jurnals` (`jurnals_kode`, `jurnals_ket`, `jurnals_ref`, `created_at`, `updated_at`) VALUES
('40195JRN021218', 'Piutang rudi', NULL, '2018-12-02 14:18:25', '2018-12-02 14:18:25'),
('91290PBN021218', 'Pembayaran Invoice PBL1812021248 Pada Harno', 'PBL1812021248', '2018-12-02 21:49:36', '2018-12-02 21:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `jurnals_temp`
--

CREATE TABLE `jurnals_temp` (
  `jt_id` int(11) NOT NULL,
  `akun_kode` int(11) NOT NULL,
  `jt_jenis` enum('debit','kredit') NOT NULL,
  `jt_total` int(10) UNSIGNED NOT NULL,
  `jt_ket` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_details`
--

CREATE TABLE `jurnal_details` (
  `jd_id` int(10) UNSIGNED NOT NULL,
  `jurnals_kode` varchar(20) NOT NULL,
  `akun_kode` int(11) NOT NULL,
  `jd_jenis` enum('debit','kredit') NOT NULL,
  `jd_total` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `jd_ket` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_details`
--

INSERT INTO `jurnal_details` (`jd_id`, `jurnals_kode`, `akun_kode`, `jd_jenis`, `jd_total`, `jd_ket`, `created_at`, `updated_at`) VALUES
(14, '40195JRN021218', 3, 'debit', 150000, 'Piutang Rudi', '2018-12-02 21:18:25', '2018-12-02 21:18:25'),
(15, '40195JRN021218', 58, 'kredit', 150000, 'Penjualan Ke RUdi', '2018-12-02 21:18:25', '2018-12-02 21:18:25'),
(16, '91290PBN021218', 33, 'debit', 500000, 'Pembayaran Invoice PBL1812021248 Pada Harno', '2018-12-02 21:49:36', '2018-12-02 21:49:36'),
(17, '91290PBN021218', 2, 'kredit', 500000, 'Pembayaran Invoice PBL1812021248 Pada Harno', '2018-12-02 21:49:36', '2018-12-02 21:49:36');

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
(4, 'Kewajiban', '2018-12-02 03:35:36', '2018-12-02 03:35:36'),
(5, 'Ekuitas', '2018-12-02 03:35:45', '2018-12-02 03:35:45'),
(6, 'Pendapatan', '2018-12-02 03:36:49', '2018-12-02 03:36:49'),
(7, 'Harga Pokok Penjualan', '2018-12-02 03:37:02', '2018-12-02 03:37:02'),
(8, 'Biaya', '2018-12-02 03:37:13', '2018-12-02 03:37:13'),
(9, 'Pendapatan Lainnya', '2018-12-02 03:37:21', '2018-12-02 03:37:21'),
(10, 'Biaya Lainnya', '2018-12-02 03:37:33', '2018-12-02 03:37:33');

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
  `pembelian_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelians`
--

INSERT INTO `pembelians` (`pembelian_kode`, `supplier_id`, `pembelian_total`, `created_at`, `updated_at`) VALUES
('PBL1812021248', 1, 500000, '2018-12-02 14:49:36', '2018-12-02 14:49:36'),
('PBL181202251', 1, 1000000, '2018-12-02 14:51:03', '2018-12-02 14:51:03'),
('PBL1812026273', 1, 500000, '2018-12-02 14:45:49', '2018-12-02 14:45:49'),
('PBL1812028793', 1, 500000, '2018-12-02 14:47:42', '2018-12-02 14:47:42'),
('PBL1812028876', 1, 500000, '2018-12-02 14:45:08', '2018-12-02 14:45:08'),
('PBL18120297610', 1, 500000, '2018-12-02 14:47:33', '2018-12-02 14:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_details`
--

CREATE TABLE `pembelian_details` (
  `pd_id` int(10) UNSIGNED NOT NULL,
  `pembelian_kode` varchar(20) NOT NULL,
  `barang_kode` varchar(20) NOT NULL,
  `pd_qty` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_details`
--

INSERT INTO `pembelian_details` (`pd_id`, `pembelian_kode`, `barang_kode`, `pd_qty`) VALUES
(15, 'PBL1812021248', 'BRG10181125230', 10);

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `penjualan_kode` varchar(20) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `penjualan_total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_details`
--

CREATE TABLE `penjualan_details` (
  `pj_id` int(11) NOT NULL,
  `penjualan_kode` varchar(20) NOT NULL,
  `barang_kode` varchar(20) NOT NULL,
  `pd_qty` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 1, 'Kas', NULL, NULL, '2018-11-08 00:21:07', '2018-12-02 03:40:04'),
(5, 1, 'Bank', NULL, NULL, '2018-12-01 17:00:00', '2018-12-02 10:57:13'),
(6, 1, 'Piutang', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(7, 1, 'Investasi Jangka Pendek', NULL, NULL, '2018-12-02 10:57:13', '2018-12-02 10:57:13'),
(8, 1, 'Persediaan', NULL, NULL, '2018-12-02 10:57:13', '2018-12-02 10:57:13'),
(9, 1, 'Perlengkapan', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(10, 1, 'Pajak Bayar Dimuka', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(11, 1, 'Biaya Dibayar Dimuka', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(12, 1, 'Aset Lancar Lainnya', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(13, 5, 'Aset Tetap', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(14, 5, 'Investasi Jangka Panjang', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(15, 5, 'Aset Tidak Berwujud', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(16, 6, 'Utang', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(17, 6, 'Utang Pajak', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(18, 6, 'Biaya Terutang (Masih Harus Dibayar)', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(19, 6, 'Utang Lainnya', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(20, 7, 'Kewajiban Jangka Panjang', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(21, 8, 'Modal', NULL, NULL, '2018-12-02 10:57:13', '2018-12-02 10:57:13'),
(22, 8, 'Saldo Laba', NULL, NULL, '2018-12-02 10:57:13', '2018-12-02 10:57:13'),
(23, 8, 'Dividen', NULL, NULL, '2018-12-02 10:57:13', '2018-12-02 10:57:13'),
(24, 9, 'Pendapatan', NULL, NULL, '2018-12-02 10:57:13', '2018-12-02 10:57:13'),
(25, 10, 'Harga Pokok Penjualan', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(26, 10, 'Pembelian', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(27, 10, 'Biaya Pekerja Langsung', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(28, 10, 'Overhead Pabrik', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(29, 12, 'Biaya Umum dan Administratif', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(30, 13, 'Pendapatan lainnya', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20'),
(31, 14, 'Biaya Lainnya', NULL, NULL, '2018-12-01 23:20:20', '2018-12-01 23:20:20');

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
(1, 'admin', 'admin@admin.com', '$2y$10$YgouNyyf5ZdEp/4H2VMUDetosB8oHgWTRMgdgB.CgDT4.wLq3i9UK', 1, '6c2Qby1BQtqqp2J7XaDqfMYYu4MIhwfWbegvSRmhS1Jdu2rW2jE1qv8fsCve', '2018-11-07 13:59:29', '2018-11-07 13:59:29'),
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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

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
-- Indexes for table `jurnals`
--
ALTER TABLE `jurnals`
  ADD PRIMARY KEY (`jurnals_kode`);

--
-- Indexes for table `jurnals_temp`
--
ALTER TABLE `jurnals_temp`
  ADD PRIMARY KEY (`jt_id`);

--
-- Indexes for table `jurnal_details`
--
ALTER TABLE `jurnal_details`
  ADD PRIMARY KEY (`jd_id`);

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
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `pembelian_details`
--
ALTER TABLE `pembelian_details`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`penjualan_kode`);

--
-- Indexes for table `penjualan_details`
--
ALTER TABLE `penjualan_details`
  ADD PRIMARY KEY (`pj_id`);

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
  MODIFY `akun_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gols`
--
ALTER TABLE `gols`
  MODIFY `gol_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jurnals_temp`
--
ALTER TABLE `jurnals_temp`
  MODIFY `jt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jurnal_details`
--
ALTER TABLE `jurnal_details`
  MODIFY `jd_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kelompoks`
--
ALTER TABLE `kelompoks`
  MODIFY `kelompok_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pembelian_details`
--
ALTER TABLE `pembelian_details`
  MODIFY `pd_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penjualan_details`
--
ALTER TABLE `penjualan_details`
  MODIFY `pj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subgols`
--
ALTER TABLE `subgols`
  MODIFY `subgol_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  ADD CONSTRAINT `pembelians_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subgols`
--
ALTER TABLE `subgols`
  ADD CONSTRAINT `subgols_gol_id_foreign` FOREIGN KEY (`gol_id`) REFERENCES `gols` (`gol_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
