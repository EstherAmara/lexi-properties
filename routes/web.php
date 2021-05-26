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

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/contact', [\App\Http\Controllers\ContactsController::class, 'submitContactForm']);
Route::get('/land-banking-investment', [\App\Http\Controllers\HomeController::class, 'landBankingInvestment']);

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/contacts', [\App\Http\Controllers\AdminController::class, 'contact']);
