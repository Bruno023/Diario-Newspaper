-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2020 a las 21:40:34
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diario`
--
CREATE DATABASE IF NOT EXISTS `diario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `diario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Copete` varchar(500) NOT NULL,
  `NoticiaCompleta` varchar(1000) NOT NULL,
  `Imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `Titulo`, `Copete`, `NoticiaCompleta`, `Imagen`) VALUES
(1, 'Worlds', 'Ya está aquí el momento más esperado por los fans del competitivo de League of Legends. La gran final de los Worlds 2020 comienza hoy a las 11.00h.DAMWON Gaming y Suning se lo juegan todo al mejor de 5 para llevarse a casa el gran trofeo que los corone como campeones del mundo de League of Legends.Será un duelo legendario entre dos de las regiones con más proyección en la escena competitiva del título. Por un lado, Corea del Sur con DAMWON como abanderado. En el otro extremo Suning, representant', 'Cruces, fechas, horarios y resultados\r\nViernes 25 de septiembre\r\n\r\nPSG Talon 1-0 Rainbow7\r\nLegacy Esports 1-0 Intz\r\nLGD Gaming 0-1 PSG Talon\r\nTeam Liquid 1-0MAD Lions\r\nSábado 26 de septiembre\r\n\r\nRainbow7 0-1 V3 Esports\r\nINTZ 0-1 Papara SuperMassive\r\nV3 Esports 0-1 Unicorns of Love\r\nLGD Gaming 0-1 Rainbow7\r\nUnicorns of Love 1-0  PSG Talon\r\nPapara SuperMassive 1-0 MAD Lions\r\nTeam Liquid 1-0 Legacy Esports\r\nDomingo 27 de septiembre\r\n\r\nV3 Esports 0-1 LGD Gaming\r\nRainbow7 1-0 Unicorns of Love\r\nPSG Talon 1-0 V3 Esports\r\nUnicorns of Love 1-0 LGD Gaming\r\nUnicorns of Love 0-1 PGS Talon\r\nLGD Gaming 1-0 V3 Esports\r\nLunes 28 de septiembre\r\n\r\nPapara SuperMassive 0-1 Team Liquid\r\nMAD Lions 0-1 Legacy Esports\r\nINTZ 1-0 Team Liquid\r\nLegacy Esports 1-0 Papara SuperMassive\r\nMAD Lions 1-0 INTZ\r\nTeam Liquid 1-0 Legacry Esports\r\nMartes 29 de septiembre\r\n\r\nRaibow7 0-3 LGD Gaming\r\nPapara SuperMassive 3-2 MAD Lions\r\nMiércoles 30 de septiembre\r\n\r\nLGD Gaming 0-3 Legacy Esports\r\nPapara Super Massive 3-0 Unicorns', 'https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blte06167f518dd1579/5f5c00ebfef72a4b5f96597f/01-Header.jpg?width=3200&height=1800'),
(2, 'Fnatic eliminado de los Worlds', 'Fnatic cae en cuartos de final del Mundial de League of Legends tras una gran serie de FunPlus Phoenix que ejecutó a la perfección su hoja de ruta. El primer cabeza de serie chino ganó por tres mapas a uno a Fnatic, en una eliminatoria marcada por la elección de Ryze a mano de Doinb, que lo jugó a las mil maravillas.\r\n', 'Fnatic cae en cuartos de final del Mundial de League of Legends tras una gran serie de FunPlus Phoenix que ejecutó a la perfección su hoja de ruta. El primer cabeza de serie chino ganó por tres mapas a uno a Fnatic, en una eliminatoria marcada por la elección de Ryze a mano deDoinb, que lo jugó a las mil maravillas.\r\n\r\nEn el primer mapa, los \'fantasmas del pasado aparecieron en los subcampeones mundiales, que volvieron a escoger el Garen-Yuumi con el que no han conseguido destacar en esta cita. Con mucha facilidad y sencillez, los asiáticos cerraron un primer mapa en el que Fnatic tendría que cambiar muchas más cosas, entre ellas, el ban de Ryze, el campeón predilecto de Doinb y con el cual ha destrozado los cuatro mapas de la eliminatoria.\r\n\r\n\r\n\r\nUN DIVE QUE NO OLVIDARÁN\r\nUn dive alocado en el carril inferior decantó la balanza en el segundo para FunPlus. Varus se puso muy por delante y sumó tres asesinatos que le hicieron la vida imposible a un Fnatic que, como se dice en el argot d', 'https://www.esportmaniacos.com/wp-content/uploads/2020/03/49567072432_8b0e688a2b_k.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
