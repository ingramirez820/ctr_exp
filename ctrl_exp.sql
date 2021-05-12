-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2020 a las 00:46:32
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exp`
--

CREATE TABLE IF NOT EXISTS `expedientes` (
  `idExpediente` int(11) NOT NULL,
  `id_num_exp` int(11) NOT NULL,
  `num_fol_exp` VARCHAR (100) NOT NULL,
  `fecha` date NOT NULL,
  `hora_p_circula` time NOT NULL,
  `p_circula` varchar(100) NOT NULL,
  `tipo` varchar(150) NOT NULL,
  `dp` varchar(10) NOT NULL,
  `p1_recibe` varchar(10),
  `p1_c_recibe` varchar(10),
  `hora_p1_recibe` time,
  `p2_recibe` varchar(10),
  `p2_c_recibe` varchar(10),
  `hora_p2_recibe` time,
  `p3_recibe` varchar(10),
  `p3_c_recibe` varchar(10),
  `hora_p3_recibe` time
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `exp`
--
ALTER TABLE `expedientes`
  ADD PRIMARY KEY (`idExpediente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `exp`
--
ALTER TABLE `expedientes`
  MODIFY `idExpediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
INSERT INTO `expedientes` (`idExpediente`,`id_num_exp`, `num_fol_exp`,`fecha`,`hora_p_circula`,`p_circula`,`tipo`,`dp`,`p1_recibe`,`p1_c_recibe`,`hora_p1_recibe`,`p2_recibe`,`p2_c_recibe`,`hora_p2_recibe`,`p3_recibe`,`p3_c_recibe`,`hora_p3_recibe`) VALUES
(1,1, 'JDC/001/2021','2021-01-19','14:04','AKBA','sentencia','dato protegido','CSJRO','GILBERTO','02:10','GGBG','ESTHER','14:13','','',''),
(2,2, 'JDC/002/2021','2021-01-19','16:38','GGBG','acuerdo','normal','CSJRO','HILDE','16:47','','','','','',''),
(3,2,'JDC/009/2021','2021-01-19','16:38','GGBG','acuerdo','normal','CSJRO','HILDE','16:47','','','','','',''),
(4,3,'RAP/002/2021','2021-01-20','09:00','GGBG','sentencia','dato protegido','CSJRO','SANDRA','10:47','GGBG','SOFIA','09:47','AKBA','CANSECO','09:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
