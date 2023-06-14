<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data,[
            'inst_id' =>['unique:users'],
            'std_id' => ['unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'pno' => ['required','unique:users'],
            'name' => ['required'],
        ]);
    }

    //Instructor registration
    public function instructorRegister(Request $request)
    {
            $validate = Validator::make($request->all(), [
            'email' => ['email', 'max:255', 'unique:users'],
            'mobile' => ['required','unique:users,pno'],
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

    public function instructorUpdate(Request $request, $inst_id)
    {
        $user = User::findOrFail($inst_id);
        validator($request->all())->validate();
        $user->name = $request->input('name');
        $user->pno = $request->input('mobile');
        $user->uni_id = $request->input('university');
        $user->major_id = $request->input('major');
        $user->email = $request->input('email');
        $user->resident_reg = $request->input('res-reg-num1');
        $user->occupation = $request->input('job');
        
        $user->save();

        return redirect('/admin/instructorDash')->with('success', 'Instructor account has been Updated.');
    }

    //Student registration
    public function studentRegister(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => ['email', 'max:255', 'unique:users,email'],
            'mobile' => ['required','unique:users,pno'],
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
    public function studentUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);
        validator($request->all())->validate();
        $user->name = $request->input('name');
        $user->pno = $request->input('mobile');
        $user->uni_id = $request->input('university');
        $user->major_id = $request->input('major');
        $user->grade = $request->input('year');
        $user->std_id = $request->input('stu-id');
        $user->email = $request->input('email');
        $user->resident_reg = $request->input('res-reg-num1');
        $user->occupation = $request->input('job');
        
        $user->save();

        return redirect('/admin/studentDash')->with('success', 'Student account has been Updated.');
    }

    public function deleteImage(Request $request){
        $user = User::findOrFail($request->id);
        if($user->thumbnail){
            Storage::delete($user->thumbnail);
            $user->thumbnail = null;
        }
        return redirect()->back()->with('success', 'Image has been deleted.');
    }

    public function loginAPI(Request $request){
        $credentials = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($request->only(['email','password']))) {
            $customer = User::where('email', $request->email)->first();
            $token = $customer->createToken('customer-token')->plainTextToken;
            return response()->json(['token' => $token], 200);
        }
        else{
            return response()->json([
                'message' => 'Your provided credentials not verified.'
            ]);
        }
    }
}
