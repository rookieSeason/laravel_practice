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
Route::get('/', [StudentController::class, 'index'])->middleware('auth');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login/process', [UserController::class, 'process'])->name('process');
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/add/student', [StudentController::class, 'create'])->name('create');
Route::post('/add/student', [StudentController::class, 'store'])->name('store');

Route::get('/student/{id}', [StudentController::class, 'show'])->name('show');
Route::put('/student/{id}', [StudentController::class, 'update'])->name('update');
Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('destroy');






// Route::get('/', [UserController::class, 'index'])->name('login');
// Route::get('/student', [StudentController::class, 'index'])->name('index');
