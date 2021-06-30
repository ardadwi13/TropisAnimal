<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;

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

//WELCOME
Route::get('/welcome', function () {
    return view('welcome');
});

//USER
Route::get('/', function () {
    return view('user.home');
});

Route::get('/tentang', function () {
    return view('user.tentang');
});

Route::get('/berita', function () {
    return view('user.berita');
});

Route::get('/galeri', function () {
    return view('user.galeri');
});

Route::get('/kontak', function () {
    return view('user.kontak');
});

//LOGIN
Route::get('/admin', function () {
    return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//ADMIN-PROFILE
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/detail/{id}', [ProfileController::class, 'detail']);
Route::get('/profile/add', [ProfileController::class, 'add']);
Route::post('/profile/insert', [ProfileController::class, 'insert']);
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit']);
Route::post('/profile/update/{id}', [ProfileController::class, 'update']);
Route::get('/profile/delete/{id}', [ProfileController::class, 'delete']);

//ADMIN-BERITA
Route::get('/news', [BeritaController::class, 'index'])->name('berita');
Route::get('/news/detail/{id}', [BeritaController::class, 'detail']);
Route::get('/news/add', [BeritaController::class, 'add']);
Route::post('/news/insert', [BeritaController::class, 'insert']);
Route::get('/news/edit/{id}', [BeritaController::class, 'edit']);
Route::post('/news/update/{id}', [BeritaController::class, 'update']);
Route::get('/news/delete/{id}', [BeritaController::class, 'delete']);

//ADMIN-GALERI
Route::get('/galery', [GaleriController::class, 'index'])->name('galeri');
Route::get('/galery/detail/{id}', [GaleriController::class, 'detail']);
Route::get('/galery/add', [GaleriController::class, 'add']);
Route::post('/galery/insert', [GaleriController::class, 'insert']);
Route::get('/galery/edit/{id}', [GaleriController::class, 'edit']);
Route::post('/galery/update/{id}', [GaleriController::class, 'update']);
Route::get('/galery/delete/{id}', [GaleriController::class, 'delete']);

//ADMIN-KONTAK
Route::get('/contact', [KontakController::class, 'index'])->name('kontak');
Route::get('/contact/detail/{id}', [KontakController::class, 'detail']);
Route::get('/contact/add', [KontakController::class, 'add']);
Route::post('/contact/insert', [KontakController::class, 'insert']);
Route::get('/contact/edit/{id}', [KontakController::class, 'edit']);
Route::post('/contact/update/{id}', [KontakController::class, 'update']);
Route::get('/contact/delete/{id}', [KontakController::class, 'delete']);