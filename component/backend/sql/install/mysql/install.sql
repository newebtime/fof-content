CREATE TABLE IF NOT EXISTS `#__fofcontent_contents` (
  `fofcontent_content_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `enabled` TINYINT(1) NOT NULL,
  `created_by` INT(11) UNSIGNED NOT NULL,
  `created_on` DATE NOT NULL,
  `modified_by` INT(11) UNSIGNED NOT NULL,
  `modified_on` DATE NOT NULL
  PRIMARY KEY ( `fofcontent_content_id` )
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
