<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'Read'])->name('tasks.read');
Route::get('/create', [HomeController::class, 'create'])->name('tasks.create');
Route::post('/create', [HomeController::class, 'assistant_create'])->name('home.assistant_create');
Route::get('/tasks/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
Route::put('/tasks/update/{id}', [HomeController::class, 'update'])->name('home.update');
Route::delete('/tasks/delete/{id}', [HomeController::class, 'delete'])->name('home.delete');
Route::get('/tasks/create', [HomeController::class, 'create'])->name('home.create');