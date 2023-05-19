<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//this controller for the admin panel home page controll
    //protected $redirectTo = RouteServiceProvider::HOME;
    /*public function __construct()
    {
        $this->middleware('auth');
    }
    */
    protected function validator(array $data)
    {
        return Validator::make($data,[
            'inst_id' =>['unique:users'],
            'std_id' => ['unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'pno' => ['required','unique:users'],
            'name' => ['required'],
            'major' => ['required'],
            'password' =>  ['required', 'string', 'min:8', 'confirmed'],
            'dob' => ['required'],
            'gender' => ['required'],
            'resident_reg' => ['required'],
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showUser()
    {
        return User::all();
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'message' => 'User account deleted successfully'
        ]);
    }
    
    protected function userRegister(Request $request)
    {
        
        validator($request->all())->validate();
        //$this->validator($request->all())->validate();
        $user = User::create([
            'inst_id' => $request['inst_id'],
            'std_id' => $request['std_id'],
            'email' => $request['email'],
            'pno' => $request['pno'],
            'name' => $request['name'],
            'major' => $request['major'],
            'password' => Hash::make($request['password']),
            'dob' => $request['dob'],
            'gender' => $request['gender'],
            'resident_reg' => $request['resident_reg'],
            'active_status' => $request['active_status'],
            'occupation' => $request['occupation'],
            'completion_status' => $request['completion_status'],
            'grade' => $request['grade'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            
        ]);
       
        return response()->json([
            'message' => 'User account created successfully'
        ]);                                                                                      
    }   
    
    
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        //validator($request->all())->validate();
        //$this->validator($request->all())->validate();
        
        $user->inst_id = $request->input('inst_id');
        $user->std_id = $request->input('std_id');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->pno = $request->input('pno');
        $user->major = $request->input('major');
        $user->active_status = $request->input('active_status');
        $user->dob = $request->input('dob');
        $user->occupation = $request->input('occupation');
        $user->gender = $request->input('gender');
        $user->completion_status = $request->input('completion_status');
        $user->grade = $request->input('grade');
        $user->start_date = $request->input('start_date');
        $user->end_date = $request->input('end_date');
        $user->resident_reg = $request->input('resident_reg');
        
        // return $user;
        // Check if a thumbnail image was provided and save it
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $filename = time() . '_' . $thumbnail->getClientOriginalName();
            $thumbnail->storeAs('public/thumbnails', $filename);
            $user->thumbnail = $filename;
        }
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return response()->json(['message' => 'User details updated successfully', 'data' => $user], 200);
    }
}                       
                                       