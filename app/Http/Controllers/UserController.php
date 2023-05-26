<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*protected function validator(array $data)
    {
        return Validator::make($data,[
            'inst_id' =>['unique:users'],
            'std_id' => ['unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'pno' => ['required','unique:users'],
            'name' => ['required'],
        ]);
    }*/

    //Instructor registration
    public function instructorRegister(Request $request)
    {
            $validate = Validator::make($request->all(), [
            'email' => ['email', 'max:255', 'unique:users'],
            'pno' => ['required','unique:users,pno'],
            'name' => ['required'],
        ]);
        
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            User::create([
                'name' => $request['name'],
                'pno' => $request['mobile'],
                'email' => $request['email'],
                'occupation' => $request['job'],
                'uni_id' => $request['university'],
                'major_id' => $request['major'],
                'role' => 'instructor',
                'password' => '',
            ]);

            return redirect('/admin/insReg')->with('success', 'Instructor account has been added.');
        }
    }

    //Student registration
    public function studentRegister(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => ['email', 'max:255', 'unique:users,email'],
            'pno' => ['required','unique:users,pno'],
            'name' => ['required'],
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            User::create([
                'name' => $request['name'],
                'pno' => $request['mobile'],
                'email' => $request['email'],
                'occupation' => $request['job'],
                'uni_id' => $request['university'],
                'major_id' => $request['major'],
                'role' => 'student',
                'password' => '',
            ]);
            session()->flash('success','Student account has been added.');
            return redirect('/admin/stuReg');
        }
    }
}
