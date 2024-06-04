<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\backend\TopheaderController;
use App\Http\Controllers\backend\AboutController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [FrontendController::class, 'indexpage']);
Route::get('/abouts', [FrontendController::class, 'aboutpage'])->name('about');
Route::get('/services', [FrontendController::class, 'servicepage'])->name('service');
Route::get('/galleries', [FrontendController::class, 'gallerypage'])->name('gallery');
Route::get('/tourpackage', [FrontendController::class, 'tourpackagepage'])->name('package');
Route::get('/blogs', [FrontendController::class, 'blogpage'])->name('blog');
Route::get('/singles', [FrontendController::class, 'singlepage'])->name('single');
Route::get('/destinations', [FrontendController::class, 'destinationpage'])->name('destination');
Route::get('/guides', [FrontendController::class, 'guidepage'])->name('guide');
Route::get('/testimonials', [FrontendController::class, 'testimonialpage'])->name('testimonial');

Route::get('/contacts', [FrontendController::class, 'contactpage'])->name('contact');
// footer link work route
Route::get('/careers', [FrontendController::class, 'careerpage'])->name('career');
Route::get('/clients', [FrontendController::class, 'clientpage'])->name('client');
Route::get('/teams', [FrontendController::class, 'teampage'])->name('team');
Route::get('/stories', [FrontendController::class, 'storiespage'])->name('stories');

Auth::routes();

Route::prefix('/admin')->middleware(['auth'])->group(function(){

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
// top header
// Route::resourse('/topheader', [TopheaderController::class, 'tophead']);
Route::resource('/topheader', TopheaderController::class);
Route::resource('/abouts', AboutController::class);



});