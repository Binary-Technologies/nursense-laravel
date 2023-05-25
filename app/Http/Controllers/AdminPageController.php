<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    // Member Management -------------------------------------------------------------------
    // Instructor
    public function instructorDashboard()
    {
        return view('pages.admin.member.instructor-dashboard');
    }

    public function viewInstructor()
    {
        return view('pages.admin.member.instructor-view');
    }

    public function viewInstructorEdit()
    {
        return view('pages.admin.member.instructor-view-edit');
    }

    public function viewInstructorEditDp()
    {
        return view('pages.admin.member.instructor-view-edit-dp');
    }

    public function registerInstructor()
    {
        return view('pages.admin.member.instructor-register');
    }

    // Student
    public function studentDashboard()
    {
        return view('pages.admin.member.student-dashboard');
    }

    public function viewStudent()
    {
        return view('pages.admin.member.student-view');
    }

    public function viewStudentEdit()
    {
        return view('pages.admin.member.student-view-edit');
    }

    public function viewStudentEditDp()
    {
        return view('pages.admin.member.student-view-edit-dp');
    }

    public function registerStudent()
    {
        return view('pages.admin.member.student-register');
    }



    public function dashboard()
    {
        return view('pages.admin.adminLayout.dashboard');
    }

    // Member Management -------------------------------------------------------------------


    // Banner Mangement --------------------------------------------------------------------

    public function bannerDashboard()
    {
        return view('pages.admin.banner.banner-dashboard');
    }

    // Banner Mangement --------------------------------------------------------------------


}
