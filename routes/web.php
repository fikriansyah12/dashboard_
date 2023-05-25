<?php

use App\Http\Controllers\AdminGalleyController;
use App\Http\Controllers\AdminTablesController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TablesController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/admingallery',[AdminGalleyController::class,'index']);
Route::get('/admincollection',[AdminGalleyController::class,'index']);
Route::get('/admintables',[AdminTablesController::class,'index']);