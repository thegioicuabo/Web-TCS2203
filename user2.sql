-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220501.46b7525c53
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 03, 2022 lúc 04:10 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `user2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catego`
--

CREATE TABLE `catego` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `catego`
--

INSERT INTO `catego` (`id`, `category`, `date`) VALUES
(1, 'Music', '2022-05-02 14:12:43'),
(2, 'Fashion', '2022-05-02 14:14:16'),
(3, 'Game E-Sport', '2022-05-02 14:14:26'),
(4, 'Movie', '2022-05-02 14:14:34'),
(5, 'Sports', '2022-05-02 14:14:37'),
(6, 'Study', '2022-05-02 14:14:44'),
(7, 'Programming C++', '2022-05-02 14:16:27'),
(8, 'Cooking', '2022-05-03 13:48:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg` longtext NOT NULL,
  `commented_on` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `msg`, `commented_on`, `created_at`) VALUES
(1, 2, 'Hello', '2022-05-03', '2022-05-03 13:34:13'),
(2, 3, 'Play Football', '2022-05-03', '2022-05-03 13:34:45'),
(3, 4, 'Listen music', '2022-05-03', '2022-05-03 13:45:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply_msg` longtext NOT NULL,
  `commented_on` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment_replies`
--

INSERT INTO `comment_replies` (`id`, `user_id`, `comment_id`, `reply_msg`, `commented_on`, `created_at`) VALUES
(1, 3, 1, 'Hi', '2022-05-03', '2022-05-03 13:35:12'),
(2, 4, 1, 'HiHi', '2022-05-03', '2022-05-03 13:44:48'),
(3, 2, 2, 'Go', '2022-05-03', '2022-05-03 13:50:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `Name`, `description`, `file`, `type`, `Date`) VALUES
(1, 'Huy', 'Bruno Mars', 'Outline Example.docx ', 'Music', '2022-05-02 15:35:21'),
(2, 'Nam', 'Gucci', 'refer.txt ', 'Fashion', '2022-05-02 15:35:48'),
(3, 'Vinh', 'Dota', 'Steam.txt ', 'Game E-Sport', '2022-05-02 15:36:14'),
(4, 'Tai', 'Endgame', '2.docx ', 'Movie', '2022-05-02 15:37:32'),
(5, 'Anonymous', 'Football', '2.docx ', 'Sports', '2022-05-02 15:38:20'),
(6, 'Anonymous', 'What is Class', 'fff.doc ', 'Programming C++', '2022-05-03 13:48:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `text`) VALUES
(1, 'Post1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating_info`
--

CREATE TABLE `rating_info` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rating_info`
--

INSERT INTO `rating_info` (`user_id`, `post_id`, `rating_action`) VALUES
(5, 4, 'dislike'),
(8, 1, 'like');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `created_at`, `usertype`) VALUES
(1, 'Nam', 'nam@gmail.com', '123', '2022-05-02 14:04:16', 'admin'),
(2, 'Huy', 'huy@gmail.com', '456', '2022-05-02 14:04:33', 'user'),
(3, 'Tai', 'tai@gmail.com', '789', '2022-05-02 14:04:44', 'user'),
(4, 'Vinh', 'vinh@gmail.com', '147', '2022-05-02 14:04:54', 'user'),
(5, 'Quan', 'quan@gmail.com', '258', '2022-05-02 14:05:03', 'user'),
(6, 'author', 'author.number01@gmail.com', 'Author6666', '2022-05-02 14:06:43', 'user'),
(7, 'Thanh', 'thanh@gmail.com', '369', '2022-05-02 14:08:07', 'Q&A coordinator'),
(8, 'Hoang', 'hoang@gmail.com', '159', '2022-05-02 14:08:21', 'Q&A manager'),
(16, 'Hung', 'hung@gmail.com', '555', '2022-05-03 14:08:01', 'Q&A manager');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catego`
--
ALTER TABLE `catego`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rating_info`
--
ALTER TABLE `rating_info`
  ADD UNIQUE KEY `user_id` (`user_id`,`post_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catego`
--
ALTER TABLE `catego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



