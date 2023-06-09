<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Notice;
use App\Models\Resource;
use Illuminate\Support\Arr;

class PageController extends Controller
{
    public function index(){
        $banners = Banner::where('status', 0)->get();
        $news = News::where('exposure', 0)->orderBy('id', 'desc')->get();
        $notices = Notice::where('exposure', 0)->orderBy('id', 'desc')->get();
        $main_news = News::where('main_exposure', 0)->get();
        $main_notice = Notice::where('main_exposure', 0)->get();
        return view('pages.home', compact('news', 'notices', 'main_news', 'main_notice', 'banners'));
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

    public function inquiry_await($id){
        $inquiry = Inquiry::findOrFail($id);
        return view('pages.inquiry_await',compact('inquiry'));
    }

    public function inquiry(){
        $inquiries = Inquiry::all();
        return view('pages.inquiry',compact('inquiries'));
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

    public function news_main_details($id){
        $news = News::findOrFail($id);
        $news->increment('views');
        $news->save();
        return view('pages.news_main_details',compact('news'));
    }

    public function news_main(){
        $news = News::orderByDesc('id')->get();
        return view('pages.news_main',compact('news'));
    }

    //notice ...... has been leftout

    public function privacy_policy(){
        return view('pages.privacy_policy');
    }

    public function quiz(){
        return view('pages.quiz');
    }

    public function resources_details($id){
        $resource = Resource::findOrFail($id);
        $resource->increment('views');
        $resource->save();
        return view('pages.resources_details',compact('resource'));
    }

    public function resources(){
        $resources = Resource::orderBy('id','desc')->get();
        return view('pages.resources',compact('resources'));
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
    
    public function userLogin(){
        return view('pages.user-login');
    }
}

