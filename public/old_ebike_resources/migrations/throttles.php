CREATE TABLE `localhost`.`throttles` (
`id` INT NOT NULL AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL,
`description` VARCHAR(255) NULL,
`type` VARCHAR(15) NOT NULL,
`price_usd` DOUBLE NOT NULL,
PRIMARY KEY (`id`));
alter table throttles add column img_path varchar(50) null
alter table throttles add column link_to_dealer varchar(255) null;
alter table throttles add column available tinyint null;
INSERT INTO throttles  (name,type,price_usd,img_path,link_to_dealer) VALUES ('Универсальная ручка газа рычажного типа',0,6.6,'assets\img\throttles\gas-5-220x220.jpg','http://www.e-bike.com.ua/komponenty-i-zapchasti-dlya-elektrotransporta?product_id=764');
INSERT INTO throttles  (name,type,price_usd,img_path,link_to_dealer) VALUES ('Ручка газа рычажного типа со светодиодным индикатором на 48v и фиксируемой кнопкой',0,8.15,'assets\img\throttles\gas-4-220x220.jpg','');
INSERT INTO throttles  (name,type,price_usd,img_path,link_to_dealer) VALUES ('Ручка газа со светодиодным индикатором на 48v и кнопкой включения питания',2,9,'assets\img\throttles\gas-3-220x220.jpg','');
INSERT INTO throttles  (name,type,price_usd,img_path,link_to_dealer) VALUES ('Ручка газа с индикатором заряда на 48v и замком зажигания',2,9.65,'assets\img\throttles\lock-gas-2-700x500.jpg','http://www.e-bike.com.ua/komponenty-i-zapchasti-dlya-elektrotransporta?product_id=2891');
INSERT INTO throttles  (name,type,price_usd,img_path,link_to_dealer) VALUES ('Ручка газа с индикатором заряда на 48v и замком зажигания',2,11.15,'assets\img\throttles\lock-gas-1-220x220.jpg','');