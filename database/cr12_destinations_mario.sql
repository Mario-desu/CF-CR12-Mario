-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Mai 2021 um 10:10
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr12_destinations_mario`
--
CREATE DATABASE IF NOT EXISTS `cr12_destinations_mario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr12_destinations_mario`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `destinations`
--

CREATE TABLE `destinations` (
  `locId` int(11) NOT NULL,
  `locName` varchar(55) NOT NULL,
  `locCountry` varchar(55) NOT NULL,
  `locPrice` decimal(11,2) NOT NULL,
  `duration` int(3) NOT NULL,
  `departure` date NOT NULL,
  `description` text DEFAULT NULL,
  `latitude` decimal(11,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `destinations`
--

INSERT INTO `destinations` (`locId`, `locName`, `locCountry`, `locPrice`, `duration`, `departure`, `description`, `latitude`, `longitude`, `image`) VALUES
(2, 'Treviso', 'Italy', '699.00', 5, '2021-08-13', 'Treviso (Latin: Tarvisium) is a city in northeastern Italy, and the capital of the province of the same name. It is in the eastern part of the Veneto region, north of Venezia and south of Belluno. The city itself has 82,399 inhabitants (2001).  ', '45.66889500', '12.25653900', '60956fb93f3d5.jpg'),
(3, 'San Sebastián', 'Spain', '999.00', 6, '2021-08-20', 'San Sebastian boasts one of the best in-city beaches in Europe. It is quite unusual feeling that you can sunbathe and swim right next to major historical buildings and churches. Surfers are in abundance here.  The city is quite small and cozy, featuring many seafood restaurants, several beaches, tons of pintxos bars and a choice of designer clothes shops.', '43.31153000', '-1.97216300', '60956f97d75bd.jpg'),
(4, 'Miami', 'USA', '1999.00', 7, '2021-09-10', 'Although tourists generally consider Miami Beach to be part of Miami, it is in actuality its own municipality. Located on a barrier island east of Miami and Biscayne Bay, Miami Beach is home to a large number of beach resorts and is one of the most popular spring break party destinations in the world. This article only covers the city of Miami, not Miami Beach. Some other sites associated with Miami, like the Miami Zoo and the Miami Dolphins football team, are located in other suburbs within Miami-Dade County.', '43.31115300', '-1.97216300', '6095a55bcb51d.jpg'),
(6, 'Belize City', 'Belize', '3999.00', 14, '2021-07-30', 'Belize City is the largest city in Belize. It is on a small peninsula protruding into the Caribbean Sea. It was the capital city until flooding and other damage from a hurricane in 1961 prompted the government to relocated to Belmopan, closer to the geographic center of the country. Known for natural attractions. Recommended places to visit are Baron Bliss Light, Bliss Institute and Holy Redeemer Cathedral.', '17.50377981', '-88.21007372', '6095a95d49647.jpg'),
(7, 'Kufstein', 'Austria', '399.00', 3, '2021-08-20', 'Kufstein is city in the Austrian state of Tyrol, with a population of ca. 18,000 inhabitants, making it the second largest city in Tyrol after its capital Innsbruck. Most travellers visiting the Austrian Alps pass through Kufstein either by train, coach or car as it is the first city south of the German border at the end of the Inn Valley.', '47.58600086', '12.17265373', '6095aaa9177b8.jpg'),
(8, 'Bora Bora', 'French Polynesia', '3999.00', 14, '2021-11-18', 'Bora Bora is a volcanic island in the Society Islands archipelago of French Polynesia. The Polynesian island in the South Pacific is ranked at the top of the list when it comes to most remarkably beautiful in the world. The best time to travel is in May.', '-16.50211431', '-151.74122455', '6095af0be2044.jpg'),
(9, 'Nairobi', 'Kenya', '2999.00', 12, '2021-11-20', 'Nairobi is known as the safari capital of Africa, however the city has still managed to keep up with modernization. Unlike other cities, Nairobi is surrounded by 113 km² (70 mi²) of plains, cliffs and forest that makes up the city’s Nairobi National Park. The city is filled with many things to do during the day and the night. Tourists can have their pick from numerous safaris (wildlife, cultural, sport, adventure, scenic and specialist), ecotourism tours, restaurants, culture, shopping and entertainment. While in Nairobi, tourists can also engage in numerous sports from golf, rugby, athletics, polo, horse-racing, cricket and football (soccer). ', '-1.29291036', '36.82439247', '6095b069be9b6.jpg'),
(10, 'Penzance', 'UK', '699.00', 6, '2021-10-29', 'Penzance (Cornish: Pennsans) is the most south-westerly town in Cornwall. Famous for its association with the Gilbert and Sullivan opera (now often played as a musical) The Pirates of Penzance, the town is an ideal base for exploring the Penwith area of Cornwall. It is increasingly attracting those interested in cultural tourism due to its long association with the arts.  Penzance is the main link with the Isles of Scilly via the spring and summer-only ferry.', '50.12025766', '-5.53802471', '6095b37b97d9f.jpg'),
(11, 'Hanoi', 'Vietnam', '2999.00', 10, '2021-07-30', 'Hanoi (Vietnamese: Hà Nội), the capital of Vietnam, and also its second largest city, is a fascinating blend of East and West, with Chinese influence from centuries of dominance, and French je ne sais quoi from its colonial past. It was largely unspoiled by the modern architecture of the 1970s and 80s, and is now undergoing a rapid transformation that makes it a rising star in Southeast Asia.', '21.03171055', '105.84168588', '6095b4df9dd1f.jpg'),
(12, 'Lisbon', 'Portugal', '999.00', 6, '2021-08-13', 'Lisbon (Portuguese: Lisboa) is the capital of Portugal situated on seven hills at the wide mouth of the river Tagus (Tejo) where it meets the Atlantic Ocean. A port city, an economic centre, a cultural powerhouse and a thriving mix of Portugals rich history and vivid contemporary culture, Lisbon enchants travellers with its white bleached limestone buildings, intimate alleyways, and an easy going charm that makes it a popular year round destination.', '38.71937008', '-9.13309944', '6095bdb5b4821.jpg'),
(13, 'Las Palmas', 'Spain', '1799.00', 8, '2021-05-29', 'Looming large over the waterfront, Palmas La Seu Cathedral is a symbol of the city. One of the largest cathedrals in the world, this Gothic masterpiece is one of Majorcas must-see sights. With this ticket, you can marvel at its stunning architecture, discover the rich history of the building, and admire the illuminated stained-glass windows.', '28.10989156', '-15.43205517', '6095c2374e73f.jpg'),
(14, 'Takamatsu', 'Japan', '3555.00', 14, '2021-05-22', 'Takamatsu (高松) is the largest city in Kagawa Prefecture on the island of Shikoku, Japan. The city developed over many years as a port town at one of the primary entry points into Shikoku and is therefore known as the \"Gateway to Shikoku\". It has come to be known as the \"Udon Kingdom\".', '34.32745725', '134.02486891', '6095c3a6b1eb7.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`locId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `destinations`
--
ALTER TABLE `destinations`
  MODIFY `locId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
