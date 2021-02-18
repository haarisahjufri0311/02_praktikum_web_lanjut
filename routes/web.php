<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'artikel']);
