<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MobilController;
use App\Http\Controllers\Admin\TipeMobilController;
use App\Http\Controllers\Admin\JenisMobilController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/daftarmobil', function () {
    return view('daftar_mobil');
});

Route::get('/detailmobil', function () {
    return view('detail_daftarmobil');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
});


// Auth::routes();

Route::resource("jenismobil", JenisMobilController::class);
Route::resource("tipemobil", TipeMobilController::class);
Route::resource("mobil", MobilController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/logout', 'logout')->name('logout');

