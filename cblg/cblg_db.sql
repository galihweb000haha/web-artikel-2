-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2020 at 09:58 AM
-- Server version: 10.1.41-MariaDB-0+deb9u1
-- PHP Version: 7.3.12-1+0~20191128.49+debian9~1.gbp24559b

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cblg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `waktu_artikel` date DEFAULT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi_artikel` longtext,
  `gambar_artikel` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `waktu_artikel`, `id_kategori`, `id_user`, `isi_artikel`, `gambar_artikel`, `hits`) VALUES
(65, 'berhijab tak berhijab', '2019-07-03', 13, 4, 'aw aw aw buwaya darac busyec akyu tertifu lagi uwohuwo mulucnya bauw sekali tsavi haci bagai srwigala uwohuwo yey.', 'images1.jpeg', 322),
(79, 'Samparangin', '2019-06-17', 15, 4, 'aw aw aw buwaya darac busyec akyu tertifu lagi uwohuwo mulucnya bauw sekali tsavi haci bagai srwigala uwohuwo yey.', 'man-961674_960_7203.png', 8),
(80, 'perbedaan sin, syin, shod, dhod, tho, dzho', '2019-06-17', 16, 4, 'aw aw aw buwaya darac busyec akyu tertifu lagi uwohuwo mulucnya bauw sekali tsavi haci bagai srwigala uwohuwo yey.', 'man-961674_960_7207.png', 68),
(81, 'macam-macam air untuk bersuci', '2019-06-17', 12, 4, 'aw aw aw buwaya darac busyec akyu tertifu lagi uwohuwo mulucnya bauw sekali tsavi haci bagai srwigala uwohuwo yey.', 'man-961674_960_7206.png', 6),
(82, 'bertamu', '2019-06-17', 14, 4, 'aw aw aw buwaya darac busyec akyu tertifu lagi uwohuwo mulucnya bauw sekali tsavi haci bagai srwigala uwohuwo yey.', 'man-961674_960_7205.png', 12),
(83, 'pakai otakmu', '2019-06-17', 14, 4, 'aw aw aw buwaya darac busyec akyu tertifu lagi uwohuwo mulucnya bauw sekali tsavi haci bagai srwigala uwohuwo yey.', 'man-961674_960_7204.png', 3),
(84, 'untuk apa waktumu di dunia', '2019-06-17', 14, 4, 'aw aw aw buwaya darac busyec akyu tertifu lagi uwohuwo mulucnya bauw sekali tsavi haci bagai srwigala uwohuwo yey.', 'man-961674_960_7203.png', 0),
(85, 'tuhan bukan manusia', '2019-06-17', 11, 4, 'aw aw aw buwaya darac busyec akyu tertifu lagi uwohuwo mulucnya bauw sekali tsavi haci bagai srwigala uwohuwo yey.', 'man-961674_960_7201.png', 3),
(86, 'aku dan keluaragaku', '2019-06-16', 16, 5, 'aw aw aw buwaya darac busyec akyu tertifu lagi uwohuwo mulucnya bauw sekali tsavi haci bagai srwigala uwohuwo yey.', 'man-961674_960_720.png', 0),
(87, 'jangan ganggu', '2019-06-17', 13, 4, 'aw aw aw buwaya darac busyec akyu tertifu lagi uwohuwo mulucnya bauw sekali tsavi haci bagai srwigala uwohuwo yey.', 'man-961674_960_7202.png', 14),
(89, 'sampe kapan gua jomblo', '2019-06-17', 15, 4, 'sampe kapan?', 'man-961674_960_72010.png', 1),
(91, 'nambah', '2019-06-18', 14, 4, 'nambah', 'code.jpg', 1),
(92, 'nambah', '2019-06-18', 14, 4, 'nambah', 'code.jpg', 0),
(93, 'nambah', '2019-06-18', 14, 4, 'nambah', 'code.jpg', 4),
(94, 'nambah', '2019-06-18', 14, 4, 'nambah', 'code.jpg', 0),
(95, 'nambah', '2019-06-18', 14, 4, 'nambah', 'code.jpg', 0),
(96, 'nambah', '2019-06-18', 14, 4, 'nambah', 'code.jpg', 1),
(97, 'nambah', '2019-06-18', 14, 4, 'nambah', 'code.jpg', 0),
(98, 'nambah', '2019-06-18', 14, 4, 'nambah', 'code.jpg', 0),
(99, 'nambah', '2019-06-18', 14, 4, 'nambah', 'code.jpg', 1),
(100, 'nambah', '2019-06-18', 14, 4, 'nambah apa maning?', 'code.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL,
  `qasidah` varchar(255) NOT NULL,
  `tausiah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gambar1`, `gambar2`, `gambar3`, `qasidah`, `tausiah`) VALUES
('5c9391ff8d988.png', '5c9391ffa24f5.png', '5c9391ffa2628.png', 'https://www.youtube.com/embed/-plBNxOl1sI', 'https://www.youtube.com/embed/8PSGTFgvllo');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `background` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`background`, `logo`, `deskripsi`, `nama`, `telp`, `alamat`, `email`) VALUES
('5c773e61bbd33.png', '5c7724512b369.jpg', '                Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni Siawa siwa uomono ueni...                ', 'Tarbiyyatul Athfal', '08986676180', 'JL.Sutawijaya no.4, Pegirikan, Tegal', 'galih11120@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_acara` int(11) NOT NULL,
  `acara` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  `jam` varchar(20) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_acara`, `acara`, `waktu`, `jam`, `lokasi`, `deskripsi`) VALUES
(14, '\"http://cdn.jsdelivr.net/timepicker/latest/timepicker.min.css\"', '2019-02-25', '00:12', '\"http://cdn.jsdelivr.net/timepicker/latest/timepicker.min.css\"', '\"http://cdn.jsdelivr.net/timepicker/latest/timepicker.min.css\"'),
(16, 'Latihan Hadroh', '2019-03-09', '20:08', 'Rumah Saya', 'Lalalala'),
(17, 'Pengajian Ribath', '2019-02-23', '14:04', 'Bedug, Pangkah', 'Pengajian  untuk semua santri dan kerabat saya');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(11, 'Aqidah/Tauhid'),
(12, 'Fiqih'),
(13, 'Ushul Fiqih'),
(14, 'Akhlak'),
(15, 'Ilmu Al-Quran'),
(16, 'Tajwid');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `waktu` time NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_artikel`, `waktu`, `komentar`) VALUES
(97, 4, 80, '01:37:06', 'halo halo bandung'),
(98, 4, 65, '01:52:13', 'izin share min!'),
(99, 4, 65, '01:52:30', 'eh adminya kan gua!!!'),
(100, 4, 65, '01:53:06', 'halah kampret belum ada member baru admin satu kampreet'),
(101, 5, 65, '02:03:08', 'Halow'),
(102, 4, 65, '02:05:36', 'waah eynika ngapain kamu kesini ey?'),
(103, 5, 65, '02:11:19', 'kebetulan aja lagi jalan2 pret...!'),
(104, 5, 79, '02:13:14', 'bagus min..alhamdulillah bermanfaat'),
(105, 4, 65, '05:08:36', 'cek'),
(106, 4, 65, '05:09:07', 'cek2'),
(107, 4, 93, '04:26:45', 'cek');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_pengirim` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi_pesan` text NOT NULL,
  `nama_pengirim` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_pengirim`, `email`, `isi_pesan`, `nama_pengirim`) VALUES
(2, 'galih11120@gmail.com', 'halo nama saya galih umur saya 18 tahun saya bekerja di sun microsystem', 'Galih Fikran Syah'),
(3, 'reza@gmail.co.id', 'Halo nama saya Reza dan umur saya 19 tahun lebih tua dari anda :)&lt;b&gt;hacked&lt;/b&gt;', 'Reza Fahlevi'),
(5, 'as@hago.com', '&lt;b&gt;&lt;u&gt;&lt;i&gt;HACKED&lt;/i&gt;&lt;/u&gt;&lt;/b&gt;', '&lt;b&gt;&lt;u&gt;&lt;i&gt;HACKED&lt;/i&gt;&lt;/u&'),
(6, 'Anounimouse@gmail.com', 'i  will hacked your site...............you hav to be afraid right now', 'Anounimouse'),
(7, 'gilang@alayahoo.com', 'kamu tahu aku bosan', 'Galih');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2019-02-20', 44, 1550668195),
('192.168.43.159', '2019-02-20', 2, 1550666542),
('127.0.0.1', '2019-02-21', 2, 1550715617),
('::1', '2019-02-21', 2, 1550748002),
('127.0.0.1', '2019-02-22', 2, 1550792780),
('::1', '2019-02-22', 2, 1550831565),
('::1', '2019-02-23', 3, 1550897466),
('::1', '2019-02-24', 6, 1551009320),
('::1', '2019-02-25', 1, 1551095316),
('::1', '2019-02-26', 3, 1551170770),
('::1', '2019-02-27', 5, 1551268176),
('::1', '2019-02-28', 8, 1551367756),
('::1', '2019-03-01', 6, 1551438161),
('::1', '2019-03-03', 1, 1551594348),
('::1', '2019-03-05', 1, 1551793611),
('::1', '2019-03-19', 1, 1552988208);

-- --------------------------------------------------------

--
-- Table structure for table `suka`
--

CREATE TABLE `suka` (
  `id_suka` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_artikel` int(11) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suka`
--

INSERT INTO `suka` (`id_suka`, `id_user`, `id_artikel`, `time`) VALUES
(62, 4, 79, '2019-07-05'),
(63, 5, 82, '2019-07-09'),
(77, 4, 82, '2019-07-10'),
(80, 4, 80, '2019-07-11'),
(81, 4, 65, '2019-07-11'),
(82, 5, 79, '2019-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `level_pengguna` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_pengguna`, `level_pengguna`, `foto`) VALUES
(4, 'admin', '$2y$10$mVu75ZmM9n3HeFf53ZHSMeMDiGdeI0RVgNcSvD3.tLmHDqIjlsblG', 'Kampret', 2, 'sandhikaGalih.png'),
(5, 'superadmin', '$2y$10$mVu75ZmM9n3HeFf53ZHSMeMDiGdeI0RVgNcSvD3.tLmHDqIjlsblG', 'Eynika', 1, 'DSC_0702.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_pengirim`);

--
-- Indexes for table `suka`
--
ALTER TABLE `suka`
  ADD PRIMARY KEY (`id_suka`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_pengirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `suka`
--
ALTER TABLE `suka`
  MODIFY `id_suka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE,
  ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
