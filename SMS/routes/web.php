<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;

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

//================>Home page routes goes here<=========================
Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/course-detail', [WebController::class, 'detail'])->name('course-detail');
Route::get('/user-login', [AuthController::class, 'login'])->name('user-login');
Route::get('/user-register', [AuthController::class, 'register'])->name('user-register');


//================>Home page routes Ends here<=========================
//================>Admin page routes starts here<======================



//================>Admin page routes Ends here<=========================
//================>Student page routes Starts here<=====================



//================>Student page routes Ends here<=======================
//================>Teacher page routes Starts here<=====================


//================>Teacher page routes Ends here<=======================

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
