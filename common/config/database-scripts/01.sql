SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
--
-- База данных: `site-main`
--
CREATE DATABASE IF NOT EXISTS `site-main` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `site-main`;

CREATE TABLE `site-feedback` (
  `id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` tinytext NOT NULL,
  `addr` varchar(15) NOT NULL,
  `ref_url` tinytext NOT NULL,
  `user_agent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `site-feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_at` (`created_at`);

ALTER TABLE `site-feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
