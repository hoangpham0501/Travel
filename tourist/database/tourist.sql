-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 03:49 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_user`, `username`, `id_post`, `content`) VALUES
(3, 3, 'hoangpham', 6, 'ahihi'),
(11, 3, 'hoangpham', 1, 'Đẹp quá :3 Hè này nhất định phải đến đây mới được'),
(12, 4, 'thinhdinh', 1, 'Đà Lạt của miền Trung. Mọi người nên đến đây 1 lần ');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `ID` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` text NOT NULL,
  `category` text CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` text NOT NULL,
  `time_open` text NOT NULL,
  `quality` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`ID`, `name`, `address`, `image`, `category`, `description`, `city`, `phone`, `time_open`, `quality`) VALUES
(1, 'Bà Nà Hills Mountain Resort', 'An Sơn, Hoà Ninh, Hòa Vang', 'bana.jpg', 'Khu nghỉ dưỡng', 'Không gian thiên nhiên với nhiều tầng địa thế đưa bạn đến từ ngạc nhiên này đến ngạc nhiên khác\r\nLà điểm dừng chân lý tưởng cho việc ăn chơi, nghỉ dưỡng, du lịch, tham quan...', 'DN', '(0236) 3 791 999 - (0236) 3 749 888', '12:00 AM - 11:30 PM', 9.1),
(2, 'Khu Vui Chơi Fantasy Park  - Bà Nà Hills', 'Bà Nà Hills, Hòa Vang', 'fantasy-park.jpg', 'Công viên vui chơi', 'Được xem là khu vui chơi lớn nhất ở Đà Nẵng với không gian gồm 3 tầng\r\nĐáp ưng như cầu vui chơi giải trí của mọi lứa tuổi với những trò chơi đẳng cấp thế giới\r\nKhu vực ẩm thực phục vụ đủ các món ăn Âu - Á', 'DN', '(0236) 3 791 426', '08:30 AM - 05:00 PM', 9.3),
(3, 'Giếng Trời - Khám Phá Rừng Nguyên Sinh', 'Rừng Nguyên Sinh Phía Tây Đà Nẵng, Hòa Vang', 'giengtroi.jpg', 'Du lịch sinh thái', '\r\n    Một không gian thiên đẹp vẫn giữ được những nét hoang sơ của thiên nhiên ban tặng\r\n    Được mặc sức với những trải nghiệm thú vị, khám phá bản thân\r\n    Là địa điểm du lịch bụi cho những ai thích khám phá thiên nhiên\r\n', 'DN', '', '', 6.7),
(4, 'Khu Du Lịch Hòa Phú Thành', 'Km 20 ĐT 604, Hòa Phú, Hòa Vang', 'hoaphuthanh.jpg', 'Du lịch sinh thái', 'Khu du lịch Hòa Phú Thành được chia thành nhiều khu vực với mỗi khu mang một bản sắc, một phong cách, một bản sắc riêng\r\n    Phục vụ các nhu cầu tham quan, nghỉ dưỡng vui chơi cho mọi du khách ở mọi lứa tuổi khác nhau\r\n    Ngoài ra là hệ thống nghỉ dưỡng sinh thái đầy đủ tiện nghi còn có các hoạt động dã ngoại nơi rừng núi hoang sơ chắc chắn sẽ làm vừa lòng các bạn trẻ thích khám phá\r\n', 'DN', '', '07:30 AM - 05:00 PM', 7.8),
(5, 'Khu Du Lịch Sinh Thái Suối Hoa', 'Phú Túc, Hoà Phú, Hòa Vang', 'suoihoa.jpg', 'Du lịch sinh thái', '\r\n    Đến với Suối Hoa ở Đà Nẵng, bạn sẽ có những giây phút thư giản khó quên cùng các hoạt động vui chơi giải trí tại Suối Hoa\r\n    Với khu du lịch suối hoa tại Đà Nẵng, du khách sẽ được thưởng thức những món ăn dân dã mang đầy hương vị của vùng núi rừng như: măng Điền Trúc trộn mè, Ốc suối xào sả ớt, cơm lam muối mè, rau Zớn rừng, gà đồng, thịt heo lai rừng nướng chấm muối ớt xanh…\r\n    Được tham gia vào các trò chơi dân gian, câu cá, cỡi ngựa… Vào ban đêm thỉnh thoảng có tổ chức các chương trình lửa trại, kết hợp với múa lễ hội của dân tộc CơTu và uống rượu tà vạt…\r\n', 'DN', '', '08:00 AM - 05:00 PM', 6.7),
(6, 'Biển Đông Resort', 'Bãi Trẹm, P. Thọ Quang, Quận Sơn Trà', 'biendongresort.jpg', 'Khu nghỉ dưỡng', '\r\n    Có không gian hướng biển, khung cảnh thiên nhiên\r\n    Thực đơn với nhiều món ăn hấp dẫn, đa phần là về các món ẩm thực vùng miền, hải sản, các món Á, Âu\r\n    Phục vụ chuyện nghiệp, chu đáo, thích hợp cho việc thư giãn, nghĩ dưỡng của du khách\r\n', 'DN', '(0236) 3 924 464', '07:00 AM - 11:00 PM', 6.7),
(8, 'Ngũ Hành Sơn', 'P. Hòa Hải, Quận Ngũ Hành Sơn', 'nguhanhson.jpg', 'Du lịch sinh thái', '\r\n    Là tên chung của một danh thắng gồm 5 ngọn núi đá vôi nhô lên trên một bãi cát ven biển: Kim, Mộc, Thủy, Hỏa, Thổ\r\n    Tên Ngũ Hành Sơn xuất hiện lần đầu năm 1806\r\n    Thủy Sơn có các cơ sở điêu khắc đá mỹ nghệ phát triển từ các làng nghề có tuổi đời trên 400 năm\r\n    Là sự đan xen của hệ thống hang động kỳ ảo cùng quần thể chùa chiền cổ kính\r\n    Được Bộ Văn hóa, Thể thao và Du lịch công nhận là di tích Lịch sử Văn hóa cấp Quốc gia năm 1990\r\n', 'DN', '', '07:00 AM - 07:00 PM', 7.8),
(10, 'Công Viên Cá Koi Rin Rin Park - Vườn Nhật Bản', 'Trần Văn Mười, Hóc Môn', 'congvien_cacoi.jpg', 'Du lịch sinh thái', '\r\n    Vườn Nhật Bản là địa chỉ tham quan mới cho nhu cầu du lịch xanh của người dân thành phố\r\n    Công viên được thiết kế hài hòa với cỏ cây, đá và nước mang đậm nét văn hóa đặc trưng của các khu vườn Nhật Bản truyền thống\r\n', 'HCM', '(08) 3590 1959-(08) 3590 1958 ', '08:00 AM - 07:00 PM', 6.7),
(11, 'Công Viên Văn Hóa Đầm Sen', '3 Hòa Bình, P. 13, Quận 11', 'damsen.jpg', 'Công viên vui chơi', '\r\n    Công viên Văn hóa Đầm Sen là một trong những công viên lớn và hiện đại nhất cả nước\r\n    Có rất nhiều trò chơi và thắng cảnh cho du khách vui chơi, thư giãn\r\n    Có khu ăn uống, nhà hàng để phục vụ du khách ẩm thực 3 miền\r\n', 'HCM', '', '08:00 AM - 08:00 PM', 7),
(12, 'Khu Du Lịch Văn Hóa Suối Tiên', '120 Xa Lộ Hà Nội, Quận 9', 'suoitien.jpg', 'Công viên vui chơi', '\r\n    Suối Tiên là một trong những địa điểm vui chơi giải trí cuối tuần nổi tiếng\r\n    Các công trình lịch sử, văn hóa, vui chơi, giải trí: biển Tiên Đồng, Thiên Thủy, Bồng Lai, biển nhân tạo\r\n    Khu ăn uống, nhà hàng phục vụ các món ăn 3 miền\r\n', 'HCM', '', '', 7.2),
(13, 'The BCR - Khu Giải Trí & Ẩm Thực', 'KDC Trường Thạnh, Đường Tam Đa, P. Trường Thạnh, Quận 9', 'thebcr.jpg', 'Du lịch sinh thái', '\r\n    Khuôn viên nơi lý tưởng để tổ chức tiệc cưới, sinh nhật,tiệc công ty, lễ tổng kết, họp mặt gia đình, tất niên\r\n    Món ăn đậm chất Nam Bộ như: tôm càng nướng, cá nướng, sườn nướng, gỏi bò, ba khía…các món rau xanh\r\n    Thể thao hấp dẫn như câu cá, đua thuyền, cano, cáp treo, bắn súng sơn, tennis, bóng đá ...\r\n', 'HCM', '0943 934 373 - 0946 664 616 - 0974 802 877 ', '09:00 AM - 09:00 PM', 6.6),
(14, 'Khu Vui Chơi Thỏ Trắng - Công Viên Lê Thị Riêng', '875 Cách Mạng Tháng 8, P. 15, Quận 10', 'congvien_lethirieng.jpg', 'Công viên vui chơi', '\r\n    Khu vui chơi phức hợp với nhiều trò chơi thú vị, quán cafe và khu ẩm thực.\r\n    Rất thích hợp để giải tỏa stress, họp nhóm, hẹn hò.\r\n    Khu ẩm thực đa dạng món ăn, giá cả hợp lý, phục vụ nhanh.\r\n', 'HCM', '', '08:00 AM - 10:00 PM', 7),
(15, 'Tháp Ngà - Ẩm Thực Sinh Thái Bình Xuyên 2', '168 Nguyễn Hữu Thọ, P. Phước Kiểng, Nhà Bè', 'thapnga.jpg', 'Du lịch sinh thái', '\r\n    Không gian rộng rãi, thoáng mát thích hợp để thư giãn cùng gia đình, bạn bè\r\n    Tham gia nhiều trò chơi, dịch vụ câu cá giải trí\r\n    Thưởng thức những món ăn ngon, hấp dẫn\r\n', 'HCM', '(08) 62 712 712 ', '07:00 AM - 09:00 PM', 7.3),
(16, 'Khu Du Lịch Sinh Thái Ao Vua', 'Tản Lĩnh, Ba Vì', 'aovua.jpg', 'Du lịch sinh thái', '\r\n    Tại Ao Vua, du khách được leo núi, vượt thác, công viên nước, chèo thuyền\r\n    Thưởng thức các món ăn đặc sản của núi rừng\r\n    Khách sạn 3 sao tiêu chuẩn quốc tế, gồm 101 phòng\r\n', 'HN', '(04) 3388 1020 ', '08:00 AM - 09:00 PM', 7.6),
(17, 'Khu Du Lịch Thiên Đường Bảo Sơn', 'Km8 Đại Lộ Thăng long, An Khánh, Hoài Đức', 'thienduongbaoson.jpg', 'Công viên vui chơi', '\r\n    Thiên đường Bảo Sơn là công viên giải trí và du lịch văn hoá hiện đại, với khuôn viên rộng 20ha có một diện tích lớn để xây dựng khu vui chơi giải trí phục vụ nhu cầu vui chơi của quý khách ở mọi lứa tuổi\r\n    Điểm nhấn của Thiên đường Bảo Sơn chính là Khu bảo tồn Thiên nhiên:  Khu Thủy Cung – Một đại dương thu nhỏ với 2 ngọn núi nhân tạo lấy từ sự tích hòn trống mái điển hình Việt Nam\r\n', 'HN', '0975 927 482 - 0985 355 861', '07:00 AM - 09:30 PM', 6.2),
(18, 'Khu Du Lịch Sinh Thái Đầm Long', 'Cẩm Lĩnh, Ba Vì', 'damlong.jpg', 'Du lịch sinh thái', '\r\n    Trò chơi: Tàu lượn vượt thác, xe đạp đôi, cầu lông, bóng rổ, bóng chuyền, tennis, tắm hơi, massage, bấm huyệt\r\n    Thưởng thức nhiều món ăn đặc sắc khai thác từ ao, hồ, đầm\r\n    Hệ sinh thái tự nhiên bao quanh hơn 20 ha khu du lịch sinh thái Đầm Long\r\n', 'HN', '(04) 3362 1588 ', '08:00 AM - 09:00 PM', 6.6),
(19, 'Khu Du Lịch Suối Voi', 'Lộc Tiễn, Phú Lộc, Phú Lộc', 'suoivoi.jpg', 'Du lịch sinh thái', '\r\n    Khu Suối Voi là một quần thể có nhiều đoạn suối đá đẹp, nằm ven cánh rừng đại ngàn với phong cảnh rất hữu tình\r\n    Với những hồ nước trong xanh bạn có thể thỏa mái đám mình vào cùng thiên nhiên\r\n    Thích hợp cho việc nghỉ dưỡng, du lịch, khám phá...\r\n', 'HUE', '0903 754 221 ', '08:00 AM - 05:00 PM', 7.8),
(20, 'Lăng Cô Beach Resort', 'Quốc Lộ 1A, Phú Lộc', 'langcoresort.jpg', 'Khu nghỉ dưỡng', '\r\n    Nằm ở vịnh Lăng Cô - một trong những vịnh đẹp nhất thế giới có khung cảnh tuyệt đẹp\r\n    Gồm 84 phòng với hệ thống phòng rộng cùng ban công, góc nhìn hướng ra biển\r\n    Resort với đầy đủ các dịch vụ, tiện nghi sẽ đem lại giây phút thư giãn thoải mái cho bạn\r\n    Đội ngũ nhân viên phục vụ chuyên nghiệp, chu đáo\r\n', 'HUE', '(054) 3 873 555 ', '5:00 AM - 00:00 AM', 7.8),
(21, 'Thiền Viện Trúc Lâm Bạch Mã', 'Hồ Truồi, Xã Lộc Hòa, Phú Lộc', 'truclam.jpg', 'Chùa và Nhà thờ', '\r\n    Tọa lạc tại núi Bạch Mã. khu vực hồ Truồi, xã lộc Hòa, Huế\r\n    Là một quần thể danh lam là đại chỉ tham quan của mọi du khách khi tới Huế\r\n    Đặc trưng cho chỉnh thể kiến trúc Phật Giáo và Thiền Viện\r\n', 'HUE', '', '08:00 AM - 04:00 PM', 7.8),
(22, 'Phố Cổ Hội An', 'Quảng Nam, Tp. Hội An', 'hoian.jpg', 'Thăm quan và Chụp ảnh', '\r\n    Cách thành phố Tam Kỳ 60km về phía Đông Bắc\r\n    Là trung tâm mậu dịch từ cuối thế kỉ 16\r\n    Khu phố cổ bảo tồn nguyên trạng các kiến trúc cổ từ xưa như nhà ở, hội quán, đình chùa, nhà thờ tộc, bến cảng\r\n    Là di sản văn hóa thế giới được công nhận năm 1999\r\n', 'QN', '', '8:00 AM - 11:30 PM', 8.1),
(23, 'Cù Lao Chàm', 'Thôn Bãi Lãng, Xã Tân Hiệp, Tp. Hội An', 'culaocham.jpg', 'Du lịch sinh thái', '\r\n    Địa điểm du lịch quanh năm có khí hậu mát mẻ\r\n    Hệ động thực vật phong phú đa dạng\r\n    Địa điểm nghỉ ngơi du lịch dã ngoại thú vị\r\n', 'QN', '0974 994 189 ', '05:00 AM - 10:00 PM', 7.9),
(24, 'Rừng Dừa Bảy Mẫu', 'Xã Cẩm Thanh, Tp. Hội An', 'rungdua.jpg', 'Du lịch sinh thái', '\r\n    Cách khu phố cổ Hội An chừng 5km về phía đông, rừng dừa nước ngập mặn Bảy Mẫu (thuộc địa bàn thôn 2 và 3, xã Cẩm Thanh) được bao bọc bởi sông nước.\r\n    Rừng dừa Bảy Mẫu – “một Nam Bộ trong lòng phố Hội” đồng thời cũng là di tích lịch sử nổi tiếng gắn với hai cuộc kháng chiến chống Pháp và chống Mỹ.\r\n    Điểm tham quan du lịch được du khách yêu thích.\r\n', 'QN', '', '07:00 AM - 05:00 PM', 7.9),
(25, 'Tản Đà Spa Resort', 'Tản Lĩnh, Ba Vì', 'tanda.jpg', 'Khu nghỉ dưỡng', 'Thiết kế trong không gian mở, thanh bình và yên tĩnh, một sự hòa trộn của thiên nhiên và con người, 53 phòng hiện đại, tiện nghi\nCác món ăn đặc sản núi rừng sẽ làm thực khách hài lòng\nDịch vụ chuyên nghiệp, phục vụ chu đáo', 'HN', ' (04) 33 880 195', '07:00 AM - 10:00 PM', 6.8),
(27, 'bãi cát vàng', '', 'baicatvang.jpg', 'Khu nghỉ dưỡng', '', 'DN', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(3, 'hoangpham', 'fcea920f7412b5da7be0cf42b8c93759', 'admin'),
(4, 'thinhdinh', '25d55ad283aa400af464c76d713c07ad', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
