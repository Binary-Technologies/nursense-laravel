<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Notice;

class PageController extends Controller
{
    public function index(){
        $news = News::where('exposure', 1)->get();
        $notices = Notice::where('exposure', 1)->get();
        $main_news = News::where('main_exposure', 1)->get();
        $main_notice = Notice::where('main_exposure', 1)->get();
        return view('pages.home', compact('news', 'notices', 'main_news', 'main_notice'));
    }

    public function download(){
        return view('pages.download');
    }

    public function certificate(){
        $news = News::where('exposure', 1)->get();
        return view('pages.certificate', compact('news'));
    }

    public function curriculum(){
        return view('pages.curriculum');
    }

    public function galleryDetails(){
        return view('pages.gallery-details');
    }

    public function guide(){
        return view('pages.guide');
    }

    public function curriculum2(){
        return view('pages.curriculum2');
    }

    public function front_slider(){
        return view('pages.front_slider'); //php echo
    }

    public function info_details(){
        return view('pages.info_details');
    }

    public function info(){
        return view('pages.info');
    }

    public function inquiry_activated(){
        return view('pages.inquiry_activated');
    }

    public function inquiry_await(){
        return view('pages.inquiry_await');
    }

    public function inquiry(){
        return view('pages.inquiry');
    }

    public function learning_details(){
        return view('pages.learning_details');
    }

    public function learning(){
        return view('pages.learning');
    }
    //

    public function location(){
        return view('pages.location');
    }

    public function muve_gallery(){
        return view('pages.muve_gallery');
    }

    public function muve(){
        return view('pages.muve');
    }

    public function myallocation(){
        return view('pages.myallocation');
    }

    public function myassesment(){
        return view('pages.myassesment');
    }

    public function mymanage(){
        return view('pages.mymanage');
    }

    public function myprelearning(){
        return view('pages.myprelearning');
    }


    public function myprofile_dp_upload(){
        return view('pages.myprofile_dp_upload');
    }

    //myprofile-passsword..... has been left out

    public function myprofile(){
        return view('pages.myprofile');
    }

    public function myreports(){
        return view('pages.myreports');
    }

    public function mystudy(){
        return view('pages.mystudy');
    }

    public function news_main_details(){
        return view('pages.news_main_details');
    }

    public function news_main(){
        return view('pages.news_main');
    }

    //notice ...... has been leftout

    public function privacy_policy(){
        return view('pages.privacy_policy');
    }

    public function quiz(){
        return view('pages.quiz');
    }

    public function resources_details(){
        return view('pages.resources_details');
    }

    public function resources(){
        return view('pages.resources');
    }
    public function terms_conditions(){
        return view('pages.terms_conditions');
    }

    public function user_manual(){
        $news = News::where('exposure', 1)->get();
        return view('pages.user_manual', compact('news'));
    }

    public function myprofile_contact_upload(){
        return view('pages.myprofile_contact_upload');
    }

    public function myprofile_email_upload(){
        return view('pages.my_profile_email_upload');
    }

    public function myprofile_password_upload(){
        return view('pages.myprofile_password_upload');
    }
}

