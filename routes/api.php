<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewUserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'view']);
Route::post('/users', [UserController::class, 'create']);

Route::get('/user/{user}', [ViewUserController::class, 'see']);
Route::get('/usr/{foo}', function (User $foo) {
    return $foo;
});
