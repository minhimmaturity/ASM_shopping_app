-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 27, 2022 at 03:32 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electric shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `email`, `birthdate`, `phone_number`) VALUES
(1, 'admin', 'admin', 'trantanminh0603@gmail.com', '2003-06-12', 988888888),
(2, 'sasa', '123', 'asdad@gmail.com', '2003-09-01', 123456789),
(3, 'mmmmm', '1234', 'iiii@gmail.com', '1999-01-11', 9898879),
(32, 'minhtran123', '123456', 'minhtran123@gmail.com', '1999-01-01', 969969696),
(61, '@#$%!minh', '123', 'minhtran12345@gmail.com', '2003-02-01', 111222333);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandid` int(50) NOT NULL,
  `brandName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandid`, `brandName`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Xiaomi'),
(4, 'MSI'),
(5, 'Microsoft'),
(6, 'Dell'),
(7, 'Coros'),
(8, 'Oppo'),
(9, 'Realme'),
(10, 'Lenovo'),
(11, 'Acer'),
(12, ' Fujitsu'),
(13, 'Gigabyte'),
(14, 'Asus'),
(15, 'Huawei');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`) VALUES
(13, 'iPhone 13 Pro Max', '1055');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(50) NOT NULL,
  `catName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catName`) VALUES
(1, 'Smart Phone'),
(2, 'Laptop'),
(3, 'Tablet'),
(4, 'HeadPhone'),
(5, 'Watch');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` varchar(20) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productIMG` text NOT NULL,
  `productPrice` float NOT NULL,
  `description` text NOT NULL,
  `catid` int(50) NOT NULL,
  `brandid` int(50) NOT NULL,
  `specific description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productIMG`, `productPrice`, `description`, `catid`, `brandid`, `specific description`) VALUES
('A101', 'iPhone 13 Pro Max', './upload/image/13pro.jpg', 1055, 'Quality Camera, Screen : 6.7 Hz', 1, 1, '6.7\" Super Retina XDR display with ProMotion. 5G Superfast downloads, high?quality streaming Cinematic mode in 1080p at 30 fps. Dolby Vision HDR video recording up to 4K at 60 fps. 6X Optical zoom range A15 Bionic chip. New 6-core CPU with 2 performance and 4 efficiency cores. New 5-core GPU. New 16-core Neural Engine Up to 28 hours video playback. Face ID. Ceramic Shield front. Surgical-grade stainless steel Water resistant to a depth of 6 meters for up to 30 minutes. Compatible with MagSafe accessories and wireless chargers'),
('A102', 'iPhone 12 Pro Max', './upload/image/ip12promax.png', 1399, 'Quality Camera, Screen : 6.7 Hz', 1, 1, '6.7\" Super Retina XDR display with ProMotion. 5G Superfast downloads, high?quality streaming Cinematic mode in 1080p at 30 fps. Dolby Vision HDR video recording up to 4K at 60 fps. 6X Optical zoom range A15 Bionic chip. New 6-core CPU with 2 performance and 4 efficiency cores. New 5-core GPU'),
('A105', 'Apple Macbook Air M2 2022 8GB 256GB', './upload/image/macairm2.jpg', 2500, 'jjjj', 2, 1, 'STRIKINGLY THIN DESIGN — The redesigned MacBook Air is more portable than ever and weighs just 2.7 pounds. It’s the incredibly capable laptop that lets you work, play or create just about anything — anywhere. SUPERCHARGED BY M2 — Get more done faster with a next-generation 8-core CPU, up to 10-core GPU and up to 24GB of unified memory. UP TO 18 HOURS OF BATTERY LIFE — Go all day and into the night, thanks to the power-efficient performance of the Apple M2 chip. BIG, BEAUTIFUL DISPLAY — The 13.6-inch Liquid Retina display features over 500 nits of brightness, P3 wide color and support for 1 billion colors for vibrant images and incredible detail. ADVANCED CAMERA AND AUDIO — Look sharp and sound great with a 1080p FaceTime HD camera, three-mic array and four-speaker sound system with Spatial Audio. VERSATILE CONNECTIVITY — MacBook Air features a MagSafe charging port, two Thunderbolt ports and a headphone jack. EASY TO USE — Your Mac feels familiar from the moment you turn it on, and works seamlessly with all your Apple devices. BUILT TO LAST — The all-aluminium unibody enclosure is exceptionally durable. And free software updates keep things running smooth and secure for years to come. SIMPLY COMPATIBLE — All your go-to apps run lightning-fast — including Microsoft 365, Zoom, and many of your favorite iPhone and iPad apps. COMES WITH APPLECARE WARRANTY – Every Mac comes with a one-year limited warranty and up to 90 days of complimentary technical support. Get AppleCare+ to extend your coverage.'),
('A106', 'Apple AirPods 2 VN/A', './upload/image/airpod2.jpg', 129, 'quality sound', 4, 1, 'Quick access to Siri by saying “ Hey Siri ” More than 24 hours total listening time with the Charging Case Effortless setup, in-ear detection, and automatic switching for a magical experience Easily share audio between two sets of AirPods on your iPhone, iPad, iPod touch, or Apple TV'),
('A108', 'Laptop Asus Gaming Rog Strix G15', './upload/image/RogStrixG15.png', 1499, 'mm', 2, 14, 'NVIDIA GeForce RTX 3050 Ti 4GB GDDR6 with ROG Boost up to 1795MHz at 80W (95W with Dynamic Boost) AMD Ryzen 7 4800H Mobile Processor (8-core/16-thread, 12MB Cache, 4.2 GHz max boost) 300Hz 3ms 15.6” Full HD 1920x1080 IPS-Type Display 16GB DDR4 RAM | 512GB PCIe NVMe M.2 SSD | Windows 11 Home ROG Intelligent Cooling thermal system with Thermal Grizzly Liquid Metal Thermal Compound'),
('C101', 'Smart Watch Coros Pace 2', './upload/image/corospace2.jpeg', 250, 'Muscle heat map', 5, 7, 'Easy-to-use running watch monitors heart rate (this is not a medical device) at the wrist and uses GPS to track how far, how fast and where you’ve run Battery life: up to 2 weeks in smartwatch mode; up to 20 hours in GPS mode Plan your race day strategy with the PacePro feature (not compatible with on-device courses), which offers GPS-based pace guidance for a selected course or distance Run your best with helpful training tools, including race time predictions and finish time estimates Track all the ways you move with built-in activity profiles for running, cycling, track run, virtual run, pool swim, Pilates, HIIT, breathwork and more Tune in to your body with advanced wellness features, such as intensity minutes, fitness age, all-day respiration and more Customize your watch with free watch faces, data fields, apps and widgets from the Connect IQ Store (requires Garmin Connect app and Connect IQ app loaded on a compatible smartphone) Take the guesswork out of training with suggested workouts of varying intensities based on your training history, fitness level and recovery time'),
('C102', 'Smart Watch Coros Apex Pro', './upload/image/corosapexpro.jpg', 999, 'night mode', 5, 7, '*100%brand new and quality,easy to adjust the length to fit the wrist,one size fits everyone. *Made of -quality organic silica gel,environmentally friendly and healthy,Softness is moderate, wear very comfortable. *Softness is moderate, wear very comfortable,Compression molding, sturdy and durable,Wearable strap/wrist strap,suitable for original watch. *Easy to insert and remove,very suitable for your watch. *Exquisite craftsmanship and stylish design are perfect gifts for friends and family.'),
('M101', 'Surface Pro 7 Core i5 | 8GB RAM| 128GB', './upload/image/surfacepro7.jpg', 900, 'Quality Camera, Screen : 6.7 Hz', 2, 5, 'Next-gen, best-in-class laptop with the versatility of a studio and tablet, so you can type, touch, draw, write, work, and play more naturally Faster than Surface Pro 6, with a 10th Gen Intel Core Processor – redefining what’s possible in a thin and light computer. Wireless : Wi-Fi 6: 802.11ax compatible. Bluetooth Wireless 5.0 technology More ways to connect, with both USB-C and USB-A ports for connecting to displays, docking stations and more, as well as accessory charging Standout design that won’t weigh you down — ultra-slim and light Surface Pro 7 starts at just 1.70 pounds.Aspect ratio: 3:2 All-day battery life upto 10.5 hours, plus the ability to go from empty to full faster — about 80% in just over an hour Free Upgrade to Windows 11 when available (see below).'),
('M102', 'Microsoft Surface Laptop 4', './upload/image/surfacelap4.jpg', 1000, '8GB RAM, 128GB SSD', 2, 5, 'Power to do what you want with up to 70% more speed than before and an 11th Gen Intel Core processor. Thin, light, elegant design in choice of two sizes: light, portable 13.5” or larger 15” that’s perfect for split-screen multitasking. Show your best side on video calls with sharp video and image quality, even in low light, thanks to a front-facing 720p HD camera. Enjoy theater-like sound for movies and shows with Omnisonic Speakers backed by immersive Dolby Atmos6. Be heard loud and clear on calls with dual far-field Studio Mics that capture your voice and reduce background noise. You’re going to need Word, Excel, and PowerPoint. Don’t forget to add Microsoft 365'),
('M103', 'Xiaomi Redmi Note 11', './upload/image/xiaominote11.png', 170, 'Strong battery', 1, 3, 'PRO-GRADE CAMERA: Zoom in close with 100X Space Zoom, and take photos and videos like a pro with our easy-to-use, multi-lens camera. SHARP 8K VIDEO: Capture your life’s best moments in head-turning, super-smooth, cinema quality 8K Video. MULTIPLE WAYS TO RECORD: Create share-ready videos and GIFs with multi-cam recording and automatic, professional-style effects. HIGHER RESOLUTION, 100X ZOOM: Get amazing clarity with a dual lens combo of 3X and 10X optical zoom and revolutionary 100X Space Zoom. ALL DAY INTELLIGENT BATTERY: Intuitively manages your cellphone’s usage, so you can go all day without charging. POWER OF 5G: Experience next-generation connectivity for everything you love to do: more sharing, more gaming, more experiences. Battery power consumption depends on usage patterns and results may vary. Devices will work on any compatible network. Wireless voice, data and messaging services are compatible with most GSM networks such as AT&T and T-Mobile and CDMA networks such as Verizon, Sprint and US Cellular'),
('S101', 'Samsung Galaxy A73 (5G) 256GB', './upload/image/a73.jpg', 500, 'Quality Camera, Screen : 6.7 Hz', 1, 2, 'NOTE: Global Version. No Warranty. This device is globally unlocked and ready to be used with your preferred GSM Carrier. THIS DEVICE IS NOT COMPATIBLE with CDMA carriers such as Cricket, Verizon, Sprint, Boost Mobile, US Cellular, etc. SIM CARD NOT INCLUDED. Please confirm device compatibility with your service provider before placing your order Supported Network Bands: 5G/4G/3G/2G. Please note that 5G requires the support of local telecom operator services and may not be available in all regions. Please check with your service provider to see if 5G is offered in your area Storage: 128GB 8GB RAM Display: 6.7 inches, 108.4 cm2 (~87.0% screen-to-body ratio) Platform: Android 12, One UI 4.1 Qualcomm SM7325 Snapdragon 778G 5G (6 nm) Camera: 108 MP, f/1.8, (wide), PDAF, OIS Battery: Li-Po 5000 mAh, non-removable'),
('S102', 'Samsung Galaxy A23', './upload/image/a23.jpg', 250, 'group 4 camera', 1, 2, 'Galaxy A23 5G makes keeping up with the things you love most a breeze with virtually lag-free 5G. Relive life’s best moments with a wide-lens camera and infinite display. Catch even the finest details with the wide lens of Galaxy A23 5G. Take pro pics with Advanced Portrait mode. Galaxy A23 5G is loaded with memory to store your memories. With a long-lasting, super-fast-charging battery, you can get more done without taking a break to charge'),
('S103', 'Samsung Galaxy Bud 2 Pro', './upload/image/samsunggalaxybud.png', 249, 'quality sound, strong battery', 4, 2, '    ACTIVE NOISE CANCELLATION: Reduce unwanted noise with Galaxy Buds2 Pro; They use Intelligent Active Noise Cancellation* to quiet even the loudest outside sounds; Tune in to what matters most without being bothered by distracting sounds around you HI-FI SOUND QUALITY: Studio quality sound isn’t just for the pros; Feel every note like you’re there with Galaxy Buds2 Pro** and get a next-level listening experience, whether you’re rocking out to your playlist or staying informed with a podcast	    ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `catid` (`catid`),
  ADD KEY `brandid` (`brandid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `brandid` FOREIGN KEY (`brandid`) REFERENCES `brand` (`brandid`),
  ADD CONSTRAINT `catid` FOREIGN KEY (`catid`) REFERENCES `category` (`catid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
