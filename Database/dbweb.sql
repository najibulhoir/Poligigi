-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 27 Jun 2018 pada 08.48
-- Versi Server: 5.6.37
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elizaden_1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`username`, `password`, `nama`, `level`) VALUES
('21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `inc` int(9) NOT NULL,
  `dokter_id` varchar(9) NOT NULL,
  `dokter_nama` varchar(90) NOT NULL,
  `dokter_alamat` varchar(90) NOT NULL,
  `dokter_kota` varchar(50) NOT NULL,
  `dokter_email` varchar(90) NOT NULL,
  `dokter_kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`inc`, `dokter_id`, `dokter_nama`, `dokter_alamat`, `dokter_kota`, `dokter_email`, `dokter_kontak`) VALUES
(1, 'DOKTER-1', 'Lisa', 'Paiton', 'Probolinggo', '', '082244738079'),
(2, 'DOKTER-2', 'elang', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `warna`) VALUES
(4, '', ''),
(5, 'Karies', 'Purple'),
(6, 'Tumpatan', 'Gold'),
(7, 'none', 'White'),
(13, 'radang', 'biru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medis`
--

CREATE TABLE `medis` (
  `inc` int(9) NOT NULL,
  `medis_id` varchar(14) NOT NULL,
  `tgl_medis` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pasien_nama` varchar(90) NOT NULL,
  `kategoris` varchar(10) NOT NULL,
  `dokter_nama` varchar(100) NOT NULL,
  `tindakan` varchar(50) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `Biaya` varchar(50) NOT NULL,
  `Note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `medis`
--

INSERT INTO `medis` (`inc`, `medis_id`, `tgl_medis`, `username`, `pasien_nama`, `kategoris`, `dokter_nama`, `tindakan`, `diagnosa`, `Biaya`, `Note`) VALUES
(5, 'Medis-2', '04/12/2017', '21232f297a57a5a743894a0e4a801fc3', 'ayu anita', 'Baru', 'Lisa', 'sakit', 'sakit', '800', '800'),
(10, 'Medis-2', '04/12/2017', '21232f297a57a5a743894a0e4a801fc3', 'ayu anita', 'Lama', 'umum', 'ganti power o', 'kontrol orto', '150.000', 'next kontrol 17/12/2017'),
(11, 'Medis-4', '30/11/2017', '21232f297a57a5a743894a0e4a801fc3', 'agus taufik', 'Baru', 'umum', 'komposit', '11 pulp rev', '150000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `odontogram`
--

CREATE TABLE `odontogram` (
  `pasien_id` varchar(9) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `P18C` varchar(9) NOT NULL,
  `P18L` varchar(9) NOT NULL,
  `P18T` varchar(9) NOT NULL,
  `P18R` varchar(9) NOT NULL,
  `P18B` varchar(9) NOT NULL,
  `P17C` varchar(10) NOT NULL,
  `P17T` varchar(10) NOT NULL,
  `P17B` varchar(10) NOT NULL,
  `P17R` varchar(10) NOT NULL,
  `P17L` varchar(10) NOT NULL,
  `P16C` varchar(10) NOT NULL,
  `P16T` varchar(10) NOT NULL,
  `P16B` varchar(10) NOT NULL,
  `P16R` varchar(10) NOT NULL,
  `P16L` varchar(10) NOT NULL,
  `P15C` varchar(10) NOT NULL,
  `P15T` varchar(10) NOT NULL,
  `P15B` varchar(10) NOT NULL,
  `P15R` varchar(10) NOT NULL,
  `P15L` varchar(10) NOT NULL,
  `P14C` varchar(10) NOT NULL,
  `P14T` varchar(10) NOT NULL,
  `P14B` varchar(10) NOT NULL,
  `P14R` varchar(10) NOT NULL,
  `P14L` varchar(10) NOT NULL,
  `P13C` varchar(10) NOT NULL,
  `P13T` varchar(10) NOT NULL,
  `P13B` varchar(10) NOT NULL,
  `P13R` varchar(10) NOT NULL,
  `P13L` varchar(10) NOT NULL,
  `P12C` varchar(10) NOT NULL,
  `P12T` varchar(10) NOT NULL,
  `P12B` varchar(10) NOT NULL,
  `P12R` varchar(10) NOT NULL,
  `P12L` varchar(10) NOT NULL,
  `P11C` varchar(10) NOT NULL,
  `P11T` varchar(10) NOT NULL,
  `P11B` varchar(10) NOT NULL,
  `P11R` varchar(10) NOT NULL,
  `P11L` varchar(10) NOT NULL,
  `P55C` varchar(10) NOT NULL,
  `P55T` varchar(10) NOT NULL,
  `P55B` varchar(10) NOT NULL,
  `P55R` varchar(10) NOT NULL,
  `P55L` varchar(10) NOT NULL,
  `P54C` varchar(10) NOT NULL,
  `P54T` varchar(10) NOT NULL,
  `P54B` varchar(10) NOT NULL,
  `P54R` varchar(10) NOT NULL,
  `P54L` varchar(10) NOT NULL,
  `P53C` varchar(10) NOT NULL,
  `P53T` varchar(10) NOT NULL,
  `P53B` varchar(10) NOT NULL,
  `P53R` varchar(10) NOT NULL,
  `P53L` varchar(10) NOT NULL,
  `P52C` varchar(10) NOT NULL,
  `P52T` varchar(10) NOT NULL,
  `P52B` varchar(10) NOT NULL,
  `P52R` varchar(10) NOT NULL,
  `P52L` varchar(10) NOT NULL,
  `P51C` varchar(10) NOT NULL,
  `P51T` varchar(10) NOT NULL,
  `P51B` varchar(10) NOT NULL,
  `P51R` varchar(10) NOT NULL,
  `P51L` varchar(10) NOT NULL,
  `P85C` varchar(10) NOT NULL,
  `P85T` varchar(10) NOT NULL,
  `P85B` varchar(10) NOT NULL,
  `P85R` varchar(10) NOT NULL,
  `P85L` varchar(10) NOT NULL,
  `P84C` varchar(10) NOT NULL,
  `P84T` varchar(10) NOT NULL,
  `P84B` varchar(10) NOT NULL,
  `P84R` varchar(10) NOT NULL,
  `P84L` varchar(10) NOT NULL,
  `P83C` varchar(10) NOT NULL,
  `P83T` varchar(10) NOT NULL,
  `P83B` varchar(10) NOT NULL,
  `P83R` varchar(10) NOT NULL,
  `P83L` varchar(10) NOT NULL,
  `P82C` varchar(10) NOT NULL,
  `P82T` varchar(10) NOT NULL,
  `P82B` varchar(10) NOT NULL,
  `P82R` varchar(10) NOT NULL,
  `P82L` varchar(10) NOT NULL,
  `P81C` varchar(10) NOT NULL,
  `P81T` varchar(10) NOT NULL,
  `P81B` varchar(10) NOT NULL,
  `P81R` varchar(10) NOT NULL,
  `P81L` varchar(10) NOT NULL,
  `P48C` varchar(10) NOT NULL,
  `P48T` varchar(10) NOT NULL,
  `P48B` varchar(10) NOT NULL,
  `P48R` varchar(10) NOT NULL,
  `P48L` varchar(10) NOT NULL,
  `P47C` varchar(10) NOT NULL,
  `P47T` varchar(10) NOT NULL,
  `P47B` varchar(10) NOT NULL,
  `P47R` varchar(10) NOT NULL,
  `P47L` varchar(10) NOT NULL,
  `P46C` varchar(10) NOT NULL,
  `P46T` varchar(10) NOT NULL,
  `P46B` varchar(10) NOT NULL,
  `P46R` varchar(10) NOT NULL,
  `P46L` varchar(10) NOT NULL,
  `P45C` varchar(10) NOT NULL,
  `P45T` varchar(10) NOT NULL,
  `P45B` varchar(10) NOT NULL,
  `P45R` varchar(10) NOT NULL,
  `P45L` varchar(10) NOT NULL,
  `P44C` varchar(10) NOT NULL,
  `P44T` varchar(10) NOT NULL,
  `P44B` varchar(10) NOT NULL,
  `P44R` varchar(10) NOT NULL,
  `P44L` varchar(10) NOT NULL,
  `P43C` varchar(10) NOT NULL,
  `P43T` varchar(10) NOT NULL,
  `P43B` varchar(10) NOT NULL,
  `P43R` varchar(10) NOT NULL,
  `P43L` varchar(10) NOT NULL,
  `P42C` varchar(10) NOT NULL,
  `P42T` varchar(10) NOT NULL,
  `P42B` varchar(10) NOT NULL,
  `P42R` varchar(10) NOT NULL,
  `P42L` varchar(10) NOT NULL,
  `P41C` varchar(10) NOT NULL,
  `P41T` varchar(10) NOT NULL,
  `P41B` varchar(10) NOT NULL,
  `P41R` varchar(10) NOT NULL,
  `P41L` varchar(10) NOT NULL,
  `P21C` varchar(10) NOT NULL,
  `P21T` varchar(10) NOT NULL,
  `P21B` varchar(10) NOT NULL,
  `P21R` varchar(10) NOT NULL,
  `P21L` varchar(10) NOT NULL,
  `P22C` varchar(10) NOT NULL,
  `P22T` varchar(10) NOT NULL,
  `P22B` varchar(10) NOT NULL,
  `P22R` varchar(10) NOT NULL,
  `P22L` varchar(10) NOT NULL,
  `P23C` varchar(10) NOT NULL,
  `P23T` varchar(10) NOT NULL,
  `P23B` varchar(10) NOT NULL,
  `P23R` varchar(10) NOT NULL,
  `P23L` varchar(10) NOT NULL,
  `P24C` varchar(10) NOT NULL,
  `P24T` varchar(10) NOT NULL,
  `P24B` varchar(10) NOT NULL,
  `P24R` varchar(10) NOT NULL,
  `P24L` varchar(10) NOT NULL,
  `P25C` varchar(10) NOT NULL,
  `P25T` varchar(10) NOT NULL,
  `P25B` varchar(10) NOT NULL,
  `P25R` varchar(10) NOT NULL,
  `P25L` varchar(10) NOT NULL,
  `P26C` varchar(11) NOT NULL,
  `P26T` varchar(11) NOT NULL,
  `P26B` varchar(11) NOT NULL,
  `P26R` varchar(11) NOT NULL,
  `P26L` varchar(11) NOT NULL,
  `P27C` varchar(11) NOT NULL,
  `P27T` varchar(11) NOT NULL,
  `P27B` varchar(11) NOT NULL,
  `P27R` varchar(11) NOT NULL,
  `P27L` varchar(11) NOT NULL,
  `P28C` varchar(11) NOT NULL,
  `P28T` varchar(11) NOT NULL,
  `P28B` varchar(11) NOT NULL,
  `P28R` varchar(10) NOT NULL,
  `P28L` varchar(10) NOT NULL,
  `P61C` varchar(10) NOT NULL,
  `P61T` varchar(10) NOT NULL,
  `P61B` varchar(10) NOT NULL,
  `P61R` varchar(10) NOT NULL,
  `P61L` varchar(10) NOT NULL,
  `P62C` varchar(10) NOT NULL,
  `P62T` varchar(10) NOT NULL,
  `P62B` varchar(10) NOT NULL,
  `P62R` varchar(10) NOT NULL,
  `P62L` varchar(10) NOT NULL,
  `P63C` varchar(10) NOT NULL,
  `P63T` varchar(10) NOT NULL,
  `P63B` varchar(10) NOT NULL,
  `P63R` varchar(10) NOT NULL,
  `P63L` varchar(10) NOT NULL,
  `P64C` varchar(10) NOT NULL,
  `P64T` varchar(10) NOT NULL,
  `P64B` varchar(10) NOT NULL,
  `P64R` varchar(10) NOT NULL,
  `P64L` varchar(10) NOT NULL,
  `P65C` varchar(10) NOT NULL,
  `P65T` varchar(10) NOT NULL,
  `P65B` varchar(10) NOT NULL,
  `P65R` varchar(10) NOT NULL,
  `P65L` varchar(10) NOT NULL,
  `P71C` varchar(11) NOT NULL,
  `P71T` varchar(11) NOT NULL,
  `P71B` varchar(11) NOT NULL,
  `P71R` varchar(11) NOT NULL,
  `P71L` varchar(11) NOT NULL,
  `P72C` varchar(11) NOT NULL,
  `P72T` varchar(11) NOT NULL,
  `P72B` varchar(11) NOT NULL,
  `P72R` varchar(11) NOT NULL,
  `P72L` varchar(11) NOT NULL,
  `P73C` varchar(11) NOT NULL,
  `P73T` varchar(11) NOT NULL,
  `P73B` varchar(11) NOT NULL,
  `P73R` varchar(11) NOT NULL,
  `P73L` varchar(11) NOT NULL,
  `P74C` varchar(11) NOT NULL,
  `P74T` varchar(11) NOT NULL,
  `P74B` varchar(11) NOT NULL,
  `P74R` varchar(11) NOT NULL,
  `P74L` varchar(11) NOT NULL,
  `P75C` varchar(11) NOT NULL,
  `P75T` varchar(11) NOT NULL,
  `P75B` varchar(11) NOT NULL,
  `P75R` varchar(11) NOT NULL,
  `P75L` varchar(11) NOT NULL,
  `P31C` varchar(11) NOT NULL,
  `P31T` varchar(11) NOT NULL,
  `P31B` varchar(11) NOT NULL,
  `P31R` varchar(11) NOT NULL,
  `P31L` varchar(11) NOT NULL,
  `P32C` varchar(11) NOT NULL,
  `P32T` varchar(11) NOT NULL,
  `P32B` varchar(11) NOT NULL,
  `P32R` varchar(11) NOT NULL,
  `P32L` varchar(11) NOT NULL,
  `P33C` varchar(11) NOT NULL,
  `P33T` varchar(11) NOT NULL,
  `P33B` varchar(11) NOT NULL,
  `P33R` varchar(11) NOT NULL,
  `P33L` varchar(11) NOT NULL,
  `P34C` varchar(11) NOT NULL,
  `P34T` varchar(11) NOT NULL,
  `P34B` varchar(11) NOT NULL,
  `P34R` varchar(11) NOT NULL,
  `P34L` varchar(11) NOT NULL,
  `P35C` varchar(11) NOT NULL,
  `P35T` varchar(11) NOT NULL,
  `P35B` varchar(11) NOT NULL,
  `P35R` varchar(11) NOT NULL,
  `P35L` varchar(11) NOT NULL,
  `P36C` varchar(11) NOT NULL,
  `P36T` varchar(11) NOT NULL,
  `P36B` varchar(11) NOT NULL,
  `P36R` varchar(11) NOT NULL,
  `P36L` varchar(11) NOT NULL,
  `P37C` varchar(11) NOT NULL,
  `P37T` varchar(11) NOT NULL,
  `P37B` varchar(11) NOT NULL,
  `P37R` varchar(11) NOT NULL,
  `P37L` varchar(11) NOT NULL,
  `P38C` varchar(11) NOT NULL,
  `P38T` varchar(11) NOT NULL,
  `P38B` varchar(11) NOT NULL,
  `P38R` varchar(11) NOT NULL,
  `P38L` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `odontogram`
--

INSERT INTO `odontogram` (`pasien_id`, `nama_pasien`, `P18C`, `P18L`, `P18T`, `P18R`, `P18B`, `P17C`, `P17T`, `P17B`, `P17R`, `P17L`, `P16C`, `P16T`, `P16B`, `P16R`, `P16L`, `P15C`, `P15T`, `P15B`, `P15R`, `P15L`, `P14C`, `P14T`, `P14B`, `P14R`, `P14L`, `P13C`, `P13T`, `P13B`, `P13R`, `P13L`, `P12C`, `P12T`, `P12B`, `P12R`, `P12L`, `P11C`, `P11T`, `P11B`, `P11R`, `P11L`, `P55C`, `P55T`, `P55B`, `P55R`, `P55L`, `P54C`, `P54T`, `P54B`, `P54R`, `P54L`, `P53C`, `P53T`, `P53B`, `P53R`, `P53L`, `P52C`, `P52T`, `P52B`, `P52R`, `P52L`, `P51C`, `P51T`, `P51B`, `P51R`, `P51L`, `P85C`, `P85T`, `P85B`, `P85R`, `P85L`, `P84C`, `P84T`, `P84B`, `P84R`, `P84L`, `P83C`, `P83T`, `P83B`, `P83R`, `P83L`, `P82C`, `P82T`, `P82B`, `P82R`, `P82L`, `P81C`, `P81T`, `P81B`, `P81R`, `P81L`, `P48C`, `P48T`, `P48B`, `P48R`, `P48L`, `P47C`, `P47T`, `P47B`, `P47R`, `P47L`, `P46C`, `P46T`, `P46B`, `P46R`, `P46L`, `P45C`, `P45T`, `P45B`, `P45R`, `P45L`, `P44C`, `P44T`, `P44B`, `P44R`, `P44L`, `P43C`, `P43T`, `P43B`, `P43R`, `P43L`, `P42C`, `P42T`, `P42B`, `P42R`, `P42L`, `P41C`, `P41T`, `P41B`, `P41R`, `P41L`, `P21C`, `P21T`, `P21B`, `P21R`, `P21L`, `P22C`, `P22T`, `P22B`, `P22R`, `P22L`, `P23C`, `P23T`, `P23B`, `P23R`, `P23L`, `P24C`, `P24T`, `P24B`, `P24R`, `P24L`, `P25C`, `P25T`, `P25B`, `P25R`, `P25L`, `P26C`, `P26T`, `P26B`, `P26R`, `P26L`, `P27C`, `P27T`, `P27B`, `P27R`, `P27L`, `P28C`, `P28T`, `P28B`, `P28R`, `P28L`, `P61C`, `P61T`, `P61B`, `P61R`, `P61L`, `P62C`, `P62T`, `P62B`, `P62R`, `P62L`, `P63C`, `P63T`, `P63B`, `P63R`, `P63L`, `P64C`, `P64T`, `P64B`, `P64R`, `P64L`, `P65C`, `P65T`, `P65B`, `P65R`, `P65L`, `P71C`, `P71T`, `P71B`, `P71R`, `P71L`, `P72C`, `P72T`, `P72B`, `P72R`, `P72L`, `P73C`, `P73T`, `P73B`, `P73R`, `P73L`, `P74C`, `P74T`, `P74B`, `P74R`, `P74L`, `P75C`, `P75T`, `P75B`, `P75R`, `P75L`, `P31C`, `P31T`, `P31B`, `P31R`, `P31L`, `P32C`, `P32T`, `P32B`, `P32R`, `P32L`, `P33C`, `P33T`, `P33B`, `P33R`, `P33L`, `P34C`, `P34T`, `P34B`, `P34R`, `P34L`, `P35C`, `P35T`, `P35B`, `P35R`, `P35L`, `P36C`, `P36T`, `P36B`, `P36R`, `P36L`, `P37C`, `P37T`, `P37B`, `P37R`, `P37L`, `P38C`, `P38T`, `P38B`, `P38R`, `P38L`) VALUES
('Medis-4', 'aaaaaa', 'white', 'white', 'white', 'white', 'white', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'Purple', 'White', 'Purple', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-4', '', 'white', 'white', 'white', 'white', 'white', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-3', 'septy kusuma', '0', '0', '0', '0', '0', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'biru', 'White', 'White', 'White', 'White', 'Purple', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'Gold', 'Purple', 'Purple', 'biru', 'Gold', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-3', 'aaaa', 'white', 'white', 'white', 'white', 'white', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-2', 'septy', 'Green', 'Purple', 'Red', 'black', 'Gold', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'Red', 'White', 'Pink', 'White', 'White', 'White', 'Pink', 'White', 'Pink', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'Gold', 'Pink', 'Green', 'Green', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'black', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'Red', 'White', 'Green', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'Pink', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'Purple', 'White', 'White'),
('Medis-1', 'Rahmat Sabilludin', 'Gold', '0', '0', '0', '0', 'Purple', 'White', 'Purple', 'White', 'biru', 'White', 'White', 'biru', 'White', 'White', 'Gold', '', 'Purple', 'Purple', 'Gold', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'Purple', 'Purple', 'Purple', 'Purple', 'Purple', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'biru', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'Purple', 'Gold', 'biru', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-5', 'as', 'Purple', 'Purple', 'Gold', 'Gold', 'Purple', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-6', 'John', 'white', 'white', 'white', 'white', 'white', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-1', 'Abdullah Afyudi', 'white', 'white', 'white', 'white', 'white', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'Purple', 'Purple', 'Purple', 'Gold', 'Purple', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-2', 'ayu anita', 'white', 'white', 'white', 'white', 'white', 'Purple', 'Purple', 'Purple', 'White', 'Gold', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-3', 'Siti Aisah', 'white', 'white', 'white', 'white', 'white', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-3', 'Siti Aisyah', 'white', 'white', 'white', 'white', 'white', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-159', 'agus taufik', 'white', 'white', 'white', 'white', 'white', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White'),
('Medis-4', 'agus taufik', 'white', 'white', 'white', 'white', 'white', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White', 'White');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `inc` int(9) NOT NULL,
  `pasien_id` varchar(9) NOT NULL,
  `pasien_nama` varchar(90) NOT NULL,
  `pasien_alamat` varchar(90) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `pekerjaan` varchar(90) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`inc`, `pasien_id`, `pasien_nama`, `pasien_alamat`, `usia`, `pekerjaan`, `kategori`) VALUES
(2, 'Medis-2', 'ayu anita', 'malang ', '18', 'mahasiswa', 'Baru'),
(3, 'Medis-3', 'Siti Aisah', 'Paiton', '26', 'Tani', 'Baru'),
(4, 'Medis-4', 'agus taufik', 'bucor wetan', '18', '', 'Baru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`inc`),
  ADD KEY `pelanggan_id` (`dokter_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `medis`
--
ALTER TABLE `medis`
  ADD PRIMARY KEY (`inc`),
  ADD KEY `username` (`username`),
  ADD KEY `jual_id` (`medis_id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`inc`),
  ADD KEY `pelanggan_id` (`pasien_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `medis`
--
ALTER TABLE `medis`
  ADD CONSTRAINT `medis_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
