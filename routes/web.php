<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminPageController;

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

Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',function(){
    return view('pages.admin.dashboard');
})->middleware('auth:admin');

Route::get('/userLogin',[LoginController::class,'showUserLogin'])->name('user.login');
Route::post('/userLogin',[LoginController::class,'userLogin']);

Route::get('/userRegister',[HomeController::class,'showUserRegister'])->middleware('auth:admin');
Route::post('/userRegistration',[HomeController::class,'userRegister'])->middleware('auth:admin');
Route::get('/userLoginAPI',[LoginController::class,'userApiLogin']);
Route::get('/', [PageController::class, 'index']);
Route::get('/download', [PageController::class, 'download']);
Route::get('/certificate', [PageController::class, 'certificate']);
Route::get('/curriculum', [PageController::class, 'curriculum']);
Route::get('/gallery-details', [PageController::class, 'galleryDetails']);

Route::get('/guide', [PageController::class, 'guide']);
Route::get('/curriculum2', [PageController::class, 'curriculum2']);
Route::get('/front_slider', [PageController::class, 'front_slider']);
Route::get('/info_details', [PageController::class, 'info_details']);
Route::get('/info', [PageController::class, 'info']);
Route::get('/inquiry_activated', [PageController::class, 'inquiry_activated']);
Route::get('/inquiry_await', [PageController::class, 'inquiry_await']);
Route::get('/inquiry', [PageController::class, 'inquiry']);
Route::get('/learning_details', [PageController::class, 'learning_details']);
Route::get('/learning', [PageController::class, 'learning']);
Route::get('/location', [PageController::class, 'location']);
Route::get('/muve_gallery', [PageController::class, 'muve_gallery']);
Route::get('/muve', [PageController::class, 'muve']);
Route::get('/myallocation', [PageController::class, 'myallocation']);
Route::get('/myassesment', [PageController::class, 'myassesment']);
Route::get('/mymanage', [PageController::class, 'mymanage']);
Route::get('/myprelearning', [PageController::class, 'myprelearning']);
Route::get('/myprofile_dp_upload', [PageController::class, 'myprofile_dp_upload']);
Route::get('/myprofile', [PageController::class, 'myprofile']);
Route::get('/myreports', [PageController::class, 'myreports']);
Route::get('/mystudy', [PageController::class, 'mystudy']);
Route::get('/news_main_details', [PageController::class, 'news_main_details']);
Route::get('/news_main', [PageController::class, 'news_main']);
Route::get('/privacy_policy', [PageController::class, 'privacy_policy']);
Route::get('/quiz', [PageController::class, 'quiz']);
Route::get('/resources_details', [PageController::class, 'resources_details']);
Route::get('/resources', [PageController::class, 'resources']);
Route::get('/terms_conditions', [PageController::class, 'terms_conditions']);
Route::get('/user_manual', [PageController::class, 'user_manual']);

Route::get('/myprofile_contact_upload', [PageController::class, 'myprofile_contact_upload']);
Route::get('/myprofile_email_upload', [PageController::class, 'myprofile_email_upload']);
Route::get('/myprofile_password_upload', [PageController::class, 'myprofile_password_upload']);
Route::get('/login', [PageController::class, 'userLogin']);

Route::prefix('/admin')->group(function () {
    // DashBoard with Auth validation
    Route::middleware('auth:admin')->group(function (){
        Route::get('/dashBoard', [AdminPageController::class, 'dashboard'])->name('dashBoard');
    });

    // Instructor Acc Mng
    Route::get('/viewMemIns', [AdminPageController::class, 'instructorDashboard'])->name('viewMemIns');
    Route::get('/insAccData', [AdminPageController::class, 'viewInstructor'])->name('insAccData');
    Route::get('/userReg', [AdminPageController::class, 'registerInstructor'])->name('userReg');
    Route::get('/updateInstructor', [AdminPageController::class, 'updateInstructor'])->name('updateInstructor');

    // Student Acc Mng
    Route::get('/viewMemStu', [AdminPageController::class, 'studentDashboard'])->name('viewMemStu');
    Route::get('/stuAccData', [AdminPageController::class, 'studentView'])->name('stuAccData');

    // Banner Management
    Route::get('/bannerDash', [AdminPageController::class, 'bannerDashboard'])->name('bannerDash');
});

// Utilities
Route::get('/clear', function () {
    return \Artisan::call('optimize:clear');
});
