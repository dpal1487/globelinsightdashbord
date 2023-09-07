<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\RedirectController;

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
/*Backend Routes*/

Route::middleware('guest')->group(
	function () {
		Route::get('admin', [AdminController::class, 'login'])->name('login');
		Route::post('admin', [AdminController::class, 'makeLogin']);
	}
);



Route::group(['middleware' => 'auth'], function () {
	Route::get('dashboard', [AdminController::class, 'dashboard']);
	Route::post('dashboard', [AdminController::class, 'dashboard']);
	Route::get('profile', [AdminController::class, 'profile']);
	Route::post('profile', [AdminController::class, 'updateProfile']);
	Route::get('logout', [AdminController::class, 'logout']);
	Route::get('change-password', [AdminController::class, 'changePassword']);
	Route::post('change-password', [AdminController::class, 'passwordUpdate']);
});

/*Frontend Routes*/

Route::get('/redirect/{type}', [RedirectController::class, 'store'])->name('redirect');
Route::get('about', [RedirectController::class, 'about'])->name('about');

Route::controller(HomeController::class)->group(function () {
	Route::get('/', 'index')->name('home');
	Route::get('/about', 'about')->name('about');
	Route::get('/services', 'services')->name('services');
	Route::get('/quality', 'quality')->name('quality');
	Route::get('/contact', 'contact')->name('contact');
});
Route::post('contact-us', [ContactController::class, 'store'])->name('contact-us');
