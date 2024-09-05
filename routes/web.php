<?php

use Illuminate\Support\Facades\Route;

//praktikum 2
use App\Http\Controllers\PhotoController;
// Route::get(‘/hello’, [WelcomeController::class,’hello’]);


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

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Nama: Fifi Novitasari, Nim: 2241760035';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya'.$name;
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID'.$id;
});

    
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='Fifi') { 
    return 'Nama saya '.$name;
});

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/hello',[WelcomeController::class 'hello']);

Route::get('/articles/{id}', [WelcomeController::class, 'articles']);

Route::resource('photos', PhotoController::class)-
only([ 'index', 'show']);

Route::resource('photos', PhotoController::class)-
except([ 'create', 'store', 'update', 'destroy']);

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Fifi']);
    });

Route::get('/halaman', [HomeController::class, 'index']);

Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

Route::get('/penjualanPOS', [SalesController::class, 'index']);

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);