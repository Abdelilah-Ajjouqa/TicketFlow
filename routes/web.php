<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UsersController::class, 'index'])->name('index');
Route::get('/home', function(){
    return view('pages.home');
})->name('home');

// auth Routes

Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// tickets Routes
Route::get('/tickets', function () {
    return view('tickets.index');
})->name('tickets.index');

Route::get('/tickets/create', function () {
    return view('tickets.create');
})->name('tickets.create');

Route::get('/tickets/{ticket}', function () {
    return view('tickets.show');
})->name('tickets.show');