<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\Facade\Pdf;
use ConvertApi\ConvertApi;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;
use PDF;

class PDFController extends Controller
{
    public function view(Request $request)
    {
        $param = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/f20800d5-353d-4960-9549-8c7e4c0d49b4',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjYsInJvbGUiOiJBRE1JTiIsImlhdCI6MTY5ODQyNjkxMSwiZXhwIjoxNzAxMDE4OTExfQ.2104C_aMaf-OniN2wXUZFoVsetB1dczV4uU-bBnndU8'
        ];
        $data = $this->getData($param);
        return view('welcome', ['data' => $data]);
    }

    public function download () {
        $param = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/f20800d5-353d-4960-9549-8c7e4c0d49b4',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjYsInJvbGUiOiJBRE1JTiIsImlhdCI6MTY5ODQyNjkxMSwiZXhwIjoxNzAxMDE4OTExfQ.2104C_aMaf-OniN2wXUZFoVsetB1dczV4uU-bBnndU8'
        ];
        $fileUrl = $this->pdf($param);

        $fileContents = Http::get($fileUrl)->body();

        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="1277-2023-11-05.pdf"',
        ];

        return response($fileContents, 200, $headers);
    }

    public function test()
    {
        $param = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/f20800d5-353d-4960-9549-8c7e4c0d49b4',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjYsInJvbGUiOiJBRE1JTiIsImlhdCI6MTY5ODQyNjkxMSwiZXhwIjoxNzAxMDE4OTExfQ.2104C_aMaf-OniN2wXUZFoVsetB1dczV4uU-bBnndU8'
        ];
        $data = $this->getData($param);
        $pdf = PDF::loadView('welcome', ['data' => $data]);
        return $pdf->download('example.pdf');
    }

    public function generatePDF()
    {
        $param = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/f20800d5-353d-4960-9549-8c7e4c0d49b4',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjYsInJvbGUiOiJBRE1JTiIsImlhdCI6MTY5ODQyNjkxMSwiZXhwIjoxNzAxMDE4OTExfQ.2104C_aMaf-OniN2wXUZFoVsetB1dczV4uU-bBnndU8'
        ];
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
            $htmlStr = view('welcome', ['data' => $data])->render();
            fwrite($file, $htmlStr);
        }
        // Path to your HTML file

        // Read HTML content from the file
        $html = file_get_contents($pathHtml);

        // Convert HTML to PDF
        $pdf = PDF::loadHtml($html);

        // Save the PDF to a file or stream it to the browser
        return $pdf->download('example.pdf');
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
            $htmlStr = view('welcome', ['data' => $data])->render();
            fwrite($file, $htmlStr);
            try {
                $processName = "wkhtmltopdf --base-url " . public_path() . " --javascript-delay 300000 --no-stop-slow-scripts $pathHtml $pathPDF";
                Process::run($processName);
                Log::info('process', ['process' => $processName]);
            } catch (\Exception $exception) {
                throw $exception;
            }
        }
        return asset("/pdf/$namePDF");
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
                if ($count <= 6) {
                    $data['data']['data'][$key]['page'] = 2;
                }
                if ($count > 6 && $count <= 13) {
                    $data['data']['data'][$key]['page'] = 3;
                }
                if ($count > 13) {
                    $data['data']['data'][$key]['page'] = 4;
                }
            }
            $count++;
        }
        $data['data']['dateOfBirth'] = Carbon::create($data['data']['dateOfBirth'])->format('d/m/Y');
        return $data['data'];
    }
}
