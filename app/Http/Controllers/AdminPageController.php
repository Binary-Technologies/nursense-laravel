<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data,[
            'inst_id' =>['unique:users'],
            'std_id' => ['unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'pno' => ['required','unique:users'],
            'name' => ['required'],
            //'password' =>  ['required', 'string', 'min:8', 'confirmed'],
                        
        ]);
    }

    public function instructorDashboard(){
        $users = User::where('role', 'instructor')->get();

        return view('pages.admin.member.instructor-dashboard',[
            'users' => $users,
        ]);
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
        $users = User::where('role', 'student')->get();
        return view('pages.admin.member.student-dashboard',[
            'users' => $users,
        ]);
    }

    public function viewStudent(){
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

    public function dashboard(){
        return view('pages.admin.adminLayout.dashboard');
    }

    public function bannerDashboard(){
        return view('pages.admin.banner.banner-dashboard');
    }

    //Instructor registration
    public function instructorRegister(Request $request)
    {
        validator($request->all())->validate();

        $user = User::create([
            'name' => $request['name'],
            'pno' => $request['mobile'],
            'email' => $request['email'],
            'occupation' => $request['job'],
            'uni_id'=>$request['university'],
            'major_id' => $request['major'],
            'role' => 'instructor',
            'password' => '',
        ]);

        return view('pages.admin.member.instructor-register');
    }

    //Student registration
    public function studentRegister(Request $request)
    {
        validator($request->all())->validate();

        $user = User::create([
            'name' => $request['name'],
            'pno' => $request['mobile'],
            'email' => $request['email'],
            'occupation' => $request['job'],
            'uni_id'=>$request['university'],
            'major_id' => $request['major'],
            'role' => 'student',
            'password' => '',
        ]);

        return view('pages.admin.member.student-register');
    }
}
