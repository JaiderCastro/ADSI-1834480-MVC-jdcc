-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2020 a las 22:03:49
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios_mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) DEFAULT NULL,
  `contrasenna` char(60) NOT NULL DEFAULT '',
  `level` tinyint(3) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `lastAccess` datetime DEFAULT NULL,
  `session` varchar(32) NOT NULL DEFAULT '',
  `avatar` varchar(15) NOT NULL DEFAULT '',
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `email`, `contrasenna`, `level`, `active`, `lastAccess`, `session`, `avatar`, `timeStamp`) VALUES
(1, 'anderson', 'hyf@gmail.com', '1', 2, 0, NULL, '', '', '2020-08-06 19:34:10'),
(42, 'maria', 'maria@gmail.com', '2', 2, 0, NULL, '', '', '2020-08-25 01:24:08'),
(43, 'pedro', 'anderson@gmail.com', '4', 2, 0, NULL, '', '', '2020-08-25 01:24:36'),
(44, 'luis', 'lui@gmail.com', '3', 1, 0, NULL, '', '', '2020-08-25 01:25:04'),
(45, 'jose', 'jo@gmail.com', '5', 1, 0, NULL, '', '', '2020-08-25 01:26:02'),
(46, 'monicaa', 'mo@gmail.com', '8', 2, 0, NULL, '', '', '2020-08-25 01:26:39'),
(47, 'amenadiel', 'am@gmail.com', '2', 2, 0, NULL, '', '', '2020-08-25 01:27:18'),
(49, 'memphys', 'jd@gmail.com', '41', 1, 0, NULL, '', '', '2020-08-25 01:29:38'),
(50, 'carlos', 'jd@gmail.com', '6', 2, 0, NULL, '', '', '2020-08-25 01:33:06'),
(55, 'de jong', 'jd@gmail.com', '8', 1, 0, NULL, '', '', '2020-08-25 01:51:47'),
(56, 'michaell', 'jjj@gmail.com', '9', 1, 0, NULL, '', '', '2020-08-25 01:57:29'),
(57, 'anibal', 'aaa@gmail.com', '10', 2, 0, NULL, '', '', '2020-08-25 01:58:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
