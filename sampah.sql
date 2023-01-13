-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2022 pada 06.19
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

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
-- Struktur dari tabel `sampah`
--

CREATE TABLE `sampah` (
  `id_sampah` int(11) NOT NULL,
  `nama_sampah` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga_min` int(11) NOT NULL,
  `harga_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sampah`
--

INSERT INTO `sampah` (`id_sampah`, `nama_sampah`, `satuan`, `kategori`, `harga_min`, `harga_max`) VALUES
(1, 'Koran', 'Kg', 'Kertas', 500, 1000),
(2, 'Buku bekas', 'Kg', 'Kertas', 500, 1000),
(3, 'HVS (kertas putih)', 'Kg', 'Kertas', 800, 2000),
(4, 'Kertas warna/dupleks', 'Kg', 'Kertas', 100, 500),
(5, 'Kertas buram', 'Kg', 'Kertas', 100, 500),
(6, 'Karton', 'Kg', 'Kertas', 500, 1200),
(7, 'Botol kecap', 'Satuan', 'Kaca', 300, 500),
(8, 'Botol saus', 'Satuan', 'Kaca', 300, 500),
(9, 'Botol sirup DHT', 'Satuan', 'Kaca', 300, 500),
(10, 'Botol minuman keras besar', 'Satuan', 'Kaca', 500, 1000),
(11, 'Botol minuman keras kecil', 'Satuan', 'Kaca', 50, 300),
(12, 'Cangkir', 'Satuan', 'Kaca', 100, 300),
(13, 'TV', 'Satuan', 'Elektronik', 10000, 100000),
(14, 'Kipas angin', 'Satuan', 'Elektronik', 3000, 15000),
(15, 'Laptop', 'Satuan', 'Elektronik', 5000, 100000),
(16, 'Handphone', 'Satuan', 'Elektronik', 10000, 15000),
(17, 'Dispenser', 'Satuan', 'Elektronik', 3000, 40000),
(18, 'AC', 'Satuan', 'Elektronik', 50000, 200000),
(19, 'Kulkas', 'Satuan', 'Elektronik', 40000, 100000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id_sampah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
