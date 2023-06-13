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

    public function noticeFilter(Request $request){
      /*  $exposure = [];
        switch ($request->has('expose-notice')) {
            case '1':
                $exposure = [1,0];
                break;
            case '2':
                $exposure = [0];
                break;
            case '3':
                $exposure = [1];
                break;
            default:
                # code...
                break;
        }
        $searchValue = $request->input('search');
        $notices = Notice::whereIn('exposure', $exposure)->orWhere(function ($query) use ($searchValue) {
            $query  ->where('title', 'like', '%' . $searchValue . '%')
                    ->orWhere('content', 'like', '%' . $searchValue . '%');
        })->orderByDesc('id')->paginate(10);
*/
    $filteredNotices = Notice::query();

    if ($request->has('expose-notice')) {
        $exposeNotice = $request->input('expose-notice');

        if ($exposeNotice == 2) {
            
            $filteredNotices->where('exposure', 0);
        } elseif ($exposeNotice == 3) {
            
            $filteredNotices->where('exposure', 1);
        }
    }

    if ($request->has('search')) {
        $searchTerm = $request->input('search');

        $filteredNotices->where(function ($query) use ($searchTerm) {
            $query->where('title', 'like', '%' . $searchTerm . '%')
                ->orWhere('content', 'like', '%' . $searchTerm . '%');
        })->orderByDesc('id')->paginate(10);
    }

    $notices = $filteredNotices->orderByDesc('id')->orderByDesc('id')->paginate(10);
        return view('pages.admin.notice.notice-dashboard',[
            'notices' => $notices,
        ]);
    }
}