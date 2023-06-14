<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
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

Route::get('/muve/muve', [PageController::class, 'muve']);
Route::get('/muve/gallery', [PageController::class, 'muve_gallery']);
Route::get('/muve/gallery-details', [PageController::class, 'galleryDetails']);

Route::get('/curriculum/curriculum', [PageController::class, 'curriculum']);
Route::get('/curriculum/guide', [PageController::class, 'guide']);
Route::get('/curriculum/curr', [PageController::class, 'curriculum2']);
Route::get('/curriculum/download', [PageController::class, 'download']);
Route::get('/curriculum/learning', [PageController::class, 'learning']);
Route::get('/curriculum/learning/details', [PageController::class, 'learning_details']);
Route::get('/curriculum/curr/quiz', [PageController::class, 'quiz']);

Route::get('/info/inquiry', [PageController::class, 'inquiry'])->name('inquiry');
Route::get('/info/inquiry/register', [PageController::class, 'inquiry_activated']);
Route::get('/info/inquiry/details/{inquiry:id}', [PageController::class, 'inquiry_await']);
Route::post('/info/inquiry/register', [InquiryController::class, 'inquiryRegister']);
Route::delete('/delete/inquiry', [InquiryController::class, 'delete']);
Route::delete('/delete/inquiry/{inquiry:id}', [InquiryController::class, 'deleteInquiry']);
Route::get('/info/news', [PageController::class, 'news_main']);
Route::get('/info/news/details/{news:id}', [PageController::class, 'news_main_details']);
Route::get('/info/notice', [PageController::class, 'notice_main']);
Route::get('/info/notice/details/{notice:id}', [PageController::class, 'notice_main_details']);
Route::get('/info/resources', [PageController::class, 'resources']);
Route::get('/info/resources/details/{resource:id}', [PageController::class, 'resources_details']);
Route::get('/info/location', [PageController::class, 'location']);

Route::get('/profile/study', [PageController::class, 'mystudy']);
Route::get('/profile/manage', [PageController::class, 'mymanage']);
Route::get('/profile/assesment', [PageController::class, 'myassesment']);
Route::get('/profile/prelearning', [PageController::class, 'myprelearning']);
Route::get('/profile/reports', [PageController::class, 'myreports']);
Route::get('/profile/allocation', [PageController::class, 'myallocation']);

Route::get('/admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin', [LoginController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register', [RegisterController::class, 'createAdmin'])->name('admin.register');

Route::get('/userLoginAPI', [LoginController::class, 'userApiLogin']);
Route::get('/userLogin', [LoginController::class, 'showUserLogin'])->name('login');
Route::post('/userLogin', [LoginController::class, 'userLogin']);

Route::get('/certificate', [PageController::class, 'certificate']);
Route::get('/front_slider', [PageController::class, 'front_slider']);
Route::get('/myprofile_dp_upload', [PageController::class, 'myprofile_dp_upload']);
Route::get('/privacy_policy', [PageController::class, 'privacy_policy']);
Route::get('/terms_conditions', [PageController::class, 'terms_conditions']);
Route::get('/user_manual', [PageController::class, 'user_manual']);
Route::get('/myprofile_contact_upload', [PageController::class, 'myprofile_contact_upload']);
Route::get('/myprofile_email_upload', [PageController::class, 'myprofile_email_upload']);
Route::get('/myprofile_password_upload', [PageController::class, 'myprofile_password_upload']);
Route::get('/login', [PageController::class, 'userLogin']);

Route::middleware('auth:web')->group(function () {
    Route::get('/profile/info', [PageController::class, 'myprofile']);

});

Route::prefix('/admin')->middleware('auth:admin')->group(function () {
    // Member Management - Instructor Mng-----------------------------------------------------------------------------------------------
    Route::get('/instructorDash', [AdminPageController::class, 'instructorDashboard'])->name('instructorDash');
    Route::get('/insAccData/{user:id}', [AdminPageController::class, 'viewInstructor'])->name('insAccData');
    Route::get('/insAccDataEdit/{user:id}', [AdminPageController::class, 'viewInstructorEdit'])->name('insAccDataEdit');
    Route::get('/insAccDataEditDp', [AdminPageController::class, 'viewInstructorEditDp'])->name('insAccDataEditDp');
    Route::get('/insReg', [AdminPageController::class, 'registerInstructor'])->name('insReg');
    Route::post('/instructorDash/filterData', [UserController::class, 'instructorFilter']);


    // Member Management - Student Mng-----------------------------------------------------------------------------------------------
    Route::get('/studentDash', [AdminPageController::class, 'studentDashboard'])->name('studentDash');
    Route::get('/stuAccData/{user:id}', [AdminPageController::class, 'viewStudent'])->name('stuAccData');
    Route::get('/stuAccDataEdit/{user:id}', [AdminPageController::class, 'viewStudentEdit'])->name('stuAccDataEdit');
    Route::get('/stuAccDataEditDp', [AdminPageController::class, 'viewStudentEditDp'])->name('stuAccDataEditDp');
    Route::get('/stuReg', [AdminPageController::class, 'registerStudent'])->name('stuReg');
    Route::post('/studentDash/filterData', [UserController::class, 'studentFilter']);

    // Banner Management
    Route::get('/bannerDash', [AdminPageController::class, 'bannerDashboard'])->name('bannerDash');
    Route::get('/bannerAdd', [AdminPageController::class, 'bannerAdd'])->name('bannerAdd');
    Route::get('/bannerAddAttFilereg', [AdminPageController::class, 'bannerAddAttachFileReg'])->name('bannerAddAttFilereg');
    Route::get('/bannerDetails/{banner:id}', [AdminPageController::class, 'bannerDetailsView'])->name('bannerDetails');
    Route::get('/bannerUpdate/{banner:id}', [AdminPageController::class, 'bannerModify'])->name('bannerUpdate');
    Route::post('/banner/bannerRegister', [BannerController::class, 'bannerRegister']);
    Route::put('/banner/bannerUpdate/{banner:id}', [BannerController::class, 'bannerUpdate']);
    Route::post('/banner/bannerDelete/{banner:id}', [BannerController::class, 'bannerDelete'])->name('bannerDelete');

    // Notice Management
    Route::get('/noticeDash', [AdminPageController::class, 'noticeDashboard'])->name('noticeDash');
    Route::get('/noticeReg', [AdminPageController::class, 'noticeRegistration'])->name('noticeReg');
    Route::get('/noticeDetails/{notice:id}', [AdminPageController::class, 'noticeDetailsView'])->name('noticeDetails');
    Route::get('/noticeUpdate/{notice:id}', [AdminPageController::class, 'noticeModify'])->name('noticeUpdate');
    Route::post('/noticeReg', [NoticeController::class, 'noticeRegister']);
    Route::post('/notice/noticeDelete/{notice:id}', [NoticeController::class, 'noticeDelete'])->name('noticeDelete');
    Route::put('/notice/noticeUpdate/{notice:id}', [NoticeController::class, 'noticeUpdate']);
    Route::get('/noticeDetails', [AdminPageController::class, 'noticeDetailsView'])->name('noticeDetails');
    Route::get('/noticeUpdate', [AdminPageController::class, 'noticeModify'])->name('noticeUpdate');
    Route::post('/noticeDash/filterData', [NoticeController::class, 'noticeFilter']);

    // News Management
    Route::get('/newsDash', [AdminPageController::class, 'newsDashboard'])->name('newsDash');
    Route::get('/newsReg', [AdminPageController::class, 'newsRegistration'])->name('newsReg');
    Route::get('/newsDetails/{news:id}', [AdminPageController::class, 'newsDetailsView'])->name('newsDetails');
    Route::get('/newsUpdate/{news:id}', [AdminPageController::class, 'newsModify'])->name('newsUpdate');
    Route::post('/newsReg', [NewsController::class, 'newsRegister']);
    Route::post('/news/newsDelete/{news:id}', [NewsController::class, 'newsDelete'])->name('newsDelete');
    Route::put('/news/newsUpdate/{news:id}', [NewsController::class, 'newsUpdate']);
    Route::post('/newsDash/filterData', [NewsController::class, 'newsFilter']);

    // Direction Management
    Route::get('/directionDetails', [AdminPageController::class, 'directionDetailsView'])->name('directionDetails');
    Route::get('/directionUpdate/{direction:id}', [AdminPageController::class, 'directionModify'])->name('directionUpdate');
    Route::get('/directionUpdate', [AdminPageController::class, 'directionModify'])->name('directionUpdate');

    // Resource Management
    Route::get('/resourceDash', [AdminPageController::class, 'resourceDashboard'])->name('resourceDash');
    Route::get('/resourceReg', [AdminPageController::class, 'resourceRegistration'])->name('resourceReg');
    Route::get('/resourceAttFileReg', [AdminPageController::class, 'resourceAttFileRegistration'])->name('resourceAttFileReg');
    Route::get('/resourceDetails/{resource:id}', [AdminPageController::class, 'resourceDetailsView'])->name('resourceDetails');
    Route::get('/resourceUpdate/{resource:id}', [AdminPageController::class, 'resourceModify'])->name('resourceUpdate');
    Route::post('/resourceRegister', [ResourceController::class, 'resourceAdd'])->name('resourceAdd');
    Route::post('/resourceDelete/{resource:id}', [ResourceController::class, 'resourceDelete'])->name('resourceDelete');
    Route::put('/resourceUpdate/{resource:id}', [ResourceController::class, 'resourceUpdate']);
    Route::post('/resourceDash/filterData', [ResourceController::class, 'resourceFilter']);

    // Inquiry Management
    Route::get('/inquiryDash', [AdminPageController::class, 'inquiryDashboard'])->name('inquiryDash');
    Route::get('/inquiryReg/{inquiry:id}', [AdminPageController::class, 'inquiryRegistration'])->name('inquiryReg');
    Route::get('/inquiryDetails/{inquiry:id}', [AdminPageController::class, 'inquiryDetailsView'])->name('inquiryDetails');
    Route::get('/inquiryUpdate/{inquiry:id}', [AdminPageController::class, 'inquiryModify'])->name('inquiryUpdate');
    Route::post('/inquiryRegister/{inquiry:id}', [InquiryController::class, 'inquiryAnswerReg']);
    Route::put('/inquiryUpdate/{inquiry:id}', [InquiryController::class, 'inquiryUpdate']);
    Route::post('inquiryDash/filterData',[InquiryController::class,'inquiryFilter']);

    // Menu Management
    Route::get('/menuReg', [AdminPageController::class, 'menuRegistration'])->name('menuReg');

    // Logo Management
    Route::get('/logoReg', [AdminPageController::class, 'logoRegistration'])->name('logoReg');


    // University Code Management
    Route::get('/univCodeDash', [AdminPageController::class, 'univCodeDashboard'])->name('univCodeDash');
    Route::get('/univCodeReg', [AdminPageController::class, 'univCodeRegistration'])->name('univCodeReg');
    Route::get('/univCodeDetails', [AdminPageController::class, 'univCodeDetailsView'])->name('univCodeDetails');
    Route::get('/univCodeUpdate', [AdminPageController::class, 'univCodeModify'])->name('univCodeUpdate');
});

// Instructor  form
Route::post('/Register-instructor', [UserController::class, 'instructorRegister'])->name('instructorReg');
Route::post('/Update-instructor/{user:id}', [UserController::class, 'instructorUpdate'])->name('instructorUpdate');

// Student  form
Route::post('/Register-student', [UserController::class, 'studentRegister'])->name('studentReg');
Route::post('/Update-student/{user:id}', [UserController::class, 'studentUpdate'])->name('studentUpdate');

Route::post('ckeditor/image_upload', [NewsController::class, 'upload'])->name('upload');
Route::post('/direction/directionUpdate/{direction:id}', [DirectionController::class, 'directionUpdate']);

// Utilities
Route::get('/util/clear', function () {
    return Artisan::call('optimize:clear');
});
Route::get('/util/link', function () {
    return Artisan::call('storage:link');
});
Route::get('/util/migrate', function () {
    return Artisan::call('migrate');
});
Route::get('/util/seed', function () {
    return Artisan::call('db:seed');
});
