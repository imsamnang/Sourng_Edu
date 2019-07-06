<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LongCourse extends BaseModel
{
  protected $table = 'course_long';
  protected $fillable = ['faculties_id', 'program_type_id','overall_fund_id',
                          'curriculum_endorsement_id','curriculum_author_id',
                          'promotion_start_date','academic_year',
                          'batch_group',                                
                          'status'];
  public function faculty()
  {
    return $this->belongsTo(Faculty::class,'faculties_id');
  }

  public function program_type()
  {
    return $this->belongsTo(ProgramType::class,'program_type_id');
  }


}
