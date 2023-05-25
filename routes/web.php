<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin', [LoginController::class, 'adminLogin'])->name('admin.login');

Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register', [RegisterController::class, 'createAdmin'])->name('admin.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', function () {
    return view('home');
})->middleware('auth:admin');

Route::get('/userLogin', [LoginController::class, 'showUserLogin']);
Route::post('/userLogin', [LoginController::class, 'userLogin']);
Route::get('/userLoginAPI', [LoginController::class, 'userApiLogin']);
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
Route::get('/guide', [PageController::class, 'guide']);

Route::prefix('/admin')->group(function () {
    // DashBoard-----------------------------------------------------------------------------------------------
    Route::get('/dashBoard', [AdminPageController::class, 'dashboard'])->name('dashBoard');

    // Member Management - Instructor Mng-----------------------------------------------------------------------------------------------
    Route::get('/viewMemIns', [AdminPageController::class, 'instructorDashboard'])->name('viewMemIns');
    Route::get('/insAccData', [AdminPageController::class, 'viewInstructor'])->name('insAccData');
    Route::get('/insAccDataEdit', [AdminPageController::class, 'viewInstructorEdit'])->name('insAccDataEdit');
    Route::get('/insAccDataEditDp', [AdminPageController::class, 'viewInstructorEditDp'])->name('insAccDataEditDp');
    Route::get('/insReg', [AdminPageController::class, 'registerInstructor'])->name('insReg');

    // Member Management - Student Mng-----------------------------------------------------------------------------------------------
    Route::get('/viewMemStu', [AdminPageController::class, 'studentDashboard'])->name('viewMemStu');
    Route::get('/stuAccData', [AdminPageController::class, 'viewStudent'])->name('stuAccData');
    Route::get('/stuAccDataEdit', [AdminPageController::class, 'viewStudentEdit'])->name('stuAccDataEdit');
    Route::get('/stuAccDataEditDp', [AdminPageController::class, 'viewStudentEditDp'])->name('stuAccDataEditDp');
    Route::get('/stuReg', [AdminPageController::class, 'registerStudent'])->name('stuReg');

    // Banner Management
    Route::get('/bannerDash', [AdminPageController::class, 'bannerDashboard'])->name('bannerDash');
});

// Utilities -----------------------------------------------------------------------------------------------
Route::get('/clear', function () {
    return \Artisan::call('optimize:clear');
});
