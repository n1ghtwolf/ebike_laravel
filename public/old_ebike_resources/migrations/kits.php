CREATE TABLE `localhost`.`kits` (
`id` INT NOT NULL AUTO_INCREMENT,
`name` VARCHAR(25) NOT NULL,
`description` VARCHAR(255) NULL,
`side` tinyint NOT NULL,
`price_usd` DOUBLE NOT NULL,
PRIMARY KEY (`id`));