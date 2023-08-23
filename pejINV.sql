-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-08-2023 a las 18:23:40
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
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `curp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `invitacion`
--

INSERT INTO `invitacion` (`id`, `nombre`, `curp`, `telefono`, `email`) VALUES
(10, 'Aleydis Cervantes Dueñas', 'CEDA941227MZSRXL02', '', 'sidyela_cd@hotmail.com'),
(11, 'Luis Humberto Cid Buiza ', 'CIBL990217HZSDZS01', '', 'Luishumberto.cid@gmail.com'),
(12, 'Felipe Gallegos Montes', 'Gamf921103hzslnl01', '', 'bajolarbol@gmail.com'),
(13, 'Estefanía del Río Landa', 'RILE960708MZSXNS00', '', 'estefaniadelrl@gmail.com'),
(14, 'HUMBERTO ALEJANDRO', 'MUFH000219HZSRRMB7', '', 'humbertoa.murillo@gmail.com'),
(15, 'Paula Lucia Alvarado Hernández ', 'AAHP940319MZSLRL04', '', 'paulaluciaalvaradohdz@gmail.com'),
(16, 'Alexandra Jiménez Alvarado ', 'JIAA111218MZSMLLA0', '', ''),
(17, 'Natalia Alvarez Maldonado', 'AAMN000327MZSLLTA6', '', 'nataliaalvmal@gmail.com'),
(18, 'Dulce María Mendoza Salazar ', 'MESD010520MZSNLLA5', '', '36173226@uaz.edu.mx'),
(19, 'Gabriela Rivera ', 'RICA950514MZSVRN03', '', 'grajeadelis@gmail.com'),
(20, 'OSCAR AGUILERA MEDRANO', 'AUMO941014HZSGDS09', '', 'oagmed123@gmail.com'),
(21, 'Edith Báez Sámano', 'BASE960302MGTZMD08', '', 'edith_96baez@hotmail.com'),
(22, 'José de Jesús Alvarado Padilla ', 'AAPJ981015HZSLDS06', '', 'jose_alpa@uaz.edu.mx'),
(23, 'Lizbeth Esparza Ruiz', 'EARL990304MZSSZZ04', '', 'lizespa31@gmail.com'),
(24, 'VICTOR DANIEL MENDEZ MONTALVO', 'MEMV940911HZSNNC03', '', 'danie_besor1@hotmail.com'),
(25, 'Julián Herrera', 'ZAHJ961116HZSPRL07', '', 'josejulianzh@gmail.com'),
(26, 'Alberto Manuel Barajas Palacios', 'BAPA000503HZSRLLA5', '', 'manuelpalacios36@gmail.com'),
(27, 'David Patricio Aguilar Tavizon', 'AUTD980727HZSGVV02', '', 'dpaguilartavizon@gmail.com'),
(28, 'David de Jesus Ulises Hernandez Gonzalez', 'HEGD990305HZSRNV04', '', 'davhdezglez@gmail.com'),
(30, 'Ricardo Mendez Montalvo ', 'MEMR000529HZSNNCA3', '', 'ricardovencar728@gmail.com'),
(31, 'América Reyes Guerrero', 'REGA010818MZSYRMA4', '', 'manuelpalacios36@gmail.com'),
(32, 'Sara Muñoz', 'MURS980824MZSXDR02', '', 'sarimun689@gmail.com'),
(33, 'Jorge Alfonso Solís Galván', 'SOGJ970315HZSLLR02', '', 'jasg15_@hotmail.com'),
(36, 'Humberto Alejandro', 'MUFH000219HZSRRMB7', '', 'humbertoa.murillo@gmail.com'),
(37, 'Javier Enrique Báez Zacarías', 'BAZJ580715HSPZCV06', '', 'edith_96baez@hotmail.com'),
(39, 'Esmeralda Palacios Valdez', 'PAVE970308MZSLLS00', '', 'esmeraldavaldez5919@gmail.com'),
(44, 'Ma. Guadalupe Sámano Domínguez', 'SADG631212MGTMMD00', '', 'edith_96baez@hotmail.com'),
(46, 'GALA ANABELY GUERRERO SANCHEZ', 'GUSG940721MZSRNL00', '', 'galaguerrero21@gmail.com'),
(47, 'Alejandro Rodriguez Rodriguez', 'RORA940510HZSDDL08', '', 'argosalex88@gmail.com'),
(48, 'Edith Ramirez Jáquez ', 'RAJE001228MZSMQDA7', '', 'eifijaquez@gmail.com'),
(50, 'Daniel Ramírez', 'RARD971109HZSMMN03', '', 'danielrmz101@gmail.com'),
(51, 'Antoine Berkam ', 'BECA000319HZSRMNA9', '', 'josecamacho555@outlook.es'),
(52, 'Maria Alexia Cervantes Diaz ', 'CEDA940616MSRRZL06', '', 'alexia.macd@gmail.com'),
(53, 'Leslie Acevedo Sánchez', 'AESL951011MZSCNS00', '', 'lesliea288@gmail.com'),
(54, 'Fátima Yoseline Ramírez Collazo ', 'RACF950826MZSMLT00', '', 'ycollazo96@gmail.com'),
(55, 'SARA GALLEGOS BUENROSTRO', 'GABS980911MZSLNR00', '', 'saragallegosb@gmail.com'),
(56, 'SARA GALLEGOS BUENROSTRO', 'GABS980911MZSLNR00', '', 'saragallegosb@gmail.com'),
(57, 'Juan Antonio Nava Pedroza', 'NAPJ000907HZSVDNA0', '', 'dragonava2000@gmail.com'),
(58, 'Alonso García Morales', 'GAMA00125HZSRRLA7', '', 'alog2193@gmail.com'),
(60, 'Alexander Bañuelos Robles ', 'BARA970922HZSXBL01', '', 'alxbsrbs@gmail.com'),
(61, 'Griselda Serrano', 'SEOG930724MZSRRR04', '', 'griss.248@hotmail.com'),
(62, 'Jorge Saucedo', 'SAHJ860706HZSCRR02', '', 'jorgeorge001@gmail.com'),
(63, 'Maricela Dimas Reveles ', 'DIRM850729MZSMVR03', '', 'presidencia.zac.cdhez@gmail.com'),
(64, 'Aldo González Campos', 'GOCA851009HZSNML07', '', 'triage12@hotmail.com'),
(65, 'Paola Tiscareno', 'TIGP940201MZSSRL07', '', 'paotisg@gmail.com'),
(66, 'David Montoya', 'MOOD830413HZSNRV07', '', 'davidmon21@hotmail.com'),
(67, 'Manuel de Jesús Soriano Canizales ', 'SOCM980202HZSRNN08', '', 'msorianoc22@gmail.com'),
(68, 'Claudia García', 'GAVC880812MZSRZL09', '', 'claugava@hotmail.com'),
(69, 'Esther Contreras Chavez ', 'CNCHES72070232M900', '', 'secretariaejecutiva.zac.cdhez@gmail.com'),
(70, 'Maria Evelyn Casanova Diosdado ', 'CADE910812MTSSSV04', '', 'presidencia.zac.cdhez@gmail.com'),
(71, 'Santiago García Montes', 'GAMS030404HZSRNNA3', '', 'sg294060@gmail.com'),
(72, 'Natalia Diaz Salas', 'DISN970906MZSZLT05', '', 'arrobanatmx@gmail.com'),
(73, 'Ma. De Jesús Collazo de la O.', 'COOJ570912MZSLXS06', '', 'ycollazo96@gmail.com'),
(74, 'Rafael Ramírez González ', 'RAGR560614HZSMNF01', '', 'ycollazo96@gmail.com'),
(75, 'Julio César Daniel Aguilar Diosdado ', 'AUDJ020524HZSGSLA2', '', 'danielaguilardiosdado@gmail.com'),
(76, 'Sherlyn América García Alvarado ', 'GAAS041005MZSRLHA1', '', 'garciasherlyn11@gmail.com'),
(77, 'Rembrandt Hugo Bosco Duran', 'BODR950423HGTSRM06', '', 'remhug23@gmail.com'),
(78, 'Jesús Francisco Villaseñor Correa', 'VICJ990705HZSLRS00', '', 'villajesusfrancisco@gmail.com'),
(79, 'Jorge Alejandro Raudales Castañeda ', 'RACJ980804HZSDSR08', '', 'Jorgeameno19@gmail.com'),
(80, 'Karla Guadalupe Torres García ', 'TOGK020125MZSRRRA9 ', '', 'kt1544019@gmail.com'),
(81, 'Perla Yanet Rosales Medina', 'ROMP970822MZSSDR03', '', 'perla.rosales@fisica.uaz.edu.mx'),
(82, 'Miguel Angel Rodarte Lopez', 'ROLM001027HZSDPGA1', '', 'miguel.lopezml.ml28@gmail.com'),
(83, 'Maximiliano Arturo Ochoa Carranza', 'OOCM970117HZSCRX06', '', 'maxocca97@gmail.com'),
(84, 'Lic SUSAN CABRAL BUJDUD', 'CABS720628MZSBJS01', 'undefined', 'presidencia@amanczac.org'),
(85, 'ANA CECILIA MEDRANO RUIZ', 'MERA650821MZSDZN02', '', 'direccion@amanczac.org'),
(86, 'Chávez Castrellón Dana Elizabeth ', 'CACD060319MZSHSNA3', '', 'elizabeth.chavez.cas@gmail.com'),
(87, 'Lizbeth Martínez Méndez ', 'MAML061211MZSRNZA4', '', 'martinezmendezl06@gmail.com '),
(88, 'Ángela Luévanos Flores ', 'LUFA060526MDGVLNA2', '', 'luevanosfloresela26@gmail.com '),
(89, 'Alma Lorena Barajas Raygoza', 'BARA000911MZSRYLA1', '', 'almalorenarbl@gmail.com'),
(90, 'Kathia Alexander ', 'AEGK950111MNELNT07', '', 'kathia.alexander11@gmail.com'),
(91, 'Karla Itzel Cepeda García ', 'CEGK970704MZSPRR02', '', 'karlacega97@gmail.con'),
(92, 'Mariza Fernanda DELGADO ', 'Decm991230mzslrr06', '', 'fernanda.cervantesd@gmail.com'),
(93, 'Zayra Daniela Esparza Contreras ', 'EACZ070819MZSSNYA2', '', 'soulalondre@gmail.com'),
(94, 'MA GLORIA CONTRERAS REYNA', 'CORG730421MTSNYL03', '', 'soulalondre@gmail.com'),
(95, 'MARIA FERNANDA DELGADO ARROYO', 'DEAF960218MZSLRR02', '', 'maryfer_da@hotmail.com'),
(96, 'Ma del Refugio Arroyo Alvarez', 'AOAR690207MZSRLF08', '', 'maryfer_da@hotmail.com'),
(97, 'María José Contreras Perez ', 'COPJ001228MZSNRSA6', '', 'mcontrerasperez00@gmail.com '),
(98, 'Fernando Antonio Delgado Hernandez', 'DEHF670605HZSLRR02', '', 'maryfer_da@hotmail.com'),
(99, 'Alejandro Delgado Arroyo', 'DEAA020112HZSLRLA1', '', 'maryfer_da@hotmail.com'),
(100, 'Ixamail Fraire ', 'FASI940213MDGRTX04', '', 'ixamail13@gmail.com'),
(101, 'Frida Barrios', 'BAPF950204MZSRLR02', '', 'fridamariabarrios@gmail.com'),
(103, 'Montserrat Ortiz Almaraz ', 'OIAM971106MZSRLN05', '', 'mortizalmaraz06@gmail.com'),
(105, 'Mariana Gissele Cabral Cardona ', 'CACM010831MNEBRRA0', '', 'marianacabralcardona@gmail.com'),
(106, 'Angeles Calderón García ', 'CXGA001216MZSLRNA4', '', 'angiecalderongarcia17@gmail.com'),
(107, 'Cynthia Lissete Rodríguez Moreira', 'ROMC911022MZSDRY06', '', 'cynthiarodriguezmoreira@hotmail.com'),
(108, 'Ximena Janeth Abaroa Flores ', 'AAFX000324MZSBLMA4', 'undefined', 'ximena2_af@hotmail.con'),
(109, 'Mónica Andrea López Segovia', 'Losm980528mzspgn01', '', 'monicasegovia98@gmail.com'),
(110, 'Gabriela Reyes Díaz ', 'REDG980901MZSYZB08', '', 'Crimigabyreyes@gmail.com'),
(111, 'Vanessa Mendoza Salazar', 'MESV920414MZSNLN00', '', 'vanne.grupomr@gmail.com'),
(112, 'Victor Hugo Razo de Avila', 'RAAV920320HZSZVC05', '', 'mr.contasesor@gmail.com'),
(113, 'Vanessa López ', 'LORV030831MZSPDNA0', '', 'Vanessamaytelopezrodriguez@gmail.com'),
(114, 'Maria Guadalupe Salazar Huitrado', 'SAHG630429MZSLTD02', '', 'dmms839201@gmail.com'),
(115, 'Ana Paula Román ', 'ROVA990913MZSMLN05', '', 'valdez.roman.pau@gmail.com '),
(116, 'Jordy Nava ', 'NARJ020317HZSVMRA7', '', 'roman.anapaula@hotmail.com '),
(117, 'Morelia Ivette Herrera Raygoza ', 'HERM951002MZSRYR01', '', 'pasionteatralzac@hotmail.com'),
(118, 'Sarahid Lopez ', 'LOFP970216MZSPLT08', '', 'patricia.sarahidlopez@gmail.com'),
(120, 'Cecilia Gonzalez ', 'GOLA880802MZSNPR04', '', 'patricia.sarahidlopez@gmail.com'),
(121, 'Adriana Gallegos Padierna', 'GAPA990817MZSLDD04', '', 'galpadadriana@gmail.com'),
(122, 'Aymee Ileana Ortega Guerrero', 'OEGA940720MZSRRY02', '', 'aymeeileana@gmail.com'),
(123, 'Gustavo Iván García Hernández ', 'GAHG940908HZSRRS00', '', 'ivan_garciah@outlook.es'),
(124, 'Ma. de Jesus Diaz Magdaleno ', 'DIMJ670824MJCZGS02', '', 'talleres.radio2018@gmail.com'),
(125, 'Sandra Berenice Villagrana Leaños', 'VILS921006MZSLXNO7', '', 'berenicevillagrana1@gmail.com'),
(126, 'Juan Luis Cervantes Diaz', 'CEDJ010220HZSRZNA3', '', 'jlcervantes662@gmail.com'),
(127, 'MARIA TERESA SALAS MARTÍNEZ', 'SAMT590513MZSLRR04', '', 'samt170@hotmail.com'),
(128, 'ROGELIO DÍAZ SALAS', 'DISR870530HZSZLG04', '', 'entronance@hotmail.com'),
(129, 'ADRIANA DÍAZ SALAS', 'DISA881122MZSZLD04', '', 'adrianadisa_07@hotmail.com'),
(130, 'Edgar ornelas diaz ', 'OEDE940413HZSRZD00', '', 'edgar_ornelasdiaz@hotmail.com'),
(131, 'JUAN ROGELIO DÍAZ ROMERO', 'DIRJ560613HZSZMN07', '', 'nataliadzs@hotmail.com'),
(132, 'Esteban Alvarado ', 'AALE980421HZSLPS03', '', 'alvaradolopezesteban@gmail.com '),
(134, 'Martha Cecilia Macías Contreras ', 'MACM720212mzscnr00', '', 'mmacias@elpilar.mx'),
(135, 'Alondra Guadalupe Castorena Gamboa', 'CXGA970910MZSSML06', '', 'alondragamboa24@gmail.com'),
(136, 'Rodolfo Márquez López ', 'MALR930826HCLRPD02', '', 'rodolfo.marquez04@gmail.com'),
(137, 'GUILLERMO ABRAHAM RAMIREZ ARIAS', 'RAAG951220HZSMRL04', '', 'guillermo.ram.arias@gmail.com'),
(138, 'Litzy Andrea Tiscareño García ', 'TIGL990905MZSSRT07', '', 'Landreatg5@gmail.com'),
(139, 'Blanca Elena de la Rosa ', 'ROXB760508MZSSXL11', '', 'Elenaros7671@gmail.com'),
(140, 'LOUISIANA GRISELL JIMENEZ PEREZ', 'JIPL830414MHGMRS00 ', '', 'sh_grisell@hotmail.com'),
(141, 'Hannia Gabriela Gamboa Guerrero', 'GAGH010507MZSMRNA7', '', 'hanniagamboa07@gmail.com '),
(142, 'Emiliano Romo ', 'ROVE011122HZSMYMA7', '', 'romoveynajoseemiliano@gmail.com'),
(143, 'Guillermo Alonso de la Rosa Soto ', 'ROSG990924HZSSTL09', '', 'memosoto12uaz@gmail.com '),
(144, 'Antonia Velázquez león ', 'VELA000110MASLNNA3', '', 'antogvl.10@gmail.com'),
(145, 'Marelylara@gmail.com', 'LAMM961210MZSRRR04', '', 'marelylara@gmail.com'),
(146, 'Sara Cecilia Castañeda Macías ', 'CAMS970531MZSSCR07', '', '35161149@uaz.edu.mx'),
(147, 'Madelen de la Torre ', 'TOGM941123MZSRND16', '', 'gonzalez_made@hotmail.com '),
(148, 'DANIELA HERNANDEZ RUIZ', 'HERD000106MSPRZNA0', '', 'daniheruiz17@gmail.com'),
(149, 'Paulina Correa', 'COVP980224MZSRLL00', '', 'pcorreavelasco@gmail.com'),
(150, 'Mariana Serrano', 'SEPM991002MZSRRR03', '', 'marypaosp02@gmail.com'),
(151, 'Libertad Aguilar', 'AUCL880915MZSGRB09', '', 'liberi.aguck@gmail.com'),
(152, 'Liz Karina Ibarra Ruiz ', 'IARL961221MZSBZZ07', '', 'Lizka1012@gmail.com'),
(153, 'Tania Rocha ', 'ROLT920810MZSCNN02', '', 'taniarochaluna@outlook.com'),
(154, 'Laiza Rocha', 'ROLL951220MZSCNZ03', '', 'laizarochaluna@gmail.com'),
(155, 'Javier Alexis Hernández Maldonado ', 'HEMJ950829HZSRLV07', '', 'Arqzv7@hotmail.com '),
(156, 'Erika Alejandra Trejo Ortiz ', 'TEOE001105MZSRRRA6 ', '', 'erikaalejandratrejoortiz33@gmail.com'),
(157, 'Maria Fernanda Trejo Ortiz', 'TEOF100426MZSRRRA7', '', 'erikaalejandratrejoortiz9@gmail.com'),
(158, 'María Concepcion corrales de la torre ', 'Cotc920225mzsrrn07', '', 'mct918777@gmail.com'),
(159, 'KARINA GONZALEZ MUÑOZ', 'GOMK990516MZSNXR06', '', 'kgm160599@gmail.com'),
(160, 'Pedro Esparza ', 'EACP961206HZSSSD02', '', 'Paec19@gmail.com '),
(161, 'Elena María Durán Real', 'DURE040216MZSRLLA4', '', 'Helenamdr@hotmail.com'),
(162, 'Marisol Muñoz Murillo ', 'MUMM980620MZSXRR01', '', 'Marysolmunoz1998@gmail.com'),
(163, 'Fátima Elena Gaytán Díaz ', 'GADF930207MZSYZT08', '', 'fagaytand@gmail.com'),
(164, 'Javier Saldivar ', 'Sapj970219hzslrv02', '', 'javiersaldivar28@gmail.com'),
(165, 'Juan Daniel García Martínez ', 'GAMJ930721HZSRRN01', '', 'dany_ar21@hotmail.com'),
(166, 'María Fernanda Navarro', 'NAHF970210MZSVRR02', '', 'maferna711@gmail.com'),
(167, 'Marco Antonio saucedo reyes', 'SARM910613HZSCYR02', '', 'Marco.as13@outlook.com'),
(168, 'Yaqui Mireya Trejo Hernández ', 'TEHY001214MZSRRQA0 ', '', 'mireyatreher1820@gmail.com '),
(169, 'Melissa Alejandra Saldivar Acosta', 'SAAM060808MZSLCLA2', '', 'Mirimelyacosta@hotmail.com'),
(170, 'Nayeli Carolina Paredes Valdovinos ', 'PAVN000127MZSRLYA0', '', 'carolinavaldovinos2701@gmail.com'),
(171, 'Jessica Caraveo', 'CACJ931209MCHRSS02', '', 'jesscaraveo@gmail.com'),
(172, 'Arturo Fernando Morales Lira', 'MOLA030615HZSRRRA5', '', 'arturofernandomorales104@gmail.com'),
(173, 'Andrés Rodríguez', 'ROZA920808HZSDRN05', '', 'ro.zarazu8@gmail.com'),
(174, 'Eduardo Castañeda alaniz', 'CAAE720514HZSSLD09', '', 'eduardocasta7212@gmail.com'),
(175, 'Claudia angelika García ortega ', 'GAOC900701MZSRRL03', '', 'yayiis014@hotmail.com '),
(176, 'Brenda rivera nuñez', 'RERA110810MZSYVNA1 ', '', 'andreagrr2011@gmail.com'),
(177, 'Brenda rivera nuñez', 'RINB860206MZSVXR09', '', 'b_riveranu@hotmail.com'),
(178, 'Juan Carlos Gonzalez López ', 'GOLJ910816HZSNPN05', '', 'juangonza1625@gmail.com'),
(179, 'Diana Isis Del Hoyo Cortés', 'HOCD960911MZSYRN02', '', '8dianaisis8@gmail.com'),
(181, 'Elizabeth Alvarez Rodriguez ', 'AARE950607MZSLDL00', '', 'elyalvarez134@gmail.com'),
(183, 'Miriam', 'AOBM820713MZSCRR09', '', 'elizabetacosta0809@gmail.com'),
(184, 'Sarahi Jiménez', 'JISS931024MDFMNR07', '', 'sarahi_jimenez30@hotmail.com'),
(185, 'Norma de Luna', 'LUGN950512MZSNNR07', '', 'lic.normadeluna@gmail.com'),
(186, 'Andrea Calzada Morales ', 'CAMA920711MNERLN07', '', 'andrea.calzada@educacionparacompartir.org'),
(187, 'Paola Lizeth Ruelas Enciso ', 'RUEP980105MZSLNL07', '', 'paola.ruelas.enciso@gmail.com'),
(188, 'Paloma Monserrat López Amaya ', 'LOAP930826MZSPML07', '', 'palomalopezamaya90@gmail.com'),
(189, 'Aldo leonel González Núñez ', 'Gona840325hzsnxl01', '', 'aldo_gonzalez@hotmail.com '),
(190, 'Grecia Yissel Castrellón Villegas ', 'CAVG980823MZSSLR02', '', 'greciacastrellon8@gmail.com'),
(191, 'KEYLA ALEJANDRA RODRÍGUEZ CORTEZ ', 'ROCK990717MZSDRY02', '', 'Alejandrardz170799@gmail.com'),
(192, 'Lucia ', 'Coll880504mzsrrc01', '', 'lucia_cl@hotmail.com '),
(195, 'Cristian Elias Jimenez ', 'EIJC011026HZSLMRA0', '', 'cristianeliasjimenez@gmail.com '),
(196, 'Carolina Castro ', 'CAGC970923MZSSRR02', '', 'carocg58.ccg@gmail.com'),
(198, 'CARLOS GABRIEL LOPEZ ARANDA RAMIREZ', 'LORC700222HJCPMR08', '', 'asistenterectoria@uvc.edu.mx'),
(199, 'Hector Palafox Sanchez ', 'PASH970211HASLNC02', '', 'hpalafox97@gmail.com '),
(200, 'DANIELA DE LA CRUZ ', 'CUCR980505MZSRRT01 ', '', 'Dannydlcdlc@gmail.com'),
(203, 'Gloria Guadalupe  Serrano Perez ', 'SEPG971226MZSRRL02', '', 'gloria.serrano97@hotmail.com'),
(204, 'Fátima SofÍa RodrÍguez del Río ', 'RORF990704MZSDXT09', '', 'sofiaroddrio@gmail.com'),
(205, 'LAURA ROCIO MORALES ARCEO ', 'MOAL980703MZSRRR02', '', 'morales19laura@gmail.com'),
(206, 'Allyson', 'DIFA020218MDFZLLA6', '', 'floresallyson1@gmail.com'),
(207, 'Andre Alejandra Robles Martínez', 'Roma961110mzsbrn04', '', 'andreroblesmtz@gmail.com'),
(208, 'MIGUEL ALEJANDRO Alejandro FÉLIX DE LA TORRE', 'FETM950301HZSLRG02', '', 'miguelfelixdlt@gmail.com'),
(209, 'Diana Michell Miranda Castro ', 'MICD010420MCHRSNA7', '', 'miranda.artem369@gmail.com'),
(210, 'Davidka Sandoval Díaz', 'SADD991221MDFNZV07', '', 'davidkasandoval@gmail.com'),
(211, 'Karla Paulina Hernández Medina ', 'HEMK981107MZSRDR00', '', 'paulinamedina.18.hernandez@gmail.com'),
(212, 'Aline Mariana Guzmán Martínez', 'GUMA971207MZSZRL02', '', 'alinegm99@gmail.com'),
(213, 'Luis Ángel Guzmán Martínez', 'GUML010327HZSZRSA8', '', 'lu37.vg@gmail.com'),
(216, 'Janeth Muñoz garcia ', 'MUGJ000211MZSXRNA2 ', '', 'alexajanethgarciamunoz@gmail.com'),
(217, 'Diana Andrea Paz Alvarez', 'PAAD970701MDFZLN04', '', 'andreaalvarz97@gmail.com'),
(218, 'Fernanda Fuenzalida', 'FULF970605MZSNPR09', '', 'ferfuenzalida@hotmail.com'),
(219, 'Arely Rizo', 'RITN971010MDFZJN04', '', 'arely_rizo@outlook.con'),
(220, 'Ramsés Ramírez Luna ', 'RALR040625HZSMNMA7', '', 'ramirez.luna.ramses@gmail.com'),
(221, 'Fernanda López ', 'LOCF970715MZSPSR09', '', 'Fer.and.yasu.friends@gmail.com'),
(222, 'Luisa Fernanda ', 'SIRL051120MZSFYSA7', '', 'sifuentesreyesluisafernanda@gmail.con '),
(223, 'Tania Macías ', 'MAHT050302MZSCRNA3', '', 'tanializ.maciashdz@gmail.com'),
(225, 'Valeria Palafox Pasillas', 'PAPV950830MZSLSL01', '', 'Valeriia19135@gmail.com '),
(226, 'Monserratt García Hernández ', 'GAHM950117MZSRRN02', '', 'garher.montse@gmail.com'),
(227, 'Danna Nallely Gamboa Martínez ', 'GAMD001110MZSMRNA9', '', 'nayemartz10@gmail.com'),
(228, 'Yessica Bañuelos ', 'BARY980425MASXYS03', '', 'yessica.br@hotmail.com'),
(229, 'Greshya Jocelyn González Romo ', 'GORG060626MZSNMRA2', '', 'greshyaromo06@gmail.com'),
(230, 'Rogelia Zambrano Rodríguez', 'ZARR931222MNEMDG06', '', 'rodriguez.rogelia23@gmail.com'),
(231, 'Elva Cristina Gonzalez Marquez', 'GOME641111MZSNRL05', '', 'elvacgm@gmail.com'),
(233, 'Karen Victoria González Llamas ', 'Golk970401mzsnlr06', '', 'karen107gonzalez@gmail.com'),
(234, 'Julia Adriana ', 'DURJ011202MZSRLLA2', '', 'julia.duranr@uap.uaz.edu.mx'),
(235, 'Elio Arnoldo Villa García ', 'VIGE981029HZSLRL07', '', 'elioavillag@hotmail.com'),
(236, 'Jorge Alberto Cervantes Diaz ', 'CEDJ051123HZSRZRA8', '', 'cervantesdiazjorgealberto@gmail.com'),
(237, 'Salvador Padilla Anguiano ', 'PAAS980625HZSDNL04', '', 'salva25j98@hotmail.com'),
(238, 'Vanessa Romo Gallardo ', 'ROGM771213MZSMLR05', '', 'vanneromo13@gmail.com'),
(239, 'Mónica Gabriela Buenrostro Gándara ', 'BUGM650402MZSNNN00', '', 'renezac@hotmail.com '),
(240, 'René Gallegos Jiménez ', 'GAJR601028HCHLMN06', '', 'renezac@hotmail.com '),
(241, 'Aaron Martínez Guardado ', 'MAGA980126HZSRRR05', '', 'aaron26mtzgua1@gmail.com'),
(242, 'BRENDA ANAHI OROZCO CONTRERAS', 'OOCB950512MZSRNR06', '', 'banahi_12_@hotmail.com'),
(243, 'ESGAR MANUEL ROSALES SANTILLAN', 'ROSE951023HZSSNS01', '', 'esgar_manu28@hotmail.com'),
(245, 'Carolina ', 'CUHC000307MZSLRRA6', '', 'Carolinacuh02@gmail.com'),
(246, 'Saray Arteaga Escatel ', 'AEES940313MZSRSR03', '', 'saray.ae103@gmail.com'),
(247, 'Jose Juan Avila Medina', 'AIMJ010120HSPVDNA7', '', 'joseavilamedina.ja@gmail.com'),
(248, 'Ma Rosario López Monrreal', 'LOMR650901MZSPNS07', '', 'marlom.zacatecas@gmail.com'),
(249, 'Karina Cecilia De León Ortiz', 'LEOK870417MZSNRR01', '', 'consultoriadeimagenrrpp@gmail.com'),
(250, 'Karen Monserrath Esparza Castañeda', 'EACK930407MZSSSR07', '', 'karennesparza@gmail.com'),
(251, 'DIANA VALDEZ HERNANDEZ', 'VAHD980731MZSLRN03', '', 'valdez.hddz.diana@gmail.com'),
(253, 'José Emmanuel Dávila Flores', 'DAFE981203HZSVLM03', '', 'emmanueldf031298@gmail.com'),
(254, 'Sofia Infante ', 'IAPS030127MZSNRFA8', '', 'Sofyinfante7@gmail.com '),
(255, 'Samuel Soriano', 'SOMS060814HZSRRMA4', '', 'samitosoriano@gmail.com'),
(256, 'Mauricio Berumen', 'BEJM920915HZSRMR00', '', 'mauber_17@hotmail.com'),
(257, 'Nancy Acuña', 'AUQN940930MZSCXN02', '', 'mauber_17@hotmail.com'),
(258, 'Arely Jocelyn Robles Cervantes ', 'ROCA031111MZSBRRA5', '', 'jocelyn2robles@gmail.com'),
(259, 'María Fernanda Guerrero Ramírez ', 'GURF060417MZSRMRA3', '', 'guerreroramirezmariafernada8@gmail. com'),
(260, 'Luisa Lara', ' LAML930823MZSRRS04 ', '', 'luisa.lmlm55@gmail.com'),
(261, 'GONZALO FRANCO GARDUÑO', 'FAGG700114HMNRRN18', '', 'rectoria@utzac.edu.mx'),
(263, 'Felipe Omar Méndez Calderón ', 'Mecf941126hzsnll00 ', '', 'simbolo-94@hotmail.com'),
(264, 'Alma Victoria Serrano Pérez ', 'SEPA010127MZSRRLA0', '', 'almaserrano1927@gmail.com '),
(265, 'Lizbeth Robles', 'ROML981130MZSBDZ04', '', 'lizrobles575@gmail.com'),
(266, 'Isaías Villalpando Dávila ', 'VIDI940310HZSLVS07', '', 'isaiasvillalpando.d@gmail.com '),
(267, 'María Dolores Pérez Hernandez ', 'PEHD740405MZSRRL19', '', 'loliscaz@hotmail.com '),
(269, 'Daniela Lisette Santillán Zarzoza ', 'SAZD990802MZSNRN00', '', 'lisette20.zar@gmail.com'),
(270, 'Alejandra Lizbeth Santillán Zarzoza ', 'SAZA030604MZSNRLA9', '', 'Alezarzoza1@gmail.com'),
(271, 'María Concepción Zarzoza Morán', 'ZAMC681023MDFRRN05', '', 'Cony_zar@hotmail.com'),
(272, 'Sergio Antonio Tarango Aradillas', 'TAAS890619HSPRRR08', '', 'sergio.tarango@hotmail.com'),
(273, 'Alma Delia Pérez Villagrana', 'PEVA790704MZSRLL05', '', 'almis13@hotmail.com'),
(274, 'Grecia Yucel Cuevas Sánchez ', 'CUSG871006MZSVNR06', '', 'yucelcuevas@gmail.com'),
(275, 'Daniela Aguilar', 'Aurd850402mdggyn09', '', 'danysititita@gmail.com'),
(276, 'Belém Contreras ', 'Cogb511221mzsnyl02', '', 'operacion@elpilar.mx'),
(277, 'Bertha Daniluz Coronado Morales', 'COMB900116MZSRRR03', '', 'dani_luz_7@hotmail.com'),
(278, 'José Abel Medina Suarez', 'MESA950116HZSDRB04', '', 'pabel16@live.com.mx'),
(279, 'Andrea Fernanda Alonso Aguilar', 'AOAA960812MZSLGN05', '', 'jm978760@gmail.com'),
(280, 'ANA MARIA HERRERA MEDRANO', 'HEMA820114MDFRDN01', '', 'anaherrera@uaz.edu.mx'),
(281, 'Pedro Bermúdez ', 'Bexp880204hzsrxd09', '', 'Pedroa.bermudezz@gmail.com '),
(282, 'Daniela ', 'LOPE891227MZSPRL08', '', 'elva_daniela@hotmail.com '),
(283, 'Lucía Mata', 'BEML010630MZSLTCA5', '', 'lucedrdn@gmail.com'),
(284, 'José Luis ', 'HEHL850220HCLRR05', '', 'jherrera.vc@gmail.com'),
(285, 'Bruno González Sánchez', 'GOSB080606HZSNNRA1', '', 'brunomxbruno@gmail.com'),
(286, 'Bruno González Sánchez', 'GOSB080606HZSNNRA1', '', 'brunomxbruno@gmail.com'),
(287, 'Alondra Guadalupe García Baltazar ', 'GABA880588MZSRLL04', '', 'danzalo_ballet@hotmail.com'),
(288, 'Zaid Alfonso López Veyna', 'LOVZ920628HZSPYD05', '', 'zaid.veyna@gmail.com'),
(289, 'Joane Jessica Delgado Saucedo ', 'DESJ900624MZSLCN07', '', 'joane.delgado@gmail.com'),
(290, 'Daniel Alba Lopez ', 'AALD901109HZSLPN09', '', 'joane.delgado@gmail.com'),
(291, 'Calos octavio macias mauricio', 'Mamc971221hzscrr04', '', 'Maciasoctavio21@gmail.com'),
(292, 'Osiel Jesus Pérez Galvez ', 'PEGO960216HZSRLS00', '', 'osielp341@gmail.com'),
(294, 'Susana michelle Ruiz de Esparza salinas ', 'RUSS930723MZSZLS08', '', 'Smichelleruize@gmail.com '),
(295, 'María José Noyola López ', 'NOLJ031221MZSYPSA0', '', 'Majonoyola2121@gmail.com'),
(296, 'María Alejandra Noyola López ', 'NOLA980921MASYPL05', '', 'Majonoyola2121@gmail.com'),
(297, 'Karol Michelle Alejandra Sánchez Longoria', 'SALK990221MZSNNR05', '', 'ing.sanchez.34154582@uaz.edu.mx'),
(298, 'Flavio César Esparza Guajardo ', 'Eagf940824hzssjl09', '', 'flavioesparza10@gmail.com'),
(299, 'América Leticia Frías Alvarado', 'FIAA390830MZSRLM05', '', 'afrias@olimpiadasespeciales.gob.mx'),
(301, 'Edith amairani morquecho acosta', 'Moae890412mzsrcd09', '', 'amairanibeautiful@hotmail.com'),
(303, 'VERONICA MORALES MORALES', 'MOMV931028MZSRRR00', '', 'bonita-2810@hotmail.com'),
(304, 'GRISELDA CASAS ROSALES', 'CARG880816MZSSSR01', '', 'grisselda.gcr@gmail.com'),
(306, 'Bitia Ureño Aguilera ', 'UEAB97101MBCRGT00', '', 'ing.agronoma.bitiaureno@gmail.com'),
(307, 'ARTURO GONZALEZ SALAS', 'GOSA840528HZSNLR07', '', 'arturogonzalezsalas@hotmail.com'),
(308, 'MARIA ELENA GUZMAN BADILLO', 'GUBE821108MZSZDL09', '', 'me9698gu@hotmail.com'),
(309, 'Jeannete Alejandra Rodríguez Iñiguez', 'Roij980722mzsdxn19', '', 'jeannetealejandrarodriguez@gmail.com'),
(310, 'Yoltyc Cristina Diaz Inguanzo', 'Diiy810911mzsznl07', '', 'r.yoltyc@gmail.com'),
(311, 'PAULA VICTORIA RODRIGUEZ QUEZADA', 'ROQP931221MZSDZL07', '', 'viroque.paula@gmail.com'),
(312, 'Jorge Eduardo Martínez Robles', 'MARJ040113HZSRBRA1', '', 'jorgeeduardo19482@gmail.com'),
(313, 'Isela Concepción Sánchez Carrera', 'SACI751210MCHNRS03', '', 'isesanchez1012@gmail.con'),
(314, 'David Uriel Rodríguez Esquivel ', 'ROED940222HZSDSV05', '', 'daviduriel.rodes@hotmail.com'),
(315, 'Marcela Jacquelin Chairez Oliva ', 'CAOM040211MZSHLRA6', '', 'Marcelajacquelinchairez@gmail.com'),
(316, 'Luz María Robles Sifuentes', 'ROSL710516MZSBFZ07', '', 'jorgeeduardo19482@gmail.com'),
(317, 'Osvaldo Chávez Juarez ', 'Cajo930929hzshrs04', '', 'monicacris82@hotmail.com'),
(318, 'Mario Martínez Domínguez', 'MADM610924HZSRMR00', '', 'jorgeeduardo19482@gmail.com'),
(319, 'Maria del Carmen Castañon Garcia', 'CAGC000715MZSSRRA3', '', 'carmelita.10cancer@hotmail.com'),
(320, 'Jesús Ángel Alba Sanchez ', 'AASJ980312HZSLNS04', '', 'albaflor5402@gmail.com'),
(322, 'Alma Natalia Díaz Guerrero ', 'DIGA991031MZSZRL03', '', 'diazguerreronatalia99@gmail.com '),
(324, 'Ma.del Rosario de Loera Cervantes ', 'LOCR820502MZSRRS03', '', 'charito_2001@yahoo.com'),
(325, 'Cristina Fabela Enríquez ', 'FAEC020117MZSBNRA3', '', 'fabelacristina17@gmail.com'),
(326, 'Miguel Ángel Díaz', 'Digm831207hgtzng08', '', 'angelboyd@hotmail.com'),
(327, 'Yolanda Rojas ', 'Roxy671224mzsjxl01', '', 'Dlau.970@gmail.com '),
(329, 'Ana Buenrostro', 'BUSA750427MZSNSN09', '', ''),
(330, 'José Antonio Contreras Rojas ', 'CORA020629HDFNJNA1', '', 'Dlau.970@gmail.com '),
(331, 'Diana Laura Contreras Rojas ', 'Cord971215mdfnjn03', '', 'Dlau.970@gmail.com '),
(332, 'Carlos Uriel González Pérez', 'GOPC780717HDGNRR05', '', 'carlosuriel@unizacatecas.edu.mx'),
(333, 'Elia Sarahí Moreno Colunga ', 'MOCE970113MZSRLL03', '', 'elia242503@gmail.com '),
(335, 'Ailín Hernández Murillo', 'HEMA040620MZSRRLA9', '', 'ailinmurillohdez@gmail.com'),
(337, 'Jessica Ceballos Rosales', 'CERJ870629MDFBSS08', '', 'edith_96baez@hotmail.com'),
(338, 'Dylan Buchowski Báez', 'BUBD941128HGTCZY04', '', 'edith_96baez@hotmail.com'),
(339, 'Alejandro Mauricio Díaz Rivera ', 'DIRA880905HZSZVL09', '', 'alesdiazi@gmail.com'),
(340, 'Jesús Abraham Martínez Díaz ', 'MADJ970413HZSRZS00', '', 'dcabrahammd@outlook.es'),
(342, 'Daisy Lorena Díaz Avila', 'DIAD960927MZSZVS02', '', 'daisydz27@gmail.com'),
(343, 'Paloma Muñoz García', 'MUGP960228MZSXRL06', '', 'palomamns2@gmail.com'),
(344, 'Fernanda Pargas Robles ', 'PARF040119MZSRBRA5', '', 'fernandaprg5@gmail.com'),
(345, 'José Miguel Bañuelos Nava ', 'BANM040602HZSXVGA0', '', 'mipyolofer@gmail.com'),
(346, 'María Griselda Molina Contreras ', 'MOCG880919MZSLNR08 ', '', 'griselmolc@hotmail.com'),
(347, 'Ivan Medrano', 'RIMN851110HZSVDL06', '', 'anhyarucobo@gmail.com'),
(348, 'Aixa Alvarado', 'AAOA070919MZSLNXA8', '', 'anhyarucobo@gmail.com'),
(349, 'Angelica Alvarado', 'AARR850719MZSLCS05', '', 'anhyarucobo@gmail.com'),
(350, 'Noemí Buenrostro ', 'BUGN630615MDFNNM00', '', 'noemibg01@hotmail.com'),
(351, 'Paola Solis Valenzuela', 'SOVP940307MZSLLL03', '', 'paolasv_07@hotmail.com'),
(352, 'Dolores Estephany Troncoso Guzmán ', 'TOGD910320MZSRLZ03', '', 'fanytroncoso@outlook.com'),
(353, 'Ana Alicia Campos Rodríguez ', 'Cara710719mzsmdn04', '', 'anaaliciacr71@hotmail.com'),
(354, 'Micaela Salcedo Álvarez', 'SAAM930814MZSLLC02', '', 'mikaelasaal@gmail.com'),
(355, 'Diana Rosario Benavides Parga', 'BEPD990309MZSNRN08', '', 'pargarosario199@gmail.com'),
(356, 'Valeria Alejandra Ramírez Morales ', 'RAMV001018MZSMRLA3', '', 'vm242857@gmail.com'),
(357, 'Stephanie varela ', 'VARS921002MNERDT06', '', 'Fani.1992@hotmail.com'),
(358, 'Joseph antonio ', 'VARJ020922HNERDSA8', '', 'Joseph_vr@outlook.com'),
(359, 'Martha leticia ', 'ROCM680520MJCDHR08', '', 'Cavm1968@yahoo.com.mx'),
(360, 'Emma Lidia Varela Gallardo', 'VAGE960204MZSRLM04', '', 'varelita4296@gmail.com'),
(361, 'ELIECER ISAAC PÉREZ MONTELONGO', 'PEME940607HZSRNL08', '', 'isaac.perez.mon@gmail.com'),
(362, 'Luz Elena Flores Rodríguez', 'FORL900116MZSLDZ04', '', 'luzelenaflrdz@gmail.com'),
(363, 'Frida Escareño', 'EARF010811MZSSSRA8', '', 'julietaescareno11@gmail.com '),
(364, 'María Fernanda Rosales Hernández ', 'ROHF961129MZSSRR03', '', 'fernandarosaleshernandez@gmail.com '),
(366, 'Mariana Meneses Perales ', 'MEPM860904MDFNRR07', '', 'cramsel_k8@hotmail.com'),
(367, 'Andrés de Jesús Carrillo Castillo ', 'CXCA870914HZSRN09', '', 'archerestudio@gmail.com'),
(368, 'Alejandra Rosas', 'ROAA940729MZSSLL01', '', 'vale.rozaz@hotmail.com'),
(369, 'Sandra Fernandez ', 'FEGS871005MZSRMN02', '', 'secit63@gmail.com'),
(371, 'Sianya Anahí Arellano Trujillo', 'AETS870625MZSRRN00', '', 'zianyabongfor@gmail.com'),
(372, 'Julia Eugenia Robles Martinez ', 'ROMJ741104MZSBRL03', '', 'Lassoldaderas1974@gmail.com '),
(373, 'Alejandro de Jesús Sandoval Arteaga ', 'SAAA980201HZSNRL05', '', 'alejandro.sandoval.arteaga@gmail.com '),
(375, 'María de Jesús Robles Martinez ', 'ROMJ670812MZSBRS07', '', 'marichuyrm 67@gmail.com'),
(376, 'Leonardo Cardona García', 'CAGL940719HZSRRN04', '', 'leonardo.cr.gr@gmail.com'),
(377, 'FRANCISCA CONTRERAS GUARDADO', 'COGF620129MZSNRR11', '', 'banahi_12_@hotmail.com '),
(379, 'LIZETH ALEJANDRA RAMÍREZ HERRERA ', 'RAHL980427MZSMRZ00', '', 'ale.ramh27@gmail.com'),
(380, 'Miguel Baena', 'BACM940929HZSNRG05', '', 'miguelcrv22@hotmail.com'),
(381, 'Marbella Cabral', 'CAMN900724MZSBRN00', '', 'marbecabral@gmail.com'),
(382, 'Jesús Adair Tonche Mares', 'TOMJ010820HZSNRSA1', '', 'adair.rock.2000@gmail.com'),
(383, 'José Antonio Garza Gutiérrez', 'GAGA880503HZSRTN07', '', 'pepeantonio_garza@hotmail.com'),
(384, 'Gabriela Silva Flores ', 'SIFG940404MZSLLB00', '', 'flores.silva0494@gmail.com'),
(385, 'Yudith Michel Canizales Trejo ', 'CATY010530MZSNRDA3', '', 'michelcanizales73@gmail.com'),
(386, 'Consuelo Davila', 'Dahc74122172a', '', 'oceleste990@gmail.com'),
(389, 'Uriel González Sánchez ', 'GOSU040128HZSNNRA0', '', 'uriglezsan@gmail.com'),
(390, 'Marisol Zuñiga Salazar', 'zusm871124mdfxlr04', '', 'porlaequidad.zuniga@gmail.com'),
(391, 'Saul Osvaldo Olvera Sanchez', 'oess951231hzslnl07', '', 'masterdecoylol@gmail.com'),
(392, 'Mayra Rosybel Pinedo Fernández ', 'PIFM010728MZSNRYA0', '', 'mayrapinedo1e@gmail.com'),
(393, 'Guadalupe Santiago Coachi ', 'SACG800518MDFNCD08', '', 'sacg18@hotmail.com'),
(394, 'Lina Esmeralda Pérez Loera ', 'PELL010311MCHRRNA5', '', 'linaesmeraldaperezloeraa@gmail.com'),
(395, 'Nadia Guadalupe Martínez Galván ', 'MAGN030622MSPRLDA2', '', 'galvannadia008@gmail.com'),
(396, 'Fatima Ortiz', 'OIDF060418MZSRVTA7', '', 'oceleste990@gmail.com'),
(397, 'Consuelo Davila ', 'DAHC741221MSPVRN05', '', 'consuelodavila1974@gmail.com'),
(398, 'Sergio Ortiz', 'OIBS681025HZSRZR08', '', 'sergio.ob@hotmail.com'),
(399, 'Itzel Stephanie Ortiz Hernández ', 'OIHI930222MZSRRT03', '', 'mti.stephanieortiz@gmail.com '),
(400, 'IRMA AZUA MEJIA', 'AUMI840629MZSZJR08', '', 'azua.irm@gmail.com'),
(401, 'Eduardo Alejandro Aldava Pérez ', 'AAPE000629HZSLRDA9', '', 'aldavaperezalejandro@gmail.com'),
(402, 'MARTHA ALICIA HERRERA CARRILLO', 'HECM690223MZSRRR06', '', 'aliz.zclhx@gmail.com'),
(403, 'María del Carmen Moreira Landeros', 'MOLC680716MZSRNR06', '', 'moreira_azk@hotmail.com'),
(404, 'DIANA SARAHÍ RAMIREZ HERRERA ', 'RAHD080327MZSMRNA6', '', 'aliz.zclhx@gmail.com'),
(405, 'Manuel Alejandro Rosas Torres ', 'ROTM031221HZSSRNA1', '', 'alemardesol@gmail.com'),
(406, 'Perla Rubí Lara Chávez ', 'LACP021110MZSRHRA7', '', 'perlaagustd@gmail.com '),
(407, 'Vanessa Guadalupe Martínez Arias ', 'MAAV041212MZSRRNA7', '', 'vanessaarias9010@gmail.com'),
(408, 'Teresa Guadalupe Arias Morales ', 'AIMT731125MZSRRR09', '', 'arisatreraria@gmail.com'),
(409, 'Omar Alonso Martinez Arias ', 'MAAO131222HZSRRMA4', '', 'oberthoukid@gmail.com'),
(410, 'Diana Laura Hurtado Hernández', 'HUHD020731MZSRRNA5', '', 'dianita023107@gmail.com '),
(411, 'Neyda Corett Ortiz Hernández ', 'OIHN990507MZSRRY07', '', 'neydacorett@gmail.com'),
(412, 'MARTHA IMELDA LOPEZ MORALES', 'LOMM741225MSPPRR05', '', 'marlop1974z@gmail.com'),
(413, 'Ariadna Paola Murillo Luna ', 'MXLA041104MZSRNRA1', '', 'liz.luna.despacho@gmail.com'),
(414, 'Lizeth Alejandra Murillo Luna ', 'MULL980811MZSRNZ07', '', 'liz.luna.despacho@gmail.com'),
(418, 'luis manuel lopez arellano', 'LOAL870219HZSPRS05', '', 'loal870219@gmail.com'),
(419, 'Miguel Dario del real Campos ', 'RECM910406HZSLMG06', '', 'delrealdario@hotmail.com'),
(421, 'José Luis guijarro hernandez ', 'Guhl850417hzsjrs08', '', 'pepe.guijarroverde@gmail.com'),
(422, 'Renato Lugo ', 'LUDR880517HZSGLN08', '', 'renazagga17@gmail.com'),
(423, 'Alvaro Ruiz Arriaga', 'RUAA020614HZSZRLA4', '', 'al.va20@yahoo.com'),
(424, 'Alondra Jennifer Gonzalez Román', 'GORA011024MZSNMLA0 ', '', 'alondragonzalez01239@gmail.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
