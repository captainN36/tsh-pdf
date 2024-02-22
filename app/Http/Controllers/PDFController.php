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

    public function text() {
        $text = '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><span style="color: rgb(20, 20, 20);">Những con số này cho biết ở mỗi năm bạn nên tập trung định hướng phát triển theo con số nào. Thường thì cuộc đời sẽ tự đẩy bạn đi theo những con số này. Nếu đi lệch, bạn thường sẽ bị cảm thấy cuộc sống mất cân bằng hoặc bất an. Còn nếu đi đúng hướng bạn thường cảm thấy rất bình an và thuận lợi.</span></p><p><span style="color: rgb(20, 20, 20);">Lưu ý: Sau khi sử dụng VIP, mỗi năm bạn vào lại website tra cứu hoặc tải lại file để xem luận giải 3 năm tiếp theo và các nội dung luận giải mới nếu có!</span></p><p><br></p><p><span style="color: rgb(20, 20, 20);">VẬN SỐ NĂM 2024 CỦA BẠN LÀ : 8</span></p><p><span style="color: rgb(20, 20, 20);">THU HOẠCH, THÀNH TỰU VÀ TĂNG TRƯỞNG</span></p><p><span style="color: rgb(20, 20, 20);">Đây là năm mà bạn có thể đạt được những bước tiến quan trọng trong cuộc đời. Sau một khoảng thời gian rất chậm chạp và nội tâm của năm ngoái, thì năm này bạn có thể bắt đầu cảm thấy một số tham vọng được khuấy động. Năm nay sẽ nhấn mạnh vào sự thăng tiến, các vấn đề tài chính, địa vị xã hội, kinh doanh và thành tích. Bạn sẽ có cơ hội cải thiện vị thế nghề nghiệp, tài chính và danh tiếng của mình, đồng thời sẽ được công nhận về tiềm năng và kỹ năng của bạn. Trên bình diện công việc, năm nay bạn cần phải hành động với một tinh thần "máu lửa", phán đoán tốt, thực tế và hiệu quả trong suốt cả năm. Với một cơ hội lớn sẽ mở ra, bạn có khả năng cao sẽ gặt hái được nhiều thành tựu và có một sự thay đổi đáng kể trong môi trường làm việc của mình. Trực giác và trí thông minh của bạn cũng sẽ được nâng cao đáng kể nên bạn sẽ thấy mình có nhiều ý tưởng độc đáo mang tính thực tế cao. Tuy nhiên, quyền lực và tiền bạc trong năm nay có thể khiến bạn trở thành con mồi của những hành động bốc đồng hoặc kế hoạch “làm giàu nhanh chóng”, vì vậy hãy cẩn thận vấn đề này.</span></p><p><br></p><p><span style="color: rgb(20, 20, 20);">Về tài chính, năm nay sẽ thuận lợi cho việc kinh doanh của bạn; mua bán đất đai, nhà cửa hay các giao dịch tài chính khác và bạn có thể đa dạng hóa nguồn thu nhập của mình. Nếu bạn biết suy xét một cách khôn ngoan, tránh tình cảm cũng như cảm tính thì bạn sẽ có thể có được rất nhiều tài lộc và công danh. Bạn cũng cần học cách kiểm soát chi tiêu của mình. Bên cạnh đó, năm nay bạn cần cẩn thận đừng để bị dẫn dắt vào các liên kết không sinh lợi thông qua việc người quen thuyết phục. Ngoài ra, nếu bạn theo đuổi tiền bạc vì quyền lực, lòng tham, hoặc yêu thích sự giàu có, nó sẽ lọt qua kẽ tay bạn nhanh chóng như khi kiếm được. Hãy duy trì một thái độ lành mạnh đối với tiền bạc, nếu không bạn có thể mất tất cả, rơi vào tình trạng phá sản, mất cân bằng năng</span></p><></><p><br></p><p><br></p><p><br></p><p><br></p><p><span style="color: rgb(20, 20, 20);"> lượng. Cố gắng không đánh giá quá cao khả năng của bạn hoặc giá trị của bất</span></p><p><span style="color: rgb(20, 20, 20);">kỳ thứ gì bạn đang giao dịch, đặc biệt là các khoản đầu tư, mua hoặc bán bất động sản hoặc tài sản. Những sai lầm lớn về tiền bạc có thể mắc phải nếu bạn không cẩn thận; những sai lầm này có thể ảnh hưởng đến bạn trong nhiều năm tới. Nên nhớ rằng tiền kiếm được một cách trung thực và hiệu quả có thể tăng lên, mang lại cổ tức lớn hơn. Điều quan trọng là bạn phải cân bằng quyền lực với lòng trắc ẩn và sự quan tâm đến người khác.</span></p><p><span style="color: rgb(20, 20, 20);">Trong các mối quan hệ, năm nay bạn có thể tạo dựng được nhiều mối quan hệ chất lượng, bền lâu. Cuộc sống sẽ đưa bạn tiếp xúc với những người quan trọng. Nếu bạn đang có ý định kết hôn thì đây chính là một năm lý tưởng cho hôn nhân. Bạn và nửa kia sẽ tìm cách truyền cho mối quan hệ nhiều cảm xúc và tâm linh hơn. Điều bạn cần lưu ý là không nên để nửa kia của bạn tự giải quyết các vấn đề, hãy luôn ở đó vì họ và hỗ trợ họ. Bạn cũng nên dành thời gian để quan tâm và chăm sóc những người thân yêu. Đồng thời hãy luôn duy trì vấn đề độc lập tài chính trong gia đình bạn. Nếu bạn đang yêu xa, năm nay bạn có thể có cơ hội gặp gỡ nửa kia của mình. Hoặc nếu bạn đang độc thân, bạn có khả năng sẽ tìm thấy một người bạn đời lý tưởng.</span></p><p><span style="color: rgb(20, 20, 20);">Trong vấn đề sức khỏe, năm cá nhân số 8 thường cho thấy bạn có một sức khỏe tốt. Nếu bạn đang mắc một số bệnh lâu năm, bạn có thể mong đợi sự nhẹ nhõm và thậm chí hồi phục nhanh hơn. Hãy theo dõi sức khỏe của bạn cũng như của cả gia đình và đảm bảo họ được kiểm tra thường xuyên. Tuy nhiên, đôi lúc bạn cũng có những sự mệt mỏi, lo lắng, điều này sẽ gây căng thẳng cho sức khỏe của bạn. Hãy tập thể dục một cách thường xuyên; tập thể dục nhịp điệu và ăn nhiều thức ăn bổ dưỡng hơn. Ngoài ra, bạn có thể di chuyển hoặc thay đổi điều kiện sống của mình, điều này tốt cho sức khỏe thể chất và tinh thần của bạn.</span></p><p><span style="color: rgb(20, 20, 20);">Liên quan đến học tập thi cử, nếu bạn đang là học sinh, năm nay khả năng cao sẽ đỗ đạt đại học hoặc tham gia vào một chương trình học nào đó. Đây cũng là thời điểm thuận lợi cho những người đang tìm kiếm việc làm, vì có thể sẽ có được những vị trí lý tưởng. Những người chọn đi du học nước ngoài hoặc theo đuổi các chương trình học thạc sĩ, tiến sĩ,... cũng sẽ rất phù hợp. Nhìn chung, năm nay sẽ rất tốt cho việc học hành thi cử của bạn.</span></p><p><span style="color: rgb(20, 20, 20);">Về bản thân, năm nay bạn cần cải thiện các mối quan hệ trong cuộc sống cũng như trong công việc của bạn và nên yêu cầu trợ giúp khi bạn gặp khó khăn. Bạn có thể cần sự hỗ trợ của cố vấn tài chính để quản lý tài chính của mình. Bạn nên chú ý đến các đề xuất của họ và hành động theo chúng. Ngoài ra, nếu bạn gặp những vấp ngã trong năm nay, hãy tìm ra nguyên nhân và giải pháp cho vấn đề đó, rút kinh nghiệm rồi tiếp tục mạnh mẽ đứng dậy bước tiếp.</span></p><p><span style="color: rgb(20, 20, 20);">Tóm lại năm này là năm thu hoạch của những thứ bạn đã nỗ lực trong thời gian trước, vì vậy khả năng cao sẽ mang đến thành công, quyền lực và bạn sẽ đạt được những gì mình mong muốn. Những thành tựu trong năm nay chỉ là bước khởi đầu cho sự thăng tiến lâu dài của bạn. Tuy nhiên, bạn cũng cần làm việc chăm chỉ và hành động mạnh</span></p><></><p><br></p><p><br></p><p><br></p><p><br></p><p><span style="color: rgb(20, 20, 20);"> mẽ. Đừng quên bạn cần xem xét thật kỹ các vấn đề về mặt đạo đức và pháp lý, vì năng lượng của năm cá nhân số 8 có thể khiến bạn vướng vào các rắc rối pháp lý.</span></p>';
        $text = explode("<></>", $text);
        dd($text);
    }
    public function index()
    {
        $params = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/e35b3ea4-183b-46eb-9ba3-7053c58f12ec',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzA4MzUyOTQyLCJleHAiOjE3MTA5NDQ5NDJ9.-4ebzgjDrbEK3c4QhH3S-nEFas9CkKlh6JPUZQz5k3M'
        ];
        $data = $this->getData($params);
        return view('web.welcome', ['data' => $data]);
        // if (!file_exists(public_path() . '/html/')) {
        //     mkdir(public_path() . '/html/', 0777, true);
        // }
        // if (!file_exists(public_path() . '/pdf/')) {
        //     mkdir(public_path() . '/pdf/', 0777, true);
        // }
        // Process::run('chmod -R 777 ' . public_path());
        // $pathHtml = public_path() . '/html/' . 'test.html';
        // $pathPDF = public_path() . '/pdf/' . 'test.pdf';
        // if (!file_exists($pathPDF)) {
        //     $file = fopen($pathHtml, 'w+');
        //     $htmlStr = view('test')->render();
        //     fwrite($file, $htmlStr);
        //     try {
        //         $processName = "wkhtmltopdf $pathHtml $pathPDF";
        //         Process::run($processName);
        //         Log::info('process', ['process' => $processName]);
        //     } catch (\Exception $exception) {
        //         throw $exception;
        //     }
        // }
        // return redirect(asset('/pdf/test.pdf'));
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
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/e35b3ea4-183b-46eb-9ba3-7053c58f12ec',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzA4MzUyOTQyLCJleHAiOjE3MTA5NDQ5NDJ9.-4ebzgjDrbEK3c4QhH3S-nEFas9CkKlh6JPUZQz5k3M'
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
