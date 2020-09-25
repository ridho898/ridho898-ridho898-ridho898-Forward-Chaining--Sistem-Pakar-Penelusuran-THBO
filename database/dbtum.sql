-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2019 pada 16.21
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamanaga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user` varchar(16) NOT NULL,
  `pass` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('arfa', 'yunida');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(16) NOT NULL,
  `nama_gejala` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G01a', 'Kerusakan berada di buah'),
('G01b', 'Terdapat kerusakan di buah'),
('G01c', 'Kerusakan berada di buah'),
('G01d', 'Terdapat kerusakan di buah'),
('G02a', 'Kerusakan berada di sulur atau batang'),
('G02b', 'Kerusakan berada di batang atau sulur'),
('G02c', 'Terdapat kerusakan di sulur atau batang'),
('G03', 'Kerusakan berada di buah dan sulur'),
('G04', 'Buah terlihat berlubang'),
('G05', 'Lubang berbentuk khas bekas patukan paruh'),
('G06', 'Daging buah terlihat kosong'),
('G07', 'Buah menjadi busuk'),
('G08', 'Terdapat bintik-bintik halus kecoklatan di batang'),
('G09', 'Jaringan klorofil pada kulit cabang (kulit batang) berubah menjadi warna coklat'),
('G10', 'Terdapat bercak-bercak kecil, kering, timbul dan kasar jika diraba'),
('G11', 'Pusat bercak berwarna coklat tua dilingkari warna coklat yang lebih muda'),
('G12', 'Terdapat kusam pada sulur'),
('G13', 'Terdapat bekas gigitan di bagian pinggir batang atau sulur'),
('G14', 'Bekas gigitan bagian ujungnya bergerigi tipis dan halus seperti bekas parutan'),
('G15', 'Tunas terlihat rusak dan mengering di bekas parutan'),
('G16', 'Terdapat jejak berupa lendir berwarna keperakan'),
('G17', 'Batang tanaman buah naga berlubang dan habis'),
('G18', 'Terdapat kotoran berwarna hitam pada sulur atau tiang penyangga atau permukaan tanah'),
('G19', 'Terdapat bekas cangkang di sekitar tanaman buah naga'),
('G20', 'Kulit buah atau sulur dipenuhi luka-luka kecil dan kasar'),
('G21', 'Bekas gigitan berupa bercak kecil berwarna coklat kehitaman di buah atau sulur'),
('G22', 'Timbul titik kecil di permukaan buah'),
('G23', 'Terdapat bercak lebar dan basah di permukaan buah'),
('G24', 'Buah membusuk'),
('G25', 'Jika buah dibelah, akan dijumpai beberapa ulat atau larva berwarna putih keruh'),
('G26', 'Buah gugur dari pohon'),
('G27', 'Luka akibat gigitan berwarna coklat pada permukaan kulit buah'),
('G28', 'Terdapat bekas gigitan bergerigi, kasar dan sobek'),
('G29', 'Permukaan kulit buah berselaput kering dan tampak kotor'),
('G30', 'Terdapat lilin berwarna putih di permukaan buah'),
('G31', 'Buah agak berkerut'),
('G32', 'Buah menguning'),
('G33', 'Buah mengecil'),
('G34', 'Buah kempes'),
('G35', 'Buah layu'),
('G36', 'Buah kering'),
('G37', 'Bekas gigitan yang bergerigi dan sobek menjadi mengering');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hama`
--

CREATE TABLE `hama` (
  `kode_hama` varchar(16) NOT NULL,
  `nama_hama` varchar(255) DEFAULT NULL,
  `solusi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hama`
--

INSERT INTO `hama` (`kode_hama`, `nama_hama`, `solusi`) VALUES
('H001', 'Bekicot (Achatina fulica)', 'a. Melakukan pemungutan dan pemusnakan bekicot yang ditemukan di kebun buah naga.<br>\r\nb. Menjaga kebersihan kebun dengan cara sanitasi kebun dari gulma yang menjadi sarang bekicot untuk berkembang biak.<br>\r\nc. Menggunakan umpan beracun seperti pepaya muda yang dicincang atau bekatul yang dicampur dengan insektisida atau molukisida.'),
('H002', 'Kutu Putih (Mealybugs)', 'a. Membersihkan lingkungan pertanaman dari gulma.<br>\r\nb. Tidak menanam tanaman buah naga berdekatan dengan tanaman inang hama ini, seperti papaya, rambutan, kopi, dan lain-lain.<br>\r\nc. Melakukan pemasangan likat kuning sebanyak 60 buah dalam 1 hektar.<br>\r\nd. Pembungkusan buah menggunakan kantong plastik.<br>\r\ne. Penggunaan agensi hayati (entomopathogen) Beauveria bassiana (jamur untuk melawan hama).<br>\r\nf. Menggunakan pestisida nabati berbahan dasar kulit jeruk atau biji sirsak, dibumbuk lalu disemprotkan ke bagian yang terserang hama.<br>\r\ng. Apabila serangan cukup tinggi, kendalikan dengan akarisida dan atau insektisida.'),
('H003', 'Burung (Aves)', 'a. Membudidayakan buah naga dijauhkan dari tanaman buah-buahan lain seperti pisang dan pepaya.<br>\r\nb. Usir hama burung apabila terlihat sedang menyerang buah naga.<br>\r\nc. Buah dibungkus menggunakan kantong plastik agar buah terlihat samar oleh burung.'),
('H004', 'Lalat Buah (Bactrocera papayae)', 'a. Tidak menanam buah naga berdekatan dengan tanaman inang Bactrocera papayae, contohnya cabe, pepaya, tomat, dan terong.<br>\r\nb. Buah yang terserang lalat buah baik yang masih dipohon atau sudah gugur dikumpulkan dan dimusnahkan dengan cara dikubur. <br>\r\nc. Pemasangan perangkap lalat buah dengan menggunakan atraktan metil eugenol, dengan jumlah perangkap 40 â€“ 50 buah/Ha dan dilakukan dalam wilayah yang relatif luas serta secara terus menerus. <br>\r\nd. Buah dibungkus dengan kantong plastik agar lalat tidak dapat singgah.'),
('H005', 'Tungau (Tetranychus sp.)', 'a. Memasang likat kuning atau perangkap kuning kurang lebih 50 buah dalam 1 hektar.<br>\r\nb. Sanitasi lahan dari tanaman yang menjadi inang lain hama ini, seperti singkong, cabai, pepaya, terong, dan lain-lain.<br>\r\nc. Penggunaan insektisida nabati berbahan baku akar tuba, daun papaya, daun sirsak, mimba, sereh, bawang putih, bawang merah, lada, cabai.<br>\r\nd. Apabila serangan cukup tinggi, dapat dikendalikan dengan penggunaan akarisida atau insektisida yang efektif, penyemprotan dilakukan pada bagian cabang atau batang.'),
('H006', 'Kumbang (Hypomeces squamosus)', 'a. Apabila ditemukan kumbang di kebun buah naga, segera pungut dan musnahkan.<br>\r\nb. Sanitasi lahan dan lingkungan pertanaman dari pohon atau tanaman lain yang menjadi inang tanaman ini, seperti jeruk, mangga, pohon gamal, rambutan, dan lain-lain.'),
('H007', 'Belalang (Aularches miliaris)', 'a. Sanitasi lingkungan pertanaman dari gulma.<br>\r\nb. Tidak menanam buah naga berdekatan dengan pohon lain yang disukai belalang, misalnya jagung.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `ID` int(11) NOT NULL,
  `kode_gejala` varchar(16) DEFAULT NULL,
  `jawaban` varchar(6) DEFAULT 'Tidak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`ID`, `kode_gejala`, `jawaban`) VALUES
(1, 'G02a', 'Ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi`
--

CREATE TABLE `relasi` (
  `ID` int(11) NOT NULL,
  `kode_hama` varchar(16) DEFAULT NULL,
  `kode_gejala` varchar(16) DEFAULT NULL,
  `mb` double DEFAULT NULL,
  `md` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi`
--

INSERT INTO `relasi` (`ID`, `kode_hama`, `kode_gejala`, `mb`, `md`) VALUES
(197, 'H001', 'G02a', 0.8, 0.2),
(198, 'H001', 'G13', 1, 0),
(199, 'H001', 'G14', 0.8, 0.2),
(200, 'H001', 'G15', 0.5, 0.5),
(201, 'H001', 'G16', 1, 0),
(202, 'H001', 'G17', 0.1, 0.9),
(203, 'H001', 'G18', 0.9, 0.1),
(204, 'H001', 'G19', 0.8, 0.2),
(205, 'H002', 'G01a', 0.7, 0.3),
(206, 'H002', 'G29', 0.5, 0.5),
(207, 'H002', 'G30', 0.7, 0.3),
(208, 'H002', 'G31', 0.8, 0.2),
(209, 'H002', 'G32', 0.6, 0.4),
(210, 'H002', 'G33', 0.8, 0.2),
(211, 'H002', 'G34', 0.8, 0.2),
(212, 'H002', 'G35', 0.9, 0.1),
(213, 'H002', 'G36', 0.8, 0.2),
(214, 'H003', 'G01b', 0.8, 0.2),
(219, 'H003', 'G04', 0.9, 0.1),
(220, 'H003', 'G05', 1, 0),
(221, 'H003', 'G06', 1, 0),
(222, 'H003', 'G07', 0.5, 0.5),
(223, 'H004', 'G01c', 1, 0),
(224, 'H004', 'G22', 0.5, 0.5),
(225, 'H004', 'G23', 0.9, 0.1),
(226, 'H004', 'G24', 1, 0),
(227, 'H004', 'G25', 1, 0),
(228, 'H004', 'G26', 0.9, 0.1),
(229, 'H005', 'G02b', 0.5, 0.5),
(230, 'H005', 'G08', 0.8, 0.2),
(231, 'H005', 'G09', 0.9, 0.1),
(232, 'H005', 'G10', 0.9, 0.1),
(233, 'H005', 'G11', 0.3, 0.7),
(234, 'H005', 'G12', 0.6, 0.4),
(235, 'H006', 'G01d', 0.6, 0.4),
(236, 'H006', 'G02c', 0.6, 0.4),
(237, 'H006', 'G20', 0.7, 0.3),
(238, 'H006', 'G21', 0.8, 0.2),
(239, 'H007', 'G03', 0.7, 0.3),
(240, 'H007', 'G27', 0.8, 0.2),
(241, 'H007', 'G28', 0.8, 0.2),
(242, 'H007', 'G37', 0.8, 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `userkonsul`
--

CREATE TABLE `userkonsul` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggalkonsultasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `userkonsul`
--

INSERT INTO `userkonsul` (`id_user`, `nama`, `nohp`, `jeniskelamin`, `alamat`, `tanggalkonsultasi`) VALUES
(17, 'arfa', '312', 'perempuan', 'jalan', '2019-11-09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `hama`
--
ALTER TABLE `hama`
  ADD PRIMARY KEY (`kode_hama`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `userkonsul`
--
ALTER TABLE `userkonsul`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `relasi`
--
ALTER TABLE `relasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT untuk tabel `userkonsul`
--
ALTER TABLE `userkonsul`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
