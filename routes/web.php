<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

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


Route::get('/',[HomepageController::class, 'index'])->name('index');
Route::get('/home',[HomepageController::class, 'index'])->name('index');
Route::get('/price',[HomepageController::class, 'price'])->name('price');
Route::get('/about',[HomepageController::class, 'about'])->name('about');
Route::get('/contact',[HomepageController::class, 'contact'])->name('contact');
Route::get('/feature',[HomepageController::class, 'feature'])->name('feature');
Route::get('/quote',[HomepageController::class, 'quote'])->name('quote');
Route::get('/service',[HomepageController::class, 'service'])->name('service');
Route::get('/team',[HomepageController::class, 'team'])->name('team');
Route::get('/testimonial',[HomepageController::class, 'testimonial'])->name('testimonial');
