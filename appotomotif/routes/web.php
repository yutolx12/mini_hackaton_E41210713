<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtomotifController;
use App\Http\Controllers\DashboardController;

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

// route untuk masuk ke tampilan utama aplikasi
Route::group(['namespace' => ''], function () {
    Route::resource('dashboard', DashboardController::class);
    // OtomotifController merupakan main Controller di dalam nya terdapat fungsi utama untuk CRUD
    Route::resource('otomotif', OtomotifController::class);
});
