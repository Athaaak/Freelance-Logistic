<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

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
Route::get('/about',[HomepageController::class, 'about'])->name('about');
Route::get('/gallery',[HomepageController::class, 'gallery'])->name('gallery');
Route::get('/product',[HomepageController::class, 'product'])->name('product');
Route::get('/service',[HomepageController::class, 'service'])->name('service');

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    Mail::to('yourmail@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});
