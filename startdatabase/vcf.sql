-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 05:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vcf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin1234', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `data` text NOT NULL,
  `audio` text NOT NULL,
  `know` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `data`, `audio`, `know`) VALUES
(1, 'मोहम्मद के बारे में ', 'https://freesound.org/data/previews/500/500298_10839052-lq.mp3', ''),
(2, 'ईसामसीह के बारे में ', 'https://freesound.org/data/previews/500/500299_10839052-lq.mp3', ''),
(3, 'भविष्य पुराण में ईसामसीह व मोहम्मद के बारे में क्या बताया गया है ', '', ''),
(4, 'जब हनुमान जी को लगा के मै न होता तो क्या होता', 'https://freesound.org/data/previews/500/500297_10839052-lq.mp3', 'शिक्षा : ईश्वर की इच्छा के बिना कुछ भी नहीं हो सकता, परन्तु अच्छे कर्म करने वालो का ईश्वर सदैव समर्थन करता है अतः केवल भाग्य के भरोसे भी नहीं बैठना चाहिए।'),
(5, 'पितामह भीष्म और श्री कृष्ण का अंतिम संवाद ', 'https://freesound.org/data/previews/500/500296_10839052-lq.mp3', 'शिक्षा : कलयुग में धर्म की रक्षा करने के लिए अनीतियों का सहारा भी लेना पड़ सकता है परन्तु हमें यह करना ही होगा क्योकि अधर्म के अंत के लिए धर्म और मर्यादाओ से ऊपर उठना पड़ता है');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `username`, `message`) VALUES
(1, '', '<b style=\'color:rgb(20,210,40)\'>Hello everyone this is the chatting room where you are free to type and text anything you want</b>'),
(2, '', '<i>enjoy!</i>'),
(3, '', 'hi'),
(4, 'himanshu', 'hi i am himanshu'),
(5, 'admin1234', 'there we go');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) NOT NULL,
  `likes` int(11) NOT NULL,
  `user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `likes`, `user`) VALUES
(1, 26, ''),
(2, 1, ''),
(3, 1, 'himanshu'),
(4, 1, 'himanshu'),
(5, 1, 'himanshu'),
(6, 1, 'himanshu'),
(7, 1, 'himanshu'),
(8, 1, 'himanshu'),
(9, 1, 'himanshu'),
(10, 1, 'himanshu'),
(11, 1, 'himanshu'),
(12, 1, 'himanshu'),
(13, 1, 'himanshu'),
(14, 1, 'himanshu');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `head` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `head`, `data`) VALUES
(1, '23 dec 2019 (The day of starting the project)', 'created a home page and an about page '),
(2, '24 dec 2019', 'Created a explore page and improved previous pages'),
(3, '25 dec 2019 ', 'created a create post page and improved other pages and also improved the looks of navigation bar using bootstrap'),
(4, '26 dec 2019', 'created update manager and gyan page as well. update manager will gether data to show all the updates that we made on a perticular day on the home page. But the data transmission speed is very slow so we gonna work on it next day. '),
(5, '27 dec 2019', 'created a better styled interface improved data and also increased the speed of data transmission by shifting the data on other server and fetching the data directly from them.'),
(6, '28 dec 2019', 'Today we have made a chatting room for vcf community it is a public chat room so everybody can send messages on it...'),
(7, '29 dec 2019', 'We have coded the audio manager for gyan page so now no more html writing is required all things will be handled by the servers and databases..and also added improved the looks of home page by adding background image and the jumbotron section (top section).'),
(8, '31 dec 2019 (10:00 PM)', 'Today we have accomplished the project vcf... today we gonna post it on GitHub as a opensource software.. see you again at some new project work spaces');

-- --------------------------------------------------------

--
-- Table structure for table `prjupload`
--

CREATE TABLE `prjupload` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `filename` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prjupload`
--

INSERT INTO `prjupload` (`id`, `user`, `filename`, `time`) VALUES
(2, 'himanshu', 'favicon.png', 'Monday 14th of December 2020 10:03:58 PM');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(10) NOT NULL,
  `head` text NOT NULL,
  `pic` text NOT NULL,
  `data` text NOT NULL,
  `audio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `head`, `pic`, `data`, `audio`) VALUES
(1, 'The first update created by the update manager of the VCF', 'https://raw.githubusercontent.com/himanshurajora/vcfftp/master/a.jpg?token=AMDWXNW3OYENM4B4Z24EPAK6A43CO', 'So today (26th Dec.) at 9:30 pm we have finished making the updates manger so that you will recieve new updates directly on the home page of VCF website.', 'https://raw.githubusercontent.com/himanshurajora/vcfftp/master/a.wav'),
(2, 'New update (faster data transmission)', 'https://23i69d6p0gw1zwz4y3smspc1-wpengine.netdna-ssl.com/wp-content/uploads/2018/10/shutterstock_1156748098-300x200.jpg', 'We have updated the data transmission technology, before this update most of the data was being transferred from our local servers but now it is being transferred from some international servers. But the first loading is still slow because of the local data transmission, slow server computing and external scripts loading as well.. once they are loaded the site become faster.. see ya #VCF (27 Dec. 2019)', 'https://freesound.org/data/previews/223/223410_4152160-lq.mp3'),
(3, 'Bingo!! and Greetings!!! (Update)', 'https://www.freepngimg.com/thumb/chat/12-2-chat-png.png', 'We have created a chat room in out website for every user and community member as well everyone can send messages there and ask any queries, lets see if we face more future updates in chatting sections till then stay tuned stay connect #VCF (28 Dec. 2019)', 'https://raw.githubusercontent.com/himanshurajora/vcfftp/master/assistence.wav'),
(4, 'Audio manage & Jumbotron Background', 'https://content.halocdn.com/media/Default/encyclopedia/characters/master-chief/master-chief-square-542x542-f4aa513845bc4582a501100cc5550b48.jpg', 'We have coded the audio manager for gyan page so now no more html writing is required all things will be handled by the servers and databases..and also improved the looks of home page by adding background image and the jumbotron section (top section) we have give the enable background button so that you can choose weather you like to have that background image or not.. so yeah see ya.. listen to mastercheif-->>', 'https://raw.githubusercontent.com/himanshurajora/vcfftp/master/che_05_che05.wav'),
(5, 'See you again!! Guys ', 'https://i1.sndcdn.com/artworks-000122711142-qyqswc-t500x500.jpg', 'Today we have accomplished the project vedik cyber forces and now we are going to post it on GitHub as a open source software..', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Himanshu Jangid', 'himanshu', 'himanshu'),
(2, 'VCF Admin', 'admin@vcf', 'adminofvcfstudio.in'),
(3, 'Admin1234', 'admin1234', 'adminofvcfstudio.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prjupload`
--
ALTER TABLE `prjupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prjupload`
--
ALTER TABLE `prjupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
