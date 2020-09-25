-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 07:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(16) NOT NULL,
  `pass` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('febri', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `ID` int(11) NOT NULL,
  `kode_penyakit` varchar(16) DEFAULT NULL,
  `jawaban` varchar(6) DEFAULT 'Tidak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`ID`, `kode_penyakit`, `jawaban`) VALUES
(1, 'P01', 'Ya'),
(2, 'P02', 'Ya'),
(3, 'P03', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` varchar(16) NOT NULL,
  `nama_penyakit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`) VALUES
('P01', 'Kondisi kulit yang terjadi ketika folikel rambut tersumbat minyak dan sel-sel mati (Jerawatan)'),
('P02', 'Rambut yang berubah warna menjadi abu-abu kemudian putih (Uban)'),
('P03', 'Penyakit kronis yang ditandai dengan ciri-ciri berupa tingginya kadar gula (Diabetes)'),
('P04', 'Penyakit yang disebabkan oleh parasit plasmodium, ditularkan melalui gigitan nyamuk yang terinfeksi (Malaria)'),
('P05', 'Infeksi cacing atau parasit yang tinggal didalam usus manusia (Cacingan)'),
('P06', 'Buang air besar dengan frekuensi yang tinggi, sulit ditahan, disertai tinja yang lembek, dan berair (Diare)'),
('P07', 'Infeksi jamur pada kulit yang menimbulkan ruam melingkar berwarna merah (Kurap)'),
('P08', 'Kulit Gatal-Gatal'),
('P09', 'Susah buang angin'),
('P10', 'Kelenjar keringat tubuh tidak berfungsi dengan baik (hipohidrosis/susah berkeringat)'),
('P11', 'Rasa sakit akibat peradangan dan pembengkakan pada otot dan persendian (Rematik)'),
('P12', 'Nafsu makan berkurang '),
('P13', 'Kangker Jaringan pembentuk darah'),
('P14', 'Seksual Kurang Bergairah'),
('P15', 'Sakit Perut'),
('P16', 'Luka Bakar'),
('P17', 'Stamina tidak stabil'),
('P18', 'Suhu tubuh berada di atas 38 derajat celcius (Demam)'),
('P19', 'Rasa nyeri setelah melahirkan'),
('P20', 'Kaki Bengkak'),
('P21', 'Infeksi virus yang menyerang hidung, tenggorokan, dan paru-paru (Influenza/Flu)'),
('P22', 'Hidung tersumbat maupun berair (Pilek)'),
('P23', 'Terkena gigitan binatang berbisa'),
('P24', 'Kram dan nyeri pinggul saat Haid'),
('P25', 'Air Susu Ibu Kurang Lancar'),
('P26', 'Kantong sempit berisi nanah yang berkumpul di jaringan, organ, atau ruang di dalam tubuh (Bisul)'),
('P27', 'Serpihan kulit kepala berwarna putih atau keabu-abuan (ketombe)'),
('P28', 'Daya Tahan Tubuh Lemah'),
('P29', 'Kadar Kolesterol darah tinggi'),
('P30', 'Kondisi jantung yang mencakup pembuluh yang sakit, masalah struktur, dan pembekuan darah (Sakit Jantung)'),
('P31', 'Tekanan darah terhadap dinding arteri terlalu tinggi (Tekanan Darah Tinggi)'),
('P32', 'Nyeri atau peradangan di dalam atau di sekitar gigi, karena kerusakan atau infeksi gigi (Sakit Gigi)'),
('P33', 'Bengkaknya pembuluh darah di sekitar anus (Ambeien)'),
('P34', 'Berkumpulnya gas yang tidak merata di dalam tubuh (Masuk Angin)'),
('P35', 'Kanker pada Payudara'),
('P36', 'Gangguan Paru-Paru seperti flu, bronkitis, pneumonia, akibat bakteri '),
('P37', 'Mengalami Nyeri pada Otot'),
('P38', 'Susah Kencing'),
('P39', 'Mengalami Keputihan'),
('P40', 'Sakit Mata'),
('P41', 'Luka Akibat Gigitan Ular'),
('P42', 'Keadaan Kulit dan bagian putih mata menjadi berwarna kuning (Sakit Kuning)'),
('P43', 'Peradangan pada hati atau liver (Hepatitis) '),
('P44', 'Keadaan ketika tekanan darah dalam arteri lebih rendah dibandingkan normal (tekanan darah rendah)');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE `relasi` (
  `ID` int(11) NOT NULL,
  `kode_tumbuhan` varchar(16) DEFAULT NULL,
  `kode_penyakit` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`ID`, `kode_tumbuhan`, `kode_penyakit`) VALUES
(247, 'T01', 'P01'),
(248, 'T02', 'P02'),
(250, 'T03', 'P03'),
(251, 'T03', 'P04'),
(252, 'T03', 'P05'),
(253, 'T03', 'P06'),
(254, 'T03', 'P07'),
(255, 'T03', 'P08'),
(256, 'T04', 'P03'),
(257, 'T13', 'P03'),
(258, 'T14', 'P03'),
(259, 'T17', 'P03'),
(260, 'T21', 'P03'),
(261, 'T06', 'P04'),
(262, 'T07', 'P04'),
(263, 'T08', 'P04'),
(264, 'T09', 'P04'),
(265, 'T11', 'P04'),
(266, 'T17', 'P04'),
(267, 'T07', 'P06'),
(268, 'T17', 'P06'),
(269, 'T18', 'P06'),
(270, 'T19', 'P06'),
(271, 'T08', 'P08'),
(272, 'T05', 'P09'),
(273, 'T05', 'P10'),
(274, 'T05', 'P12'),
(275, 'T05', 'P11'),
(276, 'T06', 'P13'),
(277, 'T06', 'P14'),
(278, 'T07', 'P15'),
(279, 'T07', 'P13'),
(280, 'T14', 'P13'),
(281, 'T19', 'P13'),
(282, 'T15', 'P15'),
(283, 'T08', 'P16'),
(284, 'T08', 'P17'),
(285, 'T09', 'P17'),
(286, 'T14', 'P17'),
(287, 'T20', 'P16'),
(288, 'T10', 'P18'),
(289, 'T10', 'P19'),
(290, 'T10', 'P20'),
(291, 'T11', 'P20'),
(292, 'T11', 'P21'),
(293, 'T11', 'P22'),
(294, 'T16', 'P18'),
(295, 'T20', 'P20'),
(296, 'T22', 'P20'),
(297, 'T12', 'P23'),
(298, 'T12', 'P24'),
(299, 'T13', 'P25'),
(300, 'T13', 'P26'),
(301, 'T16', 'P25'),
(302, 'T17', 'P26'),
(303, 'T22', 'P26'),
(304, 'T14', 'P27'),
(305, 'T14', 'P28'),
(306, 'T16', 'P29'),
(307, 'T16', 'P30'),
(308, 'T19', 'P29'),
(309, 'T21', 'P29'),
(310, 'T13', 'P31'),
(311, 'T14', 'P31'),
(312, 'T17', 'P31'),
(313, 'T21', 'P31'),
(314, 'T17', 'P32'),
(315, 'T18', 'P33'),
(316, 'T19', 'P34'),
(317, 'T19', 'P36'),
(318, 'T20', 'P37'),
(319, 'T20', 'P38'),
(320, 'T20', 'P39'),
(321, 'T22', 'P40'),
(322, 'T22', 'P41'),
(323, 'T23', 'P03'),
(324, 'T25', 'P03'),
(325, 'T25', 'P04'),
(326, 'T24', 'P04'),
(327, 'T25', 'P08'),
(328, 'T25', 'P11'),
(329, 'T28', 'P15'),
(330, 'T28', 'P19'),
(331, 'T27', 'P25'),
(332, 'T23', 'P31'),
(333, 'T26', 'P32'),
(334, 'T24', 'P42'),
(335, 'T24', 'P43'),
(336, 'T28', 'P44');

-- --------------------------------------------------------

--
-- Table structure for table `tumbuhan`
--

CREATE TABLE `tumbuhan` (
  `kode_tumbuhan` varchar(16) NOT NULL,
  `nama_tumbuhan` varchar(255) DEFAULT NULL,
  `khasiat` text DEFAULT NULL,
  `solusi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tumbuhan`
--

INSERT INTO `tumbuhan` (`kode_tumbuhan`, `nama_tumbuhan`, `khasiat`, `solusi`) VALUES
('T01', 'limpasu', 'Jerawat', 'Buah limpasu ditumbuk sampai halus kemudian oleskan pada wajah yang mengalami jerawatan.'),
('T02', 'Ulin ', 'Penghitam rambut  mencegah rambut beruban', 'Campurkan bagian dalam buah yang telah dikeringkan dengan minyak kelapa, dan oleskan pada rambut.'),
('T03', 'Sahang burung', 'Diabetes , malaria , cacingan , diare , kurap , gatal - gatal', 'Buah direbus kemudian minum air rebusan tersebut untuk menurunkan kadar gula darah pada penderita diabetes. Akar direbus kemudian diminum bagi penderita malaria, cacingan, dan diare. daunnya dihaluskan kemudian oleskan pada bagian tubuh yang mengalami penyakit seperti kurap, dan kulit gatal-gatal.'),
('T04', 'Jengkol', 'obat diabetes', 'Akar jengkol direbus sampai mendidih kemudian air rebusannya diminum.'),
('T05', 'Kayu Manis', 'Susah buang angin , Susah keringat , rematik , meningkatkan nafsu makan .', 'Daun atau akar direbus sampai mendidih kemudian air rebusannya diminum.'),
('T06', 'Pasak Bumi', 'Malaria , anti kanker , antileukimia , afrodisiak', 'Sediakan akar dari pasak bumi yang kering kemudian seduh sampai berubah warna selama 1 jam dengan 1 gelas air, kemudian airnya diminum.'),
('T07', 'Langsat', 'Sakit perut , diare , malaria , kanker', 'Rebus kulit bagian batang langsat sampai mendidih kemudian diminum.'),
('T08', 'Sungkai', 'Malaria , menjaga stamina , penyakit kulit (gatal gatal) , luka bakar', 'Rebus kulit bagian batang kemudian diminum untuk menjaga stamina tubuh dan mengobati malaria. Daun dihaluskan kemudian dioleskan pada bagian kulit yang mengalami luka bakar. Rebuskan daun sungkai untuk mengobati kulit gatal-gatal.'),
('T09', 'Alaban/leban', 'Menjaga stamina , malaria', 'Rebus daun atau kulit batang sampai mendidih kemudian air rebusannya diminum untuk menjaga stamina tubuh. untuk mengobati malaria dengan cara memakan bijinya yang telah dihaluskan. '),
('T10', 'Kedemba', 'Demam , pasca melahirkan', 'Kulit batang dari pohon kedemba direbus kemudian air rebusannya diminum.'),
('T11', 'Keminting/perija', 'Malaria , kaki bengkak pada wanita yang baru melahirkan , flu , pilek', 'Kulit batang dari pohon direbus kemudian diminum untuk mengobati malaria. kaki bengkak pada wanita yang baru melahirkan dapat diobati dengan membakar/menghangatkan kulit bagian batang, diatas api kemudian menginjakkan kaki yang bengkak pada bagian kulit yang telah dihangatkan. bagian dalam buah dihaluskan dan dioleskan pada hidung untuk mengobati flu dan pilek. '),
('T12', 'Kenanga/kernanga', 'Penawar racun gigitan binatang berbisa, nyeri haid', 'Kulit bagian dalam dan kambium dikerik kemudian dioleskan ke bagian yang terkena bisa gigitan binatang. Bunga segarnya diseduh dengan segelas air panas setelah hangat dapat diminum untuk mengobati nyeri haid.  '),
('T13', 'Karatau', 'Meningkatkan air susu ibu (ASI), bisul, diabetes, hipertensi, rematik', 'Perbanyak ASI dengan cara memasak daun karatau sebagai sayur. untuk mengobati bisul, rebus daun yang segar sebanyak 1 genggam kemudian diminum. sedangkan untuk mengobati diabetes, hipertensi, dan rematik kita dapat merebus daun atau akar karatau kemudian meminum air rebusannya pada pagi hari dan sore hari. '),
('T14', 'Mengkudu', 'Ketombe, hipertensi, diabetes, daya tahan tubuh, anti septik, anti bakteri, anti kanker', 'Buah mengkudu dihaluskan atau diparut dan disaring kemudian diminum untuk mengobati diabetes dan hipertensi. Daging buah mengkudu digunakan sebagai shampo untuk menghilangkan ketombe. Akar mengkudu direbus kemudian diminum untuk menambah daya tahan tubuh, dan mengobati kanker.'),
('T15', 'Kupang/Kedaung', 'Sakit perut', 'Rebus akar kupang kemudian air rebusannya diminum'),
('T16', 'Sukun', 'Anti demam , perlancar ASI , Kadar kolesterol darah , menjaga kesehatan jantung', 'Daun sukun direbus kemudian air rebusannya diminum untuk mencegah demam dan kulit buah dapat memperlancar ASI dengan cara meminum air rebusannya. Ekstrak daun sukun dapat mencegah berbagai penyakit seperti kadar kolesterol darah,  dan menjaga kesehatan jantung.'),
('T17', 'Pulai/plai', 'Diabetes , kencing manis , menurunkan tekanan darah , diare , malaria, bisul , sakit gigi', 'Kulit batang pulai/plai dikeringkan kemudian direbus dan meminum air rebusannya untuk mengobati kencing manis, menurunkan tekanan darah, diare, dan malaria. sedangkan getahnya digunakan untuk mengobati sakit gigi yang berlubang dengan cara dioleskan pada gusi dan lubang gigi.'),
('T18', 'Kayu serai', 'Diare , ambeien , pasca melahirkan', 'Rebus kulit bagian dalam kemudian air rebusannya diminum untuk mengobati diare, ambien sedangkan kulit batangnya digunakan untuk mengobati rasa sakit setelah melahirkan dengan cara meminum air rebusan kulit batangnya. '),
('T19', 'Nangka belanda/sirsak', 'Menghilangkan masuk angin , diare , membunuh sel kanker payudara , liver , paru – paru , menurunkan kolesterol', 'Untuk menghilangkan masuk angin tempelkan daun pada bagian yang sakit dengan tambahan kapur sirih. daun direbus dan diminum untuk mengobati diare. bukti riset ilmiah menunjukan ekstrak daun nangka belanda sangat potensial dalam membunuh sel kanker payudara, liver, paru-paru, dan menurunkan kolesterol.'),
('T20', 'Uduk-uduk / Keramunting', 'Pereda demam , penghilang nyeri , peluruh urin , keputihan , mengurangi bengkak , Luka bakar', 'Kupas bagian batang yang muda kemudian dimakan untuk menghilangkan nyeri. Daun segar ditambah sedikit garam kemudian dikunyah dan airnya ditelan (mengobati keputihan). untuk mengobati luka bakar haluskan daun keramunting kemudian bubuhkan pada bagian yang terluka.'),
('T21', 'Tangkan putih / tawar seribu', 'Kolesterol , diabetes , hipertensi', 'Akarnya direbus kemudian diminum untuk mengobati penyakit seperti kolesterol, diabetes, hipertensi'),
('T22', 'Bamban', 'Sakit mata , bisul , bengkak , luka gigitan ular .', 'Mengambil air yang terdapat dalam gulungan pucuk daun, kemudian diteteskan pada bagian mata yang sakit. daun yang segar dihaluskan kemudian ditempelkan pada bisul dan bagian yang bengkak. Cara mengobati luka gigitan ular dengan memotong batang yang masih mudah, cair yang keluar dari potongan diambil dan dioleskan pada luka bekas gigitan ular kemudian dibalut dengan kain bersih.'),
('T23', 'Kelubut / Kemot', 'Diabetes , hipertensi', 'Merebus semua bagian tumbuhan kemudian diminum untuk mengobati diabetes dan hipertensi. '),
('T24', 'Akar Kuning', 'Sakit kuning , hepatitis , malaria', 'Bagian yang digunakan adalah akar dan batang kemudian direbus dan diminum'),
('T25', 'Akar Sampai', 'Diabetes , malaria , reumatik , Kulit gatal , luka', 'Daun atau kulit batang dihaluskan kemudian ditelan dengan buah pisang untuk mengobati luka dan kulit gatal-gatal. air rebusan batang digunakan untuk membersih luka dan dapat juga diminum untuk mengobati diabetes, malaria, dan reumatik.'),
('T26', 'Litu / mitu', 'Sakit pada tulang , sakit pada persendian , sakit gigi', 'Bagian akar litu yang mudah ditumbuk halus lalu ditambahkan air matang dan diperas, air perasan digunakan untuk kumur-kumur (obat sakit gigi). Air rebusan akar dan daun dapat diminum untuk mengobati sakit pada tulang dan sakit persendian.'),
('T27', 'Kelakai / Paku haruan', 'Meningkatkan air susu ibu (ASI) , hipotensi , anemia .', 'Daun yang masih muda dimasak sebagai sayur untuk mengobati hipotensi, meningkatkan ASI, dan anemia.'),
('T28', 'Sembora / tembora', 'Sakit perut ,  batuk , persalinan , pasca melahirkan', 'Untuk mengatasi batuk, pasca melahirkan, dan melancarkan persalinan, cukup dengan merebus bagian daun kemudian diminum.  untuk mengatasi sakit perut daun diremas-remas dan dicampur dengan kapur kemudian oleskan pada bagian perut yang sakit.');

-- --------------------------------------------------------

--
-- Table structure for table `userkonsul`
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
-- Dumping data for table `userkonsul`
--

INSERT INTO `userkonsul` (`id_user`, `nama`, `nohp`, `jeniskelamin`, `alamat`, `tanggalkonsultasi`) VALUES
(46, 'jossa anno', '082353351914', 'perempuan', 'jln kh wahid hasyim II', '2020-07-15'),
(50, 'febrinata', '082353351914', 'lakilaki', 'jln kh wahid hasyim II', '2020-07-23'),
(51, 'febrinata', '082353351914', 'lakilaki', 'jln kh wahid hasyim II', '2020-07-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tumbuhan`
--
ALTER TABLE `tumbuhan`
  ADD PRIMARY KEY (`kode_tumbuhan`);

--
-- Indexes for table `userkonsul`
--
ALTER TABLE `userkonsul`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `relasi`
--
ALTER TABLE `relasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT for table `userkonsul`
--
ALTER TABLE `userkonsul`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
