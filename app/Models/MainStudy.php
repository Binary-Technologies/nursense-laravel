<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainStudy extends Model
{
    protected $fillable = [
        'curriculum_id',
        'instructor_id',
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

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
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
