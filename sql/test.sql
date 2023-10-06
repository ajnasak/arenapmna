-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 08:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `ourarena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`, `ourarena`) VALUES
(1, '<p>Arena Animation is the creative training division of Aptech Ltd. Arena is specialized in Animation, Web designing,VFX &amp; Multimedia and over the past 25 years, Arena Animation has successfully trained more than 450,000 students. The Institute provides world-class education to prepare students for creative careers through its wide network of centres in over 20 countries. India is a huge market for outsourced international animation projects and for in-house work in various studios. Arena Animation seeks to fulfill this demand for skilled professionals through a variety of animation, film making, VFX, gaming, multimedia &amp; web designing courses. Our Perinthalmanna Centre is Build up in a world class standered so that our students get maximum out of thier study..</p>\r\n<!-- img -->', '<p>Arena Animation Perinthalmanna is a wonderful place to learn and enjoy the exciting world of Animation, Perinthalmanna Arena is the largest animation training campus in Kerala with high end chroma floor and digital studio. Arena Perinthalmanna leads the animation training market with its outstanding infrastructure and innovative programs. From basic graphic designing to complex Vfx designs our unmatched training facilities helps students to gain the extra edge over others. Started in 2002, Arena Animation Perinthalmanna centre is the first animation training centre in Malappuram district. We commenced training in animation at a period where the animation and special effect was an amazing content of Hollywood films. Our efforts to create animation and multimedia awareness among the students later created lots of talented creative artist and successful careers. Arena Animation Perinthalmanna is the authorized training partner of Aptech ltd. Systech digital Media, the franchisee partner of Aptech limited is operating the centre. Veterans form different business and industries are behind this successful venture. Mr Kizhissery Veeranktty is the managing partner of Systech Digital Media is the guiding man of the centre. Mr Konikuzhiyil Azeez Haji, Business man, Education and Social Welfare Organizer, Mr Nalakath Rasheed, Managing Director of Moulana Hospital, one of the largest healthcare institution in Kerala and Mr Konikuzhiyil Salim, Business Man are other pillars of this Institution. In addition Dr. Amal K.K, who is very much into multimedia is the Chairman of the Team. Now that Arena Animtion Perinthalmanna is Attched with a Channel Named U Cube, where only arena students are working on. Monsters University, Despicable Me and Cars becoming big box office hits, the importance of the animation industry lasts to grow. Animation is the rapid succession of a number of 2D or 3D images which give the illusion of movement. The animation industry includes the web, television, films, and video games. 2D and 3D animators can also work in the area of video game designing. Those who are passionate about an animation career can walk into Arena Perinthalmanna centre to get the best information about the industry and of course about the opportunities too. Come on&hellip;Visit our world class centre and feel the difference..</p>\r\n\r\n<h2>Learn From the leader</h2>\r\n\r\n<p>Arena Animation imparts quality education in Animation, Web designing, VFX, Gaming &amp; Multimedia.<br />\r\nThese trained professionals find job placements in major studios across India &amp; overseas Here is how Arena ensures high standards:</p>\r\n\r\n<h2>Online Portal:</h2>\r\n\r\n<p>E-books, study material and video tutorials, all available on Online varsity. www.onlinevarsity.com</p>\r\n\r\n<h2>Multiple course options:</h2>\r\n\r\n<p>Variety of career &amp; short-term courses tailored to the needs of students &amp; working professionals.<br />\r\nWe offer updated, industry-oriented courses in Animation, VFX, Web, UI &amp; UX, and Graphic Design.<br />\r\nWith a long tradition of excellence as the top digital media school in India, we have an unmatched<br />\r\nplacement record, rich training experience of 20 years, perceptive career counseling, extensive learning<br />\r\nresources, and earnest mentoring, we&rsquo;ve endeared ourselves to students seeking career-oriented training<br />\r\nin animation and VFX and the best web and graphic design training.</p>\r\n\r\n<h2>Quality faculty:</h2>\r\n\r\n<p>Trained &amp; certified faculty with A Grade certification who teach the latest techniques in the animation industry,<br />\r\nusing the most cutting-edge software. Thanks to such training, Arena students create award-winning, quality animation<br />\r\nfilms. We are Proud to say that all our faculties of Arena Animation Perinthalmanna are A Grade Certified</p>\r\n\r\n<h2>Job-ready students:</h2>\r\n\r\n<p>Workshops and events such as Creative Minds &amp; Perspectives, as well as studio visits are organized to encourage<br />\r\nstudent-industry interaction and prepare students to be industry-ready. Seminars provided by Experts from industry<br />\r\nin every Saturdays makes our centre alive.</p>\r\n\r\n<h2>Placement activities:</h2>\r\n\r\n<p>Job fairs, campus placement drives, etc are conducted for students to get suitable job placements in the industry.<br />\r\nEvery two months we are having Campus Placements.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `arenagallery`
--

CREATE TABLE `arenagallery` (
  `id` int(11) NOT NULL,
  `p_name` varchar(500) NOT NULL,
  `gallery` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `arenagallery`
--

INSERT INTO `arenagallery` (`id`, `p_name`, `gallery`) VALUES
(6, 'b', '1266755087_09-09-2023_0328am.png'),
(7, 'c', '1884054961_09-09-2023_0150am.png'),
(8, 'd', '1621360809_09-09-2023_0150am.png'),
(9, 'e', '967999688_09-09-2023_0150am.png'),
(10, 'f', '13845983_09-09-2023_0151am.png'),
(11, 'g', '1461827290_09-09-2023_0151am.png'),
(12, 'h', '190033414_09-09-2023_0151am.png'),
(13, 'i', '1333455517_09-09-2023_0152am.png'),
(15, 'a', '127621731_09-09-2023_0242am.png');

-- --------------------------------------------------------

--
-- Table structure for table `creosouls`
--

CREATE TABLE `creosouls` (
  `id` int(11) NOT NULL,
  `creosoulscke` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `creosouls`
--

INSERT INTO `creosouls` (`id`, `creosoulscke`) VALUES
(1, '<p>When it comes to proving yourself during your job interview, it is important for you to make a portfolio of your creative works and showcase them. Arena Animation guides you in building and showcasing a portfolio that will make recruiters want to hire you.&nbsp;Creosouls is a one stop online portfolio management &amp; social networking platform for Arena Animation students. In Creosouls, you can upload your creative portfolio, share with the world, enhance your industry network, and get hired.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `onlinevarsity`
--

CREATE TABLE `onlinevarsity` (
  `id` int(11) NOT NULL,
  `onlinevarsitycke` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `onlinevarsity`
--

INSERT INTO `onlinevarsity` (`id`, `onlinevarsitycke`) VALUES
(1, '<p><strong>Get knowledge at your fingertips!</strong>Onlinevarsity is a learning app, exclusively for Aptech students. Now study on-the-go, right from your mobile phones. Benefit from a wide array of features such as:</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `studentgallery`
--

CREATE TABLE `studentgallery` (
  `id` int(11) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `work` varchar(100) NOT NULL,
  `gallery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `studentgallery`
--

INSERT INTO `studentgallery` (`id`, `stu_name`, `work`, `gallery`) VALUES
(80, 'arun', '3D Asset Design', '1191451147_09-12-2023_0516am.jpg'),
(83, 'arun', 'Graphic Design', '706696623_09-12-2023_0604am.jpg'),
(84, 'abu', 'Web Design', '1829305451_09-12-2023_0611am.png'),
(85, 'arun', 'Graphic Design', '249474330_09-12-2023_0613am.png'),
(86, 'arena', '3D Asset Design', '332170404_10-03-2023_1132am.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(23, 'ajnas ak', 'nasiajnas77@gmail.com', '$2y$10$EpejJQsXCxDgePhtgKHUW.k4R36YGfljUoX2PoOWAGbaES5FNdiZi', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `work` varchar(100) NOT NULL,
  `youtube_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `stu_name`, `work`, `youtube_link`) VALUES
(2, 'ARUN M', '3D Asset Design', '6GYJFWKIu_s?si=I7IQs81fr1RLyA5f'),
(3, 'ajnas', 'Motion Graphics', 'LJSyb82tGS0'),
(4, 'anu', 'Web Design', 'KaEjHKNzqiU'),
(5, 'rinshad', 'Web Design', 'qnOKkQ-aaEw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arenagallery`
--
ALTER TABLE `arenagallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creosouls`
--
ALTER TABLE `creosouls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onlinevarsity`
--
ALTER TABLE `onlinevarsity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentgallery`
--
ALTER TABLE `studentgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arenagallery`
--
ALTER TABLE `arenagallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `creosouls`
--
ALTER TABLE `creosouls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `onlinevarsity`
--
ALTER TABLE `onlinevarsity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentgallery`
--
ALTER TABLE `studentgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
