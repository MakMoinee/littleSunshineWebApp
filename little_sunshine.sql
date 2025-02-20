/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : little_sunshine

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 20/02/2025 17:08:28
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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of assignments
-- ----------------------------
INSERT INTO `assignments` VALUES (3, 1, 4, 1, 'Sample Assignment', '2025-02-13', '2025-02-13 06:12:00', '2025-02-13 23:12:00', 'online', '/data/assignments/1739398362.pdf', '2025-02-12 22:12:42', '2025-02-12 22:12:42');
INSERT INTO `assignments` VALUES (4, 1, 4, 1, 'Assignment 2', '2025-02-13', '2025-02-13 06:12:00', '2025-02-13 23:12:00', 'online', '/data/assignments/1739398362.pdf', '2025-02-12 22:12:42', '2025-02-12 22:12:42');

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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of books
-- ----------------------------

-- ----------------------------
-- Table structure for evaluations
-- ----------------------------
DROP TABLE IF EXISTS `evaluations`;
CREATE TABLE `evaluations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sessionID` int NOT NULL,
  `evaluation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of evaluations
-- ----------------------------
INSERT INTO `evaluations` VALUES (1, 3, 'Good', '2025-02-20 09:01:41', '2025-02-20 09:01:41');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2024_12_12_123520_create_schedules_table', 3);
INSERT INTO `migrations` VALUES (5, '2024_12_12_123914_create_students_table', 5);
INSERT INTO `migrations` VALUES (7, '2024_12_12_171120_create_users_table', 6);
INSERT INTO `migrations` VALUES (10, '2024_12_12_123723_create_sessions_table', 8);
INSERT INTO `migrations` VALUES (11, '2024_12_12_123230_create_assignments_table', 9);
INSERT INTO `migrations` VALUES (12, '2024_12_15_233131_create_books_table', 10);
INSERT INTO `migrations` VALUES (14, '2024_12_12_124155_create_teachers_table', 11);
INSERT INTO `migrations` VALUES (15, '2025_02_20_085510_create_evaluations_table', 12);

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of schedules
-- ----------------------------
INSERT INTO `schedules` VALUES (1, 1, 1, 3, 'f2f', '2024-12-14', '2024-12-14 11:45:00', NULL, '2024-12-14 03:45:10', '2024-12-14 03:45:10');
INSERT INTO `schedules` VALUES (2, 1, 1, 4, 'f2f', '2025-02-13', '2025-02-13 08:00:00', NULL, '2025-02-12 20:18:21', '2025-02-12 20:18:21');

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES (3, 1, 1, 1, 'First Session', 'Active', '2025-02-12 22:03:26', '2025-02-12 22:03:26');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES (1, 6, 'course1', 'Kennen C Borbon', 'Kennen C Borbon', '09090464399', 'makmoinee@gmail.com', 'Door 10, San Jose Extension', '/data/evaluations/1740032272.pdf', '', 'course1', '2025-02-20 06:17:52', '2025-02-20 06:17:52');

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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teachers
-- ----------------------------
INSERT INTO `teachers` VALUES (1, 1, 'Sample Teacher', '123', NULL, 'sadasd', 'sample@gmail.com', NULL, '2025-02-12 20:09:42', '2025-02-12 20:09:42');

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
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'teacher', '$2y$12$VZXrDcvbpwnkfmdDW5veB.SqLZk2yIyONA33wTm2P2Bl7mL/WjU7q', 'teacher', 'active', '2024-12-14 09:32:51', '2024-12-14 09:32:55');
INSERT INTO `users` VALUES (2, 'sample', '$2y$12$h1JxES8KxoNrkBZL1WoV0.3uX2o24Dxe2CsVr89gxpXUnhEk3olBy', 'student', 'active', '2024-12-14 02:36:30', '2024-12-14 02:36:30');
INSERT INTO `users` VALUES (6, 'user1740032272', '$2y$12$FM6VLm7LqBTDQprnyR1d6eHivSCxQBz1y0oKe63aVstC4C79bTmU.', 'student', 'active', '2025-02-20 06:17:52', '2025-02-20 06:17:52');

-- ----------------------------
-- View structure for vweval
-- ----------------------------
DROP VIEW IF EXISTS `vweval`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vweval` AS select `evaluations`.`id` AS `id`,`evaluations`.`sessionID` AS `sessionID`,`evaluations`.`evaluation` AS `evaluation`,`evaluations`.`created_at` AS `created_at`,`evaluations`.`updated_at` AS `updated_at`,`sessions`.`studentID` AS `studentID` from (`evaluations` join `sessions` on((`evaluations`.`sessionID` = `sessions`.`id`)));

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
