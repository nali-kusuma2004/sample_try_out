-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 11:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_eee`
--

CREATE TABLE `question_eee` (
  `ques_id` int(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option_1` varchar(100) NOT NULL,
  `option_2` varchar(100) NOT NULL,
  `option_3` varchar(100) NOT NULL,
  `option_4` varchar(100) NOT NULL,
  `is_enabled` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `question_eee`
--

INSERT INTO `question_eee` (`ques_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `is_enabled`) VALUES
(1, ' Which of the following elements of electrical engineering cannot be analyzed using Ohm’s law?\n', 'Capacitors', 'Inductors', 'Transistors', 'Resistance', 1),
(2, 'What is constant for a charged spherical shell according to basic electrical energy?\r\n', 'Electrical potential outside the spherical shell', 'Electrical potential inside the spherical shell', ' Electrical field outside the spherical shell', 'Electrical field inside the spherical shell', 1),
(3, 'Where does electro-static shielding occur in a charged spherical shell?', 'When electrical potential outside spherical shell is zero', ' When electrical potential inside the spherical shell is zero', ' When electrical field outside the spherical shell', ' Electrical field inside the spherical shell', 1),
(4, 'Which of the following is a correct representation of peak value in an AC Circuit?', ' RMS value/Peak factor', 'RMS value*Form factor', 'RMS value/Form factor', 'RMS value*Peak factor', 1),
(5, 'Which of the following according to fundaments of electrical energy is correct about alternating cur', ' Frequency is zero', ' Magnitude changes with time', ' Can be transported to larger distances with less loss in power', ' Flows in both directions', 1),
(6, ' How many cycles will an AC signal make in 2 seconds if its frequency is 100 Hz?\r\n\r\n', '50', '100', '150', '200', 1),
(7, ' What will be the direction of the drift velocity of electrons change with respect to the electric f', 'same as that of electric field', ' opposite to that of electric field', 'perpendicular to that of the electric field in a positive direction', 'perpendicular to that of the electric field in a negative direction', 1),
(8, 'What will be the current density of metal if a current of 30A is passed through a cross-sectional ar', ' 7.5 A/m2', ' 15 A/m2', ' 60 A/m2', '120 A/m2', 1),
(9, 'Which of the following is correct about the power consumed by R1 and R2 connected in series if the v', ' R1 will consume more power', 'R2 will consume more power', ' R1 and R2 will consume the same power', 'The relationship between the power consumed cannot be established', 1),
(10, ' What is zero for a charged spherical shell?', 'Electrical potential outside the spherical shell', ' Electrical potential inside the spherical shell', ' Electrical field outside the spherical shell', 'Electrical field inside the spherical shell', 1),
(11, ' What kind of quantity is an Electric potential?', 'Vector quantity', 'Tensor quantity', ' Scalar quantity', 'Dimensionless quantity', 1),
(12, ' What do crowded lines of force indicate?', ' Strong electric field', ' Weak electric field', ' Strong electric potential', 'Weak electric potential', 1),
(13, ' What is the direction of the electric field at a point?', 'Along the line perpendicular to the electric field', 'Along the line tangent to the electric field', ' Electric field has no direction', 'point?\r\na) Along the line perpendicular to the electric field\r\nb) Along the line tangent to the elec', 1),
(14, 'What is the magnitude of mutually induced emf, E2 in a transformer?\r\na) directly proportional to rat', ' directly proportional to rate of change of flux and number of secondary turns', 'inversely proportional to rate of change of flux and number of secondary turns', 'proportional to rate of change of flux and inversely proportional to number of secondary turns', 'inversely proportional to the rate of change of flux and proportional to number of secondary turns', 1),
(15, 'Where is field winding mounted in a DC machine?', 'Stator', ' Rotor', 'Absent', 'Anywhere on stator or rotor', 1),
(16, ' What are the materials used for brushes in dc machines?', 'Iron', 'Carbon', 'Aluminum', 'Steel', 1),
(17, '4. The angle (electrical) made by brushes with axes of adjoining filed poles is ______________', '450', '1800', '900', '300', 1),
(18, 'In a DC machine, rectification process is carried out in order to get unidirectional output (DC). Th', 'Half wave rectifier', 'Full wave rectifier', 'Mechanical rectification', 'Centre tapped rectifier', 1),
(19, '6.Which of the following part is used in construction of DC machine but not in AC machine?', 'Armature Winding', 'Field winding', 'Commutator\r\n', ' Shaft', 1),
(20, ' In a DC machine fractional pitch winding is used to _______________', ' To improve cooling', 'To reduce sparking', 'To reduce copper losses', 'To increase generated EMF', 1),
(21, 'Speed-torque characteristic of PMDC motors is _______________', 'Starting from zero increasing continuously', ' Starting from some positive value and remaining constant', 'Starting from some positive value and decreasing exponentially', ' Starting from some positive value and decreasing on straight line', 1),
(22, 'Speed-torque characteristic of PMDC motors is _______________', 'Starting from zero increasing continuously', ' Starting from some positive value and remaining constant', 'Starting from some positive value and decreasing exponentially', ' Starting from some positive value and decreasing on straight line', 0),
(23, ' What will happen if DC shunt motor is connected across AC supply?', 'Will run at normal speed', ' Will not run', ' Will Run at lower speed', ' Burn due to heat produced in the field winding', 1),
(24, ' What will happen if the back emf of a DC motor vanishes suddenly?', ' The motor will stop', 'The motor will continue to run', ' The armature may burn', ' The motor will run noisy', 1),
(25, ' What will happen, with the increase in speed of a DC motor?', ' Back emf increase but line current falls.', 'Back emf falls and line current increase.', ' Both back emf as well as line current ', 'Both back emf as well as line current fall.', 1),
(26, 'What will happen to torque if back emf and speed of the DC motor is doubled?\r\na) Remain unchanged\r\nb', 'Remain unchanged', ' Reduce to one-fourth value', 'Increase four folds', 'Be doubled', 1),
(27, 'At the instant of starting, when a DC motor is put on supply, it will behave like ______________', ' Highly resistive circuit', ' Low resistance circuit', 'Capacitive circuit', 'Inductive circuit', 1),
(28, 'All others are advantages of DC motor over AC motor except _______________', 'Low cost', ' Wide speed range', ' Stability', 'High starting torque', 1),
(29, '. If a DC motor designed for 45°C ambient temperature is to be used for 55°C ambient temperature, th', ' Of lower HP should be selected', ' Of higher HP should be selected', ' Can be used for 50°C ambient temperature also', ' Is to be de-rated by a factor recommended by manufacturer and select the next higher H.P. motor. \r\n', 1),
(30, 'No-load voltage observed at two different field resistance values, is V1 < V2. What will be the rela', ' Rf1 < Rf2', ' Rf1 = Rf1', 'Rf1 > Rf1\r\n', 'Can’t determine from no-load voltage', 1),
(31, 'Commutation is delayed due to __________\r\n', ' Leakage reactance', ' Effect of armature reaction', 'Leakage reactance and armature reaction', ' Because of other factors\r\n', 1),
(32, 'Why brushes shifting method is not employed in practical commutation?\r\n', 'Expensive', 'Construction problems', ' Causes demagnetization', 'Used practically\r\n', 1),
(33, 'Which are the methods for getting an ideal commutation?', 'Resistance commutation', 'Voltage commutation', 'Current commutation', 'Resistance and voltage commutation', 1),
(34, 'Load sharing of two generators connected in parallel is determined by __________\r\na) Internal charac', ' Internal characteristics', 'External characteristics', 'Both internal and external characteristics', 'It doesn’t depend on load sharing\r\n', 1),
(35, 'For a parallel operation of 2 DC shunt generators, we get net external characteristics ___________', ' Starting from the same no-load point and between generator 1 and generator 2', 'Starting from the same no-load point and below generator 1 and generator 2\r\n', ' Starting from the same no-load point and above generator 1 and generator 2', 'Can’t be determined', 1),
(36, ' When two compound generators are connected in parallel, when load current in generator 1 is increas', 'Both generator will share same load', 'Generator 1 will start running as motor', ' Generator 2 will be overloaded', ' Generator 2 will start running as motor\r\n', 1),
(37, 'While running two compound motors in parallel, we connect equalizer ring between ___________', ' Two armatures', 'Two fields', ' Two load points', 'Anywhere', 1),
(38, 'Which of the following is not a disadvantage of a Swinburne’s test?', 'The stray-load losses can’t be determined by this test', ' Steady temperature rise can’t be determine', ' Does not give results about satisfactory commutation', ' Machine gets damaged', 1),
(39, ' In an AC circuit a low value of KVAR compared with KW indicates', 'Low efficiency', 'High power factor', ' Unity power factor', 'Maximum load current', 1),
(40, 'A parallel AC circuit in resonance will', ' Have a high voltage developed across each inductive and capacitive section', ' Have a high impedance', 'Act like a resister of low value', 'Have current in each section equal to the line current', 1),
(41, '  The frequency of an alternating current is', ' The speed with which the alternator runs', 'The number of cycles generated in one minute', 'The number of waves passing through a point in one second', 'The number of electrons passing through a point in one second', 1),
(42, 'A pure capacitor connected across an AC voltage consumed 50 V. This is due to', 'The capacitive reactance in ohms', ' The current flowing in capacitor', 'The size of the capacitor being quite big\r\n', 'None of the above', 1),
(43, ' The unit of frequency is', ' Cycle', ' Cycle-second', 'Hertz/second', 'Hertz', 1),
(44, 'Change in circuit voltage will affect', 'Resonant frequency', 'Q', 'Current', 'Bandwidth', 1),
(45, ' An alternator is delivering power to a balanced load at unity power factor. The phase angle between', '80o', '60o', '30o', '0o', 1),
(46, 'To improve the power factor in three phase circuits, the capacitor bank is connected in Delta to mak', 'Capacitance calculation easy', 'Capacitance very small\r\n', 'The connection elegant', 'The power factor correction more effective\r\n', 1),
(47, ' In a three-phase supply, floating neutral is undesirable because it may result in........across the', ' Unequal line voltages', ' High voltage', 'Low-voltage', 'None of the above', 1),
(48, '  A current is said to be direct current when its\r\n', 'Magnitude remains constant with time\r\n', ' Magnitude changes with time\r\n', 'Direction changes with time\r\n', 'Magnitude and direction changes with time\r\n', 1),
(49, ' A certain transformer has a turns ratio of 1 and a 0.85 coefficient of coupling. When 2 V ac is app', '1.7 V', '0.85 V', ' 1 V', ' 0 V', 1),
(50, 'Sumpner\'s test is conducted on transformers to determine', 'Temperature', 'Stray losses', 'All-day efficiency', 'None of the above', 1),
(51, ' Which winding in a transformer has more number of turns?\r\n', ' Low voltage winding', 'High voltage winding', 'Primary winding\r\n', ' Secondary winding', 1),
(52, 'Power transformers are designed to have maximum efficiency at', 'Nearly full load', '70% full load', ' 50% full load', ' No load', 1),
(53, 'What will happen if the transformers working in parallel are not connected with regard to polarity?', 'The power factor of the two transformers will be different from the power factor of common load', 'Incorrect polarity will result in dead short circuit', ' The transformers will not share load in proportion to their kVA ratings', ' None of the above', 1),
(54, 'To step 110 V ac down to 20 V ac, the turns ratio must be\r\n', '5.5', '18', '0.18', '0.018', 1),
(55, 'A Buchholz relay can be installed on', ' Auto-transformers', 'Air-cooled transformers', ' Welding transformers', 'Oil cooled transformers', 1),
(56, 'The core used in high frequency transformer is usually', 'Copper core', 'Cast iron core', ' Air core', 'Mild steel core', 1),
(57, 'An ideal transformer is one which has', ' No losses and magnetic leakage', 'Interleaved primary and secondary windings\r\n', ' A common core for its primary and secondary windings', 'Core of stainless steel and winding of pure copper metal', 1),
(58, ' Which of the following properties is not necessarily desirable for the material for transformer cor', ' Low hysteresis loss', 'High permeability', ' High thermal conductivity', 'Adequate mechanical strength', 1),
(59, 'Gas is usually not liberated due to dissociation of transformer oil unless the oil temperature excee', ' 50°C', '80°C', '100°C', '150°C', 1),
(60, 'Material used for construction of transformer core is usually\r\n', 'Wood', 'Copper', 'Aluminium', ' Silicon steel\r\n', 1),
(61, 'A transformer', ' Changes ac to dc', ' Changes dc to ac', 'Steps up or down dc voltages', ' Steps up or down ac voltages\r\n', 0),
(62, 'The mutual inductance when k = 0.65, L1 = 2 ?H, and L2 = 5 ?H is', '2 mH', '2 ?H', ' 4 ?H', '8 ?H\r\n', 1),
(63, 'The general name for the source of \r\nMechanical energy that drives the generator is\r\n ', 'Triler ', 'Driver ', 'Prime mover ', 'coupler ', 1),
(64, 'The field structure of DC machine use ', 'Sailent pole arrangement ', 'Non-sailent pole arrangement. ', 'Both 1 and 2 ', 'None of the above.', 1),
(65, 'The eddy current losses occurs in the… ', 'Field poles ', 'Yake ', 'Commutating poles ', 'Armature core  ', 1),
(66, 'In a DC machine, the number of commutator segment is equal to ', 'Number of conductors ', 'Twice the number of poles ', 'Number of coils ', 'None of the above ', 1),
(67, 'The main draw back of a DC shunt generator is ', 'weakens the flux at the trailing ', 'weakens the flux at the leading ', 'strengthens the flux at the leading ', 'none of the above. ', 1),
(68, 'The back emf in a DC motor  ', 'opposes the applied voltage \r\n', 'aids the applied voltage ', 'aids the armature reaction', 'none of the above ', 1),
(69, 'The value of back emf in a DC motor is \r\nmaximum at ', 'no load ', 'full load', ' half full load ', 'none of the above.', 1),
(70, 'The quantity E, I represents: ', 'input power to armature ', 'copper losses in armature ', 'core losses ', 'none of the above With respect to direction of rotation, interpoles ', 1),
(71, 'With respect to direction of rotation, interpoles on a DC motor must have the same polarity as the m', 'ahead of them ', 'behind them ', 'Before ', 'none of the above ', 1),
(72, 'The running speed of a DC series motor is  \r\nbasically determined by ', 'field excitation ', 'load ', 'armature resistance ', ' none ', 1),
(73, 'motor has the best speed regulation', 'series ', 'cumulatively compounded ', 'shunt ', 'differential compounded ', 1),
(74, 'DC series motors are used in those applications where.... is required.  ', 'high starting torque ', 'constant speed', 'low no load speed ', 'none of the above ', 1),
(75, 'When load is removed..... motor will run at \r\nthe highest speed ', 'shunt ', 'cumulative compounded ', 'differential compounded ', ' series The speed of a DC motor can be controlled ', 1),
(76, 'a DC series motor, use of armature divertermakes the method: ', 'less waterful ', ' less expensive ', 'unsuitable for changing loads ', 'suitable for changing loads The most economic method of finding no ', 1),
(77, 'A400 V shunt generator develop 196 A at full load. Its armature and field resistance are 0:05 ohms a', 'armature copper losses-2000 W mal \r\n', 'field copper losses-1600 W ', 'power output 88.8 KW ', 'induced emf-390 V ', 1),
(78, 'A500 V. 12 pole, lap wound DC machine has 20 V armature drop at full load. The armature has 1200 con', '260 rpm', '240 rpm', '300 rpm', '250 rpm ', 1),
(79, 'A 12 pole, lap wound shunt generator supplies a load of four motors each taking 50 A and light load ', ' 200 A, 100A ', '250A, 125A \r\n', '252A, 21A', '248 A, 20.66 A ', 1),
(80, 'A400 V shunt generator develop 196 A at full load. Its armature and field resistance are 0:05 ohms a', 'armature copper losses-2000 W ', 'field copper losses-1600 W ', 'power output 88.8 KW ', 'induced emf-390 V ', 1),
(81, 'A500 V. 12 pole, lap wound DC machine has 20 V armature drop at full load. The armature has 1200 con', '260 ', '240 rpm ', '300 ', '250 rpm ', 1),
(82, 'A 12 pole, lap wound shunt generator supplies a load of four motors each taking 50 A and light load ', ' 200 A, 100A ', '250A, 125A ', '252A, 21A ', ' 248 A, 20.66 A  ', 1),
(83, ' belt driven 50 KW shunt generator running at 500 rpm has 250 V induced emf when connected to a bus ', '440 rpm ', '40 rpm ', '250 rpm ', '1250 rpm 22.A 20 hp, 200 V motor is  ', 1),
(84, 'In a DC machine, the number of commutator segment is equal to: ', 'Number of conductors ', 'Twice the number of poles ', 'Number of coils ', 'None of the above. ', 1),
(85, 'The nature of armature winding of a DC machine is decided by:', 'Front pitch', 'commutator pitch ', 'back pitc ', 'none of the above ', 1),
(86, 'ln a DC generator,armature reaction....pole tip ', 'weakens the flux at the trailing ', 'weakens the flux at the leading', 'strengthens the flux at the leading ', ' none of the above. ', 1),
(90, 'Single line diagram of which of the following power system is possible?', ' Power system with LG fault\r\n', 'Balanced power system', 'Power system with LL fault', 'Power system with LLG fault', 1),
(91, ' A power system will have greater flexibility of operation if they have __________', ' Only Base load plants operating in combination', 'Various types of power plants operating in combination', 'Only Peak load plants operating in combination', 'Only thermal power plants operating in combination', 1),
(92, 'Single line diagram does not represents:\r\n', 'Ratings of machines', 'Neutral wire of transmission lines', 'Delta connection of transformer winding', ' Star connection of transformer winding', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_eee`
--
ALTER TABLE `question_eee`
  ADD PRIMARY KEY (`ques_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
