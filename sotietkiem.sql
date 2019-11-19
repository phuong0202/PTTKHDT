-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2019 lúc 10:40 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sotietkiem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sotietkiem`
--

CREATE TABLE `sotietkiem` (
  `maso` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socmnd` int(11) NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaymo` date NOT NULL,
  `sotienguibandau` bigint(20) NOT NULL,
  `maloaitietkiem` int(11) NOT NULL,
  `sotienlai` bigint(20) NOT NULL,
  `dongso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sotietkiem`
--

INSERT INTO `sotietkiem` (`maso`, `tenkh`, `socmnd`, `diachi`, `ngaymo`, `sotienguibandau`, `maloaitietkiem`, `sotienlai`, `dongso`) VALUES
(1, 'linh', 451654, 'bentre', '2019-11-20', 100000000, 1, 0, 0),
(2, 'linh', 451654, 'bentre', '2019-11-20', 100000000, 1, 0, 0),
(3, 'linh', 451654, 'bentre', '2019-11-21', 150000000, 1, 0, 0),
(4, 'linh', 451654, 'bentre', '2019-11-20', 100000000000, 1, 0, 0),
(5, 'linh', 451654, 'bentre', '2019-11-01', 10565000000, 1, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sotietkiem`
--
ALTER TABLE `sotietkiem`
  ADD PRIMARY KEY (`maso`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sotietkiem`
--
ALTER TABLE `sotietkiem`
  MODIFY `maso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
