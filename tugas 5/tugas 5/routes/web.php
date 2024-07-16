<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile');
});

use App\Http\Controllers\ProfileController;

Route::get('/', [ProfileController::class, 'index']);
