<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PSController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::prefix('prodi')->group(function (){
    Route::get('/Manajemen-Informatika', [PSController::class, 'MI']);
    Route::get('/Teknik-Informatika', [PSController::class, 'TI']);
});

Route::get('/news/{id}', [NewsController::class, 'index']);

Route::prefix('sarana')->group(function (){
    Route::get('/perkantoran', [SaranaController::class, 'kantor']);
    Route::get('/laboratorium', [SaranaController::class, 'lab']);
    Route::get('/kelas', [SaranaController::class, 'kelas']);
    Route::get('/lainnya', [SaranaController::class, 'lain']);
});