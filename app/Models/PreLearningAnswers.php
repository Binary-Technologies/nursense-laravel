<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreLearningAnswers extends Model
{
    protected $fillable = [
        'pre_learning_id',
        'user_pre_learning_id',
        'user_id',
        'pre_learning_question_id',
        'given_answer'
    ];

    public function preLearning(){
        return $this->belongsTo(PreLearning::class);
    }

}
