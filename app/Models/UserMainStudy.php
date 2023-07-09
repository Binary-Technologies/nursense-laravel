<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMainStudy extends Model
{
    protected $fillable = [
        'main_study_id',
        'student_id',
        'user_final_id',
        'user_report_id',
        'user_survey_id',
    ];

    public $timestamps = false;

    public function mainStudy(){
        return $this->belongsTo(MainStudy::class);
    }

    public function student(){
        return $this->belongsTo(User::class, 'student_id');
    }

    public function userFinal(){
        return $this->hasOne(UserFinal::class, 'id', 'user_final_id');
    }

    public function userFinalAnswers(){
        return $this->hasManyThrough(UserFinalAnswer::class, FinalStudy::class,'id',
        'final_id',
        'id',
        'id');
    }

    public function userReport(){
        return $this->hasOneThrough(UserReport::class, Report::class,'id',
        'id',
        'id',
        'id');
    }

    public function userSurvey(){
        return $this->hasOneThrough(UserSurvey::class, SurveyItem::class,'id',
        'id',
        'id',
        'id');
    }
}
