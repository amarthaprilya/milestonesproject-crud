-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 02:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `reset_token` varchar(255) DEFAULT NULL,
  `token_expiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `reset_token`, `token_expiry`) VALUES
(1, 'Dina', 'Rizka', 'dina@gmail.com', '$2y$10$nIneYpGjxGzAKkDvxIfpJeTtJ/2stjDFnjGvog3eSIiIKSnxKqjna', '2024-12-21 10:35:40', NULL, NULL),
(9, 'Livi', 'alivi', 'livia@gmail.com', '$2y$10$mFb5dpsTYYwuK7Oqu9yAb.OOhUpioqg6xKqBZSw0IU15iWRKE4qLG', '2024-12-21 12:16:25', NULL, NULL),
(10, 'Irma', 'Laela', 'irma@gmail.com', '$2y$10$jAbyZ/X7mE/D3rw48sRBBeOe1mvhfeeW14xdLMAxyo1m6ZRRAYmVe', '2024-12-21 12:31:33', NULL, NULL),
(11, 'Bara', 'Bere', 'bara@gmail.com', '$2y$10$FaqHY1g/EkMmBuylUzu73uBRlC1JV0VqJ43KKy/erQseAgPJzOzgC', '2024-12-21 13:18:40', NULL, NULL),
(12, 'mas', 'agung', 'agung@gmail.com', '$2y$10$U/Nty.UHhchnC1sY9bAQRu6CmNCnAD2H7Cc7SlK0VuQrkwv8ioBtC', '2024-12-21 13:20:58', NULL, NULL),
(14, 'Bayu', 'Putra', 'bayu@gmail.com', '$2y$10$9X/8TjXNs3qzpGm1zJ9gUuenoMYvXFQ6ksBUaatMRlTmx7P0pCGxi', '2024-12-21 13:25:40', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
