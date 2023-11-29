-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 10:20 AM
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
(17, 'Phương Canh, Nam Từ Liêm, HN', '0353195203', 'Bùi Đức Ninh', 'COD', 238000, 1, 'đã giao cho đơn vị vận chuyển', '06:38:28'),
(18, 'Phương Canh, Nam Từ Liêm, HN', '0353195203', 'Bùi Đức Ninh', 'COD', 525000, 1, 'đã giao cho đơn vị vận chuyển', '12:03:39'),
(19, 'Hưng Hà ,Thái Bình', '00012', 'Nguyễn Thị Ngọc Anh', 'COD', 574000, 2, NULL, '05:17:56');

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
(11, '123', 1, 2, '2023-11-22'),
(12, 'ao nay chat qua', 5, 1, '2023-11-25'),
(13, '', 5, 1, '2023-11-25');

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
(6, 1, 'L', 49000, 17, 1, NULL),
(7, 2, 'L', 49000, 17, 4, NULL),
(8, 1, 'L', 56000, 17, 8, NULL),
(9, 6, 'L', 49000, 18, 1, NULL),
(10, 4, 'L', 49000, 18, 4, NULL),
(11, 8, 'L', 49000, 19, 1, NULL),
(12, 1, 'L', 49000, 19, 4, NULL),
(13, 1, 'XL', 49000, 19, 5, NULL),
(14, 1, 'L', 49000, 19, 7, NULL);

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
(180, 1, 2, NULL);

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
(1, 250, 25, 'L', 49000, 1, NULL, NULL),
(3, 100, 10, 'M', 49000, 1, NULL, NULL),
(4, 120, 70, 'L', 49000, 3, 'a.png', 'b.png'),
(5, 10, 11, 'XL', 49000, 1, '1.png', '2.png'),
(7, 123, 2, 'L', 49000, 4, '8.png', '7.png'),
(8, 30, 12, 'L', 56000, 5, NULL, NULL);

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
(1, 'Shirts', '', NULL),
(2, 'Shots', '', NULL),
(3, 'Hoodie', NULL, NULL);

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
(1, 2);

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
(1, '001 BlokeCore T-Shirt/White-Black', '1.png', NULL, 'Size M:Chiều dài:70.5cm, chiều ngang:55.5cm, chiều dài tay: 23cm\r\nSize L:Chiều dài:72.5cm, chiều ngang:57cm, chiều dài tay:24cm\r\nSize XL:Chiều dài:74.5cm. chiều ngang:58.5cm, chiều dài tay:25cm.', NULL, 1),
(3, 'Simple Short', 'a.png', NULL, 'đây là quần', NULL, 2),
(4, 'DISSOLVE 3D T-SHIRT', '7.png', NULL, 'vừa mới thêm', NULL, 1),
(5, 'ANCIENT ASIA T-SHIRT', '9.png', NULL, NULL, NULL, 1),
(6, 'CRYSTALLLIZE T-SHIRT', '10.png', NULL, NULL, NULL, 1),
(7, 'ROSE T-SHIRT', '11.png', NULL, NULL, NULL, 1),
(8, 'WORLD MAP T-SHIRT', '12.png', NULL, NULL, NULL, 1),
(9, 'SKATEBOARDING T-SHIRT', '13.png', NULL, NULL, NULL, 1),
(10, 'ZODIAC T-SHIRT', '14.png', NULL, NULL, NULL, 1),
(11, 'SIMPLE SHORT/BEIGE', 'c.png', NULL, NULL, NULL, 2),
(12, 'SIMPLE HOODIE/NAVY', 'I.png', NULL, NULL, NULL, 3),
(13, 'SIMPLE HOODIE/GRAY', 'II.png', NULL, NULL, NULL, 3),
(14, 'SIMPLE HOODIE/WHITE', 'III.png', NULL, NULL, NULL, 3),
(15, 'SIMPLE HOODIE/BLACK', 'IV.png', NULL, NULL, NULL, 3);

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
(2, 'Nguyễn Thị Ngọc Anh', '00012', 'Hưng Hà ,Thái Bình', 'ccuuaa2004@gmail.com', 'client1', '123456', NULL, 'z4259403577205_b9529356e4545892f802b2e35375a28f.jpg');

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
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chitiet_bill`
--
ALTER TABLE `chitiet_bill`
  MODIFY `id_chitietbill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  MODIFY `id_chitietgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `chitiet_sanpham`
--
ALTER TABLE `chitiet_sanpham`
  MODIFY `id_chitietsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
