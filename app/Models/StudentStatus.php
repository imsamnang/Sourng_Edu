<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentStatus extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'title', 'status','students_id'];

    // public function students()
    // {
    //     return $this->belongsTo(Student::class, 'id');
    // }
    
}

