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
    Route::get('/', 'index');
    Route::get('/todos', 'index');
    Route::post('/todos', 'store');
    Route::put('/todos/{todo}', 'update');
    Route::delete('/todos/{todo}', 'destroy');
});
