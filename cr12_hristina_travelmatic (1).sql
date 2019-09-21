-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2019 at 08:01 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr12_hristina_travelmatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `concertId` int(11) UNSIGNED NOT NULL,
  `concertName` varchar(500) DEFAULT NULL,
  `concertImage` varchar(1000) DEFAULT NULL,
  `concertDate` datetime DEFAULT NULL,
  `concertPrice` decimal(10,2) DEFAULT NULL,
  `concertAddress` varchar(500) NOT NULL,
  `concertVenue` varchar(500) NOT NULL,
  `concertWeb` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`concertId`, `concertName`, `concertImage`, `concertDate`, `concertPrice`, `concertAddress`, `concertVenue`, `concertWeb`) VALUES
(1, 'Elina Duni & Rob Luft Duo', 'https://www.wien-ticket.at/tools/imager/imager.php?file=%2Fmedia%2Fimage%2Foriginal%2F16781.jpg&width=1500', '2019-10-18 00:00:00', '22.00', 'Riemergasse 11, 1010 Wien', 'Porgy & Bess', 'https://www.wien-ticket.at/en/events/65932/'),
(2, 'Diknu Schneeberger Trio feat. Christian Bakanic', 'https://www.wien-ticket.at/tools/imager/imager.php?file=%2Fmedia%2Fimage%2Foriginal%2F16403.jpg&width=1500', '2019-12-17 00:00:00', '26.00', 'Goldschlagstrasse 169, 1140 Wien', 'Sargfabrik', 'https://www.wien-ticket.at/en/events/65218'),
(3, 'Harri Stojka India Express', 'https://www.wien-ticket.at/tools/imager/imager.php?file=%2Fmedia%2Fimage%2Foriginal%2F16913.jpg&width=1500', '2019-11-06 00:00:00', '31.30', 'Hernalser Hauptstrasse 55, 1170 Wien', 'Wiener Metropol', 'https://www.wien-ticket.at/en/events/66929'),
(4, 'Carmen Souza', 'https://www.wien-ticket.at/tools/imager/imager.php?file=%2Fmedia%2Fimage%2Foriginal%2F16686.jpg&width=720', '2019-11-27 00:00:00', '22.60', 'Riemergasse 11, 1010 Wien', 'Porgy & Bess', 'https://www.wien-ticket.at/en/events/65646/');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurantId` int(11) UNSIGNED NOT NULL,
  `restaurantName` varchar(500) DEFAULT NULL,
  `restaurantImage` varchar(1000) DEFAULT NULL,
  `restaurantType` varchar(100) DEFAULT NULL,
  `restaurantDescription` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `restaurantTel` varchar(100) DEFAULT NULL,
  `restaurantWeb` varchar(1000) DEFAULT NULL,
  `restaurantAddress` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurantId`, `restaurantName`, `restaurantImage`, `restaurantType`, `restaurantDescription`, `restaurantTel`, `restaurantWeb`, `restaurantAddress`) VALUES
(2, 'ALL REIS', 'https://www.mobilitylounge.com/reisen/wp-content/uploads/2018/12/allreis4.jpg', '#Asian #Thai', 'All Reis is a food sensation in the 15th district, that is already a favourite for those in the know in Vienna.', '01 7864668', 'https://www.allreis.com/', 'SchweglerstraÃŸe 12, 1150 Vienna'),
(3, 'CafÃ© Ansari', 'https://lokalfuehrer.stadtbekannt.at/wp-content/uploads/2016/08/Cafe-Ansari-Lokal-Bar-Tische-c-STADTBEKANNT.jpg', '#Georgian', 'CafÃ© Ansari offers a combination of Mediterranean, Georgian and international cuisine', '01 7864668', 'https://cafeansari.at/', 'PraterstraÃŸe 15, 1020 Vienna'),
(4, 'Plachutta', 'https://1.bp.blogspot.com/-8gX6dj_YNRg/WHd092VcmyI/AAAAAAAAvJA/uX52iC1lcWAddOh28uY3Q6g1DztjLtPCwCLcB/s1600/IMG_7887.JPG', '#Austrian', 'Smart venue for Tafelspitz boiled beef & other classics of Viennese cuisine.', '01 5121577', 'https://www.plachutta-wollzeile.at/', 'Wollzeile 38, 1010 Vienna'),
(5, 'Restaurant Mill', 'http://www.mill32.at/typo3temp/pics/fdf2118d8f.jpg', '#Austrian #European', 'Eclectic contemporary dining room with outside seating, candlelit tables & a modern global menu.', '01 9664073', 'http://www.mill32.at/', 'Millergasse 32, 1060 Vienna'),
(9, 'Das Augustin', 'https://1000things.b-cdn.net/wp-content/uploads/augustin-fb-teaser.jpg', '#European', 'Comfortable environment and delicious meals. If you want to enjoy the breakfast time, please do not miss this place.', '01 9821364', 'http://www.das-augustin.at/', 'MÃ¤rzstraÃŸe 67, 1150 Wien');

-- --------------------------------------------------------

--
-- Table structure for table `sigtseeingPlaces`
--

CREATE TABLE `sigtseeingPlaces` (
  `sightseeingId` int(11) UNSIGNED NOT NULL,
  `sightseeingName` varchar(500) DEFAULT NULL,
  `sightseeingImage` varchar(1000) DEFAULT NULL,
  `sightseeingType` varchar(100) DEFAULT NULL,
  `sightseeingDescription` varchar(1000) DEFAULT NULL,
  `sightseeingWeb` varchar(1000) DEFAULT NULL,
  `sightseeingAddress` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sigtseeingPlaces`
--

INSERT INTO `sigtseeingPlaces` (`sightseeingId`, `sightseeingName`, `sightseeingImage`, `sightseeingType`, `sightseeingDescription`, `sightseeingWeb`, `sightseeingAddress`) VALUES
(1, 'St. Charles Church', 'http://www.karlskirche.at/images/karlskirche.jpg', '#church', 'Widely considered the most outstanding baroque church in Vienna, as well as one of the city&#39;s greatest buildings.', 'https://www.wien.info/en/sightseeing/sights/from-g-to-k/st-charles-church', 'Karlsplatz 1, 1010 Vienna'),
(2, 'KunstHausWien', 'https://www.hundertwasser-kalender.de/WebRoot/Store22/Shops/62420907/54ED/E3E8/3FA7/6338/5C97/C0A8/2BB9/B55F/AK-029_KunstHausWien_01_ml.jpg', '#museum #gallery', 'The KunstHausWien is a museum in Vienna, designed by the artist Friedensreich Hundertwasser. ', 'https://www.kunsthauswien.com/en/', 'Untere WeiÃŸgerberstraÃŸe 13, 1030 Vienna'),
(3, 'Stadtpark City Park', 'https://www.wien.gv.at/umwelt/parks/anlagen/images/stadtpark.jpg', '#park', 'The City Park in Vienna meets every expectation of an \"artificial landscape in the city\". ', 'https://www.wien.gv.at/english/environment/parks/stadtpark.html', 'Parkring 1, 1010 Vienna'),
(4, 'SchÃ¶nbrunn Palace', 'https://www.schoenbrunn.at/fileadmin/_processed_/d/7/csm_Ehrenhof_Brunnen_Ost__4__e01ccf3caf.jpg', '#palace #museum #park', 'The Palace was the main summer residence of the Habsburg rulers. It is one of the most important historic monuments in the country. ', 'https://www.schoenbrunn.at/en/', 'SchÃ¶nbrunner SchloÃŸstraÃŸe 47, 1130 Vienna'),
(5, 'MuseumsQuartier', 'https://www.leopoldmuseum.org/media/image/c950x576/360.jpg', '#museum', 'The MuseumsQuartier (MQ) is one of the largest cultural quarters in the world. ', 'https://www.mqw.at/en/', 'Museumsplatz 1, 1070 Wien');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `userRole`) VALUES
(3, 'tina', 'tina@gmail.com', '57d4c56c312a498bc432a501e2599406f0a0240c554ee043394d7d0eabe3a8f7', 1),
(4, 'johannes', 'johannes@gmail.com', '1d4b41c9db9172e5f151e4a5fe3c57ca3f98b8e6ba807450b10d1897c84ce72b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`concertId`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurantId`);

--
-- Indexes for table `sigtseeingPlaces`
--
ALTER TABLE `sigtseeingPlaces`
  ADD PRIMARY KEY (`sightseeingId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `concertId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurantId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sigtseeingPlaces`
--
ALTER TABLE `sigtseeingPlaces`
  MODIFY `sightseeingId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
