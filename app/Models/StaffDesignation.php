<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffDesignation extends BaseModel
{
    protected $table='staff_designations';
    protected $fillable = ['created_by', 'last_updated_by', 'title', 'status'];
}
