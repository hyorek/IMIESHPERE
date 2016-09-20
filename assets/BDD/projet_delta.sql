-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 02:57 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_delta`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id_address` int(11) NOT NULL,
  `street` varchar(50) DEFAULT NULL,
  `street_number` varchar(8) DEFAULT NULL,
  `building` varchar(35) DEFAULT NULL,
  `name` varchar(25) NOT NULL,
  `id_city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id_address`, `street`, `street_number`, `building`, `name`, `id_city`) VALUES
(1, 'Rue du Champ Jacquet', '9', NULL, 'Bar du Champ Jacquet', 1),
(2, 'La Haie Gautrais', NULL, NULL, 'Kart\'expo', 2),
(3, 'rue du Coq en patte', '7 bis', NULL, 'Coq lico', 3),
(4, 'rue qui pique les yeux', '12', NULL, 'Bar de laure thaugraphfe', 6),
(5, 'avenue Kenny Mc Cormic', '13', NULL, 'Bar du mort-vivant', 5),
(6, 'impasse de l\'art nacre', '69', NULL, 'La Poule aux oeuf d\'or', 8),
(7, 'avenue du petit singe', '1', NULL, 'Cinema d\'antoine liegard', 1),
(8, 'rue de Satan', '666', NULL, 'Bar du couloir des morts', 8),
(9, 'rue du Jean Jacquet', '9', NULL, 'Bar du Jean Jacquet', 4),
(10, 'La Haie Dejardin', NULL, NULL, 'Garden party', 7);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id_city` int(11) NOT NULL,
  `city_name` varchar(25) NOT NULL,
  `postal_code` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id_city`, `city_name`, `postal_code`) VALUES
(1, 'Rennes', 35000),
(2, 'Bruz', 35170),
(3, 'Saint-Malo', 35400),
(4, 'Laval', 53000),
(5, 'Nantes', 44000),
(6, 'Vannes', 56000),
(7, 'Quimper', 29000),
(8, 'Vire', 14500);

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `id_registration` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` text,
  `date_start` datetime NOT NULL,
  `date_end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `name`, `description`, `date_start`, `date_end`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus purus eu facilisis mollis. Sed sem magna, hendrerit tempor magna ac, fermentum tempus ex. Ut volutpat tortor ante, quis iaculis felis tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam molestie ultricies elit, et molestie nunc pretium at. Nulla egestas vitae ante eget interdum. Nunc fermentum viverra erat at tincidunt. Morbi tincidunt neque in quam vulputate, sit amet molestie erat mattis. Vestibulum at nisi in dui suscipit gravida. Nulla sed maximus erat. Fusce nibh magna, efficitur quis vulputate quis, luctus ut nibh. Fusce hendrerit lobortis mauris eu hendrerit. Morbi non massa ultrices, ultricies nibh non, dignissim turpis. Curabitur consectetur erat dolor, at iaculis sapien fermentum eget.', '2016-08-19 17:00:00', NULL),
(2, 'Anniv Dereck Daniel', 'Super teuf', '2016-12-21 00:00:00', '2016-12-21 23:59:59'),
(3, 'Chasse à l\'ourpin', 'ou au lapours', '2016-09-20 17:00:00', '2016-09-30 18:00:00'),
(4, 'SQL Challenge', 'SQL challenge database', '2016-08-19 17:00:00', '2016-08-19 18:00:00'),
(5, 'Voyage educatif', 'Disney', '2016-08-19 17:00:00', '2016-08-19 18:00:00'),
(6, 'Bonjoir', 'Un truc', '2016-08-19 17:00:00', '2016-08-19 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_address`
--

CREATE TABLE `event_address` (
  `id_event` int(11) NOT NULL,
  `id_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_type_event`
--

CREATE TABLE `event_type_event` (
  `id_event` int(11) NOT NULL,
  `id_type_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id_grade` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `promotion` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id_grade`, `name`, `promotion`) VALUES
(1, 'GEN', '2016'),
(2, 'ITStart', '2016-2017'),
(3, 'DL', '2016-2017'),
(4, 'ITStart', '2015-2016'),
(5, 'CPCSI', '2016-2017'),
(6, 'CDPNL3', '2016-2017'),
(7, 'CDPNM1', '2016-2017'),
(8, 'RISRL3', '2016-2017'),
(9, 'CPCSI', '2014-2015'),
(10, 'CDPNL3', '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `price`) VALUES
(1, '0.00'),
(2, '3.00'),
(3, '19.99'),
(4, '7.50'),
(5, '13.00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id_registration` int(11) NOT NULL,
  `place` int(11) DEFAULT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime DEFAULT NULL,
  `pre_registration` tinyint(1) DEFAULT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `name`) VALUES
(1, 'administrateur'),
(2, 'adherent'),
(3, 'non-adherent');

-- --------------------------------------------------------

--
-- Table structure for table `type_event`
--

CREATE TABLE `type_event` (
  `id_type_event` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_event`
--

INSERT INTO `type_event` (`id_type_event`, `name`, `description`) VALUES
(1, 'bar', 'glou glou glou glou .... !!!'),
(2, 'karting', 'Mario Kart wiiiiiiiiiiiiiiiiiiiiiiiiiii !!!'),
(3, 'cinema', 'cinécole'),
(4, 'velo', 'Petit rando'),
(5, 'boite de nuit', 'de jour'),
(6, 'LAN', 'Jeux-video'),
(7, 'aquaponey', 'because');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `membership_number` varchar(8) DEFAULT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id_grade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `membership_number`, `firstname`, `lastname`, `email`, `phone`, `password`, `id_grade`) VALUES
(1, NULL, 'dereck', 'daniel', 'daniel.dereck@gmail.com', '0658631306', 'bonjoir', 1),
(2, NULL, 'delphine', 'bourdelle', 'delphine.bourdelle@hotmail.fr', '0625586726', 'nuage', 1),
(3, NULL, 'emeline', 'hourmand', 'shiro-x3@hotmail.fr', '0619601483', 'patate', 1),
(4, NULL, 'maxime', 'theard', 'maxime.theard@gmail.com', '0643975419', 'salut', 1),
(5, NULL, 'maxime', 'gabrielle', 'gabrielle.maxime@gmail.com', '0620145842', 'coucou', 1),
(6, NULL, 'jerome', 'alincourt', 'jerome.alincourt@gmail.com', '0659569508', 'blouge', 1),
(7, NULL, 'jerome', 'pavic', 'jeromepavic@gmail.com', '0634908636', 'bonjoir', 1),
(8, NULL, 'boris', 'drouin', 'boris.drouin@gmail.com', '0663445401', 'salut', 1),
(9, NULL, 'antoine', 'liegard', 'cochondu975@elise.com', '0299360990', 'Ar042Px_xXx_BG', 1),
(10, NULL, 'fabian', 'inial', 'fabien.inial@gmail.com', '0684660729', 'heisenberg', 1),
(11, NULL, 'kevin', 'henkes', 'kevhenkes@gmail.com', '0762762256', 'password', 1),
(12, NULL, 'antoine', 'cronier', 'antoinecronier@github.com', '0606060606', 'pwDfmlmp65dG', NULL),
(13, '13051935', 'Theodore', 'Mitchell', 'neque@Naminterdum.com', '0690325228', 'GAF87UPV2YW', 9),
(14, '29166558', 'Minerva', 'Mayo', 'Duis.gravida.Praesent@convallisconvallisdolor.co.uk', '0368542747', 'RNB15MKS5HC', 4),
(15, '14907640', 'Leila', 'Chan', 'turpis.nec.mauris@ultrices.com', '0616326706', 'XUJ93FAB6FA', 6),
(16, '49895147', 'Kessie', 'Stokes', 'Donec.vitae.erat@anteNuncmauris.org', '0743314127', 'JPO29EIM5GN', 10),
(17, '79118522', 'Darius', 'Hubbard', 'taciti.sociosqu@magnaNam.ca', '0150474968', 'MSP97ZTR7QS', 4),
(18, '86941532', 'Amy', 'Avery', 'tellus@mauris.edu', '0394053458', 'BKR63NRA1WH', 7),
(19, '26631406', 'Rashad', 'Barton', 'volutpat.Nulla.facilisis@tinciduntvehicularisus.net', '0551456715', 'KHY27DWH4OA', 1),
(20, '78471118', 'Wallace', 'Fulton', 'malesuada@ultrices.ca', '0712439338', 'DGL56FFR4RX', 2),
(21, '80713946', 'Branden', 'Mclean', 'montes.nascetur.ridiculus@arcu.org', '0716318886', 'LKS75ROK3CB', 5),
(22, '16444609', 'Brendan', 'Contreras', 'est.congue.a@ipsum.com', '0219076182', 'CEP12OFC0NK', 9),
(23, '11707999', 'Helen', 'Nolan', 'imperdiet.ornare@condimentum.com', '0742488754', 'PHG56GNQ1GX', 4),
(24, '96246693', 'Lawrence', 'Baxter', 'libero@ligulaelit.ca', '0384227887', 'PTZ43TVE2MQ', 8),
(25, '70250397', 'Arden', 'Ray', 'lectus.rutrum.urna@estNunclaoreet.org', '0294448630', 'NGM38WFM7HM', 2),
(26, '35247513', 'Alexandra', 'Langley', 'Fusce@acliberonec.net', '0318056336', 'KLR78YWT5AV', 4),
(27, '67563089', 'Ella', 'Oconnor', 'Morbi.quis.urna@mus.ca', '0780280517', 'GRZ44QBY2PI', 8),
(28, '40151435', 'Vladimir', 'Pratt', 'ornare@Suspendisseacmetus.com', '0168814374', 'SFR13YVR2JI', 2),
(29, '72671483', 'Ariel', 'Warner', 'eget@velarcuCurabitur.com', '0699688700', 'YCC74IOH5NF', 1),
(30, '75185373', 'Dante', 'Atkinson', 'lorem.semper.auctor@Suspendissealiquetmolestie.co.uk', '0795492256', 'RXJ19CGG2QE', 7),
(31, '57278050', 'Amelia', 'Griffith', 'bibendum.sed.est@dictum.co.uk', '0712518953', 'RNW67QAH6XY', 8),
(32, '98371754', 'Kadeem', 'Melton', 'risus.quis.diam@Proin.co.uk', '0422774813', 'ODA87SPA8KQ', 9),
(33, '18135922', 'Lucas', 'Ruiz', 'Integer@Proinvel.edu', '0119609624', 'YRP16EXB1YV', 5),
(34, '81535171', 'Valentine', 'Farley', 'facilisis@utnullaCras.org', '0367930596', 'LGG29HGK8TX', 5),
(35, '14660145', 'Yael', 'Trevino', 'Integer@turpisegestasFusce.com', '0229943544', 'KXR93KRK4ED', 5),
(36, '99951899', 'Oprah', 'Meyers', 'dictum.eleifend.nunc@pedeultrices.com', '0163543057', 'YRN86TOK1FO', 10),
(37, '98027903', 'Felix', 'Willis', 'tempus@lobortis.org', '0811233232', 'GEC16KPR8VO', 6),
(38, '54729979', 'Donovan', 'Vaughn', 'Sed.malesuada.augue@Donec.co.uk', '0412456185', 'MJK74SNG5QH', 8),
(39, '70186987', 'Drew', 'Cooley', 'sagittis@turpisAliquamadipiscing.net', '0982889356', 'YOC31WWW5LJ', 5),
(40, '38300440', 'Melinda', 'Puckett', 'vulputate.mauris@ligula.org', '0553252352', 'OYV31XQC6GE', 1),
(41, '86983759', 'Shannon', 'Sloan', 'tristique.pellentesque.tellus@odioauctorvitae.net', '0734332952', 'MKY57UKA1GS', 9),
(42, '71933312', 'Odysseus', 'Alvarado', 'est.Mauris.eu@pedeCumsociis.net', '0606381499', 'KZP00QXT2QL', 6),
(43, '68919485', 'Neil', 'French', 'Sed.eu@hendreritDonecporttitor.edu', '0897009748', 'KIV09JDL7GV', 10),
(44, '74003089', 'Elton', 'Guy', 'massa@erategettincidunt.co.uk', '0248504208', 'IHR43HXK8PP', 6),
(45, '28677783', 'Belle', 'Webb', 'nonummy@Phasellus.edu', '0274893102', 'KHR65SSP9PB', 7),
(46, '71006231', 'Chanda', 'Schneider', 'risus.Quisque.libero@luctus.net', '0906403724', 'PPO48KXQ2YU', 4),
(47, '78455608', 'Stuart', 'Manning', 'in@mollisnec.net', '0337343887', 'IZJ40OQG3XN', 3),
(48, '77795206', 'Dale', 'Lynn', 'purus.sapien@sit.edu', '0525225939', 'EAX17UHP7EQ', 9),
(49, '56749122', 'Nicholas', 'Schultz', 'eu.elit.Nulla@semegestas.com', '0889010749', 'UVD76AYB6YB', 8),
(50, '73944194', 'Haviva', 'Greer', 'enim.Nunc@Phasellusataugue.co.uk', '0174561299', 'VKK79EJL4AT', 3),
(51, '78004638', 'Jin', 'Kirk', 'ac.turpis@eget.co.uk', '0185269428', 'QXX35GRB6AO', 7),
(52, '41279446', 'Jacob', 'Battle', 'ultrices.a@euismodetcommodo.co.uk', '0598999498', 'EVA65QPM2OY', 8),
(53, '25770098', 'Francesca', 'Talley', 'fermentum.risus.at@dictum.co.uk', '0642167645', 'LQT25PMT9UT', 1),
(54, '30488417', 'Keegan', 'Simon', 'faucibus.lectus@ullamcorper.net', '0270945091', 'AVY45NWH8CO', 6),
(55, '14210670', 'Cooper', 'Booker', 'mi.lorem@nullaDonec.org', '0695672206', 'ZOF16ZDH7HB', 5),
(56, '44826800', 'Ori', 'Sykes', 'ut.erat.Sed@Craspellentesque.ca', '0971387213', 'CFM26HXI2YF', 1),
(57, '27786748', 'Jin', 'Christensen', 'eu@interdum.edu', '0624412797', 'EXA54WXL6OF', 6),
(58, '89329381', 'Deanna', 'Levine', 'Fusce.mi@Sednuncest.net', '0642419070', 'QRT77WGQ4YQ', 5),
(59, '70445745', 'Finn', 'Morales', 'Proin@tortor.ca', '0273716024', 'RCP94QBJ0GE', 7),
(60, '56477220', 'Keaton', 'Hansen', 'Donec.consectetuer@auguemalesuadamalesuada.co.uk', '0481707810', 'RGE90ZJQ9BZ', 4),
(61, '93154028', 'Illana', 'Stuart', 'odio.Aliquam@tortorNunccommodo.ca', '0359715988', 'SHL34ZKA1PD', 6),
(62, '95990648', 'Giacomo', 'Weeks', 'sed@Fusce.co.uk', '0256926993', 'YES64TXP6BN', 5),
(63, '58091429', 'Drake', 'Shaffer', 'sed.pede@loremDonec.org', '0172279501', 'LWQ56KDS0DL', 5),
(64, '58834711', 'Reagan', 'Bennett', 'malesuada.vel@semperet.net', '0659225424', 'LFQ97CHZ3GA', 4),
(65, '73500605', 'Lunea', 'Farrell', 'laoreet.posuere.enim@sedfacilisis.edu', '0119156505', 'HEX43YCF5JO', 4),
(66, '46959345', 'Jane', 'Bean', 'ipsum.dolor.sit@elementumat.co.uk', '0711053518', 'TGN03NXZ3OL', 6),
(67, '54555071', 'Oleg', 'Hobbs', 'neque.et.nunc@odioAliquamvulputate.ca', '0155114577', 'QAG24SZN4EE', 5),
(68, '79529396', 'Evangeline', 'Anderson', 'orci@blandit.co.uk', '0829637408', 'HEN89TQB3FT', 10),
(69, '67452196', 'Drew', 'Mercado', 'ultrices.iaculis.odio@pellentesquetellus.co.uk', '0933942210', 'LLZ82ZJN0HN', 5),
(70, '89673008', 'Courtney', 'Franks', 'dolor@vitaeposuereat.net', '0517532280', 'OAQ71UJT1WX', 5),
(71, '61825843', 'Colleen', 'Crane', 'elit.dictum.eu@urnaNunc.co.uk', '0141586513', 'WES70LEM5JY', 6),
(72, '51515850', 'Orlando', 'Clemons', 'Lorem.ipsum@primisin.org', '0677443814', 'TIW36DAJ8YZ', 3),
(73, '46402235', 'Erich', 'Mcneil', 'eget.odio.Aliquam@cursuset.co.uk', '0762995604', 'VID64NHP8ZP', 1),
(74, '72946090', 'Latifah', 'Burris', 'est@enimgravida.co.uk', '0331311627', 'WQG45ISS5YF', 3),
(75, '21622019', 'Maile', 'Rocha', 'placerat.Cras@Suspendisseseddolor.edu', '0551406305', 'HXT28PSI9LZ', 2),
(76, '32332444', 'Leilani', 'Mcfarland', 'sollicitudin@risus.edu', '0850416163', 'LZJ91DZZ1QU', 6),
(77, '68738106', 'Nerea', 'Duke', 'auctor.vitae.aliquet@feugiatLorem.org', '0788769068', 'KZD86ZGR5FO', 1),
(78, '32321321', 'Gil', 'Santana', 'Proin@Donecfelis.com', '0536408853', 'RYN86LAP8ZW', 6),
(79, '95970613', 'Barry', 'Roach', 'ac@venenatisamagna.net', '0949195972', 'LPS43ZFP5FZ', 7),
(80, '38271287', 'Stella', 'Rivers', 'netus.et@Nullasemper.com', '0532845746', 'JUZ63QNS9QR', 2),
(81, '86664497', 'Candace', 'Leach', 'mattis@velconvallisin.org', '0782981922', 'AVL34YWM6YF', 5),
(82, '22579121', 'Demetrius', 'Dennis', 'vitae@vitae.net', '0121465891', 'RGK97DDT7IQ', 6),
(83, '24018544', 'Addison', 'Deleon', 'Nulla@et.com', '0337929483', 'KPS57MIQ4ZI', 5),
(84, '47449326', 'Megan', 'Walls', 'congue@acorci.co.uk', '0516072489', 'SBY44OTO9EC', 1),
(85, '45960478', 'Dean', 'Sanchez', 'per@magnisdis.net', '0712783405', 'FJM73YSD4CV', 3),
(86, '74035848', 'Veda', 'Sanders', 'lorem@eutellus.ca', '0143069865', 'MUQ23FXG4RO', 7),
(87, '32032970', 'Brenden', 'Sparks', 'aptent.taciti@auctor.ca', '0462540706', 'MJF80ZWZ3GI', 6),
(88, '20258241', 'Simon', 'Medina', 'mi.lacinia.mattis@nullaDonecnon.com', '0480494964', 'VXQ77WZU9QG', 10),
(89, '53298776', 'Zane', 'Carpenter', 'Aliquam.vulputate@nuncQuisqueornare.net', '0219215667', 'VFJ32ENS6QW', 5),
(90, '72440240', 'Jada', 'Chan', 'eu.enim@lobortis.edu', '0866300344', 'CAC84GEX4HX', 2),
(91, '80120304', 'Jena', 'Mcconnell', 'vel.sapien@necenim.net', '0472067460', 'IUE95CSJ4GH', 9),
(92, '90696146', 'Ferris', 'Mccall', 'Mauris.ut.quam@Phasellus.ca', '0851119081', 'RGH78XJL4FO', 5),
(93, '31569351', 'Xyla', 'Francis', 'et.malesuada@Namporttitorscelerisque.org', '0343091343', 'AZX16XUL3NT', 1),
(94, '18032018', 'Elaine', 'Dejesus', 'cursus@arcu.ca', '0293637898', 'JJX06SYH3RG', 10),
(95, '88627534', 'Knox', 'Petty', 'rutrum@metus.net', '0505230395', 'XYQ86AVC7QB', 6),
(96, '15382520', 'Chadwick', 'Preston', 'eu@ultricesiaculisodio.com', '0943468418', 'LOF25WJH5YC', 6),
(97, '22438169', 'Edward', 'Padilla', 'nec.eleifend.non@semper.co.uk', '0264341880', 'VFR86KXU1TD', 4),
(98, '64877991', 'Oren', 'Owens', 'Praesent@montesnascetur.edu', '0593539713', 'DOX82FVU2ON', 6),
(99, '26608275', 'Talon', 'Caldwell', 'eget@idblanditat.com', '0541862259', 'UFZ66TSM1UZ', 8),
(100, '75772947', 'Candace', 'Townsend', 'velit.eu.sem@quam.edu', '0861404648', 'NOV24FCE6VE', 3),
(101, '25517392', 'Allen', 'Gallegos', 'netus@elitpedemalesuada.edu', '0360845392', 'GWQ72SJY2OV', 7),
(102, '34773769', 'Rigel', 'Munoz', 'consectetuer@Integer.com', '0858363291', 'NJN89ZMC5IE', 6),
(103, '11451902', 'Buffy', 'Diaz', 'Pellentesque.ut@egetmagna.edu', '0980282582', 'RRE46XGZ9EJ', 6),
(104, '62489218', 'Amaya', 'Duke', 'dignissim.tempor.arcu@vehicula.net', '0769040163', 'CGB49XPU1SC', 2),
(105, '58576069', 'Indigo', 'Weiss', 'mi.eleifend@metusAeneansed.co.uk', '0678019882', 'NJJ23CXQ4CS', 7),
(106, '32504218', 'Charles', 'Bowen', 'purus.mauris@nasceturridiculusmus.co.uk', '0819831840', 'NLT74ROJ6BT', 4),
(107, '63743686', 'Knox', 'Nelson', 'eu.tellus.Phasellus@ullamcorperDuis.co.uk', '0727623927', 'WPL33TLP6UE', 6),
(108, '58199964', 'Kyla', 'Sharp', 'Donec.luctus.aliquet@ipsumcursusvestibulum.edu', '0877136586', 'CTI83QOM0SR', 5),
(109, '22211887', 'Carl', 'Morris', 'nisi@enimmitempor.edu', '0744567209', 'YHY84MCL0WK', 3),
(110, '76478439', 'Beau', 'Weber', 'eu@Phaselluselit.ca', '0200682914', 'RAT52BVP8GB', 6),
(111, '23227533', 'Janna', 'Weaver', 'est.arcu@libero.edu', '0720739967', 'BWE59RJQ3UM', 10),
(112, '89354086', 'Sybil', 'Zamora', 'lorem@arcuiaculis.net', '0361616812', 'UWG76IKD5CT', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id_user` int(11) NOT NULL,
  `id_registration` int(11) NOT NULL,
  `unsubscribe` tinyint(1) DEFAULT NULL,
  `date_registration` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `id_user`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(3, 12),
(2, 13),
(3, 14),
(2, 15),
(3, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(3, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(3, 26),
(2, 27),
(2, 28),
(2, 29),
(3, 30),
(2, 31),
(2, 32),
(3, 33),
(2, 34),
(3, 35),
(2, 36),
(2, 37),
(2, 38),
(3, 39),
(3, 40),
(3, 41),
(3, 42),
(3, 43),
(2, 44),
(2, 45),
(3, 46),
(2, 47),
(3, 48),
(2, 49),
(2, 50),
(3, 51),
(2, 52),
(3, 53),
(3, 54),
(2, 55),
(3, 56),
(3, 57),
(2, 58),
(2, 59),
(2, 60),
(3, 61),
(2, 62),
(3, 63),
(2, 64),
(2, 65),
(2, 66),
(3, 67),
(3, 68),
(3, 69),
(3, 70),
(3, 71),
(3, 72),
(3, 73),
(2, 74),
(2, 75),
(2, 76),
(3, 77),
(2, 78),
(3, 79),
(2, 80),
(2, 81),
(3, 82),
(2, 83),
(3, 84),
(3, 85),
(2, 86),
(2, 87),
(2, 88),
(2, 89),
(2, 90),
(3, 91),
(2, 92),
(2, 93),
(3, 94),
(2, 95),
(2, 96),
(2, 97),
(3, 98),
(2, 99),
(2, 100),
(3, 101),
(2, 102),
(3, 103),
(2, 104),
(2, 105),
(3, 106),
(2, 107),
(2, 108),
(3, 109),
(3, 110),
(2, 111),
(2, 112);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`),
  ADD KEY `FK_address_id_city` (`id_city`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_city`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id_registration`,`id_payment`,`id_role`),
  ADD KEY `FK_cost_id_payment` (`id_payment`),
  ADD KEY `FK_cost_id_role` (`id_role`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `event_address`
--
ALTER TABLE `event_address`
  ADD PRIMARY KEY (`id_event`,`id_address`),
  ADD KEY `FK_event_address_id_address` (`id_address`);

--
-- Indexes for table `event_type_event`
--
ALTER TABLE `event_type_event`
  ADD PRIMARY KEY (`id_event`,`id_type_event`),
  ADD KEY `FK_event_type_event_id_type_event` (`id_type_event`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id_grade`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id_registration`),
  ADD KEY `FK_registration_id_event` (`id_event`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `type_event`
--
ALTER TABLE `type_event`
  ADD PRIMARY KEY (`id_type_event`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_user_id_grade` (`id_grade`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id_user`,`id_registration`),
  ADD KEY `FK_user_registration_id_registration` (`id_registration`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`,`id_user`),
  ADD KEY `FK_user_role_id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id_grade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id_registration` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `type_event`
--
ALTER TABLE `type_event`
  MODIFY `id_type_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_address_id_city` FOREIGN KEY (`id_city`) REFERENCES `city` (`id_city`);

--
-- Constraints for table `cost`
--
ALTER TABLE `cost`
  ADD CONSTRAINT `FK_cost_id_payment` FOREIGN KEY (`id_payment`) REFERENCES `payment` (`id_payment`),
  ADD CONSTRAINT `FK_cost_id_registration` FOREIGN KEY (`id_registration`) REFERENCES `registration` (`id_registration`),
  ADD CONSTRAINT `FK_cost_id_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Constraints for table `event_address`
--
ALTER TABLE `event_address`
  ADD CONSTRAINT `FK_event_address_id_address` FOREIGN KEY (`id_address`) REFERENCES `address` (`id_address`),
  ADD CONSTRAINT `FK_event_address_id_event` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);

--
-- Constraints for table `event_type_event`
--
ALTER TABLE `event_type_event`
  ADD CONSTRAINT `FK_event_type_event_id_event` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`),
  ADD CONSTRAINT `FK_event_type_event_id_type_event` FOREIGN KEY (`id_type_event`) REFERENCES `type_event` (`id_type_event`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `FK_registration_id_event` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_user_id_grade` FOREIGN KEY (`id_grade`) REFERENCES `grade` (`id_grade`);

--
-- Constraints for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD CONSTRAINT `FK_user_registration_id_registration` FOREIGN KEY (`id_registration`) REFERENCES `registration` (`id_registration`),
  ADD CONSTRAINT `FK_user_registration_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `FK_user_role_id_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `FK_user_role_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
