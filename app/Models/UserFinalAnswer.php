<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFinalAnswer extends Model
{
    protected $fillable = [
        'final_id',
        'user_id',
        'final_question_id',
        'given_answer',
    ];
}
