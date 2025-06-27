<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Direction; 


Route::get('/',function() {
    $directions = Direction::all();
    return view('index', compact('directions'));
})->name('home');

Route::get('/directions/{symbol_code}', function ($symbol_code) {
    $direction = Direction::where('symbol_code', $symbol_code)->firstOrFail();
    return view('directions', compact('direction'));
});
Route::get('/login',[AuthManager::class,'login'])->name('login');
Route::post('/login',[AuthManager::class,'loginPost'])->name('login.post');

// Route::get('/auth', function () {
//     return view('login');
// })->middleware('guest')->name('login');

// // Handle login
// Route::post('/auth', function (Request $request) {
//     $credentials = $request->only('login', 'password');

//     if (Auth::attempt($credentials)) {
//         $request->session()->regenerate();
//         return redirect()->intended('/');
//     }

//     return back()->withErrors([
//         'email' => 'Неверный email или пароль.',
//     ]);
// });


// // Homepage after login
// Route::get('/', function () {
//     return view('layouts.index');
// })->middleware('auth');