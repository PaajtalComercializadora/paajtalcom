-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2017 a las 02:00:06
-- Versión del servidor: 5.6.17-log
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lista_cp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `checklist`
--

CREATE TABLE IF NOT EXISTS `checklist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nocol` varchar(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaborador`
--

CREATE TABLE IF NOT EXISTS `colaborador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nocol` varchar(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `colaborador`
--

INSERT INTO `colaborador` (`id`, `nocol`, `nombre`, `alta`, `status`) VALUES
(1, '16001GCP', 'GEISLER VICENTE CETZAL POOL', '2017-04-11 00:17:21', b'1'),
(2, '16002DGT', 'DAVID GARCIA TORRES', '2017-04-11 00:18:21', b'1'),
(3, '16003SGN', 'SEBASTIAN GARCIA NAVARIJO', '2017-04-11 00:18:34', b'1'),
(4, '17001DML', 'DIANA MASEGOSA LOBILLO', '2017-04-11 00:18:48', b'1'),
(5, '17002SLR', 'SAMUEL LINARES ROBLES', '2017-04-11 00:19:07', b'1'),
(6, '17003JBB', 'JOSE BATUN', '2017-04-11 00:19:30', b'1'),
(7, '17004IMS', 'ISAC MARTINEZ SANCHEZ', '2017-04-11 00:19:50', b'1'),
(8, '17005EMM', 'EDITH EUNICE MEDINA MENDOZA', '2017-04-11 00:22:25', b'0'),
(9, '17006JMR', 'JESUS ALBERTO MARTINEZ RODRIGUEZ', '2017-04-11 00:22:49', b'1'),
(10, '17007PSC', 'PEDRO EDUARDO SOSA CHAVEZ', '2017-04-11 00:23:35', b'1'),
(11, '17008IKN', 'IRVING JESUS KINIL NUÑEZ', '2017-04-11 00:25:08', b'0'),
(12, '17009JTG', 'JESUS ABRAHAM TAMAYO GUZMAN', '2017-04-11 00:26:33', b'1'),
(13, '17010IAP', 'IXTZUL BETANIA AGUILAR PEREZ', '2017-04-11 00:27:40', b'1'),
(14, '17011JOG', 'JOSE LUIS OJEDA GOMEZ', '2017-04-11 00:28:01', b'1'),
(15, '17012AVA', 'ALAN GERARDO VALLE AGUILAR', '2017-04-11 00:29:01', b'1'),
(16, '17013ARP', 'ARI YAIR REYES PEREGRINO', '2017-04-11 00:29:21', b'1'),
(17, '17014CPZ', 'CHRISTIAN EMANUEL PEÑA ZAVALA', '2017-04-11 00:30:43', b'1'),
(18, '17015CCM', 'CRISTORPHER DE JESUS COAÑA MENDOZA', '2017-04-11 00:31:25', b'1'),
(19, '17016DPM', 'DANIA GUADALUPE PEREZ MOLINA', '2017-04-11 00:32:50', b'1'),
(20, '17017MMU', 'MARIA GIMENA MAY UC', '2017-04-11 00:34:34', b'1'),
(21, '17018OEA', 'OSCAR WILFRIDO EK AY', '2017-04-11 00:38:48', b'1'),
(22, '17019PMC', 'PABLO ANTONIO MARTIN CAN', '2017-04-11 00:39:10', b'1'),
(23, '17020AMS', 'ABDIEL MONTIEL SALAS', '2017-04-11 00:50:08', b'1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
