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

    //
    public function guide(){
        return view('pages.guide');
    }

    public function curriculum2(){
        return view('pages.curriculum2');
    }

    public function front_slider(){
        return view('pages.front_slider');
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
        return view('inquiry_await.blade');
    }

    public function inquiry(){
        return view('inquiry.blade');
    }

    public function learning_details(){
        return view('learning_details.blade');
    }

    public function learning_details(){
        return view('learning.blade');
    }

    //

    public function location(){
        return view('location.blade');
    }

    public function muve_gallery(){
        return view('muve_gallery.blade');
    }

    public function muve(){
        return view('muve.blade');
    }

    public function myallocation(){
        return view('myallocation.blade');
    }

    public function myassesment(){
        return view('myassesment.blade');
    }

    public function mymanage(){
        return view('mymanage.blade');
    }

    public function myprelearning(){
        return view('myprelearning.blade');
    }

    //myprofile-contact..... has been left out

    public function myprofile_dp_upload(){
        return view('myprofile_dp_upload.blade');
    }

    //myprofile-email..... has been left out
    //myprofile-passsword..... has been left out

    public function myprofile(){
        return view('myprofile.blade');
    }

    public function myreports(){
        return view('myreports.blade');
    }

    public function mystudy(){
        return view('mystudy.blade');
    }

    public function news_main_details(){
        return view('news_main_details.blade');
    }

    public function news_main(){
        return view('news_main.blade');
    }

    //notice ...... has been leftout

    public function privacy_policy(){
        return view('privacy_policy.blade');
    }

    public function quiz(){
        return view('quiz.blade');
    }

    public function resources_details(){
        return view('resources_details.blade');
    }

    public function resources(){
        return view('resources.blade');
    }
    public function terms_conditions(){
        return view('terms_conditions.blade');
    }

    public function user_manual(){
        return view('user_manual.blade');
    }
}
