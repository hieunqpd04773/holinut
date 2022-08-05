-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 15, 2021 lúc 05:59 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `holinut`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(10) NOT NULL,
  `tongTien` int(50) NOT NULL,
  `ngayDatMua` date NOT NULL,
  `ghiChu` varchar(255) NOT NULL,
  `tinhTrang` varchar(50) NOT NULL,
  `maKH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`maHD`, `tongTien`, `ngayDatMua`, `ghiChu`, `tinhTrang`, `maKH`) VALUES
(49, 2162000, '2021-08-13', 'ki ogugu', 'Đã hủy đơn', 31),
(50, 568000, '2021-08-13', 'Dung giao cho vo toi\r\n', 'Đã hủy đơn', 31),
(51, 1016000, '2021-08-14', 'abcdèg\r\n', 'Đang giao hàng', 27),
(52, 826000, '2021-08-14', '', 'Đang giao hàng', 35),
(53, 577000, '2021-08-14', 'Nguyen qunag  suavhbsa\r\n', 'Đã hủy đơn', 31),
(54, 1166000, '2021-08-15', 'Giao Nhanh boa 10k\r\n', 'Trả hàng', 31);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `maHD` int(10) NOT NULL,
  `sanpham_ID` int(10) NOT NULL,
  `soLuong` int(10) NOT NULL,
  `donGia` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`maHD`, `sanpham_ID`, `soLuong`, `donGia`) VALUES
(15, 20, 1, 150000),
(16, 20, 1, 150000),
(17, 20, 1, 150000),
(17, 25, 1, 249000),
(17, 24, 1, 99000),
(18, 20, 1, 150000),
(18, 25, 1, 249000),
(18, 24, 1, 99000),
(19, 18, 3, 199000),
(19, 20, 1, 150000),
(19, 19, 1, 249000),
(20, 26, 1, 10),
(21, 20, 1, 150000),
(22, 20, 1, 150000),
(23, 20, 1, 150000),
(23, 25, 2, 249000),
(23, 19, 1, 249000),
(23, 21, 2, 2900000),
(24, 19, 1, 249000),
(25, 26, 1, 10),
(26, 19, 4, 249000),
(26, 18, 1, 199000),
(26, 25, 1, 249000),
(26, 23, 1, 190000),
(26, 20, 1, 150000),
(28, 19, 1, 249000),
(29, 19, 1, 249000),
(30, 18, 1, 199000),
(31, 19, 1, 249000),
(32, 19, 1, 249000),
(33, 19, 1, 249000),
(34, 19, 1, 249000),
(35, 18, 1, 199000),
(35, 19, 1, 249000),
(36, 18, 1, 199000),
(36, 19, 2, 249000),
(37, 18, 1, 199000),
(37, 19, 2, 249000),
(38, 19, 1, 249000),
(39, 18, 1, 199000),
(39, 23, 1, 190000),
(40, 18, 1, 199000),
(42, 18, 1, 199000),
(43, 19, 1, 249000),
(44, 19, 1, 249000),
(44, 18, 1, 199000),
(45, 20, 1, 150000),
(45, 25, 1, 249000),
(46, 18, 1, 199000),
(47, 18, 2, 199000),
(47, 23, 1, 190000),
(47, 24, 1, 99000),
(48, 18, 1, 199000),
(48, 19, 1, 249000),
(48, 20, 1, 150000),
(48, 21, 1, 2900000),
(49, 18, 1, 199000),
(49, 20, 1, 150000),
(49, 25, 1, 249000),
(49, 24, 1, 99000),
(49, 23, 1, 190000),
(49, 19, 5, 249000),
(50, 24, 1, 99000),
(50, 23, 1, 190000),
(50, 25, 1, 249000),
(51, 18, 1, 199000),
(51, 19, 1, 249000),
(51, 24, 1, 99000),
(51, 23, 1, 190000),
(51, 25, 1, 249000),
(52, 18, 1, 199000),
(52, 19, 1, 249000),
(52, 24, 1, 99000),
(52, 25, 1, 249000),
(53, 18, 1, 199000),
(53, 19, 1, 249000),
(53, 24, 1, 99000),
(54, 18, 1, 199000),
(54, 23, 1, 190000),
(54, 24, 1, 99000),
(54, 20, 1, 150000),
(54, 19, 2, 249000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(10) NOT NULL,
  `tenKH` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `emailKH` varchar(100) NOT NULL,
  `soDT` int(50) NOT NULL,
  `diachiKH` varchar(255) NOT NULL,
  `admin_KH` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `tenKH`, `username`, `password`, `emailKH`, `soDT`, `diachiKH`, `admin_KH`) VALUES
(27, 'QuanTriVien', 'admin', '123456', 'hieunqpd04773@fpt.edu.vn', 374162121, 'Da Nang', 1),
(31, 'Nguyen Quang Hieu', 'NguyenQuangHieu', '123', 'hieunqh@gmail.com', 374162121, 'Quang Tri', 0),
(35, 'Hiếu ĐZ', 'hieunqh', '111', 'hieunqh@gmail.com', 326805466, 'Đà Nẵng', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanloai`
--

CREATE TABLE `phanloai` (
  `maPhanLoai` varchar(20) NOT NULL,
  `tenPhanLoai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanloai`
--

INSERT INTO `phanloai` (`maPhanLoai`, `tenPhanLoai`) VALUES
('macca', 'Hạt Macca'),
('occho', 'Hạt Óc Chó');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sanpham_ID` int(10) NOT NULL,
  `tenSP` varchar(255) NOT NULL,
  `giaSP` int(25) NOT NULL,
  `soLuongSP` int(10) NOT NULL,
  `maPhanLoai` varchar(20) NOT NULL,
  `anhSP` varchar(255) NOT NULL,
  `moTaSP` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sanpham_ID`, `tenSP`, `giaSP`, `soLuongSP`, `maPhanLoai`, `anhSP`, `moTaSP`) VALUES
(18, 'Quả Óc Chó Harley', 199000, 33, 'occho', 'nhan-oc-cho-holinut.jpg', 'Quả Óc Chó Harley đang là loại quả được rất nhiều người yêu thích và lựa chọn cho gia đình của mình. Hiện nay , tại rất nhiều nước trên thế giới loại hạt này được bán rất chạy vì được chứng minh tốt cho tim mạch. Vậy Quả Óc Chó Harley có những công dụng đặc biệt nào cho sức khỏe?'),
(19, 'Nhân Óc Chó Đỏ 500 gram', 249000, 33, 'occho', 'nhan-oc-cho-do-holinut.jpg', 'Từ lâu, hạt óc chó đã là một trong những loại hạt mang đến nhiều chất dinh dưỡng đến cho sức khỏe của mọi người. Đây luôn là loại hạt được nhiều chuyên gia dinh dưỡng tin tưởng và khuyên mọi người nên tập sử dụng hạt óc chó mỗi ngày, nhất là ăn nhân óc chó đỏ vào mỗi bữa ăn. '),
(20, 'Hạt Óc Chó Chile', 150000, 33, 'occho', 'oc-cho-chile-chandler.jpg', 'Óc chó California được đánh giá là nhà xuất khẩu hạt óc chó lớn nhất thế giới thì hạt óc chó Chile được đánh giá là loại óc chó ngon nhất thế giới với những đặc điểm: tỷ lệ nhân đầy hạt trên 50%, nhân vàng, ăn giòn.'),
(21, 'Quả Óc Chó Đỏ Bao 25 kg', 2900000, 33, 'occho', 'qua-oc-cho-do-768x484.jpg', 'Óc chó được biết đến là một loại quả có công dụng cực kỳ tốt cho sức khỏe con người. Đặc biệt, trong hơn 30 loại óc chó thì Quả Óc Chó Đỏ có nhiều dược tính và giàu dinh dưỡng nhất. Vậy những công dụng của Óc Chó Đỏ là gì? Cách sử dụng như thế nào tốt?'),
(23, 'Macca Nứt Vỏ Nhập Khẩu Mỹ ', 190000, 33, 'macca', 'hat-macca-holinut-600x600.jpg', 'Trong hạt macca chứa nhiều chất dinh dưỡng cùng hợp chất thực vật có lợi, chủ yếu là chất béo. Tuy nhiên chất béo trong macca không phải là loại chất béo có hại, mà chúng là các chất béo không bão hòa đơn lành mạnh. Bên cạnh đó, với lượng calo dồi dào cùng một lượng lớn vitamin và khoáng chất, một ounce (28gram) macca có thể cung cấp:'),
(24, 'Macca Nứt Vỏ Trung Quốc 500 gram', 99000, 33, 'macca', 'hat-macca-500-gram-holinut-600x600.jpg', 'Hạt macca Trung Quốc có vỏ khá dày màu nâu đậm nhưng tỷ lệ nhân ít và nhỏ. Loại hạt này trước khi phân phối thì đã bị đưa đi tách lấy dầu nên không được đánh giá cao về chất lượng, thiếu độ thơm ngậy, ăn vào có cảm giác hơi gắt ở cổ họng và chất dinh dưỡng không đảm bảo.'),
(25, 'Macca Nứt Vỏ Nhập Khẩu Úc 500 gram', 249000, 33, 'macca', 'hat-macca-500-gram-holinut-600x600.jpg', 'Macca vốn bắt nguồn từ Úc với thổ nhưỡng phù hợp nên loại hạt tại đây có chất lượng cao nhất và đảm bảo dưỡng chất đầy đủ. Hạt có vẻ ngoài sáng bóng, kích thước to tròn, nhân hạt màu trắng sữa và mang hương vị ngậy bùi, ngọt thanh đặc biệt. Macca từ Úc hiện luôn chiếm sản lượng xuất khẩu và tiêu thụ đứng đầu, chứng tỏ mức độ ưa chuộng của người tiêu dùng đối với chúng.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`),
  ADD KEY `maKH` (`maKH`);

--
-- Chỉ mục cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD KEY `maSP` (`sanpham_ID`),
  ADD KEY `maHD` (`maHD`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`maPhanLoai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sanpham_ID`),
  ADD KEY `maPhanLoai` (`maPhanLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maPhanLoai`) REFERENCES `phanloai` (`maPhanLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
