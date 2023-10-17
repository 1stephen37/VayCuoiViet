-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2023 lúc 11:12 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `assignment`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `detail`) VALUES
(1, 'Váy cưới thiết kế', 'Váy cưới thiết kế'),
(2, 'Váy cưới Luxury', 'Váy cưới Luxury'),
(3, 'Váy cưới Premium', 'Váy cưới Premium'),
(4, 'Minimalist', 'Minimalist'),
(11, 'áo dài test', '1'),
(13, '                check13       ', '                 31231            '),
(14, 'daxuo', 'esdasdas'),
(17, 'áo dài testasdasd', 'adasdqweqwe1231231');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(3) NOT NULL,
  `content` text NOT NULL,
  `id_user` int(3) NOT NULL,
  `id_product` int(3) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `content`, `id_user`, `id_product`, `datetime`) VALUES
(21, 'đâsdasdasd', 28, 71, '2023-10-06 16:16:22'),
(22, 'dasdasdasdasdasdasdasdasdasdasd', 28, 71, '2023-10-06 16:16:22'),
(23, 'Tôi rất hài lòng với chiếc váy cưới này! Chất liệu cao cấp, đường may tỉ mỉ và thiết kế đẹp mắt. Tôi đã nhận được nhiều lời khen ngợi trong ngày cưới của mình. Váy thực sự làm tôn lên vẻ đẹp của tôi và tạo nên một bầu không khí lãng mạn cho buổi lễ.', 28, 52, '2023-10-06 16:16:22'),
(24, 'Váy cưới này thực sự vượt xa mong đợi của tôi. Chất liệu êm ái và thoải mái khi mặc, không gây khó chịu. Thiết kế tinh tế và phù hợp với vóc dáng của tôi. Tôi cảm thấy tự tin và quyến rũ khi mặc nó. Đây là lựa chọn hoàn hảo cho ngày trọng đại của tôi.', 28, 49, '2023-10-06 16:16:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail`
--

CREATE TABLE `detail` (
  `id` int(3) NOT NULL,
  `id_product` int(3) NOT NULL,
  `id_order` int(3) NOT NULL,
  `quantity` int(4) NOT NULL,
  `total` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img`
--

CREATE TABLE `img` (
  `id` int(3) NOT NULL,
  `id_product` int(3) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `img`
--

INSERT INTO `img` (`id`, `id_product`, `name`) VALUES
(1, 46, 'ao-cuoi-co-dau-connie-dong-scaled-576x864.jpg'),
(2, 47, 'ao-cuoi-co-dau-chrissy-scaled-576x864.jpg'),
(3, 48, 'ao-cuoi-co-dau-cam-ho-scaled-576x864.jpg'),
(4, 49, 'vay-cuoi-co-dau-thao-nhi-10-scaled-576x864.jpg'),
(5, 49, 'Nicole-Bridal-Thao-Nhi-1-576x864.jpg'),
(6, 49, 'Nicole-Bridal-Thao-Nhi-2-576x864.jpg'),
(7, 49, 'Nicole-Bridal-Thao-Nhi-3-scaled-576x864.jpg'),
(8, 50, 'OANH-OANH-NICOLE-WEDDING-DRESS-SKETCH-scaled-576x864.jpg'),
(9, 51, 'TAMMY-PHAN-NICOLE-WEDDING-DRESS-SKETCH-scaled-576x864.jpg'),
(10, 51, 'TAMMY-PHAN-2-NICOLE-WEDDING-DRESS-SKETCH-1-scaled-576x864.jpg'),
(11, 51, 'TAMMY-PHAN-4-NICOLE-WEDDING-DRESS-SKETCH-1-1-576x864.jpg'),
(12, 52, 'KELLY-NGUYEN-NICOLE-WEDDING-DRESS-SKETCH-scaled-576x864.jpg'),
(13, 52, 'KELLY-NGUYEN-NICOLE-WEDDING-DRESS-SKETCH-scaled-576x864 (1).jpg'),
(14, 53, 'vay-cuoi-co-dau-linh-le-5-scaled-576x864.jpg'),
(15, 54, 'NHAT-LE-NICOLE-WEDDING-DRESS-SKETCH-576x864.jpg'),
(16, 55, 'nicole-brides-_-Jen-Haldeman-2-scaled-576x864.jpg'),
(17, 55, 'Nicole-Brides-Jen-Halderman-1-576x864.jpg'),
(18, 55, 'Nicole-Brides-Jen-Halderman-3-2-576x864.jpg'),
(19, 55, 'Nicole-Brides-Jen-Halderman-7-576x864.jpg'),
(20, 55, 'nicole-brides-_-Jen-Haldeman-7-576x864.jpg'),
(21, 56, 'vay-cuoi-co-dau-vy-do-6-576x864.jpg'),
(22, 56, 'vay-cuoi-co-dau-vy-do-5-scaled-576x864.jpg'),
(23, 57, 'Nicole-Bridal-Sketch-Vickie-576x864.jpg'),
(24, 59, 'vay-cuoi-co-dau-nhi-huynh-2-scaled-576x864.jpg'),
(25, 59, 'vay-cuoi-co-dau-nhi-huynh-2-scaled-576x864 (1).jpg'),
(26, 60, 'ao-cuoi-co-dau-mi-vu-scaled-576x864.jpg'),
(27, 60, 'ao-cuoi-co-dau-mi-vu-scaled-576x864 (1).jpg'),
(28, 61, 'vay-cuoi-co-dau-khiet-linh-5-scaled-576x864.jpg'),
(29, 62, 'ao-cuoi-co-dau-binh-an-1-576x864.png'),
(30, 62, 'ao-cuoi-co-dau-binh-an-576x864.png'),
(31, 62, 'ao-cuoi-co-dau-binh-an-1-scaled-576x864.jpg'),
(32, 63, '23LP309-ESTHER-7_result-576x864.jpg'),
(33, 63, '23LP309-ESTHER-11_result-576x864.jpg'),
(34, 63, '23LP309-ESTHER-10_result-576x864.jpg'),
(35, 63, '23LP309-ESTHER-6_result-576x864.jpg'),
(36, 65, '23LP308-EMMA-3_result-576x864.jpg'),
(37, 65, '23LP308-EMMA-2_result-576x864.jpg'),
(38, 65, '23LP308-EMMA-1_result-576x864.jpg'),
(39, 65, '23LP308-EMMA-4_result-576x864.jpg'),
(40, 65, '23LP308-EMMA-5_result-576x864.jpg'),
(41, 65, '23LP308-EMMA-6_result-576x864.jpg'),
(42, 66, '23LP307-TINKERBELL-1_result-576x864.jpg'),
(43, 66, '23LP307-TINKERBELL-2_result-576x864.jpg'),
(44, 66, '23LP307-TINKERBELL-3_result-576x864.jpg'),
(45, 66, '23LP307-TINKERBELL-4_result-576x864.jpg'),
(46, 66, '23LP307-TINKERBELL-5_result-576x864.jpg'),
(47, 66, '23LP307-TINKERBELL-6_result-576x864.jpg'),
(48, 67, '23LP306-WENDY-4_result-576x864.jpg'),
(49, 67, '23LP306-WENDY-5_result-576x864.jpg'),
(50, 67, '23LP306-WENDY-6_result-576x864.jpg'),
(51, 67, '23LP306-WENDY-7_result-576x864.jpg'),
(52, 67, '23LP306-WENDY-8_result-576x864.jpg'),
(53, 67, '23LP306-WENDY-9_result-576x864.jpg'),
(54, 68, '23LM301-AMIE-1_result-576x864.jpg'),
(55, 68, '23LM301-AMIE-2_result-576x864.jpg'),
(56, 68, '23LM301-AMIE-3_result-576x864.jpg'),
(57, 68, '23LM301-AMIE-4_result-576x864.jpg'),
(59, 68, '23LM301-AMIE-5_result-576x864.jpg'),
(61, 69, 'XENIA-_-SUMMER-VIBE-4_result-576x864.jpg'),
(62, 69, 'XENIA-_-SUMMER-VIBE-1_result-576x864.jpg'),
(63, 69, 'XENIA-_-SUMMER-VIBE-2_result-576x864.jpg'),
(64, 69, 'XENIA-_-SUMMER-VIBE-3_result-576x864.jpg'),
(65, 69, 'XENIA-_-SUMMER-VIBE-5_result-576x864.jpg'),
(66, 70, 'ORALIE-_-SUMMER-VIBE-1_result-576x864.jpg'),
(67, 70, 'ORALIE-_-SUMMER-VIBE-4_result-576x864.jpg'),
(68, 70, 'ORALIE-_-SUMMER-VIBE-6_result-576x864.jpg'),
(69, 70, 'ORALIE-_-SUMMER-VIBE-7_result-576x864.jpg'),
(70, 70, 'ORALIE-_-SUMMER-VIBE-3_result-576x864.jpg'),
(71, 71, 'CAMI-_-SUMMER-VIBE-2_result-576x864.jpg'),
(72, 71, 'CAMI-_-SUMMER-VIBE-1_result-576x864.jpg'),
(73, 71, 'CAMI-_-SUMMER-VIBE-3_result-576x864.jpg'),
(74, 71, 'CAMI-_-SUMMER-VIBE-4_result-576x700.jpg'),
(75, 72, 'OHARA-_-SUMMER-VIBE-1_result-576x864.jpg'),
(76, 72, 'OHARA-_-SUMMER-VIBE-2_result-576x864.jpg'),
(77, 72, 'OHARA-_-SUMMER-VIBE-6_result-576x864.jpg'),
(78, 72, 'OHARA-_-SUMMER-VIBE-4_result-576x864.jpg'),
(79, 72, 'OHARA-_-SUMMER-VIBE-3_result-576x864.jpg'),
(80, 74, '31-576x864.jpg'),
(81, 74, '33-576x864.jpg'),
(82, 74, '34-576x864.jpg'),
(83, 74, '29-576x864.jpg'),
(84, 74, '32-576x864.jpg'),
(85, 75, '26-576x864.jpg'),
(86, 75, '25-576x864.jpg'),
(87, 75, '30-576x864.jpg'),
(88, 75, '28-576x864.jpg'),
(89, 75, '27-576x864.jpg'),
(90, 76, '19-576x864.jpg'),
(91, 76, '21-576x864.jpg'),
(92, 76, '24-576x864.jpg'),
(93, 76, '23-576x864.jpg'),
(94, 76, '22-576x864.jpg'),
(95, 77, '5-576x864.jpg'),
(96, 77, '6-576x864.jpg'),
(97, 77, '8-576x864.jpg'),
(98, 77, '7-576x864.jpg'),
(99, 78, '47-576x864.jpg'),
(100, 78, '46-576x864.jpg'),
(101, 78, '48-576x864.jpg'),
(104, 78, '50-576x864.jpg'),
(105, 79, 'TANZA-_-WHITE-BLOSSOM-4-scaled-576x864.jpg'),
(106, 79, 'TANZA-_-WHITE-BLOSSOM-3-scaled-576x864.jpg'),
(107, 79, 'TANZA-_-WHITE-BLOSSOM-5-scaled-576x864.jpg'),
(108, 79, 'TANZA-22LP510_-WHITE-BLOSSOM-1-scaled-576x864.jpg'),
(109, 80, 'NOA_-WHITE-BLOSSOM-2-scaled-576x864.jpg'),
(110, 80, 'NOA_-WHITE-BLOSSOM-3-scaled-576x864.jpg'),
(111, 80, 'NOA_-WHITE-BLOSSOM-6-scaled-576x864.jpg'),
(112, 80, 'NOA_-WHITE-BLOSSOM-5-scaled-576x864.jpg'),
(113, 81, 'JOSI_-WHITE-BLOSSOM-5-scaled-576x864.jpg'),
(114, 81, 'JOSI_-WHITE-BLOSSOM-4-scaled-576x864.jpg'),
(115, 81, 'JOSI_-WHITE-BLOSSOM-3-scaled-576x864.jpg'),
(116, 81, 'JOSI_-WHITE-BLOSSOM-1-scaled-576x864.jpg'),
(117, 81, 'JOSI-22LP511_-WHITE-BLOSSOM-2-scaled-576x864.jpg'),
(118, 82, 'TINKA-_-WHITE-BLOSSOM-3-scaled-576x864.jpg'),
(119, 82, 'JAMIE-22PA504_-WHITE-BLOSSOM-1-scaled-576x864.jpg'),
(120, 82, 'TINKA-_-WHITE-BLOSSOM-1-scaled-576x864.jpg'),
(121, 83, 'NICOLEBRIDAL_MOON-LOVER_-LARISSA22LP407-2_result-576x864.jpg'),
(122, 83, 'NICOLEBRIDAL_MOON-LOVER_-LARISSA22LP407-6_result-576x864.jpg'),
(123, 83, 'NICOLEBRIDAL_MOON-LOVER_-LARISSA22LP407-7_result-576x864.jpg'),
(124, 83, 'NICOLEBRIDAL_MOON-LOVER_-LARISSA22LP407-4_result-576x864.jpg'),
(125, 83, 'NICOLEBRIDAL_MOON-LOVER_-LARISSA22LP407-3_result-576x864.jpg'),
(126, 83, 'NICOLEBRIDAL_MOON-LOVER_-LARISSA22LP407-1_result-576x864.jpg'),
(127, 84, 'NICOLEBRIDAL_MOON-LOVER_-ARUNA-22LP406-2_result-576x864.jpg'),
(128, 84, 'NICOLEBRIDAL_MOON-LOVER_-ARUNA-22LP406-1_result-576x864.jpg'),
(129, 84, 'NICOLEBRIDAL_MOON-LOVER_-ARUNA-22LP406-3_result-576x864.jpg'),
(130, 84, 'NICOLEBRIDAL_MOON-LOVER_-ARUNA-22LP406-4_result-576x864.jpg'),
(131, 84, 'NICOLEBRIDAL_MOON-LOVER_-ARUNA-22LP406-5_result-576x864.jpg'),
(132, 84, 'NICOLEBRIDAL_MOON-LOVER_-ARUNA-22LP406-6_result-576x864.jpg'),
(133, 85, 'NICOLEBRIDAL-SONATE-2-scaled-576x864.jpg'),
(134, 85, 'NICOLEBRIDAL-SONATE-3-scaled-576x864.jpg'),
(135, 85, 'NICOLEBRIDAL-SONATE-4-scaled-576x864.jpg'),
(136, 85, 'NICOLEBRIDAL-SONATE-1-scaled-576x864.jpg'),
(137, 85, 'NICOLEBRIDAL-SONATE-5-scaled-576x864.jpg'),
(138, 86, 'NICOLEBRIDAL-CAILY-2-scaled-576x864.jpg'),
(139, 86, 'NICOLEBRIDAL-CAILY-1-scaled-576x864.jpg'),
(140, 86, 'NICOLEBRIDAL-CAILY-3-scaled-576x864.jpg'),
(141, 86, 'NICOLEBRIDAL-CAILY-4-scaled-576x864.jpg'),
(142, 86, 'NICOLEBRIDAL-CAILY-5-scaled-576x864.jpg'),
(143, 87, 'NICOLEBRIDAL-BELINDA-3-scaled-576x864.jpg'),
(144, 87, 'NICOLEBRIDAL-BELINDA-4-scaled-576x864.jpg'),
(145, 87, 'NICOLEBRIDAL-BELINDA-5-scaled-576x864.jpg'),
(146, 87, 'NICOLEBRIDAL-BELINDA-6-scaled-576x864.jpg'),
(147, 87, 'NICOLEBRIDAL-BELINDA-7-scaled-scaled-576x864.jpg'),
(148, 87, 'NICOLEBRIDAL-BELINDA-2-scaled-scaled-576x864.jpg'),
(149, 88, 'NICOLEBRIDAL-FAYA-3-scaled-576x864.jpg'),
(150, 88, 'NICOLEBRIDAL-FAYA-1-scaled-576x864.jpg'),
(151, 88, 'NICOLEBRIDAL-FAYA-4-scaled-576x864.jpg'),
(152, 88, 'NICOLEBRIDAL-FAYA-5-scaled-576x864.jpg'),
(153, 88, 'NICOLEBRIDAL-FAYA-2-scaled-576x864.jpg'),
(154, 89, 'NICOLEBRIDAL-CAROLINE-2-scaled-576x864.jpg'),
(155, 89, 'NICOLEBRIDAL-CAROLINE-3-scaled-576x864.jpg'),
(156, 89, 'NICOLEBRIDAL-CAROLINE-4-scaled-576x864.jpg'),
(157, 89, 'NICOLEBRIDAL-CAROLINE-1-scaled-576x864.jpg'),
(158, 89, 'NICOLEBRIDAL-CAROLINE-5-scaled-576x864.jpg'),
(159, 90, 'NICOLEBRIDAL_CROWN_22LP208-2-scaled-scaled-576x864.jpg'),
(160, 90, 'NICOLEBRIDAL_CROWN_22LP208-3_result-scaled-576x864.jpg'),
(161, 90, 'NICOLEBRIDAL_CROWN_22LP208-1-scaled-scaled-576x864.jpg'),
(162, 90, 'NICOLEBRIDAL_CROWN_22LP208-4_result-scaled-576x864.jpg'),
(163, 90, 'NICOLEBRIDAL_CROWN_22LP208-5_result-scaled-576x864.jpg'),
(164, 90, 'NICOLEBRIDAL_CROWN_22LP208-2-scaled-scaled-576x864 (1).jpg'),
(165, 91, 'NICOLEBRIDAL-_-22LP207_BOWI-1-scaled-scaled-576x864.jpg'),
(166, 91, 'NICOLEBRIDAL-_-22LP207_BOWI-4_result-scaled-576x864.jpg'),
(167, 91, 'NICOLEBRIDAL-_-22LP207_BOWI-3-scaled-scaled-576x864.jpg'),
(168, 91, 'NICOLEBRIDAL-_-22LP207_BOWI-2-scaled-scaled-576x864.jpg'),
(169, 91, 'NICOLEBRIDAL-_-22LP207_BOWI-5_result-scaled-576x864.jpg'),
(170, 92, 'NICOLEBRIDAL-_-22LP201-ROSENI-2-scaled-scaled-576x864.jpg'),
(171, 92, 'NICOLEBRIDAL-_-22LP201-ROSENI-1-scaled-scaled-576x864.jpg'),
(172, 92, 'NICOLEBRIDAL-_-22LP201-ROSENI-3-scaled-scaled-576x864.jpg'),
(173, 92, 'NICOLEBRIDAL-_-22LP201-ROSANI-5_result-scaled-576x864.jpg'),
(174, 92, 'NICOLEBRIDAL-_-22LP201-ROSANI-4_result-scaled-576x864.jpg'),
(175, 92, 'NICOLEBRIDAL-_-22LP201-ROSANI-6_result-scaled-576x864.jpg'),
(176, 93, 'Nicole-bridal_22LP202_Royal-2-scaled-scaled-576x864.jpg'),
(177, 93, 'Nicole-bridal_22LP202_Royal-1-scaled-scaled-576x864.jpg'),
(178, 93, 'Nicole-bridal_22LP202_Royal-4_result-scaled-576x864.jpg'),
(179, 93, 'Nicole-bridal_22LP202_Royal-5_result-scaled-576x864.jpg'),
(180, 93, 'Nicole-bridal_22LP202_Royal-6_result-scaled-576x864.jpg'),
(181, 93, 'Nicole-bridal_22LP202_Royal-2-scaled-scaled-576x864 (1).jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `total` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` char(100) NOT NULL,
  `phone` char(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(9) DEFAULT 0,
  `date` datetime DEFAULT current_timestamp(),
  `id_cata` int(2) NOT NULL,
  `special` int(1) NOT NULL DEFAULT 0,
  `views` int(4) NOT NULL DEFAULT 0,
  `detail` text NOT NULL,
  `color` varchar(30) NOT NULL,
  `size` varchar(50) NOT NULL,
  `Material` varchar(50) NOT NULL,
  `Long_tail` varchar(30) NOT NULL,
  `Antique_style` varchar(50) NOT NULL,
  `style` varchar(50) NOT NULL,
  `Back_style` varchar(50) NOT NULL,
  `Hand_style` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `date`, `id_cata`, `special`, `views`, `detail`, `color`, `size`, `Material`, `Long_tail`, `Antique_style`, `style`, `Back_style`, `Hand_style`) VALUES
(46, 'Áo cưới cô dâu Connie Dong', 0, '2023-09-11 11:38:06', 1, 0, 2, 'Yêu cầu váy cưới thiết kế độc bản: Chiếc váy cưới 2 trong 1 đơn giản, sang trọng nhưng phải thật sự nổi bật và sử dụng chất liệu hoa văn đặc biệt\r\nTư vấn: Thiết kế váy cưới kết hợp với phần tùng rời và lộng lẫy sẽ giúp Connie trải nghiệm chiếc váy cưới 2 trong 1 thật sự hoàn hảo. Về phần chất liệu, Nicole ưu tiên sử dụng chất liệu Ren Alencon + Ren Chantilly cho toàn chiếc váy và phần tùng để đồng bộ hóa và tỏa sáng. Phần tùng váy sẽ cần độ phồng xòe lớn để nàng diện cho buổi lễ cưới quan trọng và thật sự nổi bật.', '', '', '', '', '', '', '', ''),
(47, 'Áo cưới cô dâu Chrissy', 0, '2023-09-11 11:41:36', 1, 0, 1, 'Yêu cầu váy cưới thiết kế độc bản: Cô dâu U50 đến từ Anh Quốc, Chrissy có vóc dáng tương đối thon gọn so với tuổi. Chrissy yêu thích chiếc váy Pleatie và mong muốn thay đổi sang tay dài tay để che bớt đi phần bắp tay to của mình. Xem thêm váy cưới Pleatie.\r\nTư vấn: Nicole Bridal đã phác thảo lại chiếc váy cưới cho Chrissy trên nền váy cưới Pleatie về những nếp gấp, những điểm xuyến hạt cườm cho chiếc váy thu hút và phù hợp hơn. Chiếc váy phom suông ôm vừa đủ tạo sự thoải mái và thon gọn giúp Chrissy tự tin hơn. Ngoài ra, phần Cườm sẽ được đính tay rải rác ở 2 cánh tay và dày hơn ở vùng ngực, đặc biệt điểm nhấn với đai eo.', '', '', '', '', '', '', '', ''),
(48, 'Áo cưới cô dâu Cầm Hồ', 0, '2023-09-11 11:42:30', 1, 0, 1, 'Yêu cầu váy cưới thiết kế độc bản: Cô dâu Cẩm yêu cầu chiếc váy cưới phom váy cưới công chúa, nhưng không nên quá phồng xòe do nàng ngại váy nặng nề và vướng víu. Cẩm muốn váy cưới nổi bật và trang nhã với chi tiết rớt vai.\r\nTư vấn: Nicole Bridal đã phác thảo và gợi ý cho cô với phom váy A-line xòe rộng và bản vẽ thiết kế chi tiết hóa các đường nét cũng như 1 phần minh họa chất liệu mà Nicole Bridal sẽ sử dụng. Nicole sử dụng phối hợp những lớp lưới trơn và lưới họa tiết ánh kim tuyến để tăng độ bắt mắt của tổng thể. Ngoài ra, Nicole Bridal sẽ điểm xuyết pha lê Nhật ở phần ngực, phần xếp ly rớt vai cũng như phần eo nhằm thu hút ánh nhìn vào phần trên của váy cưới. Chiếc váy vừa đủ cầu kỳ và bắt mắt với các chất kim tuyến và pha lê Nhật. Ở phần thân váy thì Nicole ưu tiên sử dụng Lưới cứng thì giúp váy có đủ độ phồng xòe theo như yêu cầu.', '', '', '', '', '', '', '', ''),
(49, 'Áo cưới cô dâu Thảo Nhi', 0, '2023-09-11 11:49:00', 1, 0, 0, 'Yêu cầu váy cưới thiết kế độc bản: Chiếc váy cưới phom A nhẹ nhàng với cổ vuông có sử dụng họa tiết ren lấp lánh ánh bạc dọc thân váy và rơi nhẹ tinh tế.\r\n\r\nTư vấn: Nicole Bridal tư vấn nàng thiết kế phom A phồng nhè nhàng kết hợp giữa cổ vuông và cúp tim cùng với đó là chi tiết đắp xếp ren ánh bạc tự nhiên và rơi nhẹ xuống tà váy.\r\n\r\nĐọc thêm về váy cưới của Thảo Nhi – HERE –', '', '', '', '', '', '', '', ''),
(50, 'Áo cưới cô dâu Oanh Oanh', 0, '2023-09-11 11:51:09', 1, 0, 0, 'Yêu cầu váy cưới thiết kế độc bản: Nàng có 2 sự kiện chính đó là lễ nhà thờ và tiệc bãi biển nên Oanh yêu cầu 1 chiếc váy có khả năng biến hóa giữa đuôi cá và chiếc váy công chúa. Nàng yêu cầu REN phải được đắp xếp sao cho thật hài hòa và tinh tế.\r\n\r\nTư vấn: Nicole Bridal đã phác thảo và gợi ý cho Oanh thiết kế đuôi cá nhẹ nhàng với chi tiết tay dài, xẻ chân (ẩn trong đó là lớp ren ẩn hiệu cực kỳ gợi cảm). Ngoài ra, Nicole sẽ làm thêm 1 chiếc tùng váy cưới (Thân dưới váy cưới) gắn rời nhằm thỏa ước nguyện biến hóa thành nàng công chúa trong mơ. Bên cạnh đó, chiếc váy không thể thiếu các chi tiết ren hoa đính kết kết hợp cùng các loại đá pha lê giúp tăng sự lộng lẫy và cầu kỳ cho chiếc váy.', '', '', '', '', '', '', '', ''),
(51, 'Áo cưới cô dâu Tammy Phan', 0, '2023-09-11 11:54:44', 1, 0, 0, 'Yêu cầu váy cưới thiết kế độc đáo: Tammy có dáng người hơi tròn trịa nhưng lại rất thích váy đuôi cá để khoe đường cong gợi cảm.\r\n\r\n– Chiếc váy đầu tiên, cô ấy muốn hở lưng với đường xẻ vừa phải.\r\n\r\n– Chân váy thứ hai vẫn là kiểu đuôi cá với các chi tiết và họa tiết Boho\r\n\r\n– Váy thứ ba là hình chiếc kèn và loe ra từ đầu gối.\r\n\r\nLời khuyên: Nicole Bridal thảo luận và nắm bắt các yếu tố chính mà Tammy yêu thích: váy và tay áo dài của nàng tiên cá. Còn lại, cô có quyền tin tưởng để Nicole lên ý tưởng.\r\n\r\n– Chiếc váy số 1: Nicole sử dụng kết hợp Alencon Lace với những họa tiết uốn lượn, đặc biệt tạo điểm nhấn ở phần ngực giúp Tammy giấu nhẹm lợi thế.\r\n\r\n– Chiếc váy số  2: một chiếc váy đơn giản hơn, khi được Nicole khuyến khích sử dụng chất liệu lưới đính sequin với họa tiết nhẹ nhàng để tạo sự tự nhiên và thanh thoát.\r\n\r\n– Váy cưới đuôi cá Weddinng Dress # 3: 1 cách điệu phần thân dưới khi Nicole mạnh dạn khuyên cô chọn dáng váy đuôi cá, là sự kết hợp giữa lưới và lụa satin. Phần tinh tế nhất sẽ được khâu tay và đính cườm để tạo nên chiếc váy độc đáo nhất mà cô sẽ mặc tại Lễ thề.', '', '', '', '', '', '', '', ''),
(52, 'Áo cưới cô dâu Kelly Nguyen', 0, '2023-09-11 11:57:46', 1, 0, 0, 'Yêu cầu váy cưới thiết kế độc bản: Kelly yêu cầu 1 chiếc váy cưới tay dài đặc biệt, phom dáng công chúa nhưng đòi hỏi phải nhẹ nhàng với độ phồng tự nhiên, không sử dụng phần tùng váy để nâng đỡ gây khó chịu và nhàm chán.\r\n\r\nTư vấn: Nicole Bridal đã gợi ý cho Kelly chất liệu lưới cứng vi tinh nhập khẩu, có tính chất dai/ cứng để tạo độ phồng tự nhiên để hoàn thiện phần thân dưới của chiếc váy may đo này. Hơn nữa, Nicole sẽ kết hợp giữa các chất liệu REN và Hạt đá pha lê để tập trung ánh nhìn nhiều hơn vào phần ngực giúp trở nên cuốn hút hơn.', '', '', '', '', '', '', '', ''),
(53, 'Áo cưới cô dâu Linh Lê', 0, '2023-09-11 12:00:17', 1, 0, 0, 'Yêu cầu váy cưới thiết kế độc bản: Linh yêu cầu chiếc váy cưới 3 trong 1 sao cho phù hợp ở nhiều không gian để vừa tiết kiệm thời gian và tiện lợi để di chuyển.\r\n\r\nTư vấn: Nicole Bridal tư vấn nàng 1 chiếc váy chữ A phồng nhẹ, với phần chính là chiếc váy cưới thiết kế cúp ngực, được điểm xuyết thêu tay bằng các hoa 3d rơi nhè nhẹ từ trên xuống. Ngoài ra, chiếc váy có thể biến tấu với phần rớt vai gắn rời và phần choàng hoa 3D gắn rời.', '', '', '', '', '', '', '', ''),
(54, 'Áo cưới cô dâu Nhật Lệ', 0, '2023-09-11 12:02:23', 1, 0, 0, 'Yêu cầu váy cưới thiết kế độc bản: Chiếc váy cưới thiết kể phải phồng xòe sang trọng. Cô dâu yêu thích sự đơn giản nhưng phá cách với yêu cầu cách điệu chi tiết thân dưới của váy cưới sao cho thật độc đáo\r\n\r\nTư vấn: Nicole Bridal tư vấn nàng thiết kế công chúa với chất liệu Satin Silk màu trắng kem sang trọng, tạo độ phồng bồng bềnh khi kết hợp với 1 chiếc tùng rời may đo riêng cho nàng. Ngoài ra, chi tiết cách điệu và độc đáo nhất của thiết kế ở phần thân dưới đến từ việc điểm xuyết các đường ren đăng uốn lượn theo các đường nối may giữa satin silk và lưới.', '', '', '', '', '', '', '', ''),
(55, 'Áo cưới cô dâu Jen Halderman', 0, '2023-09-11 12:03:51', 1, 0, 0, 'Yêu cầu váy cưới thiết kế độc bản: Style nhẹ nhàng A-line có hơi phồng nhẹ, sử dụng ren Chantilly làm chiếc váy nổi bật hơn. Yêu cầu chi tiết V lưng sâu\r\n\r\nTư vấn: sử dụng chất liệu tulle phối với ren Chantilly họa tiết hoa liti với chi tiết V ngực và V lưng sâu giúp nàng khoe được vẻ đẹp gợi cảm của vòng 1. Bên cạnh đó thì chi tiết dài tay full ren sẽ giúp kết nối hoàn hảo và phù hợp với bắp tay của Jen hơn.\r\n\r\nTham khảo chi tiết váy cưới may đo của Jen Halderman – HERE –', '', '', '', '', '', '', '', ''),
(56, 'Áo cưới cô dâu Vy Đỗ', 0, '2023-09-11 12:07:33', 1, 0, 0, '* Yêu cầu Váy cưới 1: Chiếc váy nhẹ nhàng phom A-line, có sự cách điệu rớt vai dùng cho tiệc đứng để dễ di chuyển\r\n* Tư vấn từ Nicole Bridal: Sử dụng chất liệu Organza mịn và mượt giúp chiếc váy trở nên nhẹ nhàng và bay bổng.\r\n* Yêu cầu Váy cưới 2: Chiếc áo cưới xòe phồng lấp lánh thu hút ánh nhìn. Chi tiết cổ V và ngắn tay mang đến sự thoải mái. Yêu cầu độ phồng trung bình và may đo vừa tới chân cùng với đuôi váy dài đến 1m5.\r\n* Tư vấn từ Nicole Bridal: Chiếc váy cưới xòe phồng cổ V tay ngắn trên nền chất liệu Tulle kim tuyến, đặc biệt được đính kết tinh xảo các họa tiết pha lê và hạt trai tinh xảo theo các cánh hoa ren.', '', '', '', '', '', '', '', ''),
(57, 'Váy cưới cô dâu Vicky Dương', 0, '2023-09-11 12:09:34', 1, 0, 0, '* Yêu cầu váy cưới thiết kế độc bản: Thu hút và gợi cảm với 1 số điểm nhấn trên thân trên, đặc biệt yêu thích chi tiết xẻ đùi.\r\n\r\n* Tư vấn từ Nicole Bridal: Chọn phom váy đuôi cá với phần cách điệu thân trên bằng tay rớt vai nhún kèm theo đó là pha lê và hạt ngọc trai điểm xuyến. Thân dưới váy cưới đơn giản, xẻ chân cuốn hút, cách điệu nhẹ nhàng với các chi tiết ren hoa nơi xẻ chân.', '', '', '', '', '', '', '', ''),
(59, 'Áo cưới cô dâu Nhi Huỳnh', 0, '2023-09-11 12:10:50', 1, 0, 0, '* Yêu cầu váy cưới thiết kế độc bản: Chiếc váy cưới 2 trong 1 đơn giản, sang trọng và có sự cách điệu\r\n* Tư vấn từ Nicole Bridal: Sử dụng chất liệu Satin Silk màu Ivory sang trọng. Phom váy cưới chính là dáng áo cưới đuôi cá cách điệu gấp nếp phần ngực để tạo điểm nhấn, thêm cuốn hút nhờ bờ vai thon. Kèm theo đó là phần thân dưới được may 1 nửa cùng chất liệu và màu sắc với điểm ấn tượng ở nơ bèo Satin Silk được gấp nếp theo phong cách Origami.', '', '', '', '', '', '', '', ''),
(60, 'Áo cưới cô dâu Mi Vũ', 0, '2023-09-11 12:14:06', 1, 0, 0, 'Yêu cầu váy cưới thiết kế độc bản: Yêu thích màu sắc nên muốn chiếc váy đổi màu style Ombre từ trắng sang xanh biển với chi tiết có cúp ngực và thiết kế rớt vai nữ tính.\r\n\r\nNicole Bridal tư vấn: Chiếc váy phồng xòe nhẹ với chủ yếu chất liệu Tulle nhập ngoại ombre đổi màu Trắng – Xanh biển theo đúng sở thích của nàng dâu. Những gấp nếp nhẹ nhàng và tự nhiên ở phần thân và rớt vai sẽ tạo ra sự liên kết hài hòa giữa các chi tiết với tổng thể chiếc váy.\r\n\r\nVới thiết kế váy cưới độc đáo này, Nicole Bridal tin rằng nàng là cô dâu đặc biệt nhất với chiếc váy cưới dành riêng cho mình.', '', '', '', '', '', '', '', ''),
(61, 'Áo cưới cô dâu Khiết Linh', 0, '2023-09-11 12:16:07', 1, 0, 0, 'Yêu cầu váy cưới thiết kế độc bản: Váy công chúa lấp lánh, phồng xòe thật lớn và chi tiết che khuyết điểm phần bắp tay.\r\n\r\nNicole Bridal tư vấn: Để áo cưới lấp lánh mọi góc nhìn, Nicole Bridal sử dụng chất liệu Tulle kim tuyến có họa tiết đặc biệt (loại nhập khẩu), để hoàn thiện tổng thể chiếc váy công chúa xòe phồng. Phần rớt vai được làm phồng lên giúp liên kết với họa tiết ren đính kết pha lê ngay phần thân trên giống như cành hoa đang nở rộ.\r\n\r\nThiết kế đậm tinh thần mùa xuân rực rỡ đầy sức sống, cho nàng dâu khoe trọn nét xuân thì.', '', '', '', '', '', '', '', ''),
(62, 'Áo cưới cô dâu Bình An', 0, '2023-09-11 12:17:51', 1, 0, 0, 'Yêu cầu váy cưới thiết kế độc bản của Bình An: Một chiếc Váy công chúa lộng lẫy và lấp lánh với tay dài hơi phồng nhẹ ở vai, có đính đá điểm xuyến ở cổ.\r\nNicole Bridal tư vấn: Phom váy cưới công chúa với chất liệu kim tuyến với hoa văn lượn sóng gợi cảm. Đặc biệt điểm nhấn ấn tượng với eo V giúp nàng dâu thon gọn hơn. Tay dài cùng chất liệu sẽ tạo nên nét tổng thể của chiếc váy cưới trông hài hòa, sang trọng, tạo mang đến cảm giác kín đáo, thanh lịch cho nàng dâu khi xuất hiện giữa lễ đường sang trọng.\r\n\r\n', '', '', '', '', '', '', '', ''),
(63, 'ESTHER (23LP309)', 24000000, '2023-09-11 15:20:09', 2, 1, 5001, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Lụa, Lưới, Ren', '100cm', 'Cổ V', 'Áo cưới công chúa', 'Thắt dây', 'Tay dài'),
(65, 'EMMA (23LP308)', 28000000, '2023-09-25 10:43:28', 2, 0, 3300, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Hoa 3D, Lưới, Ren Alencon, Satin Silk', '150cm', 'Cổ ngang', 'Áo cưới công chúa', 'Thắt dây', '2 dây'),
(66, 'TINKERBELL (23LP307)', 32000000, '2023-09-25 10:50:35', 2, 0, 3351, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Lưới, Pha lê, Ren, Kim Tuyến', '150cm', 'Không', 'Áo cưới công chúa', 'Thắt dây', 'Rớt vai'),
(67, 'WENDY (23LP306)', 20000000, '2023-10-06 11:15:52', 2, 0, 5000, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Lưới, Pha lê, Ren', '100cm', 'Cổ ngang', 'Áo cưới công chúa', 'Thắt dây', 'Không'),
(68, 'AMIE (23LM301)', 19000000, '2023-10-06 11:21:05', 2, 0, 0, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Hoa 3D, Lưới, Kim Tuyến', '150cm', 'Cổ tim', 'Áo cưới đuôi cá', 'Thắt dây', 'Không'),
(69, 'XENIA (23PA524)', 30000000, '2023-10-06 11:26:41', 2, 0, 0, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Hoa 3D, Lưới, Ren Alencon, Satin Silk', 'không', 'Cổ tim', 'Áo cưới công chúa', 'Thắt dây', 'Rớt vai'),
(70, 'ORALIE (23LP523)', 28000000, '2023-10-06 11:35:34', 2, 0, 1, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Ren Alencon, Ren Chantilly, Satin', 'không', 'Không', 'Áo cưới công chúa', 'Thắt dây', 'Rớt vai'),
(71, 'CAMY (23LM528)', 20000000, '2023-10-06 11:40:33', 2, 0, 0, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Lưới, Pha lê, Ren Chantilly', 'Không', 'Cổ tim', 'Áo cưới đuôi cá', 'Thắt dây', 'Sát nách'),
(72, 'OHARA (23LP522)', 33000000, '2023-10-11 10:29:59', 2, 0, 4, 'Là món quà của mùa hè đầy sôi động và rực rỡ, váy cưới công chúa OHARA là điểm nhấn ấn tượng nhất cho nàng dâu mùa yêu này.\r\n\r\nÁo cưới công chúa OHARA gây ấn tượng với nàng thơ bởi những chi tiết lông vũ kết hợp cánh hoa 3D viền ren cứng cáp, chất liệu lưới kim tuyến chủ đạo giúp người mặc thêm phần lung linh dưới ánh đèn sân khấu. Thiết kế đầm cưới công chúa sát nách càng làm tăng thêm dáng hình thanh mảnh, nhẹ nhàng của nàng dâu. Một chiếc váy cưới vibe biển cả rất phù hợp cho những cô dâu đang đi tìm váy cưới làm lễ sang trọng. Quá hoàn hảo phải không nào.', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Lông vũ, Ren, Kim Tuyến', 'Không', 'Cổ thuyền', 'Áo cưới công chúa', 'Thắt dây', 'Sát nách'),
(74, 'MALLORIE – 23LP518', 23000000, '2023-10-11 10:36:54', 2, 0, 3, 'Váy cưới Satin MALLORIE hớp hồn cô dâu tương lai với thiết kế tối giản. Tại MALLORIE, điều làm nên vẻ đẹp của chiếc váy cưới hiện đại này chính là thiết kế lệch vai nữ tính, cổ chữ V giúp nàng khoe vòng một gợi cảm và những chi tiết hoa xuyên suốt trang phục gợi lên hương thơm của mùa xuân. xinh đẹp.\r\n\r\nVà cô dâu giống như bông hoa đẹp nhất trên “bó hoa” ấy.', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Lưới, Ren Chantilly, Satin', 'không', 'Cổ V', 'Áo cưới công chúa', 'Thắt dây', 'Rớt vai'),
(75, 'ADALIE – 23LP516', 24000000, '2023-10-11 10:40:38', 2, 0, 3, 'Váy cưới công chúa ADALIE với chi tiết đính pha lê khắp thân váy chính là chiếc váy cưới lung linh nàng đang tìm kiếm.\r\n\r\nVới thiết kế váy cưới này, cô dâu có bắp tay to sẽ không phải lo lắng nhiều bởi phần tay áo ngắn có nắp sẽ giúp cô che đi khuyết điểm đó.', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Lưới kim tuyến, Pha lê', 'Không', 'Cổ tim', 'Áo cưới công chúa', 'Thắt dây', 'Tay ngắn'),
(76, 'DIOR – 23LP512', 28000000, '2023-10-11 10:43:35', 2, 0, 3, 'Sự kết hợp của chất liệu Satin và Ren cao cấp mang đến vẻ đẹp sang trọng đầy mê hoặc cho DIOR. Váy cưới là tuyên ngôn tuyệt vời cho vẻ đẹp hiện đại, dành riêng cho những cô dâu tìm kiếm váy cưới sang trọng, thanh lịch, nền nã song cũng thật thoải mái cho ngày đặc biệt.', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Ren Alencon, Ren Chantilly, Satin', 'không', 'Không', 'Áo cưới công chúa', 'Thắt dây', 'Không'),
(77, 'NALINI 2-in-1 – 23LP517', 20000000, '2023-10-11 10:47:52', 2, 0, 3, 'Linh hoạt phong cách với váy cưới 2 trong 1, nàng dâu sẽ thỏa sức tận hưởng ngày đặc biệt theo cách độc đáo và đặc biệt nhất. Váy cưới 2 dây nhanh chóng “biến hóa” thành áo cưới dài tay chỉ trong 2 phút, mang đến vẻ đẹp năng động xen lẫn kín đáo cho nàng ngày trọng đại.', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Hoa 3D, Lụa, Lưới', 'Không', 'Vuông', 'A – line', 'Thắt dây', 'Không'),
(78, 'MAGALY – 23LP520', 22000000, '2023-10-11 11:00:01', 2, 0, 5, 'The discreet, princess-shaped MAGALY wedding dress with a traditional corset design is very suitable for brides who love the classic shy beauty. The design is a combination of Beads, Satin Silk and Lace eyelashes to help her stand out romantically in a simple long-sleeved wedding dress.', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Cườm, Lụa Satin, Ren lông mi', 'không', 'Cổ thuyền', 'Áo cưới công chúa', 'Thắt dây', 'Tay dài'),
(79, 'TANZA – 22LP510', 22000000, '2023-10-11 11:05:33', 2, 0, 3, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Hoa 3D, Ren, Satin', 'Không', 'Vai ngang', 'Áo cưới công chúa', 'Thắt dây', 'Rớt vai'),
(80, 'NOA – 22LP505', 22000000, '2023-10-11 11:09:16', 2, 0, 1, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Cườm, Hoa 3D, Lụa, Satin', 'không', 'Cúp ngực', 'Áo cưới công chúa', 'Thắt dây', 'Không'),
(81, 'JOSI – 22LP511', 28000000, '2023-10-11 11:12:16', 2, 0, 4, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Lưới, Ren, Ren kim tuyến', 'Không', 'Vai ngang', 'Áo cưới công chúa', 'Thắt dây', 'Rớt vai'),
(82, 'TINKA – 22PA509', 22000000, '2023-10-11 11:28:52', 2, 0, 2, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Lụa, Lưới, Ren', 'không', 'Cổ V', 'Áo cưới chữ A', 'Thắt dây', 'Tay dài'),
(83, 'LARISSA – 22LP407', 24000000, '2023-10-11 11:31:19', 2, 0, 7, '', 'Trắng kem', 'S, M, L, XL, Số đo riêng', 'Hoa 3D, Lưới, Lưới kim tuyến, Ren', '150cm', 'Cúp ngực', 'Áo cưới công chúa', 'Thắt dây', 'Rớt vai'),
(84, 'ARUNA – 22LP406', 24000000, '2023-10-11 11:34:10', 2, 0, 4, '', 'Trắng kem', 'M', 'Hạt pha lê, Lưới kim tuyến', '150cm', 'Vai ngang', 'Áo cưới công chúa', 'Thắt dây', 'Rớt vai'),
(85, 'Sonate – 22LP308', 23000000, '2023-10-11 11:37:02', 2, 0, 2, '', 'Trắng kem', 'M', 'Lưới dập ly, Ren Alencon', 'Không', 'Cổ tròn', 'Áo cưới công chúa', 'Gài nút', 'Tay dài'),
(86, 'Caily – 22LP307', 22000000, '2023-10-11 11:39:15', 2, 0, 4, '', 'Trắng kem', 'M', 'Cườm pha lê, Lưới', '150cm', 'Cổ V', 'Áo cưới công chúa', 'Thắt dây', 'Rớt vai'),
(87, 'Belinda – 22LP306', 22500000, '2023-10-11 11:41:45', 2, 0, 2, '', 'Trắng kem', 'M', 'Cườm pha lê, Lụa Satin', '150cm', 'Cúp ngực', 'Áo cưới công chúa', 'Thắt dây', 'Cúp ngực'),
(88, 'Faya – 22LP304', 24000000, '2023-10-11 11:44:14', 2, 0, 1, '', 'Trắng kem', 'M', 'Cườm pha lê, Lụa Satin, Lưới kim tuyến', '150cm', 'Cổ tim/ Rớt vai', 'Áo cưới công chúa', 'Thắt dây', 'Tay ngắn'),
(89, 'Caroline – 22LP301', 25000000, '2023-10-11 11:46:26', 2, 0, 3, '', 'Trắng kem', 'M', 'Lưới kim tuyến, Ren Chantilly', '150cm', 'Cổ tim/ Rớt vai', 'Áo cưới công chúa', 'Thắt dây', 'Tay ngắn'),
(90, 'CROWN – 22LP208', 24000000, '2023-10-11 12:02:49', 2, 0, 4, '', 'Trắng kem', 'M', 'Kim sa, Lưới, Pha lê, Ren', '100cm', 'Cổ V', 'Áo cưới công chúa', 'Thắt dây', 'Rớt vai'),
(91, 'Bowi – 22LP207', 22000000, '2023-10-11 12:08:00', 2, 0, 3, 'Với những tín đồ của váy cưới có nơ, Bowi chắc chắn là mẫu váy cưới để nàng nhất định tham khảo cho ngày cưới cận kề. Với thiết kế nơ to bản độc lạ tạo nên điểm nhấn đặc biệt cho trang phục cưới. Thiết kế Bowi phù hợp với những cô dâu sở hữu lợi thế khuôn ngực tròn đầy, để thiết kế lên đúng form dáng mà nàng hằng tưởng tượng.', 'Trắng kem', 'M', 'Lưới kim tuyến, Ren, Satin', '100cm', 'Cúp ngực', 'Áo cưới công chúa', 'Thắt dây', 'Không'),
(92, 'Rosani – 22LP201', 24000000, '2023-10-11 12:10:36', 2, 0, 2, 'Váy cưới công chúa hoàng gia Rosani giúp nàng khoe trọn dáng vẻ yêu kiều, quyến rũ nhờ thiết kế cúp ngực và phần đắp xếp cách điệu phần ngực áo. Kiêu kỳ và sang trọng là những gì mọi người thốt lên trước vẻ đẹp của Rosani.', 'Trắng kem', 'M', 'Lụa, Lưới kim tuyến', '100cm', 'Cúp ngực', 'Áo cưới công chúa', 'Thắt dây', 'Không'),
(93, 'ROYAL – 22LP202', 26000000, '2023-10-11 12:12:52', 2, 0, 3, '', 'Trắng kem', 'M', 'Lụa, Lưới kim tuyến, Ren', '100cm', 'Cổ V', 'Áo cưới công chúa', 'Thắt dây', 'Tay ngắn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `PassWord` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` text DEFAULT NULL,
  `email` char(50) NOT NULL,
  `phone` char(10) NOT NULL,
  `Active` int(1) NOT NULL DEFAULT 1,
  `role` int(1) NOT NULL DEFAULT 0,
  `address` varchar(100) NOT NULL,
  `reset` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `PassWord`, `name`, `img`, `email`, `phone`, `Active`, `role`, `address`, `reset`) VALUES
(27, 'admin123', 'admin', NULL, 'admin@gmail.com', '', 1, 1, '', '610310'),
(28, 'aka0907', 'Nguyễn Tiến', 'cat1.jpg', '1ak37@gmail.com', '312123', 1, 0, '31231231dasd', '771861'),
(29, 'aka0907', 'Tiến nguyênxxxxx', NULL, 'a2dmin@gmail.com', '', 1, 0, '', NULL),
(30, 'akk343331312313', '', NULL, 'a2312dmin@gmail.com', '', 1, 0, '', NULL),
(31, '.$2y$10$N2XTKTYUuAm3GGONdrMHAO', '', NULL, '.a23132dmin@gmail.com.', '', 1, 0, '', NULL),
(33, '.$2y$10$Js.hEfl.UceCAszFHJHfVe', '', NULL, '.a23123dmin@gmail.com.', '', 1, 0, '', NULL),
(34, '.$2y$10$/aoPg6XhMoEOEHSC7ZG0gO', '', NULL, '.a23132dminyahoo@gmail.com.', '', 1, 0, '', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_user` (`id_user`),
  ADD KEY `FK_product` (`id_product`);

--
-- Chỉ mục cho bảng `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_product` (`id_product`),
  ADD KEY `FK_id_order` (`id_order`);

--
-- Chỉ mục cho bảng `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_img` (`id_product`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user` (`id_user`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_cata` (`id_cata`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `img`
--
ALTER TABLE `img`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `FK_id_order` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `FK_id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `FK_id_img` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_id_cata` FOREIGN KEY (`id_cata`) REFERENCES `catalog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
