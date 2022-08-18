<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

// People
Route::get('/people', [App\Http\Controllers\PeopleController::class, 'index'])->name('people.index');

// Planets
Route::get('/planets', [App\Http\Controllers\PlanetsController::class, 'index'])->name('planets.index');

// Species
Route::get('/species', [App\Http\Controllers\SpeciesController::class, 'index'])->name('species.index');
