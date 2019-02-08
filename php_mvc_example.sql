-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2019 at 12:46 PM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_mvc_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `start_date` datetime NOT NULL,
  `stop_date` datetime NOT NULL,
  `alias` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `id_author` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `short_content`, `content`, `start_date`, `stop_date`, `alias`, `preview`, `id_author`) VALUES
(1, 'Skiing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.', '2019-02-14 00:00:00', '2019-02-16 00:00:00', 'sciin', '/images/img6.jpg', 1),
(2, 'Snowboarding', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia turpis sem, non cursus elit sodales a. Sed commodo felis in massa imperdiet aliquet. Sed porttitor ornare placerat. Quisque gravida dolor non nisl dictum vehicula. Phasellus eu tellus velit. Curabitur a sollicitudin nibh, a eleifend lacus. Quisque tristique eget eros vitae tempus. Sed eu mauris lacinia, consectetur purus vel, gravida erat. Vestibulum cursus felis sit amet nunc ultrices volutpat. Nullam velit tellus, cursus id sollicitudin vitae, dignissim ac nibh. Nulla porta quis dui nec malesuada. Morbi auctor, lacus nec pulvinar egestas, lectus purus dapibus ante, id tristique lorem arcu sit amet libero. Suspendisse potenti. Phasellus tincidunt pretium mi, a ornare orci.', '2019-02-10 00:00:00', '2019-02-12 00:00:00', 'snowboarding', '/images/img4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `id_role`) VALUES
(1, 'Kate', 'kate@gmail.com', 'kate', 1),
(2, 'Vasya', 'vasya@gmail.com', 'vasya', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'subscribe'),
(3, 'author');

-- --------------------------------------------------------

--
-- Table structure for table `visit_event`
--

CREATE TABLE `visit_event` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_event` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias_event` (`alias`),
  ADD KEY `id_author` (`id_author`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_event`
--
ALTER TABLE `visit_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `visit_event`
--
ALTER TABLE `visit_event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `user_roles` (`id`);

--
-- Constraints for table `visit_event`
--
ALTER TABLE `visit_event`
  ADD CONSTRAINT `visit_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `visit_event_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
