-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 02:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ctdonhang`
--

CREATE TABLE `tbl_ctdonhang` (
  `masp` int(11) NOT NULL,
  `madh` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_ctdonhang`
--

INSERT INTO `tbl_ctdonhang` (`masp`, `madh`, `tensp`, `hinhanh`, `soluong`) VALUES
(0, 0, '', '', 1),
(2, 2, '', '', 120),
(2, 3, '', '', 150),
(2, 8, '', '', 151),
(4, 11, '', '', 250),
(5, 2, '', '', 459),
(9, 8, '', '', 231),
(10, 14, '', '', 128),
(11, 16, '', '', 326),
(13, 5, '', '', 854),
(14, 4, '', '', 845),
(16, 3, '', '', 589),
(17, 12, '', '', 421),
(18, 5, '', '', 153),
(19, 15, '', '', 254),
(20, 1, '', '', 362),
(20, 4, '', '', 576),
(21, 1, '', '', 429),
(21, 9, '', '', 50),
(21, 10, '', '', 10),
(21, 12, '', '', 423),
(21, 13, '', '', 184);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `MADH` int(11) NOT NULL,
  `MAKH` int(11) DEFAULT NULL,
  `MANV` int(11) DEFAULT NULL,
  `NGAYDH` varchar(20) CHARACTER SET utf8 NOT NULL,
  `TRANGTHAI` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`MADH`, `MAKH`, `MANV`, `NGAYDH`, `TRANGTHAI`) VALUES
(1, 6, 1, '2019/11/30', 'Giao dịch thành công'),
(2, 7, 5, '2019/11/27', 'Đã hủy'),
(3, 1, 4, '2019/11/09', 'Đã hủy'),
(4, 7, 2, '2019/11/26', 'Đã hủy'),
(5, 5, 6, '2019/11/14', 'Giao dịch thành công'),
(8, 9, 1, '2019/11/14', 'Giao dịch thành công'),
(9, 11, 4, '2019/11/14', 'Giao dịch thành công'),
(10, 5, 4, '2019/11/20', 'Giao dịch thành công'),
(11, 10, 6, '2019/11/20', 'Giao dịch thành công'),
(12, 10, 2, '2019/11/07', 'Giao dịch thành công'),
(13, 10, 5, '2019/11/4', 'Giao dịch thành công'),
(14, 10, 5, '2019/11/4', 'Đang giao dịch'),
(15, 10, 1, '2019/11/02', 'Đang giao dịch'),
(16, 13, 2, '2019/11/02', 'Đang giao dịch');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donvitinh`
--

CREATE TABLE `tbl_donvitinh` (
  `MADVT` int(11) NOT NULL,
  `TENDVT` varchar(50) CHARACTER SET utf8 NOT NULL,
  `GHICHU` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_donvitinh`
--

INSERT INTO `tbl_donvitinh` (`MADVT`, `TENDVT`, `GHICHU`) VALUES
(1, 'quyển', NULL),
(2, 'cây', NULL),
(3, 'Miếng', NULL),
(4, 'Chai', NULL),
(5, 'Tuýp', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `MAKH` int(11) NOT NULL,
  `MATK` int(11) DEFAULT NULL,
  `HOTENKH` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DIACHI` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `SDT` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `MATKHAU` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`MAKH`, `MATK`, `HOTENKH`, `DIACHI`, `EMAIL`, `SDT`, `MATKHAU`) VALUES
(1, 39, 'PHẠM THỊ THU HÀ', '', 'tichhan98@gmail.com', '0936839573', 'han'),
(5, NULL, 'NGUYỄN THỊ THỦY', 'Huế', '', '0989037173', ''),
(6, NULL, 'ĐOÀN THỊ NGUYỆT', 'Hà Nội', '', '0397224270', ''),
(7, NULL, 'BI GIVENCHY', 'Bắc Giang', '', '0985281990', ''),
(9, NULL, 'ĐỒNG THỊ THU VÂN', 'Quảng Ninh', '', '0328368888', ''),
(10, 1, 'NGUYỄN THU TRANG', 'Hưng Yên', '', ' 0974548186', ''),
(11, 30, 'TRANG ĐÀI', 'Lạng Sơn', '', '0369002949', ''),
(12, 12, 'LING NGUYỄN', 'Hải Phòng', '', ' 0902836386', ''),
(13, 14, 'AN HOÀ', 'Móng Cái', '', ' 0902818894', ''),
(14, 29, 'LA RÔ VI THƯƠNG', 'Đà Nẵng', 'jun.trinh24@gmail.com', '0393437913', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khuvuc`
--

CREATE TABLE `tbl_khuvuc` (
  `MAKHUVUC` int(11) NOT NULL,
  `TENKHUVUC` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_khuvuc`
--

INSERT INTO `tbl_khuvuc` (`MAKHUVUC`, `TENKHUVUC`) VALUES
(1, 'Phía Bắc'),
(2, 'Phía Nam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loaisanpham`
--

CREATE TABLE `tbl_loaisanpham` (
  `maloaisp` int(11) NOT NULL,
  `tenloaisp` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_loaisanpham`
--

INSERT INTO `tbl_loaisanpham` (`maloaisp`, `tenloaisp`) VALUES
(1, 'kinh tế'),
(2, 'ngoại ngữ'),
(3, 'nuôi dạy con'),
(4, 'tâm lý _ kns'),
(5, 'thiếu nhi'),
(6, 'văn học'),
(7, 'văn phòng phẩm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loaitaikhoan`
--

CREATE TABLE `tbl_loaitaikhoan` (
  `MALOAITK` int(11) NOT NULL,
  `TENLOAITK` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_loaitaikhoan`
--

INSERT INTO `tbl_loaitaikhoan` (`MALOAITK`, `TENLOAITK`) VALUES
(1, 'Admin'),
(2, 'Nhân viên bán hàng'),
(3, 'Khách hàng'),
(4, 'Đại lí');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `MANV` int(11) NOT NULL,
  `MATK` int(11) DEFAULT NULL,
  `HOTENNV` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DIACHI` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `SDT` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`MANV`, `MATK`, `HOTENNV`, `DIACHI`, `EMAIL`, `SDT`) VALUES
(1, NULL, 'Nguyễn Nam', '', '', ''),
(2, 10, 'Nguyễn  Ân', '192 Đồng Khởi', 'phucan2297@gmail.com', '0908222005'),
(4, 11, 'Phạm Thụy Minh', 'Bình Phước', 'ntmthuy97@gmail.com', '065951458'),
(5, 19, 'Huỳnh Tấn', 'Tân Phú', 'tanhuynh@gmail.com', '0984631275'),
(6, 34, 'admin', 'Sài Gòn', 'admin@uis.ufm.com', '911'),
(7, 37, 'Jun', '362 Nguyễn Đình Chiểu', 'jun.trinh24@gmail.com', '0936839573');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `masp` int(11) NOT NULL,
  `madvt` int(11) NOT NULL,
  `tensp` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tentacgia` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maloaisp` int(11) NOT NULL,
  `nhaxuatban` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `taiban` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(10) NOT NULL,
  `mota` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dongia` float NOT NULL,
  `giacu` float NOT NULL,
  `giamgia` double NOT NULL,
  `hinhanh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BestSeller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`masp`, `madvt`, `tensp`, `tentacgia`, `maloaisp`, `nhaxuatban`, `taiban`, `soluong`, `mota`, `dongia`, `giacu`, `giamgia`, `hinhanh`, `BestSeller`) VALUES
(1, 1, 'Nhà Lãnh Đạo Không Chức Danh', 'Robin Sharma', 1, 'NXB Trẻ', 'Lần thứ 9', 120, 'Bất kể bạn làm gì trong tổ chức và cuộc sống hiện tại của bạn như thế nào, một thực tế quan trọng duy nhất là bạn có khả năng thể hiện năng lực lãnh đạo. Cho dù sự nghiệp hiện tại của bạn đang ở đâu, bạn vẫn luôn cần phải thể hiện những khả năng tột đỉnh của mình. Cuốn sách này sẽ hướng dẫn bạn làm thế nào để khai thác tối đa khả năng đó, cũng như thay đổi cuộc sống và thế giới xung quanh bạn.', 99000, 104000, 5, 'kt1.jpg', 1),
(2, 1, 'Từ Tốt Đến Vĩ Đại', 'Jim Collins\r\n', 1, 'NXB Trẻ\r\n', 'lần thứ 17', 450, 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. Mỗi kết luận của nhóm nghiên cứu đều hữu ích, vượt thời gian, ý nghĩa vô cùng to lớn đối với mọi lãnh đạo và quản lý ở mọi l', 79000, 85000, 15, 'kt2.jpg', 0),
(3, 1, 'Bí mật tư duy triệu phú', 'T Harv Eker\r\n', 1, 'NXB Tổng Hợp TPHCM\r\n', 'năm 2019', 220, '\"Ai cũng có một cuộc sống, ai cũng làm việc cần cù, ai cũng ước mơ được thành công, nhưng không mấy ai may mắn học được cách tư duy độc đáo và tầm nhìn của những tỷ phú lừng danh đã tiết lộ trong cuốn sách giá trị này...\"\r\n\r\n(Wall Street Journal)\r\n\r\nTrong cuốn sách này T. Harv Eker sẽ tiết lộ những bí mật tại sao một số người lại đạt được những thành công vượt bậc, được số phận ban cho cuộc sống sung túc, giàu có, trong khi một số người khác phải chật vật, vất vả mới có một cuộc sống qua ngày. B', 71760, 92000, 22, 'kt3.jpg', 0),
(4, 1, 'Đừng Để Tiên Ngủ Yên trong Túi - Thuật Đầu Tư Thông Minh Của Người Giàu Babylon', 'Tương Lâm\r\n', 1, 'NXB Thanh Niên\r\n', '', 205, 'rong cuốn sách này, nhóm biên soạn cố gắng chọn lọc phươngpháp làm giàu của người Babylon, truyền tải chúng thông qua lời văn rõ ràng và những câu chuyện sinh động. Hi vọng di sản trí tuệ này sẽ mang đến cho quý độc giả những gợi ý sâu sắc và bổ ích, giúp\r\ngợi mở cho những người còn đang lo lắng, do dự trên con đường làm giàu, để họ có thể thuận lợi hơn trên con đường thực hiện ước mơ của mình.  ', 38080, 56000, 32, 'kt4.jpg', 1),
(5, 1, 'Bốn mươi gương thành công', 'Dale Carnegie\r\n', 1, 'NXB Văn Hóa Thông Tin\r\n', 'năm 2017', 271, 'Nếu bạn có thể thất bại luôn năm mười năm mà vẫn chịu đói rét để viết, như Zane Grey, Somerset Maugham; nếu bạn có thể xin việc mười tám lần mà cũng không chán nản như Eddie Rickenbacer, thì chắc sớm muộn gì bạn cũng thành công, mà đời bạn càng nghèo khổ, trở ngại càng lớn lao thì ý chí của bạn càng được tôi luyện, khả năng của bạn càng được phát triển và sự thành công càng rực rỡ.', 40000, 50000, 20, 'kt5.jpg', 1),
(6, 1, 'Khởi Nghiệp 4.0', 'Dorie Clark\r\n', 1, 'NXB Lao Động\r\n', '', 128, 'Trong một thế giới còn hoài nghi và đánh giá thấp tiềm năng của các cá nhân bắt đầu kinh doanh từ những công cụ online và mạng xã hội, \"Khởi nghiệp 4.0\" chắc chắn sẽ vừa là động lực, vừa là cẩm nang hướng dẫn giúp bạn định hình tương lai nghề nghiệp và tự chủ tài chính. Hãy làm theo các hướng dẫn trong sách - từng bước một, sử dụng các vật dụng bạn đã có sẵn trong tay, ngay trước mắt bạn, để tạo ra nguồn thu nhập dồi dào và bền vững.', 104250, 139000, 25, 'kt6.jpg', 0),
(7, 1, '12 Tuyệt Kỹ Bán Hàng', 'Brian Tracy, Michael Tracy\r\n', 1, 'NXB Lao Động\r\n', 'năm 2018', 122, 'CHÀO MỪNG BẠN ĐẾN VỚI THẾ GIỚI MỚI CỦA CÔNG VIỆC BÁN HÀNG! Trong tương lai, ngày càng nhiều người sẽ kiếm được nhiều tiền hơn và có được những thành công vĩ đại hơn về tài chính trên con đường phát triển sự nghiệp bán hàng của mình, nhiều hơn bất cứ thời điểm nào trước đây. 5% trong số các tỉ phú tự thân là những người bán hàng, những người có xuất phát điểm rất thấp, trở thành chuyên gia trong lĩnh vực của họ, kiếm được rất nhiều tiền và trở nên giàu có. Và những gì mà hàng trăm nghìn người, th', 79000, 99000, 25, 'kt7.jpg', 0),
(8, 1, 'Chiến Lược Đại Dương Xanh', 'WChan Kim, Renée Mauborgne\r\n', 1, 'NXB Lao Động Xã Hội\r\n', 'năm 2017', 654, 'Theo Kim và Mauborgne, một bước đi chiến lược là một loạt những hành động quản lý và quyết định liên quan đến việc hình thành một hoạt động kinh doanh cho một thị trường lớn. Bản chất của “Chiến lược đại dương xanh” là nâng cao về giá trị đi kèm với sự tiện lợi, giá cả thấp và giảm chi phí. Nó buộc các công ty phải có bước nhảy vọt về giá trị, mang lại sự gia tăng mạnh mẽ về giá trị cho cả người mua và chính họ. Hai tác giả của cuốn sách mang tính nền tảng này, Kim và Mauborgne, đã sử dụng hàng ', 153230, 199000, 23, 'kt8.jpg', 1),
(9, 1, 'Lãnh đạo đích thực', 'Bill George\r\n', 1, 'NXB Tổng Hợp TPHCM\r\n', '', 604, '\"Chúng ta cần những nhà lãnh đạo đích thực - những người có lòng chính trực, có cam kết hướng tới việc xây dựng những tổ chức bền vững, lâu dài. Chúng ta cần những nhà lãnh đạo có ý thức cao về mục tiêu, trung thành với các giá trị cốt lõi của họ. Chúng ta cần những nhà lãnh đạo có đủ can đảm xây dựng công ty theo hướng đáp ứng nhu cầu của mọi chủ thể liên quan, đồng thời ý thức được tầm quan trọng của dịch vụ của họ đối với xã hội.”', 79000, 99000, 25, 'kt9.jpg', 0),
(10, 1, 'Làm Điều Quan Trọng', 'John Doerr\r\n', 1, 'NXB Tổng Hợp TPHCM\r\n', '', 459, '“Làm điều quan trọng” giống như một quyển nhật ký ghi chép lại kinh nghiệm về những trường hợp điển hình đã thành công nhờ phương pháp OKRs. Với mục đích có thêm ngày càng nhiều các công ty khởi nghiệp, hay những công ty lâu năm cũng sẽ nhận ra những lợi ích và bắt đầu áp dụng OKRs vào mô hình vận hành.', 90000, 94000, 4, 'kt10.jpg', 0),
(11, 1, 'Dẫn Dắt - Lãnh Đạo Chứ Không Quản Lý', 'Alex Furguson , Michael Moritz\r\n', 1, 'NXB Trẻ\r\n', '', 285, 'Trong cuốn sách đầy cảm hứng và rất thẳng thắn này, Sir Alex tiết lộ với chúng ta những “bí mật” thú vị đằng sau sự nghiệp lừng lẫy của ông. Tác giả tập trung trình bày những kỹ năng quản lý và lãnh đạo mà ông xem là quan trọng nhất, cũng chính là những gì mà chúng ta ngay lập tức hình dung khi nghĩ về “phong cách huấn luyện của Sir Alex Ferguson”: kỷ luật, kiểm soát, tinh thần đồng đội và động lực thi đấu. Ngoài ra, tác giả không quên đề cập tới những khía cạnh dường như không nổi bật, nhưng kh', 127100, 155000, 18, 'kt11.jpg', 1),
(12, 1, 'Không Bao Giờ Là Thất Bại! Tất Cả Là Thử Thách', 'Chung Ju Yung\r\n', 1, 'NXB Tổng Hợp TPHCM\r\n', 'năm 2016', 477, 'Đây là một minh chứng sống về ý chí và năng lực không giới hạn của con người khi đã có lòng nhiệt huyết, say mê - một người đã xem những thất bại - cho dù là thất bại cay đắng nhất - không phải là thất bại - mà chỉ là thử thách của cuộc sống tôi rèn bản lĩnh của chính mình. Tác giả và nhân vật trong cuốn tự truyện này là một người Hàn Quốc nổi tiếng: Chung Ju Yung - người đã sáng lập và là cố chủ tịch của tập đoàn Huyndai.', 76440, 98000, 22, 'kt12.jpg', 0),
(13, 1, 'Nuôi Con Khoẻ Mạnh Từ 0-1 Tuổi', 'Ngô Quang Trì, Ngọc Linh\r\n', 3, 'NXB Phụ Nữ\r\n', '', 322, 'Những kiến thức về sức khỏe sinh sản và nuôi dậy con cái vô cùng cần thiết với các cặp vợ chồng trẻ hiện nay. Chắc hẳn các bậc làm cha, làm mẹ đều mong muốn mình sinh ra những em bé khỏe mạnh, lớn khôn, nhưng để biến mong muốn đó thành hiện thực, chúng ta phải chuẩn bị và làm như thế nào? Các bạn đừng quá lo lắng, nắm bắt được tâm lý đó, chúng tôi đã biên soạn, chỉnh lý và cho ra đời bộ sách hữu ích này, những kiến thức trong bộ sách sẽ kịp thời trang bị cho các bậc cha mẹ những kiến thức quan t', 79000, 83000, 5, 'ndc1.jpg', 0),
(14, 1, '120 Thực Đơn Ăn Dặm', 'Bs. Nguyễn Thị Hoa', 3, 'NXB Phụ Nữ\r\n', '', 264, ' Qua nhiều năm công tác tại khoa dinh dưỡng bệnh viện Nhi đồng I, TP. HCM, những câu hỏi mà các bác sĩ chuyên ngành thường hay nhận được là: Tôi cần cho con tôi ăn cái gì cho bổ? Con tôi ăn vậy đã đủ chưa? Tôi nấu như vậy có giữ được dinh dưỡng không?... Để giải đáp những thắc mắc của các ông bố bà mẹ khi nuôi con, cũng như góp phần cải thiện tình trạng dinh dưỡng của trẻ em Việt Nam, cuốn sách 120 Thực Đơn Ăn Dặm đã được biên soạn và cho ra mắt bạn đọc. Các thực đơn giới thiệu trong sách được c', 27300, 35000, 22, 'ndc2.jpg', 0),
(15, 1, 'Cẩm nang toàn tập mẹ và bé', 'Carol Cooper\r\n', 3, 'NXB Phụ Nữ\r\n', '', 220, 'thực sự là một cuốn sách với những thông tin đầy đủ, thực tế, khoa học nhất cùng với những hướng dẫn, kinh nghiệm hữu ích về tất cả các vấn đề thường gặp trong việc chăm sóc sức khỏe mẹ và bé trong suốt quá trình mang thai đến sau khi sinh. Với mong muốn tất cả các bà mẹ đều có một “ngày vượt cạn” mẹ tròn con vuông, và chuỗi ngày hạnh phúc sau đó hai mẹ con đều khỏe mạnh về thể chất lẫn tinh thần, không chỉ các bà mẹ trẻ mới cần tham khảo quyển sách bổ ích này, các ông bố và người thân trong gia', 118400, 148000, 20, 'ndc3.jpg', 0),
(16, 1, 'TRẺ CÀNG CHƠI CÀNG THÔNG MINH\r\n', 'Cao Nhuận\r\n', 3, 'NXB Dân Trí\r\n', '', 617, 'Giai đoạn từ 0 - 3 tuổi, trẻ có khả năng nhận biết và ghi nhớ đặc biệt. Nếu trong giai đoạn này, cha mẹ có thể cho trẻ thể nghiệm môi trường, hoàn cảnh phong phú đa dạng, dạy dỗ và nuôi nấng trẻ bằng những biện pháp khoa học, thì trẻ có thể có được sự phát triển vượt trội. Cùng chơi các trò chơi với trẻ chính là cách để cha mẹ đem đến cho trẻ những cảm nhận tốt nhất.', 69520, 88000, 21, 'ndc4.jpg', 0),
(17, 1, 'Những Quy Tắc Mẹ Nghiêm Khắc Dạy Con Tự Lập', 'Denise Schaipani\r\n', 3, 'Dân Trí\r\n', '', 321, '\"Nếu làm mẹ, tôi cho rằng ai cũng có thể. Nhưng để dạy con, không biết có phải người mẹ nào cũng tự tin là mình đang dạy con một cách tốt nhất không?\r\n\r\nMẹ tôi có nói \"Bố mẹ cho con cần câu chứ không cho con con cá\". Hồi bé, khi nghe mẹ nói thế, tôi cũng chỉ ngoan ngoãn nghe mẹ giải thích và nghĩ mình đã hiểu lắm rồi. Nhưng bây giờ, khi đã trưởng thành, tôi mới thấy câu nói ấy thấm đến thế nào. Mẹ tôi dạy tôi nghiêm khắc đến mức tôi chẳng bao giờ dám tâm sự gì với bà, nhưng đổi lại tôi có thể tr', 77220, 99000, 22, 'ndc5.jpg', 0),
(18, 1, 'English Grammar in Use Fourth edition', 'Raymond Murphy\r\n', 2, 'Cambridge University\r\n', '', 392, 'English Grammar in Use Fourth edition is an updated version of the world\'s best-selling grammar title. It has a fresh, appealing new design and clear layout, with revised and updated examples, but retains all the key features of clarity and accessibility that have made the book popular with millions of learners and teachers around the world. The CD-ROM contains lots of additional practice exercises to consolidate learning, ideal for self-study but also suitable for reinforcement work in the clas', 160000, 178000, 10, 'nn1.jpg', 0),
(19, 1, 'ENGLISH VOCABULARY IN USE', 'Michael McCarthy\r\n', 2, 'Cambridge University\r\n', '', 550, 'The world\'s best-selling grammar series for learners of English. English Grammar in Use Fourth edition is an updated version of the world\'s best-selling grammar title. It has a fresh, appealing new design and clear layout, with revised and updated examples, but retains all the key features of clarity and accessibility that have made the book popular with millions of learners and teachers around the world. This \'with answers\' version is ideal for self-study. An online version, book without answer', 60000, 70000, 12, 'nn2.jpg', 0),
(20, 1, 'THINKING, FAST AND SLOW\r\n', 'Daniel Kahneman\r\n', 2, 'Farrar, Straus & Giroux Inc\r\n', '', 430, 'Engaging the reader in a lively conversation about how we think, Kahneman reveals where we can and cannot trust our intuitions and how we can tap into the benefits of slow thinking. He offers practical and enlightening insights into how choices are made in both our business and our personal lives--and how we can use different techniques to guard against the mental glitches that often get us into trouble. Winner of the National Academy of Sciences Best Book Award and the Los Angeles Times Book Pr', 217000, 256000, 15, 'nn3.jpg', 0),
(21, 1, 'CAMBRIDGE IELTS 13 GENERAL TRAINING ', 'Cambridge University Press\r\n', 2, 'Cambridge University Press\r\n', '', 144, 'Cambridge IELTS 13 chính là cuốn mới nhất được ra vào năm 2018. Đây chắc chắn là cuốn tài liệu mà rất nhiều sĩ tử luyện thi IELTS đang mong chờ trong năm nay.\r\n\r\nNếu đã tìm hiểu tương đối sâu về IELTS chắc các bạn cũng biết cấu trúc đề thi IELTS không thay đổi nhưng mỗi năm chủ đề trong IELTS đa dạng và khó hơn. Vì vậy, cuốn Cambridge IELTS 13 sẽ giúp bạn ôn luyện bộ đề IELTS mới nhất hiện nay, cập nhật kiến thức hữu ích, đảm bảo bạn sẽ không bị “tụt hậu”, giúp bạn luyện thi IELTS hiệu quả nhất.', 117000, 130000, 10, 'nn4.jpg', 0),
(22, 1, 'TACTICS FOR LISTENING', 'Jack C Richards\r\n', 2, 'Oxford University Press UK\r\n', '', 69, '', 76000, 89000, 10, 'nn5.jpg', 0),
(23, 1, 'OXFORD ADVANCED LEARNER\'S DICTIONARY', 'Oxford University Press UK\r\n', 2, 'Oxford University Press UK\r\n', '', 179, 'Say it with Oxford. The Oxford Advanced Learner\'s Dictionary is the ultimate speaking and writing tool for developing the skills you need for passing exams and communicating in English. It\'s trusted by learners and teachers of English around the world for its clear explanations and example sentences. Language level: Upper-intermediate to advanced (B2-C2) Age range: Young teen to adult. ', 403000, 475000, 15, 'nn6.jpg', 0),
(24, 1, 'Kỹ Năng Sống Dành Cho Học Sinh - Biết Trân Trọng', 'Ngọc Linh\r\n', 5, 'NXB Văn Học\r\n', 'năm 2018', 160, 'Chúng tôi đã chọn lựa và tập hợp những câu chuyện nhiều màu sắc, đầy tính trí tuệ, hàm súc và giàu triết lí có tác dụng khích lệ ý chí thành bộ sách “Kỹ năng sống dành cho học sinh” bao gồm bảy cuốn: “Lòng biết ơn”, “Biết chấp nhận”, “Sự kiên cường”, “Học cách sống” , “Biết lựa chọn” , “Học cách cho và nhận”, “Biết trân trọng”. Có thể con đường phía trước của bạn còn nhiều trắc trở, hoặc bị chìm trong bóng tối lạnh giá, nhưng chúng tôi mong rằng bạn có thể hiểu được ý nghĩa sâu sắc từ các câu ch', 38250, 45000, 15, 'tn1.jpg', 0),
(25, 1, 'BÉ NGỦ AN LÀNH - MẸ NGỦ AN TÂM', 'Hirofumi Koyama, Hiroko Fujiwara\r\n', 5, 'NXB Dân Trí\r\n', '', 196, 'Đầu tiên, bằng việc tìm hiểu về lý do cũng như cơ chế của điều này, tôi nghĩ rằng các bạn có thể dỗ bé nín, cải thiện tình trạng khóc đêm để ổn định đồng hồ sinh học, và cứ như thế, giúp cho mỗi ngày bé trải qua đều thật vui vẻ, khỏe mạnh.\r\n\r\n“Làm thế nào để bé ngừng khóc” hay “Cách dỗ bé nín khóc” thì có vô vàn, nhưng những phương pháp gắn liền với nguyên nhân “Tại sao bé quấy khóc” sẽ có hiệu quả trước tiên.\r\n\r\nQua cuốn sách này, nếu các bạn có thể nhận ra “Thì ra là vậy! Làm như thế này là đư', 74250, 99000, 25, 'tn2.jpg', 1),
(26, 1, 'Những Tấm Lòng Cao Cả', 'Edmondo De Amicis, Hoàng Thiếu Sơn\r\n', 5, 'NXB Văn Học\r\n', '', 450, 'Một cậu bé người Ý, tên là Enricô Bottini, hằng ngày ghi lại những việc lớn nhỏ diễn ra trong đời học sinh của cậu, những cảm tưởng và suy nghĩ của cậu thành một cuốn nhật ký. Nhân vật trong nhật ký là các cô giáo, thầy giáo, các bạn học, là bố mẹ...; mỗi người một vẻ, có một đặc điêm nhẩ định về mặt thể chất hay tinh thần, nhưng đều toát lên vẻ đẹp tâm hồn trong họ. Mỗi câu chuyện là một bài học giáo dục, không chỉ dành riêng cho con trẻ mà còn cho tất cả chúng ta.', 56000, 70000, 15, 'tn3.jpg', 1),
(27, 1, 'Miền Đất Hứa', 'Kaiu Shirai, Posuka Demizu\r\n', 5, 'NXB Hồng Đức\r\n', '', 192, 'Nhóm Emma bắt đầu tiến hành cuộc rèn luyện nhằm cùng “mọi người” tẩu thoát khỏi GF House. Liệu cả bọn có rơi vào bàn tay ma quỷ của xơ Krone – kẻ đang giám sát chúng!? Điều gì đang chờ đợi bộ ba khi chúng có thêm “đồng đội” mới…\r\n\r\nHỡi những đứa trẻ không có tương lai, hãy đứng lên đối đầu với tuyệt vọng! Cuộc vượt ngục không tưởng sẽ đi đến đâu!?', 42000, 55000, 10, 'tn4.jpg', 0),
(28, 1, 'HỌC VIỆN THÁM TỬ Q - TẬP 4', 'Seimaru Amagi, Fumiya Sato\r\n', 5, 'NXB Trẻ\r\n', '', 224, 'Kyu và nhóm bạn hội họp trên đảo Kirisaki để tham gia vòng thi cuối cùng đầy cam go vào học viện thám tử. Thế nhưng, không ai ngờ họ lại tìm thấy cái xác bị xẻ đôi vô cùng tàn nhẫn của một trong số các thí sinh. Và thế là, mang trên mình phù hiệu D.D.S đầy kiêu hãnh, biệt đội 5 thám tử trẻ bắt đầu hành động, quyết tìm ra bí ẩn đằng sau vụ án ly kỳ này.', 42000, 55000, 10, 'tn5.jpg', 0),
(29, 1, 'NHẤT QUỶ NHÌ MA, THỨ BA TAKAGI - TẬP 3', 'Soichiro YAMAMOTO\r\n', 5, 'NXB Kim Đồng\r\n', '', 156, 'Cuộc đời đầy \"tội nghiệp\" của anh chàng Nishikata bên cạnh Takagi - Chuyên gia trêu chọc siêu ranh mãnh và... lầy lội...!! Chính vì bị chọc tức quá nhiều, nên lúc nào anh chàng cũng ấp ủ âm mưu trả đũa mà không làm gì được cô bé. Màn chơi khăm hết ngày này qua ngày khác liệu có đi đến một kết thúc có hậu!!?\r\n\r\nNgay bây giờ, kế hoạch \"Páo trù\" bắt đầu!!\r\n\r\nMời các bạn cùng bước vào thế giới đầy trong trẻo và vô cùng dễ thương của Takagi & Nishikata, thông qua phong cách vẽ cực kì hiện đại và đặc ', 65000, 82000, 15, 'tn6.jpg', 0),
(30, 1, 'POKÉMON - CUỘC PHIÊU LƯU CỦA PIPPI - TẬP 2', 'Kosaku Anakubo\r\n', 5, 'NXB Kim Đồng\r\n', '', 200, 'Với Pippi, ở đâu có chiến đấu, ở đó còn hi vọng!! Chính sự phấn đấu không ngừng của chú Pokémon này bên cạnh các Pokémon quen thuộc khác như Pikachu, Togepy, Fushigidane... đã đem lại những phút giây thư giãn thực sự với ngay cả những độc giả chưa biết quá nhiều về thế giới Pokémon.\r\n\r\nBởi vì đơn giản, đó chính là tiếng cười!!\r\n\r\nVới tất cả sự nỗ lực đưa Pokémon Pippi trở lại, NXB Kim Đồng xin một lần nữa giới thiệu tới tất cả những ai yêu thích Pokémon, những ai đang quá căng thẳng và gặp nhiều', 45000, 57000, 12, 'tn7.jpg', 1),
(31, 1, 'DORAEMON KÍ SỰ - CÂU CHUYỆN PHÍA SAU HỌA SĨ FUJIKO F FUJIO', 'Shintaro Mugiwara\r\n', 5, 'NXB Kim Đồng\r\n', '', 128, 'Đây là câu chuyện có thật về chàng thanh niên muốn trở thành họa sĩ truyện tranh, vì đã dành trọn đam mê cho “Doraemon” và sự ngưỡng mộ dành cho cha đẻ của “Doraemon” - họa sĩ FUJIKO F FUJIO.', 39000, 52000, 20, 'tn8.jpg', 0),
(32, 1, 'NOZAKI & TRUYỆN TRANH THIẾU NỮ - TẬP 8', 'Tsubaki Izumi\r\n', 5, 'NXB Hồng Đức\r\n', '', 146, 'NHỮNG CHUYỆN “ĐẦU TIÊN” XUNG QUANH CẬU CHÀNG HỌA SĨ TRUYỆN TRANH THIẾU NỮ BỊ TIẾT LỘ!\r\n\r\nMikoshiba Mikoto che giấu chuyện làm trợ lý truyện tranh, nhưng cuối cùng Wakamatsu Hirotaka đã phát hiện…!? Lần đầu Wakamatsu gặp Ryosuke – anh trai của Seo Yuzuki! Kết cục của trận chiến tâm lý sẽ ra sao…!? Tiếng lòng của Hori Masayuki về Kashima Yu vỡ òa!! Em gái Yumeko của Nozaki Umetaro lần đầu xuất hiện trong ngoại truyện.  ', 27200, 32000, 15, 'tn9.jpg', 0),
(33, 1, 'THÁM TỬ LỪNG DANH CONAN - TẬP 96', 'Gosho Aoyama\r\n', 5, 'NXB Kim Đồng\r\n', '', 184, 'Kaito Kid muốn giành lấy “Đôi Môi Tiên Nữ” và lần đầu đối mặt với Heiji Hattori! Makoto Kyogoku bị cuốn vào những vụ án xảy ra tại một địa điểm quay phim truyền hình…!? Những thông tin mới nhất liên quan tới ông trùm của Tổ chức Áo Đen sẽ được tiết lộ!!', 65000, 70000, 5, 'tn10.jpg', 0),
(34, 1, 'TÔI ĐI HỌC', 'Nguyễn Ngọc Ký\r\n', 5, 'NXB Tổng Hợp TPHCM\r\n', 'năm 2019', 176, 'Cuộc sống luôn có những biến cố, những đổi thay mà chúng ta không bao giờ biết trước. Cũng có những biến cố khiến chúng ta rơi vào ngõ cụt, không lối thoát. Nhưng với Nguyễn Ngọc Ký, biến cố vào năm 4 tuổi, khi phải trải qua một cơn sốt bại liệt, từ đó khiến đôi tay “như hai cục thịt lủng lẳng đeo vào hai bên mình” lại là một sự khởi đầu cho một cuộc đời mới. Và đó cũng là lý do để có tự truyện Tôi đi học, được xem là cuốn sách để đời của Nguyễn Ngọc Ký.', 54400, 68000, 20, 'tn11.jpg', 0),
(35, 1, 'SKET DANCE - QUÁI KIỆT HỌC ĐƯỜNG - TẬP 20', 'Kenta SHINOHARA\r\n', 5, 'NXB Kim Đồng\r\n', '', 188, 'Kiri sẽ thế nào khi gặp lại người giáo viên tồi tệ ngày trước? Cuộc đại náo trường trung học bùng nổ! Mặt khác, Dante bỗng lấn sân sang dòng nhạc mới, Bossun trở thành con nghiện game và có một gương mặt mới hết sức ấn tượng nhờ thuốc của thầy Chu!? Và tâm điểm của tập này, giấc mơ hợp tác với Gintama đã thành sự thật!', 49000, 60000, 20, 'tn12.jpg', 0),
(36, 1, 'Đời ngắn đừng ngủ dài', 'Robin Sharma', 4, 'NXB Trẻ', 'năm 2018', 300, '“Mọi lựa chọn đều giá trị. Mọi bước đi đều quan trọng. Cuộc sống vẫn diễn ra theo cách của nó, không phải theo cách của ta. Hãy kiên nhẫn. Tin tưởng. Hãy giống như người thợ cắt đá, đều đặn từng nhịp, ngày qua ngày. Cuối cùng, một nhát cắt duy nhất sẽ phá vỡ tảng đá và lộ ra viên kim cương. Người tràn đầy nhiệt huyết và tận tâm với việc mình làm không bao giờ bị chối bỏ. Sự thật là thế.”\r\n\r\nBằng những lời chia sẻ thật ngắn gọn, dễ hiểu về những trải nghiệm và suy ngẫm trong đời, Robin Sharma tiế', 52500, 75000, 30, 'tl1.jpg', 0),
(37, 1, 'Nói nhiều không bằng nói đúng\r\n', '2 1/2 Bạn Tốt', 4, 'Dân Trí', '05/2012', 200, 'Quyển sách cung cấp 36 bí quyết để chiếm được cảm tình của người khác.\r\n\r\nMuốn có mối quan hệ xã hội tốt, hãy bắt đầu từ những lời nói làm đẹp lòng mọi người. Trong giao tiếp, hãy luôn nhớ các nguyên tác: Im lặng - Quan sát - Lắng nghe.\r\n\r\nĐừng nói quá thẳng thắn, khiến người nghe thấy khó chịu!\r\n\r\nNói chuyện không dễ nghe sẽ khiến mọi người phản cảm và xa cách bạn, đồng thời dẫn đến việc bạn trở thành người có ấn tượng xấu.\r\n\r\nLời nói hay như những giai điệu đẹp, ai cũng muốn nghe.', 40000, 50000, 20, 'tl2.jpg', 0),
(38, 1, 'An lạc từng bước chân', 'Thích Nhất Hạnh', 4, 'NXB Tổng Hợp TPHCM', 'năm 2019', 100, 'Buổi sáng khi thức dậy, ta biết rằng có hai mươi bốn giờ trước mặt để sống. Đó là một món quà quý giá. Ta sống như thế nào để có an lạc và hạnh phúc trong suốt 24 giờ, mà người khác cũng nhờ đó mà có an lạc và hạnh phúc.\r\n\r\nAn lạc luôn có mặt trong ta ngay tại đây trong giờ phút này, trong mỗi vật và mỗi việc ta làm hay ta thấy. Vấn đề là ta có biết tiếp xúc với nó không. Bầu trời xanh ở ngay trước mắt ta, ta đâu cần phải đi đâu xa để thưởng thức trời xanh. Ta cũng không cần rời thành phố ta ở m', 79000, 99000, 22, 'tl3.jpg', 0),
(39, 1, 'Bạn thật sự có tài!', 'Tina Seelig', 4, 'NXB Trẻ', 'năm 2019', 120, 'Khả năng sáng tạo không phải một loại tài năng thiên bẩm chỉ dành cho một số người đặc biệt, nó là một kỹ năng bất cứ ai cũng có thể học hỏi. Dựa trên nền tảng đó, tác giả - một chuyên gia huấn luyện và cũng là một giáo sư của Đại học Stanford sẽ giúp độc giả hiểu đúng hơn về sự sáng tạo. Cùng với việc làm rõ bản chất của sáng tạo, bà còn cung cấp cho độc giả nhiều ví dụ cực kỳ thú vị về những ý tưởng đột phát ở khắp mọi nơi, trong đó có những công ty nổi tiếng như Google, Pixar, Facebook, IDEO…', 79000, 99000, 25, 'tl4.jpg', 0),
(40, 1, 'Cuộc đời của Pi', 'Yann Martel', 6, 'NXB Văn Học', 'năm 2019', 50, 'Cuộc Đời Của Pi (Tái Bản 2019)\r\n\r\n\"Mọi việc ở đời có bao giờ diễn ra như ta vẫn tưởng, nhưng biết làm sao. Cuộc đời đem cho ta cái gì thì ta phải nhận cái đó và chỉ còn cách làm cho chúng tốt đẹp nhất mà thôi.\"\r\n\r\nCuộc đời của Pi mở đầu với lời chào ấn tượng của tác giả, Yan Martel và hành trình tưởng như bế tắc khi ông mò mẫm đi tìm một câu chuyện cho sự nghiệp của mình. Lời chào ngắn ngủi ấy giúp người đọc hình dung được hoàn cảnh ra đời của cuốn sách và chẳng cần thắc mắc gì nhiều đến bối cản', 90000, 94000, 5, 'vh11.jpg', 0),
(41, 1, 'Rừng Nauy', 'Haruki Murakami', 6, 'NXB Văn Học', 'năm 2018', 50, 'Rừng Nauy (Tái Bản 2018)\r\n\r\nBất chợt lắng nghe bài hát mà nàng vẫn ưa thích nhất của Beatles, Toru Watanbe hồi tưởng lại mối tình đầu của mình với Naoko, người yêu của người bạn thân nhất là Kizuki. Ký ức ngay lập tức mang anh trở về những ngày sinh viên của 20 năm trước , ở Tokyo, những ngày chơi vơi trong một thế giới của tình bạn khó khăn, của tình dục buông thả, của đam mê mầt mát, trở về cái thời mà một cô gái mạnh mẽ tên là Modori đã bước vào cuộc đời anh, khiến anh phải chọn lựa, hoặc tươ', 99000, 124000, 20, 'vh1.jpg', 0),
(42, 1, 'Nhà giả kim', 'Paulo Coelho', 6, 'NXB Văn Học', 'năm 2017', 150, 'Nhà Giả Kim (Tái Bản 2017)\r\n\r\nNHÀ GIẢ KIM là cuốn sách được in nhiều nhất chỉ sau Kinh Thánh. Cuốn sách của Paulo Coelho có sự hấp dẫn ra sao khiến độc giả không chỉ các xứ dùng ngôn ngữ Bồ Đào Nha mà các ngôn ngữ khác say mê như vậy?\r\n\r\nTiểu thuyết NHÀ GIẢ KIM của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt c', 87000, 109000, 20, 'vh2.jpg', 0),
(43, 1, 'Cho tôi xin một vé đi tuổi thơ', 'Nguyễn Nhật Ánh', 6, 'NXB Trẻ', 'năm 2018', 60, 'Trong Cho tôi xin một vé đi tuổi thơ, nhà văn Nguyễn Nhật Ánh mời người đọc lên chuyến tàu quay ngược trở lại thăm tuổi thơ và tình bạn dễ thương của 4 bạn nhỏ. Những trò chơi dễ thương thời bé, tính cách thật thà, thẳng thắn một cách thông minh và dại dột, những ước mơ tự do trong lòng… khiến cuốn sách có thể làm các bậc phụ huynh lo lắng rồi thở phào. Không chỉ thích hợp với người đọc trẻ, cuốn sách còn có thể hấp dẫn và thực sự có ích cho người lớn trong quan hệ với con mình.', 56000, 70000, 20, 'vh3.jpg', 0),
(44, 1, 'Tôi thấy hoa vàng trên cỏ xanh', 'Nguyễn Nhật Ánh', 6, 'NXB Trẻ', '2018', 60, 'Những câu chuyện nhỏ xảy ra ở một ngôi làng nhỏ: chuyện người, chuyện cóc, chuyện ma, chuyện công chúa và hoàng tử , rồi chuyện đói ăn, cháy nhà, lụt lội,... Bối cảnh là trường học, nhà trong xóm, bãi tha ma. Dẫn chuyện là cậu bé 15 tuổi tên Thiều. Thiều có chú ruột là chú Đàn, có bạn thân là cô bé Mận. Nhưng nhân vật đáng yêu nhất lại là Tường, em trai Thiều, một cậu bé học không giỏi. Thiều, Tường và những đứa trẻ sống trong cùng một làng, học cùng một trường, có biết bao chuyện chung. Chúng n', 70000, 87500, 20, 'vh4.jpg', 0),
(45, 1, 'Có hai con mèo ngồi bên cửa sổ', 'Nguyễn Nhật Ánh', 6, 'NXB Trẻ', 'năm 2018', 200, 'Có Hai Con Mèo Ngồi Bên Cửa Sổ (Tái Bản 2018)\r\n\r\nÓ HAI CON MÈO NGỒI BÊN CỬA SỔ là tác phẩm đầu tiên của nhà văn Nguyễn Nhật Ánh viết theo thể loại đồng thoại. Đặc biệt hơn nữa là viết về tình bạn của hai loài vốn là thù địch của nhau mèo và chuột. Đó là tình bạn giữa mèo Gấu và chuột Tí Hon.\r\n\r\nĐể biết tại sao mèo Gấu lại chơi thân với chuột Tí Hon, thì mời bạn hãy mở sách ra.\r\n\r\nCuốn truyện mỏng mảnh vừa phải, hình vẽ của họa sĩ Hoàng Tường sinh động đến từng nét nũng nịu hay kiêu căng của nàng', 89000, 112000, 21, 'vh5.jpg', 0),
(46, 1, 'Ngày xưa có một chuyện tình\r\n', 'Nguyễn Nhật Ánh', 6, 'NXB Trẻ', '03/2017', 20, 'Ngày Xưa Có Một Chuyện Tình \r\n\r\nĐúng như tên gọi, đây là cuốn sách về tình yêu, được viết theo một phong cách hoàn toàn khác lạ với nhà văn Nguyễn Nhật Ánh từ trước đến nay. Tác phẩm phù hợp với đông đảo đối tượng độc giả và được Nhà xuất bản Trẻ đầu tư mạnh về hình thức cũng như truyền thông, tiếp thị...Ngày xưa có một chuyện tình là một câu chuyện cảm động khi người ta yêu nhau, nỗi khát khao một hạnh phúc êm đềm ấm áp đến thế; hay đơn giản chỉ là chuyện ba người - anh, em, và người ấy...? Khi', 79000, 79000, 0, 'vh6.jpg', 1),
(47, 1, 'Ngồi khóc trên cây\r\n', 'Nguyễn Nhật Ánh', 6, 'NXB Trẻ', '08/2017', 100, 'Ngồi Khóc Trên Cây (Tái Bản 2017)\r\n\r\nMở đầu là kỳ nghỉ hè tại một ngôi làng thơ mộng ven sông với nhân vật là những đứa trẻ mới lớn có vô vàn trò chơi đơn sơ hấp dẫn ghi dấu mãi trong lòng. \r\n\r\nMối tình đầu trong veo của cô bé Rùa và chàng sinh viên quê học ở thành phố có giống tình đầu của bạn thời đi học? Và cái cách họ thương nhau giấu giếm, không dám làm nhau buồn, khát khao hạnh phúc đến nghẹt thở có phải là câu chuyện chính?\r\n\r\n“Nồng nàn lên với\r\n\r\nCốc rượu trên tay \r\n\r\nXanh xanh lên với\r\n', 69000, 69000, 0, 'vh7.jpg', 0),
(48, 1, 'Điều vĩ đại đời thường', 'Robin Sharma', 6, 'NXB Trẻ', '10/2013', 25, 'Điều Vĩ Đại Đời Thường (Đổi Bài Mới)\r\n\r\nHành trình trở nên vĩ đại khởi đầu từ những điều thật giản dị và gần gũi, cũng giống như hành trình vạn dặm khởi đầu từ một bước chân giản đơn. 101 câu chuyện và ý tưởng của tác giả trong quyển sách này chính là 101 bài học minh chứng cho triết lý đơn sơ ấy.\r\nKhông có cuộc sống nào là hoàn hảo, tất cả chúng ta phải đối mặt với nhiều thử thách, từ đơn giản đến nghiêm trọng… Nhưng chúng ta đều có quyền lựa chọn vượt lên mọi nghịch cảnh để vươn tới vị trí cao', 59000, 65000, 0, 'vh8.jpg', 0),
(49, 1, 'Tuổi 20 tôi đã sống như một bông hoa dại', 'Trang XTD', 6, 'NXB Trẻ', '02/2017', 120, 'Tác giả, một cô gái đang trong độ tuổi 20, đang nói hộ chúng ta rất nhiều điều ta không diễn đạt được bằng lời.\r\n\r\n\"Bố mẹ không hỏi các con đi học vui không, chỉ hỏi điểm cao Bố mẹ không hỏi đi làm vui không, mệt không, chỉ hỏi lương cao không, công ty to không. Kết hôn không hỏi có yêu nhau không, mà hỏi có hợp năm tuổi không, chúc mừng sale-off tuổi xuân thành công. Ly dị không ai hỏi vì sao không sống cùng nhau nữa, chỉ hỏi định nhìn mặt mẹ cha xóm giềng thế nào. Đâu phải đến lúc đi làm bạn m', 79000, 99000, 25, 'vh9.jpg', 0),
(50, 1, 'Tôi tự học\r\n', 'Thu Giang , Nguyễn Duy Cần', 4, 'NXB Trẻ', '03/2017', 30, 'Tôi Tự Học\r\n\r\nSách “Tôi tự học” của tác giả Nguyễn Duy Cần đề cập đến khái niệm, mục đích của học vấn đối với con người đồng thời nêu lên một số phương pháp học tập đúng đắn và hiệu quả. Tác giả cho rằng giá trị của học vấn nằm ở sự lĩnh hội và mở mang tri thức của con người chứ không đơn thuần thể hiện trên bằng cấp. Trong xã hội ngày nay, không ít người quên đi ý nghĩa đích thực của học vấn, biến việc học của mình thành công cụ để kiếm tiền nhưng thực ra nó chỉ là phương tiện để  đưa con người', 79000, 99000, 25, 'tl7.jpg', 1),
(51, 1, 'Gánh nhẹ ưu phiền\r\n', 'Như Nhiên Thích Tánh Tuệ', 4, 'NXB Văn hóa - Văn nghệ', 'năm 2019', 30, 'Nhẹ gánh ưu phiền là quyển sách thứ hai của tác giả Như Nhiên Thích Tánh Tuệ sau An nhiên giữa những thăng trầm. Với mong muốn tiếp tục góp thêm một đầu sách giúp quý độc giả vơi nhẹ gánh ưu phiền, tận hưởng niềm hạnh phúc, an lạc ngay trong từng hơi thở, tác giả tiếp tục tập hợp các bài văn, bài thơ vào cuốn sách thứ hai này nhằm truyền tải thông điệp chính: hạnh phúc không ở đâu xa xôi, hạnh phúc đang ở đây, ngay lúc này. Điều quan trọng là đôi mắt bạn có nhìn ra, trái tim bạn có cảm nhận được', 79000, 99000, 25, 'tl5.jpg', 0),
(52, 1, 'Ngôn ngữ cơ thể', 'Jame Borg', 4, 'NXB Tổng Hợp TPHCM', '02/2017', 35, 'Ngôn Ngữ Cơ Thể - 7 Bài Học Đơn Giản Để Làm Chủ Ngôn Ngữ Không Lời\r\n\r\nHơn một nửa thông điệp trong quá trình giao tiếp được chuyển tải thông qua cơ thể, nhưng trong số chúng ta, liệu có bao nhiêu người biết cách sử dụng ngôn ngữ cơ thể và, quan trọng hơn, sử dụng nó một cách hiệu quả?\r\n\r\nNgôn ngữ cơ thể có ảnh hưởng và sức tác động vô cùng to lớn. Dù bạn muốn thuyết phục người khác, muốn giải thích ý tưởng của mình hay hiểu được suy nghĩ của họ, ngôn ngữ cơ thể đều đóng vai trò then chốt trong m', 92000, 115000, 20, 'tl6.jpg', 0),
(53, 1, 'Cô gái đến từ hôm qua\r\n', 'Nguyễn Nhật Ánh', 6, 'NXB Trẻ', 'năm 2017', 120, 'Cô Gái Đến Từ Hôm Qua\r\n\r\nCô gái đến từ hôm qua được ví như một cuốn phim của quá khứ và hiện tại được ngòi bút tài hoa của tác giả dẫn dắt ta đi từ bất ngờ này đến thú vị khác. Nếu ngày xưa còn bé, Thư luôn tự hào mình là cậu con trai thông minh có quyền bắt nạt và sai khiến các cô bé cùng lứa tuổi (nạn nhân cụ thể là bé Tiểu Li) thì giờ đây lớn lên, anh luôn khổ sở khi thấy mình ngu ngơ và bị một cô bạn tên là Việt Án “xỏ mũi”. Và điều nghịch lý ấy xem ra ngày càng “trớ trêu” hơn… Trong lần tái', 99000, 99000, 0, 'vh10.jpg', 0),
(54, 2, 'Bút chì bấm', '', 7, '', '', 120, '', 25000, 30000, 5, 'vpp1.jpg', 0),
(55, 2, 'Bút xóa kéo', '', 7, '', '', 230, '', 25000, 30000, 5, 'vpp2.jpg', 0),
(56, 1, 'Giấy note', '', 7, '', '', 152, '', 20000, 23000, 5, 'vpp3.jpg', 0),
(57, 2, 'Bút dạ quang', '', 7, '', '', 324, '', 5900, 7000, 10, 'vpp4.jpg', 0),
(58, 2, 'Bút lông bảng màu xanh', '', 7, '', '', 754, '', 8500, 9500, 5, 'vpp5.jpg', 0),
(59, 2, 'Bút Chì Khúc', '', 7, '', '', 521, '', 4500, 5000, 5, 'vpp6.jpg', 0),
(60, 5, 'Bóp vải', '', 7, '', '', 126, '', 45000, 50000, 15, 'vpp7.jpg', 0),
(61, 1, 'Sổ Kẻ Ngang 200 Trang', '', 7, '', '', 850, '', 35000, 39000, 10, 'vpp8.jpg', 0),
(62, 2, 'Bút Lông Bảng Màu Đỏ', '', 7, '', '', 302, '', 8500, 9500, 5, 'vpp9.jpg', 0),
(63, 2, 'Kéo', '', 7, '', '', 345, '', 22500, 25000, 10, 'vpp10.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `MATK` int(11) NOT NULL,
  `MANV` int(11) DEFAULT NULL,
  `MALOAITK` int(11) DEFAULT NULL,
  `MAKH` int(11) DEFAULT NULL,
  `TENTK` varchar(50) CHARACTER SET utf8 NOT NULL,
  `MATKHAU` varchar(100) CHARACTER SET utf8 NOT NULL,
  `MADAILI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`MATK`, `MANV`, `MALOAITK`, `MAKH`, `TENTK`, `MATKHAU`, `MADAILI`) VALUES
(1, NULL, 2, NULL, 'admin', '123', 0),
(10, NULL, 3, NULL, 'minh', '789', 0),
(11, NULL, 4, NULL, 'BEAUTY BOX', 'bbox', 0),
(12, NULL, 1, NULL, 'jun', '147', 0),
(14, NULL, 2, NULL, 'mt', '258', 0),
(19, NULL, 2, NULL, 'Phạm Thụy Minh', '369', 0),
(29, NULL, 3, NULL, 'LING NGUYỄN', '753', 0),
(30, NULL, 3, NULL, 'BI GIVENCHY', '842', 0),
(31, NULL, 4, NULL, 'okm', '268', 0),
(34, NULL, 4, NULL, 'Fresh Life ', '426', 0),
(37, NULL, 1, NULL, 'jun.trinh24@gmail.com', '123', 0),
(39, NULL, 3, NULL, 'tichhan98@gmail.com', '123', 0),
(40, NULL, 4, NULL, 'tichhan98@gmail.com', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tinhtp`
--

CREATE TABLE `tbl_tinhtp` (
  `MATINHTP` int(11) NOT NULL,
  `MAKHUVUC` int(11) DEFAULT NULL,
  `TENTINHTP` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tinhtp`
--

INSERT INTO `tbl_tinhtp` (`MATINHTP`, `MAKHUVUC`, `TENTINHTP`) VALUES
(1, 2, 'An Giang'),
(2, 2, 'Bà Rịa - Vũng Tàu'),
(3, 1, 'Bắc Giang'),
(4, 1, 'Bắc Kạn'),
(5, 2, 'Bạc Liêu'),
(6, 1, 'Bắc Ninh'),
(7, 2, 'Bến Tre'),
(8, 2, 'Bình Định'),
(9, 2, 'Bình Dương'),
(10, 2, 'Bình Phước'),
(11, 2, 'Bình Thuận'),
(12, 2, 'Cà Mau'),
(13, 1, 'Cao Bằng'),
(14, 2, 'Đắk Lắk'),
(15, 2, 'Đắk Nông'),
(16, 1, 'Điện Biên'),
(17, 2, 'Đồng Nai'),
(18, 2, 'Đồng Tháp'),
(19, 2, 'Gia Lai'),
(20, 1, 'Hà Giang	'),
(21, 1, 'Hà Nam'),
(22, 1, 'Hà Tĩnh'),
(23, 1, 'Hải Dương'),
(24, 2, 'Hậu Giang'),
(25, 1, 'Hòa Bình'),
(26, 1, 'Hưng Yên'),
(27, 2, 'Khánh Hòa'),
(28, 2, 'Kiên Giang'),
(29, 2, 'Kon Tum'),
(30, 1, 'Lai Châu'),
(31, 2, 'Lâm Đồng'),
(32, 1, 'Lạng Sơn'),
(33, 1, 'Lào Cai'),
(34, 2, 'Long An'),
(35, 2, 'Nam Định'),
(36, 1, 'Nghệ An'),
(37, 1, 'Ninh Bình'),
(38, 2, 'Ninh Thuận'),
(39, 1, 'Phú Thọ'),
(40, 1, 'Quảng Bình'),
(41, 2, 'Quảng Nam'),
(42, 2, 'Quảng Ngãi'),
(43, 1, 'Quảng Ninh'),
(44, 2, 'Quảng Trị'),
(45, 2, 'Sóc Trăng'),
(46, 1, 'Sơn La'),
(47, 2, 'Tây Ninh'),
(48, 1, 'Thái Bình'),
(49, 1, 'Thái Nguyên'),
(50, 1, 'Thanh Hóa'),
(51, 2, 'Thừa Thiên Huế'),
(52, 2, 'Tiền Giang'),
(53, 2, 'Trà Vinh'),
(54, 1, 'Tuyên Quang'),
(55, 2, 'Vĩnh Long'),
(56, 1, 'Vĩnh Phúc'),
(57, 1, 'Yên Bái'),
(58, 1, 'Phú Yên	'),
(59, 2, 'Cần Thơ'),
(60, 2, 'Đà Nẵng'),
(61, 1, 'Hải Phòng'),
(62, 1, 'Hà Nội'),
(63, 2, 'TP HCM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ctdonhang`
--
ALTER TABLE `tbl_ctdonhang`
  ADD PRIMARY KEY (`masp`,`madh`),
  ADD KEY `FK_RELATIONSHIP_12` (`madh`);

--
-- Indexes for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`MADH`),
  ADD KEY `FK_RELATIONSHIP_13` (`MANV`),
  ADD KEY `FK_RELATIONSHIP_15` (`MAKH`);

--
-- Indexes for table `tbl_donvitinh`
--
ALTER TABLE `tbl_donvitinh`
  ADD PRIMARY KEY (`MADVT`);

--
-- Indexes for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`MAKH`),
  ADD KEY `FK_RELATIONSHIP_8` (`MATK`);

--
-- Indexes for table `tbl_khuvuc`
--
ALTER TABLE `tbl_khuvuc`
  ADD PRIMARY KEY (`MAKHUVUC`);

--
-- Indexes for table `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  ADD PRIMARY KEY (`maloaisp`);

--
-- Indexes for table `tbl_loaitaikhoan`
--
ALTER TABLE `tbl_loaitaikhoan`
  ADD PRIMARY KEY (`MALOAITK`);

--
-- Indexes for table `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`MANV`),
  ADD KEY `FK_RELATIONSHIP_6` (`MATK`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`MATK`),
  ADD KEY `FK_RELATIONSHIP_4` (`MALOAITK`),
  ADD KEY `FK_RELATIONSHIP_5` (`MANV`),
  ADD KEY `FK_RELATIONSHIP_7` (`MAKH`),
  ADD KEY `MADAILI` (`MADAILI`);

--
-- Indexes for table `tbl_tinhtp`
--
ALTER TABLE `tbl_tinhtp`
  ADD PRIMARY KEY (`MATINHTP`),
  ADD KEY `FK_RELATIONSHIP_2` (`MAKHUVUC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `MADH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_donvitinh`
--
ALTER TABLE `tbl_donvitinh`
  MODIFY `MADVT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `MAKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_khuvuc`
--
ALTER TABLE `tbl_khuvuc`
  MODIFY `MAKHUVUC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_loaitaikhoan`
--
ALTER TABLE `tbl_loaitaikhoan`
  MODIFY `MALOAITK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `MANV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  MODIFY `MATK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_tinhtp`
--
ALTER TABLE `tbl_tinhtp`
  MODIFY `MATINHTP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`MANV`) REFERENCES `tbl_nhanvien` (`MANV`),
  ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`MAKH`) REFERENCES `tbl_khachhang` (`MAKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
