<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreLearning extends Model
{
    protected $fillable = ['curriculum_id', 'name', 'description', 'register_date', 'deadline_date', 'user_id', 'status'];

    public function questions(){
        return $this->hasMany(PreLearningQuestion::class);
    }
}
