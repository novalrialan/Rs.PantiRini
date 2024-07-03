<?php

use App\Http\Controllers\PegawaiController;
use App\Models\Pegawai;
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





Route::post('/login', [PegawaiController::class, 'authenticate'])->name('login');

Route::get('/', function () {
    return view('pages.home.login');
});


// Group Auth Employee
Route::middleware(['middleware' => 'employee.auth'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('pages.home.dashboard');
    // })->name('dashboard');

    Route::get('/dashboard', [PegawaiController::class, 'dashboard'])->name('dashboard');

    Route::get('/register', function () {
        return view('pages.home.register');
    });

    Route::get('/listpegawai', [PegawaiController::class, 'index'])->name('listpegawai');
});
