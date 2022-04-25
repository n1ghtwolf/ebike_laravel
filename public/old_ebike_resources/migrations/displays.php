CREATE TABLE `localhost`.`displays` (
`id` INT NOT NULL AUTO_INCREMENT,
`name` VARCHAR(25) NOT NULL,
`description` VARCHAR(255) NULL,
`img_path` VARCHAR(255) ,
`price_usd` DOUBLE NOT NULL,
PRIMARY KEY (`id`));
alter table displays add column link_to_dealer varchar (255) null
INSERT INTO displays  (name,price_usd,img_path,link_to_dealer)
VALUES ('Дисплей LCD-3',37.4,'assets\img\displays\LCD-3_1-300x190.jpg','http://www.e-bike.com.ua/komponenty-i-zapchasti-dlya-elektrotransporta?product_id=2816');
INSERT INTO displays  (name,price_usd,img_path,link_to_dealer)
VALUES ('Дисплей LED-900S',12.6,'assets\img\displays\Led-900s_1-204x200.jpeg','http://www.e-bike.com.ua/komponenty-i-zapchasti-dlya-elektrotransporta?product_id=2814');
INSERT INTO displays  (name,price_usd,img_path,link_to_dealer)
VALUES ('Дисплей LCD-5',12.6,'assets\img\displays\LCD-5_1-268x200.jpg','http://www.e-bike.com.ua/komponenty-i-zapchasti-dlya-elektrotransporta?product_id=2813');