<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/view-file', [PDFController::class, 'view']);
Route::get('/new-file', [PDFController::class, 'niewFile']);
Route::get('/a', [PDFController::class, 'pdf']);
Route::get('/download-file', [PDFController::class, 'downLoad']);

Route::get('/html', [PDFController::class, 'mappingKey']);
Route::get('/', [PDFController::class, 'index']);
Route::post('/render', [PDFController::class, 'renderViewData']);
Route::get('/test', [PDFController::class, 'test']);
Route::get('/test2', [PDFController::class, 'test2'])->name('test2');
