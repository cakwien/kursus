-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2021 pada 01.23
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` tinyint(2) NOT NULL,
  `nm_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ampu`
--

CREATE TABLE `ampu` (
  `id_ampu` smallint(4) NOT NULL,
  `id_tentor` int(11) NOT NULL,
  `id_kelas` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ampu`
--

INSERT INTO `ampu` (`id_ampu`, `id_tentor`, `id_kelas`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_paket`
--

CREATE TABLE `detail_paket` (
  `id_detail` smallint(4) NOT NULL,
  `id_mapel` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` smallint(3) NOT NULL,
  `nm_kelas` varchar(255) NOT NULL,
  `jenjang` varchar(255) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nm_kelas`, `jenjang`, `kuota`) VALUES
(1, 'UTBK', 'SMA/SMK', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id_kelas_siswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` smallint(3) NOT NULL,
  `paralel` varchar(2) NOT NULL,
  `tgl_awal` int(11) NOT NULL,
  `tgl_akhir` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id_kelas_siswa`, `id_siswa`, `id_kelas`, `paralel`, `tgl_awal`, `tgl_akhir`, `status`) VALUES
(1, 1, 1, '1', 0, 0, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` smallint(3) NOT NULL,
  `nm_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `id_ampu` smallint(4) NOT NULL,
  `judul` text NOT NULL,
  `keterangan` text NOT NULL,
  `link` text NOT NULL,
  `jadwal` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `id_ampu`, `judul`, `keterangan`, `link`, `jadwal`, `time`) VALUES
(1, 1, 'Bahasa Indonesia', 'ini schedule bahasa jerman', 'lipsum.com', 1634321760, 1633889789),
(2, 1, 'Pengenalan Angka', 'Test 2', 'https://www.lipsum.com/', 1634353200, 1633892963),
(3, 1, 'Refrensi Materi 2', 'mengulang materi yang sudah di bahas sebelumnya', 'https://drive.google.com/file/d/1QNdzWaTQH3myt_ttWmytTYC_CCmIXurH/view?usp=sharing', 1634266800, 1633893235);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` smallint(4) NOT NULL,
  `nm_paket` varchar(255) NOT NULL,
  `id_kelas` smallint(3) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_kelas`
--

CREATE TABLE `paket_kelas` (
  `id_beli` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `tgl_awal` int(11) NOT NULL,
  `tgl_akhir` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_siswa`
--

CREATE TABLE `paket_siswa` (
  `id_ps` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_paket` smallint(4) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `id_tagihan` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `privat`
--

CREATE TABLE `privat` (
  `id_privat` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_tentor` int(11) NOT NULL,
  `tgl_awal` int(11) NOT NULL,
  `tgl_akhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nm_siswa` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tp_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` char(16) NOT NULL,
  `email` varchar(200) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nm_siswa`, `alamat`, `tp_lahir`, `tgl_lahir`, `no_hp`, `email`, `asal_sekolah`, `foto`, `password`) VALUES
(1, 'Endah', 'Kaliputih', 'Banyuwangi', '1996-11-12', '081235010010', 'endahndung@gmail.com', 'SMKN 1 Banyuwangi', '', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_tarif` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `kode` tinyint(3) NOT NULL,
  `jumlah_tagihan` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `time_limit` int(11) NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarif_kelas`
--

CREATE TABLE `tarif_kelas` (
  `id_tarif` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `durasi` varchar(200) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentor`
--

CREATE TABLE `tentor` (
  `id_tentor` int(11) NOT NULL,
  `nm_tentor` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tp_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` char(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentor`
--

INSERT INTO `tentor` (`id_tentor`, `nm_tentor`, `alamat`, `tp_lahir`, `tgl_lahir`, `no_hp`, `email`, `foto`, `password`) VALUES
(1, 'Noval Harwin', 'Taman Baru Banyuwangi', 'Banyuwangi', '1995-06-27', '081235010010', 'wiensoftdev@gmail.com', '', '66682602a0b4c28dc7548a72aa26c578');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `ampu`
--
ALTER TABLE `ampu`
  ADD PRIMARY KEY (`id_ampu`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id_kelas_siswa`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `paket_kelas`
--
ALTER TABLE `paket_kelas`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indeks untuk tabel `paket_siswa`
--
ALTER TABLE `paket_siswa`
  ADD PRIMARY KEY (`id_ps`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indeks untuk tabel `privat`
--
ALTER TABLE `privat`
  ADD PRIMARY KEY (`id_privat`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indeks untuk tabel `tarif_kelas`
--
ALTER TABLE `tarif_kelas`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indeks untuk tabel `tentor`
--
ALTER TABLE `tentor`
  ADD PRIMARY KEY (`id_tentor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` tinyint(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ampu`
--
ALTER TABLE `ampu`
  MODIFY `id_ampu` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `id_kelas_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` smallint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` smallint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `paket_kelas`
--
ALTER TABLE `paket_kelas`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `paket_siswa`
--
ALTER TABLE `paket_siswa`
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `privat`
--
ALTER TABLE `privat`
  MODIFY `id_privat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tarif_kelas`
--
ALTER TABLE `tarif_kelas`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tentor`
--
ALTER TABLE `tentor`
  MODIFY `id_tentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
