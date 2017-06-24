-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2017 a las 04:19:16
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegiot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `rut` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_alumno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `curso` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccionl` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_usuario`
--

CREATE TABLE `alumno_usuario` (
  `Alumno_rut` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_06_21_172938_create_alumno_table', 0),
(2, '2017_06_21_172938_create_alumno_usuario_table', 0),
(3, '2017_06_21_172938_create_profesor_table', 0),
(4, '2017_06_21_172938_create_tutoria_table', 0),
(5, '2017_06_21_172938_create_users_table', 0),
(6, '2017_06_21_172938_create_usuario_table', 0),
(7, '2017_06_21_172939_add_foreign_keys_to_alumno_usuario_table', 0),
(8, '2017_06_21_172939_add_foreign_keys_to_tutoria_table', 0),
(16, '2017_06_23_234233_create_alumno_table', 1),
(17, '2017_06_23_234233_create_alumno_usuario_table', 1),
(18, '2017_06_23_234233_create_profesor_table', 1),
(19, '2017_06_23_234233_create_tutoria_table', 1),
(20, '2017_06_23_234233_create_usuario_table', 1),
(21, '2017_06_23_234234_add_foreign_keys_to_alumno_usuario_table', 1),
(22, '2017_06_23_234234_add_foreign_keys_to_tutoria_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `rut` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_profesor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_contrato` date NOT NULL,
  `asignatura` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_tutoria` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria`
--

CREATE TABLE `tutoria` (
  `id_tutoria` int(11) NOT NULL,
  `fecha_tutoria` date NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alumno_rut` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Profesor_rut` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfil` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `username`, `password`, `perfil`, `created_at`, `updated_at`) VALUES
(1, 'oscar', '$2y$10$cGorZkD6zE6ZhipV4OLb8ethnjE4d5pJX8dzRDBtZeCabqrkcitpu', 3, '2017-06-24 03:57:54', '2017-06-24 03:57:54'),
(2, 'david', '$2y$10$CATMBtnbkurtW4iT7iyT6e4ve8vFoC/4dhpO5g6yav6Cysvy8NI62', 1, '2017-06-24 04:01:58', '2017-06-24 04:01:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `alumno_usuario`
--
ALTER TABLE `alumno_usuario`
  ADD PRIMARY KEY (`Alumno_rut`,`usuario_id_usuario`),
  ADD KEY `fk_Alumno_has_usuario_Alumno1_idx` (`Alumno_rut`),
  ADD KEY `fk_Alumno_has_usuario_usuario1_idx` (`usuario_id_usuario`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD PRIMARY KEY (`id_tutoria`),
  ADD KEY `fk_tutoria_Alumno_idx` (`Alumno_rut`),
  ADD KEY `fk_tutoria_Profesor1_idx` (`Profesor_rut`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  MODIFY `id_tutoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
