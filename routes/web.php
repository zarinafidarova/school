<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', function () {
    return view('home');
});

// Форма авторизации
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Выход
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Защищенная страница (только для авторизованных пользователей)
Route::get('/home/{id}', function ($id) {
    return view('home', ['id' => $id]);
})->name('home');
