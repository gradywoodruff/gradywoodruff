/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_private_blog_access_logs` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(30) DEFAULT '',
  `password_name` varchar(30) DEFAULT '',
  `password_color` varchar(30) DEFAULT '',
  `action` varchar(30) DEFAULT '',
  `user_agent` text,
  `device` varchar(30) DEFAULT '',
  `browser` varchar(30) DEFAULT '',
  `operating_system` varchar(30) DEFAULT '',
  `ip_address` varchar(30) DEFAULT '',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
