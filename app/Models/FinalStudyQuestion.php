<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalStudyQuestion extends Model
{
    
    protected $fillable = [
        'final_id',
        'question',
        'answer',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'option_5',
        'points',
    ];

    public $timestamps = false;
}
