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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

LOCK TABLES `admin` WRITE;

insert  into `admin`(`admin_id`,`password`,`username`) values (1,'pj','pejay');

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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

/*Data for the table `cart_item` */

LOCK TABLES `cart_item` WRITE;

insert  into `cart_item`(`cart_no`,`item_no`,`buyer`) values (34,66,'pj@gmail.com'),(35,67,'pj@gmail.com'),(37,66,'cymondia@gmail.com'),(41,66,'jeri@gmail.com'),(43,67,'cymondia@gmail.com'),(46,69,'neil@gmail.com'),(47,71,'pj@gmail.com'),(48,70,'pj@gmail.com'),(49,69,'pj@gmail.com'),(54,62,'jm@gmail.com'),(55,65,'jm@gmail.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;

/*Data for the table `messages` */

LOCK TABLES `messages` WRITE;

insert  into `messages`(`msgId`,`sender`,`msg`,`receiver`,`date`) values (151,'pj@gmail.com','jm bakit?','jm@gmail.com','2019-05-10 22:02:37'),(154,'pj@gmail.com','dito sa bahay','jm@gmail.com','2019-05-10 23:42:06'),(155,'neil@gmail.com','I am interested to buy this lenovo core duo','pj@gmail.com','2019-05-11 00:23:40'),(162,'cymondia@gmail.com','<b>I am interested to buy your msi intel i7</b>','neil@gmail.com','2019-05-11 00:35:53'),(163,'pj@gmail.com','oh glen kmuzta ngy?','cymondia@gmail.com','2019-05-11 00:36:40'),(164,'jeri@gmail.com','<b>I am interested to buy your acer intel i5</b>','pj@gmail.com','2019-05-11 00:37:15'),(165,'jeri@gmail.com','<b>I am interested to buy your lenovo core duo</b>','pj@gmail.com','2019-05-11 00:37:33'),(166,'jeri@gmail.com','<b>I am interested to buy your msi intel i7</b>','neil@gmail.com','2019-05-11 00:37:50'),(167,'pj@gmail.com','yang dalawa?','jeri@gmail.com','2019-05-11 00:38:39'),(169,'cymondia@gmail.com','<b>I am interested to buy your lenovo core duo					worth of 5000.00</b>\r\n		','pj@gmail.com','2019-05-11 00:41:52'),(170,'cymondia@gmail.com','<b>I am interested to buy your acer intel i5					worth of 10000.00</b>\r\n		','pj@gmail.com','2019-05-11 00:41:55'),(171,'cymondia@gmail.com','<b>I am interested to buy your msi intel i7					worth of 25000.00</b>\r\n		','neil@gmail.com','2019-05-11 00:41:57'),(172,'neil@gmail.com','yang dalawa saby saby? ','cymondia@gmail.com','2019-05-11 00:46:32'),(173,'pj@gmail.com','nagadon','cymondia@gmail.com','2019-05-11 01:58:47'),(174,'cymondia@gmail.com','wen hehe','pj@gmail.com','2019-05-11 02:03:10'),(175,'cymondia@gmail.com','s','pj@gmail.com','2019-05-11 02:06:44'),(176,'cymondia@gmail.com','p\r\nr\r\na\r\ns\r\ns\r\ns\r\n\r\ndf\r\nf\r\nf\r\n\r\nd\r\nd\r\nd\r\nd\r\nd\r\nd\r\ns\r\ns\r\na\r\na\r\na\r\na','pj@gmail.com','2019-05-11 02:07:00'),(177,'cymondia@gmail.com','<b>I am interested to buy your acer predator intel i7						worth of 40000.00</b>\r\n			','neil@gmail.com','2019-05-11 03:54:16'),(178,'pj@gmail.com','glen?','cymondia@gmail.com','2019-05-11 10:21:11'),(179,'pj@gmail.com','g','cymondia@gmail.com','2019-05-11 10:21:38'),(180,'pj@gmail.com','l','cymondia@gmail.com','2019-05-11 10:21:44'),(181,'pj@gmail.com','e','cymondia@gmail.com','2019-05-11 10:21:47'),(182,'pj@gmail.com','n','cymondia@gmail.com','2019-05-11 10:21:51'),(183,'pj@gmail.com','h','cymondia@gmail.com','2019-05-11 10:21:55'),(184,'pj@gmail.com','e','cymondia@gmail.com','2019-05-11 10:21:59'),(185,'pj@gmail.com','n','cymondia@gmail.com','2019-05-11 10:22:03'),(186,'pj@gmail.com','r','cymondia@gmail.com','2019-05-11 10:22:06'),(187,'pj@gmail.com','y','cymondia@gmail.com','2019-05-11 10:22:10'),(188,'pj@gmail.com',' ','cymondia@gmail.com','2019-05-11 10:22:14'),(189,'pj@gmail.com','m','cymondia@gmail.com','2019-05-11 10:22:19'),(190,'pj@gmail.com','o','cymondia@gmail.com','2019-05-11 10:22:25'),(191,'pj@gmail.com','n','cymondia@gmail.com','2019-05-11 10:22:28'),(192,'pj@gmail.com','d','cymondia@gmail.com','2019-05-11 10:22:33'),(193,'pj@gmail.com','i','cymondia@gmail.com','2019-05-11 10:22:43'),(194,'pj@gmail.com','a','cymondia@gmail.com','2019-05-11 10:36:22'),(195,'pj@gmail.com','ag reply ka?','cymondia@gmail.com','2019-05-11 11:42:11'),(196,'pj@gmail.com','jerimar?','jeri@gmail.com','2019-05-11 11:42:36'),(198,'jm@gmail.com','<b>I am interested to buy your lenovo core duo						worth of 5000.00</b>\r\n			','pj@gmail.com','2019-05-11 19:00:10'),(199,'pj@gmail.com','<b>I am interested to buy your msi intel i7						worth of 25000.00</b>\r\n			','neil@gmail.com','2019-05-11 19:02:20'),(200,'pj@gmail.com','really?','jm@gmail.com','2019-05-14 11:20:58');

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
  PRIMARY KEY (`item_no`),
  KEY `username` (`username`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

LOCK TABLES `product` WRITE;

insert  into `product`(`item_no`,`brand`,`processor`,`price`,`RAM`,`graphics`,`OS`,`HDD`,`username`,`image`,`text`) values (62,'acer','intel i5',10000.00,'4gb ram','intel HD graphics','windows 10','1 terabyte','pj@gmail.com','acer.jpeg','i need money for tuition'),(65,'lenovo','core duo',5000.00,'2gb ram','radeon','windows 8','500 gigabyte','pj@gmail.com','asus.jpg','this is netbook'),(66,'msi','intel i7',25000.00,'4gb ram','intel R graphics','windows 10','1 terabyte','neil@gmail.com','msi.jpg','slightly used'),(67,'acer predator','intel i7',40000.00,'8gb ram','intel HD graphics','windows 10','1 terabyte','neil@gmail.com','alienware.jpg','this is best for gaming'),(68,'lenovo','intel i5',12000.00,'4gb ram','intel R graphics','windows 10','1 terabyte','jeri@gmail.com','hp3.jpg','SSD po hard disk nyan'),(69,'toshiba','intel i3',7000.00,'2gb ram','nvidia','windows 8','500 gigabyte','jeri@gmail.com','msi3.jpg','netbook lng kc'),(70,'toshiba','intel i5',12000.00,'4gb ram','intel HD graphics','windows 10','1 terabyte','neil@gmail.com','razer1.png','slightly used po'),(71,'acer predator','intel i7',20000.00,'4gb ram','intel R graphics','windows 10','1 terabyte','neil@gmail.com','acer4.jpg','SSD po yan'),(72,'asus','intel i5',10000.00,'2gb ram','intel R graphics','windows 8','500 gigabyte','pj@gmail.com','asus.jpg','vsvsvsvs');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`userId`,`username`,`password`,`lname`,`fname`,`mi`,`address`,`email`,`contact_no`) values (11,'cymondia@gmail.com','cy','mondia','glen','a','bauang','cymondia@gmail.com','+639987654327'),(8,'jake@gmail.com','jek','natividad','jake','l','naguilian la union','jakenat@gmail.com','+639999999999'),(6,'jeri@gmail.com','jeje','delos reyes','jerimai','d','paringao','jeje@gmail.com','+639912345678'),(9,'jm@gmail.com','jm','sagamla','john michael','b','caltex poro','jm@gmail.com','+639056789056'),(5,'neil@gmail.com','neil','macugay','neil','s','luna san fernando','neil@gmail.com','+639221234567'),(7,'pj@gmail.com','pj','baguitan','pejay','d','poro san fernando city','pjbaguitan@gmail.com','+639000000000'),(10,'princess@gmail.com','123','sagamla','princess jasher','b','caltex poro','princess@gmail.com','+631234567899');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
