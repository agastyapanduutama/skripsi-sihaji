-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 02:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sihaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(11) NOT NULL,
  `id_pasienna` int(11) DEFAULT NULL,
  `kode_diagnosa` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `tanggal_diagnosa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `instalasi` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `kasus` varchar(50) DEFAULT NULL,
  `creator` varchar(50) DEFAULT NULL,
  `editor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `id_pasienna`, `kode_diagnosa`, `deskripsi`, `tanggal_diagnosa`, `instalasi`, `status`, `kasus`, `creator`, `editor`) VALUES
(51, 27, 'Tester ', 'Percobaan', '2019-12-13 16:19:53', 'Rawat inap', 'Sudah Koding', 'Kasus', 'iqbal', 'iqbal'),
(52, 27, 'wadd', '', '2019-12-13 16:19:53', '', 'Sudah Koding', '', '', ''),
(53, 26, 'awdaw12', '', '2019-12-13 16:19:53', '', 'Sudah Koding', '', '', ''),
(55, 32, 'a001', 'Cholera due to Vibrio cholerae 01, biovar eltor', '2019-12-13 16:19:53', '', 'Sudah Koding', '', '', ''),
(56, 32, 'a009', 'Cholera, unspecified', '2019-12-13 16:19:53', '', 'Sudah Koding', '', '', ''),
(57, 32, 'a001', 'Cholera due to Vibrio cholerae 01, biovar eltor', '2019-12-13 16:19:53', '', 'Sudah Koding', '', '', ''),
(62, 32, 'a001', 'Cholera due to Vibrio cholerae 01, biovar eltor', '2019-12-15 04:35:33', NULL, 'Sudah Koding', 'Diagnosa', '', ''),
(64, 32, 'a001', 'Cholera due to Vibrio cholerae 01, biovar eltor', '2019-12-15 04:16:18', NULL, 'Sudah Koding', 'aws', '', ''),
(65, 32, 'a009', 'Cholera, unspecified', '2019-12-15 08:14:26', NULL, 'Sudah Koding', '', 'Iqbal', ''),
(66, 32, 'a001', 'Cholera due to Vibrio cholerae 01, biovar eltor', '2019-12-15 08:15:25', NULL, 'Sudah Koding', '', 'Iqbal', ''),
(67, 28, 'a001', 'Cholera due to Vibrio cholerae 01, biovar eltor', '2019-12-15 13:19:30', NULL, 'Sudah Koding', 'awdaws', 'Iqbal', 'iqbal'),
(68, 33, 'a009', 'Cholera, unspecified', '2019-12-15 14:26:06', NULL, 'Sudah Koding', '', 'Iqbal', ''),
(69, 33, 'a001', 'Cholera due to Vibrio cholerae 01, biovar eltor', '2019-12-15 15:15:05', NULL, 'Sudah Koding', '', 'Iqbal', ''),
(70, 33, 'a001', 'Cholera due to Vibrio cholerae 01, biovar eltor', '2019-12-15 17:01:23', NULL, 'Sudah Koding', '', 'Iqbal', ''),
(71, 33, '13123123', '123123', '2019-12-15 17:05:03', NULL, 'Belum Koding', '123123', 'Iqbal', 'Iqbal'),
(72, 33, '123123', '123123123', '2019-12-15 17:06:56', NULL, 'Sudah Koding', '123123', 'Iqbal', 'Iqbal'),
(74, 33, 'a009', 'Cholera, unspecified', '2019-12-15 17:12:28', NULL, 'Sudah Koding', 'aws', 'Iqbal', ''),
(75, 33, 'a001', 'Other gastroenteritis and colitis of infectious an', '2019-12-15 17:13:11', NULL, 'Sudah Koding', 'asd', 'Iqbal', 'romli');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(50) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `no_telp`) VALUES
(1, 'Agastya', '-'),
(2, 'Pandu', '-'),
(3, 'Satriya', '-');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_diagnosa`
--

CREATE TABLE `jenis_diagnosa` (
  `id_jenis_diagnosa` int(11) NOT NULL,
  `kode_diagnosa` varchar(50) DEFAULT NULL,
  `nama_diagnosa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_diagnosa`
--

INSERT INTO `jenis_diagnosa` (`id_jenis_diagnosa`, `kode_diagnosa`, `nama_diagnosa`) VALUES
(1, 'A1', 'Diagnosa 1'),
(2, 'A2', 'Diagnosa 2'),
(3, 'A3', 'Diagnosa 3'),
(4, 'A4', 'Diagnosa 4'),
(6, 'A00', 'Cholera'),
(7, 'A000', 'Cholera due to Vibrio cholerae 01, biovar cholerae'),
(8, 'A001', 'Cholera due to Vibrio cholerae 01, biovar eltor'),
(9, 'A009', 'Cholera, unspecified'),
(10, 'A01', 'Typhoid and paratyphoid fevers'),
(11, 'A010', 'Typhoid fever'),
(12, 'A011', 'Paratyphoid fever A'),
(13, 'A012', 'Paratyphoid fever B'),
(14, 'A013', 'Paratyphoid fever C'),
(15, 'A014', 'Paratyphoid fever, unspecified'),
(16, 'A02', 'Other salmonella infections'),
(17, 'A020', 'Salmonella enteritis'),
(18, 'A021', 'Salmonella sepsis'),
(19, 'A022', 'Localized salmonella infections'),
(20, 'A028', 'Other specified salmonella infections'),
(21, 'A029', 'Salmonella infection, unspecified'),
(22, 'A03', 'Shigellosis'),
(23, 'A030', 'Shigellosis due to Shigella dysenteriae'),
(24, 'A031', 'Shigellosis due to Shigella flexneri'),
(25, 'A032', 'Shigellosis due to Shigella boydii'),
(26, 'A033', 'Shigellosis due to Shigella sonnei'),
(27, 'A038', 'Other shigellosis'),
(28, 'A039', 'Shigellosis, unspecified'),
(29, 'A04', 'Other bacterial intestinal infections'),
(30, 'A040', 'Enteropathogenic Escherichia coli infection'),
(31, 'A041', 'Enterotoxigenic Escherichia coli infection'),
(32, 'A042', 'Enteroinvasive Escherichia coli infection'),
(33, 'A043', 'Enterohaemorrhagic Escherichia coli infection'),
(34, 'A044', 'Other intestinal Escherichia coli infections'),
(35, 'A045', 'Campylobacter enteritis'),
(36, 'A046', 'Enteritis due to Yersinia enterocolitica'),
(37, 'A047', 'Enterocolitis due to Clostridium difficile'),
(38, 'A048', 'Other specified bacterial intestinal infections'),
(39, 'A049', 'Bacterial intestinal infection, unspecified'),
(40, 'A05', 'Other bacterial foodborne intoxications, not elsew'),
(41, 'A050', 'Foodborne staphylococcal intoxication'),
(42, 'A051', 'Botulism'),
(43, 'A052', 'Foodborne Clostridium perfringens [Clostridium wel'),
(44, 'A053', 'Foodborne Vibrio parahaemolyticus intoxication'),
(45, 'A054', 'Foodborne Bacillus cereus intoxication'),
(46, 'A058', 'Other specified bacterial foodborne intoxications'),
(47, 'A059', 'Bacterial foodborne intoxication, unspecified'),
(48, 'A06', 'Amoebiasis'),
(49, 'A060', 'Acute amoebic dysentery'),
(50, 'A061', 'Chronic intestinal amoebiasis'),
(51, 'A062', 'Amoebic nondysenteric colitis'),
(52, 'A063', 'Amoeboma of intestine'),
(53, 'A064', 'Amoebic liver abscess'),
(54, 'A065', 'Amoebic lung abscess'),
(55, 'A066', 'Amoebic brain abscess'),
(56, 'A067', 'Cutaneous amoebiasis'),
(57, 'A068', 'Amoebic infection of other sites'),
(58, 'A069', 'Amoebiasis, unspecified'),
(59, 'A07', 'Other protozoal intestinal diseases'),
(60, 'A070', 'Balantidiasis'),
(61, 'A071', 'Giardiasis [lambliasis]'),
(62, 'A072', 'Cryptosporidiosis'),
(63, 'A073', 'Isosporiasis'),
(64, 'A078', 'Other specified protozoal intestinal diseases'),
(65, 'A079', 'Protozoal intestinal disease, unspecified'),
(66, 'A08', 'Viral and other specified intestinal infections'),
(67, 'A080', 'Rotaviral enteritis'),
(68, 'A081', 'Acute gastroenteropathy due to Norwalk agent'),
(69, 'A082', 'Adenoviral enteritis'),
(70, 'A083', 'Other viral enteritis'),
(71, 'A084', 'Viral intestinal infection, unspecified'),
(72, 'A085', 'Other specified intestinal infections'),
(73, 'A09', 'Other gastroenteritis and colitis of infectious an'),
(74, 'A090', 'Other and unspecified gastroenteritis and colitis '),
(75, 'A099', 'Gastroenteritis and colitis of unspecified origin'),
(76, 'A15', 'Respiratory tuberculosis, bacteriologically and hi'),
(77, 'A150', 'Tuberculosis of lung, confirmed by sputum microsco'),
(78, 'A151', 'Tuberculosis of lung, confirmed by culture only'),
(79, 'A152', 'Tuberculosis of lung, confirmed histologically'),
(80, 'A153', 'Tuberculosis of lung, confirmed by unspecified mea'),
(81, 'A154', 'Tuberculosis of intrathoracic lymph nodes, confirm'),
(82, 'A155', 'Tuberculosis of larynx, trachea and bronchus, conf'),
(83, 'A156', 'Tuberculous pleurisy, confirmed bacteriologically '),
(84, 'A157', 'Primary respiratory tuberculosis, confirmed bacter'),
(85, 'A158', 'Other respiratory tuberculosis, confirmed bacterio'),
(86, 'A159', 'Respiratory tuberculosis unspecified, confirmed ba'),
(87, 'A16', 'Respiratory tuberculosis, not confirmed bacteriolo'),
(88, 'A160', 'Tuberculosis of lung, bacteriologically and histol'),
(89, 'A161', 'Tuberculosis of lung, bacteriological and histolog'),
(90, 'A162', 'Tuberculosis of lung, without mention of bacteriol'),
(91, 'A163', 'Tuberculosis of intrathoracic lymph nodes, without'),
(92, 'A164', 'Tuberculosis of larynx, trachea and bronchus, with'),
(93, 'A165', 'Tuberculous pleurisy, without mention of bacteriol'),
(94, 'A167', 'Primary respiratory tuberculosis without mention o'),
(95, 'A168', 'Other respiratory tuberculosis, without mention of'),
(96, 'A169', 'Respiratory tuberculosis unspecified, without ment'),
(97, 'A17', 'Tuberculosis of nervous system'),
(98, 'A170', 'Tuberculous meningitis'),
(99, 'A171', 'Meningeal tuberculoma'),
(100, 'A178', 'Other tuberculosis of nervous system'),
(101, 'A179', 'Tuberculosis of nervous system, unspecified'),
(102, 'A18', 'Tuberculosis of other organs'),
(103, 'A180', 'Tuberculosis of bones and joints'),
(104, 'A181', 'Tuberculosis of genitourinary system'),
(105, 'A182', 'Tuberculous peripheral lymphadenopathy'),
(106, 'A183', 'Tuberculosis of intestines, peritoneum and mesente'),
(107, 'A184', 'Tuberculosis of skin and subcutaneous tissue'),
(108, 'A185', 'Tuberculosis of eye'),
(109, 'A186', 'Tuberculosis of ear'),
(110, 'A187', 'Tuberculosis of adrenal glands'),
(111, 'A188', 'Tuberculosis of other specified organs'),
(112, 'A19', 'Miliary tuberculosis'),
(113, 'A190', 'Acute miliary tuberculosis of a single specified s'),
(114, 'A191', 'Acute miliary tuberculosis of multiple sites'),
(115, 'A192', 'Acute miliary tuberculosis, unspecified'),
(116, 'A198', 'Other miliary tuberculosis'),
(117, 'A199', 'Miliary tuberculosis, unspecified'),
(118, 'A20', 'Plague'),
(119, 'A200', 'Bubonic plague'),
(120, 'A201', 'Cellulocutaneous plague'),
(121, 'A202', 'Pneumonic plague'),
(122, 'A203', 'Plague meningitis'),
(123, 'A207', 'Septicaemic plague'),
(124, 'A208', 'Other forms of plague'),
(125, 'A209', 'Plague, unspecified'),
(126, 'A21', 'Tularaemia'),
(127, 'A210', 'Ulceroglandular tularaemia'),
(128, 'A211', 'Oculoglandular tularaemia'),
(129, 'A212', 'Pulmonary tularaemia'),
(130, 'A213', 'Gastrointestinal tularaemia'),
(131, 'A217', 'Generalized tularaemia'),
(132, 'A218', 'Other forms of tularaemia'),
(133, 'A219', 'Tularaemia, unspecified'),
(134, 'A22', 'Anthrax'),
(135, 'A220', 'Cutaneous anthrax'),
(136, 'A221', 'Pulmonary anthrax'),
(137, 'A222', 'Gastrointestinal anthrax'),
(138, 'A227', 'Anthrax sepsis'),
(139, 'A228', 'Other forms of anthrax'),
(140, 'A229', 'Anthrax, unspecified'),
(141, 'A23', 'Brucellosis'),
(142, 'A230', 'Brucellosis due to Brucella melitensis'),
(143, 'A231', 'Brucellosis due to Brucella abortus'),
(144, 'A232', 'Brucellosis due to Brucella suis'),
(145, 'A233', 'Brucellosis due to Brucella canis'),
(146, 'A238', 'Other brucellosis'),
(147, 'A239', 'Brucellosis, unspecified'),
(148, 'A24', 'Glanders and melioidosis'),
(149, 'A240', 'Glanders'),
(150, 'A241', 'Acute and fulminating melioidosis'),
(151, 'A242', 'Subacute and chronic melioidosis'),
(152, 'A243', 'Other melioidosis'),
(153, 'A244', 'Melioidosis, unspecified'),
(154, 'A25', 'Rat-bite fevers'),
(155, 'A250', 'Spirillosis'),
(156, 'A251', 'Streptobacillosis'),
(157, 'A259', 'Rat-bite fever, unspecified'),
(158, 'A26', 'Erysipeloid'),
(159, 'A260', 'Cutaneous erysipeloid'),
(160, 'A267', 'Erysipelothrix sepsis'),
(161, 'A268', 'Other forms of erysipeloid'),
(162, 'A269', 'Erysipeloid, unspecified'),
(163, 'A27', 'Leptospirosis'),
(164, 'A270', 'Leptospirosis icterohaemorrhagica'),
(165, 'A278', 'Other forms of leptospirosis'),
(166, 'A279', 'Leptospirosis, unspecified'),
(167, 'A28', 'Other zoonotic bacterial diseases, not elsewhere c'),
(168, 'A280', 'Pasteurellosis'),
(169, 'A281', 'Cat-scratch disease'),
(170, 'A282', 'Extraintestinal yersiniosis'),
(171, 'A288', 'Other specified zoonotic bacterial diseases, not e'),
(172, 'A289', 'Zoonotic bacterial disease, unspecified'),
(173, 'A30', 'Leprosy [Hansen disease]'),
(174, 'A300', 'Indeterminate leprosy'),
(175, 'A301', 'Tuberculoid leprosy'),
(176, 'A302', 'Borderline tuberculoid leprosy'),
(177, 'A303', 'Borderline leprosy'),
(178, 'A304', 'Borderline lepromatous leprosy'),
(179, 'A305', 'Lepromatous leprosy'),
(180, 'A308', 'Other forms of leprosy'),
(181, 'A309', 'Leprosy, unspecified'),
(182, 'A31', 'Infection due to other mycobacteria'),
(183, 'A310', 'Pulmonary mycobacterial infection'),
(184, 'A311', 'Cutaneous mycobacterial infection'),
(185, 'A318', 'Other mycobacterial infections'),
(186, 'A319', 'Mycobacterial infection, unspecified'),
(187, 'A32', 'Listeriosis'),
(188, 'A320', 'Cutaneous listeriosis'),
(189, 'A321', 'Listerial meningitis and meningoencephalitis'),
(190, 'A327', 'Listerial sepsis'),
(191, 'A328', 'Other forms of listeriosis'),
(192, 'A329', 'Listeriosis, unspecified'),
(193, 'A33', 'Tetanus neonatorum'),
(194, 'A34', 'Obstetrical tetanus'),
(195, 'A35', 'Other tetanus'),
(196, 'A36', 'Diphtheria'),
(197, 'A360', 'Pharyngeal diphtheria'),
(198, 'A361', 'Nasopharyngeal diphtheria'),
(199, 'A362', 'Laryngeal diphtheria'),
(200, 'A363', 'Cutaneous diphtheria'),
(201, 'A368', 'Other diphtheria'),
(202, 'A369', 'Diphtheria, unspecified'),
(203, 'A37', 'Whooping cough'),
(204, 'A370', 'Whooping cough due to Bordetella pertussis');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `nama_kecamatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `id_kota`, `nama_kecamatan`) VALUES
(2, 1, 'BANDUNG KULON'),
(3, 1, 'BABAKAN CIPARAY'),
(4, 1, 'BOJONGLOA KALER'),
(5, 1, 'BOJONGLOA KIDUL'),
(6, 1, 'ASTANAANYAR'),
(7, 1, 'REGOL'),
(8, 1, 'LENGKONG'),
(9, 1, 'BANDUNG KIDUL'),
(10, 1, 'BUAHBATU'),
(11, 1, 'RANCASARI'),
(12, 1, 'GEDEBAGE'),
(13, 1, 'CIBIRU'),
(14, 1, 'PANYILEUKAN'),
(15, 1, 'UJUNG BERUNG'),
(16, 1, 'CINAMBO'),
(17, 1, 'ARCAMANIK'),
(18, 1, 'ANTAPANI'),
(19, 1, 'MANDALAJATI'),
(20, 1, 'KIARACONDONG'),
(21, 1, 'BANDUNG KULON'),
(22, 1, 'BABAKAN CIPARAY'),
(23, 1, 'BOJONGLOA KALER'),
(24, 1, 'BOJONGLOA KIDUL'),
(25, 1, 'ASTANAANYAR'),
(26, 1, 'REGOL'),
(27, 1, 'LENGKONG'),
(28, 1, 'BANDUNG KIDUL'),
(29, 1, 'BUAHBATU'),
(30, 1, 'RANCASARI'),
(31, 1, 'GEDEBAGE'),
(52, 2, 'CIWIDEY'),
(53, 2, 'RANCABALI'),
(54, 2, 'PASIRJAMBU'),
(55, 2, 'CIMAUNG'),
(56, 2, 'PANGALENGAN'),
(57, 2, 'KERTASARI'),
(58, 2, 'PACET'),
(59, 2, 'IBUN'),
(60, 2, 'PASEH'),
(61, 2, 'CIKANCUNG'),
(62, 2, 'CICALENGKA'),
(63, 2, 'NAGREG'),
(64, 2, 'RANCAEKEK'),
(65, 2, 'MAJALAYA'),
(66, 2, 'SOLOKAN JERUK'),
(67, 2, 'CIPARAY'),
(68, 2, 'BALEENDAH'),
(69, 2, 'ARJASARI'),
(70, 2, 'BANJARAN'),
(71, 2, 'CANGKUANG'),
(72, 2, 'PAMEUNGPEUK'),
(73, 2, 'KATAPANG'),
(74, 2, 'SOREANG'),
(75, 2, 'KUTAWARINGIN'),
(76, 2, 'MARGAASIH'),
(77, 2, 'MARGAHAYU'),
(78, 2, 'DAYEUHKOLOT'),
(79, 2, 'BOJONGSOANG'),
(80, 2, 'CILEUNYI'),
(81, 2, 'CILENGKRANG'),
(82, 2, 'CIMENYAN');

-- --------------------------------------------------------

--
-- Table structure for table `kedatangan`
--

CREATE TABLE `kedatangan` (
  `id_kedatangan` int(11) NOT NULL,
  `jenis_kedatangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kedatangan`
--

INSERT INTO `kedatangan` (`id_kedatangan`, `jenis_kedatangan`) VALUES
(1, 'Kloter'),
(2, 'sektor'),
(3, 'KKHI JEDAH'),
(4, 'KKHI MADINAH'),
(5, 'KKHI MEKAH'),
(6, 'Datang Sendiri');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `id_kecamatan` int(11) DEFAULT NULL,
  `nama_kelurahan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `id_kecamatan`, `nama_kelurahan`) VALUES
(2, 2, 'GEMPOL SARI'),
(3, 2, 'CIGONDEWAH KALER'),
(4, 2, 'CIGONDEWAH KIDUL'),
(5, 2, 'CIGONDEWAH RAHAYU'),
(6, 2, 'CARINGIN'),
(7, 2, 'WARUNG MUNCANG'),
(8, 2, 'CIBUNTU'),
(9, 2, 'CIJERAH'),
(10, 3, 'MARGASUKA'),
(11, 3, 'CIRANGRANG'),
(12, 3, 'MARGAHAYU UTARA'),
(13, 3, 'BABAKAN CIPARAY'),
(14, 3, 'BABAKAN'),
(15, 3, 'SUKAHAJI'),
(16, 4, 'KOPO'),
(17, 4, 'SUKA ASIH'),
(18, 4, 'BABAKAN ASIH'),
(19, 4, 'BABAKAN TAROGONG'),
(20, 4, 'JAMIKA'),
(21, 5, 'CIBADUYUT KIDUL'),
(22, 5, 'CIBADUYUT WETAN'),
(23, 5, 'MEKAR WANGI'),
(24, 5, 'CIBADUYUT'),
(25, 5, 'KEBON LEGA'),
(26, 5, 'SITUSAEUR'),
(27, 6, 'KARASAK'),
(28, 6, 'PELINDUNG HEWAN'),
(29, 6, 'PANJUNAN'),
(30, 6, 'CIBADAK'),
(31, 6, 'KARANG ANYAR'),
(32, 7, 'CISEUREUH'),
(33, 7, 'PASIRLUYU'),
(34, 7, 'ANCOL'),
(35, 7, 'CIGERELENG'),
(36, 7, 'CIATEUL'),
(37, 7, 'BALONG GEDE'),
(38, 8, 'CIJAGRA'),
(39, 8, 'TURANGGA'),
(40, 8, 'LINGKAR SELATAN'),
(41, 8, 'MALABAR'),
(42, 8, 'BURANGRANG'),
(43, 8, 'CIKAWAO'),
(44, 8, 'PALEDANG'),
(45, 9, 'WATES'),
(46, 9, 'BATUNUNGGAL'),
(47, 9, 'KUJANGSARI'),
(48, 10, 'CIJAURA'),
(49, 10, 'MARGASARI'),
(50, 10, 'SEKEJATI'),
(51, 10, 'JATI SARI'),
(52, 11, 'DERWATI'),
(53, 11, 'CIPAMOKOLAN'),
(54, 11, 'MANJAHLEGA'),
(55, 11, 'MEKARJAYA'),
(56, 12, 'RANCABOLANG'),
(57, 12, 'RANCANUMPANG'),
(58, 12, 'CISARANTEN KIDUL'),
(59, 12, 'CIMINCRANG'),
(60, 13, 'PASIR BIRU'),
(61, 13, 'CIPADUNG'),
(62, 13, 'PALASARI'),
(63, 13, 'CISURUPAN'),
(64, 14, 'MEKAR MULYA'),
(65, 14, 'CIPADUNG KIDUL'),
(66, 14, 'CIPADUNG WETAN'),
(67, 14, 'CIPADUNG KULON'),
(68, 15, 'PASANGGRAHAN'),
(69, 15, 'PASIRJATI'),
(70, 15, 'PASIR WANGI'),
(71, 15, 'CIGENDING'),
(72, 15, 'PASIR ENDAH'),
(73, 16, 'CISARANTEN WETAN'),
(74, 16, 'BABAKAN PENGHULU'),
(75, 16, 'PAKEMITAN'),
(76, 16, 'SUKAMULYA'),
(77, 17, 'CISARANTEN KULON'),
(78, 17, 'CISARANTEN BINA HARAPAN'),
(79, 17, 'SUKAMISKIN'),
(80, 17, 'CISARANTEN ENDAH'),
(81, 18, 'ANTAPANI KIDUL'),
(82, 18, 'ANTAPANI TENGAH'),
(83, 18, 'ANTAPANI WETAN'),
(84, 18, 'ANTAPANI KULON'),
(85, 19, 'JATIHANDAP'),
(86, 19, 'KARANG PAMULANG'),
(87, 19, 'SINDANG JAYA'),
(88, 19, 'PASIR IMPUN'),
(89, 20, 'KEBON KANGKUNG'),
(90, 20, 'SUKAPURA'),
(91, 20, 'KEBUN JAYANTI'),
(92, 20, 'BABAKAN SARI'),
(93, 20, 'BABAKAN SURABAYA'),
(94, 20, 'CICAHEUM'),
(95, 21, 'BINONG'),
(96, 21, 'KEBON GEDANG'),
(97, 21, 'MALEER'),
(98, 21, 'CIBANGKONG'),
(99, 21, 'SAMOJA'),
(100, 21, 'KACAPIRING'),
(101, 21, 'KEBON WARU'),
(102, 22, 'BRAGA'),
(103, 22, 'KEBON PISANG'),
(104, 22, 'MERDEKA'),
(105, 22, 'BABAKAN CIAMIS'),
(106, 23, 'CAMPAKA'),
(107, 23, 'MALEBER'),
(108, 23, 'GARUDA'),
(109, 23, 'DUNGUS CARIANG'),
(110, 23, 'CIROYOM'),
(111, 23, 'KEBON JERUK'),
(112, 24, 'ARJUNA'),
(113, 24, 'PASIRKALIKI'),
(114, 24, 'PAMOYANAN'),
(115, 24, 'PAJAJARAN'),
(116, 24, 'HUSEN SASTRANEGARA'),
(117, 24, 'SUKARAJA'),
(118, 25, 'TAMAN SARI'),
(119, 25, 'CITARUM'),
(120, 25, 'CIHAPIT'),
(121, 26, 'SUKAMAJU'),
(122, 26, 'CICADAS'),
(123, 26, 'CIKUTRA'),
(124, 26, 'PADASUKA'),
(125, 26, 'PASIRLAYUNG'),
(126, 26, 'SUKAPADA'),
(127, 27, 'CIHAURGEULIS'),
(128, 27, 'SUKALUYU'),
(129, 27, 'NEGLASARI'),
(130, 27, 'CIGADUNG'),
(131, 28, 'CIPAGANTI'),
(132, 28, 'LEBAK SILIWANGI'),
(133, 28, 'LEBAK GEDE'),
(134, 28, 'SADANG SERANG'),
(135, 28, 'SEKELOA'),
(136, 28, 'DAGO'),
(137, 29, 'SUKAWARNA'),
(138, 29, 'SUKAGALIH'),
(139, 29, 'SUKABUNGAH'),
(140, 29, 'CIPEDES'),
(141, 29, 'PASTEUR'),
(142, 30, 'SARIJADI'),
(143, 30, 'SUKARASA'),
(144, 30, 'GEGERKALONG'),
(145, 30, 'ISOLA'),
(146, 31, 'HEGARMANAH'),
(147, 31, 'CIUMBULEUIT'),
(148, NULL, NULL),
(149, 51, 'PANUNDAAN'),
(150, 51, 'CIWIDEY'),
(151, 51, 'PANYOCOKAN'),
(152, 51, 'LEBAKMUNCANG'),
(153, 51, 'RAWABOGO'),
(154, 51, 'NENGKELAN'),
(155, 51, 'SUKAWENING'),
(156, 52, 'CIPELAH'),
(157, 52, 'SUKARESMI'),
(158, 52, 'INDRAGIRI'),
(159, 52, 'PATENGAN'),
(160, 52, 'ALAMENDAH'),
(161, 53, 'SUGIHMUKTI'),
(162, 53, 'MARGAMULYA'),
(163, 53, 'TENJOLAYA'),
(164, 53, 'CISONDARI'),
(165, 53, 'MEKARSARI'),
(166, 53, 'CIBODAS'),
(167, 53, 'CUKANGGENTENG'),
(168, 53, 'PASIRJAMBU'),
(169, 53, 'MEKARMAJU'),
(170, 53, 'CIKONENG'),
(171, 54, 'CIKALONG'),
(172, 54, 'MEKARSARI'),
(173, 54, 'CIPINANG'),
(174, 54, 'CIMAUNG'),
(175, 54, 'CAMPAKAMULYA'),
(176, 54, 'PASIRHUNI'),
(177, 54, 'JAGABAYA'),
(178, 54, 'MALASARI'),
(179, 54, 'SUKAMAJU'),
(180, 54, 'WARJABAKTI'),
(181, 55, 'WANASUKA'),
(182, 55, 'BANJARSARI'),
(183, 55, 'MARGALUYU'),
(184, 55, 'SUKALUYU'),
(185, 55, 'WARNASARI'),
(186, 55, 'PULOSARI'),
(187, 55, 'MARGAMEKAR'),
(188, 55, 'SUKAMANAH'),
(189, 55, 'MARGAMUKTI'),
(190, 55, 'PANGALENGAN'),
(191, 55, 'MARGAMULYA'),
(192, 55, 'TRIBAKTIMULYA'),
(193, 55, 'LAMAJANG'),
(194, 56, 'NEGLAWANGI'),
(195, 56, 'SANTOSA'),
(196, 56, 'TARUMAJAYA'),
(197, 56, 'CIKEMBANG'),
(198, 56, 'CIBEUREUM'),
(199, 56, 'CIHAWUK'),
(200, 56, 'SUKAPURA'),
(201, 56, 'RESMI TINGGAL'),
(202, 57, 'CIKITU'),
(203, 57, 'GIRIMULYA'),
(204, 57, 'SUKARAME'),
(205, 57, 'CIKAWAO'),
(206, 57, 'NAGRAK'),
(207, 57, 'MANDALAHAJI'),
(208, 57, 'MARUYUNG'),
(209, 57, 'PANGAUBAN'),
(210, 57, 'CINANGGELA'),
(211, 57, 'MEKARJAYA'),
(212, 57, 'MEKARSARI'),
(213, 57, 'CIPEUJEUH'),
(214, 57, 'TANJUNGWANGI'),
(215, 58, 'NEGLASARI'),
(216, 58, 'IBUN'),
(217, 58, 'LAKSANA'),
(218, 58, 'MEKARWANGI'),
(219, 58, 'SUDI'),
(220, 58, 'CIBEET'),
(221, 58, 'PANGGUH'),
(222, 58, 'KARYALAKSANA'),
(223, 58, 'LAMPEGAN'),
(224, 58, 'TALUN'),
(225, 58, 'TANGGULUN'),
(226, 59, 'LOA'),
(227, 59, 'DRAWATI'),
(228, 59, 'CIPAKU'),
(229, 59, 'SINDANGSARI'),
(230, 59, 'SUKAMANTRI'),
(231, 59, 'SUKAMANAH'),
(232, 59, 'MEKARPAWITAN'),
(233, 59, 'CIJAGRA'),
(234, 59, 'TANGSIMEKAR'),
(235, 59, 'CIPEDES'),
(236, 59, 'KARANGTUNGGAL'),
(237, 59, 'CIGENTUR'),
(238, 60, 'SRIRAHAYU'),
(239, 60, 'CILULUK'),
(240, 60, 'MEKARLAKSANA'),
(241, 60, 'CIHANYIR'),
(242, 60, 'CIKANCUNG'),
(243, 60, 'MANDALASARI'),
(244, 60, 'HEGARMANAH'),
(245, 60, 'CIKASUNGKA'),
(246, 60, 'TANJUNGLAYA'),
(247, 61, 'NAGROG'),
(248, 61, 'NARAWITA'),
(249, 61, 'MARGAASIH'),
(250, 61, 'CICALENGKA WETAN'),
(251, 61, 'CIKUYA'),
(252, 61, 'WALUYA'),
(253, 61, 'PANENJOAN'),
(254, 61, 'TENJOLAYA'),
(255, 61, 'CICALENGKA KULON'),
(256, 61, 'BABAKANPEUTEUY'),
(257, 61, 'DAMPIT'),
(258, 61, 'TANJUNGWANGI'),
(259, 62, 'MANDALAWANGI'),
(260, 62, 'BOJONG'),
(261, 62, 'CIHERANG'),
(262, 62, 'CIARO'),
(263, 62, 'NAGREG'),
(264, 62, 'CITAMAN'),
(265, 62, 'NAGREG KENDAN'),
(266, 62, 'GANJAR SABAR'),
(267, 63, 'SUKAMANAH'),
(268, 63, 'TEGALSUMEDANG'),
(269, 63, 'RANCAEKEK KULON'),
(270, 63, 'RANCAEKEK WETAN'),
(271, 63, 'BOJONGLOA'),
(272, 63, 'JELEGONG'),
(273, 63, 'LINGGAR'),
(274, 63, 'SUKAMULYA'),
(275, 63, 'HAURPUGUR'),
(276, 63, 'SANGIANG'),
(277, 63, 'BOJONGSALAM'),
(278, 63, 'CANGKUANG'),
(279, 63, 'NANJUNGMEKAR'),
(280, 63, 'RANCAEKEK KENCANA'),
(281, 64, 'NEGLASARI'),
(282, 64, 'WANGISAGARA'),
(283, 64, 'PADAMULYA'),
(284, 64, 'SUKAMUKTI'),
(285, 64, 'PADAULUN'),
(286, 64, 'BIRU'),
(287, 64, 'SUKAMAJU'),
(288, 64, 'MAJASETRA'),
(289, 64, 'MAJALAYA'),
(290, 64, 'MAJAKERTA'),
(291, 64, 'BOJONG'),
(292, 65, 'PANYADAP'),
(293, 65, 'PADAMUKTI'),
(294, 65, 'CIBODAS'),
(295, 65, 'LANGENSARI'),
(296, 65, 'SOLOKANJERUK'),
(297, 65, 'RANCAKASUMBA'),
(298, 65, 'BOJONGEMAS'),
(299, 66, 'BABAKAN'),
(300, 66, 'CIKONENG'),
(301, 66, 'SIGARACIPTA'),
(302, 66, 'PAKUTANDANG'),
(303, 66, 'MANGGUNGHARJA'),
(304, 66, 'MEKARSARI'),
(305, 66, 'CIPARAY'),
(306, 66, 'SUMBERSARI'),
(307, 66, 'SARIMAHI'),
(308, 66, 'SERANGMEKAR'),
(309, 66, 'GUNUNGLEUTIK'),
(310, 66, 'CIHEULANG'),
(311, 66, 'MEKARLAKSANA'),
(312, 66, 'BUMIWANGI'),
(313, 67, 'JELEKONG'),
(314, 67, 'MANGGAHANG'),
(315, 67, 'BALEENDAH'),
(316, 67, 'ANDIR'),
(317, 67, 'MALAKASARI'),
(318, 67, 'BOJONGMALAKA'),
(319, 67, 'RANCAMANYAR'),
(320, 67, 'WARGAMEKAR'),
(321, 68, 'BATUKARUT'),
(322, 68, 'MANGUNJAYA'),
(323, 68, 'MEKARJAYA'),
(324, 68, 'BAROS'),
(325, 68, 'LEBAKWANGI'),
(326, 68, 'WARGALUYU'),
(327, 68, 'ARJASARI'),
(328, 68, 'PINGGIRSARI'),
(329, 68, 'PATROLSARI'),
(330, 68, 'RANCAKOLE'),
(331, 68, 'ANCOLMEKAR'),
(332, 69, 'MEKARJAYA'),
(333, 69, 'BANJARAN WETAN'),
(334, 69, 'CIAPUS'),
(335, 69, 'SINDANGPANON'),
(336, 69, 'NEGLASARI'),
(337, 69, 'MARGAHURIP'),
(338, 69, 'KIANGROKE'),
(339, 69, 'KAMASAN'),
(340, 69, 'BANJARAN'),
(341, 69, 'TARAJUSARI'),
(342, 69, 'PASIRMULYA'),
(343, 70, 'JATISARI'),
(344, 70, 'NAGRAK'),
(345, 70, 'BANDASARI'),
(346, 70, 'PANANJUNG'),
(347, 70, 'CILUNCAT'),
(348, 70, 'CANGKUANG'),
(349, 70, 'TANJUNGSARI'),
(350, 71, 'BOJONGMANGGU'),
(351, 71, 'LANGONSARI'),
(352, 71, 'SUKASARI'),
(353, 71, 'RANCAMULYA'),
(354, 71, 'RANCATUNGKU'),
(355, 71, 'BOJONGKUNCI'),
(356, 72, 'GANDASARI'),
(357, 72, 'KATAPANG'),
(358, 72, 'CILAMPENI'),
(359, 72, 'PANGAUBAN'),
(360, 72, 'BANYUSARI'),
(361, 72, 'SANGKANHURIP'),
(362, 72, 'SUKAMUKTI'),
(363, 73, 'SADU'),
(364, 73, 'SUKAJADI'),
(365, 73, 'SUKANAGARA'),
(366, 73, 'PANYIRAPAN'),
(367, 73, 'KARAMATMULYA'),
(368, 73, 'SOREANG'),
(369, 73, 'PAMEKARAN'),
(370, 73, 'PARUNGSERAB'),
(371, 73, 'SEKARWANGI'),
(372, 73, 'CINGCIN'),
(373, 74, 'CILAME'),
(374, 74, 'BUNINAGARA'),
(375, 74, 'PADASUKA'),
(376, 74, 'SUKAMULYA'),
(377, 74, 'KUTAWARINGIN'),
(378, 74, 'KOPO'),
(379, 74, 'CIBODAS'),
(380, 74, 'JATISARI'),
(381, 74, 'JELEGONG'),
(382, 74, 'GAJAHMEKAR'),
(383, 74, 'PAMEUNTASAN'),
(384, 75, 'NANJUNG'),
(385, 75, 'MEKAR RAHAYU'),
(386, 75, 'RAHAYU'),
(387, 75, 'CIGONDEWAH HILIR'),
(388, 75, 'MARGAASIH'),
(389, 75, 'LAGADAR'),
(390, 76, 'SULAEMAN'),
(391, 76, 'SUKAMENAK'),
(392, 76, 'SAYATI'),
(393, 76, 'MARGAHAYU SELATAN'),
(394, 76, 'MARGAHAYU TENGAH'),
(395, 77, 'CANGKUANG KULON'),
(396, 77, 'CANGKUANG WETAN'),
(397, 77, 'PASAWAHAN'),
(398, 77, 'DAYEUHKOLOT'),
(399, 77, 'CITEUREUP'),
(400, 77, 'SUKAPURA'),
(401, 78, 'BOJONGSARI'),
(402, 78, 'BOJONGSOANG'),
(403, 78, 'LENGKONG'),
(404, 78, 'CIPAGALO'),
(405, 78, 'BUAHBATU'),
(406, 78, 'TEGALLUAR'),
(407, 79, 'CIBIRU HILIR'),
(408, 79, 'CINUNUK'),
(409, 79, 'CIMEKAR'),
(410, 79, 'CILEUNYI KULON'),
(411, 79, 'CILEUNYI WETAN'),
(412, 79, 'CIBIRU WETAN'),
(413, 80, 'GIRIMEKAR'),
(414, 80, 'JATIENDAH'),
(415, 80, 'MELATIWANGI'),
(416, 80, 'CIPANJALU'),
(417, 80, 'CIPOREAT'),
(418, 80, 'CILENGKRANG'),
(419, 81, 'CIBEUNYING'),
(420, 81, 'PADASUKA'),
(421, 81, 'MANDALAMEKAR'),
(422, 81, 'CIKADUT'),
(423, 81, 'SINDANGLAYA'),
(424, 81, 'MEKARMANIK'),
(425, 81, 'CIMENYAN'),
(426, 81, 'MEKARSALUYU'),
(427, 81, 'CIBURIAL');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `nama_kota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi`, `nama_kota`) VALUES
(1, 1, 'Kota Bandung'),
(2, 1, 'Kab Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_kedatangan` int(11) NOT NULL,
  `no_registrasi` varchar(50) NOT NULL DEFAULT '',
  `no_rekam_medis` varchar(50) NOT NULL DEFAULT '',
  `passport` varchar(50) NOT NULL DEFAULT '',
  `nama_pasien` varchar(90) NOT NULL DEFAULT '',
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `tanggal_keluar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `umur` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `negara` int(11) NOT NULL,
  `provinsi` int(11) NOT NULL,
  `kota` int(11) NOT NULL,
  `kecamatan` int(11) NOT NULL,
  `kelurahan` int(11) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `status` int(11) NOT NULL,
  `golongan_darah` varchar(5) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `tanggal_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_dokterna` varchar(90) NOT NULL,
  `kbbih` varchar(90) NOT NULL,
  `kloter` varchar(90) NOT NULL,
  `status_pasien` int(11) NOT NULL DEFAULT '0',
  `alasan_keluar` int(11) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `id_dokter`, `id_ruangan`, `id_kedatangan`, `no_registrasi`, `no_rekam_medis`, `passport`, `nama_pasien`, `tempat_lahir`, `tanggal_lahir`, `tanggal_masuk`, `jam_masuk`, `tanggal_keluar`, `umur`, `alamat`, `rt`, `rw`, `negara`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `jenis_kelamin`, `status`, `golongan_darah`, `no_hp`, `pendidikan`, `pekerjaan`, `tanggal_input`, `nama_dokterna`, `kbbih`, `kloter`, `status_pasien`, `alasan_keluar`, `keterangan`) VALUES
(22, 0, 10, 1, 'KKHI0912190001', '0001', 'KBBD01', 'Agastya Pandu', 'Bandung', '1999-08-07', '2019-12-09', '09:00:11', '2019-12-17 16:10:52', 20, 'Cibiru', 6, 2, 1, 1, 1, 13, 0, 1, 3, 'o', '089', '3', '4', '2019-12-17 16:10:52', 'Drs Tester', 'Madinah', 'SUB001', 1, 2, 'RSAS MADIHAN'),
(23, 0, 15, 5, 'KKHI0912190002', '0002', 'KBBD02', 'Eka', 'Bandung', '2000-01-01', '2019-12-09', '02:00:00', '2019-12-17 19:00:24', 19, 'Cibiru', 6, 2, 1, 1, 1, 13, 0, 1, 3, 'a', '089', '3', '2', '2019-12-17 19:00:24', 'Drs Tester', 'Mekah', 'SOC003', 0, NULL, NULL),
(24, 0, 14, 4, 'KKHI0912190003', '0003', 'KBBD03', 'Pandu', 'cibiru', '1999-08-07', '2019-12-09', '12:20:23', '2019-12-17 16:11:28', 20, 'Cibiru', 6, 2, 1, 1, 1, 13, 0, 1, 3, 'b', '089', '3', '1', '2019-12-17 16:11:28', 'Drs Tester', 'an nur', 'JKS003', 0, NULL, NULL),
(25, 0, 14, 4, 'KKHI0912190004', '0004', 'KBBD04', 'Putra', 'cibiru', '1999-08-07', '2019-12-09', '05:00:00', '2019-12-17 16:11:30', 20, 'Cibiru', 6, 2, 1, 1, 1, 13, 0, 1, 3, 'b', '089', '3', '1', '2019-12-17 16:11:30', 'Drs Tester', 'an nur', 'JKS004', 0, NULL, NULL),
(26, 0, 14, 4, 'KKHI0912190005', '0005', 'KBBD0123', 'Rejka', 'cibiru', '1999-08-07', '2019-12-09', '08:00:00', '2019-12-17 16:10:57', 20, 'Cibiru', 6, 2, 1, 1, 1, 13, 0, 1, 3, 'b', '089', '3', '1', '2019-12-17 16:10:57', 'Drs Tester', 'Madinah', 'SUB002', 0, NULL, NULL),
(27, 0, 5, 3, 'KKHI0912190006', '0006', 'KBBD06', 'Neng', 'Bandung', '1999-04-04', '2019-12-09', '23:00:00', '2019-12-17 16:11:17', 20, 'Cibiru', 6, 2, 1, 1, 1, 13, 0, 0, 3, 'ab', '089', '3', '4', '2019-12-17 16:11:17', 'Drs Testerr', 'Madinah', 'SUB002', 1, 4, 'KKHI JEDAH'),
(28, 0, 14, 4, 'KKHI0912190007', '0007', 'KBBD04123', 'Anisa', 'cibiru', '1999-08-07', '2019-12-08', '24:00:00', '2019-12-17 16:11:36', 20, 'Cibiru', 6, 2, 1, 1, 1, 13, 0, 0, 3, 'b', '089', '3', '1', '2019-12-17 16:11:36', 'Drs Tester', 'an nur', 'SOC004', 0, NULL, NULL),
(29, 0, 14, 4, 'KKHI0912190008', '0008', 'KBBD0412', 'Elni', 'cibiru', '1999-08-07', '2019-12-07', '12:00:00', '2019-12-17 16:11:31', 20, 'Cibiru', 6, 2, 1, 1, 1, 13, 0, 0, 3, 'b', '089', '3', '1', '2019-12-17 16:11:31', 'Drs Tester', 'an nur', 'SOC005', 0, NULL, NULL),
(30, 0, 18, 5, 'KKHI1112190001', '0009', '0128309', 'Rey', 'Bandung', '1999-10-10', '2019-12-11', '15:00:00', '2019-12-17 19:00:14', 20, 'awdaw', 6, 2, 1, 1, 2, 68, 0, 1, 4, 'b', '1231', '8', '4', '2019-12-17 19:00:14', 'awdwa', 'an nur', 'JKS001', 0, NULL, NULL),
(31, 0, 16, 4, 'KKHI1112190002', '0010', '123', 'Renaldi', 'Bandung', '2000-01-01', '2019-12-11', '14:00:00', '2019-12-17 16:11:33', 19, 'Cibiru', 6, 2, 1, 1, 2, 67, 0, 1, 3, 'b', '1321', '4', '5', '2019-12-17 16:11:33', 'adwa', 'Madinah', 'SOC001', 0, NULL, NULL),
(33, 0, 15, 3, 'KKHI1112190003', '0011', '1231awd', 'Iksan', 'Bandung', '2001-01-30', '2019-12-11', '02:00:00', '2019-12-17 16:11:25', 18, 'awdasdaw', 6, 2, 0, 1, 2, 65, 0, 1, 3, 'a', '21312', '8', '4', '2019-12-17 16:11:25', 'aws education', 'an nur', 'JKS001', 0, NULL, NULL),
(34, 0, 16, 6, 'KKHI1512190009', '001231', 'abcde12', 'Lorme ipsum', 'dolor', '1992-02-11', '2019-12-15', '12:21:00', '2019-12-17 16:11:34', 27, 'Cibiru', 1, 2, 0, 1, 2, 67, 0, 1, 3, 'b', '123', '3', '3', '2019-12-17 16:11:34', 'dr lorem', 'Madinah', 'SOC002', 1, 5, 'Pilih'),
(35, 0, 0, 0, 'Try', 'Try', 'Try', 'Try', 'Try', '0000-00-00', '0000-00-00', '00:00:00', '2019-12-17 19:21:39', 0, 'Try', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '2019-12-17 19:21:39', '', 'Try', 'Try', 0, NULL, NULL),
(36, 0, 0, 0, 'Try', 'Try', 'Try', 'Try', 'Try', '0000-00-00', '0000-00-00', '00:00:00', '2019-12-17 19:21:39', 0, 'Try', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '2019-12-17 19:21:39', '', 'Try', 'Try', 0, NULL, NULL),
(37, 0, 0, 0, 'Try', 'Try', 'Try', 'Try', 'Try', '0000-00-00', '0000-00-00', '00:00:00', '2019-12-17 19:21:39', 0, 'Try', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '2019-12-17 19:21:39', '', 'Try', 'Try', 0, NULL, NULL),
(38, 0, 0, 0, 'Try', 'Try', 'Try', 'Try', 'Try', '0000-00-00', '0000-00-00', '00:00:00', '2019-12-17 19:21:39', 0, 'Try', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '2019-12-17 19:21:39', '', 'Try', 'Try', 0, NULL, NULL),
(39, 0, 0, 0, 'Try', 'Try', 'Try', 'Try', 'Try', '0000-00-00', '0000-00-00', '00:00:00', '2019-12-17 19:21:39', 0, 'Try', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '2019-12-17 19:21:39', '', 'Try', 'Try', 0, NULL, NULL),
(40, 0, 0, 0, 'Try', 'Try', 'Try', 'Try', 'Try', '0000-00-00', '0000-00-00', '00:00:00', '2019-12-17 19:21:39', 0, 'Try', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '2019-12-17 19:21:39', '', 'Try', 'Try', 0, NULL, NULL),
(41, 0, 0, 0, 'Try', 'Try', 'Try', 'Try', 'Try', '0000-00-00', '0000-00-00', '00:00:00', '2019-12-17 19:21:39', 0, 'Try', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '2019-12-17 19:21:39', '', 'Try', 'Try', 0, NULL, NULL),
(42, 0, 0, 0, 'Try', 'Try', 'Try', 'Try', 'Try', '0000-00-00', '0000-00-00', '00:00:00', '2019-12-17 19:21:39', 0, 'Try', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '2019-12-17 19:21:39', '', 'Try', 'Try', 0, NULL, NULL),
(43, 0, 0, 0, 'Try', 'Try', 'Try', 'Try', 'Try', '0000-00-00', '0000-00-00', '00:00:00', '2019-12-17 19:21:39', 0, 'Try', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '2019-12-17 19:21:39', '', 'Try', 'Try', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(1, 'PNS'),
(2, 'Buruh Pabrik'),
(3, 'Ibu Rumah Tangga'),
(4, 'Pelajar'),
(5, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `nama_pendidikan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `nama_pendidikan`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMK/SMA'),
(4, 'D1'),
(5, 'D2'),
(6, 'D3'),
(7, 'S1'),
(8, 'S2'),
(9, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama_ruangan`, `kelas`) VALUES
(1, 'PSIKIATRI WANITA 1', '1'),
(2, 'PSIKIATRI WANITA 2', '2'),
(3, 'PSIKIATRI WANITA 3', '2'),
(4, 'PSIKIATRI WANITA 4', '1'),
(5, 'PSIKIATRI WANITA 5', '1'),
(6, 'PSIKIATRI WANITA 6', '1'),
(7, 'PSIKIATRI WANITA 7', '1'),
(8, 'PSIKIATRI WANITA 8', '2'),
(9, 'PSIKIATRI WANITA 9', '2'),
(10, 'PSIKIATRI WANITA 10', '2'),
(11, 'UMUM PRIA 1', '3'),
(12, 'UMUM PRIA 2', '3'),
(13, 'UMUM PRIA 3', '3'),
(14, 'UMUM PRIA 4', '1'),
(15, 'UMUM PRIA 5', '1'),
(16, 'UMUM PRIA 6', '1'),
(17, 'UMUM PRIA 7', '1'),
(18, 'UMUM PRIA 8', '1'),
(19, 'UMUM PRIA 9', '2'),
(20, 'UMUM PRIA 10', '2'),
(21, 'UMUM WANITA 1', '1'),
(22, 'UMUM WANITA 2', '1'),
(23, 'UMUM WANITA 3', '1'),
(24, 'UMUM WANITA 4', '1'),
(25, 'UMUM WANITA 5', '1'),
(26, 'UMUM WANITA 6', '1'),
(27, 'UMUM WANITA 7', '2'),
(28, 'UMUM WANITA 8', '2'),
(29, 'UMUM WANITA 9', '3'),
(30, 'UMUM WANITA 10', '3'),
(31, 'PSIKIATRI PRIA 1', '2'),
(32, 'PSIKIATRI PRIA 2', '2'),
(33, 'PSIKIATRI PRIA 3', '2'),
(34, 'PSIKIATRI PRIA 4', '2'),
(35, 'PSIKIATRI PRIA 5', '1'),
(36, 'PSIKIATRI PRIA 6', '1'),
(37, 'PSIKIATRI PRIA 7', '1'),
(38, 'PSIKIATRI PRIA 8', '1'),
(39, 'PSIKIATRI PRIA 9', '1'),
(40, 'PSIKIATRI PRIA 10', '1'),
(41, 'PSIKIATRI WANITA 1', '2'),
(42, 'PSIKIATRI WANITA 2', '2'),
(43, 'PSIKIATRI WANITA 3', '1'),
(44, 'PSIKIATRI WANITA 4', '1'),
(45, 'PSIKIATRI WANITA 5', '1'),
(46, 'PSIKIATRI WANITA 6', '1'),
(47, 'PSIKIATRI WANITA 7', '1'),
(48, 'PSIKIATRI WANITA 8', '3'),
(49, 'PSIKIATRI WANITA 9', '3'),
(50, 'PSIKIATRI WANITA 10', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`) VALUES
(1, 'admin', 'admin', 'Iqbal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `jenis_diagnosa`
--
ALTER TABLE `jenis_diagnosa`
  ADD PRIMARY KEY (`id_jenis_diagnosa`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kedatangan`
--
ALTER TABLE `kedatangan`
  ADD PRIMARY KEY (`id_kedatangan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_diagnosa`
--
ALTER TABLE `jenis_diagnosa`
  MODIFY `id_jenis_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `kedatangan`
--
ALTER TABLE `kedatangan`
  MODIFY `id_kedatangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
