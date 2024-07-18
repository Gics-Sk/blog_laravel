<?php

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
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;

/*Avec la classe Route, on appelle la méthode get, cette méthode prends deux arguments :
 Le premier est l'URL où on veut aller, le deuxième est ici un callback qui nous retourne une vue.*/


Route::get('/', [PagesController::class, 'index']);

// Route qui mène vers la page contact
Route::get('/contact-us', [PagesController::class, 'contact']);

// Route qui mène vers la page about
Route::get('/about', [PagesController::class, 'about']);

// Route pour les articles
Route::get('/articles', [ArticlesController::class, 'index']);

// Route::get('/article/{article:title}', [ArticlesController::class, 'show']);
Route::get('/article/{id}', [ArticlesController::class, 'show']);

Route::get('/articles/create', [ArticlesController::class,'create']);
Route::post('/articles/create', [ArticlesController::class,'store']);
Route::get('article/{article}/edit', [ArticlesController::class, 'edit']);
Route::patch('/article/{article}/edit', [ArticlesController::class, 'update']);
Route::delete('article/{article}/delete', [ArticlesController::class, 'delete']);