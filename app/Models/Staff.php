<?php

namespace App\Models;

use App\Models\Commune;
use App\Models\District;
use Illuminate\Database\Eloquent\Model;

class Staff extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'reg_no', 'join_date', 'designation', 'first_name',  'middle_name', 'last_name',
        'father_name', 'mother_name', 'date_of_birth', 'gender', 'blood_group', 'nationality','mother_tongue', 'address', 'state', 'country',
        'temp_address', 'temp_state', 'temp_country', 'home_phone', 'mobile_1', 'mobile_2', 'email', 'qualification',
        'experience', 'experience_info', 'other_info','staff_image','institute_id','province_id','district_id','commune_id'];

    public function payrollMaster()
    {
        return $this->hasMany(PayrollMaster::class, 'staff_id');
    }

    public function paySalary()
    {
        return $this->hasMany(SalaryPay::class, 'staff_id');
    }

    public function povince()   
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function districts()   
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function communes()   
    {
        return $this->belongsTo(Commune::class, 'commune_id');
    }

}
