-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 29, 2024 at 02:11 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `directorio_3b`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `ID_contacto` int(8) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `a-paterno` varchar(100) NOT NULL,
  `a-materno` varchar(100) NOT NULL,
  `celular` int(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `Direccion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`ID_contacto`, `nombre`, `a-paterno`, `a-materno`, `celular`, `correo`, `Direccion`) VALUES
(1, 'Juan', 'Lopes', 'Almanza', 46425, 'juan@gmail.com', 'la misma de siempre'),
(2, 'cristina', 'vaca', 'morales', 45215, 'cristina@gmail.com', 'la misma de siempre y que'),
(3, 'lalo', 'zuñiga', 'mondragon', 12345, '12345@gmail.com', 'la de siempre');

-- --------------------------------------------------------

--
-- Table structure for table `detalle-grupo`
--

CREATE TABLE `detalle-grupo` (
  `idDetalle` int(8) NOT NULL,
  `idGrupo` int(8) NOT NULL,
  `idContacto` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `grupos`
--

CREATE TABLE `grupos` (
  `idGrupo` int(8) NOT NULL,
  `idcontacto` int(8) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`ID_contacto`);

--
-- Indexes for table `detalle-grupo`
--
ALTER TABLE `detalle-grupo`
  ADD PRIMARY KEY (`idDetalle`);

--
-- Indexes for table `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`idGrupo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `ID_contacto` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detalle-grupo`
--
ALTER TABLE `detalle-grupo`
  MODIFY `idDetalle` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grupos`
--
ALTER TABLE `grupos`
  MODIFY `idGrupo` int(8) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
