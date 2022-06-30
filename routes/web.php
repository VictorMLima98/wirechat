<?php

use App\Http\Livewire\ChatRoom;
use App\Http\Livewire\Login;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'guest'
], function () {
    Route::get('/login', Login::class)->name('login');
});

Route::group([
    'middleware' => 'auth'
], function () {
    Route::get('/', ChatRoom::class)->name('chat-room');
});
