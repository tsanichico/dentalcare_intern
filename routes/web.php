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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');

Route::get('/facilities', [App\Http\Controllers\FacilitiesController::class, 'index'])->name('facilities');

Route::get('/facilities/detail', [App\Http\Controllers\FacilitiesDetailController::class, 'index'])->name('facilitesdetail');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/appoinment', [App\Http\Controllers\AppoinmentController::class, 'index'])->name('appoinment');

// ->middleware(['auth','admin'])
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::get('/',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('service','\App\Http\Controllers\Admin\ServiceController');
        Route::resource('facility','\App\Http\Controllers\Admin\FacilityController');
        Route::resource('facility-gallery','\App\Http\Controllers\Admin\FacilityGalleryController');
    });


Auth::routes();


