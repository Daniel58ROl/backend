-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2020 a las 18:32:12
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbtodos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE `beneficiario` (
  `Nombre` varchar(100) NOT NULL,
  `Calle` varchar(100) NOT NULL,
  `Localidad` varchar(100) NOT NULL,
  `Ciudad` varchar(100) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `CP` varchar(20) NOT NULL,
  `Telefono` varchar(12) DEFAULT NULL,
  `Correo` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `TipoUsuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cataproducto`
--

CREATE TABLE `cataproducto` (
  `Nombre` varchar(100) NOT NULL,
  `Foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donante`
--

CREATE TABLE `donante` (
  `Nombre` varchar(100) NOT NULL,
  `Calle` varchar(100) NOT NULL,
  `Localidad` varchar(100) NOT NULL,
  `Ciudad` varchar(100) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `CP` varchar(100) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `TipoUsuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`Correo`);

--
-- Indices de la tabla `donante`
--
ALTER TABLE `donante`
  ADD PRIMARY KEY (`Correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
