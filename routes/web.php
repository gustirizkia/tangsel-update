<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriArtikelController;
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

Route::get('/', [HomeController::class, "index"]);
Route::get('/detail', function () {
    return view('detail');
});

Route::get("kategori/{slug}", [KategoriArtikelController::class, "index"])->name("kategori-artikel");
Route::post("artikel-data", [ArtikelController::class, "data"])->name("artikel-data");
Route::get("artikel/{slug}", [ArtikelController::class, "show"])->name("artikel-show");
