<?php

namespace App;

use App\Models\QuizResults;
use App\Models\Roles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;


class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    protected $fillable = [
        'name', 'email', 'password','last_login_at','last_login_ip', 'profile_image', 'contact_number', 'address',  'role_id', 'hook_id', 'status'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userRole()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getStatusAttribute($value)
    {
        return $value == 1?'active':'in-active';
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value == 'active'?1:0;
    }

    public function quiz_results()
    {
      return $this->hasMany(QuizResults::class);
    }

    // To be implemented, this is for the frontend to check if a user passed a certian quiz.
    public function checkQuizPassedStatus($quiz)
    {

    }


}
