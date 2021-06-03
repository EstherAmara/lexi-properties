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
Route::get('/contact-me', [\App\Http\Controllers\ContactsController::class, 'index'])->name('contact');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/contacts', [\App\Http\Controllers\AdminController::class, 'contact']);

Route::get('/admin/properties', [\App\Http\Controllers\AdminController::class, 'properties']);
Route::get('/admin/properties/new', [\App\Http\Controllers\AdminController::class, 'newProperties']);
Route::get('/admin/properties/{id}', [\App\Http\Controllers\AdminController::class, 'singleProperties']);

