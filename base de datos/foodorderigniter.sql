-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-12-2022 a las 15:23:01
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foodorderigniter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`, `date`) VALUES
(1, 'admin', '$2y$10$mI/hpZ59vGgjs/lPTQWLJu.I82O93AEJ3gwFycAjuibOjAGi9dcTm', 'admin123@gmail.com', '2021-02-26 16:24:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dishesh`
--

DROP TABLE IF EXISTS `dishesh`;
CREATE TABLE IF NOT EXISTS `dishesh` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dishesh`
--

INSERT INTO `dishesh` (`d_id`, `r_id`, `name`, `about`, `price`, `img`) VALUES
(1, 9, 'Risotto alla milanese', 'Es una de las comidas típicas en Italia, ícono en Milán, Verona, Piamonte y Lombardía. Sus ingredientes principales son el arroz y el toque de queso parmesano.  Su textura cremosa combinada con el sabor del queso hace de este plato una experiencia.', 100, 'RisottoAllaMilanese1.jpg'),
(24, 9, 'Ossobuco', 'El ossobuco es un plato tradicional de Milán a base de carne de ternera sin deshuesar, preparado en modo de estofado de jarrete.  El también conocido como jarrete de ternera o como ossobuco a la milanesa, se cocina guisando la carne con tomate y cebolla.', 120, 'Ossobuco.jpg'),
(25, 10, 'Dim sum', 'El tradicional incluye la variedad de bollos al vapor, que son pequeños bocados de masa y arrollados de arroz. En su interior podemos encontrar diferentes ingredientes, como carne, pollo, cerdo, camarones, e incluso algunos rellenos vegetarianos.', 80, 'Dimsum.jpg'),
(26, 10, 'Chow mein', 'Chow mein, una receta a base de fideos chinos salteados. Podría decirse que se hace con fideos a base de huevo y que se acompaña por lo general de verduras y de alguna proteína como la carne o el pollo.', 120, 'Chowmein.jpg'),
(27, 11, 'Lomos de merluza al pil pil con almejas y langostinos', 'Lomos de merluza al pil pil, que acompañamos con almejas y langostinos, es una firme candidata para convertirse en uno de vuestros platos estrella. No nos llevará demasiado tiempo prepararla y el éxito está asegurado, ya que usando productos de calidad.', 180, 'Lomosde_merluzaalpilpil1.jpg'),
(28, 12, 'Tacos al pastor', 'Están influenciados por la cocina del Imperio Otomano, y mezclan carne marinada de puerco en trompo (sí, parecido al de shawarma) con tortilla de maíz, piña, cebolla, cilantro, y dosis al gusto de limón y salsa picante.', 75, 'Tacosalpastor.jpg'),
(29, 12, 'Chilaquile', 'Comida mexicana que levanta hasta los muertos, está hecho con pedazos de tortilla de maíz frita, salsa roja o verde, crema de leche, cebolla, queso blanco, y opcionalmente huevo o pollo deshebrado.', 55, 'Chilaquile1.jpg'),
(30, 12, 'Chiles Rellenos', 'Es que no todos los chiles son picantes, y eso aplica para la mayoría de los casos en platos de chiles rellenos. Pueden ser con queso, carne, pollo, atún, pescados, mariscos cubiertos en salsa, gratinados o capeados. Comida mexicana en su máxima expresión', 60, 'Chilesrelleno.jpg'),
(31, 13, 'Sopa de fideos con vaca', 'La sopa de fideos con vaca es la cocina típica taiwanesa que compuesta de caldo de carne,trozos de carne de ternera y fideos.Las carnes empleadas para la elaboración de la sopa son aquellas partes del ganado vacuno.', 120, 'Sopadefideosconvaca.png'),
(32, 13, 'Tofu apestoso', 'Con tofu fermentar para producir un aroma especial. Su sabor único, con frita o cocida al vapor, se ha convertido en la comida local especial.Los vendedores de Taiwán venden en su mayoría tofu frito, con kimchi de estilo dulce y amargo.', 85, 'Tofuapestoso.jpg'),
(33, 14, 'Huevos Rotos con Chorizo', 'Uno de mis platos españoles favoritos de toda la vida. Una bomba de calorías llena de felicidad y sabor.', 30, 'Huevosconchorizo.jpg'),
(34, 14, 'Torrezno', 'Un torrezno es una tira de tocino, siempre con su piel, frita o salteada en sartén o tostada en una parrilla.', 55, 'Torreznos.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE IF NOT EXISTS `restaurants` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `o_hr` varchar(255) NOT NULL,
  `c_hr` varchar(255) NOT NULL,
  `o_days` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `restaurants`
--

INSERT INTO `restaurants` (`r_id`, `c_id`, `name`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `img`) VALUES
(9, 2, 'Ristorante Tonelli', 'RistoranteTonelli@gmail.com', '50522700300', 'https://RistoranteTonelli.com/', '8am', '8pm', 'mon-sat', 'Hotel Seminole 1 C. Sur 20 mts Oeste, Managua, Nicaragua, 14033', 'RistoranteTonelli1.jpg'),
(10, 4, 'Xin Tian Di', 'XinTianDi@gmail.com', '50522224322', 'https://XinTianDi.com/', '8pm', '8am', 'mon-fri', 'KM 10.5 Carretera a Masaya, Managua 11001', 'XinTianDi.jpg'),
(11, 9, 'Factory Steak & Lobster', 'FactorySteak&Lobster@gmail.com', '50522768989', 'https://FactorySteak&Lobstercom/', '8am', '12am', 'mon-thu', 'Dentro del Hotel Real InterContinental Metrocentro Managua, 0, Managua', 'FactorySteakLobster.jpg'),
(12, 7, 'Rehab Bar & Grill', 'RehabBar&Grill@gmail.com', '50578320239', 'https://RehabBar&Grill.com/', '8am', '8pm', '24hr-x7', 'La Colonia Plaza España, Managua', 'RehabBarGrill.jpg'),
(13, 5, 'Ta-Fa', 'Ta-Fa@gmail.com', '50522784967', 'https://Ta-Fa.com/', '9am', '4pm', 'mon-fri', 'Residencial Los Robles Casa # 20, Managua Nicaragua', 'Ta-Fa.jpg'),
(14, 3, 'La Taska de Kiko', 'LaTaskadeKiko@gmail.com', '50522701569', 'https://LaTaskadeKiko.com/', '8am', '8pm', '24hr-x7', 'Funeria Monte de los Olives 1c al Este, Casa #6, Managua Nicaragua', 'Lataskadekiko.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `res_category`
--

DROP TABLE IF EXISTS `res_category`;
CREATE TABLE IF NOT EXISTS `res_category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`) VALUES
(2, 'Italiana'),
(3, 'Contidiana'),
(4, 'China'),
(5, 'Taiwanesa'),
(6, 'Americana'),
(7, 'Mexicana'),
(8, 'Peperoni'),
(9, 'Marisco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`) VALUES
(36, 'Heyling505', 'Heyling', 'Siu', 'Heyling505@gmail.com', '1234567890', '$2y$10$psIxeJQdxCkbNAH2e6ptlegA5wpOdFQw77uLal87CvMkYrcZAJxnG', 'Tangamandapio'),
(37, 'Gerson505', 'Gerson', 'villagra', 'Gerson505@gmail.com', '1234567890', '$2y$10$.pc3iQvJWajTxAo0s3wfLe2e/IpTpE.HNUh6SELOvwEt.doiuuAs2', 'Mercado Oriental'),
(38, 'Mike505', 'Maycol', 'Ruiz', 'Mike505@gmail.com', '1234567890', '$2y$10$hUU4eLbXy7arwksSWeqbAegRammedizJvwY7qcMrf6xgaJpbLd8xq', 'Camilo Ortega'),
(39, 'cs502020', 'Cs50', 'Uni', 'cs50@gmail.com', '1234567890', '$2y$10$E.fdWFAf1x/SQGfzSjHl4egQD9dnOYrtakYCl3UmHSIqrGN3oO0GG', 'Rotonda Ruben Dario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_orders`
--

DROP TABLE IF EXISTS `user_orders`;
CREATE TABLE IF NOT EXISTS `user_orders` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `success-date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `r_id` int(11) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user_orders`
--

INSERT INTO `user_orders` (`o_id`, `u_id`, `d_id`, `d_name`, `quantity`, `price`, `status`, `date`, `success-date`, `r_id`) VALUES
(18, 18, 9, 'Maltesers Tiramisu', 1, 4, 'closed', '2021-05-16 18:01:05', '2021-05-16 16:02:09', 3),
(20, 19, 10, 'Arancini', 1, 12, 'in process', '2021-05-17 12:01:04', '2022-12-07 23:18:35', 6),
(21, 21, 18, 'Chimichanga', 1, 9, 'in process', '2021-05-17 13:38:29', '2021-05-17 12:21:29', 2),
(22, 23, 16, 'Sesame Chicken', 3, 33, 'closed', '2021-05-17 14:19:58', '2021-05-17 12:30:47', 4),
(23, 24, 1, 'Grilled Cheese Sandwich', 2, 12, NULL, '2021-05-17 14:30:02', '2021-05-17 08:45:02', 1),
(24, 24, 20, 'Chop Suey', 1, 8, 'closed', '2021-05-17 14:30:02', '2021-05-17 14:32:49', 2),
(25, 31, 7, 'Spaghetti Carbonara', 1, 9, NULL, '2021-05-17 14:38:44', '2021-05-17 08:53:44', 1),
(27, 32, 21, 'PoBoy', 2, 10, 'in process', '2021-05-17 15:55:55', '2021-05-17 13:57:23', 5),
(28, 34, 8, 'Toasted Ravioli', 4, 44, 'rejected', '2021-05-17 16:22:34', '2021-05-17 14:31:36', 2),
(29, 34, 21, 'PoBoy', 2, 10, 'closed', '2021-05-17 16:22:34', '2021-05-17 14:32:07', 5),
(30, 34, 11, 'Currywurst', 7, 49, 'closed', '2021-05-17 16:22:34', '2021-05-17 14:32:42', 6),
(32, 34, 22, 'Reuben Sandwich', 3, 24, 'closed', '2021-05-17 16:31:02', '2021-05-17 14:32:38', 7),
(33, 35, 18, 'Chimichanga', 1, 9, 'closed', '2022-12-07 05:13:37', '2022-12-07 05:19:06', 2),
(34, 35, 3, 'Hot Dog', 1, 4, 'in process', '2022-12-07 05:13:37', '2022-12-07 05:18:38', 3),
(35, 38, 25, 'Dim sum', 2, 160, 'closed', '2022-12-08 03:56:23', '2022-12-08 03:56:49', 10),
(36, 38, 27, 'Lomos de merluza al pil pil con almejas y langostinos', 1, 180, 'in process', '2022-12-08 03:56:23', '2022-12-08 03:56:42', 11),
(37, 38, 32, 'Tofu apestoso', 2, 170, 'rejected', '2022-12-08 03:57:21', '2022-12-08 03:57:49', 13),
(38, 36, 28, 'Tacos al pastor', 4, 300, 'closed', '2022-12-08 03:59:31', '2022-12-08 03:59:48', 12),
(39, 36, 1, 'Risotto alla milanese', 2, 200, 'closed', '2022-12-08 03:59:31', '2022-12-08 03:59:43', 9),
(40, 37, 31, 'Sopa de fideos con vaca', 1, 120, 'closed', '2022-12-08 04:01:17', '2022-12-08 04:01:39', 13),
(41, 37, 27, 'Lomos de merluza al pil pil con almejas y langostinos', 4, 720, 'closed', '2022-12-08 04:01:17', '2022-12-08 04:01:34', 11),
(42, 37, 33, 'Huevos Rotos con Chorizo', 3, 90, 'in process', '2022-12-08 04:01:17', '2022-12-08 04:01:30', 14),
(43, 36, 27, 'Lomos de merluza al pil pil con almejas y langostinos', 2, 360, 'closed', '2022-12-09 15:02:50', '2022-12-09 15:04:40', 11),
(44, 36, 31, 'Sopa de fideos con vaca', 3, 360, 'rejected', '2022-12-09 15:02:50', '2022-12-09 15:05:38', 13);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
