CREATE TABLE IF NOT EXISTS `huge`.`hosts` (
 `host_id` int(11) NOT NULL AUTO_INCREMENT,
 `host_gender` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `host_firstname` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `host_lastname` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `host_phone` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `host_mail` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `host_street` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `host_zipCode` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `host_city` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `host_languages` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `host_origin` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `host_cohosts` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `host_notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
 PRIMARY KEY (`host_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='host data';