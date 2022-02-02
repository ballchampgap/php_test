-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 02:44 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;



-- --------------------------------------------------------


CREATE TABLE `planteco` (
  `id` int(11) NOT NULL,
  `name_th` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pest_epic_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `planteco`
--

INSERT INTO `planteco` (`id`, `name_th`, `pest_epic_id`) VALUES
(1, 'ข้าว',  1),
(2, 'ยางพารา', 1),
(3, 'มันสำปะหลัง', 1),
(4, 'อ้อย', 1),
(5, 'ปาล์มน้ำมัน', 1),
(6, 'ข้าว', 2),
(7, 'ยางพารา', 2),
(8, 'มันสำปะหลัง', 2),
(9, 'อ้อย', 2),
(10, 'น้ำมันปาล์ม', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_pest_epic`
--

CREATE TABLE `data_pest_epic` (
  `id` int(11) NOT NULL,
  `name_th` varchar(255) CHARACTER SET utf8 NOT NULL,
  `planteco_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_pest_epic`
--

INSERT INTO `data_pest_epic` (`id`, `name_th`, `planteco_id`) VALUES
(1, 'โรคถอดฝักดาบของข้าว',  1),
(2, 'ใบจุดสีน้ำตาล ',  1),
(3, 'เมล็ดด่าง',  1),
(4, 'ใบขีดโปร่งแสง',  1),
(5, 'โรคใบไหม้',  1),
(6, 'ใบขีดสีน้ำตาล',  1),
(7, 'โรคใบจุดตานก',  2),
(8, 'โรคใบจุดนูน',  2),
(9, 'โรคราแปง',  2),
(10, 'โรคใบจุดกางปลา',  2),
(11, 'โรคเปลือกเน่า',  2),
(12, 'โรคใบไหม้',  3),
(13, ' โรคใบจุดสีน้ำตาล',  3),
(14, 'โรคใบจุดไหม้',  3),
(15, 'โรคใบจุดขาว',  3),
(16, 'โรคเน่าที่เกิดจากเชื้อรา', 3),
(17, 'โรคหัวเน่าเละ', 3),
(18, 'โรคหัวเน่าแห้ง', 3),
(19, 'โรคกอตะไคร้',  4),
(20, 'โรคเน่าแดง,เหี่ยวเน่าแดง', 4),
(21, 'โรคแส้ดำ', 4),
(22, 'โรคใบจุดวงแหวน', 4),
(23, 'โรคเน่าคออ้อย', 4),
(24, 'โรคใบจุด', 5),
(25, 'โรคแอนแทรคโนส', 5),
(26, 'โรคใบไหม้', 5),
(27, 'โรคทะลายเน่า', 5),
(28, 'โรคผลเน่า', 5),
(29, 'โรคราดำ', 5),
(30, 'โรคผลร่วง', 5),
(31, 'เพลี้ยไฟ', 6),
(32, 'หนอนกระทู้กล้า', 6),
(33, 'เพลี้ยกระโดดสีน้ำตาล', 6),
(34, 'เพลี้ยจักจั่นสีเขียว', 6),
(35, 'แมลงบั่ว', 6),
(36, 'หนอนกอ', 6),
(37, 'หนอนม้วนใบ', 6),
(38, 'แมลงสิง', 6),
(39, 'หนอนกระทู้คอรวง', 6),
(40, 'ด้วง', 7),
(41, 'ปลวก', 7),
(42, 'หนอนทราย', 7),
(43, 'เพลี้ยแดงมันสำปะหลัง', 8),
(44, 'เพลี้ยแป้งมันสำปะหลัง', 8),
(45, 'ด้วงหนวดยาว', 8),
(46, 'ปลวก', 8),
(47, 'หนอนกอ', 9),
(48, 'ด้วงหนวดยาว', 9),
(49, 'หนูป่ามาเลย์', 10),
(50, 'หนูพุกใหญ่หรือหนูแผง', 10),
(51, ' หนูบ้านท้องขาว', 10),
(52, 'หนอนหน้าแมว', 10),
(53, 'หนอนร่านสี่เขา', 10),
(54, 'หนอนร่านสีน้ำตาล', 10),
(55, 'หนอนปลอกเล็ก', 10),
(56, 'ด้วงกุหลาบ', 10),
(57, 'ด้วงงวงมะพร้าว', 10),
(58, 'ด้วงแรด', 10);

-- --------------------------------------------------------



CREATE TABLE `pest_epic` (
  `id` int(11) NOT NULL,
  `name_th` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pest_epic`
--

INSERT INTO `pest_epic` (`id`, `name_th`) VALUES
(1, 'โรคระบาด'),
(2, 'ศัตรูพืช' );
--
-- Indexes for dumped tables
--

--
-- Indexes for table `planteco`
--
ALTER TABLE `planteco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pest_epic`
--
ALTER TABLE `data_pest_epic`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `pest_epic`
--
ALTER TABLE `pest_epic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `planteco`
--
ALTER TABLE `planteco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


-- AUTO_INCREMENT for table `pest_epic`
--
ALTER TABLE `pest_epic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;