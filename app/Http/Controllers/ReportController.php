<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function reportRegister(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'title' => 'required',
            'date' => 'required',
            'hour' => 'required',
            'minute' => 'required',
            'content' => 'required',
            'attachments.*' => 'file|mimes:jpg,png,pdf,hwp,docx|max:500',
        ]);

        if ($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();

        $form = new Report();
        $form->title = $request->input('title');
        $form->publish_date = Carbon::now();
        $deadline_date = Carbon::createFromFormat(
            'Y-m-d H:i',
            $request->input('date') . ' ' . $request->input('hour') . ':' . $request->input('minute')
        );
        $form->deadline_date = $deadline_date;
        $form->content = $request->input('content');
        $form->user_id = Auth::id();

        $form->save();
        $id = $form->id;
        $user_id = $form->user_id;

        $filePath = []; 

        foreach ($request->file('attachments') as $file) {
            if ($file->isValid()) {
                $name = $file->getClientOriginalName();
                $path = $file->storeAs('public/files/reports/'.$user_id.'/'.$id, str_replace(' ', '-', $name));
                $filePath[] = $path;
            }
        }

        $form->file_path = json_encode($filePath);
        $form->save();

        return redirect()->back()->with('success', 'Reports submitted successfully!');
    }


    public function reportDelete($id)
    {
        $report = Report::findOrFail($id);
        $user_id = Auth::id();
        Storage::deleteDirectory('public/files/reports/'.$user_id.'/'.$id);
        $report->delete();

        return redirect('/profile/reports')->with('report delete','report deleted successfully');
    }

    public function reportUpdate(Request $request, $id)
    {
        
        $form = Report::findOrFail($id);

        $form->title = $request->input('title');
        $form->publish_date = Carbon::now();
        $deadline_date = Carbon::createFromFormat(
            'Y-m-d H:i',
            $request->input('date') . ' ' . $request->input('hour') . ':' . $request->input('minute')
        );
        $form->deadline_date = $deadline_date;
        $form->content = $request->input('content');
        $form->user_id = Auth::id();

        $form->save();

        $user_id = $form->user_id;

        if ($request->hasFile('attachments')) {
            $filePath = [];

            foreach ($request->file('attachments') as $file) {
                if ($file->isValid()) {
                    $name = $file->getClientOriginalName();
                    $path = $file->storeAs('public/files/reports/'.$user_id.'/'.$id, str_replace(' ', '-', $name));
                    $filePath[] = $path;
                }
            }

            $form->file_path = json_encode($filePath);
            $form->save();
        }

        return redirect()->back()->with('success', 'Report updated successfully!');
    }
    
}
