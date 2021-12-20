<?php

use App\Models\SubTour;
use Illuminate\Database\Seeder;

class SubTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
            SubTour::create([
                'tour_id' => 1,
                'title' => 'TP.HCM - HN - ĐÀ LẠT',
                'day' => 1,
                'content' => 'Xe và đón khách  sân bay Liên Khương hoặc bến xe. Sau đó xe đưa quý khách về thành phồ, nhập đoàn HDV đưa quý khách tham quan Dinh Bảo Đại ngôi dinh thự được chính vua Bảo Đại – vị vua cuối cùng của Việt Nam xây dựng để nghỉ ngơi và làm việc tại Đà Lạt được nhà nước cấp hạng di tích quốc gia.',
            ]);
            SubTour::create([
                'tour_id' => 1,
                'title' => 'ĐÀ LẠT SỨ SỞ NGÀN THÔNG',
                'day' => 2,
                'content' => 'Xe và HDV đưa quý khách tham quan Nông Trại Cún Puppy Farm đây là một địa điểm du lịch Đà Lạt mới nhất năm 2019 dành cho những tín đồ yêu động vật.
                Núi Langbiang Tiếp tục hành trình tới chân núi Langbiang (cao 2.169m), quý khách thuê xe Jeep lên núi (tự túc). Từ đỉnh núi quý khách sẽ cảm nhận được không khí mát mẻ dễ chịu của núi rừng, ngắm cảnh chụp hình bao quát thành phố Đà Lạt, hồ suối vàng, suối bạc…
               ',
            ]);


            SubTour::create([
                'tour_id' => 2,
                'title' => 'TP.HCM - Khánh Hoà',
                'day' => 1,
                'content' => 'Xe đón khách ở điểm tập kết. Sau đó xe đưa quý khách về thành phố theo con đường mới ven biển - Vịnh Diamond - một vịnh biển đẹp với khu du lịch lưu trú nghĩ dưỡng 5 sao, Các du khách sẽ được tham quan Bãi Dài, bãi biển cách thành phố Nha Trang 29km với bãi cát trắng trải dài cách bờ 100m. Tại đây quý khách có thể thưởng thức những món hải sản tươi sống do người dân địa phương tự đánh bắt...
                Buổi chiều : tham quan chùa Long Sơn - ngôi chùa cổ kính và yên tĩnh nổi tiếng ở Nha Trang, tiếp đến là tháp bà Ponagar và tham quan du lịch Suối Khoáng Nóng Tháp Bà',
            ]);
            SubTour::create([
                'tour_id' => 2,
                'title' => 'Vinpearl Land',
                'day' => 2,
                'content' => 'Xe sẽ đưa quý khách tham quan Vịnh Nha Trang, ngắm cảnh làng chài, Hòn Một, Hòn Tre,... Đến khu vui chơi giải trí Con Sẻ Tre dùng cơm trưa, tắm biển và tham gia các hoạt động : moto nước, dù bay, xuồng thể thao, lướt sóng...
                Buổi chiều : Tham quan Vinpearl Land bằng cáp treo biển dài nhất Việt Nam và tham gia các loại hình hoạt động vui chơi giải trí nơi đây.
               ',
            ]);

            SubTour::create([
                'tour_id' => 3,
                'title' => 'TP.HCM - Mộc Châu',
                'day' => 1,
                'content' => 'Từ Sân bay Tân Sơn Nhất di chuyển đến sân bay Nội Bài - Hà Nội. Từ Hà Nội tiếp tục di chuyển đến thị trấn Mộc Châu. Trên đường đi du khách có thể ngắm nhìn phong cảnh thiên nhiên nên thơ trữ tình của vùng núi Tây Bắc, thưởng thức đặc sản địa phương',
            ]);
            SubTour::create([
                'tour_id' => 3,
                'title' => 'Mộc Châu - Sơn La',
                'day' => 2,
                'content' => 'Tham quan đồi chè Trái Tim, rừng thông Bản Áng, thác Dải Yếm..., Bản Ba Phách - thiên đường hoa cải của Tây Bắc và thung lũng Nà Ka - nơi có cánh đồng hoa cải vàng tuyệt đẹp.
               ',
            ]);

             SubTour::create([
                'tour_id' => 3,
                'title' => 'Sơn La – Điện Biên',
                'day' => 3,
                'content' => 'Cung đường Sơn La – Điện Biên, các bạn sẽ đi qua đèo Pha Đin – một trong tứ đại đỉnh đèo của Việt Nam. Cung đường đã được rải nhựa nên rất dễ đi. Tuy nhiên, để đảm bảo an toàn các bạn vẫn nên đi chậm và chú ý quan sát khi đổ đèo.

                Một số điểm tham quan các bạn nên ghé qua ở Điện Biên như Đồi A1, nghĩa trang Điện Biên, hầm Đờ Các, hồ Pá Khoang, cánh đồng Mường Thanh vào mùa lúa chín hoặc check – in A Pa Chải – Cực Tây của Tổ Quốc… Và đừng quên thưởng thức cá hồi gần sân bay Điện Biên, bánh cuốn chợ Nam Thanh, bún chả chân cầu Trắng, dê Minh Bục hoặc lẩu mắm gần nghĩa trang A1
               ',
            ]);

             SubTour::create([
                'tour_id' => 3,
                'title' => 'Điện Biên - Sapa',
                'day' => 4,
                'content' => 'khởi hành đi Sapa theo hướng Hoàng Liên Sơn – Mường Chà – Mường Lay. Trên đường đi, hãy nghỉ ăn trưa ở TP.Lai Châu. Và đừng quên dừng chân ở đèo Ô Quy Hồ để ngắm nhìn quang cảnh thiên nhiên núi rừng vừa nên thơ, vừa hùng vĩ và thưởng thức một số món đặc sản bên đường.

Trên đường vào trung tâm thị trấn Sapa, các bạn cũng nên ghé thăm Thác Bạc. Giá vé 20.000 đồng/người lớn và 10.000 đồng/trẻ em.
Vào đến thị trấn nhận phòng, nghỉ ngơi, ăn trưa. Buổi chiều đi tham quan Nhà thờ Đá, núi Hàm Rồng, thác Tình Yêu… Buổi tối nhớ đi chợ đêm Sapa để tận hưởng không khí trong lành, thưởng thức món ăn ngon và mua chút đồ lưu niệm
               ',
            ]);

             SubTour::create([
                'tour_id' => 3,
                'title' => 'Sapa - Mù Cang Chải - TP.Hồ Chí Minh',
                'day' => 5,
                'content' => 'tham quan “nóc nhà Đông Dương” Fansipan. Món cháo cá hồi khá ngon và ấm bụng.tiếp tục hành trình đi Nghĩa Lộ theo QL 32, qua đèo Khau Phạ – Mù Cang Chải – Tú Lệ. Đèo Khau Phạ là một trong những con đèo dài và nguy hiểm. Nhưng lại rất đẹp, nhất là khi chìm trong sương mù. Đứng từ trên đèo nhìn xuống, sẽ thu được toàn bộ quan cảnh hùng vĩ của những thửa ruộng bậc thang ở thung lũng Cao Phạ, xã Lìm Mông, Lìm Thái. Đặc biệt, nếu đi vào mùa lúa chín (tầm tháng 9 – tháng 11) các bạn sẽ có những bức hình ruộng bậc thang “để đời” ở La Pán Tẩn.
                Quay lại Hà Nội để kết thúc hành trình ở sân bay Tân Sơn Nhất - TP.Hồ Chí Minh
               ',
            ]);


            SubTour::create([
                'tour_id' => 4,
                'title' => 'Hà Nội - Vịnh Hạ Long',
                'day' => 1,
                'content' => 'Sáng : Xuất phát từ trạm tập kết sẵn di chuyển đến Vịnh Hạ Long, dùng cơm trưa và ngắm cảnh ven đường, 11h : checkin khách sạn và nghỉ ngơi
                Chiều : tham quan vịnh Hạ Long, Hang Sửng Sốt, Làng chài Cửa Vạn',
            ]);
            SubTour::create([
                'tour_id' => 4,
                'title' => 'Bãi Cháy - Bảo tàng Quảng Ninh - Cung Cá Heo - Núi Bài Thơ',
                'day' => 2,
                'content' => ' Bãi cháy : à bãi biển rộng nhất thành phố Hạ Long, thu hút đông đảo khách du lịch đến đây vui chơi, tắm mát. Bờ biển nhân tạo này trải dài hơn 1000m mang vẻ đẹp tuyệt sắc với bãi cát sạch đẹp, dòng nước trong xanh, những hàng thông dài vô tận,...
                                Bảo tàng Quảng Ninh là một công trình kiến trúc nghệ thuật có thiết kế độc đáo, mới lạ. Nơi đây lưu giữ những giá trị văn hóa, lịch sử của phố biển Hạ Long. Trong lịch trình du lịch Hạ Long, bạn nên đến đây để hiểu hơn về lịch sử, văn hóa và con người nơi này. 
Cung cá heo nằm trên đường Trần Quốc Nghiễn, Tuần Châu, thành phố Hạ Long. Với lối kiến trúc độc đáo, mới lạ, nơi đây trở thành “thiên đường sống ảo” được giới trẻ đua nhau check-in.
Núi Bài Thơ là ngọn núi đá vôi nằm ngay trung tâm thành phố Hạ Long. Đây là di tích văn hoá lịch sử quan trọng. Nếu bạn muốn khám phá thành phố Hạ Long từ một góc nhìn khác biệt, thì đừng bỏ qua núi Bài Thơ trong lịch trình du lịch Hạ Long của mình. Tuy nhiên hoạt động leo núi Bài Thơ đã bị tạm dừng do lo ngại về an toàn cho du khách, thay vào đó bạn có thể tham quan, ngắm cảnh bên dưới. Hãy cập nhật kỹ lưỡng thông tin từ chính quyền địa phương trước khi lên lịch trình cụ thể cho chuyến du lịch Hạ Long của mình nhé!
               ',
            ]);
            SubTour::create([
                'tour_id' => 4,
                'title' => 'Phố cổ Hạ Long - Hà Nội',
                'day' => 3,
                'content' => 'Phố cổ Hạ Long là địa điểm du lịch độc đáo với kiến trúc “phố lồng trong phố” mang đến sự pha trộn hài hòa giữa nét hiện đại và truyền thống. Lịch trình du lịch Hạ Long nhất định phải ghé phố cổ để tham quan, ăn uống, và đặc biệt là check – in không gian tuyệt đẹp của nơi đây.
                Sau khi tham quan phố cổ, bạn ghé ăn trưa. Sau đó, quay về trả phòng khách sạn và lên xe về Hà Nội. Kết thúc tour du lịch Hạ Long 3 ngày 2 đêm đầy thú vị.
               ',
            ]);

            SubTour::create([
                'tour_id' => 5,
                'title' => 'TP.HCM - Phú Yên - Khu du lịch Ghềnh Ráng Tiên Sa - Mộ Hàn Mặc Tử - Tháp Đôi Hưng Hạnh - Biển Kỳ Co -Eo Gió',
                'day' => 1,
                'content' => 'Hạ cánh tại sân bay Phù Cát, Sau khi dùng bữa sáng và check-in khách sạn, điểm đến đầu tiên của chuyến hành trình là khu du lịch Ghềnh Ráng – Tiên Sa nằm cách trung tâm thành phố chưa tới 3km. Được ví như viên ngọc xanh giữa biển, Ghềnh Ráng – Tiên Sa không chỉ nổi tiếng với cảnh quan thoáng đãng, những bãi tắm đẹp, mà còn hấp dẫn du khách với những câu chuyện tình yêu gắn liền với sự ra đời của cái tên Ghềnh Ráng – Tiên Sa. Đã đến Ghềnh Ráng thì không thể không ghé đồi Thi Nhân để viếng mộ thi sĩ Hàn Mạc Tử. Ngược lên phía Bắc thành phố, Tuấn tham quan tháp đôi Quy Nhơn, hay còn gọi là tháp đôi Chăm pa Hưng Thạnh. Đây là dấu tích văn hóa của vương quốc Chăm Pa thời hoàng kim. Trải qua nhiều biến cố lịch sử thăng trầm, tháp đôi Hưng Thạnh từng bị phá hủy nặng nề nhưng cũng đã được trùng tu, tôn tạo, dưới sự giúp đỡ của các nhà khoa học trong nước và các chuyên gia đến từ Ba Lan. Sau khi ăn trưa xong, mình thẳng tiến ra biển Eo Gió Nhơn Lý, cách trung tâm thành phố khoảng 20km và được coi là biểu tượng của du lịch Quy Nhơn. Đây là một eo biển nằm giữa hai mỏm núi, quanh năm hút gió biển mát rượi nên được gọi là “Eo Gió”. Ngoài ra, con đường uốn lượn theo các dãy núi đá và ôm lấy eo biển này là một địa điểm check-in tuyệt đẹp không thể bỏ qua. Nằm khá gần Eo Gió chính là bãi biển Kỳ Co, không chỉ có nước biển trong xanh tận đáy, bãi tắm nông thích hợp cho cả trẻ em và những người không biết bơi, bãi biển Kỳ Co còn có những tảng đá lớn nhỏ nhiều hình thù liên kết với nhau, tạo nên những hồ nước nhỏ rất đẹp mắt',
            ]);
            SubTour::create([
                'tour_id' => 5,
                'title' => 'Ghềnh Đá Dĩa - Nhà Thờ Mằng Lăng – Đầm Ô Loan – Bãi Xép – Ghềnh Ông',
                'day' => 2,
                'content' => 'Điểm đến đầu tiên của ngày thứ 2 đó là Ghềnh Đá Dĩa, Bãi đá đen này có rất nhiều khối đá tròn lớn nhỏ xếp chồng lên nhau, tựa như chồng đĩa. Theo nghiên cứu, đây là đá bazan được hình thành từ hơn 200 triệu năm trước do nham thạch núi lửa Vân Hòa chảy xuống và đông tụ lại. Hiện tượng thiên nhiên kỳ thú này không chỉ nổi tiếng ở Việt Nam mà còn được thế giới biết đến.
                Đi Phú Yên thì không thể không tham quan nhà thờ Mằng Lăng, một trong những nhà thờ cổ nhất Việt Nam, nổi bật với lối kiến trúc Gothic cổ điển đặc trưng của châu Âu, đây còn là nơi lưu giữ cuốn sách ghi chép bằng chữ quốc ngữ đầu tiên của Việt Nam. Nhà thờ Mằng Lăng thật sự là một nơi xứng đáng có mặt trong những tấm hình check-in của bạn.
                Nếu ai từng xem qua bộ phim “Tôi thấy hoa vàng trên cỏ xanh” của đạo diễn Victor Vũ, ắt hẳn không quên những cảnh quay mượt mà, lãng mạn, được ghi lại tại khu vực Đầm Ô Loan, và Bãi Xép – Ghềnh Ông. Bãi Xép tuy không có gì quá nổi bật, nhưng lại hấp dẫn bởi sự nguyên sơ của nó, đặc biệt là dãy xương rồng mọc san sát nhau ngay mỏm đá nhô ra biển.
               ',
            ]);
            SubTour::create([
                'tour_id' => 5,
                'title' => 'Cầu Thị Nại – Đồi Cát Phương Mai – Khu Du Lịch Cửa Biển Seagate – Sân bay Phù Cát',
                'day' => 3,
                'content' => 'Ngày cuối cùng ở Quy Nhơn, mở đầu là cuộc hành trình vượt qua cầu Thị Nại, cây cầu vượt biển dài nhất Việt Nam, nối liền giữa thành phố Quy Nhơn và Nhơn Hội – một khu kinh tế sầm uất của tỉnh Bình Định. Cầu Thị Nại bao gồm cây cầu chính vượt đầm Thị Nại, và năm cây cầu nhỏ bắc qua sông Hà Thanh. Nhìn từ xa, cây cầu như dải lụa bắc ngang qua dòng nước xanh biếc, một đầu là đất liền, còn đầu kia là bán đảo Phương Mai nổi tiếng với đồi cát mênh mông.
                Đồi cát Phương Mai là một trong những đồi cát đẹp nhất của tỉnh Bình Định, với nhiều cồn cát cao từ 20m, 30m, đến 100m so với mực nước biển. Đồi cát ở đây bao la, rộng lớn một màu vàng óng ánh, khiến Tuấn cảm thấy mình nhỏ bé như đang ở giữa sa mạc.
                Từ cầu Thị Nại chạy thẳng qua Khu du lịch Cửa Biển – Seagate Park cách đó không xa để tham gia các trò chơi cực vui, cực đã trên nước. Không gian ở Khu du lịch Cửa Biển rất thoáng đãng và dễ chịu, được bao quanh bởi núi, rừng, và biển. Dùng bữa trưa và vui chơi đến chiều rồi trở về check-out khách sạn và đi thẳng ra sân bay Phù Cát để trở về thành phố Hồ Chí Minh.
               ',
            ]);


            SubTour::create([
                'tour_id' => 6,
                'title' => 'TP.HCM - Mỹ Tho - Bến Tre - Cần Thơ',
                'day' => 1,
                'content' => 'Buổi sáng, 8:00 sáng khởi hành từ VP công ty đi Mỹ Tho, 10h00 đến bến tàu Mỹ Tho, quý khách dừng chân tham quan cùa Vĩnh Tràng - một trong nhữg ngôi chùa cổ nổi tiếng của miền tây với lối kiến trúc độc đáo. Sau đó xe đưa đoan ra lên tàu du ngoạn sông Tiền tham quan những ngôi nhà nổi trên sông cùng với các bè cá,  nghe giới thiệu lịch sử hình thành 4 cù lao Long, Lân, Quy, Phụng. Đến cồn Thới Sơn - quý khách tham quan miệt vườn cây trái xứ cù lao, xem các tổ Ong mật và cách lấy mật. Quý khách dừng chân thưởng thức những tách trà mật ong nóng thơm lừng miễn phí nghe giới thiệu về các sản phẩm làm từ mật ong, sữa ong chúa, phấn hoa…sau đó đến khu vực nhà vườn nghỉ ngơi thưởng thức trái cây miễn phí, nghe đàn ca tài tử miệt vườn. Sau đó Quý khách ra bến đò đi đò chèo dọc bờ kênh dưới những tán dừa rợp mát đến cửa sông và lên tàu lớn tiếp tục đưa quý khách sang Bến Tre tham lò sản xuất kẹo dừa Bến Tre và các sản làm từ dừa. Sau đó đến nhà hàng miệt vườn dùng cơm trưa, nằm võng nghỉ ngơi. Sau đó lên tàu trở về bến. Trên đường nghe hướng dẫn thuyết minh về Cồn Phụng - Di tích Ông Đạo dừa..
                uổi chiều, 15h00 quý khách trở lại bến tàu, tàu đưa quý khách về bến. Sau đó lên xe tiếp tục đi Cần Thơ. 17h00 đến Cần Thơ quý khách nhận phòng khách sạn, nghỉ ngơi, sau đó quý khách dùng bữa tối tại nhà hàng du thuyền trên Cần Thơ ngắm cảnh đẹp miền đất Tây Đô về đêm - nghe ca nhạc tài tử nam bộ và thưởng thức bữa tối với các món đặc sản miền tây tại nhà hàng trên du thuyền..',
            ]);
            SubTour::create([
                'tour_id' => 6,
                'title' => 'Chợ Nổi Cái Răng - Bình Thuỷ - Cồn Sơn - Châu Đốc',
                'day' => 2,
                'content' => 'Buổi sáng, xe đưa đoàn ra bến tàu đi tham quan chợ nổi Cái Răng – Xem cảnh buôn bán tấp nập trên sông – một nét đặc trưng của chợ miền sông nước miền tây. Quý khách có thể trực tiếp mua trái cây trên ghe - thuyền trên chợ nổi, tham quan lò sản xuất hủ tiếu và các các loại khô đặc sản, sau đó trở về khách sạn ăn sáng, trả phòng. Xe đưa đoàn đi thăm đình Bình Thủy – Long Tuyền Cổ Miếu ngôi đình đặc sắc nhất xứ Tây Đô cũng như Miền Tây Nam Bộ được vua Tự Đức phong sắc “Bổn Cảnh Thành Hoàng” ngày 29/11/1853. Sau đó tiếp tục viếng chùa Nam Nhã xây dựng năm 1895 theo tông phái Minh Sư – Ngôi chùa có kiến trúc độc đáo gắn liền với lịch sử đấu tranh hào hùng của các sỹ phu yêu nước thời Pháp thuộc. Sau đó tàu đưa quý khách sang Cồn Sơn. Tại đây quý khách check in khung cảnh miệt vườn phủ đầy màu xanh cây trái trên đường đi đặc biệt quý khách được trải nghiệm loại hình độc đáo xem cá lóc bay, chèo xuồng ba lá, uống trà sen, chụp ảnh vườn trái cây bưởi, ổi, nhãn, chôm chôm, tạo dáng hồ sen hồng, sen vua, tham quan bè nuôi cá heo sông Hậu. Quý khách thưởng thức bữa trưa món đặc sản cá lóc bay cồn Sơn nhúng mẻ ăn với bông kèo nèo và các món đặc sản khác. tàu đưa quý khách trở về bến tàu, sau đó lên xe khởi hành đi Châu Đốc.

Buổi chiều, đến Châu Đốc quý khách tham quan rừng tràm Trà Sư với hệ sinh thái rừng tràm ngập nước đẹp nhất Đông Nam Á. Quý khách vào check in bến nước Trà Sư  xinh đẹp với nhiều tiểu cảnh đôc đáo chụp ảnh Cầu Kiều Trà Sư bắt qua qua sông lối vào rừng tràm. Hướng dẫn đưa quý khách đếm thăm Cầu Tre Vạn Bước đi xuyên rừng tràm tại đây quý khách nhẹ nhàng bước đi vào rừng tràm xanh mướt với khung cảnh tuyệt đẹp. Trên mặt nước phủ đầy một màu xanh lơ của những mãng bèo màu xanh như những tấm thảm khổng lồ bao phủ khắm rừng tràm. Trong không khí mát mẻ tạo cảm giác lâng lâng khó tả, cuộc sống chậm lại. Quý khách như gạt bỏ những điều phiền muộn của cuộc sống, tận hưởng cảm giác sản khoái khi đi giữa thiên nhiên hoang dã tuyệt đẹp. Tại đây quý khách được tận mắt xem những chú chim dạn dĩ kiếm mồi trên những đám bèo màu xanh, những đàn cò, diệt, trích lượng lờ, ríu rít trên những tán tràm xanh, và dưới những đám bèo xanh lơ dưới mặt nước. Sau một vòng khám phá, quý khách trở lại bến đò. Đò đưa quý khách đi một vòng vào lung tràm xanh mướt giữa rừng rộng bằng kích thước một sân bóng lớn, quý khách tha hồ check in, chụp ảnh.  Tàu tiếp tục đưa quý khách đến con đường độc đạo giữa rừng tràm đến trạm dừng chân tiếp theo. Tại đây quý khách có thể lên đài quan sát ngắm toàn cảnh rừng tràm Trà Sư, đi bộ trên đường đất giữa rừng tràm săn những bức ảnh đẹp, chụp ảnh cây cầu bắt ngang qua bờ kênh. Sau đó đến khu vực nhà hàng giữa chốn thiên nhiên hoang dã được bố trí những cụm nhà sàn nhỏ giữa rừng rất lãn mạng. Quý khách có thể dừng chân thưởng thức vài món dân dã, đạm bạc... Tàu đưa quý khách về lại bến đò kết thúc chuyến tham quan rừng tràm Trà Sư. Sau đó xe đoàn trở về nhận phòng khách sạn, dùng cơm tối.

Buổi tối : Xe đưa quý khách vào vào núi Sam viếng Miếu Bà chúa Xứ, Lăng Thoại Ngọc Hầu, chùa Tây An...Sau đó về khách sạn nghỉ ngơi, hoặc tự do khám phá ẩm thực Châu Đốc về đêm.
               ',
            ]);
            SubTour::create([
                'tour_id' => 6,
                'title' => 'Châu Đốc - Đồng Tháp - TP.HCM',
                'day' => 3,
                'content' => 'Buổi sáng, 6h00 quý khách ăn sáng tại khách sạn, 6h30 trả phòng sau đó xe đưa quý khách ra chụp ảnh tượng đài Cá Ba Sa biểu tượng của TP Châu Đốc, sau đó tiếp tục hành trình đi Đồng Tháp. Quý khách được đi qua 2 cây cầu nổi tiếng của miền tây đó là cầu Vàm Cống và cầu Cao Lãnh - Từ trên cầu quý khách thả tầm mắt ngắm toàn cảnh những cánh đồng bát ngát, những vườn cây trái xum xuê. Đến Cao Lãnh quý khách dừng chân viếng khu di tích mộ cụ phó bảng Nguyễn Sinh Sắc, sau đó tiếp tục vào khu du lịch Gáo Giồng - Nơi được mệnh danh là Đồng Tháp Mười thu nhỏ và là lá phổi xanh của Đồng Tháp. Đây là điểm du lịch đẹp nhất Đồng Tháp hiện nay. Quý khách vào check in, chụp ảnh, xem phim tài liệu, thưởng thức trà sen...Sau đó ra bến đò lên xuồng ba lá cùng các cố gái mặt áo bà ba xinh tươi chèo xuồng đưa quý khách đi dưới những tán rừng tràm rợp mát ngắm cảnh hệ sinh thái tuyệt đẹp chỉ có ở Gáo Giồng, ngắm nhìn những đàn chim bay rợp trời hàng ngàn con, quý khách vào sân chim Gáo Giồng chụp cận cảnh những đàn chim trời đủ các loại…Sau chuyến trải nghiệm đầy thú vị, quý khách trở lại bến đò tham quan khu ẩm thực chợ quê Gáo Giồng và sau đó đến nhà hàng sinh thái miệt vườn quý khách dùng cơm trưa với các món đặc sản Đồng Tháp, cảm nhận hương đồng gió nội.

Buổi chiều, Quý khách quý khách lên xe khởi hành về Sài Gòn dừng chân nghỉ trưa trên đường. Khoảng 18h30 xe về đến Sài Gòn, kết thúc tour du lịch miền tây 3 ngày 2 đêm Mỹ Tho - Bến Tre - Cần Thơ - Châu Đốc - Đồng Tháp - hẹn gặp lại quý khách.
               ',
            ]);

            SubTour::create([
                'tour_id' => 7,
                'title' => 'Cố Đô Huế - Đại Nội Kinh Thành - Du Thuyền Ca Huế',
                'day' => 1,
                'content' => 'Xe và HDV của công ty sẽ đón quý khách tại nhà ga, sân bay. Về khách sạn gửi hành lý. Quý khách sẽ tham quan city tour thành phố.

Trưa : Quý khách dùng bữa trưa tại nhà hàng với hương vị ẩm thực Huế.

Sau bữa trưa đoàn về khách sạn nhận phòng nghỉ ngơi.

Chiều : Đoàn tham quan Đại Nội Kinh Thành Huế. Kinh thành Huế là một trong số các di tích thuộc Quần thể di tích Cố đô Huế được UNESCO công nhận là Di sản Văn hoá Thế giới.

Quý khách sẽ tham quan các di tích thuộc quần thể di tích này.

Sau khi tham quan xong Đại Nội, quý khách di chuyển về khách sạn tắm rửa nghỉ ngơi.

Tối : Xe và HDV cùng đoàn đi dùng bữa tối tại nhà hàng.

 Du thuyền ca Huế : Thưởng ngoạn nét nhã nhạc cung đình Huế trên thuyền rồng, theo dòng sông Hương thơ mộng. Nét đặc trưng tiêu biểu của Cố Dô Huế.',
            ]);
            SubTour::create([
                'tour_id' => 7,
                'title' => 'Huế - Quảng Trị - Quảng Bình',
                'day' => 2,
                'content' => 'Sáng: quý khách có thể dậy sớm tản bộ bên dòng sông Hương thơ mộng. Sau đó dùng bữa sáng buffet tại khách sạn.

7h30 : Đoàn trả phòng khách sạn. Khởi hành du lịch Quảng Bình.

Đoàn sẽ đi theo con đường mòn Hồ Chi Minh nhánh Đông huyền thoại. Qua những địa danh lịch sử của Quảng Trị, nơi đánh phá ác liệt nhất trong chiến tranh Việt Nam. Như thành cổ Quảng Trị, Sông Thạch Hãn, Đường 9 Nam Lào, nghĩa trang đường 9, nghĩa trang Trường Sơn…

Cùng mường tượng về quá khứ hào hùng và những trận đánh ác liệt của chiến tranh Việt Nam.

12h : Đoàn nghỉ ngơi và ăn trưa tại nhà hàng Phong Nha.

13h30 :

Tham quan Động Phong Nha
Quý khách sẽ được du thuyền ngược dòng Sông Son xanh ngắt. Thư thái thả hồn hòa quyện vào thiên nhiên, núi sông hùng vĩ tại Phong Nha. Bao nhiêu phiền muộn, mệt nhọc của cuộc sống bon chen hàng ngày đều tan biến. Đắm chìm trong cảnh sắc nước hương rừng bên dòng sông thơ mộng.

Quý khách sẽ bắt gặp những cảnh hết đỗi thân thương và bình dị nơi làng quê hai bên bờ sông. Những đứa tre con chăn trâu nô đùa tắm sông, những thiếu nữa bên ruộng ngô, ruộng lúa… Đôi lúc lại bắt gặp những thuyền độc mộc của ngư dân bắt cá trên sông. Cảm giác thật bình yên.

Thuyền sẽ ngược dòng tầm 30 phút đưa quý khách đén với hang Động Phong Nha – Kỳ quan đệ nhất Động. Là hang động có dòng sông ngầm chảy qua dài nhất Đông Nam Á.

Cùng các hệ thống thạch nhũ huyền ảo, kỳ vĩ. Quý khách sẽ vô cùng ngạc nhiên trước tạo hóa của tự nhiên qua hàng trăm triệu năm lịch sử. Tại đây quý khách tha hồ tham quan chụp hình lưu niệm với các khối thạch nhũ muôn hình thù kỳ bí.

16h : Kết thúc Động Phong Nha, đoàn sẽ khởi hành về thành phố Đồng Hới.

17h : Nhận phòng khách sạn và nghỉ ngơi, hay quý khách có thể dạo chơi tắm biển Nhật Lệ.

Tối:  quý khách thưởng thức bữa tối tại các nhà hàng đặc sản của Quảng Bình, và tham quan thành phố về đêm.
               ',
            ]);
            SubTour::create([
                'tour_id' => 7,
                'title' => 'Động Thiên Đường - Sông Chày Hang Tối',
                'day' => 3,
                'content' => 'Sáng :

Quý khách dậy sớm dạo chơi trên biển hay tắm biển Nhật Lệ, ngắm bình minh.

Quý khách dùng bữa sáng buffet tại khách sạn.

8h : Xe và HDV Phong Nha Tourist sẽ đón đoàn. Khởi hành tham quan vườn Quốc Gia Phong Nha – Kẻ Bàng.

9h30 : Xe sẽ đua quý khách đến tận bãi đỗ xe của trung tâm du lịch Động Thiên Đường.

10h :

Tham quan Động Thiên Đường
Sau khi nghỉ ngơi và làm thủ tục tham quan, đoàn sẽ di chuyển bằng xe điện. Vi vu dưới những bóng cây đại ngàn giữa vùng lõi vườn quốc gia. Cùng chiêm ngưỡng hệ sinh thái động thực vật vô cùng phong phú suốt quãng đường.

Tiếp đến chinh phục 525 bậc thang men theo sườn núi để đến tận cửa hang Động Thiên Đường. Cửa hang nhỏ hẹp nhưng quý khách sẽ thực sự phải bất ngờ khi bước vào bên trong. Khoảng không gian mở ra rộng lớn. Không khí trong hang luôn luôn mát lạnh. Với hệ thống chiếu sáng hợp lý không làm mất đi vẻ đẹp tự nhiên của hang động.

Quý khách sẽ tham quan 1km đầu tiên của hang động trên hệ thống cầu thang gỗ. Thỏa sức tưởng tượng với hệ thống thạch nhũ lung linh kì ảo muôn hình thù. Nào là Voi Ma Mút, Kỳ Nhung Hươu, Nhà Rông Tây Nguyên, cung Quần Tiên Hội Tụ… 

Trưa: 

12h30 : Quý khách nghỉ ngơi và dùng bữa trưa tại nhà hàng với các món ăn đặc sản địa phương.

13h30 :

Tham gia khám phá Sông Chày Hang Tối.
Tại đây quý khách thay thổi trang phục, trang bị các thiết bị an toàn như áo phao, dây đeo, đèn pin đội đầu…

Đu Zipline chinh phục Sông Chày : là hệ thống Zipline 2 dây dài nhất Đông Nam Á. Được trang bị hết sức hiện đại và an toàn. Quý khách sẽ vượt 400m Sông Chày bằng hệ thống Zipline đến tận cửa Hang Tối.

Khám phá Hang Tối : Cùng khám phá 1km trong Hang Tối bằn nón bảo hiểm và đèn pin đội đầu. Đường đi trong hang nhỏ hẹp và nhiều mõm đá trơn trượt, phải thật cẩn thận mới qua được đoạn đườg này. Đến với hồ tắm bùn tự nhiên trong hang động, ngâm mình thư giãn với hệ thống bùn tự nhiên độc đáo duy nhất tại Việt Nam.

Chèo thuyền kayak trải nghiệm Sông Chày : sau khi hoàn thành khám phá hang tối, quý khách sẽ trở ra và chèo thuyền kayak trên Sông Chay. Nước sông ở đây xanh màu ngọc bích đẹp đến lạ lùng. Nước dông vô cùng mát lạnh.

Thử thách cùng các trò chơi mạo hiểm trên sông. Như đu zipline ngắn thả mình giữa dong sông, chuỗi game chinh phục vượt sông…

16h : Hoàn thành chương trình. Đoàn khởi hành về lại thành phố Đồng Hới.

17h : Đến khách sạn tắm rửa và nghỉ ngơi.

Tối : Xe sẽ đón đoàn dùng bữa tối tại nhà hàng. Sau đó đoàn tự do khám phá thành phố về đêm.
               ',
            ]);
             SubTour::create([
                'tour_id' => 7,
                'title' => 'Động Thiên Đường - Sông Chày Hang Tối',
                'day' => 4,
                'content' => 'Sáng :

Quý khách dậy sớm tắm biển Nhật Lệ. Ăn sang buffet tại khách sạn.

Làm thủ tục trả phòng khách sạn. Xe và HDV đón đoàn tham quan thành phố Đồng Hới.

Các địa danh nổi tiếng nhất của Quảng Bình. Như nhà thờ Tam Tòa, Quảng Bình Quan, tượng đài Mẹ Suốt, Lũy Thầy, thành Đồng Hới…

Tham quan chợ Đồng Hới – chợ hải sản lớn nhất Quảng Bình. Quý khách có thể mua đặc sản về làm quà.

Đến giờ Xe và HDV sẽ tiễn đoàn ra nhà ga hay bến xe, sân bay Đồng Hới.

Kết thúc chương trinh Tour Du Lịch Huế Quảng Bình 4 Ngày 3 Đêm.',
            ]);

              SubTour::create([
                'tour_id' => 8,
                'title' => 'TP.HCM - Hội An',
                'day' => 1,
                'content' => 'Xe và HDV du lịch đón du khách tại điểm tập kết và di chuyển đến Quảng Nam. Sau khi nhận phòng và dùng điểm tâm sáng, tổ chức cho du khách tham quan các danh lam thắng cảnh nổi tiếng ở Hội An : Hội Quán Phúc Kiến, Hội Quán Triều Châu, làng Gốm Thanh Hà, Lò Gạch Cũ... và thưởng thức các đặc sản nơi đây : Cao Lầu, Mỳ Quảng, Bánh bèo Hội An... Buổi tối :  tham quan chợ đêm Hội An ',
            ]);
            SubTour::create([
                'tour_id' => 8,
                'title' => 'Chùa Cầu - Xưởng Thủ Công Mỹ Nghệ Hội An - Cù Lao Chàm - Du lịch Cửa Đại',
                'day' => 2,
                'content' => ' Tiếp tục tham quan lần lượt các điểm danh nổi tiếng : Chùa Cầu - Biểu tượng của Hội An và cũng chính là minh chứng cho sự giao thoa văn hóa, Chùa Cầu còn được biết đến với tên là Chùa Cầu Nhật Bản do được các nghệ nhân Nhật thiết kế từ thế kỉ thứ 17. Tương truyền Chùa Cầu có ý nghĩa như thanh gươm trấn yểm quái thú Namazu, quái thú cựa mình là tạo ra động đất và lũ lụt. Trong chùa có tượng thờ Bắc Đế Trấn Võ, vị thần bảo vệ vùng đất và mang lại bình an cho con người. Chính vì vậy, các du khách khi tới Hội An đều ghé thăm Chùa Cầu, một phần để chiêm ngưỡng di sản kiến trúc độc đáo này, đồng thời để cầu mong sự yên bình cho mình và những người thân yêu.
                Thưởng thức dân ca Bài Chòi - được UNESCO công nhận là di sản văn hoá phi vật thể. 

               ',
           ]);
    }
}
