-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2020 a las 22:35:43
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- Base de datos: `basewebsite`
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaswebsite`
--

CREATE TABLE `tablaswebsite` (
  `numero` int(100) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `puesto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `numerodeempleado` int(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o1` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o2` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o3` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o4` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o5` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o6` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o7` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o8` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o9` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o10` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o11` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o12` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o13` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o14` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o15` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o16` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o17` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o18` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o19` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o20` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o21` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o22` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o23` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o24` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o25` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o26` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o27` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o28` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o29` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o30` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o31` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o32` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o33` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o34` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o35` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o36` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o37` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o38` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o39` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o40` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o41` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o42` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o43` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o44` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o45` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `o46` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tablaswebsite`
--

INSERT INTO `tablaswebsite` (`numero`,`nombre`,`puesto`,`fecha`,`numerodeempleado`, `o1`,`o2`,`o3`,`o4`,
`o5`,`o6`,`o7`,`o8`,`o9`,`o10`,`o11`,`o12`,`o13`,`o14`,`o15`,
`o16`,`o17`,`o18`,`o19`,`o20`,`o21`,`o22`,`o23`,`o24`,`o25`,
`o26`,`o27`,`o28`,`o29`,`o30`,`o31`,`o32`,`o33`,`o34`,`o35`,
`o36`,`o37`,`o38`,`o39`,`o40`,`o41`,`o42`,`o43`,`o44`,`o45`,
`o46`) VALUES(1,'','','','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
'','','','','','','','','','','', '','','','','');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tablaswebsite`
--
ALTER TABLE `tablaswebsite`
  ADD PRIMARY KEY (`numero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tablaswebsite`
--
ALTER TABLE `tablaswebsite`
  MODIFY `numero` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
