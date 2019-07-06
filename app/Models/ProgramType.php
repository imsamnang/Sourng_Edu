<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramType extends Model
{
  protected $table = 'program_type';

  public function longcourse()
  {
      return $this->hasOne(LongCourse::class,'program_type_id');
      // return $this->belongsTo('App\LongCourse');
  }  
}
