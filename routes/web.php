<?php

use Illuminate\Support\Facades\Auth;
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

    Route::get('/', [App\Http\Controllers\RentController::class, 'index'])->name('rents.index');


Auth::routes();
Route::group(['middleware'=>['auth']],function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('rents', [App\Http\Controllers\RentController::class, 'store'])->name('rents.store');

Route::get('rents/create', [App\Http\Controllers\RentController::class, 'create'])->name('rents.create');
Route::get('user/rents', [App\Http\Controllers\RentController::class, 'getRentByUser'])->name('rents.user');// qe ta hapim vetem taks e ketij user
});
Route::put('rents/{rent}', [App\Http\Controllers\RentController::class, 'update'])->name('rents.update');
Route::delete('rents/{rent}', [App\Http\Controllers\RentController::class, 'destroy'])->name('rents.destroy');
Route::get('rents/{rent}/edit', [App\Http\Controllers\RentController::class, 'edit'])->name('rents.edit');

Route::get('rents/404', [App\Http\Controllers\RentController::class, 'error'])->name('rents.404');
Route::get('rents', [App\Http\Controllers\RentController::class, 'index'])->name('rents.index');
Route::get('rents/{rent}', [App\Http\Controllers\RentController::class, 'show'])->name('rents.show');
