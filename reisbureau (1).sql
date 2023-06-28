-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 10:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reisbureau`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `firstname`, `lastname`, `password`) VALUES
(1, 'boendemi@gmail.com', 'Bo', 'en Demi', 'boendemi');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trips_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `people` int(11) NOT NULL,
  `confirm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `trips_id`, `startdate`, `enddate`, `people`, `confirm`) VALUES
(20, 2, 1, '2023-06-28', '2023-07-28', 2, 0),
(21, 2, 1, '2023-08-30', '2023-10-28', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` float NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`) VALUES
(1, 'Spanje'),
(2, 'Portugal\r\n'),
(3, 'Griekenland'),
(4, 'Frankrijk');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` float NOT NULL,
  `city` varchar(255) NOT NULL,
  `country_id` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `city`, `country_id`) VALUES
(1, 'Barcelona', 1),
(2, 'Madrid', 1),
(3, 'Blanes', 1),
(4, 'Lisabon', 2),
(5, 'Porto', 2),
(6, 'Athene', 3),
(7, 'Rhodos', 3),
(8, 'Parijs', 4),
(9, 'Lyon', 4);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `hotel` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `path` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `id` int(11) NOT NULL,
  `place_id` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`hotel`, `price`, `path`, `description`, `id`, `place_id`) VALUES
('Andante Hotel', 500, './img/dest-sample.jpg', 'Op zoek naar een hotel met centrale ligging in Barcelona? Andante Hotel ligt op een steenworp afstand van Las Ramblas en beschikt over een fijn dakterras met zwembad. Het driesterren hotel biedt daarnaast een fitnessruimte en gratis WiFi. Dat wordt een heerlijke stedentrip!', 1, 1),
('Hotel 4 Barcelona', 324, './img/dest-sample.jpg', 'Op zoek naar een fijne uitvalsbasis voor een stedentrip in Barcelona? Hotel 4 Barcelona is met haar ligging vlakbij het strand ideaal voor een zomers tripje. Je kunt bij dit viersterren hotel rekenen op comfortabele kamers, een wellnesscentrum en gezellige bar. Vamos!', 2, 1),
('Best Front Maritim', 123, './img/dest-sample.jpg', 'Het zeer moderne en verzorgde BEST Front Maritim biedt een uitstekende prijs-kwaliteitverhouding. Een ideaal uitgangspunt om het strand en de mooie stad Barcelona te combineren. Met de metro ben je zo in het centrum! Ga winkelen en breng een bezoek aan de Sagrada Família, een van de hoogtepunten in Barcelona!', 3, 1),
('Hotel NYX Madrid', 90, './img/dest-sample.jpg', 'Hotel NYX Madrid is de ideale uitvalsbasis in de Spaanse hoofdstad. Neem op warme dagen een verkoelende duik in het zwembad of relax op het dakterras. Het modern ingerichte viersterren hotel is dé plek om te ontspannen tijdens een actieve stedentrip.', 4, 2),
('Hotel Acta Madfor', 422, './img/dest-sample.jpg', 'Hotel Acta Madfor heeft een rustige ligging én toch zijn alle bezienswaardigheden van Madrid binnen handbereik. Je pakt zo de metro naar hartje centrum. Sluit avonden af in de sfeervolle lounge van het driesterren hotel of geniet nog even van het uitzicht vanaf het dakterras. Dit wordt gegarandeerd een geslaagde trip in de Spaanse hoofdstad!', 5, 2),
('Dorothy', 199, './img/dest-sample.jpg', 'Dorothy ligt aan een doodlopende straat. U kunt uw auto veilig en uit de zon parkeren in de garage.Dorothy is gelegen boven straatniveau. De entree is op de eerste etage. U bereikt de entree via een trap omhoog. Dorothy is een volledig vrijstaande villa met privezwembad.', 6, 3),
('Medinilla', 338, './img/dest-sample.jpg', 'Dit prachtige hotel is gelegen bij de kust. Ook zijn groepen jongeren toegestaan.', 7, 3),
('Lisbon Serviced Apartments - Santos', 137, './img/dest-sample.jpg\r\n', 'Deze accommodatie is praktisch gelegen in Bairro Alto in Lissabon, waardoor u dichtbij attracties en interessante dineergelegenheden bent. Deze accommodatie met 4 sterren zit vol met faciliteiten op locatie om de kwaliteit en het plezier van uw verblijf te verbeteren.', 8, 4),
('Pateo Saudade Lofts', 158, './img/dest-sample.jpg', 'Begin uw reis goed met een verblijf bij deze accommodatie, die gratis wifi in alle kamers aanbiedt. Strategisch gelegen in Baixa, waardoor u makkelijk toegang heeft tot lokale attracties en bezienswaardigheden. Vertrek niet voordat u een bezoek brengt aan de beroemde Oceanário de Lisboa.', 9, 4),
('Residencial do Areeiro', 93, './img/dest-sample.jpg', 'Begin uw reis goed met een verblijf bij deze accommodatie, die gratis wifi in alle kamers aanbiedt. Deze accommodatie is praktisch gelegen in Sao Joao de Deus in Lissabon, waardoor u dichtbij attracties en interessante dineergelegenheden bent. Vertrek niet voordat u een bezoek brengt aan de beroemde Oceanário de Lisboa.', 10, 4),
('Hotel Carris Porto Ribeira', 504, './img/dest-sample.jpg', 'Hotel Carris Porto Ribeira is een luxe adres voor een heerlijk verblijf in Porto. De kamers zijn modern en van alle gemakken voorzien. Hier rust je iedere nacht weer goed uit na een dagje sightseeing. Er is een bar om te proosten op de vakantie en een mooi restaurant waar je gezellig iets kunt eten. Maar in het centrum van Porto eten kan natuurlijk ook. Prettige vakantie!', 11, 5),
('Hotel Da Bolsa', 405, './img/dest-sample.jpg', 'Hotel Da Bolsa ligt in het centrum van Porto en bevindt zich ook nog eens in een prachtig gebouw. Perfect dus voor als je deze mooie stad wil gaan ontdekken. Op dit adres heb je alles bij de hand wat je nodig hebt voor een paar dagen weg. De kamers zijn smaakvol ingericht en van alle gemakken voorzien. Hier val je vast en zeker snel in slaap na een dagje sight-seeing. De rest van het hotel is ook ingericht met warme tinten, waardoor je je hier direct thuis voelt. Geniet iedere dag van een heerlijk ontbijt en proost ’s avonds samen bij de bar!', 12, 5),
('Athens Center Square', 506, './img/dest-sample.jpg', 'Het Athens Center Square staat midden in de wijk waar ook de Atheners graag komen, want Psiri is het bruisende hart van Athene. Vanuit het hotel loop je direct de centrale groente- en fruitmarkt op. De strategische plek maakt dat je tijdens je stedentrip gemakkelijk de galeries en het Archeologisch museum kunt bezoeken. De stijlvolle kamers van hotel Athens Center hebben allemaal een unieke inrichting en kleur. Vanaf de begane grond tot aan de bovenste etage wandel je als het ware door een enorm kleurenpalet van blauw, geel, groen en oranje. Met het heerlijke Griekse ontbijtbuffet begint de dag altijd goed in deze historische hoofdstad. Voor de belangrijkste troef ga je naar het dak voor een adembenemend uitzicht vanaf het terras op.... de Akropolis.', 13, 6),
('Novus City', 264, './img/dest-sample.jpg', 'Novus City is een fijn en modern stadshotel gelegen in het prachtige Athene. Dit 4-sterrenhotel ligt op loopafstand van diverse bezienswaardigheden en ook ligt er een metrostation recht voor de deur. Na een dag rondlopen in Athene kun je een heerlijke duik nemen in het zwembad op het dakterras en daarna genieten van een maaltijd in het gezellige restaurant. Ook is er een bar aanwezig op de 8e verdieping. En verder biedt het hotel moderne en levendig ingerichte kamers verdeelde over kleurrijke verdiepingen. De goede faciliteiten, excellente service en de gunstige locatie maken Novus City het perfecte verblijf tijdens een bijvoorbeeld een stedentrip of weekendje weg naar Athene! ', 14, 6),
('Marina', 143, './img/dest-sample.jpg', 'Marina is een kleinschalig 3-sterrenhotel gelegen in de multiculturele- en commerciële wijk van Athene, perfect voor een stedentrip. Begin je dag met een lekker ontbijtje zodat je goed gevuld op pad kunt. Na een lange dag gewandeld te hebben kun je even ontspannen in de bar met een lekker drankje of je trekt je terug in je comfortabele kamer. Verblijf tijdens je reis naar Athene in hotel Marina!', 15, 6),
('Naillac Boutique Hotel', 363, './img/dest-sample.jpg', 'Het Naillac Boutique Hotel ligt in Rhodos-stad en biedt een seizoensgebonden buitenzwembad, een tuin, een terras en een bar. Dit 4-sterrenhotel biedt gratis WiFi, roomservice en een 24-uursreceptie.', 16, 7),
('Ancient Knights Luxury Suites', 265, './img/dest-sample.jpg', 'Ancient Knights Luxury Suites is gunstig gelegen in Rhodos-stad en biedt een à-la-carteontbijt en gratis WiFi in alle ruimtes.', 17, 7),
('Vanik Suites', 324, './img/dest-sample.jpg', 'Vanik Suites ligt in Kallithea Rhodos, op 600 meter van het strand van Katafygio, en beschikt over een tuin en uitzicht op het zwembad.', 18, 7),
('B&B HOTEL Paris Porte des Lilas', 143, './img/dest-sample.jpg', 'B&B Hôtel Porte des Lilas ligt in het 19e arrondissement van Parijs. Deze accommodatie heeft een terras, bagageopslag en een 24-uursreceptie. Het metrostation Porte des Lilas is te voet in 5 minuten bereikbaar. Daarvandaan reist u rechtstreeks naar Hôtel de Ville.', 19, 8),
('The ReMIX Hotel', 144, './img/dest-sample.jpg', 'The ReMIX Hotel is gerenoveerd door de bekende ontwerper Saar Zafrir en biedt een bar, een co-workingruimte, 10 vergaderruimtes en een fitnessruimte in de trendy wijk La Villette in Parijs.', 20, 8),
('Hôtel Charlemagne', 254, './img/dest-sample.jpg', 'Hôtel Charlemagne ligt in het centrum van Lyon, op 5 minuten te voet van de TGV- en metrostations Lyon-Perrache. Het biedt accommodaties met airconditioning en gratis WiFi. Elke kamer van Hôtel Charlemagne is voorzien van een satelliet-tv en een eigen badkamer. Sommige kamers hebben ook een eigen balkon.', 21, 9),
('Campanile Lyon Centre - Berges du Rhône', 206, './img/dest-sample.jpg', 'Campanile Lyon Centre - Berges du Rhône offers free WiFi access. It is just a 2-minute walk from the Guillotière Metro Station and an 8-minute drive from the Part-Dieu Train Station.Set over 8 floors, rooms at Campanile are decorated in a simple style and feature air conditioning. Please note that only the TV in the bar broadcasts satellite channels and Canal+. The private bathrooms are complete with a bath or shower and a hairdryer. Four of the guest rooms are adapted for wheelchair access.', 22, 9),
('test', 12, 'test', 'test', 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`) VALUES
(2, 'Bo', 'Leenders', 12345, 'boleenders01@gmail.com', '1234'),
(3, 'Bobo', 'Leenders', 12345678, 'bobo2001@gmail.com', 'bobo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
