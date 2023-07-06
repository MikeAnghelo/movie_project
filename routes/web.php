<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\CompaniaController;
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

#referencia al index, retomamos la vista template
Route::get('/', function () {
    return view('template');
});

Route::get('/peliculas',[MovieController::class, 'index'])->name('getMovies');

Route::get('/formPeliculas',[MovieController::class, 'viewForm'])->name('formMovies');

Route::post('/savePeliculas',[MovieController::class, 'store'])->name('saveMovies');

Route::get('/editPeliculas/{id}',[MovieController::class, 'edit'])->name('editMoviesById');

Route::put('/updatePeliculas/{id}',[MovieController::class, 'update'])->name('updateMoviesById');

Route::delete('/deletePeliculas/{id}',[MovieController::class, 'destroy'])->name('deleteMoviesById');

Route::get('/directores',[DirectorController::class, 'index'])->name('getDirectors');

Route::get('/formDirectores',[DirectorController::class, 'viewForm'])->name('formDirectors');

Route::post('/saveDirectores',[DirectorController::class, 'store'])->name('saveDirectors');

Route::get('/companias',[CompaniaController::class, 'index'])->name('getCompany');

Route::get('/formCompanias',[CompaniaController::class, 'viewForm'])->name('formCompany');

Route::post('/saveCompanias',[CompaniaController::class, 'store'])->name('saveCompany');
