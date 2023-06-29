<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreLearning;
use App\Models\PreLearningAnswers;
use App\Models\PreLearningQuestion;

class PreLearningController extends Controller
{
    public function quiz($id){
        $played = PreLearningAnswers::where('pre_learning_id', $id)->where('user_id', \Auth::user()->id)->first();
        if($played) return redirect('/curriculum/quiz/CheckAns/'.$id);

        $quiz = PreLearning::where('id', $id)->with('questions')->first();
        $type = 'pre-learning';
        return view('pages.quiz', compact('quiz', 'type'));
    }

    public function quizSubmit(Request $request){
        // return $request;
        foreach ($request->input('quizAnswers') as $key => $value) {
            PreLearningAnswers::create([
                'pre_learning_id' => $request->quiz_id,
                'user_id' => \Auth::user()->id,
                'pre_learning_question_id' => $key,
                'given_answer' => $value,
            ]);
        }
        return redirect('/curriculum/quiz/CheckAns/'.$request->pre_learning_id);
    }

    public function quizCheckAns($id)
    {
        $quiz = PreLearning::where('id', $id)->with('questions')->first();
        foreach ($quiz->questions as $key => $question) {
            $userAnswer = PreLearningAnswers::where('pre_learning_id', $id)->where('pre_learning_question_id', $question->id)->where('user_id', \Auth::user()->id)->first();
            $question['given_answer'] = $userAnswer->given_answer;
        }
        return view('pages.quiz-check-ans', compact ('quiz'));
    }
}