<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends BaseModel
{
    protected $table = 'faculties';
    protected $fillable = ['created_by', 'last_updated_by', 'faculty', 'slug', 'status'];

    public function semester() {
        return $this->belongsToMany(Semester::class);
    }

    //     public function students() {
    //     return $this->belongsToMany(Student::class);
    // }
}
