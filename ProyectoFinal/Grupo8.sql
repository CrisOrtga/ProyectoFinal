-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2023 a las 01:12:30
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tareasegundaparte`
--
DROP DATABASE IF EXISTS `tareasegundaparte`;
CREATE DATABASE IF NOT EXISTS `tareasegundaparte` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tareasegundaparte`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `telefono`, `correo_electronico`, `rol`) VALUES
(4, 'Cristhina', 'Ortega', '0987564487', 'cristhinao@gmail.com', 'admin'),
(8, 'Maria Jose', 'Zuñiga', '0987564', 'mariajose@gmail.com', 'usuario'),
(9, 'Christian', 'Albia', '0986519685', 'chrisalbia@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Id_Factura` int(11) NOT NULL,
  `Fecha_compra` date NOT NULL,
  `Cliente` varchar(255) NOT NULL,
  `Producto` varchar(255) NOT NULL,
  `Precio` float NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`Id_Factura`, `Fecha_compra`, `Cliente`, `Producto`, `Precio`, `Cantidad`, `Total`) VALUES
(1, '2023-08-09', 'Keysha Cortez', 'Camiseta Sublimada', 10, 1, 10),
(2, '2023-08-10', 'Sergio Torres', 'Taza ceramica', 3.5, 2, 7),
(3, '2023-08-04', 'Carolina Montalvan', 'Stickers', 2.5, 1, 2.5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(3) NOT NULL,
  `codigo` int(5) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `disponibilidad` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `descripcion`, `valor`, `disponibilidad`) VALUES
(1, 10001, 'Camiseta estampada', 'personalizada a su eleccion ', 8, 'disponible'),
(2, 10002, 'Camiseta subimada', 'personalizada a su eleccion', 10, 'disponible'),
(3, 10003, 'almohada', 'personalizada a su eleccion', 6, 'agotado'),
(5, 10005, 'Termo', 'personalizado con sticker', 7, 'disponible'),
(6, 10006, 'Stickers', 'personalizados x30', 2.5, 'disponible'),
(7, 10007, 'gorras', 'personalizada a su eleccion', 4, 'agotado'),
(8, 10004, 'Gorras', 'Gorras Camioneras', 10, 'agotado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'ADMIN'),
(2, 'USER'),
(3, 'VENDEDOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `descripcion` varchar(90) NOT NULL,
  `duracion` varchar(50) NOT NULL,
  `modalidad` varchar(50) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `descripcion`, `duracion`, `modalidad`, `precio`) VALUES
(1, 'Taller de Sublimacion', 'Taller sobre las mejores t&eacute;cnicas de sublimaci&oacute;n. Duraci&oacute;n 2 horas di', '2 Semanas', 'En linea', 25),
(3, 'Taller &quot;Mi primera impresi&oacute;n&quot; ', 'Taller sobre como empezar tu propio negocio de sublimacion.\r\nDuracion: 1 Mes', '1 Semana', 'Presencial', 40),
(4, 'Taller', 'Mi primer envio', '2 Semanas', 'Presencial', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `enabled`, `id_role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin@admin.com', 1, 1),
(2, 'user', 'Usuario', 'Usuario', 'user', 'user@user.com', 1, 2),
(3, 'Vendedor', 'Vendedor', 'Vendedor', 'venta', 'vendedor@vventa.com', 1, 3),
(6, 'Cristhi', 'Cristhina', 'Ortega', '12345', 'cris.proyect@ug.com', 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Id_Factura`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_fk` (`id_role`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `Id_Factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `roles_fk` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
