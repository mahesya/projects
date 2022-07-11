-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2016 at 03:06 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `akomodasi`
--

CREATE TABLE IF NOT EXISTS `akomodasi` (
  `id_akomodasi` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_produk` varchar(6) NOT NULL,
  `akomodasi_hotel` text NOT NULL,
  `akomodasi_pesawat` text NOT NULL,
  PRIMARY KEY (`id_akomodasi`),
  KEY `id_produk` (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `akomodasi`
--

INSERT INTO `akomodasi` (`id_akomodasi`, `id_produk`, `akomodasi_hotel`, `akomodasi_pesawat`) VALUES
(000003, 'PR0001', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI MADINAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li style="text-align: left;">AL-MAJIDI/SURFAH JADID</li>\r\n<li style="text-align: left;">AL-ANSOR JADID</li>\r\n<li style="text-align: left;">SETARAF</li>\r\n</ol>\r\n<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI</strong> <strong>MAKKAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>GRAND RIYADAH/FOUAD AL NASAH</li>\r\n<li>DIYAFAT MUTAMIRIN</li>\r\n<li>SETARAF</li>\r\n</ol>', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>PESAWAT</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>ETIHAD/EMIRATES/QATAR</li>\r\n<li>FLYNAS/LION</li>\r\n<li>MH/AIR ASIA/SQ</li>\r\n</ol>'),
(000004, 'PR0002', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI MADINAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li style="text-align: left;">AL-MAJIDI/SURFAH JADID</li>\r\n<li style="text-align: left;">AL-ANSOR JADID</li>\r\n<li style="text-align: left;">SETARAF</li>\r\n</ol>\r\n<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI</strong> <strong>MAKKAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>GRAND RIYADAH/FOUAD AL NASAH</li>\r\n<li>DIYAFAT MUTAMIRIN</li>\r\n<li>SETARAF</li>\r\n</ol>', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>PESAWAT</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>ETIHAD/EMIRATES/QATAR</li>\r\n<li>FLYNAS/LION</li>\r\n<li>MH/AIR ASIA/SQ</li>\r\n</ol>'),
(000005, 'PR0003', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI MADINAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li style="text-align: left;">AL-MAJIDI/SURFAH JADID</li>\r\n<li style="text-align: left;">AL-ANSOR JADID</li>\r\n<li style="text-align: left;">SETARAF</li>\r\n</ol>\r\n<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI</strong> <strong>MAKKAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>GRAND RIYADAH/FOUAD AL NASAH</li>\r\n<li>DIYAFAT MUTAMIRIN</li>\r\n<li>SETARAF</li>\r\n</ol>', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>PESAWAT</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>ETIHAD/EMIRATES/QATAR</li>\r\n<li>FLYNAS/LION</li>\r\n<li>MH/AIR ASIA/SQ</li>\r\n</ol>'),
(000006, 'PR0004', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI MADINAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li style="text-align: left;">AL-MAJIDI/SURFAH JADID</li>\r\n<li style="text-align: left;">AL-ANSOR JADID</li>\r\n<li style="text-align: left;">SETARAF</li>\r\n</ol>\r\n<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI</strong> <strong>MAKKAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>GRAND RIYADAH/FOUAD AL NASAH</li>\r\n<li>DIYAFAT MUTAMIRIN</li>\r\n<li>SETARAF</li>\r\n</ol>', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>PESAWAT</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>ETIHAD/EMIRATES/QATAR</li>\r\n<li>FLYNAS/LION</li>\r\n<li>MH/AIR ASIA/SQ</li>\r\n</ol>'),
(000007, 'PR0005', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI MADINAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li style="text-align: left;">AL-MAJIDI/SURFAH JADID</li>\r\n<li style="text-align: left;">AL-ANSOR JADID</li>\r\n<li style="text-align: left;">SETARAF</li>\r\n</ol>\r\n<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI</strong> <strong>MAKKAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>GRAND RIYADAH/FOUAD AL NASAH</li>\r\n<li>DIYAFAT MUTAMIRIN</li>\r\n<li>SETARAF</li>\r\n</ol>', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>PESAWAT</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>ETIHAD/EMIRATES/QATAR</li>\r\n<li>FLYNAS/LION</li>\r\n<li>MH/AIR ASIA/SQ</li>\r\n</ol>'),
(000008, 'PR0006', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI MADINAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li style="text-align: left;">AL-MAJIDI/SURFAH JADID</li>\r\n<li style="text-align: left;">AL-ANSOR JADID</li>\r\n<li style="text-align: left;">SETARAF</li>\r\n</ol>\r\n<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI</strong> <strong>MAKKAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>GRAND RIYADAH/FOUAD AL NASAH</li>\r\n<li>DIYAFAT MUTAMIRIN</li>\r\n<li>SETARAF</li>\r\n</ol>', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>PESAWAT</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>ETIHAD/EMIRATES/QATAR</li>\r\n<li>FLYNAS/LION</li>\r\n<li>MH/AIR ASIA/SQ</li>\r\n</ol>'),
(000009, 'PR0007', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI MADINAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li style="text-align: left;">AL-MAJIDI/SURFAH JADID</li>\r\n<li style="text-align: left;">AL-ANSOR JADID</li>\r\n<li style="text-align: left;">SETARAF</li>\r\n</ol>\r\n<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>HOTEL DI</strong> <strong>MAKKAH</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>GRAND RIYADAH/FOUAD AL NASAH</li>\r\n<li>DIYAFAT MUTAMIRIN</li>\r\n<li>SETARAF</li>\r\n</ol>', '<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>PESAWAT</strong></span></p>\r\n<ol style="text-align: justify;">\r\n<li>ETIHAD/EMIRATES/QATAR</li>\r\n<li>FLYNAS/LION</li>\r\n<li>MH/AIR ASIA/SQ</li>\r\n</ol>'),
(000010, 'PR0008', '', ''),
(000011, 'PR0009', '', ''),
(000012, 'PR0010', '', ''),
(000013, 'PR0011', '', ''),
(000014, 'PR0012', '', ''),
(000015, 'PR0013', '', ''),
(000016, 'PR0014', '', ''),
(000017, 'PR0015', '', ''),
(000018, 'PR0016', '', ''),
(000019, 'PR0017', '', ''),
(000020, 'PR0018', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_pelanggan`
--

CREATE TABLE IF NOT EXISTS `dokumen_pelanggan` (
  `id_dokumen` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_pelanggan` varchar(8) NOT NULL,
  `passport` varchar(20) NOT NULL DEFAULT 'Belum Diserahkan',
  `foto` varchar(20) NOT NULL DEFAULT 'Belum Diserahkan',
  `buku_vaksin` varchar(20) NOT NULL DEFAULT 'Belum Diserahkan',
  `buku_nikah` varchar(20) NOT NULL DEFAULT 'Belum Diserahkan',
  `akta_lahir` varchar(20) NOT NULL DEFAULT 'Belum Diserahkan',
  `fc_ktp` varchar(20) NOT NULL DEFAULT 'Belum Diserahkan',
  `kk` varchar(20) NOT NULL DEFAULT 'Belum Diserahkan',
  `spph` varchar(20) NOT NULL DEFAULT 'Belum Diserahkan',
  `bpih` varchar(20) NOT NULL DEFAULT 'Belum Diserahkan',
  `keterangan` text NOT NULL,
  `waktu_penyerahan` date NOT NULL,
  `yang_menyerahkan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_dokumen`),
  KEY `id_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dokumen_pelanggan`
--

INSERT INTO `dokumen_pelanggan` (`id_dokumen`, `id_pelanggan`, `passport`, `foto`, `buku_vaksin`, `buku_nikah`, `akta_lahir`, `fc_ktp`, `kk`, `spph`, `bpih`, `keterangan`, `waktu_penyerahan`, `yang_menyerahkan`) VALUES
(000001, 'DAM00008', 'Sudah Dikembalikan', '3x4 dan 4x6', 'Sudah Dikembalikan', 'Sudah Dikembalikan', 'Sudah Dikembalikan', 'FC', 'Sudah Dikembalikan', 'Sudah Dikembalikan', 'Sudah Dikembalikan', '', '2016-03-14', 'Ghofur'),
(000002, 'DAM00007', 'Asli', '3x4 dan 4x6', 'Asli', 'Asli', 'FC', 'FC', 'FC', 'Belum Diserahkan', 'Belum Diserahkan', '', '2016-06-21', 'hendri'),
(000003, 'DAM00006', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', '', '0000-00-00', ''),
(000004, 'DAM00002', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', 'Belum Diserahkan', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id_foto` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_staf` varchar(6) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `id_staf` (`id_staf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `id_staf`, `foto`, `keterangan`) VALUES
(000001, 'ST0001', '1.JPG', '<p>Milad Damtour</p>'),
(000002, 'ST0001', '1b.jpg', '<p>Damtour Bersama Jama''ah&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `itinerari`
--

CREATE TABLE IF NOT EXISTS `itinerari` (
  `id_itinerari` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_produk` varchar(6) NOT NULL,
  `itinerari` text NOT NULL,
  PRIMARY KEY (`id_itinerari`),
  KEY `id_produk` (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `itinerari`
--

INSERT INTO `itinerari` (`id_itinerari`, `id_produk`, `itinerari`) VALUES
(000003, 'PR0001', '<p class="panel-body" style="text-align: justify;"><strong>HARI KE-1: JAKARTA-JEDDAH-MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li style="text-align: left;">DENGAN MENGUCAP BISMILLAHIRROHMANIRROHIM, JAMAAH BERANGKAT DARI BANDARA SOEKARNO HATTA MENUJU JEDDAH, SETIBANYA DI JEDDAH JAMAAH DIJEMPUT OLEH PETUGAS DI PINTU LUAR KEMUDIAN DITRANSFER MENUJU MADINAH (PERJALANAN &plusmn; 4-5 JAM) LANGSUNG MASUK HOTEL. (DINNER)</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-2: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>ZIARAH KE MAKAM RASULULLAH NABI MUHAMMAD S.A.W DAN KE 2 SAHABAT NABI YAITU ABU BAKAR r.a DAN UMAR BIN KHATAB r.a YANG BERADA DI DALAM MASJID NABAWI DI DAERAH RAUDAH DAPAT DILAKUKAN OLEH JAMAAH PRIA MAUPUN WANITA SETIAP SAAT SELAMA 24 JAM. DAN BERZIARAH KE MAKAM BAQI.</li>\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJID NABAWI.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-3: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>HARI INI JAMAAH AKAN DIAJAK TOUR/ZIARAH MENGUNJUNGI BEBERAPA TEMPAT BERSEJARAH DI KOTA MADINAH ANTARA LAIN: MASJID QUBA (MASJID PERTAMA KALI DIBANGUN OLEH RASULULLAH SAW) MASJID KIBLATIN(MASJID TEMPAT PERISTIWA PERPINDAHAN QIBLAT DARI MASJIDIL AQSHA KE MASJIDIL HARAM), JABAL UHUD(LOKASI PERANG BADAR DAN TEMPAT TERBUNUHNYA BEBERAPA SYUHADA ISLAM), LOKASI PERANG KHANDAK(PERANG PARIT), BEKAS-BEKAS LOKASI MASJID SAB AH MASJID-MASJID PARA SAHABAT NABI DAN BERAKHIR DI KEBUN KURMA, DIMANA JAMAAH DAPAT MEMBELI BERBAGAI MACAM JENIS KURMA SEBAGAI OLEH-OLEH.(WAKTU ZIARAH AKAN DISESUAIKAN DENGAN SITUASI DAN KONDISI).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-4: MADINAH-MAKKAH</strong></p>\r\n<ul style="text-align: justify;">\r\n<li>SEBELUM MENINGGALKAN MADINAH JAMAAH MELAKUKAN ZIARAH WADA. SEBELUM MENINGGALKAN HOTEL JAMAAH MANDI IHRAM DI HOTEL LALU SHALAT SUNNAH IHRAM 2 RAKAAT DI MASJID BIR ALI. NIAT UMRAH AKAN DILAKUKAN BERSAMA-SAMA DI ATAS KENDARAAN MUTHAWWIF.</li>\r\n<li>PERJALANAN KE MAKKAH &plusmn; 4-5 JAM. JAMAAH MASUK HOTEL KEMUDIAN BERSIAP MELAKUKAN UMRAH (THAWAF, SAI, DAN TAHALLUL) YANG DIPIMPIN OLEH MUTHAWWIF.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-5: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-6: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH AKAN BERZIARAH KE BEBERAPA TEMPAT BERSEJARAH ISLAM DI KOTA MAKKAH, ANTARA LAIN: JABAL RAHMAH DAN MASJID NAMIRAH DI PADANG ARAFAH, MINA(TEMPAT MELONTAR JUMRAH), MUZDALIFAH, JABAL QURBAN, JABAL NUR, DAN JABAL TSUR. JAMAAH MENDAPAT KESEMPATAN UMRAH KEMBALI DENGAN MIQOT DI JARONAH, UNTUK ITU JAMAAH DISARANKAN MEMBAWA PAKAIAN IHROM.</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-7: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-8: MAKKAH-JEDDAH-JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MELAKSANAKAN THAWAF WADA/PERPISAHAN. PADA THAWAF INI KITA MEMANJATKAN PUJI SYUKUR ATAS SELESAINYA RANGKAIAN IBADAH UMRAH, JUGA MEMANJATKAN DOA AGAR DI HARI-HARI MENDATANG DIPERKENANKAN KEMBALI UNTUK MENGUNJUNGI BAITULLAH BERSAMA KELUARGA, TEMAN, DAN HANDAI TAULAN, BAIK UNTUK BER UMRAH APALAGI BER HAJI.</li>\r\n<li>MENUJU JEDDAH, PERJALANAN &plusmn; 1 JAM.</li>\r\n<li>SEBELUM KEMBALI KE TANAH AIR, JAMAAH AKAN DI AJAK TOUR KOTA JEDDAH ANTARA LAIN MENGUNJUNGI PANTAI LAUT MERAH(RED SEA), MASJID TERAPUNG DAN WISATA BELANJA DI DAERAH BALLAD.</li>\r\n<li>SELANJUTNYA JAMAAH AKAN DIANTAR MENUJU BANDARA KING ABDUL AZIZ.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-9: JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>DENGAN MENGUCAPKAN SYUKUR ALHAMDULILLAH, MAKA BERAKHIRLAH PROGRAM IBADAH UMRAH BERSAMA <strong>PT. DOA ARAFAH MADINAH</strong>, SEMOGA IBADAH YANG DILAKSANAKAN MENJADI IBADAH YANG MABRUR DI HADAPAN ALLAH SUBHANAHU WA TA''ALA. AAMIIN YAA ROBBAL ''AALAMIIN</li>\r\n</ul>\r\n<p style="text-align: justify;">&nbsp;</p>'),
(000004, 'PR0002', '<p class="panel-body" style="text-align: justify;"><strong>HARI KE-1: JAKARTA-JEDDAH-MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li style="text-align: left;">DENGAN MENGUCAP BISMILLAHIRROHMANIRROHIM, JAMAAH BERANGKAT DARI BANDARA SOEKARNO HATTA MENUJU JEDDAH, SETIBANYA DI JEDDAH JAMAAH DIJEMPUT OLEH PETUGAS DI PINTU LUAR KEMUDIAN DITRANSFER MENUJU MADINAH (PERJALANAN &plusmn; 4-5 JAM) LANGSUNG MASUK HOTEL. (DINNER)</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-2: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>ZIARAH KE MAKAM RASULULLAH NABI MUHAMMAD S.A.W DAN KE 2 SAHABAT NABI YAITU ABU BAKAR r.a DAN UMAR BIN KHATAB r.a YANG BERADA DI DALAM MASJID NABAWI DI DAERAH RAUDAH DAPAT DILAKUKAN OLEH JAMAAH PRIA MAUPUN WANITA SETIAP SAAT SELAMA 24 JAM. DAN BERZIARAH KE MAKAM BAQI.</li>\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJID NABAWI.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-3: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>HARI INI JAMAAH AKAN DIAJAK TOUR/ZIARAH MENGUNJUNGI BEBERAPA TEMPAT BERSEJARAH DI KOTA MADINAH ANTARA LAIN: MASJID QUBA (MASJID PERTAMA KALI DIBANGUN OLEH RASULULLAH SAW) MASJID KIBLATIN(MASJID TEMPAT PERISTIWA PERPINDAHAN QIBLAT DARI MASJIDIL AQSHA KE MASJIDIL HARAM), JABAL UHUD(LOKASI PERANG BADAR DAN TEMPAT TERBUNUHNYA BEBERAPA SYUHADA ISLAM), LOKASI PERANG KHANDAK(PERANG PARIT), BEKAS-BEKAS LOKASI MASJID SAB AH MASJID-MASJID PARA SAHABAT NABI DAN BERAKHIR DI KEBUN KURMA, DIMANA JAMAAH DAPAT MEMBELI BERBAGAI MACAM JENIS KURMA SEBAGAI OLEH-OLEH.(WAKTU ZIARAH AKAN DISESUAIKAN DENGAN SITUASI DAN KONDISI).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-4: MADINAH-MAKKAH</strong></p>\r\n<ul style="text-align: justify;">\r\n<li>SEBELUM MENINGGALKAN MADINAH JAMAAH MELAKUKAN ZIARAH WADA. SEBELUM MENINGGALKAN HOTEL JAMAAH MANDI IHRAM DI HOTEL LALU SHALAT SUNNAH IHRAM 2 RAKAAT DI MASJID BIR ALI. NIAT UMRAH AKAN DILAKUKAN BERSAMA-SAMA DI ATAS KENDARAAN MUTHAWWIF.</li>\r\n<li>PERJALANAN KE MAKKAH &plusmn; 4-5 JAM. JAMAAH MASUK HOTEL KEMUDIAN BERSIAP MELAKUKAN UMRAH (THAWAF, SAI, DAN TAHALLUL) YANG DIPIMPIN OLEH MUTHAWWIF.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-5: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-6: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH AKAN BERZIARAH KE BEBERAPA TEMPAT BERSEJARAH ISLAM DI KOTA MAKKAH, ANTARA LAIN: JABAL RAHMAH DAN MASJID NAMIRAH DI PADANG ARAFAH, MINA(TEMPAT MELONTAR JUMRAH), MUZDALIFAH, JABAL QURBAN, JABAL NUR, DAN JABAL TSUR. JAMAAH MENDAPAT KESEMPATAN UMRAH KEMBALI DENGAN MIQOT DI JARONAH, UNTUK ITU JAMAAH DISARANKAN MEMBAWA PAKAIAN IHROM.</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-7: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-8: MAKKAH-JEDDAH-JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MELAKSANAKAN THAWAF WADA/PERPISAHAN. PADA THAWAF INI KITA MEMANJATKAN PUJI SYUKUR ATAS SELESAINYA RANGKAIAN IBADAH UMRAH, JUGA MEMANJATKAN DOA AGAR DI HARI-HARI MENDATANG DIPERKENANKAN KEMBALI UNTUK MENGUNJUNGI BAITULLAH BERSAMA KELUARGA, TEMAN, DAN HANDAI TAULAN, BAIK UNTUK BER UMRAH APALAGI BER HAJI.</li>\r\n<li>MENUJU JEDDAH, PERJALANAN &plusmn; 1 JAM.</li>\r\n<li>SEBELUM KEMBALI KE TANAH AIR, JAMAAH AKAN DI AJAK TOUR KOTA JEDDAH ANTARA LAIN MENGUNJUNGI PANTAI LAUT MERAH(RED SEA), MASJID TERAPUNG DAN WISATA BELANJA DI DAERAH BALLAD.</li>\r\n<li>SELANJUTNYA JAMAAH AKAN DIANTAR MENUJU BANDARA KING ABDUL AZIZ.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-9: JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>DENGAN MENGUCAPKAN SYUKUR ALHAMDULILLAH, MAKA BERAKHIRLAH PROGRAM IBADAH UMRAH BERSAMA <strong>PT. DOA ARAFAH MADINAH</strong>, SEMOGA IBADAH YANG DILAKSANAKAN MENJADI IBADAH YANG MABRUR DI HADAPAN ALLAH SUBHANAHU WA TA''ALA. AAMIIN YAA ROBBAL ''AALAMIIN</li>\r\n</ul>\r\n<p style="text-align: justify;">&nbsp;</p>'),
(000005, 'PR0003', '<p class="panel-body" style="text-align: justify;"><strong>HARI KE-1: JAKARTA-JEDDAH-MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li style="text-align: left;">DENGAN MENGUCAP BISMILLAHIRROHMANIRROHIM, JAMAAH BERANGKAT DARI BANDARA SOEKARNO HATTA MENUJU JEDDAH, SETIBANYA DI JEDDAH JAMAAH DIJEMPUT OLEH PETUGAS DI PINTU LUAR KEMUDIAN DITRANSFER MENUJU MADINAH (PERJALANAN &plusmn; 4-5 JAM) LANGSUNG MASUK HOTEL. (DINNER)</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-2: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>ZIARAH KE MAKAM RASULULLAH NABI MUHAMMAD S.A.W DAN KE 2 SAHABAT NABI YAITU ABU BAKAR r.a DAN UMAR BIN KHATAB r.a YANG BERADA DI DALAM MASJID NABAWI DI DAERAH RAUDAH DAPAT DILAKUKAN OLEH JAMAAH PRIA MAUPUN WANITA SETIAP SAAT SELAMA 24 JAM. DAN BERZIARAH KE MAKAM BAQI.</li>\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJID NABAWI.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-3: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>HARI INI JAMAAH AKAN DIAJAK TOUR/ZIARAH MENGUNJUNGI BEBERAPA TEMPAT BERSEJARAH DI KOTA MADINAH ANTARA LAIN: MASJID QUBA (MASJID PERTAMA KALI DIBANGUN OLEH RASULULLAH SAW) MASJID KIBLATIN(MASJID TEMPAT PERISTIWA PERPINDAHAN QIBLAT DARI MASJIDIL AQSHA KE MASJIDIL HARAM), JABAL UHUD(LOKASI PERANG BADAR DAN TEMPAT TERBUNUHNYA BEBERAPA SYUHADA ISLAM), LOKASI PERANG KHANDAK(PERANG PARIT), BEKAS-BEKAS LOKASI MASJID SAB AH MASJID-MASJID PARA SAHABAT NABI DAN BERAKHIR DI KEBUN KURMA, DIMANA JAMAAH DAPAT MEMBELI BERBAGAI MACAM JENIS KURMA SEBAGAI OLEH-OLEH.(WAKTU ZIARAH AKAN DISESUAIKAN DENGAN SITUASI DAN KONDISI).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-4: MADINAH-MAKKAH</strong></p>\r\n<ul style="text-align: justify;">\r\n<li>SEBELUM MENINGGALKAN MADINAH JAMAAH MELAKUKAN ZIARAH WADA. SEBELUM MENINGGALKAN HOTEL JAMAAH MANDI IHRAM DI HOTEL LALU SHALAT SUNNAH IHRAM 2 RAKAAT DI MASJID BIR ALI. NIAT UMRAH AKAN DILAKUKAN BERSAMA-SAMA DI ATAS KENDARAAN MUTHAWWIF.</li>\r\n<li>PERJALANAN KE MAKKAH &plusmn; 4-5 JAM. JAMAAH MASUK HOTEL KEMUDIAN BERSIAP MELAKUKAN UMRAH (THAWAF, SAI, DAN TAHALLUL) YANG DIPIMPIN OLEH MUTHAWWIF.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-5: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-6: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH AKAN BERZIARAH KE BEBERAPA TEMPAT BERSEJARAH ISLAM DI KOTA MAKKAH, ANTARA LAIN: JABAL RAHMAH DAN MASJID NAMIRAH DI PADANG ARAFAH, MINA(TEMPAT MELONTAR JUMRAH), MUZDALIFAH, JABAL QURBAN, JABAL NUR, DAN JABAL TSUR. JAMAAH MENDAPAT KESEMPATAN UMRAH KEMBALI DENGAN MIQOT DI JARONAH, UNTUK ITU JAMAAH DISARANKAN MEMBAWA PAKAIAN IHROM.</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-7: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-8: MAKKAH-JEDDAH-JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MELAKSANAKAN THAWAF WADA/PERPISAHAN. PADA THAWAF INI KITA MEMANJATKAN PUJI SYUKUR ATAS SELESAINYA RANGKAIAN IBADAH UMRAH, JUGA MEMANJATKAN DOA AGAR DI HARI-HARI MENDATANG DIPERKENANKAN KEMBALI UNTUK MENGUNJUNGI BAITULLAH BERSAMA KELUARGA, TEMAN, DAN HANDAI TAULAN, BAIK UNTUK BER UMRAH APALAGI BER HAJI.</li>\r\n<li>MENUJU JEDDAH, PERJALANAN &plusmn; 1 JAM.</li>\r\n<li>SEBELUM KEMBALI KE TANAH AIR, JAMAAH AKAN DI AJAK TOUR KOTA JEDDAH ANTARA LAIN MENGUNJUNGI PANTAI LAUT MERAH(RED SEA), MASJID TERAPUNG DAN WISATA BELANJA DI DAERAH BALLAD.</li>\r\n<li>SELANJUTNYA JAMAAH AKAN DIANTAR MENUJU BANDARA KING ABDUL AZIZ.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-9: JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>DENGAN MENGUCAPKAN SYUKUR ALHAMDULILLAH, MAKA BERAKHIRLAH PROGRAM IBADAH UMRAH BERSAMA <strong>PT. DOA ARAFAH MADINAH</strong>, SEMOGA IBADAH YANG DILAKSANAKAN MENJADI IBADAH YANG MABRUR DI HADAPAN ALLAH SUBHANAHU WA TA''ALA. AAMIIN YAA ROBBAL ''AALAMIIN</li>\r\n</ul>\r\n<p style="text-align: justify;">&nbsp;</p>'),
(000006, 'PR0004', '<p class="panel-body" style="text-align: justify;"><strong>HARI KE-1: JAKARTA-JEDDAH-MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li style="text-align: left;">DENGAN MENGUCAP BISMILLAHIRROHMANIRROHIM, JAMAAH BERANGKAT DARI BANDARA SOEKARNO HATTA MENUJU JEDDAH, SETIBANYA DI JEDDAH JAMAAH DIJEMPUT OLEH PETUGAS DI PINTU LUAR KEMUDIAN DITRANSFER MENUJU MADINAH (PERJALANAN &plusmn; 4-5 JAM) LANGSUNG MASUK HOTEL. (DINNER)</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-2: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>ZIARAH KE MAKAM RASULULLAH NABI MUHAMMAD S.A.W DAN KE 2 SAHABAT NABI YAITU ABU BAKAR r.a DAN UMAR BIN KHATAB r.a YANG BERADA DI DALAM MASJID NABAWI DI DAERAH RAUDAH DAPAT DILAKUKAN OLEH JAMAAH PRIA MAUPUN WANITA SETIAP SAAT SELAMA 24 JAM. DAN BERZIARAH KE MAKAM BAQI.</li>\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJID NABAWI.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-3: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>HARI INI JAMAAH AKAN DIAJAK TOUR/ZIARAH MENGUNJUNGI BEBERAPA TEMPAT BERSEJARAH DI KOTA MADINAH ANTARA LAIN: MASJID QUBA (MASJID PERTAMA KALI DIBANGUN OLEH RASULULLAH SAW) MASJID KIBLATIN(MASJID TEMPAT PERISTIWA PERPINDAHAN QIBLAT DARI MASJIDIL AQSHA KE MASJIDIL HARAM), JABAL UHUD(LOKASI PERANG BADAR DAN TEMPAT TERBUNUHNYA BEBERAPA SYUHADA ISLAM), LOKASI PERANG KHANDAK(PERANG PARIT), BEKAS-BEKAS LOKASI MASJID SAB AH MASJID-MASJID PARA SAHABAT NABI DAN BERAKHIR DI KEBUN KURMA, DIMANA JAMAAH DAPAT MEMBELI BERBAGAI MACAM JENIS KURMA SEBAGAI OLEH-OLEH.(WAKTU ZIARAH AKAN DISESUAIKAN DENGAN SITUASI DAN KONDISI).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-4: MADINAH-MAKKAH</strong></p>\r\n<ul style="text-align: justify;">\r\n<li>SEBELUM MENINGGALKAN MADINAH JAMAAH MELAKUKAN ZIARAH WADA. SEBELUM MENINGGALKAN HOTEL JAMAAH MANDI IHRAM DI HOTEL LALU SHALAT SUNNAH IHRAM 2 RAKAAT DI MASJID BIR ALI. NIAT UMRAH AKAN DILAKUKAN BERSAMA-SAMA DI ATAS KENDARAAN MUTHAWWIF.</li>\r\n<li>PERJALANAN KE MAKKAH &plusmn; 4-5 JAM. JAMAAH MASUK HOTEL KEMUDIAN BERSIAP MELAKUKAN UMRAH (THAWAF, SAI, DAN TAHALLUL) YANG DIPIMPIN OLEH MUTHAWWIF.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-5: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-6: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH AKAN BERZIARAH KE BEBERAPA TEMPAT BERSEJARAH ISLAM DI KOTA MAKKAH, ANTARA LAIN: JABAL RAHMAH DAN MASJID NAMIRAH DI PADANG ARAFAH, MINA(TEMPAT MELONTAR JUMRAH), MUZDALIFAH, JABAL QURBAN, JABAL NUR, DAN JABAL TSUR. JAMAAH MENDAPAT KESEMPATAN UMRAH KEMBALI DENGAN MIQOT DI JARONAH, UNTUK ITU JAMAAH DISARANKAN MEMBAWA PAKAIAN IHROM.</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-7: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-8: MAKKAH-JEDDAH-JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MELAKSANAKAN THAWAF WADA/PERPISAHAN. PADA THAWAF INI KITA MEMANJATKAN PUJI SYUKUR ATAS SELESAINYA RANGKAIAN IBADAH UMRAH, JUGA MEMANJATKAN DOA AGAR DI HARI-HARI MENDATANG DIPERKENANKAN KEMBALI UNTUK MENGUNJUNGI BAITULLAH BERSAMA KELUARGA, TEMAN, DAN HANDAI TAULAN, BAIK UNTUK BER UMRAH APALAGI BER HAJI.</li>\r\n<li>MENUJU JEDDAH, PERJALANAN &plusmn; 1 JAM.</li>\r\n<li>SEBELUM KEMBALI KE TANAH AIR, JAMAAH AKAN DI AJAK TOUR KOTA JEDDAH ANTARA LAIN MENGUNJUNGI PANTAI LAUT MERAH(RED SEA), MASJID TERAPUNG DAN WISATA BELANJA DI DAERAH BALLAD.</li>\r\n<li>SELANJUTNYA JAMAAH AKAN DIANTAR MENUJU BANDARA KING ABDUL AZIZ.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-9: JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>DENGAN MENGUCAPKAN SYUKUR ALHAMDULILLAH, MAKA BERAKHIRLAH PROGRAM IBADAH UMRAH BERSAMA <strong>PT. DOA ARAFAH MADINAH</strong>, SEMOGA IBADAH YANG DILAKSANAKAN MENJADI IBADAH YANG MABRUR DI HADAPAN ALLAH SUBHANAHU WA TA''ALA. AAMIIN YAA ROBBAL ''AALAMIIN</li>\r\n</ul>\r\n<p style="text-align: justify;">&nbsp;</p>'),
(000007, 'PR0005', '<p class="panel-body" style="text-align: justify;"><strong>HARI KE-1: JAKARTA-JEDDAH-MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li style="text-align: left;">DENGAN MENGUCAP BISMILLAHIRROHMANIRROHIM, JAMAAH BERANGKAT DARI BANDARA SOEKARNO HATTA MENUJU JEDDAH, SETIBANYA DI JEDDAH JAMAAH DIJEMPUT OLEH PETUGAS DI PINTU LUAR KEMUDIAN DITRANSFER MENUJU MADINAH (PERJALANAN &plusmn; 4-5 JAM) LANGSUNG MASUK HOTEL. (DINNER)</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-2: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>ZIARAH KE MAKAM RASULULLAH NABI MUHAMMAD S.A.W DAN KE 2 SAHABAT NABI YAITU ABU BAKAR r.a DAN UMAR BIN KHATAB r.a YANG BERADA DI DALAM MASJID NABAWI DI DAERAH RAUDAH DAPAT DILAKUKAN OLEH JAMAAH PRIA MAUPUN WANITA SETIAP SAAT SELAMA 24 JAM. DAN BERZIARAH KE MAKAM BAQI.</li>\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJID NABAWI.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-3: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>HARI INI JAMAAH AKAN DIAJAK TOUR/ZIARAH MENGUNJUNGI BEBERAPA TEMPAT BERSEJARAH DI KOTA MADINAH ANTARA LAIN: MASJID QUBA (MASJID PERTAMA KALI DIBANGUN OLEH RASULULLAH SAW) MASJID KIBLATIN(MASJID TEMPAT PERISTIWA PERPINDAHAN QIBLAT DARI MASJIDIL AQSHA KE MASJIDIL HARAM), JABAL UHUD(LOKASI PERANG BADAR DAN TEMPAT TERBUNUHNYA BEBERAPA SYUHADA ISLAM), LOKASI PERANG KHANDAK(PERANG PARIT), BEKAS-BEKAS LOKASI MASJID SAB AH MASJID-MASJID PARA SAHABAT NABI DAN BERAKHIR DI KEBUN KURMA, DIMANA JAMAAH DAPAT MEMBELI BERBAGAI MACAM JENIS KURMA SEBAGAI OLEH-OLEH.(WAKTU ZIARAH AKAN DISESUAIKAN DENGAN SITUASI DAN KONDISI).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-4: MADINAH-MAKKAH</strong></p>\r\n<ul style="text-align: justify;">\r\n<li>SEBELUM MENINGGALKAN MADINAH JAMAAH MELAKUKAN ZIARAH WADA. SEBELUM MENINGGALKAN HOTEL JAMAAH MANDI IHRAM DI HOTEL LALU SHALAT SUNNAH IHRAM 2 RAKAAT DI MASJID BIR ALI. NIAT UMRAH AKAN DILAKUKAN BERSAMA-SAMA DI ATAS KENDARAAN MUTHAWWIF.</li>\r\n<li>PERJALANAN KE MAKKAH &plusmn; 4-5 JAM. JAMAAH MASUK HOTEL KEMUDIAN BERSIAP MELAKUKAN UMRAH (THAWAF, SAI, DAN TAHALLUL) YANG DIPIMPIN OLEH MUTHAWWIF.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-5: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-6: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH AKAN BERZIARAH KE BEBERAPA TEMPAT BERSEJARAH ISLAM DI KOTA MAKKAH, ANTARA LAIN: JABAL RAHMAH DAN MASJID NAMIRAH DI PADANG ARAFAH, MINA(TEMPAT MELONTAR JUMRAH), MUZDALIFAH, JABAL QURBAN, JABAL NUR, DAN JABAL TSUR. JAMAAH MENDAPAT KESEMPATAN UMRAH KEMBALI DENGAN MIQOT DI JARONAH, UNTUK ITU JAMAAH DISARANKAN MEMBAWA PAKAIAN IHROM.</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-7: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-8: MAKKAH-JEDDAH-JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MELAKSANAKAN THAWAF WADA/PERPISAHAN. PADA THAWAF INI KITA MEMANJATKAN PUJI SYUKUR ATAS SELESAINYA RANGKAIAN IBADAH UMRAH, JUGA MEMANJATKAN DOA AGAR DI HARI-HARI MENDATANG DIPERKENANKAN KEMBALI UNTUK MENGUNJUNGI BAITULLAH BERSAMA KELUARGA, TEMAN, DAN HANDAI TAULAN, BAIK UNTUK BER UMRAH APALAGI BER HAJI.</li>\r\n<li>MENUJU JEDDAH, PERJALANAN &plusmn; 1 JAM.</li>\r\n<li>SEBELUM KEMBALI KE TANAH AIR, JAMAAH AKAN DI AJAK TOUR KOTA JEDDAH ANTARA LAIN MENGUNJUNGI PANTAI LAUT MERAH(RED SEA), MASJID TERAPUNG DAN WISATA BELANJA DI DAERAH BALLAD.</li>\r\n<li>SELANJUTNYA JAMAAH AKAN DIANTAR MENUJU BANDARA KING ABDUL AZIZ.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-9: JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>DENGAN MENGUCAPKAN SYUKUR ALHAMDULILLAH, MAKA BERAKHIRLAH PROGRAM IBADAH UMRAH BERSAMA <strong>PT. DOA ARAFAH MADINAH</strong>, SEMOGA IBADAH YANG DILAKSANAKAN MENJADI IBADAH YANG MABRUR DI HADAPAN ALLAH SUBHANAHU WA TA''ALA. AAMIIN YAA ROBBAL ''AALAMIIN</li>\r\n</ul>\r\n<p style="text-align: justify;">&nbsp;</p>'),
(000008, 'PR0006', '<p class="panel-body" style="text-align: justify;"><strong>HARI KE-1: JAKARTA-JEDDAH-MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li style="text-align: left;">DENGAN MENGUCAP BISMILLAHIRROHMANIRROHIM, JAMAAH BERANGKAT DARI BANDARA SOEKARNO HATTA MENUJU JEDDAH, SETIBANYA DI JEDDAH JAMAAH DIJEMPUT OLEH PETUGAS DI PINTU LUAR KEMUDIAN DITRANSFER MENUJU MADINAH (PERJALANAN &plusmn; 4-5 JAM) LANGSUNG MASUK HOTEL. (DINNER)</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-2: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>ZIARAH KE MAKAM RASULULLAH NABI MUHAMMAD S.A.W DAN KE 2 SAHABAT NABI YAITU ABU BAKAR r.a DAN UMAR BIN KHATAB r.a YANG BERADA DI DALAM MASJID NABAWI DI DAERAH RAUDAH DAPAT DILAKUKAN OLEH JAMAAH PRIA MAUPUN WANITA SETIAP SAAT SELAMA 24 JAM. DAN BERZIARAH KE MAKAM BAQI.</li>\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJID NABAWI.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-3: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>HARI INI JAMAAH AKAN DIAJAK TOUR/ZIARAH MENGUNJUNGI BEBERAPA TEMPAT BERSEJARAH DI KOTA MADINAH ANTARA LAIN: MASJID QUBA (MASJID PERTAMA KALI DIBANGUN OLEH RASULULLAH SAW) MASJID KIBLATIN(MASJID TEMPAT PERISTIWA PERPINDAHAN QIBLAT DARI MASJIDIL AQSHA KE MASJIDIL HARAM), JABAL UHUD(LOKASI PERANG BADAR DAN TEMPAT TERBUNUHNYA BEBERAPA SYUHADA ISLAM), LOKASI PERANG KHANDAK(PERANG PARIT), BEKAS-BEKAS LOKASI MASJID SAB AH MASJID-MASJID PARA SAHABAT NABI DAN BERAKHIR DI KEBUN KURMA, DIMANA JAMAAH DAPAT MEMBELI BERBAGAI MACAM JENIS KURMA SEBAGAI OLEH-OLEH.(WAKTU ZIARAH AKAN DISESUAIKAN DENGAN SITUASI DAN KONDISI).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-4: MADINAH-MAKKAH</strong></p>\r\n<ul style="text-align: justify;">\r\n<li>SEBELUM MENINGGALKAN MADINAH JAMAAH MELAKUKAN ZIARAH WADA. SEBELUM MENINGGALKAN HOTEL JAMAAH MANDI IHRAM DI HOTEL LALU SHALAT SUNNAH IHRAM 2 RAKAAT DI MASJID BIR ALI. NIAT UMRAH AKAN DILAKUKAN BERSAMA-SAMA DI ATAS KENDARAAN MUTHAWWIF.</li>\r\n<li>PERJALANAN KE MAKKAH &plusmn; 4-5 JAM. JAMAAH MASUK HOTEL KEMUDIAN BERSIAP MELAKUKAN UMRAH (THAWAF, SAI, DAN TAHALLUL) YANG DIPIMPIN OLEH MUTHAWWIF.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-5: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-6: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH AKAN BERZIARAH KE BEBERAPA TEMPAT BERSEJARAH ISLAM DI KOTA MAKKAH, ANTARA LAIN: JABAL RAHMAH DAN MASJID NAMIRAH DI PADANG ARAFAH, MINA(TEMPAT MELONTAR JUMRAH), MUZDALIFAH, JABAL QURBAN, JABAL NUR, DAN JABAL TSUR. JAMAAH MENDAPAT KESEMPATAN UMRAH KEMBALI DENGAN MIQOT DI JARONAH, UNTUK ITU JAMAAH DISARANKAN MEMBAWA PAKAIAN IHROM.</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-7: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-8: MAKKAH-JEDDAH-JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MELAKSANAKAN THAWAF WADA/PERPISAHAN. PADA THAWAF INI KITA MEMANJATKAN PUJI SYUKUR ATAS SELESAINYA RANGKAIAN IBADAH UMRAH, JUGA MEMANJATKAN DOA AGAR DI HARI-HARI MENDATANG DIPERKENANKAN KEMBALI UNTUK MENGUNJUNGI BAITULLAH BERSAMA KELUARGA, TEMAN, DAN HANDAI TAULAN, BAIK UNTUK BER UMRAH APALAGI BER HAJI.</li>\r\n<li>MENUJU JEDDAH, PERJALANAN &plusmn; 1 JAM.</li>\r\n<li>SEBELUM KEMBALI KE TANAH AIR, JAMAAH AKAN DI AJAK TOUR KOTA JEDDAH ANTARA LAIN MENGUNJUNGI PANTAI LAUT MERAH(RED SEA), MASJID TERAPUNG DAN WISATA BELANJA DI DAERAH BALLAD.</li>\r\n<li>SELANJUTNYA JAMAAH AKAN DIANTAR MENUJU BANDARA KING ABDUL AZIZ.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-9: JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>DENGAN MENGUCAPKAN SYUKUR ALHAMDULILLAH, MAKA BERAKHIRLAH PROGRAM IBADAH UMRAH BERSAMA <strong>PT. DOA ARAFAH MADINAH</strong>, SEMOGA IBADAH YANG DILAKSANAKAN MENJADI IBADAH YANG MABRUR DI HADAPAN ALLAH SUBHANAHU WA TA''ALA. AAMIIN YAA ROBBAL ''AALAMIIN</li>\r\n</ul>\r\n<p style="text-align: justify;">&nbsp;</p>'),
(000009, 'PR0007', '<p class="panel-body" style="text-align: justify;"><strong>HARI KE-1: JAKARTA-JEDDAH-MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li style="text-align: left;">DENGAN MENGUCAP BISMILLAHIRROHMANIRROHIM, JAMAAH BERANGKAT DARI BANDARA SOEKARNO HATTA MENUJU JEDDAH, SETIBANYA DI JEDDAH JAMAAH DIJEMPUT OLEH PETUGAS DI PINTU LUAR KEMUDIAN DITRANSFER MENUJU MADINAH (PERJALANAN &plusmn; 4-5 JAM) LANGSUNG MASUK HOTEL. (DINNER)</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-2: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>ZIARAH KE MAKAM RASULULLAH NABI MUHAMMAD S.A.W DAN KE 2 SAHABAT NABI YAITU ABU BAKAR r.a DAN UMAR BIN KHATAB r.a YANG BERADA DI DALAM MASJID NABAWI DI DAERAH RAUDAH DAPAT DILAKUKAN OLEH JAMAAH PRIA MAUPUN WANITA SETIAP SAAT SELAMA 24 JAM. DAN BERZIARAH KE MAKAM BAQI.</li>\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJID NABAWI.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-3: MADINAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>HARI INI JAMAAH AKAN DIAJAK TOUR/ZIARAH MENGUNJUNGI BEBERAPA TEMPAT BERSEJARAH DI KOTA MADINAH ANTARA LAIN: MASJID QUBA (MASJID PERTAMA KALI DIBANGUN OLEH RASULULLAH SAW) MASJID KIBLATIN(MASJID TEMPAT PERISTIWA PERPINDAHAN QIBLAT DARI MASJIDIL AQSHA KE MASJIDIL HARAM), JABAL UHUD(LOKASI PERANG BADAR DAN TEMPAT TERBUNUHNYA BEBERAPA SYUHADA ISLAM), LOKASI PERANG KHANDAK(PERANG PARIT), BEKAS-BEKAS LOKASI MASJID SAB AH MASJID-MASJID PARA SAHABAT NABI DAN BERAKHIR DI KEBUN KURMA, DIMANA JAMAAH DAPAT MEMBELI BERBAGAI MACAM JENIS KURMA SEBAGAI OLEH-OLEH.(WAKTU ZIARAH AKAN DISESUAIKAN DENGAN SITUASI DAN KONDISI).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-4: MADINAH-MAKKAH</strong></p>\r\n<ul style="text-align: justify;">\r\n<li>SEBELUM MENINGGALKAN MADINAH JAMAAH MELAKUKAN ZIARAH WADA. SEBELUM MENINGGALKAN HOTEL JAMAAH MANDI IHRAM DI HOTEL LALU SHALAT SUNNAH IHRAM 2 RAKAAT DI MASJID BIR ALI. NIAT UMRAH AKAN DILAKUKAN BERSAMA-SAMA DI ATAS KENDARAAN MUTHAWWIF.</li>\r\n<li>PERJALANAN KE MAKKAH &plusmn; 4-5 JAM. JAMAAH MASUK HOTEL KEMUDIAN BERSIAP MELAKUKAN UMRAH (THAWAF, SAI, DAN TAHALLUL) YANG DIPIMPIN OLEH MUTHAWWIF.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-5: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-6: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH AKAN BERZIARAH KE BEBERAPA TEMPAT BERSEJARAH ISLAM DI KOTA MAKKAH, ANTARA LAIN: JABAL RAHMAH DAN MASJID NAMIRAH DI PADANG ARAFAH, MINA(TEMPAT MELONTAR JUMRAH), MUZDALIFAH, JABAL QURBAN, JABAL NUR, DAN JABAL TSUR. JAMAAH MENDAPAT KESEMPATAN UMRAH KEMBALI DENGAN MIQOT DI JARONAH, UNTUK ITU JAMAAH DISARANKAN MEMBAWA PAKAIAN IHROM.</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-7: MAKKAH</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MEMPERBANYAK IBADAH DI MASJIDIL HARAM(SHALAT SUNNAH, DZIKIR, TADARUS AL-QUR AN, THAWAF SUNNAH).</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>HARI KE-8: MAKKAH-JEDDAH-JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>JAMAAH MELAKSANAKAN THAWAF WADA/PERPISAHAN. PADA THAWAF INI KITA MEMANJATKAN PUJI SYUKUR ATAS SELESAINYA RANGKAIAN IBADAH UMRAH, JUGA MEMANJATKAN DOA AGAR DI HARI-HARI MENDATANG DIPERKENANKAN KEMBALI UNTUK MENGUNJUNGI BAITULLAH BERSAMA KELUARGA, TEMAN, DAN HANDAI TAULAN, BAIK UNTUK BER UMRAH APALAGI BER HAJI.</li>\r\n<li>MENUJU JEDDAH, PERJALANAN &plusmn; 1 JAM.</li>\r\n<li>SEBELUM KEMBALI KE TANAH AIR, JAMAAH AKAN DI AJAK TOUR KOTA JEDDAH ANTARA LAIN MENGUNJUNGI PANTAI LAUT MERAH(RED SEA), MASJID TERAPUNG DAN WISATA BELANJA DI DAERAH BALLAD.</li>\r\n<li>SELANJUTNYA JAMAAH AKAN DIANTAR MENUJU BANDARA KING ABDUL AZIZ.</li>\r\n</ul>\r\n<p class="panel-body" style="text-align: justify;"><strong>HARI KE-9: JAKARTA</strong></p>\r\n<ul class="panel-body" style="text-align: justify;">\r\n<li>DENGAN MENGUCAPKAN SYUKUR ALHAMDULILLAH, MAKA BERAKHIRLAH PROGRAM IBADAH UMRAH BERSAMA <strong>PT. DOA ARAFAH MADINAH</strong>, SEMOGA IBADAH YANG DILAKSANAKAN MENJADI IBADAH YANG MABRUR DI HADAPAN ALLAH SUBHANAHU WA TA''ALA. AAMIIN YAA ROBBAL ''AALAMIIN</li>\r\n</ul>\r\n<p style="text-align: justify;">&nbsp;</p>'),
(000010, 'PR0008', ''),
(000011, 'PR0009', ''),
(000012, 'PR0010', ''),
(000013, 'PR0011', ''),
(000014, 'PR0012', ''),
(000015, 'PR0013', ''),
(000016, 'PR0014', ''),
(000017, 'PR0015', ''),
(000018, 'PR0016', ''),
(000019, 'PR0017', ''),
(000020, 'PR0018', '');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(000001, 'IT Manager'),
(000002, 'Direktur Utama'),
(000003, 'Direktur Operasional'),
(000004, 'Staf Administrasi'),
(000005, 'Staf EDP'),
(000006, 'Staf Logistik'),
(000008, 'Pembimbing');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_perwakilan`
--

CREATE TABLE IF NOT EXISTS `jenis_perwakilan` (
  `id_jenis` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `perwakilan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jenis_perwakilan`
--

INSERT INTO `jenis_perwakilan` (`id_jenis`, `perwakilan`) VALUES
(000001, 'Paket Mina (7)'),
(000002, 'Paket Roudhoh (13)'),
(000003, 'Paket Multazam(22)'),
(000005, 'Paket Arafah(40)');

-- --------------------------------------------------------

--
-- Table structure for table `keadaan_pelanggan`
--

CREATE TABLE IF NOT EXISTS `keadaan_pelanggan` (
  `id_keadaan` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_pendaftaran` varchar(8) NOT NULL,
  `keadaan` varchar(50) NOT NULL,
  `tanggal_update` date NOT NULL,
  PRIMARY KEY (`id_keadaan`),
  KEY `id_pendaftaran` (`id_pendaftaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `keadaan_pelanggan`
--

INSERT INTO `keadaan_pelanggan` (`id_keadaan`, `id_pendaftaran`, `keadaan`, `tanggal_update`) VALUES
(000001, 'PP000009', 'SEHAT', '2016-03-16'),
(000002, 'PP000008', 'SEHAT', '2016-03-22'),
(000003, 'PP000007', '', '0000-00-00'),
(000004, 'PP000003', '', '0000-00-00'),
(000005, 'PP000011', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE IF NOT EXISTS `keluhan` (
  `id_keluhan` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_pelanggan` varchar(8) NOT NULL,
  `id_staf` varchar(6) NOT NULL,
  `keluhan` text NOT NULL,
  `waktu_kirim` datetime NOT NULL,
  `respon_keluhan` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_keluhan`),
  KEY `id_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `id_pelanggan`, `id_staf`, `keluhan`, `waktu_kirim`, `respon_keluhan`, `status`) VALUES
(000001, 'DAM00007', 'ST0001', 'Assalamu''alaikum wr.wb.\r\nsaya kurang merasa nyaman dengan pelayanan saat pengajian bulanan. mohon diperbaiki ya pelayanannya. terima kasih.', '2016-03-20 00:50:16', 'Wa''alaikum salam wr.wb.\r\nbaik pak, akan kami perbaiki pelayanannya. terima kasih.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `keuangan_masuk`
--

CREATE TABLE IF NOT EXISTS `keuangan_masuk` (
  `id_keuangan` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_staf` varchar(6) NOT NULL,
  `penyetor` varchar(50) NOT NULL,
  `uraian_transaksi` text NOT NULL,
  `jumlah` int(10) NOT NULL,
  `kurs` varchar(3) NOT NULL,
  `cara_bayar` varchar(35) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu_input` date NOT NULL,
  PRIMARY KEY (`id_keuangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `keuangan_masuk`
--

INSERT INTO `keuangan_masuk` (`id_keuangan`, `id_staf`, `penyetor`, `uraian_transaksi`, `jumlah`, `kurs`, `cara_bayar`, `keterangan`, `waktu_input`) VALUES
(000003, 'ST0001', 'Hendri  Mahesya', 'Untuk Pembayaran Umrah Reguler-Favorit-JANUARI 2015', 800, 'USD', 'Transfer Via BCA', 'Untuk Pembayaran Umroh Reguler', '2016-03-20'),
(000004, 'ST0001', 'Hendri  Mahesya', 'Untuk Pembayaran Umrah Reguler-Favorit-JANUARI 2015', 250, 'USD', 'Tunai', 'pembayaran umroh', '2016-03-24'),
(000005, 'ST0001', 'Hendri  Mahesya', 'Untuk Pembayaran Umrah Reguler-Favorit-JANUARI 2015', 250, 'USD', 'Tunai', '', '2016-03-24'),
(000006, 'ST0004', 'ade musytahun wahid', 'Untuk Pembayaran Umrah Promo-Favorit-JANUARI 2015', 18000000, 'IDR', 'Tunai', '', '2016-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayaran`
--

CREATE TABLE IF NOT EXISTS `konfirmasi_pembayaran` (
  `id_konfirmasi` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_pendaftaran` varchar(8) NOT NULL,
  `no_rekening` varchar(10) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `no_resi` varchar(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `keterangan` text NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `waktu_kirim` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_konfirmasi`),
  KEY `id_pendaftaran` (`id_pendaftaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`id_konfirmasi`, `id_pendaftaran`, `no_rekening`, `nama_bank`, `atas_nama`, `no_resi`, `jumlah`, `keterangan`, `bukti`, `waktu_kirim`, `status`) VALUES
(000001, 'PP000008', '123000127', 'BCA', 'Hendri Mahesya', '11223344', 320, 'alhamdulillah', 'cancel.png', '2016-03-20', 2),
(000002, 'PP000011', '123000127', 'BCA', 'Hendri Mahesya', '12354321', 800, 'Untuk Pembayaran Umroh Reguler', 'Aljabar Linear.jpg', '2016-03-20', 1),
(000003, 'PP000010', '12300098', 'BSM', 'safira nurulita', '12345561', 350, 'untuk pembayaran umroh', 'cancel.png', '2016-03-24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--

CREATE TABLE IF NOT EXISTS `kurs` (
  `id_kurs` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_staf` varchar(6) NOT NULL,
  `kurs` int(5) NOT NULL,
  `waktu_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kurs`),
  KEY `id_staf` (`id_staf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kurs`
--

INSERT INTO `kurs` (`id_kurs`, `id_staf`, `kurs`, `waktu_update`) VALUES
(000001, 'ST0005', 13750, '2016-06-14 20:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `mou`
--

CREATE TABLE IF NOT EXISTS `mou` (
  `id_mou` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_pendaftaran` varchar(8) NOT NULL,
  `no_mou` varchar(50) NOT NULL,
  `tgl_cetak` date NOT NULL,
  `status_cetak` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_mou`),
  KEY `id_pendaftaran` (`id_pendaftaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mou`
--

INSERT INTO `mou` (`id_mou`, `id_pendaftaran`, `no_mou`, `tgl_cetak`, `status_cetak`) VALUES
(000001, 'PP000009', 'DAM-SKU-MOU-XXIX-2016', '2016-03-14', 1),
(000002, 'PP000008', '', '0000-00-00', 0),
(000003, 'PP000007', '', '0000-00-00', 0),
(000004, 'PP000003', 'DAM-SKU 011/VI/2016', '2016-06-21', 0),
(000005, 'PP000011', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `passport`
--

CREATE TABLE IF NOT EXISTS `passport` (
  `id_passport` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_pelanggan` varchar(8) NOT NULL,
  `no_passport` varchar(10) NOT NULL,
  `date_issued` varchar(10) NOT NULL,
  `date_expired` varchar(10) NOT NULL,
  `issuing_office` varchar(50) NOT NULL,
  PRIMARY KEY (`id_passport`),
  KEY `id_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `passport`
--

INSERT INTO `passport` (`id_passport`, `id_pelanggan`, `no_passport`, `date_issued`, `date_expired`, `issuing_office`) VALUES
(000001, 'DAM00008', 'A12345', '14-03-2016', '14-03-2020', 'Jakarta Selatan'),
(000002, 'DAM00007', 'A1234', '27 Juni 20', '27 Juni 20', 'Jakarta Selatan'),
(000003, 'DAM00006', '', '', '', ''),
(000004, 'DAM00002', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_pelanggan` varchar(8) NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `nama_tengah` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `nama_panggilan` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `ket_umrah` varchar(12) NOT NULL,
  `ket_haji` varchar(12) NOT NULL,
  `ukuran_pakaian` varchar(3) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(30) NOT NULL,
  `telp_rumah` varchar(15) NOT NULL,
  `telp_kantor` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ahli_waris` varchar(50) NOT NULL,
  `hubungan` varchar(30) NOT NULL,
  `no_rekening` varchar(15) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `cabang` varchar(30) NOT NULL,
  `reg_dai` varchar(8) NOT NULL,
  `nama_dai` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_registrasi` varchar(12) NOT NULL DEFAULT 'UNREGISTERED',
  `w_input` datetime NOT NULL,
  `w_validasi` datetime NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_depan`, `nama_tengah`, `nama_belakang`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `jenis_kelamin`, `pendidikan`, `pekerjaan`, `ket_umrah`, `ket_haji`, `ukuran_pakaian`, `alamat`, `kota`, `telp_rumah`, `telp_kantor`, `hp`, `email`, `ahli_waris`, `hubungan`, `no_rekening`, `atas_nama`, `nama_bank`, `cabang`, `reg_dai`, `nama_dai`, `username`, `password`, `status_registrasi`, `w_input`, `w_validasi`) VALUES
('DAM00001', 'ahmad', 'zaky', 'nurhamdi', 'zaky', 'tangerang', '26/06/1990', '324606266900001', 'Laki-Laki', 'D3', 'Mahasiswa', 'Sudah Pernah', 'Belum Pernah', 'L', 'jl. cabe raya\r\n', 'Tangerang Selatan', '0217710670', '0217710670', '083877949409', 'zaky@gmail.com', 'jaki', 'saudara kandung', '0193000129', 'Ahmad Zaky Nurhamdi', 'BCA', 'Ciputat', '', 'Damtour', 'zaky', 'zaky', 'UNREGISTERED', '2016-03-16 00:00:00', '0000-00-00 00:00:00'),
('DAM00002', 'ade', 'musytahun', 'wahid', 'ade', 'makassar', '07/12/1991', '3241207910000001', 'Laki-Laki', 'S1', 'Pegawai Swasta', 'Belum Pernah', 'Belum Pernah', 'XL', 'makassar', 'Makassar', '0217710670', '0217710670', '0813123450001', 'ade@gmail.com', 'dalyati', 'adik kandung', '099912345', 'ade musytahun wahid', 'Mandiri Syariah', 'Ciputat', 'DAM00001', 'Ahmad Zaky Nurhamdi', 'ade', 'ade', 'REGISTERED', '2016-03-16 00:00:00', '2016-03-16 16:43:56'),
('DAM00003', 'muhammad', 'fahmi', 'hafidz', 'fahmi', 'tangerang', '12/07/1992', '3241207910000001', 'Laki-Laki', 'S1', 'Pegawai Swasta', 'Belum Pernah', 'Belum Pernah', 'L', 'balaraja, banten', 'Balaraja', '0217710670', '0217710670', '0813123450001', 'fahmi@gmail.com', 'fahmimah', 'adik kandung', '099912345', 'muhammad fahmi hafidz', 'BCA', 'Balaraja', 'DAM00002', 'ade musytahun wahid', 'fahmi', 'fahmi', 'UNREGISTERED', '2016-03-16 00:00:00', '0000-00-00 00:00:00'),
('DAM00004', 'Muhammad', 'Arif', 'Hakim', 'Arif', 'Sukabumi', '21/04/1990', '324123000000671', 'Laki-Laki', 'S1', 'Pegawai Swasta', 'Belum Pernah', 'Belum Pernah', 'XL', 'Sukabumi, Jawa Barat', 'Sukabumi', '021 7531625', '021 7531625', '08123456789', 'arif@gmail.com', 'Abdul Hakim', 'Saudara Kandung', '123000125', 'Muhammad Arif Hakim', 'BCA', 'Sukabumi', 'DAM00002', 'ade musytahun wahid', 'arif', 'arif', 'UNREGISTERED', '2016-03-16 00:00:00', '0000-00-00 00:00:00'),
('DAM00005', 'Andika', 'Syafiq', 'Bhaskara', 'Andika', 'Sukabumi', '24/03/2002', '22017', 'Laki-Laki', 'SMP', 'Pelajar', 'Belum Pernah', 'Belum Pernah', 'S', 'Ciputat, Tangerang Selatan', 'Tangerang Selatan', '021 77531625', '021 77531625', '08123456789', 'andika@gmail.com', 'isra', 'Istri', '121000125', 'Andika Syafiq Bhaskara', 'BCA', 'Ciputat', 'DAM00001', 'ahmad zaky nurhamdi', 'andika', 'andika', 'UNREGISTERED', '2016-03-16 00:00:00', '0000-00-00 00:00:00'),
('DAM00006', 'Muhammad', 'Ridwan', 'Attaufiq', 'Ridwan', 'Tangerang', '23/08/1989', '324123000000671', 'Laki-Laki', 'S1', 'Pegawai Swasta', 'Belum Pernah', 'Belum Pernah', 'XL', 'Jl. Pondok Aren, Jakarta Selatan', 'Tangerang Selatan', '021 77531625', '021 77531625', '08123456789', 'ridwan@gmail.com', 'Susi', 'Kakak Kandung', '123000128', 'Muhammad Ridwan Attaufiq', 'BCA', 'Ciputat', 'DAM00001', 'ahmad zaky nurhamdi', 'ridwan', 'ridwan', 'REGISTERED', '2016-03-16 00:00:00', '0000-00-00 00:00:00'),
('DAM00007', 'Hendri', '', 'Mahesya', 'Hendrik', 'Tangerang', '26/06/1990', '324123000000671', 'Laki-Laki', 'S1', 'Pegawai Swasta', 'Belum Pernah', 'Belum Pernah', 'L', 'Jl. Cabe Raya, Tangerang Selatan', 'Tangerang Selatan', '021 77531625', '021 77531625', '08123456789', 'hendrik@gmail.com', 'yuyun', 'istri', '123000127', 'Hendri Mahesya', 'BCA', 'Ciputat', 'DAM00002', 'ade musytahun wahid', 'hendrik', 'hendrik', 'REGISTERED', '2016-03-16 00:00:00', '0000-00-00 00:00:00'),
('DAM00008', 'Abdul', 'Rahman', 'Ghofur', 'Ghofur', 'Tangerang', '13/04/1991', '32413049100001', 'Laki-Laki', 'D3', 'Wiraswasta', 'Belum Pernah', 'Belum Pernah', 'L', 'Tangerang selatan', 'Tangerang Selatan', '123456789', '123456789', '0812345678', 'ghofur@gmail.com', 'ahmad', 'Adik Kandung', '124600098', 'Abdul Ghofur', 'BCA', 'Ciputat', 'DAM00007', 'Hendri  Mahesya', 'ghofur', 'ghofur', 'REGISTERED', '2016-03-16 00:00:00', '0000-00-00 00:00:00'),
('DAM00009', 'safira', '', 'nurulita', 'fira', 'depok', '13/08/1995', '32123000987', 'Perempuan', 'SMA', 'Pegawai Swasta', 'Belum Pernah', 'Belum Pernah', 'M', 'jl. pitara raya', 'Depok', '', '', '081812345678', 'safira@gmail.com', 'yos', 'kakak', '12300098', 'safira nurulita', 'BSM', 'depok', 'DAM00001', 'ahmad zaky nurhamdi', 'safira', 'safira', 'UNREGISTERED', '2016-03-16 16:19:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_pendaftaran` varchar(8) NOT NULL,
  `id_staf` varchar(6) NOT NULL,
  `penyetor` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `cara_bayar` varchar(50) NOT NULL,
  `kurs` varchar(3) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_bayar` date NOT NULL,
  PRIMARY KEY (`id_pembayaran`),
  KEY `id_pendaftaran` (`id_pendaftaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pendaftaran`, `id_staf`, `penyetor`, `jumlah`, `cara_bayar`, `kurs`, `keterangan`, `tanggal_bayar`) VALUES
(000001, 'PP000008', 'ST0001', 'hendri', 2000, 'Tunai', 'USD', '', '2016-03-12'),
(000002, 'PP000009', 'ST0001', 'ghofur', 3500000, 'Tunai', 'IDR', 'pembayaran booking seat', '2016-03-16'),
(000003, 'PP000003', 'ST0004', 'Ade', 3500000, 'Tunai', 'IDR', 'booking seat umroh', '2016-03-16'),
(000004, 'PP000008', 'ST0001', 'hendri', 8500, 'Tunai', 'USD', '', '2016-03-20'),
(000005, 'PP000011', 'ST0001', 'hendri', 350, 'Tunai', 'USD', '', '2016-03-20'),
(000008, 'PP000011', 'ST0001', 'Hendri Mahesya', 800, 'Transfer Via BCA', 'USD', 'Untuk Pembayaran Umroh Reguler', '2016-03-20'),
(000009, 'PP000011', 'ST0001', 'hendri', 100, 'Tunai', 'USD', '', '2016-03-24'),
(000010, 'PP000011', 'ST0001', 'hendri', 250, 'Tunai', 'USD', '', '2016-03-24'),
(000011, 'PP000011', 'ST0001', 'hendri', 250, 'Tunai', 'USD', '', '2016-03-24'),
(000012, 'PP000003', 'ST0004', 'ade', 18000000, 'Tunai', 'IDR', '', '2016-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `pemberitahuan`
--

CREATE TABLE IF NOT EXISTS `pemberitahuan` (
  `id_pemberitahuan` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_staf` varchar(6) NOT NULL,
  `judul_pemberitahuan` varchar(1000) NOT NULL,
  `pemberitahuan` text NOT NULL,
  `waktu_kirim` datetime NOT NULL,
  PRIMARY KEY (`id_pemberitahuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pemberitahuan`
--

INSERT INTO `pemberitahuan` (`id_pemberitahuan`, `id_staf`, `judul_pemberitahuan`, `pemberitahuan`, `waktu_kirim`) VALUES
(000001, 'ST0001', 'Informasi Kantor Pusat', '<p style="text-align: justify;">DAMTOUR singkatan dari PT. Do''a ''Arafah Madinah yang dipimpin oleh Ust. Hambali Abbas.S.Pdi (Direktur Utama) yang berkedudukan di GRAHA DAMTOUR No.120 Jl. KH.Abdullah Syafei (Casablanca) Bukit Duri - Tebet - Jakarta Selatan.</p>', '2016-02-14 21:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `penanya`
--

CREATE TABLE IF NOT EXISTS `penanya` (
  `id_penanya` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status_penanya` varchar(10) NOT NULL,
  `waktu_daftar` date NOT NULL,
  PRIMARY KEY (`id_penanya`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `penanya`
--

INSERT INTO `penanya` (`id_penanya`, `nama`, `email`, `password`, `status_penanya`, `waktu_daftar`) VALUES
(000004, 'Abdul Rahman Ghofur', 'ghofur@gmail.com', 'ghofur', 'Pelanggan', '2016-03-11'),
(000005, 'Hendri  Mahesya', 'hendrik@gmail.com', 'hendrik', 'Pelanggan', '2016-03-11'),
(000006, 'Muhammad Ridwan Attaufiq', 'ridwan@gmail.com', 'ridwan', 'Pelanggan', '2016-03-11'),
(000007, 'ade musytahun wahid', 'ade@gmail.com', 'ade', 'Pelanggan', '2016-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_pelanggan`
--

CREATE TABLE IF NOT EXISTS `pendaftaran_pelanggan` (
  `id_pendaftaran` varchar(8) NOT NULL,
  `id_produk` varchar(6) NOT NULL,
  `id_pelanggan` varchar(8) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `status_keberangkatan` varchar(21) NOT NULL DEFAULT 'Belum Diberangkatkan',
  PRIMARY KEY (`id_pendaftaran`),
  KEY `id_produk` (`id_produk`),
  KEY `id_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran_pelanggan`
--

INSERT INTO `pendaftaran_pelanggan` (`id_pendaftaran`, `id_produk`, `id_pelanggan`, `tanggal_pendaftaran`, `status_keberangkatan`) VALUES
('PP000002', 'PR0002', 'DAM00001', '2016-02-18', 'Belum Diberangkatkan'),
('PP000003', 'PR0013', 'DAM00002', '2016-02-26', 'Belum Diberangkatkan'),
('PP000004', 'PR0003', 'DAM00003', '2016-02-26', 'Belum Diberangkatkan'),
('PP000005', 'PR0003', 'DAM00004', '2016-03-06', 'Belum Diberangkatkan'),
('PP000006', 'PR0001', 'DAM00005', '2016-03-06', 'Belum Diberangkatkan'),
('PP000007', 'PR0017', 'DAM00006', '2016-03-07', 'Belum Diberangkatkan'),
('PP000008', 'PR0018', 'DAM00007', '2016-03-07', 'Sedang Diberangkatkan'),
('PP000009', 'PR0013', 'DAM00008', '2016-03-07', 'Belum Diberangkatkan'),
('PP000010', 'PR0001', 'DAM00009', '2016-03-16', 'Belum Diberangkatkan'),
('PP000011', 'PR0001', 'DAM00007', '2016-03-19', 'Belum Diberangkatkan');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_perwakilan`
--

CREATE TABLE IF NOT EXISTS `pendaftaran_perwakilan` (
  `id_pendaftaran` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_perwakilan` varchar(6) NOT NULL,
  `id_jenis` int(6) unsigned zerofill NOT NULL,
  `tanggal_daftar` date NOT NULL,
  PRIMARY KEY (`id_pendaftaran`),
  KEY `id_jenis` (`id_jenis`),
  KEY `id_perwakilan` (`id_perwakilan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pendaftaran_perwakilan`
--

INSERT INTO `pendaftaran_perwakilan` (`id_pendaftaran`, `id_perwakilan`, `id_jenis`, `tanggal_daftar`) VALUES
(000001, 'WK0001', 000001, '2016-02-12'),
(000002, 'WK0002', 000002, '2016-02-12'),
(000005, 'WK0003', 000001, '2016-02-12'),
(000006, 'WK0003', 000005, '2016-02-14'),
(000007, 'WK0003', 000002, '2016-02-14'),
(000008, 'WK0003', 000003, '2016-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan`
--

CREATE TABLE IF NOT EXISTS `perlengkapan` (
  `id_perlengkapan` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_staf` varchar(6) NOT NULL,
  `nama_perlengkapan` varchar(50) NOT NULL,
  `sisa` int(5) NOT NULL DEFAULT '0',
  `waktu_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_perlengkapan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `perlengkapan`
--

INSERT INTO `perlengkapan` (`id_perlengkapan`, `id_staf`, `nama_perlengkapan`, `sisa`, `waktu_update`) VALUES
(000002, 'ST0001', 'koper', 170, '2016-05-02 12:19:05'),
(000003, 'ST0001', 'tas kecil', 0, '2016-03-15 00:34:29'),
(000004, 'ST0001', 'bahan batik', 0, '2016-03-15 00:34:55'),
(000005, 'ST0001', 'mukena bergo', 0, '2016-03-15 00:35:11'),
(000006, 'ST0001', 'kain ihrom', 0, '2016-03-15 00:35:25'),
(000007, 'ST0001', 'dvd profil', 0, '2016-03-16 14:31:48'),
(000008, 'ST0001', 'voucher', 0, '2016-03-16 14:32:20'),
(000009, 'ST0001', 'kain ihrom', 0, '2016-03-16 14:32:34'),
(000010, 'ST0001', 'ikat pinggang', 0, '2016-03-16 14:32:52'),
(000011, 'ST0001', 'buku doa', 0, '2016-03-16 14:37:38'),
(000012, 'ST0001', 'buku produk', 0, '2016-03-16 14:40:09'),
(000013, 'ST0001', 'buku marketing', 0, '2016-03-16 14:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan_keluar`
--

CREATE TABLE IF NOT EXISTS `perlengkapan_keluar` (
  `id_perlengkapan_keluar` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_perlengkapan` int(6) unsigned zerofill NOT NULL,
  `jumlah` int(3) NOT NULL,
  `id_staf` varchar(6) NOT NULL,
  `waktu_keluar` date NOT NULL,
  PRIMARY KEY (`id_perlengkapan_keluar`),
  KEY `id_perlengkapan` (`id_perlengkapan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `perlengkapan_keluar`
--

INSERT INTO `perlengkapan_keluar` (`id_perlengkapan_keluar`, `id_perlengkapan`, `jumlah`, `id_staf`, `waktu_keluar`) VALUES
(000001, 000002, 5, 'ST0001', '2016-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan_masuk`
--

CREATE TABLE IF NOT EXISTS `perlengkapan_masuk` (
  `id_perlengkapan_masuk` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_perlengkapan` int(6) unsigned zerofill NOT NULL,
  `jumlah` int(5) NOT NULL,
  `id_staf` varchar(6) NOT NULL,
  `waktu_input` date NOT NULL,
  PRIMARY KEY (`id_perlengkapan_masuk`),
  KEY `id_perlengkapan` (`id_perlengkapan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `perlengkapan_masuk`
--

INSERT INTO `perlengkapan_masuk` (`id_perlengkapan_masuk`, `id_perlengkapan`, `jumlah`, `id_staf`, `waktu_input`) VALUES
(000002, 000002, 100, 'ST0001', '2016-03-15'),
(000003, 000002, 25, 'ST0001', '2016-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan_pelanggan`
--

CREATE TABLE IF NOT EXISTS `perlengkapan_pelanggan` (
  `id_perlengkapan_pelanggan` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_pendaftaran` varchar(8) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `koper` int(1) NOT NULL DEFAULT '0',
  `taskecil` int(1) NOT NULL DEFAULT '0',
  `dvdprofil` int(1) NOT NULL DEFAULT '0',
  `bukumarketing` int(1) NOT NULL DEFAULT '0',
  `bukuproduk` int(1) NOT NULL DEFAULT '0',
  `bukupintar` int(1) NOT NULL DEFAULT '0',
  `bukudoa` int(1) NOT NULL DEFAULT '0',
  `voucher` int(1) NOT NULL DEFAULT '0',
  `kainihrom` int(1) NOT NULL DEFAULT '0',
  `ikatpinggang` int(1) NOT NULL DEFAULT '0',
  `mukenabergo` int(1) NOT NULL DEFAULT '0',
  `bahanbatik` int(1) NOT NULL DEFAULT '0',
  `waktu_pengambilan` date NOT NULL,
  PRIMARY KEY (`id_perlengkapan_pelanggan`),
  KEY `id_pendaftaran` (`id_pendaftaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `perlengkapan_pelanggan`
--

INSERT INTO `perlengkapan_pelanggan` (`id_perlengkapan_pelanggan`, `id_pendaftaran`, `penerima`, `koper`, `taskecil`, `dvdprofil`, `bukumarketing`, `bukuproduk`, `bukupintar`, `bukudoa`, `voucher`, `kainihrom`, `ikatpinggang`, `mukenabergo`, `bahanbatik`, `waktu_pengambilan`) VALUES
(000001, 'PP000009', 'ghofur', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, '2016-03-20'),
(000002, 'PP000008', 'Hendrik', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2016-03-20'),
(000003, 'PP000007', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
(000004, 'PP000003', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
(000005, 'PP000011', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE IF NOT EXISTS `pertanyaan` (
  `id_pertanyaan` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_staf` varchar(6) NOT NULL,
  `id_penanya` int(6) unsigned zerofill NOT NULL,
  `pertanyaan` text NOT NULL,
  `waktu_kirim` datetime NOT NULL,
  `jawaban` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_pertanyaan`),
  KEY `id_penanya` (`id_penanya`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `id_staf`, `id_penanya`, `pertanyaan`, `waktu_kirim`, `jawaban`, `status`) VALUES
(000001, '', 000005, 'apakah ada promo untuk bulan ramadhan ini?\r\n', '2016-06-15 15:07:37', 'Belum Menjawab', 1);

-- --------------------------------------------------------

--
-- Table structure for table `perwakilan`
--

CREATE TABLE IF NOT EXISTS `perwakilan` (
  `id_perwakilan` varchar(6) NOT NULL,
  `id_staf` varchar(6) NOT NULL,
  `id_jenis` int(6) unsigned zerofill NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id_perwakilan`),
  KEY `id_jenis` (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perwakilan`
--

INSERT INTO `perwakilan` (`id_perwakilan`, `id_staf`, `id_jenis`, `nama`, `jenis_kelamin`, `alamat`, `provinsi`, `no_telp`, `email`) VALUES
('WK0001', 'ST0001', 000001, 'Isra Febriastri Said', 'Perempuan', 'Jl. Ciputat Raya', 'Banten', '0812334455667', 'isra@gmail.com'),
('WK0002', 'ST0001', 000002, 'Ade Musytahun Wahid', 'Laki-Laki', 'Jl. Pare', 'Sulawesi Selatan', '0877454321', 'ade@gmail.com'),
('WK0003', 'ST0001', 000002, 'Khawarizmi Al Fajar', 'Laki-Laki', 'Jl. Tangerang Raya', 'Banten', '0838987678', 'haris@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` varchar(6) NOT NULL,
  `jenis_produk` varchar(30) NOT NULL,
  `jenis_paket` varchar(30) NOT NULL,
  `lama_perjalanan` varchar(30) NOT NULL,
  `biaya` int(10) NOT NULL,
  `tanggal_keberangkatan` varchar(10) NOT NULL,
  `bulan_keberangkatan` varchar(30) NOT NULL,
  `pelunasan` varchar(30) NOT NULL,
  `id_staf` varchar(6) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `jenis_produk`, `jenis_paket`, `lama_perjalanan`, `biaya`, `tanggal_keberangkatan`, `bulan_keberangkatan`, `pelunasan`, `id_staf`, `keterangan`) VALUES
('PR0001', 'Umrah Reguler', 'Favorit', '9 hari', 2250, '1/24/2015', 'JANUARI 2015', 'NOVEMBER 2014', 'ST0007', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0002', 'Umrah Reguler', 'Favorit', '9 hari', 2250, '2/28/2015', 'FEBRUARI 2015', 'DESEMBER 2014', 'ST0007', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0003', 'Umrah Reguler', 'Favorit', '9 hari', 2250, '3/28/2015', 'MARET 2015', 'JANUARI 2015', 'ST0007', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0004', 'Umrah Reguler', 'Favorit', '9 hari', 2250, '4/25/2015', 'APRIL 2015', 'FEBRUARI 2015', 'ST0007', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0005', 'Umrah Reguler', 'Premium', '9 hari', 2650, '1/31/2015', 'JANUARI 2015', 'NOVEMBER 2014', 'ST0008', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0006', 'Umrah Reguler', 'Premium', '9 hari', 2650, '2/28/2015', 'FEBRUARI 20165', 'DESEMBER 2014', 'ST0008', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0007', 'Umrah Reguler', 'Premium', '9 hari', 2650, '3/28/2015', 'MARET 2015', 'JANUARI 2015', 'ST0008', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0008', 'Umrah Reguler', 'Premium', '9 hari', 2650, '4/25/2015', 'APRIL 2015', 'FEBRUARI 2015', 'ST0008', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0009', 'Umrah Reguler', 'Executive', '9 hari', 3150, '1/31/2015', 'JANUARI 2015', 'NOVEMBER 2014', 'ST0009', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0010', 'Umrah Reguler', 'Executive', '9 hari', 3150, '2/28/2015', 'FEBRUARI 2015', 'DESEMBER 2014', 'ST0009', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0011', 'Umrah Reguler', 'Executive', '9 hari', 3150, '3/28/2015', 'MARET 2015', 'JANUARI 2015', 'ST0009', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0012', 'Umrah Reguler', 'Executive', '9 hari', 3150, '4/25/2015', 'APRIL 2015', 'FEBRUARI 2015', 'ST0009', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0013', 'Umrah Promo', 'Favorit', '9 hari', 21500000, '1/31/2015', 'JANUARI 2015', 'JUNI 2014', 'ST0007', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0014', 'Umrah Promo', 'Favorit', '9 hari', 22000000, '2/28/2015', 'FEBRUARI 2015', 'JULI 2014', 'ST0007', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0015', 'Umrah Promo', 'Favorit', '9 hari', 22500000, '3/28/2015', 'MARET 2015', 'AGUSTUS 2014', 'ST0007', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0016', 'Umrah Promo', 'Favorit', '9 hari', 23000000, '4/25/2015', 'APRIL 2015', 'SEPTEMBER 2014', 'ST0007', 'Tanggal Keberangkatan Dapat Berubah Dengan Pemberitahuan Sebelumnya.'),
('PR0017', 'Umrah+Wisata', 'Favorit', '12 hari', 2700, '1/31/2015', 'JANUARI 2015', 'NOVEMBER 2014', 'ST0010', 'Wisata = Turkey'),
('PR0018', 'Haji Khusus', 'Haji Khusus', 'Haji Khusus', 10500, '8/1/2016', 'AGUSTUS 2020', 'DESEMBER 2015', 'ST0008', 'Tanggal Keberangkatan sesuai dengan pengumuman dari KEMENAG RI');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `id_testimoni` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_pendaftaran` varchar(8) NOT NULL,
  `testimoni` text NOT NULL,
  `publish` varchar(15) NOT NULL DEFAULT 'Tampil',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_testimoni`),
  KEY `id_pendaftaran` (`id_pendaftaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_pendaftaran`, `testimoni`, `publish`, `status`) VALUES
(000001, 'PP000009', 'Alhamdulillah Umroh Dengan Damtour Dapat berjalan dengan Lancar. dan pelayanannya pun memuaskan, terima kasih damtour.', 'Tampil', 1),
(000002, 'PP000008', 'Alhamdulillah Pelayanannya Memuaskan. Terima kasih Damtour.', 'Tampil', 1),
(000003, 'PP000007', '', 'Tidak Tampil', 0),
(000004, 'PP000003', '', 'Tidak Tampil', 0),
(000005, 'PP000011', '', 'Tidak Tampil', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_damtour`
--

CREATE TABLE IF NOT EXISTS `user_damtour` (
  `id_staf` varchar(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `id_jabatan` int(6) unsigned zerofill NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(7) NOT NULL,
  PRIMARY KEY (`id_staf`),
  KEY `id_jabatan` (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_damtour`
--

INSERT INTO `user_damtour` (`id_staf`, `nama`, `jenis_kelamin`, `foto`, `alamat`, `no_telp`, `id_jabatan`, `username`, `password`, `status`) VALUES
('ST0001', 'Hendri Mahesya', 'Laki-Laki', 'hendri.JPG', 'Jl. Cabe Raya, Tangerang Selatan. Banten', '083877949409', 000001, 'hendri', 'hendri', 'ONLINE'),
('ST0002', 'Hambali Abbas', 'Laki-Laki', 'hambali.jpg', 'Jl. Pemuda, Depok. Jawa Barat', '081807387238', 000002, 'hambali', 'hambali', 'OFFLINE'),
('ST0003', 'Syamsul Riyadi', 'Laki-Laki', 'Syamsul.jpg', 'Jakarta Timur', '0217710670', 000003, 'syamsul', 'syamsul', 'OFFLINE'),
('ST0004', 'Kholifah', 'Perempuan', 'kholifah.jpg', 'Jakarta Timur', '0217710670', 000004, 'kholifah', 'kholifah', 'OFFLINE'),
('ST0005', 'Fathurozak', 'Laki-Laki', 'Fathurozak.png', 'Jakarta Selatan', '0217710670', 000005, 'rozak', 'rozak', 'OFFLINE'),
('ST0006', 'Harist Fadilah', 'Laki-Laki', 'Harist.png', 'Jakarta Selatan', '0217710670', 000006, 'harist', 'harist', 'OFFLINE'),
('ST0007', 'Suhendi', 'Laki-Laki', 'Suhendi.jpg', 'Arab Saudi', '0217710670', 000008, 'suhendi', 'suhendi', 'OFFLINE'),
('ST0008', 'Ridwan Said', 'Laki-Laki', '@Ridwan Said.jpg', 'Arab Saudi', '0217710670', 000008, 'ridwans', 'ridwans', 'OFFLINE'),
('ST0009', 'Ridwan Al Baqi', 'Laki-Laki', '@Ridwan Al Baqi.jpg', 'Arab Saudi', '0217710670', 000008, 'ridwanb', 'ridwanb', 'OFFLINE'),
('ST0010', 'Hanafi', 'Laki-Laki', 'Pak Hanafi.jpg', 'Arab Saudi', '0217710670', 000008, 'hanafi', 'hanafi', 'OFFLINE');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_staf` varchar(6) NOT NULL,
  `video` text NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `id_staf`, `video`, `keterangan`) VALUES
(000001, 'ST0001', '<iframe width="265" height="200" src="https://www.youtube.com/embed/lsmomlWr7HY" frameborder="0" allowfullscreen></iframe>', '<p>Dokumentasi Umroh Damtour</p>');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akomodasi`
--
ALTER TABLE `akomodasi`
  ADD CONSTRAINT `akomodasi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokumen_pelanggan`
--
ALTER TABLE `dokumen_pelanggan`
  ADD CONSTRAINT `dokumen_pelanggan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`id_staf`) REFERENCES `user_damtour` (`id_staf`);

--
-- Constraints for table `itinerari`
--
ALTER TABLE `itinerari`
  ADD CONSTRAINT `itinerari_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keadaan_pelanggan`
--
ALTER TABLE `keadaan_pelanggan`
  ADD CONSTRAINT `keadaan_pelanggan_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran_pelanggan` (`id_pendaftaran`) ON DELETE CASCADE;

--
-- Constraints for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE;

--
-- Constraints for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD CONSTRAINT `konfirmasi_pembayaran_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran_pelanggan` (`id_pendaftaran`) ON DELETE CASCADE;

--
-- Constraints for table `kurs`
--
ALTER TABLE `kurs`
  ADD CONSTRAINT `kurs_ibfk_1` FOREIGN KEY (`id_staf`) REFERENCES `user_damtour` (`id_staf`);

--
-- Constraints for table `mou`
--
ALTER TABLE `mou`
  ADD CONSTRAINT `mou_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran_pelanggan` (`id_pendaftaran`) ON DELETE CASCADE;

--
-- Constraints for table `passport`
--
ALTER TABLE `passport`
  ADD CONSTRAINT `passport_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran_pelanggan` (`id_pendaftaran`) ON DELETE CASCADE;

--
-- Constraints for table `pendaftaran_pelanggan`
--
ALTER TABLE `pendaftaran_pelanggan`
  ADD CONSTRAINT `pendaftaran_pelanggan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE,
  ADD CONSTRAINT `pendaftaran_pelanggan_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE;

--
-- Constraints for table `pendaftaran_perwakilan`
--
ALTER TABLE `pendaftaran_perwakilan`
  ADD CONSTRAINT `pendaftaran_perwakilan_ibfk_1` FOREIGN KEY (`id_perwakilan`) REFERENCES `perwakilan` (`id_perwakilan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_perwakilan_ibfk_2` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_perwakilan` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perlengkapan_keluar`
--
ALTER TABLE `perlengkapan_keluar`
  ADD CONSTRAINT `perlengkapan_keluar_ibfk_1` FOREIGN KEY (`id_perlengkapan`) REFERENCES `perlengkapan` (`id_perlengkapan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perlengkapan_masuk`
--
ALTER TABLE `perlengkapan_masuk`
  ADD CONSTRAINT `perlengkapan_masuk_ibfk_1` FOREIGN KEY (`id_perlengkapan`) REFERENCES `perlengkapan` (`id_perlengkapan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perlengkapan_pelanggan`
--
ALTER TABLE `perlengkapan_pelanggan`
  ADD CONSTRAINT `perlengkapan_pelanggan_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran_pelanggan` (`id_pendaftaran`) ON DELETE CASCADE;

--
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `pertanyaan_ibfk_1` FOREIGN KEY (`id_penanya`) REFERENCES `penanya` (`id_penanya`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perwakilan`
--
ALTER TABLE `perwakilan`
  ADD CONSTRAINT `perwakilan_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_perwakilan` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran_pelanggan` (`id_pendaftaran`) ON DELETE CASCADE;

--
-- Constraints for table `user_damtour`
--
ALTER TABLE `user_damtour`
  ADD CONSTRAINT `user_damtour_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;
