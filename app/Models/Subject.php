<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'title','slug','code', 'full_mark_theory', 'pass_mark_theory',
        'full_mark_practical', 'pass_mark_practical', 'credit_hour', 'sub_type', 'class_type', 'staff_id','objective',
        'description','subject_fee','image','status','project_status'];


    public function semester()
    {
        return $this->belongsToMany(Semester::class);
    }

    public function scopeProjectStatus($query)
    {
        return $query->where('project_status',1);
    }

    function subjectCourseOutline() 
    {
        return $this->hasMany(SubjectCourseOutline::class);
    }

}
