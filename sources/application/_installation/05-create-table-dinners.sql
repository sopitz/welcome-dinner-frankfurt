CREATE TABLE IF NOT EXISTS `huge`.`dinners` (
 `dinner_id` int(11) NOT NULL AUTO_INCREMENT,
 `dinner_date` DATE COLLATE utf8_unicode_ci DEFAULT NULL,
 `dinner_host_id` int(11) COLLATE utf8_unicode_ci DEFAULT NULL,
 PRIMARY KEY (`dinner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='dinner data';