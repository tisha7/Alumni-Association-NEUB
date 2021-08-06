-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 09:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `username` varchar(100) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `body`, `image`, `author`, `username`, `tags`, `date`) VALUES
(24, 'How To become a Computer Systems Analyst ', '\r\n\r\nComputer systems analysts assess an organization\'s computer systems and recommend changes to hardware and software to enhance the company\'s efficiency.\r\n\r\nBecause the job requires regular communication with managers and employees, computer systems analysts need to have strong interpersonal skills. Systems analysts need to be able to convince staff and management to adopt technology solutions that meet organizational needs.\r\n\r\nAlso, systems analysts need the curiosity and thirst for continual learning to track trends in technology and research cutting-edge systems.\r\n\r\nSystems analysts also need business skills to recognize what\'s best for the entire organization. Similar job titles are business analysts or business systems analysts.\r\n\r\nAccording to the BLS, computer systems analysts earned a median income of $90,920 in May 2019, and employment was expected to grow by 9% from 2018 to 2028—about as fast as average.', 'image/tksdjkla.jpg', 'admin', '', ' Systems, analysts, also, need, business, skills, to, recognize', '2020-06-24 16:52:13'),
(25, 'How to become Computer Network Architect', '\r\n\r\nComputer network architects design, implement, and maintain networking and data communication systems, including local area networks, wide area networks, extranets, and intranets. They assess the needs of organizations for data sharing and communications.\r\n\r\nComputer network architects also evaluate the products and services available in the marketplace. Computer network architects test systems before they are implemented and resolve problems as they occur after the setup is in place.\r\n\r\nComputer network architects need to have the analytical skills to evaluate computer networks.\r\n\r\nAccording to the BLS, computer network architects earned a median income of $112,690 in May 2019, and employment was expected to grow by 5% from 2018 to 2028—about as fast as average.', 'image/network.jpg', 'admin', '', 'According, to, the, BLS, computer, network, architects, earned', '2020-06-24 16:55:10'),
(26, 'CNAP Academy, CSE, NEUB', 'continuing education, and globallyrecognized certifications.certifications and professional career opportunities.certifications and professional career opportunities.certifications and professional career opportunities.certifications and professional career opportunities.certifications and professional career opportunities.', 'image/CouseOverview3.JPG', 'Ishrat Jahan Tisha', 'tisha', 'certifications, professional, career, opportunities,', '2020-06-24 17:45:35'),
(27, 'Duties of a Computer Architect', 'One may become a network architect by achieving various degrees and certifications.. As for the fields of study, it is up to one’s preferences. The usual degrees include engineering, information systems, and computer science. Since a network architect is expected to work with varied networks and technologies, additional certification is also recommended.', 'image/5dc01dfcf122b3640b3ec71d_becoming-a-network-architect.jpg', 'Ishrat Jahan Tisha', 'tisha', 'Duties, of, a, Computer, Architect', '2020-06-24 17:49:55'),
(28, 'IT', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwi29L-b46nqAhWGxzgGHQiIBUIQlO8DMAZ6BAgQEAg&url=https%3A%2F%2Fwww.prothomalo.com%2Fbangladesh%2Farticle%2F1666050%2F%25E0%25A6%25B8%25E0%25A6%2582%25E0%25A6%25B8%25E0%25A6%25A6%25E0%25A7%2587-%25E0%25A6%25B8%25E0%25A7%258D%25E0%25A6%25AC%25E0%25A6%25BE%25E0%25A6%25B8%25E0%25A7%258D%25E0%25A6%25A5%25E0%25A7%258D%25E0%25A6%25AF%25E0%25A6%25AE%25E0%25A6%25A8%25E0%25A7%258D%25E0%25A6%25A4%25E0%25A7%258D%25E0%25A6%25B0%25E0%25A7%2580%25E0%25A6%25B0-%25E0%25A6%2595%25E0%25A6%25A0%25E0%25A7%258B%25E0%25A6%25B0-%25E0%25A6%25B8%25E0%25A6%25AE%25E0%25A6%25BE%25E0%25A6%25B2%25E0%25A7%258B%25E0%25A6%259A%25E0%25A6%25A8%25E0%25A6%25BE-%25E0%25A6%25B8%25E0%25A6%25B0%25E0%25A6%25BE%25E0%25A6%25A8%25E0%25A7%258B%25E0%25A6%25B0-%25E0%25A6%25A6%25E0%25A6%25BE%25E0%25A6%25AC%25E0%25A6%25BF&usg=AOvVaw1yP8GS8n4kUva18Q3wwNqR', 'image/240_F_165552853_suJAIz3IEZ5Isv7JKGZyldfS0zss0iPj.jpg', 'Ishrat Jahan Tisha', 'tisha', 'Software', '2020-06-30 14:48:07');

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
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_title`, `date`, `received`, `image`, `description`, `username`) VALUES
(1, 'Winter Camp', '2020-01-14 19:56:55', 'admin', 'image/7.jpg', 'For an annual meeting, we organize a program. Please register for this program with 1000 taka registration fees.Please take your winter clothes and other accessories.', 'admin'),
(2, 'Stay At Home', '2020-04-01 18:46:57', 'Ishrat Jahan Tisha', 'image/newfacebook1.png', 'This is a time for practicing austerity. Don’t buy anything beyond minimal necessity. Do not stockpile goods. Give scopes to people with limited income to purchase their essentials.', 'tisha'),
(3, 'How you can keep thousands of people from getting coronavirus', '2020-04-01 19:11:06', 'Bilasi Debnath', 'image/7QI2M5E2JUI6RNQLDSEX6F7BQU.jpg', 'If you think you don’t have a huge role to play in how the coronavirus outbreak plays out, think again. You have the potential to make this pandemic so much worse.That’s because the coronavirus is both more contagious and more deadly than the common f', 'bilasi'),
(6, 'Join to Our Biggest Fesival Arranged By NEUB', '2020-06-23 00:43:55', 'Ishrat Jahan Tisha', 'image/240_F_165552853_suJAIz3IEZ5Isv7JKGZyldfS0zss0iPj.jpg', 'The riverine country of Bangladesh (“Land of the Bengals”) is one of the most densely populated countries in the world, and its people are predominantly Muslim. As the eastern portion of the historical region of Bengal, the area once formed, along with wh', 'tisha'),
(8, 'Nice Event Graduation Party', '2020-06-24 17:08:54', 'admin', 'image/university-dhaka.jpg', '\r\n\r\nComputer network architects design, implement, and maintain networking and data communication systems, including local area networks, wide area networks, extranets, and intranets. They assess the needs of organizations for data sharing and communicati', 'admin');

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
  `location` varchar(100) DEFAULT NULL,
  `author` varchar(55) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `company`, `position`, `description`, `link`, `date`, `image`, `location`, `author`, `username`) VALUES
(1, 'Software Engineer (Android Development) - Mobile R&D', 'Digital Company Bangladesh', 'Senior Software Developer', 'Job Responsibilities!!!\r\nMust have a strong knowledge of Android SDK, different versions of Android, how to deal with different screen sizes and applications with complex UI and Work robustly with Android UI design principles, patterns, and best practices', 'https://g.co/kgs/EC9Wtx', '2020-03-09 20:44:50', 'image/job3.jpg', 'Sylhet', 'Bilasi Debnath', ''),
(2, 'Bangladesh Bank job circular 2020', 'Bangladesh Bank', 'Assistant Engineer', 'Bangladesh Bank Job Circular 2020 has published. Bangladesh Bank offer new BD Jobs for their office. There are some vacant posts in the job circular. See the job circular at www.bdgovtjob.net.\r\n\r\nJob Summary\r\nCompany Name: Bangladesh Bank\r\nJob Location: A', 'https://bdgovtjob.net/bangladesh-bank-job-circular/?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic', '2020-04-01 19:55:51', 'image/131128bb-kk.jpg', 'Sylhet, Bangladesh', 'Ishrat Jahan Tisha', 'tisha'),
(5, 'Community Development Centre Job Circular 2020', 'Community Development Centre (CODEC)', 'Govt Jobs', 'Network Development Center-CODEC Job Circular 2020 www.codecbd.org has been distributed by their clout in New occupation opportunity Notice at Online Apply. We additionally posted CODEC Job Circular and found in my site in Jobnewspaperbd.com. CODEC Ngo Jo', 'https://jobnewspaperbd.com/community-development-centre-job-circular/?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic', '2020-06-20 16:28:39', 'image/8044-768x768.png', 'Raipur', 'Ishrat Jahan', '');

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
  `transaction` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `username`, `email`, `password`, `regist_no`, `session`, `image`, `transaction`, `amount`) VALUES
(12399, 'Muntaha Maria', 'muntaha', 'muntahamaria@gmail.com', '123456', '140103020405', 'Spring-14', 'img/dhaka-bangladesh-may-03-2020-a-bangladeshi-boy-wear-protective-suit-as-his-parents-take-precauti', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg_members`
--

CREATE TABLE `reg_members` (
  `id` int(100) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `regist_no` varchar(100) CHARACTER SET latin1 NOT NULL,
  `session` varchar(100) CHARACTER SET latin1 NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_members`
--

INSERT INTO `reg_members` (`id`, `name`, `username`, `email`, `password`, `regist_no`, `session`, `image`) VALUES
(21, 'Ishrat Jahan Tisha', 'tisha', 'tisha@gmail.com', '123456', '170103020102', 'spring-17', 'img/IMG_3579.JPG'),
(23, 'Nujhat Maliha', 'maliha', 'maliha@gmail.com', '123456', '160103020029', 'Spring-15', 'img/2de57f8025bd64dffd554de0f080ee7f--my-pinterest-pinterest-board.jpg'),
(24, 'Bilasi Debnath', 'bilasi', 'bilasi@gmail.com', '123456', '150103020102', 'Spring-16', 'img/1 oQHKXVfP324yH_401DFWnA.jpeg'),
(25, 'Biplob Debnath', 'biplob', 'biplob@gmail.com', '123456', '180103020102', 'Spring-18', 'img/images.jpg'),
(27, 'dbsbsjs', 'bhdsbdasb', 'ksdhufs@hsbdhskbdk', '123456', '15723287426429', 'ldhfuofods', 'img/Md_Ashraful_Amin.jpg'),
(28, 'Mizanur Rahman', 'mizanur', 'mizanur@gmail.com', '123456', '170102010201', 'spring-17', 'img/TH28-DESPATCH-ARUN.jpg'),
(30, 'Rabia Khatun', 'rabia', 'rabia@gmail.com', '123456', '130103020102', 'Fall-13', 'img/ff55a7f9b40d2f543c7256226c5bc6cd--arab-saudi-saudi-arabia.jpg'),
(31, 'bsd.jksbf.jksbfjk', 'fmklf', 'kgjdgj\'pd@dfgmdm', '123456', '372773932146', 'fall-19', 'img/532888.jpg'),
(32, 'Nujhat Islam', 'nujhat', 'nujhat@gmail.com', '123456', '130103050107', 'Spring-13', 'img/imagesf.jpg'),
(33, 'Rahim Mia', 'rahim', 'rahim@email.com', '123456', '140103040106', 'Fall-14', 'img/educationusa-adib-mohammad-1574364867522.jpg'),
(34, 'Rita Begum', 'rita', 'rita@gmail.com', '123456', '140103020102', 'Spring-14', 'img/7d5f7a9f5926aa8e4ed7702a65906167.png');

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
-- Indexes for table `reg_members`
--
ALTER TABLE `reg_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12402;

--
-- AUTO_INCREMENT for table `reg_members`
--
ALTER TABLE `reg_members`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
