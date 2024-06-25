-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-04-2022 a las 05:49:35
-- Versión del servidor: 5.7.12-log
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectosantiago`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moto`
--

CREATE TABLE `moto` (
  `id_moto` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `moto`
--

INSERT INTO `moto` (`id_moto`, `modelo`, `marca`, `tipo`, `precio`, `cc`, `descripcion`, `imagen`) VALUES
(1, 'Mt-10', 'Yamaha', 'Moto', 250000, 1000, 'MotoSport', 'yamaha-mt10-1.jpg'),
(3, 'Mt-07', 'Yamaha', 'Moto', 210000, 700, 'MotoSport', 'yamaha07.jpg'),
(4, 'Dominar', 'Bajaj', 'Moto', 100000, 400, 'MotoSport', 'dominar.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_u` int(11) NOT NULL,
  `nombre_u` varchar(100) NOT NULL,
  `correo_u` varchar(100) NOT NULL,
  `contra_u` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_u`, `nombre_u`, `correo_u`, `contra_u`) VALUES
(1, 'santiago', 'santi@gmail.com', '1'),
(2, 'prueba', 'prueba@p.com', '1'),
(3, 'muñez', 'm@m.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `fecha`, `hora`) VALUES
(1, '2022-03-30', '11:03:06'),
(2, '2022-03-30', '11:03:51'),
(3, '2022-03-30', '11:03:51'),
(4, '2022-03-30', '11:03:23'),
(5, '2022-03-30', '11:03:52'),
(6, '2022-03-30', '11:03:26'),
(7, '2022-03-31', '12:03:53'),
(8, '2022-03-31', '12:03:58'),
(9, '2022-03-31', '10:03:05'),
(10, '2022-03-31', '11:03:01'),
(11, '2022-03-31', '11:03:16'),
(12, '2022-03-31', '11:03:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_detalle`
--

CREATE TABLE `venta_detalle` (
  `id_venta` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `cc` int(11) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `id_moto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta_detalle`
--

INSERT INTO `venta_detalle` (`id_venta`, `modelo`, `marca`, `tipo`, `cc`, `descripcion`, `precio`, `cantidad`, `subtotal`, `id_moto`) VALUES
(4, 'Mt-10', 'Yamaha', '', 1000, 'MotoSport', 250000, 1, 250000, 1),
(4, 'Mt-07', 'Yamaha', '', 700, 'MotoSport', 210000, 1, 210000, 4),
(5, 'Dominar', 'Bajaj', 'Moto', 400, 'MotoSport', 100000, 3, 300000, 4),
(10, 'Dominar', 'Bajaj', 'Moto', 400, 'MotoSport', 100000, 2, 200000, 4),
(11, 'Mt-07', 'Yamaha', 'Moto', 700, 'MotoSport', 210000, 1, 210000, 3),
(11, 'Dominar', 'Bajaj', 'Moto', 400, 'MotoSport', 100000, 2, 200000, 4),
(12, 'Mt-10', 'Yamaha', 'Moto', 1000, 'MotoSport', 250000, 1, 250000, 1),
(12, 'Mt-07', 'Yamaha', 'Moto', 700, 'MotoSport', 210000, 1, 210000, 3),
(12, 'Dominar', 'Bajaj', 'Moto', 400, 'MotoSport', 100000, 2, 200000, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id_moto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_u`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `moto`
--
ALTER TABLE `moto`
  MODIFY `id_moto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
