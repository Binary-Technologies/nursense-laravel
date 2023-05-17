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
}
