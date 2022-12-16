/*
 Navicat Premium Data Transfer

 Source Server         : LocalDB
 Source Server Type    : MySQL
 Source Server Version : 100424 (10.4.24-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : starbucks

 Target Server Type    : MySQL
 Target Server Version : 100424 (10.4.24-MariaDB)
 File Encoding         : 65001

 Date: 28/11/2022 17:35:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cuti
-- ----------------------------
DROP TABLE IF EXISTS `cuti`;
CREATE TABLE `cuti`  (
  `cuti` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_karyawan_fk` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mulai_cuti` date NOT NULL,
  `akhir_cuti` date NOT NULL,
  PRIMARY KEY (`cuti`) USING BTREE,
  UNIQUE INDEX `unq_cuti_id_karyawan_fk`(`id_karyawan_fk` ASC) USING BTREE,
  CONSTRAINT `fk_cuti_data_karyawan` FOREIGN KEY (`id_karyawan_fk`) REFERENCES `data_karyawan` (`id_karyawan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cuti
-- ----------------------------
INSERT INTO `cuti` VALUES ('1', '1', '2022-02-26', '2022-02-27');
INSERT INTO `cuti` VALUES ('2', '2', '2022-02-26', '2022-02-27');
INSERT INTO `cuti` VALUES ('3', '3', '2022-03-02', '2022-03-05');
INSERT INTO `cuti` VALUES ('4', '4', '2022-03-08', '2022-03-10');

-- ----------------------------
-- Table structure for data_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `data_karyawan`;
CREATE TABLE `data_karyawan`  (
  `id_karyawan` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_posisi_fk` int NOT NULL,
  `id_golongan_fk` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_toko_fk` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_kelamin` binary(1) NOT NULL,
  `tempat_lahir` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `nomor_telepon` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agama` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_pernikahan` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_perekrutan` date NOT NULL,
  PRIMARY KEY (`id_karyawan`) USING BTREE,
  UNIQUE INDEX `unq_data_karyawan_id_posisi_fk`(`id_posisi_fk` ASC) USING BTREE,
  UNIQUE INDEX `unq_data_karyawan_id_golongan_fk`(`id_golongan_fk` ASC) USING BTREE,
  INDEX `fk_data_karyawan_properti`(`id_toko_fk` ASC) USING BTREE,
  CONSTRAINT `fk_data_karyawan_golongan` FOREIGN KEY (`id_golongan_fk`) REFERENCES `golongan` (`id_golongan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_data_karyawan_posisi` FOREIGN KEY (`id_posisi_fk`) REFERENCES `posisi` (`id_posisi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_data_karyawan_properti` FOREIGN KEY (`id_toko_fk`) REFERENCES `toko` (`id_toko`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = 'nomor ktp atau nomor induk kependudukan' ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of data_karyawan
-- ----------------------------
INSERT INTO `data_karyawan` VALUES ('1', 22, '1', '1', 'Giovanny Alberta', '162012133012', 'gvny06@gmail.com', 0x70, 'bondowoso', '2002-12-07', '085438151899', 'kristen', 'single', 'Jl. Mulyorejo Tengah No.19', '2022-01-01');
INSERT INTO `data_karyawan` VALUES ('2', 17, '2', '1', 'Najma Attaqiya Alya', '162012133015', 'najmaalya1901@gmail.com', 0x70, 'pasuruan', '2001-12-07', '085532131899', 'islam', 'single', 'Jl. Mulyorejo Tengah No.33', '2022-01-05');
INSERT INTO `data_karyawan` VALUES ('3', 18, '3', '1', 'Haffiyah Khayyiroh', '162012133036', 'haffiyah11@gmail.com', 0x70, 'bandung', '2001-12-06', '088632731879', 'islam', 'single', 'Jl. Pandeglang No.10', '2022-01-03');
INSERT INTO `data_karyawan` VALUES ('4', 15, '4', '1', 'Muhammad Hanif Sudibyo', '162012133040', 'hanifs77@gmail.com', 0x6C, 'pasuruan', '2001-12-07', '085442931899', 'islam', 'single', 'Jl. Kalijudan No.1', '2022-01-07');
INSERT INTO `data_karyawan` VALUES ('5', 20, '5', '1', 'Muhammad Farras Reswara', '162012133055', 'farrasres8@gmail.com', 0x6C, 'sidoarjo', '2001-12-09', '085218131779', 'islam', 'single', 'Jl. Abdul Korban No.88', '2022-01-10');

-- ----------------------------
-- Table structure for detail_pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `detail_pemesanan`;
CREATE TABLE `detail_pemesanan`  (
  `id_pemesanan_fk` int NOT NULL,
  `kode_produk_fk` int NOT NULL,
  `jumlah_pembelian` int UNSIGNED NOT NULL,
  INDEX `fk_detail_pemesanan_pemesanan`(`id_pemesanan_fk` ASC) USING BTREE,
  INDEX `fk_detail_pemesanan_produk`(`kode_produk_fk` ASC) USING BTREE,
  CONSTRAINT `fk_detail_pemesanan_pemesanan` FOREIGN KEY (`id_pemesanan_fk`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detail_pemesanan_produk` FOREIGN KEY (`kode_produk_fk`) REFERENCES `produk` (`kode_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of detail_pemesanan
-- ----------------------------
INSERT INTO `detail_pemesanan` VALUES (17, 116, 2);
INSERT INTO `detail_pemesanan` VALUES (17, 23, 3);
INSERT INTO `detail_pemesanan` VALUES (18, 37, 5);
INSERT INTO `detail_pemesanan` VALUES (18, 56, 2);
INSERT INTO `detail_pemesanan` VALUES (19, 5, 2);
INSERT INTO `detail_pemesanan` VALUES (20, 11, 1);
INSERT INTO `detail_pemesanan` VALUES (21, 5, 1);
INSERT INTO `detail_pemesanan` VALUES (21, 7, 1);
INSERT INTO `detail_pemesanan` VALUES (22, 5, 1);
INSERT INTO `detail_pemesanan` VALUES (23, 75, 1);
INSERT INTO `detail_pemesanan` VALUES (23, 41, 1);
INSERT INTO `detail_pemesanan` VALUES (24, 2, 1);
INSERT INTO `detail_pemesanan` VALUES (24, 8, 2);
INSERT INTO `detail_pemesanan` VALUES (24, 9, 2);
INSERT INTO `detail_pemesanan` VALUES (25, 1, 3);
INSERT INTO `detail_pemesanan` VALUES (25, 2, 1);
INSERT INTO `detail_pemesanan` VALUES (26, 1, 3);
INSERT INTO `detail_pemesanan` VALUES (27, 19, 3);
INSERT INTO `detail_pemesanan` VALUES (28, 5, 1);
INSERT INTO `detail_pemesanan` VALUES (29, 46, 1);
INSERT INTO `detail_pemesanan` VALUES (30, 1, 3);
INSERT INTO `detail_pemesanan` VALUES (31, 1, 3);
INSERT INTO `detail_pemesanan` VALUES (31, 3, 10);
INSERT INTO `detail_pemesanan` VALUES (32, 19, 3);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for golongan
-- ----------------------------
DROP TABLE IF EXISTS `golongan`;
CREATE TABLE `golongan`  (
  `id_golongan` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_golongan` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gaji_pokok` decimal(10, 0) UNSIGNED NOT NULL,
  `tunjangan_transport` decimal(10, 0) UNSIGNED NOT NULL,
  `tunjangan_makan` decimal(10, 0) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_golongan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of golongan
-- ----------------------------
INSERT INTO `golongan` VALUES ('1', 'Golongan 1', 15200000, 100000, 800000);
INSERT INTO `golongan` VALUES ('10', 'Golongan 10', 3700000, 100000, 925000);
INSERT INTO `golongan` VALUES ('11', 'Golongan 11', 3500000, 100000, 875000);
INSERT INTO `golongan` VALUES ('12', 'Golongan 12', 3400000, 100000, 850000);
INSERT INTO `golongan` VALUES ('13', 'Golongan 13', 3300000, 100000, 825000);
INSERT INTO `golongan` VALUES ('14', 'Golongan 14', 3200000, 100000, 800000);
INSERT INTO `golongan` VALUES ('15', 'Golongan 15', 3050000, 100000, 762500);
INSERT INTO `golongan` VALUES ('16', 'Golongan 16', 3000000, 100000, 750000);
INSERT INTO `golongan` VALUES ('17', 'Golongan 17', 2800000, 100000, 700000);
INSERT INTO `golongan` VALUES ('18', 'Golongan 18', 2700000, 100000, 675000);
INSERT INTO `golongan` VALUES ('19', 'Golongan 19', 2500000, 100000, 625000);
INSERT INTO `golongan` VALUES ('2', 'Golongan 2', 7200000, 100000, 1800000);
INSERT INTO `golongan` VALUES ('20', 'Golongan 20', 2400000, 100000, 600000);
INSERT INTO `golongan` VALUES ('3', 'Golongan 3', 6200000, 100000, 1550000);
INSERT INTO `golongan` VALUES ('4', 'Golongan 4', 5200000, 100000, 1300000);
INSERT INTO `golongan` VALUES ('5', 'Golongan 5', 4800000, 100000, 1200000);
INSERT INTO `golongan` VALUES ('6', 'Golongan 6', 4700000, 100000, 1175000);
INSERT INTO `golongan` VALUES ('7', 'Golongan 7', 4400000, 100000, 1100000);
INSERT INTO `golongan` VALUES ('8', 'Golongan 8', 4200000, 100000, 1050000);
INSERT INTO `golongan` VALUES ('9', 'Golongan 9', 3800000, 100000, 950000);

-- ----------------------------
-- Table structure for membership
-- ----------------------------
DROP TABLE IF EXISTS `membership`;
CREATE TABLE `membership`  (
  `id_member` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_telepon` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pembuatan` date NOT NULL DEFAULT current_timestamp,
  `saldo` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_member`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of membership
-- ----------------------------
INSERT INTO `membership` VALUES (1, 'bryant', 'laki-laki', '1996-06-05', 'Jl. Ngagel No. 21', 'Jawa Timur', '085567885432', '2022-01-20', '207000', '', '', '');
INSERT INTO `membership` VALUES (2, 'lala', 'perempuan', '1996-06-10', 'Jl. Suryo No. 21', 'Jawa Timur', '085567885432', '2022-01-19', '1000000', '', '', '');
INSERT INTO `membership` VALUES (3, 'angkasa', 'laki-laki', '1996-06-11', 'Jl. Ngagel No. 21', 'Jawa Timur', '085362995432', '2022-01-29', '750000', '', '', '');
INSERT INTO `membership` VALUES (4, 'botuna', 'laki-laki', '1999-06-05', 'Jl. Mulyosari No. 35', 'Jawa Timur', '088963825432', '2022-01-13', '1500000', '', '', '');
INSERT INTO `membership` VALUES (5, 'vincent', 'laki-laki', '2000-06-05', 'Jl. Merr No. 225', 'Jawa Timur', '083877885432', '2022-01-14', '2000000', '', '', '');
INSERT INTO `membership` VALUES (6, 'Painem', 'perempuan', '2022-10-19', 'Perumahan Green Land', NULL, '0895395039705', '2022-10-05', '-237000', 'bebeb123', 'bebeb@gmail.com', '$2y$10$KjjeFsIf2sIYwLnkryvVxuaqo47BrxTgerPfJJwpYUqb/wxN5M3D6');
INSERT INTO `membership` VALUES (7, 'Najma', 'perempuan', '2022-07-08', 'Perumahan Green Land', NULL, '08421742178', '2022-10-06', '-97000', 'kas_01_01', 'second@gmail.com', '$2y$10$vSfiwKh61XgVq/vlpCwTsujegrC5MPGGX14J2DEX5GlbTtGbwZyXe');
INSERT INTO `membership` VALUES (8, 'Johnyy', 'laki-laki', '2022-10-04', 'Perumahan Green Land', NULL, '084136431732', '2022-10-06', '0', 'kas_01_01', 'second@gmail.com', '$2y$10$MRSD2Wdbd27P8zYzcbqqZ.1nilSzBuNG1/cCrWtC2VZB2vK/8oCMK');
INSERT INTO `membership` VALUES (9, 'hanip', 'laki-laki', '2000-07-23', 'Perumahan Green Land', NULL, '0912473827482', '2022-10-07', '0', 'user123', 'haniiiiii@gmail.com', '$2y$10$CGHnaFpslJ85jnhEY6Al.utuOsEAr3KDABHNyyCUa.odklVbi7I4K');
INSERT INTO `membership` VALUES (10, 'Haffiyyah', 'perempuan', '2022-10-04', 'Perumahan Green Land', NULL, '8219823781632', '2022-10-07', '0', 'kas_01_01', 'second@gmail.com', '$2y$10$zC9pliAmGKOtkzAhhIwfyuDgRYNGK1jV4b02DPq/vZSOZnSfU0tUa');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for pembayaran_membership
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran_membership`;
CREATE TABLE `pembayaran_membership`  (
  `id_member_fk` int NOT NULL,
  `id_pemesanan_fk` int NOT NULL,
  INDEX `fk_pembayaran_membership_membership`(`id_member_fk` ASC) USING BTREE,
  INDEX `fk_pembayaran_membership_pemesanan`(`id_pemesanan_fk` ASC) USING BTREE,
  CONSTRAINT `fk_pembayaran_membership_membership` FOREIGN KEY (`id_member_fk`) REFERENCES `membership` (`id_member`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pembayaran_membership_pemesanan` FOREIGN KEY (`id_pemesanan_fk`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pembayaran_membership
-- ----------------------------
INSERT INTO `pembayaran_membership` VALUES (1, 6);
INSERT INTO `pembayaran_membership` VALUES (2, 7);
INSERT INTO `pembayaran_membership` VALUES (3, 8);
INSERT INTO `pembayaran_membership` VALUES (4, 9);
INSERT INTO `pembayaran_membership` VALUES (5, 10);
INSERT INTO `pembayaran_membership` VALUES (5, 11);
INSERT INTO `pembayaran_membership` VALUES (4, 12);
INSERT INTO `pembayaran_membership` VALUES (3, 13);
INSERT INTO `pembayaran_membership` VALUES (1, 14);

-- ----------------------------
-- Table structure for pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `pemesanan`;
CREATE TABLE `pemesanan`  (
  `id_pemesanan` int NOT NULL AUTO_INCREMENT,
  `id_member_fk` int NULL DEFAULT NULL,
  `id_karyawan_fk` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pemesanan` date NOT NULL DEFAULT current_timestamp,
  `tipe_pembayaran` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_pelanggan` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_pemesanan`) USING BTREE,
  INDEX `fk_pemesanan_data_karyawan`(`id_karyawan_fk` ASC) USING BTREE,
  INDEX `fk_pemesanan_membership`(`id_member_fk` ASC) USING BTREE,
  CONSTRAINT `fk_pemesanan_data_karyawan` FOREIGN KEY (`id_karyawan_fk`) REFERENCES `data_karyawan` (`id_karyawan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pemesanan_membership` FOREIGN KEY (`id_member_fk`) REFERENCES `membership` (`id_member`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pemesanan
-- ----------------------------
INSERT INTO `pemesanan` VALUES (1, 1, '2', '2022-02-01', 'tunai', 'budi');
INSERT INTO `pemesanan` VALUES (2, 2, '2', '2022-02-02', 'tunai', 'anto');
INSERT INTO `pemesanan` VALUES (3, 2, '2', '2022-02-03', 'tunai', 'ayang');
INSERT INTO `pemesanan` VALUES (4, 2, '2', '2022-02-04', 'tunai', 'bebeb');
INSERT INTO `pemesanan` VALUES (5, 2, '2', '2022-02-05', 'tunai', 'steven');
INSERT INTO `pemesanan` VALUES (6, 1, '2', '2022-02-06', 'membership', 'bryant');
INSERT INTO `pemesanan` VALUES (7, 2, '2', '2022-02-07', 'debit', 'lala');
INSERT INTO `pemesanan` VALUES (8, 3, '2', '2022-02-08', 'membership', 'angkasa');
INSERT INTO `pemesanan` VALUES (9, 4, '2', '2022-02-09', 'membership', 'botuna');
INSERT INTO `pemesanan` VALUES (10, 5, '2', '2022-02-10', 'tunai', 'vincent');
INSERT INTO `pemesanan` VALUES (11, 5, '2', '2022-02-11', 'membership', 'vincent');
INSERT INTO `pemesanan` VALUES (12, 4, '2', '2022-02-12', 'membership', 'botuna');
INSERT INTO `pemesanan` VALUES (13, 3, '2', '2022-02-13', 'membership', 'angkasa');
INSERT INTO `pemesanan` VALUES (14, 1, '2', '2022-02-14', 'membership', 'bryant');
INSERT INTO `pemesanan` VALUES (17, NULL, '1', '2022-10-05', 'tunai', 'BEBEB');
INSERT INTO `pemesanan` VALUES (18, NULL, '1', '2022-10-05', 'debit', 'John');
INSERT INTO `pemesanan` VALUES (19, NULL, '1', '2022-10-05', 'member', 'BEBEB');
INSERT INTO `pemesanan` VALUES (20, 6, '1', '2022-10-05', 'member', 'BEBEB');
INSERT INTO `pemesanan` VALUES (21, 6, '1', '2022-10-07', 'tunai', 'Alya');
INSERT INTO `pemesanan` VALUES (22, NULL, '1', '2022-10-07', 'debit', 'Farras');
INSERT INTO `pemesanan` VALUES (23, 10, '1', '2022-10-07', 'tunai', 'Fiyyah');
INSERT INTO `pemesanan` VALUES (24, 6, '1', '2022-10-07', 'tunai', 'Najma');
INSERT INTO `pemesanan` VALUES (25, 1, '1', '2022-10-07', 'tunai', 'Bryant');
INSERT INTO `pemesanan` VALUES (26, NULL, '1', '2022-10-07', 'debit', 'nia');
INSERT INTO `pemesanan` VALUES (27, 1, '1', '2022-10-07', 'tunai', 'Bryant');
INSERT INTO `pemesanan` VALUES (28, NULL, '1', '2022-10-07', 'debit', 'farrus');
INSERT INTO `pemesanan` VALUES (29, 1, '1', '2022-10-07', 'tunai', 'Fiyyah');
INSERT INTO `pemesanan` VALUES (30, 7, '1', '2022-10-07', 'member', 'Najma');
INSERT INTO `pemesanan` VALUES (31, 7, '1', '2022-10-07', 'tunai', 'Najma');
INSERT INTO `pemesanan` VALUES (32, 1, '1', '2022-10-07', 'tunai', 'Bryant');

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
-- Table structure for posisi
-- ----------------------------
DROP TABLE IF EXISTS `posisi`;
CREATE TABLE `posisi`  (
  `id_posisi` int NOT NULL,
  `id_golongan_fk` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_posisi` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_posisi`) USING BTREE,
  INDEX `unq_posisi_id_golongan_fk`(`id_golongan_fk` ASC) USING BTREE,
  CONSTRAINT `fk_posisi_golongan` FOREIGN KEY (`id_golongan_fk`) REFERENCES `golongan` (`id_golongan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of posisi
-- ----------------------------
INSERT INTO `posisi` VALUES (1, '12', 'Admin Gudang');
INSERT INTO `posisi` VALUES (2, '6', 'Application Support');
INSERT INTO `posisi` VALUES (3, '8', 'Auditor');
INSERT INTO `posisi` VALUES (4, '16', 'Barista');
INSERT INTO `posisi` VALUES (5, '19', 'Cook Helper');
INSERT INTO `posisi` VALUES (6, '18', 'Customer Service');
INSERT INTO `posisi` VALUES (7, '20', 'Crew');
INSERT INTO `posisi` VALUES (8, '18', 'CS Delivery Officer');
INSERT INTO `posisi` VALUES (9, '18', 'Driver');
INSERT INTO `posisi` VALUES (10, '9', 'Financial Controller');
INSERT INTO `posisi` VALUES (11, '7', 'Graphic Designer');
INSERT INTO `posisi` VALUES (12, '8', 'Hardware Specialist');
INSERT INTO `posisi` VALUES (13, '11', 'HR Insurance');
INSERT INTO `posisi` VALUES (14, '11', 'HR Officer');
INSERT INTO `posisi` VALUES (15, '9', 'Inventory Controller');
INSERT INTO `posisi` VALUES (16, '5', 'IT Support Officer');
INSERT INTO `posisi` VALUES (17, '16', 'Kasir');
INSERT INTO `posisi` VALUES (18, '3', 'Kepala Cabang');
INSERT INTO `posisi` VALUES (19, '4', 'Kepala Toko');
INSERT INTO `posisi` VALUES (20, '2', 'Legal Supervisor');
INSERT INTO `posisi` VALUES (21, '10', 'Management Trainee');
INSERT INTO `posisi` VALUES (22, '1', 'Manajer Area');
INSERT INTO `posisi` VALUES (23, '16', 'Pelaksana Gudang');
INSERT INTO `posisi` VALUES (24, '18', 'Pramuniaga (Penjaga Toko)');
INSERT INTO `posisi` VALUES (25, '11', 'Project Coordinator');
INSERT INTO `posisi` VALUES (26, '12', 'Project Maintenance');
INSERT INTO `posisi` VALUES (27, '10', 'Recruitment Selection Officer');
INSERT INTO `posisi` VALUES (28, '14', 'Sales');
INSERT INTO `posisi` VALUES (29, '18', 'Security');
INSERT INTO `posisi` VALUES (30, '19', 'SPG');
INSERT INTO `posisi` VALUES (31, '10', 'Staf Accounting');
INSERT INTO `posisi` VALUES (32, '14', 'Staf Admin');
INSERT INTO `posisi` VALUES (33, '13', 'Staf Advertising');
INSERT INTO `posisi` VALUES (34, '14', 'Staf Controlling');
INSERT INTO `posisi` VALUES (35, '12', 'Staf Finance');
INSERT INTO `posisi` VALUES (36, '12', 'Staf Front Desk');
INSERT INTO `posisi` VALUES (37, '12', 'Staf Marketing');
INSERT INTO `posisi` VALUES (38, '15', 'Staf Officer');
INSERT INTO `posisi` VALUES (39, '16', 'Staf Produksi');
INSERT INTO `posisi` VALUES (40, '17', 'Staf Writer');
INSERT INTO `posisi` VALUES (41, '14', 'Tax Officer');
INSERT INTO `posisi` VALUES (42, '14', 'Teknisi Coldroom');
INSERT INTO `posisi` VALUES (43, '19', 'Waitress');

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk`  (
  `kode_produk` int NOT NULL,
  `nama_produk` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tipe_produk_fk` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stok_tersedia` int UNSIGNED NULL DEFAULT NULL,
  `harga` int UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`kode_produk`) USING BTREE,
  INDEX `fk_produk_tipe_produk`(`tipe_produk_fk` ASC) USING BTREE,
  CONSTRAINT `fk_produk_tipe_produk` FOREIGN KEY (`tipe_produk_fk`) REFERENCES `tipe_produk` (`tipe_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES (1, '7 Seeds Cookie', 'bakery', 3, 39000);
INSERT INTO `produk` VALUES (2, 'Almond Croissant', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (3, 'Bagel Bites', 'bakery', 20, 37000);
INSERT INTO `produk` VALUES (4, 'Beef Sausages  &  Cheese Croissant', 'bakery', 0, 36000);
INSERT INTO `produk` VALUES (5, 'Cheese Bagles', 'bakery', 20, 32000);
INSERT INTO `produk` VALUES (6, 'Chocolate Croissant', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (7, 'Cinamon Roll', 'bakery', 20, 33000);
INSERT INTO `produk` VALUES (8, 'Cinnamon Chocolate Marble Cake', 'bakery', 20, 40000);
INSERT INTO `produk` VALUES (9, 'Espresso Brownie', 'bakery', 20, 29000);
INSERT INTO `produk` VALUES (10, 'Nutella Bombolone', 'bakery', 20, 39000);
INSERT INTO `produk` VALUES (11, 'Old Fashioned Blueberry Muffin', 'bakery', 20, 30000);
INSERT INTO `produk` VALUES (12, 'Peanut Butter Cornflakes Cookie', 'bakery', 20, 20000);
INSERT INTO `produk` VALUES (13, 'Pillow Glazed Doughnut', 'bakery', 20, 39000);
INSERT INTO `produk` VALUES (14, 'Raisin Oatmeal Scones', 'bakery', 20, 41000);
INSERT INTO `produk` VALUES (15, 'Spicy Tuna Bread', 'bakery', 20, 29000);
INSERT INTO `produk` VALUES (16, 'Srikaya Swirl Danish', 'bakery', 20, 40000);
INSERT INTO `produk` VALUES (17, 'Sumatra Chocolate Eclair', 'bakery', 20, 41000);
INSERT INTO `produk` VALUES (18, 'Triple Chocolate Muffin', 'bakery', 20, 39000);
INSERT INTO `produk` VALUES (19, 'Tuna Puff', 'bakery', 3, 28000);
INSERT INTO `produk` VALUES (20, 'Avocado Medley Cake', 'sweet & cakes', 0, 36000);
INSERT INTO `produk` VALUES (21, 'Classic Dark Chocolate Cake', 'sweet & cakes', 20, 39000);
INSERT INTO `produk` VALUES (23, 'New York Cheesecake', 'sweet & cakes', 20, 38000);
INSERT INTO `produk` VALUES (24, 'Oreo Cheesecake', 'sweet & cakes', 20, 17000);
INSERT INTO `produk` VALUES (25, 'Scarlet Velvet Cake', 'sweet & cakes', 20, 39000);
INSERT INTO `produk` VALUES (26, 'Starbucks Pandan Gula Aren Cake', 'sweet & cakes', 20, 29000);
INSERT INTO `produk` VALUES (27, 'Starbucks Vanilla Keju Cake', 'sweet & cakes', 20, 30000);
INSERT INTO `produk` VALUES (28, 'Via Red Velvet Roll Cake', 'sweet & cakes', 20, 29000);
INSERT INTO `produk` VALUES (29, 'Banana Cake', 'grab & go', 20, 21000);
INSERT INTO `produk` VALUES (30, 'Caramel Stroopwafel', 'grab & go', 20, 15000);
INSERT INTO `produk` VALUES (31, 'Chocolate Chip Cookies', 'grab & go', 20, 19000);
INSERT INTO `produk` VALUES (32, 'Chocolate Stroopwafel', 'grab & go', 20, 15000);
INSERT INTO `produk` VALUES (33, 'Juices', 'grab & go', 20, 21000);
INSERT INTO `produk` VALUES (34, 'Raisin Oatmeal Cookies', 'grab & go', 20, 20000);
INSERT INTO `produk` VALUES (35, 'Beef Filone', 'sandwiches', 20, 55000);
INSERT INTO `produk` VALUES (36, 'Classic Tuna Toastie', 'sandwiches', 20, 29000);
INSERT INTO `produk` VALUES (37, 'Grilled Smooked Beef & Cheese Decker', 'sandwiches', 20, 36000);
INSERT INTO `produk` VALUES (38, 'Peanut Butter Panini', 'sandwiches', 20, 41000);
INSERT INTO `produk` VALUES (39, 'Smoked Beef Mushroom & Cheese Panini', 'sandwiches', 20, 49000);
INSERT INTO `produk` VALUES (40, 'Trio Mixed Roll', 'sandwiches', 20, 44000);
INSERT INTO `produk` VALUES (41, 'Tuna Cheese Whole Wheat Panini', 'sandwiches', 20, 48000);
INSERT INTO `produk` VALUES (43, 'All Day Bfast Bun', 'sandwiches', 20, 55000);
INSERT INTO `produk` VALUES (44, 'Cheese Quiche', 'savory pies', 20, 37000);
INSERT INTO `produk` VALUES (45, 'Smoked Beef Quiche', 'savory pies', 20, 35000);
INSERT INTO `produk` VALUES (46, 'Asian Dolce Frappucino', 'blended beverage', 20, 52000);
INSERT INTO `produk` VALUES (47, 'Caramel Coffee Jelly Frappucino', 'blended beverage', 0, 57000);
INSERT INTO `produk` VALUES (48, 'Caramel Java Chip Frappucino', 'blended beverage', 30, 57000);
INSERT INTO `produk` VALUES (49, 'Coffee Frappucino', 'blended beverage', 0, 44000);
INSERT INTO `produk` VALUES (50, 'Dark Mocha Frappucino', 'blended beverage', 30, 57000);
INSERT INTO `produk` VALUES (51, 'Espresso Frappucino', 'blended beverage', 0, 48000);
INSERT INTO `produk` VALUES (52, 'Hazelnut Frappucino', 'blended beverage', 30, 50000);
INSERT INTO `produk` VALUES (53, 'Java Chip Frappucino', 'blended beverage', 0, 57000);
INSERT INTO `produk` VALUES (54, 'Mocha Frappucino', 'blended beverage', 30, 53000);
INSERT INTO `produk` VALUES (55, 'Mocha Jelly Frappucino', 'blended beverage', 0, 55000);
INSERT INTO `produk` VALUES (56, 'Caramel Cream Frappucino', 'blended beverage', 0, 57000);
INSERT INTO `produk` VALUES (57, 'Double Chocolate Cream Frappucino', 'blended beverage', 30, 55000);
INSERT INTO `produk` VALUES (58, 'Green Tea Cream Frappucino', 'blended beverage', 0, 55000);
INSERT INTO `produk` VALUES (59, 'Vanilla Cream Frappucino', 'blended beverage', 0, 55000);
INSERT INTO `produk` VALUES (60, 'Mango Passion Frappucino', 'blended beverage', 10, 47000);
INSERT INTO `produk` VALUES (61, 'Rapsberry Currant Frappucino', 'blended beverage', 0, 47000);
INSERT INTO `produk` VALUES (62, 'Cold Brew', 'brewed coffee', 30, 41000);
INSERT INTO `produk` VALUES (63, 'reshly Brewed Coffee', 'brewed coffee', 0, 23000);
INSERT INTO `produk` VALUES (64, 'Misto', 'brewed coffee', 20, 23000);
INSERT INTO `produk` VALUES (65, 'Vanilla Sweet Cream Cold Brew', 'brewed coffee', 0, 46000);
INSERT INTO `produk` VALUES (66, 'Caffe Americano', 'espresso beverages', 20, 34000);
INSERT INTO `produk` VALUES (67, 'Caffe Latte', 'espresso beverages', 0, 44000);
INSERT INTO `produk` VALUES (68, 'Caffe Mocha', 'espresso beverages', 0, 53000);
INSERT INTO `produk` VALUES (69, 'Cappucino', 'espresso beverages', 0, 44000);
INSERT INTO `produk` VALUES (70, 'Caramel Macchiato', 'espresso beverages', 0, 57000);
INSERT INTO `produk` VALUES (71, 'Cocoa Cappucino', 'espresso beverages', 0, 53000);
INSERT INTO `produk` VALUES (72, 'Cold Foam', 'espresso beverages', 30, 41000);
INSERT INTO `produk` VALUES (73, 'Double Shot Iced Shaken Espresso', 'espresso beverages', 0, 48000);
INSERT INTO `produk` VALUES (74, 'Espresso Con Panna', 'espresso beverages', 0, 45000);
INSERT INTO `produk` VALUES (75, 'Espresso Macchiato', 'espresso beverages', 30, 53000);
INSERT INTO `produk` VALUES (76, 'lat White', 'espresso beverages', 0, 44000);
INSERT INTO `produk` VALUES (77, 'Iced Espresso and Matcha Fusion', 'espresso beverages', 0, 53000);
INSERT INTO `produk` VALUES (78, 'Ristretto Bianco', 'espresso beverages', 0, 53000);
INSERT INTO `produk` VALUES (79, 'Signature Chocolate', 'milk and chocolate', 0, 50000);
INSERT INTO `produk` VALUES (80, 'Iced Shaken Lemonade Tea', 'tea', 0, 22000);
INSERT INTO `produk` VALUES (81, 'TEAVANA Chai Hot Tea', 'tea', 0, 22000);
INSERT INTO `produk` VALUES (82, 'TEAVANA Chamomile Hot Tea', 'tea', 0, 22000);
INSERT INTO `produk` VALUES (83, 'TEAVANA Citrus Mint Hot Tea', 'tea', 0, 22000);
INSERT INTO `produk` VALUES (84, 'TEAVANA Earl Grey Hot Tea', 'tea', 0, 22000);
INSERT INTO `produk` VALUES (85, 'TEAVANA English Breakfast Hot Tea', 'tea', 0, 22000);
INSERT INTO `produk` VALUES (86, 'TEAVANA Mint Blend Hot Tea', 'tea', 0, 22000);
INSERT INTO `produk` VALUES (87, 'Black Tea Latte', 'tea', 0, 22000);
INSERT INTO `produk` VALUES (88, 'Chai Tea Latte', 'tea', 0, 22000);
INSERT INTO `produk` VALUES (89, 'Earl Grey Tea Latte', 'tea', 0, 22000);
INSERT INTO `produk` VALUES (90, 'Green Tea Latte', 'tea', 0, 22000);
INSERT INTO `produk` VALUES (91, 'Cold Cup Translucent Mint', 'bulk', 75, 250000);
INSERT INTO `produk` VALUES (92, 'Cold Cup Cooper', 'bulk', 79, 425000);
INSERT INTO `produk` VALUES (93, 'Tumbler Wordmark Cooper', 'bulk', 75, 450000);
INSERT INTO `produk` VALUES (94, 'Tumbler Siren Art Cooper', 'bulk', 75, 450000);
INSERT INTO `produk` VALUES (95, 'Tumbler Matter Green', 'bulk', 75, 450000);
INSERT INTO `produk` VALUES (96, 'Waterbottle Green', 'bulk', 75, 395000);
INSERT INTO `produk` VALUES (97, 'Waterbottle Mint', 'bulk', 75, 395000);
INSERT INTO `produk` VALUES (98, 'Waterbottle Siren Art Mint', 'bulk', 75, 485000);
INSERT INTO `produk` VALUES (99, 'Waterbottle Siren Mint', 'bulk', 75, 500000);
INSERT INTO `produk` VALUES (100, 'Waterbottle Touple Siren Art', 'bulk', 75, 550000);
INSERT INTO `produk` VALUES (101, 'Waterbottle Wordmark Green', 'bulk', 75, 425000);
INSERT INTO `produk` VALUES (102, 'Straw Mint', 'bulk', 75, 150000);
INSERT INTO `produk` VALUES (103, 'To Go Food Box Green Round', 'bulk', 75, 250000);
INSERT INTO `produk` VALUES (104, 'Cold Cup Coffe Chery Siren', 'bulk', 75, 250000);
INSERT INTO `produk` VALUES (105, 'Waterbottle Mint Lid Siren', 'bulk', 75, 280000);
INSERT INTO `produk` VALUES (106, 'Waterbottle Green Siren with Sleeve', 'bulk', 75, 275000);
INSERT INTO `produk` VALUES (107, 'Waterbottle Green Lid', 'bulk', 75, 235000);
INSERT INTO `produk` VALUES (108, 'Waterbottle Mint Coffe Leaf with Sleeve', 'bulk', 75, 250000);
INSERT INTO `produk` VALUES (109, 'Reuse Cold Cup Green', 'bulk', 75, 99000);
INSERT INTO `produk` VALUES (110, 'Waterbottle Mint Siren', 'bulk', 75, 550000);
INSERT INTO `produk` VALUES (111, 'Cold Cup Siren with Stopper', 'bulk', 75, 435000);
INSERT INTO `produk` VALUES (112, 'Tumbler Green Siren', 'bulk', 75, 535000);
INSERT INTO `produk` VALUES (113, 'Waterbottle Green Cherry Leaf', 'bulk', 75, 365000);
INSERT INTO `produk` VALUES (114, 'Mug Green Desktop', 'bulk', 75, 375000);
INSERT INTO `produk` VALUES (115, 'Waterbottle Mint Coffe Leaf', 'bulk', 75, 430000);
INSERT INTO `produk` VALUES (116, 'Waterbottle Mint', 'bulk', 75, 400000);
INSERT INTO `produk` VALUES (117, 'Tumbler Black with Black Siren', 'bulk', 75, 450000);
INSERT INTO `produk` VALUES (118, 'Starbucks Tumbler 16ss Classic Bunny S11135756 Aut22 (Cold cup P', 'seasonal', 50, 600000);
INSERT INTO `produk` VALUES (119, 'Starbucks Tumbler 16 Bunnies On Yarn Balls S11135759 Aut22 (Tumb', 'seasonal', 50, 355000);
INSERT INTO `produk` VALUES (120, 'Starbucks Waterbottle 14oz Bunnies In Sweaters S11135767 Aut22 (', 'seasonal', 50, 325000);
INSERT INTO `produk` VALUES (121, 'Starbucks Waterbottle 12ss Classic Bunny S11135764 Aut22 (Waterb', 'seasonal', 50, 550000);
INSERT INTO `produk` VALUES (122, 'Starbucks Cold Cup 18ss Bunnies Knit The Mn S11135761 Aut22 (Col', 'seasonal', 50, 555000);
INSERT INTO `produk` VALUES (123, 'Starbucks Cold Cup 16oz Knitting Bunnies S11135763 Aut22 (Coldcu', 'seasonal', 50, 385000);
INSERT INTO `produk` VALUES (124, 'Starbucks Waterbottle 20ss Gradient Coral S11135742 Aut22 (Water', 'seasonal', 50, 565000);
INSERT INTO `produk` VALUES (125, 'Starbucks Cold Cup 24oz Jewel Mint Blue S11135741 Aut22 (Cold cu', 'seasonal', 50, 425000);
INSERT INTO `produk` VALUES (126, 'Starbucks Cold Cup 24oz Jewel Mint Blue S11135741 Aut22 (Cold cu', 'seasonal', 50, 425000);
INSERT INTO `produk` VALUES (127, 'Starbucks Tumbler 16oz Dreamy Coral S11135736 Aut22 (Tumbler Pla', 'seasonal', 50, 285000);
INSERT INTO `produk` VALUES (128, 'Starbucks Waterbottle 18oz Siren In Coral Sea S11135744 Aut22 (W', 'seasonal', 50, 300000);
INSERT INTO `produk` VALUES (129, 'Starbucks Tumbler 16ss Siren In Coral Sea S11135732 Aut22 (Tumbl', 'seasonal', 50, 550000);
INSERT INTO `produk` VALUES (130, 'Starbucks Tumbler 16ss Faceted Gradint Blue S11135735 Aut22 (Tum', 'seasonal', 50, 565000);
INSERT INTO `produk` VALUES (131, 'Starbucks Tumbler 16ss Anniversary Blnd 22 S11135536 Aut22 (Cold', 'seasonal', 50, 675000);
INSERT INTO `produk` VALUES (132, 'Starbucks Tumbler 16oz Siren In Coral Sea S11135737 Aut22 (Tumbl', 'seasonal', 50, 385000);
INSERT INTO `produk` VALUES (133, 'Starbucks Tumbler 16ss Siren On Coral Reef S11135730 Aut22 (Tumb', 'seasonal', 50, 675000);
INSERT INTO `produk` VALUES (134, 'Starbucks Tumbler 16Oz People Of Indonesia Indigenous Animal And', 'seasonal', 50, 455000);
INSERT INTO `produk` VALUES (135, 'Starbucks Tumbler 16Oz Landmark Of Indonesia S0606223 (Beauty Of', 'seasonal', 50, 455000);
INSERT INTO `produk` VALUES (136, 'Starbucks Tumbler 16Oz People Of Indonesia S0606220 Beauty Of In', 'seasonal', 50, 455000);
INSERT INTO `produk` VALUES (137, 'Starbucks Tumbler 16Oz Culture Of Indonesia S0606222 (Beauty Of ', 'seasonal', 50, 455000);
INSERT INTO `produk` VALUES (138, 'Starbucks Plastic Reusable Water Bottle 1 Liter Dreamy Day Desig', 'seasonal', 50, 109000);
INSERT INTO `produk` VALUES (139, 'Starbucks Plastic Reusable Water Bottle 1 Liter Design Coffee Ti', 'seasonal', 50, 109000);
INSERT INTO `produk` VALUES (140, 'Starbucks Plastic Reusable Water Bottle 1 Liter Design Under Wat', 'seasonal', 50, 109000);
INSERT INTO `produk` VALUES (141, 'Almond Whirl Choco Chips Danish', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (142, 'Butter Croissant', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (143, 'Canele', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (144, 'Choco Chips Pistachio Pocket', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (145, 'Choco Chunk Praline Muffin', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (146, 'Cinnamon Rolls', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (147, 'Gluten Free Almond Financier', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (148, 'Madeleine', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (149, 'Smoked Beef Emmental Croissant', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (150, 'Wild Berry Muffin', 'bakery', 20, 36000);
INSERT INTO `produk` VALUES (151, 'Apple and Cinnamon Crumble', 'sweet & cakes', 20, 36000);
INSERT INTO `produk` VALUES (152, 'Banana Maltine Eclairs', 'sweet & cakes', 20, 36000);
INSERT INTO `produk` VALUES (153, 'Carrot Walnut Cake', 'sweet & cakes', 20, 36000);
INSERT INTO `produk` VALUES (154, 'Chocolate Ganache Raspberry Cake', 'sweet & cakes', 20, 36000);
INSERT INTO `produk` VALUES (155, 'Espresso Brownies', 'sweet & cakes', 20, 36000);
INSERT INTO `produk` VALUES (156, 'Avocado Medley Cake', 'sweet & cakes', 20, 36000);
INSERT INTO `produk` VALUES (157, 'French Cherry Tart', 'sweet & cakes', 20, 36000);
INSERT INTO `produk` VALUES (158, 'Green Tea and Ogura Swiss Roll', 'sweet & cakes', 20, 36000);
INSERT INTO `produk` VALUES (159, 'Bahn Mie Chicken Baguette', 'sandwiches', 20, 55000);
INSERT INTO `produk` VALUES (160, 'Honey Mustard Roast Beef Focaccia', 'sandwiches', 20, 55000);
INSERT INTO `produk` VALUES (161, 'Mediterranean Chicken Sandwich', 'sandwiches', 20, 55000);
INSERT INTO `produk` VALUES (162, 'Smoked Beef Mushroom and Cheese Panini', 'sandwiches', 20, 55000);
INSERT INTO `produk` VALUES (163, 'Spicy Roast Beef Dark Ciabatta', 'sandwiches', 20, 55000);
INSERT INTO `produk` VALUES (164, 'Tuna Black Pepper Sour Dough Bread', 'sandwiches', 20, 55000);

-- ----------------------------
-- Table structure for tipe_produk
-- ----------------------------
DROP TABLE IF EXISTS `tipe_produk`;
CREATE TABLE `tipe_produk`  (
  `tipe_produk` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`tipe_produk`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tipe_produk
-- ----------------------------
INSERT INTO `tipe_produk` VALUES ('bakery', 'food', 'choose from baked goods that are thoughtfully crafted with high-quality ingredients and the oh-so-good taste you are craving');
INSERT INTO `tipe_produk` VALUES ('blended beverage', 'drink', '');
INSERT INTO `tipe_produk` VALUES ('brewed coffee', 'drink', 'artfully roasted and brewed fresh all day long, every day!');
INSERT INTO `tipe_produk` VALUES ('bulk', 'merchandise', 'anda bisa mendapatkan informasid an melakukan pemesanan merchandise official Starbucks dalam jumlah banyak untuk keperluan bisni');
INSERT INTO `tipe_produk` VALUES ('espresso beverages', 'drink', 'handcrated lattes, cappuccinos, macchiatos and more');
INSERT INTO `tipe_produk` VALUES ('grab & go', 'food', 'why not pick up something small to accompany your coffe?');
INSERT INTO `tipe_produk` VALUES ('milk and chocolate', 'drink', 'Chocolate and dairy milk, steamed together to create a hot chocolate fit for a chocaholic! Topped with whipped cream and dusted ');
INSERT INTO `tipe_produk` VALUES ('sandwiches', 'food', 'level-up lunch with fresh ingredients and irresistible combinations');
INSERT INTO `tipe_produk` VALUES ('savory pies', 'food', 'treat your palette with these appetizing savory pies');
INSERT INTO `tipe_produk` VALUES ('seasonal', 'merchandise', '');
INSERT INTO `tipe_produk` VALUES ('sweet & cakes', 'food', 'get your sweet tooth cravings filled here');
INSERT INTO `tipe_produk` VALUES ('tea', 'drink', 'As bold and Tea.jpg invigorating as the dawn of a bright new day. As smooth and sweet as your finest moments therein. Drink up a');

-- ----------------------------
-- Table structure for toko
-- ----------------------------
DROP TABLE IF EXISTS `toko`;
CREATE TABLE `toko`  (
  `id_toko` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kota` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `provinsi` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_telepon` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_toko`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of toko
-- ----------------------------
INSERT INTO `toko` VALUES ('1', 'Mulyorejo, Surabaya City, East Java 60115', 'Surabaya', 'Jawa Timur', '17562', '085648298151');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`username` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Najma Attaqiya Alya', 'kas_01_01', NULL, '$2y$10$e58LrmfLMEGKcrc9H/tlVeYLHQj7v1KNJszjUFpot2QtRYBe9FEtq', NULL, '2022-10-04 15:43:53', '2022-10-04 15:43:53');
INSERT INTO `users` VALUES (2, 'Giovanny Alberta', 'man_01_01', NULL, '$2y$10$iiVAvkUtGdDScZ6BxdqSJeANV9qbe8zTm33aZCAw9po9xzHRQKYWK', NULL, '2022-10-06 10:05:43', '2022-10-06 10:05:43');
INSERT INTO `users` VALUES (3, 'Admin', 'kas_01_02', NULL, '$2y$10$18PHPK0stgp8fRa1cdGKGud2uCb.1hRaLOIa/ZC71BoeC8HzRnp7.', NULL, '2022-11-19 07:55:38', '2022-11-19 07:55:38');
INSERT INTO `users` VALUES (4, 'Admin', 'man_01_02', NULL, '$2y$10$UV.zR8HJcrWtOeVnsK8Sre/S4HETPS5XcQtlfLjZRxByBW/af94oi', NULL, '2022-11-19 07:57:06', '2022-11-19 07:57:06');

SET FOREIGN_KEY_CHECKS = 1;
