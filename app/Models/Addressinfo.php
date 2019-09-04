<?php

namespace App\Models;

use App\Models\Commune;
use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Eloquent\Model;

class Addressinfo extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'students_id',
        'address', 'state', 'country',  'temp_address', 'temp_state', 'temp_country',
        'province_id', 'district_id', 'commune_id', 'village', 
    'home_phone', 'mobile_1', 'mobile_2', 'status'];

    public function students()
    {
        return $this->belongsTo(Student::class, 'id');
    }

    public function provinces()
    {
        return $this->belongsTo(Province::class,'province_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function commnue()
    {
        return $this->belongsTo(Commune::class, 'commune_id');
    }

}
