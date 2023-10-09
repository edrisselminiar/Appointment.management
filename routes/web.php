<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

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
Route::get('/test', function () {
    return view('test');
});
Route::get('/t', function () {
    return view('t');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/appointments', function () {
    return view('appointments');
});
Route::get('/showindexuser', [AppointmentController::class, 'indexuser'])->name('showindexuser');
Route::get('/appointmentsA', [AppointmentController::class, 'indexA'])->name('appointmentsA');
Route::get('/appointmentsA/create', [AppointmentController::class, 'create'])->name('appointmentsA.create');
Route::post('/appointmentsA', [AppointmentController::class, 'store'])->name('appointmentsA.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');





});

    






require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
