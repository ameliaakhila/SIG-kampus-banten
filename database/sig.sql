-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2025 pada 19.37
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kampus`
--

CREATE TABLE `kampus` (
  `id_kampus` int(8) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `akreditas` varchar(50) NOT NULL,
  `website` varchar(255) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kampus`
--

INSERT INTO `kampus` (`id_kampus`, `nama_kampus`, `akreditas`, `website`, `no_hp`, `alamat`, `kota`, `provinsi`, `latitude`, `longitude`) VALUES
(1, 'UNIVERSITAS BANTEN JAYA', 'A', 'https://spmb.unbaja.ac.id', '081902082011', 'Jl. Ciwaru Raya II No.73, Cipare, Kec. Serang, Kota Serang, Banten 42117, Indonesia', 'Serang', 'Banten', '-6.1275527', '106.16113'),
(2, 'UNIVERSITAS BINA BANGSA', 'B', 'https://binabangsa.ac.id', '0254220158', 'JL Raya Serang - Jakarta, KM. 03 No. 1B, Panancangan, Kec. Cipocok Jaya, Kota Serang, Banten 42124', 'Serang', 'Banten', '-6.120568', '106.1884253'),
(3, 'UNIVERSITAS PAMULANG', 'C', 'https://serang.unpam.ac.id', '0856-4839-0911', 'Jl. Raya Jakarta Km 5 No.6, Kalodran, Kec. Walantaka, Kota Serang, Banten 42183', 'Serang', 'Banten', '-6.1216455', '106.2041332'),
(4, 'Universitas Faletehan', 'A', 'http://www.uf.ac.id', '025432729', 'Jl. Raya Cilegon Drangong Serang - Banten No.Km. 06, Pelamunan, Kec. Kramatwatu, Kabupaten Serang, Banten', 'Serang', 'Banten', '-6.0737065', '106.1218813'),
(5, 'Universitas Serang Raya', 'B', 'http://www.unsera.ac.id', '02548235007', 'Jl. Raya Cilegon Drangong Serang - Banten No.Km. 5, Taman, Drangong, Kec. Taktakan, Kota Serang, Banten 42162', 'Serang', 'Banten', '-6.0882878', '106.1297515'),
(6, 'Universitas Primagraha', 'B', 'http://primagraha.ac.id', '0254216217', 'Komplek Griya Gemilang Sakti, Jl. Trip Jamaksari No.mor 1A Blok A1, Kaligandu, Kec. Serang, Kota Serang, Banten 42111', 'Serang', 'Banten', '-6.1168256', '106.1679664'),
(7, 'Universitas Banten', 'C', 'https://univbanten.ac.id', '0254216217', 'Jl. Univbanten, Kiara, Kec. Walantaka, Kota Serang, Banten 42182', 'Serang', 'Banten', '-6.1308529', '106.2377037'),
(8, 'Universitas Pelita Harapan', 'A', 'https://www.uph.edu', '0215460901', 'Jalan M.H. Thamrin Boulevard No.1100, Klp. Dua, Kec. Klp. Dua, Kabupaten Tangerang, Banten 15811', 'Tangerang', 'Banten', '-6.2283419', '106.5925991'),
(9, 'Swiss German University', 'A', 'https://sgu.ac.id', '08118010600', 'The Prominence Tower Alam Sutera, Jl. Jalur Sutera Bar. No.Kav 15, RT.003/RW.006, Panunggangan Tim., Kec. Pinang, Kota Tangerang, Banten 15143', 'Tangerang', 'Banten', '-6.2254806', '106.6364447'),
(10, 'Universitas Bina Nusantara', 'A', 'https://binus.ac.id', '08041696969', 'Jl. Jalur Sutera Bar. No.Kav. 21, RT.001/RW.004, Panunggangan, Kec. Pinang, Kota Tangerang, Banten 15143', 'Tangerang', 'Banten', '-6.2254378', '106.6364447');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id_kampus`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id_kampus` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
