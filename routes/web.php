<?php

use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'index']); // Dentro da class chama a function index
Route::get('/events/create', [EventController::class, 'create']); 
Route::get('{id}', [EventController::class, 'show']); 
Route::post('/', [EventController::class, 'store'])->name('events-store'); 


