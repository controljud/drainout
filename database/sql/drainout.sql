/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.14 : Database - db_drainout
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_drainout` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `id_post` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`id`,`message`,`id_post`,`created_at`,`updated_at`) values (1,'Pois é, isso acontece direto!',4,'2017-12-08 14:40:31','2017-12-08 14:40:34'),(2,'Hoje mesmo, acabou de acontecer.',4,'2017-12-08 14:40:52','2017-12-08 14:40:55'),(3,'Mais um comentário de merda',4,'2017-12-08 19:10:02','2017-12-08 19:10:02'),(4,'Isso tem me incomodado muito ultimamente. Eu vejo as pessoas com muito mais vontade de ter assunto com os outros.\r\nMe sinto rebaixado, sei lá.',4,'2017-12-08 19:12:14','2017-12-08 19:12:14'),(5,'O foda é mentir, dizendo que foi e na verdade não foi',5,'2017-12-08 19:34:36','2017-12-08 19:34:36'),(6,'Vou testar aqui, o uso de \"aspas\" duplas e \'aspas\' simples',5,'2017-12-08 19:35:21','2017-12-08 19:35:21');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `posts` */

insert  into `posts`(`id`,`title`,`message`,`id_user`,`created_at`,`updated_at`) values (4,'Amizades','Depois do Wagner, meu amigo de infância, eu nunca mais tive uma amizade que preferisse estar comigo do que a outras pessoas. Tipo, as pessoas conversam comigo quando estamos em grupo, mas quando fico sozinho com alguma delas, nunca temos um assunto concreto pra falar com ninguém.... e isso é com todo mundo...\r\nQueria ter alguém assim, queria ter uma amizade como vejo essas mesmas pessoas terem entre si, queria que alguém ficasse comigo porque gosta de mim, de coração, não porque não tem jeito. \r\nClaro, digo isso em relação à amizades. Não tenho nada que reclamar da minha esposa, ela sim é a única pessoa do mundo que gosta de mim desse jeito. Por mais que eu a considero minha amiga, queria muito ter mais gente assim na minha vida...\r\nEstou triste com isso, mesmo.',1,'2017-12-08 14:27:19','2017-12-08 14:27:19'),(5,'Academia','Não estou fazendo academia por fazer ou por causa de alguém em específico, estou fazendo porque quero parecer melhor para as outras pessoas, quero me sentir... desejado não é a palavra certa, mas chega perto',1,'2017-12-08 19:14:31','2017-12-08 19:14:31');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Isaias Lima dos Santos','isaikki@gmail.com','$2y$10$LnVdZpcoMbR/7/5oWGUOoeA2nbZ8.3/hFRrrLZyVcxL0zxyV3XvrS','i8yF0DnL5t5rGYT4rIukvBqn29d9ukyIVih6SDQ5Oenegp6u8QeYPyJ5jVG6','2017-12-07 16:36:09','2017-12-07 16:36:09');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
