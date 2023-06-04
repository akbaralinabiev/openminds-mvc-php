-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 07:19 AM
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
-- Database: `openminds`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(28, 1, 'Why was the F-16 introduced although the F-15 was better in every possible way?', 'One of the key advantages of the F-16 was its lower cost compared to the F-15, making it more affordable for countries with smaller defense budgets or those that did not need the capabilities of the F-15. Additionally, the F-16 could be used in a wider range of missions than the F-15, making it a more versatile aircraft.', '2023-05-30 17:02:42'),
(32, 1, 'Can a civilian buy a military jet and fly it?', 'Yes, civilians can buy fighter jets as long as the plane has been demilitarized, which means that all weapons and radar technology have been removed. Demilitarized fighter jets can be purchased by members of the general public, and civilians can even fly them provided they have the relevant credentials, such as a certification, instrument rating, and at least a US third-class medical certificate or equivalent.\r\n\r\n\r\nHowever, there are tight restrictions on the type of fighter jets sold to civilians, and the purchase will be subject to the approval of numerous government agencies.\r\n\r\nBut before you go - a click on the upvote button will make both of us happy.', '2023-05-30 18:05:24'),
(33, 1, 'Can animals establish a traumatic bond?', 'A farmer put a camera because he heard the dogs barking every night, and he saw this. The leopard comes every night to meet the cow and the cow licks its head.\r\n\r\nThe man spoke with the previous owner of the cow and found out that the leopard&#39;s mother had died when it was only twenty days old and since then the cow had fed the leopard with her milk. Therefore, the leopard thinks that the cow is her mother and comes every night to see her.\r\n\r\nUpvote if you liked it.\r\n\r\nThank you for reading!', '2023-05-30 18:25:41'),
(34, 1, 'Can you share some screenshots worth of 700k+ upvotes?', 'I&#39;m 32 years old, and I don&#39;t think that far ahead about these things.\r\n\r\nI&#39;ve always lived and enjoyed the present moment.\r\n\r\nI had long relationships, some were beautiful, and some were lessons.\r\n\r\nI&#39;ve been single for a while and I don&#39;t have a problem with that, I don&#39;t want to be in a relationship at all costs. That doesn&#39;t mean I&#39;m bitter about the whole world and the male gender, because I&#39;ve had plenty of time to look at myself and my mistakes and learn from them. So next time I don&#39;t pass on my insecurities to someone who&#39;s a good person and wants to be with me.', '2023-05-30 18:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Akbarali', 'akbaralinabiev14@gamil.com', '$2y$10$eayRNDQeWnvTLvLJKVCFfeg5X8VfSHHejWwLF3LXSi2j2OcsnuWpC', '2023-05-30 16:18:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
