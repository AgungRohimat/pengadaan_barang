<?php

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
    Route::get('produk', function () {
        return view('produk.index');
    })->middleware(['role:admin']);

    Route::get('barangmasuk', function () {
        return view('barangmasuk.index');
    })->middleware(['role:admin']);

    Route::get('barangkeluar', function () {
        return view('barangkeluar.index');
    })->middleware(['role:admin']);

    Route::get('laporanmasuk', function () {
        return view('laporanmasuk.index');
    })->middleware(['role:admin']);

    Route::get('laporankeluar', function () {
        return view('laporankeluar.index');
    })->middleware(['role:admin']);

});
