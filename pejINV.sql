-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-09-2024 a las 00:31:43
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pejINV`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`) VALUES
(1, 'Premio Estatal de la Juventud 2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitacion`
--

CREATE TABLE `invitacion` (
  `id` int(11) NOT NULL,
  `tipoInvitacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `evento` int(11) DEFAULT NULL,
  `checkin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `invitacion`
--

INSERT INTO `invitacion` (`id`, `tipoInvitacion`, `nombre`, `municipio`, `edad`, `fechaNacimiento`, `email`, `evento`, `checkin`) VALUES
(10, '', 'Aleydis Cervantes Dueñas', '', 0, '0000-00-00', 'sidyela_cd@hotmail.com', NULL, 1),
(11, '', 'Luis Humberto Cid Buiza ', '', 0, '0000-00-00', 'Luishumberto.cid@gmail.com', NULL, 1),
(12, '', 'Felipe Gallegos Montes', '', 0, '0000-00-00', 'bajolarbol@gmail.com', NULL, NULL),
(13, '', 'Estefanía del Río Landa', '', 0, '0000-00-00', 'estefaniadelrl@gmail.com', NULL, NULL),
(14, '', 'HUMBERTO ALEJANDRO', '', 0, '0000-00-00', 'humbertoa.murillo@gmail.com', NULL, NULL),
(15, '', 'Paula Lucia Alvarado Hernández ', '', 0, '0000-00-00', 'paulaluciaalvaradohdz@gmail.com', NULL, NULL),
(16, '', 'Alexandra Jiménez Alvarado ', '', 0, '0000-00-00', '', NULL, NULL),
(17, '', 'Natalia Alvarez Maldonado', '', 0, '0000-00-00', 'nataliaalvmal@gmail.com', NULL, NULL),
(18, '', 'Dulce María Mendoza Salazar ', '', 0, '0000-00-00', '36173226@uaz.edu.mx', NULL, NULL),
(19, '', 'Gabriela Rivera ', '', 0, '0000-00-00', 'grajeadelis@gmail.com', NULL, NULL),
(20, '', 'OSCAR AGUILERA MEDRANO', '', 0, '0000-00-00', 'oagmed123@gmail.com', NULL, NULL),
(21, '', 'Edith Báez Sámano', '', 0, '0000-00-00', 'edith_96baez@hotmail.com', NULL, NULL),
(22, '', 'José de Jesús Alvarado Padilla ', '', 0, '0000-00-00', 'jose_alpa@uaz.edu.mx', NULL, NULL),
(23, '', 'Lizbeth Esparza Ruiz', '', 0, '0000-00-00', 'lizespa31@gmail.com', NULL, NULL),
(24, '', 'VICTOR DANIEL MENDEZ MONTALVO', '', 0, '0000-00-00', 'danie_besor1@hotmail.com', NULL, NULL),
(25, '', 'Julián Herrera', '', 0, '0000-00-00', 'josejulianzh@gmail.com', NULL, NULL),
(26, '', 'Alberto Manuel Barajas Palacios', '', 0, '0000-00-00', 'manuelpalacios36@gmail.com', NULL, NULL),
(27, '', 'David Patricio Aguilar Tavizon', '', 0, '0000-00-00', 'dpaguilartavizon@gmail.com', NULL, NULL),
(28, '', 'David de Jesus Ulises Hernandez Gonzalez', '', 0, '0000-00-00', 'davhdezglez@gmail.com', NULL, NULL),
(30, '', 'Ricardo Mendez Montalvo ', '', 0, '0000-00-00', 'ricardovencar728@gmail.com', NULL, NULL),
(31, '', 'América Reyes Guerrero', '', 0, '0000-00-00', 'manuelpalacios36@gmail.com', NULL, NULL),
(32, '', 'Sara Muñoz', '', 0, '0000-00-00', 'sarimun689@gmail.com', NULL, NULL),
(33, '', 'Jorge Alfonso Solís Galván', '', 0, '0000-00-00', 'jasg15_@hotmail.com', NULL, NULL),
(36, '', 'Humberto Alejandro', '', 0, '0000-00-00', 'humbertoa.murillo@gmail.com', NULL, NULL),
(37, '', 'Javier Enrique Báez Zacarías', '', 0, '0000-00-00', 'edith_96baez@hotmail.com', NULL, NULL),
(39, '', 'Esmeralda Palacios Valdez', '', 0, '0000-00-00', 'esmeraldavaldez5919@gmail.com', NULL, NULL),
(44, '', 'Ma. Guadalupe Sámano Domínguez', '', 0, '0000-00-00', 'edith_96baez@hotmail.com', NULL, NULL),
(46, '', 'GALA ANABELY GUERRERO SANCHEZ', '', 0, '0000-00-00', 'galaguerrero21@gmail.com', NULL, NULL),
(47, '', 'Alejandro Rodriguez Rodriguez', '', 0, '0000-00-00', 'argosalex88@gmail.com', NULL, NULL),
(48, '', 'Edith Ramirez Jáquez ', '', 0, '0000-00-00', 'eifijaquez@gmail.com', NULL, NULL),
(50, '', 'Daniel Ramírez', '', 0, '0000-00-00', 'danielrmz101@gmail.com', NULL, NULL),
(51, '', 'Antoine Berkam ', '', 0, '0000-00-00', 'josecamacho555@outlook.es', NULL, NULL),
(52, '', 'Maria Alexia Cervantes Diaz ', '', 0, '0000-00-00', 'alexia.macd@gmail.com', NULL, NULL),
(53, '', 'Leslie Acevedo Sánchez', '', 0, '0000-00-00', 'lesliea288@gmail.com', NULL, NULL),
(54, '', 'Fátima Yoseline Ramírez Collazo ', '', 0, '0000-00-00', 'ycollazo96@gmail.com', NULL, NULL),
(55, '', 'SARA GALLEGOS BUENROSTRO', '', 0, '0000-00-00', 'saragallegosb@gmail.com', NULL, NULL),
(56, '', 'SARA GALLEGOS BUENROSTRO', '', 0, '0000-00-00', 'saragallegosb@gmail.com', NULL, NULL),
(57, '', 'Juan Antonio Nava Pedroza', '', 0, '0000-00-00', 'dragonava2000@gmail.com', NULL, NULL),
(58, '', 'Alonso García Morales', '', 0, '0000-00-00', 'alog2193@gmail.com', NULL, NULL),
(60, '', 'Alexander Bañuelos Robles ', '', 0, '0000-00-00', 'alxbsrbs@gmail.com', NULL, NULL),
(61, '', 'Griselda Serrano', '', 0, '0000-00-00', 'griss.248@hotmail.com', NULL, NULL),
(62, '', 'Jorge Saucedo', '', 0, '0000-00-00', 'jorgeorge001@gmail.com', NULL, NULL),
(63, '', 'Maricela Dimas Reveles ', '', 0, '0000-00-00', 'presidencia.zac.cdhez@gmail.com', NULL, NULL),
(64, '', 'Aldo González Campos', '', 0, '0000-00-00', 'triage12@hotmail.com', NULL, NULL),
(65, '', 'Paola Tiscareno', '', 0, '0000-00-00', 'paotisg@gmail.com', NULL, NULL),
(66, '', 'David Montoya', '', 0, '0000-00-00', 'davidmon21@hotmail.com', NULL, NULL),
(67, '', 'Manuel de Jesús Soriano Canizales ', '', 0, '0000-00-00', 'msorianoc22@gmail.com', NULL, NULL),
(68, '', 'Claudia García', '', 0, '0000-00-00', 'claugava@hotmail.com', NULL, NULL),
(69, '', 'Esther Contreras Chavez ', '', 0, '0000-00-00', 'secretariaejecutiva.zac.cdhez@gmail.com', NULL, NULL),
(70, '', 'Maria Evelyn Casanova Diosdado ', '', 0, '0000-00-00', 'presidencia.zac.cdhez@gmail.com', NULL, NULL),
(71, '', 'Santiago García Montes', '', 0, '0000-00-00', 'sg294060@gmail.com', NULL, NULL),
(72, '', 'Natalia Diaz Salas', '', 0, '0000-00-00', 'arrobanatmx@gmail.com', NULL, NULL),
(73, '', 'Ma. De Jesús Collazo de la O.', '', 0, '0000-00-00', 'ycollazo96@gmail.com', NULL, NULL),
(74, '', 'Rafael Ramírez González ', '', 0, '0000-00-00', 'ycollazo96@gmail.com', NULL, NULL),
(75, '', 'Julio César Daniel Aguilar Diosdado ', '', 0, '0000-00-00', 'danielaguilardiosdado@gmail.com', NULL, NULL),
(76, '', 'Sherlyn América García Alvarado ', '', 0, '0000-00-00', 'garciasherlyn11@gmail.com', NULL, NULL),
(77, '', 'Rembrandt Hugo Bosco Duran', '', 0, '0000-00-00', 'remhug23@gmail.com', NULL, NULL),
(78, '', 'Jesús Francisco Villaseñor Correa', '', 0, '0000-00-00', 'villajesusfrancisco@gmail.com', NULL, NULL),
(79, '', 'Jorge Alejandro Raudales Castañeda ', '', 0, '0000-00-00', 'Jorgeameno19@gmail.com', NULL, NULL),
(80, '', 'Karla Guadalupe Torres García ', '', 0, '0000-00-00', 'kt1544019@gmail.com', NULL, NULL),
(81, '', 'Perla Yanet Rosales Medina', '', 0, '0000-00-00', 'perla.rosales@fisica.uaz.edu.mx', NULL, NULL),
(82, '', 'Miguel Angel Rodarte Lopez', '', 0, '0000-00-00', 'miguel.lopezml.ml28@gmail.com', NULL, NULL),
(83, '', 'Maximiliano Arturo Ochoa Carranza', '', 0, '0000-00-00', 'maxocca97@gmail.com', NULL, NULL),
(84, '', 'Lic SUSAN CABRAL BUJDUD', '', 0, '0000-00-00', 'presidencia@amanczac.org', NULL, NULL),
(85, '', 'ANA CECILIA MEDRANO RUIZ', '', 0, '0000-00-00', 'direccion@amanczac.org', NULL, NULL),
(86, '', 'Chávez Castrellón Dana Elizabeth ', '', 0, '0000-00-00', 'elizabeth.chavez.cas@gmail.com', NULL, NULL),
(87, '', 'Lizbeth Martínez Méndez ', '', 0, '0000-00-00', 'martinezmendezl06@gmail.com ', NULL, NULL),
(88, '', 'Ángela Luévanos Flores ', '', 0, '0000-00-00', 'luevanosfloresela26@gmail.com ', NULL, NULL),
(89, '', 'Alma Lorena Barajas Raygoza', '', 0, '0000-00-00', 'almalorenarbl@gmail.com', NULL, NULL),
(90, '', 'Kathia Alexander ', '', 0, '0000-00-00', 'kathia.alexander11@gmail.com', NULL, NULL),
(91, '', 'Karla Itzel Cepeda García ', '', 0, '0000-00-00', 'karlacega97@gmail.con', NULL, NULL),
(92, '', 'Mariza Fernanda DELGADO ', '', 0, '0000-00-00', 'fernanda.cervantesd@gmail.com', NULL, NULL),
(93, '', 'Zayra Daniela Esparza Contreras ', '', 0, '0000-00-00', 'soulalondre@gmail.com', NULL, NULL),
(94, '', 'MA GLORIA CONTRERAS REYNA', '', 0, '0000-00-00', 'soulalondre@gmail.com', NULL, NULL),
(95, '', 'MARIA FERNANDA DELGADO ARROYO', '', 0, '0000-00-00', 'maryfer_da@hotmail.com', NULL, NULL),
(96, '', 'Ma del Refugio Arroyo Alvarez', '', 0, '0000-00-00', 'maryfer_da@hotmail.com', NULL, NULL),
(97, '', 'María José Contreras Perez ', '', 0, '0000-00-00', 'mcontrerasperez00@gmail.com ', NULL, NULL),
(98, '', 'Fernando Antonio Delgado Hernandez', '', 0, '0000-00-00', 'maryfer_da@hotmail.com', NULL, NULL),
(99, '', 'Alejandro Delgado Arroyo', '', 0, '0000-00-00', 'maryfer_da@hotmail.com', NULL, NULL),
(100, '', 'Ixamail Fraire ', '', 0, '0000-00-00', 'ixamail13@gmail.com', NULL, NULL),
(101, '', 'Frida Barrios', '', 0, '0000-00-00', 'fridamariabarrios@gmail.com', NULL, NULL),
(103, '', 'Montserrat Ortiz Almaraz ', '', 0, '0000-00-00', 'mortizalmaraz06@gmail.com', NULL, NULL),
(105, '', 'Mariana Gissele Cabral Cardona ', '', 0, '0000-00-00', 'marianacabralcardona@gmail.com', NULL, NULL),
(106, '', 'Angeles Calderón García ', '', 0, '0000-00-00', 'angiecalderongarcia17@gmail.com', NULL, NULL),
(107, '', 'Cynthia Lissete Rodríguez Moreira', '', 0, '0000-00-00', 'cynthiarodriguezmoreira@hotmail.com', NULL, NULL),
(108, '', 'Ximena Janeth Abaroa Flores ', '', 0, '0000-00-00', 'ximena2_af@hotmail.con', NULL, NULL),
(109, '', 'Mónica Andrea López Segovia', '', 0, '0000-00-00', 'monicasegovia98@gmail.com', NULL, NULL),
(110, '', 'Gabriela Reyes Díaz ', '', 0, '0000-00-00', 'Crimigabyreyes@gmail.com', NULL, NULL),
(111, '', 'Vanessa Mendoza Salazar', '', 0, '0000-00-00', 'vanne.grupomr@gmail.com', NULL, NULL),
(112, '', 'Victor Hugo Razo de Avila', '', 0, '0000-00-00', 'mr.contasesor@gmail.com', NULL, NULL),
(113, '', 'Vanessa López ', '', 0, '0000-00-00', 'Vanessamaytelopezrodriguez@gmail.com', NULL, NULL),
(114, '', 'Maria Guadalupe Salazar Huitrado', '', 0, '0000-00-00', 'dmms839201@gmail.com', NULL, NULL),
(115, '', 'Ana Paula Román ', '', 0, '0000-00-00', 'valdez.roman.pau@gmail.com ', NULL, NULL),
(116, '', 'Jordy Nava ', '', 0, '0000-00-00', 'roman.anapaula@hotmail.com ', NULL, NULL),
(117, '', 'Morelia Ivette Herrera Raygoza ', '', 0, '0000-00-00', 'pasionteatralzac@hotmail.com', NULL, NULL),
(118, '', 'Sarahid Lopez ', '', 0, '0000-00-00', 'patricia.sarahidlopez@gmail.com', NULL, NULL),
(120, '', 'Cecilia Gonzalez ', '', 0, '0000-00-00', 'patricia.sarahidlopez@gmail.com', NULL, NULL),
(121, '', 'Adriana Gallegos Padierna', '', 0, '0000-00-00', 'galpadadriana@gmail.com', NULL, NULL),
(122, '', 'Aymee Ileana Ortega Guerrero', '', 0, '0000-00-00', 'aymeeileana@gmail.com', NULL, NULL),
(123, '', 'Gustavo Iván García Hernández ', '', 0, '0000-00-00', 'ivan_garciah@outlook.es', NULL, NULL),
(124, '', 'Ma. de Jesus Diaz Magdaleno ', '', 0, '0000-00-00', 'talleres.radio2018@gmail.com', NULL, NULL),
(125, '', 'Sandra Berenice Villagrana Leaños', '', 0, '0000-00-00', 'berenicevillagrana1@gmail.com', NULL, NULL),
(126, '', 'Juan Luis Cervantes Diaz', '', 0, '0000-00-00', 'jlcervantes662@gmail.com', NULL, NULL),
(127, '', 'MARIA TERESA SALAS MARTÍNEZ', '', 0, '0000-00-00', 'samt170@hotmail.com', NULL, NULL),
(128, '', 'ROGELIO DÍAZ SALAS', '', 0, '0000-00-00', 'entronance@hotmail.com', NULL, NULL),
(129, '', 'ADRIANA DÍAZ SALAS', '', 0, '0000-00-00', 'adrianadisa_07@hotmail.com', NULL, NULL),
(130, '', 'Edgar ornelas diaz ', '', 0, '0000-00-00', 'edgar_ornelasdiaz@hotmail.com', NULL, NULL),
(131, '', 'JUAN ROGELIO DÍAZ ROMERO', '', 0, '0000-00-00', 'nataliadzs@hotmail.com', NULL, NULL),
(132, '', 'Esteban Alvarado ', '', 0, '0000-00-00', 'alvaradolopezesteban@gmail.com ', NULL, NULL),
(134, '', 'Martha Cecilia Macías Contreras ', '', 0, '0000-00-00', 'mmacias@elpilar.mx', NULL, NULL),
(135, '', 'Alondra Guadalupe Castorena Gamboa', '', 0, '0000-00-00', 'alondragamboa24@gmail.com', NULL, NULL),
(136, '', 'Rodolfo Márquez López ', '', 0, '0000-00-00', 'rodolfo.marquez04@gmail.com', NULL, NULL),
(137, '', 'GUILLERMO ABRAHAM RAMIREZ ARIAS', '', 0, '0000-00-00', 'guillermo.ram.arias@gmail.com', NULL, NULL),
(138, '', 'Litzy Andrea Tiscareño García ', '', 0, '0000-00-00', 'Landreatg5@gmail.com', NULL, NULL),
(139, '', 'Blanca Elena de la Rosa ', '', 0, '0000-00-00', 'Elenaros7671@gmail.com', NULL, NULL),
(140, '', 'LOUISIANA GRISELL JIMENEZ PEREZ', '', 0, '0000-00-00', 'sh_grisell@hotmail.com', NULL, NULL),
(141, '', 'Hannia Gabriela Gamboa Guerrero', '', 0, '0000-00-00', 'hanniagamboa07@gmail.com ', NULL, NULL),
(142, '', 'Emiliano Romo ', '', 0, '0000-00-00', 'romoveynajoseemiliano@gmail.com', NULL, NULL),
(143, '', 'Guillermo Alonso de la Rosa Soto ', '', 0, '0000-00-00', 'memosoto12uaz@gmail.com ', NULL, NULL),
(144, '', 'Antonia Velázquez león ', '', 0, '0000-00-00', 'antogvl.10@gmail.com', NULL, NULL),
(145, '', 'Marelylara@gmail.com', '', 0, '0000-00-00', 'marelylara@gmail.com', NULL, NULL),
(146, '', 'Sara Cecilia Castañeda Macías ', '', 0, '0000-00-00', '35161149@uaz.edu.mx', NULL, NULL),
(147, '', 'Madelen de la Torre ', '', 0, '0000-00-00', 'gonzalez_made@hotmail.com ', NULL, NULL),
(148, '', 'DANIELA HERNANDEZ RUIZ', '', 0, '0000-00-00', 'daniheruiz17@gmail.com', NULL, NULL),
(149, '', 'Paulina Correa', '', 0, '0000-00-00', 'pcorreavelasco@gmail.com', NULL, NULL),
(150, '', 'Mariana Serrano', '', 0, '0000-00-00', 'marypaosp02@gmail.com', NULL, NULL),
(151, '', 'Libertad Aguilar', '', 0, '0000-00-00', 'liberi.aguck@gmail.com', NULL, NULL),
(152, '', 'Liz Karina Ibarra Ruiz ', '', 0, '0000-00-00', 'Lizka1012@gmail.com', NULL, NULL),
(153, '', 'Tania Rocha ', '', 0, '0000-00-00', 'taniarochaluna@outlook.com', NULL, NULL),
(154, '', 'Laiza Rocha', '', 0, '0000-00-00', 'laizarochaluna@gmail.com', NULL, NULL),
(155, '', 'Javier Alexis Hernández Maldonado ', '', 0, '0000-00-00', 'Arqzv7@hotmail.com ', NULL, NULL),
(156, '', 'Erika Alejandra Trejo Ortiz ', '', 0, '0000-00-00', 'erikaalejandratrejoortiz33@gmail.com', NULL, NULL),
(157, '', 'Maria Fernanda Trejo Ortiz', '', 0, '0000-00-00', 'erikaalejandratrejoortiz9@gmail.com', NULL, NULL),
(158, '', 'María Concepcion corrales de la torre ', '', 0, '0000-00-00', 'mct918777@gmail.com', NULL, NULL),
(159, '', 'KARINA GONZALEZ MUÑOZ', '', 0, '0000-00-00', 'kgm160599@gmail.com', NULL, NULL),
(160, '', 'Pedro Esparza ', '', 0, '0000-00-00', 'Paec19@gmail.com ', NULL, NULL),
(161, '', 'Elena María Durán Real', '', 0, '0000-00-00', 'Helenamdr@hotmail.com', NULL, NULL),
(162, '', 'Marisol Muñoz Murillo ', '', 0, '0000-00-00', 'Marysolmunoz1998@gmail.com', NULL, NULL),
(163, '', 'Fátima Elena Gaytán Díaz ', '', 0, '0000-00-00', 'fagaytand@gmail.com', NULL, NULL),
(164, '', 'Javier Saldivar ', '', 0, '0000-00-00', 'javiersaldivar28@gmail.com', NULL, NULL),
(165, '', 'Juan Daniel García Martínez ', '', 0, '0000-00-00', 'dany_ar21@hotmail.com', NULL, NULL),
(166, '', 'María Fernanda Navarro', '', 0, '0000-00-00', 'maferna711@gmail.com', NULL, NULL),
(167, '', 'Marco Antonio saucedo reyes', '', 0, '0000-00-00', 'Marco.as13@outlook.com', NULL, NULL),
(168, '', 'Yaqui Mireya Trejo Hernández ', '', 0, '0000-00-00', 'mireyatreher1820@gmail.com ', NULL, NULL),
(169, '', 'Melissa Alejandra Saldivar Acosta', '', 0, '0000-00-00', 'Mirimelyacosta@hotmail.com', NULL, NULL),
(170, '', 'Nayeli Carolina Paredes Valdovinos ', '', 0, '0000-00-00', 'carolinavaldovinos2701@gmail.com', NULL, NULL),
(171, '', 'Jessica Caraveo', '', 0, '0000-00-00', 'jesscaraveo@gmail.com', NULL, NULL),
(172, '', 'Arturo Fernando Morales Lira', '', 0, '0000-00-00', 'arturofernandomorales104@gmail.com', NULL, NULL),
(173, '', 'Andrés Rodríguez', '', 0, '0000-00-00', 'ro.zarazu8@gmail.com', NULL, NULL),
(174, '', 'Eduardo Castañeda alaniz', '', 0, '0000-00-00', 'eduardocasta7212@gmail.com', NULL, NULL),
(175, '', 'Claudia angelika García ortega ', '', 0, '0000-00-00', 'yayiis014@hotmail.com ', NULL, NULL),
(176, '', 'Brenda rivera nuñez', '', 0, '0000-00-00', 'andreagrr2011@gmail.com', NULL, NULL),
(177, '', 'Brenda rivera nuñez', '', 0, '0000-00-00', 'b_riveranu@hotmail.com', NULL, NULL),
(178, '', 'Juan Carlos Gonzalez López ', '', 0, '0000-00-00', 'juangonza1625@gmail.com', NULL, NULL),
(179, '', 'Diana Isis Del Hoyo Cortés', '', 0, '0000-00-00', '8dianaisis8@gmail.com', NULL, NULL),
(181, '', 'Elizabeth Alvarez Rodriguez ', '', 0, '0000-00-00', 'elyalvarez134@gmail.com', NULL, NULL),
(183, '', 'Miriam', '', 0, '0000-00-00', 'elizabetacosta0809@gmail.com', NULL, NULL),
(184, '', 'Sarahi Jiménez', '', 0, '0000-00-00', 'sarahi_jimenez30@hotmail.com', NULL, NULL),
(185, '', 'Norma de Luna', '', 0, '0000-00-00', 'lic.normadeluna@gmail.com', NULL, NULL),
(186, '', 'Andrea Calzada Morales ', '', 0, '0000-00-00', 'andrea.calzada@educacionparacompartir.org', NULL, NULL),
(187, '', 'Paola Lizeth Ruelas Enciso ', '', 0, '0000-00-00', 'paola.ruelas.enciso@gmail.com', NULL, NULL),
(188, '', 'Paloma Monserrat López Amaya ', '', 0, '0000-00-00', 'palomalopezamaya90@gmail.com', NULL, NULL),
(189, '', 'Aldo leonel González Núñez ', '', 0, '0000-00-00', 'aldo_gonzalez@hotmail.com ', NULL, NULL),
(190, '', 'Grecia Yissel Castrellón Villegas ', '', 0, '0000-00-00', 'greciacastrellon8@gmail.com', NULL, NULL),
(191, '', 'KEYLA ALEJANDRA RODRÍGUEZ CORTEZ ', '', 0, '0000-00-00', 'Alejandrardz170799@gmail.com', NULL, NULL),
(192, '', 'Lucia ', '', 0, '0000-00-00', 'lucia_cl@hotmail.com ', NULL, NULL),
(195, '', 'Cristian Elias Jimenez ', '', 0, '0000-00-00', 'cristianeliasjimenez@gmail.com ', NULL, NULL),
(196, '', 'Carolina Castro ', '', 0, '0000-00-00', 'carocg58.ccg@gmail.com', NULL, NULL),
(198, '', 'CARLOS GABRIEL LOPEZ ARANDA RAMIREZ', '', 0, '0000-00-00', 'asistenterectoria@uvc.edu.mx', NULL, NULL),
(199, '', 'Hector Palafox Sanchez ', '', 0, '0000-00-00', 'hpalafox97@gmail.com ', NULL, NULL),
(200, '', 'DANIELA DE LA CRUZ ', '', 0, '0000-00-00', 'Dannydlcdlc@gmail.com', NULL, NULL),
(203, '', 'Gloria Guadalupe  Serrano Perez ', '', 0, '0000-00-00', 'gloria.serrano97@hotmail.com', NULL, NULL),
(204, '', 'Fátima SofÍa RodrÍguez del Río ', '', 0, '0000-00-00', 'sofiaroddrio@gmail.com', NULL, NULL),
(205, '', 'LAURA ROCIO MORALES ARCEO ', '', 0, '0000-00-00', 'morales19laura@gmail.com', NULL, NULL),
(206, '', 'Allyson', '', 0, '0000-00-00', 'floresallyson1@gmail.com', NULL, NULL),
(207, '', 'Andre Alejandra Robles Martínez', '', 0, '0000-00-00', 'andreroblesmtz@gmail.com', NULL, NULL),
(208, '', 'MIGUEL ALEJANDRO Alejandro FÉLIX DE LA TORRE', '', 0, '0000-00-00', 'miguelfelixdlt@gmail.com', NULL, NULL),
(209, '', 'Diana Michell Miranda Castro ', '', 0, '0000-00-00', 'miranda.artem369@gmail.com', NULL, NULL),
(210, '', 'Davidka Sandoval Díaz', '', 0, '0000-00-00', 'davidkasandoval@gmail.com', NULL, NULL),
(211, '', 'Karla Paulina Hernández Medina ', '', 0, '0000-00-00', 'paulinamedina.18.hernandez@gmail.com', NULL, NULL),
(212, '', 'Aline Mariana Guzmán Martínez', '', 0, '0000-00-00', 'alinegm99@gmail.com', NULL, NULL),
(213, '', 'Luis Ángel Guzmán Martínez', '', 0, '0000-00-00', 'lu37.vg@gmail.com', NULL, NULL),
(216, '', 'Janeth Muñoz garcia ', '', 0, '0000-00-00', 'alexajanethgarciamunoz@gmail.com', NULL, NULL),
(217, '', 'Diana Andrea Paz Alvarez', '', 0, '0000-00-00', 'andreaalvarz97@gmail.com', NULL, NULL),
(218, '', 'Fernanda Fuenzalida', '', 0, '0000-00-00', 'ferfuenzalida@hotmail.com', NULL, NULL),
(219, '', 'Arely Rizo', '', 0, '0000-00-00', 'arely_rizo@outlook.con', NULL, NULL),
(220, '', 'Ramsés Ramírez Luna ', '', 0, '0000-00-00', 'ramirez.luna.ramses@gmail.com', NULL, NULL),
(221, '', 'Fernanda López ', '', 0, '0000-00-00', 'Fer.and.yasu.friends@gmail.com', NULL, NULL),
(222, '', 'Luisa Fernanda ', '', 0, '0000-00-00', 'sifuentesreyesluisafernanda@gmail.con ', NULL, NULL),
(223, '', 'Tania Macías ', '', 0, '0000-00-00', 'tanializ.maciashdz@gmail.com', NULL, NULL),
(225, '', 'Valeria Palafox Pasillas', '', 0, '0000-00-00', 'Valeriia19135@gmail.com ', NULL, NULL),
(226, '', 'Monserratt García Hernández ', '', 0, '0000-00-00', 'garher.montse@gmail.com', NULL, NULL),
(227, '', 'Danna Nallely Gamboa Martínez ', '', 0, '0000-00-00', 'nayemartz10@gmail.com', NULL, NULL),
(228, '', 'Yessica Bañuelos ', '', 0, '0000-00-00', 'yessica.br@hotmail.com', NULL, NULL),
(229, '', 'Greshya Jocelyn González Romo ', '', 0, '0000-00-00', 'greshyaromo06@gmail.com', NULL, NULL),
(230, '', 'Rogelia Zambrano Rodríguez', '', 0, '0000-00-00', 'rodriguez.rogelia23@gmail.com', NULL, NULL),
(231, '', 'Elva Cristina Gonzalez Marquez', '', 0, '0000-00-00', 'elvacgm@gmail.com', NULL, NULL),
(233, '', 'Karen Victoria González Llamas ', '', 0, '0000-00-00', 'karen107gonzalez@gmail.com', NULL, NULL),
(234, '', 'Julia Adriana ', '', 0, '0000-00-00', 'julia.duranr@uap.uaz.edu.mx', NULL, NULL),
(235, '', 'Elio Arnoldo Villa García ', '', 0, '0000-00-00', 'elioavillag@hotmail.com', NULL, NULL),
(236, '', 'Jorge Alberto Cervantes Diaz ', '', 0, '0000-00-00', 'cervantesdiazjorgealberto@gmail.com', NULL, NULL),
(237, '', 'Salvador Padilla Anguiano ', '', 0, '0000-00-00', 'salva25j98@hotmail.com', NULL, NULL),
(238, '', 'Vanessa Romo Gallardo ', '', 0, '0000-00-00', 'vanneromo13@gmail.com', NULL, NULL),
(239, '', 'Mónica Gabriela Buenrostro Gándara ', '', 0, '0000-00-00', 'renezac@hotmail.com ', NULL, NULL),
(240, '', 'René Gallegos Jiménez ', '', 0, '0000-00-00', 'renezac@hotmail.com ', NULL, NULL),
(241, '', 'Aaron Martínez Guardado ', '', 0, '0000-00-00', 'aaron26mtzgua1@gmail.com', NULL, NULL),
(242, '', 'BRENDA ANAHI OROZCO CONTRERAS', '', 0, '0000-00-00', 'banahi_12_@hotmail.com', NULL, NULL),
(243, '', 'ESGAR MANUEL ROSALES SANTILLAN', '', 0, '0000-00-00', 'esgar_manu28@hotmail.com', NULL, NULL),
(245, '', 'Carolina ', '', 0, '0000-00-00', 'Carolinacuh02@gmail.com', NULL, NULL),
(246, '', 'Saray Arteaga Escatel ', '', 0, '0000-00-00', 'saray.ae103@gmail.com', NULL, NULL),
(247, '', 'Jose Juan Avila Medina', '', 0, '0000-00-00', 'joseavilamedina.ja@gmail.com', NULL, NULL),
(248, '', 'Ma Rosario López Monrreal', '', 0, '0000-00-00', 'marlom.zacatecas@gmail.com', NULL, NULL),
(249, '', 'Karina Cecilia De León Ortiz', '', 0, '0000-00-00', 'consultoriadeimagenrrpp@gmail.com', NULL, NULL),
(250, '', 'Karen Monserrath Esparza Castañeda', '', 0, '0000-00-00', 'karennesparza@gmail.com', NULL, NULL),
(251, '', 'DIANA VALDEZ HERNANDEZ', '', 0, '0000-00-00', 'valdez.hddz.diana@gmail.com', NULL, NULL),
(253, '', 'José Emmanuel Dávila Flores', '', 0, '0000-00-00', 'emmanueldf031298@gmail.com', NULL, NULL),
(254, '', 'Sofia Infante ', '', 0, '0000-00-00', 'Sofyinfante7@gmail.com ', NULL, NULL),
(255, '', 'Samuel Soriano', '', 0, '0000-00-00', 'samitosoriano@gmail.com', NULL, NULL),
(256, '', 'Mauricio Berumen', '', 0, '0000-00-00', 'mauber_17@hotmail.com', NULL, NULL),
(257, '', 'Nancy Acuña', '', 0, '0000-00-00', 'mauber_17@hotmail.com', NULL, NULL),
(258, '', 'Arely Jocelyn Robles Cervantes ', '', 0, '0000-00-00', 'jocelyn2robles@gmail.com', NULL, NULL),
(259, '', 'María Fernanda Guerrero Ramírez ', '', 0, '0000-00-00', 'guerreroramirezmariafernada8@gmail. com', NULL, NULL),
(260, '', 'Luisa Lara', '', 0, '0000-00-00', 'luisa.lmlm55@gmail.com', NULL, NULL),
(261, '', 'GONZALO FRANCO GARDUÑO', '', 0, '0000-00-00', 'rectoria@utzac.edu.mx', NULL, NULL),
(263, '', 'Felipe Omar Méndez Calderón ', '', 0, '0000-00-00', 'simbolo-94@hotmail.com', NULL, NULL),
(264, '', 'Alma Victoria Serrano Pérez ', '', 0, '0000-00-00', 'almaserrano1927@gmail.com ', NULL, NULL),
(265, '', 'Lizbeth Robles', '', 0, '0000-00-00', 'lizrobles575@gmail.com', NULL, NULL),
(266, '', 'Isaías Villalpando Dávila ', '', 0, '0000-00-00', 'isaiasvillalpando.d@gmail.com ', NULL, NULL),
(267, '', 'María Dolores Pérez Hernandez ', '', 0, '0000-00-00', 'loliscaz@hotmail.com ', NULL, NULL),
(269, '', 'Daniela Lisette Santillán Zarzoza ', '', 0, '0000-00-00', 'lisette20.zar@gmail.com', NULL, NULL),
(270, '', 'Alejandra Lizbeth Santillán Zarzoza ', '', 0, '0000-00-00', 'Alezarzoza1@gmail.com', NULL, NULL),
(271, '', 'María Concepción Zarzoza Morán', '', 0, '0000-00-00', 'Cony_zar@hotmail.com', NULL, NULL),
(272, '', 'Sergio Antonio Tarango Aradillas', '', 0, '0000-00-00', 'sergio.tarango@hotmail.com', NULL, NULL),
(273, '', 'Alma Delia Pérez Villagrana', '', 0, '0000-00-00', 'almis13@hotmail.com', NULL, NULL),
(274, '', 'Grecia Yucel Cuevas Sánchez ', '', 0, '0000-00-00', 'yucelcuevas@gmail.com', NULL, NULL),
(275, '', 'Daniela Aguilar', '', 0, '0000-00-00', 'danysititita@gmail.com', NULL, NULL),
(276, '', 'Belém Contreras ', '', 0, '0000-00-00', 'operacion@elpilar.mx', NULL, NULL),
(277, '', 'Bertha Daniluz Coronado Morales', '', 0, '0000-00-00', 'dani_luz_7@hotmail.com', NULL, NULL),
(278, '', 'José Abel Medina Suarez', '', 0, '0000-00-00', 'pabel16@live.com.mx', NULL, NULL),
(279, '', 'Andrea Fernanda Alonso Aguilar', '', 0, '0000-00-00', 'jm978760@gmail.com', NULL, NULL),
(280, '', 'ANA MARIA HERRERA MEDRANO', '', 0, '0000-00-00', 'anaherrera@uaz.edu.mx', NULL, NULL),
(281, '', 'Pedro Bermúdez ', '', 0, '0000-00-00', 'Pedroa.bermudezz@gmail.com ', NULL, NULL),
(282, '', 'Daniela ', '', 0, '0000-00-00', 'elva_daniela@hotmail.com ', NULL, NULL),
(283, '', 'Lucía Mata', '', 0, '0000-00-00', 'lucedrdn@gmail.com', NULL, NULL),
(284, '', 'José Luis ', '', 0, '0000-00-00', 'jherrera.vc@gmail.com', NULL, NULL),
(285, '', 'Bruno González Sánchez', '', 0, '0000-00-00', 'brunomxbruno@gmail.com', NULL, NULL),
(286, '', 'Bruno González Sánchez', '', 0, '0000-00-00', 'brunomxbruno@gmail.com', NULL, NULL),
(287, '', 'Alondra Guadalupe García Baltazar ', '', 0, '0000-00-00', 'danzalo_ballet@hotmail.com', NULL, NULL),
(288, '', 'Zaid Alfonso López Veyna', '', 0, '0000-00-00', 'zaid.veyna@gmail.com', NULL, NULL),
(289, '', 'Joane Jessica Delgado Saucedo ', '', 0, '0000-00-00', 'joane.delgado@gmail.com', NULL, NULL),
(290, '', 'Daniel Alba Lopez ', '', 0, '0000-00-00', 'joane.delgado@gmail.com', NULL, 1),
(291, '', 'Calos octavio macias mauricio', '', 0, '0000-00-00', 'Maciasoctavio21@gmail.com', NULL, NULL),
(292, '', 'Osiel Jesus Pérez Galvez ', '', 0, '0000-00-00', 'osielp341@gmail.com', NULL, NULL),
(294, '', 'Susana michelle Ruiz de Esparza salinas ', '', 0, '0000-00-00', 'Smichelleruize@gmail.com ', NULL, NULL),
(295, '', 'María José Noyola López ', '', 0, '0000-00-00', 'Majonoyola2121@gmail.com', NULL, NULL),
(296, '', 'María Alejandra Noyola López ', '', 0, '0000-00-00', 'Majonoyola2121@gmail.com', NULL, NULL),
(297, '', 'Karol Michelle Alejandra Sánchez Longoria', '', 0, '0000-00-00', 'ing.sanchez.34154582@uaz.edu.mx', NULL, NULL),
(298, '', 'Flavio César Esparza Guajardo ', '', 0, '0000-00-00', 'flavioesparza10@gmail.com', NULL, NULL),
(299, '', 'América Leticia Frías Alvarado', '', 0, '0000-00-00', 'afrias@olimpiadasespeciales.gob.mx', NULL, NULL),
(301, '', 'Edith amairani morquecho acosta', '', 0, '0000-00-00', 'amairanibeautiful@hotmail.com', NULL, NULL),
(303, '', 'VERONICA MORALES MORALES', '', 0, '0000-00-00', 'bonita-2810@hotmail.com', NULL, NULL),
(304, '', 'GRISELDA CASAS ROSALES', '', 0, '0000-00-00', 'grisselda.gcr@gmail.com', NULL, NULL),
(306, '', 'Bitia Ureño Aguilera ', '', 0, '0000-00-00', 'ing.agronoma.bitiaureno@gmail.com', NULL, NULL),
(307, '', 'ARTURO GONZALEZ SALAS', '', 0, '0000-00-00', 'arturogonzalezsalas@hotmail.com', NULL, NULL),
(308, '', 'MARIA ELENA GUZMAN BADILLO', '', 0, '0000-00-00', 'me9698gu@hotmail.com', NULL, NULL),
(309, '', 'Jeannete Alejandra Rodríguez Iñiguez', '', 0, '0000-00-00', 'jeannetealejandrarodriguez@gmail.com', NULL, NULL),
(310, '', 'Yoltyc Cristina Diaz Inguanzo', '', 0, '0000-00-00', 'r.yoltyc@gmail.com', NULL, NULL),
(311, '', 'PAULA VICTORIA RODRIGUEZ QUEZADA', '', 0, '0000-00-00', 'viroque.paula@gmail.com', NULL, NULL),
(312, '', 'Jorge Eduardo Martínez Robles', '', 0, '0000-00-00', 'jorgeeduardo19482@gmail.com', NULL, NULL),
(313, '', 'Isela Concepción Sánchez Carrera', '', 0, '0000-00-00', 'isesanchez1012@gmail.con', NULL, NULL),
(314, '', 'David Uriel Rodríguez Esquivel ', '', 0, '0000-00-00', 'daviduriel.rodes@hotmail.com', NULL, NULL),
(315, '', 'Marcela Jacquelin Chairez Oliva ', '', 0, '0000-00-00', 'Marcelajacquelinchairez@gmail.com', NULL, NULL),
(316, '', 'Luz María Robles Sifuentes', '', 0, '0000-00-00', 'jorgeeduardo19482@gmail.com', NULL, NULL),
(317, '', 'Osvaldo Chávez Juarez ', '', 0, '0000-00-00', 'monicacris82@hotmail.com', NULL, NULL),
(318, '', 'Mario Martínez Domínguez', '', 0, '0000-00-00', 'jorgeeduardo19482@gmail.com', NULL, NULL),
(319, '', 'Maria del Carmen Castañon Garcia', '', 0, '0000-00-00', 'carmelita.10cancer@hotmail.com', NULL, NULL),
(320, '', 'Jesús Ángel Alba Sanchez ', '', 0, '0000-00-00', 'albaflor5402@gmail.com', NULL, NULL),
(322, '', 'Alma Natalia Díaz Guerrero ', '', 0, '0000-00-00', 'diazguerreronatalia99@gmail.com ', NULL, NULL),
(324, '', 'Ma.del Rosario de Loera Cervantes ', '', 0, '0000-00-00', 'charito_2001@yahoo.com', NULL, NULL),
(325, '', 'Cristina Fabela Enríquez ', '', 0, '0000-00-00', 'fabelacristina17@gmail.com', NULL, NULL),
(326, '', 'Miguel Ángel Díaz', '', 0, '0000-00-00', 'angelboyd@hotmail.com', NULL, NULL),
(327, '', 'Yolanda Rojas ', '', 0, '0000-00-00', 'Dlau.970@gmail.com ', NULL, NULL),
(329, '', 'Ana Buenrostro', '', 0, '0000-00-00', '', NULL, NULL),
(330, '', 'José Antonio Contreras Rojas ', '', 0, '0000-00-00', 'Dlau.970@gmail.com ', NULL, NULL),
(331, '', 'Diana Laura Contreras Rojas ', '', 0, '0000-00-00', 'Dlau.970@gmail.com ', NULL, NULL),
(332, '', 'Carlos Uriel González Pérez', '', 0, '0000-00-00', 'carlosuriel@unizacatecas.edu.mx', NULL, NULL),
(333, '', 'Elia Sarahí Moreno Colunga ', '', 0, '0000-00-00', 'elia242503@gmail.com ', NULL, NULL),
(335, '', 'Ailín Hernández Murillo', '', 0, '0000-00-00', 'ailinmurillohdez@gmail.com', NULL, NULL),
(337, '', 'Jessica Ceballos Rosales', '', 0, '0000-00-00', 'edith_96baez@hotmail.com', NULL, NULL),
(338, '', 'Dylan Buchowski Báez', '', 0, '0000-00-00', 'edith_96baez@hotmail.com', NULL, NULL),
(339, '', 'Alejandro Mauricio Díaz Rivera ', '', 0, '0000-00-00', 'alesdiazi@gmail.com', NULL, NULL),
(340, '', 'Jesús Abraham Martínez Díaz ', '', 0, '0000-00-00', 'dcabrahammd@outlook.es', NULL, NULL),
(342, '', 'Daisy Lorena Díaz Avila', '', 0, '0000-00-00', 'daisydz27@gmail.com', NULL, NULL),
(343, '', 'Paloma Muñoz García', '', 0, '0000-00-00', 'palomamns2@gmail.com', NULL, NULL),
(344, '', 'Fernanda Pargas Robles ', '', 0, '0000-00-00', 'fernandaprg5@gmail.com', NULL, NULL),
(345, '', 'José Miguel Bañuelos Nava ', '', 0, '0000-00-00', 'mipyolofer@gmail.com', NULL, NULL),
(346, '', 'María Griselda Molina Contreras ', '', 0, '0000-00-00', 'griselmolc@hotmail.com', NULL, NULL),
(347, '', 'Ivan Medrano', '', 0, '0000-00-00', 'anhyarucobo@gmail.com', NULL, NULL),
(348, '', 'Aixa Alvarado', '', 0, '0000-00-00', 'anhyarucobo@gmail.com', NULL, NULL),
(349, '', 'Angelica Alvarado', '', 0, '0000-00-00', 'anhyarucobo@gmail.com', NULL, NULL),
(350, '', 'Noemí Buenrostro ', '', 0, '0000-00-00', 'noemibg01@hotmail.com', NULL, NULL),
(351, '', 'Paola Solis Valenzuela', '', 0, '0000-00-00', 'paolasv_07@hotmail.com', NULL, NULL),
(352, '', 'Dolores Estephany Troncoso Guzmán ', '', 0, '0000-00-00', 'fanytroncoso@outlook.com', NULL, NULL),
(353, '', 'Ana Alicia Campos Rodríguez ', '', 0, '0000-00-00', 'anaaliciacr71@hotmail.com', NULL, NULL),
(354, '', 'Micaela Salcedo Álvarez', '', 0, '0000-00-00', 'mikaelasaal@gmail.com', NULL, NULL),
(355, '', 'Diana Rosario Benavides Parga', '', 0, '0000-00-00', 'pargarosario199@gmail.com', NULL, NULL),
(356, '', 'Valeria Alejandra Ramírez Morales ', '', 0, '0000-00-00', 'vm242857@gmail.com', NULL, NULL),
(357, '', 'Stephanie varela ', '', 0, '0000-00-00', 'Fani.1992@hotmail.com', NULL, NULL),
(358, '', 'Joseph antonio ', '', 0, '0000-00-00', 'Joseph_vr@outlook.com', NULL, NULL),
(359, '', 'Martha leticia ', '', 0, '0000-00-00', 'Cavm1968@yahoo.com.mx', NULL, NULL),
(360, '', 'Emma Lidia Varela Gallardo', '', 0, '0000-00-00', 'varelita4296@gmail.com', NULL, NULL),
(361, '', 'ELIECER ISAAC PÉREZ MONTELONGO', '', 0, '0000-00-00', 'isaac.perez.mon@gmail.com', NULL, NULL),
(362, '', 'Luz Elena Flores Rodríguez', '', 0, '0000-00-00', 'luzelenaflrdz@gmail.com', NULL, NULL),
(363, '', 'Frida Escareño', '', 0, '0000-00-00', 'julietaescareno11@gmail.com ', NULL, NULL),
(364, '', 'María Fernanda Rosales Hernández ', '', 0, '0000-00-00', 'fernandarosaleshernandez@gmail.com ', NULL, NULL),
(366, '', 'Mariana Meneses Perales ', '', 0, '0000-00-00', 'cramsel_k8@hotmail.com', NULL, NULL),
(367, '', 'Andrés de Jesús Carrillo Castillo ', '', 0, '0000-00-00', 'archerestudio@gmail.com', NULL, NULL),
(368, '', 'Alejandra Rosas', '', 0, '0000-00-00', 'vale.rozaz@hotmail.com', NULL, NULL),
(369, '', 'Sandra Fernandez ', '', 0, '0000-00-00', 'secit63@gmail.com', NULL, NULL),
(371, '', 'Sianya Anahí Arellano Trujillo', '', 0, '0000-00-00', 'zianyabongfor@gmail.com', NULL, NULL),
(372, '', 'Julia Eugenia Robles Martinez ', '', 0, '0000-00-00', 'Lassoldaderas1974@gmail.com ', NULL, NULL),
(373, '', 'Alejandro de Jesús Sandoval Arteaga ', '', 0, '0000-00-00', 'alejandro.sandoval.arteaga@gmail.com ', NULL, NULL),
(375, '', 'María de Jesús Robles Martinez ', '', 0, '0000-00-00', 'marichuyrm 67@gmail.com', NULL, NULL),
(376, '', 'Leonardo Cardona García', '', 0, '0000-00-00', 'leonardo.cr.gr@gmail.com', NULL, NULL),
(377, '', 'FRANCISCA CONTRERAS GUARDADO', '', 0, '0000-00-00', 'banahi_12_@hotmail.com ', NULL, NULL),
(379, '', 'LIZETH ALEJANDRA RAMÍREZ HERRERA ', '', 0, '0000-00-00', 'ale.ramh27@gmail.com', NULL, NULL),
(380, '', 'Miguel Baena', '', 0, '0000-00-00', 'miguelcrv22@hotmail.com', NULL, NULL),
(381, '', 'Marbella Cabral', '', 0, '0000-00-00', 'marbecabral@gmail.com', NULL, NULL),
(382, '', 'Jesús Adair Tonche Mares', '', 0, '0000-00-00', 'adair.rock.2000@gmail.com', NULL, NULL),
(383, '', 'José Antonio Garza Gutiérrez', '', 0, '0000-00-00', 'pepeantonio_garza@hotmail.com', NULL, NULL),
(384, '', 'Gabriela Silva Flores ', '', 0, '0000-00-00', 'flores.silva0494@gmail.com', NULL, NULL),
(385, '', 'Yudith Michel Canizales Trejo ', '', 0, '0000-00-00', 'michelcanizales73@gmail.com', NULL, NULL),
(386, '', 'Consuelo Davila', '', 0, '0000-00-00', 'oceleste990@gmail.com', NULL, NULL),
(389, '', 'Uriel González Sánchez ', '', 0, '0000-00-00', 'uriglezsan@gmail.com', NULL, NULL),
(390, '', 'Marisol Zuñiga Salazar', '', 0, '0000-00-00', 'porlaequidad.zuniga@gmail.com', NULL, NULL),
(391, '', 'Saul Osvaldo Olvera Sanchez', '', 0, '0000-00-00', 'masterdecoylol@gmail.com', NULL, NULL),
(392, '', 'Mayra Rosybel Pinedo Fernández ', '', 0, '0000-00-00', 'mayrapinedo1e@gmail.com', NULL, NULL),
(393, '', 'Guadalupe Santiago Coachi ', '', 0, '0000-00-00', 'sacg18@hotmail.com', NULL, NULL),
(394, '', 'Lina Esmeralda Pérez Loera ', '', 0, '0000-00-00', 'linaesmeraldaperezloeraa@gmail.com', NULL, NULL),
(395, '', 'Nadia Guadalupe Martínez Galván ', '', 0, '0000-00-00', 'galvannadia008@gmail.com', NULL, NULL),
(396, '', 'Fatima Ortiz', '', 0, '0000-00-00', 'oceleste990@gmail.com', NULL, NULL),
(397, '', 'Consuelo Davila ', '', 0, '0000-00-00', 'consuelodavila1974@gmail.com', NULL, NULL),
(398, '', 'Sergio Ortiz', '', 0, '0000-00-00', 'sergio.ob@hotmail.com', NULL, NULL),
(399, '', 'Itzel Stephanie Ortiz Hernández ', '', 0, '0000-00-00', 'mti.stephanieortiz@gmail.com ', NULL, NULL),
(400, '', 'IRMA AZUA MEJIA', '', 0, '0000-00-00', 'azua.irm@gmail.com', NULL, NULL),
(401, '', 'Eduardo Alejandro Aldava Pérez ', '', 0, '0000-00-00', 'aldavaperezalejandro@gmail.com', NULL, NULL),
(402, '', 'MARTHA ALICIA HERRERA CARRILLO', '', 0, '0000-00-00', 'aliz.zclhx@gmail.com', NULL, NULL),
(403, '', 'María del Carmen Moreira Landeros', '', 0, '0000-00-00', 'moreira_azk@hotmail.com', NULL, NULL),
(404, '', 'DIANA SARAHÍ RAMIREZ HERRERA ', '', 0, '0000-00-00', 'aliz.zclhx@gmail.com', NULL, NULL),
(405, '', 'Manuel Alejandro Rosas Torres ', '', 0, '0000-00-00', 'alemardesol@gmail.com', NULL, NULL),
(406, '', 'Perla Rubí Lara Chávez ', '', 0, '0000-00-00', 'perlaagustd@gmail.com ', NULL, NULL),
(407, '', 'Vanessa Guadalupe Martínez Arias ', '', 0, '0000-00-00', 'vanessaarias9010@gmail.com', NULL, NULL),
(408, '', 'Teresa Guadalupe Arias Morales ', '', 0, '0000-00-00', 'arisatreraria@gmail.com', NULL, NULL),
(409, '', 'Omar Alonso Martinez Arias ', '', 0, '0000-00-00', 'oberthoukid@gmail.com', NULL, NULL),
(410, '', 'Diana Laura Hurtado Hernández', '', 0, '0000-00-00', 'dianita023107@gmail.com ', NULL, NULL),
(411, '', 'Neyda Corett Ortiz Hernández ', '', 0, '0000-00-00', 'neydacorett@gmail.com', NULL, NULL),
(412, '', 'MARTHA IMELDA LOPEZ MORALES', '', 0, '0000-00-00', 'marlop1974z@gmail.com', NULL, NULL),
(413, '', 'Ariadna Paola Murillo Luna ', '', 0, '0000-00-00', 'liz.luna.despacho@gmail.com', NULL, NULL),
(414, '', 'Lizeth Alejandra Murillo Luna ', '', 0, '0000-00-00', 'liz.luna.despacho@gmail.com', NULL, NULL),
(418, '', 'luis manuel lopez arellano', '', 0, '0000-00-00', 'loal870219@gmail.com', NULL, NULL),
(419, '', 'Miguel Dario del real Campos ', '', 0, '0000-00-00', 'delrealdario@hotmail.com', NULL, NULL),
(421, '', 'José Luis guijarro hernandez ', '', 0, '0000-00-00', 'pepe.guijarroverde@gmail.com', NULL, NULL),
(422, '', 'Renato Lugo ', '', 0, '0000-00-00', 'renazagga17@gmail.com', NULL, NULL),
(423, '', 'Alvaro Ruiz Arriaga', '', 0, '0000-00-00', 'al.va20@yahoo.com', NULL, NULL),
(424, '', 'Alondra Jennifer Gonzalez Román', '', 0, '0000-00-00', 'alondragonzalez01239@gmail.com', NULL, NULL),
(425, '', 'Aleydis Cervantes Dueñas', '', 0, '0000-00-00', 'sidyela_cd@hotmail.com', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `invitacion`
--
ALTER TABLE `invitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
