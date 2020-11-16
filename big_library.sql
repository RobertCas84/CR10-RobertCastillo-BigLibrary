-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Nov 2020 um 11:51
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
(1, 'Great Again', 'https://images-na.ssl-images-amazon.com/images/I/81ijdPhNFUL.jpg', 'Donald', 'Trump', 98765432, 'For his fans, he promises the return of golden times. For his opponents he is either a liar, a loudmouth, a demagogue, a racist or much more.', '2016-07-12', 'Simon 6 Schuster Us', 'New York street 1', 'Big', 'Book', 'available'),
(3, 'The Green Mile', 'https://nathanburgessinsights.files.wordpress.com/2018/10/img_1794.jpg?w=584', 'Frank', 'Darabont', 987789456, '\r\nThe year is 1935. Paul Edgecomb is Head of Section E of Cold Mountain Penitentiary, where death row inmates are waiting to take their last walk: the Green Mile walk, a pale green linoleum hallway that leads to the electric chair . A path the prison guar', '0000-00-00', 'Universal Picture Customer Service', 'Yellow Road 120', 'Medium', 'DVD', 'available'),
(4, 'A promised land', 'https://obamabook.com/wp-content/uploads/2020/08/a-promised-land-barack-obama.png', 'Barack', 'Obama', 741852963, 'A compelling and deeply personal account of how history is made by the US President who inspired us to believe in the power of democracy.', '2020-11-17', 'Penguin', 'Penguien Street 48', 'Big', 'Book', 'reserved'),
(5, 'next2 day3', 'image 456', 'Max', 'Mustermann', 159357456, 'Uopdate ', '2020-06-11', 'Martha Max', 'Korngasse', 'bigq', 'book', 'available'),
(6, 'Becoming', 'image 4', 'Rodolfo ', 'Matz', 12345687, 'New description 656', '2020-07-02', 'Mathias Pulver', 'Gasse4', 'big', 'book', 'available'),
(7, 'Borat', 'https://images-na.ssl-images-amazon.com/images/I/41ljgDGriKL._AC_.jpg', 'Sascha', 'Baron Cohen', 153957456, 'Jagshemash! After leaving Kazakhstan, Borat traveled to America to shoot a documentary about the country and its people. He drives back and forth through the country and meets \"real\" people in \"real\" life here and that sometimes has truly insane consequen', '2009-11-20', 'Twentieth Century Fox', 'Hollywood Avenue 5', 'Medium', 'DVD', 'available'),
(8, 'Le petit prince', 'https://m.media-amazon.com/images/I/41osScUvBOL.jpg', 'Antoine', 'Saint-Exupery', 1673492856, 'The story follows a young prince who visits various planets in space, including Earth, and addresses themes of loneliness, friendship, love, and loss. Despite its style as a children book, The Little Prince makes observations about life and human nature.', '2020-09-01', 'Herold VertriebsGmbH', 'Princeton street 205', 'Medium', 'Book', 'available'),
(9, 'Parfume', 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f5/PerfumeSuskind.jpg/220px-PerfumeSuskind.jpg', 'Patrick', 'Süsskind', 1245783256, 'In the eighteenth century there lived in France a man who was one of the most ingenious and hideous figures of this epoch, which was not poor in ingenious and hideous figures. The exciting story - fairytale, funny and at the same time terrifyingly frighte', '0000-00-00', 'Diogenes', 'Publisher Road 26', 'Medium', 'Book', 'reserved'),
(10, 'The Alchemist', 'https://exlibris.azureedge.net/covers/9780/7225/3293/5/9780722532935xxl.jpg', 'Paulo', 'Coelho', 15357564, 'Santiago, an Andalusian shepherd, has a recurring dream: a treasure lies ready for him at the foot of the pyramids. Should he give up the familiar for possible wealth? Santiago is brave enough to follow his dream.', '2013-01-22', 'Diogenes', 'Garden Road 596', 'Big', 'Book', 'available'),
(11, 'A new day', 'image NEW', 'FirstName', 'LastName', 12345687, 'A happy monday', '2020-11-12', 'Robert Castillo', 'Raod 1', 'medium', 'book', 'available');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
