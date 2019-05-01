-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2019 a las 17:27:45
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juegosps4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `Usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Contra` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`Usuario`, `Contra`) VALUES
('Bryan', 'a91a3db54591020c160602911ca3f8b0'),
('Danial', 'a91a3db54591020c160602911ca3f8b0'),
('Hernando', 'a91a3db54591020c160602911ca3f8b0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `Categoria` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ID_Categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`Categoria`, `ID_Categoria`) VALUES
('Deporte', 1),
('Shooter', 2),
('Acción', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `id_Producto` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `Correo_Usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha` varchar(50) COLLATE utf8_bin NOT NULL,
  `Cantidad` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id_compra`, `id_Producto`, `Precio`, `Correo_Usuario`, `fecha`, `Cantidad`) VALUES
(29, 2, 139.98, 'a@a.com', '22-04-2019 17:24:41', 2),
(30, 3, 839.88, 'a@a.com', '22-04-2019 17:24:41', 12),
(31, 4, 10, 'a@a.com', '22-04-2019 17:24:41', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_Producto` int(11) NOT NULL,
  `Nombre_Producto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Precio_Producto` double NOT NULL,
  `Stock` int(11) NOT NULL,
  `Categoria` int(11) NOT NULL,
  `Foto` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_Producto`, `Nombre_Producto`, `Precio_Producto`, `Stock`, `Categoria`, `Foto`) VALUES
(2, 'COD:4', 69.99, 110, 2, '2.jpg'),
(3, 'Final Fantasy:XV', 69.99, 379, 3, '3.jpg'),
(4, 'Nueva Prueba', 10, 49, 3, '3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Password` text COLLATE utf8_spanish_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `CodigoPostal` int(5) NOT NULL,
  `Poblacion` text COLLATE utf8_spanish_ci NOT NULL,
  `Movil` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Fijo` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Correo`, `Nombre`, `Password`, `Birthday`, `Direccion`, `CodigoPostal`, `Poblacion`, `Movil`, `Fijo`) VALUES
('a@a.com', 'aaaaa aaa aaaa ', '202cb962ac59075b964b07152d234b70', '1111-11-11', 'aaaaaaa', 1111, 'aaaa', '1111', '1111');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Usuario`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_Categoria`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_Producto` (`id_Producto`) USING BTREE,
  ADD KEY `Correo_Usuario` (`Correo_Usuario`) USING BTREE;

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_Producto`),
  ADD KEY `Categories` (`Categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `Categories` FOREIGN KEY (`Categoria`) REFERENCES `categorias` (`ID_Categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
