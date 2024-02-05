-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2024 a las 17:04:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginprueba2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `proNombre` varchar(255) DEFAULT NULL,
  `proStock` int(11) DEFAULT NULL,
  `proPrecio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `proNombre`, `proStock`, `proPrecio`) VALUES
(1, 'Leche', 108, 1.00),
(2, 'Yogurt', 40, 2.50),
(3, 'Queso', 19, 2.00),
(4, 'Manjar', 16, 1.75),
(5, 'Mantequilla', 34, 1.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuUsuario` varchar(255) NOT NULL,
  `pssUsuario` varchar(255) NOT NULL,
  `cargoUsuario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuUsuario`, `pssUsuario`, `cargoUsuario`) VALUES
(0, '.', '.', '.'),
(1, 'byron@gmail.com', '12345678', 'Gerente'),
(2, 'marisol@gmail.com', '87654321', 'Productor'),
(6, 'danilo@gmail.com', '12345678', 'Productor'),
(7, 'vanesa@gmail.com', '12345678', 'Gerente'),
(8, 'ana@gmail.com', '12345666', 'Gerente'),
(9, 'gabriel@gmail.com', '123123123', 'Gerente'),
(10, 'Oscar', '12345678', 'Vendedor'),
(12, 'vendedor@gmail.com', '121212', 'Vendedor'),
(13, 'oscar@gmail.com', '1234513', 'Productor'),
(44, 'admin@hotmail.com', '12345678', 'Productor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
