<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSurvey extends Model
{
    protected $fillable = [
        'responses',
    ];

    protected $casts = [
        'responses' => 'array'
    ];
}
