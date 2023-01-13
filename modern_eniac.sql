/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.37-MariaDB : Database - modern_eniac
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`modern_eniac` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `modern_eniac`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(30) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

LOCK TABLES `admin` WRITE;

insert  into `admin`(`admin_id`,`password`,`username`) values (1,'pj','pejay'),(2,'test','neil');

UNLOCK TABLES;

/*Table structure for table `cart_item` */

DROP TABLE IF EXISTS `cart_item`;

CREATE TABLE `cart_item` (
  `cart_no` int(11) NOT NULL AUTO_INCREMENT,
  `item_no` int(11) DEFAULT NULL,
  `buyer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cart_no`),
  KEY `item_no` (`item_no`),
  KEY `buyer` (`buyer`),
  CONSTRAINT `cart_item_ibfk_2` FOREIGN KEY (`buyer`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cart_item_ibfk_3` FOREIGN KEY (`item_no`) REFERENCES `product` (`item_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

/*Data for the table `cart_item` */

LOCK TABLES `cart_item` WRITE;

insert  into `cart_item`(`cart_no`,`item_no`,`buyer`) values (59,74,'jake@gmail.com'),(66,76,'pablo@gmail.com'),(67,80,'pablo@gmail.com'),(69,80,'pj@gmail.com'),(70,82,'pj@gmail.com'),(71,84,'pj@gmail.com'),(72,79,'pj@gmail.com');

UNLOCK TABLES;

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `msgId` int(11) NOT NULL AUTO_INCREMENT,
  `sender` char(30) DEFAULT NULL,
  `msg` text NOT NULL,
  `receiver` char(30) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`msgId`),
  KEY `buyer` (`sender`),
  KEY `receiver` (`receiver`),
  CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

/*Data for the table `messages` */

LOCK TABLES `messages` WRITE;

insert  into `messages`(`msgId`,`sender`,`msg`,`receiver`,`date`) values (151,'pj@gmail.com','jm bakit?','jm@gmail.com','2019-05-10 22:02:37'),(154,'pj@gmail.com','dito sa bahay','jm@gmail.com','2019-05-10 23:42:06'),(162,'cymondia@gmail.com','<b>I am interested to buy your msi intel i7</b>','neil@gmail.com','2019-05-11 00:35:53'),(163,'pj@gmail.com','oh glen kmuzta ngy?','cymondia@gmail.com','2019-05-11 00:36:40'),(166,'jeri@gmail.com','<b>I am interested to buy your msi intel i7</b>','neil@gmail.com','2019-05-11 00:37:50'),(171,'cymondia@gmail.com','<b>I am interested to buy your msi intel i7					worth of 25000.00</b>\r\n		','neil@gmail.com','2019-05-11 00:41:57'),(172,'neil@gmail.com','yang dalawa saby saby? ','cymondia@gmail.com','2019-05-11 00:46:32'),(173,'pj@gmail.com','nagadon','cymondia@gmail.com','2019-05-11 01:58:47'),(177,'cymondia@gmail.com','<b>I am interested to buy your acer predator intel i7						worth of 40000.00</b>\r\n			','neil@gmail.com','2019-05-11 03:54:16'),(178,'pj@gmail.com','glen?','cymondia@gmail.com','2019-05-11 10:21:11'),(179,'pj@gmail.com','g','cymondia@gmail.com','2019-05-11 10:21:38'),(180,'pj@gmail.com','l','cymondia@gmail.com','2019-05-11 10:21:44'),(181,'pj@gmail.com','e','cymondia@gmail.com','2019-05-11 10:21:47'),(182,'pj@gmail.com','n','cymondia@gmail.com','2019-05-11 10:21:51'),(183,'pj@gmail.com','h','cymondia@gmail.com','2019-05-11 10:21:55'),(184,'pj@gmail.com','e','cymondia@gmail.com','2019-05-11 10:21:59'),(185,'pj@gmail.com','n','cymondia@gmail.com','2019-05-11 10:22:03'),(186,'pj@gmail.com','r','cymondia@gmail.com','2019-05-11 10:22:06'),(187,'pj@gmail.com','y','cymondia@gmail.com','2019-05-11 10:22:10'),(188,'pj@gmail.com',' ','cymondia@gmail.com','2019-05-11 10:22:14'),(189,'pj@gmail.com','m','cymondia@gmail.com','2019-05-11 10:22:19'),(190,'pj@gmail.com','o','cymondia@gmail.com','2019-05-11 10:22:25'),(191,'pj@gmail.com','n','cymondia@gmail.com','2019-05-11 10:22:28'),(192,'pj@gmail.com','d','cymondia@gmail.com','2019-05-11 10:22:33'),(193,'pj@gmail.com','i','cymondia@gmail.com','2019-05-11 10:22:43'),(194,'pj@gmail.com','a','cymondia@gmail.com','2019-05-11 10:36:22'),(195,'pj@gmail.com','ag reply ka?','cymondia@gmail.com','2019-05-11 11:42:11'),(199,'pj@gmail.com','<b>I am interested to buy your msi intel i7						worth of 25000.00</b>\r\n			','neil@gmail.com','2019-05-11 19:02:20'),(200,'pj@gmail.com','really?','jm@gmail.com','2019-05-14 11:20:58'),(209,'jake@gmail.com','asfd','cymondia@gmail.com','2019-05-14 20:06:32'),(210,'jake@gmail.com','wow','cymondia@gmail.com','2019-05-14 20:07:28'),(211,'jake@gmail.com','shet','cymondia@gmail.com','2019-05-14 20:09:14'),(212,'jake@gmail.com','shet','cymondia@gmail.com','2019-05-14 20:10:35'),(213,'jake@gmail.com','hi','cymondia@gmail.com','2019-05-14 20:10:38'),(216,'jake@gmail.com','mayatin','cymondia@gmail.com','2019-05-14 20:10:57'),(220,'pj@gmail.com','			<b>I am interested to buy your asus i5						worth of Php 324234.00</b>\r\n			','jake@gmail.com','2019-05-14 22:23:41'),(221,'pj@gmail.com','					<b>I am interested to buy your asus i5					worth of Php 324234.00</b>\r\n			','jake@gmail.com','2019-05-16 09:56:28'),(225,'pj@gmail.com','ss','neil@gmail.com','2019-05-17 12:27:19'),(226,'pj@gmail.com','asdadasd','jm@gmail.com','2019-05-17 12:28:26'),(228,'jeri@gmail.com','ee','pj@gmail.com','2019-05-17 12:41:31'),(229,'jeri@gmail.com','asda','pj@gmail.com','2019-05-17 12:42:50'),(230,'jeri@gmail.com','asda','pj@gmail.com','2019-05-17 12:44:51'),(233,'pj@gmail.com','jerimar happy bday','jeri@gmail.com','2019-05-20 00:11:50'),(234,'pj@gmail.com','aykat ayay entad capitol','jeri@gmail.com','2019-06-09 06:54:04'),(235,'pj@gmail.com','ADASDLJALDJ\r\n','jeri@gmail.com','2019-06-27 20:53:36'),(236,'pablo@gmail.com','					<b>I am interested to buy your asus A-series					worth of Php 15000.00</b>\r\n			','neil@gmail.com','2019-06-28 08:40:36'),(237,'pj@gmail.com','			<b>I am interested to buy your asus i5						worth of 324234.00</b>\r\n			','jake@gmail.com','2019-09-29 12:34:12'),(238,'pj@gmail.com','dfsfsfsf','jeri@gmail.com','2019-11-25 20:57:38'),(239,'pj@gmail.com',';mma;vm;svmvlnslfnsfosnonaefaasvas\r\n\r\n','jeri@gmail.com','2019-11-25 20:59:24'),(240,'pj@gmail.com','					<b>I am interested to buy your asus A-series					worth of Php 15000.00</b>\r\n			','neil@gmail.com','2019-11-25 21:01:27');

UNLOCK TABLES;

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `item_no` int(4) NOT NULL AUTO_INCREMENT,
  `brand` char(20) DEFAULT NULL,
  `processor` varchar(20) DEFAULT NULL,
  `price` float(8,2) DEFAULT NULL,
  `RAM` varchar(10) DEFAULT NULL,
  `graphics` varchar(30) DEFAULT NULL,
  `OS` char(10) DEFAULT NULL,
  `HDD` varchar(12) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `text` text,
  `title` text,
  PRIMARY KEY (`item_no`),
  KEY `username` (`username`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

LOCK TABLES `product` WRITE;

insert  into `product`(`item_no`,`brand`,`processor`,`price`,`RAM`,`graphics`,`OS`,`HDD`,`username`,`image`,`text`,`title`) values (74,'lenovo','i5',342332.00,'4GB','rtx 1060','Windows 10','500GB','pj@gmail.com','alienware.jpg','good as new','lenovo i5 342332 4GB rtx 1060 Windows 10 500GB'),(75,'asus','i5',324234.00,'8GB','rtx 1060','Windows 10','500GB','jake@gmail.com','lenovo.jpg','3 mothns old','asus i5 324234 8GB rtx 1060 Windows 10 500GB'),(76,'acer','intel i5',10000.00,'4gb ram','radeon','windows 8','1 terabyte','pj@gmail.com','acer.jpeg','buy and sell is my business','acer intel i5 10 000 4gb ram radeon windows 10 1 terabyte'),(78,'msi','opteron',20000.00,'4gb ram','NVIDia','windows 10','1 terabyte','neil@gmail.com','msi.jpg','AMD so mejo cheap','msi opteron 20000 4gb ram NVIDia windows 10 1 terabyte'),(79,'gigabyte','AMD FX',20000.00,'4gb ram','GTX 1060','windows 10','500 gig','neil@gmail.com','gigabyte.png','AMD again','gigabyte AMD FX 20000 4gb ram GTX 1060 windows 10 500 gig'),(80,'asus','A-series',15000.00,'8gb ram','GTX 1060','windows 10','1 terabyte','neil@gmail.com','asus1.jpg','good for gaming','asus A-series 15000 8gb ram GTX 1060 windows 10 1 terabyte'),(82,'lenovo','ryzen AMD',15000.00,'4gb ram','NVIDIA','windows 10','1 terabyte','jeri@gmail.com','acer1.jpg','slightly used','lenovo ryzen AMD 15000 4gb ram NVIDIA windows 10 1 terabyte'),(83,'','',50000.00,'2gb ram','intel R graphics','windows 10','500 gigabyte','jeri@gmail.com','msi3.jpg','a little old, but good for encoding','lenovo core duo 5000 2gb ram intel R graphics windows 10 500 gigabyte'),(84,'lenovo','core duo',5000.00,'2gb ram','intel R graphics','windows 10','500 gigabyte','jeri@gmail.com','msi3.jpg','a little old, but good for encoding','lenovo core duo 5000 2gb ram intel R graphics windows 10 500 gigabyte'),(85,'lenovo','core duo',5000.00,'2gb ram','intel R graphics','windows 10','500 gigabyte','jeri@gmail.com','msi3.jpg','a little old, but good for encoding','lenovo core duo 5000 2gb ram intel R graphics windows 10 500 gigabyte'),(86,'lenovo','core duo',5000.00,'2gb ram','intel R graphics','windows 10','500 gigabyte','jeri@gmail.com','msi3.jpg','a little old, but good for encoding','lenovo core duo 5000 2gb ram intel R graphics windows 10 500 gigabyte');

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userId` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(10) DEFAULT NULL,
  `lname` char(20) DEFAULT NULL,
  `fname` char(20) DEFAULT NULL,
  `mi` char(1) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contact_no` char(13) DEFAULT NULL,
  PRIMARY KEY (`username`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`userId`,`username`,`password`,`lname`,`fname`,`mi`,`address`,`email`,`contact_no`) values (11,'cymondia@gmail.com','cy','mondia','glen','a','bauang','cymondia@gmail.com','+639987654327'),(8,'jake@gmail.com','jek','natividad','jake','l','naguilian la union','jakenat@gmail.com','+639999999999'),(6,'jeri@gmail.com','jeje','delos reyes','jerimai','d','paringao','jeje@gmail.com','+639912345678'),(9,'jm@gmail.com','jm','sagamla','john michael','b','caltex poro','jm@gmail.com','+639056789056'),(5,'neil@gmail.com','neil','macugay','neil','s','luna san fernando','neil@gmail.com','+639221234567'),(12,'pablo@gmail.com','123123qweq','pablo','pablo','X','pablo street','pablo@gmail.cm','+630909291265'),(7,'pj@gmail.com','pj','baguitan','pejay','d','poro san fernando city','pjbaguitan1@gmail.com','+639123456781');

UNLOCK TABLES;

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `vNo` int(11) NOT NULL AUTO_INCREMENT,
  `vname` varchar(50) DEFAULT NULL,
  `desc` varchar(50) DEFAULT NULL,
  `filext` varchar(4) DEFAULT NULL,
  `admin_id` int(10) DEFAULT NULL,
  KEY `vNo` (`vNo`),
  KEY `admin_id` (`admin_id`),
  CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `videos` */

LOCK TABLES `videos` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
