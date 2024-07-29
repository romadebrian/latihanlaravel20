<?php

use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return 'Ini Laravel Saya';
});

Route::get('angka/{nilai}', function ($nilai) {
    return 'nilai saya adalah : ' . $nilai;
});

Route::get('pengurangan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'nilai saya adalah : ' . $nilai1 - $nilai2;
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('table', function () {
    $data = ['meja', 'kursi', 'pensil', 'bolpoint', 'lampu'];
    return view('table', compact('data'));
});

Route::get('card', function () {
    return view('card');
});

Route::get('siswa', [SiswaController::class, 'index']);

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('sekolah', SekolahController::class);

Route::resource('upload', UploadController::class);
