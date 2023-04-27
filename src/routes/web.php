<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [SiteController::class, 'home']);
Route::get('/galleria', [SiteController::class, 'gallery']);
Route::get('/galleria/{id}', [SiteController::class, 'clientGallery']);
Route::get('/contattaci', [SiteController::class, 'contact']);

// backoffice
Route::get('/admin', [AdminController::class, 'home']);
