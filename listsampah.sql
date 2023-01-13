-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2022 pada 17.18
-- Versi server: 8.0.29
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smarttrashchange`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `listsampah`
--

CREATE TABLE `listsampah` (
  `id` int NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `satuan` int NOT NULL,
  `satuankilo` varchar(128) NOT NULL,
  `hargamin` int NOT NULL,
  `harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `listsampah`
--

INSERT INTO `listsampah` (`id`, `kategori`, `jenis`, `satuan`, `satuankilo`, `hargamin`, `harga`) VALUES
(11, 'Kertas', 'Koran', 1, 'Kg', 500, 1000),
(12, 'Kertas', 'Buku Bekas', 1, 'Kg', 500, 1000),
(13, 'Kertas', 'HVS', 1, 'Kg', 800, 2000),
(14, 'Kertas', 'Kertas Berwarna', 1, 'Kg', 100, 500),
(15, 'Kertas', 'Karton', 1, 'Kg', 500, 1200),
(16, 'Kaca', 'Botol Kecap', 1, 'Satuan', 300, 500),
(17, 'Kaca', 'Botol Saus', 1, 'Satuan', 300, 500),
(18, 'Kaca', 'Botol Minuman Keras Besar', 1, 'Satuan', 500, 1000),
(19, 'Elektronik', 'TV', 1, 'Satuan', 10000, 100000),
(20, 'Elektronik', 'HandPhone', 1, 'Satuan', 10000, 15000),
(21, 'Elektronik', 'AC', 1, 'Satuan', 50000, 200000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `listsampah`
--
ALTER TABLE `listsampah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `listsampah`
--
ALTER TABLE `listsampah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
