-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2019 pada 22.46
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_senjata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_amunisi`
--

CREATE TABLE `tb_amunisi` (
  `id` int(11) NOT NULL,
  `no_amunisi` varchar(50) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `kaliber` varchar(100) NOT NULL,
  `jumlah_amunisi` int(100) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_amunisi`
--

INSERT INTO `tb_amunisi` (`id`, `no_amunisi`, `jenis`, `kaliber`, `jumlah_amunisi`, `tgl_input`) VALUES
(8, 'AM0001', 'Rev', '38Spc', 895, '2019-01-01'),
(9, 'AM0002', 'TJ', '22  LR', 1000, '2019-01-05'),
(10, 'AM0003', 'DK', '7.9MM', 900, '2019-01-07'),
(11, 'AM0004', 'aaa', '38Spc', 1000, '2019-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemohon`
--

CREATE TABLE `tb_pemohon` (
  `nrp` int(11) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `kesatuan` varchar(100) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemohon`
--

INSERT INTO `tb_pemohon` (`nrp`, `nama_anggota`, `pangkat`, `kesatuan`, `tgl_input`) VALUES
(15630781, 'ade', 'Brigadir', 'DIR INTELKAM', '2019-01-01'),
(15630783, 'Fazriyadi', 'BRIPKA', 'DIT RESKRIM UM', '2019-01-01'),
(15630784, 'AGUS MURTI W,', 'AIPTU', 'DIT RESKRIM UM', '2019-01-01'),
(15630785, 'AGUS RAMADANA', 'Kombes Pol', 'DIT RESKRIM SUS', '2019-01-01'),
(15630786, 'ARIF DIRDANA', 'Kompol', 'BRIMOB', '2019-01-01'),
(15630798, 'Agus', 'Brigadir', 'DIR INTELKAM', '2019-01-02'),
(15630888, 'Budi', 'AIPTU', 'BID PROPAM', '2019-01-01'),
(156307889, 'Putra.B', 'Brigadir', 'BRIMOB', '2019-01-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_senjata`
--

CREATE TABLE `tb_senjata` (
  `nomor_seri` int(100) NOT NULL,
  `jenis_senpi` varchar(100) NOT NULL,
  `kondisi` enum('LP','TLP') NOT NULL,
  `tahun_perolehan` varchar(100) NOT NULL,
  `jumlah_senpi` int(100) NOT NULL,
  `kaliber` varchar(100) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_senjata`
--

INSERT INTO `tb_senjata` (`nomor_seri`, `jenis_senpi`, `kondisi`, `tahun_perolehan`, `jumlah_senpi`, `kaliber`, `tgl_input`) VALUES
(5541, 'R1V1 Pindad', 'LP', '1989', 1, '38Spc', '2018-12-11'),
(8961, 'Mouser', 'LP', '1989', 1, '7.9MM', '2019-01-08'),
(55413, 'Senpi Genggam CPP', 'TLP', '1989', 1, '38Spc', '2018-12-05'),
(89911, 'Senpi Genggam Rev', 'LP', '1989', 1, '22LR', '2019-01-08'),
(16767776, 'AKMM', 'LP', '1989', 1, '38Spc', '2019-01-02'),
(19909009, 'R1V3', 'LP', '1989', 1, '38Spc', '2019-01-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `no_transaksi` varchar(150) NOT NULL,
  `no_senpi` varchar(50) NOT NULL,
  `no_amunisi` varchar(50) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `nrp` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(100) NOT NULL,
  `tgl_kembali` varchar(100) NOT NULL,
  `status` enum('pinjam','kembali') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `no_transaksi`, `no_senpi`, `no_amunisi`, `jumlah`, `nrp`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(54, 'TR0001', '5541', 'AM0001', 10, '15630781', 'ade', '2019-01-08', '2020-01-08', 'kembali');

--
-- Trigger `tb_transaksi`
--
DELIMITER $$
CREATE TRIGGER `pinjam` AFTER INSERT ON `tb_transaksi` FOR EACH ROW BEGIN
UPDATE tb_amunisi SET
jumlah_amunisi = jumlah_amunisi - NEW.jumlah
WHERE
no_amunisi = NEW.no_amunisi;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', '1'),
(3, 'gudang', 'gudang', 'gudang#gmail.com', 'gudang', '2'),
(9, 'teguh', 'teguh', 'a', 'admin', '1'),
(11, 'ade', 'ade', 'teguh.irawan@doctor.com', 'ade', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_amunisi`
--
ALTER TABLE `tb_amunisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  ADD PRIMARY KEY (`nrp`);

--
-- Indeks untuk tabel `tb_senjata`
--
ALTER TABLE `tb_senjata`
  ADD PRIMARY KEY (`nomor_seri`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_amunisi`
--
ALTER TABLE `tb_amunisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
