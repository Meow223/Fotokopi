<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\Admin\AdminAuthController;
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




/*Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/katalog', [HomeController::class, 'katalog'])->middleware(['auth', 'verified'])->name('katalog');

Route::get('/home', [HomeController::class, 'type'])->middleware(['auth'])->name('home');
Route::get('/test', [HomeController::class, 'test'])->middleware(['auth','admin']);

Route::get('/about', function () {
    return view('about'); })->middleware(['auth', 'verified'])->name('about');
Route::get('/print', function () {
    return view('print'); })->middleware(['auth', 'verified'])->name('print');

Route::get('pesanan/{id_barang}', [PesananController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('pesanan/{id_barang}', [PesananController::class, 'pesan'])->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';




Route::get('check-out', [PesananController::class, 'check_out'])->middleware(['auth', 'verified'])->name('check-out');
Route::delete('check-out/{id}', [PesananController::class, 'delete'])->middleware(['auth', 'verified']);

Route::get('konfirmasi-check-out', [PesananController::class, 'konfirmasi']);




Route::get('history', [HistoryController::class, 'index'])->name('history')->middleware(['auth', 'verified']);
Route::get('history/{id}', [HistoryController::class, 'detail'])->middleware(['auth', 'verified']);

Route::get('/barang', [BarangController::class, 'index'])->middleware(['auth','admin'])->name('barang');
Route::get('/tampilbarang/{id_barang}', [BarangController::class, 'tampil']);
Route::post('/updatebarang/{id_barang}', [BarangController::class, 'update']);
Route::get('/tambahbarang', [BarangController::class, 'tambah']);
Route::post('/insertbarang', [BarangController::class, 'insert']);
Route::get('/deletebarang/{id_barang}', [BarangController::class, 'delete']);