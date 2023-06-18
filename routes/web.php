<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

    Route::get('/input-suara', \App\Http\Livewire\TpsInput::class)->name('input-suara');
    Route::get('/list-suara', \App\Http\Livewire\TpsList\Index::class)->name('list-suara.index');
    Route::get('/list-suara/{id}/edit', \App\Http\Livewire\TpsList\Edit::class)->name('list-suara.edit');
    Route::get('/list-suara/{id}/view', \App\Http\Livewire\TpsList\View::class)->name('list-suara.view');

    Route::get('/test', \App\Http\Livewire\TestFoto::class)->name('test');

    Route::get('/old-dashboard', \App\Http\Livewire\DashboardPerolehanSuara::class)->name('old-dashboard');
    Route::get('/dashboard/dapil', \App\Http\Livewire\Dashboard\DprdKab\PerDapil\Master::class)->name('dashboard');
    Route::get('/dashboard/dapil/{dapil}', \App\Http\Livewire\Dashboard\DprdKab\PerDapil\Dapil::class)->name('dashboard.per-dapil');

    Route::get('/dashboard/wilayah/', \App\Http\Livewire\Dashboard\DprdKab\PerWilayah\Master::class)->name('dashboard.per-wilayah');
    Route::get('/dashboard/wilayah/{prov}', \App\Http\Livewire\Dashboard\DprdKab\PerWilayah\Prov::class)->name('dashboard.per-prov');
    Route::get('/dashboard/wilayah/{prov}/{kab_kota}', \App\Http\Livewire\Dashboard\DprdKab\PerWilayah\KabKota::class)->name('dashboard.per-kab_kota');
    Route::get('/dashboard/wilayah/{prov}/{kab_kota}/{kec}', \App\Http\Livewire\Dashboard\DprdKab\PerWilayah\Kec::class)->name('dashboard.per-kec');
    Route::get('/dashboard/wilayah/{prov}/{kab_kota}/{kec}/{kel}', \App\Http\Livewire\Dashboard\DprdKab\PerWilayah\Kel::class)->name('dashboard.per-kel');
    Route::get('/dashboard/wilayah/{prov}/{kab_kota}/{kec}/{kel}/{tps}', \App\Http\Livewire\Dashboard\DprdKab\PerWilayah\Tps::class)->name('dashboard.per-tps');

    Route::get('/dashboard/wilayah/{prov}/{kab_kota}/{kec}/{kel}/{tps}/paslon', \App\Http\Livewire\Dashboard\DprdKab\PerWilayah\Paslon::class)->name('dashboard.per-tps-paslon');
    Route::get('/dashboard/wilayah/{prov}/{kab_kota}/{kec}/{kel}/{tps}/{partai}', \App\Http\Livewire\Dashboard\DprdKab\PerWilayah\Partai::class)->name('dashboard.per-tps-partai');
    // Route::get('/dashboard/{kab_kota}/', \App\Http\Livewire\Dashboard\DprdKab\KabKota::class)->name('dashboard.per-kab_kota');

    // Route::get('/dashboard/{kategoriPemiluActive}/{kategoriDataActive}', \App\Http\Livewire\Dashboard\PilpresDashboard::class)->name('pilpres.dashboard');
    // Route::get('/dashboard/dpr', \App\Http\Livewire\Dashboard\DprDashboard::class)->name('dpr-dashboard');
    // Route::get('/dashboard/dprd-prov', \App\Http\Livewire\Dashboard\DprdProvDashboard::class)->name('dprd-prov.dashboard');
    // Route::get('/dashboard/dprd-kab', \App\Http\Livewire\Dashboard\DprdKabDashboard::class)->name('dprd-kab.dashboard');
    // Route::get('/dashboard/dpd', \App\Http\Livewire\Dashboard\DpdDashboard::class)->name('dpd.dashboard');
    // Route::get('/input-suara', \App\Http\Livewire\InputDataSuara::class)->name('input-suara');

    // Route::get('data-tps/eja', \App\Http\Livewire\InputDataSuara\Input::class)->name('data-tps.eja');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
