<?php

namespace App\Http\Controllers;

use App\Models\SurveyItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{
    public function surveyItemRegister(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'questions' => 'required',
        ]);

        if ($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();

        $surveyItem = SurveyItem::create([
            'title' => $request->title,
            'questions' => json_encode($request->questions)
        ]);

        return redirect('/admin/surveyItemDash')->with('Survey Item added', 'Survey Item has been added.');
    }

    public function surveyItemUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'questions' => 'required',
        ]);

        if ($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();

        $surveyItem = SurveyItem::findOrFail($id);
        $surveyItem->title = $request->title;
        $surveyItem->questions = json_encode($request->questions);
        $surveyItem->save();

        return redirect('/admin/surveyItemDash')->with('Survey Item updated', 'Survey Item has been updated.');
    }
}
