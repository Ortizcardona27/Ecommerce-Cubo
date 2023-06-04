-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2023 a las 19:53:20
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
-- Base de datos: `cubo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo` varchar(15) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `producto` varchar(70) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` decimal(30,0) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `tipo`, `producto`, `descripcion`, `precio`, `cantidad`) VALUES
('1', '1', 'Telephony 100 Minutes', 'WhatsApp + Twitter + 100 minutes.', 9900, 1),
('2', '1', 'Telephony 300 Minutes', 'WhatsApp + Twitter + Facebook + 300 minutes.', 19900, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo` varchar(15) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `usuario`, `contrasena`, `correo`) VALUES
('1', 'juan', '1234', 'juanrodriguez12@gmail.com'),
('2', 'jose', '43543', 'joselopez@gmail.com'),
('3', 'sebastian', '1127', 'sebastian23@gmail.com'),
('4', 'mariana', 'mariana21', 'mariananaranjo@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
