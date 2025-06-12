-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Jun 2025 um 12:02
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `php_guestbook`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `entries`
--

CREATE TABLE `entries` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `entries`
--

INSERT INTO `entries` (`id`, `name`, `title`, `content`) VALUES
(8, 'Familie Müller', ' Erholsamer Aufenthalt in Dortmund!', 'Vielen Dank für die herzliche Gastfreundschaft! Wir haben die Zeit in Ihrem Hotel sehr genossen. Die Zimmer waren sehr sauber und gemütlich, und das Frühstück war köstlich und reichhaltig. Die Lage ist super, um die Stadt zu erkunden. Wir kommen gerne wieder!'),
(9, 'Max Mustermann', 'Perfekter Zwischenstopp auf unserer Reise', 'Ein wunderbares Hotel für einen kurzen Aufenthalt. Alles war unkompliziert, vom Check-in bis zum Check-out. Besonders hervorzuheben ist das freundliche Personal an der Rezeption, das uns tolle Tipps für den Abend gegeben hat. Das Bett war sehr bequem – genau das, was wir nach einem langen Tag brauchten. Absolut empfehlenswert!'),
(10, 'Anna Schmidt & Tom Klein', 'Gemütlich und zentral – Top!', 'Unser Kurztrip nach Dortmund war dank Ihres Hotels ein voller Erfolg! Wir waren beeindruckt von der Sauberkeit und der angenehmen Atmosphäre. Die Anbindung an öffentliche Verkehrsmittel ist hervorragend, und wir konnten alles bequem erreichen. Wir haben uns rundum wohlgefühlt und kommen bestimmt wieder, wenn wir in der Gegend sind.'),
(11, 'Dr. Eva Meier', ' Angenehmer Business-Aufenthalt', 'Als Geschäftsreisende schätze ich Effizienz und Komfort. Beides habe ich in Ihrem Hotel gefunden. Das WLAN war stabil, der Schreibtisch im Zimmer geräumig und die Ruhe hat mir ermöglicht, mich auf meine Arbeit zu konzentrieren. Das Frühstück war pünktlich serviert und frisch. Vielen Dank für den angenehmen Aufenthalt!'),
(12, 'Familie Schneider', 'Kurzurlaub in Dortmund – super Hotel!', 'Wir hatten einen tollen Aufenthalt in Ihrem Hotel! Die Kinder haben sich im Zimmer sehr wohlgefühlt und die Nähe zum Park war perfekt. Das Personal war immer sehr aufmerksam und hilfsbereit. Wir werden Sie auf jeden Fall weiterempfehlen und freuen uns schon auf den nächsten Besuch!'),
(13, 'Lena Bauer', 'Angenehme Übernachtung nach Konzertbesuch', 'Nach einem langen Konzertabend war Ihr Hotel die perfekte Wahl für eine erholsame Nacht. Das Zimmer war ruhig, das Bett unglaublich bequem und der Check-in auch spät in der Nacht noch problemlos. Vielen Dank für den angenehmen Service!'),
(14, 'Peter & Sabine Sommer', 'Dortmund erkundet – mit optimalem Startpunkt!', ' Von Ihrem Hotel aus konnten wir Dortmund hervorragend erkunden. Die zentrale Lage ist unschlagbar! Unser Zimmer war sehr sauber und gemütlich, und wir haben die ruhige Atmosphäre geschätzt. Ein großes Lob an das gesamte Team für die Freundlichkeit und Hilfsbereitschaft.'),
(15, 'Herr M. Weber', 'Effizienter und komfortabler Business-Trip', 'Für meine Geschäftsreise war das Hotel ideal. Das WLAN war ausgezeichnet und ich konnte im Zimmer gut arbeiten. Das Frühstück bot eine gute Auswahl und der Service war schnell und professionell. Ein zuverlässiger Partner für jeden, der geschäftlich in Dortmund unterwegs ist.'),
(16, 'Die Reisetanten aus Hamburg', 'Herzlich empfangen, wunderbar gewohnt!', 'Ein herzliches Dankeschön für die Gastfreundschaft! Wir haben uns sofort willkommen gefühlt. Die Zimmer waren blitzsauber und es fehlte uns an nichts. Besonders gefallen hat uns die persönliche Note. Wir haben den Aufenthalt in Dortmund sehr genossen und kommen gerne wieder auf einen Kaffee vorbei!'),
(17, 'Jens Richter', 'BVB-Trip gelungen dank bestem Hotel!', 'Als eingefleischter BVB-Fan war die Nähe zum Stadion unschlagbar! Aber auch abgesehen davon war das Hotel top: freundliches Personal, gutes Frühstück und ein sehr komfortables Zimmer. Perfekt für alle, die Dortmund erleben wollen. Komme definitiv wieder!');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
