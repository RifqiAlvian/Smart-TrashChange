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
-- Struktur dari tabel `guidance`
--

CREATE TABLE `guidance` (
  `id_guidance` int(11) NOT NULL,
  `no_guidance` int(3) NOT NULL,
  `name_guidance` varchar(150) NOT NULL,
  `urutan` int(3) NOT NULL,
  `explanation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guidance`
--

INSERT INTO `guidance` (`id_guidance`, `no_guidance`, `name_guidance`, `urutan`, `explanation`) VALUES
(1, 1, 'Panduan Registrasi Pengguna', 1, 'Klik tombol \"register\" yang berada di bagian bawah halaman login, pada Aplikasi Smart Trash Change. Atau klik tombol masuk/daftar melalui Google atau Facebook. Jika memilih menggunakan Google atau Facebook. Jika memilih menggunakan Google atau Facebook, Anda akan otomatis masuk tanpa mengisi data pribadi.'),
(2, 1, 'Panduan Registrasi Pengguna', 2, 'Isi data Anda sesuai kolom yang tersedia (nama, email, sandi akun Anda, jenis kelamin, dan tanggal beserta tahun lahir).'),
(3, 1, 'Panduan Registrasi Pengguna', 3, 'Setelah itu, submit pendaftaran.'),
(4, 1, 'Panduan Registrasi Pengguna', 4, 'Pada layar akan ada pemberitahuan bahwa registrasi telah berhasil dan Anda akan diminta cek email untuk mengaktifkan akun.'),
(5, 1, 'Panduan Registrasi Pengguna', 5, 'Cek email Anda untuk mengaktifkan akun Smart Trash Change.'),
(6, 2, 'Panduan Pick-Up Sampah', 1, 'Menyiapkan sampah yang ingin dijual dalam wadah kemasan supaya memudahkan proses pengambilan.'),
(7, 2, 'Panduan Pick-Up Sampah', 2, 'Klik layanan \"Pick-Up\" dan pilihlah jenis sampah yang akan dijual.'),
(8, 2, 'Panduan Pick-Up Sampah', 3, 'Mengatur berat sampah yang akan dijual.'),
(9, 2, 'Panduan Pick-Up Sampah', 4, 'Unggah foto sampah sebanyak minimal dua kali.'),
(10, 2, 'Panduan Pick-Up Sampah', 5, 'Tentukan alamat, tanggal, dan waktu penjemputan sampah.'),
(11, 2, 'Panduan Pick-Up Sampah', 6, 'Pantau proses penjemputan sekaligus dapat berkomunikasi dengan Customer Service.'),
(12, 3, 'Panduan Drop-Off Sampah', 1, 'Menyiapkan sampah yang ingin dijual dalam wadah kemasan supaya memudahkan proses pengambilan.'),
(13, 3, 'Panduan Drop-Off Sampah', 2, 'Klik layanan \"Drop-Off\" dan pilihlah jenis sampah yang akan dijual.'),
(14, 3, 'Panduan Drop-Off Sampah', 3, 'Mengatur berat sampah yang akan dijual.'),
(15, 3, 'Panduan Drop-Off Sampah', 4, 'Unggah foto sampah sebanyak minimal dua kali.'),
(16, 3, 'Panduan Drop-Off Sampah', 5, 'Tentukan alamat, tanggal, dan waktu pengantaran sampah.'),
(17, 3, 'Panduan Drop-Off Sampah', 6, 'Antar sampah sesuai dengan alamat, tanggal, dan waktu pengantaran.'),
(18, 4, 'Panduan Menjadi Mitra Sampah', 1, 'Mitra Smart Trash Change adalah seluruh pihak yang dapat mendukung misi Smart Trash Change untuk meningkatkan angka daur ulang sampah di Indonesia. Seperti contohnya, pengepul lokal, bank sampah, vendor daur ulang, industri daur ulang, dan lainnya.'),
(19, 4, 'Panduan Menjadi Mitra Sampah', 2, 'Cara pendaftaran untuk menjadi mitra Smart Trash Change dapat dilakukan melalui website Smart Trash Change (https://www.traxchange.com). Calon mitra dapat melakukan pendaftaran dengan cara mengisi informasi singkat pada halaman \"Jadi Mitra\" di bagian atas website Traxchange.'),
(20, 4, 'Panduan Menjadi Mitra Sampah', 3, 'Setelah submit pendaftaran, Anda akan dihubungi oleh Customer Support mallsampah paling lambat tiga hari setelah pendaftaran dilakukan. Anda akan diminta melengkapi dokumen-dokumen yang diperlukan terkait kerja sama dengan mallsampah.'),
(21, 5, 'Panduan Jenis dan Harga Sampah', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guidance`
--
ALTER TABLE `guidance`
  ADD PRIMARY KEY (`id_guidance`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guidance`
--
ALTER TABLE `guidance`
  MODIFY `id_guidance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
