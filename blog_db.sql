-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 08:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogger_users`
--

CREATE TABLE `blogger_users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogger_users`
--

INSERT INTO `blogger_users` (`id`, `user_id`, `first_name`, `last_name`, `email`, `mobile`, `password`) VALUES
(1, 'Anuj _1', 'Anuj', 'Kumar', 'anuj.k0204@gmail.com', '9818969739', 'c333622f5d868a808816bb65af28d73b'),
(2, 'Ashwani_2', 'Ashwani', 'Goyal', 'ashwani972886@gmail.com', '9211044990', 'cf834c18f7f2105103981010853de6bc'),
(3, 'Aqib_3', 'Aqib', 'Ali', 'aaqib3086@gmail.com', '9876543210', 'bb75f68862b4672f72fb424f42a7d8e1'),
(4, 'Priya_4', 'Priya', 'Kumari', 'priyakumari6512@gmail.com', '9876543210', 'bb2e5afb0b64013791a6269e0f3d2506'),
(5, 'Anoop_5', 'Anoop', 'Kumar', 'anoop123@gmail.com', '9876543210', '488b60b4a12584225297b56f0934b94b');

-- --------------------------------------------------------

--
-- Table structure for table `post_draft`
--

CREATE TABLE `post_draft` (
  `id` int(11) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `title_img` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `sub_category` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `quote_desc` text NOT NULL,
  `quote_author` varchar(100) NOT NULL,
  `quote_s` int(11) NOT NULL,
  `profile_s` int(11) NOT NULL,
  `comment_s` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_draft`
--

INSERT INTO `post_draft` (`id`, `post_id`, `user_id`, `title_img`, `title`, `category`, `sub_category`, `description`, `quote_desc`, `quote_author`, `quote_s`, `profile_s`, `comment_s`, `date_time`) VALUES
(1, '1_post', 'Anuj_1', '1_404_Error.png', 'First Blog', 'Food Recipes', 'Technology', '<p>Hello This is my first Blog</p>\r\n', 'Happy Navratri', 'Aqib', 1, 1, 1, '2021-10-07 21:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `tags` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `post_id`, `tags`) VALUES
(1, '1_post', 'food'),
(2, '1_post', 'travel'),
(3, '1_post', 'abc'),
(4, '1_post', 'efg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogger_users`
--
ALTER TABLE `blogger_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_draft`
--
ALTER TABLE `post_draft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogger_users`
--
ALTER TABLE `blogger_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_draft`
--
ALTER TABLE `post_draft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
