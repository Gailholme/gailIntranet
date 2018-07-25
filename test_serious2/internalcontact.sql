-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 11:17 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internalcontact`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dname` char(50) COLLATE utf8_thai_520_w2 NOT NULL,
  `fax` char(50) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dname`, `fax`) VALUES
('Business Development', '02680-5299'),
('iClick  (Internet Support)', ''),
('Risk Management', ''),
('SBL', ''),
('TFEX', ''),
('กรรมการบริหาร', ''),
('ธุรกิจหลักทรัพย์ตราสารหนี้', '02-880-6011'),
('บริการกลาง', ''),
('ฝ่ายการเงินและงบประมาณ', ''),
('ฝ่ายทรัพยากรบุคคล', '02658-5629'),
('ฝ่ายเทคโนโลยีสารสนเทศ', ''),
('ฝ่ายธุรการ', ''),
('ฝ่ายบริหารเครดิตลูกค้า', ''),
('ฝ่ายบัญชี', ''),
('ฝ่ายปฏิบัติการตลาดหลักทรัพย์', '680-5120'),
('ฝ่ายวิคราะห์หลักทรัพย์', '02680-5118'),
('สายงานปฏิบัติการ', ''),
('สำนักกรรมการ', ''),
('สำนักประธานเจ้าหน้าที่บริหาร', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `name` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `nickname` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `phone_number` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `dname` varchar(32) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`name`, `nickname`, `phone_number`, `dname`) VALUES
('คุณกรณ์', '', '5009/5188', 'กรรมการบริหาร'),
('ว่าง', '', '5088', 'กรรมการบริหาร'),
('คุณประจวบ', '', '5005', 'กรรมการบริหาร'),
('คุณชัญญา', '', '6005/6009', 'กรรมการบริหาร'),
('คุณกัลยา', '', '5099', 'กรรมการบริหาร'),
('', '', '', ''),
('คุณเพ็ญประภา', 'อ้อ', '5066', 'สำนักกรรมการ'),
('คุณเบญจวรรณ', 'เบญ', '5067', 'สำนักกรรมการ'),
('ว่าง', '', '6008', 'สำนักกรรมการ'),
('', '', '', ''),
('คุณวิทยา', '', '5014', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณศักดิ์สรร', 'โดโด้', '5019', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณราตรี', 'อ้อม', '5122', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('ว่าง', '', '5022', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('ประพันธ์ศักดิ์', 'เต๋า', '5024', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณศุภชัย', 'เอก', '5023', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณสิโรตม์', 'เบียร์', '6012', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณศิริพร', 'มุก', '5020', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณอภินันท์', 'ตุ้ย', '5015/5098', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณชัยพัฒน์', 'พัฒน์', '6006', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณณัฐวี', 'ณัฐ', '5123', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณเนติลักษณ์', 'โอม', '5047', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณชัยพนม', 'เล็ก', '5018', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณสิทธิพร', '', '5016', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('คุณวิไลวรรณ', 'ตุ๊ก', '5017', 'ฝ่ายเทคโนโลยีสารสนเทศ'),
('', '', '', ''),
('คุณกัญญา', 'ทิพย์', '5038', 'ฝ่ายทรัพยากรบุคคล'),
('ว่าง', '', '5040', 'ฝ่ายทรัพยากรบุคคล'),
('คุณวิภาพร', 'กิ๊ก', '5121', 'ฝ่ายทรัพยากรบุคคล'),
('คุณอัจฉรีย์', 'ปลาย', '5106', 'ฝ่ายทรัพยากรบุคคล'),
('', '', '', ''),
('ว่าง', '', '5076', 'ฝ่ายธุรการ'),
('ว่าง', '', '5068', 'ฝ่ายธุรการ'),
('คุณจันทนา', 'อร', '5069', 'ฝ่ายธุรการ'),
('คุณสุรศักดิ่', 'อู๊ด', '5044', 'ฝ่ายธุรการ'),
('คุณเชวงศักดิ์', 'เป๊ก', '5095', 'ฝ่ายธุรการ'),
('คุณสุรศักดิ่', 'อู๊ด', '5104', 'ฝ่ายธุรการ'),
('คุณเอกชัย', 'เอก', '6007', 'ฝ่ายธุรการ'),
('', '', '', ''),
('คุณชลิต', '', '5010', 'ฝ่ายกำกับดูแลการปฏิบัติงาน'),
('คุณวรินท์อร', 'ต้อย', '5107', 'ฝ่ายกำกับดูแลการปฏิบัติงาน'),
('คุณอรวรรณ์', 'เจี๊ยบ', '5108', 'ฝ่ายกำกับดูแลการปฏิบัติงาน'),
('คุณวิไลลักษณ์', 'เล็ก', '5079', 'ฝ่ายกำกับดูแลการปฏิบัติงาน'),
('ว่าง', '', '5078', 'ฝ่ายกำกับดูแลการปฏิบัติงาน'),
('คุณพรพรรณ', 'หนึ่ง', '5096', 'ฝ่ายกำกับดูแลการปฏิบัติงาน'),
('', '', '', ''),
('ว่าง', '', '5029', 'ฝ่ายบัญชี'),
('คุณพรทิพย์', 'น้อง', '5025', 'ฝ่ายบัญชี'),
('คุณศรัญพร', 'ยา', '5026', 'ฝ่ายบัญชี'),
('คุณโชติมา', '', '5027', 'ฝ่ายบัญชี'),
('คุณวันทนา', 'ส้ม', '6040', 'ฝ่ายบัญชี'),
('คุณทศพล', '', '5129', 'ฝ่ายบัญชี'),
('คุณนภัสสร  ', '', '5028', 'ฝ่ายบัญชี'),
('', '', '', ''),
('คุณปิยพงศ์', 'อ้วน', '5081', 'สายงานปฏิบัติการ'),
('', '', '', ''),
('ห้องประชุมชั้น14/ชั้น7', '', '1400/1117', 'บริการกลาง'),
('แม่บ้านชั้น14/ชั้น7', '', '1401/1071/1402/1408', 'บริการกลาง'),
('ห้องประชุมชั้น17', '', '1701', 'บริการกลาง'),
('ห้องแม่บ้านชั้น 17', '', '1702', 'บริการกลาง'),
('โอเปอเรเตอร์ชั้น 7', '', 'กด70/5117', 'บริการกลาง'),
('ห้องประชุมเล็กชั้น7', '', '6004', 'บริการกลาง'),
('พนักงานรับ-ส่งเอกสารภายในชัน14  ', '', '1403', 'บริการกลาง'),
('', '', '', ''),
('คุณญาดาภา', 'หน่อย', '5086', 'ฝ่ายปฏิบัติการหลักทรัพย์'),
('คุณผานิต', 'เจี๊ยบ', '5083', 'ฝ่ายปฏิบัติการหลักทรัพย์'),
('คุณชยานนันต์', 'ผึ้ง', '5084', 'ฝ่ายปฏิบัติการหลักทรัพย์'),
('ว่าง', '', '5082', 'ฝ่ายปฏิบัติการหลักทรัพย์'),
('คุณศกลวรรณ', 'อุ๊', '5087', 'ฝ่ายปฏิบัติการหลักทรัพย์'),
('คุณสุกัญญา', 'แนน', '5036', 'ฝ่ายปฏิบัติการหลักทรัพย์'),
('คุณกุลปวีณ์', 'นกหวีด', '5080', 'ฝ่ายปฏิบัติการหลักทรัพย์'),
('คุณอณิกัญญา', 'มิ้งค์', '6061', 'ฝ่ายปฏิบัติการหลักทรัพย์'),
('', '', '', ''),
('คุณรุ่งทิพย์', 'โอ๋', '5092/5071', 'ฝ่ายบริหารเครดิตลูกค้า'),
('ว่าง', '', '5093/5072', 'ฝ่ายบริหารเครดิตลูกค้า'),
('ว่าง', '', '5194/5085', 'ฝ่ายบริหารเครดิตลูกค้า'),
('คุณธัญญลักษณ์', 'หญิง', '5195', 'ฝ่ายบริหารเครดิตลูกค้า'),
('คุณงามทิพย์', 'โจ้', '5361/5362', 'ฝ่ายบริหารเครดิตลูกค้า'),
('คุณณิกษา', 'บลู', '5363/5364', 'ฝ่ายบริหารเครดิตลูกค้า'),
('ว่าง', '', '5073', 'ฝ่ายบริหารเครดิตลูกค้า'),
('ว่าง', '', '5074', 'ฝ่ายบริหารเครดิตลูกค้า'),
('', '', '', ''),
('คุณพิดารัตน์', 'กานต์', '5366', 'SBL'),
('คุณนันทรา', '', '5177', 'SBL'),
('คุณนันทรา', '', '6057', 'SBL'),
('', '', '', ''),
('คุณชลัช', 'ใหม่', '5235', 'Risk Management'),
('ว่าง', '', '5011', 'Risk Management'),
('', '', '', ''),
('คุณวิลาสินี', 'มด', '5058', 'ฝ่ายการเงินและงบประมาณ'),
('คุณอรนุช', '', '5050', 'ฝ่ายการเงินและงบประมาณ'),
('คุณสาวิตรี', '', '5332', 'ฝ่ายการเงินและงบประมาณ'),
('ว่าง', '', '5059', 'ฝ่ายการเงินและงบประมาณ'),
('', '', '', ''),
('คุณอดิศักดิ์  ', '', '5056', 'ฝ่ายวิเคราะห์หลักทรัพย์'),
('คุณวชิราลักษณ์', '', '5077', 'ฝ่ายวิเคราะห์หลักทรัพย์'),
('คุณกฤษณ์', 'กฤษณ์', '5090', 'ฝ่ายวิเคราะห์หลักทรัพย์'),
('คุณณัชพล', '', '5094', 'ฝ่ายวิเคราะห์หลักทรัพย์'),
('คุณสุวีร์ภัทร', 'นุ้ย', '5097', 'ฝ่ายวิเคราะห์หลักทรัพย์'),
('ว่าง', '', '5331', 'ฝ่ายวิเคราะห์หลักทรัพย์'),
('คุณธนวรรณ', '', '5043', 'ฝ่ายวิเคราะห์หลักทรัพย์'),
('ว่าง', '', '6049', 'ฝ่ายวิเคราะห์หลักทรัพย์'),
('คุณวีรยา', '', '5042', 'ฝ่ายวิเคราะห์หลักทรัพย์'),
('', '', '', ''),
('คุณคึกฤทธิ์ ', 'เควิน', '6019', 'ธุรกิจหลักทรัพย์ตราสารหนี้'),
('คุณเนติวรรธน์', '', '6015', 'ธุรกิจหลักทรัพย์ตราสารหนี้'),
('คุณอานนท์', '', '6020', 'ธุรกิจหลักทรัพย์ตราสารหนี้'),
('คุณภาคย์ ', '', '6018', 'ธุรกิจหลักทรัพย์ตราสารหนี้'),
('คุณอุสนีย์', '', '6016', 'ธุรกิจหลักทรัพย์ตราสารหนี้'),
('คุณธนภรณ์', '', '6017', 'ธุรกิจหลักทรัพย์ตราสารหนี้'),
('ดร. อัจจิมา', '', '6021', 'ธุรกิจหลักทรัพย์ตราสารหนี้'),
('คุณกชกร', '', '6022', 'ธุรกิจหลักทรัพย์ตราสารหนี้'),
('คุณยุวดา', '', '6025', 'ธุรกิจหลักทรัพย์ตราสารหนี้'),
('ว่าง', '', '6023', 'ธุรกิจหลักทรัพย์ตราสารหนี้'),
('ว่าง', '', '6024', 'ธุรกิจหลักทรัพย์ตราสารหนี้'),
('', '', '', ''),
('คุณนพฤทธิ่', '', '5159', 'สำนักประธานเจ้าหน้าที่บริหาร'),
('คุณสุรชัย', 'บี', '5135', 'สำนักประธานเจ้าหน้าที่บริหาร'),
('', '', '', ''),
('ว่าง', '', '5021/6098', 'Business Development'),
('', '', '', ''),
('ว่าง', '', '5393/6089', 'TFEX'),
('คุณธวัชชัย', 'ต้อง', '5281', 'TFEX'),
('คุณกฤตดาภา', 'เน็ต', '5280', 'TFEX'),
('', '', '', ''),
('คุณพนิดา ', 'โบว์', '5033', 'iClick (Internet Support)'),
('คุณอัญชลี ', 'อุ๊', '5034', 'iClick (Internet Support)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
