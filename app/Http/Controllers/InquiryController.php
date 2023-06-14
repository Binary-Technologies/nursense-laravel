<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function inquiryAnswerReg(Request $request, $id)
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

    public function inquiryRegister(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);
        if ($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
        
        Inquiry::create([
            'title' => $request->input('title'),
            'inquiryDetail' => $request->input('content'),
            'writerName' => 'Dilshan Muditha',
        ]);
        
        return redirect('/info/inquiry')->with('Inquiry added','Inquiry added successfully');   
    }

    public function delete(Request $request)
    {
        $ids = $request->input('ids');

        if (!empty($ids)) {
            Inquiry::whereIn('id', $ids)->delete();
        }

        return redirect()->back()->with('inquiry delete', 'Selected rows deleted successfully.');

    }

    public function deleteInquiry($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->delete();
        return redirect('/info/inquiry')->with('inquiry delete', 'deleted successfully.');
    }

    public function inquiryFilter(Request $request){
      
        $filteredInquiries = Inquiry::query();
    
        if ($request->has('expose-inquiry')) {
            $exposeInquiry = $request->input('expose-inquiry');
    
            if ($exposeInquiry == 2) {
                
                $filteredNews->where('exposure', 0);
            } elseif ($exposeNews == 3) {
                
                $filteredNews->where('exposure', 1);
            }
        }
    
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
    
            $filteredNews->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('content', 'like', '%' . $searchTerm . '%');
            })->orderByDesc('id')->paginate(10);
        }
    
        $news = $filteredNews->orderByDesc('id')->orderByDesc('id')->paginate(10);
    
            return view('pages.admin.news.news-dashboard',[
                'news' => $news,
            ]);
      }
}
