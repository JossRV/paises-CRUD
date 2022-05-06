CREATE SCHEMA `buscador` ;
CREATE TABLE `buscador`.`t_continente` (
`id_continente` INT NOT NULL AUTO_INCREMENT,
`nombre` VARCHAR(45) NOT NULL,
`descripcion` TEXT(100) NOT NULL,
PRIMARY KEY (`id_continente`));
CREATE TABLE `buscador`.`t_paises` (
`id_pais` INT NOT NULL AUTO_INCREMENT,
`id_continente` INT NOT NULL,
`nombre` VARCHAR(45) NOT NULL,
`bandera` TEXT NULL,
PRIMARY KEY (`id_pais`),
INDEX `id_continente_idx` (`id_continente` ASC),
CONSTRAINT `id_continente`
FOREIGN KEY (`id_continente`)
REFERENCES `buscador`.`t_continente` (`id_continente`)
ON DELETE NO ACTION
ON UPDATE NO ACTION);

INSERT INTO `buscador`.`t_continente` (`nombre`, `descripcion`) VALUES ('America', 'Ocupa gran parte del hemisferio occidental del planeta. Se extiende desde el ocÃ©ano Ãrtico por el norte hasta las islas Diego RamÃ­rez por el sur, en la confluencia de los ocÃ©anos AtlÃ¡ntico y PacÃ­fico');
INSERT INTO `buscador`.`t_continente` (`nombre`, `descripcion`) VALUES ('Europa', 'Europa estÃ¡ dividida polÃ­ticamente en cincuenta estados soberanos, ocho estados con limitado reconocimiento, seis territorios dependientes y tres regiones autÃ³nomas integradas en la UniÃ³n Europea');
INSERT INTO `buscador`.`t_continente` (`nombre`, `descripcion`) VALUES ('Asia', 'Asia es el continente mas grande y el que presenta la mayor diversidad de razas, culturas y lenguas del mundo. Ocupa una superficie de 44.614.000 kilometros cuadrados.');
INSERT INTO `buscador`.`t_continente` (`nombre`, `descripcion`) VALUES ('Oceania', 'OceanÃ­a es un continente insular de la Tierra constituido por la plataforma continental de Australia, las islas de Nueva Guinea, Nueva Zelanda y los archipiÃ©lagos coralinos y volcÃ¡nicos de Melanesia, Micronesia y Polinesia.');
INSERT INTO `buscador`.`t_continente` (`nombre`, `descripcion`) VALUES ('Africa', 'Ãfrica es el tercer continente mÃ¡s extenso, tras Asia y AmÃ©rica. EstÃ¡ situado entre los ocÃ©anos AtlÃ¡ntico, al oeste, e Ãndico, al este. El mar MediterrÃ¡neo lo separa al norte del continente europeo.');

INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('1', 'México');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('1', 'EUA');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('1', 'Brasil');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('1', 'Canada');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('1', 'Colombia');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('2', 'Alemania');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('2', 'Francia');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('2', 'Reino Unido');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('2', 'Suiza');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('2', 'Paises Bajos');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('3', 'China');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('3', 'Japon');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('3', 'Tailandia');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('3', 'Corea del Sur');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('3', 'Hong Kong');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('4', 'Australia');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('4', 'Nueva Zelanda');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('4', 'Tonga');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('4', 'Samoa');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('4', 'Palaos');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('5', 'Sudafrica');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('5', 'Nigeria');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('5', 'Kenia');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('5', 'Madagascar');
INSERT INTO `buscador`.`t_paises` (`id_continente`, `nombre`) VALUES ('5', 'Republica democratica del Congo');
CREATE VIEW `v_continente_pais` AS
SELECT 
        `continente`.`id_continente` AS `idContinente`,
        `continente`.`nombre` AS `nombre_continente`,
        `continente`.`descripcion` AS `descripcion_continente`,
        `pais`.`id_pais` AS `idPais`,
        `pais`.`nombre` AS `nombre_pais`,
        `pais`.`bandera` AS `bandera_pais`FROM
	t_continente AS continente
		JOIN
	t_paises AS pais ON continente.id_continente = pais.id_continente;

UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/203px-Flag_of_Mexico.svg.png' WHERE (`id_pais` = '1');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/203px-Flag_of_the_United_States.svg.png' WHERE (`id_pais` = '2');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/203px-Flag_of_Brazil.svg.png' WHERE (`id_pais` = '3');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/203px-Flag_of_Canada_%28Pantone%29.svg.png' WHERE (`id_pais` = '4');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/203px-Flag_of_Colombia.svg.png' WHERE (`id_pais` = '5');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/203px-Flag_of_Germany.svg.png' WHERE (`id_pais` = '6');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg/203px-Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg.png' WHERE (`id_pais` = '7');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/203px-Flag_of_the_United_Kingdom.svg.png' WHERE (`id_pais` = '8');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Flag_of_Switzerland_%28Pantone%29.svg/165px-Flag_of_Switzerland_%28Pantone%29.svg.png' WHERE (`id_pais` = '9');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/150px-Flag_of_the_Netherlands.svg.png' WHERE (`id_pais` = '10');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/203px-Flag_of_the_People%27s_Republic_of_China.svg.png' WHERE (`id_pais` = '11');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Flag_of_Japan.svg/203px-Flag_of_Japan.svg.png' WHERE (`id_pais` = '12');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Flag_of_Thailand.svg/203px-Flag_of_Thailand.svg.png' WHERE (`id_pais` = '13');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Flag_of_South_Korea.svg/203px-Flag_of_South_Korea.svg.png' WHERE (`id_pais` = '14');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Flag_of_Hong_Kong.svg/150px-Flag_of_Hong_Kong.svg.png' WHERE (`id_pais` = '15');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_Australia_%28converted%29.svg/203px-Flag_of_Australia_%28converted%29.svg.png' WHERE (`id_pais` = '16');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/203px-Flag_of_New_Zealand.svg.png' WHERE (`id_pais` = '17');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Tonga.svg/203px-Flag_of_Tonga.svg.png' WHERE (`id_pais` = '18');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Flag_of_Samoa.svg/203px-Flag_of_Samoa.svg.png' WHERE (`id_pais` = '19');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Flag_of_Palau.svg/203px-Flag_of_Palau.svg.png' WHERE (`id_pais` = '20');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Flag_of_South_Africa.svg/203px-Flag_of_South_Africa.svg.png' WHERE (`id_pais` = '21');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Flag_of_Nigeria.svg/203px-Flag_of_Nigeria.svg.png' WHERE (`id_pais` = '22');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Kenya.svg/203px-Flag_of_Kenya.svg.png' WHERE (`id_pais` = '23');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Madagascar.svg/203px-Flag_of_Madagascar.svg.png' WHERE (`id_pais` = '24');
UPDATE `buscador`.`t_paises` SET `bandera` = 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Flag_of_the_Democratic_Republic_of_the_Congo.svg/203px-Flag_of_the_Democratic_Republic_of_the_Congo.svg.png' WHERE (`id_pais` = '25');
