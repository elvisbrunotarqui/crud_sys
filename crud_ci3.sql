-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-04-2023 a las 22:36:07
-- Versión del servidor: 8.0.31
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_ci3`
--
CREATE DATABASE IF NOT EXISTS `crud_ci3` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `crud_ci3`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `per_id` int NOT NULL AUTO_INCREMENT,
  `per_nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`per_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`per_id`, `per_nombre`) VALUES
(1, 'admin'),
(2, 'Socio'),
(3, 'Cliente'),
(4, 'empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usu_id` int NOT NULL AUTO_INCREMENT,
  `per_id` int NOT NULL,
  `usu_nombres` varchar(50) DEFAULT NULL,
  `usu_apellidos` varchar(100) DEFAULT NULL,
  `usu_correo` varchar(50) DEFAULT NULL,
  `usu_telefono` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`usu_id`),
  KEY `fk_usuario_perfil_idx` (`per_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `per_id`, `usu_nombres`, `usu_apellidos`, `usu_correo`, `usu_telefono`) VALUES
(3, 1, 'ELVIS bruno', 'tarqui', 'jorge@gmail.com', '73704655'),
(4, 2, 'das', 'dad', 'jorge@gmail.com', '424324524'),
(5, 3, 'fsfd', 'fsfsd', 'fsf@gmail.com', '71940746'),
(6, 4, 'luis', 'tarqui', 'lucia@gmail.com', '74454');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`per_id`) REFERENCES `perfil` (`per_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
