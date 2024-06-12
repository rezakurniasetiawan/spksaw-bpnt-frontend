-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2024 pada 10.34
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
-- Database: `spksaw-bpnt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `no_alternatif` int(23) NOT NULL,
  `no` int(11) NOT NULL,
  `nama` varchar(23) NOT NULL,
  `name_c1` varchar(23) NOT NULL,
  `name_c2` varchar(100) NOT NULL,
  `name_c3` varchar(50) NOT NULL,
  `name_c4` varchar(50) NOT NULL,
  `name_c5` varchar(23) NOT NULL,
  `value_c1` int(11) NOT NULL,
  `value_c2` int(11) NOT NULL,
  `value_c3` int(11) NOT NULL,
  `value_c4` int(11) NOT NULL,
  `value_c5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`no_alternatif`, `no`, `nama`, `name_c1`, `name_c2`, `name_c3`, `name_c4`, `name_c5`, `value_c1`, `value_c2`, `value_c3`, `value_c4`, `value_c5`) VALUES
(1, 1, 'Ade Irkham ', 'Tidak punya anak', 'Rumah tembok + lantai keramik', 'Milik Sendiri daya 450 watt ', '500.000 <x<  1.000.000', 'Petani', 1, 1, 3, 3, 3),
(2, 2, 'Almi', '4 anak atau lebih ', '½ tembok + lantai tanah', 'Numpang ', 'x< 200.000 ', 'Pengangguran (lansia) ', 5, 4, 4, 5, 5),
(3, 3, 'Caswati', '4 anak atau lebih ', 'Rumah tembok + lantai keramik', 'Milik sendiri daya 900 watt ', '1.000.000 <x< 2.000.000', 'Petani', 5, 1, 2, 2, 3),
(4, 4, 'Darweti', '3 anak', 'Rumah tembok + lantai keramik', 'Milik Sendiri daya 450 watt ', '200.000 <x< 500.000 ', 'Buruh', 4, 1, 3, 4, 4),
(5, 5, 'Ade Irkham', '1 anak ', 'Rumah tembok + lantai keramik', 'Milik Sendiri daya 450 watt ', 'x< 200.000 ', 'Buruh', 2, 1, 3, 5, 4),
(6, 6, 'Jeni', '3 anak', 'Rumah tembok + lantai keramik', 'Milik Sendiri daya 450 watt ', 'x< 200.000 ', 'Buruh', 4, 1, 3, 5, 4),
(7, 7, 'Jerah', '3 anak', 'Rumah tembok + lantai keramik', 'Milik Sendiri daya 450 watt ', 'x< 200.000 ', 'Pengangguran (lansia) ', 4, 1, 3, 5, 5),
(8, 8, 'Jeri', '4 anak atau lebih ', 'Rumah tembok + lantai keramik', 'Milik sendiri daya 900 watt ', '500.000 <x<  1.000.000', 'Petani', 5, 1, 2, 3, 3),
(9, 9, 'Kalimah', '4 anak atau lebih ', 'Rumah tembok + lantai keramik', 'Numpang ', 'x< 200.000 ', 'Pengangguran (lansia) ', 5, 1, 4, 5, 5),
(10, 10, 'Kamsih', '3 anak', '½ tembok + lantai tanah', 'Numpang ', 'x< 200.000 ', 'Pengangguran (lansia) ', 4, 4, 4, 5, 5),
(11, 11, 'Karisah', '1 anak ', 'Rumah tembok + lantai semen ', 'Milik Sendiri daya 450 watt ', 'x< 200.000 ', 'Buruh', 2, 2, 3, 5, 4),
(12, 12, 'Karnyu', '4 anak atau lebih ', '½ tembok + lantai semen', 'Numpang ', 'x< 200.000 ', 'Pengangguran (lansia) ', 5, 3, 4, 5, 5),
(13, 13, 'Karpi', '2 anak', 'Rumah tembok + lantai keramik', 'Milik sendiri daya 900 watt ', '500.000 <x<  1.000.000', 'Wiraswasta', 3, 1, 2, 3, 2),
(14, 14, 'Karso', '1 anak ', 'Rumah tembok + lantai semen ', 'Milik Sendiri daya 450 watt ', 'x< 200.000 ', 'Buruh', 2, 2, 3, 5, 4),
(15, 15, 'Khuriyatun', '3 anak', 'Rumah tembok + lantai keramik', 'Milik Sendiri daya 450 watt ', 'x< 200.000 ', 'Pengangguran (lansia) ', 4, 1, 3, 5, 5),
(16, 16, 'Khusnul Khotimah', '2 anak', 'Rumah tembok + lantai keramik', 'Milik Sendiri daya 450 watt ', 'x< 200.000 ', 'Buruh', 3, 1, 3, 5, 4),
(17, 17, 'Kunyati', 'Tidak punya anak', 'Rumah tembok + lantai keramik', 'Milik sendiri daya 900 watt ', '200.000 <x< 500.000 ', 'Wiraswasta', 1, 1, 2, 4, 2),
(18, 18, 'Lastri Widiarti', '1 anak ', 'Rumah tembok + lantai keramik', 'Milik sendiri daya 900 watt ', '1.000.000 <x< 2.000.000', 'Petani', 2, 1, 2, 2, 3),
(19, 19, 'Maimunah', '3 anak', 'Rumah tembok + lantai keramik', 'Milik Sendiri daya 450 watt ', '1.000.000 <x< 2.000.000', 'Petani', 4, 1, 3, 2, 3),
(20, 20, 'Muksin', '4 anak atau lebih ', '½ tembok + lantai semen', 'Milik Sendiri daya 450 watt ', 'x< 200.000 ', 'Buruh', 5, 3, 3, 5, 4),
(21, 21, 'Munaseh', '4 anak atau lebih ', '½ tembok + lantai tanah', 'Milik Sendiri daya 450 watt ', 'x< 200.000 ', 'Buruh', 5, 4, 3, 5, 4),
(22, 22, 'Muniroh', '4 anak atau lebih ', 'Rumah tembok + lantai keramik', 'Milik Sendiri daya 450 watt ', '1.000.000 <x< 2.000.000', 'Petani', 5, 1, 3, 2, 3),
(23, 23, 'Mupidah', '3 anak', 'Rumah tembok + lantai keramik', 'Milik sendiri daya 900 watt ', '500.000 <x<  1.000.000', 'Petani', 4, 1, 2, 3, 3),
(24, 24, 'Murti', '1 anak ', 'Rumah tembok + lantai keramik', 'Milik Sendiri daya 450 watt ', '200.000 <x< 500.000 ', 'Buruh', 2, 1, 3, 4, 4),
(25, 25, 'Patriah', '2 anak', 'Rumah tembok + lantai semen ', 'Milik Sendiri daya 450 watt ', '200.000 <x< 500.000 ', 'Wiraswasta', 3, 2, 3, 4, 2),
(26, 26, 'Darni', '2 anak', 'Rumah tembok + lantai keramik', 'Milik sendiri daya 900 watt ', '500.000 <x<  1.000.000', 'Petani', 3, 1, 2, 3, 3),
(27, 27, 'Casmini', '3 anak', '½ tembok + lantai semen', 'Milik Sendiri daya 450 watt ', 'x< 200.000 ', 'Buruh', 4, 3, 3, 5, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dependent`
--

CREATE TABLE `dependent` (
  `id_dependent` int(11) NOT NULL,
  `name_dependent` text NOT NULL,
  `value_dependent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dependent`
--

INSERT INTO `dependent` (`id_dependent`, `name_dependent`, `value_dependent`) VALUES
(1, 'Tidak punya anak', 1),
(2, '1 anak ', 2),
(3, '2 anak', 3),
(4, '3 anak', 4),
(5, '4 anak atau lebih ', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `electricity`
--

CREATE TABLE `electricity` (
  `id_electricity` int(11) NOT NULL,
  `name_electricity` text NOT NULL,
  `value_electricity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `electricity`
--

INSERT INTO `electricity` (`id_electricity`, `name_electricity`, `value_electricity`) VALUES
(1, 'Milik sendiri daya > 900 watt ', 1),
(2, 'Milik sendiri daya 900 watt ', 2),
(3, 'Milik Sendiri daya 450 watt ', 3),
(4, 'Numpang ', 4),
(5, 'Tidak ada ', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `No` int(23) NOT NULL,
  `Nama` varchar(23) NOT NULL,
  `C1` int(23) NOT NULL,
  `C2` int(23) NOT NULL,
  `C3` int(23) NOT NULL,
  `C4` int(23) NOT NULL,
  `C5` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `house`
--

CREATE TABLE `house` (
  `id_house` int(11) NOT NULL,
  `name_house` text NOT NULL,
  `value_house` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `house`
--

INSERT INTO `house` (`id_house`, `name_house`, `value_house`) VALUES
(1, 'Rumah tembok + lantai keramik', 1),
(2, 'Rumah tembok + lantai semen ', 2),
(3, '½ tembok + lantai semen', 3),
(4, '½ tembok + lantai tanah', 4),
(5, 'Rumah kayu ', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `income`
--

CREATE TABLE `income` (
  `id_income` int(11) NOT NULL,
  `name_income` text NOT NULL,
  `value_income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `income`
--

INSERT INTO `income` (`id_income`, `name_income`, `value_income`) VALUES
(1, 'x>2.000.000 ', 1),
(2, '1.000.000 <x< 2.000.000', 2),
(3, '500.000 <x<  1.000.000', 3),
(4, '200.000 <x< 500.000 ', 4),
(5, 'x< 200.000 ', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(20) NOT NULL,
  `symbol` varchar(20) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `bobot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `symbol`, `nama_kriteria`, `bobot`) VALUES
('1', 'c1', 'Jumlah Tangungan', '0,15'),
('2', 'c2', 'Kondisi Rumah', '0,25'),
('3', 'c3', 'Jaringan Listrik', '0,2'),
('4', 'c4', 'Jumlah Penghasilan', '0,1'),
('5', 'c5', 'Jenis Pekerjaan', '0,3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Administrator', 'admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Struktur dari tabel `work`
--

CREATE TABLE `work` (
  `id_work` int(11) NOT NULL,
  `name_work` text NOT NULL,
  `value_work` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `work`
--

INSERT INTO `work` (`id_work`, `name_work`, `value_work`) VALUES
(1, 'PNS', 1),
(2, 'Wiraswasta', 2),
(3, 'Petani', 3),
(4, 'Buruh', 4),
(5, 'Pengangguran (lansia) ', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`no_alternatif`);

--
-- Indeks untuk tabel `dependent`
--
ALTER TABLE `dependent`
  ADD PRIMARY KEY (`id_dependent`);

--
-- Indeks untuk tabel `electricity`
--
ALTER TABLE `electricity`
  ADD PRIMARY KEY (`id_electricity`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id_house`);

--
-- Indeks untuk tabel `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id_income`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id_work`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `no_alternatif` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `dependent`
--
ALTER TABLE `dependent`
  MODIFY `id_dependent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `electricity`
--
ALTER TABLE `electricity`
  MODIFY `id_electricity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `No` int(23) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `house`
--
ALTER TABLE `house`
  MODIFY `id_house` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `income`
--
ALTER TABLE `income`
  MODIFY `id_income` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `work`
--
ALTER TABLE `work`
  MODIFY `id_work` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
