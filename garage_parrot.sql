-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 20 juil. 2023 à 16:36
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `garage_parrot`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_service_name` varchar(50) NOT NULL,
  `booking_customer_phone` varchar(10) NOT NULL,
  `booking_customer_immatriculation` varchar(50) NOT NULL,
  `id_schedule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`id_booking`, `booking_date`, `booking_service_name`, `booking_customer_phone`, `booking_customer_immatriculation`, `id_schedule`) VALUES
(1, '2023-07-25', 'increased', '0912121234', 'DF-498-RM', 1),
(2, '2023-07-29', 'mechanic', '0765656543', 'AB-123-CD', 2),
(3, '2023-07-21', 'mechanic', '0765656543', 'AB-123-CD', 1),
(4, '2023-08-04', 'mechanic', '0765656543', 'AB-123-CD', 2),
(5, '2023-07-28', 'body', '0765656543', 'FF-817-XJ', 1),
(6, '2023-07-28', 'mechanic', '0765656543', 'FF-817-XJ', 1);

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

CREATE TABLE `car` (
  `id_car` int(11) NOT NULL,
  `car_brand` varchar(30) NOT NULL,
  `car_year` year(4) NOT NULL,
  `car_kilometers` int(11) NOT NULL,
  `car_price` int(11) NOT NULL,
  `car_options` varchar(255) NOT NULL,
  `car_image` varchar(255) NOT NULL,
  `id_garage` int(11) NOT NULL,
  `id_customer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`id_car`, `car_brand`, `car_year`, `car_kilometers`, `car_price`, `car_options`, `car_image`, `id_garage`, `id_customer`) VALUES
(2, 'Audi RS6 break', 2023, 22, 135000, 'Véhicule neuf, full options. ', '/gvp/uploads/64b9387acaa46_audi-rs6-avant-performance.jpg', 1, NULL),
(3, 'Ford Mustang', 1967, 2545, 500000, 'Hoonicorn originale, un monstre.', '/gvp/uploads/64b95ad0c07ed_Hoonicorn.jpg', 1, NULL),
(4, 'Honda Civic Type R', 2023, 22, 34999, 'Véhicule neuf, à saisir', '/gvp/uploads/64b95e7886a5c_civic.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `car_img`
--

CREATE TABLE `car_img` (
  `id_car_img` int(11) NOT NULL,
  `car_img_name` varchar(255) DEFAULT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `customer_gender` varchar(10) NOT NULL,
  `customer_firstname` varchar(30) NOT NULL,
  `customer_lastname` varchar(30) NOT NULL,
  `customer_email` varchar(75) NOT NULL,
  `customer_phone` varchar(10) NOT NULL,
  `customer_message` varchar(255) NOT NULL,
  `customer_date` date NOT NULL,
  `customer_object` varchar(50) NOT NULL,
  `id_garage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id_customer`, `customer_gender`, `customer_firstname`, `customer_lastname`, `customer_email`, `customer_phone`, `customer_message`, `customer_date`, `customer_object`, `id_garage`) VALUES
(1, 'madame', 'lisa@hedan.com', 'Hedan', 'lisa@hedan.com', '0676767654', 'Bonjour, je souhaite effectuer la révision de ma tesla avant son contrôle technique, la semaine prochaine, avez-vous des disponibilités?\r\n\r\nCordialement', '2023-07-20', 'Révision', 1);

-- --------------------------------------------------------

--
-- Structure de la table `customer_review`
--

CREATE TABLE `customer_review` (
  `id_customer_review` int(11) NOT NULL,
  `customer_review_username` varchar(255) NOT NULL,
  `customer_review_date` date NOT NULL,
  `customer_review_note` int(11) NOT NULL,
  `customer_review_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customer_review`
--

INSERT INTO `customer_review` (`id_customer_review`, `customer_review_username`, `customer_review_date`, `customer_review_note`, `customer_review_text`) VALUES
(1, 'Noris', '2023-07-20', 5, 'Super garage, des prestations haut de gamme. Et le propriétaire est sympa!'),
(2, 'Roberto', '2023-07-20', 4, 'Mécanicien au top je recommande, et le café est offert!'),
(3, 'Isa', '2023-07-20', 3, 'J&#039;avoue que je n&#039;ai pas aimé la rapidité, j&#039;ai pas eu le temps d&#039;aller faire du shopping en attendant...');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(11) NOT NULL,
  `employee_gender` varchar(10) NOT NULL,
  `employee_firstname` varchar(30) NOT NULL,
  `employee_lastname` varchar(30) NOT NULL,
  `employee_birthdate` date NOT NULL,
  `employee_email` varchar(75) NOT NULL,
  `employee_password` varchar(255) NOT NULL,
  `employee_role` varchar(10) NOT NULL,
  `id_garage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`id_employee`, `employee_gender`, `employee_firstname`, `employee_lastname`, `employee_birthdate`, `employee_email`, `employee_password`, `employee_role`, `id_garage`) VALUES
(1, 'monsieur', 'vincent', 'parrot', '1984-07-21', 'garagev.parrot2023@gmail.com', '$2y$10$NgFowtDj/jOy.U4CpicQA.Q.7DOhpNqauxmjXnIFvOJPX2GXhcxhu', 'admin', 1),
(4, 'monsieur', 'anthony', 'letellier', '1984-05-17', 'antho@letel.com', '$2y$10$Vfr7HwvTa/Arn0Ep21dklOFlabo8s9Y8RT5oJZXYLqbxhwlMUsJW2', 'employee', 1),
(5, 'madame', 'Julie', 'Pedretti', '1995-03-03', 'ju@pedretti.com', '$2y$10$oYtLFV7DL3rMqaV4CfnQkejHBiaYml0TxjjCBOr06BmpDj1AIZXG6', 'employee', 1);

-- --------------------------------------------------------

--
-- Structure de la table `garage`
--

CREATE TABLE `garage` (
  `id_garage` int(11) NOT NULL,
  `garage_name` varchar(50) NOT NULL,
  `garage_owner_firstname` varchar(30) NOT NULL,
  `garage_owner_lastname` varchar(30) NOT NULL,
  `garage_phone` varchar(10) NOT NULL,
  `garage_email` varchar(75) NOT NULL,
  `garage_address` varchar(100) NOT NULL,
  `garage_zipcode` int(11) NOT NULL,
  `garage_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `garage`
--

INSERT INTO `garage` (`id_garage`, `garage_name`, `garage_owner_firstname`, `garage_owner_lastname`, `garage_phone`, `garage_email`, `garage_address`, `garage_zipcode`, `garage_city`) VALUES
(1, 'Garage V.Parrot', 'Vincent', 'Parrot', '0520230721', 'garagev.parrot2023@gmail.com', 'avenue Jean Gonord', 31000, 'Toulouse');

-- --------------------------------------------------------

--
-- Structure de la table `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(11) NOT NULL,
  `schedule_monday_open` time NOT NULL,
  `schedule_monday_close` time NOT NULL,
  `schedule_tuesday_open` time NOT NULL,
  `schedule_tuesday_close` time NOT NULL,
  `schedule_wednesday_open` time NOT NULL,
  `schedule_wednesday_close` time NOT NULL,
  `schedule_thursday_open` time NOT NULL,
  `schedule_thursday_close` time NOT NULL,
  `schedule_friday_open` time NOT NULL,
  `schedule_friday_close` time NOT NULL,
  `schedule_saturday_open` time NOT NULL,
  `schedule_saturday_close` time NOT NULL,
  `close_day` varchar(50) NOT NULL,
  `id_garage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `schedule_monday_open`, `schedule_monday_close`, `schedule_tuesday_open`, `schedule_tuesday_close`, `schedule_wednesday_open`, `schedule_wednesday_close`, `schedule_thursday_open`, `schedule_thursday_close`, `schedule_friday_open`, `schedule_friday_close`, `schedule_saturday_open`, `schedule_saturday_close`, `close_day`, `id_garage`) VALUES
(1, '09:00:00', '12:30:00', '09:00:00', '12:30:00', '09:00:00', '12:30:00', '09:00:00', '12:30:00', '09:00:00', '12:30:00', '09:00:00', '18:00:00', 'sunday', 1),
(2, '13:30:00', '17:00:00', '13:30:00', '17:00:00', '13:30:00', '17:00:00', '13:30:00', '17:00:00', '13:30:00', '17:00:00', '09:00:00', '18:00:00', 'sunday', 1);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `service_name` varchar(25) NOT NULL,
  `service_price` decimal(10,0) NOT NULL,
  `service_type` varchar(255) DEFAULT NULL,
  `id_garage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_service`, `service_name`, `service_price`, `service_type`, `id_garage`) VALUES
(1, 'workshop', '75', 'Prestations mécaniques toutes marques, y compris véhicules hybrides et electriques', 1),
(4, 'increased', '250', 'Augmentation des performances', 1),
(5, 'body', '130', 'Prestation carrosserie toutes marques, y compris pièce en carbone', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_schedule` (`id_schedule`);

--
-- Index pour la table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id_car`),
  ADD KEY `id_garage` (`id_garage`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Index pour la table `car_img`
--
ALTER TABLE `car_img`
  ADD PRIMARY KEY (`id_car_img`),
  ADD KEY `car_id` (`car_id`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `customer_email` (`customer_email`),
  ADD KEY `id_garage` (`id_garage`);

--
-- Index pour la table `customer_review`
--
ALTER TABLE `customer_review`
  ADD PRIMARY KEY (`id_customer_review`);

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`),
  ADD UNIQUE KEY `employee_email` (`employee_email`),
  ADD KEY `id_garage` (`id_garage`);

--
-- Index pour la table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`id_garage`),
  ADD UNIQUE KEY `garage_email` (`garage_email`);

--
-- Index pour la table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`),
  ADD KEY `id_garage` (`id_garage`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `id_garage` (`id_garage`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `car`
--
ALTER TABLE `car`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `car_img`
--
ALTER TABLE `car_img`
  MODIFY `id_car_img` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `customer_review`
--
ALTER TABLE `customer_review`
  MODIFY `id_customer_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `garage`
--
ALTER TABLE `garage`
  MODIFY `id_garage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_schedule`) REFERENCES `schedule` (`id_schedule`);

--
-- Contraintes pour la table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`id_garage`) REFERENCES `garage` (`id_garage`),
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Contraintes pour la table `car_img`
--
ALTER TABLE `car_img`
  ADD CONSTRAINT `car_img_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car` (`id_car`);

--
-- Contraintes pour la table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_garage`) REFERENCES `garage` (`id_garage`);

--
-- Contraintes pour la table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`id_garage`) REFERENCES `garage` (`id_garage`);

--
-- Contraintes pour la table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`id_garage`) REFERENCES `garage` (`id_garage`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`id_garage`) REFERENCES `garage` (`id_garage`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
