-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2018 lúc 03:04 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_qllh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `MaBV` int(11) NOT NULL,
  `TenBV` text COLLATE utf8mb4_unicode_ci,
  `GioiThieuBV` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChiTietBV` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaNV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`MaBV`, `TenBV`, `GioiThieuBV`, `ChiTietBV`, `link`, `MaNV`) VALUES
(1, 'Tóc nam MOHICAN', 'Nếu bạn là một người ưa thích sự phá cách trong thời trang và liên tục muốn làm mới phong cách của mình, thì Mohican chính là kiểu đầu hoàn hảo dành cho bạn. Trên thế giới không thiếu gì những ngôi sao nam tỏ ra “mê mẩn” Mohican như David Beckham, Justin Bieber, ZaynMalik…Nhưng riêng với ZaynMalick, kiểu đầu này dường như đã trở thành một thương hiệu đặc trưng khiến bao trái tim fan nữ phải thổn thức bởi nét trẻ trung, phá cách đầy cá tính nhưng vẫn mang vẻ lịch lãm đầy cuốn hút...', 'Tóc nam MOHICAN\r\nNếu bạn là một người ưa thích sự phá cách trong thời trang và liên tục muốn làm mới phong cách của mình, thì Mohican chính là kiểu đầu hoàn hảo dành cho bạn. Trên thế giới không thiếu gì những ngôi sao nam tỏ ra “mê mẩn” Mohican như David Beckham, Justin Bieber, ZaynMalik…Nhưng riêng với ZaynMalick, kiểu đầu này dường như đã trở thành một thương hiệu đặc trưng khiến bao trái tim fan nữ phải thổn thức bởi nét trẻ trung, phá cách đầy cá tính nhưng vẫn mang vẻ lịch lãm đầy cuốn hút.Đây là kiểu đầu cạo hai bên mai với phần tóc ở giữa được để dài rồi vuốt gel hoặc wax. Thoạt nghe, chắc chắn bạn sẽ liên tưởng nó giống với kiểu Undercut đình đám hay Pompadour thời thượng,… Tuy nhiên, điểm khác biệt rõ nét nhất ở Mohican có lẽ là ở chỏm tóc dài hơn hẳn được vuốt chụm lại một cách khéo léo. Bên cạnh đó, tóc hai bên được cạo với độ dày một cách tự nhiên, càng lên cao từng lớp tóc càng dài hơn so với phần gáy.Để có được kiểu tóc Mohican thời thượng, bạn hãy chọn một salon tóc có thể cắt tạo kiểu này thật hoàn chỉnh, việc thực hiện kiểu tóc này như sau :\r\nBước 1: Trước khi cắt kiểu Mohican, bạn cần đảm bảo chiều dài tóc tối thiểu đạt từ 5 đến 10 cm. Sau đó, thợ cắt tóc sẽ tiến hành rẽ ngôi để chia tóc thành hai phần với tỷ lệ là 2/3\r\nBước 2: Cắt tóc ở hai bên theo từng lớp từ dưới lên trên một cách cẩn thận, lớp chồng lớp cho đến trên cùng, để chiều dài khoảng 1cm\r\nBước 3: Với phần tóc ở giữa sẽ được cắt với chiều dài ít nhất khoảng 5cm theo đường cong tự nhiên của đỉnh đầu\r\nBước 4: Tiến hành vuốt gel/wax cho mái tóc. Và cũng chính nhờ bước này, kiểu đầu Mohican sẽ được biến tấu linh hoạt theo nhiều kiểu khác nhau tùy thuộc vào sở thích và gu thời trang mà bạn đang theo đuổi.\r\nMohican vuốt ngược hay vuốt lệch sang một bên sẽ là gợi ý không thể hoàn hảo hơn cho các quý ông mang vẻ bề ngoài lịch lãm, sang trọng. Nó sẽ giúp bạn trở nên nổi bật tại chốn công sở, hoặc thậm chí ở những bữa tiệc hay các cuộc họp mang tính chất nghiêm túc. Một chiếc áo sơ mi nhã nhặn kết hợp với quần tây chắc chắn mang lại cho bạn phong thái “hút hồn” hơn bao giờ hết.', 'tocdep2.jpg', 'AD'),
(2, 'Tóc nam SIDE PART', 'Mẫu tóc nam Side part đã có lịch sử từ rất lâu khoảng thời thế chiến thứ 2, vào thời kì đó rất nhiều người đàn ông đã để kiểu tóc này và nó đã trở thành một kiểu tóc rất phổ biến vào lúc đó như sự thống trị của Undercut ngày nay. Điều khác biệt ở thời kì bấy giờ đó là, không phải ai cũng để được kiểu tóc này. Nó đại diện cho tầng lớp thượng lưu, những doanh nhân giàu có hay những vị tướng đang phục vụ cho quân đội quốc gia, kiểu tóc là đại diện cho quyền lực, sự mạnh mẽ nam tính cũng như sự lịch lãm và tất cả những điều mà một người đàn ông thực thụ cần có...', 'Tóc nam SIDE PART\r\nMẫu tóc nam Side part đã có lịch sử từ rất lâu khoảng thời thế chiến thứ 2, vào thời kì đó rất nhiều người đàn ông đã để kiểu tóc này và nó đã trở thành một kiểu tóc rất phổ biến vào lúc đó như sự thống trị của Undercut ngày nay.\r\nĐiều khác biệt ở thời kì bấy giờ đó là, không phải ai cũng để được kiểu tóc này. Nó đại diện cho tầng lớp thượng lưu, những doanh nhân giàu có hay những vị tướng đang phục vụ cho quân đội quốc gia, kiểu tóc là đại diện cho quyền lực, sự mạnh mẽ nam tính cũng như sự lịch lãm và tất cả những điều mà một người đàn ông thực thụ cần có. Nhưng đến thời điểm này, thời kì của sự tự do không phân giai cấp thì ai ai cũng có thể lựa chọn và để kiểu tóc này miễn sao nó phù hợp với khuôn mặt dáng người cũng như phù hợp với công việc cũng như độ tuổi. Trước khi ngắm nghía những kiểu side part đẹp thì hãy cùng ad tìm hiểu xem thế nào là Side Part nhé.Mẫu tóc Side part có mấy loại?\r\nSide part có 2 dòng khác nhau bên cạnh đó còn một vài biến thể khác của kiểu tóc này nữa, đó là:\r\nSide part cổ điển:\r\nLà kiểu tóc có phần tóc xung quanh được tỉa gọn gàng nhưng không cạo trắng nhưng để hơi dài một chút khoảng 1,5cm và vuốt theo chiều ra phía sau, phần tóc phía trên được chia theo tỉ lệ 2/8 hoặc 3/7 và tạo kiểu với những lọn tóc hơi xoăn một chút ở phần mái hoặc sóng nhẹ cả đầu mang đến cho bạn một cảm giác rất “ vintage” phù hợp với những bạn ưa thích phong cách lịch lãm kiểu của các quý ông trong bộ tuxedo hoặc măng tô.\r\nSide part hiện đại:\r\nLà kiểu tóc đã được thiết kế lại bởi những barber chuyên nghiệp với những cải tiến độc đáo và mang hơi hướng hiện đại và trẻ trung hơn rất nhiều. Với phần ngôi không chia vào quá sâu như side part cổ điển nữa mà được cắt cao hơn một chút mang lại sự khỏe khoắn nhưng vẫn không kém phần thanh lịch và lịch lãm, vẫn phù hợp với những bạn đang đi học hay đã đi làm tại các cơ quan hành chính. Vì sự “đa năng” của nó mang lại giúp bạn có thể ứng dụng kiểu tóc này vào những tình huống khác nhau và các trang phục khác nhau mà không làm mất đi vẻ “đep trai phong trần” của mình.\r\nSide part 4/6 ( Phong cách tóc nam Hàn Quốc cho năm 2017 )\r\nKiểu tóc này thường có độ dài trung bình khoảng 9cm có thể chạm mắt hoặc dài qua mắt một chút, với những bạn có tóc thẳng thì các bạn cần uốn xoăn nhẹ để phá đi chất tóc thẳng của mình để đi vuốt bằng những loại wax có độ ẩm hoặc gel hì kiểu tóc sẽ trông tự nhiên và hài hòa hơn. Kiểu tóc này có phần chia khá sâu phù hợp với những bạn có khuôn mặt dài và trái xoan hoặc mặt vuông.', 'tocdep3.jpg', 'AD'),
(3, 'Tóc nam SPORT (Short Quiff)', 'Bắt đầu xuất hiện từ những năm 1950, Quiff nhanh chóng trở thành một kiểu các kiểu tóc nam đẹp ưa thích khi bạn có thể bất chấp tuổi tác, khuôn mặt hay tính cách để diện cho mình một kiểu tóc theo phong cách này. Sự đứng đắn pha trộn với nét nam tính cổ điển là những gì sẽ hằn lại ngay trong tâm trí của người đối diện bạn. Quiff nhanh chóng trở thành một kiểu các kiểu tóc nam đẹp ưa thích khi bạn có thể bất chấp tuổi tác...', 'Tóc nam SPORT\r\nBắt đầu xuất hiện từ những năm 1950, Quiff nhanh chóng trở thành một kiểu các kiểu tóc nam đẹp ưa thích khi bạn có thể bất chấp tuổi tác, khuôn mặt hay tính cách để diện cho mình một kiểu tóc theo phong cách này. Sự đứng đắn pha trộn với nét nam tính cổ điển là những gì sẽ hằn lại ngay trong tâm trí của người đối diện bạn.\r\nQuiff nhanh chóng trở thành một kiểu các kiểu tóc nam đẹp ưa thích khi bạn có thể bất chấp tuổi tác.\r\nQuiff cũng luôn có sự đa dạng về phong cách.àm thế nào để có được một kiểu tóc Quiff\r\n1. Tóc sau khi được vệ sinh sạch sẽ, sử dụng một lược chải răng, chải phần trên và mặt bên tóc theo chiều ngược lại để tóc không bị rối, bước đầu đi vào định hình nếp.\r\n2. Dùng máy sấy thổi tóc khô, cũng như bước đầu tạo độ phồng cho tóc ở phần tóc trên đỉnh đầu.\r\n3. Làm một lượng sản phẩm tạo kiểu, vuốt đều lên tóc và cố gắng giữ độ phồng cho tóc. Tạo kiểu cho đến khi ưng ý, có thể sử dụng sản phẩm xịt để cố định nếp tóc tốt hơn.', 'tocdep4.jpg', 'AD'),
(4, 'Tóc Nam UNDERCUT', 'Kiểu tóc Undercut là kiểu tóc được nhiều người ưa thích bởi nó là sự kết hợp giữa cũ và mới nhưng nó đem lại sự quyết rũ và nam tính mang trong mình với vẻ đầy cá tính được nhiều bạn gái yêu thích. Xuất hiện từ rất lâu về trước, tóc Undercut là kiểu tóc được các quý ông Mỹ ưa chuộng vào những năm 1920 và 1930. Thời gian sau đó kiểu tóc này dần bị lãng quên cho đến những năm gần đây, trào lưu tóc Undercut đã quay lại và còn “lợi hại” hơn xưa rất nhiều Undercut là kiểu tóc tỉa gọn hay cạo ở hai bên và phía sau giữ lại phần tóc mái phía trước và phần trên của đầu vẫn để dài giống như ý nghĩ của nó khi dịch ra có nghĩ là cắt phần ở dưới...', 'Tóc nam UNDERCUT\r\nKiểu tóc Undercut là kiểu tóc được nhiều người ưa thích bởi nó là sự kết hợp giữa cũ và mới nhưng nó đem lại sự quyết rũ và nam tính mang trong mình với vẻ đầy cá tính được nhiều bạn gái yêu thích.\r\nXuất hiện từ rất lâu về trước, tóc Undercut là kiểu tóc được các quý ông Mỹ ưa chuộng vào những năm 1920 và 1930. Thời gian sau đó kiểu tóc này dần bị lãng quên cho đến những năm gần đây, trào lưu tóc Undercut đã quay lại và còn “lợi hại” hơn xưa rất nhiều.\r\nUndercut là kiểu tóc tỉa gọn hay cạo ở hai bên và phía sau giữ lại phần tóc mái phía trước và phần trên của đầu vẫn để dài giống như ý nghĩ của nó khi dịch ra có nghĩ là cắt phần ở dưới.\r\nTrong vòng vài năm trở lại đây, undercut lên ngôi vì sự thoáng mát, gọn gàng, trẻ trung nhưng không kém phần sành điệu và hiện đại, và đặc biệt là nó phù hợp với mọi lứa tuổi. Đặc điểm chung của kiểu tóc này là phần tóc trên đỉnh đầu bao giờ cũng dài và nhiều hơn, còn phần tóc xung quanh đầu, từ tai trở xuống gáy được cạo ngắn hết mức có thể\r\nNó đã trở thành xu hướng mới và khiến các đấng mày râu mê mệt bởi vẻ cá tính, hấp dẫn khó cưỡng lại.\r\nĐây là kiểu tóc nam được rất nhiều người khen ngợi và ưa chuộng từ người bình thường lẫn người nổi tiếng, thậm chí là các chuyên gia, nhà tạo mẫu tóc hàng đầu trong ngành thời trang thế giới. Tuy nhiên undercut lại không phải là kiểu tóc dành cho tất cả mọi người. Bản chất undercut là kiểu tóc cắt sát phần tóc xung quanh và nuôi dài phần mái chải ngược ra sau (slick back) hoặc để mái một bên (quiff). Kiểu tóc này giúp làm thon gọn và kéo dài gương mặt, chính vì thế nó chỉ hợp với những chàng trai có gương mặt góc cạnh, mặt vuông hoặc hơi đầy đặn. Những chàng trai có gương mặt dài và ốm nên cân nhắc và cần được tư vấn khi muốn để kiểu tóc này.\r\nCách tạo kiểu với undercut\r\nBước 1: Đầu tiên, bạn hãy gội đầu sạch và tiến hành sấy sao cho đảm bảo cho tóc khô hoàn toàn, tóc còn ẩm sẽ khó tạo kiểu hơn.\r\nBước 2: Sau khi tóc bạn đã được bao phủ bởi sáp, dùng với lược chải bồng và sấy từ dưới lên tạo độ phồng cho tóc và hất ngược chân tóc từ phía mái về sau. Sau khi thực hiện xong phần sấy, cần sử dụng wax hoặc gel để giữ nếp và tạo kiểu, như thế sẽ sát cạnh và chuẩn hơn, bạn nên bôi sáp lên răng lược và tiếp tục tạo kiểu cho đến khi ưng ý.\r\nBước 3: Bước cuối cùng là bạn nên xịt thêm chút dầu dưỡng để tránh cho tóc không bị khô.\r\nHi vọng với những chia sẻ trên bạn sẽ chọn được kiểu tóc undercut phù hợp với khuôn mặt, sở thích và xu hướng thời trang hiện đại.', 'tocdep5.jpg', 'AD');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdh`
--

CREATE TABLE `chitietdh` (
  `MaDH` int(11) NOT NULL,
  `MaDV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdh`
--

INSERT INTO `chitietdh` (`MaDH`, `MaDV`) VALUES
(1, 'D1'),
(2, 'D2'),
(3, 'CB1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdv`
--

CREATE TABLE `chitietdv` (
  `MaDV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Buoc` text COLLATE utf8mb4_unicode_ci,
  `Chitietbuoc` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdv`
--

INSERT INTO `chitietdv` (`MaDV`, `Buoc`, `Chitietbuoc`) VALUES
('D1', '', 'Thay đổi phong cách của bạn với mái tóc xoăn bồng bềnh.'),
('D2', '', 'Hỗ trợ cho những bạn muốn nhuộm mái tóc sáng màu.'),
('D3', '', 'Thay đổi diện mạo với hàng trăm màu tóc thời trang với mức giá khó tin chỉ 200000. Sử dụng màu nhuộm cao cấp, tư vấn giữ màu tốt nhất.'),
('CB1', 'Bước 1: Gội xả sạch -', 'Gội sạch tóc'),
('CB1', 'Bước 2: Tư Vấn Tạo Kiểu -', 'Tư vấn tạo kiểu tận tình theo từng khuôn mặt'),
('CB1', 'Bước 3: Cắt Tóc Tạo Kiểu -', 'Bằng những đôi bàn tay khéo léo của những thợ giỏi nhất nước'),
('CB1', 'Bước 4: Cạo Mặt Êm Ái -', 'Cạo mặt êm ái giúp làn da khỏe khoắn, sáng mịn'),
('CB1', 'Bước 5: Xả Tóc -', 'Xả sạch tóc con, không lo ngứa ngáy'),
('CB1', 'Bước 6: Dưỡng tóc Tinh dầu - ', 'Giúp mái tóc mềm mại, chắc khỏe'),
('CB1', 'Bước 7:Sấy Tạo Kiểu, Vuốt Sáp, Xịt Gôm -', 'Đẹp trai lột xác ngay lập tức'),
('CB2', 'Bước 1: Massage chân muối Himalaya -', 'Cải thiện sức khỏe'),
('CB2', 'Bước 2: Rửa mặt -', 'Tút lại vẻ đẹp trai của bạn'),
('CB2', 'Bước 3: Đắp Mặt Nạ Dưỡng Da, Sạch Mụn - ', 'Mặt nạ tinh chất than hoạt tính giúp sạch sâu từng lỗ chân lông'),
('CB2', 'Bước 4: Gội đầu bấm huyệt - ', 'Một cảm giác sảng khoái nhất mà bạn từng biết đến'),
('CB2', 'Bước 5: Massage Thư Giãn Da Mặt, Vai Gáy - ', 'Cảm nhận sự thư thái từ đôi bàn tay mướt mịn của các Spa Girl'),
('CB2', 'Bước 6: Chăm sóc da mặt bằng công nghệ cao - ', 'Hút sạch bã nhờn, mụn đầu đen, xịt khoáng chất'),
('CB2', 'Bước 7: Massage Vitamin E & Đá cẩm thạch -', ' Trắng da, mờ nếp nhăn'),
('CB2', 'Bước 8: Tư Vấn Tạo Kiểu - ', 'Tư vấn tạo kiểu tận tình theo từng khuôn mặt'),
('CB2', 'Bước 9: Cắt Tóc Tạo Kiểu - ', 'Bằng những đôi bàn tay khéo léo của những thợ giỏi nhất nước'),
('CB2', 'Bước 10: Cạo Mặt Êm Ái - ', 'Cạo mặt êm ái giúp làn da khỏe khoắn, sáng ngời'),
('CB2', 'Bước 11: Xả Tóc - ', 'Xả sạch tóc con, không lo ngứa ngáy'),
('CB2', 'Bước 12: Sấy Tạo Kiểu, Vuốt Sáp, Xịt Gôm -', 'Đẹp trai lột xác ngay lập tức');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `MaDV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenDV` text COLLATE utf8mb4_unicode_ci,
  `Gia` int(11) DEFAULT NULL,
  `HoatDong` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`MaDV`, `TenDV`, `Gia`, `HoatDong`) VALUES
('CB1', 'Combo cắt 7 bước', 70000, 1),
('CB2', 'Combo cắt 12 bước', 100000, 1),
('D1', 'Uốn Xoăn', 250000, 1),
('D2', 'Tẩy màu tóc', 100000, 1),
('D3', 'Nhuộm tóc', 200000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int(11) NOT NULL,
  `SDTKH` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoatDong` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`MaDH`, `SDTKH`, `HoatDong`) VALUES
(1, '0965637450', 1),
(2, '0325387474', 1),
(3, '0987418737', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `SDTKH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKH` text COLLATE utf8mb4_unicode_ci,
  `DiaChi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`SDTKH`, `TenKH`, `DiaChi`) VALUES
('0325387474', 'Trần Văn Duy', 'Cầu Giấy-Hà Nội'),
('0965637450', 'Nguyễn Xuân Trường', 'Thanh Xuân-Hà Nội'),
('0986876590', 'Lê Ngọc Hiếu', 'Mỹ Đình-Hà Nội'),
('0987418737', 'Nguyễn Quang Linh', 'Hoàng Mai-Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichhen`
--

CREATE TABLE `lichhen` (
  `GioHen` time NOT NULL,
  `NgayHen` date NOT NULL,
  `MaNV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDTKH` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichhen`
--

INSERT INTO `lichhen` (`GioHen`, `NgayHen`, `MaNV`, `SDTKH`, `TrangThai`) VALUES
('09:00:00', '0000-00-00', 'NV01', '0965637450', 0),
('10:00:00', '0000-00-00', 'NV02', '0325387474', 1),
('09:30:00', '0000-00-00', 'NV03', '0987418737', -1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNV` text COLLATE utf8mb4_unicode_ci,
  `SDTNV` text COLLATE utf8mb4_unicode_ci,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ChucVu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HoatDong` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `SDTNV`, `Email`, `ChucVu`, `HoatDong`) VALUES
('AD', 'Bùi Huy Mạnh', '0984898418', 'huymanh@gmail.com', 'Quản trị', 1),
('CK', 'Lê Đình Tuân', '0972718434', 'dinhtuan@gmail.com', 'Lễ tân', 1),
('NV01', 'Lê Đình Huy', '0964892318', 'dinhhuy@gmail.com', 'Nhân viên', 1),
('NV02', 'Phạm Văn Hoàng', '0964692518', 'vanhoang@gmail.com', 'Nhân viên', 1),
('NV03', 'Phan Mạnh Nam', '0962892018', 'manhnam@gmail.com', 'Nhân viên', 1),
('NV04', 'Đào Duy Tùng', '0974802358', 'duytung@gmail.com', 'Nhân viên', 1),
('NV05', 'Đỗ Văn Đức', '0968892378', 'vanduc@gmail.com', 'Nhân viên', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien_dichvu`
--

CREATE TABLE `nhanvien_dichvu` (
  `MaNV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaDV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien_dichvu`
--

INSERT INTO `nhanvien_dichvu` (`MaNV`, `MaDV`) VALUES
('NV01', 'CB1'),
('NV01', 'CB2'),
('NV01', 'D1'),
('NV01', 'D2'),
('NV01', 'D3'),
('NV02', 'CB1'),
('NV02', 'CB2'),
('NV02', 'D1'),
('NV02', 'D2'),
('NV02', 'D3'),
('NV03', 'CB1'),
('NV03', 'CB2'),
('NV03', 'D1'),
('NV03', 'D2'),
('NV03', 'D3'),
('NV04', 'CB1'),
('NV04', 'CB2'),
('NV04', 'D1'),
('NV04', 'D2'),
('NV04', 'D3'),
('NV05', 'CB1'),
('NV05', 'CB2'),
('NV05', 'D1'),
('NV05', 'D2'),
('NV05', 'D3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenDN` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaNV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoatDong` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TenDN`, `MatKhau`, `MaNV`, `HoatDong`) VALUES
('nhanvien1', '111111', 'NV01', 1),
('nhanvien2', '222222', 'NV02', 1),
('nhanvien3', '333333', 'NV03', 1),
('nhanvien4', '444444', 'NV04', 1),
('nhanvien5', '555555', 'NV05', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`MaBV`),
  ADD KEY `baiviet_ibfk_1` (`MaNV`);

--
-- Chỉ mục cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD PRIMARY KEY (`MaDH`,`MaDV`),
  ADD KEY `MaDV` (`MaDV`);

--
-- Chỉ mục cho bảng `chitietdv`
--
ALTER TABLE `chitietdv`
  ADD KEY `MaDV` (`MaDV`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`MaDV`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `SDTKH` (`SDTKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`SDTKH`);

--
-- Chỉ mục cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  ADD PRIMARY KEY (`MaNV`,`SDTKH`,`GioHen`,`NgayHen`),
  ADD KEY `SDTKH` (`SDTKH`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `nhanvien_dichvu`
--
ALTER TABLE `nhanvien_dichvu`
  ADD PRIMARY KEY (`MaNV`,`MaDV`),
  ADD KEY `MaDV` (`MaDV`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD KEY `MaNV` (`MaNV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `MaBV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Các ràng buộc cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD CONSTRAINT `chitietdh_ibfk_1` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`),
  ADD CONSTRAINT `chitietdh_ibfk_2` FOREIGN KEY (`MaDV`) REFERENCES `dichvu` (`MaDV`);

--
-- Các ràng buộc cho bảng `chitietdv`
--
ALTER TABLE `chitietdv`
  ADD CONSTRAINT `chitietdv_ibfk_1` FOREIGN KEY (`MaDV`) REFERENCES `dichvu` (`MaDV`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`SDTKH`) REFERENCES `khachhang` (`SDTKH`);

--
-- Các ràng buộc cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  ADD CONSTRAINT `lichhen_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`),
  ADD CONSTRAINT `lichhen_ibfk_2` FOREIGN KEY (`SDTKH`) REFERENCES `khachhang` (`SDTKH`);

--
-- Các ràng buộc cho bảng `nhanvien_dichvu`
--
ALTER TABLE `nhanvien_dichvu`
  ADD CONSTRAINT `nhanvien_dichvu_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`),
  ADD CONSTRAINT `nhanvien_dichvu_ibfk_2` FOREIGN KEY (`MaDV`) REFERENCES `dichvu` (`MaDV`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
