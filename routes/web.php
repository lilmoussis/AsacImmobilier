<?php

use App\Http\Controllers\Admins\MainController;
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
    return view('admins/login');
});
Route::get('admins', [App\Http\Controllers\Admins\MainController::class,'login'])->name('admins.login');
Route::post('admins', [App\Http\Controllers\Admins\MainController::class,'loginform'])->name('admins.loginform');
Route::get('admins/dashboard', [App\Http\Controllers\Admins\MainController::class,'dashboard'])->name('admins.dashboard');
Route::get('admins/logout', [App\Http\Controllers\Admins\MainController::class,'logout'])->name('admins.logout');

        // Routes de Client

Route::get('admins/clients/index', [App\Http\Controllers\Admins\ClientController::class,'index'])->name('admins.clients.index');
Route::get('admins/clients/create', [App\Http\Controllers\Admins\ClientController::class,'create'])->name('admins.clients.create');
Route::post('admins/clients/store', [App\Http\Controllers\Admins\ClientController::class,'store'])->name('admins.clients.store');
Route::get('admins/clients/{id}/destroy', [App\Http\Controllers\Admins\ClientController::class,'destroy'])->name('admins.clients.destroy');
Route::get('admins/clients/{id}/edit', [App\Http\Controllers\Admins\ClientController::class,'edit'])->name('admins.clients.edit');
Route::post('admins/clients/{id}/update', [App\Http\Controllers\Admins\ClientController::class,'update'])->name('admins.clients.update');

        // Routes de Avocat

Route::get('admins/avocats/index', [App\Http\Controllers\Admins\AvocatController::class,'index'])->name('admins.avocats.index');
Route::get('admins/avocats/create', [App\Http\Controllers\Admins\AvocatController::class,'create'])->name('admins.avocats.create');
Route::post('admins/avocats/store', [App\Http\Controllers\Admins\AvocatController::class,'store'])->name('admins.avocats.store');
Route::get('admins/avocats/{id}/destroy', [App\Http\Controllers\Admins\AvocatController::class,'destroy'])->name('admins.avocats.destroy');
Route::get('admins/avocats/{id}/edit', [App\Http\Controllers\Admins\AvocatController::class,'edit'])->name('admins.avocats.edit');
Route::post('admins/avocats/{id}/update', [App\Http\Controllers\Admins\AvocatController::class,'update'])->name('admins.avocats.update');

        // Routes de Appartement

Route::get('admins/appartements/index', [App\Http\Controllers\Admins\AppartementController::class,'index'])->name('admins.appartements.index');
Route::get('admins/appartements/create', [App\Http\Controllers\Admins\AppartementController::class,'create'])->name('admins.appartements.create');
Route::post('admins/appartements/store', [App\Http\Controllers\Admins\AppartementController::class,'store'])->name('admins.appartements.store');
Route::get('admins/appartements/{id}/destroy', [App\Http\Controllers\Admins\AppartementController::class,'destroy'])->name('admins.appartements.destroy');
Route::get('admins/appartements/{id}/edit', [App\Http\Controllers\Admins\AppartementController::class,'edit'])->name('admins.appartements.edit');
Route::post('admins/appartements/{id}/update', [App\Http\Controllers\Admins\AppartementController::class,'update'])->name('admins.appartements.update');

        // Routes de Immeuble

Route::get('admins/immeubles/index', [App\Http\Controllers\Admins\ImmeubleController::class,'index'])->name('admins.immeubles.index');
Route::get('admins/immeubles/create', [App\Http\Controllers\Admins\ImmeubleController::class,'create'])->name('admins.immeubles.create');
Route::post('admins/immeubles/store', [App\Http\Controllers\Admins\ImmeubleController::class,'store'])->name('admins.immeubles.store');
Route::get('admins/immeubles/{id}/destroy', [App\Http\Controllers\Admins\ImmeubleController::class,'destroy'])->name('admins.immeubles.destroy');
Route::get('admins/immeubles/{id}/edit', [App\Http\Controllers\Admins\ImmeubleController::class,'edit'])->name('admins.immeubles.edit');
Route::post('admins/immeubles/{id}/update', [App\Http\Controllers\Admins\ImmeubleController::class,'update'])->name('admins.immeubles.update');

        // Routes de directeur

Route::get('admins/directeurs/index', [App\Http\Controllers\Admins\DirecteurController::class,'index'])->name('admins.directeurs.index');
Route::get('admins/directeurs/create', [App\Http\Controllers\Admins\DirecteurController::class,'create'])->name('admins.directeurs.create');
Route::post('admins/directeurs/store', [App\Http\Controllers\Admins\DirecteurController::class,'store'])->name('admins.directeurs.store');
Route::get('admins/directeurs/{id}/destroy', [App\Http\Controllers\Admins\DirecteurController::class,'destroy'])->name('admins.directeurs.destroy');
Route::get('admins/directeurs/{id}/edit', [App\Http\Controllers\Admins\DirecteurController::class,'edit'])->name('admins.directeurs.edit');
Route::post('admins/directeurs/{id}/update', [App\Http\Controllers\Admins\DirecteurController::class,'update'])->name('admins.directeurs.update');

        // Routes de visite

Route::get('admins/visites/index', [App\Http\Controllers\Admins\VisiteController::class,'index'])->name('admins.visites.index');
Route::get('admins/visites/create', [App\Http\Controllers\Admins\VisiteController::class,'create'])->name('admins.visites.create');
Route::post('admins/visites/store', [App\Http\Controllers\Admins\VisiteController::class,'store'])->name('admins.visites.store');
Route::get('admins/visites/{id}/destroy', [App\Http\Controllers\Admins\VisiteController::class,'destroy'])->name('admins.visites.destroy');
Route::get('admins/visites/{id}/edit', [App\Http\Controllers\Admins\VisiteController::class,'edit'])->name('admins.visites.edit');
Route::post('admins/visites/{id}/update', [App\Http\Controllers\Admins\VisiteController::class,'update'])->name('admins.visites.update');

        // Routes de promesse

Route::get('admins/promesses/index', [App\Http\Controllers\Admins\PromesseController::class,'index'])->name('admins.promesses.index');
Route::get('admins/promesses/create', [App\Http\Controllers\Admins\PromesseController::class,'create'])->name('admins.promesses.create');
Route::post('admins/promesses/store', [App\Http\Controllers\Admins\PromesseController::class,'store'])->name('admins.promesses.store');
Route::get('admins/promesses/{id}/destroy', [App\Http\Controllers\Admins\PromesseController::class,'destroy'])->name('admins.promesses.destroy');
Route::get('admins/promesses/{id}/edit', [App\Http\Controllers\Admins\PromesseController::class,'edit'])->name('admins.promesses.edit');
Route::post('admins/promesses/{id}/update', [App\Http\Controllers\Admins\PromesseController::class,'update'])->name('admins.promesses.update');

        // Routes de desistement

Route::get('admins/desistements/index', [App\Http\Controllers\Admins\DesistementController::class,'index'])->name('admins.desistements.index');
Route::get('admins/desistements/create', [App\Http\Controllers\Admins\DesistementController::class,'create'])->name('admins.desistements.create');
Route::post('admins/desistements/store', [App\Http\Controllers\Admins\DesistementController::class,'store'])->name('admins.desistements.store');
Route::get('admins/desistements/{id}/destroy', [App\Http\Controllers\Admins\DesistementController::class,'destroy'])->name('admins.desistements.destroy');
Route::get('admins/desistements/{id}/edit', [App\Http\Controllers\Admins\DesistementController::class,'edit'])->name('admins.desistements.edit');
Route::post('admins/desistements/{id}/update', [App\Http\Controllers\Admins\DesistementController::class,'update'])->name('admins.desistements.update');
        
