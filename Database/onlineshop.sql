-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 18 Nov 2017 pada 10.33
-- Versi Server: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hardware`
--

CREATE TABLE `hardware` (
  `id_hardware` int(11) NOT NULL,
  `nama_hardware` varchar(100) NOT NULL,
  `merk_hardware` varchar(100) NOT NULL,
  `tipe_hardware` varchar(100) NOT NULL,
  `jumlah_hardware` int(11) NOT NULL,
  `harga_hardware` int(11) NOT NULL,
  `deskripsi_hardware` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `hardware`
--

INSERT INTO `hardware` (`id_hardware`, `nama_hardware`, `merk_hardware`, `tipe_hardware`, `jumlah_hardware`, `harga_hardware`, `deskripsi_hardware`, `gambar`) VALUES
(11, 'VGA', 'LEADTEK', 'NVidia Quadro [K620]', 10, 4500000, 'NVidia Quadro K620 \r\n2GB \r\nDDR3 \r\n128bit \r\n1x DP \r\n1x DVI-I \r\nLow Profile Small bracket \r\nDP to DVI-D \r\nDVI-I to VGA \r\nConv Max Power Cons : 45 watt (MB 29GB/sec)', '1510582520.jpg'),
(12, 'VGA', 'MSI', 'NVidia GeForce [N770 TF 2GD5/OC GAMING]', 10, 5500000, 'NVidia GeForce GTX 770 Gaming\r\n2GB DDR5\r\n256-bits\r\nDual-link DVI-I x 1 \r\nDual-link DVI-D x 1\r\nHDMI\r\nPCI e x16 3.0', '1510583661.jpg'),
(13, 'VGA', 'HIS', 'AMD Radeon R7 250 iCooler Boost Clock 2GB [H250FS2G]', 10, 1348000, 'AMD Radeon\r\nR7 250 \r\n2GB\r\nDDR3 \r\nPCI-e', '1510586261.jpg'),
(14, 'VGA', 'GIGABYTE', 'NVidia GeForce GTX 1060 G1 Gaming 6G [GV-N1060G1 GAMING-6GD] (Merchant)', 10, 5404000, 'NVidia GeForce GTX 1060 \r\n6GB GDDR5 \r\n192-bit \r\n1 x Dual Link DVI-D \r\n1 x HDMI \r\n3 x Display Port', '1510583869.jpg'),
(15, 'VGA', 'GIGABYTE', 'Aorus GeForce GTX 1080 Ti Xtreme Edition [GV-N108TAORUS-X-11GD]', 10, 13675000, 'Aorus GeForce GTX 1080 Ti\r\n11GB GDDR5X\r\n352 bit\r\nDual-link DVI-D\r\nHDMI\r\nDisplay Port\r\nPCI-E 3.0 x 16', '1510584002.jpg'),
(16, 'VGA', 'ASUS', 'AMD Radeon 1GB [R7260-1GD5]', 10, 2428608, 'AMD Radeon R7 260\r\n1GB GDDR5\r\n128-bit\r\nDVI\r\nHDMI\r\nPCI-e 3.0\r\nHDCP Support', '1510584164.png'),
(17, 'VGA', 'GIGABYTE', 'AMD Radeon R9 Nano [GV-R9NANO-4GD-B]', 10, 11970000, 'AMD Radeon R9 Nano \r\n4GB HBM \r\nHDMI/Display Port \r\nPCI-E 3.0', '1510584304.jpg'),
(18, 'VGA', 'GIGABYTE', 'NVidia GeForce GTX 1080 G1 Gaming [GV-N1080G1] (Merchant)', 10, 10973000, 'NVidia GeForce GTX1080\r\n8GB GDDR5\r\n256-bit\r\nDual-link DVI-D \r\nHDMI \r\nPCI-e 3.0 x16', '1510584388.jpg'),
(19, 'Mother Board', 'MSI', 'Motherboard LGA 2011-v3 XPOWER GAMING TITANIUM [X99A] (Merchant)', 10, 8632500, 'LGA 2011-v3\r\nIntel X99 SATA 6Gb/s\r\nUSB 3.1\r\nDirect USB Type-C', '1510584486.jpg'),
(20, 'Mother Board', 'MSI', 'Motherboard LGA 2011-v3 GAMING PRO CARBON [X99A] (Merchant)', 8, 8000000, 'LGA 2011-v3\r\nIntel X99 \r\nSATA 6Gb/s\r\nUSB 3.1\r\nUSB 3.1 GEN 2', '1510584561.jpg'),
(21, 'Mother Board', 'ASUS', 'Motherboard Socket LGA 2011 [Rampage V Extreme/U3.1]', 10, 7300000, 'Socket LGA2011 v3\r\nIntel® Core™ i7\r\nDDR4\r\nQuad Channel\r\n4 x PCIe 3.0\r\n1 x PCIe 2.0 x 1\r\nUSB 3.1', '1510584687.jpg'),
(22, 'Mother Board', 'GIGABYTE', 'Motherboard Socket TR4 [X399 AORUS Gaming 7]', 10, 6470000, 'AMD Socket TR4 \r\nAMD Ryzen Threadripper processor \r\nAMD X399 Chipset \r\n8 x DDR4 DIMM sockets \r\n8 x SATA 6Gb/s connectors \r\n2 x PCI Express x16 slots \r\nRivet Networks Killer E2500 LAN chip (10/100/1000 Mbit) \r\nUSB 3.1', '1510584822.jpg'),
(23, 'Mother Board', 'ASROCK', 'Motherboard Socket LGA1151 [B150M Pro 4]', 10, 1290000, 'Socket LGA1151\r\nIntel® B150\r\nDDR4 Quad Channel\r\nPCI-e\r\nSATA III\r\n7.1 CH HD Audio\r\nUSB', '1510584912.jpg'),
(24, 'Mother Board', 'GIGABYTE', 'Motherboard Socket AM4 [GA-AB350M-Gaming 3]', 10, 1643000, 'Socket AM4 \r\nSupports AMD Ryzen™ & 7th Generation A-series / Athlon™ Processors \r\nAMD B350 Chipset \r\nDual Channel Non-ECC Unbuffered DDR4 \r\nHDMI \r\nUSB 3.1/USB 2.0\r\nMicro ATX Form Factor', '1510585018.jpg'),
(25, 'Mother Board', 'GIGABYTE', 'GA-B150M-HD3 DDR4', 10, 1495000, 'Socket LGA1151 \r\nIntel® B150 \r\n2133 MHz \r\nDDR4 Dual Channel \r\nPCI-e 16x \r\nVGA \r\nSATA III \r\nUSB 3.0 \r\nAudio', '1510585065.jpg'),
(26, 'Mother Board', 'ASUS', 'Motherboard Socket LGA1155 [H61M-A/USB3]', 10, 1027487, 'Socket LGA1155\r\nIntel® H61DDR3 \r\nDual Channel\r\n1 x PCIe 3.0/2.0 x16\r\n2 x PCIe 2.0 x1\r\nUSB', '1510585104.jpg'),
(27, 'RAM', 'GSKILL', 'Trident Z Series Memory PC 4 x 16GB DDR4 [F4-3466C16Q-64GTZ] (M)', 10, 11635000, 'Memory PC \r\nKapasitas : 64GB (4 x 16GB) DDR4 \r\nTested Speed : 3466MHz \r\nTested Latency : 16-18-18-38 \r\nTested Voltage : 1.35v', '1510585155.jpg'),
(28, 'RAM', 'GSKILL', 'Trident Z RGB Series Memory PC 2 x 16GB DDR4 [F4-3866C18D-32GTZR] (M)', 9, 7213000, 'Memory PC \r\nKapasitas : 32GB (2 x 16GB) DDR4 \r\nTested Speed : 3866MHz \r\nTested Latency : 18-18-18-38 \r\nTested Voltage : 1.35v', '1510585198.jpg'),
(29, 'RAM', 'CORSAIR', 'Memory PC 4 x 8GB DDR4 PC4-27700 [Vengeance RGB CMR32GX4M4C3466C16]', 10, 6845000, '32GB Kit (4 x 8GB)\r\nDDR4\r\n2133MHz\r\nDual Channel XMP 2.0 Profile\r\nPC4-27700', '1510585235.jpg'),
(30, 'RAM', 'CORSAIR', 'Memory PC 2 x 16GB DDR4 DRAM PC4-25600 [Vengeance LED CMU32GX4M2C3200C16R] - Red', 10, 6505000, '32GB (2 x 16GB)\r\nDDR4\r\n3200MHz\r\nDual / Quad Channel XMP 2.0 Profile\r\nPC4-25600', '1510585273.jpg'),
(31, 'RAM', 'CORSAIR', 'Dominator Platinum Series 2 x 16GB DDR4 PC4-24000', 10, 6395000, '32GB Kit (2 x 16GB)\r\nDDR4\r\n3000MHz\r\nDual Channel XMP 2.0 Profile\r\nPC4-24000', '1510585329.jpg'),
(32, 'RAM', 'CORSAIR', 'Memory PC 2 x 8GB DDR4 PC4-21300 [Vengeance LPX CMK16GX4M2A2666C16W] - White', 9, 3145000, '16GB Kit (2 x 8GB)\r\nDDR4\r\n2666MHz\r\nDual / Quad Channel\r\nPC4-21300', '1510585369.jpg'),
(33, 'RAM', 'CORSAIR', 'Memory PC 2 x 4GB DDR3 PC3-19200 [Vengeance Pro CMY8GX3M2A2400C11] - Black', 10, 1330000, '2 x 4GB kit\r\nDDR3\r\n2400MHz\r\nDual\r\nPC3-19200\r\nDIMM', '1510585407.jpg'),
(34, 'RAM', 'TEAM', 'Elite Plus Memory PC 8GB DDR3 PC-12800 [TPD38G1600HC1101]', 10, 930, '8GB \r\nDDR3 \r\n1600Mhz \r\nPC-12800 \r\n1.5V', '1510585449.jpg'),
(35, 'SSD', 'SAMSUNG ', 'Solid State Drive 850 EVO 4TB', 9, 18805000, '4TB\r\nSolid State\r\nSATA III\r\n2.5 Inch', '1510585509.jpg'),
(36, 'SSD', 'SAMSUNG', 'Solid State Drive 850 EVO 2TB', 10, 9090000, '2TB\r\nSolid State\r\nSATA III\r\n2.5 Inch', '1510585547.jpg'),
(37, 'SSD', 'CORSAIR', 'Neutron Series XTi [CSSD-N960GBXTi]', 10, 6055000, '960GB\r\nSolid State\r\nSATA III 6Gb/s\r\n560MB/s Read\r\n540MB/s Write\r\n2.5 inch', '1510585600.jpg'),
(38, 'SSD', 'CORSAIR', 'Force Series LE200 960GB [CSSD-F960GBLE200B]', 10, 5830000, 'Solid State Drive \r\nCapacity 960GB \r\nInterface SATA 3 6Gb/s \r\nMax Sequential Read Up to 560MB/s \r\nMax Sequential Write Up to 540MB/s', '1510585634.jpg'),
(39, 'SSD', 'WD', 'Blue SSD SATA 500GB [WDS500G1B0A]', 10, 2380000, '500GB\r\nSolid State\r\nSATA 6Gb/s\r\n2.5 Inch 7mm\r\nRead 545MB/s\r\nWrite 525MB/s', '1510585670.jpg'),
(40, 'SSD', 'KINGSTON', 'SSD Now UV400 Series 120GB [SUV400S37/120G]', 10, 884000, '120GB\r\nSolid State\r\nSATA III (6Gb/s)\r\n2.5 inchUp to 550MB/s (read) & 350MB/s (write)\r\nMarvell 88SS1074 Controller\r\nTLC', '1510585714.jpg'),
(41, 'SSD', 'TEAM', 'Dark L3 120GB SATA III', 10, 830000, 'DARK L3 Internal Solid State Drive (SSD) \r\n120GB \r\nMax Read Up to 550Mbps \r\nMax Write 450MB/Sec Exclude Bracket for 3.5\"', '1510585746.jpg'),
(42, 'SSD', 'V-GEN', 'Solid State Drive 120GB SATA 3 (Merchant)', 10, 770000, '120 GB \r\nSATA 3 \r\nCDM 3.0.4: Read: 504.1 Write: 407.6 \r\nHD Bench: Read: 457.142 Write: 385.687', '1510585779.jpg'),
(43, 'Monitor', 'ASUS', 'ROG Swift Curved Gaming Monitor 34 Inch [PG348Q]', 10, 21500000, '34-inch Ultra Wide \r\nResolusi : 3440 x 1440 \r\nRasio Kontras : 1000:1 \r\nAspek Rasio : 21:9 \r\nBrightness : 300 cd/m² \r\nResponse Time : 5ms \r\nSignal Input : HDMI;DisplayPort', '1510585819.jpg'),
(44, 'Monitor', 'SAMSUNG', 'QLED Gaming Monitor 49 Inch [LC49HG90DMNXZA]', 10, 19999999, 'Screen size: 49 inch \r\nResolusi: 3840 x 1080\r\nContrast ratio: 3000:1 \r\nBrightness: 350cd/m2 \r\nResponse time: 1(MPRT) ms \r\nAspect ratio: 32:9 \r\nInput connector: HDMI Display port USB Hub', '1510585858.jpg'),
(45, 'Monitor', 'ACER', 'Predator Curved IPS Gaming LED Monitor 34 Inch [X34]', 10, 19499000, '34\" UW-QHD \r\nCurved LED \r\n3440 x 1440 \r\n100000000:1\r\nHDMI', '1510585897.jpg'),
(46, 'Monitor', 'ASUS', 'Monitor Gaming 32 Inch [PG27AQ]', 9, 14899000, '32-inch Wide\r\n3840x2160\r\n1000:1300 cd/m²\r\nHDMI', '1510585938.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `rek_nama` varchar(100) NOT NULL,
  `met_transfer` varchar(100) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_pesan`, `rek_nama`, `met_transfer`, `bukti_transfer`) VALUES
(100000, 10000, 'Aldo Fadilla Putra', 'E-Banking', '1510975601.png'),
(100001, 10001, 'Aldo Fadilla Putra', 'ATM', '1510975821.png'),
(100002, 10002, 'Aldo Fadilla Putra', 'ATM', '1510975952.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `email_member` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `alamat_member` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `email_member`, `password`, `nama_member`, `alamat_member`) VALUES
(1005, 'b@b.com', '202cb962ac59075b964b07152d234b70', 'Namaaaaaa', 'Alamat'),
(1006, 'c@c.com', '6eea9b7ef19179a06954edd0f6c05ceb', 'c', 'c'),
(1008, 'aldo15ti@mahasiswa.pcr.ac.id', 'b104ab9a0e58c861b9628208b3fecd58', 'Aldo Fadilla Putra', 'Jl. Limbungan No. 19 Rumbai Pesisir Pekanbaru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_hardware` int(11) NOT NULL,
  `status_pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_member`, `id_hardware`, `status_pesan`) VALUES
(10000, 1005, 32, 'Sedang diproses'),
(10001, 1008, 20, 'Sedang dikirim'),
(10002, 1008, 46, 'Sedang diproses'),
(10003, 1008, 33, 'Menunggu Proses Pembayaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`id_hardware`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_hardware` (`id_hardware`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hardware`
--
ALTER TABLE `hardware`
  MODIFY `id_hardware` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100003;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `id_pesan` FOREIGN KEY (`id_pesan`) REFERENCES `pesan` (`id_pesan`);

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `id_hardware` FOREIGN KEY (`id_hardware`) REFERENCES `hardware` (`id_hardware`),
  ADD CONSTRAINT `id_member` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
