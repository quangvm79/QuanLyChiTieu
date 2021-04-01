-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 01, 2021 lúc 05:16 AM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `appquanlychitieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `ID` int(11) NOT NULL,
  `TenDanhMuc` varchar(50) DEFAULT NULL,
  `LoaiDanhMuc` bit(1) DEFAULT NULL,
  `IDtk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`ID`, `TenDanhMuc`, `LoaiDanhMuc`, `IDtk`) VALUES
(4, 'Đi lại', b'1', 1),
(5, 'Sinh hoạt', b'1', 1),
(7, 'Vui chơi', b'1', 1),
(8, 'Nhà cửa', b'1', 1),
(10, 'Lương', b'0', 1),
(11, 'Thưởng', b'0', 1),
(12, 'Được tặng', b'0', 1),
(13, 'Tiền lại', b'0', 1),
(14, 'học tập', b'1', 1),
(16, 'Rơi tiền', b'1', 1),
(17, 'Của nợ', b'1', 1),
(20, 'Bạn gái', b'0', 1),
(21, 'Trò chơi điện tử1', b'1', 1),
(22, 'Game', b'0', 1),
(39, 'â', b'0', 3),
(40, 'Vui chơi', b'1', 4),
(41, 'Đi lại', b'1', 4),
(42, 'Cưới hỏi', b'1', 4),
(43, 'Vui chơi1', b'1', 4),
(44, 'Ăn uống', b'1', 4),
(45, 'Lương', b'0', 4),
(46, 'Thưởng', b'0', 4),
(47, 'Vay nợ', b'0', 4),
(48, 'Được cho', b'0', 4),
(49, 'Ăn uống', b'1', 5),
(50, 'Đi lại', b'1', 5),
(51, 'Cưới hỏi', b'1', 5),
(52, 'Vui chơi', b'1', 5),
(53, 'Đổ xăng', b'1', 5),
(54, 'Lương', b'0', 5),
(55, 'Thưởng', b'0', 5),
(56, 'Vay nợ', b'0', 5),
(57, 'Được cho', b'0', 5),
(58, 'Ăn uống', b'1', 5),
(59, 'Đi lại', b'1', 5),
(60, 'Cưới hỏi', b'1', 5),
(61, 'Vui chơi', b'1', 5),
(62, 'Đổ xăng', b'1', 5),
(63, 'Lương', b'0', 5),
(64, 'Thưởng', b'0', 5),
(65, 'Vay nợ', b'0', 5),
(66, 'Được cho', b'0', 5),
(67, 'Ăn uống', b'1', 5),
(68, 'Đi lại', b'1', 5),
(69, 'Cưới hỏi', b'1', 5),
(70, 'Vui chơi', b'1', 5),
(71, 'Đổ xăng', b'1', 5),
(72, 'Lương', b'0', 5),
(73, 'Thưởng', b'0', 5),
(74, 'Vay nợ', b'0', 5),
(75, 'Được cho', b'0', 5),
(76, 'Ăn uống', b'1', 6),
(77, 'Đi lại', b'1', 6),
(78, 'Cưới hỏi', b'1', 6),
(79, 'Vui chơi', b'1', 6),
(80, 'Đổ xăng', b'1', 6),
(81, 'Lương', b'0', 6),
(82, 'Thưởng', b'0', 6),
(83, 'Vay nợ', b'0', 6),
(84, 'Được cho', b'0', 6),
(85, 'Ăn trưa', b'1', 1),
(86, '@', b'0', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanmucchitieu`
--

CREATE TABLE `hanmucchitieu` (
  `ID` int(11) NOT NULL,
  `TenHanMuc` varchar(100) DEFAULT NULL,
  `SoTien` int(11) DEFAULT NULL,
  `IDvi` int(11) DEFAULT NULL,
  `IDdm` int(11) DEFAULT NULL,
  `LapLai` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanmucchitieu`
--

INSERT INTO `hanmucchitieu` (`ID`, `TenHanMuc`, `SoTien`, `IDvi`, `IDdm`, `LapLai`) VALUES
(7, 'ádasd', 56456, 27, 44, 'everyday');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ID` int(11) NOT NULL,
  `TaiKhoan` varchar(50) NOT NULL,
  `MatKhau` varchar(50) DEFAULT NULL,
  `TenNguoiDung` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ID`, `TaiKhoan`, `MatKhau`, `TenNguoiDung`, `Email`) VALUES
(1, 'admin', '123', 'admin', 'vuminhquang.dsn@gmail.com'),
(3, 'quang', '1', 'quang', 'quanglovemu@gmail.com'),
(4, 'phong', '1', 'phonghh', 'phong@gmail.com'),
(5, 'phonghh', '1', 'phonghh', 'phong@gmail.com'),
(6, 'manh', '1', 'manh', 'manh@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuchi`
--

CREATE TABLE `thuchi` (
  `ID` int(11) NOT NULL,
  `IDdm` int(11) NOT NULL,
  `IDvi` int(11) NOT NULL,
  `ThoiGian` date DEFAULT NULL,
  `GhiChu` varchar(100) DEFAULT NULL,
  `SoTien` int(11) DEFAULT NULL,
  `LoaiChiTieu` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuchi`
--

INSERT INTO `thuchi` (`ID`, `IDdm`, `IDvi`, `ThoiGian`, `GhiChu`, `SoTien`, `LoaiChiTieu`) VALUES
(122, 39, 4, '2021-03-25', '-', 10000000, b'0'),
(124, 48, 27, '2021-03-25', '-', 5000000, b'0'),
(125, 42, 27, '2021-01-18', '-', 213213, b'1'),
(126, 43, 27, '2021-02-22', '-', 545646, b'1'),
(127, 44, 27, '2021-02-23', '-', 900000, b'1'),
(128, 41, 27, '2021-03-26', '-', 40000, b'1'),
(129, 41, 27, '2021-03-21', '-', 800000, b'1'),
(130, 44, 27, '2020-06-16', '-', 6400000, b'1'),
(131, 44, 27, '2020-01-22', '-', 7000000, b'1'),
(132, 44, 27, '2021-03-21', '-', 7000000, b'1'),
(133, 44, 27, '2019-06-19', '-', 6000000, b'1'),
(134, 42, 27, '2021-02-22', '-', 999999, b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vi`
--

CREATE TABLE `vi` (
  `ID` int(11) NOT NULL,
  `IDtk` int(11) NOT NULL,
  `TenVi` varchar(50) DEFAULT NULL,
  `SoTien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vi`
--

INSERT INTO `vi` (`ID`, `IDtk`, `TenVi`, `SoTien`) VALUES
(4, 3, 'viettin', 10520555),
(5, 3, 'momo', 863445),
(7, 3, 'Tiền mặt', 6090000),
(25, 5, 'Tiền Mặt', 1000000),
(26, 6, 'Tiền Mặt', 100000),
(27, 4, 'Momo', 975201142),
(29, 4, 'VietComBank', 9900000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDtk` (`IDtk`);
ALTER TABLE `danhmuc` ADD FULLTEXT KEY `TenDanhMuc` (`TenDanhMuc`);

--
-- Chỉ mục cho bảng `hanmucchitieu`
--
ALTER TABLE `hanmucchitieu`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDdm` (`IDdm`),
  ADD KEY `IDvi` (`IDvi`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `TaiKhoan` (`TaiKhoan`);

--
-- Chỉ mục cho bảng `thuchi`
--
ALTER TABLE `thuchi`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDdm` (`IDdm`),
  ADD KEY `IDvi` (`IDvi`);

--
-- Chỉ mục cho bảng `vi`
--
ALTER TABLE `vi`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDtk` (`IDtk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `hanmucchitieu`
--
ALTER TABLE `hanmucchitieu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `thuchi`
--
ALTER TABLE `thuchi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT cho bảng `vi`
--
ALTER TABLE `vi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `danhmuc_ibfk_1` FOREIGN KEY (`IDtk`) REFERENCES `nguoidung` (`ID`);

--
-- Các ràng buộc cho bảng `hanmucchitieu`
--
ALTER TABLE `hanmucchitieu`
  ADD CONSTRAINT `hanmucchitieu_ibfk_1` FOREIGN KEY (`IDdm`) REFERENCES `danhmuc` (`ID`),
  ADD CONSTRAINT `hanmucchitieu_ibfk_2` FOREIGN KEY (`IDvi`) REFERENCES `vi` (`ID`);

--
-- Các ràng buộc cho bảng `thuchi`
--
ALTER TABLE `thuchi`
  ADD CONSTRAINT `thuchi_ibfk_1` FOREIGN KEY (`IDdm`) REFERENCES `danhmuc` (`ID`),
  ADD CONSTRAINT `thuchi_ibfk_2` FOREIGN KEY (`IDvi`) REFERENCES `vi` (`ID`);

--
-- Các ràng buộc cho bảng `vi`
--
ALTER TABLE `vi`
  ADD CONSTRAINT `vi_ibfk_1` FOREIGN KEY (`IDtk`) REFERENCES `nguoidung` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
