-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-02-20 13:46:39
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `sioxi`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `live`
--

CREATE TABLE `live` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `live_date` datetime NOT NULL DEFAULT '2023-12-16 01:31:48',
  `songs_played` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `live`
--

INSERT INTO `live` (`id`, `created_at`, `updated_at`, `remember_token`, `location`, `live_date`, `songs_played`, `description`) VALUES
(1, NULL, '2023-12-15 16:58:06', NULL, 'Somewhere in Osaka', '2023-12-16 01:31:00', '<p>\"Bohemian Rhapsody, Billie Jean, Imagine, Like a Rolling Stone, Hey Jude, What\'s Going On, Hotel California, Smells Like Teen Spirit, Thriller, Shape of You, Despacito, Uptown Funk, Blinding Lights, Watermelon Sugar, Bad Romance, Stairway to Heaven, Sweet Child o\' Mine, Hallelujah, Rolling in the Deep, Someone Like You\"</p>', '<p>日本の四季折々の美しい風景は、訪れる人々を魅了します。春には桜が満開になり、公園や川沿いに花見を楽しむ人々で賑わいます。夏には緑豊かな山々や美しい海岸線が、自然愛好家や観光客を引き寄せます。秋には紅葉が美しい景色を生み出し、寺社や庭園が彩られます。そして冬には雪景色が広がり、スキーや温泉で楽しむ人々が多く訪れます。</p>\r\n<p>&nbsp;</p>\r\n<p>日本の食文化もまた多様で魅力的です。新鮮な寿司、ラーメン、和牛の焼肉など、日本料理は世界中で愛されています。また、伝統的な茶道や華道などの文化も、日本の独自性を感じさせます。</p>\r\n<p>&nbsp;</p>\r\n<p>日本は先進技術と伝統の融合でも知られています。古き良き伝統と、最先端のテクノロジーが共存する街並みは、訪れる人々に驚きと感動を与えてくれることでしょう。</p>\r\n<p>&nbsp;</p>\r\n<p>このような要素が、日本を訪れる人々や地元の人々に幅広い魅力をもたらしています。</p>'),
(2, '2023-12-15 16:49:43', '2023-12-15 17:03:42', NULL, 'A cool place', '2024-01-25 14:55:00', '<p>Another one Bites the dust</p>', '<p>HERE WE GO BOYS</p>');

-- --------------------------------------------------------

--
-- テーブルの構造 `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `relation_id` bigint(20) UNSIGNED NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `media`
--

INSERT INTO `media` (`id`, `created_at`, `updated_at`, `relation_id`, `file_path`) VALUES
(1, '2023-12-15 16:48:38', '2023-12-15 17:10:22', 1, 'images/TobjXsg1FlzBPoqXvVCAc9uQYQvfZKfssFeIf4xs.jpg'),
(6, '2023-12-15 16:49:43', '2023-12-15 17:10:38', 2, 'images/M0cp9SufBrnyrBiYtEh8fSgGekSNO5g1u6o7G9J6.jpg'),
(8, '2023-12-15 17:11:27', '2023-12-15 17:11:27', 1, 'images/gWaJtFBTFiCQQ414mtDZ8dBtuI4fKZMwForA1QPB.png'),
(9, '2023-12-15 17:11:27', '2023-12-15 17:11:27', 1, 'images/UI5cn6r2ATdSNtvIO6e82mTez0D4EOAEJjlDQ84t.jpg'),
(10, '2023-12-15 17:11:27', '2023-12-15 17:11:27', 1, 'images/FN7tSyep4cVBPPIXaUVYgdsK5ApzerzfiesKo8JV.jpg'),
(11, '2023-12-15 17:11:27', '2023-12-15 17:11:27', 1, 'images/S3B8NGWJWwelGkTjdRJxep1G8DzzfJz8GLyzQvTx.jpg'),
(12, '2023-12-15 17:11:27', '2023-12-15 17:11:27', 1, 'images/HiPA3LajcMU8PaSgE4oG1MMf71hMvSyZOFOgxkox.jpg'),
(13, '2023-12-15 17:11:28', '2023-12-15 17:11:28', 1, 'images/vJsyNtaaZU0gyDaexjZpgwXf9BcUUwVAHll7Tewi.jpg'),
(14, '2023-12-15 17:11:28', '2023-12-15 17:11:28', 1, 'images/s9KF6b5qLLixjnOn7Q45aISkbHsUD6AMYgvMp2Vc.jpg'),
(15, '2023-12-15 17:11:28', '2023-12-15 17:11:28', 1, 'images/iHU0zlYxJrxonA4sxUG3YY1zKPfUJRDjx2Vd0E4D.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_11_02_131949_create_live_table', 1),
(4, '2023_11_02_131952_create_media_table', 1),
(5, '2023_11_02_131954_create_tracks_table', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `tracks`
--

CREATE TABLE `tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `debut_date` datetime NOT NULL DEFAULT '2023-12-16 01:31:49',
  `lyrics` text NOT NULL,
  `yt_link` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `tracks`
--

INSERT INTO `tracks` (`id`, `created_at`, `updated_at`, `title`, `debut_date`, `lyrics`, `yt_link`, `img_path`) VALUES
(1, NULL, '2024-02-03 04:19:30', 'Cicada Shell', '2023-12-16 01:31:00', '<p>yayayaya</p>', 'https://www.youtube.com/watch?v=Bo6biyoRKIo&list=RDLML6SoNE7xE&index=6&ab_channel=StuartChatwood-Topic', 'images/J9vQ5PKnSixJsgmsLAb4eKdMglSKHIrs9XOvGRdM.jpg'),
(2, '2023-12-15 16:50:56', '2024-02-03 04:19:39', 'Cicada Shell (dead cicada ver.)', '2023-12-16 10:50:00', '<p>yayayaya</p>', 'https://www.youtube.com/watch?v=j4htIC8C83U&t=838s&ab_channel=Aria', 'images/5uedyDtFuMgfu9Sm7cAReDaAmUcc3mGf2556MMnR.png'),
(3, '2023-12-15 16:52:02', '2023-12-15 17:08:09', 'Okamoto GOD', '2023-12-16 10:51:00', '<p>(Verse 1)</p>\r\n<p>In a world of pixels and neon dreams,</p>\r\n<p>Where the cityscape\'s a canvas, bursting at the seams.</p>\r\n<p>Lost in the rhythm of the midnight air,</p>\r\n<p>Chasing echoes of a melody, a love affair.</p>\r\n<p>&nbsp;</p>\r\n<p>(Pre-Chorus)</p>\r\n<p>Neon lights flicker, secrets in the shadows,</p>\r\n<p>Whispers of a story that only night knows.</p>\r\n<p>&nbsp;</p>\r\n<p>(Chorus)</p>\r\n<p>Let the music play, set our hearts on fire,</p>\r\n<p>Dancing through the chaos, taking us higher.</p>\r\n<p>In the symphony of life, we find our way,</p>\r\n<p>Lost in the lyrics of the night and day.</p>\r\n<p>&nbsp;</p>\r\n<p>(Verse 2)</p>\r\n<p>Concrete jungle, where the wild things roam,</p>\r\n<p>Electric heartbeat, making this city our own.</p>\r\n<p>Street poets scribble tales on subway walls,</p>\r\n<p>As the city\'s heartbeat, the DJ calls.</p>\r\n<p>&nbsp;</p>\r\n<p>(Pre-Chorus)</p>\r\n<p>Neon lights flicker, secrets in the shadows,</p>\r\n<p>Whispers of a story that only night knows.</p>\r\n<p>&nbsp;</p>\r\n<p>(Chorus)</p>\r\n<p>Let the music play, set our hearts on fire,</p>\r\n<p>Dancing through the chaos, taking us higher.</p>\r\n<p>In the symphony of life, we find our way,</p>\r\n<p>Lost in the lyrics of the night and day.</p>\r\n<p>&nbsp;</p>\r\n<p>(Bridge)</p>\r\n<p>Moonlight serenade, a celestial dance,</p>\r\n<p>Stars as witnesses, as we take our chance.</p>\r\n<p>Notes like constellations, guiding our flight,</p>\r\n<p>Through the cosmic rhythms, we\'ll dance tonight.</p>\r\n<p>&nbsp;</p>\r\n<p>(Chorus)</p>\r\n<p>Let the music play, set our hearts on fire,</p>\r\n<p>Dancing through the chaos, taking us higher.</p>\r\n<p>In the symphony of life, we find our way,</p>\r\n<p>Lost in the lyrics of the night and day.</p>', 'https://www.youtube.com/watch?v=ow2AEaFyLD4&ab_channel=sioxi%E6%BD%AE%E9%A8%92', 'images/lVBd1XUZWtSHCJiOrhTMWyiRNGEBVdOl00kbMAfY.jpg'),
(4, '2023-12-15 17:00:35', '2023-12-15 17:18:52', 'A Dark Song', '2023-12-04 11:00:00', '<p>&nbsp;</p>\r\n<p>(Verse 1)</p>\r\n<p>In the moonlit shadows where the darkness creeps,</p>\r\n<p>Echoes of the past, where the lost souls weep.</p>\r\n<p>A haunted melody, a ghostly choir,</p>\r\n<p>Whispers in the wind, fueling the fire.</p>\r\n<p>&nbsp;</p>\r\n<p>(Pre-Chorus)</p>\r\n<p>Beneath the graveyard soil, secrets lie,</p>\r\n<p>Skeletons dance, under the pale moonlight.</p>\r\n<p>&nbsp;</p>\r\n<p>(Chorus)</p>\r\n<p>In the macabre night, where nightmares conspire,</p>\r\n<p>A symphony of dread, a ghostly choir.</p>\r\n<p>Shivers down your spine, as the shadows conspire,</p>\r\n<p>In the haunting echoes, the dead inspire.</p>\r\n<p>&nbsp;</p>\r\n<p>(Verse 2)</p>\r\n<p>Creaking floorboards, in the haunted halls,</p>\r\n<p>Portraits of the damned, adorn the walls.</p>\r\n<p>A symphony of screams, a lullaby of fear,</p>\r\n<p>Phantom footsteps, drawing near.</p>\r\n<p>&nbsp;</p>\r\n<p>(Pre-Chorus)</p>\r\n<p>Beneath the graveyard soil, secrets lie,</p>\r\n<p>Skeletons dance, under the pale moonlight.</p>\r\n<p>&nbsp;</p>\r\n<p>(Chorus)</p>\r\n<p>In the macabre night, where nightmares conspire,</p>\r\n<p>A symphony of dread, a ghostly choir.</p>\r\n<p>Shivers down your spine, as the shadows conspire,</p>\r\n<p>In the haunting echoes, the dead inspire.</p>\r\n<p>&nbsp;</p>\r\n<p>(Bridge)</p>\r\n<p>Ravens circle, a dance in the abyss,</p>\r\n<p>A ghostly waltz, sealed with a chilling kiss.</p>\r\n<p>In the mirror\'s reflection, a specter stares,</p>\r\n<p>A haunting refrain, nobody dares to share.</p>\r\n<p>&nbsp;</p>\r\n<p>(Chorus)</p>\r\n<p>In the macabre night, where nightmares conspire,</p>\r\n<p>A symphony of dread, a ghostly choir.</p>\r\n<p>Shivers down your spine, as the shadows conspire,</p>\r\n<p>In the haunting echoes, the dead inspire.</p>', 'https://www.youtube.com/watch?v=0VKzYELdgDs&ab_channel=AthenaClassical', 'images/z3i1tEZDv7e6PZgchEgLROFidqFsit8oyJMjhcKz.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `age`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Takano Ryuta', 'ryuta@mail.com', NULL, '$2y$10$yYWYdnfItfkvr6l4S8wYlus.vak9Bd9WwPnYP9KzYogZfatUqjqxC', NULL, 28, 'A good boi', '2023-12-15 16:44:35', '2023-12-15 16:44:35');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_relation_id_foreign` (`relation_id`);

--
-- テーブルのインデックス `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- テーブルのインデックス `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `live`
--
ALTER TABLE `live`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルの AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルの AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_relation_id_foreign` FOREIGN KEY (`relation_id`) REFERENCES `live` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
