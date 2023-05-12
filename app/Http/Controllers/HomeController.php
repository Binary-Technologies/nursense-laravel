<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Notice;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::where('exposure', 1)->get();
        $notices = Notice::where('exposure', 1)->get();
        $main_news = News::where('main_exposure', 1)->get();
        $main_notice = Notice::where('main_exposure', 1)->get();
        return view('welcome', compact('news', 'notices', 'main_news', 'main_notice'));
    }
}
