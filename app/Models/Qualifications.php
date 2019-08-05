<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualifications extends Model
{
    //
    protected $table='qualifications';

    public function teacherExam()
    {
        // return $this->hasMany(TeacherExam::class, 'staff_id');
        // return $this->hasOne('App\Models\TeacherExam');
        return $this->hasOne('App\Models\TeacherExam', 'qualifications_id');
    }
    
}
