<?php

use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupesApprenantController;
use App\Http\Controllers\googleController;
use App\Http\Controllers\PreparationBriefController;
use App\Http\Controllers\PreparationTacheController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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




Route::middleware('auth')->group(function () {
    Route::view('/', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::group(['prefix'=>LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath',"auth"]],function(){

      //Apprenant
      Route::resource('apprenant', ApprenantController::class);
      route::get('/pagination/fetch2_data',[ApprenantController::class,'fetch2_data'])->name('/pagination/fetch2_data');
      Route::get('/pagination/fetch_data', [ApprenantController::class,'fetch_data'])->name('/pagination/fetch_data');
      Route::get('exportexcelapprenant',[ApprenantController::class,'exportexcel'])->name('exportexcelapprenant');
      Route::post('importexcelapprenant',[ApprenantController::class,'importexcel'])->name('importexcelapprenant');
      route::get('/generatepdfapprenant',[ApprenantController::class,'generatepdf'])->name('generatepdfapprenant');


    });
