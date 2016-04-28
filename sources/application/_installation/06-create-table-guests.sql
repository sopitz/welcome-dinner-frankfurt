CREATE TABLE IF NOT EXISTS `huge`.`guests` (
 `guest_id` int(11) NOT NULL AUTO_INCREMENT,
 `guest_gender` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_firstname` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_lastname` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_age` int(11) COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_phone` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_mail` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_street` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_zipCode` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_city` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_country` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_languages` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_foodspecials` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_foodspecialsnotes` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_origin` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_bringalongs` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_geo_lat` text COLLATE utf8_unicode_ci DEFAULT NULL,
 `guest_geo_long` text COLLATE utf8_unicode_ci DEFAULT NULL,
 PRIMARY KEY (`guest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='guest data';