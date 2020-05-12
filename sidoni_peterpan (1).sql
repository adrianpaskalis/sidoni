-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 08:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidoni_peterpan`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id_aktivitas` int(5) NOT NULL,
  `id_trans` int(10) NOT NULL,
  `nama_aktivitas` varchar(30) NOT NULL,
  `rencana_tanggal` date NOT NULL,
  `realisasi_tanggal` date NOT NULL,
  `jenis_aktivitas` varchar(20) NOT NULL,
  `rencan_donasi` double NOT NULL,
  `realisasi_donasi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`id_aktivitas`, `id_trans`, `nama_aktivitas`, `rencana_tanggal`, `realisasi_tanggal`, `jenis_aktivitas`, `rencan_donasi`, `realisasi_donasi`) VALUES
(1, 1, 'Sosialisasi Covid 19', '1211-02-22', '1211-02-22', 'sosialisasi', 50000000, 70000000);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(4) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `no_rekening_bank` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `no_rekening_bank`) VALUES
(2, 'Bank BNI', 6767676);

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id_donatur` int(7) NOT NULL,
  `nama_donatur` varchar(30) NOT NULL,
  `tgl_lahir_donatur` date NOT NULL,
  `jenis_kelamin_donatur` varchar(6) NOT NULL,
  `alamat_donatur` text NOT NULL,
  `WA_donatur` int(13) NOT NULL,
  `Email_donatur` varchar(30) NOT NULL,
  `no_rekening_donatur` int(16) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `nama_donatur`, `tgl_lahir_donatur`, `jenis_kelamin_donatur`, `alamat_donatur`, `WA_donatur`, `Email_donatur`, `no_rekening_donatur`, `created_at`, `updated_at`) VALUES
(3, 'adrian', '2020-04-01', 'pria', 'asfasgfa', 125512, 'adrian.paskalis@si.ukdw.ac.id', 12421412, NULL, NULL),
(5, 'adrian', '1240-04-13', 'pria', 'jalan jalan', 91205, 'adrian.paskalis@si.ukdw.ac.id', 121271427, NULL, NULL),
(6, 'paskalis', '1998-11-13', 'pria', 'qweqewq', 990123, 'asd@saf', 1245512, NULL, NULL),
(8, 'bambang', '1222-11-13', 'pria', '12asfasfa', 124125125, 'sadasfafs@sfa', 1251251251, NULL, NULL),
(9, 'fasfasfa', '1124-05-14', 'pria', 'safafaasf', 2141251, 'gitaandriani55@yahoo.com', 1241512512, NULL, NULL),
(10, 'bre', '1111-01-01', 'pria', 'asdfag', 52473472, 'dian@dasa', 12414151, NULL, NULL),
(11, 'afawqq', '1124-12-11', 'pria', 'fasfafwaf', 21512515, 'adrian.paskalis@si.ukdw.ac.id', 41241415, NULL, NULL),
(12, 'araw', '1111-11-22', 'pria', 'zfasfafa', 24151251, 'qeqeq@ara', 411241241, NULL, NULL),
(13, 'sfsafgasga', '1998-12-11', 'pria', 'asgfasgasgasgasga', 1241514235, 'adrian.paskalis@si.ukdw.ac.id', 555124, NULL, NULL),
(14, 'adrian 2414', '1667-12-11', 'pria', 'asfasgasgasga', 6564574, 'gitaandriani55@gmail.com', 412411421, NULL, NULL),
(15, 'Lionel Messi', '1999-11-13', 'pria', '1pjafja', 124231, 'gitaandriani55@gmail.com', 124141421, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_donasi`
--

CREATE TABLE `kategori_donasi` (
  `id_kategori_donasi` int(4) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_donasi`
--

INSERT INTO `kategori_donasi` (`id_kategori_donasi`, `nama_kategori`) VALUES
(1, 'Uang Rupiah'),
(3, 'Uang Dollar'),
(4, 'Mobil'),
(5, 'Motor');

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
(3, '2020_04_17_134848_create_donaturs_table', 1),
(8, '2014_10_12_000000_create_users_table', 2),
(9, '2019_08_19_000000_create_failed_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(4) NOT NULL,
  `id_aktivitas` int(5) NOT NULL,
  `nama_peserta` varchar(30) NOT NULL,
  `nama_aktivitas` text NOT NULL,
  `tanggal_aktivitas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_donasi`
--

CREATE TABLE `transaksi_donasi` (
  `id_transaksi` int(10) NOT NULL,
  `id_donatur` int(7) DEFAULT NULL,
  `id_kategori_donasi` int(4) DEFAULT NULL,
  `id_bank` int(4) DEFAULT NULL,
  `tanggal_transaksi` date NOT NULL,
  `nominal_donasi` bigint(20) NOT NULL,
  `keterangan_donasi` text NOT NULL,
  `nama_donatur` varchar(30) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `nama_bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_donasi`
--

INSERT INTO `transaksi_donasi` (`id_transaksi`, `id_donatur`, `id_kategori_donasi`, `id_bank`, `tanggal_transaksi`, `nominal_donasi`, `keterangan_donasi`, `nama_donatur`, `nama_kategori`, `nama_bank`) VALUES
(1, NULL, NULL, NULL, '2020-05-09', 50000, 'bantuan amal', 'adrian', 'Uang Rupiah', 'Bank BNI'),
(2, NULL, NULL, NULL, '2020-05-05', 9800000, 'Uang amal', 'adrian', 'Uang Dollar', 'Bank BNI');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'adrian.paskalis@gmail.com', NULL, '$2y$10$rKZOGYaUXufObkkpcpnw8u.HXHsf9xrLX6n0E3vuIDpZutlLbhcsS', NULL, '2020-05-03 03:46:48', '2020-05-03 03:46:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_donasi`
--
ALTER TABLE `kategori_donasi`
  ADD PRIMARY KEY (`id_kategori_donasi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `id_aktivitas_fk` (`id_aktivitas`);

--
-- Indexes for table `transaksi_donasi`
--
ALTER TABLE `transaksi_donasi`
  ADD PRIMARY KEY (`id_transaksi`);

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
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id_aktivitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id_donatur` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_donasi`
--
ALTER TABLE `kategori_donasi`
  MODIFY `id_kategori_donasi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_donasi`
--
ALTER TABLE `transaksi_donasi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `id_aktivitas_fk` FOREIGN KEY (`id_aktivitas`) REFERENCES `aktivitas` (`id_aktivitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
