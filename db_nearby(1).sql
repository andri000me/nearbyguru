-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Feb 2016 pada 08.09
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_nearby`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
`id_harga` int(11) NOT NULL,
  `id_mentor` int(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `harga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id_harga`, `id_mentor`, `id_mapel`, `harga`) VALUES
(1, 1, 1, 'Rp 50.000'),
(2, 2, 2, 'Rp 80.000'),
(3, 3, 3, 'Rp 60.000'),
(4, 4, 4, 'Rp 90.000'),
(5, 5, 5, 'Rp 70.000'),
(6, 6, 6, 'Rp 100.000'),
(7, 7, 7, 'Rp 100.000'),
(8, 8, 8, 'Rp 50.000'),
(9, 9, 9, 'Rp 50.000'),
(10, 10, 10, 'Rp 50.000'),
(11, 11, 11, 'Rp 60.000'),
(12, 12, 12, 'Rp 80.000'),
(13, 13, 13, 'Rp 90.000'),
(14, 14, 14, 'Rp 70.000'),
(15, 15, 15, 'Rp 70.000'),
(16, 16, 16, 'Rp 70.000'),
(17, 17, 17, 'Rp 80.000'),
(18, 18, 18, 'Rp 80.000'),
(19, 19, 19, 'Rp 100.000'),
(20, 20, 20, 'Rp 100.000'),
(21, 21, 21, 'Rp 50.000'),
(22, 22, 22, 'Rp 70.000'),
(23, 23, 23, 'Rp 90.000'),
(24, 24, 24, 'Rp 90.000'),
(25, 25, 25, 'Rp 90.000'),
(26, 26, 26, 'Rp 90.000'),
(27, 27, 27, 'Rp 70.000'),
(28, 28, 28, 'Rp 70.000'),
(29, 29, 29, 'Rp 70.000'),
(30, 30, 30, 'Rp 80.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_ketersediaan_mengajar`
--

CREATE TABLE IF NOT EXISTS `jadwal_ketersediaan_mengajar` (
  `id_mentor` int(10) NOT NULL,
`id_jadwal_ketersediaan` int(11) NOT NULL,
  `hari_ketersediaan` varchar(250) DEFAULT NULL,
  `waktu_ketersediaan` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_ketersediaan_mengajar`
--

INSERT INTO `jadwal_ketersediaan_mengajar` (`id_mentor`, `id_jadwal_ketersediaan`, `hari_ketersediaan`, `waktu_ketersediaan`) VALUES
(1, 1, 'Senin', '19:59:57'),
(2, 2, 'Kamis', '02:42:15'),
(3, 3, 'Selasa', '20:37:23'),
(4, 4, 'Jum''at', '12:32:18'),
(5, 5, 'Rabu', '06:34:57'),
(6, 6, 'Sabtu', '14:22:53'),
(7, 7, 'Sabtu', '13:23:48'),
(8, 8, 'Senin', '14:27:16'),
(9, 9, 'Senin', '13:13:33'),
(10, 10, 'Senin', '00:11:23'),
(11, 11, 'Selasa', '11:09:40'),
(12, 12, 'Kamis', '04:34:10'),
(13, 13, 'Jum''at', '22:00:56'),
(14, 14, 'Rabu', '09:24:39'),
(15, 15, 'Rabu', '03:56:32'),
(16, 16, 'Rabu', '16:08:01'),
(17, 17, 'Kamis', '10:45:07'),
(18, 18, 'Kamis', '14:59:20'),
(19, 19, 'Sabtu', '23:19:18'),
(20, 20, 'Sabtu', '22:17:36'),
(21, 21, 'Senin', '05:14:43'),
(22, 22, 'Rabu', '17:04:39'),
(23, 23, 'Jum''at', '05:47:22'),
(24, 24, 'Jum''at', '10:02:40'),
(25, 25, 'Jum''at', '09:08:39'),
(26, 26, 'Jum''at', '01:40:51'),
(27, 27, 'Rabu', '08:15:53'),
(28, 28, 'Rabu', '00:08:06'),
(29, 29, 'Rabu', '10:43:36'),
(30, 30, 'Kamis', '06:46:21'),
(31, 31, 'Kamis', '20:27:25'),
(32, 32, 'Selasa', '02:50:58'),
(33, 33, 'Selasa', '11:05:12'),
(34, 34, 'Selasa', '18:30:33'),
(35, 35, 'Sabtu', '09:17:29'),
(36, 36, 'Senin', '17:08:05'),
(37, 37, 'Senin', '23:05:47'),
(38, 38, 'Kamis', '08:44:26'),
(39, 39, 'Kamis', '22:53:45'),
(40, 40, 'Rabu', '18:47:19'),
(41, 41, 'Selasa', '02:43:17'),
(42, 42, 'Senin', '16:43:57'),
(43, 43, 'Jum''at', '06:41:09'),
(44, 44, 'Sabtu', '13:41:14'),
(45, 45, 'Senin', '02:40:53'),
(46, 46, 'Jum''at', '22:55:47'),
(47, 47, 'Kamis', '13:35:38'),
(48, 48, 'Selasa', '10:27:41'),
(49, 49, 'Rabu', '22:45:34'),
(50, 50, 'Senin', '13:30:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`id_kelas` int(11) NOT NULL,
  `id_harga` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `waktu_masuk` time DEFAULT NULL,
  `waktu_keluar` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_harga`, `id_siswa`, `waktu_masuk`, `waktu_keluar`) VALUES
(1, 1, 1, '03:12:17', '03:44:36'),
(2, 2, 2, '10:27:10', '10:32:36'),
(3, 3, 3, '07:45:44', '22:51:05'),
(4, 4, 4, '00:49:56', '20:02:45'),
(5, 5, 5, '10:45:24', '16:12:47'),
(6, 6, 6, '13:31:25', '02:07:44'),
(7, 7, 7, '04:33:41', '22:52:24'),
(8, 8, 8, '04:29:16', '01:40:02'),
(9, 9, 9, '13:41:33', '22:47:56'),
(10, 10, 10, '02:37:58', '07:25:57'),
(11, 11, 11, '18:03:27', '00:28:29'),
(12, 12, 12, '17:42:39', '12:46:15'),
(13, 13, 13, '20:51:28', '23:46:18'),
(14, 14, 14, '01:56:58', '14:37:53'),
(15, 15, 15, '12:17:33', '21:12:56'),
(16, 1, 16, '02:38:41', '15:38:11'),
(17, 2, 17, '06:54:30', '06:27:18'),
(18, 3, 18, '14:33:30', '02:19:59'),
(19, 4, 19, '08:35:48', '20:08:21'),
(20, 5, 20, '05:25:28', '05:44:37'),
(21, 6, 21, '03:20:49', '13:53:41'),
(22, 7, 22, '10:38:34', '04:40:48'),
(23, 8, 23, '10:53:35', '22:29:05'),
(24, 9, 24, '13:44:53', '05:10:38'),
(25, 10, 25, '19:55:33', '01:42:47'),
(26, 11, 26, '02:54:01', '21:23:04'),
(27, 12, 27, '13:26:46', '15:33:21'),
(28, 13, 28, '13:40:23', '05:46:52'),
(29, 14, 29, '05:55:00', '21:45:48'),
(30, 15, 30, '09:14:55', '05:16:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kualifikasi`
--

CREATE TABLE IF NOT EXISTS `kualifikasi` (
`id_kualifikasi` int(11) NOT NULL,
  `id_mentor` int(10) DEFAULT NULL,
  `nama_kualifikasi` varchar(250) DEFAULT NULL,
  `tambahan_kualifikasi` blob
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kualifikasi`
--

INSERT INTO `kualifikasi` (`id_kualifikasi`, `id_mentor`, `nama_kualifikasi`, `tambahan_kualifikasi`) VALUES
(1, 1, 'Sertifikat Juara 1 Padjadjaran Olympiad 2012\r\nSertifikat Juara 3 Indonesia Mathematics Competition 2011\r\nSertifikat Kegiatan Wisata Iptek dan Perkemahan Ilmiah Pelajar\r\nSertifikat LIA High-Intermediate Levels', 0x6d6920706564652c206e6f6e756d6d792075742c206d6f6c6573746965),
(2, 2, 'TOEFL ITP 590 \nTOEIC Listening and Reading 955 \nTOEIC Speaking and Writing 160 & 190 \nIjasah dan Transkrip Nilai', 0x6c696265726f2e2050726f696e),
(3, 3, 'Mendapatkan Beasiswa Sampoerna 2011-2014\r\nMengikuti Ujian Cambrige AS Level\r\nMendapatkan Juara 2 Tari Saman\r\nMengikuti Lomba Torpedo Challenge di ITB\r\nIjazah SMA', 0x657261742e20536564206e756e63206573742c),
(4, 4, 'Juara 3 kompetisi Matematika MGMP kelas 11 tingkat jakarta timur\r\nJuara 1 kompetisi Matematika MGMP kelas 12 tingkat jakarta timur.\r\nAsisten dosen mata kuliah\r\nAsisten dosen mata kuliah ', 0x61646970697363696e67206c6f626f727469732072697375732e),
(5, 5, 'IELTS Score 8.0 out of 9.0\r\nShaping the Way We Teach English, Path to Success in ELT by University of Oregon\r\nJoined seminar of Your Toolkit to Classroom Success by Pearson Education', 0x6d61676e612074656c6c7573206661756369627573206c656f2c20696e),
(6, 6, 'Sertifikat Juara 1 Padjadjaran Olympiad 2012\r\nSertifikat Juara 3 Indonesia Mathematics Competition 2011\r\nSertifikat Kegiatan Wisata Iptek dan Perkemahan Ilmiah Pelajar\r\nSertifikat LIA High-Intermediate Levels', 0x6e756e632e20496e20617420706564652e20437261732076756c7075746174652076656c69742065752073656d2e2050656c6c656e746573717565),
(7, 7, 'TOEFL ITP 590 \r\nTOEIC Listening and Reading 955 \r\nTOEIC Speaking and Writing 160 & 190 \r\nIjasah dan Transkrip Nilai', 0x76656c69742e2051756973717565207661726975732e204e616d20706f72747469746f72207363656c65726973717565),
(8, 8, 'Mendapatkan Beasiswa Sampoerna 2011-2014\r\nMengikuti Ujian Cambrige AS Level\r\nMendapatkan Juara 2 Tari Saman\r\nMengikuti Lomba Torpedo Challenge di ITB\r\nIjazah SMA', 0x65726f732e204e616d20636f6e736571756174),
(9, 9, 'Juara 3 kompetisi Matematika MGMP kelas 11 tingkat jakarta timur\r\nJuara 1 kompetisi Matematika MGMP kelas 12 tingkat jakarta timur.\r\nAsisten dosen mata kuliah\r\nAsisten dosen mata kuliah ', 0x7175616d2071756973206469616d2e2050656c6c656e746573717565206861626974616e74206d6f726269207472697374697175652073656e6563747573),
(10, 10, 'IELTS Score 8.0 out of 9.0\r\nShaping the Way We Teach English, Path to Success in ELT by University of Oregon\r\nJoined seminar of Your Toolkit to Classroom Success by Pearson Education', 0x746f72746f722c2064696374756d2065752c20706c61636572617420656765742c2076656e656e6174697320612c206d61676e612e204c6f72656d20697073756d),
(11, 11, 'Sertifikat Juara 1 Padjadjaran Olympiad 2012\r\nSertifikat Juara 3 Indonesia Mathematics Competition 2011\r\nSertifikat Kegiatan Wisata Iptek dan Perkemahan Ilmiah Pelajar\r\nSertifikat LIA High-Intermediate Levels', 0x4375726162697475722065676573746173),
(12, 12, 'TOEFL ITP 590\r\nTOEIC Listening and Reading 955\r\nTOEIC Speaking and Writing 160 & 190\r\nIjasah dan Transkrip Nilai', 0x7661726975732065742c20657569736d6f64),
(13, 13, 'Mendapatkan Beasiswa Sampoerna 2011-2014\r\nMengikuti Ujian Cambrige AS Level\r\nMendapatkan Juara 2 Tari Saman\r\nMengikuti Lomba Torpedo Challenge di ITB\r\nIjazah SMA', 0x696e2c2074656d7075732065752c206c6967756c612e2041656e65616e20657569736d6f64),
(14, 14, 'Juara 3 kompetisi Matematika MGMP kelas 11 tingkat jakarta timur\r\nJuara 1 kompetisi Matematika MGMP kelas 12 tingkat jakarta timur.\r\nAsisten dosen mata kuliah\r\nAsisten dosen mata kuliah', 0x757420697073756d206163206d6920656c656966656e6420656765737461732e205365642070686172657472612c2066656c6973),
(15, 15, 'IELTS Score 8.0 out of 9.0\r\nShaping the Way We Teach English, Path to Success in ELT by University of Oregon\r\nJoined seminar of Your Toolkit to Classroom Success by Pearson Education', 0x6d6f6e7465732c206e61736365747572207269646963756c7573206d75732e2050726f696e2076656c2061726375206575),
(16, 16, 'Sertifikat Juara 1 Padjadjaran Olympiad 2012\r\nSertifikat Juara 3 Indonesia Mathematics Competition 2011\r\nSertifikat Kegiatan Wisata Iptek dan Perkemahan Ilmiah Pelajar\r\nSertifikat LIA High-Intermediate Levels', 0x74656d706f7220626962656e64756d2e20446f6e65632066656c6973206f7263692c),
(17, 17, 'TOEFL ITP 590\r\nTOEIC Listening and Reading 955\r\nTOEIC Speaking and Writing 160 & 190\r\nIjasah dan Transkrip Nilai', 0x6e65632c20656c656966656e64206e6f6e2c20646170696275732072757472756d2c),
(18, 18, 'Mendapatkan Beasiswa Sampoerna 2011-2014\r\nMengikuti Ujian Cambrige AS Level\r\nMendapatkan Juara 2 Tari Saman\r\nMengikuti Lomba Torpedo Challenge di ITB\r\nIjazah SMA', 0x71756973206469616d206c7563747573206c6f626f727469732e20436c61737320617074656e742074616369746920736f63696f737175206164),
(19, 19, 'Juara 3 kompetisi Matematika MGMP kelas 11 tingkat jakarta timur\r\nJuara 1 kompetisi Matematika MGMP kelas 12 tingkat jakarta timur.\r\nAsisten dosen mata kuliah\r\nAsisten dosen mata kuliah', 0x736f64616c65732e),
(20, 20, 'IELTS Score 8.0 out of 9.0\r\nShaping the Way We Teach English, Path to Success in ELT by University of Oregon\r\nJoined seminar of Your Toolkit to Classroom Success by Pearson Education', 0x65752c20656c656966656e64206e65632c206d616c657375616461),
(21, 21, 'Sertifikat Juara 1 Padjadjaran Olympiad 2012\r\nSertifikat Juara 3 Indonesia Mathematics Competition 2011\r\nSertifikat Kegiatan Wisata Iptek dan Perkemahan Ilmiah Pelajar\r\nSertifikat LIA High-Intermediate Levels', 0x6e65717565207365642073656d206567657374617320626c616e6469742e204e616d206e756c6c61206d61676e612c206d616c6573756164612076656c2c),
(22, 22, 'TOEFL ITP 590\r\nTOEIC Listening and Reading 955\r\nTOEIC Speaking and Writing 160 & 190\r\nIjasah dan Transkrip Nilai', 0x6e756e632e20496e20617420706564652e20437261732076756c7075746174652076656c69742065752073656d2e),
(23, 23, 'Mendapatkan Beasiswa Sampoerna 2011-2014\r\nMengikuti Ujian Cambrige AS Level\r\nMendapatkan Juara 2 Tari Saman\r\nMengikuti Lomba Torpedo Challenge di ITB\r\nIjazah SMA', 0x616d657420616e74652e20566976616d7573206e6f6e),
(24, 24, 'Juara 3 kompetisi Matematika MGMP kelas 11 tingkat jakarta timur\r\nJuara 1 kompetisi Matematika MGMP kelas 12 tingkat jakarta timur.\r\nAsisten dosen mata kuliah\r\nAsisten dosen mata kuliah', 0x717569732c20706564652e205072616573656e74206575206475692e2043756d20736f63696973206e61746f7175652070656e617469627573206574),
(25, 25, 'IELTS Score 8.0 out of 9.0\r\nShaping the Way We Teach English, Path to Success in ELT by University of Oregon\r\nJoined seminar of Your Toolkit to Classroom Success by Pearson Education', 0x766f6c7574706174206e756e632073697420616d6574206d657475732e20416c697175616d),
(26, 26, 'Sertifikat Juara 1 Padjadjaran Olympiad 2012\r\nSertifikat Juara 3 Indonesia Mathematics Competition 2011\r\nSertifikat Kegiatan Wisata Iptek dan Perkemahan Ilmiah Pelajar\r\nSertifikat LIA High-Intermediate Levels', 0x416c697175616d206e69736c2e204e756c6c61),
(27, 27, 'TOEFL ITP 590\r\nTOEIC Listening and Reading 955\r\nTOEIC Speaking and Writing 160 & 190\r\nIjasah dan Transkrip Nilai', 0x626c616e6469742e204e616d),
(28, 28, 'Mendapatkan Beasiswa Sampoerna 2011-2014\r\nMengikuti Ujian Cambrige AS Level\r\nMendapatkan Juara 2 Tari Saman\r\nMengikuti Lomba Torpedo Challenge di ITB\r\nIjazah SMA', 0x646f6c6f7220656765737461732072686f6e6375732e2050726f696e),
(29, 29, 'Juara 3 kompetisi Matematika MGMP kelas 11 tingkat jakarta timur\r\nJuara 1 kompetisi Matematika MGMP kelas 12 tingkat jakarta timur.\r\nAsisten dosen mata kuliah\r\nAsisten dosen mata kuliah', 0x616e74652064696374756d206d692c206163206d61747469732076656c6974206a7573746f206e656320616e74652e204d616563656e6173),
(30, 30, 'IELTS Score 8.0 out of 9.0\r\nShaping the Way We Teach English, Path to Success in ELT by University of Oregon\r\nJoined seminar of Your Toolkit to Classroom Success by Pearson Education', 0x696163756c69732c206c6163757320706564652073616769747469732061756775652c),
(31, 31, 'Sertifikat Juara 1 Padjadjaran Olympiad 2012\r\nSertifikat Juara 3 Indonesia Mathematics Competition 2011\r\nSertifikat Kegiatan Wisata Iptek dan Perkemahan Ilmiah Pelajar\r\nSertifikat LIA High-Intermediate Levels', 0x696163756c697320616c6971756574206469616d2e20536564206469616d),
(32, 32, 'TOEFL ITP 590\r\nTOEIC Listening and Reading 955\r\nTOEIC Speaking and Writing 160 & 190\r\nIjasah dan Transkrip Nilai', 0x72686f6e6375732e204e756c6c616d),
(33, 33, 'Mendapatkan Beasiswa Sampoerna 2011-2014\r\nMengikuti Ujian Cambrige AS Level\r\nMendapatkan Juara 2 Tari Saman\r\nMengikuti Lomba Torpedo Challenge di ITB\r\nIjazah SMA', 0x6d61676e6120657420697073756d),
(34, 34, 'Juara 3 kompetisi Matematika MGMP kelas 11 tingkat jakarta timur\r\nJuara 1 kompetisi Matematika MGMP kelas 12 tingkat jakarta timur.\r\nAsisten dosen mata kuliah\r\nAsisten dosen mata kuliah', 0x566976616d75732073697420616d65742072697375732e20446f6e656320656765737461732e20416c697175616d206e656320656e696d2e),
(35, 35, 'IELTS Score 8.0 out of 9.0\r\nShaping the Way We Teach English, Path to Success in ELT by University of Oregon\r\nJoined seminar of Your Toolkit to Classroom Success by Pearson Education', 0x6665726d656e74756d2072697375732c206174206672696e67696c6c61),
(36, 36, 'Sertifikat Juara 1 Padjadjaran Olympiad 2012\r\nSertifikat Juara 3 Indonesia Mathematics Competition 2011\r\nSertifikat Kegiatan Wisata Iptek dan Perkemahan Ilmiah Pelajar\r\nSertifikat LIA High-Intermediate Levels', 0x646f6c6f7220656765737461732072686f6e6375732e2050726f696e206e69736c2073656d2c20636f6e736571756174206e65632c),
(37, 37, 'TOEFL ITP 590\r\nTOEIC Listening and Reading 955\r\nTOEIC Speaking and Writing 160 & 190\r\nIjasah dan Transkrip Nilai', 0x70656465206e656320616e746520626c616e64697420766976657272612e20446f6e65632074656d7075732c206c6f72656d206672696e67696c6c61206f726e617265),
(38, 38, 'Mendapatkan Beasiswa Sampoerna 2011-2014\r\nMengikuti Ujian Cambrige AS Level\r\nMendapatkan Juara 2 Tari Saman\r\nMengikuti Lomba Torpedo Challenge di ITB\r\nIjazah SMA', 0x696e20636f6e736571756174),
(39, 39, 'Juara 3 kompetisi Matematika MGMP kelas 11 tingkat jakarta timur\r\nJuara 1 kompetisi Matematika MGMP kelas 12 tingkat jakarta timur.\r\nAsisten dosen mata kuliah\r\nAsisten dosen mata kuliah', 0x6375727375732070757275732e204e756c6c616d207363656c65726973717565206e65717565),
(40, 40, 'IELTS Score 8.0 out of 9.0\r\nShaping the Way We Teach English, Path to Success in ELT by University of Oregon\r\nJoined seminar of Your Toolkit to Classroom Success by Pearson Education', 0x6c696265726f206e6563206c6967756c6120636f6e7365637465747565722072686f6e6375732e204e756c6c616d2076656c6974206475692c2073656d706572),
(41, 41, 'Sertifikat Juara 1 Padjadjaran Olympiad 2012\r\nSertifikat Juara 3 Indonesia Mathematics Competition 2011\r\nSertifikat Kegiatan Wisata Iptek dan Perkemahan Ilmiah Pelajar\r\nSertifikat LIA High-Intermediate Levels', 0x756c7472696365732c206d617572697320697073756d20706f72746120656c69742c20612066657567696174),
(42, 42, 'TOEFL ITP 590\r\nTOEIC Listening and Reading 955\r\nTOEIC Speaking and Writing 160 & 190\r\nIjasah dan Transkrip Nilai', 0x696e2c2068656e64726572697420636f6e7365637465747565722c206375727375732065742c206d61676e612e205072616573656e7420696e74657264756d206c6967756c61206575),
(43, 43, 'Mendapatkan Beasiswa Sampoerna 2011-2014\r\nMengikuti Ujian Cambrige AS Level\r\nMendapatkan Juara 2 Tari Saman\r\nMengikuti Lomba Torpedo Challenge di ITB\r\nIjazah SMA', 0x61646970697363696e672e204d6175726973206d6f6c6573746965207068617265747261206e6962682e20416c697175616d206f726e6172652c206c696265726f),
(44, 44, 'Juara 3 kompetisi Matematika MGMP kelas 11 tingkat jakarta timur\r\nJuara 1 kompetisi Matematika MGMP kelas 12 tingkat jakarta timur.\r\nAsisten dosen mata kuliah\r\nAsisten dosen mata kuliah', 0x6574206d616c6573756164612066616d6573),
(45, 45, 'IELTS Score 8.0 out of 9.0\r\nShaping the Way We Teach English, Path to Success in ELT by University of Oregon\r\nJoined seminar of Your Toolkit to Classroom Success by Pearson Education', 0x646f6c6f722e20467573636520666575676961742e204c6f72656d20697073756d20646f6c6f722073697420616d65742c),
(46, 46, 'Sertifikat Juara 1 Padjadjaran Olympiad 2012\r\nSertifikat Juara 3 Indonesia Mathematics Competition 2011\r\nSertifikat Kegiatan Wisata Iptek dan Perkemahan Ilmiah Pelajar\r\nSertifikat LIA High-Intermediate Levels', 0x50686173656c6c7573206f726e6172652e204675736365206d6f6c6c69732e20447569732073697420616d6574206469616d206575),
(47, 47, 'TOEFL ITP 590\r\nTOEIC Listening and Reading 955\r\nTOEIC Speaking and Writing 160 & 190\r\nIjasah dan Transkrip Nilai', 0x61632072697375732e204d6f726269206d657475732e),
(48, 48, 'Mendapatkan Beasiswa Sampoerna 2011-2014\r\nMengikuti Ujian Cambrige AS Level\r\nMendapatkan Juara 2 Tari Saman\r\nMengikuti Lomba Torpedo Challenge di ITB\r\nIjazah SMA', 0x6e756e632073656420706564652e2043756d20736f63696973206e61746f7175652070656e617469627573206574206d61676e6973),
(49, 49, 'Juara 3 kompetisi Matematika MGMP kelas 11 tingkat jakarta timur\r\nJuara 1 kompetisi Matematika MGMP kelas 12 tingkat jakarta timur.\r\nAsisten dosen mata kuliah\r\nAsisten dosen mata kuliah', 0x636f6e736563746574756572206d61757269732069642073617069656e2e204372617320646f6c6f72),
(50, 50, 'IELTS Score 8.0 out of 9.0\r\nShaping the Way We Teach English, Path to Success in ELT by University of Oregon\r\nJoined seminar of Your Toolkit to Classroom Success by Pearson Education', 0x756c74726963657320612c);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
`id_mapel` int(11) NOT NULL,
  `tingkat_mapel` varchar(250) DEFAULT NULL,
  `nama_mapel` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `tingkat_mapel`, `nama_mapel`) VALUES
(1, 'SD', 'Agama Budha'),
(2, 'SD', 'Agama Hindu'),
(3, 'SD', 'Agama Islam'),
(4, 'SD', 'Agama Katolik'),
(5, 'SD', 'Agama Kristen'),
(6, 'SD', 'Bahasa Arab'),
(7, 'SD', 'Bahasa Indonesia'),
(8, 'SD', 'Bahasa Inggris'),
(9, 'SD', 'IPA'),
(10, 'SD', 'IPS'),
(11, 'SD', 'Kewarganegaraan'),
(12, 'SD', 'Komputer'),
(13, 'SD', 'Matematika'),
(14, 'SD', 'Pengetahuan Umum'),
(15, 'SD', 'Seni Drama'),
(16, 'SD', 'Seni Musik'),
(17, 'SD', 'Seni Rupa'),
(18, 'SD', 'Seni Sastra'),
(19, 'SD', 'Seni Tari'),
(20, 'SMP/MTs', 'Agama Budha'),
(21, 'SMP/MTs', 'Agama Hindu'),
(22, 'SMP/MTs', 'Agama Islam'),
(23, 'SMP/MTs', 'Agama Katolik'),
(24, 'SMP/MTs', 'Agama Kristen'),
(25, 'SMP/MTs', 'Aqidah Akhlaq'),
(26, 'SMP/MTs', 'Bahasa Arab'),
(27, 'SMP/MTs', 'Bahasa Indonesia'),
(28, 'SMP/MTs', 'Bahasa Inggris'),
(29, 'SMP/MTs', 'Biologi'),
(30, 'SMP/MTs', 'Ekonomi'),
(31, 'SMP/MTs', 'Fiqih'),
(32, 'SMP/MTs', 'Fisika'),
(33, 'SMP/MTs', 'Geografi'),
(34, 'SMP/MTs', 'IPA'),
(35, 'SMP/MTs', 'Kewarganegaraan'),
(36, 'SMP/MTs', 'Kimia'),
(37, 'SMP/MTs', 'Komputer'),
(38, 'SMP/MTs', 'Matematika'),
(39, 'SMP/MTs', 'Sejarah'),
(40, 'SMP/MTs', 'Sejarah Islam'),
(41, 'SMP/MTs', 'Seni Drama'),
(42, 'SMP/MTs', 'Seni Musik'),
(43, 'SMP/MTs', 'Seni Rupa'),
(44, 'SMP/MTs', 'Seni Sastra'),
(45, 'SMP/MTs', 'Seni Tari'),
(46, 'SMP/MTs', 'Al-Quran Hadits'),
(47, 'SMP/MTs', 'Tata Busana'),
(48, 'SMA/MA/SMK', 'Administrasi Perkantoran'),
(49, 'SMA/MA/SMK', 'Agama Budha'),
(50, 'SMA/MA/SMK', 'Agama Hindu'),
(51, 'SMA/MA/SMK', 'Agama Islam'),
(52, 'SMA/MA/SMK', 'Agama Katolik'),
(53, 'SMA/MA/SMK', 'Agama Kristen'),
(54, 'SMA/MA/SMK', 'Akutansi'),
(55, 'SMA/MA/SMK', 'Aqidah Akhlaq'),
(56, 'SMA/MA/SMK', 'Bahasa Arab'),
(57, 'SMA/MA/SMK', 'Bahasa Indonesia'),
(58, 'SMA/MA/SMK', 'Bahasa Indonesia SNMPTN'),
(59, 'SMA/MA/SMK', 'Bahasa Inggris'),
(60, 'SMA/MA/SMK', 'Bahasa Inggris SNMPTN'),
(61, 'SMA/MA/SMK', 'Bahasa Jepang'),
(62, 'SMA/MA/SMK', 'Bahasa Jerman'),
(63, 'SMA/MA/SMK', 'Bahasa Mandarin'),
(64, 'SMA/MA/SMK', 'Bahasa Perancis'),
(65, 'SMA/MA/SMK', 'Bahasa Spanyol'),
(66, 'SMA/MA/SMK', 'Biologi'),
(67, 'SMA/MA/SMK', 'Biologi SNMPTN'),
(68, 'SMA/MA/SMK', 'Ekonomi'),
(69, 'SMA/MA/SMK', 'Ekonomi SNMPTN'),
(70, 'SMA/MA/SMK', 'Elektronika/Listrik'),
(71, 'SMA/MA/SMK', 'Fisika'),
(72, 'SMA/MA/SMK', 'Fisika SNMPTN'),
(73, 'SMA/MA/SMK', 'Geografi'),
(74, 'SMA/MA/SMK', 'Geografi SNMPTN'),
(75, 'SMA/MA/SMK', 'IPA Terpadu SNMPTN'),
(76, 'SMA/MA/SMK', 'IPS Terpadu SNMPTN'),
(77, 'SMA/MA/SMK', 'Kewarganegaraan'),
(78, 'SMA/MA/SMK', 'Kimia'),
(79, 'SMA/MA/SMK', 'Kimia SNMPTN'),
(80, 'SMA/MA/SMK', 'Komputer'),
(81, 'SMA/MA/SMK', 'Matematika'),
(82, 'SMA/MA/SMK', 'Matematika SNMPTN'),
(83, 'SMA/MA/SMK', 'Penulisan Karya Ilmiah'),
(84, 'SMA/MA/SMK', 'Sejarah'),
(85, 'SMA/MA/SMK', 'Sejarah Islam'),
(86, 'SMA/MA/SMK', 'Sejarah SNMPTN'),
(87, 'SMA/MA/SMK', 'Seni Drama'),
(88, 'SMA/MA/SMK', 'Seni Musik'),
(89, 'SMA/MA/SMK', 'Seni Rupa'),
(90, 'SMA/MA/SMK', 'Seni Sastra'),
(91, 'SMA/MA/SMK', 'Seni Tari'),
(92, 'SMA/MA/SMK', 'Sosiologi'),
(93, 'SMA/MA/SMK', 'Statistika'),
(94, 'SMA/MA/SMK', 'Al-Quran Hadits'),
(95, 'SMA/MA/SMK', 'Teknik Otomotif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menginginkan`
--

CREATE TABLE IF NOT EXISTS `menginginkan` (
  `id_siswa` int(11) NOT NULL,
  `id_wishlist` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentor`
--

CREATE TABLE IF NOT EXISTS `mentor` (
`id_mentor` int(10) NOT NULL,
  `nama_mentor` varchar(250) DEFAULT NULL,
  `no_identitas_mentor` varchar(250) DEFAULT NULL,
  `jenis_kelamin_mentor` varchar(250) DEFAULT NULL,
  `tempat_lahir_mentor` varchar(250) DEFAULT NULL,
  `tanggal_lahir_mentor` date DEFAULT NULL,
  `no_ponsel_mentor` varchar(250) DEFAULT NULL,
  `alamat_mentor` text,
  `email_mentor` varchar(250) DEFAULT NULL,
  `password_mentor` varchar(250) DEFAULT NULL,
  `pekerjaan_mentor` varchar(250) DEFAULT NULL,
  `bio_mentor` text,
  `tentang_mentor` text,
  `latitude_mentor` varchar(250) DEFAULT NULL,
  `longitude_mentor` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `nama_mentor`, `no_identitas_mentor`, `jenis_kelamin_mentor`, `tempat_lahir_mentor`, `tanggal_lahir_mentor`, `no_ponsel_mentor`, `alamat_mentor`, `email_mentor`, `password_mentor`, `pekerjaan_mentor`, `bio_mentor`, `tentang_mentor`, `latitude_mentor`, `longitude_mentor`) VALUES
(1, 'Steel Jennings', '1626110745299', 'L', 'Surabaya', '2015-01-15', '081234567890', '844-5877 Integer Av.', 'Donec.nibh.Quisque@Craseget.ca', 'GZJ27YZY5ZK', 'Mahasiswa', 'laoreet, libero et', 'ridiculus', '15.90628', '-49.43749'),
(2, 'Summer U. Daniel', '1648040712599', 'L', 'Yogyakarta', '2001-11-02', '081234567890', '526-349 In Ave', 'luctus.aliquet@vitaesodalesnisi.ca', 'JTV60QCJ8CB', 'Pelajar', 'enim nec', 'egestas, urna justo faucibus lectus, a', '-52.70192', '-76.55691'),
(3, 'Tamara Salinas', '1660010589699', 'L', 'Sidoarjo', '1991-01-19', '081234567890', 'P.O. Box 562, 174 Habitant Rd.', 'lectus.sit.amet@porttitorvulputateposuere.org', 'EGZ08CUA4KQ', 'Pelajar', 'Vestibulum', 'magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed', '4.31239', '-173.70657'),
(4, 'Tobias Nicholson', '1629121373099', 'L', 'Bandung', '1990-10-24', '081234567890', '728-1918 Nisi Rd.', 'tellus@non.net', 'URZ41KCY5XJ', 'Pelajar', 'id, blandit', 'ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor', '28.21347', '28.17226'),
(5, 'Uta F. Rosales', '1635021106799', 'L', 'Semarang', '1987-03-04', '081234567890', 'Ap #515-9229 Cum Road', 'eu@anteblanditviverra.edu', 'CNF79LGH9IE', 'Mahasiswa', 'egestas.', 'erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque', '47.88344', '99.69052'),
(6, 'Tamekah W. Mcintosh', '1677072604499', 'L', 'Jakarta', '1990-05-13', '081234567890', 'Ap #383-7443 Molestie Road', 'neque.non@auctorvelitAliquam.com', 'QCY62QLD4JX', 'Mahasiswa', 'quam a', 'dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem', '-65.99346', '39.75692'),
(7, 'Ignacia Jordan', '1656080377099', 'L', 'Jakarta', '2011-01-03', '081234567890', 'P.O. Box 737, 7944 Vitae Rd.', 'In.condimentum@sociisnatoquepenatibus.com', 'TVO47LPX3UR', 'Mahasiswa', 'a sollicitudin orci', 'quam vel sapien imperdiet ornare.', '69.35469', '163.93656'),
(8, 'Walter Raymond', '1676080276899', 'L', 'Surabaya', '2001-01-18', '081234567890', 'Ap #911-4386 Vel Ave', 'lorem.eu.metus@nuncacmattis.edu', 'AHG98IEX6OR', 'Mahasiswa', 'placerat. Cras dictum ultricies', 'Nunc mauris sapien,', '29.6205', '-25.80153'),
(9, 'Kennan F. Guerrero', '1676041810899', 'P', 'Surabaya', '1988-03-12', '081234567890', '317 Cum St.', 'consequat.purus.Maecenas@vestibulum.edu', 'EPP87SPH3HY', 'Mahasiswa', 'turpis non enim. Mauris quis turpis', 'Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis', '84.45542', '-23.27143'),
(10, 'Russell Mendoza', '1663110553199', 'P', 'Surabaya', '2011-07-12', '081234567890', '2530 Blandit Ave', 'volutpat.Nulla@non.co.uk', 'QRN56ZKY3KD', 'Mahasiswa', 'purus.', 'velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est.', '-26.64127', '-38.56206'),
(11, 'Stuart Garza', '1664021227699', 'P', 'Sidoarjo', '1988-10-29', '081234567890', '668-4382 Enim. Ave', 'egestas.urna@feugiatLoremipsum.co.uk', 'XAB99CEW8WF', 'Guru', 'elementum, dui quis accumsan convallis,', 'dolor.', '58.56173', '127.34446'),
(12, 'Maya Greer', '1655091984599', 'L', 'Yogyakarta', '1988-02-17', '081234567890', '959-2288 Ante Street', 'dignissim@maurisipsumporta.org', 'QWZ33FPF8ER', 'Guru', 'Nunc sollicitudin commodo ipsum. Suspendisse', 'amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh.', '15.34225', '-96.24096'),
(13, 'Tamara L. Leblanc', '1648021408299', 'L', 'Bandung', '2003-01-03', '081234567890', 'Ap #384-1853 Velit. Ave', 'elit@convallisdolorQuisque.net', 'MSQ05BZK1TF', 'Guru', 'metus.', 'dolor dolor,', '-15.83981', '-116.88262'),
(14, 'Shad Y. Fuentes', '1628021436399', 'L', 'Semarang', '1988-06-13', '081234567890', 'Ap #928-4653 Molestie St.', 'Nunc@hendrerit.org', 'CKC64KFL0FH', 'Pelajar', 'mollis. Duis sit amet', 'Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare', '82.5677', '-150.12362'),
(15, 'Edan U. West', '1657081196299', 'L', 'Semarang', '2009-12-19', '081234567890', 'P.O. Box 688, 5937 Metus. Rd.', 'dictum.eu@dictummiac.ca', 'LMU97ZFC3LF', 'Mahasiswa', 'fermentum risus, at', 'elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales', '21.76396', '-108.74531'),
(16, 'Shannon Rodriquez', '1678072258299', 'L', 'Semarang', '2013-09-25', '081234567890', '637-5294 Leo. Road', 'facilisi.Sed.neque@Phasellusfermentum.edu', 'GAH42QNI4LM', 'Mahasiswa', 'elit elit fermentum risus, at fringilla', 'est. Mauris eu turpis. Nulla aliquet.', '76.83377', '-135.80563'),
(17, 'Miriam Price', '1647062590699', 'P', 'Yogyakarta', '2001-02-20', '081234567890', '8943 Nunc Street', 'mauris.ipsum.porta@consectetueripsumnunc.org', 'VGF18YXD6NV', 'Mahasiswa', 'tempor erat neque non quam. Pellentesque', 'cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros non', '84.74727', '87.28026'),
(18, 'Kato E. Glass', '1665120755499', 'P', 'Yogyakarta', '1984-08-25', '081234567890', '168-3081 Vitae St.', 'et.nunc.Quisque@felisDonectempor.net', 'IUM28WJH4HK', 'Guru', 'velit', 'nibh. Phasellus', '-62.58559', '-96.71617'),
(19, 'Dacey S. Boyle', '1664121992099', 'L', 'Jakarta', '1994-04-04', '081234567890', '950-6368 Velit Av.', 'Cras.vehicula@Quisqueac.edu', 'ZUW92LNS2XE', 'Guru', 'adipiscing', 'dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum.', '-12.9665', '51.26683'),
(20, 'Nyssa N. Hensley', '1694081488999', 'L', 'Jakarta', '2005-04-19', '081234567890', '3914 Massa Rd.', 'ac.fermentum@Sed.ca', 'OJO40DGB0NW', 'Mahasiswa', 'vel, mauris. Integer sem', 'consectetuer euismod est arcu ac orci. Ut semper pretium neque.', '84.44606', '-105.42309'),
(21, 'Ila Butler', '1689110619299', 'P', 'Surabaya', '1985-08-23', '081234567890', 'Ap #646-1812 Mauris Rd.', 'eu.odio@sedpedenec.com', 'FCH32THF1MG', 'Mahasiswa', 'elit, pellentesque a, facilisis non,', 'metus. Aliquam erat volutpat.', '-20.99711', '9.06211'),
(22, 'Abel Hubbard', '1680012813899', 'L', 'Semarang', '1991-04-19', '081234567890', '5912 Penatibus Street', 'ac@Sedmalesuada.com', 'AKL85HBU9PS', 'Mahasiswa', 'luctus, ipsum leo elementum', 'consectetuer, cursus et, magna. Praesent interdum ligula eu enim.', '-79.37653', '10.51077'),
(23, 'Freya George', '1612051180699', 'P', 'Bandung', '1998-03-04', '081234567890', '6382 Magna. Ave', 'elit.pharetra.ut@vitaealiquam.edu', 'RNJ24YVJ5ZO', 'Mahasiswa', 'aliquet diam. Sed diam lorem, auctor', 'neque. Sed', '15.14', '-154.17532'),
(24, 'Cruz Byers', '1673091241299', 'L', 'Bandung', '2001-03-22', '081234567890', 'P.O. Box 592, 1249 Augue Road', 'lectus.justo.eu@Vestibulumanteipsum.net', 'LMG52STZ7ZX', 'SMA Gajah Mada', 'nibh.', 'molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet', '-46.8539', '-77.6781'),
(25, 'Jane M. Horne', '1632121520999', 'L', 'Bandung', '1985-03-23', '081234567890', '7842 Consectetuer Street', 'lacinia.vitae@a.com', 'RYL70UHV2AR', 'SMP Airlangga', 'elementum sem, vitae', 'Curabitur massa. Vestibulum accumsan', '8.83362', '25.04348'),
(26, 'Phelan Z. Cameron', '1619050262999', 'P', 'Bandung', '1997-11-26', '081234567890', 'Ap #219-4308 Urna Street', 'nibh.Aliquam@Vivamus.ca', 'ZKY32YXB0WN', 'Guru', 'vitae semper egestas, urna justo', 'pede. Nunc sed', '59.84524', '97.34255'),
(27, 'Raja Bernard', '1676041691799', 'L', 'Semarang', '1994-05-29', '081234567890', 'P.O. Box 947, 8633 Arcu St.', 'nibh.Aliquam@pedeSuspendissedui.edu', 'FFA96WHV9LH', 'Guru', 'volutpat nunc sit amet metus.', 'id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede.', '40.22601', '51.63196'),
(28, 'Jarrod R. Pugh', '1609082539499', 'P', 'Semarang', '2014-05-15', '081234567890', 'Ap #906-4755 Sem Rd.', 'augue.porttitor.interdum@nec.ca', 'KVC42ZKE7WH', 'Guru', 'id, libero. Donec consectetuer mauris', 'in consectetuer ipsum nunc id enim. Curabitur', '9.59469', '104.85323'),
(29, 'Thaddeus G. Morrow', '1669071615899', 'P', 'Semarang', '2001-06-07', '081234567890', 'P.O. Box 777, 1554 Et Rd.', 'diam.at.pretium@tempor.com', 'JYG03JHM1BE', 'Mahasiswa', 'mi, ac', 'risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus', '-71.76828', '39.83567'),
(30, 'Illiana Price', '1606062158799', 'P', 'Yogyakarta', '1989-06-07', '081234567890', 'Ap #931-276 Et, St.', 'pede@ultricesVivamus.net', 'LDY69YEM9XY', 'Mahasiswa', 'id risus quis diam', 'accumsan interdum', '85.83481', '39.56624'),
(31, 'Samuel C. Mack', '1618060203099', 'P', 'Yogyakarta', '2010-07-01', '081234567890', '541-2867 Vel, Road', 'auctor@Maurisvestibulum.edu', 'YCH44NKR7KS', 'Guru', 'quam, elementum at, egestas a,', 'accumsan', '77.38329', '-104.57615'),
(32, 'Daquan Harvey', '1680041774899', 'L', 'Sidoarjo', '1998-05-10', '081234567890', 'Ap #358-3736 Vestibulum Road', 'amet.diam.eu@imperdiet.net', 'WAE58YTN3XB', 'Pelajar', 'neque. In ornare sagittis', 'enim commodo hendrerit. Donec porttitor tellus non magna. Nam', '24.50518', '-67.13693'),
(33, 'Colton I. Hudson', '1602102725799', 'L', 'Sidoarjo', '2003-09-28', '081234567890', 'Ap #592-9165 Dolor. St.', 'Cras@ipsumsodales.edu', 'HZM81RIC6UU', 'Pramuniaga', 'Cras eu tellus eu augue porttitor', 'rutrum, justo. Praesent luctus. Curabitur egestas nunc sed', '-31.25466', '-102.71789'),
(34, 'Wade O. Hancock', '1618101035399', 'P', 'Sidoarjo', '1986-05-19', '081234567890', '811-6395 Blandit. St.', 'feugiat.metus@purusNullamscelerisque.org', 'LFS71KRW7VL', 'Guru', 'pellentesque. Sed dictum. Proin', 'nisl. Quisque fringilla euismod enim. Etiam', '67.24738', '63.05673'),
(35, 'Nora I. Hartman', '1623071850399', 'P', 'Jakarta', '2011-10-17', '081234567890', 'Ap #632-4087 Sagittis. Avenue', 'Sed.id@ametdiameu.ca', 'TMA19KHM3JR', 'Mahasiswa', 'sed, hendrerit', 'Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper,', '-38.94199', '-127.92622'),
(36, 'Nita A. Hampton', '1648040554999', 'L', 'Surabaya', '2003-09-25', '081234567890', '114-367 Feugiat St.', 'nisl@massaSuspendisseeleifend.com', 'GEA51LMP0CD', 'Mahasiswa', 'vel, mauris. Integer sem', 'egestas nunc sed', '-10.79611', '147.71497'),
(37, 'Gemma Forbes', '1601031555599', 'L', 'Surabaya', '2009-11-14', '081234567890', 'P.O. Box 503, 7409 Quisque Avenue', 'sociis.natoque.penatibus@sagittisplaceratCras.org', 'RIF70FWF0WT', 'Mahasiswa', 'Fusce fermentum fermentum arcu. Vestibulum', 'vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et netus', '-29.19859', '-143.75541'),
(38, 'Tanya Y. Hunter', '1670032541899', 'L', 'Yogyakarta', '2004-01-25', '081234567890', 'Ap #155-5517 Donec Street', 'eleifend@noncursusnon.co.uk', 'UYK03CGQ5KP', 'Mahasiswa', 'et netus et malesuada fames', 'mus. Donec', '-2.20821', '164.21254'),
(39, 'Ferdinand S. Payne', '1622092480799', 'L', 'Yogyakarta', '2009-01-23', '081234567890', 'Ap #540-6034 Vulputate, Street', 'Nunc@tellussemmollis.edu', 'VEV94CXV1DI', 'Mahasiswa', 'id magna et ipsum', 'ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed', '-44.13328', '-42.20146'),
(40, 'Kieran P. Walton', '1609060861899', 'P', 'Semarang', '1996-08-13', '081234567890', '603-3303 Sem Ave', 'risus.quis.diam@feugiatLorem.edu', 'TKL58YVB6RM', 'Guru', 'sociis', 'fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut', '-86.85419', '-168.7216'),
(41, 'Desirae Z. Langley', '1618021583699', 'L', 'Sidoarjo', '1981-09-21', '081234567890', 'P.O. Box 840, 4945 Accumsan Av.', 'interdum@gravidamauris.ca', 'SGA77YIT4NJ', 'Guru', 'rutrum lorem ac risus. Morbi metus.', 'dui, in sodales', '-81.62751', '-176.39352'),
(42, 'Abel Donovan', '1611011762999', 'P', 'Surabaya', '1991-01-17', '081234567890', 'Ap #641-778 Tellus. Ave', 'Nulla.dignissim@sociosquadlitora.co.uk', 'UQS83FBN9ZM', 'Pelajar', 'Nullam velit', 'quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '-52.26669', '-92.31603'),
(43, 'Breanna Simmons', '1644042131699', 'L', 'Bandung', '2012-10-26', '081234567890', '727-8530 Blandit Rd.', 'nec.quam.Curabitur@sapienAenean.ca', 'UTO31FSC3XW', 'Pelajar', 'ornare.', 'Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper', '14.40449', '-131.98514'),
(44, 'Andrew Morales', '1621050511499', 'P', 'Jakarta', '2000-05-14', '081234567890', 'Ap #295-1245 Ipsum Road', 'eget.odio@seddui.com', 'QAQ06BZB8AB', 'Guru', 'Integer eu lacus. Quisque', 'pellentesque massa', '86.69323', '-50.86025'),
(45, 'Josiah Wheeler', '1609021282499', 'P', 'Surabaya', '1994-02-21', '081234567890', '594-3000 Ut, Street', 'malesuada.ut@mauris.com', 'ITM46ABL2PG', 'Pelajar', 'aliquet. Phasellus fermentum convallis', 'cubilia Curae; Phasellus ornare.', '-7.64441', '-81.05609'),
(46, 'Ifeoma Carpenter', '1649101188999', 'L', 'Bandung', '1988-02-27', '081234567890', '2866 Lacinia Avenue', 'neque@arcuiaculis.com', 'GKO71UHG7FM', 'Mahasiswa', 'quis diam luctus', 'in sodales elit erat vitae risus. Duis a mi fringilla mi', '-67.66314', '59.65469'),
(47, 'Gareth Puckett', '1662010792299', 'L', 'Yogyakarta', '2007-04-08', '081234567890', 'P.O. Box 453, 9828 Massa Avenue', 'cursus@mi.net', 'XQW23BXC0XC', 'Mahasiswa', 'sem egestas blandit. Nam', 'Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris', '62.1728', '-22.53494'),
(48, 'Shelly Woods', '1600092171299', 'P', 'Sidoarjo', '1980-04-25', '081234567890', 'Ap #622-852 Donec St.', 'Mauris.eu.turpis@fermentumconvallisligula.ca', 'LXY77PGO0OC', 'Guru', 'Ut tincidunt vehicula risus. Nulla', 'lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.', '77.28348', '22.99849'),
(49, 'Michael Calderon', '1611011792199', 'P', 'Semarang', '1996-02-12', '081234567890', 'P.O. Box 183, 6553 Etiam Street', 'ipsum.dolor@bibendumsedest.org', 'NKG00DCQ0YC', 'Mahasiswa', 'nunc. In', 'semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices', '-6.84271', '2.4126'),
(50, 'Odessa E. Mullins', '1686060921699', 'P', 'Surabaya', '1985-02-19', '081234567890', 'Ap #697-2432 Tempus St.', 'rutrum.non.hendrerit@lectus.org', 'LAP34IKX6DQ', 'Pelajar', 'nunc', 'lacus. Quisque purus sapien, gravida non, sollicitudin a,', '-62.12602', '-111.97394');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman_mengajar`
--

CREATE TABLE IF NOT EXISTS `pengalaman_mengajar` (
`id_pengalaman` int(10) NOT NULL,
  `id_mentor` int(10) DEFAULT NULL,
  `nama_pengalaman` text
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengalaman_mengajar`
--

INSERT INTO `pengalaman_mengajar` (`id_pengalaman`, `id_mentor`, `nama_pengalaman`) VALUES
(1, 1, 'Bimbel Primagama (Bahasa Inggris)\r\nBimbel Ugama Jogja, 2008\r\nO-Friends Rumah Belajar, 2009-2015'),
(2, 2, 'English Tutor - Alfalink Overseas Studies & English Course, Malang & Surabaya\r\nEnglish Language Tutor - Margi Alit, Salatiga'),
(3, 3, 'Asisten Kalkulus FTUI 2013\r\nAsisten Aljabar linier FTUI 2013\r\nAsisten Aljabar linier FTUI 2014\r\nAsisten NME DTKUI 2014'),
(4, 4, '2014-2015 asisten dosen mata kuliah\r\n2014-2015 asisten dosen mata kuliah\r\nMengajar matematika SMA di salah satu bimbingan belajar\r\nAsisten Lab Telekomunikasi UI'),
(5, 5, 'Guru bimbel Fisika dan Matematika\r\nVoulenteer mengajar di SD Caringin, Bogor'),
(6, 6, 'Asisten Laboratorium Telekomunikasi 2015\r\nAsisten Dosen Kalkulus FTUI 2014\r\nPengajar Responsi Aljabar Linier 2014\r\nPengajar Responsi Rangkaian Listrik 2014\r\nPengajar Responsi Mikroprosesor 2014\r\nPengajar Student Club Matematika 2012'),
(7, 7, 'Bimbingan Belajar Smarta Medika Surabaya (2007-sekarang)\r\nLes Privat Pribadi (2007-sekarang)'),
(8, 8, 'Bimbingan belajar Privat SMP 2011'),
(9, 9, 'Tahun 2009 - 2011 : mengajar privat SMP dan SMA di Surabaya dan Sidoarjo\r\ntahun 2012 - sekarang : Mengajar Fisika SMA di MBI Amanatul Ummah, Pacet Mojokerto'),
(10, 10, '2013-sekarang : mengajar di suatu LBB sebagai tentor MIPA SD/SMP/SMA\r\n2013-sekarang : mengajar ekstrakulikuler IPA di SMP Negeri di Surabaya\r\n2013-sekarang : mengajar ekstrakulikuler Karya Ilmiah di SMP Negeri dan SMA Negeri di Surabaya\r\nkuliah-sekarang : mengajar privat/kelompok MIPA SD/SMP/SMA hingga fokus SBMPTN'),
(11, 11, 'Bimbel Primagama (Bahasa Inggris)\r\nBimbel Ugama Jogja, 2008\r\nO-Friends Rumah Belajar, 2009-2015'),
(12, 12, 'English Tutor - Alfalink Overseas Studies & English Course, Malang & Surabaya\r\nEnglish Language Tutor - Margi Alit, Salatiga'),
(13, 13, 'Asisten Kalkulus FTUI 2013\r\nAsisten Aljabar linier FTUI 2013\r\nAsisten Aljabar linier FTUI 2014\r\nAsisten NME DTKUI 2014'),
(14, 14, '2014-2015 asisten dosen mata kuliah\r\n2014-2015 asisten dosen mata kuliah\r\nMengajar matematika SMA di salah satu bimbingan belajar\r\nAsisten Lab Telekomunikasi UI'),
(15, 15, 'Guru bimbel Fisika dan Matematika\r\nVoulenteer mengajar di SD Caringin, Bogor'),
(16, 16, 'Asisten Laboratorium Telekomunikasi 2015\r\nAsisten Dosen Kalkulus FTUI 2014\r\nPengajar Responsi Aljabar Linier 2014\r\nPengajar Responsi Rangkaian Listrik 2014\r\nPengajar Responsi Mikroprosesor 2014\r\nPengajar Student Club Matematika 2012'),
(17, 17, 'Bimbingan Belajar Smarta Medika Surabaya (2007-sekarang)\r\nLes Privat Pribadi (2007-sekarang)'),
(18, 18, 'Bimbingan belajar Privat SMP 2011'),
(19, 19, 'Tahun 2009 - 2011 : mengajar privat SMP dan SMA di Surabaya dan Sidoarjo\r\ntahun 2012 - sekarang : Mengajar Fisika SMA di MBI Amanatul Ummah, Pacet Mojokerto'),
(20, 20, '2013-sekarang : mengajar di suatu LBB sebagai tentor MIPA SD/SMP/SMA\r\n2013-sekarang : mengajar ekstrakulikuler IPA di SMP Negeri di Surabaya\r\n2013-sekarang : mengajar ekstrakulikuler Karya Ilmiah di SMP Negeri dan SMA Negeri di Surabaya\r\nkuliah-sekarang : mengajar privat/kelompok MIPA SD/SMP/SMA hingga fokus SBMPTN'),
(21, 21, 'Bimbel Primagama (Bahasa Inggris)\r\nBimbel Ugama Jogja, 2008\r\nO-Friends Rumah Belajar, 2009-2015'),
(22, 22, 'English Tutor - Alfalink Overseas Studies & English Course, Malang & Surabaya\r\nEnglish Language Tutor - Margi Alit, Salatiga'),
(23, 23, 'Asisten Kalkulus FTUI 2013\r\nAsisten Aljabar linier FTUI 2013\r\nAsisten Aljabar linier FTUI 2014\r\nAsisten NME DTKUI 2014'),
(24, 24, '2014-2015 asisten dosen mata kuliah\r\n2014-2015 asisten dosen mata kuliah\r\nMengajar matematika SMA di salah satu bimbingan belajar\r\nAsisten Lab Telekomunikasi UI'),
(25, 25, 'Guru bimbel Fisika dan Matematika\r\nVoulenteer mengajar di SD Caringin, Bogor'),
(26, 26, 'Asisten Laboratorium Telekomunikasi 2015\r\nAsisten Dosen Kalkulus FTUI 2014\r\nPengajar Responsi Aljabar Linier 2014\r\nPengajar Responsi Rangkaian Listrik 2014\r\nPengajar Responsi Mikroprosesor 2014\r\nPengajar Student Club Matematika 2012'),
(27, 27, 'Bimbingan Belajar Smarta Medika Surabaya (2007-sekarang)\r\nLes Privat Pribadi (2007-sekarang)'),
(28, 28, 'Bimbingan belajar Privat SMP 2011'),
(29, 29, 'Tahun 2009 - 2011 : mengajar privat SMP dan SMA di Surabaya dan Sidoarjo\r\ntahun 2012 - sekarang : Mengajar Fisika SMA di MBI Amanatul Ummah, Pacet Mojokerto'),
(30, 30, '2013-sekarang : mengajar di suatu LBB sebagai tentor MIPA SD/SMP/SMA\r\n2013-sekarang : mengajar ekstrakulikuler IPA di SMP Negeri di Surabaya\r\n2013-sekarang : mengajar ekstrakulikuler Karya Ilmiah di SMP Negeri dan SMA Negeri di Surabaya\r\nkuliah-sekarang : mengajar privat/kelompok MIPA SD/SMP/SMA hingga fokus SBMPTN'),
(31, 31, 'Bimbel Primagama (Bahasa Inggris)\r\nBimbel Ugama Jogja, 2008\r\nO-Friends Rumah Belajar, 2009-2015'),
(32, 32, 'English Tutor - Alfalink Overseas Studies & English Course, Malang & Surabaya\r\nEnglish Language Tutor - Margi Alit, Salatiga'),
(33, 33, 'Asisten Kalkulus FTUI 2013\r\nAsisten Aljabar linier FTUI 2013\r\nAsisten Aljabar linier FTUI 2014\r\nAsisten NME DTKUI 2014'),
(34, 34, '2014-2015 asisten dosen mata kuliah\r\n2014-2015 asisten dosen mata kuliah\r\nMengajar matematika SMA di salah satu bimbingan belajar\r\nAsisten Lab Telekomunikasi UI'),
(35, 35, 'Guru bimbel Fisika dan Matematika\r\nVoulenteer mengajar di SD Caringin, Bogor'),
(36, 36, 'Asisten Laboratorium Telekomunikasi 2015\r\nAsisten Dosen Kalkulus FTUI 2014\r\nPengajar Responsi Aljabar Linier 2014\r\nPengajar Responsi Rangkaian Listrik 2014\r\nPengajar Responsi Mikroprosesor 2014\r\nPengajar Student Club Matematika 2012'),
(37, 37, 'Bimbingan Belajar Smarta Medika Surabaya (2007-sekarang)\r\nLes Privat Pribadi (2007-sekarang)'),
(38, 38, 'Bimbingan belajar Privat SMP 2011'),
(39, 39, 'Tahun 2009 - 2011 : mengajar privat SMP dan SMA di Surabaya dan Sidoarjo\r\ntahun 2012 - sekarang : Mengajar Fisika SMA di MBI Amanatul Ummah, Pacet Mojokerto'),
(40, 40, '2013-sekarang : mengajar di suatu LBB sebagai tentor MIPA SD/SMP/SMA\r\n2013-sekarang : mengajar ekstrakulikuler IPA di SMP Negeri di Surabaya\r\n2013-sekarang : mengajar ekstrakulikuler Karya Ilmiah di SMP Negeri dan SMA Negeri di Surabaya\r\nkuliah-sekarang : mengajar privat/kelompok MIPA SD/SMP/SMA hingga fokus SBMPTN'),
(41, 41, 'Bimbel Primagama (Bahasa Inggris)\r\nBimbel Ugama Jogja, 2008\r\nO-Friends Rumah Belajar, 2009-2015'),
(42, 42, 'English Tutor - Alfalink Overseas Studies & English Course, Malang & Surabaya\r\nEnglish Language Tutor - Margi Alit, Salatiga'),
(43, 43, 'Asisten Kalkulus FTUI 2013\r\nAsisten Aljabar linier FTUI 2013\r\nAsisten Aljabar linier FTUI 2014\r\nAsisten NME DTKUI 2014'),
(44, 44, '2014-2015 asisten dosen mata kuliah\r\n2014-2015 asisten dosen mata kuliah\r\nMengajar matematika SMA di salah satu bimbingan belajar\r\nAsisten Lab Telekomunikasi UI'),
(45, 45, 'Guru bimbel Fisika dan Matematika\r\nVoulenteer mengajar di SD Caringin, Bogor'),
(46, 46, 'Asisten Laboratorium Telekomunikasi 2015\r\nAsisten Dosen Kalkulus FTUI 2014\r\nPengajar Responsi Aljabar Linier 2014\r\nPengajar Responsi Rangkaian Listrik 2014\r\nPengajar Responsi Mikroprosesor 2014\r\nPengajar Student Club Matematika 2012'),
(47, 47, 'Bimbingan Belajar Smarta Medika Surabaya (2007-sekarang)\r\nLes Privat Pribadi (2007-sekarang)'),
(48, 48, 'Bimbingan belajar Privat SMP 2011'),
(49, 49, 'Tahun 2009 - 2011 : mengajar privat SMP dan SMA di Surabaya dan Sidoarjo\r\ntahun 2012 - sekarang : Mengajar Fisika SMA di MBI Amanatul Ummah, Pacet Mojokerto'),
(50, 50, '2013-sekarang : mengajar di suatu LBB sebagai tentor MIPA SD/SMP/SMA\r\n2013-sekarang : mengajar ekstrakulikuler IPA di SMP Negeri di Surabaya\r\n2013-sekarang : mengajar ekstrakulikuler Karya Ilmiah di SMP Negeri dan SMA Negeri di Surabaya\r\nkuliah-sekarang : mengajar privat/kelompok MIPA SD/SMP/SMA hingga fokus SBMPTN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah_pendidikan`
--

CREATE TABLE IF NOT EXISTS `sejarah_pendidikan` (
  `id_mentor` int(10) NOT NULL,
`id_pendidikan` int(10) NOT NULL,
  `jenjang_pendidikan` varchar(250) DEFAULT NULL,
  `instansi_pendidikan` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sejarah_pendidikan`
--

INSERT INTO `sejarah_pendidikan` (`id_mentor`, `id_pendidikan`, `jenjang_pendidikan`, `instansi_pendidikan`) VALUES
(1, 1, 'SMA', '1 Sidoarjo'),
(2, 2, 'S1', 'Institut Teknologi Sepuluh Nopember Surabaya'),
(3, 3, 'SMA', '1 Gresik'),
(4, 4, 'S1', 'Univesitas Indonesia'),
(5, 5, 'S2', 'Universitas Airlangga'),
(6, 6, 'S1', 'Univesitas Diponegoro'),
(7, 7, 'S1', 'Universitas Negeri Surabaya'),
(8, 8, 'S1', 'Universitas Negeri Jakarta'),
(9, 9, 'S1', 'Universitas Trunojoyo'),
(10, 10, 'S1', 'Universitas Padjajaran'),
(11, 11, 'S1', 'Intitute Teknologi Bandung'),
(12, 12, 'SMA', '25 Jakarta'),
(13, 13, 'SMA', '2 Surabaya'),
(14, 14, 'SMA', '10 Surabaya'),
(15, 15, 'S1', 'Institut Pertanian Bogor'),
(16, 16, 'S1', 'Politeknik Negeri Jakarta'),
(17, 17, 'S1', 'Politeknik Elektronika Negeri Surabaya'),
(18, 18, 'S1', 'Universitas Gunadarma'),
(19, 19, 'S2', 'Institut Teknolosi Sepuluh Nopember Surabaya'),
(20, 20, 'S1', 'Politeknik Perkapalan Negeri Surabaya'),
(21, 21, 'SMA', '2 Sidoarjo'),
(22, 22, 'SMA', '48 Bandung'),
(23, 23, 'S1', 'Universitas Negeri Sebelas Maret'),
(24, 24, 'S1', 'Universitas Gajah Mada'),
(25, 25, 'S1', 'Universitas Airlangga'),
(26, 26, 'S1', 'Universitas Negeri Surabaya'),
(27, 27, 'S1', 'Universitas Muhammadiyah Malang'),
(28, 28, 'S1', 'UIN Maulana Malik Ibrahim'),
(29, 29, 'SMA', '5 Surabaya'),
(30, 30, 'SMA', '1 Sidoarjo'),
(31, 31, 'SMA', '1 Krian'),
(32, 32, 'S1', 'Universitas Indonesia'),
(33, 33, 'S1', 'Institut Teknologi Bandung'),
(34, 34, 'S1', 'Universitas Surabaya'),
(35, 35, 'S2', 'Universitas Indonesia'),
(36, 36, 'S1', 'Universitas Andalas'),
(37, 37, 'S1', 'Universitas Paramadina'),
(38, 38, 'S2', 'Institut Teknologi Sepuluh Nopember Surabaya'),
(39, 39, 'S1', 'Universitas Brawijaya'),
(40, 40, 'S1', 'Universitas Muhammadiyah Sidoarjo'),
(41, 41, 'S1', 'Universitas Muhammadiyah Yogyakarta'),
(42, 42, 'S1', 'Universitas Gajah Mada'),
(43, 43, 'S1', 'Universitas Padjajaran'),
(44, 44, 'S1', 'Universitas Diponegoro'),
(45, 45, 'SMA', '1 Sidoarjo'),
(46, 46, 'SMA', '2 Surabaya'),
(47, 47, 'S1', 'Universitas Surabaya'),
(48, 48, 'SMA', '1 Gresik'),
(49, 49, 'S1', 'Universitas Negeri Surabaya'),
(50, 50, 'S1', 'Universitas Airlangga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(250) DEFAULT NULL,
  `no_identitas_siswa` varchar(250) DEFAULT NULL,
  `jenis_kelamin_siswa` varchar(250) DEFAULT NULL,
  `tempat_lahir_siswa` varchar(250) DEFAULT NULL,
  `tanggal_lahir_siswa` date DEFAULT NULL,
  `no_ponsel_siswa` bigint(20) DEFAULT NULL,
  `sekolah_siswa` varchar(250) DEFAULT NULL,
  `alamat_siswa` text,
  `email_siswa` varchar(250) DEFAULT NULL,
  `password_siswa` varchar(250) DEFAULT NULL,
  `latitude_siswa` varchar(250) DEFAULT NULL,
  `longitude_siswa` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `no_identitas_siswa`, `jenis_kelamin_siswa`, `tempat_lahir_siswa`, `tanggal_lahir_siswa`, `no_ponsel_siswa`, `sekolah_siswa`, `alamat_siswa`, `email_siswa`, `password_siswa`, `latitude_siswa`, `longitude_siswa`) VALUES
(1, 'Kaye W. Horne', '1607110659999', 'L', 'Surabaya', '2014-08-11', 81234567890, 'SMAN 1 Sidoarjo', '972-5496 Pede. St.', 'mi.lacinia@orciadipiscingnon.net', 'HFH07FNP3EN', '65.50155', '-7.42273'),
(2, 'Armando Terry', '1633021017099', 'L', 'Yogyakarta', '2009-11-20', 81234567890, 'SD Muhammadiyah 1 Taman', 'P.O. Box 507, 6017 Fermentum Road', 'enim.commodo.hendrerit@augue.edu', 'ADI03OXQ9OS', '79.35989', '-85.66636'),
(3, 'Akeem K. Russell', '1632092311299', 'P', 'Sidoarjo', '1982-06-04', 81234567890, 'SMAN 1 Gresik', '432-9386 Purus Rd.', 'ridiculus.mus.Donec@adipiscingligula.org', 'UMX75ZPU7CZ', '-70.26109', '-1.95612'),
(4, 'Dana Fernandez', '1636010292499', 'L', 'Bandung', '1997-11-21', 81234567890, 'SMP 1 Krian', '357-4154 Nunc Rd.', 'Aliquam.gravida@commodohendrerit.co.uk', 'TYR68QGL7ZY', '-48.59645', '153.16292'),
(5, 'Chiquita U. Cote', '1658052760499', 'P', 'Semarang', '2013-08-10', 81234567890, 'SMA Tujuh Belas Agustus', '9642 Pellentesque Rd.', 'fermentum.metus.Aenean@ametultricies.ca', 'BLP61RWZ4HU', '69.36842', '103.0093'),
(6, 'Rina Levine', '1602021095399', 'P', 'Jakarta', '1998-11-23', 81234567890, 'SD Insan Mulia', '983-9251 Ante. Rd.', 'arcu.Curabitur.ut@semPellentesque.net', 'JQM46HSH9WW', '-67.90274', '-32.08695'),
(7, 'Julie N. Kane', '1683050534099', 'L', 'Jakarta', '1995-01-22', 81234567890, 'SMA GIKI 2 Surabaya', '7594 Imperdiet Avenue', 'magna.a.tortor@euismod.co.uk', 'RDW60TWD3FZ', '14.7619', '87.53098'),
(8, 'Yvette N. Ramirez', '1608042366299', 'P', 'Surabaya', '1998-09-04', 81234567890, 'SMK 1 Buduran', '778 Vivamus Rd.', 'neque.Sed@variusorciin.com', 'VQD25IGH7DM', '-33.78423', '145.30078'),
(9, 'Kiona Clements', '1616021133499', 'L', 'Surabaya', '1991-08-07', 81234567890, 'SMAN 1 Driyorejo', '971-6511 Dictum St.', 'magnis@velarcu.edu', 'VNS79XZX0YR', '41.6262', '-84.48592'),
(10, 'Brennan Jimenez', '1660121715699', 'L', 'Surabaya', '1981-09-26', 81234567890, 'SMPN 1 Taman', '7776 Tellus Av.', 'arcu.Vestibulum@malesuada.co.uk', 'GML06RDF0OT', '43.17365', '99.09902'),
(11, 'Unity Cannon', '1695052164999', 'L', 'Sidoarjo', '1988-04-12', 81234567890, 'SDN 3 Geluran', 'Ap #292-2748 Ut, St.', 'ipsum.ac@velvenenatis.ca', 'WIC24KFK5XE', '85.86724', '-91.48262'),
(12, 'Erasmus Z. Franco', '1666020107899', 'L', 'Yogyakarta', '2016-01-22', 81234567890, 'SDN 25 Jakarta', '660-5218 Ante Av.', 'Pellentesque.tincidunt@dolorvitae.net', 'PQA40JNF6PX', '35.98801', '157.96451'),
(13, 'Noelle V. Salas', '1679060563699', 'P', 'Bandung', '2002-12-23', 81234567890, 'SMPN 2 Surabaya', 'P.O. Box 332, 9147 Amet, Ave', 'Vestibulum.ante@Curabiturut.co.uk', 'KMW24WGO3UY', '-11.21011', '6.46461'),
(14, 'Hermione T. Mann', '1632041526099', 'P', 'Semarang', '2009-04-27', 81234567890, 'SMAN 10 Surabaya', 'P.O. Box 845, 8268 Cras St.', 'egestas.a.dui@odio.ca', 'XHM73WTO0OT', '67.80821', '-164.18862'),
(15, 'Otto B. Roach', '1665031606399', 'P', 'Semarang', '1988-05-25', 81234567890, 'SMPN 5 Surabaya', 'P.O. Box 323, 7952 Sed, Rd.', 'litora.torquent.per@perinceptoshymenaeos.co.uk', 'WKZ62RUU4HG', '-69.22046', '-76.08712'),
(16, 'Allistair Z. Johnson', '1647121009899', 'P', 'Semarang', '2014-04-13', 81234567890, 'SMAN 55 Jakarta', '860-6798 Aliquet Rd.', 'in@aliquetmagna.co.uk', 'OWQ68VOZ1SD', '-8.50023', '87.3122'),
(17, 'Alika Travis', '1609010891099', 'P', 'Yogyakarta', '2007-12-15', 81234567890, 'SMPN 15 Jombang', '115-6146 Vestibulum Street', 'non.enim.Mauris@Duisdignissimtempor.net', 'SUW11DWP9YC', '-37.12581', '-3.49974'),
(18, 'Pascale Robinson', '1658070397599', 'L', 'Yogyakarta', '1993-03-01', 81234567890, 'SDK St. Paulus', 'Ap #611-5555 Ultrices St.', 'sed.sem@Quisqueimperdieterat.ca', 'JVG89DEQ7BQ', '2.79144', '173.80819'),
(19, 'Martin M. Burris', '1695041979399', 'L', 'Jakarta', '1987-09-01', 81234567890, 'SD Budi Pekerti', 'P.O. Box 688, 5598 A St.', 'ultrices.sit.amet@euodioPhasellus.net', 'JEL28QWT0NG', '-46.31913', '58.54402'),
(20, 'Dawn Edwards', '1668092358299', 'P', 'Jakarta', '1983-05-02', 81234567890, 'SD Rungkut', '3362 Sapien. Rd.', 'dolor.nonummy@tincidunttempusrisus.ca', 'GGI63WTE6KM', '-45.75537', '73.86315'),
(21, 'Ezekiel Woodard', '1619091140399', 'L', 'Surabaya', '1985-08-06', 81234567890, 'SDN 2 Sidoarjo', '153-1844 Sit St.', 'vel@ametluctusvulputate.net', 'SUD23PJU5YX', '-49.42096', '-72.60223'),
(22, 'Kelsey Gaines', '1664032388999', 'L', 'Semarang', '1986-03-22', 81234567890, 'SMPN 48 Bandung', 'Ap #972-9435 Facilisis Rd.', 'turpis@velit.edu', 'QZJ59DAU4XU', '-6.89592', '7.20398'),
(23, 'Sonia A. Cardenas', '1668032856599', 'P', 'Bandung', '1997-10-10', 81234567890, 'SMK 5 Surabaya', '362-7491 Massa. St.', 'facilisi.Sed@euaugueporttitor.org', 'WBA04YTD5OZ', '47.48704', '165.36097'),
(24, 'Dawn U. Wolfe', '1619093042399', 'P', 'Bandung', '1992-06-30', 81234567890, 'SMA Gajah Mada', 'Ap #642-6918 Nulla St.', 'Quisque.varius@velitegestaslacinia.net', 'MFR64ZQO3ZC', '64.22357', '175.59098'),
(25, 'Rashad Robinson', '1609060669599', 'L', 'Bandung', '1983-09-24', 81234567890, 'SMP Airlangga', 'Ap #868-1551 Lorem Ave', 'dis@necanteblandit.com', 'FTQ69KAC2EV', '57.13148', '68.06722'),
(26, 'Candace W. Ryan', '1635051707699', 'P', 'Bandung', '1980-07-31', 81234567890, 'SMKN 1 Kertosono', '2926 Lobortis St.', 'quis.accumsan@in.net', 'JMP02PXO6BV', '28.14282', '102.36733'),
(27, 'Gil B. Martin', '1685012954099', 'P', 'Semarang', '1996-02-13', 81234567890, 'SMA Muhammadiyah Malang', 'P.O. Box 618, 108 A, Rd.', 'ultricies.sem@ultricesposuerecubilia.edu', 'OGB98MUK8ES', '-25.139', '130.06944'),
(28, 'Kimberly T. Peters', '1637072852299', 'L', 'Semarang', '2015-12-31', 81234567890, 'SD Maulana Malik Ibrahim', '377-8698 Dolor. Street', 'libero.dui.nec@pellentesquemassa.ca', 'ORX06FXQ3LW', '-72.22869', '158.24265'),
(29, 'Pamela E. Horton', '1675122417599', 'L', 'Semarang', '1986-08-22', 81234567890, 'SMK 5 Surabaya', 'Ap #648-1509 Fermentum Rd.', 'Morbi.metus@fringillaornare.edu', 'MXB39FZX6SF', '-40.68453', '28.39615'),
(30, 'Halla Warner', '1629051758799', 'L', 'Yogyakarta', '1985-08-18', 81234567890, 'SMAN 1 Sidoarjo', '565-940 Augue Rd.', 'elementum.at.egestas@facilisislorem.ca', 'BDM08BXA9YK', '-9.35654', '-173.66476'),
(31, 'Kiayada D. Hopkins', '1667061235499', 'P', 'Yogyakarta', '1996-03-04', 81234567890, 'SDN 1 Krian', 'P.O. Box 530, 4026 Sit Road', 'lobortis.augue.scelerisque@erosturpis.edu', 'DKO39FZA2EC', '63.60625', '23.98079'),
(32, 'Ishmael Z. Hatfield', '1684090208299', 'P', 'Sidoarjo', '2004-07-17', 81234567890, 'SMK Kartika', '3244 Tempus Ave', 'varius@nequenon.edu', 'FEY80NZF3KB', '-33.33954', '-27.62814'),
(33, 'Brody Hutchinson', '1673072254599', 'L', 'Sidoarjo', '2011-11-10', 81234567890, 'SMF Surabaya', 'Ap #586-7038 Lorem, St.', 'sed@mi.com', 'JYJ71UCH2VB', '-48.94162', '85.06526'),
(34, 'Jocelyn D. Goodwin', '1600021707199', 'L', 'Sidoarjo', '2015-01-13', 81234567890, 'SMAN 1 Sumenep', '990-414 Ac St.', 'sed@diam.com', 'MDO30UQF2JA', '-72.20234', '40.52855'),
(35, 'Rajah Washington', '1657031465499', 'P', 'Jakarta', '1986-10-29', 81234567890, 'SDN 57 Jakarta', '2131 Ornare. Av.', 'Fusce.dolor@Vivamus.edu', 'DVK08QVN5CV', '70.23245', '79.35233'),
(36, 'Kellie C. Page', '1697092265999', 'L', 'Surabaya', '2015-06-05', 81234567890, 'SD Andalas', 'Ap #673-137 Malesuada Rd.', 'consectetuer.adipiscing@diameu.edu', 'PTI92WQY3JV', '-87.16806', '-86.37915'),
(37, 'Benedict D. Bailey', '1654092827099', 'L', 'Surabaya', '2015-11-05', 81234567890, 'SMA Paramadina', 'Ap #691-4790 Mi Street', 'eu.ligula.Aenean@nonsapien.ca', 'RIS62MFR2OD', '3.32505', '69.55253'),
(38, 'Fatima O. Tran', '1698092097599', 'L', 'Yogyakarta', '1982-04-03', 81234567890, 'SMP Muhammadiah 1 Sidoarjo', '6589 Purus. Avenue', 'augue.scelerisque@Donec.net', 'ZEQ06MJP1CV', '27.21374', '120.06793'),
(39, 'Kessie Noel', '1645030545199', 'P', 'Yogyakarta', '1980-08-06', 81234567890, 'SD Brawijaya', '634-1544 Natoque Av.', 'convallis.in.cursus@fermentum.org', 'YJE96QGP6KU', '-26.57213', '-114.80055'),
(40, 'Sade Hampton', '1610032633199', 'L', 'Semarang', '1999-02-16', 81234567890, 'SMA Muhammadiyah 2 Sidoarjo', 'P.O. Box 196, 3927 Posuere Rd.', 'Sed.neque.Sed@non.ca', 'EHZ06ZKS8UT', '-19.01772', '26.52199'),
(41, 'Mufutau Coleman', '1622112759399', 'L', 'Sidoarjo', '1998-01-31', 81234567890, 'SMA Muhammadiyah Yogyakarta', 'Ap #441-6943 Luctus, Street', 'tempor@ultricesiaculis.ca', 'XBE73JKA6CK', '-89.52503', '-140.69687'),
(42, 'Kirsten Reid', '1669120340499', 'L', 'Surabaya', '1989-11-18', 81234567890, 'SMP Gajah Mada', '1558 Nec St.', 'vestibulum@vulputaterisus.com', 'UYK87QTZ6TU', '-37.50083', '-166.19253'),
(43, 'Lester Y. Snider', '1626030446799', 'L', 'Bandung', '1985-05-26', 81234567890, 'SDN 14 Menanggal', '995 Eget, Ave', 'Etiam@Aeneanegetmetus.net', 'UUL81PAG2LG', '48.34645', '92.37861'),
(44, 'Suki Blackburn', '1682091246099', 'P', 'Jakarta', '2009-06-28', 81234567890, 'SDN 2 Ketegan', 'Ap #141-7738 Nam Av.', 'mauris.eu@felisDonec.edu', 'CXC48XWW1ZI', '58.21845', '22.14261'),
(45, 'Shaine Mendez', '1651110765599', 'P', 'Surabaya', '2015-10-31', 81234567890, 'SDN 1 Sepanjang', '931-6269 Erat Av.', 'Aliquam.ornare.libero@Maurismagna.edu', 'NTK94UUZ6HE', '39.99484', '-84.21979'),
(46, 'Jin F. Jennings', '1675081651799', 'L', 'Bandung', '2011-05-30', 81234567890, 'SMPN 2 Surabaya', '8716 Nunc Road', 'molestie.tellus.Aenean@tortorNunccommodo.org', 'FRX43CXQ8IB', '41.53548', '-162.73233'),
(47, 'Igor Peters', '1695061387099', 'L', 'Yogyakarta', '1993-09-12', 81234567890, 'SMAN 3 Surabaya', 'P.O. Box 632, 4802 Convallis Street', 'nibh@auctorodio.com', 'DPC05PTO3ZR', '57.43574', '168.39536'),
(48, 'Brynn Palmer', '1604030237399', 'L', 'Sidoarjo', '2011-06-21', 81234567890, 'SMPN 1 Gresik', 'P.O. Box 154, 3976 Lacus. St.', 'nisl.Maecenas.malesuada@lectusconvallisest.ca', 'ALD03NBK1UG', '21.37606', '-122.44847'),
(49, 'Oprah M. Weaver', '1696031805099', 'P', 'Semarang', '2006-12-19', 81234567890, 'SDN 3 Bebekan', '870-1900 Pellentesque Road', 'Donec@quam.edu', 'VMK94FWS5IT', '79.61293', '2.14915'),
(50, 'Mohammad Blankenship', '1636010976399', 'P', 'Surabaya', '1993-04-04', 81234567890, 'SD Airlangga', '130-1555 Ac Rd.', 'rhoncus.Proin.nisl@arcuiaculis.org', 'TQJ66JEG3WV', '67.36183', '-152.37166');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
`id_wishlist` int(10) NOT NULL,
  `keterangan_wishlist` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `keterangan_wishlist`) VALUES
(1, 'arcu. Morbi sit amet massa.'),
(2, 'placerat. Cras dictum ultricies ligula.'),
(3, 'aliquet nec, imperdiet'),
(4, 'metus. Aliquam erat'),
(5, 'scelerisque'),
(6, 'magna. Cras convallis convallis dolor. Quisque tincidunt pede ac'),
(7, 'In at'),
(8, 'quam, elementum at, egestas a, scelerisque sed,'),
(9, 'aliquet, metus urna'),
(10, 'sollicitudin orci sem eget massa. Suspendisse eleifend. Cras'),
(11, 'Sed molestie. Sed'),
(12, 'Integer urna. Vivamus molestie dapibus'),
(13, 'eu, ultrices sit amet, risus. Donec nibh'),
(14, 'tempor diam dictum'),
(15, 'neque pellentesque massa lobortis ultrices.'),
(16, 'consectetuer adipiscing elit. Aliquam auctor, velit eget'),
(17, 'erat, eget tincidunt dui augue eu'),
(18, 'sed pede nec ante blandit viverra.'),
(19, 'Proin vel nisl. Quisque'),
(20, 'aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus'),
(21, 'penatibus et magnis'),
(22, 'placerat eget, venenatis a, magna.'),
(23, 'lobortis'),
(24, 'ut lacus. Nulla tincidunt, neque vitae semper egestas, urna'),
(25, 'nibh vulputate mauris sagittis placerat. Cras dictum ultricies'),
(26, 'cursus non, egestas a, dui. Cras pellentesque. Sed'),
(27, 'nonummy. Fusce'),
(28, 'pellentesque, tellus sem mollis dui,'),
(29, 'Proin nisl sem, consequat nec, mollis vitae, posuere at, velit.'),
(30, 'a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed'),
(31, 'eros non enim commodo hendrerit. Donec porttitor'),
(32, 'euismod urna. Nullam lobortis'),
(33, 'nisi. Cum sociis natoque penatibus et magnis'),
(34, 'neque et nunc. Quisque ornare'),
(35, 'est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh'),
(36, 'a neque. Nullam ut nisi a odio semper cursus. Integer'),
(37, 'arcu. Sed et libero. Proin'),
(38, 'varius. Nam porttitor scelerisque neque.'),
(39, 'accumsan interdum libero dui'),
(40, 'id, blandit at, nisi. Cum sociis natoque penatibus et magnis'),
(41, 'amet, consectetuer adipiscing elit.'),
(42, 'posuere cubilia Curae; Donec'),
(43, 'amet ante. Vivamus'),
(44, 'fames ac turpis'),
(45, 'elementum sem, vitae aliquam eros turpis'),
(46, 'vitae diam. Proin dolor. Nulla semper tellus id'),
(47, 'dictum eleifend, nunc risus varius orci, in consequat enim'),
(48, 'per inceptos'),
(49, 'vitae odio sagittis semper. Nam'),
(50, 'feugiat tellus lorem eu metus. In lorem. Donec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
 ADD PRIMARY KEY (`id_harga`), ADD KEY `fk_mengajar` (`id_mentor`), ADD KEY `fk_mengajar2` (`id_mapel`);

--
-- Indexes for table `jadwal_ketersediaan_mengajar`
--
ALTER TABLE `jadwal_ketersediaan_mengajar`
 ADD PRIMARY KEY (`id_jadwal_ketersediaan`), ADD KEY `fk_mempunyai_4` (`id_mentor`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`), ADD KEY `fk_mengikuti` (`id_siswa`), ADD KEY `fk_mengajar3` (`id_harga`);

--
-- Indexes for table `kualifikasi`
--
ALTER TABLE `kualifikasi`
 ADD PRIMARY KEY (`id_kualifikasi`), ADD KEY `fk_mempunyai_2` (`id_mentor`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
 ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `menginginkan`
--
ALTER TABLE `menginginkan`
 ADD UNIQUE KEY `menginginkan_pk` (`id_siswa`), ADD KEY `fk_menginginkan2` (`id_wishlist`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
 ADD PRIMARY KEY (`id_mentor`);

--
-- Indexes for table `pengalaman_mengajar`
--
ALTER TABLE `pengalaman_mengajar`
 ADD PRIMARY KEY (`id_pengalaman`), ADD KEY `fk_mempunyai_1` (`id_mentor`);

--
-- Indexes for table `sejarah_pendidikan`
--
ALTER TABLE `sejarah_pendidikan`
 ADD PRIMARY KEY (`id_pendidikan`), ADD KEY `fk_mempunyai` (`id_mentor`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
 ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `jadwal_ketersediaan_mengajar`
--
ALTER TABLE `jadwal_ketersediaan_mengajar`
MODIFY `id_jadwal_ketersediaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `kualifikasi`
--
ALTER TABLE `kualifikasi`
MODIFY `id_kualifikasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
MODIFY `id_mentor` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `pengalaman_mengajar`
--
ALTER TABLE `pengalaman_mengajar`
MODIFY `id_pengalaman` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `sejarah_pendidikan`
--
ALTER TABLE `sejarah_pendidikan`
MODIFY `id_pendidikan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
MODIFY `id_wishlist` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `harga`
--
ALTER TABLE `harga`
ADD CONSTRAINT `fk_mengajar` FOREIGN KEY (`id_mentor`) REFERENCES `mentor` (`id_mentor`),
ADD CONSTRAINT `fk_mengajar2` FOREIGN KEY (`id_mapel`) REFERENCES `mata_pelajaran` (`id_mapel`);

--
-- Ketidakleluasaan untuk tabel `jadwal_ketersediaan_mengajar`
--
ALTER TABLE `jadwal_ketersediaan_mengajar`
ADD CONSTRAINT `fk_mempunyai_4` FOREIGN KEY (`id_mentor`) REFERENCES `mentor` (`id_mentor`);

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
ADD CONSTRAINT `fk_mengikuti` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_harga`) REFERENCES `harga` (`id_harga`);

--
-- Ketidakleluasaan untuk tabel `kualifikasi`
--
ALTER TABLE `kualifikasi`
ADD CONSTRAINT `fk_mempunyai_2` FOREIGN KEY (`id_mentor`) REFERENCES `mentor` (`id_mentor`);

--
-- Ketidakleluasaan untuk tabel `menginginkan`
--
ALTER TABLE `menginginkan`
ADD CONSTRAINT `fk_menginginkan` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
ADD CONSTRAINT `fk_menginginkan2` FOREIGN KEY (`id_wishlist`) REFERENCES `wishlist` (`id_wishlist`);

--
-- Ketidakleluasaan untuk tabel `pengalaman_mengajar`
--
ALTER TABLE `pengalaman_mengajar`
ADD CONSTRAINT `fk_mempunyai_1` FOREIGN KEY (`id_mentor`) REFERENCES `mentor` (`id_mentor`);

--
-- Ketidakleluasaan untuk tabel `sejarah_pendidikan`
--
ALTER TABLE `sejarah_pendidikan`
ADD CONSTRAINT `fk_mempunyai` FOREIGN KEY (`id_mentor`) REFERENCES `mentor` (`id_mentor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
