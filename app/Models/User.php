<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    /*protected $fillable = [
        'inst_id',
        'std_id',
        'email',
        'pno',
        'name',
        'major',
        'active_status',
        'password',
        'dob',
        'occupation',
        'gender',
        'completion_status',
        'grade',
        'start_date',
        'end_date',
        'resident_reg',
        'thumbnail',
    ];*/
    protected $guarded = [];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $primaryKey = 'inst_id';
    public $incrementing = false;

    protected static function boot()
    {

        parent::boot();

        static::creating(function ($user) {
            //If the user role is instructor
            if ($user->role == 'instructor') {
                $lastUserId = static::max('inst_id');
                if ($lastUserId) {
                    $userIdNumber = intval(substr($lastUserId, 3)) + 1;
                } else {
                    $userIdNumber = 1;
                }

                $user->inst_id = 'ins' . str_pad($userIdNumber, 3, '0', STR_PAD_LEFT);

            } 
            
            //If the user role is student
            elseif($user->role == 'student') {
                $lastUserId = static::max('std_id');
                if ($lastUserId) {
                    $userIdNumber = intval(substr($lastUserId, 3)) + 1;
                } else {
                    $userIdNumber = 1;
                }

                $user->std_id = 'std' . str_pad($userIdNumber, 3, '0', STR_PAD_LEFT);

            }

            $password = Str::random(8); // Generate a random password of 8 characters
            $user->password = $password;
        });
    }
}
