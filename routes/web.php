<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('index');
Route::get('/wali', [App\Http\Controllers\WaliController::class, 'index'])->name('wali.index');
Route::post('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create'])->name('create');
Route::get('/siswa/{id}/edit', [App\Http\Controllers\SiswaController::class, 'edit'])->name('edit');
Route::post('/siswa/{id}/update', [App\Http\Controllers\SiswaController::class, 'update'])->name('update');
Route::get('/siswa/{id}/delete', [App\Http\Controllers\SiswaController::class, 'delete'])->name('delete');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
