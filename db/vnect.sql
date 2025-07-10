-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 11:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `field1` varchar(225) NOT NULL,
  `field2` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `program_id`, `field1`, `field2`) VALUES
(34, 26, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `author_id` int(255) NOT NULL,
  `Program` varchar(225) NOT NULL,
  `orgName` varchar(225) NOT NULL,
  `firstName` varchar(225) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `contact` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `time1` time NOT NULL,
  `location` varchar(225) NOT NULL,
  `program_image` varchar(255) NOT NULL,
  `locDscrptn` varchar(225) NOT NULL,
  `response_limit` int(11) NOT NULL,
  `Scope` text NOT NULL,
  `ageReq` int(12) NOT NULL,
  `skills` text NOT NULL,
  `current_responses` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `author_id`, `Program`, `orgName`, `firstName`, `lastName`, `email`, `contact`, `date`, `time`, `time1`, `location`, `program_image`, `locDscrptn`, `response_limit`, `Scope`, `ageReq`, `skills`, `current_responses`) VALUES
(21, 24, 'test1', 'test1', 'nyenye', 'neye', 'newepej108@onlcool.com', 2147483647, '2023-08-17', '838:59:59', '23:11:00', '124, Zone 2 Ombao Heights Bula, Camarines Sur', '1691061159357344388_1297194321181519_7610644114409133170_n.jpg', 'ksldhakdhadausdha uihuahdasuidh', 2, 'dkjfaksldjfaijdfaio idjfia;jdfaiosd', 23, 'dkjasdkajdhakjdhsa', 2),
(22, 24, 'test2', 'test2', 'VINCENT', 'CORALDE', 'coraldevincent1@gmail.com', 2147483647, '2023-08-04', '838:59:59', '19:18:00', '124, Zone 2 Ombao Heights Bula, Camarines Sur', '1691061341357650112_1439514433468775_7729224554880197405_n.jpg', 'askdkajhdjakhdaksh kadhaksdhak', 2, 'dkfnkdasfjkasdfkasdjhfkahdfa', 23, 'kjhfakdhfakjdhfak jdahfjkashdfjad', 2),
(23, 24, 'test3', 'test3', 'Vince', 'Stock', 'test3@gmail.com', 912324666, '2023-08-04', '838:59:59', '19:17:00', '124, Zone 2 Ombao Heights Bula, Camarines Sur', '1691061450357650112_1439514433468775_7729224554880197405_n.jpg', 'dkljfksjdfahduih ahdfajlsdhflaks', 8, 'kjadfhaksjdhjfadhjfia jdkfhkajsd', 23, 'kjsakdjaskjdasjdai ', 8),
(24, 0, 'test4', 'test4', 'VINCENT', 'CORALDE', 'coraldevincent1@gmail.com', 2147483647, '2023-08-11', '18:01:47', '12:01:00', '124, Zone 2 Ombao Heights Bula, Camarines Sur', '1691078507357631904_1361848631059144_915115755662934341_n.jpg', 'kadhkjfhadjkhfakdjfakdf,adfasdnf aakldfakl', 2, 'fkalsdfjklajdfkaj kadhfkasdhfakjdhf', 23, 'dklfjaldjfkadhfjadhfajkds', 2),
(25, 0, 'test5', 'test5', 'Carlos', 'Salcedo', 'wihepab473@onlcool.com', 2147483647, '2023-08-18', '18:06:00', '00:10:00', '124, Zone 2 Ombao Heights Bula, Camarines Sur', '16910788182X2 (1).jpg', 'dkfjaksdfjad dahfjahdfakjsdhfakjs', 2, 'dfalskdfklajd adfhashfdjadks', 23, 'dkjafkldjfa jdhafjasdhfalhdl', 2),
(26, 24, 'test6', 'test6', 'VINCENT', 'CORALDE', 'test2@gmail.com', 2147483647, '2023-08-24', '19:56:00', '14:22:00', '124, Zone 2 Ombao Heights Bula, Camarines Sur', '1691171802EgQ91AdXYAET3Mp.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as oppo', 8, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English.', 22, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English.', 8),
(27, 24, 'test7', 'test7', 'Vince', 'Stock', 'coraldevincent@gmail.com', 912324666, '2023-01-02', '00:00:00', '15:33:00', '124, Zone 2 Ombao Heights Bula, Camarines Sur', '16911784921.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to m', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 23, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(24, 'test7', 'coraldevincent@gmail.com', '$2y$10$W.XqyCvVbLDf/naLOHMvve39dmFiy08KTDT8Onrxeb5rNoZYgsX1i', 'Organization'),
(26, 'admin', 'roy@m.com', '$2y$10$DUGs4dUwTOAknlw1PC8NN.Rig0Ra/4Ccsn7GhlIaPO3DsMj2ZUIBu', 'Volunteer'),
(32, 'test3', 'test3@gmail.com', '$2y$10$ilizsGKwFvi15DvcKQr7d.xdnCo8dzZVanhbkA8BMZz/Kfa2JN9qG', 'Organization'),
(33, 'test4', 'test4@gmail.com', '$2y$10$soWlKpnrtPJFxeVTrJ3u.utIvvUQhm5Ly2dUfQNwWYZIvcQgpMpia', 'Organization'),
(34, 'test2', 'test2@gmail.com', '$2y$10$d08dKRnQOmD8yZuUTJFR4ugD7dmv41aD6poUG3hr6rlyE8Te7sbL2', 'Volunteer'),
(35, 'Cj_Potato', 'cjtheoddpotato@gmail.com', '$2y$10$Db9B7Kq5iQJgLUu5RGP9.eWeSz0yUNqvVV0Ut8pso8uw8vFHcxQGi', 'Volunteer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form`
--
ALTER TABLE `form`
  ADD CONSTRAINT `form_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
