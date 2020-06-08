-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2020 pada 11.47
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `headline_picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `author` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `headline_picture`, `content`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Blog Pertama', 'f7e155c7988fd398fb9f161db753622dc9307d76.jpg', 'Assalamualaikum wr wb', 1, '2020-06-07 17:02:11', '2020-06-07 17:29:21'),
(2, 'Blog Kedua', '30e45d083007646ebf621644bccc9e28401e9bab.jpg', '<p>Assalamualaikum wr wb, sebelumnya kita telah menyelesaikan CRUD Data menggunakan DB Facade. Nah pada blog kali ini saya akan memberikan penjelasan mengenai cara yang lain untuk berinteraksi dengan Database. Jika belum tau di laravel ini ada dua cara untuk berinteraksi dengan Database yaitu ada Query Builder (DB Facades) dan Eloquent ORM. Untuk blog kali ini saya akan menjelaskan mengenaik Eloquent ORM. Sebelum itu siapkan dulu seperti biasa text editor , project Laravel kemarin, xampp, dan browser. Langsung saja ke penjelasannya</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Assalamualaikum wr wb, sebelumnya kita telah menyelesaikan CRUD Data menggunakan DB Facade. Nah pada blog kali ini saya akan memberikan penjelasan mengenai cara yang lain untuk berinteraksi dengan Database. Jika belum tau di laravel ini ada dua cara untuk berinteraksi dengan Database yaitu ada Query Builder (DB Facades) dan Eloquent ORM. Untuk blog kali ini saya akan menjelaskan mengenaik Eloquent ORM. Sebelum itu siapkan dulu seperti biasa text editor , project Laravel kemarin, xampp, dan browser. Langsung saja ke penjelasannya</p>', 1, '2020-06-07 17:05:39', '2020-06-07 17:05:39'),
(3, 'Blog Ketiga', '9bca1bb49ad85e1ca9bcb843afab0e40676064c7.jpg', '<p>Assalamualaikum wr wb, apa kabarnya teman teman semua semoga baik baik saja. Pada blog kali ini saya akan memberikan materi mengenai Edit dan Delete data menggunakan DB Facade di dalam Laravel Setelah sebelumnya kita belajar mengenai Create data menggunakan DB Facade di dalam Laravel. Langsung saja kita masuk ke cara caranya, sebelum&nbsp; itu siapkan terlebih daulu project Laravel yang kemarin, text editor, xampp, dan browser.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Assalamualaikum wr wb, apa kabarnya teman teman semua semoga baik baik saja. Pada blog kali ini saya akan memberikan materi mengenai Edit dan Delete data menggunakan DB Facade di dalam Laravel Setelah sebelumnya kita belajar mengenai Create data menggunakan DB Facade di dalam Laravel. Langsung saja kita masuk ke cara caranya, sebelum&nbsp; itu siapkan terlebih daulu project Laravel yang kemarin, text editor, xampp, dan browser.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Assalamualaikum wr wb, apa kabarnya teman teman semua semoga baik baik saja. Pada blog kali ini saya akan memberikan materi mengenai Edit dan Delete data menggunakan DB Facade di dalam Laravel Setelah sebelumnya kita belajar mengenai Create data menggunakan DB Facade di dalam Laravel. Langsung saja kita masuk ke cara caranya, sebelum&nbsp; itu siapkan terlebih daulu project Laravel yang kemarin, text editor, xampp, dan browser.</p>', 1, '2020-06-07 17:07:04', '2020-06-07 17:07:04'),
(4, 'Blog Keempat', '619585d113b23fe7b72a330f5f37a1b1608d1456.jpg', '<p>Assalamualaikum wr wb, apa kabarnya teman teman semua semoga baik baik saja. Pada blog kali ini saya akan memberikan materi mengenai Edit dan Delete data menggunakan DB Facade di dalam Laravel Setelah sebelumnya kita belajar mengenai Create data menggunakan DB Facade di dalam Laravel. Langsung saja kita masuk ke cara caranya, sebelum&nbsp; itu siapkan terlebih daulu project Laravel yang kemarin, text editor, xampp, dan browser.</p>\r\n\r\n<p>Assalamualaikum wr wb, apa kabarnya teman teman semua semoga baik baik saja. Pada blog kali ini saya akan memberikan materi mengenai Edit dan Delete data menggunakan DB Facade di dalam Laravel Setelah sebelumnya kita belajar mengenai Create data menggunakan DB Facade di dalam Laravel. Langsung saja kita masuk ke cara caranya, sebelum&nbsp; itu siapkan terlebih daulu project Laravel yang kemarin, text editor, xampp, dan browser.</p>\r\n\r\n<p>Assalamualaikum wr wb, apa kabarnya teman teman semua semoga baik baik saja. Pada blog kali ini saya akan memberikan materi mengenai Edit dan Delete data menggunakan DB Facade di dalam Laravel Setelah sebelumnya kita belajar mengenai Create data menggunakan DB Facade di dalam Laravel. Langsung saja kita masuk ke cara caranya, sebelum&nbsp; itu siapkan terlebih daulu project Laravel yang kemarin, text editor, xampp, dan browser.</p>', 1, '2020-06-07 17:07:38', '2020-06-07 17:15:40'),
(5, 'Blog Kelima', '2b6db02f8dba622ef1064c0c249cb1568ced0b6d.jpg', '<p>Assalamualaikum wr wb, sebelumnya kita telah menyelesaikan CRUD Data menggunakan DB Facade. Nah pada blog kali ini saya akan memberikan penjelasan mengenai cara yang lain untuk berinteraksi dengan Database. Jika belum tau di laravel ini ada dua cara untuk berinteraksi dengan Database yaitu ada Query Builder (DB Facades) dan Eloquent ORM. Untuk blog kali ini saya akan menjelaskan mengenaik Eloquent ORM. Sebelum itu siapkan dulu seperti biasa text editor , project Laravel kemarin, xampp, dan browser. Langsung saja ke penjelasannya</p>\r\n\r\n<p>Assalamualaikum wr wb, sebelumnya kita telah menyelesaikan CRUD Data menggunakan DB Facade. Nah pada blog kali ini saya akan memberikan penjelasan mengenai cara yang lain untuk berinteraksi dengan Database. Jika belum tau di laravel ini ada dua cara untuk berinteraksi dengan Database yaitu ada Query Builder (DB Facades) dan Eloquent ORM. Untuk blog kali ini saya akan menjelaskan mengenaik Eloquent ORM. Sebelum itu siapkan dulu seperti biasa text editor , project Laravel kemarin, xampp, dan browser. Langsung saja ke penjelasannya</p>\r\n\r\n<p>Assalamualaikum wr wb, sebelumnya kita telah menyelesaikan CRUD Data menggunakan DB Facade. Nah pada blog kali ini saya akan memberikan penjelasan mengenai cara yang lain untuk berinteraksi dengan Database. Jika belum tau di laravel ini ada dua cara untuk berinteraksi dengan Database yaitu ada Query Builder (DB Facades) dan Eloquent ORM. Untuk blog kali ini saya akan menjelaskan mengenaik Eloquent ORM. Sebelum itu siapkan dulu seperti biasa text editor , project Laravel kemarin, xampp, dan browser. Langsung saja ke penjelasannya</p>', 1, '2020-06-07 17:18:34', '2020-06-07 17:19:03'),
(6, 'Blog Keenam', '8b6f5c95f1659347d28e2efa6bb602cd2bdfe061.jpg', '<p>Assalamualaikum wr wb, sebelumnya kita telah menyelesaikan CRUD Data menggunakan DB Facade. Nah pada blog kali ini saya akan memberikan penjelasan mengenai cara yang lain untuk berinteraksi dengan Database. Jika belum tau di laravel ini ada dua cara untuk berinteraksi dengan Database yaitu ada Query Builder (DB Facades) dan Eloquent ORM. Untuk blog kali ini saya akan menjelaskan mengenaik Eloquent ORM. Sebelum itu siapkan dulu seperti biasa text editor , project Laravel kemarin, xampp, dan browser. Langsung saja ke penjelasannya</p>\r\n\r\n<p>Assalamualaikum wr wb, sebelumnya kita telah menyelesaikan CRUD Data menggunakan DB Facade. Nah pada blog kali ini saya akan memberikan penjelasan mengenai cara yang lain untuk berinteraksi dengan Database. Jika belum tau di laravel ini ada dua cara untuk berinteraksi dengan Database yaitu ada Query Builder (DB Facades) dan Eloquent ORM. Untuk blog kali ini saya akan menjelaskan mengenaik Eloquent ORM. Sebelum itu siapkan dulu seperti biasa text editor , project Laravel kemarin, xampp, dan browser. Langsung saja ke penjelasannya</p>', 1, '2020-06-07 17:20:02', '2020-06-07 17:20:02'),
(7, 'Blog Ketujuh', 'a3e4c868826b56175a3090d1a3c26597aca9f08c.jpg', 'Assalamualaiku wr wb', 1, '2020-06-07 17:29:50', '2020-06-07 17:29:50'),
(8, 'Blog Percobaan', '0115a97eef27c094e4e1a3d07ef8353c2d909841.jpg', 'Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;Assalamualaikum&nbsp;', 1, '2020-06-07 18:49:14', '2020-06-07 18:49:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hospitals`
--

CREATE TABLE `hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital_name`, `province`, `address`, `phone_number`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'RS Hasan Sadikin', 7, 'Jl. Jabar 1', '08123456789', '415a2c4c492cb2cb074cfc9e7f785d24b7cb9c2c.png', '2020-06-07 17:35:57', '2020-06-07 18:12:03'),
(2, 'RS Cut Meutia', 1, 'Jl. Aceh', '082123456789', '1bc4722902f2eb13be29b28d56b17ac5fbac1e2d.png', '2020-06-07 17:49:47', '2020-06-07 17:49:47'),
(3, 'RS Depati Hamzah', 2, 'Jl. Bangka', '082123456789', 'd2e7f4b46fc06e4fc8b2b806680c6d6f2bbcd731.png', '2020-06-07 17:58:16', '2020-06-07 17:58:16'),
(4, 'RS Prawiranegara', 3, 'Jl. Banten', '08123456789', '619abe62ae015fe2629c8a3014ffec40806dd367.png', '2020-06-07 17:59:52', '2020-06-07 17:59:52'),
(5, 'RS Arga Makmur', 4, 'Jl. Bengkulu', '082123456789', 'bf7288c4d83876063561b9485fa137c1dc6e6c08.png', '2020-06-07 18:01:29', '2020-06-07 18:01:29'),
(6, 'RS gatot Subroto', 5, 'Jl. Jakarta', '08123456789', '996c1c657f172a38242e0e23ed65358ee8b794ed.png', '2020-06-07 18:08:15', '2020-06-07 18:08:15'),
(7, 'RS Raden Mattaher', 6, 'Jl. Jambi', '08123456789', '0acce35f73da991b2c25c9216e88c1232f062249.png', '2020-06-07 18:11:29', '2020-06-07 18:11:29'),
(8, 'RS Banyumas', 8, 'Jl. Jateng', '08123456789', '7d904f128940af1d407c00f5f7b071cb53ea6c4a.png', '2020-06-07 18:13:26', '2020-06-07 18:13:26'),
(9, 'RS Soedono Madiun', 9, 'Jl. Jatim', '08123456789', 'b893caec747c8c295af14a7c3002f28f26cb4db0.png', '2020-06-07 18:14:21', '2020-06-07 18:14:21'),
(10, 'RS Kepulauan Riau', 10, 'Jl. Riau', '08123456789', '6e02aab6db6b603a1f518fa3670f124616472a1e.png', '2020-06-07 18:15:15', '2020-06-07 18:15:15'),
(11, 'RS Ahmad Yani Metro', 11, 'Jl. Lampung', '08123456789', 'cfb25ff187327872cd031ae3910a62659290d094.png', '2020-06-07 18:16:14', '2020-06-07 18:16:14'),
(12, 'RS kabanjahe', 13, 'Jl. Sumatera', '08123456789', '270452c477d34e552f6cf63e9c46691c2a7ec45d.png', '2020-06-07 18:17:02', '2020-06-07 18:17:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_03_124659_create_provinces_table', 1),
(5, '2020_06_04_210743_create_articles_table', 1),
(6, '2020_06_04_211749_create_hospitals_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `provinces`
--

INSERT INTO `provinces` (`id`, `province_name`, `created_at`, `updated_at`) VALUES
(1, 'Aceh', NULL, NULL),
(2, 'Bangka Belitung', NULL, NULL),
(3, 'Banten', NULL, NULL),
(4, 'Bengkulu', NULL, NULL),
(5, 'Jakarta', NULL, NULL),
(6, 'Jambi', NULL, NULL),
(7, 'Jawa Barat', NULL, NULL),
(8, 'Jawa Tengah', NULL, NULL),
(9, 'Jawa Timur', NULL, NULL),
(10, 'Kepulauan Riau', NULL, NULL),
(11, 'Lampung', NULL, NULL),
(12, 'Riau ', NULL, NULL),
(13, 'Sumatera', NULL, NULL),
(14, 'Yogyakarta', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', 'admin', NULL, NULL, '$2y$10$XbuXaOY3prPM1hwhJ6.yh.QkdskmC9CEG2gz9gkM8zuTSf.oLD4AC', NULL, '2020-06-06 17:00:00', '2020-06-06 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_author_foreign` (`author`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospitals_province_foreign` (`province`);

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
-- Indeks untuk tabel `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `provinces_province_name_unique` (`province_name`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_author_foreign` FOREIGN KEY (`author`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `hospitals`
--
ALTER TABLE `hospitals`
  ADD CONSTRAINT `hospitals_province_foreign` FOREIGN KEY (`province`) REFERENCES `provinces` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
