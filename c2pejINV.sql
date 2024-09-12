-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-09-2024 a las 17:04:37
-- Versión del servidor: 10.5.6-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `c2pejINV`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`) VALUES
(1, 'Premio Estatal de la Juventud 2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitacion`
--

CREATE TABLE IF NOT EXISTS `invitacion` (
  `id` int(11) NOT NULL,
  `tipoInvitacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `evento` int(11) DEFAULT NULL,
  `checkin` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `invitacion`
--

INSERT INTO `invitacion` (`id`, `tipoInvitacion`, `nombre`, `municipio`, `edad`, `fechaNacimiento`, `email`, `evento`, `checkin`) VALUES
(3, 'Invitado', 'Denisse Sandoval Arguelles', 'Zacatecas', 41, '1983-02-04', 'deny8yned@gmail.com', 1, 0),
(4, 'Participante PEJ2024', 'Alejandro Rodríguez Alfaro', 'Guadalupe', 28, '1996-03-13', 'alexchivas1396@gmail.com', 1, 0),
(5, 'Participante PEJ2024', 'Víctor Hugo de Ávila saucedo', 'Guadalupe', 25, '2024-09-10', 'deavilasaucedov@gmail.com', 1, 0),
(6, 'Participante PEJ2024', 'Arturo Campos Carrillo', 'Zacatecas', 18, '2024-09-20', 'arturocamposc27@gmail.com', 1, 0),
(7, 'Participante PEJ2024', 'Diego Santiago Jiménez ', 'Zacatecas', 28, '1996-05-15', 'diegojim407@hotmail.com', 1, 0),
(8, 'Invitado', 'Raquel Jiménez Díaz ', 'Zacatecas', 66, '2024-09-10', 'sereniraquel@gmail.com', 1, 0),
(9, 'Participante PEJ2024', 'Maximiliano Quintero Renteria ', 'Zacatecas', 24, '2000-02-20', 'maximilianoqr20@gmail.com', 1, 0),
(10, 'Participante PEJ2024', 'Kennia Higinia lisset Chairez Rojas ', 'Zacatecas', 27, '2024-09-26', 'lisset.chairez@gmail.com', 1, 0),
(11, 'Participante PEJ2024', 'Anayantzin Esperanza Ayala Haro', 'Zacatecas', 27, '1997-05-27', 'anayantzinayala@gmail.com', 1, 0),
(12, 'Participante PEJ2024', 'XIMENA AVILA MARQUEZ', 'Villanueva', 22, '2002-05-09', 'ximeavila2002@gmail.com', 1, 0),
(13, 'Participante PEJ2024', 'ESTHEFANY AVILA MARQUEZ', 'Villanueva', 20, '2004-08-20', 'esthefanyavilam@gmail.com', 1, 0),
(14, 'Participante PEJ2024', 'Pamela Giselle Zamora Santos ', 'Zacatecas', 20, '2024-09-26', 'gissxxiv@gmail.com', 1, 0),
(15, 'Invitado', 'Ernesto Emmanuel Martínez Rodríguez ', 'Zacatecas', 26, '2024-09-26', 'ernesto-m@live.com.mx', 1, 0),
(16, 'Miembro del Gabinete GODEZAC', 'Hamurabi Gamboa Rosales ', 'Zacatecas', 46, '2024-09-10', 'direccion@cozcyt.gob.mx', 1, 0),
(17, 'Participante PEJ2024', 'Mauro Salvador Gómez Marín ', 'Pinos', 21, '2002-10-08', '20207301@uaz.edu.mx', 1, 0),
(18, 'Invitado', 'Everardo de Jesús Báez Marín ', 'Pinos', 21, '2002-08-15', 'pelucheeesss@gmail.com', 1, 0),
(19, 'Participante PEJ2024', 'José de Jesús Alvarado Padilla ', 'Jerez', 25, '1998-10-15', 'jose_alpa@uaz.edu.mx', 1, 0),
(20, 'Participante PEJ2024', 'Derek Elías Ortiz', 'Pánuco', 13, '2010-09-30', 'mildredlorenajdl@gmail.com', 1, 0),
(21, 'Participante PEJ2024', 'Héctor Aparicio Durán ', 'Tlaltenango de Sánchez Román', 27, '2024-09-26', 'hectorcecfor3@gmail.com', 1, 0),
(22, 'Invitado', 'Julián Elías Díaz ', 'Pánuco', 38, '1986-02-01', 'mildredlorenaortizelias@gmail.com', 1, 0),
(23, 'Participante PEJ2024', 'Abigail Garcia Vanegas ', 'Guadalupe', 25, '2024-09-26', 'annak.1219@outlook.com', 1, 0),
(24, 'Jurado PEJ2024', 'Samuel Esparza Castillo ', 'Zacatecas', 57, '2024-09-10', 'samuel.esparza@ine.mx', 1, 0),
(25, 'Participante PEJ2024', 'Vanessa Lizeth Trejo Carrillo ', 'Calera', 17, '2024-09-10', 'trejovane526@gmail.com', 1, 0),
(26, 'Invitado', 'Alejandro Nápoles Pérez', 'Zacatecas', 31, '1992-10-30', 'alexfantom@hotmail.com', 1, 0),
(27, 'Invitado', 'Rosy Rentería Ortiz ', 'Zacatecas', 51, '1973-08-31', 'rosy1973.dif@gmail.com', 1, 0),
(28, 'Participante PEJ2024', 'Jessica Figueroa García ', 'Guadalupe', 28, '1995-10-14', 'figueroajessica386@gmail.com', 1, 0),
(29, 'Participante PEJ2024', 'Oswaldo Emmanuel Robles Miranda ', 'Chalchihuites', 25, '2024-09-26', 'oswaldo_emmanuel15@hotmail.com', 1, 0),
(30, 'Invitado', 'Gerarda Viviana Miranda Alvarez ', 'Chalchihuites', 46, '2024-09-26', 'miranda_mival@hotmail.com', 1, 0),
(31, 'Participante PEJ2024', 'Elia Gabriela Tovar Haro ', 'Zacatecas', 18, '2024-09-26', 'eliatovar02606@gmail.com', 1, 0),
(32, 'Invitado', 'Bertha Celia Haro Contreras ', 'Zacatecas', 56, '2024-09-26', '00828182@red.unid.mx', 1, 0),
(33, 'Participante PEJ2024', 'Juan Carlos Macías Berumen', 'Jerez', 29, '1995-02-11', 'jjuanm127@icloud.com', 1, 0),
(34, 'Participante PEJ2024', 'Alexis osiel vargas orozco', 'Jerez', 30, '1994-08-27', 'alexisvargas73150@gmail.com', 1, 0),
(35, 'Invitado', 'José Eduardo Ortega Aparicio', 'Jerez', 31, '1993-08-20', 'alexisvimagen@gmail.com', 1, 0),
(36, 'Participante PEJ2024', 'Sarahí Jiménez Zamora ', 'Guadalupe', 25, '2024-09-26', 'sarahijmnzpc@gmail.com', 1, 0),
(37, 'Invitado', 'Fernando Morales ', 'Zacatecas', 25, '1999-09-10', 'cilios_reparacion_0v@icloud.com', 1, 0),
(38, 'Jurado PEJ2024', 'Solanye Caignet Lima', 'Zacatecas', 48, '2024-09-26', 'solanye.caignet@gmail.com', 1, 0),
(39, 'Invitado', 'José Maximiliano Bonilla Alvarado ', 'Zacatecas', 17, '2024-09-10', 'jmax280501@gmail.com', 1, 0),
(40, 'Invitado', 'Maricela Rodríguez Luevano', 'Zacatecas', 51, '1973-06-10', 'emilianorure@gmail.com', 1, 0),
(41, 'Participante PEJ2024', 'Sofía Valeria Esparza Llamas ', 'Zacatecas', 20, '2024-09-26', 'svell0421@gmail.com', 1, 0),
(42, 'Participante PEJ2024', 'Rafael Salinas Zamora', 'Zacatecas', 27, '2024-09-26', 'rafaelsalinasz@outlook.com', 1, 0),
(43, 'Participante PEJ2024', 'Jhovan Lopez Castañeda ', 'Zacatecas', 30, '1994-09-09', 'jhovan541@gmail.com', 1, 0),
(44, 'Invitado', 'Alma Aurelia Lopez Castañeda ', 'Guadalupe', 26, '1997-10-28', 'aurelylpz@gmail.com', 1, 0),
(45, 'Invitado', 'Jaquelin Román Galaviz ', 'Fresnillo', 14, '2024-09-26', 'chokyflays@gmail.com', 1, 0),
(46, 'Participante PEJ2024', 'Jaquelin Román Galaviz', 'Fresnillo', 14, '2024-09-26', 'jakeroga18@gmail.com', 1, 0),
(47, 'Invitado', 'Nereida Judith Galaviz Méndez ', 'Fresnillo', 43, '2024-09-26', 'chokyflays@hotmail.com', 1, 0),
(48, 'Participante PEJ2024', 'Diego Alejandro Dueñas Moreno', 'Guadalupe', 18, '2024-09-26', 'duenasalejandromoreno11@gmail.com', 1, 0),
(49, 'Participante PEJ2024', 'Juan Pablo Esparza Galarza', 'Luis Moya', 17, '2007-01-25', 'juanpabloe038@gmail.com', 1, 0),
(50, 'Participante PEJ2024', 'Erick Flores García', 'Zacatecas', 20, '2024-09-26', 'erickflores012ern@gmail.com', 1, 0),
(51, 'Invitado especial', 'Lizbeth Esparza Ruiz', 'Jerez', 25, '1999-03-04', 'lizespa31@gmail.com', 1, 0),
(52, 'Participante PEJ2024', 'Lucero Isabel Nájera Lerma', 'Miguel Auza', 28, '2024-09-26', 'lumetal22@gmail.con', 1, 0),
(56, 'Jurado PEJ2024', 'Juan Carlos Medina Mazzoco', 'Zacatecas', 58, '2024-09-11', 'jcmmags@hotmail.com', 1, 0),
(57, 'Invitado especial', 'Lino García Escobedo ', 'Zacatecas', 33, '2024-09-26', 'lino_05@live.com.mx', 1, 0),
(58, 'Miembro del Gabinete GODEZAC', 'José de Jesús Villela Varela ', 'Zacatecas', 62, '2024-09-11', 'conla_zacatecas@hotmail.com', 1, 0),
(59, 'Participante PEJ2024', 'Madeline Lozano ', 'Zacatecas', 26, '2024-09-26', 'logoma01@gmail.com', 1, 0),
(60, 'Invitado especial', 'Elisa Lozano', 'Zacatecas', 53, '2024-09-26', 'lozagonmaeli@gmail.com', 1, 0),
(61, 'Participante PEJ2024', 'Luis Mario Alfonso Silva Gurrola', 'Fresnillo', 26, '1998-05-02', 'alfonso_gurrola@hotmail.com', 1, 0),
(62, 'Invitado especial', 'Daniel Morales Rodriguez ', 'Zacatecas', 30, '1994-03-24', 'soydanielmr@gmail.com', 1, 0),
(63, 'Jurado PEJ2024', 'Arturo ', 'Zacatecas', 40, '1984-05-28', 'arturogonzalezsalas@hotmail.com', 1, 0),
(64, 'Participante PEJ2024', 'Braulio González García ', 'Villanueva', 16, '2024-09-11', 'gongarbraulio@gmail.com', 1, 0),
(65, 'Participante PEJ2024', 'Rafael Argumedo Solis', 'Guadalupe', 15, '2024-09-26', 'rafael.com.com.mx@gmail.com', 1, 0),
(66, 'Invitado especial', 'Emma Perla Solís Recendez', 'Guadalupe', 52, '2024-09-26', 'emmaperla@yahoo.com.mx', 1, 0),
(67, 'Invitado especial', 'Lizbeth Molina Rodríguez ', 'Pinos', 17, '2007-01-09', 'lizbethmolina44055@gmail.com', 1, 0),
(68, 'Participante PEJ2024', 'Rey David Martínez Sifuentes ', 'Chalchihuites', 25, '1998-12-29', 'divadyer98@gmail.com', 1, 0),
(69, 'Invitado especial', 'Héctor Antonio Esparza Casas ', 'Fresnillo', 21, '2003-01-16', 'hrctor333@gmail.com', 1, 0),
(70, 'Participante PEJ2024', 'Diego Alejandro Sarabia Hernandez ', 'Fresnillo', 20, '2003-10-10', '1210302@upz.edu.mx', 1, 0),
(71, 'Institución educativa', 'Verónica Ramirez Rios', 'Zacatecas', 34, '1989-12-09', 'vramirez@upz.edu.mx', 1, 0),
(72, 'Participante PEJ2024', 'David Patricio Aguilar Tavizon ', 'Guadalupe', 26, '2024-09-12', 'dpaguilartavizon@gmail.com', 1, 0),
(73, 'Participante PEJ2024', 'Bruno Alain Esquivel Zamudio', 'Zacatecas', 29, '1995-07-21', 'clubopmexico@gmail.com', 1, 0),
(74, 'Invitado especial', 'María Fernanda Sánchez ', 'Zacatecas', 33, '1991-01-28', 'mfsand28@outlook.com', 1, 0),
(75, 'Participante PEJ2024', 'CHARLY SANTOS GAUCIN', 'Sombrerete', 25, '1998-10-13', 'charlygaucin@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `id` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `municipio`) VALUES
(1, 'Apozol'),
(2, 'Apulco'),
(3, 'Atolinga'),
(4, 'Benito Juárez'),
(5, 'Calera'),
(6, 'Cañitas de Felipe Pescador'),
(7, 'Concepción del Oro'),
(8, 'Cuauhtémoc'),
(9, 'Chalchihuites'),
(10, 'Fresnillo'),
(11, 'Trinidad García de la Cadena'),
(12, 'Genaro Codina'),
(13, 'General Enrique Estrada'),
(14, 'General Francisco R. Murguía'),
(15, 'El Plateado de Joaquín Amaro'),
(16, 'General Pánfilo Natera'),
(17, 'Guadalupe'),
(18, 'Huanusco'),
(19, 'Jalpa'),
(20, 'Jerez'),
(21, 'Jiménez del Teul'),
(22, 'Juan Aldama'),
(23, 'Juchipila'),
(24, 'Loreto'),
(25, 'Luis Moya'),
(26, 'Mazapil'),
(27, 'Melchor Ocampo'),
(28, 'Mezquital del Oro'),
(29, 'Miguel Auza'),
(30, 'Momax'),
(31, 'Monte Escobedo'),
(32, 'Morelos'),
(33, 'Moyahua de Estrada'),
(34, 'Nochistlán de Mejía'),
(35, 'Noria de Ángeles'),
(36, 'Ojocaliente'),
(37, 'Pánuco'),
(38, 'Pinos'),
(39, 'Río Grande'),
(40, 'Sain Alto'),
(41, 'El Salvador'),
(42, 'Sombrerete'),
(43, 'Susticacán'),
(44, 'Tabasco'),
(45, 'Tepechitlán'),
(46, 'Tepetongo'),
(47, 'Teúl de González Ortega'),
(48, 'Tlaltenango de Sánchez Román'),
(49, 'Valparaíso'),
(50, 'Vetagrande'),
(51, 'Villa de Cos'),
(52, 'Villa García'),
(53, 'Villa González Ortega'),
(54, 'Villa Hidalgo'),
(55, 'Villanueva'),
(56, 'Zacatecas'),
(57, 'Trancoso'),
(58, 'Santa María de la Paz');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invitacion`
--
ALTER TABLE `invitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `invitacion`
--
ALTER TABLE `invitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
