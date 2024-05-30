-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 30 mai 2024 à 10:51
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tutorail`
--

-- --------------------------------------------------------

--
-- Structure de la table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `symptoms` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `crud`
--

INSERT INTO `crud` (`id`, `first_name`, `last_name`, `email`, `gender`, `password`, `age`, `symptoms`) VALUES
(7, 'doura', 'abed', 'doura12@gmail.com', 'female', 'g51gta', 20, ''),
(8, 'yasmine', 'Alim', 'linaalim13@gmail.com', 'female', 'bha23a', 20, ''),
(9, 'Amr', 'Hosna', 'hosna@gmail.com', 'female', 'jbjovd,i', 35, ''),
(19, 'Amr', 'Hosna', 'hosnqw@gmail.com', 'female', 'nohewenjiu', 56, '');

-- --------------------------------------------------------

--
-- Structure de la table `médecins`
--

CREATE TABLE `médecins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `médecins`
--

INSERT INTO `médecins` (`id`, `first_name`, `last_name`, `email`, `gender`, `password`, `age`) VALUES
(8, 'medco', 'roos', 'roos@gmail.com', 'female', 'qweqwe', 53),
(9, 'yasmine', 'Alim', 'linaalim13@gmail.com', 'female', 'aba_doctor_gen', 43);

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` int(12) NOT NULL,
  `symptoms` text NOT NULL,
  `chronic_disease` varchar(355) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `last_name`, `email`, `gender`, `password`, `age`, `phone`, `symptoms`, `chronic_disease`, `created_at`) VALUES
(1, 'Amr', 'Hosna', 'hosna@gmail.com', 'female', 'kvyiiuh', 66, 0, 'nbuijop\r\njjioj\r\nkk', '', '2024-05-29 17:21:21'),
(3, 'Albert', 'Einistan', 'albert423@gmail.com', 'male', 'mmmmm', 25, 0, '•	Brûlures en urinant\r\n', '', '2024-05-29 18:28:43'),
(6, 'albert', 'inchtayn', 'hosntya@gmail.com', 'female', 'iyh', 23, 0, 'je suis maladie', '', '2024-05-29 21:03:52'),
(7, 'mouha', 'roos', 'roos@gmail.com', 'male', 'mljhk', 98, 98766544, 'njkmljih', 'rien', '2024-05-30 07:41:34'),
(10, 'mouha', 'roos', 'roos1377@gmail.com', 'male', 'jknfxrtfc', 98, 98766544, 'njkmljih', 'rien', '2024-05-30 07:46:31'),
(12, 'drt', 'artysan', 'dfgn@gmail.com', 'male', 'ghfyxhjhk', 8, 9876543, 'lyghjbtf', 'nbkyukvyt', '2024-05-30 07:50:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `médecins`
--
ALTER TABLE `médecins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `médecins`
--
ALTER TABLE `médecins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
