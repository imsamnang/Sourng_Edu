<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralEducation extends Model
{
	protected $table='general_education';

	// public function districts()
	// {
	// 	return $this->hasMany(District::class,'province_id','id');
	// }

	// public function courseshort()
	// {
	// 	return $this->hasMany(CourseShort::class,'id','province_id');
	// }
	
}
