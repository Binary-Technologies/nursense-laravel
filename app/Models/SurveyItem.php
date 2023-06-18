<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyItem extends Model
{
    protected $fillable = ['title', 'questions'];
    protected $casts = [
        'questions' => 'array'
    ];
}
