-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2021 a las 17:47:02
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agroseja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agroquimicos`
--

CREATE TABLE `agroquimicos` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio_contado` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio_credito` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `orden` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `agroquimicos`
--

INSERT INTO `agroquimicos` (`id`, `imagen`, `titulo`, `precio_contado`, `precio_credito`, `orden`) VALUES
(1, '', 'AMC foliar', '100', '105', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `ubicacion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `ubicacion`, `telefono`, `correo`) VALUES
(1, 'Carretera Buenaventura-Nvo. Casas Grandes, Buenaventura, Chih.', '6960313', 'agroseja@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio_contado` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio_credito` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `orden` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `subtitulo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `orden` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `imagen`, `titulo`, `subtitulo`, `descripcion`, `orden`) VALUES
(2, 'Vistas/img/galeria/Gal677.png', 'Demostración Mccormick', 'Demostración del modelo MC15', '                \r\n              Demostracion de arrastre', '2'),
(3, 'Vistas/img/galeria/Gal284.png', 'Demostración Mccormick', 'Demostración del modelo MC18', '                Demostracion de arrastre\r\n              ', '3'),
(4, 'Vistas/img/galeria/Gal818.jpeg', 'Demostración Mccormick', 'Flores Magón, Chihuahua', '                Demostración del modelo B-MAX 90 a productores de Ricardo Flores Magon.\r\n              ', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generales`
--

CREATE TABLE `generales` (
  `id` int(11) NOT NULL,
  `favicon` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `titular` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `logotipo` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `generales`
--

INSERT INTO `generales` (`id`, `favicon`, `titular`, `logotipo`) VALUES
(1, '', 'Agroservicios Jacquez', 'Vistas/img/generales546.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas`
--

CREATE TABLE `herramientas` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `icono` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `herramientas`
--

INSERT INTO `herramientas` (`id`, `titulo`, `icono`, `descripcion`, `imagen`) VALUES
(1, 'Herramientas Mccormick', '', 'Arado', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `asunto` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `email`, `telefono`, `asunto`, `mensaje`, `fecha`) VALUES
(3, 'Pedro', 'pedro@gmail.com', '6362222222', 'cotizacion', 'Cotizacion Mccormick X20', '2021-07-09 23:27:19'),
(4, 'Pedro', 'pedro@gmail.com', '63611111111', 'cotizacion', 'cotizacion', '2021-07-10 19:03:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE `nosotros` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `introduccion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`id`, `titulo`, `introduccion`, `descripcion`, `imagen`) VALUES
(1, 'Bienvenido a Agroservicios Jacquez', '	    	                \r\n\r\n	                \r\nLa empresa agrícola de Buenaventura                \r\n	                \r\n	                \r\n	                \r\n	                \r\n	    ', 'La empresa fue fundada en el año de 2006 por el ing. Rogelio Jacquez Venzor en el poblado de Ricardo Flores Magón, en el municipio de Buenaventura. La empresa inicio con la venta de insumos agrícolas y con la visión de expandirse, en el año 2007 abre sus puertas la primera sucursal en el poblado de Buenaventura. En la actualidad, 15 años después de su fundación, la empresa de Agroservicios Jacquez cuenta con un amplio catálogo de insumos y maquinaria agrícola, además de ofrecer el servicio de asesoría técnica a sus clientes.\r\n\r\n	    Misión\r\n“Satisfacer las necesidades de insumos agrícolas de nuestros clientes, a quienes brindamos servicios y productos de calidad, acompañados de una excelente atención”\r\nVisión.\r\n“Ser una empresa de reconocimiento en el estado de Chihuahua en la comercialización de productos y maquinaria agrícola, con un crecimiento sostenible y rentable que aporte al desarrollo de nuestro personal”\r\nValores.\r\n•	Pasión por el campo agrícola.\r\n•	Honestidad.\r\n•	Creatividad.\r\n•	Trabajo en equipo.\r\n•	Enfoque a la sustentabilidad.\r\n			  \r\n				  \r\n	    ', 'Vistas/img/nosotros/N810.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` int(11) NOT NULL,
  `url` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `icono` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `icono` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `icono`, `descripcion`, `imagen`) VALUES
(1, 'Asesoría en campo', 'list', 'Revisión de cultivos y receta de productos', ''),
(2, 'Análisis de suelo', 'tree', 'Revisión de la composición del suelo de cultivo y receta de productos', ''),
(3, 'Asesoría en aplicación de productos', 'warning', 'Receta de productos agroquímicos', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `titular` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `orden` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`id`, `titular`, `descripcion`, `orden`, `imagen`) VALUES
(2, 'Mccormick', '            G-MAX', '1', 'Vistas/img/slide/S824.jpg'),
(5, 'Mccormick', '                \r\n             A-MAX 90 Turbo ', '2', 'Vistas/img/slide/S142.jpg'),
(6, 'Mccormick', '                \r\n              D-max', '3', 'Vistas/img/slide/S314.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptores`
--

CREATE TABLE `suscriptores` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `suscriptores`
--

INSERT INTO `suscriptores` (`id`, `email`) VALUES
(1, 'antoniojm.2133@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp_cotizacion`
--

CREATE TABLE `tmp_cotizacion` (
  `id_tmp` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tmp_cotizacion`
--

INSERT INTO `tmp_cotizacion` (`id_tmp`, `id_producto`, `cantidad_tmp`, `precio_tmp`, `session_id`) VALUES
(0, 2, 2, 450000.00, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tractores`
--

CREATE TABLE `tractores` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio_contado` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio_credito` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `orden` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tractores`
--

INSERT INTO `tractores` (`id`, `imagen`, `titulo`, `precio_contado`, `precio_credito`, `orden`) VALUES
(1, '', 'Mccormick A-MAX 90', '450000', '550000', '1'),
(2, '', 'Mcormick G-MAX', '250000', '350000', '2'),
(3, '', 'Mccormick B-MAX', '200000', '270000', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `rol` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `foto`, `rol`) VALUES
(1, 'Admin', '123', 'Vistas/img/usuarios/U110.png', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agroquimicos`
--
ALTER TABLE `agroquimicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generales`
--
ALTER TABLE `generales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscriptores`
--
ALTER TABLE `suscriptores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tractores`
--
ALTER TABLE `tractores`
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
-- AUTO_INCREMENT de la tabla `agroquimicos`
--
ALTER TABLE `agroquimicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `generales`
--
ALTER TABLE `generales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `suscriptores`
--
ALTER TABLE `suscriptores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tractores`
--
ALTER TABLE `tractores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
