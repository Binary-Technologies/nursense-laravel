<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFinal extends Model
{
    protected $fillable = [
        'final_id',
        'user_id',
        'total_points',
        'correct_count'
    ];

    public function answers(){
        return $this->hasMany(UserFinalAnswer::class);
    }
}
