<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    // Member Management End -------------------------------------------------------------------

    // Instructor Mng. Start --------------------------------------------------------------
    public function instructorDashboard()
    {
        $users = User::where('role', 'instructor')->get();

        return view('pages.admin.member.instructor-dashboard', [
            'users' => $users,
        ]);
    }

    public function viewInstructor(User $user)
    {
        return view('pages.admin.member.instructor-view', [
            'user' => $user,
        ]);
    }

    public function viewInstructorEdit(User $user)
    {
        return view('pages.admin.member.instructor-view-edit', [
            'user' => $user,
        ]);
    }

    public function viewInstructorEditDp()
    {
        return view('pages.admin.member.instructor-view-edit-dp');
    }

    public function registerInstructor()
    {
        return view('pages.admin.member.instructor-register');
    }

    // Student Mng. Start --------------------------------------------------------------
    public function studentDashboard()
    {
        $users = User::where('role', 'student')->get();
        return view('pages.admin.member.student-dashboard', [
            'users' => $users,
        ]);
    }

    public function viewStudent(User $user)
    {
        return view('pages.admin.member.student-view', [
            'user' => $user,
        ]);
    }

    public function viewStudentEdit(User $user)
    {
        return view('pages.admin.member.student-view-edit', [
            'user' => $user,
        ]);
    }

    public function viewStudentEditDp()
    {
        return view('pages.admin.member.student-view-edit-dp');
    }

    public function registerStudent()
    {
        return view('pages.admin.member.student-register');
    }
    // Member Management End -------------------------------------------------------------------


    // Banner Mangement Start --------------------------------------------------------------------

    public function bannerDashboard()
    {
        $banners = Banner::all();
        return view('pages.admin.banner.banner-dashboard',[
            'banners' => $banners,
        ]);
    }
    public function bannerAdd()
    {
        $existingValues = Banner::pluck('sequence')->toArray();
        return view('pages.admin.banner.banner-add', compact('existingValues'));
    }
    public function bannerAddAttachFileReg()
    {
        return view('pages.admin.banner.banner-add-att-file-reg');
    }
    public function bannerDetailsView(Banner $banner)
    {
        return view('pages.admin.banner.banner-details',[
            'banner' => $banner,
        ]);
    }
    public function bannerModify($id)
    {
        $banner = Banner::findOrFail($id);
        return view('pages.admin.banner.banner-modification',[
            'banner' => $banner,
        ]);
    }

    // Banner Mangement End --------------------------------------------------------------------

    // Notice Manegement Start ------------------------------------------------------------------

    public function noticeDashboard()
    {
        return view('pages.admin.notice.notice-dashboard');
    }
    public function noticeRegistration()
    {
        return view('pages.admin.notice.notice-register');
    }
    public function noticeDetailsView()
    {
        return view('pages.admin.notice.notice-details');
    }
    public function noticeModify()
    {
        return view('pages.admin.notice.notice-modification');
    }

    // Notice Manegement End ------------------------------------------------------------------


    // News Manegement Start ------------------------------------------------------------------

    public function newsDashboard()
    {
        $newses = News::orderByDesc('id')->get();;
        return view('pages.admin.news.news-dashboard',[
            'newses' => $newses,
        ]);
    }
    public function newsRegistration()
    {
        $main_exposure = News::pluck('main_exposure')->toArray();
        $exposure = News::pluck('exposure')->toArray();
        $value = 0;
        $count = array_count_values($exposure)[$value];
        return view('pages.admin.news.news-register', [
            'main_exposure' => $main_exposure,
            'count' => $count,
        ]);
    }
    public function newsDetailsView($id)
    {
        $news = News::findOrFail($id);
        $news->increment('views');
        $news->save();
        return view('pages.admin.news.news-details',[
            'news' => $news,
        ]);
    }
    public function newsModify($id)
    {
        $news = News::findOrFail($id);   
        
        return view('pages.admin.news.news-modification',[
            'news' => $news,
        ]);
    }

    // News Manegement End ------------------------------------------------------------------


    // Direction Manegement Start ------------------------------------------------------------------

    public function directionDashboard()
    {
    }
    public function directionRegistration()
    {
    }
    public function directionDetailsView()
    {
        return view('pages.admin.direction.direction-details');
    }
    public function directionModify()
    {
        return view('pages.admin.direction.direction-modification');
    }

    // Direction Manegement End ------------------------------------------------------------------




    // DashBoard Start ---------------------------------------------------------------------------
    public function dashboard()
    {
        return view('pages.admin.adminLayout.dashboard');
    }
    // DashBoard End ---------------------------------------------------------------------------
}
