-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2022 at 02:44 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Arialza', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(1, 'Cemilan ', 'Kripik_Tempe.jpg\r\n', '', ''),
(2, 'Oleh Oleh', 'Jenang_Ayu.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'Mamam', 'mamam@gmail.com', 'Memuaskan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(1, 'Keripik Pisang', 'Keripik pisang adalah produk makanan ringan yang dibuat dari irisan buah pisang dan digoreng, dengan atau tanpa bahan tambahan makanan yang diizinkan', '17000.00', 'Keripik_Pisang.jpg', 1, '', ''),
(2, 'Keripik Singkong', 'Keripik singkong adalah makanan yang terbuat dari singkong yang diiris tipis kemudian digoreng dengan menggunakan minyak goreng. Biasanya rasanya adalah asin dengan aroma bawang yang gurih.', '10000.00', 'Keripik_Singkong.jpg', 1, '', ''),
(3, 'Wingko Babat', 'Wingko adalah sejenis kue yang terbuat dari kelapa muda, tepung beras ketan dan gula. Wingko sangat terkenal di pantai utara pulau Jawa. Kue ini sering dijual di stasiun kereta api, stasiun bus atau juga di toko-toko kue untuk oleh-oleh keluarga.', '45000.00', 'Wingko_Babat.jpg', 2, '', ''),
(4, 'Pie Susu Bali', 'Pie susu merupakan makanan khas Bali atau cemilan yang memiliki tekstur renyah di pinggir dan lembut di tengah. Isian pie dapat beragam jenis seperti buah-buahan dan daging. Pie pertama dibuat secara sederhana dan memiliki cita rasa gurih yang terdiri dari keju dan daging', '40000.00', 'Pie_Susu_Bali.jpg', 2, '', ''),
(5, 'Bakpia Tugu Jogja', 'akpia Kukus Tugu Jogja merupakan bakpia kukus pertama di Jogja yang memadukan konsep bakpia tradisional dengan modern.\r\nBakpia Kukus Tugu Jogja diawali oleh keinginan sang pemilik, Anggara Jati, untuk membuat produk bakpia yang tidak seperti produk bakpia pada umumnya. \r\nUmumnya bakpia dipanggang, namun Bakpia Kukus Tugu Jogja diproses dengan dikukus sehingga teksturnya lembut.\r\nBakpia kukus diberi isian yang meleleh di mulut sebagai elemen of surprise.', '50000.00', 'Bakpia_Tugu_Jogja.jpg', 2, '', ''),
(6, 'Lumpia Semarang ', 'Lumpia Semarang adalah makanan semacam rollade yang berisi rebung, telur, dan daging ayam atau udang', '35000.00', 'Lumpia_Semarang.jpg', 2, '', ''),
(7, 'Gethuk', 'Gethuk adalah makanan ringan yang terbuat dari singkong atau ketela pohon. Makanan ini menjadi makanan khas kebanggaan masyarakat Magelang, Jawa Tengah. ... Pada umumnya, gethuk memiliki rasa manis dan gurih', '15000.00', 'Gethuk.jpg', 2, '', ''),
(8, 'Serabi Solo', 'Serabi Solo merupakan makanan seperti pancake tetapi sedikit berbeda dari daerah lain. Bentuk serabi Solo adalah berbentuk oval dengan tekstur krispi disekelilingnya. Serabi Solo terbuat dari tepung beras yang dicampur dengan santan kelapa dan gula sheingga memiliki rasa manis dan gurih.', '30000.00', 'Serabi_Solo.jpg', 2, '', ''),
(9, 'Brem', 'Brem Padat merupakan salah satu makanan khas daerah Madiun. Brem padat terbuat dari sari ketan yang dimasak dan dikeringkan, yang merupakan hasil dari fermentasi ketan yang diambil sarinya saja dan kemudian diendapkan dalam waktu sekitar sehari semalam.', '15000.00', 'Brem.jpg', 2, '', ''),
(10, 'Kue Bikang', 'Kue cara bikang merupakan kue tradisional yang berbahan dasar tepung beras. Kue cara bikang bisa dijumpai di pasar tradisional. Kue cara bikang berbentuk seperti bunga merekah dan diberi warna. Rasanya manis dan memiliki tekstur lembut dan berserat. Kue cara bikang termasuk kue basah yang cara Pembuatannya melewati proses pemanggangan dalam cetakan khusus kue cara bikang.', '25000.00', 'Kue_Bikang.jpg', 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_date` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_contact` varchar(150) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_bank` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `customer_bank`) VALUES
(1, 'Pie Susu Bali', '40000.00', '4.00', '160000', '2022-01-05 07:29:20pm', 'Ordered', 'Arialza Tera', '0893175813', 'arialza@gmail.com', 'Selat Malaka', 'BNI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
