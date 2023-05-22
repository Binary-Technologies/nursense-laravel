<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function instructorDashboard(){
        return view('pages.admin.member.instructor-dashboard');
    }

    public function viewInstructor(){
        return view('pages.admin.member.instructor-view');
    }

    public function registerInstructor(){
        return view('pages.admin.member.instructor-register');
    }

    public function updateInstructor(){
        return view('pages.admin.member.instructor-update');
    }

    public function studentDashboard(){
        return view('pages.admin.member.student-dashboard');
    }

    public function studentView(){
        return view('pages.admin.member.student-view');
    }

    public function dashboard(){
        return view('pages.admin.adminLayout.dashboard');
    }
}
