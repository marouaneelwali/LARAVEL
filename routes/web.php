<?php

use Illuminate\Support\Facades\Route;




use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\GameController;
/* Route::get('/Home', [HomeController::class, 'home']);
Route::get('/dashboard', [dashboardController::class, 'home']);


   */

/* Route::get('/', function () {
    return view('sss',['name'=>'marouane']);
}); */
/* Route::get('/Livre',[LivreController::class,'Livre'] );
Route::get('/Livre/{id}/edit',[LivreController::class,'Livre'] );
Route::get('/Livre/add',[LivreController::class,'AddLivre'] );
Route::post('/Livre/add', [LivreController::class,  'AddLivre']);   */
/* Route::get('/livre', [LivreController::class,'index']);
Route::post('/livre', [LivreController::class,'store']);
Route::post('/livre/{id}/edit', [LivreController::class,'edit']);
Route::put('/livre/{id}', [LivreController::class,'update']);
Route::delete('/livre/{id}', [LivreController::class,'destroy']); */
/* Route::get('/te/{id}', function ($id) {
    echo $id;

}); */
/* Route::get('/dashboard', function () {
    return view('dashboard');
}); */

/* Route::get('/te/{id}/{name?}', [UserController::class, 'User']); */
/* Route::get('/te', [UserController::class, 'Form']);
Route::post('/te', [UserController::class,  'Form']);  
 */

 Route::get('/livre/add', [LivreController::class,'home']);
 Route::post('/livre/add', [LivreController::class,'add']);


Route::get('/livre/{id}/edit', [LivreController::class,'edit']);
Route::put('/livre/{id}/update', [LivreController::class,'update']);
Route::delete('/livre/{id}/delete', [LivreController::class,'delete']);



Route::get('/', function () {
    return view('welcome');
});

Route::post('/start-game', [GameController::class, 'startGame'])->name('start.game');
Route::post('/play-game', [GameController::class, 'playGame'])->name('play.game');

 


