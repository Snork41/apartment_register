<?php

use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('index');

Route::resource('houses', HouseController::class);
//  Route::get('/houses', [HouseController::class, 'index'])->name('houses.index');
//  Route::get('/houses/create', [HouseController::class, 'create'])->name('houses.create');
//  Route::post('/houses', [HouseController::class, 'store'])->name('houses.store');
//  Route::get('/houses/{house}', [HouseController::class, 'show'])->name('houses.show')->whereNumber('house');
//  Route::get('/houses/{house}/edit', [HouseController::class, 'edit'])->name('houses.edit');
//  Route::put('/houses/{house}', [HouseController::class, 'update'])->name('houses.update');
//  Route::delete('/houses/{house}', [HouseController::class, 'destroy'])->name('houses.destroy');

Route::resource('persons', PersonController::class);

Route::resource('apartments', ApartmentController::class);

Route::resource('owners', OwnerController::class);

// Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');
// Route::post('/registration', [RegistrationController::class, 'store'])->name('registration.store');

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'store'])->name('login.store');