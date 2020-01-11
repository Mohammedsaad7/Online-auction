-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 02:21 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `adminid` int(11) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`adminid`, `email`, `pass`) VALUES
(1, 'saad@mail.com', '1222'),
(2, 'tara@mail.com', '1333'),
(3, 'than@mail.com', '1444');

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `prod_id` int(11) NOT NULL,
  `prodname` text NOT NULL,
  `category` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL,
  `last_date` date NOT NULL,
  `approve` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`prod_id`, `prodname`, `category`, `details`, `image`, `last_date`, `approve`) VALUES
(1, 'Sony Xperia Z', 'Mobile Phone', 'This is a xperia phone', '530201353846AM_635_sony_xperia_z.png', '2020-01-01', 1),
(2, 'Samsung galaxy note 3', 'Mobile phone', 'Samsung Galaxy Note 3 is powered by a 1.9GHz octa-core processor. It comes with 3GB of RAM.', 'samsung_galaxy_note3.jpg', '2020-02-01', 1),
(3, 'Contraption', 'Furniture', 'This is a contraption made out of wood for storing books.', '1574273403_asian-furniture-250x250.jpg', '2019-12-12', 1),
(4, 'Windows Laptop', 'Laptops', 'Windows Laptop', '12039452_525963140912391_6353341236808813360_n.png', '2020-01-01', 1),
(5, 'T V stand', 'Furniture', 'Good sturdy stand that has been brought only six months ago', '1575470008_download.jpg', '2020-01-12', 1),
(6, 'Playstation 4', 'Gadget', 'Dont use it anymore..so anyone interested can bid for it', '1575470395_download (1).jpg', '2019-12-10', 1),
(7, 'Bed Cot', 'Furniture', 'Found a new one..so trying to sell this', '1575471375_download (2).jpg', '2019-12-18', 1),
(8, 'Vintage Boots', 'Clothing', 'classic vintage boots that i grew out of..but happy to see someone else use it', '1575472186_download (3).jpg', '2020-02-27', 1),
(9, 'Redmi note 5 pro', 'Mobile Phone', 'almost brand new, new software, good camera quality, all features work fine', '1575472524_download (4).jpg', '2019-12-09', 1),
(10, 'Kindle Ebook reader', 'gadget', 'dont use it much, works as brand new, loads of books already downloaded.', '1575472719_download (5).jpg', '2020-02-17', 1),
(11, 'Tamatina Wall Painting', 'Furniture', 'A colorful picture will look great on a living room or bedroom wall, but sadly i am moving so gotta give this away', '1575472895_download (6).jpg', '2020-01-15', 1),
(12, 'Gothic Vintage Clock', 'Clocks', 'A beautiful addition to a classic house, Gothic style with modern designs infused', '1575475146_download (7).jpg', '2019-10-15', 1),
(13, 'Antique clock', 'Clocks', 'Rustic clock, have it since the 1980\'s. wanted to give this to someone who really would appreciate it', '1575475214_images (1).jpg', '2019-01-17', 1),
(14, 'Violin', 'Instuments', 'This a Two month old violin with two sets of bows, and a case included', '1575475277_download (8).jpg', '2019-12-31', 1),
(15, 'Schoenhut Piano', 'Instruments', 'Beautiful Piano smaller than a grand but the quality is awesome', '1575475434_schoenhut download (9).jpg', '2020-01-24', 1),
(16, 'Cupboard', 'Furniture', 'sleek design ,perfect for modern homes', '1575475495_download (9).jpg', '2020-01-25', 1),
(17, 'Cupboard', 'Furniture', 'white laminated with loads of storage with secret cabins', '1575475558_download (10).jpg', '2019-12-19', 1),
(18, 'qwq', 'fdsa', 'This is a test ', '1575525817_WhatsApp Image 2019-10-08 at 11.53.46.jpeg', '2019-12-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bidd`
--

CREATE TABLE `bidd` (
  `userid` int(11) NOT NULL,
  `prodid` int(11) NOT NULL,
  `request` text NOT NULL,
  `bidamt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidd`
--

INSERT INTO `bidd` (`userid`, `prodid`, `request`, `bidamt`) VALUES
(1, 4, 'I want this', 1300),
(6, 5, 'Good furniture need it ASAP', 10000),
(7, 6, 'I badly need this', 5000),
(7, 2, 'just wanted to bid', 4000),
(7, 4, 'want this one too', 6000),
(8, 1, 'need this', 4000),
(8, 3, 'not a bad piece of furniture would like to buy it', 6000),
(9, 7, 'this is a new addition to my new house', 5000),
(9, 1, 'just need this', 4500),
(6, 7, 'this is awesome', 6000),
(5, 6, 'gotta have this in my dope den', 7000),
(9, 8, 'OMG!!  love these boots', 4500),
(10, 6, 'soo need this right now', 9000),
(8, 2, 'this is not so bad', 5000),
(6, 9, 'interested in buying it', 3000),
(5, 10, 'intersted', 4000),
(1, 11, 'I need this painting.', 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `useid` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`useid`, `username`, `email_id`, `password`) VALUES
(1, 'saad', 'saad@mail.com', '1234'),
(2, 'tara', 'tara@mail.com', '2345'),
(3, 'than', 'than@mail.com', '3456'),
(4, 'saad1', 'saad1@mail.com', '4567'),
(5, 'Sree', 'sree@mail.com', 'sree123'),
(6, 'Varsha', 'varsha@mail.com', 'varsha'),
(7, 'Disha', 'Disha@mail.com', 'disha'),
(8, 'Zeeshan', 'zee@mail.com', 'zee'),
(9, 'Camilla', 'cam@mail.com', 'cam'),
(10, 'Sankit', 'Sankit@mail.com', 'sankit'),
(11, 'Shipra', 'shipi@mail.com', 'shipra'),
(12, 'raj', 'raj@mail.com', '7777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `bidd`
--
ALTER TABLE `bidd`
  ADD KEY `userid` (`userid`),
  ADD KEY `bidd_ibfk_2` (`prodid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`useid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `useid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bidd`
--
ALTER TABLE `bidd`
  ADD CONSTRAINT `bidd_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`useid`),
  ADD CONSTRAINT `bidd_ibfk_2` FOREIGN KEY (`prodid`) REFERENCES `auction` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
