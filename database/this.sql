/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.19-MariaDB : Database - socialpulse
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `adminiy` */

DROP TABLE IF EXISTS `adminiy`;

CREATE TABLE `adminiy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `remember_token` text DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `adminiy` */

insert  into `adminiy`(`id`,`email`,`password`,`name`,`remember_token`,`is_active`,`created_at`,`updated_at`,`is_deleted`) values 
(1,'admin@project.com','$2y$10$fJwkT72wGNXCIBSqq.5JveP/rSFoSRfrSvotM2BJYPO6xgJFgSWVm','Admin','o2JZSUfWev6IQiF8r1uhtvvYriBDmXpXl4Kv3Fc77NJ5BWHks5vwjc0G3Knj',1,'2019-03-28 16:43:17','2019-04-20 15:25:01',0);

/*Table structure for table `coupons` */

DROP TABLE IF EXISTS `coupons`;

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) DEFAULT NULL,
  `discount` float DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(4) DEFAULT 1,
  `is_deleted` tinyint(4) DEFAULT 0,
  `user_id` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `coupons` */

insert  into `coupons`(`id`,`code`,`discount`,`updated_at`,`created_at`,`is_active`,`is_deleted`,`user_id`) values 
(1,'ABCD',50,'2021-09-23 17:53:47','2021-09-23 17:53:47',1,0,0),
(2,'BCA',20,'2021-09-23 17:53:52','2021-09-23 17:53:52',1,0,0);

/*Table structure for table `flag_data` */

DROP TABLE IF EXISTS `flag_data`;

CREATE TABLE `flag_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flag_color` varchar(255) DEFAULT NULL,
  `flag_name` varchar(255) DEFAULT NULL,
  `flag_reminder` text DEFAULT NULL,
  `table_name` varchar(100) DEFAULT NULL,
  `ref_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `flag_data` */

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(555) DEFAULT NULL,
  `imageable_id` int(11) DEFAULT NULL,
  `imageable_type` varchar(255) DEFAULT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `images` */

insert  into `images`(`id`,`url`,`imageable_id`,`imageable_type`,`table_name`,`created_at`,`updated_at`) values 
(1,'Uploads/products/a2823cf77e7473abaa9968661c9ec9d5/1631738763-product-1.png',1,'App\\Model\\products','products','2021-09-15 20:46:03','2021-09-15 20:46:03');

/*Table structure for table `imagetable` */

DROP TABLE IF EXISTS `imagetable`;

CREATE TABLE `imagetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(50) NOT NULL,
  `img_path` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ref_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT 1,
  `is_active_img` varchar(1) DEFAULT '1',
  `additional_attributes` text DEFAULT NULL,
  `img_href` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `table_name` (`table_name`,`ref_id`,`type`),
  FULLTEXT KEY `imgp` (`img_path`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

/*Data for the table `imagetable` */

insert  into `imagetable`(`id`,`table_name`,`img_path`,`created_at`,`updated_at`,`ref_id`,`type`,`is_active_img`,`additional_attributes`,`img_href`) values 
(1,'logo','Uploads/imagetable/cdbd8bbbe3b1a7cf6009111d518835d1/1629149385-logo.png','2021-08-17 02:29:45','2021-08-16 21:29:45',0,1,'1',NULL,NULL),
(2,'favicon','Uploads/imagetable/13c0c92892833baaf750729782ab6104/WZvCOV9PH81W151eRfGCcexCG8T2oBOwF7dv2u53.png','2019-04-18 21:49:42','2019-04-18 16:49:42',0,1,'1',NULL,NULL),
(52,'products','Uploads/products/a2823cf77e7473abaa9968661c9ec9d5/1631738763-product-1.png','2021-09-15 20:46:03','2021-09-15 20:46:03',1,1,'1',NULL,NULL),
(53,'products_optional','Uploads/products/738223da643deeda70898cd233131b4d/1631738763-card-2.png','2021-09-15 20:46:03','2021-09-15 20:46:03',1,2,'1',NULL,NULL),
(54,'products_optional','Uploads/products/fcd76417cf42bd65206a3c6cebe61242/1631738763-card-3.png','2021-09-15 20:46:03','2021-09-15 20:46:03',1,2,'1',NULL,NULL),
(55,'products_optional','Uploads/products/6705958250e1aca63ee73643c6031129/1631738763-feature-product-1.png','2021-09-15 20:46:03','2021-09-15 20:46:03',1,2,'1',NULL,NULL);

/*Table structure for table `inquiry` */

DROP TABLE IF EXISTS `inquiry`;

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inquiries_name` varchar(255) NOT NULL,
  `inquiries_email` text NOT NULL,
  `inquiries_phone` varchar(255) NOT NULL,
  `extra_content` text NOT NULL,
  `is_read` char(1) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `user_id` int(11) DEFAULT 0,
  `inquiries_lname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `inquiry` */

insert  into `inquiry`(`id`,`inquiries_name`,`inquiries_email`,`inquiries_phone`,`extra_content`,`is_read`,`type`,`created_at`,`updated_at`,`is_active`,`is_deleted`,`user_id`,`inquiries_lname`) values 
(7,'test','test@gmail.com','','123123','0',1,'2021-09-15 20:32:39','2021-09-15 20:32:39',1,0,0,NULL);

/*Table structure for table `m_flag` */

DROP TABLE IF EXISTS `m_flag`;

CREATE TABLE `m_flag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flag_type` varchar(100) NOT NULL,
  `flag_value` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `flag_additionalText` text DEFAULT NULL,
  `has_image` varchar(1) DEFAULT '0',
  `is_active` varchar(1) DEFAULT '1',
  `is_config` varchar(1) DEFAULT '0',
  `flag_show_text` text DEFAULT NULL,
  `is_featured` int(11) DEFAULT 0,
  `is_deleted` int(11) DEFAULT 0,
  `user_id` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1967 DEFAULT CHARSET=utf8;

/*Data for the table `m_flag` */

insert  into `m_flag`(`id`,`flag_type`,`flag_value`,`created_at`,`updated_at`,`flag_additionalText`,`has_image`,`is_active`,`is_config`,`flag_show_text`,`is_featured`,`is_deleted`,`user_id`) values 
(59,'COMPANYPHONE','000-000-0000','2019-04-19 11:33:45','0000-00-00 00:00:00','000-000-0000','0','1','1','Company Phone',0,0,0),
(123,'COMPANY','DUMMY PROJECT','2019-04-29 23:54:46','0000-00-00 00:00:00','Pizza Hut','0','1','1','Company',0,0,0),
(218,'COMPANYEMAIL','info@demo.com','2019-04-19 11:33:45','0000-00-00 00:00:00','info@demo.com','0','1','1','Company Email',0,0,0),
(499,'CURRENTHEME','red','2019-04-23 03:16:09','0000-00-00 00:00:00','red','0','1','1','Theme Option',0,0,0),
(519,'ADDRESS','Dummy address','2019-04-29 23:54:53','0000-00-00 00:00:00','107 Silver Circle','0','1','1','Address',0,0,0),
(682,'FACEBOOK','https://facebook.com/sdd','2019-04-23 23:56:03','0000-00-00 00:00:00','https://facebook.com/sdd','0','1','1','Facebook',0,0,0),
(1960,'TWITTER','https://twitter.com/','2019-04-19 11:34:21','0000-00-00 00:00:00','https://twitter.com/','0','1','1','Twitter',0,0,0),
(1961,'INSTAGRAM','https://instagram.com/','2019-04-19 11:34:53','0000-00-00 00:00:00','https://instagram.com/','0','1','1','Instagram',0,0,0),
(1962,'GOOGLEPLUS','https://googleplus.com/','2019-04-19 11:35:03','0000-00-00 00:00:00','https://googleplus.com/','0','1','1','Google+',0,0,0),
(1963,'PRODUCTCATEGORY','Logo Tech','2021-09-15 20:40:11','2021-09-15 20:40:11',NULL,'0','1','0',NULL,0,0,0),
(1964,'PRODUCTCATEGORY','Wearable Pulse','2021-09-16 16:45:22','2021-09-16 16:45:22',NULL,'0','1','0',NULL,0,0,0),
(1965,'PRODUCTCATEGORY','Promo Pulse','2021-09-16 16:45:30','2021-09-16 16:45:30',NULL,'0','1','0',NULL,0,0,0),
(1966,'PRODUCTCATEGORY','Entertainment Pulse','2021-09-16 16:45:40','2021-09-16 16:45:40',NULL,'0','1','0',NULL,0,0,0);

/*Table structure for table `order_products` */

DROP TABLE IF EXISTS `order_products`;

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `price` float NOT NULL DEFAULT 0,
  `discount` float NOT NULL DEFAULT 0,
  `rowtotal` float NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `order_products` */

insert  into `order_products`(`id`,`order_id`,`product_id`,`qty`,`price`,`discount`,`rowtotal`,`updated_at`,`created_at`) values 
(1,7,3,20,110,20,1760,'2021-09-23 19:11:54','2021-09-23 19:11:54'),
(2,7,2,30,110,0,3300,'2021-09-23 19:11:54','2021-09-23 19:11:54'),
(3,8,3,20,110,20,1760,'2021-09-23 19:12:03','2021-09-23 19:12:03'),
(4,8,2,30,110,0,3300,'2021-09-23 19:12:04','2021-09-23 19:12:04'),
(5,9,3,20,110,20,1760,'2021-09-23 19:12:48','2021-09-23 19:12:48'),
(6,9,2,30,110,0,3300,'2021-09-23 19:12:48','2021-09-23 19:12:48'),
(7,10,3,20,110,20,1760,'2021-09-23 19:41:07','2021-09-23 19:41:07'),
(8,10,2,30,110,0,3300,'2021-09-23 19:41:07','2021-09-23 19:41:07'),
(9,11,1,10,50,10,450,'2021-09-23 20:42:32','2021-09-23 20:42:32');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `total_products` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT 0,
  `order_status` enum('Pending','Payment Failed','Payment Success','Delivered','Junk','Return') DEFAULT 'Pending',
  `is_deleted` tinyint(4) DEFAULT 0,
  `is_active` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `orders` */

insert  into `orders`(`id`,`first_name`,`last_name`,`company_name`,`address`,`address2`,`city`,`email`,`phone`,`total_products`,`subtotal`,`discount`,`total`,`updated_at`,`created_at`,`user_id`,`order_status`,`is_deleted`,`is_active`) values 
(1,'test','test','12','123','123','123','132@gmail.com','123',NULL,NULL,NULL,NULL,'2021-09-23 19:00:53','2021-09-23 19:00:53',0,'Pending',0,1),
(2,'test','test','12','123','123','123','132@gmail.com','123',NULL,NULL,NULL,NULL,'2021-09-23 19:01:02','2021-09-23 19:01:02',0,'Pending',0,1),
(3,'test','test','12','123','123','123','132@gmail.com','123',NULL,NULL,NULL,NULL,'2021-09-23 19:03:46','2021-09-23 19:03:46',0,'Pending',0,1),
(4,'test','test','12','123','123','123','132@gmail.com','123',2,5060,50,2530,'2021-09-23 19:05:03','2021-09-23 19:05:03',0,'Pending',0,1),
(5,'test','test','12','123','123','123','132@gmail.com','123',2,5060,50,2530,'2021-09-23 19:05:08','2021-09-23 19:05:08',0,'Pending',0,1),
(6,'test','test','12','123','123','123','132@gmail.com','123',2,5060,50,2530,'2021-09-23 19:09:50','2021-09-23 19:09:50',0,'Pending',0,1),
(7,'test','test','12','123','123','123','132@gmail.com','123',2,5060,50,2530,'2021-09-23 19:11:54','2021-09-23 19:11:54',0,'Pending',0,1),
(8,'test','test','12','123','123','123','132@gmail.com','123',2,5060,50,2530,'2021-09-23 19:12:03','2021-09-23 19:12:03',0,'Pending',0,1),
(9,'test','test','12','123','123','123','132@gmail.com','123',2,5060,50,2530,'2021-09-23 19:12:48','2021-09-23 19:12:48',0,'Pending',0,1),
(10,'test','test','12','123','123','123','132@gmail.com','123',2,5060,50,2530,'2021-09-23 19:41:07','2021-09-23 19:41:07',0,'Pending',0,1),
(11,'1231','1231','123','test',NULL,'123','1231@gmail.com','1231231231',1,450,50,225,'2021-09-23 20:42:32','2021-09-23 20:42:32',0,'Pending',0,1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(500) DEFAULT NULL,
  `token` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `password_resets` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `short_description` varchar(555) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `is_featured` tinyint(4) DEFAULT 0,
  `is_deleted` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`slug`,`short_description`,`description`,`price`,`discount`,`is_active`,`is_featured`,`is_deleted`,`created_at`,`updated_at`,`category_id`) values 
(1,'Test Product','test-produc','Short description','<p>Long DEscription</p>',50,10,1,1,0,'2021-09-15 20:46:03','2021-09-16 16:44:59',1963);

/*Table structure for table `table_notes` */

DROP TABLE IF EXISTS `table_notes`;

CREATE TABLE `table_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(250) DEFAULT NULL,
  `ref_id` int(11) DEFAULT NULL,
  `note_value` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT 0,
  `is_active` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `table_notes` */

/*Table structure for table `tracking_users` */

DROP TABLE IF EXISTS `tracking_users`;

CREATE TABLE `tracking_users` (
  `request_uri` varchar(500) DEFAULT NULL,
  `request_data_exist` char(1) DEFAULT NULL,
  `request_data` text DEFAULT NULL,
  `user_id` int(11) DEFAULT 0,
  `user_logged_in` char(1) DEFAULT NULL,
  `session_id` text DEFAULT NULL,
  `request_lasturi` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id` int(11) NOT NULL,
  `time_to` timestamp NULL DEFAULT NULL,
  `time_start` timestamp NULL DEFAULT NULL,
  `user_ip` varchar(255) DEFAULT NULL,
  `user_country` varchar(100) DEFAULT NULL,
  `user_countrycode` varchar(10) DEFAULT NULL,
  `user_city` varchar(100) DEFAULT NULL,
  `user_state` varchar(100) DEFAULT NULL,
  `user_continent` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tracking_users` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` text NOT NULL,
  `remember_token` text DEFAULT NULL,
  `is_active` int(11) DEFAULT 0,
  `email_verified_at` datetime DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*Table structure for table `ytables` */

DROP TABLE IF EXISTS `ytables`;

CREATE TABLE `ytables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `js_file` text DEFAULT NULL,
  `page_heading` varchar(500) DEFAULT NULL,
  `page_message` text DEFAULT NULL,
  `new_url` varchar(500) DEFAULT NULL COMMENT 'write urls after base',
  `is_deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `page_limit` enum('10','25','50','100') DEFAULT '10',
  `fast_crud` int(11) DEFAULT 1,
  `model_name` varchar(255) DEFAULT NULL COMMENT 'laravel model name, Fill this when you have different model name and different table name',
  `table_name` varchar(255) DEFAULT NULL COMMENT 'database table name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `ytables` */

insert  into `ytables`(`id`,`js_file`,`page_heading`,`page_message`,`new_url`,`is_deleted`,`created_at`,`updated_at`,`page_limit`,`fast_crud`,`model_name`,`table_name`) values 
(6,'admin/listings/adminiy-listing.js','Adminiy Listing','','adminiy/crud/adminiy',0,'2019-04-03 17:21:50','2019-04-05 16:35:04','',1,'Adminiy','adminiy'),
(7,'admin/listings/table_notes-listing.js','Table Notes','','adminiy.tablename.form',0,'2019-04-05 12:17:58','2019-04-07 02:05:38','',1,'table_notes','table_notes'),
(15,'admin/listings/imagetable-listing.js','Imagetable','','adminiy/crud/imagetable',0,'2019-04-17 19:28:31','2019-04-17 19:28:31','',1,'','imagetable'),
(16,'admin/listings/inquiry-listing.js','Inquiry','','adminiy/crud/inquiry',0,'2019-04-18 17:49:24','2019-04-19 19:42:01','',1,'','inquiry'),
(17,'admin/listings/m_flag-listing.js','Flag','','adminiy/crud/m_flag',0,'2019-04-19 06:51:33','2019-04-19 11:58:07','',1,'','m_flag'),
(18,'admin/listings/products-listing.js','Products','','adminiy/crud/products',0,'2021-09-15 20:39:52','2021-09-15 20:39:52','',1,'','products'),
(19,'admin/listings/coupons-listing.js','Coupons','','adminiy/crud/coupons',0,'2021-09-23 20:40:38','2021-09-23 20:40:38','',1,'','coupons'),
(20,'admin/listings/orders-listing.js','Orders','','adminiy/crud/orders',0,'2021-09-23 20:40:41','2021-09-23 20:40:41','',1,'','orders');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
