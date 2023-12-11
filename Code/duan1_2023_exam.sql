-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 01:53 PM
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
-- Database: `duan1_2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `diachi_giaohang` varchar(100) DEFAULT NULL,
  `sdt_nguoinhan` varchar(12) DEFAULT NULL,
  `ten_nguoinhan` varchar(100) DEFAULT NULL,
  `phuongthuc_thanhtoan` varchar(10) DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `trangthai_bill` varchar(100) DEFAULT NULL,
  `thoigiandathang` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id_bill`, `diachi_giaohang`, `sdt_nguoinhan`, `ten_nguoinhan`, `phuongthuc_thanhtoan`, `tongtien`, `id_user`, `trangthai_bill`, `thoigiandathang`) VALUES
(31, 'Phương Canh, Nam Từ Liêm, HN', '0353195203', 'Bùi Đức Ninh', 'COD', 231000, 1, 'Giao thành công', '09:23:41'),
(32, 'Phương Canh, Nam Từ Liêm, HN', '0353195203', 'Bùi Đức Ninh', 'COD', 84000, 1, 'Giao thành công', '09:25:24'),
(35, 'Phương Canh, Nam Từ Liêm, HN', '0353195203', 'Bùi Đức Ninh', 'COD', 231000, 1, 'Giao thành công', '04:29:16'),
(36, 'Phương Canh, Nam Từ Liêm, HN', '0353195203', 'Bùi Đức Ninh', 'COD', 134000, 1, 'Giao thành công', '11:34:05'),
(37, 'Phương Canh, Nam Từ Liêm, HN', '0353195203', 'Bùi Đức Ninh', 'COD', 441000, 1, NULL, '11:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `noidung_binhluan` varchar(200) DEFAULT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `ngay_binhluan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id_binhluan`, `noidung_binhluan`, `id_sanpham`, `id_user`, `ngay_binhluan`) VALUES
(8, 'ôi dep qua di', 1, 2, '2023-11-22'),
(9, '', 1, 2, '2023-11-22'),
(10, 'waoo', 1, 2, '2023-11-22'),
(12, 'ao nay chat qua', 5, 1, '2023-11-25'),
(13, '', 5, 1, '2023-11-25'),
(14, 'ao gia re, chat luong caoo', 19, 1, '2023-12-08'),
(15, '', 19, 1, '2023-12-08'),
(16, '', 19, 1, '2023-12-08'),
(17, 'ao size L hoi chat', 19, 1, '2023-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_bill`
--

CREATE TABLE `chitiet_bill` (
  `id_chitietbill` int(11) NOT NULL,
  `soluong_chitiet` int(11) DEFAULT NULL,
  `size_chitiet` varchar(4) DEFAULT NULL,
  `gia_chitiet` int(11) DEFAULT NULL,
  `id_bill` int(11) DEFAULT NULL,
  `id_chitietsanpham` int(11) DEFAULT NULL,
  `id_sanpham` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitiet_bill`
--

INSERT INTO `chitiet_bill` (`id_chitietbill`, `soluong_chitiet`, `size_chitiet`, `gia_chitiet`, `id_bill`, `id_chitietsanpham`, `id_sanpham`) VALUES
(30, 1, 'L', 49000, 29, 28, NULL),
(31, 5, 'L', 49000, 29, 32, NULL),
(32, 1, 'L', 49000, 31, 28, NULL),
(33, 3, 'L', 49000, 31, 30, NULL),
(34, 1, 'L', 49000, 32, 28, NULL),
(35, 4, 'L', 49000, 35, 30, NULL),
(36, 1, 'XL', 99000, 36, 38, NULL),
(37, 9, 'L', 49000, 37, 41, NULL),
(38, 1, 'M', 49000, 39, 29, NULL),
(39, 1, 'L', 49000, 40, 32, NULL),
(40, 1, 'L', 49000, 41, 32, NULL),
(41, 1, 'L', 49000, 42, 49, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_giohang`
--

CREATE TABLE `chitiet_giohang` (
  `id_chitietgiohang` int(11) NOT NULL,
  `id_chitietsanpham` int(11) DEFAULT NULL,
  `id_giohang` int(11) DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitiet_giohang`
--

INSERT INTO `chitiet_giohang` (`id_chitietgiohang`, `id_chitietsanpham`, `id_giohang`, `tongtien`) VALUES
(259, 41, 0, NULL),
(260, 46, 0, NULL),
(263, 28, 2, NULL),
(264, 28, 2, NULL),
(265, 28, 2, NULL),
(266, 28, 2, NULL),
(267, 28, 2, NULL),
(268, 28, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_sanpham`
--

CREATE TABLE `chitiet_sanpham` (
  `id_chitietsanpham` int(11) NOT NULL,
  `soluongtonkho` int(11) DEFAULT NULL,
  `soluongdaban` int(11) DEFAULT NULL,
  `size_chitiet` varchar(4) DEFAULT NULL,
  `gia_chitiet` int(11) DEFAULT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `mausang` varchar(100) DEFAULT NULL,
  `mautoi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitiet_sanpham`
--

INSERT INTO `chitiet_sanpham` (`id_chitietsanpham`, `soluongtonkho`, `soluongdaban`, `size_chitiet`, `gia_chitiet`, `id_sanpham`, `mausang`, `mautoi`) VALUES
(1, 1011, 101, 'M', 50000, 19, NULL, NULL),
(28, 250, 25, 'L', 49000, 1, NULL, NULL),
(29, 100, 10, 'M', 49000, 1, NULL, NULL),
(30, 120, 70, 'L', 49000, 3, 'a.png', 'b.png'),
(31, 10, 11, 'XL', 49000, 1, '1.png', '2.png'),
(32, 123, 2, 'L', 49000, 4, '8.png', '7.png'),
(33, 30, 12, 'L', 56000, 5, NULL, NULL),
(34, 200, 12, 'L', 45000, 4, NULL, NULL),
(35, 123, 23, 'M', 50000, 7, NULL, NULL),
(36, 123, 21, 'M', 99000, 16, NULL, NULL),
(37, 341, 67, 'L', 99000, 17, NULL, NULL),
(38, 198, 65, 'XL', 99000, 18, NULL, NULL),
(39, 654, 34, 'XL', 99000, 19, NULL, NULL),
(40, 30, 11, 'M', 49000, 6, NULL, NULL),
(41, 89, 21, 'L', 49000, 19, NULL, NULL),
(42, 567, 54, 'XL', 49000, 18, NULL, NULL),
(43, 543, 54, 'L', 50000, 9, NULL, NULL),
(44, 533, 54, 'XL', 49000, 10, NULL, NULL),
(45, 532, 78, 'M', 49000, 11, NULL, NULL),
(46, 3244, 65, 'XL', 90000, 12, NULL, NULL),
(47, 654, 12, 'M', 54000, 13, NULL, NULL),
(48, 458, 32, 'XL', 56000, 14, NULL, NULL),
(49, 871, 64, 'L', 49000, 15, NULL, NULL),
(50, 2341, 2, 'L', 49000, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(100) DEFAULT NULL,
  `img_danhmuc` varchar(100) DEFAULT NULL,
  `parent_danhmuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`, `img_danhmuc`, `parent_danhmuc`) VALUES
(1, 'Shirts', 'danhmuc_shirt.png', NULL),
(2, 'Shots', 'danhmuc_short.png', NULL),
(3, 'Hoodie', 'danhmuc_hoodie.png', NULL),
(4, 'Sweater', 'danhmuc_sweater.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doanhthu`
--

CREATE TABLE `doanhthu` (
  `id_doanhthu` int(11) NOT NULL,
  `id_billdone` int(11) DEFAULT NULL,
  `id_sanphamdone` int(11) DEFAULT NULL,
  `tien_done` int(11) DEFAULT NULL,
  `soluongsp` int(11) DEFAULT NULL,
  `id_billfalse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doanhthu`
--

INSERT INTO `doanhthu` (`id_doanhthu`, `id_billdone`, `id_sanphamdone`, `tien_done`, `soluongsp`, `id_billfalse`) VALUES
(17, 36, 18, 134000, 1, NULL),
(18, 35, 3, 231000, 4, NULL),
(19, 35, 3, 231000, 4, NULL),
(20, 31, 1, 231000, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id_giohang`, `id_user`) VALUES
(2, 1),
(1, 2),
(3, 61),
(4, 62);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `title_sanpham` varchar(100) DEFAULT NULL,
  `img_sanpham` varchar(100) DEFAULT NULL,
  `subtitle_sanpham` varchar(100) DEFAULT NULL,
  `description_sanpham` varchar(200) DEFAULT NULL,
  `hot_sanpham` int(11) DEFAULT NULL,
  `id_danhmuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `title_sanpham`, `img_sanpham`, `subtitle_sanpham`, `description_sanpham`, `hot_sanpham`, `id_danhmuc`) VALUES
(1, 'BlokeCore T-Shirt', '1.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 1),
(3, 'Simple Short', 'a.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 2),
(4, 'DISSOLVE 3D T-SHIRT', '7.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 1),
(5, 'ANCIENT ASIA T-SHIRT', '9.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 1),
(6, 'CRYSTALLLIZE T-SHIRT', '10.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 1),
(7, 'ROSE T-SHIRT', '11.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 1),
(8, 'WORLD MAP T-SHIRT', '12.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 1),
(9, 'SKATEBOARD T-SHIRT', '13.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 1),
(10, 'ZODIAC T-SHIRT', '14.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 1),
(11, 'SIMPLE SHORT/BEIGE', 'c.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 2),
(12, 'SIMPLE HOODIE/NAVY', 'I.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 3),
(13, 'SIMPLE HOODIE/GRAY', 'II.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 3),
(14, 'SIMPLE HOODIE/WHITE', 'III.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 3),
(15, 'SIMPLE HOODIE/BLACK', 'IV.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 3),
(16, 'Simple Sweater/Gray', '.1.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 63cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:64cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:65cm.', NULL, 4),
(17, 'Simple Sweater/Navy', '.2.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 63cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:64cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:65cm.', NULL, 4),
(18, 'Simple Sweater/White', '.3.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 63cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:64cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:65cm.', NULL, 4),
(19, 'Simple Sweater/Black', '.4.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 63cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:64cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:65cm.', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `ten_user` varchar(100) DEFAULT NULL,
  `sdt_user` varchar(12) DEFAULT NULL,
  `diachi_user` varchar(100) DEFAULT NULL,
  `gmail_user` varchar(100) DEFAULT NULL,
  `tentaikhoan_user` varchar(100) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `ten_user`, `sdt_user`, `diachi_user`, `gmail_user`, `tentaikhoan_user`, `password_user`, `role`, `avatar`) VALUES
(1, 'Bùi Đức Ninh', '0353195203', 'Phương Canh, Nam Từ Liêm, HN', 'buiducninh12@gmail.com', 'admin', '1234', 1, 'con-meo-tieng-trung-la-gi.png'),
(2, 'Nguyễn Thị Ngọc Anh', '00012', 'Hưng Hà ,Thái Bình', 'ccuuaa2004@gmail.com', 'client1', '123456', NULL, 'z4259403577205_b9529356e4545892f802b2e35375a28f.jpg'),
(61, 'duckning', '045153', '', 'buiducnnh@gmail.com', 'ninh12', '1234', 0, 'du lịch môn phát triển bản thân6.jpg'),
(62, 'buy duk nink', '123456', 'ha tay', 'buiducninh1221@gmail.com', 'duckningg', '1234', 0, 'du lịch môn phát triển bản thân5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` int(11) NOT NULL,
  `ma_voucher` varchar(50) DEFAULT NULL,
  `description_voucher` varchar(100) DEFAULT NULL,
  `role_voucher` int(11) DEFAULT NULL,
  `minapdung` int(11) DEFAULT NULL,
  `giam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `ma_voucher`, `description_voucher`, `role_voucher`, `minapdung`, `giam`) VALUES
(1, 'FPTPOLYTECHNIC1', 'Giảm 100% phí vận chuyển dành cho đơn hàng từ 300K', 1, 300000, NULL),
(2, 'FPTPOLYTECHNIC2', 'Giảm 10% cho đơn hàng từ 300k', NULL, 300000, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `chitiet_bill`
--
ALTER TABLE `chitiet_bill`
  ADD PRIMARY KEY (`id_chitietbill`),
  ADD KEY `id_chitietsanpham` (`id_chitietsanpham`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Indexes for table `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  ADD PRIMARY KEY (`id_chitietgiohang`),
  ADD KEY `id_chitietsanpham` (`id_chitietsanpham`),
  ADD KEY `id_giohang` (`id_giohang`);

--
-- Indexes for table `chitiet_sanpham`
--
ALTER TABLE `chitiet_sanpham`
  ADD PRIMARY KEY (`id_chitietsanpham`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `doanhthu`
--
ALTER TABLE `doanhthu`
  ADD PRIMARY KEY (`id_doanhthu`),
  ADD KEY `id_billdone` (`id_billdone`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `chitiet_bill`
--
ALTER TABLE `chitiet_bill`
  MODIFY `id_chitietbill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  MODIFY `id_chitietgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `chitiet_sanpham`
--
ALTER TABLE `chitiet_sanpham`
  MODIFY `id_chitietsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doanhthu`
--
ALTER TABLE `doanhthu`
  MODIFY `id_doanhthu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `chitiet_bill`
--
ALTER TABLE `chitiet_bill`
  ADD CONSTRAINT `chitiet_bill_ibfk_1` FOREIGN KEY (`id_chitietsanpham`) REFERENCES `chitiet_sanpham` (`id_chitietsanpham`),
  ADD CONSTRAINT `chitiet_bill_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`);

--
-- Constraints for table `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  ADD CONSTRAINT `chitiet_giohang_ibfk_1` FOREIGN KEY (`id_chitietsanpham`) REFERENCES `chitiet_sanpham` (`id_chitietsanpham`);

--
-- Constraints for table `chitiet_sanpham`
--
ALTER TABLE `chitiet_sanpham`
  ADD CONSTRAINT `chitiet_sanpham_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`);

--
-- Constraints for table `doanhthu`
--
ALTER TABLE `doanhthu`
  ADD CONSTRAINT `doanhthu_ibfk_1` FOREIGN KEY (`id_billdone`) REFERENCES `bill` (`id_bill`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
