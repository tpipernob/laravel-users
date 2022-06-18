<?php

use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;


Route::get('/users', [UserController::class, 'index']) -> name('users.index');
Route::get('/users/create', [UserController::class, 'create']) -> name('users.create'); //tem que ser ser antes da show
Route::post('/users/', [UserController::class, 'store']) -> name('users.store');
Route::get('/users/{id}', [UserController::class, 'show']) -> name('users.show');


Route::get('/', function () {
    return view('welcome');
});
