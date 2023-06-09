<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/', [StudentController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login']);

// Route::get('/', [UserController::class, 'index'])->name('login');
// Route::get('/student', [StudentController::class, 'index'])->name('index');
