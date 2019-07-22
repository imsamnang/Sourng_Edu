<?php

namespace App\Models;

use App\Models\Faculty;
use App\Models\OveralFund;
use App\Models\ProgramType;
use Illuminate\Database\Eloquent\Model;

class CourseLong extends BaseModel
{
  public $timestamps= false;
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

  public function overalFundName()
    {
      return $this->belongsTo(OveralFund::class,'overall_fund_id');
    }

  public function Curri_Edorsement()
    {
      return $this->belongsTo(CurriculumEndorsement::class,'curriculum_endorsement_id');
    }

  public function Curri_Author()
    {
      return $this->belongsTo(CurriculumAuthor::class,'curriculum_author_id');
    }


}
