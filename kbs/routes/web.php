<?php

use App\Http\Controllers\Admin\tamuController as AdminTamuController;
use App\Http\Controllers\user\tamuController;
use App\Http\Controllers\dashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::post('simpan-bukutamu',[tamuController::class, 'simpanTamu'])->name('simpan-bukutamu');

Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');

Route::get('admin/tamu', [tamuController::class, 'index'])->name('admin/tamu');

