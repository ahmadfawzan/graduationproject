-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 08:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matjre`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_admin` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_admin`, `email`, `password`) VALUES
(1, 'admin', 'ahmadhassan0233@gmail.com', 'Ahmahm123'),
(2, 'ahmad', 'ahmadhassan0222@gmail.com', 'Ahmahm1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `sander_user` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `sander_user`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(336, 24, 'Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI w/ 120Hz Display', '800.99', 'admin/uploads/laptopdall1.jpg', 1, '800.99', 'p1000'),
(337, 24, 'ASUS ROG Zephyrus M16 (2021) 11Gen Core i7 8-Cores w/ RTX 3060 2K 165Hz', '1599.0', 'admin/uploads/laptopdall7.jpg', 1, '1599', 'p1006'),
(450, 69, 'Western Digital Green M.2 2280 240GB SATA Internal SSD', '25.00', 'admin/uploads/Storage2.jpg', 1, '25', 'p1061'),
(482, 0, 'Kingston FURY Renegade 32GB (1 x 32GB) 3200MHz DDR4 RAM', '115.00', 'admin/uploads/hardware2.jpg', 1, '115', 'p1041');

-- --------------------------------------------------------

--
-- Table structure for table `messeges`
--

CREATE TABLE `messeges` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(103, 'ahmadhassan123', 'ahmadhassan786@gmail.com', '0786273104', 'zarqa', '', 'Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI w/ 120Hz Display(1),ASUS ROG Zephyrus M16 (2021) 11Gen Core i7 8-Cores w/ RTX 3060 2K 165Hz(1),Western Digital Green M.2 2280 240GB SATA Internal SSD(1)', '0'),
(104, 'ahmadhassan123', 'saiubcsaj@gmail.com', '0786273104', 'zarqa', '', 'Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI w/ 120Hz Display(1),ASUS ROG Zephyrus M16 (2021) 11Gen Core i7 8-Cores w/ RTX 3060 2K 165Hz(1),Western Digital Green M.2 2280 240GB SATA Internal SSD(1)', '0'),
(105, 'ahmadhassan123', 'jiabsxu@Gmail.com', '0786273104', 'ZARQA', '', 'Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI w/ 120Hz Display(1),ASUS ROG Zephyrus M16 (2021) 11Gen Core i7 8-Cores w/ RTX 3060 2K 165Hz(1),Western Digital Green M.2 2280 240GB SATA Internal SSD(1)', '0'),
(106, 'ahmadhassan123', 'ahmadhassan123@gmail.com', '0786273104', 'zarqa', '', 'Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI w/ 120Hz Display(1),ASUS ROG Zephyrus M16 (2021) 11Gen Core i7 8-Cores w/ RTX 3060 2K 165Hz(1),Western Digital Green M.2 2280 240GB SATA Internal SSD(1),Gundam Limited Edition Gaming PC 11Gen Intel Core i', '4348'),
(107, 'ahmadhassan123', 'ahmadhassan123@gmail.com', '0786273104', 'zarqa', '', 'Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI w/ 120Hz Display(1),ASUS ROG Zephyrus M16 (2021) 11Gen Core i7 8-Cores w/ RTX 3060 2K 165Hz(1),Western Digital Green M.2 2280 240GB SATA Internal SSD(1),ASUS Dual GeForce RTX 3060 Ti V2 MINI GAMING 8GB GD', '773.99'),
(108, 'ahmadhassan123', 'ahmadhassan123@gmail.com', '0786273104', 'zarqa', '', 'Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI w/ 120Hz Display(1),ASUS ROG Zephyrus M16 (2021) 11Gen Core i7 8-Cores w/ RTX 3060 2K 165Hz(1),Western Digital Green M.2 2280 240GB SATA Internal SSD(1),Gundam Limited Edition Gaming PC 11Gen Intel Core i', '4348'),
(109, 'ahmadhassan123', 'ahmadhassan123@gmail.com', '0786273104', 'zarqa', '', 'Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI w/ 120Hz Display(1),ASUS ROG Zephyrus M16 (2021) 11Gen Core i7 8-Cores w/ RTX 3060 2K 165Hz(1),Western Digital Green M.2 2280 240GB SATA Internal SSD(1),Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI ', '8694.89'),
(110, 'ahmadhassan123', 'ahmadhassan123@gmail.com', '0786273104', 'zarqa', '', 'Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI w/ 120Hz Display(1),ASUS ROG Zephyrus M16 (2021) 11Gen Core i7 8-Cores w/ RTX 3060 2K 165Hz(1),Western Digital Green M.2 2280 240GB SATA Internal SSD(1),Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI ', '4004.95');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_Description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `type`, `product_price`, `product_qty`, `product_Description`, `product_image`, `product_code`) VALUES
(1, 'Dell G3 15 Gaming 10Gen Core i7 6-Cores GTX 1650TI w/ 120Hz Display', 'laptop', '800.99', 1, 'Dell G3 Gaming 10Gen Core 7 6-Core up to 5.0GHz 12M Cashe , 8GB DDR4 RAM , 512GB M.2 PCIe NVMe ,  Nvidia Geforce GTX 1650TI 4GB DDR6 ,  15.6', 'laptopdall1.jpg', 'p1000'),
(2, 'white-Dell Vostro 3500 NEW Intel 11th Gen Core i7 Business Laptop', 'laptop', '250.00', 1, 'Dell New Vostro 3500 Intel Core i7 11Gen up to 4.7Ghz 4-Cores 12M Cash, 8GB DDR4 RAM  , Optional M.2 SSD + 1TB HDD , Nvidia 2GB DDR5 Graphic ,15.6', 'laptopdall2.jpg', 'p1001'),
(3, 'Lenovo IdeaPad 5 NEW Intel Core i7 11Gen SSD & IPS Full HD - Grey', 'laptop', '739.00', 1, 'Lenovo IdeaPad 5 NEW Intel Core i7 11Gen up to 4.7GHz 12M Cash 4-Cores , 16GB RAM DDR4 ,  256GB SSD M.2 NVMe + 1TB HDD , 15.6', 'laptopdall3.jpg', 'p1002'),
(4, 'HP Pavilion Gaming 16-a0013ne 10Gen I7 6-Cores w/ GTX 1660TI 144Hz', 'laptop', '1149.00', 1, 'HP Gaming Pavilion 16-a0013ne 10Gen Intel Core i7 up to 5.0GHz  6-Cores 12M Cache,  16GB DDR4 , 256GB PCIeÂ® NVMeâ„¢ M.2 SSD + 1TB HDD ,  Nvidia GTX 1660 TI 6GB DDR6  , 16.1', 'laptopdall4.jpg', 'p1003'),
(5, 'ASUS ROG Zephyrus G15 GA503QR AMD Ryzen 9 5900HS w/RTX 3070 2K', 'laptop', '1849.00', 1, 'ASUS ROG Zephyrus G15 GA503QR NEW Ryzen 9 5Gen 5900HS up to 4.5 GHz 8 -Cores 16M Cashe, 16 GB RAM DDR4 , 1TB NVMe M.2 SSD , Nvidia GeForce RTX 3070 8GB DDR6 , 15.6', 'laptopdall5.jpg', 'p1004'),
(6, 'OMEN by HP 15-ek1002ne NEW 10Gen Core i7 8-Cores w/ RTX 3070', 'laptop', '1799.00', 1, 'HP OMEN 15-ek1002ne 10Gen Intel Core i7 up to 5.0GHz 16M Cache 8-Cores ,  32GB DDR4 ,  1TB NVMeâ„¢ M.2 SSD ,  Nvidia RTX 3070 8GB DDR6  , 15.6', 'laptopdall6.jpg', 'p1005'),
(7, 'ASUS ROG Zephyrus M16 (2021) 11Gen Core i7 8-Cores w/ RTX 3060 2K 165Hz', 'laptop', '1599.0', 1, 'ASUS ROG Zephyrus M16 11Gen Core i7 up to 4.6GHz 24M Cash 8-Cores , 16GB RAM DDR4 , 1TB M.2 NVMeâ„¢ PCIeÂ® 3.0 SSD , 16.0', 'laptopdall7.jpg', 'p1006'),
(8, 'HP Spectre x360 13-aw2002ne NEW 11Gen Core i7 2-in-1 Touch', 'laptop', '1469.00', 1, 'HP Spectre x360 13-aw2002ne Core i7 11th up to 4.7GHz 12M Cash 4 Cores , 16GB RAM , 1TB PCIeÂ® NVMeâ„¢ M.2 SSD, 13.3', 'laptopdall8.jpg', 'p1007'),
(9, 'ASUS TUF F15 FX506HC (2021) NEW 11Gen Core i5 6-Cores w/ RTX 3050', 'laptop', '799.00', 1, 'ASUS TUF F15 FX506HC-HN002 11Gen Core i5 6-Core up to 4.5GHz 12M Cashe , 8GB DDR4 RAM ,  512GB SSD M.2 2280 PCIe 4.0x4 NVMe ,  Nvidia GeForce RTX 3050 4GB DDR6 ,  15.6', 'laptopdall9.jpg', 'p1008'),
(10, 'MSI Pulse GL66 11UGKV-001 NEW 11Gen Intel Core i7 8-Cores w/ RTX 3070', 'laptop', '1349.00', 1, 'MSI Pulse GL66 11UGKV-001 11Gen Core i7 11800H 8-Core up to 4.6GHz 24M Cashe , 16GB DDR4 RAM , 512GB NVMe PCIe Gen3 SSD ,  Nvidia GeForce RTX 3070 8GB DDR6 ,  15.6', 'laptopdall10.jpg', 'p1009'),
(11, 'HP Pavilion 14-dv0003ne NEW Intel 11Gen Core i7 - White', 'laptop', '875.00', 1, 'HP Pavilion Laptop 14-dv0003ne 11Gen Core i7 up to 4.7GHz 12M Cash 4-Cores , 16GB RAM DDR4  , 512GB PCIeÂ® NVMeâ„¢ M.2 SSD , 14.0', 'laptopdall11.jpg', 'p1010'),
(12, 'Dell Vostro 3500 NEW Intel 11th Gen Core i7 Business Laptop - Black', 'laptop', '619.00', 1, 'Dell New Vostro 3500 Intel Core i7 11Gen up to 4.7Ghz 4-Cores 12M Cash, 8GB DDR4 RAM  , Optional M.2 SSD + 1TB HDD , Nvidia 2GB DDR5 Graphic ,15.6', 'laptopdall12.jpg', 'p1011'),
(13, 'Lenovo Flex 5 NEW 4Gen AMD Ryzen 5 Touch 2-in-1 Graphite Grey', 'laptop', '599.00', 1, 'Lenovo Flex 5 NEW 4Gen AMD Ryzen 5 up to 4.0GHz 6-Cores 11M Cash , 16GB RAM DDR4 , 256GB SSD M.2 PCIe 3.0x2 NVMe , 14.0', 'laptopdall13.jpg', 'p1012'),
(14, 'Dell XPS 13 M1800C NEW Intel 11th Gen Core i7 2-in-1 Touch,16GB DDR4', 'laptop', '1599.00', 1, 'Dell New XPS 13 Intel Core i7 11Gen up to 4.7Ghz 4-Cores 12M Cash, 16GB DDR4 RAM  ,512GB PCIe NVMe x4 SSD , IntelÂ® IrisÂ® Xe Graphics ,13.4', 'laptopdall14.jpg', 'p1013'),
(15, 'Lenovo ThinkPad X1 NANO Core i7 11Gen 2K Carbon Fiber & Magnesium', 'laptop', '1999.00', 1, 'Lenovo ThinkPad X1 NANO 11Gen Intel Core i7 up to 4.4GHz 12M Cash 4-Cores , 16GB RAM DDR4 ,  1TB SSD M.2 2280 PCIe NVMe Opal2 , 13', 'laptopdall15.jpg', 'p1014'),
(16, 'HP Laptop 14s-fq0004ne AMD Ryzen 3 SSD Full HD Thin & Light', 'laptop', '369.00', 1, 'HP Laptop 14s-fq0004ne AMD Ryzen 3 up to 3.5GHz 4M Cash 2-Cores , 4GB RAM DDR4  , 128 GB PCIeÂ® NVMeâ„¢ M.2 SSD , 14.0', 'laptopdall16.jpg', 'p1015'),
(17, 'HUAWEI MateBook D14 NEW 10Gen Intel Core i5 Metal - Grey', 'laptop', '719.00', 1, 'HUAWEI MateBook 14 NEW 10Gen Core i5 up to 4.2GHz 4-Cores 6MB Cash , 8GB RAM DDR4  ,  512GB SSD M.2 NVMe, 14.0', 'laptopdall17.jpg', 'p1016'),
(18, 'HP Pavilion Laptop 14-dv0022ne NEW Intel 11Gen Core i3 Lightweight', 'laptop', '495.00', 1, 'HP Pavilion Laptop 14-dv0022ne 11Gen Core i3 up to 4.1GHz 6M Cash 2-Cores , 4GB RAM DDR4  , 256 GB PCIeÂ® NVMeâ„¢ M.2 SSD , 14.0', 'laptopdall18.jpg', 'p1017'),
(19, 'Acer Nitro 5 NEW 10Gen Intel Core i5 4-Cores w/ Nvidia GTX 1650', 'laptop', '599.00', 1, 'Acer NEW Nitro 5 10Gen Intel Core i5 10300H up to 4.5GHz 8M Cash 4-Cores , 8GB RAM DDR4 , 256GB NVMe SSD + 1TB HDD , 15.6', 'laptopdall19.jpg', 'p1018'),
(20, 'Asus EeeBook 12 E210MA-GJ116 Intel Celeon Dual Core up to 2.8Ghz - Black', 'laptop', '199.00', 1, 'Asus EeeBook 12 E210MA-GJ116 Intel Celeon up to 2.8Ghz 2-Cores 4M Cash , 4GB DDR4 , 256GB M.2 NVMeâ„¢ PCIeÂ® 3.0 SSD , 11.6', 'laptopdall20.jpg', 'p1019'),
(21, 'Gundam Limited Edition Gaming PC 11Gen Intel Core i7', 'PcGamin', '2999.00', 1, 'Intel Core i7-11700KF Rocket Lake 8-Cores up to 5.0 GHz 16MB , ASUS ROG STRIX LC 360 360 RGB GUNDAM EDITION Water Cooler , ASUS Z590 WIFI GUNDAM EDITION RGB Mainboard , Kingston FURY Beast RGB 32GB 3600MHz DDR4 RAM , ASUS ROG STRIX GeForce RTX 3080 GUNDAM', 'PcGaming1.jpg', 'p1020'),
(22, 'CC Power 37RTX VI Gaming PC 10Gen Core i5 w/ RTX 3070', 'PcGamin', '1349.00', 1, 'Intel Core i5-11400F Rocket Lake 6-Cores up to 4.4 GHz 12MB , Kingston Fury 16GB RGB 3200 MHz DDR4 , MSI B560M-A Pro Intel B560 M.2 Motherboard ,  Nvidia GeForce RTX 3070 8GB GDDR6 OC Edition , DEEPCOOL MATREXX 55 V3 Tempered Glass Gaming Case , FSP HYBER', 'PcGaming2.jpg', 'p1021'),
(23, 'HP Pavilion TG01-2006NE Gaming Desktop 11Gen Core', 'PcGamin', '1299.00', 1, 'HP Pavilion TG01-2006NENEW Intel 11Gen Core i7 11700 up to 4.9GHz 16M Cash 8-Cores , 16GB RAM DDR4 , 512 GB PCIeÂ® NVMeâ„¢ M.2 SSD + 1 TB 7200 rpm SATA HDD , 1NVIDIAÂ® GeForce RTXâ„¢ 3060 TI 8GB GDDR6 , Wireless , Bluetooth , Windows 10 Home', 'PcGaming3.jpg', 'p1022'),
(24, 'Lenovo v50s SFF 10GEN Intel Core i7 Desktop w/ Wireless	', 'PcGamin', '499.00	', 1, 'Lenovo v50s Small From Factor 10GEN Core i7 up to 4.8GHz 16M 8-Cores , 8GB RAM DDR4 , 1000GB HDD 7200RPM , DVD RW, Intel HD Graphic , Wireless & Bluetooth , USB Keyboard, USB Mouse, Dos.', 'PcGaming4.jpg', 'p1023'),
(25, 'HP 24\" All-in-One 24-dp1002ne 11Gen Core i5 Touch Screen , Silver', 'PcGamin', '799.00', 1, 'HP 24\" All-in-One 24-dp1002ne 11Gen Core i5 up to 4.2GHz 8M 4-Cores , 8GB RAM DDR4 , 128 GBM.2 SSD + 1 TB HDD , 23.8\" FHD IPS 250 nits, 72% NTSC Touch Monitor, IntelÂ® IrisÂ® Xáµ‰ Graphics , Camera , Wireless , Bluetooth , Wireless Keyboard & Mouse, Windo', 'PcGaming5.jpg', 'p1024'),
(26, 'HP All-in-One 205 G4 AMD RYZEN 5 4-Cores NON Touch - Black', 'PcGamin', '419.00', 1, 'HP All-in-One 205 G4 3Gen AMD Ryzen 5 up to 3.7GHz 6M 4-Cores , 4GB RAM DDR4 , 1000GB HDD 7200RPM , 21.5\" Full HD IPS Antiglare Monitor, AMD Radeonâ„¢ Vega Graphics , DVD RW, Wireless , WebCam ,Bluetooth , USB Keyboard, USB Mouse, Dos.', 'PcGaming6.jpg', 'p1025'),
(27, 'CC Power VEGA 7 I Gaming PC 5Gen AMD Ryzen 5 w/ RX VEGA 7 AIR Cooler', 'PcGamin', '599.00', 1, 'AMD RYZEN 5 5600G 6-Core up to 4.4 GHz 19MB Cashe , Deepcool GAMMAXX 400 PRO Dual Fan CPU Cooler , HyperX Fury 16GB RGB DDR4 , ASUS Prime B550M-K AMD B550 Mainboard , AMD Radeon RX VEGA 7 Integrated , Deepcool Matrexx 40 3FS Tempered Glass , DeepCool DE', 'PcGaming7.jpg', 'p1026'),
(28, 'CC Power 38TRTX II Gaming PC 11Gen Core i9 w/ RTX3080 TI Liquid Cooled', 'PcGamin', '2899.00', 1, 'Intel Core i9-11900KF Rocket Lake 8-Cores up to 5.3 GHz 16MB , EK-Classic Kit S360 D-RGB Triple 120mm Liquid Cooling Kit , MSI MAG Z590 Tomahawk WiFi Mainboard , Kingston Fury 32GB DDR4 Memory , Nvidia Gaming GeForce RTX 3080 TI 12GB DDR6X , Thermaltake', 'PcGaming8.jpg', 'p1027'),
(29, 'CC Power 38TRTX I Gaming PC 5Gen Ryzen 9 w/ RTX 3080 TI EK Liquid Cooled', 'PcGamin', '2949.00', 1, 'AMD RYZEN 9 5900X 12-Core 3.7 GHz (4.8 GHz Max Boost) , EK-Classic Kit S360 D-RGB Triple 120mm Liquid Cooling Kit , Gigabyte Aorus PRO X570 RGB Mainboard , Kingston Fury 32GB DDR4 Memory , Nvidia Gaming GeForce RTX 3080 TI 12GB DDR6X , Thermaltake Level 2', 'PcGaming9.jpg', 'p1028'),
(30, 'CC Power 36RTX IV Gaming PC 10Gen Core i7 K-Series w/ RTX 3060 Liquid', 'PcGamin', '1199.00', 1, 'Intel Core i7-10700KF Comet Lake 8-Cores up to 5.1 GHz 16MB , DEEPCOOL GAMMAXX L240 A-RGB AIO Liquid Cooler , Gigabyte B560 HD3 Intel RGB Motherboard , Kingston Fury 16GB RGB 3200 MHz , Nvidia GeForce RTX 3060 12GB GDDR6 OC Edition , DeepCool MATREXX 70', 'PcGaming10.jpg', 'p1029'),
(31, 'CC Power 55TGTX II Gaming PC 10Gen Core i3 w/ GTX 1050 TI', 'PcGamin', '479.00', 1, 'Intel Core i3-10100F Comet Lake 4-Cores up to 4.3 GHz 6MB , ASUS PRIME H510M-K Motherboard , Kingston FURY Beast RGB 8GB DDR4 RAM , Asus NVIDIA Cerberus GTX1050 TI 4GB GDDR5 , FSP CMT120A Tempered Glass ATX Mid Tower Case , FSP HEXA+ H2-500 500W 80+ PSU ,', 'PcGaming11.jpg', 'p1030'),
(32, 'CC Power 65GTX II Gaming PC 10Gen Core i5 w/ GTX 1650 4GB DDR6', 'PcGamin', '589.00', 1, 'Intel Core i5-10400F Comet Lake 6-Cores up to 4.3 GHz 12MB , ASUS PRIME H510M-E Motherboard , Kingston Fury 16GB 3200 MHz DDR4 Memory , NVIDIA GeForce GTX 1650 4GB DDR6 , Xigmatek Venom X Arctic RGB Tempered Glass - White , DeepCool DE-600 V2 600w High Ef', 'PcGaming12.jpg', 'p1031'),
(33, 'CC Power 38RTX II Gaming PC 3Gen Ryzen 7 3700 w/ RTX 3080 Liquid Cooled', 'PcGamin', '1799.00', 1, 'AMD RYZEN 7 3700X 8-Core 3.6 GHz (4.3 GHz Max Boost) , DEEPCOOL GAMMAXX L360 RGB AIO Liquid Cooler , MSI PRO B550-A PRO Motherboard , Kingston FURY Beast RGB 16GB 3600MHz RAM , Nvidia GeForce RTX 3080 10GB GDDR6 OC Edition , MSI MPG SEKIRA 100P Gaming PC', 'PcGaming13.jpg', 'p1032'),
(34, 'CC Power 66GTX I Gaming PC 10Gen Intel Core i5 w/ GTX 1660 6GB', 'PcGamin', '779.00', 1, 'Intel Core i5-10400F Comet Lake 6-Cores up to 4.3 GHz 12MB , Kingston Hyper X 16GB DDR4 RGB 3200Mhz , MSI B460M-A PRO ProSeries Intel B460 M.2 Mainboard , NVIDIA GeForce GTX 1660 6GB GDDR5 , Xigmatek Venom X Arctic RGB Tempered Glass - White , DeepCool D', 'PcGaming14.jpg', 'p1033'),
(35, 'MSI MEG Infinite X 10TD-879AE 10Gen Core i7 Liquid Cooler w/ RTX 3070', 'PcGamin', '2399.00', 1, 'MSI MEG Infinite X Gaming PC i7-10700KF 32GB 512GB SSD+2TB HDD RTX3070 W10H - Processor: Intel i7-10700KF 3.80GHz Base, Up to 5.10GHz Max (8 Cores, 16 Threads) - Memory: U-DIMM 32GB (1x 32GB) DDR4 2933MHz RAM ', 'PcGaming15.jpg', 'p1034'),
(36, 'OMEN X by HP 900-219ne Desktop PC Core i7 w/ RTX 2080 TI', 'PcGamin', '2949.00', 1, 'OMEN X by HP 900-219ne Intel Core i7-7820x 4.3GHz 8-Cores 32GB DDR4 512 GB PCIe NVMe SSD 3TB HDD 7200RPM NVIDIA GeForce RTX 2080Ti (11 GB DDR6 ) Windows 10 Desktop PC', 'PcGaming16.jpg', 'p1035'),
(37, 'OMEN by HP Obelisk 875-1008ne w/ Core i7 9700K uo to 4.9GHz', 'PcGamin', '1759.00', 1, 'OMEN X by HP 875-1008ne Intel Core i7-9700k uo to 4.9GHz 12MB Cashe 8-Cores , 32GB DDR4 , 512 GB PCIeÂ® NVMeâ„¢ TLC M.2 SSD + 2 TB 7200 rpm SATA, NVIDIAÂ® GeForce RTXâ„¢ 2080 Superâ„¢ (8 GB GDDR6 dedicated) , Windows 10 Home', 'PcGaming17.jpg', 'p1036'),
(38, 'Gundam Limited Edition Gaming PC 11Gen Intel Core i9 w/ RTX 3090 Liquid', 'PcGamin', '4249.00', 1, 'Intel Core i9-11900KF Rocket Lake 8-Cores up to 5.3 GHz 16MB , ASUS ROG STRIX LC 360 360 RGB GUNDAM EDITION Water Cooler , ASUS Z590 WIFI GUNDAM EDITION RGB Mainboard , Kingston FURY Beast RGB 32GB 3600MHz DDR4 RAM , ASUS ROG STRIX GeForce RTX 3090 GUNDAM', 'PcGaming18.jpg', 'p1037'),
(39, 'CC Power 36TRTX I Gaming PC 11Gen Core i5 w/ RTX 3060 TI', 'PcGamin', '1099.00', 1, 'Intel Core i5-11400F Rocket Lake 6-Cores up to 4.4 GHz 12MB , Kingston Fury 16GB RGB DDR4 , MSI B560M Pro Intel B560 Motherboard , Nvidia GeForce RTX 3060 TI 8GB GDDR6 , ASUS TUF GT301 Honeycomb Panel Aura RBG Gaming Case , Seasonic CORE GC 650w 80+ Gold,', 'PcGaming19.jpg', 'p1038'),
(40, 'CC Power 26RTX IV Gaming PC 3Gen Ryzen 5 w/ RTX 2060 6GB', 'PcGamin', '859.00', 1, 'AMD RYZEN 5 3600 6-Core 3.6 GHz (4.2 GHz Max Boost) , Kingston Fury 16GB DDR4 RGB 3200Mhz , MSI AMD Ryzen B450M-A PRO MAX AM4 ATX Motherboard , NVIDIA GeForce RTX 2060 6GB GDDR6 , H450X Tempered Glass Side , DeepCool DA600 600W 80+ Bronze PSU , Kingston', 'PcGaming20.jpg', 'p1039'),
(41, 'ASUS Dual GeForce RTX 3060 Ti V2 MINI GAMING 8GB GDDR6', 'hardwar', '569.99', 1, '8GB 256-Bit GDDR6 Boost Clock OC Mode - 1695 MHz Gaming Mode - 1665 MHz 1 x HDMI 2.1 3 x DisplayPort 1.4a 4864 CUDA Cores PCI Express 4.0', 'hardware1.jpg', 'p1040'),
(42, 'Kingston FURY Renegade 32GB (1 x 32GB) 3200MHz DDR4 RAM', 'hardwar', '115.00', 1, 'High speeds matched with low latencies to deliver extreme performance Intel XMP profiles optimized for Intelâ€™s latest chipsets Ready for AMD Ryzen Dense black aluminum heat spreader and matching black PCB keeps your rig running and looking cool', 'hardware2.jpg', 'p1041'),
(43, 'ASUS PRIME B460M-A Intel B460 M.2 Support USB 3.2 Mainboard', 'hardwar', '89.00', 1, 'Intel LGA 1200 Socket: Designed to unleash the maximum performance of 10th Gen Intel Core processors Comprehensive Cooling: VRM heatsink, PCH heatsink, hybrid fan headers and Fan Xpert 2 utility Boosted Memory Performance: ASUS OptiMem proprietary trace', 'hardware3.jpg', 'p1042'),
(44, 'ASUS GeForce RTX 3070 V2 OC Dual Edition 8GB GDDR6 Gaming Mode', 'hardwar', '669.00', 1, '8GB 256-Bit GDDR6 Boost Clock OC Mode - 1800 MHz Gaming Mode - 1770 MHz 2 x HDMI 2.1 3 x DisplayPort 1.4a 5888 CUDA Cores PCI Express 4.0', 'hardware4.jpg', 'p1043'),
(45, 'Intel Core i5-11400F Rocket Lake 6-Cores up to 4.4 GHz 12MB , Tray', 'hardwar', '169.00', 1, 'Compatible with Intel 500 Series and Select Intel 400 Series chipset based on motherboards Intel Optane memory support PCIe Gen 4.0 compliant Thermal solution NOT included', 'hardware5.jpg', 'p1044'),
(46, 'Intel Core i7-11700F Rocket Lake 8-Cores up to 4.9 GHz 16MB , Tray', 'hardwar', '279.00', 1, 'Compatible with Intel 500 Series and Select Intel 400 Series chipset based on motherboards Supports Intel Turbo Boost Max Technology 3.0 Intel Optane memory support PCIe Gen 4.0 compliant Thermal solution NOT included', 'hardware6.jpg', 'p1045'),
(47, 'ASUS ROG Strix B550-I Gaming Mini-ITX WiFi 6 Addressable Gen 2	', 'hardwar', '239.00', 1, 'AMD AM4 Socket and PCIe 4. 0: The perfect pairing for Zen 3 Ryzen 5000 & 3rd Gen AMD Ryzen CPUs Robust Power Design: 8+2 DrMOS power stages with high-quality alloy chokes and durable capacitors provide reliable power for the latest high-core-count AMD CPU', 'hardware7.jpg', 'p1046'),
(48, 'Lenovo 16GB TruDDR4 PC4-17000 CL15 2133MHz DDR4 SDRAM Registered', 'hardwar', '99.00', 1, 'Memory Size: 16gb Memory Technology: Ddr4 Sdram Number Of Modules: 1 X 16gb Memory Speed: 2133 Mhz Memory Standard: Ddr4-2133/pc4-17000 Signal Processing: Registered Error Checking: Ecc Cas Latency: Cl15 Pin Count: 288-pin Voltage: 1.2v Form Factor: Rdimm', 'hardware8.jpg', 'p1047'),
(49, 'Thermaltake Smart Pro RGB 850W 80 PLUS Bronze Modular PSU	', 'hardwar', '110.00', 1, 'Thermaltake Smart Pro RGB 850W 80 PLUS Bronze Modular Power Supply - 14cm Hydraulic Bearing Fan - ATX - Peak Output Capacity: 1020W - Active PFC - MTBF: 100,00 Hours Minimum - Black', 'hardware9.jpg', 'p1048'),
(50, 'IBM Intel Xeon E5-2620 v2 2.10GHz 7.20GT/s QPI 15MB L3 Cache Processor', 'hardwar', '199.00', 1, 'The IntelÂ® XeonÂ® processor E5-2600 v2 product family is at the heart of an agile and efficient data center that meets your diverse needs. These engineering marvels are designed to deliver the best combination of performance, energy efficiency', 'hardware10.jpg', 'p1049'),
(51, 'ASUS TUF GT501 Tempered Glass RGB PC Gaming Case , White Edition', 'hardwar', '139.00', 1, 'Designed to be noticed: Metal front panel with custom TUF Gaming spatter pattern, and 4mm-thick, smoked, tempered-glass side panel to showcase your buildâ€™s internals. Mobile battle station: Ergonomic, woven-cotton carry handles enable easy and safe tran', 'hardware11.jpg', 'p1050'),
(52, 'ROG Strix Helios GUNDAM EDITION RGB Mid-Tower Premium design', 'hardwar', '279.00', 1, '	Premium design & aesthetics: Made for showcase builds with three tempered-glass panels, brushed-aluminum frame and integrated Aura Sync RGB front lighting Clean build made easy: A multifunction cover with graphics card holders, a PSU shroud and a translu', 'hardware12.jpg', 'p1051'),
(53, 'Thermaltake Level 20 GT ARGB Black Edition Gaming Case ARGB 5V LED', 'hardwar', '198.00', 1, 'The ARGB 5V LED fans can be controlled using a simple interface built into the I / O panel that cycles through 7 different lighting modes and a range of different color options. The Level 20 GT ARGB Black Edition features tempered glass panels on the fron', 'hardware13.jpg', 'p1052'),
(54, 'Deepcool MACUBE 110 Micro ATX Tempered Glass Side - Pink', 'hardwar', '39.00', 1, 'Refined minimalism design Magnetic tempered glass side panel Mesh top panel Support up to six 120mm or four 140mm cooling fans Support radiators up to 280mm on top and in front Removable drive cage Adjustable GPU holder included', 'hardware14.jpg', 'p1053'),
(55, 'Intel Core i9-11900K Rocket Lake 8-Cores up to 5.3 GHz 16MB Intel Optane', 'hardwar', '499.00', 1, 'Compatible with Intel 500 Series and Select Intel 400 Series chipset based on motherboards Supports Intel Turbo Boost Max Technology 3.0 Intel Optane memory support PCIe Gen 4.0 compliant Does not include thermal solution', 'hardware15.jpg', 'p1054'),
(56, 'AMD RYZEN 7 5800X 8-Core 3.6 GHz (4.7 GHz Max Boost) , Tray', 'hardwar', '349.00', 1, 'AMDs fastest 8 core processor for mainstream desktop, with 16 procesing threads Can deliver elite 100+ FPS performance in the worlds most popular games Cooler not included, high-performance cooler recommended 4.7 GHz Max Boost, unlocked for overclock', 'hardware16.jpg', 'p1055'),
(57, 'ASUS Z590 WIFI GUNDAM EDITION Intel Z590 Aura Sync RGB	', 'hardwar', '279.00', 1, 'IntelÂ® LGA 1200 socket: Ready for 11th and 10th Gen IntelÂ® Coreâ„¢ processors Enhanced power solution: 14+2 DrMOS power stages, six-layer PCB, ProCool sockets, military-grade components and Digi+ VRM for maximum durability Comprehensive cooling: Enlarge', 'hardware17.jpg', 'p1056'),
(58, 'ASUS TUF GAMING B550M-ZAKU (WI-FI) AMD B550 Micro ATX Motherboard', 'hardwar', '149.00', 1, 'AMD AM4 socket: Ready for Ryzenâ„¢ 5000 Series/ 4000 G-Series/ 3000 Series Desktop Processors Enhanced power solution: 8+2 DrMOS power stages, ProCool connector, military-grade TUF components, and Digi+ VRM for maximum durability Comprehensive cooling: VR', 'hardware18.jpg', 'p1057'),
(59, 'HyperX Fury 8GB RGB 2666 MHz DDR4 Memory Stunning RGB', 'hardwar', '45.00', 1, 'Stunning RGB lighting with aggressive style1 , Patent pending HyperX Infrared Sync Technology , Intel XMP-ready profiles optimized for Intelâ€™s latest chipsets , Plug N Play functionality at 2400MHz and 2666MHz', 'hardware19.jpg', 'p1058'),
(60, 'ASUS ROG STRIX LC 360 360 RGB GUNDAM EDITION AIO CPU Water', 'hardwar', '299.00', 1, 'ROG-designed radiator fans for optimized airflow and static pressure Individually addressable RGB and NCVM-coating pump cover accentuates the sleek, modern aesthetics Styled to complement ROG motherboards, at the center stage of your build Reinforced, sle', 'hardware20.jpg', 'p1059'),
(61, 'ADATA ED600 USB 3.1 Tool-Free Waterproof & Shockproof 2.5', 'stoarge', '10.00', 1, 'One-Key Switch Tool-free user friendly design IP54 water & dust resistance Compatible with HDD and SSD Shock vibration resistant design', 'Storage1.jpg', 'p1060'),
(62, 'Western Digital Green M.2 2280 240GB SATA Internal SSD', 'stoarge', '25.00', 1, 'SLC (single-level cell) caching boosts write performance to quickly perform everyday tasks With sequential read speeds up to 545 MB/s quickly boot your system, launch apps and open files. Available in 2.5â€/7mm cased and M.2 2280 form factors to accommod', 'Storage2.jpg', 'p1061'),
(63, 'Lenovo ThinkServer 600GB Gen5 SAS 12Gb s 10K RPM 2.5', 'stoarge', '99.00', 1, 'Serial ATA 7-pin Connector Up to 10000rpm Performance Spindle speed is 10000rpm Warranty: 1 Year', 'Storage3.jpg', 'p1062'),
(64, 'Lenovo 2TB ThinkPad USB 3.0 Secure Portable Hard Drive', 'stoarge', '290.00', 1, 'The 2TB ThinkPad USB 3.0 Secure Portable Hard Drive offers high-level 256-bit Advanced Encryption Standard (AES) security within a slim, lightweight, self-powered, easy-to-use design. It features connectivity via either USB 2.0 or USB 3.0 interface in a c', 'Storage4.jpg', 'p1063'),
(65, 'Kingston XS2000 2TB High Performance Pocket', 'stoarge', '225.00', 1, 'Industry-leading read / write speeds up to 2,000MB / s Capacities up to 2TB to support high resolution images, 8K videos, and large documents. Pocket-sized Portability Tested to be water resistant, dust resistant and shockproof with an included rubber sle', 'Storage5.jpg', 'p1064'),
(66, 'Kingston NV1 2TB M.2 2280 PCIe NVMe SSD Kingstonâ€™s NV1 NVMe', 'stoarge', '159.00', 1, '	Kingstonâ€™s NV1 NVMeâ„¢ PCIe SSD is a substantial storage solution that offers read/write1 speeds up to 2,100/1,700MB/s, which is 3 to 4 times faster than a SATA-based SSD, and 35 times faster than a traditional hard drive. NV1 works with lower power, l', 'Storage6.jpg', 'p1065'),
(67, 'SAMSUNG 500GB 980 PCIe 3.0 x4 M.2 Internal SSD', 'stoarge', '65.00', 1, 'UPGRADE TO IMPRESSIVE NVMe SPEED Whether you need a boost for gaming or a seamless workflow for heavy graphics, the 980 is a smart choice for outstanding SSD performance PACKED WITH SPEED 980 delivers value, without sacrificing sequential read/write speed', 'Storage7.jpg', 'p1066'),
(68, 'Vantec NexStar GX USB 3.1 Gen 2 Type-C 2.5 \"SATA SSD / HDD Enclosure', 'stoarge', '25.00', 1, 'True USB-C enclosure with the best SuperSpeed â€‹â€‹Plus USB 3.1 Gen 2 transfer speed; comes with 2 cables for compatibility with any USB Type A or Type C port. Full aluminum (housing and tray) for heat dissipation and elegant design; Supports ultra-fast	', 'Storage8.jpg', 'p1067'),
(69, 'Kingston NV1 500GB M.2 2280 PCIe NVMe SSD', 'stoarge', '39.00', 1, 'Kingstonâ€™s NV1 NVMeâ„¢ PCIe SSD is a substantial storage solution that offers read/write1 speeds up to 2,100/1,700MB/s, which is 3 to 4 times faster than a SATA-based SSD, and 35 times faster than a traditional hard drive. NV1 works with lower power, lo', 'Storage9.jpg', 'p1068'),
(70, 'Kingston NV1 1TB M.2 2280 PCIe NVMe SSD Kingstonâ€™s NV1 NVMe', 'stoarge', '79.00', 1, 'Kingstonâ€™s NV1 NVMeâ„¢ PCIe SSD is a substantial storage solution that offers read/write1 speeds up to 2,100/1,700MB/s, which is 3 to 4 times faster than a SATA-based SSD, and 35 times faster than a traditional hard drive. NV1 works with lower power, lo', 'Storage10.jpg', 'p1069'),
(71, 'TerraMaster F4-210 4-Bay NAS Media Server (Diskless)', 'stoarge', '325.00', 1, 'A 4-bay entry-level NAS optimized for home and SOHO users, running the latest TOS 4.1 operating system. ARM v8 quad-core 1.4GHz CPU with 2GB RAM (not upgradeable), blazingly fast read/write speeds of more than 114 MB/s (RAID 0, WD Red 4TB x 2), hardware e', 'Storage11.jpg', 'p1070'),
(72, 'My Passport SSD 500GB Portable SSD USB 3.2 Equipped with USB 3.2 Gen 2 technology', 'stoarge', '69.00', 1, 'Equipped with the USB 3.2 Gen 2 technology, it offers easy-to-use connection to devices. My Passport SSD features a USB Type-C cable and USB Type-A adapter to work with legacy systems. USB-powered. NVMe technology with read speeds of up to 1,050MB/s and w', 'Storage12.jpg', 'p1071'),
(73, 'WD My Book 16TB USB 3.0 Desktop Hard Drive	', 'stoarge', '459.00', 1, 'Large storage capacity with automatic backup and system. Raid-0 ready out of the box. Western digital red discs optimized for raid. Compatible with USB 3.0	', 'Storage13.jpg', 'p1072'),
(74, 'Synology DiskStation DS420+ 4-Bay NAS Enclosure', 'stoarge', '529.00', 1, '4-Bay Usage Backup & stream media through personal cloud Diskless System Intel Celeron J4025 2-core 2.0GHz, burst up to 2.9GHz Processor 2 x 10/100/1000M 2 x USB3.0	', 'Storage14.jpg', 'p1073'),
(75, 'Kingston DataTraveler Exodia 64GB USB 3.2 Flash	', 'stoarge', '5.00', 1, 'USB 3.2 Gen 1 performance for easy access to laptops, desktop PCs, monitors and other digital devices. Quick transfers and convenient storage of documents, music, videos and more. Large loop easily attaches to key rings Practical cap protects the USB plug', 'Storage15.jpg', 'p1074'),
(76, 'WD Blue SN550 NVMe M.2 2280 500GB PCI-Express	', 'stoarge', '55.00', 1, 'Put NVMeâ„¢ power at the heart of your PC for lightning-fast, ultra-responsive performance. The WD Blueâ„¢ SN550 NVMeâ„¢ SSD can deliver over 4 times the speed of our best SATA SSDs. Whether youâ€™re working, creating, casual gaming or processing large am', 'Storage16.jpg', '1075'),
(77, 'Synology DiskStation DS220J 2-Bay NAS Enclosure 24/7', 'stoarge', '189.00', 1, '24/7 file server for your household to store share and backup personal data Award-winning DiskStation Manager (DSM) brings intuitive operation flow and reduces learning curve Access and share data with any Windows macOS and Linux computers or mobile', 'Storage17.jpg', 'p1076'),
(78, 'WD Gold 14TB Enterprise Class HDD 7200 RPM 256 MB Cache', 'stoarge', '435.00', 1, 'Compatibility: Windows, Windows Server, Linux, and Mac OS , Up to 2.5M hours MTBF with a 5 year limited Warranty , 4th Generation HelioSeal technology (12TB) , Raff technology for vibration protection , Raid-specific time-limited error recovery (TLER)	', 'Storage18.jpg', 'p1077'),
(79, 'WD Gold 12TB Enterprise Class HDD 7200 RPM 256 MB Cache	', 'stoarge', '349.00', 1, 'Compatibility: Windows, Windows Server, Linux, and Mac OS , Up to 2.5M hours MTBF with a 5 year limited Warranty , 4th Generation HelioSeal technology (12TB) , Raff technology for vibration protection , Raid-specific time-limited error recovery (TLER)	', 'Storage19.jpg', 'p1078'),
(80, 'WD 4TB My Passport Portable External Hard Drive, Black	', 'stoarge', '79.00', 1, 'Automatic backup - Easy to use , Password protection + 256-bit AES hardware encryption , Western Digital Discovery software for Western Digital backup, password protection and drive management , Superspeed USB port; USB 2.0 compatible	', 'Storage20.jpg', 'p1079');

-- --------------------------------------------------------

--
-- Table structure for table `singupuser`
--

CREATE TABLE `singupuser` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `password_confirmation` varchar(50) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singupuser`
--

INSERT INTO `singupuser` (`id`, `first_name`, `last_name`, `user_name`, `email`, `password`, `phone`, `password_confirmation`, `code`) VALUES
(24, 'fawzan', 'fawzan', 'ahmadhhh', 'ahmadhassan0566@gmail.com', 'Ahmahm1234', 786273150, 'Ahmahm1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messeges`
--
ALTER TABLE `messeges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `singupuser`
--
ALTER TABLE `singupuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=483;

--
-- AUTO_INCREMENT for table `messeges`
--
ALTER TABLE `messeges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=666;

--
-- AUTO_INCREMENT for table `singupuser`
--
ALTER TABLE `singupuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
