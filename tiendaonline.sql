-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2021 a las 14:47:53
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idArticulo` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `articulo` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `estado` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `descuento` decimal(10,2) NOT NULL,
  `genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idArticulo`, `idCategoria`, `codigo`, `articulo`, `precio`, `cantidad`, `descripcion`, `estado`, `idMarca`, `descuento`, `genero`) VALUES
(1, 1, 'CM001', 'Camisa roja', '9.50', 17, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, 2, '5.00', 1),
(2, 1, 'CM002', 'Camisa Vede', '9.75', 16, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, 1, '10.00', 1),
(3, 2, 'JN001', 'Blue Jeans', '11.60', 18, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 3, '38.00', 1),
(4, 2, 'JN002', 'Black Jeans', '11.59', 13, 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, 2, '40.00', 1),
(9, 3, 'VS001', 'Vestido Corto', '15.85', 15, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 7, '0.00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `categoria`, `estado`) VALUES
(1, 'Camisa', 1),
(2, 'Pantalones', 1),
(3, 'Vestidos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `idDetalle` int(11) NOT NULL,
  `idArticulo` int(11) NOT NULL,
  `idVenta` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(20,2) NOT NULL,
  `idTallaArticulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`idDetalle`, `idArticulo`, `idVenta`, `cantidad`, `precio`, `idTallaArticulo`) VALUES
(1, 1, 1, 1, '9.50', 1),
(2, 2, 2, 1, '9.75', 4),
(14, 3, 10, 1, '11.60', 5),
(15, 9, 10, 1, '15.85', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_articulo`
--

CREATE TABLE `imagen_articulo` (
  `idImagen` int(11) NOT NULL,
  `idArticulo` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `portada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagen_articulo`
--

INSERT INTO `imagen_articulo` (`idImagen`, `idArticulo`, `url`, `portada`) VALUES
(1, 1, 'camisa_roja.png', 0),
(2, 1, 'camisa_roja_1.png', 0),
(3, 1, 'camisa_roja_2.png', 0),
(4, 1, 'camisa_roja_3.png', 1),
(5, 2, 'camisa_verde.png', 0),
(6, 2, 'camisa_verde_1.png', 0),
(7, 2, 'camisa_verde_2.png', 1),
(8, 3, 'pantalon_1.png', 0),
(9, 3, 'pantalon_1_1.png', 1),
(10, 4, 'pantalon_2.png', 0),
(11, 4, 'pantalon_2_1.png', 1),
(12, 9, 'vestido_1.png', 0),
(13, 9, 'vestido_1_1.png', 0),
(14, 9, 'vestido_1_2.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `marca`, `estado`) VALUES
(1, 'LACOSTE', 1),
(2, 'LEVI\'S', 1),
(3, 'Calvin Klein', 1),
(7, 'Pull and Bear', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `rol`, `descripcion`, `estado`) VALUES
(1, 'Administrador', 'Personal con permisos para acceder a los modulos administrativos de la plataforma.', 1),
(2, 'Cliente', 'Personal con permisos unicamente para realizar acciones de compra en la plataforma.', 1),
(3, 'Cliente sin usuario', 'Cliente sin usuario', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `talla` (
  `idTalla` int(11) NOT NULL,
  `talla` varchar(10) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`idTalla`, `talla`, `estado`) VALUES
(1, 'S', 1),
(2, 'M', 1),
(3, 'L', 1),
(4, 'XL', 1),
(5, '32 x 30', 1),
(6, '34 x 30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_articulo`
--

CREATE TABLE `talla_articulo` (
  `idTallaArticulo` int(11) NOT NULL,
  `idTalla` int(11) NOT NULL,
  `idArticulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `talla_articulo`
--

INSERT INTO `talla_articulo` (`idTallaArticulo`, `idTalla`, `idArticulo`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 2),
(5, 5, 3),
(6, 6, 4),
(7, 1, 9),
(8, 1, 2),
(9, 6, 3),
(10, 5, 4),
(11, 2, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `clave` varchar(25) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `clave`, `nombre`, `apellido`, `direccion`, `mail`, `telefono`, `estado`, `idRol`) VALUES
(1, 'Admin', '123', 'Rod', 'Va', 'Col. Olimpica, psj \"E\" casa #546', 'rodrigovalladares1@gmail.com', '71526065', 1, 1),
(2, 'ss3', '123', 'Al', 'Mej', 'Col. Guadalajara, psj \"H\" casa #589', 'rodrigovalladares1@gmail.com', '71526065', 1, 2),
(14, '', '', 'Rodrigo Alejandro', 'Mejía', 'Col. Guadalupe Pasaje i #27 Soyapango San Salvador', 'rodrigovalladares1@gmail.com', '71526065', 0, 3),
(15, '', '', 'Rodrigo Alejandro', 'Mejía', 'Col. Guadalupe Pasaje i #27 Soyapango San Salvador', 'rodrigovalladares1@gmail.com', '71526065', 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idVenta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `comprobante` varchar(25) NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(20,2) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idVenta`, `idUsuario`, `comprobante`, `fecha`, `total`, `estado`) VALUES
(1, 2, '0120211012RV', '2021-10-12 10:13:32', '19.25', 1),
(2, 2, '0120211027RV', '2021-10-27 10:13:32', '11.60', 1),
(10, 15, '20211110RM', '2021-11-10 18:16:44', '27.45', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idArticulo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`idDetalle`);

--
-- Indices de la tabla `imagen_articulo`
--
ALTER TABLE `imagen_articulo`
  ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`idTalla`);

--
-- Indices de la tabla `talla_articulo`
--
ALTER TABLE `talla_articulo`
  ADD PRIMARY KEY (`idTallaArticulo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `imagen_articulo`
--
ALTER TABLE `imagen_articulo`
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `idTalla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `talla_articulo`
--
ALTER TABLE `talla_articulo`
  MODIFY `idTallaArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
