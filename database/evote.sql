-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 06:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evote`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(11) NOT NULL,
  `nama_kandidat` varchar(128) NOT NULL,
  `nama_calon` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id`, `nama_kandidat`, `nama_calon`, `foto`) VALUES
(1, 'Calon ke-1', 'Jokowidodo', 'download.png'),
(2, 'Calon ke-2', 'B.J Habibie', '640px-Foto_Presiden_Habibie_1998.jpg'),
(4, 'Calon ke-3', 'Susilo Bambang Yudhoyono', 'sby-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`) VALUES
(2, 'Reguler Malam'),
(3, 'Sabtu'),
(4, 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `suara`
--

CREATE TABLE `suara` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kandidat` varchar(128) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suara`
--

INSERT INTO `suara` (`id`, `id_user`, `nama_kandidat`, `created`) VALUES
(0, 2, 'Calon ke-1', '2021-12-16 21:44:43'),
(0, 6, 'Calon ke-3', '2021-12-16 22:56:50'),
(0, 7, 'Calon ke-2', '2021-12-16 22:57:48'),
(0, 11, 'Calon ke-3', '2021-12-16 23:28:10'),
(0, 13, 'Calon ke-1', '2021-12-16 23:29:05'),
(0, 14, 'Calon ke-1', '2021-12-16 23:29:55'),
(0, 15, 'Calon ke-2', '2021-12-16 23:30:31'),
(0, 16, 'Calon ke-2', '2021-12-17 00:05:03'),
(0, 28, 'Calon ke-2', '2021-12-17 00:11:48'),
(0, 24, 'Calon ke-3', '2021-12-17 00:12:42'),
(0, 19, 'Calon ke-1', '2021-12-17 00:20:58'),
(0, 20, 'Calon ke-1', '2021-12-17 00:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','siswa') NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_kelas`, `nama`, `email`, `password`, `level`, `status`) VALUES
(1, 0, 'admin', 'admin@gmail.com', '$2y$10$f4c1jEu/xXE4Lgn3iH0EjuIuT9WS1imOamFu07LSjL3XhkDASTHyW', 'admin', 0),
(2, 2, 'firmansyah', 'firman@gmail.com', '$2y$10$LzDei8igDgmCf1J0foDmb.8F3JI4eH.5GbmoLabKWfl5fPtcRX.V2', 'siswa', 1),
(6, 4, 'Haleigh Kohler', 'your.email+fakedata38521@gmail.com', '$2y$10$H5mNt28IoNq0y9b0Zuziiu/9KgYmn2B4nPo09SdAlFaEeSUp4fTea', 'siswa', 1),
(7, 2, 'Kristopher Kub', 'your.email+fakedata32778@gmail.com', '$2y$10$XpnMW/Y3O2/MrdqnjlYh1uvr7TiiW/XdPHpRGlUVutWYXRthlcx3G', 'siswa', 1),
(11, 4, 'Mabel Parker', 'your.email+fakedata88699@gmail.com', '$2y$10$1k7q3mOubaNhb8QqIIqsduTxe.jeY3VX5vrfKqST9.Rnus21Y6pWi', 'siswa', 1),
(13, 2, 'Dayton Steuber', 'your.email+fakedata92334@gmail.com', '$2y$10$pJqrEiwQRjhAI0gNW4TWKOCTyucRwR6IcXlMyG2BLuASKQDnfV7H2', 'siswa', 1),
(14, 3, 'Ernie Romaguera', 'your.email+fakedata21943@gmail.com', '$2y$10$wVVMcSIHEeP714P5tt.sVuP5Fl2fvaGe6pR1ldxHsFJxFtwkLTckq', 'siswa', 1),
(15, 4, 'Bridgette Ratke', 'your.email+fakedata75556@gmail.com', '$2y$10$5nY3kP2u5XaE2fLkd1ytoO.j6v9HVbeX3Zbig3UiB.NQ0nmW1RPxW', 'siswa', 1),
(16, 3, 'Perry Hettinger', 'your.email+fakedata80362@gmail.com', '$2y$10$SpYPwVVh7nWnKbAG6Fj2GuzemATjXRgdBzhQ9/gUWWQpCAhg740ta', 'siswa', 1),
(19, 4, 'Salvatore Cormier', 'your.email+fakedata58598@gmail.com', '$2y$10$S5V1YEoGpmzqoyAcq1xL6.QllvaV3UwGxTor2LD8uI.uLjDypaLXG', 'siswa', 1),
(20, 2, 'Tracy Marvin', 'your.email+fakedata23462@gmail.com', '$2y$10$I3v4aItVblYho3KEfn/cuOuQC0z/O//foPNmfB9k7t8C1w39LR.wG', 'siswa', 1),
(21, 4, 'Catalina Trantow', 'your.email+fakedata78898@gmail.com', '$2y$10$jWlQ2ReKS6m3F3DeNEadpuyM3R.ZlmqD2JpLlV4JTYC1vmRHcPzkO', 'siswa', 0),
(22, 2, 'Filomena Rowe', 'your.email+fakedata41843@gmail.com', '$2y$10$VIqYdsASZCLn7ZP0kY3GT.QjFHGq5/WGq6TI1mXEEJPdQoFkDeEEO', 'siswa', 0),
(23, 2, 'Schuyler Beer', 'your.email+fakedata18227@gmail.com', '$2y$10$ydlUYcslJ9mQ5Rv0GUnp1.frvMdZs6mzIKZqVH/tt7j5uFTTv403S', 'siswa', 0),
(24, 2, 'Kylie Rohan', 'your.email+fakedata31696@gmail.com', '$2y$10$dCaaga7kQHKLXqklj7ARrea/duf63FH2JjIgdX9mMsPNi1LZNMIPq', 'siswa', 1),
(25, 3, 'Bradley Champlin', 'your.email+fakedata28260@gmail.com', '$2y$10$VUKIJUAQ7Fv82qq3pySTdelj0Mwt17D7QobDcSXts.3OwVBnpKaF2', 'siswa', 0),
(26, 2, 'Shannon Crooks', 'your.email+fakedata54879@gmail.com', '$2y$10$0sJPSeHp2R9RbyG3NiuVCO35yLfFUIxak2nsPk6zj8sCMR/p9rX8i', 'siswa', 0),
(27, 3, 'Loraine Hills', 'your.email+fakedata75656@gmail.com', '$2y$10$BgONUJRQRUqQhi.T8BZUTuVBA.NCfpHDbJARGMrZBGgbRoRlwjNt6', 'siswa', 0),
(28, 2, 'Lester Cartwright', 'your.email+fakedata58359@gmail.com', '$2y$10$x6w61lhTW6jtlfr8/affOuBj95cZXVPKr5kxRQQanvm6Pe0L.Wwj6', 'siswa', 1),
(29, 3, 'Jamel Okuneva', 'your.email+fakedata12199@gmail.com', '$2y$10$1LqYfGE.3kQecN2FEAlO2OFuCzlRcvQ1mTOEBSoMOcwZqN8/7lLGG', 'siswa', 0),
(30, 4, 'Deon Schimmel', 'your.email+fakedata86720@gmail.com', '$2y$10$CzYEgyfm82CAEOA1h66cgOaTpgaz0qysW.QsS3Ugnt5x4IeMMITAO', 'siswa', 0),
(31, 2, 'Chad Metz', 'your.email+fakedata18302@gmail.com', '$2y$10$lyEjbw79OEcVovb7eTQe.uT1IC1fcxDkgDy0cqmidNIhX5Xb8pBqy', 'siswa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `id_kandidat`, `visi`, `misi`) VALUES
(12, 1, '<p>Membentuk OSIS yang mampu mewadahi kreasi, inovasi, serta prestasi siswa di berbagai bidang dengan tetap menjunjung karakter berakhlak mulia.</p>\r\n', '<p>1. Mengoptimalkan program ekstrakurikuler yang sudah ada di sekolah<br>\r\n2. Mengembangkan program baru untuk mewadahi kebutuhan siswa<br>\r\n3. Mengeratkan tali silaturahmi antar seluruh siswa, guru, pegawai, hingga alumni<br>\r\n4 . Menjaga keimanan siswa'),
(14, 2, '<p>Menciptakan calon pemimpin bangsa yang aktif, kreatif, dan produktif dalam berbagai bidang kehidupan.</p>\r\n', '<p>Menyelenggarakan berbagai acara kampus untuk meningkatkan kreativitas dan inovasi mahasiswa<br>\r\nBerpartisipasi dalam berbagai event dan seminar di luar kampus<br>\r\nMengikuti kompetisi regional, nasional, hingga internasional<br>\r\nMewadahi aspirasi mah'),
(15, 4, '<p>Mewujudkan desa yang adil, makmur, aman, dan tenteram untuk masyarakat agar kualitas hidupnya semakin meningkat.</p>\r\n', '<p>Menginisiasi program baru yang dapat memajukan masyarakat<br>\r\nBekerja sama dengan instansi atau lembaga untuk mengelola SDM desa<br>\r\nMenjaga budaya musyawarah dan gotong royong antar warga<br>\r\nToleransi antar umat beragama agar tercipta rasa tentera');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
