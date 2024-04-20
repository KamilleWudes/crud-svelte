<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\clientController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('welcome');
});

// Route::get('/clients', [App\Http\Controllers\clientController::class, 'index'])->name('clients');


// Route::get('/clients/create', [App\Http\Controllers\clientController::class, 'create'])->name('clients_create');


// Route::post('/clients', [App\Http\Controllers\clientController::class, 'store'])->name('clients_store');

// Route::get('/clients/{client}/edit', [App\Http\Controllers\clientController::class, 'edit'])->name('clients_edit');

// Route::put('/clients/{client}', [App\Http\Controllers\clientController::class, 'update'])->name('clients_update');

// Route::get('/clients/{client}', [App\Http\Controllers\clientController::class, 'show'])->name('clients_show');

// Route::delete('/clients/{client}', [App\Http\Controllers\clientController::class, 'destroy'])->name('clients_destroy');

Route::resource('/clients',clientController::class);
