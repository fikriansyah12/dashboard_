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



Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


Route::get('/squad', [DashboardController::class, 'squad'])->name('squad');
Route::get('/squadDetail/{squad}', [DashboardController::class, 'squadDetail'])->name('squadDetail');
Route::get('/priority', [DashboardController::class, 'priority'])->name('priority');
Route::get('/priorityDetail/{priority}', [DashboardController::class, 'priorityDetail'])->name('priorityDetail');
Route::get('/status', [DashboardController::class, 'status'])->name('status');
Route::get('/statusDetail/{status}', [DashboardController::class, 'statusDetail'])->name('statusDetail');
Route::get('/filterData', [DashboardController::class, 'filterData'])->name('filterData');
Route::get('/admingallery',[AdminGalleyController::class,'index']);
Route::get('/admincollection',[AdminGalleyController::class,'index']);
Route::get('/admintables',[AdminTablesController::class,'index']);