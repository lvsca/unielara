<?php

use App\Http\Controllers\BountyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Models\Transaction;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('profiles', ProfileController::class)
->only('index', 'edit', 'update')
->middleware('auth');

Route::resource('bounty', BountyController::class)
->only('index', 'show', 'create', 'store')->middleware('auth');

Route::resource('wallet', TransactionController::class)
->only('index', 'store')->middleware('auth', 'verified');
