<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;




Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/directions/{symbol_code}', [HomeController::class, 'direction'])->name('directions.show');

Route::post('/directions/{symbol_code}/products', [ProductController::class, 'store'])->name('products.store');

Route::delete('/directions/{symbol_code}/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::delete('/directions/{symbol_code}/products/{product}', [ProductController::class, 'destroy'])
    ->name('products.destroy');


Route::get('/profile', [ProfileController::class, 'show'])->name('user.edit');

Route::get('/logout', function () {
    Auth::logout(); // ✅ logs out the user
    return redirect('/login'); // 🔁 go back to login
})->name('logout');


Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

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