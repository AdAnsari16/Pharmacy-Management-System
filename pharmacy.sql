-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 09:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_no` int(20) NOT NULL,
  `bill_date` date NOT NULL,
  `amount` int(20) NOT NULL,
  `pid` int(20) NOT NULL,
  `Phm_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_no`, `bill_date`, `amount`, `pid`, `Phm_id`) VALUES
(1654, '2019-01-20', 399, 100233, 104),
(1655, '2020-03-20', 530, 100234, 105),
(1656, '2007-05-20', 321, 100235, 106),
(1657, '2012-06-20', 230, 100236, 107),
(1658, '2020-09-20', 40, 100237, 108),
(1659, '2019-10-04', 100, 100237, 104),
(1660, '2019-03-22', 1011, 100237, 104),
(1661, '2019-03-22', 1011, 100237, 104),
(1662, '2019-10-04', 100, 100237, 104),
(1663, '2019-10-04', 1000, 100237, 105);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `Mid` int(10) NOT NULL,
  `Mname` text NOT NULL,
  `Mtype` text NOT NULL,
  `Manufacturer` varchar(20) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Mprice` int(5) UNSIGNED NOT NULL,
  `Composition` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Dosage` varchar(300) NOT NULL,
  `Symptoms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Mid`, `Mname`, `Mtype`, `Manufacturer`, `Size`, `Mprice`, `Composition`, `Description`, `Dosage`, `Symptoms`) VALUES
(100, 'Crocin Pain Relief Tablet\r\n', 'Tablets', 'Gsk', '15', 45, 'Caffiene 50 MG + Paracetamol 650 MG ', 'It is used to used to relieve mild to moderate pain and to reduce fever.', 'Take this as directed by your doctor. Do not take more than instructed by your doctor. Never take more than 1000 mg at any one time and no more than 4 times in one day. The dose for a child is different from the adult dose.', 'Migraine'),
(101, 'Benadryl Cough Formula 450ML Syrup\r\n', 'Syrup', 'Johnson', '1', 145, 'Diphenhydramine 14.08 MG+Ammonium chloride 0.138 GM+Sodium citrate 57.03 MG+Menthol 1.14 MG ', 'This medication is an antihistamine, prescribed for severe allergic conditions such as runny nose, sneezing, itchy, watery eyes. It is also used for itching of insect bites, sunburns, bee stings, poison ivy, poison oak and minor skin irritation. ', 'Adult- The recommended dose is 25 mg to 50 mg (1 to 2 capsules). Child- The recommended dose is 12.5 mg to 25 mg (1 capsule). Do not take 2 doses at the same time or extra doses. Many times this drug is taken on an as needed basis', 'Dry Cough'),
(102, 'N Flex Injection\r\n', 'Injection', 'Evita Healthcare', '1', 99, 'Methylcobalamin 1000 MCG /ML', 'It is used to prevent and treat low vitamin B12. Lack of vitamin B12 may cause anemia and damage to the nerves. It is used to treat diabetic neuropathy and peripheral neuropathy.', 'Take with or without food. Take with food if it causes an upset stomach. ', 'Muscle spasms'),
(103, 'Bro-Zedex', 'Syrup', 'Wockhardt limited', '100ml', 75, 'Terbutaline sulphate IP 1.25mg+Bromhexine hydrochloride IP 4mg+Guaiphenesin IP 50mg+Menthol IP 2.5ml', 'It is used to relieve wet cough', 'Adults: 2 teaspoonful, 3-4 times a day or as directed by physician', 'Wet cough'),
(104, 'Instaryl-D', 'Syrup', 'Aglowmed Ltd', '100ml', 64, 'Dextromethorphan hydrobromide 5mg+ chlorpheiramine maleate 2mg+Guaiphenesin IP 50mg', 'It is used for allergic cough', 'Adults and children over 10 yrs:5ml thrice daily Children 5 to 10 yrs:2.5ml thrice daily', 'Allergic cough'),
(105, 'Atorvastatin ozovas-10 ', 'Tablets', 'Ozone pharmaceutical', '10', 20, 'Atorvastatin calcium equivalent to atorvastatin 10mg+ excipient ', 'To reduce chloesterol', 'As directed by the physician', 'Chloesterol '),
(106, 'Logi-Cal 500', 'Tablets', 'Manish pharmacutical', '15', 58, '1250mg of calcium carbonate equivalent to elemental calcium 500mg+vitamin D3 400IU', 'To increase the levels of calcium and vitamin D', 'As directed by the physician', 'Lack of Calcium '),
(107, 'Paracetamol', 'Tablets', 'Danish healthcare', '10', 11, 'Paracetamol IP 500mg+excipients', 'For mild to moderate pain relief', 'As directed by the physician', 'Pain Relief'),
(108, 'Dabur Pudin hara', 'Syrup', 'Dabur India Ltd.', '30ml', 45, 'Pudina satva(Mentha piperata,aerial part OI.)-0.0337ml+excipients+alcohol 10%v/v', 'For effective cooling relief-gas,indigestion and stomach ache', '10-15 drops,2-3 times a day for adults.For children (5-12yrs)5-10drops 2-3 times a day', 'Indigestion '),
(109, 'Septilin', 'Tablets', 'Himalaya Drug Ltd', '60', 100, 'Maharasnadi quath 130mg+guduchi 98mg+manjishtha 64mg+amalaki 32mg+shigru 32mg+shankh bhasma 64mg', 'Helps improve bodys defence mechanism in its fight against sinusitis,tonsillitis,otorrhoea,furunculosis and other septic conditions', 'Initially,2 tablets twice daily,followed by 1 tablet twice daily,or as directed by the physician', 'Infection'),
(110, 'Duofilm', 'Solution', 'ZYG Pharma pvt Ltd.', '15ml', 180, 'Salicylic acid 16.7% w/w+lactic acid 16.7% w/w+flexible collodion B.P.', 'For the treatment of warts,corns and calluses', 'Apply daily or as directed by the physician', 'Warts and calluses'),
(111, 'Omiwel Gel', 'Ointment', 'Sky pharmaceutical ', '30g', 65, 'Linseed oil 3% + diclofenac sodium 1% + methyl salicylate 10% + menthol 5% + benzyl alcohol 1%', 'Quick relieves painful muscular sprain and strain', 'As directed by the physician.', 'Muscular strain'),
(112, 'Supamove', 'Ointment', 'Cymbiotics biopharma', '30g', 103, 'Methyl salicylate 10% w/w+menthol 5% w/w+capsaicin USP 0.025% w/w', 'Relieves back pain ', 'As directed by the physician.', 'Back pain'),
(113, 'Tribetrol 1', 'Tablets', 'Garnier life science', '10', 80, 'Voglibose 0.2mg+glimepiride 1mg+metformin hydrochloride 500mg+excipients', 'To reduce the sugar levels', 'As directed by the physician', 'Diabetes'),
(114, 'Asthakind', 'Syrup', 'Sirmour remedies Ltd', '100ml', 45, 'Terbutaline sulphate1.25mg + Bromhexine hydrochloride IP 4mg + Guaiphenesin IP 50mg', 'Used to relieve cough', 'As directed by the physician', 'Cough'),
(115, 'Pudina capsules', 'Tablets', 'Chandra drugs Ltd', '10', 18, 'Pudina Satva 160mg+excipients', 'Quickly relieves from abdominal pain,hyper acidity and indigestion', '1-2 capsules as and when required', 'Acidity '),
(116, 'Ascoril', 'Syrup', 'Mark pharmaceutical', '100ml', 75, 'Terbutaline sulphate 1.25mg + Bromhexine hydrochloride IP 4mg + Guaiphenesin IP 50mg + menthol 0.5mg', 'To get relief from breathing problem', 'As directed by the physician', 'Breathing problem'),
(117, 'Moxikind cv 625', 'Tablets', 'Comed pharmaceutical', '6', 83, 'Amoxycilin trihydrate 500mg+potassium clavulanate 125mg', 'To get relief from breathing problem', 'As directed by the physician', 'Breathing problem'),
(118, 'Propysalic NF ', 'Ointment', 'Hesa pharmaceutical', '30g', 150, 'Clobetasol propionate 0.05% w/w+salicylic acid 3.5% w/w', 'Used to treat skin conditions like corns,calluses,warts on hands or feet', 'As directed by the physician', 'Corns and warts'),
(119, 'Tiger balm', 'Ointment', 'Hawpar healthcare ', '19.4g', 350, 'Camphor 25%+dementholised mint oil 16%+menthol 8%+paraffin &petroleum ', 'For fast and effective relief of headache,stuffy nose,insect bites,itchiness,muscular aches and pains,sprains and flatulence', 'Apply in the affected area  twice a day', 'headache'),
(120, 'Emflam Plus', 'Tablets', 'Merck Ltd', '10', 10, 'Ibuprofen 400mg+paracetamol 325mg', 'To reduce fever', 'As directed by the physician', 'Fever'),
(121, 'Eyemist', 'Eye drops', 'Sun pharmaceutical', '10ml', 116, 'Hydroxypropyl methylcellulose 3mg+aqueous buffered vehicle', 'Instantly re-hydrates eyes', 'As directed by the physician', 'Dry eyes'),
(122, 'Candibiotic', 'Ear drops', 'Mark pharmaceutical', '5ml', 52, 'Chloramohenicol 5%+beclomethasone dipropionate 0.025%+clotrimazole 1%+lidocaine 1.73%', 'Used to relieve from itching of ears', 'Instill 4-5 drops in the ear 3-4 times daily or as directed by the physician', 'Itching of ears');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_list`
--

CREATE TABLE `medicine_list` (
  `med_list` varchar(80) NOT NULL,
  `bill_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_list`
--

INSERT INTO `medicine_list` (`med_list`, `bill_no`) VALUES
('Atorvastatin ozovas-10', 1658),
('Candibiotic\r\nMoxikind cv 625\r\nSupamove', 1656),
('Duofilm\r\nTiger balm', 1655),
('Duofilm Tiger balm', 1660),
('Duofilm Tiger balm', 1661),
('N Flex Injection\r\nDabur Pudin hara\r\nAscoril', 1654),
('Paracetamol', 1659),
('Paracetamol', 1662),
('Paracetamol', 1663),
('Propysalic NF\r\nTribetrol 1', 1657);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `doctor_name` varchar(40) DEFAULT NULL,
  `pname` varchar(40) NOT NULL,
  `paddress` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `phone`, `dob`, `doctor_name`, `pname`, `paddress`) VALUES
(100233, 8906533217, '2000-07-04', 'Dr.Khan', 'Aadon', '302, Blossom Society, Virar East'),
(100234, 8909654386, '2000-04-10', 'Dr.Bungari', 'Jovin', '503, Poonam Towers, Mira Road East'),
(100235, 9964654386, '2000-10-17', 'Dr.Ramani', 'David', '202, Sunshine Valley, Vasai West'),
(100236, 9943654388, '2000-03-25', 'Dr.DSouza', 'Yash', '802, Bima Towers, Andheri East'),
(100237, 9944432980, '2002-01-09', 'Dr.Ahuza', 'Suhail', '604, Veda, Bandra East'),
(100239, 9321547852, '2010-09-28', 'Dr.RG', 'Taylor', '102/Galaxy Apartments, Thane(E)'),
(100242, 9769136045, '2010-10-28', 'Dr.Ray', 'Sun', '102/Sunshine Villa,Goregaon(W)');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `Phm_id` int(20) NOT NULL,
  `phm_username` varchar(20) DEFAULT NULL,
  `phm_pass` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `name` varchar(40) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `phrm_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`Phm_id`, `phm_username`, `phm_pass`, `email`, `name`, `phone`, `phrm_pass`) VALUES
(104, 'Rishika', '12345678', 'rishika@gmail.com', 'Rishika Ahuja', 9856734512, '1234'),
(105, 'Adil', 'adil12', 'adil@gmail.com', 'Adil Ansari', 9845322754, 'AV1234'),
(106, 'Anashwara', 'annu2000', 'anashwara@gmail.com', 'Anashwara Kurien', 7765433298, '1234'),
(107, 'Aishwarya', 'ash1234', 'aishwarya@gmail.com', 'Aishwarya John', 8860266452, 'ALP1234'),
(108, 'Ann', 'ann99', 'ann@gmail.com', 'Ann Zacharia', 8945322651, 'AV1234');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `phrm_name` varchar(40) NOT NULL,
  `phrm_username` varchar(20) DEFAULT NULL,
  `phrm_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`phrm_name`, `phrm_username`, `phrm_pass`) VALUES
('90th Street Pharmacy', '90STP', '1234'),
('Alpina Pharmacy INC', 'Alpina', 'ALP1234'),
('Avalon Chemists', 'AVChm', 'AV1234');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(20) NOT NULL,
  `sname` varchar(40) NOT NULL,
  `category` varchar(10) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `stock_no` int(20) DEFAULT NULL,
  `Phm_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `sname`, `category`, `description`, `stock_no`, `Phm_id`) VALUES
(12488, 'Crocin Pain Relief Tablet', 'Tablets', 'It is used to used to relieve mild to moderate pain and to reduce fever.', 40, 104),
(12489, 'Benadryl Cough Formula 450ML Syrup', 'Syrup', 'This medication is an antihistamine, prescribed for severe allergic conditions such as runny nose, sneezing, itchy, watery eyes. It is also used for itching of insect bites, sunburns, bee stings, poison ivy, poison oak and minor skin irritation.', 60, 104),
(12490, 'N Flex Injection', 'Injection', 'It is used to prevent and treat low vitamin B12. Lack of vitamin B12 may cause anemia and damage to the nerves. It is used to treat diabetic neuropathy and peripheral neuropathy.', 20, 105),
(12491, 'Bro-Zedex', 'Syrup', 'It is used to relieve wet cough', 30, 106),
(12492, 'Instaryl-D', 'Syrup', 'It is used for allergic cough', 50, 107),
(12493, 'Atorvastatin ozovas-10', 'Tablets', 'To reduce chloesterol', 100, 108),
(12494, 'Logi-Cal 500', 'Tablets', 'To increase the levels of calcium and vitamin D', 250, 105),
(12495, 'Paracetamol', 'Tablets', 'For mild to moderate pain relief', 125, 106),
(12496, 'Dabur Pudin hara', 'Syrup', 'For effective cooling relief-gas,indigestion and stomach ache', 75, 104),
(12497, 'Septilin', 'Tablets', 'Helps improve bodys defence mechanism in its fight against sinusitis,tonsillitis,otorrhoea,furunculosis and other septic conditions', 300, 105),
(12498, 'Duofilm', 'Solutiom', 'For the treatment of warts,corns and calluses', 40, 107),
(12499, 'Omiwel Gel', 'Ointment', 'Quick relieves painful muscular sprain and strain', 56, 108),
(12500, 'Supamove', 'Ointment', 'Relieves back pain', 72, 107),
(12501, 'Tribetrol 1', 'Tablets', 'To reduce the sugar levels', 98, 105),
(12502, 'Asthakind', 'Syrup', 'Used to relieve cough', 124, 106),
(12503, 'Pudina capsules', 'Tablets', 'Quickly relieves from abdominal pain,hyper acidity and indigestion', 200, 104),
(12504, 'Ascoril', 'Syrup', 'To get relief from breathing problem', 45, 106),
(12505, 'Moxikind cv 625', 'Tablets', 'To get relief from breathing problem', 90, 106),
(12506, 'Propysalic NF', 'Ointment', 'Used to treat skin conditions like corns,calluses,warts on hands or feet', 48, 106),
(12507, 'Tiger balm', 'Ointment', 'For fast and effective relief of headache,stuffy nose,insect bites,itchiness,muscular aches and pains,sprains and flatulence', 35, 106),
(12508, 'Emflam Plus', 'Tablets', 'To reduce fever', 50, 106),
(12509, 'Eyemist', 'Eye drops', 'Instantly re-hydrates eyes', 320, 106),
(12510, 'Candibiotic', 'Ear drops', 'Used to relieve from itching of ears', 30, 106);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_no`),
  ADD KEY `Phm_id` (`Phm_id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`Mid`);

--
-- Indexes for table `medicine_list`
--
ALTER TABLE `medicine_list`
  ADD PRIMARY KEY (`med_list`,`bill_no`),
  ADD KEY `bill_no` (`bill_no`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`Phm_id`),
  ADD KEY `phrm_pass` (`phrm_pass`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`phrm_pass`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `Phm_id` (`Phm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1664;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `Mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `medicine_list`
--
ALTER TABLE `medicine_list`
  MODIFY `bill_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1664;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100244;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `Phm_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12511;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`Phm_id`) REFERENCES `pharmacist` (`Phm_id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`);

--
-- Constraints for table `medicine_list`
--
ALTER TABLE `medicine_list`
  ADD CONSTRAINT `medicine_list_ibfk_1` FOREIGN KEY (`bill_no`) REFERENCES `bill` (`bill_no`);

--
-- Constraints for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD CONSTRAINT `pharmacist_ibfk_1` FOREIGN KEY (`phrm_pass`) REFERENCES `pharmacy` (`phrm_pass`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`Phm_id`) REFERENCES `pharmacist` (`Phm_id`);
COMMIT;

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `text1` varchar(80) NOT NULL,
  `text2` varchar(80) NOT NULL,
  `text3` varchar(80) NOT NULL,
  `text4` varchar(80) NOT NULL,
  `feedback`varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
