-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2024 at 12:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mikangaula`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `massege` varchar(500) NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `massege`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'maulidii', 'babab na mama wanakula chakula kitamu sana', 789494888, '2024-11-04 01:31:51', '2024-11-04 01:31:51'),
(4, 'mkori', 'jhfhoihog wugoiuiugiwu owoiuwoyiuw ywyguyiuw iuywiuyuyw iuwyywg  guwyiwyiuwy wiuyiuyg wyuw', 789494888, '2024-11-18 12:41:49', '2024-11-18 12:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_24_112914_create_registration_table', 2),
(5, '2024_10_26_142510_create_comment_table', 3),
(6, '2024_10_26_143911_create_contactus_table', 4),
(7, '2024_10_28_054320_create_userpost_table', 5),
(8, '2024_10_28_104823_create_userpost_table', 6),
(9, '2024_10_29_072640_create_userpostbland_table', 7),
(10, '2024_10_29_082601_create_userpostmatangazo_table', 8),
(11, '2024_10_29_120441_create_userbrand_table', 9),
(12, '2024_10_29_130144_create_userproductorder_table', 10),
(13, '2024_11_11_080223_create_userbrand_table', 11),
(14, '2024_11_11_082405_create_userproductorder_table', 12),
(15, '2024_12_04_060737_create__registerkey_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `password`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'mkori@123', '$2y$12$Gr5BK9J51OOWA/1n6YsZEeSa3dQ9qEmnp2SRUfcMnE8mdKv6fQR0.', '0785226584', 'admin', '2024-11-23 15:42:50', '2024-11-23 15:42:50'),
(2, 'shamsa', '$2y$12$uG7QCSJJQ7L5Mpao7P3tmeWTqC6CrHf0Db2uc68KxPKPXZBZZgF9O', '0685537561', 'admin', '2024-11-23 15:58:22', '2024-12-05 12:49:44'),
(3, 'Richard~', '$2y$12$43OMTE81dbl4AINXKo9K3.hfeLe63W5cC8VzFoWcP8CS1Z8lbDeve', '0716086017', 'admin', '2024-12-04 08:11:05', '2024-12-04 09:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5MR2nfEEVgNhnXtSR0n6inTXfNvtN6T4pErZPWYQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzdFaU1nZ3hRN08ySmQ0SFVsQ256YmI3b1RrMlJlYnRwWmpUMFBaaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733413814);

-- --------------------------------------------------------

--
-- Table structure for table `userbrand`
--

CREATE TABLE `userbrand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `describ` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userpost`
--

CREATE TABLE `userpost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `ownerid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userpost`
--

INSERT INTO `userpost` (`id`, `pname`, `description`, `cost`, `imgpath`, `ownerid`, `created_at`, `updated_at`) VALUES
(36, 'maharage', 'haya ni mahahhdfuvhhj jeuiuiriewire dnjfgiihgr htrjjtrhiit bgjjifgigit fgjnjgfjui trhjjtihhijbjjg hjjtjjtj gjjjthrjkh ngfjjrriititri  #0785226584#', 1500, 'userpost_images/6Z4gqxwYAQPAPnJGOfEtmvQsjz4sPCmZKWC4TUe0.jpg', 1, '2024-11-24 11:19:51', '2024-11-24 11:19:51'),
(37, 'miwa', 'jfji tutiiue esyqbgbeiure re geiier7r77r  #0785226584#', 3400, 'userpost_images/y2zHiGuTB8rfN1F0SR9atcGiR9CGsBDyX8zv3P6n.jpg', 1, '2024-11-24 11:53:00', '2024-11-24 11:53:00'),
(38, 'mahindi', 'karibu katika bidhaa zetu zilizokua bora kabisa kwa matumizi ya nyumbani na hata katika sherehe mbalimbali . utawapenga mwenyewe  #0785226584#', 2000, 'userpost_images/Qz9YCRunpMs6jMZ9nEqriAPZik3Q1vfKvjenKeKv.jpg', 1, '2024-11-26 07:18:08', '2024-11-26 07:18:08'),
(39, 'mihogo', 'mihogo mizuri kwa ajili ya chipsi pamoja na kuchemsha inaiva kabisa na ina unga pia haina maji karibuni sana kununua mihogo hii hamtojutia  #0785226584#', 1500, 'userpost_images/Urfh1bCSwWTghRqEnCuvvnFuq9FVPzz8bqfAW6RR.jpg', 1, '2024-11-26 07:21:57', '2024-11-26 07:21:57'),
(40, 'maharage', 'jamani bidhaa ndio kama hiyo anaehitaji anicheki maana mzigo unaisha hivi karibuni sawa so make sure mnafanya haraka iwezekanavyo  #0685537561#', 23400, 'userpost_images/aoywZjhOemaiXTq8zTrylXUQjEB6bc0YC2WUkhoZ.jpg', 2, '2024-11-26 12:45:24', '2024-11-26 12:45:24'),
(41, 'makuku', 'lh98uu098 w98y0374 2070270y2 02707t8yu 3407837 3y798347 y4793n 387349 30370 307030  #0785226584#', 6700, 'userpost_images/Yj26nyPcufCumnMSVs48LpZYE8kZ3P9iOpPmZuEW.jpg', 1, '2024-12-03 18:54:51', '2024-12-03 18:54:51'),
(42, 'mihogo', 'ndoo moja ndogo shilingi Tsh.20000  #0716086017#', 20000, 'userpost_images/T4AarBtmOm9GRCswpuqkfMKwEWpQ36QMBJGQXuIA.jpg', 3, '2024-12-04 08:16:42', '2024-12-04 08:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `userpostbland`
--

CREATE TABLE `userpostbland` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `ownerid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userpostbland`
--

INSERT INTO `userpostbland` (`id`, `description`, `phone`, `cost`, `imgpath`, `ownerid`, `created_at`, `updated_at`) VALUES
(13, 'Hii nimihogo aina ya super ndugu wanakijiji mnakaribisha kununu aina hii ya mihogo iloyo borakabisa bila ya kusahau pia tunazo na mbegu zake karibuni sana', '0789494888', 7800, 'userpost_imagesbland/3r60rYYLlvHWloIonZ4q0iozpoRRzTrWahQYbRcl.jpg', 1, '2024-11-26 07:34:23', '2024-11-26 07:34:23'),
(14, 'Tunauza korosho kwa bei poa kabisa karibu tukuhudumie kilo moja Tsh 6000 pia kama ukiwahi unaweza kupata punguzo kwa asilimia kadhaa.', '0789494888', 6000, 'userpost_imagesbland/T7CFkZLc6OIhRbLeuHfARahrejrFoCXiPf5tImWT.jpg', 1, '2024-11-26 07:37:51', '2024-11-26 07:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `userpostmatangazo`
--

CREATE TABLE `userpostmatangazo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `head` varchar(255) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `ownerid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userpostmatangazo`
--

INSERT INTO `userpostmatangazo` (`id`, `description`, `head`, `imgpath`, `ownerid`, `created_at`, `updated_at`) VALUES
(24, 'vijana wote wa mikangaula mnaobwa kuhudhuria mkutano wa vijana kwa ajili ya maendeleo ya kijiji cha mikangaula utakaofanyika katika viwanja vya mwembeni wote mnakaribishwa', 'MKUTAANO WA VIJANA', 'userpost_imagesmatangazo/tangazo.jpg', 1, '2024-11-26 07:32:27', '2024-11-26'),
(25, 'wananchi wote wa mikangaula mnatanngaziwa ya kwamba mnada wa kwanza wa korosho utafanyika mnamo mwaka 2020 tarehe 2 mwezi wa sita saa tisa alasiri wote mnakaribishwa', 'lolo', 'userpost_imagesmatangazo/94fyOwDsF5gxsOMdiTloVDA5eB6X13f8AoMt1aHj.jpg', 1, '2024-11-26 08:00:36', '2024-11-26'),
(26, 'Jamani hii ni product ni product ya haraka sana pai ndio mpya haswaa. katika kuhakikisha ya kwamba kila mtu anafikiwa na bidhaa katika siku maaaluma kabisa kuanzia sasa wote mnakaribishwa.', 'CCM VIJANA', 'userpost_imagesmatangazo/k7y8URI4ImnW8aA5aqn8BP4MNmZkum3RjDbldfdV.jpg', 1, '2024-11-27 09:26:14', '2024-11-27'),
(27, 'Tunapenda kuwatangazia ya kwamba dawa za kupulizia mikorosho zilishafika katiaka kijiji chetu cha mikangaula. hivyo wananchi wote mnakaribishwa kujiunga na kuja kununua dawa karibuni sana', 'KUANZA  KWA DAWA', 'userpost_imagesmatangazo/LZjrwqSvXuJrhWBqmGOvn25XymjFNkwMuDy7oB8h.jpg', 1, '2024-11-27 09:30:19', '2024-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `userproductorder`
--

CREATE TABLE `userproductorder` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userproductorder`
--

INSERT INTO `userproductorder` (`id`, `description`, `pname`, `quantity`, `imgpath`, `phone`, `created_at`, `updated_at`) VALUES
(10, '1', 'maharage', 23, 'userpost_images/6Z4gqxwYAQPAPnJGOfEtmvQsjz4sPCmZKWC4TUe0.jpg', '0789494888', '2024-11-24 11:31:33', '2024-11-24 11:31:33'),
(12, '1', 'mahindi', 10, 'userpost_images/Qz9YCRunpMs6jMZ9nEqriAPZik3Q1vfKvjenKeKv.jpg', '0789494888', '2024-11-27 16:07:44', '2024-11-27 16:07:44'),
(13, '3', 'mihogo', 10, 'userpost_images/T4AarBtmOm9GRCswpuqkfMKwEWpQ36QMBJGQXuIA.jpg', '0789494888', '2024-12-04 08:19:23', '2024-12-04 08:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_registerkey`
--

CREATE TABLE `_registerkey` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `registerkey` varchar(255) NOT NULL DEFAULT 'opened',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_registerkey`
--

INSERT INTO `_registerkey` (`id`, `registerkey`, `created_at`, `updated_at`) VALUES
(1, 'closed', NULL, '2024-12-04 08:23:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `userbrand`
--
ALTER TABLE `userbrand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpost`
--
ALTER TABLE `userpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userpost_ownerid_foreign` (`ownerid`);

--
-- Indexes for table `userpostbland`
--
ALTER TABLE `userpostbland`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userpostbland_ownerid_foreign` (`ownerid`);

--
-- Indexes for table `userpostmatangazo`
--
ALTER TABLE `userpostmatangazo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userpostmatangazo_ownerid_foreign` (`ownerid`);

--
-- Indexes for table `userproductorder`
--
ALTER TABLE `userproductorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_registerkey`
--
ALTER TABLE `_registerkey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userbrand`
--
ALTER TABLE `userbrand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userpost`
--
ALTER TABLE `userpost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `userpostbland`
--
ALTER TABLE `userpostbland`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userpostmatangazo`
--
ALTER TABLE `userpostmatangazo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `userproductorder`
--
ALTER TABLE `userproductorder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_registerkey`
--
ALTER TABLE `_registerkey`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userpost`
--
ALTER TABLE `userpost`
  ADD CONSTRAINT `userpost_ownerid_foreign` FOREIGN KEY (`ownerid`) REFERENCES `registration` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userpostbland`
--
ALTER TABLE `userpostbland`
  ADD CONSTRAINT `userpostbland_ownerid_foreign` FOREIGN KEY (`ownerid`) REFERENCES `registration` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userpostmatangazo`
--
ALTER TABLE `userpostmatangazo`
  ADD CONSTRAINT `userpostmatangazo_ownerid_foreign` FOREIGN KEY (`ownerid`) REFERENCES `registration` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
