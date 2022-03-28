<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotifyController;

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

Route::get('/home', [SpotifyController::class, 'index'])->name('home');
Route::get('/tambah', [SpotifyController::class, 'tambah'])->name('tambah');
Route::post('/insertdata', [SpotifyController::class, 'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}', [SpotifyController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [SpotifyController::class, 'updatedata'])->name('updatedata');
Route::get('/detail/{id}', [SpotifyController::class, 'detail'])->name('detail');
Route::get('/delete/{id}', [SpotifyController::class, 'delete'])->name('delete');

require __DIR__.'/auth.php';
