/*
 Navicat Premium Data Transfer

 Source Server         : little_sunshine
 Source Server Type    : MySQL
 Source Server Version : 80041
 Source Host           : 16.176.5.160:3306
 Source Schema         : little_sunshine

 Target Server Type    : MySQL
 Target Server Version : 80041
 File Encoding         : 65001

 Date: 22/04/2025 16:30:07
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
  `instructions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
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
INSERT INTO `assignments` VALUES (2, 1, 2, 0, 'meow', 'meow meow meow', '2025-04-19', '2025-04-18 09:26:00', '2025-04-19 20:00:00', 'online', '/data/assignments/1744968360.jpg', '2025-04-18 09:26:00', '2025-04-18 09:26:00');
INSERT INTO `assignments` VALUES (4, 1, 3, 0, 'teaching', 'teach', '2025-04-20', '2025-04-18 16:43:43', '2025-04-20 16:00:00', 'online', '/data/assignments/1744994623.jpg', '2025-04-18 16:43:43', '2025-04-18 16:43:43');

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of evaluations
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grades
-- ----------------------------
INSERT INTO `grades` VALUES (1, 2, '{\"attention\":\"\",\"concentration\":\"\",\"tolerance\":\"\",\"impulse\":\"\",\"sitting\":\"\",\"comment\":\"asdasd\"}', '{\"name\":\"\",\"eye\":\"\",\"joint\":\"\",\"verbal\":\"\",\"cooperation\":\"\",\"activeListening\":\"\",\"flexibility\":\"\",\"decision\":\"\",\"manners\":\"\",\"comment\":\"sss\"}', '{\"match\":\"\",\"sort\":\"\",\"recognize\":\"\",\"identify\":\"\",\"instruction\":\"\",\"comment\":\"\"}', '{\"manipulation\":\"\",\"coordination\":\"\",\"tracing\":\"\",\"imatating\":\"\",\"copying\":\"\",\"writing\":\"\",\"coloring\":\"\",\"painting\":\"\",\"cutting\":\"\",\"folding\":\"\",\"strength\":\"\",\"comment\":\"\"}', '{\"planning\":\"\",\"balance\":\"\",\"body\":\"\",\"strength\":\"\",\"reaction\":\"\",\"comment\":\"\"}', '{\"feeding\":\"\",\"dressing\":\"\",\"grooming\":\"\",\"bathing\":\"\",\"meal\":\"\"}', '2025-04-18 16:29:54', '2025-04-18 16:29:54');
INSERT INTO `grades` VALUES (2, 1, '{\"attention\":\"good\",\"concentration\":\"good\",\"tolerance\":\"\",\"impulse\":\"\",\"sitting\":\"\",\"comment\":\"looooo\"}', '{\"name\":\"\",\"eye\":\"\",\"joint\":\"\",\"verbal\":\"\",\"cooperation\":\"\",\"activeListening\":\"\",\"flexibility\":\"\",\"decision\":\"\",\"manners\":\"\",\"comment\":\"hjaskdjhaskjaaaa\"}', '{\"match\":\"\",\"sort\":\"\",\"recognize\":\"\",\"identify\":\"\",\"instruction\":\"\",\"comment\":\"a\"}', '{\"manipulation\":\"\",\"coordination\":\"\",\"tracing\":\"\",\"imatating\":\"\",\"copying\":\"\",\"writing\":\"\",\"coloring\":\"\",\"painting\":\"\",\"cutting\":\"\",\"folding\":\"\",\"strength\":\"\",\"comment\":\"s\"}', '{\"planning\":\"\",\"balance\":\"\",\"body\":\"\",\"strength\":\"\",\"reaction\":\"\",\"comment\":\"d\"}', '{\"feeding\":\"\",\"dressing\":\"\",\"grooming\":\"\",\"bathing\":\"\",\"meal\":\"\",\"comment\":\"f\"}', '2025-04-18 16:29:54', '2025-04-18 16:29:54');
INSERT INTO `grades` VALUES (3, 3, '{\"attention\":\"\",\"concentration\":\"\",\"tolerance\":\"\",\"impulse\":\"\",\"sitting\":\"\",\"comment\":\"\"}', '{\"name\":\"\",\"eye\":\"\",\"joint\":\"\",\"verbal\":\"\",\"cooperation\":\"\",\"activeListening\":\"\",\"flexibility\":\"\",\"decision\":\"\",\"manners\":\"\",\"comment\":\"\"}', '{\"match\":\"\",\"sort\":\"\",\"recognize\":\"\",\"identify\":\"\",\"instruction\":\"\",\"comment\":\"\"}', '{\"manipulation\":\"\",\"coordination\":\"\",\"tracing\":\"\",\"imatating\":\"\",\"copying\":\"\",\"writing\":\"\",\"coloring\":\"\",\"painting\":\"\",\"cutting\":\"\",\"folding\":\"\",\"strength\":\"\",\"comment\":\"\"}', '{\"planning\":\"\",\"balance\":\"\",\"body\":\"\",\"strength\":\"\",\"reaction\":\"\",\"comment\":\"\"}', '{\"feeding\":\"\",\"dressing\":\"\",\"grooming\":\"\",\"bathing\":\"\",\"meal\":\"\",\"comment\":\"\"}', '2025-04-18 16:44:01', '2025-04-18 16:44:01');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `migrations` VALUES (9, '2025_02_20_085510_create_evaluations_table', 1);
INSERT INTO `migrations` VALUES (10, '2025_03_19_185610_create_submissions_table', 1);
INSERT INTO `migrations` VALUES (11, '2025_04_05_040201_create_grades_table', 1);
INSERT INTO `migrations` VALUES (12, '2025_04_18_015505_create_therapists_table', 2);

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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES (6, 1, 1, 1, 'Face to Face', 'Done', '2025-04-18 15:56:00', '2025-04-18 15:56:00');
INSERT INTO `sessions` VALUES (8, 1, 1, 2, 'online', 'Done', '2025-04-18 15:56:09', '2025-04-18 15:56:09');
INSERT INTO `sessions` VALUES (9, 1, 2, 2, 'ftf', 'Done', '2025-04-18 16:03:15', '2025-04-18 16:03:15');
INSERT INTO `sessions` VALUES (10, 1, 1, 3, 'online', 'Done', '2025-04-20 11:09:56', '2025-04-20 11:09:56');

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
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES (2, 3, 'course2', 'Jonas Reeve', 'Jonah Mindoro', '09123456789', 'raveruzel@gmail.com', 'Cabuyao Laguna', '/data/evaluations/1744968098.pdf', '', 'course2', NULL, 'asd', '2025-04-18 09:21:38', '2025-04-18 09:21:38');
INSERT INTO `students` VALUES (3, 4, 'course2', 'Ruzel Hernan', 'rhoda', '0921312479', 'c15-0640-114@uphsl.edu.ph', 'binan laguna', '/data/evaluations/1744994479.docx', '', 'course2', NULL, 'asd', '2025-04-18 16:41:19', '2025-04-18 16:41:19');

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of submissions
-- ----------------------------
INSERT INTO `submissions` VALUES (1, 2, 1, '/data/submissions/1744967039.mkv', NULL, NULL, '2025-04-18 09:03:59', '2025-04-18 09:03:59');
INSERT INTO `submissions` VALUES (2, 3, 2, '/data/submissions/1744968376.jpg', NULL, NULL, '2025-04-18 09:26:16', '2025-04-18 09:26:16');
INSERT INTO `submissions` VALUES (3, 2, 3, '/data/submissions/1744994341.jpg', NULL, NULL, '2025-04-18 16:39:01', '2025-04-18 16:39:01');
INSERT INTO `submissions` VALUES (4, 4, 4, '/data/submissions/1744994637.jpg', NULL, NULL, '2025-04-18 16:43:57', '2025-04-18 16:43:57');

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teachers
-- ----------------------------

-- ----------------------------
-- Table structure for therapists
-- ----------------------------
DROP TABLE IF EXISTS `therapists`;
CREATE TABLE `therapists`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `studentID` int NOT NULL,
  `assigned` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of therapists
-- ----------------------------
INSERT INTO `therapists` VALUES (1, 1, 'Marilex R. Moron', '2025-04-18 05:29:58', '2025-04-18 05:29:58');
INSERT INTO `therapists` VALUES (2, 2, 'Timothy James Codesal', '2025-04-18 09:23:57', '2025-04-18 09:23:57');
INSERT INTO `therapists` VALUES (3, 3, 'Marilex R. Moron', '2025-04-18 16:42:30', '2025-04-18 16:42:30');

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'teacher', '$2y$12$NPMnHiHeLk40Rx7W.E.7ouQSeJlztjQTJ0.sF6QuQGe7WW59ItrLy', 'teacher', 'active', '2025-04-18 02:32:53', '2025-04-18 02:32:53');
INSERT INTO `users` VALUES (3, 'user1744968230', '$2y$12$ODhefXXG8joFKQgKpFDhk.V0NXSqZcCNv6YhskJBKilUiEnUj41Ce', 'student', 'active', '2025-04-18 09:23:50', '2025-04-18 09:23:50');
INSERT INTO `users` VALUES (4, 'user1744994500', '$2y$12$GrDp7Uv5mkUDib.GUDq9d.IS9grdxy92Yh5frXsFZ1WA0fHHwygdu', 'student', 'active', '2025-04-18 16:41:41', '2025-04-18 16:41:41');

-- ----------------------------
-- View structure for vweval
-- ----------------------------
DROP VIEW IF EXISTS `vweval`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vweval` AS select `evaluations`.`id` AS `id`,`evaluations`.`sessionID` AS `sessionID`,`evaluations`.`evaluation` AS `evaluation`,`evaluations`.`created_at` AS `created_at`,`evaluations`.`updated_at` AS `updated_at`,`sessions`.`studentID` AS `studentID` from (`evaluations` join `sessions` on((`evaluations`.`studentID` = `sessions`.`studentID`)));

-- ----------------------------
-- View structure for vwmyeval
-- ----------------------------
DROP VIEW IF EXISTS `vwmyeval`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwmyeval` AS select `evaluations`.`id` AS `id`,`evaluations`.`sessionID` AS `sessionID`,`evaluations`.`evaluation` AS `evaluation`,`evaluations`.`created_at` AS `created_at`,`evaluations`.`updated_at` AS `updated_at`,`students`.`name` AS `name`,`students`.`userID` AS `userID` from (`evaluations` join `students` on((`evaluations`.`studentID` = `students`.`id`)));

-- ----------------------------
-- View structure for vwsessions
-- ----------------------------
DROP VIEW IF EXISTS `vwsessions`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwsessions` AS select `sessions`.`id` AS `id`,`sessions`.`teacherID` AS `teacherID`,`sessions`.`sessionID` AS `sessionID`,`sessions`.`studentID` AS `studentID`,`sessions`.`details` AS `details`,`sessions`.`status` AS `status`,`sessions`.`created_at` AS `created_at`,`sessions`.`updated_at` AS `updated_at`,`students`.`name` AS `name` from (`sessions` join `students` on((`sessions`.`studentID` = `students`.`id`)));

-- ----------------------------
-- View structure for vwstudentassignments
-- ----------------------------
DROP VIEW IF EXISTS `vwstudentassignments`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwstudentassignments` AS select `assignments`.`assignmentID` AS `assignmentID`,`assignments`.`teacherID` AS `teacherID`,`assignments`.`studentID` AS `studentID`,`assignments`.`sessionID` AS `sessionID`,`assignments`.`title` AS `title`,`assignments`.`dueDate` AS `dueDate`,`assignments`.`dueFrom` AS `dueFrom`,`assignments`.`dueTo` AS `dueTo`,`assignments`.`submissionType` AS `submissionType`,`assignments`.`filePath` AS `filePath`,`assignments`.`created_at` AS `created_at`,`assignments`.`updated_at` AS `updated_at`,`users`.`userID` AS `userID`,`assignments`.`instructions` AS `instructions` from ((`users` join `students` on((`users`.`userID` = `students`.`userID`))) join `assignments` on((`students`.`id` = `assignments`.`studentID`)));

-- ----------------------------
-- View structure for vwstudentschedules
-- ----------------------------
DROP VIEW IF EXISTS `vwstudentschedules`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwstudentschedules` AS select `schedules`.`id` AS `id`,`schedules`.`sessionID` AS `sessionID`,`schedules`.`teacherID` AS `teacherID`,`schedules`.`studentID` AS `studentID`,`schedules`.`classType` AS `classType`,`schedules`.`scheduleDate` AS `scheduleDate`,`schedules`.`scheduleTime` AS `scheduleTime`,`schedules`.`meeting` AS `meeting`,`schedules`.`created_at` AS `created_at`,`schedules`.`updated_at` AS `updated_at`,`students`.`userID` AS `userID` from ((`users` join `students` on((`users`.`userID` = `students`.`userID`))) join `schedules` on((`students`.`id` = `schedules`.`studentID`)));

SET FOREIGN_KEY_CHECKS = 1;
