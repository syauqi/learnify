-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 05:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnify`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(64) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(0, 'admin', '$2y$10$EX0L5MeIQldpkCuTZW.mjujTaj.Yy20IW0GOluecU/c.es.9r6E5.', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_guru` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_mapel` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `email`, `nama_guru`, `password`, `nama_mapel`) VALUES
(214748364, 'Dummy@gmail.com', 'Ahmad Saugi', '', 'Pendidikan Agama Islam'),
(214748365, 'zaidanline67@gmail.com', 'Saauky', '$2y$10$3qQ2TYrtQHy44LblPMexnu4ZQrCWD.dYh20P.sOL5cyo6Z48fJQEq', 'Matematika'),
(1819107728, 'imas@gmail.com', 'Imas Kartika', '$2y$10$wCSBYTaCpSJaEX/1VUo1p.YU88vbgr7PeW.j1OkmD2xnKjIbB7SD6', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(255) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(128) NOT NULL,
  `nama_mapel` varchar(128) NOT NULL,
  `video` varchar(255) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL,
  `kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `nama_guru`, `nama_mapel`, `video`, `deskripsi`, `kelas`) VALUES
(38, 'Saauky', 'Matematika', 'Matematika_-_Dummy_-_1.mp4', '                                        RG Squad, siapa yang pernah dengar kata aljabar? Ini merupakan satu cabang matematika dalam pemecahan masalah dengan menggunakan huruf-huruf untuk mewakili angka-angka. Berasal dari bahasa Arab, al-jabr yang artinya penyelesaian. Kamu tahu siapa penemunya? Ia merupakan cendikiawan bernama Al-Khawarizmi. Sekarang, mari kita simak lebih lanjut tentang definisi dan bentuk-bentuk aljabar secara lebih mendalam ya! s', 'X'),
(42, 'Saauky', 'Matematika', 'Matematika_-_Dummy_-_1.mp4', 'Dalam matematika dan ilmu komputer, Aljabar Boolean adalah struktur aljabar yang &quot;mencakup intisari&quot; operasi logika AND, OR, NOR, dan NAND dan juga teori himpunan untuk operasi union, interseksi dan komplemen. Penamaan Aljabar Boolean sendiri berasal dari nama seorang matematikawan asal Inggris, bernama George Boole.', 'X'),
(43, 'Saauky', 'Matematika', 'Matematika_-_Dummy_-_2.mp4', 'Aljabar linear adalah bidang studi matematika yang mempelajari sistem persamaan linear dan solusinya, vektor, serta transformasi linear. Matriks dan operasinya juga merupakan hal yang berkaitan erat dengan bidang aljabar linear.', 'XI'),
(44, 'Saauky', 'Matematika', 'Matematika_-_Dummy_3.mp4', 'Vektor merupakan kajian aljabar yang biasanya digunakan untuk memecahkan permasalahan fisika seperti gerak, gaya, dan sebagainya. ... Sebuah vektor bisa dinyatakan dalam bentuk geometri yang digambarkan sebagai sebuah ruas garis dengan arah tertentu dimana salah satunya merupakan pangkal dan satunya lagi merupakan ujung.', 'XI'),
(45, 'Saauky', 'Matematika', 'Matematika_-_Dummy_4.mp4', 'Vektor dalam matematika dan fisika adalah objek geometri yang memiliki besar dan arah. Vektor jika dilambangkan dengan tanda panah. Besar vektor proporsional dengan panjang panah dan arahnya bertepatan dengan arah panah. Vektor dapat melambangkan perpindahan dari titik A ke B. Vektor sering ditandai sebagai', 'XII'),
(46, 'Saauky', 'Matematika', 'Matematika_-_Dummy_5.mp4', 'Pecahan, atau disebut fraksi adalah istilah dalam matematika yang terdiri dari pembilang dan penyebut. Hakikat transaksi dalam bilangan pecahan adalah bagaimana cara menyederhanakan pembilang dan penyebut.', 'XII'),
(47, 'Zaaidan', 'IPA', 'IPA_-_Dummy_1.mp4', 'Fisika adalah salah satu disiplin akademik paling tua, mungkin yang tertua melalui astronomi yang juga termasuk di dalamnya.[6] Lebih dari dua milenia, fisika menjadi bagian dari Ilmu Alam bersama dengan kimia, biologi, dan cabang tertentu matematika, tetapi ketika munculnya revolusi ilmiah pada abad ke-17, ilmu alam berkembang sebagai program penelitian sendiri.[b] Fisika berkembang dengan banyak spesialisasi bidang ilmu lain, seperti biofisika dan kimia kuantum, dan batasan fisiknya tidak didefinisikan dengan jelas. Ilmu baru dalam fisika terkadang digunakan untuk menjelaskan mekanisme dasar sains lainnya[3] serta membuka jalan area penelitian lainnya seperti matematika dan filsafat.', 'X'),
(50, 'Zaaidan', 'IPA', 'IPA_-_Dummy_2.mp4', 'Kristalisasi adalah proses pembentukan bahan padat dari pengendapan larutan, melt, atau lebih jarang pengendapan langsung dari gas. Kristalisasi juga merupakan teknik pemisahan kimia antara bahan padat-cair, di mana terjadi perpindahan massa dari suat zat terlarut dari cairan larutan ke fase kristal padat', 'X'),
(51, 'Zaaidan', 'IPA', 'IPA_-_Dummy_3.mp4', 'Peleburan adalah proses reduksi bijih sehingga menjadi logam unsur yang dapat digunakan berbagai macam zat seperti karbid, hidrogen, logam aktif atau dengan cara elektrolisis. Pemilihan zat pereduksi ini tergantung dari kereaktifan masing-masing zat.', 'XI'),
(52, 'Zaaidan', 'IPA', 'IPA_-_Dummy_4.mp4', 'Pencairan, pelelehan atau Peleburan adalah proses yang menghasilkan perubahan fase zat dari padat ke cair. Energi internal dari zat padat meningkat mencapai temperatur tertentu saat zat ini berubah menjadi cair.Benda yang telah mencair sepenuhnya disebut benda cair.', 'XI'),
(53, 'Zaaidan', 'IPA', 'IPA_-_Dummy_5.mp4', 'Dalam ilmu fisika dan kimia, pembekuan adalah proses di mana cairan berubah menjadi padatan. Titik beku adalah temperatur di mana hal ini terjadi. Peleburan, adalah proses kebalikan dari pembekuan di mana padatan berubah manjadi cairan. Pada sebagian besar zat, titik beku dan titik lebur biasanya sama.', 'XII'),
(54, 'Zaaidan', 'IPA', 'IPA_-_Dummy_6.mp4', 'Teknologi pembekuan makanan adalah teknologi mengawetkan makanan dengan menurunkan temperaturnya hingga di bawah titik beku air.', 'XII'),
(55, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_1.mp4', 'Bahasa Inggris adalah bahasa Jermanik yang pertama kali dituturkan di Inggris pada Abad Pertengahan Awal dan saat ini merupakan bahasa yang paling umum digunakan di seluruh dunia.[4] Bahasa Inggris dituturkan sebagai bahasa pertama oleh mayoritas penduduk di berbagai negara, termasuk Britania Raya, Irlandia, Amerika Serikat, Kanada, Australia, Selandia Baru, dan sejumlah negara-negara Karibia; serta menjadi bahasa resmi di hampir 60 negara berdaulat. Bahasa Inggris adalah bahasa ibu ketiga yang paling banyak dituturkan di seluruh dunia, setelah bahasa Mandarin dan bahasa Spanyol.[5] Bahasa Inggris juga digunakan sebagai bahasa kedua dan bahasa resmi oleh Uni Eropa, Negara Persemakmuran, dan Perserikatan Bangsa-Bangsa, serta beragam organisasi lainnya.', 'X'),
(56, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_2.mp4', 'Bahasa Inggris berkembang pertama kali di Kerajaan Anglo-Saxon Inggris dan di wilayah yang saat ini membentuk Skotlandia tenggara. Setelah meluasnya pengaruh Britania Raya pada abad ke-17 dan ke-20 melalui Imperium Britania, bahasa Inggris tersebar luas di seluruh dunia.[6][7][8] Di samping itu, luasnya penggunaan bahasa Inggris juga disebabkan oleh penyebaran kebudayaan dan teknologi Amerika Serikat yang mendominasi di sepanjang abad ke-20.[9] Hal-hal tersebut telah menyebabkan bahasa Inggris saat ini menjadi bahasa utama dan secara tidak resmi (de facto) dianggap sebagai lingua franca di berbagai belahan dunia.[10][11]', 'X'),
(57, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_3.mp4', 'Menurut sejarahnya, bahasa Inggris berasal dari peleburan beragam dialek terkait, yang saat ini secara kolektif dikenal sebagai bahasa Inggris Kuno, yang dibawa ke pantai timur Pulau Britania oleh pendatang Jermanik (Anglo-Saxons) pada abad ke-5; kata English\' berasal dari nama Angles.[12] Suku Anglo-Saxons ini sendiri berasal dari wilayah Angeln (saat ini Schleswig-Holstein, Jerman). Bahasa Inggris awal juga dipengaruhi oleh bahasa Norse Kuno setelah Viking menaklukkan Inggris pada abad ke-9 dan ke-10.', 'XI'),
(58, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_4.mp4', 'Penaklukan Normandia terhadap Inggris pada abad ke-11 menyebabkan bahasa Inggris juga mendapat pengaruh dari bahasa Prancis Norman, dan kosakata serta ejaan dalam bahasa Inggris mulai dipengaruhi oleh bahasa Latin Romawi (meskipun bahasa Inggris sendiri bukanlah rumpun bahasa Romawi),[13][14] yang kemudian dikenal dengan bahasa Inggris Pertengahan. Pergeseran Vokal yang dimulai di Inggris bagian selatan pada abad ke-15 adalah salah satu peristiwa bersejarah yang menandai peralihan bahasa Inggris Pertengahan menjadi bahasa Inggris Modern.', 'XI'),
(59, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_5.mp4', 'Selain Anglo-Saxons dan Prancis Norman, sejumlah besar kata dalam bahasa Inggris juga berakar dari bahasa Latin, karena Latin adalah lingua franca Gereja Kristen dan bahasa utama di kalangan intelektual Eropa,[15] dan telah menjadi dasar kosakata bagi bahasa Inggris modern.', 'XII'),
(60, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_6.mp4', 'Karena telah mengalami perpaduan beragam kata dari berbagai bahasa di sepanjang sejarah, bahasa Inggris modern memiliki kosakata yang sangat banyak, dengan pengejaan yang kompleks dan tidak teratur (irregular), khususnya vokal. Bahasa Inggris modern tidak hanya merupakan perpaduan dari bahasa-bahasa Eropa, tetapi juga dari berbagai bahasa di seluruh dunia. Oxford English Dictionary memuat daftar lebih dari 250.000 kata berbeda, tidak termasuk istilah-istilah teknis, sains, dan bahasa gaul yang jumlahnya juga sangat banyak.[16][17]', 'XII'),
(61, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_1.mp4', 'Bahasa Indonesia adalah bahasa Melayu yang dijadikan sebagai bahasa resmi Republik Indonesia[1] dan bahasa persatuan bangsa Indonesia.[2] Bahasa Indonesia diresmikan penggunaannya setelah Proklamasi Kemerdekaan Indonesia, tepatnya sehari sesudahnya, bersamaan dengan mulai berlakunya konstitusi. Di Timor Leste, bahasa Indonesia berstatus sebagai bahasa kerja.', 'X'),
(62, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_2.mp4', 'Dari sudut pandang linguistik, bahasa Indonesia adalah salah satu dari banyak varietas bahasa Melayu.[3] Dasar yang dipakai sebagai dasar bahasa Indonesia baku adalah bahasa Melayu Tinggi (&quot;Riau&quot;).[4][5] Dalam perkembangannya, ia mengalami perubahan akibat penggunaannya sebagai bahasa kerja di lingkungan administrasi kolonial dan berbagai proses pembakuan sejak awal abad ke-20. Penamaan &quot;bahasa Indonesia&quot; diawali sejak dicanangkannya Sumpah Pemuda, 28 Oktober 1928, untuk menghindari kesan &quot;imperialisme bahasa&quot; apabila nama bahasa Melayu tetap digunakan.[6] Proses ini menyebabkan berbedanya bahasa Indonesia saat ini dari varian bahasa Melayu yang digunakan di Riau maupun Semenanjung Malaya. Hingga saat ini, bahasa Indonesia merupakan bahasa yang hidup, yang terus menghasilkan kata-kata baru, baik melalui penciptaan maupun penyerapan dari bahasa daerah dan bahasa asing.', 'X'),
(63, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_3.mp4', 'Meskipun dipahami dan dituturkan oleh lebih dari 90% warga Indonesia, bahasa Indonesia bukanlah bahasa ibu bagi kebanyakan penuturnya. Sebagian besar warga Indonesia menggunakan salah satu dari 748 bahasa yang ada di Indonesia sebagai bahasa ibu.[7] Istilah &quot;bahasa Indonesia&quot; paling umum dikaitkan dengan bahasa baku yang digunakan dalam situasi formal.[4] Ragam bahasa baku tersebut berhubungan diglosik dengan bentuk-bentuk bahasa Melayu vernacular yang digunakan sebagai peranti komunikasi sehari-hari.[4] Artinya, penutur bahasa Indonesia kerap kali menggunakan versi sehari-hari (colloquial) dan/atau mencampuradukkan dengan dialek Melayu lainnya atau bahasa ibunya. Meskipun demikian, bahasa Indonesia digunakan sangat luas di perguruan-perguruan, di media massa, sastra, perangkat lunak, surat-menyurat resmi, dan berbagai forum publik lainnya,[8] sehingga dapatlah dikatakan bahwa bahasa Indonesia digunakan oleh semua warga Indonesia.', 'XI'),
(64, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_4.mp4', 'Aksara pertama dalam bahasa Melayu atau Jawi ditemukan di pesisir tenggara Pulau Sumatra, menunjukkan bahwa bahasa ini menyebar ke berbagai tempat di Nusantara dari wilayah ini, berkat penggunaannya oleh Kerajaan Sriwijaya yang menguasai jalur perdagangan. Istilah Melayu atau sebutan bagi wilayahnya sebagai Malaya sendiri berasal dari Kerajaan Malayu yang bertempat di Batang Hari, Jambi.', 'XI'),
(65, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_5.mp4', 'stilah Melayu atau Malayu berasal dari Kerajaan Malayu, sebuah kerajaan Hindu-Buddha pada abad ke-7 di hulu sungai Batanghari, Jambi di pulau Sumatra, jadi secara geografis semula hanya mengacu kepada wilayah kerajaan tersebut yang merupakan sebagian dari wilayah pulau Sumatra. Dalam perkembangannya, pemakaian istilah Melayu mencakup wilayah geografis yang lebih luas dari wilayah Kerajaan Malayu tersebut, mencakup negeri-negeri di pulau Sumatra sehingga pulau tersebut disebut juga Bumi Melayu seperti disebutkan dalam Kakawin Nagarakretagama.', 'XII'),
(67, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_6.mp4', 'Ibu kota Kerajaan Melayu semakin mundur ke pedalaman karena serangan Sriwijaya dan masyarakatnya diaspora keluar Bumi Melayu, belakangan masyarakat pendukungnya yang mundur ke pedalaman berasimilasi ke dalam masyarakat Minangkabau menjadi klan Malayu (suku Melayu Minangkabau) yang merupakan salah satu marga di Sumatra Barat. Sriwijaya berpengaruh luas hingga ke Filipina membawa penyebaran Bahasa Melayu semakin meluas, tampak dalam prasasti Keping Tembaga Laguna.\r\n\r\nBahasa Melayu kuno yang berkembang di Bumi Melayu tersebut berlogat &quot;o&quot; seperti Melayu Jambi, Minangkabau, Kerinci, Palembang dan Bengkulu. Semenanjung Malaka dalam Nagarakretagama disebut Hujung Medini artinya Semenanjung Medini.', 'XII'),
(69, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_1.mp4', 'Islam (bahasa Arab: ???????, translit. al-isl?m?, Tentang suara ini dengarkan) adalah salah satu agama dari kelompok agama yang diterima oleh seorang nabi (agama samawi) yang mengajarkan monoteisme tanpa kompromi, iman terhadap wahyu, iman terhadap akhir zaman, dan tanggung jawab.[1] Bersama para pengikut Yudaisme dan Kekristenan, seluruh muslim–pengikut ajaran Islam–adalah anak turun Ibrahim.[2] Islam diikuti oleh 1,8 miliar orang di seluruh dunia sehingga menjadi agama terbesar kedua setelah Kristen.[3]', 'X'),
(70, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_2.mp4', 'Kata “isl?m” berasal dari bahasa Arab aslama - yuslimu dengan arti semantik sebagai berikut: tunduk dan patuh (khadha‘a wa istaslama), berserah diri, menyerahkan, memasrahkan (sallama), mengikuti (atba‘a), menunaikan, menyampaikan (add?), masuk dalam kedamaian, keselamatan, atau kemurnian (dakhala fi al-salm au al-silm au al-sal?m).[4] Dari istilah-istilah lain yang akar katanya sama, “isl?m” berhubungan erat dengan makna keselamatan, kedamaian, dan kemurnian.[5]', 'X'),
(71, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_3.mp4', 'Islam dapat juga disebut dengan iman, millah, dan syariah dalam pengertiannya sebagai aturan yang diturunkan oleh Allah melalui para utusan yang mencakup kepercayaan, keyakinan, adab, akhlak, perintah, dan larangan.[9] Agama Islam berdasarkan kewajiban untuk berserah diri dan menunaikan ajarannya disebut islam; jika dilihat berdasarkan kepercayaan terhadap Allah dan yang Dia turunkan, maka disebut iman; karena Islam itu diktatif dan terdokumentasikan, maka disebut millah; dan karena sumber hukumnya adalah Allah, maka disebut syariah.[9]', 'XI'),
(72, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_4.mp4', 'Allah, menurut ajaran Islam, adalah satu-satunya Tuhan yang berhak disembah, memiliki nama-nama terbaik, dan memiliki sifat dan karakter tertinggi.[11] Ajaran monoteisme Islam disebut tauhid, yang didefinisikan sebagai pengesaan Allah dalam hal-hal yang menjadi kekhususan Tuhan dan yang Dia wajibkan.[12] Pengesaan Allah dalam hal-hal kekhususan Tuhan dibagi menjadi dua bahasan: tauhid rububiyah dan tauhid asma\' wash-shifat, sedangkan pengesaan Allah dalam hal-hal yang Dia wajibkan dibahas dalam tauhid uluhiyah.[13]', 'XI'),
(73, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_4.mp4', 'Dalam tauhid rububiyah, Allah diakui sebagai satu-satunya Rabb (Yang Menguasai), sehingga semua selain Allah adalah ‘abd (hamba/budak/yang dikuasai).[14] Allah adalah Rabb Yang Berkuasa dalam penciptaan, pengurusan, dan kerajaan alam semesta.[15] Allah sebagai satu-satunya Pencipta adalah juga Yang Memberi rezeki, Yang Menghidupkan, Yang Mematikan, serta Yang Memberi kebaikan dan keburukan.[16] Allah yang mengurus segala sesuatu; semua urusan yang Dia tangani adalah kebaikan; dan Allah Mahakuasa terhadap apa yang Dia kehendaki.[16] Dalilnya adalah ayat dalam Alquran, “Segala penciptaan dan urusan menjadi hak-Nya.”[Al-A\'raf:54][15]', 'XII'),
(76, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_6.mp4', 'Islam adalah salah satu agama dari kelompok agama yang diterima oleh seorang nabi yang mengajarkan monoteisme tanpa kompromi, iman terhadap wahyu, iman terhadap akhir zaman, dan tanggung jawab. Bersama para pengikut Yudaisme dan Kekristenan, seluruh muslim–pengikut ajaran Islam–adalah anak turun Ibrahim.', 'XII'),
(77, 'Saauky', 'Matematika', 'Agama_Islam_-_Dummy_-_6.mp4', 'Test', 'X');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `password`, `email`, `image`, `is_active`, `date_created`) VALUES
(39, 'Syaauqi Zaaidan', '$2y$10$djI2M/FQH2k3H7b6tLK5X.MZG1R.wrARoR6NerH3tsScNnsNCnexa', 'zaidanline67@gmail.com', '73349393_156861225523800_2119508204152772215_n_(1)6.jpg', 1, 1586163321);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
