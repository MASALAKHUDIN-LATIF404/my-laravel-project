<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
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



Route::get('/', [AppController::class, 'index']);


/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/berita', function () {
    return view('berita.berita');
});*/

Route::get('/berita', [AppController::class, 'berita']);

/*Route::get('/detail', function () {
    return view('berita.detail');
});*/

Route::get('/detail/{slug}', [AppController::class, 'detail']);

Route::get('/foto', function () {
    return view('foto.foto');
});

/* FUNGSI CODE ->middleware('guest'); DI BAWAH INI ADALAH UNTUK MENCEGAH ADMIN YANG SUDAH LOGIN KEMBALI KE HALAMAN LOGIN SEBELUM MENG CLICK LOGOUT */
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
/*PROGRAM INI = Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');   TERHUBUNG DENGAN FILE INDEX.BLADE.PHP DI FOLDER RESOURCES/VIEWS/ADMIN/BLOG */
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
/* */
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
/*Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');*/
Route::delete('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');



/* AWAL FOTO CONTROLLER */
/*Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');*/
Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
/*Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');*/
Route::delete('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');

/* AKHIR FOTO CONTROLLER */




/* AWAL VIDEO CONTROLLER */
Route::get('/video', [VideoController::class, 'index'])->name('video')->middleware('auth');
Route::post('/video/store', [VideoController::class, 'store'])->name('video.store')->middleware('auth');
Route::post('/video/update/{id}', [VideoController::class, 'update'])->name('video.update')->middleware('auth');
/*Route::post('/video/destroy/{id}', [VideoController::class, 'destroy'])->name('video.destroy')->middleware('auth');*/
Route::delete('/video/destroy/{id}', [VideoController::class, 'destroy'])->name('video.destroy')->middleware('auth');
/* AKHIR VIDEO CONTROLLER */