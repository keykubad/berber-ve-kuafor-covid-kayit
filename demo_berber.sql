-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 08 Haz 2020, 10:44:09
-- Sunucu sürümü: 10.2.32-MariaDB
-- PHP Sürümü: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `demo_berber`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `adsoyad` text COLLATE utf8_turkish_ci NOT NULL,
  `yetki` int(11) NOT NULL,
  `kurumadi` text COLLATE utf8_turkish_ci NOT NULL,
  `vergino` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kayittarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kullaniciadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `adsoyad`, `yetki`, `kurumadi`, `vergino`, `kayittarih`, `kullaniciadi`, `sifre`) VALUES
(1, 'Gürkan Ersan', 1, 'Yönetim', '1122233344', '2020-06-03 09:56:02', 'gurkan', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Çağrı Güraksın', 2, 'Berber Çağrı LTD', '12334434421', '2020-06-03 09:57:09', 'cagri', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Ersan Gürkan', 2, 'Ersan Berber', '1233443443', '2020-06-03 09:57:31', 'ersan', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `id` int(255) NOT NULL,
  `berber` int(255) NOT NULL,
  `isimsoyisim` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `tckimlik` varchar(255) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dogumyil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`id`, `berber`, `isimsoyisim`, `telefon`, `tckimlik`, `tarih`, `dogumyil`) VALUES
(1, 3, 'Dijital Arı', '05313917326', '14512314513', '2020-06-03 12:43:51', '1984'),
(2, 2, 'Ali Veli', '05323333935', '14522314511', '2020-05-29 14:58:13', '1986'),
(5, 3, 'Semih GÜRAKSIN', '05546032470', '11111111111', '2020-06-03 12:43:39', '1606'),
(7, 3, 'Hüseyin Serin', '05557191574', '14115314512', '2020-06-03 12:43:59', '1986'),
(8, 2, 'Burak Kasapoğlu', '05052021010', '12345678910', '2020-06-02 08:32:55', '1989'),
(9, 2, 'Ali Veli', '05313333939', '1323233244', '2020-06-03 15:26:34', '1980');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `smsbilgi`
--

CREATE TABLE `smsbilgi` (
  `id` int(255) NOT NULL,
  `smsbaslik` text NOT NULL,
  `smsmesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `smsbilgi`
--

INSERT INTO `smsbilgi` (`id`, `smsbaslik`, `smsmesaj`) VALUES
(1, 'Değerli Müşterimiz', 'gittiğiniz gün içerisinde KORONAVİRÜS  vakası görülen kişiler tespit edilmiş olup kendinizi evinizde 14 gün boyunca karantinaya almanız rica olunur. Acil bir durumda sağlık kuruluşlarına mutlaka başvurunuz.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `smsbilgi`
--
ALTER TABLE `smsbilgi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `smsbilgi`
--
ALTER TABLE `smsbilgi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
