-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 04:20 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE IF NOT EXISTS `box` (
`id` int(5) NOT NULL,
  `idUser1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
`id` int(11) NOT NULL,
  `addedby` varchar(100) NOT NULL,
  `requested` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `hadi` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `addedby`, `requested`, `status`, `hadi`) VALUES
(40, 'mh.himel', 'thuaha.hadi', 'accepted', 0),
(41, 'thuaha.hadi', 'mh.himel', 'accepted', 0),
(42, 'ga.hamim', 'thuaha.hadi', 'accepted', 0),
(43, 'thuaha.hadi', 'ga.hamim', 'accepted', 0),
(44, 'dalia.rahman', 'thuaha.hadi', 'accepted', 0),
(46, 'dalia.rahman', 'mh.himel', 'pending', 1),
(47, 'thuaha.hadi', 'thuaha.hadi', 'pending', 1),
(48, 'mh.himel', 'dalia.rahman', 'pending', 0),
(49, 'mh.himel', 'dalia.rahman', 'pending', 0),
(50, 'mh.himel', 'dalia.rahman', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gau_foststar`
--

CREATE TABLE IF NOT EXISTS `gau_foststar` (
`id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `rate` int(11) NOT NULL,
  `dt_rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gau_foststar`
--

INSERT INTO `gau_foststar` (`id`, `id_post`, `ip`, `rate`, `dt_rated`) VALUES
(1, 76, 'thuaha.hadi', 4, '2018-07-26 05:37:17'),
(2, 74, 'thuaha.hadi', 4, '2018-07-26 05:37:17'),
(3, 73, 'thuaha.hadi', 4, '2018-07-26 05:37:17'),
(4, 72, 'thuaha.hadi', 4, '2018-07-26 05:37:17'),
(5, 77, 'thuaha.hadi', 1, '2018-07-26 05:37:17'),
(6, 70, 'thuaha.hadi', 4, '2018-07-26 05:37:17'),
(7, 77, 'mh.himel', 4, '2018-07-26 06:28:33'),
(8, 76, 'mh.himel', 3, '2018-07-26 06:28:33'),
(9, 74, 'mh.himel', 3, '2018-07-26 06:28:33'),
(10, 73, 'mh.himel', 3, '2018-07-26 06:28:33'),
(11, 72, 'mh.himel', 3, '2018-07-26 06:28:33'),
(12, 70, 'mh.himel', 3, '2018-07-26 06:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `hadi`
--

CREATE TABLE IF NOT EXISTS `hadi` (
`id` int(225) NOT NULL,
  `user` varchar(100) NOT NULL,
  `home` varchar(11) NOT NULL,
  `first` varchar(25) NOT NULL,
  `second` varchar(25) NOT NULL,
  `third` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hadi`
--

INSERT INTO `hadi` (`id`, `user`, `home`, `first`, `second`, `third`) VALUES
(2, 'thuaha.hadi', 'public', '', '', ''),
(3, 'dalia.rahman', 'public', '', '', ''),
(4, 'ga.hamim', 'public', '', '', ''),
(5, 'mh.himel', 'tracker', '', '', ''),
(6, 'sakib.ahmed', 'public', '', '', ''),
(7, 'sadi.mahmud', 'public', '', '', ''),
(8, 'k.m.shariar', 'public', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(225) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `user` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `bday` varchar(100) NOT NULL,
  `profilepic` varchar(500) NOT NULL,
  `coverphoto` varchar(500) NOT NULL,
  `bio` varchar(250) NOT NULL,
  `experiences` varchar(200) NOT NULL,
  `primary_school` varchar(100) NOT NULL,
  `high_school` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `graduation_college` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `art_and_enter` varchar(200) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `home_city` varchar(100) NOT NULL,
  `home_country` varchar(100) NOT NULL,
  `home_contact` varchar(15) NOT NULL,
  `office_contact` varchar(15) NOT NULL,
  `sub_email` varchar(50) NOT NULL,
  `link` varchar(500) NOT NULL,
  `verified` varchar(200) NOT NULL,
  `real_time` datetime NOT NULL,
  `join_time` varchar(50) NOT NULL,
  `update_time` varchar(25) NOT NULL,
  `security_que` varchar(500) NOT NULL,
  `security_ans` text NOT NULL,
  `search_name` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `user`, `email`, `password`, `gender`, `address`, `city`, `country`, `contact`, `bday`, `profilepic`, `coverphoto`, `bio`, `experiences`, `primary_school`, `high_school`, `college`, `graduation_college`, `work`, `art_and_enter`, `home_address`, `home_city`, `home_country`, `home_contact`, `office_contact`, `sub_email`, `link`, `verified`, `real_time`, `join_time`, `update_time`, `security_que`, `security_ans`, `search_name`) VALUES
(33, 'Thuaha', ' Hadi', 'thuaha.hadi', 'a@a.com', 'a', 'Male', 'Mirabazaar', 'sylhet', 'Bangladesh', '01996929809', '03-03-1998', 'bin/access/images/member/profile/21272266_2008467559390565_7635412148207675126_n.jpg', 'bin/access/images/member/cover/bloom-blossom-close-up-36764.jpg', 'I am a simple man ', 'Web developer', 'Mandibag GP school', 'Shahjalal Uposhahar High school', 'Blue bird s&c', 'dakshin surma', 'bangladesh', 'picture artist', 'Uposhahar', 'sylhet', 'Andorra', '01789278100', '01833084652', 'tuahahadi@gmail.com', '', '', '2021-03-09 16:16:27', '', '2018-07-24', '', '', 'Thuaha  Hadi'),
(34, 'H.S. Dalia', 'Dalia', 'dalia.rahman', '1@1.com', '1', 'Female', '', '', 'United Kingdom', '', '', 'bin/access/images/member/profile/DSC0000007.jpg', 'bin/access/images/member/cover/auto/cover.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-07-23 22:28:14', '', '2018-07-17 14:12:24', '', '', ''),
(35, 'G.A', 'Hamim', 'ga.hamim', '2@2.com', '2', 'Male', '', '', 'United States of America', '', '', 'bin/access/images/member/profile/284abb2acff9fb10e3d31009f15c8be7_XL.jpg', 'bin/access/images/member/cover/auto/cover.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-07-22 13:26:37', '', '2018-07-17 14:12:24', '', '', ''),
(36, 'Himel', 'Mahmud', 'mh.himel', 'b@b.com', 'b', 'Male', '', '', 'Bangladesh', '', '', 'bin/access/images/member/profile/Photo0387.jpg', 'bin/access/images/member/cover/auto/cover.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-03-09 01:47:48', '', '2021-03-09', '', '', ''),
(37, 'Sakib', 'Ahmed', 'sakib.ahmed', 'z@z.com', 'z', 'Male', '', '', 'Bangladesh', '', '', 'bin/access/images/member/profile/auto/profile.jpg', 'bin/access/images/member/cover/auto/cover.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-07-17 15:13:52', '2018-07-17 09:58:55', '2018-07-17 14:12:24', '', '', ''),
(38, 'Thuaha', 'Hadi', 'sadi.mahmud', '3@3.com', '3', 'Male', '', '', 'Bangladesh', '', '', 'bin/access/images/member/profile/auto/profile.jpg', 'bin/access/images/member/cover/auto/cover.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-07-24 07:43:26', '2018-07-24 07:43:26', '', '', '', 'Sadi Mahmud'),
(39, 'Kazi', 'Ahmed', 'k.m.shariar', '4@4.com', '1', 'Male', '', '', 'Bangladesh', '', '', 'bin/access/images/member/profile/auto/profile.jpg', 'bin/access/images/member/cover/auto/cover.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-07-24 15:20:48', '2018-07-24 08:47:11', '', 'What is your favorite color?', 'blue', 'Kazi Ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `members_post`
--

CREATE TABLE IF NOT EXISTS `members_post` (
`id` int(110) NOT NULL,
  `post_id` varchar(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `pakadtoan` varchar(11) NOT NULL,
  `file` varchar(250) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `feeling` varchar(26) NOT NULL,
  `location` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `link` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `with` varchar(100) NOT NULL,
  `share` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members_post`
--

INSERT INTO `members_post` (`id`, `post_id`, `name`, `pakadtoan`, `file`, `type`, `size`, `feeling`, `location`, `tag`, `link`, `content`, `time`, `with`, `share`) VALUES
(70, 'thuaha.hadi', 'thuaha.hadi', 'thuaha.hadi', '4138492-26992283_1762250720750179_2799125652982471377_n.jpg', 'image/jpeg', 0, ' feeling beautiful ', 'My house', 'Hamim', 'https://www.youtube.com', 'final', '2018-07-16 16:40:05', '', 'public'),
(72, 'thuaha.hadi', 'thuaha.hadi', 'thuaha.hadi', '2340551-29792493_2110906729146647_3500789965653016576_n.jpg', 'image/jpeg', 0, ' feeling angry ', '', 'alll', '', 'first post for public with picture', '2018-07-16 16:48:04', '', 'public'),
(73, 'mh.himel', 'mh.himel', 'mh.himel', '2658084-', '', 0, '', '', '', '', 'Introduction: Bangladesh is our homeland. It came into being on the 16th December 1971 after a bloody liberation war. It is our pride, it is our dream, and it is our life-blood.\r\n\r\nArea and situation: Bangladesh lies on the eastern part of South Asia. It is surrounded by India on three sides north, east and west and by the bay of bangle on the south. It has a total land area of 1, 47, 70 square kilometers including rivers.\r\n\r\nPopulation: Bangladesh is a small country with a big population of about eighteen cores. It is the most densely populated country in the world. The population problem is the one number problem of Bangladesh. Now Bangladesh has become a victim of the vicious circle of extreme poverty due to the population explosion.\r\n\r\nReligion: there are people of many religions in Bangladesh. More than 80% of the people are Muslims. Besides this, there are Hindus, Buddhists, and Christians. They all live in great peace and harmony.\r\n\r\nClimate: Bangladesh is a land of moderate climate. It belongs to the domain of a seasonal wind called monsoon. It has six seasons called summer, rainy season, early autumn, late autumn, winter, and spring. Each season lasts for two months. Each season comes with its own colors and adds beauty to nature. Nature assumes different pictures in different seasons.\r\n\r\nOccupation and products: Bangladesh is mainly an agricultural country. More than eighty percent of their populations depend on agriculture for their living. Rich is our main food crop. Jute and tea are our two main cash crops. Thousands of our people are working in foreign countries for want of job opportunities in the native land. Here there are much more people looking for employment than there are opportunities for employment. A great amount of remittances is flowing in everyday remitted by these overseas employees. Thus they are contributing a lot to the enrichment of our foreign exchange reserve fund.\r\n\r\nFlowers and fruits: Bangladesh is a favorite homeland of a great variety of flowers and fruits. Flowers are a wonderful gift of nature. They add much to the enhancement of the natural beauty of Bangladesh. Flowers are liked by one and all of their variety of colors, beauty and sweet smell. The rose is the best among the lot. The shiplap is our national flower. Fruits are of both seasonal and all seasonal. Our main fruits are mangoes, bananas, pineapples, jackfruits, coconuts etc. the Jackfruit is our national fruit.\r\n\r\nBirds and rivers: we go the bed with the songs of birds at night and wake up again with the songs of birds in the morning. There are talking birds, game birds, prey birds, water birds, guest birds; weaving birds and beautiful birds in Bangladesh they add charm and beauty to the flora and fauna of our country. The Doel is our national bird. Bangladesh is called the land of rivers with their uncounted tributaries. These rivers contribute much to add the natural beauty of Bangladesh. The Padma, the Meghna, the Jamuna and the Karnafuli are the big rivers of Bangladesh. They provide us with a great variety of heart-touching and eye-catching sights, sounds, and beauty.\r\n\r\nEducation and culture: education is the backbone of the nation. Most of the people of our country are illiterate. They are ignorant of their rights and duties. The darkness of illiteracy has created a great obstacle to the way of our development. People of Bangladesh are simple and gentle. They have strong feelings of love, affection, and hospitality. Our mother tongue is Bangla. Bengali literature is very much developed. Our world poet Rabindranath Tagore, rebel poet Kazi Nazrul Islam and Pollikabi Jasim Uddin are the outstanding poets of Bengali literature. Md. Nazrul Islam is our national poet.\r\n\r\nEconomic development: Bangladesh achieved independence in 1971. it became the successor of a burnt and shattered economy. Though we achieved the territorial freedom, we could not yet achieve economic emancipation. Most of the people of our country have to live below the poverty line. There are more people looking for employment than there are opportunities for employment. To speak the truth, we are now groping in the darkens of uncertainty in almost every sphere of our life.\r\n\r\nNatural beauties: Bangladesh is called the darling child of nature. It is a treasure-trove of bounteous nature. Nature seems to have adorned Bangladesh lavishly by all her beauties and bounties. Whoever sets foot on this land, can never forget its beauty. A Canadian boy once visiting a village in Bangladesh for the first time exclaimed with wonder, â€˜is this Bangladesh also?â€™ a great variety of sights, sounds, sounds, and coolers have made our motherland a Dreamland a land of surpassing beauties flowing with milk and money. Our beloved world poet Tagore claims,', '2018-07-18 07:07:43', '', 'public'),
(74, 'thuaha.hadi', 'thuaha.hadi', 'thuaha.hadi', '9755884-', '', 0, ' feeling beautiful ', '', '', '', '  fftfvgv hbhjghghj jnnjnkn ,mknjn jnjknknjn kmknknknlnj jnjnjnjknj jbjbjbjbkjb jjbjb kihiuhkn jnjhjkh kjjkhjh  ', '2018-07-19 07:13:21', '', 'public'),
(75, 'thuaha.hadi', 'thuaha.hadi', 'thuaha.hadi', '2443274-', '', 0, ' feeling awful ', '', '', 'https://www.bbc.com/news/world-asia-44756369', '    à¦¢à¦¾à¦•à¦¾: à¦‰à¦šà§à¦šà¦®à¦¾à¦§à§à¦¯à¦®à¦¿à¦• à¦¸à¦¾à¦°à§à¦Ÿà¦¿à¦«à¦¿à¦•à§‡à¦Ÿ (à¦à¦‡à¦šà¦à¦¸à¦¸à¦¿) à¦“ à¦¸à¦®à¦®à¦¾à¦¨ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦«à¦² à¦ªà§à¦°à¦•à¦¾à¦¶à¦¿à¦¤ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦à¦¬à¦¾à¦° à¦¸à¦¾à¦°à¦¾à¦¦à§‡à¦¶à§‡ à¦—à§œ à¦ªà¦¾à¦¸à§‡à¦° à¦¹à¦¾à¦° à§¬à§¬ à¦¦à¦¶à¦®à¦¿à¦• à§¬à§ª à¦¶à¦¤à¦¾à¦‚à¦¶à¥¤ à¦à¦°à¦®à¦§à§à¦¯à§‡ à¦œà¦¿à¦ªà¦¿à¦-à§« à¦ªà§‡à§Ÿà§‡à¦›à§‡à¦¨ à§¨à§¯ à¦¹à¦¾à¦œà¦¾à¦° à§¨à§¬à§¨ à¦œà¦¨ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¥¤ \r\n\r\n\r\nà¦¬à§ƒà¦¹à¦¸à§à¦ªà¦¤à¦¿à¦¬à¦¾à¦° (à§§à§¯ à¦œà§à¦²à¦¾à¦‡) à¦¸à¦•à¦¾à¦² à§§à§¦à¦Ÿà¦¾à¦° à¦ªà¦° à¦—à¦£à¦­à¦¬à¦¨à§‡ à¦ªà§à¦°à¦§à¦¾à¦¨à¦®à¦¨à§à¦¤à§à¦°à§€ à¦¶à§‡à¦– à¦¹à¦¾à¦¸à¦¿à¦¨à¦¾à¦° à¦¹à¦¾à¦¤à§‡ à¦†à¦Ÿà¦Ÿà¦¿ à¦¸à¦¾à¦§à¦¾à¦°à¦£ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¬à§‹à¦°à§à¦¡, à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦“ à¦•à¦¾à¦°à¦¿à¦—à¦°à¦¿ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¬à§‹à¦°à§à¦¡à§‡à¦° à¦«à¦²à¦¾à¦«à¦²à§‡à¦° à¦…à¦¨à§à¦²à¦¿à¦ªà¦¿ à¦¤à§à¦²à§‡ à¦¦à§‡à¦¨ à¦¶à¦¿à¦•à§à¦·à¦¾à¦®à¦¨à§à¦¤à§à¦°à§€ à¦¨à§à¦°à§à¦² à¦‡à¦¸à¦²à¦¾à¦® à¦¨à¦¾à¦¹à¦¿à¦¦à¥¤ à¦à¦°à¦ªà¦° à¦¸à¦‚à¦¶à§à¦²à¦¿à¦·à§à¦Ÿ à¦¬à§‹à¦°à§à¦¡à§‡à¦° à¦šà§‡à§Ÿà¦¾à¦°à¦®à§à¦¯à¦¾à¦¨à¦°à¦¾ à¦¤à¦¾à¦¦à§‡à¦° à¦¸à§à¦¬ à¦¸à§à¦¬ à¦¬à§‹à¦°à§à¦¡à§‡à¦° à¦«à¦²à¦¾à¦«à¦² à¦ªà§à¦°à¦§à¦¾à¦¨à¦®à¦¨à§à¦¤à§à¦°à§€à¦° à¦¹à¦¾à¦¤à§‡ à¦¤à§à¦²à§‡ à¦¦à§‡à¦¨à¥¤\r\n\r\nà¦ªà§à¦°à¦§à¦¾à¦¨à¦®à¦¨à§à¦¤à§à¦°à§€à¦° à¦®à§à¦–à§à¦¯ à¦¸à¦šà¦¿à¦¬ à¦¨à¦œà¦¿à¦¬à§à¦° à¦°à¦¹à¦®à¦¾à¦¨à§‡à¦° à¦¸à¦žà§à¦šà¦¾à¦²à¦¨à¦¾à§Ÿ à¦…à¦¨à§à¦·à§à¦ à¦¾à¦¨à§‡ à¦…à¦‚à¦¶ à¦¨à§‡à¦¨ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦ªà§à¦°à¦¤à¦¿à¦®à¦¨à§à¦¤à§à¦°à§€ à¦•à¦¾à¦œà§€ à¦•à§‡à¦°à¦¾à¦®à¦¤ à¦†à¦²à§€, à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¸à¦šà¦¿à¦¬ à¦®à§‹. à¦¸à§‹à¦¹à¦°à¦¾à¦¬ à¦¹à§‹à¦¸à¦¾à¦‡à¦¨à¥¤\r\n\r\nà¦®à¦¨à§à¦¤à§à¦°à§€-à¦ªà§à¦°à¦¤à¦¿à¦®à¦¨à§à¦¤à§à¦°à§€ à¦“ à¦•à¦°à§à¦®à¦•à¦°à§à¦¤à¦¾à¦¦à§‡à¦° à¦¬à¦•à§à¦¤à¦¬à§à¦¯à§‡à¦° à¦†à¦—à§‡ à¦ªà§à¦°à¦§à¦¾à¦¨à¦®à¦¨à§à¦¤à§à¦°à§€ à¦¡à¦¿à¦œà¦¿à¦Ÿà¦¾à¦² à¦ªà¦¦à§à¦§à¦¤à¦¿à¦¤à§‡ à¦«à¦²à¦¾à¦«à¦² à¦ªà§à¦°à¦•à¦¾à¦¶ à¦•à¦°à§‡à¦¨à¥¤ \r\n\r\nà¦…à¦¨à§à¦²à¦¿à¦ªà¦¿ à¦¹à¦¸à§à¦¤à¦¾à¦¨à§à¦¤à¦° à¦…à¦¨à§à¦·à§à¦ à¦¾à¦¨à§‡ à¦¶à¦¿à¦•à§à¦·à¦¾à¦®à¦¨à§à¦¤à§à¦°à§€ à¦œà¦¾à¦¨à¦¾à¦¨, à¦à¦¬à¦¾à¦° à§§à§¨ à¦²à¦¾à¦– à§®à§® à¦¹à¦¾à¦œà¦¾à¦° à§­à§«à§­ à¦œà¦¨ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€ à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦¦à¦¿à§Ÿà§‡à¦›à§‡à¦¨à¥¤ à¦à¦°à¦®à¦§à§à¦¯à§‡ à¦ªà¦¾à¦¸ à¦•à¦°à§‡à¦›à§‡à¦¨ à§® à¦²à¦¾à¦– à§«à§® à¦¹à¦¾à¦œà¦¾à¦° à§®à§¦à§§ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€, à¦¯à¦¾ à¦—à§œà§‡ à§¬à§¬ à¦¦à¦¶à¦®à¦¿à¦• à§¬à§ª à¦¶à¦¤à¦¾à¦‚à¦¶à¥¤ à¦à¦° à¦®à¦§à§à¦¯à§‡ à¦®à§‹à¦Ÿ à¦œà¦¿à¦ªà¦¿à¦-à§« à¦ªà§‡à§Ÿà§‡à¦›à§‡à¦¨ à§¨à§¯ à¦¹à¦¾à¦œà¦¾à¦° à§¨à§¬à§¨ à¦œà¦¨à¥¤ à¦›à¦¾à¦¤à§à¦°à§‡à¦° à¦ªà¦¾à¦¸à§‡à¦° à¦¹à¦¾à¦° à§¬à§© à¦¦à¦¶à¦®à¦¿à¦• à§®à§® à¦¶à¦¤à¦¾à¦‚à¦¶, à¦†à¦° à¦›à¦¾à¦¤à§à¦°à§€à¦° à¦ªà¦¾à¦¸à§‡à¦° à¦¹à¦¾à¦° à§¬à§¯ à¦¦à¦¶à¦®à¦¿à¦• à§­à§¨ à¦¶à¦¤à¦¾à¦‚à¦¶à¥¤\r\n\r\nà¦†à¦Ÿà¦Ÿà¦¿ à¦¸à¦¾à¦§à¦¾à¦°à¦£ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¬à§‹à¦°à§à¦¡à§‡ à¦…à¦°à§à¦¥à¦¾à§Ž à¦à¦‡à¦šà¦à¦¸à¦¸à¦¿à¦¤à§‡ à¦ªà¦¾à¦¸ à¦•à¦°à§‡à¦›à§‡à¦¨ à§¬ à¦²à¦¾à¦– à§¯à§§ à¦¹à¦¾à¦œà¦¾à¦° à§¯à§«à§® à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€, à¦¯à¦¾ à¦—à§œà§‡ à§¬à§ª à¦¦à¦¶à¦®à¦¿à¦• à§«à§« à¦¶à¦¤à¦¾à¦‚à¦¶à¥¤ à¦à¦°à¦®à¦§à§à¦¯à§‡ à¦œà¦¿à¦ªà¦¿à¦-à§« à¦ªà§‡à§Ÿà§‡à¦›à§‡à¦¨ à§¨à§« à¦¹à¦¾à¦œà¦¾à¦° à§«à§¬à§¨ à¦œà¦¨ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¥¤ \r\n\r\nà¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦¬à§‹à¦°à§à¦¡à§‡ à¦…à¦°à§à¦¥à¦¾à§Ž à¦†à¦²à¦¿à¦®à§‡ à¦à¦¬à¦¾à¦° à¦ªà¦¾à¦¸ à¦•à¦°à§‡à¦›à§‡à¦¨ à§­à§¬ à¦¹à¦¾à¦œà¦¾à¦° à§¯à§©à§¨ à¦œà¦¨ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€, à¦¯à¦¾ à¦—à§œà§‡ à§­à§® à¦¦à¦¶à¦®à¦¿à¦• à§¬à§­ à¦¶à¦¤à¦¾à¦‚à¦¶à¥¤ à¦à¦°à¦®à¦§à§à¦¯à§‡ à¦œà¦¿à¦ªà¦¿à¦-à§« à¦ªà§‡à§Ÿà§‡à¦›à§‡à¦¨ à§§ à¦¹à¦¾à¦œà¦¾à¦° à§¨à§ªà§ª à¦œà¦¨ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¥¤ \r\n\r\nà¦•à¦¾à¦°à¦¿à¦—à¦°à§€ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¬à§‹à¦°à§à¦¡à§‡ à¦…à¦°à§à¦¥à¦¾à§Ž à¦­à§‹à¦•à§‡à¦¶à¦¨à¦¾à¦²à§‡ à¦à¦¬à¦¾à¦° à¦ªà¦¾à¦¸ à¦•à¦°à§‡à¦›à§‡à¦¨ à§®à§¯ à¦¹à¦¾à¦œà¦¾à¦° à§®à§¯ à¦œà¦¨, à¦¯à¦¾ à¦—à§œà§‡ à§­à§« à¦¦à¦¶à¦®à¦¿à¦• à§«à§¦ à¦¶à¦¤à¦¾à¦‚à¦¶à¥¤ à¦à¦° à¦®à¦§à§à¦¯à§‡ à§¨ à¦¹à¦¾à¦œà¦¾à¦° à§ªà§«à§¬ à¦œà¦¨ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€ à¦ªà§‡à§Ÿà§‡à¦›à§‡à¦¨ à¦œà¦¿à¦ªà¦¿à¦-à§«à¥¤\r\n\r\nà¦¦à§à¦ªà§à¦°à§‡ à¦¶à¦¿à¦•à§à¦·à¦¾à¦®à¦¨à§à¦¤à§à¦°à§€ à¦¸à¦šà¦¿à¦¬à¦¾à¦²à§Ÿà§‡ à¦¸à¦‚à¦¬à¦¾à¦¦ à¦¸à¦®à§à¦®à§‡à¦²à¦¨ à¦•à¦°à§‡ à¦†à¦¨à§à¦·à§à¦ à¦¾à¦¨à¦¿à¦•à¦­à¦¾à¦¬à§‡ à¦«à¦²à¦¾à¦«à¦² à¦ªà§à¦°à¦•à¦¾à¦¶ à¦•à¦°à¦¬à§‡à¦¨à¥¤\r\n\r\nà¦¦à§à¦ªà§à¦° à¦¦à§‡à§œà¦Ÿà¦¾ à¦¥à§‡à¦•à§‡à¦‡ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¦°à¦¾ à¦¨à¦¿à¦œà§‡à¦¦à§‡à¦° à¦¶à¦¿à¦•à§à¦·à¦¾ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨ à¦¥à§‡à¦•à§‡ à¦«à¦² à¦œà¦¾à¦¨à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¥¤ à¦à¦° à¦ªà¦¾à¦¶à¦¾à¦ªà¦¾à¦¶à¦¿ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¬à§‹à¦°à§à¦¡à¦—à§à¦²à§‹à¦° à¦“à§Ÿà§‡à¦¬à¦¸à¦¾à¦‡à¦Ÿ (http://www.educationboard.gov.bd) à¦¥à§‡à¦•à§‡à¦“ à¦«à¦² à¦œà¦¾à¦¨à¦¾ à¦¯à¦¾à¦¬à§‡à¥¤\r\n\r\nà¦®à§‹à¦¬à¦¾à¦‡à¦²à§‡ à¦«à¦²\r\nà¦¯à§‡ à¦•à§‹à¦¨à§‹ à¦®à§‹à¦¬à¦¾à¦‡à¦² à¦¥à§‡à¦•à§‡ à¦à¦¸à¦à¦¸à¦à¦® à¦•à¦°à§‡ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦«à¦² à¦œà¦¾à¦¨à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¥¤\r\n\r\n** à¦à¦‡à¦šà¦à¦¸à¦¸à¦¿à¦° à¦«à¦² à¦œà¦¾à¦¨à¦¾ à¦¯à¦¾à¦¬à§‡ à¦¯à§‡à¦­à¦¾à¦¬à§‡\r\n\r\nà¦†à¦Ÿà¦Ÿà¦¿ à¦¸à¦¾à¦§à¦¾à¦°à¦£ à¦¬à§‹à¦°à§à¦¡à§‡à¦° à¦…à¦§à§€à¦¨à§‡ à¦à¦‡à¦šà¦à¦¸à¦¸à¦¿à¦° à¦«à¦² à¦œà¦¾à¦¨à¦¾à¦¤à§‡ HSC à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à¦¬à§‹à¦°à§à¦¡à§‡à¦° à¦ªà§à¦°à¦¥à¦® à¦¤à¦¿à¦¨ à¦…à¦•à§à¦·à¦° à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à¦°à§‹à¦² à¦¨à¦®à§à¦¬à¦° à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à§¨à§¦à§§à§® à¦²à¦¿à¦–à§‡ à§§à§¬à§¨à§¨à§¨ à¦¨à¦®à§à¦¬à¦°à§‡ à¦à¦¸à¦à¦®à¦à¦¸ à¦ªà¦¾à¦ à¦¾à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ à¦«à¦¿à¦°à¦¤à¦¿ à¦à¦¸à¦à¦®à¦à¦¸à§‡ à¦«à¦² à¦œà¦¾à¦¨à¦¿à§Ÿà§‡ à¦¦à§‡à¦“à§Ÿà¦¾ à¦¹à¦¬à§‡à¥¤\r\n \r\nà¦†à¦²à¦¿à¦®à§‡à¦° à¦«à¦² à¦œà¦¾à¦¨à¦¤à§‡ Alim à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ Mad à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à¦°à§‹à¦² à¦¨à¦®à§à¦¬à¦° à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à§¨à§¦à§§à§® à¦²à¦¿à¦–à§‡ à§§à§¬à§¨à§¨à§¨ à¦¨à¦®à§à¦¬à¦°à§‡ à¦à¦¸à¦à¦®à¦à¦¸ à¦ªà¦¾à¦ à¦¾à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ à¦«à¦¿à¦°à¦¤à¦¿ à¦à¦¸à¦à¦®à¦à¦¸à§‡ à¦ªà¦¾à¦“à§Ÿà¦¾ à¦¯à¦¾à¦¬à§‡ à¦«à¦²à¥¤\r\n \r\nà¦à¦›à¦¾à§œà¦¾ à¦à¦‡à¦šà¦à¦¸à¦¸à¦¿ à¦­à§‹à¦•à§‡à¦¶à¦¨à¦¾à¦²à§‡à¦° à¦«à¦² à¦œà¦¾à¦¨à¦¤à§‡ HSC à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ Tec à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à¦°à§‹à¦² à¦¨à¦®à§à¦¬à¦° à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à§¨à§¦à§§à§® à¦²à¦¿à¦–à§‡ à§§à§¬à§¨à§¨à§¨ à¦¨à¦®à§à¦¬à¦°à§‡ à¦à¦¸à¦à¦®à¦à¦¸ à¦ªà¦¾à¦ à¦¾à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ à¦«à¦¿à¦°à¦¤à¦¿ à¦à¦¸à¦à¦®à¦à¦¸à§‡ à¦«à¦² à¦œà¦¾à¦¨à¦¿à§Ÿà§‡ à¦¦à§‡à¦“à§Ÿà¦¾ à¦¹à¦¬à§‡à¥¤\r\n \r\nà¦«à¦² à¦ªà§à¦¨à¦ƒà¦¨à¦¿à¦°à§€à¦•à§à¦·à¦¾\r\nà¦Ÿà§‡à¦²à¦¿à¦Ÿà¦• à¦®à§‹à¦¬à¦¾à¦‡à¦² à¦«à§‹à¦¨ à¦¥à§‡à¦•à§‡ à¦†à¦—à¦¾à¦®à§€ à§¨à§¦ à¦¥à§‡à¦•à§‡ à§¨à§¬ à¦œà§à¦²à¦¾à¦‡ à¦ªà¦°à§à¦¯à¦¨à§à¦¤ à¦à¦‡à¦šà¦à¦¸à¦¸à¦¿ à¦“ à¦¸à¦®à¦®à¦¾à¦¨à§‡à¦° à¦«à¦² à¦ªà§à¦¨à¦ƒà¦¨à¦¿à¦°à§€à¦•à§à¦·à¦¾à¦° à¦†à¦¬à§‡à¦¦à¦¨ à¦•à¦°à¦¾ à¦¯à¦¾à¦¬à§‡ à¦¬à¦²à§‡ à¦œà¦¾à¦¨à¦¿à§Ÿà§‡ à¦†à¦¨à§à¦¤à¦ƒà¦¶à¦¿à¦•à§à¦·à¦¾ à¦¬à§‹à¦°à§à¦¡à¥¤\r\n \r\nà¦«à¦² à¦ªà§à¦¨à¦ƒà¦¨à¦¿à¦°à§€à¦•à§à¦·à¦£à§‡à¦° à¦†à¦¬à§‡à¦¦à¦¨ à¦•à¦°à¦¤à§‡ RSC à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à¦¬à§‹à¦°à§à¦¡à§‡à¦° à¦¨à¦¾à¦®à§‡à¦° à¦ªà§à¦°à¦¥à¦® à¦¤à¦¿à¦¨ à¦…à¦•à§à¦·à¦° à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à¦°à§‹à¦² à¦¨à¦®à§à¦¬à¦° à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à¦¬à¦¿à¦·à§Ÿ à¦•à§‹à¦¡ à¦²à¦¿à¦–à§‡ à§§à§¬à§¨à§¨à§¨ à¦¨à¦®à§à¦¬à¦°à§‡ à¦ªà¦¾à¦ à¦¾à¦¤à§‡ à¦¹à¦¬à§‡à¥¤\r\n \r\nà¦«à¦¿à¦°à¦¤à¦¿ à¦à¦¸à¦à¦®à¦à¦¸à§‡ à¦«à¦¿ à¦¬à¦¾à¦¬à¦¦ à¦•à¦¤ à¦Ÿà¦¾à¦•à¦¾ à¦•à§‡à¦Ÿà§‡ à¦¨à§‡à¦“à§Ÿà¦¾ à¦¹à¦¬à§‡ à¦¤à¦¾ à¦œà¦¾à¦¨à¦¿à§Ÿà§‡ à¦à¦•à¦Ÿà¦¿ à¦ªà¦¿à¦¨ à¦¨à¦®à§à¦¬à¦° (à¦ªà¦¾à¦°à§à¦¸à§‹à¦¨à¦¾à¦² à¦†à¦‡à¦¡à§‡à¦¨à§à¦Ÿà¦¿à¦«à¦¿à¦•à§‡à¦¶à¦¨ à¦¨à¦®à§à¦¬à¦°-PIN) à¦¦à§‡à¦“à§Ÿà¦¾ à¦¹à¦¬à§‡à¥¤\r\n \r\nà¦†à¦¬à§‡à¦¦à¦¨à§‡ à¦¸à¦®à§à¦®à¦¤ à¦¥à¦¾à¦•à¦²à§‡ RSC à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ YES à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à¦ªà¦¿à¦¨ à¦¨à¦®à§à¦¬à¦° à¦²à¦¿à¦–à§‡ à¦¸à§à¦ªà§‡à¦¸ à¦¦à¦¿à§Ÿà§‡ à¦¯à§‹à¦—à¦¾à¦¯à§‹à¦—à§‡à¦° à¦œà¦¨à§à¦¯ à¦à¦•à¦Ÿà¦¿ à¦®à§‹à¦¬à¦¾à¦‡à¦² à¦¨à¦®à§à¦¬à¦° à¦²à¦¿à¦–à§‡ à§§à§¬à§¨à§¨à§¨ à¦¨à¦®à§à¦¬à¦°à§‡ à¦à¦¸à¦à¦®à¦à¦¸ à¦ªà¦¾à¦ à¦¾à¦¤à§‡ à¦¹à¦¬à§‡à¥¤\r\n \r\nà¦ªà§à¦°à¦¤à¦¿à¦Ÿà¦¿ à¦¬à¦¿à¦·à§Ÿ à¦“ à¦ªà§à¦°à¦¤à¦¿ à¦ªà¦¤à§à¦°à§‡à¦° à¦œà¦¨à§à¦¯ à¦¦à§‡à§œà¦¶ à¦Ÿà¦¾à¦•à¦¾ à¦¹à¦¾à¦°à§‡ à¦šà¦¾à¦°à§à¦œ à¦•à¦¾à¦Ÿà¦¾ à¦¹à¦¬à§‡à¥¤\r\n \r\nà¦¯à§‡ à¦¸à¦¬ à¦¬à¦¿à¦·à§Ÿà§‡à¦° à¦¦à§â€™à¦Ÿà¦¿ à¦ªà¦¤à§à¦° (à¦ªà§à¦°à¦¥à¦® à¦“ à¦¦à§à¦¬à¦¿à¦¤à§€à§Ÿ à¦ªà¦¤à§à¦°) à¦°à§Ÿà§‡à¦›à§‡ à¦¯à§‡ à¦¸à¦¬ à¦¬à¦¿à¦·à§Ÿà§‡à¦° à¦«à¦² à¦ªà§à¦¨à¦ƒà¦¨à¦¿à¦°à§€à¦•à§à¦·à¦¾à¦° à¦†à¦¬à§‡à¦¦à¦¨ à¦•à¦°à¦²à§‡ à¦¦à§â€™à¦Ÿà¦¿ à¦ªà¦¤à§à¦°à§‡à¦° à¦œà¦¨à§à¦¯ à¦®à§‹à¦Ÿ à§©à§¦à§¦ à¦Ÿà¦¾à¦•à¦¾ à¦«à¦¿ à¦•à¦¾à¦Ÿà¦¾ à¦¹à¦¬à§‡à¥¤\r\n \r\nà¦à¦•à¦‡ à¦à¦¸à¦à¦®à¦à¦¸à§‡ à¦à¦•à¦¾à¦§à¦¿à¦• à¦¬à¦¿à¦·à§Ÿà§‡à¦° à¦†à¦¬à§‡à¦¦à¦¨ à¦•à¦°à¦¾ à¦¯à¦¾à¦¬à§‡, à¦à¦•à§à¦·à§‡à¦¤à§à¦°à§‡ à¦¬à¦¿à¦·à§Ÿ à¦•à§‹à¦¡ à¦ªà¦°à§à¦¯à¦¾à§Ÿà¦•à§à¦°à¦®à§‡ â€˜à¦•à¦®à¦¾â€™ à¦¦à¦¿à§Ÿà§‡ à¦²à¦¿à¦–à¦¤à§‡ à¦¹à¦¬à§‡à¥¤\r\n \r\nà¦¤à¦¬à§‡ à¦®à§à¦¯à¦¾à¦¨à§à§Ÿà§‡à¦² à¦•à§‹à¦¨à§‹ à¦†à¦¬à§‡à¦¦à¦¨ à¦—à§à¦°à¦¹à¦£ à¦•à¦°à¦¾ à¦¹à¦¬à§‡ à¦¨à¦¾ à¦¬à¦²à§‡ à¦¢à¦¾à¦•à¦¾ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¬à§‹à¦°à§à¦¡à§‡à¦° à¦ªà¦•à§à¦· à¦¥à§‡à¦•à§‡ à¦œà¦¾à¦¨à¦¾à¦¨à§‹ à¦¹à§Ÿà§‡à¦›à§‡à¥¤\r\n    ', '2018-07-19 07:34:18', '', 'tracker'),
(76, 'thuaha.hadi', 'thuaha.hadi', 'thuaha.hadi', '420251-', '', 0, '', '', '', '', ' à¦¬à¦¾à¦¡à§à¦¡à¦¾ à¦—à§à¦°à¦¾à¦®à§‡à¦° à¦¬à§à¦¯à¦¬à¦¸à¦¾à§Ÿà§€ à¦†à¦¬à§à¦¦à§à¦² à¦¹à¦¾à¦‡ à¦ªà¦¾à¦Ÿà¦“à§Ÿà¦¾à¦°à§€ à¦¬à¦¾à¦‚à¦²à¦¾à¦¨à¦¿à¦‰à¦œà¦•à§‡ à¦œà¦¾à¦¨à¦¾à¦¨, à¦¤à¦¾à¦¨à¦¿à¦¶à¦¾ à¦¸à§‹à¦®à¦¬à¦¾à¦° à¦®à¦¾à§Ÿà§‡à¦° à¦¸à¦™à§à¦—à§‡ à¦¨à¦¾à¦¨à¦¾ à¦¬à¦¾à§œà¦¿à¦¤à§‡ à¦¬à§‡à§œà¦¾à¦¤à§‡ à¦†à¦¸à§‡à¥¤ à¦°à§‹à¦¬à¦¬à¦¾à¦° à¦¬à§‡à¦²à¦¾ à¦¸à¦¾à§œà§‡ à§§à§§à¦Ÿà¦¾à¦° à¦¦à¦¿à¦•à§‡ à¦†à¦•à¦¿à¦¬ à¦“ à¦¤à¦¾à¦¨à¦¿à¦¶à¦¾ à¦–à§‡à¦²à¦¤à§‡ à¦–à§‡à¦²à¦¤à§‡ à¦¬à¦¾à§œà¦¿à¦° à¦ªà¦¾à¦¶à§‡à¦° à¦ªà§à¦•à§à¦°à§‡ à¦ªà§œà§‡ à¦¯à¦¾à§Ÿà¥¤ à¦Ÿà§‡à¦° à¦ªà§‡à§Ÿà§‡ à¦ªà¦°à¦¿à¦¬à¦¾à¦°à§‡à¦° à¦²à§‹à¦•à¦œà¦¨ à¦¶à¦¿à¦¶à§ à¦¦à§â€™à¦Ÿà¦¿à¦•à§‡ à¦‰à¦¦à§à¦§à¦¾à¦° à¦•à¦°à§‡ à¦¹à¦¾à¦œà§€à¦—à¦žà§à¦œ à¦‰à¦ªà¦œà§‡à¦²à¦¾ à¦¸à§à¦¬à¦¾à¦¸à§à¦¥à§à¦¯ à¦•à¦®à¦ªà§à¦²à§‡à¦•à§à¦¸à§‡ à¦¨à¦¿à¦²à§‡ à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦• à¦¸à§à¦²à¦¤à¦¾à¦¨à¦¾ à¦°à¦¾à¦œà¦¿à§Ÿà¦¾ à¦¤à¦¾à¦¦à§‡à¦° à¦®à§ƒà¦¤ à¦˜à§‹à¦·à¦£à¦¾ à¦•à¦°à§‡à¦¨à¥¤\r\n<br/>\r\n *thuaha *yokoll *shop *startags *search... *welcome_to_bangladesh  ', '2018-07-22 15:12:58', '', 'public'),
(77, 'thuaha.hadi', 'thuaha.hadi', 'thuaha.hadi', '3129095-', '', 0, '', 'Bangladesh', '', '', '    ', '2018-07-22 16:30:23', '', 'public'),
(79, 'dalia.rahma', 'dalia.rahma', 'dalia.rahma', '3494061-', '', 0, '', '', '', '', 'hello bangladesh', '2018-07-23 06:38:06', '', 'tracker'),
(80, 'thuaha.hadi', 'thuaha.hadi', 'thuaha.hadi', '9440467-', '', 0, '', '', '', '', 'hello banglladesh new post', '2018-07-25 08:41:05', '', 'tracker');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE IF NOT EXISTS `mess` (
`id` int(5) NOT NULL,
  `idGui` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idPhong` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messs` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(15) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hadi` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`id`, `idGui`, `idPhong`, `messs`, `status`, `file`, `type`, `size`, `time`, `hadi`) VALUES
(1, 'thuaha.hadi', 'mh.himel', 'hello', 'read', '', '', 0, '2018-07-22 05:27:18', 0),
(2, 'mh.himel', 'thuaha.hadi', 'hi', 'read', '', '', 0, '2018-07-22 05:28:04', 0),
(3, 'thuaha.hadi', 'mh.himel', 'how are you?', 'read', '', '', 0, '2018-07-22 05:28:15', 0),
(4, 'mh.himel', 'thuaha.hadi', 'i m f9 & u?', 'read', '', '', 0, '2018-07-22 05:28:30', 0),
(5, 'thuaha.hadi', 'mh.himel', 'i m also f9 thq\r\n', 'read', '', '', 0, '2018-07-22 05:28:48', 0),
(6, 'mh.himel', 'thuaha.hadi', 'welcome', 'read', '', '', 0, '2018-07-22 05:29:01', 0),
(7, 'ga.hamim', 'thuaha.hadi', 'hello thuaha?', 'read', '', '', 0, '2018-07-22 05:31:13', 0),
(8, 'thuaha.hadi', 'ga.hamim', 'hello hamim', 'read', '', '', 0, '2018-07-22 05:31:27', 0),
(9, 'thuaha.hadi', 'mh.himel', 'online...?', 'read', '', '', 0, '2018-07-22 07:41:40', 0),
(10, 'mh.himel', 'thuaha.hadi', 'yes', 'read', '', '', 0, '2018-07-22 07:41:47', 0),
(13, 'mh.himel', 'thuaha.hadi', 'hhh', 'read', '4248767-', '', 0, '2018-07-22 07:47:25', 0),
(15, 'thuaha.hadi', 'mh.himel', 'my file', 'read', '6049728-', '', 0, '2018-07-22 07:51:52', 0),
(16, 'thuaha.hadi', 'mh.himel', 'ggg', 'read', '8975498-', '', 0, '2018-07-22 07:55:09', 0),
(17, 'thuaha.hadi', 'mh.himel', 'ff', 'read', '2090997-', '', 0, '2018-07-22 07:57:57', 0),
(20, 'thuaha.hadi', 'mh.himel', 'final', 'read', '4953925-17499511_10206906056288910_4824417170477629886_n.jpg', 'image/jpeg', 0, '2018-07-22 08:04:00', 0),
(22, 'mh.himel', 'thuaha.hadi', 'file', 'read', '9785190-', '', 0, '2018-07-22 10:55:44', 0),
(32, 'mh.himel', 'thuaha.hadi', 'koera', 'read', '2321518-', '', 0, '2018-07-23 05:59:17', 0),
(33, 'mh.himel', 'thuaha.hadi', 'something', 'read', '7792078-', '', 0, '2018-07-23 06:00:33', 0),
(34, 'thuaha.hadi', 'mh.himel', 'what?', 'read', '5745490-', '', 0, '2018-07-23 06:13:22', 0),
(35, 'mh.himel', 'thuaha.hadi', 'hi', 'read', '6898395-', '', 0, '2018-07-23 07:15:50', 0),
(36, 'mh.himel', 'thuaha.hadi', 'hi', 'read', '4268707-', '', 0, '2018-07-23 07:21:57', 0),
(38, 'mh.himel', 'thuaha.hadi', 'hi\r\n', 'read', '4698025-', '', 0, '2018-07-23 08:10:03', 0),
(39, 'thuaha.hadi', 'mh.himel', 'hello', 'read', '2247195-', '', 0, '2018-07-23 08:10:18', 0),
(40, 'thuaha.hadi', 'mh.himel', 'hi', 'read', '8472461-', '', 0, '2018-07-23 09:05:29', 0),
(41, 'thuaha.hadi', 'mh.himel', 'g', 'read', '4285022-', '', 0, '2018-07-23 09:06:58', 0),
(42, 'thuaha.hadi', 'mh.himel', 'g', 'read', '4007068-', '', 0, '2018-07-23 09:07:20', 0),
(43, 'thuaha.hadi', 'mh.himel', 'ff', 'read', '5215866-', '', 0, '2018-07-23 09:07:23', 0),
(44, 'thuaha.hadi', 'mh.himel', 'ff', 'read', '8331369-', '', 0, '2018-07-23 09:07:55', 0),
(45, 'thuaha.hadi', 'mh.himel', 'fff', 'read', '2573187-', '', 0, '2018-07-23 09:07:59', 0),
(46, 'thuaha.hadi', 'mh.himel', 'fff', 'read', '5020392-', '', 0, '2018-07-23 09:54:52', 0),
(47, 'thuaha.hadi', 'mh.himel', 'd', 'read', '7572434-', '', 0, '2018-07-23 10:15:53', 0),
(48, 'thuaha.hadi', 'mh.himel', 'ff', 'read', '9510257-', '', 0, '2018-07-23 10:16:06', 0),
(49, 'thuaha.hadi', 'mh.himel', 'hi', 'read', '4822803-', '', 0, '2018-07-23 13:51:09', 0),
(51, 'mh.himel', 'thuaha.hadi', 'hello', 'read', '4541525-', '', 0, '2018-07-23 14:14:10', 1),
(52, 'mh.himel', 'thuaha.hadi', 'nice', 'read', '9828998-', '', 0, '2018-07-23 14:20:21', 1),
(53, 'mh.himel', 'thuaha.hadi', 'helklo', 'read', '6101996-', '', 0, '2018-07-23 14:56:50', 1),
(54, 'mh.himel', 'thuaha.hadi', 'test', 'read', '8444062-', '', 0, '2018-07-23 14:58:46', 1),
(55, 'mh.himel', 'thuaha.hadi', 'hi bol2', 'read', '2866549-', '', 0, '2018-07-23 15:00:16', 1),
(56, 'mh.himel', 'thuaha.hadi', 'null', 'read', '2922745-', '', 0, '2018-07-23 15:02:51', 1),
(57, 'mh.himel', 'thuaha.hadi', 'joy bangla', 'read', '8476087-', '', 0, '2018-07-23 15:03:05', 1),
(58, 'mh.himel', 'thuaha.hadi', 'lt', 'read', '1306985-', '', 0, '2018-07-23 15:03:15', 1),
(59, 'mh.himel', 'thuaha.hadi', 'ff', 'read', '9116892-', '', 0, '2018-07-23 15:03:34', 1),
(60, 'mh.himel', 'thuaha.hadi', 'hahaha', 'read', '7890872-', '', 0, '2018-07-23 15:04:31', 1),
(61, 'mh.himel', 'thuaha.hadi', 'lul', 'read', '508773-', '', 0, '2018-07-23 15:04:54', 1),
(62, 'mh.himel', 'thuaha.hadi', 'hi\r\n', 'read', '9361612-', '', 0, '2018-07-23 15:06:20', 1),
(63, 'mh.himel', 'thuaha.hadi', ',,,', 'read', '2721530-', '', 0, '2018-07-23 15:06:29', 1),
(64, 'mh.himel', 'thuaha.hadi', ',', 'read', '1457443-', '', 0, '2018-07-23 15:06:34', 1),
(65, 'mh.himel', 'thuaha.hadi', 'fff', 'read', '8067313-', '', 0, '2018-07-23 15:07:37', 1),
(66, 'mh.himel', 'thuaha.hadi', 'ff', 'read', '1170727-', '', 0, '2018-07-23 15:08:19', 1),
(67, 'mh.himel', 'thuaha.hadi', 'hi', 'read', '9265235-', '', 0, '2018-07-23 15:18:21', 1),
(68, 'mh.himel', 'thuaha.hadi', 'kkk', 'read', '8847699-', '', 0, '2018-07-23 15:20:11', 1),
(69, 'mh.himel', 'thuaha.hadi', 'kkk', 'read', '2517596-', '', 0, '2018-07-23 15:23:33', 1),
(70, 'mh.himel', 'thuaha.hadi', 'kkk', 'read', '5382034-', '', 0, '2018-07-23 15:23:37', 1),
(71, 'thuaha.hadi', 'mh.himel', 'what is your problem bro?', 'read', '2940268-', '', 0, '2018-07-23 15:24:55', 1),
(72, 'thuaha.hadi', 'mh.himel', 'hh', 'read', '3889239-', '', 0, '2018-07-23 15:25:16', 1),
(73, 'thuaha.hadi', 'mh.himel', 'h', 'read', '2432397-', '', 0, '2018-07-23 15:25:23', 1),
(74, 'thuaha.hadi', 'mh.himel', 'h', 'read', '4559955-', '', 0, '2018-07-23 15:25:32', 1),
(75, 'thuaha.hadi', 'mh.himel', 'test', 'read', '9587903-', '', 0, '2018-07-23 16:47:12', 1),
(76, 'thuaha.hadi', 'mh.himel', 'ffff', 'read', '7890570-', '', 0, '2018-07-23 16:47:29', 1),
(77, 'thuaha.hadi', 'mh.himel', 'ff', 'read', '7926523-', '', 0, '2018-07-23 16:47:35', 1),
(78, 'thuaha.hadi', 'mh.himel', 'f', 'read', '8040122-', '', 0, '2018-07-23 16:47:44', 1),
(79, 'thuaha.hadi', 'mh.himel', 'f', 'read', '7848273-', '', 0, '2018-07-23 16:47:47', 1),
(80, 'thuaha.hadi', 'mh.himel', 'f', 'read', '4373544-', '', 0, '2018-07-23 16:48:01', 1),
(81, 'thuaha.hadi', 'mh.himel', 'f', 'read', '9169159-', '', 0, '2018-07-23 16:48:13', 1),
(82, 'thuaha.hadi', 'mh.himel', 'f', 'read', '7200821-', '', 0, '2018-07-23 16:48:20', 1),
(83, 'thuaha.hadi', 'mh.himel', 'h', 'read', '3581979-', '', 0, '2018-07-23 16:48:28', 1),
(84, 'thuaha.hadi', 'mh.himel', 'dfdff', 'read', '7011389-', '', 0, '2018-07-23 16:48:46', 1),
(85, 'thuaha.hadi', 'mh.himel', 'ggg', 'read', '5389890-', '', 0, '2018-07-23 16:49:35', 1),
(86, 'thuaha.hadi', 'mh.himel', 'vvvv', 'read', '1277075-', '', 0, '2018-07-23 16:50:03', 1),
(87, 'thuaha.hadi', 'mh.himel', 'bbbbbbbbbbbbbbbbbbbbbb', 'read', '4668417-', '', 0, '2018-07-23 16:50:15', 1),
(88, 'mh.himel', 'thuaha.hadi', 'ggg', 'read', '1741742-', '', 0, '2018-07-23 16:51:06', 1),
(89, 'mh.himel', 'thuaha.hadi', 'cccc', 'read', '4128522-', '', 0, '2018-07-23 16:51:21', 1),
(90, 'mh.himel', 'thuaha.hadi', 'cccccccccc', 'read', '2213357-', '', 0, '2018-07-23 16:51:35', 1),
(91, 'thuaha.hadi', 'mh.himel', 'hi', 'read', '242602-', '', 0, '2021-03-08 18:14:17', 0),
(92, 'mh.himel', 'thuaha.hadi', 'jjjj', 'read', '8857367-', '', 0, '2021-03-08 18:20:27', 0),
(93, 'mh.himel', 'thuaha.hadi', 'njnkubyibu', 'unread', '1485843-', '', 0, '2021-03-08 18:47:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE IF NOT EXISTS `post_comment` (
`id` int(11) NOT NULL,
  `commentid` varchar(10) NOT NULL,
  `commentname` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `images` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `thuaha` varchar(11) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `hadi` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`id`, `commentid`, `commentname`, `comment`, `images`, `type`, `comment_time`, `thuaha`, `poster`, `hadi`) VALUES
(2, '72', 'thuaha.hadi', 'fuuuuuuuuuuuuujjjjjjjjjjjj', '5094110-', '', '2018-07-17 17:25:57', 'unseen', '', 0),
(3, '73', 'thuaha.hadi', 'Introduction: Bangladesh is our homeland. It came into being on the 16th December 1971 after a bloody liberation war. It is our pride, it is our dream, and it is our life-blood.  Area and situation: Bangladesh lies on the eastern part of South Asia. It is surrounded by India on three sides north, east and west and by the bay of bangle on the south. It has a total land area of 1, 47, 70 square kilometers including rivers.  Population: Bangladesh is a small country with a big population of about eighteen cores. It is the most densely populated country in the world. The population problem is the one number problem of Bangladesh. Now Bangladesh has become a victim of the vicious circle of extreme poverty due to the population explosion.  Religion: there are people of many religions in Bangladesh. More than 80% of the people are Muslims. Besides this, there are Hindus, Buddhists, and Christians. They all live in great peace and harmony.  Climate: Bangladesh is a land of moderate climate. It belongs to the domain of a seasonal wind called monsoon. It has six seasons called summer, rainy season, early autumn, late autumn, winter, and spring. Each season lasts for two months. Each season comes with its own colors and adds beauty to nature. Nature assumes different pictures in different seasons.  Occupation and products: Bangladesh is mainly an agricultural country. More than eighty percent of their populations depend on agriculture for their living. Rich is our main food crop. Jute and tea are our two main cash crops. Thousands of our people are working in foreign countries for want of job opportunities in the native land. Here there are much more people looking for employment than there are opportunities for employment. A great amount of remittances is flowing in everyday remitted by these overseas employees. Thus they are contributing a lot to the enrichment of our foreign exchange reserve fund.  Flowers and fruits: Bangladesh is a favorite homeland of a great variety of flowers and fruits. Flowers are a wonderful gift of nature. They add much to the enhancement of the natural beauty of Bangladesh. Flowers are liked by one and all of their variety of colors, beauty and sweet smell. The rose is the best among the lot. The shiplap is our national flower. Fruits are of both seasonal and all seasonal. Our main fruits are mangoes, bananas, pineapples, jackfruits, coconuts etc. the Jackfruit is our national fruit.  Birds and rivers: we go the bed with the songs of birds at night and wake up again with the songs of birds in the morning. There are talking birds, game birds, prey birds, water birds, guest birds; weaving birds and beautiful birds in Bangladesh they add charm and beauty to the flora and fauna of our country. The Doel is our national bird. Bangladesh is called the land of rivers with their uncounted tributaries. These rivers contribute much to add the natural beauty of Bangladesh. The Padma, the Meghna, the Jamuna and the Karnafuli are the big rivers of Bangladesh. They provide us with a great variety of heart-touching and eye-catching sights, sounds, and beauty.  Education and culture: education is the backbone of the nation. Most of the people of our country are illiterate. They are ignorant of their rights and duties. The darkness of illiteracy has created a great obstacle to the way of our development. People of Bangladesh are simple and gentle. They have strong feelings of love, affection, and hospitality. Our mother tongue is Bangla. Bengali literature is very much developed. Our world poet Rabindranath Tagore, rebel poet Kazi Nazrul Islam and Pollikabi Jasim Uddin are the outstanding poets of Bengali literature. Md. Nazrul Islam is our national poet.  Economic development: Bangladesh achieved independence in 1971. it became the successor of a burnt and shattered economy. Though we achieved the territorial freedom, we could not yet achieve economic emancipation. Most of the people of our country have to live below the poverty line. There are more people looking for employment than there are opportunities for employment. To speak the truth, we are now groping in the darkens of uncertainty in almost every sphere of our life.  Natural beauties: Bangladesh is called the darling child of nature. It is a treasure-trove of bounteous nature. Nature seems to have adorned Bangladesh lavishly by all her beauties and bounties. Whoever sets foot on this land, can never forget its beauty. A Canadian boy once visiting a village in Bangladesh for the first time exclaimed with wonder, â€˜is this Bangladesh also?â€™ a great variety of sights, sounds, sounds, and coolers have made our motherland a Dreamland a land of surpassing beauties flowing with milk and money. Our beloved world poet Tagore claims,  â€œNowhere would thou find such a land, queen of all lands, my belov', '1284326-', '', '2018-07-18 07:31:07', 'unseen', '', 0),
(4, '73', 'thuaha.hadi', 'v ggvgvgvgvgv', '7937097-', '', '2018-07-18 07:58:06', 'unseen', '', 0),
(5, '', '', '', '7713828-', '', '2018-07-18 08:29:01', 'unseen', '', 0),
(6, '70', 'thuaha.hadi', 'this is the murgi', '8995438-13937041_1801900440047279_8576441_n.jpg', 'image/jpeg', '2018-07-18 11:19:39', 'unseen', '', 0),
(7, '74', 'thuaha.hadi', 'nice', '6874829-', '', '2018-07-20 09:29:42', 'read', 'thuaha.hadi', 0),
(8, '74', 'mh.himel', 'ðŸ˜¥ðŸ˜¥ðŸ˜¥', '4546057-', '', '2018-07-20 10:45:29', 'read', 'thuaha.hadi', 0),
(9, '70', 'mh.himel', 'ðŸ˜¥ðŸ˜¥ðŸ˜¥', '248645-', '', '2018-07-20 10:55:37', 'read', 'thuaha.hadi', 0),
(10, '74', 'mh.himel', 'last', '5231879-', '', '2018-07-20 10:59:06', 'read', 'thuaha.hadi', 0),
(11, '74', 'mh.himel', 'nice', '230517-', '', '2018-07-20 11:09:44', 'read', 'thuaha.hadi', 0),
(12, '70', 'mh.himel', 'nice', '3448440-', '', '2018-07-23 06:10:25', 'unseen', 'thuaha.hadi', 1),
(13, '73', 'thuaha.hadi', 'nice', '3681378-', '', '2018-07-23 15:50:08', 'unseen', 'mh.himel', 1),
(14, '73', 'thuaha.hadi', 'kkk', '3459317-', '', '2018-07-23 15:52:12', 'unseen', 'mh.himel', 1),
(15, '73', 'thuaha.hadi', 'wow', '9965256-', '', '2018-07-23 16:41:13', 'unseen', 'mh.himel', 1),
(16, '73', 'thuaha.hadi', 'kkk', '8791202-', '', '2018-07-23 16:41:35', 'unseen', 'mh.himel', 1),
(17, '73', 'thuaha.hadi', 'lll', '9648026-', '', '2018-07-23 16:42:01', 'unseen', 'mh.himel', 1),
(18, '73', 'thuaha.hadi', 'kk', '137463-', '', '2018-07-23 16:43:20', 'unseen', 'mh.himel', 1),
(19, '73', 'thuaha.hadi', 'test', '5837940-', '', '2018-07-23 16:46:03', 'unseen', 'mh.himel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_sub_comment`
--

CREATE TABLE IF NOT EXISTS `post_sub_comment` (
`id` int(225) NOT NULL,
  `commentid` int(225) NOT NULL,
  `commentname` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `thuaha` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `poster` varchar(100) NOT NULL,
  `hadi` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_sub_comment`
--

INSERT INTO `post_sub_comment` (`id`, `commentid`, `commentname`, `comment`, `thuaha`, `time`, `poster`, `hadi`) VALUES
(2, 2, 'thuaha.hadi', 'ðŸ˜¥ðŸ˜¥ðŸ˜¥', 'unseen', '2018-07-18 08:36:12', '', 0),
(3, 3, 'thuaha.hadi', 'nice', 'unseen', '2018-07-18 08:44:12', '', 0),
(4, 3, 'mh.himel', 'fuuuuuuuuuuuuujjjjjjjjjjjj', 'unseen', '2018-07-18 08:54:42', '', 0),
(5, 0, '', '', 'unseen', '2018-07-18 08:59:31', '', 0),
(6, 7, 'mh.himel', 'nice', 'read', '2018-07-20 11:05:50', 'thuaha.hadi', 0),
(7, 10, 'thuaha.hadi', 'tnq', 'read', '2018-07-20 11:27:35', 'mh.himel', 0),
(8, 7, 'mh.himel', 'ðŸ˜¥ðŸ˜¥ðŸ˜¥', 'read', '2021-03-09 09:11:28', 'thuaha.hadi', 1),
(9, 3, 'mh.himel', 'hello', 'unseen', '2018-07-23 16:39:30', 'thuaha.hadi', 1),
(10, 8, 'thuaha.hadi', 'hehehe', 'unseen', '2018-07-23 16:39:26', 'mh.himel', 1),
(11, 11, 'thuaha.hadi', 'tnq', 'unseen', '2018-07-23 16:40:26', 'mh.himel', 1),
(12, 10, 'thuaha.hadi', 'what', 'unseen', '2018-07-23 16:40:48', 'mh.himel', 1),
(13, 10, 'thuaha.hadi', 'test', 'unseen', '2018-07-23 16:46:19', 'mh.himel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_post`
--

CREATE TABLE IF NOT EXISTS `shop_post` (
`id` int(11) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `product_poster` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `product_name_link` varchar(500) NOT NULL,
  `button_link` varchar(500) NOT NULL,
  `tag` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_post`
--

INSERT INTO `shop_post` (`id`, `member_id`, `country`, `product_poster`, `email`, `phone`, `product_name`, `content`, `price`, `catagory`, `product_name_link`, `button_link`, `tag`, `image`) VALUES
(2, 'ga.hamim', 'United States of America', 'G.AHamim', '2@2.com', '227738847748487', 'new one product', 'aasasassa', '3.00', 'Kids', 'https://www.digit.in/laptops/asus-rog-g752vy-price-6939.html', 'https://www.digit.in/laptops-reviews/page1', 'alll', '73960-dsc0000007.jpg'),
(3, 'thuaha.hadi', 'Bangladesh', 'Thuaha Hadi', 'a@a.com', '01996929809', 'Apple iPhone X', 'Also known as Apple iPhone 10, Apple iPhone Ten\r\nVersions:\r\nA1865 (USA, Hong Kong, Australia, New Zealand, China)\r\nA1901 (EMEA, UAE, LATAM, Canada, USA - AT&T/T-Mobile, Singapore)\r\n\r\n\r\n\r\n\r\n- Wide color gamut display\r\n- 3D Touch display\r\n- True-tone display\r\nPLATFORM	OS	iOS 11.1.1, upgradable to iOS 11.4.1\r\nChipset	Apple A11 Bionic\r\nCPU	Hexa-core 2.39 GHz (2x Monsoon + 4x Mistral)\r\nGPU	Apple GPU (three-core graphics)\r\nMEMORY	Card slot	No\r\nInternal	64/256 GB, 3 GB RAM\r\nMAIN CAMERA	Dual	12 MP, f/1.8, 28mm, OIS, PDAF \r\n12 MP, f/2.4, 52mm, OIS, PDAF, 2x optical zoom\r\nFeatures	Quad-LED dual-tone flash, HDR (photo/panorama), panorama, HDR\r\nVideo	2160p@24/30/60fps, 1080p@30/60/120/240fps\r\nSELFIE CAMERA	Single	7 MP, f/2.2, 32mm\r\nFeatures	HDR\r\nVideo	1080p@30fps\r\nSOUND	Alert types	Vibration, proprietary ringtones\r\nLoudspeaker	Yes, with stereo speakers\r\n3.5mm jack	No\r\n 	- Active noise cancellation with dedicated mic\r\n- Lightning to 3.5 mm headphone jack adapter\r\nCOMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot\r\nBluetooth	5.0, A2DP, LE\r\nGPS	Yes, with A-GPS, GLONASS, GALILEO, QZSS\r\nNFC	Yes\r\nRadio	No\r\nUSB	2.0, proprietary reversible connector\r\nFEATURES	Sensors	Face ID, accelerometer, gyro, proximity, compass, barometer\r\nMessaging	iMessage, SMS(threaded view), MMS, Email, Push Email\r\nBrowser	HTML5 (Safari)\r\n 	- Fast battery charging: 50% in 30 min\r\n- Qi wireless charging\r\n- Siri natural language commands and dictation\r\n- iCloud cloud service\r\n- MP3/WAV/AAX+/AIFF/Apple Lossless player\r\n- MP4/H.265 player\r\n- Audio/video/photo editor\r\n- Document editor\r\nBATTERY	 	Non-removable Li-Ion 2716 mAh battery (10.35 Wh)\r\nTalk time	Up to 21 h (3G)\r\nMusic play	Up to 60 h\r\nMISC	Colors	Space Gray, Silver\r\nPrice	About 1000 EUR\r\nTESTS	Performance	Basemark OS II 2.0: 4708\r\nDisplay	Contrast ratio: Infinity (nominal), 5.013 (sunlight)\r\nCamera	Photo / Video\r\nLoudspeaker	Voice 68dB / Noise 74dB / Ring 76dB\r\nAudio quality	Noise -93.7dB / Crosstalk -82.8dB\r\nBattery life	\r\nEndurance rating 74h\r\n', '8.00', 'Electronics Mobile & Computer', 'https://www.digit.in/laptops/asus-rog-g752vy-price-6939.html', 'https://www.digit.in/laptops-reviews/page1', 'mobile phone', '55243-iphonex_spacegray.png'),
(4, 'thuaha.hadi', 'Bangladesh', 'Thuaha Hadi', 'a@a.com', '01996929809', 'T-shirt', '\r\nA blue T-shirt\r\n\r\nT-shirt day in Leipzig\r\n\r\nReplica of a Copa Libertadores 1989 shirt\r\nA T-shirt (or t shirt, or tee) is a style of unisex fabric shirt named after the T shape of its body and sleeves. It normally has short sleeves and a round neckline, known as a crew neck, which lacks a collar. T-shirts are generally made of a light, inexpensive fabric and are easy to clean.\r\n\r\nTypically made of cotton textile in a stockinette or jersey knit, it has a distinctively pliable texture compared to shirts made of woven cloth. Most modern versions have a body made from a continuously woven tube, produced on a circular loom, such that the torso has no side seams. The manufacture of T-shirts has become highly automated and may include cutting fabric with a laser or a water jet.\r\n\r\nThe T-shirt evolved from undergarments used in the 19th century and, in the mid-20th century, transitioned from undergarment to general-use casual clothing.\r\n\r\nA V-neck T-shirt has a V-shaped neckline, as opposed to the round neckline of the more common crew neck shirt (also called a U-neck). V-necks were introduced so that the neckline of the shirt does not show when worn beneath an outer shirt, as would that of a crew neck shirt.[1][2][3]', '14.00', 'Men Product', 'dd', 'https://www.digit.in/laptops-reviews/page1', 'T-Shirt', '91477-mock-10-2122-14213d-nh-ns-111802514472174936291489614087-3_1800x.png');

-- --------------------------------------------------------

--
-- Table structure for table `shop_star`
--

CREATE TABLE IF NOT EXISTS `shop_star` (
`id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `rate` int(11) NOT NULL,
  `dt_rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_star`
--

INSERT INTO `shop_star` (`id`, `id_post`, `ip`, `rate`, `dt_rated`) VALUES
(1, 3, '::1', 5, '2018-07-25 12:35:29'),
(2, 2, '::1', 1, '2018-07-25 14:07:27'),
(3, 4, '::1', 5, '2018-07-25 14:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `thuaha`
--

CREATE TABLE IF NOT EXISTS `thuaha` (
`id` int(225) NOT NULL,
  `post_id` text NOT NULL,
  `hit_id` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thuaha`
--

INSERT INTO `thuaha` (`id`, `post_id`, `hit_id`) VALUES
(5, '72', 'mh.himel'),
(6, '72', 'ga.hamim'),
(7, '70', 'thuaha.hadi'),
(8, '75', 'thuaha.hadi'),
(16, '', ''),
(17, '', ''),
(18, '', ''),
(19, '', ''),
(20, '', ''),
(21, '', ''),
(27, '73', 'thuaha.hadi'),
(32, '77', 'thuaha.hadi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `box`
--
ALTER TABLE `box`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gau_foststar`
--
ALTER TABLE `gau_foststar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hadi`
--
ALTER TABLE `hadi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_post`
--
ALTER TABLE `members_post`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_sub_comment`
--
ALTER TABLE `post_sub_comment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_post`
--
ALTER TABLE `shop_post`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_star`
--
ALTER TABLE `shop_star`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thuaha`
--
ALTER TABLE `thuaha`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `gau_foststar`
--
ALTER TABLE `gau_foststar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hadi`
--
ALTER TABLE `hadi`
MODIFY `id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `members_post`
--
ALTER TABLE `members_post`
MODIFY `id` int(110) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `mess`
--
ALTER TABLE `mess`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `post_sub_comment`
--
ALTER TABLE `post_sub_comment`
MODIFY `id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `shop_post`
--
ALTER TABLE `shop_post`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shop_star`
--
ALTER TABLE `shop_star`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `thuaha`
--
ALTER TABLE `thuaha`
MODIFY `id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
