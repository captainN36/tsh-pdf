<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
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

class PDFController extends Controller
{
    public function view(Request $request)
    {
        $data = $this->getData($request->all());
        return view('welcome', ['data' => $data]);
    }

    public function pdf(Request $request)
    {
        $data = $this->getData($request->all());
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
        if (!file_exists($pathHtml) && !file_exists($pathPDF)) {
            $file = fopen($pathHtml, 'w+');
            fwrite($file, view('welcome', ['data' => $data])->render());
            try {
                $cssPath = public_path() . "/pdf.css";
                $process = "wkhtmltopdf $cssPath $pathHtml $pathPDF";
                Log::info('process', ['process' => $process]);
                Process::run($process);
            } catch (\Exception $exception) {
                throw $exception;
            }
        }
        return response()->json(['path' => asset('/pdf/') . $namePDF]);
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
