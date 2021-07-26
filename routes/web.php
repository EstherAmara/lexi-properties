<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [ContactsController::class, 'submitContactForm']);
Route::get('/land-banking-investment', [HomeController::class, 'landBankingInvestment']);
Route::get('/contact-us', [ContactsController::class, 'index'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/properties', [HomeController::class, 'properties'])->name('properties');
Route::get('/properties/{slug}', [HomeController::class, 'singleProperty']);
Route::post('/properties/book-inspection/{id}', [HomeController::class, 'bookInspection']);

Route::post('/search', [SearchController::class, 'simpleSearch']);
Route::post('/quick-search', [SearchController::class, 'quickSearch']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/test', function() {
    return view('admin.properties.test');
});

Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    
    Route::get('/admin/contacts', [AdminController::class, 'contact']);
    Route::get('/admin/contacts/{id}', [AdminController::class, 'singleContact']);
    Route::post('/admin/contacts/reply/{id}', [AdminController::class, 'replyContact']);
    
    Route::get('/admin/properties', [AdminController::class, 'properties']);
    Route::match(['get', 'post'], '/admin/properties/new', [AdminController::class, 'newProperties']);
    Route::match(['get', 'post'], '/admin/properties/{slug}/edit', [AdminController::class, 'editProperty']);
    Route::get('/admin/properties/{slug}/index', [AdminController::class, 'togglePropertyIndex']);
    Route::get('/admin/properties/{slug}', [AdminController::class, 'singleProperty']);
    
    Route::get('/admin/inspections', [AdminController::class, 'inspections']);
    Route::get('/admin/inspections/{id}/single', [AdminController::class, 'singleInspection']);
    
    Route::match(['get', 'post'], '/admin/settings', [AdminController::class, 'settings']);
    
});

