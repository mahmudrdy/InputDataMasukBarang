-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 13 Jan 2025 pada 12.30
-- Versi server: 5.6.38
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `databarang`
--

CREATE TABLE `databarang` (
  `Id_Barang` int(15) NOT NULL,
  `Nama_barang` text NOT NULL,
  `Jenis_barang` text NOT NULL,
  `Jumlah_barang` int(100) NOT NULL,
  `Harga_barang` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `databarang`
--

INSERT INTO `databarang` (`Id_Barang`, `Nama_barang`, `Jenis_barang`, `Jumlah_barang`, `Harga_barang`) VALUES
(34, 'MAHMUD RIADY', 'Minuman', 5, 200);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`Id_Barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `databarang`
--
ALTER TABLE `databarang`
  MODIFY `Id_Barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
