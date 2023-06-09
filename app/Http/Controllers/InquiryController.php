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
      
        $exposure = [];
        switch ($request->input('expose-inquiry')) {
            case 1:
                $exposure = [1,0];
                break;
            case 2:
                $exposure = [1];
                break;
            case 3:
                $exposure = [0];
                break;
            default:
                $exposure = [1,0];
                break;
        }

        $searchValue = $request->input('search');

        $inquiries = Inquiry::whereIn('status', $exposure)->where(function ($query) use ($searchValue) {
            $query->where('title', 'like', '%' . $searchValue . '%')
                ->orWhere('inquiryDetail', 'like', '%' . $searchValue . '%')
                ->orWhere('writerName', 'like', '%' . $searchValue . '%');
        })->orderByDesc('id')->paginate(10);
  
        return view('pages.admin.inquiry.inquiry-dashboard',[
            'inquiries' => $inquiries,
        ]);
    }
}
