<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{

    public function index()
    {
        $params = [
            'url' => 'https://tsh.gemduck.tech/api/user/look-up-pdf-test/5b99557e-55d5-4dcb-987c-39f998a6f48b',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzA4OTI3NjQ1LCJleHAiOjE3MTE1MTk2NDV9.GE5yMzCpAYUK3ILCdpQ9JlBuSfU4ro-Jolfj8bxXCoI'
        ];
        $data = $this->getData($params);
        $strengthTWO = [];
                    $jsonStrength =
                        '[{"key":1,"title":["Bạn thuộc về tuýp người gặp một ít khó khăn trong việc tự diễn đạt bằng ngôn ngữ. Điều này không có nghĩa là bạn không nói tốt, mà là bạn khó diễn đạt được cảm xúc nội tâm mình. Bạn có thể nói rất lưu loát, mạnh mẽ về các đề tài không liên quan đến diễn đạt cảm xúc cá nhân, nhưng cảm thấy để diễn tả về mình hoặc những gì mình đang cảm thấy, thật không biết làm sao mà nói. Chỉ khi nào đủ trưởng thành và thấu hiểu mọi chuyện hơn, điều này mới được cải thiện. Đôi khi, trước một tình huống, bạn sẽ phát ra những lời nói hoàn toàn trái ngược với những gì trong lòng bạn thực nghĩ, theo một cách diễn đạt khá ‘sắc nhọn’, dễ làm người khác tổn thương hoặc thấy xúc phạm. Điều này ắt làm trầm trọng hóa vấn đề ban đầu, đưa đến những cuộc cãi vã, tranh luận gay gắt. Bạn cần học suy nghĩ cẩn trọng trước khi phát biểu, và cần học phản ứng chậm lại trước các ý kiến, lời phê bình..., bởi lời nói đã phát ra khó thu hồi lại được, mà cảm giác thương tổn cũng khó mà hàn gắn. Về cuộc sống, những người có một số 1 thường hay cảm thấy thiếu thiếu một điều gì đó trong cuộc sống, cho dẫu thoạt nhìn bạn rất đủ đầy ở một số mặt.","Người có hai số 1 (11) là người may mắn nhất trong cả nhóm, bởi sự cân bằng trời cho trong việc diễn đạt nội tâm. Đây là một đặc điểm đầy giá trị trong biểu đồ ngày sinh mà bạn nên sử dụng một cách khôn ngoan – không bao giờ lạm dụng nó cho mục đích áp đảo người khác. (Luôn nhớ ý thức tránh bực bội hay coi thường những người không được may mắn (có 11 giống bạn), đặc biệt là nếu bạn đang yêu hoặc kết hôn với một người không được có 11). Người có 11 thường có khả năng nhìn nhận các vấn đề hay các cuộc tranh luận, tranh cãi theo cả hai mặt đối lập, và vì vậy, bạn hoàn toàn có khả năng đổi hướng giữa chừng nếu trong một cuộc thảo luận, bạn cảm thấy quả thật hướng đối nghịch thực sự mang lại giá trị lớn lao hơn. Điều này khiến cho bạn không bị sa vào bảo thủ khư khư giữ ý kiến mình khiến tầm hiểu biết bị giới hạn một chiều, mà cũng không bị ‘chấp’ với những điều mình cho là ‘lỗi’, là ‘sai’ ở người, dễ tha thứ cho người. Điều này tạo cho bạn điều kiện lĩnh hội được nhiều kiến thức rộng lớn hơn, khả năng thấu hiểu lòng người cũng sâu hơn. Hệ quả là: bạn thường dễ có cuộc sống cân bằng, an vui, nói vui là “Ok I’m fine”, dẫu cho cuộc sống có thế nào. Chính vì những yếu tố tích cực và dung hòa, cân bằng này mà người có hai số 1 dễ tìm thấy trong các chính trị gia thành công hoặc những người của công chúng, người nổi tiếng. Yếu tố hai số 1 làm nổi bật khả năng nhận thức, thấu hiểu con người, cũng như khả năng diễn đạt bản thân mình, giảm thiểu khả năng bị hiểu lầm hoặc hiểu lầm người khác, và khả năng nhìn nhận các vấn đề một cách đa chiều, không phiến diện.","Với những người có ba lần số 1 trở lên được lặp lại trong ngày sinh, có hai khả năng khá đối lập xảy ra trong thực tế. Thường gặp nhất là những người... rất yêu nói, nói rất nhiều,thường có mặt trong rất nhiều hoạt động sôi nổi mà trong đó, họ trở nên nổi bật, thú vị. Nhìn chung bạn thấy cuộc sống dễ chịu và hay cố gắng chia sẻ điều đó với những người xung quanh mình.Nhóm thứ hai thuộc về một số người, cũng có ba số 1 trở lên, nhưng lại trống nguyên hàng ngang chính giữa là trục Tinh thần (tức vắng mặt các số 2,5,8). Những người này thường hay im lặng, khá hướng nội, khá bẽn lẽn, đặc biệt với người lạ. Tuy vậy những người này cũng sẽ trở nên hoạt bát và nói nhiều trong những lúc họ cảm thấy thân tình, dễ chịu, trong một nhóm bạn bè thân hay người thân trong nhà. Những người này cảm thấy họ diễn đạt những cảm xúc cá nhân hay nội tâm tốt hơn thông qua việc viết xuống tâm tình mình, bằng cách này những tư tưởng của họ liền mạch hơn, không bị sự nhạy cảm quá mức của họ làm cho cản trở. Nếu bạn thuộc nhóm này mà chưa biết sức mạnh của khả năng viết lách của mình, hãy thử nhé. Còn một khả năng nữa ở những người này đó là... tâm trạng lúc vui lúc buồn. Mà tùy theo những yếu tố khác trong biểu đồ ngày sinh tác động mà tỉ lệ ‘vui – buồn’ này gia giảm"]},{"key":2,"title":["Biểu đồ có mỗi một con 2 chỉ một mức độ trực giác cơ bản, nhưng không phải lúc nào cũng đủ trong thế giới đầy tính cạnh tranh này, đặc biệt là đối với đàn ông. Với muôn mặt xã hội hiện giờ đang chú trọng nhiều vào những giá trị nhân tạo, mỗi cá nhân cần phải tự uyển chuyển lắm mới khớp được vào guồng chung, mới mong cạnh tranh thành công. Và điều này không thể có được nếu không có một mức độ nhạy cảm cân bằng cao. Nếu không có sự cân bằng, những người mang bản chất nhạy cảm sẽ dễ dàng bị tổn thương, và thường vì thế đưa ra những phản ứng thiếu khôn ngoan. Giới đàn ông thường dễ chịu tình trạng này hơn phái nữ. Một con 2 cung cấp một nền tảng giá trị cho việc phát triển tính nhạy cảm cân bằng, nhưng giá trị cân bằng lý tưởng nhất nằm ở cặp đôi 22 nha. Phái nữ có một con 2 thì vẫn ổn, bởi trời sinh phái nữ vốn đã... đủ nhạy cảm rồi. Nhìn chung, người có một con 2 thường dễ cảm thấy họ cần nhiều thời gian để thư giãn, ở ngoài thiên nhiên và tránh xa môi trường cạnh tranh căng thẳng.","Trực giác và độ nhạy cảm lý tưởng này sẽ cho phép người có cặp 22 đạt được trí thông minh trên mức trung bình, dựa trên khả năng thấu hiểu trời cho đối với con người và vạn tình huống xảy ra. Khi cần cái gọi là ‘ấn tượng đầu tiên’, trực giác của những người này cực đáng tin cậy, với độ chính xác và nhanh chóng đáng kinh ngạc. Người khác đối với họ là chân thành hay không, họ đều nhận ra được ngay, miễn là họ không để cái tôi hay trí tưởng tưởng của họ nhảy vào và tô màu, làm biến màu trực giác nguyên thủy họ có. Sự cân bằng trong độ nhạy cảm xuất phát từ trực giác này, nếu được diễn đạt tích cực, sẽ có khuynh hướng kéo họ vào rất nhiều mặt của cuộc sống. Thường họ sẽ xử lý những việc này rất suôn sẻ, thành công, nhưng họ cũng cần để ý để tránh bị liên quan vào quá nhiều vụ việc, vì việc nào cũng đáng làm. Nếu cứ mê mải lao vào những việc đều cần làm này, hạnh phúc gia đình có thể chịu phương hại. Và nên nhớ, việc gì cũng phải nhớ giữ cân bằng, cân bằng là chìa khóa mở cửa thành công.","Một khi đã gọi là ‘vượt ngưỡng cân bằng’, chúng ta sẽ bị quá đà. Người có ba số 2 trở lên trong biểu đồ ngày sinh thường chịu sự nhạy cảm không cân bằng, một sự quá mức có thể phát triển thành một dạng gánh nặng tâm lý khó thể chịu nổi. Điều này có nghĩa là người này rất dễ bị tác động bởi tâm trạng của người khác, hậu quả là khả năng rất cao luôn bị lôi kéo sâu vào các vấn đề, các trục trặc của người khác. Để đảm bảo một chế độ tự bảo vệ đầy nhạy cảm, những người này hay bỏ nhiều thời gian chìm đắm trong thế giới riêng của mình, qua đó lộ ra vẻ đơn độc mà nếu để lâu, dần dà phát triển thành sự cô độc. Nhiều người với ba số 2 trở lên làm việc trong ngành giải trí sẽ dễ dàng chạm tới thành công khi áp mình vào khắc họa tính cách của những nhân vật khác nhau. Tuy vậy, nói nôm na là đôi khi quá nhập tâm vào các vai diễn, họ khó trả vai ra được, khiến họ luôn cảm thấy tổn thương. Từ điểm này, lúc nào họ cũng tìm cách tự vệ mình, hay phát biểu một số câu bốc đồng khiến tổn thương người khác. Trẻ có ba số 2 trở lên thường bắt chước người khác rất giỏi, và chúng luôn có bản năng tự nhiên muốn chia sẻ những cảm giác của người khác. Tuy vậy, việc cảm xúc cứ trồi trồi sụt sụt theo cảm giác, vui buồn của người khác cứ như suốt ngày nhảy lên chơi trò chơi tàu uốn lượn khiến chúng mệt mỏi và mất cân bằng, nên việc này cần được các bậc cha mẹ quan sát và hướng dẫn con cẩn thận. Bởi nhiệm vụ quan trọng của các bậc cha mẹ là giúp con có được nền tảng vững chắc về sự tự tin, cùng với định hướng đường đời theo con số chủ đạo mà ngày sinh con cộng ra."]},{"key":3,"title":["Được ví như một cái ‘mỏ neo’ trụ chặt trí nhớ, con số 3 duy nhất ở biểu đồ ngày sinh giúp cho một người có trí nhớ rất tốt và lâu dài, miễn là nó được nhớ mà mang ra sử dụng (trong quá trình tiến hóa, cái gì không được dùng thường xuyên sẽ dần bị teo lại). Con số 3 duy nhất giúp người này giữ được sự nhanh nhạy trong hoạt động trí não. Các bạn nhỏ có một số 3 sẽ rất có lợi thế trong việc học tập, cả học chính thức và học hỏi ngoài đời. Họ sẽ luôn chủ động quan tâm tới cuộc sống và môi trường họ đang sống. Người có một số 3 cũng sẽ rất linh hoạt và thường sống khá tích cực, và đem năng lượng tích cực này thổi vào hầu hết công việc mà họ làm. Họ cũng có mức tự tin trên mức trung bình, điều này cũng góp phần không nhỏ vào thành công của họ trong cuộc sống.","Nhân đôi độ nhạy về phần trí não, người có hai con ba trong biểu đồ ngày sinh dễ trở nên giàu trí tưởng tượng và tăng khả năng văn chương. Tuy vậy, những sức mạnh này cần được theo dõi chặt chẽ để có thể phát triển chúng theo hướng tích cực và cân bằng nhất, tránh khả năng đi theo hướng tiêu cực, dễ có những hành vi (phản kháng xã hội). Để kích hoạt được khả năng tự kỷ luật cho bản thân, người có hai số 3 nên thực hành thiền tĩnh tâm những khi có thể, cùng với những bài tập luyện trí nhớ, và bài tập luyện phát triển trực giác. Những điều này, nói nôm na giống như ‘kéo bớt’ người có 33 về với thực tế, với tính chất xây dựng và tích cực hơn. Chứ nếu không, đầu óc quá nhạy chiều tưởng tượng của những người này sẽ làm hỏng cái nhìn khách quan hay một tầm hiểu biết toàn diện. Mà nếu cứ tiếp tục nuông chiều óc tưởng tượng, suy diễn của mình, dần dà họ mất luôn tính thực tế. Người có hai hay ba số 3 trong biểu đồ ngày sinh thường có khả năng viết lách đáng kể. Nếu được khích lệ, họ có khả năng viết xuất sắc, khai thác được nhiều nguồn chất liệu dồi dào, và hoàn toàn có khả năng đưa kỹ năng này thành một công việc nghiêm túc có thể mang về thu nhập đáng kể","Người có ba số 3 trở lên trong biểu đồ ngày sinh có sự nhạy bén tâm trí vượt mức bình thường Họ thường nghĩ về tương lai và khó tập trung vào hiện tại. Họ thường hay bị quá căng thẳng và xao lãng, khó tin tưởng người khác cũng bởi độ nhạy bén trong tâm trí họ đã trở nên quá cao. Do đó, họ khó có bạn thân, khó có hạnh phúc. Người có ba số 3 trở lên thường dễ đắm chìm vào tâm tưởng, quên mất hiện tại."]},{"key":4,"title":["Người có một số 4 trong biểu đồ ngày sinh là những người rất chủ động, làm việc gì cũng hăng hái, thực tế, bao gồm các hoạt động có liên quan đến các khâu tổ chức, kỹ thuật, tài chánh hay hoạt động thể chất như làm vườn, các nghệ thuật tạo hình từ đôi tay, xây dựng, vv... Ở đây con số chủ đạo của họ sẽ bao trùm lên để khi bạn ghép hai yếu tố này lại, cái gì rõ nét ở cả hai yếu tố sẽ được ưu tiên chọn lựa để theo đuổi. Những người có một số 4 sẽ thích nhào vô làm việc phần thực tế hơn là ngồi nghiền ngẫm các hệ thống lý luận, và đặc biệt, những người này sẽ dễ hoài nghi, không tin nếu họ thấy hay nghe cái gì có vẻ quá mơ hồ, trừu tượng. Họ thích thực tế hơn lý thuyết, và dễ mất kiên nhẫn với những ai thất hẹn. Họ thích nhào vô xúc tiến công việc ngay lập tức và điều này gần như trở thành điều ‘bất di bất dịch’ ở họ, đặc biệt là khi họ có thêm một con số 7 nữa trong ngày sinh của mình. Nếu quan tâm quá nhiều đến khía cạnh thể chất có thể khiến những người có một số 4 trở nên hơi qua thiên về vật chất. Điều này có thể là một khía cạnh tiêu cực của số 4, mục đích là để dạy cho những người có số này học cách dùng lòng kiên nhẫn tự nhiên của mình để tránh chạy theo chủ nghĩa vật chất. Điều này đạt được cao nhất thông qua việc phát triển sự quan tâm và lòng trắc ẩn lòng thương của mình với những người khác. Nói một cách khác, bạn càng học quan tâm và thương người khác nhiều thêm chừng nào, tự nhiên dần dần bạn sẽ không còn màng nhiều đến những giá trị vật chất quanh mình nữa. Và bằng cách này, bạn sẽ đạt được tình bạn, hay hạnh phúc lâu dài.","Nhân đôi số 4 có thể làm những người có cặp số 4 trong ngày sinh dễ có cái nhìn không cân bằng về cuộc sống, trong đó họ hay quy mọi cái về các giá trị thực tế và vật chất. Vậy điều người có hai số 4 cần học là cách hài hòa mọi cái cho cân bằng giữa ba mặt: thể chất/vật chất, tinh thần, và trí não. Như vậy họ sẽ thấy thoải mái khi sống với cảm xúc hay tư duy hơn. Nếu những người này có Con số chủ đạo là một trong các trục Tâm hồn (số 2,5,8) hoặc trục Trí não (số 3,6,9), những người này có khả năng vươn lên để cảm nhận các vấn đề về tinh thần hay trí não cao hơn những người cũng có con số chủ đạo là một số thuộc trục Thể chất (các số 4,7). Nói chung, càng có nhiều số 4, càng cần phải học cách cân đối ba yếu tố đã nhắc trên, và khi chọn bạn bè, cần phải để ý tránh xa các bạn bè có khả năng tác động tiêu cực đến bạn. Ngược lại, nếu bạn chọn được những người bạn biết trân trọng những giá trị thẩm mỹ, văn hóa, đạo đức của cuộc, thì cuộc đời của bạn cũng sẽ được cân bằng nhanh về hướng tốt đẹp","Người có ba số 4 trở lên thường bị cột chặt vào vật chất, bị lôi kéo bởi các giá trị vật chất. Họ thường lao vào kiếm tiền, làm việc cực nhọc, áp lực liên tục và trở thành tôi tớ của đồng tiền."]},{"key":5,"title":["Nếu có được một con số 5 trong biểu đồ ngày sinh, người ta sẽ có cơ hội tốt nhất đạt được một cá tính cân bằng. Đây cũng là con số duy nhất đảm bảo tất cả các con số nằm ở bốn góc biểu đồ (1,3,7,9) không bị trống ba bề, để có nguy cơ rơi vào thế ‘Con số đơn độc’ (Isolated numbers). Đặc biệt, người có con số này thường kiểm soát cảm xúc rất tốt, bởi nó đảm bảo sự nhạy cảm với cuộc sống ở con người này phát triển vừa phải để làm một nguồn hướng dẫn thiên về trực giác đáng tin cậy. Điều này cho phép họ xuất sắc hơn trong việc chọn lựa những điều nên làm, hơn là bốc đồng phản ứng lại các tình huống một cách thiếu suy nghĩ. Như một rào bảo vệ đầy giá trị với sự nhạy bén, một con số 5 kích hoạt mạnh mẽ tính can trường và lòng trắc ẩn, qua đó tạo ra một cá tính đầy mạnh mẽ. Nó cũng tạo ra sức mạnh của lòng thương và tự do để thúc đẩy mạnh thêm giá trị của tất cả những hình thức biểu hiện khác. Số 5 duy nhất có mặt trong biểu đồ cũng hỗ trợ cá nhân chủ nó hiểu thấu những cảm giác của chính họ, và vì thế phát triển được một sự trân trọng sâu sắc với cảm nhận của những người khác.","Người có hai con 5 trong biểu đồ ngày sinh thường được nhận dạng bởi tính căng thẳng, thể hiện ra bên ngoài bằng đôi mắt nhìn trừng và đôi lông mày hay nhíu lại. Quyết tâm được sắt lại tạo cho họ một vẻ rất tự tin, mà đôi khi mạnh hơn thực tế. Khi họ trưởng thành, tính tự tin này nếu không có ý thức kiểm soát dễ bị phát triển thành tính tự tôn, và họ cảm thấy khó chịu được những vấn đề về tình cảm/cảm xúc, về nghề nghiệp hay gia đình... vốn thỉnh thoảng vẫn xuất hiện trong cuộc đời họ. Họ cần để ý không bị làm trầm trọng hóa các vấn đề này và giữ cho mọi việc nhẹ nhàng như nó vốn dĩ như vậy. Đôi khi mãnh lực và sự nhiệt tình ở những người có hai số 5 trở nên không thể chịu nổi, và bùng ra những sự hiểu lầm hay nổi giận nơi những người thân gần với họ. Đôi khi do quá nghiêm túc thể hiện qua thái độ hay lời nói, họ tạo ra những ‘cục rối’ cảm xúc trong môi trường họ sống rồi từ đó bị phát triển các vấn đề sức khỏe có liên quan đến khu vực bụng. Họ thường xuyên chịu chứng khó tiêu. Những người hai số 5 cần chú trọng quản lý cảm xúc, nếu không họ dễ sa đà vào các chất hay thói quen gây nghiện để giải tỏa bớt những năng lượng cảm xúc bị dồn nén của mình.","Người có ba số 5 trở lên thường mạnh mẽ kiên định, nhưng đôi lúc tự tin thái quá, dễ có xu hướng nghiêm trọng hóa vấn đề. Họ cần học cách bày tỏ, giải tỏa cảm xúc."]},{"key":6,"title":["Là một con số chỉ óc sáng tạo, diễn đạt phổ biến nhất của những người có một con 6 là tình yêu sâu đậm với gia đình, hoặc mái ấm nhà mình. Tuy vậy, khi diễn đạt thành hành động hay thái độ cụ thể, nó có thể diễn dịch thành những điều nghệ thuật hơn, như sáng tác, biểu diễn, vẽ tranh, làm gốm... về những đề tài gia đình. Người có một số 6 rất tập trung và có trách nhiệm với gia đình. Tuy vậy, khi trưởng thành hơn, những người này cảm thấy chỉ trách nhiệm với gia đình thôi chưa đủ. Và họ sẽ tỏa sức mạnh của họ ra thêm nhiều lĩnh vực nữa để diễn đạt cho thỏa tính sáng tạo của mình, hoặc họ sẽ tiếp tục thắc mắc vì sao họ mãi vẫn chưa nhận được điều có thể thỏa những gì họ khát khao. Khi họ phát hiện ra các thể loại nghệ thuật phù hợp với họ và đặc biệt sức mạnh sáng tạo của âm nhạc, cuộc sống của họ sẽ thăng hoa một cách đáng kinh ngạc.","Tùy thuộc vào con số chủ đạo và nhiều yếu tố khác nữa trong ngày sinh của mỗi người, mà người có hai con 6 trong biểu đồ ngày sinh chịu một trong hai khả năng: hoặc là một người tính khá ‘bướng’, hoặc là một người chịu khuyết tật hoặc bệnh tật về một mặt nào đó. Và cũng tùy thuộc vào các yếu tố môi trường sống, đặc biệt là ảnh hưởng của cha mẹ lên con cái trong giai đoạn đầu đời, mà mỗi cá nhân của trường hợp này có thể vượt qua điều này thế nào. Với người có ý thức kém hơn, những khía cạnh tiêu cực thể hiện khá rõ nét, như sự lo lắng, bồn chồn, stress, dễ nóng giận, đặc biệt là ở nhà hay ở chỗ làm. Những người thân những người thương xung quanh họ cảm nhận sự tiêu cực này rõ nhất, và bởi vì tất cả đều liên quan với nhau, điều này tạo ra môi trường khá căng thẳng thần kinh, thậm chí bệnh tật. Để hóa giải điều này, tốt nhất là hướng mối quan tâm của họ vượt ra ngoài những ngưỡng giới hạn trong gia đình để vươn tới những lĩnh vực sáng tạo đa dạng hơn, bất kể là dạng gì, đều tốt cả. Nghề nghiệp của những người có hai số 6 trong ngày sinh nên theo những ngành chú trọng tính sáng tạo, được gợi cảm hứng bởi sự tự tin và thấu hiểu sâu về một vấn đề. Họ cần được hướng dẫn nhẹ nhàng trong mọi trường hợp, không bao giờ được hối thúc hay đe dọa họ. Với họ, lúc nào cũng cần những lời ăn tiếng nói nhẹ nhàng, đầy yêu thương và thấu hiểu, xoa dịu nhẹ hệ thống dây thần kinh rất nhạy của họ. Những người này cần thư giãn nghỉ ngơi nhiều nhất, bởi họ tiêu hao rất nhiều năng lượng thần kinh vào những hoạt động sáng tạo hay hoạt động thường ngày. Họ cần tập tĩnh tâm, hoặc thiền càng tốt, hàng ngày trước khi đi ngủ, để đảm bảo giấc ngủ của họ thực sự được thư giãn. Họ cũng cần những giấc ngủ trưa mỗi khi có thể, điều này thì dĩ nhiên tốt cho mọi người rồi, nhưng với những người có hai số 6, điều này là đặc biệt cần thiết.","Người có ba số 6 trở lên thường căng thẳng trong chuyện gia đình, nhất là đối với phụ nữ. Họ dễ bị kiểm soát người thân quá mức, khiến mọi người xung quanh cảm thấy khó chịu."]},{"key":7,"title":["Nếu có một con số 7 trong biểu đồ ngày sinh, những sự hy sinh trong một trong ba lĩnh vực sau đây: sức khỏe, tiền tài hay tình yêu sẽ hoặc đã xuất hiện trong cuộc đời bạn như một phần thiết yếu trong tiến trình học hỏi của vòng đời này. Những đau thương, hy sinh này là một phần để tâm hồn bạn chịu ‘hé mở’, kiểu như con trai ngọc phải chịu cái đau cắt thịt của hạt cát rạch vào trong thịt mới tiết ra được chất ngọc. Nhưng thông thường, những người chịu tổn thất, hy sinh này hay rên xiết, đau khổ mà không nhận ra bản chất của bài học dạng này chính là “buông bỏ để đạt được”. Về mặt tiền tài vật chất, khi chúng ta chấp nhận buông bỏ những giá trị sở hữu, chúng ta học được sự khác biệt giữa cảm giác ‘thích có thì hay’ và ‘bắt buộc phải có’. Về mặt sức khỏe hay tình yêu, bất kỳ sự mất mát nào về mặt này đều để trui rèn hay thanh lọc thái độ hay thói quen sống của ta. Nếu chúng ta ý thức rằng đàng nào chúng ta cũng cần phải hoàn thành mục đích sống của ta khi đến với trái đất này, ở vòng đời này, chúng ta phải đảm bảo rằng sức khỏe của chúng ta được trưởng dưỡng lành mạnh. Trong tình yêu, ta thường hay nhầm lẫn sự thèm muốn (có được tình yêu) với một dạng tình yêu vô điều kiện. Hãy nhớ rằng, nếu chúng ta thực hành yêu vô điều kiện, ta sẽ chẳng bao giờ mất mát gì cả, bởi vốn dĩ ta đâu có đặt ra ‘cầu mong’ gì đâu mà mất! Tuy vậy, thực tế là nhiều người trong chúng ta hiếm khi duy trì được tình yêu dài lâu, bởi chúng ta cứ gắn kèm chữ ‘tình yêu’ với biết bao là đòi hỏi, kỳ vọng về cảm xúc cần phải được đáp lại.","Hai con số 7 ngầm chỉ mức độ ‘bài học’ trong cuộc đời của một người sẽ được ‘tô đậm’ lên thêm gấp hai lần. Những người có hai số 7 trong biểu đồ ngày sinh sẽ thấy những bài học tổn thất, thương đau trong cuộc đời họ xuất hiện ở hai trong số ba khía cạnh cơ bản của đời sống: sức khỏe, tình cảm, hay tiền tài. Những loại trải nghiệm thương đau này nhằm để nhắc nhở người có hai số 7 để ý cố mà thấu hiểu những triết lý sống sâu sắc ở đời. Những tổn thất đau thương này làm cho họ rốt cục phải quan tâm đến các vấn đề tâm linh (vì sao ta lại chịu như vậy, vì sao ta lại ra nông nỗi này...), rồi từ sự quan tâm và tìm hiểu các vấn đề tâm linh cao hơn những gì mắt thấy tai nghe thông thường, họ sẽ đạt được những tầng thấu cảm nhất định, từ đó đạt được những năng lực chữa lành, định hướng và lòng từ ái, cho cả bản thân và cho người khác. Nếu họ không nhận ra những giá trị sâu xa này, người có hai số 7 sẽ dễ rơi vào trạng thái sống tiêu cực, và không ngừng than vãn về những mất mát đau thương xảy đến trong cuộc đời họ, trách móc mọi người về các vấn đề của họ, và lên án cuộc đời sao bất công với họ. Họ sẽ trở thành những người cộc cằn, xấu tính mà hầu như ai cũng muốn né.","Người có ba số 7 trở lên sẽ gặp phải sự mất mát ở 3 khía cạnh: sức khỏe, tình yêu, sự nghiệp. Nếu họ vượt qua được bài học trên thì họ sẽ có cảm nhận sâu sắc về cuộc đời, sở hữu trí tuệ thông thái, trở thành bậc thầy chia sẻ."]},{"key":8,"title":["Khi có một con 8 trong biểu đồ ngày sinh, người tích cực sẽ có tính tỉ mỉ, hệ thống đâu ra đó. Nếu không được tích cực, người có một số 8 sẽ tỏ ra hờ hững, hay không ổn định. Tính ngăn nắp, tỉ mỉ, chú ý vào chi tiết và quan tâm đến hiệu quả của từng chi tiết nhỏlà một bản chất tự nhiên của những người này. Đây là những khía cạnh của trí tuệ thực tiễn được nằm dưới sự phát triển tính độc lập của họ. Tuy nhiên, nếu những người này chọn hướng tiêu cực, họ trở nên lắt lay cảm xúc, dễ bực bội và bức xúc, hệ quả đưa đến nhiều thay đổi trong công việc, đổi nhà, thay đổi cả những mối quan hệ.","Độ sắc bén của năng lực thể hiện của hai con số 8 trên biểu đồ ngày sinh có thể cực kỳ có lợi hoặc cực kỳ chênh chao, tùy thuộc vào mỗi cá nhân sống tích cực đến độ nào. Nếu nói về tính tỉ mỉ, đi vào từng chi tiết, những người này có độ xuất sắc khó ai bì kịp. Nhưng những người này cũng ý thức rằng độ tinh nhạy mà họ có được trong lĩnh vực này không được làm họ trở nên độc tài từ sự quá tự tin. Điều này sẽ dẫn đến mâu thuẫn cảm xúc nội tại, gây ra sự bất ổn định tinh thần và cực kỳ bứt rứt. Nhu cầu tìm đến bản chất sự thật đến cùng, cũng như khát khao đạt được trí tuệ cũng có thể kích thích sự bứt rứt tương tự, nhưng theo một hướng tích cực. Nó sẽ làm cho những người này rất muốn đi đó đi đây, mà qua đó, họ sẽ lượm lặt được nhiều kinh nghiệm và kiến thức, và trí tuệ. Nếu lúc trẻ họ không đi nhiều, sự ẩn ức từ trong lòng có thể phát triển, trở thành sự bức xúc ngày càng trầm trọng. Điều này có thể gây ra một cảm giác bị trói buộc, và chỉ khi nào họ có cơ hội đi đó đây, họ mới có thể tìm lại được chút cảm giác an yên trong tâm trí.","Ở người có ba số 8 trở lên, cảm giác bồn chồn khó chịu đưa đến khía cạnh tiêu cực thường gặp hơn đối với khía cạnh tích cực. Họ hay cảm thấy cuộc sống thiếu định hướng và đáng tức giận, và trở thành nạn nhân của sự bi quan cùng cực. Vì vậy những người này cần rất nhiều tình yêu thương và sự hướng dẫn để khuyến khích họ tập có cái nhìn rộng mở và lạc quan hơn về cuộc đời. Suy cho cùng, cái mà họ cần hiểu thấu là cuộc sống này vẫn tiếp diễn, cho dù họ tích cực hay tiêu cực, có thưởng thức được nó hay không. Tất cả điều họ cần làm là thay đổi thái độ và, thay vì ngồi than thở về cái ‘bể khổ’ Với người có ba số 8 trở lên biết hướng về hướng tích cực, mỗi ngày họ sống là một ngày ngập tràn năng lượng tích cực, cảm giác độc lập và lĩnh hội được nhiều điều mở mang trí tuệ thật tuyệt vời. Ngay cả mặc dù họ luôn thích di chuyển, rất năng động, họ vẫn có một sự bình ổn và niềm vui chan chứa từ bên trong, khiến cho họ có rất nhiều bạn bè."]},{"key":9,"title":["Nói ngay cho dễ nhớ: số 9 mang ba giá trị lớn: tham vọng/hoài bão, trách nhiệm, và lý tưởng. Bởi ai sinh ra cũng có ba giá trị này ‘giắt túi’, nên sức mạnh này từng là nền tảng cho sự phát triển của xã hội thế kỷ trước, thúc đẩy chúng ta tìm hiểu cuộc sống rõ hơn và cũng kiểm soát, chế ngự nó nhiều hơn. Theo tác giả David A. Phillips, đừng cho rằng ôm ba giá trị lớn này, chúng ta đã thành công. Mặc dù chúng ta có vẻ đã hiểu nhiều hơn về môi trường sống và những gì xung quanh con người, hơn hẳn từ chặng đầu thế kỷ 20 trở về trước, thế nhưng cái giá đi kèm cũng thật quá đắt: chúng ta đã làm môi trường xuống cấp, bệnh tật nhiều hơn, nạn đói nghèo cũng diễn ra nhiều hơn. Vậy điều ‘sai sai’ nằm ở đâu? Phải chăng chúng ta đã đặt quá nhiều trọng tâm vào tham vọng và không chú trọng đủ đến hai yếu tố còn lại: trách nhiệm và lý tưởng? Để phát huy sức mạnh của một con số 9 lành mạnh, hiệu quả nhất, chúng ta cần học cách cân bằng ba giá trị này, tạo thành thế hài hòa, như kiềng ba chân. Bất kỳ sự cố gắng đền bù quá mức nào cũng chỉ tổ làm lệch thế cân bằng này, dẫn đến những điều tệ hại khác mà thôi. Ở đây việc duy trì sự hài hòa cân bằng là tối quan trọng, như Pythagoras từng dạy.","Mức lý tưởng hóa cao độ và nhiệt tâm theo đuổi lý tưởng được tăng cao, đi kèm với những suy nghĩ cực kỳ nghiêm túc, đó là những khái niệm để mô tả những người có hai số 9 trong biểu đồ ngày sinh. Họ thường bày tỏ sự hoàn hảo lý tưởng đáng ghen tị, nhưng sau đó thường quá lý tưởng để trở thành thực tế. Họ cần cẩn thận giữ sự cân bằng giữa tính thực tế và lý tưởng. Nếu muốn tìm thấy hạnh phúc, an lạc trong cuộc sống, những người này cần tránh tối đa khuynh hướng hay phê bình người khác có khả năng yếu lý tưởng hơn mình, hoặc đã có thì ráng vượt qua. Tuy vậy những người này thường là những người có tư duy sâu sắc, làm việc với tất cả sự nhiệt tâm, và họ ước mong được hữu ích khi giúp người. Chỉ cần ráng nhớ diễn đạt ý của mình cho rõ ràng, và tránh lòng tốt mình bị coi như đương nhiên nhé.","Với ba số 9 trở lên trong biểu đồ ngày sinh, sức mạnh lý tưởng và tham vọng/hoài bão vượt trội khiến họ khó mà kiểm soát được, và đôi khi tạo ra sự mất cân bằng với những ai không nhận ra sức mạnh của họ. Vấn đề này cần được tránh bằng cách nhận dạng trẻ em có ba số 9 trở lên ngay từ các em còn bé, và dạy các em diễn đạt đồng đều trên cả ba trục: thể chất, tâm hồn và trí não, hơn là chỉ tập trung diễn đạt mọi cái trên trục Trí não. Thêm vào đó, ở những người này còn hay gặp thêm khuynh hướng này đây: khi họ sống tiêu cực, họ hay bị tình trạng ‘chuyện bé xé ra to’, dẫn đến nhiều trận bộc phát, mất kiểm soát cảm xúc, thậm chí có khi còn đưa tới tình trạng mất cân bằng trí não đáng nguy hại. Bài học cần thiết cho những người nhóm này là tập nhìn mọi việc một cách khách quan và chi tiết theo giá trị đúng của họ. Điều này sẽ giúp giải tỏa sự phán xét họ hay áp đặt lên mọi điều, và cho phép họ chấp nhận tách rời khỏi những hệ thống lý tưởng khá cứng chắc của họ"]}]';
                    $arrData = json_decode($jsonStrength);
                    foreach ($data['data']['drawStrengthChart'] as $item) {
                        $check = array_filter($arrData, function ($value) use ($item) {
                            return $value->key == $item[0];
                        });
                        $check = array_values($check)[0];
                        switch ($item[1]) {
                            case 1:
                                array_push($strengthTWO, $check->title[0]);
                                break;
                            case 2:
                                array_push($strengthTWO, $check->title[1]);
                                break;
                            case 3:
                                array_push($strengthTWO, $check->title[2]);
                                break;
                        }
                    }
                dd($strengthTWO);
        $nowYearIndicator = contentText($data['data']['yearIndicator']['nextYearIndicator']['content']);
        dd($data['data']['yearIndicator'],$nowYearIndicator);
        $missIndicator = contentText($data['data']['missIndicator']['firstContent']);
        if (count($missIndicator) < 2) {
            $data['data']['missIndicator']['data'][0] = $data['data']['missIndicator']['firstContent'];
            [$textFromArray, $nextPagesContent] = textFromArray($data['data']['missIndicator']['data']);
        } else {
            array_shift($data['data']['missIndicator']['data']);
            $firstContent = $missIndicator[0];
            array_shift($missIndicator);
            for ($i=0; $i < count($data['data']['missIndicator']['data']); $i++) { 
                $missIndicator[] = $data['data']['missIndicator']['data'][$i];
            }
            [$textFromArray, $nextPagesContent] = textFromArray($missIndicator);
        }
        $textFromArray = count($missIndicator) >= 2 ? $firstContent : $textFromArray;
        $nextPagesContent = count($missIndicator) >= 2 ? $missIndicator : $nextPagesContent;
        $balanceIndicator = contentText($data['data']['balanceIndicator']['content']);    
        [$nextText, $teo] = textFromArray($nextPagesContent, true);
        dd($textFromArray, $nextPagesContent);
        return view('new_file.welcome', ['data' => $data]);
        
    }
    public function view(Request $request)
    {
        $params = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/e35b3ea4-183b-46eb-9ba3-7053c58f12ec',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzA4MzUyOTQyLCJleHAiOjE3MTA5NDQ5NDJ9.-4ebzgjDrbEK3c4QhH3S-nEFas9CkKlh6JPUZQz5k3M'
        ];
        $data = $this->getData($request->all());
        return view('web.welcome', ['data' => $data]);
    }

    /**
     * @param Request $request
     * @return Application|\Illuminate\Foundation\Application|RedirectResponse|Redirector
     * @throws \Exception
     */
    public function viewFile (Request $request) {
        $params = [
            'url' => 'https://tsh.gemduck.tech/api/user/look-up-pdf-test/e35b3ea4-183b-46eb-9ba3-7053c58f12ec',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzA4NTIzODc2LCJleHAiOjE3MTExMTU4NzZ9.mviQAn_sSJoWTjX9lXpW5MYd2Jb191MnWRO7uPaecIs'
        ];
        $fileName = $this->pdf($params);
        return redirect(asset('/pdf/' . $fileName));
    }

    public function niewFile (Request $request) {
        $params = [
            'url' => 'https://tsh.gemduck.tech/api/user/look-up-pdf-test/5b99557e-55d5-4dcb-987c-39f998a6f48b',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzA4OTI3NjQ1LCJleHAiOjE3MTE1MTk2NDV9.GE5yMzCpAYUK3ILCdpQ9JlBuSfU4ro-Jolfj8bxXCoI'
        ];
        $fileName = $this->pdf($params);
        return redirect(asset('/pdf/' . $fileName));
    }

    public function download (Request $request) {
        $params = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/0c82f030-4167-46f5-92d7-4eb50227015e',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzA4MzUyOTQyLCJleHAiOjE3MTA5NDQ5NDJ9.-4ebzgjDrbEK3c4QhH3S-nEFas9CkKlh6JPUZQz5k3M'
        ];
        $fileName = $this->pdf($request->all());

        $filePath = public_path() . '/pdf/' . $fileName;
        if (file_exists($filePath)) {
            $headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
            ];

            return response()->file($filePath, $headers);
        } else {
            return response()->json(['error' => 'File not found'], 404);
        }
    }

    public function pdf($param)
    {
        $data = $this->getData($param);
        $name = $data['id'] . '-' . $data['dateSearch'] . '.html';
        $namePDF = $data['id'] . '-' . $data['dateSearch'] . '.pdf';
        if (!file_exists(public_path() . '/html/')) {
            mkdir(public_path() . '/html/', 0777, true);
        }
        if (!file_exists(public_path() . '/pdf/')) {
            mkdir(public_path() . '/pdf/', 0777, true);
        }
        Process::run('chmod -R 777 ' . public_path());
        $pathHtml = public_path() . '/html/' . $name;
        $pathPDF = public_path() . '/pdf/' . $data['id'] . '-' . $data['dateSearch'] . '.pdf';
        if (!file_exists($pathPDF)) {
            $file = fopen($pathHtml, 'w+');
            $htmlStr = view('files.welcome', ['data' => $data])->render();
            fwrite($file, $htmlStr);
            try {
                $processName = "wkhtmltopdf $pathHtml $pathPDF";
                Process::run($processName);
                Log::info('process', ['process' => $processName]);
            } catch (\Exception $exception) {
                throw $exception;
            }
        }
        return $namePDF;
    }

    public static function renderText($name, $html, $replace_br = true)
    {
        $namehtml = $name . '.html';
        $namePDF = $name . '.pdf';
        if (!file_exists(public_path() . '/html-test/')) {
            mkdir(public_path() . '/html-test/', 0777, true);
        }
        if (!file_exists(public_path() . '/pdf-test/')) {
            mkdir(public_path() . '/pdf-test/', 0777, true);
        }
        Process::run('chmod -R 777 ' . public_path());
        $pathHtml = public_path() . '/html-test/' . $namehtml;
        $pathPDF = public_path() . '/pdf-test/' . $name . '.pdf';
        if (!file_exists($pathPDF)) {
            $file = fopen($pathHtml, 'w+');
            $htmlStr = view('render.welcome', ['html' => $html])->render();
            fwrite($file, $htmlStr);
            try {
                $processName = "wkhtmltopdf --margin-bottom 95 $pathHtml $pathPDF";
                Process::run($processName);
                Log::info('process', ['process' => $processName]);
            } catch (\Exception $exception) {
                throw $exception;
            }
        }
        $pdfFilePath = public_path('/pdf-test/' . $namePDF);

        // Get the total number of pages
        $command = "pdfinfo $pdfFilePath | grep Pages | awk '{print $2}'";
        $totalPages = (int) shell_exec($command);

        // Extract text from each page
        $pageTexts = [];
        for ($pageNumber = 1; $pageNumber <= $totalPages; $pageNumber++) {
            $outputFile = tempnam(sys_get_temp_dir(), 'pdf_page');
            $command = "pdftotext -f $pageNumber -l $pageNumber $pdfFilePath $outputFile";
            shell_exec($command);
            $html = file_get_contents($outputFile);
            if ($replace_br) {
                $html = preg_replace("/\n/", "\r", $html, 2);
                $html = str_replace("\n ", '', $html);
                $html = str_replace("\n\n", "\r", $html);
                $html = str_replace("\n", " ", $html);
            }
            $pageTexts[$pageNumber] = $html;
            unlink($outputFile);
        }
        return $pageTexts;
    }

    public function renderPDF(Request $request)
    {
        $data = $this->getData($request->all());
        $name = $data['id'] . '-' . $data['dateSearch'] . '.html';
        if (!Storage::exists($name)) {
            Storage::put($name, view('welcome', ['data' => $data])->render());
        }
        $pathPDF = storage_path() . '/app/' . $name;
        $pathPublic = storage_path() . '/app/public/' . $name . '.pdf';
        $result = Process::run('wkhtmltopdf ' . $pathPDF . ' ' . $pathPublic);
        return response()->json(['path' => asset($name)]);
    }

    public function getData($data)
    {
        $token = $data['token'];
        $url = $data['url'];
        $callAPI = Http::withHeaders([
            'Authorization' => "Bearer $token"
        ])->get($url);
        $data = $callAPI->json();
        $title = $data['data']['data'];
                $count = 1;
        foreach ($title as $key => $item) {
            if (isset($item['title'])) {
                    $data['data']['data'][$key]['page'] =  $count++;
            }
        }
        $data['data']['dateOfBirth'] = Carbon::create($data['data']['dateOfBirth'])->format('d/m/Y');
        return $data['data'];
    }
}
