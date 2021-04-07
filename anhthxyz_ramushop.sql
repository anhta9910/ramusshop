-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th8 13, 2020 lúc 03:07 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `u189181321_ramusshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `name`) VALUES
(1, 'Quần Nam'),
(2, 'Quần Nữ'),
(3, 'Áo Nam'),
(4, 'Áo Nữ'),
(5, 'Giày'),
(7, 'Balo'),
(8, 'Phụ Kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `fullname`, `email`, `address`, `phone`) VALUES
(2, 'Hồng Anh Tạ', 'anhta.9910@gmail.com', 'Số 5 Ngõ 30 Phùng Khoang , Trung Văn', '0386642038'),
(3, 'Nguyễn Văn Anh', 'anhta@mail.com', 'Số 5 Ngõ 30 Phùng Khoang , Trung Văn', '0386642038'),
(4, 'Tạ Hồng Anh', 'anhta.9910@gmail.com', 'Số 5 Ngõ 30 Phùng Khoang , Trung Văn', '0386642038'),
(5, 'Tạ Hồng Anh', 'anhta.9910@gmail.com', 'Số 5 Ngõ 30 Phùng Khoang , Trung Văn', '0386642038'),
(6, 'Tạ Hồng Anh', 'anhta.9910@gmail.com', 'Số 5 Ngõ 30 Phùng Khoang , Trung Văn', '0386642038'),
(7, 'Hồng Anh Tạ', 'anhta.9910@gmail.com', 'Số 5 Ngõ 30 Phùng Khoang , Trung Văn', '0386642038'),
(8, 'Tạ Anh', 'tahonganh@mail.co', 'Kj', '03kk86642038'),
(9, 'Hồng Anh Tạ', 'anhta.9910@gmail.com', 'Số 5 Ngõ 30 Phùng Khoang , Trung Văn', '0386642038'),
(10, 'thanghuyhoanghst', 'thanghuyhoanghst@gmail.com', '24', '097466666'),
(11, 'Hồng Anh Tạ', 'anhta.9910@gmail.com', 'Số 5 Ngõ 30 Phùng Khoang , Trung Văn', '0386642038'),
(12, 'Tạ Hồng Anh', 'anhta.9910@gmail.com', 'Số 5 Ngõ 30 Phùng Khoang , Trung Văn', '0386642038'),
(13, 'Hhs', 'huuu@mis.c', 'Úud', '73663');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `create_at` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0: chưa giao hàng - 1: đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `create_at`, `status`) VALUES
(4, 2, '2019-10-23', 1),
(5, 3, '2019-10-23', 1),
(6, 4, '2019-10-23', 1),
(7, 5, '2019-10-23', 1),
(8, 6, '2019-10-23', 1),
(9, 7, '2019-10-23', 1),
(10, 8, '2019-10-23', 1),
(11, 9, '2019-10-24', 1),
(12, 10, '2019-10-24', 1),
(13, 11, '2019-10-25', 1),
(14, 12, '2019-10-25', 1),
(15, 13, '2019-11-26', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `product_id`, `size_id`, `price`, `number`) VALUES
(7, 4, 4, 0, 599000, 1),
(8, 5, 8, 0, 2900000, 4),
(9, 6, 5, 0, 499000, 1000),
(10, 7, 29, 0, 4999000, 10),
(11, 8, 47, 0, 4999000, 5),
(12, 9, 29, 0, 4999000, 10),
(13, 10, 47, 0, 4999000, 19),
(14, 11, 48, 0, 999000, 1),
(15, 12, 21, 0, 4999000, 1),
(16, 13, 47, 0, 4999000, 1000),
(17, 14, 21, 0, 4999000, 1),
(18, 15, 29, 0, 4999000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `hotproduct` int(1) NOT NULL,
  `salesproduct` int(1) NOT NULL,
  `img` varchar(500) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `category_id`, `description`, `content`, `hotproduct`, `salesproduct`, `img`, `price`) VALUES
(1, 'ÁO NỈ CÓ MŨ - Nam - Mã PREMIUM1', 3, '<p>M&Agrave;U X&Aacute;M THAN&nbsp;-&nbsp;0761/322</p>\r\n\r\n<p>&Aacute;o nỉ d&agrave;i tay d&aacute;ng thụng, cổ may liền mũ tr&ugrave;m đầu. C&oacute; một t&uacute;i ẩn ở đường may ngang ngực. Bo viền bằng vải g&acirc;n.<br />\r\n<br />\r\nCHI&Ecirc;̀U CAO NGƯỜI M&Acirc;̃U: 189 CM CỠ L CH&Acirc;U &Acirc;U<br />\r\n<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 50% l&agrave; sợi b&ocirc;ng hữu cơ.<br />\r\nB&ocirc;ng hữu cơ được trồng theo c&aacute;c phương ph&aacute;p gi&uacute;p bảo vệ sự đa dạng sinh học như lu&acirc;n canh hoặc sử dụng ph&acirc;n b&oacute;n tự nhi&ecirc;n.</p>\r\n', '<p>M&Agrave;U X&Aacute;M THAN&nbsp;-&nbsp;0761/322</p>\r\n\r\n<p>&Aacute;o nỉ d&agrave;i tay d&aacute;ng thụng, cổ may liền mũ tr&ugrave;m đầu. C&oacute; một t&uacute;i ẩn ở đường may ngang ngực. Bo viền bằng vải g&acirc;n.<br />\r\n<br />\r\nCHI&Ecirc;̀U CAO NGƯỜI M&Acirc;̃U: 189 CM CỠ L CH&Acirc;U &Acirc;U<br />\r\n<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 50% l&agrave; sợi b&ocirc;ng hữu cơ.<br />\r\nB&ocirc;ng hữu cơ được trồng theo c&aacute;c phương ph&aacute;p gi&uacute;p bảo vệ sự đa dạng sinh học như lu&acirc;n canh hoặc sử dụng ph&acirc;n b&oacute;n tự nhi&ecirc;n.</p>\r\n', 1, 1, '1571762841aonam1.jpg', 1190000),
(2, 'ÁO KHOÁC VẢI DỆT XƯƠNG CÁ', 3, '<p>M&Agrave;U GHI X&Aacute;M&nbsp;-&nbsp;5876/886</p>\r\n\r\n<p>&Aacute;o kho&aacute;c oversize cổ ve lật, ve &aacute;o nhọn. D&agrave;i tay, may đai c&agrave;i ở cổ tay. C&oacute; hai t&uacute;i c&oacute; nắp ph&iacute;a trước v&agrave; một t&uacute;i b&ecirc;n trong. Gấu xẻ ch&iacute;nh giữa ph&iacute;a sau. Vạt đắp ch&eacute;o ph&iacute;a trước, c&agrave;i bằng khuy.</p>\r\n', '<p>M&Agrave;U GHI X&Aacute;M&nbsp;-&nbsp;5876/886</p>\r\n\r\n<p>&Aacute;o kho&aacute;c oversize cổ ve lật, ve &aacute;o nhọn. D&agrave;i tay, may đai c&agrave;i ở cổ tay. C&oacute; hai t&uacute;i c&oacute; nắp ph&iacute;a trước v&agrave; một t&uacute;i b&ecirc;n trong. Gấu xẻ ch&iacute;nh giữa ph&iacute;a sau. Vạt đắp ch&eacute;o ph&iacute;a trước, c&agrave;i bằng khuy.</p>\r\n', 0, 1, '1571763913aonam2.jpg', 4999000),
(3, 'ÁO SƠ MI VẢI POPLIN', 3, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;0072/566</p>\r\n\r\n<p>&Aacute;o sơ mi d&aacute;ng slim fit, cổ ve lật, d&agrave;i tay, cổ tay c&agrave;i khuy. C&oacute; h&agrave;ng khuy c&agrave;i ở th&acirc;n &aacute;o ph&iacute;a trước.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;0072/566</p>\r\n\r\n<p>&Aacute;o sơ mi d&aacute;ng slim fit, cổ ve lật, d&agrave;i tay, cổ tay c&agrave;i khuy. C&oacute; h&agrave;ng khuy c&agrave;i ở th&acirc;n &aacute;o ph&iacute;a trước.</p>\r\n', 1, 0, '1571764010aonam3.jpg', 1190000),
(4, 'VÒNG TAY XÍCH KIM LOẠI', 8, '<p>M&Agrave;U BẠC&nbsp;-&nbsp;8435/327</p>\r\n\r\n<p>V&ograve;ng tay x&iacute;ch bằng kim loại, với chi tiết mắt x&iacute;ch d&agrave;y. Cố định bằng m&oacute;c c&agrave;i.</p>\r\n\r\n<p>Mặt h&agrave;ng n&agrave;y c&oacute; k&egrave;m c&aacute;c&nbsp;điều kiện ho&agrave;n trả h&agrave;ng đặc biệt</p>\r\n', '<p>M&Agrave;U BẠC&nbsp;-&nbsp;8435/327</p>\r\n\r\n<p>V&ograve;ng tay x&iacute;ch bằng kim loại, với chi tiết mắt x&iacute;ch d&agrave;y. Cố định bằng m&oacute;c c&agrave;i.</p>\r\n\r\n<p>Mặt h&agrave;ng n&agrave;y c&oacute; k&egrave;m c&aacute;c&nbsp;điều kiện ho&agrave;n trả h&agrave;ng đặc biệt</p>\r\n', 1, 0, '1571764070pk1.jpg', 599000),
(5, 'VÒNG TAY HỞ KHẮC TRANG TRÍ', 8, '<p>V&Agrave;NG&nbsp;-&nbsp;8435/335</p>\r\n\r\n<p>V&ograve;ng tay bằng kim loại cứng, khắc hoa văn c&aacute;c đường kẻ trang tr&iacute;.</p>\r\n\r\n<p>Mặt h&agrave;ng n&agrave;y c&oacute; k&egrave;m c&aacute;c&nbsp;điều kiện ho&agrave;n trả h&agrave;ng đặc biệt</p>\r\n', '<p>V&Agrave;NG&nbsp;-&nbsp;8435/335</p>\r\n\r\n<p>V&ograve;ng tay bằng kim loại cứng, khắc hoa văn c&aacute;c đường kẻ trang tr&iacute;.</p>\r\n\r\n<p>Mặt h&agrave;ng n&agrave;y c&oacute; k&egrave;m c&aacute;c&nbsp;điều kiện ho&agrave;n trả h&agrave;ng đặc biệt</p>\r\n', 0, 1, '1571764158pk2.jpg', 499000),
(6, 'BỐT THỂ THAO KIỂU BÍT TẤT', 5, '<p>M&Agrave;U ĐEN&nbsp;-&nbsp;5109/002</p>\r\n\r\n<p>Gi&agrave;y thể thao vải kỹ thuật, kh&ocirc;ng d&acirc;y buộc. M&agrave;u đen. Th&acirc;n gi&agrave;y nguy&ecirc;n khối. Cổ cao, thiết kế kiểu b&iacute;t tất. Đế d&agrave;y, xẻ, m&agrave;u trắng, phối m&agrave;u đen tương phản.</p>\r\n', '<p>M&Agrave;U ĐEN&nbsp;-&nbsp;5109/002</p>\r\n\r\n<p>Gi&agrave;y thể thao vải kỹ thuật, kh&ocirc;ng d&acirc;y buộc. M&agrave;u đen. Th&acirc;n gi&agrave;y nguy&ecirc;n khối. Cổ cao, thiết kế kiểu b&iacute;t tất. Đế d&agrave;y, xẻ, m&agrave;u trắng, phối m&agrave;u đen tương phản.</p>\r\n', 1, 0, '1571764243giay1.jpg', 1590000),
(7, 'BỐT THỂ THAO - MX03', 5, '<p>M&Agrave;U ĐEN&nbsp;-&nbsp;5115/002</p>\r\n\r\n<p>Bốt thể thao m&agrave;u đen buộc d&acirc;y. Th&acirc;n bốt bằng da b&oacute;ng. Có 8 h&agrave;ng lỗ xỏ d&acirc;y viền m&agrave;u v&agrave;ng kim. Trang tr&iacute; c&aacute;c đường may nổi tr&ecirc;n th&acirc;n bốt, miệng bốt chần b&ocirc;ng. Đ&ecirc;́ màu đen. K&egrave;m hai bộ d&acirc;y buộc gi&agrave;y m&agrave;u đỏ v&agrave; m&agrave;u đen.</p>\r\n', '<p>M&Agrave;U ĐEN&nbsp;-&nbsp;5115/002</p>\r\n\r\n<p>Bốt thể thao m&agrave;u đen buộc d&acirc;y. Th&acirc;n bốt bằng da b&oacute;ng. Có 8 h&agrave;ng lỗ xỏ d&acirc;y viền m&agrave;u v&agrave;ng kim. Trang tr&iacute; c&aacute;c đường may nổi tr&ecirc;n th&acirc;n bốt, miệng bốt chần b&ocirc;ng. Đ&ecirc;́ màu đen. K&egrave;m hai bộ d&acirc;y buộc gi&agrave;y m&agrave;u đỏ v&agrave; m&agrave;u đen.</p>\r\n', 0, 1, '1571764331giay2.jpg', 1590000),
(8, 'BỐT THỂ THAO MÀU TRẮNG KÉO KHÓA - MX05', 5, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;5108/002</p>\r\n\r\n<p>B&ocirc;́t thể thao c&ocirc;̉ ngắn, có d&acirc;y. M&agrave;u trắng. C&oacute; kh&oacute;a k&eacute;o m&agrave;u đen b&ecirc;n th&acirc;n. Lưỡi g&agrave; v&agrave; lớp l&oacute;t b&ecirc;n trong m&agrave;u đen. Có 8 h&agrave;ng l&ocirc;̃ xỏ d&acirc;y. C&oacute; hai bộ d&acirc;y buộc đi k&egrave;m (m&agrave;u đen v&agrave; m&agrave;u da cam) để thay đổi v&agrave; kết hợp theo &yacute; th&iacute;ch. Đế d&agrave;y, m&agrave;u trắng. Sản phẩm n&agrave;y c&oacute; trọng lượng si&ecirc;u nhẹ. Phong c&aacute;ch urban.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;5108/002</p>\r\n\r\n<p>B&ocirc;́t thể thao c&ocirc;̉ ngắn, có d&acirc;y. M&agrave;u trắng. C&oacute; kh&oacute;a k&eacute;o m&agrave;u đen b&ecirc;n th&acirc;n. Lưỡi g&agrave; v&agrave; lớp l&oacute;t b&ecirc;n trong m&agrave;u đen. Có 8 h&agrave;ng l&ocirc;̃ xỏ d&acirc;y. C&oacute; hai bộ d&acirc;y buộc đi k&egrave;m (m&agrave;u đen v&agrave; m&agrave;u da cam) để thay đổi v&agrave; kết hợp theo &yacute; th&iacute;ch. Đế d&agrave;y, m&agrave;u trắng. Sản phẩm n&agrave;y c&oacute; trọng lượng si&ecirc;u nhẹ. Phong c&aacute;ch urban.</p>\r\n', 0, 0, '1571764394giay3.jpg', 2900000),
(9, 'ÁO KHOÁC KÈM THẮT LƯNG - MN1', 4, '<p>M&Agrave;U XANH NƯỚC BIỂN&nbsp;-&nbsp;4070/223</p>\r\n\r\n<p>&Aacute;o kho&aacute;c cổ ve lật, d&agrave;i tay. C&oacute; t&uacute;i vu&ocirc;ng đ&aacute;p ph&iacute;a trước. K&egrave;m thắt lưng c&ugrave;ng chất liệu.<br />\r\n<br />\r\nCHI&Ecirc;̀U CAO NGƯỜI M&Acirc;̃U: 177 CM<br />\r\n<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 50% l&agrave; len t&aacute;i chế.<br />\r\nViệc sản xuất từ vải t&aacute;i chế &iacute;t ảnh hưởng đến m&ocirc;i trường hơn; ti&ecirc;u thụ &iacute;t nước, &iacute;t năng lượng v&agrave; &iacute;t t&agrave;i nguy&ecirc;n thi&ecirc;n nhi&ecirc;n hơn.</p>\r\n', '<p>M&Agrave;U XANH NƯỚC BIỂN&nbsp;-&nbsp;4070/223</p>\r\n\r\n<p>&Aacute;o kho&aacute;c cổ ve lật, d&agrave;i tay. C&oacute; t&uacute;i vu&ocirc;ng đ&aacute;p ph&iacute;a trước. K&egrave;m thắt lưng c&ugrave;ng chất liệu.<br />\r\n<br />\r\nCHI&Ecirc;̀U CAO NGƯỜI M&Acirc;̃U: 177 CM<br />\r\n<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 50% l&agrave; len t&aacute;i chế.<br />\r\nViệc sản xuất từ vải t&aacute;i chế &iacute;t ảnh hưởng đến m&ocirc;i trường hơn; ti&ecirc;u thụ &iacute;t nước, &iacute;t năng lượng v&agrave; &iacute;t t&agrave;i nguy&ecirc;n thi&ecirc;n nhi&ecirc;n hơn.</p>\r\n', 0, 1, '1571764499aonu1.jpg', 3500000),
(10, 'ÁO NỈ HỌA TIẾT TRỪU TƯỢNG', 3, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;0495/326</p>\r\n\r\n<p>&Aacute;o nỉ d&aacute;ng thụng, cổ tr&ograve;n, d&agrave;i tay. Ph&iacute;a trước trang tr&iacute; họa tiết kh&aacute;c m&agrave;u. Bo viền bằng vải g&acirc;n.</p>\r\n\r\n<p>&Aacute;o nỉ d&aacute;ng thụng, cổ tr&ograve;n, d&agrave;i tay. Ph&iacute;a trước trang tr&iacute; họa tiết kh&aacute;c m&agrave;u. Bo viền bằng vải g&acirc;n.<br />\r\n&nbsp;</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;0495/326</p>\r\n\r\n<p>&Aacute;o nỉ d&aacute;ng thụng, cổ tr&ograve;n, d&agrave;i tay. Ph&iacute;a trước trang tr&iacute; họa tiết kh&aacute;c m&agrave;u. Bo viền bằng vải g&acirc;n.</p>\r\n', 1, 0, '1571792725aonam4.jpg', 1390000),
(11, 'ÁO NỈ GARFIELD ©PAWS INC', 3, '<p>&Aacute;o nỉ d&aacute;ng su&ocirc;ng, cổ tr&ograve;n, d&agrave;i tay. Bo viền bằng vải g&acirc;n. Ph&iacute;a trước in họa tiết m&egrave;o Garfield &copy;PAWS, Inc.</p>\r\n', '<p>&Aacute;o nỉ d&aacute;ng su&ocirc;ng, cổ tr&ograve;n, d&agrave;i tay. Bo viền bằng vải g&acirc;n. Ph&iacute;a trước in họa tiết m&egrave;o Garfield &copy;PAWS, Inc.</p>\r\n', 0, 0, '1571792793aonam5.jpg', 999000),
(12, 'ÁO NỈ MICKEY MOUSE © DISNEY', 3, '<p>&Aacute;o nỉ d&aacute;ng su&ocirc;ng, cổ tr&ograve;n, d&agrave;i tay. Bo viền bằng vải g&acirc;n. Ph&iacute;a trước in h&igrave;nh nh&acirc;n vật hoạt h&igrave;nh Mickey Mouse &copy;Disney.</p>\r\n', '<p>&Aacute;o nỉ d&aacute;ng su&ocirc;ng, cổ tr&ograve;n, d&agrave;i tay. Bo viền bằng vải g&acirc;n. Ph&iacute;a trước in h&igrave;nh nh&acirc;n vật hoạt h&igrave;nh Mickey Mouse &copy;Disney.</p>\r\n', 0, 1, '1571792868aonam6.jpg', 999000),
(13, 'ÁO NỈ DREAMER BY NATURAL', 3, '<p>M&Agrave;U TRẮNG NG&Agrave;&nbsp;-&nbsp;0495/314</p>\r\n\r\n<p>&Aacute;o nỉ d&aacute;ng su&ocirc;ng, cổ tr&ograve;n, cộc tay. Ph&iacute;a trước th&ecirc;u họa tiết chữ kh&aacute;c m&agrave;u. Bo viền bằng len g&acirc;n.</p>\r\n', '<p>M&Agrave;U TRẮNG NG&Agrave;&nbsp;-&nbsp;0495/314</p>\r\n\r\n<p>&Aacute;o nỉ d&aacute;ng su&ocirc;ng, cổ tr&ograve;n, cộc tay. Ph&iacute;a trước th&ecirc;u họa tiết chữ kh&aacute;c m&agrave;u. Bo viền bằng len g&acirc;n.</p>\r\n', 0, 0, '1571792964aonam7.jpg', 999000),
(14, 'ÁO NỈ MX100R2', 3, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;0761/306</p>\r\n\r\n<p>&Aacute;o nỉ d&aacute;ng thụng, cổ tr&ograve;n, cộc tay. Ph&iacute;a trước in h&igrave;nh bức tranh của James Wilson.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;0761/306</p>\r\n\r\n<p>&Aacute;o nỉ d&aacute;ng thụng, cổ tr&ograve;n, cộc tay. Ph&iacute;a trước in h&igrave;nh bức tranh của James Wilson.</p>\r\n', 0, 0, '1571793078aonam8.jpg', 1190000),
(15, 'GIÀY THỂ THAO TRẮNG PHONG CÁCH RETRO', 5, '<p>Gi&agrave;y th&ecirc;̉ thao bu&ocirc;̣c d&acirc;y. Có 6 h&agrave;ng l&ocirc;̃ xỏ d&acirc;y. Th&acirc;n gi&agrave;y phối nhiều chất liệu, c&oacute; c&aacute;c chi tiết bằng vải lưới, mũi gi&agrave;y đục lỗ nhỏ trang tr&iacute;. M&agrave;u trắng. Đế m&agrave;u trắng phối m&agrave;u n&acirc;u caramel tương phản. Phong c&aacute;ch retro. Có quai xỏ hỗ trợ xỏ phía sau.</p>\r\n', '<p>Gi&agrave;y th&ecirc;̉ thao bu&ocirc;̣c d&acirc;y. Có 6 h&agrave;ng l&ocirc;̃ xỏ d&acirc;y. Th&acirc;n gi&agrave;y phối nhiều chất liệu, c&oacute; c&aacute;c chi tiết bằng vải lưới, mũi gi&agrave;y đục lỗ nhỏ trang tr&iacute;. M&agrave;u trắng. Đế m&agrave;u trắng phối m&agrave;u n&acirc;u caramel tương phản. Phong c&aacute;ch retro. Có quai xỏ hỗ trợ xỏ phía sau.</p>\r\n', 0, 0, '1571793156giay4.jpg', 4999000),
(16, 'GIÀY LƯỜI DA', 5, '<p>Gi&agrave;y lười da d&aacute;ng bốt. Th&acirc;n gi&agrave;y m&agrave;u đen, dập v&acirc;n nổi kiểu da động vật. Đục lỗ trang tr&iacute; ở quanh b&agrave;n ch&acirc;n v&agrave; ở mũi gi&agrave;y. Đ&iacute;nh chi tiết kim loại trang tr&iacute; tr&ecirc;n mu gi&agrave;y. Miếng l&oacute;t đế bằng da. G&oacute;t cao: 2,5 cm.</p>\r\n', '<p>Gi&agrave;y lười da d&aacute;ng bốt. Th&acirc;n gi&agrave;y m&agrave;u đen, dập v&acirc;n nổi kiểu da động vật. Đục lỗ trang tr&iacute; ở quanh b&agrave;n ch&acirc;n v&agrave; ở mũi gi&agrave;y. Đ&iacute;nh chi tiết kim loại trang tr&iacute; tr&ecirc;n mu gi&agrave;y. Miếng l&oacute;t đế bằng da. G&oacute;t cao: 2,5 cm.</p>\r\n', 0, 0, '1571793242giay5.jpg', 3490000),
(17, 'BỐT DA MÀU ĐEN PHONG CÁCH VINTAGE', 5, '<p>M&Agrave;U ĐEN&nbsp;-&nbsp;5026/002</p>\r\n\r\n<p>B&ocirc;́t da có d&acirc;y. M&agrave;u đen. C&oacute; 10 h&agrave;ng lỗ xỏ d&acirc;y. Phong c&aacute;ch vintage, phối chi tiết hiệu ứng nhăn ở mũi. C&oacute; một quai nắm ph&iacute;a sau v&agrave; kh&oacute;a k&eacute;o b&ecirc;n gi&uacute;p dễ xỏ hơn. L&oacute;t đế bằng da.<br />\r\n<br />\r\nJOIN LIFE<br />\r\nCare for planet: Thuộc da bằng c&aacute;c phương ph&aacute;p bền vững nhất.<br />\r\nC&aacute;c sản phẩm n&agrave;y được sản xuất tại c&aacute;c xưởng thuộc da được chứng nhận của Leather Working Group, sử dụng năng lượng t&aacute;i chế v&agrave; c&aacute;c c&ocirc;ng nghệ giảm thiểu lượng nước ti&ecirc;u thụ</p>\r\n', '<p>M&Agrave;U ĐEN&nbsp;-&nbsp;5026/002</p>\r\n\r\n<p>B&ocirc;́t da có d&acirc;y. M&agrave;u đen. C&oacute; 10 h&agrave;ng lỗ xỏ d&acirc;y. Phong c&aacute;ch vintage, phối chi tiết hiệu ứng nhăn ở mũi. C&oacute; một quai nắm ph&iacute;a sau v&agrave; kh&oacute;a k&eacute;o b&ecirc;n gi&uacute;p dễ xỏ hơn. L&oacute;t đế bằng da.<br />\r\n<br />\r\nJOIN LIFE<br />\r\nCare for planet: Thuộc da bằng c&aacute;c phương ph&aacute;p bền vững nhất.<br />\r\nC&aacute;c sản phẩm n&agrave;y được sản xuất tại c&aacute;c xưởng thuộc da được chứng nhận của Leather Working Group, sử dụng năng lượng t&aacute;i chế v&agrave; c&aacute;c c&ocirc;ng nghệ giảm thiểu lượng nước ti&ecirc;u thụ</p>\r\n', 1, 1, '1571793361giay6.jpg', 2690000),
(19, 'GIÀY THỂ THAO MX7', 5, '<p>Gi&agrave;y thể thao đế mềm buộc d&acirc;y. Có 7 h&agrave;ng l&ocirc;̃ xỏ d&acirc;y. C&oacute; quai hỗ trợ xỏ ph&iacute;a sau. Phần g&oacute;t v&agrave; lưỡi g&agrave; kh&aacute;c m&agrave;u. Đ&ecirc;́ c&ugrave;ng m&agrave;u.</p>\r\n', '<p>Gi&agrave;y thể thao đế mềm buộc d&acirc;y. Có 7 h&agrave;ng l&ocirc;̃ xỏ d&acirc;y. C&oacute; quai hỗ trợ xỏ ph&iacute;a sau. Phần g&oacute;t v&agrave; lưỡi g&agrave; kh&aacute;c m&agrave;u. Đ&ecirc;́ c&ugrave;ng m&agrave;u.</p>\r\n', 0, 0, '1571793561giay7.jpg', 1590000),
(20, 'GIÀY THỂ THAO ME8', 5, '<p>Gi&agrave;y thể thao đế mềm buộc d&acirc;y. Có 7 h&agrave;ng l&ocirc;̃ xỏ d&acirc;y. C&oacute; quai hỗ trợ xỏ ph&iacute;a sau. Phần g&oacute;t v&agrave; lưỡi g&agrave; kh&aacute;c m&agrave;u. Đ&ecirc;́ c&ugrave;ng m&agrave;u.</p>\r\n', '<p>Gi&agrave;y thể thao đế mềm buộc d&acirc;y. Có 7 h&agrave;ng l&ocirc;̃ xỏ d&acirc;y. C&oacute; quai hỗ trợ xỏ ph&iacute;a sau. Phần g&oacute;t v&agrave; lưỡi g&agrave; kh&aacute;c m&agrave;u. Đ&ecirc;́ c&ugrave;ng m&agrave;u.</p>\r\n', 0, 1, '1571793610giay8.jpg', 2799000),
(21, 'GIÀY THỂ THAO EQ1', 5, '<p>Gi&agrave;y thể thao đế mềm buộc d&acirc;y. Có 7 h&agrave;ng l&ocirc;̃ xỏ d&acirc;y. C&oacute; quai hỗ trợ xỏ ph&iacute;a sau. Phần g&oacute;t v&agrave; lưỡi g&agrave; kh&aacute;c m&agrave;u. Đ&ecirc;́ c&ugrave;ng m&agrave;u.</p>\r\n', '<p>Gi&agrave;y thể thao đế mềm buộc d&acirc;y. Có 7 h&agrave;ng l&ocirc;̃ xỏ d&acirc;y. C&oacute; quai hỗ trợ xỏ ph&iacute;a sau. Phần g&oacute;t v&agrave; lưỡi g&agrave; kh&aacute;c m&agrave;u. Đ&ecirc;́ c&ugrave;ng m&agrave;u.</p>\r\n', 0, 0, '1571793653giay9.jpg', 4999000),
(22, 'QUẦN - 01', 1, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 0, '1571793788quan1.jpg', 1190000),
(23, 'QUẦN - 02', 1, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 0, '1571793832quan2.jpg', 1190000),
(24, 'QUẦN - 03', 1, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 1, 0, '1571793876quan3.jpg', 999000),
(25, 'QUẦN - 04', 1, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 0, '1571793921quan4.jpg', 599000),
(26, 'QUẦN05', 1, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 0, '1571794227quan5.jpg', 1190000),
(27, 'QUẦN - 06', 1, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 0, '1571794265Quan6.jpg', 4999000),
(28, 'QUẦN - 07', 1, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 1, '1571794291quan7.jpg', 4999000),
(29, 'QUẦN 8', 1, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 1, '1571794318quan8.jpg', 4999000),
(30, 'QUẦN - 01', 2, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 0, '1571794344qn1.jpg', 999000),
(31, 'QUẦN - 02', 2, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 0, '1571794364qn2.jpg', 1590000),
(32, 'QUẦN - 03', 2, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 0, '1571794383qn3.jpg', 499000),
(33, 'QUẦN - 04', 2, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 1, 0, '1571794409qn4.jpg', 799000),
(34, 'QUẦN - 05', 2, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 0, '1571794434qn5.jpg', 999000),
(35, 'QUẦN - 06', 2, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 0, '1571794485qn6.jpg', 799000),
(36, 'QUẦN - 07', 2, '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', '<p>M&Agrave;U TRẮNG&nbsp;-&nbsp;6861/360</p>\r\n\r\n<p>Quần ống b&oacute; c&oacute; 5 t&uacute;i. C&agrave;i ph&iacute;a trước bằng kh&oacute;a k&eacute;o v&agrave; khuy kim loại.</p>\r\n', 0, 0, '1571794509qn7.jpg', 1190000),
(37, 'Áo - 1', 4, '<p>M&Agrave;U TRẮNG NG&Agrave;&nbsp;-&nbsp;6050/803</p>\r\n\r\n<p>&Aacute;o ph&ocirc;ng cổ hở rộng, d&agrave;i tay, cổ tay bo thun co gi&atilde;n bản rộng. Eo co gi&atilde;n. Phối vải c&ugrave;ng m&agrave;u sau lưng.<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 85% l&agrave; sợi b&ocirc;ng hữu cơ.<br />\r\nB&ocirc;ng hữu cơ được trồng theo c&aacute;c phương ph&aacute;p canh t&aacute;c gi&uacute;p bảo vệ sự đa dạng sinh học như lu&acirc;n canh hoặc sử dụng ph&acirc;n b&oacute;n tự nhi&ecirc;n</p>\r\n', '<p>M&Agrave;U TRẮNG NG&Agrave;&nbsp;-&nbsp;6050/803</p>\r\n\r\n<p>&Aacute;o ph&ocirc;ng cổ hở rộng, d&agrave;i tay, cổ tay bo thun co gi&atilde;n bản rộng. Eo co gi&atilde;n. Phối vải c&ugrave;ng m&agrave;u sau lưng.<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 85% l&agrave; sợi b&ocirc;ng hữu cơ.<br />\r\nB&ocirc;ng hữu cơ được trồng theo c&aacute;c phương ph&aacute;p canh t&aacute;c gi&uacute;p bảo vệ sự đa dạng sinh học như lu&acirc;n canh hoặc sử dụng ph&acirc;n b&oacute;n tự nhi&ecirc;n</p>\r\n', 0, 0, '1571794717ao1.jpg', 999000),
(38, 'Áo 2', 4, '<p>M&Agrave;U TRẮNG NG&Agrave;&nbsp;-&nbsp;6050/803</p>\r\n\r\n<p>&Aacute;o ph&ocirc;ng cổ hở rộng, d&agrave;i tay, cổ tay bo thun co gi&atilde;n bản rộng. Eo co gi&atilde;n. Phối vải c&ugrave;ng m&agrave;u sau lưng.<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 85% l&agrave; sợi b&ocirc;ng hữu cơ.<br />\r\nB&ocirc;ng hữu cơ được trồng theo c&aacute;c phương ph&aacute;p canh t&aacute;c gi&uacute;p bảo vệ sự đa dạng sinh học như lu&acirc;n canh hoặc sử dụng ph&acirc;n b&oacute;n tự nhi&ecirc;n</p>\r\n', '<p>M&Agrave;U TRẮNG NG&Agrave;&nbsp;-&nbsp;6050/803</p>\r\n\r\n<p>&Aacute;o ph&ocirc;ng cổ hở rộng, d&agrave;i tay, cổ tay bo thun co gi&atilde;n bản rộng. Eo co gi&atilde;n. Phối vải c&ugrave;ng m&agrave;u sau lưng.<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 85% l&agrave; sợi b&ocirc;ng hữu cơ.<br />\r\nB&ocirc;ng hữu cơ được trồng theo c&aacute;c phương ph&aacute;p canh t&aacute;c gi&uacute;p bảo vệ sự đa dạng sinh học như lu&acirc;n canh hoặc sử dụng ph&acirc;n b&oacute;n tự nhi&ecirc;n</p>\r\n', 0, 0, '1571794735ao2.jpg', 1590000),
(39, 'ÁO 3', 4, '<p>M&Agrave;U TRẮNG NG&Agrave;&nbsp;-&nbsp;6050/803</p>\r\n\r\n<p>&Aacute;o ph&ocirc;ng cổ hở rộng, d&agrave;i tay, cổ tay bo thun co gi&atilde;n bản rộng. Eo co gi&atilde;n. Phối vải c&ugrave;ng m&agrave;u sau lưng.<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 85% l&agrave; sợi b&ocirc;ng hữu cơ.<br />\r\nB&ocirc;ng hữu cơ được trồng theo c&aacute;c phương ph&aacute;p canh t&aacute;c gi&uacute;p bảo vệ sự đa dạng sinh học như lu&acirc;n canh hoặc sử dụng ph&acirc;n b&oacute;n tự nhi&ecirc;n</p>\r\n', '<p>M&Agrave;U TRẮNG NG&Agrave;&nbsp;-&nbsp;6050/803</p>\r\n\r\n<p>&Aacute;o ph&ocirc;ng cổ hở rộng, d&agrave;i tay, cổ tay bo thun co gi&atilde;n bản rộng. Eo co gi&atilde;n. Phối vải c&ugrave;ng m&agrave;u sau lưng.<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 85% l&agrave; sợi b&ocirc;ng hữu cơ.<br />\r\nB&ocirc;ng hữu cơ được trồng theo c&aacute;c phương ph&aacute;p canh t&aacute;c gi&uacute;p bảo vệ sự đa dạng sinh học như lu&acirc;n canh hoặc sử dụng ph&acirc;n b&oacute;n tự nhi&ecirc;n</p>\r\n', 0, 0, '1571794759ao3.jpg', 599000),
(40, 'ÁO 4', 4, '<p>M&Agrave;U TRẮNG NG&Agrave;&nbsp;-&nbsp;6050/803</p>\r\n\r\n<p>&Aacute;o ph&ocirc;ng cổ hở rộng, d&agrave;i tay, cổ tay bo thun co gi&atilde;n bản rộng. Eo co gi&atilde;n. Phối vải c&ugrave;ng m&agrave;u sau lưng.<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 85% l&agrave; sợi b&ocirc;ng hữu cơ.<br />\r\nB&ocirc;ng hữu cơ được trồng theo c&aacute;c phương ph&aacute;p canh t&aacute;c gi&uacute;p bảo vệ sự đa dạng sinh học như lu&acirc;n canh hoặc sử dụng ph&acirc;n b&oacute;n tự nhi&ecirc;n</p>\r\n', '<p>M&Agrave;U TRẮNG NG&Agrave;&nbsp;-&nbsp;6050/803</p>\r\n\r\n<p>&Aacute;o ph&ocirc;ng cổ hở rộng, d&agrave;i tay, cổ tay bo thun co gi&atilde;n bản rộng. Eo co gi&atilde;n. Phối vải c&ugrave;ng m&agrave;u sau lưng.<br />\r\nJOIN LIFE<br />\r\nCare for fiber: tối thiểu 85% l&agrave; sợi b&ocirc;ng hữu cơ.<br />\r\nB&ocirc;ng hữu cơ được trồng theo c&aacute;c phương ph&aacute;p canh t&aacute;c gi&uacute;p bảo vệ sự đa dạng sinh học như lu&acirc;n canh hoặc sử dụng ph&acirc;n b&oacute;n tự nhi&ecirc;n</p>\r\n', 0, 0, '1571794797ao7.jpg', 999000),
(41, 'TÚI', 7, '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', 0, 1, '15717949481.jpg', 999000),
(42, 'TÚI', 7, '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', 0, 0, '15717949742.jpg', 1190000),
(43, 'BAGS', 7, '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', 0, 0, '15717950103.jpg', 10000000),
(44, 'BAGS', 7, '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', 0, 0, '15717950324.jpg', 8888890),
(45, 'BAGS', 7, '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', 0, 0, '15717950735.jpg', 7777780),
(46, 'BAGS', 7, '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', 0, 0, '15717951077.jpg', 6666670),
(47, 'BAGS', 7, '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', '<p>T&uacute;i x&aacute;ch d&aacute;ng ba l&ocirc;. M&agrave;u đen. Th&acirc;n gi&agrave;y ph&ocirc;́i chất liệu. Thiết kế lấy cảm hứng từ ba l&ocirc; trekking - leo n&uacute;i. C&oacute; ba ngăn c&agrave;i kh&oacute;a k&eacute;o. B&ecirc;n trong ngăn ch&iacute;nh c&oacute; một ngăn đựng đồ điện tử k&iacute;ch thước 13&rdquo; (33 cm), một ngăn phụ nhỏ c&agrave;i kh&oacute;a k&eacute;o v&agrave; một m&oacute;c để treo ch&igrave;a kh&oacute;a. Lớp lót b&ecirc;n trong m&agrave;u xanh dương. C&oacute; hai quai đeo vai điều chỉnh được v&agrave; hai quai x&aacute;ch tay. Phong c&aacute;ch urban - thể thao.</p>\r\n', 1, 1, '15717951238.jpg', 4999000),
(48, 'MŨ LEN DỆT KIM PHỐI LÔNG', 8, '<p>M&Agrave;U ĐỎ RƯỢU&nbsp;-&nbsp;0653/716</p>\r\n\r\n<p>Mũ len dệt kim phối l&ocirc;ng nh&acirc;n tạo sợi d&agrave;i, c&oacute; chi tiết bịt tai giữ ấm. Đ&iacute;nh quả b&ocirc;ng trang tr&iacute;.</p>\r\n', '<p>M&Agrave;U ĐỎ RƯỢU&nbsp;-&nbsp;0653/716</p>\r\n\r\n<p>Mũ len dệt kim phối l&ocirc;ng nh&acirc;n tạo sợi d&agrave;i, c&oacute; chi tiết bịt tai giữ ấm. Đ&iacute;nh quả b&ocirc;ng trang tr&iacute;.</p>\r\n', 1, 1, '1571906275phukien1.jpg', 999000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_size`
--

CREATE TABLE `tbl_size` (
  `size_id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_size`
--

INSERT INTO `tbl_size` (`size_id`, `name`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL'),
(6, 'XXXL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Nguyễn Văn A', 'admin1@mail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Nguyễn Văn B\r\n', 'admin2@mail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Nguyễn Văn C', 'admin3@mail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'Nguyễn Văn B', 'admin4@mail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Nguyễn Văn E', 'admin5@mail.com', '202cb962ac59075b964b07152d234b70');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
