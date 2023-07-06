<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/detail', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('contact', [\App\Http\Controllers\HomeController::class, 'contactStore'])->name('contactStore');


Route::group(['middleware' => 'is_admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    
});
Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index')->middleware('is_admin');
Route::resource('admin/cars', \App\Http\Controllers\Admin\CarController::class);
Route::put('admin/cars/update=image/{id}',[\App\Http\Controllers\Admin\CarController::class, 'updateImage'])->name('admin.cars.updateImage');
Route::get('messages', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('messages.index');
Route::get('messages/{car}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('messages.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
