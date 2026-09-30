-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for iipul
CREATE DATABASE IF NOT EXISTS `iipul` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `iipul`;

-- Dumping structure for table iipul.beritas
CREATE TABLE IF NOT EXISTS `beritas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuplikan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.beritas: ~0 rows (approximately)
INSERT INTO `beritas` (`id`, `judul`, `gambar`, `cuplikan`, `isi`, `created_at`, `updated_at`) VALUES
	(1, 'HIMAFORSTA dan Departemen Informasi dan Perpustakaan UNAIR Sukses Gelar LISTEN 2026, Bahas Masa Depan Perpustakaan di Era AI', '1790760897.png', 'Himpunan Mahasiswa Ilmu Informasi dan Perpustakaan (HIMAFORSTA) bersama Departemen Informasi dan Perpustakaan Universitas Airlangga (UNAIR) sukses menyelenggarakan Library and Information Science National Seminar (LISTEN) 2026 pada Kamis (17/9). Bertempat di Aula Soetandyo, Lantai 3, Gedung C FISIP UNAIR, LISTEN 2026 mengangkat tema “Smart Transformation: Harmoni Peran Human AI dalam Masa Depan Perpustakaan”.', 'Himpunan Mahasiswa Ilmu Informasi dan Perpustakaan (HIMAFORSTA) bersama Departemen Informasi dan Perpustakaan Universitas Airlangga (UNAIR) sukses menyelenggarakan Library and Information Science National Seminar (LISTEN) 2026 pada Kamis (17/9). Bertempat di Aula Soetandyo, Lantai 3, Gedung C FISIP UNAIR, LISTEN 2026 mengangkat tema “Smart Transformation: Harmoni Peran Human AI dalam Masa Depan Perpustakaan”.\r\n\r\nSeminar LISTEN 2026 menjadi ruang pembelajaran dan pertukaran gagasan mengenai perkembangan Artificial Intelligence (AI) dalam dunia perpustakaan dan ilmu informasi. Melalui kegiatan ini, peserta diajak memahami bagaimana pemanfaatan teknologi AI dapat berjalan berdampingan dengan peran manusia dalam menghadapi perubahan dan kebutuhan layanan perpustakaan di era digital.\r\n\r\nRangkaian kegiatan LISTEN 2026 diawali dengan pembukaan, menyanyikan lagu Indonesia Raya dan Hymne Airlangga, serta pembacaan doa. Acara kemudian dilanjutkan dengan sambutan dari Ketua HIMAFORSTA periode 2026/2027, Isna Nuzula, dan Ketua Departemen Informasi dan Perpustakaan, Dr. Fitri Mutia, A.KS., M.Si.\r\n\r\nMemasuki sesi utama, LISTEN 2026 menghadirkan tiga narasumber dengan latar belakang dan perspektif yang saling melengkapi. Endang Gunarti, Dra., M.I.Kom., dosen Departemen Informasi dan Perpustakaan FISIP UNAIR, membawakan materi mengenai Manajemen Perpustakaan Ramah AI.\r\n\r\nSelanjutnya, Imam Yuadi, S.Sos., M.MT., Ph.D. membahas Integrasi Sistem AI, IoT, dan Otomasi Layanan Informasi. Sementara itu, Dwi Permana, M.SIP., Kepala Perpustakaan Xin Zhong School, membagikan pengalaman praktis mengenai kolaborasi Human-AI dalam layanan perpustakaan.\r\n\r\nKetiga materi tersebut disusun secara berkesinambungan, mulai dari kebijakan dan manajemen perpustakaan, infrastruktur teknis, hingga praktik penerapan AI di lapangan. Alur tersebut memberikan gambaran mengenai berbagai aspek yang perlu diperhatikan dalam membangun transformasi perpustakaan berbasis teknologi.\r\n\r\nPembahasan dalam seminar mencakup sejumlah hal penting, mulai dari kebutuhan akan regulasi yang adaptif, kesiapan sumber daya manusia, tata kelola data, infrastruktur teknologi, hingga penerapan AI dalam layanan perpustakaan. Setelah pemaparan materi, peserta juga mendapatkan kesempatan untuk berdiskusi langsung melalui sesi tanya jawab bersama ketiga narasumber.\r\n\r\nMerangkum pembahasan tersebut, Arya Wijaya Pramodha Wardhana, S.IIP., M.Hum., selaku moderator LISTEN 2026, menekankan pentingnya hubungan yang saling melengkapi antara manusia dan AI dalam membangun perpustakaan masa depan. “AI adalah alat, manusia adalah pelaku, dan harmoni di antara keduanya adalah kunci menuju masa depan perpustakaan yang lebih cerdas, namun tetap manusiawi,” ujar Arya.\r\n\r\nTidak hanya menghadirkan seminar, LISTEN 2026 juga memperkenalkan agenda baru pada penyelenggaraan tahun ini, yaitu LISTEN Essay Competition 2026. Kompetisi tersebut menjadi wadah bagi peserta untuk menuangkan gagasan melalui karya esai sekaligus memperluas ruang partisipasi dalam rangkaian kegiatan LISTEN.\r\n\r\nBabak final LISTEN Essay Competition 2026 telah dilaksanakan secara daring pada 13 September 2026. Pengumuman dan pemberian penghargaan kepada para pemenang kemudian menjadi bagian dari rangkaian acara LISTEN 2026.\r\n\r\nDalam kompetisi tersebut, TIM IQRO dari SMAN 1 Badegan meraih Juara 3 dengan nilai 87,47. TIGA HAMBA ALLAH dari SMAN 1 Manyar meraih Juara 2 dengan nilai 88,20, sedangkan TIM BADHE MBARONG dari SMAN 1 Badegan meraih Juara 1 dengan nilai 90,97.\r\n\r\nSelain seminar dan kompetisi, LISTEN 2026 juga menjadi momentum bagi Departemen Informasi dan Perpustakaan untuk memperkuat jejaring melalui seremonial IKAFORSTA (Ikatan Alumni Ilmu Informasi dan Perpustakaan). Agenda ini menjadi bagian dari rangkaian kegiatan yang mempertemukan unsur alumni dan lingkungan Departemen Informasi dan Perpustakaan dalam upaya membangun hubungan dan sinergi yang berkelanjutan.\r\n\r\nMelalui LISTEN 2026, HIMAFORSTA bersama Departemen Informasi dan Perpustakaan UNAIR menghadirkan ruang bagi peserta untuk memperoleh pengetahuan sekaligus berdiskusi mengenai perkembangan AI, transformasi digital, dan masa depan perpustakaan. Kehadiran LISTEN Essay Competition sebagai agenda baru juga memperluas kesempatan bagi generasi muda untuk menyampaikan gagasan mengenai perkembangan ilmu informasi dan perpustakaan. (MPM)\r\n\r\nKegiatan ini merefleksikan komitmen terhadap SDG 4: Pendidikan Berkualitas melalui penyediaan ruang pembelajaran, pertukaran pengetahuan, dan pengembangan wawasan di bidang ilmu informasi dan perpustakaan.', '2026-09-30 02:34:57', '2026-09-30 02:34:57'),
	(2, 'Tingkatkan Kualitas Pendidikan Magister, S2 Sains Informasi dan Perpustakaan Unair Sukses Jalani AMI 2026', '1790760996.png', 'Program Studi Magister (S2) Sains Informasi dan Perpustakaan Universitas Airlangga (Unair) kembali menegaskan komitmennya dalam menjaga standar tinggi kualitas pendidikan melalui pelaksanaan Audit Mutu Internal (AMI) 2026. Kegiatan evaluasi tahunan ini dilaksanakan secara tatap muka pada Senin (7/9/2026).', 'Program Studi Magister (S2) Sains Informasi dan Perpustakaan Universitas Airlangga (Unair) kembali menegaskan komitmennya dalam menjaga standar tinggi kualitas pendidikan melalui pelaksanaan Audit Mutu Internal (AMI) 2026. Kegiatan evaluasi tahunan ini dilaksanakan secara tatap muka pada Senin (7/9/2026).\r\n\r\nAgenda audit ini dihadiri oleh tim asesor yang dipimpin oleh Rizki Andini, S.Pd., M.Litt., Ph.D. selaku Lead Auditor, didampingi oleh Nur Emma Suriani, S.Sos., M.Si. sebagai anggota asesor. Turut hadir dalam kegiatan ini Ketua Departemen Informasi dan Perpustakaan, Koordinator Program Studi (KPS) S2 Sains Informasi dan Perpustakaan, jajaran dosen pengajar, serta tenaga kependidikan.\r\n\r\nPelaksanaan AMI 2026 berlangsung dalam suasana yang kondusif, interaktif, dan terbuka. Kegiatan ini menjadi ruang dialog strategis antara tim asesor dan seluruh civitas academica Program Studi S2 Sains Informasi dan Perpustakaan untuk meninjau seluruh aspek penyelenggaraan program magister secara komprehensif.\r\n\r\nSelama proses visitasi, berlangsung diskusi yang produktif antara tim asesor dengan pengelola program studi. Berbagai data operasional, dokumen kurikulum, serta pelaksanaan tata kelola penjaminan mutu dikaji bersama secara cermat.\r\n\r\nSuasana keterbukaan selama audit mempermudah identifikasi berbagai poin akademik maupun administratif yang masih membutuhkan penyempurnaan. Masukan dan saran konstruktif dari tim asesor menjadi landasan berharga bagi prodi untuk membenahi sistem tata kelola internal secara berkelanjutan.\r\n\r\nMelalui proses evaluasi ini, kegiatan AMI difungsikan sebagai sarana refleksi sekaligus penguatan budaya mutu di lingkungan Program Studi S2 Sains Informasi dan Perpustakaan Unair.\r\n\r\nHasil pelaksanaan AMI 2026 memberikan catatan dan masukan positif bagi kemajuan prodi. Melalui rekomendasi tim asesor, Program Studi S2 Sains Informasi dan Perpustakaan memiliki arah yang jelas untuk melakukan penyesuaian, presisi validasi data, serta optimalisasi pelaporan mutu akademik.\r\n\r\nPelaksanaan AMI 2026 menjadi momentum krusial bagi prodi untuk terus memperkuat komitmen continuous quality improvement (peningkatan mutu berkelanjutan). Seluruh jajaran pengelola prodi akan segera menindaklanjuti catatan asesor agar sistem tata kelola semakin tertib, efektif, dan selaras dengan standar mutu Universitas Airlangga.\r\n\r\nMelalui sinergi dan kolaborasi yang kuat antara pimpinan, dosen, tenaga kependidikan, serta mahasiswa, Program Studi S2 Sains Informasi dan Perpustakaan Unair berkomitmen untuk terus menghadirkan pendidikan jenjang magister yang unggul, relevan, dan berdaya saing global. (MPM)', '2026-09-30 02:36:36', '2026-09-30 02:36:36'),
	(3, 'Dosen Ilmu Informasi dan Perpustakaan FISIP UNAIR Hadiri KPII 2026 dan Rakernas APJBPKI di Surakarta', '1790761284.png', 'Dosen Departemen Informasi dan Perpustakaan (IIP) Fakultas Ilmu Sosial dan Ilmu Politik Universitas Airlangga, Meinia Prasyesti, S.IIP., MA., hadir mewakili pengelola Palimpsest: Jurnal Ilmu Informasi dan Perpustakaan dalam ajang Konferensi Publikasi Ilmiah Indonesia (KPII) Tahun 2026 dan Rakernas II DPP Asosiasi Pengelola Jurnal Bidang Perpustakaan dan Kearsipan se-Indonesia (APJBPKI). Kegiatan nasional ini berlangsung di UNS Tower Hotel serta UPT Perpustakaan Universitas Sebelas Maret, Surakarta, pada 15–16 September 2026.', 'Dosen Departemen Informasi dan Perpustakaan (IIP) Fakultas Ilmu Sosial dan Ilmu Politik Universitas Airlangga, Meinia Prasyesti, S.IIP., MA., hadir mewakili pengelola Palimpsest: Jurnal Ilmu Informasi dan Perpustakaan dalam ajang Konferensi Publikasi Ilmiah Indonesia (KPII) Tahun 2026 dan Rakernas II DPP Asosiasi Pengelola Jurnal Bidang Perpustakaan dan Kearsipan se-Indonesia (APJBPKI). Kegiatan nasional ini berlangsung di UNS Tower Hotel serta UPT Perpustakaan Universitas Sebelas Maret, Surakarta, pada 15–16 September 2026.\r\n\r\nKehadiran dosen IIP UNAIR dalam forum yang mengusung tema “Membangun Ekosistem Publikasi Ilmiah yang Berintegritas, Kolaboratif, Berkelanjutan, dan Berdaya Saing Global” ini menjadi langkah strategis program studi untuk terus terlibat aktif dalam penguatan ekosistem publikasi ilmiah nasional. Selain mengikuti diskusi panel bersama para pengelola jurnal dan pakar dari berbagai perguruan tinggi se-Indonesia, Meinia juga berpartisipasi dalam sesi presentasi Call for Papers. Dalam ajang diseminasi riset tersebut, gagasan ilmiah yang dipresentasikannya berhasil terpilih sebagai Pemakalah Terbaik 3.\r\n\r\nPartisipasi ini difokuskan untuk membawa pulang arah pengembangan konkret bagi jurnal Palimpsest. Wawasan yang diperoleh dari konferensi akan diterapkan langsung untuk memperbarui sistem tata kelola editorial, memperkuat budaya peer-review, serta mengintegrasikan teknologi kecerdasan buatan (Artificial Intelligence) dalam pengelolaan publikasi jurnal di lingkungan program studi. Keikutsertaan Palimpsest pada acara ini juga dimanfaatkan sebagai sarana evaluasi untuk meningkatkan kualitas layanan dan keterbacaan portal jurnal secara digital.\r\n\r\nSebagai bagian dari rangkaian resmi kegiatan, agenda KPII 2026 ini juga mencakup kegiatan Cultural Tour dan studi literasi. Dosen IIP UNAIR bersama seluruh peserta diajak melakukan kunjungan ke beberapa lembaga pengelola informasi dan cagar budaya di Surakarta, seperti UPT Perpustakaan UNS, Tahir Solo Museum Pedaringan, Pura Mangkunegaran, serta Galeri Studio Lokananta. Agenda ini dirancang untuk mengamati secara langsung praktik baik (best practice) dalam pengelolaan dokumentasi, konservasi rekam sejarah, serta penataan informasi budaya secara profesional.\r\n\r\nHasil dari keikutsertaan dalam KPII 2026 ini selanjutnya akan dibagikan kepada tim pengelola jurnal melalui sesi knowledge sharing. Melalui kehadiran aktif para dosennya di forum ilmiah nasional, Departemen Informasi dan Perpustakaan FISIP UNAIR terus berkomitmen meningkatkan mutu tridharma perguruan tinggi serta memperluas jejaring kolaborasi akademik di tingkat nasional. (MPM)\r\n\r\nKegiatan ini merefleksikan SDG 4 (Pendidikan Berkualitas) dan SDG 17 (Kemitraan untuk Mencapai Tujuan) melalui peningkatan mutu tata kelola publikasi ilmiah, inovasi akses informasi digital, serta penguatan kolaborasi akademik antar-lembaga secara berkelanjutan.', '2026-09-30 02:41:24', '2026-09-30 02:41:24'),
	(4, 'Jurnal Palimpsest Milik Departemen Informasi dan Perpustakaan UNAIR Raih Peringkat Akreditasi SINTA 3', '1790761379.png', 'Jurnal milik Departemen Informasi dan Perpustakaan FISIP Unair, yakni Palimpsest: Jurnal Ilmu Informasi dan Perpustakaan, mencatatkan capaian baru dalam pengembangan kualitas publikasi ilmiah dengan meraih peningkatan peringkat akreditasi menjadi SINTA 3. Penetapan status akreditasi baru ini menjadi bagian dari upaya berkelanjutan pengelola dalam meningkatkan standar tata kelola dan substansi terbitan.', 'Jurnal milik Departemen Informasi dan Perpustakaan FISIP Unair, yakni Palimpsest: Jurnal Ilmu Informasi dan Perpustakaan, mencatatkan capaian baru dalam pengembangan kualitas publikasi ilmiah dengan meraih peningkatan peringkat akreditasi menjadi SINTA 3. Penetapan status akreditasi baru ini menjadi bagian dari upaya berkelanjutan pengelola dalam meningkatkan standar tata kelola dan substansi terbitan.\r\n\r\nJurnal milik Departemen Informasi dan Perpustakaan FISIP Unair, yakni Palimpsest: Jurnal Ilmu Informasi dan Perpustakaan, mencatatkan capaian baru dalam pengembangan kualitas publikasi ilmiah dengan meraih peningkatan peringkat akreditasi menjadi SINTA 3. Penetapan status akreditasi baru ini menjadi bagian dari upaya berkelanjutan pengelola dalam meningkatkan standar tata kelola dan substansi terbitan.\r\n\r\nProses evaluasi akreditasi dilakukan melalui penilaian menyeluruh terhadap berbagai aspek operasional jurnal. Penilaian tersebut mencakup keandalan sistem penyuntingan, ketepatan waktu penerbitan, kualitas mitra bestari dalam menelaah naskah, keberagaman asal penuis, hingga dampak sitasi dari artikel-artikel yang telah dipublikasikan. Hasil peninjauan tersebut mengonfirmasi bahwa Jurnal Palimpsest telah memenuhi kriteria kelayakan untuk naik ke peringkat SINTA 3.\r\n\r\nPihak pengelola menyampaikan apresiasi kepada seluruh pihak yang terlibat dalam proses pengelolaan jurnal. Peran aktif jajaran editor, tim penyunting, reviewer, serta para kontributor naskah dinilai menjadi faktor utama di balik tercapainya hasil akreditasi ini. Dukungan dari para pembaca dan institusi naungan juga turut menjaga konsistensi penerbitan berkala.\r\n\r\nDengan diraihnya peringkat SINTA 3, Palimpsest: Jurnal Ilmu Informasi dan Perpustakaan berkomitmen untuk terus meningkatkan mutu penerbitan pada edisi-edisi selanjutnya. Fokus utama pengelola ke depan mencakup penguatan proses penelaahan naskah, perluasan jangkauan penyebaran karya ilmiah, serta peningkatkan visibilitas artikel agar dapat memberi kontribusi yang lebih luas bagi perkembangan akademik.\r\n\r\nSeiring dengan penetapan status baru ini, redaksi Jurnal Palimpsest kembali membuka penerimaan naskah hasil penelitian dan kajian kritis untuk edisi terbitan mendatang. Para peneliti, akademisi, dan praktisi diundangnya untuk mengirimkan karya ilmiah terbaik mereka sesuai dengan cakupan bidang fokus jurnal. (MPM)', '2026-09-30 02:42:59', '2026-09-30 02:42:59'),
	(5, 'Tingkatkan Kesiapsiagaan Bencana, Departemen Informasi dan Perpustakaan Unair Gelar Pengmas Pengelolaan Arsip Vital Digital di Bojonegoro', '1790761530.png', 'Departemen Informasi dan Perpustakaan Universitas Airlangga, Fakultas Ilmu Sosial dan Ilmu Politik, Universitas Airlangga kembali menunjukkan komitmen nyatanya dalam menjalankan Tri Dharma Perguruan Tinggi melalui kegiatan pengabdian kepada masyarakat (pengmas). Kali ini, tim pengmas mengusung program bertajuk “Penguatan Kapasitas Ibu PKK dalam Pengelolaan dan Perlindungan Dokumen Vital Berbasis Digital di Desa Kabalan, Kecamatan Kanor, Kabupaten Bojonegoro”.', 'Departemen Informasi dan Perpustakaan Universitas Airlangga, Fakultas Ilmu Sosial dan Ilmu Politik, Universitas Airlangga kembali menunjukkan komitmen nyatanya dalam menjalankan Tri Dharma Perguruan Tinggi melalui kegiatan pengabdian kepada masyarakat (pengmas). Kali ini, tim pengmas mengusung program bertajuk “Penguatan Kapasitas Ibu PKK dalam Pengelolaan dan Perlindungan Dokumen Vital Berbasis Digital di Desa Kabalan, Kecamatan Kanor, Kabupaten Bojonegoro”.\r\n\r\nPemilihan lokasi dan tema kegiatan ini didasari oleh kondisi geografis Desa Kabalan yang berada di kawasan perlintasan aliran Sungai Bengawan Solo. Letak geografis tersebut menjadikan Desa Kabalan memiliki tingkat kerentanan yang cukup tinggi terhadap bencana hidrometeorologi, seperti luapan banjir, potensi kerusakan tanggul, hingga cuaca ekstrem berupa hujan deras dan angin kencang.\r\n\r\nMelihat potensi risiko tersebut, tim pengmas hadir memberikan solusi preventif melalui konsep pengelolaan arsip keluarga berbasis digital. Pendekatan ini dirancang untuk mengedukasi para kader Ibu-Ibu PKK bahwa setiap dokumen atau arsip keluarga memiliki jenis, fungsi, serta nilai guna yang beragam. Langkah perlindungan yang tepat dan terorganisir sangat diperlukan agar dokumen vital tetap aman, terawat, dan dapat diakses dengan cepat saat situasi darurat terjadi.\r\n\r\nRangkaian agenda pengmas diselenggarakan secara tatap muka pada Sabtu (26/9/2026) berlokasi di Pendopo Balai Desa Kabalan, Kecamatan Kanor, Kabupaten Bojonegoro. Pembukaan acara berlangsung khidmat yang diawali dengan pembacaan doa bersama, dilanjutkan dengan menyanyikan lagu kebangsaan Indonesia Raya, Hymne Airlangga, serta Mars PKK. Setelah itu, acara diteruskan dengan penyampaian sambutan hangat dari Ketua Tim Pengmas dan Ibu Kepala Desa Kabalan.\r\n\r\nMemasuki sesi inti, para peserta dibekali dengan pemaparan materi komprehensif yang dikombinasikan dengan sesi praktik langsung. Sesi pertama berfokus pada teknik identifikasi dan klasifikasi arsip keluarga yang disampaikan oleh Mega Putri Mahadewi, S.IIP., selaku mitra alumni. Materi kemudian dilanjutkan oleh Elsa Yustika Putri, S.M., M.SM., selaku dosen Departemen Manajemen Unair, yang membedah nilai guna ekonomi dari dokumen-dokumen vital keluarga. Sebagai penutup sesi materi, Faisal Fahmi, S.Pd., M.Sc., Ph.D., selaku dosen dari Departemen Informasi dan Perpustakaan, memandu peserta dalam simulasi dan praktik langsung alih media digital arsip menggunakan perangkat portabel.\r\n\r\nKetua Tim Pengmas, Zulfatun Sofiyani, S.IIP., M.Hum., menyebut bahwa program ini dirancang sebagai langkah strategis untuk memperkuat ketahanan keluarga melalui tata kelola arsip yang tertib dan aman. Menurutnya, dokumen vital tidak sekadar lembaran administratif biasa, melainkan aset penting yang memuat nilai guna ekonomi bagi kelangsungan hidup keluarga. “Melalui kegiatan ini, kami ingin ibu-ibu PKK tidak hanya mendapatkan pengetahuan, tetapi juga bisa langsung mempraktikkan di rumah dan membagikannya kepada keluarga terutama terkait dokumen vital, cara menyimpannya dengan aman melalui Tas Siaga Arsip serta membuat salinan digital menggunakan smartphone.” tutur Zulfa.\r\n\r\nPelaksanaan pengmas ini mendapat sambutan hangat dan respon positif dari seluruh peserta yang hadir. Antusiasme terlihat jelas dari aktifnya interaksi serta banyaknya pertanyaan yang diajukan oleh para kader PKK selama sesi diskusi berlangsung.\r\n\r\nDian, salah satu perwakilan peserta Ibu PKK Desa Kabalan, menyampaikan apresiasi setingginya atas kepedulian Unair terhadap desanya. Ia menilai pelatihan yang diberikan sangat aplikatif dan memberikan pemahaman baru mengenai pentingnya penyelamatan dokumen berharga. “Kegiatan ini sangat bermanfaat, terutama bagi keluarga dalam penyimpanan dokumen. Semoga bisa kolaborasi kembali, ditunggu pengabdian dari Universitas Airlangga berikutnya,” ungkap Dian.\r\n\r\nSelain membawa dampak langsung bagi masyarakat lokal, program pengabdian masyarakat ini turut mendukung pencapaian Sustainable Development Goals (SDGs) poin 11 tentang Sustainable Cities and Communities, khususnya pada indikator pengembangan kampung tangguh bencana dan adaptasi perubahan iklim.\r\n\r\nMelalui pembekalan bagi ibu-ibu PKK sebagai kader utama masyarakat, program ini memfasilitasi penyusunan peta risiko bencana sederhana di tingkat rumah tangga. Penggunaan strategi Tas Siaga Arsip (TSA) difungsikan sebagai sistem peringatan dini untuk jalur evakuasi dokumen, sedangkan alih media serta penyimpanan cadangan data berbasis cloud storage menjadi solusi konkret dalam menghadapi ancaman banjir berkala.\r\n\r\nMelalui sinergi ini, Departemen Informasi dan Perpustakaan Unair berkomitmen untuk terus mendampingi Desa Kabalan menuju desa yang mandiri dan tangguh bencana. Langkah ini tidak hanya melindungi fisik dokumen berharga, tetapi juga menjaga stabilitas ekonomi, kesejahteraan, serta kepastian hak-hak sipil keluarga di masa depan. (ASEK-MPM)', '2026-09-30 02:45:30', '2026-09-30 02:45:30'),
	(6, 'Tembus Scopus Q3, Mahasiswa MSIP Unair Petakan Potensi AI dalam Perpustakaan Medis', '1790761612.png', 'Mahasiswa Program Studi Magister Sains Informasi dan Perpustakaan (MSIP) Universitas Airlangga (Unair), Mohamad Riqza Zulmi, mencatatkan prestasi akademik di tingkat internasional. Artikel ilmiah hasil risetnya mengenai integrasi Artificial Intelligence (AI) dan Large Language Models (LLM) pada perpustakaan medis resmi terbit di IP Indian Journal of Library Science and Information Technology, jurnal bereputasi yang terindeks Scopus Q3.', 'Mahasiswa Program Studi Magister Sains Informasi dan Perpustakaan (MSIP) Universitas Airlangga (Unair), Mohamad Riqza Zulmi, mencatatkan prestasi akademik di tingkat internasional. Artikel ilmiah hasil risetnya mengenai integrasi Artificial Intelligence (AI) dan Large Language Models (LLM) pada perpustakaan medis resmi terbit di IP Indian Journal of Library Science and Information Technology, jurnal bereputasi yang terindeks Scopus Q3.\r\n\r\nMahasiswa yang kerap disapa Zulmi itu bercerita bahwa penelitian ini diselesaikan melalui kolaborasi yang melibatkan Imam Yuadi (KPS MSIP Unair), Tachiyya Nailal Khusna (Universitas Safin Pati), dan Ahmad Jazuli (Universitas Muria Kudus).\r\n\r\nLahirnya karya ilmiah ini dipicu oleh kecermatan Riqza dalam mengamati pesatnya perkembangan teknologi AI dan Large Language Models (LLM) seperti ChatGPT di sektor perpustakaan medis. Ia melihat adanya celah riset yang belum banyak disentuh oleh peneliti lain.\r\n\r\n“Banyak riset yang membahas AI secara umum atau AI di ranah medis klinis tanpa melibatkan peran perpustakaan. Dari situ saya melihat peluang untuk memetakan bagaimana AI sebenarnya diterapkan dalam alur kerja perpustakaan medis, termasuk melihat potensi dan tantangan nyatanya seperti masalah privasi data,” ujar mahasiswa MSIP Angkatan 2025 tersebut.\r\n\r\nZulmi juga bercerita kalau proses penyusunan naskah hingga siap terbit membutuhkan kedisiplinan dan perjuangan panjang. Menggunakan standar internasional PRISMA-ScR, tim mengumpulkan ratusan artikel ilmiah dari basis data Scopus dan Web of Science sebelum akhirnya disaring secara ketat menjadi puluhan naskah paling relevan.\r\n\r\nDi tengah padatnya jadwal perkuliahan S2, Zulmi membagikan kuncinya dalam mengelola waktu antara studi dan penulisan riset. “Kuncinya ada di jadwal yang terstruktur. Saya memanfaatkan waktu luang di sela-sela kuliah dan akhir pekan untuk memilah data serta menyusun draf. Yang penting konsisten,” tambahnya.\r\n\r\nTahap penyempurnaan naskah menjadi momen paling berkesan bagi Zulmi. Saat melalui proses peer review, naskah diuji secara mendalam oleh para ahli, terutama mengenai kategorisasi jenis teknologi AI hingga batasan etika penggunaan AI pada informasi medis yang sensitif.\r\n\r\nZulmi menekankan pentingnya menjaga kontrol manusia dalam pemanfaatan teknologi canggih tersebut. Menurutnya, AI hadir sebagai alat bantu efisiensi, tetapi kontrol kualitas dan keputusan akhir tetap berada di tangan pustakawan.\r\n\r\nKeberhasilan menembus Scopus Q3 menjadi pembuktian bahwa mahasiswa MSIP Unair mampu bersaing di kancah internasional. Selanjutnya Zulmi berencana memperluas fokus penelitiannya pada evaluasi penerapan AI dan etika teknologi di lembaga informasi.\r\n\r\nIa juga memberikan pesan penyemangat bagi seluruh mahasiswa yang ingin mulai mempublikasikan karya ilmiahnya. “Mulai aja dulu, jangan takut salah atau merasa minder dengan standar karya ilmiah. Yang penting berani ambil langkah pertama dan konsisten. Kalau stuck, jangan ragu berdiskusi dengan dosen. Menulis dan menerbitkan karya ilmiah itu bukan hal yang mustahil,” kata Zulmi. (GZC-MPM)\r\n\r\nArtikel ini merefleksikan SDG 4 (Pendidikan Berkualitas) melalui peningkatan literasi digital dan inovasi layanan informasi kesehatan.', '2026-09-30 02:46:52', '2026-09-30 02:46:52');

-- Dumping structure for table iipul.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.cache: ~0 rows (approximately)

-- Dumping structure for table iipul.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.cache_locks: ~0 rows (approximately)

-- Dumping structure for table iipul.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int NOT NULL,
  `semester` int NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.courses: ~0 rows (approximately)
INSERT INTO `courses` (`id`, `code`, `name`, `sks`, `semester`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'BAI101', 'Bahasa Indonesia', 2, 1, 'Mata Kuliah Wajib Universitas/Fakultas. Fokus pada tata bahasa, ejaan, dan penyusunan karya tulis ilmiah.', NULL, NULL),
	(2, 'NOP103', 'Pancasila', 2, 1, 'Mata Kuliah Wajib Universitas/Fakultas. Penguatan nilai dasar Pancasila sebagai ideologi dan dasar negara.', NULL, NULL),
	(3, 'NOP104', 'Kewarganegaraan', 2, 1, 'Mata Kuliah Wajib Universitas/Fakultas. Membahas semangat kebangsaan, HAM, dan kesadaran hukum bernegara.', NULL, NULL),
	(4, 'AGI101', 'Agama Islam I', 2, 1, 'Mata Kuliah Wajib Agama (Pilih salah satu). Konsep ketuhanan, keimanan, dan implementasi akhlak mulia.', NULL, NULL),
	(5, 'AGP101', 'Agama Kristen Protestan I', 2, 1, 'Mata Kuliah Wajib Agama (Pilih salah satu). Pedoman kepribadian Kristiani dan etika moral.', NULL, NULL),
	(6, 'AGK101', 'Agama Kristen Katolik I', 2, 1, 'Mata Kuliah Wajib Agama (Pilih salah satu). Penghayatan iman Katolik dan etika sosial.', NULL, NULL),
	(7, 'AGH101', 'Agama Hindu I', 2, 1, 'Mata Kuliah Wajib Agama (Pilih salah satu). Konsepsi Brahma Widya, susila, dan etika Hindu.', NULL, NULL),
	(8, 'AGB101', 'Agama Budha I', 2, 1, 'Mata Kuliah Wajib Agama (Pilih salah satu). Hakikat ajaran Sang Buddha dan hukum kesunyataan.', NULL, NULL),
	(9, 'AGC101', 'Agama Kong Hu Chu I', 2, 1, 'Mata Kuliah Wajib Agama (Pilih salah satu). Nilai kebajikan dan prinsip hidup Junzi (insan berbudi luhur).', NULL, NULL),
	(10, 'SIP107', 'Data dan Pustaka', 2, 1, 'Mata Kuliah Wajib Fakultas. Keterampilan literasi data, interpretasi, dan evaluasi referensi ilmiah.', NULL, NULL),
	(11, 'BAE110', 'Bahasa Inggris', 2, 1, 'Mata Kuliah Wajib Fakultas. Penguasaan tenses, reading comprehension, dan kosakata akademik dasar.', NULL, NULL),
	(12, 'ETS102', 'Etika Sosial Politik', 2, 1, 'Mata Kuliah Wajib Fakultas. Prinsip-prinsip moral, tanggung jawab, dan kepekaan sosial politik.', NULL, NULL),
	(13, 'PNS101', 'Teknik Penulisan Ilmiah', 2, 2, 'Mata Kuliah Wajib. Konsep dasar penulisan ilmiah, sitasi, dan pemanfaatan reference manager.', NULL, NULL),
	(14, 'PNS201', 'Dasar Metodologi Penelitian Sosial', 3, 2, 'Mata Kuliah Wajib. Paradigma penelitian kualitatif & kuantitatif, teknik sampling, dan pengumpulan data.', NULL, NULL),
	(15, 'PHS101', 'Filsafat Ilmu', 2, 2, 'Mata Kuliah Wajib. Sejarah perkembangan ilmu, ontologi, epistemologi, aksiologi, dan metode berpikir ilmiah.', NULL, NULL),
	(16, 'SIP101', 'Pengantar Ilmu Informasi dan Perpustakaan', 3, 2, 'Mata Kuliah Wajib Prodi. Konsep dasar, teori informasi, sejarah kepustakawanan, dan tren profesi informasi.', NULL, NULL),
	(17, 'SIP102', 'Dasar Organisasi Informasi', 2, 2, 'Mata Kuliah Wajib Prodi. Pengantar sistem temu kembali informasi manual dan berbasis TIK.', NULL, NULL),
	(18, 'SIP111', 'Pengantar Kearsipan dan Dokumentasi', 3, 2, 'Mata Kuliah Wajib Prodi. Daur hidup arsip, tata persuratan, arsip vital, dan pengenalan arsip elektronik.', NULL, NULL),
	(19, 'SIP234', 'Sistem Klasifikasi', 3, 2, 'Mata Kuliah Wajib Prodi. Praktik penentuan notasi subjek dokumen menggunakan bagan DDC (Dewey Decimal Classification).', NULL, NULL),
	(20, 'SIP344', 'Manajemen Data', 2, 2, 'Mata Kuliah Wajib Prodi. Pengenalan sistem database relasional dan alur data pada instansi informasi.', NULL, NULL),
	(21, 'PNS212', 'Metode Penelitian Kuantitatif', 4, 3, 'Mata Kuliah Wajib. Praktik analisis statistik kuantitatif menggunakan perangkat lunak (SPSS) dan uji hipotesis.', NULL, NULL),
	(22, 'SIP235', 'Pengembangan Koleksi', 3, 3, 'Mata Kuliah Wajib Prodi. Kebijakan seleksi, pengadaan bahan pustaka fisik/elektronik, dan evaluasi koleksi.', NULL, NULL),
	(23, 'SIP236', 'Pengindeksan dan Analisis Subjek', 3, 3, 'Mata Kuliah Wajib Prodi. Analisis subjek dokumen, penyusunan tajuk subjek (LCSH/SLSH), dan tesaurus.', NULL, NULL),
	(24, 'SIP237', 'Sistem Informasi Perpustakaan', 3, 3, 'Mata Kuliah Wajib Prodi. Pendekatan sistem, teori informasi, dan perancangan database perpustakaan.', NULL, NULL),
	(25, 'SIP238', 'Sumber dan Layanan Informasi', 2, 3, 'Mata Kuliah Wajib Prodi. Evaluasi koleksi referensi umum/khusus, reference interview, dan layanan digital.', NULL, NULL),
	(26, 'SIP345', 'Sistem Temu Kembali Informasi', 2, 3, 'Mata Kuliah Wajib Prodi. Logika penelusuran online, boolean operator, metasearch, dan evaluasi hasil penelusuran.', NULL, NULL),
	(27, 'SIP367', 'Literasi Informasi', 3, 3, 'Mata Kuliah Wajib Prodi. Model-model literasi informasi (The Big6, Empowering 8) dan lifelong learning.', NULL, NULL),
	(28, 'BAE213', 'Bahasa Inggris Lanjut', 2, 3, 'Mata Kuliah Wajib Prodi. Penerapan bahasa Inggris untuk penulisan abstrak, review buku, dan terjemahan.', NULL, NULL),
	(29, 'SIP243', 'Kajian Publikasi dan HaKI (Pilihan)', 2, 3, 'Mata Kuliah Pilihan. Dinamika industri penerbitan buku, pergeseran cetak ke elektronik, dan Hak Atas Kekayaan Intelektual.', NULL, NULL),
	(30, 'SIP347', 'Analisis Sistem Perpustakaan (Pilihan)', 3, 3, 'Mata Kuliah Pilihan. Tahapan SDLC (Systems Development Life Cycle) dalam merancang sistem perpustakaan.', NULL, NULL),
	(31, 'SIP353', 'Kajian Literasi dan Budaya Baca (Pilihan)', 3, 3, 'Mata Kuliah Pilihan. Analisis masalah minat baca di Indonesia, pleasure reading, dan net generation.', NULL, NULL),
	(32, 'SIP356', 'Kajian Ruang Pusat Informasi (Pilihan)', 2, 3, 'Mata Kuliah Pilihan. Desain tata ruang, interior, ergonomi, dan fasilitas pusat informasi modern.', NULL, NULL),
	(33, 'SIP371', 'Kajian Informasi dan Gender (Pilihan)', 2, 3, 'Mata Kuliah Pilihan. Analisis isu marjinalisasi, subordinasi, dan kesenjangan akses informasi berbasis gender.', NULL, NULL),
	(34, 'SIP240', 'Sistem Katalogisasi', 2, 4, 'Mata Kuliah Wajib Prodi. Pembuatan katalog deskriptif standar AACR2/RDA dan format MARC21.', NULL, NULL),
	(35, 'SIP241', 'Teori Ilmu Sosial untuk IIP', 3, 4, 'Mata Kuliah Wajib Prodi. Perspektif strukturalisme, post-strukturalisme, marxism, dan post-modernism untuk analisis isu informasi.', NULL, NULL),
	(36, 'SIP322', 'Perilaku Informasi', 3, 4, 'Mata Kuliah Wajib Prodi. Model perilaku pencarian informasi (Wilson, Ellis, Kuhlthau) dan studi pengguna.', NULL, NULL),
	(37, 'SIP348', 'Perancangan Aplikasi Perpustakaan', 3, 4, 'Mata Kuliah Wajib Prodi. Konstruksi portal, modifikasi CMS, dan pengelolaan database aplikasi perpustakaan.', NULL, NULL),
	(38, 'SIP349', 'Manajemen Koleksi Non Buku', 2, 4, 'Mata Kuliah Wajib Prodi. Katalogisasi dan pengelolaan bahan kartografi, rekaman suara, video, dan multimedia.', NULL, NULL),
	(39, 'SIP351', 'Manajemen Arsip Dinamis', 3, 4, 'Mata Kuliah Wajib Prodi. Pengelolaan arsip aktif/inaktif, jadwal retensi arsip (JRA), dan penyusutan arsip.', NULL, NULL),
	(40, 'SIP359', 'Perpustakaan Digital', 3, 4, 'Mata Kuliah Wajib Prodi. Arsitektur perpustakaan digital, interoperabilitas metadata, dan preservasi digital.', NULL, NULL),
	(41, 'SIP239', 'Etika Informasi (Pilihan)', 2, 4, 'Mata Kuliah Pilihan. Prinsip moral pelayanan, kode etik pustakawan, dan penanganan keluhan pemustaka.', NULL, NULL),
	(42, 'SIP242', 'Kajian Informasi dan Psikologi (Pilihan)', 2, 4, 'Mata Kuliah Pilihan. Aspek psikologis dalam interaksi layanan informasi dan perubahan perilaku pengguna.', NULL, NULL),
	(43, 'SIP355', 'Kajian Kolaborasi Informasi & Perpustakaan (Pilihan)', 2, 4, 'Mata Kuliah Pilihan. Konsep jejaring perpustakaan, konsorsium, dan resource sharing berbasis teknologi.', NULL, NULL),
	(44, 'SIP366', 'Informasi dan Kelompok Khusus (Pilihan)', 3, 4, 'Mata Kuliah Pilihan. Layanan informasi dan teknologi bantu (assistive tech) bagi penyandang disabilitas & lansia.', NULL, NULL),
	(45, 'SIP357', 'Informasi dan Kebudayaan (Pilihan)', 3, 4, 'Mata Kuliah Pilihan. Analisis budaya informasi digital, autentisitas teks, dan net generation culture.', NULL, NULL),
	(46, 'MNU312', 'Analisis Informasi Bisnis (Pilihan)', 3, 4, 'Mata Kuliah Pilihan. Mindset kewirausahaan berbasis TIK dan pengelolaan bisnis jasa informasi.', NULL, NULL),
	(47, 'MNO312', 'Total Quality Management (TQM)', 3, 5, 'Mata Kuliah Wajib Prodi. Budaya mutu, kepemimpinan, pemberdayaan SDM, dan perbaikan berkelanjutan.', NULL, NULL),
	(48, 'SIP352', 'Manajemen Arsip Statis', 2, 5, 'Mata Kuliah Wajib Prodi. Pengolahan arsip bernilai sejarah, pelindungan bukti hukum, dan akses arsip statis.', NULL, NULL),
	(49, 'SIP358', 'Metode Penelitian Informasi dan Perpustakaan', 4, 5, 'Mata Kuliah Wajib Prodi. Pendalaman metode analisis wacana, etnografi virtual, digital forensic, dan big data.', NULL, NULL),
	(50, 'SIP361', 'Perancangan Portal dan Aplikasi Informasi', 3, 5, 'Mata Kuliah Wajib Prodi. Desain layout web interaktif, manajemen modul, dan hosting website instansi.', NULL, NULL),
	(51, 'SIP362', 'Manajemen Jasa Informasi', 2, 5, 'Mata Kuliah Wajib Prodi. Strategi pelayanan berorientasi kepuasan pelanggan pada lembaga profit/nirlaba.', NULL, NULL),
	(52, 'SIP363', 'Masyarakat Informasi', 3, 5, 'Mata Kuliah Wajib Prodi. Karakteristik masyarakat informasi, determinan teknologi, dan komunitas virtual.', NULL, NULL),
	(53, 'SIP346', 'Informetrika (Pilihan)', 3, 5, 'Mata Kuliah Pilihan. Penerapan hukum Bradford, Lotka, Zipf, analisis sitiran, dan paro hidup literatur.', NULL, NULL),
	(54, 'SIP354', 'Manajemen Arsip Elektronik (Pilihan)', 2, 5, 'Mata Kuliah Pilihan. Pengelolaan electronic records, alih media, autentikasi, dan preservasi digital.', NULL, NULL),
	(55, 'SIP364', 'Knowledge Management (Pilihan)', 3, 5, 'Mata Kuliah Pilihan. Siklus knowledge management, knowledge sharing, dan audit pengetahuan organisasi.', NULL, NULL),
	(56, 'SIP365', 'Kebijakan Informasi (Pilihan)', 3, 5, 'Mata Kuliah Pilihan. Regulasi hak cipta, information policy, dan perlindungan data di masyarakat digital.', NULL, NULL),
	(57, 'PII60102', 'Manajemen Krisis dalam Informasi (Pilihan MBKM)', 3, 5, 'Mata Kuliah Pilihan lintas prodi/universitas mitra (Universitas Brawijaya). Penanganan krisis informasi.', NULL, NULL),
	(58, 'AGI401', 'Agama Islam II', 2, 6, 'Mata Kuliah Wajib Fakultas. Isu aktual keagamaan, relasi iman-akal, pluralitas, dan civil society.', NULL, NULL),
	(59, 'AGP401', 'Agama Kristen Protestan II', 2, 6, 'Mata Kuliah Wajib Fakultas. Implementasi iman Kristiani dalam pengembangan IPTEK dan masyarakat.', NULL, NULL),
	(60, 'AGK401', 'Agama Kristen Katolik II', 2, 6, 'Mata Kuliah Wajib Fakultas. Ajaran sosial Gereja, etika moral, Hak Asasi Manusia, dan demokrasi.', NULL, NULL),
	(61, 'AGH401', 'Agama Hindu II', 2, 6, 'Mata Kuliah Wajib Fakultas. Konsepsi catur marga yoga, etika, dan budaya dalam perspektif Hindu.', NULL, NULL),
	(62, 'AGB401', 'Agama Budha II', 2, 6, 'Mata Kuliah Wajib Fakultas. Implementasi ajaran Buddha dalam etika sosial politik dan hukum karma.', NULL, NULL),
	(63, 'AGC401', 'Agama Kong Hu Chu II', 2, 6, 'Mata Kuliah Wajib Fakultas. Penerapan prinsip Zhi Ren Yong dan pengabdian nilai kebajikan hakiki.', NULL, NULL),
	(64, 'SIP244', 'Manajemen Preservasi, Konservasi & Restorasi', 3, 6, 'Mata Kuliah Wajib Prodi. Pencegahan kerusakan fisik dokumen, mitigasi bencana arsip (disaster management), dan fumigasi.', NULL, NULL),
	(65, 'SIP421', 'Kajian Masalah Informasi dan Perpustakaan', 3, 6, 'Mata Kuliah Wajib Prodi. Analisis mendalam problem mutakhir kepustakawanan sebagai landasan penulisan ilmiah.', NULL, NULL),
	(66, 'SIP441', 'Pemasaran Informasi', 3, 6, 'Mata Kuliah Wajib Prodi. Strategi bauran pemasaran, Product Life Cycle (PLC), dan riset pasar produk informasi.', NULL, NULL),
	(67, 'KKS495', 'Magang', 3, 6, 'Mata Kuliah Wajib Prodi. Praktik kerja langsung di institusi/perusahaan/lembaga arsip untuk mengasah hardskill.', NULL, NULL),
	(68, 'SIP368', 'Perencanaan Strategik Lembaga Informasi (Pilihan)', 2, 6, 'Mata Kuliah Pilihan. Analisis SWOT, perumusan visi/misi, dan penyusunan rencana strategis perpustakaan nirlaba.', NULL, NULL),
	(69, 'SIP369', 'Perancangan Komersial Elektronik (Pilihan)', 3, 6, 'Mata Kuliah Pilihan. Arsitektur e-commerce, payment gateway, dan strategi bisnis online/money blogging.', NULL, NULL),
	(70, 'SIP372', 'Sains Data untuk Ilmu Sosial (Pilihan)', 3, 6, 'Mata Kuliah Pilihan. Text mining, pembersihan data, analisis sentimen, dan visualisasi big data sosial.', NULL, NULL),
	(71, 'AUD101', 'Audit Informasi (Pilihan MBKM)', 2, 6, 'Mata Kuliah Pilihan lintas prodi/universitas mitra (Universitas Brawijaya). Evaluasi aset informasi.', NULL, NULL),
	(72, 'KNS401', 'Kuliah Kerja Nyata (KKN)', 3, 7, 'Mata Kuliah Wajib Universitas. Pengabdian kepada masyarakat multikultural secara interdisipliner.', NULL, NULL),
	(73, 'PNS498', 'Proposal Skripsi', 3, 7, 'Mata Kuliah Wajib Prodi. Perancangan usulan penelitian, rumusan masalah, dan seminar proposal skripsi.', NULL, NULL),
	(74, 'SIP413', 'Studi Perbandingan Lembaga & Teknologi Informasi (Pilihan)', 3, 7, 'Mata Kuliah Pilihan. Analisis komparatif sistem perpustakaan, arsip, museum, serta penerapan IoT dan Cloud.', NULL, NULL),
	(75, 'KAS405', 'Keasistenan Ilmu Informasi dan Perpustakaan (Pilihan)', 3, 7, 'Mata Kuliah Pilihan. Keterlibatan mahasiswa dalam asistensi persiapan materi kuliah dan praktik pengajaran.', NULL, NULL),
	(76, 'SIP373', 'Forensik Digital dan Analisis Citra (Pilihan)', 2, 7, 'Mata Kuliah Pilihan. Verifikasi keaslian citra digital, clustering objek, dan deteksi manipulasi file.', NULL, NULL),
	(77, 'PNS499', 'Skripsi', 6, 8, 'Mata Kuliah Wajib. Penelitian mandiri, penyusunan laporan skripsi, publikasi artikel ilmiah, dan sidang ujian komprehensif.', NULL, NULL);

-- Dumping structure for table iipul.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table iipul.informasis
CREATE TABLE IF NOT EXISTS `informasis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_aksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.informasis: ~1 rows (approximately)
INSERT INTO `informasis` (`id`, `judul`, `kategori`, `deskripsi`, `link_aksi`, `created_at`, `updated_at`) VALUES
	(1, 'Wismilak Intership', 'Magang', '--> Job Description\r\n1. Melakukan pemetaan dan inventarisasi arsip departemen.\r\n2. Melakukan review, pemilahan, dan klasifikasi arsip.\r\n3. Melakukan standardisasi penamaan file serta rekonsiliasi data fisik dan digital.\r\n\r\n--> Job Specification\r\n1. Mahasiswa masih aktif berkuliah - D4/ S1, Jurusan Ilmu Informasi & Perpustakaan\r\n2. Memahami dasar manajemen dan klasifikasi arsip.\r\n3. Mampu menggunakan Microsoft Excel.\r\n4. Bersedia menjalani magang secara offline di Surabaya selama 6 bulan.', 'https://karir.wismilak.com/peluang_detail?t=8OBQvWVkfnpk68407XyhmQ%3D%3D', '2026-09-30 01:20:07', '2026-09-30 01:20:07'),
	(2, 'Dari Peta Riset ke Novelty : Strategi Menemukan Research Gap dan Novelty dengan Bibliometrik dan AI', 'Pelatihan', '1. Memahami Research Gap dan Novelty serta perbedaannya\r\n2. Mapping penelitian dengan Bibliometrik dan VOSviewer\r\n3. Mengidentifikasi tren, tema dominan, cluster, dan hubungan antropik\r\n4. Membaca hasil pemetaan untuk menemukan peluang research gap', NULL, '2026-09-30 02:19:03', '2026-09-30 02:19:03');

-- Dumping structure for table iipul.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.jobs: ~0 rows (approximately)

-- Dumping structure for table iipul.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.job_batches: ~0 rows (approximately)

-- Dumping structure for table iipul.kalkulator_ddcs
CREATE TABLE IF NOT EXISTS `kalkulator_ddcs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subjek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.kalkulator_ddcs: ~4 rows (approximately)
INSERT INTO `kalkulator_ddcs` (`id`, `subjek`, `nomor`, `detail`, `created_at`, `updated_at`) VALUES
	(1, 'Hukum', '342', 'Subdivisi standar ditambahkan untuk hukum tata negara dan hukum administrasi secara bersamaan, serta untuk hukum tata negara saja.', '2026-09-30 01:43:50', '2026-09-30 01:43:50'),
	(2, 'Ekonomi', '338.9', 'Subdivisi standar ditambahkan untuk salah satu atau kedua topik dalam tajuk. Mencakup autarki dan saling ketergantungan', '2026-09-30 03:31:14', '2026-09-30 03:31:14'),
	(5, 'Psikologi Anak', '155.4', 'Menjelaskan smapai anak usia 11 tahun yang memisahkan juga berdasarkan gendernya, kemudian spesifik khusus mengenai batas usia, hubungan persaudaraan, dan lain sebagainya', '2026-09-30 06:06:21', '2026-09-30 06:06:21'),
	(6, 'Kamus Kedokteran', '610.03', 'Kelas utama ada di 610 yang merupakan kelas untuk mengklasifikasi mengenai \'Medicine and health\'. Kemudian mendapatkan .03 guna menjelaskan bahwa buku tersebut merupakan kamus', '2026-09-30 06:17:20', '2026-09-30 06:17:20'),
	(7, 'Sejarah Indonesia', '959.8', 'Nomor ini menjelaskan secara khusus untuk sejarah yang ada di Indonesia dan juga Timor Leste. Terdapat pembagian sesuai dengan periode tahun untuk pembeda.', '2026-09-30 06:22:56', '2026-09-30 06:22:56'),
	(8, 'Filosofi', '100', 'Kelas utama untuk filosofi, di dalamnya terdapat banyak turunan seperti metafisika, ontologi, epistimologi, dan masih banyak lagi', '2026-09-30 06:25:49', '2026-09-30 06:25:49');

-- Dumping structure for table iipul.kebanggaans
CREATE TABLE IF NOT EXISTS `kebanggaans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.kebanggaans: ~1 rows (approximately)
INSERT INTO `kebanggaans` (`id`, `nama`, `prestasi`, `foto`, `created_at`, `updated_at`) VALUES
	(1, 'Dewangga', 'Juara 1 Sketsa Ruang Informasi', '1790756456.png', '2026-09-30 01:20:56', '2026-09-30 01:20:56'),
	(2, 'William', 'Juara 2 Guitar', '1790760634.png', '2026-09-30 02:30:34', '2026-09-30 02:30:34'),
	(3, 'sky', 'Student Exchange USM', '1790760651.png', '2026-09-30 02:30:51', '2026-09-30 02:30:51'),
	(4, 'Yuna', 'Juara 1 Penyanyi Solo', '1790760695.png', '2026-09-30 02:31:35', '2026-09-30 02:31:35'),
	(5, 'Karina', 'Juara 1 LKTI', '1790760710.png', '2026-09-30 02:31:50', '2026-09-30 02:31:50');

-- Dumping structure for table iipul.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.migrations: ~10 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_09_12_164318_create_kebanggaans_table', 1),
	(5, '2026_09_13_160523_create_beritas_table', 1),
	(6, '2026_09_20_114426_create_persebarans_table', 1),
	(7, '2026_09_20_193518_create_toolkits_table', 1),
	(8, '2026_09_27_014236_create_informasis_table', 1),
	(9, '2026_09_29_144404_courses_table', 1),
	(10, '2026_09_30_083200_create_kalkulator_ddcs_table', 2);

-- Dumping structure for table iipul.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table iipul.persebarans
CREATE TABLE IF NOT EXISTS `persebarans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `daerah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_x` double NOT NULL,
  `posisi_y` double NOT NULL,
  `pekerjaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.persebarans: ~0 rows (approximately)
INSERT INTO `persebarans` (`id`, `daerah`, `posisi_x`, `posisi_y`, `pekerjaan`, `created_at`, `updated_at`) VALUES
	(1, 'Surabaya', 112.7, -7.2, '1. Dosen Ilmu Informasi dan Perpustakaan Universitas Airlangga \r\n2. Guru Besar Vokasi Universitas Airlangga\r\n3. Pustakawan Universitas Airlangga\r\n4. Kepala Bidang Pengembangan Koleksi di Universitas Petra\r\n5. Pustawakan Universitas Nadhatul Ulama \r\n6. Admin Departemen Informasi dan Perpustakaan Universitas Airlangga \r\n7. Kepala Perpustakaan Institut Teknologi 10 Nopember\r\n8. Kepala Perpustakaan Universitas Nadhatul Ulama', '2026-09-30 02:58:02', '2026-09-30 03:18:05'),
	(2, 'Malang', 112.6, 7.9, '1. Pustakawan Perpustakaan Pusat UIN Maulana Malik Ibrahim\r\n2. Dosen Universitas Brawijaya', '2026-09-30 03:07:10', '2026-09-30 03:17:24'),
	(3, 'Jakarta', 106.8, 6.2, '1. Staff Library di CNBC Indonesia TV \r\n2. Widyaiswara Ahli Pertama Perpustakaan Nasional RI', '2026-09-30 03:11:47', '2026-09-30 03:18:17'),
	(4, 'Semarang', 110.4, -6.9, 'Dosen Ilmu Perpustakaan dan Informasi Universitas Diponegoro', '2026-09-30 03:14:26', '2026-09-30 03:14:26'),
	(5, 'Yogyakarta', 110.3, -7.8, 'Petugas Administrasi Kepesertaan BPJS Ketenagakerjaan', '2026-09-30 03:15:49', '2026-09-30 03:15:49');

-- Dumping structure for table iipul.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('5MaJhJzodYPqZEHMgzqW5hQr8NrAHT4Ncf1tnUkb', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/154.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJnMXFKdmQ0bnVCeWtkbnNIdGZzbjFmWUZub1plR1lqQ2plM3FZeVFKIiwidXJsIjp7ImludGVuZGVkIjoiaHR0cDpcL1wvbG9jYWxob3N0OjgwMDBcL2FkbWluXC9pbmZvcm1hc2kifSwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9iZXJpdGFcLzUiLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjF9', 1790764439),
	('hIiCojNthE4gCFybBsWEIh3Bt4EOSmRRXZbJaxL3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/154.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJlMzFzSXdwY2M1M2RhVnpzdzZSUlZQemlYcEMxeEI4RG95SE5DaWdzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwIiwicm91dGUiOm51bGx9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790772440),
	('v5G6M7qVJGxYUI7v68xFPPNyo9jpOIzT93h9ZYxb', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/154.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJzWU4wMmV4WUJVaTltTThaNkluZm9rMWtiWGlzWWpyTXlleGdOclpZIiwidXJsIjp7ImludGVuZGVkIjoiaHR0cDpcL1wvbG9jYWxob3N0OjgwMDBcL2FkbWluIn0sIl9wcmV2aW91cyI6eyJ1cmwiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvY2FsY3VsYXRvci1kZGMiLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjF9', 1790774786);

-- Dumping structure for table iipul.toolkits
CREATE TABLE IF NOT EXISTS `toolkits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_aplikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mata_kuliah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_download` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.toolkits: ~0 rows (approximately)
INSERT INTO `toolkits` (`id`, `nama_aplikasi`, `mata_kuliah`, `deskripsi`, `link_download`, `created_at`, `updated_at`) VALUES
	(1, 'draw.io', 'Sistem Informasi Perpustakaan', 'Aplikasi yang bisa membantu membuat gambar mengenai DFD, Use Case, dan Diagram Architecture', 'https://draw-io.en.softonic.com/', '2026-09-30 03:20:12', '2026-09-30 03:20:31'),
	(2, 'VS Code', 'Perpustakaan Digital, Perancangan Aplikasi Perpustakaan, Perancangan Portal dan Aplikasi Informasi', 'Visual Studio Code (VS Code) adalah aplikasi editor kode sumber gratis dan ringan buatan Microsoft yang digunakan untuk menulis, mengedit, menjalankan, dan memperbaiki (debugging) kode program', 'https://code.visualstudio.com/download?_exp_download=fb315fc982', '2026-09-30 03:23:14', '2026-09-30 03:23:14'),
	(3, 'Calibre', 'Perpustakaan Digital', 'aplikasi manajemen buku elektronik (e-book) gratis dan open-source yang digunakan untuk mengatur, mengelola, membaca, dan mengonversi berbagai format file e-book di komputer', 'https://calibre-ebook.com/download', '2026-09-30 03:24:15', '2026-09-30 03:24:15'),
	(4, 'MarcEdit', 'Sistem Katalogisasi', 'perangkat lunak gratis yang digunakan oleh pustakawan untuk membuat, mengedit, mengonversi, dan memanipulasi metadata perpustakaan, khususnya rekaman bibliografi berformat MARC', 'https://marcedit.reeset.net/downloads', '2026-09-30 03:25:39', '2026-09-30 03:25:39'),
	(5, 'Fiji ImageJ', 'Forensik Digital dan Analisis Citra', 'paket perangkat lunak pengolahan dan analisis citra ilmiah gratis serta bersumber terbuka (open-source) yang berbasis pada ImageJ2', 'https://imagej.net/software/fiji/downloads', '2026-09-30 03:27:03', '2026-09-30 03:27:03');

-- Dumping structure for table iipul.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table iipul.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Arin', 'arin.nabila05@gmail.com', NULL, '$2y$12$.MkQhKbRHGW3JF2nNi7o6.o6FaAt1ibxkQrx4kpjfxI7dmdZDJ/Zy', NULL, '2026-09-30 01:18:25', '2026-09-30 01:18:25'),
	(2, 'Test User', 'test@example.com', '2026-09-30 02:23:21', '$2y$12$eh/9S0vKecCPJHWgsGJbmOPbvJehyzLCbJgD7I/7fGIciqyuSpY0O', 'Sfu05z7znL', '2026-09-30 02:23:21', '2026-09-30 02:23:21');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
