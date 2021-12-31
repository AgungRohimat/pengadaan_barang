<?php

use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\LaporanKeluarController;
use App\Http\Controllers\LaporanMasukController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

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

Auth::routes(
    [
        'register' => false,
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Hanya Untuk Role Admin
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/', function () {
//         return 'halaman admin';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile admin';
//     });
// });

// //Hanya Untuk Role Pengguna
// Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'role:pengguna']], function () {
//     Route::get('/', function () {
//         return 'halaman pengguna';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile pengguna';
//     });
// });

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('buku', function () {
//         return view('buku.index');
//     })->middleware(['role:admin|pengguna']);

//     Route::get('pengarang', function () {
//         return view('pengarang.index');
//     })->middleware(['role:admin']);;
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::resource('produk', ProdukController::class)->middleware(['role:admin']);
    Route::resource('barangmasuk', BarangMasukController::class)->middleware(['role:admin']);
    Route::resource('barangkeluar', BarangKeluarController::class)->middleware(['role:admin']);
    Route::resource('laporanmasuk', LaporanMasukController::class)->middleware(['role:admin']);
    Route::resource('laporankeluar', LaporanKeluarController::class)->middleware(['role:admin']);

});
