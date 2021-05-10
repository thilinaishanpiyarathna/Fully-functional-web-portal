-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 03:07 AM
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
-- Database: `blog1`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `ID` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `text` mediumtext NOT NULL,
  `users` varchar(250) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`ID`, `title`, `keywords`, `text`, `users`) VALUES
(24, 'Harddrvie Which One IS Better', 'Python,Programming', '\r\n<p>The first HDD was imagined in 1956 by IBM supplanting the enormous and exorbitant attractive tapes and punch cards. In 1991 SunDisk organization presented the primary business SSD (Solid state head) to the market. Both capacity gadgets have cons and aces. Strong state drives are costly, quick and sturdy while the hard plate drives are reasonable, nearly moderate and less durable.  Most PC clients utilize a mix of HDD and SSD on their PCs to keep up an excessively quick speed with ease. HDD utilize attractive materials to store computerized information. Be that as it may, SSD utilize electric heartbeats to store information. \r\n\r\nIn this article you can master everything about HDD and SSD and get a legitimate information on which one to pick or which blend to utilize. </p>\r\n\r\n<h5>What is a HDD</h5> \r\n\r\n<p>A hard plate drive is a balloter mechanical information stockpiling gadget. HDD store information on quickly turning platters with attractive material coat. Computerized information is really put away as various attractive levels which can be perused by the read compose laser header of the hard plate drive.</p> \r\n\r\n<h5>HDD Speeds</h5>\r\n\r\n<p>This RPM or round every minutes shows what number of rounds your hard plate\'s plotter can pivot in a one moment. Quicker the RPM quicker your information speed is. \r\n\r\n7200 RPM is the most widely recognized plotter speed utilized in personal computers. These HDD\'s have a perused compose speed of 80-160 Megabytes for each second.  Laptop hard circles are littler in size contrasting with a work area HDD. (Not the limit) So, the common RPM of a PC hard circle is 5,400 RPM. As per the well known HDD producer Segate the 7,200 RPM HDD is 33% quicker than a 5,400 RPM HDD. \r\n\r\nHard drives or HDD are modest and the expense per capacity unit is a lot less expensive than SSDs.<p/>\r\n\r\n<h5>HDD limits</h5>\r\n\r\n<p>Scarcely any years sooner we simply had HDD\'s with gigabyte limits. In any case, today most HDD\'s have a limit over 1 terabyte. (which is 1000 Gigabytes) In 2019 the HDD with the most elevated limit of 15 terabytes (15000 GB)  was acquainted with the market. \r\n\r\nAs indicated by the researchers the limit of a human cerebrum is to some degree around 10-100 terabytes. 10 years prior nobody envisioned that we could possess a PC with a capacity limit equivalent to a human mind. We are living later on.</p>', '8'),
(26, 'Web Development', 'HTML, CSS', '\r\n<p>My journey of leaning HTML and CSS started when I was first introduced to the concept of web development by my lecturer Mr. Nisalsa. The process of building up something so advanced with using a markup language and some styling sheet fascinated me. This made me want to learn more about web development.</p>\r\n<p>Jon Duckett\'s HTML &amp; CSS: Design and Biuld Web Sites book along with the lectures helped me get a foot into the HTML language. At first it was about paragraphs, headings and breakpoints. Then it was learning more tags like tables or forms. After that I started learning about CSS. The styling sheets helps you to make a set of words in a page look like a real website. The styling started with learning about background or text colors, then adding background images and finally once it was easy it was time to learn about justifying, borders, margins and fonts.</p>\r\n<p>After the basic process was done then I got a chance with bootstrap which makes setting out the layouts and adding slide shows to everything simple. And google fonts, font awesome other online tools helped with making the website look like a real website. I am trying to improve my web development knowledge everyday as i hope to master php next. I\'ll keep you updated with my php progress.</p>', '8'),
(37, 'Ten', 'Ten', '<p>Tentacasion</p>', '8'),
(40, 'AA', 'BB', '<p>ABCD</p>', '8'),
(45, 'Test', 'Users', '<p>Heey im test</p>', '15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `api_key` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `api_key`) VALUES
(8, 'jj', 'cccc@gmail.com', '$2y$10$tilU2HNnQfhxpdPM0/sJmOGHSI/CLgs4aNimeCOYgM6ej5fLu75Ti', 12123456),
(15, 'test', 'test1@gmail.com', '$2y$10$pGZrBp83ygwXdYeb7DrOHenHxdfKEVU7YVN5rdR1H4qoCelVviYWW', 12263717),
(16, 'testwq', 'weerakoonravindu80@gmail.com', '$2y$10$tJCEQieqGq1M2zMWJ1SsbeIV/Eg1w7SxnoLdPyxCXxjQZIXKi2xiy', 11864190),
(17, 'test1', 'test11@gmail.com', '$2y$10$6WHhEOOQvGginvCIAEffMuqvjW9kReS9h4yymlpYQHkMZcUphZ5hy', 1575177),
(18, 'test2121', 'test1@gmail.com', '$2y$10$.QbFtXplfG8D7FvfT8n4z.ducCy3WORUWR15Kb7/icEUjXMcYOpKy', 6808414),
(19, 'jjf', 'dajkh@ha.ll', '$2y$10$NikZF7nF.l4wkxiIpkipW.zrsE4M7hYFKo/oDgjosmWiNQqsdDA0i', 1984030),
(20, 'jj22', 'dajkh@ha.ll', '$2y$10$2tWWjpaevRLpQZ7Zgsp02e0D1bsmH4Ko62AmuMo3j5VsHGh5MD/nu', 13523260),
(21, 'apiit1234521', 'dajkh@ha.ll', '$2y$10$uBploQECdJGi.qODahLEBuU/yVU0whhs.BnsUoJxCEMV.uSoYni02', 9121151),
(22, '33', 'dajkh@ha.ll', '$2y$10$SE.rAkv7l1BnkU2209iHyO4pb3mNHzLTNKtkqN0L8Qu3MNuLIvkuy', 3847024),
(23, 'Ravindu', 'ravindu@apiit.lk', '$2y$10$P7YR9hbhNSPGJ6c1CEBUj.gTXB3A1dRX.hlvE3p/bLuy8uOQqLKu.', 2453189),
(24, 'testravi', 'weerakoonravindu80@gmail.com', '$2y$10$Kn5DygfX2mgNPNcZt4Pfq.0tsW/1/M2vP.j03qBktVo.RORzKjnYW', 11558463),
(25, 'test123', 'weerakoonravindu80@gmail.com', '$2y$10$OVQqtxp/8bgyLeJqhSHACOPOU07P4/UKMfutSeOhJZduCvVJ.NlZ6', 9550200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
