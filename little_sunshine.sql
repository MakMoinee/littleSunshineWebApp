/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 80027
 Source Host           : localhost:3306
 Source Schema         : little_sunshine

 Target Server Type    : MySQL
 Target Server Version : 80027
 File Encoding         : 65001

 Date: 10/04/2025 14:19:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for assignments
-- ----------------------------
DROP TABLE IF EXISTS `assignments`;
CREATE TABLE `assignments`  (
  `assignmentID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `teacherID` int NOT NULL,
  `studentID` int NOT NULL,
  `sessionID` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dueDate` date NOT NULL,
  `dueFrom` timestamp NOT NULL,
  `dueTo` timestamp NOT NULL,
  `submissionType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filePath` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`assignmentID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of assignments
-- ----------------------------
INSERT INTO `assignments` VALUES (1, 1, 2, 0, 'Sample', '2025-04-12', '2025-04-12 01:58:00', '2025-04-12 13:58:00', 'online', '/data/assignments/1743962325.pdf', '2025-04-06 17:58:45', '2025-04-06 17:58:45');

-- ----------------------------
-- Table structure for books
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `book` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of books
-- ----------------------------

-- ----------------------------
-- Table structure for evaluations
-- ----------------------------
DROP TABLE IF EXISTS `evaluations`;
CREATE TABLE `evaluations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `studentID` int NOT NULL,
  `sessionID` int NOT NULL,
  `evaluation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of evaluations
-- ----------------------------
INSERT INTO `evaluations` VALUES (1, 3, 1, 'ss', '2025-04-10 06:12:09', '2025-04-10 06:12:09');

-- ----------------------------
-- Table structure for grades
-- ----------------------------
DROP TABLE IF EXISTS `grades`;
CREATE TABLE `grades`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `studentID` int NOT NULL,
  `workBehavior` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `socialSkills` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `cognitiveSkills` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `fms` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gms` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `adls` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grades
-- ----------------------------
INSERT INTO `grades` VALUES (3, 2, '{\"attention\":\"fair\",\"concentration\":\"good\",\"tolerance\":\"\",\"impulse\":\"\",\"sitting\":\"\"}', '{\"name\":\"\",\"eye\":\"\",\"joint\":\"\",\"verbal\":\"\",\"cooperation\":\"\",\"activeListening\":\"\",\"flexibility\":\"\",\"decision\":\"\",\"manners\":\"\"}', '{\"match\":\"\",\"sort\":\"good\",\"recognize\":\"\",\"identify\":\"\",\"instruction\":\"\"}', '{\"manipulation\":\"\",\"coordination\":\"\",\"tracing\":\"\",\"imatating\":\"\",\"copying\":\"\",\"writing\":\"\",\"coloring\":\"\",\"painting\":\"\",\"cutting\":\"\",\"folding\":\"\",\"strength\":\"\"}', '{\"planning\":\"\",\"balance\":\"\",\"body\":\"\",\"strength\":\"\",\"reaction\":\"\"}', '{\"feeding\":\"\",\"dressing\":\"\",\"grooming\":\"\",\"bathing\":\"\",\"meal\":\"\"}', '2025-04-06 18:32:07', '2025-04-06 18:32:07');
INSERT INTO `grades` VALUES (4, 3, '{\"attention\":\"\",\"concentration\":\"\",\"tolerance\":\"\",\"impulse\":\"\",\"sitting\":\"\"}', '{\"name\":\"\",\"eye\":\"\",\"joint\":\"\",\"verbal\":\"\",\"cooperation\":\"\",\"activeListening\":\"\",\"flexibility\":\"\",\"decision\":\"\",\"manners\":\"\"}', '{\"match\":\"\",\"sort\":\"\",\"recognize\":\"\",\"identify\":\"\",\"instruction\":\"\"}', '{\"manipulation\":\"\",\"coordination\":\"\",\"tracing\":\"\",\"imatating\":\"\",\"copying\":\"\",\"writing\":\"\",\"coloring\":\"\",\"painting\":\"\",\"cutting\":\"\",\"folding\":\"\",\"strength\":\"\"}', '{\"planning\":\"\",\"balance\":\"\",\"body\":\"\",\"strength\":\"\",\"reaction\":\"\"}', '{\"feeding\":\"\",\"dressing\":\"\",\"grooming\":\"\",\"bathing\":\"\",\"meal\":\"\"}', '2025-04-09 20:38:34', '2025-04-09 20:38:34');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (2, '2024_12_12_123230_create_assignments_table', 1);
INSERT INTO `migrations` VALUES (3, '2024_12_12_123520_create_schedules_table', 1);
INSERT INTO `migrations` VALUES (4, '2024_12_12_123723_create_sessions_table', 1);
INSERT INTO `migrations` VALUES (5, '2024_12_12_123914_create_students_table', 1);
INSERT INTO `migrations` VALUES (6, '2024_12_12_124155_create_teachers_table', 1);
INSERT INTO `migrations` VALUES (7, '2024_12_12_171120_create_users_table', 1);
INSERT INTO `migrations` VALUES (8, '2024_12_15_233131_create_books_table', 1);
INSERT INTO `migrations` VALUES (10, '2025_03_19_185610_create_submissions_table', 1);
INSERT INTO `migrations` VALUES (11, '2025_04_05_040201_create_grades_table', 1);
INSERT INTO `migrations` VALUES (12, '2025_02_20_085510_create_evaluations_table', 2);

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for schedules
-- ----------------------------
DROP TABLE IF EXISTS `schedules`;
CREATE TABLE `schedules`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sessionID` int NOT NULL,
  `teacherID` int NOT NULL,
  `studentID` int NOT NULL,
  `classType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scheduleDate` date NOT NULL,
  `scheduleTime` timestamp NOT NULL,
  `meeting` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of schedules
-- ----------------------------

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `teacherID` int NOT NULL,
  `sessionID` int NOT NULL,
  `studentID` int NOT NULL,
  `details` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES (2, 1, 1, 3, 'sadasd', 'Active', '2025-04-10 05:58:46', '2025-04-10 05:58:46');
INSERT INTO `sessions` VALUES (4, 1, 1, 2, 'asdasd', 'Active', '2025-04-10 05:59:12', '2025-04-10 05:59:12');

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `studentID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactNumber` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardianEmail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnose_remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `course` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagePath` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES (2, 4, 'course1', 'Juan Dela Cruzz', 'sample', 'sa', 'sample@gmail.com', 'sample', '/data/evaluations/1743962220.pdf', '', 'course1', '/data/profiles/1743969335.png', '2025-04-06 17:57:00', '2025-04-06 17:57:00');
INSERT INTO `students` VALUES (3, 0, 'course1', 'Mak Moinee', 'sample', '09060624132', 'sample@gmail.com', 'smaple', '/data/evaluations/1744227091.pdf', '', 'course1', NULL, '2025-04-09 19:31:31', '2025-04-09 19:31:31');

-- ----------------------------
-- Table structure for submissions
-- ----------------------------
DROP TABLE IF EXISTS `submissions`;
CREATE TABLE `submissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `assignmentID` int NOT NULL,
  `document` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `rating` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of submissions
-- ----------------------------

-- ----------------------------
-- Table structure for teachers
-- ----------------------------
DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `contactNumber` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `occupation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `emailAddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `imagePath` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teachers
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`userID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'teacher', '$2y$12$vWqKKzDBkIl4Fpy6/5WWK.HqdmEynfxQcNAONBrHpWBnLdorjHJ0K', 'teacher', 'active', '2025-04-09 19:29:03', '2025-04-09 19:29:03');

-- ----------------------------
-- View structure for vweval
-- ----------------------------
DROP VIEW IF EXISTS `vweval`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vweval` AS select `evaluations`.`id` AS `id`,`evaluations`.`sessionID` AS `sessionID`,`evaluations`.`evaluation` AS `evaluation`,`evaluations`.`created_at` AS `created_at`,`evaluations`.`updated_at` AS `updated_at`,`sessions`.`studentID` AS `studentID` from (`evaluations` join `sessions` on((`evaluations`.`studentID` = `sessions`.`studentID`)));

-- ----------------------------
-- View structure for vwmyeval
-- ----------------------------
DROP VIEW IF EXISTS `vwmyeval`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwmyeval` AS select `evaluations`.`id` AS `id`,`evaluations`.`sessionID` AS `sessionID`,`evaluations`.`evaluation` AS `evaluation`,`evaluations`.`created_at` AS `created_at`,`evaluations`.`updated_at` AS `updated_at`,`sessions`.`details` AS `details`,`students`.`userID` AS `userID`,`students`.`name` AS `name` from ((`evaluations` join `sessions` on((`evaluations`.`sessionID` = `sessions`.`id`))) join `students` on((`sessions`.`studentID` = `students`.`id`)));

-- ----------------------------
-- View structure for vwstudentassignments
-- ----------------------------
DROP VIEW IF EXISTS `vwstudentassignments`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwstudentassignments` AS select `assignments`.`assignmentID` AS `assignmentID`,`assignments`.`teacherID` AS `teacherID`,`assignments`.`studentID` AS `studentID`,`assignments`.`sessionID` AS `sessionID`,`assignments`.`title` AS `title`,`assignments`.`dueDate` AS `dueDate`,`assignments`.`dueFrom` AS `dueFrom`,`assignments`.`dueTo` AS `dueTo`,`assignments`.`submissionType` AS `submissionType`,`assignments`.`filePath` AS `filePath`,`assignments`.`created_at` AS `created_at`,`assignments`.`updated_at` AS `updated_at`,`users`.`userID` AS `userID` from ((`users` join `students` on((`users`.`userID` = `students`.`userID`))) join `assignments` on((`students`.`id` = `assignments`.`studentID`)));

-- ----------------------------
-- View structure for vwstudentschedules
-- ----------------------------
DROP VIEW IF EXISTS `vwstudentschedules`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwstudentschedules` AS select `schedules`.`id` AS `id`,`schedules`.`sessionID` AS `sessionID`,`schedules`.`teacherID` AS `teacherID`,`schedules`.`studentID` AS `studentID`,`schedules`.`classType` AS `classType`,`schedules`.`scheduleDate` AS `scheduleDate`,`schedules`.`scheduleTime` AS `scheduleTime`,`schedules`.`meeting` AS `meeting`,`schedules`.`created_at` AS `created_at`,`schedules`.`updated_at` AS `updated_at`,`students`.`userID` AS `userID` from ((`users` join `students` on((`users`.`userID` = `students`.`userID`))) join `schedules` on((`students`.`id` = `schedules`.`studentID`)));

SET FOREIGN_KEY_CHECKS = 1;
