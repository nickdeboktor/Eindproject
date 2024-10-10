<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\athletesController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('athletes', athletesController::class);
Route::resource('events', EventController::class);

