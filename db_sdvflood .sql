-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 06:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sdvflood`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `judul` varchar(500) NOT NULL,
  `isi` varchar(3000) NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`judul`, `isi`, `id_berita`) VALUES
('Banjir Jakarta,\r\nWaspada Hujan Lebat hingga 25 Februari 2021', 'Sejumlah wilayah di DKI Jakarta dan sekitarnya dilaporkan terendam banjir, Sabtu (20/2/2021). Hingga Sabtu sore, banjir di sejumlah titik belum surut.\r\nAkibatnya, ribuan keluarga terpaksa mengungsi ke posko yang disediakan oleh Badan Penanggulangan Bencana Daerah (BPBD) setempat. Tak hanya itu, lalu lintas di wilayah yang terdampak banjir pun lumpuh, karena luapan air mengganggu di sejumlah ruas jalan. Warga Ibu Kota diingatkan untuk tetap waspada karena masih ada potensi hujan lebat hingga 25 Februari 2021. Kepala Badan Meteorologi, Klimatologi, dan Geofisika (BMKG) Dwikorita Karnawati mengatakan, BMKG sudah memprediksi wilayah Jabodetabek akan diguyur hujan lebat dengan intensitas curah hujan antara 100-150 mm pada 18-19 Februari 2021. Ia menyebutkan, curah hujan tertinggi terjadi di Pasar Minggu dengan intensitas 226 mm/hari, di Sunter Hulu 197 mm/hari, Halim mencapai 176 mm/hari, dan di Lebak Bulus mencapai 154 mm/hari.\r\n', 1),
('Bendungan Ciawi - Sukamahi Dikebut, Kontraktor: Desember Bisa Diresmikan...', 'Meski belum rampung 100 prosen, proyek Bendungan Ciawi dan Sukamahi di Kabupaten Bogor akan ditargetkan untuk peresmiannya tahun 2021 ini. \r\n\r\nProject Manager PT. Brantas Abipraya selaku kontraktor Bendungan Ciawi, Whima Regianto, mengatakan perkembangan pengerjaan proyek yang dimulai sejak tahun 2017 itu terus dikebut.\r\n\r\nMulai menambah jam kerja hingga merapikan prioritas lokasi pembangunan seluas 31,96 hektar yang menelan biaya 798,7 miliar rupiah itu.  \r\n\r\nSebab, beberapa kali ditargetkan selesai bendungan itu masih saja terkendala perampungannya. Salah satunya perihal pembebasan lahan. \"Pembebasan sisa sedikit aja, di daerah sukakarya khususnya area greenbelt. Rencana tetap diresmikan tahun ini targetnya,\" kata Whima dikonfirmasi, Senin 28 Juni 2021. \r\n\r\nSementara Humas kontraktor proyek pembangunan Bendungan Sukamahi, Bambang Supra Bowo menyebut pembebasan lahan bukan menjadi kendala utama proyek pembendung banjir yang terletak di Megamendung itu. Sebab, lahan utama untuk pembangunan sudah selesai di bebaskan.  \r\n\r\nBowo mengatakan, kendala utama saat ini ialah cuaca. Sehingga pengerjaan terkesan molor dan sulit dirampungkan dalam tempo cepat dan sesuai target.\r\n\r\nNamun, Bowo menyebut, beberapa pejabat yang pernah datang ke lokasi menyebut proyek akan diresmikan dalam tahun ini.  \r\n\r\n\"Targetnya akhir tahun ini, pembangunan sudah sekitar 79 persen. Perihal pembebasan lahan makam, itu di luar lahan utama pembangunan. Jadi gak begitu mempengaruhi secara signifikan, kendala utama kita selaku kontraktor saat ini adalah cuaca yang sering hujan,\" kata Bowo.  \r\n\r\nDua Mega Proyek Strategis Nasional pembendung banjir Ibu Kota proyeksi Jokowi ini, semula ditargetkan rampung tahun 2020, namun gagal. Lalu kembali ditargetkan selesai Mei tahun ini, lagi-lagi molor karena terganjal pembebasan lahan.  \r\n\r\nDiantara ganjalan pembebasan lahan, adalah lahan pemakaman yang tidak mau dilepas oleh ahli waris di proyek Bendungan Sukamahi seluas 500 meter dan berjumlah 125 makam.\r\n\r\nLokasinya terletak di Pasir Kalong, Desa Sukakarya, Megamendung, Kabupaten Bogor. \"Sebagian ahli warisnya menolak relokasi,\" kata Kades Sukakarya, Hasan Sukandi ihwa perkembangan proyek Bendungan Ciawi dan Bendungan Sukamahi tersebut.', 2),
('Pos Pantau Sunter Siaga 3, BPBD DKI Peringatkan Warga di Bantaran Sungai', 'Badan Penanggulangan Bencana Daerah DKI Jakarta memperingatkan warga di sekitar bantaran sungai untuk berhati-hati terhadap bahaya banjir.\r\n\r\n\"Diimbau kepada warga di sekitar bantaran sungao agar waspada dan berhati-hati terhadap bahaya banjir,\" seperti dikutip dalam akun Instagram BPBD DKI Jakarta, Senin, 19 April 2021.\r\n\r\nImbauan itu diberikan, karena pada pukul 21.00 ketinggian air di pos pantau  Sunter hulu 190 cm atau mendung dalam status siaga tiga.\r\n\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `lokasisungai`
--

CREATE TABLE `lokasisungai` (
  `id_sungai` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `sungai/kali` varchar(50) NOT NULL,
  `tinggi air` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasisungai`
--

INSERT INTO `lokasisungai` (`id_sungai`, `lokasi`, `sungai/kali`, `tinggi air`, `tanggal`, `status`) VALUES
(1, 'Bendung. Katulampa (Hulu)', 'Ciliwung', 23, '2021-07-07', 'NORMAL'),
(2, 'P.A. Marina Ancol', 'Laut', 229, '2021-07-07', 'SIAGA'),
(3, 'Pompa Cideng', 'Cideng Siantar', 14, '2021-07-07', 'NORMAL'),
(4, 'Pompa Pasar Ikan', 'Laut', 232, '2021-07-07', 'SIAGA');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nama` varchar(50) NOT NULL,
  `id_pengguna` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `konfirmasi_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nama`, `id_pengguna`, `alamat`, `email`, `password`, `konfirmasi_pass`) VALUES
('budi doremi', 'budi123', 'cikarang', 'budi@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `lokasisungai`
--
ALTER TABLE `lokasisungai`
  ADD PRIMARY KEY (`id_sungai`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lokasisungai`
--
ALTER TABLE `lokasisungai`
  MODIFY `id_sungai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
