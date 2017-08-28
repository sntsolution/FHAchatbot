-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 07:20 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fhachatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversion_master`
--

CREATE TABLE `conversion_master` (
  `cid` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `Id` int(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conversion_master`
--

INSERT INTO `conversion_master` (`cid`, `question`, `answer`, `Id`) VALUES
(1, 'Hi', 'Hi, Choose from following option.<br>\n1. Lost Password<br>\n2. Why I rejected<br>\n3. FAQ', 0),
(2, 'Reset', 'Hi, Choose from following option.<br>\r\n1. Lost Password<br>\r\n2. Why I rejected<br>\r\n3. FAQ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'When and where will FHA2018 be held?', 'The FHA2018 exhibition and conference will be held from 24 to 27 April 2018 (Tuesday to Friday) at two venues - Singapore Expo and Suntec Singapore.'),
(2, 'What are the opening hours of FHA2018?', '9:00am - 6:00pm (24 - 27 April 2018, Tuesday - Friday)'),
(3, 'Who is the organiser of FHA?', 'UBM SES organises a portfolio of international tradeshows serving the Communications, Engineering, Machinery and Lifestyle industries. Our events consistently attract a high level of overseas participation with foreign exhibitors accounting for almost 80% of the show floor. UBM SES is a member of Allworld Exhibitions Alliance, a global network with over 50 offices worldwide. Please visit www.sesallworld.com for more information.'),
(4, 'Where can I find the conference programmes and information about the conference speakers?', 'Details on the conference programmes and speakers will be available in the conference section from January 2018.'),
(5, 'How do I obtain a copy of FHA2018 conference proceedings?', 'Conference proceedings will be made available to all registered media via a FTP site during FHA2018. Details will be available in the media kits given to press at registration.'),
(6, 'Is admission to the exhibition and conference free to members of the media?', 'Admission to the exhibition and conference is free to all registered members of the media.'),
(7, 'How do I obtain a media badge to cover the event?', 'Online media registration* for the exhibition and associated events begins in January 2018. To register online for a media badge, please fill in and submit the online form. You can collect your media badge from the media reception desk at the FHA Media Centre during the exhibition.\r\n* Please note that media badges are only issued to editorial staff including bureau chiefs, editorial publishers, correspondents, editors, journalists, producers, web journalists, accredited camera and video crew, etc. Freelance camera crew, photographers and writers must present proof of assignment by accredited media outlet.\r\nPress badges will not be issued to non-editorial staff including analysts, CEOs, VPs, general managers, managing directors, sales, marketing, media managers, public relations and promotions representatives. This list is not exhaustive and we may refuse admission at our discretion.'),
(8, 'What areas of access does the media badge offer?', 'Your media badge grants you access to the FHA2018 exhibition, ProWine ASIA 2018 exhibition as well as associated conferences and events.'),
(9, 'If I am heading to the Opening Ceremony on the first day of the exhibition, must I collect my media badge from the Media Centre first?', 'If you intend to attend the opening ceremony, please email Juliet.Tseng@ubm.com to RSVP. Your media badge will be available for collection at the media registration counter at the entrance of the Opening Ceremony venue. Media kits and opening ceremony speeches will also be available at this counter.'),
(10, 'What services will I get as a registered member of the media?', 'As a registered member of the media, the following services will be available to you:\r\nUpdates on the event\r\nUse of the media centre during the exhibition, which provides:\r\nMedia registration and badge collection\r\nMedia kits, conference proceedings and show catalogue (depending on stock availability)\r\nExhibitors\' press releases and event information\r\nPress working area (computer terminals with Internet connection and LAN points for laptops for your use)\r\nProfessionally taken photographs\r\nPublic relations executives to assist in contacting exhibitors and other key officials for interviews\r\nRefreshments throughout the day'),
(11, 'Where will I get the audio / visual / computer equipment and services I need to file stories during the event?', ' media working room is equipped with computers, printers and Internet access and will be made available to registered members of the media. Power points and LAN drops (for Internet access) are also available for the use of personal laptop computers. Should the need for additional electronic equipment arise, the press is to obtain them at their own discretion and cost.'),
(12, ' How much will the equipment and services cost?', 'Only equipment to facilitate communication and filing of stories (listed above) will be provided for free. Any additional equipment and services rendered will be borne by the media.'),
(13, 'How do I obtain photographs of FHA2018?', 'Digital photographs of the event will be available the day after for download at a dedicated computer terminal in the press working room.'),
(14, 'I?m coming from out-of-town to cover FHA2018. Where can I stay?', 'Please click here for the list of travel agents specially appointed to advise and assist with visitor travel requirements.'),
(15, 'How do I get to FHA2018?', 'Please click here for travel information and location map.'),
(16, 'Who do I liaise with at FHA2018?', 'Public Relations Executives will be available on-site for enquires and assistance. Should you require more information, please contact our Public Relations department.'),
(17, 'How do I arrange to interview someone at UBM SES?', 'Please contact our Public Relations department for interview requests.'),
(18, 'I would like to contact an FHA2018 exhibitor for an interview. How can I do that?', 'This can also be arranged by contacting our Public Relations department.'),
(19, 'Where can I find news releases about FHA2018?', 'Press releases are available online at the press releases section of this website. These press releases are also emailed to the media. You may subscribe to this service by writing to Juliet.Tseng@ubm.com with your contact details.'),
(20, 'I would like to be informed of the latest news and updates about FHA2018. How can I do so?', 'Our mailing list provides updates and the latest news on all things related to FHA2018. Should you wish to sign up for this list, please click here.');

-- --------------------------------------------------------

--
-- Table structure for table `option`
--

CREATE TABLE `option` (
  `Id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `FId` int(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `option`
--

INSERT INTO `option` (`Id`, `question`, `FId`) VALUES
(1, 'Lost Password', 1),
(2, 'Why I rejected', 1),
(3, 'FAQ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE `qa` (
  `Id` int(22) NOT NULL,
  `Msg` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qa`
--

INSERT INTO `qa` (`Id`, `Msg`) VALUES
(1, 'Please Provide Name'),
(2, 'Welcome to FAQ Chatbot, Ask Your Question.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `UId` int(22) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`UId`, `Name`, `CompanyName`, `Email`, `Password`) VALUES
(1, 'Charmi Kothari', 'SNT Solution', 'charmikothari35@gmail.com', '8457'),
(2, 'Sunay Patel', 'snt solutions', 'sunay@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `rejection_master`
--

CREATE TABLE `rejection_master` (
  `id` int(22) NOT NULL,
  `uid` int(22) NOT NULL,
  `reject_reason` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rejection_master`
--

INSERT INTO `rejection_master` (`id`, `uid`, `reject_reason`, `event_name`) VALUES
(1, 1, 'Your event atendee criteria doesn\'t match', 'Hospitality'),
(2, 2, 'Your event attendee criteria doesn\'t match', 'Trade show');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `question`, `answer`) VALUES
(1, 'Hi', 'Hi, Chose from the following<br>1.Exhibition Registration<br>2.Overseas exhibitor');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_ol_reg`
--

CREATE TABLE `visitor_ol_reg` (
  `id` int(22) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_ol_reg`
--

INSERT INTO `visitor_ol_reg` (`id`, `name`) VALUES
(1, 'Pre-registration status'),
(2, 'Why rejected'),
(3, 'How to appeal'),
(4, 'Resend confirmation email'),
(5, 'Business Matching');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_option`
--

CREATE TABLE `visitor_option` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_option`
--

INSERT INTO `visitor_option` (`id`, `question`, `answer`) VALUES
(1, 'Exhibition Registration', 'Welcome,<br>Chose from the following<br>1.Onsite registration<br>2.Online Registration<br>3. Group Delegation / Registration<br>4.Student Visit<br> 5.Access to different shows'),
(2, 'Overseas exhibitor', 'Welcome,<br>Chose from the following<br>1.Official Travel Agent<br>2.Official Hotels<br>3. Visa / LOI<br>4. About Singapore');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_opt_two`
--

CREATE TABLE `visitor_opt_two` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `eid` int(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_opt_two`
--

INSERT INTO `visitor_opt_two` (`id`, `question`, `answer`, `eid`) VALUES
(1, 'Onsite Registration', '<a href=\"http://www.foodnhotelasia.com/essential-info/2-venues-1-mega-show/overview-map-of-singapore-expo/\" target=\"_blank\">Map of Singapore Expo</a><br><a href=\"www.foodnhotelasia.com/essential-info/2-venues-1-mega-show/overview-map-of-suntec-singapore/\" target=\"_blank\"> Map of Suntec Singapore Expo</a>', 1),
(2, 'Online Registration', 'Choose from following<br>1. Pre-registration status<br>2. Why rejected<br>3. How to appeal<br>4. Resend confirmation email<br>5. Business Matching', 1),
(3, 'Official Travel Agent', 'Click <a href=\"http://www.foodnhotelasia.com/essential-info/official-hotels-rates/\" target=\"_blank\"> Here </a>', 2),
(4, 'Official Hotels', 'Click <a href=\"http://www.foodnhotelasia.com/essential-info/official-hotels-rates/\" target=\"_blank\"> Here </a>', 2),
(5, 'About Singapore', 'Click <a href=\"http://www.visitsingapore.com/en.html\" target=\"_blank\"> Here </a>', 2),
(6, 'Group Delegation / Registration', 'Click <a href=\"http://www.foodnhotelasia.com/to-visit/visitor-registration/\" target=\"_blank\">here </a>', 1),
(7, 'Student Visit', 'Click <a href=\"http://www.foodnhotelasia.com/to-visit/why-visit/\" target=\"_blank\">here </a>', 1),
(8, 'Access to different shows', 'Click <a href=\"http://www.foodnhotelasia.com/ptm.2016/showcat/main.asp\" target=\"_blank\">here </a>', 1),
(9, 'Visa / LOI', 'Click <a href=\"http://www.foodnhotelasia.com/essential-info/travel-visa-application/\" target=\"_blank\">here </a>', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversion_master`
--
ALTER TABLE `conversion_master`
  ADD PRIMARY KEY (`cid`) USING BTREE;

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `faq` ADD FULLTEXT KEY `question` (`question`);

--
-- Indexes for table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`UId`);

--
-- Indexes for table `rejection_master`
--
ALTER TABLE `rejection_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_ol_reg`
--
ALTER TABLE `visitor_ol_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_option`
--
ALTER TABLE `visitor_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_opt_two`
--
ALTER TABLE `visitor_opt_two`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversion_master`
--
ALTER TABLE `conversion_master`
  MODIFY `cid` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `option`
--
ALTER TABLE `option`
  MODIFY `Id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `qa`
--
ALTER TABLE `qa`
  MODIFY `Id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `UId` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rejection_master`
--
ALTER TABLE `rejection_master`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visitor_ol_reg`
--
ALTER TABLE `visitor_ol_reg`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `visitor_option`
--
ALTER TABLE `visitor_option`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `visitor_opt_two`
--
ALTER TABLE `visitor_opt_two`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
