<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UniversityController extends Controller
{
    public function universityRegister(Request $request){
        $validate = Validator::make($request->all(), [
            'univ-title' => 'required',
            'univ-code' => 'required',
            
        ]);

        if ($validate->fails())return redirect()->back()->withErrors($validate)->withInput();
        
        $university = University::create([
            'name' =>  $request->input('univ-title'), 
            'code' => $request->input('univ-code'),
        ]);

        foreach ($request->input('major') as $departmentName) {
            $department = new Department([
                'name' => $departmentName,
            ]);
            $university->departments()->save($department);
        }

        return redirect('/admin/univCodeDash')->with('University added', 'University has been added.');
    }

    public function universityUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'univ-title' => 'required',
            'univ-code' => 'required',
        ]);
    
        if ($validate->fails())return redirect()->back()->withErrors($validate)->withInput();
        $university = University::findOrFail($id);
        $university->save([
            'name' => $request->input('univ-title'),
            'code' => $request->input('univ-code'),
        ]);

        $departments = $request->input('major');
        if ($departments) {
            $university->departments()->delete();

            foreach ($departments as $departmentName) {
                $department = new Department([
                    'name' => $departmentName,
                ]);
                $university->departments()->save($department);
            }
        }

        return redirect('/admin/univCodeDash')->with('university update','university updated successfully');
    }

    public function universityDelete($id)
    {
        $university = University::findOrFail($id);
        $university->delete();
        return redirect('/admin/univCodeDash')->with('university delete','university deleted successfully');
    }

    public function univFilter(Request $request){
        
        $searchValue = $request->input('search');

        $universities = University::where(function ($query) use ($searchValue) {
            $query->where('name', 'like', '%' . $searchValue . '%');
        })->orderByDesc('id')->paginate(10);
        
        
        return view('pages.admin.universityCode.univ-code-dashboard',compact('universities'));
    
    }
}
