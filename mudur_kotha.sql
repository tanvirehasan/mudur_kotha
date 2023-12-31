-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 07:22 AM
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
-- Database: `mudur_kotha`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminx`
--

CREATE TABLE `adminx` (
  `adminid` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `user_dregination` varchar(255) NOT NULL,
  `status` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminx`
--

INSERT INTO `adminx` (`adminid`, `user_name`, `password`, `name`, `profile_pic`, `user_dregination`, `status`) VALUES
(1, 'adminx', 'AdminX@2023', 'Admin', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `atem_to_kitpotog_19`
--

CREATE TABLE `atem_to_kitpotog_19` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `kit_name` varchar(255) NOT NULL,
  `kit_sokkha` varchar(255) NOT NULL,
  `niyoton_bikolp` varchar(255) NOT NULL,
  `costforatem` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atem_to_kitpotog_19`
--

INSERT INTO `atem_to_kitpotog_19` (`id`, `user_id`, `kit_name`, `kit_sokkha`, `niyoton_bikolp`, `costforatem`, `lastupdated`) VALUES
(1, 6, 'ভারোয়া মাইট ', 'fsdfsd', 'fsdf', 'sdff', '2023-12-24 05:37:31'),
(2, 6, 'শ্বাসনালীর মাইট', 'sdfsd', 'sdf', 's', '2023-12-24 05:37:31'),
(3, 6, 'মৌচাক বিটল পোকা', 'asda', 'sdfsd', 'asdasd', '2023-12-24 05:37:31'),
(4, 6, 'মোমের মথ', 'asd', 'das', 'asda', '2023-12-24 05:37:31'),
(5, 6, 'ভীমরুল', 'asdas', 'asdd', 'asd', '2023-12-24 05:37:31'),
(6, 6, 'পিঁপড়া', 'a', 'asdd', 'dasdas', '2023-12-24 05:37:31'),
(7, 6, 'পাখি', 'asdas', 'dasd', 'asd', '2023-12-24 05:37:31'),
(8, 6, 'অন্যান্য', 'asda', 'asd', 'asd', '2023-12-24 05:37:31'),
(9, 6, 'ব্রাউল ফ্লাই', 'dasda', 'sdasdasdasd', 'asda', '2023-12-24 05:37:31'),
(10, 6, 'কোন ধারণা নেই', 'l;k;lkl', '', 'dasdasda', '2023-12-24 05:37:31'),
(11, 1, 'ভারোয়া মাইট ', '', '', '', '2023-12-24 05:37:31'),
(12, 1, 'শ্বাসনালীর মাইট', '', '', '', '2023-12-24 05:37:31'),
(13, 1, 'মৌচাক বিটল পোকা', '', '', '', '2023-12-24 05:37:31'),
(14, 1, 'মোমের মথ', '', '', '', '2023-12-24 05:37:31'),
(15, 1, 'ভীমরুল', '', '', '', '2023-12-24 05:37:31'),
(16, 1, 'পিঁপড়া', '', '', '', '2023-12-24 05:37:31'),
(17, 1, 'পাখি', '', '', '', '2023-12-24 05:37:31'),
(18, 1, 'অন্যান্য', '', '', '', '2023-12-24 05:37:31'),
(19, 1, 'ব্রাউল ফ্লাই', '', '', '', '2023-12-24 05:37:31'),
(20, 1, 'কোন ধারণা নেই', '', '', '', '2023-12-24 05:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `ay_vey`
--

CREATE TABLE `ay_vey` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `posikhon_prodankari_sonstha` varchar(255) NOT NULL,
  `sohyatakari_songstha` varchar(255) NOT NULL,
  `odivukot_songstha` varchar(255) NOT NULL,
  `masik_bey` varchar(255) NOT NULL,
  `masik_ay` varchar(255) NOT NULL,
  `yearly_ay` varchar(255) NOT NULL,
  `khamare_jonbol_songkha` varchar(255) NOT NULL,
  `shromik_gor_beton` varchar(255) NOT NULL,
  `khamare_shrmik_somoykal` varchar(255) NOT NULL,
  `suparish_motamot` varchar(255) NOT NULL,
  `sokarer_kase_caoya` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ay_vey`
--

INSERT INTO `ay_vey` (`id`, `user_id`, `posikhon_prodankari_sonstha`, `sohyatakari_songstha`, `odivukot_songstha`, `masik_bey`, `masik_ay`, `yearly_ay`, `khamare_jonbol_songkha`, `shromik_gor_beton`, `khamare_shrmik_somoykal`, `suparish_motamot`, `sokarer_kase_caoya`, `lastupdated`) VALUES
(1, 1, 'Futureleaders', 'UN', 'Sky', '120565', '205458', '578945868', '20', '123456', '6', 'কিছু বলার নেই', 'চাওয়ার আছে অনেক কিছু কিন্তু না দিলেও কিছু বলার নেই।', '2023-12-24 05:37:44'),
(2, 6, '', '', '', '', '', '', '', '', '', '', '', '2023-12-24 05:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `box_size_11`
--

CREATE TABLE `box_size_11` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `box` int(10) NOT NULL,
  `fraem_size` varchar(10) NOT NULL,
  `month` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `box_size_11`
--

INSERT INTO `box_size_11` (`id`, `user_id`, `box`, `fraem_size`, `month`, `location`, `lastupdated`) VALUES
(31, 1, 100, '5', 'January', 'Dhaka', '2023-12-24 04:33:12'),
(32, 1, 456, '5', 'January', 'January', '2023-12-24 04:33:12'),
(33, 1, 45, '5', 'January', 'January', '2023-12-24 04:33:12'),
(34, 1, 12, '5', 'January', 'January', '2023-12-24 04:33:12'),
(35, 1, 12, '5', 'January', 'January', '2023-12-24 04:33:12'),
(36, 1, 8, '5', 'January', 'January', '2023-12-24 04:33:12'),
(37, 6, 0, '', '', '', '2023-12-24 03:59:55'),
(38, 6, 0, '', '', '', '2023-12-24 03:59:55'),
(39, 6, 0, '', '', '', '2023-12-24 03:59:55'),
(40, 6, 0, '', '', '', '2023-12-24 03:59:55'),
(41, 6, 0, '', '', '', '2023-12-24 03:59:55'),
(42, 6, 0, '', '', '', '2023-12-24 03:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) NOT NULL,
  `division_id` int(1) NOT NULL,
  `en_dis_name` varchar(25) NOT NULL,
  `dis_bn_name` varchar(25) NOT NULL,
  `lat` varchar(15) DEFAULT NULL,
  `lon` varchar(15) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `en_dis_name`, `dis_bn_name`, `lat`, `lon`, `url`) VALUES
(1, 1, 'Comilla', 'কুমিল্লা', '23.4682747', '91.1788135', 'www.comilla.gov.bd'),
(2, 1, 'Feni', 'ফেনী', '23.023231', '91.3840844', 'www.feni.gov.bd'),
(3, 1, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '23.9570904', '91.1119286', 'www.brahmanbaria.gov.bd'),
(4, 1, 'Rangamati', 'রাঙ্গামাটি', '22.65561018', '92.17541121', 'www.rangamati.gov.bd'),
(5, 1, 'Noakhali', 'নোয়াখালী', '22.869563', '91.099398', 'www.noakhali.gov.bd'),
(6, 1, 'Chandpur', 'চাঁদপুর', '23.2332585', '90.6712912', 'www.chandpur.gov.bd'),
(7, 1, 'Lakshmipur', 'লক্ষ্মীপুর', '22.942477', '90.841184', 'www.lakshmipur.gov.bd'),
(8, 1, 'Chattogram', 'চট্টগ্রাম', '22.335109', '91.834073', 'www.chittagong.gov.bd'),
(9, 1, 'Coxsbazar', 'কক্সবাজার', '21.44315751', '91.97381741', 'www.coxsbazar.gov.bd'),
(10, 1, 'Khagrachhari', 'খাগড়াছড়ি', '23.119285', '91.984663', 'www.khagrachhari.gov.bd'),
(11, 1, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773', 'www.bandarban.gov.bd'),
(12, 2, 'Sirajganj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815', 'www.sirajganj.gov.bd'),
(13, 2, 'Pabna', 'পাবনা', '23.998524', '89.233645', 'www.pabna.gov.bd'),
(14, 2, 'Bogura', 'বগুড়া', '24.8465228', '89.377755', 'www.bogra.gov.bd'),
(15, 2, 'Rajshahi', 'রাজশাহী', '24.37230298', '88.56307623', 'www.rajshahi.gov.bd'),
(16, 2, 'Natore', 'নাটোর', '24.420556', '89.000282', 'www.natore.gov.bd'),
(17, 2, 'Joypurhat', 'জয়পুরহাট', '25.09636876', '89.04004280', 'www.joypurhat.gov.bd'),
(18, 2, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd'),
(19, 2, 'Naogaon', 'নওগাঁ', '24.83256191', '88.92485205', 'www.naogaon.gov.bd'),
(20, 3, 'Jashore', 'যশোর', '23.16643', '89.2081126', 'www.jessore.gov.bd'),
(21, 3, 'Satkhira', 'সাতক্ষীরা', '22.7180905', '89.0687033', 'www.satkhira.gov.bd'),
(22, 3, 'Meherpur', 'মেহেরপুর', '23.762213', '88.631821', 'www.meherpur.gov.bd'),
(23, 3, 'Narail', 'নড়াইল', '23.172534', '89.512672', 'www.narail.gov.bd'),
(24, 3, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.841841', 'www.chuadanga.gov.bd'),
(25, 3, 'Kushtia', 'কুষ্টিয়া', '23.901258', '89.120482', 'www.kushtia.gov.bd'),
(26, 3, 'Magura', 'মাগুরা', '23.487337', '89.419956', 'www.magura.gov.bd'),
(27, 3, 'Khulna', 'খুলনা', '22.815774', '89.568679', 'www.khulna.gov.bd'),
(28, 3, 'Bagerhat', 'বাগেরহাট', '22.651568', '89.785938', 'www.bagerhat.gov.bd'),
(29, 3, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd'),
(30, 4, 'Jhalakathi', 'ঝালকাঠি', '22.6422689', '90.2003932', 'www.jhalakathi.gov.bd'),
(31, 4, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712', 'www.patuakhali.gov.bd'),
(32, 4, 'Pirojpur', 'পিরোজপুর', '22.5781398', '89.9983909', 'www.pirojpur.gov.bd'),
(33, 4, 'Barisal', 'বরিশাল', '22.7004179', '90.3731568', 'www.barisal.gov.bd'),
(34, 4, 'Bhola', 'ভোলা', '22.685923', '90.648179', 'www.bhola.gov.bd'),
(35, 4, 'Barguna', 'বরগুনা', '22.159182', '90.125581', 'www.barguna.gov.bd'),
(36, 5, 'Sylhet', 'সিলেট', '24.8897956', '91.8697894', 'www.sylhet.gov.bd'),
(37, 5, 'Moulvibazar', 'মৌলভীবাজার', '24.482934', '91.777417', 'www.moulvibazar.gov.bd'),
(38, 5, 'Habiganj', 'হবিগঞ্জ', '24.374945', '91.41553', 'www.habiganj.gov.bd'),
(39, 5, 'Sunamganj', 'সুনামগঞ্জ', '25.0658042', '91.3950115', 'www.sunamganj.gov.bd'),
(40, 6, 'Narsingdi', 'নরসিংদী', '23.932233', '90.71541', 'www.narsingdi.gov.bd'),
(41, 6, 'Gazipur', 'গাজীপুর', '24.0022858', '90.4264283', 'www.gazipur.gov.bd'),
(42, 6, 'Shariatpur', 'শরীয়তপুর', '23.2060195', '90.3477725', 'www.shariatpur.gov.bd'),
(43, 6, 'Narayanganj', 'নারায়ণগঞ্জ', '23.63366', '90.496482', 'www.narayanganj.gov.bd'),
(44, 6, 'Tangail', 'টাঙ্গাইল', '24.264145', '89.918029', 'www.tangail.gov.bd'),
(45, 6, 'Kishoreganj', 'কিশোরগঞ্জ', '24.444937', '90.776575', 'www.kishoreganj.gov.bd'),
(46, 6, 'Manikganj', 'মানিকগঞ্জ', '23.8602262', '90.0018293', 'www.manikganj.gov.bd'),
(47, 6, 'Dhaka', 'ঢাকা', '23.7115253', '90.4111451', 'www.dhaka.gov.bd'),
(48, 6, 'Munshiganj', 'মুন্সিগঞ্জ', '23.5435742', '90.5354327', 'www.munshiganj.gov.bd'),
(49, 6, 'Rajbari', 'রাজবাড়ী', '23.7574305', '89.6444665', 'www.rajbari.gov.bd'),
(50, 6, 'Madaripur', 'মাদারীপুর', '23.164102', '90.1896805', 'www.madaripur.gov.bd'),
(51, 6, 'Gopalganj', 'গোপালগঞ্জ', '23.0050857', '89.8266059', 'www.gopalganj.gov.bd'),
(52, 6, 'Faridpur', 'ফরিদপুর', '23.6070822', '89.8429406', 'www.faridpur.gov.bd'),
(53, 7, 'Panchagarh', 'পঞ্চগড়', '26.3411', '88.5541606', 'www.panchagarh.gov.bd'),
(54, 7, 'Dinajpur', 'দিনাজপুর', '25.6217061', '88.6354504', 'www.dinajpur.gov.bd'),
(55, 7, 'Lalmonirhat', 'লালমনিরহাট', '25.9165451', '89.4532409', 'www.lalmonirhat.gov.bd'),
(56, 7, 'Nilphamari', 'নীলফামারী', '25.931794', '88.856006', 'www.nilphamari.gov.bd'),
(57, 7, 'Gaibandha', 'গাইবান্ধা', '25.328751', '89.528088', 'www.gaibandha.gov.bd'),
(58, 7, 'Thakurgaon', 'ঠাকুরগাঁও', '26.0336945', '88.4616834', 'www.thakurgaon.gov.bd'),
(59, 7, 'Rangpur', 'রংপুর', '25.7558096', '89.244462', 'www.rangpur.gov.bd'),
(60, 7, 'Kurigram', 'কুড়িগ্রাম', '25.805445', '89.636174', 'www.kurigram.gov.bd'),
(61, 8, 'Sherpur', 'শেরপুর', '25.0204933', '90.0152966', 'www.sherpur.gov.bd'),
(62, 8, 'Mymensingh', 'ময়মনসিংহ', '24.7465670', '90.4072093', 'www.mymensingh.gov.bd'),
(63, 8, 'Jamalpur', 'জামালপুর', '24.937533', '89.937775', 'www.jamalpur.gov.bd'),
(64, 8, 'Netrokona', 'নেত্রকোণা', '24.870955', '90.727887', 'www.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(1) NOT NULL,
  `div_en_name` varchar(25) NOT NULL,
  `div_bn_name` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `div_en_name`, `div_bn_name`, `url`) VALUES
(1, 'Chattagram', 'চট্টগ্রাম', 'www.chittagongdiv.gov.bd'),
(2, 'Rajshahi', 'রাজশাহী', 'www.rajshahidiv.gov.bd'),
(3, 'Khulna', 'খুলনা', 'www.khulnadiv.gov.bd'),
(4, 'Barisal', 'বরিশাল', 'www.barisaldiv.gov.bd'),
(5, 'Sylhet', 'সিলেট', 'www.sylhetdiv.gov.bd'),
(6, 'Dhaka', 'ঢাকা', 'www.dhakadiv.gov.bd'),
(7, 'Rangpur', 'রংপুর', 'www.rangpurdiv.gov.bd'),
(8, 'Mymensingh', 'ময়মনসিংহ', 'www.mymensinghdiv.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `fls_users`
--

CREATE TABLE `fls_users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(55) DEFAULT NULL,
  `user_pass` varchar(55) DEFAULT NULL,
  `otp` varchar(10) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `phone_no` varchar(15) NOT NULL,
  `nid` int(20) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `Vibag_address` varchar(100) DEFAULT '1',
  `zilla_address` varchar(100) DEFAULT '1',
  `upzilla_address` varchar(100) DEFAULT '1',
  `aponar_boys` int(3) NOT NULL,
  `your_sex` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `fmaily_members` int(2) NOT NULL,
  `bikolp_pesha` varchar(100) NOT NULL,
  `educational_qualification` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `user_dregination` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  `updates` datetime(6) DEFAULT NULL ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fls_users`
--

INSERT INTO `fls_users` (`user_id`, `user_name`, `user_pass`, `otp`, `name`, `phone_no`, `nid`, `address_1`, `Vibag_address`, `zilla_address`, `upzilla_address`, `aponar_boys`, `your_sex`, `marital_status`, `fmaily_members`, `bikolp_pesha`, `educational_qualification`, `profile_pic`, `user_dregination`, `status`, `updates`) VALUES
(1, 'tanvir', 'admin123', '', 'Tanvir Hasan', '018436405545', 123456, 'Dhaka, Tangail', '1', '1', '1', 30, 'পুরুষ', 'বিবাহিত', 6, '', '', 'image-removebg-preview (12).png', 'Software Engineer', 1, '2023-12-22 18:11:59.968992'),
(3, 'wakil', '1234', '', 'Tanvir Hasan', '', 0, '', '', '', '', 0, '', '', 0, '', '', 'imran.png', 'test', 1, '2023-11-29 02:13:36.725389'),
(6, '01843640517', '123456', '2660', 'Md Tanvir Hasan', '01843640517', 654285654, 'Nutun Bazar', '6', '44', '336', 252, 'পুরুষ', 'বিধবা', 5, 'Enginner', 'Bsc in CSe', 'Cap22ture.JPG', '', 0, '2023-12-23 11:22:16.189097'),
(7, '12345', '12345', '', 'TANVIR HASAN', '01729789114', 0, '', '6', '44', '336', 0, 'পুরুষ', 'বিবাহিত', 0, 'VCBCV', '', 'sdfsdfas.png', '', 0, '2023-12-01 14:28:45.732631'),
(9, 'tuba', '123', '', 'Tuba', '', 0, '', '0', '0', '0', 0, '', '', 0, '', '', '', '', 0, '2023-12-21 11:20:30.050151'),
(12, '01843640518', NULL, '6367', NULL, '', 0, '', '1', '1', '1', 0, '', '', 0, '', '', '', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fuleruttso_18`
--

CREATE TABLE `fuleruttso_18` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `udbider_name` varchar(100) NOT NULL,
  `somoykal` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `flon_box` varchar(255) NOT NULL,
  `folon_ful_retu` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuleruttso_18`
--

INSERT INTO `fuleruttso_18` (`id`, `user_id`, `udbider_name`, `somoykal`, `location`, `flon_box`, `folon_ful_retu`, `lastupdated`) VALUES
(1, 6, '', 'sdfs', 'sdf', 'sdf', 'sdsdfsd', '2023-12-24 05:38:25'),
(2, 6, 'সূর্যমুখী', 'sdf', 'sdf', 'sdfsd', 'fsdf', '2023-12-24 05:38:25'),
(3, 6, 'ধোনে', 'fsdfsd', 'dfsd', 'fsdf', 'sdfsdfs', '2023-12-24 05:38:25'),
(4, 6, 'কালোজিরা', 'dsfsd', 'sdfs', 'sdfsd', 'fsdf', '2023-12-24 05:38:25'),
(5, 6, 'লিচু', 'fdfsdf', '', '', '', '2023-12-24 05:38:25'),
(6, 6, 'রাবার', '', '', '', '', '2023-12-24 05:38:25'),
(7, 6, 'সুন্দরবন-১', '', '', '', '', '2023-12-24 05:38:25'),
(8, 6, 'সুন্দরবন-২', '', '', '', '', '2023-12-24 05:38:25'),
(9, 6, 'সুন্দরবন-৩', '', '', '', '', '2023-12-24 05:38:25'),
(10, 6, 'খেসারি', '', '', '', '', '2023-12-24 05:38:25'),
(11, 6, 'ভাঙ্গি', '', '', '', '', '2023-12-24 05:38:25'),
(12, 6, 'তরমুজ', '', '', '', '', '2023-12-24 05:38:25'),
(13, 6, 'ধৈঞ্চা', '', '', '', '', '2023-12-24 05:38:25'),
(14, 6, 'বরই', '', '', '', '', '2023-12-24 05:38:25'),
(15, 6, 'অন্যান্য', '', '', '', '', '2023-12-24 05:38:25'),
(16, 6, 'সুন্দরবন অন্যান্য', '', '', '', '', '2023-12-24 05:38:25'),
(17, 1, 'সরিষা ', '', '', '', '', '2023-12-24 05:38:25'),
(18, 1, 'সূর্যমুখী', '', '', '', '', '2023-12-24 05:38:25'),
(19, 1, 'ধোনে', '', '', '', '', '2023-12-24 05:38:25'),
(20, 1, 'কালোজিরা', '', '', '', '', '2023-12-24 05:38:25'),
(21, 1, 'লিচু', '', '', '', '', '2023-12-24 05:38:25'),
(22, 1, 'রাবার', '', '', '', '', '2023-12-24 05:38:25'),
(23, 1, 'সুন্দরবন-১', '', '', '', '', '2023-12-24 05:38:25'),
(24, 1, 'সুন্দরবন-২', '', '', '', '', '2023-12-24 05:38:25'),
(25, 1, 'সুন্দরবন-৩', '', '', '', '', '2023-12-24 05:38:25'),
(26, 1, 'খেসারি', '', '', '', '', '2023-12-24 05:38:25'),
(27, 1, 'ভাঙ্গি', '', '', '', '', '2023-12-24 05:38:25'),
(28, 1, 'তরমুজ', '', '', '', '', '2023-12-24 05:38:25'),
(29, 1, 'ধৈঞ্চা', '', '', '', '', '2023-12-24 05:38:25'),
(30, 1, 'বরই', '', '', '', '', '2023-12-24 05:38:25'),
(31, 1, 'অন্যান্য', '', '', '', '', '2023-12-24 05:38:25'),
(32, 1, 'সুন্দরবন অন্যান্য', '', '', '', '', '2023-12-24 05:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `khamerer_rug_13`
--

CREATE TABLE `khamerer_rug_13` (
  `id` int(10) NOT NULL,
  `user_id` int(155) NOT NULL,
  `ruger_name` varchar(255) NOT NULL,
  `box_sokha` int(10) NOT NULL,
  `lokkhon` varchar(255) NOT NULL,
  `max_akromon_mas` varchar(255) NOT NULL,
  `mini_akromon_mas` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khamerer_rug_13`
--

INSERT INTO `khamerer_rug_13` (`id`, `user_id`, `ruger_name`, `box_sokha`, `lokkhon`, `max_akromon_mas`, `mini_akromon_mas`, `lastupdated`) VALUES
(1, 6, 'ইউরোপীয় ফাউল ব্রুড ', 45, 'sdf', '2023-02', '2023-02', '2023-12-24 05:37:10'),
(2, 6, ' আমেরিকান ফাউল ব্রুড', 78, 'sdfsdf', '2023-03', '2023-02', '2023-12-24 05:37:10'),
(3, 6, 'থলি ব্রুড', 0, 'sd', '2023-02', '', '2023-12-24 05:37:10'),
(4, 6, 'চক ব্রুড', 0, 'sdf', '', '', '2023-12-24 05:37:10'),
(5, 6, 'নসেমা', 0, '', '', '', '2023-12-24 05:37:10'),
(6, 6, 'আমাশয়', 0, '', '', '', '2023-12-24 05:37:10'),
(7, 6, 'ভাইরাস', 0, '', '', '', '2023-12-24 05:37:10'),
(8, 6, 'অন্যান্য', 0, '', '', '', '2023-12-24 05:37:10'),
(9, 6, 'কোন ধারনা নেই', 0, '', '', '', '2023-12-24 05:37:10'),
(10, 1, 'ইউরোপীয় ফাউল ব্রুড ', 0, '', '', '', '2023-12-24 05:37:10'),
(11, 1, ' আমেরিকান ফাউল ব্রুড', 0, '', '', '', '2023-12-24 05:37:10'),
(12, 1, 'থলি ব্রুড', 0, '', '', '', '2023-12-24 05:37:10'),
(13, 1, 'চক ব্রুড', 0, '', '', '', '2023-12-24 05:37:10'),
(14, 1, 'নসেমা', 0, '', '', '', '2023-12-24 05:37:10'),
(15, 1, 'আমাশয়', 0, '', '', '', '2023-12-24 05:37:10'),
(16, 1, 'ভাইরাস', 0, '', '', '', '2023-12-24 05:37:10'),
(17, 1, 'অন্যান্য', 0, '', '', '', '2023-12-24 05:37:10'),
(18, 1, 'কোন ধারনা নেই', 0, '', '', '', '2023-12-24 05:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `kitpotung_porilokhito_12`
--

CREATE TABLE `kitpotung_porilokhito_12` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `kitpotoner_name` varchar(155) NOT NULL,
  `box_sokha` int(10) NOT NULL,
  `lokkhon` varchar(255) NOT NULL,
  `max_akromon_mas` varchar(500) NOT NULL,
  `mini_akromon_mas` varchar(500) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kitpotung_porilokhito_12`
--

INSERT INTO `kitpotung_porilokhito_12` (`id`, `user_id`, `kitpotoner_name`, `box_sokha`, `lokkhon`, `max_akromon_mas`, `mini_akromon_mas`, `lastupdated`) VALUES
(1, 6, 'ভারোয়া মাইট', 100, 'sdfsdfsd', '2023-08', '2023-12', '2023-12-24 05:36:43'),
(2, 6, 'ট্রপিলাইলাপস মাইট', 100, 'sdfasdfdsfsdfs', '202dsfsdf3-06', '2023-02', '2023-12-24 05:36:43'),
(3, 6, 'শ্বাসনালীর মাইট', 250, 'asdfasfsdfsd', '2023-06', '2023-09', '2023-12-24 05:36:43'),
(4, 6, 'মোউচাক বিটল পোকা', 300, 'sdfassdfsd', '2023-12', '2023-12', '2023-12-24 05:36:43'),
(5, 6, 'মোমের মথ', 47, 'sdfasdfsdfsd', '2023-12', '2023-12', '2023-12-24 05:36:43'),
(6, 6, 'ভীমরুল', 41, 'test', '2023-01', '2023-06', '2023-12-24 05:36:43'),
(7, 6, 'পিঁপড়া', 47, 'sdfsadsdf ', '2023-07', '2023-03', '2023-12-24 05:36:43'),
(8, 6, 'পাখি', 48, 'sdfsadsdfsdf ', '2023-06', '2023-07', '2023-12-24 05:36:43'),
(9, 6, 'অন্যান্য', 57, 'sdafsadsdfsdf ', '2023-07', '2023-03', '2023-12-24 05:36:43'),
(10, 6, 'ব্রাউলা ফ্লাই', 41, 'fasdsdsdf  ', '2023-11', '2023-06', '2023-12-24 05:36:43'),
(11, 6, 'কোন ধারনা নেই', 656, 'dfasdfassdfsdfsd  ', '2023-06', '2023-04', '2023-12-24 05:36:43'),
(12, 1, 'ভারোয়া মাইট', 0, '', '', '', '2023-12-24 06:10:15'),
(13, 1, 'ট্রপিলাইলাপস মাইট', 155, '', '', '', '2023-12-24 06:10:25'),
(14, 1, 'শ্বাসনালীর মাইট', 0, '', '', '', '2023-12-24 06:10:15'),
(15, 1, 'মোউচাক বিটল পোকা', 0, '', '', '', '2023-12-24 06:10:15'),
(16, 1, 'মোমের মথ', 0, '', '', '', '2023-12-24 06:10:15'),
(17, 1, 'ভীমরুল', 0, '', '', '', '2023-12-24 06:10:15'),
(18, 1, 'পিঁপড়া', 0, '', '', '', '2023-12-24 06:10:15'),
(19, 1, 'পাখি', 0, '', '', '', '2023-12-24 06:10:15'),
(20, 1, 'অন্যান্য', 0, '', '', '', '2023-12-24 06:10:15'),
(21, 1, 'ব্রাউলা ফ্লাই', 0, '', '', '', '2023-12-24 06:10:15'),
(22, 1, 'কোন ধারনা নেই', 0, '', '', '', '2023-12-24 06:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `ovaber_somoy_21`
--

CREATE TABLE `ovaber_somoy_21` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `fid_sorborho` varchar(255) NOT NULL,
  `poriman_box` varchar(255) NOT NULL,
  `somoy_month` varchar(255) NOT NULL,
  `cost_taka` varchar(111) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ovaber_somoy_21`
--

INSERT INTO `ovaber_somoy_21` (`id`, `user_id`, `fid_sorborho`, `poriman_box`, `somoy_month`, `cost_taka`, `lastupdated`) VALUES
(1, 6, 'চিনি', 'Tanvir', 'fsdfsd', '  sdf ', '2023-12-24 05:38:38'),
(2, 6, 'কত্রিম পরাগ', 'sdfsddsfsd', 'sdf', ' sdf ', '2023-12-24 05:38:38'),
(3, 6, 'কত্রিম খাদ্য', 'fsdfdfsdf', 'fsdf', ' fsd ', '2023-12-24 05:38:38'),
(4, 6, 'অন্যান্য', 'sdfsdsfsdf', 'fsdd', ' sdfsdf ', '2023-12-24 05:38:38'),
(5, 1, 'চিনি', '12', '', ' ', '2023-12-24 05:38:38'),
(6, 1, 'কত্রিম পরাগ', '', '', '', '2023-12-24 05:38:38'),
(7, 1, 'কত্রিম খাদ্য', '', '', '', '2023-12-24 05:38:38'),
(8, 1, 'অন্যান্য', '', '', '', '2023-12-24 05:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `paloner_jispotro_kenar_dukan_36`
--

CREATE TABLE `paloner_jispotro_kenar_dukan_36` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product` varchar(255) NOT NULL,
  `buy_cost` int(10) NOT NULL,
  `poriman_yearly` varchar(255) NOT NULL,
  `total_poriman` varchar(255) NOT NULL,
  `dukaner_name` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paloner_jispotro_kenar_dukan_36`
--

INSERT INTO `paloner_jispotro_kenar_dukan_36` (`id`, `user_id`, `product`, `buy_cost`, `poriman_yearly`, `total_poriman`, `dukaner_name`, `lastupdated`) VALUES
(1, 1, 'মৌমাছির বাক্স ', 33, '2', '100', '121', '2023-12-24 05:38:50'),
(2, 1, 'মৌমাছির পালনের (হাইভ টুল, বিব্রাশ, গ্লাভস, মুখোশ, ফ্রেম, হনেয় এক্সত্রাচতর ইত্যাদি)', 42, '1', '100', '121', '2023-12-24 05:38:50'),
(3, 1, 'মৌমাছির কলোনি', 42, '2', '11', '121', '2023-12-24 05:38:50'),
(4, 1, 'রানী', 10, '0', '111', '121', '2023-12-24 05:38:50'),
(5, 1, 'মৌমাছির খাদ্য', 10, '4', '122', '1221', '2023-12-24 05:38:50'),
(6, 1, 'মৌমাছির ওষধ', 10, '1', '112', '1122', '2023-12-24 05:38:50'),
(7, 6, 'মৌমাছির বাক্স ', 0, '', '', '', '2023-12-24 05:38:50'),
(8, 6, 'মৌমাছির পালনের (হাইভ টুল, বিব্রাশ, গ্লাভস, মুখোশ, ফ্রেম, হনেয় এক্সত্রাচতর ইত্যাদি)', 0, '', '', '', '2023-12-24 05:38:50'),
(9, 6, 'মৌমাছির কলোনি', 0, '', '', '', '2023-12-24 05:38:50'),
(10, 6, 'রানী', 0, '', '', '', '2023-12-24 05:38:50'),
(11, 6, 'মৌমাছির খাদ্য', 0, '', '', '', '2023-12-24 05:38:50'),
(12, 6, 'মৌমাছির ওষধ', 0, '', '', '', '2023-12-24 05:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `paloner_somsa_somadhan_26`
--

CREATE TABLE `paloner_somsa_somadhan_26` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `somsa` varchar(255) NOT NULL,
  `smomy_location` varchar(255) NOT NULL,
  `howtosolv` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paloner_somsa_somadhan_26`
--

INSERT INTO `paloner_somsa_somadhan_26` (`id`, `user_id`, `somsa`, `smomy_location`, `howtosolv`, `lastupdated`) VALUES
(1, 1, 'sdfsd', 'sdfsdfsdfsdf', 'sdfsdf', '2023-12-24 05:39:04'),
(2, 1, 'fsd', 'sdfsdfsd', 'sdfsdfsdf', '2023-12-24 05:39:04'),
(3, 1, 'sdfsd', 'sdfsdfsdfsd', 'sdfsdfsdf', '2023-12-24 05:39:04'),
(4, 1, 'dsf', 'sdfsdfsdf', 'dsfsdfsdfsd', '2023-12-24 05:39:04'),
(5, 1, 'fdf', 'dfsdfs0fsdfsdsdf', 'sdfsdfsdfsdf', '2023-12-24 05:39:04'),
(6, 1, 'fdfdfdf', 'sdfsdf', 'dsfsdfsdfsdfsdfd', '2023-12-24 05:39:04'),
(7, 6, '', '', '', '2023-12-24 05:39:04'),
(8, 6, '', '', '', '2023-12-24 05:39:04'),
(9, 6, '', '', '', '2023-12-24 05:39:04'),
(10, 6, '', '', '', '2023-12-24 05:39:04'),
(11, 6, '', '', '', '2023-12-24 05:39:04'),
(12, 6, '', '', '', '2023-12-24 05:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_info_17`
--

CREATE TABLE `product_info_17` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_services` varchar(255) NOT NULL,
  `box_ruselt` varchar(255) NOT NULL,
  `result_khamarer` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_info_17`
--

INSERT INTO `product_info_17` (`id`, `user_id`, `product_services`, `box_ruselt`, `result_khamarer`, `lastupdated`) VALUES
(1, 6, 'মধু ', '10', 'sdfs', '2023-12-24 05:39:14'),
(2, 6, 'পরাগ', 'sdf', 'sdf', '2023-12-24 05:39:14'),
(3, 6, 'রাজকীয় জেলি', 'fsdfs', 'sdfsd', '2023-12-24 05:39:14'),
(4, 6, 'মোম', 'sdfsdfsd', 'df', '2023-12-24 05:39:14'),
(5, 6, 'মৌমাছির বিষ', 'dfsdf', 'dfsfsd', '2023-12-24 05:39:14'),
(6, 6, 'প্রোপোলিস/মৌমাছির আঠা', 'dfs', 'fsdfsd', '2023-12-24 05:39:14'),
(7, 6, 'পরাগায়ন', 'sdfsd', 'tanvir hasan', '2023-12-24 05:39:14'),
(8, 6, 'অন্যান্য', 'fsdfsdfs', 'sdfsd', '2023-12-24 05:39:14'),
(9, 1, 'মধু ', '', '', '2023-12-24 05:39:14'),
(10, 1, 'পরাগ', '', '', '2023-12-24 05:39:14'),
(11, 1, 'রাজকীয় জেলি', '', '', '2023-12-24 05:39:14'),
(12, 1, 'মোম', '', '', '2023-12-24 05:39:14'),
(13, 1, 'মৌমাছির বিষ', '', '', '2023-12-24 05:39:14'),
(14, 1, 'প্রোপোলিস/মৌমাছির আঠা', '', '', '2023-12-24 05:39:14'),
(15, 1, 'পরাগায়ন', '', '', '2023-12-24 05:39:14'),
(16, 1, 'অন্যান্য', '', '', '2023-12-24 05:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `pruduct_sell_27`
--

CREATE TABLE `pruduct_sell_27` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_services` varchar(255) NOT NULL,
  `utpadon_khoroc` varchar(255) NOT NULL,
  `khucra_price` varchar(255) NOT NULL,
  `pakari_price` varchar(255) NOT NULL,
  `potasit_price` varchar(255) NOT NULL,
  `kreta_bekti` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pruduct_sell_27`
--

INSERT INTO `pruduct_sell_27` (`id`, `user_id`, `product_services`, `utpadon_khoroc`, `khucra_price`, `pakari_price`, `potasit_price`, `kreta_bekti`, `lastupdated`) VALUES
(1, 1, 'মধু ', 'dsfsdf', 'fsdfsdfsd', 'fsdfsdf', 'sdfsdfsd', 'fsdf', '2023-12-24 05:39:30'),
(2, 1, 'পরাগ', 'sdfsdf', 'sdfsdfsd', 'sdfsdfsdf', 'fsdfsdf', 'dfsdf', '2023-12-24 05:39:30'),
(3, 1, 'রাজকীয় জেলি', 'sdfsd', 'sdfsdf', 'sdfsdfsdf', 'fdsfds', 'fd', '2023-12-24 05:39:30'),
(4, 1, 'মোম', 'fsdf', 'dsfsdf', 'sdfsdfsdf', 'sdfsdfsd', 'dsfsdf', '2023-12-24 05:39:30'),
(5, 1, 'মৌমাছির বিষ', 'sdfsd', 'sdfsdf', 'sdfsdfsdf', 'dfsdfsdf', 'dsfsd', '2023-12-24 05:39:30'),
(6, 1, 'প্রোপোলিস/মৌমাছির আঠা', 'fsdf', 'fsdf', 'sdfsdfsd', 'fsdfsdfs', 'fdsf', '2023-12-24 05:39:30'),
(7, 1, 'পরাগায়ন', 'sdfsdf', 'fsdfsd', 'fsdfdsf', 'fsdfds', 'dsfsdfsd', '2023-12-24 05:39:30'),
(8, 1, 'অন্যান্য', 'sdfsdf', 'sdfsd', 'sdfsdf', 'sdfsdfsd', 'fdsfsdfsdf', '2023-12-24 05:39:30'),
(9, 6, 'মধু ', '', '', '', '', '', '2023-12-24 05:39:30'),
(10, 6, 'পরাগ', '', '', '', '', '', '2023-12-24 05:39:30'),
(11, 6, 'রাজকীয় জেলি', '', '', '', '', '', '2023-12-24 05:39:30'),
(12, 6, 'মোম', '', '', '', '', '', '2023-12-24 05:39:30'),
(13, 6, 'মৌমাছির বিষ', '', '', '', '', '', '2023-12-24 05:39:30'),
(14, 6, 'প্রোপোলিস/মৌমাছির আঠা', '', '', '', '', '', '2023-12-24 05:39:30'),
(15, 6, 'পরাগায়ন', '', '', '', '', '', '2023-12-24 05:39:30'),
(16, 6, 'অন্যান্য', '', '', '', '', '', '2023-12-24 05:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `ranir_poristhi_24`
--

CREATE TABLE `ranir_poristhi_24` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `somsa_somadan` varchar(255) NOT NULL,
  `somoykal` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ranir_poristhi_24`
--

INSERT INTO `ranir_poristhi_24` (`id`, `user_id`, `somsa_somadan`, `somoykal`, `location`, `lastupdated`) VALUES
(1, 1, 'sdf', 'fsd', 'sdff', '2023-12-24 05:39:40'),
(2, 1, 'dfsd', 'dfsd', 'dfdf', '2023-12-24 05:39:40'),
(3, 1, 'fsdf', 'sdfs', 's', '2023-12-24 05:39:40'),
(4, 1, 'sdf', 'sdf', 'fsdfsd', '2023-12-24 05:39:40'),
(5, 6, '', '', '', '2023-12-24 05:39:40'),
(6, 6, '', '', '', '2023-12-24 05:39:40'),
(7, 6, '', '', '', '2023-12-24 05:39:40'),
(8, 6, '', '', '', '2023-12-24 05:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `razar_poristi_25`
--

CREATE TABLE `razar_poristi_25` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `somsa_somadan` varchar(255) NOT NULL,
  `somoykal` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `razar_poristi_25`
--

INSERT INTO `razar_poristi_25` (`id`, `user_id`, `somsa_somadan`, `somoykal`, `location`, `lastupdated`) VALUES
(1, 1, 'dsfs', 'fsdfsdf', 'dsfsdf', '2023-12-24 05:39:50'),
(2, 1, 'fsdf', 'fsdf', 'dfsdf', '2023-12-24 05:39:50'),
(3, 1, 'fsdfs', 'sdfs', 'fdsfs', '2023-12-24 05:39:50'),
(4, 1, 'd0fsdfsdf', 'sdfsd', 'sdfsdf', '2023-12-24 05:39:50'),
(5, 6, '', '', '', '2023-12-24 05:39:50'),
(6, 6, '', '', '', '2023-12-24 05:39:50'),
(7, 6, '', '', '', '2023-12-24 05:39:50'),
(8, 6, '', '', '', '2023-12-24 05:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `rogerbebostha_20`
--

CREATE TABLE `rogerbebostha_20` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `rugername` varchar(255) NOT NULL,
  `roge_akrantu_mashi` varchar(255) NOT NULL,
  `niramoy_bikolp` varchar(255) NOT NULL,
  `cost_taka` varchar(100) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rogerbebostha_20`
--

INSERT INTO `rogerbebostha_20` (`id`, `user_id`, `rugername`, `roge_akrantu_mashi`, `niramoy_bikolp`, `cost_taka`, `lastupdated`) VALUES
(1, 6, 'ইউরোপীয় ফাউল ব্রুড ', 'SFDF', 'sdf', 'sdfsdf', '2023-12-24 05:40:03'),
(2, 6, ' আমেরিকান ফাউল ব্রুড', 'SDFSdsfsd', 'sdfs', 'sdfs', '2023-12-24 05:40:03'),
(3, 6, 'থলি ব্রুড', 'DFSDF', 'dfsd', 'f', '2023-12-24 05:40:03'),
(4, 6, 'চক ব্রুড', 'SDFSD', 'fsd', 'sdf', '2023-12-24 05:40:03'),
(5, 6, 'নসেমা', 'SDF', 'fsd', 'sdfsdf', '2023-12-24 05:40:03'),
(6, 6, 'আমাশয়', 'sdf', 'fsd', 'sdfs', '2023-12-24 05:40:03'),
(7, 6, 'ভাইরাস', 'sdfs', 'sdfsdf', 'fsdfsdf', '2023-12-24 05:40:03'),
(8, 6, 'অন্যান্য', 'sdfs', 'fsdf', 'sdfsdf', '2023-12-24 05:40:03'),
(9, 6, 'কোন ধারনা নেই', 'dfsd', 'sdfsdf', 'sdfsdfsdf', '2023-12-24 05:40:03'),
(10, 1, 'ইউরোপীয় ফাউল ব্রুড ', '', '', '', '2023-12-24 05:40:03'),
(11, 1, ' আমেরিকান ফাউল ব্রুড', '', '', '', '2023-12-24 05:40:03'),
(12, 1, 'থলি ব্রুড', '', '', '', '2023-12-24 05:40:03'),
(13, 1, 'চক ব্রুড', '', '', '', '2023-12-24 05:40:03'),
(14, 1, 'নসেমা', '', '', '', '2023-12-24 05:40:03'),
(15, 1, 'আমাশয়', '', '', '', '2023-12-24 05:40:03'),
(16, 1, 'ভাইরাস', '', '', '', '2023-12-24 05:40:03'),
(17, 1, 'অন্যান্য', '', '', '', '2023-12-24 05:40:03'),
(18, 1, 'কোন ধারনা নেই', '', '', '', '2023-12-24 05:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `traning_23`
--

CREATE TABLE `traning_23` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `training_subject` varchar(255) NOT NULL,
  `somoykal` varchar(255) NOT NULL,
  `traning_fram` varchar(255) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traning_23`
--

INSERT INTO `traning_23` (`id`, `user_id`, `training_subject`, `somoykal`, `traning_fram`, `lastupdated`) VALUES
(1, 6, 'sdafsdf', 'fsdfsd', 'sdfs', '2023-12-24 05:40:17'),
(2, 6, 'sdfsd', 'sdfsd', 'fsdf', '2023-12-24 05:40:17'),
(3, 6, 'sdfsd', 'sdfsdf', 'sdfsdfsdfsdfsd', '2023-12-24 05:40:17'),
(4, 1, '45', '', '', '2023-12-24 05:40:17'),
(5, 1, '20', '', '', '2023-12-24 05:40:17'),
(6, 1, '', '', '', '2023-12-24 05:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(3) NOT NULL,
  `district_id` int(2) NOT NULL,
  `up_en_name` varchar(25) NOT NULL,
  `up_bn_name` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `up_en_name`, `up_bn_name`, `url`) VALUES
(1, 1, 'Debidwar', 'দেবিদ্বার', 'debidwar.comilla.gov.bd'),
(2, 1, 'Barura', 'বরুড়া', 'barura.comilla.gov.bd'),
(3, 1, 'Brahmanpara', 'ব্রাহ্মণপাড়া', 'brahmanpara.comilla.gov.bd'),
(4, 1, 'Chandina', 'চান্দিনা', 'chandina.comilla.gov.bd'),
(5, 1, 'Chauddagram', 'চৌদ্দগ্রাম', 'chauddagram.comilla.gov.bd'),
(6, 1, 'Daudkandi', 'দাউদকান্দি', 'daudkandi.comilla.gov.bd'),
(7, 1, 'Homna', 'হোমনা', 'homna.comilla.gov.bd'),
(8, 1, 'Laksam', 'লাকসাম', 'laksam.comilla.gov.bd'),
(9, 1, 'Muradnagar', 'মুরাদনগর', 'muradnagar.comilla.gov.bd'),
(10, 1, 'Nangalkot', 'নাঙ্গলকোট', 'nangalkot.comilla.gov.bd'),
(11, 1, 'Comilla Sadar', 'কুমিল্লা সদর', 'comillasadar.comilla.gov.bd'),
(12, 1, 'Meghna', 'মেঘনা', 'meghna.comilla.gov.bd'),
(13, 1, 'Monohargonj', 'মনোহরগঞ্জ', 'monohargonj.comilla.gov.bd'),
(14, 1, 'Sadarsouth', 'সদর দক্ষিণ', 'sadarsouth.comilla.gov.bd'),
(15, 1, 'Titas', 'তিতাস', 'titas.comilla.gov.bd'),
(16, 1, 'Burichang', 'বুড়িচং', 'burichang.comilla.gov.bd'),
(17, 1, 'Lalmai', 'লালমাই', 'lalmai.comilla.gov.bd'),
(18, 2, 'Chhagalnaiya', 'ছাগলনাইয়া', 'chhagalnaiya.feni.gov.bd'),
(19, 2, 'Feni Sadar', 'ফেনী সদর', 'sadar.feni.gov.bd'),
(20, 2, 'Sonagazi', 'সোনাগাজী', 'sonagazi.feni.gov.bd'),
(21, 2, 'Fulgazi', 'ফুলগাজী', 'fulgazi.feni.gov.bd'),
(22, 2, 'Parshuram', 'পরশুরাম', 'parshuram.feni.gov.bd'),
(23, 2, 'Daganbhuiyan', 'দাগনভূঞা', 'daganbhuiyan.feni.gov.bd'),
(24, 3, 'Brahmanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর', 'sadar.brahmanbaria.gov.bd'),
(25, 3, 'Kasba', 'কসবা', 'kasba.brahmanbaria.gov.bd'),
(26, 3, 'Nasirnagar', 'নাসিরনগর', 'nasirnagar.brahmanbaria.gov.bd'),
(27, 3, 'Sarail', 'সরাইল', 'sarail.brahmanbaria.gov.bd'),
(28, 3, 'Ashuganj', 'আশুগঞ্জ', 'ashuganj.brahmanbaria.gov.bd'),
(29, 3, 'Akhaura', 'আখাউড়া', 'akhaura.brahmanbaria.gov.bd'),
(30, 3, 'Nabinagar', 'নবীনগর', 'nabinagar.brahmanbaria.gov.bd'),
(31, 3, 'Bancharampur', 'বাঞ্ছারামপুর', 'bancharampur.brahmanbaria.gov.bd'),
(32, 3, 'Bijoynagar', 'বিজয়নগর', 'bijoynagar.brahmanbaria.gov.bd    '),
(33, 4, 'Rangamati Sadar', 'রাঙ্গামাটি সদর', 'sadar.rangamati.gov.bd'),
(34, 4, 'Kaptai', 'কাপ্তাই', 'kaptai.rangamati.gov.bd'),
(35, 4, 'Kawkhali', 'কাউখালী', 'kawkhali.rangamati.gov.bd'),
(36, 4, 'Baghaichari', 'বাঘাইছড়ি', 'baghaichari.rangamati.gov.bd'),
(37, 4, 'Barkal', 'বরকল', 'barkal.rangamati.gov.bd'),
(38, 4, 'Langadu', 'লংগদু', 'langadu.rangamati.gov.bd'),
(39, 4, 'Rajasthali', 'রাজস্থলী', 'rajasthali.rangamati.gov.bd'),
(40, 4, 'Belaichari', 'বিলাইছড়ি', 'belaichari.rangamati.gov.bd'),
(41, 4, 'Juraichari', 'জুরাছড়ি', 'juraichari.rangamati.gov.bd'),
(42, 4, 'Naniarchar', 'নানিয়ারচর', 'naniarchar.rangamati.gov.bd'),
(43, 5, 'Noakhali Sadar', 'নোয়াখালী সদর', 'sadar.noakhali.gov.bd'),
(44, 5, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.noakhali.gov.bd'),
(45, 5, 'Begumganj', 'বেগমগঞ্জ', 'begumganj.noakhali.gov.bd'),
(46, 5, 'Hatia', 'হাতিয়া', 'hatia.noakhali.gov.bd'),
(47, 5, 'Subarnachar', 'সুবর্ণচর', 'subarnachar.noakhali.gov.bd'),
(48, 5, 'Kabirhat', 'কবিরহাট', 'kabirhat.noakhali.gov.bd'),
(49, 5, 'Senbug', 'সেনবাগ', 'senbug.noakhali.gov.bd'),
(50, 5, 'Chatkhil', 'চাটখিল', 'chatkhil.noakhali.gov.bd'),
(51, 5, 'Sonaimori', 'সোনাইমুড়ী', 'sonaimori.noakhali.gov.bd'),
(52, 6, 'Haimchar', 'হাইমচর', 'haimchar.chandpur.gov.bd'),
(53, 6, 'Kachua', 'কচুয়া', 'kachua.chandpur.gov.bd'),
(54, 6, 'Shahrasti', 'শাহরাস্তি	', 'shahrasti.chandpur.gov.bd'),
(55, 6, 'Chandpur Sadar', 'চাঁদপুর সদর', 'sadar.chandpur.gov.bd'),
(56, 6, 'Matlab South', 'মতলব দক্ষিণ', 'matlabsouth.chandpur.gov.bd'),
(57, 6, 'Hajiganj', 'হাজীগঞ্জ', 'hajiganj.chandpur.gov.bd'),
(58, 6, 'Matlab North', 'মতলব উত্তর', 'matlabnorth.chandpur.gov.bd'),
(59, 6, 'Faridgonj', 'ফরিদগঞ্জ', 'faridgonj.chandpur.gov.bd'),
(60, 7, 'Lakshmipur Sadar', 'লক্ষ্মীপুর সদর', 'sadar.lakshmipur.gov.bd'),
(61, 7, 'Kamalnagar', 'কমলনগর', 'kamalnagar.lakshmipur.gov.bd'),
(62, 7, 'Raipur', 'রায়পুর', 'raipur.lakshmipur.gov.bd'),
(63, 7, 'Ramgati', 'রামগতি', 'ramgati.lakshmipur.gov.bd'),
(64, 7, 'Ramganj', 'রামগঞ্জ', 'ramganj.lakshmipur.gov.bd'),
(65, 8, 'Rangunia', 'রাঙ্গুনিয়া', 'rangunia.chittagong.gov.bd'),
(66, 8, 'Sitakunda', 'সীতাকুন্ড', 'sitakunda.chittagong.gov.bd'),
(67, 8, 'Mirsharai', 'মীরসরাই', 'mirsharai.chittagong.gov.bd'),
(68, 8, 'Patiya', 'পটিয়া', 'patiya.chittagong.gov.bd'),
(69, 8, 'Sandwip', 'সন্দ্বীপ', 'sandwip.chittagong.gov.bd'),
(70, 8, 'Banshkhali', 'বাঁশখালী', 'banshkhali.chittagong.gov.bd'),
(71, 8, 'Boalkhali', 'বোয়ালখালী', 'boalkhali.chittagong.gov.bd'),
(72, 8, 'Anwara', 'আনোয়ারা', 'anwara.chittagong.gov.bd'),
(73, 8, 'Chandanaish', 'চন্দনাইশ', 'chandanaish.chittagong.gov.bd'),
(74, 8, 'Satkania', 'সাতকানিয়া', 'satkania.chittagong.gov.bd'),
(75, 8, 'Lohagara', 'লোহাগাড়া', 'lohagara.chittagong.gov.bd'),
(76, 8, 'Hathazari', 'হাটহাজারী', 'hathazari.chittagong.gov.bd'),
(77, 8, 'Fatikchhari', 'ফটিকছড়ি', 'fatikchhari.chittagong.gov.bd'),
(78, 8, 'Raozan', 'রাউজান', 'raozan.chittagong.gov.bd'),
(79, 8, 'Karnafuli', 'কর্ণফুলী', 'karnafuli.chittagong.gov.bd'),
(80, 9, 'Coxsbazar Sadar', 'কক্সবাজার সদর', 'sadar.coxsbazar.gov.bd'),
(81, 9, 'Chakaria', 'চকরিয়া', 'chakaria.coxsbazar.gov.bd'),
(82, 9, 'Kutubdia', 'কুতুবদিয়া', 'kutubdia.coxsbazar.gov.bd'),
(83, 9, 'Ukhiya', 'উখিয়া', 'ukhiya.coxsbazar.gov.bd'),
(84, 9, 'Moheshkhali', 'মহেশখালী', 'moheshkhali.coxsbazar.gov.bd'),
(85, 9, 'Pekua', 'পেকুয়া', 'pekua.coxsbazar.gov.bd'),
(86, 9, 'Ramu', 'রামু', 'ramu.coxsbazar.gov.bd'),
(87, 9, 'Teknaf', 'টেকনাফ', 'teknaf.coxsbazar.gov.bd'),
(88, 10, 'Khagrachhari Sadar', 'খাগড়াছড়ি সদর', 'sadar.khagrachhari.gov.bd'),
(89, 10, 'Dighinala', 'দিঘীনালা', 'dighinala.khagrachhari.gov.bd'),
(90, 10, 'Panchari', 'পানছড়ি', 'panchari.khagrachhari.gov.bd'),
(91, 10, 'Laxmichhari', 'লক্ষীছড়ি', 'laxmichhari.khagrachhari.gov.bd'),
(92, 10, 'Mohalchari', 'মহালছড়ি', 'mohalchari.khagrachhari.gov.bd'),
(93, 10, 'Manikchari', 'মানিকছড়ি', 'manikchari.khagrachhari.gov.bd'),
(94, 10, 'Ramgarh', 'রামগড়', 'ramgarh.khagrachhari.gov.bd'),
(95, 10, 'Matiranga', 'মাটিরাঙ্গা', 'matiranga.khagrachhari.gov.bd'),
(96, 10, 'Guimara', 'গুইমারা', 'guimara.khagrachhari.gov.bd'),
(97, 11, 'Bandarban Sadar', 'বান্দরবান সদর', 'sadar.bandarban.gov.bd'),
(98, 11, 'Alikadam', 'আলীকদম', 'alikadam.bandarban.gov.bd'),
(99, 11, 'Naikhongchhari', 'নাইক্ষ্যংছড়ি', 'naikhongchhari.bandarban.gov.bd'),
(100, 11, 'Rowangchhari', 'রোয়াংছড়ি', 'rowangchhari.bandarban.gov.bd'),
(101, 11, 'Lama', 'লামা', 'lama.bandarban.gov.bd'),
(102, 11, 'Ruma', 'রুমা', 'ruma.bandarban.gov.bd'),
(103, 11, 'Thanchi', 'থানচি', 'thanchi.bandarban.gov.bd'),
(104, 12, 'Belkuchi', 'বেলকুচি', 'belkuchi.sirajganj.gov.bd'),
(105, 12, 'Chauhali', 'চৌহালি', 'chauhali.sirajganj.gov.bd'),
(106, 12, 'Kamarkhand', 'কামারখন্দ', 'kamarkhand.sirajganj.gov.bd'),
(107, 12, 'Kazipur', 'কাজীপুর', 'kazipur.sirajganj.gov.bd'),
(108, 12, 'Raigonj', 'রায়গঞ্জ', 'raigonj.sirajganj.gov.bd'),
(109, 12, 'Shahjadpur', 'শাহজাদপুর', 'shahjadpur.sirajganj.gov.bd'),
(110, 12, 'Sirajganj Sadar', 'সিরাজগঞ্জ সদর', 'sirajganjsadar.sirajganj.gov.bd'),
(111, 12, 'Tarash', 'তাড়াশ', 'tarash.sirajganj.gov.bd'),
(112, 12, 'Ullapara', 'উল্লাপাড়া', 'ullapara.sirajganj.gov.bd'),
(113, 13, 'Sujanagar', 'সুজানগর', 'sujanagar.pabna.gov.bd'),
(114, 13, 'Ishurdi', 'ঈশ্বরদী', 'ishurdi.pabna.gov.bd'),
(115, 13, 'Bhangura', 'ভাঙ্গুড়া', 'bhangura.pabna.gov.bd'),
(116, 13, 'Pabna Sadar', 'পাবনা সদর', 'pabnasadar.pabna.gov.bd'),
(117, 13, 'Bera', 'বেড়া', 'bera.pabna.gov.bd'),
(118, 13, 'Atghoria', 'আটঘরিয়া', 'atghoria.pabna.gov.bd'),
(119, 13, 'Chatmohar', 'চাটমোহর', 'chatmohar.pabna.gov.bd'),
(120, 13, 'Santhia', 'সাঁথিয়া', 'santhia.pabna.gov.bd'),
(121, 13, 'Faridpur', 'ফরিদপুর', 'faridpur.pabna.gov.bd'),
(122, 14, 'Kahaloo', 'কাহালু', 'kahaloo.bogra.gov.bd'),
(123, 14, 'Bogra Sadar', 'বগুড়া সদর', 'sadar.bogra.gov.bd'),
(124, 14, 'Shariakandi', 'সারিয়াকান্দি', 'shariakandi.bogra.gov.bd'),
(125, 14, 'Shajahanpur', 'শাজাহানপুর', 'shajahanpur.bogra.gov.bd'),
(126, 14, 'Dupchanchia', 'দুপচাচিঁয়া', 'dupchanchia.bogra.gov.bd'),
(127, 14, 'Adamdighi', 'আদমদিঘি', 'adamdighi.bogra.gov.bd'),
(128, 14, 'Nondigram', 'নন্দিগ্রাম', 'nondigram.bogra.gov.bd'),
(129, 14, 'Sonatala', 'সোনাতলা', 'sonatala.bogra.gov.bd'),
(130, 14, 'Dhunot', 'ধুনট', 'dhunot.bogra.gov.bd'),
(131, 14, 'Gabtali', 'গাবতলী', 'gabtali.bogra.gov.bd'),
(132, 14, 'Sherpur', 'শেরপুর', 'sherpur.bogra.gov.bd'),
(133, 14, 'Shibganj', 'শিবগঞ্জ', 'shibganj.bogra.gov.bd'),
(134, 15, 'Paba', 'পবা', 'paba.rajshahi.gov.bd'),
(135, 15, 'Durgapur', 'দুর্গাপুর', 'durgapur.rajshahi.gov.bd'),
(136, 15, 'Mohonpur', 'মোহনপুর', 'mohonpur.rajshahi.gov.bd'),
(137, 15, 'Charghat', 'চারঘাট', 'charghat.rajshahi.gov.bd'),
(138, 15, 'Puthia', 'পুঠিয়া', 'puthia.rajshahi.gov.bd'),
(139, 15, 'Bagha', 'বাঘা', 'bagha.rajshahi.gov.bd'),
(140, 15, 'Godagari', 'গোদাগাড়ী', 'godagari.rajshahi.gov.bd'),
(141, 15, 'Tanore', 'তানোর', 'tanore.rajshahi.gov.bd'),
(142, 15, 'Bagmara', 'বাগমারা', 'bagmara.rajshahi.gov.bd'),
(143, 16, 'Natore Sadar', 'নাটোর সদর', 'natoresadar.natore.gov.bd'),
(144, 16, 'Singra', 'সিংড়া', 'singra.natore.gov.bd'),
(145, 16, 'Baraigram', 'বড়াইগ্রাম', 'baraigram.natore.gov.bd'),
(146, 16, 'Bagatipara', 'বাগাতিপাড়া', 'bagatipara.natore.gov.bd'),
(147, 16, 'Lalpur', 'লালপুর', 'lalpur.natore.gov.bd'),
(148, 16, 'Gurudaspur', 'গুরুদাসপুর', 'gurudaspur.natore.gov.bd'),
(149, 16, 'Naldanga', 'নলডাঙ্গা', 'naldanga.natore.gov.bd'),
(150, 17, 'Akkelpur', 'আক্কেলপুর', 'akkelpur.joypurhat.gov.bd'),
(151, 17, 'Kalai', 'কালাই', 'kalai.joypurhat.gov.bd'),
(152, 17, 'Khetlal', 'ক্ষেতলাল', 'khetlal.joypurhat.gov.bd'),
(153, 17, 'Panchbibi', 'পাঁচবিবি', 'panchbibi.joypurhat.gov.bd'),
(154, 17, 'Joypurhat Sadar', 'জয়পুরহাট সদর', 'joypurhatsadar.joypurhat.gov.bd'),
(155, 18, 'Chapainawabganj Sadar', 'চাঁপাইনবাবগঞ্জ সদর', 'chapainawabganjsadar.chapainawabganj.gov.bd'),
(156, 18, 'Gomostapur', 'গোমস্তাপুর', 'gomostapur.chapainawabganj.gov.bd'),
(157, 18, 'Nachol', 'নাচোল', 'nachol.chapainawabganj.gov.bd'),
(158, 18, 'Bholahat', 'ভোলাহাট', 'bholahat.chapainawabganj.gov.bd'),
(159, 18, 'Shibganj', 'শিবগঞ্জ', 'shibganj.chapainawabganj.gov.bd'),
(160, 19, 'Mohadevpur', 'মহাদেবপুর', 'mohadevpur.naogaon.gov.bd'),
(161, 19, 'Badalgachi', 'বদলগাছী', 'badalgachi.naogaon.gov.bd'),
(162, 19, 'Patnitala', 'পত্নিতলা', 'patnitala.naogaon.gov.bd'),
(163, 19, 'Dhamoirhat', 'ধামইরহাট', 'dhamoirhat.naogaon.gov.bd'),
(164, 19, 'Niamatpur', 'নিয়ামতপুর', 'niamatpur.naogaon.gov.bd'),
(165, 19, 'Manda', 'মান্দা', 'manda.naogaon.gov.bd'),
(166, 19, 'Atrai', 'আত্রাই', 'atrai.naogaon.gov.bd'),
(167, 19, 'Raninagar', 'রাণীনগর', 'raninagar.naogaon.gov.bd'),
(168, 19, 'Naogaon Sadar', 'নওগাঁ সদর', 'naogaonsadar.naogaon.gov.bd'),
(169, 19, 'Porsha', 'পোরশা', 'porsha.naogaon.gov.bd'),
(170, 19, 'Sapahar', 'সাপাহার', 'sapahar.naogaon.gov.bd'),
(171, 20, 'Manirampur', 'মণিরামপুর', 'manirampur.jessore.gov.bd'),
(172, 20, 'Abhaynagar', 'অভয়নগর', 'abhaynagar.jessore.gov.bd'),
(173, 20, 'Bagherpara', 'বাঘারপাড়া', 'bagherpara.jessore.gov.bd'),
(174, 20, 'Chougachha', 'চৌগাছা', 'chougachha.jessore.gov.bd'),
(175, 20, 'Jhikargacha', 'ঝিকরগাছা', 'jhikargacha.jessore.gov.bd'),
(176, 20, 'Keshabpur', 'কেশবপুর', 'keshabpur.jessore.gov.bd'),
(177, 20, 'Jessore Sadar', 'যশোর সদর', 'sadar.jessore.gov.bd'),
(178, 20, 'Sharsha', 'শার্শা', 'sharsha.jessore.gov.bd'),
(179, 21, 'Assasuni', 'আশাশুনি', 'assasuni.satkhira.gov.bd'),
(180, 21, 'Debhata', 'দেবহাটা', 'debhata.satkhira.gov.bd'),
(181, 21, 'Kalaroa', 'কলারোয়া', 'kalaroa.satkhira.gov.bd'),
(182, 21, 'Satkhira Sadar', 'সাতক্ষীরা সদর', 'satkhirasadar.satkhira.gov.bd'),
(183, 21, 'Shyamnagar', 'শ্যামনগর', 'shyamnagar.satkhira.gov.bd'),
(184, 21, 'Tala', 'তালা', 'tala.satkhira.gov.bd'),
(185, 21, 'Kaliganj', 'কালিগঞ্জ', 'kaliganj.satkhira.gov.bd'),
(186, 22, 'Mujibnagar', 'মুজিবনগর', 'mujibnagar.meherpur.gov.bd'),
(187, 22, 'Meherpur Sadar', 'মেহেরপুর সদর', 'meherpursadar.meherpur.gov.bd'),
(188, 22, 'Gangni', 'গাংনী', 'gangni.meherpur.gov.bd'),
(189, 23, 'Narail Sadar', 'নড়াইল সদর', 'narailsadar.narail.gov.bd'),
(190, 23, 'Lohagara', 'লোহাগড়া', 'lohagara.narail.gov.bd'),
(191, 23, 'Kalia', 'কালিয়া', 'kalia.narail.gov.bd'),
(192, 24, 'Chuadanga Sadar', 'চুয়াডাঙ্গা সদর', 'chuadangasadar.chuadanga.gov.bd'),
(193, 24, 'Alamdanga', 'আলমডাঙ্গা', 'alamdanga.chuadanga.gov.bd'),
(194, 24, 'Damurhuda', 'দামুড়হুদা', 'damurhuda.chuadanga.gov.bd'),
(195, 24, 'Jibannagar', 'জীবননগর', 'jibannagar.chuadanga.gov.bd'),
(196, 25, 'Kushtia Sadar', 'কুষ্টিয়া সদর', 'kushtiasadar.kushtia.gov.bd'),
(197, 25, 'Kumarkhali', 'কুমারখালী', 'kumarkhali.kushtia.gov.bd'),
(198, 25, 'Khoksa', 'খোকসা', 'khoksa.kushtia.gov.bd'),
(199, 25, 'Mirpur', 'মিরপুর', 'mirpurkushtia.kushtia.gov.bd'),
(200, 25, 'Daulatpur', 'দৌলতপুর', 'daulatpur.kushtia.gov.bd'),
(201, 25, 'Bheramara', 'ভেড়ামারা', 'bheramara.kushtia.gov.bd'),
(202, 26, 'Shalikha', 'শালিখা', 'shalikha.magura.gov.bd'),
(203, 26, 'Sreepur', 'শ্রীপুর', 'sreepur.magura.gov.bd'),
(204, 26, 'Magura Sadar', 'মাগুরা সদর', 'magurasadar.magura.gov.bd'),
(205, 26, 'Mohammadpur', 'মহম্মদপুর', 'mohammadpur.magura.gov.bd'),
(206, 27, 'Paikgasa', 'পাইকগাছা', 'paikgasa.khulna.gov.bd'),
(207, 27, 'Fultola', 'ফুলতলা', 'fultola.khulna.gov.bd'),
(208, 27, 'Digholia', 'দিঘলিয়া', 'digholia.khulna.gov.bd'),
(209, 27, 'Rupsha', 'রূপসা', 'rupsha.khulna.gov.bd'),
(210, 27, 'Terokhada', 'তেরখাদা', 'terokhada.khulna.gov.bd'),
(211, 27, 'Dumuria', 'ডুমুরিয়া', 'dumuria.khulna.gov.bd'),
(212, 27, 'Botiaghata', 'বটিয়াঘাটা', 'botiaghata.khulna.gov.bd'),
(213, 27, 'Dakop', 'দাকোপ', 'dakop.khulna.gov.bd'),
(214, 27, 'Koyra', 'কয়রা', 'koyra.khulna.gov.bd'),
(215, 28, 'Fakirhat', 'ফকিরহাট', 'fakirhat.bagerhat.gov.bd'),
(216, 28, 'Bagerhat Sadar', 'বাগেরহাট সদর', 'sadar.bagerhat.gov.bd'),
(217, 28, 'Mollahat', 'মোল্লাহাট', 'mollahat.bagerhat.gov.bd'),
(218, 28, 'Sarankhola', 'শরণখোলা', 'sarankhola.bagerhat.gov.bd'),
(219, 28, 'Rampal', 'রামপাল', 'rampal.bagerhat.gov.bd'),
(220, 28, 'Morrelganj', 'মোড়েলগঞ্জ', 'morrelganj.bagerhat.gov.bd'),
(221, 28, 'Kachua', 'কচুয়া', 'kachua.bagerhat.gov.bd'),
(222, 28, 'Mongla', 'মোংলা', 'mongla.bagerhat.gov.bd'),
(223, 28, 'Chitalmari', 'চিতলমারী', 'chitalmari.bagerhat.gov.bd'),
(224, 29, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর', 'sadar.jhenaidah.gov.bd'),
(225, 29, 'Shailkupa', 'শৈলকুপা', 'shailkupa.jhenaidah.gov.bd'),
(226, 29, 'Harinakundu', 'হরিণাকুন্ডু', 'harinakundu.jhenaidah.gov.bd'),
(227, 29, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.jhenaidah.gov.bd'),
(228, 29, 'Kotchandpur', 'কোটচাঁদপুর', 'kotchandpur.jhenaidah.gov.bd'),
(229, 29, 'Moheshpur', 'মহেশপুর', 'moheshpur.jhenaidah.gov.bd'),
(230, 30, 'Jhalakathi Sadar', 'ঝালকাঠি সদর', 'sadar.jhalakathi.gov.bd'),
(231, 30, 'Kathalia', 'কাঠালিয়া', 'kathalia.jhalakathi.gov.bd'),
(232, 30, 'Nalchity', 'নলছিটি', 'nalchity.jhalakathi.gov.bd'),
(233, 30, 'Rajapur', 'রাজাপুর', 'rajapur.jhalakathi.gov.bd'),
(234, 31, 'Bauphal', 'বাউফল', 'bauphal.patuakhali.gov.bd'),
(235, 31, 'Patuakhali Sadar', 'পটুয়াখালী সদর', 'sadar.patuakhali.gov.bd'),
(236, 31, 'Dumki', 'দুমকি', 'dumki.patuakhali.gov.bd'),
(237, 31, 'Dashmina', 'দশমিনা', 'dashmina.patuakhali.gov.bd'),
(238, 31, 'Kalapara', 'কলাপাড়া', 'kalapara.patuakhali.gov.bd'),
(239, 31, 'Mirzaganj', 'মির্জাগঞ্জ', 'mirzaganj.patuakhali.gov.bd'),
(240, 31, 'Galachipa', 'গলাচিপা', 'galachipa.patuakhali.gov.bd'),
(241, 31, 'Rangabali', 'রাঙ্গাবালী', 'rangabali.patuakhali.gov.bd'),
(242, 32, 'Pirojpur Sadar', 'পিরোজপুর সদর', 'sadar.pirojpur.gov.bd'),
(243, 32, 'Nazirpur', 'নাজিরপুর', 'nazirpur.pirojpur.gov.bd'),
(244, 32, 'Kawkhali', 'কাউখালী', 'kawkhali.pirojpur.gov.bd'),
(245, 32, 'Zianagar', 'জিয়ানগর', 'zianagar.pirojpur.gov.bd'),
(246, 32, 'Bhandaria', 'ভান্ডারিয়া', 'bhandaria.pirojpur.gov.bd'),
(247, 32, 'Mathbaria', 'মঠবাড়ীয়া', 'mathbaria.pirojpur.gov.bd'),
(248, 32, 'Nesarabad', 'নেছারাবাদ', 'nesarabad.pirojpur.gov.bd'),
(249, 33, 'Barisal Sadar', 'বরিশাল সদর', 'barisalsadar.barisal.gov.bd'),
(250, 33, 'Bakerganj', 'বাকেরগঞ্জ', 'bakerganj.barisal.gov.bd'),
(251, 33, 'Babuganj', 'বাবুগঞ্জ', 'babuganj.barisal.gov.bd'),
(252, 33, 'Wazirpur', 'উজিরপুর', 'wazirpur.barisal.gov.bd'),
(253, 33, 'Banaripara', 'বানারীপাড়া', 'banaripara.barisal.gov.bd'),
(254, 33, 'Gournadi', 'গৌরনদী', 'gournadi.barisal.gov.bd'),
(255, 33, 'Agailjhara', 'আগৈলঝাড়া', 'agailjhara.barisal.gov.bd'),
(256, 33, 'Mehendiganj', 'মেহেন্দিগঞ্জ', 'mehendiganj.barisal.gov.bd'),
(257, 33, 'Muladi', 'মুলাদী', 'muladi.barisal.gov.bd'),
(258, 33, 'Hizla', 'হিজলা', 'hizla.barisal.gov.bd'),
(259, 34, 'Bhola Sadar', 'ভোলা সদর', 'sadar.bhola.gov.bd'),
(260, 34, 'Borhan Sddin', 'বোরহান উদ্দিন', 'borhanuddin.bhola.gov.bd'),
(261, 34, 'Charfesson', 'চরফ্যাশন', 'charfesson.bhola.gov.bd'),
(262, 34, 'Doulatkhan', 'দৌলতখান', 'doulatkhan.bhola.gov.bd'),
(263, 34, 'Monpura', 'মনপুরা', 'monpura.bhola.gov.bd'),
(264, 34, 'Tazumuddin', 'তজুমদ্দিন', 'tazumuddin.bhola.gov.bd'),
(265, 34, 'Lalmohan', 'লালমোহন', 'lalmohan.bhola.gov.bd'),
(266, 35, 'Amtali', 'আমতলী', 'amtali.barguna.gov.bd'),
(267, 35, 'Barguna Sadar', 'বরগুনা সদর', 'sadar.barguna.gov.bd'),
(268, 35, 'Betagi', 'বেতাগী', 'betagi.barguna.gov.bd'),
(269, 35, 'Bamna', 'বামনা', 'bamna.barguna.gov.bd'),
(270, 35, 'Pathorghata', 'পাথরঘাটা', 'pathorghata.barguna.gov.bd'),
(271, 35, 'Taltali', 'তালতলি', 'taltali.barguna.gov.bd'),
(272, 36, 'Balaganj', 'বালাগঞ্জ', 'balaganj.sylhet.gov.bd'),
(273, 36, 'Beanibazar', 'বিয়ানীবাজার', 'beanibazar.sylhet.gov.bd'),
(274, 36, 'Bishwanath', 'বিশ্বনাথ', 'bishwanath.sylhet.gov.bd'),
(275, 36, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.sylhet.gov.bd'),
(276, 36, 'Fenchuganj', 'ফেঞ্চুগঞ্জ', 'fenchuganj.sylhet.gov.bd'),
(277, 36, 'Golapganj', 'গোলাপগঞ্জ', 'golapganj.sylhet.gov.bd'),
(278, 36, 'Gowainghat', 'গোয়াইনঘাট', 'gowainghat.sylhet.gov.bd'),
(279, 36, 'Jaintiapur', 'জৈন্তাপুর', 'jaintiapur.sylhet.gov.bd'),
(280, 36, 'Kanaighat', 'কানাইঘাট', 'kanaighat.sylhet.gov.bd'),
(281, 36, 'Sylhet Sadar', 'সিলেট সদর', 'sylhetsadar.sylhet.gov.bd'),
(282, 36, 'Zakiganj', 'জকিগঞ্জ', 'zakiganj.sylhet.gov.bd'),
(283, 36, 'Dakshinsurma', 'দক্ষিণ সুরমা', 'dakshinsurma.sylhet.gov.bd'),
(284, 36, 'Osmaninagar', 'ওসমানী নগর', 'osmaninagar.sylhet.gov.bd'),
(285, 37, 'Barlekha', 'বড়লেখা', 'barlekha.moulvibazar.gov.bd'),
(286, 37, 'Kamolganj', 'কমলগঞ্জ', 'kamolganj.moulvibazar.gov.bd'),
(287, 37, 'Kulaura', 'কুলাউড়া', 'kulaura.moulvibazar.gov.bd'),
(288, 37, 'Moulvibazar Sadar', 'মৌলভীবাজার সদর', 'moulvibazarsadar.moulvibazar.gov.bd'),
(289, 37, 'Rajnagar', 'রাজনগর', 'rajnagar.moulvibazar.gov.bd'),
(290, 37, 'Sreemangal', 'শ্রীমঙ্গল', 'sreemangal.moulvibazar.gov.bd'),
(291, 37, 'Juri', 'জুড়ী', 'juri.moulvibazar.gov.bd'),
(292, 38, 'Nabiganj', 'নবীগঞ্জ', 'nabiganj.habiganj.gov.bd'),
(293, 38, 'Bahubal', 'বাহুবল', 'bahubal.habiganj.gov.bd'),
(294, 38, 'Ajmiriganj', 'আজমিরীগঞ্জ', 'ajmiriganj.habiganj.gov.bd'),
(295, 38, 'Baniachong', 'বানিয়াচং', 'baniachong.habiganj.gov.bd'),
(296, 38, 'Lakhai', 'লাখাই', 'lakhai.habiganj.gov.bd'),
(297, 38, 'Chunarughat', 'চুনারুঘাট', 'chunarughat.habiganj.gov.bd'),
(298, 38, 'Habiganj Sadar', 'হবিগঞ্জ সদর', 'habiganjsadar.habiganj.gov.bd'),
(299, 38, 'Madhabpur', 'মাধবপুর', 'madhabpur.habiganj.gov.bd'),
(300, 39, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর', 'sadar.sunamganj.gov.bd'),
(301, 39, 'South Sunamganj', 'দক্ষিণ সুনামগঞ্জ', 'southsunamganj.sunamganj.gov.bd'),
(302, 39, 'Bishwambarpur', 'বিশ্বম্ভরপুর', 'bishwambarpur.sunamganj.gov.bd'),
(303, 39, 'Chhatak', 'ছাতক', 'chhatak.sunamganj.gov.bd'),
(304, 39, 'Jagannathpur', 'জগন্নাথপুর', 'jagannathpur.sunamganj.gov.bd'),
(305, 39, 'Dowarabazar', 'দোয়ারাবাজার', 'dowarabazar.sunamganj.gov.bd'),
(306, 39, 'Tahirpur', 'তাহিরপুর', 'tahirpur.sunamganj.gov.bd'),
(307, 39, 'Dharmapasha', 'ধর্মপাশা', 'dharmapasha.sunamganj.gov.bd'),
(308, 39, 'Jamalganj', 'জামালগঞ্জ', 'jamalganj.sunamganj.gov.bd'),
(309, 39, 'Shalla', 'শাল্লা', 'shalla.sunamganj.gov.bd'),
(310, 39, 'Derai', 'দিরাই', 'derai.sunamganj.gov.bd'),
(311, 40, 'Belabo', 'বেলাবো', 'belabo.narsingdi.gov.bd'),
(312, 40, 'Monohardi', 'মনোহরদী', 'monohardi.narsingdi.gov.bd'),
(313, 40, 'Narsingdi Sadar', 'নরসিংদী সদর', 'narsingdisadar.narsingdi.gov.bd'),
(314, 40, 'Palash', 'পলাশ', 'palash.narsingdi.gov.bd'),
(315, 40, 'Raipura', 'রায়পুরা', 'raipura.narsingdi.gov.bd'),
(316, 40, 'Shibpur', 'শিবপুর', 'shibpur.narsingdi.gov.bd'),
(317, 41, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.gazipur.gov.bd'),
(318, 41, 'Kaliakair', 'কালিয়াকৈর', 'kaliakair.gazipur.gov.bd'),
(319, 41, 'Kapasia', 'কাপাসিয়া', 'kapasia.gazipur.gov.bd'),
(320, 41, 'Gazipur Sadar', 'গাজীপুর সদর', 'sadar.gazipur.gov.bd'),
(321, 41, 'Sreepur', 'শ্রীপুর', 'sreepur.gazipur.gov.bd'),
(322, 42, 'Shariatpur Sadar', 'শরিয়তপুর সদর', 'sadar.shariatpur.gov.bd'),
(323, 42, 'Naria', 'নড়িয়া', 'naria.shariatpur.gov.bd'),
(324, 42, 'Zajira', 'জাজিরা', 'zajira.shariatpur.gov.bd'),
(325, 42, 'Gosairhat', 'গোসাইরহাট', 'gosairhat.shariatpur.gov.bd'),
(326, 42, 'Bhedarganj', 'ভেদরগঞ্জ', 'bhedarganj.shariatpur.gov.bd'),
(327, 42, 'Damudya', 'ডামুড্যা', 'damudya.shariatpur.gov.bd'),
(328, 43, 'Araihazar', 'আড়াইহাজার', 'araihazar.narayanganj.gov.bd'),
(329, 43, 'Bandar', 'বন্দর', 'bandar.narayanganj.gov.bd'),
(330, 43, 'Narayanganj Sadar', 'নারায়নগঞ্জ সদর', 'narayanganjsadar.narayanganj.gov.bd'),
(331, 43, 'Rupganj', 'রূপগঞ্জ', 'rupganj.narayanganj.gov.bd'),
(332, 43, 'Sonargaon', 'সোনারগাঁ', 'sonargaon.narayanganj.gov.bd'),
(333, 44, 'Basail', 'বাসাইল', 'basail.tangail.gov.bd'),
(334, 44, 'Bhuapur', 'ভুয়াপুর', 'bhuapur.tangail.gov.bd'),
(335, 44, 'Delduar', 'দেলদুয়ার', 'delduar.tangail.gov.bd'),
(336, 44, 'Ghatail', 'ঘাটাইল', 'ghatail.tangail.gov.bd'),
(337, 44, 'Gopalpur', 'গোপালপুর', 'gopalpur.tangail.gov.bd'),
(338, 44, 'Madhupur', 'মধুপুর', 'madhupur.tangail.gov.bd'),
(339, 44, 'Mirzapur', 'মির্জাপুর', 'mirzapur.tangail.gov.bd'),
(340, 44, 'Nagarpur', 'নাগরপুর', 'nagarpur.tangail.gov.bd'),
(341, 44, 'Sakhipur', 'সখিপুর', 'sakhipur.tangail.gov.bd'),
(342, 44, 'Tangail Sadar', 'টাঙ্গাইল সদর', 'tangailsadar.tangail.gov.bd'),
(343, 44, 'Kalihati', 'কালিহাতী', 'kalihati.tangail.gov.bd'),
(344, 44, 'Dhanbari', 'ধনবাড়ী', 'dhanbari.tangail.gov.bd'),
(345, 45, 'Itna', 'ইটনা', 'itna.kishoreganj.gov.bd'),
(346, 45, 'Katiadi', 'কটিয়াদী', 'katiadi.kishoreganj.gov.bd'),
(347, 45, 'Bhairab', 'ভৈরব', 'bhairab.kishoreganj.gov.bd'),
(348, 45, 'Tarail', 'তাড়াইল', 'tarail.kishoreganj.gov.bd'),
(349, 45, 'Hossainpur', 'হোসেনপুর', 'hossainpur.kishoreganj.gov.bd'),
(350, 45, 'Pakundia', 'পাকুন্দিয়া', 'pakundia.kishoreganj.gov.bd'),
(351, 45, 'Kuliarchar', 'কুলিয়ারচর', 'kuliarchar.kishoreganj.gov.bd'),
(352, 45, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর', 'kishoreganjsadar.kishoreganj.gov.bd'),
(353, 45, 'Karimgonj', 'করিমগঞ্জ', 'karimgonj.kishoreganj.gov.bd'),
(354, 45, 'Bajitpur', 'বাজিতপুর', 'bajitpur.kishoreganj.gov.bd'),
(355, 45, 'Austagram', 'অষ্টগ্রাম', 'austagram.kishoreganj.gov.bd'),
(356, 45, 'Mithamoin', 'মিঠামইন', 'mithamoin.kishoreganj.gov.bd'),
(357, 45, 'Nikli', 'নিকলী', 'nikli.kishoreganj.gov.bd'),
(358, 46, 'Harirampur', 'হরিরামপুর', 'harirampur.manikganj.gov.bd'),
(359, 46, 'Saturia', 'সাটুরিয়া', 'saturia.manikganj.gov.bd'),
(360, 46, 'Manikganj Sadar', 'মানিকগঞ্জ সদর', 'sadar.manikganj.gov.bd'),
(361, 46, 'Gior', 'ঘিওর', 'gior.manikganj.gov.bd'),
(362, 46, 'Shibaloy', 'শিবালয়', 'shibaloy.manikganj.gov.bd'),
(363, 46, 'Doulatpur', 'দৌলতপুর', 'doulatpur.manikganj.gov.bd'),
(364, 46, 'Singiar', 'সিংগাইর', 'singiar.manikganj.gov.bd'),
(365, 47, 'Savar', 'সাভার', 'savar.dhaka.gov.bd'),
(366, 47, 'Dhamrai', 'ধামরাই', 'dhamrai.dhaka.gov.bd'),
(367, 47, 'Keraniganj', 'কেরাণীগঞ্জ', 'keraniganj.dhaka.gov.bd'),
(368, 47, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dhaka.gov.bd'),
(369, 47, 'Dohar', 'দোহার', 'dohar.dhaka.gov.bd'),
(370, 48, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর', 'sadar.munshiganj.gov.bd'),
(371, 48, 'Sreenagar', 'শ্রীনগর', 'sreenagar.munshiganj.gov.bd'),
(372, 48, 'Sirajdikhan', 'সিরাজদিখান', 'sirajdikhan.munshiganj.gov.bd'),
(373, 48, 'Louhajanj', 'লৌহজং', 'louhajanj.munshiganj.gov.bd'),
(374, 48, 'Gajaria', 'গজারিয়া', 'gajaria.munshiganj.gov.bd'),
(375, 48, 'Tongibari', 'টংগীবাড়ি', 'tongibari.munshiganj.gov.bd'),
(376, 49, 'Rajbari Sadar', 'রাজবাড়ী সদর', 'sadar.rajbari.gov.bd'),
(377, 49, 'Goalanda', 'গোয়ালন্দ', 'goalanda.rajbari.gov.bd'),
(378, 49, 'Pangsa', 'পাংশা', 'pangsa.rajbari.gov.bd'),
(379, 49, 'Baliakandi', 'বালিয়াকান্দি', 'baliakandi.rajbari.gov.bd'),
(380, 49, 'Kalukhali', 'কালুখালী', 'kalukhali.rajbari.gov.bd'),
(381, 50, 'Madaripur Sadar', 'মাদারীপুর সদর', 'sadar.madaripur.gov.bd'),
(382, 50, 'Shibchar', 'শিবচর', 'shibchar.madaripur.gov.bd'),
(383, 50, 'Kalkini', 'কালকিনি', 'kalkini.madaripur.gov.bd'),
(384, 50, 'Rajoir', 'রাজৈর', 'rajoir.madaripur.gov.bd'),
(385, 51, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর', 'sadar.gopalganj.gov.bd'),
(386, 51, 'Kashiani', 'কাশিয়ানী', 'kashiani.gopalganj.gov.bd'),
(387, 51, 'Tungipara', 'টুংগীপাড়া', 'tungipara.gopalganj.gov.bd'),
(388, 51, 'Kotalipara', 'কোটালীপাড়া', 'kotalipara.gopalganj.gov.bd'),
(389, 51, 'Muksudpur', 'মুকসুদপুর', 'muksudpur.gopalganj.gov.bd'),
(390, 52, 'Faridpur Sadar', 'ফরিদপুর সদর', 'sadar.faridpur.gov.bd'),
(391, 52, 'Alfadanga', 'আলফাডাঙ্গা', 'alfadanga.faridpur.gov.bd'),
(392, 52, 'Boalmari', 'বোয়ালমারী', 'boalmari.faridpur.gov.bd'),
(393, 52, 'Sadarpur', 'সদরপুর', 'sadarpur.faridpur.gov.bd'),
(394, 52, 'Nagarkanda', 'নগরকান্দা', 'nagarkanda.faridpur.gov.bd'),
(395, 52, 'Bhanga', 'ভাঙ্গা', 'bhanga.faridpur.gov.bd'),
(396, 52, 'Charbhadrasan', 'চরভদ্রাসন', 'charbhadrasan.faridpur.gov.bd'),
(397, 52, 'Madhukhali', 'মধুখালী', 'madhukhali.faridpur.gov.bd'),
(398, 52, 'Saltha', 'সালথা', 'saltha.faridpur.gov.bd'),
(399, 53, 'Panchagarh Sadar', 'পঞ্চগড় সদর', 'panchagarhsadar.panchagarh.gov.bd'),
(400, 53, 'Debiganj', 'দেবীগঞ্জ', 'debiganj.panchagarh.gov.bd'),
(401, 53, 'Boda', 'বোদা', 'boda.panchagarh.gov.bd'),
(402, 53, 'Atwari', 'আটোয়ারী', 'atwari.panchagarh.gov.bd'),
(403, 53, 'Tetulia', 'তেতুলিয়া', 'tetulia.panchagarh.gov.bd'),
(404, 54, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dinajpur.gov.bd'),
(405, 54, 'Birganj', 'বীরগঞ্জ', 'birganj.dinajpur.gov.bd'),
(406, 54, 'Ghoraghat', 'ঘোড়াঘাট', 'ghoraghat.dinajpur.gov.bd'),
(407, 54, 'Birampur', 'বিরামপুর', 'birampur.dinajpur.gov.bd'),
(408, 54, 'Parbatipur', 'পার্বতীপুর', 'parbatipur.dinajpur.gov.bd'),
(409, 54, 'Bochaganj', 'বোচাগঞ্জ', 'bochaganj.dinajpur.gov.bd'),
(410, 54, 'Kaharol', 'কাহারোল', 'kaharol.dinajpur.gov.bd'),
(411, 54, 'Fulbari', 'ফুলবাড়ী', 'fulbari.dinajpur.gov.bd'),
(412, 54, 'Dinajpur Sadar', 'দিনাজপুর সদর', 'dinajpursadar.dinajpur.gov.bd'),
(413, 54, 'Hakimpur', 'হাকিমপুর', 'hakimpur.dinajpur.gov.bd'),
(414, 54, 'Khansama', 'খানসামা', 'khansama.dinajpur.gov.bd'),
(415, 54, 'Birol', 'বিরল', 'birol.dinajpur.gov.bd'),
(416, 54, 'Chirirbandar', 'চিরিরবন্দর', 'chirirbandar.dinajpur.gov.bd'),
(417, 55, 'Lalmonirhat Sadar', 'লালমনিরহাট সদর', 'sadar.lalmonirhat.gov.bd'),
(418, 55, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.lalmonirhat.gov.bd'),
(419, 55, 'Hatibandha', 'হাতীবান্ধা', 'hatibandha.lalmonirhat.gov.bd'),
(420, 55, 'Patgram', 'পাটগ্রাম', 'patgram.lalmonirhat.gov.bd'),
(421, 55, 'Aditmari', 'আদিতমারী', 'aditmari.lalmonirhat.gov.bd'),
(422, 56, 'Syedpur', 'সৈয়দপুর', 'syedpur.nilphamari.gov.bd'),
(423, 56, 'Domar', 'ডোমার', 'domar.nilphamari.gov.bd'),
(424, 56, 'Dimla', 'ডিমলা', 'dimla.nilphamari.gov.bd'),
(425, 56, 'Jaldhaka', 'জলঢাকা', 'jaldhaka.nilphamari.gov.bd'),
(426, 56, 'Kishorganj', 'কিশোরগঞ্জ', 'kishorganj.nilphamari.gov.bd'),
(427, 56, 'Nilphamari Sadar', 'নীলফামারী সদর', 'nilphamarisadar.nilphamari.gov.bd'),
(428, 57, 'Sadullapur', 'সাদুল্লাপুর', 'sadullapur.gaibandha.gov.bd'),
(429, 57, 'Gaibandha Sadar', 'গাইবান্ধা সদর', 'gaibandhasadar.gaibandha.gov.bd'),
(430, 57, 'Palashbari', 'পলাশবাড়ী', 'palashbari.gaibandha.gov.bd'),
(431, 57, 'Saghata', 'সাঘাটা', 'saghata.gaibandha.gov.bd'),
(432, 57, 'Gobindaganj', 'গোবিন্দগঞ্জ', 'gobindaganj.gaibandha.gov.bd'),
(433, 57, 'Sundarganj', 'সুন্দরগঞ্জ', 'sundarganj.gaibandha.gov.bd'),
(434, 57, 'Phulchari', 'ফুলছড়ি', 'phulchari.gaibandha.gov.bd'),
(435, 58, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর', 'thakurgaonsadar.thakurgaon.gov.bd'),
(436, 58, 'Pirganj', 'পীরগঞ্জ', 'pirganj.thakurgaon.gov.bd'),
(437, 58, 'Ranisankail', 'রাণীশংকৈল', 'ranisankail.thakurgaon.gov.bd'),
(438, 58, 'Haripur', 'হরিপুর', 'haripur.thakurgaon.gov.bd'),
(439, 58, 'Baliadangi', 'বালিয়াডাঙ্গী', 'baliadangi.thakurgaon.gov.bd'),
(440, 59, 'Rangpur Sadar', 'রংপুর সদর', 'rangpursadar.rangpur.gov.bd'),
(441, 59, 'Gangachara', 'গংগাচড়া', 'gangachara.rangpur.gov.bd'),
(442, 59, 'Taragonj', 'তারাগঞ্জ', 'taragonj.rangpur.gov.bd'),
(443, 59, 'Badargonj', 'বদরগঞ্জ', 'badargonj.rangpur.gov.bd'),
(444, 59, 'Mithapukur', 'মিঠাপুকুর', 'mithapukur.rangpur.gov.bd'),
(445, 59, 'Pirgonj', 'পীরগঞ্জ', 'pirgonj.rangpur.gov.bd'),
(446, 59, 'Kaunia', 'কাউনিয়া', 'kaunia.rangpur.gov.bd'),
(447, 59, 'Pirgacha', 'পীরগাছা', 'pirgacha.rangpur.gov.bd'),
(448, 60, 'Kurigram Sadar', 'কুড়িগ্রাম সদর', 'kurigramsadar.kurigram.gov.bd'),
(449, 60, 'Nageshwari', 'নাগেশ্বরী', 'nageshwari.kurigram.gov.bd'),
(450, 60, 'Bhurungamari', 'ভুরুঙ্গামারী', 'bhurungamari.kurigram.gov.bd'),
(451, 60, 'Phulbari', 'ফুলবাড়ী', 'phulbari.kurigram.gov.bd'),
(452, 60, 'Rajarhat', 'রাজারহাট', 'rajarhat.kurigram.gov.bd'),
(453, 60, 'Ulipur', 'উলিপুর', 'ulipur.kurigram.gov.bd'),
(454, 60, 'Chilmari', 'চিলমারী', 'chilmari.kurigram.gov.bd'),
(455, 60, 'Rowmari', 'রৌমারী', 'rowmari.kurigram.gov.bd'),
(456, 60, 'Charrajibpur', 'চর রাজিবপুর', 'charrajibpur.kurigram.gov.bd'),
(457, 61, 'Sherpur Sadar', 'শেরপুর সদর', 'sherpursadar.sherpur.gov.bd'),
(458, 61, 'Nalitabari', 'নালিতাবাড়ী', 'nalitabari.sherpur.gov.bd'),
(459, 61, 'Sreebordi', 'শ্রীবরদী', 'sreebordi.sherpur.gov.bd'),
(460, 61, 'Nokla', 'নকলা', 'nokla.sherpur.gov.bd'),
(461, 61, 'Jhenaigati', 'ঝিনাইগাতী', 'jhenaigati.sherpur.gov.bd'),
(462, 62, 'Fulbaria', 'ফুলবাড়ীয়া', 'fulbaria.mymensingh.gov.bd'),
(463, 62, 'Trishal', 'ত্রিশাল', 'trishal.mymensingh.gov.bd'),
(464, 62, 'Bhaluka', 'ভালুকা', 'bhaluka.mymensingh.gov.bd'),
(465, 62, 'Muktagacha', 'মুক্তাগাছা', 'muktagacha.mymensingh.gov.bd'),
(466, 62, 'Mymensingh Sadar', 'ময়মনসিংহ সদর', 'mymensinghsadar.mymensingh.gov.bd'),
(467, 62, 'Dhobaura', 'ধোবাউড়া', 'dhobaura.mymensingh.gov.bd'),
(468, 62, 'Phulpur', 'ফুলপুর', 'phulpur.mymensingh.gov.bd'),
(469, 62, 'Haluaghat', 'হালুয়াঘাট', 'haluaghat.mymensingh.gov.bd'),
(470, 62, 'Gouripur', 'গৌরীপুর', 'gouripur.mymensingh.gov.bd'),
(471, 62, 'Gafargaon', 'গফরগাঁও', 'gafargaon.mymensingh.gov.bd'),
(472, 62, 'Iswarganj', 'ঈশ্বরগঞ্জ', 'iswarganj.mymensingh.gov.bd'),
(473, 62, 'Nandail', 'নান্দাইল', 'nandail.mymensingh.gov.bd'),
(474, 62, 'Tarakanda', 'তারাকান্দা', 'tarakanda.mymensingh.gov.bd'),
(475, 63, 'Jamalpur Sadar', 'জামালপুর সদর', 'jamalpursadar.jamalpur.gov.bd'),
(476, 63, 'Melandah', 'মেলান্দহ', 'melandah.jamalpur.gov.bd'),
(477, 63, 'Islampur', 'ইসলামপুর', 'islampur.jamalpur.gov.bd'),
(478, 63, 'Dewangonj', 'দেওয়ানগঞ্জ', 'dewangonj.jamalpur.gov.bd'),
(479, 63, 'Sarishabari', 'সরিষাবাড়ী', 'sarishabari.jamalpur.gov.bd'),
(480, 63, 'Madarganj', 'মাদারগঞ্জ', 'madarganj.jamalpur.gov.bd'),
(481, 63, 'Bokshiganj', 'বকশীগঞ্জ', 'bokshiganj.jamalpur.gov.bd'),
(482, 64, 'Barhatta', 'বারহাট্টা', 'barhatta.netrokona.gov.bd'),
(483, 64, 'Durgapur', 'দুর্গাপুর', 'durgapur.netrokona.gov.bd'),
(484, 64, 'Kendua', 'কেন্দুয়া', 'kendua.netrokona.gov.bd'),
(485, 64, 'Atpara', 'আটপাড়া', 'atpara.netrokona.gov.bd'),
(486, 64, 'Madan', 'মদন', 'madan.netrokona.gov.bd'),
(487, 64, 'Khaliajuri', 'খালিয়াজুরী', 'khaliajuri.netrokona.gov.bd'),
(488, 64, 'Kalmakanda', 'কলমাকান্দা', 'kalmakanda.netrokona.gov.bd'),
(489, 64, 'Mohongonj', 'মোহনগঞ্জ', 'mohongonj.netrokona.gov.bd'),
(490, 64, 'Purbadhala', 'পূর্বধলা', 'purbadhala.netrokona.gov.bd'),
(491, 64, 'Netrokona Sadar', 'নেত্রকোণা সদর', 'netrokonasadar.netrokona.gov.bd'),
(492, 9, 'Eidgaon', 'ঈদগাঁও', 'null'),
(493, 39, 'Madhyanagar', 'মধ্যনগর', 'null'),
(494, 50, 'Dasar', 'ডাসার', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminx`
--
ALTER TABLE `adminx`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `atem_to_kitpotog_19`
--
ALTER TABLE `atem_to_kitpotog_19`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`);

--
-- Indexes for table `ay_vey`
--
ALTER TABLE `ay_vey`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `box_size_11`
--
ALTER TABLE `box_size_11`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fls_users`
--
ALTER TABLE `fls_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `fuleruttso_18`
--
ALTER TABLE `fuleruttso_18`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `khamerer_rug_13`
--
ALTER TABLE `khamerer_rug_13`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kitpotung_porilokhito_12`
--
ALTER TABLE `kitpotung_porilokhito_12`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ovaber_somoy_21`
--
ALTER TABLE `ovaber_somoy_21`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user_id`);

--
-- Indexes for table `paloner_jispotro_kenar_dukan_36`
--
ALTER TABLE `paloner_jispotro_kenar_dukan_36`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `paloner_somsa_somadhan_26`
--
ALTER TABLE `paloner_somsa_somadhan_26`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product_info_17`
--
ALTER TABLE `product_info_17`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pruduct_sell_27`
--
ALTER TABLE `pruduct_sell_27`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ranir_poristhi_24`
--
ALTER TABLE `ranir_poristhi_24`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `razar_poristi_25`
--
ALTER TABLE `razar_poristi_25`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`);

--
-- Indexes for table `rogerbebostha_20`
--
ALTER TABLE `rogerbebostha_20`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `traning_23`
--
ALTER TABLE `traning_23`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminx`
--
ALTER TABLE `adminx`
  MODIFY `adminid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `atem_to_kitpotog_19`
--
ALTER TABLE `atem_to_kitpotog_19`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ay_vey`
--
ALTER TABLE `ay_vey`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `box_size_11`
--
ALTER TABLE `box_size_11`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fls_users`
--
ALTER TABLE `fls_users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fuleruttso_18`
--
ALTER TABLE `fuleruttso_18`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `khamerer_rug_13`
--
ALTER TABLE `khamerer_rug_13`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kitpotung_porilokhito_12`
--
ALTER TABLE `kitpotung_porilokhito_12`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ovaber_somoy_21`
--
ALTER TABLE `ovaber_somoy_21`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paloner_jispotro_kenar_dukan_36`
--
ALTER TABLE `paloner_jispotro_kenar_dukan_36`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paloner_somsa_somadhan_26`
--
ALTER TABLE `paloner_somsa_somadhan_26`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_info_17`
--
ALTER TABLE `product_info_17`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pruduct_sell_27`
--
ALTER TABLE `pruduct_sell_27`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ranir_poristhi_24`
--
ALTER TABLE `ranir_poristhi_24`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `razar_poristi_25`
--
ALTER TABLE `razar_poristi_25`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rogerbebostha_20`
--
ALTER TABLE `rogerbebostha_20`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `traning_23`
--
ALTER TABLE `traning_23`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=495;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
