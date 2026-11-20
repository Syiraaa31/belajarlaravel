<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;

Route::get('/product', [ProductController::class, 'index']); //untuk menampilkan data 
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);


Route::get('/sapa', [SapaController::class, 'index']);

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Rifqi Farras Listarto',
        'kelas'=> 'D4SM-48-04',
        'nim' => '707082430004',
    ]);
});

Route::view('/contact', 'pages.contact');
Route::post('/product', [ProductController::class, 'store']);

// Route::get('/sapa', [SapaController::class, 'index']);

// Route::get('/about', function () {
//     return view('pages.about', [
//         'nama'  => 'Sendy Prayogo',
//         'kelas' => 'TSM-00',
//         'nim'   => '0123456789',
//     ]);
// });


// Route::get('/', function () {
//     return view('pages.beranda');
// });


// Route::get('/', function () {
//     return view('pages.beranda');
// });

// Route::get('/about', function () {
//     return view('pages.about', [
//         'nama'  => 'Syira Putra Alegra',
//         'kelas' => 'D4SM-48-04',
//         'nim'   => '707082400085',
//     ]);
// });

// // Route latihan buat matakuliah
// Route::get('/latihan', function () {
//     $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];
//     return view('pages.latihan', ['matakuliah' => $matakuliah]);
// });

// // Route product baru dengan data produk

// Route::get('/product', [ProductController::class, 'getProduct']);
// Route::get('/product/addProduct', [ProductController::class, 'addProduct']);


// Route::view('/contact', 'pages.contact');

// Route::get('/', function () {
//     return view('pages.beranda');
// });

// Route::get('/about', function () {
//     return view('pages.about', [
//         'nama'=> 'Sendy Prayogo',
//         'kelas'=> 'TSM-00',
//         'nim' => '0123456789',
//     ]);
// });

// Route::view('/contact', 'pages.contact');

// // satu controller bisa memiliki beberapa method (perintah)

// //untuk menampilkan data dari database
// Route::get('/product', [ProductController::class, 'index']); 

// //menampilkan halaman form insert data
// Route::get('/product/addProduct', [ProductController::class, 'addProduct']); 

// //memasukan data dari form yang diisikan ke dalam database 
// Route::post('/product', [ProductController::class, 'store']);
// // satu controller bisa memiliki beberapa method (perintah)
// Route::get('/product', [ProductController::class, 'index']); //untuk menampilkan data 
// Route::get('/product/addProduct', [ProductController::class, 'addProduct']);


