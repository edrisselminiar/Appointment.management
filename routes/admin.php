<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjouterController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth','is_admin')->group(function(){
    
    
    Route::resource('rendezvous', AppointmentController::class);
    
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::delete('/deleterendezvous', [AppointmentController::class, 'destroy'])->name('deleterendezvous');
    Route::get('/editerendezvous/{id?}', [AppointmentController::class, 'edit'])->name('editerendezvous');
    Route::put('/updaterendezvous/{id?}', [AppointmentController::class, 'update'])->name('updaterendezvous');
    Route::get('/appointmentsearch', [AppointmentController::class, 'search']);
    Route::get('/ajouterrendezvous', [AjouterController::class, 'index'])->name('ajouterrendezvous');
    // Route::get('/appointmentsearch', [AppointmentController::class, 'search'])->name('appointmentsearch');
    Route::get('/appointments', [AjouterController::class, 'indexA'])->name('appointments');
Route::get('/appointments/create', [AjouterController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AjouterController::class, 'store'])->name('appointments.store');


    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/listeRendez.dashboard', [AppointmentController::class, 'index'])->name('listeRendez.dashboard');
  
    Route::get('/rendezAousAujourdhui', [AppointmentController::class, 'indexB'])->name('rendezAousAujourdhui');
    // Route::put('/rendezvous/{rendezvous}', 'AppointmentController@update')->name('rendezvous.update');
// Route::resource('companies', AppointmentController::class);
// Route::resource('Appointment', AppointmentController::class);
    // Route::get('/ajouter', [AjouterController::class, 'index'])->name('ajouter.dashboard');
    // Route::get('/t', function () {
    //     return view('t');
    // });updaterendezvous
    // Route::delete('/listeRendez.dashboard/{id}', 'AppointmentController@destroy')->name('appointments.destroy');
    // Route::delete('/deleteRendez.dashboard/{id}', [AppointmentController::class, 'destroy'])->name('deleteRendez.dashboard');
    // Route::put('/updateRendez.dashboard/{id}', [AppointmentController::class, 'update'])->name('updateRendez.dashboard');
    // Route::get('/editRendez.dashboard/{id}/edit', [AppointmentController::class, 'edit'])->name('editRendez.dashboard');
    // Route::get('/appointments/{id}/edit', 'AppointmentController@edit')->name('appointments.edit');
    // Route::put('/appointments/{id}', 'AppointmentController@update')
    // ->name('appointments.update');
    // Route::get('/listeRendez.dashboard', function () {
    //     return view('admin.listeRendez');
    // })->name('listeRendez.dashboard');
    
});