-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 04:35 PM
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
-- Table structure for table `question_ece`
--

CREATE TABLE `question_ece` (
  `ques_id` int(10) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option_1` varchar(500) NOT NULL,
  `option_2` varchar(500) NOT NULL,
  `option_3` varchar(500) NOT NULL,
  `option_4` varchar(500) NOT NULL,
  `is_enabled` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `question_ece`
--

INSERT INTO `question_ece` (`ques_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `is_enabled`) VALUES
(1, 'Which of the following is not an electronic device?', 'A mobile', 'A computer', 'A magnifying glass', ' A keyboard', 1),
(2, ' Which of the following is not a physical component of an electronic circuit?', 'Capacitor', 'Inductor', 'Diode', 'Temperature', 1),
(3, 'Which of the following is not a property of semiconductors used in electronic devices?', 'They excite electrons', 'They don’t emit light', 'They have high thermal conductivity', ' They have variable electrical conductivity\r\n', 1),
(4, 'Which of the following is the correct relationship between temperature (T) and mobility (u) of electrons in electronic circuits?', 'u ? T-3/2', 'u ? T-1/2', ' u ? T', 'u ? T-1', 1),
(5, 'What is the effect of temperature on the recombination rate of electrons in electronic circuits?', 'Recombination rate increases with increase in the temperature', 'Recombination rate decreases with increase in the temperature', ' Recombination rate is independent of temperature', 'Recombination of electrons doesn’t occur in semiconductors', 1),
(6, 'Which of the following is correct about semiconductors in electronic devices?', 'Elemental semiconductors have direct band gap', 'Compound semiconductors have indirect band gap', ' Extrinsic semiconductors are injected with impurities', 'Doping is done in Intrinsic semiconductors\r\n', 1),
(7, ' Which of the following technique can’t be used for generating electron-hole pairs in electronic devices?', 'Thermal excitation', 'Impact ionization', ' Photo excitation', 'Impurity injection\r\n', 1),
(8, 'Which of the following is not correct about semiconductors in electronic devices?', 'Electrons are present below Fermi level in a semiconductor', ' Degenerated semiconductors behave like a conductor', ' Fermi level is independent of temperature and doping', 'Pentavalent atoms are used in an n-type extrinsic semiconductor', 1),
(9, 'Which of the following equation represents mass action law for semiconductors in electronic circuits?', 'n × p = ni2', 'n × p = ni', 'n × p = ni3', 'n × p = ni1/2\r\n', 1),
(10, ' Which of the following is correct about Hall Effect in electronic circuits?', 'Hall voltage is very weak in metals as compared to semiconductors', 'Hall voltage is directly proportional to the charge density', 'Hall voltage is inversely proportional to the intensity of the magnetic field', 'Intrinsic semiconductor has a positive temperature coefficient of hall constant', 1),
(11, ' Which of the following is not correct about a step-graded junction in electronic devices?', 'Diodes with step-graded junctions are slower than a normal diode', ' They are designed with abrupt junction', 'They are either p+– n or p – n+ junction', 'Depletion layer penetrates more into the lightly doped region', 1),
(12, 'Which of the following is correct about photo diode electronic devices?', 'P-N junction is connected in reverse bias.', 'Electron-hole pairs are generated by impurity injection in depletion layer', ' It is a photovoltaic cell', 'No external voltage is applied', 1),
(13, 'Which of the following is wrong about solar cell electronic devices?', 'Solar cell responsivity is directly proportional to the wavelength of light', 'It produces dark current', 'It is a photovoltaic cell', 'No external voltage is applied', 1),
(14, 'What type of semiconductor is used in LED electronic circuits?', 'Intrinsic semiconductor', 'Compound semiconductor', ' Degenerated semiconductor', 'Compensated semiconductor\r\n', 1),
(15, 'Which of the following semiconductor is mostly used to construct electronic circuits?', 'Silicon', 'Germanium', 'Selenium', 'Tin', 1),
(16, 'Which of the following is correct about NMOS electronic circuits?', 'It has N-substrate', ' For inversion positive voltage is applied to the gate terminal', 'For accumulation positive voltage is applied to the gate terminal', 'NMOS has holes as the majority of carriers', 1),
(17, 'Which of the following is wrong about threshold voltage (VT) in a MOSFET electronic circuit?', ' If VT is less, channel form quickly for conductivity', 'VT can be reduced by reducing oxide layer thickness', 'VT is independent of ion implementation', 'VT can be reduced by reducing substrate doping', 1),
(18, 'Which of the following is the correct relationship between trans-conductance (Gm) and drain to source current (IDS) in an NMOS electronic circuit?', 'Gm ? IDS-3/2', 'Gm ? IDS-1/2', 'Gm ? IDS', 'Gm ? IDS1/2', 1),
(19, 'In which of the following region does BJT act as the amplifier electronic device?', ' Cut-off', ' Saturation', 'Active', ' Reverse saturation', 1),
(20, 'Which of the following is correct about NMOS electronic circuits?', 'It has N-substrate', ' For inversion positive voltage is applied to the gate terminal', ' For accumulation positive voltage is applied to the gate terminal', 'NMOS has holes as the majority of carriers', 1),
(21, 'Which of the following semiconductor is mostly used to construct electronic circuits?', 'Silicon', 'Germanium', 'Selenium', 'Tin', 1),
(22, 'An electronic circuit wire of conductivity 5.8 × 107 mho-m is subjected to an electric field of 40 mV/m. What will be its current density?', '2.32 × 106 A/m2', '1.16 × 106 A/m2', '4.64 × 106 A/m2', ' 4.30 × 106 A/m3\r\n', 1),
(23, ' Mass action law is not valid for which type of semiconductors in electronic devices?', 'Compound', 'Elemental', 'Degenerative', 'Compensated', 1),
(24, 'Which of the following is the correct expression of current in an intrinsic semiconductor electronic circuit?\r\n', 'ITotal = Ie + Ih', 'ITotal = Ie – Ih\r\n', 'ITotal = Ie + 2Ih', ' ITotal = 2Ie + Ih', 1),
(25, 'When an electronic circuit is in equilibrium then which of the following equation is valid?', 'Jdrift + Jdiffusion = 1', 'Jdrift + Jdiffusion = 0', ' Jdrift + Jdiffusion = -1', 'Jdrift + Jdiffusion = 2\r\n', 1),
(26, 'Which of the following is wrong about P-N junction diodes used in electronic devices?', 'They have three modes of operations\r\n', 'They have dynamic resistance at low-frequency AC voltage\r\n', 'They have diffusion capacitance at high-frequency AC voltage\r\n', 'They can act as ON-OFF switches', 1),
(27, 'What is the conductivity of an extrinsic type semiconductor electronic device at 0K?\r\n', 'maximum', 'zero', 'can’t be determined\r\n', 'minimum', 1),
(28, 'What is the conductivity of an extrinsic type semiconductor electronic device at 300K?\r\n', 'Maximum', 'Zero', 'Can’t be determined\r\n', 'Minimum', 1),
(29, 'Which of the following effects is responsible for violating the mass action law in degenerative type semiconductor electronic devices?', 'Thermal effect', 'Bandgap narrowing effect', 'Lattice vibration effect\r\n', 'Electronic drift effect\r\n', 1),
(30, 'Which of the following diode is used in ultra-high speed switching electronic circuits?', 'Zener diode\r\n', 'Varactor diode\r\n', 'Tunnel diode\r\n', 'Schottky diode\r\n', 1),
(31, 'The power consumed in a circuit element will be least when the phase difference between the current and voltage is', '180°', '90°', '60°', '0°', 1),
(32, 'Form Factor is the ratio of', 'Average value/r.m.s. value\r\n', ' Average value/peak value', ' r.m.s. value/average value', 'r.m.s. value/peak value', 1),
(33, 'Capacitive reactance is more when', ' Capacitance is less and frequency of supply is less', ' Capacitance is less and frequency of supply is more', 'Capacitance is more and frequency of supply is less', 'Capacitance is more and frequency of supply is more', 1),
(34, 'Pure inductive circuit\r\n', 'Consumes some power on average', 'Does not take power at all from a line', 'Takes power from the line during some part of the cycle and then returns back to it during other part of the cycle', 'None of the above', 1),
(35, 'Power factor of the following circuit will be zero', 'Resistance', 'Inductance', 'Capacitance', 'Both (B) and (C)', 1),
(36, 'The double energy transient occur in the', ' Purely inductive circuit', 'R-L circuit', 'R-C circuit', ' R-L-C circuit', 1),
(37, 'In any A.C. circuit always', 'Apparent power is more than actual power', ' Reactive power is more than apparent power', 'Actual power is more than reactive power', 'Reactive power is more than actual power', 1),
(38, 'Magnitude of current at resonance in R-L-C circuit', ' Depends upon the magnitude of R', 'Depends upon the magnitude of L', ' Depends upon the magnitude of C', 'Depends upon the magnitude of R, Land C', 1),
(39, 'The safest value of current the human body can carry for more than 3 second is', '4 mA', '9 mA', '15 mA', '25 mA', 1),
(40, 'The purpose of a parallel circuit resonance is to magnify', 'Current', 'Voltage', 'Power', 'Frequency', 1),
(41, 'The power is measured in terms of decibels in case of', 'Electronic equipment', 'Transformers', 'Current transformers', 'Auto transformers', 1),
(42, 'Wire-wound resistors are unsuitable for use at high frequencies because they', 'Create more electrical noise\r\n', 'Are likely to melt under excessive eddy current heat', 'Consume more power', 'Exhibit unwanted inductive and capacitive effects\r\n', 1),
(43, 'The product of apparent power and cosine of the phase angle between circuit voltage and current is', 'True power', ' Reactive power', 'Volt-amperes', 'Instantaneous power', 1),
(44, 'In a series resonant circuit, the impedance of the circuit is', 'Minimum', 'Maximum', 'Zero', 'None of the above\r\n', 1),
(45, 'In series resonant circuit, increasing inductance to its twice value and reducing capacitance to its half value', 'Will change the maximum value of current at resonance', ' Will change the resonance frequency', 'Will change the impedance at resonance frequency', 'Will increase the selectivity of the circuit', 1),
(46, 'In a loss-free R-L-C circuit the transient current is', 'Oscillating', 'Square wave', 'Sinusoidal', 'Non-oscillating', 1),
(47, 'In a circuit containing R, L and C, power loss can take place in\r\n', 'C only', 'L only', 'R only', 'All above', 1),
(48, 'Time constant of a capacitive circuit', 'Increases with the decrease of capacitance and decrease of resistance', 'Increases with the decrease of capacitance and increase of resistance', 'Increases with the increase of capacitance and decrease of resistance', 'Increase with increase of capacitance and increase of resistance', 1),
(49, 'The effective resistance of an iron-cored choke working on ordinary supply frequency is more than its true resistance because of', 'Iron loss in core', 'Skin effect', 'Increase in temperature', 'Capacitive effect between adjacent coil turns', 1),
(50, 'Skin effect occurs when a conductor carries current at _________ frequencies.', 'Very low', 'Low', 'Medium', 'High', 1),
(51, 'Which of the following method of measurement does a bridge circuit uses?', 'relative', 'comparison', 'absolute', 'differential', 1),
(52, 'Which of the following is the most popular method for measuring low resistance?', 'ducter ohmmeter method', 'kelvin double bridge method', 'ammeter-voltmeter method', 'potentiometer method', 1),
(53, 'Which of the following method is used for the measurement of Medium Resistance?', 'Direct-Deflection method', 'Anderson Bridge', 'Kelvin’s double bridge method', 'Carey-Foster bridge method', 1),
(54, 'Which of the following is the most sensitive detector for single frequency value?', 'oscillator', 'headphone', 'tuned detector', 'vibration galvanometer', 1),
(55, 'Under which of the following conditions a bridge is balanced?', 'When no current flows', 'When the temperature of the circuit is high', 'When power dissipation is high', 'When no voltage drop across the circuit', 0),
(56, 'Unknown capacitance value is obtained by _________', 'using a vibration galvanometer', 'using capacitance of other ratio arms', 'comparison with standard', 'using a tuned detector', 0),
(57, ' Which of the following is a balance equation for computing the resistance?', 'R1 = R2 ? R4', 'R1 = R3 ? R4', 'R1 = R2 R3', 'R1 = R2 R3?R4\r\n', 1),
(58, 'Inductance control is obtained by _________', 'using R5', 'using R4', 'using R2', 'using Lx', 1),
(59, 'A Schering bridge can be used for  ______________', ' protecting the circuit from temperature rises', 'testing capacitors', ' measuring voltages', 'measuring currents\r\n', 1),
(60, 'What is the dependence of frequency on the balance equation?', 'varies by a factor of 2', ' depends on the detector used', 'independent', 'depends on the supply magnitude', 1),
(61, ' Which of the following is the guarding arm?', 'capacitance C\r\n', 'resistance R', 'parallel RC combination', 'series RC combination', 1),
(62, 'Which of the following can be measured using Maxwell’s Inductance Capacitance Bridge?', 'Capacitance', 'Frequency', 'Mutual Inductance', 'Inductance', 1),
(63, 'A multiplier is __________', 'non-capacitive', 'capacitive', 'non-inductive', 'resistive', 1),
(64, 'The windings of a C.T. are ________', 'tied together', 'shorted', 'wound over one another', 'grounded', 1),
(65, 'How is the voltage ratio dependent on the frequency?', 'they aid each other', 'depends on the setup of the circuit', 'they are independent of each other', 'they oppose each other', 1),
(66, 'Increasing secondary burden _____________', 'decreases Is', 'keeps Is constant', ' decreases Ip', 'increases Is', 1),
(67, 'Which of the following device is used to measure power in A.C. circuits?', 'ammeter', 'wattmeter', 'voltmeter', 'ohmmeter', 1),
(68, 'When the moving coil in a Dynamometer type wattmeter deflects ________', 'pointer doesn’t move', 'current flows', 'voltage is generated', 'pointer moves\r\n', 1),
(69, 'What is the effect of capacitance on wattmeter reading?', 'opposite to that of resistance', 'aiding the capacitance\r\n', 'aiding the capacitance\r\n', 'opposite to that of inductance', 1),
(70, 'Which of the following compares the output in a successive approximation type DVM?', 'comparator', 'diode', 'op amp', 'rectifier', 1),
(71, 'Which of the following is the main device used in the linear ramp technique?', 'non-linear ramp', 'linear ramp', 'asymptotic ramp', 'exponential ramp', 1),
(72, 'Which of the following determines the rate of measurement cycles?', 'multivibrator', 'oscillator', 'oscilloscope', 'amplifier', 1),
(73, 'Which of the following devices does not belong to the transistor family?', 'IGBT', 'MOSFET', 'GTO', 'BJT', 1),
(74, ' A power transistor is a', 'three layer, three junction device', 'three layer, two junction device', 'two layer, one junction device', 'four layer, three junction device', 1),
(75, 'In a power transistor, ____ is the controlled parameter.', 'VBE', 'VCE', 'IB', 'IC', 1),
(76, 'A power transistor is a _________ device.', ' two terminal, bipolar, voltage controlled', 'two terminal, unipolar, current controlled', ' three terminal, unipolar, voltage controlled', 'three terminal, bipolar, current controlled', 1),
(77, ' In a power transistor, _________ is the controlling parameter.', 'VBE', 'VCE', 'IB', 'IC', 1),
(78, 'In a power transistor, the IB vs VBE curve is', ' a parabolic curve', 'an exponentially decaying curve', 'resembling the diode curve', ' a straight line Y = IB', 1),
(79, 'For a power transistor, if the base current IB is increased keeping VCE constant, then', 'IC increases', 'IC decreases', ' IC remains constant', ' IC remains constant', 1),
(80, 'The forward current gain ? is given by', 'IC/IB', 'IC/IE', 'IE/IC', ' IE/IB', 1),
(81, 'The value of ? is given by the expression', 'IC/IB', 'IC/IE', ' IE/IC', 'IE/IB', 1),
(82, ' A power BJT is used as a power control switch by biasing it in the cut off region (off state) or in the saturation region (on state). In the on state', 'both the base-emitter & base-collector junctions are forward biased', ' the base-emitter junction is reverse biased, and the base collector junction is forward biased', 'the base-emitter junction is forward biased, and the base collector junction is reversed biased', 'both the base-collector & the base-emitter junctions are reversed biased\r\n', 1),
(83, 'Ideally the voltage drop across a conducting diode must be', ' ?', '0', 'higher than the forward biased voltage', ' equal to the forward biased voltage\r\n', 1),
(84, ' When reverse breakdown occurs in a diode', 'voltage increases & current is constant', 'voltage increases & current also increases', 'both are constant', 'voltage is constant & current increases', 1),
(85, 'Schottky diodes are also called as', 'metal diode', 'hot carrier diode', 'signaling diode', 'easy turn on diode\r\n', 1),
(86, ' In a Schottky diode, the aluminum metal acts as a __________', 'anode', 'cathode', 'gate', 'common terminal', 1),
(87, 'If the doping levels of the semiconductor is increased, then the width of the depletion layer', 'increases', 'decreases', 'is unchanged', 'keeps oscillating', 1),
(88, 'As compared to a p-n junction device of equal rating, the Schottky diode has', 'lower reverse voltage rating', 'lower reverse leakage current', 'higher Switching time', 'higher cut-in voltage\r\n', 1),
(89, ' In a Schottky diode, the silicon layer acts as a _____________', 'anode', 'cathode', 'gate', 'common terminal\r\n', 1),
(90, 'In a certain power electronics application, it is required that the voltage at the load terminals is to be kept within a certain range of voltages only. Among the device listed below, which would be the most ideal choice for this application?', 'P-n junction diode', 'Schottky diode', 'Zener diode', 'Fast recover diode', 1),
(91, 'Shown below is the diagram of an ideal super diode. When the input voltage Vin is positive, then the output voltage Vout = ?\r\nThe output voltage Vout is Vin When the input voltage Vin is positive', 'Vout/Vin', 'Vin', '0', 'Vin * Rl', 1),
(92, 'Zener diodes allow a current to flow in the reverse direction, when the', 'voltage reaches above a certain value', 'temperature reaches above a certain value', 'current always flows in the reverse direction only', 'current cannot flow in the reverse direction', 1),
(93, 'In a communication System noise is mostly likely to attect the Signal', 'at the transmitter  ', 'in Information Source ', 'In the channel  ', 'at the receiver ', 1),
(94, 'Indicate the false statement, modulation is', 'Seperate different transmissions. ', 'reduce the bandwidth  ', 'allow the un of practical antenna ', 'ensure the intelligance for long  ', 1),
(95, 'For efficient transmission & reception antenna have height of  ', 'hall wave length ', 'one wavelength  ', 'quarter wavelength  ', 'one third wavelength ', 1),
(96, 'which assumes high frequencies of noise at', 'flicker noise  ', 'short-noise ', 'agitation', 'transit time ', 1),
(97, 'Atmospheric noise becomes less severe at frequency above about ', '38 MHz ', '80 MHz ', '50 MHz ', '12 MHz  ', 1),
(98, 'Super Solar cycle repeats alter every about ', '11 years  \r\n', '50 years  \r\n', '2 years  \r\n', '100 years  \r\n', 1),
(99, 'The value of resistor creating thermal is doubled. The most power generated ', 'doubled', 'quadrupled', 'unchanged', 'halved', 1),
(100, 'Indicate which noise does not occur transistor  ', 'shot noise  ', 'partition noise ', 'resistance', 'licker', 1),
(101, 'which of the following types of noise effective below about 5 KHz is ', 'partition noise  ', 'shot noise  ', 'flicker noise ', 'Cosmic noise ', 1),
(102, 'Noise figure of a receiver is given by  ', 'The ratio of input to output signal power', 'The ratio of In Put to output noise power ', 'The ratio of Input to output signal to now ratio ', 'none', 1),
(103, 'Indicate the false statement  \r\n', 'low noise figure good High noise  ', 'figure is good ', 'Ideal noise figure is good  ', 'None', 1),
(104, 'which of the following over all frequencies! is not uniformly distributed  ', 'white noise ', 'flicker noise ', 'shot noise  ', 'thermal noise ', 0),
(105, 'In a circuit, the value of resistor is halved. The thermal noise power generated would become  ', 'doubled ', 'halved', 'unchanged', 'none', 1),
(106, 'which of the following reduce noise mealure one fourth. cannot be und to ', 'By increasing the channel bandwidth ', 'Increase frequency ', 'By increasing the transmitted power ', 'None', 1),
(107, 'The term noise temperature is uned for  ', ' white noise Source only  ', 'Thermal noise Source only. ', 'non- Thermal noise Source only  ', ' All of there.', 1),
(108, 'The receiver connected to antenna of resistance 50 ohms & equivalent noise 30 ohms is ', '1.6 dB  ', '2.04 dB  ', '4.2 dB  ', '6.05 dB ', 1),
(109, 'For NF = 2.04 dB the equivalent noise temperature ', '102° K ', '155 k ', '174K', '	300 k  ', 1),
(110, 'Thermal noise is an ', 'proportional to B ', 'D proportional to IB  ', 'proportional to 18 ', 'proportional to B² B ', 1),
(111, 'Flicker noise is also called as ', 'white noise ', 'shot noise', 'modulation  ', 'Johnson nove', 1),
(112, 'A diode would be then a transistor  ', 'less noissy ', 'more noissy  ', 'equally noissy', 'None', 1),
(113, 'Satelite tracking stations are located in remote areas in order to minimize effect of', ' Solar noise ', 'man-made noise  ', 'Cosmic', 'the mal noise ', 1),
(114, 'The noise generated by a resistor depend upon following which of the fall', 'its operating temperature  ', 'the resistance value ', 'both 1, 2 ', 'none', 1),
(115, 'The noise can be measured by which of the following ', 'DC voltmeter  ', 'AC voltmeter  ', 'either above ', 'None', 1),
(116, 'Indicate the noise whose Source in a Category differant from that of other three ', 'its resistance ', 'temperature', 'atmospheric', 'Cosmic noise ', 1),
(117, 'Noise will have -effect when the signal is great  ', 'Stronger', 'weaker', 'totally absent ', 'None', 1),
(118, ' Transistor noise factor with increase in emitter ', 'Increase', 'decreases', 'remains Same', 'None', 1),
(119, 'Flicker noise is also called as ', 'white noise', 'shot noise', 'modulation noice ', 'Call of the above', 1),
(120, 'A diode would be than a transistor   ', 'less noissy', 'more noissy ', 'equally noissy', 'None', 1),
(121, 'The noise that results from random fluctuations in electron tuber is emission from cathode in vaccum ', 'Thermal noise', 'shot noise ', 'partition noise ', 'atmospheric noise ', 1),
(122, 'For NF = 2.04 dB the equivalent noile temperature ', '102° K ', '6 155°K  ', '174K  ', '300°K ', 1),
(123, 'pick the odd mall out: ', 'Transponder', 'Earth station ', 'GSM', 'Equatorial orbit ', 1),
(124, 'Uplink frequency is ……… downlink frequency in satellite communication. ', 'greater than ', 'smaller than ', 'equal to ', 'independent of ', 1),
(125, 'In CDMA ', 'entire bandwidth can be used all the times ', 'part of the bandwidth can be used all the times ', 'entire bandwidth can be used on time sharing basis ', 'none', 1),
(126, 'The propagation time from one earth station to another via geo-stationary satellite is approximately ', '300 ms ', '125 ms ', '125 µs ', '25 µs ', 1),
(127, ' The figure of merit for a satellite transmitter is ', 'G/T ratio ', 'C/N ratio', 'EIRP', 'none', 1),
(128, 'The approximate height of the geostationary orbit from the earth’s surface is ', '6,400 km ', '42,200 km ', '3,500 km ', '35,800 km ', 1),
(129, 'The frequency range for satellite communication is ', '1 kHz-100 kHz', '100 kHz-1 MHz ', '10 MHz-30 MHz', '	1 GHz-30 GHz ', 1),
(130, 'A random satellite moves in ', 'random paths ', 'polar orbits', 'geostationary orbits ', 'equatorial plane ', 1),
(131, 'Which of the following statements on communication by geosynchronous satellites are correct? ', 'The propagation loss over each direction (unlink are downlink) is about 200 dB at 5 GHz.', 'Radius of the geosynchronous orbit is 42250 km. ', 'An arc of about 17° must be covered by the satellite antenna in the equatorial plane. ', 'The polar regions are well covered by the satellite antenna. ', 1),
(132, 'Which one of the following statements is not correct? ', 'A geo-synchronous satellite remains practically stationary relative to earth antennas.', 'A geo-synchronous satellite means the same thing as a geo-stationary satellite.', 'There is a trade-off between the cost of a communication satellite and cost of its earth stations. ', 'Three geo-synchronous satellites cannot give 100% global coverage. ', 1),
(133, 'A geostationary satellite located at about 35000 km from the earth can cover ', 'Complete surface of the earth ', 'one hemisphere in one pass ', 'one side of the earth ', 'an area depending on antenna used ', 1),
(134, 'Which one of the following is correct? \r\nIn satellite communication links, generally ', 'the uplink carrier frequencies are greater than downlink carrier frequencies ', 'the uplink carrier frequencies are lesser than downlink carrier frequencies ', 'both uplink and downlink carrier frequencies are same ', 'it is not necessary to use carrier at all ', 1),
(135, 'What was the first commercial geostationary communication satellite? ', 'INTELSAT-1 ', 'ECHO ', 'INSAT-1A ', 'SPUTNIK ', 1),
(136, 'The order of optical frequencies is ', 'MHz', 'GHz', 'kHz', 'TeraHz', 1),
(137, 'The angstrom unit for measuring wavelength is equal to ', '10-10 m ', '10-10 cm ', '10-9 m ', '10-9 m ', 1),
(138, 'Following is not a usual classification of optical fibre: ', 'Single-mode step index ', 'Single-mode graded index ', 'Multimode step index ', 'Multimode graded index ', 1),
(139, 'The energy gap Eg of a PIN photodetector should be ……. photon energy of light ', 'greater than ', 'equal to', 'smaller than ', 'independent of ', 1),
(140, 'The numerical aperture (NA) and acceptance angle ? are related as ', 'NA = sin ? ', 'NA = sin-1 ? ', 'NA = 1?sin?21?sin2?', 'none', 1),
(141, 'The optical fibre uses ……….. portion of the EM spectrum. ', 'IR', 'VHF', 'UHF', 'HF', 1),
(142, ' For a step-index fibre, the NA across the core ', 'is variable \r\n', 'is constant ', 'may be both ', 'none', 1),
(143, 'F’s complement of (2BFD)Hex is ?. ', 'E304', 'D403', 'D402', 'C403', 1),
(144, 'Which of the following is  self complementing code  ', '8421', 'Excess -3 code.', 'pure binary code.    ', 'gray code', 1),
(145, 'what is the gray code word for the binary 101011 ?. ', '101011', '110101', '011111', '111110', 1),
(146, 'Identify the binary number represented by the decimal number 10.625 ?. ', '1010.011. ', '1010.101.', '1010.110', 'None', 1),
(147, 'The octal equivalent of the decimal number 27.125 is?.', '33.23. ', '33.28.', '33.1', '33.01', 1),
(148, 'The decimal equivalent of the octal number   237 is ?', '159', '165', '162', '160', 1),
(149, 'The decimal equivalent of hex decimal number ‘BEED’ is?. ', '47877', '48877', '48777', 'None', 1),
(150, 'The binary equivalent of the decimal number A0B5 is ?.', '1010 0001 1011 0101.', '1010 0000 1010 0101 ', '1010 0000 1011 0101.', 'None', 1),
(151, 'The octal equivalent of decimal number 215 is ?.', '327', '372', '237D', 'none', 1),
(152, 'The decimal equivalent of binary number 00110100 is ?. ', '34', '42', '52', '62', 1),
(153, 'The maximum positive and negative numbers which can be represented in Two’s complement form using n bits are respectively ', '+(2n-1 -1),-(2n-1-1)', '+(2n-1-1),-(2n-1)', '+2n-1,-2n-1', '+2n-1,-(2n-1+1) ', 1),
(154, 'The largest number that can be stored in a computer that has 16 bit word length and uses two complement? ', '32', '32767', '32768', '65536', 1),
(155, 'The parity of binary number 1011011 is .? ', 'Even', 'Odd', 'both one and two ', 'NONE', 1),
(156, 'The range of signed decimal number that can be represented by 6 bit ones complement.? ', '-31 to31', '-63 to +63.', '-64 to+63', '-32 to +31', 1),
(157, 'A six bit alpha numeric code is able to code? ', '36 characteristics', '48', '64', '128 characteristics ', 1),
(158, 'Cyclic codes are   useful in ? ', 'Arithmetic computation', 'Transferring information ', 'Continuous vary of digital signal.', 'Randomly vary digital signal ', 1),
(159, 'Binary 1000 when multiplied by  binary 1111 results ? ', '1111111', '1111100', '1111000', '1110000', 1),
(160, 'In negative logic system.? ', 'The more negative of two logic levels represent logic 1 ', 'The more negative of two logic levels represent logic 0 ', 'All input and output voltages levels are negative', 'Output is always complement of intend logic ', 1),
(161, 'The number is expressed in binary Two’s complement as 10011 its decimal equivalent is?', '19', '13', '-19', '-13', 1),
(162, 'Decimal equivalent of binary number 00110100.? ', '34', '42', '52', '62', 1),
(163, '8051…… Is a bit microcontroller  ', '4', '8', '16', '32', 1),
(164, 'The 8051 for have bytes of on-chip RAM available ', '128', '74', '256', '38', 1),
(165, '8051 has……….number of I/O parallel ports ', '3', '4', '6', '1', 1),
(166, 'In the 8051 the PC is ……. bits code  ', '16', '8', '4', '32', 1),
(167, 'which of the following is not a 8 bit register  ', 'A', 'PC', 'DPTR', 'both 2&3  ', 1),
(168, '…….number of registers banks in 8051 ', '4', '8', '16', '32', 1),
(169, 'on power up the 8051 user bank - for registers Rn-Rf ', '1', '4', '2', '3', 1),
(170, 'which of the following register is 8051 is a bit addressable register is  ', 'SBUF', 'PCON', 'PSW', 'THO', 1),
(171, ' which of the following valid instructions a bit and not a ', 'ADD A1,R1 ', 'MOV R?, R?  ', 'MOV A1,R1', 'DEC R1 ', 1),
(172, 'Upon reset the PC is loaded with ', '0000 H ', '0008H', '0009 H', '0007H ', 1),
(173, 'Data storage on stack begins from  ', '0 6H ', '0 7H  ', '0 8H  ', '0 9 H ', 1),
(174, 'when the 8051 powered up/rent sp register  Contain valve ', '06H', '0 7H ', '0 8H', '0 9H ', 1),
(175, 'Upon reur /powerful on 8051 acts as power up all the ports in ', 'I/P ports', 'o/p ports  ', 'I/o ports  ', 'None', 1),
(176, '…….is called Rom less version of ', '805I', '8052', '8031', 'None', 1),
(177, 'which port in 8051 need pull-up resister to functions a i/o port an  ', 'port o', ' port 1 ', 'port 2  ', ' port 3 ', 0),
(178, '.The address of the register R, in Bank 1  ', '01 H  ', '09bH ', 'OA H', '0F H ', 1),
(179, 'The address of the register R& in Bank 1  ', 'IEN', 'DIFH', 'IDH', 'IGH', 1),
(180, '…..is used to convert assembly language program into machine language is  ', 'Assembler', 'Compiler', 'Both 1, 2  ', 'None', 1),
(181, 'Assembly language is also called as  ', 'high level language ', 'low level language ', 'medium level language  ', 'very high level language ', 1),
(182, ' Number of bit addressable bits in 8051 pc is', '16', '128', '132', '127', 1),
(183, 'which pin is not i /o pin  ', 'ALE', 'EA VFF ', 'RST', 'both 1&2 ', 1),
(184, 'In 8051 after division operation quotient within- register. ', 'A', 'B', 'Rn', 'PC', 1),
(185, 'In be 8051 after division operation remainder will. in- ', 'A', 'B', 'MUL AP ', 'Rn', 1),
(186, 'MUL A,B is a…….instructions (Ari-a) ', '1', '2', '3', '4', 1),
(187, 'To send Simultaneous voice and data signal  LAN Should  ', 'Twisted pair wire voice and data signals', 'Bauband coanal cable', 'Broad band coaxial cable  ', 'None', 1),
(188, 'nost data communication involving telegraph lines\"  ', 'Simplex line', 'Naron band channels ', 'wideband channel ', 'Drolled Services', 1),
(189, 'Before information can be transformed into. signals………. transmitted it most be', 'v', 'electromagnetic ', 'Aperiodic', 'None', 1),
(190, 'which of the following into signals can transform information  ', 'Decoder', 'Encoder', 'modern', 'None', 1),
(191, '10 base 2 use cables ……… ', 'Thick coaxal', 'Thin coaxial  ', 'Thisted pair  ', 'None', 1),
(192, '10 base 5 Cable……….. ', 'Thick Coaxial  ', 'thin coaxial  \r\n', 'Twisted pair ', 'None', 1),
(193, '10 base 2 & 10 base 5 have dillerant  ', 'Signal band types', 'Fields on the 802.3 trames. ', 'manimum Segments lengths', 'None', 1),
(194, 'STP helps to eliminate ', 'noise', 'Error', 'Cross talk ', 'voltage', 1),
(195, 'The two wires inside a UTP are twisted around each other to reduce. ', 'Noise', 'Error', 'Cross talk  \r\n', 'voltage', 1),
(196, 'optical fibre uses - for data transmission  ', 'voltage', 'current', 'light', 'sound', 1),
(197, 'If all the guided media,. transmission  has the highest rates', 'optical fibre ', 'coaxial fibre', 'UTP', 'STP', 1),
(198, 'Shannon channel capacity is given by c= bits/sec  ', 'B logs (1+S/N) ', 'B log. (S/W)  ', 'B log. (N/s)', 'None', 1),
(199, 'which of the following is considered a broad band Communication channel', 'Satelite System  ', 'Microwave Circuits ', 'Coaxial Cable ', 'All the above ', 1),
(200, 'which of the following is not a transmission medium  ', 'Telephone lines', ' Coamial lines ', 'Modem', 'microwave links.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_ece`
--
ALTER TABLE `question_ece`
  ADD PRIMARY KEY (`ques_id`),
  ADD UNIQUE KEY `ques_id` (`ques_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
