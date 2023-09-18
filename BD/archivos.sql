-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2023 a las 17:50:56
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
-- Base de datos: `archivos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdfs`
--

CREATE TABLE `pdfs` (
  `id` int(11) NOT NULL,
  `filename` varchar(40) NOT NULL,
  `title` varchar(250) NOT NULL,
  `qty` int(11) DEFAULT 1,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pdfs`
--

INSERT INTO `pdfs` (`id`, `filename`, `title`, `qty`, `fecha`) VALUES
(16, 'causación(Factura).pdf', 'Auto Admite Reorganización', 1, '2023-09-07'),
(17, 'Soporte_bancario.pdf', 'Promotor', 1, '2023-09-07'),
(25, 'Historico (1).pdf', 'Superintendencia de Sociedades', 1, '2023-09-07'),
(29, 'Vacaciones.pdf', 'Estados Financieros', 1, '2023-09-15'),
(30, 'Vacaciones.pdf', 'Acuerdo de Reorganizacion', 1, '2023-09-07'),
(31, 'Vacaciones.pdf', 'Informes del Promotor', 1, '2023-09-07'),
(32, 'Historico (1).pdf', 'Acuerdo de Reorganizacion', 1, '2023-09-20'),
(33, 'Vacaciones.pdf', 'Auto Admite Reorganización', 1, '2023-09-10'),
(34, 'AcronisBackup_12_userguide_es-ES.pdf', 'Superintendencia de Sociedades', 1, '2023-09-13'),
(35, 'Historico (1).pdf', 'Acuerdo de Reorganizacion', 1, '2023-09-14'),
(36, 'Impresoras.pdf', 'Auto Admite Reorganización', 1, '2023-09-14'),
(37, 'Historico (1).pdf', 'Promotor', 1, '2023-09-14'),
(38, 'IntegraTIC 2023 .pdf', 'Informes del Promotor', 1, '2023-09-16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
