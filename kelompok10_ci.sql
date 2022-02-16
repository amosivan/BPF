-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2021 at 11:07 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok10_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `total_days` varchar(8) NOT NULL,
  `total_price` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `id_user`, `id_hotel`, `date1`, `date2`, `total_days`, `total_price`) VALUES
(14, 11, 24, '2021-07-20', '2021-07-23', '2', '389230'),
(15, 12, 15, '2021-07-26', '2021-07-26', '1', '435524'),
(16, 12, 22, '2021-07-22', '2021-07-23', '1', '269887');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `address` varchar(512) NOT NULL,
  `price` int(128) NOT NULL,
  `photo` varchar(128) NOT NULL DEFAULT 'hotel.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `address`, `price`, `photo`) VALUES
(15, 'Arya Duta', 'Jl. Diponegoro No. 34, Pekanbaru City Center, Pekanbaru, Indonesia, 28116', 435524, 'aryaduta.jpeg'),
(16, 'FOX Hotel Pekanbaru', 'Jalan Riau 147, Pekanbaru City Center, Pekanbaru, Indonesia, 28154', 364352, 'foxhotel.jpeg'),
(21, 'Novotel', 'JALAN RIAU NO. 59 Pekanbaru, Pekanbaru City Center, Pekanbaru, Indonesia, 28154', 472529, 'novotel.jpeg'),
(22, 'Pesonna Hotel Pekanbaru', 'Jalan Jenderal Sudirman No 455 Pekanbaru 28116 Riau Indonesia, Pekanbaru City Center, Pekanbaru, Indonesia, 28116', 269887, 'pesona.jpeg'),
(23, 'favehotel Pekanbaru', 'Jalan Pinang, Pekanbaru City Center, Pekanbaru, Indonesia, 28125 ', 259200, 'favehotel.jpeg'),
(24, 'Whiz Hotel Sudirman Pekanbaru', 'Jendral Sudirman 345, Pekanbaru City Center, Pekanbaru, Indonesia, 28111', 194615, 'whiz.jpeg'),
(27, 'test', 'test', 123, 'hotel.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `total_cost` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_booking`, `id_user`, `id_hotel`, `total_cost`) VALUES
(7, 16, 12, 22, '269887'),
(8, 16, 12, 22, '269887');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `profile_picture` varchar(256) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `no_hp` int(16) NOT NULL,
  `role` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `profile_picture`, `name`, `email`, `password`, `no_hp`, `role`) VALUES
(10, 'default.jpg', 'Amos Ivan Nugraha', 'amos@gmail.com', '$2y$10$JUeXv3Ox9xpcwuDrmXUESemYH0pkW0MtyG8OSNJR.1WNa4S3Sjq.y', 2147483647, 'Admin'),
(11, 'default.jpg', 'Ibnu Muchda', 'ibnu@gmail.com', '$2y$10$xhUc5T3q4yCnFFeIXTPxquKWwZn7ZX78qV7ANtY3izw8OUWGr8wiK', 2147483647, 'User'),
(12, 'default.jpg', 'Danil Ardinata', 'danil@gmail.com', '$2y$10$DqkU33opWvtYLqhMjCJ2qeganhin0Yix/85y.fbsxcOPgDsRk3TEC', 2147483647, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel` (`id_hotel`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user1` (`id_user`),
  ADD KEY `hotel1` (`id_hotel`),
  ADD KEY `booking` (`id_booking`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotels` (`id`),
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `booking` FOREIGN KEY (`id_booking`) REFERENCES `bookings` (`id`),
  ADD CONSTRAINT `hotel1` FOREIGN KEY (`id_hotel`) REFERENCES `hotels` (`id`),
  ADD CONSTRAINT `user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
