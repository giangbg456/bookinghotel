-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2021 lúc 03:07 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyhotel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date_in` datetime NOT NULL,
  `date_out` datetime NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `checked`
--

CREATE TABLE `checked` (
  `id` int(255) NOT NULL,
  `ref_no` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `room_id` int(255) NOT NULL,
  `name` text CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `contact_no` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `date_in` datetime NOT NULL,
  `date_out` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 =pending,\r\n1 = check in,\r\n2 = check out',
  `date_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `checked`
--

INSERT INTO `checked` (`id`, `ref_no`, `room_id`, `name`, `contact_no`, `date_in`, `date_out`, `status`, `date_update`) VALUES
(1, '9808571036', 1, 'John', '+14526-5455-44', '2021-11-10 03:29:51', '2021-11-13 09:29:52', 1, '2021-11-10 09:31:11'),
(2, '5615053826\n', 1, 'giang', '123123', '2021-11-11 00:00:00', '2021-11-12 00:00:00', 0, '2021-11-11 19:36:33'),
(4, '621615666\n', 1, 'giang', '123123', '2021-11-12 00:00:00', '2021-11-20 00:00:00', 0, '2021-11-11 19:58:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rooms`
--

CREATE TABLE `rooms` (
  `id` int(255) NOT NULL,
  `room` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `category-id` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0= available, \r\n1 = Unvailable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `category-id`, `status`) VALUES
(1, 'Room-100', 1, 0),
(2, 'Room-101', 3, 0),
(3, 'Room-500', 4, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_category`
--

CREATE TABLE `room_category` (
  `id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `img` text CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `room_category`
--

INSERT INTO `room_category` (`id`, `name`, `price`, `img`) VALUES
(1, 'PRESIDENT ROOM', 1.999, 'room1.jpg'),
(3, 'SINGLE ROOM', 250, 'room2.jpg'),
(4, 'DOUBLE ROOM', 500, 'room3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Giangadmin', 'admin', 'admin123', 1),
(2, 'giangmh', 'giang', '1', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `checked`
--
ALTER TABLE `checked`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `checked`
--
ALTER TABLE `checked`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `room_category`
--
ALTER TABLE `room_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
