-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2014 at 11:22 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hmjie`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE IF NOT EXISTS `akses` (
  `id_akses` int(30) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(20) NOT NULL,
  `akses` varchar(40) NOT NULL,
  PRIMARY KEY (`id_akses`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id_akses`, `id_anggota`, `akses`) VALUES
(1, 2147483647, 'dosen'),
(2, 2147483647, 'dosen'),
(3, 1110963016, 'litbang'),
(4, 1110962010, 'kominfo'),
(5, 1110962015, 'anggota');

-- --------------------------------------------------------

--
-- Table structure for table `file_kuliah`
--

CREATE TABLE IF NOT EXISTS `file_kuliah` (
  `id_file` int(20) NOT NULL AUTO_INCREMENT,
  `nama` char(40) NOT NULL,
  `type_file` varchar(40) NOT NULL,
  `size` int(40) NOT NULL,
  `tanggal` date NOT NULL,
  `id_anggota` int(20) NOT NULL,
  `jenis_matakul` char(40) NOT NULL,
  `tipe` char(40) NOT NULL,
  `keterangan` char(255) NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `file_kuliah`
--

INSERT INTO `file_kuliah` (`id_file`, `nama`, `type_file`, `size`, `tanggal`, `id_anggota`, `jenis_matakul`, `tipe`, `keterangan`, `status`) VALUES
(1, 'kandungan BETN,PK,DLL.docx', 'application/vnd.openxmlformats-officedoc', 12130, '2014-06-09', 1110963016, 'SBD', 'bahan', 'asdasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id_foto` int(20) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(20) NOT NULL,
  `nama_foto` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `size` int(20) NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `id_anggota`, `nama_foto`, `type`, `size`) VALUES
(2, 1110963016, 'mtf_YAVvQ_106.jpg', 'image/jpeg', 300194),
(3, 1110962010, 'Untitled-2-01.png', 'image/png', 39379);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `id_info` int(20) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `informasi` char(255) NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `id_anggota`, `tanggal`, `informasi`) VALUES
(14, 1110963016, '2014-06-08 00:26:46', 'cekcek\r\n'),
(15, 1110963016, '2014-06-08 00:26:54', 'ada siapa disana'),
(16, 1110962010, '2014-06-08 13:12:00', 'iki ganteng... :D\r\n'),
(17, 1110962010, '2014-06-08 17:29:17', 'karambia'),
(18, 1110962010, '2014-06-08 17:31:51', 'aotaaaa\r\n'),
(19, 1110962010, '2014-06-08 17:32:21', 'asdasdadasdasdsdas'),
(20, 1110963016, '2014-06-08 20:03:16', 'wkwkwk'),
(21, 1110962010, '2014-06-08 22:55:52', 'tes\r\n'),
(22, 1110962010, '2014-06-08 22:56:09', 'sdalskdlkasd\r\nsada'),
(23, 1110962010, '2014-06-08 22:56:21', 'sdasdasdasdasdasdasdasdasdsdfdfgrrwe'),
(24, 1110962010, '2014-06-08 22:56:31', 'akakakakaa\r\n'),
(25, 1110962010, '2014-06-08 22:58:52', 'a'),
(26, 1110962010, '2014-06-08 22:58:58', 'd'),
(27, 1110962010, '2014-06-08 23:04:50', 'sadsa'),
(28, 1110962010, '2014-06-08 23:06:11', 'coba'),
(29, 1110962010, '2014-06-08 23:06:50', 'lagi\r\n'),
(30, 1110962010, '2014-06-09 14:13:24', 'tesss\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pass`, `type`) VALUES
('admin', 'admin', 'admin'),
('anggota', 'anggota', 'anggota'),
('dosen', 'dosen', 'dosen'),
('kominfo', 'kominfo', 'kominfo'),
('litbang', 'litbang', 'litbang');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE IF NOT EXISTS `proker` (
  `id_proker` int(20) NOT NULL AUTO_INCREMENT,
  `nama_proker` char(40) NOT NULL,
  `divisi_pelaksana` char(40) NOT NULL,
  `tujuan_proker` varchar(255) NOT NULL,
  `sasaran` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal2` date NOT NULL,
  `sumber_dana` varchar(100) NOT NULL,
  PRIMARY KEY (`id_proker`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id_proker`, `nama_proker`, `divisi_pelaksana`, `tujuan_proker`, `sasaran`, `tanggal`, `tanggal2`, `sumber_dana`) VALUES
(1, 'Visit School 2014', 'HUMAS', 'Mensejahterakan Bangsa', 'SMA/SMK Sederajat', '2014-06-03', '2014-06-21', 'Himpunan, Jurusan IE'),
(2, 'TechnoCraft', 'KOMINFO', 'Mengedepankan IT untuk kesejahteraan masyarakat Himpunan Sistem Informasi :D', 'Mahasiswa se-Indonesia', '2014-09-01', '2014-09-06', 'Himpunan dan Sponsor'),
(3, 'Workshop Web GIS', 'KEMAHASISWAAN', 'Untuk memperdalam ilmu mahasiswa maupun umum tentang pemetaan masa depan / GIS', 'Mahasiswa / Umum', '2014-10-04', '2014-10-05', 'Jurusan Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE IF NOT EXISTS `struktur_organisasi` (
  `id_struktur` int(20) NOT NULL AUTO_INCREMENT,
  `nama_struktur` varchar(255) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(40) NOT NULL,
  `size` int(40) NOT NULL,
  PRIMARY KEY (`id_struktur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id_struktur`, `nama_struktur`, `file`, `type`, `size`) VALUES
(4, 'Pengurus Himpunan Mahasiswa Ilmu Ekonomi Periode 2014/2015', 'membuka-usaha-sendiri.jpg', 'image/jpeg', 23872);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_anggota` int(20) NOT NULL,
  `password` char(30) NOT NULL,
  `nama` char(40) NOT NULL,
  `tempat_lahir` char(40) NOT NULL,
  `tanngal_lahir` date NOT NULL,
  `alamat` char(40) NOT NULL,
  `no_hp` char(20) NOT NULL,
  `email` char(40) NOT NULL,
  `jabatan` char(30) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_anggota`, `password`, `nama`, `tempat_lahir`, `tanngal_lahir`, `alamat`, `no_hp`, `email`, `jabatan`) VALUES
(123124241, '3JUNi1993', 'Husnil Kamil', 'Sawahlunto', '1984-09-08', 'Padang', '232113', 'husnil.kamil@gmail.com', 'dosen'),
(1110962010, 'qwerty', 'Briliant Yudhistira', 'Batusangkar', '1993-09-17', 'Kapalo Koto', '083181263505', 'bill.yudhistira@gmail.com', 'pengurus'),
(1110962015, '123456', 'Ovilia Mega Sari', 'Bukittinggi', '1994-01-08', 'Pasar Baru', '085272821023', 'ovilia.ssi@gmail.com', 'anggota'),
(1110963016, 'rizkigagah', 'Rizki Hamdani', 'Bidan Riri', '1993-06-03', 'Tangah Jua', '083181818810', 'boysandi.lovers@gmail.com', 'pengurus'),
(2147483647, '12345678', 'Prof. Dr. Surya Afnarius', 'Padang', '1964-06-09', 'Padang', '086755489221', 'surya.afnarius@gmail.com', 'dosen');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
