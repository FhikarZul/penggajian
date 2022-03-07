-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2022 pada 08.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penggajian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_eselon`
--

CREATE TABLE `tb_eselon` (
  `id_eselon` int(11) NOT NULL,
  `golongan` text DEFAULT NULL,
  `ket` text NOT NULL,
  `nominal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_eselon`
--

INSERT INTO `tb_eselon` (`id_eselon`, `golongan`, `ket`, `nominal`) VALUES
(1, '3A', 'Camat', '1260000'),
(2, '3B', 'Sekretaris Camat', '980000'),
(3, '4A', 'Kepala Sub Bidang', '540000'),
(4, '4B', 'Kepala Sub Bidang Sekretariat Kecamatan', '490000'),
(5, 'TJ. Fungsional', 'Non-Jabatan', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `id_gaji` int(11) NOT NULL,
  `gaji` text DEFAULT NULL,
  `masa_kerja` int(11) NOT NULL,
  `id_golongan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gaji`
--

INSERT INTO `tb_gaji` (`id_gaji`, `gaji`, `masa_kerja`, `id_golongan`) VALUES
(1, '2579400', 0, 1),
(4, '2660700', 2, 1),
(5, '2744500', 4, 1),
(6, '2744500', 6, 1),
(7, '2920100', 8, 1),
(8, '3012000', 10, 1),
(9, '3106900', 12, 1),
(10, '3204700', 14, 1),
(11, '3305700', 16, 1),
(12, '3409800', 18, 1),
(13, '3517200', 20, 1),
(14, '3627900', 22, 1),
(15, '3742200', 24, 1),
(16, '3860100', 26, 1),
(17, '3981600', 28, 1),
(18, '4107000', 30, 1),
(19, '4236400', 32, 1),
(20, '2688500', 0, 2),
(21, '2773200', 2, 2),
(22, '2860500', 4, 2),
(23, '2860500', 6, 2),
(24, '3043600', 8, 2),
(25, '3139400', 10, 2),
(26, '3238300', 12, 2),
(27, '3340300', 14, 2),
(28, '3445500', 16, 2),
(29, '3554000', 18, 2),
(30, '3665900', 20, 2),
(31, '3781400', 22, 2),
(32, '3900500', 24, 2),
(33, '4023300', 26, 2),
(34, '4150100', 28, 2),
(35, '4280800', 30, 2),
(36, '4415600', 32, 2),
(37, '2802300', 0, 3),
(38, '2890500', 2, 3),
(39, '2981500', 4, 3),
(40, '2981500', 6, 3),
(41, '3172300', 8, 3),
(42, '3272200', 10, 3),
(43, '3375300', 12, 3),
(44, '3481600', 14, 3),
(45, '3591200', 16, 3),
(46, '3704300', 18, 3),
(47, '3821000', 20, 3),
(48, '3941400', 22, 3),
(49, '4065500', 24, 3),
(50, '4193500', 26, 3),
(51, '4325600', 28, 3),
(52, '4461800', 30, 3),
(53, '4602400', 32, 3),
(54, '2920800', 0, 4),
(55, '3012800', 2, 4),
(56, '3107700', 4, 4),
(57, '3107700', 6, 4),
(58, '3306500', 8, 4),
(59, '3410600', 10, 4),
(60, '3518100', 12, 4),
(61, '3628900', 14, 4),
(62, '3743100', 16, 4),
(63, '3861000', 18, 4),
(64, '3982600', 20, 4),
(65, '4108100', 22, 4),
(66, '4237500', 24, 4),
(67, '4370900', 26, 4),
(68, '4508600', 28, 4),
(69, '4508600', 30, 4),
(70, '4797000', 32, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `id_golongan` int(11) NOT NULL,
  `golongan` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_golongan`
--

INSERT INTO `tb_golongan` (`id_golongan`, `golongan`) VALUES
(1, 'IIIA'),
(2, 'IIIB'),
(3, 'IIIC'),
(4, 'IIID');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kehadiran_kontrak`
--

CREATE TABLE `tb_kehadiran_kontrak` (
  `id_kehadiran_kontrak` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  `status` enum('hadir','tidak hadir') DEFAULT NULL,
  `id_pegawai_kontrak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kehadiran_pns`
--

CREATE TABLE `tb_kehadiran_pns` (
  `id_kehadiran_pns` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  `status` varchar(99) DEFAULT NULL,
  `id_pegawai_pns` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kehadiran_pns`
--

INSERT INTO `tb_kehadiran_pns` (`id_kehadiran_pns`, `tgl`, `status`, `id_pegawai_pns`) VALUES
(4, '2022-02-14', 'hadir', 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai_kontrak`
--

CREATE TABLE `tb_pegawai_kontrak` (
  `id_pegawai_kontrak` int(11) NOT NULL,
  `nama_pegawai` varchar(50) DEFAULT NULL,
  `lulusan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hp` text NOT NULL,
  `gaji_bersih` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pegawai_kontrak`
--

INSERT INTO `tb_pegawai_kontrak` (`id_pegawai_kontrak`, `nama_pegawai`, `lulusan`, `alamat`, `hp`, `gaji_bersih`) VALUES
(4, 'Firna', 'SMA', 'g', '2147483647', '300'),
(5, 'Alex', 'S1', 'ff', '2147483647', '500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai_pns`
--

CREATE TABLE `tb_pegawai_pns` (
  `id_pegawai_pns` int(11) NOT NULL,
  `nip` text DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `hp` text NOT NULL,
  `id_golongan` int(11) DEFAULT NULL,
  `id_eselon` int(11) DEFAULT NULL,
  `tunjangan_istri` text DEFAULT NULL,
  `tunjangan_anak` text DEFAULT NULL,
  `tunjangan_beras` text DEFAULT NULL,
  `tunjangan_pajak` text DEFAULT NULL,
  `bpjs` text DEFAULT NULL,
  `tunjangan_fungsional` text NOT NULL,
  `taperum` text NOT NULL,
  `tunjangan_jkk` text NOT NULL,
  `tunjangan_jkm` text NOT NULL,
  `tunjangan_iwp` text NOT NULL,
  `status` enum('kawin','belum kawin') DEFAULT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `masa_kerja` int(11) DEFAULT NULL,
  `gaji_pokok` text DEFAULT NULL,
  `gaji_kotor` text DEFAULT NULL,
  `potongan` text NOT NULL,
  `gaji_bersih` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pegawai_pns`
--

INSERT INTO `tb_pegawai_pns` (`id_pegawai_pns`, `nip`, `nama`, `hp`, `id_golongan`, `id_eselon`, `tunjangan_istri`, `tunjangan_anak`, `tunjangan_beras`, `tunjangan_pajak`, `bpjs`, `tunjangan_fungsional`, `taperum`, `tunjangan_jkk`, `tunjangan_jkm`, `tunjangan_iwp`, `status`, `jumlah_anak`, `masa_kerja`, `gaji_pokok`, `gaji_kotor`, `potongan`, `gaji_bersih`) VALUES
(35, '77262541113321', 'ASGAR', '0822', 3, 2, '359120', '143648', '289680', '0', '202958.72', '0', '0', '8618.88', '25856.64', '327517.44', 'kawin', 2, 16, '3591200', '5601082.24', '564951.68', '5036130.56'),
(36, '213123', 'Chindy Yuvia', '123123', 1, 1, '266070', '53214', '217260', '0', '176799.36', '180000', '5000', '6385.68', '19157.04', '238398.72', 'kawin', 1, 2, '2660700', '4839586.08', '445740.8', '4393845.28'),
(37, '123123', 'tess', '7868678678678', 1, 1, '0', '0', '72420', '0', '156828', '0', '0', '6385.68', '19157.04', '212856', 'belum kawin', 0, 2, '2660700', '4175490.72', '395226.72', '3780264');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_taperum`
--

CREATE TABLE `tb_taperum` (
  `id_taperum` int(11) NOT NULL,
  `golongan` text DEFAULT NULL,
  `nominal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_taperum`
--

INSERT INTO `tb_taperum` (`id_taperum`, `golongan`, `nominal`) VALUES
(1, 'Golongan I', '3000'),
(2, 'Golongan II', '5000'),
(3, 'Golongan III', '7000'),
(4, 'Golongan IV', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tunjangan_beras`
--

CREATE TABLE `tb_tunjangan_beras` (
  `id_tunjangan_beras` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `nominal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tunjangan_fung`
--

CREATE TABLE `tb_tunjangan_fung` (
  `id_tunjangan_fung` int(11) NOT NULL,
  `golongan` text DEFAULT NULL,
  `nominal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tunjangan_fung`
--

INSERT INTO `tb_tunjangan_fung` (`id_tunjangan_fung`, `golongan`, `nominal`) VALUES
(1, 'Golongan I', '175000'),
(2, 'Golongan II', '180000'),
(3, 'Golongan III', '185000'),
(4, 'Golongan IV', '190000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `level` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_eselon`
--
ALTER TABLE `tb_eselon`
  ADD PRIMARY KEY (`id_eselon`);

--
-- Indeks untuk tabel `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `id_golongan` (`id_golongan`);

--
-- Indeks untuk tabel `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indeks untuk tabel `tb_kehadiran_kontrak`
--
ALTER TABLE `tb_kehadiran_kontrak`
  ADD PRIMARY KEY (`id_kehadiran_kontrak`),
  ADD KEY `id_pegawai_kontrak` (`id_pegawai_kontrak`);

--
-- Indeks untuk tabel `tb_kehadiran_pns`
--
ALTER TABLE `tb_kehadiran_pns`
  ADD PRIMARY KEY (`id_kehadiran_pns`),
  ADD KEY `id_pegawai_pns` (`id_pegawai_pns`);

--
-- Indeks untuk tabel `tb_pegawai_kontrak`
--
ALTER TABLE `tb_pegawai_kontrak`
  ADD PRIMARY KEY (`id_pegawai_kontrak`);

--
-- Indeks untuk tabel `tb_pegawai_pns`
--
ALTER TABLE `tb_pegawai_pns`
  ADD PRIMARY KEY (`id_pegawai_pns`),
  ADD KEY `id_golongan` (`id_golongan`),
  ADD KEY `id_eselon` (`id_eselon`),
  ADD KEY `id_tunjangan_beras` (`tunjangan_beras`(768));

--
-- Indeks untuk tabel `tb_taperum`
--
ALTER TABLE `tb_taperum`
  ADD PRIMARY KEY (`id_taperum`);

--
-- Indeks untuk tabel `tb_tunjangan_beras`
--
ALTER TABLE `tb_tunjangan_beras`
  ADD PRIMARY KEY (`id_tunjangan_beras`);

--
-- Indeks untuk tabel `tb_tunjangan_fung`
--
ALTER TABLE `tb_tunjangan_fung`
  ADD PRIMARY KEY (`id_tunjangan_fung`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_eselon`
--
ALTER TABLE `tb_eselon`
  MODIFY `id_eselon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_gaji`
--
ALTER TABLE `tb_gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kehadiran_kontrak`
--
ALTER TABLE `tb_kehadiran_kontrak`
  MODIFY `id_kehadiran_kontrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kehadiran_pns`
--
ALTER TABLE `tb_kehadiran_pns`
  MODIFY `id_kehadiran_pns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai_kontrak`
--
ALTER TABLE `tb_pegawai_kontrak`
  MODIFY `id_pegawai_kontrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai_pns`
--
ALTER TABLE `tb_pegawai_pns`
  MODIFY `id_pegawai_pns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_taperum`
--
ALTER TABLE `tb_taperum`
  MODIFY `id_taperum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_tunjangan_beras`
--
ALTER TABLE `tb_tunjangan_beras`
  MODIFY `id_tunjangan_beras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_tunjangan_fung`
--
ALTER TABLE `tb_tunjangan_fung`
  MODIFY `id_tunjangan_fung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD CONSTRAINT `tb_gaji_ibfk_1` FOREIGN KEY (`id_golongan`) REFERENCES `tb_golongan` (`id_golongan`);

--
-- Ketidakleluasaan untuk tabel `tb_kehadiran_kontrak`
--
ALTER TABLE `tb_kehadiran_kontrak`
  ADD CONSTRAINT `tb_kehadiran_kontrak_ibfk_1` FOREIGN KEY (`id_pegawai_kontrak`) REFERENCES `tb_pegawai_kontrak` (`id_pegawai_kontrak`);

--
-- Ketidakleluasaan untuk tabel `tb_kehadiran_pns`
--
ALTER TABLE `tb_kehadiran_pns`
  ADD CONSTRAINT `tb_kehadiran_pns_ibfk_1` FOREIGN KEY (`id_pegawai_pns`) REFERENCES `tb_pegawai_pns` (`id_pegawai_pns`);

--
-- Ketidakleluasaan untuk tabel `tb_pegawai_pns`
--
ALTER TABLE `tb_pegawai_pns`
  ADD CONSTRAINT `tb_pegawai_pns_ibfk_1` FOREIGN KEY (`id_golongan`) REFERENCES `tb_golongan` (`id_golongan`),
  ADD CONSTRAINT `tb_pegawai_pns_ibfk_2` FOREIGN KEY (`id_eselon`) REFERENCES `tb_eselon` (`id_eselon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
