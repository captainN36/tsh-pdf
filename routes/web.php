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

Route::get('/view', [\App\Http\Controllers\PDFController::class, 'view']);
Route::get('/a', [\App\Http\Controllers\PDFController::class, 'pdf']);
Route::get('/downLoad', [\App\Http\Controllers\PDFController::class, 'downLoad']);
Route::get('/test', [\App\Http\Controllers\PDFController::class, 'test']);
Route::get('/gen', [\App\Http\Controllers\PDFController::class, 'generatePDF']);

Route::get('/html', [\App\Http\Controllers\PDFController::class, 'mappingKey']);
