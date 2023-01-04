-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-11-2022 a las 07:19:00
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_encuentros_sociales`
--
CREATE DATABASE IF NOT EXISTS `db_encuentros_sociales` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_encuentros_sociales`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reunion`
--

DROP TABLE IF EXISTS `reunion`;
CREATE TABLE IF NOT EXISTS `reunion` (
  `idreunion` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `mes` varchar(10) NOT NULL,
  `dia` int(3) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `año` int(4) NOT NULL,
  PRIMARY KEY (`idreunion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(6) NOT NULL AUTO_INCREMENT,
  `nick` varchar(40) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `foto` varchar(60) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nick`, `clave`, `nombre`, `correo`, `genero`, `foto`) VALUES
(1, 'tPlayer', '81dc9bdb52d04dc20036dbd8313ed055', 'Tito Matos', 'titomatos-0@hotmail.com', 'Masculino', 'Foto_2x2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
