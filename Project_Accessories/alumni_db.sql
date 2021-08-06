-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 07:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin'),
(2, 'Tisha', 'Tisha');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `body`, `image`, `author`, `tags`, `date`) VALUES
(5, 'Jobs After Graduation For Engineers', 'A consistently high-paying job sector, engineering is as one of the five highest-paid degree subjects, according to 2018 data compiled by NACE. NACE also found that software engineering graduates earn the highest starting salaries of the engineering branches considered, at $70,073.\r\n\r\nOther lucrative graduate roles include those for computer engineers (average starting salary $69,510), chemical engineers ($68,764), electrical engineers ($67,358), and mechanical engineers ($66,659).\r\n\r\nIn the UK, engineering graduates can expect to earn at least Â£25,000 (~$35,550) as their starting salary. Chemical engineering is the most lucrative engineering field in the UK, with an average starting salary of Â£27,696 (~$39,400).\r\n\r\nWhat youâ€™ll need: To become an engineer youâ€™ll be expected to have specialized in the particular field of engineering youâ€™re looking to go into, e.g. aeronautical, chemical, electrical, mechanical, civil or other specialized engineering degree path. Further training and qualifications will further increase your earning potential.', 'image/38391913_1384928861652047_5234996424319434752_o.jpg', 'Ishrat Jahan', 'job, graduation', '2020-01-12 21:34:04'),
(7, 'Courses After Graduation', 'Some of you may wonder â€œWhy courses after graduation?â€. But believe me, in this world of the clash of clans, any little thing that gives you an advantage over others is so damn important. Previously in our country, If a person finished his matriculation then he said to be well educated in social norms and he is also able to find many jobs, later it slowly went up to graduation. Graduation becomes a standard to get a decent job. But now people are running towards higher studies, At the present day, the Number of students who studied Post Graduation is increased by almost 100% when we compared to the last decade. It is a significantly ridiculous growth by any standards.\r\n\r\nNowadays graduation alone is not enough to sustain in this cut-throat competition, specialization in one specific area can make you stand out from the crowd. Even in the general psychological aspect, the recruiters may feel bored to always choose from regular graduates, A specialization course will surely give you an edge in the eyes of a recruiter.\r\n\r\nNote: If youâ€™re in a hurry just have a look at the video and know what are the trending courses. If you want to know the complete information about the courses then read the entire post.\r\n', 'image/38446242_1384921761652757_7787727145983279104_o.jpg', 'Bilasi Debnath', 'aspect, graduate', '2020-01-13 10:58:31'),
(8, '~The Career Blog~ â€“ Career Solutions Bangladesh', 'Never Too Young & Never Too Old: How Entrepreneurship Transcends Time and Age\r\nBy Faria Ahmed\r\n\r\nI was 12-years old when I first rented a stall at the schoolâ€™s annual fair with some friends. We made crafts, cards, baked some goodies at home, and asked mom to make some items too. I then stood by the stall bustling with excitement as people passed by, stopped to ask me about some of the items, their prices and strike up conversations. Each time I could satisfy them with my answer, I made a sale. Items left my table one by one and the little toy cashbox I had brought from home kept getting fuller. I was so proud of myself.', 'image/stu8.jpg', 'Bilasi Debnath', 'Career, Solutions, Bangladesh,brought,from', '2020-01-22 21:06:30'),
(9, 'How Can You Find Your Dream Job', 'In Bangladesh Job Is our dream. Maximum family depend on job.', 'image/stu8.jpg', 'Ishrat Jahan Tisha', 'job, find', '2020-03-12 05:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `session` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`id`, `name`, `position`, `session`, `phone`, `email`, `image`) VALUES
(1, 'Lutfur Rahman', 'President', 'Spring-13', '+880174567892', 'mustak@gmail.com', 'image/9.jpg'),
(4, 'Pranta Sarker', 'Vice-President', 'Spring-14', '+8801761644976', 'oishee@gmail.com', 'image/2.jpg'),
(5, 'Ayon Dey', 'General-Secretary', 'Spring-14', '+8801761644976', 'ayon@gmail.com', 'image/1.jpg'),
(6, 'Saber Rahman', 'Treasurer', 'Spring-14', '+8801761644976', 'saber@gmail.com', 'image/8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(2, 'Mizanur Rahman', 'mizanlnd@gmail.com', '+8801761644976', 'problem', 'hello everyone'),
(3, 'Bilasi Debnath', 'bilasidebnath@gmail.com', '01764340362', 'about registration', 'want to register');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `received` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `reg_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_title`, `date`, `received`, `image`, `description`, `reg_id`) VALUES
(1, 'Winter Camp', '2020-01-14 19:56:55', 'Tipu', 'image/7.jpg', 'For an annual meeting, we organize a program. Please register for this program with 1000 taka registration fees.\r\nPlease take your winter clothes and other accessories.\r\n', '160103020102');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`, `description`) VALUES
(1, 'image/38391913_1384928861652047_5234996424319434752_o.jpg', 'Jobs After Graduation For Engineers'),
(2, 'image/20620904_874915882685233_4341376601062729198_n.jpg', 'Career In Master of Science (M.Sc)');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `company` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `position` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `image` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `company`, `position`, `description`, `link`, `date`, `image`, `location`) VALUES
(1, 'Software Engineer (Android Development) - Mobile R&D', 'Digital Company Bangladesh', 'Senior Software Developer', 'Job Responsibilities!!!\r\nMust have a strong knowledge of Android SDK, different versions of Android, how to deal with different screen sizes and applications with complex UI and Work robustly with Android UI design principles, patterns, and best practices', 'https://g.co/kgs/EC9Wtx', '2020-03-09 20:44:50', 'img/job3.jpg', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `regist_no` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `username`, `email`, `password`, `regist_no`, `session`, `image`, `Status`) VALUES
(14, 'Maliha Nujhat', 'maliha', 'maliha@gmail.com', '123456', '170103020102', 'Spring-30', 'image/IMG_20181104_141201.jpg', ''),
(15, 'Kanjhks', 'sjhjkn', 'yqjhsh@ns.com', '54321', '189643287', 'spring-8', 'image/IMG_20181104_124840.jpg', ''),
(16, 'Ishrat Jahan', 'kamsn', 'jsdsjkdjk@hshajk.com', '91307071', '179390249948', 'kajsxdhabjh', 'image/IMG_20181104_124904.jpg', ''),
(17, 'Ishrat Jahan M', 'djksh', 'hsajhs@bsaj.com', '1234', '37489479478', 'spring-17', 'image/IMG_20181104_124904.jpg', ''),
(18, 'hdbkjasdk', 'djkd', 'jkd@jnsajn', '123456', '728123867681', 'dnajkn', 'image/IMG_20181104_124853.jpg', ''),
(19, 'ishrat ', 'tisha', 'ghg@gmail.com', '123', '1233456', 'spr', 'img/7.jpg', ''),
(20, 'tahi chw', 'tahi', 'tahi@uhukh', '12345', '1701030', '12345', 'img/4.jpg', ''),
(21, 'Ishrat Jahan Tisha', 'tisha', 'tisha@gmail.com', '123456', '170103020102', 'spring-17', 'img/IMG_3579.JPG', ''),
(22, 'name', 'username', 'email', 'password', '170103020102', 'session', 'image', ''),
(1233, 'name', 'username', 'email', 'password', '170103020102', 'session', 'image', ''),
(12384, 'name', 'username', 'email', 'password', '170103020102', 'Spring-17', 'image.jpg', ''),
(12385, 'name', 'username', 'email', 'pass', 'reg_num', 'session', 'avatar', ''),
(12386, 'Sharif', 'sharif', 'sharif@gmail.com', '123456', '1703020102', 'Summer-18', 'img/13948564.jpg', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12387;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
