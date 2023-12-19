<?php

use Illuminate\Support\Facades\Route;




use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashboardController;
Route::get('/Home', [HomeController::class, 'home']);
Route::get('/dashboard', [dashboardController::class, 'home']);

Route::get('/', function () {
    return view('welcome');
});
/* Route::get('/dashboard', function () {
    return view('dashboard');
}); */

