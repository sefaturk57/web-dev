-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 May 2024, 10:47:32
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `besinkalorisi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `besin`
--

CREATE TABLE `besin` (
  `id` int(255) NOT NULL,
  `besin` int(255) NOT NULL,
  `kalori` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `besin`
--

INSERT INTO `besin` (`id`, `besin`, `kalori`) VALUES
(2, 1, 123),
(3, 2, 124),
(4, 3, 255),
(5, 4, 450),
(6, 5, 110),
(7, 6, 100),
(8, 8, 55),
(9, 9, 85),
(10, 10, 357),
(11, 7, 235);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gunluk`
--

CREATE TABLE `gunluk` (
  `id` int(11) NOT NULL,
  `gun` date DEFAULT NULL,
  `gunlukkalori` int(255) DEFAULT NULL,
  `kaloriacigi` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `gunluk`
--

INSERT INTO `gunluk` (`id`, `gun`, `gunlukkalori`, `kaloriacigi`) VALUES
(61, '2017-06-04', 123, NULL),
(63, '2017-06-04', 55, NULL),
(64, '2017-06-04', 55, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `besin`
--
ALTER TABLE `besin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gunluk`
--
ALTER TABLE `gunluk`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `besin`
--
ALTER TABLE `besin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `gunluk`
--
ALTER TABLE `gunluk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
