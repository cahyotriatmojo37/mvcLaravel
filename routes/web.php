<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
// 

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

Route::get('/', function () {
    return view('home');
});
// Route::resource('daftar', 'DaftarController');
Route::get('/daftar', [DaftarController::class, 'index']);
