-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 15, 2023 at 07:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelbookingwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cre`
--

CREATE TABLE `admin_cre` (
  `sr_no` int(11) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_cre`
--

INSERT INTO `admin_cre` (`sr_no`, `admin_name`, `admin_password`) VALUES
(1, 'mtmanh', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `sr_no` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `total_pay` int(11) NOT NULL,
  `room_no` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`sr_no`, `booking_id`, `room_name`, `price`, `total_pay`, `room_no`, `username`, `phonenum`, `address`) VALUES
(32, 44, 'Explorer&#039;s Suite, Mountain View, 2 Queens', 350, 350, '123', 'Naruto Alexander', '0336570393', 'Caugiay, Hanoi'),
(33, 45, 'Grand Suite, Executive lounge access, 1 King', 600, 1200, '5', 'Naruto Alexander', '0336570393', 'Caugiay, Hanoi'),
(34, 46, 'Explorer&#039;s Suite, Mountain View, 2 Queens', 350, 350, '8', 'Naruto Alexander', '0336570393', 'Caugiay, Hanoi'),
(35, 47, 'Spa Suite, Wellness Amenities, 1 King', 320, 640, '10', 'Lisa White', '555345678', '654 Maple Ave, LargeTown, USA'),
(36, 48, 'Honeymoon Suite, Private Jacuzzi, 1 King', 390, 390, '123', 'Lisa White', '555345678', '654 Maple Ave, LargeTown, USA'),
(37, 49, 'Classic Room, City View, 2 Singles', 450, 900, '15', 'Noah Kim', '556181921', '789 Birch Alley, OceanCity, USA'),
(38, 50, 'Spa Suite, Wellness Amenities, 1 King', 320, 320, '10', 'Charlotte Lee', '556161719', '123 Oak Path, MountainVille, USA'),
(39, 51, 'Grand Suite, City View, 1 King', 350, 700, '13', 'Charlotte Lee', '556161719', '123 Oak Path, MountainVille, USA'),
(40, 52, 'Deluxe Suite, Executive lounge access, 1 King', 500, 500, '1', 'Liam Rodriguez', '556141517', '345 Maple Blvd, RiverTown, USA'),
(41, 53, 'Honeymoon Suite, Private Jacuzzi, 1 King', 390, 780, '7', 'Liam Rodriguez', '556141517', '345 Maple Blvd, RiverTown, USA'),
(42, 54, 'Honeymoon Suite, Private Jacuzzi, 1 King', 390, 390, '7', 'Isabella Garcia', '556121315', '567 Pine St, Hillside, USA'),
(43, 55, 'Presidential Suite, Private Balcony, 1 King', 180, 180, '21', 'Isabella Garcia', '556121315', '567 Pine St, Hillside, USA'),
(44, 56, 'Penthouse Suite, Rooftop Terrace, 1 King', 500, 1000, '20', 'Oliver Martinez', '556101113', '987 Elm Ct, LakeView, USA'),
(45, 57, 'Explorer&#039;s Suite, Mountain View, 2 Queens', 350, 350, '8', 'Oliver Martinez', '556101113', '987 Elm Ct, LakeView, USA'),
(46, 58, 'Family Suite, 2 Queen Beds, Garden View', 280, 280, '14', 'Oliver Martinez', '556101113', '987 Elm Ct, LakeView, USA'),
(47, 59, 'Garden Bungalow, Patio, 2 Double Beds', 260, 260, '19', 'Mia Johnson', '556678913', '321 Cedar Way, StarCity, USA'),
(48, 60, 'Budget Room, Efficient Space, 1 Double', 200, 400, '9', 'Mia Johnson', '556678913', '321 Cedar Way, StarCity, USA'),
(49, 61, 'Garden Bungalow, Patio, 2 Double Beds', 260, 260, '19', 'Mia Johnson', '556678913', '321 Cedar Way, StarCity, USA'),
(50, 62, 'Presidential Suite, Private Balcony, 1 King', 180, 180, '21', 'Sophia Wilson', '556901233', '112 Maple Rd, SunTown, USA'),
(51, 63, 'Honeymoon Suite, Private Jacuzzi, 1 King', 390, 780, '7', 'Sophia Wilson', '556901233', '112 Maple Rd, SunTown, USA'),
(52, 64, 'Grand Suite, City View, 1 King', 350, 350, '13', 'Sophia Wilson', '556901233', '112 Maple Rd, SunTown, USA'),
(53, 65, 'Garden Bungalow, Patio, 2 Double Beds', 260, 520, '19', 'Ethan Brown', '5565678124', '214 Oak Ave, ForestCity, USA'),
(54, 66, 'Explorer&#039;s Suite, Mountain View, 2 Queens', 500, 500, '11', 'Ethan Brown', '5565678124', '214 Oak Ave, ForestCity, USA');

-- --------------------------------------------------------

--
-- Table structure for table `booking_order`
--

CREATE TABLE `booking_order` (
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `arrival` int(11) NOT NULL DEFAULT 0,
  `refund` int(11) DEFAULT NULL,
  `booking_status` varchar(100) NOT NULL DEFAULT 'pending',
  `order_id` varchar(150) NOT NULL,
  `trans_id` int(200) NOT NULL,
  `trans_amt` int(11) NOT NULL,
  `trans_status` varchar(100) NOT NULL DEFAULT 'pending',
  `trans_resp_msg` varchar(100) NOT NULL,
  `datentime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_order`
--

INSERT INTO `booking_order` (`booking_id`, `room_id`, `user_id`, `check_in`, `check_out`, `arrival`, `refund`, `booking_status`, `order_id`, `trans_id`, `trans_amt`, `trans_status`, `trans_resp_msg`, `datentime`) VALUES
(44, 8, 1, '2022-12-30', '2022-12-31', 1, 0, 'booked', '307', 38, 350, 'Success', 'Payment processed successfully', '2022-12-30'),
(45, 5, 1, '2023-11-18', '2023-11-20', 0, 1, 'cancelled', '576', 0, 1200, 'Success', 'Payment processed successfully', '2023-11-15'),
(46, 8, 1, '2023-11-29', '2023-11-30', 0, 0, 'booked', '480', 0, 350, 'Success', 'Payment processed successfully', '2023-11-15'),
(47, 10, 2, '2023-11-16', '2023-11-18', 0, 0, 'booked', '619', 0, 640, 'Success', 'Payment processed successfully', '2023-11-15'),
(48, 7, 2, '2023-11-19', '2023-11-20', 1, 0, 'booked', '152', 0, 390, 'Success', 'Payment processed successfully', '2023-11-15'),
(49, 15, 3, '2022-12-22', '2022-12-24', 0, 0, 'booked', '244', 0, 900, 'Success', 'Payment processed successfully', '2021-12-22'),
(50, 10, 4, '2023-11-30', '2023-12-01', 0, 0, 'booked', '586', 0, 320, 'Success', 'Payment processed successfully', '2023-11-15'),
(51, 13, 4, '2023-11-16', '2023-11-18', 0, 0, 'booked', '639', 0, 700, 'Success', 'Payment processed successfully', '2023-11-15'),
(52, 1, 5, '2023-11-18', '2023-11-19', 0, 0, 'booked', '276', 0, 500, 'Success', 'Payment processed successfully', '2023-11-15'),
(53, 7, 5, '2023-11-18', '2023-11-20', 0, 0, 'booked', '983', 0, 780, 'Success', 'Payment processed successfully', '2023-11-15'),
(54, 7, 6, '2023-11-16', '2023-11-17', 0, 0, 'booked', '842', 87, 390, 'Success', 'Payment processed successfully', '2023-11-15'),
(55, 21, 6, '2023-11-23', '2023-11-24', 0, 0, 'booked', '630', 880, 180, 'Success', 'Payment processed successfully', '2023-11-15'),
(56, 20, 7, '2023-11-15', '2023-11-17', 0, 0, 'booked', '172', 0, 1000, 'Success', 'Payment processed successfully', '2023-11-15'),
(57, 8, 7, '2023-11-24', '2023-11-25', 0, 0, 'booked', '649', 0, 350, 'Success', 'Payment processed successfully', '2023-11-15'),
(58, 14, 7, '2023-12-08', '2023-12-09', 0, 0, 'booked', '161', 0, 280, 'Success', 'Payment processed successfully', '2023-11-15'),
(59, 19, 8, '2023-11-27', '2023-11-28', 0, 0, 'booked', '996', 72, 260, 'Success', 'Payment processed successfully', '2023-11-15'),
(60, 9, 8, '2023-11-17', '2023-11-19', 0, 0, 'booked', '964', 0, 400, 'Success', 'Payment processed successfully', '2023-11-15'),
(61, 19, 8, '2023-12-09', '2023-12-10', 0, 0, 'booked', '932', 0, 260, 'Success', 'Payment processed successfully', '2023-11-15'),
(62, 21, 10, '2023-11-24', '2023-11-25', 0, 0, 'booked', '581', 0, 180, 'Success', 'Payment processed successfully', '2023-11-15'),
(63, 7, 10, '2023-12-01', '2023-12-03', 0, 0, 'booked', '58', 0, 780, 'Success', 'Payment processed successfully', '2023-11-15'),
(64, 13, 10, '2023-12-08', '2023-12-09', 0, 0, 'booked', '87', 0, 350, 'Success', 'Payment processed successfully', '2023-11-15'),
(65, 19, 11, '2023-11-20', '2023-11-22', 0, 0, 'booked', '694', 0, 520, 'Success', 'Payment processed successfully', '2023-11-15'),
(66, 11, 11, '2023-11-24', '2023-11-25', 0, 0, 'booked', '393', 0, 500, 'Success', 'Payment processed successfully', '2023-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`sr_no`, `image`) VALUES
(12, 'IMG_65914.png'),
(13, 'IMG_69534.png'),
(14, 'IMG_49823.png'),
(15, 'IMG_20599.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gmap` varchar(100) NOT NULL,
  `pn1` varchar(30) NOT NULL,
  `pn2` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `address`, `gmap`, `pn1`, `pn2`, `email`, `fb`, `insta`, `tw`, `iframe`) VALUES
(1, 'Đỗ Đức Dục, Mễ Trì, Từ Liêm, Hà Nội', 'https://maps.google.com/maps?ll=21.007864,105.782655', '0999999999', '', 'vuducthang212004@gmail.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.860533407463!2d105.78006392615015!3d21.0382657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab35488fdc83:0x2b790a01900d2f17!2zVmnhu4duIEPDtG5nIG5naOG7hyBUaMO0bmcgdGluLCDEkOG6oWkgaOG7jWMgUXXhu5FjIGdpYSBIw6AgTuG7mWk!5e0!3m2!1svi!2');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `icon`, `name`, `description`) VALUES
(7, 'IMG_82111.svg', 'Wifi', 'Wi-Fi miễn phí trong tất cả các phòng!'),
(8, 'IMG_82265.svg', 'Air conditioner', 'Điều hòa 2 chiều '),
(9, 'IMG_55799.svg', 'Television', 'Dịch vụ phát trực tuyến như Netflix\r\nTruyền hình cáp/vệ tinh\r\nMáy tính, \r\nThiết bị chơi điện tử'),
(11, 'IMG_99754.svg', 'Spa', '\r\nPhòng tắm nắng\r\nPhòng tập\r\nPhòng yoga\r\nSpa\r\nSpa/xông khô\r\nVườn\r\n'),
(12, 'IMG_25829.svg', 'Room Heater', 'Bàn là quần\r\nGiá treo quần áo\r\nMáy giặt\r\nLò sưởi\r\nMáy sấy quần áo\r\nBếp đầy đủ\r\nLò vi sóng\r\nXông khô'),
(13, 'IMG_41870.svg', 'Hygiene Plus', 'Được làm sạch theo hướng dẫn về y tế\r\nNước rửa tay và xà phòng được cung cấp\r\nSản phẩm làm sạch được sử dụng dựa trên hướng dẫn về y tế\r\nbác sĩ/y tá trực\r\nBăng niêm phong phòng dành cho khách sau khi vệ sinh\r\nbộ dụng cụ sơ cứu'),
(14, 'IMG_59437.svg', 'Airport transfer', 'Airport transfer available at additional charge. To request, check the box on the booking form just before the payment page');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`) VALUES
(18, 'Bedroom'),
(21, 'Balcony'),
(22, 'Kitchen'),
(24, 'City view'),
(25, 'Separate shower'),
(26, 'Executive lounge access');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `area` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `description` varchar(350) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `removed` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `area`, `price`, `quantity`, `adult`, `children`, `description`, `status`, `removed`) VALUES
(1, 'Deluxe Suite, Executive lounge access, 1 King', 200, 500, 50, 10, 2, 'Welcome to an experience where luxury meets comfort. Our Deluxe Suite is more than just a place to stay a haven designed for those who appreciate the finer things in life. With exclusive Executive Lounge access and a majestic king-sized bed, every element of your stay is crafted to deliver an unparalleled experience.', 1, 0),
(2, 'simple room', 200, 51, 57, 12, 2, 'abcd', 1, 1),
(5, 'Grand Suite, Executive lounge access, 1 King', 150, 600, 100, 10, 4, 'Step into a world of opulence and grandeur with our Grand Suite. This suite is not just a place to stay but a realm of luxury designed for discerning guests who seek an extraordinary experience. The suite comes with exclusive access to our Executive Lounge and a sumptuous king-sized bed, ensuring every moment of your stay is steeped in comfort and ', 1, 0),
(7, 'Honeymoon Suite, Private Jacuzzi, 1 King', 150, 390, 31, 10, 10, 'A romantic suite with a king-sized bed and a private jacuzzi, designed specifically for couples.', 1, 0),
(8, 'Explorer&#039;s Suite, Mountain View, 2 Queens', 180, 350, 20, 5, 3, 'Ideal for adventure seekers, this suite offers two queen beds and stunning mountain views.', 1, 0),
(9, 'Budget Room, Efficient Space, 1 Double', 220, 200, 5, 10, 5, 'An efficiently designed room with one double bed, catering to budget-conscious travelers.', 1, 0),
(10, 'Spa Suite, Wellness Amenities, 1 King', 250, 320, 20, 10, 2, 'A tranquil spa suite with a king-sized bed, featuring wellness amenities for a rejuvenating stay.', 1, 0),
(11, 'Explorer&#039;s Suite, Mountain View, 2 Queens', 200, 500, 4, 1, 2, 'Ideal for adventure seekers, this suite offers two queen beds and stunning mountain views.', 1, 0),
(12, 'Deluxe Suite, Executive Lounge Access, 1 King', 500, 300, 10, 2, 2, 'A luxurious suite with a king-sized bed and exclusive access to the Executive Lounge. Features include a spacious area, elegant furnishings, and premium amenities.', 1, 0),
(13, 'Grand Suite, City View, 1 King', 600, 350, 8, 2, 2, 'An opulent suite with panoramic city views, featuring a king-sized bed, sophisticated décor, and state-of-the-art amenities.', 1, 0),
(14, 'Family Suite, 2 Queen Beds, Garden View', 550, 280, 12, 4, 3, 'Perfect for families, this suite offers two queen beds, a beautiful garden view, and ample space for relaxation and comfort.', 1, 0),
(15, 'Classic Room, City View, 2 Singles', 700, 450, 5, 2, 2, 'The epitome of luxury, our Presidential Suite features a private balcony, a king-sized bed, and exquisite amenities for an unforgettable stay.', 1, 0),
(16, 'Junior Suite, 1 Queen Bed, City View', 400, 250, 15, 2, 1, 'A cozy and elegant suite with a queen bed, offering stunning views of the cityscape and modern comforts.', 1, 0),
(17, 'Ocean View Suite, Balcony, 1 King', 450, 320, 7, 2, 2, 'An enchanting suite with a king-sized bed, offering breathtaking ocean views from a private balcony. Ideal for a romantic getaway.', 1, 0),
(18, 'Urban Studio, Kitchenette, 1 Queen', 300, 200, 15, 2, 3, 'A modern, urban-inspired studio with a queen bed and a fully equipped kitchenette, perfect for extended stays or business trips.', 1, 0),
(19, 'Garden Bungalow, Patio, 2 Double Beds', 400, 260, 10, 4, 2, 'A serene garden bungalow with two double beds and a private patio, nestled in lush greenery for a peaceful retreat.', 1, 0),
(20, 'Penthouse Suite, Rooftop Terrace, 1 King', 750, 500, 4, 2, 2, 'The ultimate in luxury, our penthouse suite features a king-sized bed, a spacious rooftop terrace, and unparalleled amenities.', 1, 0),
(21, 'Presidential Suite, Private Balcony, 1 King', 350, 180, 20, 2, 1, 'A classic and comfortable room with two single beds, offering a stunning view of the city skyline.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_facilities`
--

CREATE TABLE `room_facilities` (
  `sr_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `facilities_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_facilities`
--

INSERT INTO `room_facilities` (`sr_no`, `room_id`, `facilities_id`) VALUES
(179, 5, 7),
(180, 5, 8),
(181, 5, 9),
(182, 5, 11),
(183, 5, 12),
(189, 8, 7),
(190, 8, 8),
(191, 8, 9),
(192, 8, 12),
(193, 8, 14),
(194, 7, 7),
(195, 7, 8),
(196, 7, 11),
(197, 7, 12),
(198, 7, 13),
(199, 9, 7),
(200, 9, 8),
(201, 9, 11),
(202, 9, 12),
(203, 9, 14),
(204, 10, 7),
(205, 10, 8),
(206, 10, 9),
(207, 10, 12),
(211, 14, 8),
(212, 14, 9),
(213, 14, 11),
(216, 16, 8),
(217, 16, 9),
(220, 20, 8),
(221, 20, 13),
(222, 19, 9),
(223, 19, 11),
(224, 18, 7),
(225, 18, 8),
(226, 18, 12),
(227, 13, 9),
(228, 13, 11),
(229, 12, 7),
(230, 12, 8),
(231, 12, 11),
(232, 12, 12),
(233, 12, 13),
(234, 11, 9),
(235, 11, 11),
(236, 11, 14),
(237, 1, 7),
(238, 1, 8),
(239, 1, 9),
(240, 1, 11),
(241, 1, 12),
(242, 1, 13),
(245, 21, 7),
(246, 21, 12),
(247, 15, 7),
(248, 15, 12);

-- --------------------------------------------------------

--
-- Table structure for table `room_features`
--

CREATE TABLE `room_features` (
  `sr_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `features_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_features`
--

INSERT INTO `room_features` (`sr_no`, `room_id`, `features_id`) VALUES
(134, 5, 18),
(135, 5, 21),
(136, 5, 22),
(140, 8, 18),
(141, 8, 21),
(142, 8, 24),
(143, 7, 18),
(144, 7, 21),
(145, 7, 22),
(146, 9, 18),
(147, 9, 21),
(148, 9, 22),
(149, 9, 24),
(150, 10, 18),
(151, 10, 21),
(152, 10, 24),
(153, 10, 26),
(158, 14, 18),
(159, 14, 21),
(160, 14, 22),
(161, 14, 25),
(162, 14, 26),
(166, 16, 21),
(167, 16, 26),
(170, 20, 18),
(171, 20, 25),
(172, 19, 21),
(173, 19, 22),
(174, 19, 24),
(175, 18, 18),
(176, 18, 21),
(177, 18, 25),
(178, 18, 26),
(179, 13, 18),
(180, 13, 22),
(181, 12, 21),
(182, 12, 22),
(183, 12, 25),
(184, 12, 26),
(185, 11, 18),
(186, 11, 24),
(187, 11, 25),
(188, 1, 18),
(189, 1, 21),
(190, 1, 24),
(191, 1, 26),
(195, 21, 18),
(196, 21, 25),
(197, 15, 22),
(198, 15, 25),
(199, 15, 26);

-- --------------------------------------------------------

--
-- Table structure for table `room_images`
--

CREATE TABLE `room_images` (
  `sr_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `thumb` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_images`
--

INSERT INTO `room_images` (`sr_no`, `room_id`, `image`, `thumb`) VALUES
(39, 7, 'IMG_13760.webp', 0),
(40, 7, 'IMG_48462.webp', 0),
(41, 1, 'IMG_64198.webp', 0),
(42, 1, 'IMG_23493.jpg', 0),
(44, 1, 'IMG_55216.jpg', 1),
(45, 1, 'IMG_98007.jpg', 0),
(46, 1, 'IMG_94099.jpg', 0),
(48, 5, 'IMG_44814.webp', 1),
(49, 5, 'IMG_67978.jpg', 0),
(50, 8, 'IMG_45746.webp', 1),
(51, 8, 'IMG_16866.webp', 0),
(52, 9, 'IMG_80684.jpg', 1),
(53, 9, 'IMG_59550.jpg', 0),
(58, 10, 'IMG_57178.webp', 0),
(59, 7, 'IMG_41010.jpg', 1),
(60, 11, 'IMG_25081.jpg', 1),
(63, 10, 'IMG_84393.jpg', 1),
(64, 21, 'IMG_31718.png', 0),
(65, 20, 'IMG_35137.webp', 0),
(66, 19, 'IMG_75160.webp', 0),
(67, 18, 'IMG_33152.webp', 1),
(68, 17, 'IMG_68148.webp', 1),
(69, 16, 'IMG_51080.png', 1),
(70, 13, 'IMG_72126.webp', 1),
(71, 12, 'IMG_98635.webp', 1),
(72, 11, 'IMG_90710.webp', 0),
(73, 5, 'IMG_35710.webp', 0),
(74, 7, 'IMG_74625.png', 0),
(75, 9, 'IMG_60733.webp', 0),
(76, 10, 'IMG_82560.webp', 0),
(77, 15, 'IMG_57692.png', 1),
(78, 14, 'IMG_65402.webp', 1),
(79, 14, 'IMG_35507.webp', 0),
(80, 21, 'IMG_12408.webp', 0),
(81, 21, 'IMG_52013.png', 1),
(82, 20, 'IMG_63475.png', 1),
(83, 19, 'IMG_27360.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sr_no` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(250) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sr_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'JW MARRIOT', 'Rising high above Hanoi new Central Business District and adjacent to Vietnam National Convention Center, JW Marriott Hotel Hanoi is an inspiring destination in the center of it all.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE `team_details` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`sr_no`, `name`, `picture`) VALUES
(45, 'Quân Nguyễn', 'IMG_38323.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_cred`
--

CREATE TABLE `user_cred` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(120) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `profile` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `datentime` datetime NOT NULL DEFAULT current_timestamp(),
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_cred`
--

INSERT INTO `user_cred` (`id`, `name`, `email`, `address`, `phonenum`, `dob`, `profile`, `password`, `is_verified`, `status`, `datentime`, `picture`) VALUES
(1, 'Naruto Alexander', 'username@gmail.com', 'Caugiay, Hanoi', '0336570393', '2004-01-01', '', 'default', 1, 1, '2023-11-07 21:51:05', ''),
(2, 'Lisa White', 'lisa.white@gmail.com', '654 Maple Ave, LargeTown, USA', '555345678', '1992-04-04', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58WAazR', 1, 1, '2023-01-04 15:00:00', ''),
(3, 'Noah Kim', 'noah.kim@gmail.com', '789 Birch Alley, OceanCity, USA', '556181921', '1986-12-12', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58WA', 1, 1, '2023-01-20 19:00:00', ''),
(4, 'Charlotte Lee', 'charlotte.lee@gmail.com', '123 Oak Path, MountainVille, USA', '556161719', '1994-11-11', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W9', 1, 1, '2023-01-19 18:00:00', ''),
(5, 'Liam Rodriguez', 'liam.rodriguez@gmail.com', '345 Maple Blvd, RiverTown, USA', '556141517', '1983-10-10', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W8', 1, 1, '2023-01-18 17:00:00', ''),
(6, 'Isabella Garcia', 'isabella.garcia@gmail.com', '567 Pine St, Hillside, USA', '556121315', '1991-09-09', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W7', 1, 1, '2023-01-17 16:00:00', ''),
(7, 'Oliver Martinez', 'oliver.martinez@gmail.com', '987 Elm Ct, LakeView, USA', '556101113', '1989-08-08', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W6', 1, 1, '2023-01-16 15:00:00', ''),
(8, 'Mia Johnson', 'mia.johnson@gmail.com', '321 Cedar Way, StarCity, USA', '556678913', '1995-07-07', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W5', 1, 1, '2023-01-15 14:00:00', ''),
(9, 'Jacob Davis', 'jacob.davis@gmail.com', '789 Birch Ln, MoonTown, USA', '556345679', '1987-06-06', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W4', 1, 0, '2023-01-14 13:00:00', ''),
(10, 'Sophia Wilson', 'sophia.wilson@gmail.com', '112 Maple Rd, SunTown, USA', '556901233', '1992-05-05', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W3', 1, 1, '2023-01-13 12:00:00', ''),
(11, 'Ethan Brown', 'ethan.brown@gmail.com', '214 Oak Ave, ForestCity, USA', '5565678124', '1984-04-04', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W2', 1, 1, '2023-01-12 11:00:00', ''),
(12, 'Natalie Evans', 'natalie.evans@gmail.com', '856 Spruce St, CreekTown, USA', '556123457', '1990-03-03', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W1', 1, 1, '2023-01-11 10:00:00', ''),
(13, 'Leo Terry', 'vimov@mailinator.com', 'Quaerat in deserunt', '69', '1986-12-05', 'IMG_49068.jpeg', '$2y$10$XRjfpMgRU2mCdMoqnUru9e.QWnSJJCFbBgNagBGCpw25sDFp8BscG', 1, 1, '2023-11-14 10:26:58', ''),
(14, 'Aretha Bean', 'ryjapujo@mailinator.com', 'Atque dolorum dolore', '0336570391', '1988-09-24', 'IMG_39964.jpeg', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W.', 1, 1, '2023-11-14 19:48:30', ''),
(15, 'Alex Smith', 'alex.smith@gmail.com', '1234 Main St, Anytown, USA', '555123456', '1980-01-01', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ53W', 1, 1, '2023-01-01 12:00:00', ''),
(16, 'Maria Garcia', 'maria.garcia@gmail.com', '4321 Oak St, OtherTown, USA', '5555678123', '1990-02-02', '', '$2y$10$N7..x33xmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W.', 1, 1, '2023-01-02 13:00:00', ''),
(17, 'John Doe', 'john.doe@gmail.com', '789 Pine St, SmallTown, USA', '555901234', '1985-03-03', '', '$2y$10$N7..x33NmV.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W.', 1, 1, '2023-01-03 14:00:00', ''),
(19, 'Michael Brown', 'michael.brown@gmail.com', '321 Cedar Blvd, NewTown, USA', '555678912', '1975-05-05', '', '$2y$10$N7..x33NmH.sfAv..1a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W.', 1, 1, '2023-01-05 16:00:00', ''),
(20, 'Sarah Wilson', 'sarah.wilson@gmail.com', '987 Elm St, BigTown, USA', '555101112', '1988-06-06', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W.', 1, 1, '2023-01-06 17:00:00', ''),
(21, 'James Johnson', 'james.johnson@gmail.com', '567 Pine Needle Rd, Lakeside, USA', '555121314', '1979-07-07', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W.', 1, 1, '2023-01-07 18:00:00', ''),
(22, 'Emily Davis', 'emily.davis@gmail.com', '345 Maple Dr, Hilltop, USA', '555141516', '1993-08-08', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W.', 1, 1, '2023-01-08 19:00:00', ''),
(23, 'David Wilson', 'david.wilson@gmail.com', '123 Oak Lane, Valleytown, USA', '555161718', '1982-09-09', '', '$2y$10$N7..x33NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W.', 1, 1, '2023-01-09 20:00:00', ''),
(24, 'Emma Johnson', 'emma.johnson@gmail.com', '789 Birch Blvd, Mountaintown, USA', '555181920', '1991-10-10', '', '$2y$10$N7..x28NmH.sfAv..6a.QOBNJA4jPj9GmUc9GVldQbe1EDKbQ58W.', 1, 1, '2023-01-10 21:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `datentime` datetime NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`sr_no`, `name`, `email`, `subject`, `message`, `datentime`, `seen`) VALUES
(30, 'Alex Smith', 'alex.smith@gmail.com', 'Inquiry about reservation', 'Hello, I have a question about my booking for next month.', '2023-01-01 12:00:00', 0),
(31, 'Maria Garcia', 'maria.garcia@gmail.com', 'Feedback on stay', 'I wanted to share my positive experience during my recent stay.', '2023-01-02 13:00:00', 0),
(32, 'John Doe', 'john.doe@gmail.com', 'Issue with payment', 'I encountered an issue while trying to make a payment online.', '2023-01-03 14:00:00', 0),
(33, 'Lisa White', 'lisa.white@gmail.com', 'Special request for room', 'I have a special request regarding my room preferences.', '2023-01-04 15:00:00', 0),
(34, 'Michael Brown', 'michael.brown@gmail.com', 'Question about facilities', 'Can you provide more information about the gym facilities?', '2023-01-05 16:00:00', 0),
(35, 'Sarah Wilson', 'sarah.wilson@gmail.com', 'Group booking inquiry', 'I am interested in making a group booking and need some details.', '2023-01-06 17:00:00', 0),
(36, 'James Johnson', 'james.johnson@gmail.com', 'Complaint about service', 'I had an unpleasant experience I wish to report.', '2023-01-07 18:00:00', 0),
(37, 'Emily Davis', 'emily.davis@gmail.com', 'Inquiry about events', 'Do you host events and what are the charges?', '2023-01-08 19:00:00', 0),
(38, 'David Wilson', 'david.wilson@gmail.com', 'Request for reservation change', 'I need to change the dates for my upcoming reservation.', '2023-01-09 20:00:00', 0),
(39, 'Emma Johnson', 'emma.johnson@gmail.com', 'Query about pet policy', 'I would like to know more about your policy on pets in the hotel.', '2023-01-10 21:00:00', 0),
(40, 'Olivia Martinez', 'olivia.martinez@gmail.com', 'Inquiry about conference room', 'What are the facilities available in the conference room?', '2023-01-11 09:00:00', 0),
(41, 'William Brown', 'william.brown@gmail.com', 'Request for early check-in', 'Can I request an early check-in for my upcoming stay?', '2023-01-12 10:00:00', 0),
(42, 'Sophia Lee', 'sophia.lee@gmail.com', 'Complaint about room service', 'The room service was delayed and unsatisfactory.', '2023-01-13 11:00:00', 0),
(43, 'Benjamin Clark', 'benjamin.clark@gmail.com', 'Inquiry about parking space', 'Is there ample parking space available at the hotel?', '2023-01-14 12:00:00', 0),
(44, 'Isabella Johnson', 'isabella.johnson@gmail.com', 'Feedback on dining experience', 'I had a wonderful dining experience at your restaurant.', '2023-01-15 13:00:00', 0),
(45, 'Lucas Rodriguez', 'lucas.rodriguez@gmail.com', 'Question about Wi-Fi access', 'Is Wi-Fi access free and available throughout the hotel?', '2023-01-16 14:00:00', 0),
(46, 'Charlotte Davis', 'charlotte.davis@gmail.com', 'Inquiry on health and safety protocols', 'What are the current health and safety protocols at the hotel?', '2023-01-17 15:00:00', 0),
(47, 'Daniel Garcia', 'daniel.garcia@gmail.com', 'Request for room with a view', 'I would like to request a room with a view of the city.', '2023-01-18 16:00:00', 0),
(48, 'Grace Martinez', 'grace.martinez@gmail.com', 'Query about fitness center', 'What are the opening hours of the fitness center?', '2023-01-19 17:00:00', 0),
(49, 'Jack Wilson', 'jack.wilson@gmail.com', 'Feedback on customer service', 'I want to compliment the excellent customer service I received.', '2023-01-20 18:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cre`
--
ALTER TABLE `admin_cre`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `booking_order`
--
ALTER TABLE `booking_order`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `facilites id` (`facilities_id`),
  ADD KEY `room id` (`room_id`);

--
-- Indexes for table `room_features`
--
ALTER TABLE `room_features`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `rm id` (`room_id`),
  ADD KEY `features id` (`features_id`);

--
-- Indexes for table `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `user_cred`
--
ALTER TABLE `user_cred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cre`
--
ALTER TABLE `admin_cre`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `booking_order`
--
ALTER TABLE `booking_order`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `room_facilities`
--
ALTER TABLE `room_facilities`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `room_features`
--
ALTER TABLE `room_features`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `room_images`
--
ALTER TABLE `room_images`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_cred`
--
ALTER TABLE `user_cred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `booking_details_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking_order` (`booking_id`);

--
-- Constraints for table `booking_order`
--
ALTER TABLE `booking_order`
  ADD CONSTRAINT `booking_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_cred` (`id`),
  ADD CONSTRAINT `booking_order_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD CONSTRAINT `facilites id` FOREIGN KEY (`facilities_id`) REFERENCES `facilities` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `room id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `room_features`
--
ALTER TABLE `room_features`
  ADD CONSTRAINT `features id` FOREIGN KEY (`features_id`) REFERENCES `features` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `rm id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `room_images`
--
ALTER TABLE `room_images`
  ADD CONSTRAINT `room_images_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
