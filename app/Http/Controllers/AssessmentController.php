<?php

namespace App\Http\Controllers;

use App\Models\FinalStudy;
use App\Models\FinalStudyQuestion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AssessmentController extends Controller
{
    public function registerAssessment(Request $request){
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'total' => 'required',
        ]);

        if ($validate->fails())return redirect()->back()->withErrors($validate)->withInput();
        
        $quiz = FinalStudy::create([  
            'instructor_id' => Auth::id(),             
            'name' => $request->input('title'),            
            'description' => $request->input('content'),
            'total_points' => $request->input('total'),
            'register_date' => Carbon::now(),
            $deadline_date = Carbon::createFromFormat(
                'Y-m-d H:i',
                $request->input('date') . ' ' . $request->input('time') . ':' . $request->input('minute')
            ),
            'deadline_date' => $deadline_date,
        ]);

        $questions = $request->input('questions');
        foreach ($questions as $questionData) {
            $quizQuestion = new FinalStudyQuestion();
            $quizQuestion->question = $questionData['question'];
            $quizQuestion->option_1 = $questionData['option1'];
            $quizQuestion->option_2 = $questionData['option2'];
            $quizQuestion->option_3 = $questionData['option3'];
            $quizQuestion->option_4 = $questionData['option4'];
            $quizQuestion->option_5 = $questionData['option5'];
            // $quizQuestion->answer = $questionData['answer'];
            $quizQuestion->points = $questionData['points'];

            $quiz->questions()->save($quizQuestion);
        }
        
        return redirect('/profile/assesment')->with('Assessment added', 'Assessment has been added.');
    }
}
