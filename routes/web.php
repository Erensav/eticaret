<?php

use App\Http\Controllers\frontend\PageHomeController;
use App\Http\Controllers\frontend\PageController;

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
Route::get('/', [PageHomeController::class,'anasayfa'])->name('anasayfa');

Route::get('/urunler', [PageHomeController::class,'urunler'])->name('urunler');
Route::get('/urun/detay', [PageHomeController::class,'urundetay'])->name('urundetay');

Route::get('/hakkimizda', [PageController::class,'hakkimizda'])->name('hakkimizda');

Route::get('/iletisim', [PageController::class,'iletisim'])->name('iletisim');

Route::get('/Sepet', [PageController::class,'card'])->name('sepet');


