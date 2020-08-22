-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 04:07 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orang`
--

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(13) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id`, `nik`, `nama`, `alamat`, `telp`) VALUES
(1, '16350309 8091', 'Aspen', 'Ap #290-4631 Ac St.ATTTTTTTT', '62-203-113-6221'),
(2, '16440315 3382', 'Priscilla', '885-5860 Orci, Ave', '62-464-328-9178'),
(3, '16140721 3048', 'Mason', 'P.O. Box 714, 4312 Fusce St.', '831-9796'),
(4, '16640729 1472', 'Grady', '510-6248 Quam Avenue', '62-530-516-9802'),
(5, '16040919 6581', 'Azalia', '254-2505 Aliquam Rd.', '62-229-526-8085'),
(6, '16070106 3323', 'Brynn', 'P.O. Box 415, 2083 Vestibulum, Rd.', '288-3756'),
(7, '16310420 0609', 'Acton', '114-8151 Dolor Rd.', '62-892-778-5542'),
(8, '16841009 4133', 'Solomon', '903-6195 Mauris. Av.', '62-459-179-1422'),
(9, '16680230 4573', 'Mason', 'Ap #144-8954 Lectus Rd.', '62-328-607-1369'),
(10, '16580414 4474', 'Benedict', 'P.O. Box 534, 1489 Purus. St.', '539-4715'),
(11, '16180219 0239', 'Ryder', '285-2180 Vitae St.', '62-821-142-6957'),
(12, '16431119 1425', 'Charissa', '2128 Metus Rd.', '532-6206'),
(13, '16251008 8145', 'Abraham', 'Ap #999-1618 Sociis Ave', '62-383-229-7553'),
(14, '16970409 2767', 'Knox', 'P.O. Box 802, 463 Magna. Street', '877-6988'),
(15, '16211205 2838', 'Alden', 'P.O. Box 506, 1042 Arcu St.', '690-6963'),
(16, '16060728 7844', 'Clarke', '1051 Tellus Rd.', '632-5910'),
(17, '16740611 0077', 'Stacey', 'P.O. Box 256, 9143 A St.', '327-9435'),
(18, '16481016 9898', 'Cassidy', 'P.O. Box 837, 8059 Sodales Road', '525-4077'),
(19, '16280407 5675', 'Charde', 'P.O. Box 633, 832 Et St.', '952-4053'),
(20, '16181007 8020', 'Howard', 'Ap #510-3949 Velit St.', '887-5797'),
(21, '16231120 6151', 'Isabella', '5192 Adipiscing. Av.', '62-721-750-4732'),
(22, '16600101 5764', 'Ori', '126-6407 Nec Av.', '62-909-272-0551'),
(23, '16581029 0717', 'Lillith', 'Ap #931-1538 Eu Rd.', '682-2303'),
(24, '16891120 9198', 'Samson', 'P.O. Box 398, 7032 Nibh Ave', '225-7573'),
(25, '16840427 2612', 'Matthew', '2241 Vel Avenue', '980-2047'),
(26, '16200902 0765', 'Uriel', 'Ap #797-587 Dictum Avenue', '459-9951'),
(27, '16480114 5907', 'Rogan', 'Ap #783-2274 Sed Road', '610-9643'),
(28, '16400804 8318', 'Courtney', '7978 Phasellus Rd.', '62-748-377-8127'),
(29, '16121110 4532', 'Luke', 'Ap #986-477 Posuere St.', '311-6960'),
(30, '16070504 5292', 'Axel', 'Ap #875-7823 Phasellus Road', '780-8683'),
(31, '16820619 7124', 'Candice', 'P.O. Box 286, 6284 Phasellus St.', '866-4400'),
(32, '16481011 1452', 'Maris', 'P.O. Box 135, 3687 Quisque Ave', '152-2029'),
(33, '16860818 6311', 'Charity', 'P.O. Box 733, 6476 Ultrices, St.', '62-582-420-8803'),
(34, '16890419 5727', 'Ori', 'Ap #821-4393 Accumsan Road', '62-337-827-7258'),
(35, '16310206 0963', 'Noble', 'Ap #237-4946 Lacus Rd.', '62-786-976-8095'),
(36, '16740411 5474', 'Cathleen', '572-2711 At, St.', '62-337-656-0827'),
(37, '16840519 7727', 'Lawrence', 'P.O. Box 224, 6428 Nec Ave', '62-785-712-9513'),
(38, '16361105 1651', 'Grant', 'Ap #496-2309 Orci, Avenue', '62-176-885-5109'),
(39, '16450217 6672', 'Troy', '3023 Sit St.', '62-299-477-7736'),
(40, '16080824 2564', 'Lacey', '698-4542 Eget St.', '101-2426'),
(41, '16560810 7727', 'Carter', 'P.O. Box 649, 4278 Morbi St.', '338-9183'),
(42, '16960814 5083', 'Galvin', '199-4982 Cursus Rd.', '191-9515'),
(43, '16500723 9428', 'Cassandra', '499-8856 Integer St.', '991-5056'),
(44, '16471207 9336', 'Shelly', '1406 Mauris Rd.', '62-552-722-7712'),
(45, '16310319 1627', 'Lacy', 'Ap #870-3399 Ornare, Road', '478-8814'),
(46, '16251212 0789', 'Tanisha', '827-9863 Velit Ave', '62-619-475-5137'),
(47, '16820915 2092', 'Channing', '9645 Cum Rd.', '62-737-641-0268'),
(48, '16930509 3024', 'Otto', 'Ap #385-6120 Metus St.', '149-9772'),
(49, '16110605 4594', 'Sydnee', '5552 Ac, Road', '62-581-183-7670'),
(50, '16091008 9721', 'Xerxes', '534-2750 Neque Av.', '62-472-802-1044'),
(51, '16080218 4234', 'Kelsie', 'Ap #311-7685 Pellentesque Av.', '62-227-705-0892'),
(52, '16060730 5679', 'Brianna', 'Ap #293-8459 Class St.', '833-0659'),
(53, '16450408 7737', 'Kaseem', 'Ap #444-6757 Nisi Av.', '171-4256'),
(54, '16960708 2857', 'Wayne', 'P.O. Box 170, 4846 Id Rd.', '62-286-906-4572'),
(55, '16461026 8197', 'Jarrod', '669-1707 Nunc Avenue', '62-434-647-5478'),
(56, '16950715 1125', 'Uriel', 'P.O. Box 698, 1928 Lorem Rd.', '601-0827'),
(57, '16511102 1548', 'Gwendolyn', '183-4433 Luctus Rd.', '245-6225'),
(58, '16860105 7683', 'Garth', '9672 Pellentesque Avenue', '62-761-360-5065'),
(59, '16260620 8409', 'Odysseus', '750-9423 Nulla Rd.', '62-590-981-4467'),
(60, '16620818 6566', 'Xavier', 'Ap #978-6909 Molestie Street', '807-6801'),
(61, '16550706 2825', 'Heather', 'P.O. Box 156, 4428 Accumsan Av.', '485-9729'),
(62, '16451103 7436', 'Jada', 'Ap #911-6625 Ipsum Rd.', '62-534-686-6605'),
(63, '16850701 9431', 'Zephania', 'Ap #802-1097 Fusce Rd.', '62-642-717-9373'),
(64, '16370927 5154', 'Elmo', '447-1228 Pede Rd.', '180-4665'),
(65, '16230122 3224', 'Callum', '159-5426 Nec St.', '62-433-403-4158'),
(66, '16270509 2217', 'Shafira', 'Ap #543-6681 Arcu. Rd.', '62-110-724-2050'),
(67, '16120822 1331', 'Graiden', '1160 Iaculis Street', '62-613-966-8128'),
(68, '16191124 7839', 'Meghan', 'P.O. Box 435, 2596 Ligula Avenue', '132-6549'),
(69, '16130113 5222', 'Caleb', 'P.O. Box 319, 5506 Non Road', '242-1436'),
(70, '16590720 4589', 'Fleur', 'P.O. Box 899, 7383 Aliquam Rd.', '62-371-175-4669'),
(71, '16750404 7668', 'Evan', '851-8762 Nec St.', '62-726-708-9121'),
(72, '16171007 7007', 'Bevis', 'Ap #630-1951 Curabitur Rd.', '889-0407'),
(73, '16000208 5611', 'Berk', 'Ap #123-5047 Curae; St.', '948-4480'),
(74, '16291230 0486', 'Aristotle', '8200 Ut Rd.', '62-206-846-9367'),
(75, '16611206 0493', 'Ray', '9444 Elementum, Avenue', '105-4173'),
(76, '16110422 7184', 'Felicia', 'Ap #113-8916 Nunc St.', '222-3664'),
(77, '16550829 3080', 'Cody', 'Ap #678-1698 Et, Road', '480-4780'),
(78, '16560121 4587', 'Hanae', 'P.O. Box 784, 6028 In Rd.', '62-287-377-0292'),
(79, '16220517 2170', 'Chandler', '415 Risus, Avenue', '379-1537'),
(80, '16131119 4029', 'Wesley', '565-5092 Lorem Rd.', '62-537-607-6023'),
(81, '16930423 3514', 'Nevada', '1333 Nulla Street', '397-7788'),
(82, '16640721 3484', 'Demetria', '418-8388 Ultricies Road', '62-983-743-7425'),
(83, '16620328 4952', 'Emery', 'Ap #517-4077 Amet Street', '988-3091'),
(84, '16670802 0828', 'Hayden', 'Ap #950-4849 Torquent Ave', '62-786-324-9812'),
(85, '16990117 4962', 'Elijah', 'P.O. Box 884, 1665 Ut, Avenue', '62-428-947-0746'),
(86, '16741112 2737', 'Caesar', 'Ap #152-6031 Ligula Av.', '314-4416'),
(87, '16670605 5172', 'Hedley', '320-2561 Pharetra Av.', '62-787-189-6038'),
(88, '16210302 6825', 'Herrod', 'Ap #654-206 Lacinia Av.', '824-5457'),
(89, '16030115 0181', 'Connor', '1132 Magna, Av.', '797-7669'),
(90, '16010523 3258', 'Phoebe', '512-9365 Iaculis Road', '62-333-285-6947'),
(91, '16610302 1991', 'Nash', 'P.O. Box 918, 5971 Mauris Rd.', '103-9547'),
(92, '16350312 0085', 'Berk', '639-8941 A Avenue', '536-9045'),
(93, '16981213 5532', 'Russell', 'P.O. Box 192, 539 Suscipit Av.', '913-8808'),
(94, '16980801 2802', 'Wayne', 'Ap #381-4568 Tellus. Rd.', '62-371-454-0443'),
(95, '16521229 5546', 'Palmer', 'Ap #361-8045 Eu Rd.', '62-372-924-2565'),
(96, '16590803 9174', 'Daria', '743-3069 Quis Street', '62-742-889-1411'),
(97, '16711117 1968', 'Iola', '263-4421 Scelerisque, Ave', '62-744-845-4973'),
(98, '16450414 5329', 'Leah', 'Ap #324-6199 Sem Ave', '62-203-601-2952'),
(99, '16621104 1170', 'Vielka', '2005 Nibh Rd.', '851-0518'),
(100, '16600304 4770', 'Gloria', '9094 Mauris Road', '62-897-138-8231');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
