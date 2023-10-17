/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefono VARCHAR(15), -- Asumiendo que el número de teléfono puede tener hasta 15 caracteres
    password VARCHAR(255) NOT NULL
);


CREATE TABLE IF NOT EXISTS `cabeza` (
  `idcabeza` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcabeza`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `cabeza` DISABLE KEYS */;
INSERT INTO `cabeza` (`idcabeza`, `contenido`) VALUES
	(1, 'Mas Informacion');
/*!40000 ALTER TABLE `cabeza` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `cabeza2` (
  `idcabeza2` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcabeza2`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `cabeza2` DISABLE KEYS */;
INSERT INTO `cabeza2` (`idcabeza2`, `contenido`) VALUES
	(1, 'Redes Sociales');
/*!40000 ALTER TABLE `cabeza2` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `cabeza3` (
  `idcabeza3` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcabeza3`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `cabeza3` DISABLE KEYS */;
INSERT INTO `cabeza3` (`idcabeza3`, `contenido`) VALUES
	(1, 'Informacion Contactos');
/*!40000 ALTER TABLE `cabeza3` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `carousel` (
  `imagen` varchar(400) DEFAULT NULL,
  `juego` varchar(50) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `consola` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `carousel` DISABLE KEYS */;
INSERT INTO `carousel` (`imagen`, `juego`, `precio`, `consola`) VALUES
	('https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/s/super-smash-bros-ultimate-switch/super-smash-bros-ultimate-switch-hero', 'SSB Ultimate', '$99.99', 'Nintendo Switch'),
	('https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/m/mario-kart-8-deluxe-switch/hero', 'Mario Kart 8', '$59.99', 'Nintendo Switch'),
	('https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/t/triangle-strategy-switch/hero', 'TRIANGLE STRATEGY', '$59.99', 'Nintendo Switch'),
	('https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/p/pokemon-legends-arceus-switch/hero', 'Pokémon legends: Arceus', '$59.99', 'Nintendo Switch'),
	('https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/n/nintendo-switch-sports-switch/hero', 'Nintendo Switch Sports', '$49.99', 'Nintendo Switch'),
	('https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/m/mario-strikers-battle-league-switch/hero', 'MS BattleLeague', '$49.99', 'Nintendo Switch'),
	('https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/m/metroid-dread-switch/hero', 'Metroid Dread', '$49.99', 'Nintendo Switch'),
	('https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/p/pokemon-brilliant-diamond-switch/hero', 'Pokémon Brillant Diamond', '$69.99', 'Nintendo Switch'),
	('https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/p/pokemon-shining-pearl-switch/hero', 'Pokémon Shining Pearl', '$69.99', 'Nintendo Switch'),
	('https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/Nintendo%20Direct/2021/10-15-2021/aw7f2jh5/posters/ACNH-happy-home-paradise', 'Animal Crossing', '$49.99', 'Nintendo Switch');
/*!40000 ALTER TABLE `carousel` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `carousel_1` (
  `imagen` varchar(400) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `consola` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `carousel_1` DISABLE KEYS */;
INSERT INTO `carousel_1` (`imagen`, `precio`, `consola`) VALUES
	('https://assets.nintendo.com/image/upload/ncom/en_US/switch/site-design-update/oled-model-promo', '$799.99', 'Nintendo Switch OLED Model'),
	('https://assets.nintendo.com/image/upload/ncom/en_US/switch/split-cta-system', '$699.99', 'Nintendo Switch'),
	('https://assets.nintendo.com/image/upload/ncom/en_US/switch/lite/split-cta-switch-lite', '$509.99', 'Nintendo Switch Lite'),
	('https://www.pdvg.it/wp-content/uploads/2020/09/Nintendo3ds-1024x576.jpg', '$1099.99', 'Nintendo 3DS XL');
/*!40000 ALTER TABLE `carousel_1` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `continentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `continentes` DISABLE KEYS */;
INSERT INTO `continentes` (`id`, `nombre`) VALUES
	(1, 'America'),
	(2, 'Europa'),
	(3, 'Asia'),
	(4, 'Africa'),
	(5, 'Oceania');
/*!40000 ALTER TABLE `continentes` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `cop` (
  `idcop` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(45) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idcop`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `cop` DISABLE KEYS */;
INSERT INTO `cop` (`idcop`, `contenido`, `link`) VALUES
	(1, 'Empresa |', NULL);
/*!40000 ALTER TABLE `cop` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `ic` (
  `idic` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(45) DEFAULT NULL,
  `contenido` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idic`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `ic` DISABLE KEYS */;
INSERT INTO `ic` (`idic`, `imagen`, `contenido`) VALUES
	(1, 'iconos/celular.png', '+51-992-682-292'),
	(2, 'iconos/contacto.png', 'empresa@gmail.com');
/*!40000 ALTER TABLE `ic` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `images` (
  `id_image_left` int(11) NOT NULL AUTO_INCREMENT,
  `image_left` varchar(100) DEFAULT NULL,
  `image_right` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_image_left`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id_image_left`, `image_left`, `image_right`) VALUES
	(1, 'src="Pictures\\Sonic.png"', 'src="Pictures\\Mario.png"');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `info` (
  `idinfo` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(45) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idinfo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` (`idinfo`, `contenido`, `link`) VALUES
	(1, 'Informacion Compania |', NULL),
	(2, 'Privacion y Politica |', NULL),
	(3, 'Terminos y Condiciones', NULL);
/*!40000 ALTER TABLE `info` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `letrero` (
  `id_letrero` int(11) NOT NULL AUTO_INCREMENT,
  `letrero_titulo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_letrero`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `letrero` DISABLE KEYS */;
INSERT INTO `letrero` (`id_letrero`, `letrero_titulo`) VALUES
	(1, 'Pasala genial!');
/*!40000 ALTER TABLE `letrero` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `noticias` (
  `url_ref` varchar(400) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`url_ref`, `imagen`, `descripcion`) VALUES
	('https://www.nintendo.com/es_LA/whatsnew/detail/2022/mario-kart-8-deluxe-la-primera-ola-ya-esta-disponible/', 'noticia1.jpg', '¡La primera ola ya está disponible! Compite a través del Centro Cocotero y otras pistas.'),
	('https://www.nintendo.com/es_LA/whatsnew/detail/2022/novedades-del-mes-de-abril/', 'noticia2.jpg', 'Nintendo Switch Online + Paquete de expansión: Juegos de SEGA Genesis del mes de marzo.'),
	('https://www.nintendo.com/es_LA/whatsnew/detail/2022/escondete-en-las-sombras-en-estos-juegos-sigilosos/', 'noticia3.jpg', '¡Escóndete en las sombras (o en la hierba alta) en estos juegos sigilosos!'),
	('https://www.nintendo.com/es_LA/whatsnew/detail/2022/nintendo-switch-online-paquete-de-expansion-juegos-de-sega-genesis-del-mes-de-marzo/"', 'noticia4.jpg', 'Nintendo Switch Online + Paquete de expansión: Juegos de SEGA Genesis del mes de marzo.'),
	('https://www.nintendo.com/es_LA/whatsnew/detail/2021/animal-crossing-new-horizons-happy-home-paradise-nuevo-contenido-descargable/', 'noticia7.jpg', '¡Nuevo contenido descargable! Expande tus horizontes con el contenido descargable Animal Crossing: New Horizons – Happy Home Paradise.'),
	('https://www.nintendo.com/es_LA/whatsnew/detail/2022/preparate-para-el-desafio-y-unete-a-la-caza-en-monster-hunter-rise-el-mas-reciente-juego-de-muestra/', 'noticia5.jpg', 'Prepárate para el desafío y únete a la caza en MONSTER HUNTER RISE, el más reciente juego de muestra.'),
	('https://www.nintendo.com/es_LA/whatsnew/detail/2022/nintendo-switch-online-paquete-de-expansion-ya-esta-disponible-the-legend-of-zelda-majoras-mask/', 'noticia6.jpg', 'Nintendo Switch Online + Paquete de expansión: ¡ya está disponible The Legend of Zelda: Majora’s Mask!');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `p` (
  `idP` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `p` DISABLE KEYS */;
INSERT INTO `p` (`idP`, `contenido`) VALUES
	(1, 'Esta empresa se dedica dar informacion sobre juegos y a la venta de  videojuegos, asi tambien como a noticias sobre el medio de los video juegos y actualidad en el mundo del software');
/*!40000 ALTER TABLE `p` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  KEY `id` (`id`),
  CONSTRAINT `FK__nombres` FOREIGN KEY (`id`) REFERENCES `continentes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` (`id`, `nombre`) VALUES
	(1, 'Antigua y Barbuda'),
	(1, 'Argentina'),
	(1, 'Bahamas'),
	(1, 'Barbados'),
	(1, 'Belice'),
	(1, 'Bolivia'),
	(1, 'Brasil'),
	(1, 'Canada'),
	(1, 'Chile'),
	(1, 'Colombia'),
	(1, 'Costa Rica'),
	(1, 'Cuba'),
	(1, 'Dominica'),
	(1, 'Ecuador'),
	(1, 'El Salvador'),
	(1, 'Estados Unidos'),
	(1, 'Granada'),
	(1, 'Guatemala'),
	(1, 'Guyana'),
	(1, 'Haiti'),
	(1, 'Honduras'),
	(1, 'Jamaica'),
	(1, 'Mexico'),
	(1, 'Nicaragua'),
	(1, 'Panama'),
	(1, 'Paraguay'),
	(1, 'Per&uacute'),
	(1, 'Republica Dominicana'),
	(1, 'San Cristobal y Nieves'),
	(1, 'San Vicente y las Granadinas'),
	(1, 'Santa Lucia'),
	(1, 'Surinam'),
	(1, 'Trinidad y Tobago'),
	(1, 'Uruguay'),
	(1, 'Venezuela'),
	(3, 'Afganistan'),
	(3, 'Arabia Saudita'),
	(3, 'Banglades'),
	(3, 'Barein'),
	(3, 'Birmania'),
	(3, 'Brunei'),
	(3, 'Butan'),
	(3, 'Camboya'),
	(3, 'Catar'),
	(3, 'China'),
	(3, 'Corea del Sur'),
	(3, 'Filipinas'),
	(3, 'India'),
	(3, 'Irak'),
	(3, 'Iran'),
	(3, 'Israel'),
	(3, 'Japon'),
	(3, 'Jordania'),
	(3, 'Kirguistan'),
	(3, 'Kuwait'),
	(3, 'Laos'),
	(3, 'Libano'),
	(3, 'Malasia'),
	(3, 'Maldivas'),
	(3, 'Mongolia'),
	(3, 'Nepal'),
	(3, 'Oman'),
	(3, 'Pakistan'),
	(3, 'Singapur'),
	(3, 'Siria'),
	(3, 'Sri Lanka'),
	(3, 'Tailandia'),
	(2, 'Andorra'),
	(2, 'Austria'),
	(2, 'Belgica'),
	(2, 'Bosnia'),
	(2, 'Croacia'),
	(2, 'Eslovaquia'),
	(2, 'Dinamarca'),
	(2, 'Espa&ntildea'),
	(2, 'Estonia'),
	(2, 'Francia'),
	(2, 'Grecia'),
	(2, 'Irlanda'),
	(2, 'Italia'),
	(2, 'Luxenburgo'),
	(2, 'Montenegro'),
	(2, 'Noruega'),
	(2, 'Polonia'),
	(2, 'Portugal'),
	(2, 'Reino Unido'),
	(2, 'Rusia'),
	(2, 'Suiza'),
	(2, 'Ucrania'),
	(5, 'Australia'),
	(5, 'Estados Federados de Micronesia'),
	(5, 'Fiyi'),
	(5, 'Kiribati'),
	(5, 'Islas Marshall'),
	(5, 'Islas Salomon'),
	(5, 'Nauru'),
	(5, 'Nueva Zelanda'),
	(5, 'Palaos'),
	(5, 'Papua Nueva Guinea'),
	(5, 'Samoa'),
	(5, 'Tuvalu'),
	(5, 'Vanuatu'),
	(5, 'Indonesia'),
	(4, 'Angola'),
	(4, 'Argelia'),
	(4, 'Benin'),
	(4, 'Botsuana'),
	(4, 'Burundi'),
	(4, 'Cabo Verde'),
	(4, 'Camerun'),
	(4, 'Chad'),
	(4, 'Comoras'),
	(4, 'Republica del Congo '),
	(4, 'Republica Democratica del Congo'),
	(4, 'Costa de Marfil'),
	(4, 'Eritrea'),
	(4, 'Etiopia'),
	(4, 'Gabon'),
	(4, 'Gambia'),
	(4, 'Ghana'),
	(4, 'Guiena'),
	(4, 'Guinea-Bisau'),
	(4, 'Kenia'),
	(4, 'Lesoto'),
	(4, 'Liberia'),
	(4, 'Libia');
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `rs` (
  `idrs` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(45) DEFAULT NULL,
  `contenido` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`idrs`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `rs` DISABLE KEYS */;
INSERT INTO `rs` (`idrs`, `imagen`, `contenido`) VALUES
	(1, 'iconos/facebook.png', 'Siguenos en Facebook'),
	(2, 'iconos/twitter.png', 'Siguenos en Twitter'),
	(3, 'iconos/instagram.png', 'Siguenos en Instagram'),
	(4, 'iconos/youtube.png', 'Siguenos en Youtube');
/*!40000 ALTER TABLE `rs` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` (`id_video`, `video`) VALUES
	(1, '<iframe width="800px" height="550px" src="https://www.youtube.com/embed/N_Hw_M5ENCQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
