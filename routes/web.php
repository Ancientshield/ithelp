<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

// Route::get('/', function () {
//     return view('welcome');
// });

//「controller:」可以不用寫，因為那是phpStorm的提示
Route::resource('articles', ArticlesController::class);

Route::get('/', [ArticlesController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
