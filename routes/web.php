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
Route::get('/create', [App\Http\Controllers\TodoController::class, 'create'])->name('create');
Route::post('/createTodo', [App\Http\Controllers\TodoController::class, 'addTodo'])->name('addTodo');
Route::get('/isi', [App\Http\Controllers\CpenerimaController::class, 'isi'])->name('isi');
Route::post('/createIsi', [App\Http\Controllers\CpenerimaController::class, 'addIsi'])->name('addIsi');
Route::delete('/deleteTodo{id}', [App\Http\Controllers\TodoController::class, 'deleteTodo'])->name('deleteTodo');
Route::get('/penerima',[App\Http\Controllers\TodoController::class, 'penerima'])->name('penerima');

Route::get('/edit{id}',[App\Http\Controllers\TodoController::class, 'edit'])->name('edit');
Route::post('/editTodo{id}',[App\Http\Controllers\TodoController::class, 'editTodo'])->name('editTodo');
