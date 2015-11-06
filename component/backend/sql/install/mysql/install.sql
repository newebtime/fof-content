CREATE TABLE IF NOT EXISTS `#__fofcontent_contents` (
  `fofcontent_content_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NULL,
  `slug` VARCHAR(255) NOT NULL,
  `fulltext` TEXT NOT NULL,
  `enabled` TINYINT(1) NOT NULL,
  `created_by` INT(11) UNSIGNED NOT NULL,
  `created_on` DATE NOT NULL,
  `modified_by` INT(11) UNSIGNED NOT NULL,
  `modified_on` DATE NOT NULL,
  `ordering` INT(11) NOT NULL,
  `access` INT(10) UNSIGNED NOT NULL,
  `hits` INT(11) UNSIGNED NULL,
  `language` CHAR(7) NOT NULL,
  PRIMARY KEY ( `fofcontent_content_id` )
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
