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
use App\Models\UserMainStudy;
use App\Models\UserFinalAnswer;
use App\Models\MainStudy;
use App\Models\Report;
use App\Models\UserReport;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

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
        $studies = MainStudy::with('preLearning', 'final', 'semester', 'curriculum', 'department')->get();
        return view('pages.myassesment', compact('studies'));
    }

    public function myassesmentPreview($id)
    {
        $study =  MainStudy::where('id', $id)->with('preLearning', function($query) {
            $query->with('questions');
        })->first();
        $page = 'pre';
        return view('pages.myassesment-preview', compact('study', 'page'));
    }

    public function myassesmentPreviewFinal($id)
    {
        $study =  MainStudy::where('id', $id)->with('final', function($query) {
            $query->with('questions');
        })->first();
        $page = 'final';
        return view('pages.myassesment-preview', compact('study', 'page'));
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
        if(\Auth::user()->role == 'student') return redirect('/profile/info');
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

    //myprofile-passsword..... has been left out

    public function myprofile()
    {
        $user = \Auth::user();
        return view('pages.user.profile.myprofile', compact('user'));
    }

    public function dpUpload()
    {
        return view('pages.user.profile.myprofile-dp-upload');
    }

    public function contactUpload()
    {
        return view('pages.user.profile.myprofile-contact-upload');
    }

    public function emailUpload()
    {
        return view('pages.user.profile.myprofile-email-upload');
    }

    public function passwordUpload()
    {
        return view('pages.user.profile.myprofile-password-upload');
    }

    public function myprofileMemInfoMng($id)
    {
        $curriculum_id = 1;
        $student = User::where('id', $id)->with('mainStudies', function($query) use ($curriculum_id) {
            $query->with('mainStudy', function($query) use ($curriculum_id) {
                $query->where('curriculum_id', $curriculum_id)->with('report:id,grade', 'survey:id', 'final:id,total_points');
            })->with('userFinal', 'userReport');
        })->first();
        // return $student;
        return view('pages.user.profile.myprofile-member-info-mng', compact('student'));
    }

    public function mystudy()
    {
        $curriculum_id = 1;
        $user = User::where('id', \Auth::user()->id)->with('curricula')->first();
        $study = UserMainStudy::where('student_id', \Auth::user()->id)->with('mainStudy', function($query) use ($curriculum_id) {
            $query->where('curriculum_id', $curriculum_id)->with('report', 'survey:id', 'curriculum')->with('final', function($query){
                $query->with('questions');
            });
        })->with('userFinalAnswers', 'userReport', 'userSurvey')->first();

        $preLearnings = PreLearning::where('curriculum_id', $curriculum_id)->with('questions')->get();
        foreach ($preLearnings as $key => $preLearning) {
            $score = 0;
            $userScore = 0;
            $completeDate = '-';
            $c = 0;
            foreach ($preLearning->questions as $key => $question) {
                $answer = PreLearningAnswers::where('pre_learning_id', $preLearning->id)->where('pre_learning_question_id', $question->id)->where('user_id', \Auth::user()->id)->first();
                if($answer) {
                    if($question->answer == $answer->given_answer) $userScore += $question->points;
                    $score += $question->points;
                    $completeDate = $answer->created_at;
                }
            }
            $preLearning['score'] = $score;
            $preLearning['userScore'] = $userScore;
            $preLearning['completeDate'] = $completeDate;
            unset($preLearning['questions']);
        }

        $correct = 0;
        $incorrect = 0;
        $correctScore = 0;
        $totalScore = 0;
        if(count($study->userFinalAnswers) > 0) {
            foreach ($study->mainStudy->final->questions as $key => $question) {
                $userAnswer = UserFinalAnswer::where('final_id', $study->mainStudy->final->id)->where('final_question_id', $question->id)->where('user_id', \Auth::user()->id)->first();
                if($question->answer == $userAnswer->given_answer){
                    $correct++;
                    $correctScore += $question->points;
                }
                else $incorrect++;
                $totalScore += $question->points;
            }
        }
        $study['userFinalScore'] = $correctScore;
        $study['finalScore'] = $totalScore;

        $reportGrade = 0;
        $reportTotal = 0;
        if($study->mainStudy->report) $reportTotal = $study->mainStudy->report->grade;
        if($study->userReport) $reportGrade = $study->userReport->grade;
        $study['reportScore'] = $reportTotal;
        $study['userReportScore'] = $reportGrade;
        return view('pages.user.profile.mystudy', compact('user', 'study', 'correct', 'incorrect', 'preLearnings'));
    }

    public function myreports()
    {
        $user = Auth::user()->id;
        $reports = MainStudy::with('preLearning', 'final', 'semester', 'curriculum', 'department')->where('instructor_id' , $user)->get();
        
        return view('pages.myreports',compact('reports'));
    }

    public function studentReports($id)
    {
        $user = Auth::user()->id;
        $reports = MainStudy::with('preLearning', 'final', 'semester', 'curriculum', 'department')->where('instructor_id' , $user)->get();
        $userReports = UserMainStudy::with('student','userReport')->get();
        return view('pages.userreports',compact('reports','userReports'));
    }

    public function myreportsReg()
    {
        return view('pages.myreports-reg');
    }
    public function myreportsAllSem($id)
    {
        $report = Report::findOrFail($id);
        return view('pages.myreports-all-sem',compact('report'));
    }
    public function myreportsModify($id)
    {
        $report = Report::findOrFail($id);

        $deadline_date = Carbon::parse($report->deadline_date);
        $date = $deadline_date->format('Y-m-d');
        $hour = $deadline_date->format('H');
        $minute = $deadline_date->format('i');

        return view('pages.myreports-modify',compact('report','date','hour','minute'));
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
