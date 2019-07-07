<?php

namespace App\Models;

use App\Models\CourseShort;
use Illuminate\Database\Eloquent\Model;

class Faculty extends BaseModel
{
    protected $table = 'faculties';
    protected $fillable = ['created_by', 'last_updated_by', 'faculty', 'slug', 'status'];

    public function semester() 
    {
        return $this->belongsToMany(Semester::class);
    }

     public function courseshort()
    {
    	return $this->hasOne(CourseShort::class,'course_code_id');
    }

    //     public function students() {
    //     return $this->belongsToMany(Student::class);
    // }
}
