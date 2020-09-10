/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : songer

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 17/07/2020 11:55:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_04_01_015616_create_reports_table', 1);
INSERT INTO `migrations` VALUES (5, '2020_04_05_154727_create_monitor_table', 1);
INSERT INTO `migrations` VALUES (6, '2020_04_06_155721_add_dates_to_reports', 1);
INSERT INTO `migrations` VALUES (7, '2020_07_15_130322_create_totalsong', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for totalsong
-- ----------------------------
DROP TABLE IF EXISTS `totalsong`;
CREATE TABLE `totalsong`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `songername` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` double(8, 2) NOT NULL,
  `style` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `localsite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 116 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of totalsong
-- ----------------------------
INSERT INTO `totalsong` VALUES (1, 'Camilo', '', 'Favorite-Camilo', '3:31', 4.83, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (2, 'Bad bunny', '', 'Safaera -Bad Bunny', '1:03:37', 7.55, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (3, 'Bad bunny', '', 'I Perreo Alone-Bad Bunny', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (4, 'Camilo', '', 'For the First Time-Camilo', '3:04', 4.21, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (5, 'Rauw Alejandro', '', 'Tattoo-Rauw Alejandro', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (6, 'Dalex', '', 'Hello-Dalex', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (7, 'JBalvin', '', 'Red- J Balvin', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (8, 'Myke Towers', '', 'Goddress-Myke Towers', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (9, 'The Weekend', '', 'Blinding Lights-The Weeknd', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (10, 'Bad  bunny', '', 'MORE THAN A DATE-Bad Bunny', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (11, 'Bad bunny', '', 'BYE ME FUI-Bad Bunny', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (12, 'Feid', '', 'Please-Feid', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (13, 'Bad bunny', '', 'PA\'BREAK IT-Bad Bunny', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (14, 'Rauw Alejandro', '', 'I chose-Rauw Alejandro', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (15, 'Rauw Alejandro', '', 'The Effect-Rauw Alejandro', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (16, 'Karol G', '', 'Tusa-Karol G', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (17, 'Bad bunny', '', 'BAD WITH NICKY-Bad Bunny', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (18, 'Bad bunny', '', 'IF SHE GOES OUT-Bad Bunny', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (19, 'Bad bunny', '', 'If I See Your Mom-Bad Bunny', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (20, 'Dua Lipa', '', 'Don\'t Start Now-Dua Lipa', '0', 0.00, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (21, 'Camilo', '', 'The Difficult-Camilo', '2:56', 4.02, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (22, 'Camilo', '', 'Acoustic Favorite-Camilo', '3:42', 5.08, 'relacion-sech', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (23, 'Camilo', '', 'For the First Time-Camilo, Evaluna Montaner', '3:04', 4.21, 'mp3xd', '/images/myw3schoolsimage.jpg', NULL, NULL);
INSERT INTO `totalsong` VALUES (24, 'Camilo', '', 'Camilo-Favorite', '3:32', 4.85, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (25, 'Camilo', '', 'OFFICIAL Favorite-Camilo', '3:33', 4.87, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (26, 'Camilo', '', 'The Difficult - Camilo', '2:56', 4.02, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (27, 'Camilo', '', 'If The World Was Ending Feat. Evaluna Montager ', '3:32', 4.85, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (28, 'Camilo', '', 'Favorite', '3:32', 4.85, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (29, 'Camilo', '', 'Camilo FitDance Life Dance Video - Favortie', '4:12', 4.85, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (30, 'Camilo', '', 'FAVORITE CAMILO TITOK CHALLENGE', '3:03', 5.81, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (31, 'Camilo', '', 'ACOUSTIC LIVE CAMILO -FAVORITE', '4:18', 0.00, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (32, 'Camilo', '', 'PECRFECT', '2:55', 4.00, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (33, 'Camilo', '', 'Acoustic Favorite', '3:42', 5.08, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (34, 'Camilo', '', 'Camilo & Mau -Unknown / Favorite', '2:41', 3.68, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (35, 'Camilo', '', 'Favorite ft. Claudipa - Camilo', '3:32', 4.85, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (36, 'Bad Bunny', '', 'Bad Bunny x Jowell & Randy x Ñengo Flow YHLQMDLG - Safaera', '4:56', 6.77, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (37, 'Bad Bunny', '', 'Bad Bunny x Ñengo Flow x Jowell & Randy - Safaera', '4:53', 6.70, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (38, 'Bad Bunny', '', 'Safaera YHLQMDLG - Bad Bunny, Jowell & Randy & Ñengo Flow', '5:38', 7.73, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (39, 'Bad Bunny', '', 'Bad Bunny - I Perreo Alone', '3:21', 4.60, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (40, 'Bad Bunny', '', 'Safaera ft. Jowell & Randy, Ñengo Flow - Bad Bunny', '5:37', 7.71, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (41, 'Bad Bunny', '', 'Safaera Bad Bunny', '3:21', 7.50, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (42, 'Bad Bunny', '', 'Bad Bunny X Jowell & Randy X Ñengo Flow - Safaera', '5:37', 6.77, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (43, 'Bad Bunny', '', 'Bad Bunny YHLQMDLG - I Perreo Alone', '3:21', 3.96, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (44, 'Bad Bunny', '', 'Yellow - J Balvin', '5:38', 3.80, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (45, 'Bad Bunny', '', 'Mommy you want, here comes your shark Bad Bunny_Ñengo Flow_Jowell & Randy', '3:21', 3.15, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (46, 'Bad Bunny', '', 'Bad Bunny x Jowell & Randy x Ñengo Flow YHLQMDLG FitDance Life - Safaera', '5:37', 7.55, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (47, 'Bad Bunny', '', 'Safaera - Bad Bunny', '5:28', 87.30, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (48, 'Bad Bunny', '', 'JOWELL & RANDY ✘ BAD BUNNY ✘ ÑENGO FLOW ✘ DJ ALEX - HERE IS YOUR SHARK', '2:05', 2.86, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (49, 'Bad Bunny', '', 'Bad Bunny x Jowell & Randy x Ñengo Flow - Safaera', '4:54', 6.73, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (50, 'Bad Bunny', '', 'Padres\' best reactions to Safaera from Bad Bunny SafaeraChallenge', '2:35', 3.54, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (51, 'Bad Bunny', '', 'SAFAERA Bad Bunny lyrics lyrics ♪', '4:56', 6.77, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (52, 'Bad Bunny', '', 'Bad Bunny DANCES “SAFAERA” WITH HER BRIDE LIVE !!', '4:07', 5.65, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (53, 'Bad Bunny', '', '10 best dances 2020 - SAFAERA CHALLENGE', '8:53', 12.20, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (54, 'Bad Bunny', '', 'HERE I COME YOUR SHARK full song / Safaera-Bad Bunny (Remix)', '2:44', 3.75, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (55, 'Bad Bunny', '', 'IF YOUR BOYFRIEND DOES NOT LOVE YOUR CVLO ✘ BAD BUNNY', '2:23', 3.27, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (56, 'Bad Bunny', '', 'Bad Bunny - If I See Your Mom', '4:26', 6.08, 'mp3xd', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (57, 'Bad Bunny', '', 'BAD BUNNY ✘ JOWELL & RANDY ✘ ÑENGO FLOW ✘ DJ NACHO - SAFAERA (Remix)', '2:12', 3.02, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (58, 'Bad Bunny', '', 'Safaera on Instagram Live - Bad Bunny', '4:45', 6.52, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (59, '', '', 'How to download music for free with Mp3xD__Bandicats', '4:24', 6.04, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (60, '', '', 'How to Download Free, Easy and Virus Free Music MP3xD', '3:02', 4.16, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (61, '', '', 'How to Download Music ... / In MP3xD. V', '4:41', 6.43, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (62, '', '', 'how to download and listen to music from mp3xd', '1:58', 2.70, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (63, '', '', 'The Best Way to Listen and Search Music - Download Free Music From MP3XD', '1:42', 2.33, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (64, '', '', 'Download and Install Mp3XD for Android Free', '2:33', 3.50, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (65, '', '', 'How to download Easy mp3 music without Programs', '2:32', 3.47, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (66, '', '', 'Free and Fast MP3 Music Download Page', '1:22', 1.87, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (67, '', '', 'Mp3xd a good page for original mucica', '1:53', 2.58, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (68, '', '', 'Mp3XDX - Mp3XD Free Music', '10:56', 15.00, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (69, '', '', '7 New Tips for WhatsApp you should know 2017', '7:12', 9.89, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (70, '', '', 'Android / iPhone / BlackBerry / Windows Phone - Download free music from your Ph', '2:01', 2.77, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (71, '', '', 'Google How to download music MP3.mp4', '4:36', 6.31, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (72, '', '', 'download free music in mp3XD', '6:05', 8.35, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (73, '', '', 'DOWNLOAD FREE MP3XD MUSIC', '0:47', 1.07, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (74, '', '', 'how to download music with mp3xd', '2:11', 2.99, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (75, '', '', 'Rodrigo Tapari Enganchados (Remix)', '13:36', 18.60, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (76, '', '', 'link - Download music', '5:34', 7.64, 'artists', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (77, '', '', 'Tubidy El Chombo Give Me Your Little Thing Ultra Music', '2:33', 4.32, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (78, '', '', 'Tubidy ioTalking Angela Summer Fun at the Beach with Talking Tom Shorts Combo', '4:54', 0.66, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (79, '', '', 'Tubidy ioBest English DJ HD song', '3:09', 7.57, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (80, '', '', 'Tubidy ioKarenge Daru party my tom', '0:29', 5.01, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (81, '', '', 'HOW TO DOWNLOAD EASY AND QUICK MUSIC IN TUBIDY 2', '5:31', 5.51, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (82, '', '', 'Tubidy ioMust Watch New Funny Comedy Videos 2019 Episode 45 Funny Vines Funny Ki ', '3:39', 28.50, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (83, '', '', 'Tubidy io Must Watch New Funny Comedy Videos 2018', '4:01', 4.25, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (84, '', '', 'Tubidy ioWheelcity Police Car Monster Truck Car Vehicles New Cartoon Kids Video Co', '20:49', 5.00, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (85, '', '', 'Tubidy ioEd Sheeran Shape of You Music Video', '3:06', 28.50, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (86, '', '', 'CHOTU KE GOLGAPPE छोटू के गोलगप्पे Khandesh Hindi Comedy Chotu Comedy Video', '4:01', 4.25, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (87, '', '', 'CHOTU DADA RIKSHA WALA छोटु की रिक्शा Khandesh Hindi Comedy Chotu Comedy Vid', '9:21', 5.00, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (88, '', '', 'Crazy Frog In The House - Crazy Frog', '25:59', 35.60, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (89, '', '', 'How to Download Free Music with Tubidy', '1:15', 1.71, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (90, '', '', 'Tubidy Mobile Agora sim galley', '50:08', 68.80, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (91, '', '', 'Tubidy Mobile Download Unlimited Videos and Music. {Video Downloader} -100% Wo', '3:12', 4.39, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (92, '', '', 'Tubidy ioBhikhari Chameli New Funny Comedy 2018 Talking Tom New Talking Tom C', '2:20', 3.20, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (93, '', '', 'Tubidy ioCham Cham Full Video BAAGHI Tiger Shroff Shraddha Kapoor Meet Bros Mon', '3:52', 5.31, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (94, '', '', 'Tubidy io Super Hit Song New Kidnap ho Jawegi Sapna New Yer Dhamal Song 2017', '3:27', 4.73, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (95, '', '', 'How to downlad music or music video on tubidy', '3:29', 4.78, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (96, '', '', 'Tubidy ioWhatsapp Group Message Funny Talking Tom', '0:13', 0.29, 'tubidy', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (97, '', '', 'BEST OF 2018 GTA 5 Fails & Epic Moments Compilation', '', 22.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (98, '', '', 'How to download free music from genteflow.tk', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (99, '', '', 'GTA 5 Thug Life 32', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (100, '', '', 'Genteflow - Listen And Download Music 2017', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (101, '', '', 'Motivates Me - Myke Towers', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (102, '', '', 'Nio García, Rauw Alejandro, Darell, Myke Towers, Lenny Tavarez & Casper Mágico - Lo', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (103, '', '', 'They think - Myke Towers', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (104, '', '', 'Super Yei x Mike Towers x Sammy - The Way You Look At Me', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (105, '', '', 'If I don\'t come back - Almighty', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (106, '', '', 'How to download music from genteflow.com', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (107, '', '', 'Marimar', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (108, '', '', 'Happy - Jon Z', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (109, '', '', 'Dare - Myke Towers', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (110, '', '', 'How to Download Genteflow Mp3 Music', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (111, '', '', 'How to download music', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (112, '', '', 'How to Download GENTEFLOW Music', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (113, '', '', 'How to Download Free MP3', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (114, '', '', 'The Farewell - Sech', '', 0.00, 'genteflow', '', NULL, NULL);
INSERT INTO `totalsong` VALUES (115, '', '', 'New Video - Create Your Website in 3 Free Steps', '', 0.00, 'genteflow', '', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
