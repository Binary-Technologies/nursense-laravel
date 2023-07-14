<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainStudy extends Model
{
    
    protected $fillable = [
        'university_id',
        'department_id',
        'semester_id',
        'curriculum_id',
        'instructor_id',
        'pre_learning_id',
        'final_id',
        'report_id',
        'survey_id',
        'name',
        'description',
        'end_date',
    ];

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
    
    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function preLearning(){
        return $this->hasOne(PreLearning::class, 'id', 'pre_learning_id');
    }

    public function final()
    {
        return $this->hasOne(FinalStudy::class, 'id', 'final_id');
    }

    public function report()
    {
        return $this->hasOne(Report::class, 'id', 'report_id');
    }

    public function survey()
    {
        return $this->hasOne(SurveyItem::class, 'id', 'survey_id');
    }
}
