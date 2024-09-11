<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnexController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EntrepriseController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('entreprises', EntrepriseController::class);
    Route::resource('managers', ManagerController::class);
    Route::resource('annexes', AnnexController::class, ['except' => ['index', 'show', 'edit']]);
});
