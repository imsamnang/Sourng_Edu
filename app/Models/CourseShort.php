<?php

namespace App\Models;

use App\Models\Faculty;
use App\Models\Modality;
use App\Models\OveralFund;
use App\Models\Province;
use Illuminate\Database\Eloquent\Model;

class CourseShort extends Model
{
    protected $table = 'course_short';

    public function faculty()
    {
    	return $this->belongsTo(Faculty::class,'course_code_id');
    }

    public function overalFund()
    {
    	return $this->belongsTo(OveralFund::class,'overal_fund_id');
    }

    public function modalityName()
    {
        return $this->belongsTo(Modality::class,'modality_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class,'province_id','id');
    }

    public function district()
    {
        return $this->belongsTo(District::class,'district_id','id');
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class,'commune_id','id');
    }   

  }

