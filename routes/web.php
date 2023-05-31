<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', [PageController::class, 'index']);

Route::get('/muve', [PageController::class, 'muve']);
Route::get('/muve/gallery', [PageController::class, 'muve_gallery']);
Route::get('/muve/gallery-details', [PageController::class, 'galleryDetails']);

Route::get('/curriculum', [PageController::class, 'curriculum']);
Route::get('/curriculum/guide', [PageController::class, 'guide']);
Route::get('/curriculum/curriculum2', [PageController::class, 'curriculum2']);
Route::get('/curriculum/download', [PageController::class, 'download']);
Route::get('/curriculum/learning', [PageController::class, 'learning']);
Route::get('/curriculum/learning_details', [PageController::class, 'learning_details']);
Route::get('/curriculum/quiz', [PageController::class, 'quiz']);

Route::get('/info', [PageController::class, 'info']);
Route::get('/info/details', [PageController::class, 'info_details']);
Route::get('/info/inquiry', [PageController::class, 'inquiry']);
Route::get('/info/inquiry_activated', [PageController::class, 'inquiry_activated']);
Route::get('/info/inquiry_await', [PageController::class, 'inquiry_await']);
Route::get('/info/news_main', [PageController::class, 'news_main']);
Route::get('/info/news_main_details', [PageController::class, 'news_main_details']);
Route::get('/info/resources', [PageController::class, 'resources']);
Route::get('/info/resources_details', [PageController::class, 'resources_details']);
Route::get('/info/location', [PageController::class, 'location']);

Route::get('/admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin', [LoginController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register', [RegisterController::class, 'createAdmin'])->name('admin.register');

Route::get('/userLoginAPI',[LoginController::class,'userApiLogin']);
Route::get('/userLogin',[LoginController::class,'showUserLogin'])->name('user.login');
Route::post('/userLogin',[LoginController::class,'userLogin']);

Route::get('/certificate', [PageController::class, 'certificate']);
Route::get('/front_slider', [PageController::class, 'front_slider']);
Route::get('/myallocation', [PageController::class, 'myallocation']);
Route::get('/myassesment', [PageController::class, 'myassesment']);
Route::get('/mymanage', [PageController::class, 'mymanage']);
Route::get('/myprelearning', [PageController::class, 'myprelearning']);
Route::get('/myprofile_dp_upload', [PageController::class, 'myprofile_dp_upload']);
Route::get('/myprofile', [PageController::class, 'myprofile']);
Route::get('/myreports', [PageController::class, 'myreports']);
Route::get('/mystudy', [PageController::class, 'mystudy']);
Route::get('/privacy_policy', [PageController::class, 'privacy_policy']);
Route::get('/terms_conditions', [PageController::class, 'terms_conditions']);
Route::get('/user_manual', [PageController::class, 'user_manual']);
Route::get('/myprofile_contact_upload', [PageController::class, 'myprofile_contact_upload']);
Route::get('/myprofile_email_upload', [PageController::class, 'myprofile_email_upload']);
Route::get('/myprofile_password_upload', [PageController::class, 'myprofile_password_upload']);
Route::get('/login', [PageController::class, 'userLogin']);

Route::prefix('/admin')->group(function () {
     // Member Management - Instructor Mng-----------------------------------------------------------------------------------------------
     Route::get('/instructorDash', [AdminPageController::class, 'instructorDashboard'])->name('viewMemIns');
     Route::get('/insAccData/{user:id}', [AdminPageController::class, 'viewInstructor'])->name('insAccData');
     Route::get('/insAccDataEdit/{user:id}', [AdminPageController::class, 'viewInstructorEdit'])->name('insAccDataEdit');
     Route::get('/insAccDataEditDp', [AdminPageController::class, 'viewInstructorEditDp'])->name('insAccDataEditDp');
     Route::get('/insReg', [AdminPageController::class, 'registerInstructor'])->name('insReg');
 
     // Member Management - Student Mng-----------------------------------------------------------------------------------------------
     Route::get('/studentDash', [AdminPageController::class, 'studentDashboard'])->name('viewMemStu');
     Route::get('/stuAccData/{user:id}', [AdminPageController::class, 'viewStudent'])->name('stuAccData');
     Route::get('/stuAccDataEdit/{user:id}', [AdminPageController::class, 'viewStudentEdit'])->name('stuAccDataEdit');
     Route::get('/stuAccDataEditDp', [AdminPageController::class, 'viewStudentEditDp'])->name('stuAccDataEditDp');
     Route::get('/stuReg', [AdminPageController::class, 'registerStudent'])->name('stuReg');

    // Banner Management
    Route::get('/bannerDash', [AdminPageController::class, 'bannerDashboard'])->name('bannerDash');
    Route::get('/bannerAdd', [AdminPageController::class, 'bannerAdd'])->name('bannerAdd');
    Route::get('/bannerAddAttFilereg', [AdminPageController::class, 'bannerAddAttachFileReg'])->name('bannerAddAttFilereg');
    Route::get('/bannerDetails', [AdminPageController::class, 'bannerDetailsView'])->name('bannerDetails');
    Route::get('/bannerUpdate', [AdminPageController::class, 'bannerModify'])->name('bannerUpdate');

    // Notice Management
    Route::get('/noticeDash', [AdminPageController::class, 'noticeDashboard'])->name('noticeDash');
    Route::get('/noticeReg', [AdminPageController::class, 'noticeRegistration'])->name('noticeReg');
    Route::get('/noticeDetails', [AdminPageController::class, 'noticeDetailsView'])->name('noticeDetails');
    Route::get('/noticeUpdate', [AdminPageController::class, 'noticeModify'])->name('noticeUpdate');
});

// Instructor  form
Route::post('/Register-instructor',[UserController::class,'instructorRegister'])->name('instructorReg');
Route::post('/Update-instructor/{user:id}',[UserController::class,'instructorUpdate'])->name('instructorUpdate');

// Student  form
Route::post('/Register-student',[UserController::class,'studentRegister'])->name('studentReg');
Route::post('/Update-student/{user:id}',[UserController::class,'studentUpdate'])->name('studentUpdate');


// Utilities
Route::get('/clear', function () {
    return Artisan::call('optimize:clear');
});
