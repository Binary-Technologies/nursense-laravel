<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
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

    public function studentFilter(Request $request){
      
        $school = [];
        switch ($request->input('university')) {
            case 1:
                $school = [1,2,3,4,5];
                break;
            case 2:
                $school = [2];
                break;
            case 3:
                $school = [3];
                break;
            case 4:
                $school = [4];
                break;
            case 5:
                $school = [5];
                break;
            default:
                $school = [2,3,4,5];
                break;
        }

        $department = [];
        switch ($request->input('major')) {
            case 1:
                $department = [1,2,3,4,5];
                break;
            case 2:
                $department = [2];
                break;
            case 3:
                $department = [3];
                break;
            case 4:
                $department = [4];
                break;
            case 5:
                $department = [5];
                break;
            default:
                $department = [2,3,4,5];
                break;
        }
        $date = null;
        if ($request->input('reg-date') != '') $date = Carbon::parse($request->input('reg-date'));
        $searchValue = $request->input('search');
        $order = $request->input('criteria');
        $users = User::whereIn('uni_id',$school)->whereIn('major_id',$department)->where(function ($query) use ($searchValue) {
                $query->where('name', 'like', '%' . $searchValue . '%')
                        ->orWhere('email', 'like', '%' . $searchValue . '%');
                        })->where(function ($query) use ($date) {
                            if($date == null) $query->whereNotNull('created_at');
                            else $query->whereDate('created_at','=',$date);
                        })->where('role', 'student')->orderBy($order)->paginate(10);
  
        return view('pages.admin.member.student-dashboard',[
            'users' => $users,
        ]);
      }

      public function instructorFilter(Request $request){
      
        $university = [];
        switch ($request->input('university')) {
            case 1:
                $university = [1,2,3,4,5];
                break;
            case 2:
                $university = [2];
                break;
            case 3:
                $university = [3];
                break;
            case 4:
                $university = [4];
                break;
            case 5:
                $university = [5];
                break;
            default:
                $university = [2,3,4,5];
                break;
        }

        $major = [];
        switch ($request->input('major')) {
            case 1:
                $major = [1,2,3,4,5];
                break;
            case 2:
                $major = [2];
                break;
            case 3:
                $major = [3];
                break;
            case 4:
                $major = [4];
                break;
            case 5:
                $major = [5];
                break;
            default:
                $major = [2,3,4,5];
                break;
        }
        $date = null;
        if ($request->input('reg-date') != '') $date = Carbon::parse($request->input('reg-date'));
        $searchValue = $request->input('search');
        $order = $request->input('criteria');
        $users = User::whereIn('uni_id',$university)->whereIn('major_id',$major)->where(function ($query) use ($searchValue) {
                $query->where('name', 'like', '%' . $searchValue . '%')
                        ->orWhere('email', 'like', '%' . $searchValue . '%');
                        })->where(function ($query) use ($date) {
                            if($date == null) $query->whereNotNull('created_at');
                            else $query->whereDate('created_at','=',$date);
                        })->where('role', 'instructor')->orderBy($order)->paginate(10);
  
        return view('pages.admin.member.instructor-dashboard',[
            'users' => $users,
        ]);
      }
}
