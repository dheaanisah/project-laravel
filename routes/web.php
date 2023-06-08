<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\StokController;
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

Route::get('dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::controller(StokController::class)->prefix('stok')->group( function() {
    Route::get('','index')->name('stok');
    Route::get('tambah', 'create')->name('stok.tambah');
    Route::get('edit/{id}', 'edit')->name('stok.edit');
    Route::get('hapus/{id}','delete')->name('stok.hapus');
    Route::post('tambah','store')->name('stok.tambah.simpan');
    Route::post('edit/{id}', 'update')->name('stok.update');
});

Route::get('/login',function (){
    return view('login');
});