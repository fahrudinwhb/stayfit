-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2016 at 03:46 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stayfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_imt`
--

CREATE TABLE `history_imt` (
  `ID_IMT` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `HISTORY_IMT` double NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_imt`
--

INSERT INTO `history_imt` (`ID_IMT`, `ID_USER`, `HISTORY_IMT`, `DATE`) VALUES
(3, 9, 31.111111111111, '2015-11-30 19:28:13'),
(4, 9, 24.444444444444, '2015-11-30 19:29:30'),
(5, 8, 26.666666666667, '2015-12-18 08:10:29'),
(6, 11, 19.227687870534, '2015-12-29 02:04:21'),
(7, 7, 21.644120707596, '2016-04-24 05:22:42'),
(8, 15, 16.649323621228, '2016-04-26 05:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `history_lemak`
--

CREATE TABLE `history_lemak` (
  `ID_LEMAK` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `HISTORY_LEMAK` double NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_lemak`
--

INSERT INTO `history_lemak` (`ID_LEMAK`, `ID_USER`, `HISTORY_LEMAK`, `DATE`) VALUES
(1, 9, 15.871383975026, '2015-11-30 20:15:56'),
(2, 11, 22.27322544464, '2015-12-29 02:05:08'),
(3, 7, 27.472944849115, '2016-04-24 05:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `imt`
--

CREATE TABLE `imt` (
  `ID_IMT` int(11) NOT NULL,
  `SOLUSI_IMT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imt`
--

INSERT INTO `imt` (`ID_IMT`, `SOLUSI_IMT`) VALUES
(1, 'o	Makan secara teratur 3 kali sehari dengan gizi seimbang lebih banyak dari biasanya dan ditambah 2 kali makanan kecil (biskuit yang mengandung keju dan susu, minuman yogurt, jus buah). Gizi seimbang adalah susunan hidangan sehari yang mengandung zat gizi (karbohidrat, protein, lemak, vitamin, dan mineral) dalam jumlah dan kualitas yang sesuai dengan kebutuhan tubuh untuk dapat hidup sehat secara optimal.\r\no	Meningkatkan asupan protein dan karbohidrat sangat baik untuk meningkatkan berat badan. Makan lebih banyak makanan sumber energi dan protein dari biasanya seperti roti, nasi, umbi-umbian, ikan, daging, tempe, tahu,telur. \r\no	Berolahraga secara teratur. Beberapa jam setelah olahraga biasanya akan terasa lapar sehingga meningkatkan nafsu makan, yang tentunya berguna untuk menaikkan berat badan. Jenis olah raga pun tidak perlu yang terlalu berat. Berjalan kaki selama 30 menit 5 hari dalam seminggu sudah cukup untuk menjaga keseimbangan tubuh.\r\no	Dapat juga ditambah dengan olahraga yang berguna meningkatkan kekuatan otot seperti sit up, back up, dan biceps curl, sehingga massa otot bertambah sewajarnya (jangan khawatir akan membesar karena tidak memakai dumbell atau barbel) dan juga meningkatkan kepadatan tulang yang tentunya akan menambah berat badan anda. \r\no	Istirahat yang cukup agar energi yang masuk dan keluar seimbang atau bahkan lebih besar energi yang masuk. \r\no	Memperbanyak minum air putih, minimal 8 -10 gelas sehari.\r\n'),
(2, '1.Konsumsi Air Dalam Jumlah Cukup\r\nPastikan anda minum antara 8-10 gelas air perhari, atau sekitar 1,8 liter air. Ini untuk menjaga tubuh memiliki cairan yang cukup, memperlancar metabolisme lemak, dan membakar kalori lebih banyak.\r\n2.Jangan Lewatkan Makan Pagi\r\nUpayakan menyantap makanan berserat dan sehat seperti buah-buahan, sayur-sayuran. Makan pagi juga membantu mengontrol selera makan.\r\n3.Olahraga Minimal 30 menit per hari\r\nAnda bias memulainya dengan olahraga ringan seperti jalan kaki hingga berbagai olahraga yang baik untuk menurunkan kalori.\r\n4.Tidur Yang Cukup\r\nTidur yang cukup menjaga kebugaran tubuh dan menghindarkan anda dari porsi makan berlebih dan asupan makanan yang tidak sehat\r\n5.Perbanyak Konsumsi Serat\r\nMakanan kaya serat akan membuat anda cepat kenyang dan memperlancar proses pencernaan.\r\n5.Kontrol Porsi Makan\r\nAtur waktu makan yang tepat dan bagi porsi makan anda.'),
(3, 'Untuk mencapai berat badan ideal, Anda dapat melakukan kombinasi olah raga dengan pola makan gizi seimbang. Olah raga yang dapat diterapkan adalah yang bersifat aerobik seperti lari, renang, bersepeda ataupun yang bersifat pembentukan seperti sit up, push up, dan latihan beban. Jika Anda melakukannya secara teratur selama 30-60 menit, minimal 3x/minggu, ditunjang dengan pola makan seimbang, tentunya akan ada perubahan pada bentuk tubuh Anda. '),
(4, 'Yang terbaik adalah dengan mengurangi porsi makan Anda dan melakukan olahraga secara teratur. Adapun olahraga jenis aerobik sangat berguna untuk membakar lemak dan meningkatkan kecepatan metabolisme. Dan diet yang dianjurkan adalah diet rendah lemak, renda karbohidrat simpleks, tinggi serat, tinggi karbohidrat kompleks, dan protein. Berikut adalah tips-tips yang dapat Anda terapkan untuk menurunkan berat badan:\r\n1.	Olahraga seminggu 3 kali, setiap kali minimal 30 menit\r\n2.	Kurangi konsumsi nasi putih, mie kuning, roti putih. Anda dapat mengonsumsi beras merah atau roti gandum sebagai pengganti karbohidrat simpleks\r\n3.	Hindari konsumsi gorengan dan makanan instan seperti sosis, sarden, kornet, dsb\r\n4.	Perbanyak konsumsi buah dan sayur. Pilihlah buah yang masih segar dan belum diolah\r\n5.	Perbanyak minum air putih (minimal 8 gelas sehari)\r\n6.	Batasi makan malam sampai jam 7 malam. Apabila melebihi jam tersebut, Anda dapat mengonsumsi buah atau sayur.\r\n7.	Gunakan minyak zaitun dalam jumlah sedikit apabila ingin menumis sayuran\r\n'),
(5, 'Yang terbaik adalah dengan mengurangi porsi makan Anda dan melakukan olahraga secara teratur. Adapun olahraga jenis aerobik sangat berguna untuk membakar lemak dan meningkatkan kecepatan metabolisme. Dan diet yang dianjurkan adalah diet rendah lemak, renda karbohidrat simpleks, tinggi serat, tinggi karbohidrat kompleks, dan protein. Berikut adalah tips-tips yang dapat Anda terapkan untuk menurunkan berat badan:\r\n1.	Olahraga seminggu 3 kali, setiap kali minimal 30 menit\r\n2.	Kurangi konsumsi nasi putih, mie kuning, roti putih. Anda dapat mengonsumsi beras merah atau roti gandum sebagai pengganti karbohidrat simpleks\r\n3.	Hindari konsumsi gorengan dan makanan instan seperti sosis, sarden, kornet, dsb\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `presentase_lemak`
--

CREATE TABLE `presentase_lemak` (
  `ID_LEMAK` int(11) NOT NULL,
  `SOLUSI_LEMAK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentase_lemak`
--

INSERT INTO `presentase_lemak` (`ID_LEMAK`, `SOLUSI_LEMAK`) VALUES
(1, 'Tubuh anda dalam kategori kekurangan lemak. jika kekurangan lemak, tubuh akan sulit menyerap vitamin A, K, D, E, tubuh selalu lemas, dan mudah lapar . Cukupi konsumsi daging ikan seperti salmon, sarden atau susu dan telur sebagai sumber lemak baik.'),
(2, 'Presentase lemak dalam rentang normal/sehat.\r\nAnda tidak perlu menurunkan berat badan.\r\nJumlah kadar kalori persyaratan minimum: 1635 Kalori per hari\r\nDiet Anda harus mengandung setidaknya 79 gram protein per hari.\r\n'),
(3, 'Lemak dalam tubuh anda dalam kategori di atas normal. Aturlah makanan yang seimbang dan kontrol berat badan. Apabila ada kenaikan, cepat turunkan berat badan supaya tidak terlanjur kelewat berlebihan dan menjadi obesitas. Pola makan yang benar perlu diterapkan untuk membantu mencegah terjadinya kegemukan, yaitu sarapan pagi, selingan pada jam 10.00, makan siang, selingan pada jam 16.00, dan makan malam. Jangan makan di luar jam-jam yang sudah ditentukan. Dan Berolahragalah secara teratur untuk menjaga kebugaran tubuh dan membantu pengeluaran energi/kalori.'),
(4, 'tubuh anda dalam kategori obesitas atau terlalu banyak lemak dalam tubuh anda. Lakukan olahraga secara teratur untuk membakar lemak yang berlebih. Hindarilah makan, minum, ngemil pada malam hari. Makanlah secara teratur dan minum air mineral 8 gelas perhari untuk menurunkan berat badan\r\nCobalah untuk menghindari terlalu sering tidur dan duduk-duduk.Isilah dengan kegiatan postif yang membuat tubuh anda terus bergerak. Sebelum penyakit menyerang pada tubuh anda, maka sebaiknya kita mencegah terlebih dahulu dari pada mengobati. Karena orang gemuk sangat mudah terkena penyakit. Selain itu anda juga bisa mengikuti program diet\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `program_fitness`
--

CREATE TABLE `program_fitness` (
  `ID_FITNESS` int(11) NOT NULL,
  `SOLUSI_FITNESS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tips_kesehatan`
--

CREATE TABLE `tips_kesehatan` (
  `ID_TIPS` int(11) NOT NULL,
  `JUDUL` varchar(100) NOT NULL,
  `GAMBAR_TIPS` varchar(500) NOT NULL,
  `ISI` text NOT NULL,
  `DATE_TIPS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tips_kesehatan`
--

INSERT INTO `tips_kesehatan` (`ID_TIPS`, `JUDUL`, `GAMBAR_TIPS`, `ISI`, `DATE_TIPS`) VALUES
(3, 'Tips Menjaga Daya Tahan Tubuh Agar Selalu Sehat', '1.jpg', 'Tips Menjaga Daya Tahan Tubuh. Memiliki tubuh yang sehat merupakan keinginan setiap orang termasuk anda. Dengan tetap sehat, mka aktivitas yang kita lakukan bisa berjalan lancar dan sesuai dengan harapan kita. Dengan Sehat pula, maka kita tidak harus mengeluarkan waktu dan biaya untuk membeli obat atau pergi ke rumah sakit. Jadi kita harus selalu bersyukur dengan nikmat kesehatan yang di berikan Tuhan YME kepada kita semua. Ada berbagai tips yang berhubungan dengan kesehatan dan daya tahan tubuh. Lalu, apa saja tips menjaga daya tahan tubuh agar selalu sehat tersebut...???\r\n\r\n    Sahabat, tips kesehatan. Ukuran sehat yaitu ketika kita mampu menjaga daya tahan tubuh dari serangan penyakit yang selalu menerpa seperti penyakit demam, flu, batuk dan lain-lain. Lalu bagaimana kita bisa menjaga daya tahan tubuh yang benar agar selalu sehat dan bugar setiap hari....???. Berikut ini tips kesehatan yaitu tips menjaga daya tahan tubuh agar selalu sehat :\r\nCukup Istirahat. Istirahat yang cukup setiap harinya, merupakan salah satu faktor untuk menjaga daya tahan tubuh anda.\r\nBerpikir Positif. Di dalam tubuh yang sehat terdapat pikiran yang tenang dan sehat juga. Maka usahakan selalu berpikiran positif terhadap segala masalah yang menerpa kita.\r\nRutin Berolahraga. Setiap pagi, usahakan selalu melakukan olahraga secara teratur. Ini bertujuan untuk menjaga kondisi tubuh agar selalu bugar dan sehat.\r\nKebersihan Makanan. Selalu memastikan bahwa makanan yang anda makan sudah higienis atau sudah di cuci dengan bersih atau dimasak dengan matang yang sempurna.\r\nKontrol Makanan. Makanlah dengan porsi yang wajar jangan berlebihan. Di khawatirkan badan anda akan mengalami kegemukan dan riskan terkena penyakit yang terkait dengan kegemukan atau obesitas.\r\nMakanan Berserat. Penuhi makanan yang berserat setiap harinya. Makanan yang berserat yaitu apel, wortel maupun kacang-kacangan. Fungsi makanan berserat ini yaitu menjaga tubuh dari serangan bakteri.\r\nVitamin D. Penuhi kebutuhan vitamin D. Karena vitamin D ini berfungsi untuk menstimulus sel imun untuk menghalau virus dan bakteri. Vitamin D dapat ditemukan pada sinar matahari, telur, hati dan ikan. ', '2015-12-29 03:40:59'),
(5, '3 Alasan sehat untuk menarik napas lebih dalam', '2.jpg', 'Bernapas menjadi sebuah kegiatan sehari-hari yang wajib untuk dilakukan. Tentu saja, saat Anda tidak bernapas maka tubuh tidak mendapatkan oksigen dan malah bisa membahayakan nyawa Anda.\r\n\r\nKarena terasa sederhana, seringkali Anda mengabaikan saat bernapas. Padahal jika dilakukan secara panjang dan perlahan, bernapas bisa meningkatkan kesehatan tubuh Anda. Dilansir dari indiatimes.com, berikut adalah buktinya.\r\n\r\nMengurangi stres\r\nSaat Anda menarik napas panjang dan dalam, maka tingkat stres Anda akan berkurang. Selain itu rasa panik dan takut juga akan menurun sehingga bisa membuat Anda berpikir jernih. Sebab menarik napas dalam bisa merangsang sistem saraf parasimpatis yang akan memperlambat denyut jantung sehingga Anda jadi merasa lebih tenang.\r\n\r\nMendetoksifikasi tubuh\r\nMenarik napas panjang mampu membantu mendetoks tubuh Anda. Sebab aliran darah jadi lancar sehingga bisa membantu menghilangkan racun dari dalam tubuh Anda.\r\n\r\nMenguatkan otot paru-paru\r\nKarena udara yang kotor, terkadang Anda tidak bebas untuk menarik napas. Hal ini membuat otot paru-paru Anda jadi lemah. Sebaliknya, saat Anda menarik napas dengan begitu panjang dan dalam, maka paru-paru Anda terbuka dan otot-ototnya menjadi kuat.\r\n\r\nLantas, bagaimana cara yang paling efektif untuk menarik napas dengan panjang dan dalam? Duduklah setenang mungkin. Kemudian tarik napas perlahan hingga perut Anda menggembung dan buang napas juga secara perlahan.', '2015-12-29 03:43:04'),
(6, 'Berhenti merokok bikin kamu sakit kepala? Atasi dengan 3 tips ini', '3.jpg', 'Keputusan untuk berhenti merokok tentu saja secara signifikan akan mampu menjauhkan kamu secara perlahan dari risiko penyakit berbahaya seperti kanker,serangan jantung, dan stroke. Menurut National Cancer Institute, kamu tidak akan menuai hasil dari berhenti merokok dengan segera setelah kamu memutuskan untuk berhenti.\r\n\r\nIni akan membutuhkan beberapa hari atau bahkan minggu pertama terhitung setelah kamu memutuskan untuk berhenti. Hal ini juga akan memberikan beberapa efek samping seperti pusing atau sakit kepala. Tetapi ini adalah hal yang normal terjadi, karena tubuh mulai mendapatkan lebih banyak oksigen. Melansir dari livestrong.com, berikut ini merupakan tiga langkah yang bisa kamu lakukan untuk mengurangi efek samping karena berhenti merokok.\r\n\r\n1. Lakukan secara bertahap\r\n\r\nJangan lakukan secara mendadak. Cobalah untuk menjauhkan diri dari rokok secara bertahap. Setelah berbulan-bulan atau bertahun-tahun rokok melekat pada diri kamu, tentu saja nikotin akan menumpuk pada sistem pernapasanmu. Ketika kamu tidak lagi mempertahankan nikotin, tubuh kamu akan melakukan penyesuaian yang menyebabkan gejala seperti sakit kepala.\r\n\r\n2. Latihan pernapasan\r\n\r\nTerdengar sedikit aneh tapi cara ini cukup ampuh. Untuk mengurangi rasa pusing dan sakit kepala cobalah untuk melakukan latihan pernapasan. Cara ini akan membuat kamu merasa lebih santai dan mengurangi rasa sakit di kepala kamu. Tarik napas dalam-dalam perlahan. Tahan selama lima detik dan buang napas perlahan. Lakukan hal yang sama hingga hitungan ketujuh.\r\n\r\n3. Konsumsi air putih yang cukup\r\n\r\nKurangnya asupan air putih akan membuat kamu dehidrasi. karena dehidrasi juga menyebabkan sakit kepala, maka kondisi ini akan memperparah sakit kepala yang kamu alami karena berhenti merokok. Oleh karena itu, cobalah untuk mengonsumsi lebih banyak air, teh herbal, atau jus segar untuk mencegah kamu dari dehidrasi. Selain itu, cobalah untuk mengurangi minuman yang bisa menyebabkan dehidrasi seperti kopi atau minuman berkafein lainnya.\r\n\r\nTips ini tergolong cukup mudah untuk mengatasi sakit kepala kamu. Jadi, sekarang tidak ada alasan lagi untuk menunda keputusan berhenti merokok, kan? Semoga bermanfaat!', '2015-12-29 03:44:58'),
(7, 'Jangan tutup hidung saat akan bersin!', '4.jpg', 'Di tengah musim hujan seperti ini, flu dan demam adalah penyakit yang jamak ditemui. Alasannya, udara lembap akan membuat virus penyakit tersebut tumbuh subur dan semakin mudah menyerang sistem kekebalan tubuh manusia yang menurun. \r\n\r\nSaat pilek, bersin merupakan kegiatan yang jamak untuk Anda lakukan. Sayangnya, alih-alih membiarkan bersin keluar dengan bebasnya, Anda memilih untuk menutup hidung dan menghentikan bersin tersebut. Mungkin Anda menganggap bahwa kebiasaan ini terlihat tidak membahayakan. Namun sebuah penelitian yang dilansir dari boldsky.com, menjelaskan bahwa menutup hidung saat akan bersin bisa membuat gendang telinga Anda retak. Bagaimana bisa?\r\n\r\n"Udara yang keluar saat Anda sedang bersin memiliki kecepatan sekitar 160 kilometer per jam. Sehingga jika Anda menghentikan bersin secara tiba-tiba maka tekanan ini akan dialihkan ke bagian tubuh lain seperti telinga yang kemudian dapat mengakibatkan gendang telinga retak dan kesehatan pendengaran Anda bisa terancam," terang penelitian ini.\r\n\r\n"Selain bisa membahayakan kesehatan telinga, saat Anda bersin dan Anda menutup hidung maka tekanan udara yang terjebak di dalamnya bisa menyebabkan kerusakan mata dan kapiler darah di mata Anda bisa juga bisa terluka. Dalam beberapa kasus yang meskipun jarang terjadi, menghentikan bersin yang akan keluar juga bisa menyebabkan stroke karena pecahnya pembuluh darah di otak."\r\n\r\nBersin merupakan pertahanan alami yang diciptakan oleh tubuh untuk menolak serta mengeluarkan bakteri penyebab penyakit. Menutup hidung pada saat Anda akan bersin justru bisa membuat bakteri tersebut semakin masuk ke dalam tubuh dan membuat penyakit Anda tak kunjung sembuh.', '2015-12-29 03:48:01'),
(25, 'coba', 'dead2.jpg', '', '2016-05-27 00:00:39'),
(26, 'asdsa', 'loki2.jpg', 'fafadf', '2016-05-27 00:02:05'),
(27, 'sada', 'dead3.jpg', 'sda', '2016-05-27 00:06:16'),
(28, 'asdsa', 'dead4.jpg', 'ads', '2016-05-27 00:08:07'),
(29, 'adasdsa', 'loki3.jpg', 'dadas', '2016-05-27 00:10:45'),
(30, 'as', 'dead5.jpg', 'ada', '2016-05-27 00:32:21'),
(31, 'asdas', 'dead6.jpg', 'dsad', '2016-05-27 00:33:43'),
(32, '', 'loki4.jpg', '', '2016-05-27 00:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `JENIS_KELAMIN` varchar(20) NOT NULL,
  `FOTO` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `NAMA_LENGKAP`, `USERNAME`, `PASSWORD`, `EMAIL`, `JENIS_KELAMIN`, `FOTO`) VALUES
(1, 'ADMIN', 'ADMIN', 'ADMIN', 'ADMIN@gmail.com', 'perempuan', ''),
(7, 'titi', 'titi', 's', 'titi@titi.titi', 's', '1c.PNG'),
(10, 'alfa nur fitriana', 'titi', '', 'titi@gmail.com', 'dak elas', 'sq.png'),
(11, 'Alfa Nur Fitriana Islami', 'alfafitriana', 'alfa', 'alfa@gmail.com', 'perempuan', '6.jpg'),
(12, 'muhammad rizsky', 'shock21', 'rpl2015', 'rizsky.van.octo@ymail.com', 'laki-laki', '1a.PNG'),
(15, 'alfanurf', 'alfanurf', 'alfanurf', 'alfanurf@ymail.com', 'perempuan', '1.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_imt`
--
ALTER TABLE `history_imt`
  ADD PRIMARY KEY (`ID_IMT`);

--
-- Indexes for table `history_lemak`
--
ALTER TABLE `history_lemak`
  ADD PRIMARY KEY (`ID_LEMAK`);

--
-- Indexes for table `imt`
--
ALTER TABLE `imt`
  ADD PRIMARY KEY (`ID_IMT`);

--
-- Indexes for table `presentase_lemak`
--
ALTER TABLE `presentase_lemak`
  ADD PRIMARY KEY (`ID_LEMAK`);

--
-- Indexes for table `program_fitness`
--
ALTER TABLE `program_fitness`
  ADD PRIMARY KEY (`ID_FITNESS`);

--
-- Indexes for table `tips_kesehatan`
--
ALTER TABLE `tips_kesehatan`
  ADD PRIMARY KEY (`ID_TIPS`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_imt`
--
ALTER TABLE `history_imt`
  MODIFY `ID_IMT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `history_lemak`
--
ALTER TABLE `history_lemak`
  MODIFY `ID_LEMAK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `imt`
--
ALTER TABLE `imt`
  MODIFY `ID_IMT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `presentase_lemak`
--
ALTER TABLE `presentase_lemak`
  MODIFY `ID_LEMAK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `program_fitness`
--
ALTER TABLE `program_fitness`
  MODIFY `ID_FITNESS` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tips_kesehatan`
--
ALTER TABLE `tips_kesehatan`
  MODIFY `ID_TIPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
