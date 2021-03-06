-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2021 a las 15:46:16
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `moda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(10) NOT NULL,
  `est_descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `est_descripcion`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `nompro` varchar(35) NOT NULL,
  `color` varchar(16) NOT NULL,
  `talla` varchar(2) NOT NULL,
  `ubicacion` varchar(15) NOT NULL,
  `inventario` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `ida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `nompro`, `color`, `talla`, `ubicacion`, `inventario`, `estado`, `ida`) VALUES
(421915, 'GALA ANTIACIDO SUSPENSION ORAL', 'UNICO - 19', 'X', 'V.PLENA 1-4', 135, 0, 1),
(421920, 'DETENS SUPLEMENTO DIETARIO', 'UNICO - 19', 'X', 'V.PLENA 1-2', 132, 0, 2),
(421979, 'TAPA BOCA 3 CPAS CAJA X 50 UN', 'UNICO - 19', 'X', 'V.PLENA ', 276, 0, 3),
(513244, 'PURA GEL CASTANO DE INDIAS', 'UNICO - 19', 'X', 'V.PLENA 7-4', 338, 0, 4),
(513269, 'ESTRO CONTROL *30', 'UNICO - 19', 'X', 'V.PLENA 11-4', 47, 0, 5),
(513269, 'ESTRO CONTROL *30', 'UNICO - 19', 'X', 'V.PLENA 11-4', 47, 0, 7),
(519570, 'FIBRA', 'UNICO - 19', 'X', 'V.PLENA 5-4', 304, 0, 9),
(519806, 'PERFUME FEROMONAS DAMA', 'UNICO - 19', 'X', 'V.PLENA 1-4', 157, 0, 10),
(519888, 'TINTE CREMA HEDALY PLUS RUBIO', 'UNICO - 19', 'X', 'V.PLENA 3-5', 45, 0, 11),
(519939, 'GELISAN', 'UNICO - 19', 'X', 'V.PLENA 4-1', 248, 0, 12),
(519956, 'EXFOLIANTE CON CARBON ACTIVADO', 'UNICO - 19', 'X', 'V.PLENA ', 188, 0, 13),
(520004, 'MASCARILLA GUSANO CAPILAR', 'UNICO - 19', 'X', 'V.PLENA 12-2', 175, 0, 14),
(520013, 'CREMA PARA MANOS Y CUERPO', 'UNICO - 19', 'X', 'V.PLENA ', 110, 0, 15),
(520063, 'LECHE ALMENDRAS', 'UNICO - 19', 'X', 'V.PLENA 12-6', 60, 0, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idp_proveedor` int(10) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `direccion` varchar(35) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `correo_provee` varchar(50) NOT NULL,
  `corr_p` varchar(50) NOT NULL,
  `banco` varchar(50) NOT NULL,
  `tipo_cuenta` varchar(50) NOT NULL,
  `n_cuenta` varchar(50) NOT NULL,
  `CiudadNombre` varchar(35) NOT NULL,
  `id_estado` varchar(20) NOT NULL,
  `nombreDistrito` varchar(35) NOT NULL,
  `PaisNombre` varchar(35) NOT NULL,
  `PaisCodigo` varchar(3) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `telefono_dos` varchar(20) NOT NULL,
  `telefono_tres` varchar(20) NOT NULL,
  `telefono_cua` varchar(20) NOT NULL,
  `nombrec` varchar(50) NOT NULL,
  `apec` varchar(50) NOT NULL,
  `correoc` varchar(50) NOT NULL,
  `celularc` varchar(20) NOT NULL,
  `telc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idp_proveedor`, `nit`, `pass`, `nombre`, `direccion`, `correo`, `correo_provee`, `corr_p`, `banco`, `tipo_cuenta`, `n_cuenta`, `CiudadNombre`, `id_estado`, `nombreDistrito`, `PaisNombre`, `PaisCodigo`, `telefono`, `telefono_dos`, `telefono_tres`, `telefono_cua`, `nombrec`, `apec`, `correoc`, `celularc`, `telc`) VALUES
(421978, 'feb 16 2021', '', '', '', '', '', '', '', '', '', '', '2', '', '', '', '519874 - CREMA CON G', '', '', '', '', '', '', '', ''),
(528055, 'Feb 17 2021', '12', 'MARIA LUZ IBARRA', '2', '210', '', '', '3', '4', '', '', '1', '', '', '', '516019 - POMADA HEMP', 'UNICO - 19', 'X', 'V. PLENA 13-3', '0', '0', '0', '0', '0'),
(528062, 'feb 15 2021', '11', 'ALICIA GIL RIOS', '1', '90', '', '', '1', '9', '', '', '1', '', '', '', '519806- PERFUME FERO', 'UNICO - 19', 'X', 'V. PLENA 13-1', '1', '2', '3', '4', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `apellido` varchar(300) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `id_cargo` int(11) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `nivel` int(11) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `identificacion`, `direccion`, `telefono`, `celular`, `id_cargo`, `clave`, `nivel`, `estado`) VALUES
(10, 'Nelson', 'Bedoya', 'nebe', '6952110', '2147483647', '', 1, '981017', 5, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vidaplena`
--

CREATE TABLE `vidaplena` (
  `contador` int(5) NOT NULL,
  `idpedido` int(10) NOT NULL,
  `idlote` int(10) NOT NULL,
  `cedulagere` int(13) NOT NULL,
  `nombregere` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `referenc` varchar(10) NOT NULL,
  `color` varchar(12) NOT NULL,
  `talla` varchar(5) NOT NULL,
  `cantsol` int(4) NOT NULL,
  `ubica` varchar(20) NOT NULL,
  `inv` int(5) NOT NULL,
  `cantvend` int(5) NOT NULL,
  `id_estado` int(2) NOT NULL,
  `nompro` varchar(30) NOT NULL,
  `codba` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vidaplena`
--

INSERT INTO `vidaplena` (`contador`, `idpedido`, `idlote`, `cedulagere`, `nombregere`, `fecha`, `referenc`, `color`, `talla`, `cantsol`, `ubica`, `inv`, `cantvend`, `id_estado`, `nompro`, `codba`) VALUES
(1, 527849, 1882080, 1107521156, 'YULI YOHANA SANCHEZ', '2021-02-18', '421915', 'UNICO - 19', 'X', 2, 'V.PLENA 1-4', 135, 2, 1, 'GALA ANTIACIDO SUSPENSION ORAL', '421915-X-19'),
(2, 527849, 1882080, 1107521156, 'YULI YOHANA SANCHEZ', '2021-02-18', '421920', 'UNICO - 19', 'X', 1, 'V.PLENA 1-5', 300, 1, 1, 'DETENS SUPLEMENTO DIETARIO', '421920-X-19'),
(3, 527849, 1882080, 1107521156, 'YULI YOHANA SANCHEZ', '2021-02-18', '421979', 'UNICO - 19', 'X', 5, 'V.PLENA 7-4', 132, 5, 1, 'TAPA BOCA 3 CPAS CAJA X 50 UN', '421979-X-19'),
(4, 525785, 1882785, 1007521155, 'ANDRES CASTAÑO', '2021-02-18', '519570', 'UNICO - 19', 'X', 3, 'V.PLENA 1-5', 5, 0, 1, 'FIBRA', '519570-X-19'),
(5, 525785, 1882785, 1007521155, 'ANDRES CASTAÑO', '2021-02-18', '519939', 'UNICO - 19', 'X', 2, 'V.PLENA 7-4', 10, 0, 1, 'GELISAN', '519939-X-19'),
(6, 5279899, 1952095, 511485932, 'EDUARDO ANTONIO PANQUEVA', '2021-02-19', '520131', 'UNICO - 19', 'X', 1, 'V.PLENA 6-2', 132, 1, 1, 'VINAGRE DE MANZANA', '520131-X-19'),
(7, 527849, 1882080, 1107521156, 'YULI YOHANA SANCHEZ', '2021-02-18', '519888', 'UNICO - 19', 'X', 4, 'V.PLENA 3-5', 320, 4, 1, 'TINTE CREMA HEDALY PLUS RUBIO', '519888-X-19'),
(8, 5279849, 1952095, 511485932, 'EDUARDO ANTONIO PANQUEVA', '2021-02-19', '520004', 'UNICO - 19', 'X', 1, 'V.PLENA 12-2', 5, 1, 1, 'MASCARILLA CAPILAR GUSANO Y AL', '520004-X-19'),
(9, 5279899, 1952095, 511485932, 'EDUARDO ANTONIO PANQUEVA', '2021-02-19', '520132', 'UNICO - 19', 'X', 3, 'V.PLENA 4-6', 80, 3, 1, 'MULTIKIDS', '520132-X-19'),
(10, 5279899, 1952095, 511485932, 'EDUARDO ANTONIO PANQUEVA', '2021-02-19', '513269', 'UNICO - 19', 'X', 2, 'V.PLENA 11-4', 51, 2, 1, 'ESTRO CONTROL 30', '513269-X-19'),
(11, 5279899, 1952095, 511485932, 'EDUARDO ANTONIO PANQUEVA', '2021-02-19', '520013', 'UNICO - 19', 'X', 4, 'V.PLENA', 846, 4, 1, 'CREMA PARA MANOS Y CUERPO', '520013-X-19'),
(12, 5279899, 1952095, 511485932, 'EDUARDO ANTONIO PANQUEVA', '2021-02-19', '520134', 'UNICO - 19', 'X', 3, 'V.PLENA 7-6', 244, 3, 1, 'TOALLITA HUMEDA BABY CARE', '520134-X-19'),
(13, 527986, 1885580, 1101456341, 'JULIETH MONTENEGRO', '2021-02-23', '520132', 'UNICO - 19', 'X', 2, 'V.PLENA 4-6', 135, 2, 2, 'MULTIKIDS', '520132-X-19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ida`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idp_proveedor`),
  ADD KEY `PaisCodigo` (`PaisCodigo`),
  ADD KEY `PaisNombre` (`PaisNombre`),
  ADD KEY `NombreDistrito` (`nombreDistrito`),
  ADD KEY `descripcionpr` (`n_cuenta`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `CiudadNombre` (`CiudadNombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vidaplena`
--
ALTER TABLE `vidaplena`
  ADD PRIMARY KEY (`contador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idp_proveedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=528063;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `vidaplena`
--
ALTER TABLE `vidaplena`
  MODIFY `contador` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
