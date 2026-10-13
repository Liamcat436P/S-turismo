-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2024 a las 03:50:07
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
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `name` varchar(239) NOT NULL,
  `email` varchar(239) NOT NULL,
  `document` varchar(239) NOT NULL,
  `role` varchar(15) NOT NULL,
  `password` varchar(502) NOT NULL,
  `photo` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `name`, `email`, `document`, `role`, `password`, `photo`) VALUES
(10, 'Julio', 'juli@gm', '1233', 'Administrador', '202cb962ac59075b964b07152d234b70', ''),
(29, 'Alex', 'Alex@', '667', 'Administrador', 'b59c67bf196a4758191e42f76670ceba', ''),
(36, 'oscar', 'cossio@gm', '2341234', 'Administrador', 'ec6a6536ca304edf844d1d248a4f08dc', 'Hotel.jfif'),
(41, 'Camila', 'Cami@gm.com', '12455432', 'Usuario', '202cb962ac59075b964b07152d234b70', 'imagenes/perfiles/41.svg'),
(42, 'Lissa', 'Lissa@', '123312', 'Usuario', '202cb962ac59075b964b07152d234b70', 'imagenes/perfiles/42.jpg'),
(43, 'sofia', 'ljkhkj', '2345664', 'Usuario', '202cb962ac59075b964b07152d234b70', 'IMG_20200515_123544804.jpg'),
(44, 'al', 'al@', '123', 'Usuario', '202cb962ac59075b964b07152d234b70', 'imagenes/perfiles/44.jfif');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
