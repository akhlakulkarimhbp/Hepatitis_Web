-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2021 pada 19.52
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hepatitis_mapping`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakriteria`
--

CREATE TABLE `datakriteria` (
  `id_kriteria` bigint(20) UNSIGNED NOT NULL,
  `id_kecamatan` int(10) UNSIGNED NOT NULL,
  `tahun` int(11) NOT NULL,
  `rumah_sehat` double NOT NULL,
  `air_bersih` double NOT NULL,
  `penduduk` double NOT NULL,
  `kasus` double NOT NULL,
  `sanitasi` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datakriteria`
--

INSERT INTO `datakriteria` (`id_kriteria`, `id_kecamatan`, `tahun`, `rumah_sehat`, `air_bersih`, `penduduk`, `kasus`, `sanitasi`, `created_at`, `updated_at`) VALUES
(1, 1, 2017, 74, 71, 39311, 10, 71, '2021-07-12 06:59:42', '2021-07-12 06:59:42'),
(2, 2, 2017, 74, 71, 39311, 14, 71, '2021-07-12 07:01:46', '2021-07-12 07:01:46'),
(3, 3, 2017, 75, 77, 34536, 6, 69, '2021-07-12 07:02:59', '2021-07-12 07:02:59'),
(4, 4, 2017, 72, 59, 42004, 0, 72, '2021-07-12 07:03:47', '2021-07-12 07:03:47'),
(5, 5, 2017, 74, 83, 45512, 7, 72, '2021-07-12 07:05:12', '2021-07-12 07:05:12'),
(6, 6, 2017, 75, 12, 46445, 12, 78, '2021-07-12 07:06:56', '2021-07-12 07:06:56'),
(7, 7, 2017, 77, 71, 80607, 3, 77, '2021-07-12 07:07:57', '2021-07-12 07:07:57'),
(8, 8, 2017, 72, 63, 29989, 2, 69, '2021-07-12 07:09:03', '2021-07-12 07:09:03'),
(9, 9, 2017, 75, 60, 34433, 5, 65, '2021-07-12 07:10:52', '2021-07-12 07:10:52'),
(10, 10, 2017, 76, 82, 30917, 34, 75, '2021-07-12 07:11:44', '2021-07-12 07:11:44'),
(11, 11, 2017, 73, 72, 49600, 9, 73, '2021-07-12 07:12:40', '2021-07-12 07:12:40'),
(12, 12, 2017, 79, 78, 77959, 18, 73, '2021-07-12 07:13:18', '2021-07-12 07:13:18'),
(16, 1, 2018, 76, 71, 39347, 23, 82, '2021-07-13 04:27:02', '2021-07-13 04:27:02'),
(17, 2, 2018, 74, 88, 43200, 10, 76, '2021-07-13 04:52:52', '2021-07-13 04:52:52'),
(18, 3, 2018, 76, 80, 34421, 3, 72, '2021-07-13 04:54:14', '2021-07-13 04:54:14'),
(19, 4, 2018, 75, 73, 41849, 0, 73, '2021-07-13 05:14:15', '2021-07-13 05:14:15'),
(20, 5, 2018, 77, 88, 45362, 9, 76, '2021-07-13 05:19:19', '2021-07-13 05:19:19'),
(21, 6, 2018, 77, 86, 46626, 41, 87, '2021-07-13 05:20:19', '2021-07-13 05:20:19'),
(22, 7, 2018, 77, 66, 81605, 3, 71, '2021-07-13 05:20:55', '2021-07-13 05:20:55'),
(23, 8, 2018, 74, 64, 29985, 3, 70, '2021-07-13 05:21:49', '2021-07-13 05:21:49'),
(24, 9, 2018, 76, 69, 33315, 8, 84, '2021-07-13 05:22:30', '2021-07-13 05:22:30'),
(25, 10, 2018, 77, 75, 31004, 78, 69, '2021-07-13 05:23:49', '2021-07-13 05:23:49'),
(26, 11, 2018, 76, 75, 49747, 7, 79, '2021-07-13 05:24:40', '2021-07-13 05:24:40'),
(27, 12, 2018, 79, 78, 77933, 53, 73, '2021-07-13 05:25:16', '2021-07-13 05:25:16'),
(28, 1, 2019, 78, 100, 42110, 34, 68, '2021-07-13 05:27:51', '2021-07-13 05:27:51'),
(29, 2, 2019, 76, 67, 45109, 17, 98, '2021-07-13 05:30:01', '2021-07-13 05:30:01'),
(30, 3, 2019, 78, 36, 38309, 10, 100, '2021-07-13 05:30:37', '2021-07-13 05:30:37'),
(31, 4, 2019, 78, 92, 47126, 2, 100, '2021-07-13 05:31:30', '2021-07-13 05:31:30'),
(32, 5, 2019, 77, 100, 51856, 16, 100, '2021-07-13 05:32:04', '2021-07-13 05:32:04'),
(33, 6, 2019, 78, 88, 48927, 255, 93, '2021-07-13 05:33:14', '2021-07-13 05:33:14'),
(34, 7, 2019, 78, 100, 77954, 7, 81, '2021-07-13 05:33:53', '2021-07-13 05:33:53'),
(35, 8, 2019, 78, 100, 37232, 5, 100, '2021-07-13 05:34:35', '2021-07-13 05:34:35'),
(36, 9, 2019, 78, 100, 3327, 12, 100, '2021-07-13 05:35:35', '2021-07-13 05:35:35'),
(37, 10, 2019, 78, 100, 34841, 699, 94, '2021-07-13 05:36:12', '2021-07-13 05:36:12'),
(38, 11, 2019, 78, 100, 53225, 12, 99, '2021-07-13 05:37:11', '2021-07-13 05:37:11'),
(39, 12, 2019, 80, 100, 86683, 102, 94, '2021-07-13 05:37:41', '2021-07-13 05:37:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `infohepas`
--

CREATE TABLE `infohepas` (
  `id_info` bigint(20) UNSIGNED NOT NULL,
  `nama_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_info` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `infohepas`
--

INSERT INTO `infohepas` (`id_info`, `nama_info`, `isi_info`, `created_at`, `updated_at`) VALUES
(1, 'Pengenalan Hepatitis A', 'Hepatitis A adalah hepatitis yang disebabkan oleh infeksi Hepatitis A Virus. A dapat menyebabkan berbagai macam komplikasi, diantaranya adalah hepatitis fulminant, autoimun hepatitis, kolestatik hepatitis, hepatitis relaps, dan sindroma pasca hepatitis (sindroma kelelahan kronik).', '2021-07-13 10:47:47', '2021-07-13 10:47:47'),
(2, 'Gejala Hepatitis A', 'Berikut adalah beberapa gejala umum yang muncul pada penderita hepatitis:\r\n1. Mual\r\n2. Muntah\r\n3. Demam\r\n4. Kelelahan\r\n5. Feses berwarna pucat\r\n6. Urine berwarna gelap\r\n7. Nyeri perut\r\n8. Nyeri sendi\r\n9. Kehilangan nafsu makan\r\n10. Penurunan berat badan\r\n11. Mata dan kulit berubah menjadi kekuningan atau penyakit kuning', '2021-07-13 10:48:11', '2021-07-13 10:48:11'),
(3, 'Pencegahan Hepatitis A', 'Anda dapat menurunkan risiko terjadinya hepatitis dengan melakukan beberapa langkah berikut:\r\n1. Cuci tangan secara teratur dengan air dan sabun, terutama setelah beraktivitas di luar ruangan dan sebelum makan.\r\n2. Lakukan hubungan seks yang aman, misalnya dengan menggunakan kondom dan tidak bergonta-ganti pasangan.\r\n3. Hindari berbagi penggunaan barang-barang pribadi, seperti sikat gigi atau handuk, termasuk juga peralatan makan.\r\n4. Jaga daya tahan tubuh dengan mengonsumsi makanan bergizi, berolahraga secara teratur, dan beristirahat yang cukup.\r\n5. Jangan mengonsumsi alkohol dan NAPZA.\r\n6. Hindari mengonsumsi makanan yang belum dimasak hingga matang dan air minum yang tidak terjamin kebersihannya atau belum direbus hingga mendidih.\r\n7. Lakukan vaksinasi hepatitis sesuai jadwal yang diberikan oleh dokter.', '2021-07-13 10:48:39', '2021-07-13 10:48:39'),
(4, 'Pengobatan Hepatitis A', 'Secara umum, pengobatan yang dilakukan meliputi:\r\n1. Pemberian obat interferon\r\n2. Pemberian obat imunosupresan\r\n3. Pemberian obat antivirus\r\n4. Transplantasi hati\r\nBila hepatitis sudah menyebabkan kerusakan hati yang berat, dokter mungkin akan menyarankan transplantasi hati atau penggantian hati. Melalui prosedur ini, hati penderita hepatitis yang rusak akan diganti dengan hati yang sehat dari pendonor.\r\n5. Pemantauan kondisi fisik pasien selama masa penyembuhan hepatitis sangat diperlukan agar proses pemulihan bisa berjalan dengan baik. Aktivitas fisik yang melelahkan harus dihindari selama masa penyembuhan hingga gejala mereda\r\nSelain itu, penderita hepatitis tidak boleh mengonsumsi alkohol, terutama jika hepatitisnya disebabkan oleh konsumsi alkohol berlebih. Jika penyebabnya adalah penggunaan obat-obatan tertentu, dokter akan melakukan penghentian atau penggantian obat agar peradangan hati tidak semakin parah.', '2021-07-13 10:49:47', '2021-07-13 10:49:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'Arjosari', NULL, NULL),
(2, 'Bandar', NULL, NULL),
(3, 'Donorojo', NULL, NULL),
(4, 'Kebonagung', NULL, NULL),
(5, 'Nawangan', NULL, NULL),
(6, 'Ngadirojo', NULL, NULL),
(7, 'Pacitan', NULL, NULL),
(8, 'Pringkuku', NULL, NULL),
(9, 'Punung', NULL, NULL),
(10, 'Sudimoro', NULL, NULL),
(11, 'Tegalombo', NULL, NULL),
(12, 'Tulakan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_21_123306_create_infohepas_table', 1),
(5, '2021_04_20_114234_create_kecamatan_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Akhlakul Karim', 'akul@gmail.com', NULL, '$2y$10$JqI7OtYU7k2ZUWhsPtsQB.Jc7NCrSdg3FkPpk7XGdaqgmCyJQo3L6', NULL, '2021-07-12 06:48:23', '2021-07-12 06:48:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datakriteria`
--
ALTER TABLE `datakriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `infohepas`
--
ALTER TABLE `infohepas`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datakriteria`
--
ALTER TABLE `datakriteria`
  MODIFY `id_kriteria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `infohepas`
--
ALTER TABLE `infohepas`
  MODIFY `id_info` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
