# Mande - Hoteles
Sistema de reservas para hoteles



Web oficial: 

http://mande.ec/web/sistema-de-reservas-para-hoteles/

Demos:

----------------
|Usuario |login |clave|
----------------------
|root|root|rot|
|administrador|admin|admin|
----------------

```
-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Dim 04 Décembre 2016 à 20:04
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `titulo` varchar(300) COLLATE utf8_bin NOT NULL,
  `contenido` text COLLATE utf8_bin NOT NULL,
  `fecha_registro` date NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `articulos`
--

INSERT INTO `articulos` (`id`, `id_tipo`, `titulo`, `contenido`, `fecha_registro`, `estatus`) VALUES
(1, 1, 'Pagina 1', 'Este es el contenido de la pagina 1', '2016-12-01', 1),
(2, 1, 'Contactenos', 'Contenido', '2016-12-09', 0),
(3, 2, 'Reservas desde la web &Ã©\\"\\\'(Â§Ã¨!Ã§Ã )$Ã¹', 'Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido Este es el contenido ', '2016-12-12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `casas`
--

CREATE TABLE `casas` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `casa` varchar(50) COLLATE utf8_bin NOT NULL,
  `capacidad` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `casas`
--

INSERT INTO `casas` (`id`, `id_empresa`, `casa`, `capacidad`, `estatus`) VALUES
(2, 1, 'Casa 1', 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `id_manager` int(11) NOT NULL,
  `sexo` int(1) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `cpostal` varchar(10) NOT NULL,
  `telefono_casa` varchar(50) NOT NULL,
  `telefono_trabajo` varchar(50) NOT NULL,
  `telefono_mobil` varchar(50) NOT NULL,
  `email` varchar(260) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `linkedin` varchar(300) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `foto` varchar(150) NOT NULL,
  `notas` text NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contactos`
--

INSERT INTO `contactos` (`id`, `id_manager`, `sexo`, `nombres`, `apellidos`, `cedula`, `pais`, `provincia`, `ciudad`, `direccion`, `cpostal`, `telefono_casa`, `telefono_trabajo`, `telefono_mobil`, `email`, `facebook`, `linkedin`, `fecha_nacimiento`, `fecha_registro`, `foto`, `notas`, `estatus`) VALUES
(1, 1, 0, 'Robinson', 'Coello', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '2016-12-02 21:07:14', '', '', 0),
(1000, 1, 1, 'Vinicio', 'Coello', '17125487444', 'EC', 'Pichincha', 'Quito', 'Salvador celi', '17084', '', '', '', 'vinicio@yahoo.com', '', '', '2016-12-02', '2016-12-02 21:05:14', '', '', 1),
(1001, 1, 1, 'Angelica ', 'Coello', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '2016-12-02 21:07:57', '', '', 0),
(1006, 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', 1),
(1007, 1001, 0, 'iverth', 'Segovia', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', 0),
(1008, 1001, 1, 'Vinicio ', 'Segovia', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', 0),
(1009, 1007, 1, 'roberto', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', 1),
(1010, 1001, 0, 'mujer', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', 0),
(1011, 1001, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', 1),
(1012, 1, 1, 'Jean pierre', 'Vanluck', '', 'Be', '', 'Bruxeles', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', 1),
(1013, 1, 1, 'Nombre', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', 1),
(1014, 1001, 1, 'DDDDDD', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', 0),
(1015, 1014, 1, 'DD', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `id_propietario` int(11) NOT NULL,
  `sitio_web` varchar(300) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(50) COLLATE utf8_bin NOT NULL,
  `sector_actividad` int(11) NOT NULL,
  `pais` varchar(10) COLLATE utf8_bin NOT NULL,
  `provincia` varchar(50) COLLATE utf8_bin NOT NULL,
  `ciudad` varchar(50) COLLATE utf8_bin NOT NULL,
  `cpostal` varchar(10) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(300) COLLATE utf8_bin NOT NULL,
  `tel` varchar(50) COLLATE utf8_bin NOT NULL,
  `fax` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(300) COLLATE utf8_bin NOT NULL,
  `twitter` varchar(100) COLLATE utf8_bin NOT NULL,
  `google_plus` varchar(100) COLLATE utf8_bin NOT NULL,
  `facebook` varchar(100) COLLATE utf8_bin NOT NULL,
  `linkedin` varchar(100) COLLATE utf8_bin NOT NULL,
  `empresa_contacto` varchar(50) COLLATE utf8_bin NOT NULL,
  `empresa_contacto_email` varchar(300) COLLATE utf8_bin NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `empresas`
--

INSERT INTO `empresas` (`id`, `id_propietario`, `sitio_web`, `nombre`, `tipo`, `sector_actividad`, `pais`, `provincia`, `ciudad`, `cpostal`, `direccion`, `tel`, `fax`, `email`, `twitter`, `google_plus`, `facebook`, `linkedin`, `empresa_contacto`, `empresa_contacto_email`, `estatus`) VALUES
(1, 1000, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(2, 1000, '', 'Casa de Saya', 'Rusticas', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `id_casa` int(11) NOT NULL,
  `id_contacto` int(11) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `pax` int(11) NOT NULL,
  `precio_noche_persona` decimal(10,0) NOT NULL,
  `notas` text COLLATE utf8_bin NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `reservas`
--

INSERT INTO `reservas` (`id`, `id_casa`, `id_contacto`, `fecha_entrada`, `fecha_salida`, `pax`, `precio_noche_persona`, `notas`, `estatus`) VALUES
(11, 2, 1014, '0000-00-00', '0000-00-00', 0, '0', '', 1),
(13, 2, 1012, '0000-00-00', '0000-00-00', 10, '11', 'test', 1),
(14, 2, 1, '2016-11-08', '2016-11-08', 2, '15', 'para pato y tobin', 0),
(15, 2, 1012, '2016-11-08', '2016-11-12', 2, '9', 'demodemod dmeod mode', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tipos_contenido`
--

CREATE TABLE `tipos_contenido` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `tipos_contenido`
--

INSERT INTO `tipos_contenido` (`id`, `tipo`) VALUES
(1, 'Páginas'),
(2, 'Noticias'),
(3, 'Extras');

-- --------------------------------------------------------

--
-- Structure de la table `_contenido`
--

CREATE TABLE `_contenido` (
  `id` int(11) NOT NULL,
  `frase` varchar(250) COLLATE utf8_bin NOT NULL,
  `contexto` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `_contenido`
--

INSERT INTO `_contenido` (`id`, `frase`, `contexto`) VALUES
(14, 'Accion', ''),
(61, 'Activo', ''),
(19, 'Apellidos', ''),
(62, 'Bloqueado', ''),
(9, 'Buscar', ''),
(57, 'Capacidad', ''),
(56, 'Casa', ''),
(20, 'Cedula', ''),
(23, 'Ciudad', ''),
(11, 'Contexto', ''),
(25, 'Cpostal', ''),
(24, 'Direccion', ''),
(26, 'Email', ''),
(44, 'Empresa_contacto', ''),
(45, 'Empresa_contacto_email', ''),
(32, 'Estatus', ''),
(27, 'Facebook', ''),
(41, 'Fax', ''),
(51, 'Fecha_fin', ''),
(50, 'Fecha_inicio', ''),
(29, 'Fecha_nacimiento', ''),
(30, 'Fecha_registro', ''),
(31, 'Foto', ''),
(10, 'Frase', ''),
(43, 'Google_plus', ''),
(48, 'Id_casa', ''),
(49, 'Id_contacto', ''),
(55, 'Id_empresa', ''),
(16, 'Id_manager', ''),
(35, 'Id_propietario', ''),
(67, 'Idioma', ''),
(4, 'Inicio', ''),
(28, 'Linkedin', ''),
(8, 'Lista', ''),
(12, 'Lista de _contenido', ''),
(68, 'Lista de _idiomas', ''),
(58, 'Lista de casas', ''),
(33, 'Lista de contactos', ''),
(46, 'Lista de empresas', ''),
(53, 'Lista de reservas', ''),
(37, 'Nombre', ''),
(18, 'Nombres', ''),
(13, 'Nueva', ''),
(65, 'Nuevo', ''),
(60, 'Nuevo contactos', ''),
(64, 'Nuevo reservas', ''),
(21, 'Pais', ''),
(52, 'Pax', ''),
(22, 'Provincia', ''),
(63, 'Registrar', ''),
(39, 'Sector_actividad', ''),
(17, 'Sexo', ''),
(36, 'Sitio_web', ''),
(40, 'Tel', ''),
(38, 'Tipo', ''),
(42, 'Twitter', ''),
(7, '_contenido', ''),
(66, '_idiomas', ''),
(54, 'casas', ''),
(15, 'contactos', ''),
(59, 'crear', ''),
(34, 'empresas', ''),
(5, 'home', ''),
(6, 'index', ''),
(47, 'reservas', '');

-- --------------------------------------------------------

--
-- Structure de la table `_grupos`
--

CREATE TABLE `_grupos` (
  `id` int(11) NOT NULL,
  `grupo` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `_grupos`
--

INSERT INTO `_grupos` (`id`, `grupo`) VALUES
(12, 'administradores'),
(14, 'invitados'),
(11, 'root'),
(13, 'usuarios');

-- --------------------------------------------------------

--
-- Structure de la table `_idiomas`
--

CREATE TABLE `_idiomas` (
  `id` int(11) NOT NULL,
  `idioma` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `_menu`
--

CREATE TABLE `_menu` (
  `id` int(11) NOT NULL,
  `ubicacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `padre` varchar(50) COLLATE utf8_bin NOT NULL,
  `label` varchar(50) COLLATE utf8_bin NOT NULL,
  `url` varchar(50) COLLATE utf8_bin NOT NULL,
  `icono` varchar(50) COLLATE utf8_bin NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `_menu`
--

INSERT INTO `_menu` (`id`, `ubicacion`, `padre`, `label`, `url`, `icono`, `orden`) VALUES
(1, 'top', 'config', '_contenido', '?p=_contenido&c=index', '', 0),
(2, 'top', 'config', '_grupos', '?p=_grupos&c=index', '', 0),
(3, 'top', 'config', '_idiomas', '?p=_idiomas&c=index', '', 0),
(4, 'top', 'config', '_menu', '?p=_menu&c=index', '', 0),
(5, 'top', 'config', '_paginas', '?p=_paginas&c=index', '', 0),
(6, 'top', 'config', '_permisos', '?p=_permisos&c=index', '', 0),
(7, 'top', 'config', '_traducciones', '?p=_traducciones&c=index', '', 0),
(8, 'top', 'config', '_usuarios', '?p=_usuarios&c=index', '', 0),
(9, 'top', 'admin', 'casas', '?p=casas&c=index', '', 0),
(10, 'top', 'admin', 'empresas', '?p=empresas&c=index', '', 0),
(11, 'sidebar', 'gestion', 'contactos', '?p=contactos&c=index', '', 0),
(12, 'sidebar', 'gestion', 'reservas', '?p=reservas&c=index', '', 0),
(13, 'sidebar', 'gestion', 'contactos', '?p=contactos&c=index', '', 0),
(14, 'sidebar', 'gestion', 'reservas', '?p=reservas&c=index', '', 0),
(15, 'sidebar', 'gestion', 'reservas', '?p=reservas&c=index', '', 0),
(16, 'sidebar', 'gestion', 'reservas', '?p=reservas&c=index', '', 0),
(17, 'sidebar', 'gestion', 'reservas', '?p=reservas&c=index', '', 0),
(18, 'sidebar', 'gestion', 'reservas', '?p=reservas&c=index', '', 0),
(19, 'sidebar', 'gestion', 'reservas', '?p=reservas&c=index', '', 0),
(20, 'sidebar', 'gestion', 'reservas', '?p=reservas&c=index', '', 0),
(21, 'top', 'admin', 'casas', '?p=casas&c=index', '', 0),
(22, 'sidebar', 'gestion', 'reservas', '?p=reservas&c=index', '', 0),
(23, 'sidebar', 'gestion', 'reservas', '?p=reservas&c=index', '', 0),
(24, 'sidebar', 'gestion', 'contactos', '?p=contactos&c=index', '', 0),
(25, 'sidebar', 'gestion', 'articulos', '?p=articulos&c=index', '', 0),
(26, 'top', 'config', 'tipos_contenido', '?p=tipos_contenido&c=index', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `_paginas`
--

CREATE TABLE `_paginas` (
  `id` int(11) NOT NULL,
  `pagina` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `_paginas`
--

INSERT INTO `_paginas` (`id`, `pagina`) VALUES
(21, '_contenido'),
(22, '_grupos'),
(23, '_idiomas'),
(24, '_menu'),
(25, '_paginas'),
(26, '_permisos'),
(27, '_traducciones'),
(28, '_usuarios'),
(115, 'articulos'),
(29, 'casas'),
(30, 'contactos'),
(32, 'empresas'),
(31, 'reservas'),
(116, 'tipos_contenido');

-- --------------------------------------------------------

--
-- Structure de la table `_permisos`
--

CREATE TABLE `_permisos` (
  `id` int(11) NOT NULL,
  `grupo` varchar(50) COLLATE utf8_bin NOT NULL,
  `pagina` varchar(50) COLLATE utf8_bin NOT NULL,
  `permiso` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `_permisos`
--

INSERT INTO `_permisos` (`id`, `grupo`, `pagina`, `permiso`) VALUES
(39, 'root', '_contenido', 1111),
(40, 'invitados', '_contenido', 1000),
(41, 'root', '_grupos', 1111),
(42, 'invitados', '_grupos', 1000),
(43, 'root', '_idiomas', 1111),
(44, 'invitados', '_idiomas', 1000),
(45, 'root', '_menu', 1111),
(46, 'invitados', '_menu', 1000),
(47, 'root', '_paginas', 1111),
(48, 'invitados', '_paginas', 1000),
(49, 'root', '_permisos', 1111),
(50, 'invitados', '_permisos', 1000),
(51, 'root', '_traducciones', 1111),
(52, 'invitados', '_traducciones', 1000),
(53, 'root', '_usuarios', 1111),
(54, 'invitados', '_usuarios', 1000),
(55, 'root', 'casas', 1111),
(56, 'invitados', 'casas', 1000),
(57, 'root', 'contactos', 1111),
(58, 'invitados', 'contactos', 1000),
(59, 'root', 'reservas', 1111),
(60, 'invitados', 'reservas', 1000),
(61, 'root', 'empresas', 1111),
(62, 'invitados', 'empresas', 1000),
(227, 'root', 'articulos', 1111),
(228, 'invitados', 'articulos', 1000),
(229, 'root', 'tipos_contenido', 1111),
(230, 'invitados', 'tipos_contenido', 1000);

-- --------------------------------------------------------

--
-- Structure de la table `_traducciones`
--

CREATE TABLE `_traducciones` (
  `id` int(11) NOT NULL,
  `contenido_id` int(11) NOT NULL,
  `idioma` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `traduccion` varchar(250) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `_traducciones`
--

INSERT INTO `_traducciones` (`id`, `contenido_id`, `idioma`, `traduccion`) VALUES
(4, 4, 'es', 'Inicio'),
(5, 5, 'es', 'home'),
(6, 6, 'es', 'index'),
(7, 7, 'es', '_contenido'),
(8, 8, 'es', 'Lista'),
(9, 9, 'es', 'Buscar'),
(10, 10, 'es', 'Frase'),
(11, 11, 'es', 'Contexto'),
(12, 12, 'es', 'Lista de _contenido'),
(13, 13, 'es', 'Nueva'),
(14, 14, 'es', 'Accion'),
(15, 15, 'es', 'contactos'),
(16, 16, 'es', 'Id_manager'),
(17, 17, 'es', 'Sexo'),
(18, 18, 'es', 'Nombres'),
(19, 19, 'es', 'Apellidos'),
(20, 20, 'es', 'Cedula'),
(21, 21, 'es', 'Pais'),
(22, 22, 'es', 'Provincia'),
(23, 23, 'es', 'Ciudad'),
(24, 24, 'es', 'Direccion'),
(25, 25, 'es', 'Cpostal'),
(26, 26, 'es', 'Email'),
(27, 27, 'es', 'Facebook'),
(28, 28, 'es', 'Linkedin'),
(29, 29, 'es', 'Fecha_nacimiento'),
(30, 30, 'es', 'Fecha_registro'),
(31, 31, 'es', 'Foto'),
(32, 32, 'es', 'Estatus'),
(33, 33, 'es', 'Lista de contactos'),
(34, 34, 'es', 'empresas'),
(35, 35, 'es', 'Id_propietario'),
(36, 36, 'es', 'Sitio_web'),
(37, 37, 'es', 'Nombre'),
(38, 38, 'es', 'Tipo'),
(39, 39, 'es', 'Sector_actividad'),
(40, 40, 'es', 'Tel'),
(41, 41, 'es', 'Fax'),
(42, 42, 'es', 'Twitter'),
(43, 43, 'es', 'Google_plus'),
(44, 44, 'es', 'Empresa_contacto'),
(45, 45, 'es', 'Empresa_contacto_email'),
(46, 46, 'es', 'Lista de empresas'),
(47, 47, 'es', 'reservas'),
(48, 48, 'es', 'Id_casa'),
(49, 49, 'es', 'Id_contacto'),
(50, 50, 'es', 'Fecha_inicio'),
(51, 51, 'es', 'Fecha_fin'),
(52, 52, 'es', 'Pax'),
(53, 53, 'es', 'Lista de reservas'),
(54, 54, 'es', 'casas'),
(55, 55, 'es', 'Id_empresa'),
(56, 56, 'es', 'Casa'),
(57, 57, 'es', 'Capacidad'),
(58, 58, 'es', 'Lista de casas'),
(59, 59, 'es', 'crear'),
(60, 60, 'es', 'Nuevo contactos'),
(61, 61, 'es', 'Activo'),
(62, 62, 'es', 'Bloqueado'),
(63, 63, 'es', 'Registrar'),
(64, 64, 'es', 'Nuevo reservas'),
(65, 65, 'es', 'Nuevo'),
(66, 66, 'es', '_idiomas'),
(67, 67, 'es', 'Idioma'),
(68, 68, 'es', 'Lista de _idiomas');

-- --------------------------------------------------------

--
-- Structure de la table `_usuarios`
--

CREATE TABLE `_usuarios` (
  `id` int(11) NOT NULL,
  `grupo` varchar(50) COLLATE utf8_bin NOT NULL,
  `nombres` varchar(100) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(50) COLLATE utf8_bin NOT NULL,
  `clave` varchar(50) COLLATE utf8_bin NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `_usuarios`
--

INSERT INTO `_usuarios` (`id`, `grupo`, `nombres`, `usuario`, `clave`, `estatus`) VALUES
(1, 'root', 'root', 'root', 'root', 1),
(2, 'administradores', 'admin', 'admin', 'admin', 1),
(3, 'usuarios', 'usuario', 'usuario', 'usuario', 1),
(4, 'invitados', 'invitado', 'invitado', 'invitado', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`id_tipo`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Index pour la table `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_empresa` (`id_empresa`,`casa`);

--
-- Index pour la table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`id_manager`),
  ADD KEY `id_manager` (`id_manager`);

--
-- Index pour la table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_propietario` (`id_propietario`,`nombre`);

--
-- Index pour la table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_casa` (`id_casa`,`id_contacto`,`fecha_entrada`) USING BTREE,
  ADD KEY `id_contacto` (`id_contacto`);

--
-- Index pour la table `tipos_contenido`
--
ALTER TABLE `tipos_contenido`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `_contenido`
--
ALTER TABLE `_contenido`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `frase_UNIQUE` (`frase`,`contexto`);

--
-- Index pour la table `_grupos`
--
ALTER TABLE `_grupos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grupo_UNIQUE` (`grupo`),
  ADD UNIQUE KEY `grupo` (`grupo`),
  ADD UNIQUE KEY `grupo_2` (`grupo`);

--
-- Index pour la table `_idiomas`
--
ALTER TABLE `_idiomas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idioma` (`idioma`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Index pour la table `_menu`
--
ALTER TABLE `_menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `_paginas`
--
ALTER TABLE `_paginas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pagina_UNIQUE` (`pagina`);

--
-- Index pour la table `_permisos`
--
ALTER TABLE `_permisos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grupo_pagina` (`grupo`,`pagina`),
  ADD KEY `fk_permisos_paginas_idx` (`pagina`),
  ADD KEY `fk_permisos_grupos_idx` (`grupo`);

--
-- Index pour la table `_traducciones`
--
ALTER TABLE `_traducciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contenido_id` (`contenido_id`,`idioma`),
  ADD KEY `fk_traduccion_idioma_idx` (`idioma`);

--
-- Index pour la table `_usuarios`
--
ALTER TABLE `_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `casas`
--
ALTER TABLE `casas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;
--
-- AUTO_INCREMENT pour la table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `tipos_contenido`
--
ALTER TABLE `tipos_contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `_contenido`
--
ALTER TABLE `_contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT pour la table `_grupos`
--
ALTER TABLE `_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `_idiomas`
--
ALTER TABLE `_idiomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `_menu`
--
ALTER TABLE `_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `_paginas`
--
ALTER TABLE `_paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT pour la table `_permisos`
--
ALTER TABLE `_permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;
--
-- AUTO_INCREMENT pour la table `_traducciones`
--
ALTER TABLE `_traducciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT pour la table `_usuarios`
--
ALTER TABLE `_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipos_contenido` (`id`);

--
-- Contraintes pour la table `casas`
--
ALTER TABLE `casas`
  ADD CONSTRAINT `casas_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`);

--
-- Contraintes pour la table `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `contactos_ibfk_1` FOREIGN KEY (`id_manager`) REFERENCES `contactos` (`id`);

--
-- Contraintes pour la table `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`id_propietario`) REFERENCES `contactos` (`id`);

--
-- Contraintes pour la table `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_casa`) REFERENCES `casas` (`id`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_contacto`) REFERENCES `contactos` (`id`);

--
-- Contraintes pour la table `_permisos`
--
ALTER TABLE `_permisos`
  ADD CONSTRAINT `fk_permisos_grupos` FOREIGN KEY (`grupo`) REFERENCES `_grupos` (`grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_permisos_paginas` FOREIGN KEY (`pagina`) REFERENCES `_paginas` (`pagina`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```