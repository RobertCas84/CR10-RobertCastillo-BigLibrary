-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Nov 2020 um 02:13
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `big_library`
--
CREATE DATABASE IF NOT EXISTS `big_library` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `big_library`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author_first_name` varchar(255) NOT NULL,
  `author_last_name` varchar(255) NOT NULL,
  `ISBN_code` int(11) DEFAULT NULL,
  `short_description` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `publisher_size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `author_first_name`, `author_last_name`, `ISBN_code`, `short_description`, `publish_date`, `publisher_name`, `publisher_address`, `publisher_size`, `type`, `status`) VALUES
(1, 'Great Again', 'https://images-na.ssl-images-amazon.com/images/I/81ijdPhNFUL.jpg', 'Donald', 'Trump', 123456798, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', '2016-05-20', 'Plassen', 'Publisher Road 8', 'Big', 'Book', 'available'),
(3, 'The Green Mile', 'https://nathanburgessinsights.files.wordpress.com/2018/10/img_1794.jpg?w=584', 'Frank', 'Darabont', 987789456, '\r\nThe year is 1935. Paul Edgecomb is Head of Section E of Cold Mountain Penitentiary, where death row inmates are waiting to take their last walk: the Green Mile walk, a pale green linoleum hallway that leads to the electric chair . A path the prison guar', '0000-00-00', 'Universal Picture Customer Service', 'Yellow Road 120', 'Medium', 'DVD', 'available'),
(4, 'A promised land', 'https://obamabook.com/wp-content/uploads/2020/08/a-promised-land-barack-obama.png', 'Barack', 'Obama', 741852963, 'A compelling and deeply personal account of how history is made by the US President who inspired us to believe in the power of democracy.', '2020-11-17', 'Penguin', 'Penguien Street 48', 'Big', 'Book', 'reserved'),
(6, 'Becoming', 'https://imgs.chip.de/kyawKg_NnaY7NvXoWNS813aZC2s=/1200x0/filters:format(jpeg):fill(fff,true):upscale()/www.chip.de%2Fii%2F1%2F0%2F8%2F2%2F0%2F3%2F5%2F0%2F8%2Fbecoming-a92b765485cfb328.PNG', 'Rodolfo ', 'Matz', 12345687, 'New description 656', '2020-07-02', 'Mathias Pulver', 'Gasse4', 'big', 'book', 'available'),
(7, 'Borat', 'https://images-na.ssl-images-amazon.com/images/I/41ljgDGriKL._AC_.jpg', 'Sascha', 'Baron Cohen', 153957456, 'Jagshemash! After leaving Kazakhstan, Borat traveled to America to shoot a documentary about the country and its people. He drives back and forth through the country and meets \"real\" people in \"real\" life here and that sometimes has truly insane consequen', '2009-11-20', 'Twentieth Century Fox', 'Hollywood Avenue 5', 'Medium', 'DVD', 'available'),
(8, 'Le petit prince', 'https://m.media-amazon.com/images/I/41osScUvBOL.jpg', 'Antoine', 'Saint-Exupery', 1673492856, 'The story follows a young prince who visits various planets in space, including Earth, and addresses themes of loneliness, friendship, love, and loss. Despite its style as a children book, The Little Prince makes observations about life and human nature.', '2020-09-01', 'Herold VertriebsGmbH', 'Princeton street 205', 'Medium', 'Book', 'available'),
(9, 'Parfume', 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f5/PerfumeSuskind.jpg/220px-PerfumeSuskind.jpg', 'Patrick', 'Süsskind', 1245783256, 'In the eighteenth century there lived in France a man who was one of the most ingenious and hideous figures of this epoch, which was not poor in ingenious and hideous figures. The exciting story - fairytale, funny and at the same time terrifyingly frighte', '0000-00-00', 'Diogenes', 'Publisher Road 26', 'Medium', 'Book', 'reserved'),
(10, '', '', '', '', 0, '', '0000-00-00', '', '', '', '', ''),
(16, '', '', '', '', 0, '', '0000-00-00', '', '', '', '', ''),
(17, '', '', '', '', 0, '', '0000-00-00', '', '', '', '', ''),
(18, '', '', '', '', 0, '', '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(2, 'Robert Castillo', 'test@test.com', 'ecd71870d1963316a97e3ac3408c9835ad8cf0f3c1bc703527c30265534f75ae'),
(3, 'max mustermann', 'max@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
