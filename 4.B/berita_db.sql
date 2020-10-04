-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 02:04 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(4) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `create_time` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `image`, `deskripsi`, `create_time`, `id_user`) VALUES
(0, 'qqq', '', '', '0000-00-00', 1),
(1, 'Awan Hitam Bergelomb', 'awan.jpg', 'Awan pekat berbentuk seperti gelombang air laut menyelimuti langit di wilayah Serang, Banten pada Sabtu (3/10/2020) siang. Sejumlah warga sempat mengabadikan video awan hitam pekat memanjang di langit. Salah satu warga, Arief, sempat mengambil momen saat awan hitam bergelayut di atas langit Pasar Tirtayasa, Kabupaten Serang, Banten.\r\n\"Indah tapi serem,\" tulis Arief di status Instastory Instagramnya.\r\nWarga pun kaget dengan muncul fenomena tersebut bahkan khawatir jika terjadi bencana angin puting beliung atau hujan deras menyebabkan banjir. Salah satu warga Taktakan, Kota Serang, Wulan Indah mengaku kaget saat melihat awan seperti gelombang air laut muncul. \"Warga terkejut, kaget, heran pas ngeliat muncul awan kaya ombak. Awannya hitam pekat gitu,\" kata Wulan. Tak lama, kata Wulan, hujan deras pun turun di wilayahnya. Namun, tidak disertai angin maupun kilat.', '2020-10-02', 1),
(2, 'erupsi gunung semuru', 'gunung.jpg', 'Gunung Semeru kembali mengalami erupsi dan mengeluarkan awan panas setinggi 400 meter dari puncak pada Jumat (10/4/2020). Masyarakat diimbau tak beraktivitas di sekitar kawah gunung yang masih berstatus waspada itu. \"Teramati asap kawah utama berwarna putih dengan intensitas tinggi sekitar 400 meter dari puncak,\" kata petugas pos pantau Gunung Semeru, Liswanto, dalam laporannya dikutip dari Tribunmadura.com, Sabtu (11/4/2020)\r\nLiswanto mengatakan, sepanjang pengamatan terjadi 42 kali gempa letusan dengan ampliltudo maksimal 21 milimeter dan lama gempa 30-150 detik. Sementara gempa embusan terjadi dua kali dengan amplitudo 10 milimeter dan lama gempa 35-95 detik. \"Dua kali gempa tektonik jauh dengan amplitudo 20-22 milimeter, dan lama gempa 35-46 detik,\" kata Liswanto. Petugas pantau Gunung Semeru itu menambahkan, cuaca di sekitar gunung cerah hingga mendung. Tercatat, angin bergerak lemah hingga sedang dari utara, timur laut, timur, dan selatan. Meski mengalami peningkatan aktivitas, Pusat Vulkanologi Mitigasi dan Bencana Geologi (PVMBG) masih menetapkan status level II atau waspada.', '2020-10-02', 2),
(3, 'aaaa', 'hph.jpg', 'DDDDDDDD', '2020-10-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `role`) VALUES
(1, 'ahmad', 'ahmad@gmail.com', 'admin1'),
(2, 'rokhim', 'rokhim@gmail.com', 'admin2'),
(4, 'ari', 'ari@gmail.com', 'admin4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
