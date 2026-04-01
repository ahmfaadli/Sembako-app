-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 01:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtoko_sembako`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `jenis_produk` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `jenis_produk`) VALUES
(1, 'Beras'),
(2, 'Makanan Ringan'),
(6, 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(191) NOT NULL,
  `produk_id` int(45) NOT NULL,
  `tanggal` date NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_pelanggan`, `produk_id`, `tanggal`, `quantity`) VALUES
(2, 'Azka', 1, '2023-02-20', 20),
(4, 'fadli', 18, '2023-05-14', 4);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(45) NOT NULL,
  `berat` varchar(191) NOT NULL,
  `jenis_produk_id` int(45) NOT NULL,
  `gambar` blob NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `stok`, `harga`, `berat`, `jenis_produk_id`, `gambar`, `deskripsi`) VALUES
(1, 'Ngawiti Mas Beras [5 Kg]', 64, 60000, '100 kg', 1, 0x68747470733a2f2f692e746f7034746f702e696f2f705f3236383966726a6e6e312e706e67, 'Ngawiti Mas adalah beras yang termasuk ke dalam jenis beras pulen dengan aroma yang wangi dan bersih. Beras ini tidak memakain pemutih, pengawet dan tidak pakai pewangi.'),
(14, 'Sania Beras Premium', 50, 30000, '20 gram', 1, 0x68747470733a2f2f672e746f7034746f702e696f2f705f3236383978736c6630312e706e67, 'Sania Beras Premium, beras pulen teknologi Jepang yang menghasilkan beras putih alami, bersih dan tidak berbau.'),
(15, 'BERAS PREMIUM MAKNYUSS 5KG - MAKNYUS 5KG', 30, 35000, '20 gram', 1, 0x68747470733a2f2f652e746f7034746f702e696f2f705f323638397235733077312e706e67, 'Maknyuss adalah Beras Premium yang diproses dengan teknologi modern tanpa bahan kimia, tanpa pemutih, tanpa pengawet, dan tanpa pewangi sintetis.'),
(16, 'Qtela Keripik Singkong Barbeque', 300, 1600, '60 gram', 2, 0x68747470733a2f2f6b2e746f7034746f702e696f2f705f323638396b7171726e312e706e67, 'Keripik singkong Qtela terbuat dari singkong pilihan yang diolah secara modern dan higienis serta dipadukan dengan bumbu bumbu berkualitas sehingga menjadikan Qtela sangat renyah dan nikmat.'),
(17, 'Sponge Crunch Rasa Stroberi', 70, 11000, '100', 2, 0x68747470733a2f2f632e746f7034746f702e696f2f705f323638393477703531312e706e67, 'Oishi Sponge Crunch Strawberry 110gr adalah snack dengan bentuk sponge lingkar yang unik. Tekstur sponge yang renyah dan rasa yang manis semakin menambah unik snack dari Oishi ini. Oishi Sponge Crunch hadir dalam kemasan yang praktis dan higienis serta dilengkapi dengan resealable zip lock untuk menjaga kerenyahan sponge crunch di dalamnya. BPOM MD 273710028058.'),
(18, 'CHITATO CHEESE SUPREME', 70, 12000, '86 gram', 2, 0x68747470733a2f2f632e746f7034746f702e696f2f705f323638397934647136312e706e67, 'Chitato merupakan snack yang dibuat dari bahan kentang sehingga lebih gurih renyah dan mengenyangkan Irisan kentang bergerigi ciri khas Chitato ini dibalur dengan dan bumbu yang gurih lezat'),
(19, 'Fanta Strawberry Minuman Soda Kemasan', 33, 13000, '1 kilogram', 6, 0x68747470733a2f2f682e746f7034746f702e696f2f705f323638396863756435312e706e67, 'Fanta Strawberry Minuman Soda Kemasan PET 1000 ml 1000ml 1 L 1L'),
(20, 'Sosro Teh Botol (Kotak) 1L', 100, 10000, '1 kilogram', 1, 0x68747470733a2f2f6a2e746f7034746f702e696f2f705f323638393138713067312e706e67, 'Sosro minuman teh melati yang terbuat dari daun teh pilihan.'),
(21, 'Susu Indomilk UHT Cair Full Cream Plain', 300, 14000, '1 kilogram', 1, 0x68747470733a2f2f622e746f7034746f702e696f2f705f323638397574786979312e706e67, 'Indomilk UHT. SUSU CAIR Full Cream Plain 1000mlSusu cair UHT indomilk dibuat dgn susu sapi. Tahan lamakarena diproses dengan teknologi ultra high temperature dgn menggunakan kemasanmulti lapis kedap cahaya dan udara yg melindungi dari pengaruh suhu dan sinarmatahari.Susu sapi segar, susu bubuk skim, lemak susu sapi, penstabilnabati, vitamin (A, B1, B6, D3).Susu cair UHT Indomilk.Terbuat dari bahan susu sapi berkualitas.Dapat bertahan lama karena diproses dengan teknologi ultrahigh temperature.Menggunakan kemasan multi lapis kedap cahaya dan udarasehingga dapat melindungi dari pengaruh suhu dan sinar matahari.Isi 1000 MLHappy shopping');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan1` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_produk_id` (`jenis_produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `jenis_produk_id` FOREIGN KEY (`jenis_produk_id`) REFERENCES `jenis_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
