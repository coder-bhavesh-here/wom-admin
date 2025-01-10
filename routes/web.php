<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('blogs.index');
    })->name('dashboard');
    Route::resource('blogs', BlogController::class);
});
