CREATE TABLE `todo_item`(
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_id` INT(10) UNSIGNED NOT NULL,
	`order` INT NOT NULL,
	`text` TEXT NOT NULL,
	`completed` tinyint(1) unsigned NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`),
	INDEX `todo_item_user` (`user_id`),
	CONSTRAINT `todo_item_user_id` FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=INNODB CHARSET=utf8;
