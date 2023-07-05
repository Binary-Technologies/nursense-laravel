<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPreLearning extends Model
{
    protected $fillable = [
        'pre_learning_id',
        'user_id',
        'points',
        'correct_count'
    ];
}
