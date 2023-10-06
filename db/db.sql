-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql:3306
-- Tiempo de generación: 06-10-2023 a las 14:44:11
-- Versión del servidor: 8.1.0
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matches`
--

CREATE TABLE `matches` (
  `id` int NOT NULL,
  `local_team_code` char(3) DEFAULT NULL,
  `visitor_team_code` char(3) DEFAULT NULL,
  `score_local` int DEFAULT NULL,
  `score_visitor` int DEFAULT NULL,
  `yellow_cards_local` int DEFAULT NULL,
  `red_cards_local` int DEFAULT NULL,
  `yellow_cards_visitor` int DEFAULT NULL,
  `red_cards_visitor` int DEFAULT NULL,
  `duration_minutes` int DEFAULT NULL,
  `match_date` date DEFAULT NULL,
  `mvp_player_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player`
--

CREATE TABLE `player` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name1` varchar(255) NOT NULL,
  `last_name2` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `age` int DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `is_captain` tinyint(1) DEFAULT NULL,
  `team_code` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `player`
--

INSERT INTO `player` (`id`, `first_name`, `last_name1`, `last_name2`, `nickname`, `age`, `height`, `weight`, `position`, `is_captain`, `team_code`) VALUES
(1, 'Jugador1', 'Apellido1', 'Apellido2', 'Nick1', 25, 175.50, 70.30, 'Delantero', 1, 'EQ1'),
(2, 'Jugador2', 'Apellido1', 'Apellido2', 'Nick2', 22, 180.00, 68.70, 'Defensa', 0, 'EQ1'),
(3, 'Jugador3', 'Apellido1', 'Apellido2', 'Nick3', 27, 182.30, 75.10, 'Centrocampista', 0, 'EQ1'),
(4, 'Jugador4', 'Apellido1', 'Apellido2', 'Nick4', 23, 178.80, 71.80, 'Portero', 0, 'EQ1'),
(5, 'Jugador5', 'Apellido1', 'Apellido2', 'Nick5', 28, 176.20, 73.40, 'Defensa', 0, 'EQ1'),
(6, 'Jugador6', 'Apellido1', 'Apellido2', 'Nick6', 24, 183.00, 76.50, 'Delantero', 0, 'EQ1'),
(7, 'Jugador7', 'Apellido1', 'Apellido2', 'Nick7', 26, 179.70, 69.90, 'Centrocampista', 0, 'EQ1'),
(8, 'Jugador8', 'Apellido1', 'Apellido2', 'Nick8', 29, 177.40, 74.20, 'Defensa', 0, 'EQ1'),
(9, 'Jugador9', 'Apellido1', 'Apellido2', 'Nick9', 31, 181.50, 72.60, 'Portero', 0, 'EQ1'),
(10, 'Jugador10', 'Apellido1', 'Apellido2', 'Nick10', 30, 174.00, 68.00, 'Delantero', 0, 'EQ1'),
(11, 'Jugador11', 'Apellido1', 'Apellido2', 'Nick11', 25, 175.50, 70.30, 'Defensa', 1, 'EQ2'),
(12, 'Jugador12', 'Apellido1', 'Apellido2', 'Nick12', 22, 180.00, 68.70, 'Centrocampista', 0, 'EQ2'),
(13, 'Jugador13', 'Apellido1', 'Apellido2', 'Nick13', 27, 182.30, 75.10, 'Portero', 0, 'EQ2'),
(14, 'Jugador14', 'Apellido1', 'Apellido2', 'Nick14', 23, 178.80, 71.80, 'Delantero', 0, 'EQ2'),
(15, 'Jugador15', 'Apellido1', 'Apellido2', 'Nick15', 28, 176.20, 73.40, 'Centrocampista', 0, 'EQ2'),
(16, 'Jugador16', 'Apellido1', 'Apellido2', 'Nick16', 24, 183.00, 76.50, 'Defensa', 0, 'EQ2'),
(17, 'Jugador17', 'Apellido1', 'Apellido2', 'Nick17', 26, 179.70, 69.90, 'Portero', 0, 'EQ2'),
(18, 'Jugador18', 'Apellido1', 'Apellido2', 'Nick18', 29, 177.40, 74.20, 'Delantero', 0, 'EQ2'),
(19, 'Jugador19', 'Apellido1', 'Apellido2', 'Nick19', 31, 181.50, 72.60, 'Defensa', 0, 'EQ2'),
(20, 'Jugador20', 'Apellido1', 'Apellido2', 'Nick20', 30, 174.00, 68.00, 'Centrocampista', 0, 'EQ2'),
(21, 'Jugador21', 'Apellido1', 'Apellido2', 'Nick21', 25, 175.50, 70.30, 'Defensa', 1, 'EQ3'),
(22, 'Jugador22', 'Apellido1', 'Apellido2', 'Nick22', 22, 180.00, 68.70, 'Centrocampista', 0, 'EQ3'),
(23, 'Jugador23', 'Apellido1', 'Apellido2', 'Nick23', 27, 182.30, 75.10, 'Portero', 0, 'EQ3'),
(24, 'Jugador24', 'Apellido1', 'Apellido2', 'Nick24', 23, 178.80, 71.80, 'Delantero', 0, 'EQ3'),
(25, 'Jugador25', 'Apellido1', 'Apellido2', 'Nick25', 28, 176.20, 73.40, 'Centrocampista', 0, 'EQ3'),
(26, 'Jugador26', 'Apellido1', 'Apellido2', 'Nick26', 24, 183.00, 76.50, 'Defensa', 0, 'EQ3'),
(27, 'Jugador27', 'Apellido1', 'Apellido2', 'Nick27', 26, 179.70, 69.90, 'Portero', 0, 'EQ3'),
(28, 'Jugador28', 'Apellido1', 'Apellido2', 'Nick28', 29, 177.40, 74.20, 'Delantero', 0, 'EQ3'),
(29, 'Jugador29', 'Apellido1', 'Apellido2', 'Nick29', 31, 181.50, 72.60, 'Defensa', 0, 'EQ3'),
(30, 'Jugador30', 'Apellido1', 'Apellido2', 'Nick30', 30, 174.00, 68.00, 'Centrocampista', 0, 'EQ3'),
(31, 'Jugador31', 'Apellido1', 'Apellido2', 'Nick31', 25, 175.50, 70.30, 'Defensa', 1, 'EQ4'),
(32, 'Jugador32', 'Apellido1', 'Apellido2', 'Nick32', 22, 180.00, 68.70, 'Centrocampista', 0, 'EQ4'),
(33, 'Jugador33', 'Apellido1', 'Apellido2', 'Nick33', 27, 182.30, 75.10, 'Portero', 0, 'EQ4'),
(34, 'Jugador34', 'Apellido1', 'Apellido2', 'Nick34', 23, 178.80, 71.80, 'Delantero', 0, 'EQ4'),
(35, 'Jugador35', 'Apellido1', 'Apellido2', 'Nick35', 28, 176.20, 73.40, 'Centrocampista', 0, 'EQ4'),
(36, 'Jugador36', 'Apellido1', 'Apellido2', 'Nick36', 24, 183.00, 76.50, 'Defensa', 0, 'EQ4'),
(37, 'Jugador37', 'Apellido1', 'Apellido2', 'Nick37', 26, 179.70, 69.90, 'Portero', 0, 'EQ4'),
(38, 'Jugador38', 'Apellido1', 'Apellido2', 'Nick38', 29, 177.40, 74.20, 'Delantero', 0, 'EQ4'),
(39, 'Jugador39', 'Apellido1', 'Apellido2', 'Nick39', 31, 181.50, 72.60, 'Defensa', 0, 'EQ4'),
(40, 'Jugador40', 'Apellido1', 'Apellido2', 'Nick40', 30, 174.00, 68.00, 'Centrocampista', 0, 'EQ4'),
(41, 'Jugador41', 'Apellido1', 'Apellido2', 'Nick41', 25, 175.50, 70.30, 'Defensa', 1, 'EQ5'),
(42, 'Jugador42', 'Apellido1', 'Apellido2', 'Nick42', 22, 180.00, 68.70, 'Centrocampista', 0, 'EQ5'),
(43, 'Jugador43', 'Apellido1', 'Apellido2', 'Nick43', 27, 182.30, 75.10, 'Portero', 0, 'EQ5'),
(44, 'Jugador44', 'Apellido1', 'Apellido2', 'Nick44', 23, 178.80, 71.80, 'Delantero', 0, 'EQ5'),
(45, 'Jugador45', 'Apellido1', 'Apellido2', 'Nick45', 28, 176.20, 73.40, 'Centrocampista', 0, 'EQ5'),
(46, 'Jugador46', 'Apellido1', 'Apellido2', 'Nick46', 24, 183.00, 76.50, 'Defensa', 0, 'EQ5'),
(47, 'Jugador47', 'Apellido1', 'Apellido2', 'Nick47', 26, 179.70, 69.90, 'Portero', 0, 'EQ5'),
(48, 'Jugador48', 'Apellido1', 'Apellido2', 'Nick48', 29, 177.40, 74.20, 'Delantero', 0, 'EQ5'),
(49, 'Jugador49', 'Apellido1', 'Apellido2', 'Nick49', 31, 181.50, 72.60, 'Defensa', 0, 'EQ5'),
(50, 'Jugador50', 'Apellido1', 'Apellido2', 'Nick50', 30, 174.00, 68.00, 'Centrocampista', 0, 'EQ5'),
(51, 'Jugador51', 'Apellido1', 'Apellido2', 'Nick51', 25, 175.50, 70.30, 'Defensa', 1, 'EQ6'),
(52, 'Jugador52', 'Apellido1', 'Apellido2', 'Nick52', 22, 180.00, 68.70, 'Centrocampista', 0, 'EQ6'),
(53, 'Jugador53', 'Apellido1', 'Apellido2', 'Nick53', 27, 182.30, 75.10, 'Portero', 0, 'EQ6'),
(54, 'Jugador54', 'Apellido1', 'Apellido2', 'Nick54', 23, 178.80, 71.80, 'Delantero', 0, 'EQ6'),
(55, 'Jugador55', 'Apellido1', 'Apellido2', 'Nick55', 28, 176.20, 73.40, 'Centrocampista', 0, 'EQ6'),
(56, 'Jugador56', 'Apellido1', 'Apellido2', 'Nick56', 24, 183.00, 76.50, 'Defensa', 0, 'EQ6'),
(57, 'Jugador57', 'Apellido1', 'Apellido2', 'Nick57', 26, 179.70, 69.90, 'Portero', 0, 'EQ6'),
(58, 'Jugador58', 'Apellido1', 'Apellido2', 'Nick58', 29, 177.40, 74.20, 'Delantero', 0, 'EQ6'),
(59, 'Jugador59', 'Apellido1', 'Apellido2', 'Nick59', 31, 181.50, 72.60, 'Defensa', 0, 'EQ6'),
(60, 'Jugador60', 'Apellido1', 'Apellido2', 'Nick60', 30, 174.00, 68.00, 'Centrocampista', 0, 'EQ6'),
(61, 'Jugador61', 'Apellido1', 'Apellido2', 'Nick61', 25, 175.50, 70.30, 'Defensa', 1, 'EQ7'),
(62, 'Jugador62', 'Apellido1', 'Apellido2', 'Nick62', 22, 180.00, 68.70, 'Centrocampista', 0, 'EQ7'),
(63, 'Jugador63', 'Apellido1', 'Apellido2', 'Nick63', 27, 182.30, 75.10, 'Portero', 0, 'EQ7'),
(64, 'Jugador64', 'Apellido1', 'Apellido2', 'Nick64', 23, 178.80, 71.80, 'Delantero', 0, 'EQ7'),
(65, 'Jugador65', 'Apellido1', 'Apellido2', 'Nick65', 28, 176.20, 73.40, 'Centrocampista', 0, 'EQ7'),
(66, 'Jugador66', 'Apellido1', 'Apellido2', 'Nick66', 24, 183.00, 76.50, 'Defensa', 0, 'EQ7'),
(67, 'Jugador67', 'Apellido1', 'Apellido2', 'Nick67', 26, 179.70, 69.90, 'Portero', 0, 'EQ7'),
(68, 'Jugador68', 'Apellido1', 'Apellido2', 'Nick68', 29, 177.40, 74.20, 'Delantero', 0, 'EQ7'),
(69, 'Jugador69', 'Apellido1', 'Apellido2', 'Nick69', 31, 181.50, 72.60, 'Defensa', 0, 'EQ7'),
(70, 'Jugador70', 'Apellido1', 'Apellido2', 'Nick70', 30, 174.00, 68.00, 'Centrocampista', 0, 'EQ7'),
(71, 'Jugador71', 'Apellido1', 'Apellido2', 'Nick71', 25, 175.50, 70.30, 'Defensa', 1, 'EQ8'),
(72, 'Jugador72', 'Apellido1', 'Apellido2', 'Nick72', 22, 180.00, 68.70, 'Centrocampista', 0, 'EQ8'),
(73, 'Jugador73', 'Apellido1', 'Apellido2', 'Nick73', 27, 182.30, 75.10, 'Portero', 0, 'EQ8'),
(74, 'Jugador74', 'Apellido1', 'Apellido2', 'Nick74', 23, 178.80, 71.80, 'Delantero', 0, 'EQ8'),
(75, 'Jugador75', 'Apellido1', 'Apellido2', 'Nick75', 28, 176.20, 73.40, 'Centrocampista', 0, 'EQ8'),
(76, 'Jugador76', 'Apellido1', 'Apellido2', 'Nick76', 24, 183.00, 76.50, 'Defensa', 0, 'EQ8'),
(77, 'Jugador77', 'Apellido1', 'Apellido2', 'Nick77', 26, 179.70, 69.90, 'Portero', 0, 'EQ8'),
(78, 'Jugador78', 'Apellido1', 'Apellido2', 'Nick78', 29, 177.40, 74.20, 'Delantero', 0, 'EQ8'),
(79, 'Jugador79', 'Apellido1', 'Apellido2', 'Nick79', 31, 181.50, 72.60, 'Defensa', 0, 'EQ8'),
(80, 'Jugador80', 'Apellido1', 'Apellido2', 'Nick80', 30, 174.00, 68.00, 'Centrocampista', 0, 'EQ8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_stats`
--

CREATE TABLE `player_stats` (
  `id` int NOT NULL,
  `player_id` int DEFAULT NULL,
  `matches_played` int DEFAULT NULL,
  `goals_scored` int DEFAULT NULL,
  `assists` int DEFAULT NULL,
  `yellow_cards` int DEFAULT NULL,
  `red_cards` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE `team` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `team_code` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `team`
--

INSERT INTO `team` (`id`, `name`, `team_code`) VALUES
(1, 'Equipo 1', 'EQ1'),
(2, 'Equipo 2', 'EQ2'),
(3, 'Equipo 3', 'EQ3'),
(4, 'Equipo 4', 'EQ4'),
(5, 'Equipo 5', 'EQ5'),
(6, 'Equipo 6', 'EQ6'),
(7, 'Equipo 7', 'EQ7'),
(8, 'Equipo 8', 'EQ8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team_stats`
--

CREATE TABLE `team_stats` (
  `id` int NOT NULL,
  `team_code` char(3) DEFAULT NULL,
  `matches_played` int DEFAULT NULL,
  `matches_won` int DEFAULT NULL,
  `matches_drawn` int DEFAULT NULL,
  `matches_lost` int DEFAULT NULL,
  `goals_scored` int DEFAULT NULL,
  `goals_conceded` int DEFAULT NULL,
  `fouls_committed` int DEFAULT NULL,
  `fouls_received` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `mail` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mail`) VALUES
(1, 'kr4ql0', '$2y$10$xUM8zyL7OtfwAAgR6jOBfOiJgd/o5rm01OtaDV6WsHjIqWJXdpXe6', 'kr4ql0@kr4ql0.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_local_team` (`local_team_code`),
  ADD KEY `fk_visitor_team` (`visitor_team_code`),
  ADD KEY `fk_mvp_player` (`mvp_player_id`);

--
-- Indices de la tabla `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_code` (`team_code`);

--
-- Indices de la tabla `player_stats`
--
ALTER TABLE `player_stats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_player` (`player_id`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo_equipo` (`team_code`);

--
-- Indices de la tabla `team_stats`
--
ALTER TABLE `team_stats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_team` (`team_code`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `player`
--
ALTER TABLE `player`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `player_stats`
--
ALTER TABLE `player_stats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `team`
--
ALTER TABLE `team`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `team_stats`
--
ALTER TABLE `team_stats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `fk_local_team` FOREIGN KEY (`local_team_code`) REFERENCES `team` (`team_code`),
  ADD CONSTRAINT `fk_mvp_player` FOREIGN KEY (`mvp_player_id`) REFERENCES `player` (`id`),
  ADD CONSTRAINT `fk_visitor_team` FOREIGN KEY (`visitor_team_code`) REFERENCES `team` (`team_code`);

--
-- Filtros para la tabla `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`team_code`) REFERENCES `team` (`team_code`);

--
-- Filtros para la tabla `player_stats`
--
ALTER TABLE `player_stats`
  ADD CONSTRAINT `fk_player` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`);

--
-- Filtros para la tabla `team_stats`
--
ALTER TABLE `team_stats`
  ADD CONSTRAINT `fk_team` FOREIGN KEY (`team_code`) REFERENCES `team` (`team_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
