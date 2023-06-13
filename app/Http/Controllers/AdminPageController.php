<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Inquiry;
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
        $searchValue = request('search');
        if (request('search')) {
            $users = User::where(function ($query) use ($searchValue) {
                $query->where('name', 'like', '%' . $searchValue . '%');
            })::where('role', 'instructor')->paginate(10);
        } else {
            $users = User::where('role', 'instructor')->paginate(10);
        }

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
        $searchValue = request('search');
        if (request('search')) {
            $users = User::where(function ($query) use ($searchValue) {
                $query->where('name', 'like', '%' . $searchValue . '%');
            })::where('role', 'student')->paginate(10);
        } else {
            $users = User::where('role', 'student')->paginate(10);
        }

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
        $searchValue = request('search');
        if (request('search')) {
            $banners = Banner::where(function ($query) use ($searchValue) {
                $query->where('name', 'like', '%' . $searchValue . '%')
                    ->orWhere('title', 'like', '%' . $searchValue . '%')
                    ->orWhere('content', 'like', '%' . $searchValue . '%');
            })->orderByDesc('id')->paginate(10);
        } else {
            $banners = Banner::orderByDesc('id')->paginate(10);
        }

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

    public function noticeDashboard(Request $request)
    {

        /*return count($notices);
        if ($request->has('expose-notice')) {
            $exposeNotice = $request->input('expose-notice');
    
            if ($exposeNotice == 2) {
                $notices = Notice::where('exposure', 0)->paginate(10);
            } elseif ($exposeNotice == 3) {
                $notices = Notice::where('exposure', 1)->paginate(10);
            }else{
                $notices = Notice::orderByDesc('id')->paginate(10);
            }
        }
        elseif($request->has('search')){
            $searchValue = $request->input('search');
            $notices = Notice::where(function ($query) use ($searchValue) {
                $query  ->where('title', 'like', '%' . $searchValue . '%')
                        ->orWhere('content', 'like', '%' . $searchValue . '%');
            })->orderByDesc('id')->paginate(10);
        }*/

        $notices = Notice::orderByDesc('id')->paginate(10);
        return view('pages.admin.notice.notice-dashboard', [
            'notices' => $notices,
        ]);
    }
    public function noticeRegistration()
    {
        $main_exposure = Notice::pluck('main_exposure')->toArray();
        $exposure = Notice::pluck('exposure')->toArray();
        $value = 0;
        $count = array_count_values($exposure)[$value];
        return view('pages.admin.notice.notice-register', [
            'main_exposure' => $main_exposure,
            'count' => $count,
        ]);
    }
    public function noticeDetailsView($id)
    {
        $notice = Notice::findOrFail($id);
        return view('pages.admin.notice.notice-details', [
            'notice' => $notice,
        ]);
    }
    public function noticeModify($id)
    {
        $notice = Notice::findOrFail($id);
        return view('pages.admin.notice.notice-modification', [
            'notice' => $notice,
        ]);
    }

    // Notice Manegement End ------------------------------------------------------------------


    // News Manegement Start ------------------------------------------------------------------

    public function newsDashboard()
    {

        $news = News::orderByDesc('id')->paginate(10);

        return view('pages.admin.news.news-dashboard', [
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
        return view('pages.admin.news.news-details', [
            'news' => $news,
        ]);
    }
    public function newsModify($id)
    {
        $news = News::findOrFail($id);

        return view('pages.admin.news.news-modification', [
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
        return view('pages.admin.direction.direction-details', [
            'directions' => $directions,
        ]);
    }
    public function directionModify($id)
    {
        $direction = Direction::findOrFail($id);
        return view('pages.admin.direction.direction-modification', [
            'direction' => $direction,
        ]);
    }

    // Direction Manegement End ------------------------------------------------------------------


    // Resource Manegement Start ------------------------------------------------------------------

    public function resourceDashboard()
    {

        $resources = Resource::orderByDesc('id')->paginate(10);

        return view('pages.admin.resource.resource-dashboard', compact('resources'));
    }
    public function resourceRegistration()
    {
        $count = Resource::where('status', 1)->count();
        return view('pages.admin.resource.resource-register', [
            'count' => $count,
        ]);
    }
    public function resourceAttFileRegistration()
    {
        return view('pages.admin.resource.resource-att-file-register');
    }
    public function resourceDetailsView(Resource $resource)
    {
        return view('pages.admin.resource.resource-details', [
            'resource' => $resource,
        ]);
    }
    public function resourceModify($id)
    {
        $resource  = Resource::findOrFail($id);
        return view('pages.admin.resource.resource-modification', compact('resource'));
    }

    // Resource Manegement End ------------------------------------------------------------------


    // Inquiry Manegement Start ------------------------------------------------------------------

    public function inquiryDashboard()
    {
        $searchValue = request('search');
        if (request('search')) {
            $inquiries = Inquiry::where(function ($query) use ($searchValue) {
                $query->where('title', 'like', '%' . $searchValue . '%')
                    ->orWhere('inquiryDetail', 'like', '%' . $searchValue . '%');
            })->orderByDesc('id')->paginate(10);
        } else {
            $inquiries = Inquiry::orderByDesc('id')->paginate(10);
        }

        return view('pages.admin.inquiry.inquiry-dashboard', compact('inquiries'));
    }
    public function inquiryRegistration($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('pages.admin.inquiry.inquiry-register', compact('inquiry'));
    }
    public function inquiryDetailsView($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('pages.admin.inquiry.inquiry-details', compact('inquiry'));
    }
    public function inquiryModify($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('pages.admin.inquiry.inquiry-modification', compact('inquiry'));
    }

    // Inquiry Manegement End ------------------------------------------------------------------


    // University Code Manegement Start ------------------------------------------------------------------

    public function univCodeDashboard()
    {
        return view('pages.admin.universityCode.univ-code-dashboard');
    }
    public function univCodeRegistration()
    {
        return view('pages.admin.universityCode.univ-code-register');
    }
    public function univCodeDetailsView()
    {
        return view('pages.admin.universityCode.univ-code-details');
    }
    public function univCodeModify()
    {
        return view('pages.admin.universityCode.univ-code-modification');
    }

    // University Code Manegement End ------------------------------------------------------------------


    // Menu Manegement Start ------------------------------------------------------------------

    public function menuRegistration()
    {
        return view('pages.admin.menu.menu-register');
    }

    // Menu Manegement End ------------------------------------------------------------------


    // Logo Manegement Start ------------------------------------------------------------------

    public function logoRegistration()
    {
        return view('pages.admin.logo.logo-register');
    }

    // Logo Manegement End ------------------------------------------------------------------



    // DashBoard Start ---------------------------------------------------------------------------
    public function dashboard()
    {
        return view('pages.admin.adminLayout.dashboard');
    }
    // DashBoard End ---------------------------------------------------------------------------
}
