-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2018 a las 23:26:02
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `Id` int(3) NOT NULL,
  `NombreAdmin` varchar(50) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Id`, `NombreAdmin`, `apellido`, `correo`, `password`) VALUES
(1, 'David', 'Quiroz Rodriguez', 'Administrador@gmail.com', 'chikiwi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combocatoria`
--

CREATE TABLE `combocatoria` (
  `Id` int(3) NOT NULL,
  `Encargado` varchar(50) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Especialidad` varchar(50) NOT NULL,
  `Fechaini` varchar(50) NOT NULL,
  `Fechafin` varchar(50) NOT NULL,
  `Descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `combocatoria`
--

INSERT INTO `combocatoria` (`Id`, `Encargado`, `Nombre`, `Especialidad`, `Fechaini`, `Fechafin`, `Descripcion`) VALUES
(1, 'Daniel', 'Tecnologias Agricolas', 'Tecnologia Agricola', '07/06/2018', '07/07/2018', 'Esta convocatoria es para aquellos proyectos que son especialisados en la agricultura de de los invernaderos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluadores`
--

CREATE TABLE `evaluadores` (
  `Nombre` varchar(35) NOT NULL,
  `Apellidos` varchar(35) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evaluadores`
--

INSERT INTO `evaluadores` (`Nombre`, `Apellidos`, `Correo`, `Id`) VALUES
('Rodrigo', 'Moran Garcia', 'Rodrigo_MG@hotmial.com', 1),
('David', 'Quiroz Rodriguez', 'David.bmp@gmail.com', 2),
('Berzy', 'Flores', 'Berzy_Leal@gmail.com', 3),
('Paul', 'Moran Garcia', 'Pmoran0@ucol.mx', 4),
('Jorge', 'Leal', 'jfernandez4@ucol.mx', 5),
('Ismael', 'Amezcua', 'Ismael_amezcua@gmail.com', 6),
('Brian', 'Vazquez', 'Bryan_Vazque@gmail.com', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metricas`
--

CREATE TABLE `metricas` (
  `ID` int(11) NOT NULL,
  `MetricaUno` varchar(100) NOT NULL,
  `CalificacionUno` int(2) NOT NULL,
  `MetricaDos` varchar(100) NOT NULL,
  `CalificacionDos` int(2) NOT NULL,
  `MetricaTres` varchar(100) NOT NULL,
  `CalificacionTres` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `metricas`
--

INSERT INTO `metricas` (`ID`, `MetricaUno`, `CalificacionUno`, `MetricaDos`, `CalificacionDos`, `MetricaTres`, `CalificacionTres`) VALUES
(1, 'Cumple con el reglamento establecido en la competencia', 10, 'Ayuda al desarrollo y facilita las necesidades humanas en las tecnologias', 10, 'Inovador', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `Id` int(3) NOT NULL,
  `NombreP` varchar(100) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  `NombreR` varchar(30) NOT NULL,
  `Apellidos` varchar(35) NOT NULL,
  `Meses` int(3) NOT NULL,
  `Costo` int(20) NOT NULL,
  `CalificacionUno` int(2) NOT NULL,
  `CalificacionDos` int(2) NOT NULL,
  `CalificacionTres` int(2) NOT NULL,
  `CalificacionTotal` int(3) NOT NULL,
  `Puntaje` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`Id`, `NombreP`, `Descripcion`, `NombreR`, `Apellidos`, `Meses`, `Costo`, `CalificacionUno`, `CalificacionDos`, `CalificacionTres`, `CalificacionTotal`, `Puntaje`) VALUES
(1, 'Prueba 1', 'Esto es la primer prueba 	', 'David', 'Quiroz', 8, 200000, 10, 10, 10, 30, 100),
(2, 'Prueba 2', 'Esta es una prueba mas para saber si funciona la base de datos 	', 'Roman', 'Garcia Zarate', 4, 10000, 6, 8, 9, 23, 77),
(3, 'Habram duerme', 'Habram se va a dormir en brancos :V 	', 'Jorge', 'Leal', 2, 100000, 7, 9, 9, 25, 83),
(4, 'Verificar que funciona mi lista', 'Es una prueba para verificar si mi lista esta funcionando 	', 'Martin', 'Fernandez', 8, 30000, 4, 4, 4, 12, 40),
(5, 'Entrega de avances', 'Entrego los avances de el proyecto 	', 'Brian', 'Vazquez', 6, 200000, 10, 10, 10, 30, 100),
(6, 'Modificaciones', ' Vamos a modificar partes del proyecto', 'David', 'Quiroz', 3, 10000, 10, 10, 10, 30, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `apellido`, `correo`, `password`) VALUES
(1, 'David', 'Quiroz Rodriguez', 'David.bmp@gmail.com', 'david'),
(2, 'Jorge', 'queti', 'jfernandez4@ucol.mx', 'clamatito12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `combocatoria`
--
ALTER TABLE `combocatoria`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `evaluadores`
--
ALTER TABLE `evaluadores`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `metricas`
--
ALTER TABLE `metricas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `combocatoria`
--
ALTER TABLE `combocatoria`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `evaluadores`
--
ALTER TABLE `evaluadores`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `metricas`
--
ALTER TABLE `metricas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
