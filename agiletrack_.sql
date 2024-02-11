-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2024 a las 19:18:07
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agiletrack+`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `presupuesto` decimal(10,2) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `telefono`, `presupuesto`, `correo`) VALUES
(1, 'Cliente 1', '123-456-7890', '5000.00', 'cliente1@email.com'),
(2, 'Cliente 2', '987-654-3210', '8000.00', 'cliente2@email.com'),
(3, 'Cliente 3', '555-123-4567', '6000.00', 'cliente3@email.com'),
(4, 'Cliente 4', '444-789-1234', '7500.00', 'cliente4@email.com'),
(5, 'Cliente 5', '111-222-3333', '5500.00', 'cliente5@email.com'),
(6, 'Cliente 6', '999-888-7777', '7000.00', 'cliente6@email.com'),
(7, 'Cliente 7', '777-888-9999', '6500.00', 'cliente7@email.com'),
(8, 'Cliente 8', '333-222-1111', '7200.00', 'cliente8@email.com'),
(9, 'Cliente 9', '666-555-4444', '6000.00', 'cliente9@email.com'),
(10, 'Cliente 10', '222-333-4444', '7500.00', 'cliente10@email.com'),
(11, 'Cliente 11', '555-777-9999', '5500.00', 'cliente11@email.com'),
(12, 'Cliente 12', '333-999-6666', '7000.00', 'cliente12@email.com'),
(13, 'Cliente 13', '444-777-5555', '6200.00', 'cliente13@email.com'),
(14, 'Cliente 14', '777-666-5555', '7200.00', 'cliente14@email.com'),
(15, 'Cliente 15', '666-999-4444', '8000.00', 'cliente15@email.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `experiencia` int(11) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `coordinador`
--

INSERT INTO `coordinador` (`id`, `nombre`, `telefono`, `experiencia`, `correo`) VALUES
(1, 'Juan Pérez', '123-456-7890', 5, 'juan.perez@email.com'),
(2, 'María Gómez', '987-654-3210', 8, 'maria.gomez@email.com'),
(3, 'Carlos Rodríguez', '555-123-4567', 3, 'carlos.rodriguez@email.com'),
(4, 'Laura Hernández', '444-789-1234', 6, 'laura.hernandez@email.com'),
(5, 'Pedro López', '111-222-3333', 4, 'pedro.lopez@email.com'),
(6, 'Ana Martínez', '999-888-7777', 7, 'ana.martinez@email.com'),
(7, 'Luis Díaz', '777-888-9999', 5, 'luis.diaz@email.com'),
(8, 'Sofía Fernández', '333-222-1111', 6, 'sofia.fernandez@email.com'),
(9, 'Daniel García', '666-555-4444', 4, 'daniel.garcia@email.com'),
(10, 'Elena Vargas', '222-333-4444', 7, 'elena.vargas@email.com'),
(11, 'Javier Ramírez', '555-777-9999', 5, 'javier.ramirez@email.com'),
(12, 'Isabel Torres', '333-999-6666', 6, 'isabel.torres@email.com'),
(13, 'Miguel Sánchez', '444-777-5555', 5, 'miguel.sanchez@email.com'),
(14, 'Carmen Gutiérrez', '777-666-5555', 7, 'carmen.gutierrez@email.com'),
(15, 'Roberto Luna', '666-999-4444', 8, 'roberto.luna@email.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollador`
--

CREATE TABLE `desarrollador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `correo_electronico` varchar(255) DEFAULT NULL,
  `experiencia_years` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `desarrollador`
--

INSERT INTO `desarrollador` (`id`, `nombre`, `apellido`, `edad`, `correo_electronico`, `experiencia_years`) VALUES
(1, 'Juan', 'Pérez', 28, 'juan.perez@email.com', 5),
(2, 'María', 'Gómez', 35, 'maria.gomez@email.com', 8),
(3, 'Carlos', 'Rodríguez', 24, 'carlos.rodriguez@email.com', 3),
(4, 'Laura', 'Hernández', 30, 'laura.hernandez@email.com', 6),
(5, 'Pedro', 'López', 29, 'pedro.lopez@email.com', 4),
(6, 'Ana', 'Martínez', 32, 'ana.martinez@email.com', 7),
(7, 'Luis', 'Díaz', 27, 'luis.diaz@email.com', 5),
(8, 'Sofía', 'Fernández', 31, 'sofia.fernandez@email.com', 6),
(9, 'Daniel', 'García', 26, 'daniel.garcia@email.com', 4),
(10, 'Elena', 'Vargas', 33, 'elena.vargas@email.com', 7),
(11, 'Javier', 'Ramírez', 28, 'javier.ramirez@email.com', 5),
(12, 'Isabel', 'Torres', 29, 'isabel.torres@email.com', 6),
(13, 'Miguel', 'Sánchez', 30, 'miguel.sanchez@email.com', 5),
(14, 'Carmen', 'Gutiérrez', 31, 'carmen.gutierrez@email.com', 7),
(15, 'Roberto', 'Luna', 34, 'roberto.luna@email.com', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `id_coordinador` int(11) DEFAULT NULL,
  `id_desarrollador` int(11) DEFAULT NULL,
  `no_tarea` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombre`, `descripcion`, `fecha_inicio`, `fecha_fin`, `id_coordinador`, `id_desarrollador`, `no_tarea`, `id_cliente`) VALUES
(1, 'Proyecto A', 'Descripción del Proyecto A', '2023-01-15', '2023-03-15', 1, 2, 1, 1),
(2, 'Proyecto B', 'Descripción del Proyecto B', '2023-02-20', '2023-04-30', 2, 3, 2, 2),
(3, 'Proyecto C', 'Descripción del Proyecto C', '2023-03-10', '2023-05-25', 3, 4, 3, 3),
(4, 'Proyecto D', 'Descripción del Proyecto D', '2023-04-05', '2023-06-10', 4, 5, 4, 4),
(5, 'Proyecto E', 'Descripción del Proyecto E', '2023-05-12', '2023-07-20', 5, 6, 5, 5),
(6, 'Proyecto F', 'Descripción del Proyecto F', '2023-06-18', '2023-08-15', 6, 7, 6, 6),
(7, 'Proyecto G', 'Descripción del Proyecto G', '2023-07-25', '2023-09-05', 7, 8, 7, 7),
(8, 'Proyecto H', 'Descripción del Proyecto H', '2023-08-30', '2023-10-18', 8, 9, 8, 8),
(9, 'Proyecto I', 'Descripción del Proyecto I', '2023-09-10', '2023-11-22', 9, 10, 9, 9),
(10, 'Proyecto J', 'Descripción del Proyecto J', '2023-10-15', '2023-12-30', 10, 11, 10, 10),
(11, 'Proyecto K', 'Descripción del Proyecto K', '2023-11-20', '2024-01-25', 11, 12, 11, 11),
(12, 'Proyecto L', 'Descripción del Proyecto L', '2023-12-05', '2024-02-15', 12, 13, 12, 12),
(13, 'Proyecto M', 'Descripción del Proyecto M', '2024-01-10', '2024-03-20', 13, 14, 13, 13),
(14, 'Proyecto N', 'Descripción del Proyecto N', '2024-02-15', '2024-04-10', 14, 15, 14, 14),
(15, 'Proyecto O', 'Descripción del Proyecto O', '2024-03-20', '2024-05-15', 15, 1, 15, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `no_tarea` int(11) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`no_tarea`, `descripcion`, `estado`, `id_proyecto`) VALUES
(1, 'Tarea 1', 'En progreso', 1),
(2, 'Tarea 2', 'Completada', 1),
(3, 'Tarea 3', 'Pendiente', 2),
(4, 'Tarea 4', 'Completada', 2),
(5, 'Tarea 5', 'En progreso', 3),
(6, 'Tarea 6', 'Pendiente', 3),
(7, 'Tarea 7', 'Completada', 4),
(8, 'Tarea 8', 'En progreso', 4),
(9, 'Tarea 9', 'Pendiente', 5),
(10, 'Tarea 10', 'Completada', 5),
(11, 'Tarea 11', 'En progreso', 6),
(12, 'Tarea 12', 'Pendiente', 6),
(13, 'Tarea 13', 'Completada', 7),
(14, 'Tarea 14', 'En progreso', 7),
(15, 'Tarea 15', 'Pendiente', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `desarrollador`
--
ALTER TABLE `desarrollador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`no_tarea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `desarrollador`
--
ALTER TABLE `desarrollador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `no_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
