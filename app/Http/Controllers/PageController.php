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
        return view('pages.inquiry_await');
    }

    public function inquiry(){
        return view('pages.inquiry');
    }

    public function learning_details(){
        return view('pages.learning_details');
    }

    public function userLogin(){
        return view('pages.user-login');
    }
}
