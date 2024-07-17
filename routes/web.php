<?php

use App\Http\Controllers\ABAController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/scan', function () {
    return view('scan');
});
Route::get('/',[usersController::class,'login'])->name('login');
Route::get('/register',[usersController::class,'register']);
Route::post('/login',[usersController::class,'login_submit']);
Route::post('/register-submit',[usersController::class,'register_submit']);
Route::middleware(['auth'])->group(function(){
    Route::get('/ABA',[ABAController::class,'aba']);
    Route::get('/ABA/Profile',[ABAController::class,'profile']);
    Route::get('/ABA/scan',[ABAController::class,'scan']);
    Route::get('/logout',[ABAController::class,'logout']);
    Route::get('/ABA/account',[ABAController::class,'account']);
    Route::get('/ABA/transfer',[ABAController::class,'transfer']);
    Route::get('/ABA/payment',[ABAController::class,'payment']);
    Route::get('/ABA/qr',[ABAController::class,'qr']);
    Route::post('/ABA/scan/submit',[ABAController::class,'scanSubmit']);
});

