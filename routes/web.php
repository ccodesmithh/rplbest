<?php

use Illuminate\Support\Facades\App;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\TimeMachineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::get('/timemachine', [TimeMachineController::class, 'index'])->name('timemachine');