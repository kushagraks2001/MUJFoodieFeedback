-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 12:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foody`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `FID` int(30) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `cafe` varchar(20) NOT NULL,
  `stars` int(11) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`FID`, `feedback`, `cafe`, `stars`, `phone`) VALUES
(1, '', '', 0, 2147483647),
(2, 'Chicken tikka boneless biryani was simply amazing ! such a superb blend of spices and what not !!', 'bade-miyan', 5, 2147483647),
(3, 'The white sauce pasta here is sooo underrated !! guyz must try this out !!', 'aladeen', 5, 2147483647),
(4, 'chicken tikka dum biryani \"was\" great now not gonna try this out at all', 'zaika', 1, 2147483647),
(5, 'Veg Maggie should be i guess a bit more cheap or they should use more veggies', 'lets-go-live', 2, 2147483647),
(6, 'Worst experience ever', 'tandoor', 1, 890775432),
(15, 'Amritsari Kulche is worth it must give it a try!', 'zaika', 5, 2147483647),
(26, 'Your Feedback goes here.', 'zaika', 1, 6758790),
(27, 'Your Feedback goes here.', 'lets-go-live', 5, 1234567899),
(28, 'Your Feedback goes here.', 'dialog', 5, 92183748),
(29, 'Green Apple Mojito is a bit too over`priced not worth it but the pizzas are value for money here.', 'dialog', 4, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`FID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `FID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
