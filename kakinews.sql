-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 08:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kakinews`
--

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `idiklan` int(5) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`idiklan`, `foto`) VALUES
(2, 'assets/file/1865guru.jpg'),
(3, 'assets/file/9426guru1.jpg'),
(4, 'assets/file/5557guru2.jpg'),
(6, 'assets/file/2924guru3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(5) NOT NULL,
  `kategorinya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `kategorinya`) VALUES
(11, 'Peristiwa dan Hukum'),
(12, 'Daerah'),
(13, 'Serba -  Serbi'),
(14, 'Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `idkonten` int(11) NOT NULL,
  `id` int(5) NOT NULL,
  `judul` text NOT NULL,
  `idkategori` int(5) NOT NULL,
  `konten` text NOT NULL,
  `waktu` datetime NOT NULL,
  `thumb` text NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`idkonten`, `id`, `judul`, `idkategori`, `konten`, `waktu`, `thumb`, `view`) VALUES
(5, 2, 'Becak dan Warisan Bekal Ilmu untuk Anak', 13, '<div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">Bahruddin sedang duduk santai di atas becaknya. Foto- Salim<br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-weight: bolder;\">NEWS.ID</span>&nbsp;- Menanam pohon itu bukan hanya sekedar menanam, tapi perlu dirawat, diberi pupuk dan disiram agar ia tumbuh subur. Begitu pula jika kita ingin memiliki anak yang berbakti, bukan hanya sekadar melahirkan, tapi juga perlu dididik dan dibimbing dengan ilmu.</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">Begitulah pesan yang terlontar dari Bahruddin, seorang pria tua berusia sekitar 70 tahun yang menjalani profesi sebagai tukang becak selama 43 tahun.</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">Pria tua ini berangkat dari rumahnya yang beralamat di Antasan Senor, Martapura, dari jam 7 pagi, kemudian mangkal dengan becaknya hingga jam 4 sore.&nbsp;</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">Dari hasil jerih payahnya menjadi tukang becak yang dimulainya sejak tahun 1979, ia dapat menyekolahkan tujuh anaknya. Bahkan, kini beberapa anaknya sudah selesai sekolah dan memiliki kehidupan masing-masing.</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">\"Kalau kita bagawi (bekerja, red) dengan cara yang halal, InsyaAllah kawa haja manafkahi (dapat menafakhi, red) keluarga dan menyekolahkan anak,\" cerita Bahruddin ketika mangkal di depan Gapura Alun-Alun Martapura, Sabtu (19/11/22).</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">Meski kini sebagian anaknya yang dulu disekolahkannya telah memiliki pekerjaan dan dapat membantu Bahruddin perihal ekonomi, Ia tetap setia dengan becaknya. Mengayuhnya, bekerja.&nbsp;</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">Menurutnya, meskipun sudah memasuki usia senja, bekerja adalah kewajiban baginya untuk menafkahi keluarga. Selain itu, dengan mengayuh becak, bisa tetap menjaga tubuh agar tetap fit dan sehat. Hal ini terlihat, ketika menghampirinya yang sedang santai di atas becaknya, tubuhnya terlihat tetap kokoh, juga ada kearifan.</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">Ia percaya, selama pekerjaan yang dilakoni dijalankan secara halal, maka rezeki akan datang dengan sendiri. Hal ini terbukti ketika ia mampu menyekolahkan anak-anaknya di Pondok pesantren tertua di Kalsel, yakni Pondok Pesantren Darussalam, Martapura.</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">Ia bercerita, alasan ia menyekolahkan anak-anaknya di pondok pesantren adalah, ia ingin keturunannya memiliki bekal ilmu agama. Sebab menurutnya, warisan berupa ilmu agama akan berguna sepanjang masa. \"Kalau harta, kalau tidak bisa mengelola, akan cepat habis,\" ujar Bahruddin.</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">Bahruddin berkeyakinan bahwa memiliki ilmu itu penting, wabil khusus ilmu agama. Dengan bekal ilmu tersebut, membawa diri ke mana-mana akan mudah.&nbsp;</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">Baginya, pendidikan atau mewariskan ilmu kepada tiap anaknya adalah hal yang teramat penting untuk menjadi bekal anaknya kelak menjalani kehidupan yang akan datang.</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">Ketika sudah memiliki niat yang benar katanya, maka beban saat melakoni pekerjaan pun tak terasa lagi, ada tanggung jawab juga pengorbanan di sana. Khusus bagi Bahruddin, agar waktu tidak terbuang sia-sia, ia meniatkan bekerja atau ketika mangkal sambil menunggu waktu shalat.</span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br></span></div><div style=\"text-align: justify; font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\">\"Mangkal sambil mahadangi (menunggu, red) waktu shalat, karena dengan begini gawian (pekerjaan, red) kita bisa mendatangkan berkah, sehingga bisa menyekolahkan anak-anak, Alhamdulillah,\" kata Bahruddin. (slm)</span></div>', '2022-11-21 14:51:00', 'assets/file/29681668903386.16689033869188.jpg', 1),
(6, 2, 'Rumah Warga di Aluh-Aluh Porak Poranda', 11, '<div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\">Dua rumah warga Desa Tanipah porak poranda usai diterjang puting beliung dan banjir rob. Foto - Istimewa</div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><span style=\"font-weight: bolder;\">KAKINEWS.ID</span>Â - Dua rumah di Desa Tanipah RT 02, Kecamatan Aluh-Aluh, Kabupaten Banjar mengalami kerusakan parah usai dilanda banjir rob pada Kamis (17/11/22) sekitar pukul 22.00 WITA.</div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\">Banjir rob ini diduga dipicu oleh tingginya curah hujan disertai angin kencang yang melanda kawasan tersebut. Selain itu, 5 rumah warga lainnya juga mengalami kerusakan meskipun hanya kategori ringan.</div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\">Dari data yang dihimpun, 2 rumah yang mengalami kerusakan parah itu milik Heri (44) dan Siswandi (45).Â </div>', '2022-11-20 14:58:00', 'assets/file/91411668748882.16687488820430.jpg', 0),
(7, 2, 'Pengesahan Undang-Undang Kalsel, Banjarbaru Ditunjuk Menjadi Ibu Kota', 12, '<div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\">Tugu Bundaran Simpang Empat Banjarbaru nampak atas. Foto - Tim<br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><span style=\"font-weight: bolder;\">KAKINEWS.ID</span>Â â€“ Pemindahan ibu kota Kalimantan Selatan bukan lagi sekadar isapan jempol belaka. Berdasarkan Rancangan Undang-Undang Provinsi yang disahkan wakil rakyat di Senayan, Kota Banjarbaru dipilih menjadi pusat Pemerintahan Provinsi Kalsel, menggantikan Kota Banjarmasin.</div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\">Penetapan Banjarbaru sebagai ibu kota baru itu tercantum dalam RUU Kalimantan Selatan Bab II Pasal ke-7.</div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\">â€œIbukota Provinsi Kalimantan Selatan berkedudukan di Kota Banjarbaru,â€ bunyi pasal tersebut dikutip Mediakita.co.id dari Salinan RUU Kalimantan Selatan, Jumat (18/2/22).</div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\">Kabar penunjukan Kota Idaman sebagai ibu kota Kalsel itu pun tak ditampik oleh Wali Kota Banjarbaru, HM. Aditya Mufti Ariffin, S.H., M.H. Dirinya pun mengaku bersyukur atas penetapan itu, sekaligus menilai hal tersebut merupakan suatu amanah dan tanggung jawab bersama untuk lebih meningkatkan taraf diberbagai sektor, mulai infrastruktur hingga pelayanan publik.</div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\">â€œAlhamdulillah, melalui RUU yang saat ini disahkan menjadi UU Kalsel, Banjarbaru dipercaya menjadi ibu kota Kalsel. Tentu ini tugas kita bersama untuk lebih memajukan Kota Banjarbaru,\" ungkapnya.</div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\">Selain itu, Aditya juga meyakini bahwa penetapan tersebut secara tak langsung turut berdampak terhadap kemajuan daerah. Terlebih lagi kata Dia, rencana pemindahan ibu kota negara (IKN) ke Kalimantan Timur yang menandakan bahwa Banjarbaru sebagai daerah penyanggah utama mewakili Kalimantan Selatan.</div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\">Ia pun mengajak seluruh stakeholder agar saling merangkul satu dengan yang lainnya dalam mempersiapkan diri sebagai salah satu wilayah penyanggah IKN baru. Meski banyak tantangan, dirinya optimis penetapan sebagai ibu kota akan mengantarkan Banjarbaru untuk bertransformasi lebih pesat lagi.</div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\"><br></div><div style=\"text-align: justify; font-family: \"Noto Sans JP\", sans-serif; font-size: 14px;\">\"Untuk itu saya membutuhkan dukungan semua pihak,\" pintanya.</div>', '2022-11-18 15:00:00', 'assets/file/98621645170340.16451703400722.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'admin', 'admin', 'admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`idiklan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`idkonten`),
  ADD KEY `id` (`id`),
  ADD KEY `idkategori` (`idkategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `idiklan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `idkonten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konten`
--
ALTER TABLE `konten`
  ADD CONSTRAINT `konten_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konten_ibfk_2` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
