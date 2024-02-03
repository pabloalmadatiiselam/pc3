-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2024 a las 20:00:27
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
-- Base de datos: `pc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE `obras` (
  `obr_ide` int(3) NOT NULL COMMENT 'Identificador de obra',
  `obr_tip` int(1) NOT NULL,
  `obr_nom` varchar(200) NOT NULL COMMENT 'Nombre de la obra',
  `obr_des` varchar(2000) NOT NULL COMMENT 'Descripción de la obra'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Obras realizadas y nuevas';

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`obr_ide`, `obr_tip`, `obr_nom`, `obr_des`) VALUES
(1, 1, '10 Viviendas - Olegario Victor Andrade', 'Construcción de 10 viviendas pertenecientes a Victor Andrade Olegario.'),
(2, 1, 'Esculea 760 Santiago de Liniers', 'Este es un obra de  una escuela  realizada realizada en Santiago de liniers'),
(3, 1, 'Playón deportivo Barrio Laure', 'Este es una obra hecha perteneciente a un playó, del Barrio Laure.'),
(4, 2, 'obra 1', 'Este es una obra nueva que se está haciendo en Oberá.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`obr_ide`);
ALTER TABLE `obras` ADD FULLTEXT KEY `indfut` (`obr_nom`,`obr_des`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `obras`
--
ALTER TABLE `obras`
  MODIFY `obr_ide` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de obra', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
