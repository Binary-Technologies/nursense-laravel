<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMainStudy;
use App\Models\FinalStudy;
use App\Models\FinalStudyQuestion;
use App\Models\UserFinalAnswer;
use App\Models\UserFinal;
use App\Models\UserReport;
use App\Models\UserSurvey;
use Illuminate\Support\Facades\Storage;

class MainStudyController extends Controller
{
    public function learning()
    {
        $curriculum_id = 1;
        // \DB::enableQueryLog();
        $studies = UserMainStudy::where('student_id', \Auth::user()->id)->with('mainStudy', function($query) use ($curriculum_id) {
            $query->where('curriculum_id', $curriculum_id)->with('instructor:id,name', 'final:id', 'report:id', 'survey:id');
        })->with('userFinalAnswers', 'userReport', 'userSurvey')->get();
        // dd(\DB::getQueryLog());
        // return $studies;
        return view('pages.learning', compact('studies'));
    }

    public function learning_details($id)
    {
        $study = UserMainStudy::where('id', $id)->with('mainStudy', function($query) {
            $query->with('instructor:id,name', 'curriculum', 'final', 'report', 'survey:id');
        })->with('userFinalAnswers', 'userReport', 'userSurvey')->first();
        return view('pages.learning_details', compact('study'));
    }

    public function quiz($id){
        $played = UserFinalAnswer::where('final_id', $id)->where('user_id', \Auth::user()->id)->first();
        if($played) return redirect('/curriculum/learning');

        $quiz = FinalStudy::where('id', $id)->with('questions')->first();
        $type = 'final';
        return view('pages.quiz', compact('quiz', 'type'));
    }

    public function quizSubmit(Request $request){
        $correctCount = 0;
        $totalPoints = 0;
        $userFinal = UserFinal::create([
            'final_id' => $request->quiz_id,
            'user_id' => \Auth::user()->id,
        ]);

        foreach ($request->input('quizAnswers') as $key => $value) {
            $question = FinalStudyQuestion::where('id', $key)->first();
            UserFinalAnswer::create([
                'final_id' => $request->quiz_id,
                'user_final_id' => $userFinal->id,
                'user_id' => \Auth::user()->id,
                'final_question_id' => $key,
                'given_answer' => $value,
                'points' => $question->answer == $value ? $question->points : 0,
            ]);
            if($question->answer == $value){
                $correctCount++;
                $totalPoints += $question->points;
            }
        }

        $userFinal->update([
            'correct_count' => $correctCount,
            'total_points' => $totalPoints,
        ]);

        return redirect('/curriculum/learning/final-quiz/CheckAns/'.$request->quiz_id);
    }

    public function quizCheckAns($id)
    {
        $quiz = FinalStudy::where('id', $id)->with('questions')->first();
        foreach ($quiz->questions as $key => $question) {
            $userAnswer = UserFinalAnswer::where('final_id', $id)->where('final_question_id', $question->id)->where('user_id', \Auth::user()->id)->first();
            $question['given_answer'] = $userAnswer->given_answer;
        }
        return view('pages.quiz-check-ans', compact ('quiz'));
    }

    public function uploadReport(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $name = $request->file('file')->getClientOriginalName();  
        $fileName = $request->file('file')->storeAs('public/files/reports/'.\Auth::user()->id.'/'.$request->hidden('study_id'), str_replace(' ', '-', $name));
        
        $userReport = UserReport::create([
            'file_path' => $fileName,
        ]);

        $report = UserMainStudy::where('id', $request->study_id)->first();
        $report->user_report_id = $userReport->id;
        $report->save();

        return redirect('/curriculum/learning');
    }

//     public function uploadReport(Request $request)
// {
//     $request->validate([
//         'file' => 'required|mimes:pdf|max:2048',
//     ]);

//     // Get the study ID and report ID from the form
//     $studyId = $request->input('study_id');
//     $reportId = $request->input('report_id');

//     // Get the user's ID
//     $userId = \Auth::user()->id;

//     // Get the uploaded file's original name
//     $name = $request->file('file')->getClientOriginalName();

//     $fileName = $request->file('file')->storeAs("public/files/reports/{$userId}/{$studyId}", str_replace(' ', '-', $name));

//     $userReport = UserReport::create([
//         'file_path' => $fileName,
//     ]);

//     $report = UserMainStudy::find($studyId);
//     if ($report && $report->user_report_id === $reportId) {
//         $report->user_report_id = $userReport->id;
//         $report->save();
//     } else {
//         return redirect('/curriculum/learning')->with('error', 'Invalid Study or Report ID');
//     }

//     return redirect('/curriculum/learning')->with('success', 'Report uploaded successfully');
// }

public function updateReport(Request $request, $studyId)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        // Get the existing report for the given study ID
        $report = UserMainStudy::findOrFail($studyId)->userReport;

        // Delete the old file from storage if it exists
        if ($report && Storage::exists($report->file_path)) {
            Storage::delete($report->file_path);
        }

        // Get the user's ID
        $userId = \Auth::user()->id;

        // Get the uploaded file's original name
        $name = $request->file('file')->getClientOriginalName();

        // Store the file with a sanitized name in the storage
        $fileName = $request->file('file')->storeAs("public/files/reports/{$userId}/{$studyId}", str_replace(' ', '-', $name));

        if ($report) {
            $report->update([
                'file_path' => $fileName,
            ]);
        } else {
            $userReport = UserReport::create([
                'file_path' => $fileName,
            ]);

            // Link the new report to the main study
            $report = UserMainStudy::find($studyId);
            $report->user_report_id = $userReport->id;
            $report->save();
        }

        // Redirect back 
        return redirect('/curriculum/learning')->with('success', 'Report updated successfully');
    }
}
