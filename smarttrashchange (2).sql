-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2022 pada 17.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id_Account` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Sandi` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL,
  `namadepan` varchar(255) NOT NULL,
  `namabelakang` varchar(255) NOT NULL,
  `notelepon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `TcPoints` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id_Account`, `Username`, `Email`, `Sandi`, `role_id`, `is_active`, `date_created`, `namadepan`, `namabelakang`, `notelepon`, `alamat`, `jeniskelamin`, `TcPoints`) VALUES
(44, 'agasuck', 'alfianitem999@gmail.com', 'rinja123', 1, 1, '0000-00-00', '', '', '', '', '', 0),
(45, 'test', 'test@gmail.com', 'rinja123', 2, 1, '0000-00-00', '', '', '0895703340802', 'jl.tunggal asri 60', '', 0),
(85, 'agasuckasd', 'apaiyssasaa@gmail.com', 'rinja123', 0, 1, '2022-12-23', '', '', '', '', '', 0),
(86, 'alfiandm', 'alfianitem999aa@gmail.com', 'rinja123', 0, 1, '2022-12-24', 'Alfian', 'Dorif', '0895703340802', 'jl.tunggal asri 60', 'L', 0),
(87, 'alfiandmz', 'alfianitem999aas@gmail.com', 'rinja123', 0, 1, '2022-12-24', '', '', '', '', '', 0),
(88, 'driver1', 'driver1@gmail.com', 'rinja123', 2, 1, '0000-00-00', '', '', '', '', '', 0),
(89, 'driver2', 'driver2@gmail.com', 'rinja123', 2, 1, '0000-00-00', '', '', '', '', '', 0),
(90, 'admin1', 'admin1@gmail.com', 'rinja123', 1, 1, '0000-00-00', '', '', '', '', '', 0),
(91, 'admin2', 'admin2@gmail.com', 'rinja123', 1, 1, '0000-00-00', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `nama`, `message`) VALUES
(1, 'gue', 'hai'),
(2, 'elu', 'apa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `Id_Donation` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `TcPoints` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`Id_Donation`, `Username`, `TcPoints`, `date_created`) VALUES
(5, 'alfiandm', 5, '2022-12-27'),
(6, 'alfiandm', 10, '2022-12-27'),
(8, 'alfiandm', 5, '2022-12-27'),
(9, 'alfiandm', 5, '2022-12-27');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `hosting`
--

CREATE TABLE `hosting` (
  `id_hosting` int(10) UNSIGNED NOT NULL,
  `nama_hosting` varchar(25) DEFAULT NULL,
  `has_cpanel` char(1) DEFAULT NULL,
  `has_ssl` char(1) DEFAULT NULL,
  `has_subdomain` char(1) DEFAULT NULL,
  `has_storage` int(10) UNSIGNED DEFAULT NULL,
  `num_database` int(10) UNSIGNED DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `hosting`
--

INSERT INTO `hosting` (`id_hosting`, `nama_hosting`, `has_cpanel`, `has_ssl`, `has_subdomain`, `has_storage`, `num_database`, `harga`) VALUES
(2, 'GoLiveMedium', 'Y', 'N', 'N', 1500, 100000, 150000),
(3, 'GoLiveLong', 'Y', 'Y', 'Y', 50000, 5000, 250001),
(5, 'GoLiveShort', 'T', 'T', 'T', 500, 100, 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `listsampah`
--

CREATE TABLE `listsampah` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `satuan` int(11) NOT NULL,
  `satuankilo` int(11) NOT NULL,
  `hargamin` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `NamaPelanggan` varchar(255) NOT NULL,
  `NamaDriver` varchar(255) NOT NULL,
  `Sampah` varchar(255) NOT NULL,
  `BeratSampah` int(11) NOT NULL,
  `AlamatPelanggan` varchar(255) NOT NULL,
  `UpahDriver` int(11) NOT NULL,
  `Situation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `NamaPelanggan`, `NamaDriver`, `Sampah`, `BeratSampah`, `AlamatPelanggan`, `UpahDriver`, `Situation`) VALUES
(6, 'agasuckasd', 'test', 'Plastis', 5, 'JL RUNGKUT MADYA', 25000, 1),
(7, 'alfiandm', 'test', 'Plastis', 5, 'JL RUNGKUT MADYA', 25000, 1),
(8, 'alfiandm', 'test', 'Plastis', 5, 'JL RUNGKUT MADYA', 25000, 1),
(9, 'Guntur', 'test', 'Botol, Plastik, Kertas', 7, 'JL RUNGKUT MADYA 60', 35000, 1),
(11, 'alfiandm', 'test', 'Plastis', 7, 'JL RUNGKUT MADYA', 35000, 1),
(15, 'alfiandm', 'test', 'Plastik', 5, 'Jl. Tunggal Asri 60 Bareng Babadan Ponorogo Jawa Timur', 25000, 1),
(16, 'alfiandm', 'test', 'Plastik', 5, 'Jl. Tunggal Asri 60 Bareng Babadan Ponorogo Jawa Timur', 25000, 1),
(17, 'alfiandm', 'driver1', 'Plastik', 5, 'Jl. Tunggal Asri 60 Bareng Babadan Ponorogo Jawa Timur', 25000, 1),
(18, 'alfiandm', '', 'Plastik', 5, 'Jl. Tunggal Asri 60 Bareng Babadan Ponorogo Jawa Timur', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_Account`);

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`Id_Donation`);

--
-- Indeks untuk tabel `guidance`
--
ALTER TABLE `guidance`
  ADD PRIMARY KEY (`id_guidance`);

--
-- Indeks untuk tabel `hosting`
--
ALTER TABLE `hosting`
  ADD PRIMARY KEY (`id_hosting`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id_Account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `Id_Donation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `guidance`
--
ALTER TABLE `guidance`
  MODIFY `id_guidance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `hosting`
--
ALTER TABLE `hosting`
  MODIFY `id_hosting` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
