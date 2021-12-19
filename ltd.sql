-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2021 lúc 05:36 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltd`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_status`) VALUES
(1, 'Nhà ngoại cảm Phan Bích Hằng làm lãnh đại Tập đoàn Phương Trang', 'Đã Phê Duyệt'),
(2, 'Dùng ô tô truy sát xe chở người bị thương rồi nổ súng', 'Chưa Phê Duyệt'),
(3, 'Nghệ sũ Phước Sang vỡ nợ. Rắc rối khoản nợ 113 tỷ', 'Chưa Phê Duyệt'),
(4, 'Bị đòi nợ 3.000 tỷ. Đại gia Phương Trang phản pháo', 'Đã Phê Duyệt'),
(5, 'Ly kỳ vụ bán đấu giá lô 135 chiếc xe máy thanh lý tại Hà Tĩnh', 'Chưa Phê Duyệt'),
(6, 'Truyền thông Lào ca ngợi tình hữu nghị truyền thống đặc biệt Việt-Lào', 'Đã Phê Duyệt'),
(7, 'Đoàn công tác của TTXVN và Thông tấn xã Lào làm việc tại Nghệ An', 'Đã Phê Duyệt'),
(8, 'Làm sâu sắc thêm quan hệ đối tác chiến lược giữa Indonesia - Việt Nam', 'Chưa Phê Duyệt');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
