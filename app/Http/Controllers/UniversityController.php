<?php

namespace App\Http\Controllers;

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
        
        University::create([               
            'name' => $request->input('univ-title'),            
            'code' => $request->input('univ-code'),
            'major' => $request->input('major'),
        ]);
        return redirect('/admin/univCodeDash')->with('University added', 'University has been added.');
    }

    public function universityUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'univ-title' => 'required',
            'univ-code' => 'required',
        ]);
    
        if ($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
        
        $data = University::findOrFail($id);
        $data->name = $request->input('univ-title');
        $data->code = $request->input('univ-code');
        $data->major = $request->input('major');
          
        $data->save();
        return redirect('/admin/univCodeDash')->with('university update','university updated successfully');
    }

    public function universityDelete($id)
    {
        $university = University::findOrFail($id);
        $university->delete();
        return redirect('/admin/univCodeDash')->with('university delete','university deleted successfully');
    }
}
