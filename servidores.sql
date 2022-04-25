-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2022 a las 05:14:44
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servidores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `server`
--

CREATE TABLE `server` (
  `id` int(99) NOT NULL,
  `ip` varchar(90) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `descripcion` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `server`
--

INSERT INTO `server` (`id`, `ip`, `nombre`, `descripcion`) VALUES
(1, '10.201.36.8', 'server01', 'server de prueba, server, server'),
(2, '192.168.1.15', 'server mio', 'server/server/server/server');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `server`
--
ALTER TABLE `server`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
