/*
SQLyog Community v11.3 (32 bit)
MySQL - 5.7.19 : Database - usermanagement
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`usermanagement` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `usermanagement`;

/*Table structure for table `login_info` */

DROP TABLE IF EXISTS `login_info`;

CREATE TABLE `login_info` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `is_login` tinyint(1) DEFAULT '1',
  `is_status` tinyint(1) DEFAULT '0',
  `usertype` enum('Super Admin','Staff','Organisation','Customer') DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `login_info` */

insert  into `login_info`(`login_id`,`username`,`password`,`email`,`mobile`,`is_login`,`is_status`,`usertype`,`is_deleted`) values (2,'admin','admin','admin@yopmail.com','9555074553',0,1,'Super Admin',1),(3,'bilal mian','123456','bilal@yopmail.com','9876543210',1,1,'Organisation',1),(4,'honeysingh','12345','honey@yopmail.com',NULL,1,0,'Staff',1),(5,'aparna','12345','aparna@yopmail.com',NULL,1,0,'Customer',1),(6,'queen','12345','queen@yopmail.com',NULL,1,1,'Customer',1),(7,'zoya1','1234','zoya@mail.com',NULL,1,0,'Organisation',1),(8,'mahendra','1234','mahendra@mail.com',NULL,1,0,'Customer',1),(9,'akhtar','1234','akhtar@yopmail.com',NULL,1,0,'Organisation',1),(10,'zubair','12345','zubair@yopmail.com',NULL,1,1,'Staff',1),(11,'xovier','12345','xovier@yopmail.com',NULL,1,0,'Staff',1),(12,'vandana','12345','vandana@yopmail.com',NULL,1,0,'Organisation',1),(13,'vikram','12345','vikram@yopmail.com',NULL,1,0,'Customer',1),(14,'ganga','1234','ganga@yopmail.com',NULL,1,1,'Staff',1);

/*Table structure for table `staff_info` */

DROP TABLE IF EXISTS `staff_info`;

CREATE TABLE `staff_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `profile_image` varchar(145) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_staff_info_login_info1_idx` (`login_id`),
  CONSTRAINT `fk_staff_info_login_info1` FOREIGN KEY (`login_id`) REFERENCES `login_info` (`login_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `staff_info` */

insert  into `staff_info`(`id`,`login_id`,`profile_image`,`name`,`phone`,`created_date`,`created_by`) values (1,14,NULL,'ganga',NULL,'2017-11-30 00:00:00',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
