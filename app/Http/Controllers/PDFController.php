<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\Facade\Pdf;

use FontLib\Table\Type\cmap;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;
use \stdClass;

class PDFController extends Controller
{

    public function index(Request $request)
    {
        $params = [
            'url' => 'https://tsh.gemduck.tech/api/user/look-up-pdf-test/14b290bf-6262-4eee-ac36-49883a30a4e8',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzEzMjUzMjUzLCJleHAiOjE3MTU4NDUyNTN9.Yf9RaaLgfDy2AOhDo5triJSzTrnt6Td3tU9GSBCDOFs'
        ];
        $data = $this->getData($params ?? $request->all());

        $url = asset('downfile/index.php');
        $path = $this->pathFiles($params);
        $pdf = $path['path_pdf'];
        $html = $path['path_html'];
        $param = "html=$html&pdf=$pdf";
        $res = $this->downfile($url, $param);
        dd($path, $param);
        return view('web.welcome-copy', ['data' => $data]);
    }

    public static function lifeCircleIndicator($data)
    {
        $data['data']['lifeCircleIndicator']['lifeCircleIndicator']['firstLifeCircle']['indicator'];
        $data['data']['lifeCircleIndicator']['lifeCircleIndicator']['secondLifeCircle']['indicator'];
        $data['data']['lifeCircleIndicator']['lifeCircleIndicator']['thirdLifeCircle']['indicator'];
        $birth = \DateTime::createFromFormat('d/m/Y', $data['dateOfBirth']);
        $birth = $birth->format('Y');
        return [
            'first' => $data['data']['lifeCircleIndicator']['lifeCircleIndicator']['firstLifeCircle']['age'][1] + $birth,
            'second' => [
                0 => $data['data']['lifeCircleIndicator']['lifeCircleIndicator']['secondLifeCircle']['age'][0] + $birth,
                1 => $data['data']['lifeCircleIndicator']['lifeCircleIndicator']['secondLifeCircle']['age'][1] + $birth,
            ],
            'third' => $data['data']['lifeCircleIndicator']['lifeCircleIndicator']['thirdLifeCircle']['age'][0] + $birth
        ];
    }

    public function view(Request $request)
    {
        $params = $request->all();
        $pos = strpos($params['url'], "look-up-pdf-test");
        if ($pos == false) {
            $params['url'] = str_replace('look-up', 'look-up-pdf-test', $params['url']);
        }
        $data = $this->getData($params);
        return view('web.welcome', ['data' => $data]);
    }

    public function downfile($url, $data)
    {
        $post = curl_init();
        curl_setopt($post, CURLOPT_URL, $url);
        curl_setopt($post, CURLOPT_POST, 1);
        curl_setopt($post, CURLOPT_POSTFIELDS, $data);
        curl_setopt($post, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($post, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0');
        $result = curl_exec($post);
        $curl_info = curl_getinfo($post);
        curl_close($post);
        $obj_source = new stdClass();
        $obj_source->content = $result;
        $obj_source->header = $curl_info["http_code"];
        return $obj_source;
    }

    /**
     * @param Request $request
     * @return Application|\Illuminate\Foundation\Application|RedirectResponse|Redirector
     * @throws \Exception
     */
    public function viewFile (Request $request) {
        $params = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up-pdf-test/756ae1f5-283b-4bde-8688-41ed6f1284d7',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzEzMTY0MzY2LCJleHAiOjE3MTU3NTYzNjZ9.DorUoT7KJncWcGFzb7v278Jr72kT3cAnMD4J8wbUa-c'
        ];
        $fileName = $this->pdf($params);
        return redirect(asset('/pdf/' . $fileName));
    }

    public function niewFile (Request $request) {
        $params = [
            'url' => 'https://tsh.gemduck.tech/api/user/look-up-pdf-test/14b290bf-6262-4eee-ac36-49883a30a4e8',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzEzMjUzMjUzLCJleHAiOjE3MTU4NDUyNTN9.Yf9RaaLgfDy2AOhDo5triJSzTrnt6Td3tU9GSBCDOFs'
        ];
        $fileName = $this->pdfCopy($params ?? $request->all());
        return redirect(asset('/pdf/' . $fileName));
    }

    public function download (Request $request) {
        $params = $request->all();
        $pos = strpos($params['url'], "look-up-pdf-test");
        if ($pos == false) {
            $params['url'] = str_replace('look-up', 'look-up-pdf-test', $params['url']);
        }
        $fileName = $this->pdf($params);

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

    public function pathFiles ($params) {
        $data = $this->getData($params);
        $name = $data['id'] . '-' . date("H-i-s") . '.html';
        $pathHtml = public_path() . '/html/' . $name;
        $pathPDF = public_path() . '/pdf/' . $data['id'] . '-' . date("H-i-s") . '.pdf';
        return [
            'path_html' => $pathHtml,
            'path_pdf' => $pathPDF
        ];
    }

    public function pdfCopy($param)
    {
        $data = $this->getData($param);
        $name = $data['id'] . '-' . date("H-i-s") . '.html';
        $namePDF = $data['id'] . '-' . date("H-i-s") . '.pdf';
        if (!file_exists(public_path() . '/html/')) {
            mkdir(public_path() . '/html/', 0777, true);
        }
        if (!file_exists(public_path() . '/pdf/')) {
            mkdir(public_path() . '/pdf/', 0777, true);
        }
        Process::run('chmod -R 777 ' . public_path());
        $pathHtml = public_path() . '/html/' . $name;
        $pathPDF = public_path() . '/pdf/' . $data['id'] . '-' . date("H-i-s") . '.pdf';
        if (!file_exists($pathPDF)) {
            $file = fopen($pathHtml, 'w+');
            $htmlStr = view('files.welcome-copy', ['data' => $data])->render();
            fwrite($file, $htmlStr);
            try {
                $processName = "wkhtmltopdf $pathHtml $pathPDF";
                dd($processName);
                Process::run($processName);
                Log::info('process', ['process' => $processName]);
            } catch (\Exception $exception) {
                throw $exception;
            }
        }
        return $namePDF;
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
