-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2023 a las 21:31:36
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `motocampeonas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID_MODALIDAD` varchar(10) DEFAULT NULL,
  `ID_CILINDRADA` varchar(5) DEFAULT NULL,
  `ID_CATEGORIA` varchar(15) NOT NULL,
  `FECHA_COMIENZO` int(11) DEFAULT NULL,
  `FECHA_FIN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID_MODALIDAD`, `ID_CILINDRADA`, `ID_CATEGORIA`, `FECHA_COMIENZO`, `FECHA_FIN`) VALUES
('Velocidad', 'Baja', '125cc', 1949, 2011),
('Velocidad', 'Media', '250cc', 1949, 2009),
('Velocidad', 'Alta', '500cc', 1949, 2001),
('Velocidad', 'Media', 'Moto2', 2010, NULL),
('Velocidad', 'Baja', 'Moto3', 2012, NULL),
('Velocidad', 'Alta', 'MotoGP', 2002, NULL),
('Motocross', 'Alta', 'MX1', 2004, 2013),
('Motocross', 'Baja', 'MX2', 2004, NULL),
('Motocross', 'Alta', 'MX3', 2004, 2013),
('Motocross', 'Alta', 'MXGP', 2014, NULL),
('Motocross', 'Alta', 'WMX', 2009, NULL),
('Velocidad', 'Alta', 'WorldSBK', 1988, NULL),
('Velocidad', 'Media', 'WorldSSP', 1999, NULL),
('Velocidad', 'Baja', 'WorldSSP300', 2017, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cilindradas`
--

CREATE TABLE `cilindradas` (
  `ID_CILINDRADA` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cilindradas`
--

INSERT INTO `cilindradas` (`ID_CILINDRADA`) VALUES
('Alta'),
('Baja'),
('Media');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificaciones`
--

CREATE TABLE `clasificaciones` (
  `ID_CLASIFICACION` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasificaciones`
--

INSERT INTO `clasificaciones` (`ID_CLASIFICACION`) VALUES
('Constructores'),
('Pilotos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `ID_FECHA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`ID_FECHA`) VALUES
(1949),
(1988),
(1989),
(1990),
(1991),
(1992),
(1993),
(1994),
(1995),
(1996),
(1997),
(1998),
(1999),
(2000),
(2001),
(2002),
(2003),
(2004),
(2005),
(2006),
(2007),
(2008),
(2009),
(2010),
(2011),
(2012),
(2013),
(2014),
(2015),
(2016),
(2017),
(2018),
(2019),
(2020),
(2021),
(2022),
(2023),
(2024),
(2025),
(2026),
(2027),
(2028),
(2029),
(2030);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `ID_MARCA` varchar(10) NOT NULL,
  `ID_PAIS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`ID_MARCA`, `ID_PAIS`) VALUES
('Kalex', 'Alemania'),
('GasGas', 'Austria'),
('KTM', 'Austria'),
('Derbi', 'España'),
('JJ Cobas', 'España'),
('Aprilia', 'Italia'),
('Ducati', 'Italia'),
('Garelli', 'Italia'),
('Gilera', 'Italia'),
('Honda', 'Japón'),
('Kawasaki', 'Japón'),
('Moriwaki', 'Japón'),
('Suzuki', 'Japón'),
('Yamaha', 'Japón'),
('Suter', 'Suiza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidades`
--

CREATE TABLE `modalidades` (
  `ID_MODALIDAD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modalidades`
--

INSERT INTO `modalidades` (`ID_MODALIDAD`) VALUES
('Motocross'),
('Velocidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `ID_PAIS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`ID_PAIS`) VALUES
('Alemania'),
('Austria'),
('España'),
('Italia'),
('Japón'),
('Suiza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `FECHA_REGISTRO` date NOT NULL,
  `NOMBRE_MOTE` varchar(15) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `ID_MARCA` varchar(10) DEFAULT NULL,
  `ID_PAIS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `victorias`
--

CREATE TABLE `victorias` (
  `ID_VICTORIA` int(11) NOT NULL,
  `ID_CATEGORIA` varchar(15) NOT NULL,
  `ID_CLASIFICACION` varchar(15) NOT NULL,
  `ID_FECHA` int(11) NOT NULL,
  `ID_MARCA` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `victorias`
--

INSERT INTO `victorias` (`ID_VICTORIA`, `ID_CATEGORIA`, `ID_CLASIFICACION`, `ID_FECHA`, `ID_MARCA`) VALUES
(1, 'WorldSBK', 'Pilotos', 2021, 'Yamaha'),
(2, 'WorldSBK', 'Pilotos', 2020, 'Kawasaki'),
(3, 'WorldSBK', 'Pilotos', 2019, 'Kawasaki'),
(4, 'WorldSBK', 'Pilotos', 2018, 'Kawasaki'),
(5, 'WorldSBK', 'Pilotos', 2017, 'Kawasaki'),
(6, 'WorldSBK', 'Pilotos', 2016, 'Kawasaki'),
(7, 'WorldSBK', 'Pilotos', 2015, 'Kawasaki'),
(8, 'WorldSBK', 'Pilotos', 2014, 'Aprilia'),
(9, 'WorldSBK', 'Pilotos', 2013, 'Kawasaki'),
(10, 'WorldSBK', 'Pilotos', 2012, 'Aprilia'),
(11, 'WorldSBK', 'Pilotos', 2011, 'Ducati'),
(12, 'WorldSBK', 'Pilotos', 2010, 'Aprilia'),
(13, 'WorldSBK', 'Pilotos', 2009, 'Yamaha'),
(14, 'WorldSBK', 'Pilotos', 2008, 'Ducati'),
(15, 'WorldSBK', 'Pilotos', 2007, 'Honda'),
(16, 'WorldSBK', 'Pilotos', 2006, 'Ducati'),
(17, 'WorldSBK', 'Pilotos', 2005, 'Suzuki'),
(18, 'WorldSBK', 'Pilotos', 2004, 'Ducati'),
(19, 'WorldSBK', 'Pilotos', 2003, 'Ducati'),
(20, 'WorldSBK', 'Pilotos', 2002, 'Honda'),
(21, 'WorldSBK', 'Pilotos', 2001, 'Ducati'),
(22, 'WorldSBK', 'Pilotos', 2000, 'Honda'),
(23, 'WorldSBK', 'Pilotos', 1999, 'Ducati'),
(24, 'WorldSBK', 'Pilotos', 1998, 'Ducati'),
(25, 'WorldSBK', 'Pilotos', 1997, 'Honda'),
(26, 'WorldSBK', 'Pilotos', 1996, 'Ducati'),
(28, 'WorldSBK', 'Pilotos', 1995, 'Ducati'),
(29, 'WorldSBK', 'Pilotos', 1994, 'Ducati'),
(30, 'WorldSBK', 'Pilotos', 1993, 'Kawasaki'),
(31, 'WorldSBK', 'Pilotos', 1992, 'Ducati'),
(32, 'WorldSBK', 'Pilotos', 1991, 'Ducati'),
(33, 'WorldSBK', 'Pilotos', 1990, 'Ducati'),
(34, 'WorldSBK', 'Pilotos', 1989, 'Honda'),
(37, 'WorldSBK', 'Pilotos', 1988, 'Honda'),
(38, 'WorldSBK', 'Constructores', 2021, 'Yamaha'),
(39, 'WorldSBK', 'Constructores', 2020, 'Kawasaki'),
(40, 'WorldSBK', 'Constructores', 2019, 'Kawasaki'),
(41, 'WorldSBK', 'Constructores', 2018, 'Kawasaki'),
(42, 'WorldSBK', 'Constructores', 2017, 'Kawasaki'),
(43, 'WorldSBK', 'Constructores', 2016, 'Kawasaki'),
(44, 'WorldSBK', 'Constructores', 2015, 'Kawasaki'),
(45, 'WorldSBK', 'Constructores', 2014, 'Aprilia'),
(46, 'WorldSBK', 'Constructores', 2013, 'Aprilia'),
(47, 'WorldSBK', 'Constructores', 2012, 'Aprilia'),
(48, 'WorldSBK', 'Constructores', 2011, 'Ducati'),
(49, 'WorldSBK', 'Constructores', 2010, 'Aprilia'),
(50, 'WorldSBK', 'Constructores', 2009, 'Ducati'),
(51, 'WorldSBK', 'Constructores', 2008, 'Ducati'),
(52, 'WorldSBK', 'Constructores', 2007, 'Yamaha'),
(53, 'WorldSBK', 'Constructores', 2006, 'Ducati'),
(54, 'WorldSBK', 'Constructores', 2005, 'Suzuki'),
(55, 'WorldSBK', 'Constructores', 2004, 'Ducati'),
(56, 'WorldSBK', 'Constructores', 2003, 'Ducati'),
(57, 'WorldSBK', 'Constructores', 2002, 'Ducati'),
(58, 'WorldSBK', 'Constructores', 2001, 'Ducati'),
(59, 'WorldSBK', 'Constructores', 2000, 'Ducati'),
(60, 'WorldSBK', 'Constructores', 1999, 'Ducati'),
(61, 'WorldSBK', 'Constructores', 1998, 'Ducati'),
(62, 'WorldSBK', 'Constructores', 1997, 'Honda'),
(63, 'WorldSBK', 'Constructores', 1996, 'Ducati'),
(64, 'WorldSBK', 'Constructores', 1995, 'Ducati'),
(65, 'WorldSBK', 'Constructores', 1994, 'Ducati'),
(66, 'WorldSBK', 'Constructores', 1993, 'Ducati'),
(67, 'WorldSBK', 'Constructores', 1992, 'Ducati'),
(68, 'WorldSBK', 'Constructores', 1991, 'Ducati'),
(69, 'WorldSBK', 'Constructores', 1990, 'Honda'),
(70, 'WorldSBK', 'Constructores', 1989, 'Honda'),
(71, 'WorldSBK', 'Constructores', 1988, 'Honda'),
(72, 'WorldSSP', 'Pilotos', 2021, 'Yamaha'),
(73, 'WorldSSP', 'Pilotos', 2020, 'Yamaha'),
(74, 'WorldSSP', 'Pilotos', 2019, 'Yamaha'),
(75, 'WorldSSP', 'Pilotos', 2018, 'Yamaha'),
(76, 'WorldSSP', 'Pilotos', 2017, 'Yamaha'),
(77, 'WorldSSP', 'Pilotos', 2016, 'Kawasaki'),
(78, 'WorldSSP', 'Pilotos', 2015, 'Kawasaki'),
(79, 'WorldSSP', 'Pilotos', 2014, 'Honda'),
(80, 'WorldSSP', 'Pilotos', 2013, 'Yamaha'),
(81, 'WorldSSP', 'Pilotos', 2012, 'Kawasaki'),
(82, 'WorldSSP', 'Pilotos', 2011, 'Yamaha'),
(83, 'WorldSSP', 'Pilotos', 2010, 'Honda'),
(84, 'WorldSSP', 'Pilotos', 2009, 'Yamaha'),
(85, 'WorldSSP', 'Pilotos', 2008, 'Honda'),
(86, 'WorldSSP', 'Pilotos', 2007, 'Honda'),
(87, 'WorldSSP', 'Pilotos', 2006, 'Honda'),
(88, 'WorldSSP', 'Pilotos', 2005, 'Honda'),
(89, 'WorldSSP', 'Pilotos', 2004, 'Honda'),
(90, 'WorldSSP', 'Pilotos', 2003, 'Honda'),
(91, 'WorldSSP', 'Pilotos', 2002, 'Honda'),
(92, 'WorldSSP', 'Pilotos', 2001, 'Kawasaki'),
(93, 'WorldSSP', 'Pilotos', 2000, 'Yamaha'),
(94, 'WorldSSP', 'Pilotos', 1999, 'Suzuki'),
(95, 'WorldSSP', 'Constructores', 2021, 'Yamaha'),
(96, 'WorldSSP', 'Constructores', 2020, 'Yamaha'),
(97, 'WorldSSP', 'Constructores', 2019, 'Yamaha'),
(98, 'WorldSSP', 'Constructores', 2018, 'Yamaha'),
(99, 'WorldSSP', 'Constructores', 2017, 'Yamaha'),
(100, 'WorldSSP', 'Constructores', 2016, 'Kawasaki'),
(101, 'WorldSSP', 'Constructores', 2015, 'Kawasaki'),
(102, 'WorldSSP', 'Constructores', 2014, 'Honda'),
(103, 'WorldSSP', 'Constructores', 2013, 'Kawasaki'),
(104, 'WorldSSP', 'Constructores', 2012, 'Honda'),
(105, 'WorldSSP', 'Constructores', 2011, 'Yamaha'),
(106, 'WorldSSP', 'Constructores', 2010, 'Honda'),
(107, 'WorldSSP', 'Constructores', 2009, 'Honda'),
(108, 'WorldSSP', 'Constructores', 2008, 'Honda'),
(109, 'WorldSSP', 'Constructores', 2007, 'Honda'),
(110, 'WorldSSP', 'Constructores', 2006, 'Honda'),
(111, 'WorldSSP', 'Constructores', 2005, 'Honda'),
(112, 'WorldSSP', 'Constructores', 2004, 'Honda'),
(113, 'WorldSSP', 'Constructores', 2003, 'Honda'),
(114, 'WorldSSP', 'Constructores', 2002, 'Suzuki'),
(115, 'WorldSSP', 'Constructores', 2001, 'Yamaha'),
(116, 'WorldSSP', 'Constructores', 2000, 'Yamaha'),
(117, 'WorldSSP', 'Constructores', 1999, 'Yamaha'),
(118, 'WorldSSP300', 'Pilotos', 2021, 'Kawasaki'),
(119, 'WorldSSP300', 'Pilotos', 2020, 'Kawasaki'),
(120, 'WorldSSP300', 'Pilotos', 2019, 'Kawasaki'),
(121, 'WorldSSP300', 'Pilotos', 2018, 'Kawasaki'),
(122, 'WorldSSP300', 'Pilotos', 2017, 'Yamaha'),
(123, 'WorldSSP300', 'Constructores', 2021, 'Kawasaki'),
(124, 'WorldSSP300', 'Constructores', 2020, 'Kawasaki'),
(125, 'WorldSSP300', 'Constructores', 2019, 'Kawasaki'),
(126, 'WorldSSP300', 'Constructores', 2018, 'Kawasaki'),
(127, 'WorldSSP300', 'Constructores', 2017, 'Yamaha'),
(281, 'MotoGP', 'Constructores', 2021, 'Yamaha'),
(282, 'Moto2', 'Constructores', 2021, 'Kalex'),
(283, 'Moto3', 'Constructores', 2021, 'KTM'),
(284, 'MotoGP', 'Constructores', 2020, 'Suzuki'),
(285, 'Moto2', 'Constructores', 2020, 'Kalex'),
(286, 'Moto3', 'Constructores', 2020, 'KTM'),
(287, 'MotoGP', 'Constructores', 2019, 'Honda'),
(288, 'Moto2', 'Constructores', 2019, 'Kalex'),
(289, 'Moto3', 'Constructores', 2019, 'Honda'),
(290, 'MotoGP', 'Constructores', 2018, 'Honda'),
(291, 'Moto2', 'Constructores', 2018, 'Kalex'),
(292, 'Moto3', 'Constructores', 2018, 'Honda'),
(293, 'MotoGP', 'Constructores', 2017, 'Honda'),
(294, 'Moto2', 'Constructores', 2017, 'Kalex'),
(295, 'Moto3', 'Constructores', 2017, 'Honda'),
(296, 'MotoGP', 'Constructores', 2016, 'Honda'),
(297, 'Moto2', 'Constructores', 2016, 'Kalex'),
(298, 'Moto3', 'Constructores', 2016, 'KTM'),
(299, 'MotoGP', 'Constructores', 2015, 'Yamaha'),
(300, 'Moto2', 'Constructores', 2015, 'Kalex'),
(301, 'Moto3', 'Constructores', 2015, 'Honda'),
(302, 'MotoGP', 'Constructores', 2014, 'Honda'),
(303, 'Moto2', 'Constructores', 2014, 'Kalex'),
(304, 'Moto3', 'Constructores', 2014, 'Honda'),
(305, 'MotoGP', 'Constructores', 2013, 'Honda'),
(306, 'Moto2', 'Constructores', 2013, 'Kalex'),
(307, 'Moto3', 'Constructores', 2013, 'KTM'),
(308, 'MotoGP', 'Constructores', 2012, 'Yamaha'),
(309, 'Moto2', 'Constructores', 2012, 'Suter'),
(310, 'Moto3', 'Constructores', 2012, 'KTM'),
(311, 'MotoGP', 'Constructores', 2011, 'Honda'),
(312, 'Moto2', 'Constructores', 2011, 'Kalex'),
(313, '125cc', 'Constructores', 2011, 'Aprilia'),
(314, 'MotoGP', 'Constructores', 2010, 'Yamaha'),
(315, 'Moto2', 'Constructores', 2010, 'Moriwaki'),
(316, '125cc', 'Constructores', 2010, 'Derbi'),
(317, 'MotoGP', 'Constructores', 2009, 'Yamaha'),
(318, '250cc', 'Constructores', 2009, 'Honda'),
(319, '125cc', 'Constructores', 2009, 'Aprilia'),
(320, 'MotoGP', 'Constructores', 2008, 'Yamaha'),
(321, '250cc', 'Constructores', 2008, 'Gilera'),
(322, '125cc', 'Constructores', 2008, 'Derbi'),
(323, 'MotoGP', 'Constructores', 2007, 'Ducati'),
(324, '250cc', 'Constructores', 2007, 'Aprilia'),
(325, '125cc', 'Constructores', 2007, 'Aprilia'),
(326, 'MotoGP', 'Constructores', 2006, 'Honda'),
(327, '250cc', 'Constructores', 2006, 'Aprilia'),
(328, '125cc', 'Constructores', 2006, 'Aprilia'),
(329, 'MotoGP', 'Constructores', 2005, 'Yamaha'),
(330, '250cc', 'Constructores', 2005, 'Honda'),
(331, '125cc', 'Constructores', 2005, 'Honda'),
(332, 'MotoGP', 'Constructores', 2004, 'Yamaha'),
(333, '250cc', 'Constructores', 2004, 'Honda'),
(334, '125cc', 'Constructores', 2004, 'Honda'),
(335, 'MotoGP', 'Constructores', 2003, 'Honda'),
(336, '250cc', 'Constructores', 2003, 'Aprilia'),
(337, '125cc', 'Constructores', 2003, 'Honda'),
(338, 'MotoGP', 'Constructores', 2002, 'Honda'),
(339, '250cc', 'Constructores', 2002, 'Aprilia'),
(340, '125cc', 'Constructores', 2002, 'Aprilia'),
(341, '500cc', 'Constructores', 2001, 'Honda'),
(342, '250cc', 'Constructores', 2001, 'Honda'),
(343, '125cc', 'Constructores', 2001, 'Gilera'),
(344, '500cc', 'Constructores', 2000, 'Suzuki'),
(345, '250cc', 'Constructores', 2000, 'Yamaha'),
(346, '125cc', 'Constructores', 2000, 'Aprilia'),
(347, '500cc', 'Constructores', 1999, 'Honda'),
(348, '250cc', 'Constructores', 1999, 'Aprilia'),
(349, '125cc', 'Constructores', 1999, 'Honda'),
(350, '500cc', 'Constructores', 1998, 'Honda'),
(351, '250cc', 'Constructores', 1998, 'Aprilia'),
(352, '125cc', 'Constructores', 1998, 'Honda'),
(353, '500cc', 'Constructores', 1997, 'Honda'),
(354, '250cc', 'Constructores', 1997, 'Honda'),
(355, '125cc', 'Constructores', 1997, 'Aprilia'),
(356, '500cc', 'Constructores', 1996, 'Honda'),
(357, '250cc', 'Constructores', 1996, 'Aprilia'),
(358, '125cc', 'Constructores', 1996, 'Honda'),
(359, '500cc', 'Constructores', 1995, 'Honda'),
(360, '250cc', 'Constructores', 1995, 'Aprilia'),
(361, '125cc', 'Constructores', 1995, 'Honda'),
(362, '500cc', 'Constructores', 1994, 'Honda'),
(363, '250cc', 'Constructores', 1994, 'Aprilia'),
(364, '125cc', 'Constructores', 1994, 'Aprilia'),
(365, '500cc', 'Constructores', 1993, 'Suzuki'),
(366, '250cc', 'Constructores', 1993, 'Yamaha'),
(367, '125cc', 'Constructores', 1993, 'Honda'),
(368, '500cc', 'Constructores', 1992, 'Yamaha'),
(369, '250cc', 'Constructores', 1992, 'Honda'),
(370, '125cc', 'Constructores', 1992, 'Aprilia'),
(371, '500cc', 'Constructores', 1991, 'Yamaha'),
(372, '250cc', 'Constructores', 1991, 'Honda'),
(373, '125cc', 'Constructores', 1991, 'Honda'),
(374, '500cc', 'Constructores', 1990, 'Yamaha'),
(375, '250cc', 'Constructores', 1990, 'Yamaha'),
(376, '125cc', 'Constructores', 1990, 'Honda'),
(377, '500cc', 'Constructores', 1989, 'Honda'),
(378, '250cc', 'Constructores', 1989, 'Honda'),
(379, '125cc', 'Constructores', 1989, 'JJ Cobas'),
(380, '500cc', 'Constructores', 1988, 'Yamaha'),
(381, '250cc', 'Constructores', 1988, 'Honda'),
(382, '125cc', 'Constructores', 1988, 'Derbi'),
(383, 'MotoGP', 'Pilotos', 2021, 'Yamaha'),
(384, 'Moto2', 'Pilotos', 2021, 'Kalex'),
(385, 'Moto3', 'Pilotos', 2021, 'KTM'),
(386, 'MotoGP', 'Pilotos', 2020, 'Suzuki'),
(387, 'Moto2', 'Pilotos', 2020, 'Kalex'),
(388, 'Moto3', 'Pilotos', 2020, 'KTM'),
(389, 'MotoGP', 'Pilotos', 2019, 'Honda'),
(390, 'Moto2', 'Pilotos', 2019, 'Kalex'),
(391, 'Moto3', 'Pilotos', 2019, 'Honda'),
(392, 'MotoGP', 'Pilotos', 2018, 'Honda'),
(393, 'Moto2', 'Pilotos', 2018, 'Kalex'),
(394, 'Moto3', 'Pilotos', 2018, 'Honda'),
(395, 'MotoGP', 'Pilotos', 2017, 'Honda'),
(396, 'Moto2', 'Pilotos', 2017, 'Kalex'),
(397, 'Moto3', 'Pilotos', 2017, 'Honda'),
(398, 'MotoGP', 'Pilotos', 2016, 'Honda'),
(399, 'Moto2', 'Pilotos', 2016, 'Kalex'),
(400, 'Moto3', 'Pilotos', 2016, 'KTM'),
(401, 'MotoGP', 'Pilotos', 2015, 'Yamaha'),
(402, 'Moto2', 'Pilotos', 2015, 'Kalex'),
(403, 'Moto3', 'Pilotos', 2015, 'Honda'),
(404, 'MotoGP', 'Pilotos', 2014, 'Honda'),
(405, 'Moto2', 'Pilotos', 2014, 'Kalex'),
(406, 'Moto3', 'Pilotos', 2014, 'Honda'),
(407, 'MotoGP', 'Pilotos', 2013, 'Honda'),
(408, 'Moto2', 'Pilotos', 2013, 'Kalex'),
(409, 'Moto3', 'Pilotos', 2013, 'KTM'),
(410, 'MotoGP', 'Pilotos', 2012, 'Yamaha'),
(411, 'Moto2', 'Pilotos', 2012, 'Suter'),
(412, 'Moto3', 'Pilotos', 2012, 'KTM'),
(413, 'MotoGP', 'Pilotos', 2011, 'Honda'),
(414, 'Moto2', 'Pilotos', 2011, 'Kalex'),
(415, '125cc', 'Pilotos', 2011, 'Aprilia'),
(416, 'MotoGP', 'Pilotos', 2010, 'Yamaha'),
(417, 'Moto2', 'Pilotos', 2010, 'Moriwaki'),
(418, '125cc', 'Pilotos', 2010, 'Derbi'),
(419, 'MotoGP', 'Pilotos', 2009, 'Yamaha'),
(420, '250cc', 'Pilotos', 2009, 'Honda'),
(421, '125cc', 'Pilotos', 2009, 'Aprilia'),
(422, 'MotoGP', 'Pilotos', 2008, 'Yamaha'),
(423, '250cc', 'Pilotos', 2008, 'Gilera'),
(424, '125cc', 'Pilotos', 2008, 'Derbi'),
(425, 'MotoGP', 'Pilotos', 2007, 'Ducati'),
(426, '250cc', 'Pilotos', 2007, 'Aprilia'),
(427, '125cc', 'Pilotos', 2007, 'Aprilia'),
(428, 'MotoGP', 'Pilotos', 2006, 'Honda'),
(429, '250cc', 'Pilotos', 2006, 'Aprilia'),
(430, '125cc', 'Pilotos', 2006, 'Aprilia'),
(431, 'MotoGP', 'Pilotos', 2005, 'Yamaha'),
(432, '250cc', 'Pilotos', 2005, 'Honda'),
(433, '125cc', 'Pilotos', 2005, 'Honda'),
(434, 'MotoGP', 'Pilotos', 2004, 'Yamaha'),
(435, '250cc', 'Pilotos', 2004, 'Honda'),
(436, '125cc', 'Pilotos', 2004, 'Honda'),
(437, 'MotoGP', 'Pilotos', 2003, 'Honda'),
(438, '250cc', 'Pilotos', 2003, 'Aprilia'),
(439, '125cc', 'Pilotos', 2003, 'Honda'),
(440, 'MotoGP', 'Pilotos', 2002, 'Honda'),
(441, '250cc', 'Pilotos', 2002, 'Aprilia'),
(442, '125cc', 'Pilotos', 2002, 'Aprilia'),
(443, '500cc', 'Pilotos', 2001, 'Honda'),
(444, '250cc', 'Pilotos', 2001, 'Honda'),
(445, '125cc', 'Pilotos', 2001, 'Gilera'),
(446, '500cc', 'Pilotos', 2000, 'Suzuki'),
(447, '250cc', 'Pilotos', 2000, 'Yamaha'),
(448, '125cc', 'Pilotos', 2000, 'Aprilia'),
(449, '500cc', 'Pilotos', 1999, 'Honda'),
(450, '250cc', 'Pilotos', 1999, 'Aprilia'),
(451, '125cc', 'Pilotos', 1999, 'Honda'),
(452, '500cc', 'Pilotos', 1998, 'Honda'),
(453, '250cc', 'Pilotos', 1998, 'Aprilia'),
(454, '125cc', 'Pilotos', 1998, 'Honda'),
(455, '500cc', 'Pilotos', 1997, 'Honda'),
(456, '250cc', 'Pilotos', 1997, 'Honda'),
(457, '125cc', 'Pilotos', 1997, 'Aprilia'),
(458, '500cc', 'Pilotos', 1996, 'Honda'),
(459, '250cc', 'Pilotos', 1996, 'Aprilia'),
(460, '125cc', 'Pilotos', 1996, 'Honda'),
(461, '500cc', 'Pilotos', 1995, 'Honda'),
(462, '250cc', 'Pilotos', 1995, 'Aprilia'),
(463, '125cc', 'Pilotos', 1995, 'Honda'),
(464, '500cc', 'Pilotos', 1994, 'Honda'),
(465, '250cc', 'Pilotos', 1994, 'Aprilia'),
(466, '125cc', 'Pilotos', 1994, 'Aprilia'),
(467, '500cc', 'Pilotos', 1993, 'Suzuki'),
(468, '250cc', 'Pilotos', 1993, 'Yamaha'),
(469, '125cc', 'Pilotos', 1993, 'Honda'),
(470, '500cc', 'Pilotos', 1992, 'Yamaha'),
(471, '250cc', 'Pilotos', 1992, 'Honda'),
(472, '125cc', 'Pilotos', 1992, 'Aprilia'),
(473, '500cc', 'Pilotos', 1991, 'Yamaha'),
(474, '250cc', 'Pilotos', 1991, 'Honda'),
(475, '125cc', 'Pilotos', 1991, 'Honda'),
(476, '500cc', 'Pilotos', 1990, 'Yamaha'),
(477, '250cc', 'Pilotos', 1990, 'Yamaha'),
(478, '125cc', 'Pilotos', 1990, 'Honda'),
(479, '500cc', 'Pilotos', 1989, 'Honda'),
(480, '250cc', 'Pilotos', 1989, 'Honda'),
(481, '125cc', 'Pilotos', 1989, 'JJ Cobas'),
(482, '500cc', 'Pilotos', 1988, 'Yamaha'),
(483, '250cc', 'Pilotos', 1988, 'Honda'),
(484, '125cc', 'Pilotos', 1988, 'Derbi'),
(485, 'WMX', 'Constructores', 2009, 'KTM'),
(486, 'WMX', 'Pilotos', 2009, 'KTM'),
(487, 'WMX', 'Pilotos', 2010, 'KTM'),
(488, 'WMX', 'Constructores', 2010, 'KTM'),
(489, 'WMX', 'Constructores', 2011, 'KTM'),
(490, 'WMX', 'Pilotos', 2011, 'KTM'),
(491, 'WMX', 'Constructores', 2012, 'Yamaha'),
(492, 'WMX', 'Pilotos', 2012, 'Yamaha'),
(493, 'WMX', 'Constructores', 2013, 'Yamaha'),
(494, 'WMX', 'Pilotos', 2013, 'Yamaha'),
(497, 'WMX', 'Constructores', 2014, 'Kawasaki'),
(498, 'WMX', 'Pilotos', 2014, 'Yamaha'),
(499, 'WMX', 'Constructores', 2015, 'Yamaha'),
(500, 'WMX', 'Pilotos', 2015, 'Yamaha'),
(501, 'WMX', 'Constructores', 2016, 'Yamaha'),
(502, 'WMX', 'Pilotos', 2016, 'Kawasaki'),
(503, 'WMX', 'Constructores', 2017, 'Yamaha'),
(504, 'WMX', 'Pilotos', 2017, 'Yamaha'),
(505, 'WMX', 'Constructores', 2018, 'Yamaha'),
(506, 'WMX', 'Pilotos', 2018, 'Yamaha'),
(507, 'WMX', 'Constructores', 2019, 'Kawasaki'),
(508, 'WMX', 'Pilotos', 2019, 'Kawasaki'),
(509, 'WMX', 'Constructores', 2020, 'Yamaha'),
(510, 'WMX', 'Pilotos', 2020, 'Kawasaki'),
(511, 'WMX', 'Constructores', 2021, 'Kawasaki'),
(512, 'WMX', 'Pilotos', 2021, 'Kawasaki'),
(513, 'MX1', 'Constructores', 2004, 'Yamaha'),
(514, 'MX1', 'Pilotos', 2004, 'Yamaha'),
(515, 'MX2', 'Constructores', 2004, 'KTM'),
(516, 'MX2', 'Pilotos', 2004, 'KTM'),
(517, 'MX3', 'Constructores', 2004, 'KTM'),
(518, 'MX3', 'Pilotos', 2004, 'KTM'),
(519, 'MX1', 'Constructores', 2005, 'Yamaha'),
(520, 'MX1', 'Pilotos', 2005, 'Yamaha'),
(521, 'MX2', 'Constructores', 2005, 'Yamaha'),
(522, 'MX2', 'Pilotos', 2005, 'Yamaha'),
(523, 'MX3', 'Pilotos', 2005, 'KTM'),
(524, 'MX3', 'Constructores', 2005, 'KTM'),
(525, 'MX1', 'Constructores', 2006, 'Yamaha'),
(526, 'MX1', 'Pilotos', 2006, 'Yamaha'),
(527, 'MX2', 'Constructores', 2006, 'KTM'),
(528, 'MX2', 'Pilotos', 2006, 'Kawasaki'),
(529, 'MX3', 'Constructores', 2006, 'Honda'),
(530, 'MX3', 'Pilotos', 2006, 'KTM'),
(531, 'MX1', 'Constructores', 2007, 'Suzuki'),
(532, 'MX1', 'Pilotos', 2007, 'Suzuki'),
(533, 'MX2', 'Constructores', 2007, 'Yamaha'),
(534, 'MX2', 'Pilotos', 2007, 'Yamaha'),
(535, 'MX3', 'Constructores', 2007, 'KTM'),
(536, 'MX3', 'Pilotos', 2007, 'Yamaha'),
(537, 'MX1', 'Constructores', 2008, 'Suzuki'),
(538, 'MX1', 'Pilotos', 2008, 'Yamaha'),
(539, 'MX2', 'Constructores', 2008, 'KTM'),
(540, 'MX2', 'Pilotos', 2008, 'KTM'),
(541, 'MX3', 'Constructores', 2008, 'KTM'),
(542, 'MX3', 'Pilotos', 2008, 'KTM'),
(543, 'MX1', 'Constructores', 2009, 'Yamaha'),
(544, 'MX1', 'Pilotos', 2009, 'Yamaha'),
(545, 'MX2', 'Constructores', 2009, 'KTM'),
(546, 'MX2', 'Pilotos', 2009, 'KTM'),
(547, 'MX3', 'Constructores', 2009, 'Honda'),
(548, 'MX3', 'Pilotos', 2009, 'Suzuki'),
(549, 'MX1', 'Constructores', 2010, 'KTM'),
(550, 'MX1', 'Pilotos', 2010, 'KTM'),
(551, 'MX2', 'Constructores', 2010, 'KTM'),
(552, 'MX2', 'Pilotos', 2010, 'KTM'),
(553, 'MX3', 'Constructores', 2010, 'Yamaha'),
(554, 'MX3', 'Pilotos', 2010, 'Yamaha'),
(555, 'MX1', 'Constructores', 2011, 'KTM'),
(556, 'MX1', 'Pilotos', 2011, 'KTM'),
(557, 'MX2', 'Constructores', 2011, 'KTM'),
(558, 'MX2', 'Pilotos', 2011, 'KTM'),
(559, 'MX3', 'Constructores', 2011, 'Honda'),
(560, 'MX3', 'Pilotos', 2011, 'Honda'),
(561, 'MX1', 'Constructores', 2012, 'KTM'),
(562, 'MX1', 'Pilotos', 2012, 'KTM'),
(563, 'MX2', 'Constructores', 2012, 'KTM'),
(564, 'MX2', 'Pilotos', 2012, 'KTM'),
(565, 'MX3', 'Constructores', 2012, 'KTM'),
(566, 'MX3', 'Pilotos', 2012, 'KTM'),
(567, 'MX1', 'Constructores', 2013, 'KTM'),
(568, 'MX1', 'Pilotos', 2013, 'KTM'),
(569, 'MX2', 'Constructores', 2013, 'KTM'),
(570, 'MX2', 'Pilotos', 2013, 'KTM'),
(571, 'MX3', 'Constructores', 2013, 'KTM'),
(572, 'MX3', 'Pilotos', 2013, 'Honda'),
(573, 'MXGP', 'Constructores', 2014, 'KTM'),
(574, 'MXGP', 'Pilotos', 2014, 'KTM'),
(575, 'MX2', 'Constructores', 2014, 'KTM'),
(576, 'MX2', 'Pilotos', 2014, 'KTM'),
(577, 'MXGP', 'Constructores', 2015, 'Yamaha'),
(578, 'MXGP', 'Pilotos', 2015, 'Yamaha'),
(579, 'MX2', 'Constructores', 2015, 'KTM'),
(580, 'MX2', 'Pilotos', 2015, 'Honda'),
(581, 'MXGP', 'Constructores', 2016, 'Honda'),
(582, 'MXGP', 'Pilotos', 2016, 'Honda'),
(583, 'MX2', 'Constructores', 2016, 'KTM'),
(584, 'MX2', 'Pilotos', 2016, 'KTM'),
(585, 'MXGP', 'Constructores', 2017, 'KTM'),
(586, 'MXGP', 'Pilotos', 2017, 'KTM'),
(587, 'MX2', 'Constructores', 2017, 'KTM'),
(588, 'MX2', 'Pilotos', 2017, 'KTM'),
(589, 'MXGP', 'Constructores', 2018, 'KTM'),
(590, 'MXGP', 'Pilotos', 2018, 'KTM'),
(591, 'MX2', 'Constructores', 2018, 'KTM'),
(592, 'MX2', 'Pilotos', 2018, 'KTM'),
(593, 'MXGP', 'Constructores', 2019, 'Honda'),
(594, 'MXGP', 'Pilotos', 2019, 'Honda'),
(595, 'MX2', 'Constructores', 2019, 'KTM'),
(596, 'MX2', 'Pilotos', 2019, 'KTM'),
(597, 'MXGP', 'Constructores', 2020, 'KTM'),
(598, 'MXGP', 'Pilotos', 2020, 'Honda'),
(599, 'MX2', 'Constructores', 2020, 'Yamaha'),
(600, 'MX2', 'Pilotos', 2020, 'KTM'),
(601, 'MXGP', 'Constructores', 2021, 'KTM'),
(602, 'MXGP', 'Pilotos', 2021, 'KTM'),
(603, 'MX2', 'Constructores', 2021, 'Yamaha'),
(604, 'MX2', 'Pilotos', 2021, 'Yamaha'),
(605, 'WorldSBK', 'Constructores', 2022, 'Ducati'),
(606, 'WorldSBK', 'Pilotos', 2022, 'Ducati'),
(607, 'WorldSSP', 'Constructores', 2022, 'Yamaha'),
(608, 'WorldSSP', 'Pilotos', 2022, 'Yamaha'),
(617, 'WorldSBK', 'Constructores', 2023, 'Ducati'),
(618, 'WorldSBK', 'Pilotos', 2023, 'Ducati'),
(619, 'WorldSSP', 'Constructores', 2023, 'Ducati'),
(625, 'WorldSSP', 'Pilotos', 2023, 'Ducati'),
(626, 'WorldSSP300', 'Constructores', 2022, 'Yamaha'),
(627, 'WorldSSP300', 'Pilotos', 2022, 'Yamaha'),
(628, 'WorldSSP300', 'Constructores', 2023, 'Kawasaki'),
(629, 'WorldSSP300', 'Pilotos', 2023, 'Kawasaki'),
(642, 'MotoGP', 'Constructores', 2023, 'Ducati'),
(643, 'MotoGP', 'Pilotos', 2023, 'Ducati'),
(644, 'MotoGP', 'Constructores', 2022, 'Ducati'),
(645, 'MotoGP', 'Pilotos', 2022, 'Ducati'),
(646, 'Moto2', 'Constructores', 2023, 'Kalex'),
(647, 'Moto2', 'Pilotos', 2023, 'KTM'),
(648, 'Moto2', 'Constructores', 2022, 'Kalex'),
(649, 'Moto2', 'Pilotos', 2022, 'KTM'),
(650, 'Moto3', 'Constructores', 2023, 'KTM'),
(651, 'Moto3', 'Pilotos', 2023, 'Honda'),
(652, 'Moto3', 'Constructores', 2022, 'GasGas'),
(653, 'Moto3', 'Pilotos', 2022, 'GasGas'),
(654, 'WMX', 'Constructores', 2023, 'Kawasaki'),
(655, 'WMX', 'Pilotos', 2023, 'Kawasaki'),
(656, 'WMX', 'Constructores', 2022, 'Yamaha'),
(657, 'WMX', 'Pilotos', 2022, 'Yamaha'),
(658, 'MXGP', 'Constructores', 2022, 'Yamaha'),
(659, 'MXGP', 'Pilotos', 2022, 'Honda'),
(660, 'MXGP', 'Constructores', 2023, 'Yamaha'),
(661, 'MXGP', 'Pilotos', 2023, 'GasGas'),
(662, 'MX2', 'Constructores', 2023, 'Yamaha'),
(663, 'MX2', 'Pilotos', 2023, 'KTM'),
(664, 'MX2', 'Constructores', 2022, 'Yamaha'),
(665, 'MX2', 'Pilotos', 2022, 'KTM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_CATEGORIA`),
  ADD UNIQUE KEY `ID_CATEGORIA` (`ID_CATEGORIA`),
  ADD KEY `ID_CILINDRADA` (`ID_CILINDRADA`),
  ADD KEY `ID_MODALIDAD` (`ID_MODALIDAD`),
  ADD KEY `FECHA_COMIENZO` (`FECHA_COMIENZO`),
  ADD KEY `FECHA_FIN` (`FECHA_FIN`);

--
-- Indices de la tabla `cilindradas`
--
ALTER TABLE `cilindradas`
  ADD PRIMARY KEY (`ID_CILINDRADA`);

--
-- Indices de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  ADD PRIMARY KEY (`ID_CLASIFICACION`),
  ADD UNIQUE KEY `ID_CLASIFICACION` (`ID_CLASIFICACION`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`ID_FECHA`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`ID_MARCA`),
  ADD KEY `ID_PAIS` (`ID_PAIS`);

--
-- Indices de la tabla `modalidades`
--
ALTER TABLE `modalidades`
  ADD PRIMARY KEY (`ID_MODALIDAD`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`ID_PAIS`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD UNIQUE KEY `ID_USUARIO` (`ID_USUARIO`),
  ADD KEY `ID_MARCA` (`ID_MARCA`),
  ADD KEY `ID_PAIS` (`ID_PAIS`);

--
-- Indices de la tabla `victorias`
--
ALTER TABLE `victorias`
  ADD PRIMARY KEY (`ID_VICTORIA`),
  ADD KEY `ID_MARCA` (`ID_MARCA`),
  ADD KEY `ID_CATEGORIA` (`ID_CATEGORIA`),
  ADD KEY `ID_FECHA` (`ID_FECHA`),
  ADD KEY `ID_CLASIFICACION` (`ID_CLASIFICACION`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `victorias`
--
ALTER TABLE `victorias`
  MODIFY `ID_VICTORIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=666;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`ID_CILINDRADA`) REFERENCES `cilindradas` (`ID_CILINDRADA`),
  ADD CONSTRAINT `categorias_ibfk_2` FOREIGN KEY (`ID_MODALIDAD`) REFERENCES `modalidades` (`ID_MODALIDAD`),
  ADD CONSTRAINT `categorias_ibfk_3` FOREIGN KEY (`FECHA_COMIENZO`) REFERENCES `fechas` (`ID_FECHA`),
  ADD CONSTRAINT `categorias_ibfk_4` FOREIGN KEY (`FECHA_FIN`) REFERENCES `fechas` (`ID_FECHA`);

--
-- Filtros para la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD CONSTRAINT `marcas_ibfk_1` FOREIGN KEY (`ID_PAIS`) REFERENCES `paises` (`ID_PAIS`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_MARCA`) REFERENCES `marcas` (`ID_MARCA`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`ID_PAIS`) REFERENCES `paises` (`ID_PAIS`);

--
-- Filtros para la tabla `victorias`
--
ALTER TABLE `victorias`
  ADD CONSTRAINT `victorias_ibfk_1` FOREIGN KEY (`ID_MARCA`) REFERENCES `marcas` (`ID_MARCA`),
  ADD CONSTRAINT `victorias_ibfk_2` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categorias` (`ID_CATEGORIA`),
  ADD CONSTRAINT `victorias_ibfk_3` FOREIGN KEY (`ID_FECHA`) REFERENCES `fechas` (`ID_FECHA`),
  ADD CONSTRAINT `victorias_ibfk_4` FOREIGN KEY (`ID_CLASIFICACION`) REFERENCES `clasificaciones` (`ID_CLASIFICACION`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
