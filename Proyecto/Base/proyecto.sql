-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2021 a las 22:59:55
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_nata`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE DATABASE IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `proyecto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `Rut` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Giro` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Comuna` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Region` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Rut`, `Nombre`, `Giro`, `Direccion`, `Comuna`, `Ciudad`, `Region`) VALUES
('93.457.289-7', 'Juan Jose', 'Informatica', 'Av matta 123', 'Santiago', 'Santiago Centro', 'Metropolitana'),
('26.375.498-0', 'Julio Andres', 'Construccion', 'Av santa rosa 123', 'La Florida', 'La Florida Central', 'Metropolitana'),
('22.234.234-0', 'Julian', 'Retail', 'av santa rosa 123', 'Santiago', 'Santiago Centro', 'Metropolitana'),
('12.234.234-k', 'Andrea', 'Informatica', 'arturo prat 2020', 'Estacion Central', 'Estación Central', 'Metropolitana'),
('22.222.222-k', 'victor aguilar', 'administacion', 'maria luisa ', 'san bernardo', 'san bernardo', 'metropolitana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--
DROP TABLE IF EXISTS `documento`;

CREATE TABLE `documento` (
  `id_documento` int(11) NOT NULL,
  `numero_documento` int(11) NOT NULL,
  `tipo_documento` int(11) NOT NULL,
  `fecha_emision` date NOT NULL,
  `rut_empresa` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `rut_cliente` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `cod_producto` int(11) NOT NULL,
  `referencias` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_pago` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--
DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa` (
  `rut` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `RazonSocial` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Giro` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`rut`, `RazonSocial`, `Giro`, `Direccion`) VALUES
('98.766.789-7', 'Falabella', 'Venta de Ropa', 'Av matta'),
('11.111.111-1', 'REPI TELRAMO ELECTRONICS LTDA.', 'Informatica', 'Av Cerro el Plomo 5555'),
('99.988.876-7', 'Sodimac', 'Venta de materiales', 'Av santa rosa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--
DROP TABLE IF EXISTS `factura`;

CREATE TABLE `factura` (
  `Folio` int(11) NOT NULL,
  `FechaFactura` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `rut_Cliente` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `rut_Empresa` varchar(13) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--
DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `usr_name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usr_pass` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usr_desc` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usr_name`, `usr_pass`, `usr_desc`) VALUES
('admin', 'admin', 'admin'),
('operador', 'operador', 'operador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--
DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `Nro` int(11) NOT NULL,
  `Codigo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Stock` int(11) NOT NULL,
  `Precio_Unitario` longtext COLLATE utf8_spanish_ci NOT NULL,
  `Unidad_Medida` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Nro`, `Codigo`, `Descripcion`, `Stock`, `Precio_Unitario`, `Unidad_Medida`) VALUES
(1, 'VENT001', 'Ventilador Cooler Master Hyper TX3 EVO', 10, '20.000', ''),
(2, 'VENT002', 'Ventilador Arctic Freezer 13 X.\r\n', 15, '20.000', ''),
(3, 'VENT003', 'Ventilador Cooler Master Hyper 212X', 5, '30.000', ''),
(4, 'MOUS001', ' Mouse Logitech B100. Logitech B100', 20, '40.000', ''),
(5, 'MOUS002', 'Mouse Logitech M185. Logitech M185', 15, '30.000', ''),
(6, 'MOUS003', 'Mouse Logitech M220 Silent', 20, '35.000', ''),
(7, 'MONIT001', 'Monitor ACER', 10, '100.000', ''),
(8, 'MONIT002', 'Monitor AG Neovo', 10, '105.000', ''),
(9, 'MONIT003', 'Monitor AOC', 15, '100.000', ''),
(10, 'TECLA001', 'Teclado Microsoft Ergonomic 4000', 20, '100.000', ''),
(11, 'TECLA002', 'Teclado Logitech Illuminated Keyboard K740', 15, '200.000', ''),
(12, 'TECLA003', 'Teclado Corsair K70 MKxx', 10, '200.000', ''),
(17, 'VENTI005', 'Papel periodico', 1, '100.000', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--
DROP TABLE IF EXISTS `tipo_documento`;

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL,
  `documento` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `documento`) VALUES
(1, 'Factura'),
(2, 'Venta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Rut`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `fk_tipo_documento` (`tipo_documento`),
  ADD KEY `fk_rut_cliente` (`rut_cliente`),
  ADD KEY `fk_rut_empresa` (`rut_empresa`),
  ADD KEY `fk_cod_producto` (`cod_producto`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Folio`),
  ADD UNIQUE KEY `rut_rut_cliente` (`rut_Cliente`),
  ADD UNIQUE KEY `rut_rut_empresa` (`rut_Empresa`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usr_name`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Nro`),
  ADD UNIQUE KEY `CodigoP` (`Codigo`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Nro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `fk_tipo_documento` FOREIGN KEY (`tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`);
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
