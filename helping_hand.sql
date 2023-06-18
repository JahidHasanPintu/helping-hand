-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 01:44 PM
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
-- Database: `helping_hand`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(50) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `rating` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `user_name`, `message`, `rating`, `created_at`) VALUES
(1, 'hi3', 'bye4', 0, '2023-06-12 16:48:05'),
(3, 'hi there', 'this is details', 0, '2023-06-12 16:52:08'),
(4, 'pintu', 'another try', 0, '2023-06-12 16:53:38'),
(5, 'pintu', 'hi the this is another try', 0, '2023-06-12 16:59:49'),
(6, 'pintu', 'well another one', 0, '2023-06-12 17:04:41'),
(7, 'pintu', 'Ok now', 0, '2023-06-12 17:05:32'),
(8, 'pintu', 'again', 0, '2023-06-12 17:05:44'),
(9, 'pintu', 'final try', 0, '2023-06-12 17:08:08'),
(10, 'pintu', 'all is done', 0, '2023-06-12 17:12:43'),
(11, 'Mesba Uddin', 'khub e boring bepar separ', 5, '2023-06-18 10:46:53'),
(12, 'Shakil Saheb', 'Ebar kaj hobe', 1, '2023-06-18 10:49:50'),
(13, 'pintu', 'Lets hope for the best', 1, '2023-06-18 11:03:32'),
(14, 'pintu', 'ah another', 1, '2023-06-18 11:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `hire_data`
--

CREATE TABLE `hire_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `servent_id` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hire_data`
--

INSERT INTO `hire_data` (`id`, `name`, `email`, `servent_id`, `note`, `status`, `created_at`) VALUES
(1, 'mesba', 'mesba@gmail.com', 0, 'Hi there', 'pending', '2023-06-18 10:02:40'),
(2, 'mesba', 'mesba@gmail.com', 0, 'Tomake kapor dhuite hobe', 'pending', '2023-06-18 10:15:17'),
(3, 'mesba', 'mesba@gmail.com', 0, 'tomake diye ranna korabo', 'pending', '2023-06-18 10:18:28'),
(4, 'mesba', 'mesba@gmail.com', 40, 'Hi there', 'pending', '2023-06-18 10:24:25'),
(5, 'mesba', 'mesba@gmail.com', 40, 'oboseshe holo', 'pending', '2023-06-18 10:25:06'),
(6, 'mesba', 'mesba@gmail.com', 40, 'messi k diye kapur dhoaite hobe', 'pending', '2023-06-18 11:07:53'),
(7, 'mesba', 'mesba@gmail.com', 41, 'kaj korbi kaj?', 'pending', '2023-06-18 11:09:18'),
(8, 'mesba', 'mesba@gmail.com', 42, 'hi', 'pending', '2023-06-18 11:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `servents`
--

CREATE TABLE `servents` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nid_number` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `comments` text NOT NULL,
  `picture` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servents`
--

INSERT INTO `servents` (`id`, `name`, `phone`, `nid_number`, `address`, `comments`, `picture`, `created_at`) VALUES
(39, 'Shakil', '01234567', '433355665', 'Cinema', 'nayok', 'https://images.prothomalo.com/prothomalo-english/2020-05/e75d5b4b-5806-4fea-a404-2ee0eda9903d/shakil_khan.jpg?w=1200&h=675', '2023-06-17 18:23:30'),
(40, 'Messi', '94934858', '48347298347882', 'Agentina', 'Valo maner server', 'https://library.sportingnews.com/styles/twitter_card_120x120/s3/2022-12/Lionel%20Messi%20-%20World%20Cup%20Final%202022%20penalty%20celebration%20vs%20France%20-%20181222-16x9.jpg?itok=20MutOFa', '2023-06-17 18:25:16'),
(41, 'Ronaldo', '01827465', '309u2484', 'Basay', 'Good boy', 'https://a.espncdn.com/photo/2022/1130/r1099444_1296x729_16-9.jpg', '2023-06-17 19:00:57'),
(42, 'Virat Kohli', '98347585', '858343875', 'India', 'Funny', 'https://static.toiimg.com/thumb/msid-95062568,width-1280,resizemode-4/95062568.jpg', '2023-06-17 19:02:29'),
(43, 'Neyman', '019379824', '98439873', 'Brazil', 'Good acotr', 'data:image/jpeg;base64,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', '2023-06-18 11:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `mobile_number` int(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password_hash`, `mobile_number`, `address`) VALUES
('dfssf', 'adfda@example.com', '$2y$10$UyiEysRPEnU3nJZsnnG.WeYdX8D0Bc12Tr876QixCOSdKWYL6SKKq', 21554, 'asdfg'),
('okilul', 'okilul3g@gmail.com', '$2y$10$f/WUMQnn9mlTK3me5x/QkeORHB4JZKfR1XJGo40nSTz9vYjdYSyz2', 2587410, 'dsfg'),
('mesba', 'mesba@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 197456213, 'kuril'),
('pintu', 'pintu@test.com', '$2y$10$Yw9tIrprtnP6lovRPu1phOwGYWocOW4s8SlkUOW3pPrL.8sehB6K2', 632616165, 'jsnfjds'),
('df', 'df@gmail.com', '$2y$10$FVygQfRJdnHQIsy2mdSusumnBDqJLO.JbwlMW8E8rJBnoKEKFEvaS', 1234567890, 'kuril'),
('mesba', 'asad@xyz.com', '$2y$10$tWPHWGZ3gwG9NzOkaMWqGOZB/igLVtvobIj8qpkIpyI8IdsrXv6om', 1988051567, 'nagerbazer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'pintu', 'pintu@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '0'),
(2, 'kamal', 'kamalhosain0173@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0'),
(3, 'fahim', 'fahim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0'),
(4, 'sayem', 'sayem@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0'),
(5, 'rabbi', 'rabbi@out.com', '827ccb0eea8a706c4c34a16891f84e7b', '0'),
(6, 'mesba', 'mesba@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire_data`
--
ALTER TABLE `hire_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servents`
--
ALTER TABLE `servents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mobile_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hire_data`
--
ALTER TABLE `hire_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `servents`
--
ALTER TABLE `servents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
