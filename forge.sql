-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 14 2020 г., 09:40
-- Версия сервера: 5.6.41
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `forge`
--

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `value`, `body`) VALUES
(1, 'ETHBTC', 0, ''),
(2, 'LTCBTC', 0, ''),
(3, 'BNBBTC', 0, ''),
(4, 'NEOBTC', 0, ''),
(5, 'QTUMETH', 0, ''),
(6, 'EOSETH', 0, ''),
(7, 'SNTETH', 0, ''),
(8, 'BNTETH', 0, ''),
(9, 'BCCBTC', 0, ''),
(10, 'GASBTC', 0, ''),
(11, 'BNBETH', 0, ''),
(12, 'BTCUSDT', 8498, ''),
(13, 'ETHUSDT', 149, ''),
(14, 'HSRBTC', 0, ''),
(15, 'OAXETH', 0, ''),
(16, 'DNTETH', 0, ''),
(17, 'MCOETH', 0, ''),
(18, 'ICNETH', 0, ''),
(19, 'MCOBTC', 0, ''),
(20, 'WTCBTC', 0, ''),
(21, 'WTCETH', 0, ''),
(22, 'LRCBTC', 0, ''),
(23, 'LRCETH', 0, ''),
(24, 'QTUMBTC', 0, ''),
(25, 'YOYOBTC', 0, ''),
(26, 'OMGBTC', 0, ''),
(27, 'OMGETH', 0, ''),
(28, 'ZRXBTC', 0, ''),
(29, 'ZRXETH', 0, ''),
(30, 'STRATBTC', 0, ''),
(31, 'STRATETH', 0, ''),
(32, 'SNGLSBTC', 0, ''),
(33, 'SNGLSETH', 0, ''),
(34, 'BQXBTC', 0, ''),
(35, 'BQXETH', 0, ''),
(36, 'KNCBTC', 0, ''),
(37, 'KNCETH', 0, ''),
(38, 'FUNBTC', 0, ''),
(39, 'FUNETH', 0, ''),
(40, 'SNMBTC', 0, ''),
(41, 'SNMETH', 0, ''),
(42, 'NEOETH', 0, ''),
(43, 'IOTABTC', 0, ''),
(44, 'IOTAETH', 0, ''),
(45, 'LINKBTC', 0, ''),
(46, 'LINKETH', 0, ''),
(47, 'XVGBTC', 0, ''),
(48, 'XVGETH', 0, ''),
(49, 'SALTBTC', 0, ''),
(50, 'SALTETH', 0, ''),
(51, 'MDABTC', 0, ''),
(52, 'MDAETH', 0, ''),
(53, 'MTLBTC', 0, ''),
(54, 'MTLETH', 0, ''),
(55, 'SUBBTC', 0, ''),
(56, 'SUBETH', 0, ''),
(57, 'EOSBTC', 0, ''),
(58, 'SNTBTC', 0, ''),
(59, 'ETCETH', 0, ''),
(60, 'ETCBTC', 0, ''),
(61, 'MTHBTC', 0, ''),
(62, 'MTHETH', 0, ''),
(63, 'ENGBTC', 0, ''),
(64, 'ENGETH', 0, ''),
(65, 'DNTBTC', 0, ''),
(66, 'ZECBTC', 0, ''),
(67, 'ZECETH', 0, ''),
(68, 'BNTBTC', 0, ''),
(69, 'ASTBTC', 0, ''),
(70, 'ASTETH', 0, ''),
(71, 'DASHBTC', 0, ''),
(72, 'DASHETH', 1, ''),
(73, 'OAXBTC', 0, ''),
(74, 'ICNBTC', 0, ''),
(75, 'BTGBTC', 0, ''),
(76, 'BTGETH', 0, ''),
(77, 'EVXBTC', 0, ''),
(78, 'EVXETH', 0, ''),
(79, 'REQBTC', 0, ''),
(80, 'REQETH', 0, ''),
(81, 'VIBBTC', 0, ''),
(82, 'VIBETH', 0, ''),
(83, 'HSRETH', 0, ''),
(84, 'TRXBTC', 0, ''),
(85, 'TRXETH', 0, ''),
(86, 'POWRBTC', 0, ''),
(87, 'POWRETH', 0, ''),
(88, 'ARKBTC', 0, ''),
(89, 'ARKETH', 0, ''),
(90, 'YOYOETH', 0, ''),
(91, 'XRPBTC', 0, ''),
(92, 'XRPETH', 0, ''),
(93, 'MODBTC', 0, ''),
(94, 'MODETH', 0, ''),
(95, 'ENJBTC', 0, ''),
(96, 'ENJETH', 0, ''),
(97, 'STORJBTC', 0, ''),
(98, 'STORJETH', 0, ''),
(99, 'BNBUSDT', 15, ''),
(100, 'VENBNB', 0, ''),
(101, 'YOYOBNB', 0, ''),
(102, 'POWRBNB', 0, ''),
(103, 'VENBTC', 0, ''),
(104, 'VENETH', 0, ''),
(105, 'KMDBTC', 0, ''),
(106, 'KMDETH', 0, ''),
(107, 'NULSBNB', 0, ''),
(108, 'RCNBTC', 0, ''),
(109, 'RCNETH', 0, ''),
(110, 'RCNBNB', 0, ''),
(111, 'NULSBTC', 0, ''),
(112, 'NULSETH', 0, ''),
(113, 'RDNBTC', 0, ''),
(114, 'RDNETH', 0, ''),
(115, 'RDNBNB', 0, ''),
(116, 'XMRBTC', 0, ''),
(117, 'XMRETH', 0, ''),
(118, 'DLTBNB', 0, ''),
(119, 'WTCBNB', 0, ''),
(120, 'DLTBTC', 0, ''),
(121, 'DLTETH', 0, ''),
(122, 'AMBBTC', 0, ''),
(123, 'AMBETH', 0, ''),
(124, 'AMBBNB', 0, ''),
(125, 'BCCETH', 2, ''),
(126, 'BCCUSDT', 449, ''),
(127, 'BCCBNB', 54, ''),
(128, 'BATBTC', 0, ''),
(129, 'BATETH', 0, ''),
(130, 'BATBNB', 0, ''),
(131, 'BCPTBTC', 0, ''),
(132, 'BCPTETH', 0, ''),
(133, 'BCPTBNB', 0, ''),
(134, 'ARNBTC', 0, ''),
(135, 'ARNETH', 0, ''),
(136, 'GVTBTC', 0, ''),
(137, 'GVTETH', 0, ''),
(138, 'CDTBTC', 0, ''),
(139, 'CDTETH', 0, ''),
(140, 'GXSBTC', 0, ''),
(141, 'GXSETH', 0, ''),
(142, 'NEOUSDT', 10, ''),
(143, 'NEOBNB', 1, ''),
(144, 'POEBTC', 0, ''),
(145, 'POEETH', 0, ''),
(146, 'QSPBTC', 0, ''),
(147, 'QSPETH', 0, ''),
(148, 'QSPBNB', 0, ''),
(149, 'BTSBTC', 0, ''),
(150, 'BTSETH', 0, ''),
(151, 'BTSBNB', 0, ''),
(152, 'XZCBTC', 0, ''),
(153, 'XZCETH', 0, ''),
(154, 'XZCBNB', 0, ''),
(155, 'LSKBTC', 0, ''),
(156, 'LSKETH', 0, ''),
(157, 'LSKBNB', 0, ''),
(158, 'TNTBTC', 0, ''),
(159, 'TNTETH', 0, ''),
(160, 'FUELBTC', 0, ''),
(161, 'FUELETH', 0, ''),
(162, 'MANABTC', 0, ''),
(163, 'MANAETH', 0, ''),
(164, 'BCDBTC', 0, ''),
(165, 'BCDETH', 0, ''),
(166, 'DGDBTC', 0, ''),
(167, 'DGDETH', 0, ''),
(168, 'IOTABNB', 0, ''),
(169, 'ADXBTC', 0, ''),
(170, 'ADXETH', 0, ''),
(171, 'ADXBNB', 0, ''),
(172, 'ADABTC', 0, ''),
(173, 'ADAETH', 0, ''),
(174, 'PPTBTC', 0, ''),
(175, 'PPTETH', 0, ''),
(176, 'CMTBTC', 0, ''),
(177, 'CMTETH', 0, ''),
(178, 'CMTBNB', 0, ''),
(179, 'XLMBTC', 0, ''),
(180, 'XLMETH', 0, ''),
(181, 'XLMBNB', 0, ''),
(182, 'CNDBTC', 0, ''),
(183, 'CNDETH', 0, ''),
(184, 'CNDBNB', 0, ''),
(185, 'LENDBTC', 0, ''),
(186, 'LENDETH', 0, ''),
(187, 'WABIBTC', 0, ''),
(188, 'WABIETH', 0, ''),
(189, 'WABIBNB', 0, ''),
(190, 'LTCETH', 0, ''),
(191, 'LTCUSDT', 53, ''),
(192, 'LTCBNB', 3, ''),
(193, 'TNBBTC', 0, ''),
(194, 'TNBETH', 0, ''),
(195, 'WAVESBTC', 0, ''),
(196, 'WAVESETH', 0, ''),
(197, 'WAVESBNB', 0, ''),
(198, 'GTOBTC', 0, ''),
(199, 'GTOETH', 0, ''),
(200, 'GTOBNB', 0, ''),
(201, 'ICXBTC', 0, ''),
(202, 'ICXETH', 0, ''),
(203, 'ICXBNB', 0, ''),
(204, 'OSTBTC', 0, ''),
(205, 'OSTETH', 0, ''),
(206, 'OSTBNB', 0, ''),
(207, 'ELFBTC', 0, ''),
(208, 'ELFETH', 0, ''),
(209, 'AIONBTC', 0, ''),
(210, 'AIONETH', 0, ''),
(211, 'AIONBNB', 0, ''),
(212, 'NEBLBTC', 0, ''),
(213, 'NEBLETH', 0, ''),
(214, 'NEBLBNB', 0, ''),
(215, 'BRDBTC', 0, ''),
(216, 'BRDETH', 0, ''),
(217, 'BRDBNB', 0, ''),
(218, 'MCOBNB', 0, ''),
(219, 'EDOBTC', 0, ''),
(220, 'EDOETH', 0, ''),
(221, 'WINGSBTC', 0, ''),
(222, 'WINGSETH', 0, ''),
(223, 'NAVBTC', 0, ''),
(224, 'NAVETH', 0, ''),
(225, 'NAVBNB', 0, ''),
(226, 'LUNBTC', 0, ''),
(227, 'LUNETH', 0, ''),
(228, 'TRIGBTC', 0, ''),
(229, 'TRIGETH', 0, ''),
(230, 'TRIGBNB', 0, ''),
(231, 'APPCBTC', 0, ''),
(232, 'APPCETH', 0, ''),
(233, 'APPCBNB', 0, ''),
(234, 'VIBEBTC', 0, ''),
(235, 'VIBEETH', 0, ''),
(236, 'RLCBTC', 0, ''),
(237, 'RLCETH', 0, ''),
(238, 'RLCBNB', 0, ''),
(239, 'INSBTC', 0, ''),
(240, 'INSETH', 0, ''),
(241, 'PIVXBTC', 0, ''),
(242, 'PIVXETH', 0, ''),
(243, 'PIVXBNB', 0, ''),
(244, 'IOSTBTC', 0, ''),
(245, 'IOSTETH', 0, ''),
(246, 'CHATBTC', 0, ''),
(247, 'CHATETH', 0, ''),
(248, 'STEEMBTC', 0, ''),
(249, 'STEEMETH', 0, ''),
(250, 'STEEMBNB', 0, ''),
(251, 'NANOBTC', 0, ''),
(252, 'NANOETH', 0, ''),
(253, 'NANOBNB', 0, ''),
(254, 'VIABTC', 0, ''),
(255, 'VIAETH', 0, ''),
(256, 'VIABNB', 0, ''),
(257, 'BLZBTC', 0, ''),
(258, 'BLZETH', 0, ''),
(259, 'BLZBNB', 0, ''),
(260, 'AEBTC', 0, ''),
(261, 'AEETH', 0, ''),
(262, 'AEBNB', 0, ''),
(263, 'RPXBTC', 0, ''),
(264, 'RPXETH', 0, ''),
(265, 'RPXBNB', 0, ''),
(266, 'NCASHBTC', 0, ''),
(267, 'NCASHETH', 0, ''),
(268, 'NCASHBNB', 0, ''),
(269, 'POABTC', 0, ''),
(270, 'POAETH', 0, ''),
(271, 'POABNB', 0, ''),
(272, 'ZILBTC', 0, ''),
(273, 'ZILETH', 0, ''),
(274, 'ZILBNB', 0, ''),
(275, 'ONTBTC', 0, ''),
(276, 'ONTETH', 0, ''),
(277, 'ONTBNB', 0, ''),
(278, 'STORMBTC', 0, ''),
(279, 'STORMETH', 0, ''),
(280, 'STORMBNB', 0, ''),
(281, 'QTUMBNB', 0, ''),
(282, 'QTUMUSDT', 2, ''),
(283, 'XEMBTC', 0, ''),
(284, 'XEMETH', 0, ''),
(285, 'XEMBNB', 0, ''),
(286, 'WANBTC', 0, ''),
(287, 'WANETH', 0, ''),
(288, 'WANBNB', 0, ''),
(289, 'WPRBTC', 0, ''),
(290, 'WPRETH', 0, ''),
(291, 'QLCBTC', 0, ''),
(292, 'QLCETH', 0, ''),
(293, 'SYSBTC', 0, ''),
(294, 'SYSETH', 0, ''),
(295, 'SYSBNB', 0, ''),
(296, 'QLCBNB', 0, ''),
(297, 'GRSBTC', 0, ''),
(298, 'GRSETH', 0, ''),
(299, 'ADAUSDT', 0, ''),
(300, 'ADABNB', 0, ''),
(301, 'CLOAKBTC', 0, ''),
(302, 'CLOAKETH', 0, ''),
(303, 'GNTBTC', 0, ''),
(304, 'GNTETH', 0, ''),
(305, 'GNTBNB', 0, ''),
(306, 'LOOMBTC', 0, ''),
(307, 'LOOMETH', 0, ''),
(308, 'LOOMBNB', 0, ''),
(309, 'XRPUSDT', 0, ''),
(310, 'BCNBTC', 0, ''),
(311, 'BCNETH', 0, ''),
(312, 'BCNBNB', 0, ''),
(313, 'REPBTC', 0, ''),
(314, 'REPETH', 0, ''),
(315, 'REPBNB', 0, ''),
(316, 'BTCTUSD', 8503, ''),
(317, 'TUSDBTC', 0, ''),
(318, 'ETHTUSD', 149, ''),
(319, 'TUSDETH', 0, ''),
(320, 'TUSDBNB', 0, ''),
(321, 'ZENBTC', 0, ''),
(322, 'ZENETH', 0, ''),
(323, 'ZENBNB', 1, ''),
(324, 'SKYBTC', 0, ''),
(325, 'SKYETH', 0, ''),
(326, 'SKYBNB', 0, ''),
(327, 'EOSUSDT', 3, ''),
(328, 'EOSBNB', 0, ''),
(329, 'CVCBTC', 0, ''),
(330, 'CVCETH', 0, ''),
(331, 'CVCBNB', 0, ''),
(332, 'THETABTC', 0, ''),
(333, 'THETAETH', 0, ''),
(334, 'THETABNB', 0, ''),
(335, 'XRPBNB', 0, ''),
(336, 'TUSDUSDT', 1, ''),
(337, 'IOTAUSDT', 0, ''),
(338, 'XLMUSDT', 0, ''),
(339, 'IOTXBTC', 0, ''),
(340, 'IOTXETH', 0, ''),
(341, 'QKCBTC', 0, ''),
(342, 'QKCETH', 0, ''),
(343, 'AGIBTC', 0, ''),
(344, 'AGIETH', 0, ''),
(345, 'AGIBNB', 0, ''),
(346, 'NXSBTC', 0, ''),
(347, 'NXSETH', 0, ''),
(348, 'NXSBNB', 0, ''),
(349, 'ENJBNB', 0, ''),
(350, 'DATABTC', 0, ''),
(351, 'DATAETH', 0, ''),
(352, 'ONTUSDT', 1, ''),
(353, 'TRXBNB', 0, ''),
(354, 'TRXUSDT', 0, ''),
(355, 'ETCUSDT', 6, ''),
(356, 'ETCBNB', 0, ''),
(357, 'ICXUSDT', 0, ''),
(358, 'SCBTC', 0, ''),
(359, 'SCETH', 0, ''),
(360, 'SCBNB', 0, ''),
(361, 'NPXSBTC', 0, ''),
(362, 'NPXSETH', 0, ''),
(363, 'VENUSDT', 0, ''),
(364, 'KEYBTC', 0, ''),
(365, 'KEYETH', 0, ''),
(366, 'NASBTC', 0, ''),
(367, 'NASETH', 0, ''),
(368, 'NASBNB', 0, ''),
(369, 'MFTBTC', 0, ''),
(370, 'MFTETH', 0, ''),
(371, 'MFTBNB', 0, ''),
(372, 'DENTBTC', 0, ''),
(373, 'DENTETH', 0, ''),
(374, 'ARDRBTC', 0, ''),
(375, 'ARDRETH', 0, ''),
(376, 'ARDRBNB', 0, ''),
(377, 'NULSUSDT', 0, ''),
(378, 'HOTBTC', 0, ''),
(379, 'HOTETH', 0, ''),
(380, 'VETBTC', 0, ''),
(381, 'VETETH', 0, ''),
(382, 'VETUSDT', 0, ''),
(383, 'VETBNB', 0, ''),
(384, 'DOCKBTC', 0, ''),
(385, 'DOCKETH', 0, ''),
(386, 'POLYBTC', 0, ''),
(387, 'POLYBNB', 0, ''),
(388, 'PHXBTC', 0, ''),
(389, 'PHXETH', 0, ''),
(390, 'PHXBNB', 0, ''),
(391, 'HCBTC', 0, ''),
(392, 'HCETH', 0, ''),
(393, 'GOBTC', 0, ''),
(394, 'GOBNB', 0, ''),
(395, 'PAXBTC', 0, ''),
(396, 'PAXBNB', 0, ''),
(397, 'PAXUSDT', 1, ''),
(398, 'PAXETH', 0, ''),
(399, 'RVNBTC', 0, ''),
(400, 'RVNBNB', 0, ''),
(401, 'DCRBTC', 0, ''),
(402, 'DCRBNB', 1, ''),
(403, 'USDCBNB', 0, ''),
(404, 'MITHBTC', 0, ''),
(405, 'MITHBNB', 0, ''),
(406, 'BCHABCBTC', 0, ''),
(407, 'BCHSVBTC', 0, ''),
(408, 'BCHABCUSDT', 220, ''),
(409, 'BCHSVUSDT', 59, ''),
(410, 'BNBPAX', 15, ''),
(411, 'BTCPAX', 8503, ''),
(412, 'ETHPAX', 149, ''),
(413, 'XRPPAX', 0, ''),
(414, 'EOSPAX', 3, ''),
(415, 'XLMPAX', 0, ''),
(416, 'RENBTC', 0, ''),
(417, 'RENBNB', 0, ''),
(418, 'BNBTUSD', 15, ''),
(419, 'XRPTUSD', 0, ''),
(420, 'EOSTUSD', 3, ''),
(421, 'XLMTUSD', 0, ''),
(422, 'BNBUSDC', 15, ''),
(423, 'BTCUSDC', 8501, ''),
(424, 'ETHUSDC', 149, ''),
(425, 'XRPUSDC', 0, ''),
(426, 'EOSUSDC', 3, ''),
(427, 'XLMUSDC', 0, ''),
(428, 'USDCUSDT', 1, ''),
(429, 'ADATUSD', 0, ''),
(430, 'TRXTUSD', 0, ''),
(431, 'NEOTUSD', 10, ''),
(432, 'TRXXRP', 0, ''),
(433, 'XZCXRP', 20, ''),
(434, 'PAXTUSD', 1, ''),
(435, 'USDCTUSD', 1, ''),
(436, 'USDCPAX', 1, ''),
(437, 'LINKUSDT', 2, ''),
(438, 'LINKTUSD', 2, ''),
(439, 'LINKPAX', 2, ''),
(440, 'LINKUSDC', 2, ''),
(441, 'WAVESUSDT', 1, ''),
(442, 'WAVESTUSD', 1, ''),
(443, 'WAVESPAX', 1, ''),
(444, 'WAVESUSDC', 1, ''),
(445, 'BCHABCTUSD', 220, ''),
(446, 'BCHABCPAX', 221, ''),
(447, 'BCHABCUSDC', 220, ''),
(448, 'BCHSVTUSD', 59, ''),
(449, 'BCHSVPAX', 58, ''),
(450, 'BCHSVUSDC', 58, ''),
(451, 'LTCTUSD', 53, ''),
(452, 'LTCPAX', 53, ''),
(453, 'LTCUSDC', 53, ''),
(454, 'TRXPAX', 0, ''),
(455, 'TRXUSDC', 0, ''),
(456, 'BTTBTC', 0, ''),
(457, 'BTTBNB', 0, ''),
(458, 'BTTUSDT', 0, ''),
(459, 'BNBUSDS', 16, ''),
(460, 'BTCUSDS', 8513, ''),
(461, 'USDSUSDT', 1, ''),
(462, 'USDSPAX', 1, ''),
(463, 'USDSTUSD', 1, ''),
(464, 'USDSUSDC', 1, ''),
(465, 'BTTPAX', 0, ''),
(466, 'BTTTUSD', 0, ''),
(467, 'BTTUSDC', 0, ''),
(468, 'ONGBNB', 0, ''),
(469, 'ONGBTC', 0, ''),
(470, 'ONGUSDT', 0, ''),
(471, 'HOTBNB', 0, ''),
(472, 'HOTUSDT', 0, ''),
(473, 'ZILUSDT', 0, ''),
(474, 'ZRXBNB', 0, ''),
(475, 'ZRXUSDT', 0, ''),
(476, 'FETBNB', 0, ''),
(477, 'FETBTC', 0, ''),
(478, 'FETUSDT', 0, ''),
(479, 'BATUSDT', 0, ''),
(480, 'XMRBNB', 4, ''),
(481, 'XMRUSDT', 61, ''),
(482, 'ZECBNB', 3, ''),
(483, 'ZECUSDT', 42, ''),
(484, 'ZECPAX', 42, ''),
(485, 'ZECTUSD', 42, ''),
(486, 'ZECUSDC', 42, ''),
(487, 'IOSTBNB', 0, ''),
(488, 'IOSTUSDT', 0, ''),
(489, 'CELRBNB', 0, ''),
(490, 'CELRBTC', 0, ''),
(491, 'CELRUSDT', 0, ''),
(492, 'ADAPAX', 0, ''),
(493, 'ADAUSDC', 0, ''),
(494, 'NEOPAX', 10, ''),
(495, 'NEOUSDC', 10, ''),
(496, 'DASHBNB', 5, ''),
(497, 'DASHUSDT', 77, ''),
(498, 'NANOUSDT', 1, ''),
(499, 'OMGBNB', 0, ''),
(500, 'OMGUSDT', 1, ''),
(501, 'THETAUSDT', 0, ''),
(502, 'ENJUSDT', 0, ''),
(503, 'MITHUSDT', 0, ''),
(504, 'MATICBNB', 0, ''),
(505, 'MATICBTC', 0, ''),
(506, 'MATICUSDT', 0, ''),
(507, 'ATOMBNB', 0, ''),
(508, 'ATOMBTC', 0, ''),
(509, 'ATOMUSDT', 4, ''),
(510, 'ATOMUSDC', 4, ''),
(511, 'ATOMPAX', 3, ''),
(512, 'ATOMTUSD', 4, ''),
(513, 'ETCUSDC', 5, ''),
(514, 'ETCPAX', 5, ''),
(515, 'ETCTUSD', 4, ''),
(516, 'BATUSDC', 0, ''),
(517, 'BATPAX', 0, ''),
(518, 'BATTUSD', 0, ''),
(519, 'PHBBNB', 0, ''),
(520, 'PHBBTC', 0, ''),
(521, 'PHBUSDC', 0, ''),
(522, 'PHBTUSD', 0, ''),
(523, 'PHBPAX', 0, ''),
(524, 'TFUELBNB', 0, ''),
(525, 'TFUELBTC', 0, ''),
(526, 'TFUELUSDT', 0, ''),
(527, 'TFUELUSDC', 0, ''),
(528, 'TFUELTUSD', 0, ''),
(529, 'TFUELPAX', 0, ''),
(530, 'ONEBNB', 0, ''),
(531, 'ONEBTC', 0, ''),
(532, 'ONEUSDT', 0, ''),
(533, 'ONETUSD', 0, ''),
(534, 'ONEPAX', 0, ''),
(535, 'ONEUSDC', 0, ''),
(536, 'FTMBNB', 0, ''),
(537, 'FTMBTC', 0, ''),
(538, 'FTMUSDT', 0, ''),
(539, 'FTMTUSD', 0, ''),
(540, 'FTMPAX', 0, ''),
(541, 'FTMUSDC', 0, ''),
(542, 'BTCBBTC', 1, ''),
(543, 'BCPTTUSD', 0, ''),
(544, 'BCPTPAX', 0, ''),
(545, 'BCPTUSDC', 0, ''),
(546, 'ALGOBNB', 0, ''),
(547, 'ALGOBTC', 0, ''),
(548, 'ALGOUSDT', 0, ''),
(549, 'ALGOTUSD', 0, ''),
(550, 'ALGOPAX', 0, ''),
(551, 'ALGOUSDC', 0, ''),
(552, 'USDSBUSDT', 1, ''),
(553, 'USDSBUSDS', 1, ''),
(554, 'GTOUSDT', 0, ''),
(555, 'GTOPAX', 0, ''),
(556, 'GTOTUSD', 0, ''),
(557, 'GTOUSDC', 0, ''),
(558, 'ERDBNB', 0, ''),
(559, 'ERDBTC', 0, ''),
(560, 'ERDUSDT', 0, ''),
(561, 'ERDPAX', 0, ''),
(562, 'ERDUSDC', 0, ''),
(563, 'DOGEBNB', 0, ''),
(564, 'DOGEBTC', 0, ''),
(565, 'DOGEUSDT', 0, ''),
(566, 'DOGEPAX', 0, ''),
(567, 'DOGEUSDC', 0, ''),
(568, 'DUSKBNB', 0, ''),
(569, 'DUSKBTC', 0, ''),
(570, 'DUSKUSDT', 0, ''),
(571, 'DUSKUSDC', 0, ''),
(572, 'DUSKPAX', 0, ''),
(573, 'BGBPUSDC', 1, ''),
(574, 'ANKRBNB', 0, ''),
(575, 'ANKRBTC', 0, ''),
(576, 'ANKRUSDT', 0, ''),
(577, 'ANKRTUSD', 0, ''),
(578, 'ANKRPAX', 0, ''),
(579, 'ANKRUSDC', 0, ''),
(580, 'ONTPAX', 1, ''),
(581, 'ONTUSDC', 1, ''),
(582, 'WINBNB', 0, ''),
(583, 'WINBTC', 0, ''),
(584, 'WINUSDT', 0, ''),
(585, 'WINUSDC', 0, ''),
(586, 'COSBNB', 0, ''),
(587, 'COSBTC', 0, ''),
(588, 'COSUSDT', 0, ''),
(589, 'TUSDBTUSD', 1, ''),
(590, 'NPXSUSDT', 0, ''),
(591, 'NPXSUSDC', 0, ''),
(592, 'COCOSBNB', 0, ''),
(593, 'COCOSBTC', 0, ''),
(594, 'COCOSUSDT', 0, ''),
(595, 'MTLUSDT', 0, ''),
(596, 'TOMOBNB', 0, ''),
(597, 'TOMOBTC', 0, ''),
(598, 'TOMOUSDT', 0, ''),
(599, 'TOMOUSDC', 0, ''),
(600, 'PERLBNB', 0, ''),
(601, 'PERLBTC', 0, ''),
(602, 'PERLUSDC', 0, ''),
(603, 'PERLUSDT', 0, ''),
(604, 'DENTUSDT', 0, ''),
(605, 'MFTUSDT', 0, ''),
(606, 'KEYUSDT', 0, ''),
(607, 'STORMUSDT', 0, ''),
(608, 'DOCKUSDT', 0, ''),
(609, 'WANUSDT', 0, ''),
(610, 'FUNUSDT', 0, ''),
(611, 'CVCUSDT', 0, ''),
(612, 'BTTTRX', 0, ''),
(613, 'WINTRX', 0, ''),
(614, 'CHZBNB', 0, ''),
(615, 'CHZBTC', 0, ''),
(616, 'CHZUSDT', 0, ''),
(617, 'BANDBNB', 0, ''),
(618, 'BANDBTC', 0, ''),
(619, 'BANDUSDT', 0, ''),
(620, 'BNBBUSD', 15, ''),
(621, 'BTCBUSD', 8503, ''),
(622, 'BUSDUSDT', 1, ''),
(623, 'BEAMBNB', 0, ''),
(624, 'BEAMBTC', 0, ''),
(625, 'BEAMUSDT', 1, ''),
(626, 'XTZBNB', 0, ''),
(627, 'XTZBTC', 0, ''),
(628, 'XTZUSDT', 1, ''),
(629, 'RENUSDT', 0, ''),
(630, 'RVNUSDT', 0, ''),
(631, 'HCUSDT', 1, ''),
(632, 'HBARBNB', 0, ''),
(633, 'HBARBTC', 0, ''),
(634, 'HBARUSDT', 0, ''),
(635, 'NKNBNB', 0, ''),
(636, 'NKNBTC', 0, ''),
(637, 'NKNUSDT', 0, ''),
(638, 'XRPBUSD', 0, ''),
(639, 'ETHBUSD', 149, ''),
(640, 'BCHABCBUSD', 220, ''),
(641, 'LTCBUSD', 53, ''),
(642, 'LINKBUSD', 2, ''),
(643, 'ETCBUSD', 6, ''),
(644, 'STXBNB', 0, ''),
(645, 'STXBTC', 0, ''),
(646, 'STXUSDT', 0, ''),
(647, 'KAVABNB', 0, ''),
(648, 'KAVABTC', 0, ''),
(649, 'KAVAUSDT', 1, ''),
(650, 'BUSDNGN', 360, ''),
(651, 'BNBNGN', 5561, ''),
(652, 'BTCNGN', 3054670, ''),
(653, 'ARPABNB', 0, ''),
(654, 'ARPABTC', 0, ''),
(655, 'ARPAUSDT', 0, ''),
(656, 'TRXBUSD', 0, ''),
(657, 'EOSBUSD', 3, ''),
(658, 'IOTXUSDT', 0, ''),
(659, 'RLCUSDT', 0, ''),
(660, 'MCOUSDT', 5, ''),
(661, 'XLMBUSD', 0, ''),
(662, 'ADABUSD', 0, ''),
(663, 'CTXCBNB', 0, ''),
(664, 'CTXCBTC', 0, ''),
(665, 'CTXCUSDT', 0, ''),
(666, 'BCHBNB', 18, ''),
(667, 'BCHBTC', 0, ''),
(668, 'BCHUSDT', 283, ''),
(669, 'BCHUSDC', 282, ''),
(670, 'BCHTUSD', 281, ''),
(671, 'BCHPAX', 282, ''),
(672, 'BCHBUSD', 281, ''),
(673, 'BTCRUB', 520035, ''),
(674, 'ETHRUB', 9055, ''),
(675, 'XRPRUB', 13, ''),
(676, 'BNBRUB', 942, ''),
(677, 'TROYBNB', 0, ''),
(678, 'TROYBTC', 0, ''),
(679, 'TROYUSDT', 0, ''),
(680, 'BUSDRUB', 61, ''),
(681, 'QTUMBUSD', 2, ''),
(682, 'VETBUSD', 0, ''),
(683, 'VITEBNB', 0, ''),
(684, 'VITEBTC', 0, ''),
(685, 'VITEUSDT', 0, ''),
(686, 'FTTBNB', 0, ''),
(687, 'FTTBTC', 0, ''),
(688, 'FTTUSDT', 2, ''),
(689, 'BTCTRY', 49950, ''),
(690, 'BNBTRY', 91, ''),
(691, 'BUSDTRY', 6, ''),
(692, 'ETHTRY', 874, ''),
(693, 'XRPTRY', 1, ''),
(694, 'USDTTRY', 6, ''),
(695, 'USDTRUB', 61, ''),
(696, 'BTCEUR', 7646, ''),
(697, 'ETHEUR', 133, ''),
(698, 'BNBEUR', 14, ''),
(699, 'XRPEUR', 0, ''),
(700, 'EURBUSD', 1, ''),
(701, 'EURUSDT', 1, ''),
(702, 'OGNBNB', 0, ''),
(703, 'OGNBTC', 0, ''),
(704, 'OGNUSDT', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2020_01_09_105803_create_trades_table', 1),
(11, '2020_01_09_105943_create_user_trades_table', 1),
(12, '2020_01_09_120654_create_currencies_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `trades`
--

CREATE TABLE `trades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `trades`
--

INSERT INTO `trades` (`id`, `name`) VALUES
(1, 'Binance'),
(2, 'Polonlex'),
(3, 'BitMEX'),
(4, 'BitMEX TestNet');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ruslan', 'raketaboy2000@yandex.ru', NULL, '$2y$10$ymZy8Q3XGhcLvxZzzhAuvOfC1oxfXzFVZuMBkHNTyNJcxDgTbhXve', 'cstfThsw231reLAbDvTnFaUeqvA760eXw4dPJgk9mMDoRFYL8vqi26FKCPxM', '2020-01-10 14:19:37', '2020-01-10 14:19:37');

-- --------------------------------------------------------

--
-- Структура таблицы `user_trades`
--

CREATE TABLE `user_trades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key_acc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skey` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `trade_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `user_trades`
--
ALTER TABLE `user_trades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`trade_id`),
  ADD KEY `trade_id` (`trade_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=705;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `trades`
--
ALTER TABLE `trades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user_trades`
--
ALTER TABLE `user_trades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
