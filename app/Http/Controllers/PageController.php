<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;
use App\Models\Notice;
use App\Models\Resource;
use App\Models\Direction;
use App\Models\Semester;
use App\Models\University;
use App\Models\Gallery;
use App\Models\Curriculum;
use App\Models\PreLearning;
use App\Models\PreLearningDetail;
use App\Models\PreLearningAnswers;

use Illuminate\Support\Arr;

class PageController extends Controller
{
    public function index()
    {
        $banners = Banner::where('status', 0)->get();
        $news = News::where('exposure', 0)->orderBy('id', 'desc')->get();
        $notices = Notice::where('exposure', 0)->orderBy('id', 'desc')->get();
        $main_news = News::where('main_exposure', 0)->get();
        $main_notice = Notice::where('main_exposure', 0)->get();
        return view('pages.home', compact('news', 'notices', 'main_news', 'main_notice', 'banners'));
    }

    public function download()
    {
        return view('pages.download');
    }

    public function certificate()
    {
        $news = News::where('exposure', 1)->get();
        return view('pages.certificate', compact('news'));
    }

    public function curriculum()
    {
        $preLearnings = PreLearning::where('status', 1)->paginate(10);
        return view('pages.curriculum', compact('preLearnings'));
    }

    public function quiz($id)
    {
        $played = PreLearningAnswers::where('pre_learning_id', $id)->where('user_id', \Auth::user()->id)->first();
        if ($played) return redirect('/curriculum/quiz/CheckAns/' . $id);

        $quiz = PreLearning::where('id', $id)->with('questions')->first();
        return view('pages.quiz', compact('quiz'));
    }

    public function learning_details()
    {
        return view('pages.learning_details');
    }

    public function learning()
    {
        return view('pages.learning');
    }

    public function guide()
    {
        return view('pages.guide');
    }

    public function curriculum2()
    {
        return view('pages.curriculum2');
    }

    public function front_slider()
    {
        return view('pages.front_slider'); //php echo
    }

    public function info_details()
    {
        return view('pages.info_details');
    }

    public function info()
    {
        return view('pages.info');
    }

    public function inquiry_activated()
    {
        return view('pages.inquiry_activated');
    }

    public function inquiry_await($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('pages.inquiry_await', compact('inquiry'));
    }

    public function inquiry()
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

        return view('pages.inquiry', compact('inquiries'));
    }

    public function location()
    {
        $location = Direction::first();
        return view('pages.location', compact('location'));
    }

    public function muve_gallery()
    {
        $galleries = Gallery::paginate(10);
        return view('pages.muve_gallery', compact('galleries'));
    }

    public function galleryDetails($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->increment('views');
        $gallery->save();
        return view('pages.gallery-details', compact('gallery'));
    }

    public function muve()
    {
        return view('pages.muve');
    }

    public function myallocation()
    {
        return view('pages.myallocation');
    }

    public function myassesment()
    {
        return view('pages.myassesment');
    }

    public function myassesmentPreview()
    {
        return view('pages.myassesment-preview');
    }

    public function myassesmentEvalReg()
    {
        return view('pages.myassesment-eval-reg');
    }

    public function myassesmentRevision()
    {
        return view('pages.myassesment-revision');
    }

    public function mymanage()
    {
        $students = User::whereNotNull('std_id')->paginate(10);
        $semesters = Semester::all();
        $university = University::where('id', \Auth::user()->uni_id)->with('departments')->first();
        return view('pages.mymanage', compact('students', 'semesters', 'university'));
    }

    public function myprelearning()
    {
        return view('pages.myprelearning');
    }

    public function myprelearningReg()
    {
        return view('pages.myprelearning-reg');
    }

    public function myprelearningModify()
    {
        return view('pages.myprelearning-modify');
    }


    public function myprofile_dp_upload()
    {
        return view('pages.myprofile_dp_upload');
    }

    //myprofile-passsword..... has been left out

    public function myprofile()
    {
        $user = \Auth::user();
        return view('pages.myprofile', compact('user'));
    }
    public function myprofileMemInfoMng()
    {
        return view('pages.myprofile-member-info-mng');
    }

    public function myreports()
    {
        return view('pages.myreports');
    }
    public function myreportsReg()
    {
        return view('pages.myreports-reg');
    }
    public function myreportsAllSem()
    {
        return view('pages.myreports-all-sem');
    }
    public function myreportsModify()
    {
        return view('pages.myreports-modify');
    }

    public function mystudy()
    {
        $user = User::where('id', \Auth::user()->id)->with('curricula')->first();
        return view('pages.mystudy', compact('user'));
    }

    public function news_main_details($id)
    {
        $news = News::findOrFail($id);
        $news->increment('views');
        $news->save();
        return view('pages.news_main_details', compact('news'));
    }

    public function news_main()
    {
        $newsExposures = News::where('exposure', 0)->orderBy('id', 'desc')->get();
        $searchValue = request('search');
        if (request('search')) {
            $news = News::where(function ($query) use ($searchValue) {
                $query->where('title', 'like', '%' . $searchValue . '%')
                    ->orWhere('content', 'like', '%' . $searchValue . '%');
            })->orderByDesc('id')->paginate(10);
        } else {
            $news = News::orderByDesc('id')->paginate(10);
        }

        return view('pages.news_main', compact('news', 'newsExposures'));
    }

    //notice ...... has been leftout
    public function notice_main_details($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->increment('views');
        $notice->save();
        return view('pages.notice_main_details', compact('notice'));
    }

    public function notice_main()
    {
        $noticeExposures = Notice::where('exposure', 0)->orderBy('id', 'desc')->get();
        $searchValue = request('search');
        if (request('search')) {
            $notices = Notice::where(function ($query) use ($searchValue) {
                $query->where('title', 'like', '%' . $searchValue . '%')
                    ->orWhere('content', 'like', '%' . $searchValue . '%');
            })->orderByDesc('id')->paginate(10);
        } else {
            $notices = Notice::orderByDesc('id')->paginate(10);
        }

        return view('pages.notice_main', compact('notices', 'noticeExposures'));
    }

    public function privacy_policy()
    {
        return view('pages.privacy_policy');
    }

    public function resources_details($id)
    {
        $resource = Resource::findOrFail($id);
        $resource->increment('views');
        $resource->save();
        return view('pages.resources_details', compact('resource'));
    }

    public function resources()
    {
        $resourceExposures = Resource::where('status', 1)->orderBy('id', 'desc')->get();
        $searchValue = request('search');
        if (request('search')) {
            $resources = Resource::where(function ($query) use ($searchValue) {
                $query->where('title', 'like', '%' . $searchValue . '%')
                    ->orWhere('details', 'like', '%' . $searchValue . '%');
            })->orderByDesc('id')->paginate(10);
        } else {
            $resources = Resource::orderByDesc('id')->paginate(10);
        }

        return view('pages.resources', compact('resources', 'resourceExposures'));
    }
    public function terms_conditions()
    {
        return view('pages.terms_conditions');
    }

    public function user_manual()
    {
        $news = News::where('exposure', 1)->get();
        return view('pages.user_manual', compact('news'));
    }

    public function myprofile_contact_upload()
    {
        return view('pages.myprofile_contact_upload');
    }

    public function myprofile_email_upload()
    {
        return view('pages.my_profile_email_upload');
    }

    public function myprofile_password_upload()
    {
        return view('pages.myprofile_password_upload');
    }

    public function userLogin()
    {
        return view('pages.user-login');
    }

    public function userLoginEmailAuth()
    {
        return view('pages.userloginEmailAuth');
    }
    public function userLoginInfoInput()
    {
        return view('pages.userloginInfoInput');
    }

    public function userLoginIdFind()
    {
        return view('pages.userloginIdFind');
    }

    public function userLoginPasswordFind()
    {
        return view('pages.userloginPasswordFind');
    }

    public function userLoginPasswordFindAuth()
    {
        return view('pages.userloginPasswordFindAuth');
    }
}
