/*
SQLyog Ultimate v11.3 (64 bit)
MySQL - 10.1.21-MariaDB : Database - booking
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`booking` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `booking`;

/*Table structure for table `appointment` */

DROP TABLE IF EXISTS `appointment`;

CREATE TABLE `appointment` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `provider_id` int(40) DEFAULT NULL,
  `user_id` int(40) DEFAULT NULL,
  `appoint_date` date DEFAULT NULL,
  `appoint_time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `appointment` */

insert  into `appointment`(`id`,`provider_id`,`user_id`,`appoint_date`,`appoint_time`) values (1,4,1,'2018-08-07','10:40:00'),(2,4,3,'2018-08-07','10:10:00'),(3,4,2,'2018-08-07','08:30:00'),(4,4,3,'2018-08-07','06:30:00'),(5,4,3,'2018-08-10','02:30:00'),(6,4,3,'2018-08-13','10:40:00'),(7,4,3,'2018-08-13','05:30:00'),(8,4,3,'2018-08-16','04:50:00'),(9,4,3,'2018-08-15','02:13:00'),(10,4,3,'2018-07-17','09:12:00'),(11,4,3,'2018-08-23','08:05:00'),(12,4,3,'2018-08-24','12:52:00'),(13,6,3,'2018-08-13',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`role`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Ali Hassan','admin@admin.com','admin','$2y$10$93zXFqKB/sRRKPE97WA2VOky1cF8ySxvkOuG1KGekGd0KOBbdocmy','0h9s91vwbOQn8y3ujTX8fp109YN7BUMIxOlAL7wV1hiGcgMdB83cRKCKadjD','2018-08-10 15:35:09','2018-08-10 15:35:09'),(2,'Ivan Kris','user2@user2.com','user','$2y$10$2yFG0v6BJohMW2aPPVswQeFVAIgfeARBuhBCnErqd5Bz6e9NW4aNC','HqG8haIZJn5R9Z13KBAOoL45fWd60X1xG7mBvSgGtxTVF8sJ8NpxdJAsQnGM','2018-08-10 17:19:14','2018-08-10 17:19:14'),(3,'Alexei Kirov','user1@user1.com','user','$2y$10$/MsDQRXNAAhdyIfSsqMkw.hoB.Jz7jec6eHkK/Nfsp5X5u29M.koe','U2fqRF97GlFBLK9e1mqOrijDKsLk5QXBaTc3tdvQEMFrACsdnf0psOolTs2v','2018-08-10 17:19:45','2018-08-10 17:19:45'),(4,'Ivan Bolconov','doctor1@doctor1.com','provider','$2y$10$rVRDuiMd9Kxts1wqqJKife7x36mcl3sqA8Mfuw4DNZfAhVFqhf3aW','KiypYn6MJ4s48BMJss8iCGOzvaB5n1YAvMOi4DHPNPAZDRx1A3EV03H5iqiQ','2018-08-10 17:28:57','2018-08-10 17:28:57'),(5,'Alexandra Papis','doctor2@doctor2.com','provider','$2y$10$MC7wTIYmbsvOnLYxiHUWQuDbfZjXkatcmQRk3PRGwBfJZun7J/l0u',NULL,'2018-08-10 17:29:46','2018-08-10 17:29:46'),(6,'Bertram Martin','user11@user11.com','provider','$2y$10$KgSckU.oSyDNKr2ByLYfZOPkLokVweEdVtixgblwy..Zx1SA05euy','1ZbdoRE2hq2dZhO9td4XNN6dNydYyaSFE1CDAVuO3YwC97JzEODZo7yWbIWb','2018-08-13 12:47:47','2018-08-13 12:47:47'),(7,'Boris Nikolay','user12@user12.com','provider','$2y$10$upkSBDbwCra7Ui2nJiia3.68QxC.4lPvo3ryG8EbsZVcPSU/zG/tO','r9oZrijZn4KCTZSGSE3tKlU377UzXCTrB2aQgzpjWfl7xeCjyFqjQzeqWw3e','2018-08-13 12:48:46','2018-08-13 12:48:46'),(8,'Bryn Cecil','user13@user13.com','provider','$2y$10$rnlAQPhmgThi7/lonbGVO.nAxvtjEhPO5x7ObzQzykZaIVfoCjxaS','2aBhYRg2xSNb0SC3VyzFTMuel4goV2O5Tz7CW4sISNYbr2icMEvfqV5FXUT9','2018-08-13 12:49:22','2018-08-13 12:49:22'),(9,'Roderick Giles','user14@user14.com','provider','$2y$10$WdiyEAuSOr3XcIW/ZpwhVetBwsCM6vr.DTllly4MTXOm6hEB2lYhm','oNH7fqjjwUU4u6TpkN7JE5w8c9pFo6S87nz3fdUxg87gHgtaXYEd5679FY2A','2018-08-13 12:50:13','2018-08-13 12:50:13');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
