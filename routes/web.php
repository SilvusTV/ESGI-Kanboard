<?php

use App\Events\ChatMessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\IndexController;

Route::post('/send-message', function (Request $request) {
    $request->validate([
        'username' => 'required|string|max:255',
        'message' => 'required|string|max:1000',
    ]);

    Log::info('📩 Message reçu par Laravel', [
        'username' => $request->username,
        'message' => $request->message
    ]);

    event(new ChatMessageSent($request->username, $request->message));

    return response()->json(['success' => true]);
});

Route::get('/', [IndexController::class, 'indexView'])->name('index.view');
Route::get('/about-us', [IndexController::class, 'aboutUsView'])->name('aboutus.view');
Route::get('/prices', [IndexController::class, 'pricesView'])->name('prices.view');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login.view');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register.view');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register.post');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


