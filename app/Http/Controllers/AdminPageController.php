<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Inquiry;
use App\Models\Direction;
use App\Models\Gallery;
use App\Models\Resource;
use App\Models\News;
use App\Models\Notice;
use App\Models\University;
use App\Models\User;
use App\Models\Menu;
use App\Models\Score;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPageController extends Controller
{
    // Member Management End -------------------------------------------------------------------

    // Instructor Mng. Start --------------------------------------------------------------
    public function instructorDashboard()
    {
        $users = User::where('role', 'instructor')->with('university:id,name', 'major:id,name')->paginate(10);
        $unis = University::with('departments')->get()->keyBy('id');
        return view('pages.admin.member.instructor-dashboard', compact('users', 'unis'));
    }

    public function viewInstructor($id)
    {
        $user = User::with('university', 'major')->find($id);
        return view('pages.admin.member.instructor-view', compact('user'));
    }

    public function viewInstructorEdit(User $user)
    {
        $unis = University::with('departments')->get()->keyBy('id');
        return view('pages.admin.member.instructor-view-edit', compact('user', 'unis'));
    }

    public function viewInstructorEditDp()
    {
        return view('pages.admin.member.instructor-view-edit-dp');
    }

    public function registerInstructor()
    {
        $unis = University::with('departments')->get()->keyBy('id');
        return view('pages.admin.member.instructor-register', compact('unis'));
    }

    // Student Mng. Start --------------------------------------------------------------
    public function studentDashboard()
    {
        $users = User::where('role', 'student')->with('university:id,name', 'major:id,name')->paginate(10);
        $unis = University::with('departments')->get()->keyBy('id');
        return view('pages.admin.member.student-dashboard', compact('users', 'unis'));
    }

    public function viewStudent($id)
    {
        $user = User::with('university', 'major')->find($id);
        return view('pages.admin.member.student-view', compact('user'));
    }

    public function viewStudentEdit(User $user)
    {
        $unis = University::with('departments')->get()->keyBy('id');
        return view('pages.admin.member.student-view-edit', compact('user', 'unis'));
    }

    public function viewStudentEditDp()
    {
        return view('pages.admin.member.student-view-edit-dp');
    }

    public function registerStudent()
    {
        $unis = University::with('departments')->get()->keyBy('id');
        return view('pages.admin.member.student-register', compact('unis'));
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
        $exposure = Banner::pluck('status')->toArray();
        $value = 0;
        $count = array_count_values($exposure)[$value];
        return view('pages.admin.banner.banner-add', [
            'count' => $count,
            'existingValues' => $existingValues,
        ]);
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
        $existingValues = Banner::pluck('sequence')->toArray();
        $exposure = Banner::pluck('status')->toArray();
        $value = 0;
        $count = array_count_values($exposure)[$value];
        return view('pages.admin.banner.banner-modification', [
            'banner' => $banner,
            'count' => $count,
            'existingValues' => $existingValues,
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
        $main_exposure = Notice::pluck('main_exposure')->toArray();
        $exposure = Notice::pluck('exposure')->toArray();
        $value = 0;
        $count = array_count_values($exposure)[$value];
        return view('pages.admin.notice.notice-modification', [
            'notice' => $notice,
            'main_exposure' => $main_exposure,
            'count' => $count,
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
        $main_exposure = News::pluck('main_exposure')->toArray();
        $exposure = News::pluck('exposure')->toArray();
        $value = 0;
        $count = array_count_values($exposure)[$value];
        return view('pages.admin.news.news-modification', [
            'news' => $news,
            'main_exposure' => $main_exposure,
            'count' => $count,
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
        $count = Resource::where('status', 1)->count();
        return view('pages.admin.resource.resource-modification', compact('resource', 'count'));
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


    // Menu Manegement Start ------------------------------------------------------------------

    public function menuRegistration()
    {
        $menus = Menu::get();
        return view('pages.admin.menu.menu-register',compact('menus'));
    }

    public function updateMenu(Request $request){
        $menu = Menu::findOrFail(request('menu_id'));
        $menu->update([
            'name' => request('name'),
            'student' => isset($request->chkStudent) ? 1 : 0,
            'instructor' => isset($request->chkInstructor) ? 1 : 0,
        ]);
        return redirect('/admin/menuReg')->with('success', 'Menu Updated Successfully');
    }

    // Menu Manegement End ------------------------------------------------------------------


    // Logo Manegement Start ------------------------------------------------------------------

    public function logoRegistration()
    {
        return view('pages.admin.menu.logo-register');
    }

    public function userLogoRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        
        if ($validator->fails()) return redirect('/admin/logoReg')->withErrors($validator)->withInput();

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = 'userSiteLogo'.'.' . $extension;
            $imagePath = 'public/images/logo/' . $fileName;

            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
            $request->file('image')->storeAs('public/images/userlogo/', $fileName);
        }
    
        return redirect('/admin/logoReg')->with('success', 'logo has been added.');
    }

    public function adminLogoRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image2' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        
        if ($validator->fails()) return redirect('/admin/logoReg')->withErrors($validator)->withInput();
    
        if ($request->hasFile('image2')) {
            $extension = $request->file('image2')->getClientOriginalExtension();
            $fileName = 'adminSiteLogo'.'.' . $extension;
            $imagePath = 'public/images/logo/' . $fileName;
    
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
            $request->file('image2')->storeAs('public/images/adminlogo/', $fileName);
        }
        return redirect('/admin/logoReg')->with('success', 'logo has been added.');
    }

    // Logo Manegement End ------------------------------------------------------------------

    // Statistics Manegement Start ------------------------------------------------------------------

    public function surveyStatDashboard()
    {
        return view('pages.admin.statistics.survey-stat-dashboard');
    }
    public function surveyStatDetailsView()
    {
        return view('pages.admin.statistics.survey-stat-details');
    }
    public function surveyItemDashboard()
    {
        return view('pages.admin.statistics.survey-item-dashboard');
    }
    public function surveyItemRegistration()
    {
        return view('pages.admin.statistics.survey-item-register');
    }
    public function surveyItemModify()
    {
        return view('pages.admin.statistics.survey-item-modification');
    }

    // Statistics Manegement End ------------------------------------------------------------------


    // Score Manegement Start ------------------------------------------------------------------

    public function scoreEvalDashboard()
    {
        $score = Score::first();
        return view('pages.admin.score.eval-score-dashboard', compact('score'));
    }
    public function scoreEvalModify()
    {
        $score = Score::first();
        return view('pages.admin.score.eval-score-modification', compact('score'));
    }
    public function scoreUpdate(Request $request)
    {
        $score = Score::first();
        $score->update([
            'pre_learning' => request('pre_learning'),
            'main_study' => request('main_study'),
            'report' => request('report'),
        ]);
        return redirect('/admin/scoreEvalDash')->with('success', 'Score Updated Successfully');
    }
    public function scoreCertifyDashboard()
    {
        $score = Score::first();
        return view('pages.admin.score.certify-score-dashboard', compact('score'));
    }
    public function scoreCertifyModify()
    {
        $score = Score::first();
        return view('pages.admin.score.certify-score-modification', compact('score'));
    }
    public function certificateUpdate(Request $request)
    {
        $score = Score::first();
        $score->update([
            'cutoff' => request('cutoff'),
            'cert_explanation' => request('cert_explanation'),
        ]);
        return redirect('/admin/scoreCertifyDash')->with('success', 'Score Updated Successfully');
    }
    // Score Manegement End ------------------------------------------------------------------


    // Reports Manegement Start ------------------------------------------------------------------

    // Instructor report
    public function insReportDashboard()
    {
        return view('pages.admin.reports.ins-report-dashboard');
    }
    public function insReportDetailsView()
    {
        return view('pages.admin.reports.ins-report-details');
    }

    // Student report
    public function stuReportDashboard()
    {
        return view('pages.admin.reports.stu-report-dashboard');
    }
    public function stuReportDetailsView()
    {
        return view('pages.admin.reports.stu-report-details');
    }

    // Reports Manegement End ------------------------------------------------------------------


    // Gallery Manegement Start ------------------------------------------------------------------

    public function galleryDashboard()
    {
        $galleries = Gallery::paginate(10);
        return view('pages.admin.gallery.gallery-dashboard',compact('galleries'));
    }
    public function galleryRegistration()
    {
        return view('pages.admin.gallery.gallery-register');
    }
    public function galleryRegistrationComplete()
    {
        return view('pages.admin.gallery.gallery-register-complete');
    }
    public function galleryDetailsView($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('pages.admin.gallery.gallery-details',compact('gallery'));
    }
    public function galleryModify($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('pages.admin.gallery.gallery-modification',compact('gallery'));
    }

    // Gallery Manegement End ------------------------------------------------------------------


    // University Code Manegement Start ------------------------------------------------------------------

    public function univCodeDashboard()
    {
        $universities = University::paginate(10);
        return view('pages.admin.universityCode.univ-code-dashboard', compact('universities'));
    }
    public function univCodeRegistration()
    {
        return view('pages.admin.universityCode.univ-code-register');
    }
    public function univCodeDetailsView($id)
    {
        $university = University::findOrFail($id);
        $departments = $university->departments;
        return view('pages.admin.universityCode.univ-code-details', compact('university','departments'));
    }
    public function univCodeModify($id)
    {
        $university = University::findOrFail($id);
        $departments = $university->departments;
        return view('pages.admin.universityCode.univ-code-modification',compact('university','departments'));
    }

    // University Code Manegement End ------------------------------------------------------------------


    // DashBoard Start ---------------------------------------------------------------------------
    public function dashboard()
    {
        return view('pages.admin.adminLayout.dashboard');
    }
    // DashBoard End ---------------------------------------------------------------------------
}
