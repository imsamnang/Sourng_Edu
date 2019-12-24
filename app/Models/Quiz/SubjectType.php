<?php

namespace App\Models\Quiz;

use Illuminate\Database\Eloquent\Model;

class SubjectType extends Model
{
   protected $table = 'subject_types';
   protected $fillable = ['type','description'];

}
