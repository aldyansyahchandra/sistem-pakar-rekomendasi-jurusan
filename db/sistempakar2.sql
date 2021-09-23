-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 08:03 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempakar2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `nama_jurusan` varchar(50) NOT NULL,
  `pernyataan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`nama_jurusan`, `pernyataan`) VALUES
('Teknik Pemesinan', 'Olahraga merupakan suatu hobi (p01)'),
('Teknik Pemesinan', 'Menyukai kegiatan-kegiatan seperti menjahit dan membuat bentuk-bentuk (p02)'),
('Teknik Pemesinan', 'Penting untuk menyentuh benda yang baru ditemukan untuk melengkapi informasi mengenai benda tersebut (p03)'),
('Teknik Pemesinan', 'Tidak dapat duduk diam dalam waktu yang lama (p10)'),
('Teknik Pemesinan', 'Selalu menggunakan gerak tangan atau bahasa tubuh lain ketika berbicara dengan orang lain (p11)'),
('Teknik Pemesinan', 'Pernah mempunyai prestasi yanng cukup menonjol di salah satu atau lebih cabang olahraga (p12)'),
('Teknik Pemesinan', 'Menikmati kegiatan yang menantang bahaya atau pengalaman fisik yang menegangkan (p19)'),
('Teknik Pemesinan', 'Suka pekerjaan yang melibatkan keterampilan tangan (p20)'),
('Teknik Pemesinan', 'Jika sesuatu rusak dan tidak berfungsi, cenderung memisahkan setiap bagian lalu menggabungkannya kembali (p21)'),
('Teknik Pemesinan', 'Harus mempraktikan sesuatu keterampilan yang baru, tidak sekedar membaca atau melihat (p28)'),
('Teknik Pemesinan', 'Gagasan terbaik biasanya muncul ketika jalan-jalan atau joging atau saat terlibat kegiatan fisik lainnya (p29)'),
('Teknik Pemesinan', 'Ikut sekurang-kurangnya satu kegiatan olahraga atau kegiatan fisik secara teratur (p30)'),
('Teknik Pemesinan', 'Senang menggunakan mesin perkakas (p37)'),
('Teknik Pemesinan', 'Tertarik untuk membuat gambar teknik (p38)'),
('Teknik Pemesinan', 'Senang mengoperasikan mesin industri (p39)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Olahraga merupakan suatu hobi (p01)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Menyukai kegiatan-kegiatan seperti menjahit dan membuat bentuk-bentuk (p02)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Penting untuk menyentuh benda yang baru ditemukan untuk melengkapi informasi mengenai benda tersebut (p03)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Tidak dapat duduk diam dalam waktu yang lama (p10)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Selalu menggunakan gerak tangan atau bahasa tubuh lain ketika berbicara dengan orang lain (p11)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Pernah mempunyai prestasi yanng cukup menonjol di salah satu atau lebih cabang olahraga (p12)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Menikmati kegiatan yang menantang bahaya atau pengalaman fisik yang menegangkan (p19)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Suka pekerjaan yang melibatkan keterampilan tangan (p20)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Jika sesuatu rusak dan tidak berfungsi, cenderung memisahkan setiap bagian lalu menggabungkannya kembali (p21)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Harus mempraktikan sesuatu keterampilan yang baru, tidak sekedar membaca atau melihat (p28)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Gagasan terbaik biasanya muncul ketika jalan-jalan atau joging atau saat terlibat kegiatan fisik lainnya (p29)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Ikut sekurang-kurangnya satu kegiatan olahraga atau kegiatan fisik secara teratur (p30)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Senang menggunakan mesin perkakas (p37)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Tertarik untuk membuat gambar teknik (p38)'),
('Teknik Fabrikasi Logam dan Manufaktur', 'Tertarik menggunakan mesin las (p40)'),
('Teknik Kendaraan Ringan', 'Olahraga merupakan suatu hobi (p01)'),
('Teknik Kendaraan Ringan', 'Menyukai kegiatan-kegiatan seperti menjahit dan membuat bentuk-bentuk (p02)'),
('Teknik Kendaraan Ringan', 'Penting untuk menyentuh benda yang baru ditemukan untuk melengkapi informasi mengenai benda tersebut (p03)'),
('Teknik Kendaraan Ringan', 'Tidak dapat duduk diam dalam waktu yang lama (p10)'),
('Teknik Kendaraan Ringan', 'Selalu menggunakan gerak tangan atau bahasa tubuh lain ketika berbicara dengan orang lain (p11)'),
('Teknik Kendaraan Ringan', 'Pernah mempunyai prestasi yanng cukup menonjol di salah satu atau lebih cabang olahraga (p12)'),
('Teknik Kendaraan Ringan', 'Menikmati kegiatan yang menantang bahaya atau pengalaman fisik yang menegangkan (p19)'),
('Teknik Kendaraan Ringan', 'Suka pekerjaan yang melibatkan keterampilan tangan (p20)'),
('Teknik Kendaraan Ringan', 'Jika sesuatu rusak dan tidak berfungsi, cenderung memisahkan setiap bagian lalu menggabungkannya kembali (p21)'),
('Teknik Kendaraan Ringan', 'Senang memperbaiki kendaraan (p41)'),
('Teknik Kendaraan Ringan', 'Bercita-cita menjadi teknisi kendaraan (p42)'),
('Teknik Kendaraan Ringan', 'Hobi dalam bidang otomotif (p43)'),
('Multimedia', 'Lebih memilih peta daripada petunjuk tertulis dalam mencari sebuah alamat (p04)'),
('Multimedia', 'Gemar dan mampu mengerjakan teka-teki menyusun potongan gambar, labirin dan teka-teki visual lainnya (p05)'),
('Multimedia', 'Hobi dalam bidang fotografi (p06)'),
('Multimedia', 'Senang menggambar dan menciptakan sesuatu (p13)'),
('Multimedia', 'Menyukai pelajaran geografi daripada matematika (p14)'),
('Multimedia', 'Senang membuat coretan-coretan di kertas (p15)'),
('Multimedia', 'Ketika membaca majalah, lebih suka melihat gambar-gambarnya daripada membaca teksnya (p22)'),
('Multimedia', 'Mahir membangun konstruksi tiga dimensi seperti lego (p23)'),
('Multimedia', 'Lebih mudah belajar dengan gambar daripada dengan teks (p24)'),
('Multimedia', 'Menyukai pelajaran seni rupa (p31)'),
('Multimedia', 'Menata ulang ruang adalah hal menyenangkan (p32)'),
('Multimedia', 'Dapat dengan mudah mambayangkan bagaimana penampakan suatu benda dilihat dari berbagai sisi (p33)'),
('Multimedia', 'Senang mengedit audio dan video (p44)'),
('Multimedia', 'Senang membuat animasi 2D & 3D (p45)'),
('Multimedia', 'Tertarik dengan bidang desain, seperti web desain ataupun desain grafis (p46)'),
('Multimedia', 'Tertarik dengan bidang media interaktif (p47)'),
('Desain Pemodelan dan Informasi Bangunan', 'Lebih memilih peta daripada petunjuk tertulis dalam mencari sebuah alamat (p04)'),
('Desain Pemodelan dan Informasi Bangunan', 'Gemar dan mampu mengerjakan teka-teki menyusun potongan gambar, labirin dan teka-teki visual lainnya (p05)'),
('Desain Pemodelan dan Informasi Bangunan', 'Hobi dalam bidang fotografi (p06)'),
('Desain Pemodelan dan Informasi Bangunan', 'Senang menggambar dan menciptakan sesuatu (p13)'),
('Desain Pemodelan dan Informasi Bangunan', 'Menyukai pelajaran geografi daripada matematika (p14)'),
('Desain Pemodelan dan Informasi Bangunan', 'Senang membuat coretan-coretan di kertas (p15)'),
('Desain Pemodelan dan Informasi Bangunan', 'Ketika membaca majalah, lebih suka melihat gambar-gambarnya daripada membaca teksnya (p22)'),
('Desain Pemodelan dan Informasi Bangunan', 'Mahir membangun konstruksi tiga dimensi seperti lego (p23)'),
('Desain Pemodelan dan Informasi Bangunan', 'Lebih mudah belajar dengan gambar daripada dengan teks (p24)'),
('Desain Pemodelan dan Informasi Bangunan', 'Menyukai pelajaran seni rupa (p31)'),
('Desain Pemodelan dan Informasi Bangunan', 'Menata ulang ruang adalah hal menyenangkan (p32)'),
('Desain Pemodelan dan Informasi Bangunan', 'Dapat dengan mudah mambayangkan bagaimana penampakan suatu benda dilihat dari berbagai sisi (p33)'),
('Desain Pemodelan dan Informasi Bangunan', 'Senang menyusun anggaran biaya (p48)'),
('Desain Pemodelan dan Informasi Bangunan', 'Tertarik dengan bidang arsitektur bangunan (p49)'),
('Desain Pemodelan dan Informasi Bangunan', 'Senang mendekor interior gedung (p50)'),
('Desain Pemodelan dan Informasi Bangunan', 'Senang merancang atau menggambar bangunan (p51)'),
('Bisnis Kontruksi Dan Properti', 'Lebih memilih peta daripada petunjuk tertulis dalam mencari sebuah alamat (p04)'),
('Bisnis Kontruksi Dan Properti', 'Gemar dan mampu mengerjakan teka-teki menyusun potongan gambar, labirin dan teka-teki visual lainnya (p05)'),
('Bisnis Kontruksi Dan Properti', 'Hobi dalam bidang fotografi (p06)'),
('Bisnis Kontruksi Dan Properti', 'Senang menggambar dan menciptakan sesuatu (p13)'),
('Bisnis Kontruksi Dan Properti', 'Menyukai pelajaran geografi daripada matematika (p14)'),
('Bisnis Kontruksi Dan Properti', 'Senang membuat coretan-coretan di kertas (p15)'),
('Bisnis Kontruksi Dan Properti', 'Ketika membaca majalah, lebih suka melihat gambar-gambarnya daripada membaca teksnya (p22)'),
('Bisnis Kontruksi Dan Properti', 'Mahir membangun konstruksi tiga dimensi seperti lego (p23)'),
('Bisnis Kontruksi Dan Properti', 'Lebih mudah belajar dengan gambar daripada dengan teks (p24)'),
('Bisnis Kontruksi Dan Properti', 'Menyukai pelajaran seni rupa (p31)'),
('Bisnis Kontruksi Dan Properti', 'Menata ulang ruang adalah hal menyenangkan (p32)'),
('Bisnis Kontruksi Dan Properti', 'Dapat dengan mudah mambayangkan bagaimana penampakan suatu benda dilihat dari berbagai sisi (p33)'),
('Bisnis Kontruksi Dan Properti', 'Senang menyusun anggaran biaya (p48)'),
('Bisnis Kontruksi Dan Properti', 'Tertarik dengan kontruksi bangunan (p52)'),
('Bisnis Kontruksi Dan Properti', 'Senang merancang atau menggambar kontruksi bangunan (p53)'),
('Rekayasa Perangkat Lunak', 'Sangat menyukai pelajaran matematika (p07)'),
('Rekayasa Perangkat Lunak', 'Menyukai permainan yang menggunakan logika, seperti teka-teki angka (p08)'),
('Rekayasa Perangkat Lunak', 'Dapat memecahkan soal-soal hitungan (p09)'),
('Rekayasa Perangkat Lunak', 'Jika harus mengingat sesuatu, cenderung menempatkan setiap kejadian dalam urutan yang logis (p16)'),
('Rekayasa Perangkat Lunak', 'Senang mencari tahu bagaimana cara kerja setiap benda (p17)'),
('Rekayasa Perangkat Lunak', 'Menyukai komputer dan berbagai permainan angka-angka (p18)'),
('Rekayasa Perangkat Lunak', 'Menyukai permainan catur, sudoku, atau monopoli (p25)'),
('Rekayasa Perangkat Lunak', 'Dapat menghitung angka di luar kepala dengan mudah (p26)'),
('Rekayasa Perangkat Lunak', 'Jika sesuatu rusak dan tidak berfungsi, akan melihat bagian-bagiannya dan mencari tahu bagaimana cara kerjanya (p27)'),
('Rekayasa Perangkat Lunak', 'Suka berpikir melalui masalah dengan hati-hati, mempertimbangkan segala konsekuensinya (p34)'),
('Rekayasa Perangkat Lunak', 'Senang menonton film atau membaca buku yang melibatkan berfikir logis seperti buku / film detektif (p35)'),
('Rekayasa Perangkat Lunak', 'Senang membuat eksperimen sederhana (p36)'),
('Rekayasa Perangkat Lunak', 'Tertarik dengan pemograman komputer (p54)'),
('Rekayasa Perangkat Lunak', 'Tertarik membuat web, aplikasi desktop, dan aplikasi android (p55)'),
('Rekayasa Perangkat Lunak', 'Hobi mendalami pengetahuan dasar komputer (p56)'),
('Teknik Komputer dan Jaringan', 'Sangat menyukai pelajaran matematika (p07)'),
('Teknik Komputer dan Jaringan', 'Menyukai permainan yang menggunakan logika, seperti teka-teki angka (p08)'),
('Teknik Komputer dan Jaringan', 'Dapat memecahkan soal-soal hitungan (p09)'),
('Teknik Komputer dan Jaringan', 'Jika harus mengingat sesuatu, cenderung menempatkan setiap kejadian dalam urutan yang logis (p16)'),
('Teknik Komputer dan Jaringan', 'Senang mencari tahu bagaimana cara kerja setiap benda (p17)'),
('Teknik Komputer dan Jaringan', 'Menyukai komputer dan berbagai permainan angka-angka (p18)'),
('Teknik Komputer dan Jaringan', 'Menyukai permainan catur, sudoku, atau monopoli (p25)'),
('Teknik Komputer dan Jaringan', 'Dapat menghitung angka di luar kepala dengan mudah (p26)'),
('Teknik Komputer dan Jaringan', 'Jika sesuatu rusak dan tidak berfungsi, akan melihat bagian-bagiannya dan mencari tahu bagaimana cara kerjanya (p27)'),
('Teknik Komputer dan Jaringan', 'Suka berpikir melalui masalah dengan hati-hati, mempertimbangkan segala konsekuensinya (p34)'),
('Teknik Komputer dan Jaringan', 'Senang menonton film atau membaca buku yang melibatkan berfikir logis seperti buku / film detektif (p35)'),
('Teknik Komputer dan Jaringan', 'Senang membuat eksperimen sederhana (p36)'),
('Teknik Komputer dan Jaringan', 'Senang bekerja dengan perangkat jaringan (p57)'),
('Teknik Komputer dan Jaringan', 'Senang menginstall software sistem operasi dan aplikasi (p58)'),
('Teknik Komputer dan Jaringan', 'Tertarik mendapatkan sertifikasi CISCO dan Mikrotik (p59)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Sangat menyukai pelajaran matematika (p07)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Menyukai permainan yang menggunakan logika, seperti teka-teki angka (p08)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Dapat memecahkan soal-soal hitungan (p09)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Jika harus mengingat sesuatu, cenderung menempatkan setiap kejadian dalam urutan yang logis (p16)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Senang mencari tahu bagaimana cara kerja setiap benda (p17)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Menyukai komputer dan berbagai permainan angka-angka (p18)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Menyukai permainan catur, sudoku, atau monopoli (p25)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Dapat menghitung angka di luar kepala dengan mudah (p26)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Jika sesuatu rusak dan tidak berfungsi, akan melihat bagian-bagiannya dan mencari tahu bagaimana cara kerjanya (p27)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Suka berpikir melalui masalah dengan hati-hati, mempertimbangkan segala konsekuensinya (p34)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Senang menonton film atau membaca buku yang melibatkan berfikir logis seperti buku / film detektif (p35)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Senang membuat eksperimen sederhana (p36)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Tertarik dengan pemograman komputer (p54)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Tertarik dengan cloud computing (p60)'),
('Sistem Informasi Jaringan dan Aplikasi', 'Tertarik dengan bidang Internet of Things (p61)'),
('Teknik Otomasi Industri', 'Sangat menyukai pelajaran matematika (p07)'),
('Teknik Otomasi Industri', 'Menyukai permainan yang menggunakan logika, seperti teka-teki angka (p08)'),
('Teknik Otomasi Industri', 'Dapat memecahkan soal-soal hitungan (p09)'),
('Teknik Otomasi Industri', 'Jika harus mengingat sesuatu, cenderung menempatkan setiap kejadian dalam urutan yang logis (p16)'),
('Teknik Otomasi Industri', 'Senang mencari tahu bagaimana cara kerja setiap benda (p17)'),
('Teknik Otomasi Industri', 'Menyukai komputer dan berbagai permainan angka-angka (p18)'),
('Teknik Otomasi Industri', 'Menyukai permainan catur, sudoku, atau monopoli (p25)'),
('Teknik Otomasi Industri', 'Dapat menghitung angka di luar kepala dengan mudah (p26)'),
('Teknik Otomasi Industri', 'Jika sesuatu rusak dan tidak berfungsi, akan melihat bagian-bagiannya dan mencari tahu bagaimana cara kerjanya (p27)'),
('Teknik Otomasi Industri', 'Suka berpikir melalui masalah dengan hati-hati, mempertimbangkan segala konsekuensinya (p34)'),
('Teknik Otomasi Industri', 'Senang menonton film atau membaca buku yang melibatkan berfikir logis seperti buku / film detektif (p35)'),
('Teknik Otomasi Industri', 'Senang membuat eksperimen sederhana (p36)'),
('Teknik Otomasi Industri', 'Tertarik dengan pemograman PLC dan Arduino (p62)'),
('Teknik Otomasi Industri', 'Tertarik dengan bidang elektronika dan kelistrikan (p63)'),
('Teknik Otomasi Industri', 'Tertarik dengan pelajaran robotic (p64)'),
('Teknik Otomasi Industri', 'Tertarik dengan pelajaran Pneumatic (p65)');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` varchar(20) NOT NULL,
  `nama_jurusan` varchar(75) NOT NULL,
  `masa_studi` varchar(20) NOT NULL,
  `jenis_kecerdasan` varchar(50) NOT NULL,
  `detail_kompetensi` varchar(1000) NOT NULL,
  `jenjang_karir` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `masa_studi`, `jenis_kecerdasan`, `detail_kompetensi`, `jenjang_karir`) VALUES
('J01', 'Teknik Pemesinan', '3 Tahun', 'Kecerdasan Kinestetik', 'Materi yang Dipelajari:\r\n1. Gambar Teknik Mesin\r\n2. Pekerjaan Dasar Teknik Mesin\r\n2. Dasar Perancangan Teknik Mesin\r\n4. Gambar Teknik Manufaktur (CAD)\r\n5. Teknik Pemesinan Bubut\r\n6. Teknik Pemesinan Frais\r\n7. Teknik Pemesinan Gerinda\r\n8. Teknik Pemesinan NC/CNC dan CAM\r\n9. Produk Kreatif dan Kewirausahaan', 'Bekerja di bidang:\r\n1. Operator mesin bubut, mesin frais, mesin gerinda, mesin CNC\r\n2. Drafter Teknik Mesin \r\n3. Quality Control\r\n4. Wirausahawan di bidang Machining'),
('J02', 'Teknik Fabrikasi Logam dan Manufaktur', '4 Tahun', 'Kecerdasan Kinestetik', 'Materi yang dipelajari:\r\n1. Berbagai jenis pengelasan (SMAW,TIG,MIG,Las Oxy-Acetylene\r\n2. Pengoperasian mesin bubut, fraish, bor & gerinda konvensional\r\n3. Pemogranan serta pengoperasian mesin CNC bubut & fraish\r\n4. Gambar manufaktur-fabrikasi logam (Autocad,Inventor)\r\n5. CAD CAM (MASTERCAM)\r\n6. Dll.\r\n', 'Pekerjaan:\r\n1. Operator mesin berbagai mesin las\r\n2. Operator mesin bubut, bor, Fraish konvensional\r\n3. Operator mesin CNC bubut & fraish\r\n4. Drafter manufaktur - fabrikasi logam\r\n\r\nDapat melanjutkan kuliah jurusan:\r\n1. Teknik Mesin\r\n2. Teknik Industri'),
('J03', 'Teknik Kendaraan Ringan', '3 Tahun', 'Kecerdasan Kinestetik', 'Materi yang dipelajari:\r\n1. Melakukan servis berkala/tune up kendaraan Konvensional dan Injeksi\r\n2. Merangkai kelistrikan bodi dan engine\r\n3. Melakukan servis sepeda motor\r\n4. Melakukan overhaul engine\r\n5. Mendiagnosa kerusakan dan melakukan perbaikan rangkaian kelistrikan bodi dan engine\r\n6. Melakukan sevis dan perbaikan system rem dan kopling\r\n7. Melakukan servis berkala mobil\r\n8. Melakukan negoisasi penawaran servis kendaraan\r\n', 'Pekerjaan:\r\n1. Mekanik\r\n2. Karyawan Showroom/Dealer\r\n3. Operator Alat Berat\r\n\r\nDapat melanjutkan kuliah jurusan:\r\n1. Teknik Otomotif\r\n2. Teknik Mesin\r\n3. Teknik Elektro\r\n4. Teknik Alat Berat'),
('J04', 'Multimedia', '3 Tahun', 'Kecerdasan Spasial', 'Materi yang dipelajari:\r\n1. Design Gratis\r\n2. Fotografi\r\n3. Animasi 2D & 3D\r\n4. Editing Video & Audio\r\n5. Media Interaktif\r\n6. Games\r\n7. Pembuatan advertising\r\n8. Web design \r\n', 'Pekerjaan:\r\n1. Grafis Designer\r\n2. Illustrator 2D\r\n3. Web Designer\r\n4. Photografer\r\n5. Animator 2D/3D\r\n6. Video Editor'),
('J05', 'Desain Pemodelan dan Informasi Bangunan', '3 Tahun', 'Kecerdasan Spasial', 'Materi yang dipelajari:\r\n1. Dasar konstruksi Bangunan dan Pengukuran\r\n2. Gambar teknik\r\n3. Mekanika Teknik\r\n4. Aplikasi Perangkat lunak dan Perancangan Interior Gedung (AutoCad,Skecthup,Vray,Lumion dan Revit)\r\n5. Menggambar Konstruksi Jalan dan Jembatan\r\n6. Kontruktsi Utilitas Gedung\r\n7. Estimasi Biaya Kontruksi\r\n8. Produk Kreatif dan Kewirausahaan', '1. Bekerja di Bidang Jasa Kontruksi (Drafter,Quantity Surveyor, Pengawas, dll)\r\n\r\n2. Dapat Melanjutkan Kuliah di Jurusan:\r\n- Teknik Arsitektur\r\n- Teknik Sipil\r\n- Desain Interior\r\n- Kontruksi Gedung\r\n- Menejemen Kontruksi\r\n- Penataan Wilayah Kota (PWK) '),
('J06', 'Bisnis Kontruksi Dan Properti', '3 Tahun', 'Kecerdasan Spasial', 'Materi yang dipelajari:\r\n1. Perencanaan Bisnis konstruksi dan Properti\r\n2. Pelaksanaan dan Pengawasan\r\nKonstruksi dan Properti\r\n3. Estimasi Biaya Kontruksi dan Properti\r\n4. Pengololaan Bisnis Konstruksi dan Properti\r\n5. Produk Kreatif dan Kewirausahaan', 'Pekerjaan:\r\n1. Konsultan Teknik Sipil\r\n2. Kontraktor\r\n3. Perusahaan Perumahan'),
('J07', 'Rekayasa Perangkat Lunak', '3 Tahun', 'Kecerdasan Logical', 'Materi yang dipelajari:\r\n1. Algoritma dan Pemrograman Dasar\r\n2. Pemrograman Web dan Android\r\n3. Pemrograman Berorientasi Objek (Java)\r\n4. Pemrograman Desktop\r\n5. Analis dan Admnistrasi Basis Data', 'Pekerjaan:\r\n1. Software Developer\r\n2. IT Support\r\n3. Analys System\r\n4. IT Project Manager\r\n5. IT Startup\r\n6. IT Entrepreneur\r\n\r\nDapat melanjutkan kuliah jurusan:\r\n1. Ilmu Komputer\r\n2. Teknik Informatika\r\n3. Sistem Informasi\r\n4. Teknik Komputer'),
('J08', 'Teknik Komputer dan Jaringan', '3 Tahun', 'Kecerdasan Logical', 'Materi yang dipelajari:\r\n1. Sistem Komputer\r\n2. Pemograman Dasar\r\n3. Perakitan komputer\r\n4. Topologi, Pengkabelan, Pengalamatan, Konfigurasi Jaringan\r\n5. Networking, Routing , dan Keamanan Jaringan\r\n6. Instalasi dan aplikasi Server', 'Pekerjaan\r\n1. Teknisi Network Operations Center\r\n2. Teknisi Internet Service Provider\r\n3. Wirausaha di IT\r\n\r\nDapat melanjutkan kuliah di jurusan:\r\n1. Teknik Komputer\r\n2. Teknik Informatika\r\n3. Manajemen Informatika\r\n4. Ilmu Telekomunikasi'),
('J09', 'Sistem Informasi Jaringan dan Aplikasi', '4 Tahun', 'Kecerdasan Logical', 'Materi yang dipelajari:\r\n1. Dasar & Troubleshooting Komputer\r\n2. Networking\r\n3. Cloud Computing\r\n4. Internet of Things (IOT)\r\n5. Sistem keamanan jaringan\r\n6. Database dalam Jaringan\r\n7. Basic Desain Grafis\r\n8. Basic Programming', 'Dapat lanjut bekerja diseluruh perusahaan IT atau yang mengembangkan\r\n\r\nDapat melanjutkan kuliah jurusan:\r\n1. Sistem Informasi\r\n2. Teknik Informatika\r\n4. Teknik Komputer'),
('J10', 'Teknik Otomasi Industri', '4 Tahun', 'Kecerdasan Logical', 'Materi Yang Dipelajari:\r\n1. Dasar-Dasar Kelistrikan Dan Elektronika\r\n2. Gambar Teknik Listrik Dan Elektronika\r\n3. Insatalasi Listrik Rumah Gedung Dan Industri\r\n4. Instalasi Sensor Dan Aktuator\r\n5. Instalasi Motor Listrik\r\n6. Instalasi Inverter Dan Servo\r\n7. Instalasi Pneumatik Dan Elektropneumatik\r\n8. Pemrograman Mikrokontroler (Arduino)\r\n9. Pemrograman Plc (Programmable Logic Controller)\r\n10. Pemrograman Hmi (Human Machine Interface)\r\n11. Produk Kreatif Dan Kewirausahaan', 'Pekerjaan di bidang:\r\n1. Pemasangan instalasi listrik rumah, gedung dan industri\r\n2. Programmer Mikrokontroller (Arduino). PLC, HMI\r\n3. Pemasangan instalasi motor listrik, inverter, dan servo\r\n4. Pemasangan instalasi Pneumatik dan Elektropneumatik\r\n5. Instalasi dan setting robot industri\r\n\r\nDapat melanjutkan kuliah di jurusan:\r\n1. Teknik Otomasi Listrik Industri\r\n2. Teknik Mekatronika\r\n3. Instrumentasi dan Kontrol Industri\r\n4. Teknik Elektro / Arus Kuat\r\n5. Teknik Elektronika / Arus Lemah');

-- --------------------------------------------------------

--
-- Table structure for table `pernyataan`
--

CREATE TABLE `pernyataan` (
  `id_pernyataan` varchar(10) NOT NULL,
  `pernyataan` varchar(1000) NOT NULL,
  `jenis_kecerdasan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pernyataan`
--

INSERT INTO `pernyataan` (`id_pernyataan`, `pernyataan`, `jenis_kecerdasan`) VALUES
('P01', 'Olahraga merupakan suatu hobi (p01)', 'Kecerdasan Kinestetik'),
('P02', 'Menyukai kegiatan-kegiatan seperti menjahit dan membuat bentuk-bentuk (p02)', 'Kecerdasan Kinestetik'),
('P03', 'Penting untuk menyentuh benda yang baru ditemukan untuk melengkapi informasi mengenai benda tersebut (p03)', 'Kecerdasan Kinestetik'),
('P04', 'Lebih memilih peta daripada petunjuk tertulis dalam mencari sebuah alamat (p04)', 'Kecerdasan Spasial'),
('P05', 'Gemar dan mampu mengerjakan teka-teki menyusun potongan gambar, labirin dan teka-teki visual lainnya (p05)', 'Kecerdasan Spasial'),
('P06', 'Hobi dalam bidang fotografi (p06)', 'Kecerdasan Spasial'),
('P07', 'Sangat menyukai pelajaran matematika (p07)', 'Kecerdasan Logical'),
('P08', 'Menyukai permainan yang menggunakan logika, seperti teka-teki angka (p08)', 'Kecerdasan Logical'),
('P09', 'Dapat memecahkan soal-soal hitungan (p09)', 'Kecerdasan Logical'),
('P10', 'Tidak dapat duduk diam dalam waktu yang lama (p10)', 'Kecerdasan Kinestetik'),
('P11', 'Selalu menggunakan gerak tangan atau bahasa tubuh lain ketika berbicara dengan orang lain (p11)', 'Kecerdasan Kinestetik'),
('P12', 'Pernah mempunyai prestasi yanng cukup menonjol di salah satu atau lebih cabang olahraga (p12)', 'Kecerdasan Kinestetik'),
('P13', 'Senang menggambar dan menciptakan sesuatu (p13)', 'Kecerdasan Spasial'),
('P14', 'Menyukai pelajaran geografi daripada matematika (p14)', 'Kecerdasan Spasial'),
('P15', 'Senang membuat coretan-coretan di kertas (p15)', 'Kecerdasan Spasial'),
('P16', 'Jika harus mengingat sesuatu, cenderung menempatkan setiap kejadian dalam urutan yang logis (p16)', 'Kecerdasan Logical'),
('P17', 'Senang mencari tahu bagaimana cara kerja setiap benda (p17)', 'Kecerdasan Logical'),
('P18', 'Menyukai komputer dan berbagai permainan angka-angka (p18)', 'Kecerdasan Logical'),
('P19', 'Menikmati kegiatan yang menantang bahaya atau pengalaman fisik yang menegangkan (p19)', 'Kecerdasan Kinestetik'),
('P20', 'Suka pekerjaan yang melibatkan keterampilan tangan (p20)', 'Kecerdasan Kinestetik'),
('P21', 'Jika sesuatu rusak dan tidak berfungsi, cenderung memisahkan setiap bagian lalu menggabungkannya kembali (p21)', 'Kecerdasan Kinestetik'),
('P22', 'Ketika membaca majalah, lebih suka melihat gambar-gambarnya daripada membaca teksnya (p22)', 'Kecerdasan Spasial'),
('P23', 'Mahir membangun konstruksi tiga dimensi seperti lego (p23)', 'Kecerdasan Spasial'),
('P24', 'Lebih mudah belajar dengan gambar daripada dengan teks (p24)', 'Kecerdasan Spasial'),
('P25', 'Menyukai permainan catur, sudoku, atau monopoli (p25)', 'Kecerdasan Logical'),
('P26', 'Dapat menghitung angka di luar kepala dengan mudah (p26)', 'Kecerdasan Logical'),
('P27', 'Jika sesuatu rusak dan tidak berfungsi, akan melihat bagian-bagiannya dan mencari tahu bagaimana cara kerjanya (p27)', 'Kecerdasan Logical'),
('P28', 'Harus mempraktikan sesuatu keterampilan yang baru, tidak sekedar membaca atau melihat (p28)', 'Kecerdasan Kinestetik'),
('P29', 'Gagasan terbaik biasanya muncul ketika jalan-jalan atau joging atau saat terlibat kegiatan fisik lainnya (p29)', 'Kecerdasan Kinestetik'),
('P30', 'Ikut sekurang-kurangnya satu kegiatan olahraga atau kegiatan fisik secara teratur (p30)', 'Kecerdasan Kinestetik'),
('P31', 'Menyukai pelajaran seni rupa (p31)', 'Kecerdasan Spasial'),
('P32', 'Menata ulang ruang adalah hal menyenangkan (p32)', 'Kecerdasan Spasial'),
('P33', 'Dapat dengan mudah mambayangkan bagaimana penampakan suatu benda dilihat dari berbagai sisi (p33)', 'Kecerdasan Spasial'),
('P34', 'Suka berpikir melalui masalah dengan hati-hati, mempertimbangkan segala konsekuensinya (p34)', 'Kecerdasan Logical'),
('P35', 'Senang menonton film atau membaca buku yang melibatkan berfikir logis seperti buku / film detektif (p35)', 'Kecerdasan Logical'),
('P36', 'Senang membuat eksperimen sederhana (p36)', 'Kecerdasan Logical'),
('P37', 'Senang menggunakan mesin perkakas (p37)', 'Kecerdasan Kinestetik'),
('P38', 'Tertarik untuk membuat gambar teknik (p38)', 'Kecerdasan Kinestetik'),
('P39', 'Senang mengoperasikan mesin industri (p39)', 'Kecerdasan Kinestetik'),
('P40', 'Tertarik menggunakan mesin las (p40)', 'Kecerdasan Kinestetik'),
('P41', 'Senang memperbaiki kendaraan (p41)', 'Kecerdasan Kinestetik'),
('P42', 'Bercita-cita menjadi teknisi kendaraan (p42)', 'Kecerdasan Kinestetik'),
('P43', 'Hobi dalam bidang otomotif (p43)', 'Kecerdasan Kinestetik'),
('P44', 'Senang mengedit audio dan video (p44)', 'Kecerdasan Spasial'),
('P45', 'Senang membuat animasi 2D & 3D (p45)', 'Kecerdasan Spasial'),
('P46', 'Tertarik dengan bidang desain, seperti web desain ataupun desain grafis (p46)', 'Kecerdasan Spasial'),
('P47', 'Tertarik dengan bidang media interaktif (p47)', 'Kecerdasan Spasial'),
('P48', 'Senang menyusun anggaran biaya (p48)', 'Kecerdasan Spasial'),
('P49', 'Tertarik dengan bidang arsitektur bangunan (p49)', 'Kecerdasan Spasial'),
('P50', 'Senang mendekor interior gedung (p50)', 'Kecerdasan Spasial'),
('P51', 'Senang merancang atau menggambar bangunan (p51)', 'Kecerdasan Spasial'),
('P52', 'Tertarik dengan kontruksi bangunan (p52)', 'Kecerdasan Spasial'),
('P53', 'Senang merancang atau menggambar kontruksi bangunan (p53)', 'Kecerdasan Spasial'),
('P54', 'Tertarik dengan pemograman komputer (p54)', 'Kecerdasan Logical'),
('P55', 'Tertarik membuat web, aplikasi desktop, dan aplikasi android (p55)', 'Kecerdasan Logical'),
('P56', 'Hobi mendalami pengetahuan dasar komputer (p56)', 'Kecerdasan Logical'),
('P57', 'Senang bekerja dengan perangkat jaringan (p57)', 'Kecerdasan Logical'),
('P58', 'Senang menginstall software sistem operasi dan aplikasi (p58)', 'Kecerdasan Logical'),
('P59', 'Tertarik mendapatkan sertifikasi CISCO dan Mikrotik (p59)', 'Kecerdasan Logical'),
('P60', 'Tertarik dengan cloud computing (p60)', 'Kecerdasan Logical'),
('P61', 'Tertarik dengan bidang Internet of Things (p61)', 'Kecerdasan Logical'),
('P62', 'Tertarik dengan pemograman PLC dan Arduino (p62)', 'Kecerdasan Logical'),
('P63', 'Tertarik dengan bidang elektronika dan kelistrikan (p63)', 'Kecerdasan Logical'),
('P64', 'Tertarik dengan pelajaran robotic (p64)', 'Kecerdasan Logical'),
('P65', 'Tertarik dengan pelajaran Pneumatic (p65)', 'Kecerdasan Logical');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kecerdasan`
--

CREATE TABLE `tipe_kecerdasan` (
  `id_kecerdasan` varchar(10) NOT NULL,
  `jenis_kecerdasan` varchar(50) NOT NULL,
  `penjelasan` varchar(1000) NOT NULL,
  `rekomendasi_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_kecerdasan`
--

INSERT INTO `tipe_kecerdasan` (`id_kecerdasan`, `jenis_kecerdasan`, `penjelasan`, `rekomendasi_jurusan`) VALUES
('K01', 'Kecerdasan Kinestetik', 'Kecerdasan ini ditandai dengan kemampuan mengontrol gerak tubuh dan kemahiran mengelola objek melalui refleks motorik halus dan kasarnya kecerdasan ini berkembang dan menjadi sebuah keterampilan fisik.', '1. Teknik Pemesinan\r\n2. Teknik Fabrikasi Logam Dan Manufakturing\r\n3. Teknik Kendaraan Ringan'),
('K02', 'Kecerdasan Logical', 'Kecerdasan ini ditandai dengan kepekaan pada pola-pola logis dan memiliki kemampuan mencerna pola-pola tersebut, termasuk juga numerik serta mampu mengolah alur pemikiran yang panjang.', '1. Rekayasa Perangkat Lunak\r\n2. Teknik Komputer dan Jaringan\r\n3. Sistem Informasi Jaringan dan Aplikasi\r\n4. Teknik Otomasi Industri'),
('K03', 'Kecerdasan Spasial', 'Kecerdasan ini ditandai dengan kepekaan mempersepsi dunia spasial-visual secara\r\nakurat dan mentransformasi persepsi awal.', '1. Multimedia\r\n2. Desain Pemodelan Ilmu Bangunan\r\n3. Bisnis Kontruksi dan Properti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `pernyataan`
--
ALTER TABLE `pernyataan`
  ADD PRIMARY KEY (`id_pernyataan`);

--
-- Indexes for table `tipe_kecerdasan`
--
ALTER TABLE `tipe_kecerdasan`
  ADD PRIMARY KEY (`id_kecerdasan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
