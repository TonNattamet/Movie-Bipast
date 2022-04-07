-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 02:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testabc`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(5) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'หนังฝรั่ง'),
(2, 'หนังไทย'),
(3, 'การ์ตูน'),
(4, 'หนังเกาหลี');

-- --------------------------------------------------------

--
-- Table structure for table `data_movie`
--

CREATE TABLE `data_movie` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `id_categorym` int(5) NOT NULL,
  `year` int(4) NOT NULL,
  `minute` int(6) NOT NULL,
  `img` text NOT NULL,
  `vdo_ex` text NOT NULL,
  `vdo_main` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_movie`
--

INSERT INTO `data_movie` (`id`, `name`, `id_categorym`, `year`, `minute`, `img`, `vdo_ex`, `vdo_main`) VALUES
(1, 'JohnWick3', 1, 2019, 101, 'https://play-lh.googleusercontent.com/GgjO-Q__moos5FFRqFhFEu_gLx89qmdEGdvpN1YIOZC5F_wE13dXsoxr6lZnxYquPEPH', 'M7XM597XO94', 'M7XM597XO94'),
(2, ' Who Am I', 1, 2014, 106, 'https://m.media-amazon.com/images/M/MV5BYmRiYjQ0OGQtYTAzMi00OGVjLWE4YTQtM2Q4YjBlZTBhMWM5XkEyXkFqcGdeQXVyNDk3NzU2MTQ@._V1_.jpg ', '5vnjheCqRIs', '5vnjheCqRIs'),
(3, 'Mission Impossible 6', 1, 2018, 148, 'https://upload.wikimedia.org/wikipedia/th/thumb/2/25/Mission_Impossible_Fallout_Thai_poster.jpg/1200px-Mission_Impossible_Fallout_Thai_poster.jpg', 'wb49-oV0F78', 'wb49-oV0F78'),
(4, 'The Tomorrow War', 1, 2021, 140, 'https://m.media-amazon.com/images/M/MV5BNTI2YTI0MWEtNGQ4OS00ODIzLWE1MWEtZGJiN2E3ZmM1OWI1XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_FMjpg_UX1000_.jpg', 'QPistcpGB8o\r\n', 'QPistcpGB8o\r\n'),
(5, 'Doreamon', 3, 2014, 95, 'https://www.daco-thai.com/wp-content/uploads/2021/03/Stand-by-me-Doraemon-2-01.jpg', 'oiK8ObSYRb8', 'oiK8ObSYRb8'),
(6, 'อาชญากลปล้นโลก', 1, 2016, 115, 'https://s.isanook.com/mv/0/rp/r/w850/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL212LzAvdWQvNi8zNDQ0NS9ub3cxLXNzLmpwZw==.jpg', '4oDsPN7IejE', '4oDsPN7IejE'),
(7, 'ฟรีแลนซ์ ห้ามป่วย ห้ามพัก ห้ามรักหมอ', 2, 2015, 132, 'https://upload.wikimedia.org/wikipedia/th/7/79/Heart_Attack_Poster.jpg', 'J1F9hMWnTHs', 'J1F9hMWnTHs'),
(8, 'ไอฟาย แต้งกิ้ว เลิฟยู', 2, 2014, 121, 'https://upload.wikimedia.org/wikipedia/th/a/aa/AW-POSTER-THEME-I_FINE-BIGFACE_640.jpg', 'ELFL42u8mv8', 'ELFL42u8mv8'),
(9, 'The Bad Guys Reign of Chaos', 4, 2019, 115, 'https://upload.wikimedia.org/wikipedia/en/8/83/The_Bad_Guys_-_Reign_of_Chaos.jpg', 'ZXMY2qNupIw', 'ZXMY2qNupIw');

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id_episode` int(5) NOT NULL,
  `name_episode` varchar(50) NOT NULL,
  `id_movie` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nameandtype`
--

CREATE TABLE `nameandtype` (
  `id_movie` int(5) NOT NULL,
  `id_type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(5) NOT NULL,
  `name_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `userlevel` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `userlevel`) VALUES
(1, 'Ryan', 'Ryan@gmail.com', '1234', 'm'),
(2, 'Cat', 'Cat@gmail.com', '1234', 'a'),
(3, 'Kuy', 'Kuy@gmail.com', '1234', 'm'),
(4, 'ABC', 'abc@gmail.com', '1234', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id_view` int(5) NOT NULL,
  `id_userv` int(5) NOT NULL,
  `id_moviev` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `data_movie`
--
ALTER TABLE `data_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test4` (`id_categorym`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id_episode`),
  ADD KEY `Test` (`id_movie`);

--
-- Indexes for table `nameandtype`
--
ALTER TABLE `nameandtype`
  ADD PRIMARY KEY (`id_movie`,`id_type`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id_view`),
  ADD KEY `Test2` (`id_userv`),
  ADD KEY `Test3` (`id_moviev`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_movie`
--
ALTER TABLE `data_movie`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_movie`
--
ALTER TABLE `data_movie`
  ADD CONSTRAINT `test4` FOREIGN KEY (`id_categorym`) REFERENCES `category` (`id_category`);

--
-- Constraints for table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `Test` FOREIGN KEY (`id_movie`) REFERENCES `data_movie` (`id`);

--
-- Constraints for table `view`
--
ALTER TABLE `view`
  ADD CONSTRAINT `Test2` FOREIGN KEY (`id_userv`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `Test3` FOREIGN KEY (`id_moviev`) REFERENCES `data_movie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
