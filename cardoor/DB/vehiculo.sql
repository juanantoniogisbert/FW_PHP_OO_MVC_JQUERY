-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-01-2019 a las 08:51:45
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
  `precio` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `gama` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `coches`
--

INSERT INTO `coches` (`id`, `tipo`, `matricula`, `marca`, `modelo`, `fabricante`, `combus`, `extra`, `color`, `puertas`, `caballos`, `marchas`, `velocidad`, `motor`, `date_fabric`, `hora`, `fecha`, `imagen`, `precio`, `gama`) VALUES
(1, 'Deportivo', '8645HCX', 'Mercedes', 'GLA', 'mercedes', 'hybrid', 'Ruedas', 'verde', '3', '290', '6', '250', 'v12', '2018-01-02', NULL, NULL, 'view/assets/img/images/mercedes.png', '27400', 'alta'),
(2, 'turismo', '8492KRF', 'Seat', 'Leon', 'Auvi', 'Diesel', 'Ruedas', 'azul', '5', '130', '6', '260', 'v6', '03/10/2018', NULL, NULL, 'view/assets/img/images/seat.png', '16700', 'alta'),
(3, 'Deportivo', '8645HCX', 'Mercedes', 'GLA', 'mercedes', 'hybrid', 'Ruedas', 'verde', '3', '290', '6', '250', 'v12', '2018-01-02', NULL, NULL, 'view/assets/img/images/alfa.png', '9500', 'media'),
(4, 'Deportivo', '2005GJK', 'Alfa Romeo', 'Mito', 'alfa', 'Gasolina', 'WIFI', 'rojo', '3', '150', '6', '140', 'v2', '04/10/2018', NULL, NULL, 'view/assets/img/images/mito.png', '16700', 'alta'),
(5, 'turismo', '4879JKL', 'Ford', 'Focus', 'ford', 'Diesel', 'Ruedas', 'gris', '5', '110', '5', '120', 'v1', '03/12/2018', NULL, NULL, 'view/assets/img/images/ford.png', '1000', 'baja'),
(6, 'turismo', '0000BCD', 'Ferrari', 'LaFerrari', 'ferrari', 'Gasolina', 'Ruedas', 'rojo', '3', '650', '8', '370', 'v8', '03/02/2018', NULL, NULL, 'view/assets/img/images/ferrari.png', '16700', 'media'),
(7, 'turismo', '8477CFD', 'Ford', 'Mondeo', 'Ford', 'Gasolina', 'WIFI', 'Azul', '5', '120', '5', '175', 'v6', '05/05/2015', NULL, NULL, 'view/assets/img/images/ford.png', '13700', 'baja'),
(8, 'Todoterreno', '4851CDF', 'Audi', 'A3', 'VW', 'Gasolina', 'WIFI', 'Azul', '5', '120', '5', '175', 'v6', '05/05/2015', NULL, NULL, 'view/assets/img/images/seat.png', '13700', 'baja'),
(9, 'Deportivo', '9634FTG', 'Citroen', 'C4', 'Ford', 'Gasolina', 'WIFI', 'Azul', '5', '120', '5', '175', 'v6', '05/05/2015', NULL, NULL, 'view/assets/img/images/mercedes.png', '13700', 'media'),
(10, 'turismo', '0321CDT', 'Skoda', 'Favia', 'Ford', 'Gasolina', 'WIFI', 'Azul', '5', '120', '5', '175', 'v6', '05/05/2015', NULL, NULL, 'view/assets/img/images/ferrari.png', '13700', 'alta'),
(11, 'Todoterreno', '7984LNP', 'BMW', 'm4', 'Ford', 'Gasolina', 'WIFI', 'Azul', '5', '120', '5', '175', 'v6', '05/05/2015', NULL, NULL, 'view/assets/img/images/ford1.png', '13700', 'alta');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
