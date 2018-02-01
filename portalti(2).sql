-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-01-2018 a las 16:47:11
-- Versión del servidor: 5.7.20-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portalti`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articlefiles`
--

CREATE TABLE `articlefiles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `answer` text,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `selected` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `answer`, `modified`, `user_id`, `created`, `selected`) VALUES
(28, 'asdsdasdf', 'as', '2017-11-30 15:42:20', 17, '2017-11-30 15:42:20', 1),
(29, 'REPARACION DE ERRORES CAMARA CCTV', 'RECONECTAR CAMARAS', '2017-12-22 11:31:21', 1, '2017-12-22 11:31:21', 1),
(30, 'SOLUCION ACTUALIZACIONES WINDOWS', 'DESHABILITAR LA ACTUALIZACION DE WINDOWS DESDE LAS TAREAS INICIALES', '2017-12-22 11:32:41', 2, '2017-12-22 11:32:41', 2),
(31, 'FALLA DE WIFI', 'REINSTALACION DEL CONTROLADOR DEL DISPOSITIVO', '2017-12-22 11:33:39', 4, '2017-12-22 11:33:39', 2),
(32, 'MENSAJE DE ERROR EN PAGO DE AGUINALDOS', 'REINICIAR EL EQUIPO', '2017-12-22 11:35:09', 12, '2017-12-22 11:35:09', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles_roles`
--

CREATE TABLE `articles_roles` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articles_roles`
--

INSERT INTO `articles_roles` (`id`, `article_id`, `role_id`) VALUES
(1, 15, 2),
(2, 15, 3),
(3, 15, 4),
(4, 16, 2),
(5, 16, 3),
(6, 16, 4),
(7, 17, 2),
(8, 17, 3),
(9, 17, 4),
(10, 18, 2),
(11, 18, 3),
(12, 18, 4),
(13, 19, 2),
(14, 19, 3),
(15, 19, 4),
(16, 20, 2),
(17, 20, 3),
(18, 20, 4),
(19, 21, 2),
(20, 21, 3),
(21, 21, 4),
(22, 22, 2),
(23, 22, 3),
(24, 22, 4),
(25, 23, 2),
(26, 23, 3),
(27, 23, 4),
(28, 24, 2),
(29, 24, 3),
(30, 24, 4),
(31, 25, 2),
(32, 25, 3),
(33, 25, 4),
(34, 26, 2),
(35, 26, 3),
(36, 26, 4),
(37, 28, 4),
(38, 29, 3),
(39, 30, 1),
(40, 32, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `branchgroup_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `branches`
--

INSERT INTO `branches` (`id`, `name`, `branchgroup_id`) VALUES
(17, '221 - PLAZA CRISTAL', 16),
(18, '253 - PLAZA RIO', 16),
(19, '280 - JARDINES', 16),
(20, '285 - VERACRUZ NORTE', 16),
(21, '286 - VERACRUZ CORTES', 16),
(22, '801 - TCI', 16),
(23, '248 - TUXTEPEC', 16),
(24, '225 - CORDOBA', 16),
(25, '226 - ORIZABA', 16),
(26, '228 - ACAYUCAN', 28),
(27, '239 - XALAPA', 28),
(28, '258 - SAN ANDRES', 28),
(29, ' 284 - MARTINEZ', 28),
(30, '291 - MINATITLAN', 28),
(31, '306 - TEZIUTLAN', 28),
(32, '320 - XALAPA REVOLUCION', 28),
(33, '227 - ZARAGOZA', 28),
(34, '321 - EL DORADO', 28),
(35, '201 - TAPACHULA', 29),
(36, '202 - TUXTLA', 29),
(37, '242 - LIBRAMIENTO', 29),
(38, '260 - SAN CRISTOBAL', 29),
(39, '263 - COMITAN', 29),
(40, '277 - TAP. BOULEVARD', 29),
(41, '303 - TONALA', 29),
(42, '316 - CAMPUSAN CRISTOBAL', 29),
(43, '229 - MERIDA LA 50', 30),
(44, '235 - CANCUN', 30),
(45, '257 - PLAZA ROYAL', 30),
(46, '270 - CHETUMAL', 30),
(47, '278 - VILLAS DEL MAR', 30),
(48, '281 PLAYA DEL CARMEN', 30),
(49, '297 - MERIDA LA 54', 30),
(50, '308 - PLAYACAR COLOSIO', 30),
(51, '309 - MERIDA MACROPLAZA', 30),
(52, '317 - COMPUCHETUMAL', 30),
(53, '330 - MERIDA INTERPLAZA', 30),
(54, '213 - PUEBLA LA 10', 31),
(55, '214  - PUEBLA LA 8', 31),
(56, '233 - OAXACA', 31),
(57, '245 - TEHUACAN', 31),
(58, '271 - CHOLULA', 31),
(59, '282 - PERIPLAZA', 31),
(60, '301 - ATLIXCO', 31),
(61, '310 - AMALUCAN', 31),
(62, '315 - APLIZACO', 31),
(63, '328 - COMPU APIZACO', 31),
(64, '329 - TEXMELUCAN', 31),
(65, '327 - PUEBLA CAPU', 31),
(66, '336 - AGUASCALIENTES BLVD', 38),
(67, '237 QUERETARO', 32),
(68, '250 CELAYA', 32),
(69, '264 ZAMORA', 32),
(70, '269 MORELIA', 32),
(71, '287 URUAPAN', 32),
(72, '295 SALAMANCA', 32),
(73, '304 LA PIEDAD', 32),
(74, '312 MORELIA MONUMENTO', 32),
(75, '335 QUERETARO ZOCO', 32),
(76, '218 ADUANA', 33),
(77, '219 PALMAS', 33),
(78, '223 POZA RICA', 33),
(79, '247 MY CHAPULTEPEC', 33),
(80, '268 MADERO', 33),
(81, '274 ALTAMIRA', 33),
(82, '275 SALTILLO', 33),
(83, '296 TUXPAN', 33),
(84, '300 CD VICTORIA', 33),
(85, '217 CONSTITUCION', 34),
(86, '243 CARDENES', 34),
(87, '246 SAN JOAQUIN', 34),
(88, '249 CAMAPECHE', 34),
(89, '256 COMALCALCO', 34),
(90, '288 MACUSPANA', 34),
(91, '289 VILLA SENDERO', 34),
(92, '292 CD DEL CARMEN', 34),
(93, '262 PALENQUE', 34),
(94, '319 COMPUPALENQUE', 34),
(95, '231 CONTRERAS', 35),
(96, '265 CULIACAN', 35),
(97, '276 ZAPOPAN', 35),
(98, '279 LOS MONCHIS', 35),
(99, '305 TEPÍC', 35),
(100, '311 GDL INDEPENDENCIA', 35),
(101, '314 CULIACAN SAN ISIDRO', 35),
(102, '325 MAZATLAN', 35),
(103, '203 CRUCES', 37),
(104, '204 MESONES', 37),
(105, '210 TLANEPANTLA', 37),
(106, '211 TOLUCA', 37),
(107, '212 ECATEPEC', 37),
(108, '241 FABELA', 37),
(109, '259 NAUCALPAN', 37),
(110, '290 CENTRA', 37),
(111, '323 NICOLAS ROMERO', 37),
(112, '324 COACALCO', 37),
(113, '205 IZTAPALPA', 36),
(114, '255 CHALCO', 36),
(115, '267 HUIPULCO', 36),
(116, '294 CHIMALHUACAN', 36),
(117, '302 LOS REYES', 36),
(118, '307 IXTAPALUCA', 36),
(119, '273 CUERNAVACA', 36),
(120, '272 CAUTLA', 36),
(121, '238 SAN ANGEL', 36),
(122, '333 ACAPULCO', 36),
(123, '331 CUERNAVACA CIVAC', 36),
(124, '337 ACAPULCO', 36),
(125, '206 BELISARIO', 38),
(126, '251 TOREES LANDA', 38),
(127, '252 AGUASCALIENTES', 38),
(128, '266 OBELISCO', 38),
(129, '293 VICTORIA', 38),
(130, '207 IRAPUATO', 38),
(131, '322 JCARDENAS', 38),
(132, '216 SAN LUIS', 38),
(133, '244 CARRANZA', 38),
(134, '326 HILAMAS', 38),
(135, '336 AGUASCALIENTE BLVD', 38);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `branchgroups`
--

CREATE TABLE `branchgroups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `branchgroups`
--

INSERT INTO `branchgroups` (`id`, `name`, `user_id`) VALUES
(2, 'REGION 01', 12),
(28, 'REGION 02', 13),
(29, 'REGION 03', 14),
(30, 'REGION 04', 15),
(31, 'REGION 05', 16),
(32, 'REGION 06', 17),
(33, 'REGION 07', 18),
(34, 'REGION 08', 19),
(35, 'REGION 09', 20),
(36, 'REGION 11', 22),
(37, 'REGION 10', 21),
(38, 'REGION 12', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'ASUS'),
(2, 'ZEBRA'),
(3, 'DELL'),
(4, 'ACER'),
(5, 'VOLT'),
(6, 'HERON'),
(7, 'BIXLON'),
(8, 'CINO'),
(9, 'MICROSOFT'),
(10, 'POSIFLEX'),
(11, 'OKI'),
(12, 'DATALOGIC'),
(13, 'LENOVO'),
(14, 'STEREN'),
(15, 'ELEGANCE'),
(16, 'SEGATE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`id`, `name`) VALUES
(1, 'PESO'),
(2, 'DOLLAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `color`) VALUES
(1, 'Administradores', ''),
(2, 'Mesa de Ayuda', ''),
(3, 'Grupo Aplicativo', ''),
(4, 'Grupo de Infraestructura', '#35328c'),
(5, 'Regionales TI', ''),
(6, 'Oficina de Procesos de Negocio', ''),
(7, 'Prevencion y Control de Perdidas', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hdcategories`
--

CREATE TABLE `hdcategories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hdcategories`
--

INSERT INTO `hdcategories` (`id`, `title`, `parent_id`, `lft`, `rght`, `description`) VALUES
(1, 'Administración', 0, 0, 0, ''),
(2, 'Aduana', 0, 0, 0, ''),
(3, 'Almacenamiento/Storage', 0, 0, 0, ''),
(4, 'Apoyo a eventos', 0, 0, 0, ''),
(5, 'BaseDatos', 0, 0, 0, ''),
(6, 'Bóveda', 0, 0, 0, ''),
(7, 'BPO', 0, 0, 0, ''),
(8, 'Caja', 0, 0, 0, ''),
(9, 'Caja chica- gastos GX', 0, 0, 0, ''),
(10, 'Cambio', 0, 0, 0, ''),
(11, 'Centro de Capacitacion Tony LMS', 0, 0, 0, ''),
(12, 'Centros de Computo y Sites', 0, 0, 0, ''),
(13, 'Checkout', 0, 0, 0, ''),
(14, 'Compras', 0, 0, 0, ''),
(15, 'Comunicaciones', 0, 0, 0, ''),
(16, 'Consulta diaria de fichas smart', 0, 0, 0, ''),
(17, 'Contabilidad GX', 0, 0, 0, ''),
(18, 'Contabilidad smart', 0, 0, 0, ''),
(19, 'Control de gastos', 0, 0, 0, ''),
(20, 'Correo Electrónico', 0, 0, 0, ''),
(21, 'Costos smart', 0, 0, 0, ''),
(22, 'Crédito', 0, 0, 0, ''),
(23, 'Crédito Smartnetcorpo', 0, 0, 0, ''),
(24, 'Equipo Usuario Final', 0, 0, 0, ''),
(25, 'Finanzas GX', 0, 0, 0, ''),
(26, 'Finanzas smart', 0, 0, 0, ''),
(27, 'GX', 0, 0, 0, ''),
(28, 'Intranet', 0, 0, 0, ''),
(29, 'Inventarios', 0, 0, 0, ''),
(30, 'Inventarios smart', 0, 0, 0, ''),
(31, 'KAYAKO', 0, 0, 0, ''),
(32, 'LaserFiche', 0, 0, 0, ''),
(33, 'Macros GX', 0, 0, 0, ''),
(34, 'Mercadotecnia Smartnetcorpo', 0, 0, 0, ''),
(35, 'Mesa de control', 0, 0, 0, ''),
(36, 'Monitoreo de Servidor y BD', 0, 0, 0, ''),
(37, 'Mostrador', 0, 0, 0, ''),
(38, 'Nómina GX', 0, 0, 0, ''),
(39, 'Nómina Smartec', 0, 0, 0, ''),
(40, 'Nomina Smartnetcorpo', 0, 0, 0, ''),
(41, 'Portal KDSU', 0, 0, 0, ''),
(42, 'Presupuestos GX', 0, 0, 0, ''),
(43, 'Presupuestos Smartnetcorpo', 0, 0, 0, ''),
(44, 'Procesos programados', 0, 0, 0, ''),
(45, 'Radio Tony', 0, 0, 0, ''),
(46, 'Redes', 0, 0, 0, ''),
(47, 'Reemplazo', 0, 0, 0, ''),
(48, 'Reimpresiones GX', 0, 0, 0, ''),
(49, 'Reportes con Query', 0, 0, 0, ''),
(50, 'Seguridad Corporativo', 0, 0, 0, ''),
(51, 'Seguridad Patrimonial', 0, 0, 0, ''),
(52, 'Servicio a clientes', 0, 0, 0, ''),
(53, 'Servidores', 0, 0, 0, ''),
(54, 'Sistema de tickets KAYAKO', 0, 0, 0, ''),
(55, 'Sistema de tickets TI', 0, 0, 0, ''),
(56, 'Sistema General GX', 0, 0, 0, ''),
(57, 'Sistema Operativo', 0, 0, 0, ''),
(58, 'Sistemas', 0, 0, 0, ''),
(59, 'Smart', 0, 0, 0, ''),
(60, 'SmartMovil', 0, 0, 0, ''),
(61, 'Smartnet', 0, 0, 0, ''),
(62, 'SmartNet TCI', 0, 0, 0, ''),
(63, 'SmartNetCorpo', 0, 0, 0, ''),
(64, 'SmartTCI Corpo', 0, 0, 0, ''),
(65, 'Software', 0, 0, 0, ''),
(66, 'Software Adicional', 0, 0, 0, ''),
(67, 'Software Básico', 0, 0, 0, ''),
(68, 'Solicitud de compras', 0, 0, 0, ''),
(69, 'Soporte a usuarios', 0, 0, 0, ''),
(70, 'Sucursal KDSU', 0, 0, 0, ''),
(71, 'Sysaid', 0, 0, 0, ''),
(72, 'TCI KDSU', 0, 0, 0, ''),
(73, 'TCICorporativo', 0, 0, 0, ''),
(74, 'Telefonía', 0, 0, 0, ''),
(75, 'Telemarketing', 0, 0, 0, ''),
(76, 'Valorización smart', 0, 0, 0, ''),
(77, 'Vehículos Smartnetcorpo', 0, 0, 0, ''),
(78, 'Ventas', 0, 0, 0, ''),
(79, 'Ventas e Inventarios', 0, 0, 0, ''),
(80, 'Ventas smart', 0, 0, 0, ''),
(81, 'Ventas Smartnetcorpo', 0, 0, 0, ''),
(82, 'Verificador', 0, 0, 0, ''),
(83, 'Videoconferencia', 0, 0, 0, ''),
(84, 'Videovigilancia', 0, 0, 0, ''),
(129, '% Costo de ventas', 56, 0, 0, ''),
(130, '% de aumento de presupuesto', 42, 0, 0, ''),
(131, '% de costo de venta presup.', 42, 0, 0, ''),
(132, '% de fletes', 42, 0, 0, ''),
(133, '% de inflación presupuestados', 42, 0, 0, ''),
(134, 'ABC de entidades', 17, 0, 0, ''),
(135, 'ABC entidades', 56, 0, 0, ''),
(136, 'ABC movimientos', 17, 0, 0, ''),
(137, 'ABC tipos de póliza', 17, 0, 0, ''),
(138, 'ABC transacciones', 17, 0, 0, ''),
(139, 'Abreviaturas Sucursales', 21, 0, 0, ''),
(140, 'Acceso', 28, 0, 0, ''),
(141, 'Access Point', 46, 0, 0, ''),
(142, 'acrobat 9', 67, 0, 0, ''),
(143, 'Act. Compras anuales', 25, 0, 0, ''),
(144, 'Actas Administrativas', 28, 0, 0, ''),
(145, 'Activar número quincena', 39, 0, 0, ''),
(146, 'Actualizar EXE contabilidad', 18, 0, 0, ''),
(147, 'adobe reader 11', 67, 0, 0, ''),
(148, 'adobe reader 9', 67, 0, 0, ''),
(149, 'Afectación de inventario rotativo', 29, 0, 0, ''),
(150, 'Agenda de cheques', 22, 0, 0, ''),
(151, 'Agrupación de sucursales', 42, 0, 0, ''),
(152, 'Agrupación de sucursales- nómina', 25, 0, 0, ''),
(153, 'Ajuste Clientes', 58, 0, 0, ''),
(154, 'Ajustes a certificados', 25, 0, 0, ''),
(155, 'Ajustes de  nominas', 39, 0, 0, ''),
(156, 'Alarma', 84, 0, 0, ''),
(157, 'Alarmas', 51, 0, 0, ''),
(158, 'Alta de empleados', 40, 0, 0, ''),
(159, 'Alta de productos', 14, 0, 0, ''),
(160, 'Alta de proveedores', 14, 0, 0, ''),
(161, 'Alta empleados', 1, 0, 0, ''),
(162, 'Alta nuevas sucursales', 62, 0, 0, ''),
(163, 'Alta y modificación de clientes', 60, 0, 0, ''),
(164, 'Altas/actualizaciones de empleados', 39, 0, 0, ''),
(165, 'Amplificador', 74, 0, 0, ''),
(166, 'Análisis cert. Por antigüedad', 25, 0, 0, ''),
(167, 'Análisis de cuenta por entidad', 17, 0, 0, ''),
(168, 'Análisis de cuentas por rubro', 17, 0, 0, ''),
(169, 'Análisis de mercado', 21, 0, 0, ''),
(170, 'Análisis de pedidos', 41, 0, 0, ''),
(171, 'Análisis de presupuesto-corpotiendas', 42, 0, 0, ''),
(172, 'Análisis de presupuesto-sucursal', 42, 0, 0, ''),
(173, 'Análisis de productos', 29, 0, 0, ''),
(174, 'Analisis de ventas', 14, 0, 0, ''),
(175, 'Análisis por departamento', 42, 0, 0, ''),
(176, 'Andenes', 70, 0, 0, ''),
(177, 'Anticipo pendiente de aplicar', 25, 0, 0, ''),
(178, 'Anticipos', 25, 0, 0, ''),
(179, 'Anticipos Autorizados', 28, 0, 0, ''),
(180, 'Antigüedaad de saldos', 22, 0, 0, ''),
(181, 'Antigüedad de proveedores', 18, 0, 0, ''),
(182, 'Antigüedad de saldos', 26, 0, 0, ''),
(183, 'Antivirus', 67, 0, 0, ''),
(184, 'Apartado de Salas', 28, 0, 0, ''),
(185, 'Aplicación de costos', 58, 0, 0, ''),
(186, 'Aplicación de pedidos, requisiciones y ordenes de devolución', 29, 0, 0, ''),
(187, 'Aplicaciones', 65, 0, 0, ''),
(188, 'Aplicar ingresos a GX', 18, 0, 0, ''),
(189, 'Archivos PDF  2015', 18, 0, 0, ''),
(190, 'Archivos PDF  2016', 18, 0, 0, ''),
(191, 'Arcos', 84, 0, 0, ''),
(192, 'Arqueo', 8, 0, 0, ''),
(193, 'Aseguradoras', 77, 0, 0, ''),
(194, 'Asignación de certificados', 76, 0, 0, ''),
(195, 'Asignación de citas', 41, 0, 0, ''),
(196, 'Asignación de ciudades de cuota alta', 26, 0, 0, ''),
(197, 'Asignación de estructura contable a gastos de rutas', 18, 0, 0, ''),
(198, 'Asignación de facturas', 41, 0, 0, ''),
(199, 'Asignación de productos sustitutos', 21, 0, 0, ''),
(200, 'Asistentes de empleados', 38, 0, 0, ''),
(201, 'Auditoría', 63, 0, 0, ''),
(202, 'Aut. Para Beneficiario', 25, 0, 0, ''),
(203, 'autocad 10', 66, 0, 0, ''),
(204, 'autocad 15', 66, 0, 0, ''),
(205, 'Autorizacion de Entrada/Salida', 28, 0, 0, ''),
(206, 'Autorización precios especiales', 81, 0, 0, ''),
(207, 'Auxiliar de cuentas', 18, 0, 0, ''),
(208, 'Backorder de pedidos', 14, 0, 0, ''),
(209, 'Baja de empleados', 40, 0, 0, ''),
(210, 'Baja empleados', 1, 0, 0, ''),
(211, 'Balance columna doble', 17, 0, 0, ''),
(212, 'Balance columna sencilla', 17, 0, 0, ''),
(213, 'Balance comparativo', 17, 0, 0, ''),
(214, 'Balance general', 17, 0, 0, ''),
(215, 'Balanza analítica de saldos', 17, 0, 0, ''),
(216, 'Balanza comprobación de saldos', 17, 0, 0, ''),
(217, 'Balanza de comprobación', 25, 0, 0, ''),
(218, 'Balanza mensual de saldos de mayor', 17, 0, 0, ''),
(219, 'Bancos', 25, 0, 0, ''),
(220, 'Base de Conocimientos', 71, 0, 0, ''),
(221, 'Base para terminal', 24, 0, 0, ''),
(222, 'Baterias para terminales', 24, 0, 0, ''),
(223, 'Bitácora autorización lista empaque canceladas', 70, 0, 0, ''),
(224, 'Bitácora autorización lista empaque parciales', 70, 0, 0, ''),
(225, 'Bitácora autorización reimpresiones', 70, 0, 0, ''),
(226, 'Bitacora de contratos', 39, 0, 0, ''),
(227, 'Bitacora de Entradas Complementarias', 28, 0, 0, ''),
(228, 'Bitácora de pedidos cancelados', 14, 0, 0, ''),
(229, 'Bitacora de proveedores y visitas', 28, 0, 0, ''),
(230, 'Bocinas', 24, 0, 0, ''),
(231, 'Bonos por cubrir otros puestos', 28, 0, 0, ''),
(232, 'Borrar presupuesto', 42, 0, 0, ''),
(233, 'Botonera telefónica', 74, 0, 0, ''),
(234, 'Bóveda', 6, 0, 0, ''),
(235, 'Bultos fuera de lugar', 70, 0, 0, ''),
(236, 'Bultos por sucursal', 70, 0, 0, ''),
(237, 'Buró de crédito smartnet', 23, 0, 0, ''),
(238, 'C. costos + rubros por sucursal', 56, 0, 0, ''),
(239, 'C. de costos + rubros por sucursal', 17, 0, 0, ''),
(240, 'Cable adaptador his', 74, 0, 0, ''),
(241, 'Cable com usb', 24, 0, 0, ''),
(242, 'Cable HMDI', 24, 0, 0, ''),
(243, 'Cableado', 46, 0, 0, ''),
(244, 'Cables his diadema avaya', 74, 0, 0, ''),
(245, 'Cadenas comerciales', 23, 0, 0, ''),
(246, 'Caja chica', 50, 0, 0, ''),
(247, 'Caja chica- gastos', 9, 0, 0, ''),
(248, 'Cajas chicas/ chequera', 26, 0, 0, ''),
(249, 'Cajón de dinero', 24, 0, 0, ''),
(250, 'Calcular CURP', 39, 0, 0, ''),
(251, 'Calcular RFC', 39, 0, 0, ''),
(252, 'Cálculo de IVA', 17, 0, 0, ''),
(253, 'Calculo de presupuesto', 42, 0, 0, ''),
(254, 'Calendario de pedidos', 14, 0, 0, ''),
(255, 'Calificaciones de citas', 41, 0, 0, ''),
(256, 'Cámara CCTV', 84, 0, 0, ''),
(257, 'Cámara web', 24, 0, 0, ''),
(258, 'Cambio a productos sustitutos', 21, 0, 0, ''),
(259, 'Cambio beneficiario-solo cheques spool', 26, 0, 0, ''),
(260, 'Cambio de cheque por efectivo', 1, 0, 0, ''),
(261, 'Cambio nombre de equipo', 24, 0, 0, ''),
(262, 'Cambios a mínimos condiciones', 14, 0, 0, ''),
(263, 'Cambios a productos (Aplicar)', 21, 0, 0, ''),
(264, 'Cambios a productos (Generar)', 21, 0, 0, ''),
(265, 'Cambios de sueldos', 39, 0, 0, ''),
(266, 'Cancelación deudores diversos', 8, 0, 0, ''),
(267, 'Cancelación nóminas y anticipos', 8, 0, 0, ''),
(268, 'Cancelación pagos con tarjeta', 8, 0, 0, ''),
(269, 'Cancelación retiro de efectivo', 8, 0, 0, ''),
(270, 'Cancelación venta de activos', 8, 0, 0, ''),
(271, 'Cancelaciones', 1, 0, 0, ''),
(272, 'Cancelar cheque', 25, 0, 0, ''),
(273, 'Cancelar cheques', 26, 0, 0, ''),
(274, 'Cancelar póliza egreso', 25, 0, 0, ''),
(275, 'Cancelar póliza ingreso', 25, 0, 0, ''),
(276, 'Cap. De requisición de traspaso manual', 14, 0, 0, ''),
(277, 'Cap. Estado de resultados', 17, 0, 0, ''),
(278, 'Capacitación', 53, 0, 0, ''),
(279, 'Captura  de pedidos', 35, 0, 0, ''),
(280, 'Captura de Anticipos', 40, 0, 0, ''),
(281, 'Captura de coberturas', 40, 0, 0, ''),
(282, 'Captura de Contadores', 28, 0, 0, ''),
(283, 'Captura de cuentas presupuestos', 42, 0, 0, ''),
(284, 'Captura de Embargos', 28, 0, 0, ''),
(285, 'Captura de Incidencias', 40, 0, 0, ''),
(286, 'Captura de pedido sugerido', 14, 0, 0, ''),
(287, 'Captura de pedidos', 60, 0, 0, ''),
(288, 'Captura de pedidos especiales', 75, 0, 0, ''),
(289, 'Captura de pedidos manual', 14, 0, 0, ''),
(290, 'Captura de Póliza', 17, 0, 0, ''),
(291, 'Captura de Renuncias', 28, 0, 0, ''),
(292, 'captura de salida de camiones', 28, 0, 0, ''),
(293, 'Captura de Servicio Social/Estoy en Capacitacion', 28, 0, 0, ''),
(294, 'Captura de vales escolares', 28, 0, 0, ''),
(295, 'Captura orden dev a prov.', 14, 0, 0, ''),
(296, 'Captura pedidos computony', 35, 0, 0, ''),
(297, 'Captura pedidos especiales', 35, 0, 0, ''),
(298, 'Captura pedidos Expo', 35, 0, 0, ''),
(299, 'Captura pedidos minitemporada', 35, 0, 0, ''),
(300, 'Capura de Examenes', 28, 0, 0, ''),
(301, 'Carátula de proveedor', 14, 0, 0, ''),
(302, 'Cargar presupuesto', 42, 0, 0, ''),
(303, 'Carpeta', 46, 0, 0, ''),
(304, 'Carpeta Pública', 46, 0, 0, ''),
(305, 'Carta de invernomina', 39, 0, 0, ''),
(306, 'Cartálogos productos', 41, 0, 0, ''),
(307, 'Cartas porte', 70, 0, 0, ''),
(308, 'Catalogo de clientes', 23, 0, 0, ''),
(309, 'Catalogo de Convenios', 34, 0, 0, ''),
(310, 'Catálogo Muebles', 29, 0, 0, ''),
(311, 'Catálogo Tramos', 29, 0, 0, ''),
(312, 'Catálogo Ubicaciones', 29, 0, 0, ''),
(313, 'Catálogo Zonas', 29, 0, 0, ''),
(314, 'Catálogos de cuentas SAT', 18, 0, 0, ''),
(315, 'Catálogos proveedores', 41, 0, 0, ''),
(316, 'Catalogos SAT timbrado', 39, 0, 0, ''),
(317, 'Categorias', 77, 0, 0, ''),
(318, 'Cenefas computony', 2, 0, 0, ''),
(319, 'Cenefas de descuentos', 2, 0, 0, ''),
(320, 'Cenefas de ofertas', 2, 0, 0, ''),
(321, 'Cenefas de precios', 2, 0, 0, ''),
(322, 'centro costos', 42, 0, 0, ''),
(323, 'Centro de costos', 17, 0, 0, ''),
(324, 'Centros de costos', 56, 0, 0, ''),
(325, 'Checador Servicio Social', 28, 0, 0, ''),
(326, 'Check list de equipos', 28, 0, 0, ''),
(327, 'Check list vehículo', 29, 0, 0, ''),
(328, 'Checkout', 13, 0, 0, ''),
(329, 'Chequera', 26, 0, 0, ''),
(330, 'Chequeras', 56, 0, 0, ''),
(331, 'Cheques devueltos', 23, 0, 0, ''),
(332, 'Cheques emitidos', 25, 0, 0, ''),
(333, 'Cheques varios', 25, 0, 0, ''),
(334, 'Cheques varios (Nómina)', 25, 0, 0, ''),
(335, 'Cheques-gastos a comprobar', 26, 0, 0, ''),
(336, 'Choferes', 70, 0, 0, ''),
(337, 'chrome', 67, 0, 0, ''),
(338, 'Cierre de mes', 17, 0, 0, ''),
(339, 'Cierre de proveedores', 25, 0, 0, ''),
(340, 'Citas directo a almacén', 70, 0, 0, ''),
(341, 'Citas por recibir', 70, 0, 0, ''),
(342, 'Citas por recolectar', 70, 0, 0, ''),
(343, 'Citas procesadas', 41, 0, 0, ''),
(344, 'Ciudades', 56, 0, 0, ''),
(345, 'Clases', 77, 0, 0, ''),
(346, 'Claves para llamada', 74, 0, 0, ''),
(347, 'Clientes', 22, 0, 0, ''),
(348, 'CMDB', 71, 0, 0, ''),
(349, 'Cobertura de objetivos', 39, 0, 0, ''),
(350, 'Cobro a cuenta de diferencia de inventarios', 8, 0, 0, ''),
(351, 'Cobro autoservicio menudeo', 8, 0, 0, ''),
(352, 'Cobro de nóminas y anticipos', 8, 0, 0, ''),
(353, 'Cobro defectuosos', 8, 0, 0, ''),
(354, 'Cobro deudores diversos', 8, 0, 0, ''),
(355, 'Cobro deudores diversos por compañía', 8, 0, 0, ''),
(356, 'Cobro mayoreo contado', 8, 0, 0, ''),
(357, 'Cobro mayoreo crédito', 8, 0, 0, ''),
(358, 'Cobro mostrador mayoreo', 8, 0, 0, ''),
(359, 'Cobro orden de pago', 8, 0, 0, ''),
(360, 'Cobro tiempo aire', 8, 0, 0, ''),
(361, 'Cobro venta de activos', 8, 0, 0, ''),
(362, 'Cobro venta de cartón', 8, 0, 0, ''),
(363, 'Códigos de barras', 21, 0, 0, ''),
(364, 'Comedor', 39, 0, 0, ''),
(365, 'Comisión bancaria', 1, 0, 0, ''),
(366, 'Comisiones en excel', 39, 0, 0, ''),
(367, 'Comisiones ventas / cobranza', 80, 0, 0, ''),
(368, 'Comisiones ventas y/o cobranza', 43, 0, 0, ''),
(369, 'Comparativo anual', 43, 0, 0, ''),
(370, 'Comparativo de compras', 41, 0, 0, ''),
(371, 'Comparativo de fletes vs compras', 42, 0, 0, ''),
(372, 'Comparativo de gastos x sucursal', 17, 0, 0, ''),
(373, 'Comparativo diario vtas. Suc', 23, 0, 0, ''),
(374, 'Compradores', 14, 0, 0, ''),
(375, 'Compras', 14, 0, 0, ''),
(376, 'Compras a proveedor', 18, 0, 0, ''),
(377, 'Compras anuales', 25, 0, 0, ''),
(378, 'Conc. De pedidos x prov.-suc', 14, 0, 0, ''),
(379, 'Concentrado de facturas cred-cont', 43, 0, 0, ''),
(380, 'Concentrado de notas abono/débito', 43, 0, 0, ''),
(381, 'Concentrado de pagos', 43, 0, 0, ''),
(382, 'Concentrado de pedidos', 14, 0, 0, ''),
(383, 'Concepto gastos', 80, 0, 0, ''),
(384, 'Conceptos de egresos', 25, 0, 0, ''),
(385, 'Condiciones a pedidos', 76, 0, 0, ''),
(386, 'Condiciones de crédito', 23, 0, 0, ''),
(387, 'Condiciones de devolución', 14, 0, 0, ''),
(388, 'Condiciones de pago', 21, 0, 0, ''),
(389, 'Condiciones de pagos', 14, 0, 0, ''),
(390, 'Configuración del sistema', 41, 0, 0, ''),
(391, 'Confirmacion de Bultos', 28, 0, 0, ''),
(392, 'Conmutador', 74, 0, 0, ''),
(393, 'Conmutador panasonic', 74, 0, 0, ''),
(394, 'Consulta bitácora de capturas físicas', 29, 0, 0, ''),
(395, 'Consulta checada - rapida', 39, 0, 0, ''),
(396, 'Consulta Checklist', 77, 0, 0, ''),
(397, 'Consulta código visual', 70, 0, 0, ''),
(398, 'Consulta contra recibo', 26, 0, 0, ''),
(399, 'Consulta control de pedidos enviados', 41, 0, 0, ''),
(400, 'Consulta de  existencias vs conteos', 70, 0, 0, ''),
(401, 'Consulta de alta de productos', 79, 0, 0, ''),
(402, 'Consulta de altas de productos', 14, 0, 0, ''),
(403, 'Consulta de bitácora de vigentes por sucursal', 21, 0, 0, ''),
(404, 'Consulta de checadas', 39, 0, 0, ''),
(405, 'Consulta de cheques', 25, 0, 0, ''),
(406, 'Consulta de errores', 41, 0, 0, ''),
(407, 'Consulta de estructura catálogos', 21, 0, 0, ''),
(408, 'Consulta de excedentes', 14, 0, 0, ''),
(409, 'Consulta de exist. ultima toma física', 14, 0, 0, ''),
(410, 'Consulta de Existencia actual', 14, 0, 0, ''),
(411, 'Consulta de existencias', 79, 0, 0, ''),
(412, 'Consulta de facturas', 41, 0, 0, ''),
(413, 'Consulta de folios pendiente', 76, 0, 0, ''),
(414, 'Consulta de justificantes', 39, 0, 0, ''),
(415, 'Consulta de Libro de entradas-certificados', 76, 0, 0, ''),
(416, 'Consulta de mercancía en tránsito', 41, 0, 0, ''),
(417, 'Consulta de movimientos', 17, 0, 0, ''),
(418, 'Consulta de Negociaciones', 78, 0, 0, ''),
(419, 'Consulta de negociaciones especiales', 81, 0, 0, ''),
(420, 'Consulta de nómina', 26, 0, 0, ''),
(421, 'Consulta de notas de abono', 58, 0, 0, ''),
(422, 'Consulta de notas de débito', 58, 0, 0, ''),
(423, 'Consulta de ofertas', 21, 0, 0, ''),
(424, 'Consulta de ordenes de devolución', 14, 0, 0, ''),
(425, 'Consulta de ordenes de pago', 22, 0, 0, ''),
(426, 'Consulta de pedidos', 14, 0, 0, ''),
(427, 'Consulta de pedidos pendientes de descarga', 41, 0, 0, ''),
(428, 'Consulta de Póliza', 17, 0, 0, ''),
(429, 'Consulta de pólizas- UUID', 18, 0, 0, ''),
(430, 'Consulta de presupuesto', 42, 0, 0, ''),
(431, 'Consulta de productos', 21, 0, 0, ''),
(432, 'Consulta de productos apartados', 29, 0, 0, ''),
(433, 'Consulta de relaciones pendientes', 26, 0, 0, ''),
(434, 'Consulta de req. Traspasos', 14, 0, 0, ''),
(435, 'Consulta de saldos', 17, 0, 0, ''),
(436, 'Consulta de saldos mensuales', 25, 0, 0, ''),
(437, 'Consulta de saldos x docto', 25, 0, 0, ''),
(438, 'Consulta de Talones', 28, 0, 0, ''),
(439, 'Consulta de traspaso por sucursal', 14, 0, 0, ''),
(440, 'Consulta de ventas', 35, 0, 0, ''),
(441, 'Consulta diaria de fichas', 16, 0, 0, ''),
(442, 'Consulta diferencia bultos por ubicación', 70, 0, 0, ''),
(443, 'Consulta diferencia por documentos', 70, 0, 0, ''),
(444, 'Consulta diferencia por proveedor', 70, 0, 0, ''),
(445, 'Consulta diferencias de embarque', 70, 0, 0, ''),
(446, 'Consulta embarques de centra', 41, 0, 0, ''),
(447, 'Consulta embarques sin entrada', 70, 0, 0, ''),
(448, 'Consulta entrada de mercancía con faltantes', 41, 0, 0, ''),
(449, 'Consulta facturas recibidas/embarcadas', 70, 0, 0, ''),
(450, 'Consulta Finiquitos', 38, 0, 0, ''),
(451, 'Consulta grupos de financieros', 23, 0, 0, ''),
(452, 'Consulta historial de bultos', 70, 0, 0, ''),
(453, 'Consulta inventario rotativo', 29, 0, 0, ''),
(454, 'Consulta mesa control', 70, 0, 0, ''),
(455, 'Consulta pedidos compras', 79, 0, 0, ''),
(456, 'Consulta pedidos entradas', 29, 0, 0, ''),
(457, 'Consulta por factura', 25, 0, 0, ''),
(458, 'Consulta por talón', 25, 0, 0, ''),
(459, 'Consulta registro de diferencias de embarque', 70, 0, 0, ''),
(460, 'Consulta tiempo de pedidos en centra', 41, 0, 0, ''),
(461, 'Consulta TPV Santander', 1, 0, 0, ''),
(462, 'Consulta y mantenimiento a clientes', 23, 0, 0, ''),
(463, 'Consumo interno', 29, 0, 0, ''),
(464, 'Contabilidad', 27, 0, 0, ''),
(465, 'Control de agentes', 26, 0, 0, ''),
(466, 'Control de devoluciones', 76, 0, 0, ''),
(467, 'Control de gastos', 19, 0, 0, ''),
(468, 'Control de Llamadas', 28, 0, 0, ''),
(469, 'Control de surtido', 35, 0, 0, ''),
(470, 'Control de Uniformes', 28, 0, 0, ''),
(471, 'Control de vehículos', 26, 0, 0, ''),
(472, 'Control de viajes', 1, 0, 0, ''),
(473, 'Control Gastos', 18, 0, 0, ''),
(474, 'Convenios', 78, 0, 0, ''),
(475, 'Copiadora', 24, 0, 0, ''),
(476, 'Copiar pedido colectivo', 14, 0, 0, ''),
(477, 'Correo', 20, 0, 0, ''),
(478, 'Corte atención a clientes', 52, 0, 0, ''),
(479, 'Corte de caja', 8, 0, 0, ''),
(480, 'Corte de formas', 70, 0, 0, ''),
(481, 'Corte por sucursal', 52, 0, 0, ''),
(482, 'Costos', 50, 0, 0, ''),
(483, 'Cotizaciones', 35, 0, 0, ''),
(484, 'CPU', 24, 0, 0, ''),
(485, 'Creacion de carpetas compartidas', 3, 0, 0, ''),
(486, 'Crédito', 50, 0, 0, ''),
(487, 'Cuentas contables', 18, 0, 0, ''),
(488, 'Cuentas contables  (plan de cuentas)', 56, 0, 0, ''),
(489, 'Cuentas de cheques', 25, 0, 0, ''),
(490, 'Cumpleaños por mes', 38, 0, 0, ''),
(491, 'Cuotas de alimentación', 26, 0, 0, ''),
(492, 'Curps en linea', 39, 0, 0, ''),
(493, 'Declaración anual', 39, 0, 0, ''),
(494, 'Declaración anual de proveedores', 18, 0, 0, ''),
(495, 'Declaración de proveedores (facturas)', 18, 0, 0, ''),
(496, 'Departamentos', 21, 0, 0, ''),
(497, 'Deposito bancarios - Bancomer', 39, 0, 0, ''),
(498, 'Desactivador', 24, 0, 0, ''),
(499, 'Desbloquear usuarios/Crear menú', 1, 0, 0, ''),
(500, 'Descuentos financieros de temporada', 21, 0, 0, ''),
(501, 'Desmarcar anticipos - transf. Bancos', 39, 0, 0, ''),
(502, 'Desmarcar pedidos', 14, 0, 0, ''),
(503, 'Desmarcar pedidos bloqueados', 1, 0, 0, ''),
(504, 'Desmarcar requisiciones de traspasos', 14, 0, 0, ''),
(505, 'Detalle de pagos', 23, 0, 0, ''),
(506, 'Determinación perdida ganancia inf.', 17, 0, 0, ''),
(507, 'Devolución mayoreo', 52, 0, 0, ''),
(508, 'Devolución menudeo', 52, 0, 0, ''),
(509, 'Diadema telefónica', 74, 0, 0, ''),
(510, 'Diario de trabajo agentes', 81, 0, 0, ''),
(511, 'Diario general', 17, 0, 0, ''),
(512, 'Dias Festivos', 39, 0, 0, ''),
(513, 'Días no hábiles', 25, 0, 0, ''),
(514, 'Diferencias de inventario físico', 30, 0, 0, ''),
(515, 'Directorio de Proveedores', 28, 0, 0, ''),
(516, 'Disco duro', 53, 0, 0, ''),
(517, 'Disco duro extraible', 24, 0, 0, ''),
(518, 'Donaciones', 28, 0, 0, ''),
(519, 'Donativos por redondeo-sucursal', 18, 0, 0, ''),
(520, 'Dotnetbar', 67, 0, 0, ''),
(521, 'DVR', 84, 0, 0, ''),
(522, 'Ejercicios', 42, 0, 0, ''),
(523, 'Embargos judiciales- Cheques varios', 25, 0, 0, ''),
(524, 'Embargos judiciales- Transferencia de efectivo', 25, 0, 0, ''),
(525, 'Emisora de Cheques', 25, 0, 0, ''),
(526, 'Empleados', 39, 0, 0, ''),
(527, 'Empleados dados de baja', 39, 0, 0, ''),
(528, 'Empleados de temporada', 39, 0, 0, ''),
(529, 'Empleados Duplicados', 39, 0, 0, ''),
(530, 'Empleados en garantia', 39, 0, 0, ''),
(531, 'Empleados no relacionado de asesoria', 39, 0, 0, ''),
(532, 'Empresas', 56, 0, 0, ''),
(533, 'Enlace', 15, 0, 0, ''),
(534, 'Enrutamiento', 71, 0, 0, ''),
(535, 'Entidad especial', 56, 0, 0, ''),
(536, 'Entidades de activos-VEH', 18, 0, 0, ''),
(537, 'Entrada por devolución a proveedor no aceptada', 29, 0, 0, ''),
(538, 'Entrada por trapaso', 29, 0, 0, ''),
(539, 'Entradas por devolución de clientes', 29, 0, 0, ''),
(540, 'Entradas por proveedor', 29, 0, 0, ''),
(541, 'Entrega de pagaré', 22, 0, 0, ''),
(542, 'Envío de información a sucursal', 60, 0, 0, ''),
(543, 'Envío de pedidos proveedores', 14, 0, 0, ''),
(544, 'Envio de Valija', 28, 0, 0, ''),
(545, 'Equipo', 46, 0, 0, ''),
(546, 'Equipo administrativo de ventas', 24, 0, 0, ''),
(547, 'Equipo aduana', 24, 0, 0, ''),
(548, 'Equipo atencion a clientes', 24, 0, 0, ''),
(549, 'Equipo auxiliar administrativo', 24, 0, 0, ''),
(550, 'Equipo cajas', 24, 0, 0, ''),
(551, 'Equipo centro copiado', 24, 0, 0, ''),
(552, 'Equipo corporativo', 24, 0, 0, ''),
(553, 'Equipo credito', 24, 0, 0, ''),
(554, 'Equipo dañado', 24, 0, 0, ''),
(555, 'Equipo director regional', 24, 0, 0, ''),
(556, 'Equipo inventario', 24, 0, 0, ''),
(557, 'Equipo mesa control', 24, 0, 0, ''),
(558, 'Equipo mostrador men-may', 24, 0, 0, ''),
(559, 'Equipo servidor', 24, 0, 0, ''),
(560, 'Equipo subgerente', 24, 0, 0, ''),
(561, 'Equipo surtido pedido', 24, 0, 0, ''),
(562, 'Equipo telemarketing', 24, 0, 0, ''),
(563, 'Equipo verificador precios', 24, 0, 0, ''),
(564, 'Equipos de toma física', 70, 0, 0, ''),
(565, 'Error', 54, 0, 0, ''),
(566, 'escolaridad', 38, 0, 0, ''),
(567, 'Escritorio remoto', 67, 0, 0, ''),
(568, 'Especiales', 41, 0, 0, ''),
(569, 'Estadisticas', 44, 0, 0, ''),
(570, 'Estadísticas vtas-inventarios', 14, 0, 0, ''),
(571, 'Estado de cuenta', 17, 0, 0, ''),
(572, 'Estado de resultados', 17, 0, 0, ''),
(573, 'Estados', 56, 0, 0, ''),
(574, 'Estructura BD', 5, 0, 0, ''),
(575, 'Estructura cuentas contables', 18, 0, 0, ''),
(576, 'Estructura de crédito', 23, 0, 0, ''),
(577, 'Etiquetas de anaquel', 29, 0, 0, ''),
(578, 'Etiquetas excel', 39, 0, 0, ''),
(579, 'Eventos', 24, 0, 0, ''),
(580, 'excel', 67, 0, 0, ''),
(581, 'Existencia ultima toma', 79, 0, 0, ''),
(582, 'Existencias y ventas', 14, 0, 0, ''),
(583, 'Exportar información al SAT', 18, 0, 0, ''),
(584, 'Extensiones Corporativo', 28, 0, 0, ''),
(585, 'Factor de crecimiento', 80, 0, 0, ''),
(586, 'Facturacion', 72, 0, 0, ''),
(587, 'Facturación comisión tarjetas', 52, 0, 0, ''),
(588, 'Facturacion menudeo', 52, 0, 0, ''),
(589, 'Facturar vales de compañía (convenios)', 1, 0, 0, ''),
(590, 'Facturas por proveedor', 70, 0, 0, ''),
(591, 'Falta de informacion', 55, 0, 0, ''),
(592, 'Familia de entidades', 17, 0, 0, ''),
(593, 'Familias', 21, 0, 0, ''),
(594, 'Fechas inhábiles', 41, 0, 0, ''),
(595, 'Fechas temporada', 70, 0, 0, ''),
(596, 'Fiber converter', 24, 0, 0, ''),
(597, 'Ficha de depósito', 1, 0, 0, ''),
(598, 'Ficha del empleado', 38, 0, 0, ''),
(599, 'Finanzas', 27, 0, 0, ''),
(600, 'Finiquitos', 25, 0, 0, ''),
(601, 'Flujo de caja', 25, 0, 0, ''),
(602, 'Folios', 56, 0, 0, ''),
(603, 'Fondo fijo de personal', 26, 0, 0, ''),
(604, 'Fondos fijos de personal', 80, 0, 0, ''),
(605, 'Formato seguridad', 70, 0, 0, ''),
(606, 'Formatos', 28, 0, 0, ''),
(607, 'FortiClient', 66, 0, 0, ''),
(608, 'foxit reader', 67, 0, 0, ''),
(609, 'Freamworks: 2.0, 3.0, 4.0, 4.5', 67, 0, 0, ''),
(610, 'Frecuencia de viajes', 70, 0, 0, ''),
(611, 'FTP', 41, 0, 0, ''),
(612, 'Fuente de poder', 24, 0, 0, ''),
(613, 'Gabinete usb para disco duro', 24, 0, 0, ''),
(614, 'Gastos de rutas de venta y reparto', 80, 0, 0, ''),
(615, 'Gastos de viaje', 26, 0, 0, ''),
(616, 'Gastos fijos', 26, 0, 0, ''),
(617, 'Gastos por departamentos', 18, 0, 0, ''),
(618, 'Gateway de voz', 74, 0, 0, ''),
(619, 'Generación de objetivos', 80, 0, 0, ''),
(620, 'Generación de objetivos oct-dic', 80, 0, 0, ''),
(621, 'Generador de tonos', 74, 0, 0, ''),
(622, 'General', 56, 0, 0, ''),
(623, 'Generar cheques', 25, 0, 0, ''),
(624, 'Generar cheques (control de gastos)', 25, 0, 0, ''),
(625, 'Generar contraseña de smartmovil', 81, 0, 0, ''),
(626, 'Generar contratos', 39, 0, 0, ''),
(627, 'Generar nominas', 39, 0, 0, ''),
(628, 'Generar pagos por transferencia (control de gastos)', 25, 0, 0, ''),
(629, 'Genérico productos', 21, 0, 0, ''),
(630, 'Genéricos de ciudad', 80, 0, 0, ''),
(631, 'Gestión Activos', 71, 0, 0, ''),
(632, 'Gestión de Proyectos', 71, 0, 0, ''),
(633, 'Giradores', 25, 0, 0, ''),
(634, 'Giros comerciales', 23, 0, 0, ''),
(635, 'Grupo de entidad especial', 56, 0, 0, ''),
(636, 'Grupo de prestaciones', 38, 0, 0, ''),
(637, 'Grupos', 71, 0, 0, ''),
(638, 'Grupos de financieros', 21, 0, 0, ''),
(639, 'Grupos de horarios', 38, 0, 0, ''),
(640, 'Grupos de presupuestos', 42, 0, 0, ''),
(641, 'Grupos proveedores (listas de precios)', 21, 0, 0, ''),
(642, 'GX general', 50, 0, 0, ''),
(643, 'Habilitar region temporalmente', 55, 0, 0, ''),
(644, 'Histórico de diferencias', 30, 0, 0, ''),
(645, 'Hoja de análisis de pagos', 23, 0, 0, ''),
(646, 'Hoja de control de cliente expo', 35, 0, 0, ''),
(647, 'Hoja de trabajo de documentos vencidos', 22, 0, 0, ''),
(648, 'Hub', 24, 0, 0, ''),
(649, 'Idiomas', 38, 0, 0, ''),
(650, 'ie explorer', 67, 0, 0, ''),
(651, 'importar datos vales de compra', 43, 0, 0, ''),
(652, 'Importar pólizas desde Excel', 18, 0, 0, ''),
(653, 'Impresión cheques (Pol. Egresos)', 25, 0, 0, ''),
(654, 'Impresión de Contratos', 40, 0, 0, ''),
(655, 'Impresión de etiquetas', 2, 0, 0, ''),
(656, 'Impresión de listas de empaque', 35, 0, 0, ''),
(657, 'Impresión de recibos', 58, 0, 0, ''),
(658, 'Impresión pólizas egresos/ ingresos', 25, 0, 0, ''),
(659, 'Impresora de gafetes', 24, 0, 0, ''),
(660, 'Impresora etiquetas', 24, 0, 0, ''),
(661, 'Impresora laser', 24, 0, 0, ''),
(662, 'Impresora matriz', 24, 0, 0, ''),
(663, 'Impresora tickets', 24, 0, 0, ''),
(664, 'Imprimir cheques pendientes (control de gastos)', 25, 0, 0, ''),
(665, 'Inalámbrica', 46, 0, 0, ''),
(666, 'Incapacidades concentrado', 39, 0, 0, ''),
(667, 'Incapacidades detalladas', 39, 0, 0, ''),
(668, 'incidencia en citas', 41, 0, 0, ''),
(669, 'Incidencias', 77, 0, 0, ''),
(670, 'Incidencias comedor', 39, 0, 0, ''),
(671, 'Incidencias por quincena', 39, 0, 0, ''),
(672, 'Indicadores de ventas', 81, 0, 0, ''),
(673, 'Inet dedicado c40', 15, 0, 0, ''),
(674, 'Infraestructura', 12, 0, 0, ''),
(675, 'Ingresos Acumulados', 26, 0, 0, ''),
(676, 'Inmuebles y terrenos', 28, 0, 0, ''),
(677, 'INPC', 56, 0, 0, ''),
(678, 'Integración de pagos', 25, 0, 0, ''),
(679, 'Internet', 15, 0, 0, ''),
(680, 'Inventario Físico', 61, 0, 0, ''),
(681, 'Inventario valorizado', 14, 0, 0, ''),
(682, 'Inventarios', 41, 0, 0, ''),
(683, 'Inventarios rotativos', 30, 0, 0, ''),
(684, 'Inyector poe', 24, 0, 0, ''),
(685, 'Justificantes', 39, 0, 0, ''),
(686, 'KDSU', 50, 0, 0, ''),
(687, 'Laptop', 24, 0, 0, ''),
(688, 'LaserFiche', 32, 0, 0, ''),
(689, 'Leyendas', 58, 0, 0, ''),
(690, 'Libro de entradas por traspaso', 29, 0, 0, ''),
(691, 'Libro de mayor', 17, 0, 0, ''),
(692, 'Libro requisiciones y surtido de traspaso', 29, 0, 0, ''),
(693, 'Licencias', 77, 0, 0, ''),
(694, 'Linea analogica', 74, 0, 0, ''),
(695, 'Líneas', 21, 0, 0, ''),
(696, 'Lista de precios LAB', 80, 0, 0, ''),
(697, 'Lista de precios para clientes especiales', 21, 0, 0, ''),
(698, 'Listas de empaque', 70, 0, 0, ''),
(699, 'Lugares de trabajo', 38, 0, 0, ''),
(700, 'Macros', 33, 0, 0, ''),
(701, 'Mantenimiento a base de datos', 60, 0, 0, ''),
(702, 'Mantenimiento a toma física', 29, 0, 0, ''),
(703, 'Mantenimiento a vales de despensa', 38, 0, 0, ''),
(704, 'Mantenimiento correos reporte de smartmovil', 81, 0, 0, ''),
(705, 'Mantenimiento de productos para ventas', 80, 0, 0, ''),
(706, 'Mantenimientos', 77, 0, 0, ''),
(707, 'Mantto.  Minitemporada', 23, 0, 0, ''),
(708, 'Mantto. Empleados', 39, 0, 0, ''),
(709, 'Manuales de Sistema', 28, 0, 0, ''),
(710, 'Mapa sucursales', 41, 0, 0, ''),
(711, 'Marcar nominas cobradas', 39, 0, 0, ''),
(712, 'Marcas', 14, 0, 0, ''),
(713, 'Mejores productos', 14, 0, 0, ''),
(714, 'Memoria USB', 24, 0, 0, ''),
(715, 'Mensuales vendedores - choferes', 39, 0, 0, ''),
(716, 'Mercadotecnia', 50, 0, 0, ''),
(717, 'Mesa de control', 70, 0, 0, ''),
(718, 'Mesa de Servicio', 71, 0, 0, ''),
(719, 'Micrófono', 24, 0, 0, ''),
(720, 'Mini kiosko', 24, 0, 0, ''),
(721, 'Mini laptop', 24, 0, 0, ''),
(722, 'Mini PC', 24, 0, 0, ''),
(723, 'Modalidades de pago', 38, 0, 0, ''),
(724, 'Modem', 46, 0, 0, ''),
(725, 'Modificación de reposiciones de caja chica', 18, 0, 0, ''),
(726, 'Modulo de Control Presupuestal', 28, 0, 0, ''),
(727, 'Modulos de Control', 28, 0, 0, ''),
(728, 'Monitor', 24, 0, 0, ''),
(729, 'Monitoreo de memoria de los servidores', 36, 0, 0, ''),
(730, 'Monitoreo de procesos dormidos o "atorados"', 36, 0, 0, ''),
(731, 'Mostrador mayoreo', 37, 0, 0, ''),
(732, 'Mostrador menudeo', 37, 0, 0, ''),
(733, 'Motivos de baja', 38, 0, 0, ''),
(734, 'Motivos de cambio de fecha', 23, 0, 0, ''),
(735, 'Motivos de devolución', 23, 0, 0, ''),
(736, 'Motivos de viaje', 26, 0, 0, ''),
(737, 'Mouse', 24, 0, 0, ''),
(738, 'Movimiento de Personal', 28, 0, 0, ''),
(739, 'Movimiento de Personal por Temporada', 28, 0, 0, ''),
(740, 'Movimientos de inventario', 29, 0, 0, ''),
(741, 'Movimientos IMSS', 28, 0, 0, ''),
(742, 'Nacionalidades', 38, 0, 0, ''),
(743, 'Negociaciones especiales', 23, 0, 0, ''),
(744, 'Niveles', 70, 0, 0, ''),
(745, 'No break', 24, 0, 0, ''),
(746, 'No se puede crear ticket', 55, 0, 0, ''),
(747, 'Nombres en pólizas', 17, 0, 0, ''),
(748, 'Nómina', 27, 0, 0, ''),
(749, 'Nómina consejo', 25, 0, 0, ''),
(750, 'Notas de abono', 58, 0, 0, ''),
(751, 'Notas de Cargo/ Crédito', 76, 0, 0, ''),
(752, 'Notas de crédito y cargo a proveedor', 18, 0, 0, ''),
(753, 'Notas de débito', 58, 0, 0, ''),
(754, 'NTU', 15, 0, 0, ''),
(755, 'Numerador de doctos', 25, 0, 0, ''),
(756, 'Numeradores de pólizas', 17, 0, 0, ''),
(757, 'Objetivos de  Ventas', 78, 0, 0, ''),
(758, 'Objetivos de ventas', 80, 0, 0, ''),
(759, 'observaciones proveedores', 21, 0, 0, ''),
(760, 'office 2007', 67, 0, 0, ''),
(761, 'office 2010', 67, 0, 0, ''),
(762, 'office 2013', 67, 0, 0, ''),
(763, 'Operaciones', 63, 0, 0, ''),
(764, 'Orden de devolución manual a proveedor', 29, 0, 0, ''),
(765, 'Orden sit. Bancaria', 25, 0, 0, ''),
(766, 'Ordenes de pago', 26, 0, 0, ''),
(767, 'Otro', 24, 0, 0, ''),
(768, 'Otros', 21, 0, 0, ''),
(769, 'outlook', 67, 0, 0, ''),
(770, 'Pagados con anticipo', 25, 0, 0, ''),
(771, 'Pagos', 25, 0, 0, ''),
(772, 'Pagos a proveedor', 18, 0, 0, ''),
(773, 'Pagos a proveedor tesorería', 18, 0, 0, ''),
(774, 'Pagos anticipados', 22, 0, 0, ''),
(775, 'Pagos múltiples', 22, 0, 0, ''),
(776, 'Pagos y retenciones a terceras personas', 18, 0, 0, ''),
(777, 'Países', 56, 0, 0, ''),
(778, 'Parametrización (Cálculo de IVA)', 56, 0, 0, ''),
(779, 'Parametrización (Comparativo de gastos x suc)', 56, 0, 0, ''),
(780, 'Parametrización (Componente inflacionario)', 56, 0, 0, ''),
(781, 'Parámetros', 25, 0, 0, ''),
(782, 'Parámetros de ajustes', 23, 0, 0, ''),
(783, 'Parámetros de sucursal', 26, 0, 0, ''),
(784, 'parámetros de tarjetas bancarias', 18, 0, 0, ''),
(785, 'Parámetros de tiempo aire', 26, 0, 0, ''),
(786, 'Parámetros sucursal - nómina', 25, 0, 0, ''),
(787, 'Parentesco', 38, 0, 0, ''),
(788, 'Pedidos capturados por condición', 14, 0, 0, ''),
(789, 'Pedidos entregados', 64, 0, 0, ''),
(790, 'Perfil de usuario', 41, 0, 0, ''),
(791, 'Periodos x quincena - provision', 39, 0, 0, ''),
(792, 'Plan de cuentas', 17, 0, 0, ''),
(793, 'Plan de trabajo por agente', 58, 0, 0, ''),
(794, 'Plantilla de gastos', 18, 0, 0, ''),
(795, 'Plantilla de presupuestos', 42, 0, 0, ''),
(796, 'Plantilla de Temporada Escolar', 28, 0, 0, ''),
(797, 'Plantilla deudores diversos', 18, 0, 0, ''),
(798, 'Platilla por sucursal', 42, 0, 0, ''),
(799, 'Plazas', 56, 0, 0, ''),
(800, 'Póliza de ingresos', 1, 0, 0, ''),
(801, 'Pólizas capturadas', 18, 0, 0, ''),
(802, 'Pólizas contables anticipo-Contabilidad', 25, 0, 0, ''),
(803, 'Pólizas contables quincena-PTU -Contabilidad', 25, 0, 0, ''),
(804, 'Pólizas pendientes de afectar', 18, 0, 0, ''),
(805, 'Pólizas transferencias PTU ajustes', 25, 0, 0, ''),
(806, 'Posiciones', 70, 0, 0, ''),
(807, 'power point', 67, 0, 0, ''),
(808, 'Precios Especiales o descuentos', 81, 0, 0, ''),
(809, 'Presupuesto general por empresa', 42, 0, 0, ''),
(810, 'Presupuesto general por sucursal', 42, 0, 0, ''),
(811, 'Presupuesto por cuenta contable', 42, 0, 0, ''),
(812, 'Presupuestos', 27, 0, 0, ''),
(813, 'Primas Vacacionales', 39, 0, 0, ''),
(814, 'Printer de documentos', 25, 0, 0, ''),
(815, 'Procesos', 28, 0, 0, ''),
(816, 'Producción', 53, 0, 0, ''),
(817, 'Productos', 14, 0, 0, ''),
(818, 'Productos activos por sucursal', 21, 0, 0, ''),
(819, 'Productos de baja rotación', 30, 0, 0, ''),
(820, 'Productos después de cambios', 14, 0, 0, ''),
(821, 'Productos por debajo del mínimo', 14, 0, 0, ''),
(822, 'Productos TCI', 73, 0, 0, ''),
(823, 'Productos vigentes x sucursal', 14, 0, 0, ''),
(824, 'Profesiones', 38, 0, 0, ''),
(825, 'Programa de pagos', 25, 0, 0, ''),
(826, 'Programa XML Faltantes', 69, 0, 0, ''),
(827, 'Programación de Mantenimientos', 77, 0, 0, ''),
(828, 'Programación toma física', 41, 0, 0, ''),
(829, 'Pronostico de cobranza', 23, 0, 0, ''),
(830, 'Prorrateo por gastos', 43, 0, 0, ''),
(831, 'Proveedor- razón social', 21, 0, 0, ''),
(832, 'Proveedor-Sucursal-Cuenta', 14, 0, 0, ''),
(833, 'Proveedores', 14, 0, 0, ''),
(834, 'Proveedores (servicio)', 77, 0, 0, ''),
(835, 'Proveedores bienes / servicios', 26, 0, 0, ''),
(836, 'Proveedores de activos-VEH', 18, 0, 0, ''),
(837, 'Proveedores de vales', 38, 0, 0, ''),
(838, 'Proveedores- Consulta', 25, 0, 0, ''),
(839, 'Proveedores- mantenimiento', 25, 0, 0, ''),
(840, 'Provisiones de fletes', 18, 0, 0, ''),
(841, 'Proyector', 24, 0, 0, ''),
(842, 'Proyectos', 71, 0, 0, ''),
(843, 'PTU finiquitados', 39, 0, 0, ''),
(844, 'Publicacion', 11, 0, 0, ''),
(845, 'Publicaciones', 28, 0, 0, ''),
(846, 'Puestos', 38, 0, 0, ''),
(847, 'Push Money', 81, 0, 0, ''),
(848, 'Racks', 12, 0, 0, ''),
(849, 'Radio Tony', 45, 0, 0, ''),
(850, 'Reactivación de Empleados', 39, 0, 0, ''),
(851, 'Recalcular saldos proveedores', 25, 0, 0, ''),
(852, 'Recalculo, NEG  ESP', 78, 0, 0, ''),
(853, 'Recepción de citas', 70, 0, 0, ''),
(854, 'Recepción de finiquitos', 25, 0, 0, ''),
(855, 'Recepción de PTU finiquitados', 39, 0, 0, ''),
(856, 'Recepción de reembolsos', 26, 0, 0, ''),
(857, 'Recepción de relaciones', 22, 0, 0, ''),
(858, 'Recepción de reposiciones', 26, 0, 0, ''),
(859, 'Recibir de información de sucursal', 60, 0, 0, ''),
(860, 'Recibos de nómina', 1, 0, 0, ''),
(861, 'Recolecciones', 1, 0, 0, ''),
(862, 'Redes', 46, 0, 0, ''),
(863, 'Referencias Laborales', 28, 0, 0, ''),
(864, 'Regiones de cartera', 23, 0, 0, ''),
(865, 'Regiones de ventas', 80, 0, 0, ''),
(866, 'Regulador', 24, 0, 0, ''),
(867, 'Regulador(nobreak)', 24, 0, 0, ''),
(868, 'Reimpresión de facturas/notas de abono', 1, 0, 0, ''),
(869, 'Reimpresión de pedidos, requisiciones y ordenes de devolución', 29, 0, 0, ''),
(870, 'Reimpresiones', 48, 0, 0, ''),
(871, 'Relacion de bonos gerenciales', 28, 0, 0, ''),
(872, 'Relación de cobranza', 22, 0, 0, ''),
(873, 'Relación de cuentas TONY vs SAT', 18, 0, 0, ''),
(874, 'Relación de doc. pendientes', 25, 0, 0, ''),
(875, 'Relación de embarque por devolución a proveedor', 29, 0, 0, ''),
(876, 'Relacion de Gaolineras afiliadas', 28, 0, 0, ''),
(877, 'Relación de movimientos', 25, 0, 0, ''),
(878, 'Relación de salida por traspaso', 29, 0, 0, ''),
(879, 'Relación de talones por pagar', 26, 0, 0, ''),
(880, 'Relaciones de embarque', 70, 0, 0, ''),
(881, 'Remisiones pendientes', 70, 0, 0, ''),
(882, 'reordenación de productos', 21, 0, 0, ''),
(883, 'Reporte acumulado ventas por canal', 81, 0, 0, ''),
(884, 'Reporte acumulado ventas por objetivo', 81, 0, 0, ''),
(885, 'Reporte checadas - firmas', 39, 0, 0, ''),
(886, 'Reporte clientes condiciones especiales', 81, 0, 0, ''),
(887, 'Reporte Comisiones de ventas', 80, 0, 0, ''),
(888, 'Reporte comparativo anual', 58, 0, 0, ''),
(889, 'Reporte comparativo clientes', 81, 0, 0, ''),
(890, 'Reporte comparativo de diferencias', 79, 0, 0, ''),
(891, 'Reporte comparativo diario', 58, 0, 0, ''),
(892, 'Reporte comparativo diario vtas corpo', 81, 0, 0, ''),
(893, 'Reporte comparativo diario vtas suc', 43, 0, 0, ''),
(894, 'Reporte comparativo plan diario de trabajo', 81, 0, 0, ''),
(895, 'Reporte comparativo ventas zona vend.', 81, 0, 0, ''),
(896, 'Reporte de ajustes a inventarios', 29, 0, 0, ''),
(897, 'Reporte de alta de nomina corpo', 40, 0, 0, ''),
(898, 'Reporte de Anexos de Notas de cargo / crédito', 76, 0, 0, ''),
(899, 'Reporte de antigüedad de saldos', 18, 0, 0, ''),
(900, 'Reporte de Auxiliar de cuentas', 17, 0, 0, ''),
(901, 'Reporte de buró de crédito', 23, 0, 0, ''),
(902, 'Reporte de clientes con condiciones especiales', 22, 0, 0, ''),
(903, 'Reporte de clientes con volumen', 81, 0, 0, ''),
(904, 'Reporte de comisiones', 58, 0, 0, ''),
(905, 'Reporte de Compras de clientes', 23, 0, 0, ''),
(906, 'Reporte de Concentrado de entradas', 76, 0, 0, ''),
(907, 'Reporte de condiciones de proveedor', 21, 0, 0, ''),
(908, 'Reporte de consumo interno', 29, 0, 0, ''),
(909, 'Reporte de Control de Acceso', 28, 0, 0, ''),
(910, 'Reporte de diferencias', 29, 0, 0, ''),
(911, 'Reporte de Diferencias en devoluciones', 76, 0, 0, ''),
(912, 'Reporte de diferencias importe vs pago', 58, 0, 0, ''),
(913, 'Reporte de diferencias mensuales', 30, 0, 0, ''),
(914, 'Reporte de directorio de proveedores', 21, 0, 0, ''),
(915, 'Reporte de Documentos por vencer', 23, 0, 0, ''),
(916, 'Reporte de Estado-ciudad', 80, 0, 0, ''),
(917, 'Reporte de existencias y ventas', 79, 0, 0, ''),
(918, 'Reporte de facturación electrónica', 58, 0, 0, ''),
(919, 'Reporte de facturas', 18, 0, 0, ''),
(920, 'Reporte de facturas mayoreo/crédito', 58, 0, 0, ''),
(921, 'Reporte de facturas pendientes de pagar', 18, 0, 0, ''),
(922, 'Reporte de folios electrónicos', 18, 0, 0, ''),
(923, 'Reporte de Libro diario de compras', 76, 0, 0, ''),
(924, 'Reporte de Libro diario de Notas de Cargo/ Crédito', 76, 0, 0, ''),
(925, 'Reporte de Libro mensual de compras', 76, 0, 0, ''),
(926, 'Reporte de Libro mensual de Notas de Cargo/ Crédito', 76, 0, 0, ''),
(927, 'Reporte de lista de precios', 21, 0, 0, ''),
(928, 'Reporte de lista de precios para venta', 21, 0, 0, ''),
(929, 'Reporte de lista de proveedores', 21, 0, 0, ''),
(930, 'Reporte de mercancía sin movimiento', 14, 0, 0, ''),
(931, 'Reporte de motivo devoluciones de clientes', 58, 0, 0, ''),
(932, 'Reporte de Motivo y/o devoluciones', 23, 0, 0, ''),
(933, 'Reporte de motivos de devulución de clientes', 22, 0, 0, ''),
(934, 'Reporte de movimiento de caja', 1, 0, 0, ''),
(935, 'Reporte de movimientos', 18, 0, 0, ''),
(936, 'Reporte de movimientos (GX)', 26, 0, 0, ''),
(937, 'Reporte de movimientos de inventario', 29, 0, 0, ''),
(938, 'Reporte de nómina', 1, 0, 0, ''),
(939, 'Reporte de notas de abono menudeo', 58, 0, 0, ''),
(940, 'Reporte de notas de cargo y crédito', 18, 0, 0, ''),
(941, 'Reporte de nuevos productos', 21, 0, 0, ''),
(942, 'Reporte de ordenamiento por línea', 21, 0, 0, ''),
(943, 'Reporte de pedidos expo a surtir con existencia', 35, 0, 0, ''),
(944, 'Reporte de pedidos expo por cliente', 35, 0, 0, ''),
(945, 'Reporte de pedidos expo por proveedor', 35, 0, 0, ''),
(946, 'Reporte de póliza', 17, 0, 0, ''),
(947, 'Reporte de productividad', 35, 0, 0, ''),
(948, 'Reporte de productos con costo y precio', 21, 0, 0, ''),
(949, 'Reporte de productos descontinuados', 21, 0, 0, ''),
(950, 'Reporte de productos vigentes por sucursal', 21, 0, 0, ''),
(951, 'Reporte de proveedor por línea', 21, 0, 0, ''),
(952, 'Reporte de proveedores por sucursal', 21, 0, 0, ''),
(953, 'Reporte de proveedores sustitutos', 21, 0, 0, ''),
(954, 'Reporte de relacion', 38, 0, 0, ''),
(955, 'Reporte de resumen de cobros (rec. Valor)', 18, 0, 0, ''),
(956, 'Reporte de resumen total de gastos', 42, 0, 0, ''),
(957, 'Reporte de Saldos por vencer', 23, 0, 0, ''),
(958, 'Reporte de saldos rojos', 22, 0, 0, ''),
(959, 'Reporte de Saldos vencidos', 23, 0, 0, ''),
(960, 'Reporte de total de gastos presupuestados', 42, 0, 0, ''),
(961, 'Reporte de vendedores', 58, 0, 0, ''),
(962, 'Reporte de ventas menudeo', 58, 0, 0, ''),
(963, 'Reporte deudores', 18, 0, 0, ''),
(964, 'Reporte diario de vendedores de smartmovil', 81, 0, 0, ''),
(965, 'Reporte distribución de moneda', 1, 0, 0, ''),
(966, 'Reporte estado de resultados presupuestados', 42, 0, 0, ''),
(967, 'Reporte facturas de vale', 23, 0, 0, ''),
(968, 'Reporte gastos por almacén presupuestados', 42, 0, 0, ''),
(969, 'Reporte general', 38, 0, 0, ''),
(970, 'Reporte libre de productos', 21, 0, 0, ''),
(971, 'Reporte mensual de diferencias', 79, 0, 0, ''),
(972, 'Reporte pagos con tarjeta de crédito', 18, 0, 0, ''),
(973, 'Reporte para toma de existencia', 29, 0, 0, ''),
(974, 'Reporte Productos clientes especiales', 80, 0, 0, ''),
(975, 'Reporte valuación de inventarios', 18, 0, 0, ''),
(976, 'Reporte ventas clientes proveedor', 81, 0, 0, ''),
(977, 'Reporte Ventas de vendedores anual', 80, 0, 0, ''),
(978, 'Reporte Zona subzona', 80, 0, 0, ''),
(979, 'Reportes', 71, 0, 0, ''),
(980, 'Req. de traspaso sugeridas', 14, 0, 0, ''),
(981, 'Requisicion de equipo nuevo', 24, 0, 0, ''),
(982, 'Requisición de traspaso manual', 29, 0, 0, ''),
(983, 'Reservaciones Hotel', 28, 0, 0, ''),
(984, 'Resumen de antigüedad de saldos', 23, 0, 0, ''),
(985, 'Resumen de transportistas', 23, 0, 0, ''),
(986, 'Resumen notas por cheque dev.', 23, 0, 0, ''),
(987, 'Resumen total de gastos', 17, 0, 0, ''),
(988, 'Reversos de nominas', 39, 0, 0, ''),
(989, 'Revisar doctos', 25, 0, 0, ''),
(990, 'Revisión de folios', 18, 0, 0, ''),
(991, 'Revision de Procesos Bloqueados ó Consumen mucho CPU', 36, 0, 0, ''),
(992, 'Revisión de Procesos Nocturnos', 36, 0, 0, ''),
(993, 'Revisión de Respaldos Diarios y Semanales', 36, 0, 0, ''),
(994, 'Revision/Reportar', 24, 0, 0, ''),
(995, 'Roles', 41, 0, 0, ''),
(996, 'Router', 46, 0, 0, ''),
(997, 'Rubros de gastos', 17, 0, 0, ''),
(998, 'Rutas', 41, 0, 0, ''),
(999, 'Salario minimo', 39, 0, 0, ''),
(1000, 'Saldos anuales', 17, 0, 0, ''),
(1001, 'Saldos iniciales vales de compra', 43, 0, 0, ''),
(1002, 'Saldos menores', 25, 0, 0, ''),
(1003, 'Salida de vehículos', 41, 0, 0, ''),
(1004, 'Salida de vehiculos por operador', 70, 0, 0, ''),
(1005, 'Salida por donacion', 28, 0, 0, ''),
(1006, 'Salidas por devolución a proveedor', 29, 0, 0, ''),
(1007, 'Salidas por traspaso', 29, 0, 0, ''),
(1008, 'Scanner', 24, 0, 0, ''),
(1009, 'Scanner / Cama', 24, 0, 0, ''),
(1010, 'Scanner inalambrico', 24, 0, 0, ''),
(1011, 'scanner Verificador', 24, 0, 0, ''),
(1012, 'Seguridad social', 59, 0, 0, ''),
(1013, 'Servidor', 24, 0, 0, ''),
(1014, 'Sin acceso a carpetas compartidas', 3, 0, 0, ''),
(1015, 'Sindicatos', 38, 0, 0, ''),
(1016, 'Sistema Operativo', 24, 0, 0, ''),
(1017, 'Situación bancaria', 25, 0, 0, ''),
(1018, 'Situación bancaria - movimientos pólizas', 26, 0, 0, ''),
(1019, 'Smartcostos', 59, 0, 0, ''),
(1020, 'Smartinventarios', 59, 0, 0, ''),
(1021, 'Smartnet', 61, 0, 0, ''),
(1022, 'SmartnetCorpo', 50, 0, 0, ''),
(1023, 'Smartnetnomina', 59, 0, 0, ''),
(1024, 'Smartventas', 59, 0, 0, ''),
(1025, 'Software', 84, 0, 0, ''),
(1026, 'Software de Base de Datos', 5, 0, 0, ''),
(1027, 'Solicitud de ajustes', 29, 0, 0, ''),
(1028, 'Solicitud de Compra', 50, 0, 0, ''),
(1029, 'Solicitud de compras', 68, 0, 0, ''),
(1030, 'Solicitud de Finiquitos', 28, 0, 0, ''),
(1031, 'Solicitudes de ajustes', 30, 0, 0, ''),
(1032, 'Soporte a usuarios', 59, 0, 0, ''),
(1033, 'Spool de pedidos, requisiciones y ordenes de devolución', 29, 0, 0, ''),
(1034, 'Storage', 53, 0, 0, ''),
(1035, 'Sublineas', 21, 0, 0, ''),
(1036, 'Subzonas ventas', 80, 0, 0, ''),
(1037, 'Sucursal por Omisión', 56, 0, 0, ''),
(1038, 'Sucursales', 17, 0, 0, ''),
(1039, 'Sucursales / localidades', 56, 0, 0, ''),
(1040, 'Sucursales y % de crecimiento', 14, 0, 0, ''),
(1041, 'Sueldo diario integrado', 39, 0, 0, ''),
(1042, 'Sueldos en garantia', 39, 0, 0, ''),
(1043, 'Sueldos por puestos', 39, 0, 0, ''),
(1044, 'Sugerencias de embarque', 70, 0, 0, ''),
(1045, 'suite adobe', 66, 0, 0, ''),
(1046, 'Suministro eléctrico', 12, 0, 0, ''),
(1047, 'Switch', 24, 0, 0, ''),
(1048, 'Tablet', 24, 0, 0, ''),
(1049, 'Tarifas', 41, 0, 0, ''),
(1050, 'teamviewer', 67, 0, 0, ''),
(1051, 'Teclado', 24, 0, 0, ''),
(1052, 'Teléfono analógico', 74, 0, 0, ''),
(1053, 'Teléfono IP', 74, 0, 0, ''),
(1054, 'Terminal', 24, 0, 0, ''),
(1055, 'Terminal portátil', 29, 0, 0, ''),
(1056, 'Tibrar XML', 52, 0, 0, ''),
(1057, 'Tiempo de mercancía en centra', 70, 0, 0, ''),
(1058, 'Timbrado de nominas', 39, 0, 0, ''),
(1059, 'Timbres Faltantes', 44, 0, 0, ''),
(1060, 'Tipo de contrato', 38, 0, 0, ''),
(1061, 'Tipos de base de IVA (Cálculo de IVA)', 56, 0, 0, ''),
(1062, 'Tipos de cálculos (Componente inflacionario)', 56, 0, 0, ''),
(1063, 'Tipos de clientes', 23, 0, 0, ''),
(1064, 'Tipos de gastos (Comparativo de gastos x suc)', 56, 0, 0, ''),
(1065, 'Tipos de impuestos', 18, 0, 0, ''),
(1066, 'Tipos de listas especiales', 80, 0, 0, ''),
(1067, 'Tipos de monedas', 26, 0, 0, ''),
(1068, 'Tipos de pension', 38, 0, 0, ''),
(1069, 'Tipos de precios', 23, 0, 0, ''),
(1070, 'Tipos de transportes', 70, 0, 0, ''),
(1071, 'Tipos de Vehículos', 77, 0, 0, ''),
(1072, 'Transferencia al sistema de presupuesto', 80, 0, 0, ''),
(1073, 'Transferencia de fichas/pólizas', 1, 0, 0, ''),
(1074, 'Transferencia de folios y parámetros a sucursal', 18, 0, 0, ''),
(1075, 'Transferencia de listas de precios LAB', 80, 0, 0, ''),
(1076, 'Transferencia de movimientos de inventario', 76, 0, 0, ''),
(1077, 'Transferencia de negociaciones especiales', 81, 0, 0, ''),
(1078, 'Transferencia de objetivos de ventas', 80, 0, 0, ''),
(1079, 'Transferencia de parámetros de ajustes', 23, 0, 0, ''),
(1080, 'Transferencia de parámetros de sucursales', 23, 0, 0, ''),
(1081, 'Transferencia de tiempo aire', 26, 0, 0, ''),
(1082, 'Transferencia pedidos, traspasos devoluciones', 41, 0, 0, ''),
(1083, 'Transferencia PTU/ajuste de nómina', 26, 0, 0, ''),
(1084, 'Transferencias', 44, 0, 0, ''),
(1085, 'Transferencias automaticas', 41, 0, 0, ''),
(1086, 'Transferencias de Ofertas', 21, 0, 0, ''),
(1087, 'Transferencias de pedidos, traspasos y devoluciones', 14, 0, 0, ''),
(1088, 'Transferencias de Precios', 21, 0, 0, ''),
(1089, 'Transferir Embargos judiciales', 39, 0, 0, ''),
(1090, 'Transferir TCI', 39, 0, 0, ''),
(1091, 'Transportistas', 14, 0, 0, ''),
(1092, 'Trasp/Reemb-InverNomina', 25, 0, 0, ''),
(1093, 'Trasp/Reemb-transferencia de efectivo', 25, 0, 0, ''),
(1094, 'Traspaso entre locales', 29, 0, 0, ''),
(1095, 'Troncal Digital', 74, 0, 0, ''),
(1096, 'Ubicación de sucursales', 70, 0, 0, ''),
(1097, 'Ubicaciones por producto', 29, 0, 0, ''),
(1098, 'ubicaciones- muebles', 30, 0, 0, ''),
(1099, 'ubicaciones- tramos', 30, 0, 0, ''),
(1100, 'ubicaciones- zonas', 30, 0, 0, ''),
(1101, 'Unidad de dvd externa', 24, 0, 0, ''),
(1102, 'Unidad de respaldo', 24, 0, 0, ''),
(1103, 'Unidades de medida', 56, 0, 0, ''),
(1104, 'Usuario/Contraseña', 55, 0, 0, ''),
(1105, 'Usuarios', 41, 0, 0, ''),
(1106, 'Utilidades Computony', 43, 0, 0, ''),
(1107, 'uvnc', 67, 0, 0, ''),
(1108, 'Vale Deudor', 28, 0, 0, ''),
(1109, 'Vales de compañía', 18, 0, 0, ''),
(1110, 'Valija Suc-Corpo', 28, 0, 0, ''),
(1111, 'Valorización', 59, 0, 0, ''),
(1112, 'Valorización de certificados', 76, 0, 0, ''),
(1113, 'Valorizaciones PDF', 76, 0, 0, ''),
(1114, 'Vehículos', 77, 0, 0, ''),
(1115, 'Vendedores', 58, 0, 0, ''),
(1116, 'Venta de copias', 37, 0, 0, ''),
(1117, 'Ventas', 50, 0, 0, ''),
(1118, 'Ventas de menudeo', 18, 0, 0, ''),
(1119, 'Ventas e Inventarios', 79, 0, 0, ''),
(1120, 'Ventas globales', 1, 0, 0, ''),
(1121, 'Ventas por producto', 30, 0, 0, ''),
(1122, 'Ventas por productos', 14, 0, 0, ''),
(1123, 'Ventas y utilidades por proveedor', 14, 0, 0, ''),
(1124, 'Verifica quincena-empleados', 39, 0, 0, ''),
(1125, 'Verificador', 82, 0, 0, ''),
(1126, 'Viajes', 77, 0, 0, ''),
(1127, 'Videovigilancia - Cámara CCTV', 51, 0, 0, ''),
(1128, 'Videovigilancia - DVR', 51, 0, 0, ''),
(1129, 'Visitas a sucursal', 28, 0, 0, ''),
(1130, 'Windows', 65, 0, 0, ''),
(1131, 'Winrar', 67, 0, 0, ''),
(1132, 'word', 67, 0, 0, ''),
(1133, 'Zonas', 70, 0, 0, ''),
(1134, 'Zonas de cobranza', 23, 0, 0, ''),
(1135, 'Zonas de ventas', 80, 0, 0, ''),
(1151, 'Mensaje de error', 174, 0, 0, ''),
(1152, 'Mensaje de error', 208, 0, 0, ''),
(1153, 'Mensaje de error', 228, 0, 0, ''),
(1154, 'Mensaje de error', 254, 0, 0, ''),
(1155, 'Mensaje de error', 262, 0, 0, ''),
(1156, 'Mensaje de error', 276, 0, 0, ''),
(1157, 'No refleja información', 286, 0, 0, ''),
(1158, 'Mensaje de error', 289, 0, 0, ''),
(1159, 'Mensaje de error', 295, 0, 0, ''),
(1160, 'Mensaje de error', 301, 0, 0, ''),
(1161, 'Mensaje de error', 374, 0, 0, ''),
(1162, 'Mensaje de error', 378, 0, 0, ''),
(1163, 'Mensaje de error', 382, 0, 0, ''),
(1164, 'Mensaje de error', 387, 0, 0, ''),
(1165, 'Mensaje de error', 389, 0, 0, ''),
(1166, 'Mensaje de error', 402, 0, 0, ''),
(1167, 'Mensaje de error', 408, 0, 0, ''),
(1168, 'Mensaje de error', 409, 0, 0, ''),
(1169, 'Mensaje de error', 410, 0, 0, ''),
(1170, 'Mensaje de error', 424, 0, 0, ''),
(1171, 'Mensaje de error', 426, 0, 0, ''),
(1172, 'No refleja información', 434, 0, 0, ''),
(1173, 'No refleja información', 439, 0, 0, ''),
(1174, 'Mensaje de error', 476, 0, 0, ''),
(1175, 'Mensaje de error', 502, 0, 0, ''),
(1176, 'Mensaje de error', 504, 0, 0, ''),
(1177, 'Mensaje de error', 543, 0, 0, ''),
(1178, 'Mensaje de error', 570, 0, 0, ''),
(1179, 'Mensaje de error', 582, 0, 0, ''),
(1180, 'Mensaje de error', 681, 0, 0, ''),
(1181, 'Mensaje de error', 712, 0, 0, ''),
(1182, 'Mensaje de error', 713, 0, 0, ''),
(1183, 'Mensaje de error', 788, 0, 0, ''),
(1184, 'Mensaje de error', 817, 0, 0, ''),
(1185, 'Mensaje de error', 820, 0, 0, ''),
(1186, 'Mensaje de error', 821, 0, 0, ''),
(1187, 'Mensaje de error', 823, 0, 0, ''),
(1188, 'Mensaje de error', 833, 0, 0, '');
INSERT INTO `hdcategories` (`id`, `title`, `parent_id`, `lft`, `rght`, `description`) VALUES
(1189, 'Mensaje de error', 832, 0, 0, ''),
(1190, 'Mensaje de error', 930, 0, 0, ''),
(1191, 'Mensaje de error', 980, 0, 0, ''),
(1192, 'Mensaje de error', 1040, 0, 0, ''),
(1193, 'Mensaje de error', 1087, 0, 0, ''),
(1194, 'Mensaje de error', 1091, 0, 0, ''),
(1195, 'Mensaje de error', 1122, 0, 0, ''),
(1196, 'Mensaje de error', 1123, 0, 0, ''),
(1197, 'Extracción de folios angre', 234, 0, 0, ''),
(1198, 'Folios faltantes', 234, 0, 0, ''),
(1199, 'Caja chica Bloqueada', 247, 0, 0, ''),
(1200, 'Gasto de viaje Bloqueado', 247, 0, 0, ''),
(1201, 'Mensaje de error', 247, 0, 0, ''),
(1202, 'No imprime correctamente', 247, 0, 0, ''),
(1203, 'UUID no válido', 247, 0, 0, ''),
(1204, 'Mensaje de error', 167, 0, 0, ''),
(1205, 'Mensaje de error', 168, 0, 0, ''),
(1206, 'Mensaje de error', 211, 0, 0, ''),
(1207, 'Mensaje de error', 212, 0, 0, ''),
(1208, 'Mensaje de error', 213, 0, 0, ''),
(1209, 'Mensaje de error', 214, 0, 0, ''),
(1210, 'Mensaje de error', 215, 0, 0, ''),
(1211, 'Mensaje de error', 216, 0, 0, ''),
(1212, 'Mensaje de error', 218, 0, 0, ''),
(1213, 'Mensaje de error', 239, 0, 0, ''),
(1214, 'Mensaje de error', 252, 0, 0, ''),
(1215, 'Mensaje de error', 277, 0, 0, ''),
(1216, 'Mensaje de error', 290, 0, 0, ''),
(1217, 'Mensaje de error', 323, 0, 0, ''),
(1218, 'Mensaje de error', 338, 0, 0, ''),
(1219, 'Mensaje de error', 372, 0, 0, ''),
(1220, 'Mensaje de error', 417, 0, 0, ''),
(1221, 'Mensaje de error', 428, 0, 0, ''),
(1222, 'Mensaje de error', 435, 0, 0, ''),
(1223, 'Mensaje de error', 506, 0, 0, ''),
(1224, 'Mensaje de error', 511, 0, 0, ''),
(1225, 'Mensaje de error', 571, 0, 0, ''),
(1226, 'Mensaje de error', 572, 0, 0, ''),
(1227, 'Mensaje de error', 592, 0, 0, ''),
(1228, 'Mensaje de error', 691, 0, 0, ''),
(1229, 'Mensaje de error', 747, 0, 0, ''),
(1230, 'Mensaje de error', 756, 0, 0, ''),
(1231, 'Mensaje de error', 792, 0, 0, ''),
(1232, 'Mensaje de error', 900, 0, 0, ''),
(1233, 'Mensaje de error', 946, 0, 0, ''),
(1234, 'Mensaje de error', 987, 0, 0, ''),
(1235, 'Mensaje de error', 997, 0, 0, ''),
(1236, 'Mensaje de error', 1000, 0, 0, ''),
(1237, 'Mensaje de error', 1038, 0, 0, ''),
(1238, 'Mensaje de error', 166, 0, 0, ''),
(1239, 'Mensaje de error', 177, 0, 0, ''),
(1240, 'Mensaje de error', 178, 0, 0, ''),
(1241, 'Mensaje de error', 202, 0, 0, ''),
(1242, 'Mensaje de error', 217, 0, 0, ''),
(1243, 'Mensaje de error', 219, 0, 0, ''),
(1244, 'Mensaje de error', 272, 0, 0, ''),
(1245, 'Mensaje de error', 274, 0, 0, ''),
(1246, 'Mensaje de error', 275, 0, 0, ''),
(1247, 'Mensaje de error', 332, 0, 0, ''),
(1248, 'Mensaje de error', 333, 0, 0, ''),
(1249, 'Mensaje de error', 334, 0, 0, ''),
(1250, 'Mensaje de error', 339, 0, 0, ''),
(1251, 'Mensaje de error', 377, 0, 0, ''),
(1252, 'Mensaje de error', 384, 0, 0, ''),
(1253, 'Mensaje de error', 405, 0, 0, ''),
(1254, 'Mensaje de error', 436, 0, 0, ''),
(1255, 'Mensaje de error', 437, 0, 0, ''),
(1256, 'Mensaje de error', 457, 0, 0, ''),
(1257, 'Mensaje de error', 458, 0, 0, ''),
(1258, 'Mensaje de error', 489, 0, 0, ''),
(1259, 'Mensaje de error', 513, 0, 0, ''),
(1260, 'Mensaje de error', 523, 0, 0, ''),
(1261, 'Mensaje de error', 524, 0, 0, ''),
(1262, 'Mensaje de error', 525, 0, 0, ''),
(1263, 'Mensaje de error', 571, 0, 0, ''),
(1264, 'Mensaje de error', 600, 0, 0, ''),
(1265, 'Mensaje de error', 601, 0, 0, ''),
(1266, 'Mensaje de error', 623, 0, 0, ''),
(1267, 'Mensaje de error', 624, 0, 0, ''),
(1268, 'Mensaje de error', 628, 0, 0, ''),
(1269, 'Mensaje de error', 633, 0, 0, ''),
(1270, 'Mensaje de error', 653, 0, 0, ''),
(1271, 'Mensaje de error', 658, 0, 0, ''),
(1272, 'Mensaje de error', 664, 0, 0, ''),
(1273, 'Mensaje de error', 678, 0, 0, ''),
(1274, 'Mensaje de error', 749, 0, 0, ''),
(1275, 'Mensaje de error', 755, 0, 0, ''),
(1276, 'Mensaje de error', 765, 0, 0, ''),
(1277, 'Mensaje de error', 770, 0, 0, ''),
(1278, 'Mensaje de error', 771, 0, 0, ''),
(1279, 'Mensaje de error', 781, 0, 0, ''),
(1280, 'Mensaje de error', 786, 0, 0, ''),
(1281, 'Mensaje de error', 802, 0, 0, ''),
(1282, 'Mensaje de error', 803, 0, 0, ''),
(1283, 'Mensaje de error', 805, 0, 0, ''),
(1284, 'Mensaje de error', 814, 0, 0, ''),
(1285, 'Mensaje de error', 825, 0, 0, ''),
(1286, 'Mensaje de error', 838, 0, 0, ''),
(1287, 'Mensaje de error', 839, 0, 0, ''),
(1288, 'Mensaje de error', 851, 0, 0, ''),
(1289, 'Mensaje de error', 854, 0, 0, ''),
(1290, 'Mensaje de error', 874, 0, 0, ''),
(1291, 'Mensaje de error', 877, 0, 0, ''),
(1292, 'Mensaje de error', 989, 0, 0, ''),
(1293, 'Mensaje de error', 1002, 0, 0, ''),
(1294, 'Mensaje de error', 1017, 0, 0, ''),
(1295, 'Mensaje de error', 1092, 0, 0, ''),
(1296, 'Mensaje de error', 1093, 0, 0, ''),
(1297, 'No actualiza información', 700, 0, 0, ''),
(1298, 'Reimpresión de notas de ventas/ notas de abono/notas de debito', 870, 0, 0, ''),
(1299, 'Mensaje de error', 688, 0, 0, ''),
(1300, 'Mensaje de error', 171, 0, 0, ''),
(1301, 'Mensaje de error', 172, 0, 0, ''),
(1302, 'Mensaje de error', 175, 0, 0, ''),
(1303, 'Mensaje de error', 232, 0, 0, ''),
(1304, 'Mensaje de error', 253, 0, 0, ''),
(1305, 'Mensaje de error', 283, 0, 0, ''),
(1306, 'Mensaje de error', 302, 0, 0, ''),
(1307, 'Mensaje de error', 322, 0, 0, ''),
(1308, 'Mensaje de error', 371, 0, 0, ''),
(1309, 'Mensaje de error', 430, 0, 0, ''),
(1310, 'Mensaje de error', 522, 0, 0, ''),
(1311, 'Mensaje de error', 640, 0, 0, ''),
(1312, 'Mensaje de error', 795, 0, 0, ''),
(1313, 'Mensaje de error', 798, 0, 0, ''),
(1314, 'Mensaje de error', 809, 0, 0, ''),
(1315, 'Mensaje de error', 810, 0, 0, ''),
(1316, 'Mensaje de error', 811, 0, 0, ''),
(1317, 'Mensaje de error', 956, 0, 0, ''),
(1318, 'Mensaje de error', 960, 0, 0, ''),
(1319, 'Mensaje de error', 966, 0, 0, ''),
(1320, 'Mensaje de error', 968, 0, 0, ''),
(1321, 'Mensaje de error', 219, 0, 0, ''),
(1322, 'Mensaje de error', 238, 0, 0, ''),
(1323, 'Mensaje de error', 324, 0, 0, ''),
(1324, 'Mensaje de error', 330, 0, 0, ''),
(1325, 'Mensaje de error', 344, 0, 0, ''),
(1326, 'Mensaje de error', 488, 0, 0, ''),
(1327, 'Mensaje de error', 532, 0, 0, ''),
(1328, 'Mensaje de error', 535, 0, 0, ''),
(1329, 'Mensaje de error', 573, 0, 0, ''),
(1330, 'Mensaje de error', 592, 0, 0, ''),
(1331, 'Mensaje de error', 602, 0, 0, ''),
(1332, 'Mensaje de error', 622, 0, 0, ''),
(1333, 'Mensaje de error', 633, 0, 0, ''),
(1334, 'Mensaje de error', 635, 0, 0, ''),
(1335, 'Mensaje de error', 677, 0, 0, ''),
(1336, 'Mensaje de error', 777, 0, 0, ''),
(1337, 'Mensaje de error', 778, 0, 0, ''),
(1338, 'Mensaje de error', 779, 0, 0, ''),
(1339, 'Mensaje de error', 780, 0, 0, ''),
(1340, 'Mensaje de error', 799, 0, 0, ''),
(1341, 'Mensaje de error', 997, 0, 0, ''),
(1342, 'Mensaje de error', 1037, 0, 0, ''),
(1343, 'Mensaje de error', 1039, 0, 0, ''),
(1344, 'Mensaje de error', 1061, 0, 0, ''),
(1345, 'Mensaje de error', 1062, 0, 0, ''),
(1346, 'Mensaje de error', 1064, 0, 0, ''),
(1347, 'Mensaje de error', 1103, 0, 0, ''),
(1348, 'Mensaje de error', 1029, 0, 0, ''),
(1349, 'No muestra vale de compra', 1029, 0, 0, ''),
(1350, 'No refleja información', 441, 0, 0, ''),
(1351, 'Mensaje de error', 181, 0, 0, ''),
(1352, 'Mensaje de error', 188, 0, 0, ''),
(1353, 'Mensaje de error', 189, 0, 0, ''),
(1354, 'Mensaje de error', 190, 0, 0, ''),
(1355, 'Mensaje de error', 197, 0, 0, ''),
(1356, 'Mensaje de error', 207, 0, 0, ''),
(1357, 'Mensaje de error', 217, 0, 0, ''),
(1358, 'Mensaje de error', 314, 0, 0, ''),
(1359, 'Mensaje de error', 376, 0, 0, ''),
(1360, 'Mensaje de error', 429, 0, 0, ''),
(1361, 'Mensaje de error', 473, 0, 0, ''),
(1362, 'Mensaje de error', 487, 0, 0, ''),
(1363, 'Mensaje de error', 494, 0, 0, ''),
(1364, 'Mensaje de error', 495, 0, 0, ''),
(1365, 'Mensaje de error', 519, 0, 0, ''),
(1366, 'Mensaje de error', 536, 0, 0, ''),
(1367, 'Mensaje de error', 575, 0, 0, ''),
(1368, 'Mensaje de error', 583, 0, 0, ''),
(1369, 'Mensaje de error', 617, 0, 0, ''),
(1370, 'Mensaje de error', 652, 0, 0, ''),
(1371, 'Mensaje de error', 691, 0, 0, ''),
(1372, 'Mensaje de error', 725, 0, 0, ''),
(1373, 'Mensaje de error', 752, 0, 0, ''),
(1374, 'Mensaje de error', 772, 0, 0, ''),
(1375, 'Mensaje de error', 773, 0, 0, ''),
(1376, 'Mensaje de error', 776, 0, 0, ''),
(1377, 'Mensaje de error', 784, 0, 0, ''),
(1378, 'Mensaje de error', 794, 0, 0, ''),
(1379, 'Mensaje de error', 797, 0, 0, ''),
(1380, 'Mensaje de error', 801, 0, 0, ''),
(1381, 'Mensaje de error', 804, 0, 0, ''),
(1382, 'Mensaje de error', 836, 0, 0, ''),
(1383, 'Mensaje de error', 840, 0, 0, ''),
(1384, 'Mensaje de error', 873, 0, 0, ''),
(1385, 'Mensaje de error', 899, 0, 0, ''),
(1386, 'Mensaje de error', 919, 0, 0, ''),
(1387, 'Mensaje de error', 921, 0, 0, ''),
(1388, 'Mensaje de error', 922, 0, 0, ''),
(1389, 'Mensaje de error', 935, 0, 0, ''),
(1390, 'Mensaje de error', 940, 0, 0, ''),
(1391, 'Mensaje de error', 955, 0, 0, ''),
(1392, 'Mensaje de error', 963, 0, 0, ''),
(1393, 'Mensaje de error', 972, 0, 0, ''),
(1394, 'Mensaje de error', 975, 0, 0, ''),
(1395, 'Mensaje de error', 990, 0, 0, ''),
(1396, 'Mensaje de error', 1038, 0, 0, ''),
(1397, 'Mensaje de error', 1065, 0, 0, ''),
(1398, 'Mensaje de error', 1074, 0, 0, ''),
(1399, 'Mensaje de error', 1109, 0, 0, ''),
(1400, 'Mensaje de error', 1118, 0, 0, ''),
(1401, 'Mensaje de error', 182, 0, 0, ''),
(1402, 'Mensaje de error', 196, 0, 0, ''),
(1403, 'Mensaje de error', 248, 0, 0, ''),
(1404, 'Mensaje de error', 259, 0, 0, ''),
(1405, 'Mensaje de error', 273, 0, 0, ''),
(1406, 'Mensaje de error', 329, 0, 0, ''),
(1407, 'Mensaje de error', 335, 0, 0, ''),
(1408, 'Mensaje de error', 398, 0, 0, ''),
(1409, 'Mensaje de error', 420, 0, 0, ''),
(1410, 'Mensaje de error', 433, 0, 0, ''),
(1411, 'Mensaje de error', 465, 0, 0, ''),
(1412, 'Mensaje de error', 471, 0, 0, ''),
(1413, 'Mensaje de error', 491, 0, 0, ''),
(1414, 'Mensaje de error', 603, 0, 0, ''),
(1415, 'Mensaje de error', 615, 0, 0, ''),
(1416, 'Mensaje de error', 616, 0, 0, ''),
(1417, 'Mensaje de error', 675, 0, 0, ''),
(1418, 'Mensaje de error', 736, 0, 0, ''),
(1419, 'Mensaje de error', 766, 0, 0, ''),
(1420, 'Mensaje de error', 783, 0, 0, ''),
(1421, 'Mensaje de error', 785, 0, 0, ''),
(1422, 'Mensaje de error', 835, 0, 0, ''),
(1423, 'Mensaje de error', 856, 0, 0, ''),
(1424, 'Mensaje de error', 858, 0, 0, ''),
(1425, 'Mensaje de error', 879, 0, 0, ''),
(1426, 'Mensaje de error', 936, 0, 0, ''),
(1427, 'Mensaje de error', 1018, 0, 0, ''),
(1428, 'Mensaje de error', 1067, 0, 0, ''),
(1429, 'Mensaje de error', 1081, 0, 0, ''),
(1430, 'Mensaje de error', 1083, 0, 0, ''),
(1431, 'Configuración nueva sucursal', 1032, 0, 0, ''),
(1432, 'Tarjetas de autorización', 1032, 0, 0, ''),
(1433, 'Usuarios', 1032, 0, 0, ''),
(1434, 'Mensaje de error', 169, 0, 0, ''),
(1435, 'Mensaje de error', 199, 0, 0, ''),
(1436, 'Mensaje de error', 258, 0, 0, ''),
(1437, 'Mensaje de error', 263, 0, 0, ''),
(1438, 'Mensaje de error', 264, 0, 0, ''),
(1439, 'Mensaje de error', 363, 0, 0, ''),
(1440, 'Mensaje de error', 388, 0, 0, ''),
(1441, 'Mensaje de error', 403, 0, 0, ''),
(1442, 'Mensaje de error', 407, 0, 0, ''),
(1443, 'Mensaje de error', 423, 0, 0, ''),
(1444, 'Mensaje de error', 431, 0, 0, ''),
(1445, 'Mensaje de error', 496, 0, 0, ''),
(1446, 'Mensaje de error', 500, 0, 0, ''),
(1447, 'Mensaje de error', 593, 0, 0, ''),
(1448, 'Mensaje de error', 629, 0, 0, ''),
(1449, 'Mensaje de error', 638, 0, 0, ''),
(1450, 'Mensaje de error', 641, 0, 0, ''),
(1451, 'Mensaje de error', 695, 0, 0, ''),
(1452, 'Mensaje de error', 697, 0, 0, ''),
(1453, 'Mensaje de error', 712, 0, 0, ''),
(1454, 'Mensaje de error', 759, 0, 0, ''),
(1455, 'Mensaje de error', 768, 0, 0, ''),
(1456, 'Mensaje de error', 818, 0, 0, ''),
(1457, 'Mensaje de error', 831, 0, 0, ''),
(1458, 'Mensaje de error', 882, 0, 0, ''),
(1459, 'Mensaje de error', 907, 0, 0, ''),
(1460, 'Mensaje de error', 914, 0, 0, ''),
(1461, 'Mensaje de error', 927, 0, 0, ''),
(1462, 'Mensaje de error', 928, 0, 0, ''),
(1463, 'Mensaje de error', 929, 0, 0, ''),
(1464, 'Mensaje de error', 941, 0, 0, ''),
(1465, 'Mensaje de error', 942, 0, 0, ''),
(1466, 'Mensaje de error', 948, 0, 0, ''),
(1467, 'Mensaje de error', 949, 0, 0, ''),
(1468, 'Mensaje de error', 950, 0, 0, ''),
(1469, 'Mensaje de error', 951, 0, 0, ''),
(1470, 'Mensaje de error', 952, 0, 0, ''),
(1471, 'Mensaje de error', 953, 0, 0, ''),
(1472, 'Mensaje de error', 970, 0, 0, ''),
(1473, 'Mensaje de error', 1035, 0, 0, ''),
(1474, 'Mensaje de error', 1086, 0, 0, ''),
(1475, 'Mensaje de error', 1088, 0, 0, ''),
(1476, 'Mensaje de error', 514, 0, 0, ''),
(1477, 'No refleja información', 514, 0, 0, ''),
(1478, 'Mensaje de error', 644, 0, 0, ''),
(1479, 'No refleja información', 644, 0, 0, ''),
(1480, 'Mensaje de error', 683, 0, 0, ''),
(1481, 'No refleja información', 683, 0, 0, ''),
(1482, 'Mensaje de error', 819, 0, 0, ''),
(1483, 'Mensaje de error', 913, 0, 0, ''),
(1484, 'No refleja información', 913, 0, 0, ''),
(1485, 'Mensaje de error', 1031, 0, 0, ''),
(1486, 'Mensaje de error', 1098, 0, 0, ''),
(1487, 'Mensaje de error', 1099, 0, 0, ''),
(1488, 'Mensaje de error', 1100, 0, 0, ''),
(1489, 'Mensaje de error', 1121, 0, 0, ''),
(1490, 'Mensaje de error', 169, 0, 0, ''),
(1491, 'Mensaje de error', 344, 0, 0, ''),
(1492, 'Mensaje de error', 367, 0, 0, ''),
(1493, 'Mensaje de error', 383, 0, 0, ''),
(1494, 'Mensaje de error', 573, 0, 0, ''),
(1495, 'Mensaje de error', 585, 0, 0, ''),
(1496, 'Mensaje de error', 604, 0, 0, ''),
(1497, 'Mensaje de error', 614, 0, 0, ''),
(1498, 'Mensaje de error', 619, 0, 0, ''),
(1499, 'Mensaje de error', 620, 0, 0, ''),
(1500, 'Mensaje de error', 630, 0, 0, ''),
(1501, 'Mensaje de error', 696, 0, 0, ''),
(1502, 'Mensaje de error', 705, 0, 0, ''),
(1503, 'Mensaje de error', 758, 0, 0, ''),
(1504, 'Mensaje de error', 777, 0, 0, ''),
(1505, 'Mensaje de error', 865, 0, 0, ''),
(1506, 'Mensaje de error', 887, 0, 0, ''),
(1507, 'Mensaje de error', 916, 0, 0, ''),
(1508, 'Mensaje de error', 974, 0, 0, ''),
(1509, 'Mensaje de error', 977, 0, 0, ''),
(1510, 'Mensaje de error', 978, 0, 0, ''),
(1511, 'Mensaje de error', 1036, 0, 0, ''),
(1512, 'Mensaje de error', 1066, 0, 0, ''),
(1513, 'Mensaje de error', 1072, 0, 0, ''),
(1514, 'Mensaje de error', 1075, 0, 0, ''),
(1515, 'Mensaje de error', 1078, 0, 0, ''),
(1516, 'Mensaje de error', 1135, 0, 0, ''),
(1517, 'Bloqueado por otro usuario', 194, 0, 0, ''),
(1518, 'Mensaje de error', 194, 0, 0, ''),
(1519, 'No refleja información', 194, 0, 0, ''),
(1520, 'Mensaje de error', 385, 0, 0, ''),
(1521, 'Mensaje de error', 413, 0, 0, ''),
(1522, 'Mensaje de error', 415, 0, 0, ''),
(1523, 'Mensaje de error', 466, 0, 0, ''),
(1524, 'Mensaje de error', 751, 0, 0, ''),
(1525, 'No se imprimió nota', 751, 0, 0, ''),
(1526, 'Mensaje de error', 898, 0, 0, ''),
(1527, 'Mensaje de error', 906, 0, 0, ''),
(1528, 'Mensaje de error', 911, 0, 0, ''),
(1529, 'Mensaje de error', 923, 0, 0, ''),
(1530, 'Existen notas pendientes de timbrar', 924, 0, 0, ''),
(1531, 'Mensaje de error', 924, 0, 0, ''),
(1532, 'Mensaje de error', 925, 0, 0, ''),
(1533, 'Mensaje de error', 926, 0, 0, ''),
(1534, 'Mensaje de error', 1076, 0, 0, ''),
(1535, 'Datos incorrectos', 1112, 0, 0, ''),
(1536, 'Entrada mal procesada desde sucursal', 1112, 0, 0, ''),
(1537, 'Mensaje de error', 1112, 0, 0, ''),
(1538, 'Mensaje de error', 1113, 0, 0, ''),
(1539, 'Mensaje de error', 219, 0, 0, ''),
(1540, 'Mensaje de error', 237, 0, 0, ''),
(1541, 'Mensaje de error', 245, 0, 0, ''),
(1542, 'Mensaje de error', 308, 0, 0, ''),
(1543, 'Mensaje de error', 331, 0, 0, ''),
(1544, 'Mensaje de error', 373, 0, 0, ''),
(1545, 'Mensaje de error', 386, 0, 0, ''),
(1546, 'Mensaje de error', 451, 0, 0, ''),
(1547, 'Información incorrecta', 462, 0, 0, ''),
(1548, 'Mensaje de error', 462, 0, 0, ''),
(1549, 'No refleja información', 462, 0, 0, ''),
(1550, 'Pago no se refleja en factura', 462, 0, 0, ''),
(1551, 'Saldos incorrectos', 462, 0, 0, ''),
(1552, 'Mensaje de error', 505, 0, 0, ''),
(1553, 'Mensaje de error', 576, 0, 0, ''),
(1554, 'Mensaje de error', 634, 0, 0, ''),
(1555, 'Información incorrecta', 645, 0, 0, ''),
(1556, 'Mensaje de error', 645, 0, 0, ''),
(1557, 'No refleja información', 645, 0, 0, ''),
(1558, 'Mensaje de error', 707, 0, 0, ''),
(1559, 'Mensaje de error', 734, 0, 0, ''),
(1560, 'Mensaje de error', 735, 0, 0, ''),
(1561, 'Mensaje de error', 743, 0, 0, ''),
(1562, 'No llega correo', 743, 0, 0, ''),
(1563, 'Mensaje de error', 782, 0, 0, ''),
(1564, 'Mensaje de error', 829, 0, 0, ''),
(1565, 'Mensaje de error', 864, 0, 0, ''),
(1566, 'Mensaje de error', 901, 0, 0, ''),
(1567, 'Mensaje de error', 905, 0, 0, ''),
(1568, 'Mensaje de error', 915, 0, 0, ''),
(1569, 'Mensaje de error', 932, 0, 0, ''),
(1570, 'Mensaje de error', 957, 0, 0, ''),
(1571, 'Mensaje de error', 959, 0, 0, ''),
(1572, 'Mensaje de error', 967, 0, 0, ''),
(1573, 'Información incorrecta', 984, 0, 0, ''),
(1574, 'Mensaje de error', 984, 0, 0, ''),
(1575, 'Mensaje de error', 985, 0, 0, ''),
(1576, 'Mensaje de error', 986, 0, 0, ''),
(1577, 'Mensaje de error', 1063, 0, 0, ''),
(1578, 'Mensaje de error', 1069, 0, 0, ''),
(1579, 'Mensaje de error', 1079, 0, 0, ''),
(1580, 'Mensaje de error', 1080, 0, 0, ''),
(1581, 'Mensaje de error', 1134, 0, 0, ''),
(1582, 'Mensaje de error', 309, 0, 0, ''),
(1583, 'Mensaje de error', 768, 0, 0, ''),
(1584, 'Mensaje de error', 209, 0, 0, ''),
(1585, 'Mensaje de error', 280, 0, 0, ''),
(1586, 'Mensaje de error', 281, 0, 0, ''),
(1587, 'Mensaje de error', 285, 0, 0, ''),
(1588, 'Mensaje de error', 654, 0, 0, ''),
(1589, 'Mensaje de error', 897, 0, 0, ''),
(1590, 'Mensaje de error', 368, 0, 0, ''),
(1591, 'Mensaje de error', 369, 0, 0, ''),
(1592, 'Mensaje de error', 379, 0, 0, ''),
(1593, 'Mensaje de error', 380, 0, 0, ''),
(1594, 'Mensaje de error', 381, 0, 0, ''),
(1595, 'Mensaje de error', 575, 0, 0, ''),
(1596, 'Mensaje de error', 651, 0, 0, ''),
(1597, 'Mensaje de error', 830, 0, 0, ''),
(1598, 'Mensaje de error', 893, 0, 0, ''),
(1599, 'Mensaje de error', 1001, 0, 0, ''),
(1600, 'Mensaje de error', 1106, 0, 0, ''),
(1601, 'Mensaje de error', 193, 0, 0, ''),
(1602, 'Mensaje de error', 317, 0, 0, ''),
(1603, 'Mensaje de error', 345, 0, 0, ''),
(1604, 'Mensaje de error', 396, 0, 0, ''),
(1605, 'Mensaje de error', 669, 0, 0, ''),
(1606, 'Mensaje de error', 693, 0, 0, ''),
(1607, 'Mensaje de error', 706, 0, 0, ''),
(1608, 'Mensaje de error', 712, 0, 0, ''),
(1609, 'Mensaje de error', 827, 0, 0, ''),
(1610, 'Mensaje de error', 834, 0, 0, ''),
(1611, 'Mensaje de error', 1071, 0, 0, ''),
(1612, 'Mensaje de error', 1114, 0, 0, ''),
(1613, 'Mensaje de error', 1126, 0, 0, ''),
(1614, 'Mensaje de error', 206, 0, 0, ''),
(1615, 'Mensaje de error', 308, 0, 0, ''),
(1616, 'Mensaje de error', 419, 0, 0, ''),
(1617, 'Mensaje de error', 510, 0, 0, ''),
(1618, 'Mensaje de error', 625, 0, 0, ''),
(1619, 'Mensaje de error', 672, 0, 0, ''),
(1620, 'Mensaje de error', 704, 0, 0, ''),
(1621, 'Mensaje de error', 808, 0, 0, ''),
(1622, 'Mensaje de error', 847, 0, 0, ''),
(1623, 'Mensaje de error', 883, 0, 0, ''),
(1624, 'No refleja información', 883, 0, 0, ''),
(1625, 'Mensaje de error', 884, 0, 0, ''),
(1626, 'No refleja información', 884, 0, 0, ''),
(1627, 'No refleja información', 886, 0, 0, ''),
(1628, 'Mensaje de error', 889, 0, 0, ''),
(1629, 'No refleja información', 889, 0, 0, ''),
(1630, 'Mensaje de error', 892, 0, 0, ''),
(1631, 'No refleja información', 892, 0, 0, ''),
(1632, 'Mensaje de error', 893, 0, 0, ''),
(1633, 'No refleja información', 893, 0, 0, ''),
(1634, 'Mensaje de error', 894, 0, 0, ''),
(1635, 'No refleja información', 894, 0, 0, ''),
(1636, 'Mensaje de error', 895, 0, 0, ''),
(1637, 'No refleja información', 895, 0, 0, ''),
(1638, 'Mensaje de error', 903, 0, 0, ''),
(1639, 'No refleja información', 903, 0, 0, ''),
(1640, 'Mensaje de error', 964, 0, 0, ''),
(1641, 'Mensaje de error', 976, 0, 0, ''),
(1642, 'No refleja información', 976, 0, 0, ''),
(1643, 'Mensaje de error', 1077, 0, 0, ''),
(1644, 'Mensaje de error', 174, 0, 0, ''),
(1645, 'No refleja información', 174, 0, 0, ''),
(1646, 'Mensaje de error', 401, 0, 0, ''),
(1647, 'Mensaje de error', 411, 0, 0, ''),
(1648, 'No refleja información', 411, 0, 0, ''),
(1649, 'Mensaje de error', 455, 0, 0, ''),
(1650, 'Mensaje de error', 570, 0, 0, ''),
(1651, 'No refleja información', 570, 0, 0, ''),
(1652, 'Mensaje de error', 581, 0, 0, ''),
(1653, 'No refleja información', 581, 0, 0, ''),
(1654, 'Mensaje de error', 681, 0, 0, ''),
(1655, 'No refleja información', 681, 0, 0, ''),
(1656, 'Mensaje de error', 713, 0, 0, ''),
(1657, 'No refleja información', 713, 0, 0, ''),
(1658, 'Mensaje de error', 890, 0, 0, ''),
(1659, 'No refleja información', 890, 0, 0, ''),
(1660, 'Mensaje de error', 917, 0, 0, ''),
(1661, 'No refleja información', 917, 0, 0, ''),
(1662, 'Mensaje de error', 971, 0, 0, ''),
(1663, 'No refleja información', 971, 0, 0, ''),
(1664, 'Mensaje de error', 1121, 0, 0, ''),
(1665, 'No refleja información', 1121, 0, 0, ''),
(1666, 'Mensaje de error', 170, 0, 0, ''),
(1667, 'Mensaje de error', 195, 0, 0, ''),
(1668, 'Mensaje de error', 255, 0, 0, ''),
(1669, 'Mensaje de error', 306, 0, 0, ''),
(1670, 'Mensaje de error', 315, 0, 0, ''),
(1671, 'Mensaje de error', 343, 0, 0, ''),
(1672, 'Mensaje de error', 344, 0, 0, ''),
(1673, 'Mensaje de error', 370, 0, 0, ''),
(1674, 'Mensaje de error', 390, 0, 0, ''),
(1675, 'Mensaje de error', 399, 0, 0, ''),
(1676, 'Mensaje de error', 412, 0, 0, ''),
(1677, 'Mensaje de error', 416, 0, 0, ''),
(1678, 'Mensaje de error', 426, 0, 0, ''),
(1679, 'Mensaje de error', 427, 0, 0, ''),
(1680, 'Mensaje de error', 446, 0, 0, ''),
(1681, 'Mensaje de error', 448, 0, 0, ''),
(1682, 'Mensaje de error', 460, 0, 0, ''),
(1683, 'Mensaje de error', 568, 0, 0, ''),
(1684, 'Mensaje de error', 573, 0, 0, ''),
(1685, 'Mensaje de error', 594, 0, 0, ''),
(1686, 'Mensaje de error', 710, 0, 0, ''),
(1687, 'Mensaje de error', 777, 0, 0, ''),
(1688, 'Mensaje de error', 828, 0, 0, ''),
(1689, 'Mensaje de error', 995, 0, 0, ''),
(1690, 'Mensaje de error', 1038, 0, 0, ''),
(1691, 'Mensaje de error', 1082, 0, 0, ''),
(1692, 'Mensaje de error', 1105, 0, 0, ''),
(1693, 'Mensaje de error', 176, 0, 0, ''),
(1694, 'Mensaje de error', 223, 0, 0, ''),
(1695, 'Mensaje de error', 224, 0, 0, ''),
(1696, 'Mensaje de error', 225, 0, 0, ''),
(1697, 'Mensaje de error', 235, 0, 0, ''),
(1698, 'Mensaje de error', 236, 0, 0, ''),
(1699, 'Mensaje de error', 307, 0, 0, ''),
(1700, 'Mensaje de error', 336, 0, 0, ''),
(1701, 'Mensaje de error', 340, 0, 0, ''),
(1702, 'Mensaje de error', 341, 0, 0, ''),
(1703, 'Mensaje de error', 342, 0, 0, ''),
(1704, 'Mensaje de error', 397, 0, 0, ''),
(1705, 'Mensaje de error', 400, 0, 0, ''),
(1706, 'Mensaje de error', 442, 0, 0, ''),
(1707, 'Mensaje de error', 443, 0, 0, ''),
(1708, 'Mensaje de error', 444, 0, 0, ''),
(1709, 'Mensaje de error', 445, 0, 0, ''),
(1710, 'Mensaje de error', 447, 0, 0, ''),
(1711, 'Mensaje de error', 449, 0, 0, ''),
(1712, 'Mensaje de error', 452, 0, 0, ''),
(1713, 'Mensaje de error', 454, 0, 0, ''),
(1714, 'Mensaje de error', 459, 0, 0, ''),
(1715, 'Mensaje de error', 480, 0, 0, ''),
(1716, 'Mensaje de error', 564, 0, 0, ''),
(1717, 'Mensaje de error', 590, 0, 0, ''),
(1718, 'Mensaje de error', 595, 0, 0, ''),
(1719, 'Mensaje de error', 605, 0, 0, ''),
(1720, 'Mensaje de error', 610, 0, 0, ''),
(1721, 'Mensaje de error', 695, 0, 0, ''),
(1722, 'Mensaje de error', 698, 0, 0, ''),
(1723, 'Mensaje de error', 717, 0, 0, ''),
(1724, 'Mensaje de error', 744, 0, 0, ''),
(1725, 'Mensaje de error', 806, 0, 0, ''),
(1726, 'Mensaje de error', 853, 0, 0, ''),
(1727, 'Mensaje de error', 880, 0, 0, ''),
(1728, 'Mensaje de error', 881, 0, 0, ''),
(1729, 'Mensaje de error', 1004, 0, 0, ''),
(1730, 'Mensaje de error', 1044, 0, 0, ''),
(1731, 'Mensaje de error', 1057, 0, 0, ''),
(1732, 'Mensaje de error', 1070, 0, 0, ''),
(1733, 'Mensaje de error', 1091, 0, 0, ''),
(1734, 'Mensaje de error', 1096, 0, 0, ''),
(1735, 'Mensaje de error', 1114, 0, 0, ''),
(1736, 'Mensaje de error', 1133, 0, 0, ''),
(1737, 'Mensaje de error', 586, 0, 0, ''),
(1738, 'No aparece el pedido', 586, 0, 0, ''),
(1739, 'No se puede dar de alta el cliente', 586, 0, 0, ''),
(1740, 'No se puede timbrar', 586, 0, 0, ''),
(1741, 'No imprime el reporte', 161, 0, 0, ''),
(1742, 'Error al transferir', 210, 0, 0, ''),
(1743, 'Mensaje de error', 210, 0, 0, ''),
(1744, 'No imprime el reporte', 210, 0, 0, ''),
(1745, 'Mensaje de error', 260, 0, 0, ''),
(1746, 'Mensaje de error', 271, 0, 0, ''),
(1747, 'Mensaje de error', 280, 0, 0, ''),
(1748, 'No muestra la quincena correcta', 280, 0, 0, ''),
(1749, 'Mensaje de error', 281, 0, 0, ''),
(1750, 'No muestra la quincena correcta', 281, 0, 0, ''),
(1751, 'Mensaje de error', 285, 0, 0, ''),
(1752, 'No muestra la quincena correcta', 285, 0, 0, ''),
(1753, 'Mensaje de error', 365, 0, 0, ''),
(1754, 'Mensaje de error', 461, 0, 0, ''),
(1755, 'Mensaje de error', 472, 0, 0, ''),
(1756, 'Mensaje de error', 499, 0, 0, ''),
(1757, 'Mensaje de error', 503, 0, 0, ''),
(1758, 'Mensaje de error', 589, 0, 0, ''),
(1759, 'No pueden cambiar la entidad', 589, 0, 0, ''),
(1760, 'Diferencia en desglose', 597, 0, 0, ''),
(1761, 'Mensaje de error', 597, 0, 0, ''),
(1762, 'Mensaje de error', 654, 0, 0, ''),
(1763, 'No imprime', 654, 0, 0, ''),
(1764, 'Mensaje de error', 800, 0, 0, ''),
(1765, 'No cuadra la póliza', 800, 0, 0, ''),
(1766, 'Mensaje de error', 860, 0, 0, ''),
(1767, 'No genera el reporte', 860, 0, 0, ''),
(1768, 'Mensaje de error', 861, 0, 0, ''),
(1769, 'Mensaje de error', 868, 0, 0, ''),
(1770, 'No imprime', 868, 0, 0, ''),
(1771, 'Mensaje de error', 934, 0, 0, ''),
(1772, 'Mensaje de error', 938, 0, 0, ''),
(1773, 'No genera el reporte', 938, 0, 0, ''),
(1774, 'Mensaje de error', 965, 0, 0, ''),
(1775, 'Mensaje de error', 1073, 0, 0, ''),
(1776, 'No se puede transferir', 1073, 0, 0, ''),
(1777, 'Mensaje de error', 1120, 0, 0, ''),
(1778, 'Mensaje de error', 318, 0, 0, ''),
(1779, 'No imprime', 318, 0, 0, ''),
(1780, 'Precio incorrecto', 318, 0, 0, ''),
(1781, 'Mensaje de error', 319, 0, 0, ''),
(1782, 'No imprime', 319, 0, 0, ''),
(1783, 'Precio incorrecto', 319, 0, 0, ''),
(1784, 'Mensaje de error', 320, 0, 0, ''),
(1785, 'No imprime', 320, 0, 0, ''),
(1786, 'Precio incorrecto', 320, 0, 0, ''),
(1787, 'Mensaje de error', 321, 0, 0, ''),
(1788, 'No imprime', 321, 0, 0, ''),
(1789, 'Precio incorrecto', 321, 0, 0, ''),
(1790, 'Impresión desfazada', 655, 0, 0, ''),
(1791, 'Mensaje de error', 655, 0, 0, ''),
(1792, 'No imprime', 655, 0, 0, ''),
(1793, 'Precio incorrecto', 655, 0, 0, ''),
(1794, 'Mensaje de error', 192, 0, 0, ''),
(1795, 'No imprime ticket', 192, 0, 0, ''),
(1796, 'Mensaje de error', 266, 0, 0, ''),
(1797, 'No imprime ticket', 266, 0, 0, ''),
(1798, 'Mensaje de error', 267, 0, 0, ''),
(1799, 'No imprime ticket', 267, 0, 0, ''),
(1800, 'Mensaje de error', 268, 0, 0, ''),
(1801, 'No imprime ticket', 268, 0, 0, ''),
(1802, 'Mensaje de error', 269, 0, 0, ''),
(1803, 'No imprime ticket', 269, 0, 0, ''),
(1804, 'Mensaje de error', 270, 0, 0, ''),
(1805, 'No imprime ticket', 270, 0, 0, ''),
(1806, 'Mensaje de error', 350, 0, 0, ''),
(1807, 'No imprime ticket', 350, 0, 0, ''),
(1808, 'Mensaje de error', 351, 0, 0, ''),
(1809, 'No imprime  voucher', 351, 0, 0, ''),
(1810, 'No imprime tickte de venta', 351, 0, 0, ''),
(1811, 'Mensaje de error', 352, 0, 0, ''),
(1812, 'No imprime ticket', 352, 0, 0, ''),
(1813, 'Mensaje de error', 353, 0, 0, ''),
(1814, 'No imprime  voucher', 353, 0, 0, ''),
(1815, 'No imprime tickte de venta', 353, 0, 0, ''),
(1816, 'Mensaje de error', 354, 0, 0, ''),
(1817, 'No imprime ticket', 354, 0, 0, ''),
(1818, 'Mensaje de error', 355, 0, 0, ''),
(1819, 'No imprime ticket', 355, 0, 0, ''),
(1820, 'Mensaje de error', 356, 0, 0, ''),
(1821, 'No imprime  voucher', 356, 0, 0, ''),
(1822, 'No imprime tickte de venta', 356, 0, 0, ''),
(1823, 'Mensaje de error', 357, 0, 0, ''),
(1824, 'No imprime  voucher', 357, 0, 0, ''),
(1825, 'No imprime tickte de venta', 357, 0, 0, ''),
(1826, 'Mensaje de error', 358, 0, 0, ''),
(1827, 'No imprime  voucher', 358, 0, 0, ''),
(1828, 'No imprime tickte de venta', 358, 0, 0, ''),
(1829, 'Error de operación', 359, 0, 0, ''),
(1830, 'Mensaje de error', 359, 0, 0, ''),
(1831, 'No afecto el pago a las facturas', 359, 0, 0, ''),
(1832, 'Mensaje de error', 360, 0, 0, ''),
(1833, 'No imprime  voucher', 360, 0, 0, ''),
(1834, 'No imprime tickte de venta', 360, 0, 0, ''),
(1835, 'Mensaje de error', 361, 0, 0, ''),
(1836, 'No imprime ticket', 361, 0, 0, ''),
(1837, 'Mensaje de error', 362, 0, 0, ''),
(1838, 'No imprime ticket', 362, 0, 0, ''),
(1839, 'Mensaje de error', 479, 0, 0, ''),
(1840, 'No imprime ticket', 479, 0, 0, ''),
(1841, 'Mensaje de error', 861, 0, 0, ''),
(1842, 'No imprime ticket', 861, 0, 0, ''),
(1843, 'No encuentra el PDF', 870, 0, 0, ''),
(1844, 'No imprime ticket', 870, 0, 0, ''),
(1845, 'Mensaje de error', 328, 0, 0, ''),
(1846, 'No existe código de barras', 328, 0, 0, ''),
(1847, 'No imprime lista', 328, 0, 0, ''),
(1848, 'Gasto Bloqueado', 467, 0, 0, ''),
(1849, 'Mensaje de error', 467, 0, 0, ''),
(1850, 'No imprime', 467, 0, 0, ''),
(1851, 'UUID no valido', 467, 0, 0, ''),
(1852, 'Mensaje de error', 180, 0, 0, ''),
(1853, 'No refleja información', 180, 0, 0, ''),
(1854, 'Mensaje de error', 308, 0, 0, ''),
(1855, 'No refleja información', 308, 0, 0, ''),
(1856, 'Mensaje de error', 347, 0, 0, ''),
(1857, 'No aparece la factura', 347, 0, 0, ''),
(1858, 'Pago no reflejado en factura', 347, 0, 0, ''),
(1859, 'Saldos incorrectos', 347, 0, 0, ''),
(1860, 'Mensaje de error', 425, 0, 0, ''),
(1861, 'Mensaje de error', 541, 0, 0, ''),
(1862, 'No refleja información', 541, 0, 0, ''),
(1863, 'Mensaje de error', 571, 0, 0, ''),
(1864, 'No refleja información', 571, 0, 0, ''),
(1865, 'Mensaje de error', 647, 0, 0, ''),
(1866, 'No refleja información', 647, 0, 0, ''),
(1867, 'Mensaje de error', 774, 0, 0, ''),
(1868, 'Mensaje de error', 775, 0, 0, ''),
(1869, 'Mensaje de error', 857, 0, 0, ''),
(1870, 'Mensaje de error', 872, 0, 0, ''),
(1871, 'No muestra las facturas', 872, 0, 0, ''),
(1872, 'Mensaje de error', 902, 0, 0, ''),
(1873, 'No refleja información', 902, 0, 0, ''),
(1874, 'Mensaje de error', 915, 0, 0, ''),
(1875, 'No refleja información', 915, 0, 0, ''),
(1876, 'Mensaje de error', 933, 0, 0, ''),
(1877, 'No refleja información', 933, 0, 0, ''),
(1878, 'Mensaje de error', 935, 0, 0, ''),
(1879, 'No refleja información', 935, 0, 0, ''),
(1880, 'Mensaje de error', 958, 0, 0, ''),
(1881, 'No refleja información', 958, 0, 0, ''),
(1882, 'Mensaje de error', 173, 0, 0, ''),
(1883, 'No refleja información', 173, 0, 0, ''),
(1884, 'Mensaje de error', 186, 0, 0, ''),
(1885, 'Mensaje de error', 310, 0, 0, ''),
(1886, 'Mensaje de error', 311, 0, 0, ''),
(1887, 'Mensaje de error', 312, 0, 0, ''),
(1888, 'Mensaje de error', 313, 0, 0, ''),
(1889, 'Mensaje de error', 327, 0, 0, ''),
(1890, 'Mensaje de error', 394, 0, 0, ''),
(1891, 'Mensaje de error', 432, 0, 0, ''),
(1892, 'Mensaje de error', 453, 0, 0, ''),
(1893, 'Mensaje de error', 456, 0, 0, ''),
(1894, 'Mensaje de error', 463, 0, 0, ''),
(1895, 'Kilometraje incorrecto', 472, 0, 0, ''),
(1896, 'Mensaje de error', 472, 0, 0, ''),
(1897, 'No aparece el vehículo', 472, 0, 0, ''),
(1898, 'Mensaje de error', 537, 0, 0, ''),
(1899, 'No aparece la devolución a proveedor', 537, 0, 0, ''),
(1900, 'No imprime la entrada por devolución a proveedor', 537, 0, 0, ''),
(1901, 'Mensaje de error', 538, 0, 0, ''),
(1902, 'No existe la salida por traspaso', 538, 0, 0, ''),
(1903, 'No imprime la entrada por traspaso', 538, 0, 0, ''),
(1904, 'Mensaje de error', 539, 0, 0, ''),
(1905, 'Mensaje de error', 540, 0, 0, ''),
(1906, 'No existe el pedido', 540, 0, 0, ''),
(1907, 'No existen los productos del pedido', 540, 0, 0, ''),
(1908, 'Mensaje de error', 577, 0, 0, ''),
(1909, 'Mensaje de error', 690, 0, 0, ''),
(1910, 'No refleja información', 690, 0, 0, ''),
(1911, 'Mensaje de error', 692, 0, 0, ''),
(1912, 'No refleja información', 692, 0, 0, ''),
(1913, 'Mensaje de error', 702, 0, 0, ''),
(1914, 'Mensaje de error', 764, 0, 0, ''),
(1915, 'Mensaje de error', 869, 0, 0, ''),
(1916, 'Mensaje de error', 875, 0, 0, ''),
(1917, 'No imprime la relación', 875, 0, 0, ''),
(1918, 'Mensaje de error', 878, 0, 0, ''),
(1919, 'No imprime la relación de salida', 878, 0, 0, ''),
(1920, 'Mensaje de error', 896, 0, 0, ''),
(1921, 'No refleja información', 896, 0, 0, ''),
(1922, 'Mensaje de error', 908, 0, 0, ''),
(1923, 'No refleja información', 908, 0, 0, ''),
(1924, 'Mensaje de error', 910, 0, 0, ''),
(1925, 'Mensaje de error', 937, 0, 0, ''),
(1926, 'No refleja información', 937, 0, 0, ''),
(1927, 'Mensaje de error', 971, 0, 0, ''),
(1928, 'Mensaje de error', 973, 0, 0, ''),
(1929, 'Mensaje de error', 982, 0, 0, ''),
(1930, 'Mensaje de error', 1006, 0, 0, ''),
(1931, 'No existe la orden de devolución', 1006, 0, 0, ''),
(1932, 'No imprime la salida por devolución', 1006, 0, 0, ''),
(1933, 'Mensaje de error', 1007, 0, 0, ''),
(1934, 'No existe la requisión', 1007, 0, 0, ''),
(1935, 'No imprime la salida por traspaso', 1007, 0, 0, ''),
(1936, 'Mensaje de error', 1027, 0, 0, ''),
(1937, 'Mensaje de error', 1033, 0, 0, ''),
(1938, 'Instalar programas', 1055, 0, 0, ''),
(1939, 'Mensaje de error', 1055, 0, 0, ''),
(1940, 'No escanea', 1055, 0, 0, ''),
(1941, 'Mensaje de error', 1094, 0, 0, ''),
(1942, 'Mensaje de error', 1097, 0, 0, ''),
(1943, 'Mensaje  de saldos vencidos', 279, 0, 0, ''),
(1944, 'Mensaje de error', 279, 0, 0, ''),
(1945, 'No imprime nota de venta', 279, 0, 0, ''),
(1946, 'Mensaje de error', 296, 0, 0, ''),
(1947, 'No imprime nota de venta', 296, 0, 0, ''),
(1948, 'Mensaje de error', 297, 0, 0, ''),
(1949, 'No imprime nota de venta', 297, 0, 0, ''),
(1950, 'Mensaje de error', 298, 0, 0, ''),
(1951, 'No imprime nota de venta', 298, 0, 0, ''),
(1952, 'Mensaje de error', 299, 0, 0, ''),
(1953, 'No imprime nota de venta', 299, 0, 0, ''),
(1954, 'Mensaje de error', 426, 0, 0, ''),
(1955, 'Mensaje de error', 440, 0, 0, ''),
(1956, 'Mensaje de error', 469, 0, 0, ''),
(1957, 'Mensaje de error', 483, 0, 0, ''),
(1958, 'Mensaje de error', 646, 0, 0, ''),
(1959, 'Mensaje de error', 656, 0, 0, ''),
(1960, 'Mensaje de error', 880, 0, 0, ''),
(1961, 'No deja relacionar facturas', 880, 0, 0, ''),
(1962, 'Mensaje de error', 943, 0, 0, ''),
(1963, 'Mensaje de error', 944, 0, 0, ''),
(1964, 'Mensaje de error', 945, 0, 0, ''),
(1965, 'Mensaje de error', 947, 0, 0, ''),
(1966, 'Mensaje de error', 731, 0, 0, ''),
(1967, 'No imprime el ticket', 731, 0, 0, ''),
(1968, 'Mensaje de error', 732, 0, 0, ''),
(1969, 'No imprime el ticket', 732, 0, 0, ''),
(1970, 'Mensaje de error', 1116, 0, 0, ''),
(1971, 'No imprime el ticket', 1116, 0, 0, ''),
(1972, 'Mensaje de error', 347, 0, 0, ''),
(1973, 'Mensaje de error', 478, 0, 0, ''),
(1974, 'No imprime el ticket', 478, 0, 0, ''),
(1975, 'Mensaje de error', 481, 0, 0, ''),
(1976, 'No imprime el ticket', 481, 0, 0, ''),
(1977, 'Mensaje de error', 507, 0, 0, ''),
(1978, 'No imprime el ticket', 507, 0, 0, ''),
(1979, 'Mensaje de error', 508, 0, 0, ''),
(1980, 'No imprime el ticket', 508, 0, 0, ''),
(1981, 'Mensaje de error', 587, 0, 0, ''),
(1982, 'No imprime el ticket', 587, 0, 0, ''),
(1983, 'Mensaje de error', 588, 0, 0, ''),
(1984, 'No imprime factura', 588, 0, 0, ''),
(1985, 'Mensaje de error', 870, 0, 0, ''),
(1986, 'No encuentra el PDF', 870, 0, 0, ''),
(1987, 'Mensaje de error', 1056, 0, 0, ''),
(1988, 'Mensaje de error', 185, 0, 0, ''),
(1989, 'No imprime el reporte', 185, 0, 0, ''),
(1990, 'Mensaje de error', 421, 0, 0, ''),
(1991, 'No refleja información', 421, 0, 0, ''),
(1992, 'Mensaje de error', 422, 0, 0, ''),
(1993, 'No refleja información', 422, 0, 0, ''),
(1994, 'Mensaje de error', 657, 0, 0, ''),
(1995, 'Mensaje de error', 689, 0, 0, ''),
(1996, 'Mensaje de error', 750, 0, 0, ''),
(1997, 'Mensaje de error', 753, 0, 0, ''),
(1998, 'Mensaje de error', 793, 0, 0, ''),
(1999, 'No refleja información', 793, 0, 0, ''),
(2000, 'Mensaje de error', 888, 0, 0, ''),
(2001, 'No refleja información', 888, 0, 0, ''),
(2002, 'Mensaje de error', 891, 0, 0, ''),
(2003, 'No refleja información', 891, 0, 0, ''),
(2004, 'Mensaje de error', 904, 0, 0, ''),
(2005, 'No refleja información', 904, 0, 0, ''),
(2006, 'Mensaje de error', 912, 0, 0, ''),
(2007, 'No refleja información', 912, 0, 0, ''),
(2008, 'Mensaje de error', 918, 0, 0, ''),
(2009, 'Mensaje de error', 920, 0, 0, ''),
(2010, 'No refleja información', 920, 0, 0, ''),
(2011, 'Mensaje de error', 931, 0, 0, ''),
(2012, 'No refleja información', 931, 0, 0, ''),
(2013, 'Mensaje de error', 937, 0, 0, ''),
(2014, 'No refleja información', 937, 0, 0, ''),
(2015, 'Mensaje de error', 939, 0, 0, ''),
(2016, 'No refleja información', 939, 0, 0, ''),
(2017, 'Mensaje de error', 961, 0, 0, ''),
(2018, 'No refleja información', 961, 0, 0, ''),
(2019, 'Mensaje de error', 962, 0, 0, ''),
(2020, 'No refleja información', 962, 0, 0, ''),
(2021, 'Mensaje de error', 1115, 0, 0, ''),
(2022, 'Mensaje de error', 163, 0, 0, ''),
(2023, 'No aparece un producto', 287, 0, 0, ''),
(2024, 'No imprime', 287, 0, 0, ''),
(2025, 'Mensaje de error', 426, 0, 0, ''),
(2026, 'Mensaje de error', 542, 0, 0, ''),
(2027, 'Mensaje de error', 701, 0, 0, ''),
(2028, 'Mensaje de error', 859, 0, 0, ''),
(2029, 'No imprime', 870, 0, 0, ''),
(2030, 'Mensaje de error', 287, 0, 0, ''),
(2031, 'Mensaje de error', 288, 0, 0, ''),
(2032, 'Mensaje de error', 426, 0, 0, ''),
(2033, 'Mensaje de error', 483, 0, 0, ''),
(2034, 'No enciende', 1125, 0, 0, ''),
(2035, 'Precio incorrecto', 1125, 0, 0, ''),
(2036, 'Instalacion', 375, 0, 0, ''),
(2037, 'Instalacion', 464, 0, 0, ''),
(2038, 'Instalacion', 599, 0, 0, ''),
(2039, 'Instalacion', 622, 0, 0, ''),
(2040, 'Instalación', 688, 0, 0, ''),
(2041, 'Instalacion', 748, 0, 0, ''),
(2042, 'Instalacion', 812, 0, 0, ''),
(2043, 'Instalacion', 464, 0, 0, ''),
(2044, 'Instalacion', 599, 0, 0, ''),
(2045, 'Instalacion', 1012, 0, 0, ''),
(2046, 'Instalacion', 1019, 0, 0, ''),
(2047, 'Instalacion', 1020, 0, 0, ''),
(2048, 'Instalacion', 1023, 0, 0, ''),
(2049, 'Instalacion', 1024, 0, 0, ''),
(2050, 'Instalacion', 1111, 0, 0, ''),
(2051, 'Instalacion', 1119, 0, 0, ''),
(2052, 'Alta de usuario', 246, 0, 0, ''),
(2053, 'Alta de usuario', 375, 0, 0, ''),
(2054, 'Alta de usuario', 464, 0, 0, ''),
(2055, 'Asignación de sucursales', 464, 0, 0, ''),
(2056, 'Alta de usuario', 486, 0, 0, ''),
(2057, 'Alta de usuario', 599, 0, 0, ''),
(2058, 'Asignación de sucursales', 599, 0, 0, ''),
(2059, 'Alta de usuario', 615, 0, 0, ''),
(2060, 'Usuarios', 688, 0, 0, ''),
(2061, 'Crear nueva sucursal', 688, 0, 0, ''),
(2062, 'Alta de usuario', 716, 0, 0, ''),
(2063, 'Alta de usuario', 748, 0, 0, ''),
(2064, 'Alta de usuario', 812, 0, 0, ''),
(2065, 'Alta de usuario', 1012, 0, 0, ''),
(2066, 'Alta de usuario', 1028, 0, 0, ''),
(2067, 'Alta de usuario', 1117, 0, 0, ''),
(2068, 'Alta de usuario', 686, 0, 0, ''),
(2069, 'Modificacion de correos', 686, 0, 0, ''),
(2070, 'Alta de usuario smartnet', 1021, 0, 0, ''),
(2071, 'Solicitud de tarjeta de Autorizacion', 1021, 0, 0, ''),
(2072, 'Desbloqueo de sesión', 1021, 0, 0, ''),
(2073, 'Desbloqueo de usuario', 1021, 0, 0, ''),
(2074, 'Reimpresiones', 1021, 0, 0, ''),
(2075, 'No se transfiere al portal', 1007, 0, 0, ''),
(2076, 'Error de proveedor', 198, 0, 0, ''),
(2077, 'Error de aplicación', 474, 0, 0, ''),
(2078, 'Error de aplicacion', 757, 0, 0, ''),
(2079, 'Error de aplicación', 808, 0, 0, ''),
(2080, 'Erro de aplicación', 418, 0, 0, ''),
(2081, 'Error de aplicación', 961, 0, 0, ''),
(2082, 'Error de aplicación', 852, 0, 0, ''),
(2083, 'No se encuentra el equipo', 247, 0, 0, ''),
(2084, 'No sincroniza', 1055, 0, 0, ''),
(2085, 'Error al generar PDF', 852, 0, 0, ''),
(2086, 'Baja de usuario', 1021, 0, 0, ''),
(2087, 'Error operativo', 472, 0, 0, ''),
(2088, 'No se transfirio', 569, 0, 0, ''),
(2089, 'No cuadra ventas', 569, 0, 0, ''),
(2090, 'No cuadra inventarios', 569, 0, 0, ''),
(2091, 'No se timbraron', 1059, 0, 0, ''),
(2092, 'No se transfirieron', 1059, 0, 0, ''),
(2093, 'No se validaron/Archivaron', 1059, 0, 0, ''),
(2094, 'Extracción de folios de Angre', 234, 0, 0, ''),
(2095, 'Mensaje de error', 1043, 0, 0, ''),
(2096, 'Mensaje de error', 850, 0, 0, ''),
(2097, 'Mensaje de error', 1042, 0, 0, ''),
(2098, 'Mensaje de error', 305, 0, 0, ''),
(2099, 'Mensaje de error', 626, 0, 0, ''),
(2100, 'Mensaje de error', 627, 0, 0, ''),
(2101, 'Mensaje de error', 497, 0, 0, ''),
(2102, 'Mensaje de error', 813, 0, 0, ''),
(2103, 'Mensaje de error', 501, 0, 0, ''),
(2104, 'Mensaje de error', 530, 0, 0, ''),
(2105, 'Mensaje de error', 711, 0, 0, ''),
(2106, 'Mensaje de error', 708, 0, 0, ''),
(2107, 'Mensaje de error', 349, 0, 0, ''),
(2108, 'Mensaje de error', 209, 0, 0, ''),
(2109, 'Mensaje de error', 164, 0, 0, ''),
(2110, 'Mensaje de error', 855, 0, 0, ''),
(2111, 'Mensaje de error', 578, 0, 0, ''),
(2112, 'Mensaje de error', 670, 0, 0, ''),
(2113, 'Mensaje de error', 1124, 0, 0, ''),
(2114, 'Mensaje de error', 715, 0, 0, ''),
(2115, 'Mensaje de error', 527, 0, 0, ''),
(2116, 'Mensaje de error', 791, 0, 0, ''),
(2117, 'Mensaje de error', 988, 0, 0, ''),
(2118, 'Mensaje de error', 366, 0, 0, ''),
(2119, 'Mensaje de error', 492, 0, 0, ''),
(2120, 'Mensaje de error', 251, 0, 0, ''),
(2121, 'Mensaje de error', 250, 0, 0, ''),
(2122, 'Mensaje de error', 529, 0, 0, ''),
(2123, 'Mensaje de error', 667, 0, 0, ''),
(2124, 'Mensaje de error', 666, 0, 0, ''),
(2125, 'Mensaje de error', 493, 0, 0, ''),
(2126, 'Mensaje de error', 528, 0, 0, ''),
(2127, 'Mensaje de error', 1090, 0, 0, ''),
(2128, 'Mensaje de error', 316, 0, 0, ''),
(2129, 'Mensaje de error', 265, 0, 0, ''),
(2130, 'Mensaje de error', 685, 0, 0, ''),
(2131, 'Mensaje de error', 414, 0, 0, ''),
(2132, 'Mensaje de error', 404, 0, 0, ''),
(2133, 'Mensaje de error', 885, 0, 0, ''),
(2134, 'Mensaje de error', 395, 0, 0, ''),
(2135, 'Mensaje de error', 531, 0, 0, ''),
(2136, 'Mensaje de error', 526, 0, 0, ''),
(2137, 'Mensaje de error', 999, 0, 0, ''),
(2138, 'Mensaje de error', 364, 0, 0, ''),
(2139, 'Mensaje de error', 742, 0, 0, ''),
(2140, 'Mensaje de error', 649, 0, 0, ''),
(2141, 'Mensaje de error', 573, 0, 0, ''),
(2142, 'Mensaje de error', 566, 0, 0, ''),
(2143, 'Mensaje de error', 824, 0, 0, ''),
(2144, 'Mensaje de error', 496, 0, 0, ''),
(2145, 'Mensaje de error', 1038, 0, 0, ''),
(2146, 'Mensaje de error', 723, 0, 0, ''),
(2147, 'Mensaje de error', 219, 0, 0, ''),
(2148, 'Mensaje de error', 1015, 0, 0, ''),
(2149, 'Mensaje de error', 1060, 0, 0, ''),
(2150, 'Mensaje de error', 699, 0, 0, ''),
(2151, 'Mensaje de error', 639, 0, 0, ''),
(2152, 'Mensaje de error', 846, 0, 0, ''),
(2153, 'Mensaje de error', 733, 0, 0, ''),
(2154, 'Mensaje de error', 837, 0, 0, ''),
(2155, 'Mensaje de error', 636, 0, 0, ''),
(2156, 'Mensaje de error', 200, 0, 0, ''),
(2157, 'Mensaje de error', 490, 0, 0, ''),
(2158, 'Mensaje de error', 703, 0, 0, ''),
(2159, 'Mensaje de error', 954, 0, 0, ''),
(2160, 'Mensaje de error', 969, 0, 0, ''),
(2161, 'Mensaje de error', 1068, 0, 0, ''),
(2162, 'Mensaje de error', 787, 0, 0, ''),
(2163, 'Error al transferir', 161, 0, 0, ''),
(2164, 'Mensaje de error', 161, 0, 0, ''),
(2165, 'No aparece el puesto', 161, 0, 0, ''),
(2166, 'No sube la foto', 161, 0, 0, ''),
(2167, 'Mensaje de error', 159, 0, 0, ''),
(2168, 'Mensaje de error', 160, 0, 0, ''),
(2169, 'Mensaje de error', 134, 0, 0, ''),
(2170, 'Mensaje de error', 136, 0, 0, ''),
(2171, 'Mensaje de error', 137, 0, 0, ''),
(2172, 'Mensaje de error', 138, 0, 0, ''),
(2173, 'Mensaje de error', 146, 0, 0, ''),
(2174, 'Mensaje de error', 139, 0, 0, ''),
(2175, 'Mensaje de error', 150, 0, 0, ''),
(2176, 'Mensaje de error', 143, 0, 0, ''),
(2177, 'Mensaje de error', 152, 0, 0, ''),
(2178, 'Mensaje de error', 154, 0, 0, ''),
(2179, 'Mensaje de error', 149, 0, 0, ''),
(2180, 'Mensaje de error', 158, 0, 0, ''),
(2181, 'Mensaje de error', 130, 0, 0, ''),
(2182, 'Mensaje de error', 131, 0, 0, ''),
(2183, 'Mensaje de error', 132, 0, 0, ''),
(2184, 'Mensaje de error', 133, 0, 0, ''),
(2185, 'Mensaje de error', 151, 0, 0, ''),
(2186, 'Mensaje de error', 129, 0, 0, ''),
(2187, 'Mensaje de error', 135, 0, 0, ''),
(2188, 'Mensaje de error', 153, 0, 0, ''),
(2189, 'Mensaje de error', 155, 0, 0, ''),
(2190, 'Error operativo', 622, 0, 0, ''),
(2191, 'No aparece la opción en el menú', 622, 0, 0, ''),
(2192, 'No entra el sistema', 622, 0, 0, ''),
(2193, 'Sistema lento', 622, 0, 0, ''),
(2194, 'TPV no funciona', 622, 0, 0, ''),
(2195, 'Instalar TPV', 622, 0, 0, ''),
(2196, 'Instalar Punto de Venta', 622, 0, 0, ''),
(2197, 'Configurar impresora/Mapeo', 622, 0, 0, ''),
(2198, 'Activar tarjeta de autorización', 1021, 0, 0, ''),
(2199, 'Validación XML', 198, 0, 0, ''),
(2200, 'Folios faltantes', 918, 0, 0, ''),
(2201, 'Rempresiones(PDF\'s)', 622, 0, 0, ''),
(2202, 'Borrar XML\'s', 611, 0, 0, ''),
(2203, 'Reimprimir corte(s)', 622, 0, 0, ''),
(2204, 'falla access point', 141, 0, 0, ''),
(2205, 'activaciones constantes', 156, 0, 0, ''),
(2206, 'bateria baja', 156, 0, 0, ''),
(2207, 'emite sonido del teclado', 156, 0, 0, ''),
(2208, 'horario del panel erroneo', 156, 0, 0, ''),
(2209, 'no comunica', 156, 0, 0, ''),
(2210, 'sin conexion', 156, 0, 0, ''),
(2211, 'sin señal de test', 156, 0, 0, ''),
(2212, 'sirena no suena', 156, 0, 0, ''),
(2213, 'sirena suena permanentemente', 156, 0, 0, ''),
(2214, 'zona abierta', 156, 0, 0, ''),
(2215, 'falla en el amplificador', 165, 0, 0, ''),
(2216, 'Falla antena', 191, 0, 0, ''),
(2217, 'no carga', 221, 0, 0, ''),
(2218, 'no sincroniza', 221, 0, 0, ''),
(2219, 'baterias para terminales', 222, 0, 0, ''),
(2221, 'falla botonera telefonica', 233, 0, 0, ''),
(2222, 'falla cable adaptador his', 240, 0, 0, ''),
(2223, 'accesorio dañado', 241, 0, 0, ''),
(2224, 'no lo reconoce el equipo', 241, 0, 0, ''),
(2225, 'punto de red - dañado', 243, 0, 0, ''),
(2226, 'punto de red - instalacion', 243, 0, 0, ''),
(2227, 'falla en cable his diadema avaya', 244, 0, 0, ''),
(2228, 'no abre', 249, 0, 0, ''),
(2229, 'sujetador roto', 249, 0, 0, ''),
(2230, 'camara borrosa', 256, 0, 0, ''),
(2231, 'camara con intermitencia', 256, 0, 0, ''),
(2232, 'camara opaca', 256, 0, 0, ''),
(2233, 'camara sin vision', 256, 0, 0, ''),
(2234, 'el grabador emite sonido', 256, 0, 0, ''),
(2235, 'enfoque de camara', 256, 0, 0, ''),
(2236, 'falla en monitor', 256, 0, 0, ''),
(2237, 'monitor auxiliar cctv', 256, 0, 0, ''),
(2238, 'no se ve camara en almacen', 256, 0, 0, ''),
(2239, 'no se ve camara en corporativo', 256, 0, 0, ''),
(2240, 'revisar grabacion', 256, 0, 0, ''),
(2242, 'falla en conmutador avaya', 392, 0, 0, ''),
(2244, 'buzon lleno', 477, 0, 0, ''),
(2245, 'no envian correo', 477, 0, 0, ''),
(2246, 'no llegan correos', 477, 0, 0, ''),
(2247, 'no sincroniza', 477, 0, 0, ''),
(2248, 'nueva cuenta de correo', 477, 0, 0, ''),
(2249, 'perdida de mails', 477, 0, 0, ''),
(2250, 'no enciende', 484, 0, 0, ''),
(2251, 'no inicia windows', 484, 0, 0, ''),
(2252, 'se bloquea inesperadamente', 484, 0, 0, ''),
(2254, 'falla en diadema telefonica', 509, 0, 0, ''),
(2256, 'sincronizar un disco duro', 517, 0, 0, ''),
(2273, 'Error', 567, 0, 0, ''),
(2277, 'falla gateway de voz', 618, 0, 0, ''),
(2278, 'falla en generador de tonos', 621, 0, 0, ''),
(2280, 'atasco de papel', 660, 0, 0, ''),
(2281, 'baja calidad de impresión', 660, 0, 0, ''),
(2282, 'desconfigurada (matriz)', 660, 0, 0, ''),
(2283, 'error de impresión', 660, 0, 0, ''),
(2284, 'falla del cabezal de impresión', 660, 0, 0, ''),
(2285, 'no imprime', 660, 0, 0, ''),
(2286, 'panel bloqueado (matriz)', 660, 0, 0, ''),
(2287, 'teclado / mouse no funcionan', 660, 0, 0, ''),
(2288, 'atasco de papel', 661, 0, 0, ''),
(2289, 'baja calidad de impresión', 661, 0, 0, ''),
(2290, 'desconfigurada (matriz)', 661, 0, 0, ''),
(2291, 'error de impresión', 661, 0, 0, ''),
(2292, 'falla del cabezal de impresión', 661, 0, 0, ''),
(2293, 'no imprime', 661, 0, 0, ''),
(2294, 'panel bloqueado (matriz)', 661, 0, 0, ''),
(2295, 'teclado / mouse no funcionan', 661, 0, 0, ''),
(2296, 'atasco de papel', 662, 0, 0, ''),
(2297, 'baja calidad de impresión', 662, 0, 0, ''),
(2298, 'desconfigurada (matriz)', 662, 0, 0, ''),
(2299, 'error de impresión', 662, 0, 0, ''),
(2300, 'falla del cabezal de impresión', 662, 0, 0, ''),
(2301, 'no imprime', 662, 0, 0, ''),
(2302, 'panel bloqueado (matriz)', 662, 0, 0, ''),
(2303, 'teclado / mouse no funcionan', 662, 0, 0, ''),
(2304, 'atasco de papel', 663, 0, 0, ''),
(2305, 'baja calidad de impresión', 663, 0, 0, ''),
(2306, 'desconfigurada (matriz)', 663, 0, 0, ''),
(2307, 'error de impresión', 663, 0, 0, ''),
(2308, 'falla del cabezal de impresión', 663, 0, 0, ''),
(2309, 'no imprime', 663, 0, 0, ''),
(2310, 'panel bloqueado (matriz)', 663, 0, 0, ''),
(2311, 'teclado / mouse no funcionan', 663, 0, 0, ''),
(2312, 'inet dedicado c40', 673, 0, 0, ''),
(2313, 'navegacion lenta', 679, 0, 0, ''),
(2314, 'paginas administrativas bloqueadas', 679, 0, 0, ''),
(2315, 'salida de internet', 679, 0, 0, ''),
(2316, 'servicio se corta a cada rato', 679, 0, 0, ''),
(2318, 'batería no carga', 687, 0, 0, ''),
(2319, 'eliminador no funciona', 687, 0, 0, ''),
(2320, 'emite sonidos y no enciende', 687, 0, 0, ''),
(2321, 'no enciende', 687, 0, 0, ''),
(2322, 'no inicia windows', 687, 0, 0, ''),
(2323, 'pantalla no da imagen', 687, 0, 0, ''),
(2324, 'se bloquea inesperadamente', 687, 0, 0, ''),
(2325, 'tiene virus', 687, 0, 0, ''),
(2327, 'no comunica', 720, 0, 0, ''),
(2328, 'no enciende', 720, 0, 0, ''),
(2329, 'no escanea', 720, 0, 0, ''),
(2330, 'eliminar no funciona', 721, 0, 0, ''),
(2331, 'no enciende', 721, 0, 0, ''),
(2332, 'no inicia windows', 721, 0, 0, ''),
(2333, 'se bloquea inesperadamente', 721, 0, 0, ''),
(2334, 'no enciende', 722, 0, 0, ''),
(2335, 'no inicia windows', 722, 0, 0, ''),
(2336, 'se bloquea inesperadamente', 722, 0, 0, ''),
(2337, 'falla en modem', 724, 0, 0, ''),
(2338, 'enciende pero no da imagen', 728, 0, 0, ''),
(2339, 'no enciende', 728, 0, 0, ''),
(2340, 'parpadea', 728, 0, 0, ''),
(2341, 'resolución no optima', 728, 0, 0, ''),
(2342, 'accesorio dañado', 737, 0, 0, ''),
(2343, 'no lo reconoce el equipo', 737, 0, 0, ''),
(2344, 'no enciende', 745, 0, 0, ''),
(2345, 'se apaga', 745, 0, 0, ''),
(2346, 'sonido constante', 745, 0, 0, ''),
(2348, 'sistema operativo usb', 767, 0, 0, ''),
(2349, 'equipo (s) sin conexion de red', 862, 0, 0, ''),
(2350, 'swich apagado', 862, 0, 0, ''),
(2351, 'fusible dañado', 866, 0, 0, ''),
(2352, 'no enciende', 866, 0, 0, ''),
(2353, 'no enciende', 867, 0, 0, ''),
(2354, 'no retiene carga', 867, 0, 0, ''),
(2355, 'se apaga', 867, 0, 0, ''),
(2356, 'sonido constante', 867, 0, 0, ''),
(2357, 'falla en router', 996, 0, 0, ''),
(2358, 'cables dañados', 1008, 0, 0, ''),
(2359, 'escanea códigos incorrectos', 1008, 0, 0, ''),
(2360, 'falla física(reemplazo)', 1008, 0, 0, ''),
(2361, 'no scanea', 1008, 0, 0, ''),
(2362, 'no tiene carga', 1008, 0, 0, ''),
(2363, 'sonidos raros', 1008, 0, 0, ''),
(2365, 'cables dañados', 1009, 0, 0, ''),
(2366, 'escanea códigos incorrectos', 1009, 0, 0, ''),
(2367, 'falla fisica(reemplazo)', 1009, 0, 0, ''),
(2368, 'no escanea', 1009, 0, 0, ''),
(2369, 'sonidos raros', 1009, 0, 0, ''),
(2370, 'cables dañados', 1010, 0, 0, ''),
(2371, 'escanea códigos incorrectos', 1010, 0, 0, ''),
(2372, 'falla física(reemplazo)', 1010, 0, 0, ''),
(2373, 'no retiene la  carga', 1010, 0, 0, ''),
(2374, 'no scanea', 1010, 0, 0, ''),
(2375, 'sonidos raros', 1010, 0, 0, ''),
(2377, 'alertas de hardware emite sonidos', 1013, 0, 0, ''),
(2378, 'alertas de hardware luz indicadora ambar', 1013, 0, 0, ''),
(2379, 'apagar servidor (es)', 1013, 0, 0, ''),
(2380, 'servidor (es) apagado (os)', 1013, 0, 0, ''),
(2382, 'equipo(s) sin conexión de red', 1047, 0, 0, ''),
(2383, 'switch apagado', 1047, 0, 0, ''),
(2384, 'accesorio dañado', 1051, 0, 0, ''),
(2385, 'no lo reconoce el equipo', 1051, 0, 0, ''),
(2386, 'falla en conmutador analogico', 1052, 0, 0, ''),
(2387, 'falla en telefono ip', 1053, 0, 0, ''),
(2388, 'desconfigurada', 1054, 0, 0, ''),
(2389, 'no carga', 1054, 0, 0, ''),
(2390, 'no lee codigos', 1054, 0, 0, ''),
(2394, 'Asesoría', 622, 0, 0, ''),
(2395, 'No refleja información', 426, 0, 0, ''),
(2396, 'Usuario Nuevo', 140, 0, 0, '');
INSERT INTO `hdcategories` (`id`, `title`, `parent_id`, `lft`, `rght`, `description`) VALUES
(2397, 'Recuperar Contraseña', 140, 0, 0, ''),
(2398, 'Consulta', 815, 0, 0, ''),
(2399, 'Consulta', 606, 0, 0, ''),
(2400, 'Error', 727, 0, 0, ''),
(2401, 'Respaldo', 622, 0, 0, ''),
(2402, 'Lentitud al mostrar los pedidos', 789, 0, 0, ''),
(2403, 'Faltan entradas', 1112, 0, 0, ''),
(2404, 'No visualiza los pedidos', 789, 0, 0, ''),
(2405, 'No muestra los pedidos', 382, 0, 0, ''),
(2406, 'Pedidos incompletos', 717, 0, 0, ''),
(2407, 'NO existe las partidas', 717, 0, 0, ''),
(2409, 'Desbloqueo de usuario', 686, 0, 0, ''),
(2410, 'Error', 760, 0, 0, ''),
(2411, 'Error', 762, 0, 0, ''),
(2412, 'Error', 761, 0, 0, ''),
(2413, 'Error', 580, 0, 0, ''),
(2414, 'Error', 1132, 0, 0, ''),
(2415, 'Error', 807, 0, 0, ''),
(2416, 'Error', 769, 0, 0, ''),
(2417, 'Error', 142, 0, 0, ''),
(2418, 'Error', 608, 0, 0, ''),
(2419, 'Error', 148, 0, 0, ''),
(2420, 'Error', 147, 0, 0, ''),
(2421, 'Error', 337, 0, 0, ''),
(2422, 'Error', 650, 0, 0, ''),
(2423, 'Error', 1107, 0, 0, ''),
(2424, 'Error', 1050, 0, 0, ''),
(2427, 'photoshop', 1045, 0, 0, ''),
(2428, 'indesign', 1045, 0, 0, ''),
(2429, 'after effects', 1045, 0, 0, ''),
(2430, 'flash', 1045, 0, 0, ''),
(2431, 'dreamweaver', 1045, 0, 0, ''),
(2432, 'brackets', 1045, 0, 0, ''),
(2433, 'fireworks', 1045, 0, 0, ''),
(2434, 'illustrator', 1045, 0, 0, ''),
(2435, 'premiere', 552, 0, 0, ''),
(2436, 'inventarios', 552, 0, 0, ''),
(2437, 'costos', 552, 0, 0, ''),
(2438, 'contabilidad', 552, 0, 0, ''),
(2439, 'compras', 552, 0, 0, ''),
(2440, 'proyectos', 552, 0, 0, ''),
(2441, 'presupuestos', 552, 0, 0, ''),
(2442, 'tesoreria', 552, 0, 0, ''),
(2443, 'ti', 552, 0, 0, ''),
(2444, 'operaciones', 552, 0, 0, ''),
(2445, 'ventas', 552, 0, 0, ''),
(2446, 'mercadotecnia', 552, 0, 0, ''),
(2447, 'tci', 552, 0, 0, ''),
(2448, 'recursos humanos', 552, 0, 0, ''),
(2449, 'Mensaje de error', 512, 0, 0, ''),
(2450, 'Cambios de Fechas', 226, 0, 0, ''),
(2451, 'Sucursal no actualizada', 145, 0, 0, ''),
(2452, 'Sucursal no transferio', 178, 0, 0, ''),
(2453, 'Sucursal no desmarcada', 178, 0, 0, ''),
(2454, 'Sucursal no transferio', 671, 0, 0, ''),
(2455, 'Sucursal no desmarcada', 671, 0, 0, ''),
(2456, 'No se reflejan en la intranet', 1089, 0, 0, ''),
(2457, 'Fechas no correctas', 843, 0, 0, ''),
(2458, 'Valores no correctos', 843, 0, 0, ''),
(2459, 'Valores no calculados', 1041, 0, 0, ''),
(2460, 'Empleado con datos faltantes', 1041, 0, 0, ''),
(2461, 'Cambios de Fechas', 600, 0, 0, ''),
(2462, 'Puesto', 600, 0, 0, ''),
(2463, 'Sueldos', 600, 0, 0, ''),
(2464, 'Timbrado no realizado', 1058, 0, 0, ''),
(2465, 'Datos faltantes', 368, 0, 0, ''),
(2466, 'Plaza Ocupada', 799, 0, 0, ''),
(2467, 'Cambios de Fecha de Ingreso', 598, 0, 0, ''),
(2468, 'Cambios de Fechas', 450, 0, 0, ''),
(2469, 'Puesto', 450, 0, 0, ''),
(2470, 'Sueldos', 450, 0, 0, ''),
(2471, 'no comunica', 1125, 0, 0, ''),
(2472, 'no enciende', 1125, 0, 0, ''),
(2473, 'no escanea', 1125, 0, 0, ''),
(2474, 'no da imagen', 721, 0, 0, ''),
(2475, 'imagen borrosa', 841, 0, 0, ''),
(2476, 'cables dañados', 1011, 0, 0, ''),
(2477, 'escanea códigos incorrectos', 1011, 0, 0, ''),
(2478, 'falla fisica(reemplazo)', 1011, 0, 0, ''),
(2479, 'no comunica', 1011, 0, 0, ''),
(2480, 'no enciende', 1011, 0, 0, ''),
(2481, 'no escanea', 1011, 0, 0, ''),
(2482, 'no retiene carga', 1011, 0, 0, ''),
(2483, 'sonidos raros', 1011, 0, 0, ''),
(2484, 'sujetadores rotos', 1011, 0, 0, ''),
(2485, 'puertos dañados', 1047, 0, 0, ''),
(2486, 'Error', 520, 0, 0, ''),
(2487, 'Error', 609, 0, 0, ''),
(2488, 'Error', 1131, 0, 0, ''),
(2489, 'Error', 183, 0, 0, ''),
(2490, 'Flash', 1045, 0, 0, ''),
(2491, 'PhotoShop', 1045, 0, 0, ''),
(2492, 'Dreamweaver', 1045, 0, 0, ''),
(2493, 'AffterEffects', 1045, 0, 0, ''),
(2494, 'InDesing', 1045, 0, 0, ''),
(2495, 'Illustrator', 1045, 0, 0, ''),
(2496, 'Fireworks', 1045, 0, 0, ''),
(2497, 'Prelude', 1045, 0, 0, ''),
(2498, 'SpeedGrade', 1045, 0, 0, ''),
(2499, 'Encore', 1045, 0, 0, ''),
(2500, 'Bridge', 1045, 0, 0, ''),
(2501, 'Premier pro', 1045, 0, 0, ''),
(2502, 'Mensaje de error', 406, 0, 0, ''),
(2503, 'Mensaje de error', 668, 0, 0, ''),
(2504, 'Mensaje de error', 790, 0, 0, ''),
(2505, 'Mensaje de error', 998, 0, 0, ''),
(2506, 'Mensaje de error', 1003, 0, 0, ''),
(2507, 'Mensaje de error', 1049, 0, 0, ''),
(2508, 'Mensaje de error', 1085, 0, 0, ''),
(2509, 'Enlace caido', 533, 0, 0, ''),
(2510, 'Sin espacio', 517, 0, 0, ''),
(2511, 'Desconectado', 517, 0, 0, ''),
(2512, 'Dañado', 517, 0, 0, ''),
(2513, 'Sin espacio', 516, 0, 0, ''),
(2514, 'Dañado', 516, 0, 0, ''),
(2515, 'No se encontró foto', 164, 0, 0, ''),
(2516, 'No se encontró constancia', 164, 0, 0, ''),
(2517, 'No funciona', 659, 0, 0, ''),
(2519, 'Intermitente', 533, 0, 0, ''),
(2520, 'Intermitente', 673, 0, 0, ''),
(2521, 'Intermitente', 679, 0, 0, ''),
(2522, 'Intermitente', 754, 0, 0, ''),
(2523, 'Error método de pago', 622, 0, 0, ''),
(2524, 'Cambio método de pago', 622, 0, 0, ''),
(2526, 'Asignación de sucursales', 622, 0, 0, ''),
(2527, 'Actualizacion de Sistema Operativo', 1016, 0, 0, ''),
(2528, 'Acceso', 622, 0, 0, ''),
(2529, 'Cambio', 822, 0, 0, ''),
(2530, 'Actualización a motor de BD', 1026, 0, 0, ''),
(2531, 'Configuración de permisos a BD', 1026, 0, 0, ''),
(2532, 'Configuración de servidor a BD', 1026, 0, 0, ''),
(2533, 'Consultas de información a BD', 1026, 0, 0, ''),
(2534, 'Diseño y planeación a BD', 1026, 0, 0, ''),
(2535, 'Mantenimiento a BD', 1026, 0, 0, ''),
(2536, 'Monitoreo a BD', 1026, 0, 0, ''),
(2537, 'Recuperación BD', 1026, 0, 0, ''),
(2538, 'Replicación a BD', 1026, 0, 0, ''),
(2539, 'Respaldo de BD', 1026, 0, 0, ''),
(2540, 'Categorias', 622, 0, 0, ''),
(2541, 'Por definir', 220, 0, 0, ''),
(2542, 'Por definir', 632, 0, 0, ''),
(2543, 'Por definir', 718, 0, 0, ''),
(2544, 'Por definir', 979, 0, 0, ''),
(2545, 'Por definir', 631, 0, 0, ''),
(2546, 'Por definir', 348, 0, 0, ''),
(2547, 'Instalación', 142, 0, 0, ''),
(2548, 'Instalación', 147, 0, 0, ''),
(2549, 'Instalación', 148, 0, 0, ''),
(2550, 'Instalación', 183, 0, 0, ''),
(2551, 'Instalación', 337, 0, 0, ''),
(2552, 'Instalación', 520, 0, 0, ''),
(2553, 'Instalación', 567, 0, 0, ''),
(2554, 'Instalación', 580, 0, 0, ''),
(2555, 'Instalación', 608, 0, 0, ''),
(2556, 'Instalación', 609, 0, 0, ''),
(2557, 'Instalación', 650, 0, 0, ''),
(2558, 'Instalación', 760, 0, 0, ''),
(2559, 'Instalación', 761, 0, 0, ''),
(2560, 'Instalación', 762, 0, 0, ''),
(2561, 'Instalación', 769, 0, 0, ''),
(2562, 'Intalación', 807, 0, 0, ''),
(2563, 'Intalación', 1050, 0, 0, ''),
(2564, 'Instalación', 1107, 0, 0, ''),
(2565, 'Instalación', 1131, 0, 0, ''),
(2566, 'Instalación', 1132, 0, 0, ''),
(2567, 'Asignación de correo', 686, 0, 0, ''),
(2568, 'Cambios', 347, 0, 0, ''),
(2569, 'Instalación', 1029, 0, 0, ''),
(2570, 'Asignación de sucursales', 482, 0, 0, ''),
(2571, 'Mensajes de error', 622, 0, 0, ''),
(2575, 'Falla', 674, 0, 0, ''),
(2576, 'Falla', 1046, 0, 0, ''),
(2577, 'Falla', 848, 0, 0, ''),
(2581, 'Instalación Sistema', 622, 0, 0, ''),
(2582, 'Instalación Puestos claves', 278, 0, 0, ''),
(2583, 'Instalación resto de personal', 278, 0, 0, ''),
(2584, 'Actualización', 278, 0, 0, ''),
(2585, 'Instalación', 816, 0, 0, ''),
(2586, 'Cambio de servidor', 816, 0, 0, ''),
(2587, 'Actualización estructura de datos', 816, 0, 0, ''),
(2588, 'de aplicativos (dll, exe, wcf, Ws, etc.)', 816, 0, 0, ''),
(2589, 'Actualización de SP', 816, 0, 0, ''),
(2590, 'Actualización de Trigger', 816, 0, 0, ''),
(2591, 'Actualización de información', 816, 0, 0, ''),
(2592, 'Nuevo', 606, 0, 0, ''),
(2593, 'Baja', 606, 0, 0, ''),
(2594, 'Actualizacion', 606, 0, 0, ''),
(2595, 'Nuevo', 815, 0, 0, ''),
(2596, 'Actualizacion', 815, 0, 0, ''),
(2597, 'Base de Datos', 727, 0, 0, ''),
(2598, 'Actualización', 727, 0, 0, ''),
(2600, 'Falla desactivador', 191, 0, 0, ''),
(2601, 'No funcionan', 191, 0, 0, ''),
(2602, 'Activación constante', 191, 0, 0, ''),
(2604, 'Cámara borrosa', 1127, 0, 0, ''),
(2605, 'Cámara con intermitencia', 1127, 0, 0, ''),
(2606, 'Cámara opaca', 1127, 0, 0, ''),
(2607, 'Cámara sin visión', 1127, 0, 0, ''),
(2608, 'El grabador emite sonido', 1127, 0, 0, ''),
(2609, 'Enfoque de cámara', 1127, 0, 0, ''),
(2610, 'Falla en monitor', 1127, 0, 0, ''),
(2611, 'Monitor auxiliar CCTV', 1127, 0, 0, ''),
(2612, 'No se ve cámara en almacen', 1127, 0, 0, ''),
(2613, 'No se ve cámara en corporativo', 1127, 0, 0, ''),
(2614, 'Revisar grabación', 1127, 0, 0, ''),
(2615, 'Activaciones constantes', 157, 0, 0, ''),
(2616, 'Bateria baja', 157, 0, 0, ''),
(2617, 'Emite sonido del teclado', 157, 0, 0, ''),
(2618, 'Horario del panel erroneo', 157, 0, 0, ''),
(2619, 'No comunica', 157, 0, 0, ''),
(2620, 'Sin conexión', 157, 0, 0, ''),
(2621, 'Sin señal de test', 157, 0, 0, ''),
(2622, 'Sirena no suena', 157, 0, 0, ''),
(2623, 'Sirena suena permanentemente', 157, 0, 0, ''),
(2624, 'Zona abierta', 157, 0, 0, ''),
(2625, 'Activación constante', 191, 0, 0, ''),
(2626, 'Falla antena', 191, 0, 0, ''),
(2627, 'Falla desactivador', 191, 0, 0, ''),
(2628, 'No funcionan', 191, 0, 0, ''),
(2629, 'No enlaza', 1128, 0, 0, ''),
(2630, 'Equipo dañado', 1128, 0, 0, ''),
(2631, 'Enlaza pero sin visión', 1128, 0, 0, ''),
(2632, 'Desbloqueo de usuario', 688, 0, 0, ''),
(2633, 'Diversos', 1025, 0, 0, ''),
(2634, 'Restauración BD', 1026, 0, 0, ''),
(2635, 'Instalación', 1117, 0, 0, ''),
(2636, 'Instalación', 812, 0, 0, ''),
(2637, 'Instalación', 748, 0, 0, ''),
(2638, 'Instalación', 716, 0, 0, ''),
(2639, 'Instalación', 486, 0, 0, ''),
(2640, 'Instalación', 201, 0, 0, ''),
(2641, 'SPAM', 477, 0, 0, ''),
(2642, 'Análisis de correo', 477, 0, 0, ''),
(2643, 'Acta de desecho', 554, 0, 0, ''),
(2644, 'Restablecer contraseña', 477, 0, 0, ''),
(2645, 'Problemas de conexión', 1013, 0, 0, ''),
(2646, 'Crear tablas, campos, SP, jobs', 574, 0, 0, ''),
(2647, 'Actualización de datos', 790, 0, 0, ''),
(2648, 'Caída del Servidor', 477, 0, 0, ''),
(2650, 'Navegación a una página', 679, 0, 0, ''),
(2651, 'Actualización de datos', 477, 0, 0, ''),
(2652, 'Calificacion de Examenes', 727, 0, 0, ''),
(2653, 'Firma de correo', 477, 0, 0, ''),
(2654, 'Vistas', 622, 0, 0, ''),
(2655, 'gestion (eliminar, modificar)', 622, 0, 0, ''),
(2656, 'Intalación', 187, 0, 0, ''),
(2657, 'Sincronización', 1048, 0, 0, ''),
(2658, 'Alta de usuario', 201, 0, 0, ''),
(2659, 'Comunicado', 845, 0, 0, ''),
(2660, 'Boletin', 845, 0, 0, ''),
(2661, 'Actualizar Usuario', 140, 0, 0, ''),
(2662, 'Consulta', 709, 0, 0, ''),
(2663, 'Consulta', 845, 0, 0, ''),
(2664, 'Error', 325, 0, 0, ''),
(2665, 'Error', 300, 0, 0, ''),
(2666, 'Correccion', 282, 0, 0, ''),
(2667, 'Error', 227, 0, 0, ''),
(2668, 'Error', 518, 0, 0, ''),
(2669, 'Error', 515, 0, 0, ''),
(2670, 'Error', 676, 0, 0, ''),
(2671, 'Error', 909, 0, 0, ''),
(2672, 'Error', 229, 0, 0, ''),
(2673, 'Error', 726, 0, 0, ''),
(2674, 'Error', 144, 0, 0, ''),
(2675, 'Error', 741, 0, 0, ''),
(2676, 'Error', 1108, 0, 0, ''),
(2677, 'Error', 863, 0, 0, ''),
(2678, 'Error', 1030, 0, 0, ''),
(2679, 'Error', 871, 0, 0, ''),
(2680, 'Error', 738, 0, 0, ''),
(2681, 'Error', 739, 0, 0, ''),
(2682, 'Error', 231, 0, 0, ''),
(2683, 'Error', 284, 0, 0, ''),
(2684, 'Error', 291, 0, 0, ''),
(2685, 'Error', 470, 0, 0, ''),
(2686, 'Error', 179, 0, 0, ''),
(2687, 'Error', 294, 0, 0, ''),
(2688, 'Error', 293, 0, 0, ''),
(2689, 'Cambio de contraseña', 1130, 0, 0, ''),
(2690, 'Error', 796, 0, 0, ''),
(2691, 'Error', 292, 0, 0, ''),
(2692, 'Error', 391, 0, 0, ''),
(2694, 'Error', 438, 0, 0, ''),
(2695, 'Error', 876, 0, 0, ''),
(2696, 'Error', 326, 0, 0, ''),
(2697, 'Error', 205, 0, 0, ''),
(2698, 'Error', 184, 0, 0, ''),
(2699, 'Error', 463, 0, 0, ''),
(2700, 'Error', 468, 0, 0, ''),
(2701, 'Error', 544, 0, 0, ''),
(2702, 'Error', 1110, 0, 0, ''),
(2703, 'Error', 983, 0, 0, ''),
(2704, 'Error', 1129, 0, 0, ''),
(2705, 'Error', 584, 0, 0, ''),
(2706, 'Permisos', 1105, 0, 0, ''),
(2707, 'Acceso', 1105, 0, 0, ''),
(2708, 'Vista', 1105, 0, 0, ''),
(2709, 'Nuevo Video', 844, 0, 0, ''),
(2710, 'Nuevo Documento', 844, 0, 0, ''),
(2711, 'Eliminar Video', 844, 0, 0, ''),
(2712, 'Eliminar Documento', 844, 0, 0, ''),
(2713, 'Actualizar Video', 844, 0, 0, ''),
(2714, 'Actualizar Documento', 844, 0, 0, ''),
(2715, 'Acceso', 1105, 0, 0, ''),
(2716, 'Reporte', 463, 0, 0, ''),
(2717, 'Activación', 1130, 0, 0, ''),
(2718, 'Actualización', 1130, 0, 0, ''),
(2719, 'Reinstalación', 1130, 0, 0, ''),
(2720, 'Error', 1130, 0, 0, ''),
(2721, 'Error general(Cambio)', 622, 0, 0, ''),
(2722, 'Apagado', 1013, 0, 0, ''),
(2723, 'Alerta de sonido', 1013, 0, 0, ''),
(2724, 'Alerta luz Ambar', 1013, 0, 0, ''),
(2725, 'Otros', 1013, 0, 0, ''),
(2726, 'Nuevo Nodo', 243, 0, 0, ''),
(2727, 'Revisión de Nodo', 243, 0, 0, ''),
(2728, 'Otros', 243, 0, 0, ''),
(2729, 'Sin acceso', 665, 0, 0, ''),
(2730, 'Falla de Equipo', 665, 0, 0, ''),
(2731, 'Otros', 665, 0, 0, ''),
(2732, 'Falla de Equipo', 545, 0, 0, ''),
(2733, 'Puertos Dañados', 545, 0, 0, ''),
(2734, 'Apagado', 545, 0, 0, ''),
(2735, 'Otros', 545, 0, 0, ''),
(2739, 'Gestion (Nuevo, Modificacion, eliminacion)', 534, 0, 0, ''),
(2740, 'Gestion (nuevo, modificar, eliminar)', 1038, 0, 0, ''),
(2741, 'Permisos', 842, 0, 0, ''),
(2742, 'Gestion (nuevo, modificacion, eliminar)', 637, 0, 0, ''),
(2743, 'Permisos', 637, 0, 0, ''),
(2745, 'Sonido/Proyector/Asistencia', 579, 0, 0, ''),
(2746, 'Categoria de Tarea', 842, 0, 0, ''),
(2747, 'Categoira de Proyectos', 842, 0, 0, ''),
(2748, 'Mensaje de error', 287, 0, 0, ''),
(2749, 'Gestion (nuevo, modificacion, eliminacion)', 573, 0, 0, ''),
(2752, 'No se encuentran en base de datos', 1059, 0, 0, ''),
(2754, 'Instalación', 431, 0, 0, ''),
(2756, 'Memoria Ram', 484, 0, 0, ''),
(2757, 'Disco Duro', 484, 0, 0, ''),
(2758, 'Cambio de contraseña', 1021, 0, 0, ''),
(2760, 'General', 680, 0, 0, ''),
(2762, 'Virus', 714, 0, 0, ''),
(2763, 'Instalación', 763, 0, 0, ''),
(2764, 'Recalcular', 740, 0, 0, ''),
(2766, 'Cambio de sucursal', 1104, 0, 0, ''),
(2767, 'Falla', 849, 0, 0, ''),
(2769, 'Agrupaciones', 477, 0, 0, ''),
(2773, 'Crear carpeta', 688, 0, 0, ''),
(2774, 'Mover Carpeta', 688, 0, 0, ''),
(2775, 'Acceso', 304, 0, 0, ''),
(2777, 'Conexión lenta', 247, 0, 0, ''),
(2778, 'Problema con XML', 247, 0, 0, ''),
(2779, 'Error al generar PDF', 622, 0, 0, ''),
(2780, 'Error al generar PDF', 622, 0, 0, ''),
(2781, 'Alta usuario', 482, 0, 0, ''),
(2782, 'Instalacion', 687, 0, 0, ''),
(2783, 'No existe pedidos/No existe partidas', 622, 0, 0, ''),
(2784, 'Compartir', 303, 0, 0, ''),
(2785, 'Instalación', 700, 0, 0, ''),
(2786, 'Asignación de Proveedor', 686, 0, 0, ''),
(2787, 'Cambio de Tipo de entrega', 622, 0, 0, ''),
(2788, 'No hay cobros cobros con tarjetas', 622, 0, 0, ''),
(2789, 'Permiso a objetos', 642, 0, 0, ''),
(2790, 'Ampliar buzón', 477, 0, 0, ''),
(2791, 'No tiene linea', 694, 0, 0, ''),
(2792, 'Ruido en la linea', 694, 0, 0, ''),
(2796, 'Instalación', 467, 0, 0, ''),
(2797, 'Error al conectar', 607, 0, 0, ''),
(2798, 'Alta Usuario', 1022, 0, 0, ''),
(2799, 'Error de Operación', 852, 0, 0, ''),
(2800, 'Desbloqueo de Usuario', 1022, 0, 0, ''),
(2801, 'Instalación', 622, 0, 0, ''),
(2802, 'Timbre x error en datos', 622, 0, 0, ''),
(2804, 'Pide contraseña', 247, 0, 0, ''),
(2805, 'Configuración/Instalación', 477, 0, 0, ''),
(2806, 'Instalar impresora', 622, 0, 0, ''),
(2807, 'No abre', 477, 0, 0, ''),
(2808, 'No timbrar XML', 622, 0, 0, ''),
(2809, 'Permisos a carpeta', 688, 0, 0, ''),
(2810, 'Factura erronea', 1056, 0, 0, ''),
(2811, 'Acceso', 1107, 0, 0, ''),
(2812, 'Nuevo ingreso/Cambio', 622, 0, 0, ''),
(2813, 'Habilitar Exportar', 431, 0, 0, ''),
(2816, 'prueba', 0, 1, 2, 'dede'),
(2817, 'Xd', 0, 3, 4, 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hdcategories_articles`
--

CREATE TABLE `hdcategories_articles` (
  `id` int(11) NOT NULL,
  `hdcategory_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hdcategories_articles`
--

INSERT INTO `hdcategories_articles` (`id`, `hdcategory_id`, `article_id`) VALUES
(3, 1, 5),
(4, 2, 5),
(5, 1, 2),
(6, 3, 2),
(7, 1, 29),
(8, 14, 30),
(9, 1, 32),
(10, 2, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hdtemplate`
--

CREATE TABLE `hdtemplate` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `hdcategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hdtemplate`
--

INSERT INTO `hdtemplate` (`id`, `title`, `hdcategory_id`) VALUES
(1, 'template1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insureds`
--

CREATE TABLE `insureds` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `insureds`
--

INSERT INTO `insureds` (`id`, `name`) VALUES
(1, 'asegurado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `invoicedate` date NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `pdf` varchar(100) DEFAULT NULL,
  `xml` varchar(100) DEFAULT NULL,
  `po` varchar(100) DEFAULT NULL,
  `amount` decimal(9,0) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `purchaseorder_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `invoices`
--

INSERT INTO `invoices` (`id`, `reference`, `invoicedate`, `supplier_id`, `pdf`, `xml`, `po`, `amount`, `currency_id`, `purchaseorder_id`) VALUES
(1, '10', '0000-00-00', 40850, '', '', '', '0', 0, 65705),
(2, '11', '0000-00-00', 2, 'fc1484J.pdf', '1', NULL, '0', 0, NULL),
(3, '12', '0000-00-00', 3, 'fc1484J.pdf', '3', NULL, '0', 0, NULL),
(4, '13', '0000-00-00', 4, 'fc1484J.pdf', '8', NULL, '0', 0, NULL),
(5, '14', '0000-00-00', 5, '3', '4', NULL, '0', 0, NULL),
(6, '15', '0000-00-00', 6, '5', '6', NULL, '0', 0, NULL),
(7, '16', '0000-00-00', 7, 'fc1484J.pdf', '8', NULL, '0', 0, NULL),
(8, '17', '0000-00-00', 8, '9', '5', NULL, '0', 0, NULL),
(9, '18', '0000-00-00', 9, '5', '1', NULL, '0', 0, NULL),
(10, '19', '0000-00-00', 10, '4', '4', NULL, '0', 0, NULL),
(11, '20', '0000-00-00', 11, '5', '5', NULL, '0', 0, NULL),
(12, '21', '0000-00-00', 12, '9', '9', NULL, '0', 0, NULL),
(13, 'T-45353', '0000-00-00', 1, NULL, NULL, NULL, '0', 0, NULL),
(14, 'JCPP-3432', '0000-00-00', 1, NULL, NULL, NULL, '0', 0, NULL),
(15, 'JCPP-23423', '0000-00-00', 1, '', NULL, NULL, '0', 0, NULL),
(16, 'JCPP-2', '0000-00-00', 6, 'fc1484J.pdf', '', '', '0', 0, NULL),
(17, 'JCPP-3', '0000-00-00', 2, 'fc1476J.pdf', '', '', '0', 0, NULL),
(18, 'JCPP-4', '0000-00-00', 2, 'fc1484J.pdf', '', '', '0', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemcategories`
--

CREATE TABLE `itemcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `itemcategories`
--

INSERT INTO `itemcategories` (`id`, `name`, `parent_id`) VALUES
(1, 'PC', NULL),
(2, 'GABINETE', 1),
(3, 'MINILAPTOP', NULL),
(4, 'PANTALLAS', 1),
(5, 'TECLADO', 1),
(6, 'MOUSE', 1),
(7, 'IMPRESORAS', NULL),
(8, 'IMPRESORA DE TICKET', 7),
(9, 'IMPRESORA CENEFAS', 7),
(10, 'IMPRESORA ETIQUETAS', 7),
(11, 'IMPRESORA DE MATRIZ', 7),
(12, 'impresora portatil', NULL),
(13, 'SCANNERS CAMA', NULL),
(14, 'SCANNERS DE GATILLO', NULL),
(15, 'SCANNERS DE GATILLO INALAMBRICO', NULL),
(16, 'CAJONES', NULL),
(17, 'DESACTIVADORES', NULL),
(18, 'REGULADORES DE PC', NULL),
(19, 'REGULADOR COPIADORA', NULL),
(20, 'NO.BREAKS DE PC', NULL),
(21, 'NO.BREAKS DE SERVIDOR', NULL),
(22, 'NO.BREAKS/VIDEOVIGILANCIA', NULL),
(23, 'AMPLIFICADOR', NULL),
(24, 'WEBCAM', NULL),
(25, 'MICROFONO', NULL),
(26, 'BOCINAS', NULL),
(27, 'SWITCH', NULL),
(28, 'SERVIDOR', NULL),
(29, 'RUTEADOR', NULL),
(30, 'GATEWAY', NULL),
(31, 'CONMUTADOR', NULL),
(32, 'TELEFONOS IP', NULL),
(33, 'TELEFONOS INALAMBRCOS', NULL),
(34, 'DIADEMAS INALAMBRICAS', NULL),
(35, 'BOTONERA', NULL),
(36, 'DISCO USB P/RESPALDO', NULL),
(37, 'VERIFICADOR DE PRECIOS', NULL),
(38, 'TERMINAL PORTATIL', NULL),
(39, 'CABLES HDMI', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemcodes`
--

CREATE TABLE `itemcodes` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `statusitem_id` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `warranty` date DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `service_tag` varchar(100) DEFAULT NULL,
  `cost` decimal(9,0) NOT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `insured_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `itemcodes`
--

INSERT INTO `itemcodes` (`id`, `item_id`, `serial`, `invoice_id`, `statusitem_id`, `created`, `warranty`, `position_id`, `service_tag`, `cost`, `currency_id`, `insured_id`) VALUES
(1, 3, '3213143513213', 1, 1, '2017-09-22', '2020-08-14', NULL, '2132131435132', '0', NULL, '1'),
(2, 3, '24FQL02', 2, 1, '2017-09-22', '2020-11-18', NULL, '31', '0', NULL, 'asegurado'),
(3, 3, '2W0NYD1', 3, 1, '2017-09-22', '2016-10-23', NULL, '12341353457', '0', NULL, 'sin seguro'),
(4, 3, '736TT12', 4, 1, '2017-09-22', '2019-07-27', 1, '354685461', '0', NULL, 'asegurado'),
(5, 5, '16HZRL1', 5, 1, '2017-09-22', '2019-08-26', 3, '3214654165', '0', NULL, ''),
(6, 6, 'ETELE50C0060053D114001', 6, 1, '2017-09-22', '2020-03-16', NULL, '3', '0', NULL, ''),
(7, 6, 'ETELE50C006005CFF4001', 7, 1, '2017-09-22', '2021-03-17', 2, '316514', '0', NULL, ''),
(8, 6, 'ETELE50C00600602B754001', 8, 1, '2017-09-22', '2015-08-15', 1, '123123123', '0', NULL, ''),
(9, 6, 'ETELE50C0060053D194001', 9, 1, '2017-09-22', '2022-01-01', 3, '12341353457', '0', NULL, ''),
(10, 6, 'ETELE50C00600602B744001', 10, 1, '2017-09-22', '2013-09-15', 4, '14654968514', '0', NULL, ''),
(11, 7, 'AK25041270A0', 11, 1, '2017-09-22', '2016-08-13', 6, '.', '0', NULL, ''),
(12, 7, 'AK6A012315A0', 12, 1, '2017-09-22', '2022-01-01', 5, '1231423', '0', NULL, ''),
(13, 6, 'ETELE50C00600600C614001', 1, 1, '2017-09-22', '2019-04-13', 7, '12312312524534', '0', NULL, ''),
(14, 29, 'USA5EKA16090167', 1, 1, '2017-11-14', '2020-05-10', 11, '651654jgiyfv', '0', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(199) DEFAULT NULL,
  `itemcategory_id` int(11) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `unit_cost` decimal(10,2) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `itemtype_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `name`, `itemcategory_id`, `currency_id`, `model`, `color`, `unit_cost`, `brand_id`, `itemtype_id`, `parent_id`) VALUES
(3, 'CPU DELL OPTIPLEX 3020', 2, 2, 'OPTIPLEX 3020', 'NEGRO', '102.00', 3, 1, NULL),
(4, 'IMPRESORA ZEBRA GC420', 11, 2, 'GC420', 'BLANCO', '202.00', 2, 1, NULL),
(5, 'CPU DELL OPTIPLEX 380', 2, 2, 'OPTIPLEX 380', 'NEGRO', '102.00', 3, 1, NULL),
(6, 'PANTALLA LCD ACER X163WB', 4, 2, 'X163WB', 'NEGRO', '90.00', 4, 1, NULL),
(7, 'IMPRESORA DE MATRIZ DE PUNTO OKI ML-621', 11, 2, 'ML-621', 'BLANCO', '205.00', 11, 1, NULL),
(8, 'CABLE HDMI STEREN', 39, 1, 'C12', 'NEGRO', '100.00', 14, 1, NULL),
(29, 'IMPRESORA DE TICKET TERMICA BIXOLON SRP-350 PLUS', 8, 2, 'SRP-350 PLUS', 'negro', '12.00', 7, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemtypes`
--

CREATE TABLE `itemtypes` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `itemtypes`
--

INSERT INTO `itemtypes` (`id`, `name`) VALUES
(1, 'Activo'),
(2, 'Refaccion'),
(3, 'Consumible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movereasons`
--

CREATE TABLE `movereasons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `factor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movereasons`
--

INSERT INTO `movereasons` (`id`, `name`, `factor`) VALUES
(1, 'SALIDA POR GARANTIA', '-1'),
(2, 'SALIDA POR CHATARRA', '-1'),
(3, 'ENTRADA POR COMPRA', '1'),
(4, 'ENTRADA POR GARANTIA', '1'),
(5, 'ENTRADA POR TRASPASO', '1'),
(6, 'ENTRADA POR REMPLAZO O CAMBIO', '1'),
(7, 'SALIDA POR TRASPASO', '-1'),
(8, 'SALIDA POR REMPLAZO O CAMBIO', '-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movereasontemplates`
--

CREATE TABLE `movereasontemplates` (
  `id` int(11) NOT NULL,
  `template` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `movereason_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nodes`
--

CREATE TABLE `nodes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nodes`
--

INSERT INTO `nodes` (`id`, `name`, `parentId`) VALUES
(1, 'Nodo1', 0),
(2, 'Nodo1.1', 1),
(3, 'Nodo1.2', 1),
(4, 'Nodo2', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `positiontypebranch_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `positions`
--

INSERT INTO `positions` (`id`, `positiontypebranch_id`, `name`) VALUES
(13, 15, 'CAJA1'),
(14, 15, 'CAJA2'),
(15, 15, 'CAJA3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `positiontypebranches`
--

CREATE TABLE `positiontypebranches` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `positiontype_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `positiontypebranches`
--

INSERT INTO `positiontypebranches` (`id`, `branch_id`, `positiontype_id`, `qty`) VALUES
(15, 201, 1, 3),
(16, 124, 2, 1),
(17, 124, 7, 2),
(18, 124, 25, 1),
(19, 124, 8, 1),
(20, 124, 9, 2),
(21, 124, 10, 1),
(22, 124, 11, 2),
(23, 124, 26, 1),
(24, 124, 15, 1),
(25, 124, 23, 1),
(26, 124, 22, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `positiontypebranches_itemcategories`
--

CREATE TABLE `positiontypebranches_itemcategories` (
  `id` int(11) NOT NULL,
  `positiontypebranch_id` int(11) NOT NULL,
  `itemcategory_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `positiontypebranches_itemcategories`
--

INSERT INTO `positiontypebranches_itemcategories` (`id`, `positiontypebranch_id`, `itemcategory_id`, `qty`) VALUES
(1, 15, 1, 3),
(2, 15, 4, 3),
(3, 15, 5, 3),
(4, 15, 8, 3),
(5, 15, 11, 1),
(6, 15, 13, 3),
(7, 15, 16, 3),
(8, 15, 17, 2),
(9, 15, 20, 3),
(10, 16, 1, 1),
(11, 16, 4, 1),
(12, 16, 5, 1),
(13, 16, 6, 1),
(14, 16, 8, 1),
(15, 15, 14, 1),
(16, 16, 16, 1),
(17, 16, 20, 1),
(18, 16, 23, 1),
(19, 16, 32, 1),
(20, 26, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `positiontypes`
--

CREATE TABLE `positiontypes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `positiontypes`
--

INSERT INTO `positiontypes` (`id`, `name`) VALUES
(1, 'CAJAS'),
(2, 'ATENCION A CLIENTES'),
(5, 'GERENTE REGIONAL'),
(6, 'CENTRO DE COPIADO'),
(7, 'MOSTRADOR'),
(8, 'MESA DE CONTROL'),
(9, 'SURTIDO PEDIDOS'),
(10, 'INV.'),
(11, 'TMK'),
(12, 'ADMINISTRACION DE VENTAS'),
(13, 'SUBGERENTE'),
(14, 'CREDIT'),
(15, 'AUXILIAR ADMINISTRACION'),
(16, 'VENTAS MOVIL'),
(17, 'JEFE DE BODEGA'),
(18, 'SALIDAS'),
(19, 'ENTRADAS'),
(20, 'JEFE DE EMBARQUE'),
(21, 'FACTURAS'),
(22, 'SERVIDOR'),
(23, 'VERIFICADOR DE PRECIOS'),
(24, 'SUPERVISOR TI'),
(25, 'ADUANA'),
(26, 'SGTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Super Administrador'),
(2, 'Administrador'),
(3, 'Administrador'),
(4, 'Técnico'),
(5, 'Usuario Final');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` char(40) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data` blob,
  `expires` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shippers`
--

CREATE TABLE `shippers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `shippers`
--

INSERT INTO `shippers` (`id`, `name`) VALUES
(1, 'CENTRA'),
(2, 'ESTAFETA'),
(3, 'TCI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sources`
--

CREATE TABLE `sources` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sources`
--

INSERT INTO `sources` (`id`, `title`) VALUES
(1, 'Portal TI'),
(2, 'Teléfono'),
(3, 'Correo'),
(4, 'Otro Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statusitems`
--

CREATE TABLE `statusitems` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `statusitems`
--

INSERT INTO `statusitems` (`id`, `name`) VALUES
(1, 'activo'),
(2, 'inactivo'),
(3, 'transito'),
(4, 'deshecho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statususers`
--

CREATE TABLE `statususers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `statususers`
--

INSERT INTO `statususers` (`id`, `name`) VALUES
(1, 'activo'),
(2, 'baja temporal'),
(3, 'vacaciones'),
(4, 'inactivo'),
(5, 'dia economico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stockmoves`
--

CREATE TABLE `stockmoves` (
  `id` int(11) NOT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `warehouse_2` int(11) DEFAULT NULL,
  `receiver` int(11) DEFAULT NULL,
  `receiver_sign` varchar(100) DEFAULT NULL,
  `movereason_id` int(11) DEFAULT NULL,
  `shipper_id` int(11) DEFAULT NULL,
  `guide_number` varchar(100) DEFAULT NULL,
  `packages` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `notes` text,
  `confirmed` smallint(6) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stockmoves`
--

INSERT INTO `stockmoves` (`id`, `warehouse_id`, `warehouse_2`, `receiver`, `receiver_sign`, `movereason_id`, `shipper_id`, `guide_number`, `packages`, `user_id`, `notes`, `confirmed`, `parent_id`) VALUES
(1, 1, 2, 1, 'ELENA AURORA', 7, 1, 'N/A', 1, 3, 'TRASPASO DE PANTALLA PARA ALMACEN COORPORATIVO', 1, 1),
(2, 2, 2, 3, 'Jesus Enrique', 5, 1, '', 1, 3, 'entrada por traspaso de veracruz a coorporativo', 0, 1),
(3, 1, 2, 1, 'ELENA AURORA', 3, NULL, 'N/A', 1, 2, 'sdasdfasd', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stockmoves_details`
--

CREATE TABLE `stockmoves_details` (
  `id` int(11) NOT NULL,
  `stockmove_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `itemcode_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `deliverydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stockmoves_details`
--

INSERT INTO `stockmoves_details` (`id`, `stockmove_id`, `item_id`, `itemcode_id`, `qty`, `deliverydate`) VALUES
(1, 1, 6, 13, 1, '0000-00-00 00:00:00'),
(2, 2, 6, 13, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `reorder` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stocks`
--

INSERT INTO `stocks` (`id`, `warehouse_id`, `item_id`, `reorder`) VALUES
(1, 1, 3, 10),
(2, 1, 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`) VALUES
(1, 'APPLE'),
(2, 'GATEWAY'),
(3, 'HP'),
(4, 'TOSHIBA'),
(5, 'LENOVO'),
(6, 'DELL'),
(7, 'ACER'),
(8, 'SAMSUNG'),
(9, 'ASUS'),
(10, 'BENQ'),
(11, 'COMPAQ'),
(12, 'SONY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketimpacts`
--

CREATE TABLE `ticketimpacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketimpacts`
--

INSERT INTO `ticketimpacts` (`id`, `name`) VALUES
(1, 'ALTO'),
(2, 'MEDIO'),
(3, 'BAJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketlogs`
--

CREATE TABLE `ticketlogs` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `field` varchar(50) NOT NULL,
  `valueprev` varchar(200) NOT NULL,
  `valuelater` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketmarkeds`
--

CREATE TABLE `ticketmarkeds` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketmarkeds`
--

INSERT INTO `ticketmarkeds` (`id`, `user_id`, `ticket_id`) VALUES
(3, 6, 5),
(4, 1, 18),
(5, 1, 19),
(6, 1, 18),
(7, 2, 10),
(8, 1, 19),
(11, 2, 10),
(12, 1, 34),
(13, 13, 5),
(14, 1, 61);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketnotes`
--

CREATE TABLE `ticketnotes` (
  `id` int(11) NOT NULL,
  `description` text,
  `ticket_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `ticketnotestype_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketnotes`
--

INSERT INTO `ticketnotes` (`id`, `description`, `ticket_id`, `user_id`, `created`, `ticketnotestype_id`) VALUES
(2, 'REVISE EL CABLE DE CORRIENTE Y DE VIDEO DEL MONITOR', 1, 2, '2017-09-22 20:21:43', 0),
(3, 'La pc no enciende..no se prende ningun foquito', 10, 2, '2017-12-01 04:46:16', 1),
(4, 'Se requieren los datos para contactar al usuario', 10, 13, '2017-12-01 04:47:58', 1),
(5, 'Mi extension es la 6442', 10, 2, '2017-12-01 04:49:11', 1),
(6, 'Se contacta al usuario para realizar las siguientes pruebas con resultados negativos:\r\n\r\n- Revisar que el cable de allimentacion esta bien conectado\r\n- Revisar si enciende el ventilador del CPU\r\n\r\nSe le indica al usuario que se enviara al TI Regional para que revise el equipo en sucursal', 10, 13, '2017-12-01 04:51:40', 1),
(7, 'Se revisa equipo de sucursal, enciende sin problemas ... el usuario presionaba por mucho tiempo el boton de encendido y el equipo encendia y se apagaba rapidamente .... se le enseño al usuario como debe encender la computadora', 10, 12, '2017-12-01 17:31:15', 2),
(8, 's', 5, 1, '2017-12-01 18:17:49', 1),
(9, 'asdasd', 46, 1, '2018-01-12 15:01:16', 1),
(10, 'El usuario no ha respondido la alerta', 46, 1, '2018-01-12 15:02:54', 2),
(11, 'categorias jalando', 85, 1, '2018-01-17 14:21:55', 1),
(12, 'Error al pagar', 86, 1, '2018-01-18 10:04:34', 1),
(13, 'Al momento de querer extraer un folio me arco un error asi\r\n....', 88, 1, '2018-01-19 12:47:38', 1),
(14, 'Te paso este ticket para que lo revises', 24, 2, '2018-01-22 12:26:20', 2),
(15, 'Checa la solución', 88, 1, '2018-01-24 15:43:59', 1),
(16, 'Ya quedo', 88, 2, '2018-01-24 15:46:46', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketnotestypes`
--

CREATE TABLE `ticketnotestypes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketnotestypes`
--

INSERT INTO `ticketnotestypes` (`id`, `name`) VALUES
(1, 'Publico'),
(2, 'Interno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketpriorities`
--

CREATE TABLE `ticketpriorities` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketpriorities`
--

INSERT INTO `ticketpriorities` (`id`, `name`) VALUES
(1, 'ALTO'),
(2, 'MEDIO'),
(3, 'BAJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `tickettype_id` int(11) DEFAULT NULL,
  `ticket_status_id` int(11) DEFAULT NULL,
  `source_id` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `solution` text,
  `resolution` text,
  `itemcode_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `user_autor` int(11) DEFAULT NULL,
  `user_requeried` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `ticketimpact_id` int(11) DEFAULT NULL,
  `ticketurgency_id` int(11) DEFAULT NULL,
  `ticketpriority_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `hdcategory_id` int(11) DEFAULT NULL,
  `modified` datetime NOT NULL,
  `ip` varchar(20) NOT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id`, `tickettype_id`, `ticket_status_id`, `source_id`, `title`, `solution`, `resolution`, `itemcode_id`, `user_id`, `group_id`, `user_autor`, `user_requeried`, `created`, `ticketimpact_id`, `ticketurgency_id`, `ticketpriority_id`, `parent_id`, `hdcategory_id`, `modified`, `ip`, `branch_id`) VALUES
(5, 1, 1, '1', 'TECLADO', 'CHECAR LAS ENTRADAS DEL USB DEL TECLADO', 'SE LIMPIARON LAS ENTRADAS', 7, 6, 2, 12, 1, '2017-10-31 17:25:45', 2, 2, 2, NULL, 12, '2017-10-31 18:24:37', '', 17),
(6, 4, 2, '1', 'MONITOR DEJO DE MOSTRAR IMAGEN', '', '', 13, 2, 1, 3, 3, '2017-10-31 18:08:30', 1, 1, 1, 6, 16, '2017-11-16 18:53:55', '123.123.123.123', 0),
(8, 1, 1, '3', 'ERROR 404', 'CONECTAR CABLE DE RED Y REALIZAR UNA PRUEBA', 'CONECTAR CABLE DE RED Y REALIZAR UNA PRUEBA DE CONEXION, DESACTIVAR EL FIREWALL', 11, 4, 2, 2, 1, '2017-10-31 18:10:23', 1, 2, 2, NULL, 26, '2017-11-28 21:26:08', '10.105.105.51', 17),
(9, 4, 1, '3', 'COMPUTADORA DELL PROCESADOR INTEL I5', 'SOLICITUD', 'SOLICITUD', 6, 3, 3, 1, 3, '2017-10-31 18:12:01', 2, 2, 2, NULL, 11, '2017-11-28 15:40:22', '123.123.123.123|', 17),
(10, 4, 1, '4', 'PC DE CAJA NO ENCIENDE', 'CONECTAR O CAMBIAR CABLE DE VIDEO', 'VERIFICAR SI EL MONITOR ESTA EN FUNCIONAMIENTO, REVISAR CABLE DE VIDEO Y REMPLAZARLO DE SER NECESARIO', 5, 2, 1, 3, 3, '2017-10-31 18:14:51', 1, 2, 1, NULL, 11, '2017-11-16 18:54:46', '2', 17),
(11, 5, 1, '8', 'CAMBIO DE MONITOR', 'SE CAMBIARA POR UNO NUEVO ', 'NO PRENDIO EL MONITOR Y SE REEMPLAZARA POR OTRO', 8, 11, 1, 15, 17, '2017-10-31 18:49:14', 3, 3, 3, NULL, 12, '2017-10-31 18:49:14', '', 17),
(12, 1, 3, '4', 'TICKET', 'SE REINSTALO DRIVER DE LA IMPRESORA', 'SE INSTALO EL DRIVER Y SE VOLVIO A IMPRIMIR', 4, 2, 1, 16, 16, '2017-10-31 19:01:04', 2, 2, 2, NULL, 25, '2018-01-08 11:27:38', '9', 17),
(13, 4, 5, '1', 'PC NO AGARRA INTERNET', 'SE LE PUSO UN ADAPTADOR WIFI', 'SE LE CONECTO UN ADAPTADOR WIFI', 8, 16, 2, 19, 19, '2017-10-31 19:08:00', 1, 1, 1, NULL, 18, '2017-12-07 17:50:48', '19849', 17),
(14, 4, 1, '', 'NO CARGA LA INFORMACION DE LA BASE DE DATOS DE CONOCIMIENTO', 'REINICAR LOS SERVICIOS DE SQL', 'SQL REINICIAR LOS SERVICIOS DE BD', 3, 2, 1, 3, 1, '2017-10-31 20:04:37', 1, 1, 1, NULL, 34, '2018-01-24 15:00:22', '1.1.1.1', NULL),
(16, 4, 3, '3', 'NO CARGA LA INFORMACION DE LA BASE DE DATOS DE CONOCIMIENTO', 'REVISAR SI EL MODEM ESTA ENCENDIDO', 'REINICIAR EL MODEM', 12, 11, 2, 2, 2, '2017-10-31 20:13:32', 2, 3, 2, NULL, 26, '2017-11-08 16:02:55', '', 17),
(18, 5, 3, '2', 'ERROR 404', 'CONECTAR CABLE', 'CONECTAR CABLE', 2, 1, 1, 1, 1, '2017-11-01 15:20:21', 2, 2, 3, 13, 28, '2017-12-22 01:20:51', 'q11212aa', 17),
(19, 4, 1, '2', 'CAJA DE COBRO NO FUNCIONA', 'CONECTAR PC POR MEDIO DE ESCRITORIO REMOTO ', 'CONECTAR PC POR MEDIO DE ESCRITORIO REMOTO ', 5, 1, 1, 1, 1, '2017-11-01 15:26:21', 1, 1, 2, NULL, 27, '2017-11-22 16:10:55', '123.123.123.123', 17),
(20, 4, 1, '2', 'SISTEMAS OPERATIVOS', 'REVISAR LOS SERVICIOS', 'REINICIAR LOS SERVICIOS', 11, 3, 3, 20, 20, '2017-11-01 16:42:13', 2, 1, 1, NULL, 25, '2017-12-07 17:37:22', '123.123.123.123|', 17),
(23, 1, 4, '2', 'ERROR 404', 'CONECTAR CABLE', 'CONECTAR CABLE', 2, 1, 1, 1, 1, '2017-11-08 15:52:52', 1, 1, 1, 18, 28, '2017-11-22 16:11:10', 'q11212a', 17),
(24, 1, 3, '1', 'MONITOR DEJO DE MOSTRAR IMAGEN', '', '', 13, 17, 1, 4, 1, '2017-11-09 18:15:58', 1, 1, 1, 6, 16, '2018-01-23 11:30:32', '123.123.123.123', 201),
(34, 2, 1, '1', 'CORREO FALLIDO', 'REINICIAR EL SERVIDOR', 'REINICIAR EL SERVIDOR', 3, 1, 1, 1, 1, '2017-11-28 16:21:08', 3, 1, 1, 20, 27, '2017-11-30 19:14:36', '::1', 17),
(46, 4, 3, '3', 'MAIL ', 'TEST', 'TWSAT', 14, 14, 1, 1, 1, '2017-12-05 17:01:39', 1, 1, 1, 24, 2689, '2018-01-26 15:49:38', '::1', 201),
(85, 1, 1, NULL, 'Prueba Categorias 2', NULL, NULL, NULL, NULL, NULL, 1, 1, '2018-01-17 14:21:55', 1, 1, 1, NULL, 1, '2018-01-17 14:21:55', '192.168.0.10', NULL),
(86, 1, 1, NULL, 'MENSAJE DE ERROR EN PAGO DE AGUINALDOS', NULL, NULL, NULL, NULL, NULL, 1, 2, '2018-01-18 10:04:34', 1, 1, 1, NULL, NULL, '2018-01-18 10:04:34', '192.168.0.10', NULL),
(88, 1, 1, '', 'Problema con apertura de boveda', 'Forzar cierre y comprobar posteriormente x2', 'Forzar cierre y comprobar posteriormente', 1, NULL, NULL, 1, 2, '2018-01-19 12:47:37', 1, 1, 1, NULL, 2094, '2018-01-24 15:30:25', '192.168.0.10', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketsfiles`
--

CREATE TABLE `ticketsfiles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `ticketnote_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketstatuses`
--

CREATE TABLE `ticketstatuses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value_order` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketstatuses`
--

INSERT INTO `ticketstatuses` (`id`, `name`, `value_order`) VALUES
(1, 'Nuevo', 1),
(2, 'Abierto', 2),
(3, 'Cerrado', 2),
(4, 'Reabierto', 1),
(5, 'Transferido', 1),
(6, 'Pendiente Usuario Final', NULL),
(7, 'Pendiente Externo', NULL),
(8, 'Aplazado Usuario Final', NULL),
(9, 'Cancelado', NULL),
(10, 'Visita TI', NULL),
(11, 'Pendiente Revision', NULL),
(12, 'Proceso Liberacion', NULL),
(13, 'Aprobado', NULL),
(14, 'Rechazado', NULL),
(15, 'Revision', NULL),
(16, 'Cambio Exitoso', NULL),
(17, 'Cambio No Exitoso', NULL),
(18, 'Pendiente Autorizar', NULL),
(19, 'En Desarrollo', NULL),
(20, 'Enviado', NULL),
(21, 'Aplazado', NULL),
(22, 'Espera Autorizacion Direccion', NULL),
(23, 'En Observacion', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketstatuses_tickettypes`
--

CREATE TABLE `ticketstatuses_tickettypes` (
  `id` int(11) NOT NULL,
  `ticket_status_id` int(11) NOT NULL,
  `tickettype_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickettypes`
--

CREATE TABLE `tickettypes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `tag` varchar(5) DEFAULT NULL,
  `rank` int(11) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tickettypes`
--

INSERT INTO `tickettypes` (`id`, `name`, `tag`, `rank`, `color`) VALUES
(1, 'INCIDENTE', 'I', 1, '#F39C12'),
(2, 'PROBLEMA', 'P', 2, '#DD4B39'),
(4, 'SOLICITUD', 'S', 4, '#00C0EF'),
(5, 'CAMBIO', 'C', 5, '#666699');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketurgencies`
--

CREATE TABLE `ticketurgencies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketurgencies`
--

INSERT INTO `ticketurgencies` (`id`, `name`) VALUES
(1, 'ALTO'),
(2, 'MEDIO'),
(3, 'BAJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userendmessages`
--

CREATE TABLE `userendmessages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `startdate` datetime NOT NULL,
  `endingdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `userendmessages`
--

INSERT INTO `userendmessages` (`id`, `message`, `user_id`, `created`, `modified`, `startdate`, `endingdate`) VALUES
(9, 'Muchos tickets, calmados :D', 1, '2017-12-13 09:36:32', '2017-12-13 15:49:35', '2017-12-13 09:35:00', '2017-12-13 14:35:00'),
(10, 'hola', 1, '2017-12-22 01:34:18', '2017-12-22 01:34:18', '2017-12-22 01:31:36', '2017-12-22 01:50:42'),
(11, 'estamos en junta', 1, '2017-12-22 13:03:01', '2017-12-22 13:03:01', '2017-12-22 13:02:43', '2017-12-23 13:02:52'),
(12, 'Sistema de HelpDesk en pruebas. \\°o°/', 1, '2018-01-22 12:24:41', '2018-01-24 15:36:03', '2018-01-24 12:23:00', '2018-01-30 12:24:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `positionbranch_id` int(11) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `statususer_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `data` blob,
  `expires` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `last_name`, `positionbranch_id`, `password`, `statususer_id`, `group_id`, `role_id`, `data`, `expires`) VALUES
(1, 'evaldesc@tony.mx', 'ELENA AURORA', 'VALDES CAMACHO', NULL, '$2y$10$yTECyTqoJ1UVR6e86soh0.6zD8twyB9k/fbErua2RutfSuTt.ad3.', 1, 1, 3, NULL, NULL),
(2, 'jperea@tony.mx', 'JULIO CESAR', 'PEREA PASTRANA', NULL, '$2y$10$J6yCTjHAatXany/NEfBD0uaAt/aNPHEUpaHfGie.NW7z8BHL/96cu', 3, 1, 4, NULL, NULL),
(3, 'jgonzalez@tony.com', 'JESUS ENRIQUE', 'GONZALEZ GARCIA', NULL, '$2y$10$ns5tdDsHIOGdSrn3n876Tub0gM5BJUy7HjB2m93KfCv78I.xiYrRa', 1, 3, 4, NULL, NULL),
(4, 'candres@tony.com', 'CARLOS ANDRES ', 'COBOS COBOS', NULL, '$2y$10$5XK39jeCjyyYFD.JSrwWHun9S4gjOVS/IfQnDXQ5yQO4C1ZBmXld.', 1, 3, 1, NULL, NULL),
(12, 'rpalacions@tony.mx', 'Ricardo Javier ', 'Palacios Guzman', NULL, '$2y$10$4abaeWiK8TdqPHPRhRKjKe4HgQdSBFlzUll3iIjunHLxjfWDETS/u', 1, 4, 3, NULL, NULL),
(13, 'rpalma@tony.mx', 'Ricardo', 'Palma Coto', NULL, '$2y$10$pJKXn4q0pOTg8caZRhjywOz0TiG.4JReELxBbTAk2d6iwmcchABpm', 1, 4, 3, NULL, NULL),
(14, 'flopez@tony.mx', 'Francisco Arturo', 'Lopez Verdugo', NULL, '$2y$10$diJkSHMdvPM65VXB5naZCeRlXahp/SVFNz4sgv3t13SpfFiqBZeOS', 1, 4, 3, NULL, NULL),
(15, 'wmay@tony.mx', 'Wilfrido Efrain', 'May Sunza', NULL, '$2y$10$Gow6xPUBqTsq3hQgvUg9w.oVBEb.8.umHN8rU8MQp.8Kp.CNi1DKK', 1, 4, 3, NULL, NULL),
(16, 'ocarmona@tony.mx', 'Orlando', 'Carmona', NULL, '$2y$10$QVTk6afAf.Ag7ETtcFslpO9sIUgWrsvwH5YgUDFLSeKTlwjcBDHue', 1, 4, 3, NULL, NULL),
(17, 'acuevas@tony.mx', 'Adrian', 'Cuevas Zamora', NULL, '$2y$10$KiZcN34OWzRugx8JYpKmn.ayMIGU6utnZj.yCSoaGeozLYZeyBIH6', 1, 4, 3, NULL, NULL),
(18, 'sgarcia@tony.mx', 'Salvador', 'Garcia Reyes', NULL, '$2y$10$DZjKewhmpruwyF0OoNDJN.1oFneFReT2jU4MOXQnEKZSjWaHsTuiy', 1, 4, 3, NULL, NULL),
(19, 'rjimenez@tony.mx', 'Roman', 'Jimenez Xicotencatl', NULL, '$2y$10$6x.HJgxSRtaCULI3Z00Gve/L4TGBJAGJx5XHlyH0.ZFKyYWrPtJGe', 1, 4, 3, NULL, NULL),
(20, 'mdelavega@tony.mx', 'Misael', 'de la Vega', NULL, '$2y$10$xkxh4lgmMYiGVVTEq6xpT.5IhCPEES3d2pLgHgWZyM9t8FCjw3j.y', 1, 4, 3, NULL, NULL),
(21, 'fsalgado@tony.mx', 'Juan Francisco', 'Salgado Uvalle', NULL, '$2y$10$UabC4Z9V1R1rpe35.V.qw.cDIbfwEOpE7q7jEe/8GpnK5T9fhTYWu', 1, 4, 3, NULL, NULL),
(22, 'mcontreras@tony.mx', 'Misael Esteban', 'Contreras Martinez', NULL, '$2y$10$B9aO6qFyLgxeITbj3loTEujlFr6rIVumdTQS4GSr02pGKBlAyEimq', 1, 4, 3, NULL, NULL),
(23, 'jaalcala@tony.mx', 'Jose Antonio', ' Alcalá Gomez ', NULL, '$2y$10$5K9tZ1CNZ/Lko3ecHrqOru2yYKgcgNJ6To9bXzkFYdfmDGvhWAG.y', 1, 4, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `warehouses`
--

INSERT INTO `warehouses` (`id`, `name`, `branch_id`) VALUES
(1, 'ALMACEN 1 VERACRUZ NORTE', 201),
(2, 'ALAMACEN COORPORATIVO', 1),
(3, 'ALMACEN XALAPA', 3),
(4, 'ALMACEN CD VICTORIA', 4),
(5, 'ALMACEN VERACRUZ', 5),
(6, 'ALMACEN ZAMORA', 6),
(7, 'ALMACEN IRAPUATO', 7),
(8, 'ALMACEN TUXTEPEC', 8),
(9, 'ALMACEN ACAYUCAN', 9),
(10, 'ALMACEN NAUCALPAN', 10),
(11, 'ALMACEN SALTILLO', 11),
(12, 'ALMACEN APIZACO', 12),
(13, 'ALMACEN SAN LUIS', 13),
(14, 'ALMACEN MERIDA', 14),
(15, 'ALMACEN CHALCO', 15),
(16, 'ALMACEN ZAPOPAN', 16),
(17, '555 ALMACEN', 103);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articlefiles`
--
ALTER TABLE `articlefiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articles_roles`
--
ALTER TABLE `articles_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `branchgroups`
--
ALTER TABLE `branchgroups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hdcategories`
--
ALTER TABLE `hdcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hdcategories_articles`
--
ALTER TABLE `hdcategories_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hdtemplate`
--
ALTER TABLE `hdtemplate`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `insureds`
--
ALTER TABLE `insureds`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `itemcategories`
--
ALTER TABLE `itemcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `itemcodes`
--
ALTER TABLE `itemcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `itemtypes`
--
ALTER TABLE `itemtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movereasons`
--
ALTER TABLE `movereasons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movereasontemplates`
--
ALTER TABLE `movereasontemplates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nodes`
--
ALTER TABLE `nodes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `positiontypebranches`
--
ALTER TABLE `positiontypebranches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `positiontypebranches_itemcategories`
--
ALTER TABLE `positiontypebranches_itemcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `positiontypes`
--
ALTER TABLE `positiontypes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `statusitems`
--
ALTER TABLE `statusitems`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `statususers`
--
ALTER TABLE `statususers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stockmoves`
--
ALTER TABLE `stockmoves`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stockmoves_details`
--
ALTER TABLE `stockmoves_details`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketimpacts`
--
ALTER TABLE `ticketimpacts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketlogs`
--
ALTER TABLE `ticketlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketmarkeds`
--
ALTER TABLE `ticketmarkeds`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketnotes`
--
ALTER TABLE `ticketnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketnotestypes`
--
ALTER TABLE `ticketnotestypes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketpriorities`
--
ALTER TABLE `ticketpriorities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketsfiles`
--
ALTER TABLE `ticketsfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketstatuses`
--
ALTER TABLE `ticketstatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketstatuses_tickettypes`
--
ALTER TABLE `ticketstatuses_tickettypes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tickettypes`
--
ALTER TABLE `tickettypes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketurgencies`
--
ALTER TABLE `ticketurgencies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `userendmessages`
--
ALTER TABLE `userendmessages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articlefiles`
--
ALTER TABLE `articlefiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `articles_roles`
--
ALTER TABLE `articles_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT de la tabla `branchgroups`
--
ALTER TABLE `branchgroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `hdcategories`
--
ALTER TABLE `hdcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2818;
--
-- AUTO_INCREMENT de la tabla `hdcategories_articles`
--
ALTER TABLE `hdcategories_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `hdtemplate`
--
ALTER TABLE `hdtemplate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `insureds`
--
ALTER TABLE `insureds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `itemcategories`
--
ALTER TABLE `itemcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `itemcodes`
--
ALTER TABLE `itemcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `itemtypes`
--
ALTER TABLE `itemtypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `movereasons`
--
ALTER TABLE `movereasons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `movereasontemplates`
--
ALTER TABLE `movereasontemplates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nodes`
--
ALTER TABLE `nodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `positiontypebranches`
--
ALTER TABLE `positiontypebranches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `positiontypebranches_itemcategories`
--
ALTER TABLE `positiontypebranches_itemcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `positiontypes`
--
ALTER TABLE `positiontypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `shippers`
--
ALTER TABLE `shippers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sources`
--
ALTER TABLE `sources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `statusitems`
--
ALTER TABLE `statusitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `statususers`
--
ALTER TABLE `statususers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `stockmoves`
--
ALTER TABLE `stockmoves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `stockmoves_details`
--
ALTER TABLE `stockmoves_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `ticketimpacts`
--
ALTER TABLE `ticketimpacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ticketlogs`
--
ALTER TABLE `ticketlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ticketmarkeds`
--
ALTER TABLE `ticketmarkeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `ticketnotes`
--
ALTER TABLE `ticketnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `ticketnotestypes`
--
ALTER TABLE `ticketnotestypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ticketpriorities`
--
ALTER TABLE `ticketpriorities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT de la tabla `ticketsfiles`
--
ALTER TABLE `ticketsfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ticketstatuses`
--
ALTER TABLE `ticketstatuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `ticketstatuses_tickettypes`
--
ALTER TABLE `ticketstatuses_tickettypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tickettypes`
--
ALTER TABLE `tickettypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ticketurgencies`
--
ALTER TABLE `ticketurgencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `userendmessages`
--
ALTER TABLE `userendmessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
