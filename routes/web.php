<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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

Route::get('/', [NavController::class, 'home']);
Route::get('/artists', [NavController::class, 'artistsList']);
Route::get('/addArtist', [NavController::class, 'addArtist']);
Route::get('/addSuperhero', [NavController::class, 'addSuperhero']);
Route::get('/superheroes', [NavController::class, 'superheroesList']);
Route::get('/artist/{id}', [NavController::class, 'showArtist']);
Route::get('/superhero/{id}', [NavController::class, 'showSuperhero']);
Route::get('/editSuperhero/{id}', [NavController::class, 'editSuperhero']);
Route::get('/editArtist/{id}', [NavController::class, 'editArtist']);
Route::post('/removeSuperhero', [ActionController::class, 'removeSuperhero']);
Route::post('/addArtist', [ActionController::class, 'addArtist']);
Route::post('/superheroes', [ActionController::class, 'removeSuperhero']);
Route::post('/addSuperhero', [ActionController::class, 'addSuperhero']);
Route::post('/removeArtist', [ActionController::class, 'removeArtist']);
Route::post('/editArtist', [ActionController::class, 'editArtist']);
Route::post('/editSuperhero', [ActionController::class, 'editSuperhero']);