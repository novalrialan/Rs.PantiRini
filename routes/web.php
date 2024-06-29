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


Route::get('/', function () {
    return view('pages.home.login');
});
// Auth Employee
Route::post('/authenticate', [PegawaiController::class, 'authenticate']);


Route::group(['middleware' => ['auth.employee']], function () {
    Route::get('/dashboard', function () {
        return view('pages.home.dashboard');
    });

    Route::get('/register', function () {
        return view('pages.home.register');
    });
    Route::get('/pegawai', [PegawaiController::class, 'index']);
});
