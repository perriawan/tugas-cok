<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\makananController;

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
Route::get('profil', function () {
    return view('profil');
});
Route::get('logo', function () {
    return view('logo');
});
Route::get('desain', function () {
    return view('desain');
});
//Route::get('/penjualan', function () {
//  return view('penjualan.add');
//});
Route::get('/penjualan/create', [makananController::class, 'create']);
Route::post('/penjualan/store', [makananController::class, 'store']);
