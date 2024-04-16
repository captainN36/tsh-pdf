<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Process;

class DownloadFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected mixed $data;
    /**
     * Create a new job instance.
     */
    public function __construct($data = null)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $data = $this->data;
        $name = $data['id'] . '-' . $data['dateSearch'] . '.html';
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
            $processName = "wkhtmltopdf $pathHtml $pathPDF";
            Process::run($processName);
            Log::info('process', ['process' => $processName]);
        }
    }
}
