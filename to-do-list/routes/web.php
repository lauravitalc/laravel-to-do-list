<?php

use App\Http\Controllers\ToDoController;
use App\Models\Todo;
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

Route::get('/', [ToDoController::class, 'index'])->name('index');
Route::get('/create', [ToDoController::class, 'create'])->name('create');
Route::post('/save', [ToDoController::class, 'store'])->name('store');
Route::delete('/destroy/{id}', [ToDoController::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [ToDoController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [ToDoController::class, 'update'])->name('update');
