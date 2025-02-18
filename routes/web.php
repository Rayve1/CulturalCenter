<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Events
Route::get('/events', function () {
   return view('events'); 
})->name('events');
Route::get('/events/{id}', function ($id) {
    return view('event', ['id' => $id]); 
})->name('event');

 // Exhibitions
Route::get('/exhibitions', function () {
    return view('exhibitions'); 
})->name('exhibitions');
Route::get('/exhibitions/{id}', function ($id) {
    return view('exhibition', ['id' => $id]); 
})->name('exhibition');

// About us
Route::get('/aboutUs', function () {
    return view('aboutUs'); 
})->name('aboutUs');

// Contacts
Route::get('/contacts', function () {
    return view('contacts'); 
})->name('contacts');

// Profile
Route::get('/profile', function () {
    return view('profile'); 
})->name('profile');

// Authorization
Route::get('/authorization', function () {
    return view('Auth.authorization');
})->name('authorization');
Route::post('/authorization', [UserController::class, 'UserAuthorization']);

// Registration
Route::get('/registration', function () {
    return view('Auth.registration'); 
})->name('registration');
Route::post('/registration', [UserController::class, 'UserRegistration']);

// Logout
Route::get('/logout', [UserController::class, 'UserLogout'])->name('logout');

// Admin Panel
Route::get('/adminPanel', function () {
    return view('Admin.adminPanel'); 
})->name('adminPanel');