CREATE DATABASE ciudades;
CREATE TABLE `ciudades` (
  `ID` int(11) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Pais` varchar(255) NOT NULL,
  `Habitantes` int(11) NOT NULL,
  `Superficie` decimal(10,0) NOT NULL,
  `TieneMetro` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin
PARTITION BY KEY (`ID`) 

INSERT INTO ciudades VALUES
  (1, 'Ciudad de Mexico', 'Mexico', 555666, 23434, TRUE),
  (2, 'Barcelona', 'España', 444333, 1111, FALSE),
  (3, 'Buenos Aires', 'Argentina', 888111, 333, TRUE),
  (4, 'Medellin', 'Colombia', 999222, 888, FALSE),
  (5, 'Lima', 'Peru', 999111, 222, FALSE),
  (6, 'Caracas', 'Venezuela', 111222, 111, TRUE),
  (7, 'Santiago', 'Chile', 777666, 2223, TRUE),
  (8, 'Antigua', 'Guatemala', 444222, 877, FALSE),
  (9, 'Quito', 'Ecuador', 333111, 991, TRUE),
  (10, 'La Habana', 'Cuba', 111222, 334, FALSE);