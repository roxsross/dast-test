-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-12-2021 a las 15:30:41
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dashhtml`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(100) NOT NULL,
  `detalle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cuotas` int(10) NOT NULL,
  `importe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mes` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pagado` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id`, `detalle`, `cuotas`, `importe`, `mes`, `pagado`) VALUES
(1, 'Test', 1, '1029.10', 'Agosto', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(200) NOT NULL,
  `servicio` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `1er_vto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `2do_vto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `importe` float NOT NULL,
  `pagado` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `servicio`, `1er_vto`, `2do_vto`, `importe`, `pagado`) VALUES
(5, 'ARBA', '18/8', '10/2', 200.19, 'Si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
