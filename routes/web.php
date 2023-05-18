<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',function(){
    return view('home');
})->middleware('auth:admin');

Route::get('/userLogin',[LoginController::class,'showUserLogin']);
Route::post('/userLogin',[LoginController::class,'userLogin']);
Route::get('/userLoginAPI',[LoginController::class,'userApiLogin']);
Route::get('/', [PageController::class, 'index']);
Route::get('/download', [PageController::class, 'download']);
Route::get('/certificate', [PageController::class, 'certificate']);
Route::get('/curriculum', [PageController::class, 'curriculum']);
Route::get('/gallery-details', [PageController::class, 'galleryDetails']);

Route::get('/guide', [PageController::class, 'guide.blade']);
Route::get('/curriculum2', [PageController::class, 'curriculum2.blade']);
Route::get('/front_slider', [PageController::class, 'front_slider.blade']);
Route::get('/info_details', [PageController::class, 'info_details.blade']);
Route::get('/info', [PageController::class, 'info.blade']);
Route::get('/inquiry_activated', [PageController::class, 'inquiry_activated.blade']);
Route::get('/inquiry_await', [PageController::class, 'inquiry_await.blade']);
Route::get('/inquiry', [PageController::class, 'inquiry.blade']);
Route::get('/learning_details', [PageController::class, 'learning_details.blade']);
Route::get('/learning', [PageController::class, 'learning.blade']);
Route::get('/guide', [PageController::class, 'guide.blade']);
Route::get('/guide', [PageController::class, 'guide.blade']);
Route::get('/guide', [PageController::class, 'guide.blade']);
Route::get('/guide', [PageController::class, 'guide.blade']);

