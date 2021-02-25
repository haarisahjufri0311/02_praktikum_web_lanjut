<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
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
// Pratikum 1
//no 1 
/*Route::get('/', function () {
    echo "Selamat Datang";
});
//no 2
Route::get('/about', function () {
    echo nl2br("Nama: Muhammad Navis \n \n Nim: 1941720147 \n \n Kelas: TI-2A");
});
//no 3
Route::get('/artikel/{id}', function ($id) {
    echo 'Halaman Artikel' .$id;
});*/

//Pratikum 2
/*Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'artikel']);*/

//Pratikum 3 
/*Route::get('/', [ProductController::class, 'index']);
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'product']);
    Route::get('/edugame', [ProductController::class, 'edugame']);
    Route::get('/kidgame', [ProductController::class, 'kidgame']);
    Route::get('/storybook', [ProductController::class, 'storybook']);
    Route::get('/kidsongs', [ProductController::class, 'kidsongs']);
});
Route::get('/News/{id}', [ProductController::class, 'News']);
Route::prefix('program')->group(function () {
    Route::get('/', [ProductController::class, 'program']);
    Route::get('/karir', [ProductController::class, 'karir']);
    Route::get('/magang', [ProductController::class, 'magang']);
    Route::get('/industri', [ProductController::class, 'industri']);

});
Route::get('/AboutUs', [ProductController::class, 'AboutUs']);

Route::resource('Contact', ContactController::class)->only([
    'index'
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

//Pratikum 1
Route::view('/blog','Blog' );
Route::view('/Contact', 'Contact');
Route::view('/Product', 'Product');
Route::view('/Index', 'Index');