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

        $title = $request->input('title');
        $content = $request->input('contents');
        $main_exposure = $request->input('flexRadioDefault');       
        $exposure = $request->input('flexRadioDefault2'); 
              
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            News::create([
                
                'title' => $title,            
                'content' => $content,
                'main_exposure' => $main_exposure,
                'exposure'=> $exposure,

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
    
        $data = News::findOrFail($id);
        $data->main_exposure = $request->input('flexRadioDefault');
        $data->exposure = $request->input('flexRadioDefault2');
        $data->title = $request->input('title');
        $data->content = $request->input('contents');
    
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            $data->save();
            
            return redirect('/admin/newsDash')->with('news update','News updated successfully');
   
        }
    }

    public function upload(Request $request)
{
    if($request->hasFile('upload')) {
        //get filename with extension
        $filenamewithextension = $request->file('upload')->getClientOriginalName();
   
        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
   
        //get file extension
        $extension = $request->file('upload')->getClientOriginalExtension();
   
        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;
   
        //Upload File
        $request->file('upload')->storeAs('public/CKeditorUploads', $filenametostore);
 
        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('storage/uploads/'.$filenametostore); 
        $msg = 'Image successfully uploaded'; 
        $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
          
        // Render HTML output 
        @header('Content-type: text/html; charset=utf-8'); 
        echo $re;
    }
}

}
