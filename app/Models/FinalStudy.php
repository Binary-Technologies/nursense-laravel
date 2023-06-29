<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalStudy extends Model
{
    protected $fillable = [
        'instructor_id',
        'name',
        'description',
        'register_date',
        'deadline_date',
    ];

    public $timestamps = false;

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function questions()
    {
        return $this->hasMany(FinalStudyQuestion::class, 'final_id', 'id');
    }
}
