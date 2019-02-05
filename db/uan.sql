-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2017 a las 01:01:08
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `doc_ad` bigint(20) NOT NULL,
  `name_ad` varchar(30) NOT NULL,
  `positiion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `doc_ad`, `name_ad`, `positiion`) VALUES
(1, 1110533214, 'Diego Nieto', 'Monitor Centro Computo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `id` int(11) NOT NULL,
  `doc_st` bigint(20) NOT NULL,
  `name_st` varchar(30) NOT NULL,
  `date_req` varchar(20) NOT NULL,
  `home_room` varchar(25) NOT NULL,
  `teach` varchar(30) NOT NULL,
  `lapse_t` varchar(20) NOT NULL,
  `asigned_r` varchar(25) NOT NULL,
  `user_m` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id`, `doc_st`, `name_st`, `date_req`, `home_room`, `teach`, `lapse_t`, `asigned_r`, `user_m`, `state`) VALUES
(1, 1110533214, 'Diego Nieto', '', '201', 'German Flores', '18:00:00 - 22:00:00', '201', '', 'Pendiente'),
(2, 10101010101, 'Jucanima', '', '202', 'Humberto Reyes', '14:00:00 - 16:00:00', '204', 'Diego Nieto', 'Confirmado'),
(3, 1110533214, 'Diego Nieto', '', '201', 'German Flores', '18:00:00 - 22:00:00', '201', '', 'Pendiente'),
(4, 10101010101, 'Jucanima', '', '202', 'Humberto Reyes', '14:00:00 - 16:00:00', '204', 'Diego Nieto', 'Confirmado'),
(5, 1122334455, 'Juan Humberto', '2017-06-10', 'Auditorio', 'PicaPollo', '18:00 - 19:00', '', '', 'Pendiente'),
(6, 1122334455, 'Juan Humberto', '2017-06-10', 'Auditorio', 'PicaPollo', '18:00 - 19:00', '', '', 'Pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
