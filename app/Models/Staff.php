<?php

namespace App\Models;

use App\Models\Commune;
use App\Models\District;
use App\Models\Province;
use App\Models\StaffDesignation;
use Illuminate\Database\Eloquent\Model;

class Staff extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'reg_no', 'join_date', 'designation', 
        'first_name', 'last_name','father_name', 'mother_name', 'date_of_birth', 'gender','blood_group','nationality','pob','mother_tongue', 'address','temp_address','home_phone', 'mobile_1', 'mobile_2', 'email', 'general_education_id','qualification_id', 'experience','experience_info', 'other_info', 'staff_image','institute_id','province_id','district_id','commune_id'];

    public function payrollMaster()
    {
      return $this->hasMany(PayrollMaster::class, 'staff_id');
    }

    public function paySalary()
    {
      return $this->hasMany(SalaryPay::class, 'staff_id');
    }

    public function province()   
    {
      return $this->belongsTo(Province::class, 'province_id');
    }

    public function district()   
    {
      return $this->belongsTo(District::class, 'district_id');
    }

    public function commune()   
    {
      return $this->belongsTo(Commune::class, 'commune_id');
    }
    public function designat()   
    {
      return $this->belongsTo(StaffDesignation::class, 'designation');
    }

}
