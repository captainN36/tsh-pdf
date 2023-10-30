<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use ConvertApi\ConvertApi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    public function view(Request $request){
        $data = $this->getData($request->all());
        return view('welcome', ['data' => $data]);
    }

    public function renderPDF(Request $request){
        $data = $this->getData($request->all());
        $name = $data['id'] . '-' . $data['dateSearch'] . '.html';
        if (!Storage::exists($name)) {
            Storage::put($name, view('welcome', ['data' => $data])->render());
        }
        $result = Process::run('wkhtmltopdf ' . $name . ' ' . $name . '.pdf');
        return $result->output();
    }

    public function getData($data){
        $token = $data['token'];
        $url = 'https://api.tracuuthansohoconline.com/api/user/look-up/534c8365-f429-41de-b0e2-826712dc04de';
        $callAPI = Http::withHeaders([
            'Authorization' => "Bearer $token"
        ])->get($url);
        $data = $callAPI->json();
        $title = $data['data']['data'];
        $count = 1;
        foreach ($title as $key => $item){
            if (isset($item['title'])){
                if ($count <= 6){
                    $data['data']['data'][$key]['page'] = 2;
                }
                if ($count > 6 && $count <= 13){
                    $data['data']['data'][$key]['page'] = 3;
                }
                if ($count > 13){
                    $data['data']['data'][$key]['page'] = 4;
                }
            }
            $count++;
        }
        $data['data']['dateOfBirth'] = Carbon::create($data['data']['dateOfBirth'])->format('d/m/Y');
        return $data['data'];
    }
}
