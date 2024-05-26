<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/recap', [AdminController::class, 'recap'])->name('recap');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/cooperation', [AdminController::class, 'cooperation'])->name('cooperation');
Route::get('/implementation', [AdminController::class, 'implementation'])->name('implementation');
Route::get('/companion', [AdminController::class, 'companion'])->name('companion');
Route::get('/operator', [AdminController::class, 'operator'])->name('operator');



Route::get('/login', function () {
    return view('auth.login');
});