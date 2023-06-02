<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/', '/login');
Route::middleware('auth')->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard', \App\Http\Livewire\DashboardPerolehanSuara::class)->name('dashboard');
    Route::get('/input-suara', \App\Http\Livewire\InputDataSuara::class)->name('input-suara');
    Route::get('/test', \App\Http\Livewire\TestData::class)->name('test');

    // Route::get('data-tps/eja', \App\Http\Livewire\InputDataSuara\Input::class)->name('data-tps.eja');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
