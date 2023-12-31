-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 08:29 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siaksmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `no_identitas` varchar(150) NOT NULL,
  `nama_guru` varchar(150) NOT NULL,
  `gender_guru` varchar(150) NOT NULL,
  `alamat_guru` varchar(250) NOT NULL,
  `tgl_lahir_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`no_identitas`, `nama_guru`, `gender_guru`, `alamat_guru`, `tgl_lahir_guru`) VALUES
('2211190103', 'Zakaria Wahyu', 'P', 'Bandung, Jawa Barat, Indonesia', '2019-11-22'),
('2506990101', 'Zakaria Wahyu', 'L', 'Bandung, Jawa Barat, Indonesia', '1999-06-25'),
('2605990102', 'Nur Cahyani', 'P', 'Bandung, Jawa Barat, Indonesia', '1999-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(50) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `kode_mapel` varchar(15) NOT NULL,
  `no_identitas` varchar(150) NOT NULL,
  `jam` varchar(150) NOT NULL,
  `hari` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_kelas`, `kode_mapel`, `no_identitas`, `jam`, `hari`) VALUES
(1, 1, 'BIND', '2211190103', '08.45 - 09.30', 'Selasa'),
(3, 1, 'PKN', '2605990102', '10.45 - 11.30', 'Rabu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'VII A'),
(2, 'VII B'),
(3, 'VII C'),
(4, 'VII D'),
(5, 'VII E');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mata_pelajaran`
--

CREATE TABLE `tbl_mata_pelajaran` (
  `kode_mapel` varchar(15) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mata_pelajaran`
--

INSERT INTO `tbl_mata_pelajaran` (`kode_mapel`, `nama_mapel`) VALUES
('BIND', 'Bahasa Indonesia'),
('BING', 'Bahasa Inggris'),
('MTK', 'Matematika'),
('PKN', 'Pendidikan dan Kewarganegaraan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(10) NOT NULL,
  `kode_mapel` varchar(15) NOT NULL,
  `no_identitas` varchar(150) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `kode_mapel`, `no_identitas`, `nilai`) VALUES
(1, 'PKN', '0606990206', '80'),
(4, 'BIND', '0606990206', '80');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `no_identitas` varchar(150) NOT NULL,
  `nama_siswa` varchar(150) NOT NULL,
  `gender_siswa` varchar(150) NOT NULL,
  `alamat_siswa` varchar(250) NOT NULL,
  `tgl_lahir_siswa` varchar(50) NOT NULL,
  `id_kelas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`no_identitas`, `nama_siswa`, `gender_siswa`, `alamat_siswa`, `tgl_lahir_siswa`, `id_kelas`) VALUES
('0606990206', 'Zakaria Test', 'L', 'Bandung, Jawa Barat, Indonesia', '1999-06-06', 1),
('0906870203', 'Zakaria Wahyu', 'P', 'Bandung, Jawa Barat, Indonesia', '1987-06-09', 1),
('1212980203', 'Nur Utami', 'P', 'Bandung, Jawa Barat, Indonesia', '1998-12-12', 1),
('1212980204', 'SAs', 'L', 'Bandung, Jawa Barat, Indonesia', '1998-12-12', 2),
('2211190201', 'Zakaria Wahyu Nur', 'L', 'Bandung, Jawa Barat, Indonesia', '2019-11-22', 1),
('2211190202', 'Nur', 'P', 'Bandung, Jawa Barat, Indonesia', '2019-11-22', 1),
('2211190203', 'Zakaria Wahyu', 'L', 'Bandung, Jawa Barat, Indonesia', '2019-11-22', 4),
('2506970204', 'Zakaria Wahyu Nur Utomo', 'L', 'Bandung, Jawa Barat, Indonesia', '1997-06-25', 1),
('2506990205', 'Zakaria Wahyu', 'L', 'Bandung, Jawa Barat, Indonesia', '1999-06-25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_akademik`
--

CREATE TABLE `tbl_tahun_akademik` (
  `id_tahun_akademik` int(50) NOT NULL,
  `tahun_akademik` varchar(50) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL,
  `semester_aktif` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tahun_akademik`
--

INSERT INTO `tbl_tahun_akademik` (`id_tahun_akademik`, `tahun_akademik`, `is_aktif`, `semester_aktif`) VALUES
(1, '2016/2017', 'y', 0),
(2, '2017/2018', 'y', 0),
(3, '2018/2019', 'y', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(50) NOT NULL,
  `no_identitas` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `no_identitas`, `username`, `password`, `level`) VALUES
(39, '2211190201', '12', 'c20ad4d76fe97759aa27a0c99bff6710', 'siswa'),
(40, '2211190202', 'nur', '202cb962ac59075b964b07152d234b70', 'siswa'),
(43, '2506990101', 'zakariawahyu01', '827ccb0eea8a706c4c34a16891f84e7b', 'guru'),
(44, '1212980203', 'nur', '202cb962ac59075b964b07152d234b70', 'siswa'),
(45, '0906870203', 'zakariawahyu12', '202cb962ac59075b964b07152d234b70', 'siswa'),
(48, '2211190203', '12', 'd41d8cd98f00b204e9800998ecf8427e', 'siswa'),
(49, '1212980204', 'Sas', 'c20ad4d76fe97759aa27a0c99bff6710', 'siswa'),
(50, '2605990102', 'nur', '827ccb0eea8a706c4c34a16891f84e7b', 'guru'),
(51, '2211190103', 'ASAS', '202cb962ac59075b964b07152d234b70', 'guru'),
(52, '000000', 'alvan', '99c4f4808218a4c33247d80a3a90b7e2', 'admin'),
(53, '2506970204', 'zakariawahyunur', '202cb962ac59075b964b07152d234b70', 'siswa'),
(54, '2506990205', 'wqwqw', '006d2143154327a64d86a264aea225f3', 'siswa'),
(55, '0606990206', 'zakariatest', '202cb962ac59075b964b07152d234b70', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`no_identitas`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_mata_pelajaran`
--
ALTER TABLE `tbl_mata_pelajaran`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`no_identitas`),
  ADD KEY `tbl_siswa_ibfk_2` (`id_kelas`);

--
-- Indexes for table `tbl_tahun_akademik`
--
ALTER TABLE `tbl_tahun_akademik`
  ADD PRIMARY KEY (`id_tahun_akademik`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `no_identitas` (`no_identitas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tahun_akademik`
--
ALTER TABLE `tbl_tahun_akademik`
  MODIFY `id_tahun_akademik` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD CONSTRAINT `tbl_guru_ibfk_1` FOREIGN KEY (`no_identitas`) REFERENCES `tbl_user` (`no_identitas`);

--
-- Constraints for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD CONSTRAINT `tbl_jadwal_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`),
  ADD CONSTRAINT `tbl_jadwal_ibfk_2` FOREIGN KEY (`kode_mapel`) REFERENCES `tbl_mata_pelajaran` (`kode_mapel`),
  ADD CONSTRAINT `tbl_jadwal_ibfk_3` FOREIGN KEY (`no_identitas`) REFERENCES `tbl_guru` (`no_identitas`);

--
-- Constraints for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `tbl_mata_pelajaran` (`kode_mapel`),
  ADD CONSTRAINT `tbl_nilai_ibfk_2` FOREIGN KEY (`no_identitas`) REFERENCES `tbl_siswa` (`no_identitas`);

--
-- Constraints for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`no_identitas`) REFERENCES `tbl_user` (`no_identitas`),
  ADD CONSTRAINT `tbl_siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
