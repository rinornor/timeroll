<?php

use App\Http\Controllers\AppearanceController;
use App\Livewire\ShowAppearances;
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
Route::resource('/appearance', AppearanceController::class);
Route::get('download-pdf', [AppearanceController::class, 'generatePDF'])->name('download-pdf');

//Livewire

Route::get('/livewire/appearances', ShowAppearances::class);

// Jetstream
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
