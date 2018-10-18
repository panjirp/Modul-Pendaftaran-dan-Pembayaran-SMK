-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Nov 2016 pada 02.45
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk_pariwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(100) NOT NULL,
  `admin_nama` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_password`) VALUES
('admin', 'Reza Andita Akbar', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` varchar(10) NOT NULL,
  `id_jenis_beasiswa` varchar(5) NOT NULL,
  `sumber` varchar(99) NOT NULL,
  `tahun_mulai` varchar(4) NOT NULL,
  `tahun_selesai` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `id_jenis_beasiswa`, `sumber`, `tahun_mulai`, `tahun_selesai`) VALUES
('B01', '01', 'Pemerintah', '2016', '2018'),
('B02', '02', 'Pemerintah', '2016', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_prestasi`
--

CREATE TABLE `catatan_prestasi` (
  `id_prestasi` varchar(15) NOT NULL,
  `id_jenis_prestasi` varchar(15) NOT NULL,
  `id_tingkat` varchar(5) NOT NULL,
  `nama_prestasi` varchar(99) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `penyelenggara` varchar(99) NOT NULL,
  `nis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `catatan_prestasi`
--

INSERT INTO `catatan_prestasi` (`id_prestasi`, `id_jenis_prestasi`, `id_tingkat`, `nama_prestasi`, `tahun`, `penyelenggara`, `nis`) VALUES
('P001', '03', '04', 'Juara 1 Lomba Lari', '2015', 'Pemerintah Kota', '1120201603');

-- --------------------------------------------------------

--
-- Struktur dari tabel `parents`
--

CREATE TABLE `parents` (
  `id_parents` varchar(15) NOT NULL,
  `name` varchar(99) NOT NULL,
  `id_relation` varchar(5) NOT NULL,
  `place_birth` varchar(99) NOT NULL,
  `nationality` varchar(99) NOT NULL DEFAULT 'Indonesia',
  `id_religion` varchar(5) NOT NULL,
  `id_education` varchar(5) DEFAULT NULL,
  `id_occupation` varchar(5) DEFAULT NULL,
  `address` varchar(99) NOT NULL,
  `home_status` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `salary` int(9) DEFAULT NULL,
  `nis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `parents`
--

INSERT INTO `parents` (`id_parents`, `name`, `id_relation`, `place_birth`, `nationality`, `id_religion`, `id_education`, `id_occupation`, `address`, `home_status`, `phone`, `salary`, `nis`) VALUES
('PR01', 'Bayu', '01', 'Sumedang', 'Indonesia', '01', '3', '06', 'Cibinong', 'Rumah Sendiri', '085877779999', 8000000, '1120201603'),
('PR02', 'Melinda', '02', 'Bogor', 'Indonesia', '02', '4', '08', 'Bogor', 'Rumah Sendiri', '085577779999', 13000000, '1120201601'),
('PR03', 'Hendra', '01', 'Jakarta', 'Indonesia', '03', '3', '05', 'Bogor', 'Rumah Sendiri', '085877779999', 9000000, '1120201602'),
('PR04', 'Warso', '01', 'Cibinong', 'Indonesia', '01', '2', '04', 'Cibinong', 'Rumah Sendiri', '088899996666', 6000000, '1120201604'),
('PR05', 'Karin', '02', 'Bandung', 'Indonesia', '01', '3', '09', 'Cibinong', 'Rumah Sendiri', '085633332221', 10000000, '1120201605');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_beasiswa`
--

CREATE TABLE `ref_beasiswa` (
  `id_jenis_beasiswa` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_beasiswa`
--

INSERT INTO `ref_beasiswa` (`id_jenis_beasiswa`, `detail`) VALUES
('01', 'Prestasi'),
('02', 'Bantuan Siswa Miskin'),
('03', 'Pendidikan'),
('04', 'Unggulan'),
('05', 'Ikatan Dinas'),
('06', 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_education`
--

CREATE TABLE `ref_education` (
  `id_education` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_education`
--

INSERT INTO `ref_education` (`id_education`, `detail`) VALUES
('1', 'SD'),
('2', 'SMP'),
('3', 'SMA/SMK Sederajat'),
('4', 'S1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_majors`
--

CREATE TABLE `ref_majors` (
  `id_major` varchar(5) NOT NULL,
  `detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_majors`
--

INSERT INTO `ref_majors` (`id_major`, `detail`) VALUES
('01', 'Jasaboga'),
('02', 'TKJ'),
('03', 'Administrasi Perhotelan'),
('04', 'Administrasi Perkantoran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_occupation`
--

CREATE TABLE `ref_occupation` (
  `id_occupation` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_occupation`
--

INSERT INTO `ref_occupation` (`id_occupation`, `detail`) VALUES
('01', 'Tidak Bekerja'),
('02', 'Nelayan'),
('03', 'Petani'),
('04', 'Peternak'),
('05', 'PNS/Polri/TNI'),
('06', 'Karyawan Swasta'),
('07', 'Pedagang Kecil'),
('08', 'Pedagang Besar'),
('09', 'Wiraswasta'),
('10', 'Wirausaha'),
('11', 'Buruh'),
('12', 'Pensiunan'),
('13', 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_prestasi`
--

CREATE TABLE `ref_prestasi` (
  `id_jenis_prestasi` varchar(15) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_prestasi`
--

INSERT INTO `ref_prestasi` (`id_jenis_prestasi`, `detail`) VALUES
('01', 'Sains'),
('02', 'Seni'),
('03', 'Olahraga'),
('04', 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_relation`
--

CREATE TABLE `ref_relation` (
  `id_relation` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_relation`
--

INSERT INTO `ref_relation` (`id_relation`, `detail`) VALUES
('01', 'Ayah'),
('02', 'Ibu'),
('03', 'Kakak'),
('04', 'Adik'),
('05', 'Paman'),
('06', 'Bibi'),
('07', 'Kakek'),
('08', 'Nenek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_religions`
--

CREATE TABLE `ref_religions` (
  `id_religion` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_religions`
--

INSERT INTO `ref_religions` (`id_religion`, `detail`) VALUES
('01', 'Islam'),
('02', 'Kristen'),
('03', 'Katolik'),
('04', 'Hindu'),
('05', 'Buddha'),
('06', 'Konghucu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_special_needs`
--

CREATE TABLE `ref_special_needs` (
  `id_special_needs` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_special_needs`
--

INSERT INTO `ref_special_needs` (`id_special_needs`, `detail`) VALUES
('01', 'Netra'),
('02', 'Rungu'),
('03', 'Grahita Sedang'),
('04', 'Grahita Ringan'),
('05', 'Daksa Sedang'),
('06', 'Daksa Ringan'),
('07', 'Laras'),
('08', 'Wicara'),
('09', 'Hyperaktif'),
('10', 'Cerdas/Istimewa'),
('11', 'Bakat Istimewa'),
('12', 'Indigo'),
('13', 'Down Syndrome'),
('14', 'Autis'),
('15', 'Kesulitan Belajar'),
('16', 'Narkoba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_status_pembayaran`
--

CREATE TABLE `ref_status_pembayaran` (
  `id_status_pembayaran` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_status_pembayaran`
--

INSERT INTO `ref_status_pembayaran` (`id_status_pembayaran`, `detail`) VALUES
('1', 'Lunas'),
('2', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_status_siswa`
--

CREATE TABLE `ref_status_siswa` (
  `id_status_siswa` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_status_siswa`
--

INSERT INTO `ref_status_siswa` (`id_status_siswa`, `detail`) VALUES
('1', 'Aktif'),
('2', 'Lulus'),
('3', 'Keluar'),
('4', 'Pindah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_time_spent`
--

CREATE TABLE `ref_time_spent` (
  `id_time_spent` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_time_spent`
--

INSERT INTO `ref_time_spent` (`id_time_spent`, `detail`) VALUES
('1', '< 30 Menit'),
('2', '30-60 Menit'),
('3', '> 60 Menit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_tingkat`
--

CREATE TABLE `ref_tingkat` (
  `id_tingkat` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_tingkat`
--

INSERT INTO `ref_tingkat` (`id_tingkat`, `detail`) VALUES
('01', 'Sekolah'),
('02', 'Kecamatan'),
('03', 'Kabupaten'),
('04', 'Kota'),
('05', 'Propinsi'),
('06', 'Nasional'),
('07', 'International');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_transports`
--

CREATE TABLE `ref_transports` (
  `id_transport` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_transports`
--

INSERT INTO `ref_transports` (`id_transport`, `detail`) VALUES
('01', 'Jalan Kaki'),
('02', 'Kendaraan Pribadi'),
('03', 'Kendaraan Umum/Angkot'),
('04', 'Jemputan Sekolah'),
('05', 'Kereta'),
('06', 'Ojek'),
('07', 'Andong/Becak'),
('08', 'Perahu Penyebrangan/Rakit'),
('09', 'Sepeda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siblings`
--

CREATE TABLE `siblings` (
  `id_sibling` varchar(15) NOT NULL,
  `name` varchar(99) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `school` varchar(99) DEFAULT NULL,
  `id_occupation` varchar(5) DEFAULT NULL,
  `nis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `nis` varchar(50) NOT NULL,
  `name` varchar(99) NOT NULL,
  `weight` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `blood_type` varchar(5) NOT NULL DEFAULT '-',
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(99) DEFAULT NULL,
  `sex` char(1) NOT NULL,
  `place_birth` varchar(99) NOT NULL,
  `date_birth` date NOT NULL,
  `nationality` varchar(99) NOT NULL DEFAULT 'Indonesia',
  `id_religion` varchar(5) NOT NULL,
  `id_special_needs` varchar(5) DEFAULT NULL,
  `stay_with` varchar(99) NOT NULL,
  `address` varchar(99) NOT NULL,
  `previous_school` varchar(99) NOT NULL,
  `id_major` varchar(5) NOT NULL,
  `grade` varchar(99) NOT NULL,
  `nisn` varchar(50) DEFAULT NULL,
  `nik` varchar(99) DEFAULT NULL,
  `skhun_smp` varchar(99) DEFAULT NULL,
  `no_kps` varchar(99) DEFAULT NULL,
  `distance_school` int(5) DEFAULT NULL,
  `id_time_spent` varchar(5) DEFAULT NULL,
  `id_transport` varchar(5) DEFAULT NULL,
  `id_status_siswa` varchar(5) NOT NULL,
  `id_status_pembayaran` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`nis`, `name`, `weight`, `height`, `blood_type`, `phone`, `email`, `sex`, `place_birth`, `date_birth`, `nationality`, `id_religion`, `id_special_needs`, `stay_with`, `address`, `previous_school`, `id_major`, `grade`, `nisn`, `nik`, `skhun_smp`, `no_kps`, `distance_school`, `id_time_spent`, `id_transport`, `id_status_siswa`, `id_status_pembayaran`) VALUES
('1120201601', 'Azka', 55, 140, 'AB', '085888997788', 'azka@gmail.com', 'L', 'Bogor', '1999-11-03', 'Indonesia', '02', NULL, 'Orang Tua', 'Bogor', 'SMP Bogor', '03', 'AP 1', NULL, NULL, NULL, NULL, 7, '1', '02', '1', '1'),
('1120201602', 'Blenda', 48, 138, 'B', '081212123365', 'blenda@gmail.com', 'P', 'Jakarta', '1999-09-13', 'Indonesia', '03', NULL, 'Orang Tua', 'Bogor', 'SMP Jakarta', '04', 'AK 1', NULL, NULL, NULL, NULL, 10, '2', '02', '1', '1'),
('1120201603', 'Aqila', 48, 140, 'O', '085777874444', 'awila@gmail.com', 'P', 'Jakarta', '1999-10-04', 'Indonesia', '01', '11', 'Orang Tua', 'Cibinong', 'SMP Cibinong', '03', 'AP2', NULL, NULL, NULL, NULL, 15, '3', '02', '1', '1'),
('1120201604', 'Abi', 56, 150, 'A', '085899996663', 'abi@gmail.com', 'L', 'Bogor', '1999-06-14', 'Indonesia', '01', NULL, 'Orang Tua', 'Cibinong', 'SMP Cibinong', '02', 'TKJ 2', NULL, NULL, NULL, NULL, 1, '1', '1', '1', '1'),
('1120201605', 'Rine', 40, 138, 'B', '085877799996', NULL, 'P', 'Bogor', '1999-08-02', 'Indonesia', '01', NULL, 'Orang Tua', 'Citayam', 'SMP Citayam', '01', 'JB 1', NULL, NULL, NULL, NULL, 1, '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indexes for table `catatan_prestasi`
--
ALTER TABLE `catatan_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id_parents`);

--
-- Indexes for table `ref_beasiswa`
--
ALTER TABLE `ref_beasiswa`
  ADD PRIMARY KEY (`id_jenis_beasiswa`);

--
-- Indexes for table `ref_education`
--
ALTER TABLE `ref_education`
  ADD PRIMARY KEY (`id_education`);

--
-- Indexes for table `ref_majors`
--
ALTER TABLE `ref_majors`
  ADD PRIMARY KEY (`id_major`);

--
-- Indexes for table `ref_occupation`
--
ALTER TABLE `ref_occupation`
  ADD PRIMARY KEY (`id_occupation`);

--
-- Indexes for table `ref_prestasi`
--
ALTER TABLE `ref_prestasi`
  ADD PRIMARY KEY (`id_jenis_prestasi`);

--
-- Indexes for table `ref_relation`
--
ALTER TABLE `ref_relation`
  ADD PRIMARY KEY (`id_relation`);

--
-- Indexes for table `ref_religions`
--
ALTER TABLE `ref_religions`
  ADD PRIMARY KEY (`id_religion`);

--
-- Indexes for table `ref_special_needs`
--
ALTER TABLE `ref_special_needs`
  ADD PRIMARY KEY (`id_special_needs`);

--
-- Indexes for table `ref_status_pembayaran`
--
ALTER TABLE `ref_status_pembayaran`
  ADD PRIMARY KEY (`id_status_pembayaran`);

--
-- Indexes for table `ref_status_siswa`
--
ALTER TABLE `ref_status_siswa`
  ADD PRIMARY KEY (`id_status_siswa`);

--
-- Indexes for table `ref_time_spent`
--
ALTER TABLE `ref_time_spent`
  ADD PRIMARY KEY (`id_time_spent`);

--
-- Indexes for table `ref_tingkat`
--
ALTER TABLE `ref_tingkat`
  ADD PRIMARY KEY (`id_tingkat`);

--
-- Indexes for table `ref_transports`
--
ALTER TABLE `ref_transports`
  ADD PRIMARY KEY (`id_transport`);

--
-- Indexes for table `siblings`
--
ALTER TABLE `siblings`
  ADD PRIMARY KEY (`id_sibling`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD UNIQUE KEY `s_nisn_uq` (`nisn`),
  ADD UNIQUE KEY `s_email_uq` (`email`),
  ADD UNIQUE KEY `s_nik_uq` (`nik`),
  ADD UNIQUE KEY `s_skhun_uq` (`skhun_smp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
