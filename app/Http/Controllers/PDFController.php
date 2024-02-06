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
        // $html = 'đời - 30 tuổi (2029), ứng với số 3</strong>Trong thời kỳ tuổi trẻ, bạn muốn thể hiện bản thân bằng bất cứ giá nào, bạn cũng có xu hướng cực đoan. Bạn có thể là một người thích trò chuyện vui vẻ, trừ khi bạn có cơ hội ra ngoài và ở bên mọi người nhiều nhất có thể. Mặc dù việc học chính thức có thể khiến bạn bồn chồn, nhưng bạn có thể sẽ phát triển mạnh mẽ khi chuyển nguồn năng lượng dồi dào của mình vào các lĩnh vực nghệ thuật, kịch, âm nhạc hoặc các hình thức thể hiện bản thân khác. Đây là một giai đoạn đường đời tuyệt vời đối với một người trẻ tuổi vì nó có khuynh hướng phát triển biểu hiện. Bất kỳ tài năng nào bạn có thể có trong kịch, âm nhạc hoặc nghệ thuật đều được khuyến khích trong giai đoạn này. Bạn có thể có cảm xúc cao và có thể có xu hướng hiếu động. Việc kết bạn và tận hưởng các tương tác xã hội sẽ trở nên dễ dàng ngay bây giờ. Hãy tận hưởng cuộc sống, nhưng hãy cẩn thận đừng phân tán các hoạt động của bạn đến mức bạn không đạt được tiến bộ trong bất cứ điều gì.</p><p><br></p><p><strong>2. Chu kỳ 2 (CHÍN) từ 31 - 57 tuổi (2030 - 2056), ứng với số 2</strong>Vào giữa cuộc đời, thành công của bạn sẽ nảy sinh thông qua sự hợp tác. Bạn nên tìm kiếm công việc liên quan đến việc giúp đỡ mọi người hòa thuận với nhau. Đặt bản thân là thứ hai, chú ý đến chi tiết và nhạy cảm với nhu cầu của người khác. Đây cũng là một chu kỳ tuyệt vời để cải thiện mối quan hệ đối tác và hôn nhân của bạn. Trong những năm này, khả năng sử dụng các kỹ năng ngoại giao và hòa giải của bạn sẽ được phát huy rõ rệt. Công việc của người khác và thành công của họ có thể là chìa khóa cho sự thăng tiến của chính bạn. Việc thúc đẩy các dự án của riêng bạn trong giai đoạn này cũng không hợp lý. Việc cần thiết là kiểm soát những cảm xúc hiếu động có thể xuất hiện theo thời gian.</p><p><br></p><p><strong>3. Chu kỳ cuối (THU HOẠCH) từ 58 tuổi về sau (2057 về sau), ứng với số 1</strong>Những năm sau này của bạn có thể năng động và giàu thành tích nếu bạn có thể tự chủ. Bạn sẽ phải phụ thuộc vào bản thân và chọn con đường cho riêng mình, nhưng bạn sẽ không bao giờ cảm thấy nhàm chán. Tập trung vào những ý tưởng mới hoặc tạo sức sống mới cho những ý tưởng cũ. Cần phải có đủ hành động để giữ cho bạn đi đến cuối cùng. Trong giai đoạn này, bạn có thể đạt được sự công nhận mà bạn đã bỏ qua trước đó, và điều này có nghĩa là bạn</p><p><br></p><></><p><br></p><p><br></p><p>sẽ khó có thể quay trở lại và dễ dàng lấy lại cuộc sống trước đây. Số 1 cho thấy đây là chu kỳ không cho phép bạn nghỉ hưu sớm hay thực hiện nhiều các hoạt động giải trí. Và khả năng cao chu kỳ này sẽ trở thành khoảng thời gian tích cực nhất trong cuộc đời bạn.</p>';
        $html = '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><strong>1. Chu kỳ đầu tiên (GIEO HẠT) từ Đầu đời - 30 tuổi (2029), ứng với số 3</strong></p><p>Trong thời kỳ tuổi trẻ, bạn muốn thể hiện bản thân bằng bất cứ giá nào, bạn cũng có xu hướng cực đoan. Bạn có thể là một người thích trò chuyện vui vẻ, trừ khi bạn có cơ hội ra ngoài và ở bên mọi người nhiều nhất có thể. Mặc dù việc học chính thức có thể khiến bạn bồn chồn, nhưng bạn có thể sẽ phát triển mạnh mẽ khi chuyển nguồn năng lượng dồi dào của mình vào các lĩnh vực nghệ thuật, kịch, âm nhạc hoặc các hình thức thể hiện bản thân khác. Đây là một giai đoạn đường đời tuyệt vời đối với một người trẻ tuổi vì nó có khuynh hướng phát triển biểu hiện. Bất kỳ tài năng nào bạn có thể có trong kịch, âm nhạc hoặc nghệ thuật đều được khuyến khích trong giai đoạn này. Bạn có thể có cảm xúc cao và có thể có xu hướng hiếu động. Việc kết bạn và tận hưởng các tương tác xã hội sẽ trở nên dễ dàng ngay bây giờ. Hãy tận hưởng cuộc sống, nhưng hãy cẩn thận đừng phân tán các hoạt động của bạn đến mức bạn không đạt được tiến bộ trong bất cứ điều gì. </p><p><strong>2. Chu kỳ 2 (CHÍN) từ 31 - 57 tuổi (2030 - 2056), ứng với số 2</strong></p><p>Vào giữa cuộc đời, thành công của bạn sẽ nảy sinh thông qua sự hợp tác. Bạn nên tìm kiếm công việc liên quan đến việc giúp đỡ mọi người hòa thuận với nhau. Đặt bản thân là thứ hai, chú ý đến chi tiết và nhạy cảm với nhu cầu của người khác. Đây cũng là một chu kỳ tuyệt vời để cải thiện mối quan hệ đối tác và hôn nhân của bạn. Trong những năm này, khả năng sử dụng các kỹ năng ngoại giao và hòa giải của bạn sẽ được phát huy rõ rệt. Công việc của người khác và thành công của họ có thể là chìa khóa cho sự thăng tiến của chính bạn. Việc thúc đẩy các dự án của riêng bạn trong giai đoạn này cũng không hợp lý. Việc cần thiết là kiểm soát những cảm xúc hiếu động có thể xuất hiện theo thời gian. </p><p><strong>3. Chu kỳ cuối (THU HOẠCH) từ 58 tuổi về sau (2057 về sau), ứng với số 1</strong></p><p>Những năm sau này của bạn có thể năng động và giàu thành tích nếu bạn có thể tự chủ. Bạn sẽ phải phụ thuộc vào bản thân và chọn con đường cho riêng mình, nhưng bạn sẽ không bao giờ cảm thấy nhàm chán. Tập trung vào những ý tưởng mới hoặc tạo sức sống mới cho những ý tưởng cũ. Cần phải có đủ hành động để giữ cho bạn đi đến cuối cùng. Trong giai đoạn này, bạn có thể đạt được sự công nhận mà bạn đã bỏ qua sẽ</p><></><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p>khó có thể quay trở lại và dễ dàng lấy lại cuộc sống trước đây. Số 1 cho thấy đây là chu kỳ không cho phép bạn nghỉ hưu sớm hay thực hiện nhiều các hoạt động giải trí. Và khả năng cao chu kỳ này sẽ trở thành khoảng thời gian tích cực nhất trong cuộc đời bạn</p>';
        $html = explode('<></>', $html);
        // dd($html);
        $params = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/e35b3ea4-183b-46eb-9ba3-7053c58f12ec',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzA0OTQ3MTcwLCJleHAiOjE3MDc1MzkxNzB9.e0V-6QwidQ7XJbNbOer_-Vup7MiWRJi_X--3aIkPMT0'
        ];
        $data = $this->getData($params);
        return view('web.welcome', ['data' => $data, 'html' => $html]);
    }
    public function view(Request $request)
    {
        $params = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/e35b3ea4-183b-46eb-9ba3-7053c58f12ec',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzA0OTQ3MTcwLCJleHAiOjE3MDc1MzkxNzB9.e0V-6QwidQ7XJbNbOer_-Vup7MiWRJi_X--3aIkPMT0'
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
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzA0OTQ3MTcwLCJleHAiOjE3MDc1MzkxNzB9.e0V-6QwidQ7XJbNbOer_-Vup7MiWRJi_X--3aIkPMT0'
        ];
        $fileName = $this->pdf($params);
        return redirect(asset('/pdf/' . $fileName));
    }

    public function download (Request $request) {
        $params = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/0c82f030-4167-46f5-92d7-4eb50227015e',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEyNywicm9sZSI6IlVTRVIiLCJpYXQiOjE3MDA3NDc0MzAsImV4cCI6MTcwMzMzOTQzMH0.XQ_14YcRzV2wzbg_GckpStIGyiVZnrWIz6adtwE_X3Q'
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
        $html = '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span></p><p><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span></p><></><p><br></p><p><br></p><p><br></p><p><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span></p><p><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span><span style="color: var(--tw-prose-bold);">Configure Domain and Directory</span><span style="color: rgb(209, 213, 219);">: Enter the domain name you want to use for your WordPress site and specify the directory where you want to install WordPress. You can also set up additional options such as SSL, PHP version, and web server (Apache or Nginx).</span></p>';
            $html = explode('<></>', $html);
            $htmlStr = view('files.welcome', ['data' => $data, 'html' => $html])->render();
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
