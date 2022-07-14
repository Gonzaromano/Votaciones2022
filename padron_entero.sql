-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2022 a las 22:10:49
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `padron_entero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anio`
--

CREATE TABLE `anio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(12) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `anio`
--

INSERT INTO `anio` (`id`, `nombre`) VALUES
(6, '1º1ra'),
(8, '1º2da'),
(10, '1º3ra'),
(12, '1º4ta'),
(14, '1º5ta'),
(16, '1º6ta'),
(18, '2º1ra'),
(20, '2º2da'),
(22, '2º3ra'),
(24, '2º4ta'),
(26, '2º5ta'),
(28, '2º6ta'),
(30, '3º1ra'),
(32, '3º2da'),
(34, '3º3ra'),
(36, '3º4ta'),
(38, '3º5ta'),
(40, '3º6ta'),
(42, '4º1ra'),
(44, '4º2da'),
(46, '4º3ra'),
(48, '4º4ta'),
(49, ''),
(50, '4º5ta'),
(51, ''),
(52, '5º1ra'),
(54, '5º2da'),
(56, '5º3ra'),
(58, '5º4ta'),
(60, '5º5ta'),
(62, '6º1ra'),
(64, '6º2da'),
(66, '6º3ra'),
(68, '6º4ta'),
(70, '6º5ta'),
(72, '7º1ra'),
(74, '7º2da'),
(76, '7º3ra'),
(78, '7º4ta'),
(80, '7º5ta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `nombre`) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(3, 'No Binario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `nombres` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `curso` varchar(3) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` int(8) NOT NULL,
  `genero` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombres`, `apellido`, `edad`, `curso`, `dni`, `genero`, `tel`) VALUES
(2, 'Gonzalo Nicolas', 'Romano', 17, '6.5', 45825788, 'Masculino', 1128835617),
(3, 'Franco Valentin', 'He', 17, '1.1', 46356166, 'Femenino', 1127343587),
(4, 'Mariano Facundo', 'Sotelo', 17, '', 46195547, 'Seleccione', 1136933645),
(5, 'Gonzalo Nicolas', 'Romano', 17, '6.5', 45825788, 'Masculino', 1128835717);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anio`
--
ALTER TABLE `anio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anio`
--
ALTER TABLE `anio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
