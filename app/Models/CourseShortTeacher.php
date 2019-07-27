<?php

namespace App\Models;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Model;

class CourseShortTeacher extends Model
{
	protected $table = 'course_short_teacher';
	protected $fillable = ['course_short_id', 'staff_id', 'total_hours'];

	public $timestamps = false;

	public function staff()
	{
		return $this->hasOne(Staff::class, 'id','staff_id');
	}
}
