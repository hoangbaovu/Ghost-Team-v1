-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.11.63.130:3306
-- Generation Time: Jul 10, 2015 at 06:49 AM
-- Server version: 5.5.41
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ghost`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '../assets/img/no-avatar.jpg',
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '01-01-2014',
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '100006660883971',
  `gravatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uni` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '26894034',
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Welcome To TheGhost',
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skill_race` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'lv1',
  `skill_dance` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'lv1',
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'lGMG8OnPlDE',
  `p_conghien` bigint(255) DEFAULT NULL,
  `p_phonvinh` bigint(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`, `deleted_at`, `avatar`, `birthday`, `country`, `facebook`, `gravatar`, `uni`, `status`, `website`, `skill_race`, `skill_dance`, `youtube`, `p_conghien`, `p_phonvinh`) VALUES
(1, 'neo@ghost.vn', '$2y$10$8tRQ/2.DUUJIPEFpTNEM0Oc68xv7TgtCVBZAz2v3v5oJ4EEjNWQ4y', '{"admin":1,"user":1,"superuser":1}', 1, NULL, NULL, '2015-07-10 10:47:46', '$2y$10$rkKMgW0YMAfuBHwBegNH9eWzJ346PGd.x7rKDJ7L9RtdB3x6Gu.ri', NULL, 'Bảo Vũ', 'GhØsT丶Neo', '2014-01-25 05:09:04', '2015-07-10 10:48:41', NULL, 'images/avatars/avatar_1.jpg', '10-02-1995', 'Huế', '100006660883971', '', '26894034', '', '', 'lv2', 'lv3', '', 50000, 4950),
(2, 'dolly@ghost.vn', '$2y$10$BLSZ/kFN2ETz1HNmKe3W/ujJ457ZuRbJjudZes0ufr7c5FKQraib.', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Minh Loan', 'GhØsT丶Dolly', '2014-01-25 05:09:04', '2014-05-01 02:00:08', NULL, '../assets/img/no-avatar.jpg', '12-10-1995', 'Đồng Nai', '100004187860939', NULL, '2587182', '', '', 'lv1', 'lv1', '', 55000, 3368),
(3, 'babie@ghost.vn', '$2y$10$nsU1e/sXfsDkbJZ1tpTbNOJPCrgVmhNIDEAj8.bntGaPiA6fLzGb6', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Huyền Vy', 'GhØsT丶Babie', '2014-01-25 09:03:33', '2014-01-25 09:03:33', NULL, '../assets/img/no-avatar.jpg', '01-01-2014', NULL, '100006660883971', NULL, '140644612', 'Welcome To TheGhost', NULL, 'lv1', 'lv1', 'lGMG8OnPlDE', 23000, 2840),
(4, 'funny@ghost.vn', '$2y$10$E9kaLLnoyGMtUAlAV7ullerTl7glIFVULY3N.DOxuj3x7b19/xJFW', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Quỳnh Như', 'GhØsT丶Funny', '2014-01-25 09:04:47', '2014-01-25 09:06:05', NULL, '../assets/img/no-avatar.jpg', '24-11-1991', 'Đồng Nai', '100005330647376', NULL, '124994447', '', '', 'lv1', 'lv1', 'lGMG8OnPlDE', 15000, 3300),
(5, 'sea@ghost.vn', '$2y$10$SwSqItFfZVOaJfA6QKJdC.Rwsbd/WKSkfWpylWucOlb1J7KGVh3C6', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Vũ Văn Tùng', 'Sea', '2014-01-25 09:06:56', '2014-05-01 14:53:31', NULL, '../assets/img/no-avatar.jpg', '25-11-1996', 'Đắk Nông', '100005710390324', NULL, '235342221', '', '', 'lv1', 'lv1', '', 10000, 1000),
(6, 'ut@ghost.vn', '$2y$10$DcN1DQEW9vYvAEl/OaKCFe2ynkBA1uMmF8ARHcnfAKdB1m5mdnMfO', '{"superuser":-1}', 1, NULL, NULL, '2014-02-04 13:01:22', '$2y$10$3uXSLItZJuquDh0RFE0o..4FaaSBoIP56rG8ywBrBUi6Hoi5.QSNq', NULL, 'Ngọc Duyên', 'Ngọc Duyên', '2014-01-25 09:08:42', '2014-02-04 13:01:22', NULL, 'images/avatars/avatar_6.jpg', '17-06-1998', 'Đà Nẵng ', '100006660883971', '', '200599160', 'Welcome To TheGhost', '', 'lv1', 'lv1', '', NULL, NULL),
(7, 'kym@ghost.vn', '$2y$10$t1GHXT5PlwDJZ9Fe/7YkBOvbnn2UEBKfQseG.i8bJV9ofzsgW4s4O', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Kym', 'ŅµﱞPąĶąChį ＞．＜', '2014-01-25 09:20:06', '2014-01-25 09:38:42', NULL, 'images/avatars/avatar_7.jpg', '05-06-1999', 'Hồ Chí Minh', '100005169430890', NULL, '124567914', '', '', 'lv1', 'lv1', 'lGMG8OnPlDE', 5817, 874),
(8, 'linh@ghost.vn', '$2y$10$ZmeHmFdbDJ1UaiZtST0/TexEfmR1pSPSgEuw.oDK95ixHGCON9e4O', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Diệu Linh', 'Diệu Linh', '2014-01-25 09:20:48', '2014-01-25 09:33:40', NULL, 'images/avatars/avatar_8.jpg', '01-01-2014', '', '100006660883971', NULL, '253872657', '', '', 'lv1', 'lv1', 'lGMG8OnPlDE', 95, 400),
(9, 'ngan@ghost.vn', '$2y$10$5W0WBNi2ooKHYQIH31xdx.jlb6r99s8AD69AvSUy3Sm7UBWHuT4Y2', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Thu Ngân', 'Thu Ngân', '2014-01-25 09:21:20', '2014-01-25 09:28:44', NULL, 'images/avatars/avatar_9.jpg', '01-01-2014', '', '100006660883971', NULL, '26894034', '', '', 'lv1', 'lv1', 'lGMG8OnPlDE', 1, 1),
(10, 'bo@ghost.vn', '$2y$10$fOqs8zEUPPvfCzxshyshAOh/9QqHY8xhtHejg49wB/FUJM0nmiH22', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Khánh Linh', 'GhØsT丶BòChuﱞ', '2014-01-25 09:54:56', '2014-01-25 09:58:29', NULL, 'images/avatars/avatar_10.jpg', '06-04-1999', 'Tiền Giang', '100004389431260', NULL, '141463683', '', '', 'lv1', 'lv1', 'lGMG8OnPlDE', 1, 1),
(11, 'huynh@ghost.vn', '$2y$10$THy3L32CJMkCfRFbtX3soetWequQwYys1El6zG.7jQSim6Fu6cPQa', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Ánh Huỳnh', 'Ánh Huỳnh - TVNN', '2014-01-25 19:34:26', '2014-01-25 19:35:13', NULL, '../assets/img/no-avatar.jpg', '11-11-1997', '', '100006660883971', NULL, '107216658', '', '', 'lv1', 'lv1', 'lGMG8OnPlDE', 7768, 887),
(12, 'nam@ghost.vn', '$2y$10$Bxc1QfQ5jeu9G0gwbi2ymO9wZa8r4xQhW9eUix0mSk4TOzwLQzSGe', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Nhật Nam', 'Nhật Nam - TTAH', '2014-01-25 19:36:01', '2014-07-26 15:05:47', NULL, 'http://ghost.iamneo.info/assets/img/thanhvien/hot/hot-member-7.jpg', '01-01-2014', 'Hà Nội', '100004038961389', NULL, '108366127', '', '', 'lv1', 'lv1', '', 7697, 537),
(13, 'puzz@ghost.vn', '$2y$10$cqI3GB2y9eI3VgDeWU7i9uVuQnSUgFgFmGmN23tiFAE/OXHZDmeF2', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Puzz', 'Panda', '2014-01-25 22:07:43', '2014-01-25 22:10:50', NULL, 'images/avatars/avatar_13.jpg', '29-03-1996', 'Hồ Chí Minh', '100005333353673', NULL, '71106049', '', '', 'lv1', 'lv1', 'lGMG8OnPlDE', 1545, 761),
(14, 'bao@ghost.vn', '$2y$10$5jdNew0rzwarGgszf6I0e.mCT0NH8S3tQlEnFMA1wehBuDha6TxEK', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Bảo', 'GhØsT丶Xù', '2014-01-25 22:08:44', '2014-01-25 22:08:44', NULL, '../assets/img/no-avatar.jpg', '01-01-2014', NULL, '100006660883971', NULL, '26894034', 'Welcome To TheGhost', NULL, 'lv1', 'lv1', 'lGMG8OnPlDE', 1845, 101),
(15, 'yi@ghost.vn', '$2y$10$dLVZ8dzLtN8dHIdVAifvvu6RlhOYhwulFSgVJ9hjNNCNgGvX.i/tu', '{"superuser":-1}', 1, NULL, NULL, '2014-07-26 14:46:08', '$2y$10$1CNRwt2QkohvbBc19.qAauDs9kB9aPrh0IbUpMPQznLSK1I8vjPBy', NULL, 'Tử Diên', 'Yi.', '2014-01-25 22:09:18', '2014-07-26 14:47:50', NULL, 'images/avatars/avatar_15.jpg', '01-01-2014', '', '100006660883971', '', '3946104', '', '', 'lv1', 'lv1', '', NULL, NULL),
(16, 'loc@ghost.vn', '$2y$10$BAfIO7Ua9nyUnF2s9V4ZqOo.qtp6iLNtcM.1liEc2KWzVgC/oorra', '{"superuser":-1}', 1, NULL, NULL, NULL, NULL, NULL, 'Lộc', '°¨Ghøst丶Äzﮰﭢﮰﮰﺦﻲ', '2014-01-28 17:17:57', '2014-01-28 17:21:11', NULL, 'http://ghost.iamneo.info/assets/img/thanhvien/hot/hot-member-9.jpg', '01-01-2014', '', '100006660883971', NULL, '26894034', '', '', 'lv1', 'lv1', 'lGMG8OnPlDE', 5782, 960),
(17, 'luz@ghost.vn', '$2y$10$KM3Tz4vrJdgMf15/QUyVzuaJLcoFYrS46dN3dGsO/LtViD2wlG/Gi', '{"superuser":-1}', 0, 'qaqcR9bLkFKL6yjkz8EonDS38lTxsCsiAzah17rK8s', NULL, NULL, NULL, NULL, 'Luz', 'Luz', '2014-02-03 02:42:25', '2014-02-03 04:46:16', NULL, 'http://ghost.iamneo.info/assets/img/thanhvien/hot/hot-member-6.jpg', '01-01-2014', '', '100006660883971', NULL, '26894034', 'lv1', '', 'lv1', 'lv1', 'lGMG8OnPlDE', NULL, NULL),
(18, 'yue@ghost.vn', '$2y$10$aZswmCrr6SrbfXXe/HwCN.LbhCT3ghkH6JObn5NPtvP3oUNUZE8ee', '{"superuser":-1}', 1, NULL, NULL, '2014-03-19 10:23:19', '$2y$10$PDl3xf3EIIP78uv.XuXdbeO1hy5IrYSZZXbTaiWh2MU6LE2txQ5m6', NULL, 'Yue', 'ﺐﯼﯽYogurtMilkﺐﯼﯽ', '2014-03-19 10:19:53', '2014-03-19 10:23:35', NULL, 'images/avatars/avatar_18.jpg', '01-01-2014', '', '100006660883971', '', '207806215', '', '', 'lv2', 'lv4', '', NULL, NULL),
(19, 'khanh@ghost.vn', '$2y$10$FKDU7WWNI26kN8Peom7siu.hBjhSUEb/W4YNk/08PKWsc37/mzRMK', '{"superuser":-1}', 1, NULL, NULL, '2014-08-03 18:32:51', '$2y$10$ssQ1j7abE06N7bRCEOWJQOtgvOPc4YVW/FfNOfW1bb7dimqkyQdOG', NULL, 'Trần Tuyết Khanh', 'Mưa Sao Băng', '2014-07-01 10:27:37', '2014-08-03 18:32:51', NULL, 'images/avatars/avatar_19.jpg', '25/12/1994', 'Brisbane, Queensland, Australia', '100006660883971', '', '26894034', '- Rất vui làm qen vs mọi người...Have a nice day :Xx', '', 'lv1', 'lv1', '', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
