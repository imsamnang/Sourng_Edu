<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualifications extends Model
{
    //
    // protected $table='qualifications';
    protected $fillable = ['created_by', 'last_updated_by', 'teacher_exam_id',
                            'passed_competency','association_id', 'teaching', 'other'];

    public function teacherExam()
    {
        // return $this->hasMany(TeacherExam::class, 'staff_id');
        // return $this->hasOne('App\Models\TeacherExam');
        return $this->hasOne('App\Models\TeacherExam', 'qualifications_id');
    }
    
}
