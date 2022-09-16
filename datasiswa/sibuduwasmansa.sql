-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2022 pada 03.17
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
  `tempat lahir` varchar(100) NOT NULL,
  `tanggal lahir` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `anak ke` int(11) NOT NULL,
  `status dalam keluarga` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `diterima di sekolah ini kelas` varchar(100) NOT NULL,
  `sekolah asal` varchar(100) NOT NULL,
  `ijazah` varchar(20) NOT NULL,
  `skhun` varchar(20) NOT NULL,
  `orang tua` varchar(100) NOT NULL,
  `alamat orang tua` varchar(100) NOT NULL,
  `pekerjaan orang tua` varchar(100) NOT NULL,
  `nama wali` varchar(100) NOT NULL,
  `alamat wali` varchar(100) NOT NULL,
  `telepon wali` varchar(20) NOT NULL,
  `pekerjaan wali` varchar(100) NOT NULL,
  `mutasi` varchar(100) NOT NULL,
  `tahun masuk` int(11) NOT NULL,
  `alumni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `foto`, `nama`, `nisn`, `tempat lahir`, `tanggal lahir`, `gender`, `agama`, `anak ke`, `status dalam keluarga`, `alamat`, `telepon`, `diterima di sekolah ini kelas`, `sekolah asal`, `ijazah`, `skhun`, `orang tua`, `alamat orang tua`, `pekerjaan orang tua`, `nama wali`, `alamat wali`, `telepon wali`, `pekerjaan wali`, `mutasi`, `tahun masuk`, `alumni`) VALUES
(1, 'jackma.jpg', 'Adam Bagus Nugraha Rois Buana', '9993750494', 'Semarang', '1999-02-27', 'L', 'Islam', 1, 'Anak Kandung', 'Jl. Leyangan Indah 9 No.87 Rt.02 Rw. 10 Leyangan, Kec. Ungaran Timur, Kab. Semarang', '-', 'X', 'SMPN 3 Ungaran', '-', '-', 'Toyibi', 'Jl. Leyangan Indah 9 No.87 Rt.02 Rw. 10 Leyangan, Kec. Ungaran Timur, Kab. Semarang', 'Karyawan Swasta', '', '', '-', '', '', 2014, 2017);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
