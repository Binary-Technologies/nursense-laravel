<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Direction;
use App\Models\Resource;
use App\Models\News;
use App\Models\Notice;
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
        return view('pages.admin.banner.banner-dashboard', [
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
        return view('pages.admin.banner.banner-details', [
            'banner' => $banner,
        ]);
    }
    public function bannerModify($id)
    {
        $banner = Banner::findOrFail($id);
        return view('pages.admin.banner.banner-modification', [
            'banner' => $banner,
        ]);
    }

    // Banner Mangement End --------------------------------------------------------------------

    // Notice Manegement Start ------------------------------------------------------------------

    public function noticeDashboard()
    {
        $notices = Notice::orderByDesc('id')->get();;
        return view('pages.admin.notice.notice-dashboard',[
            'notices' => $notices,
        ]);
    }
    public function noticeRegistration()
    {
        $main_exposure = Notice::pluck('main_exposure')->toArray();
        $exposure = Notice::pluck('exposure')->toArray();
        $value = 0;
        $count = array_count_values($exposure)[$value];
        return view('pages.admin.notice.notice-register',[
            'main_exposure' => $main_exposure,
            'count' => $count,
        ]);
    }
    public function noticeDetailsView($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->increment('views');
        $notice->save();
        return view('pages.admin.notice.notice-details',[
            'notice' => $notice,
        ]);
    }
    public function noticeModify($id)
    {
        $notice = Notice::findOrFail($id);
        return view('pages.admin.notice.notice-modification',[
            'notice' => $notice,
        ]);
    }

    // Notice Manegement End ------------------------------------------------------------------


    // News Manegement Start ------------------------------------------------------------------

    public function newsDashboard()
    {
        $news = News::orderByDesc('id')->get();;
        return view('pages.admin.news.news-dashboard',[
            'news' => $news,
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
        $directions = Direction::all();
        return view('pages.admin.direction.direction-details',[
            'directions' => $directions,
        ]);
    }
    public function directionModify($id)
    {
        $direction = Direction::findOrFail($id);
        return view('pages.admin.direction.direction-modification',[
            'direction' => $direction,
        ]);
    }

    // Direction Manegement End ------------------------------------------------------------------


    // Resource Manegement Start ------------------------------------------------------------------

    public function resourceDashboard()
    {
        $resources = Resource::orderBy('id','desc')->get();
        return view('pages.admin.resource.resource-dashboard',compact('resources'));
    }
    public function resourceRegistration()
    {
        $count = Resource::where('status',1)->count();
        return view('pages.admin.resource.resource-register',[
            'count' => $count,
        ]);
    }
    public function resourceAttFileRegistration()
    {
        return view('pages.admin.resource.resource-att-file-register');
    }
    public function resourceDetailsView(Resource $resource)
    {
        return view('pages.admin.resource.resource-details',[
            'resource' => $resource,
        ]);
    }
    public function resourceModify($id)
    {
        $resource  = Resource::findOrFail($id);
        return view('pages.admin.resource.resource-modification',compact('resource'));
    }

    // Resource Manegement End ------------------------------------------------------------------


    // Inquiry Manegement Start ------------------------------------------------------------------

    public function inquiryDashboard()
    {
        return view('pages.admin.inquiry.inquiry-dashboard');
    }
    public function inquiryRegistration()
    {
        return view('pages.admin.inquiry.inquiry-register');
    }
    public function inquiryDetailsView()
    {
        return view('pages.admin.inquiry.inquiry-details');
    }
    public function inquiryModify()
    {
        return view('pages.admin.inquiry.inquiry-modification');
    }

    // Inquiry Manegement End ------------------------------------------------------------------



    // DashBoard Start ---------------------------------------------------------------------------
    public function dashboard()
    {
        return view('pages.admin.adminLayout.dashboard');
    }
    // DashBoard End ---------------------------------------------------------------------------
}
