<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectCourseOutline extends Model
{
    //
    protected $fillable = ['created_by', 'updated_at', 'title','slug'
                            ,'subject_id'
                            ,'detail'
                            ,'video_type','video'
                            ];
}
