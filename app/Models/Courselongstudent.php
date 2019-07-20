<?php

namespace App\Models;

use App\Models\CourseShort;
use App\Models\Faculty;
use App\Models\OveralFund;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;

class Courselongstudent extends Model
{
    protected $table = 'course_long_student';
    public $timestamps= false;

    public function overalFund()
    {
        return $this->belongsTo(OveralFund::class,'overal_fund_id');
    }

    public function fuculty()
    {
        return $this->belongsTo(Faculty::class,'course_long_id');
    }

    public function Course_Long()
    {
        return $this->belongsTo(LongCourse::class,'course_long_id');
    }

    public function stu()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}
