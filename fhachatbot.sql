-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 09:20 AM
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
-- Table structure for table `generalinfo`
--

CREATE TABLE `generalinfo` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalinfo`
--

INSERT INTO `generalinfo` (`id`, `question`, `answer`) VALUES
(1, 'General Information', 'Chose from the following<br>1.Opening Hours<br>2.Dates/Day<br>3.Venues<br>4.Admission<br>5.ProWine Asia');

-- --------------------------------------------------------

--
-- Table structure for table `generalinfo_basic`
--

CREATE TABLE `generalinfo_basic` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `gid` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalinfo_basic`
--

INSERT INTO `generalinfo_basic` (`id`, `question`, `answer`, `gid`) VALUES
(1, 'Intervenue Shuttle Bus', 'Click <a href=\"http://www.foodnhotelasia.com/essential-info/shuttle-bus-services/\" target=\"_blank\">Here </a>to view the shuttle Bus schedule', 1),
(3, 'Official Hotel Shuttle Bus', 'Click <a href=\"http://www.foodnhotelasia.com/essential-info/shuttle-bus-services/\" target=\"_blank\">Here</a>  to view the shuttle bus schedule', 1),
(5, 'Public Transport', 'Located just 10 minutes from Singapore Changi International Airport and 30 minutes from the Central Business District, Singapore Expo is easily accessible by the local train network (known as MRT in Singapore), taxi, public buses and cars. Click <a href=\"www.foodnhotelasia.com/gettingthere\" target=\"_blank\"> Here</a> to find out more.', 1),
(8, 'Driving to Singapore Expo', 'Choose From the following<br>1.Nearest Carparks<br>2.Complimentary Parking', 1),
(9, 'Intervenue Shuttle Bus', 'Click <a href=\"www.hotel-asia.com/getting-to-hotelasia\" target=\"_blank\"> Here</a> to view the shuttle bus schedule', 3),
(10, 'Official Hotel Shuttle Bus', 'Click <a href=\" www.hotel-asia.com/getting-to-hotelasia\" target=\"_blank\"> Here</a> to view the shuttle bus schedule', 3),
(11, 'Public Transport', 'Convenient located within the city centre, Suntec Singapore is easily accessible by the local train network (known as MRT in Singapore), taxi, public buses and cars. Click <a href=\"www.foodnhotelasia.com/gettingthere\" target=\"_blank\">Here</a> to find out more', 3),
(12, 'Driving to Suntec Singapore', 'Choose From the following<br>1.Nearest Carparks<br>2.Complimentary Parking', 3);

-- --------------------------------------------------------

--
-- Table structure for table `generalinfo_basic2`
--

CREATE TABLE `generalinfo_basic2` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `xid` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalinfo_basic2`
--

INSERT INTO `generalinfo_basic2` (`id`, `question`, `answer`, `xid`) VALUES
(1, 'Nearest Carparks', 'Alternative car parks are located at the neighbouring shopping mall, hotel and business buildings all within walking distance from Singapore Expo. Visitors can also consider parking their cars at the airport and take a 3 minutes train ride to Singapore Expo', 8),
(2, 'Complimentary Parking', 'There will be no complimentary parking available at Singapore Expo. Click <a href=\"www.foodnhotelasia.com/gettingthere\" target=\"_blank\"> Here</a> for the parking rates at Singapore Expo. Alternatively, you may consider parking at the nearby carparks ', 8),
(3, 'Nearest Carparks', 'TBC', 12),
(4, 'Complimentary Parking', 'TBC', 12);

-- --------------------------------------------------------

--
-- Table structure for table `generalinfo_opt2`
--

CREATE TABLE `generalinfo_opt2` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `mid` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalinfo_opt2`
--

INSERT INTO `generalinfo_opt2` (`id`, `question`, `answer`, `mid`) VALUES
(1, 'Getting to Singapore Expo', 'Choose From the following<br>1.Intervenue Shuttle Bus<br>2.Official Hotel Shuttle Bus<br>3.Public Transport<br>4.Driving to Singapore Expo', 3),
(2, 'Facilities at Singapore Expo', 'Choose From the following<br>1.Wifi<br>2.Muslim Prayer Room<br>3.Business Centre<br>4.Left Luggage<br>5.Childcare<br>6.Nursing Room<br>7.First Aid Room<br>8.Mobile Charging Station<br>9.Taxi Stand<br>10.Nearest Carparks<br>11.Complimentary Parking<br>12.F&B Outlets<br>13.Rest Areas', 3),
(3, 'Getting to Suntec Singapore', 'Choose From the following<br>1.Intervenue Shuttle Bus<br>2.Official Hotel Shuttle Bus<br>3.Public Transport<br>4.Driving to Singapore Expo', 4),
(4, 'Facilities at Suntec Singapore', 'Choose From the following<br>1.Wifi<br>2.Muslim Prayer Room<br>3.Business Centre<br>4.Left Luggage<br>5.Childcare<br>6.Nursing Room<br>7.First Aid Room<br>8.Mobile Charging Station<br>9.Taxi Stand<br>10.Nearest Carparks<br>11.Complimentary Parking<br>12.F&B Outlets<br>13.Rest Areas', 4);

-- --------------------------------------------------------

--
-- Table structure for table `generalinfo_option`
--

CREATE TABLE `generalinfo_option` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalinfo_option`
--

INSERT INTO `generalinfo_option` (`id`, `question`, `answer`) VALUES
(1, 'Opening Hours', 'The opening hours of the exhibition is from 9 am and closes at 6pm on all 4 days of FHA.'),
(2, 'Dates/Day', 'FHA2018 is held from 24 - 27 April 2018, Tuesday - Friday, at Singapore Expo and Suntec Singapore.'),
(4, 'Admission', ''),
(5, 'ProWine Asia', ''),
(6, 'venues', 'FHA2018 will be held at Singapore Expo and Suntec Singapore. May I know which venue you are enquiring on?');

-- --------------------------------------------------------

--
-- Table structure for table `generalinfo_opt_two`
--

CREATE TABLE `generalinfo_opt_two` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `sid` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalinfo_opt_two`
--

INSERT INTO `generalinfo_opt_two` (`id`, `question`, `answer`, `sid`) VALUES
(3, 'Singapore Expo', 'Choose From the following<br>1.Getting to Singapore Expo<br>2.Facilities at Singapore Expo', 6),
(4, 'Suntec Singapore', 'Choose From the following<br>1.Getting to Suntec Singapore<br>2.Facilities at Suntec Singapore', 6),
(5, 'Admission Guidelines', 'Admission to the exhibition is strictly for professionals in the food and hospitality trade only. We seek your understanding that this is a trade event and that all visitors should be in proper business attire. Click <a href=\"www.foodnhotelasia.com/admission\" target=\"_blank\"> Here </a>for more details.', 4),
(6, 'Admission Fee / Purchase Ticket', 'To enter the exhibition of Food&HotelAsia2018, visitors will have to purchase an admission ticket which costs SGD80 (inclusive of 7% GST). However, you can enjoy free admission if you pre-register your visit before 12 April 2018.Click <a href=\"www.foodhotelasia.com/preregister\" target=\"_blank\"> Here</a> to pre-register for free admission upon approval.', 4),
(7, 'About ProWine Asia', 'ProWine Asia (Singapore) 2018 features a wide congregation of international wine and spirit labels from more than 300 exhibitors. As Southeast Asia premier one-stop sourcing platform for the wines and spirits sectors, you can expand business network and stay abreast of industry trends at the wine tasting sessions, wine cocktail challenge, seminars and workshops. For more information, please <a href=\"www.prowineasia.com/sg\" target=\"_blank\"> log</a> on.', 5),
(8, 'Visitor Registration to ProWine Asia', 'Onsite registration for ProWine Asia is at Hall 10. You can click here for the map of Singapore Expo & the location of the registration counter.<br><a href=\"http://www.foodnhotelasia.com/files/FHA2018_OverviewMap_SingaporeExpo.pdf\" target=\"_blank\">Overview Map of Singapore Expo</a><br>You can register for the exhibition at click <a href=\"http://www.prowineasia.com/sg/index.php/visitor-pre-registration\" target=\"_blank\"> Here</a> (TBC).The same badge will allow you entry into the FHA exhibition halls.', 5);

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
(1, 'Visiting', 'Hi, Chose from the following<br>1.Exhibition Registration<br>2.Overseas exhibitor');

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
(5, 'Business Matching'),
(6, 'FoodAsia'),
(7, 'Bakery&Pastry'),
(8, 'SpecialityCoffee&Tea'),
(9, 'HospitalityStyleAsia'),
(10, 'HospitalityTechnology'),
(11, 'ProWine Asia'),
(12, 'HotelAsia - Suntec Singapore');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_option`
--

CREATE TABLE `visitor_option` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_option`
--

INSERT INTO `visitor_option` (`id`, `question`, `answer`) VALUES
(1, 'Exhibition Registration', 'Welcome,<br>Chose from the following<br>1.Onsite registration<br>2.Online Registration<br>3. Group Delegation / Registration<br>4.Student Visit<br> 5.Access to different shows'),
(2, 'Overseas exhibitor', 'Welcome,<br>Chose from the following<br>1.Official Travel Agent<br>2.Official Hotels<br>3. Visa / LOI<br>4. About Singapore'),
(3, 'Pre-Event Preparation', 'Welcome,<br>Chose from the following<br>1.Mobile App (Gen info + functions)<br>2.Online Show Catalogue<br>3. Business Matching (Gen info + functions)<br>4. Sub-shows<br>5.List of exhibitors'),
(4, 'Whats New', 'Welcome,<br>Chose from the following<br>1.New Exhibitors<br>2.New Products<br>3. New Competitions<br>4. New Speakers<br>5.New Activities'),
(5, 'Key Statistics', 'Welcome,<br>Chose from the following<br>1.Number of Exhibitors<br>2.Number of Group Pavilions<br>3.Number of Countries<br>4. Size of exhibition space'),
(6, 'Show Directory', ''),
(7, 'VIP Qualification', ''),
(8, 'Social media', 'Click <a href=\"http://www.foodnhotelasia.com/about-fha/social-media/\" target=\"_blank\"> Here</a>'),
(9, 'Free Seminars at the exhibition', 'To provide an enriching experience for our visitors, we have prepared a list of free workshops and activites.   They include: - Digital Marketing Workshops - Business workshops - Thematic Tours. Click <a href=\"http://www.foodnhotelasia.com/events-competitions/competitions/\" target=\"_blank\"> here</a> for more information. ');

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
(1, 'Onsite Registration for FHA', 'You can register online or onsite for the event. For onsite registration, there will be an admission fee of SGD 80 for each person. \r\n\r\nIn 2018, FHA will be held across 2 venues. \r\nSuntec Singapore\r\nPlease head over to Level 3 for onsite registration.\r\nSingapore Expo\r\nOnsite registration is at Max Atria & Hall 9. \r\nYou can click here for the Overview Map of Suntec Singapore & Singapore Expo.<br><a href=\"http://www.foodnhotelasia.com/files/FHA2018_OverviewMap_SingaporeExpo.pdf\" target=\"_blank\">Map of Singapore Expo</a><br><a href=\"http://www.foodnhotelasia.com/files/FHA2018_OverviewMap_SuntecSingapore.pdf\" target=\"_blank\"> Map of Suntec Singapore Expo</a>', 1),
(2, 'Online Pre-registration for FHA', 'Choose from following<br>1. Pre-registration status<br>2. Why rejected<br>3. How to appeal<br>4. Resend confirmation email<br>5. Business Matching', 1),
(3, 'Official Travel Agent', 'Click <a href=\"http://www.foodnhotelasia.com/essential-info/official-hotels-rates/\" target=\"_blank\"> Here </a>', 2),
(4, 'Official Hotels', 'Click <a href=\"http://www.foodnhotelasia.com/essential-info/official-hotels-rates/\" target=\"_blank\"> Here </a>', 2),
(5, 'About Singapore', 'Click <a href=\"http://www.visitsingapore.com/en.html\" target=\"_blank\"> Here </a>', 2),
(6, 'Group Delegation / Registration', 'There are special privileges for companies or trade associations coming in a group. Click <a href=\"http://www.foodnhotelasia.com/to-visit/group-delegation-programme/\" target=\"_blank\">here </a> for a list of the privileges. ', 1),
(7, 'Student Visit', 'Food&HotelAsia is a trade event where only trade visitors will be allowed direct entry. \r\nHowever, we have a special programme for students. Click <a href=\"www.foodnhotelasia.com/studentprogramme\" target=\"_blank\">here </a> for more information. ', 1),
(8, 'Access to different shows', 'Once you have collected your badge, it will allow you entry into all the specialised events including HotelAsia at Suntec Singapore. ', 1),
(9, 'Visa / LOI', 'Click <a href=\"http://www.foodnhotelasia.com/essential-info/travel-visa-application/\" target=\"_blank\">here </a>', 2),
(13, 'Onsite Registration for ProWine Asia', 'Onsite registration for ProWine Asia is at Hall 10. You can click here for the map of Singapore Expo & the location of the registration counter<br>\r\n<a href=\"http://www.foodnhotelasia.com/files/FHA2018_OverviewMap_SingaporeExpo.pdf\" target=\"_blank\">Map of Singapore Expo</a>', 1),
(14, 'Online Pre-registration for ProWine Asia', 'You can register for the exhibition at <a href=\"http://www.prowineasia.com/sg/index.php/visitor-pre-registration\" target=\"_blank\">(TBC)</a>. The same badge will allow you entry into the FHA exhibition halls', 1),
(15, 'Mobile App (Gen info + functions)', 'The Food&HotelAsia & Prowine Mobile App is developed to  enable you to plan your trip and move around the entire exhibition with ease. Check out the latest schedule and navigate around with the path finder. ', 3),
(16, 'Online Show Catalogue', 'TBC', 3),
(17, 'Business Matching (Gen info + functions)', 'Do you know that you can start fixing appointments with other attendees at the show, before it starts? Hurry! Make use of this useful tool to maximise your time at the show!', 3),
(18, 'Sub-shows', 'Food&HotelAsia is the most comprehensive show in Asia for the food and hospitality industry. This mega show will be held across 2 venues in 2018 for the first time!\r\nThere are 6 specialised and 1 co-located event. Click here to find out more about each of the specialised show', 3),
(19, 'List of exhibitors', 'Click <a href=\"Link to: www.foodnhotelasia.com/to-visit/2018-exhibitor-list/\" target=\"_blank\">Here</a>', 3),
(20, 'New Exhibitors', 'Click <a href=\"www.foodnhotelasia.com/to-visit/2018-exhibitor-list/\" target=\"_blank\"> Here</a>', 4),
(21, 'New Products', 'TBC', 4),
(22, 'New Competitions', 'FHA2018 will see participation by international culinary professionals, chaired by panels of some of the world\'s most renowned judges. \r\nClick <a href=\"http://www.foodnhotelasia.com/events-competitions/competitions/\" target=\"_blank\">Here</a>', 4),
(23, 'New Speakers', 'TBC', 4),
(24, 'New Activities', 'FHA is recognised in the industry as the sourcing, knowledge exchange and networking platform. \r\nA host of workshops, competitions and activities include:\r\n\r\nSuntec\r\n- Digital Marketing Workshops\r\n- Business workshops\r\n- Thematic Tours\r\n- SCI Equipment Award\r\nClick here for more information. <http://www.foodnhotelasia.com/events-competitions/competitions/>\r\n\r\nSingapore Expo\r\n- Gelato Zone\r\n- Asian Gelato Cup \r\n- FHA Culinary Challenge and many more!\r\nClick <a href=\"http://www.foodnhotelasia.com/events-competitions/competitions/\" target=\"_blank\"> here</a> for more information. \r\n', 4),
(25, 'Number of Exhibitors', '4000 exhibitors from 70 countries / regions', 5),
(26, 'Number of Group Pavilions', '68 Group Pavilions', 5),
(27, 'Number of Countries', '70 countries / regions from around the globe', 5),
(28, 'Size of exhibition space', '119,500 sqm', 5);

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
-- Indexes for table `generalinfo`
--
ALTER TABLE `generalinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalinfo_basic`
--
ALTER TABLE `generalinfo_basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalinfo_basic2`
--
ALTER TABLE `generalinfo_basic2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalinfo_opt2`
--
ALTER TABLE `generalinfo_opt2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalinfo_option`
--
ALTER TABLE `generalinfo_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalinfo_opt_two`
--
ALTER TABLE `generalinfo_opt_two`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `generalinfo`
--
ALTER TABLE `generalinfo`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `generalinfo_basic`
--
ALTER TABLE `generalinfo_basic`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `generalinfo_basic2`
--
ALTER TABLE `generalinfo_basic2`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `generalinfo_opt2`
--
ALTER TABLE `generalinfo_opt2`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `generalinfo_option`
--
ALTER TABLE `generalinfo_option`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `generalinfo_opt_two`
--
ALTER TABLE `generalinfo_opt_two`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `visitor_option`
--
ALTER TABLE `visitor_option`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `visitor_opt_two`
--
ALTER TABLE `visitor_opt_two`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
