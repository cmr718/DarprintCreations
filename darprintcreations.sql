-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2021 a las 20:05:05
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `darprintcreations`

CREATE DATABASE darprintcreations;
USE darprintcreations;
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(20) NOT NULL,
  `nombreCategoria` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombreCategoria`, `descripcion`) VALUES
(1, 'Ropa', 'Prendas de vestir'),
(2, 'Mascarillas', 'Protección ante los virus'),
(3, 'Tazas', 'Para beber'),
(4, 'Gorras', 'Gorras para tapar el sol'),
(5, 'Regalos', 'Articulos de regalo variados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospago`
--

CREATE TABLE `datospago` (
  `nombretitular` varchar(20) NOT NULL,
  `numerotarjeta` varchar(20) NOT NULL,
  `fechavencimiento` varchar(9) NOT NULL,
  `cvv` varchar(5) NOT NULL,
  `dni` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(20) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `nombreProducto` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `precioTotalPedido` double NOT NULL,
  `correo` varchar(20) NOT NULL,
  `stockProducto` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombreProducto` varchar(20) NOT NULL,
  `id_categoria` int(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombreProducto`, `id_categoria`, `descripcion`, `precio`, `imagen`, `stock`) VALUES
(23, 'Camiseta Azul chulis', 4, 'asdasda', 90, 'img_producto.png', 1),
(28, 'Camiseta Betis', 1, 'La camiseta er beti', 18, 'img_4cb3886bfd282aec4d85c5a858ee6319.jpg', 1),
(31, 'Camiseta Boda', 1, 'esta to flama', 30, 'img_c4efbbf25d5d3e3b09700ac1b95c807a.jpg', 1),
(32, 'Cesta Regalo Persona', 5, 'Cesta para regalar personalizada', 11, 'img_6f1390bfed1e18de2552f4116298437f.jpg', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(2) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `password` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `localidad` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `codigoPostal` int(6) NOT NULL,
  `telefono` int(9) NOT NULL,
  `id_rol` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellidos`, `dni`, `password`, `correo`, `localidad`, `direccion`, `codigoPostal`, `telefono`, `id_rol`) VALUES
('Celia', 'Magaña Reguero', '11111111A', 'celia123', 'celia@gmail.com', 'Almeria', 'calle 1', 4000, 950111111, 1),
('Choque', 'Sanchez Miranda', '12345678G', 'choque123', 'choque@gmail.com', 'Almeria', 'calle 1', 4745, 950111118, 2),
('Danix', 'Diaz Martinez', '33333333A', 'dani123', 'dani@gmail.com', 'Almeria', 'calle 2', 401, 950111112, 1),
('Ruben', 'Ortega Enciso', '77777777A', 'ruben234', 'ruben@gmail.com', 'Almeria', 'calle 2', 4001, 950111113, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `datospago`
--
ALTER TABLE `datospago`
  ADD PRIMARY KEY (`numerotarjeta`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `correo` (`correo`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `categoria` (`id_categoria`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`dni`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datospago`
--
ALTER TABLE `datospago`
  ADD CONSTRAINT `datospago_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `usuario` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`correo`) REFERENCES `usuario` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
