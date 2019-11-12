-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2019 a las 06:12:37
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gdlwebcamp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `editado` datetime NOT NULL,
  `nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_admin`, `usuario`, `nombre`, `password`, `editado`, `nivel`) VALUES
(1, 'admin', 'Jesus Manuel', '$2y$12$aqm5A1P5Tp87ekuqY6RmoOPBGbE2Jr5Zlwi57QSDTWHMk8nWxj/8a', '0000-00-00 00:00:00', 1),
(2, 'admin2', 'eduardo', '$2y$12$BG3ho5xC/Yn7s8Ir9p6RDu8U1qeBmQhj6I1i8OjgcWhejirL/J862', '2019-05-15 15:30:49', 0),
(12, 'admin3', 'joaquin', '$2y$12$UPyLevOAzshmDeQFGvsZueM1UTfQj3q2HZd.LG6BbNgTUVu1f2nmS', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL,
  `cat_evento` varchar(50) NOT NULL,
  `icono` varchar(15) NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria_evento`
--

INSERT INTO `categoria_evento` (`id_categoria`, `cat_evento`, `icono`, `editado`) VALUES
(1, 'Seminario', 'fa-university', '0000-00-00 00:00:00'),
(2, 'Conferencias', 'fa-comments', '0000-00-00 00:00:00'),
(3, 'Talleres', 'fa-code', '0000-00-00 00:00:00'),
(4, 'mentorias', 'fas fa-chess-kn', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `evento_id` tinyint(10) NOT NULL,
  `nombre_evento` varchar(60) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `id_cat_evento` tinyint(10) NOT NULL,
  `id_inv` tinyint(4) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `id_cat_evento`, `id_inv`, `clave`, `editado`) VALUES
(1, 'Responsive Web Design', '2016-12-09', '10:00:00', 3, 1, 'taller_01', '0000-00-00 00:00:00'),
(2, 'Flexbox', '2016-12-09', '12:00:00', 3, 2, 'taller_02', '0000-00-00 00:00:00'),
(3, 'HTML5 y CSS3', '2016-12-09', '14:00:00', 3, 3, 'taller_03', '0000-00-00 00:00:00'),
(4, 'Drupal', '2016-12-09', '17:00:00', 3, 4, 'taller_04', '0000-00-00 00:00:00'),
(5, 'WordPress', '2016-12-09', '19:00:00', 3, 5, 'taller_05', '0000-00-00 00:00:00'),
(6, 'Como ser freelancer', '2016-12-09', '10:00:00', 2, 6, 'conf_01', '0000-00-00 00:00:00'),
(7, 'Tecnologías del Futuro', '2016-12-09', '17:00:00', 2, 1, 'conf_02', '0000-00-00 00:00:00'),
(8, 'Seguridad en la Web', '2016-12-09', '19:00:00', 2, 2, 'conf_03', '0000-00-00 00:00:00'),
(9, 'Diseño UI y UX para móviles', '2016-12-09', '10:00:00', 1, 6, 'sem_01', '0000-00-00 00:00:00'),
(11, 'PHP y MySQL', '2016-12-10', '12:00:00', 3, 2, 'taller_07', '0000-00-00 00:00:00'),
(12, 'JavaScript Avanzado', '2016-12-10', '14:00:00', 3, 3, 'taller_08', '0000-00-00 00:00:00'),
(13, 'SEO en Google', '2016-12-10', '17:00:00', 3, 4, 'taller_09', '0000-00-00 00:00:00'),
(14, 'De Photoshop a HTML5 y CSS3', '2016-12-10', '19:00:00', 3, 5, 'taller_10', '0000-00-00 00:00:00'),
(15, 'PHP Intermedio y Avanzado', '2016-12-10', '21:00:00', 3, 6, 'taller_11', '0000-00-00 00:00:00'),
(16, 'Como crear una tienda online que venda millones en pocos día', '2016-12-10', '10:00:00', 2, 6, 'conf_04', '0000-00-00 00:00:00'),
(17, 'Los mejores lugares para encontrar trabajo', '2016-12-10', '17:00:00', 2, 1, 'conf_05', '0000-00-00 00:00:00'),
(18, 'Pasos para crear un negocio rentable ', '2016-12-10', '19:00:00', 2, 2, 'conf_06', '0000-00-00 00:00:00'),
(19, 'Aprende a Programar en una mañana ', '2016-12-10', '10:00:00', 1, 3, 'sem_02', '0000-00-00 00:00:00'),
(20, 'Diseño UI y UX para móviles', '2016-12-10', '17:00:00', 1, 5, 'sem_03', '0000-00-00 00:00:00'),
(21, 'Laravel', '2016-12-11', '10:00:00', 3, 1, 'taller_12', '0000-00-00 00:00:00'),
(22, 'Crea tu propia API', '2016-12-11', '12:00:00', 3, 2, 'taller_13', '0000-00-00 00:00:00'),
(23, 'JavaScript y jQuery', '2016-12-11', '14:00:00', 3, 3, 'taller_14', '0000-00-00 00:00:00'),
(24, 'Creando Plantillas para WordPress', '2016-12-11', '17:00:00', 3, 4, 'taller_15', '0000-00-00 00:00:00'),
(25, 'Tiendas Virtuales en Magento', '2016-12-11', '19:00:00', 3, 5, 'taller_16', '0000-00-00 00:00:00'),
(26, 'Como hacer Marketing en línea', '2016-12-11', '10:00:00', 2, 6, 'conf_07', '0000-00-00 00:00:00'),
(27, '¿Con que lenguaje debo empezar?', '2016-12-11', '17:00:00', 2, 2, 'conf_08', '0000-00-00 00:00:00'),
(28, 'Frameworks y librerias Open Source', '2016-12-11', '19:00:00', 2, 3, 'conf_09', '0000-00-00 00:00:00'),
(29, 'Creando una App en Android en una mañana', '2016-12-11', '10:00:00', 1, 4, 'sem_04', '0000-00-00 00:00:00'),
(30, 'Creando una App en iOS en una tarde', '2016-12-11', '17:00:00', 1, 1, 'sem_05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `invitado_id` tinyint(4) NOT NULL,
  `nombre_invitado` varchar(30) NOT NULL,
  `apellido_invitado` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `url_imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`invitado_id`, `nombre_invitado`, `apellido_invitado`, `descripcion`, `url_imagen`) VALUES
(1, 'Rafael', 'Bautista', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem', 'invitado1.jpg'),
(2, 'shari', 'Herrera', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem', 'invitado2.jpg'),
(3, 'Gregorio', 'Sanchez', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem', 'invitado3.jpg'),
(4, 'Susana', 'Rivera', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem', 'invitado4.jpg'),
(5, 'Harol', 'Garcia', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem', 'invitado5.jpg'),
(6, 'Susan', 'Sanchez', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nam quod in, veniam laudantium, cum recusandae et error necessitatibus velit accusamus exercitationem', 'invitado6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

CREATE TABLE `regalos` (
  `ID_regalo` int(11) NOT NULL,
  `nombre_regalo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `regalos`
--

INSERT INTO `regalos` (`ID_regalo`, `nombre_regalo`) VALUES
(1, 'Pulsera'),
(2, 'Etiquetas'),
(3, 'Pluma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrados`
--

CREATE TABLE `registrados` (
  `ID_Registrado` bigint(20) UNSIGNED NOT NULL,
  `nombre_registrado` varchar(50) NOT NULL,
  `apellido_registrado` varchar(50) NOT NULL,
  `email_registrado` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `pases_articulos` longtext NOT NULL,
  `talleres_registrados` longtext NOT NULL,
  `regalo` int(11) NOT NULL,
  `total_pagado` varchar(50) NOT NULL,
  `pagado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registrados`
--

INSERT INTO `registrados` (`ID_Registrado`, `nombre_registrado`, `apellido_registrado`, `email_registrado`, `fecha_registro`, `pases_articulos`, `talleres_registrados`, `regalo`, `total_pagado`, `pagado`) VALUES
(40, 'Jesus Manuel', 'Loredo', 'bongo_rey_90@hotmail.com', '2019-04-16 19:01:51', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"conf_03\"]}', 2, '41.3', 1),
(41, 'Jesus Manuel', 'Loredo', 'bongo_rey_90@hotmail.com', '2019-04-16 20:06:26', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"conf_02\",\"conf_06\",\"conf_09\"]}', 2, '61.3', 0),
(42, 'manuel', 'sauceda', 'corrreo@correo', '2019-04-16 20:21:58', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1}', '{\"eventos\":[\"conf_03\"]}', 2, '50', 0),
(43, 'eduardo', 'Loredo', 'cheyente@hotmail.com', '2019-04-16 20:25:05', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1}', '{\"eventos\":[\"taller_02\"]}', 2, '30', 0),
(44, 'MANUEL NUEVO', 'LOREDO SAUCEDA', 'bongo_rey_90@hotmail.com', '2019-04-16 20:27:51', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"conf_02\",\"conf_06\",\"conf_09\"]}', 2, '61.3', 1),
(45, 'Jesus Manuel', 'Loredo', 'bongo_rey_90@hotmail.com', '2019-04-26 21:29:22', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '[]', 1, '106.3', 0),
(46, 'Jesus Manuel', 'Loredo', 'bongo_rey_90@hotmail.com', '2019-05-06 23:32:39', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"conf_03\"]}', 1, '41.3', 0),
(47, '', '', '', '2019-06-05 15:26:49', '{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"1\"},\"pase_2dias\":{\"cantidad\":\"1\"},\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"9\",\"16\",\"21\"]}', 3, '136.3', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_id`),
  ADD KEY `id_cat_evento` (`id_cat_evento`),
  ADD KEY `id_inv` (`id_inv`);

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`invitado_id`);

--
-- Indices de la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`ID_regalo`);

--
-- Indices de la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD PRIMARY KEY (`ID_Registrado`),
  ADD KEY `regalo` (`regalo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `evento_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `invitados`
--
ALTER TABLE `invitados`
  MODIFY `invitado_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `regalos`
--
ALTER TABLE `regalos`
  MODIFY `ID_regalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registrados`
--
ALTER TABLE `registrados`
  MODIFY `ID_Registrado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`id_categoria`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `invitados` (`invitado_id`);

--
-- Filtros para la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD CONSTRAINT `registrados_ibfk_1` FOREIGN KEY (`regalo`) REFERENCES `regalos` (`ID_regalo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
