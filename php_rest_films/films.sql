-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 28, 2019 at 09:13 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `films`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `story` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `name`, `genre`, `story`) VALUES
(1, 'beyond the law', 'action', 'A detective tries to find his son\'s killer with the help of a retired businessman and a police officer. He tries to do justice but faces problems.'),
(2, 'the room', 'action', 'This film is about a young couple who buy a house away from the city and go there to live, but soon find a room in the house where'),
(3, 'let it snow', 'comedy', 'A snowstorm hits a small Midwestern town on Christmas Eve, bringing together a group of high school students. They soon realize their lives and friendships are at odds, and Christmas morning will be nothing like before.'),
(4, 'Extreme Job', 'comedy', 'A team of experienced detectives decides to overthrow a secret gang by establishing a restaurant to overthrow the gang. But as their restaurant becomes famous, things change'),
(5, 'Crucible of the Vampire', 'scary', 'Young Isabel Museum Sends Out To Inspect Something Weird Like a Buried Cross Near Old Strange Hall'),
(6, 'Ghost in the Graveyard', 'scary', 'A ghost named Martha emerges in the real world in the mountainous town of Moriah and wants to take revenge on all the children who killed her');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
