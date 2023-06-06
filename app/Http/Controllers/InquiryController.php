<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function inquiryReg(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'contents' => 'required',
        ]);
        if ($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
        
        $data = Inquiry::findOrFail($id);
        $data->status = ('1');
        $data->answer = $request->input('contents');
        $data->save();
        
        return redirect('/admin/inquiryDash')->with('Inquiry added','Inquiry added successfully');
    }
    
    public function inquiryUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'contents' => 'required',
        ]);
        if ($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
        
        $data = Inquiry::findOrFail($id);
        $data->answer = $request->input('contents');
        $data->save();
        
        return redirect('/admin/inquiryDash')->with('Inquiry updated','Inquiry updated successfully');
    }
}
