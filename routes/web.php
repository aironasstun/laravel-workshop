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


Route::view('/','index')->name('home');
Route::get('/about',[\App\Http\Controllers\AboutController::class, 'experience'])
    ->name('about');
Route::view('/contact','contact')->name('contact');

Route::get('portfolios/{portfolio}',
    [\App\Http\Controllers\PortfolioController::class, 'show'])->name('portfolios.show');
