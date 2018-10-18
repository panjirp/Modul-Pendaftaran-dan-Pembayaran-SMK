-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 06:46 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(100) NOT NULL,
  `admin_nama` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_password`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bayar_lks`
--

CREATE TABLE `bayar_lks` (
  `kd_bayar` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `kd_lks` varchar(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar_lks`
--

INSERT INTO `bayar_lks` (`kd_bayar`, `nis`, `name`, `kd_lks`, `bayar`, `tgl_bayar`) VALUES
(6, '1120201601', 'Azka', '1', 2901, '2016-11-21'),
(7, '1120201604', 'Abi', '1', 1245, '2016-11-22'),
(8, '1120201604', 'Abi', '1', 453, '2016-11-22'),
(9, '1120201603', 'Aqila', '1', 2000, '2016-11-23'),
(10, '1120201602', 'Blenda', '1', 12324, '2016-11-27'),
(11, '1120201604', 'Abi', '1', 302, '2016-12-09'),
(12, '1120201601', 'Azka', '1', 147099, '2016-12-13'),
(14, '1120201605', 'Rine', '1', 100000, '2016-12-13'),
(15, '1120201605', 'Rine', '1', 50000, '2016-12-13'),
(16, '1120201604', 'Abi', '1', 100000, '2016-12-14'),
(17, '1120201602', 'Blenda', '1', 1578, '2016-12-17'),
(19, '1120201602', 'Blenda', '1', 5600, '2016-12-19'),
(20, '1120201601', 'Azka', '1', 2000, '2016-12-19'),
(21, '1120201601', 'Azka', '1', 1800, '2016-12-19'),
(22, '1120201601', 'Azka', '1', 16200, '2016-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `bayar_pkl`
--

CREATE TABLE `bayar_pkl` (
  `kd_bayar` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `kd_pkl` varchar(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar_pkl`
--

INSERT INTO `bayar_pkl` (`kd_bayar`, `nis`, `name`, `kd_pkl`, `bayar`, `tgl_bayar`) VALUES
(3, '1120201601', 'Azka', '1', 9083, '2016-11-20'),
(5, '1120201604', 'Abi', '1', 12523, '2016-11-22'),
(6, '1120201604', 'Abi', '1', 654, '2016-11-22'),
(7, '1120201604', 'Abi', '1', 823, '2016-12-09'),
(9, '1120201602', 'Blenda', '1', 4000, '2016-12-09'),
(10, '1120201603', 'Aqila', '1', 29020, '2016-12-09'),
(11, '1120201603', 'Aqila', '1', 980, '2016-12-09'),
(12, '1120201601', 'Azka', '1', 490917, '2016-12-13'),
(13, '1120201604', 'Abi', '1', 100000, '2016-12-14'),
(14, '1120201605', 'Rine', '1', 40000, '2016-12-16'),
(15, '1120201602', 'Blenda', '1', 4555, '2016-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `bayar_spp`
--

CREATE TABLE `bayar_spp` (
  `kd_bayar` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_spp` int(11) DEFAULT NULL,
  `bayar` int(11) NOT NULL,
  `bulan_bayar` varchar(11) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar_spp`
--

INSERT INTO `bayar_spp` (`kd_bayar`, `nis`, `name`, `id_spp`, `bayar`, `bulan_bayar`, `tgl_bayar`) VALUES
(8, '1120201604', 'Abi', 1, 100000, 'Februari', '2016-11-22'),
(9, '1120201604', 'Abi', 1, 50000, 'Januari', '2016-11-22'),
(10, '1120201602', 'Blenda', 2, 100000, 'Januari', '2016-11-27'),
(25, '1120201604', 'Abi', 1, 200000, 'Februari', '2016-12-14'),
(26, '1120201605', 'Rine', 4, 50000, 'Januari', '2016-12-16'),
(27, '1120201604', 'Abi', 1, 20000, 'Desember', '2016-12-19'),
(30, '1120201601', 'Azka', 3, 180000, 'November', '2016-12-19'),
(31, '1120201601', 'Azka', 3, 180000, 'Desember', '2016-12-19'),
(37, '1120201601', 'Azka', 3, 180000, 'Februari', '2016-12-19'),
(38, '1120201601', 'Azka', 3, 180000, 'Januari', '2016-12-19'),
(39, '1120201601', 'Azka', 3, 180000, 'Maret', '2016-12-19'),
(40, '1120201601', 'Azka', 3, 180000, 'April', '2016-12-19'),
(41, '1120201601', 'Azka', 3, 180000, 'Mei', '2016-12-19'),
(42, '1120201601', 'Azka', 3, 180000, 'Juni', '2016-12-19'),
(43, '1120201601', 'Azka', 3, 180000, 'Juli', '2016-12-19'),
(44, '1120201601', 'Azka', 3, 180000, 'Agustus', '2016-12-19'),
(45, '1120201601', 'Azka', 3, 180000, 'September', '2016-12-19'),
(46, '1120201601', 'Azka', 3, 180000, 'Oktober', '2016-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `bayar_ujian`
--

CREATE TABLE `bayar_ujian` (
  `kd_bayar` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_ujian` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar_ujian`
--

INSERT INTO `bayar_ujian` (`kd_bayar`, `nis`, `name`, `id_ujian`, `bayar`, `tgl_bayar`) VALUES
(8, '1120201604', 'Abi', 3, 10020, '2016-11-22'),
(9, '1120201604', 'Abi', 2, 10990, '2016-11-22'),
(10, '1120201604', 'Abi', 1, 1234, '2016-11-22'),
(11, '1120201602', 'Blenda', 2, 2317, '2016-11-22'),
(13, '1120201604', 'Abi', 2, 1222, '2016-11-28'),
(14, '1120201601', 'Azka', 1, 9989, '2016-11-30'),
(20, '1120201601', 'Azka', 2, 160011, '2016-12-13'),
(21, '1120201601', 'Azka', 3, 2997000, '2016-12-13'),
(23, '1120201605', 'Rine', 1, 10000, '2016-12-13'),
(24, '1120201604', 'Abi', 3, 50000, '2016-12-14'),
(25, '1120201605', 'Rine', 2, 20000, '2016-12-16'),
(28, '1120201604', 'Abi', 1, 3432, '2016-12-19'),
(30, '1120201601', 'Azka', 1, 114732, '2016-12-19'),
(32, '1120201601', 'Azka', 1, 17767, '2016-12-19'),
(36, '1120201601', 'Azka', 1, 24512, '2016-12-19'),
(37, '1120201601', 'Azka', 2, 17767, '2016-12-19'),
(44, '1120201601', 'Azka', 2, 2222, '2016-12-19'),
(50, '1120201601', 'Azka', 1, 3000, '2016-12-19'),
(51, '1120201601', 'Azka', 3, 3000, '2016-12-19'),
(52, '1120201602', 'Blenda', 1, 12370, '2016-12-21'),
(53, '1120201602', 'Blenda', 3, 123874, '2016-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` varchar(10) NOT NULL,
  `id_jenis_beasiswa` varchar(5) NOT NULL,
  `sumber` varchar(99) NOT NULL,
  `tahun_mulai` varchar(4) NOT NULL,
  `tahun_selesai` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `id_jenis_beasiswa`, `sumber`, `tahun_mulai`, `tahun_selesai`) VALUES
('B01', '01', 'Pemerintah', '2016', '2018'),
('B02', '02', 'Pemerintah', '2016', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `catatan_prestasi`
--

CREATE TABLE `catatan_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `id_jenis_prestasi` varchar(15) NOT NULL,
  `id_tingkat` varchar(5) NOT NULL,
  `nama_prestasi` varchar(99) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `penyelenggara` varchar(99) NOT NULL,
  `nis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan_prestasi`
--

INSERT INTO `catatan_prestasi` (`id_prestasi`, `id_jenis_prestasi`, `id_tingkat`, `nama_prestasi`, `tahun`, `penyelenggara`, `nis`) VALUES
(1, '03', '04', 'Juara 1 Lomba Lari', '2015', 'Pemerintah Kota', '1120201603');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id_parents` int(15) NOT NULL,
  `name` varchar(99) NOT NULL,
  `id_relation` varchar(5) NOT NULL,
  `place_birth` varchar(99) NOT NULL,
  `date_birth` date DEFAULT NULL,
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
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id_parents`, `name`, `id_relation`, `place_birth`, `date_birth`, `nationality`, `id_religion`, `id_education`, `id_occupation`, `address`, `home_status`, `phone`, `salary`, `nis`) VALUES
(1, 'Bayu', '01', 'Sumedang', '1979-11-03', 'Indonesia', '01', '3', '06', 'Cibinong', 'Rumah Sendiri', '085877779999', 8000000, '1120201603'),
(2, 'Melinda', '02', 'Bogor', '1985-10-13', 'Indonesia', '02', '4', '08', 'Bogor', 'Rumah Sendiri', '085577779999', 13000000, '1120201601'),
(3, 'Hendra', '01', 'Jakarta', '1970-05-11', 'Indonesia', '03', '3', '05', 'Bogor', 'Rumah Sendiri', '085877779999', 9000000, '1120201602'),
(4, 'Warso', '01', 'Cibinong', '1987-04-23', 'Indonesia', '01', '2', '04', 'Cibinong', 'Rumah Sendiri', '088899996666', 6000000, '1120201604'),
(5, 'Karin', '02', 'Bandung', '1980-06-19', 'Indonesia', '01', '3', '09', 'Cibinong', 'Rumah Sendiri', '085633332221', 10000000, '1120201605');

-- --------------------------------------------------------

--
-- Table structure for table `ref_beasiswa`
--

CREATE TABLE `ref_beasiswa` (
  `id_jenis_beasiswa` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_beasiswa`
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
-- Table structure for table `ref_education`
--

CREATE TABLE `ref_education` (
  `id_education` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_education`
--

INSERT INTO `ref_education` (`id_education`, `detail`) VALUES
('1', 'SD'),
('2', 'SMP'),
('3', 'SMA/SMK Sederajat'),
('4', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `ref_majors`
--

CREATE TABLE `ref_majors` (
  `id_major` varchar(5) NOT NULL,
  `detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_majors`
--

INSERT INTO `ref_majors` (`id_major`, `detail`) VALUES
('01', 'Jasaboga'),
('02', 'TKJ'),
('03', 'Administrasi Perhotelan'),
('04', 'Administrasi Perkantoran');

-- --------------------------------------------------------

--
-- Table structure for table `ref_occupation`
--

CREATE TABLE `ref_occupation` (
  `id_occupation` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_occupation`
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
-- Table structure for table `ref_prestasi`
--

CREATE TABLE `ref_prestasi` (
  `id_jenis_prestasi` varchar(15) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_prestasi`
--

INSERT INTO `ref_prestasi` (`id_jenis_prestasi`, `detail`) VALUES
('01', 'Sains'),
('02', 'Seni'),
('03', 'Olahraga'),
('04', 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `ref_relation`
--

CREATE TABLE `ref_relation` (
  `id_relation` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_relation`
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
-- Table structure for table `ref_religions`
--

CREATE TABLE `ref_religions` (
  `id_religion` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_religions`
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
-- Table structure for table `ref_special_needs`
--

CREATE TABLE `ref_special_needs` (
  `id_special_needs` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_special_needs`
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
-- Table structure for table `ref_status_pembayaran`
--

CREATE TABLE `ref_status_pembayaran` (
  `id_status_pembayaran` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_status_pembayaran`
--

INSERT INTO `ref_status_pembayaran` (`id_status_pembayaran`, `detail`) VALUES
('1', 'Lunas'),
('2', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `ref_status_siswa`
--

CREATE TABLE `ref_status_siswa` (
  `id_status_siswa` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_status_siswa`
--

INSERT INTO `ref_status_siswa` (`id_status_siswa`, `detail`) VALUES
('1', 'Aktif'),
('2', 'Lulus'),
('3', 'Keluar'),
('4', 'Pindah');

-- --------------------------------------------------------

--
-- Table structure for table `ref_time_spent`
--

CREATE TABLE `ref_time_spent` (
  `id_time_spent` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_time_spent`
--

INSERT INTO `ref_time_spent` (`id_time_spent`, `detail`) VALUES
('1', '< 30 Menit'),
('2', '30-60 Menit'),
('3', '> 60 Menit');

-- --------------------------------------------------------

--
-- Table structure for table `ref_tingkat`
--

CREATE TABLE `ref_tingkat` (
  `id_tingkat` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_tingkat`
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
-- Table structure for table `ref_transports`
--

CREATE TABLE `ref_transports` (
  `id_transport` varchar(5) NOT NULL,
  `detail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_transports`
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
-- Table structure for table `siblings`
--

CREATE TABLE `siblings` (
  `id_sibling` int(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `school` varchar(99) DEFAULT NULL,
  `id_occupation` varchar(5) DEFAULT NULL,
  `nis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
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
  `id_beasiswa` varchar(10) DEFAULT NULL,
  `distance_school` int(5) DEFAULT NULL,
  `id_time_spent` varchar(5) DEFAULT NULL,
  `id_transport` varchar(5) DEFAULT NULL,
  `id_status_siswa` varchar(5) NOT NULL,
  `id_status_pembayaran` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`nis`, `name`, `weight`, `height`, `blood_type`, `phone`, `email`, `sex`, `place_birth`, `date_birth`, `nationality`, `id_religion`, `id_special_needs`, `stay_with`, `address`, `previous_school`, `id_major`, `grade`, `nisn`, `nik`, `skhun_smp`, `no_kps`, `id_beasiswa`, `distance_school`, `id_time_spent`, `id_transport`, `id_status_siswa`, `id_status_pembayaran`) VALUES
('1120201601', 'Azka', 55, 140, 'AB', '085888997788', 'azka@gmail.com', 'L', 'Bogor', '1999-11-03', 'Indonesia', '02', NULL, 'Orang Tua', 'Bogor', 'SMP Bogor', '03', 'AP 1', NULL, NULL, NULL, NULL, NULL, 7, '1', '02', '1', '1'),
('1120201602', 'Blenda', 48, 138, 'B', '081212123365', 'blenda@gmail.com', 'P', 'Jakarta', '1999-09-13', 'Indonesia', '03', NULL, 'Orang Tua', 'Bogor', 'SMP Jakarta', '04', 'AK 1', NULL, NULL, NULL, NULL, NULL, 10, '2', '02', '1', '2'),
('1120201603', 'Aqila', 48, 140, 'O', '085777874444', 'awila@gmail.com', 'P', 'Jakarta', '1999-10-04', 'Indonesia', '01', '11', 'Orang Tua', 'Cibinong', 'SMP Cibinong', '03', 'AP2', NULL, NULL, NULL, NULL, NULL, 15, '3', '02', '1', '2'),
('1120201604', 'Abi', 56, 150, 'A', '085899996663', 'abi@gmail.com', 'L', 'Bogor', '1999-06-14', 'Indonesia', '01', NULL, 'Orang Tua', 'Cibinong', 'SMP Cibinong', '02', 'TKJ 2', NULL, NULL, NULL, NULL, NULL, 1, '1', '1', '1', '2'),
('1120201605', 'Rine', 40, 138, 'B', '085877799996', 'Rine@gmail.com', 'P', 'Bogor', '1999-08-02', 'Indonesia', '01', NULL, 'Orang Tua', 'Citayam', 'SMP Citayam', '01', 'JB 1', NULL, NULL, NULL, NULL, NULL, 1, '1', '1', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `t_lks`
--

CREATE TABLE `t_lks` (
  `kd_lks` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_lks`
--

INSERT INTO `t_lks` (`kd_lks`, `jumlah`) VALUES
('1', 170000);

-- --------------------------------------------------------

--
-- Table structure for table `t_pkl`
--

CREATE TABLE `t_pkl` (
  `kd_pkl` varchar(11) NOT NULL,
  `bayar_pkl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pkl`
--

INSERT INTO `t_pkl` (`kd_pkl`, `bayar_pkl`) VALUES
('1', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `t_spp`
--

CREATE TABLE `t_spp` (
  `id_spp` int(11) NOT NULL,
  `spp` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_spp`
--

INSERT INTO `t_spp` (`id_spp`, `spp`, `jumlah`) VALUES
(1, 'SPP TKJ', 155000),
(2, 'SPP AK', 155000),
(3, 'SPP AP', 180000),
(4, 'SPP TATA BOGA', 180000);

-- --------------------------------------------------------

--
-- Table structure for table `t_ujian`
--

CREATE TABLE `t_ujian` (
  `id_ujian` int(11) NOT NULL,
  `ujian` varchar(11) NOT NULL,
  `jumlah` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ujian`
--

INSERT INTO `t_ujian` (`id_ujian`, `ujian`, `jumlah`) VALUES
(1, 'UTS', 170000),
(2, 'UAS', 180000),
(3, 'UN', 3000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar_lks`
--
ALTER TABLE `bayar_lks`
  ADD PRIMARY KEY (`kd_bayar`);

--
-- Indexes for table `bayar_pkl`
--
ALTER TABLE `bayar_pkl`
  ADD PRIMARY KEY (`kd_bayar`);

--
-- Indexes for table `bayar_spp`
--
ALTER TABLE `bayar_spp`
  ADD PRIMARY KEY (`kd_bayar`);

--
-- Indexes for table `bayar_ujian`
--
ALTER TABLE `bayar_ujian`
  ADD PRIMARY KEY (`kd_bayar`);

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

--
-- Indexes for table `t_spp`
--
ALTER TABLE `t_spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Indexes for table `t_ujian`
--
ALTER TABLE `t_ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayar_lks`
--
ALTER TABLE `bayar_lks`
  MODIFY `kd_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `bayar_pkl`
--
ALTER TABLE `bayar_pkl`
  MODIFY `kd_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `bayar_spp`
--
ALTER TABLE `bayar_spp`
  MODIFY `kd_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `bayar_ujian`
--
ALTER TABLE `bayar_ujian`
  MODIFY `kd_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `catatan_prestasi`
--
ALTER TABLE `catatan_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id_parents` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `siblings`
--
ALTER TABLE `siblings`
  MODIFY `id_sibling` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_spp`
--
ALTER TABLE `t_spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_ujian`
--
ALTER TABLE `t_ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
