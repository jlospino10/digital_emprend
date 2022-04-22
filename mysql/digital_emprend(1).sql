-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2022 at 09:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_emprend`
--

-- --------------------------------------------------------

--
-- Table structure for table `config_web`
--

CREATE TABLE `config_web` (
  `logo` varchar(500) NOT NULL,
  `tittle` varchar(500) NOT NULL,
  `image_login` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config_web`
--

INSERT INTO `config_web` (`logo`, `tittle`, `image_login`, `description`) VALUES
('0', '0', 'Captura de pantalla de 2022-03-15 20-19-48.png', '0');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id_document` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `info_user`
-- (See below for the actual view)
--
CREATE TABLE `info_user` (
`id_user` int(11)
,`full_name` varchar(100)
,`email` varchar(100)
,`password` varchar(100)
,`pais` varchar(100)
,`creator` varchar(100)
,`date_stop` date
,`licencia_stop` date
,`paypal` varchar(100)
,`nequi` varchar(100)
,`daviplata` varchar(100)
,`otro` varchar(500)
,`status` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `info_users`
-- (See below for the actual view)
--
CREATE TABLE `info_users` (
`id_user` int(11)
,`full_name` varchar(100)
,`email` varchar(100)
,`pais` varchar(100)
,`password` varchar(100)
,`status` varchar(100)
,`date_stop` date
,`licencia_stop` date
,`creator` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id_payment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `paypal` varchar(100) NOT NULL,
  `nequi` varchar(100) NOT NULL,
  `daviplata` varchar(100) NOT NULL,
  `otro` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id_payment`, `id_user`, `paypal`, `nequi`, `daviplata`, `otro`) VALUES
(14, 16, 'jlospino10@mail.com', '3128420188', '3128420188', 'JGKOLUJGOIGUBIUGBIOGBOLGB GHFUVU7TFV BJHGVI8GYB JH');

-- --------------------------------------------------------

--
-- Table structure for table `payment_confirm`
--

CREATE TABLE `payment_confirm` (
  `id_confirm` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `creator` varchar(100) DEFAULT NULL,
  `document` varchar(100) NOT NULL,
  `text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_confirm`
--

INSERT INTO `payment_confirm` (`id_confirm`, `id_user`, `creator`, `document`, `text`) VALUES
(9, 16, 'fghg', 'Captura de pantalla de 2022-03-14 08-00-09.png', 'ya');

--
-- Triggers `payment_confirm`
--
DELIMITER $$
CREATE TRIGGER `change_status_users` BEFORE INSERT ON `payment_confirm` FOR EACH ROW UPDATE users set users.id_status=2 WHERE id_user=new.id_user
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `name`) VALUES
(1, 'activo'),
(2, 'pendiente'),
(3, 'inactivo');

-- --------------------------------------------------------

--
-- Stand-in structure for view `this_users`
-- (See below for the actual view)
--
CREATE TABLE `this_users` (
`id_user` int(11)
,`full_name` varchar(100)
,`email` varchar(100)
,`creator` varchar(100)
,`pais` varchar(100)
,`status` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT 'assets/image/image_profile/profile.png',
  `pais` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `id_payment` int(11) DEFAULT NULL,
  `id_status` int(11) NOT NULL,
  `creator` varchar(100) NOT NULL,
  `date_start` date NOT NULL,
  `date_stop` date NOT NULL,
  `licencia_stop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `full_name`, `email`, `password`, `photo`, `pais`, `phone`, `id_payment`, `id_status`, `creator`, `date_start`, `date_stop`, `licencia_stop`) VALUES
(12, 'fghg', 'bnm@uniguajira.edu.co', 'jlospino', '', 'CO', '', NULL, 2, 'ttttttttt', '2022-04-14', '2022-04-14', '2022-04-14'),
(13, 'jorge luis ospino pastrana', 'jlospino@uniguajira.edu.co', 'SdFEG4tMjNkH5sy20xq9Ww==', '', 'CM', '', NULL, 1, 'ttttttttt', '2022-04-14', '2022-05-14', '2022-05-14'),
(14, 'juan jose', 'michel@michel.com', '1234', '', 'CO', '', NULL, 3, 'fghg', '2022-04-14', '2022-05-14', '2022-07-14'),
(15, 'jhjfhj', 'jlosk@mail.com', 'jlospino00', '', 'CO', '', NULL, 1, 'fghg', '2022-04-14', '2022-05-14', '2022-07-14'),
(16, 'jorge luis ospino', 'jjjjj@mail.com', '4lrZiLCe/18CD1JlqbXBhg==', '', 'CO', '', NULL, 2, 'fghg', '2022-04-14', '2022-04-18', '2022-06-15'),
(18, 'jjjj', 'jlospinod@uniguajira.edu.co', 'W0LE2pUfcaizv/oZDssmO6Me0/Q4xxF4zDjUwanX4RHe9tZHL1gCNCMpOldOGOU8', '', 'CO', '', NULL, 3, 'jorge luis ospino', '2022-04-20', '2022-05-20', '2022-07-20'),
(30, 'ARMANDO', 'GBH@mail.com', '4lrZiLCe/18CD1JlqbXBhg==', '', 'COLOMBIA', '', NULL, 1, 'jorge luis ospino', '2022-04-22', '2022-05-22', '2022-07-22');

-- --------------------------------------------------------

--
-- Structure for view `info_user`
--
DROP TABLE IF EXISTS `info_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `info_user`  AS SELECT `u`.`id_user` AS `id_user`, `u`.`full_name` AS `full_name`, `u`.`email` AS `email`, `u`.`password` AS `password`, `u`.`pais` AS `pais`, `u`.`creator` AS `creator`, `u`.`date_stop` AS `date_stop`, `u`.`licencia_stop` AS `licencia_stop`, `p`.`paypal` AS `paypal`, `p`.`nequi` AS `nequi`, `p`.`daviplata` AS `daviplata`, `p`.`otro` AS `otro`, `s`.`name` AS `status` FROM ((`users` `u` join `status` `s`) join `payments` `p`) WHERE `u`.`id_user` = `p`.`id_user` AND `s`.`id_status` = `u`.`id_status` ;

-- --------------------------------------------------------

--
-- Structure for view `info_users`
--
DROP TABLE IF EXISTS `info_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `info_users`  AS SELECT `u`.`id_user` AS `id_user`, `u`.`full_name` AS `full_name`, `u`.`email` AS `email`, `u`.`pais` AS `pais`, `u`.`password` AS `password`, `s`.`name` AS `status`, `u`.`date_stop` AS `date_stop`, `u`.`licencia_stop` AS `licencia_stop`, `u`.`creator` AS `creator` FROM (`users` `u` join `status` `s`) WHERE `u`.`id_status` = `s`.`id_status` ;

-- --------------------------------------------------------

--
-- Structure for view `this_users`
--
DROP TABLE IF EXISTS `this_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `this_users`  AS SELECT `u`.`id_user` AS `id_user`, `u`.`full_name` AS `full_name`, `u`.`email` AS `email`, `u`.`creator` AS `creator`, `u`.`pais` AS `pais`, `s`.`name` AS `status` FROM (`users` `u` join `status` `s`) WHERE `u`.`id_status` = `s`.`id_status` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id_document`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `payment_confirm`
--
ALTER TABLE `payment_confirm`
  ADD PRIMARY KEY (`id_confirm`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_estado` (`id_status`),
  ADD KEY `id_payment` (`id_payment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id_document` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment_confirm`
--
ALTER TABLE `payment_confirm`
  MODIFY `id_confirm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_confirm`
--
ALTER TABLE `payment_confirm`
  ADD CONSTRAINT `payment_confirm_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
