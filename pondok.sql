-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Des 2019 pada 12.35
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pondok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `gambar`) VALUES
(3, 'Pondok Pesantren Miftahul Huda (PPMH)', 'Untuk mendukung keterampilan para santri, di PPMH dilaksanakan kegiatan ekstrakurikurer (khithobiyah, dibai\'yah, musyawarah masail diniyah, seni baca Al-quran dan Sholawat) serta berbagai diklat ketrampilan antara lain: diklat ilmu Hisab, diklat faraidh, diklat jurnalistik, Kewirausahaan dan lain-lain. Alamat Jl. Gading pesantren 38, Malang 65115 ', 'home-icon.png'),
(4, 'Pondok Pesantren Al-Hikam', 'Jl. Cangger Ayam no. 25, Malang 65141', 'gamber2019-11-11home-icon1.png'),
(5, 'Ponpes Sabilurrosyad Gasek Malang', 'Gasek, Karangbesuki, Sukun, Kota Malang', 'gamber2019-11-11home-icon2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `kode_galeri` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `id` int(11) NOT NULL,
  `kode_galeri` int(11) NOT NULL,
  `nama_wisata` varchar(120) NOT NULL,
  `icon` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id`, `kode_galeri`, `nama_wisata`, `icon`) VALUES
(1, 12, '1212', '40-512.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` int(12) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `jabatan`, `alamat`, `gambar`) VALUES
(1, 1222, 'oke', 'oke', 'ok', '5f07bb384853b2639e2b2bf8b6a26ad7_time-machine-icon-clip-art-time-clipart-png_299-267.png'),
(3, 0, 'aku', 'kita', 'saya', '_one_piece__sanji_by_shiroiregulus-d84c2g05.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_customer`
--

CREATE TABLE `pesan_customer` (
  `id` int(8) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan_customer`
--

INSERT INTO `pesan_customer` (`id`, `email`, `telepon`, `pesan`) VALUES
(1, 'oke@gmail.com', '123', 'pesan'),
(2, 'oke@yaho.com', 'oke', 'oke'),
(3, '', '', ''),
(4, '', '', ''),
(5, 'aku@gmail.com', '085727272727', 'bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'admin baru', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'oke', '0079fcb602361af76c4fd616d60f9414', 'admin'),
(5, 'okok', 'b73fdaa1fb7669da760b49600c45d9be', 'customer'),
(7, 'a', '0cc175b9c0f1b6a831c399e269772661', 'customer'),
(8, 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'customer'),
(9, 'baru', '5ef035d11d74713fcb36f2df26aa7c3d', 'customer'),
(10, 'ai', '4921c0e2d1f6005abe1f9ec2e2041909', 'customer'),
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'customer'),
(12, 'faisal', 'f4668288fdbf9773dd9779d412942905', 'admin'),
(13, 'aziz1', 'cd5aaac26e0c5a1836e4510ee6f75137', 'customer'),
(14, 'apip', '202cb962ac59075b964b07152d234b70', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_galeri` (`kode_galeri`);

--
-- Indexes for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_galeri` (`kode_galeri`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan_customer`
--
ALTER TABLE `pesan_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesan_customer`
--
ALTER TABLE `pesan_customer`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`kode_galeri`) REFERENCES `kategori_galeri` (`kode_galeri`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
