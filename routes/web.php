<?php

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

Route::get('/view-file', [\App\Http\Controllers\PDFController::class, 'view']);
Route::get('/new-file', [\App\Http\Controllers\PDFController::class, 'niewFile']);
Route::get('/a', [\App\Http\Controllers\PDFController::class, 'pdf']);
Route::get('/download-file', [\App\Http\Controllers\PDFController::class, 'downLoad']);

Route::get('/html', [\App\Http\Controllers\PDFController::class, 'mappingKey']);
Route::get('/', [\App\Http\Controllers\PDFController::class, 'index']);
Route::post('/render', [\App\Http\Controllers\PDFController::class, 'renderViewData']);
Route::get('/test', [\App\Http\Controllers\PDFController::class, 'test']);
Route::get('/test2', [\App\Http\Controllers\PDFController::class, 'test2'])->name('test2');

