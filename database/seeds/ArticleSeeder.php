<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      /*  for ($i=1; $i < 10; $i++) { 
            if($i>=6)
                Article::create([
                    'title' => 'Day la title '.$i,
                    'category_id' => 3,
                    'thumbnail' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1635424473/FnGO/article/thumbnail/articleThumb_qpziai.png',
                    'background'    => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1631955491/sample.jpg',
                    'user_id' => 1,
                    'abstract' => 'Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi...',
                    'content' => '"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."',
                    'comment_number' => $i,
                ]);
            else
                Article::create([
                    'title' => 'Day la title '.$i,
                    'category_id' => 3,
                    'thumbnail' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1635424473/FnGO/article/thumbnail/articleThumb_qpziai.png',
                    'background'    => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1631955491/sample.jpg',
                    'user_id' => 1,
                    'abstract' => 'Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi...',
                    'content' => '"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."',
                ]);
        } */

        Article::create([
            'title' => 'Du lịch Tây Bắc nên đi đâu và trải nghiệm gì?',
            'category_id' => 3,
            'thumbnail' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636977053/FnGO/article/thumbnail/taybac_jbffj6.jpg',
            'background' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636977140/FnGO/article/background/dienbien_fm5twc.jpg',
            'user_id' => 1,
            'abstract' => 'Tháng 11, những ngày gió đông bắt đầu chạm ngõ, có lẽ ngoài Hà Nội thì các điểm đến của du lịch Tây Bắc là điều đầu tiên khiến những “đôi chân xê dịch” nghĩ đến đầu tiên',
            'content' => 'Say đắm sắc trắng mùa hoa cải Mộc Châu
            Du lịch Sơn La vào đầu tháng 11 hằng năm, khi tiết trời bắt đầu se lạnh cũng là lúc cao nguyên Mộc Châu thay áo mới, khoác lên mình chiếc áo mộc mạc, khắp không gian rộng lớn được phủ bằng một màu trắng tinh khôi của hoa cải. Không giống như ở những nơi khác thường chỉ trồng trong một vùng đất nhỏ, ở Mộc Châu hoa cải được trồng kín cả một quả đồi, kéo dài từ thung lũng này đến chân núi nọ. Những địa điểm du lịch Mộc Châu như bản Ba Phách 1, 2, 3 và khu vực Ngũ Động Bản Ôn chính là nơi bạn có thể chiêm ngưỡng vẻ đẹp tuyệt vời của hoa này trọn vẹn nhất.

Du lịch Tây Bắc những ngày đầu đông đến với Mộc Châu tháng 12 còn là dịp để bạn “refresh” lại bản thân dưới không gian xanh mát của những nương chè trong trong làn sương sớm. Dạo quanh những luống chè, mùi thơm phảng phất, dịu mát của những búp chè, những bông hoa mận sẽ làm tâm hồn bạn càng thêm bay bổng và lạc quan hơn giữa đất trời Tây Bắc.
Thị trấn Sapa ẩn hiện trong làn sương
Địa điểm du lịch Sapa - Lào Cai vào mùa nào cảnh sắc cũng có ý vị riêng, thế nhưng tháng 11 ở đây lại có một vẻ lãng mạn rất riêng khiến du khách say lòng. Sương Sapa mùa đông vừa trắng muốt lãng đãng dửng dưng pha chút đặc trưng của “hương” đông. Sương lẫn vào mây, bồng bềnh dập dờn theo cơn gió phảng phất ngang qua phố núi, tràn xuống khắp thị trấn. Giữa không gian sương mờ giăng giăng, vẻ đẹp của nhà thờ hiện lên như một thước phim kinh điển tại vùng đất thiên đường nào đó vậy.
Lên Yên Bái săn mây đỉnh Tà Xùa
Với những mỹ cảnh thiên nhiên đủ làm say lòng người đến, níu bước người đi, Yên Bái đang trở thành một trong những điểm dừng chân hấp dẫn nhất hành trình Tây Bắc. Một trong những địa điểm du lịch hút khách nhất ở Yên Bái là Mù Cang Chải, đẹp như một bức tranh bích họa làm say mê lòng người. Đặc biệt vào những ngày nhiều mây, khung cảnh càng trở nên kỳ ảo hơn bao giờ hết bởi biển lúa, biển mây đan xen hòa quyện vào nhau. Tới Mù Cang Chải bạn cũng đừng quên check in những địa điểm ngắm ruộng bậc thang đẹp nhất tại xã La Pán Tẩn, Chế Cu Nha, Dế Xu Phình… Du lịch Yên Bái mùa này bạn đừng quên đến Tà Xùa để săn mây nhé. Khi lên tới đỉnh Tà Xùa, dù bạn đứng ở bất cứ vị trí nào thì cũng như đang ở chốn thiên đường. Tất cả không gian đều được bao phủ bởi biển mây bồng bềnh, trắng xóa.
Đi Điện Biên ngắm hoa mai anh đào nở rộ.

Với không khí trong lành, khung cảnh thiên nhiên kì vĩ cùng thảm thực vật phong phú, hồ Pá Khoang đang là điểm du lịch thu hút đông đảo du khách ở Điện Biên. Đặc biệt trên hòn đảo nhỏ ở giữa hồ Pá Khoang rộng hàng chục ha còn có một “Nhật Bản thu nhỏ” với hơn 400 cây hoa anh đào nở rực rỡ giữa núi rừng Tây Bắc từ tháng 12. Tại đây, bạn còn có cơ hội được khám phá, trải nghiệm các phong tục tập quán của dân tộc người Thái, Khơ Mú và hưởng thức những đặc sản mang đậm hương vị núi đặc trưng như cá xiên nướng, thịt hun khói, cơm lam, món xôi đồ đựng trong coóng hay những ché rượu thơm nồng.',
        ]);

        Article::create([
            'title' => '3 địa điểm du lịch Bến Tre vui chơi cả ngày không chán',
            'category_id' => 3,
            'thumbnail' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636978471/FnGO/article/thumbnail/bentre_ajmieq.jpg',
            'background' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636978437/FnGO/article/background/conphung_a4f3qb.jpg',
            'user_id' => 1,
            'abstract' => 'Bến Tre nổi tiếng là “xứ dừa” trong huyền thoại, nay cũng là điểm du lịch được nhiều du khách chốn thị thành tìm về mỗi dịp cuối tuần.',
            'content' => 'Địa điểm du lịch Bến Tre Lan Vương
            Khu du lịch Lan Vương hiện đang là một địa điểm tham quan và vui chơi cực “hot” tại Bến Tre. Được mệnh danh là một “miền Tây thu nhỏ”, khu du lịch Bến Tre Lan Vương còn thu hút du khách không bởi bầu không khí trong lành.

• Du lịch Bến Tre 1 ngày “phá đảo” Lan Vương bạn sẽ được tha hồ trải nghiệm các trò chơi hấp dẫn như: • Câu cá và giăng lưới bắt cá
• Bơi thuyền
• Tát mương bắt cá, lội ruộng bắt cua, bắt ốc
• Hát Karaoke, nghe hòa tấu guitar
• Tham quan vườn bưởi da xanh
• Tham quan trại nuôi heo rừng lai, trang trại nuôi dê, thức ăn hoàn toàn từ rau củ quả
• Thưởng thức các loại trái cây như: mận An Phước, xoài Đài Loan, mít tứ quý, chùm ruột, khế…
Địa điểm du lịch Bến Tre Cồn Phụng
Cồn Phụng cũng là một trong những địa điểm tham quan không thể bỏ lỡ của nhiều du khách khi đi du lịch Bến Tre. Đây được xem là nơi dầu tiên khai thác thân cây dừa, đưa danh diếng nghề mỹ nghệ dừa đến nhiều nơi, làm cho “xứ dừa Bến Tre” nổi tiếng hơn trên bản đồ du lịch Việt Nam. Do đó, khi du lịch Bến Tre đến với Cồn Phụng bạn nên đến các làng nghề để có cơ hội tìm hiểu con người, cuộc sống và văn hóa xứ dừa tại Bảo tàng Dừa, là một ngôi nhà được làm hoàn toàn từ thân cây dừa cùng hàng trăm sản phẩm thủ công mỹ nghệ tinh xảo, bắt mắt và mang đậm giá trị nghệ thuật.

Du lịch Bến Tre, đến với Cồn Phụng bạn còn được chứng kiến toàn bộ quá trình để làm nên những viên kẹo dừa vô cùng thơm ngon và đậm vị miền Tây Nam Bộ này. Ngoài ra, còn có vô vàn hoạt động thú vị khác để bạn trải nghiệm như:

• Tham quan khu di tích Đạo Dừa, những khu vườn sai trĩu quả và thưởng thức trái cây
• Xem nuôi ong và thưởng trà mật ong
• Trải nghiệm đi xe ngựa quanh đường làng, ngồi xuồng ba lá khám phá kênh rạch
• Thử thách chụp ảnh cùng trăn gấm
• Tham gia tát mương bắt cá cực kỳ vui nhộn
• Nghe đờn ca tài tử
Khu du lịch Bến Tre Làng Bè
Nếu bạn đã từng rủ nhau về Cồn Phụng, Lan Vương thì hãy thử đổi gió đến khu du lịch Làng Bè, một trong những địa điểm du lịch sinh thái thu hút khách nhất ở Bến Tre có thể đi và về trong ngày. Tại đây, khung cảnh sông nước hữu tình của miền Tây Nam Bộ gắn với nghề nuôi cá bè của người dân địa phương. Các hoạt động vui chơi, giải trí hấp dẫn. Nền ẩm thực phong phú đậm chất miền Tây chắc chắn sẽ kích thích và khiến bạn có một chuyến đi đầy trải nghiệm tuyệt vời.

Điều thú vị là các bạn sẽ được mặc những bộ đồ bà ba cùng nhau tham gia các trò chơi dân gian như đi cầu khỉ, đu tàu dừa, đạp xe thăng bằng qua cầu, tát mương bắt cá, đu dây qua sông…Bên cạnh đó, mọi người còn được trải nghiệm trò trái nổ bằng đất sét và cùng bạn bè của mình trổ tài nấu những món ăn miệt vườn.',

    ]);

        Article::create([
            'title' => 'Du Lịch Phú Quốc trọn gói tận hưởng kỳ nghỉ 5 sao',
            'category_id' => 3,
            'thumbnail' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636982131/FnGO/article/thumbnail/Phu-Quoc_qtr8t0.jpg',
            'background' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636982109/FnGO/article/background/camnhi-213505023512-Ks-Vinpearl-Resort-Spa-PQ_pppcfv.jpg',
            'user_id' => 1,
            'abstract' => 'Phú Quốc luôn biết cách thu hút khách du lịch với bờ biển trong xanh yêu kiều cùng nét đẹp quyến rũ do thiên nhiên ban tặng và những trải nghiệm thú vị mà không nơi nào có được. ',
            'content' => 'Phú Quốc được mệnh danh là “thiên đường nghỉ dưỡng” ở phía Nam khi sở hữu không ít các khách sạn 5 sao đẳng cấp, mang đến cho du khách những kỳ nghỉ trọn vẹn. Trong đó nổi tiếng nhất là 4 khách sạn trong hệ thống của Vinpearl Phú Quốc.
 
Khách sạn VinOasis Phú Quốc chính là địa điểm nghỉ dưỡng được giới trẻ yêu thích trong số các khách sạn trong hện thống Vinpearl Phú Quốc. VinOasis Phú Quốc được thiết kế với mô hình “All In One”, lấy cảm hứng từ “Khu vườn giữa lòng đại dương” với lối kiến trúc đương đại kết hợp phong cách kiến trúc Á Đông. Điểm khiến du khách mê mẩn nhất ở khách sạn này là bể bơi hình ốc anh vũ. Đây cũng chính là góc sống ảo thần thánh mà hầu hết các bạn trẻ đến đây đều không muốn bỏ lỡ.

Khách sạn Vinholidays Fiesta Phú Quốc
Vinholidays Fiesta Phú Quốc là một trong những sản phẩm mới được ra mắt thuộc hệ thống Vinpearl Phú Quốc. Khu nghỉ dưỡng ra đời nhằm đáp ứng nhu cầu của các khách hàng muốn có một kỳ nghỉ dưỡng với chi phí hợp lý nhưng vẫn đảm bảo đầy đủ tiện nghi và dịch vụ đẳng cấp.

Khác với những khu resort trước, Vinholidays Fiesta Phú Quốc mang phong cách thiết kế tối giản, hiện đại với các tiện ích, dịch vụ thông minh thuộc top đầu Việt Nam. Đặc biệt, với vị trí đặt tại khu phức hợp giải trí mới Grand World Phú Quốc, Vinholidays Fiesta Phú Quốc còn được thừa hưởng toàn bộ tiện ích và dịch vụ 5 sao tại khu vực này, giúp chuyến đi Phú Quốc của bạn có được những trải nghiệm tuyệt vời hơn.
Khách sạn Vinpearl Resort & Spa Phú Quốc
Nổi bật với những căn biệt thự mái ngói đỏ, Vinpearl Resort & Spa Phú Quốc mang đậm phong cách kiến trúc Á Đông tạo nên một nét riêng biệt không hề trộn lẫn với những khu resort khác trong quần thể khách sạn Vinpearl. Ngoài dễ dàng di chuyển tới siêu quần thể Phú Quốc United Center thì Vinpearl Resort & Spa Phú Quốc còn được lòng du khách bởi các trải nghiệm như: trị liệu tại một chòi spa trên mặt hồ theo phong cách Maldives hay thưởng thức bữa tối BBQ hải sản trong lúc ngắm hoàng hôn ngũ sắc và nghe nhạc sống tại nhà hàng Pepper...
Khách sạn Vinpearl Resort & Golf Phú Quốc
Vinpearl Resort & Golf Phú Quốc được mệnh danh là “nơi ngắm hoàng hôn đẹp nhất Phú Quốc”. Khu nghỉ dưỡng này đẹp mê hoặc và sang trọng với thiết kế mang phong cách kiến trúc châu Âu tân cổ điển. Điểm nổi bật nhất và thu hút khách nhất của Vinpearl Resort & Golf Phú Quốc là sân golf 18 hố tọa lạc giữa khu vườn nhiệt đới với tầm nhìn khoáng đạt ra Biển Đông bao la tạo nên một cảnh quan đẹp như tranh vẽ.',

    ]);

         Article::create([
            'title' => 'Du lịch miền Tây mùa nước nổi săn các sản vật đồng quê',
            'category_id' => 3,
            'thumbnail' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636982496/FnGO/article/background/camnhi-215922125904-an-giang_zx3rtp.jpg',
            'background' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636982511/FnGO/article/thumbnail/camnhi-215122125147-du-lich-mien-tay-mua-nuoc-noi_b8uo6p.jpg',
            'user_id' => 1,
            'abstract' => 'Khi cái gay gắt của nắng hạ không còn thiêu đốt cũng là lúc miền Tây bước vào mùa nước nổi mang theo những sản vật có một không hai. ',
            'content' => 'S Mùa nước nổi miền Tây thực chất là mùa lũ, nhưng mùa lũ miền Tây hoàn toàn khác với miền Trung hay miền Bắc. Mùa lũ vùng Đồng Bằng sông Cửu Long không hung giữ và gây ra thiệt hại nhiều. Đổi lại, mùa lũ về là lúc nguồn nước thay chua rửa mặn cho các kênh rạch, bù đắp phù sa cho những cánh đồng, đặc biệt là đem lại một nguổn thủy sản sông nước vô tận cho người nông dân.
Mùa nước nổi miền Tây thường bắt đầu khoảng gần giữa tháng 9 đến giữa tháng 11 dương lịch hằng năm (tức từ tháng khoảng tháng 8 đến tháng 10 âm lịch). Du lịch miền Tây vào mùa này, bạn không chỉ được chiêm ngưỡng bức tranh nên thơ một năm chỉ có một lần này mà còn có cơ hội được thưởng thức những món đặc sản mùa nước nổi đặc trưng và trải nghiệm chèo xuồng len lỏi qua từng con rạch rất thú vị.

Nếu có dịp đi tour du lịch miền Tây mùa nước nổi, bạn nhất định phải một lần đến những địa điểm này và trải nghiệm các món đặc sản trứ danh mùa này nhé.
Nói đến cảnh đẹp mùa nước nổi thì không thể không nhắc đến An Giang, nhắc đến rừng Tràm Trà Sư xanh mướt – một trong các địa điểm du lịch miền Tây nổi hút khách nhất vùng này. Mùa này, bèo phát triển phủ kín mặt sông. Để khám phá rừng tràm, bạn sẽ được trải nghiệm ngồi trên chiếc tắc ráng len lỏi theo con rạch qua lung Sen vào rừng tràm, được lên xuồng ba lá chèo qua các con rạch ngắm khu rừng Giống và các loài chim le le, trích cồ, cò, bìm bịp, gà nước... Thỉnh thoảng, bạn sẽ ngắm nhìn những bông hoa điên điển vàng rực, loài hoa dân dã nhưng có thể chế biến ra nhiều món ăn vô cùng ngon.

Bên cạnh vẻ đẹp tự nhiên, rừng tràm Trà Sư còn có những công trình nhân tạo tuyệt đẹp. Đó là chiếc “cầu tre vạn bước” xuyên rừng tràm Trà Sư đạt kỷ lục Giuness và đài quan sát cao 23m ngắm toàn cảnh rừng tràm và từng đàn chim rợp trời về tổ dưới hoàng hôn...
Rời An Giang đến với rừng Tràm Chim Đồng Tháp chắc chắn bạn sẽ say đắm trước khung cảnh ngập nước, xanh tốt, điểm xuyến sắc hồng của hoa sen, hoa súng bừng nở. Chèo xuồng ba lá trải nghiệm cuộc sống vùng ngập nước, bạn sẽ được tự tay thực hiện những công việc sinh kế của cư dân vùng lũ như giăng lưới, đặt lợp, đặt trúm, hay thử tài với câu cá Tràm Chim Tam Nông … đặc biệt còn có thú vui đi săn chuột đồng, một món đặc sản của xứ này. Vào khoảng thời gian này cũng là mùa chim sinh sản, bạn sẽ có dịp tận mắt chứng kiến cuộc sống sinh sôi, nảy nở của những loài chim và cảnh hàng nghìn con chim đua nhau mớm mồi, thể hiện tình mẫu tử thiêng liêng và lưu giữ mãi hình ảnh đẹp về nơi đất lành chim đậu ở địa điểm du lịch miền Tây nổi tiếng này.',
        ]);

           Article::create([
            'title' => 'Hành trình du lịch Nhật Bản mùa lá đỏ quyến rũ',
            'category_id' => 3,
            'thumbnail' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636982762/FnGO/article/thumbnail/camnhi-213120093150-hanh-trinh-mua-thu-nuoc-nhat_svzu87.jpg',
            'background' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636982772/FnGO/article/background/camnhi-213320093329-shutterstock_527893747-Hokkaido_em6hcw.jpg',
            'user_id' => 1,
            'abstract' => 'Cùng vẻ đẹp cổ kính của những di sản văn hóa lừng danh, du lịch Nhật Bản mùa thu còn khiến người lữ khách rung động bởi sự thay đổi diệu kỳ của thiên nhiên.',
            'content' => 'Fukushima, nơi trái tim “chạm” đến vẻ đẹp tinh túy, nguyên sơ của tự nhiên
           Fukushima ngày thu có những góc nhỏ duyên dáng ẩn sâu trong cánh rừng chuyển sắc vàng đỏ, hồ nước biếc xanh cùng ngàn hoa rực rỡ… sẽ khiến bạn xiêu lòng. Du lịch Nhật Bản mùa thu đến Fukushima, dừng chân tại công viên Kairakuen nổi tiếng, bạn sẽ thấy thiên nhiên khoe sắc sáng bừng khoảng trời với bạt ngàn hàng cây thay lá. Khắp lối mòn, cây được trồng xen lẫn với những bông cải vàng rực tạo nên một bức tranh diễm lệ. Nếu du ngoạn Hồ Ngũ Sắc Goshikinuma bạn càng say đắm hơn trước vẻ đẹp kỳ ảo của màu nước thay đổi liên tục, điểm tô cho cho mặt hồ là những chiếc là vàng, lá đỏ rơi rụng nhẹ trôi theo dòng nước.
Vườn Kenrokuen cổ kính trong ngày thu

Được ví như Kyoto thu nhỏ, Kanazawa mang nét quyến rũ bởi những ngôi đền cổ kính và khu vườn truyền thống, trong đó xuất sắc nhất phải kể đến Kenrokuen - một trong ba khu vườn vĩ đại nhất của du lịch Nhật Bản. Dạo bước ngắm lá đỏ, bạn sẽ cảm nhận khung cảnh ở phía đông gần cổng Kodatsuno đẹp như một bức tranh tuyệt mỹ. Hãy chọn cho mình chiếc ghế đá để ngắm cảnh nên thơ hay nhâm nhi tách trà, thưởng thức món bánh ngọt truyền thống của Nhật.
Đẹp mơ màng thung lũng Korankei
Mùa thu ở Nagoya cũng đẹp không kém phần với thung lũng Korankei quyến rũ. Từ cuối tháng 10 đến hết tháng 11, tại địa điểm du lịch Nhật Bản này, bạn sẽ được tận hưởng không gian lãng mạn được tạo nên từ hơn 4.000 cây phong npha màu nâu đỏ làm thay đổi cả thung lũng, vẽ nên một bức tranh thiên nhiên tuyệt mỹ. Không khí tại Korankei cũng rất trong lành và dễ chịu. Những cây cầu Taigetsukyo sơn màu đỏ bắc qua sông, những chiếc ghế gỗ, những ngôi nhà nhỏ ven đường sẵn sàng làm nơi dừng chân thưởng ngoạn sắc thu và lưu lại những bức hình tuyệt đẹp...
Đảo Hokkaido thay áo mới

Không chỉ gây sức hút nhờ cánh đồng hoa oải hương tím vào mùa hè hay tuyết phủ trắng xóa vào mùa Đông, Hokkaido còn là nơi có vẻ đẹp thơ mộng vào mùa lá đỏ ở Nhật Bản. Những ngọn núi hùng vĩ sẽ khoác lên mình sắc đỏ rực lửa cùng sắc vàng rực rỡ tạo nên bức tranh như truyện cổ tích. Người dân địa phương còn háo hức tham dự Lễ hội lá phong (Momiji Matsuri) tổ chức hàng năm vào thời điểm rừng cây thay lá.',
        ]);

             Article::create([
            'title' => 'Kinh nghiệm du lịch Đà Lạt mùa hoa Dã Quỳ khoe sắc',
            'category_id' => 3,
            'thumbnail' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636983149/FnGO/article/thumbnail/camnhi-214218104254-kinh-nghiem-du-lich-da-lat-mua-hoa-da-quy_axsexe.jpg',
            'background' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636983161/FnGO/article/background/camnhi-214418104453-san-may-da-lat_ea9qir.jpg',
            'user_id' => 1,
            'abstract' => 'Khi những cơn mưa “lặng lẽ” rời đi, trả lại nắng vàng cho Đà Lạt cũng là lúc thành phố mù sương khoác lên mình chiếc áo rực rỡ của những màu hoa. ',
            'content' => '
Khoảng thời gian giữa thu, khi dã quỳ ở nhiều nơi đồng loạt nở rộ, thì có lẽ những bông hoa nở sớm và đẹp nhất chính là ở cao nguyên Đà Lạt. Đối với những tâm hồn lãng mạn, yêu hoa thì mùa này cũng được xem là mùa đẹp nhất của Đà Lạt. Dù chỉ là loài hoa dại sống giữa lớp đất đai khô cằn hay ẩn hiện trong làn sương mai, hoa dã quỳ vẫn tự tin vươn mình khoe sắc, thu hút bao ánh nhìn và níu giữ du khách đi đường đến nâng niu, thưởng ngoạn.
Vietravel Đà Lạt mách nhỏ những cung đường ngắm hoa dã quỳ đẹp
Thời gian này, khắp nơi ở Đà Lạt, từ những triền đồi phía xa, các con dốc ngoằn nghèo dẫn lên cao nguyên đến từng ngõ nhỏ của phố núi sẽ trở nên lung linh, thơ mộng và bình yên hơn trong sắc vàng rực rỡ. Tuy nhiên, theo kinh nghiệm du lịch Đà Lạt cùng Vietravel – Vietravel Đà Lạt thì để ngắm trọn vẻ đẹp của hoa dã quỳ bạn nên đến 1 trong 2 cùng đường là:

+ Đà Lạt – Làng hoa Vạn Thành – Tà Nung – Thác Voi – Langbiang

+ Đà Lạt – Cầu Đất – Đ’ran – Đơn Dương – Châu Sơn – Phi Nôm – Tu Tra

Mùa này, du lịch Đà Lạt ngoài được ngắm hoa dã quỳ bạn cũng có thể kết hợp “săn mây” rất dễ.
Ngất ngây mùa “săn mây” Đà Lạt

Du lịch Đà Lạt những ngày lập đông, dù cái thời tiết có phần lạnh những ngày nắng hạ, nhưng cũng đừng vì thế mà cứ rút mình trong chăn bạn nhé, vì như thế bạn sẽ bỏ lỡ một điều vô cùng tuyệt vời mùa này là “săn mây” đấy. Bởi du lịch Đà Lạt tháng 11 cũng là thời điểm “săn mây” lý tưởng, mây giăng khắp ngõ ngách của thành phố với những căn nhà ẩn hiện lúc bình minh. Để có được những khoảnh khắc ấn tượng nhất, bạn hãy đi xa hơn một chút đến các vùng ngoại ô như Đồi Trại Mát, Hồ Suối Vàng, Đồi Thiên Phúc Đức, Hòn Bồ, Đỉnh Pinhatt, Đồi chè Cầu Đất, Đồi Du Sinh…

Muốn săn mây đẹp bạn thì tầm khoảng 4h30 sáng, vì thế bạn có thể lựa chọn cắm trại đêm để vừa được chill cùng núi rừng bằng những tiệc BBQ cùng hội bạn, vừa khỏi phải lọ mọ thức dậy thật sớm để di chuyển. Vì chỉ tầm 7h hơn là mây đã tan bớt, thế nên càng dậy sớm sẽ ngắm được nhiều khoảnh khắc đẹp mà cứ ngỡ chỉ có trong tranh ảnh.
Chèo thuyền SUP ngắm lá phong và hoàng hôn ở Hồ Tuyền Lâm
Mùa này Hồ Tuyền Lâm rất đẹp. Du lịch Đà Lạt mon men vào giữa rừng sâu bạt ngàn của Hồ Tuyền Lâm bạn sẽ phát hiện ra nơi đây có rất nhiều những cây lá phong đỏ, vàng rợp trời mà bạn cứ ngỡ chỉ được thấy ở xứ người. Mặc dù hành trình không hề dễ dàng, do vừa phải chèo thuyền SUP/kayak, băng rừng, vượt dốc... nhưng khi được tận mắt nhìn thấy những cây lá phong đỏ rực giữa rừng núi thì bạn mới thấy bỏ bao nhiêu công sức quả thật cũng xứng đáng.

Sau khi thuyền dừng trên bán đảo nhớ chụp lại vài tấm hình sống ảo cùng cảnh sắc tuyệt đẹp này nha. Hồ Tuyền Lâm còn được xem là 1 trong 5 địa điểm ngắm hoàng hôn đẹp nhất ở Đà Lạt, vì thế đã đến đây rồi thì bạn đừng bỏ lỡ cơ hội hòa mình trọn vẹn vào không gian thiên nhiên dưới màu hoàng hôn quyến rũ.',

    ]);

    }
}
