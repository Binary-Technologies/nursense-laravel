<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function newsRegister(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'flexRadioDefault' => 'required',
            'flexRadioDefault2' => 'required',
            'title' => 'required',
            'contents' => 'required',
        ]);
              
        if ($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
        else {
            News::create([
                
                'title' => $request->input('title'),            
                'content' => $request->input('content'),
                'main_exposure' => $request->input('main_exposure'),
                'exposure'=> $request->input('exposure'),

            ]);
        return redirect('/admin/newsDash')->with('news added', 'News has been added.');
        }   
    }

    public function newsDelete($id)
    {
        $notice = News::findOrFail($id);
        $notice->delete();
        return redirect('/admin/newsDash')->with('news delete','News deleted successfully');
    }

    public function newsUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'flexRadioDefault' => 'required',
            'flexRadioDefault2' => 'required',
            'title' => 'required',
            'contents' => 'required',
        ]);
    
        if ($validate->fails())return redirect()->back()->withErrors($validate)->withInput();
        else {
            $data = News::findOrFail($id);
            $data->main_exposure = $request->input('flexRadioDefault');
            $data->exposure = $request->input('flexRadioDefault2');
            $data->title = $request->input('title');
            $data->content = $request->input('contents');
            $data->save();
            
            return redirect('/admin/newsDash')->with('news update','News updated successfully');
        }
    }
}
