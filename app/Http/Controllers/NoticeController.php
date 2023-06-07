<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function noticeRegister(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'flexRadioDefault' => 'required',
            'flexRadioDefault2' => 'required',
            'title' => 'required',
            'contents' => 'required',
        ]);
              
        if ($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
        
        Notice::create([
            
            'title' => $request->input('title'),            
            'content' => $request->input('contents'),
            'main_exposure' => $request->input('flexRadioDefault'),
            'exposure'=> $request->input('flexRadioDefault2'),

        ]);
        return redirect('/admin/noticeDash')->with('notice added', 'Notice has been added.');
    }

    public function noticeDelete($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();
        return redirect('/admin/noticeDash')->with('notice delete','notice deleted successfully');
    }

    public function noticeUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'flexRadioDefault' => 'required',
            'flexRadioDefault2' => 'required',
            'title' => 'required',
            'contents' => 'required',
        ]);
    
        if ($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
        
        $data = Notice::findOrFail($id);
        $data->main_exposure = $request->input('flexRadioDefault');
        $data->exposure = $request->input('flexRadioDefault2');
        $data->title = $request->input('title');
        $data->content = $request->input('contents');
        $data->save();
        
        return redirect('/admin/noticeDash')->with('notice update','Notice updated successfully');
    }
}