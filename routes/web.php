<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store');