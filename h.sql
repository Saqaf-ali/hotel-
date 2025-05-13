-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 11:40 AM
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
-- Database: `h`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(10) NOT NULL,
  `ro_id` int(10) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `date_arr` date NOT NULL DEFAULT current_timestamp(),
  `date_dep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `ro_id`, `f_name`, `l_name`, `phone`, `date_arr`, `date_dep`) VALUES
(8, 3, 'Hala', 'Abdo AL-Ghani', 771777777, '2023-05-14', '2023-05-17'),
(9, 1, 'Saqaf', 'AL-Shuabi', 775082462, '2023-05-18', '2023-05-23'),
(10, 3, 'ahmed', 'abdu', 774321456, '2023-05-15', '2023-05-16'),
(12, 3, 'Osama', 'AL-Youssefy', 777228899, '2023-05-16', '2023-05-30'),
(14, 29, 'hamed', 'AL-Qadri', 775441445, '2023-05-15', '2023-05-20'),
(15, 25, 'Abdu', 'AL-Ghafar', 777777111, '2023-05-13', '2023-05-16'),
(16, 30, 'Hala', 'Abdo AL-Ghani', 777777777, '2023-05-20', '2023-05-22'),
(17, 27, 'Osama', 'AL-Youssefy', 2147483647, '2023-05-15', '2023-05-17'),
(18, 27, 'Hala', 'Abdo AL-Ghani', 777777777, '2023-05-18', '2023-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ro_id` int(11) NOT NULL,
  `ro_type` varchar(40) NOT NULL,
  `ro_price` int(10) NOT NULL,
  `ro_img1` varchar(200) NOT NULL COMMENT 'image folder',
  `ro_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ro_id`, `ro_type`, `ro_price`, `ro_img1`, `ro_desc`) VALUES
(1, 'Suite', 40, '64603a3708122.jpg', '       This room features a large bed and a seating area with city views.'),
(3, 'Standard room', 122, '6460d691eab37.jpg', '        This room features a large bed and a seating area with city views.'),
(15, 'Deluxe room', 320, '64616e136a264.png', '         This room features a large bed and a seating area with city views.'),
(24, 'Family room', 130, '64616ee69d34c.jpg', '          This room features a large bed and a seating area with city views.'),
(25, 'Family room', 130, '64616f02f02de.jpg', '          This room features a large bed and a seating area with city views.'),
(26, 'Penthouse suite', 244, '64624c7cee7ae.jpg', '               This room features a large bed and a seating area with city views.'),
(27, 'Suite', 110, '64624aedcc335.jpg', '           This room features a large bed and a seating area with city views.'),
(28, 'Standard room', 95, '64624b2f753cb.jpg', '          This room features a large bed and a seating area with city views.'),
(29, 'Suite', 400, '64624b8b0b626.jpg', '           This room features a large bed and a seating area with city views.'),
(30, 'Family room', 210, '64624c0c792a1.jpg', '               This room features a large bed and a seating area with city views.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_img`) VALUES
(1, '', 'saqaf', '646167ecddb7f.jpg'),
(26, 'hala', 'hala', '64615fab38f48.jpg'),
(27, '', 'ali', '646167509975d.jpg'),
(28, '', 'nora', '64616824ba0fd.jpg'),
(29, 'lmar', 'lmar', '6461671b09cd2.jpg'),
(30, 'lara', 'lara', '646168ac7099f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ro_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
