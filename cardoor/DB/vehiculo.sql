-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-01-2019 a las 09:51:01
-- Versión del servidor: 5.6.38
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vehiculo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coches`
--

CREATE TABLE `coches` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `matricula` varchar(100) DEFAULT NULL,
  `marca` varchar(60) DEFAULT NULL,
  `modelo` varchar(200) DEFAULT NULL,
  `fabricante` varchar(200) DEFAULT NULL,
  `combus` varchar(200) DEFAULT NULL,
  `extra` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL,
  `puertas` varchar(200) DEFAULT NULL,
  `caballos` varchar(200) DEFAULT NULL,
  `marchas` varchar(200) DEFAULT NULL,
  `velocidad` varchar(200) DEFAULT NULL,
  `motor` varchar(200) DEFAULT NULL,
  `date_fabric` varchar(200) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `imagen` varchar(50) NOT NULL,
  `precio` varchar(15) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `coches`
--

INSERT INTO `coches` (`id`, `tipo`, `matricula`, `marca`, `modelo`, `fabricante`, `combus`, `extra`, `color`, `puertas`, `caballos`, `marchas`, `velocidad`, `motor`, `date_fabric`, `hora`, `fecha`, `imagen`, `precio`) VALUES
(1, 'Deportivo', '8645HCX', 'Mercedes', 'GLA', 'mercedes', 'hybrid', 'Ruedas', 'verde', '3', '290', '6', '250', 'v12', '2018-01-02', NULL, NULL, 'mercedes.png', '27400'),
(2, 'turismo', '8492KRF', 'Seat', 'Leon', 'Auvi', 'Diesel', 'Ruedas', 'azul', '5', '130', '6', '260', 'v6', '03/10/2018', NULL, NULL, 'seat.png', '16700'),
(3, 'Todoterreno', '8457CFF', 'Ford', 'Focus', 'Ford', 'Gasolina', 'WIFI', 'Azul', '5', '120', '5', '175', 'v6', '05/09/2015', NULL, NULL, 'ford.png', '13700');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
