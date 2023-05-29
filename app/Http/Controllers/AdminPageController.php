<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function instructorDashboard(){
        $users = User::where('role', 'instructor')->get();

        return view('pages.admin.member.instructor-dashboard',[
            'users' => $users,
        ]);
    }

    public function viewInstructor(User $user){
        return view('pages.admin.member.instructor-view',[
            'user' => $user,
        ]);
    }

    public function registerInstructor(){
        return view('pages.admin.member.instructor-register');
    }

    public function updateInstructor(){
        return view('pages.admin.member.instructor-update');
    }

    public function viewInstructorEdit(User $user)
    {
        return view('pages.admin.member.instructor-view-edit',[
            'user' => $user,
        ]);
    }

    public function studentDashboard(){
        $users = User::where('role', 'student')->get();
        return view('pages.admin.member.student-dashboard',[
            'users' => $users,
        ]);
    }

    public function viewStudent(User $user){
        return view('pages.admin.member.student-view',[
            'user' => $user,
        ]);
    }

    public function viewStudentEdit(User $user)
    {
        return view('pages.admin.member.student-view-edit',[
            'user' => $user,
        ]);
    }

    public function viewStudentEditDp()
    {
        return view('pages.admin.member.student-view-edit-dp');
    }

    public function registerStudent()
    {
        return view('pages.admin.member.student-register');
    }

    public function dashboard(){
        return view('pages.admin.adminLayout.dashboard');
    }

    public function bannerDashboard(){
        return view('pages.admin.banner.banner-dashboard');
    }

}
