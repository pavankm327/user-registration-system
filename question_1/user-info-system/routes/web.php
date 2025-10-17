<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('users.index');
})->name('users.index');

Route::post('users', [UserController::class, 'store'])->name('users.store');
