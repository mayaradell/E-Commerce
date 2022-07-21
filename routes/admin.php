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
define('PAGINATION_COUNT',10);

Route::prefix('admin')->middleware('auth:admin')->group(function () {


    Route::get('/', [\App\Http\Controllers\Admin\dashboardController::class, 'index'])->name('admin.dashboard');

    Route::prefix('languages')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\languagesController::class, 'index'])->name('admin.languages');
        Route::get('create', [\App\Http\Controllers\Admin\languagesController::class, 'create'])->name('admin.languages.create');
        Route::post('store', [\App\Http\Controllers\Admin\languagesController::class, 'store'])->name('admin.languages.store');

        Route::get('edit/{id}', [\App\Http\Controllers\Admin\languagesController::class, 'edit'])->name('admin.languages.edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\languagesController::class, 'update'])->name('admin.languages.update');

        Route::get('delete/{id}', [\App\Http\Controllers\Admin\languagesController::class, 'destroy'])->name('admin.languages.delete');


    });


});

Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('/login',[\App\Http\Controllers\Admin\loginController::class,'getlogin']);
    Route::post('/login',[\App\Http\Controllers\Admin\loginController::class,'login'])->name('admin.login');

});
