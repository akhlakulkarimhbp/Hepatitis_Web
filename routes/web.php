<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoHepasController;

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
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('pages.dashboard.dashboard');
    });
    
    Route::get('/penduduk', function () {
        return view('pages.penduduk.index');
    });
    
    Route::get('/datakriteria', function () {
        return view('pages.datakriteria.index');
    });
    
    Route::get('/datakasus', function () {
        return view('pages.datakasus.index');
    });
    
    Route::get('/dataairbersih', function () {
        return view('pages.dataairbersih.index');
    });
    
    Route::get('/datasanitasi', function () {
        return view('pages.datasanitasi.index');
    });
    
    Route::get('/datarumahsehat', function () {
        return view('pages.datarumahsehat.index');
    });
    
    Route::get('/datainfohepa',  [InfoHepasController::class, 'index'])->name('infohepas.index');
    Route::get('createdata', [InfoHepasController::class, 'create'])->name('infohepas.create');
    Route::post('storedata', [InfoHepasController::class, 'store'])->name('infohepas.store');
    Route::get('editdata/{id}', [InfoHepasController::class, 'edit'])->name('infohepas.edit');
    Route::post('updatedata/{id}', [InfoHepasController::class, 'update'])->name('infohepas.update');
    Route::get('deletedata/{id}', [InfoHepasController::class, 'delete'])->name('infohepas.delete');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
