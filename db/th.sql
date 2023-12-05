-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-12-2020 a las 20:53:47
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `th`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `idu` int(11) NOT NULL,
  `fecha` varchar(11) NOT NULL,
  `info` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `activity`
--

INSERT INTO `activity` (`id`, `idu`, `fecha`, `info`) VALUES
(1, 1, '11/12/20', '<strong><a href=\"/perfil.php?id=1\">Marky</a></strong> se ha Registrado.</a>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `theme`, `content`, `image`, `tag`) VALUES
(1, 'Dota 2', '<p><span style=\"color: #ac1e23;\"class=\"dropcap text-danger\">E</span>strategia MOBA desarrollado por Valve Corporation. Hay una variedad de personajes (Heroes) que puedes elegir para el campo de batalla. Tambien hay diferentes modos de juego como el Supremacia donde 10 jugadores pelean entre si. Dota 2 se juego usualmente 5 jugadores contra otros 5 y en cada equipo cada jugador usa estos roles: Hard Carry, Semicarry (Mid), Offlaner, Semisupport, Hard Support. Cada año celebran un evento alrededor del mundo llamado The International donde van equipos clasificados para competir y asi intentar ganar el premio.</p>', '1920x10803.jpg', 'dota'),
(2, 'Battlefield 3', '<p><span class=\"dropcap text-info\">S</span>hooter con diversos modos de juego entre ellos: Todos contra Todos en Equipo, Todos contra Todos en Patrulla, Conquista, Asalto, Asalto por Patrullas, Asalto Conquista, Maestro Armero, Dominacion de Conquista, Soperioridad de Tanques, Carroñero, Superioridad Aérea. No volverás a estar sólo en la batalla gracias al poder de las nuevas características para la comunidad de Battlelog. Los jugadores pueden crear sus propios pelotones, comunicarse con otros jugadores y comparar su progreso multijugador con amigos y enemigos por igual.</p>', '193227.jpg', 'bf3'),
(3, 'Rainbow Six Siege', '<p><span style=\"color: #425d94;\" class=\"dropcap text-primary\">E</span>l juego consiste en partidas de equipos de cinco atacantes contra cinco defensores. Los defensores deben defender un objetivo dentro de una estructura, ya sea un rehén, dos bombas o un contenedor biológico. Si logran defender al objetivo con éxito o eliminan a todos los atacantes, ganan la ronda. Los atacantes deben rescatar, desactivar, o asegurar al objetivo (respectivamente), o eliminar a los defensores para ganar.</p>', 'rainbow.jpg', 'rainbow');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `com_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` varchar(9) NOT NULL,
  `created_at` varchar(55) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE `contador` (
  `id` int(11) NOT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `hora` varchar(8) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `horau` varchar(10) DEFAULT NULL,
  `diau` char(3) DEFAULT NULL,
  `aniou` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `text` varchar(300) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `tag` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id`, `title`, `text`, `fecha`, `tag`, `tipo`) VALUES
(1, 'TeamHouse', 'Hola! TeamHouse es el foro de la red local FullGame donde UD puede compartir con los demás usuarios subir capturas, mostrar vídeos cortos para divertirse y pasar un buen rato.', 'Nov 4', 'fa-plus-square', 'cd-success');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `idf` int(11) NOT NULL,
  `idt` int(11) NOT NULL,
  `text` varchar(140) NOT NULL,
  `time` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int(11) NOT NULL,
  `idu` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `readed` int(1) NOT NULL,
  `title` varchar(250) NOT NULL,
  `text` varchar(240) NOT NULL,
  `fecha` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id`, `idu`, `type`, `link`, `readed`, `title`, `text`, `fecha`) VALUES
(1, 1, 0, '#', 1, 'Bienvenido', 'Se bienvenido a TeamHouse', '11/12/20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `rango` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `image`, `created_at`, `status`, `rango`, `category_id`, `user_id`) VALUES
(1, 'Ayuda, Quejas y Sujerencias.', 'Articulo para pedir ayuda, sugerir lo que le parezca mejor o alguna queja para poder resolver su problema...', 'abd.png', '3/11/20', 0, 0, 1, 1),
(2, 'Ayuda, Quejas y Sujerencias.', 'Articulo para pedir ayuda, sugerir lo que le parezca mejor o alguna queja para poder resolver su problema...', 'abd.png', '4/11/20', 0, 0, 2, 1),
(3, 'Ayuda, Quejas y Sujerencias.\r\n', 'Articulo para pedir ayuda, sugerir lo que le parezca mejor o alguna queja para poder resolver su problema...', '', '21/11/20', 0, 0, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `range` int(11) NOT NULL,
  `pics` varchar(80) NOT NULL,
  `pics_bg` varchar(80) NOT NULL,
  `cumple` date NOT NULL,
  `biografia` varchar(250) NOT NULL,
  `tel` varchar(18) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `online` tinyint(1) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contrasena`, `email`, `range`, `pics`, `pics_bg`, `cumple`, `biografia`, `tel`, `fname`, `hash`, `online`, `active`) VALUES
(1, 'Marky', '3c8b245b1f27073b6e71ad780338c254', 'marky@teamhouse.ij', 3, '400040200139_237548.png', 'bg.jpg', '0000-00-00', 'Puedo llegar a ser un calvo', '55282694', 'Marcos Jesús Cardenas Perdomo', '81e74d678581a3bb7a720b019f4f1a93', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contador`
--
ALTER TABLE `contador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
