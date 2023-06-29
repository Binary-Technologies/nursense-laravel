<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'title',
        'content',
        'publish_date',
        'deadline_date',
        'file_path',
    ];

    public $timestamps = false;
}
