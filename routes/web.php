<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;


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

Route::get('/', [PagesController::class, 'index']);
Route::get('/home', [PagesController::class, 'index']);
Route::get('/index', [PagesController::class, 'index']);
Route::get('/terms-of-use', [PagesController::class, 'terms']);

Route::resource('/blog', PostsController::class);

Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/dashbord/posts', [AdminController::class, 'posts']);
Route::get('/dashboard/bookings', [AdminController::class, 'bookings']);


Route::post('/addBooking', [BookingsController::class, 'AddBooking']);
Route::post('/booking/{id}', [BookingsController::class, 'setBookingInactive']);

Route::post('/sendMessage', [ContactController::class, 'SendMessage']);

require __DIR__.'/auth.php';
