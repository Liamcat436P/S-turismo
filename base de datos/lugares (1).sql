-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2024 a las 04:40:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seturismob`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `ID` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(1080) NOT NULL,
  `name` varchar(35) NOT NULL,
  `adress` varchar(25) NOT NULL,
  `description` varchar(200) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`ID`, `category`, `image`, `name`, `adress`, `description`, `phone`, `user`) VALUES
(2, 1, '20200520-000~2.jpg', 'Alan', '1234', 'gatos', '12233', 44),
(4, 3, 'imagenes/lugares/3.jfif', 'lolo', '222', '', '10003030', 44),
(5, 1, 'imagenes/lugares/5.jpg', 'café', '33321', 'un lugar bonito', '433221233', 0),
(6, 1, '', 'El rinco de Oscar', '', 'CAfe Bar', '', 0),
(7, 1, 'imagenes/lugares/7.jfif', 'Café ganzoloco', '1231221', 'un café sabrosongo bien bonito', '3215439789', 0),
(8, 3, 'imagenes/lugares/8.jfif', 'hotel noche de encanto', '32321', 'un hotel para dormir y descansar ', '321544389', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
