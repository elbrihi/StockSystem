-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 31 mars 2019 à 00:37
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testing2`
--

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_name` varchar(250) NOT NULL,
  `brand_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `brand`
--

INSERT INTO `brand` (`brand_id`, `category_id`, `brand_name`, `brand_status`) VALUES
(1, 1, 'Finibus', 'active'),
(2, 1, 'Lorem', 'active'),
(3, 1, 'Ipsum', 'active'),
(4, 8, 'Dolor', 'active'),
(5, 8, 'Amet', 'active'),
(6, 6, 'Aliquam', 'active'),
(7, 6, 'Maximus', 'active'),
(8, 10, 'Venenatis', 'active'),
(9, 10, 'Ligula', 'active'),
(10, 3, 'Vitae', 'active'),
(11, 3, 'Auctor', 'active'),
(12, 5, 'Luctus', 'active'),
(13, 5, 'Justo', 'active'),
(14, 2, 'Phasellus', 'active'),
(15, 2, 'Viverra', 'active'),
(16, 4, 'Elementum', 'active'),
(17, 4, 'Odio', 'active'),
(18, 7, 'Tellus', 'active'),
(19, 7, 'Curabitur', 'active'),
(20, 9, 'Commodo', 'active'),
(21, 9, 'Nullam', 'active'),
(22, 11, 'Quisques', 'active'),
(24, 11, 'XYZ', 'inactive'),
(25, 4, 'X1', 'active'),
(26, 15, 'Y1', 'active'),
(27, 15, 'y2', 'active'),
(28, 17, 'colorado_F1', 'active'),
(29, 17, 'colorado_F2', 'active'),
(30, 17, 'midi ', 'active'),
(31, 18, 'tube ppr', 'active'),
(32, 18, 'tube pvc', 'active'),
(33, 20, 'dahua', 'active'),
(34, 20, 'hikvision', 'active'),
(35, 19, 'alap', 'active'),
(36, 19, 'ingelec', 'active'),
(37, 26, 'X', 'active'),
(38, 24, 'B1', 'active'),
(39, 28, 'Jmal', 'active');

-- --------------------------------------------------------

--
-- Structure de la table `caisse`
--

CREATE TABLE `caisse` (
  `caisse_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `montant` decimal(14,2) NOT NULL,
  `user_id` int(22) NOT NULL,
  `inventory_order_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `caisse_status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `caisse`
--

INSERT INTO `caisse` (`caisse_id`, `type`, `designation`, `montant`, `user_id`, `inventory_order_id`, `date`, `caisse_status`) VALUES
(1, 'entree', 'modife la commande de numero 55', '95.20', 1, 0, '2019-02-18', 'inactive'),
(2, 'entree', 'modife la commande de numero 55', '95.20', 1, 0, '2019-02-18', 'active'),
(3, 'entree', 'modife la commande de numero 55', '95.20', 1, 0, '2019-02-18', 'inactive'),
(4, 'entree', 'modife la commande de numero 55', '95.20', 1, 0, '2019-02-18', 'active'),
(5, 'entree', 'modife la commande de numero 55', '95.20', 1, 0, '2019-02-18', 'active'),
(6, 'entree', 'modife la commande de numero 55', '95.20', 1, 0, '2019-02-18', 'active'),
(7, 'entree', 'modife la commande de numero 55', '95.20', 1, 2, '2019-02-18', 'inactive'),
(8, 'entree', 'modife la commande de numero ', '190.40', 1, 55, '2019-02-11', 'active'),
(9, 'entree', 'ajoute la commande de numero 56', '918.75', 1, 56, '2019-02-18', 'active'),
(10, 'entree', 'test_designation', '45.00', 1, 57, '2019-02-18', 'active'),
(11, 'entree', 'Sadi Ali', '10.00', 1, 0, '2019-02-18', 'Active'),
(12, 'entree', 'modife la commande de numero ', '2094.40', 1, 58, '2019-02-18', 'active'),
(13, 'entree', '', '20.00', 1, 0, '2019-02-18', 'Active'),
(14, 'entree', 'D2', '25.00', 1, 0, '2019-02-18', 'active'),
(15, 'entree', 'debut', '540.00', 1, 0, '2019-02-19', 'active'),
(16, 'entree', 'modife la commande de numero ', '1509.90', 1, 59, '2019-02-19', 'active'),
(17, 'sortie', 'So1', '40.00', 1, 0, '2019-02-19', 'active'),
(18, 'sortie', 'S1', '100.00', 1, 0, '2019-02-20', 'active'),
(19, 'entree', 'E1', '1000.00', 1, 0, '2019-02-20', 'active'),
(20, 'entree', 'ajoute la commande de numero 60', '470.40', 1, 60, '2019-02-20', 'active'),
(21, 'entree', 'modife la commande de numero ', '476.00', 1, 61, '2019-02-20', 'active'),
(22, 'entree', 'modife la commande de numero ', '5308.80', 1, 62, '2019-02-20', 'active'),
(23, 'entree', 'cjggjh', '500.00', 1, 0, '2019-02-20', 'active'),
(24, 'entree', 'tijara ', '422.00', 1, 0, '2019-02-24', 'active'),
(25, 'sortie', 'cafe', '15.00', 1, 0, '2019-02-24', 'active'),
(26, 'sortie', 'sima', '400.00', 1, 0, '2019-02-24', 'active'),
(27, 'entree', '8000', '0.00', 1, 0, '2019-02-24', 'active'),
(28, 'entree', 'lkra', '8000.00', 1, 0, '2019-02-24', 'active'),
(29, 'sortie', 'versment', '6000.00', 1, 0, '2019-02-24', 'active'),
(30, 'sortie', 'versment', '5000.00', 1, 0, '2019-02-24', 'active'),
(31, 'entree', 'debut ', '500.00', 1, 0, '2019-02-25', 'active'),
(32, 'sortie', 'cafe', '50.00', 1, 0, '2019-02-25', 'active'),
(33, 'entree', '500', '0.00', 1, 0, '2019-03-02', 'active'),
(34, 'entree', 'fwefwef', '500.00', 1, 0, '2019-03-02', 'active'),
(35, 'sortie', 'dw', '300.00', 1, 0, '2019-03-02', 'active'),
(36, 'entree', 'ajoute la commande de numero 0', '476.00', 1, 0, '2019-03-18', 'active'),
(37, 'entree', 'ajoute la commande de numero 63', '190.40', 1, 63, '2019-03-18', 'active');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_status`) VALUES
(1, 'LED Bulb', 'active'),
(2, 'LED Lights', 'active'),
(3, 'LED Down Lights', 'active'),
(4, 'LED Panel Light', 'active'),
(5, 'LED Lamp', 'active'),
(6, 'LED Concealed Light', 'active'),
(7, 'LED Spot Light', 'active'),
(8, 'LED Ceiling Light', 'active'),
(9, 'LED Tube Light', 'active'),
(10, 'LED Driver', 'active'),
(11, 'Led Floods Light', 'active'),
(13, 'LED Outdoor Lighting', 'active'),
(14, 'LED Indoor Lights', 'active'),
(15, 'swarte', 'active'),
(16, 'pintora', 'inactive'),
(17, 'peinture', 'active'),
(18, 'plomberie', 'active'),
(19, 'electricite', 'active'),
(20, 'cameras de surveillance', 'active'),
(21, 'C1', 'active'),
(22, 'C1', 'active'),
(23, 'C1', 'active'),
(24, 'C1', 'active'),
(25, 'C1', 'active'),
(26, 'Napage', 'active'),
(27, 'C1', 'active'),
(28, 'C3', 'active');

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `telephone` varchar(225) NOT NULL,
  `adress` varchar(225) NOT NULL,
  `customer_status` varchar(225) NOT NULL,
  `customer_existence` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `telephone`, `adress`, `customer_status`, `customer_existence`) VALUES
(1, 'Yasine', 'Elbrihi', 'elbrihiyasine3@gmail.com', '+212670415422', 'Youssef Iben Tachfine 89', 'Active', 'exist'),
(2, 'Assou', 'Abdo', 'ass@gmail.com', '+21267040000', 'Na3na3e', 'Active', 'exist'),
(3, 'Zin El Abidine', 'Elbrihi', 'zizo@gmail.com', '+21267041111', 'Tanger', 'active', 'exist'),
(4, 'Alae', 'Hannach', 'alae@gmail.com', '+212670422222', 'NAdor El jadid', 'active', 'exist'),
(5, 'Youssef', 'Youssef', 'youssef@gmail.com', '45454544545', 'wefwe', 'active', 'exist');

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `do` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `history`
--

INSERT INTO `history` (`id`, `do`, `date`) VALUES
(1, 'yassine a entree une catÃ©gorie du nom C1Ã  la date 2019-02-15', '2019-02-15'),
(2, 'yassine a entree une marque du nom B1Ã  la date 2019-02-16', '2019-02-16'),
(3, 'yassine a entree  2 Kg du produit midi lacÃ  la date 2019-02-16', '2019-02-16'),
(4, 'yassine a modifiÃ©e   le produit 1045 - code filtage male Ã  la date 2019-02-16', '2019-02-16'),
(5, 'yassine a modifiÃ© une une commande du numÃ©ro 41 de  montant total 900 Ã  la date 2019-02-16', '2019-02-16'),
(6, 'yassine a modifiÃ© une une commande du numÃ©ro 41 de  montant total 900 Ã  la date 2019-02-16', '2019-02-16'),
(7, 'yassine a modifiÃ© une une commande du numÃ©ro 41 de  montant total 2700 Ã  la date 2019-02-16', '2019-02-16'),
(8, 'yassine a ajoute un nouvel client Mrs Zin El Abidine  Zin El Abidine Ã  la date 2019-02-16', '2019-02-16'),
(9, 'yassine a modifiÃ©e une catÃ©gorie Ã   Ã  la date 2019-02-16', '2019-02-16'),
(10, 'yassine a modifiÃ©e une catÃ©gorie Ã   Ã  la date 2019-02-16', '2019-02-16'),
(11, 'yassine a modifiÃ©e une catÃ©gorie Ã   Ã  la date 2019-02-16', '2019-02-16'),
(12, 'yassine a modifiÃ©e une catÃ©gorie Ã   Ã  la date 2019-02-16', '2019-02-16'),
(13, 'yassine a modifiÃ©e une catÃ©gorie Ã   Ã  la date 2019-02-16', '2019-02-16'),
(14, 'yassine a modifiÃ©e une catÃ©gorie Ã   Ã  la date 2019-02-16', '2019-02-16'),
(15, 'yassine a modifiÃ©e les conne de Mrs Ã  Zin El Abidine  Zin El Abidine Ã  la date 2019-02-16', '2019-02-16'),
(16, 'yassine a modifiÃ©e les conne de Mrs Ã  Zin El Abidine  Zin El Abidine Ã  la date 2019-02-16', '2019-02-16'),
(17, 'yassine a suprimer  Mrs Ã     Ã  la date 2019-02-16', '2019-02-16'),
(18, 'yassine a suprimer  Mrs Ã     Ã  la date 2019-02-16', '2019-02-16'),
(19, 'yassine a suprimer  client de Code 2 Ã  la date 2019-02-16', '2019-02-16'),
(20, 'yassine a ajoute un nouvel client Mrs Alae  Alae Ã  la date 2019-02-16', '2019-02-16'),
(21, 'yassine a crÃ©Ã© une une commande du numÃ©ro 42 de  montant total 476 Ã  la date 2019-02-17', '2019-02-17'),
(22, 'yassine a modifiÃ© une une commande du numÃ©ro 42 de  montant total 476 Ã  la date 2019-02-17', '2019-02-17'),
(23, 'yassine a modifiÃ© une une commande du numÃ©ro 42 de  montant total 476 Ã  la date 2019-02-17', '2019-02-17'),
(24, 'yassine a crÃ©Ã© une une commande du numÃ©ro 43 de  montant total 0 Ã  la date 2019-02-17', '2019-02-17'),
(25, 'yassine a crÃ©Ã© une une commande du numÃ©ro 44 de  montant total 476 Ã  la date 2019-02-17', '2019-02-17'),
(26, 'yassine a crÃ©Ã© une une commande du numÃ©ro 45 de  montant total 380.8 Ã  la date 2019-02-17', '2019-02-17'),
(27, 'yassine a modifiÃ© une une commande du numÃ©ro 45 de  montant total 190.4 Ã  la date 2019-02-17', '2019-02-17'),
(28, 'yassine a modifiÃ© une une commande du numÃ©ro 45 de  montant total 190.4 Ã  la date 2019-02-17', '2019-02-17'),
(29, 'yassine a crÃ©Ã© une une commande du numÃ©ro 46 de  montant total 0 Ã  la date 2019-02-17', '2019-02-17'),
(30, 'yassine a crÃ©Ã© une une commande du numÃ©ro 47 de  montant total 476 Ã  la date 2019-02-17', '2019-02-17'),
(31, 'yassine a modifiÃ© une une commande du numÃ©ro 47 de  montant total 190.4 Ã  la date 2019-02-17', '2019-02-17'),
(32, 'yassine a crÃ©Ã© une une commande du numÃ©ro 48 de  montant total 262.5 Ã  la date 2019-02-17', '2019-02-17'),
(33, 'yassine a modifiÃ© une une commande du numÃ©ro 48 de  montant total 656.25 Ã  la date 2019-02-17', '2019-02-17'),
(34, 'yassine a modifiÃ© une une commande du numÃ©ro 48 de  montant total 131.25 Ã  la date 2019-02-17', '2019-02-17'),
(35, 'yassine a modifiÃ© une une commande du numÃ©ro 48 de  montant total 131.25 Ã  la date 2019-02-17', '2019-02-17'),
(36, 'yassine a modifiÃ© une une commande du numÃ©ro 48 de  montant total 95.2 Ã  la date 2019-02-17', '2019-02-17'),
(37, 'yassine a crÃ©Ã© une une commande du numÃ©ro 0 de  montant total 2065 Ã  la date 2019-02-17', '2019-02-17'),
(38, 'yassine a modifiÃ© une une commande du numÃ©ro 48 de  montant total 95.2 Ã  la date 2019-02-17', '2019-02-17'),
(39, 'yassine a modifiÃ© une une commande du numÃ©ro 48 de  montant total 2520 Ã  la date 2019-02-17', '2019-02-17'),
(40, 'yassine a modifiÃ© une une commande du numÃ©ro 48 de  montant total 2520 Ã  la date 2019-02-17', '2019-02-17'),
(41, 'yassine a modifiÃ© une une commande du numÃ©ro 48 de  montant total 840 Ã  la date 2019-02-17', '2019-02-17'),
(42, 'yassine a modifiÃ© une une commande du numÃ©ro 48 de  montant total 840 Ã  la date 2019-02-17', '2019-02-17'),
(43, 'yassine a modifiÃ© une une commande du numÃ©ro 48 de  montant total 285.6 Ã  la date 2019-02-17', '2019-02-17'),
(44, 'yassine a crÃ©Ã© une une commande du numÃ©ro 49 de  montant total 190.4 Ã  la date 2019-02-17', '2019-02-17'),
(45, 'yassine a crÃ©Ã© une une commande du numÃ©ro 50 de  montant total 1680 Ã  la date 2019-02-17', '2019-02-17'),
(46, 'yassine a modifiÃ©e les cordonnes de Mrs Ã  Alae  Alae Ã  la date 2019-02-17', '2019-02-17'),
(47, 'yassine a modifiÃ© une une commande du numÃ©ro 47 de  montant total 285.6 Ã  la date 2019-02-17', '2019-02-17'),
(48, 'yassine a modifiÃ© une une commande du numÃ©ro 47 de  montant total 285.6 Ã  la date 2019-02-17', '2019-02-17'),
(49, 'yassine a modifiÃ© une une commande du numÃ©ro 47 de  montant total 285.6 Ã  la date 2019-02-17', '2019-02-17'),
(50, 'yassine a modifiÃ© une une commande du numÃ©ro 47 de  montant total 285.6 Ã  la date 2019-02-17', '2019-02-17'),
(51, 'yassine a modifiÃ© une une commande du numÃ©ro 46 de  montant total 476 Ã  la date 2019-02-17', '2019-02-17'),
(52, 'yassine a modifiÃ© une une commande du numÃ©ro 46 de  montant total 571.2 Ã  la date 2019-02-17', '2019-02-17'),
(53, 'yassine a modifiÃ© une une commande du numÃ©ro 46 de  montant total 476 Ã  la date 2019-02-17', '2019-02-17'),
(54, 'yassine a modifiÃ© une une commande du numÃ©ro 47 de  montant total 285.6 Ã  la date 2019-02-17', '2019-02-17'),
(55, 'yassine a modifiÃ© une une commande du numÃ©ro 47 de  montant total 285.6 Ã  la date 2019-02-17', '2019-02-17'),
(56, 'yassine a modifiÃ© une une commande du numÃ©ro 46 de  montant total 476 Ã  la date 2019-02-17', '2019-02-17'),
(57, 'yassine a modifiÃ© une une commande du numÃ©ro 46 de  montant total 190.4 Ã  la date 2019-02-17', '2019-02-17'),
(58, 'yassine a modifiÃ© une une commande du numÃ©ro 47 de  montant total 856.8 Ã  la date 2019-02-17', '2019-02-17'),
(59, 'yassine a crÃ©Ã© une une commande du numÃ©ro 51 de  montant total 476 Ã  la date 2019-02-17', '2019-02-17'),
(60, 'yassine a modifiÃ© une une commande du numÃ©ro 47 de  montant total 190.4 Ã  la date 2019-02-17', '2019-02-17'),
(61, 'yassine a modifiÃ© une une commande du numÃ©ro 49 de  montant total 380.8 Ã  la date 2019-02-17', '2019-02-17'),
(62, 'yassine a modifiÃ© une une commande du numÃ©ro 51 de  montant total 190.4 Ã  la date 2019-02-17', '2019-02-17'),
(63, 'yassine a modifiÃ© une une commande du numÃ©ro 44 de  montant total 476 Ã  la date 2019-02-18', '2019-02-18'),
(64, 'yassine a modifiÃ© une une commande du numÃ©ro 44 de  montant total 856.8 Ã  la date 2019-02-18', '2019-02-18'),
(65, 'yassine a crÃ©Ã© une une commande du numÃ©ro 52 de  montant total 420 Ã  la date 2019-02-18', '2019-02-18'),
(66, 'yassine a modifiÃ©e   le produit LED Test Ã  la date 2019-02-18', '2019-02-18'),
(67, 'yassine a modifiÃ©e   le produit LED Test Ã  la date 2019-02-18', '2019-02-18'),
(68, 'yassine a modifiÃ©e   le produit LED Test Ã  la date 2019-02-18', '2019-02-18'),
(69, 'yassine a modifiÃ©e   le produit LED Test Ã  la date 2019-02-18', '2019-02-18'),
(70, 'yassine a entree une catÃ©gorie du nom Ã  la date 2019-02-18', '2019-02-18'),
(71, 'yassine a entree une catÃ©gorie du nom Ã  la date 2019-02-18', '2019-02-18'),
(72, 'yassine a entree une catÃ©gorie du nom Ã  la date 2019-02-18', '2019-02-18'),
(73, 'yassine a entree une catÃ©gorie du nom Ã  la date 2019-02-18', '2019-02-18'),
(74, 'yassine a entree une catÃ©gorie du nom Ã  la date 2019-02-18', '2019-02-18'),
(75, 'yassine a entree une catÃ©gorie du nom Ã  la date 2019-02-18', '2019-02-18'),
(76, 'yassine a entree une catÃ©gorie du nom Ã  la date 2019-02-18', '2019-02-18'),
(77, 'yassine a entree une catÃ©gorie du nom Ã  la date 2019-02-18', '2019-02-18'),
(78, 'yassine a entree   du montant 400Ã  la date 2019-02-18', '2019-02-18'),
(79, 'yassine a entree   du montant 400Ã  la date 2019-02-18', '2019-02-18'),
(80, 'yassine a entree   du montant 400Ã  la date 2019-02-18', '2019-02-18'),
(81, 'yassine a entree   du montant 400Ã  la date 2019-02-18', '2019-02-18'),
(82, 'yassine a sortie   du montant Ã  la date 2019-02-18', '2019-02-18'),
(83, 'yassine a   D1 du montant 400Ã  la date 2019-02-18', '2019-02-18'),
(84, 'yassine a   D2 du montant 20Ã  la date 2019-02-18', '2019-02-18'),
(85, 'yassine a   1522 du montant D2Ã  la date 2019-02-18', '2019-02-18'),
(86, 'yassine a   5000 du montant D2Ã  la date 2019-02-18', '2019-02-18'),
(87, 'yassine a entree  D1 du montant 400Ã  la date 2019-02-18', '2019-02-18'),
(88, 'yassine a modifiÃ©e une catÃ©gorie Ã   Ã  la date 2019-02-18', '2019-02-18'),
(89, 'yassine a modifiee sortie  D2 du montant 400.00Ã  la date 2019-02-18', '2019-02-18'),
(90, 'yassine a modifiee sortie  D2 du montant 400.00Ã  la date 2019-02-18', '2019-02-18'),
(91, 'yassine a suprimee    du montant Ã  la date 2019-02-18', '2019-02-18'),
(92, 'yassine a suprimee   designation de la   numero 1Ã  la date 2019-02-18', '2019-02-18'),
(93, 'yassine a suprimee   designation de la   numero 1Ã  la date 2019-02-18', '2019-02-18'),
(94, 'yassine a sortie  Cafee du montant 15Ã  la date 2019-02-18', '2019-02-18'),
(95, 'yassine a suprimee   designation de la   numero 7Ã  la date 2019-02-18', '2019-02-18'),
(96, 'yassine a suprimee   designation de la   numero 7Ã  la date 2019-02-18', '2019-02-18'),
(97, 'yassine a suprimee   designation de la   numero 3Ã  la date 2019-02-18', '2019-02-18'),
(98, 'yassine a crÃ©Ã© une une commande du numÃ©ro 53 de  montant total 190.4 Ã  la date 2019-02-18', '2019-02-18'),
(99, 'yassine a crÃ©Ã© une une commande du numÃ©ro 54 de  montant total 856.8 Ã  la date 2019-02-18', '2019-02-18'),
(100, 'yassine a crÃ©Ã© une une commande du numÃ©ro 55 de  montant total 571.2 Ã  la date 2019-02-18', '2019-02-18'),
(101, 'yassine a modifiÃ© une une commande du numÃ©ro 55 de  montant total 190.4 Ã  la date 2019-02-18', '2019-02-18'),
(102, 'yassine a modifiÃ© une une commande du numÃ©ro 55 de  montant total 95.2 Ã  la date 2019-02-18', '2019-02-18'),
(103, 'yassine a modifiÃ© une une commande du numÃ©ro 53 de  montant total 190.4 Ã  la date 2019-02-18', '2019-02-18'),
(104, 'yassine a crÃ©Ã© une une commande du numÃ©ro 56 de  montant total 918.75 Ã  la date 2019-02-18', '2019-02-18'),
(105, 'yassine a modifiÃ© une une commande du numÃ©ro 47 de  montant total 476 Ã  la date 2019-02-18', '2019-02-18'),
(106, 'yassine a crÃ©Ã© une une commande du numÃ©ro 57 de  montant total 295 Ã  la date 2019-02-18', '2019-02-18'),
(107, 'yassine a modifiÃ© une une commande du numÃ©ro 57 de  montant total 590 Ã  la date 2019-02-18', '2019-02-18'),
(108, 'yassine a modifiÃ© une une commande du numÃ©ro 57 de  montant total 295 Ã  la date 2019-02-18', '2019-02-18'),
(109, 'yassine a modifiÃ© une une commande du numÃ©ro 57 de  montant total 295 Ã  la date 2019-02-18', '2019-02-18'),
(110, 'yassine a modifiÃ© une une commande du numÃ©ro 57 de  montant total 590 Ã  la date 2019-02-18', '2019-02-18'),
(111, 'yassine a modifiÃ© une une commande du numÃ©ro 57 de  montant total 295 Ã  la date 2019-02-18', '2019-02-18'),
(112, 'yassine a modifiÃ© une une commande du numÃ©ro 57 de  montant total 590 Ã  la date 2019-02-18', '2019-02-18'),
(113, 'yassine a modifiÃ© une une commande du numÃ©ro 57 de  montant total 590 Ã  la date 2019-02-18', '2019-02-18'),
(114, 'yassine a entree  Sadi Ali du montant 10Ã  la date 2019-02-18', '2019-02-18'),
(115, 'yassine a crÃ©Ã© une une commande du numÃ©ro 58 de  montant total 2094.4 Ã  la date 2019-02-18', '2019-02-18'),
(116, 'yassine a modifiÃ© une une commande du numÃ©ro 58 de  montant total 2094.4 Ã  la date 2019-02-18', '2019-02-18'),
(117, 'yassine a modifiÃ© une une commande du numÃ©ro 58 de  montant total 2094.4 Ã  la date 2019-02-18', '2019-02-18'),
(118, 'yassine a entree   du montant 20Ã  la date 2019-02-18', '2019-02-18'),
(119, 'yassine a entree  D2 du montant 25Ã  la date 2019-02-18', '2019-02-18'),
(120, 'yassine a modifiÃ©e   le produit 1045 - code filtage male Ã  la date 2019-02-19', '2019-02-19'),
(121, 'yassine a modifiÃ©e   le produit 1045 - code filtage male Ã  la date 2019-02-19', '2019-02-19'),
(122, 'yassine a modifiÃ© une une commande du numÃ©ro 55 de  montant total 190.4 Ã  la date 2019-02-19', '2019-02-19'),
(123, 'yassine a entree  debut du montant 540Ã  la date 2019-02-19', '2019-02-19'),
(124, 'yassine a crÃ©Ã© une une commande du numÃ©ro 59 de  montant total 646.45 Ã  la date 2019-02-19', '2019-02-19'),
(125, 'yassine a entree  1000 Packet du produit P1 Ã  la date 2019-02-19', '2019-02-19'),
(126, 'yassine a sortie  So1 du montant 40Ã  la date 2019-02-19', '2019-02-19'),
(127, 'yassine a sortie  S1 du montant 100Ã  la date 2019-02-20', '2019-02-20'),
(128, 'yassine a entree  E1 du montant 1000Ã  la date 2019-02-20', '2019-02-20'),
(129, 'yassine a entree  12 Nos du produit Reference 1 Ã  la date 2019-02-20', '2019-02-20'),
(130, 'yassine a crÃ©Ã© une une commande du numÃ©ro 60 de  montant total 470.4 Ã  la date 2019-02-20', '2019-02-20'),
(131, 'yassine a entree  20 Box du produit 1200vf Ã  la date 2019-02-20', '2019-02-20'),
(132, 'yassine a crÃ©Ã© une une commande du numÃ©ro 61 de  montant total 1040 Ã  la date 2019-02-20', '2019-02-20'),
(133, 'yassine a crÃ©Ã© une une commande du numÃ©ro 62 de  montant total 644 Ã  la date 2019-02-20', '2019-02-20'),
(134, 'yassine a entree  cjggjh du montant 500Ã  la date 2019-02-20', '2019-02-20'),
(135, 'yassine a entree  tijara  du montant 422Ã  la date 2019-02-24', '2019-02-24'),
(136, 'yassine a sortie  cafe du montant 15Ã  la date 2019-02-24', '2019-02-24'),
(137, 'yassine a modifiÃ©e les cordonnes de Mrs Ã  Zin El Abidine  Zin El Abidine Ã  la date 2019-02-24', '2019-02-24'),
(138, 'yassine a sortie  sima du montant 400Ã  la date 2019-02-24', '2019-02-24'),
(139, 'yassine a entree  8000 du montant Ã  la date 2019-02-24', '2019-02-24'),
(140, 'yassine a entree  lkra du montant 8000Ã  la date 2019-02-24', '2019-02-24'),
(141, 'yassine a sortie  versment du montant 6000Ã  la date 2019-02-24', '2019-02-24'),
(142, 'yassine a sortie  versment du montant 5000Ã  la date 2019-02-24', '2019-02-24'),
(143, 'yassine a modifiee sortie  versment du montant 0Ã  la date 2019-02-24', '2019-02-24'),
(144, 'yassine a entree  debut  du montant 500Ã  la date 2019-02-25', '2019-02-25'),
(145, 'yassine a sortie  cafe du montant 50Ã  la date 2019-02-25', '2019-02-25'),
(146, 'yassine a modifiÃ© une une commande du numÃ©ro 62 de  montant total 644 Ã  la date 2019-02-28', '2019-02-28'),
(147, 'yassine a modifiÃ© une une commande du numÃ©ro 62 de  montant total 644 Ã  la date 2019-03-02', '2019-03-02'),
(148, 'yassine a entree une catÃ©gorie du nom C3Ã  la date 2019-03-02', '2019-03-02'),
(149, 'yassine a entree une marque du nom JmalÃ  la date 2019-03-02', '2019-03-02'),
(150, 'yassine a entree  41 Bags du produit P31 Ã  la date 2019-03-02', '2019-03-02'),
(151, 'yassine a ajoute un nouvel client Mrs Youssef  Youssef Ã  la date 2019-03-02', '2019-03-02'),
(152, 'yassine a entree  500 du montant Ã  la date 2019-03-02', '2019-03-02'),
(153, 'yassine a entree  fwefwef du montant 500Ã  la date 2019-03-02', '2019-03-02'),
(154, 'yassine a sortie  dw du montant 300Ã  la date 2019-03-02', '2019-03-02'),
(155, 'yassine a modifiÃ© une une commande du numÃ©ro 62 de  montant total 5308.8 Ã  la date 2019-03-02', '2019-03-02'),
(156, 'yassine a modifiÃ© une une commande du numÃ©ro 61 de  montant total 1040 Ã  la date 2019-03-02', '2019-03-02'),
(157, 'yassine a modifiÃ© une une commande du numÃ©ro 61 de  montant total 1810 Ã  la date 2019-03-03', '2019-03-03'),
(158, 'yassine a modifiÃ© une une commande du numÃ©ro 61 de  montant total 476 Ã  la date 2019-03-03', '2019-03-03'),
(159, 'yassine a modifiÃ© une une commande du numÃ©ro 62 de  montant total 5308.8 Ã  la date 2019-03-03', '2019-03-03'),
(160, 'yassine a modifiÃ© une une commande du numÃ©ro 61 de  montant total 476 Ã  la date 2019-03-03', '2019-03-03'),
(161, 'yassine a modifiÃ© une une commande du numÃ©ro 59 de  montant total 1509.9 Ã  la date 2019-03-06', '2019-03-06'),
(162, 'yassine a crÃ©Ã© une une commande du numÃ©ro 0 de  montant total 476 Ã  la date 2019-03-18', '2019-03-18'),
(163, 'yassine a crÃ©Ã© une une commande du numÃ©ro 63 de  montant total 190.4 Ã  la date 2019-03-18', '2019-03-18'),
(164, 'yassine a crÃ©Ã© une une commande du numÃ©ro 0 de  montant total 184.8 Ã  la date 2019-03-18', '2019-03-18'),
(165, 'yassine a crÃ©Ã© une une commande du numÃ©ro 65 de  montant total 184.8 Ã  la date 2019-03-18', '2019-03-18'),
(166, 'yassine a crÃ©Ã© une une commande du numÃ©ro 0 de  montant total 0 Ã  la date 2019-03-18', '2019-03-18'),
(167, 'yassine a crÃ©Ã© une une commande du numÃ©ro 0 de  montant total 112 Ã  la date 2019-03-18', '2019-03-18'),
(168, 'yassine a crÃ©Ã© une une commande du numÃ©ro 66 de  montant total 112 Ã  la date 2019-03-18', '2019-03-18'),
(169, 'yassine a modifiÃ© une une commande du numÃ©ro 66 de  montant total 185.92 Ã  la date 2019-03-18', '2019-03-18'),
(170, 'yassine a modifiÃ© une une commande du numÃ©ro 66 de  montant total 280 Ã  la date 2019-03-18', '2019-03-18'),
(171, 'yassine a modifiÃ© une une commande du numÃ©ro 66 de  montant total 280 Ã  la date 2019-03-18', '2019-03-18'),
(172, 'yassine a modifiÃ© une une commande du numÃ©ro 66 de  montant total 280 Ã  la date 2019-03-18', '2019-03-18'),
(173, 'yassine a modifiÃ© une une commande du numÃ©ro 66 de  montant total 280 Ã  la date 2019-03-18', '2019-03-18'),
(174, 'yassine a modifiÃ© une une commande du numÃ©ro 66 de  montant total 280 Ã  la date 2019-03-18', '2019-03-18'),
(175, 'yassine a modifiÃ© une une commande du numÃ©ro 66 de  montant total 207.2 Ã  la date 2019-03-18', '2019-03-18');

-- --------------------------------------------------------

--
-- Structure de la table `inventory_order`
--

CREATE TABLE `inventory_order` (
  `inventory_order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(225) NOT NULL,
  `inventory_order_total` double(10,2) NOT NULL,
  `missing_value` decimal(12,0) NOT NULL,
  `inventory_order_date` date NOT NULL,
  `inventory_order_name` varchar(255) NOT NULL,
  `inventory_order_address` text NOT NULL,
  `payment_status` enum('cash','credit') NOT NULL,
  `inventory_order_status` varchar(100) NOT NULL,
  `inventory_order_created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inventory_order`
--

INSERT INTO `inventory_order` (`inventory_order_id`, `user_id`, `customer_id`, `inventory_order_total`, `missing_value`, `inventory_order_date`, `inventory_order_name`, `inventory_order_address`, `payment_status`, `inventory_order_status`, `inventory_order_created_date`) VALUES
(1, 7, 0, 4939.20, '0', '2017-11-08', 'David Harper', '3188 Straford Park\r\nHarold, KY 41635', 'credit', 'active', '2017-11-08'),
(2, 7, 0, 1310.40, '0', '2017-11-08', 'Trevor Webster', '4275 Indiana Avenue\r\nHonolulu, HI 96816', 'cash', 'active', '2017-11-08'),
(3, 6, 3, 265.65, '0', '2017-11-08', 'Russell Barrett', '4687 Powder House Road\r\nJupiter, FL 33478', 'cash', 'active', '2017-11-08'),
(4, 6, 3, 1546.80, '0', '2017-11-08', 'Doloris Turner', '3057 Collins Avenue\r\nWesterville, OH 43081', 'credit', 'active', '2017-11-08'),
(5, 5, 0, 1409.00, '0', '2017-11-08', 'Georgette Blevins', '863 Simpson Avenue\r\nSteelton, PA 17113', 'cash', 'active', '2017-11-08'),
(6, 5, 0, 558.90, '0', '2017-11-08', 'Nancy Brook', '3460 Viking Drive\r\nBarnesville, OH 43713', 'credit', 'active', '2017-11-08'),
(7, 4, 0, 1286.25, '0', '2017-11-08', 'Joseph Smith', '190 Metz Lane\r\nCharlestown, MA 02129', 'cash', 'active', '2017-11-08'),
(8, 4, 0, 1520.00, '0', '2017-11-08', 'Maria Lafleur', '3878 Elkview Drive\r\nPort St Lucie, FL 33452', 'credit', 'active', '2017-11-08'),
(9, 4, 0, 1604.00, '0', '2017-11-08', 'David Smith', '4757 Little Acres Lane\r\nLoraine, IL 62349', 'cash', 'active', '2017-11-08'),
(10, 3, 0, 1724.80, '0', '2017-11-08', 'Michelle Hayes', '1140 C Street\r\nWorcester, MA 01609', 'cash', 'active', '2017-11-08'),
(11, 3, 0, 1859.40, '0', '2017-11-08', 'Brenna Hamilton', '2845 Davis Avenue\r\nPetaluma, CA 94952', 'cash', 'active', '2017-11-08'),
(12, 3, 0, 2038.40, '0', '2017-11-08', 'Robbie McKenzie', '3016 Horizon Circle\r\nEatonville, WA 98328', 'credit', 'active', '2017-11-08'),
(13, 2, 0, 573.00, '0', '2017-11-08', 'Jonathan Allen', '2426 Evergreen Lane\r\nAlhambra, CA 91801', 'cash', 'inactive', '2017-11-08'),
(14, 2, 0, 1196.35, '0', '2017-11-08', 'Mildred Paige', '3167 Oakway Lane\r\nReseda, CA 91335', 'cash', 'active', '2017-11-08'),
(15, 2, 0, 1960.00, '0', '2017-11-08', 'Elva Lott', '4032 Aaron Smith Drive\r\nHarrisburg, PA 17111', 'credit', 'active', '2017-11-08'),
(16, 2, 0, 2700.00, '0', '2017-11-08', 'Eric Johnson', '616 Devils Hill Road\r\nJackson, MS 39213', 'cash', 'active', '2017-11-08'),
(17, 1, 0, 5615.20, '0', '2017-11-09', 'Doris Oliver', '2992 Sycamore Fork Road Hopkins, MN 55343', 'cash', 'active', '2017-11-09'),
(26, 1, 0, 2278.50, '0', '2017-11-27', 'Janet Richardsons', '4799 Ryder Avenue Everett, WA 98210', 'credit', 'inactive', '2017-11-27'),
(27, 1, 0, 4284.00, '0', '2019-01-18', 'Ahmed', 'cwdcvwdv c', 'cash', 'active', '2019-01-18'),
(28, 1, 0, 13248.40, '0', '2019-01-18', 'Morabite', 'sans', 'cash', 'active', '2019-01-18'),
(29, 1, 0, 1233.20, '0', '2019-01-22', 'Ahmed', 'qqwa', 'cash', 'active', '2019-01-22'),
(30, 1, 0, 476.00, '0', '2019-02-01', 'Yasine Elbrihi', 'Youssef Iben Tachfine 89', 'cash', 'active', '2019-02-01'),
(31, 1, 0, 90.00, '0', '2019-02-01', 'XYZ', 'Youssef Iben Tachfine 89', 'cash', 'active', '2019-02-01'),
(32, 1, 0, 10030.00, '0', '2019-02-04', 'Yasine Elbrihi', 'Youssef Iben Tachfine 89', 'cash', 'active', '2019-02-04'),
(33, 1, 0, 5768.00, '0', '2019-02-11', 'Ale', 'NAdor l jadid', 'cash', 'active', '2019-02-11'),
(34, 1, 0, 476.00, '0', '2019-02-12', 'AA', 'aaaadf', 'cash', 'active', '2019-02-12'),
(35, 1, 0, 476.00, '0', '0000-00-00', '', '', 'cash', 'active', '2019-02-12'),
(36, 1, 0, 0.00, '0', '2019-01-18', 'Yasine Elbrihi', 'Youssef Iben Tachfine 89', 'cash', 'active', '2019-02-15'),
(37, 1, 0, 0.00, '0', '2019-01-14', 'Yasine Elbrihi', 'Youssef Iben Tachfine 89', 'cash', 'active', '2019-02-15'),
(38, 1, 0, 476.00, '0', '2019-02-01', 'Yasine Elbrihi', 'Youssef Iben Tachfine 89', 'cash', 'active', '2019-02-15'),
(39, 1, 0, 715.40, '0', '2019-02-08', 'Achraf', 'cdsvsdvsdfv', 'cash', 'active', '2019-02-15'),
(40, 1, 0, 463.00, '0', '2019-03-05', 'Mutafa', 'wgdshtsth', 'cash', 'active', '2019-02-15'),
(41, 1, 0, 2700.00, '0', '2019-03-12', 'Mustafa1', 'kkk', 'cash', 'active', '2019-02-15'),
(44, 1, 2, 856.80, '0', '2019-01-18', 'Assou  Abdo', '', 'cash', 'active', '2019-02-17'),
(45, 1, 2, 380.80, '0', '2019-02-04', 'Assou  Abdo', '', 'cash', 'active', '2019-02-17'),
(46, 1, 4, 190.40, '0', '0000-00-00', 'Alae  Hannach', '', 'cash', 'active', '2019-02-17'),
(47, 1, 2, 476.00, '0', '2019-02-04', 'Assou  Abdo', 'hvhhvlhlhh', 'cash', 'active', '2019-02-17'),
(48, 1, 0, 262.50, '0', '2019-01-18', 'Yasine', 'Youssef Iben Tachfine 89', 'cash', 'active', '2019-02-17'),
(49, 1, 1, 380.80, '0', '2019-02-01', 'Yasine  Elbrihi', '', 'cash', 'active', '2019-02-17'),
(51, 1, 3, 190.40, '0', '2019-02-04', 'Zin El Abidine  Elbrihi', '', 'cash', 'active', '2019-02-17'),
(52, 1, 2, 420.00, '0', '2019-02-04', 'Assou  Abdo', '', 'cash', 'active', '2019-02-18'),
(53, 1, 0, 190.40, '0', '2019-02-04', 'Sino', 'NAdor', 'cash', 'active', '2019-02-18'),
(54, 1, 0, 856.80, '0', '2019-02-01', 'sino', 'ffxfxfx', 'cash', 'active', '2019-02-18'),
(55, 1, 0, 190.40, '0', '2019-01-18', 'sino', '', 'cash', 'active', '2019-02-18'),
(56, 1, 4, 918.75, '0', '2019-02-01', 'Alae  Hannach', '', 'cash', 'active', '2019-02-18'),
(57, 1, 4, 590.00, '0', '2019-02-01', 'Alae  Hannach', 'qdqwdwqdq', 'cash', 'active', '2019-02-18'),
(58, 1, 1, 2094.40, '0', '2019-02-04', 'Yasine  Elbrihi', 'wveeb', 'cash', 'active', '2019-02-18'),
(59, 1, 0, 1509.90, '0', '0000-00-00', '', 'vsdvdsvs', 'cash', 'active', '2019-02-19'),
(60, 1, 2, 470.40, '0', '2019-02-20', 'Assou  Abdo', 'vvjljvljbkkbnkjb', 'cash', 'active', '2019-02-20'),
(61, 1, 0, 476.00, '0', '0000-00-00', '', '', 'cash', 'active', '2019-02-20'),
(62, 1, 0, 5308.80, '0', '0000-00-00', '', '', 'cash', 'active', '2019-02-20'),
(63, 1, 0, 190.40, '0', '0000-00-00', 'Yasine', 'Youssef Iben Tachfine 89', 'cash', 'active', '2019-03-18'),
(64, 1, 0, 0.00, '0', '0000-00-00', 'Yasine', 'Youssef Iben Tachfine 89', 'cash', 'active', '2019-03-18'),
(65, 1, 0, 184.80, '0', '0000-00-00', 'Yasine', 'Youssef Iben Tachfine 89', 'cash', 'active', '2019-03-18'),
(66, 1, 0, 207.20, '70', '2019-03-07', 'Yasine', 'deded', 'cash', 'active', '2019-03-18');

-- --------------------------------------------------------

--
-- Structure de la table `inventory_order_product`
--

CREATE TABLE `inventory_order_product` (
  `inventory_order_product_id` int(11) NOT NULL,
  `inventory_order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(10,2) NOT NULL,
  `tax` double(10,2) NOT NULL,
  `profit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inventory_order_product`
--

INSERT INTO `inventory_order_product` (`inventory_order_product_id`, `inventory_order_id`, `product_id`, `quantity`, `price`, `tax`, `profit`) VALUES
(3, 1, 1, 12, 141.00, 12.00, 0),
(4, 1, 3, 4, 800.00, 5.00, 0),
(5, 2, 2, 3, 350.00, 12.00, 0),
(6, 2, 17, 2, 60.00, 12.00, 0),
(7, 3, 15, 1, 125.00, 5.00, 0),
(8, 3, 17, 2, 60.00, 12.00, 0),
(12, 4, 18, 4, 90.00, 12.00, 0),
(13, 4, 20, 3, 100.00, 18.00, 0),
(14, 4, 1, 5, 141.00, 12.00, 0),
(15, 5, 4, 2, 550.00, 12.00, 0),
(16, 5, 10, 1, 150.00, 18.00, 0),
(17, 6, 8, 5, 15.00, 18.00, 0),
(18, 6, 7, 2, 210.00, 12.00, 0),
(19, 7, 16, 7, 175.00, 5.00, 0),
(23, 8, 19, 5, 120.00, 18.00, 0),
(24, 8, 11, 5, 85.00, 12.00, 0),
(25, 8, 12, 5, 60.00, 12.00, 0),
(26, 9, 13, 3, 200.00, 18.00, 0),
(27, 9, 9, 2, 400.00, 12.00, 0),
(28, 10, 9, 3, 400.00, 12.00, 0),
(29, 10, 11, 4, 85.00, 12.00, 0),
(30, 11, 6, 6, 250.00, 15.00, 0),
(31, 11, 12, 2, 60.00, 12.00, 0),
(32, 12, 2, 4, 350.00, 12.00, 0),
(33, 12, 7, 2, 210.00, 12.00, 0),
(34, 13, 18, 3, 90.00, 12.00, 0),
(35, 13, 7, 1, 210.00, 12.00, 0),
(36, 13, 8, 2, 15.00, 18.00, 0),
(37, 14, 6, 2, 250.00, 15.00, 0),
(38, 14, 13, 1, 200.00, 18.00, 0),
(39, 14, 16, 1, 175.00, 5.00, 0),
(40, 14, 17, 3, 60.00, 12.00, 0),
(41, 15, 2, 5, 350.00, 12.00, 0),
(42, 16, 4, 4, 550.00, 12.00, 0),
(43, 16, 13, 1, 200.00, 18.00, 0),
(46, 17, 21, 2, 500.00, 18.00, 0),
(47, 17, 3, 5, 800.00, 5.00, 0),
(48, 17, 7, 1, 210.00, 12.00, 0),
(49, 0, 23, 5, 30.00, 12.00, 0),
(50, 0, 12, 5, 60.00, 12.00, 0),
(51, 0, 16, 5, 175.00, 5.00, 0),
(52, 0, 6, 5, 250.00, 15.00, 0),
(53, 0, 16, 5, 175.00, 5.00, 0),
(54, 0, 7, 5, 210.00, 12.00, 0),
(55, 0, 7, 5, 210.00, 12.00, 0),
(56, 0, 7, 5, 210.00, 12.00, 0),
(57, 25, 14, 5, 250.00, 18.00, 0),
(58, 25, 11, 5, 85.00, 12.00, 0),
(79, 26, 16, 6, 175.00, 5.00, 0),
(80, 26, 7, 5, 210.00, 12.00, 0),
(81, 27, 11, 45, 85.00, 12.00, 0),
(82, 28, 14, 26, 250.00, 18.00, 0),
(83, 28, 11, 10, 85.00, 12.00, 0),
(84, 28, 19, 32, 120.00, 18.00, 0),
(85, 28, 11, 1, 85.00, 12.00, 0),
(86, 29, 28, 10, 18.00, 0.00, 0),
(87, 29, 27, 12, 10.00, 0.00, 0),
(88, 29, 12, 1, 60.00, 12.00, 0),
(89, 29, 21, 1, 500.00, 18.00, 0),
(90, 29, 5, 1, 240.00, 15.00, 0),
(91, 30, 11, 5, 85.00, 12.00, 0),
(92, 31, 28, 5, 18.00, 0.00, 0),
(93, 32, 21, 17, 500.00, 18.00, 0),
(94, 33, 2, 4, 350.00, 12.00, 0),
(95, 33, 3, 5, 800.00, 5.00, 0),
(97, 35, 11, 5, 85.00, 12.00, 51),
(98, 0, 1, 10, 141.00, 12.00, 7.2),
(99, 0, 23, 12, 30.00, 12.00, 43.2),
(100, 0, 16, 1, 175.00, 5.00, 8.75),
(101, 0, 11, 5, 85.00, 12.00, 51),
(102, 38, 11, 5, 85.00, 12.00, 51),
(103, 39, 15, 4, 125.00, 5.00, 25),
(104, 39, 11, 2, 85.00, 12.00, 20.4),
(105, 40, 23, 5, 30.00, 12.00, 18),
(106, 40, 14, 1, 250.00, 18.00, 45),
(110, 41, 30, 6, 450.00, 0.00, 0),
(113, 42, 11, 5, 85.00, 12.00, 0),
(114, 43, 11, 0, 85.00, 12.00, 0),
(118, 45, 11, 2, 85.00, 12.00, 0),
(127, 0, 14, 7, 250.00, 18.00, 315),
(144, 48, 11, 2, 85.00, 12.00, 0),
(184, 46, 11, 2, 85.00, 12.00, 0),
(190, 44, 11, 9, 85.00, 12.00, 765),
(191, 52, 29, 12, 35.00, 0.00, 0),
(193, 54, 11, 9, 85.00, 12.00, 91.8),
(197, 53, 11, 2, 85.00, 12.00, 170),
(198, 56, 16, 5, 175.00, 5.00, 43.75),
(199, 47, 11, 5, 85.00, 12.00, 425),
(216, 57, 14, 2, 250.00, 18.00, 500),
(225, 58, 2, 5, 350.00, 12.00, 1750),
(226, 58, 12, 2, 60.00, 12.00, 120),
(227, 55, 11, 2, 85.00, 12.00, 170),
(230, 60, 7, 2, 210.00, 12.00, 50.4),
(259, 62, 11, 54, 85.00, 12.00, 4590),
(260, 62, 23, 5, 30.00, 12.00, 150),
(261, 62, 11, 0, 85.00, 12.00, 0),
(262, 62, 11, 0, 85.00, 12.00, 0),
(263, 62, 11, 0, 85.00, 12.00, 0),
(264, 61, 11, 2, 85.00, 12.00, 170),
(265, 61, 11, 1, 85.00, 12.00, 85),
(266, 61, 11, 2, 85.00, 12.00, 170),
(267, 61, 11, 0, 85.00, 12.00, 0),
(268, 61, 11, 0, 85.00, 12.00, 0),
(269, 61, 11, 0, 85.00, 12.00, 0),
(270, 59, 16, 2, 175.00, 5.00, 350),
(271, 59, 11, 12, 85.00, 12.00, 1020),
(272, 59, 11, 0, 85.00, 12.00, 0),
(273, 0, 11, 2, 85.00, 12.00, 20.4),
(274, 0, 11, 3, 85.00, 12.00, 30.6),
(275, 63, 11, 2, 85.00, 12.00, 20.4),
(276, 0, 11, 1, 85.00, 12.00, 10.2),
(277, 0, 11, 2, 85.00, 12.00, 20.4),
(278, 0, 11, 2, 85.00, 12.00, 20.4),
(279, 0, 11, 2, 85.00, 12.00, 20.4),
(280, 64, 11, 1, 85.00, 12.00, 10.2),
(281, 0, 11, 1, 85.00, 12.00, 10.2),
(282, 0, 11, 2, 85.00, 12.00, 20.4),
(283, 0, 11, 5, 85.00, 12.00, 51),
(284, 0, 11, 2, 85.00, 12.00, 20.4),
(285, 0, 11, 1, 85.00, 12.00, 10.2),
(286, 0, 11, 2, 85.00, 12.00, 20.4),
(287, 0, 11, 1, 85.00, 12.00, 10.2),
(288, 0, 11, 2, 85.00, 12.00, 20.4),
(289, 0, 11, 1, 85.00, 12.00, 10.2),
(290, 0, 11, 1, 85.00, 12.00, 10.2),
(291, 0, 11, 1, 85.00, 12.00, 10.2),
(292, 0, 11, 2, 85.00, 12.00, 20.4),
(293, 0, 11, 1, 85.00, 12.00, 10.2),
(294, 0, 11, 2, 85.00, 12.00, 20.4),
(295, 0, 11, 1, 85.00, 12.00, 10.2),
(296, 0, 11, 2, 85.00, 12.00, 20.4),
(297, 0, 11, 1, 85.00, 12.00, 10.2),
(298, 0, 11, 1, 85.00, 12.00, 10.2),
(299, 0, 11, 2, 85.00, 12.00, 20.4),
(300, 0, 11, 1, 85.00, 12.00, 10.2),
(301, 0, 11, 2, 85.00, 12.00, 20.4),
(302, 0, 11, 1, 85.00, 12.00, 10.2),
(303, 0, 11, 1, 85.00, 12.00, 10.2),
(304, 0, 11, 1, 85.00, 12.00, 10.2),
(305, 0, 11, 1, 85.00, 12.00, 10.2),
(306, 0, 11, 2, 85.00, 12.00, 20.4),
(307, 0, 11, 1, 85.00, 12.00, 10.2),
(308, 0, 11, 2, 85.00, 12.00, 20.4),
(309, 0, 11, 1, 85.00, 12.00, 10.2),
(310, 0, 11, 2, 85.00, 12.00, 20.4),
(311, 0, 11, 1, 85.00, 12.00, 10.2),
(312, 0, 11, 2, 85.00, 12.00, 20.4),
(313, 0, 11, 1, 85.00, 12.00, 10.2),
(314, 0, 11, 2, 85.00, 12.00, 20.4),
(315, 0, 11, 1, 85.00, 12.00, 10.2),
(316, 0, 11, 2, 85.00, 12.00, 20.4),
(317, 0, 11, 1, 85.00, 12.00, 10.2),
(318, 0, 11, 2, 85.00, 12.00, 20.4),
(319, 0, 11, 1, 85.00, 12.00, 10.2),
(320, 0, 11, 2, 85.00, 12.00, 20.4),
(321, 0, 11, 1, 85.00, 12.00, 10.2),
(322, 0, 11, 1, 85.00, 12.00, 10.2),
(323, 0, 11, 1, 85.00, 12.00, 10.2),
(324, 0, 11, 1, 85.00, 12.00, 10.2),
(325, 0, 11, 2, 85.00, 12.00, 20.4),
(326, 0, 11, 1, 85.00, 12.00, 10.2),
(327, 0, 11, 2, 85.00, 12.00, 20.4),
(328, 0, 11, 1, 85.00, 12.00, 10.2),
(329, 0, 11, 1, 85.00, 12.00, 10.2),
(330, 0, 11, 1, 85.00, 12.00, 10.2),
(331, 0, 11, 1, 85.00, 12.00, 10.2),
(332, 0, 11, 1, 85.00, 12.00, 10.2),
(333, 0, 11, 1, 85.00, 12.00, 10.2),
(334, 0, 11, 1, 85.00, 12.00, 10.2),
(335, 0, 10, 1, 150.00, 18.00, 27),
(336, 0, 11, 2, 85.00, 12.00, 20.4),
(337, 0, 11, 1, 85.00, 12.00, 10.2),
(338, 0, 11, 1, 85.00, 12.00, 10.2),
(339, 0, 11, 1, 85.00, 12.00, 10.2),
(340, 0, 11, 1, 85.00, 12.00, 10.2),
(341, 0, 11, 2, 85.00, 12.00, 20.4),
(342, 0, 11, 1, 85.00, 12.00, 10.2),
(343, 0, 11, 1, 85.00, 12.00, 10.2),
(344, 0, 11, 1, 85.00, 12.00, 10.2),
(345, 0, 11, 1, 85.00, 12.00, 10.2),
(346, 0, 11, 1, 85.00, 12.00, 10.2),
(347, 0, 11, 2, 85.00, 12.00, 20.4),
(348, 0, 11, 1, 85.00, 12.00, 10.2),
(349, 0, 11, 1, 85.00, 12.00, 10.2),
(350, 0, 1, 1, 141.00, 12.00, 0.72),
(351, 0, 1, 1, 141.00, 12.00, 0.72),
(352, 0, 1, 1, 141.00, 12.00, 0.72),
(353, 0, 1, 1, 141.00, 12.00, 0.72),
(354, 0, 1, 1, 141.00, 12.00, 0.72),
(355, 0, 1, 1, 141.00, 12.00, 0.72),
(356, 0, 11, 1, 85.00, 12.00, 10.2),
(357, 0, 11, 1, 85.00, 12.00, 10.2),
(358, 0, 11, 1, 85.00, 12.00, 10.2),
(359, 0, 11, 1, 85.00, 12.00, 10.2),
(360, 0, 11, 1, 85.00, 12.00, 10.2),
(361, 0, 11, 1, 85.00, 12.00, 10.2),
(362, 0, 11, 0, 85.00, 12.00, 0),
(363, 0, 11, 0, 85.00, 12.00, 0),
(364, 0, 11, 1, 85.00, 12.00, 10.2),
(365, 0, 11, 1, 85.00, 12.00, 10.2),
(366, 0, 11, 1, 85.00, 12.00, 10.2),
(367, 0, 11, 1, 85.00, 12.00, 10.2),
(368, 0, 11, 1, 85.00, 12.00, 10.2),
(369, 0, 11, 1, 85.00, 12.00, 10.2),
(370, 0, 11, 1, 85.00, 12.00, 10.2),
(371, 0, 11, 1, 85.00, 12.00, 10.2),
(372, 0, 11, 1, 85.00, 12.00, 10.2),
(373, 0, 11, 1, 85.00, 12.00, 10.2),
(374, 0, 11, 1, 85.00, 12.00, 10.2),
(375, 0, 11, 1, 85.00, 12.00, 10.2),
(376, 0, 11, 1, 85.00, 12.00, 10.2),
(377, 0, 11, 1, 85.00, 12.00, 10.2),
(378, 0, 11, 1, 85.00, 12.00, 10.2),
(379, 0, 11, 1, 85.00, 12.00, 10.2),
(380, 0, 11, 1, 85.00, 12.00, 10.2),
(381, 0, 11, 1, 85.00, 12.00, 10.2),
(382, 0, 11, 1, 85.00, 12.00, 10.2),
(383, 0, 11, 1, 85.00, 12.00, 10.2),
(384, 0, 11, 1, 85.00, 12.00, 10.2),
(385, 0, 11, 1, 85.00, 12.00, 10.2),
(386, 0, 11, 1, 85.00, 12.00, 10.2),
(387, 0, 11, 1, 85.00, 12.00, 10.2),
(388, 0, 11, 1, 85.00, 12.00, 10.2),
(389, 0, 11, 1, 85.00, 12.00, 10.2),
(390, 0, 11, 1, 85.00, 12.00, 10.2),
(391, 65, 11, 1, 85.00, 12.00, 10.2),
(392, 65, 11, 1, 85.00, 12.00, 10.2),
(393, 0, 11, 0, 85.00, 12.00, 0),
(394, 0, 11, 0, 85.00, 12.00, 0),
(395, 0, 11, 1, 85.00, 12.00, 10.2),
(396, 0, 11, 1, 85.00, 12.00, 10.2),
(425, 66, 11, 2, 85.00, 12.00, 170),
(426, 66, 11, 1, 85.00, 12.00, 85);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_description` text NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_unit` varchar(150) NOT NULL,
  `product_base_price` double(10,2) NOT NULL,
  `product_tax` decimal(4,2) NOT NULL,
  `product_minimum_order` double(10,2) NOT NULL,
  `product_enter_by` int(11) NOT NULL,
  `product_status` enum('active','inactive') NOT NULL,
  `product_date` date NOT NULL,
  `prix_achat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `brand_id`, `product_name`, `product_description`, `product_quantity`, `product_unit`, `product_base_price`, `product_tax`, `product_minimum_order`, `product_enter_by`, `product_status`, `product_date`, `prix_achat`) VALUES
(1, 1, 1, '4W LED Bulb', 'Base Type	B22, E27\r\nBulb Material	Aluminium\r\nItem Width	5 (cm)\r\nItem Height	10 (cm)\r\nItem Weight	0.07 (kg)', 100, 'Nos', 141.00, '12.00', 0.00, 1, 'active', '2017-11-08', 135),
(2, 1, 3, '17W B22 LED Bulb', 'Item Height	14.2 (cm)\r\nColor Temperature (Kelvin)	6500\r\nItem Weight	0.19 (kg)\r\nBulb Material	Aluminium\r\nBase Color	Aluminium\r\nVoltage	240\r\nUsages	Household, Commercial, Kitchen', 150, 'Nos', 350.00, '12.00', 0.00, 1, 'active', '2017-11-08', 0),
(3, 8, 5, '18W LED Ceiling Light', 'Round Ceiling Light 18w', 75, 'Nos', 800.00, '5.00', 0.00, 1, 'active', '2017-11-08', 0),
(4, 8, 4, 'Round LED Ceiling Light', 'Relying on our expertise in this domain, we are into offering Round LED Ceiling Light.	', 50, 'Nos', 550.00, '12.00', 0.00, 1, 'active', '2017-11-08', 0),
(5, 6, 6, '7W LED Concealed Light', 'Dimension \'3\" \'\r\n50000 hours burning life\r\ncost effective\r\nhigh quality led', 85, 'Nos', 240.00, '15.00', 0.00, 1, 'active', '2017-11-08', 0),
(6, 6, 7, '9w LED Concealed Light', 'dimension \'3\" \'\r\n50000 hours burning life\r\ncost effective\r\nhigh quality led', 65, 'Nos', 250.00, '15.00', 0.00, 1, 'active', '2017-11-08', 0),
(7, 10, 9, '24W Street Light Led Driver', 'Dc Voltage	36v\r\nRated Current	600ma\r\nRated Power	22w', 120, 'Nos', 210.00, '12.00', 0.00, 1, 'active', '2017-11-08', 0),
(8, 10, 8, 'BP1601 ICs', 'Backed by immense industry-experience & latest designing techniques, we are engaged in providing BP1601 ICs.', 200, 'Nos', 15.00, '18.00', 0.00, 1, 'active', '2017-11-08', 0),
(9, 3, 11, '5W LED Square Downlight', 'Wattage: 5 Watt\r\nInput Voltage: 150V to 265V, 50/60Hz\r\nLumens: 500 lumen (approx)\r\nPower Factor: 0.90pf', 50, 'Nos', 400.00, '12.00', 0.00, 1, 'active', '2017-11-08', 0),
(10, 3, 10, '10W LED Square Downlight', 'Wattage: 10 Watt\r\nInput Voltage: 150V to 265V, 50/60Hz\r\nLumens: 1000 lumen (approx)\r\nPower Factor: 0.90pf', 40, 'Nos', 150.00, '18.00', 0.00, 1, 'active', '2017-11-08', 0),
(11, 5, 13, ' 9w Deluxe LED Lamp', 'Lighting Color	Cool Daylight\r\nBase Type	B22', 100, 'Nos', 85.00, '12.00', 0.00, 1, 'active', '2017-11-08', 0),
(12, 5, 12, '5w LED Lamp', 'Lighting Color	Cool Daylight\r\nBody Material	Aluminum\r\nBase Type	B22', 75, 'Nos', 60.00, '12.00', 0.00, 1, 'active', '2017-11-08', 0),
(13, 2, 14, '15W Big LED Bay Light', 'Wattage: 15 Watt\r\nInput Voltage: 100V - 265V, 50/60Hz\r\nLumens: 1500 lumen (approx)\r\nPower Factor: 0.90pf', 60, 'Nos', 200.00, '18.00', 0.00, 1, 'active', '2017-11-08', 0),
(14, 2, 15, '15W Small LED Bay Light', 'Wattage: 15 Watt\r\nInput Voltage: 100V -265V, 50/60Hz\r\nLumens: 1500 lumen (approx)\r\nPower Factor: 0.90pf', 55, 'Nos', 250.00, '18.00', 0.00, 1, 'active', '2017-11-08', 0),
(15, 4, 16, '12W LED Panel Light', 'Body Material	Aluminum\r\nLighting Type	LED\r\nApplications	Hotel, House, etc', 85, 'Nos', 125.00, '5.00', 0.00, 1, 'active', '2017-11-08', 0),
(16, 4, 17, '15W LED Panel Light', 'IP Rating	IP40\r\nBody Material	Aluminum\r\nLighting Type	LED', 40, 'Nos', 175.00, '5.00', 0.00, 1, 'active', '2017-11-08', 0),
(17, 7, 19, '3W Round LED Spotlight', 'Lighting Color	Cool White\r\nBody Material	Aluminum\r\nCertification	ISO\r\nInput Voltage(V)	12 V\r\nIP Rating	IP33, IP40, IP44', 100, 'Nos', 60.00, '12.00', 0.00, 1, 'active', '2017-11-08', 0),
(18, 7, 18, '3W Square LED Spotlight', 'Lighting Color	Cool White\r\nBody Material	Aluminum\r\nInput Voltage(V)	12 V\r\nIP Rating	IP33, IP40', 85, 'Nos', 90.00, '12.00', 0.00, 1, 'active', '2017-11-08', 0),
(19, 9, 20, '18W LED Tube Light', 'Tube Base Type	T5\r\nIP Rating	IP66', 180, 'Nos', 120.00, '18.00', 0.00, 1, 'active', '2017-11-08', 0),
(20, 9, 21, '10W Ready Tube Light', 'Body Material	Aluminum, Ceramic\r\nPower	10W', 200, 'Nos', 100.00, '18.00', 0.00, 1, 'active', '2017-11-08', 0),
(21, 11, 22, '90W LED Flood Lights', 'Lighting Color	Cool White, Pure White, Warm White\r\nBody Material	Ceramic, Chrome, Iron\r\nIP Rating	IP33, IP40, IP44, IP55, IP66', 82, 'Nos', 500.00, '18.00', 0.00, 1, 'inactive', '2017-11-09', 0),
(23, 1, 3, '15 Watt LED Bulb', '15 Watt LED Bulb', 150, 'Nos', 30.00, '12.00', 0.00, 1, 'active', '2017-11-21', 0),
(24, 8, 5, 'X111dwdwdwf  efwefwef', 'gerge e gergerg', 4, 'Bottles', 12.00, '0.00', 0.00, 1, 'inactive', '2019-01-18', 0),
(25, 17, 30, 'midi lac 1kg', 'blanc \r\nbrillo\r\n', 1, 'Bottles', 45.00, '0.00', 0.00, 1, 'active', '2019-01-22', 0),
(26, 17, 28, 'cololac 1kg', 'peinture laque brillante\r\nchamois fonce 8019', 12, 'Bottles', 43.00, '0.00', 0.00, 1, 'active', '2019-01-22', 0),
(27, 18, 31, 'tube 20', 'tube ppr 20\r\neco', 100, 'Meter', 10.00, '0.00', 0.00, 1, 'active', '2019-01-22', 0),
(28, 18, 31, '1045 - code filtage male', 'code filtage male ppr 20\r\n', 20, 'Nos', 18.00, '0.00', 0.00, 1, 'active', '2019-01-22', 0),
(29, 3, 11, 'LED Test', 'dsdqwd', 25, 'Box', 35.00, '0.00', 0.00, 1, 'inactive', '2019-02-12', 25),
(30, 26, 37, 'Napage', 'gergehthwthwthjwrj', 5, 'Kg', 450.00, '0.00', 0.00, 1, 'active', '2019-02-15', 40),
(31, 1, 3, 'midi lac', ' fdf  d f', 2, 'Kg', 10.00, '0.00', 0.00, 1, 'active', '2019-02-16', 25),
(32, 1, 3, 'P1', 'vsvsdvsdv ', 1000, 'Packet', 14.00, '20.00', 0.00, 1, 'active', '2019-02-19', 11),
(33, 19, 35, 'Reference 1', 'dnzgjfj', 12, 'Nos', 50.00, '0.00', 0.00, 1, 'active', '2019-02-20', 45),
(34, 20, 33, '1200vf', '0', 20, 'Box', 35.00, '0.00', 0.00, 1, 'active', '2019-02-20', 40),
(35, 28, 39, 'P31', 'sdvsdvs', 41, 'Bags', 12.00, '0.00', 0.00, 1, 'active', '2019-03-02', 40);

-- --------------------------------------------------------

--
-- Structure de la table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(225) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_type` enum('master','user') NOT NULL,
  `user_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_email`, `user_password`, `user_name`, `user_type`, `user_status`) VALUES
(1, 'john_smith@gmail.com', '$2y$10$Cs4CG55CDazrZeh.XIHVLuSMDd5qvPw2bdjg9ECs3UsIwPSCjKwAe', 'yassine', 'master', 'Active'),
(2, 'donahuber@gmail.com', '$2y$10$8rdVjUThLgV9x9OxLE12eucPcieez7YoHiJ2lrIw6yKHgBXhFHdmS', 'Dona L. Huber', 'user', 'Inactive'),
(3, 'roy_hise@gmail.com', '$2y$10$XlyVI', 'Roy Hise', 'user', 'Inactive'),
(4, 'peter_goad@gmail.com', '$2y$10$n1B.F', 'Peter Goad', 'user', 'Active'),
(5, 'sarah_thomas@gmail.com', '$2y$10$s57SE', 'Sarah Thomas', 'user', 'Active'),
(6, 'edna_william@gmail.com', '$2y$10$mfMXn', 'Edna William', 'user', 'Active'),
(8, 'john_parks@gmail.com', '$2y$10$WtsZU', 'John Park', 'user', 'Active'),
(10, 'peter_parker@gmail.com', '$2y$10$GoQvE', 'Mark Parker', 'user', 'Inactive'),
(11, 'Laila@Laila.com', '$2y$10$d3E5o2uPhQ9ol1/Mx1hGze/yxWqGIk01VkjDysmZocjjne4.p.SQa', 'laila', 'user', 'Active');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Index pour la table `caisse`
--
ALTER TABLE `caisse`
  ADD PRIMARY KEY (`caisse_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inventory_order`
--
ALTER TABLE `inventory_order`
  ADD PRIMARY KEY (`inventory_order_id`);

--
-- Index pour la table `inventory_order_product`
--
ALTER TABLE `inventory_order_product`
  ADD PRIMARY KEY (`inventory_order_product_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `caisse`
--
ALTER TABLE `caisse`
  MODIFY `caisse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT pour la table `inventory_order`
--
ALTER TABLE `inventory_order`
  MODIFY `inventory_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT pour la table `inventory_order_product`
--
ALTER TABLE `inventory_order_product`
  MODIFY `inventory_order_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
