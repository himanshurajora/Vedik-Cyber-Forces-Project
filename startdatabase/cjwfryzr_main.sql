-- MySQL dump 10.14  Distrib 5.5.63-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: cjwfryzr_main
-- ------------------------------------------------------
-- Server version	5.5.63-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin1234','admin1234');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artgallary`
--

DROP TABLE IF EXISTS `artgallary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artgallary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artgallary`
--

LOCK TABLES `artgallary` WRITE;
/*!40000 ALTER TABLE `artgallary` DISABLE KEYS */;
INSERT INTO `artgallary` VALUES (1,'vcfsword.png1264452212'),(2,'f.png1136048947'),(3,'Untitled (2).png1384875448'),(4,'skyvcf.png664910324'),(6,'IMG_20200927_190839_410.jpg1927930184'),(7,'amit4.jpg1463633522'),(8,'newvcfanimation2_1.png247906671'),(9,'newrender_11.png1560306227'),(10,'newrender2_1.png515449265');
/*!40000 ALTER TABLE `artgallary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audio`
--

DROP TABLE IF EXISTS `audio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` text NOT NULL,
  `audio` text NOT NULL,
  `know` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audio`
--

LOCK TABLES `audio` WRITE;
/*!40000 ALTER TABLE `audio` DISABLE KEYS */;
INSERT INTO `audio` VALUES (1,'मोहम्मद के बारे में ','https://freesound.org/data/previews/500/500298_10839052-lq.mp3',''),(2,'ईसामसीह के बारे में ','https://freesound.org/data/previews/500/500299_10839052-lq.mp3',''),(3,'भविष्य पुराण में ईसामसीह व मोहम्मद के बारे में क्या बताया गया है ','',''),(4,'जब हनुमान जी को लगा के मै न होता तो क्या होता','https://freesound.org/data/previews/500/500297_10839052-lq.mp3','शिक्षा : ईश्वर की इच्छा के बिना कुछ भी नहीं हो सकता, परन्तु अच्छे कर्म करने वालो का ईश्वर सदैव समर्थन करता है अतः केवल भाग्य के भरोसे भी नहीं बैठना चाहिए।'),(5,'पितामह भीष्म और श्री कृष्ण का अंतिम संवाद ','https://freesound.org/data/previews/500/500296_10839052-lq.mp3','शिक्षा : कलयुग में धर्म की रक्षा करने के लिए अनीतियों का सहारा भी लेना पड़ सकता है परन्तु हमें यह करना ही होगा क्योकि अधर्म के अंत के लिए धर्म और मर्यादाओ से ऊपर उठना पड़ता है');
/*!40000 ALTER TABLE `audio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` VALUES (1,'','<b style=\'color:rgb(20,210,40)\'>Hello everyone this is the chatting room where you are free to type and text anything you want</b>'),(2,'','<i>enjoy!</i>'),(3,'','hi'),(4,'himanshu','hi i am himanshu'),(5,'admin1234','there we go');
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `likes` int(11) NOT NULL,
  `user` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` VALUES (1,26,''),(2,1,''),(3,1,'himanshu'),(4,1,'himanshu'),(5,1,'himanshu'),(6,1,'himanshu'),(7,1,'himanshu'),(8,1,'himanshu'),(9,1,'himanshu'),(10,1,'himanshu'),(11,1,'himanshu'),(12,1,'himanshu'),(13,1,'himanshu'),(14,1,'himanshu');
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `head` text NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'23 dec 2019 (The day of starting the project)','created a home page and an about page '),(2,'24 dec 2019','Created a explore page and improved previous pages'),(3,'25 dec 2019 ','created a create post page and improved other pages and also improved the looks of navigation bar using bootstrap'),(4,'26 dec 2019','created update manager and gyan page as well. update manager will gether data to show all the updates that we made on a perticular day on the home page. But the data transmission speed is very slow so we gonna work on it next day. '),(5,'27 dec 2019','created a better styled interface improved data and also increased the speed of data transmission by shifting the data on other server and fetching the data directly from them.'),(6,'28 dec 2019','Today we have made a chatting room for vcf community it is a public chat room so everybody can send messages on it...'),(7,'29 dec 2019','We have coded the audio manager for gyan page so now no more html writing is required all things will be handled by the servers and databases..and also added improved the looks of home page by adding background image and the jumbotron section (top section).'),(8,'31 dec 2019 (10:00 PM)','Today we have accomplished the project vcf... today we gonna post it on GitHub as a opensource software.. see you again at some new project work spaces'),(9,'Dec. 14 2020','Hosted this site ... on a new webserver'),(10,'Dec. 16 2020','Page of Art Gallery Done!!!');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prjupload`
--

DROP TABLE IF EXISTS `prjupload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prjupload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `filename` text NOT NULL,
  `time` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prjupload`
--

LOCK TABLES `prjupload` WRITE;
/*!40000 ALTER TABLE `prjupload` DISABLE KEYS */;
/*!40000 ALTER TABLE `prjupload` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `updates`
--

DROP TABLE IF EXISTS `updates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `updates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `head` text NOT NULL,
  `pic` text NOT NULL,
  `data` text NOT NULL,
  `audio` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `updates`
--

LOCK TABLES `updates` WRITE;
/*!40000 ALTER TABLE `updates` DISABLE KEYS */;
INSERT INTO `updates` VALUES (1,'The first update created by the update manager of the VCF','https://raw.githubusercontent.com/himanshurajora/vcfftp/master/a.jpg?token=AMDWXNW3OYENM4B4Z24EPAK6A43CO','So today (26th Dec.) at 9:30 pm we have finished making the updates manger so that you will recieve new updates directly on the home page of VCF website.','https://raw.githubusercontent.com/himanshurajora/vcfftp/master/a.wav'),(2,'New update (faster data transmission)','https://23i69d6p0gw1zwz4y3smspc1-wpengine.netdna-ssl.com/wp-content/uploads/2018/10/shutterstock_1156748098-300x200.jpg','We have updated the data transmission technology, before this update most of the data was being transferred from our local servers but now it is being transferred from some international servers. But the first loading is still slow because of the local data transmission, slow server computing and external scripts loading as well.. once they are loaded the site become faster.. see ya #VCF (27 Dec. 2019)','https://freesound.org/data/previews/223/223410_4152160-lq.mp3'),(3,'Bingo!! and Greetings!!! (Update)','https://www.freepngimg.com/thumb/chat/12-2-chat-png.png','We have created a chat room in out website for every user and community member as well everyone can send messages there and ask any queries, lets see if we face more future updates in chatting sections till then stay tuned stay connect #VCF (28 Dec. 2019)','https://raw.githubusercontent.com/himanshurajora/vcfftp/master/assistence.wav'),(4,'Audio manage & Jumbotron Background','https://content.halocdn.com/media/Default/encyclopedia/characters/master-chief/master-chief-square-542x542-f4aa513845bc4582a501100cc5550b48.jpg','We have coded the audio manager for gyan page so now no more html writing is required all things will be handled by the servers and databases..and also improved the looks of home page by adding background image and the jumbotron section (top section) we have give the enable background button so that you can choose weather you like to have that background image or not.. so yeah see ya.. listen to mastercheif-->>','https://raw.githubusercontent.com/himanshurajora/vcfftp/master/che_05_che05.wav'),(5,'See you again!! Guys ','https://i1.sndcdn.com/artworks-000122711142-qyqswc-t500x500.jpg','Today we have accomplished the project vedik cyber forces and now we are going to post it on GitHub as a open source software..','');
/*!40000 ALTER TABLE `updates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Himanshu Jangid','himanshu','himanshu'),(2,'VCF Admin','admin@vcf','adminofvcfstudio.in'),(3,'Admin1234','admin1234','adminofvcfstudio.in');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-02 16:27:43
