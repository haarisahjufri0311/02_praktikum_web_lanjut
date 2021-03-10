<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Program;
use App\Http\Controllers\ContactUs;
use Illuminate\Support\Facades\views;
use App\Http\Controllers\HomeController;

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
//PRAKTIKUM 1
//nomor1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });
//nomor2
// Route::get('/about', function () {
//     echo "1941720221<br>Haarisah Yustika Putri<br>TI-2A";
// });
//nomor3
// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman artikel dengan ID ".$id;
// });

//PRAKTIKUM 2
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticlesController::class, 'articles']);

//PRAKTIKUM 3
//nomor 1
// Route::get('/', [Home::class, 'home']);

//nomor 2
// Route::prefix('category')->group(function(){
//     Route::get('marbel-edu-games', function(){
//         echo 'Ini adalah halaman Marbel Edu Games';
//     });
//     Route::get('marbel-and-friends-kids-games', function(){
//         echo 'Ini adalah halaman Marbel and Friends Kids Games';
//     });
//     Route::get('riri-story-books', function(){
//         echo 'Ini adalah halaman Riri Story Books';
//     });
//     Route::get('kolak-kids-songs', function(){
//         echo 'Ini adalah halaman Kolak Kids Songs';
//     });
// });

// //nomor 3
// Route::get('/news', function(){
//     echo 'Ini adalah halaman news';
// });
// Route::get('/news/{title}', function(Request $request, $title){
//     echo 'Ini adalah halaman news dengan judul '.$title;
// });

//nomor 4
// Route::prefix('program')->group(function(){
//     Route::get('/karir', [Program::class, 'karir']);
//     Route::get('/magang', [Program::class, 'magang']);
//     Route::get('/kunjungan-industri', [Program::class, 'kunjunganIndustri']);
// });

//nomor 5
// Route::get('/about-us', function(){
//     echo '1941720221<br>Haarisah Yustika Putri<br>TI-2A';
// });

//nomor 6
// Route::get('/contact-us', [ContactUs::class, 'contact']);

/*Route::view('/blog','Blog' );
Route::view('/contact', 'contact');
Route::view('/product', 'product');
Route::view('/index', 'index');
Route::view('/Home', 'Home');
Route::view('/about', 'about');
Route::view('/product_detail3', 'product_detail3');
*/
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/product_detail3', [HomeController::class, 'product_detail3']);

