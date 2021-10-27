<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelompokpenjualController;
use App\Http\Controllers\PenjualController;

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
Route::get('/',[HomeController::class, 'index']);

Route::get('/kelompokpenjual',[KelompokpenjualController::class, 'index'])->name('kelompokpenjual');
Route::get('/kelompokpenjual/detail/{id_penjual}',[KelompokpenjualController::class, 'detail']);
Route::get('/kelompokpenjual/add',[KelompokpenjualController::class, 'add']);
Route::post('/kelompokpenjual/insert',[KelompokpenjualController::class, 'insert']);
Route::get('/kelompokpenjual/edit/{id_kelompokpenjual}',[KelompokpenjualController::class, 'edit']);
Route::post('/kelompokpenjual/update/{id_kelompokpenjual}',[KelompokpenjualController::class, 'update']);
Route::get('/kelompokpenjual/delete/{id_kelompokpenjual}',[KelompokpenjualController::class, 'delete']);

Route::get('/penjual',[PenjualController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

