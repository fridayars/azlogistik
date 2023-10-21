/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : db_azlogistik

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 21/10/2023 16:19:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for master_golongan
-- ----------------------------
DROP TABLE IF EXISTS `master_golongan`;
CREATE TABLE `master_golongan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `golongan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gaji_pokok` int NULL DEFAULT NULL,
  `uang_kehadiran` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of master_golongan
-- ----------------------------
INSERT INTO `master_golongan` VALUES (1, 'A', 4800000, 50000);
INSERT INTO `master_golongan` VALUES (2, 'B', 5550000, 100000);
INSERT INTO `master_golongan` VALUES (3, 'C', 6400000, 150000);

-- ----------------------------
-- Table structure for master_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `master_karyawan`;
CREATE TABLE `master_karyawan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `golongan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of master_karyawan
-- ----------------------------
INSERT INTO `master_karyawan` VALUES (1, 'Trindy', '3517877609980009', 'B');
INSERT INTO `master_karyawan` VALUES (2, 'Nola', '3517877676650007', 'C');
INSERT INTO `master_karyawan` VALUES (3, 'Meilysa', '3517988998760003', 'A');

-- ----------------------------
-- Table structure for penggajian
-- ----------------------------
DROP TABLE IF EXISTS `penggajian`;
CREATE TABLE `penggajian`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `master_karyawan_id` int NULL DEFAULT NULL,
  `gaji_pokok` int NULL DEFAULT NULL,
  `jumlah_kehadiran` int NULL DEFAULT NULL,
  `jumlah_cuti` int NULL DEFAULT NULL,
  `jam_lembur` int NULL DEFAULT NULL,
  `hasil_thp` int NULL DEFAULT NULL,
  `uang_kehadiran` int NULL DEFAULT NULL,
  `uang_lembur` int NULL DEFAULT NULL,
  `potongan_absen` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penggajian
-- ----------------------------
INSERT INTO `penggajian` VALUES (1, 1, 5550000, 21, 8, 3, 7737000, 2100000, 87000, 0, '2023-10-21 13:38:25');
INSERT INTO `penggajian` VALUES (2, 2, 6400000, 20, 0, 7, 9058000, 3000000, 238000, 580000, '2023-10-21 13:38:50');
INSERT INTO `penggajian` VALUES (3, 3, 4800000, 22, 3, 2, 5950000, 1100000, 50000, 0, '2023-10-21 13:42:08');

SET FOREIGN_KEY_CHECKS = 1;
