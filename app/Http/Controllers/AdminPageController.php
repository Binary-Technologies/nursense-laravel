<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    // Member Management Start -------------------------------------------------------------------
    // Instructor Mng. Start
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

    // Student Mng. Start
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
    // Member Management End -------------------------------------------------------------------


    // Banner Mangement Start --------------------------------------------------------------------

    public function bannerDashboard()
    {
        return view('pages.admin.banner.banner-dashboard');
    }
    public function bannerAdd()
    {
        return view('pages.admin.banner.banner-add');
    }
    public function bannerAddAttachFileReg()
    {
        return view('pages.admin.banner.banner-add-att-file-reg');
    }
    public function bannerDetailsView()
    {
        return view('pages.admin.banner.banner-details');
    }
    public function bannerModify()
    {
        return view('pages.admin.banner.banner-modification');
    }

    // Banner Mangement End --------------------------------------------------------------------


    // Notice Manegement Start ------------------------------------------------------------------

    public function noticeDashboard()
    {
        return view('pages.admin.notice.notice-dashboard');
    }
    public function noticeRegistration()
    {
        return view('pages.admin.notice.notice-register');
    }
    public function noticeDetailsView()
    {
        return view('pages.admin.notice.notice-details');
    }
    public function noticeModify()
    {
        return view('pages.admin.notice.notice-modification');
    }

    // Notice Manegement End ------------------------------------------------------------------





    // DashBoard Start ---------------------------------------------------------------------------
    public function dashboard()
    {
        return view('pages.admin.adminLayout.dashboard');
    }
    // DashBoard End ---------------------------------------------------------------------------
}
