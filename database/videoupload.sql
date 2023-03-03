-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 11:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videoupload`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'sassd', '2023-03-03 07:53:17'),
(2, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'mko poa sana', '2023-03-03 08:00:07'),
(3, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'mko poa sana', '2023-03-03 08:06:08'),
(4, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'mko poa sana', '2023-03-03 08:06:17'),
(5, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'nakpenda ', '2023-03-03 08:06:31'),
(6, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'sawa', '2023-03-03 08:07:18'),
(7, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'wewe', '2023-03-03 08:08:29'),
(8, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'mimi', '2023-03-03 08:26:31'),
(9, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'sasa', '2023-03-03 08:27:37'),
(10, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'message', '2023-03-03 08:31:17'),
(11, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'ssss', '2023-03-03 08:31:29'),
(12, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'ssss', '2023-03-03 08:33:36'),
(13, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'sss', '2023-03-03 08:34:08'),
(14, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'dddsdssds', '2023-03-03 08:36:42'),
(15, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'ddffdd', '2023-03-03 08:38:10'),
(16, 'mrisho', 'mrishohamisi2348@gmail.com', '0657315955', 'assa', '2023-03-03 08:38:54'),
(17, 'Sharifa said matosa', 'akramtessua@gmail.com', '0657315955', 'ss', '2023-03-03 08:41:29'),
(18, 'Sharifa said matosa', 'akramtessua@gmail.com', '0657315955', 'dfddfd', '2023-03-03 08:42:54'),
(19, 'mrisho', 'mrishohamisi2348@gmail.com', '34443', 'errerere', '2023-03-03 21:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`) VALUES
(1, 'mrishohamisi2348@gmail.com', '2023-03-03 20:53:49'),
(2, '', '2023-03-03 21:02:35'),
(3, 'mrishohamisi2001@gmail.com', '2023-03-03 21:07:06'),
(4, 'ddd', '2023-03-03 21:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `created_at`) VALUES
(1, 'mrisho ', 'mrisho@gmail.com', '22333', '2023-03-03 00:13:00'),
(2, 'kasike', 'kasike@gmail.com', '22333', '2023-03-03 00:54:29'),
(3, 'john', 'john@gmail.com', '22333', '2023-03-03 00:56:22'),
(4, 'dddddd', 'kasik@gmail.com', '22333', '2023-03-03 21:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `ID` int(11) NOT NULL,
  `video_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`ID`, `video_url`) VALUES
(1, 'video-63ffd59e5a0910.58700671.mp4'),
(2, 'video-63ffd5d8519928.67377439.mp4'),
(3, 'video-63ffd68298c085.77774850.mp4'),
(4, 'video-63ffdcc3eff081.79873494.mp4'),
(5, 'video-63ffdce4cdd316.67291996.mp4'),
(6, 'video-63ffe59042dd84.00469733.mp4'),
(7, 'video-63ffe8502c5b61.99555176.mp4'),
(8, 'video-63ffe8634a6094.62610864.mp4'),
(9, 'video-63ffe873785d48.91885405.mp4'),
(10, 'video-63ffebce7a7015.49365536.mp4'),
(11, 'video-64011f8e0f3ff3.43881854.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
