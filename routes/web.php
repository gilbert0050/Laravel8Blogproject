<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::post('/blog', [App\Http\Controllers\PstController::class, 'store'])->name('blog');
Route::get('/blog', [App\Http\Controllers\PstController::class, 'index'])->name('blog');
Route::get('/blog/{id}/edit', [App\Http\Controllers\PstController::class, 'edit'])->name('edit');
Route::patch('/blog/{id}', [App\Http\Controllers\PstController::class, 'update'])->name('blog');
Route::delete('/blog/{id}', [App\Http\Controllers\PstController::class, 'destroy'])->name('blog');
