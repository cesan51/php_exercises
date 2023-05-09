-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2020 a las 03:09:59
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_producto`
--

CREATE TABLE `datos_producto` (
  `Id_producto` int(15) NOT NULL,
  `Nombre` text NOT NULL,
  `Precio` bigint(25) NOT NULL,
  `Fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_producto`
--

INSERT INTO `datos_producto` (`Id_producto`, `Nombre`, `Precio`, `Fecha_creacion`) VALUES
(1, 'Valvula PALP', 10000, '2020-05-29'),
(2, 'Valvula COBRE', 15000, '2020-05-29'),
(3, 'Valvula POLIETILENO', 25000, '2020-05-29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_producto`
--
ALTER TABLE `datos_producto`
  ADD PRIMARY KEY (`Id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_producto`
--
ALTER TABLE `datos_producto`
  MODIFY `Id_producto` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
