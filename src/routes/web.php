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

// BACKOFFICE

// home
Route::get('/admin/home', [AdminController::class, 'home']);

// edit clients
Route::get('/admin/clients', [AdminController::class, 'editClients']);

// edit client
Route::get('/admin/client/{id}', [AdminController::class, 'editClient']);

// upload image
Route::post('/admin/upload/image/{client_id}', [AdminController::class, 'uploadImage']);

// delete image
Route::get('/admin/delete/image/{image_id}', [AdminController::class, 'deleteImage']);

// edit client name
Route::post('/admin/edit/client/name/{client_id}', [AdminController::class, 'editClientName']);

// disable client
Route::get('/admin/disable/client/{client_id}', [AdminController::class, 'disableClient']);

// enable client
Route::get('/admin/enable/client/{client_id}', [AdminController::class, 'enableClient']);

// delete client
Route::get('/admin/delete/client/{client_id}', [AdminController::class, 'deleteClient']);

// create new client
Route::get('/admin/create/client', [AdminController::class, 'createClient']);