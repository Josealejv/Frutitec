-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2024 a las 23:57:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `frutitecbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciosesion`
--

CREATE TABLE `iniciosesion` (
  `id` int(50) NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `iniciosesion`
--

INSERT INTO `iniciosesion` (`id`, `usuario`, `clave`) VALUES
(8, 'joseale', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `idProductoInventario` int(30) NOT NULL,
  `nombreProducto` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `costo` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `movimiento` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`idProductoInventario`, `nombreProducto`, `costo`, `descripcion`, `cantidad`, `movimiento`) VALUES
(1, 'Harina Pan', '20', 'Harina', '60', ''),
(2, 'Mayonesa', '25', 'Galon', '21,6', ''),
(3, 'Salsa de Tomate', '22', 'Galon', '4,2', ''),
(4, 'Maiz ', '25', 'En Latas', '6,0', ''),
(5, 'Queso', '10', 'Semi Duro', '10', ''),
(6, 'Jamon', '20', 'Espalda', '8,0', ''),
(7, 'Parchitas', '5,0', 'Para Jugos', '5,0', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id`, `numero`, `estado`) VALUES
(1, 1, 'activo'),
(2, 2, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroproductos`
--

CREATE TABLE `registroproductos` (
  `idproducto` int(30) NOT NULL,
  `tipo` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `registroproductos`
--

INSERT INTO `registroproductos` (`idproducto`, `tipo`, `nombre`, `descripcion`, `precio`) VALUES
(165, 'Refreso', 'Empanada ', 'Queso', '50,00'),
(166, 'Alimento', 'Empanada ', 'Pollo', '40,00'),
(167, 'Alimento', 'Empanada', 'Carne', '40,00'),
(168, 'Alimento', 'Empanada', 'Charcutera', '80,00'),
(169, 'Jugo', 'Naranja', 'Natural', '40,00'),
(170, 'Refreso', 'Malta', 'Fria', '20,00'),
(171, 'Alimento', 'Pastelito', 'Queso y Champinon', '40,00'),
(172, 'Alimento', 'Empanada', 'Pabellon ', '80,00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_clientes`
--

CREATE TABLE `registro_clientes` (
  `idcliente` int(15) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `registro_clientes`
--

INSERT INTO `registro_clientes` (`idcliente`, `nombre`, `correo`, `celular`) VALUES
(29, 'Juan Linares ', 'juanlinares058@gmailcom', '0412-7906123'),
(31, 'Jose Juarez ', 'Josealejv2712@gmail.com', '0426-2345825'),
(33, 'Emili Luy', '', '0416-1677887');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_pedidos`
--

CREATE TABLE `registro_pedidos` (
  `idpedido` int(15) NOT NULL,
  `idproducto` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombrePedido` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `cantidad` int(20) NOT NULL,
  `precio` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `monto` decimal(10,2) DEFAULT NULL,
  `id_mesa` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_proveedores`
--

CREATE TABLE `registro_proveedores` (
  `idproveedor` int(25) NOT NULL,
  `proveedor` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `contacto` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `registro_proveedores`
--

INSERT INTO `registro_proveedores` (`idproveedor`, `proveedor`, `contacto`, `celular`, `direccion`, `fecha`) VALUES
(24, 'Los pollos hermanos', 'Gustavo Fring ', '616', 'Albuquerque Nuevo Mexico', '2024-05-19'),
(28, 'Quesera Jose', 'Jose Alberto', '0416-753236', 'Monay', '2024-05-30'),
(29, 'Alimentos Polar', 'Lorenzo Mendoza', '0414-123456', 'Las Araujas', '2024-06-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_ventas`
--

CREATE TABLE `registro_ventas` (
  `id_venta` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha` datetime NOT NULL,
  `detalles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro_ventas`
--

INSERT INTO `registro_ventas` (`id_venta`, `id_mesa`, `total`, `fecha`, `detalles`) VALUES
(23, 1, 200.00, '2024-06-30 17:09:04', '[{\"nombre\":\"Naranja Natural\",\"cantidad\":\"5\",\"monto\":\"200.00\"}]'),
(24, 2, 280.00, '2024-06-30 17:32:26', '[{\"nombre\":\"Pastelito Queso y Champinon\",\"cantidad\":\"7\",\"monto\":\"280.00\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `idpedidos` int(20) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`idpedidos`, `nombre`) VALUES
(1, 'Empanada'),
(2, 'Jugo'),
(3, 'Malta'),
(4, 'Pastelito'),
(5, 'Refresco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`idProductoInventario`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registroproductos`
--
ALTER TABLE `registroproductos`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `registro_clientes`
--
ALTER TABLE `registro_clientes`
  ADD PRIMARY KEY (`idcliente`);
ALTER TABLE `registro_clientes` ADD FULLTEXT KEY `nombre` (`nombre`);

--
-- Indices de la tabla `registro_pedidos`
--
ALTER TABLE `registro_pedidos`
  ADD PRIMARY KEY (`idpedido`);

--
-- Indices de la tabla `registro_proveedores`
--
ALTER TABLE `registro_proveedores`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `registro_ventas`
--
ALTER TABLE `registro_ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`idpedidos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `idProductoInventario` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registroproductos`
--
ALTER TABLE `registroproductos`
  MODIFY `idproducto` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT de la tabla `registro_clientes`
--
ALTER TABLE `registro_clientes`
  MODIFY `idcliente` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `registro_pedidos`
--
ALTER TABLE `registro_pedidos`
  MODIFY `idpedido` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `registro_proveedores`
--
ALTER TABLE `registro_proveedores`
  MODIFY `idproveedor` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `registro_ventas`
--
ALTER TABLE `registro_ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `idpedidos` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
