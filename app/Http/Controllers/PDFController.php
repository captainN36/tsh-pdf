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
        $params = [
                'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/f20800d5-353d-4960-9549-8c7e4c0d49b4',
                'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjYsInJvbGUiOiJBRE1JTiIsImlhdCI6MTY5ODQyNjkxMSwiZXhwIjoxNzAxMDE4OTExfQ.2104C_aMaf-OniN2wXUZFoVsetB1dczV4uU-bBnndU8'
        ];
        $data = $this->getData($params);
        return view('test.welcome', ['data' => $data]);
        // $htmlContent = view('test.vanso', ['data' => $data])->render();
        // $htmlFilePath = tempnam(sys_get_temp_dir(), 'html_to_pdf');
        // file_put_contents($htmlFilePath, $htmlContent);

        // // Define the output PDF file path
        // $pdfFilePath = storage_path('app/public/output.pdf');

        // // Run wkhtmltopdf command to convert HTML to PDF
        // $command = "wkhtmltopdf $htmlFilePath $pdfFilePath";

        // // Execute the command and capture the output and return code
        // exec($command, $output, $returnCode);

        // // Remove the temporary HTML file
        // unlink($htmlFilePath);

        // // Log the output for debugging purposes
        // Log::info("wkhtmltopdf output: " . implode(PHP_EOL, $output));

        // // Check if the command was successful
        // if ($returnCode === 0) {
        //     return response()->json(['message' => 'Conversion successful', 'pdf_path' => $pdfFilePath]);
        // } else {
        //     // Log errors or handle them accordingly
        //     return response()->json(['error' => 'Conversion failed', 'output' => $output]);
        // }
        // $pdfFilePath = public_path('testtest.pdf');

        // // Get the total number of pages
        // $command = "pdfinfo $pdfFilePath | grep Pages | awk '{print $2}'";
        // $totalPages = (int) shell_exec($command);

        // // Extract text from each page
        // $pageTexts = [];
        // for ($pageNumber = 1; $pageNumber <= $totalPages; $pageNumber++) {
        //     $outputFile = tempnam(sys_get_temp_dir(), 'pdf_page');
        //     $command = "pdftotext -f $pageNumber -l $pageNumber $pdfFilePath $outputFile";
        //     shell_exec($command);
        //     $pageTexts[$pageNumber] = file_get_contents($outputFile);
        //     unlink($outputFile);
        // }
        // dd($pageTexts);
        // $data = $this->getData($request->all());
        //         return view('welcome', ['data' => $data]);
    }

    public function download (Request $request) {
        $params = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/f20800d5-353d-4960-9549-8c7e4c0d49b4',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjYsInJvbGUiOiJBRE1JTiIsImlhdCI6MTY5ODQyNjkxMSwiZXhwIjoxNzAxMDE4OTExfQ.2104C_aMaf-OniN2wXUZFoVsetB1dczV4uU-bBnndU8'
        ];
        $fileUrl = $this->pdf($params);

        // $fileContents = Http::get($fileUrl)->body();

        // $headers = [
        //     'Content-Type' => 'application/pdf',
        //     'Content-Disposition' => 'attachment; filename="1277-2023-11-05.pdf"',
        // ];

        return redirect($fileUrl);
    }

    public static function renderText ($html, $name) {
        $params = [
            'url' => 'https://api.tracuuthansohoconline.com/api/user/look-up/f20800d5-353d-4960-9549-8c7e4c0d49b4',
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjYsInJvbGUiOiJBRE1JTiIsImlhdCI6MTY5ODQyNjkxMSwiZXhwIjoxNzAxMDE4OTExfQ.2104C_aMaf-OniN2wXUZFoVsetB1dczV4uU-bBnndU8'
        ];
        $data = self::dataGet($params);
        $nameHtml = $name . '.html';
        $namePDF = $name . '.pdf';
        if (!file_exists(public_path() . '/html/')) {
            mkdir(public_path() . '/html/', 0777, true);
        }
        if (!file_exists(public_path() . '/pdf/')) {
            mkdir(public_path() . '/pdf/', 0777, true);
        }
        Process::run('chmod -R 777 ' . public_path());
        $pathHtml = public_path() . '/html/' . $nameHtml;
        $pathPDF = public_path() . '/pdf/' . $namePDF;
        if (!file_exists($pathPDF)) {
            $file = fopen($pathHtml, 'w+');
            $htmlStr = view('test.welcome', ['data' => $data])->render();
            fwrite($file, $htmlStr);
            try {
                $processName = "wkhtmltopdf $pathHtml $pathPDF";
                Process::run($processName);
                Log::info('process', ['process' => $processName]);
            } catch (\Exception $exception) {
                throw $exception;
            }
        }
        $pdfFilePath = $pathPDF;

        // Get the total number of pages
        $command = "pdfinfo $pdfFilePath | grep Pages | awk '{print $2}'";
        $totalPages = (int) shell_exec($command);

        // Extract text from each page
        $pageTexts = [];
        for ($pageNumber = 1; $pageNumber <= $totalPages; $pageNumber++) {
            $outputFile = tempnam(sys_get_temp_dir(), 'pdf_page');
            $command = "pdftotext -f $pageNumber -l $pageNumber $pdfFilePath $outputFile";
            shell_exec($command);
            $pageTexts[$pageNumber] = file_get_contents($outputFile);
            unlink($outputFile);
        }
        // dd($pageTexts);
        return $pageTexts;
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
        $pathPDF2 = public_path() . '/pdf/' . $data['id'] . '-' . $data['dateSearch'] . '2.pdf';
        $pathPDF3 = public_path() . '/pdf/' . $data['id'] . '-' . $data['dateSearch'] . '3.pdf';
        if (!file_exists($pathPDF)) {
            $file = fopen($pathHtml, 'w+');
            $htmlStr = view('test.welcome', ['data' => $data])->render();
            fwrite($file, $htmlStr);
            try {
                $processName = "wkhtmltopdf $pathHtml $pathPDF";
                Process::run($processName);
                $processName = "wkhtmltopdf $pathHtml $pathPDF2";
                Process::run($processName);
                $processName = "wkhtmltopdf $pathHtml $pathPDF3";
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
                    $data['data']['data'][$key]['page'] =  $count++;
            }
        }
        $data['data']['dateOfBirth'] = Carbon::create($data['data']['dateOfBirth'])->format('d/m/Y');
        return $data['data'];
    }

    public static function dataGet($data)
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
