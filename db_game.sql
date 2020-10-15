-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2020 a las 06:37:32
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_game`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `version` varchar(200) NOT NULL,
  `memoria` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `game`
--

INSERT INTO `game` (`id`, `title`, `precio`, `version`, `memoria`, `id_genre`) VALUES
(82, 'Age of Empires II: The Age of Kings', 22, 'alfa', 300, 13),
(83, 'Atom Zombie Smasher', 0, 'alfa', 234, 11),
(84, 'Unholy', 53, 'alfa', 405, 11),
(85, 'Five Nights at Freddy\'s', 34, 'alfa', 514, 11),
(86, 'Minecraft ', 63, 'gold', 255, 12),
(87, 'Los Sims 2', 0, 'alfa', 435, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genre`
--

INSERT INTO `genre` (`id`, `name`, `description`) VALUES
(10, 'Aventura', 'Los videojuegos de aventura son un género de videojuegos, caracterizados por la investigación, exploración, la solución de rompecabezas, la interacción con personajes del videojuego, y un enfoque en el relato en vez de desafíos basados en reflejos.'),
(11, 'Survival horror', 'es un género de videojuegos inspirado en la ficción de terror que se centra en la supervivencia del personaje mientras el videojuego intenta asustar a los jugadores con gráficos y personajes de terror, o con un ambiente aterrador.'),
(12, 'Simulación', 'Los videojuegos de simulación son videojuegos que intentan recrear situaciones de la vida real. Los videojuegos de simulación reproducen sensaciones que en realidad no están sucediendo.'),
(13, 'Estrategia', 'Son videojuegos que requieren que el jugador ponga en práctica sus habilidades de planeamiento y pensamiento para maniobrar, gestionando recursos de diverso tipo para conseguir la victoria.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`) VALUES
(5, 'camilopez8501@gmail.com', '$2y$10$IuLcq8idfHlfvFWN3zpg1OfmAUWJ/7iVQcgIyy96Ed1YwWRoGSw4a'),
(7, 'fran_tandil@hotmail.com', '$2y$10$89ONul/O8iaXgBL7KsuBMew3Yntva.b10jbcaiuv7zw8BJUE2X8Qq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indices de la tabla `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
