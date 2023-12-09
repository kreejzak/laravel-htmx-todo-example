<?php

use App\Http\Controllers\TodoController;
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

Route::controller(TodoController::class)->group(function () {
    Route::get('/', 'index')->name('todos.index');
    Route::get('/todos', 'index')->name('todos.index');
    Route::post('/todos', 'store')->name('todos.store');
    Route::put('/todos/{todo}', 'update')->name('todos.update');
    Route::delete('/todos/{todo}', 'destroy')->name('todos.destroy');
});
