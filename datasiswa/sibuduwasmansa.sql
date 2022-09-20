-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2022 pada 15.22
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibuduwasmansa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('kesiswaan', 'bukuinduk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nisn` text NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `status_dalam_keluarga` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `diterima_di_sekolah_ini_kelas` varchar(100) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `ijazah` varchar(20) NOT NULL,
  `skhun` varchar(20) NOT NULL,
  `orang_tua` varchar(100) NOT NULL,
  `alamat_orang_tua` varchar(100) NOT NULL,
  `pekerjaan_orang_tua` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `telepon_wali` varchar(20) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL,
  `mutasi` varchar(100) NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `alumni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `foto`, `nama`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `gender`, `agama`, `anak_ke`, `status_dalam_keluarga`, `alamat`, `telepon`, `diterima_di_sekolah_ini_kelas`, `sekolah_asal`, `ijazah`, `skhun`, `orang_tua`, `alamat_orang_tua`, `pekerjaan_orang_tua`, `nama_wali`, `alamat_wali`, `telepon_wali`, `pekerjaan_wali`, `mutasi`, `tahun_masuk`, `alumni`) VALUES
(1, 'jackma.jpg', 'Adam Bagus Nugraha Rois Buana', '9993750494', 'Semarang', '1999-02-27', 'L', 'Islam', 1, 'Anak Kandung', 'Jl. Leyangan Indah 9 No.87 Rt.02 Rw. 10 Leyangan, Kec. Ungaran Timur, Kab. Semarang', '0', 'X', 'SMPN 3 Ungaran', '-', '-', 'Toyibi', 'Jl. Leyangan Indah 9 No.87 Rt.02 Rw. 10 Leyangan, Kec. Ungaran Timur, Kab. Semarang', 'Karyawan Swasta', '', '', '0', '', '', 2014, 2017);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
