-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 05:39:19
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
-- Base de datos: `bd_productosmedicos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nom_categoria` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fech_creacion` varchar(100) NOT NULL,
  `num_producto` int(50) NOT NULL,
  `prom_costos` varchar(100) NOT NULL,
  `img_producto` varchar(100) NOT NULL,
  `nom_fabricante` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nom_categoria`, `descripcion`, `fech_creacion`, `num_producto`, `prom_costos`, `img_producto`, `nom_fabricante`) VALUES
(1, 'Odontologia', 'Todo para el cuidado bucal', '16/11/23', 150, '100-5000', 'odonto.png', 'Odontotech'),
(2, 'Ginecologia', 'Tipo de productos para la salud de la mujer', '2023-11-16', 3, '200-5000', 'ginecologia.png', 'Ginecologic'),
(3, 'Pediatria', 'Todo tipo de productos para el cuidado de los niños', '2023-11-16', 5, '200-1000', 'piatria.jpeg', 'PediatricMex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabricante`
--

CREATE TABLE `fabricante` (
  `id_fabricante` int(11) NOT NULL,
  `nom_fabricante` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fech_registro` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `Comentarios` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `fabricante`
--

INSERT INTO `fabricante` (`id_fabricante`, `nom_fabricante`, `direccion`, `telefono`, `email`, `fech_registro`, `estado`, `Comentarios`) VALUES
(1, 'OdontoTech', 'Callo Oro con Capulin #255', '656-184-58-51', 'odontotech@hotmail.com', '15/11/23', 'Frecuente', 'Excelentes productos!!'),
(2, 'Ginecologic', 'Calle Durango #344', '656-587-48-52', 'ginecologic@hotmail.com', '2023-11-16', 'Activo', 'Buena calidad y buen precio.'),
(3, 'PediatricMex', 'Calle Ponciano', '656-851-48-52', 'piatricmex@hotmail.com', '2023-11-16', 'Frecuente', 'Buenos Precios Pero calidad masomenos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prducto` int(11) NOT NULL,
  `nom_producto` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int(100) NOT NULL,
  `stock` int(100) NOT NULL,
  `fech_vencimiento` varchar(50) NOT NULL,
  `id_categoria` varchar(50) NOT NULL,
  `id_fabricante` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prducto`, `nom_producto`, `descripcion`, `precio`, `stock`, `fech_vencimiento`, `id_categoria`, `id_fabricante`) VALUES
(5, 'Cepillo Dental', 'Cepillo dental', 200, 100, '2026-05-26', '1', '1'),
(6, 'DIU', 'Uso del método anticonceptivo Diu', 1200, 120, '2026-07-23', '2', '2'),
(7, 'Pasta de Dientes', 'Pasta de Dientes con carbón activado', 150, 100, '2023-12-31', '1', '1'),
(8, 'Curitas', 'Curitas para heridas no profundas', 70, 500, '2034-06-06', '3', '3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`id_fabricante`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fabricante`
--
ALTER TABLE `fabricante`
  MODIFY `id_fabricante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
