<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['pre_learning', 'main_study', 'report', 'cutoff', 'cert_explanation'];
    public $timestamps = false;
}
