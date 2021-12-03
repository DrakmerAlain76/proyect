-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 07:33:03
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE `accesos` (
  `id` int(3) NOT NULL,
  `nuser` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `hora` time NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`id`, `nuser`, `fecha`, `hora`, `tipo`) VALUES
(26, '123', '2020-08-20', '23:31:54', 0),
(27, '123', '2020-08-20', '23:40:48', 0),
(28, '456', '2020-09-07', '17:53:39', 0),
(29, '456', '2020-09-09', '10:33:55', 0),
(30, '159', '2020-09-09', '10:34:50', 0),
(31, '456', '2020-09-09', '11:00:59', 0),
(32, '456', '2020-09-09', '11:19:04', 0),
(33, '456', '2020-09-09', '11:21:36', 0),
(34, '456', '2020-09-09', '11:23:57', 0),
(35, 'usuario', '2020-09-09', '11:26:51', 0),
(36, '456', '2020-09-09', '11:32:25', 0),
(37, '456', '2020-09-09', '22:26:23', 0),
(38, '456', '2020-09-09', '22:52:46', 0),
(39, '456', '2020-09-09', '23:00:36', 0),
(40, '456', '2020-09-10', '00:36:01', 0),
(41, '456', '2020-09-10', '00:46:26', 0),
(42, '456', '2020-09-10', '01:31:44', 0),
(43, '456', '2020-09-10', '18:45:34', 0),
(44, '456', '2020-09-10', '18:46:24', 0),
(45, '456', '2020-09-10', '18:49:32', 0),
(46, '456', '2020-09-10', '18:52:26', 0),
(47, '456', '2020-09-10', '18:54:43', 0),
(48, '456', '2020-09-10', '18:56:52', 0),
(49, '456', '2020-09-10', '18:59:50', 0),
(50, '456', '2020-09-10', '21:25:22', 0),
(51, '456', '2020-09-10', '21:58:35', 0),
(52, '456', '2020-09-10', '22:11:52', 0),
(53, '456', '2020-09-10', '22:13:10', 0),
(54, '456', '2020-09-10', '22:16:22', 0),
(55, '456', '2020-09-10', '22:17:51', 0),
(56, '456', '2020-09-10', '23:32:43', 0),
(57, '456', '2020-09-11', '00:43:26', 0),
(58, '456', '2020-09-12', '17:26:38', 0),
(59, '456', '2020-09-12', '23:58:18', 0),
(60, '456', '2020-09-15', '23:05:45', 0),
(61, '456', '2020-09-15', '23:21:54', 0),
(62, '456', '2020-09-24', '02:01:23', 0),
(63, '456', '2020-09-24', '02:02:22', 0),
(64, '456', '2020-09-24', '02:30:54', 0),
(65, '456', '2020-09-24', '02:52:16', 0),
(66, 'juan', '2020-09-24', '03:06:16', 0),
(67, '456', '2020-09-24', '23:27:28', 0),
(68, '456', '2020-09-25', '00:01:33', 0),
(69, '456', '2020-09-25', '00:22:49', 0),
(70, '456', '2020-09-25', '00:36:14', 0),
(71, '456', '2020-09-25', '02:18:32', 1),
(72, '456', '2020-09-25', '02:19:09', 1),
(73, 'usuario', '2020-09-25', '02:19:32', 1),
(74, '456', '2020-09-25', '02:19:39', 1),
(75, '456', '2020-09-25', '02:28:10', 0),
(76, '456', '2020-09-25', '02:30:13', 1),
(77, 'usuario', '2020-09-25', '02:30:37', 2),
(78, '456', '2020-09-25', '02:30:48', 1),
(79, '', '2020-09-25', '02:31:49', 1),
(80, '', '2020-09-25', '02:32:28', 1),
(81, '456', '2020-09-25', '02:32:44', 1),
(82, '456', '2020-09-25', '02:35:04', 0),
(83, '456', '2020-09-25', '02:36:01', 1),
(84, '456', '2020-09-25', '02:36:25', 1),
(85, '456', '2020-09-25', '02:39:53', 1),
(86, 'usuario', '2020-09-25', '02:40:10', 2),
(87, '456', '2020-09-25', '02:40:17', 1),
(88, '456', '2020-09-30', '01:44:15', 1),
(89, '456', '2020-09-30', '02:17:57', 1),
(90, '456', '2020-09-30', '02:31:15', 1),
(91, '456', '2020-09-30', '11:12:36', 1),
(92, '456', '2020-09-30', '23:22:09', 1),
(93, '456', '2020-10-01', '01:36:31', 1),
(94, '456', '2020-10-10', '14:37:57', 1),
(95, 'juan', '2020-10-10', '14:38:35', 2),
(96, 'juan', '2020-10-10', '14:39:21', 2),
(97, 'juan', '2020-10-10', '14:40:44', 2),
(98, '456', '2020-10-10', '14:42:59', 1),
(99, 'juan', '2020-10-10', '14:45:29', 2),
(100, '456', '2020-10-10', '14:48:19', 1),
(101, 'juan', '2020-10-10', '14:48:41', 2),
(102, '456', '2020-10-10', '14:49:34', 1),
(103, 'juan', '2020-10-10', '14:49:53', 2),
(104, '456', '2020-10-10', '14:55:49', 1),
(105, 'juan', '2020-10-10', '14:55:58', 2),
(106, '456', '2020-10-10', '15:00:07', 1),
(107, 'juan', '2020-10-10', '15:02:08', 2),
(108, 'juan', '2020-10-10', '17:25:12', 2),
(109, '456', '2020-10-10', '21:13:44', 1),
(110, 'juan', '2020-10-10', '21:57:34', 2),
(111, '456', '2020-10-10', '23:20:41', 1),
(112, 'juan', '2020-10-10', '23:22:44', 2),
(113, '456', '2020-10-10', '23:25:18', 1),
(114, '456', '2020-10-11', '00:39:10', 1),
(115, '456', '2020-10-11', '01:42:25', 1),
(116, '456', '2020-10-11', '02:12:30', 1),
(117, '456', '2020-10-11', '02:22:54', 1),
(118, '456', '2020-10-11', '02:25:33', 1),
(119, '456', '2020-10-11', '02:31:52', 1),
(120, '456', '2020-10-11', '22:27:48', 1),
(121, '456', '2020-10-11', '22:41:09', 1),
(122, '456', '2020-10-11', '22:59:25', 1),
(123, '456', '2020-10-12', '01:20:18', 1),
(124, '456', '2020-10-12', '01:46:05', 1),
(125, '456', '2020-10-12', '01:57:20', 1),
(126, '456', '2020-10-12', '02:16:21', 1),
(127, '456', '2020-10-12', '02:30:10', 1),
(128, '456', '2020-10-12', '02:32:42', 1),
(129, '456', '2020-10-12', '02:40:10', 1),
(130, '456', '2020-10-12', '02:52:36', 1),
(131, '456', '2020-10-21', '03:03:17', 1),
(132, '456', '2020-10-21', '03:18:45', 1),
(133, '456', '2020-10-21', '03:24:50', 1),
(134, '456', '2020-10-21', '03:27:20', 1),
(135, '456', '2020-10-21', '03:51:21', 1),
(136, '456', '2020-10-21', '03:55:24', 1),
(137, '456', '2020-10-21', '09:43:08', 1),
(138, '456', '2020-10-21', '09:57:09', 1),
(139, '456', '2020-10-21', '10:32:48', 1),
(140, '456', '2020-10-21', '10:51:34', 1),
(141, '456', '2020-10-21', '11:37:42', 1),
(142, '456', '2020-10-22', '00:44:32', 1),
(143, '456', '2020-10-22', '00:56:03', 1),
(144, '456', '2020-10-23', '00:23:42', 1),
(145, '456', '2020-10-23', '00:26:54', 1),
(146, '456', '2020-10-23', '00:52:11', 1),
(147, '456', '2020-10-23', '00:54:41', 1),
(148, '456', '2020-10-23', '02:29:29', 1),
(149, '456', '2020-10-23', '02:35:40', 1),
(150, '456', '2020-10-23', '02:56:40', 1),
(151, '456', '2020-10-23', '02:59:34', 1),
(152, '456', '2020-10-23', '09:29:20', 1),
(153, '456', '2020-10-23', '09:30:08', 1),
(154, 'juan', '2020-10-23', '09:30:25', 2),
(155, '456', '2020-10-23', '09:36:05', 1),
(156, '456', '2020-10-23', '09:38:15', 1),
(157, '456', '2020-10-23', '09:39:44', 1),
(158, '456', '2020-10-23', '09:49:19', 1),
(159, '456', '2021-11-15', '22:13:34', 1),
(160, '456', '2021-11-16', '01:46:05', 1),
(161, '456', '2021-11-17', '02:28:49', 1),
(162, '456', '2021-11-19', '04:04:05', 1),
(163, '456', '2021-11-19', '04:15:38', 1),
(164, '456', '2021-11-19', '15:58:08', 1),
(165, '456', '2021-11-19', '16:12:28', 1),
(166, '456', '2021-11-19', '16:13:55', 1),
(167, '456', '2021-11-19', '16:14:09', 1),
(168, '456', '2021-11-19', '17:13:22', 1),
(169, '456', '2021-11-19', '17:20:56', 1),
(170, '456', '2021-11-19', '17:22:02', 1),
(171, '456', '2021-11-19', '17:24:04', 1),
(172, '456', '2021-11-19', '17:25:32', 1),
(173, '456', '2021-11-19', '17:25:49', 1),
(174, '456', '2021-11-19', '17:26:54', 1),
(175, '456', '2021-11-19', '18:00:32', 1),
(176, '456', '2021-11-19', '18:01:42', 1),
(177, '456', '2021-11-19', '19:15:09', 1),
(178, '456', '2021-11-19', '22:56:06', 1),
(179, '456', '2021-11-20', '01:13:33', 1),
(180, '456', '2021-11-20', '01:26:52', 1),
(181, '456', '2021-11-20', '01:28:45', 1),
(182, '456', '2021-11-20', '01:30:28', 1),
(183, '456', '2021-11-21', '16:10:37', 1),
(184, '456', '2021-11-24', '01:07:06', 1),
(185, '456', '2021-11-24', '14:13:18', 1),
(186, '456', '2021-11-24', '14:22:48', 1),
(187, '456', '2021-11-24', '14:34:25', 1),
(188, '456', '2021-11-24', '15:50:01', 1),
(189, '456', '2021-12-01', '14:23:54', 1),
(190, '456', '2021-12-01', '14:24:59', 1),
(191, '456', '2021-12-01', '23:06:21', 1),
(192, '456', '2021-12-02', '02:25:36', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `cod_medi` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `h` time NOT NULL,
  `f` date NOT NULL,
  `medi_ci` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicamento`
--

INSERT INTO `medicamento` (`cod_medi`, `nombre`, `h`, `f`, `medi_ci`) VALUES
(8, 'parasetamol', '16:26:00', '2021-11-26', '555');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `ci` varchar(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `celular` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`ci`, `nombre`, `apellido`, `celular`) VALUES
('1111', 'pedro', 'estradad', 7897),
('555', 'JUAN', 'vargas', 79433612);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `cod_pago` int(10) NOT NULL,
  `tratamiento` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `costo` int(10) NOT NULL,
  `costo_total` int(10) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `ci_pago` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`cod_pago`, `tratamiento`, `descripcion`, `costo`, `costo_total`, `hora`, `fecha`, `ci_pago`) VALUES
(3, 'ORTODONCIA', '4566645', 555, 456546, '04:43:00', '2021-11-11', '555');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ci` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `n` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `m` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `h` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `f` date NOT NULL,
  `obs` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `me` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ci`, `n`, `m`, `h`, `f`, `obs`, `me`) VALUES
('85564', '1231', '123', '123', '0000-00-00', '123', '12321'),
('85564', '1231', '123', '123', '0000-00-00', '123', '12321'),
('123', '123', '123', '9', '0000-00-00', '', ''),
('123546', '123', '4564', '9', '2020-09-11', 'obs', ''),
('123456', 'juan', '4564', '9', '2020-09-12', '', ''),
('145', '4564', '12354', '9', '2020-09-27', 'obs', ''),
('145', '4564', '12354', '9', '2020-09-27', '', ''),
('456', '456', '465454', '9', '0000-00-00', '', ''),
('456', '456', '465454', '9', '0000-00-00', 'Ocupado', ''),
('456', '456', '465454', '10', '0000-00-00', 'Ocupado', ''),
('456', '456', '465454', '11', '0000-00-00', 'Ocupado', ''),
('123456', '456', '465454', '12', '0000-00-00', 'Ocupado', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `cod_reserva` int(10) NOT NULL,
  `h` time NOT NULL,
  `f` date NOT NULL,
  `ci_reserva` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id` int(3) NOT NULL,
  `ci` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contrase` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id`, `ci`, `usuario`, `contrase`, `nombre`, `apellidos`, `email`, `tipo`) VALUES
(43, '123456', '456', '456', '456', '456', '456', 1),
(47, '111111', 'usuario', '123', 'juan', 'vargas lopez', 'vargas_@gmail.com', 2),
(50, '857456', 'juan', 'juan', 'pedro', 'estrada', '71836287@gmail.com', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`cod_medi`),
  ADD KEY `ci_medicamento` (`medi_ci`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`cod_pago`),
  ADD UNIQUE KEY `ci_pago` (`ci_pago`),
  ADD KEY `ci_pago_2` (`ci_pago`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`cod_reserva`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `cod_medi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `cod_pago` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `cod_reserva` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD CONSTRAINT `ci_medicamento` FOREIGN KEY (`medi_ci`) REFERENCES `paciente` (`ci`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `ci` FOREIGN KEY (`ci_pago`) REFERENCES `paciente` (`ci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
