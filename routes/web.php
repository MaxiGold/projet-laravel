<?php
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LogementController;
use App\Http\Controllers\TerrainController;
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
*//*
Route::get('/', 'App\Http\Controllers\Mycontroller@login');
Route::get('/Home', 'App\Http\Controllers\Mycontroller@index');
Route::get('/Client', 'App\Http\Controllers\Mycontroller@client');
Route::get('/Logement', 'App\Http\Controllers\Mycontroller@logement');
Route::get('/Terrain', 'App\Http\Controllers\Mycontroller@terrain');
Route::get('/Achat', 'App\Http\Controllers\Mycontroller@achat');
Route::get('/Profil', 'App\Http\Controllers\Mycontroller@profil');*/

Route::controller(AgenceController::class)->group(function () {

    Route::get('/Agence', 'index');
    Route::get('/agence/create', 'create');
    Route::get('/agence/{id}', 'show');
    Route::get('/agence/{id}/edit', 'edit');


    Route::post('/agence', 'store');
    Route::patch('/agence/{id}', 'update');
    Route::delete('/agence/{id}', 'destroy');

});
Route::controller(ClientController::class)->group(function () {

    Route::get('/Client', 'index');
    Route::get('/client/create', 'create');
    Route::get('/client/{id}', 'show');
    Route::get('/client/{id}/edit', 'edit');


    Route::post('/client', 'store');
    Route::patch('/client/{id}', 'update');
    Route::delete('/client/{id}', 'destroy');

});
Route::controller(LogementController::class)->group(function () {

    Route::get('/Logement', 'index');
    Route::get('/logement/create', 'create');
    Route::get('/logement/{id}', 'show');
    Route::get('/logement/{id}/edit', 'edit');


    Route::post('/logement', 'store');
    Route::patch('/logement/{id}', 'update');
    Route::delete('/logement/{id}', 'destroy');

});
Route::controller(TerrainController::class)->group(function () {

    Route::get('/Terrain', 'index');
    Route::get('/terrain/create', 'create');
    Route::get('/terrain/{id}', 'show');
    Route::get('/terrain/{id}/edit', 'edit');


    Route::post('/terrain', 'store');
    Route::patch('/terrain/{id}', 'update');
    Route::delete('/terrain/{id}', 'destroy');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Home', [App\Http\Controllers\MyController::class, 'index'])->name('index');
Route::get('/Profil', [App\Http\Controllers\MyController::class, 'profil'])->name('profil');
Route::get('/', [App\Http\Controllers\MyController::class, 'login'])->name('login');